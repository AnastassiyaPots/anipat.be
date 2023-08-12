-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 12 2023 г., 20:52
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `anipat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `masters`
--

CREATE TABLE `masters` (
  `id` bigint UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `masters`
--

INSERT INTO `masters` (`id`, `img`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '/public/images/masters/Roman.jpg', 'Роман Фомин', 'ТОП-грумер. Опыт работы более 20 лет. Работает со всеми породами собак и кошек. На его счету сотни побед в Best-in шоу на выставках разного уровня, он подготовил более 10 чемпионов мира и Европы.', NULL, NULL),
(2, '/public/images/masters/Mariya.jpg', 'Дания Хасанова ', 'Грумер-универсал. Опыт работы более 5 лет. Работает грумером с 2012 года. Прошла обучение у Романа Фомина. Постоянно совершенствует свой профессионализм.', NULL, NULL),
(3, '/public/images/masters/Katya.jpg', 'Екатерина Кузнецова', 'Грумер-универсал. Персональный помощник Романа Фомина. Опыт работы более 10 лет. Екатерина обожает животных. Владелец трех замечательных собак: малый пудель по кличке Деник и два той пуделя Вива и Вилли.', NULL, NULL),
(6, '/public/images/masters/Sergei.jpg', 'Сергей Бобров', 'Профессиональный диетолог в области домашних животных. Опыт работы более 15 лет. Индивидуальных подход к каждому мохнатому посетителю. ', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `master_service`
--

CREATE TABLE `master_service` (
  `id` bigint UNSIGNED NOT NULL,
  `master_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `master_service`
--

INSERT INTO `master_service` (`id`, `master_id`, `service_id`, `price`, `created_at`, `updated_at`) VALUES
(11, 6, 6, 10000, NULL, NULL),
(12, 1, 1, 17000, NULL, NULL),
(14, 1, 2, 18000, NULL, NULL),
(15, 2, 1, 15000, NULL, NULL),
(16, 2, 2, 16000, NULL, NULL),
(17, 3, 1, 12000, NULL, NULL),
(18, 3, 2, 13000, NULL, NULL),
(19, 2, 3, 8000, NULL, NULL),
(20, 3, 3, 7000, NULL, NULL),
(21, 2, 4, 5000, NULL, NULL),
(22, 3, 4, 5500, NULL, NULL),
(23, 1, 5, 9500, NULL, NULL),
(24, 3, 5, 8500, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_08_02_100153_edit_users_table', 2),
(17, '2023_08_02_110226_create_services_table', 3),
(18, '2023_08_02_111421_create_masters_table', 4),
(19, '2023_08_04_184415_create_master_services_table', 5),
(20, '2023_08_04_190147_create_registers_table', 6),
(21, '2023_08_07_062516_change_hour_type_in_registers_table', 7),
(22, '2023_08_08_074300_edit_masters_table', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `registers`
--

CREATE TABLE `registers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `master_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `registers`
--

INSERT INTO `registers` (`id`, `user_id`, `master_id`, `service_id`, `date`, `hour`, `created_at`, `updated_at`) VALUES
(2, 3, 3, 5, '2023-08-22', '11:00', '2023-08-07 03:27:03', '2023-08-07 03:27:03'),
(3, 3, 1, 1, '2023-08-22', '11:00', '2023-08-07 03:37:24', '2023-08-07 03:37:24'),
(4, 3, 1, 1, '2023-09-28', '18:00', '2023-08-07 03:49:05', '2023-08-07 03:49:05'),
(5, 3, 2, 6, '2023-08-17', '13:00', '2023-08-07 03:49:51', '2023-08-07 03:49:51'),
(6, 3, 2, 3, '2023-08-19', '14:00', '2023-08-07 03:50:57', '2023-08-07 03:50:57'),
(7, 3, 3, 5, '2023-08-15', '17:00', '2023-08-07 03:51:40', '2023-08-07 03:51:40'),
(8, 3, 1, 1, '2023-08-09', '17:00', '2023-08-08 07:53:27', '2023-08-08 07:53:27'),
(9, 3, 3, 3, '2023-08-10', '18:00', '2023-08-08 07:57:16', '2023-08-08 07:57:16'),
(10, 3, 3, 4, '2023-08-11', '10:00', '2023-08-08 07:58:18', '2023-08-08 07:58:18'),
(11, 3, 2, 4, '2023-08-25', '17:00', '2023-08-08 07:58:48', '2023-08-08 07:58:48'),
(12, 3, 6, 6, '2023-08-24', '18:00', '2023-08-08 08:00:04', '2023-08-08 08:00:04'),
(13, 3, 2, 3, '2023-08-16', '11:00', '2023-08-08 08:29:49', '2023-08-08 08:29:49'),
(14, 4, 3, 5, '2023-08-16', '12:00', '2023-08-08 11:04:23', '2023-08-08 11:04:23'),
(15, 6, 1, 1, '2023-09-11', '15:00', '2023-08-12 14:05:13', '2023-08-12 14:05:13'),
(16, 6, 2, 1, '2023-08-25', '15:00', '2023-08-12 14:37:22', '2023-08-12 14:37:22'),
(17, 6, 1, 1, '2023-08-14', '11:00', '2023-08-12 14:39:39', '2023-08-12 14:39:39'),
(18, 6, 2, 1, '2023-08-28', '15:00', '2023-08-12 14:42:11', '2023-08-12 14:42:11');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `img`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '/public/images/services/wash.jpg', 'Мытье и стрижка шерсти', 'Услуга направлена на поддержание чистоты и ухоженности питомца. В процессе мытья пухового покрова используются специальные шампуни и кондиционеры, чтобы деликатно очистить шерсть, избавить ее от грязи, пыли и неприятных запахов. После этого производится стрижка шерсти согласно стандартам породы или в соответствии с пожеланиями владельца. ', NULL, NULL),
(2, '/public/images/services/haircut.jpg', 'Груминг и укладка для собак и кошек', 'Комплексная услуга, которая включает в себя разнообразные процедуры по уходу за внешним видом и самочувствием домашних животных. Во время груминга производится мойка, чистка ушей и глаз, стрижка когтей, а также удаление лишней шерсти. Питомцы также могут получить специальные спа-процедуры, массаж, и оздоровительные процедуры для кожи и шерсти. ', NULL, NULL),
(3, '/public/images/services/ear_bathing.jpg', 'Купание и чистка ушей', 'Во время купания питомец моется с использованием специальных шампуней и кондиционеров, которые очищают шерсть от грязи, пыли и неприятных запахов. Профессиональный грумер аккуратно очищает уши от серы и грязи, используя специальные средства и инструменты. Это помогает предотвращать возникновение инфекций и других проблем, связанных с ушами питомца.', NULL, NULL),
(4, '/public/images/services/claws.jpg', 'Стрижка когтей и обработка лапок', 'Во время стрижки когтей грумер аккуратно обрезает лишние части когтей, чтобы предотвратить их перерост и избежать проблем с ходьбой или повреждениями лап.\r\nОбработка лапок включает очищение подушечек и пространства между когтями. При необходимости могут применяться специальные средства для смягчения кожи и предотвращения сухости или трещин.', NULL, NULL),
(5, '/public/images/services/teeth.jpg', 'Очистка зубов и полостей рта', 'Процедура включает в себя удаление зубного налета, зубного камня и других отложений с поверхности зубов и десен.\r\nГрумеры используют специальные инструменты и зубные щетки, а также безопасные чистящие средства. Это позволяет предотвратить развитие зубных проблем, таких как зубной камень и пародонтит.', NULL, NULL),
(6, '/public/images/services/feed.jpg', 'Консультация по уходу и кормлению', 'Консультация ведется опытными сотрудниками. Во время консультации, опытные специалисты в области ухода за животными делятся ценной информацией и советами относительно оптимального рациона кормления, питания, режима и требований по уходу за конкретным видом, породой или состоянием здоровья питомца.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
(5, 'Вася1', '456@mail.ru', NULL, '$2y$10$qXy0DdJh4uHRahh6AvZkFOD.AgcbLu394edWYyo71.5YzxacX1m1O', NULL, 0, '2023-08-11 12:57:54', '2023-08-12 14:16:19'),
(6, 'admin', 'admin@mail.ru', NULL, '$2y$10$wFHWcrbfOK.4/6nHPExmKO3cYcRZBVHNit98R87Bb2g8yP4z04BEe', NULL, 1, '2023-08-12 01:07:36', '2023-08-12 01:07:36');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `master_service`
--
ALTER TABLE `master_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_services_master_id_foreign` (`master_id`),
  ADD KEY `master_services_service_id_foreign` (`service_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `masters`
--
ALTER TABLE `masters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `master_service`
--
ALTER TABLE `master_service`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `master_service`
--
ALTER TABLE `master_service`
  ADD CONSTRAINT `master_services_master_id_foreign` FOREIGN KEY (`master_id`) REFERENCES `masters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `master_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
