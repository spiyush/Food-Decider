-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 11:45 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `admin_id` int(200) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `created_at`, `updated_at`) VALUES
(1, 'piyushmoon', 'gvsdadh@gmail.com', '$2y$10$SODT.gPuKO12DLh7QEsBseA.0Gosy3ehYbCa1iw1Ku2CYjddXT/ei', '2017-12-09 10:29:49', '0000-00-00 00:00:00'),
(2, '', '', '$2y$10$jw7oEuLU5FvxsWt1BfzddOEb41.giJk8hKFWw588QPYhX10qhA22m', '2018-01-13 00:14:26', '0000-00-00 00:00:00'),
(3, '', '', '$2y$10$MsHyvjaRBmKzsHHc4EKKG.YA281woBKSCs9m.NyXZlyuDGdaqJPHK', '2018-01-13 00:15:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recepie`
--

CREATE TABLE `recepie` (
  `recepie_id` int(200) NOT NULL,
  `recepie_name` varchar(200) NOT NULL,
  `recepie_desc` varchar(300) NOT NULL,
  `recepie_type` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `upadted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recepie`
--

INSERT INTO `recepie` (`recepie_id`, `recepie_name`, `recepie_desc`, `recepie_type`, `created_at`, `upadted_at`) VALUES
(5, 'sad', 'dadadas', 1, '2018-01-13 11:28:19', '0000-00-00 00:00:00'),
(6, 'rew', 'gjgk', 1, '2018-01-13 11:30:26', '0000-00-00 00:00:00'),
(7, 'fhbzsd', 'gdrgfg', 1, '2018-01-13 10:16:08', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `recepie`
--
ALTER TABLE `recepie`
  ADD PRIMARY KEY (`recepie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recepie`
--
ALTER TABLE `recepie`
  MODIFY `recepie_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
