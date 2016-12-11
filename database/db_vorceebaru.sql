-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 10:33 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vorcee`
--

-- --------------------------------------------------------

--
-- Table structure for table `vc_ads`
--

CREATE TABLE `vc_ads` (
  `id_ads` int(11) NOT NULL,
  `name_ads` varchar(100) NOT NULL,
  `image_ads` varchar(200) NOT NULL,
  `link_ads` varchar(200) NOT NULL,
  `description_ads` longtext NOT NULL,
  `fee_ads` decimal(10,0) NOT NULL,
  `price_ads` decimal(10,0) NOT NULL,
  `current_price` decimal(10,0) NOT NULL,
  `date_ads` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_banner`
--

CREATE TABLE `vc_banner` (
  `id_banner` int(11) NOT NULL,
  `title_banner` varchar(150) NOT NULL,
  `image_banner` varchar(200) NOT NULL,
  `caption_banner` longtext NOT NULL,
  `link_banner` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_category`
--

CREATE TABLE `vc_category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(200) NOT NULL,
  `image_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_category`
--

INSERT INTO `vc_category` (`id_category`, `name_category`, `image_category`) VALUES
(1, 'fashion', ''),
(2, 'Performace Art', ''),
(3, 'Craft', ''),
(4, 'Design', ''),
(5, 'Media', ''),
(6, 'Music', ''),
(7, 'Publishing', ''),
(8, 'Advertising', ''),
(9, 'Art Market', ''),
(10, 'Architecture', ''),
(11, 'Computer', ''),
(12, 'Research Development', '');

-- --------------------------------------------------------

--
-- Table structure for table `vc_class`
--

CREATE TABLE `vc_class` (
  `id_class` int(11) NOT NULL,
  `date_class` date NOT NULL,
  `place_class` varchar(100) NOT NULL,
  `time_class` varchar(100) NOT NULL,
  `title_class` varchar(100) NOT NULL,
  `description_class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_hit_ads`
--

CREATE TABLE `vc_hit_ads` (
  `id_hit_ads` bigint(20) NOT NULL,
  `id_ads` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `date_hit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_order`
--

CREATE TABLE `vc_order` (
  `id_order` bigint(20) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `date_order` int(11) NOT NULL,
  `status_order` tinyint(4) NOT NULL COMMENT '0: Pending, 1: Process, 2: Done'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_payment`
--

CREATE TABLE `vc_payment` (
  `id_payment` int(11) NOT NULL,
  `name_payment` varchar(200) NOT NULL,
  `account_name` varchar(200) NOT NULL,
  `account_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_product`
--

CREATE TABLE `vc_product` (
  `id_product` int(11) NOT NULL,
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
  `time_mod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_setting`
--

CREATE TABLE `vc_setting` (
  `id_setting` int(11) NOT NULL,
  `about` longtext NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `campaign_report` longtext NOT NULL,
  `achievement` longtext NOT NULL,
  `address` longtext NOT NULL,
  `partner` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_tip`
--

CREATE TABLE `vc_tip` (
  `id_tip` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `tip` decimal(10,0) NOT NULL,
  `date_tip` datetime NOT NULL,
  `status_tip` tinyint(1) NOT NULL COMMENT '0: Pending, 1: Win, 2: Loose'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vc_user`
--

CREATE TABLE `vc_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` longtext NOT NULL,
  `gender` tinyint(1) NOT NULL COMMENT '0: Note Set, 1: Male, 2: Female',
  `phone_number` varchar(20) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `about_user` longtext NOT NULL,
  `organization_name` varchar(100) NOT NULL,
  `status_user` tinyint(1) NOT NULL COMMENT '0: Nonactive, 1: Active, 2: Banned',
  `permission` tinyint(1) NOT NULL COMMENT '0: Creator, 1: Admin, 2: Learner',
  `date_register` datetime NOT NULL,
  `date_login` datetime NOT NULL,
  `contact_person` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_user`
--

INSERT INTO `vc_user` (`id_user`, `username`, `password`, `full_name`, `avatar`, `email`, `address`, `gender`, `phone_number`, `mobile`, `country`, `province`, `city`, `about_user`, `organization_name`, `status_user`, `permission`, `date_register`, `date_login`, `contact_person`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'zuhdi', '', '', '', 1, '', '', '', '', '', '', '', 1, 1, '2016-08-03 12:24:33', '0000-00-00 00:00:00', ''),
(2, 'vorcee', 'a8f5f167f44f4964e6c998dee827110c', 'Diena Adyanthy', 'asset/images/user/1.jpg', 'diana@gmail.com', 'Bsd Cipondoh', 2, '0812345566', '', 'Indonesia', 'Jabar', 'jakarta', 'Namaku Diena Adyanthy , saya tinggal di bsd , saya seorang artis ternama , semua orang kenal saya , bahkan kalo saya keluar paparazi dimana mana hahaha, itulah saya :)', '', 1, 2, '2016-08-01 12:16:47', '0000-00-00 00:00:00', ''),
(3, 'andien', 'asdasd', 'Andien Aisyah', 'asset/images/user/andien.jpg', 'andien@gmail.com', 'jalan kavling ui', 0, '08123123123', '', 'Indonesia', 'Jabar', 'Bandung', 'artis', '', 1, 0, '2016-10-13 06:14:51', '0000-00-00 00:00:00', ''),
(4, 'hihooxz', '7815696ecbf1c96e6894b779456d330e', '', '', 'hihooxz@gmail.com', '', 0, '', '', '', '', '', '', '', 0, 2, '2016-12-09 11:35:21', '0000-00-00 00:00:00', ''),
(5, 'asd', '7815696ecbf1c96e6894b779456d330e', '', '', 'asd@gmail.com', 'asd', 0, '123', '123', '', '', '', '', 'asd', 0, 0, '2016-12-09 16:56:14', '0000-00-00 00:00:00', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `vc_workshop`
--

CREATE TABLE `vc_workshop` (
  `id_workshop` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `workshop_title` varchar(200) NOT NULL,
  `workshop_description` longtext NOT NULL,
  `event_goal` varchar(100) NOT NULL,
  `image_workshop` varchar(200) NOT NULL,
  `course_fee` int(11) NOT NULL,
  `hour_start` varchar(200) NOT NULL,
  `hour_end` varchar(200) NOT NULL,
  `date_workshop` date NOT NULL,
  `date_insert` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_workshop`
--

INSERT INTO `vc_workshop` (`id_workshop`, `id_category`, `workshop_title`, `workshop_description`, `event_goal`, `image_workshop`, `course_fee`, `hour_start`, `hour_end`, `date_workshop`, `date_insert`) VALUES
(1, 1, 'fashion good', 'fashion is gooda', '', 'asset/images/workshop/asos4.jpg', 100000, '12:30 PM', '15:00 PM', '2016-11-15', '2016-11-16'),
(2, 0, 'motorola', 'bagi bagi handphone', 'goal', 'asset/images/workshop/Wood_Texture.jpg', 0, '12/12/2016', '12/15/2016', '1970-01-01', '2016-12-11'),
(3, 6, 'Konser Amal', 'nyanyi', 'Uang', 'asset/images/workshop/Wood_Texture.jpg', 0, '12/11/2016', '12/15/2016', '1970-01-01', '2016-12-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vc_ads`
--
ALTER TABLE `vc_ads`
  ADD PRIMARY KEY (`id_ads`);

--
-- Indexes for table `vc_banner`
--
ALTER TABLE `vc_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `vc_category`
--
ALTER TABLE `vc_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `vc_class`
--
ALTER TABLE `vc_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `vc_hit_ads`
--
ALTER TABLE `vc_hit_ads`
  ADD PRIMARY KEY (`id_hit_ads`);

--
-- Indexes for table `vc_order`
--
ALTER TABLE `vc_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `vc_payment`
--
ALTER TABLE `vc_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `vc_product`
--
ALTER TABLE `vc_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `vc_setting`
--
ALTER TABLE `vc_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `vc_tip`
--
ALTER TABLE `vc_tip`
  ADD PRIMARY KEY (`id_tip`);

--
-- Indexes for table `vc_user`
--
ALTER TABLE `vc_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vc_workshop`
--
ALTER TABLE `vc_workshop`
  ADD PRIMARY KEY (`id_workshop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vc_ads`
--
ALTER TABLE `vc_ads`
  MODIFY `id_ads` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_banner`
--
ALTER TABLE `vc_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_category`
--
ALTER TABLE `vc_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vc_class`
--
ALTER TABLE `vc_class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_hit_ads`
--
ALTER TABLE `vc_hit_ads`
  MODIFY `id_hit_ads` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_order`
--
ALTER TABLE `vc_order`
  MODIFY `id_order` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_payment`
--
ALTER TABLE `vc_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_product`
--
ALTER TABLE `vc_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_setting`
--
ALTER TABLE `vc_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_tip`
--
ALTER TABLE `vc_tip`
  MODIFY `id_tip` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vc_user`
--
ALTER TABLE `vc_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vc_workshop`
--
ALTER TABLE `vc_workshop`
  MODIFY `id_workshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
