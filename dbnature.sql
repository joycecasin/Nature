-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Gegenereerd op: 18 aug 2020 om 14:36
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnature`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

DROP TABLE IF EXISTS `klant`;
CREATE TABLE IF NOT EXISTS `klant` (
  `klantnr` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `voornaam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bedrijf` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefoon` varchar(255) NOT NULL,
  `straat` varchar(255) NOT NULL,
  `nummer` varchar(255) NOT NULL,
  `toevoeging` varchar(255) NOT NULL,
  `postcode_postcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gemeente` varchar(255) NOT NULL,
  PRIMARY KEY (`klantnr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `ordernr` int(11) NOT NULL AUTO_INCREMENT,
  `klant_klantnr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `klant_naam` varchar(255) NOT NULL,
  `product_naam` varchar(255) NOT NULL,
  `totaal_order` varchar(255) NOT NULL,
  PRIMARY KEY (`ordernr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `postcode`
--

DROP TABLE IF EXISTS `postcode`;
CREATE TABLE IF NOT EXISTS `postcode` (
  `postcode` int(11) NOT NULL,
  `gemeente` varchar(255) NOT NULL,
  PRIMARY KEY (`postcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_img` varchar(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `omschrijving` text NOT NULL,
  `serienummer` varchar(255) NOT NULL,
  `prijs` int(10) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `product_img`, `naam`, `omschrijving`, `serienummer`, `prijs`, `filename`, `type`, `size`) VALUES
(1, '', 'Drinkfles', 'Drinkfles 250ml ', '123 456 789', 10, 'drinkfles', 'jpg', 35),
(2, '', 'Koeltas 2.5', '50cm groot', '123 321 457', 20, 'zak.jpeg', 'jpeg', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` enum('admin','klant','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `role`, `voornaam`, `naam`, `username`, `password`) VALUES
(1, 'admin', 'Joyce ', 'Casin', 'joyce', 'test1'),
(2, 'klant', 'Micheline', 'Meyers', 'mm', 'test'),
(4, '', '', '', 'Test10', ''),
(5, '', '', '', 'Test10', ''),
(6, '', '', '', 'Test1', ''),
(10, 'admin', 'Test_add', 'test_add', 'test_add', 'test'),
(11, 'admin', 'Test_add_foto', 'test_add_foto', 'test_add_foto', 'test'),
(12, 'admin', 'Joyce1.0', 'Casin', 'joyce', 'test1'),
(13, 'admin', 'Joyce1.0', 'Casin', 'joyce', 'test1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
