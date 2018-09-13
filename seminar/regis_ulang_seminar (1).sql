-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 10:59 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regis_ulang_seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `fest_peserta`
--

CREATE TABLE IF NOT EXISTS `fest_peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `semester` int(10) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `invoice` varchar(50) DEFAULT NULL,
  `status` enum('mahasiswa','umum') DEFAULT 'mahasiswa',
  `is_regis_ulang` enum('y','n') DEFAULT 'n',
  `ots` enum('n','y') DEFAULT 'n'
) ENGINE=InnoDB AUTO_INCREMENT=353 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fest_user`
--

CREATE TABLE IF NOT EXISTS `fest_user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fest_user`
--

INSERT INTO `fest_user` (`id`, `username`, `password`) VALUES
(1, 'semangat28', 'c33e9581aac4b8c2ebdcd460bda9655c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fest_peserta`
--
ALTER TABLE `fest_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fest_user`
--
ALTER TABLE `fest_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fest_peserta`
--
ALTER TABLE `fest_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=353;
--
-- AUTO_INCREMENT for table `fest_user`
--
ALTER TABLE `fest_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
