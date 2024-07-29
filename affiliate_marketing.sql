-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 06:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `affiliate_marketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliates`
--

CREATE TABLE `affiliates` (
  `aff_id` int(11) NOT NULL,
  `owner_affid` varchar(50) NOT NULL,
  `aff_name` varchar(100) NOT NULL,
  `user_level` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `curdate` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payouts_breakup`
--

CREATE TABLE `payouts_breakup` (
  `payout_id` int(11) NOT NULL,
  `aff_id` varchar(100) NOT NULL,
  `aff_name` varchar(100) NOT NULL,
  `aff_level` varchar(100) NOT NULL,
  `sales_amt` varchar(100) NOT NULL,
  `payout_per` varchar(100) NOT NULL,
  `payout_amt` varchar(100) NOT NULL,
  `curdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_payout`
--

CREATE TABLE `sales_payout` (
  `sales_id` int(11) NOT NULL,
  `owner_affid` varchar(100) NOT NULL,
  `affiliate_name` varchar(100) NOT NULL,
  `pay_amount` varchar(100) NOT NULL,
  `curdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `curdate` varchar(100) NOT NULL,
  `pass_char` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD PRIMARY KEY (`aff_id`);

--
-- Indexes for table `payouts_breakup`
--
ALTER TABLE `payouts_breakup`
  ADD PRIMARY KEY (`payout_id`);

--
-- Indexes for table `sales_payout`
--
ALTER TABLE `sales_payout`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliates`
--
ALTER TABLE `affiliates`
  MODIFY `aff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payouts_breakup`
--
ALTER TABLE `payouts_breakup`
  MODIFY `payout_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_payout`
--
ALTER TABLE `sales_payout`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
