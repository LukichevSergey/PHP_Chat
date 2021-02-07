-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 07 2021 г., 14:58
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `author` text NOT NULL,
  `summary` text NOT NULL,
  `full` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `heading`, `author`, `summary`, `full`) VALUES
(1, 'Заголовок сообщения 1', 'Автор сообщения 1', 'Краткое содержание сообщения 1', 'Полное содержание сообщения 1'),
(2, 'Заголовок сообщения 2', 'Автор сообщения 2', 'Краткое содержание сообщения 2', 'Полное содержание сообщения 2'),
(3, 'Заголовок сообщения 3', 'Автор сообщения 3', 'Краткое содержание сообщения 3', 'Полное содержание сообщения 3'),
(4, 'Заголовок сообщения 4', 'Автор сообщения 4', 'Краткое содержание сообщения 4', 'Полное содержание сообщения 4'),
(5, 'Заголовок сообщения 5', 'Автор сообщения 5', 'Краткое содержание сообщения 5', 'Полное содержание сообщения 5');

-- --------------------------------------------------------

--
-- Структура таблицы `chat_comments`
--

CREATE TABLE `chat_comments` (
  `id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat_comments`
--

INSERT INTO `chat_comments` (`id`, `message_id`, `comment`) VALUES
(1, 1, 'Комментарий 1 к сообщению 1'),
(2, 1, 'Комментарий 2 к сообщению 1'),
(3, 2, 'Комментарий 1 к сообщению 2'),
(4, 2, 'Комментарий 2 к сообщению 2'),
(5, 1, 'Комментарий 3 к сообщению 1'),
(6, 1, 'Комментарий 4 к сообщению 1'),
(7, 1, 'Комментарий 5 к сообщению 1'),
(8, 1, 'Комментарий 6 к сообщению 1'),
(9, 2, 'Комментарий 3 к сообщению 2'),
(10, 3, 'Комментарий 1 к сообщению 3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat_comments`
--
ALTER TABLE `chat_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `chat_comments`
--
ALTER TABLE `chat_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
