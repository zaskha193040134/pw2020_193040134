-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 05.35
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040145`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apparel`
--

CREATE TABLE `apparel` (
  `No` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Merek Pakaian` varchar(100) NOT NULL,
  `Model Pakaian` varchar(100) NOT NULL,
  `Warna Pakaian` varchar(100) NOT NULL,
  `Harga` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `apparel` (`No`, `Foto`, `Merek Pakaian`, `Model Pakaian`, `Warna Pakaian`, `Harga`) VALUES
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
-- Struktur dari tabel `elektronik`
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
-- Struktur dari tabel `mahasiswa`
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
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'avip.jpg', '183040024', 'Avip Syaifull', 'syaifullah.193040024@mail.unpas.ac.id', 'Teknik Informatika'),
(2, 'bakhtiar.jpg', '183040004', 'Bakhtiar', 'bakhtiar.183040004@mail.unpas.ac.id', 'Teknik Informatika'),
(3, 'rizky.jpg', '183040008', 'Rizky Ramadhan', 'ramadhan.183040008@mail.unpas.ac.id', 'Teknik Informatika'),
(4, 'hadi.jpg', '183040035', 'Hadi Sutarma', 'sutarma.183040035@mail.unpas.ac.id', 'Teknik Informatika'),
(5, 'fadhlan.jpg', '183040015', 'Fadhlanrashif Ibrahim Supriana', 'supriana.183040015@mail.unpas.ac.id', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apparel`
--
ALTER TABLE `apparel`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
