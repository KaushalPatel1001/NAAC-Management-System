-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2023 at 12:47 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinnacle`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bank_name`, `status`) VALUES
(19, 'ICICI BANK', '1'),
(20, 'AXIS BANK', '1');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `status`) VALUES
(2, 'VADODARA', '1'),
(3, 'JAIPUR', '1'),
(4, 'ANAND', '1');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `client_dob` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `client_mobile` varchar(20) NOT NULL,
  `client_whatsapp` varchar(255) NOT NULL,
  `client_email` varchar(150) NOT NULL,
  `client_aadhar` varchar(150) NOT NULL,
  `client_gst` varchar(255) NOT NULL,
  `client_pancard` varchar(100) NOT NULL,
  `client_address_1` text NOT NULL,
  `client_type` varchar(255) NOT NULL,
  `client_address_2` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `executive_name` varchar(100) NOT NULL,
  `creation_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_name`, `client_dob`, `customer_id`, `client_mobile`, `client_whatsapp`, `client_email`, `client_aadhar`, `client_gst`, `client_pancard`, `client_address_1`, `client_type`, `client_address_2`, `city`, `postal`, `state`, `country`, `status`, `executive_name`, `creation_date`) VALUES
(1, 'SUNIL RAJUBHAI ZARE', '11-10-1991', '1', '7567339713', '7567339713', 'NA', '835351959813', 'NA', 'ABAPZ0688G', '557 ,SAWAD QUATERS , BEHIND SANGAM SOCIETY , HARNI ROAD ,VADODARA-390002 ,GUJARAT.', '19', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '1', '2021-04-15'),
(2, 'TAIYABI NOORUDDIN VOHRA', '18-04-2021', '2', '9327747106', '9327747106', 'TAIYABIVOHRA@GMAIL.COM', '571072593718', 'NA', 'AEBPV3511L', 'A-6 ,BORSALI APPARTMENT , NEAR RAM PARK , AJWA ROAD ,VADODARA - 390019 , GUJARAT.', '19', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '1', '2021-04-19'),
(3, 'BHAGVATI ENTERPRISE', '13-01-1983', '3', '9327747106', '', 'TAIYABIVOHRA@GMAIL.COM', '425382177775', '24FZEPP2604D1ZQ', 'FZEPP2604D', '30 , JAY AMBE NAGAR , WAGODIYA ROAD , VADODARA - 390019 , GUJARAT.', '19', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '1', '2021-04-18 09:54:34 AM'),
(4, 'MALEK MAHAMMAD VASIM', '20-09-1987', '4', '7600598062', '7600598062', 'MALEKWASIM1987@GMAIL.COM ', '274410472534', '24DDMPM0654L1Z9', 'DDMPM0654L', '733, MOTO MAHALLO, DHULETA,  BHARODA , UMRETH, ANAND-388210, GUJARAT', '19', '', 'ANAND', '', 'Gujarat', 'INDIA', '1', '4', '2021-04-20 01:54:23 PM'),
(5, 'VIJAYKUMAR SANMUKHDAS PANJWANI', '06-10-1966', '5', '6353697460', '6353697460', 'NA', '908556327788', '24AFJPP1886P2ZN', 'AFJPP1886P', 'D-21/22, SAMARPAN SOCIETY , VASNA ROAD , VADODARA - 390012 , GUJARAT', '19', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '3', '2021-04-20 02:50:52 PM'),
(6, 'PARMAR CHANDRESHKUMAR RAMSINGHBHAI ', '21-04-1974', '6', '6353410590', '6353410590', 'NA', '543128556896', 'NA', 'ANPPP9192G', 'B2/60, SANIDHYA TOWNSHIP , NEAR RAGHUKUL SCHOOL , NEW VIP RING ROAD , AJWA ROAD , VADODARA -390019 , GUJARAT ', '19', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '2', '2021-04-20'),
(7, 'KABUTARWALA MOHAMMEDAMIN MOHAMMEDKASIM ', '21-04-2021', '7', '8141291460', '8141291460', 'NA', '780074713942', 'NA', 'BZIPK1167Q', 'A/8 , DHANANIPARK -2 , MEMON COLONY , AJWA ROAD , VADODARA -390019 , GUJARAT.', '19', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '1', '2021-04-21 12:22:09 AM'),
(8, 'KANTAWALA TASLIMA', '09-05-1978', '8', '8238789340', '8238789340', 'NA', '618941507496', 'NA', 'CNDPK3096C', 'F-4 , SUJA APARTMENT , MOTI BAPOD , RAM PARK , AJWA ROAD , VADODARA - 3900019 , GUJRAT.', '19', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '2', '2021-04-21 01:39:13 PM'),
(9, 'ASDHK', '23-04-2021', '9', '97983279', '793749', 'KSHKK', '12345666', 'HKASDK', 'HKASDK', 'DASDASD', '18', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '1', ''),
(10, 'SUNIL BHAI VERMA', '05-12-1990', '10', '3279487239', '7498237947', 'ASDKASD@GMAIL.COM', '120312380123', 'ASHKDHASDHKHASK', 'NCAKS3798B', 'ASDHKAHDHKADH HAKDHKAHSD MHAKSDHKASHD HK', '18', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '1', '29-05-2021'),
(11, 'SABIN', '06-06-1990', '11', '3248234798', '7927349237', 'ASD@GM.COM', '328492342429', 'SKDHSAKDHH', 'ASKHD3298B', 'ASDGJASDJH', '18', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '1', '29-05-2021'),
(12, 'TAIYABI NOORUDDIN VOHRA', '29-05-2021', '12', 'askdhaskd', 'akdkashdkh', 'hkashdk', '122310001999', 'akhdkjask', 'askjh1212d', 'aksdhkasdk', '18', '', 'VADODARA', '', 'Gujarat', 'INDIA', '1', '1', '2021-05-29 03:42:59 PM'),
(13, 'sunil sharma', '31-07-2023', '13', '7802997295', '', 'sunilsharma@wmail.com', '342394927497', '-', 'cahkd2832h', 'jhgjh', '18', '', 'VADODARA', '', 'Gujarat', 'India', '1', '1', '2023-07-31 06:39:04 PM');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `company_code` varchar(255) NOT NULL,
  `company_number` varchar(255) NOT NULL,
  `pancard` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `gst_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `register_date` varchar(100) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `company_code`, `company_number`, `pancard`, `landline`, `gst_number`, `address`, `register_date`, `company_email`, `website`, `status`) VALUES
(1, 'MUKESH LOHANA AND ASSOCIATES', 'MLA', '9426776446', 'ADCPL9844Q', '0265-­2510558', 'NA', 'OFFICE NO. 406 , SAKAR COMPLEX , NR.SUPER BAKERY , SARDAR ESTATE , NEW VIP RING ROAD , VADODARA  -390019 , GUJARAT.', '2021-04-01', 'CA.MUKESH.LOHANA@GMAIL.COM', 'WWW.MUKESHLOHANAANDASSOCIATES.COM', '1'),
(2, 'FIRST ONE FINANCIAL SERVICES', 'FOFS', '9408758461', '1234567899999999', '0265-­2510558', 'NA', 'SHOP NO. 25 , GROUND FLOOR , SAKAR COMPLEX , NR. SUPER BAKERY , NEW VIP RING ROAD , VADODARA - 390019 , GUJARAT.', '2021-04-01', 'VADODARA.PAN.CENTER@HOTMAIL.COM', 'NA', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company_bank_account`
--

DROP TABLE IF EXISTS `company_bank_account`;
CREATE TABLE IF NOT EXISTS `company_bank_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `bank_branch` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bank_address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_bank_account`
--

INSERT INTO `company_bank_account` (`id`, `company`, `bank_name`, `account_number`, `account_type`, `ifsc_code`, `bank_branch`, `status`, `bank_address`) VALUES
(1, '1', 'STATE BANK OF INDIA', '39435206170', 'CURRENT', 'SBIN0018709', 'NEW VIP ROAD , VADODARA', '1', 'SAKAR COMPLEX , NR SUPER BAKERY , NEW VIP ROAD VADODARA , VADODARA.'),
(2, '1', 'ICICI BANK', '000305501179', 'CURRENT', 'ICIC0000003', 'NEW VIP  ROAD , VADODARA', '1', 'EARTH ICON ,  NEW VIP  ROAD , VADODARA.');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `status`) VALUES
(2, '', '1'),
(3, 'SALES', '1'),
(4, 'manager', '1'),
(6, '', '1'),
(7, '', '1'),
(8, '', '1'),
(9, '', '1'),
(10, '', '1'),
(11, '', '1'),
(12, '', '1'),
(13, 'none', '1'),
(14, 'heiuewfedj', '1'),
(15, 'ACCOUNTkok', '1'),
(16, 'helloworld', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(80) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `salary`, `gender`, `city`, `email`) VALUES
(1, 'Yogesh', '30000', 'male', 'Bhopal', 'yogesh@makitweb.com'),
(2, 'Vishal', '28000', 'male', 'Pune', 'vishal@gmail.com'),
(3, 'Vijay', '35000', 'male', 'Jaipur', 'vijayec@yahoo.com'),
(4, 'Rahul', '25000', 'male', 'Kanpur', 'rahul512@gmail.com'),
(5, 'Sonarika', '50000', 'female', 'Mumbai', 'bsonarika@gmail.com'),
(6, 'Jitentendre', '48000', 'male', 'Bhopal', 'jiten94@yahoo.com'),
(7, 'Aditya', '36000', 'male', 'Pune', 'aditya@gmail.com'),
(8, 'Anil', '32000', 'male', 'Indore', 'anilsingh@gmail.com'),
(9, 'Sunil', '48000', 'male', 'Nagpur', 'sunil1993@gmail.com'),
(10, 'Akilesh', '52000', 'male', 'Surat', 'akileshsahu@yahoo.com'),
(11, 'Raj', '48000', 'male', 'Ahmedabad', 'rajsingh@gmail.com'),
(12, 'Mayank', '54000', 'male', 'Ghaziabad', 'mpatidar@gmail.com'),
(13, 'Shalu', '43000', 'female', 'Bhopal', 'gshalu521@gmail.com'),
(14, 'Ravi', '32000', 'male', 'Ludhiana', 'ravisharma21@yahoo.com'),
(15, 'Shruti', '45000', 'female', 'Delhi', 'shruti@gmail.com'),
(16, 'Rishi', '38000', 'male', 'Mumbai', 'rishi121@gmail.com'),
(17, 'Rohan', '47000', 'male', 'Jaipur', 'rohansingh@gmail.com'),
(18, 'Priya', '28000', 'female', 'Indore', 'priya1992@gmail.com'),
(19, 'Rakesh', '34000', 'male', 'bhopal', 'rakesh@yahoo.com'),
(20, 'Vinay', '34000', 'male', 'Delhi', 'vinaysingh@gmail.com'),
(21, 'Tanu', '41000', 'female', 'pune', 'Tanu@gmail.com'),
(22, 'Ajay', '28000', 'male', 'bhopal', 'ajay93@gmail.com'),
(23, 'Nikhil', '46000', 'male', 'pune', 'nikhil@gmail.com'),
(24, 'Arav', '28000', 'male', 'Nagpur', 'aravsingh@yahoo.com'),
(25, 'Madhu', '32000', 'female', 'Rajkot', 'madhu@gmail.com'),
(26, 'Sagar', '44000', 'male', 'Rajkot', 'sagar@gmail.com'),
(27, 'Anju ', '30000', 'female', 'Ranchi', 'anju@gmail.com'),
(28, 'Rajat', '28000', 'male', 'kota', 'rajat@gmail.com'),
(29, 'Anjali', '32000', 'female', 'Gwalior', 'anjali@gmail.com'),
(30, 'Saloni', '32000', 'female', 'Nashik', 'saloni@gmail.com'),
(31, 'Mayur', '28000', 'male', 'Bhopal', 'mayur@gmail.com'),
(32, 'Pankaj', '32000', 'male', 'Indore', 'pankaj@gmail.com'),
(33, 'Hrithik', '33000', 'male', 'Pune', 'hrithik@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `material_category`
--

DROP TABLE IF EXISTS `material_category`;
CREATE TABLE IF NOT EXISTS `material_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_category`
--

INSERT INTO `material_category` (`id`, `category_name`, `status`) VALUES
(1, 'INCOME TAX SERVCIES', '1'),
(2, 'GST  SERVCIES', '1'),
(3, 'LABOUR LAW  SERVCIES', '1'),
(4, 'TDS / TCS  SERVCIES', '1'),
(5, 'LEGAL SERVCIES', '1'),
(6, 'LOANS SERVCIES', '1'),
(8, 'RERA SERVICES', '1'),
(9, 'AUDIT & ASSURANCE SERVICES', '1'),
(10, 'COMPANY  SERVICES', '1'),
(11, 'REGISTRATION  & OTHER MISCE. SERVICES', '1'),
(13, 'ACCOUNTING SERVICES', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu_management`
--

DROP TABLE IF EXISTS `menu_management`;
CREATE TABLE IF NOT EXISTS `menu_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `accesskey` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '0 if menu is root level or menuid if this is child on any menu',
  `link` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0 for disabled menu or 1 for enabled menu',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_management`
--

INSERT INTO `menu_management` (`id`, `menu_name`, `icon`, `accesskey`, `parent_id`, `link`, `status`) VALUES
(17, 'Create Clients', '', '', 13, 'view_customer.php', '1'),
(36, 'MASTER', '<i class=\"fa fa-maxcdn\" aria-hidden=\"true\"></i>', '', 0, '#', '1'),
(37, 'Department', '', '', 36, 'view_department.php', '1'),
(38, 'Company', '', '', 36, 'view_company.php', '1'),
(41, 'User', '', '', 36, 'view_users.php', '1'),
(42, 'Menu Management', '', '', 36, 'menu_management.php', '1'),
(48, 'Company Bank Account', '', '', 36, 'view_company_bank.php', '1'),
(52, 'Bank Name List', '', '', 36, 'view_bank.php', '1'),
(55, 'Sub Services', '', '', 36, 'service_sub_category.php', '1'),
(88, 'Service Category', '', '', 36, 'service_category.php', '1'),
(137, 'Menu Profile', '', '', 36, 'menu_profile.php', '1'),
(150, 'State', '', '', 36, 'view_state.php', '1'),
(151, 'City2', '', '', 36, 'view_city.php', '1'),
(159, 'Category', '', '', 36, 'view_category.php', '1'),
(160, 'Groups', '', '', 36, 'view_group.php', '1'),
(162, 'Sub-Group', '', '', 36, 'view_sub_group.php', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu_profile`
--

DROP TABLE IF EXISTS `menu_profile`;
CREATE TABLE IF NOT EXISTS `menu_profile` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `show_menu` text NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_profile`
--

INSERT INTO `menu_profile` (`id`, `role`, `show_menu`, `permissions`) VALUES
(3, 'SALES', '1,5,19,21,23,24,36,37', '19_add,19_edit,19_delete,19_status,21_add,21_edit,21_delete,21_status,23_add,23_edit,23_delete,23_status,24_add,36_add,36_edit,36_status,37_add,37_edit,37_status'),
(4, 'PURCHASE', '1,9,15,18', '1_add,1_edit,1_delete,1_status,9_add,9_edit,15_add,15_edit,15_delete,15_status,18_add,18_edit,18_delete,18_status'),
(6, 'MANAGEMENT', '1,2,3,4,5,6,7,8,9,10,11,14,15,17,18,19,20,21,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46', '1_add,1_edit,1_delete,1_status,2_add,2_edit,2_delete,2_status,3_add,3_edit,3_delete,3_status,4_add,4_edit,4_delete,4_status,5_add,5_edit,5_delete,5_status,6_add,6_edit,6_delete,6_status,7_add,7_edit,7_delete,7_status,8_add,8_edit,8_delete,8_status,9_add,9');

-- --------------------------------------------------------

--
-- Table structure for table `mst_category`
--

DROP TABLE IF EXISTS `mst_category`;
CREATE TABLE IF NOT EXISTS `mst_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_code` int(15) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_category`
--

INSERT INTO `mst_category` (`id`, `cat_code`, `cat_name`, `prefix`, `status`) VALUES
(12, 4, 'forthcat', 'fourth', '1'),
(3, 3, 'thirdcat', 'third', '1'),
(2, 2, 'secondcat', 'sec', '1'),
(1, 1, 'firstcat', 'first', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mst_group`
--

DROP TABLE IF EXISTS `mst_group`;
CREATE TABLE IF NOT EXISTS `mst_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grp_code` int(10) NOT NULL,
  `grp_name` varchar(20) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `cat_code` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_group`
--

INSERT INTO `mst_group` (`id`, `grp_code`, `grp_name`, `prefix`, `status`, `cat_code`) VALUES
(3, 3, 'thirdgrp', 'thirdgrp', '1', 3),
(2, 2, 'secondgrp', 'secondgrp', '1', 2),
(1, 1, 'firstgrp', 'gf', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_sub_group`
--

DROP TABLE IF EXISTS `mst_sub_group`;
CREATE TABLE IF NOT EXISTS `mst_sub_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sub_grp_name` varchar(20) NOT NULL,
  `sub_grp_code` int(10) NOT NULL,
  `cat_code` int(10) NOT NULL,
  `grp_code` int(11) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_sub_group`
--

INSERT INTO `mst_sub_group` (`id`, `sub_grp_name`, `sub_grp_code`, `cat_code`, `grp_code`, `prefix`, `status`) VALUES
(21, 'World', 2, 3, 3, 'nooenwq', '1'),
(20, 'hello', 1, 12, 1, 'ramesh', '1'),
(19, 'hello', 1, 1, 1, 'firstsg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`, `status`) VALUES
(1, 'Andhra Pradesh', '0'),
(2, 'Andaman and Nicobar Islands', '0'),
(3, 'Arunachal Pradesh', '0'),
(4, 'Assam', '0'),
(5, 'Bihar', '0'),
(6, 'Chandigarh', '0'),
(7, 'Chhattisgarh', '0'),
(8, 'Dadar and Nagar Haveli', '0'),
(9, 'Daman and Diu', '0'),
(10, 'Delhi', '0'),
(11, 'Lakshadweep', '0'),
(12, 'Puducherry', '0'),
(13, 'Goa', '0'),
(14, 'Gujarat', '1'),
(15, 'Haryana', '0'),
(16, 'Himachal Pradesh', '0'),
(17, 'Jammu and Kashmir', '0'),
(18, 'Jharkhand', '0'),
(19, 'Karnataka', '0'),
(20, 'Kerala', '0'),
(21, 'Madhya Pradesh', '0'),
(22, 'Maharashtra', '0'),
(23, 'Manipur', '0'),
(24, 'Meghalaya', '0'),
(25, 'Mizoram', '0'),
(26, 'Nagaland', '0'),
(27, 'Odisha', '0'),
(28, 'Punjab', '0'),
(29, 'Rajasthan', '0'),
(30, 'Sikkim', '0'),
(31, 'Tamil Nadu', '0'),
(32, 'Telangana', '0'),
(33, 'Tripura', '0'),
(34, 'Uttar Pradesh', '0'),
(35, 'Uttarakhand', '0'),
(36, 'West Bengal', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sticky`
--

DROP TABLE IF EXISTS `sticky`;
CREATE TABLE IF NOT EXISTS `sticky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` text NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sticky`
--

INSERT INTO `sticky` (`id`, `details`, `emp_id`) VALUES
(1, 'khhdkhskdhfkdxhfh jhkfhkdhf\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n', '1'),
(2, 'ashdkjasdkhaskdj', '6'),
(3, 'hello sunil', '8');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `material_category`, `sub_category`, `status`) VALUES
(1, '1', 'SALARIED EMPLOYEE INCOME TAX RETURN', '1'),
(2, '1', 'BUSINESS INCOME TAX RETURN', '1'),
(4, '1', 'HUF INCOME TAX RETURN', '1'),
(5, '1', 'CO-OPERATIVE SOCIETY INCOME TAX RETURN', '1'),
(6, '1', 'TRUST INCOME TAX RETURN', '1'),
(7, '1', 'NGO INCOME TAX RETURN', '1'),
(8, '1', 'PARTNERSHIP FIRM (INCLUDING LIMITED LIABILITY PARTNERSHIP) INCOME TAX RETURN', '1'),
(9, '1', 'SCHOOL INCOME TAX RETURN', '1'),
(10, '1', 'INCOME TAX RETURN FOR NON RESIDENT INDIVIDUAL (SALARIED NRI)', '1'),
(11, '1', 'NON RESIDENT INDIVIDUAL (BUSINESS & OTHER INCOME OF NRI)                        ', '1'),
(12, '1', 'INCOME TAX RETURN FOR COMPANY  (WITHOUT ROC WORK)', '1'),
(13, '1', 'PREVIOUS INCOME TAX RETURN WITH COMPUTATION, PROFIT & LOSS & BALANCE SHEET ', '1'),
(14, '1', 'INCOME TAX RETURN FOR CAPITAL GAIN / SHARE MARKET TRANSACTION', '1'),
(15, '1', 'REVISED IT RETURN (SALARIED)', '1'),
(16, '1', 'REVISED IT RETURN (BUSINESS & OTHERS)', '1'),
(17, '1', 'PROJECTED & ESTIMATED PROFIT & LOSS AND BALANCE SHEET ', '1'),
(18, '1', '10 E CERTIFICATE (ARREARS SALARY INCOME TAX RETURN) ', '1'),
(19, '1', 'INCOME TAX NOTICE ANSWER / RESPONSE', '1'),
(20, '2', 'GST REGISTRATION', '1'),
(21, '2', 'GSTR-3B & GSTR-1 (REGULAR DEALER) ', '1'),
(22, '2', 'CMP-08 (COMPOSITION  DEALER)', '1'),
(23, '2', 'GST REGULAR TO COMPOSITION SCHEME  TRANSFER', '1'),
(24, '2', 'GST COMPOSITION TO REGULAR SCHEME TRANSFER', '1'),
(25, '2', 'GST NOTICE ANSWER / RESPONSE', '1'),
(26, '2', 'GST CANCELLATION / SURRENDER / CLOSER', '1'),
(27, '2', 'E-WAY BILL REGISTRATION', '1'),
(28, '2', 'E-WAY BILL GENERATION  ', '1'),
(29, '4', 'TAN REGISTRATION', '1'),
(30, '4', 'TDS RETURN ', '1'),
(31, '4', 'TCS RETURN', '1'),
(32, '4', 'TDS  REVISED RETURN', '1'),
(33, '4', 'TCS  REVISED RETURN', '1'),
(34, '4', ' TDS  RETURN NOTICE ANSWER / RESPONSE', '1'),
(35, '4', 'TCS RETURN NOTICE ANSWER / RESPONSE', '1'),
(36, '13', 'ACCOUNTING (TALLY ERP. 9)', '1'),
(37, '10', 'PRIVATE LIMITED COMPANY REGISTRATION', '1'),
(38, '10', 'ONE PERSON COMPANY (OPC)  REGISTRATION', '1'),
(39, '10', 'PUBLIC LIMITED COMPANY REGISTRATION ', '1'),
(40, '10', 'NIDHI (FINANCE) COMPANY REGISTRATION', '1'),
(41, '10', 'SECTION 8 COMPANY (N.G.O REGISTRATION)', '1'),
(42, '10', 'PRODUCER COMPANY REGISTRATION', '1'),
(43, '10', 'PRIVATE LIMITED COMPANY TO ONE PERSON COMPANY REGISTRATION', '1'),
(44, '10', 'PRIVATE LIMITED COMPANY TO PUBLIC LIMITED COMPANY REGISTRATION', '1'),
(45, '10', 'SOLE PROPRIETORSHIP TO PRIVATE LIMITED COMPANY REGISTRATION', '1'),
(46, '10', 'COMPANY NAME APPROVAL', '1'),
(47, '10', 'DIN (DIRECTOR IDENTIFICATION NUMBER)', '1'),
(48, '10', 'COMPANY NAME CHANGE', '1'),
(49, '10', 'COMPANY CHANGE ITS REGISTERED OFFICE ADDRESS ', '1'),
(50, '10', 'COMPANY DIRECTORS ADDITION / REMOVE / CHANGE INTO COMPANY', '1'),
(51, '10', 'COMPANY OBJECT CHANGE ', '1'),
(52, '10', 'COMPANY PAID UP & AUTHORISED  CAPITAL INCREASED', '1'),
(53, '10', 'COMPANY SHARE TRANSFER', '1'),
(54, '10', ' MOA / AOA DRAFTING  AMENDMENTS', '1'),
(55, '10', 'COMPANY CLOSING / WINDING UP', '1'),
(56, '11', 'PARTNERSHIP  FIRM REGISTRATION (NOTARISED)', '1'),
(57, '11', 'PARTNER ADDITION / REMOVE / CHANGE INTO PARTNERSHIP  FIRM', '1'),
(58, '11', 'DISSOLUTION OF PARTNERSHIP FIRM', '1'),
(59, '11', 'LLP (LIMITED LIABILITY PARTNERSHIP) REGISTRATION ', '1'),
(60, '11', 'PARTNER ADDITION / REMOVE / CHANGE INTO LLP ', '1'),
(61, '11', 'PARTNERSHIP TO LLP (LIMITED LIABILITY PARTNERSHIP)', '1'),
(62, '11', 'WINDING / CLOSING OF LLP', '1'),
(63, '3', 'ESIC (EMPLOYEES STATE INSURANCE CORPORATION) REGISTRATION', '1'),
(64, '3', 'EPF (EMPLOYEES PROVIDENT FUND) REGISTRATION', '1'),
(65, '3', 'PT (PROFESSIONAL TAX ) REGISTRATION', '1'),
(66, '3', 'ESIC (EMPLOYEES STATE INSURANCE CORPORATION) RETURN', '1'),
(67, '3', 'EPF (EMPLOYEES PROVIDENT FUND) RETURN', '1'),
(68, '3', 'PT (PROFESSIONAL TAX ) RETURN', '1'),
(69, '3', 'EPF (EMPLOYEES PROVIDENT FUND) WITHDRAWAL', '1'),
(70, '3', 'ESIC (EMPLOYEES STATE INSURANCE CORPORATION) NUMBER CANCELLATION', '1'),
(71, '3', 'EPF (EMPLOYEES PROVIDENT FUND) NUMBER CANCELLATION', '1'),
(72, '3', 'PT (PROFESSIONAL TAX ) NUMBER CANCELLATION', '1'),
(73, '3', 'LWF (LABOUR WELFARE FUND) REGISTRATION', '1'),
(74, '3', 'LWF (LABOUR WELFARE FUND) RETURN', '1'),
(75, '3', 'LWF (LABOUR WELFARE FUND) CANCELLATION', '1'),
(76, '3', 'LABOUR  LICENSE (CENTRAL) REGISTRATION', '1'),
(77, '3', 'LABOUR LICENSE (CENTRAL) RENEWAL', '1'),
(78, '3', 'LABOUR LICENSE (CENTRAL) CANCELLATION', '1'),
(79, '3', 'LABOUR LICENSE (STATE) REGISTRATION', '1'),
(80, '3', 'LABOUR LICENSE (STATE) RENEWAL', '1'),
(81, '3', 'LABOUR LICENSE (STATE) CANCELLATION', '1'),
(82, '11', 'GUMASTADHARA  REGISTRATION (BUSINESS STATE LICENSE)', '1'),
(83, '11', 'MSME REGISTRATION  (UDYAM REGISTRATION)', '1'),
(84, '11', 'HUF REGISTRATION', '1'),
(85, '11', 'TRUST REGISTRATION', '1'),
(86, '11', 'N.G.O REGISTRATION  (SECTION 8 COMPANY)', '1'),
(87, '11', 'SOCIETY REGISTRATION', '1'),
(88, '11', '12A REGISTRATION', '1'),
(89, '11', '80G REGISTRATION', '1'),
(90, '11', '35AC REGISTRATION', '1'),
(91, '11', 'IMPORT EXPORT CODE  (IEC) REGISTRATION', '1'),
(92, '11', 'APEDA REGISTRATION', '1'),
(93, '11', 'PSARA REGISTRATION', '1'),
(94, '11', 'EXCISE REGISTRATION', '1'),
(95, '11', 'STARTUP INDIA REGISTRATION', '1'),
(96, '11', 'FCRA REGISTRATION', '1'),
(97, '11', 'ISO REGISTRATION', '1'),
(98, '11', 'RWA REGISTRATION', '1'),
(99, '5', 'SALE DEED (DASTAVEJ) - RESIDENTIAL - FLAT / APARTMENT', '1'),
(100, '5', 'SALE DEED (DASTAVEJ) - RESIDENTIAL - TENEMENT / ROW - HOUSE /  BUNGLOW', '1'),
(101, '5', 'SALE DEED (DASTAVEJ) - NON - AGRICULTURE LAND (OPEN PLOT)', '1'),
(102, '5', 'SALE DEED (DASTAVEJ) - COMMERCIAL - SHOP', '1'),
(103, '5', 'SALE DEED (DASTAVEJ) - COMMERCIAL - OFFICE', '1'),
(104, '5', 'SALE DEED (DASTAVEJ) -  AGRICULTURE  - OPEN LAND FARM', '1'),
(105, '5', 'SALE DEED (DASTAVEJ) -  AGRICULTURE  - OPEN LAND FARM - BIN PIYAT', '1'),
(106, '5', 'SALE DEED (DASTAVEJ) - INDUSTRY - SSI', '1'),
(107, '5', 'SALE DEED (DASTAVEJ) - INDUSTRY - LSI', '1'),
(108, '5', 'BANAKHAT (AGREEMENT TO SALE) REGISTERED ', '1'),
(109, '5', 'POWER OF ATTORNEY - REGISTERED', '1'),
(110, '5', 'RENT AGREEMENT ', '1'),
(111, '5', 'AFFIDAVIT', '1'),
(112, '5', 'BANAKHAT (AGREEMENT TO SALE) NOTARISED ', '1'),
(113, '5', 'MONEY / FINANCE / LOAN AGREEMENT ', '1'),
(114, '5', 'PARTNERSHIP FIRM REGISTRATION (REGISTERED)', '1'),
(115, '5', 'PROPERTY CARD - FLAT / APARTMENT', '1'),
(116, '5', 'PROPERTY CARD - TENEMENT / ROW - HOUSE / BUNGLOW', '1'),
(117, '5', 'PROPERTY CARD - COMMERCIAL - OFFICE', '1'),
(118, '5', 'PROPERTY CARD - COMMERCIAL - SHOP', '1'),
(119, '5', 'PROPERTY CARD - COMMERCIAL - FACTORY / SHED ', '1'),
(120, '5', 'PROPERTY CARD - OPEN PLOT', '1'),
(121, '5', 'MAP OF PROPERTY', '1'),
(122, '5', 'INDEX COPY GOVT. FEES +  OUR CONSULTANCY', '1'),
(123, '5', '7/12 (SATBARA UTARA) / 8 A / 6 ENTRY ', '1'),
(124, '5', 'MORTGAGE DEED (REGISTERED)', '1'),
(125, '5', 'MORTGAGE RELEASE DEED (REGISTERED)', '1'),
(126, '5', 'PROPERTY MEASUREMENT', '1'),
(127, '5', 'PROPERTY TAX (VERO) NAME TRANSFER - SHOP / OFFICE / FACTORY /SHED', '1'),
(128, '5', 'PROPERTY TAX (VERO) NAME TRANSFER - TENEMENT / ROW - HOUSE / BUNGLOW ', '1'),
(129, '5', 'PROPERTY TAX (VERO) NAME TRANSFER - FLAT / APARTMENT', '1'),
(130, '5', 'G.E.B ( ELECTRICITY ) NAME TRANSFER - SHOP / OFFICE / FACTORY / SHED', '1'),
(131, '5', 'G.E.B ( ELECTRICITY ) NAME TRANSFER - TENEMENT / ROW - HOUSE / BUNGLOW', '1'),
(132, '5', 'G.E.B ( ELECTRICITY ) NAME TRANSFER - FLAT / APARTMENT', '1'),
(133, '5', 'GAS CONNECTION NAME TRANSFER', '1'),
(134, '5', 'GAZETTE NAME TRANSFER', '1'),
(135, '5', 'LEASE AGREEMENT (REGISTERED)', '1'),
(136, '5', 'CONSTRUCTION AGREEMENT', '1'),
(137, '5', 'WILL DEED', '1'),
(138, '5', 'ADOPTION DEED', '1'),
(139, '5', 'ASSIGNMENT DEED', '1'),
(140, '5', 'VEHICLE TRANSFER DEED', '1'),
(141, '5', 'GIFT DEED', '1'),
(142, '5', 'EXCHANGE DEED', '1'),
(143, '5', 'TRUST DEED', '1'),
(144, '5', 'INHERITANCE DEED', '1'),
(145, '5', 'BIRTH CERTIFICATE', '1'),
(146, '5', 'MARRIAGE CERTIFICATE', '1'),
(147, '5', 'DEATH CERTIFICATE', '1'),
(148, '5', 'DOMICILE CERTIFICATE', '1'),
(149, '5', 'SOLVENCY CERTIFICATE', '1'),
(150, '5', 'GOVT. INCOME CERTIFICATE (AAVAK DHAKHLO)', '1'),
(151, '5', 'FACTORY LICENSE', '1'),
(152, '5', 'FSSAI / FOOD LICENSE  (BASIC REGISTRATION)', '1'),
(153, '5', 'FSSAI / FOOD LICENSE (STATE REGISTRATION)', '1'),
(154, '5', 'FSSAI / FOOD LICENSE  (CENTRAL REGISTRATION)', '1'),
(155, '5', ' FIRE LICENSE', '1'),
(156, '5', 'POLLUTION LICENSE', '1'),
(157, '8', 'RERA NEW PROJECT REGISTRATION', '1'),
(158, '5', 'RERA AGENT REGISTRATION', '1'),
(159, '5', ' RERA RETURN', '1'),
(160, '1', 'CA CERTIFIED INCOME TAX RETURN WITH UDIN', '1'),
(161, '11', 'GSTR-3B & GSTR-1 (REGULAR DEALER) , ESI , EPF , PT , ACCOUNTING & INCOME TAX RETURN ', '1'),
(162, '5', 'ASHANTDHARA PERMISSION', '1'),
(163, '5', 'MEHSUL TAX CONSULTANCY', '1'),
(164, '5', 'E-STAMP  GOVT.  PURCHASED COST   (4.90%)', '1'),
(165, '5', 'REGISTRATION GOVT. FEES (1%)', '1'),
(166, '5', ' GOVT. PAGES CHARGES FOR DEED', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(200) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_mobile` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maratial_status` varchar(100) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `emergency_mobile` varchar(20) NOT NULL,
  `hra` varchar(255) NOT NULL,
  `medical_allowance` varchar(255) NOT NULL,
  `special_allowance` varchar(255) NOT NULL,
  `phone_allowance` varchar(255) NOT NULL,
  `other_allowance` varchar(255) NOT NULL,
  `provident_fund` varchar(255) NOT NULL,
  `professional_tax` varchar(255) NOT NULL,
  `other_deduction` varchar(255) NOT NULL,
  `employment_type` varchar(100) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `gross_salary` varchar(255) NOT NULL,
  `total_deduction` varchar(255) NOT NULL,
  `net_salary` varchar(255) NOT NULL,
  `pl_balance` varchar(100) NOT NULL,
  `half_day_balance` varchar(100) NOT NULL,
  `cl_balance` varchar(100) NOT NULL,
  `sick_balance` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `show_menu` text NOT NULL,
  `permissions` text NOT NULL,
  `web_status` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `emp_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `joining_date`, `dob`, `gender`, `maratial_status`, `father_name`, `city`, `state`, `present_address`, `permanent_address`, `emergency_mobile`, `hra`, `medical_allowance`, `special_allowance`, `phone_allowance`, `other_allowance`, `provident_fund`, `professional_tax`, `other_deduction`, `employment_type`, `basic_salary`, `gross_salary`, `total_deduction`, `net_salary`, `pl_balance`, `half_day_balance`, `cl_balance`, `sick_balance`, `role`, `status`, `profile_image`, `department`, `show_menu`, `permissions`, `web_status`, `project_name`, `designation`) VALUES
(1, '0001', 'MUKESH P LOHANA', 'test', '01234567890', '1a1dc91c907325c69271ddf0c944bc72', '2021-04-10', '2020-07-01', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '02-08-2023-1608303581.jpg', '2', '17,36,37,38,41,42,48,52,55,88,137,150,151,159,160,162', '17_add,17_edit,17_delete,17_status,36_add,36_edit,36_delete,36_status,37_add,37_edit,37_delete,37_status,38_add,38_edit,38_delete,38_status,41_add,41_edit,41_delete,41_status,42_add,42_edit,42_delete,42_status,48_add,48_edit,48_delete,48_status,52_add,52_edit,52_delete,52_status,55_add,55_edit,55_delete,55_status,88_add,88_edit,88_delete,88_status,137_add,137_edit,137_delete,137_status,150_add,150_edit,150_delete,150_status,151_add,151_edit,151_delete,151_status,159_add,159_edit,159_delete,159_status,160_add,160_edit,160_delete,160_status,162_add,162_edit,162_delete,162_status', 0, 'FIRST ONE FINANCIAL SERVICES,MUKESH LOHANA AND ASSOCIATES', 'DIRECTOR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
