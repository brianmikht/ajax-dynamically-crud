-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 10:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studycase`
--

-- --------------------------------------------------------

--
-- Table structure for table `diri`
--

CREATE TABLE `diri` (
  `id_diri` int(11) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `order_field` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diri`
--

INSERT INTO `diri` (`id_diri`, `nama_depan`, `nama_belakang`, `no_telp`, `order_field`) VALUES
(1, 'Phance', 'Karyadi', '085678539283', 2),
(2, 'Brian', 'Mikhael', '085678539267', 1),
(3, 'Christoper', 'Jordan', '085678539256', 3),
(4, 'Leona', 'Lovita', '085678539298', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `gambar`) VALUES
(2, 'LinkAja', 'linkaja.png'),
(3, 'Summarecon Mall Serpong', 'logo-mal-serpong.jpg'),
(4, 'Bank Mandiri', 'mandiri.png');

-- --------------------------------------------------------

--
-- Table structure for table `klik`
--

CREATE TABLE `klik` (
  `id_klik` int(11) NOT NULL,
  `tanggal_klik` date DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klik`
--

INSERT INTO `klik` (`id_klik`, `tanggal_klik`, `id`) VALUES
(4, '2021-11-08', 2),
(5, '2021-11-08', 2),
(6, '2021-11-08', 2),
(7, '2021-11-08', 4),
(8, '2021-11-08', 2),
(9, '2021-11-08', 3),
(10, '2021-11-08', 2),
(11, '2021-11-08', 4),
(14, '2021-11-08', 4),
(15, '2021-11-08', 3),
(16, '2021-11-08', 3),
(17, '2021-11-08', 3),
(18, '2021-11-08', 4),
(19, '2021-11-08', 3),
(20, '2021-11-08', 4),
(21, '2021-11-08', 4),
(22, '2021-11-08', 2),
(23, '2021-11-08', 2),
(24, '2021-11-08', 2),
(25, '2021-11-08', 2),
(26, '2021-11-08', 2),
(27, '2021-11-08', 2),
(28, '2021-11-08', 2),
(29, '2021-11-08', 2),
(30, '2021-11-08', 2),
(31, '2021-11-08', 4),
(32, '2021-11-08', 3),
(33, '2021-11-08', 3),
(34, '2021-11-08', 3),
(35, '2021-11-08', 3),
(36, '2021-11-08', 3),
(37, '2021-11-08', 4),
(38, '2021-11-15', 2),
(39, '2021-11-15', 3),
(40, '2021-11-15', 4),
(41, '2021-11-15', 4),
(42, '2021-11-15', 3),
(43, '2021-11-15', 3),
(44, '2021-11-15', 3),
(45, '2021-11-15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `objek`
--

CREATE TABLE `objek` (
  `id` int(11) NOT NULL,
  `nama_lantai` longtext NOT NULL,
  `luas` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objek`
--

INSERT INTO `objek` (`id`, `nama_lantai`, `luas`) VALUES
(9, '[\"rtyu\",\"yuti\"]', '[\"78\",\"90\"]'),
(10, '[\"hbv\",\"efarti\",\"werty\"]', '[\"88\",\"76\",\"96\"]'),
(11, '[\"Pradita Consoeling\",\"Pradita Center\"]', '[\"200\",\"500\"]'),
(12, '[\"Perpustakaan\",\"Lab\",\"Auditorium\",\"Park\"]', '[\"460\",\"320\",\"880\",\"476\"]'),
(13, '[\"Taman Kebangsaan\",\"Lapangan Badminton\"]', '[\"780\",\"660\"]'),
(14, '[\"Lapangan Upacara\",\"Lapangan Voli\"]', '[\"770\",\"620\"]'),
(15, '[\"Lapangan Basket\",\"Lapangan Futsal\"]', '[\"680\",\"788\"]'),
(16, '[\"Kolam Renang\",\"Tennis Meja\"]', '[\"428\",\"279\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diri`
--
ALTER TABLE `diri`
  ADD PRIMARY KEY (`id_diri`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klik`
--
ALTER TABLE `klik`
  ADD PRIMARY KEY (`id_klik`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `objek`
--
ALTER TABLE `objek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diri`
--
ALTER TABLE `diri`
  MODIFY `id_diri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klik`
--
ALTER TABLE `klik`
  MODIFY `id_klik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `objek`
--
ALTER TABLE `objek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klik`
--
ALTER TABLE `klik`
  ADD CONSTRAINT `klik_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gambar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
