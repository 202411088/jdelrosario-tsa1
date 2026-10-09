-- Database: `task_manager`
CREATE DATABASE IF NOT EXISTS `task_manager` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `task_manager`;

CREATE TABLE `tasks` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(150) NOT NULL,
  `status` VARCHAR(20) NOT NULL DEFAULT 'pending',
  `task_date` DATE NOT NULL,
  `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `full_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tasks` (`title`, `status`, `task_date`, `created_at`) VALUES
('Finish project setup', 'in-progress', '2026-10-09', NOW()),
('Write Welcome page code', 'pending', '2026-10-09', NOW()),
('Style pages with Bootstrap', 'completed', '2026-10-09', NOW()),
('Review schema design', 'completed', '2026-10-08', NOW()),
('Draft seeder files', 'pending', '2026-10-08', NOW()),
('Plan GitHub repo structure', 'pending', '2026-10-10', NOW()),
('Test all 4 pages', 'in-progress', '2026-10-10', NOW()),
('Deploy to hosting', 'pending', '2026-10-11', NOW());

INSERT INTO `users` (`username`, `full_name`, `email`, `created_at`) VALUES
('demo_user', 'Student Developer', 'demo@example.com', NOW());