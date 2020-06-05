-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 03:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapemain`
--

CREATE TABLE `datapemain` (
  `id` int(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapemain`
--

INSERT INTO `datapemain` (`id`, `nama`, `email`, `score`) VALUES
(1, 'Fani', 'fani@gmail.com', '370'),
(2, 'Diki', 'diki@gmail.com', '900'),
(3, 'Rena', 'rena@gmail.com', '350'),
(4, 'Budi', 'budi@gmail.com', '400'),
(5, 'Doni', 'doni@gmail.com', '150'),
(6, 'Doni', 'doni@gmail.com', '330'),
(7, 'Siska', 'siska@gmail.com', '390'),
(8, 'Indra', 'Indra@gmail.com', '1000'),
(9, 'Romi', 'romi@gmail.com', '850'),
(10, 'Rudi', 'rudi@gmail.com', '380'),
(11, 'Radi', 'radi@gmail.com', '780'),
(12, 'Maya', 'maya@gmail.com', '570'),
(13, 'Maya', 'maya@gmail.com', '200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapemain`
--
ALTER TABLE `datapemain`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapemain`
--
ALTER TABLE `datapemain`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
