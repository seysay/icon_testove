-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 11 2019 г., 16:46
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.3.3-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `students`
--

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(30) CHARACTER SET utf8 NOT NULL,
  `groupa` varchar(100) CHARACTER SET utf8 NOT NULL,
  `faculty` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `name`, `surname`, `age`, `sex`, `groupa`, `faculty`) VALUES
(5, 'Ð¡ÐµÑ€Ð³Ñ–Ð¹', 'ÐœÐ°Ñ…Ð½ÑŽÐº', 29, 'Ñ‡Ð¾Ð»Ð¾Ð²Ñ–Ðº', 'ÐŸÑÐ¸Ñ…Ð¾Ð»Ð¾Ð³Ñ–Ñ', 'ÐŸÐ°Ñ€Ð°Ð½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ñ– ÑÐ²Ð¸Ñ‰Ð°'),
(6, 'ÐÐ½Ð°ÑÑ‚Ð°ÑÑ–Ñ', 'ÐœÐ°Ñ…Ð½ÑŽÐº', 25, 'Ð¶Ñ–Ð½Ð¾Ñ‡Ð°', 'Ð£Ð¼Ð½Ñ‹Ñ… Ð¸ Ð½Ð°Ñ…Ð¾Ð´Ñ‡Ð¸Ð²Ñ‹Ñ…', 'ÐŸÐµÐ´Ð°Ð³Ð¾Ð³Ñ–Ñ‡Ð½Ð¾Ñ— Ð¾ÑÐ²Ñ–Ñ‚Ð¸ Ñ‚Ð° ÑÐ¾Ñ†Ñ–Ð°Ð»ÑŒÐ½Ð¾Ñ— Ñ€Ð¾Ð±Ð¾Ñ‚Ð¸'),
(9, 'ÐŸÐµÑ‚Ñ€Ð¾', 'ÐŸÐ¾Ñ€Ð¾ÑˆÐµÐ½ÐºÐ¾', 53, 'Ñ‡Ð¾Ð»Ð¾Ð²Ñ–Ðº', 'ÐŸÐµÑ€ÑˆÐ°', 'ÐµÐºÐ¾Ð½Ð¾Ð¼Ñ–ÑÑ‚-Ð¼Ñ–Ð¶Ð½Ð°Ñ€Ð¾Ð´Ð½Ð¸Ðº');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
