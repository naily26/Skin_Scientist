-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 03:58 AM
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
-- Database: `skin_scientist`
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
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `ID` varchar(10) NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`ID`, `nama_gejala`) VALUES
('G001', 'Tidak berminyak '),
('G002', 'Segar dan halus '),
('G003', 'bahan-bahan kosmetik mudah menempel di kulit. '),
('G004', 'Terlihat sehat '),
('G005', 'Tidak berjerawat '),
('G006', 'Mudah dalam memilih kosmetik. '),
('G007', 'Pori-pori kulit besar terutama di area hidung, pipi, dagu '),
('G008', 'Kulit di bagian wajah terlihat mengkilat '),
('G009', 'Sering ditumbuhi jerawat '),
('G010', 'Kulit kelihatan kering sekali '),
('G011', 'Pori-pori halus '),
('G012', 'tekstur kulit wajah tipis '),
('G013', 'Cepat menampakkan kerutan-kerutan '),
('G014', 'sebagian kulit kelihatan berminyak '),
('G015', 'Sebagian kulit kelihatan kering '),
('G016', 'Kadang berjerawat '),
('G017', 'susah mendapat hasil polesan kosmetik yang sempurna '),
('G018', 'Mudah alergi '),
('G019', 'Mudah iritasi dan terluka '),
('G020', 'kulit mudah terlihat kemerahan. ');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_kulit`
--

CREATE TABLE `gejala_kulit` (
  `ID` int(10) NOT NULL,
  `ID_gejala` varchar(10) NOT NULL,
  `ID_kulit` varchar(10) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala_kulit`
--

INSERT INTO `gejala_kulit` (`ID`, `ID_gejala`, `ID_kulit`, `bobot`) VALUES
(1, 'G001', 'K01', 0.8),
(2, 'G002', 'K01', 0.8),
(3, 'G003', 'K01', 0.8),
(4, 'G004', 'K01', 0.8),
(5, 'G005', 'K01', 0.8),
(6, 'G006', 'K01', 0.8),
(7, 'G011', 'K01', 0.8),
(8, 'G007', 'K02', 0.8),
(9, 'G008', 'K02', 0.8),
(10, 'G009', 'K02', 0.8),
(11, 'G016', 'K02', 0.8),
(12, 'G001', 'K03', 0.6),
(13, 'G005', 'K03', 0.6),
(14, 'G010', 'K03', 0.8),
(15, 'G011', 'K03', 0.6),
(16, 'G012', 'K03', 0.6),
(17, 'G007', 'K04', 0.6),
(18, 'G014', 'K04', 0.4),
(19, 'G015', 'K04', 0.6),
(20, 'G016', 'K04', 0.4),
(21, 'G017', 'K04', 0.6),
(22, 'G012', 'K05', 0.8),
(23, 'G018', 'K05', 0.8),
(24, 'G019', 'K05', 0.8),
(25, 'G020', 'K05', 0.8);

-- --------------------------------------------------------

--
-- Table structure for table `kulit`
--

CREATE TABLE `kulit` (
  `ID` varchar(10) NOT NULL,
  `jenis_kulit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kulit`
--

INSERT INTO `kulit` (`ID`, `jenis_kulit`) VALUES
('K01', 'Kulit Normal'),
('K02', 'Kulit Berminyak'),
('K03', 'Kulit Kering'),
('K04', 'Kulit Kombinasi'),
('K05', 'Kulit Sensitif');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `ID` varchar(10) NOT NULL,
  `nama_solusi` varchar(255) NOT NULL,
  `ID_kulit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`ID`, `nama_solusi`, `ID_kulit`) VALUES
('1', 'Membersihkan wajah cukup dengan air, ketika kulit wajah dalam keadaan tanpa make up ', 'K01'),
('10', 'Jangan terlalu sering menggunakan sabun wajah ', 'K03'),
('11', 'Gunakan selalu facial foam, milk cleanser dan face tonic ', 'K04'),
('12', 'Lakukan perawatan facial di salon kecantikan sebulan sekali ', 'K04'),
('13', 'Oleskan tipis-tipis krim atau lotion pencegah komedo pada malam hari.', 'K04'),
('14', 'Berdasarkan gejalanya, perawatan kulit sensitif ditujukan untuk melindungi kulit serta mengurangi dan menanggulangi iritasi. Kulit sensitif tidak dapat diamati kulit atau dermatolog untuk memeriksanya dalam tes alergi-imunologi. Apabila dideteksi alergi, ', 'K05'),
('2', 'Jika kulit wajah dalam keadaan bermakeup, bisa dibersihkan menggunakan milk cleanser, face tonic dan facial foam. ', 'K01'),
('3', 'Bisa menggunakan face tonic dan krim pelembab, ketika musim panas. Karena di musim panas kulit normal akan terasa agak kering ', 'K01'),
('4', 'Perawatan facial di klinik kecantikan diperlukan sewaktu-waktu saja, cukup 1 kali dalam 3 bulan ', 'K01'),
('5', 'Menggunakan krim tabir surya untuk melindungi dari panas sinar matahari ', 'K01'),
('6', 'Membersihkan wajah menggunakan facial foam, kemudian dibilas sampai bersih ', 'K02'),
('7', 'Setelah mencuci wajah, gunakan face tonic ', 'K02'),
('8', 'Gunakan krim pelembap sesering mungkin, baik pada siang maupun malam hari. ', 'K03'),
('9', 'Gunakan tabir surya pada siang hari, karena kulit kering ini sangat mudah terkena flek kecokelatan ', 'K03');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gejala_kulit`
--
ALTER TABLE `gejala_kulit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kulit`
--
ALTER TABLE `kulit`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `gejala_kulit`
--
ALTER TABLE `gejala_kulit`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
