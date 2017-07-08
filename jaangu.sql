/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jaangu

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-04-08 09:04:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `additional_details`
-- ----------------------------
DROP TABLE IF EXISTS `additional_details`;
CREATE TABLE `additional_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of additional_details
-- ----------------------------
INSERT INTO `additional_details` VALUES ('1', '1', 'Property Size', '2300 Sq Ft', '0');
INSERT INTO `additional_details` VALUES ('2', '1', 'Lot size', '5000 Sq Ft', '0');
INSERT INTO `additional_details` VALUES ('3', '1', 'Price', '23000', '0');
INSERT INTO `additional_details` VALUES ('4', '1', 'Rooms', '5', '0');
INSERT INTO `additional_details` VALUES ('5', '1', 'Bedrooms', '3', '0');
INSERT INTO `additional_details` VALUES ('6', '1', 'Garages', '4', '0');
INSERT INTO `additional_details` VALUES ('7', '1', 'Roofing', 'New', '0');
INSERT INTO `additional_details` VALUES ('8', '1', 'Structure Type', 'Bricks', '0');
INSERT INTO `additional_details` VALUES ('9', '1', 'Year built', '1989', '0');
INSERT INTO `additional_details` VALUES ('10', '1', 'Available from', '3 jun 1989', '0');

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_on` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Admin', 'admin', 'admin', '2016-1-5');

-- ----------------------------
-- Table structure for `branches`
-- ----------------------------
DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of branches
-- ----------------------------

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `country_id` varchar(255) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Movies', '0', null, '0');
INSERT INTO `category` VALUES ('3', 'Spa & Salon', '0', null, '0');
INSERT INTO `category` VALUES ('5', 'Movies', '0', null, '0');
INSERT INTO `category` VALUES ('12', 'Food & Drink', '0', null, '0');
INSERT INTO `category` VALUES ('13', 'Res', '1', null, '0');
INSERT INTO `category` VALUES ('15', 'Indian', '12', null, '0');
INSERT INTO `category` VALUES ('16', 'Banglore', '0', null, '0');
INSERT INTO `category` VALUES ('17', 'Uganda', '0', null, '0');
INSERT INTO `category` VALUES ('18', 'jhkjhlk', '0', null, '0');
INSERT INTO `category` VALUES ('19', 'hjghj', '0', null, '0');
INSERT INTO `category` VALUES ('20', 'Banglorefdf', '0', null, '0');
INSERT INTO `category` VALUES ('21', 'jghj', '0', null, '0');
INSERT INTO `category` VALUES ('22', 'fhh', '0', null, '0');
INSERT INTO `category` VALUES ('23', 'gfjj', '17', null, '0');
INSERT INTO `category` VALUES ('24', 'apprasl', '0', null, '0');
INSERT INTO `category` VALUES ('25', 'cotton', '24', null, '0');
INSERT INTO `category` VALUES ('27', '', null, null, '0');
INSERT INTO `category` VALUES ('29', 'Sub Cat Test', '1', null, '0');

-- ----------------------------
-- Table structure for `city`
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('2', '4', '2', '0', '0');
INSERT INTO `city` VALUES ('3', '4', '2', 'XYZ', '0');
INSERT INTO `city` VALUES ('5', '4', '3', 'XYZABC', '0');

-- ----------------------------
-- Table structure for `configruation`
-- ----------------------------
DROP TABLE IF EXISTS `configruation`;
CREATE TABLE `configruation` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of configruation
-- ----------------------------
INSERT INTO `configruation` VALUES ('1', '5', '16', 'banner.jpg', '1', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for `country`
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES ('3', 'INDIA', '0');
INSERT INTO `country` VALUES ('4', 'Africa', '0');

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `country` varchar(224) DEFAULT NULL,
  `state` varchar(225) DEFAULT NULL,
  `home_town` varchar(225) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `is_online` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', 'sami', 'sami@yahoo.com', '123456', 'c 15-1, p and t colony sahar road, andheri (east), mumbai - 400099', 'c 15-1, p and t colony sahar road, andheri (east), mumbai - 400099', '9530069076', '0', '2016-01-21', 'India', 'Maharashtra', 'mumbai', '4', '0', '0');
INSERT INTO `customer` VALUES ('3', 'ashish', 'ashish@gmail.com', '541851', 'c 15-1, p and t colony sahar road, andheri (east), mumbai - 400099', 'c 15-1, p and t colony sahar road, andheri (east), mumbai - 400099', '9530069895', null, '2016-03-17', 'kamap', 'uaganaf', 'dssd', '1', '0', '0');
INSERT INTO `customer` VALUES ('4', 'yash', 'yash@gmail.com', '6526296', 'c 15-1, p and t colony sahar road, andheri (east), mumbai - 400099', 'c 15-1, p and t colony sahar road, andheri (east), mumbai - 400099', '9569626461', null, '2016-03-10', 'kapala', 'sdssdsd', 'eeeee', '5', '0', '0');

-- ----------------------------
-- Table structure for `customer_groups`
-- ----------------------------
DROP TABLE IF EXISTS `customer_groups`;
CREATE TABLE `customer_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer_groups
-- ----------------------------
INSERT INTO `customer_groups` VALUES ('1', 'General', '0');
INSERT INTO `customer_groups` VALUES ('3', 'Not Login', '0');
INSERT INTO `customer_groups` VALUES ('4', 'Private Sale Manager', '0');
INSERT INTO `customer_groups` VALUES ('5', 'VIP Member', '0');
INSERT INTO `customer_groups` VALUES ('6', 'Wholesale', '0');

-- ----------------------------
-- Table structure for `deals`
-- ----------------------------
DROP TABLE IF EXISTS `deals`;
CREATE TABLE `deals` (
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
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deals
-- ----------------------------
INSERT INTO `deals` VALUES ('3', 'vbbvc', '7', '12', '3', 'ghfj', '0', '', '0000-00-00', '0', '0', '0', '0000-00-00', '0000-00-00', '', '0', '', '', '0.0000', '0.0000', '0', '0', '1', '', '1', '0000-00-00', '1', '1', '1', '1', '1', '1', '1', '', '', '0', '0.00', '0', '0', '0', '0', '0', '0');
INSERT INTO `deals` VALUES ('6', 'Choice of Hair Care and Beauty Services', '7', '4', '1', 'dfg', '0', 'fgdfg', '0000-00-00', '3', '5', '2', '2016-03-01', '2016-03-31', 'ghf', '2', 'gfgdfg', 'fdgdfg', '0.0000', '0.0000', '0', '0', '1', 'Virtual Product (Coupon),dfg,ghfMAC,Africa,Kampala,XYZABC,New Town,Movies,Res', '1', '2016-03-01', '0', '0', '0', '0', '0', '0', '1', '', '2-i.png', '1', '50.00', '10', '5', '1', '0', '0', '0');
INSERT INTO `deals` VALUES ('7', 'fdggfg-ghfgjfj-nmn', '7', '3', '3', 'jkjhk', '1', 'bn,mb,', '0000-00-00', '3', '5', '2', '2016-03-01', '2016-03-31', 'jkhjk', '0', 'mnbmbn,', 'b,n,', '120.0000', '150.0000', '0', '0', '1', 'Configurable Product,jkjhk,jkhjkMAC,INDIA,Kampala,XYZABC,New Town,Movies,Res', '1', '0000-00-00', '1', '1', '1', '1', '1', '1', '1', '', '', '1', '500.00', '50', '5', '2', '0', '1', '0');
INSERT INTO `deals` VALUES ('8', 'ghfgj', '7', '3', '1', 'gj', '1', 'fjfj', '2016-03-21', '3', '5', '2', '2016-03-01', '2016-03-23', 'fjjj', '1', 'jfj', 'fj', '1212.0000', '5456.0000', '0', '0', '0', '', '1', '0000-00-00', '1', '1', '1', '1', '1', '1', '1', '', '', '0', '0.00', '0', '0', '0', '0', '0', '0');
INSERT INTO `deals` VALUES ('9', 'jk', '7', '4', '1', 'hjghjhgj', '1', 'jkjh', '2016-03-22', '3', '5', '2', '2016-03-01', '2016-03-30', 'hhg', '3', 'kjhkhj', 'jkjh', '8.0000', '78.0000', '0', '0', '0', 'Virtual Product (Coupon),hjghjhgj,hhgMAC,Africa,Kampala,XYZABC,New Town', '1', '0000-00-00', '1', '1', '1', '1', '1', '1', '1', '', '', '0', '0.00', '0', '0', '1', '0', '0', '0');
INSERT INTO `deals` VALUES ('13', 'Full Body Massage (60min) with Shower ', '7', '3', '1', 'Full Body Massage (60min) with Shower ', '1', '', '2016-03-22', '3', '5', '2', '2016-03-01', '2016-03-23', 'Full Body Massage (60min) with Shower ', '2', '', '', '5.0000', '6.0000', '1', '13', '0', 'Virtual Product (Coupon),Full Body Massage (60min) with Shower ,Full Body Massage (60min) with Shower MAC,INDIA,Kampala,XYZABC,New Town,Movies,Res', '1', '0000-00-00', '1', '1', '1', '1', '1', '1', '1', '', '', '0', '0.00', '0', '0', '1', '0', '0', '0');

-- ----------------------------
-- Table structure for `dealtypes`
-- ----------------------------
DROP TABLE IF EXISTS `dealtypes`;
CREATE TABLE `dealtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dealtypes
-- ----------------------------
INSERT INTO `dealtypes` VALUES ('1', 'Virtual Product (Coupon)', '0');
INSERT INTO `dealtypes` VALUES ('3', 'Configurable Product', '0');

-- ----------------------------
-- Table structure for `details`
-- ----------------------------
DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `id` int(5) DEFAULT NULL,
  `code_name` varchar(45) DEFAULT NULL,
  `game_name` varchar(45) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of details
-- ----------------------------
INSERT INTO `details` VALUES ('1', 'criket', null, '0');
INSERT INTO `details` VALUES ('2', 'football', null, '0');
INSERT INTO `details` VALUES ('3', 'fd20', 'Football', '0');
INSERT INTO `details` VALUES ('3', 'Hd20', 'hocky', '0');

-- ----------------------------
-- Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('7', 'add-1.jpg', '6', '0');
INSERT INTO `images` VALUES ('8', '3-i.png', '6', '0');
INSERT INTO `images` VALUES ('9', 'add-2.jpg', '6', '0');
INSERT INTO `images` VALUES ('10', 'affiliate-6.jpg', '6', '0');
INSERT INTO `images` VALUES ('12', '2-i.png', '6', '0');
INSERT INTO `images` VALUES ('13', 'u.jpg', '6', '0');

-- ----------------------------
-- Table structure for `location`
-- ----------------------------
DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of location
-- ----------------------------
INSERT INTO `location` VALUES ('5', 'Chennai', '0');
INSERT INTO `location` VALUES ('6', 'Barmer', '0');
INSERT INTO `location` VALUES ('7', 'Udaipur', '0');
INSERT INTO `location` VALUES ('8', 'Nasik', '0');
INSERT INTO `location` VALUES ('12', 'Mumbai', '0');
INSERT INTO `location` VALUES ('13', 'ghh', '0');

-- ----------------------------
-- Table structure for `location_details`
-- ----------------------------
DROP TABLE IF EXISTS `location_details`;
CREATE TABLE `location_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of location_details
-- ----------------------------

-- ----------------------------
-- Table structure for `merchants`
-- ----------------------------
DROP TABLE IF EXISTS `merchants`;
CREATE TABLE `merchants` (
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
  `is_deleted` int(4) NOT NULL DEFAULT '0',
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of merchants
-- ----------------------------
INSERT INTO `merchants` VALUES ('5', 'fdg', 'g.jpg', 'kl', 'lk', 'kl', 'lk', 'lk', 'lk', '1', 'kl', '', '', 'merchant_user', '123456', '0', '0', '1', '1', '1', '0', '', '', 'khushbu@hogoworld.com', 'dfgdgdfg', 'fgfgfdgfgdfg dgdsg', '', '', '', '', '', '', '', '', '0', '0', '0', '');
INSERT INTO `merchants` VALUES ('6', 'fg', '2016 - 1.jpg', 'hd', 'h', 'dh', 'dh', 'hd', 'hg', '0', 'hd', '', '', '', '', '0', '0', '0', '1', '1', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '');
INSERT INTO `merchants` VALUES ('7', 'MAC', 'affiliate-5.jpg', 'dsg', 'dfssdf', 'dsf', 'dsg', 'dsf', 'dsfds', '1', 'dfdf', '', '', 'Merchant_user2', '123', '1', '0', '0', '1', '1', '0', 'HDFC', 'hhjhkjjhg1313', '', '', '', '', 'address1kjk', 'address2jk', 'address3jkk', 'address4jk', 'address5\';l\'', 'redeem_at ;l\'', 'Khushbu Sonikj', '2147483647', '456', '1', '2020');
INSERT INTO `merchants` VALUES ('8', 'chfghfgh', 'affiliate-5.jpg', 'dg', 'df@fgdf.vom', 'dg', 'hj', '56546456456', '5655676', '1', 'hgfjhgjghkj', '', '', '', '', '0', '0', '0', '1', '1', '0', '', '', 'khushbu@hogoworld.com fdhdgh', 'jhllg', 'yyhyh', '', '', '', '', '', '', '', '', '0', '0', '0', '');

-- ----------------------------
-- Table structure for `orderitems`
-- ----------------------------
DROP TABLE IF EXISTS `orderitems`;
CREATE TABLE `orderitems` (
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
  `is_deleted` int(4) NOT NULL DEFAULT '0',
  `isCouponPdfSend` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of orderitems
-- ----------------------------
INSERT INTO `orderitems` VALUES ('1', '6', '0', '1500.0000', '1000.0000', '51', '1', '1000.00', '10.00', '10.00', '100.00', '1500.00', '0', '0');
INSERT INTO `orderitems` VALUES ('2', '3', '2', '152.0000', '120.0000', '12', '1', '120.00', '10.00', '10.00', '10.00', '120.00', '0', '0');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '2016-03-08', '2016-03-08 00:00:00', '#0001', 'Richfeel Trichology Centre, 7, Priyanka, Opp. Atur Park, Near Diamond Garden, (E), SionTrombay Rd, Chembur, Mumbai, Maharashtra, India-400071', 'Richfeel Trichology Centre, 7, Priyanka, Opp. Atur Park, Near Diamond Garden, (E), SionTrombay Rd, Chembur, Mumbai, Maharashtra, India-400071', '1', '1620.00', '50.00', '1', '0', '0', '4', '188.27.34.96', '0', '1', '2016-03-24', '0');

-- ----------------------------
-- Table structure for `player`
-- ----------------------------
DROP TABLE IF EXISTS `player`;
CREATE TABLE `player` (
  `id` int(5) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `points` int(5) DEFAULT NULL COMMENT '			',
  `code_id` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of player
-- ----------------------------
INSERT INTO `player` VALUES ('1', 'viki', '5', '2', null);
INSERT INTO `player` VALUES ('2', 'khushi', '3', '1', null);
INSERT INTO `player` VALUES ('3', 'khushi', '2', '1', null);
INSERT INTO `player` VALUES ('4', 'viki', '5', '2', null);
INSERT INTO `player` VALUES ('5', 'khushi', '4', '1', null);

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
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
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'Its first Item', '2', '6', '3', '10', '8', '500.00', '20', '400', '6', 'vijay', 'kumar', 'Boy', 'Its just short Description about this Product or Deal', '2016-01-25', null, '1', '1', null);
INSERT INTO `product` VALUES ('2', 'Its second item', '2', '6', '3', '10', '8', '500.00', '20', '400', '6', 'khushi', 'kumari', 'Girl', 'Its just short Description about this Product or Deal', '2016-01-25', null, '1', '1', null);
INSERT INTO `product` VALUES ('3', 'Third Product', '4', '9', '3', '500', '400', '1000.00', '20', '800', '900', 'dfbdlkvdlvflfvndvnvn nlf ndlnk dn dlfn dln ldn ldnk lndl ndl ndl ndln dln ldn ldn ldn ldn ldnfl ndlf ndln dln ldn ldnk ldn ldn ldn lkndl ndlfk ndlkn ldfn ldkfn ldnkf lkdn lnk', ' lfnk kdlnfkl ndfl ndflk ndkl ndlkn ldn kldn kldn ldnl kndlk ndln dlknf ldn ldn lnkdl ndlkn kln lfn ldn ldnk dlnl', 'ldnkblnkdbldl kllk l lkllkgl nkgl nlkn klnlgnk ln lkn lnkkl ndlk ndl d nlnk dkl nln lkndl nln kldnl ndl ndkln lkdnl ndlnk dl nl nln lnl nln ln  nnnl kln ldknlkgnbldgnklnkfln ldkn ln lkgn glkn lkdnf kldn kl', 'ldnkflndk lndlk ndlndln lkdn ldnl ndl ndln ln lnk lfkn ldnlfn dlbn ldn lkdn ldnlf ndfln dlfn dlfn ldfn ldnk ldn lkdn ldnl knfl kfndlk ndlkn lfkn ldknlfnldfnldfn lkndf lnk lknd lkdnf lkdfn lkn', '2016-01-29', null, '1', '1', null);

-- ----------------------------
-- Table structure for `product_image`
-- ----------------------------
DROP TABLE IF EXISTS `product_image`;
CREATE TABLE `product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo` mediumblob,
  `product_id` int(11) NOT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_image
-- ----------------------------
INSERT INTO `product_image` VALUES ('1', 'chaumeen', '', '2', null);
INSERT INTO `product_image` VALUES ('2', 'burgger', '', '2', null);

-- ----------------------------
-- Table structure for `retailer`
-- ----------------------------
DROP TABLE IF EXISTS `retailer`;
CREATE TABLE `retailer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of retailer
-- ----------------------------
INSERT INTO `retailer` VALUES ('1', 'abc', 'abc@gmail.com', 'abcd', '', '324823986', '1', '1', '2016-01-10', null);
INSERT INTO `retailer` VALUES ('2', 'def', 'def@gmail.com', 'sddf', null, '34235545', '2', '1', '2016-01-10', null);
INSERT INTO `retailer` VALUES ('3', 'ghi', 'ghi@gmail.com', 'sdfsdf', null, '234523453', '3', '1', '2016-01-10', null);
INSERT INTO `retailer` VALUES ('4', 'jkl', 'jkl@gmail.com', 'sdfsdf', null, '34535354', '2', '1', '2016-01-10', null);
INSERT INTO `retailer` VALUES ('5', 'mno', 'mno@gmail.com', 'dsree', null, '345345435', '1', '1', '2016-01-10', null);
INSERT INTO `retailer` VALUES ('6', 'pqr', 'pqr@gmail.com', 'rferdf', null, '3453453454', '3', '1', '2016-01-10', null);
INSERT INTO `retailer` VALUES ('7', '', '', '', '', '', '1', null, '2016-01-29', null);
INSERT INTO `retailer` VALUES ('8', 'sfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdfds', 'sdfsdfsdf', '6', null, '2016-01-29', null);
INSERT INTO `retailer` VALUES ('9', 'Viki', 'Viki@gmail.com', 'Admin123', 'Roy Colony', '9530069076', '2', null, '2016-01-29', null);
INSERT INTO `retailer` VALUES ('10', 'fgvdv', 'dvdfvv', 'dfvfdvdv', 'vdfdvd', 'vdfvdfvdfv', '10', null, '2016-02-01', null);

-- ----------------------------
-- Table structure for `state`
-- ----------------------------
DROP TABLE IF EXISTS `state`;
CREATE TABLE `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of state
-- ----------------------------
INSERT INTO `state` VALUES ('3', 'Kampala', '4', '0');

-- ----------------------------
-- Table structure for `subscribe`
-- ----------------------------
DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `is_subscribe` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of subscribe
-- ----------------------------

-- ----------------------------
-- Table structure for `test`
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of test
-- ----------------------------

-- ----------------------------
-- Table structure for `town`
-- ----------------------------
DROP TABLE IF EXISTS `town`;
CREATE TABLE `town` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of town
-- ----------------------------
INSERT INTO `town` VALUES ('2', '4', '3', '5', 'New Town', null);
