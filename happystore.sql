-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2018 at 04:29 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `happystore`
--
CREATE DATABASE IF NOT EXISTS `happystore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `happystore`;

-- --------------------------------------------------------

--
-- Table structure for table `camers`
--

CREATE TABLE IF NOT EXISTS `camers` (
  `id_camera` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`id_camera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `camers`
--

INSERT INTO `camers` (`id_camera`, `name`, `price`, `image`) VALUES
(1, 'Nikon DSLR', 40000, 'img/1.jpg'),
(2, 'canon', 43000, 'img/2.jpg'),
(3, 'Nikon SLR', 20000, 'img/3.jpg'),
(4, 'sony', 73000, 'img/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE IF NOT EXISTS `shirts` (
  `id_shirt` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`id_shirt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`id_shirt`, `name`, `price`, `image`) VALUES
(1, 'one', 2000, 'img/22.jpg'),
(2, 'two', 1200, 'img/23.jpg'),
(4, 'two', 1200, 'img/23.jpg'),
(6, 'four', 2200, 'img/25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `contact`, `city`) VALUES
(7, 'dittu', '743432', 'dittu@gad.co', 2147483647, 'cascas'),
(8, 'asa', '3423', 'asasc@asd.cas', 2147483647, 'asdasd'),
(9, 'bfa', 'bcsa', 'basc@as.co', 2147483647, 'syuih'),
(10, 'baae', 'uyt3332', 'baae@asas.co', 2147483647, 'bafa'),
(11, 'qweq', '4322', 'qwe@qw.ce', 2147483647, 'agads');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
