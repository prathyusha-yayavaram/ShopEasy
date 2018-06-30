-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 07:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `snp`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_user`
--

CREATE TABLE IF NOT EXISTS `active_user` (
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_user`
--

INSERT INTO `active_user` (`id`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `prod_id` int(4) NOT NULL,
  `cust_id` int(4) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(4) NOT NULL,
  `color` varchar(10) NOT NULL,
  PRIMARY KEY (`prod_id`,`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` int(2) NOT NULL,
  `ph_no` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `gender`, `age`, `ph_no`, `email`, `password`) VALUES
(2, 'Shaik Nazeer', 'M', 0, 7871259926, 'shaik.nazeer2015@vit.ac.in', 'TRY'),
(3, 'Prathyusha', 'M', 0, 9790717950, 'prathyushayayavaram7@gmail.com', 'ghh');

-- --------------------------------------------------------

--
-- Table structure for table `cust_address`
--

CREATE TABLE IF NOT EXISTS `cust_address` (
  `cust_id` int(4) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_address`
--

INSERT INTO `cust_address` (`cust_id`, `address`) VALUES
(2, 'khammam'),
(3, 'Khh');

-- --------------------------------------------------------

--
-- Table structure for table `cust_id_ref`
--

CREATE TABLE IF NOT EXISTS `cust_id_ref` (
  `prev_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_id_ref`
--

INSERT INTO `cust_id_ref` (`prev_id`) VALUES
(3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(4) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `shipping_add` varchar(50) NOT NULL,
  `items_subtotal` int(11) NOT NULL,
  `ship_charge` int(11) NOT NULL,
  `payment_method` varchar(15) NOT NULL,
  `no_of_items` int(11) NOT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `date`, `shipping_add`, `items_subtotal`, `ship_charge`, `payment_method`, `no_of_items`) VALUES
(11, '2016-10-26 11:27:33', 'Khammam', 890, 100, 'COD', 3),
(13, '2016-10-26 12:37:19', '', 0, 250, 'COD', 0),
(14, '2016-10-26 12:37:33', 'ng', 0, 250, 'COD', 6),
(15, '2016-10-28 19:41:24', '', 0, 250, 'COD', 0),
(16, '2016-11-02 12:16:29', '', 0, 250, 'COD', 0),
(17, '2016-11-05 01:20:50', '', 0, 250, 'COD', 0),
(18, '2016-11-06 19:33:55', '', 0, 250, 'COD', 0),
(19, '2016-11-06 22:45:03', '', 0, 250, 'COD', 0),
(20, '2016-11-08 22:24:59', '', 0, 250, 'COD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_charges`
--

CREATE TABLE IF NOT EXISTS `order_charges` (
  `items_subtotal` int(11) NOT NULL,
  `ship_charge` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`items_subtotal`,`ship_charge`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varbinary(100) NOT NULL,
  `img3` varbinary(100) NOT NULL,
  `img4` varbinary(100) NOT NULL,
  `category` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `fabric` varchar(10) NOT NULL,
  `pattern` varchar(10) NOT NULL,
  `occasion` varchar(20) NOT NULL,
  `style_code` varchar(10) NOT NULL,
  `stock` int(4) NOT NULL,
  `cost` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `name`, `brand`, `img1`, `img2`, `img3`, `img4`, `category`, `type`, `fabric`, `pattern`, `occasion`, `style_code`, `stock`, `cost`) VALUES
(1, 'Girls Western Top1', 'Soch', 'Gtop1.jpeg', '', '', '', 'Girls', 'Tops', 'Cotton', 'Plain', 'casual wear', 'WHRUF367', 50, 600),
(2, 'Girls Western Top2', 'Max', 'Gtop2.jpeg', '', '', '', 'Girls', 'Tops', 'Cotton', 'Printed', 'casual wear', 'WHRUF3', 40, 700),
(3, 'Girls Western Top3', 'Denim', 'Gtop3.jpeg', '', '', '', 'Girls', 'Tops', 'Nylon', 'Plain', 'casual wear', 'ERGTV456', 70, 450),
(4, 'Girls Western Top4', 'Louis Phillip', 'Gtop4.jpeg', '', '', '', 'Girls', 'Tops', 'Cotton', 'Plain', 'Winter wear', 'TYUEO456', 90, 700),
(5, 'Girls Western Top5', 'Lee Cooper', 'Gtop5.jpeg', '', '', '', 'Girls', 'Tops', 'Cotton', 'Printed', 'casual wear', 'BJJJKN67', 45, 699),
(6, 'Girls Western Top6', 'Van Hussaen', 'Gtop6.jpeg', '', '', '', 'Girls', 'Tops', 'Nylon', 'Plain', 'Summer Wear', 'HOJOB678', 65, 599),
(7, 'Girls Western Top7', 'Tommy Hilfigure', 'Gtop7.jpeg', '', '', '', 'Girls', 'Tops', 'Nylon', 'Plain', 'casual wear', 'BKU698GJ', 60, 700),
(8, 'Girls Western Top8', 'Lee Cooper', 'Gtop8.jpeg', '', '', '', 'Girls', 'Tops', 'Cotton', 'Printed', 'casual wear', 'JBBIU98', 30, 900),
(9, 'Girls Western Jeans1', 'Denim', 'Gjeans1.jpeg', '', '', '', 'Girls', 'Jeans', 'Thick clot', 'Plain', 'Summer wear', 'KHGLI767', 35, 1000),
(10, 'Girls Western Jeans2', 'Botique', 'Gjeans2.jpeg', '', '', '', 'Girls', 'Jeans', 'Thick', 'Plain', 'casual wear', 'FUUYG567', 45, 1200),
(11, 'Men Formal Shirt1', 'Van Hussaen', 'Mshirt1.jpeg', '', '', '', 'Men', 'Shirts', 'Cotton', 'Checks', 'Formal Wear', 'JKBI6788', 65, 1500),
(12, 'Men Formal Shirt2', 'Tommy Hilfigure', 'Mshirt2.jpeg', '', '', '', 'Men', 'Shirts', 'Cotton', 'Plain', 'Formal wear', 'UYUVC678', 70, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE IF NOT EXISTS `product_color` (
  `prod_id` int(4) NOT NULL,
  `color` varchar(10) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE IF NOT EXISTS `product_size` (
  `prod_id` int(4) NOT NULL,
  `size1` varchar(4) NOT NULL,
  `size2` varchar(4) NOT NULL,
  `size3` varchar(4) NOT NULL,
  `size4` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`prod_id`, `size1`, `size2`, `size3`, `size4`) VALUES
(1005, 'XS', 'S', 'M', 'L'),
(1006, 'S', 'M', 'L', 'XL'),
(1007, 'XS', 'S', 'M', 'L'),
(1009, 'S', 'M', 'L', 'XL'),
(1000, 'XXS', 'XS', 'M', 'L'),
(1, 'S', 'M', 'XL', 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `prod_img`
--

CREATE TABLE IF NOT EXISTS `prod_img` (
  `prod_id` int(4) NOT NULL,
  `imgl1` varchar(70) NOT NULL,
  `imgl2` varchar(70) NOT NULL,
  `imgl3` varchar(70) NOT NULL,
  `imgl4` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_img`
--

INSERT INTO `prod_img` (`prod_id`, `imgl1`, `imgl2`, `imgl3`, `imgl4`) VALUES
(1000, 'http:\\\\localhost\\Newfolder\\IMG_20161009_161243_025.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_161344_037.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_161453_700.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_161521_399.jpg'),
(1005, 'http:\\\\localhost\\Newfolder\\IMG_20161009_162804_308.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_162804_308.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_162848_175.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_162907_367.jpg'),
(1006, 'http:\\\\localhost\\Newfolder\\IMG_20161009_163000_396.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163016_143.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163029_912.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163100_730.jpg'),
(1007, 'http:\\\\localhost\\Newfolder\\IMG_20161009_163142_859.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163142_859.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163216_884.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163251_108.jpg'),
(1008, 'http:\\\\localhost\\Newfolder\\IMG_20161009_163334_444.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163403_836.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163421_067.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163439_062.jpg'),
(1009, 'http:\\\\localhost\\Newfolder\\IMG_20161009_163606_362.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163639_427.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163700_406.jpg', 'http:\\\\localhost\\Newfolder\\IMG_20161009_163745_808.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prod_ord_cust`
--

CREATE TABLE IF NOT EXISTS `prod_ord_cust` (
  `prod_id` int(4) NOT NULL,
  `ord_id` int(4) NOT NULL,
  `cust_id` int(4) NOT NULL,
  `size` varchar(4) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`prod_id`,`ord_id`,`cust_id`),
  UNIQUE KEY `prod_id` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_ord_cust`
--

INSERT INTO `prod_ord_cust` (`prod_id`, `ord_id`, `cust_id`, `size`, `quantity`) VALUES
(1, 11, 2, 'M', 2),
(2, 11, 2, 'M', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `cust_id` int(4) NOT NULL,
  `prod_id` int(4) NOT NULL,
  PRIMARY KEY (`cust_id`,`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`cust_id`, `prod_id`) VALUES
(1, 1),
(1, 10),
(2, 1),
(10, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
