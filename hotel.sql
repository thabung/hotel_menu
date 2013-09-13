-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2013 at 06:49 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--
create database hotel;
use hotel;
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `item_description` text NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `category_id`, `category_name`, `item_description`) VALUES
(1, 'Starter item 1', 1, 'starter', 'Etiam laoreet vitae lacus at viverra. Sed at metus sem. Donec diam lorem, elementum vitae nisl in, iaculis faucibus ligula. Nam posuere enim lectus, sit amet imperdiet metus vulputate quis'),
(2, 'Starter item 2', 1, 'starter', 'Etiam laoreet vitae lacus at viverra. Sed at metus sem. Donec diam lorem, elementum vitae nisl in, iaculis faucibus ligula. Nam posuere enim lectus, sit amet imperdiet metus vulputate quis'),
(3, 'Main item 1', 2, 'main', 'Etiam laoreet vitae lacus at viverra. Sed at metus sem. Donec diam lorem, elementum vitae nisl in, iaculis faucibus ligula. Nam posuere enim lectus, sit amet imperdiet metus vulputate quis'),
(4, 'Main item 2', 2, 'main', 'Etiam laoreet vitae lacus at viverra. Sed at metus sem. Donec diam lorem, elementum vitae nisl in, iaculis faucibus ligula. Nam posuere enim lectus, sit amet imperdiet metus vulputate quis'),
(5, 'Desert item 1', 3, 'dessert', 'Etiam laoreet vitae lacus at viverra. Sed at metus sem. Donec diam lorem, elementum vitae nisl in, iaculis faucibus ligula. Nam posuere enim lectus, sit amet imperdiet metus vulputate quis'),
(6, 'Desert item 2', 3, 'dessert', 'Etiam laoreet vitae lacus at viverra. Sed at metus sem. Donec diam lorem, elementum vitae nisl in, iaculis faucibus ligula. Nam posuere enim lectus, sit amet imperdiet metus vulputate quis');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
