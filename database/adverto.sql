-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 09:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adverto`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `location_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `price`, `user_id`, `category_id`, `location_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Example Ad 1', 'This is the description of Example Ad 1.', '100', 1, 1, 1, '2023-06-03 17:10:51', '2023-06-03 17:10:51', 1),
(2, 'Example Ad 2', 'This is the description of Example Ad 2.', '200', 1, 2, 1, '2023-06-03 17:10:51', '2023-06-03 17:10:51', 1),
(3, 'Example Ad 3', 'This is the description of Example Ad 3.', '300', 2, 1, 2, '2023-06-03 17:10:51', '2023-06-03 17:10:51', 1),
(4, '12', '12', '12', 1, 1, 1, '2023-06-03 16:34:00', '2023-06-03 16:34:00', 1),
(5, 'Opel Vectra C', 'Witam. Posiadam na sprzedaż Vectrę C w gazie. Posiadam do niego pełną dokumentację napraw w książce od ASO. Cena do małej negocjacji.', '12500', 1, 1, 1, '2023-06-03 16:37:04', '2023-06-03 16:37:04', 1),
(6, 'BMX', 'Siema, posiadam rower na sprzedaż', '500', 1, 6, 2, '2023-06-04 14:50:26', '2023-06-04 14:50:26', 1),
(7, 'BMX', 'Siema, posiadam rower na sprzedaż', '500', 1, 6, 1, '2023-06-04 14:50:39', '2023-06-04 14:50:39', 1),
(9, 'koszulka z wizerunkiem papieża', 'Mam na sprzedaż nową koszulkę w rozmiarze M z nadrukiem papieża', '2137', 1, 4, 1, '2023-06-06 08:03:41', '2023-06-06 08:03:41', 1),
(10, 'sadas', 'asdsa', '12', 16, 1, 1, '2023-06-09 14:50:35', '2023-06-09 14:50:35', 1),
(11, 'sadas', 'asdsa', '12', 16, 1, 1, '2023-06-09 15:17:05', '2023-06-09 15:17:05', 1),
(12, 'sdgfhjklj', 'asdgfhgjkh', '1234', 16, 1, 1, '2023-06-09 15:17:35', '2023-06-09 15:17:35', 1),
(13, 'sdgfhjklj', 'asdgfhgjkh', '1234', 16, 1, 1, '2023-06-09 15:17:35', '2023-06-09 15:17:35', 1),
(16, 'Serwis telefonów Naprawa Doogee Ulefone Blackview Hammer', 'Profesjonalny serwis „FiXPhone” na podstawie fachowej wiedzy i umijętności praktycznych realizuje naprawy wszystkich produktów marek Huawei Xiaomi Samsung LG IPhone OnePlus Oppo Realmi Ulefone Doogee Hammer BLACKVIEW Oukitel Meizu Asus wykonując prace różnego rodzaju i poziomów trudności. Pracujemy na oryginalnych częściach oraz na zamiennikach najwyższej jakości\r\n\r\nNasz Serwis Naprawia\r\n\r\nUlefone Armor\r\nUlefone Armor 2\r\nUlefone Armor 3 / 3T / 3WT\r\nUlefone Armor x3 / x5\r\nUlefone Armor 6 / Armor 6S / Armor 6E\r\nUlefone Armor 7 / Armor 7E\r\nUlefone Armor 8\r\nUlefone Armor 9E / Armor 9 Thermal\r\nUlefone Armor 10\r\nUlefone Armor 11\r\nUlefone Armor X7\r\nUlefone Armor X8\r\nUlefone Power (Dark Blue)\r\nUlefone Power Armor\r\nUlefone Power 2\r\nUlefone Power 3 / Power 3s\r\nUlefone Power 5\r\nUlefone Power 6\r\n\r\nDOOGEE S30\r\nDOOGEE S60 / DOOGEE S60 Lite\r\nDOOGEE S68\r\nDOOGEE S70 / DOOGEE S70 Lite\r\nDOOGEE S80 / DOOGEE S80 Lite\r\nDOOGEE S88\r\nDOOGEE S90\r\nDOOGEE S95 Pro\r\nDOOGEE S96\r\nDOOGEE x20\r\nDOOGEE BL5000\r\nDOOGEE BL7000\r\nDOOGEE Bl 12000\r\nDOOGEE T6\r\nDOOGEE X5\r\nDOOGEE MIX 1 / DOOGEE MIX 2\r\nDOOGEE Y6 Max\r\nDOOGEE N20\r\n\r\nOukitel K 4000\r\nOukitel K 6000 Pro\r\nOukitel K5\r\nOukitel K10\r\nOukitel WP 2\r\nOukitel WP 6\r\nOukitel WP 7\r\nOukitel WP 8\r\nOukitel K13 Pro\r\n\r\nOraz Pozostałe modele\r\n\r\nNASZE USŁUGI:\r\n• WYMIANA WYŚWIETLACZY i PANELI DOTYKOWYCH\r\n• WYMIANA LUB NAPRAWA OBUDOWY\r\n• WYMIANA WBUDOWANYCH BATERII\r\n• WYMIANA APARATU FOTOGRAFICZNEGO I SZYBKI APARATU\r\n• LUTOWANIE PŁYT GŁÓWNYCH\r\n• WYMIANA TAŚM, KABLA ANTENOWEGO GSM, Wi-Fi, GPS, NFC\r\n• WYMIANA GŁOŚNIKÓW, MIKROFONÓW PORTÓW USB, GNIAZD ŁADOWANIA, PORTY SIM\r\n• USUWANIE ZAPOMNIANEJ BLOKADY KODU EKRANU, BLOKADY FRP GOOGLE Z TELEFONU I TABLETU\r\n• NAPRAWA ZALANYCH, USZKODZONYCH URZĄDZEŃ, odrzucone przez autoryzowane punkty serwisowe\r\n• NAPRAWA I AKTUALIZACJA OPROGRAMOWANIA\r\n• ODZYSKIWANIE NUMERU IMEI\r\n• ZDEJMOWANIE SIMLOCKA\r\n• PRZYCINANIE KARTY SIM\r\n• ODZYSKIWANIE ORAZ PRZENOSZENIE DANYCH\r\n\r\nUSŁUGI DODATKOWE:\r\n• Usługa „NAPRAWA WYSYŁKOWA”\r\nDla zapewnienia Twojej wygody prowadzimy usługę „door to door”.\r\n\r\nCO OTRZYMUJESZ:\r\n• Jakość Wykonania Usługi Pracujemy na profesjonalnym sprzęcie znanych marek\r\n• Paragon lub Fakturę VAT 23%\r\nNa wszystkie usługi wystawiamy paragon lub fakturę VAT 23%\r\n• Pełną gwarancje\r\nNa wszystkie nasze usługi dajemy 180-cio dniową gwarancję\r\n\r\nZapraszamy do skorzystania z naszej oferty.\r\n\r\nSerwis FiXPhone\r\nul. Urwisko 10 Ursynów\r\n02-776 Warszawa\r\nwww.***********\r\n+48 *** *** ***\r\n\r\nJESTEŚMY OTWARCI\r\nPoniedziałek - Piątek 10:00 - 18:00\r\nSobota 10:00 - 15:00', '1', 16, 3, 1, '2023-06-09 16:01:01', '2023-06-09 16:01:01', 1),
(17, 'Test', 'test', '2500', 16, 2, 1, '2023-06-10 15:55:50', '2023-06-10 15:55:50', 1),
(18, 'Test2', 'Test', '1', 16, 1, 1, '2023-06-10 16:26:20', '2023-06-10 16:26:20', 1),
(19, 'Opony', 'Opony letnie', '600', 16, 1, 4, '2023-06-11 13:15:01', '2023-06-11 13:15:01', 1),
(20, 'TEST', 'TEST', '600', 16, 5, 5, '2023-06-11 14:10:40', '2023-06-11 14:10:40', 1),
(21, 'TEST', 'TEST', '600', 16, 5, 6, '2023-06-11 14:12:58', '2023-06-11 14:12:58', 1),
(22, 'TEST', 'TEST', '12', 16, 5, 7, '2023-06-11 14:41:21', '2023-06-11 14:41:21', 1),
(23, 'TEST', 'Tesy', '600', 16, 5, 8, '2023-06-11 14:47:38', '2023-06-11 14:47:38', 1),
(24, 'awsdfghjkl;\'', 'asdfghjk', '400', 16, 6, 9, '2023-06-11 15:47:53', '2023-06-11 15:47:53', 1),
(25, 'Feliczita', 'Siemanko siemka', '249', 16, 4, 10, '2023-06-11 16:01:15', '2023-06-11 16:01:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Motoryzacja', NULL),
(2, 'Dom i ogród', NULL),
(3, 'Elektronika', NULL),
(4, 'Moda', NULL),
(5, 'Sport i Hobby', NULL),
(6, 'Rowery', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  `ad_id` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2023-06-09 15:15:47'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `ad_id`, `updated_at`, `created_at`) VALUES
(1, '1686331025.jpg', 11, '2023-06-09 15:17:05', '2023-06-09 15:17:05'),
(2, '1686331055.jpg', 12, '2023-06-09 15:17:35', '2023-06-09 15:17:35'),
(3, '1686331055.jpg', 13, '2023-06-09 15:17:35', '2023-06-09 15:17:35'),
(6, '1686333661.jpg', 16, '2023-06-09 16:01:01', '2023-06-09 16:01:01'),
(7, '1686419750.png', 17, '2023-06-10 15:55:50', '2023-06-10 15:55:50'),
(8, '1686421580.jpg', 18, '2023-06-10 16:26:20', '2023-06-10 16:26:20'),
(9, '1686496501.jpg', 19, '2023-06-11 13:15:01', '2023-06-11 13:15:01'),
(10, '1686499840.jpg', 20, '2023-06-11 14:10:40', '2023-06-11 14:10:40'),
(11, '1686499840.jpg', 20, '2023-06-11 14:10:40', '2023-06-11 14:10:40'),
(12, '1686499978.jpg', 21, '2023-06-11 14:12:58', '2023-06-11 14:12:58'),
(13, '1686501681.jpg', 22, '2023-06-11 14:41:21', '2023-06-11 14:41:21'),
(14, '1686505673.png', 24, '2023-06-11 15:47:53', '2023-06-11 15:47:53'),
(15, '1686506475.jpg', 25, '2023-06-11 16:01:15', '2023-06-11 16:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `city`, `province`, `country`) VALUES
(1, 'Warszawa', 'Mazowieckie', 'Polska'),
(2, 'Kraków', 'Małopolskie', 'Polska'),
(3, 'Wrocław', 'Dolnośląskie', 'Polska'),
(4, 'Gniezno', 'Wielkopolskie', 'Polska'),
(5, 'Gliwice', 'Województwo Śląskie', 'Polska'),
(6, 'Glincz', 'Pomorskie', 'Polska'),
(7, 'Gniezno', 'Wielkopolskie', 'Polska'),
(8, 'Gniezno', 'Wielkopolskie', 'Polska'),
(9, 'Gorzów Wielkopolski', 'Lubuskie', 'Polska'),
(10, 'Gorzów Wielkopolski', 'Lubuskie', 'Polska');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `sender_id` bigint(20) NOT NULL,
  `receiver_id` bigint(20) NOT NULL,
  `ad_id` bigint(20) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_06_07_010030_add_location_columns_to_locations', 1),
(2, '2023_06_09_165447_add_updated_at_to_images_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('kubawbl@gmail.com', '$2y$10$3ecaZb0RrFMNQJVnjtatIuxj1RWshVuOMWi/qzjdJtZ1QchkmuA/.', '2023-05-27 13:23:30'),
('lechu12@wp.pl', '$2y$10$xvG4FmAljd4euQ2m4UrFcOXl9lI8O2OyclsD4o8VYetOSrh2oWERC', '2023-06-08 14:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `phone_number` varchar(20) DEFAULT NULL,
  `location` bigint(20) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `provider_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `phone_number`, `location`, `provider`, `provider_id`, `remember_token`, `provider_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test2', 'test2@gmail.com', '2023-06-03 15:11:32', '$2y$10$46Njv0Y5UbOiBGSOCUkRker.Z/suBA2AP21KhGsF2H4UavCVuV8ym', 0, '607014527', NULL, NULL, NULL, 'l8mBs5FuydEYDRr7MAAtxEDLO9DkOFBgmNjmVSW5ZUAxltDgLPJOiQmnnMYC', NULL, '2023-05-27 14:32:45', '2023-06-06 16:42:00'),
(2, 'test3', 'test3', 'test3@gmail.com', '2023-05-27 14:43:10', '$2y$10$jM2HxuWdjg43MHkoIqEJluxY6kwkweGGHjDOUFhTsl70SZUqWRiZy', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-27 14:42:56', '2023-05-27 14:43:10'),
(3, 'faq', 'faq', 'faq@gmail.com', '2023-05-27 14:46:58', '$2y$10$00P0eIE5jQqFKA5RbilEd.wJlOSqfTwNWwrpbjmceggv4Xubzck2.', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-27 14:43:41', '2023-05-27 14:46:58'),
(4, 'test4', 'test4', 'test4@gmail.com', NULL, '$2y$10$c3Jfsx21RKZymNo3Ruv1..JTmIIfKCZpV7Oxor4h0gM5YhYGqYql.', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-28 21:38:42', '2023-05-28 21:38:42'),
(5, 'ChickenZax', 'ChickenZax', 'qwerty@gmail.com', NULL, '$2y$10$YWSjN0bXDzGPC3HU4OZSCOLZDvhJh51X8e3s6MXVYGLjqcLzh2Jjy', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-03 11:27:30', '2023-06-03 11:27:30'),
(6, 'qwertyuio', 'qwertyuiop', 'qqwertyui@wp.pl', NULL, '$2y$10$240jkVseyMUO2PS6LdtQkegciMeGdnXiuCqlUKPHuAfk8s6vphpx6', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-03 11:31:09', '2023-06-03 11:31:09'),
(7, 'Tak nie', 'taknie', 'test@test.com', NULL, '$2y$10$5BjlFj.7ZsYdMoLDu8hxTeMlU3NvLkK8Ff6y26TsjW/h2c/jK/QOG', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-03 11:35:22', '2023-06-03 11:35:22'),
(8, 'Tak nie', 'taknie2', 'test2@test.com', NULL, '$2y$10$AdZvsCi7UnaxZqFIVcNmSOn6dPHsDIWAfL.bApsdeB9QWz7TPtjr2', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-03 11:39:16', '2023-06-03 11:39:16'),
(9, 'Tak nie', 'taknie3', 'test3@test.com', '2023-06-03 12:03:03', '$2y$10$1gkJrWlUEc6iOqWz2kvtF..NPvDUWlGe7I5zDaNrNu5q4yrdfm97G', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-03 11:41:38', '2023-06-03 12:03:03'),
(10, 'elo', 'elo', 'elo@gmail.com', '2023-06-04 16:50:52', '$2y$10$Q1u9DqkQ1pR5lxm2eQPBY.8GFg8SOHQ4o2685jBuD6G.u2Dl06gvq', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-04 16:50:39', '2023-06-04 16:50:52'),
(11, 'admin1', 'admin', 'admin@admin.com', '2023-06-04 16:58:00', '$2y$10$8Wfgwhi2POUjMC3bcTS9b.d2TB0gP2r6bCJUq5AAZOkEf/goYJ5K.', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-04 16:57:52', '2023-06-06 10:57:00'),
(12, 'Kurczak Gdakowski', NULL, 'kurczakoyt@gmail.com', '2023-06-06 07:46:24', '$2y$10$uZLjTkXQ521IC63nkwCcH.82jM14IqVNIrU.56nysxzb6Wt99Xiqe', 0, NULL, NULL, 'google', '116729171824915429716', NULL, 'ya29.a0AWY7CkkQynUPozuBC1ULgqLa_Iu164aV4IqZfJ-YHzshTsb2NOsPzxg77rHEkpVAl5B0DawMPNR1wW0ohfRaWWEaK3-IvBsNeLdCmEaf-Pah4nk6oWav41GJvjyVs4IQV3iC2tvhEsOI1vKx4PDmZIf8hkC2aCgYKARoSARESFQG1tDrpY7YX3XMeI3DrpEtxPuvqgQ0163', '2023-06-06 07:42:55', '2023-06-06 07:46:24'),
(13, 'asd', 'asd', 'asd@asd.com', '2023-06-07 21:56:58', '$2y$10$S5X9jE5UPVyDF8mZh3O6iOQR9A6p87tizCwbBfGJ9LP6tEVzgvhhy', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-07 21:56:32', '2023-06-07 21:56:58'),
(14, 'trans', 'probe', 'prl@prl.com', '2023-06-07 23:20:55', '$2y$10$eMFbgszpENP3KP3U.vNSYuRJYSh3cZTFCy89tNZ9KBytoRl.v3.vS', 0, NULL, NULL, NULL, NULL, 'NRkZH9w7gqKrEmM1yBaqpPhljC8wLlEbIXewckpJVIEC55K24egroRQeZgc4', NULL, '2023-06-07 23:17:31', '2023-06-07 23:20:55'),
(15, 'asdsad', 'asda@asd.com', 'asda@asd.com', NULL, '$2y$10$Aw.ojIFx1ZywmJHmQO4btu2q0QgWvBshncafF0ApoFOGOjcE87M0W', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 01:19:09', '2023-06-08 01:19:09'),
(16, 'Leszek', 'lechu12', 'lechu12@wp.pl', '2023-06-08 14:58:42', '$2y$10$PucySwuePhYUOrEfd6QVmO9ql1zUB6BM0yeZSQSr72NufMpTS.kDi', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 14:58:27', '2023-06-08 14:58:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD KEY `location` (`location`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `ads_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ads_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`location`) REFERENCES `locations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
