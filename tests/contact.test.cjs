const {test} = require('node:test');
const assert = require('node:assert/strict');
const vm = require('node:vm');
const fs = require('node:fs');
const script = fs.readFileSync('assets/js/modern.js', 'utf8');
function setup(lang = 'ar') {
    const events = {}, navigation = [], nodes = {};
    for (const [id, value] of Object.entries({
        'lead-name': 'Test User', 'lead-email': 'test@example.com',
        'lead-phone': '+966500000000', 'lead-message': 'اختبار & details\nSecond line'
    })) nodes[id] = {id, value, attrs: {}, checkValidity: () => true,
        setAttribute(k,v) { this.attrs[k] = v; }, removeAttribute(k) { delete this.attrs[k]; },
        focus() { this.focused = true; }};
    nodes['lead-category'] = {options: [{text: 'Mobile app'}], selectedIndex: 0};
    nodes['lead-fields'] = {disabled: true};
    nodes['form-feedback'] = {};
    nodes['lead-form'] = {
        dataset: {whatsapp: '966555861780', errorMessage: 'Required'},
        addEventListener: (name, handler) => events[name] = handler
    };
    const document = {
        documentElement: {lang},
        getElementById: id => nodes[id] || null,
        querySelector: () => null, querySelectorAll: () => [],
        addEventListener: (name, handler) => { if (name === 'DOMContentLoaded') handler(); }
    };
    vm.runInNewContext(script, {document, window: {
        location: {assign: url => navigation.push(url)},
        open: () => { throw new Error('Unexpected popup'); }
    }});
    return {nodes, navigation, submit: () => events.submit({preventDefault() {}}), events};
}
for (const lang of ['ar','en']) test(`one WhatsApp navigation, encoded content and preserved values (${lang})`, () => {
    const app = setup(lang);
    assert.equal(app.nodes['lead-fields'].disabled, false);
    app.submit();
    assert.equal(app.navigation.length, 1);
    const url = new URL(app.navigation[0]);
    assert.equal(url.origin, 'https://wa.me');
    assert.equal(url.pathname, '/966555861780');
    assert.ok(url.searchParams.get('text').includes('اختبار & details\nSecond line'));
    assert.ok(url.searchParams.get('text').includes(lang === 'ar' ? 'السلام عليكم' : 'Hello Fayez'));
    assert.equal(app.nodes['lead-name'].value, 'Test User');
});
test('invalid input does not navigate and focuses the invalid field', () => {
    const app = setup();
    app.nodes['lead-email'].value = 'bad';
    app.submit();
    assert.equal(app.navigation.length, 0);
    assert.equal(app.nodes['lead-email'].focused, true);
    assert.equal(app.nodes['lead-email'].attrs['aria-invalid'], 'true');
    app.events.input({target: app.nodes['lead-email']});
    assert.equal(app.nodes['lead-email'].attrs['aria-invalid'], undefined);
});
test('whitespace-only required fields are rejected', () => {
    const app = setup(); app.nodes['lead-name'].value = '   '; app.submit();
    assert.equal(app.navigation.length, 0);
    assert.equal(app.nodes['lead-name'].focused, true);
});
