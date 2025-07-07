-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 08:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inkfinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblnotes`
--

CREATE TABLE `tblnotes` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnotes`
--

INSERT INTO `tblnotes` (`id`, `username`, `title`, `content`) VALUES
(3, 'jah', 'Karina', 'sagfdhgteh'),
(5, 'jah', 'Giselle', 'RAWR'),
(6, 'mira', 'Jennie', 'fiwbdvifsivbifvbiuviunviovfvsdfvsdv'),
(7, 'jah', 'Winter', 'I LOVE WINTER!!!!! MINJEONGNGGNGNGNGNNGNGN'),
(9, 'jah', 'Maloi', 'Isabaw mo sa kanin ang ihi ng kambing!'),
(10, 'jah', 'Maloi', 'Isabaw mo sa kanin ang ihi ng kambing!'),
(11, 'jah', 'COLET', 'Bakit mo natanong?'),
(12, 'star', 'Snow', 'I miss you baby ko ><'),
(13, 'star', 'Oreo', 'kyot mo'),
(14, 'star', 'Hi', 'asfbvadfv'),
(17, 'star', 'Gigi', 'laki mo na'),
(18, 'star', 'Sky', 'asfvasvs'),
(19, 'star', 'Sky', 'asfvasvs'),
(20, 'star', 'Gigi', 'ergwteheth'),
(21, 'star', 'HAHA', 'advsdv');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`username`, `email`, `password`) VALUES
('jah', 'pjarmine000@gmail.com', '4352'),
('mira', 'pjarmine000@gmail.com', '6574'),
('star', 'pjarmine000@gmail.com', '346q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblnotes`
--
ALTER TABLE `tblnotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblnotes`
--
ALTER TABLE `tblnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
