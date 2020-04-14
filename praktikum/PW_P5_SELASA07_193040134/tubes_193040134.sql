-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 09:03 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
