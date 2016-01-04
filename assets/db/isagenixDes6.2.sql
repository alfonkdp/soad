-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Des 2015 pada 08.02
-- Versi Server: 5.5.34
-- Versi PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `isagenix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_article`
--

CREATE TABLE IF NOT EXISTS `isgx_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(2) DEFAULT NULL,
  `category_article_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `isgx_article`
--

INSERT INTO `isgx_article` (`article_id`, `user_id`, `category_article_id`, `title`, `slug`, `body`, `image`, `create_date`) VALUES
(3, NULL, 2, 'Keren ga Bro 3', 'keren-ga-bro-4', '<p>Keren ga Bro 22</p>\r\n', '', '2015-12-02 14:22:08'),
(20, NULL, 3, 'test judul', 'test-judul-3', '<p>sdfssdfsdfsfdsf</p>\r\n', '', '2015-12-02 14:15:14'),
(22, NULL, 1, 'sdfsf', 'sdfsf', '<p>sdfsdf</p>\r\n', '', '2015-12-02 14:03:49'),
(25, NULL, 1, 'test judul', 'test-judul-1', '<p>sdfsdf</p>\r\n', '', '2015-12-02 14:07:22'),
(26, NULL, 1, 'test judul', 'test-judul-2', '<p>sdfs</p>\r\n', '', '2015-12-02 14:07:31'),
(27, NULL, 3, 'test judul', 'test-judul-3', '<p>13sdfsdfsdf</p>\r\n', '', '2015-12-02 14:18:37'),
(28, NULL, 1, 'haidar test', 'haidar-test', '<p>haidar</p>\r\n\r\n<p><strong>test</strong></p>\r\n', '', '2015-12-05 05:47:26'),
(29, NULL, 2, 'sdfsdf', 'sdfsdf', '<p>sfsafsdf</p>\r\n', '', '2015-12-05 05:51:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_article_image`
--

CREATE TABLE IF NOT EXISTS `isgx_article_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(1000) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '1=active, 0=not_active',
  `ext` varchar(20) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `size` float DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `compress_img_url` varchar(2000) DEFAULT NULL,
  `medium_url` varchar(255) DEFAULT NULL,
  `small_url` varchar(1000) DEFAULT NULL,
  `thumbnail_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_category`
--

CREATE TABLE IF NOT EXISTS `isgx_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `shortdesc` varchar(255) DEFAULT NULL,
  `description` text,
  `shortdesc_en` varchar(300) DEFAULT NULL,
  `description_en` text,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = not active',
  `parentid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `isgx_category`
--

INSERT INTO `isgx_category` (`category_id`, `category_name`, `slug`, `shortdesc`, `description`, `shortdesc_en`, `description_en`, `status`, `parentid`) VALUES
(1, 'susu', 'susu', NULL, 'susu', NULL, 'susu', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_category_article`
--

CREATE TABLE IF NOT EXISTS `isgx_category_article` (
  `category_article_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `shortdesc` varchar(255) DEFAULT NULL,
  `description` text,
  `shortdesc_en` varchar(300) DEFAULT NULL,
  `description_en` text,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = not active',
  `parentid` int(11) NOT NULL DEFAULT '0',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_article_id`),
  UNIQUE KEY `category_id` (`category_article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `isgx_category_article`
--

INSERT INTO `isgx_category_article` (`category_article_id`, `category_name`, `slug`, `shortdesc`, `description`, `shortdesc_en`, `description_en`, `status`, `parentid`, `create_date`) VALUES
(1, 'news', 'news', NULL, '<p>news</p>\r\n', NULL, NULL, 1, 0, '2015-12-02 14:13:01'),
(2, 'testimonial', 'testimonial', NULL, '<p>testimonial</p>\r\n', NULL, NULL, 1, 0, '2015-12-02 14:13:01'),
(3, 'Page', 'page', NULL, '<p>Page</p>\r\n', NULL, NULL, 1, 0, '2015-12-02 14:13:01'),
(4, 'facebook', 'facebook', NULL, '<p>facebook feed</p>\r\n', NULL, NULL, 1, 0, '2015-12-02 14:24:03'),
(5, 'test', 'n-a', NULL, 'test', NULL, 'test', 1, 0, '2015-12-05 04:06:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_facebook`
--

CREATE TABLE IF NOT EXISTS `isgx_facebook` (
  `fb_id` int(25) NOT NULL,
  `message` text NOT NULL,
  `picture_thumb` varchar(1000) DEFAULT NULL,
  `full_picture` varchar(1000) DEFAULT NULL,
  `link` varchar(1000) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `created_time` datetime NOT NULL,
  `from_id` int(25) NOT NULL,
  `object_id` int(25) DEFAULT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_page`
--

CREATE TABLE IF NOT EXISTS `isgx_page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(2) DEFAULT NULL,
  `category_id` int(2) NOT NULL DEFAULT '3',
  `title` varchar(1000) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `isgx_page`
--

INSERT INTO `isgx_page` (`page_id`, `user_id`, `category_id`, `title`, `slug`, `body`, `image`, `create_date`) VALUES
(1, NULL, 3, 'test haidar', '', '<p>test haidar</p>\r\n', '', '2015-12-02 11:35:22'),
(2, NULL, 3, 'our distributor', 'our-distributor', '<p>our distributor</p>\r\n', '', '2015-12-05 05:56:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_product`
--

CREATE TABLE IF NOT EXISTS `isgx_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(3) DEFAULT NULL,
  `name` varchar(300) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `shortdesc` varchar(255) DEFAULT NULL,
  `description` text,
  `shortdesc_en` varchar(500) DEFAULT NULL,
  `description_en` text,
  `product_order` int(11) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `grouping` varchar(16) DEFAULT NULL,
  `status` tinyint(3) DEFAULT '1' COMMENT '1=active, 2=not',
  `featured` tinyint(3) DEFAULT NULL COMMENT '1=featured,2=not',
  `other_feature` enum('none','most sold','new product') DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `price` double DEFAULT '0',
  `price_en` double DEFAULT '0',
  `stock` int(4) DEFAULT NULL,
  `unit_id` tinyint(2) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1' COMMENT 'changes if auth ready',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `stock_status` varchar(45) DEFAULT 'in-stock',
  `ship_restrict` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `isgx_product`
--

INSERT INTO `isgx_product` (`product_id`, `category_id`, `name`, `slug`, `shortdesc`, `description`, `shortdesc_en`, `description_en`, `product_order`, `class`, `grouping`, `status`, `featured`, `other_feature`, `image`, `thumbnail`, `price`, `price_en`, `stock`, `unit_id`, `user_id`, `create_date`, `stock_status`, `ship_restrict`) VALUES
(1, 1, 'susu', NULL, NULL, '', NULL, 'sdf', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 100000, 0, 10, 1, 1, '2015-12-05 05:02:29', 'in-stock', NULL),
(2, 1, 'test', NULL, NULL, '123', NULL, '123123', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 123123, 123, 10, 1, 1, '2015-12-05 05:36:57', 'in-stock', NULL),
(3, 1, 'jim', NULL, NULL, 'sdf', NULL, 'sdf', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 0, 0, 10, 1, 1, '2015-12-05 05:47:38', 'in-stock', NULL),
(4, 1, 'Jim Root', NULL, NULL, 'asdsad', NULL, 'asd', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 213, 0, 10, 1, 1, '2015-12-05 05:49:08', 'in-stock', NULL),
(5, NULL, 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, '2015-12-06 05:29:11', 'in-stock', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_product_image`
--

CREATE TABLE IF NOT EXISTS `isgx_product_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(1000) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '1=active, 0=not_active',
  `ext` varchar(20) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `size` float DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `compress_img_url` varchar(2000) DEFAULT NULL,
  `medium_url` varchar(255) DEFAULT NULL,
  `small_url` varchar(1000) DEFAULT NULL,
  `thumbnail_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `isgx_product_image`
--

INSERT INTO `isgx_product_image` (`image_id`, `product_id`, `img_name`, `create_date`, `full_name`, `status`, `ext`, `width`, `height`, `size`, `type`, `url`, `path`, `compress_img_url`, `medium_url`, `small_url`, `thumbnail_url`) VALUES
(1, 1, 'Penguins.jpg', '2015-12-06 05:45:01', NULL, 1, '.jpg', 1024, 768, 759.6, 'jpeg', '1.jpg', 'C:/xampp/htdocs/isagenix/assets/product/1.jpg', NULL, NULL, NULL, NULL),
(2, 2, 'Chrysanthemum.jpg', '2015-12-06 06:39:30', NULL, 1, '.jpg', 1024, 768, 858.78, 'jpeg', '2.jpg', 'C:/xampp/htdocs/isagenix/assets/product/2.jpg', NULL, NULL, NULL, NULL),
(3, 3, 'Desert.jpg', '2015-12-06 06:46:22', NULL, 1, '.jpg', 1024, 768, 826.11, 'jpeg', '3.jpg', 'C:/xampp/htdocs/isagenix/assets/product/3.jpg', NULL, NULL, NULL, NULL),
(4, 4, 'Hydrangeas.jpg', '2015-12-06 06:47:35', NULL, 1, '.jpg', 1024, 768, 581.33, 'jpeg', '4.jpg', 'C:/xampp/htdocs/isagenix/assets/product/4.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_size`
--

CREATE TABLE IF NOT EXISTS `isgx_size` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_code` varchar(3) NOT NULL,
  `size_name` varchar(100) NOT NULL,
  `size_description` text,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isgx_unit`
--

CREATE TABLE IF NOT EXISTS `isgx_unit` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `isgx_unit`
--

INSERT INTO `isgx_unit` (`unit_id`, `name`, `description`, `create_date`) VALUES
(1, 'pcs', 'per satuan unit', '2015-08-19 03:23:25'),
(2, 'kg', 'kilo gram satuan bisa gram bisa kilo', '2015-08-19 03:23:25'),
(3, 'ons', '1 ounces = 28 gram', '2015-08-19 03:25:17'),
(4, 'gr', 'gram', '2015-09-08 23:03:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
