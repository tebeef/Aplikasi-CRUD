-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2025 at 08:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `No` int(11) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `NIM` varchar(20) DEFAULT NULL,
  `JENIS_KELAMIN` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `PRODI` varchar(100) DEFAULT NULL,
  `TAHUN_MASUK` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`No`, `NAMA`, `NIM`, `JENIS_KELAMIN`, `PRODI`, `TAHUN_MASUK`) VALUES
(8, 'TUBAGUS FATAHUDIN MULKAN', '245150407111030', 'Laki-laki', 'Sistem Informasi', '2020'),
(9, 'TUBAGUS FATAHUDIN MULKAN', '245150407111030', 'Laki-laki', 'Sistem Informasi', '2024'),
(10, 'TUBAGUS FATAHUDIN MULKAN', '245150407111030', 'Laki-laki', 'Sistem Informasi', '2024'),
(11, 'TUBAGUS FATAHUDIN MULKAN', '245150407111030', 'Laki-laki', 'Sistem Informasi', '2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
