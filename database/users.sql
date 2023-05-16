-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 16, 2023 at 04:43 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

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
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `provider`, `provider_id`, `remember_token`, `provider_token`, `created_at`, `updated_at`) VALUES
(13, 'Kubawbl1', NULL, 'kubawbl@gmail.com', NULL, NULL, 'google', '109607165717092958360', NULL, 'ya29.a0AWY7CkkKXxDoqpJ631Py16f9drhtZuXgJXPF6rIOy2fAYpNSojF4q2R9P9mHJFpY1U1jHbTVdemoVKhkYQmdMIa6z-jzyNkTekCfl-oxU6nEorJMe9LLnFeMyQowMSMEM-lbk6jUHTEHn6_xtu2_1y0N9TLkaCgYKARgSARMSFQG1tDrp6PWmCmVUEgY9fBLloqVGSg0163', '2023-05-15 12:55:28', '2023-05-16 11:43:27'),
(14, 'Jakub Wróbel', NULL, 'wrobel.jakub01@gmail.com', NULL, NULL, 'google', '117601906804964362669', NULL, 'ya29.a0AWY7Ckn39d8QC1r4z8imWBSv_RioIFBItGiEygz9DLK1hpGWCOCUeZtS7rktqTOOIt6TDvV1jGh8Kf9RAsEIY__JIUj7WK9v8F6yab8acn9V8DdAac1mMQKhpMveZDh6azxqSLvWvyXe3HUjcK-H7km7PJRKaCgYKATMSARISFQG1tDrpctgbhF79T5jtKJxqmncBLw0163', '2023-05-15 13:01:14', '2023-05-15 16:51:21'),
(19, 'Jakub', 'wbl121', 'jakuwadb@gmail.com', NULL, '$2y$10$zZ54/HWk4d1WbqCM15E7p.q39SSm.A2ZCYGUavfoOK3Ct4UvjFEGe', NULL, NULL, NULL, NULL, '2023-05-16 11:45:55', '2023-05-16 11:50:19'),
(20, 'Jakub12', 'kubawbl123', 'k71a@gmail.com', NULL, '$2y$10$vC2VisYx.Ke2GBFRH5BRNehYqZ93pRFNDENMh8C8QXrG4IihrnS.G', NULL, NULL, NULL, NULL, '2023-05-16 11:55:07', '2023-05-16 12:32:08');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
