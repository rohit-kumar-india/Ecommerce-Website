-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 25, 2020 at 03:24 PM
-- Server version: 5.7.19
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Nikon DSLR', 40000),
(3, 'Sony DSLR', 45000),
(4, 'Olympus DSLR', 50000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(12, 'Jhalsani', 1300),
(11, 'John Zok', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(2, 'Rohit Kumar', 'rohit.rk2146@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9631131636', 'patna', 'Bihar 803213'),
(4, 'vishal', 'vishal1234@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8670485624', 'kharagpur', 'gita college'),
(5, 'Meet', 'meetupadhyayamerica@gmail.com', '25f9e794323b453885f5181f1b624d0b', '8637570026', 'bhubaneshwar', 'gita'),
(6, 'ravi ranjan tiwari', 'raviranjantiwari96@gmail.com', '3ac59fe97f55a7ec871888ce8bc44767', '8917630051', 'motihari', 'misrouliya'),
(7, 'shivam kumar', 'shivamkr1107@gmail.com', '716dd7b5389df541170e312a64262ec7', '80510625654', 'bhubaneswar', 'gita college'),
(8, 'frankmiles', 'tom@tom.com', 'c33367701511b4f6020ec61ded352059', '-0001', '<scrpit>alert(\"bug\");</script>', '<xml><font><b>BUG</b></font></xml>'),
(9, 'ffrg', 'rohit2146@gmail.com', 'ab0b8a2d0de061765636f5f57634572c', '4545', 'fff', 'vfvdf'),
(10, 'sujit', 'sujit@gmail.com', '271cd3096e5105dcfbc701ad1ff967d9', '123456789', 'Patna', 'Panchsheel nagar, Barh');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Added to cart','Confirmed') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 2, 1, 'Confirmed'),
(2, 5, 1, 'Added to cart'),
(3, 2, 10, 'Confirmed'),
(7, 2, 11, 'Confirmed'),
(8, 7, 7, 'Confirmed'),
(9, 7, 8, 'Confirmed'),
(10, 7, 4, 'Confirmed'),
(11, 7, 10, 'Confirmed'),
(13, 7, 2, 'Added to cart'),
(14, 7, 3, 'Added to cart'),
(15, 7, 4, 'Added to cart'),
(16, 8, 2, 'Confirmed'),
(17, 8, 1, 'Confirmed'),
(18, 8, 10, 'Confirmed'),
(20, 2, 2, 'Confirmed'),
(21, 2, 10, 'Confirmed'),
(29, 2, 11, 'Confirmed'),
(23, 2, 12, 'Confirmed'),
(32, 2, 2, 'Confirmed'),
(28, 2, 9, 'Confirmed'),
(37, 2, 11, 'Confirmed'),
(35, 2, 3, 'Confirmed'),
(40, 10, 3, 'Confirmed'),
(39, 2, 2, 'Confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
