-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2019 at 03:53 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarigan`
--

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
(19, '2019_04_11_210249_create_biodata_mahasiswas_table', 1),
(20, '2019_05_10_205415_create_dosens_table', 1),
(21, '2019_05_18_152204_create_periodes_table', 1),
(22, '2019_05_18_152414_create_daftar_pesertas_table', 1),
(33, '2014_10_12_000000_create_users_table', 2),
(34, '2014_10_12_100000_create_password_resets_table', 2),
(35, '2019_07_08_190942_create_wilayahs_table', 2),
(36, '2019_07_08_191001_create_reports_table', 2);

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_wilayah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `target` int(11) NOT NULL,
  `real_sale_2p` int(11) NOT NULL,
  `real_sale_3p` int(11) NOT NULL,
  `mig_2p` int(11) NOT NULL,
  `mig_3p` int(11) NOT NULL,
  `lite_brite` int(11) NOT NULL,
  `churn_out` int(11) NOT NULL,
  `non_indihome` int(11) NOT NULL,
  `down_sell` int(11) NOT NULL,
  `up_sell` int(11) NOT NULL,
  `target_nal` int(11) NOT NULL,
  `h1` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `id_wilayah`, `tanggal`, `target`, `real_sale_2p`, `real_sale_3p`, `mig_2p`, `mig_3p`, `lite_brite`, `churn_out`, `non_indihome`, `down_sell`, `up_sell`, `target_nal`, `h1`, `created_at`, `updated_at`) VALUES
(1, 'PMS', '2019-01-01', 35, 7, 11, 1, 4, 1, 0, 0, 1, 4, 30, 2, '2019-07-10 15:14:12', '2019-07-10 15:14:12'),
(2, 'KIS', '2019-01-01', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-07-10 15:14:12', '2019-07-10 15:14:12'),
(3, 'PSP', '2019-01-01', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-07-10 15:14:12', '2019-07-10 15:14:12'),
(4, 'RAP', '2019-01-01', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-07-10 15:14:12', '2019-07-10 15:14:12'),
(5, 'SBG', '2019-01-01', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-07-10 15:14:13', '2019-07-10 15:14:13'),
(6, 'KBJ', '2019-01-01', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-07-10 15:14:13', '2019-07-10 15:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$isZplWcHPDTnU1f0ZqPyQudal5fW40UZLxvfQWUXAdPjoqP6w94Ta', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wilayahs`
--

CREATE TABLE `wilayahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayahs`
--

INSERT INTO `wilayahs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'PMS', NULL, NULL),
(2, 'KIS', NULL, NULL),
(3, 'PSP', NULL, NULL),
(4, 'RAP', NULL, NULL),
(5, 'SBG', NULL, NULL),
(6, 'KBJ', NULL, NULL);

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wilayahs`
--
ALTER TABLE `wilayahs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wilayahs`
--
ALTER TABLE `wilayahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
