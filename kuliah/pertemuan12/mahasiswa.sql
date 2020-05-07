-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 09:11 PM
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
-- Database: `pw_193040134`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'zaskha.png', '193040134', 'Zaskha Sasmita', '193040134.zaskha@mail.unpas.ac.id', 'Teknik Informatika'),
(2, 'ahmad.png', '193040123', 'Fakhri Ahmad Syaiful Rahman', '193040123.fakhri@mail.unpas.ac.id', 'Teknik Informatika'),
(3, 'irfa.png', '193040120', 'Irfa\'u Darajat', '193040120.irfau@mail.unpas.ac.id', 'Teknik Informatika'),
(4, 'arai.png', '193040140', 'Aria Rupawansyah', '193040140.aria@mail.unpas.ac.id', 'Teknik Informatika'),
(5, 'zhafir.png', '193040135', 'Muhammad Zhafir', '193040135.zhafir@mail.unpas.ac.id', 'Teknik Informatika'),
(6, 'diva.png', '193040126', 'Diva Amwal Maulana', '193040126.diva@mail.unpas.ac.id', 'Teknik Informatika'),
(13, 'chandra.png', '193040133', 'Chandra Liaw', 'maximus.pascal2208@protonmail.com', 'iuyghjk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
