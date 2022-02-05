-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 01:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arvinmuhammadajif`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nopendaftar` varchar(1000) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nisn` mediumtext NOT NULL,
  `nis` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `tempat` mediumtext NOT NULL,
  `bday` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `anakke` varchar(1000) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `StatusDalamKeluarga` varchar(100) NOT NULL,
  `kampung` varchar(1000) NOT NULL,
  `desa` varchar(1000) NOT NULL,
  `kecamatan` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `juara` varchar(10000) NOT NULL,
  `juara2` varchar(100) NOT NULL,
  `juara3` varchar(100) NOT NULL,
  `bidang` varchar(10000) NOT NULL,
  `bidang2` varchar(100) NOT NULL,
  `bidang3` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `asalsekolah` varchar(10000) NOT NULL,
  `alamatsekolah` mediumtext NOT NULL,
  `nosttb` text NOT NULL,
  `tahun` varchar(1000) NOT NULL,
  `namaayah` varchar(1000) NOT NULL,
  `namaibu` varchar(1000) NOT NULL,
  `pekerjaanayah` varchar(1000) NOT NULL,
  `pekerjaanibu` varchar(1000) NOT NULL,
  `kampung2` text NOT NULL,
  `desa2` varchar(1000) NOT NULL,
  `kecamatan2` varchar(1000) NOT NULL,
  `phone 2` varchar(1000) NOT NULL,
  `penghasilan` varchar(1000) NOT NULL,
  `namawali` varchar(100) NOT NULL,
  `pekerjaanwali` varchar(100) NOT NULL,
  `kampung3` varchar(100) NOT NULL,
  `desa3` varchar(250) NOT NULL,
  `kecamatan3` varchar(1000) NOT NULL,
  `phone3` mediumtext NOT NULL,
  `penghasilan 2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(1000) NOT NULL,
  `tatanya` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hubungi2`
--

CREATE TABLE `hubungi2` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(1000) NOT NULL,
  `tatanya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` char(9) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `kelas`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Arvin Muhammad Ajif', '2106100', 'C', '2106100@itg.ac.id', '', 'arvin.jpg'),
(2, 'Muhammad Fikri', '', 'C', '2106100@itg.ac.id', 'S1 - Teknik Informatika', 'fikri.jpg'),
(6, 'Arvin Muhammad Ajif', '', 'D', '2106100@itg.ac.id', 'S1 - Sistem Informasi', 'arvin.jpg'),
(14, 'Arvin Muhammad Ajif', '2106100', 'C', '2106100@itg.ac.id', 'S1 - Teknik Informatika', 'arvin.jpg'),
(15, 'Arvin Muhammad Ajif', '2106100', 'C', '2106100@itg.ac.id', 'S1 - Teknik Informatika', 'arvin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungi2`
--
ALTER TABLE `hubungi2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `hubungi2`
--
ALTER TABLE `hubungi2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
