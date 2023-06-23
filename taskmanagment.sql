-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 11:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmanagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign task`
--

CREATE TABLE `assign task` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assigntask`
--

CREATE TABLE `assigntask` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `task` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assigntask`
--

INSERT INTO `assigntask` (`id`, `message`, `user_id`, `task`, `status`, `role`) VALUES
(49, 'do it', 'mridul ', 'admin panel', 'resolved', 'manager'),
(50, 'please make responsive', 'vinod', 'chat layout', 'inprogresscess', 'manager'),
(52, 'make fast', 'viney', 'chat layout', 'inprogresscess', 'employee'),
(57, 'zcfsdfwe', 'ritik', 'chat layout', 'resolved', 'employee'),
(58, 'make responsive', 'mridul ', 'chat layout', 'inprogresscess', 'manager'),
(59, 'make it', 'ritik', 'chat layout', 'inprogresscess', 'employee'),
(60, '', 'ritik', 'admin panel', 'pending', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `assignuser`
--

CREATE TABLE `assignuser` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `employee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignuser`
--

INSERT INTO `assignuser` (`id`, `m_id`, `employee`) VALUES
(40, 38, 'ritik'),
(41, 41, 'viney');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `role`, `password`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', 'admin', '123'),
(38, 'mridul ', 'sharma', 'm@mail.com', 'manager', '123'),
(41, 'vinod', 'singh', 'v@mail.com', 'manager', '123'),
(44, 'ritik', 'saini', 'r@mail.com', 'employee', '123'),
(45, 'viney', 'sharma', 'viney@mail.com', 'employee', '123'),
(46, 'john', 'deo', 'john@mail.com', 'customer', '123'),
(47, 'haryy', 'hary', 'h@mail.com', 'customer', '123');

-- --------------------------------------------------------

--
-- Table structure for table `workorder`
--

CREATE TABLE `workorder` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workorder`
--

INSERT INTO `workorder` (`id`, `title`, `note`, `c_id`, `status`) VALUES
(46, 'admin panel', 'do it fast', 46, 'resolved'),
(47, 'chat layout', 'like insta', 47, 'resolved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign task`
--
ALTER TABLE `assign task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigntask`
--
ALTER TABLE `assigntask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignuser`
--
ALTER TABLE `assignuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `workorder`
--
ALTER TABLE `workorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign task`
--
ALTER TABLE `assign task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assigntask`
--
ALTER TABLE `assigntask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `assignuser`
--
ALTER TABLE `assignuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `workorder`
--
ALTER TABLE `workorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
