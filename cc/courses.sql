-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 10:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janvi`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courses_id` int(11) NOT NULL,
  `price` int(5) NOT NULL,
  `description` text NOT NULL,
  `benefits` varchar(100) NOT NULL,
  `prerequisites` text NOT NULL DEFAULT 'No prior knowledge Required',
  `registered_students` int(5) NOT NULL,
  `course_status` int(1) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` float NOT NULL DEFAULT 5,
  `winner` int(2) UNSIGNED ZEROFILL NOT NULL,
  `completed_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courses_id`, `price`, `description`, `benefits`, `prerequisites`, `registered_students`, `course_status`, `course_title`, `image`, `rating`, `winner`, `completed_description`) VALUES
(1, 0, 'Our Web Developement Course will surely give you great experience of learning with fun. You will get amazing hands on learning experience.', 'HTML , CSS , JAVASCRIPT , MYSQL , PHP', 'Dedication For Learning', 500, 2, 'Python Programming', 'images/bg_courses.jpg', 5, 05, ''),
(2, 50, 'Our Web Developement Course will surely give you great experience of learning with fun. You will get amazing hands on learning experience.', 'Python, Logical thinking, Statastics', 'Dedication For Learning', 500, 2, 'Data Science', 'images/bg_courses.jpg', 5, 00, ''),
(3, 0, 'We taught basic of C programming at no cost. Our learners have learned fronm basics of c to advance level of C. We can proudly say that they are able to do competitive programming.', 'C programming, Coding Practice, Supervised Learning', 'No prior Knowledge Needed\r\n\r\n\r\n\r\n\r\n\r\n', 60, 0, 'C Programming', 'images/bg_courses.jpg', 5, 05, ''),
(4, 50, 'Our course had brought better in learners. we are always dedicated to teach you the best and to give best from our knowledge. \r\n', 'programming,coding,', '', 400, 0, 'Web Development', 'images/bg_courses.jpg', 4.3, 00, ''),
(5, 100, 'Our integrated Course will surely give you great experience of learning with fun. You will get amazing hands on learning experience.Also You will learn to think like a programmer.', 'Python, Data Science, Logical Thinking', 'No prior Knowledge Required', 5424, 1, 'Data Science With Python', 'images/bg_courses.jpg', 5, 00, ''),
(6, 500, 'Our Web Developement Course will surely give you great journey.', 'HTML,CSS, JS, BOOTSTRAP', 'No prior knowledge Required', 100, 1, 'Web Development', 'images/bg_courses.jpg', 3.9, 00, ''),
(7, 500, 'Our Web Developement Course will surely give you great journey.', 'HTML,CSS, JS, BOOTSTRAP', 'No prior knowledge Required', 100, 1, 'Web Development', 'images/bg_courses.jpg', 3.9, 00, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courses_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
