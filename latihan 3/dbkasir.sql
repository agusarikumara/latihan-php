-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2019 pada 18.28
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkasir`
--

CREATE TABLE `tbkasir` (
  `KodeKasir` int(11) NOT NULL,
  `NamaBarang` varchar(50) NOT NULL,
  `Harga` varchar(50) NOT NULL,
  `Jumlah` varchar(50) NOT NULL,
  `TotalHarga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkasir`
--

INSERT INTO `tbkasir` (`KodeKasir`, `NamaBarang`, `Harga`, `Jumlah`, `TotalHarga`) VALUES
(5, 'Aqua', '5000', '1', '50000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbkasir`
--
ALTER TABLE `tbkasir`
  ADD PRIMARY KEY (`KodeKasir`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbkasir`
--
ALTER TABLE `tbkasir`
  MODIFY `KodeKasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
