-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 04:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqua`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_rasa`
--

CREATE TABLE `tb_rasa` (
  `id_rasa` int(5) NOT NULL,
  `rasa` varchar(30) NOT NULL,
  `mie_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rasa`
--

INSERT INTO `tb_rasa` (`id_rasa`, `rasa`, `mie_id`) VALUES
(1, 'goreng', 1),
(2, 'soto', 1),
(3, 'sedap_goreng', 2),
(4, 'sedap_mie', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_rasa`
--
ALTER TABLE `tb_rasa`
  ADD PRIMARY KEY (`id_rasa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rasa`
--
ALTER TABLE `tb_rasa`
  MODIFY `id_rasa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
