-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 28 Apr 2018 pada 15.54
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','mahasantri','dosen') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `email`, `level`) VALUES
(1, 'Abdul Aziz', 'aziz', 'a3012ec7d2aa8c3f93ca94e0be8ae0e0', 'aziz@gmail.com', 'admin'),
(2, 'santri', 'santri', '7d1959dcd37659e4cfdc794945cea9a8', 'santri@gmail.com', 'mahasantri'),
(3, 'dosen', 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen@gmail.com', 'dosen'),
(4, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com`', 'mahasantri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_mahasantri` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawaban`, `id_mahasantri`, `id_pertanyaan`, `jawaban`) VALUES
(1, 1, 1, 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jpertanyaan`
--

CREATE TABLE `tb_jpertanyaan` (
  `id_jpertanyaan` int(11) NOT NULL,
  `jenis_pertanyaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_jpertanyaan`
--

INSERT INTO `tb_jpertanyaan` (`id_jpertanyaan`, `jenis_pertanyaan`) VALUES
(2, 'Kegiatan Perkulihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuisioner`
--

CREATE TABLE `tb_kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `kuisioner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_kuisioner`
--

INSERT INTO `tb_kuisioner` (`id_kuisioner`, `kuisioner`) VALUES
(1, 'Santri'),
(2, 'Manajemen'),
(3, 'Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasantri`
--

CREATE TABLE `tb_mahasantri` (
  `id_mahasantri` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `agama` varchar(45) NOT NULL,
  `tmp_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nohp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_mahasantri`
--

INSERT INTO `tb_mahasantri` (`id_mahasantri`, `nama`, `nim`, `kelas`, `agama`, `tmp_lahir`, `tgl_lahir`, `alamat`, `email`, `nohp`) VALUES
(1, 'Abdul Aziz', '170101001', 'mekkah', 'islam', 'Sukabumi', '1999-07-04', 'Sukabumi', 'azizmenor96@gmail.com', '089627005208'),
(2, 'Ahmad', '170101002', 'mekkah', 'islam', 'Bogor', '1999-09-04', 'Bogor', 'ahmad96@gmail.com', '0893534546'),
(3, 'Arisandi', '170101003', 'Mekkah', 'Isalam', 'Makkasar', '1999-10-10', 'Makkasar', 'ariasandi@gmail.com', '08946327864');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `id_jpertanyaan` int(11) NOT NULL,
  `id_kuisioner` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `pilihan` enum('A','B','C','D','E') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `id_jpertanyaan`, `id_kuisioner`, `pertanyaan`, `pilihan`) VALUES
(1, 2, 3, 'Apa yang kamu rasa kan setelah belajar dengan dosen A ?', 'A'),
(2, 2, 3, 'Apakah Dosen A berlaku Adill ?', 'C'),
(3, 2, 3, 'Dosenn ????????????', 'E');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tb_jpertanyaan`
--
ALTER TABLE `tb_jpertanyaan`
  ADD PRIMARY KEY (`id_jpertanyaan`);

--
-- Indexes for table `tb_kuisioner`
--
ALTER TABLE `tb_kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `tb_mahasantri`
--
ALTER TABLE `tb_mahasantri`
  ADD PRIMARY KEY (`id_mahasantri`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jpertanyaan`
--
ALTER TABLE `tb_jpertanyaan`
  MODIFY `id_jpertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kuisioner`
--
ALTER TABLE `tb_kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mahasantri`
--
ALTER TABLE `tb_mahasantri`
  MODIFY `id_mahasantri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
