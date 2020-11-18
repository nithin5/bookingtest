-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 10:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_16_204824_create_services_table', 2),
(4, '2020_11_16_205016_create_user_profile_table', 2),
(5, '2014_10_12_200000_create_services_table', 3),
(6, '2014_10_12_300000_create_user_profiles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deals` int(11) NOT NULL,
  `requested_user_id` int(11) NOT NULL,
  `service_user_id` int(11) NOT NULL,
  `requested_time` datetime NOT NULL,
  `avail_start_time` datetime NOT NULL,
  `avail_end_time` datetime NOT NULL,
  `status` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin_time` datetime NOT NULL,
  `payment_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `deals`, `requested_user_id`, `service_user_id`, `requested_time`, `avail_start_time`, `avail_end_time`, `status`, `checkin_time`, `payment_time`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 3, '2020-11-17 12:47:43', '2020-11-18 12:47:43', '2020-11-19 12:47:43', '1', '2020-11-17 11:11:01', '2020-11-17 12:11:00', NULL, '2020-11-17 06:45:00'),
(2, 3, 2, 3, '2020-11-17 12:47:43', '2020-11-19 12:47:43', '2020-11-20 12:47:43', '1', '2020-11-18 09:11:57', '0000-00-00 00:00:00', NULL, '2020-11-18 03:47:57'),
(3, 6, 6, 3, '2020-11-18 12:42:53', '2020-11-19 12:42:53', '2020-11-20 12:42:53', '1', '2020-11-18 09:11:00', '0000-00-00 00:00:00', NULL, '2020-11-18 03:41:00'),
(4, 8, 7, 3, '2020-11-18 12:42:53', '2020-11-20 12:42:53', '2020-11-21 12:42:53', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pic` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `user_name`, `user_pic`, `user_address`, `user_city`, `user_description`, `user_type`, `user_id`, `price`, `created_at`, `updated_at`) VALUES
(1, 'nithin', 'user1.jpg', 'erk south,kochi', 'kochi', '', 1, 1, 0.00, NULL, NULL),
(2, 'stefan', 'user2.jpg', 'it park,kochi', 'kochi', '', 1, 2, 0.00, NULL, NULL),
(5, 'best salons', '', 'infopark,kochi', 'kochi', 'best salon in the city', 2, 3, 200.00, NULL, NULL),
(6, 'sujish', 'user6.jpg', 'kadavantra,kochi', 'kochi', '', 1, 6, 0.00, NULL, NULL),
(7, 'shyju', 'user7.jpg', 'maradu,kochi', 'kochi', '', 1, 7, 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nv.nithin@gmail.com', '', NULL, NULL, NULL),
(2, 'test@gmail.com', '', NULL, NULL, NULL),
(3, 'salon@gmail.com', '', NULL, NULL, NULL),
(4, 'tsh@gmail.com', '', NULL, NULL, NULL),
(5, 'r@gmail.com', '', NULL, NULL, NULL),
(6, 'sujish@gmail.com', '', NULL, NULL, NULL),
(7, 'shyju@gmail.com', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
