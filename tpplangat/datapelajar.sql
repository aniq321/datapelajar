-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_pelajar`
--

CREATE TABLE `contact_pelajar` (
  `no_ndp` int(9) NOT NULL,
  `emel` varchar(300) NOT NULL,
  `alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_pelajar`
--

INSERT INTO `contact_pelajar` (`no_ndp`, `emel`, `alamat`) VALUES
(23221084, 'aina@gmail.com', 'Lot 1204, Belakang Masjid Palekbang, 16040, Tumpat, Kelantan.'),
(23221100, 'ishu@gmail.com', 'No 43 Jalan Pualam 7/32, Seksyen 7, 40000, Shah Alam, Selangor'),
(23221102, 'najwa@gmail.com', 'No 1A Kampung Sungai Dadeh, Temoh Stesen, 35350, Temoh, Perak'),
(23221132, 'faisal@gmail.com', '53 Laluan Inton Kanthan Desa 3 Intan Kanthan, 3120, Chemor, Perak.'),
(23221157, 'allyssa@gmail.com', 'Lot 1033 No 8 Lorong 4 Kg Merbau Sempak, 47000, Sungai Buloh, Selangor');

-- --------------------------------------------------------

--
-- Table structure for table `info_pelajar`
--

CREATE TABLE `info_pelajar` (
  `id` int(3) NOT NULL,
  `no_ndp` int(9) NOT NULL,
  `nama_pelajar` varchar(50) NOT NULL,
  `no_kp` varchar(50) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_pelajar`
--

INSERT INTO `info_pelajar` (`id`, `no_ndp`, `nama_pelajar`, `no_kp`, `jantina`, `no_hp`) VALUES
(1, 23221084, 'AINA ATIKAH BINTI MOHD AZHAR', '20828160168', 'Perempuan', '0136793937'),
(2, 23221102, 'AINA NAJWA BINTI AMRAN', '21013031452', 'Perempuan', '0173693223'),
(3, 23221157, 'ALLYSSA BINTI ABDULLAH', '31206140104', 'Perempuan', '0188746883'),
(5, 23221100, 'ISYUAARIYAA A/P KRISHNAN', '30526141256', 'Perempuan', '0133367699');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_pelajar`
--
ALTER TABLE `contact_pelajar`
  ADD PRIMARY KEY (`no_ndp`);

--
-- Indexes for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
