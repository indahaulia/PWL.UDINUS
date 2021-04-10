-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2021 pada 09.25
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrikulasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `hoby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kelas`, `fakultas`, `prodi`, `gender`, `hoby`) VALUES
('', 'andr', 'mtr09', 'ilmu komputer', 'ti', 'female', 'nyanyi,nari,baca'),
('11237', 'andriani', 'mtr01', 'Ilmu Komputer', 'si', 'female', ''),
('11238', 'andr', 'mtr09', 'ilmu komputer', 'ti', 'female', 'nyanyi,nari,baca'),
('11239', 'andr', 'mtr01', 'ilkom', 'teknik informatika', 'female', ''),
('19.01.53.0016', 'Brian Marcius Ega Wijaya', 'TI 19 Sore', 'ilmu komputer', 'TI', 'male', 'nyanyi,makan'),
('23748923', 'andr', 'mtr09', 'ilkom', 'si', 'female', 'nyanyi,nari,baca,travel'),
('456789', 'asdd', 'mtr02', 'ilkom', 'si', 'female', ''),
('47828348', 'andr', 'mtr09', 'kedokteran', 'ti', 'female', 'nyanyi'),
('566', 'jjkjl', 'kbjn', 'ilmu komputer', 'nkjn', 'male', 'nyanyi,nari,baca'),
('5678', 'indah', 'mtr01', 'Ilmu Komputer', 'ti', 'female', ''),
('7865', 'andriani', 'mtr09', 'Ilmu Komputer', 'si', 'female', ''),
('98765', 'andr', 'mtr01', 'ilkom', 'ti', '0', ''),
('a11234', 'aulia', 'mtr01', 'ilkom', 'ti', '', ''),
('a12367', 'andr', 'mtr09', 'ilkom', 'si', '', ''),
('a123670', 'asdd', 'bdewdw', 'www', 'ti', 'male', ''),
('a234', 'lala', 'mtr01', 'ilkom', 'ti', '', ''),
('a456', 'indah', 'mtr04', 'ilkom', 'ti', '', 'nyanyi,baca,travel');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `nim` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
