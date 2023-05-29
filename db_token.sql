-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3333
-- Generation Time: Oct 28, 2022 at 05:46 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_token`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `phone_number` varchar(121) DEFAULT NULL,
  `name` varchar(121) DEFAULT NULL,
  `email` varchar(121) DEFAULT NULL,
  `date_time_reg` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `phone_number`, `name`, `email`, `date_time_reg`) VALUES
(1, '9788554460', 'karthik v v', 'karthik@example.com', '2022-10-03 15:54:26'),
(2, '9888884446', 'hari krishan', 'hari@example.com', '2022-10-04 10:05:22'),
(3, '9850401595', 'suresh s', 'suresh_s@example.com', '2022-10-04 10:08:35'),
(4, '9874456520', 'shiva shiv', 'shiva_shiv@example.com', '2022-10-04 10:09:47'),
(5, '1234567890', 'vimal kumar', 'vimal-kumar@example.com', '2022-10-07 10:11:33'),
(6, '9846077568', 'George Telgy', 'telgy1@gmail.com', '2022-10-12 09:50:58'),
(8, '1234567890', 'Vimal kumar 2 3', 'vk@example.com', '2022-10-12 12:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `installments`
--

CREATE TABLE `installments` (
  `id` int(11) NOT NULL,
  `token_id` int(11) DEFAULT NULL,
  `emi_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installments`
--

INSERT INTO `installments` (`id`, `token_id`, `emi_amount`) VALUES
(1, 1, '500.00'),
(2, 1, '1000.00'),
(3, 1, '1000.00'),
(4, 2, '500.00'),
(5, 2, '1500.00'),
(6, 2, '3000.00'),
(7, 3, '2000.00'),
(8, 3, '3000.00'),
(9, 3, '5000.00');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `fk_purchase_id` int(11) DEFAULT NULL,
  `amount` int(121) DEFAULT NULL,
  `pay_mode` varchar(121) DEFAULT NULL,
  `payment_description` varchar(255) DEFAULT NULL,
  `paymnet_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `fk_purchase_id`, `amount`, `pay_mode`, `payment_description`, `paymnet_date`) VALUES
(1, 1, 1250, 'upi', 'upi id: 9788554460@ex.a', '2022-10-03 15:55:54'),
(2, 1, 25, 'bank', 'test data', '2022-10-03 17:16:09'),
(3, 2, 2500, 'bank', 'settled full amount', '2022-10-04 10:10:04'),
(4, 3, 1250, 'cash', 'hai 123', '2022-10-07 10:12:00'),
(5, 3, 100, 'bank', 'transaction ID:SBI85556565656', '2022-10-07 10:47:51'),
(6, 3, 1350, 'cash', 'test', '2022-10-07 12:31:56'),
(7, 4, 2500, 'cash', 'sdfsd', '2022-10-12 09:51:22'),
(8, 5, 5000, 'cash', 'test', '2022-10-12 12:04:15'),
(9, 6, 1250, 'cash', 'asdad', '2022-10-12 14:51:51'),
(10, 7, 2500, 'bank', 'fdgdg', '2022-10-12 14:53:03'),
(11, 8, 2500, 'upi', '123', '2022-10-12 15:48:50'),
(12, 5, 2500, 'bank', '111', '2022-10-12 17:25:02'),
(13, 9, 500, 'cash', 'testing', '2022-10-28 10:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `fk_cus_id` varchar(121) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_string` varchar(255) DEFAULT NULL,
  `description` text,
  `pay_mode` varchar(121) DEFAULT NULL,
  `pay_type` varchar(121) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `date_reg` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `fk_cus_id`, `token`, `token_string`, `description`, `pay_mode`, `pay_type`, `total_amount`, `date_reg`) VALUES
(1, '1', '1', 'ofIe2', 'upi id: 9788554460@ex.a', 'upi', 'partial', '1250.00', '2022-10-03 15:55:54'),
(2, '4', '1', 'ofZiu', 'settled full amou nt', 'bank', 'full', '2500.00', '2022-10-04 10:10:04'),
(3, '5', '2', 'ogfBQ', 'hai 123', 'cash', 'partial', '1250.00', '2022-10-07 10:12:00'),
(4, '6', '1', 'oiTFC', 'sdfsd', 'cash', 'full', '2500.00', '2022-10-12 09:51:22'),
(5, '1', '3', 'oiVJn', 'test', 'cash', 'partial', '5000.00', '2022-10-12 12:04:15'),
(6, '6', '1', 'PX25M', 'asdad', 'cash', 'partial', '1250.00', '2022-10-12 14:51:51'),
(7, '6', '2', 'PX27O', 'fdgdg', 'bank', 'partial', '2500.00', '2022-10-12 14:53:03'),
(8, '1', '1', 'PX4XB', '123', 'upi', 'full', '2500.00', '2022-10-12 15:48:50'),
(9, '6', '1', 'QTWQC', 'testing', 'cash', 'partial', '500.00', '2022-10-28 10:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `amount` varchar(121) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `amount`) VALUES
(1, '2500'),
(2, '5000'),
(3, '10000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$10$mcvJ14i0KzGp5J.7c05yKeU5uWH100M3HZL2alYIb9C8SB.57ebhe', NULL, '2022-09-26 05:41:58', '2022-09-26 05:41:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `installments`
--
ALTER TABLE `installments`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installments`
--
ALTER TABLE `installments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
