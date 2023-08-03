-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 11:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lipaeazy`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_users`
--

CREATE TABLE `register_users` (
  `ID` int(11) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `verification_code` varchar(100) DEFAULT NULL,
  `full_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_users`
--

INSERT INTO `register_users` (`ID`, `phone_number`, `email`, `password`, `created`, `updated`, `verification_code`, `full_name`) VALUES
(1, '0725577645', NULL, 'tttt', '0000-00-00 00:00:00', '2023-03-08 14:01:32', NULL, 'Daniel Kamunyu'),
(2, '0725577645', NULL, '4444', '2023-03-08 14:21:40', '2023-03-08 14:21:40', '5141', 'Daniel Kamunyu'),
(3, '0110617912', NULL, 'C34226278', '2023-03-10 07:40:34', '2023-03-10 07:40:34', '6910', 'Collins Amolo'),
(4, '0715033996', NULL, 'DK67', '2023-03-17 07:04:07', '2023-03-17 07:04:07', '4866', 'Faith Wanjiku'),
(5, '0725577645', NULL, 'tyty', '2023-03-17 07:50:14', '2023-03-17 07:50:14', '7940', 'Daniel Kamunyu'),
(6, '0110617912', NULL, 'mmmm', '2023-03-17 08:30:04', '2023-03-17 08:30:04', '7131', 'Faith Wanjiku'),
(7, '1234567890', NULL, 'ffff', '2023-03-17 17:07:00', '2023-03-17 17:07:00', '7085', 'modemyo haggai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_users`
--
ALTER TABLE `register_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_users`
--
ALTER TABLE `register_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
