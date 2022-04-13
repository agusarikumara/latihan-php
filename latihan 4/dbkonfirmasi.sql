-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2019 pada 07.50
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
-- Database: `dbkonfirmasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkonfirmasi`
--

CREATE TABLE `tbkonfirmasi` (
  `KodeKonfirmasi` int(11) NOT NULL,
  `NoTransaksi` varchar(20) NOT NULL,
  `JenisTransaksi` varchar(20) NOT NULL,
  `NoRekBank` varchar(50) NOT NULL,
  `AtasNama` varchar(50) NOT NULL,
  `JumlahTransfer` varchar(50) NOT NULL,
  `TglTransfer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkonfirmasi`
--

INSERT INTO `tbkonfirmasi` (`KodeKonfirmasi`, `NoTransaksi`, `JenisTransaksi`, `NoRekBank`, `AtasNama`, `JumlahTransfer`, `TglTransfer`) VALUES
(1, '201906ABC', 'Transfer', '1234567890', 'Agus Bagus', '222222', '2019-06-19'),
(3, '201906ABC', 'Transfer', '222222', 'Agus Bagus', '1111111', '2019-06-21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbkonfirmasi`
--
ALTER TABLE `tbkonfirmasi`
  ADD PRIMARY KEY (`KodeKonfirmasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbkonfirmasi`
--
ALTER TABLE `tbkonfirmasi`
  MODIFY `KodeKonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
