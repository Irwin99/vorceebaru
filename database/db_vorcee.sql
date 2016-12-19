-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 05:23 PM
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
  `name_category` varchar(200) NOT NULL,
  `description_category` longtext NOT NULL,
  `image_category` varchar(200) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `vc_category`
--

INSERT INTO `vc_category` (`id_category`, `name_category`, `description_category`, `image_category`) VALUES
(1, 'Fashion', 'Here you can learn and improve your skill about Fashion from the expert practitioners in the field of creative indoestries.', ''),
(2, 'Design', 'Here you can learn and improve your skill about Design from the expert practitioners in the field of creative Industries', ''),
(3, 'Handcraft', 'Here you can learn and improve your skill about Handcraft from the expert practitioners in the field of creative industries.', ''),
(4, 'Media', 'Here you can learn and improve your skill about Media from the expert practitioners in the field of creative industries.\r\n', ''),
(5, 'Music', 'Here you can learn and improve your skill about Music from the expert practitioners in the field of creative industries', ''),
(6, 'Publishing', 'Here you can learn and improve your skill about Publishing from the expert practitioners in the field of creative industries.', ''),
(7, 'Marketing', 'Here you can learn and improve your skill about Marketing from the expert practitioners in the field of creative industries', ''),
(8, 'Art Market', 'Here you can learn and improve your skill about Art Market from the expert practitioners in the field of creative industries', ''),
(9, 'Architecture', 'Here you can learn and improve your skill about Architecture from the expert practitioners in the field of creative industries', ''),
(10, 'Performance Art', 'Here you can learn and improve your skill about Performance Art from the expert practitioners in the field of creative industries', ''),
(11, 'IT', 'Here you can learn and improve your skill about Information Technology (IT) from the expert practitioners in the field of creative industries', ''),
(12, 'Research Develoment', 'Here you can learn and improve your skill about Research Development from the expert practitioners in the field of creative industries', '');

-- --------------------------------------------------------

--
-- Table structure for table `vc_class`
--

CREATE TABLE IF NOT EXISTS `vc_class` (
  `id_class` int(11) NOT NULL AUTO_INCREMENT,
  `date_class` date NOT NULL,
  `place_class` varchar(100) NOT NULL,
  `time_class` varchar(100) NOT NULL,
  `title_class` varchar(100) NOT NULL,
  `description_class` varchar(100) NOT NULL,
  PRIMARY KEY (`id_class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `name_payment` varchar(200) NOT NULL,
  `account_name` varchar(200) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `dimension` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `date_product` datetime NOT NULL,
  `date_end_campaign` datetime NOT NULL,
  `status_product` tinyint(1) NOT NULL COMMENT '0: Pending, 1: Active, 2: Sold, 3: Rejected',
  `date_mod` date NOT NULL,
  `place_mod` varchar(100) NOT NULL,
  `time_mod` varchar(100) NOT NULL,
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
  `full_name` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` longtext NOT NULL,
  `gender` tinyint(1) NOT NULL COMMENT '0: Note Set, 1: Male, 2: Female',
  `phone_number` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `about_user` longtext NOT NULL,
  `status_user` tinyint(1) NOT NULL COMMENT '0: Nonactive, 1: Active, 2: Banned',
  `permission` tinyint(1) NOT NULL COMMENT '0: Donatur, 1: Admin, 2: Campaigner',
  `date_register` datetime NOT NULL,
  `date_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vc_user`
--

INSERT INTO `vc_user` (`id_user`, `username`, `password`, `full_name`, `avatar`, `email`, `address`, `gender`, `phone_number`, `country`, `province`, `city`, `about_user`, `status_user`, `permission`, `date_register`, `date_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'zuhdi', '', '', '', 1, '', '', '', '', '', 1, 1, '2016-08-03 12:24:33', '0000-00-00 00:00:00'),
(2, 'vorcee', '827ccb0eea8a706c4c34a16891f84e7b', 'Diena Adyanthy', 'asset/images/user/1.jpg', 'diana@gmail.com', 'Bsd Cipondoh', 0, '08123123123', 'Indonesia', 'Jabar', 'jakarta', 'Namaku Diena Adyanthy , saya tinggal di bsd , saya seorang artis ternama , semua orang kenal saya , bahkan kalo saya keluar paparazi dimana mana hahaha, itulah saya :)', 1, 2, '2016-08-01 12:16:47', '0000-00-00 00:00:00'),
(3, 'andien', 'a8f5f167f44f4964e6c998dee827110c', 'Andien Aisyah', 'asset/images/user/andien.jpg', 'andien@gmail.com', 'jalan kavling ui', 0, '08123123123', 'Indonesia', 'Jabar', 'Bandung', 'artis', 1, 2, '2016-10-13 06:14:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vc_workshop`
--

CREATE TABLE IF NOT EXISTS `vc_workshop` (
  `id_workshop` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `workshop_title` varchar(200) NOT NULL,
  `workshop_description` longtext NOT NULL,
  `image_workshop` varchar(200) NOT NULL,
  `course_fee` int(11) NOT NULL,
  `hour_start` varchar(200) NOT NULL,
  `hour_end` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `link_form` varchar(500) NOT NULL,
  `date_workshop` date NOT NULL,
  `date_insert` datetime NOT NULL,
  PRIMARY KEY (`id_workshop`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vc_workshop`
--

INSERT INTO `vc_workshop` (`id_workshop`, `id_category`, `workshop_title`, `workshop_description`, `image_workshop`, `course_fee`, `hour_start`, `hour_end`, `location`, `link_form`, `date_workshop`, `date_insert`) VALUES
(2, 1, 'Diena Fashion Workshop', 'Diena Fashion Workshop sangat bermanfaat sekali lho. Beneran Bermanfaat Banget banget. Diena Fashion Workshop sangat bermanfaat sekali lho. Beneran Bermanfaat Banget banget. Diena Fashion Workshop sangat bermanfaat sekali lho. Beneran Bermanfaat Banget banget. Diena Fashion Workshop sangat bermanfaat sekali lho. Beneran Bermanfaat Banget banget. Diena Fashion Workshop sangat bermanfaat sekali lho. Beneran Bermanfaat Banget banget. Diena Fashion Workshop sangat bermanfaat sekali lho. Beneran Bermanfaat Banget banget.', 'asset/images/workshop/workshop3.jpg', 200000, '09:00', '12:00', 'Kolega Tebet', '', '2016-11-29', '2016-11-22 06:20:24'),
(3, 3, 'Risda Craft', 'Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. Risda Craft memang ketje. ', 'asset/images/workshop/4e2b76_9d3ad773867b48739278861181c2b587.jpg', 500000, '11:00', '13:00', 'Kolega Tebet', '', '2016-11-30', '2016-11-22 09:28:00'),
(4, 4, 'Adyanthy Media Workshop', 'Adyanthy Media Workshop is great event. Adyanthy Media Workshop is great event. Adyanthy Media Workshop is great event. Adyanthy Media Workshop is great event. Adyanthy Media Workshop is great event. Adyanthy Media Workshop is great event. Adyanthy Media Workshop is great event. Adyanthy Media Workshop is great event. Adyanthy Media Workshop is great event. ', 'asset/images/workshop/emagazine.jpg', 500000, '07:00', '09:00', 'Kolega Tebets', 'http://google.com', '2016-12-05', '2016-11-22 10:01:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
