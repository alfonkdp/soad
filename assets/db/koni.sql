-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2016 at 10:47 AM
-- Server version: 5.6.27-0ubuntu1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koni`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` char(120) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `gender`, `company`) VALUES
(1, 'Maria Anders', 'male', 'Alfreds Futterkiste'),
(2, 'Ana Trujillo', 'male', 'Ana Trujillo Emparedados y helados'),
(3, 'Antonio Moreno', 'male', 'Antonio Moreno Taquería'),
(4, 'Hanna Moos', 'male', 'Blauer See Delikatessen'),
(5, 'Frédérique Citeaux', 'female', 'Blondel père et fils'),
(6, 'Laurence Lebihan', 'female', 'Bon app'''),
(7, 'Elizabeth Lincoln', 'female', 'Bottom-Dollar Markets'),
(8, 'Victoria Ashworth', 'female', 'B''s Beverages'),
(9, 'Patricio Simpson', 'female', 'Cactus Comidas para llevar'),
(10, 'Francisco Chang', 'female', 'Centro comercial Moctezuma'),
(11, 'Yang Wang', 'female', 'Chop-suey Chinese'),
(12, 'Pedro Afonso', 'male', 'Comércio Mineiro'),
(13, 'Elizabeth Brown', 'female', 'Consolidated Holdings'),
(14, 'Sven Ottlieb', 'male', 'Drachenblut Delikatessen'),
(15, 'Janine Labrune', 'female', 'Du monde entier'),
(16, 'Ann Devon', 'female', 'Eastern Connection'),
(17, 'Roland Mendel', 'male', 'Ernst Handel'),
(18, 'Aria Cruz', 'female', 'Familia Arquibaldo'),
(19, 'Diego Roel', 'female', 'FISSA Fabrica Inter. Salchichas S.A.'),
(20, 'Martine Rancé', 'male', 'Folies gourmandes'),
(21, 'Maria Larsson', 'female', 'Folk och fä HB'),
(22, 'Peter Franken', 'female', 'Frankenversand'),
(23, 'Carine Schmitt', 'male', 'France restauration'),
(24, 'Paolo Accorti', 'female', 'Franchi S.p.A.'),
(25, 'Lino Rodriguez', 'male', 'Furia Bacalhau e Frutos do Mar'),
(26, 'Eduardo Saavedra', 'male', 'Galería del gastrónomo'),
(27, 'José Pedro Freyre', 'male', 'Godos Cocina Típica'),
(28, 'André Fonseca', 'male', 'Gourmet Lanchonetes'),
(29, 'Howard Snyder', 'female', 'Great Lakes Food Market'),
(30, 'Manuel Pereira', 'male', 'GROSELLA-Restaurante'),
(31, 'Mario Pontes', 'female', 'Hanari Carnes'),
(32, 'Carlos Hernández', 'male', 'HILARIÓN-Abastos'),
(33, 'Yoshi Latimer', 'male', 'Hungry Coyote Import Store'),
(34, 'Patricia McKenna', 'female', 'Hungry Owl All-Night Grocers'),
(35, 'Helen Bennett', 'female', 'Island Trading'),
(36, 'Philip Cramer', 'female', 'Königlich Essen'),
(37, 'Daniel Tonini', 'male', 'La corne d''abondance'),
(38, 'Annette Roulet', 'male', 'La maison d''Asie'),
(39, 'Yoshi Tannamuri', 'female', 'Laughing Bacchus Wine Cellars'),
(40, 'John Steel', 'male', 'Lazy K Kountry Store'),
(41, 'Renate Messner', 'male', 'Lehmanns Marktstand'),
(42, 'Jaime Yorres', 'female', 'Let''s Stop N Shop'),
(43, 'Carlos González', 'male', 'LILA-Supermercado'),
(44, 'Felipe Izquierdo', 'male', 'LINO-Delicateses'),
(45, 'Fran Wilson', 'male', 'Lonesome Pine Restaurant'),
(46, 'Giovanni Rovelli', 'male', 'Magazzini Alimentari Riuniti'),
(47, 'Catherine Dewey', 'female', 'Maison Dewey'),
(48, 'Jean Fresnière', 'female', 'Mère Paillarde'),
(49, 'Alexander Feuer', 'female', 'Morgenstern Gesundkost'),
(50, 'Simon Crowther', 'male', 'North/South'),
(51, 'Yvonne Moncada', 'male', 'Océano Atlántico Ltda.'),
(52, 'Rene Phillips', 'male', 'Old World Delicatessen'),
(53, 'Henriette Pfalzheim', 'male', 'Ottilies Käseladen'),
(54, 'Marie Bertrand', 'male', 'Paris spécialités'),
(55, 'Guillermo Fernández', 'male', 'Pericles Comidas clásicas'),
(56, 'Georg Pipps', 'female', 'Piccolo und mehr'),
(57, 'Isabel de Castro', 'male', 'Princesa Isabel Vinhos'),
(58, 'Bernardo Batista', 'male', 'Que Delícia'),
(59, 'Lúcia Carvalho', 'male', 'Queen Cozinha'),
(60, 'Horst Kloss', 'female', 'QUICK-Stop'),
(61, 'Sergio Gutiérrez', 'male', 'Rancho grande'),
(62, 'Paula Wilson', 'female', 'Rattlesnake Canyon Grocery'),
(63, 'Maurizio Moroni', 'female', 'Reggiani Caseifici'),
(64, 'Janete Limeira', 'female', 'Ricardo Adocicados'),
(65, 'Michael Holz', 'female', 'Richter Supermarkt'),
(66, 'Alejandra Camino', 'female', 'Romero y tomillo'),
(67, 'Jonas Bergulfsen', 'female', 'Santé Gourmet'),
(68, 'Jose Pavarotti', 'female', 'Save-a-lot Markets'),
(69, 'Hari Kumar', 'female', 'Seven Seas Imports'),
(70, 'Jytte Petersen', 'male', 'Simons bistro'),
(71, 'Dominique Perrier', 'female', 'Spécialités du monde'),
(72, 'Art Braunschweiger', 'male', 'Split Rail Beer & Ale'),
(73, 'Pascale Cartrain', 'male', 'Suprêmes délices'),
(74, 'Liz Nixon', 'female', 'The Big Cheese'),
(75, 'Liu Wong', 'male', 'The Cracker Box'),
(76, 'Karin Josephs', 'female', 'Toms Spezialitäten'),
(77, 'Miguel Angel Paolino', 'female', 'Tortuga Restaurante'),
(78, 'Anabela Domingues', 'male', 'Tradição Hipermercados'),
(79, 'Helvetius Nagy', 'male', 'Trail''s Head Gourmet Provisioners'),
(80, 'Palle Ibsen', 'male', 'Vaffeljernet'),
(81, 'Mary Saveley', 'female', 'Victuailles en stock'),
(82, 'Paul Henriot', 'male', 'Vins et alcools Chevalier'),
(83, 'Rita Müller', 'female', 'Die Wandernde Kuh'),
(84, 'Pirkko Koskitalo', 'male', 'Wartian Herkku'),
(85, 'Paula Parente', 'male', 'Wellington Importadora'),
(86, 'Karl Jablonski', 'female', 'White Clover Markets'),
(87, 'Matti Karttunen', 'female', 'Wilman Kala'),
(88, 'Zbyszek Piestrzeniewicz', 'male', 'Wolski  Zajazd');

-- --------------------------------------------------------

--
-- Table structure for table `isgx_product`
--

CREATE TABLE `isgx_product` (
  `product_id` int(11) NOT NULL,
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
  `ship_restrict` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isgx_product`
--

INSERT INTO `isgx_product` (`product_id`, `category_id`, `name`, `slug`, `shortdesc`, `description`, `shortdesc_en`, `description_en`, `product_order`, `class`, `grouping`, `status`, `featured`, `other_feature`, `image`, `thumbnail`, `price`, `price_en`, `stock`, `unit_id`, `user_id`, `create_date`, `stock_status`, `ship_restrict`) VALUES
(1, 1, 'susu', NULL, NULL, '', NULL, 'sdf', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 100000, 0, 10, 1, 1, '2015-12-05 05:02:29', 'in-stock', NULL),
(2, 1, 'test', NULL, NULL, '123', NULL, '123123', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 123123, 123, 10, 1, 1, '2015-12-05 05:36:57', 'in-stock', NULL),
(5, 1, 'sdfsdf', NULL, NULL, '123123', NULL, '123', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 213123, 0, 10, 1, 1, '2015-12-17 11:54:12', 'in-stock', NULL),
(8, 1, 'sdfsdf', NULL, NULL, '123', NULL, '123213', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 123123, 123, 10, 1, 1, '2015-12-17 11:57:13', 'in-stock', NULL),
(9, NULL, 'draft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, '2015-12-17 12:07:17', 'in-stock', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `isgx_product_image`
--

CREATE TABLE `isgx_product_image` (
  `image_id` int(11) NOT NULL,
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
  `thumbnail_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isgx_product_image`
--

INSERT INTO `isgx_product_image` (`image_id`, `product_id`, `img_name`, `create_date`, `full_name`, `status`, `ext`, `width`, `height`, `size`, `type`, `url`, `path`, `compress_img_url`, `medium_url`, `small_url`, `thumbnail_url`) VALUES
(1, 1, 'iwanStadion.jpg', '2015-12-05 05:02:41', NULL, 1, '.jpg', 800, 450, 36.95, 'jpeg', '1.jpg', '/home/public_html/isagenix/assets/product/1.jpg', NULL, NULL, NULL, NULL),
(2, 1, 'iwanStadion.jpg', '2015-12-05 05:03:18', NULL, 1, '.jpg', 800, 450, 36.95, 'jpeg', '2.jpg', '/home/public_html/isagenix/assets/product/2.jpg', NULL, NULL, NULL, NULL),
(3, 2, 'iwanStadion3.jpg', '2015-12-05 05:37:12', NULL, 1, '.jpg', 800, 450, 46.18, 'jpeg', '3.jpg', '/home/public_html/isagenix/assets/product/3.jpg', NULL, NULL, NULL, NULL),
(8, 5, 'id-eplus-box-800.jpg', '2015-12-17 11:54:26', NULL, 1, '.jpg', 800, 436, 64.14, 'jpeg', '8.jpg', '/home/public_html/isagenix/assets/product/8.jpg', NULL, NULL, NULL, NULL),
(9, 8, 'id-eplus-box-800.jpg', '2015-12-17 11:59:00', NULL, 1, '.jpg', 800, 436, 64.14, 'jpeg', '9.jpg', '/home/public_html/isagenix/assets/product/9.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `isgx_size`
--

CREATE TABLE `isgx_size` (
  `size_id` int(11) NOT NULL,
  `size_code` varchar(3) NOT NULL,
  `size_name` varchar(100) NOT NULL,
  `size_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `isgx_unit`
--

CREATE TABLE `isgx_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isgx_unit`
--

INSERT INTO `isgx_unit` (`unit_id`, `name`, `description`, `create_date`) VALUES
(1, 'pcs', 'per satuan unit', '2015-08-19 03:23:25'),
(2, 'kg', 'kilo gram satuan bisa gram bisa kilo', '2015-08-19 03:23:25'),
(3, 'ons', '1 ounces = 28 gram', '2015-08-19 03:25:17'),
(4, 'gr', 'gram', '2015-09-08 23:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `koni_article`
--

CREATE TABLE `koni_article` (
  `article_id` int(11) NOT NULL,
  `user_id` int(2) DEFAULT NULL,
  `category_article_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koni_article`
--

INSERT INTO `koni_article` (`article_id`, `user_id`, `category_article_id`, `title`, `slug`, `body`, `image`, `create_date`) VALUES
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
-- Table structure for table `koni_article_image`
--

CREATE TABLE `koni_article_image` (
  `image_id` int(11) NOT NULL,
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
  `thumbnail_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `koni_atlet_profile`
--

CREATE TABLE `koni_atlet_profile` (
  `atlet_id` int(11) NOT NULL,
  `data_pemindahan_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_panggilan` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `cabor` varchar(100) NOT NULL,
  `domisili_porda` varchar(100) NOT NULL,
  `tunjangan_prestasi` varchar(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `status_nikah` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `phone2` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `alamat_tinggal_rt` int(3) DEFAULT NULL,
  `alamat_tinggal_rw` int(3) DEFAULT NULL,
  `alamat_tinggal_kelurahan` int(3) DEFAULT NULL,
  `alamat_tinggal_kecamatan` varchar(100) DEFAULT NULL,
  `alamat_tinggal_kota` varchar(100) DEFAULT NULL,
  `alamat_tinggal_kode_pos` varchar(100) DEFAULT NULL,
  `alamat_org_tua` text NOT NULL,
  `alamat_org_tua_rt` int(3) DEFAULT NULL,
  `alamat_org_tua_rw` int(3) DEFAULT NULL,
  `alamat_org_tua_kelurahan` int(3) DEFAULT NULL,
  `alamat_org_tua_kecamatan` varchar(100) DEFAULT NULL,
  `alamat_org_tua_kota` varchar(100) DEFAULT NULL,
  `alamat_org_tua_kode_pos` varchar(100) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `koni_category`
--

CREATE TABLE `koni_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `shortdesc` varchar(255) DEFAULT NULL,
  `description` text,
  `shortdesc_en` varchar(300) DEFAULT NULL,
  `description_en` text,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = not active',
  `parentid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `koni_category`
--

INSERT INTO `koni_category` (`category_id`, `category_name`, `slug`, `shortdesc`, `description`, `shortdesc_en`, `description_en`, `status`, `parentid`) VALUES
(1, 'susu', 'susu', NULL, 'susu', NULL, 'susu', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `koni_category_article`
--

CREATE TABLE `koni_category_article` (
  `category_article_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `shortdesc` varchar(255) DEFAULT NULL,
  `description` text,
  `shortdesc_en` varchar(300) DEFAULT NULL,
  `description_en` text,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = not active',
  `parentid` int(11) NOT NULL DEFAULT '0',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `koni_category_article`
--

INSERT INTO `koni_category_article` (`category_article_id`, `category_name`, `slug`, `shortdesc`, `description`, `shortdesc_en`, `description_en`, `status`, `parentid`, `create_date`) VALUES
(1, 'news', 'news', NULL, '<p>news</p>\r\n', NULL, NULL, 1, 0, '2015-12-02 14:13:01'),
(2, 'testimonial', 'testimonial', NULL, '<p>testimonial</p>\r\n', NULL, NULL, 1, 0, '2015-12-02 14:13:01'),
(3, 'Page', 'page', NULL, '<p>Page</p>\r\n', NULL, NULL, 1, 0, '2015-12-02 14:13:01'),
(4, 'facebook', 'facebook', NULL, '<p>facebook feed</p>\r\n', NULL, NULL, 1, 0, '2015-12-02 14:24:03'),
(5, 'test', 'n-a', NULL, 'test', NULL, 'test', 1, 0, '2015-12-05 04:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `koni_page`
--

CREATE TABLE `koni_page` (
  `page_id` int(11) NOT NULL,
  `user_id` int(2) DEFAULT NULL,
  `category_id` int(2) NOT NULL DEFAULT '3',
  `title` varchar(1000) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koni_page`
--

INSERT INTO `koni_page` (`page_id`, `user_id`, `category_id`, `title`, `slug`, `body`, `image`, `create_date`) VALUES
(1, NULL, 3, 'test haidar', '', '<p>test haidar</p>\r\n', '', '2015-12-02 11:35:22'),
(2, NULL, 3, 'our distributor', 'our-distributor', '<p>our distributor</p>\r\n', '', '2015-12-05 05:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `koni_pendidikan`
--

CREATE TABLE `koni_pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `atlet_id` int(11) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_cabor`
--

CREATE TABLE `t_cabor` (
  `cabor_id` int(11) NOT NULL,
  `cabor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_cabor`
--

INSERT INTO `t_cabor` (`cabor_id`, `cabor`) VALUES
(1, 'Renang\r'),
(2, 'Renang Indah\r'),
(3, 'Loncat Indah\r'),
(4, 'Polo Air\r'),
(5, 'Renang Perairan Terbuka\r'),
(6, 'Anggar\r'),
(7, 'Angkat Besi\r'),
(8, 'Angkat Berat\r'),
(9, 'Binaraga\r'),
(10, 'Atletik\r'),
(11, 'Balap Sepeda\r'),
(12, 'Softball\r'),
(13, 'Baseball\r'),
(14, 'Bola Basket\r'),
(15, 'Biliar\r'),
(16, 'Bowling\r'),
(17, 'Bulutangkis\r'),
(18, 'Catur\r'),
(19, 'Canoeing\r'),
(20, 'Rowing\r'),
(21, 'Traditional Boat Race\r'),
(22, 'Golf\r'),
(23, 'Gulat\r'),
(24, 'Judo\r'),
(25, 'Karate\r'),
(26, 'Layar\r'),
(27, 'Menembak\r'),
(28, 'Panahan\r'),
(29, 'Pencak Silat\r'),
(30, 'Selam\r'),
(31, 'Senam\r'),
(32, 'Sepakbola\r'),
(33, 'Futsal\r'),
(34, 'Squash\r'),
(35, 'Sepaktakraw\r'),
(36, 'Taekwondo\r'),
(37, 'Tenis\r'),
(38, 'Tenis Meja\r'),
(39, 'Tinju\r'),
(40, 'Volley\r'),
(41, 'Wushu\r'),
(42, 'Aeromodeling\r'),
(43, 'Gantole\r'),
(44, 'Paralayang\r'),
(45, 'Terbang Layang\r'),
(46, 'Terjun Payung\r'),
(47, 'Bermotor\r'),
(48, 'Bridge\r'),
(49, 'Kempo\r'),
(50, 'Sports Climbing\r'),
(51, 'Sepatu Roda\r'),
(52, 'Ski Air\r'),
(53, 'Tarung Derajat\r'),
(54, 'Berkuda\r'),
(55, 'Dansa\r'),
(56, 'Drum Band\r'),
(57, 'Hockey\r'),
(58, 'Cricket'),
(59, '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `isgx_product`
--
ALTER TABLE `isgx_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `isgx_product_image`
--
ALTER TABLE `isgx_product_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `isgx_size`
--
ALTER TABLE `isgx_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `isgx_unit`
--
ALTER TABLE `isgx_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `koni_article`
--
ALTER TABLE `koni_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `koni_article_image`
--
ALTER TABLE `koni_article_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `koni_atlet_profile`
--
ALTER TABLE `koni_atlet_profile`
  ADD PRIMARY KEY (`atlet_id`);

--
-- Indexes for table `koni_category`
--
ALTER TABLE `koni_category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `koni_category_article`
--
ALTER TABLE `koni_category_article`
  ADD PRIMARY KEY (`category_article_id`),
  ADD UNIQUE KEY `category_id` (`category_article_id`);

--
-- Indexes for table `koni_page`
--
ALTER TABLE `koni_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `koni_pendidikan`
--
ALTER TABLE `koni_pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indexes for table `t_cabor`
--
ALTER TABLE `t_cabor`
  ADD PRIMARY KEY (`cabor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `isgx_product`
--
ALTER TABLE `isgx_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `isgx_product_image`
--
ALTER TABLE `isgx_product_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `isgx_size`
--
ALTER TABLE `isgx_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `isgx_unit`
--
ALTER TABLE `isgx_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `koni_article`
--
ALTER TABLE `koni_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `koni_article_image`
--
ALTER TABLE `koni_article_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `koni_atlet_profile`
--
ALTER TABLE `koni_atlet_profile`
  MODIFY `atlet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `koni_category`
--
ALTER TABLE `koni_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `koni_category_article`
--
ALTER TABLE `koni_category_article`
  MODIFY `category_article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `koni_page`
--
ALTER TABLE `koni_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `koni_pendidikan`
--
ALTER TABLE `koni_pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_cabor`
--
ALTER TABLE `t_cabor`
  MODIFY `cabor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
