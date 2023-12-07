-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 10:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(5) NOT NULL,
  `book_name` varchar(70) DEFAULT NULL,
  `book_image` varchar(100) DEFAULT NULL,
  `book_author_name` varchar(50) DEFAULT NULL,
  `book_publication_name` varchar(50) DEFAULT NULL,
  `book_purchase_date` varchar(50) DEFAULT NULL,
  `book_price` varchar(10) DEFAULT NULL,
  `book_qty` int(5) DEFAULT NULL,
  `available_qty` int(5) DEFAULT NULL,
  `libraian_username` varchar(50) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(5) NOT NULL,
  `student_id` int(5) NOT NULL,
  `book_id` int(5) NOT NULL,
  `book_issue_date` varchar(20) NOT NULL,
  `boot_return_date` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `libraian`
--

CREATE TABLE `libraian` (
  `id` int(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `libraian`
--

INSERT INTO `libraian` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `datetime`) VALUES
(1, 'Monish', 'Roy', 'monishroy87@gmail.com', 'monish', '112233', '2022-09-19 16:12:38'),
(2, 'Admin', 'monish', 'roymonish712@gmail.com', 'admin', '112233', '2022-09-19 16:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `roll` int(6) NOT NULL,
  `reg` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `user_image` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `roll`, `reg`, `email`, `username`, `password`, `phone`, `user_image`, `status`, `datetime`) VALUES
(2, 'Gobindo', 'Saha', 407477, 1502002729, 'gobindo.saha2002@gmail.com', 'gobindo', '$2y$10$ce/HOFw0oNN2pwbnNMwJaujMOgOd8gM/sNgedy7tuXjNYVuo90Vji', '01717568377', NULL, 1, '2022-10-12 08:27:40'),
(3, 'Apurbo', 'Sorkar', 406507, 1502041342, 'apurbosorkar198@gmail.com', 'apurbo', '$2y$10$s4yoABA/syqkytCNx9wgXu0QTnegMn/hAHrwRpyPP5Bvx6SiGcxpa', '01314130285', NULL, 1, '2022-10-12 14:50:11'),
(4, 'Bhubon', 'Mohanto', 407326, 1502041342, 'mohantobhubon2002@gmail.com', 'bhubonmohanto', '$2y$10$dLesGyzB5/25sNpXto2OseIaXTVsDbTKTCQPsctPVCL1E/JJBAXqi', '01518749694', NULL, 1, '2022-10-13 05:11:24'),
(5, 'Bipul', 'Roy', 406389, 1900220867, 'bray86271@gmail.com', 'bipulroy', '$2y$10$ug9FZ8KC4jX3hL3CXXLWV.ZHX.DKQmbD3sMHnx5i8WnBqzINjq6h6', '01780717148', NULL, 1, '2022-10-13 15:21:12'),
(7, 'Durjoy', 'Roy', 226846, 1917741333, 'durjoyroy2005@gmai.com', 'durjoy', '$2y$10$xtPiBbYKGEBkmH9yNxvBO.4QWNVcO99tk5e/g3lu8uvoLftTyKzVW', '01861369397', NULL, 1, '2022-10-21 06:50:38'),
(10, 'Monish', 'Roy', 407401, 1502002992, 'monishroy87@gmail.com', 'monish', '$2y$10$Vb.f9Vb1W87Xo0js2RP0a.UG3k5NXpJ2jeRqHEna.d43mMhGCMuyG', '01817603163', NULL, 1, '2022-10-21 07:47:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraian`
--
ALTER TABLE `libraian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libraian`
--
ALTER TABLE `libraian`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
