-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 09:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `email`, `message`) VALUES
(3, 'bilalshariq@gmail.conm', 'kjjjjjjjjjjjjjj\r\n'),
(5, 'BILALSHARIQ1234@GMAIL.COM', 'dsad'),
(6, 'ahsirakhan1234@gmail.com', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userimage` varchar(200) NOT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `userimage`, `usertype`) VALUES
(7, 'MichaelBrown', 'MichaelBrown@example.com', 'password5', 'image5.jpeg', 'user'),
(9, 'JamesMiller', 'JamesMiller@example.com', 'password7', 'image1.jpeg', 'user'),
(11, 'DanielJones', 'DanielJones@example.com', 'password9', 'image5.jpeg', 'user'),
(13, 'JohnDoe', 'JohnDoe@example.com', 'password1', 'image1.jpeg', 'user'),
(31, 'sddd', 'bilal@gmail.com', '1234', 'IMG_20231006_163227_658.jpg', 'user'),
(33, 'bilal', 'bilalshariq@gmail.conm', '1234', 'admin.jpg', 'admin'),
(34, 'wahaj', 'bilalshariq@gmail.conm', '1234', 'user.jpg', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `messagebox`
--

CREATE TABLE `messagebox` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messagebox`
--

INSERT INTO `messagebox` (`id`, `name`, `email`, `phone`, `message`) VALUES
(36, 'ksHD', 'bilalshariq@gmail.conm', '0313213', 'kuhsdhg'),
(58, 'Iron Man', 'bilalshariq1234@gmail.com', '03132496670', 'sss'),
(60, 'Iron Man', 'bilalshariq1234@gmail.com', '03132496670', 'sss'),
(66, 'Iron Man', 'bilalshariq1234@gmail.com', '03132496670', 'sss'),
(71, 'aadqwd', 'bilalshariq1234@gmail.com', '03132496670', 's\r\n'),
(80, 'bilall', 'bilal@gmail.com', '03132496670', 'dHJGDJWQ'),
(81, 'bilall', 'bilal@gmail.com', '03132496670', 'dHJGDJWQ'),
(82, 'sg', 'ahsirakhan1234@gmail.com', '03132496670', 'adxsad'),
(83, 'sg', 'ahsirakhan1234@gmail.com', '03132496670', 'adxsad');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `m_image` varchar(50) NOT NULL,
  `y_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `m_image`, `y_link`) VALUES
(1, 'The Killer', 'killer.jpg', 'https://www.youtube.com/watch?v=5S7FR_HCg9g'),
(2, 'The Railway Men', 'rail.jpg', 'https://www.youtube.com/watch?v=iD3TZ_Xxc14'),
(3, 'The Avengers', 'slide3.jpg', 'https://www.youtube.com/watch?v=6ZfuNTqbHE8'),
(4, 'Justice League', 'justice.jpg', 'https://www.youtube.com/watch?v=3cxixDgHUYw'),
(8, 'Iron Man', 'ironman.jpg', 'https://www.youtube.com/watch?v=Ke1Y3P9D0Bc');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(11) NOT NULL,
  `theater_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `theater_name`) VALUES
(7, 'Clifton'),
(8, 'DHA Phase II'),
(9, 'DHA Phase IV'),
(10, 'Shara-e-faisal'),
(11, 'Defence');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `seat` varchar(50) NOT NULL,
  `theater` varchar(200) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `email`, `phone`, `seat`, `theater`, `time`, `date`) VALUES
(14, 'The Killer', 'ahsirakhan1234@gmail.com', '03132496670', 'Basic', 'Clifton', '9-11', '0333-03-31'),
(15, 'The Railway Men', 'bilal@gmail.com', '03132496670', 'Basic', 'DHA Phase II', '9-11', '0111-11-11'),
(18, 'The Killer', 'BILALSHARIQ1234@GMAIL.COM', '03132496670', 'Basic', 'Clifton', '9-11', '11111-11-11'),
(19, 'The Railway Men', 'bilal@gmail.com', '03132496670', 'Cenimatic', 'DHA Phase II', '11-1', '20233-11-22'),
(20, 'The Killer', 'BILALSHARIQ1234@GMAIL.COM', '03132496670', 'Primium', 'DHA Phase II', '11-1', '0111-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagebox`
--
ALTER TABLE `messagebox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `messagebox`
--
ALTER TABLE `messagebox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
