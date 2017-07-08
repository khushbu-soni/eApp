-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2016 at 05:40 PM
-- Server version: 5.5.46
-- PHP Version: 5.3.10-1ubuntu3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jaangu`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_details`
--

CREATE TABLE IF NOT EXISTS `additional_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `additional_details`
--

INSERT INTO `additional_details` (`id`, `product_id`, `field`, `value`) VALUES
(1, 1, 'Property Size', '2300 Sq Ft'),
(2, 1, 'Lot size', '5000 Sq Ft'),
(3, 1, 'Price', '23000'),
(4, 1, 'Rooms', '5'),
(5, 1, 'Bedrooms', '3'),
(6, 1, 'Garages', '4'),
(7, 1, 'Roofing', 'New'),
(8, 1, 'Structure Type', 'Bricks'),
(9, 1, 'Year built', '1989'),
(10, 1, 'Available from', '3 jun 1989');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_on` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `created_on`) VALUES
(1, 'Admin', 'admin', 'admin', '2016-1-5');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `country_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`, `country_id`) VALUES
(1, 'Movies', 0, NULL),
(3, 'Spa & Salon', 0, NULL),
(5, 'Movies', 0, NULL),
(12, 'Food & Drink', 0, NULL),
(13, 'Res', 1, NULL),
(15, 'Indian', 12, NULL),
(16, 'Banglore', 0, NULL),
(17, 'Uganda', 0, NULL),
(18, 'jhkjhlk', 0, NULL),
(19, 'hjghj', 0, NULL),
(20, 'Banglorefdf', 0, NULL),
(21, 'jghj', 0, NULL),
(22, 'fhh', 0, NULL),
(23, 'gfjj', 17, NULL),
(24, 'apprasl', 0, NULL),
(25, 'cotton', 24, NULL),
(27, '', NULL, NULL),
(29, 'Sub Cat Test', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `country_id`, `state_id`, `name`) VALUES
(2, 4, 2, '0'),
(3, 4, 2, 'XYZ'),
(5, 4, 3, 'XYZABC');

-- --------------------------------------------------------

--
-- Table structure for table `configruation`
--

CREATE TABLE IF NOT EXISTS `configruation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_page_display_deals_city` int(11) NOT NULL,
  `max_number_of_slide_deals` int(11) NOT NULL,
  `top_add_banner_image` varchar(255) NOT NULL,
  `display_top_add_banner` tinyint(4) NOT NULL DEFAULT '1',
  `enable_subscribe_popup` tinyint(4) NOT NULL,
  `enable_ecommerce` tinyint(4) NOT NULL DEFAULT '0',
  `display_featured_deals_on_home_page` tinyint(4) NOT NULL DEFAULT '1',
  `display_popular_deals_on_home_page` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `configruation`
--

INSERT INTO `configruation` (`id`, `home_page_display_deals_city`, `max_number_of_slide_deals`, `top_add_banner_image`, `display_top_add_banner`, `enable_subscribe_popup`, `enable_ecommerce`, `display_featured_deals_on_home_page`, `display_popular_deals_on_home_page`) VALUES
(1, 5, 16, 'banner.jpg', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(3, 'INDIA'),
(4, 'Africa');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `permanent_address`, `shipping_address`, `phone_no`, `location_id`, `registration_date`) VALUES
(1, 'viki', 'viki@yahoo.com', 'Admin123', '', '', '9530069076', 0, '2016-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `dealtype_id` int(11) NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `about` text NOT NULL,
  `created_at` date NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `url_key` varchar(255) NOT NULL,
  `visibilty` int(11) NOT NULL,
  `highlights` text NOT NULL,
  `policies` text NOT NULL,
  `discounted_price` decimal(11,4) NOT NULL,
  `actual_price` decimal(11,4) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT '0',
  `search_string` longtext NOT NULL,
  `display_product_image` tinyint(4) NOT NULL DEFAULT '1',
  `expiry_date` date NOT NULL,
  `display_price` tinyint(4) NOT NULL DEFAULT '1',
  `display_merchant_address` tinyint(4) NOT NULL DEFAULT '1',
  `display_merchant_contact_info` tinyint(4) NOT NULL DEFAULT '1',
  `display_fine_print` tinyint(4) NOT NULL DEFAULT '1',
  `display_highlights` tinyint(4) NOT NULL DEFAULT '1',
  `display_merchant_logo` tinyint(4) NOT NULL DEFAULT '1',
  `display_business_hour` tinyint(4) NOT NULL DEFAULT '1',
  `additional_info` text NOT NULL,
  `barcode_image` varchar(255) NOT NULL,
  `notify_for_qty_below` tinyint(4) NOT NULL DEFAULT '0',
  `target_qty` decimal(11,2) NOT NULL DEFAULT '0.00',
  `max_purchase_per_customer` int(11) NOT NULL DEFAULT '0',
  `qty_item_out_stock` int(11) NOT NULL DEFAULT '0',
  `stock_availbilty` tinyint(4) NOT NULL DEFAULT '1',
  `qty_available` int(11) NOT NULL DEFAULT '0',
  `gift_option` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `name`, `merchant_id`, `country_id`, `dealtype_id`, `SKU`, `status`, `about`, `created_at`, `state_id`, `city_id`, `town_id`, `valid_from`, `valid_to`, `url_key`, `visibilty`, `highlights`, `policies`, `discounted_price`, `actual_price`, `category_id`, `subcategory_id`, `is_featured`, `search_string`, `display_product_image`, `expiry_date`, `display_price`, `display_merchant_address`, `display_merchant_contact_info`, `display_fine_print`, `display_highlights`, `display_merchant_logo`, `display_business_hour`, `additional_info`, `barcode_image`, `notify_for_qty_below`, `target_qty`, `max_purchase_per_customer`, `qty_item_out_stock`, `stock_availbilty`, `qty_available`, `gift_option`) VALUES
(3, 'vbbvc', 7, 12, 3, 'ghfj', 0, '', '0000-00-00', 0, 0, 0, '0000-00-00', '0000-00-00', '', 0, '', '', 0.0000, 0.0000, 0, 0, 1, '', 1, '0000-00-00', 1, 1, 1, 1, 1, 1, 1, '', '', 0, 0.00, 0, 0, 0, 0, 0),
(6, 'Choice of Hair Care and Beauty Services', 7, 4, 1, 'dfg', 0, 'fgdfg', '0000-00-00', 3, 5, 2, '2016-03-01', '2016-03-31', 'ghf', 2, 'gfgdfg', 'fdgdfg', 0.0000, 0.0000, 0, 0, 1, 'Virtual Product (Coupon),dfg,ghfMAC,Africa,Kampala,XYZABC,New Town,Movies,Res', 1, '2016-03-01', 0, 0, 0, 0, 0, 0, 1, '', '2-i.png', 1, 50.00, 10, 5, 1, 0, 0),
(7, 'fdggfg-ghfgjfj-nmn', 7, 3, 3, 'jkjhk', 1, 'bn,mb,', '0000-00-00', 3, 5, 2, '2016-03-01', '2016-03-31', 'jkhjk', 0, 'mnbmbn,', 'b,n,', 120.0000, 150.0000, 0, 0, 1, 'Configurable Product,jkjhk,jkhjkMAC,INDIA,Kampala,XYZABC,New Town,Movies,Res', 1, '0000-00-00', 1, 1, 1, 1, 1, 1, 1, '', '', 1, 500.00, 50, 5, 2, 0, 1),
(8, 'ghfgj', 7, 3, 1, 'gj', 1, 'fjfj', '2016-03-21', 3, 5, 2, '2016-03-01', '2016-03-23', 'fjjj', 1, 'jfj', 'fj', 1212.0000, 5456.0000, 0, 0, 0, '', 1, '0000-00-00', 1, 1, 1, 1, 1, 1, 1, '', '', 0, 0.00, 0, 0, 0, 0, 0),
(9, 'jk', 7, 4, 1, 'hjghjhgj', 1, 'jkjh', '2016-03-22', 3, 5, 2, '2016-03-01', '2016-03-30', 'hhg', 3, 'kjhkhj', 'jkjh', 8.0000, 78.0000, 0, 0, 0, 'Virtual Product (Coupon),hjghjhgj,hhgMAC,Africa,Kampala,XYZABC,New Town', 1, '0000-00-00', 1, 1, 1, 1, 1, 1, 1, '', '', 0, 0.00, 0, 0, 1, 0, 0),
(13, 'Full Body Massage (60min) with Shower ', 7, 3, 1, 'Full Body Massage (60min) with Shower ', 1, '', '2016-03-22', 3, 5, 2, '2016-03-01', '2016-03-23', 'Full Body Massage (60min) with Shower ', 2, '', '', 5.0000, 6.0000, 1, 13, 0, 'Virtual Product (Coupon),Full Body Massage (60min) with Shower ,Full Body Massage (60min) with Shower MAC,INDIA,Kampala,XYZABC,New Town,Movies,Res', 1, '0000-00-00', 1, 1, 1, 1, 1, 1, 1, '', '', 0, 0.00, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dealtypes`
--

CREATE TABLE IF NOT EXISTS `dealtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dealtypes`
--

INSERT INTO `dealtypes` (`id`, `name`) VALUES
(1, 'Virtual Product (Coupon)'),
(3, 'Configurable Product');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(5) DEFAULT NULL,
  `code_name` varchar(45) DEFAULT NULL,
  `game_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `code_name`, `game_name`) VALUES
(1, 'criket', NULL),
(2, 'football', NULL),
(3, 'fd20', 'Football'),
(3, 'Hd20', 'hocky');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `deal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `deal_id`) VALUES
(7, 'add-1.jpg', 6),
(8, '3-i.png', 6),
(9, 'add-2.jpg', 6),
(10, 'affiliate-6.jpg', 6),
(12, '2-i.png', 6),
(13, 'u.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(5, 'Chennai'),
(6, 'Barmer'),
(7, 'Udaipur'),
(8, 'Nasik'),
(12, 'Mumbai'),
(13, 'ghh');

-- --------------------------------------------------------

--
-- Table structure for table `location_details`
--

CREATE TABLE IF NOT EXISTS `location_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE IF NOT EXISTS `merchants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `allow_merchant_to_add_edit_deals` tinyint(4) NOT NULL DEFAULT '0',
  `allow_merchant_to_delete_deals` tinyint(4) NOT NULL DEFAULT '0',
  `allow_merchant_to_view_their_sales` tinyint(4) NOT NULL DEFAULT '0',
  `edit_and_view_their_details` tinyint(4) NOT NULL DEFAULT '1',
  `require_administrator_approval` tinyint(4) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `paypal_email` varchar(255) NOT NULL,
  `bank_information` text NOT NULL,
  `other_information` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `address3` text NOT NULL,
  `address4` text NOT NULL,
  `address5` text NOT NULL,
  `redeem_at` text NOT NULL,
  `name_on_card` varchar(255) NOT NULL,
  `sixteen_digit_number` int(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expiry_month` int(12) NOT NULL,
  `expiry_year` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `name`, `logo`, `website`, `email`, `fb_link`, `twitter_link`, `phone`, `mobile`, `status`, `description`, `address`, `company_name`, `username`, `password`, `allow_merchant_to_add_edit_deals`, `allow_merchant_to_delete_deals`, `allow_merchant_to_view_their_sales`, `edit_and_view_their_details`, `require_administrator_approval`, `is_deleted`, `bank_name`, `account_number`, `paypal_email`, `bank_information`, `other_information`, `url`, `address1`, `address2`, `address3`, `address4`, `address5`, `redeem_at`, `name_on_card`, `sixteen_digit_number`, `cvv`, `expiry_month`, `expiry_year`) VALUES
(5, 'fdg', 'g.jpg', 'kl', 'lk', 'kl', 'lk', 'lk', 'lk', 1, 'kl', '', '', 'merchant_user', '123456', 0, 0, 1, 1, 1, 0, '', '', 'khushbu@hogoworld.com', 'dfgdgdfg', 'fgfgfdgfgdfg dgdsg', '', '', '', '', '', '', '', '', 0, 0, 0, ''),
(6, 'fg', '2016 - 1.jpg', 'hd', 'h', 'dh', 'dh', 'hd', 'hg', 0, 'hd', '', '', '', '', 0, 0, 0, 1, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, ''),
(7, 'MAC', 'affiliate-5.jpg', 'dsg', 'dfssdf', 'dsf', 'dsg', 'dsf', 'dsfds', 1, 'dfdf', '', '', 'Merchant_user2', '123', 1, 0, 0, 1, 1, 0, 'HDFC', 'hhjhkjjhg1313', '', '', '', '', 'address1kjk', 'address2jk', 'address3jkk', 'address4jk', 'address5'';l''', 'redeem_at ;l''', 'Khushbu Sonikj', 2147483647, 456, 1, '2020'),
(8, 'chfghfgh', 'affiliate-5.jpg', 'dg', 'df@fgdf.vom', 'dg', 'hj', '56546456456', '5655676', 1, 'hgfjhgjghkj', '', '', '', '', 0, 0, 0, 1, 1, 0, '', '', 'khushbu@hogoworld.com fdhdgh', 'jhllg', 'yyhyh', '', '', '', '', '', '', '', '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `item_status` int(11) NOT NULL,
  `original_price` decimal(11,4) NOT NULL,
  `price` decimal(11,4) NOT NULL,
  `qty` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `sub_total` decimal(11,2) NOT NULL,
  `tax_amount` decimal(11,2) NOT NULL,
  `tax_per` decimal(11,2) NOT NULL,
  `discount_amount` decimal(11,2) NOT NULL,
  `row_total` decimal(11,2) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `isCouponPdfSend` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `product_id`, `item_status`, `original_price`, `price`, `qty`, `order_id`, `sub_total`, `tax_amount`, `tax_per`, `discount_amount`, `row_total`, `is_deleted`, `isCouponPdfSend`) VALUES
(1, 6, 0, 1500.0000, 1000.0000, 51, 1, 1000.00, 10.00, 10.00, 100.00, 1500.00, 0, 0),
(2, 3, 2, 152.0000, 120.0000, 12, 1, 120.00, 10.00, 10.00, 10.00, 120.00, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchased_on` date NOT NULL,
  `created_on` datetime NOT NULL,
  `orderID` varchar(255) NOT NULL,
  `billing_address` text NOT NULL,
  `shipping_address` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` decimal(11,2) NOT NULL,
  `discount_amount` decimal(11,2) NOT NULL,
  `isInvoicEmail` tinyint(4) NOT NULL DEFAULT '0',
  `isShipmentEmailSend` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `status` int(11) NOT NULL,
  `placed_from_ip` varchar(255) NOT NULL,
  `isOrderConfirmationEmailSend` tinyint(4) NOT NULL DEFAULT '0',
  `isCouponPdfSend` tinyint(4) NOT NULL DEFAULT '0',
  `invoice_date` date NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `purchased_on`, `created_on`, `orderID`, `billing_address`, `shipping_address`, `customer_id`, `grand_total`, `discount_amount`, `isInvoicEmail`, `isShipmentEmailSend`, `is_deleted`, `status`, `placed_from_ip`, `isOrderConfirmationEmailSend`, `isCouponPdfSend`, `invoice_date`, `payment_status`) VALUES
(1, '2016-03-08', '2016-03-08 00:00:00', '#0001', 'Richfeel Trichology Centre, 7, Priyanka, Opp. Atur Park, Near Diamond Garden, (E), SionTrombay Rd, Chembur, Mumbai, Maharashtra, India-400071', 'Richfeel Trichology Centre, 7, Priyanka, Opp. Atur Park, Near Diamond Garden, (E), SionTrombay Rd, Chembur, Mumbai, Maharashtra, India-400071', 1, 1620.00, 50.00, 1, 0, 0, 4, '188.27.34.96', 0, 1, '2016-03-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(5) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `points` int(5) DEFAULT NULL COMMENT '			',
  `code_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `points`, `code_id`) VALUES
(1, 'viki', 5, 2),
(2, 'khushi', 3, 1),
(3, 'khushi', 2, 1),
(4, 'viki', 5, 2),
(5, 'khushi', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `retailer_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `initial_qty` int(11) DEFAULT NULL,
  `remaining_qty` int(11) DEFAULT NULL,
  `actual_price` decimal(10,2) DEFAULT NULL,
  `discount_per` int(11) DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `sold_limit` int(11) DEFAULT NULL,
  `additional_info` longtext,
  `policies` longtext,
  `what_you_get` longtext,
  `description` longtext,
  `added_on` date DEFAULT NULL,
  `valid_till` date DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `location_id`, `retailer_id`, `category_id`, `initial_qty`, `remaining_qty`, `actual_price`, `discount_per`, `discount_price`, `sold_limit`, `additional_info`, `policies`, `what_you_get`, `description`, `added_on`, `valid_till`, `is_active`, `is_featured`) VALUES
(1, 'Its first Item', 2, 6, 3, 10, 8, 500.00, 20, 400, 6, 'vijay', 'kumar', 'Boy', 'Its just short Description about this Product or Deal', '2016-01-25', NULL, 1, 1),
(2, 'Its second item', 2, 6, 3, 10, 8, 500.00, 20, 400, 6, 'khushi', 'kumari', 'Girl', 'Its just short Description about this Product or Deal', '2016-01-25', NULL, 1, 1),
(3, 'Third Product', 4, 9, 3, 500, 400, 1000.00, 20, 800, 900, 'dfbdlkvdlvflfvndvnvn nlf ndlnk dn dlfn dln ldn ldnk lndl ndl ndl ndln dln ldn ldn ldn ldn ldnfl ndlf ndln dln ldn ldnk ldn ldn ldn lkndl ndlfk ndlkn ldfn ldkfn ldnkf lkdn lnk', ' lfnk kdlnfkl ndfl ndflk ndkl ndlkn ldn kldn kldn ldnl kndlk ndln dlknf ldn ldn lnkdl ndlkn kln lfn ldn ldnk dlnl', 'ldnkblnkdbldl kllk l lkllkgl nkgl nlkn klnlgnk ln lkn lnkkl ndlk ndl d nlnk dkl nln lkndl nln kldnl ndl ndkln lkdnl ndlnk dl nl nln lnl nln ln  nnnl kln ldknlkgnbldgnklnkfln ldkn ln lkgn glkn lkdnf kldn kl', 'ldnkflndk lndlk ndlndln lkdn ldnl ndl ndln ln lnk lfkn ldnlfn dlbn ldn lkdn ldnlf ndfln dlfn dlfn ldfn ldnk ldn lkdn ldnl knfl kfndlk ndlkn lfkn ldknlfnldfnldfn lkndf lnk lknd lkdnf lkdfn lkn', '2016-01-29', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo` mediumblob,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `name`, `photo`, `product_id`) VALUES
(1, 'chaumeen', '', 2),
(2, 'burgger', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE IF NOT EXISTS `retailer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`id`, `name`, `email`, `password`, `address`, `phone_no`, `location_id`, `is_active`, `registration_date`) VALUES
(1, 'abc', 'abc@gmail.com', 'abcd', '', '324823986', 1, 1, '2016-01-10'),
(2, 'def', 'def@gmail.com', 'sddf', NULL, '34235545', 2, 1, '2016-01-10'),
(3, 'ghi', 'ghi@gmail.com', 'sdfsdf', NULL, '234523453', 3, 1, '2016-01-10'),
(4, 'jkl', 'jkl@gmail.com', 'sdfsdf', NULL, '34535354', 2, 1, '2016-01-10'),
(5, 'mno', 'mno@gmail.com', 'dsree', NULL, '345345435', 1, 1, '2016-01-10'),
(6, 'pqr', 'pqr@gmail.com', 'rferdf', NULL, '3453453454', 3, 1, '2016-01-10'),
(7, '', '', '', '', '', 1, NULL, '2016-01-29'),
(8, 'sfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdfds', 'sdfsdfsdf', 6, NULL, '2016-01-29'),
(9, 'Viki', 'Viki@gmail.com', 'Admin123', 'Roy Colony', '9530069076', 2, NULL, '2016-01-29'),
(10, 'fgvdv', 'dvdfvv', 'dfvfdvdv', 'vdfdvd', 'vdfvdfvdfv', 10, NULL, '2016-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `country_id`) VALUES
(3, 'Kampala', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `is_subscribe` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE IF NOT EXISTS `town` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `town`
--

INSERT INTO `town` (`id`, `country_id`, `state_id`, `city_id`, `name`) VALUES
(2, 4, 3, 5, 'New Town');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
