-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 02:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archive_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nama`, `nip`, `fakultas`, `jurusan`, `agama`, `alamat`, `created_at`, `updated_at`) VALUES
(3, 'Dosen 1', '12345678910', 'Teknik', 'Teknik Informatika', '2', 'Jalan Raya Mandala', '2022-05-18 18:17:42', '2022-05-18 18:17:42'),
(4, 'Dosen 2', '1324732840', 'Bisnis', 'Ekonomi', '1', 'Jalan Raya Mandala Spadem', '2022-05-18 18:21:30', '2022-05-18 18:21:30');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2022_04_10_070355_create_tables_kkn_table', 1),
(22, '2022_05_02_124032_create_referral_forgot_password_table', 2),
(23, '2022_05_14_163057_add_verify_to_users_table', 3),
(24, '2022_05_14_170452_create_tables_pkl_table', 4),
(28, '2022_05_15_170201_create_dosens_table', 5),
(29, '2022_05_18_181153_create_pkl_text_table', 6);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pkl_text`
--

CREATE TABLE `pkl_text` (
  `id_pkl` bigint(20) UNSIGNED NOT NULL,
  `judul_pkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi_pkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_mhs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pkl_text`
--

INSERT INTO `pkl_text` (`id_pkl`, `judul_pkl`, `instansi_pkl`, `data_mhs`, `nip`, `tahun`, `semester`, `file_pkl`, `created_at`, `updated_at`) VALUES
(4, 'Laporan PKL 1', 'KANTOR 1', '<ol>\r\n<li>20185520017 - Mhs 1</li>\r\n<li>20185520001 - Mhs 2</li>\r\n<li>20185520002 - Mhs 3</li>\r\n</ol>', '1324732840', 2018, 'Ganjil', 'file-pdf-pkl/ofmsyhkGd0xFjjn1JLJHCmGwFNnlIWGRfiZauUNL.pdf', '2022-05-18 18:43:58', '2022-06-04 18:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `referral_forgot_password`
--

CREATE TABLE `referral_forgot_password` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('wait','cancel','confirmed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wait',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables_kkn`
--

CREATE TABLE `tables_kkn` (
  `id_kkn` bigint(20) UNSIGNED NOT NULL,
  `judul_kkn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_kkn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelompok` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kelompok` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm_nip` bigint(20) NOT NULL,
  `tahun` int(11) NOT NULL,
  `semester` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables_kkn`
--

INSERT INTO `tables_kkn` (`id_kkn`, `judul_kkn`, `file_kkn`, `nama_kelompok`, `no_kelompok`, `nama_user`, `npm_nip`, `tahun`, `semester`, `created_at`, `updated_at`) VALUES
(8, 'Laporan KKN 1', 'file-pdf-kkn/8e3PABfDe1tZ6Hyn4UZontEOeyBwQhLlDrhIZOR8.pdf', 'Bupul', '10', '1324732840', 201855201001, 2018, 'Genap', '2022-05-18 19:15:07', '2022-06-04 18:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `tables_pkl`
--

CREATE TABLE `tables_pkl` (
  `id_pkl` bigint(20) UNSIGNED NOT NULL,
  `judul_pkl` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi_pkl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mhs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm_nip` bigint(20) NOT NULL,
  `fakultas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verify` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `npm_nip`, `fakultas`, `jurusan`, `status`, `email`, `password`, `created_at`, `updated_at`, `verify`) VALUES
(1, 'Admin', 987654321, 'Teknik', 'Teknik Informatika', '1', 'admin@gmail.com', '$2y$10$mUXhLNvp5z8Y0y0r32i9UesKHbgnZCiiwqNK19PV6EGkRBUOhOBkG', '2022-05-08 17:43:29', '2022-05-14 15:47:12', 'active'),
(2, 'Risthalia Boro', 201855201007, 'Teknik', 'Teknik Informatika', '2', 'risthaliaboro@gmail.com', '$2y$10$QjIPSrxBujgRYinkKKj/s.udLkNc2j/2MMHb74UXlrPab/yulsYpm', '2022-05-08 16:55:41', '2022-05-15 01:24:40', 'active'),
(8, 'Mahasiswa 1', 201855201001, 'Teknik', 'Teknik Informatika', '2', 'mahasiswa1@gmail.com', '$2y$10$XTIwBzid2sll05Z7laek6uyufBflfuAjTTZwc4clVZASQ9qYOvcJq', '2022-05-18 18:52:09', '2022-05-23 18:47:21', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_nip_unique` (`nip`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pkl_text`
--
ALTER TABLE `pkl_text`
  ADD PRIMARY KEY (`id_pkl`);

--
-- Indexes for table `referral_forgot_password`
--
ALTER TABLE `referral_forgot_password`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `referral_forgot_password_kode_unique` (`kode`);

--
-- Indexes for table `tables_kkn`
--
ALTER TABLE `tables_kkn`
  ADD PRIMARY KEY (`id_kkn`);

--
-- Indexes for table `tables_pkl`
--
ALTER TABLE `tables_pkl`
  ADD PRIMARY KEY (`id_pkl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_npm_nip_unique` (`npm_nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pkl_text`
--
ALTER TABLE `pkl_text`
  MODIFY `id_pkl` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `referral_forgot_password`
--
ALTER TABLE `referral_forgot_password`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tables_kkn`
--
ALTER TABLE `tables_kkn`
  MODIFY `id_kkn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tables_pkl`
--
ALTER TABLE `tables_pkl`
  MODIFY `id_pkl` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
