-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 08:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basketball`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(250) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `displayName` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `displayName`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123', 'Challengers Admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `event_id` varchar(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `event_id`, `userId`, `date`) VALUES
(1, 'dasdsadasdsadas', '2', '3', '2023-04-05 20:16:19'),
(2, 'hi', '2', '3', '2023-04-05 20:16:55'),
(3, 'dsfsdfsdfsdfsdfds', '5', '3', '2023-04-05 21:30:04'),
(4, 'hsdjsadjsadhsjahds', '1', '3', '2023-04-05 21:31:06'),
(5, 'iisdisadiaosidosaidd', '4', '4', '2023-04-05 22:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `query` varchar(250) NOT NULL,
  `text` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `query`, `text`) VALUES
(2, 'Yaqoob', ' yaqoob123@gmail.com', ' Events Query', 'hello admin');

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `id` bigint(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`id`, `name`, `location`, `image`) VALUES
(1, 'Ravenscourt Park', 'London,United Kingdom', 'download (1).jpg'),
(2, 'Argyle Square Public Basketball Court‎', 'London,United Kingdom', 'download (2).jpg'),
(3, 'Finsbury Park', 'London,United Kingdom', 'download (3).jpg'),
(4, 'Clapham Common Basketball Court', 'London,United Kingdom', 'download (4).jpg'),
(5, 'Brighton Beach Court', 'London,United Kingdom', 'download.jpg'),
(6, 'Victoria Park', 'Glasgow ,United Kingdom', 'images (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(250) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `location` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `time` varchar(250) DEFAULT NULL,
  `skill` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `userId`, `name`, `image`, `location`, `date`, `time`, `skill`) VALUES
(1, '2', 'NBL Senior Playoff Finals 2023 - Day 1', 'bbengland2-64.jpg', 'London,United Kingdom', '2023-04-20', '22:21', 'all'),
(2, '2', 'NBL Senior Playoff Finals 2023 - Day 2', 'images.jpg', 'London,United Kingdom', '2023-04-21', '22:26', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `event_attendees`
--

CREATE TABLE `event_attendees` (
  `id` bigint(250) NOT NULL,
  `event_id` varchar(250) DEFAULT NULL,
  `user_id` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_attendees`
--

INSERT INTO `event_attendees` (`id`, `event_id`, `user_id`) VALUES
(1, '3', '3'),
(2, '3', '3'),
(3, '4', '4'),
(4, '6', '4');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` bigint(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `profileImage` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `skill` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `username`, `profileImage`, `password`, `location`, `skill`) VALUES
(1, 'feedi', NULL, '12345', 'London', '2'),
(2, 'Ali Dhaku', NULL, '123456', 'Birmingham', '2'),
(3, 'ali player', '', 'ali123', 'Exeter', 'sadsad'),
(4, 'testing', NULL, '12345678', 'Dublin', 'Forward');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(250) NOT NULL,
  `userId` varchar(200) NOT NULL,
  `rating` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `teamId` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `userId`, `rating`, `comment`, `teamId`) VALUES
(1, '2', '5', 'fddsfdsf', '2'),
(2, '2', '5', 'sadasdsad', '2'),
(3, '2', '4', 'dcdasda', '1'),
(4, '2', '5', 'sadsadsad', '1'),
(5, '3', '5', 'sdsadasdsad', '1'),
(6, '3', '5', 'this is a best Team on this platform', '3'),
(7, '3', '5', 'gfgfghfghf', '4'),
(8, '4', '5', 'hi thhsoadjkasdl', '4');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(250) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `location` varchar(250) DEFAULT NULL,
  `skill` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `userId`, `name`, `image`, `location`, `skill`) VALUES
(1, '1', 'hello world', 'istockphoto-913709246-612x612.jpg', 'London', '3'),
(2, '1', 'hello world', 'resize.jpeg', 'London,UK', 'sadsad'),
(3, '2', 'hamsa', '311229430_105370022361172_3398629919751232709_n-removebg-preview.png', 'London,UK', 'sadsad'),
(4, '3', 'hamsasa', 'istockphoto-913709246-612x612.jpg', 'public_html/wholecyberhumaninitiative/greyscale-report/images', 'sadsad'),
(5, '4', 'testing team', '324562239_5916178458446053_6657745088406894835_n.jpg', 'UK', 'hhehehe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_attendees`
--
ALTER TABLE `event_attendees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courts`
--
ALTER TABLE `courts`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_attendees`
--
ALTER TABLE `event_attendees`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
