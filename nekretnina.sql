-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2024 at 12:35 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nekretnina`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `email`, `lozinka`) VALUES
(1, 'Jovan', 'Timotijevic', 'jovankralj@gmai.com', '$2y$10$pprxm.WCcSSqTtvk0gt6J.N9R/putsKAGpA/ekLRNHoGjOT/qXAaa');

-- --------------------------------------------------------

--
-- Table structure for table `nekretnina`
--

DROP TABLE IF EXISTS `nekretnina`;
CREATE TABLE IF NOT EXISTS `nekretnina` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prodaja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iznajmljivanje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokacija` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nekretnina`
--

INSERT INTO `nekretnina` (`id`, `prodaja`, `iznajmljivanje`, `lokacija`, `opis`, `cena`) VALUES
(1, 'ne', '', 'Mala vaga', 'Iznajmljuje se stan u soliteru na maloj vagi. 60 m2', 200),
(2, 'da', 'ne', 'Bubanj', 'Kuca se prodaje pored gradskog groblja', 112000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
