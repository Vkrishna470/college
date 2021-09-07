-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 08:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission-form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `income` int(255) NOT NULL,
  `reservation` int(255) NOT NULL,
  `handicap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `lastname`, `mobilenumber`, `gender`, `age`, `income`, `reservation`, `handicap`) VALUES
(1, 'mounika', 'vemula', '9000000000', 'male', '2010-07-10', 10000, 19, 'Yes,'),
(2, 'vamsi', 'krishna', '9686544129', 'female', '2010-05-12', 10000, 11, 'Yes,'),
(3, 'divya', 'pandraju', '9398100181', 'male', '2011-08-12', 1000, 27, 'Yes,'),
(4, 'sunitha', 'pandraju', '9123456789', 'female', '2010-09-11', 1000, 11, 'Yes,'),
(5, 'krishna', 'chellikani', '9123456789', 'male', '2010-06-09', 1000, 27, ''),
(6, 'venkat', 'chellikani', '9123456789', 'male', '2010-02-01', 1000, 27, 'Yes,'),
(7, 'naga', 'chellikani', '9123456789', 'male', '2010-02-02', 2000, 11, 'Yes,'),
(8, 'anil', 'cheellikani', '9987654321', 'male', '2010-02-01', 3000, 19, 'Yes,'),
(9, 'anusha', 'kondethi', '9876504321', 'female', '2010-01-01', 4000, 15, ''),
(10, 'chinnu', 'kakakak', '1234567890', 'male', '2010-02-09', 10000, 27, ''),
(11, 'mouni', 'venulala', '9090909090', 'female', '2010-02-11', 10100, 19, 'Yes,'),
(12, 'sudha', 'vavava', '9898989898', 'female', '2011-02-11', 9000, 15, ''),
(13, 'uma', 'vavava', '9898989898', 'male', '2010-11-11', 1000, 19, 'Yes,'),
(14, 'mouse', 'atthi', '9090909090', 'male', '2010-03-11', 2000, 19, 'Yes,'),
(15, 'kamala', 'fafafa', '9393939393', 'male', '2010-02-03', 10100, 27, 'Yes,'),
(16, 'devi', 'kakaka', '9696969696', 'female', '2010-04-11', 10100, 15, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
