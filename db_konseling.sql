-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 05:47 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_konseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(20) NOT NULL,
  `psikolog` varchar(100) NOT NULL,
  `sesi` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_awal` varchar(100) NOT NULL,
  `jam_akhir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `psikolog`, `sesi`, `tgl`, `hari`, `jam_awal`, `jam_akhir`) VALUES
(1, 'Clara Moningta', '1', '2020-11-02', 'Selasa', '08.30', '10.30'),
(2, 'Clara Moningta', '1', '2020-11-05', 'Kamis', '08.30', '10.30'),
(3, 'Mba Gita', '1', '2020-11-04', 'Rabu', '15:30', '16:30'),
(4, 'Mba Gita', '3', '2020-11-05', 'Kamis', '15.30', '16.30'),
(5, 'Mba Gita', '1', '2020-11-06', 'Jumat', '15:30', '16:30'),
(6, 'Jane Pietra', '1', '2020-11-02', 'Senin', '09:30', '11:30'),
(7, 'Jane Pietra', '2', '2020-11-03', 'Selasa', '09:30', '11.30'),
(8, 'Jane Pietra', '2', '2020-11-05', 'Kamis', '09:30', '11:30');

-- --------------------------------------------------------

--
-- Table structure for table `janji`
--

CREATE TABLE `janji` (
  `id_janji` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `psikolog` varchar(255) NOT NULL,
  `sesi` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_awal` varchar(100) NOT NULL,
  `jam_akhir` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `status_riwayat` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `prodi` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id`, `nama`, `username`, `prodi`, `email`, `password`) VALUES
(2, 'Rafi Arsyad', 'Rafi', 'Informatika', 'arsyadr3@gmail.com', '12'),
(3, 'Abdul Rahman', 'Abdul', 'Manajemen', 'asd@gmail.com', 'klien'),
(4, 'Rafi Arsyad', 'Rafi', 'Informatika', 'arsyadr3@gmail.com', 'klien'),
(5, 'Safitri', 'Safitri', 'informatika', 'safitri@student.upj.', 'safitri'),
(6, 'Kijun', 'Kijun', 'informatika', 'arsyadr@ymail.com', '12'),
(7, 'Bambang', 'bmbank', 'informatika', 'bmbank@gmail.com', 'bambang'),
(8, 'Safitri Jaya', 'Safitri', 'Informatika', 'safitri.jaya@upj.ac.', 'safitri');

-- --------------------------------------------------------

--
-- Table structure for table `konselor`
--

CREATE TABLE `konselor` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konselor`
--

INSERT INTO `konselor` (`id`, `nama`, `username`, `email`, `password`) VALUES
(1, 'Jane Pietra', 'JaneP', 'konselor@gmail.', 'konselor'),
(2, 'Clara Moningta', 'ClaraM', 'konselor@gmail.', 'konselor'),
(3, 'Mba Gita', 'Gita', 'konselor@gmail.', 'konselor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `janji`
--
ALTER TABLE `janji`
  ADD PRIMARY KEY (`id_janji`),
  ADD KEY `jadwal_fx` (`id_jadwal`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konselor`
--
ALTER TABLE `konselor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `janji`
--
ALTER TABLE `janji`
  MODIFY `id_janji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konselor`
--
ALTER TABLE `konselor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `janji`
--
ALTER TABLE `janji`
  ADD CONSTRAINT `jadwal_fx` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
