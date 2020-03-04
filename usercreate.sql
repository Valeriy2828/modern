-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 04 2020 г., 17:42
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `usercreate`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `addresses`
--

INSERT INTO `addresses` (`id`, `client_id`, `city`, `postcode`, `region`, `street`, `created_at`, `updated_at`) VALUES
(3, 5, 'Харьков', 545445656, 'Харьковская', 'Пушкина', '2020-03-03 09:59:12', '2020-03-03 09:59:12'),
(4, 5, 'Харьков', 454556, 'Харьковская', 'Власенко', '2020-03-03 10:00:40', '2020-03-03 10:00:40'),
(5, 4, 'Харьков', 34343488, 'Харьковская', 'Героев труда', '2020-03-03 10:03:24', '2020-03-03 10:03:24'),
(6, 3, 'Харьков', 34343434, 'Харьковская', 'Светлая', '2020-03-03 11:21:11', '2020-03-03 11:21:11'),
(7, 22, 'Харьков', 34343434, 'Харьковская', 'Садовая', '2020-03-03 14:01:52', '2020-03-03 14:01:52'),
(8, 9, 'Харьков', 34343488, 'Харьковская', 'Героев Сталинграда', '2020-03-03 14:02:44', '2020-03-03 14:02:44'),
(9, 9, 'Киев', 45455678, 'Киевский', 'Бандеры', '2020-03-03 14:03:20', '2020-03-03 14:03:20'),
(10, 21, 'Харьков', 454556784, 'Харьковская', 'Амосова', '2020-03-03 14:03:55', '2020-03-03 14:03:55'),
(11, 21, 'Киев', 45455609, 'Киевский', 'Мира', '2020-03-03 14:04:27', '2020-03-03 14:04:27'),
(12, 22, 'Киев', 34343488, 'Киевская', 'Пушкина', '2020-03-03 14:04:57', '2020-03-03 14:04:57'),
(14, 4, 'Харьков', 34343488, 'Харьковская', 'Стуса', '2020-03-03 14:14:11', '2020-03-03 14:14:11');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_type` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `email`, `client_type`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Павел', 'Макентош', 'Mmm@gmail.com', 0, '22222222', '2020-03-01 22:41:56', '2020-03-01 22:41:56'),
(4, 'Алексей', 'Волк', 'Volk@gmail.com', 0, '777777777', '2020-03-01 22:53:47', '2020-03-01 22:53:47'),
(5, 'Алексей', 'Петров', 'petr@gmail.com', 0, '777777777', '2020-03-01 23:02:49', '2020-03-01 23:02:49'),
(9, 'Иван', 'Сидурак', 'Si@gmail.com', 0, '$2y$10$L8n3wv18EGQgDjHIXXyEq.ilVpczyRBU6LwUmbBtRy5WkO/t5N/de', '2020-03-01 23:26:57', '2020-03-01 23:26:57'),
(21, 'Вася', 'Нежный', 'Ni1@gmail.com', 1, '$2y$10$MeUyUIcLeoWgbOeRPOhmzO0FwILyUkr9gG77dGhsBzCDIcB8VFiBW', '2020-03-03 09:31:17', '2020-03-03 09:31:17'),
(22, 'Святогор', 'Великий', 'Svi1@gmail.com', 0, '$2y$10$h1BT8AUSXcBPswLLO/VE9.gZ91ATRx5TzRGpVf8ns5y9Vf9MYJqYu', '2020-03-03 11:13:50', '2020-03-03 11:13:50'),
(23, 'Гарик', 'Боров', 'Bi1@gmail.com', 0, '$2y$10$8/qS38ikAMPfJ0hcsrzZu.DVTcBH87n./s2hXyAGwf6DB/ANVJB2.', '2020-03-03 11:21:54', '2020-03-03 11:21:54');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_01_123347_create_clients_table', 2),
(4, '2020_03_01_123528_create_addresses_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
