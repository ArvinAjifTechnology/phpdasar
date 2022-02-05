-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2020 pada 08.26
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `arvinmuhammadajif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nopendaftar` mediumtext NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nisn` mediumtext NOT NULL,
  `nis` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `tempat` mediumtext NOT NULL,
  `bday` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `StatusDalamKeluarga` varchar(100) NOT NULL,
  `kampung` varchar(1000) NOT NULL,
  `desa` varchar(1000) NOT NULL,
  `kecamatan` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `quantity` varchar(10000) NOT NULL,
  `bidang` varchar(10000) NOT NULL,
  `vehicle2"` mediumtext NOT NULL,
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
  `namawali` int(11) NOT NULL,
  `pekerjaanwali` int(11) NOT NULL,
  `kampung3` int(11) NOT NULL,
  `desa3` int(11) NOT NULL,
  `kecamatan3` int(11) NOT NULL,
  `phone3` int(11) NOT NULL,
  `penghasilan 2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id`, `nopendaftar`, `nama`, `nisn`, `nis`, `gender`, `tempat`, `bday`, `agama`, `blood`, `StatusDalamKeluarga`, `kampung`, `desa`, `kecamatan`, `phone`, `quantity`, `bidang`, `vehicle2"`, `asalsekolah`, `alamatsekolah`, `nosttb`, `tahun`, `namaayah`, `namaibu`, `pekerjaanayah`, `pekerjaanibu`, `kampung2`, `desa2`, `kecamatan2`, `phone 2`, `penghasilan`, `namawali`, `pekerjaanwali`, `kampung3`, `desa3`, `kecamatan3`, `phone3`, `penghasilan 2`) VALUES
(1, '10', 'Arvin Muhammmad Ajif\r\n', '18101900983', '889399734545', 'Laki Laki', 'Garut', '2020-11-12', 'islam', 'O', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(1000) NOT NULL,
  `tatanya` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id`, `nama`, `nohp`, `email`, `subjek`, `tatanya`) VALUES
(37, 'Arvin Muhammad Ajif', '', '', '', ''),
(38, 'Arvin Muhammad Ajif', '087781052289', 'fatimatuljahro@gmail.com', 'Alhamdulillah', 'cvbvgfcbbvc'),
(39, 'Arvin Muhammad Ajif', '087781052289', 'fatimatuljahro@gmail.com', 'Alhamdulillah', 'cvbvgfcbbvc'),
(41, 'Arvin Muhammad Ajif', '087781052289', 'arvinajif3@gmail.com', 'hhhhhhhh', 'ergtr'),
(42, 'Arvin Muhammad Ajif', '087781052289', 'arvinajif3@gmail.com', 'hhhhhhhh', 'ergtr'),
(43, 'Arvin Muhammad Ajif', '087781052289', 'arvinajif3@gmail.com', 'hhhhhhhh', 'ergtr'),
(44, 'fatimatul jahro', '0877-8105-2289', 'fatimatuljahro@gmail.com', 'Alhamdulillah', 'bvgffggfbhrgthtzrghfhgfhghgh'),
(48, 'Arvin Muhammad Ajif', '0877-8105-2289', 'arvinajif3@gmail.com', 'Alhamdulillah', 'Alhamdulillah Beres!!!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi2`
--

CREATE TABLE IF NOT EXISTS `hubungi2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(1000) NOT NULL,
  `tatanya` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
