-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 05:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goat`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerahgejala`
--

CREATE TABLE `daerahgejala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `daerah_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daerahgejala`
--

INSERT INTO `daerahgejala` (`id`, `daerah_gejala`, `created_at`, `updated_at`) VALUES
(1, 'akar', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(2, 'batang', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(3, 'Daun', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(4, 'buah/umbi', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(5, 'bunga', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(6, 'biji', '2019-01-24 20:03:22', '2019-01-24 20:03:22');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanaman_id` bigint(20) UNSIGNED NOT NULL,
  `daerah_gejala_id` bigint(20) UNSIGNED NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `tanaman_id`, `daerah_gejala_id`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Pangkal batang menunjukkan bekas gigitan ulat', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(2, 2, 2, 'Pangkai batang terpotong - potong', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(3, 2, 2, 'Batang Rebah', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(4, 2, 2, 'Batang Rusak dan Berceceran', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(5, 2, 4, 'Umbi Membusuk', '2019-01-24 20:09:34', '2019-01-24 20:09:34'),
(6, 2, 4, 'jaringan umbi mengering', '2019-01-24 20:10:14', '2019-01-24 20:10:14'),
(7, 2, 3, 'daun terdapat bercak melekuk', '2019-01-24 20:10:50', '2019-01-24 20:10:50'),
(8, 2, 3, 'Bercak daun berwarna putih atau kelabu', '2019-01-24 20:12:11', '2019-01-24 20:12:11'),
(9, 2, 3, 'Bercak daun memebentuk zona berwarna ungu jika sudah parah', '2019-01-24 20:13:33', '2019-01-24 20:13:33'),
(10, 2, 3, 'Ujung daun kering', '2019-01-24 20:13:56', '2019-01-24 20:13:56'),
(11, 2, 2, 'Tanaman kerdil', '2019-01-24 20:24:20', '2019-01-24 20:24:20'),
(12, 2, 4, 'Umbi berkerut', '2019-01-24 20:25:00', '2019-01-24 20:25:00'),
(13, 2, 4, 'Umbi berwarna kecoklatan', '2019-01-24 20:25:20', '2019-01-24 20:25:20'),
(14, 2, 4, 'Bagian umbi dalam tampak kering dan pucat', '2019-01-24 20:25:43', '2019-01-24 20:25:43'),
(15, 2, 3, 'Ujung daun terdapat bercak hijau pucat', '2019-01-24 20:26:03', '2019-01-24 20:26:03'),
(16, 2, 3, 'Terdapat miselium dan spora pada bercak daun', '2019-01-24 20:26:24', '2019-01-24 20:26:24'),
(17, 2, 3, 'Bercak daun bulat dan memanjang', '2019-01-24 20:27:32', '2019-01-24 20:27:32'),
(18, 2, 3, 'Bercak daun berwarna coklat dengan tepi menguning', '2019-01-24 20:27:53', '2019-01-24 20:27:53'),
(19, 2, 3, 'Jumlah bercak terbanyak pada ujung daun', '2019-01-24 20:28:11', '2019-01-24 20:28:11'),
(20, 2, 3, 'jaringan pada bercak daun mati', '2019-01-24 20:28:30', '2019-01-24 20:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala_penyakit`
--

INSERT INTO `gejala_penyakit` (`id`, `gejala_id`, `penyakit_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '2019-01-24 20:09:34', '2019-01-24 20:09:34'),
(2, 6, 1, '2019-01-24 20:10:14', '2019-01-24 20:10:14'),
(3, 7, 1, '2019-01-24 20:10:50', '2019-01-24 20:10:50'),
(4, 8, 1, '2019-01-24 20:12:11', '2019-01-24 20:12:11'),
(5, 9, 1, '2019-01-24 20:13:33', '2019-01-24 20:13:33'),
(6, 10, 1, '2019-01-24 20:13:56', '2019-01-24 20:13:56'),
(7, 11, 3, '2019-01-24 20:24:20', '2019-01-24 20:24:20'),
(8, 5, 3, '2019-01-24 20:24:42', '2019-01-24 20:24:42'),
(9, 12, 3, '2019-01-24 20:25:00', '2019-01-24 20:25:00'),
(10, 13, 3, '2019-01-24 20:25:20', '2019-01-24 20:25:20'),
(11, 14, 3, '2019-01-24 20:25:43', '2019-01-24 20:25:43'),
(12, 15, 3, '2019-01-24 20:26:03', '2019-01-24 20:26:03'),
(13, 16, 3, '2019-01-24 20:26:24', '2019-01-24 20:26:24'),
(14, 17, 4, '2019-01-24 20:27:32', '2019-01-24 20:27:32'),
(15, 18, 4, '2019-01-24 20:27:53', '2019-01-24 20:27:53'),
(16, 19, 4, '2019-01-24 20:28:11', '2019-01-24 20:28:11'),
(17, 20, 4, '2019-01-24 20:28:30', '2019-01-24 20:28:30');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_22_104237_create_tanaman_table', 1),
(6, '2022_11_22_104317_create_penyakit_table', 1),
(7, '2022_11_22_104349_create_daerah_gejala', 1),
(8, '2022_11_22_104409_create_gejala_table', 1),
(9, '2022_11_22_104430_create_gejala_penyakit', 1);

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
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanaman_id` bigint(20) UNSIGNED NOT NULL,
  `nama_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kulturteknis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fisikmekanis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kimiawi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hayati` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `tanaman_id`, `nama_penyakit`, `kulturteknis`, `fisikmekanis`, `kimiawi`, `hayati`, `created_at`, `updated_at`) VALUES
(1, 2, 'Penyakit Trotol, Bercak Ungu (Purple blotch)', '', 'Pencelupan bibit umbi maksimal 3 menit dalam larutan agens hayati \nPseudomonas fluorescens (Pf) dosis 1 ml/l air dengan kepadatan populasi ??? \n109.', 'Jika ambang pengendalian bercak ungu telah mencapai (AP penyakit \nbercak ungu adalah jika kerusakan daun sebesar 10 % pertanaman contoh) \nlakukan penyemprotan dengan fungisida efektif yang terdaftar dan diizinkan \noleh Menteri Pertanian, seperti : Agrokol 70 WP, Alterna 90 WP, Bazoka \n450 SC, Daconil 500 F, Fitozeb 80 WP, Nustar 400 EC, Oktanil 75 WP, \nPromidon 50 WP, Solid 60 WP, Tonikur 250 EC, Tropicol 82 WP, Ziflo 76 \nWG dan lain-lain. Adapun waktu penyemprotan paling baik sore hari. ', '', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(3, 2, 'Penyakit Embun Buluk/Tepung Palsu (Downy mildew)', 'a. Mencegah menanam bawang merah di sekitar area serangan atau bekas \r\ntanah/area terserang, penggunaan bibit umbi dari tanaman yang sehat, \r\nmengadakan pergiliran tanaman pada areal serangan selama 3 tahun. \r\nb. Penggunaan pupuk yang berimbang, karena penggunaan pupuk N yang \r\nberlebih dapat mengakibatkan tanaman menjadi sekulen karena \r\nbertambahnya ukuran sel yang tipis, sehingga mudah terserang penyakit. \r\nc. Menghindari kelembaban tinggi dengan perbaikan drainase tanah dan \r\nsanitasi/membakar sisa tanaman sesudah panen.', 'Perendaman bibit umbi maksimal 3 menit dalam larutan agens hayati \r\nPseudomonas fluorescens (Pf) dosis 1 ml/l air dengan kepadatan populasi ? \r\n109.', 'Penggunaan agens hayati (semprotkan 10 cc Pf/l air 1-2 kali/minggu \r\ndengan kepadatan populasi ? 109 dan volume semprot 500 l/ha) atau \r\nfungisida yang terdaftar dan diizinkan oleh Menteri Pertanian pada awal \r\nmunculnya gejala, seperti : Daconil 75 WP atau Folirfos 400 AS.', NULL, '2019-01-24 20:23:01', '2019-01-24 20:23:01'),
(4, 2, 'Penyakit Bercak daun Cercospora (Cercospora leaf Spot)', 'Menggunakan bibit umbi dari tanaman yang sehat, melakukan sanitasi \r\nlapangan secara cermat dan mengurangi suhu pada kelembaban kebun.', 'Memotong daun yang terserang dan memusnahkannya.', 'Menggunakan fungisida efektif yang terdaftar dan diizinkan oleh \r\nMenteri Pertanian, seperti : Benhasil 50 WP dan Colanta 70 WP.', NULL, '2019-01-24 20:23:41', '2019-01-24 20:23:41');

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
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Cabai', '2019-01-24 20:03:22', '2019-01-24 20:03:22'),
(2, 'Bawang', '2019-01-24 20:03:22', '2019-01-24 20:03:22');

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
(1, 'admin', 'admin@localhost.com', NULL, '$2y$10$4dQ.sNC72poRP6Vvaz1.ZeQxoV2qnncolzND07BUsPUwyVuj2sDo.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerahgejala`
--
ALTER TABLE `daerahgejala`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
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
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
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
-- AUTO_INCREMENT for table `daerahgejala`
--
ALTER TABLE `daerahgejala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
