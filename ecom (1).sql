-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 06:04 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecom`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(200) NOT NULL,
  `categorySlug` varchar(1000) DEFAULT NULL,
  `categoryImage` varchar(1000) DEFAULT NULL,
  `categoryDescription` varchar(1000) DEFAULT NULL,
  `subCategoryCount` int(11) DEFAULT 0,
  `productCount` int(11) DEFAULT 0,
  `categoryCreatedDate` datetime DEFAULT NULL,
  `categoryModifiedDate` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `categorySlug`, `categoryImage`, `categoryDescription`, `subCategoryCount`, `productCount`, `categoryCreatedDate`, `categoryModifiedDate`, `created_at`, `updated_at`) VALUES
(8, 'Dầu gội', 'dầu-gội', NULL, '123', 1, 0, '2023-11-19 00:00:00', '2023-11-19 00:00:00', NULL, '2023-11-20 08:07:53'),
(9, 'Kem trộn', 'kem-trộn', NULL, 'sdasdsad', 1, 0, '2023-12-01 00:00:00', '2023-11-25 00:00:00', NULL, '2023-11-19 20:16:33'),
(10, 'Phụ kiện', 'phụ-kiện', NULL, NULL, 0, 0, '2023-11-20 00:00:00', '2023-11-20 00:00:00', NULL, NULL),
(11, 'Chăm sóc cơ thể', 'chăm-sóc-cơ-thể', NULL, 'chăm sóc', 1, 0, '2023-11-21 00:00:00', '2023-11-21 00:00:00', NULL, '2023-11-21 07:03:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_10_081911_laratrust_setup_tables', 2),
(6, '2023_11_18_182158_create_categories_table', 3),
(7, '2023_11_18_184151_create_subcategories_table', 4),
(8, '2023_11_18_184913_create_products_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('nhta10.1107@gmail.com', '$2y$12$f6MLkVh6JTYte9LrkewILuU47MupaNT5XP/AlCba9vasUFlbPlLdC', '2023-11-19 20:26:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2023-11-10 01:28:34', '2023-11-10 01:28:34'),
(2, 'users-read', 'Read Users', 'Read Users', '2023-11-10 01:28:34', '2023-11-10 01:28:34'),
(3, 'users-update', 'Update Users', 'Update Users', '2023-11-10 01:28:35', '2023-11-10 01:28:35'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2023-11-10 01:28:35', '2023-11-10 01:28:35'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2023-11-10 01:28:35', '2023-11-10 01:28:35'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2023-11-10 01:28:35', '2023-11-10 01:28:35'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2023-11-10 01:28:35', '2023-11-10 01:28:35'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2023-11-10 01:28:35', '2023-11-10 01:28:35'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2023-11-10 01:28:35', '2023-11-10 01:28:35'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2023-11-10 01:28:35', '2023-11-10 01:28:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `productBrandName` varchar(50) DEFAULT NULL,
  `productSubCategoryID` varchar(50) DEFAULT NULL,
  `productSubCategoryName` varchar(50) DEFAULT NULL,
  `productCategoryID` varchar(50) DEFAULT NULL,
  `productCategoryName` varchar(50) DEFAULT NULL,
  `productOriginalPrice` int(11) DEFAULT NULL,
  `productDiscountPrice` int(11) DEFAULT NULL,
  `productInfo` text DEFAULT NULL,
  `productBarcode` varchar(50) DEFAULT NULL,
  `productInStock` int(11) DEFAULT NULL,
  `productImage` varchar(1000) DEFAULT NULL,
  `productSideImage1` varchar(1000) DEFAULT NULL,
  `productSideImage2` varchar(1000) DEFAULT NULL,
  `productSideImage3` varchar(1000) DEFAULT NULL,
  `productCreatedDate` datetime DEFAULT NULL,
  `productModifiedDate` datetime DEFAULT NULL,
  `productSlug` varchar(50) DEFAULT NULL,
  `isFlashSale` tinyint(1) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productID`, `productName`, `productBrandName`, `productSubCategoryID`, `productSubCategoryName`, `productCategoryID`, `productCategoryName`, `productOriginalPrice`, `productDiscountPrice`, `productInfo`, `productBarcode`, `productInStock`, `productImage`, `productSideImage1`, `productSideImage2`, `productSideImage3`, `productCreatedDate`, `productModifiedDate`, `productSlug`, `isFlashSale`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'zaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'zaa', NULL, NULL, NULL, NULL),
(2, 's', 's', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 's', NULL, NULL, NULL, NULL),
(3, 'sa', 'sa', NULL, NULL, '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sa', NULL, NULL, NULL, NULL),
(4, 'sa23', 'sa23', '8', NULL, '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sa23', NULL, NULL, NULL, NULL),
(5, 'zád', 'ssa', '8', NULL, '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'zád', NULL, NULL, NULL, NULL),
(6, 'ẻdgfcv', 'gfcv', '7', NULL, '9', 'Kem trộn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ẻdgfcv', NULL, NULL, NULL, NULL),
(7, 'đâsdasdas', 'đâsdasdsa', '7', NULL, '9', 'Kem trộn', NULL, NULL, NULL, NULL, NULL, 'upload/1783100782501073.png', NULL, NULL, NULL, NULL, NULL, 'đâsdasdas', NULL, NULL, NULL, NULL),
(8, 'sadsad', 'đasad', '8', 'Ronano', '8', 'Dầu gội', NULL, NULL, NULL, NULL, NULL, 'upload/1783101469799826.png', NULL, NULL, NULL, '2023-01-11 00:00:00', '2023-12-30 00:00:00', 'sadsad', NULL, NULL, NULL, NULL),
(9, 'sadsad44', 'đasad44', '8', 'Ronano', '8', 'Dầu gội', 45, 45, NULL, NULL, NULL, 'upload/1783101502906964.png', NULL, NULL, NULL, '2023-01-11 00:00:00', '2023-12-30 00:00:00', 'sadsad44', NULL, NULL, NULL, NULL),
(10, 'sadsadasd44', 'ádasdasdasd44', '8', 'Ronano', '8', 'Dầu gội', 34, 34, NULL, NULL, NULL, 'upload/1783101557656544.png', NULL, NULL, NULL, '2023-01-11 00:00:00', '2023-12-30 00:00:00', 'sadsadasd44', NULL, NULL, NULL, NULL),
(11, '444', '444', '8', 'Ronano', '8', 'Dầu gội', 44, 444, NULL, NULL, NULL, 'upload/1783101588598656.png', NULL, NULL, NULL, '2023-01-11 00:00:00', '2023-12-30 00:00:00', '444', NULL, NULL, NULL, NULL),
(12, '77', '77', '8', 'Ronano', '8', 'Dầu gội', 77, 77, NULL, NULL, NULL, 'upload/1783101615003897.png', NULL, NULL, NULL, '2023-01-11 00:00:00', '2023-12-30 00:00:00', '77', NULL, NULL, NULL, NULL),
(13, 'Kem chống nắng thượng hạng', 'Haseline', '8', 'Ronano', '8', 'Dầu gội', 45, 45, NULL, NULL, 4545, 'upload/1783101676111434.jpg', NULL, NULL, NULL, '2023-01-11 00:00:00', '2023-12-30 00:00:00', 'kem-chống-nắng-thượng-hạng', NULL, NULL, NULL, NULL),
(14, 'dfadsf', 'dfdsfsdf', '7', 'bcdd', '9', 'Kem trộn', 444, 444, NULL, NULL, 444, 'upload/1783101764580183.jpg', NULL, NULL, NULL, '2023-01-11 00:00:00', '2023-12-30 00:00:00', 'dfadsf', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2023-11-10 01:28:34', '2023-11-10 01:28:34'),
(2, 'user', 'User', 'User', '2023-11-10 01:28:35', '2023-11-10 01:28:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(2, 7, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcategories`
--

CREATE TABLE `subcategories` (
  `subCategoryID` int(11) NOT NULL,
  `subCategoryName` varchar(200) DEFAULT NULL,
  `subCategoryImage` varchar(1000) DEFAULT NULL,
  `subCategoryDescription` varchar(1000) DEFAULT NULL,
  `productCount` int(11) DEFAULT 0,
  `subCategoryCreatedDate` datetime DEFAULT NULL,
  `subCategoryModifiedDate` datetime DEFAULT NULL,
  `categoryID` varchar(50) DEFAULT '',
  `categoryName` varchar(50) DEFAULT '',
  `subCategorySlug` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subcategories`
--

INSERT INTO `subcategories` (`subCategoryID`, `subCategoryName`, `subCategoryImage`, `subCategoryDescription`, `productCount`, `subCategoryCreatedDate`, `subCategoryModifiedDate`, `categoryID`, `categoryName`, `subCategorySlug`, `created_at`, `updated_at`) VALUES
(7, 'bcdd', NULL, 'dddd', 0, '2023-11-20 00:00:00', '2023-11-20 00:00:00', '9', 'Kem trộn', 'bcdd', NULL, NULL),
(8, 'Ronano', NULL, NULL, 0, '2023-11-20 00:00:00', '2023-11-20 00:00:00', '8', 'Dầu gội', 'ronano', NULL, NULL),
(9, 'Lăn khử mùi', NULL, 'Lăn khử mùi', 0, '2023-11-21 00:00:00', '2023-11-25 00:00:00', '11', 'Chăm sóc cơ thể', 'lăn-khử-mùi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Huy Thục', 'nhta10.1107@gmail.com', NULL, '$2y$12$9CJADC43iDEOIu5S5TDQGePupIav.smFOY9ozP5N3hfupi0SZnxja', NULL, '2023-11-10 05:24:05', '2023-11-10 05:24:05'),
(6, 'Như Quỳnh', 'nhuquynh1711@gmail.com', NULL, '$2y$12$uMI0rK/3KoU4DUHYsbPB7ey4iO5aHJWjFMBSVVdH99jQ8cxHVt6LW', NULL, '2023-11-15 02:07:12', '2023-11-15 02:07:12'),
(7, 'Huy Thuc', 'pinguser@gmail.com', NULL, '$2y$12$e3vCQ9ugqg9Wkx9wxBR8YeEJLtV4x4evwUvoCeBq9Rm0KqGMMP.N6', NULL, '2023-11-20 09:44:57', '2023-11-20 09:44:57');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subCategoryID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
