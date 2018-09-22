
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2014 at 09:27 PM
-- Server version: 5.1.58
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a6592088_baby`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` VALUES(1, 'Starter');
INSERT INTO `category` VALUES(2, 'Soup');
INSERT INTO `category` VALUES(3, 'Drink');
INSERT INTO `category` VALUES(4, 'Entree');
INSERT INTO `category` VALUES(5, 'Side');
INSERT INTO `category` VALUES(6, 'Fried Rice and Lo Mian');
INSERT INTO `category` VALUES(7, 'Kid''s Meal');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` varchar(25) NOT NULL,
  `user_psw` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` VALUES('782aa8eb', '123456', 'Yunchao Liu', '34 Bunker Hill', '4694075363', '315741179@gmail.com');
INSERT INTO `customers` VALUES('7830fbe5', '123', 'li chu ', '34 Bunker Hill', '4694075363', '12580_123@sina.com');
INSERT INTO `customers` VALUES('b2d1e124', '123456789', 'Mark', '123456789', '1234567890', '123456789@gmail.com');
INSERT INTO `customers` VALUES('4d03fb37', '123456789', 'asdfgh', 'asdfgh', '1234567890', 'asdfgh@gmail.com');
INSERT INTO `customers` VALUES('77f47510', '111', '111', '111', '111', '1111@sina.com');
INSERT INTO `customers` VALUES('26fe849c', '123', 'billy', '7780 mc', '4692375882', '707455452@qq.com');
INSERT INTO `customers` VALUES('da6352f6', '1234', 'billy', '7780 MC', '4692375882', 'appleprince2@sina.com');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `name` varchar(25) NOT NULL,
  `category_id` int(2) NOT NULL,
  `price` double NOT NULL,
  `is_available` varchar(3) NOT NULL DEFAULT 'YES',
  `description` varchar(100) NOT NULL,
  `dish_id` int(3) NOT NULL,
  PRIMARY KEY (`dish_id`),
  KEY `fk_dishes` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` VALUES('Egg Roll', 1, 1.25, 'YES', '', 1);
INSERT INTO `dishes` VALUES('Steamed Dumpling', 1, 4.99, 'YES', '', 2);
INSERT INTO `dishes` VALUES('Fried Dumpling', 1, 4.99, 'YES', '', 3);
INSERT INTO `dishes` VALUES('Chicken Wing', 1, 4.99, 'YES', '', 4);
INSERT INTO `dishes` VALUES('Crab Ragoon', 1, 4.99, 'YES', '', 5);
INSERT INTO `dishes` VALUES('Egg Drop Soup', 2, 1.99, 'YES', '', 6);
INSERT INTO `dishes` VALUES('Hot Sour Soup', 2, 1.99, 'YES', '', 7);
INSERT INTO `dishes` VALUES('Wonton Soup', 2, 1.99, 'YES', '', 8);
INSERT INTO `dishes` VALUES('Miso Soup', 2, 1.99, 'YES', '', 9);
INSERT INTO `dishes` VALUES('Soda', 3, 1.99, 'YES', '', 11);
INSERT INTO `dishes` VALUES('Ice Tea', 3, 1.99, 'YES', '', 12);
INSERT INTO `dishes` VALUES('Hot Tea', 3, 1.99, 'YES', '', 13);
INSERT INTO `dishes` VALUES('HAPPY FAMILY NEST', 4, 13.99, 'YES', '', 21);
INSERT INTO `dishes` VALUES('GENERAL TSAO’S CHICKEN', 4, 8.99, 'YES', '', 22);
INSERT INTO `dishes` VALUES('WALNUT HONEY MAYO CHICKEN', 4, 8.99, 'YES', '', 23);
INSERT INTO `dishes` VALUES('SESAME CHICKEN', 4, 8.99, 'YES', '', 24);
INSERT INTO `dishes` VALUES('ORANGE CHICKEN', 4, 8.99, 'YES', '', 25);
INSERT INTO `dishes` VALUES('CHICKEN FRIED RICE', 6, 7.99, 'YES', '', 31);
INSERT INTO `dishes` VALUES('BEEF FRIED RICE', 6, 8.99, 'YES', '', 32);
INSERT INTO `dishes` VALUES('SHRIMP FIRED RICE', 6, 8.99, 'YES', '', 33);
INSERT INTO `dishes` VALUES('Fired Rice', 5, 1.99, 'YES', '', 41);
INSERT INTO `dishes` VALUES('Steamed Rice', 5, 1.99, 'YES', '', 42);
INSERT INTO `dishes` VALUES('Steamed Noodle', 5, 1.99, 'YES', '', 43);

-- --------------------------------------------------------

--
-- Table structure for table `my_order`
--

CREATE TABLE `my_order` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `my_order`
--

INSERT INTO `my_order` VALUES(10, '00000000', 16.22);
INSERT INTO `my_order` VALUES(9, '26fe849c', 81.1);
INSERT INTO `my_order` VALUES(8, '782aa8eb', 71.11);
INSERT INTO `my_order` VALUES(7, '7830fbe5', 26.21);
INSERT INTO `my_order` VALUES(11, '00000000', 16.22);
INSERT INTO `my_order` VALUES(12, '26fe849c', 51.15);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `dish_id` int(3) NOT NULL,
  `quantity` int(3) NOT NULL,
  PRIMARY KEY (`order_id`,`dish_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` VALUES(7, 5, 4);
INSERT INTO `order_details` VALUES(7, 4, 0);
INSERT INTO `order_details` VALUES(7, 3, 0);
INSERT INTO `order_details` VALUES(7, 1, 5);
INSERT INTO `order_details` VALUES(7, 2, 0);
INSERT INTO `order_details` VALUES(8, 1, 1);
INSERT INTO `order_details` VALUES(8, 2, 2);
INSERT INTO `order_details` VALUES(8, 3, 3);
INSERT INTO `order_details` VALUES(8, 4, 5);
INSERT INTO `order_details` VALUES(8, 5, 4);
INSERT INTO `order_details` VALUES(9, 1, 5);
INSERT INTO `order_details` VALUES(9, 2, 0);
INSERT INTO `order_details` VALUES(9, 3, 12);
INSERT INTO `order_details` VALUES(9, 4, 0);
INSERT INTO `order_details` VALUES(9, 5, 3);
INSERT INTO `order_details` VALUES(10, 1, 1);
INSERT INTO `order_details` VALUES(10, 2, 1);
INSERT INTO `order_details` VALUES(10, 3, 1);
INSERT INTO `order_details` VALUES(10, 4, 1);
INSERT INTO `order_details` VALUES(10, 5, 0);
INSERT INTO `order_details` VALUES(11, 1, 1);
INSERT INTO `order_details` VALUES(11, 2, 1);
INSERT INTO `order_details` VALUES(11, 3, 1);
INSERT INTO `order_details` VALUES(11, 4, 1);
INSERT INTO `order_details` VALUES(11, 5, 0);
INSERT INTO `order_details` VALUES(12, 1, 1);
INSERT INTO `order_details` VALUES(12, 2, 3);
INSERT INTO `order_details` VALUES(12, 3, 3);
INSERT INTO `order_details` VALUES(12, 4, 2);
INSERT INTO `order_details` VALUES(12, 5, 2);
