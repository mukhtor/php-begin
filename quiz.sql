-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 03 2019 г., 16:52
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quiz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `variant_a` varchar(100) DEFAULT NULL,
  `variant_b` varchar(100) DEFAULT NULL,
  `variant_c` varchar(100) DEFAULT NULL,
  `answer` varchar(1) DEFAULT NULL,
  `creat_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `title`, `variant_a`, `variant_b`, `variant_c`, `answer`, `creat_date`) VALUES
(1, 'qaysi qush ucha olmaydi', 'qalibri', 'pingvin', 'chumchuq', 'b', '2019-03-02 10:51:00'),
(2, 'eng birinchi oyga uchgan kosmanavt', 'yuri nikulin', 'yuri andrev', 'yuri gagarin', 'c', '2019-03-02 10:53:00'),
(3, 'qaysi odam filni qoliga oladi', 'qirol', 'prizident', 'shaxmatchi', 'c', '2019-03-02 11:06:00'),
(4, 'qaysi hayvonning ustidan nafaqat odamlar balki mashinalar ham yuradi', 'ilon', 'chayon', 'zebra', 'c', '2019-03-02 11:09:00'),
(5, 'nimasiz hechnima bolmaydi', 'kiyimsiz', 'nomsiz', 'pulsiz', 'b', '2019-03-02 11:13:00'),
(6, 'osmondagi bolalar filmini rejissiori kim', 'zulfqor musoqov', 'sanjar pardayev', 'jovlon shodmonov', 'a', '2019-03-02 11:20:00'),
(7, 'milliy madhiyamiz muallifi kim', 'mutal burxonov', 'abdulla oripov', 'sherali jorayev', 'b', '2019-03-02 11:44:00'),
(8, 'chaqasan qoshigining asoschisi kim', 'bojalar', 'ozodbek nazarbekov', 'johongir otajonov', 'c', '2019-03-02 11:51:00'),
(9, 'eng katta dengiz hayvoni', 'aqula', 'kasatka', 'kit', 'c', '2019-03-02 12:25:00'),
(10, 'dasturlash tillarini otasi qaysi', 'c', 'php', 'java', 'a', '2019-03-02 12:28:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `creat_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `creat_date`) VALUES
(1, 'muxtorjon', 'pifagor7230', '2019-03-02 12:30:00'),
(2, 'islom', 'ilxom6107', '2019-03-02 12:32:00'),
(3, 'rashid', 'reshford6266', '2019-03-02 12:34:00'),
(4, 'sarvar', 'server3306', '2019-03-02 12:36:00'),
(5, 'sanjar', 'abdullajon', '2019-03-02 12:38:00'),
(6, 'dedpol', 'valavala', '2019-03-02 12:40:00'),
(7, 'muxammad', 'saqqol', '2019-03-02 12:41:00'),
(8, 'xilola', 'xilush', '2019-03-02 12:42:00'),
(9, 'dilnoza', 'dilush', '2019-03-02 12:45:00'),
(10, 'anaxon', 'onash', '2019-03-02 12:48:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
