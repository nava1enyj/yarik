-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 19 2022 г., 14:46
-- Версия сервера: 8.0.29-0ubuntu0.20.04.3
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yarik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reserve`
--

CREATE TABLE `reserve` (
  `id` int NOT NULL,
  `id_time` int NOT NULL,
  `id_stol` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reserve`
--

INSERT INTO `reserve` (`id`, `id_time`, `id_stol`, `name`, `phone`, `date`) VALUES
(24, 5, 4, 'Erin Ballard', '+1 (955) 687-8171', '2022-06-19'),
(25, 4, 4, 'Nola Church', '+1 (936) 521-6113', '2022-06-19'),
(26, 5, 5, 'Valentine Albert', '(324) 838 - 1612', '2022-06-20'),
(27, 4, 5, 'Yasir Castillo', '+1 (999) 858-6646', '2022-06-20'),
(28, 3, 5, 'Faith Ortiz', '+1 (878) 733-9738', '2022-06-20');

-- --------------------------------------------------------

--
-- Структура таблицы `stol`
--

CREATE TABLE `stol` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `stol`
--

INSERT INTO `stol` (`id`, `name`) VALUES
(1, 'стол 1'),
(2, 'стол 2'),
(3, 'стол 3'),
(4, 'стол 4'),
(5, 'стол 5');

-- --------------------------------------------------------

--
-- Структура таблицы `time`
--

CREATE TABLE `time` (
  `id` int NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `time`
--

INSERT INTO `time` (`id`, `value`) VALUES
(1, '9:00'),
(2, '11:00'),
(3, '13:00'),
(4, '15:00'),
(5, '17:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_time` (`id_time`),
  ADD KEY `id_stol` (`id_stol`);

--
-- Индексы таблицы `stol`
--
ALTER TABLE `stol`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `stol`
--
ALTER TABLE `stol`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `time`
--
ALTER TABLE `time`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`id_time`) REFERENCES `time` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `reserve_ibfk_2` FOREIGN KEY (`id_stol`) REFERENCES `stol` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
