-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 24, 2026 at 08:22 AM
-- Server version: 8.0.44
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `umur` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jurusan`, `email`, `umur`) VALUES
(1, 'Halvina Farras Savitri', '2410631170071', 'Informatika', '2410631170071@student.unsika.ac.id', 20),
(4, 'Andi Saputra', '2023001', 'Informatika', 'andi@gmail.com', 20),
(5, 'Budi Santoso', '2023002', 'Sistem Informasi', 'budi@gmail.com', 21),
(6, 'Citra Dewi', '2023003', 'Informatika', 'citra@gmail.com', 19),
(8, 'Eko Prasetyo', '2023005', 'Sistem Informasi', 'eko@gmail.com', 20),
(9, 'Fajar Nugroho', '2023006', 'Informatika', 'fajar@gmail.com', 21),
(10, 'Gina Putri', '2023007', 'Teknik Komputer', 'gina@gmail.com', 19),
(11, 'Hadi Wijaya', '2023008', 'Informatika', 'hadi@gmail.com', 23),
(12, 'Indah Sari', '2023009', 'Sistem Informasi', 'indah@gmail.com', 20),
(13, 'Joko Susilo', '2023010', 'Teknik Komputer', 'joko@gmail.com', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
