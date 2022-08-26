-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2021 at 02:17 PM
-- Server version: 10.3.18-MariaDB-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srinathschool_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(200) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `desi` longtext NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `dom` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `heading`, `desi`, `doc`, `dom`) VALUES
(1, 'About Us', 'SPS is known for its high morals of Goodness before Greatness and for its academic propagation, discipline, values and ethics. Srinath Public School is a co-educational English medium, progressive school. The academic curriculum at SPS is based on wisdom of the past with an eye to the future. It is an education designed to succeed in coming millennium.  Srinath Public School provides a comprehensive education that will serve both in career as well as in personal life-an education that will prepare your child for a life time of learning. Srinath Public School which provides a secure and supportive environment of learning to the students. We do believe that education for the life involves much more and in order to achieve the goal, students are encouraged to develop create and logical thinking so that they can set high standards for themselves to achieve success in life. The school has an impressive and an imposing Infrastructure, which is divided into two blocks. There are bright and spacious classrooms and activity centers. The school also houses an Art, Music and Activity wing.', '2021-06-11 11:53:22', '2021-07-25 19:28:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
