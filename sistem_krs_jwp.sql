-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 05:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_krs_jwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuliah`
--

CREATE TABLE `kuliah` (
  `id` int(11) NOT NULL,
  `kode_matkul` varchar(5) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL,
  `nama_dosen` varchar(20) NOT NULL,
  `ruang_kul` varchar(4) NOT NULL,
  `waktu_kul` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliah`
--

INSERT INTO `kuliah` (`id`, `kode_matkul`, `nama_matkul`, `nama_dosen`, `ruang_kul`, `waktu_kul`) VALUES
(1, 'MKW01', 'Kalkulus', 'Pak Rahmat', '1-A', 'Senin'),
(2, 'MKW02', 'Algoritma', 'Pak Sumar', '1-B', 'Selasa'),
(3, 'MKW03', 'Tauhid', 'Pak Taufik', '1-C', 'Rabu'),
(4, 'MKL01', 'Jaringan', 'Pak Manda', '1-D', 'Kamis'),
(5, 'MKL02', 'Sistem Cerdas', 'Bu Otik', '2-A', 'Jumat'),
(6, 'MKL03', 'Data Mining', 'Pak Didi', '2-B', 'Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(5) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuliah`
--
ALTER TABLE `kuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_matkul` (`kode_matkul`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuliah`
--
ALTER TABLE `kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
