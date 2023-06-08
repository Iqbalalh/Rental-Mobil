-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 01:55 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20863342_rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '$2y$10$ssqcA97IwqkNOkxG/k7/teKeKTQkEU4RktSzp3MFJv5q1Cz7RWWy2');

-- --------------------------------------------------------

--
-- Table structure for table `data_mobil`
--

CREATE TABLE `data_mobil` (
  `id_mobil` int(5) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(100) NOT NULL,
  `rating` float NOT NULL,
  `plat` varchar(10) DEFAULT NULL,
  `fotomobil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mobil`
--

INSERT INTO `data_mobil` (`id_mobil`, `nama_mobil`, `kategori`, `harga`, `rating`, `plat`, `fotomobil`) VALUES
(13, 'Xenia', '6 Seater', 500000, 4, 'BE1234C', '64795317abe40.jpeg'),
(14, 'Ayla', '4 Seater', 300000, 5, 'BE123E', '64795343e70ea.jpeg'),
(15, 'Granmax', 'Kargo', 200000, 3.4, 'BE1342R', '64795b502f2e7.png'),
(16, 'Avanza', '6 Seater', 500000, 4, 'B4234T', '64795cc87409b.png'),
(17, 'Datsun Go+', '6 Seater', 300000, 2.3, 'B3563I', '64795d2a213c4.png'),
(18, 'Sigra', '6 Seater', 300000, 3.4, 'BE3423P', '64795dadf1c9a.jpeg'),
(19, 'Ignis', '4 Seater', 500000, 4, 'BE1231T', '64795f39cd5a3.jpeg'),
(20, 'Confero S', '6 Seater', 370000, 5, 'B2134O', '64795fa7ce0c6.jpeg'),
(21, 'Sirion', '4 Seater', 500000, 3.1, 'BE5435P', '64795ffa78c16.jpeg'),
(22, 'HRV', '4 Seater', 800000, 5, 'BE2342O', '647960890ab96.jpeg'),
(23, 'Hilux', '4 Seater', 800000, 4, 'B2342P', '647c170f998a4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `nama`) VALUES
(4, 'member', 'member', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `id_mobil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
