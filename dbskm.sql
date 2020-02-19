-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2020 pada 03.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbskm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` int(11) NOT NULL,
  `id_resp` int(11) NOT NULL,
  `persyaratan` int(50) NOT NULL,
  `sistem` int(50) NOT NULL,
  `waktu` int(50) NOT NULL,
  `biaya` int(50) NOT NULL,
  `produk` int(50) NOT NULL,
  `kompetensi` int(50) NOT NULL,
  `perilaku` int(50) NOT NULL,
  `penanganan` int(50) NOT NULL,
  `sarana` int(50) NOT NULL,
  `kritik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_resp` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `usia` varchar(50) NOT NULL,
  `pend` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `persyaratan` int(50) NOT NULL,
  `sistem` int(50) NOT NULL,
  `waktu` int(50) NOT NULL,
  `biaya` int(50) NOT NULL,
  `produk` int(50) NOT NULL,
  `kompetensi` int(50) NOT NULL,
  `perilaku` int(50) NOT NULL,
  `penanganan` int(50) NOT NULL,
  `sarana` int(50) NOT NULL,
  `kritik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_resp`, `gender`, `usia`, `pend`, `pekerjaan`, `layanan`, `tanggal`, `persyaratan`, `sistem`, `waktu`, `biaya`, `produk`, `kompetensi`, `perilaku`, `penanganan`, `sarana`, `kritik`) VALUES
(1, 'Perempuan', '15-20', 'SD/SMP/SMA', 'Pelajar/Mahasiswa', 'Pelayanan Tilang', '2020-02-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, 'Laki-laki', '15-20', 'SD/SMP/SMA', 'Pelajar/Mahasiswa', 'Lain-lain', '2020-02-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 'Laki-laki', '15-20', 'SD/SMP/SMA', 'PNS/TNI/Polri', 'Layanan Antar Barang Bukti', '2020-02-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`),
  ADD KEY `id_resp` (`id_resp`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_resp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_resp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
