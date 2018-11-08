-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 02:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, 'Zeeshan', 'zeeshan@zpanel.com', '$2y$10$1cjlH4WF3EdqWZVIpGDN8uqfIrMX/gYTlju0cJU9Nmtxlogm7ThNS', '9JSeQAp0XrMl1GNfh6ckjrIwSVH07hl7rIwCw0WifmGm1X90BCByWYeMcta1', 'uploads/3d647d0a48041c0791d7652925bd6c36.jpg', NULL, '2018-01-22 15:47:56'),
(2, 'admin', 'admin@admin.com', '$2y$10$kWMxigt8kyrFocT1UG5Wq.la2sRo42e380.nRq1A5Q/WfbCCKe6xu', NULL, 'uploads/3d647d0a48041c0791d7652925bd6c36.jpg', '2018-02-04 08:44:36', '2018-02-04 08:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_01_09_000000_create_admin_table', 1),
(2, '2018_01_21_000000_create_table_settings', 2),
(3, '2018_01_22_000000_create_service_categories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `category_name`, `description`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'kjhkj', 'dsfsdfsdf', NULL, '2018-01-22 15:53:05', '2018-01-23 13:21:34'),
(2, 'kjhkjh', 'kjhkjh', NULL, '2018-01-27 11:27:11', '2018-01-27 11:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'site_title', 'Z-panel'),
(2, 'admin_title', 'Z-Admin Panel'),
(3, 'admin_short_title', NULL),
(4, 'admin_email', NULL),
(5, 'admin_name', NULL),
(6, 'phone', NULL),
(7, 'footer_copyright_text', 'Copyright © 2018 All Rights Reserved - Service Providers'),
(8, 'site_logo', 'uploads/384d50eb79c12e57c1da3a48b93cb3e3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(7) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `phone`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Zeeshan', '', 'zeeshan@zpanel.com', '$2y$10$O4VcQbuXUZCWLjUA8g2.B.O0UUAV21HLXh6.JND2Al4P6P3s6I0L2', '', '', 0, 0, 'lr4Ry7pYWT2RCzkaTjVbtosjLOz4aRAmyhATM8UjCJvfnr3tG289BtrGA3fH', NULL, '2018-01-15 15:29:40'),
(5, 'ALI HYDER', '', 'hyder@gmail.com', '$2y$10$vhQX.pAstutClpfVhRFnLOQtWvYg9dizntvIHBgVQoQK1HOvbLKSK', '', '', 0, 0, NULL, '2018-01-14 07:50:45', '2018-01-14 07:50:45'),
(6, 'Imran', 'Khan', 'imran@zpanel.com', '$2y$10$o2Q.Wrw0ly9MmSM92wAdL.2iSRiIoH89EYdHf1hgRmRwmC67BJqCm', 'male', '1213445', 1, 0, NULL, '2018-01-18 16:51:20', '2018-01-18 16:51:20'),
(7, 'sadasd', 'asdasd', 'zeeshan2@zpanel.com', '$2y$10$buSjy9c2LRrs8qFGMKZPSumL1JQ.4rfMEwbibG6yh8pfxwAdNqDc6', 'male', 'as2weqsedas', 1, 0, NULL, '2018-01-19 17:29:29', '2018-01-19 17:29:29'),
(8, 'asdasd', 'asdasd', 'zeeshan3@zpanel.com', '$2y$10$S.hhNGG1rZmKl...YpMy.OCUuEtRAMXITIi83MnPz.PmJ5W.LN8Di', 'male', 'asdasd', 1, 0, NULL, '2018-01-19 17:32:58', '2018-01-19 17:32:58'),
(9, 'sadasd', 'sadasd', 'zeeshan4@zpanel.com', '$2y$10$ioMHb7EGvtEoEB/rumwVsu4x0LTuq6oqjZp8hrBAKCiDy9/tcoHoi', 'male', 'sadasd', 1, 0, NULL, '2018-01-19 17:34:28', '2018-01-19 17:34:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_name_index` (`name`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
