-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2025 at 05:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan_udc`
--

-- --------------------------------------------------------

--
-- Table structure for table `EmployeeA`
--

CREATE TABLE `EmployeeA` (
  `nik` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `EmployeeA`
--

INSERT INTO `EmployeeA` (`nik`, `nama_karyawan`, `tanggal_lahir`) VALUES
('K0001', 'A', '2018-01-01'),
('K0002', 'B', '2018-02-02'),
('K0003', 'C', '2018-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `EmployeeB`
--

CREATE TABLE `EmployeeB` (
  `nik` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `EmployeeB`
--

INSERT INTO `EmployeeB` (`nik`, `nama_karyawan`, `tanggal_lahir`) VALUES
('K0002', 'B', '2018-02-02'),
('K0005', 'S', '2018-02-19'),
('K0007', 'T', '2018-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `EmployeeA`
--
ALTER TABLE `EmployeeA`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `EmployeeB`
--
ALTER TABLE `EmployeeB`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
