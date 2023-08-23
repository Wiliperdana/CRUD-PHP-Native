-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2023 pada 03.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(16) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `isi_pengaduan` text NOT NULL,
  `status` enum('Proses','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nama`, `nik`, `tgl_pengaduan`, `isi_pengaduan`, `status`) VALUES
(1, 'Yuda Wiliperdana', 1241321241, '2023-08-22', 'Jalan berlubang di Jl. Jendral Sudirman di sekitar Gedung Bank BCA', 'Selesai'),
(3, 'Mutiara Ramadhani', 452245, '2023-08-20', 'Jl. Veteran di pagi hari selalu macat dikarenakan kegiatan maba UB', 'Proses'),
(4, 'Maudy Ayunda', 45235135, '2023-08-15', 'Penanganan sampah yang berserakan setelah CFD di Ijen kurang bagus', 'Proses'),
(5, 'Chelsea Islan', 88462376, '2023-08-19', 'Revitalisasi jembatan suhat agar tidak terjadi tragedi yang sama', 'Proses'),
(6, 'Chelsea Islan', 88462376, '2023-08-19', 'Revitalisasi jembatan suhat agar tidak terjadi tragedi yang sama', 'Proses'),
(7, 'Ansellma Putri', 7465235, '2023-08-21', 'Penanganan banjir di daerah Jl. Soekarno Hatta kurang memuaskan', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Anya Geraldine', 'anya', 'dcacb1dc144e8de33ce954da79ab34c0', 'petugas'),
(3, 'Maudy Ayunda', 'maudy', '12342ced969b2ac2630196bd8a2ab0c1', 'masyarakat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
