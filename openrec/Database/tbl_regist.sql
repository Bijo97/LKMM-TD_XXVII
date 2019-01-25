-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2017 at 07:00 PM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lkmmtd_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regist`
--

CREATE TABLE IF NOT EXISTS `tbl_regist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NamaLengkap` varchar(30) NOT NULL,
  `nrp` int(11) NOT NULL,
  `JenisKelamin` varchar(8) NOT NULL,
  `AlamatTinggal` varchar(30) NOT NULL,
  `TTL` varchar(20) NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL,
  `IDLine` varchar(15) NOT NULL,
  `IPKTerakhir` varchar(7) NOT NULL,
  `Motivasi` text NOT NULL,
  `Kelebihan` text NOT NULL,
  `Kekurangan` text NOT NULL,
  `EXP` text NOT NULL,
  `Prioritas1` varchar(15) NOT NULL,
  `Prioritas2` varchar(15) NOT NULL,
  `Komitmen` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
