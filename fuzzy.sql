-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Des 2019 pada 04.59
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuzzy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisis_desain_algoritma`
--

CREATE TABLE `analisis_desain_algoritma` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `UTS` int(2) NOT NULL,
  `UAS` int(2) NOT NULL,
  `rerata` varchar(5) NOT NULL,
  `total_tugas` int(2) NOT NULL,
  `NA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisis_desain_sistem`
--

CREATE TABLE `analisis_desain_sistem` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `UTS` int(2) NOT NULL,
  `UAS` int(2) NOT NULL,
  `rerata` varchar(5) NOT NULL,
  `total_tugas` int(2) NOT NULL,
  `NA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecerdasan_buatan`
--

CREATE TABLE `kecerdasan_buatan` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `UTS` int(2) NOT NULL,
  `UAS` int(2) NOT NULL,
  `rerata` varchar(5) NOT NULL,
  `total_tugas` int(2) NOT NULL,
  `NA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `multimedia`
--

CREATE TABLE `multimedia` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `UTS` int(2) NOT NULL,
  `UAS` int(2) NOT NULL,
  `rerata` varchar(5) NOT NULL,
  `total_tugas` int(2) NOT NULL,
  `NA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek_perangkat_lunak`
--

CREATE TABLE `proyek_perangkat_lunak` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `UTS` int(2) NOT NULL,
  `UAS` int(2) NOT NULL,
  `rerata` varchar(5) NOT NULL,
  `total_tugas` int(2) NOT NULL,
  `NA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
