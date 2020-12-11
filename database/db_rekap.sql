-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2016 at 10:27 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rekap`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `db_mahasiswa` (
`id` INT(11) NOT NULL,
  `nim` VARCHAR(50) NOT NULL,
  `nama` VARCHAR(500) NOT NULL,
  `ttl` VARCHAR(500) DEFAULT NULL,
  `alamat` VARCHAR(500) DEFAULT NULL,
  `angkatan` INT(11) NOT NULL,
  `jurusan` VARCHAR(50) NOT NULL,
  `semester` INT(11) NOT NULL,
  `dg` INT(11) DEFAULT NULL,
  `web` INT(11) DEFAULT NULL,
  `appl` INT(11) DEFAULT NULL,
  `jarkom` INT(11) DEFAULT NULL,
  `statistika` INT(11) DEFAULT NULL,
  `basisdata` INT(11) DEFAULT NULL
) ENGINE=INNODB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_mahasiswa`
--

INSERT INTO `db_mahasiswa` (`id`, `nim`, `nama`, `ttl`, `alamat`, `angkatan`, `jurusan`, `semester`, `dg`, `web`, `appl`, `jarkom`, `statistika`, `basisdata`) VALUES
(1, '17312239', 'fauzan andi', 'natar 26 november 1998', 'Bandar Lampung', 2017, 'Informatika', 90, 87, 100, 100, 100, 100, 90),

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE IF NOT EXISTS `db_user` (
`id` INT(11) NOT NULL,
  `username` VARCHAR(20) DEFAULT NULL,
  `password` VARCHAR(20) DEFAULT NULL
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'fauzanandidarmawan', 'fauzan'),
(3, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_mahasiswa`
--
ALTER TABLE `db_mahasiswa`
 ADD PRIMARY KEY (`nim`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_mahasiswa`
--
ALTER TABLE `db_mahasiswa`
MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
