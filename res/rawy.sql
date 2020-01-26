-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 09:15 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawy`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `title`, `lang`, `lat`, `area`, `created_at`, `updated_at`) VALUES
(1, 'شرق الرياض', '46.692', '24.943', 10, '2019-12-25 17:54:57', '2019-12-25 17:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'slideimage1577124468BANNER.jpg', '2019-12-22 22:00:00', '2019-12-23 16:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `msg`, `created_at`, `updated_at`) VALUES
(2, 'ahmed kamal', '1020304050', 'hi admin', '2019-12-29 01:07:29', '2019-12-29 01:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'markimage1577204455Dasani.png', 'دساني', '2019-12-23 15:39:03', '2019-12-24 14:20:55'),
(2, 'markimage1577204490Aquafina.png', 'اكوافينا', '2019-12-23 15:39:35', '2019-12-24 14:21:30'),
(4, 'markimage1577204536Nestle.png', 'نستله', '2019-12-24 14:22:16', '2019-12-24 14:22:16');

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
(3, '2019_12_23_160439_create_settings_table', 1),
(4, '2019_12_23_160515_create_sliders_table', 1),
(6, '2019_12_23_174059_create_banners_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `time_id` int(255) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `phone`, `address`, `city`, `lang`, `lat`, `date`, `time_id`, `status`, `total`, `created_at`, `updated_at`) VALUES
(3, 6, 'أحمد كمال', '123123123', '73 ش 60 ميامي', 'جدة', '47.15793436718752', '25.00356142760785', '2019-12-30 22:00:00', 2, 0, 188, '2019-12-29 05:05:10', '2019-12-29 06:12:39'),
(4, 8, 'kimo', '1234567890', 'aaaaaa aaaaa', 'جدة', '47.06455057812502', '24.394709974519056', '2019-12-30 22:00:00', 3, 1, 150, '2019-12-29 05:34:19', '2019-12-29 06:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 8, 1, '2019-12-29 05:05:10', '2019-12-29 05:05:10'),
(2, 3, 5, 2, '2019-12-29 05:05:10', '2019-12-29 05:05:10'),
(3, 4, 6, 1, '2019-12-29 05:34:19', '2019-12-29 05:34:19'),
(4, 4, 5, 1, '2019-12-29 05:34:19', '2019-12-29 05:34:19');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mark_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `mark_id`, `image`, `title`, `price`, `size`, `created_at`, `updated_at`) VALUES
(1, 1, 'markimage15772124066.jpg', 'زجاجة ماء', 12, 1, '2019-12-24 16:33:26', '2019-12-24 16:34:01'),
(2, 1, 'markimage15772125852.jpg', 'عرض 12 زجاجة', 100, 12, '2019-12-24 16:36:25', '2019-12-24 16:36:25'),
(3, 2, 'markimage15772126481.jpg', 'عرض 12 زجاجة', 150, 12, '2019-12-24 16:37:28', '2019-12-24 16:37:28'),
(4, 4, 'markimage15772126993.jpg', 'عرض 12 زجاجة', 120, 12, '2019-12-24 16:38:19', '2019-12-24 16:38:19'),
(5, 4, 'markimage15772127494.jpg', 'عرض 10 زجاجات', 90, 10, '2019-12-24 16:39:09', '2019-12-24 16:39:09'),
(6, 4, 'markimage15772128045.jpg', 'عرض 12 زجاجة صغيرة', 60, 6, '2019-12-24 16:40:04', '2019-12-24 16:40:04'),
(7, 2, 'markimage1577212871a1.png', 'عرض 24 زجاجة صغيرة', 130, 12, '2019-12-24 16:41:11', '2019-12-24 16:41:11'),
(8, 2, 'markimage1577212960bottled-water-logos.jpg', 'زجاجة كبيرة', 8, 2, '2019-12-24 16:42:40', '2019-12-24 16:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commercial_record` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone_1`, `phone_2`, `email`, `commercial_record`, `facebook`, `twitter`, `instagram`, `privacy`, `about`, `terms`, `created_at`, `updated_at`) VALUES
(1, '966123456', '966123456', 'info@rawy.com', 'سجل تجارى 5489/15', 'https://facebook.com', 'https://teitter.com', 'https://instagram.com', 'سياسة الخصوصية سياسة الخصوصيو سياسة الخصوصية سياسة الخصوصيو سياسة الخصوصية سياسة الخصوصيو سياسة الخصوصية سياسة الخصوصيو سياسة الخصوصية سياسة الخصوصيو سياسة الخصوصية سياسة الخصوصيو سياسة الخصوصية سياسة الخصوصيو ', 'معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى معلومات عن راوى ', 'الشروط والاحكام الشروط والاحكام الشروط والاحكام الشروط والاحكام الشروط والاحكام الشروط والاحكام الشروط والاحكام الشروط والاحكام الشروط والاحكام الشروط والاحكام الشروط والاحكام ', '2019-12-22 22:00:00', '2019-12-22 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `image_title`, `created_at`, `updated_at`) VALUES
(1, 'slideimage1577204350slideimage1577122742slide3.jpg', 'الصورة الأولي', '2019-12-23 15:39:03', '2019-12-24 14:19:10'),
(2, 'slideimage1577122775slide2.jpg', 'الصورة الثانية', '2019-12-23 15:39:35', '2019-12-23 15:39:35'),
(3, 'slideimage1577122801slide1.jpg', 'الصورة الثالثة', '2019-12-23 15:40:01', '2019-12-23 15:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'من ٨ ص - ١٠ص', NULL, NULL),
(2, 'من ١٠ص - ١٢م', NULL, NULL),
(3, 'من ١٢م - ٢م', NULL, NULL),
(4, 'من ٢م - ٤م', NULL, NULL),
(5, 'من ٤م - ٦م', NULL, NULL),
(6, 'من ٦م - ٨م', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg` int(1) NOT NULL DEFAULT '0',
  `v_code` int(11) NOT NULL DEFAULT '1234',
  `verified` int(1) NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `reg`, `v_code`, `verified`, `address`, `city`, `lang`, `lat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@yahoo.com', NULL, '$2y$10$FjF5Lfb.UzXvxrNCGqjSJ.4xB3o3XGuvzyrN.Jo8dpj2YwS9HEpJu', NULL, 0, 1234, 0, NULL, NULL, NULL, NULL, NULL, '2019-12-23 14:58:40', '2019-12-23 14:58:40'),
(2, NULL, NULL, NULL, NULL, NULL, 0, 1234, 0, NULL, NULL, NULL, NULL, NULL, '2019-12-26 12:01:03', '2019-12-26 12:01:03'),
(3, NULL, NULL, NULL, NULL, NULL, 0, 1234, 0, NULL, NULL, NULL, NULL, NULL, '2019-12-26 12:02:11', '2019-12-26 12:02:11'),
(4, NULL, NULL, NULL, NULL, NULL, 0, 1234, 0, NULL, NULL, NULL, NULL, NULL, '2019-12-26 12:18:49', '2019-12-26 12:18:49'),
(5, NULL, NULL, NULL, NULL, NULL, 0, 1234, 0, NULL, NULL, NULL, NULL, NULL, '2019-12-26 12:41:38', '2019-12-26 12:41:38'),
(6, 'أحمد كمال', NULL, NULL, '$2y$10$.Efba4Isl2tTxCfhUPQ8vO65qw.y5XrA6d8PkYj1/oMqB9N2axOuW', '123123123', 1, 1234, 1, '73 ش 60 ميامي', 'جدة', '47.15793436718752', '25.00356142760785', NULL, '2019-12-26 15:52:27', '2019-12-29 05:05:10'),
(7, 'زائر', NULL, NULL, NULL, NULL, 0, 1234, 0, NULL, NULL, NULL, NULL, NULL, '2019-12-28 10:35:22', '2019-12-28 10:35:22'),
(8, 'kimo', NULL, NULL, NULL, '1234567890', 0, 1234, 0, 'aaaaaa aaaaa', 'جدة', '47.06455057812502', '24.394709974519056', NULL, '2019-12-29 04:20:29', '2019-12-29 05:34:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
