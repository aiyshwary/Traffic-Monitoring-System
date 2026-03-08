-- ============================================================
-- Traffic Monitoring System (TMS) - Database Schema
-- Database: project
-- ============================================================

CREATE DATABASE IF NOT EXISTS `project`
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `project`;

-- ------------------------------------------------------------
-- Citizens table
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `citizen` (
    `id`       INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(100) NOT NULL,
    `email`    VARCHAR(100) NOT NULL UNIQUE,
    `Phone`    VARCHAR(15),
    `VID`      VARCHAR(20),
    `pass`     VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Officers table
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `officer` (
    `id`       INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(100) NOT NULL,
    `email`    VARCHAR(100) NOT NULL UNIQUE,
    `OID`      VARCHAR(20),
    `pass`     VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Fines table
-- A row is created for each citizen at signup.
-- Officers update the amount; citizens pay online.
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `fine` (
    `id`       INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(100),
    `VID`      VARCHAR(20),
    `amount`   DECIMAL(10,2) DEFAULT 0.00,
    `paid`     TINYINT(1)   DEFAULT 0        -- 0 = pending, 1 = paid
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Roads table
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `road` (
    `id`           INT AUTO_INCREMENT PRIMARY KEY,
    `station_name` VARCHAR(100),
    `road_name`    VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Signalling table
-- Officers manage signal timings per road.
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `signalling` (
    `id`        INT AUTO_INCREMENT PRIMARY KEY,
    `road_name` VARCHAR(100),
    `time_from` VARCHAR(20),
    `time_to`   VARCHAR(20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Sample data (optional – remove in production)
-- ------------------------------------------------------------
INSERT IGNORE INTO `road` (`station_name`, `road_name`) VALUES
    ('Central Station', 'MG Road'),
    ('North Gate',      'NH-47'),
    ('East Junction',   'Ring Road');

INSERT IGNORE INTO `signalling` (`road_name`, `time_from`, `time_to`) VALUES
    ('MG Road',    '06:00', '10:00'),
    ('NH-47',      '08:00', '12:00'),
    ('Ring Road',  '07:00', '09:00');
