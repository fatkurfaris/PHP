-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 01:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itc`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(3) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'fatkurfaris', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id_photo` int(3) NOT NULL,
  `kategori` varchar(99) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `alamat` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`id_photo`, `kategori`, `tanggal`, `alamat`) VALUES
(1, 'sport', '14-March-2017', 'Sport_1.png'),
(2, 'sport', '22-July-2019', 'Sport_2.png'),
(3, 'sport', '9-April-2012', 'Sport_3.png'),
(4, 'sport', '22-July-2019', 'Sport_4.png\r\n'),
(7, 'food', '28-November-2019', 'Food_1.png'),
(8, 'food', '2-August-2020', 'Food_2.png'),
(9, 'food', '2-August-2020', 'Food_3.png'),
(10, 'food', '16-January-2018', 'Food_4.png'),
(11, 'food', '22-August-2020', 'Food_5.png'),
(12, 'food', '4-April-2018', 'Food_6.png'),
(13, 'photo', '12-November-2020', 'Photo_1.png'),
(14, 'photo', '26-December-2019', 'Photo_2.png'),
(15, 'photo', '20-February--2020', 'Photo_3.png'),
(16, 'photo', '10-October-2019', 'Photo_4.png'),
(17, 'photo', '27-September-2019', 'Photo_5.png'),
(18, 'photo', '10-October-2019', 'Photo_6.png'),
(19, 'photo', '1-January-2020', 'Photo_7.png'),
(20, 'photo', '26-December-2019', 'Photo_8.png'),
(33, 'photo', '21-januari-2019', 'foto.jpeg'),
(34, 'photo', '21-januari-2019', 'foto.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id_photo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id_photo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
