-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2024 at 01:02 AM
-- Server version: 5.5.62-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indopos`
--

-- --------------------------------------------------------

--
-- Table structure for table `endpoint`
--

CREATE TABLE `endpoint` (
  `id` int(11) NOT NULL,
  `branch` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `endpoint`
--

INSERT INTO `endpoint` (`id`, `branch`, `url`, `status`) VALUES
(1, 'Indo General Store', 'https://igs.indob2c.com', '1'),
(2, 'Indo Shopping Mall', 'https://mall.indob2c.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `itemSale`
--

CREATE TABLE `itemSale` (
  `id` int(11) NOT NULL,
  `vDocNo` varchar(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `cashier` varchar(150) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `product` varchar(250) NOT NULL,
  `mrp` varchar(100) NOT NULL,
  `qty` varchar(150) NOT NULL,
  `unit` varchar(150) NOT NULL,
  `total` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itemSale`
--

INSERT INTO `itemSale` (`id`, `vDocNo`, `uid`, `cashier`, `branch`, `barcode`, `product`, `mrp`, `qty`, `unit`, `total`, `date`, `time`, `status`) VALUES
(1, '491853', '1', 'Paro', 'Indo General Store', '8901063401174', 'BRITANNIA CHEESE BLOCK 1KG*12', '590', '12', 'Pc', '7080', '2024-03-21', '2024-03-20 19:37:41', '1'),
(2, '324680', '1', 'Paro', 'Indo General Store', '42364', 'BREAD NORBU S', '40', '1', 'Nos', '40', '2024-04-02', '2024-04-01 19:16:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `saleBill`
--

CREATE TABLE `saleBill` (
  `id` int(11) NOT NULL,
  `vDocNo` varchar(100) NOT NULL,
  `transactionID` varchar(100) CHARACTER SET latin1 NOT NULL,
  `billAmount` varchar(100) NOT NULL,
  `phoneNumber` varchar(150) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `cashier` varchar(150) NOT NULL,
  `branch` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `branch`, `password`, `status`) VALUES
(1, 'Paro', '17915555', 'Indo General Store', 'paro@2022', '1'),
(2, 'Thimphu', '17916666', 'Indo Shopping Mall', 'thimphu@2022', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `endpoint`
--
ALTER TABLE `endpoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemSale`
--
ALTER TABLE `itemSale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saleBill`
--
ALTER TABLE `saleBill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `endpoint`
--
ALTER TABLE `endpoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `itemSale`
--
ALTER TABLE `itemSale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saleBill`
--
ALTER TABLE `saleBill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
