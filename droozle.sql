-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2023 pada 19.24
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `droozle`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'akses admin'),
(2, 'user', 'akses user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 3),
(2, 2),
(2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'alfito', NULL, '2022-12-22 11:53:35', 0),
(2, '::1', 'alfito', 1, '2022-12-22 11:56:52', 0),
(3, '::1', 'alfito', 1, '2022-12-22 11:57:35', 0),
(4, '::1', 'nunuy@gmail.com', 2, '2022-12-22 11:58:05', 1),
(5, '::1', 'alfito', 1, '2022-12-22 12:58:33', 0),
(6, '::1', 'nunuy@gmail.com', 2, '2022-12-22 12:58:41', 1),
(7, '::1', 'nunuy@gmail.com', 2, '2022-12-22 13:12:44', 1),
(8, '::1', 'admin@gmail.com', 3, '2022-12-22 13:16:38', 1),
(9, '::1', 'nunuy@gmail.com', 2, '2022-12-22 13:33:25', 1),
(10, '::1', 'admin@gmail.com', 3, '2022-12-22 13:33:56', 1),
(11, '::1', 'admin@gmail.com', 3, '2022-12-22 13:41:01', 1),
(12, '::1', 'nunuy@gmail.com', 2, '2022-12-22 13:41:32', 1),
(13, '::1', 'nunuy@gmail.com', 2, '2022-12-22 13:52:10', 1),
(14, '::1', 'admin@gmail.com', 3, '2022-12-22 14:27:07', 1),
(15, '::1', 'admin@gmail.com', 3, '2022-12-23 00:26:22', 1),
(16, '::1', 'nunuy', NULL, '2022-12-23 06:08:41', 0),
(17, '::1', 'admin@gmail.com', 3, '2022-12-23 06:09:33', 1),
(18, '::1', 'as', NULL, '2022-12-23 06:11:05', 0),
(19, '::1', 'acs', NULL, '2022-12-23 06:11:13', 0),
(20, '::1', 'nunuy', NULL, '2022-12-23 06:11:41', 0),
(21, '::1', 'a', NULL, '2022-12-23 06:15:31', 0),
(22, '::1', 'a', NULL, '2022-12-23 06:16:23', 0),
(23, '::1', 'as', NULL, '2022-12-23 06:17:30', 0),
(24, '::1', 'a', NULL, '2022-12-23 06:37:27', 0),
(25, '::1', 'a', NULL, '2022-12-23 06:40:53', 0),
(26, '::1', 'a', NULL, '2022-12-23 06:41:10', 0),
(27, '::1', 'alfito', NULL, '2022-12-23 07:05:11', 0),
(28, '::1', 'alfito', NULL, '2022-12-23 07:05:20', 0),
(29, '::1', 'alfitofebriansyah', NULL, '2022-12-23 07:06:12', 0),
(30, '::1', 'alfito@gmail.com', 5, '2022-12-23 07:06:24', 1),
(31, '::1', 'as', NULL, '2022-12-23 08:56:04', 0),
(32, '::1', 'alfito@gmail.com', 5, '2022-12-23 11:14:32', 1),
(33, '::1', 'alfito@gmail.com', 5, '2022-12-23 11:14:35', 1),
(34, '::1', 'admin@gmail.com', 3, '2022-12-23 23:57:09', 1),
(35, '::1', 'alfito@gmail.com', 5, '2022-12-24 02:30:53', 1),
(36, '::1', 'alfito@gmail.com', 5, '2022-12-24 02:33:04', 1),
(37, '::1', 'alfito@gmail.com', 5, '2022-12-24 06:19:50', 1),
(38, '::1', 'alfito@gmail.com', 5, '2022-12-24 07:28:41', 1),
(39, '::1', 'admin@gmail.com', 3, '2022-12-24 07:29:46', 1),
(40, '::1', 'admin@gmail.com', 3, '2022-12-24 07:34:25', 1),
(41, '::1', 'admin@gmail.com', 3, '2022-12-27 12:31:26', 1),
(42, '::1', 'admin@gmail.com', 3, '2022-12-28 22:41:00', 1),
(43, '::1', 'admin@gmail.com', 3, '2022-12-28 22:47:11', 1),
(44, '::1', 'alfito@gmail.com', 5, '2022-12-28 22:52:33', 1),
(45, '::1', 'admin@gmail.com', 3, '2022-12-28 22:53:41', 1),
(46, '::1', 'admin@gmail.com', 3, '2022-12-29 10:00:05', 1),
(47, '::1', 'admin@gmail.com', 3, '2022-12-29 12:12:07', 1),
(48, '::1', 'admin@gmail.com', 3, '2022-12-29 12:17:08', 1),
(49, '::1', 'admin@gmail.com', 3, '2022-12-29 12:20:31', 1),
(50, '::1', 'admin@gmail.com', 3, '2022-12-29 19:59:25', 1),
(51, '::1', 'admin@gmail.com', 3, '2023-01-02 03:29:48', 1),
(52, '::1', 'admin', NULL, '2023-01-12 12:17:10', 0),
(53, '::1', 'admin', NULL, '2023-01-12 12:17:20', 0),
(54, '::1', 'admin@gmail.com', 3, '2023-01-12 12:18:45', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `drz1`
--

CREATE TABLE `drz1` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `link` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `drz1`
--

INSERT INTO `drz1` (`id`, `nama`, `slug`, `tipe`, `harga`, `link`, `image`, `created_at`, `updated_at`) VALUES
(12, 'Basic Pants co', 'basic-pants-co', 'Pants', 122, 'shopee.com', 'p21_2.png', NULL, '2023-01-12'),
(13, 'Heading of the Beach', 'hotb', 'Totebag', 39, 'shopee.com', 'p7.png', NULL, NULL),
(14, 'Beautiful Disaster', 'beautiful-disaster', 'T-shirt', 150, 'shopee.com', 'p8.png', NULL, NULL),
(67, 'Fjok - Black', 'fjok-black', 'Mask', 25, 'shopee', 'p19.png', '2022-11-17', '2022-11-17'),
(68, 'Killua Vacation', 'killua-vacation', 'T-shirt', 90, 'shopee.com', 'p12.png', '2022-11-17', '2022-11-17'),
(69, 'Road Trip', 'road-trip', 'T-shirt', 90, 'shopee.com', 'p1_1.png', '2022-12-22', '2022-12-22'),
(70, 'Peacemaker', 'peacemaker', 'T-shirt', 90, 'shopee.com', 'p2_1.png', '2022-12-22', '2022-12-22'),
(71, 'Melted Summer', 'melted-summer', 'T-shirt', 90, 'shopee.com', 'p5_1.png', '2022-12-22', '2022-12-22'),
(72, 'Baseball Caps Bronze', 'baseball-caps-bronze', 'Caps', 85, 'shopee.com', 'p10_1.png', '2022-12-22', '2022-12-22'),
(73, 'Heaven Blush', 'heaven-blush', 'Collar Shirt', 169, 'shopee.com', 'p11_1.png', '2022-12-22', '2022-12-22'),
(74, 'Jasper Paisley', 'jasper-paisley', 'T-shirt', 90, 'shopee.com', 'p13_1.png', '2022-12-22', '2022-12-22'),
(75, 'Soka', 'soka', 'Collar Shirt', 169, 'shopee.com', 'p14_1.png', '2022-12-22', '2022-12-22'),
(76, 'Fjok - Olive', 'fjok-olive', 'Mask', 25, 'shopee.com', 'p15_1.png', '2022-12-22', '2022-12-22'),
(77, 'Youth Living', 'youth-living', 'Caps', 85, 'shopee.com', 'p16_1.png', '2022-12-22', '2022-12-22'),
(78, 'My Way', 'my-way', 'T-shirt', 90, 'shopee.com', 'p17_1.png', '2022-12-22', '2022-12-22'),
(79, 'Sunspot Club', 'sunspot-club', 'T-shirt', 90, 'shopee.com', 'p18_1.png', '2022-12-22', '2022-12-22'),
(80, 'Son of A Beach Sinchan', 'son-of-a-beach-sinchan', 'T-shirt', 90, 'shopee.com', 'p20_1.png', '2022-12-22', '2022-12-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1671728966, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'nunuy@gmail.com', 'nunuy', '$2y$10$uyvm8d8lvZGZINCMGechEu.yyBEi3j7.ZOS5VMCzHqSn0qiQQoPT6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-22 11:57:55', '2022-12-22 11:57:55', NULL),
(3, 'admin@gmail.com', 'admin', '$2y$10$6WoHjX1Kc29oOxtBT7S..eG8/u7n9GpEERCBiWTfzKNnLgl1qW63i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-22 13:16:28', '2022-12-22 13:16:28', NULL),
(5, 'alfito@gmail.com', 'alfito', '$2y$10$TF8p4yJt960l8gLyx1yl/e2rG2LNGTrLjSWiAp2GDqLolc8H2oK7.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-23 07:05:53', '2022-12-23 07:05:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `drz1`
--
ALTER TABLE `drz1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `drz1`
--
ALTER TABLE `drz1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
