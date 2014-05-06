-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2014 at 08:35 PM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itp499`
--
CREATE DATABASE IF NOT EXISTS `itp499` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `itp499`;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`) VALUES
(1, 'Certified Fresh'),
(2, 'Fresh'),
(3, 'Rotten'),
(4, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `movietitle` varchar(100) NOT NULL,
  `rating_id` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `admin`, `movietitle`, `rating_id`) VALUES
(1, 'admin', 'password', 1, 'The Terminator', 2),
(2, 'david', 'laravel', 1, 'N/A', 1),
(3, 'user', 'password', 0, 'Terminator 2', 1),
(4, 'raiderfan22', 'haterade', 0, 'Bill and Ted''s Excellent Adventure', 2),
(6, 'user1', 'password1', 0, 'The Hunger Games', 1),
(7, 'mrsilencer', 'ttrojan', 0, 'The Shining', 1),
(8, 'user2', 'password2', 0, 'Madagascar', 3),
(9, 'user3', 'password3', 0, 'N/A', 4),
(10, 'blah', 'blah', 0, 'N/A', 4),
(11, 'weiner', 'weenie', 0, 'N/A', 4),
(13, 'mrmagooo', 'emporium', 0, 'N/A', 4),
(14, 'heman', 'orco', 0, 'N/A', 4),
(15, 'someone', 'something', 0, 'N/A', 4),
(16, 'are', 'you', 0, '', 4),
(17, 'wee', 'wee', 0, 'Finding Nemo 2', 1),
(19, 'jimcarrey', 'jimcarrey', 0, 'N/A', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
