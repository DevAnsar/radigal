-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 05:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radigal`
--

-- --------------------------------------------------------

--
-- Table structure for table `activation_codes`
--

CREATE TABLE `activation_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `expire` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activation_codes`
--

INSERT INTO `activation_codes` (`id`, `user_id`, `code`, `used`, `expire`, `created_at`, `updated_at`) VALUES
(1, 3, 'dr4Ue9t1SAkPQjRW9kBK8J4Dn3Bxj3pjzkruLMGpZ3BdplPx5GoL6nx4WGMR', 0, '2019-05-28 11:52:17', '2019-05-28 07:07:17', '2019-05-28 07:07:17'),
(2, 4, 'wKolNVnZYCxoneWWVf8Y3SVYMEtE30q8b0HD2oR6G7qyw2JAdau9vVuZsyZ2', 0, '2019-05-28 11:54:13', '2019-05-28 07:09:13', '2019-05-28 07:09:13'),
(3, 5, 'BAn9F9JXNQkx8aRGgAUhIKVMxSgVX8LQNOFAPh79ju1GhPBNtQyY7MbugGou', 0, '2019-05-28 12:31:26', '2019-05-28 07:46:26', '2019-05-28 07:46:26'),
(4, 6, 'sbuE782XUNO5E42ASbaAFU8AXrncvy95MtXC1l6TI2LISOCC4zMQL7TxApR0', 0, '2019-05-28 12:38:28', '2019-05-28 07:53:28', '2019-05-28 07:53:28'),
(5, 7, 'wCW14awyGvnmaHy4Xi44ZBtT5hsR5b5rQzudCDtpZyb5LLaPm0ZqWUoegR4v', 0, '2019-05-28 12:44:15', '2019-05-28 07:59:15', '2019-05-28 07:59:15'),
(6, 8, 'eHcZoiVuPCnyP3FRbpkbFdpDFabp4GBgfMTw6e6uM2fMOdZ3PKlDceNMAREN', 0, '2019-05-28 12:47:45', '2019-05-28 08:02:45', '2019-05-28 08:02:45'),
(7, 9, 'W089gfJHvdfu6vNYikgpDBJz8aU0d8z6Pysd3uDFFpNM70uiT6ONTcrzwyJM', 0, '2019-05-28 12:56:05', '2019-05-28 08:11:05', '2019-05-28 08:11:05'),
(8, 10, 'Qj2NIdOWz2VQB1FqIFX8HGzxAfbcFqexE57oa1vo9kAsOiIjVXf0BrA38C1R', 0, '2019-05-28 13:00:38', '2019-05-28 08:15:38', '2019-05-28 08:15:38'),
(9, 11, 'UQDwnPTuJqr211pm4A499Dangy6FUyBzjlZbF6IJs1qgJSup9Y9OnvQZIaVP', 0, '2019-05-28 13:03:02', '2019-05-28 08:18:02', '2019-05-28 08:18:02'),
(10, 12, 'wfrt5wCimUP3fsbDY0arcKLCW4DmD89YpKuxXKLwUcKT3JKFdEHqgCkoW7oR', 0, '2019-05-28 13:11:51', '2019-05-28 08:26:51', '2019-05-28 08:26:51'),
(11, 13, 'G4U7PJrNFl0gFsYOM9yhYL3bzDPWJMk2VfJ8BVJYqB3gMQoXNIZra2uGSL9f', 1, '2019-05-28 13:46:08', '2019-05-28 09:01:08', '2019-05-28 09:01:37'),
(12, 14, 'lq6x6oSYCDXZsuTQgD2dF50wpVSPxu0U0oLeToibzOHlGENvMqTjaYZYLXk3', 1, '2019-05-28 13:48:45', '2019-05-28 09:03:45', '2019-05-28 09:03:57'),
(13, 15, 'GGX9J0awoMXGztVJd9bd7CiAFw8thZjlXWghqgPtQkHvgq5bNOdWy6Dv6zdB', 1, '2019-05-28 20:46:42', '2019-05-28 16:01:42', '2019-05-28 16:02:12'),
(14, 16, 'GtiWGyLetPt0XaCHSxa1CFUQGZRDN6YWadj9S9GsHID4Jas1lVrbwEYiFoXq', 1, '2019-05-28 20:48:33', '2019-05-28 16:03:33', '2019-05-28 16:04:14'),
(15, 17, 'E8qzTtuy5Res5kB1J06lRa9LrcY6Ccj3f3PUTIGLAZgiAuTPFPLLJiQr9M3d', 0, '2019-05-29 21:45:32', '2019-05-29 16:53:32', '2019-05-29 16:53:32'),
(16, 17, 'xHKZaDyMnvDo6RkLliLuPLpO43TzZYzrb1PYGqmjJgqyq8PIQcvUbwFGqDDO', 1, '2019-05-29 22:09:55', '2019-05-29 17:24:55', '2019-05-29 17:33:40'),
(17, 1, 'nwqj0BH9RNrxlYeULW6sg39Zuew2NRN2KcY35D8chEY99DFkKKS4SuKCbh82', 0, '2019-05-29 22:17:45', '2019-05-29 17:32:45', '2019-05-29 17:32:45'),
(19, 1, 'lkl5WZjv2m7sZChvBqTecF7XmUbSk9AaMIpSBOR3qOIAimbtSHUGAHDdejn5', 1, '2019-05-30 16:28:15', '2019-05-30 11:43:15', '2019-05-30 11:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tell` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ostan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shahr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `name`, `tell`, `mobile`, `ostan`, `shahr`, `address`, `post`, `created_at`, `updated_at`) VALUES
(1, 1, 'انصار', '', '09306029572', 'آذربایجان شرقی', 'تبریز', 'دانشگاه تبریز خیابان ۲۲ بهمن', '0123456789', '2019-04-27 19:31:10', '2019-04-27 19:31:10'),
(3, 1, 'انصار میرزایی', '', '09306020000', 'آذربایجان غربی', 'ارومیه', 'dddddddddddddsSDf', 'ddddddddddd', '2019-05-26 15:43:47', '2019-05-26 15:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cookie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `cookie`, `product_id`, `number`, `created_at`, `updated_at`) VALUES
(1, '1560236910', '5', 1, '2019-06-11 03:00:24', '2019-06-11 03:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `parent`, `created_at`, `updated_at`) VALUES
(5, 'ساعت', 'ساعت', 0, '2019-06-07 05:39:58', '2019-06-07 05:39:58'),
(6, 'دستبد', 'دستبد', 0, '2019-06-07 05:40:06', '2019-06-07 05:40:06'),
(7, 'گردنبند', 'گردنبند', 0, '2019-06-07 05:40:17', '2019-06-07 05:40:17'),
(8, 'ساعت مارک X', 'ساعت-مارک-X', 5, '2019-06-07 05:40:57', '2019-06-07 05:40:57'),
(9, 'دست بند های دخترانه', 'دست-بند-های-دخترانه', 6, '2019-06-07 05:41:55', '2019-06-07 05:41:55'),
(10, 'ساعت مردانه', 'ساعت-مردانه', 5, '2019-06-07 05:42:15', '2019-06-07 05:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `column1footers`
--

CREATE TABLE `column1footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `column1footers`
--

INSERT INTO `column1footers` (`id`, `title`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 'راهنمای خرید از سایت', 2, '2019-04-30 07:56:42', '2019-04-30 07:56:42'),
(2, 'نحوه ثبت سفارش', 2, '2019-04-30 07:56:51', '2019-04-30 07:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `column2footers`
--

CREATE TABLE `column2footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `column2footers`
--

INSERT INTO `column2footers` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, 'راهنمای فروشگاه', '/', '2019-04-30 05:48:18', '2019-04-30 05:48:18'),
(2, 'نقشه ی فروشگاه', '/sitemap', '2019-04-30 05:49:02', '2019-04-30 05:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `likeCount` int(11) NOT NULL DEFAULT '0',
  `dislikeCount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT '2019-04-27 16:21:24',
  `end` timestamp NOT NULL DEFAULT '2019-05-27 16:21:24',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `title`, `body`, `value`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'بدون تخفیف', NULL, 0, '2019-04-26 19:30:00', '2030-05-31 19:30:00', '2019-04-28 02:34:34', '2019-04-28 08:51:25'),
(2, 'alirad', 'اولین تخفیف', 10, '2019-04-26 19:30:00', '2019-04-30 19:30:00', '2019-04-28 08:52:17', '2019-04-28 08:52:17');

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
(3, '2019_03_17_211351_create_products_table', 1),
(4, '2019_04_08_105241_create_sliders_table', 1),
(5, '2019_04_11_161921_create_baskets_table', 1),
(6, '2019_04_13_131151_create_orders_table', 1),
(7, '2019_04_13_160715_create_sends_table', 1),
(8, '2019_04_13_161013_create_pays_table', 1),
(9, '2019_04_13_161251_create_addresses_table', 1),
(10, '2019_04_14_134427_create_payments_table', 1),
(11, '2019_04_16_203923_create_pay_statuses_table', 1),
(12, '2019_04_16_204016_create_send_statuses_table', 1),
(13, '2019_04_20_133335_create_discounts_table', 1),
(15, '2019_04_27_210749_create_categories_table', 2),
(16, '2019_04_28_161734_create_settings_table', 3),
(17, '2019_04_29_131143_create_pages_table', 4),
(18, '2019_04_29_140448_create_showcases_table', 5),
(19, '2019_04_29_212008_create_showcase2s_table', 6),
(22, '2019_04_30_092908_create_column1footers_table', 7),
(23, '2019_04_30_093039_create_column2footers_table', 7),
(24, '2019_05_03_082445_create_comments_table', 8),
(26, '2019_05_06_093904_create_ratings_table', 9),
(27, '2019_05_28_111305_create_activation_codes_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `pay_status` int(11) NOT NULL DEFAULT '1',
  `send_status` int(11) NOT NULL DEFAULT '1',
  `discount_id` int(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('ansar3@gmail.com', '$2y$10$K3hVeCHoxZN8b19zgn6J7uvJTBdkAynsMnG2XVgR2GhwcAltrbxhm', '2019-06-01 15:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RefID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `order_id`, `price`, `authority`, `RefID`, `created_at`, `updated_at`) VALUES
(1, '40', '3', '52ex1B', '4n2zeJ3YiR', '', '2019-06-09 02:59:01', '2019-06-12 05:00:37'),
(2, '84', '4', 'CkJAXh', 'XKCNr7EOMV', '', '2019-03-21 12:50:33', '2019-06-12 05:00:37'),
(3, '40', '6', 'NVYBCh', 'vcxZfnSlWS', '', '2019-06-03 04:12:00', '2019-06-12 05:00:37'),
(4, '82', '7', 'sdatxW', 'wGAS2t0KiP', '', '2019-06-03 06:42:27', '2019-06-12 05:00:37'),
(5, '15', '10', 'vdf6K5', 'SgamnYBx8Y', '', '2019-04-08 16:12:25', '2019-06-12 05:00:37'),
(6, '28', '1', '1clV17', 'duT9gWer4T', '', '2019-05-17 20:28:19', '2019-06-12 05:00:37'),
(7, '61', '5', 'lljanE', 'fLzJ6AIhge', '', '2019-02-20 09:54:59', '2019-06-12 05:00:37'),
(8, '88', '2', 'jaeCZQ', 'vx43rR8JcF', '', '2019-03-30 18:35:29', '2019-06-12 05:00:37'),
(9, '28', '9', 'hw4zeM', '0elpPiV8xx', '', '2019-06-07 07:46:06', '2019-06-12 05:00:38'),
(10, '46', '8', 'CriFf2', 'RqJT93fiHO', '', '2019-05-27 11:46:09', '2019-06-12 05:00:38'),
(11, '29', '15', 'QPHrRJ', 'YQMFWhrJlD', 'XIdqqZ0Nu8', '2019-05-19 16:01:13', '2019-06-12 05:02:07'),
(12, '19', '13', '9ARSVV', '4cjLY3eRh9', 'OopbRz4PRQ', '2019-02-28 06:46:12', '2019-06-12 05:02:07'),
(13, '71', '19', 'dMP2Ww', '0VhMbFC1EL', 'ltOKhBHHW9', '2019-04-11 23:26:24', '2019-06-12 05:02:07'),
(14, '63', '16', 'eZGV8e', 'lw1I5VxGda', 'TsRoIVUpiZ', '2019-04-05 02:04:58', '2019-06-12 05:02:07'),
(15, '15', '11', 'GW27EP', 'PT3wuzwnRe', 'TEBKTcdG2B', '2019-06-05 05:23:30', '2019-06-12 05:02:07'),
(16, '88', '18', 'hvE8M2', 'aM95ZvXEvI', '5MxhtTAeGO', '2019-04-25 14:45:50', '2019-06-12 05:02:07'),
(17, '50', '20', 'HZCHcf', 'yuGI3oNdoC', 'AKAagWDwfe', '2019-06-01 10:05:31', '2019-06-12 05:02:07'),
(18, '17', '12', 'x9VvWv', 'pMWlybxyhW', '6SSVbYOtE4', '2019-03-11 12:13:58', '2019-06-12 05:02:07'),
(19, '30', '17', '8l4cWq', 'AnDFZN1Ty3', 'HbgaWaS9bg', '2019-06-01 10:32:08', '2019-06-12 05:02:07'),
(20, '8', '14', 'MtRgOm', 'UQL78n4ahr', 'gdxAkIcaom', '2019-02-19 20:45:37', '2019-06-12 05:02:07'),
(21, '59', '37', 'gFa3qk', 'waDnMSEfoC', '', '2019-02-25 07:36:35', '2019-06-12 05:02:40'),
(22, '41', '39', 'LA69gi', 'IEXyfSxRNX', '', '2019-05-04 01:50:02', '2019-06-12 05:02:41'),
(23, '88', '32', 'imtdvX', 'hQwcKFl3I9', '', '2019-02-28 15:11:43', '2019-06-12 05:02:41'),
(24, '58', '26', 'ckbb8P', 'kmLAzOD9Ca', '', '2019-02-18 02:31:58', '2019-06-12 05:02:41'),
(25, '19', '23', '3T2eRY', '9Ey10CqSd3', '', '2019-03-18 21:55:31', '2019-06-12 05:02:41'),
(26, '4', '34', '2e9aTT', 'IvY5dTc1sP', '', '2019-04-30 05:37:08', '2019-06-12 05:02:41'),
(27, '77', '38', '5s44Oi', 'hGpjkCQWod', '', '2019-03-21 06:12:48', '2019-06-12 05:02:41'),
(28, '18', '28', '96SHqx', 'fEvK3GgWsA', '', '2019-05-02 11:19:06', '2019-06-12 05:02:41'),
(29, '22', '22', 'Ev5CYT', 'KjKjddu51J', '', '2019-06-08 08:42:09', '2019-06-12 05:02:41'),
(30, '74', '25', 'uMtWmv', '90Flvn0LJQ', '', '2019-04-18 23:12:14', '2019-06-12 05:02:41'),
(31, '39', '95', 'O0oZk5', 'Wo7HwDG3fC', 'hWomXzEQvr', '2019-03-02 03:01:45', '2019-06-12 05:03:08'),
(32, '89', '89', 'EZmXxK', 'qOMqtVyM8e', 'CUNJ8UkIHe', '2019-03-17 15:31:07', '2019-06-12 05:03:08'),
(33, '42', '91', 'fXy0Wr', 'KBJgkPhrks', '9bzwLeWArI', '2019-05-04 17:55:49', '2019-06-12 05:03:08'),
(34, '98', '93', '8hi87I', 'x0D1kbnSNG', 'k1wDOgs94Q', '2019-05-02 05:10:58', '2019-06-12 05:03:08'),
(35, '45', '84', 'kwSGkV', 'CLwA8pN7Mq', '6GR1g3S2bD', '2019-03-24 22:28:12', '2019-06-12 05:03:08'),
(36, '25', '49', 'B3BM2w', 'sYMsDsIs2O', 'iiWMWReHzx', '2019-04-21 05:45:48', '2019-06-12 05:03:08'),
(37, '62', '77', 'hOD1c4', 'Y8HebaeTJd', 'd3VI4lmM6y', '2019-05-09 23:09:41', '2019-06-12 05:03:08'),
(38, '61', '69', 'qDPbhG', 'WJ8cuBsBW5', 'TPXFVfhTNo', '2019-02-18 01:59:36', '2019-06-12 05:03:08'),
(39, '32', '53', 'RFbqXB', 'xIK2Gu6eJ7', 'S7gKfUGMbK', '2019-04-16 12:15:38', '2019-06-12 05:03:08'),
(40, '22', '83', 'XiHzDu', 'C7OOarMYOC', 'p6G35qmctU', '2019-04-12 13:14:11', '2019-06-12 05:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `title`, `body`, `images`, `created_at`, `updated_at`) VALUES
(1, 'زرین پال', 'توضیحات درگاه زرین پال', '\"pay\\/\\/1.png\"', '2019-04-27 19:10:56', '2019-04-27 19:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `pay_statuses`
--

CREATE TABLE `pay_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_statuses`
--

INSERT INTO `pay_statuses` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'پرداخت نشده', '2019-04-27 19:15:55', '2019-04-27 19:15:55'),
(2, 'پرداخت شده', '2019-04-27 19:16:03', '2019-04-27 19:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutoff` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `viewCount` int(11) NOT NULL DEFAULT '0',
  `saleCount` int(11) NOT NULL DEFAULT '0',
  `stockCount` int(11) NOT NULL,
  `commentCount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `body`, `cutoff`, `price`, `images`, `tags`, `cat`, `discount`, `viewCount`, `saleCount`, `stockCount`, `commentCount`, `created_at`, `updated_at`) VALUES
(5, 'محصول تست ۱', 'محصول-تست-۱', 'توضیح مختصری از محصول تست ۱ موجود در فروشگاه', '<p dir=\"rtl\">توضیح کامل از محصول تست ۱ موجود در فروشگاه&nbsp;توضیح کامل از محصول تست ۱ موجود در فروشگاه&nbsp;&nbsp;توضیح کامل از محصول تست ۱ موجود در فروشگاه&nbsp;</p>\r\n\r\n<p dir=\"rtl\">توضیح کامل از محصول تست ۱ موجود در فروشگاه&nbsp;&nbsp;توضیح کامل از محصول تست ۱ موجود در فروشگاه&nbsp;</p>\r\n\r\n<p dir=\"rtl\">توضیح کامل از محصول تست ۱ موجود در فروشگاه&nbsp;</p>', '<div>&nbsp;توضیح اختیاری&nbsp; از محصول تست ۱ موجود در فروشگاه &nbsp;</div>', '1000', '[{\"url\":\"product\\/2019\\/6\\/11\\/20190206_234241.jpg\",\"resize\":\"[{\\\"name\\\":\\\"100\\\",\\\"resize\\\":\\\"100*100\\\",\\\"url\\\":\\\"product\\\\\\/2019\\\\\\/6\\\\\\/11\\\\\\/100x100-20190206_234241.jpg\\\"}]\"},{\"url\":\"product\\/2019\\/6\\/11\\/PicsArt_02-09-08.16.42.jpg\",\"resize\":\"[{\\\"name\\\":\\\"100\\\",\\\"resize\\\":\\\"100*100\\\",\\\"url\\\":\\\"product\\\\\\/2019\\\\\\/6\\\\\\/11\\\\\\/100x100-PicsArt_02-09-08.16.42.jpg\\\"}]\"}]', '#توضیح #مختصری,#از#محصول #تست', '[\"8\",\"10\"]', 0, 10, 0, 1, 0, '2019-06-11 02:46:20', '2019-06-12 10:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sends`
--

CREATE TABLE `sends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sends`
--

INSERT INTO `sends` (`id`, `title`, `body`, `img`, `price`, `created_at`, `updated_at`) VALUES
(1, 'پست سفارشی', 'توضیح پست سفارشی', '\"send\\/mailbox.png\"', '7000', '2019-04-27 19:07:50', '2019-06-11 04:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `send_statuses`
--

CREATE TABLE `send_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_statuses`
--

INSERT INTO `send_statuses` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'معلق', '2019-04-27 19:13:37', '2019-04-27 19:13:37'),
(2, 'پردازش انبار', '2019-04-27 19:13:52', '2019-04-27 19:13:52'),
(3, 'آماده ی ارسال', '2019-04-27 19:14:29', '2019-04-27 19:14:29'),
(4, 'ارسال شده', '2019-04-27 19:14:36', '2019-04-27 19:14:36'),
(5, 'تحویل داده شده', '2019-04-27 19:14:46', '2019-04-27 19:14:46'),
(6, 'لغو ارسال', '2019-04-27 19:15:34', '2019-04-27 19:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `index` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `index`, `value`, `created_at`, `updated_at`) VALUES
(1, 'email', 'a', '2019-04-28 12:12:48', '2019-05-11 10:01:00'),
(2, 'tell', '0123456789', '2019-04-28 12:16:20', '2019-04-28 12:16:20'),
(3, 'message', '7 روز هفته، 24 ساعته در خدمت شما هستیم.', '2019-04-28 12:17:15', '2019-04-28 12:17:15'),
(4, 'instagram', '/', '2019-04-29 08:26:06', '2019-04-29 08:26:06'),
(5, 'twitter', '/', '2019-04-29 08:26:25', '2019-04-29 08:26:25'),
(6, 'telegram', '/t.me', '2019-04-29 08:26:39', '2019-04-29 08:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `showcase2s`
--

CREATE TABLE `showcase2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `showcases`
--

CREATE TABLE `showcases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, '\"slider\\/2019\\/6\\/7\\/BANNER-WINTEKNOLOGI-1000-x-400-Px-Edit-5-.jpg\"', '/#', '2019-06-07 06:17:01', '2019-06-07 06:17:01'),
(2, '\"slider\\/2019\\/6\\/7\\/download.png\"', '#', '2019-06-07 06:18:05', '2019-06-07 06:18:05'),
(3, '\"slider\\/2019\\/6\\/7\\/images.jpg\"', 'ansar', '2019-06-07 06:21:25', '2019-06-07 06:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discounts` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `active`, `name`, `level`, `email`, `email_verified_at`, `password`, `mobile`, `discounts`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'انصار میرزایی', 'admin', 'ansar@gmail.com', NULL, '$2y$10$T2JOnR4A.FRNw.Me9BZq1udrXICCgqXAE4b7QO45GznJ/XtBqMb.C', '09306029572', '[0,1,2]', 'z0uyXqeg8COmNR9aOD3zXKWW2RFYOEVNf0OU41QvJwRJHC46fxzW3SZ1Y6vJ', '2019-04-27 16:43:27', '2019-06-01 15:50:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation_codes`
--
ALTER TABLE `activation_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `column1footers`
--
ALTER TABLE `column1footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `column2footers`
--
ALTER TABLE `column2footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discounts_title_unique` (`title`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_statuses`
--
ALTER TABLE `pay_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sends`
--
ALTER TABLE `sends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_statuses`
--
ALTER TABLE `send_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showcase2s`
--
ALTER TABLE `showcase2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showcases`
--
ALTER TABLE `showcases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `activation_codes`
--
ALTER TABLE `activation_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `column1footers`
--
ALTER TABLE `column1footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `column2footers`
--
ALTER TABLE `column2footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pay_statuses`
--
ALTER TABLE `pay_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sends`
--
ALTER TABLE `sends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_statuses`
--
ALTER TABLE `send_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `showcase2s`
--
ALTER TABLE `showcase2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `showcases`
--
ALTER TABLE `showcases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
