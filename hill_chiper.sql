-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2023 pada 01.14
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hill_chiper`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_nama_nasabah`
--

CREATE TABLE `data_nama_nasabah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `key` text NOT NULL,
  `mode` varchar(10) NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_nama_nasabah`
--

INSERT INTO `data_nama_nasabah` (`id`, `nama`, `key`, `mode`, `hasil`) VALUES
(1, 'ALWI', '[[2, 1], [3, 4]]', 'encrypt', 'LSAU'),
(2, 'LSAU', '[[2, 1], [3, 4]]', 'decrypt', 'ALWI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_nama_nasabah`
--
ALTER TABLE `data_nama_nasabah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_nama_nasabah`
--
ALTER TABLE `data_nama_nasabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
