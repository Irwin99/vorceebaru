-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 07:22 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_vorcee`
--

-- --------------------------------------------------------

--
-- Table structure for table `vc_ads`
--

CREATE TABLE IF NOT EXISTS `vc_ads` (
  `id_ads` int(11) NOT NULL AUTO_INCREMENT,
  `name_ads` varchar(100) NOT NULL,
  `image_ads` varchar(200) NOT NULL,
  `link_ads` varchar(200) NOT NULL,
  `description_ads` longtext NOT NULL,
  `fee_ads` decimal(10,0) NOT NULL,
  `price_ads` decimal(10,0) NOT NULL,
  `current_price` decimal(10,0) NOT NULL,
  `date_ads` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_ads`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vc_banner`
--

CREATE TABLE IF NOT EXISTS `vc_banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `title_banner` varchar(150) NOT NULL,
  `image_banner` varchar(200) NOT NULL,
  `caption_banner` longtext NOT NULL,
  `link_banner` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vc_category`
--

CREATE TABLE IF NOT EXISTS `vc_category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) NOT NULL,
  `name_category` varchar(200) NOT NULL,
  `image_category` varchar(200) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `vc_category`
--

INSERT INTO `vc_category` (`id_category`, `id_parent`, `name_category`, `image_category`) VALUES
(1, 0, 'Clothes', ''),
(2, 0, 'Shoes', ''),
(3, 0, 'Bags', ''),
(4, 0, 'Accessories', ''),
(5, 0, 'Beauty', ''),
(6, 0, 'Sports', ''),
(7, 0, 'Vintages', ''),
(8, 1, 'Dresses', ''),
(9, 1, 'Rompers + Jumpsuits', ''),
(10, 1, 'Tops + Bodysuits', ''),
(11, 1, 'Denim', ''),
(12, 1, 'Bottoms', ''),
(13, 1, 'Swimwear', ''),
(14, 1, 'Jackets + Coats', ''),
(15, 1, 'Sweaters', ''),
(16, 2, 'Sandals', ''),
(17, 2, 'Heels', ''),
(18, 2, 'Boots + Booties', ''),
(19, 2, 'Sneakers', ''),
(20, 2, 'Platform', ''),
(21, 2, 'Flats', ''),
(22, 4, 'Jewelry', ''),
(23, 4, 'Sunglasses', ''),
(24, 4, 'Bags + Backpacks', ''),
(25, 4, 'Belts', ''),
(26, 4, 'Hair + Hats', ''),
(27, 4, 'Tech', ''),
(28, 4, 'Scarves + Bandana', ''),
(29, 4, 'Socks - Legwear', '');

-- --------------------------------------------------------

--
-- Table structure for table `vc_hit_ads`
--

CREATE TABLE IF NOT EXISTS `vc_hit_ads` (
  `id_hit_ads` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_ads` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `date_hit` datetime NOT NULL,
  PRIMARY KEY (`id_hit_ads`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vc_order`
--

CREATE TABLE IF NOT EXISTS `vc_order` (
  `id_order` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `date_order` int(11) NOT NULL,
  `status_order` tinyint(4) NOT NULL COMMENT '0: Pending, 1: Process, 2: Done',
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vc_payment`
--

CREATE TABLE IF NOT EXISTS `vc_payment` (
  `id_payment` int(11) NOT NULL,
  `name_payment` varchar(200) NOT NULL,
  `account_name` varchar(200) NOT NULL,
  `account_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_product`
--

CREATE TABLE IF NOT EXISTS `vc_product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_campaigner` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `start_price` decimal(10,0) NOT NULL,
  `current_price` decimal(10,0) NOT NULL,
  `image_product` varchar(200) NOT NULL,
  `about_product` longtext NOT NULL,
  `date_product` datetime NOT NULL,
  `date_end_campaign` datetime NOT NULL,
  `status_product` tinyint(1) NOT NULL COMMENT '0: Pending, 1: Active, 2: Sold, 3: Rejected',
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vc_setting`
--

CREATE TABLE IF NOT EXISTS `vc_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `about` longtext NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `campaign_report` longtext NOT NULL,
  `achievement` longtext NOT NULL,
  `address` longtext NOT NULL,
  `partner` longtext NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vc_tip`
--

CREATE TABLE IF NOT EXISTS `vc_tip` (
  `id_tip` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `tip` decimal(10,0) NOT NULL,
  `date_tip` datetime NOT NULL,
  `status_tip` tinyint(1) NOT NULL COMMENT '0: Pending, 1: Win, 2: Loose',
  PRIMARY KEY (`id_tip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vc_user`
--

CREATE TABLE IF NOT EXISTS `vc_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL COMMENT '0: Note Set, 1: Male, 2: Female',
  `full_name` varchar(200) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` longtext NOT NULL,
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `about_user` longtext NOT NULL,
  `status_user` tinyint(1) NOT NULL COMMENT '0: Nonactive, 1: Active, 2: Banned',
  `permission` tinyint(1) NOT NULL COMMENT '0: Donatur, 1: Admin, 2: Campaigner',
  `date_register` datetime NOT NULL,
  `date_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vc_user`
--

INSERT INTO `vc_user` (`id_user`, `username`, `password`, `email`, `gender`, `full_name`, `phone_number`, `address`, `country`, `province`, `city`, `about_user`, `status_user`, `permission`, `date_register`, `date_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'vorcee@gmail.com', 1, 'Vorcee', '0812345', 'Tangerang', 'Indonesia', 'Banten', 'Tangerang', 'Test', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
