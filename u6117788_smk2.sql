-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2020 at 12:59 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6117788_smk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `conds`
--

CREATE TABLE `conds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conds`
--

INSERT INTO `conds` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Baik', '2019-11-15 23:11:48', '2019-11-15 23:11:48'),
(2, 'Kurang Baik', '2019-11-15 23:11:58', '2019-11-18 08:17:41'),
(3, 'Rusak', '2019-11-15 23:12:07', '2019-11-15 23:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Komputer dan Jaringan', '2019-11-14 23:43:25', '2019-11-14 23:43:25'),
(4, 'Mesin', '2019-11-18 04:21:00', '2019-11-18 04:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `created_at`, `updated_at`) VALUES
(15, 'Laptop', '2019-11-18 07:14:12', '2019-11-18 07:48:36'),
(16, 'Mesin A', '2019-11-18 07:14:32', '2019-11-18 07:48:10'),
(19, 'Mesin B', '2019-11-18 07:20:22', '2019-11-18 07:48:23'),
(21, 'Laptop', '2019-11-18 07:55:42', '2019-11-18 07:55:42'),
(26, 'komputer', '2019-11-28 08:49:19', '2019-11-28 08:49:19'),
(27, 'Mesin C', '2019-11-28 09:10:38', '2019-11-28 09:10:38'),
(28, 'CPU', '2019-11-29 18:30:31', '2019-11-29 18:30:31'),
(29, 'Mouse', '2019-11-29 18:32:54', '2019-11-29 18:32:54'),
(36, 'Monitor', '2019-12-11 13:40:44', '2019-12-11 13:40:44'),
(40, 'Arduino', '2020-01-23 10:04:44', '2020-01-23 10:04:44'),
(42, 'asdfg', '2020-01-28 12:47:02', '2020-01-28 12:47:02'),
(43, 'asdfg', '2020-01-28 12:47:02', '2020-01-28 12:47:02'),
(44, 'asdfg', '2020-01-28 12:47:02', '2020-01-28 12:47:02'),
(58, 'testing', '2020-06-14 18:59:22', '2020-06-14 18:59:22'),
(63, 'te', '2020-06-22 18:40:08', '2020-06-22 18:40:16'),
(64, 'mn', '2020-06-22 18:40:50', '2020-06-22 18:40:50'),
(65, 't', '2020-06-22 18:42:57', '2020-06-22 18:42:57'),
(66, 'mn', '2020-06-22 18:42:59', '2020-06-22 18:42:59'),
(67, 't', '2020-06-22 18:46:47', '2020-06-22 18:46:47'),
(68, 't', '2020-06-22 18:46:53', '2020-06-22 18:46:53'),
(69, 't', '2020-06-22 18:47:20', '2020-06-22 18:47:20'),
(70, 't', '2020-06-22 18:47:22', '2020-06-22 18:47:22'),
(71, 'mn', '2020-06-22 18:47:26', '2020-06-22 18:47:26'),
(72, 'mn', '2020-06-22 18:47:32', '2020-06-22 18:47:32'),
(73, 't', '2020-06-22 18:47:41', '2020-06-22 18:47:41'),
(74, 'mn', '2020-06-22 18:47:52', '2020-06-22 18:47:52'),
(75, 'mn', '2020-06-22 18:47:56', '2020-06-22 18:47:56'),
(76, 'mn', '2020-06-22 18:48:30', '2020-06-22 18:48:30'),
(77, 't', '2020-06-22 18:51:42', '2020-06-22 18:51:42'),
(78, 't', '2020-06-22 18:52:05', '2020-06-22 18:52:05'),
(79, 'mn', '2020-06-22 18:52:27', '2020-06-22 18:52:27'),
(80, 't', '2020-06-22 18:52:36', '2020-06-22 18:52:36'),
(81, 't', '2020-06-22 18:52:49', '2020-06-22 18:52:49'),
(82, 'mn', '2020-06-22 18:53:01', '2020-06-22 18:53:01'),
(83, 't', '2020-06-22 18:53:06', '2020-06-22 18:53:06'),
(84, 'mn', '2020-06-22 18:53:22', '2020-06-22 18:53:22'),
(85, 'mn', '2020-06-22 18:53:29', '2020-06-22 18:53:29'),
(86, 'mn', '2020-06-22 18:53:50', '2020-06-22 18:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `item_buys`
--

CREATE TABLE `item_buys` (
  `id` int(10) UNSIGNED NOT NULL,
  `pers_id` int(10) UNSIGNED NOT NULL,
  `jmlh` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_buys`
--

INSERT INTO `item_buys` (`id`, `pers_id`, `jmlh`, `harga`, `total`, `created_at`, `updated_at`) VALUES
(15, 111, 10, 1000, 10000, '2020-02-25 12:21:31', '2020-02-25 12:21:31'),
(16, 127, 4, 123, 492, '2020-03-05 13:26:11', '2020-03-05 13:26:11'),
(17, 114, 3, 1000000, 3000000, '2020-03-09 15:00:53', '2020-03-09 15:00:53'),
(18, 118, 7, 45, 315, '2020-06-12 17:10:22', '2020-06-12 17:10:22'),
(19, 118, 3, 45, 135, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(20, 119, 9, 8, 72, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(21, 120, 6, 68, 408, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(22, 128, 3, 123, 369, '2020-06-20 10:01:06', '2020-06-20 10:01:06'),
(23, 129, 2, 145, 290, '2020-06-20 10:01:06', '2020-06-20 10:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `item_departement`
--

CREATE TABLE `item_departement` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `departement_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_departement`
--

INSERT INTO `item_departement` (`item_id`, `departement_id`) VALUES
(15, 1),
(16, 4),
(19, 4),
(21, 4),
(26, 1),
(27, 4),
(28, 1),
(29, 1),
(36, 1),
(40, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_item` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cond_id` int(10) UNSIGNED NOT NULL,
  `ibuy_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`id`, `kode_item`, `item_id`, `user_id`, `cond_id`, `ibuy_id`, `created_at`, `updated_at`) VALUES
(161, '12.31.23.21.31.2312', 26, 18, 3, 15, '2020-02-25 12:21:31', '2020-06-22 18:41:39'),
(162, '32.42.34.23.42.3423', 26, 18, 1, 15, '2020-02-25 12:21:31', '2020-02-25 12:30:55'),
(165, '11.22.33.42.34.2342', 26, 18, 1, 15, '2020-02-25 12:21:31', '2020-06-18 15:05:25'),
(166, '23.42.34.23.42.3423', 26, 18, 1, 15, '2020-02-25 12:21:32', '2020-06-17 02:06:21'),
(167, '11.11.11.11.11.1111', 26, 18, 1, 15, '2020-02-25 12:21:32', '2020-06-22 18:41:32'),
(168, NULL, 26, 99, 1, 15, '2020-02-25 12:21:32', '2020-02-25 12:21:32'),
(169, NULL, 26, 99, 1, 15, '2020-02-25 12:21:32', '2020-02-25 12:21:32'),
(170, NULL, 26, 99, 1, 15, '2020-02-25 12:21:32', '2020-02-25 12:21:32'),
(179, '12.33.24.35.45.1111', 40, 18, 2, 17, '2020-03-10 10:23:13', '2020-06-15 00:32:59'),
(181, NULL, 40, 99, 1, 17, '2020-03-10 10:23:13', '2020-03-10 10:23:13'),
(182, NULL, 19, 99, 1, 16, '2020-03-10 10:23:55', '2020-03-10 10:23:55'),
(183, NULL, 19, 99, 1, 16, '2020-03-10 10:23:55', '2020-03-10 10:23:55'),
(184, NULL, 19, 99, 1, 16, '2020-03-10 10:23:55', '2020-03-10 10:23:55'),
(185, NULL, 19, 99, 1, 16, '2020-03-10 10:23:55', '2020-03-10 10:23:55'),
(189, NULL, 26, 99, 1, 19, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(190, NULL, 26, 99, 1, 19, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(191, NULL, 26, 99, 1, 19, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(192, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(193, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(194, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(195, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(196, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(197, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(198, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(199, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(200, NULL, 26, 99, 1, 20, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(201, NULL, 26, 99, 1, 21, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(202, NULL, 26, 99, 1, 21, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(203, NULL, 26, 99, 1, 21, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(204, NULL, 26, 99, 1, 21, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(205, NULL, 26, 99, 1, 21, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(206, NULL, 26, 99, 1, 21, '2020-06-12 17:10:42', '2020-06-12 17:10:42'),
(222, NULL, 26, 99, 1, 18, '2020-06-18 15:07:21', '2020-06-18 15:07:21'),
(223, NULL, 26, 99, 1, 18, '2020-06-18 15:07:21', '2020-06-18 15:07:21'),
(224, NULL, 26, 99, 1, 18, '2020-06-18 15:07:21', '2020-06-18 15:07:21'),
(225, NULL, 26, 99, 1, 18, '2020-06-18 15:07:21', '2020-06-18 15:07:21'),
(226, NULL, 26, 99, 1, 18, '2020-06-18 15:07:21', '2020-06-18 15:07:21'),
(227, NULL, 26, 99, 1, 18, '2020-06-18 15:07:21', '2020-06-18 15:07:21'),
(228, NULL, 26, 99, 1, 18, '2020-06-18 15:07:21', '2020-06-18 15:07:21'),
(230, NULL, 27, 126, 1, 23, '2020-06-20 10:01:06', '2020-06-20 10:01:06'),
(231, NULL, 27, 126, 1, 23, '2020-06-20 10:01:06', '2020-06-20 10:01:06'),
(232, NULL, 27, 126, 1, 22, '2020-06-20 10:01:19', '2020-06-20 10:01:19'),
(233, NULL, 27, 126, 1, 22, '2020-06-20 10:01:19', '2020-06-20 10:01:19'),
(234, NULL, 27, 126, 1, 22, '2020-06-20 10:01:19', '2020-06-20 10:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `j_kebutuhans`
--

CREATE TABLE `j_kebutuhans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `j_kebutuhans`
--

INSERT INTO `j_kebutuhans` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Alat Habis Pakai', '2020-02-14 11:02:52', '2020-02-14 11:02:52'),
(2, 'Bahan Habis Pakai', '2020-02-14 11:03:22', '2020-02-14 11:03:22'),
(3, 'Inventaris', '2020-02-14 11:03:29', '2020-02-14 11:03:29'),
(4, 'Bahan percontohan', '2020-02-14 11:03:40', '2020-02-14 11:03:40'),
(6, 'Alat tidak habis pakai', '2020-02-14 11:44:22', '2020-02-14 11:44:22'),
(7, 'Bahan tidak habis pakai', '2020-02-14 11:44:50', '2020-02-14 11:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pngjuan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `user_id`, `pngjuan_id`, `created_at`, `updated_at`) VALUES
(7, 129, 114, '2020-02-17 10:36:38', '2020-02-17 10:36:38'),
(8, 129, 115, '2020-02-17 10:37:19', '2020-02-17 10:37:19'),
(9, 129, 116, '2020-02-17 10:38:10', '2020-02-17 10:38:10'),
(10, 129, 117, '2020-02-17 10:38:20', '2020-02-17 10:38:20'),
(11, 129, 119, '2020-02-20 04:06:22', '2020-02-20 04:06:22'),
(12, 129, 121, '2020-02-20 07:34:37', '2020-02-20 07:34:37'),
(13, 129, 122, '2020-02-20 07:34:46', '2020-02-20 07:34:46'),
(14, 129, 123, '2020-02-20 07:34:49', '2020-02-20 07:34:49'),
(15, 129, 124, '2020-02-20 07:34:53', '2020-02-20 07:34:53'),
(17, 129, 126, '2020-02-20 12:05:41', '2020-02-20 12:05:41'),
(18, 19, 130, '2020-03-03 12:21:43', '2020-03-03 12:21:43'),
(19, 19, 131, '2020-03-03 12:22:00', '2020-03-03 12:22:00'),
(20, 19, 132, '2020-03-03 12:22:14', '2020-03-03 12:22:14'),
(21, 19, 133, '2020-03-03 12:22:43', '2020-03-03 12:22:43');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_11_12_015659_laratrust_setup_tables', 1),
(10, '2019_11_15_060712_create_departements_table', 2),
(11, '2019_11_15_062130_new_departemens_table', 3),
(12, '2019_11_16_040625_create_items_table', 4),
(13, '2019_11_16_042035_create_stats_table', 5),
(14, '2019_11_16_055831_create_conds_table', 6),
(15, '2019_11_18_095429_create_stok_items_table', 7),
(16, '2019_11_18_112845_create_item_departement', 8),
(17, '2019_11_18_113053_create_item_cond', 8),
(18, '2019_11_18_123345_create_stok_items', 9),
(19, '2019_11_18_133100_create_item_departement_table', 10),
(20, '2019_11_18_154635_create_pengajuan_table', 11),
(21, '2019_11_18_161404_create_persetujuans_table', 12),
(22, '2019_11_26_112932_create_item_details_table', 13),
(23, '2019_11_30_095644_add_softdelete', 14),
(24, '2019_12_24_061314_add_field_pengajuans_table', 15),
(25, '2019_12_26_162711_add_field_sumber_pngjuan', 16),
(26, '2020_01_13_064029_create_standars_table', 17),
(27, '2020_01_22_093313_create_satuans_table', 18),
(30, '2020_02_05_081705_create_item_buy_table', 19),
(31, '2020_02_10_092855_create_laporans_table', 20),
(32, '2020_02_14_172432_create_j_kebutuhans_table', 21);

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
-- Table structure for table `pengajuans`
--

CREATE TABLE `pengajuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `volume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` int(10) UNSIGNED NOT NULL,
  `spesifikasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jkbthan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuans`
--

INSERT INTO `pengajuans` (`id`, `user_id`, `item_id`, `total`, `created_at`, `updated_at`, `volume`, `satuan`, `spesifikasi`, `harga`, `sumber`, `jkbthan`) VALUES
(114, 129, 26, '36402', '2020-02-17 10:36:38', '2020-02-20 06:55:19', '3', 1, 'aaa', '12134', 'aaa', 1),
(115, 129, 15, '12100', '2020-02-17 10:37:19', '2020-02-21 07:07:38', '10', 1, 'aaa', '1210', 'aaa', 6),
(116, 129, 28, '4848', '2020-02-17 10:38:10', '2020-02-17 10:38:10', '4', 1, 'aaa', '1212', 'aaa', 2),
(117, 129, 40, '6060', '2020-02-17 10:38:19', '2020-02-17 10:38:19', '5', 1, 'aaa', '1212', 'aaa', 7),
(118, 22, 15, '464846', '2020-02-20 04:05:39', '2020-02-21 07:07:28', '2', 1, 'swss', '232423', 'sderfe', 1),
(119, 129, 36, '6060', '2020-02-20 04:06:22', '2020-02-20 04:06:22', '5', 1, 'aaa', '1212', 'aaa', 1),
(121, 129, 26, '36402', '2020-02-20 07:34:37', '2020-02-20 07:34:37', '3', 1, 'aaa', '12134', 'aaa', 1),
(122, 129, 26, '36402', '2020-02-20 07:34:45', '2020-02-20 07:34:45', '3', 1, 'aaa', '12134', 'aaa', 1),
(123, 129, 26, '36402', '2020-02-20 07:34:49', '2020-02-20 07:34:49', '3', 1, 'aaa', '12134', 'aaa', 1),
(124, 129, 26, '36402', '2020-02-20 07:34:53', '2020-02-20 07:34:53', '3', 1, 'aaa', '12134', 'aaa', 1),
(126, 129, 40, '16394', '2020-02-20 12:05:41', '2020-02-20 12:06:14', '7', 2, 'sdfdsfdsf', '2342', 'sdfsdf', 1),
(127, 22, 36, '702972', '2020-02-21 07:36:30', '2020-02-21 07:36:30', '3', 1, 'sadasdasd', '234324', 'sdasd', 3),
(128, 22, 36, '129692', '2020-02-21 10:35:18', '2020-02-21 10:35:28', '4', 2, 'dfdsf', '32423', 'dsfdsf', 4),
(129, 22, 40, '46462', '2020-02-25 12:16:53', '2020-02-25 12:16:53', '2', 1, 'ditolak', '23231', 'sda', 7),
(130, 19, 19, '468468', '2020-03-03 12:21:42', '2020-03-03 12:21:42', '2', 1, 'sdfsfd', '234234', 'sdfdsf', 1),
(131, 19, 27, '3702', '2020-03-03 12:22:00', '2020-03-03 12:22:00', '3', 1, 'sdfsfdaa', '1234', 'sdfdsf', 1),
(132, 19, 27, '37023', '2020-03-03 12:22:14', '2020-03-03 12:22:14', '3', 1, 'sdfsfdaa', '12341', 'sdfdsf', 4),
(133, 19, 27, '49364', '2020-03-03 12:22:43', '2020-03-03 12:22:43', '4', 1, 'sdfsfdaa', '12341', 'sdfdsf', 3),
(134, 13, 16, '2468', '2020-03-15 02:56:26', '2020-03-15 02:56:26', '2', 1, 'fasdf', '1234', 'sd', 1),
(135, 22, 40, '684846', '2020-03-18 02:45:06', '2020-03-18 02:45:06', '2', 2, 'sdfsdf', '342423', 'dasf', 4),
(136, 22, 15, '46846', '2020-06-11 16:17:47', '2020-06-11 16:17:47', '2', 1, 'contohsetuju', '23423', 'tokped', 1),
(137, 22, 40, '10000000', '2020-06-16 04:16:59', '2020-06-16 04:16:59', '100', 4, 'qwerty', '100000', 'qwertyui', 1),
(138, 22, 15, '468468', '2020-06-17 02:05:32', '2020-06-17 02:05:32', '2', 1, 'sadf', '234234', 'asdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-user', 'create user', NULL, '2019-11-11 23:50:29', '2019-11-11 23:50:29'),
(4, 'edit-user', 'edit-user', NULL, '2019-11-12 18:45:37', '2019-11-12 18:45:37'),
(5, 'update-user', 'update-user', NULL, '2019-11-13 21:21:29', '2019-11-13 21:21:29'),
(6, 'create-input-barang', 'create-input-barang', NULL, '2019-11-29 17:56:08', '2019-11-29 17:56:08'),
(7, 'edit-input-barang', 'edit-input-barang', NULL, '2019-11-29 17:56:20', '2019-11-29 17:56:20'),
(8, 'delete-input-barang', 'delete-input-barang', NULL, '2019-11-29 17:56:42', '2019-11-29 17:56:42'),
(9, 'update-input-barang', 'update-input-barang', NULL, '2019-11-29 17:56:54', '2019-11-29 17:56:54'),
(10, 'menu-stok', 'menu-stok', NULL, '2019-11-29 17:58:11', '2019-11-29 17:58:11'),
(11, 'admin', 'admin', NULL, '2019-11-29 18:01:06', '2019-11-29 18:01:06'),
(12, 'menu-pengajuan', 'menu-pengajuan', NULL, '2019-11-29 18:58:12', '2019-11-29 18:58:12'),
(13, 'crud-item', 'crud-item', NULL, '2019-12-07 02:13:49', '2019-12-07 02:13:49'),
(14, 'laporan', 'laporan', NULL, '2019-12-07 02:20:01', '2020-01-06 13:37:38'),
(16, 'teste', 'teste', NULL, '2019-12-23 22:06:20', '2019-12-23 22:06:27'),
(17, 'menu-persetujuan', 'menu-persetujuan', NULL, '2020-01-05 07:08:51', '2020-01-05 07:08:51'),
(18, 'profil', 'profil', NULL, '2020-01-05 23:28:24', '2020-01-05 23:28:24'),
(19, 'standarbarang', 'standarbarang', NULL, '2020-06-11 16:58:05', '2020-06-11 16:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 4),
(4, 1),
(4, 2),
(4, 4),
(5, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 2),
(10, 3),
(10, 4),
(11, 1),
(12, 2),
(12, 4),
(13, 4),
(14, 4),
(14, 5),
(17, 5),
(18, 2),
(18, 3),
(18, 4),
(19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persetujuans`
--

CREATE TABLE `persetujuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `stat_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `pngjuan_id` int(10) UNSIGNED NOT NULL,
  `jumlah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persetujuans`
--

INSERT INTO `persetujuans` (`id`, `stat_id`, `user_id`, `pngjuan_id`, `jumlah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(111, 7, 99, 114, NULL, '2020-02-17 10:36:38', '2020-02-25 10:57:31', NULL),
(112, 2, 129, 115, NULL, '2020-02-17 10:37:19', '2020-02-17 10:37:19', NULL),
(113, 2, 129, 116, NULL, '2020-02-17 10:38:10', '2020-02-17 10:38:10', NULL),
(114, 7, 99, 117, NULL, '2020-02-17 10:38:20', '2020-02-17 10:38:20', NULL),
(115, 2, 129, 118, NULL, '2020-02-20 04:05:39', '2020-02-20 04:05:39', NULL),
(116, 3, 126, 119, NULL, '2020-02-20 04:06:22', '2020-02-20 04:06:22', NULL),
(118, 6, 129, 121, NULL, '2020-02-20 07:34:37', '2020-02-20 07:34:37', NULL),
(119, 6, 99, 122, NULL, '2020-02-20 07:34:46', '2020-02-25 10:57:39', NULL),
(120, 6, 99, 123, NULL, '2020-02-20 07:34:49', '2020-02-25 12:20:42', NULL),
(121, 2, 129, 124, NULL, '2020-02-20 07:34:53', '2020-02-20 07:34:53', NULL),
(123, 2, 129, 126, NULL, '2020-02-20 12:05:41', '2020-02-20 12:05:41', NULL),
(124, 2, 99, 127, NULL, '2020-02-21 07:36:30', '2020-02-21 07:36:30', NULL),
(125, 1, NULL, 128, NULL, '2020-02-21 10:35:18', '2020-02-21 10:35:18', NULL),
(126, 4, 129, 129, NULL, '2020-02-25 12:16:54', '2020-02-25 12:16:54', NULL),
(127, 6, 99, 130, NULL, '2020-03-03 12:21:43', '2020-03-05 12:25:45', NULL),
(128, 6, 99, 131, NULL, '2020-03-03 12:22:00', '2020-03-03 12:22:00', NULL),
(129, 6, 99, 132, NULL, '2020-03-03 12:22:14', '2020-03-03 12:22:14', NULL),
(130, 2, 19, 133, NULL, '2020-03-03 12:22:43', '2020-03-03 12:22:43', NULL),
(131, 1, NULL, 134, NULL, '2020-03-15 02:56:27', '2020-03-15 02:56:27', NULL),
(132, 4, 129, 135, NULL, '2020-03-18 02:45:06', '2020-03-18 02:45:06', NULL),
(133, 2, 129, 136, NULL, '2020-06-11 16:17:47', '2020-06-11 16:17:47', NULL),
(134, 4, 129, 137, NULL, '2020-06-16 04:16:59', '2020-06-16 04:16:59', NULL),
(135, 5, 126, 138, NULL, '2020-06-17 02:05:32', '2020-06-17 02:05:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'can do anything in the project', '2019-11-11 23:50:28', '2019-11-11 23:50:28'),
(2, 'guru', 'guru', NULL, '2019-11-11 23:50:28', '2019-11-11 23:50:28'),
(3, 'juru-bengkel', 'juru-bengkel', NULL, '2019-11-11 23:50:28', '2020-01-05 23:28:54'),
(4, 'Ketua Prodi Kejuruan', 'Ketua Prodi Kejuruan', NULL, '2019-11-11 23:50:28', '2020-01-08 22:35:09'),
(5, 'Wakil Kepala Sekolah', 'Wakil Kepala Sekolah', NULL, '2019-11-11 23:50:29', '2020-01-09 00:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 13, 'App\\User'),
(4, 17, 'App\\User'),
(3, 18, 'App\\User'),
(4, 19, 'App\\User'),
(3, 21, 'App\\User'),
(2, 22, 'App\\User'),
(5, 99, 'App\\User'),
(5, 126, 'App\\User'),
(1, 127, 'App\\User'),
(4, 129, 'App\\User'),
(1, 130, 'App\\User'),
(4, 314, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `satuans`
--

CREATE TABLE `satuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `satuans`
--

INSERT INTO `satuans` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Unit', '2020-01-23 09:27:23', '2020-01-23 09:32:20'),
(2, 'Paket', '2020-01-23 09:27:36', '2020-01-23 09:27:36'),
(4, 'Buah', '2020-05-12 00:07:30', '2020-05-12 00:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `standars`
--

CREATE TABLE `standars` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `standars`
--

INSERT INTO `standars` (`id`, `item_id`, `total`, `created_at`, `updated_at`) VALUES
(2, 26, '30', '2020-01-13 00:56:05', '2020-01-13 00:56:05'),
(5, 40, '10', '2020-06-12 17:15:16', '2020-06-14 18:57:43'),
(6, 28, '40', '2020-06-14 14:28:39', '2020-06-22 18:41:01'),
(12, 64, '23', '2020-06-22 18:40:50', '2020-06-22 18:40:50'),
(13, 66, '23', '2020-06-22 18:42:59', '2020-06-22 18:42:59'),
(14, 71, '23', '2020-06-22 18:47:26', '2020-06-22 18:47:26'),
(15, 72, '23', '2020-06-22 18:47:32', '2020-06-22 18:47:32'),
(16, 74, '23', '2020-06-22 18:47:52', '2020-06-22 18:47:52'),
(17, 75, '23', '2020-06-22 18:47:56', '2020-06-22 18:47:56'),
(18, 76, '23', '2020-06-22 18:48:30', '2020-06-22 18:48:30'),
(19, 79, '23', '2020-06-22 18:52:27', '2020-06-22 18:52:27'),
(20, 82, '23', '2020-06-22 18:53:01', '2020-06-22 18:53:01'),
(21, 84, '23', '2020-06-22 18:53:22', '2020-06-22 18:53:22'),
(22, 85, '23', '2020-06-22 18:53:29', '2020-06-22 18:53:29'),
(23, 86, '23', '2020-06-22 18:53:50', '2020-06-22 18:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Belum disetujui', '2019-11-15 22:53:09', '2020-01-08 09:38:38'),
(2, 'Telah disetujui KPK', '2019-11-15 22:53:17', '2019-11-18 09:19:10'),
(3, 'Telah disetujui WKS', '2019-11-15 22:53:29', '2019-11-18 09:19:34'),
(4, 'Ditolak KPK', '2019-12-24 10:40:44', '2019-12-25 03:12:46'),
(5, 'Ditolak WKS', '2019-12-25 03:12:52', '2019-12-25 03:12:52'),
(6, 'Telah dibeli', '2020-01-31 06:23:38', '2020-01-31 06:23:38'),
(7, 'Telah diinventariskan', '2020-01-31 06:23:46', '2020-01-31 06:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `stok_items`
--

CREATE TABLE `stok_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `departements_id` int(10) UNSIGNED DEFAULT NULL,
  `nip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `departements_id`, `nip`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ekrehQYw0fpa685k.V/Ayen/7fXwSk.ARHWaf5ybKkdq0kLS5ahHa', 'E35bCdrAHCjPgdt03rTsEnmnSdudchGjfT9xuA8swrn5GdCVHzUWLfrlfXxU', '2019-11-11 23:50:29', '2020-01-01 07:40:54', 1, ''),
(13, 'new', 'new@gmail.com', NULL, '$2y$10$CRh.APoTFH7R2t0HHjA30OTMAp3T8HI1pDi2ERMfZ4QHoYAyzwTLO', 'kDW5VMWLPCZKcG73G6RI7cK84aM8N454RPIkaWL0ooJJ956M8SDwZMSA9jND', '2019-11-15 00:12:29', '2020-05-12 00:21:18', 4, ''),
(17, 'ktkj', 'tkj@gmail.com', NULL, '$2y$10$H2k472uK/zTS9JFn5w/sTe9FFf2d3YyiZ.SkRLa6J/XQSJAn3AXra', 'Qi96z2VB62EO8XpH2ipIFIBSiX7GEYLa4hPjtxUYtQYQbV3ADwLEYENK0qIE', '2019-11-28 09:23:16', '2020-01-05 06:41:26', 1, ''),
(18, 'jb', 'jb@gmail.com', NULL, '$2y$10$8L3PWdUcZLLSTpobbdTfSeP1RNSR9hm3uuLZauK6T6rbAj.0qmtOG', 'RjIHBJJiCsCrqasyIscibyi1H1rfXvPKYT2c6OOKJvCvVo82rfaVZSrLLN08', '2019-11-29 17:53:27', '2020-06-20 10:07:45', 1, ''),
(19, 'Suryadi, S.pd', 'kmesin@gmail.com', NULL, '$2y$10$7A52L9bGvFgZOmLWQ9umJ.4Ly5Ya5my2ylnRf03q4FfR2p/zNgpI6', 'au1SnEEBhqboGwUCnkNghNjRnj04It1MmdoKj9GhC64OABAzriFKzaS5BKWa', '2019-12-06 18:44:12', '2020-01-09 00:08:10', 4, '23434829 734182 4 791'),
(21, 'jbmesin', 'jbmesin@gmail.com', NULL, '$2y$10$9qmx83J8JaECPy3Oz77BHegRAcInODMs7sIrb3qyYC2hiPbxUFyJ6', 'H8Rth5h1WInYrrG2W9PblNb3y56fMKfy3ycDFk3FDGGHElqd3hIwg4YC9kzF', '2019-12-06 18:49:08', '2019-12-06 18:49:08', 4, ''),
(22, 'gtkjm', 'gtkj@gmail.com', NULL, '$2y$10$DrK7lsa/WpCi794VelkG5OzVVRWIzXBaxySztTT1jnmHlK6VZ6ID2', 'OgfyhhptV0ETxfczPJkg9BzS4f6gi5gx2Uq6pac29Uf9zVP5h3Q8LG8GlkDE', '2019-12-06 19:20:07', '2020-06-22 18:39:16', 1, ''),
(99, 'Budi suryanto, S.pd', 'w@gmail.com', NULL, '$2y$10$67nDUxoykTHtG34ch.ePueM5K0LvUZo2F3zy2Lz1aJU2at43nNYWu', 'Kqi9idITEyH26GjQwHjvROCRqZC6pyliWA9kSQVLiZD35wagaKuroHGC0USU', NULL, '2020-01-09 00:06:29', NULL, '23174893 274239 8 479'),
(126, 'wks2', 'wks@gmail.com', NULL, '$2y$10$s6rO80ivXtSaN/QLB2oPKe7KbJpi8/l8GXshUdLQC/OBT4LeHoSHe', 'iHKL8ErsH8VpxE3M8thcjNUUf0nQ8m39UexHsERDM50unc5fZQTM8qKrb5pa', '2020-01-05 13:19:24', '2020-01-05 13:19:24', NULL, ''),
(127, 'admin2', 'admin2@gmail.com', NULL, '$2y$10$uf/yErqK2y8HKD3MzBBtwuwu6ZPrEhiTJCQRexrmQly76Ar2WDa0S', NULL, '2020-01-05 13:21:59', '2020-01-05 13:21:59', NULL, ''),
(129, 'Sugiarto, S.T', 'kaprodi@gmail.com', NULL, '$2y$10$ELiqzGY3B5pdfUVSSiktbehAJ4J4iIRmDn0B7uUUFAgLJ6dwZHD9G', 'Zcc3vykB41W8uV2UW9rorKL92pGFS77JcYX0XTVU3Ck5G8rO4BsO5cc5F091', '2020-01-08 00:52:58', '2020-05-18 03:57:58', 1, '19720317 200501 1 012'),
(130, 'cobapas', 'cb@gmail.com', NULL, '$2y$10$e.Pap247uoSVyeN/w0KayecBT.NmCjZIUk12hCHYtHHAcGGzZpWF6', 'GK4edpkC9FZ4tQJApWS7zn2Vi2tJMmPlvMWbuxJq8gnfwLEwXlvJVKAT1UvU', '2020-02-05 12:45:06', '2020-02-05 12:45:06', NULL, '23243243 241231 2 312'),
(314, 'an', 'a@gmail.com', NULL, '$2y$10$2f8AAwcLq9rCRYfiHLhW3ObGfwyETDy4za9FQ1NX5DCnn19AkkLj.', NULL, '2020-06-22 17:25:31', '2020-06-22 18:38:45', 1, '12222222 222222 2 222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conds`
--
ALTER TABLE `conds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_buys`
--
ALTER TABLE `item_buys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_buys_pers_id_foreign` (`pers_id`);

--
-- Indexes for table `item_departement`
--
ALTER TABLE `item_departement`
  ADD KEY `item_departement_item_id_foreign` (`item_id`),
  ADD KEY `item_departement_departement_id_foreign` (`departement_id`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_details_item_id_foreign` (`item_id`),
  ADD KEY `item_details_user_id_foreign` (`user_id`),
  ADD KEY `item_details_cond_id_foreign` (`cond_id`),
  ADD KEY `item_details_ibuy_id_foreign` (`ibuy_id`);

--
-- Indexes for table `j_kebutuhans`
--
ALTER TABLE `j_kebutuhans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporans_user_id_foreign` (`user_id`),
  ADD KEY `laporans_pngjuan_id_foreign` (`pngjuan_id`);

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
-- Indexes for table `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuans_item_id_foreign` (`item_id`),
  ADD KEY `pengajuans_user_id_foreign` (`user_id`),
  ADD KEY `pengajuans_satuan_foreign` (`satuan`),
  ADD KEY `pengajuans_jk_id_foreign` (`jkbthan`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `persetujuans`
--
ALTER TABLE `persetujuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persetujuans_user_id_foreign` (`user_id`),
  ADD KEY `persetujuans_stat_id_foreign` (`stat_id`),
  ADD KEY `persetujuans_pngjuan_id_foreign` (`pngjuan_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `satuans`
--
ALTER TABLE `satuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standars`
--
ALTER TABLE `standars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `standars_item_id_foreign` (`item_id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_items`
--
ALTER TABLE `stok_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stok_items_items_id_foreign` (`items_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `departements_id` (`departements_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conds`
--
ALTER TABLE `conds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `item_buys`
--
ALTER TABLE `item_buys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `j_kebutuhans`
--
ALTER TABLE `j_kebutuhans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pengajuans`
--
ALTER TABLE `pengajuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `persetujuans`
--
ALTER TABLE `persetujuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `satuans`
--
ALTER TABLE `satuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `standars`
--
ALTER TABLE `standars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stok_items`
--
ALTER TABLE `stok_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_buys`
--
ALTER TABLE `item_buys`
  ADD CONSTRAINT `item_buys_pers_id_foreign` FOREIGN KEY (`pers_id`) REFERENCES `persetujuans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_departement`
--
ALTER TABLE `item_departement`
  ADD CONSTRAINT `item_departement_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_departement_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_details`
--
ALTER TABLE `item_details`
  ADD CONSTRAINT `item_details_cond_id_foreign` FOREIGN KEY (`cond_id`) REFERENCES `conds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_details_ibuy_id_foreign` FOREIGN KEY (`ibuy_id`) REFERENCES `item_buys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_details_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_pngjuan_id_foreign` FOREIGN KEY (`pngjuan_id`) REFERENCES `pengajuans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laporans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD CONSTRAINT `pengajuans_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuans_jk_id_foreign` FOREIGN KEY (`jkbthan`) REFERENCES `j_kebutuhans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuans_satuan_foreign` FOREIGN KEY (`satuan`) REFERENCES `satuans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `persetujuans`
--
ALTER TABLE `persetujuans`
  ADD CONSTRAINT `persetujuans_pngjuan_id_foreign` FOREIGN KEY (`pngjuan_id`) REFERENCES `pengajuans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persetujuans_stat_id_foreign` FOREIGN KEY (`stat_id`) REFERENCES `stats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persetujuans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `standars`
--
ALTER TABLE `standars`
  ADD CONSTRAINT `standars_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stok_items`
--
ALTER TABLE `stok_items`
  ADD CONSTRAINT `stok_items_items_id_foreign` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `departements_id` FOREIGN KEY (`departements_id`) REFERENCES `departements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
