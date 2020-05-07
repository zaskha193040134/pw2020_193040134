-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 11:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040134`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_musik`
--

CREATE TABLE `alat_musik` (
  `id` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sumber_bunyi` varchar(30) NOT NULL,
  `Cara_pakai` varchar(30) NOT NULL,
  `fungsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_musik`
--

INSERT INTO `alat_musik` (`id`, `foto`, `nama`, `sumber_bunyi`, `Cara_pakai`, `fungsi`) VALUES
(1, 'flute.png', 'Flute', 'Aerophone', 'Ditiup', 'Melodis'),
(2, 'gitar.png', 'Gitar', 'Chordophone', 'Dipetik', 'Harmonis'),
(3, 'rebana.png', 'Rebana', 'Membranophone', 'Dipukul', 'Ritmis'),
(4, 'drum.png', 'Drum', 'Membranophone', 'Dipukul', 'Ritmis'),
(5, 'clarinet.png', 'Clarinet', 'Aerophone', 'Ditiup', 'Melodis'),
(6, 'piano.png', 'Piano', 'Chordophone', 'Ditekan', 'Harmonis'),
(7, 'biola.png', 'Biola', 'Chordophone', 'Digesek', 'Melodis'),
(8, 'pianika.png', 'Pianika', 'Aerophone', 'Ditiup, Ditekan', 'Melodis'),
(9, 'harmonica.png', 'Harmonica', 'Aerophone', 'Ditiup', 'Ritmis'),
(10, 'kendang.png', 'Kendang', 'Membranophone', 'Dipukul', 'Ritmis');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'admin', '$2y$10$EzxAOrjgNqvYwCb3QOIFZebQzFv29OLa0qt7SgOGVpF4FbCQm42KG'),
(11, 'zaskha', '$2y$10$YUsiC7sXMHoQlvah/RXZW.26dITCVpILxzuGJCGXcy9SwIhQFQ0eW'),
(21, 'zaskha', '123'),
(22, 'melvin', '345'),
(41, 'sudo', 'asd123'),
(43, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
