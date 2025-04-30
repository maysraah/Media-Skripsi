-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2025 at 04:05 PM
-- Server version: 10.9.2-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media_searching`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_03_17_155611_create_siswa_table', 1),
(6, '2025_03_17_160221_create_nilai_table', 1),
(7, '2025_04_05_145244_drop_siswa_id_from_nilai_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_user_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_tes` enum('kuis pencarian linear','kuis pencarian biner','kuis pencarian beruntun dengan sentinel','evaluasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `waktu_pengerjaan` time DEFAULT NULL,
  `percobaan` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `siswa_user_id`, `jenis_tes`, `nilai`, `waktu_pengerjaan`, `percobaan`, `created_at`, `updated_at`) VALUES
(2, 1, 'kuis pencarian biner', 0, '00:00:00', 0, '2025-04-04 05:30:34', '2025-04-04 05:30:34'),
(3, 1, 'kuis pencarian beruntun dengan sentinel', 0, '00:00:00', 0, '2025-04-04 05:38:27', '2025-04-04 05:38:27'),
(4, 1, 'evaluasi', 0, '00:00:00', 0, '2025-04-04 05:38:27', '2025-04-04 05:38:27'),
(5, 3, 'kuis pencarian linear', 0, '00:00:00', 0, '2025-04-04 05:44:18', '2025-04-05 08:16:16'),
(6, 3, 'kuis pencarian biner', 0, '00:00:00', 0, '2025-04-04 05:44:18', '2025-04-04 05:44:18'),
(7, 3, 'kuis pencarian beruntun dengan sentinel', 0, '00:00:00', 0, '2025-04-04 05:44:18', '2025-04-04 05:44:18'),
(8, 3, 'evaluasi', 0, '00:00:00', 0, '2025-04-04 05:44:18', '2025-04-04 05:44:18'),
(14, 4, 'evaluasi', 0, '00:00:00', 0, '2025-04-05 08:57:28', '2025-04-05 08:57:28'),
(23, 5, 'kuis pencarian linear', 0, '00:00:00', 0, '2025-04-09 08:46:31', '2025-04-09 08:46:31'),
(24, 5, 'kuis pencarian biner', 0, '00:00:00', 0, '2025-04-09 08:46:31', '2025-04-09 08:46:31'),
(25, 5, 'kuis pencarian beruntun dengan sentinel', 0, '00:00:00', 0, '2025-04-09 08:46:31', '2025-04-09 08:46:31'),
(26, 5, 'evaluasi', 0, '00:00:00', 0, '2025-04-09 08:46:31', '2025-04-09 08:46:31'),
(27, 6, 'kuis pencarian linear', 0, '00:00:00', 0, '2025-04-09 08:50:42', '2025-04-09 08:50:42'),
(28, 6, 'kuis pencarian biner', 0, '00:00:00', 0, '2025-04-09 08:50:42', '2025-04-09 08:50:42'),
(29, 6, 'kuis pencarian beruntun dengan sentinel', 0, '00:00:00', 0, '2025-04-09 08:50:42', '2025-04-09 08:50:42'),
(30, 6, 'evaluasi', 0, '00:00:00', 0, '2025-04-09 08:50:42', '2025-04-09 08:50:42'),
(35, 4, 'evaluasi', 100, '00:01:58', 1, '2025-04-14 00:10:31', '2025-04-14 00:10:31'),
(36, 4, 'kuis pencarian linear', 0, '00:00:00', 0, '2025-04-23 20:36:50', '2025-04-23 20:36:50'),
(37, 4, 'kuis pencarian biner', 0, '00:00:00', 0, '2025-04-23 20:41:54', '2025-04-23 20:41:54'),
(38, 4, 'kuis pencarian beruntun dengan sentinel', 0, '00:00:00', 0, '2025-04-23 20:46:23', '2025-04-23 20:46:23'),
(39, 4, 'kuis pencarian linear', 10, '00:00:43', 1, '2025-04-23 20:50:52', '2025-04-23 20:50:52'),
(40, 4, 'kuis pencarian linear', 100, '00:02:13', 2, '2025-04-23 20:53:26', '2025-04-23 20:53:26'),
(41, 4, 'kuis pencarian biner', 100, '00:05:59', 1, '2025-04-27 23:57:01', '2025-04-27 23:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `kelas`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'X 1', 1, '2025-04-04 05:29:34', '2025-04-04 05:29:34'),
(3, 'X 2', 3, '2025-04-04 05:44:18', '2025-04-04 05:44:18'),
(4, 'X 1', 4, '2025-04-05 08:57:28', '2025-04-05 08:57:28'),
(5, 'X 2', 5, '2025-04-09 08:46:31', '2025-04-09 08:46:31'),
(6, 'X 3', 6, '2025-04-09 08:50:42', '2025-04-09 08:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('siswa','guru') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'may', 'may@example.com', '$2y$12$ybow6jD5rMNOf1zYt96vSeQfWtoDextlBlsPYRyQGzqsqCXw33QX.', 'siswa', NULL, '2025-04-04 05:29:34', '2025-04-04 05:29:34'),
(3, 'Maysarah', 'may18@gmail.com', '$2y$12$WoZ6BnfAe0EaU39unKGf.usFEdQ5z1NO.OIVMvrZOKHJdE.stqhoG', 'siswa', 'lK8P2ozcaqJziv3ed8XFQAmFDCfDKGzY0VM37RNIXzAFnUrxJc2Z2TaxoJni', '2025-04-04 05:44:18', '2025-04-04 05:44:18'),
(4, 'Kevin', 'kevin12@gmail.com', '$2y$12$jm3WpFBAJippHjHn.qzpzO6Th1I/wyLkLx5s7fKMaXLeNt5JFE4Be', 'siswa', NULL, '2025-04-05 08:57:28', '2025-04-05 08:57:28'),
(5, 'Iif Alifah', 'iifalifah08@gmail.com', '$2y$12$.6K8Au8cTiWVEjA1r6Lz2e0cEaOnNMGzam2sxoSBilDqlANk0E.bG', 'siswa', NULL, '2025-04-09 08:46:31', '2025-04-09 08:46:31'),
(6, 'Delphia Aryana', 'adelphia@gmail.com', '$2y$12$xLhPXM55lXtPNsrS.1MBCOlWr5NGIvYOdcu8GVMXHaZTTeOxVT8DO', 'siswa', NULL, '2025-04-09 08:50:42', '2025-04-09 08:50:42'),
(7, 'guru', 'guru@gmail.com', '$2y$12$Qlyi/5lkEcQ1..vt3P2M3.mOdLPdwjoyaVuCi3uT3lU6aFxzGP61m', 'guru', NULL, '2025-04-09 09:08:57', '2025-04-09 09:08:57');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilais_siswa_user_id_foreign` (`siswa_user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswas_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_siswa_user_id_foreign` FOREIGN KEY (`siswa_user_id`) REFERENCES `siswas` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
