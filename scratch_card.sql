-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 08:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scratch_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `scratch_number` int(11) DEFAULT NULL,
  `reward` varchar(255) DEFAULT NULL,
  `front` text NOT NULL DEFAULT 'default.jpg',
  `show_welcome` varchar(100) NOT NULL DEFAULT 'yes',
  `title` text NOT NULL,
  `description` text NOT NULL,
  `card1` varchar(255) NOT NULL,
  `card2` varchar(255) NOT NULL,
  `card3` varchar(255) NOT NULL,
  `card4` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `scratch_number`, `reward`, `front`, `show_welcome`, `title`, `description`, `card1`, `card2`, `card3`, `card4`, `created_date`) VALUES
(35, NULL, NULL, '16904034481684514223848 (1).jpg', 'yes', 'Welcome, Superadmin!', 'Portal is a free Bootstrap 5 admin dashboard. The design is simple, clean and modular so it\'s a great base for building any modern web app.', 'You won 5000 INR', 'You won 2000 INR', 'Your are third', 'You won 500 INR', '2023-07-27 02:30:48'),
(36, NULL, NULL, '', 'yes', 'Welcome, Superadmin!', 'Portal is a free Bootstrap 5 admin dashboard. The design is simple, clean and modular so it\'s a great base for building any modern web app.', 'You won 5000 INR', 'You won 2000 INR', 'Your are third', 'You won 500 INR', '2023-07-29 00:49:08'),
(37, NULL, NULL, 'default.jpg', 'yes', 'Welcome, Superadmin!', 'Portal is a free Bootstrap 5 admin dashboard. The design is simple, clean and modular so it\'s a great base for building any modern web app.', 'You won 5000 INR', 'You won 2000 INR', 'Your are third', 'You won 500 INR', '2023-07-29 00:52:05'),
(38, NULL, NULL, '1690570464realCliickerLogoWithboard.png', 'no', 'Welcome, Superadmin!', 'Portal is a free Bootstrap 5 admin dashboard. The design is simple, clean and modular so it\'s a great base for building any modern web app.', 'You won 5000 INR', 'You won 2000 INR', 'Your are third', 'You won 500 INR', '2023-07-29 00:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `visited_users`
--

CREATE TABLE `visited_users` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `page_id` varchar(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visited_users`
--

INSERT INTO `visited_users` (`id`, `ip_address`, `page_id`, `timestamp`) VALUES
(3, '::1', '35', '2023-07-28 18:46:36'),
(4, '::1', '36', '2023-07-28 18:49:55'),
(5, '::1', '37', '2023-07-28 18:53:09'),
(6, '::1', '38', '2023-07-28 18:54:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visited_users`
--
ALTER TABLE `visited_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `visited_users`
--
ALTER TABLE `visited_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
