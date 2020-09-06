-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 05:40 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scafol`
--

-- --------------------------------------------------------

--
-- Table structure for table `scafol_tabel`
--

CREATE TABLE `scafol_tabel` (
  `id_dokumen` int(5) NOT NULL,
  `pengupload` enum('hardi','','','') NOT NULL,
  `tanggal` date NOT NULL,
  `nama_dokumen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scafol_tabel`
--

INSERT INTO `scafol_tabel` (`id_dokumen`, `pengupload`, `tanggal`, `nama_dokumen`) VALUES
(110, 'hardi', '2020-09-06', 'CURRICULUM_VITAE_-_HARDI.pdf'),
(111, 'hardi', '2020-09-06', 'foto.jpg'),
(112, 'hardi', '2020-09-06', 'fc_ktm.JPG'),
(113, 'hardi', '2020-09-06', 'Hardi_Saputra.bmp'),
(114, 'hardi', '2020-09-06', 'foto1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scafol_tabel`
--
ALTER TABLE `scafol_tabel`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scafol_tabel`
--
ALTER TABLE `scafol_tabel`
  MODIFY `id_dokumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
