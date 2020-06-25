-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Okt 2018 pada 06.37
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bumdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `modal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `id_barang`, `nama_barang`, `satuan`, `harga_beli`, `harga`, `stok`, `jenis`, `modal`, `created_at`, `updated_at`) VALUES
(1, 'sidu123', 'buku sidu', 'pack', 1000, 2000, 40, 1, 50000, '2018-10-15 02:34:02', '2018-10-15 02:34:48'),
(2, 'pe123', 'penghapus', 'pack', 1000, 2000, 40, 1, 50000, '2018-10-15 02:34:27', '2018-10-15 02:34:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang_tokos`
--

CREATE TABLE `gudang_tokos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gudang_tokos`
--

INSERT INTO `gudang_tokos` (`id`, `id_barang`, `id_user`, `stok`, `created_at`, `updated_at`) VALUES
(1, '1', '3', 5, '2018-10-15 02:34:48', '2018-10-15 02:36:14'),
(2, '2', '3', 5, '2018-10-15 02:34:48', '2018-10-15 02:36:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'alat tulis', '2018-10-15 02:33:34', '2018-10-15 02:33:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(297, '2014_10_12_000000_create_users_table', 1),
(298, '2014_10_12_100000_create_password_resets_table', 1),
(299, '2018_02_23_133257_create_barangs_table', 1),
(300, '2018_02_24_130052_create_tokos_table', 1),
(301, '2018_02_25_063544_create_transaksis_table', 1),
(302, '2018_03_06_131307_create_jenis_table', 1),
(303, '2018_03_12_140355_create_gudang_tokos_table', 1),
(304, '2018_03_14_130120_create_transaksi_tokos_table', 1),
(305, '2018_03_19_151240_create_transaksi_details_table', 1),
(306, '2018_03_30_122723_create_toko_details_table', 1),
(307, '2018_08_04_203232_create_transaksi_detail_tokos_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokos`
--

CREATE TABLE `tokos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `alamat`, `pemilik_toko`, `created_at`, `updated_at`) VALUES
(1, 'toko makmur', 'jalan burung', '3', '2018-10-15 02:33:13', '2018-10-15 02:33:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko_details`
--

CREATE TABLE `toko_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_toko` int(11) NOT NULL,
  `id_petugasToko` int(11) NOT NULL,
  `id_petugasBumdes` int(11) NOT NULL,
  `laba_bumdes` int(11) DEFAULT NULL,
  `laba_toko` int(11) DEFAULT NULL,
  `setoran` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `id_toko`, `id_petugasToko`, `id_petugasBumdes`, `laba_bumdes`, `laba_toko`, `setoran`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2, 8000, 12000, 28000, '2018-10-15 02:34:48', '2018-10-15 02:34:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_details`
--

CREATE TABLE `transaksi_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_details`
--

INSERT INTO `transaksi_details` (`id`, `id_transaksi`, `id_barang`, `jumlah`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, 1000, 2000, '2018-10-15 02:34:48', '2018-10-15 02:34:48'),
(2, 1, 2, 10, 1000, 2000, '2018-10-15 02:34:48', '2018-10-15 02:34:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail_tokos`
--

CREATE TABLE `transaksi_detail_tokos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_transaksiToko` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_detail_tokos`
--

INSERT INTO `transaksi_detail_tokos` (`id`, `id_barang`, `id_transaksiToko`, `harga`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2000, 5, '2018-10-15 02:36:14', '2018-10-15 02:36:14'),
(2, 2, 1, 2000, 5, '2018-10-15 02:36:14', '2018-10-15 02:36:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_tokos`
--

CREATE TABLE `transaksi_tokos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_belanja` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_tokos`
--

INSERT INTO `transaksi_tokos` (`id`, `nama_pembeli`, `total_belanja`, `created_at`, `updated_at`) VALUES
(1, 'irsyad', 20000, '2018-10-15 02:36:13', '2018-10-15 02:36:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'febriani', 'admin', 'febriani@gmail.com', '$2y$10$Q1ytqOpHUsxJjSm8Cfdv6e.uzA0zX8HM4rcchSrKM15oKXr2eb4uy', 'ASIpFcj0aHVXogotfZzeZyHUMKZunIsTdLikYWX9bqsFEsn60oQ9UApFEb4j', NULL, NULL),
(2, 'ayu', 'petugasbumdes', 'ayu@gmail.com', '$2y$10$9C66h8zMjwoEaenYYRZYrebRVDl2S7dPWhuIJLoGwDyJOZIMLHyyK', 'vUObGcwTlXOiMhNg58tsI7BXlu4ZsvlgPXQ2KwFnLJHTr3f3oaq4FUwTyznE', NULL, NULL),
(3, 'wulantika', 'petugastoko', 'wulantika@gmail.com', '$2y$10$.hrtlJZj0c9frjagdLLpn.NqEPDjBHqESxoal6jzUmPulIrsSq8DK', 'Rk6YtvDFr1bC3sM17QzsxuiqmKdFlIxhSPUksyaonn29lStNJB1mCmiZQ8bE', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang_tokos`
--
ALTER TABLE `gudang_tokos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
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
-- Indexes for table `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko_details`
--
ALTER TABLE `toko_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_details`
--
ALTER TABLE `transaksi_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_detail_tokos`
--
ALTER TABLE `transaksi_detail_tokos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_tokos`
--
ALTER TABLE `transaksi_tokos`
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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gudang_tokos`
--
ALTER TABLE `gudang_tokos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
--
-- AUTO_INCREMENT for table `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `toko_details`
--
ALTER TABLE `toko_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi_details`
--
ALTER TABLE `transaksi_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi_detail_tokos`
--
ALTER TABLE `transaksi_detail_tokos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi_tokos`
--
ALTER TABLE `transaksi_tokos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
