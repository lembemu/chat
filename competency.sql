-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 10:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `competency`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `depart_id` int(11) NOT NULL,
  `depart_name` varchar(50) NOT NULL,
  `depart_descript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`depart_id`, `depart_name`, `depart_descript`) VALUES
(1, 'Programming', 'This group is for members to discuss about computer programming and web development. Feel free to share your ideas.'),
(2, 'Networking', 'This group is for members to discuss about computer networking. Feel free to share your ideas.'),
(3, 'Hardware', 'This group is for members to discuss about computer hardware and how we can solve computer problems. Feel free to share your ideas.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `sender_id`, `receiver_id`, `message`, `date`, `time`) VALUES
(1, 1, 2, 'hello man', '2022-05-02', '11:22:56'),
(2, 2, 1, 'sure sure', '2022-05-02', '12:00:34'),
(4, 1, 2, 'yes bro', '2022-06-21', '03:16:37'),
(5, 1, 6, 'mbuye finale', '2022-06-06', '09:09:43'),
(6, 1, 2, 'hello', '2022-06-06', '03:30:28'),
(7, 1, 2, 'yes man', '2022-06-06', '03:30:59'),
(8, 1, 2, 'msnakjxhdgs', '2022-06-06', '03:31:04'),
(9, 1, 2, 'jajshb', '2022-06-06', '03:31:10'),
(10, 1, 2, 'hgds', '2022-06-06', '03:31:14'),
(11, 6, 1, 'chiswa', '2022-06-06', '03:34:33'),
(12, 1, 6, 'yes man', '2022-06-06', '03:35:04'),
(13, 6, 1, 'chiswa', '2022-06-06', '03:35:12'),
(14, 1, 6, 'jdhfdsaj', '2022-06-06', '03:35:20'),
(15, 6, 1, 'dzikt bwa', '2022-06-06', '03:35:29'),
(16, 1, 6, 'whats happening', '2022-06-06', '03:35:57'),
(17, 6, 1, 'dzikt bwa', '2022-06-06', '03:36:19'),
(18, 6, 1, 'dzikt bwa', '2022-06-06', '03:36:49'),
(19, 1, 2, 'yes man', '2022-06-06', '03:55:30'),
(20, 6, 1, 'Yes mzambala', '2022-06-07', '11:18:05'),
(21, 1, 6, 'hello', '2022-06-07', '11:54:21'),
(22, 1, 6, 'hello', '2022-06-08', '02:54:11'),
(23, 1, 6, 'yes man', '2022-06-08', '03:25:13'),
(24, 1, 6, 'wh', '2022-06-08', '03:25:27'),
(25, 6, 1, 'Yes mzambala', '2022-06-08', '03:51:05'),
(26, 6, 1, 'Hello', '2022-06-08', '03:51:25'),
(27, 1, 6, 'hrlk', '2022-06-10', '08:39:17'),
(28, 6, 1, 'AYILE', '2022-06-10', '10:09:00'),
(29, 1, 6, 'ukuti bwanj', '2022-06-10', '10:09:47'),
(30, 1, 2, 'ukuti bwanj', '2022-06-10', '10:11:52'),
(31, 6, 1, 'zikt bwanj kumeneko', '2022-06-10', '10:14:17'),
(32, 1, 2, 'ukuti bwanj', '2022-06-10', '10:17:35'),
(33, 2, 1, 'Iwe your bwanj Kodi', '2022-06-10', '10:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(14) NOT NULL,
  `user_pass` varchar(16) NOT NULL,
  `user_pic` varchar(100) DEFAULT NULL,
  `depart_id` int(11) DEFAULT NULL,
  `user_status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `user_name`, `user_email`, `user_phone`, `user_pass`, `user_pic`, `depart_id`, `user_status`) VALUES
(1, 'Frank Lembemu', 'lembemu@gmail.com', '', 'lefra.c', 'iweyo.jpg', 1, 'offline'),
(2, 'Amos Kellie', 'a.kellie79@gmail.com', '', '!mark1234?', 'iweyo.jpg', 2, 'active now'),
(3, 'Maxwell Kalonga', 'kalonga@gmail.com', '', 'kalo2000', 'iweyo.jpg', 2, 'active now'),
(5, 'Nature Nsunza', 'naturetraps32@gmail.com', '0994021618', 'naturetraps', 'iweyo.jpg', NULL, 'offline'),
(6, 'Emman Macheso', 'emman.macheso99@gmail.com', '265884382860', 'emman9911', 'iweyo.jpg', NULL, 'active now'),
(8, 'Luke Jumbe', 'lukejumbe@gmail.com', '0994087167', 'luke1997', NULL, NULL, 'active'),
(10, 'Mathews Manda', 'mandam@gmail.com', '099782898', 'manda', NULL, NULL, 'active'),
(11, 'Mathews metemba', 'matemba@gmail.com', '0994087167', 'matemba', NULL, NULL, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`depart_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_pass` (`user_pass`),
  ADD KEY `depart_id` (`depart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `depart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`u_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`u_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`depart_id`) REFERENCES `departments` (`depart_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
