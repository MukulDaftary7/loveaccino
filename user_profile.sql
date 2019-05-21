-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 07:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loveaccino`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `lives_in` varchar(25) NOT NULL,
  `birthplace` varchar(25) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `studied_at` varchar(60) NOT NULL,
  `marital_status` varchar(40) NOT NULL,
  `kids_status` varchar(40) NOT NULL,
  `want_kids` varchar(40) NOT NULL,
  `religion` varchar(40) NOT NULL,
  `smoke` varchar(40) NOT NULL,
  `drink` varchar(40) NOT NULL,
  `self_desc` text NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `movies` varchar(255) NOT NULL,
  `tv_shows` varchar(255) NOT NULL,
  `type_songs` varchar(255) NOT NULL,
  `type_books` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `user_name`, `lives_in`, `birthplace`, `designation`, `company_name`, `studied_at`, `marital_status`, `kids_status`, `want_kids`, `religion`, `smoke`, `drink`, `self_desc`, `hobbies`, `sports`, `movies`, `tv_shows`, `type_songs`, `type_books`) VALUES
(2, 'md', 'idr', 'idr', 'intern', 'google', 'iet', 'Currently Separated', '2', '3', '12', '4', '3', 'abc', 'reading,travelling', 'cricket,badminton', 'end game,uri', 'sherlok homes,friends', 'chankaya niti,zero to one', 'romantic,rock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
