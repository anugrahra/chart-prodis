-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 09:45 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uptam_produksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_produksi`
--

CREATE TABLE `data_produksi` (
  `id` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(5) NOT NULL,
  `final` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pemair` int(50) NOT NULL,
  `jumlah_produksi` int(11) NOT NULL,
  `jumlah_distribusi` int(11) NOT NULL,
  `nrw` int(11) NOT NULL,
  `jam_operasi` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `pac` int(11) NOT NULL,
  `kaporit` int(11) NOT NULL,
  `dosis_pac` float NOT NULL,
  `dosis_kaporit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_produksi`
--

INSERT INTO `data_produksi` (`id`, `bulan`, `tahun`, `final`, `status`, `pemair`, `jumlah_produksi`, `jumlah_distribusi`, `nrw`, `jam_operasi`, `debit`, `pac`, `kaporit`, `dosis_pac`, `dosis_kaporit`) VALUES
(1, 'Januari', 2020, 'blue', 'Final', 71660, 98551, 89108, 17448, 582, 50, 2050, 200, 20.8, 2),
(2, 'Februari', 2020, 'blue', 'Final', 67348, 83796, 75893, 8545, 495, 50, 2000, 225, 23.9, 2.7),
(3, 'Maret', 2020, 'blue', 'Final', 66297, 91932, 82708, 16411, 544, 50, 1950, 200, 21.2, 2.2),
(4, 'April', 2020, 'blue', 'Final', 68428, 94343, 85704, 17276, 558, 50, 1950, 200, 20.7, 2.1),
(5, 'Mei', 2020, 'blue', 'Final', 65414, 98765, 92251, 26837, 584, 50, 4325, 220, 43.8, 2.2),
(6, 'Juni', 2020, 'blue', 'Final', 86403, 104661, 96995, 10592, 581, 50, 3000, 200, 28.7, 1.9),
(7, 'Juli', 2020, 'blue', 'Final', 71034, 108006, 98891, 27857, 600, 50, 2850, 210, 26.4, 1.9),
(8, 'Agustus', 2020, 'blue', 'Final', 78935, 110724, 102141, 23206, 615, 50, 2750, 240, 24.8, 2.2),
(9, 'September', 2020, 'blue', 'Final', 81636, 124329, 118128, 36492, 691, 50, 3300, 310, 26.5, 2.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_produksi`
--
ALTER TABLE `data_produksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produksi`
--
ALTER TABLE `data_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
