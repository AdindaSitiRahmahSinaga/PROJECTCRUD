-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2024 pada 05.37
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpustakaan4c`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jkl` enum('PRIA','WANITA') NOT NULL,
  `agama` varchar(25) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jkl`, `agama`, `email`, `pwd`, `created_at`, `updated_at`) VALUES
('22220458', 'Adinda Siti Rahmah Sinaga', 'Mekar Tanjung', 'WANITA', 'Islam', 'Adindasrs@gmail.com', '563490', '2024-05-13 09:52:16', '2024-05-13 09:52:16'),
('45230986', 'Shinta Rahayu', 'Kedai Rendah', 'WANITA', 'Islam', 'Shintarhy@gmail.com', '125678', '2024-05-13 09:59:56', '2024-05-13 09:59:56'),
('46233421', 'Ratna Sri Wiji Astuti', 'Gunung Melayu', 'WANITA', 'Islam', 'Ratnaswj@gmail.com', '348921', '2024-05-13 10:02:09', '2024-05-13 10:02:09'),
('56438764', 'Yoga Prananda', 'Teluk Kiri', 'PRIA', 'Islam', 'Yoga@gmail.com', '137890', '2024-05-13 10:01:03', '2024-05-13 10:01:03'),
('78904563', 'Suci Annisa', 'Kisaran Timur', 'WANITA', 'Islam', 'Suciannisa@gmail.com', '234587', '2024-05-13 09:47:38', '2024-05-13 09:47:38'),
('87452341', 'Tanita Putri', 'Lima Puluh', 'WANITA', 'Islam', 'Tania@gmail.com', '358754', '2024-05-13 10:03:25', '2024-05-13 10:03:25'),
('96113487', 'Vania Aliska', 'Jakarta Utara', 'WANITA', 'Islam', 'VaniaAlks@gmail.com', '653452', '2024-05-13 10:05:04', '2024-05-13 10:05:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idpinjam` varchar(25) NOT NULL,
  `idmhs` varchar(8) NOT NULL,
  `tglpinjam` datetime NOT NULL,
  `tglkembali` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idpinjam`),
  ADD KEY `idmhs` (`idmhs`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`idmhs`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
