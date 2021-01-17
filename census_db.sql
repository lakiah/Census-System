-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 02:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `census_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `details_new`
--

CREATE TABLE `details_new` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `race` varchar(20) NOT NULL,
  `martial_status` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details_new`
--

INSERT INTO `details_new` (`id`, `name`, `birthdate`, `gender`, `religion`, `race`, `martial_status`, `address`, `created_at`, `updated_at`, `user_id`) VALUES
(5, 'Syahrul', '1996-08-14', 'Male', 'Islam', 'Malay', 'Single', 'Selangor', '2021-01-17 00:28:16', '2021-01-17 00:28:16', 5),
(7, 'Syafiqah', '1998-07-30', 'Female', 'Islam', 'Malay', 'Widowed', 'Sabah', '2021-01-17 00:59:18', '2021-01-17 00:59:18', 5),
(8, 'Yaya', '1995-06-22', 'Female', 'Islam', 'Malay', 'Married', 'Johor', '2021-01-17 01:08:45', '2021-01-17 01:08:45', 5),
(10, 'Tanushen', '1998-11-19', 'Male', 'Hindu', 'Indian', 'Divorced', 'Kuala Lumpur', '2021-01-17 01:12:19', '2021-01-17 01:12:19', 5),
(11, 'Jasmine', '1998-03-05', 'Female', 'Christian', 'Chinese', 'Single', 'Perak', '2021-01-17 01:44:08', '2021-01-17 01:44:08', 5),
(12, 'Sin Yee', '1997-07-15', 'Female', 'Christian', 'Chinese', 'Divorced', 'Pulau Pinang', '2021-01-17 05:20:45', '2021-01-17 05:20:45', 5),
(13, 'Sin Yee', '1997-07-15', 'Female', 'Christian', 'Chinese', 'Divorced', 'Pulau Pinang', '2021-01-17 05:21:12', '2021-01-17 05:21:12', 5),
(14, 'Haikal', '2013-01-03', 'Male', 'Islam', 'Malay', 'Single', 'Selangor', '2021-01-17 05:36:40', '2021-01-17 05:36:40', 5),
(15, 'Zin Kacak', '1996-03-07', 'Male', 'Islam', 'Malay', 'Married', 'Sabah', '2021-01-17 05:44:46', '2021-01-17 05:44:46', 5),
(16, 'Maria', '1997-07-22', 'Female', 'Budha', 'Chinese', 'Married', 'Perak', '2021-01-17 05:57:00', '2021-01-17 05:57:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2021_01_15_071322_create_details_table', 1),
(5, '2021_01_15_170553_add_user_id_to_details', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Mustaqim', 'mustaqim@gmail.com', NULL, '$2y$10$w/visoOiBu/CQu60T5oOv.ZT2ml2LGpvC3HImHz.nbJ2z3IkCQxIG', NULL, '2021-01-15 09:02:59', '2021-01-15 09:02:59'),
(2, 'Unknown', 'Unknown@gmail.com', NULL, '$2y$10$uaAZGJC5AKFRiHVKJTFrveRQN1bJbG5uRu43uqoHUxoJjj7C9os8u', NULL, '2021-01-15 09:50:06', '2021-01-15 09:50:06'),
(3, 'Test', 'Test@gmail.com', NULL, '$2y$10$YdsK27ZrXlKgGZSOSSG9..Xrbnldvvk02kZ5.jj7JNsUwa5ofLOxC', NULL, '2021-01-15 09:57:01', '2021-01-15 09:57:01'),
(4, 'Mus', 'Mus@gmail.com', NULL, '$2y$10$MNS7CHqG.9sHHTO/knnwM.5SSQ15M0QOWJdmTKQWcfZWjcN5M5jIW', NULL, '2021-01-16 06:45:56', '2021-01-16 06:45:56'),
(5, 'Haikal', 'afifhaikal55@hotmail.com', NULL, '$2y$10$ju2qdg3DYz3wivT9O0n7QO2sJRqutJcHt86GNz4Nz/a5afMKyJQQi', 'LzAl6IHJtEgQLnVL53sXKsASwpsHl7btgZBskjOq9CNhol8W5weH3qIsrjGE', '2021-01-16 10:47:11', '2021-01-16 10:47:11'),
(6, 'Afif Haikal', 'afifhaikal55@gmail.com', NULL, '$2y$10$ukWapkChM8oES7vnZMUWcu8OiW3AbXaShIIamsZQqm0PnDcWNOiXW', NULL, '2021-01-17 00:21:13', '2021-01-17 00:21:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details_new`
--
ALTER TABLE `details_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details_new`
--
ALTER TABLE `details_new`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
