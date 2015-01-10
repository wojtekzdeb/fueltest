-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 10 Sty 2015, 22:04
-- Wersja serwera: 5.5.40
-- Wersja PHP: 5.5.19-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `fueltest`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `currency_from` varchar(3) NOT NULL,
  `currency_to` varchar(3) NOT NULL,
  `rate` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Zrzut danych tabeli `logs`
--

INSERT INTO `logs` (`id`, `date`, `currency_from`, `currency_to`, `rate`) VALUES
(1, '2015-01-09 00:00:00', 'RUB', 'PLN', 32),
(2, '2015-01-10 20:49:02', 'PLN', 'RUB', 17.2019),
(3, '2015-01-10 20:51:17', 'PLN', 'RUB', 17.2019),
(4, '2015-01-10 20:51:20', 'PLN', 'RUB', 17.2019),
(5, '2015-01-10 20:59:48', 'PLN', 'RUB', 17.2019),
(6, '2015-01-10 21:13:55', 'PLN', 'USD', 0.277506),
(7, '2015-01-10 21:28:27', 'PLN', 'EUR', 0.23434),
(8, '2015-01-10 21:28:34', 'EUR', 'PLN', 4.2673),
(9, '2015-01-10 21:30:56', 'RUB', 'EUR', 0.0136229),
(10, '2015-01-10 21:31:01', 'EUR', 'RUB', 73.4058),
(11, '2015-01-10 21:38:45', 'RUB', 'UAH', 0.254067);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
