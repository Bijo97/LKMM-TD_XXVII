-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 03:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `tanggal`, `gambar`, `judul`, `konten`) VALUES
(2, '2015-08-17', 'hapus06.jpg', 'How to create facebook form login', '<div>Web applications still use the classical wyswig editors. In this Responsive Web Era, everyone looking for responsive wyswig editor, compatible with mobile devices also.</div><div><br></div>'),
(9, '2015-12-22', '4.png', 'WHYSIWYG Web Editor', 'tes ajalah disini'),
(12, '2015-12-23', '10', 'facebook form login', '<p>Who doesnt know facebook ?</p>'),
(13, '2016-12-06', '1', 'Tes Berita 1', '<p>Ini adalah contoh input berita pertama kali, entah benar apa salah.</p><p><br></p><p><img src="data:image/png;base64,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" data-filename="logo_lkmmtd.png" style="width: 108px;"></p><p><br></p><p>Edit : Berhasil!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('stephen', 'stephen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
