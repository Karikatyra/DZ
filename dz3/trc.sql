-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Дек 09 2024 г., 21:41
-- Версия сервера: 5.7.24
-- Версия PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `trc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appeals`
--

CREATE TABLE `appeals` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `tel` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `appeals`
--

INSERT INTO `appeals` (`name`, `email`, `id`, `img`, `tel`, `description`) VALUES
('Максим', 'Maksimka2012@gmail.com', 5, 'stakan.jpg', '79977384291', 'Пролили кофе возле кофейни'),
('Слава', 'SlavikJoskiy@yandex.ru', 6, 'ry4ka.jpg', '79778903212', 'Сломали ручку входа в кабинет на третьем этаже (каб. 312)'),
('Ольга', 'Olgaaaa@mail.ru', 7, 'steklo.jpg', '79167890667', 'Разбили стекло входа в коморку на 1 этаже.');

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `img` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shops`
--

INSERT INTO `shops` (`id`, `img`, `name`, `category`) VALUES
(1, 'ajkraft.jpg', 'АйКрафт', ''),
(2, 'apt.jpg', 'Аптека', ''),
(3, 'chst.jpg', 'Чувство Стиля', 'shops'),
(4, 'djUlia.jpg', 'джЮлия', 'shops'),
(5, 'dns.jpg', 'DNS', 'shops'),
(6, 'domiki.jpg', 'Домики', 'shops'),
(7, 'familiya.png', 'familia', 'shops'),
(8, 'galamart.jpg', 'Галамарт', 'shops'),
(9, 'letual.png', 'Лэтуаль', 'shops'),
(10, 'malina.jpg', 'Малина', 'shops'),
(11, 'mega.jpg', 'Мегафон', 'shops'),
(12, 'mts.jpg', 'МТС', 'shops'),
(13, 'oshop.jpg', 'iShop', 'shops'),
(14, 'tele.jpg', 'tele2', 'shops'),
(15, 'zat.jpg', 'Затея', 'shops'),
(16, 'zolla.jpg', 'Zolla', 'shops'),
(22, 'antalia.png', 'Анталия', 'food'),
(23, 'blin.jpg', 'Три сковородки', 'food'),
(24, 'dodo.jfif', 'Додо пицца', 'food'),
(25, 'hotfixcafe.jpg', 'HotFix', 'food'),
(26, 'ilpatio.jpg', 'ILПатио', 'food'),
(27, 'kfc.jpg', 'KFC', 'food'),
(28, 'mina.jpg', 'Минаки', 'food'),
(29, 'planeta-sushi.jpg', 'Планета Суши', 'food'),
(30, 'por.jpg', 'Перекресток', 'food'),
(31, 'vkusnoitochka.png', 'Вкусно - и точка', 'food');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shops`
--
ALTER TABLE `shops`
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
-- AUTO_INCREMENT для таблицы `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
