-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2016 pada 09.17
-- Versi Server: 5.5.34
-- Versi PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_vorcee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `vc_ads`
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
-- Struktur dari tabel `vc_banner`
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
-- Struktur dari tabel `vc_category`
--

CREATE TABLE IF NOT EXISTS `vc_category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(200) NOT NULL,
  `image_category` varchar(200) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `vc_hit_ads`
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
-- Struktur dari tabel `vc_product`
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
-- Struktur dari tabel `vc_setting`
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
-- Struktur dari tabel `vc_tip`
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
-- Struktur dari tabel `vc_user`
--

CREATE TABLE IF NOT EXISTS `vc_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL COMMENT '0: Note Set, 1: Male, 2: Female',
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `about_user` longtext NOT NULL,
  `status_user` tinyint(1) NOT NULL COMMENT '0: Nonactive, 1: Active, 2: Banned',
  `permission` tinyint(1) NOT NULL COMMENT '0: Donatur, 1: Admin, 2: Campaigner',
  `date_register` datetime NOT NULL,
  `date_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
