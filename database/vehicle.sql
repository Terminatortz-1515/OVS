-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2024 at 11:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `firstname` text CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `secondname` text CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `lastname` text CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `photo` blob NOT NULL,
  `password` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`firstname`, `secondname`, `lastname`, `email`, `phone`, `photo`, `password`, `id`) VALUES
('stephen', 'wilbroad', 'rweikiza', 'stephenwilbroad15@gmail.com', 626711269, 0x626c61636b2d62656c742e77656270, '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` text CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `number` varchar(255) NOT NULL,
  `company` enum('toyota','nissan','mitsubishi','ford','bmw') CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `model` enum('v8','carrier','fuso','dualis','x3','x6') CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `service` enum('oil changing','engine repair','tire replacement','engine diagnosis') CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `date` date NOT NULL,
  `mode` enum('pick up','drop off') CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `number`, `company`, `model`, `phone`, `service`, `date`, `mode`, `longitude`, `latitude`, `id`) VALUES
('salumu', 'T262-DTK', 'toyota', 'v8', 626711269, 'engine diagnosis', '2024-06-02', 'pick up', 0, 0, 1),
('juma', 'T272-DTW', 'toyota', 'dualis', 626711269, 'oil changing', '2024-06-03', 'drop off', 0, 0, 2),
('jimmy', 'T262-DTF', 'bmw', 'x3', 988766789, 'tire replacement', '2024-06-04', 'pick up', 39.2265728, -6.8059136, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
