-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 05:13 AM
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
-- Database: `chatbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `accs`
--

CREATE TABLE `accs` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accs`
--

INSERT INTO `accs` (`id`, `name`, `email`, `password`, `timestamp`) VALUES
(1, 'fr g dyhr', 'yrv rtvw4', 'tvtwtvw4tvw4', '2023-05-15 02:22:56'),
(2, 'Reinzy', 'rrrrrr', 'rrrrrr', '2023-05-15 02:23:13'),
(3, 'reinzy', 'mmmmmm', 'mmmmmm', '2023-05-15 02:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `message` varchar(69) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `account_id`, `message`, `timestamp`) VALUES
(1, 2, 'jyg', '2023-05-15 02:30:09'),
(2, 2, 'sfbgrdsgbvrs', '2023-05-15 02:30:11'),
(3, 2, 't ', '2023-05-15 02:30:39'),
(4, 2, 'yuiy', '2023-05-15 02:30:42'),
(5, 2, 'hftjg', '2023-05-15 02:30:46'),
(6, 2, 'ioluyp', '2023-05-15 02:30:48'),
(7, 3, 'rhgtryhrt', '2023-05-15 02:31:01'),
(8, 3, 'drafegiy', '2023-05-15 02:31:03'),
(9, 3, 'yur', '2023-05-15 02:31:06'),
(10, 3, ' tn ', '2023-05-15 02:31:08'),
(11, 3, 'fre', '2023-05-15 02:40:53'),
(12, 3, 'j', '2023-05-15 02:40:54'),
(13, 3, 'yto', '2023-05-15 03:00:56'),
(14, 3, 'jhmy', '2023-05-15 03:00:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accs`
--
ALTER TABLE `accs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accs`
--
ALTER TABLE `accs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `sender` FOREIGN KEY (`account_id`) REFERENCES `accs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
