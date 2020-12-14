-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2020 pada 16.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapembeli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapembeli`
--

CREATE TABLE `datapembeli` (
  `id` int(11) NOT NULL,
  `nama` text CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(5) NOT NULL,
  `keluhan` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapembeli`
--

INSERT INTO `datapembeli` (`id`, `nama`, `email`, `tanggal_lahir`, `umur`, `keluhan`) VALUES
(1, 'ilham abdillah', 'ilham@yahoo.com', '2020-12-31', 24, 'ingin sispax '),
(2, 'andini khairunnisa', 'andinikhairunnisa49@gmail.com', '2020-12-16', 21, 'ingin kurus'),
(3, 'aninda khairunnisa', 'aninda12@yahoo.co.id', '2020-12-06', 40, 'ingin mengecilkan paha');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapembeli`
--
ALTER TABLE `datapembeli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapembeli`
--
ALTER TABLE `datapembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
