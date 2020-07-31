-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 03:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ae_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admit_date` date DEFAULT NULL,
  `batch_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `student_name`, `student_address`, `student_phone`, `home_phone`, `email`, `ae_name`, `course_title`, `course_duration`, `class_time`, `admit_date`, `batch_no`, `class_day`, `course_fee`, `discount`, `net_fee`, `student_id`, `student_picture`, `created_at`, `updated_at`) VALUES
(1, 'Md. Sohel Rana', 'Upashahor Rajshahi', '01729753365', '01746603042', 'sohelrr59@gmail.com', 'Afjal', 'Basic', '6 months', '4pm-5pm', '2020-02-25', '23', 'SMW', '4000', '500', '3500', 'NH00037', '1585819160.jpg', '2020-03-29 06:02:44', '2020-04-09 06:24:42'),
(2, 'Jahangir Hossain', 'Nator, Lalpur, Rajshahi', '01747202645', '01746603049', 'jahangir@gmail.com', 'Akash Billah', 'GD', '6 months', '4pm-5pm', '2020-03-26', '23', 'SMW', '5000', '1000', '4000', 'NH00035', '1585761520.jpg', '2020-03-29 06:04:29', '2020-04-01 11:18:41'),
(3, 'Sakhoat Hossain', 'Shipaipara rajshahi', '01729753367', '01746603041', 'sabiawasit@gmail.com', 'Akash Billah2', 'Basic', '6 months', '4pm-5pm', '2020-02-25', '24', 'SMW', '4000', '500', '3500', 'NH00042', '1585759492.jpg', '2020-03-29 06:18:24', '2020-04-01 10:44:52'),
(4, 'Biddut', 'Shipaipara rajshahi', '01729753344', '01746603033', 'mithun66@gmail.com', 'Afjal Hossain', 'GD', '6 months', '4pm-5pm', '2020-03-03', '23', 'SMW', '5000', '1000', '4000', 'NH00050', '1585763552.jpg', '2020-03-29 11:05:41', '2020-04-01 11:52:32'),
(5, 'Nasiruddin Mithun', 'Laxmipur, Rajshahi', '01747202632', '01746603042', 'mithun@gmail.com', 'Shohidul', 'GD', '6 months', '5pm-6pm', '2020-04-28', '24', 'STT', '4000', '500', '3500', 'NH00051', '1585819259.jpg', '2020-04-02 03:20:59', '2020-04-02 03:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_28_035743_create_admission_table', 2),
(5, '2020_04_03_053655_create_payment_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sohelrr59@gmail.com', '$2y$10$VUtSITT1.OGC/mze2RNfQ.DsGXi2ck4uLINQ3mCTl8BQ34q3UdyT2', '2020-04-09 06:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `admission_id`, `student_phone`, `payment_date`, `payment`, `created_at`, `updated_at`) VALUES
(1, '1', '01729753365', '2020-04-04', '1500', '2020-04-03 05:38:38', '2020-04-08 06:24:57'),
(2, '1', '01729753365', '2020-04-01', '500', '2020-04-03 05:48:10', '2020-04-03 05:48:10'),
(3, '2', '01747202645', '2020-04-03', '500', '2020-04-03 05:48:48', '2020-04-03 05:48:48'),
(4, '3', '01729753367', '2020-04-01', '1000', '2020-04-03 05:50:51', '2020-04-03 05:50:51'),
(5, '2', '01747202645', '2020-04-01', '1000', '2020-04-03 05:52:19', '2020-04-03 05:52:19'),
(6, '3', '01729753367', '2020-04-03', '1000', '2020-04-03 05:53:25', '2020-04-03 05:53:25'),
(9, '1', '01729753365', '2020-04-08', '1500', '2020-04-07 20:38:30', '2020-04-07 20:38:30'),
(11, '5', '01747202632', '2020-04-08', '2000', '2020-04-08 09:53:23', '2020-04-08 09:55:24'),
(12, '5', '01747202632', '2020-04-09', '1500', '2020-04-09 06:32:05', '2020-04-09 06:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohel Rana', 'sohelrr59@gmail.com', NULL, '$2y$10$Kzd5e3myKSHQ2xwXrVClX.Ug/eg7SWKFpUILyawQXzQNcwErEu1e6', NULL, '2020-01-31 01:11:52', '2020-01-31 01:11:52'),
(20, 'Jahangir Alom', 'jahangir@gmail.com', NULL, '$2y$10$jBdhq03ozD8fz4jxC/uFuuN3lm3gZcHYdeqSvCKIpCSLNa0vRhzX2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission_student_phone_unique` (`student_phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
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
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
