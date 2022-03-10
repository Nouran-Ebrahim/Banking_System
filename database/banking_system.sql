-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 11:35 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Nouran', 'nouran.ssp@gmail.com', 12000),
(2, 'Mohamed', 'mo@gmail.com', 50000),
(3, 'Nadeen', 'nadeen@gmail.com', 5400),
(4, 'Ahmed', 'ahmed@gmail.com', 1100),
(5, 'Hala', 'hala@gmail.com', 100000),
(6, 'Ebrahim', 'ebrahim@gmail.com', 17800),
(7, 'Omaima', 'omaima@gmail.com', 200000),
(8, 'Salah', 'salah@gmail.com', 32600),
(9, 'Salwa', 'salwa@gmail.com', 1800),
(10, 'Nagham', 'nagham@gmail.com', 48910);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_money`
--

CREATE TABLE `transfer_money` (
  `id` int(5) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `balance` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfer_money`
--

INSERT INTO `transfer_money` (`id`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Salwa', 'Nouran', 100, '2022-03-03 21:35:41'),
(2, 'Nagham', 'Ahmed', 100, '2022-03-03 21:52:18'),
(3, 'Ebrahim', 'Salwa', 200, '2022-03-03 22:05:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `transfer_money`
--
ALTER TABLE `transfer_money`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfer_money`
--
ALTER TABLE `transfer_money`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
