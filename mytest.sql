-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 05 2016 г., 15:27
-- Версия сервера: 5.6.26-log
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mytest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `general`
--

CREATE TABLE IF NOT EXISTS `general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parametr` varchar(255) NOT NULL,
  `rus_par` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `general`
--

INSERT INTO `general` (`id`, `parametr`, `rus_par`, `value`) VALUES
(1, 'mail', 'Почта', 'info@butovo-okna.ru'),
(2, 'tel', 'Телефон', '+7 (495) 123-79-97'),
(3, 'sitename', 'Название сайта', '<span class="blue-title-logo">НАЗВАНИЕ</span> КОМПАНИИ'),
(4, 'adress', 'Адрес', 'г. Москва, ул. Московская д 125, офис 32');

-- --------------------------------------------------------

--
-- Структура таблицы `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `position` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `navigation`
--

INSERT INTO `navigation` (`id`, `title`, `controller`, `position`) VALUES
(1, 'Пластиковые окна', 'catalog', 1),
(2, 'Контакты', 'contact', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `position` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `img`, `title`, `description`, `position`) VALUES
(1, '1.jpg', 'Первый слайд', 'Небольшое описание специального предложения, которое находится в слайдере, возможно это будет акция!', 1),
(2, '1.jpg', 'Второй слайд', 'Небольшое описание специального предложения, которое находится в слайдере, возможно это будет акция!', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `passwd`, `date`, `name`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2016-11-26 00:00:00', 'Виктор');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
