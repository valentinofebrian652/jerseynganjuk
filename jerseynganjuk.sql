-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 07:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jerseynganjuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Jersey Bola', 'jersey-bola', '2019-03-02 17:06:05', '2019-03-02 17:06:05'),
(2, 'Jersey Basket', 'jersey-basket', '2019-03-02 17:06:11', '2019-03-02 17:06:11'),
(8, 'Jersey Futsal', 'jersey-futsal', '2021-06-26 22:56:58', '2021-06-26 22:56:58'),
(9, 'Jersey Esport', 'jersey-esport', '2021-06-26 22:57:38', '2021-06-26 22:57:38'),
(10, 'Sepatu Futsal', 'sepatu-futsal', '2021-06-27 12:39:44', '2021-06-27 12:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `confirms`
--

CREATE TABLE `confirms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `confirms`
--

INSERT INTO `confirms` (`id`, `user_id`, `order_id`, `image`, `created_at`, `updated_at`, `status_order`) VALUES
(31, 8, 38, '286406306.ex2.PNG', '2021-06-27 01:24:22', '2021-06-27 01:24:54', 'dibayar'),
(32, 8, 39, '511266843.indi.png', '2021-06-27 01:33:10', '2021-06-27 01:41:36', 'dibayar'),
(33, 8, 40, '646962005.promo2.png', '2021-06-27 01:42:25', '2021-06-27 01:42:36', 'dibayar'),
(34, 8, 41, '926999254.indi.png', '2021-06-27 01:43:16', '2021-06-27 01:43:28', 'dibayar'),
(35, 8, 42, '934585732.Telkomsel-Logo.png', '2021-06-27 02:46:27', '2021-06-27 02:46:41', 'dibayar'),
(36, 8, 43, '627520285.logo-mobile-legend-tcash-apapun-operatornya-semua-bisa-paketcash-18.png', '2021-06-27 02:48:25', '2021-06-27 02:48:37', 'dibayar'),
(37, 8, 44, '539326494.ex.PNG', '2021-06-27 02:52:01', '2021-06-27 02:52:13', 'dibayar'),
(38, 8, 45, '722177331.ex2.PNG', '2021-06-27 03:15:22', '2021-06-27 03:15:41', 'dibayar'),
(39, 8, 46, '993292043.ex2.PNG', '2021-06-27 03:17:00', '2021-06-27 03:17:11', 'dibayar'),
(40, 8, 47, '882359455.ios-app-icons_0.png', '2021-06-27 03:18:06', '2021-06-27 03:18:17', 'dibayar'),
(41, 8, 48, '683943103.ios-app-icons_0.png', '2021-06-27 03:19:34', '2021-06-27 03:19:46', 'dibayar'),
(42, 8, 49, '333495258.ex2.PNG', '2021-06-27 03:26:11', '2021-06-27 03:26:28', 'dibayar'),
(43, 8, 50, '306304433.Logo_IM3_Ooredoo.svg.png', '2021-06-27 03:36:16', '2021-06-27 03:36:30', 'dibayar');

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
(3, '2018_12_21_181025_create_products_table', 1),
(4, '2018_12_21_181226_create_categories_table', 1),
(5, '2018_12_21_181849_add_fiel_category_id_to_product_table', 1),
(6, '2018_12_21_182345_create_orders_table', 1),
(7, '2018_12_21_183130_create_order__product_controllers_table', 1),
(8, '2018_12_22_115009_add_field_role_to_users_table', 1),
(9, '2018_12_22_200035_add_field_subtotal_to_order_product_table', 1),
(10, '2018_12_23_114605_create_confirms_table', 1),
(11, '2018_12_23_174258_add_field_status_order_to_confirms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `receiver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('belum bayar','menunggu verifikasi','dibayar','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `receiver`, `address`, `total_price`, `date`, `status`, `created_at`, `updated_at`) VALUES
(38, 8, 'dsds', 'dsd', 240000, '2021-06-28', 'dibayar', '2021-06-27 01:24:11', '2021-06-27 01:24:54'),
(39, 8, 'Emboh', 'jjmn', 336000, '2021-06-28', 'dibayar', '2021-06-27 01:32:54', '2021-06-27 01:41:36'),
(40, 8, 'csad', 'sds', 90000, '2021-06-27', 'dibayar', '2021-06-27 01:42:15', '2021-06-27 01:42:36'),
(41, 8, 'zszcz', 'zc', 246000, '2021-06-27', 'dibayar', '2021-06-27 01:43:06', '2021-06-27 01:43:28'),
(42, 8, 'Emboh', 'dad', 120000, '2021-06-26', 'dibayar', '2021-06-27 02:46:16', '2021-06-27 02:46:41'),
(43, 8, 'Febri Ganteng', 'i890', 90000, '2021-06-27', 'dibayar', '2021-06-27 02:48:15', '2021-06-27 02:48:37'),
(44, 8, 'Febri Ganteng', 'sds', 600000, '2021-06-27', 'dibayar', '2021-06-27 02:51:51', '2021-06-27 02:52:12'),
(45, 8, 'Emboh', 'ii', 450000, '2021-06-27', 'dibayar', '2021-06-27 03:15:07', '2021-06-27 03:15:41'),
(46, 8, 'dada', 'dada', 450000, '2021-06-27', 'dibayar', '2021-06-27 03:16:49', '2021-06-27 03:17:11'),
(47, 8, 'dsds', 'dsds', 336000, '2021-06-27', 'dibayar', '2021-06-27 03:17:55', '2021-06-27 03:18:17'),
(48, 8, 'Febri Ganteng', 'dada', 492000, '2021-06-27', 'dibayar', '2021-06-27 03:19:21', '2021-06-27 03:19:46'),
(49, 8, 'sasa', 'sasa', 213000, '2021-06-26', 'dibayar', '2021-06-27 03:26:01', '2021-06-27 03:26:28'),
(50, 8, 'dfsfs', 'fsfs', 600000, '2021-06-27', 'dibayar', '2021-06-27 03:34:52', '2021-06-27 03:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `created_at`, `updated_at`, `subtotal`) VALUES
(42, 39, 15, 2, '2021-06-27 01:32:54', '2021-06-27 01:32:54', '246000.00'),
(43, 39, 17, 1, '2021-06-27 01:32:54', '2021-06-27 01:32:54', '90000.00'),
(44, 40, 17, 1, '2021-06-27 01:42:15', '2021-06-27 01:42:15', '90000.00'),
(45, 41, 15, 2, '2021-06-27 01:43:06', '2021-06-27 01:43:06', '246000.00'),
(47, 43, 17, 1, '2021-06-27 02:48:15', '2021-06-27 02:48:15', '90000.00'),
(49, 45, 17, 5, '2021-06-27 03:15:07', '2021-06-27 03:15:07', '450000.00'),
(50, 46, 17, 5, '2021-06-27 03:16:49', '2021-06-27 03:16:49', '450000.00'),
(51, 47, 17, 1, '2021-06-27 03:17:55', '2021-06-27 03:17:55', '90000.00'),
(52, 47, 15, 2, '2021-06-27 03:17:55', '2021-06-27 03:17:55', '246000.00'),
(53, 48, 15, 4, '2021-06-27 03:19:21', '2021-06-27 03:19:21', '492000.00'),
(54, 49, 15, 1, '2021-06-27 03:26:01', '2021-06-27 03:26:01', '123000.00'),
(55, 49, 17, 1, '2021-06-27 03:26:02', '2021-06-27 03:26:02', '90000.00'),
(56, 50, 1, 3, '2021-06-27 03:34:52', '2021-06-27 03:34:52', '360000.00'),
(57, 50, 8, 2, '2021-06-27 03:34:52', '2021-06-27 03:34:52', '240000.00');

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
('admin@gmail.com', '$2y$10$8EqhHP6Kv6Q0uiWV2JDgQ.p9fFgA8sq9NhSe.WIS7kXJppx6.4vJO', '2021-06-27 12:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Jersey Ac Milan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 120000, 97, '/upload/products/jersey-ac-milan.png', 'publish', '2019-03-02 17:15:28', '2021-06-27 03:36:30', 1),
(8, 'Jersey City', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 120000, 98, '/upload/products/jersey-city.jpg', 'publish', '2019-03-02 17:19:45', '2021-06-27 03:36:31', 1),
(15, 'Jersey Polar Sports', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 123000, 95, '/upload/products/jersey-polar-sports.png', 'publish', '2021-06-26 23:02:36', '2021-06-27 03:34:09', 9),
(17, 'Jersey Tottenham', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 90000, 88, '/upload/products/jersey-tottenham.png', 'publish', '2021-06-26 23:10:17', '2021-06-27 03:34:09', 1),
(18, 'Sepatu Futsal', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 123000, 122, '/upload/products/sepatu-futsal.jpg', 'publish', '2021-06-27 12:40:24', '2021-06-27 12:40:24', 8),
(19, 'Jersey Munchen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 150000, 42, '/upload/products/jersey-munchen.png', 'publish', '2021-06-27 12:41:11', '2021-06-27 12:41:11', 1),
(20, 'Jersey Dortmun', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 90000, 55, '/upload/products/jersey-dortmun.png', 'publish', '2021-06-27 12:44:59', '2021-06-27 12:44:59', 1);

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
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(7, 'admin', 'admin@gmail.com', NULL, '$2y$10$CFLn5UUjXoTISvqFgAa8H.FMo90w/gBL6Ox4/3NfnAP7Z/gjKgj.q', 'kW6huPhGNU0BxGivOpexbKOYj91bq8y6lPpqL7YJYUIcPEplNJi04WKclmDI', '2021-06-26 00:50:31', '2021-06-26 00:50:31', 'admin'),
(8, 'customer', 'customer@gmail.com', NULL, '$2y$10$i13Mzwen9iLxT9cEtluhD.P1pZcSyphopvtJim4QEPM8.Fuo7wFFa', 'U9e3KOOtzFaQ8urJytAGX6kuKpqeqahMfbPqk7JhtzMg10dveoY7Z8tO05R4', '2021-06-26 00:51:08', '2021-06-26 00:51:08', 'customer'),
(9, 'Jono', 'jono@gmail.com', NULL, '$2y$10$4b7DTjW.YNnuWKtuOsEl/uFq2CW/ipGLHZm1evvUrs9lPZYR2T4We', 'UsbEmWt8Lw8mBnj9jhblZis8M922GDW4OnlGCwwZegQF27XUtN7P1BrNJKte', '2021-06-27 12:46:51', '2021-06-27 12:46:51', 'customer'),
(10, 'Joni', 'joni@gmail.com', NULL, '$2y$10$SveYngPbErfqSnyddlpMQO01ugXX7OAGETWIYBGnNJYMHYk/fhF2u', 'vlg6blsDIXVHcBJxyos17PusqrYfrlzZVKj9YiYtXwDnuIA51d7jbiF0TEcy', '2021-06-27 13:25:04', '2021-06-27 13:25:04', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirms`
--
ALTER TABLE `confirms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `confirms_user_id_foreign` (`user_id`),
  ADD KEY `confirms_order_id_foreign` (`order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `confirms`
--
ALTER TABLE `confirms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `confirms`
--
ALTER TABLE `confirms`
  ADD CONSTRAINT `confirms_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `confirms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
