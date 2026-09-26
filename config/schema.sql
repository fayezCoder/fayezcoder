-- Fayez Coder Portfolio Database Schema
-- Run this in phpMyAdmin on Hostinger

CREATE TABLE IF NOT EXISTS `contact_inquiries` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(150) NOT NULL,
  `email` VARCHAR(190) NOT NULL,
  `phone` VARCHAR(50) DEFAULT NULL,
  `message` TEXT NOT NULL,
  `ip_address` VARCHAR(45) DEFAULT NULL,
  `user_agent` VARCHAR(255) DEFAULT NULL,
  `language` VARCHAR(5) DEFAULT 'ar',
  `status` ENUM('new', 'read', 'contacted', 'archived') DEFAULT 'new',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `project_views` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `project_slug` VARCHAR(100) NOT NULL,
  `clicked_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `referrer` VARCHAR(255) DEFAULT NULL,
  INDEX (`project_slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
