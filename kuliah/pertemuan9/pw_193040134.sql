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
-- Database: `pw_193040134`
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
-- Table structure for table `apparel`
--

CREATE TABLE `apparel` (
  `id` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Merek Pakaian` varchar(100) NOT NULL,
  `Model Pakaian` varchar(100) NOT NULL,
  `Warna Pakaian` varchar(100) NOT NULL,
  `Harga` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apparel`
--

INSERT INTO `apparel` (`id`, `Foto`, `Merek Pakaian`, `Model Pakaian`, `Warna Pakaian`, `Harga`) VALUES
(1, '1.jpg', 'Cardinal', 'Pakaian Pria dewasa', 'Hitam dan Putih', 'Rp. 135.000'),
(2, '2.jpg', 'Neil Allyn', 'Pakaian Pria dewasa', 'Putih', 'Rp 1.208.000'),
(3, '3.jpg', 'Zara clothing', 'Pakaian Wanita(Cape Colar)', 'Coklat', 'Rp 2.350.000'),
(4, '4.jpg', 'Burberry', 'Middy Collar', 'Kuning', 'Rp 900.000'),
(5, '5.jpg', 'Armani', 'Kaos Wanita', 'Putih', 'Rp 230.000'),
(6, '6.jpg', 'Gucci', 'Hoodie Peria/Wanita', 'Hitam', 'Rp 809.000'),
(7, '7.jpg', 'Dior', 'Dresses Wanita', 'Biru Tua', 'Rp 1.305.000'),
(8, '9.jpg', 'Louis Vuitton', 'Jeans Wanita', 'Biru Pudar', 'Rp 374.950'),
(9, '8.jpg', 'levis', 'Celana Pria', 'Coklat Gelap', 'Rp 203,000'),
(10, '10.jpg', 'UniqLo', 'Kaos Pria/Wanita', 'Putih', 'Rp 500.000');

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `No` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Merek Peralatan Elektronik` varchar(100) NOT NULL,
  `Tipe/Model barang` varchar(100) NOT NULL,
  `Tahun Rilis` varchar(100) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'avip.jpg', '183040024', 'Avip Syaifull', 'syaifullah.193040024@mail.unpas.ac.id', 'Teknik Informatika'),
(2, 'bakhtiar.jpg', '183040004', 'Bakhtiar', 'bakhtiar.183040004@mail.unpas.ac.id', 'Teknik Informatika'),
(3, 'rizky.jpg', '183040008', 'Rizky Ramadhan', 'ramadhan.183040008@mail.unpas.ac.id', 'Teknik Informatika'),
(4, 'hadi.jpg', '183040035', 'Hadi Sutarma', 'sutarma.183040035@mail.unpas.ac.id', 'Teknik Informatika'),
(5, 'fadhlan.jpg', '183040015', 'Fadhlanrashif Ibrahim Supriana', 'supriana.183040015@mail.unpas.ac.id', 'Teknik Informatika');

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
(5, 'admin', 'admin'),
(11, 'zaskha', 'zaskha'),
(14, 'sudo', '$2y$10$hrpqkraZEo8Pq.XTfCv6VO6.CF44YxLDmqLm1gVYNEn24DyYT96mi'),
(15, 'pw', '$2y$10$oLcIKS/oODVtRdJHu7XXX.u3YrRQOyy9wG9OZPeY8PDph8rLwV3Vi'),
(16, 'pw', '$2y$10$ldpqjwzXF4C73IRCzP3g2uOGeSYoaclx5Cz.fRky3w2P..Ka7NIe6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
