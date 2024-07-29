-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2023 at 06:37 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `updated_naac`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activity_code` int NOT NULL,
  `activity_name` varchar(180) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity_code`, `activity_name`, `status`) VALUES
(3, 3, 'Assembly', '1'),
(4, 22, 'Sub Assembly', '1');

-- --------------------------------------------------------

--
-- Table structure for table `administration_charges`
--

DROP TABLE IF EXISTS `administration_charges`;
CREATE TABLE IF NOT EXISTS `administration_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `administration_quantity` varchar(100) NOT NULL,
  `administration_uom` varchar(100) NOT NULL,
  `administration_unit_rate` varchar(100) NOT NULL,
  `administration_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administration_charges`
--

INSERT INTO `administration_charges` (`id`, `cost_est_id`, `administration_quantity`, `administration_uom`, `administration_unit_rate`, `administration_total_cost`) VALUES
(1, 0, '7', 'mtrd', '8', '56'),
(2, 0, '4', 'dfdfdf', '37', '148'),
(3, 0, '12', '', '', ''),
(4, 0, '12', '', '', ''),
(5, 0, '', '', '', ''),
(6, 0, '', '', '', ''),
(7, 0, '', '', '', ''),
(8, 0, '', '', '', ''),
(9, 0, '13258', '', '1358', '18004364'),
(10, 0, '13258', '', '1358', '18004364'),
(11, 0, '', '', '', ''),
(12, 0, '2546', '', '12', '30552'),
(13, 0, '', '', '', ''),
(14, 0, '', '', '', ''),
(15, 0, '25', '', '', ''),
(16, 0, '25', '', '', ''),
(17, 0, '', '', '', ''),
(18, 0, '', '', '', ''),
(19, 0, '', '', '', ''),
(20, 0, '', '', '', ''),
(21, 0, '', '', '', ''),
(22, 0, '', '', '', ''),
(23, 0, '', '', '', ''),
(24, 0, '', '', '', ''),
(25, 0, '', '', '', ''),
(26, 0, '', '', '', ''),
(27, 0, '', '', '', ''),
(28, 0, '', '', '', ''),
(29, 0, '', '', '', ''),
(30, 2, '1321', '', '', ''),
(31, 2, '', '', '', ''),
(32, 17, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `criteria_link` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bank_name`, `status`, `criteria_link`) VALUES
(1, 'Criteria 1', '1', 'http://localhost/project/Criteria/Criteria%201/Criteria%201.1.php'),
(2, 'Criteria 2', '1', 'www.google.com/\r\n'),
(3, 'Criteria 3', '1', 'www.google.com/'),
(4, 'Criteria 4', '1', 'www.google.com/'),
(5, 'Criteria 5', '1', 'www.google.com/'),
(6, 'Criteria 6', '1', 'www.google.com/'),
(7, 'Criteria 7', '1', 'www.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `chemical_testing`
--

DROP TABLE IF EXISTS `chemical_testing`;
CREATE TABLE IF NOT EXISTS `chemical_testing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `chemical_no_of_sample` varchar(100) NOT NULL,
  `chemical_unit_rate` varchar(50) NOT NULL,
  `chemical_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemical_testing`
--

INSERT INTO `chemical_testing` (`id`, `cost_est_id`, `chemical_no_of_sample`, `chemical_unit_rate`, `chemical_total_cost`) VALUES
(1, 0, '1', '20', '20'),
(2, 2, '1', '20', '20'),
(3, 2, '1', '20', '20'),
(4, 2, '1', '20', '20'),
(5, 8, '1', '20', '20'),
(6, 9, '1', '20', '20'),
(7, 12, '10', '5', '50'),
(8, 13, '1', '20', '20'),
(9, 14, '1', '20', '20');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int NOT NULL AUTO_INCREMENT,
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
  `id` int NOT NULL AUTO_INCREMENT,
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
  `id` int NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `company_code`, `company_number`, `pancard`, `landline`, `gst_number`, `address`, `register_date`, `company_email`, `website`, `status`) VALUES
(1, 'PIET', 'PIET', '123456789', '01234', '9632', 'NA', 'addreess', '2023-04-01', '123@gmail.com', 'parul.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company_bank_account`
--

DROP TABLE IF EXISTS `company_bank_account`;
CREATE TABLE IF NOT EXISTS `company_bank_account` (
  `id` int NOT NULL AUTO_INCREMENT,
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
(2, '1', 'ICICI BANK', '000305501179', 'CURRENT', 'ICIC0000003', 'NEW VIP  ROAD , VADODARA', '1', 'EARTH ICON ,  NEW VIP  ROAD , VADODARA.');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

DROP TABLE IF EXISTS `contract`;
CREATE TABLE IF NOT EXISTS `contract` (
  `id` int NOT NULL AUTO_INCREMENT,
  `contract_desc` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `contract_desc`, `status`) VALUES
(2, 'FABRICATION', '1'),
(3, 'MACHINING', '1'),
(4, 'LASER CUTTING', '1'),
(5, 'WATER JET CUTTING', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cost_estimation`
--

DROP TABLE IF EXISTS `cost_estimation`;
CREATE TABLE IF NOT EXISTS `cost_estimation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cost_estimation`
--

INSERT INTO `cost_estimation` (`id`, `user_id`) VALUES
(1, '1'),
(2, '1'),
(3, '1'),
(4, '1'),
(5, '1'),
(6, '1'),
(7, '1'),
(8, '1'),
(9, '1'),
(10, '1'),
(11, '1'),
(12, '1'),
(13, '1'),
(14, '1'),
(15, '1'),
(16, '1');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_3_5_2`
--

DROP TABLE IF EXISTS `criteria_3_5_2`;
CREATE TABLE IF NOT EXISTS `criteria_3_5_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_of_the_consultancy` varchar(10000) NOT NULL,
  `name_of_advisory` varchar(100) NOT NULL,
  `consulting` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `month` int NOT NULL,
  `revenue_generated` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_3_5_2`
--

INSERT INTO `criteria_3_5_2` (`id`, `name_of_the_consultancy`, `name_of_advisory`, `consulting`, `year`, `month`, `revenue_generated`, `department`) VALUES
(1, 'zerodha', 'rahul sir', 'piet', '2020', 5, '25000', 'IT'),
(2, 'Groww', 'dipak sir', 'pit', '2021', 7, '43000', 'CSE'),
(3, 'jhl', 'we', 'ds', 'cxc', 0, '', 'dx'),
(4, 'cbhg', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_3_5_2_1`
--

DROP TABLE IF EXISTS `criteria_3_5_2_1`;
CREATE TABLE IF NOT EXISTS `criteria_3_5_2_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_of_the_consultancy` varchar(1000) NOT NULL,
  `name_of_advisory` varchar(1000) NOT NULL,
  `consulting` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL,
  `month` varchar(1000) NOT NULL,
  `revenue_generated` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_3_5_2_1`
--

INSERT INTO `criteria_3_5_2_1` (`id`, `name_of_the_consultancy`, `name_of_advisory`, `consulting`, `year`, `month`, `revenue_generated`, `department`) VALUES
(1, 'ABC', 'Kaushal K', '', '2022', 'Oct', '150000', 'IT'),
(2, 'XYZ', 'V Kaushal K', '', '', 'Oct', '', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_3_6_1`
--

DROP TABLE IF EXISTS `criteria_3_6_1`;
CREATE TABLE IF NOT EXISTS `criteria_3_6_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year` varchar(1000) NOT NULL,
  `month` varchar(1000) NOT NULL,
  `name_of_the_activity` varchar(1000) NOT NULL,
  `organising_unit` varchar(1000) NOT NULL,
  `number_of_students_participated_in_such_activities` varchar(1000) NOT NULL,
  `number_of_teachers_participated_in_such_activities` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_3_6_1`
--

INSERT INTO `criteria_3_6_1` (`id`, `year`, `month`, `name_of_the_activity`, `organising_unit`, `number_of_students_participated_in_such_activities`, `number_of_teachers_participated_in_such_activities`, `department`) VALUES
(1, '2020', 'OCT', 'Playing Cricket', '', '500', '100', 'IT'),
(2, '2021', 'OCT', 'Playing Cricket', '', '1000', '100', 'CSE'),
(3, '', 'sept', 'zion tech', '', '150', '', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_3_6_2`
--

DROP TABLE IF EXISTS `criteria_3_6_2`;
CREATE TABLE IF NOT EXISTS `criteria_3_6_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year` varchar(1000) NOT NULL,
  `month` varchar(1000) NOT NULL,
  `name_of_the_activity` varchar(1000) NOT NULL,
  `organising_unit` varchar(1000) NOT NULL,
  `number_of_students_participated_in_such_activities` varchar(1000) NOT NULL,
  `number_of_teachers_participated_in_such_activities` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_3_6_2`
--

INSERT INTO `criteria_3_6_2` (`id`, `year`, `month`, `name_of_the_activity`, `organising_unit`, `number_of_students_participated_in_such_activities`, `number_of_teachers_participated_in_such_activities`, `department`) VALUES
(1, '2020', 'NOV', 'Football', '', '150', '50', 'IT'),
(2, '2021', 'NOV', 'Football', '', '150', '50', 'IT'),
(3, '2021', 'NOV', 'Football', '', '150', '50', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_4_3_5_econtent`
--

DROP TABLE IF EXISTS `criteria_4_3_5_econtent`;
CREATE TABLE IF NOT EXISTS `criteria_4_3_5_econtent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_year` varchar(1000) NOT NULL,
  `name_of_teacher` varchar(1000) NOT NULL,
  `name_of_the_module` varchar(1000) NOT NULL,
  `platform_on_which_module_is_developed` varchar(1000) NOT NULL,
  `date_of_launching_the_module` varchar(1000) NOT NULL,
  `link_to_the_relevant_document` varchar(1000) NOT NULL,
  `name_of_the_department` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_4_3_5_econtent`
--

INSERT INTO `criteria_4_3_5_econtent` (`id`, `academic_year`, `name_of_teacher`, `name_of_the_module`, `platform_on_which_module_is_developed`, `date_of_launching_the_module`, `link_to_the_relevant_document`, `name_of_the_department`) VALUES
(1, '2020', 'Kaushal K', 'QARN', '', '20th OCT', '', 'IT'),
(2, '2020', 'Kaushal K', 'QARN', '', '20th OCT', '', 'IT'),
(3, '2020', 'Kaushal ', 'QARN', '', '20th OCT', '', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_4_5_1_1`
--

DROP TABLE IF EXISTS `criteria_4_5_1_1`;
CREATE TABLE IF NOT EXISTS `criteria_4_5_1_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_year` int NOT NULL,
  `name_of_the_department` varchar(100) NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_of_expenditure` varchar(100) NOT NULL,
  `total_amount_of_remuneration` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_4_5_1_1`
--

INSERT INTO `criteria_4_5_1_1` (`id`, `academic_year`, `name_of_the_department`, `status`, `type_of_expenditure`, `total_amount_of_remuneration`) VALUES
(1, 2022, 'IT', '1', 'Useful', '20000'),
(2, 2021, 'IT', '1', 'Useful', '35000'),
(3, 2020, 'CSE', '1', 'Useful', '2345'),
(4, 2021, 'IT', '1', 'useful', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_5.2.1_appeared`
--

DROP TABLE IF EXISTS `criteria_5.2.1_appeared`;
CREATE TABLE IF NOT EXISTS `criteria_5.2.1_appeared` (
  `SR.NO` int NOT NULL AUTO_INCREMENT,
  `Academic Year` int NOT NULL,
  `Name of the capability enhancement scheme` longtext NOT NULL,
  `Name of Department` longtext NOT NULL,
  `Date of implementation (DD-MM-YYYY)` date NOT NULL,
  `Name of College` longtext NOT NULL,
  `Number of students enrolled` longtext NOT NULL,
  `Name of Agencies Involved with their Contact Detail` longtext NOT NULL,
  `Proof No.` longtext NOT NULL,
  `Remark` longtext NOT NULL,
  PRIMARY KEY (`SR.NO`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_5.2.1_appeared`
--

INSERT INTO `criteria_5.2.1_appeared` (`SR.NO`, `Academic Year`, `Name of the capability enhancement scheme`, `Name of Department`, `Date of implementation (DD-MM-YYYY)`, `Name of College`, `Number of students enrolled`, `Name of Agencies Involved with their Contact Detail`, `Proof No.`, `Remark`) VALUES
(1, 2022, 'Aayushman Bharat', 'Information Department', '2022-10-13', 'Parul University', '141', 'Fin Tech. (9786543210)', '329', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_5_2_1_appeared`
--

DROP TABLE IF EXISTS `criteria_5_2_1_appeared`;
CREATE TABLE IF NOT EXISTS `criteria_5_2_1_appeared` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_year` mediumtext NOT NULL,
  `name_of_the_capability_enhancement_scheme` mediumtext NOT NULL,
  `name_of_department` mediumtext NOT NULL,
  `date_of_implementation` date NOT NULL,
  `name_of_college` mediumtext NOT NULL,
  `number_of_students_enrolled` int NOT NULL,
  `name_of_agencies_involved_with_their_contact_details` mediumtext NOT NULL,
  `proof_no` mediumtext NOT NULL,
  `remark` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_5_2_1_appeared`
--

INSERT INTO `criteria_5_2_1_appeared` (`id`, `academic_year`, `name_of_the_capability_enhancement_scheme`, `name_of_department`, `date_of_implementation`, `name_of_college`, `number_of_students_enrolled`, `name_of_agencies_involved_with_their_contact_details`, `proof_no`, `remark`) VALUES
(1, '2022', 'Ayushman Bharat ', 'IT', '2021-05-11', 'PIET', 141, 'Zen Tech.(987654321)', '586567', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_5_2_2`
--

DROP TABLE IF EXISTS `criteria_5_2_2`;
CREATE TABLE IF NOT EXISTS `criteria_5_2_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_year` int NOT NULL,
  `enrollment_no` mediumtext NOT NULL,
  `name_of_student` mediumtext NOT NULL,
  `name_of_department` mediumtext NOT NULL,
  `name_of_college` mediumtext NOT NULL,
  `name_of_the_employer_with_contact_details` mediumtext NOT NULL,
  `programme_graduated_from` mediumtext NOT NULL,
  `pay_package_at_appointment` mediumtext NOT NULL,
  `proof_no` mediumtext NOT NULL,
  `remark` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_5_2_2`
--

INSERT INTO `criteria_5_2_2` (`id`, `academic_year`, `enrollment_no`, `name_of_student`, `name_of_department`, `name_of_college`, `name_of_the_employer_with_contact_details`, `programme_graduated_from`, `pay_package_at_appointment`, `proof_no`, `remark`) VALUES
(1, 2022, '20030301', 'Rahul', 'IT', 'PIET', 'XYZ 987612', 'xVISTARA', '25000', '67453', 'Done'),
(2, 2020, 'ds', 'wdc', 'wef', 'wef', 'wfe', 'wef', 'wef', 'csdc', 'wfwe'),
(3, 2020, 'wfew', 'wef', 'wef', 'wef', '', '5ytr', 'yuj', '3563', 'Done'),
(4, 2022, '85858', 'chirag bha', 'chirag bha', 'chirag bha', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_5_2_2_1`
--

DROP TABLE IF EXISTS `criteria_5_2_2_1`;
CREATE TABLE IF NOT EXISTS `criteria_5_2_2_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_year` int NOT NULL,
  `enrollment_no` int NOT NULL,
  `name_of_student` varchar(100) NOT NULL,
  `name_of_department` varchar(100) NOT NULL,
  `name_of_college` varchar(100) NOT NULL,
  `name_of_the_employer_with_contact_details` varchar(100) NOT NULL,
  `programme_graduated_from` varchar(100) NOT NULL,
  `pay_package_at_appointment` varchar(100) NOT NULL,
  `proof_no` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_5_2_2_1`
--

INSERT INTO `criteria_5_2_2_1` (`id`, `academic_year`, `enrollment_no`, `name_of_student`, `name_of_department`, `name_of_college`, `name_of_the_employer_with_contact_details`, `programme_graduated_from`, `pay_package_at_appointment`, `proof_no`, `remark`) VALUES
(1, 2020, 13, 'Kaushal Kalariya', 'PIET', 'Parul university', 'KKP(98562315)', 'Current', '100000', 'P123', 'Done'),
(2, 2020, 54, 'Vishva K', 'PIET', 'Parul university', 'KKP(98562315)', 'Current', '100000', 'P123', 'Done'),
(6, 2020, 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_5_3_1`
--

DROP TABLE IF EXISTS `criteria_5_3_1`;
CREATE TABLE IF NOT EXISTS `criteria_5_3_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_year` int NOT NULL,
  `enrollment_no` int NOT NULL,
  `name_of_student` varchar(1000) NOT NULL,
  `name_of_department` varchar(1000) NOT NULL,
  `name_of_college` varchar(1000) NOT NULL,
  `name_of_the_award` varchar(1000) NOT NULL,
  `select_appropriate_event` varchar(1000) NOT NULL,
  `classification_of_event` varchar(1000) NOT NULL,
  `proof_no` varchar(1000) NOT NULL,
  `remark` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `criteria_5_3_1`
--

INSERT INTO `criteria_5_3_1` (`id`, `academic_year`, `enrollment_no`, `name_of_student`, `name_of_department`, `name_of_college`, `name_of_the_award`, `select_appropriate_event`, `classification_of_event`, `proof_no`, `remark`) VALUES
(1, 2022, 0, '', '', '', '', '', '', '', ''),
(2, 2121, 34, '56', '876', '345', '65', '56', '345', '987', '123');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int NOT NULL,
  `Department_Name` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `Department_Name`, `Status`) VALUES
(16, 'IT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `documentation_charges`
--

DROP TABLE IF EXISTS `documentation_charges`;
CREATE TABLE IF NOT EXISTS `documentation_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `documentation_total_no` int NOT NULL,
  `documentation_unit_rate` int NOT NULL,
  `documentation_total_cost` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `documentation_charges`
--

INSERT INTO `documentation_charges` (`id`, `cost_est_id`, `documentation_total_no`, `documentation_unit_rate`, `documentation_total_cost`) VALUES
(1, 0, 10, 50, 500),
(2, 2, 10, 50, 500),
(3, 2, 10, 50, 500),
(4, 2, 10, 50, 500),
(5, 8, 10, 50, 500),
(6, 9, 10, 50, 500),
(7, 9, 0, 0, 0),
(8, 9, 0, 0, 0),
(9, 12, 0, 0, 0),
(10, 13, 10, 50, 500),
(11, 14, 10, 50, 500),
(12, 16, 10, 50, 500),
(13, 17, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `electricity_charges`
--

DROP TABLE IF EXISTS `electricity_charges`;
CREATE TABLE IF NOT EXISTS `electricity_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `electricity_quantity` varchar(100) NOT NULL,
  `electricity_uom` varchar(100) NOT NULL,
  `electricity_unit_rate` varchar(100) NOT NULL,
  `electricity_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `electricity_charges`
--

INSERT INTO `electricity_charges` (`id`, `cost_est_id`, `electricity_quantity`, `electricity_uom`, `electricity_unit_rate`, `electricity_total_cost`) VALUES
(1, 0, '5', 'simple123', '7', '35'),
(2, 0, '6', 'sdd sds', '2', '12'),
(3, 0, '12', '', '', ''),
(4, 0, '12', '', '', ''),
(5, 0, '', '', '', ''),
(6, 0, '', '', '', ''),
(7, 0, '12225', '', '', ''),
(8, 0, '12225', '', '', ''),
(9, 0, '1135', '', '135', '153225'),
(10, 0, '1135', '', '135', '153225'),
(11, 0, '', '', '', ''),
(12, 0, '254', '', '54', '13716'),
(13, 0, '', '', '', ''),
(14, 0, '', '', '', ''),
(15, 0, '', '', '', ''),
(16, 0, '', '', '', ''),
(17, 0, '', '', '', ''),
(18, 0, '', '', '', ''),
(19, 0, '', '', '', ''),
(20, 0, '', '', '', ''),
(21, 0, '', '', '', ''),
(22, 0, '', '', '', ''),
(23, 0, '', '', '', ''),
(24, 0, '', '', '', ''),
(25, 0, '', '', '', ''),
(26, 0, '', '', '', ''),
(27, 0, '', '', '', ''),
(28, 0, '', '', '', ''),
(29, 0, '', '', '', ''),
(30, 2, '132', '', '', ''),
(31, 2, '', '', '', ''),
(32, 17, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(80) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3;

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
-- Table structure for table `engineering_charges`
--

DROP TABLE IF EXISTS `engineering_charges`;
CREATE TABLE IF NOT EXISTS `engineering_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `engineering_total_no` varchar(100) NOT NULL,
  `engineering_unit_rate` varchar(100) NOT NULL,
  `engineering_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `engineering_charges`
--

INSERT INTO `engineering_charges` (`id`, `cost_est_id`, `engineering_total_no`, `engineering_unit_rate`, `engineering_total_cost`) VALUES
(1, 0, '10', '11', '110'),
(2, 2, '10', '11', '110'),
(3, 2, '10', '11', '110'),
(4, 2, '10', '11', '110'),
(5, 8, '10', '11', '110'),
(6, 9, '10', '11', '110'),
(7, 9, '', '', ''),
(8, 9, '', '', ''),
(9, 12, '', '', ''),
(10, 13, '10', '11', '110'),
(11, 14, '10', '11', '110'),
(12, 16, '10', '11', '110'),
(13, 17, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

DROP TABLE IF EXISTS `estimate`;
CREATE TABLE IF NOT EXISTS `estimate` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tab_name` varchar(200) NOT NULL,
  `short_name` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`id`, `tab_name`, `short_name`, `status`) VALUES
(1, 'Rameshd', 'Simple1sd', '1'),
(2, 'adsd', 'asdasd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `estimate_tab`
--

DROP TABLE IF EXISTS `estimate_tab`;
CREATE TABLE IF NOT EXISTS `estimate_tab` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tab_name` varchar(200) NOT NULL,
  `short_name` varchar(200) NOT NULL,
  `sequence` int NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estimate_tab`
--

INSERT INTO `estimate_tab` (`id`, `tab_name`, `short_name`, `sequence`, `status`) VALUES
(10, 'Attaintment_Level', 'Attaintment Level', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `est_bom`
--

DROP TABLE IF EXISTS `est_bom`;
CREATE TABLE IF NOT EXISTS `est_bom` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `part_no` int NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `shape_id` int NOT NULL,
  `group_id` int NOT NULL,
  `inv_uom` varchar(10) NOT NULL,
  `unit_qty` int NOT NULL,
  `total_qty` int NOT NULL,
  `unit_weight` varchar(20) NOT NULL,
  `total_weight` varchar(20) NOT NULL,
  `unit_cost` int NOT NULL,
  `material_total_cost` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `est_bom`
--

INSERT INTO `est_bom` (`id`, `cost_est_id`, `part_no`, `pro_name`, `shape_id`, `group_id`, `inv_uom`, `unit_qty`, `total_qty`, `unit_weight`, `total_weight`, `unit_cost`, `material_total_cost`) VALUES
(2, 2, 1, 'product1', 7, 8, '10', 10, 10, '10', '10', 0, 0),
(3, 2, 3, 'product3', 6, 8, '10', 10, 10, '10', '10', 0, 0),
(4, 2, 4, 'pro4', 6, 8, '10', 10, 10, '10', '10', 0, 0),
(5, 5, 5, 'pro1', 6, 8, '10', 10, 10, '10', '10', 0, 0),
(6, 6, 6, 'pro6', 0, 0, '', 0, 0, '', '', 0, 0),
(7, 7, 1, 'pro1', 4, 8, '10', 10, 10, '-0.07065', '10', 0, 0),
(8, 8, 1, 'pro1', 4, 8, '10', 10, 10, '-0.077715', '10', 0, 0),
(9, 9, 1, 'pro1', 4, 8, '10', 10, 10, '-35.1837 	 	', '10', 0, 0),
(10, 10, 10, 'product10', 6, 8, 'KGS', 10, 51, '0.08 	 	', '9.6', 0, 0),
(11, 11, 3, 'product1', 4, 8, '10', 50, 6, '-13.67784 	 	', '10', 0, 60),
(12, 12, 1, 'product1', 6, 8, '10', 10, 10, '0.08', '10', 0, 100),
(13, 13, 2, 'pro2', 4, 8, '10', 10, 10, '-0.0002826 	 	', '10', 0, 100),
(14, 14, 1, 'pro1', 7, 8, '10', 10, 10, '576 	 	', '5760', 20, 115200),
(15, 16, 1, 'poduct1', 6, 8, '10', 20, 10, '20', '200', 50, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `est_broughtout`
--

DROP TABLE IF EXISTS `est_broughtout`;
CREATE TABLE IF NOT EXISTS `est_broughtout` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `mat_code` varchar(12) NOT NULL,
  `unit_rate` int NOT NULL,
  `quantity` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `est_broughtout`
--

INSERT INTO `est_broughtout` (`id`, `cost_est_id`, `pro_name`, `mat_code`, `unit_rate`, `quantity`, `total`) VALUES
(2, 2, '73', 'mat1', 10, 5, 50),
(3, 2, '73', 'mat1', 10, 5, 50),
(4, 2, '73', 'mat1', 10, 5, 50),
(5, 7, '73', 'mat1', 10, 5, 50),
(6, 8, '73', 'mat1', 10, 5, 50),
(7, 12, '73', 'mat1', 10, 5, 50),
(8, 13, '73', 'mat1', 10, 5, 50),
(9, 15, '73', 'mat1', 10, 5, 50),
(10, 17, '73', 'mat1', 40, 5, 200),
(11, 17, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `est_contract_page`
--

DROP TABLE IF EXISTS `est_contract_page`;
CREATE TABLE IF NOT EXISTS `est_contract_page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `contract_desc` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `contract_uom` varchar(20) NOT NULL,
  `contract_unit_rate` int NOT NULL,
  `contract_quantity` int NOT NULL,
  `contract_total_cost` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `est_contract_page`
--

INSERT INTO `est_contract_page` (`id`, `cost_est_id`, `contract_desc`, `description`, `contract_uom`, `contract_unit_rate`, `contract_quantity`, `contract_total_cost`) VALUES
(1, 0, 'MACHINING', '', 'kgs', 140, 50, 7000),
(2, 2, 'FABRICATION', '', 'kgs', 140, 50, 7000),
(3, 2, 'FABRICATION', '', 'kgs', 140, 50, 7000),
(4, 2, 'FABRICATION', '', 'kgs', 140, 50, 7000),
(5, 8, 'FABRICATION', '', 'kgs', 140, 5, 0),
(6, 9, 'FABRICATION', '', 'kgs', 140, 50, 0),
(7, 13, 'FABRICATION', '', 'kgs', 140, 50, 7000),
(8, 14, 'FABRICATION', '', 'kgs', 140, 50, 7000),
(9, 17, 'MACHINING', 'nh', 'kgs', 25, 5, 125),
(10, 17, '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `est_new_welder_qualifications`
--

DROP TABLE IF EXISTS `est_new_welder_qualifications`;
CREATE TABLE IF NOT EXISTS `est_new_welder_qualifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `new_welder_process` varchar(200) NOT NULL,
  `new_welder_thickness` varchar(200) NOT NULL,
  `new_welder_moc` varchar(200) NOT NULL,
  `new_welder_labtest` varchar(200) NOT NULL,
  `new_welder_tpicharge` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `est_new_welder_qualifications`
--

INSERT INTO `est_new_welder_qualifications` (`id`, `cost_est_id`, `new_welder_process`, `new_welder_thickness`, `new_welder_moc`, `new_welder_labtest`, `new_welder_tpicharge`) VALUES
(1, 0, 'dfssdf', 'hghfhfg', 'gfgfdgd', 'fggfg', '45'),
(2, 0, 'ggf', 'fdf', 'gfhh', 'hjjgj', '23'),
(3, 0, 'ffd', 'ghggj', 'hghfh', 'gfgfg', 'gfdgf'),
(4, 0, 'fdsgs', 'hfgh', 'fsds', 'gdfh', 'hhh'),
(5, 0, '01', '65', '43', '5', '86'),
(6, 0, 'egr', 'sedfv', 'sd', 'fs', 'sfsf'),
(7, 0, 'cv', 'dv', 'sdv', 'sdfsfd', 's'),
(8, 0, '50', '150', '25', '36', '82');

-- --------------------------------------------------------

--
-- Table structure for table `est_service`
--

DROP TABLE IF EXISTS `est_service`;
CREATE TABLE IF NOT EXISTS `est_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `service_name` varchar(20) NOT NULL,
  `service_uom_name` varchar(20) NOT NULL,
  `service_uom_rate` int NOT NULL,
  `service_quantity` int NOT NULL,
  `service_total` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `est_service`
--

INSERT INTO `est_service` (`id`, `cost_est_id`, `service_name`, `service_uom_name`, `service_uom_rate`, `service_quantity`, `service_total`) VALUES
(1, 0, 'serv3', 'hello', 10, 10, 100),
(2, 2, 'serv3', 'hello', 10, 10, 100),
(3, 2, 'serv3', 'hello', 10, 10, 100),
(4, 2, 'simple1', 'hello', 10, 10, 100),
(5, 8, 'simple1', 'hello', 10, 10, 100),
(6, 9, 'simple1', 'hello', 10, 10, 100),
(7, 13, 'simple1', 'hello', 10, 10, 100),
(8, 14, 'simple1', 'hello', 10, 10, 100),
(9, 16, 'serv3', 'hello', 10, 10, 100);

-- --------------------------------------------------------

--
-- Table structure for table `est_weld_consumable`
--

DROP TABLE IF EXISTS `est_weld_consumable`;
CREATE TABLE IF NOT EXISTS `est_weld_consumable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `consumable_process` varchar(200) NOT NULL,
  `consumable_thickness` varchar(200) NOT NULL,
  `consumable_meter` varchar(100) NOT NULL,
  `consumable_weld_deposition` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `est_weld_consumable`
--

INSERT INTO `est_weld_consumable` (`id`, `cost_est_id`, `consumable_process`, `consumable_thickness`, `consumable_meter`, `consumable_weld_deposition`) VALUES
(1, 0, 'smaw', 'fdfd', '45', 'ffdgg'),
(2, 0, 'smaw', 'ffdfdf', '56', 'fdfdfd'),
(3, 0, 'saw', 'dsfsd', '67', 'fghfhf');

-- --------------------------------------------------------

--
-- Table structure for table `final_transport_charges`
--

DROP TABLE IF EXISTS `final_transport_charges`;
CREATE TABLE IF NOT EXISTS `final_transport_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `final_tra_quantity` varchar(100) NOT NULL,
  `final_tra_uom` varchar(100) NOT NULL,
  `final_tra_unit_rate` varchar(100) NOT NULL,
  `final_tra_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `final_transport_charges`
--

INSERT INTO `final_transport_charges` (`id`, `cost_est_id`, `final_tra_quantity`, `final_tra_uom`, `final_tra_unit_rate`, `final_tra_total_cost`) VALUES
(1, 0, '7', 'kgs', '', '56'),
(2, 0, '55', 'kgs', '', '165'),
(3, 0, '2131', '', '', ''),
(4, 0, '2131', '', '', ''),
(5, 0, '', '', '', ''),
(6, 0, '', '', '', ''),
(7, 0, '', '', '', ''),
(8, 0, '', '', '', ''),
(9, 0, '215541', '', '', '9699345'),
(10, 0, '215541', '', '', '9699345'),
(11, 0, '', '', '', ''),
(12, 0, '', '', '', ''),
(13, 0, '', '', '', ''),
(14, 0, '', '', '', ''),
(15, 0, '', '', '', ''),
(16, 0, '', '', '', ''),
(17, 0, '', '', '', ''),
(18, 0, '', '', '', ''),
(19, 0, '', '', '', ''),
(20, 0, '', '', '', ''),
(21, 0, '', '', '', ''),
(22, 0, '', '', '', ''),
(23, 0, '', '', '', ''),
(24, 0, '', '', '', ''),
(25, 0, '', '', '', ''),
(26, 0, '', '', '', ''),
(27, 0, '', '', '', ''),
(28, 0, '', '', '', ''),
(29, 0, '', '', '', ''),
(30, 0, '', '', '', ''),
(31, 0, '', '', '', ''),
(32, 0, '', '', '', ''),
(33, 0, '', '', '', ''),
(34, 0, '', '', '', ''),
(35, 0, '', '', '', ''),
(36, 0, '', '', '', ''),
(37, 0, '', '', '', ''),
(38, 0, '', '', '', ''),
(39, 0, '', '', '', ''),
(40, 0, '', '', '', ''),
(41, 0, '', '', '', ''),
(42, 0, '', '', '', ''),
(43, 0, '', '', '', ''),
(44, 0, '', '', '', ''),
(45, 0, '', '', '', ''),
(46, 0, '', '', '', ''),
(47, 0, '', '', '', ''),
(48, 0, '', '', '', ''),
(49, 2, '2131', '', '', ''),
(50, 2, '2131', '', '', ''),
(51, 2, '', '', '', ''),
(52, 2, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `goverment_legal_charges`
--

DROP TABLE IF EXISTS `goverment_legal_charges`;
CREATE TABLE IF NOT EXISTS `goverment_legal_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `goverment_quantity` varchar(100) NOT NULL,
  `goverment_uom` varchar(100) NOT NULL,
  `goverment_unit_rate` varchar(100) NOT NULL,
  `goverment_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `goverment_legal_charges`
--

INSERT INTO `goverment_legal_charges` (`id`, `cost_est_id`, `goverment_quantity`, `goverment_uom`, `goverment_unit_rate`, `goverment_total_cost`) VALUES
(1, 0, '8', 'kgs', '9', '72'),
(2, 0, '2', 'ghghghgh', '9', '18'),
(3, 0, '1213', '', '', ''),
(4, 0, '1213', '', '', ''),
(5, 0, '', '', '', ''),
(6, 0, '', '', '', ''),
(7, 0, '', '', '', ''),
(8, 0, '', '', '', ''),
(9, 0, '13285', '', '15', '199275'),
(10, 0, '13285', '', '15', '199275'),
(11, 0, '', '', '', ''),
(12, 0, '', '', '', ''),
(13, 0, '', '', '', ''),
(14, 0, '', '', '', ''),
(15, 0, '', '', '', ''),
(16, 0, '', '', '', ''),
(17, 0, '', '', '', ''),
(18, 0, '', '', '', ''),
(19, 0, '', '', '', ''),
(20, 0, '', '', '', ''),
(21, 0, '', '', '', ''),
(22, 0, '', '', '', ''),
(23, 0, '', '', '', ''),
(24, 0, '', '', '', ''),
(25, 0, '', '', '', ''),
(26, 0, '', '', '', ''),
(27, 0, '', '', '', ''),
(28, 0, '', '', '', ''),
(29, 0, '', '', '', ''),
(30, 2, '13215', '', '', ''),
(31, 2, '', '', '', ''),
(32, 17, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `im1`
--

DROP TABLE IF EXISTS `im1`;
CREATE TABLE IF NOT EXISTS `im1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enrollment_no` int NOT NULL,
  `total_mco1` int NOT NULL,
  `given_mco1` int NOT NULL,
  `total_mco2` int NOT NULL,
  `given_mco2` int NOT NULL,
  `total_mco3` int NOT NULL,
  `given_mco3` int NOT NULL,
  `total_mco4` int NOT NULL,
  `given_mco4` int NOT NULL,
  `total_mco5` int NOT NULL,
  `given_mco5` int NOT NULL,
  `total_mco6` int NOT NULL,
  `given_mco6` int NOT NULL,
  `sub_total_marks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `im1`
--

INSERT INTO `im1` (`id`, `enrollment_no`, `total_mco1`, `given_mco1`, `total_mco2`, `given_mco2`, `total_mco3`, `given_mco3`, `total_mco4`, `given_mco4`, `total_mco5`, `given_mco5`, `total_mco6`, `given_mco6`, `sub_total_marks`) VALUES
(1, 13, 12, 2, 11, 8, 9, 4, 6, 6, 2, 1, 20, 15, 30),
(2, 25, 20, 10, 16, 15, 16, 15, 20, 10, 20, 10, 16, 10, 35),
(3, 654, 60, 43, 60, 32, 60, 54, 60, 54, 60, 60, 43, 45, 240),
(4, 9876, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 345, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 230, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_followup`
--

DROP TABLE IF EXISTS `inquiry_followup`;
CREATE TABLE IF NOT EXISTS `inquiry_followup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `inquiry_code` varchar(100) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_feedback` varchar(200) NOT NULL,
  `feedback_date` date NOT NULL,
  `feedback_time` time NOT NULL,
  `followup_required` varchar(100) NOT NULL,
  `followup_date` date NOT NULL,
  `followup_time` time NOT NULL,
  `followup_remark` varchar(200) NOT NULL,
  `transfer_inquiry` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0 for pending , 1for closed',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inquiry_followup`
--

INSERT INTO `inquiry_followup` (`id`, `inquiry_code`, `customer_name`, `customer_feedback`, `feedback_date`, `feedback_time`, `followup_required`, `followup_date`, `followup_time`, `followup_remark`, `transfer_inquiry`, `status`) VALUES
(1, '1', 'none3', 'none', '2023-12-31', '12:59:00', 'none', '2023-12-31', '12:59:00', 'none', '1', '1'),
(2, '2', 'none3', 'none', '2023-12-31', '12:59:00', 'none', '2023-12-31', '12:59:00', 'none', '1', '1'),
(3, '2', 'none3', 'none', '2023-12-31', '12:59:00', 'none', '2023-12-31', '12:59:00', 'none', '1', '1'),
(4, '2', 'none3', 'none', '2023-12-31', '12:59:00', 'none', '2023-12-31', '12:59:00', 'none', '1', '1'),
(5, '2', 'none3', 'none', '2023-12-31', '12:59:00', 'none', '2023-12-31', '12:59:00', 'none', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_product_extra`
--

DROP TABLE IF EXISTS `inquiry_product_extra`;
CREATE TABLE IF NOT EXISTS `inquiry_product_extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `inquiry_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inquiry_product_extra`
--

INSERT INTO `inquiry_product_extra` (`id`, `product_name`, `qty`, `inquiry_id`) VALUES
(1, 'product1', '10', 1),
(2, 'product2', '20', 1),
(3, 'test product1', '10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inspection_charge`
--

DROP TABLE IF EXISTS `inspection_charge`;
CREATE TABLE IF NOT EXISTS `inspection_charge` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `pinnacle_name` varchar(20) NOT NULL,
  `inspecting_type` enum('0','1') NOT NULL COMMENT '0 for no and 1 for yes',
  `inspection_select_tpi` varchar(200) NOT NULL,
  `inspection_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inspection_charge`
--

INSERT INTO `inspection_charge` (`id`, `cost_est_id`, `pinnacle_name`, `inspecting_type`, `inspection_select_tpi`, `inspection_total_cost`) VALUES
(1, 9, 'hello', '1', 'rahul', '21'),
(2, 12, '', '', '', ''),
(3, 13, 'hello', '1', 'rahul', '21'),
(4, 14, 'hello', '1', 'rahul', '21'),
(5, 16, 'hello', '1', 'rahul', '21'),
(6, 17, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_charges`
--

DROP TABLE IF EXISTS `insurance_charges`;
CREATE TABLE IF NOT EXISTS `insurance_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `insurance_char_quantity` varchar(100) NOT NULL,
  `insurance_char_uom` varchar(100) NOT NULL,
  `insurance_char_unit_rate` varchar(100) NOT NULL,
  `insurance_char_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insurance_charges`
--

INSERT INTO `insurance_charges` (`id`, `cost_est_id`, `insurance_char_quantity`, `insurance_char_uom`, `insurance_char_unit_rate`, `insurance_char_total_cost`) VALUES
(1, 0, '8', 'simple123', '7', '72'),
(2, 0, '46', 'kgs', '7', '322'),
(3, 0, '25', '', '', ''),
(4, 0, '25', '', '', ''),
(5, 0, '', '', '', ''),
(6, 0, '', '', '', ''),
(7, 0, '', '', '', ''),
(8, 0, '', '', '', ''),
(9, 0, '5546546', '', '646', '3583068716'),
(10, 0, '5546546', '', '646', '3583068716');

-- --------------------------------------------------------

--
-- Table structure for table `jiqsfixtures`
--

DROP TABLE IF EXISTS `jiqsfixtures`;
CREATE TABLE IF NOT EXISTS `jiqsfixtures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `fixtures_description` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `fixtures_uom` varchar(100) NOT NULL,
  `fixtures_unit_rate` varchar(100) NOT NULL,
  `fixtures_quantity` int NOT NULL,
  `fixtures_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jiqsfixtures`
--

INSERT INTO `jiqsfixtures` (`id`, `cost_est_id`, `fixtures_description`, `description`, `fixtures_uom`, `fixtures_unit_rate`, `fixtures_quantity`, `fixtures_total_cost`) VALUES
(1, 0, 'fdfdf', '', 'kgs', '33', 0, '43'),
(2, 0, 'ramesh', '', 'mtrd', '54', 0, '65'),
(3, 0, 'rahul', '', 'mtrd', '42', 0, '43'),
(4, 0, 'raghav', '', 'kgs', '22', 0, '33'),
(5, 0, 'LASER CUTTING', 'test', 'MTR', '10', 0, '100'),
(6, 0, 'LASER CUTTING', 'test', 'MTR', '10', 0, '100'),
(7, 0, '', '', '', '', 0, ''),
(8, 0, 'LASER CUTTING', 'test', 'MTR', '415', 10, '4150'),
(9, 0, 'FABRICATION', '12131', 'MTR', '120', 20, '2400');

-- --------------------------------------------------------

--
-- Table structure for table `manpower`
--

DROP TABLE IF EXISTS `manpower`;
CREATE TABLE IF NOT EXISTS `manpower` (
  `id` int NOT NULL AUTO_INCREMENT,
  `manpower_des` varchar(200) NOT NULL,
  `short_name` varchar(150) NOT NULL,
  `manpower_cat` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manpower`
--

INSERT INTO `manpower` (`id`, `manpower_des`, `short_name`, `manpower_cat`, `status`) VALUES
(1, 'Shop Incharge', 'S In', 'Worker', '1'),
(3, 'man', 'mandes1', 'Worker', '1'),
(4, 'Ramesh', 'Ram', 'Worker', '1');

-- --------------------------------------------------------

--
-- Table structure for table `manpower_category`
--

DROP TABLE IF EXISTS `manpower_category`;
CREATE TABLE IF NOT EXISTS `manpower_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `man_description` varchar(200) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manpower_category`
--

INSERT INTO `manpower_category` (`id`, `man_description`, `status`) VALUES
(5, 'Worker', '1'),
(6, 'Staff', '1'),
(10, 'mandes', '1'),
(9, 'man', '1');

-- --------------------------------------------------------

--
-- Table structure for table `manpower_cost_estimation`
--

DROP TABLE IF EXISTS `manpower_cost_estimation`;
CREATE TABLE IF NOT EXISTS `manpower_cost_estimation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `emp_type` varchar(100) NOT NULL,
  `activity_name` varchar(200) NOT NULL,
  `no_of_person` varchar(100) NOT NULL,
  `no_of_hours` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manpower_cost_estimation`
--

INSERT INTO `manpower_cost_estimation` (`id`, `cost_est_id`, `emp_type`, `activity_name`, `no_of_person`, `no_of_hours`) VALUES
(1, 0, '1,3,4', 'hello1', '1,1,1', '2,2,2'),
(2, 0, '1,3,4', '', ',,', ',,'),
(3, 0, '1,3,4', '', ',10,0', '10,1,'),
(4, 0, '1,3,4', '', ',,', '10,,'),
(5, 0, '1,3,4', '', ',,', '10,20,'),
(6, 0, '1,3,4', '', ',,', ',,'),
(7, 0, '1,3,4', '', ',,', ',,'),
(8, 0, '1,3,4', 'nh', ',,', ',,'),
(9, 0, '1,3,4', 'p', ',,', ',,');

-- --------------------------------------------------------

--
-- Table structure for table `manpower_summary`
--

DROP TABLE IF EXISTS `manpower_summary`;
CREATE TABLE IF NOT EXISTS `manpower_summary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `emp_type` int NOT NULL,
  `day` int NOT NULL,
  `person` int NOT NULL,
  `rate` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manpower_summary`
--

INSERT INTO `manpower_summary` (`id`, `cost_est_id`, `emp_type`, `day`, `person`, `rate`, `total`) VALUES
(1, 14, 0, 2, 1, 5, 10),
(2, 14, 1, 2, 1, 6, 12),
(3, 14, 2, 2, 1, 9, 18);

-- --------------------------------------------------------

--
-- Table structure for table `material_category`
--

DROP TABLE IF EXISTS `material_category`;
CREATE TABLE IF NOT EXISTS `material_category` (
  `id` int NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `mechanical_testing`
--

DROP TABLE IF EXISTS `mechanical_testing`;
CREATE TABLE IF NOT EXISTS `mechanical_testing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `mechanical_no_of_sample` varchar(100) NOT NULL,
  `mechanical_unit_rate` varchar(50) NOT NULL,
  `mechanical_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanical_testing`
--

INSERT INTO `mechanical_testing` (`id`, `cost_est_id`, `mechanical_no_of_sample`, `mechanical_unit_rate`, `mechanical_total_cost`) VALUES
(1, 0, '12', '12', '144'),
(2, 2, '12', '12', '144'),
(3, 2, '12', '12', '144'),
(4, 2, '12', '12', '144'),
(5, 8, '12', '12', '144'),
(6, 9, '12', '12', '144'),
(7, 12, '', '', ''),
(8, 13, '12', '12', '144'),
(9, 14, '12', '12', '144');

-- --------------------------------------------------------

--
-- Table structure for table `menu_management`
--

DROP TABLE IF EXISTS `menu_management`;
CREATE TABLE IF NOT EXISTS `menu_management` (
  `id` int NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `accesskey` varchar(255) NOT NULL,
  `parent_id` int NOT NULL DEFAULT '0' COMMENT '0 if menu is root level or menuid if this is child on any menu',
  `link` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0 for disabled menu or 1 for enabled menu',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1338 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_management`
--

INSERT INTO `menu_management` (`id`, `menu_name`, `icon`, `accesskey`, `parent_id`, `link`, `status`) VALUES
(17, 'Create Clients', '', '', 13, 'view_customer.php', '1'),
(36, 'MASTER', '<i class=\"fa fa-maxcdn\" aria-hidden=\"true\"></i>', '', 0, '#', '1'),
(37, 'Department', '', '', 36, '#', '1'),
(38, 'Company', '', '', 36, 'view_company.php', '1'),
(41, 'User', '', '', 36, 'view_users.php', '1'),
(42, 'Menu Management', '', '', 36, 'menu_management.php', '1'),
(48, 'Company Bank Account', '', '', 36, 'view_company_bank.php', '1'),
(52, 'Criteria', '', '', 36, 'view_bank.php', '1'),
(55, 'Sub Services', '', '', 36, 'view_bank.php', '0'),
(88, 'Service Category', '', '', 36, 'service_category.php', '0'),
(137, 'Menu Profile', '', '', 36, 'menu_profile.php', '1'),
(150, 'State', '', '', 36, 'view_state.php', '1'),
(164, 'External Practical', '', '', 36, 'view_tpi1.php', '1'),
(165, 'Group', '', '', 36, 'view_group.php', '1'),
(166, 'Internal Practical', '', '', 36, 'view_tpi2.php', '1'),
(178, 'ManPower Heads', '', '', 36, 'view_manpower.php', '1'),
(179, 'External Theory', '', '', 36, 'view_tpi.php', '1'),
(180, 'Attaintment Level', '', '', 0, '#', '1'),
(181, 'Create', '', '', 180, 'create_cost_estimation.php', '1'),
(183, 'view Welder Qualification', '', '', 36, 'view_new_welder_qualification.php', '1'),
(185, 'View Inquiry', '', '', 187, 'view_inquiry.php', '1'),
(186, 'Inquiry Followup', '', '', 187, 'view_inquiry_followup.php', '1'),
(187, 'Criteria 1', '', '', 0, '#', '1'),
(188, 'Edit Inquiry', '', '', 187, 'edit_inquiry', '1'),
(189, 'view quotation', '', '', 36, 'view_new_quotation.php', '1'),
(190, 'chirag', '', '', 36, 'http://localhost/project/alldashboard/dashboard1.php', '1'),
(249, 'Criteria 2', '', '', 0, '#', '1'),
(250, 'Criteria 3', '', '', 0, '#', '1'),
(251, 'Criteria 4', '', '', 0, '#', '1'),
(252, 'Criteria 5', '', '', 0, '#', '1'),
(253, 'Criteria 6', '', '', 0, '#', '1'),
(254, 'Criteria 7', '', '', 0, '#', '1'),
(999, 'all_dashboard', '', '', 0, 'http://localhost/project/alldashboard/dashboard1.php', '1'),
(1000, 'none', '', '', 36, 'view_users.php', '1'),
(1001, 'Criteria 1 ', '', '', 36, 'Criteria 1.1.php', '1'),
(1002, 'Internal Mid 1', '', '', 36, 'view_im1.php', '1'),
(1003, 'WEEKLY', '', '', 999, 'view_weekly.php', '1'),
(1004, 'C-1.1.1-External Theory', '', '', 187, 'view_tpi.php', '1'),
(1314, 'C-1.1.2-External Practical', '', '', 187, 'view_tpi1.php', '1'),
(1315, 'C-1.1.3-Internal Practical', '', '', 187, 'view_tpi2.php', '1'),
(1316, 'C-1.1.4 Internal Mid 1', '', '', 187, 'view_im1.php', '1'),
(1317, 'C-1.1.5 Internal Mid 2', '', '', 187, 'view_im1.php', '1'),
(1318, 'C-1.1.6 Internal Mid 3', '', '', 187, 'view_im1.php', '1'),
(1319, 'C-1.1.7 Weekly', '', '', 187, 'view_weekly.php', '1'),
(1320, 'C-1.1.8 Assignment 1', '', '', 187, 'view_im1.php', '1'),
(1321, 'C-1.1.9 Assignment 2', '', '', 187, 'view_im1.php', '1'),
(1322, 'C-1.1.10 Assignment 3', '', '', 187, 'view_im1.php', '1'),
(1323, 'Criteria-5.2.1_apperead', '', '', 252, 'view_criteria_5_2_1_appeared.php', '1'),
(1324, 'Criteria-5.2.2.1', '', '', 252, 'view_criteria_5_2_2_1.php', '1'),
(1325, 'Criteria-5.2.2', '', '', 252, 'view_criteria_5_2_2.php', '1'),
(1326, 'Criteria-5.2.3', '', '', 252, '#', '1'),
(1327, 'Criteria-5.3.1', '', '', 252, 'view_criteria_5_3_1.php', '1'),
(1328, 'Criteria-5.3.3', '', '', 252, '#', '1'),
(1329, 'Criteria 3.4.7.1', '', '', 250, 'view_tpi.php', '1'),
(1330, 'Att_Level', '', '', 180, 'view_AL1.php', '1'),
(1331, 'Criteria 4.3.5(E-content used)', '', '', 251, 'view_criteria_4_3_5_econtent.php', '1'),
(1332, 'Criteria 3.5.2', '', '', 250, 'view_criteria_3_5_2.php', '1'),
(1333, 'Criteria 3.5.2.1', '', '', 250, 'view_criteria_3_5_2_1.php', '1'),
(1334, 'Criteria 4.5.1.1', '', '', 251, 'view_criteria_4_5_1_1.php', '1'),
(1335, 'Criteria 3.6.1', '', '', 250, 'view_criteria_3_6_1.php', '1'),
(1336, 'Criteria 3.6.2', '', '', 250, 'view_criteria_3_6_2.php', '1'),
(1337, 'Criteria-4.3.5-PULMS', '', '', 251, 'view_criteria_4_3_5_pulms.php', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu_profile`
--

DROP TABLE IF EXISTS `menu_profile`;
CREATE TABLE IF NOT EXISTS `menu_profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `show_menu` text NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_profile`
--

INSERT INTO `menu_profile` (`id`, `role`, `show_menu`, `permissions`) VALUES
(3, 'HOD', '36,37', '36_add,36_edit,36_status,37_add,37_edit,37_status'),
(4, 'PURCHASE', '1,9,15,18', '1_add,1_edit,1_delete,1_status,9_add,9_edit,15_add,15_edit,15_delete,15_status,18_add,18_edit,18_delete,18_status'),
(6, 'MANAGEMENT', '1,2,3,4,5,6,7,8,9,10,11,14,15,17,18,19,20,21,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46', '1_add,1_edit,1_delete,1_status,2_add,2_edit,2_delete,2_status,3_add,3_edit,3_delete,3_status,4_add,4_edit,4_delete,4_status,5_add,5_edit,5_delete,5_status,6_add,6_edit,6_delete,6_status,7_add,7_edit,7_delete,7_status,8_add,8_edit,8_delete,8_status,9_add,9'),
(7, 'Associate Professor', '36,41,180,187,249,250,251,252,253,254,1004,1314,1315,1316,1317,1318,1319,1320,1321,1322,1323,1324,1325,1326,1327,1328,1329,1330', '187_status,249_status,250_status,251_status,252_status,253_status,254_status');

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous_charges`
--

DROP TABLE IF EXISTS `miscellaneous_charges`;
CREATE TABLE IF NOT EXISTS `miscellaneous_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `sales_commission` int NOT NULL,
  `electricity_charges` int NOT NULL,
  `administration_charges` int NOT NULL,
  `insurance_charges` int NOT NULL,
  `final_transportation_charges` int NOT NULL,
  `padding_forwarding_charges` int NOT NULL,
  `legal_compliance_charges` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `miscellaneous_charges`
--

INSERT INTO `miscellaneous_charges` (`id`, `cost_est_id`, `sales_commission`, `electricity_charges`, `administration_charges`, `insurance_charges`, `final_transportation_charges`, `padding_forwarding_charges`, `legal_compliance_charges`) VALUES
(1, 12, 10, 50, 23, 485, 845, 9845, 5465),
(2, 13, 10, 50, 23, 485, 845, 9845, 5465),
(3, 14, 10, 50, 23, 485, 845, 9845, 5465),
(4, 16, 10, 50, 23, 485, 845, 9845, 5465);

-- --------------------------------------------------------

--
-- Table structure for table `mst_broughtout`
--

DROP TABLE IF EXISTS `mst_broughtout`;
CREATE TABLE IF NOT EXISTS `mst_broughtout` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(25) NOT NULL,
  `mat_code` varchar(25) NOT NULL,
  `unit_rate` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `total` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_broughtout`
--

INSERT INTO `mst_broughtout` (`id`, `pro_name`, `mat_code`, `unit_rate`, `quantity`, `total`) VALUES
(1, '68', 'mat2', '12', '12', '144'),
(2, '68', 'mat2', '23', '23', '529');

-- --------------------------------------------------------

--
-- Table structure for table `mst_category`
--

DROP TABLE IF EXISTS `mst_category`;
CREATE TABLE IF NOT EXISTS `mst_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `criteria` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_category`
--

INSERT INTO `mst_category` (`id`, `criteria`) VALUES
(1, 'Criteria 1'),
(2, 'Criteria 2'),
(3, 'Criteria 3'),
(4, 'Criteria 4'),
(5, 'Criteria 5'),
(6, 'Criteria 6'),
(7, 'Criteria 7');

-- --------------------------------------------------------

--
-- Table structure for table `mst_followup_extra`
--

DROP TABLE IF EXISTS `mst_followup_extra`;
CREATE TABLE IF NOT EXISTS `mst_followup_extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `followup_product_name` varchar(200) NOT NULL,
  `followup_qty` varchar(100) NOT NULL,
  `foll_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mst_followup_extra`
--

INSERT INTO `mst_followup_extra` (`id`, `followup_product_name`, `followup_qty`, `foll_id`) VALUES
(1, 'fdfdf', '4', 1),
(2, 'fdsf', '98', 5),
(3, 'fsdfds', '77', 5),
(4, 'dfds', '55', 6),
(5, 'dsdfs', '88', 6),
(6, 'none', '12', 7),
(7, 'none', '10', 8),
(8, 'none', '10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_foll_extra`
--

DROP TABLE IF EXISTS `mst_foll_extra`;
CREATE TABLE IF NOT EXISTS `mst_foll_extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `followup_date` date NOT NULL,
  `followup_action` varchar(100) NOT NULL,
  `followup_remarks` varchar(200) NOT NULL,
  `followup_user` varchar(200) NOT NULL,
  `f_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mst_foll_extra`
--

INSERT INTO `mst_foll_extra` (`id`, `followup_date`, `followup_action`, `followup_remarks`, `followup_user`, `f_id`) VALUES
(1, '2023-09-12', 'fddfd', 'dfdfd', 'fdfdr', 1),
(2, '2023-09-18', 'dsfd', 'ggdgf', 'fgf', 2),
(3, '2023-09-13', 'hh', 'hhjkh', 'hhkjh', 3),
(4, '2023-09-18', 'hkkhkj', 'bjh', 'jkhj', 3),
(5, '2023-09-13', 'dsfs', 'rggd', 'gdf', 4),
(6, '2023-09-07', 'fd', 'fdg', 'fhgh', 4),
(7, '2023-09-15', 'sdsf', 'dfgdf', 'fd', 5),
(8, '2023-09-06', 'ffd', 'rgg', 'gffg', 6),
(9, '2023-12-31', '12', '12', '12', 7),
(10, '2023-12-31', '1', '2', '2', 8),
(11, '0000-00-00', '', '', '', 1),
(12, '0000-00-00', '', '', '', 2),
(13, '0000-00-00', '', '', '', 3),
(14, '0000-00-00', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_group`
--

DROP TABLE IF EXISTS `mst_group`;
CREATE TABLE IF NOT EXISTS `mst_group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `grp_code` varchar(100) NOT NULL,
  `grp_name` varchar(20) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `cat_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_group`
--

INSERT INTO `mst_group` (`id`, `grp_code`, `grp_name`, `prefix`, `status`, `cat_id`) VALUES
(8, '001', 'group1', 'grp1', '1', 60);

-- --------------------------------------------------------

--
-- Table structure for table `mst_group_extra`
--

DROP TABLE IF EXISTS `mst_group_extra`;
CREATE TABLE IF NOT EXISTS `mst_group_extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `extra_field` varchar(100) NOT NULL,
  `is_num` varchar(10) NOT NULL,
  `is_compulsory` varchar(10) NOT NULL,
  `grp_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_group_extra`
--

INSERT INTO `mst_group_extra` (`id`, `extra_field`, `is_num`, `is_compulsory`, `grp_id`) VALUES
(1, 'hell', '1', '1', 3),
(2, 'asdasd', '', '', 3),
(3, 'hello', '1', '1', 4),
(4, 'asdasd', '', '', 4),
(5, 'helassjj', '1', '1', 5),
(6, 'asdsss', '0', '1', 5),
(7, 'sdfhksdf', '1', '1', 6),
(8, 'asdasdas', '0', '0', 6),
(9, 'asdasdasd', '0', '0', 6),
(10, 'asdagdjgh', '0', '1', 7),
(11, '1010', '1', '1', 8),
(12, 'hello1', '1', '1', 9),
(13, 'hello1', '1', '1', 9),
(14, 'hello1', '0', '1', 10),
(15, 'hello1', '1', '1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mst_inquiry`
--

DROP TABLE IF EXISTS `mst_inquiry`;
CREATE TABLE IF NOT EXISTS `mst_inquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `inquiry_code` int NOT NULL,
  `created_date` date NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_address` varchar(20) NOT NULL,
  `customer_city` varchar(20) NOT NULL,
  `customer_pincode` varchar(20) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_gst` varchar(20) NOT NULL,
  `source` varchar(20) NOT NULL,
  `followup` varchar(20) NOT NULL,
  `customer_remarks` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0 for pending , 1 for closed',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mst_inquiry`
--

INSERT INTO `mst_inquiry` (`id`, `inquiry_code`, `created_date`, `customer_id`, `customer_address`, `customer_city`, `customer_pincode`, `customer_contact`, `customer_email`, `customer_gst`, `source`, `followup`, `customer_remarks`, `status`) VALUES
(1, 1, '2023-09-19', '1', 'none', 'VADODARA', '1234', '123456', '11321@gmail.com', '123456', 'Social Media', '1', '456', '0'),
(2, 2, '2023-12-31', '1', 'none', 'VADODARA', '1234', '123456', '11321@gmail.com', '123456', 'Facebook', '1', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mst_product`
--

DROP TABLE IF EXISTS `mst_product`;
CREATE TABLE IF NOT EXISTS `mst_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pro_code` varchar(25) NOT NULL,
  `pro_name` varchar(25) NOT NULL,
  `mat_code` varchar(25) NOT NULL,
  `tech_spec` varchar(200) NOT NULL,
  `cat_id` varchar(10) NOT NULL,
  `grp_id` varchar(10) NOT NULL,
  `sub_grp_id` varchar(10) NOT NULL,
  `hsn` int NOT NULL,
  `gst_rate` int NOT NULL,
  `purchase_uom` varchar(10) NOT NULL,
  `inventory_uom` varchar(10) NOT NULL,
  `conv_factor` varchar(25) NOT NULL,
  `indent` enum('0','1') NOT NULL,
  `po_req` enum('0','1') NOT NULL,
  `qc_req` enum('0','1') NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_product`
--

INSERT INTO `mst_product` (`id`, `pro_code`, `pro_name`, `mat_code`, `tech_spec`, `cat_id`, `grp_id`, `sub_grp_id`, `hsn`, `gst_rate`, `purchase_uom`, `inventory_uom`, `conv_factor`, `indent`, `po_req`, `qc_req`, `status`) VALUES
(73, '01', 'pro1', 'mat1', 'tech1', '60', '8', '53', 10, 15, '6', '6', '0', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mst_product_extra`
--

DROP TABLE IF EXISTS `mst_product_extra`;
CREATE TABLE IF NOT EXISTS `mst_product_extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_extra_label` varchar(25) NOT NULL,
  `product_extra_field` varchar(25) DEFAULT NULL,
  `pro_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mst_product_extra`
--

INSERT INTO `mst_product_extra` (`id`, `product_extra_label`, `product_extra_field`, `pro_id`) VALUES
(22, 'asdmbm', 'asdbm', '70'),
(23, 'jadjgsjg', 'jasdgj', '70'),
(24, '', 'hello', '72'),
(25, '1010', 'hello field', '73');

-- --------------------------------------------------------

--
-- Table structure for table `mst_quotation_product_extra`
--

DROP TABLE IF EXISTS `mst_quotation_product_extra`;
CREATE TABLE IF NOT EXISTS `mst_quotation_product_extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quotation_sr_no` varchar(200) NOT NULL,
  `quotation_product_name` varchar(200) NOT NULL,
  `quotation_material_code` varchar(100) NOT NULL,
  `quotation_hsn` varchar(100) NOT NULL,
  `quotation_pcs` varchar(100) NOT NULL,
  `quo_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mst_quotation_product_extra`
--

INSERT INTO `mst_quotation_product_extra` (`id`, `quotation_sr_no`, `quotation_product_name`, `quotation_material_code`, `quotation_hsn`, `quotation_pcs`, `quo_id`) VALUES
(1, '4', 'rdsd', '5', '4', '9', 1),
(2, '1', '2', '2', '2', '2', 2),
(3, '1', 'pro1', 'mat1', '10', '10', 3),
(4, '2', 'pro2', 'mat2', '2', '2', 3),
(5, '3', 'pro3', 'mat3', '3', '3', 3),
(6, '1', '2', '2', '2', '2', 4),
(7, '2', '2', '2', '2', '2', 4),
(8, '1', '2', '2', '2', '2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mst_shape_extra`
--

DROP TABLE IF EXISTS `mst_shape_extra`;
CREATE TABLE IF NOT EXISTS `mst_shape_extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `shape_extra_field` varchar(50) NOT NULL,
  `shape_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_shape_extra`
--

INSERT INTO `mst_shape_extra` (`id`, `shape_extra_field`, `shape_id`) VALUES
(28, 'BREADTH', 6),
(3, 'length', 7),
(4, 'breadth', 7),
(5, 'height', 7),
(27, 'THICKNESS', 6),
(33, 'OUTER DIAMETER', 4),
(32, 'INNER DIAMETER', 4),
(30, 'DENSITY', 4),
(31, 'THICKNESS/LENGTH', 4),
(29, 'LENGTH', 6),
(34, 'OUTER DIAMETER', 0),
(35, 'INNER DIAMETER', 0),
(36, 'THICKNESS/LENGTH', 0),
(37, 'DENSITY', 0),
(67, 'HEIGHT', 11),
(66, 'THICKNESS', 11),
(65, 'DIAMETER', 11),
(64, 'DENSITY', 10),
(63, 'THICKNESS', 10),
(62, 'HEIGHT', 10),
(61, 'BREADTH', 10),
(49, 'THICKNESS/LENGTH', 0),
(50, 'DENSITY', 0),
(51, 'INNER DIAMETER', 0),
(52, 'THICKNESS/LENGTH', 0),
(53, 'DENSITY', 0),
(54, '', 0),
(55, '10', 0),
(56, '10', 8),
(57, 'OUTER DIAMETER', 9),
(58, 'INNER DIAMETER', 9),
(59, 'THICKNESS/LENGTH', 9),
(60, 'DENSITY', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mst_sub_group`
--

DROP TABLE IF EXISTS `mst_sub_group`;
CREATE TABLE IF NOT EXISTS `mst_sub_group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sub_grp_name` varchar(20) NOT NULL,
  `sub_grp_code` int NOT NULL,
  `cat_id` int NOT NULL,
  `grp_id` int NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_sub_group`
--

INSERT INTO `mst_sub_group` (`id`, `sub_grp_name`, `sub_grp_code`, `cat_id`, `grp_id`, `prefix`, `status`) VALUES
(53, 'sb1', 1, 60, 8, 'sb1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mst_vendor`
--

DROP TABLE IF EXISTS `mst_vendor`;
CREATE TABLE IF NOT EXISTS `mst_vendor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vendor_code` varchar(50) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `print_name` varchar(50) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `vendor_contact` varchar(20) NOT NULL,
  `vendor_email` varchar(25) NOT NULL,
  `vendor_gst` varchar(30) NOT NULL,
  `state_code` varchar(20) NOT NULL,
  `vendor_pancard` varchar(20) NOT NULL,
  `credit_limit_days` varchar(20) NOT NULL,
  `credit_limit_value` varchar(20) NOT NULL,
  `followup` varchar(20) NOT NULL,
  `vendor_type` enum('0','1','2') NOT NULL COMMENT '0 for customer , 1 for supplier , 2 for both',
  `approval_status` enum('0','1') NOT NULL COMMENT '0 for not approved,1for approved',
  `contact_person0` varchar(20) NOT NULL,
  `designation0` varchar(20) NOT NULL,
  `email0` varchar(20) NOT NULL,
  `contact_no0` varchar(20) NOT NULL,
  `contact_person1` varchar(20) NOT NULL,
  `designation1` varchar(20) NOT NULL,
  `email1` varchar(20) NOT NULL,
  `contact_no1` varchar(20) NOT NULL,
  `contact_person2` varchar(20) NOT NULL,
  `designation2` varchar(20) NOT NULL,
  `email2` varchar(20) NOT NULL,
  `contact_no2` varchar(20) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mst_vendor`
--

INSERT INTO `mst_vendor` (`id`, `vendor_code`, `vendor_name`, `print_name`, `vendor_address`, `city`, `pincode`, `vendor_contact`, `vendor_email`, `vendor_gst`, `state_code`, `vendor_pancard`, `credit_limit_days`, `credit_limit_value`, `followup`, `vendor_type`, `approval_status`, `contact_person0`, `designation0`, `email0`, `contact_no0`, `contact_person1`, `designation1`, `email1`, `contact_no1`, `contact_person2`, `designation2`, `email2`, `contact_no2`, `status`) VALUES
(1, '1', 'none3', 'none', 'none', 'VADODARA', '1234', '123456', '11321@gmail.com', '123456', '213456', 'wwwww5555w', '10', '10', '1', '0', '1', '10', '', '', '', '', '', '', '', '', '', '', '', '1'),
(2, '2', 'vendortest', 'vendor2', 'addreess', 'JAIPUR', '9878456', '12345', '123@gmail.com', '123', 'Gujarat', 'wwwww12', '12', '12', '1', '2', '1', '', '', '', '', '', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ndt_paut`
--

DROP TABLE IF EXISTS `ndt_paut`;
CREATE TABLE IF NOT EXISTS `ndt_paut` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `paut_type` varchar(200) NOT NULL,
  `paut_quantity` int NOT NULL,
  `unit_rate` varchar(11) NOT NULL,
  `total_cost` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ndt_paut`
--

INSERT INTO `ndt_paut` (`id`, `cost_est_id`, `paut_type`, `paut_quantity`, `unit_rate`, `total_cost`) VALUES
(1, 0, 'Running Meter', 120, '987', '118440'),
(2, 2, 'Running Meter', 120, '987', '118440'),
(3, 2, 'Running Meter', 120, '987', '118440'),
(4, 2, 'Running Meter', 120, '987', '118440'),
(5, 8, 'Running Meter', 120, '987', '118440'),
(6, 9, 'Running Meter', 120, '987', '118440'),
(7, 9, '', 0, '', ''),
(8, 9, '', 0, '', ''),
(9, 13, 'Running Meter', 120, '987', '118440'),
(10, 14, 'Running Meter', 120, '987', '118440'),
(11, 16, 'Running Meter', 120, '987', '118440'),
(12, 17, '', 0, '', ''),
(13, 17, '', 0, '', ''),
(14, 17, '', 0, '', ''),
(15, 17, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ndt_pt`
--

DROP TABLE IF EXISTS `ndt_pt`;
CREATE TABLE IF NOT EXISTS `ndt_pt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `pt_type` varchar(200) NOT NULL,
  `pt_quantity` int NOT NULL,
  `unit_rate` varchar(20) NOT NULL,
  `total_cost` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ndt_pt`
--

INSERT INTO `ndt_pt` (`id`, `cost_est_id`, `pt_type`, `pt_quantity`, `unit_rate`, `total_cost`) VALUES
(1, 0, 'Running Meter', 15, '15', '225'),
(2, 2, 'Running Meter', 15, '15', '225'),
(3, 2, 'Running Meter', 15, '15', '225'),
(4, 2, 'Running Meter', 15, '15', '225'),
(5, 8, 'Running Meter', 15, '15', '225'),
(6, 9, 'Running Meter', 15, '15', '225'),
(7, 9, '', 0, '', ''),
(8, 9, '', 0, '', ''),
(9, 13, 'Running Meter', 15, '15', '225'),
(10, 14, 'Running Meter', 15, '15', '225'),
(11, 16, 'Running Meter', 15, '15', '225'),
(12, 17, '', 0, '', ''),
(13, 17, '', 0, '', ''),
(14, 17, '', 0, '', ''),
(15, 17, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ndt_rt`
--

DROP TABLE IF EXISTS `ndt_rt`;
CREATE TABLE IF NOT EXISTS `ndt_rt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `fix_visit_charge` varchar(100) NOT NULL,
  `spot_size` varchar(20) NOT NULL,
  `no_of_spot` varchar(20) NOT NULL,
  `unit_value` varchar(25) NOT NULL,
  `total_cost` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ndt_rt`
--

INSERT INTO `ndt_rt` (`id`, `cost_est_id`, `fix_visit_charge`, `spot_size`, `no_of_spot`, `unit_value`, `total_cost`) VALUES
(1, 9, '10', '12', '150', '789', '118350'),
(2, 13, '10', '6', '150', '789', '118350'),
(3, 14, '10', '6', '150', '789', '118350'),
(4, 16, '10', '6', '150', '789', '118350'),
(5, 17, '', '', '', '', ''),
(6, 17, '', '', '', '', ''),
(7, 17, '', '', '', '', ''),
(8, 17, '', '', '', '', ''),
(9, 17, '', '', '', '', ''),
(10, 17, '', '', '', '', ''),
(11, 17, '', '', '', '', ''),
(12, 17, '', '', '', '', ''),
(13, 17, '', '', '', '', ''),
(14, 17, '', '', '', '', ''),
(15, 17, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ndt_ut`
--

DROP TABLE IF EXISTS `ndt_ut`;
CREATE TABLE IF NOT EXISTS `ndt_ut` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `ut_type` varchar(200) NOT NULL,
  `ut_quantity` int NOT NULL,
  `unit_rate` varchar(20) NOT NULL,
  `total_cost` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ndt_ut`
--

INSERT INTO `ndt_ut` (`id`, `cost_est_id`, `ut_type`, `ut_quantity`, `unit_rate`, `total_cost`) VALUES
(1, 0, 'Day', 10, '10', '100'),
(2, 2, 'Day', 10, '10', '100'),
(3, 2, 'Running Meter', 10, '10', '100'),
(4, 2, 'Running Meter', 10, '10', '100'),
(5, 8, 'Running Meter', 10, '10', '100'),
(6, 9, 'Running Meter', 10, '10', '100'),
(7, 9, 'Running Meter', 0, '', ''),
(8, 9, 'Running Meter', 0, '', ''),
(9, 13, 'Running Meter', 10, '10', '100'),
(10, 14, 'Running Meter', 10, '10', '100'),
(11, 16, 'Day', 10, '10', '100'),
(12, 17, 'Running Meter', 5, '', ''),
(13, 17, 'Day', 40, '', ''),
(14, 17, 'Day', 40, '141', '5640'),
(15, 17, 'Running Meter', 40, '120', '4800'),
(16, 17, 'Running Meter', 40, '141', ''),
(17, 17, 'Day', 40, '141', ''),
(18, 17, 'Day', 40, '141', ''),
(19, 17, 'Running Meter', 40, '141', ''),
(20, 17, 'Running Meter', 40, '200', 'Rubrics 3'),
(21, 17, 'Running Meter', 60, '300', 'Rubrics 2'),
(22, 17, 'Day', 60, '200', 'Rubrics 3');

-- --------------------------------------------------------

--
-- Table structure for table `ndt_vt`
--

DROP TABLE IF EXISTS `ndt_vt`;
CREATE TABLE IF NOT EXISTS `ndt_vt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `vt_type` varchar(200) NOT NULL,
  `vt_quantity` int NOT NULL,
  `unit_rate` varchar(11) NOT NULL,
  `total_cost` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ndt_vt`
--

INSERT INTO `ndt_vt` (`id`, `cost_est_id`, `vt_type`, `vt_quantity`, `unit_rate`, `total_cost`) VALUES
(1, 0, 'Running Meter', 156, '789', '123084'),
(2, 2, 'Running Meter', 156, '789', '123084'),
(3, 2, 'Running Meter', 156, '789', '123084'),
(4, 2, 'Running Meter', 156, '789', '123084'),
(5, 8, 'Running Meter', 156, '789', '123084'),
(6, 9, 'Running Meter', 156, '789', '123084'),
(7, 9, '', 0, '', ''),
(8, 9, '', 0, '', ''),
(9, 13, 'Running Meter', 156, '789', '123084'),
(10, 14, 'Running Meter', 156, '789', '123084'),
(11, 16, 'Running Meter', 156, '789', '123084'),
(12, 17, '', 0, '', ''),
(13, 17, '', 0, '', ''),
(14, 17, '', 0, '', ''),
(15, 17, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_quotation`
--

DROP TABLE IF EXISTS `new_quotation`;
CREATE TABLE IF NOT EXISTS `new_quotation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quotation_no` varchar(200) NOT NULL,
  `quotation_date` varchar(100) NOT NULL,
  `quotation_cust_name` varchar(200) NOT NULL,
  `quotation_gst` varchar(100) NOT NULL,
  `quotation_attachement` varchar(200) NOT NULL,
  `quotation_taxable_amount` varchar(100) NOT NULL,
  `quotation_discount_amount` varchar(100) NOT NULL,
  `quotation_gst_amount` varchar(100) NOT NULL,
  `quotation_net_amount` varchar(100) NOT NULL,
  `quotation_final_amount` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `new_quotation`
--

INSERT INTO `new_quotation` (`id`, `quotation_no`, `quotation_date`, `quotation_cust_name`, `quotation_gst`, `quotation_attachement`, `quotation_taxable_amount`, `quotation_discount_amount`, `quotation_gst_amount`, `quotation_net_amount`, `quotation_final_amount`) VALUES
(1, '9', '2023-09-19', 'ramesh', 'ffffdh67', '', '5533', '43353', '4646', '4646', '464646'),
(2, '10', '2023-12-31', 'none', '123', '', '2', '2', '2', '2', '2'),
(3, '3', '2022-11-30', 'none', '123', '', '100', '200', '300', '400', '500'),
(4, '4', '2023-11-30', 'none', '123', '', '10', '20', '50', '60', '70'),
(5, '5', '2023-12-31', 'none', '123', '', '10', '20', '20', '30', '50');

-- --------------------------------------------------------

--
-- Table structure for table `new_welder_qualifications`
--

DROP TABLE IF EXISTS `new_welder_qualifications`;
CREATE TABLE IF NOT EXISTS `new_welder_qualifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `new_welder_process` varchar(200) NOT NULL,
  `new_welder_thickness` varchar(200) NOT NULL,
  `new_welder_moc` varchar(200) NOT NULL,
  `new_welder_labtest` varchar(200) NOT NULL,
  `new_welder_tpicharge` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `new_welder_qualifications`
--

INSERT INTO `new_welder_qualifications` (`id`, `new_welder_process`, `new_welder_thickness`, `new_welder_moc`, `new_welder_labtest`, `new_welder_tpicharge`) VALUES
(1, 'dfssdf', 'hghfhfg', 'gfgfdgd', 'fggfg', '45'),
(2, 'ggf', 'fdf', 'gfhh', 'hjjgj', '23'),
(5, 'hello', '5', 'none', 'none', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `packing_forwording`
--

DROP TABLE IF EXISTS `packing_forwording`;
CREATE TABLE IF NOT EXISTS `packing_forwording` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `pac_for_quantity` varchar(100) NOT NULL,
  `pac_for_uom` varchar(100) NOT NULL,
  `pac_for_unit_rate` varchar(100) NOT NULL,
  `pac_for_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `packing_forwording`
--

INSERT INTO `packing_forwording` (`id`, `cost_est_id`, `pac_for_quantity`, `pac_for_uom`, `pac_for_unit_rate`, `pac_for_total_cost`) VALUES
(1, 2, '12', '', '', ''),
(2, 17, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_deduction_tax_table`
--

DROP TABLE IF EXISTS `quotation_deduction_tax_table`;
CREATE TABLE IF NOT EXISTS `quotation_deduction_tax_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quo_tax_type` varchar(100) NOT NULL,
  `quotation_deduction_tax` varchar(100) NOT NULL,
  `quo_percent` varchar(100) NOT NULL,
  `quo_amount` varchar(100) NOT NULL,
  `quotation_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quotation_deduction_tax_table`
--

INSERT INTO `quotation_deduction_tax_table` (`id`, `quo_tax_type`, `quotation_deduction_tax`, `quo_percent`, `quo_amount`, `quotation_id`) VALUES
(1, '4', '45', '2', '54535', 1),
(2, '2', '2', '2', '2', 2),
(3, 'nonet', 'nont', '10', '100', 3),
(4, 'none2', 'none2', '50', '5', 3),
(5, '2', '2', '2', '2', 4),
(6, '2', '2', '2', '2', 4),
(7, '2', '2', '2', '2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `quotation_tax_table`
--

DROP TABLE IF EXISTS `quotation_tax_table`;
CREATE TABLE IF NOT EXISTS `quotation_tax_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quotation_tax_type` varchar(200) NOT NULL,
  `quotation_additional_tax` varchar(100) NOT NULL,
  `quotation_percent` varchar(100) NOT NULL,
  `quotation_amount` varchar(100) NOT NULL,
  `quotation_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quotation_tax_table`
--

INSERT INTO `quotation_tax_table` (`id`, `quotation_tax_type`, `quotation_additional_tax`, `quotation_percent`, `quotation_amount`, `quotation_id`) VALUES
(1, '5', '4', '5', '5433', 1),
(2, '2', '2', '2', '2', 2),
(3, 'none', 'none', '10', '100', 3),
(4, 'none1', 'none', '1', '200', 3),
(5, '2', '2', '2', '2', 4),
(6, '2', '2', '2', '2', 4),
(7, '2', '2', '2', '2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sales_commission`
--

DROP TABLE IF EXISTS `sales_commission`;
CREATE TABLE IF NOT EXISTS `sales_commission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `sales_quantity` varchar(100) NOT NULL,
  `sales_uom` varchar(100) NOT NULL,
  `sales_unit_rate` varchar(100) NOT NULL,
  `sales_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sales_commission`
--

INSERT INTO `sales_commission` (`id`, `cost_est_id`, `sales_quantity`, `sales_uom`, `sales_unit_rate`, `sales_total_cost`) VALUES
(1, 0, '8', 'kgs', '7', '56'),
(2, 0, '9', 'mtrd', '7', '63'),
(3, 0, '7', 'kgs', '4', '28'),
(4, 0, '12', '', '12', '144'),
(5, 0, '12', '', '12', '144'),
(6, 0, '33555', '', '', ''),
(7, 0, '33555', '', '', ''),
(8, 0, '', '', '', ''),
(9, 0, '', '', '', ''),
(10, 0, '132', '', '1213', '160116'),
(11, 0, '132', '', '1213', '160116'),
(12, 0, '12', '', '112', '1344'),
(13, 0, '125', '', '125', '15625'),
(14, 0, '', '', '', ''),
(15, 0, '', '', '', ''),
(16, 0, '', '', '', ''),
(17, 0, '', '', '', ''),
(18, 0, '25', '', '', ''),
(19, 0, '25', '', '', ''),
(20, 0, '25', '', '', ''),
(21, 0, '', '', '', ''),
(22, 0, '', '', '', ''),
(23, 0, '', '', '', ''),
(24, 0, '', '', '', ''),
(25, 0, '', '', '', ''),
(26, 0, '', '', '', ''),
(27, 0, '', '', '', ''),
(28, 0, '', '', '', ''),
(29, 0, '', '', '', ''),
(30, 0, '', '', '', ''),
(31, 2, '123', '', '', ''),
(32, 2, '', '', '', ''),
(33, 17, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `service_code` int NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `parameter` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_code`, `service_name`, `u_name`, `parameter`, `status`) VALUES
(7, 1, 'simple1', 'Ramesh', '2', '1'),
(8, 3, 'serv3', 'mtrd', '2', '1'),
(6, 100, 'ram', 'Ramesh', '10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `shape`
--

DROP TABLE IF EXISTS `shape`;
CREATE TABLE IF NOT EXISTS `shape` (
  `id` int NOT NULL AUTO_INCREMENT,
  `shape_name` varchar(200) NOT NULL,
  `shape_formula` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shape`
--

INSERT INTO `shape` (`id`, `shape_name`, `shape_formula`, `status`) VALUES
(6, 'RECTANGLE', '', '1'),
(7, 'SQUARE', '', '1'),
(9, 'CIRCLE', NULL, '1'),
(10, 'TRIANGLE', NULL, '1'),
(11, 'SHELL', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `site_visit`
--

DROP TABLE IF EXISTS `site_visit`;
CREATE TABLE IF NOT EXISTS `site_visit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `site_location` varchar(200) NOT NULL,
  `site_no_of_person` varchar(100) NOT NULL,
  `site_no_of_days` varchar(200) NOT NULL,
  `site_unit_rate` varchar(200) NOT NULL,
  `site_total_cost` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `site_visit`
--

INSERT INTO `site_visit` (`id`, `cost_est_id`, `site_location`, `site_no_of_person`, `site_no_of_days`, `site_unit_rate`, `site_total_cost`) VALUES
(1, 0, '10', '10', '10', '10', '1000'),
(2, 0, 'ffddf', '8', '4', '8', '256'),
(3, 0, 'fdfdgfgfd', '7', '2', '7', '98'),
(4, 0, '10', '101', '10', '10', '10100');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int NOT NULL AUTO_INCREMENT,
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
(35, 'Uttarakhand', '1'),
(36, 'West Bengal', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sticky`
--

DROP TABLE IF EXISTS `sticky`;
CREATE TABLE IF NOT EXISTS `sticky` (
  `id` int NOT NULL AUTO_INCREMENT,
  `details` text NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sticky`
--

INSERT INTO `sticky` (`id`, `details`, `emp_id`) VALUES
(1, 'khhdkhskdhfkdxhfh jhkfhkdhf\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n', '1'),
(2, 'ashdkjasdkhaskdj', '6'),
(3, 'hello sunil', '8'),
(4, '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int NOT NULL AUTO_INCREMENT,
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
  `id` int NOT NULL AUTO_INCREMENT,
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
  `state` int NOT NULL,
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
  `web_status` int NOT NULL,
  `project_name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `emp_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `joining_date`, `dob`, `gender`, `maratial_status`, `father_name`, `city`, `state`, `present_address`, `permanent_address`, `emergency_mobile`, `hra`, `medical_allowance`, `special_allowance`, `phone_allowance`, `other_allowance`, `provident_fund`, `professional_tax`, `other_deduction`, `employment_type`, `basic_salary`, `gross_salary`, `total_deduction`, `net_salary`, `pl_balance`, `half_day_balance`, `cl_balance`, `sick_balance`, `role`, `status`, `profile_image`, `department`, `show_menu`, `permissions`, `web_status`, `project_name`, `designation`) VALUES
(1, '1', 'DEVELOPER', 'test', '01234567890', 'pass', '2021-04-10', '2020-07-01', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6', '1', '02-08-2023-1608303581.jpg', '2', '17,36,37,38,41,42,48,52,55,88,137,150,164,165,166,178,179,180,181,183,187,189,190,249,250,251,252,253,254,1000,1001,1002,1003,1004,1314,1315,1316,1317,1318,1319,1320,1321,1322,1323,1324,1325,1326,1327,1328,1329,1330,1331,1332,1333,1334,1335,1336', '17_add,17_edit,17_delete,17_status,36_add,36_edit,36_delete,36_status,37_add,37_edit,37_delete,37_status,38_add,38_edit,38_delete,38_status,41_add,41_edit,41_delete,41_status,42_add,42_edit,42_delete,42_status,48_add,48_edit,48_delete,48_status,52_add,52_edit,52_delete,52_status,55_add,55_edit,55_delete,55_status,88_add,88_edit,88_delete,88_status,137_add,137_edit,137_delete,137_status,150_add,150_edit,150_delete,150_status,164_add,164_edit,164_delete,164_status,165_add,165_edit,165_delete,165_status,166_add,166_edit,166_delete,166_status,178_add,178_edit,178_delete,178_status,179_add,179_edit,179_delete,179_status,180_add,180_edit,180_delete,180_status,181_add,181_edit,181_delete,181_status,183_add,183_edit,183_delete,183_status,187_add,187_edit,187_delete,187_status,189_add,189_edit,189_delete,189_status,190_add,190_edit,190_delete,190_status,249_add,249_edit,249_delete,249_status,250_add,250_edit,250_delete,250_status,251_add,251_edit,251_delete,251_status,252_add,252_edit,252_delete,252_status,253_add,253_edit,253_delete,253_status,254_add,254_edit,254_delete,254_status,1000_add,1000_edit,1000_delete,1000_status,1001_add,1001_edit,1001_delete,1001_status,1002_add,1002_edit,1002_delete,1002_status,1003_add,1003_edit,1003_delete,1003_status,1004_add,1004_edit,1004_delete,1004_status,1314_add,1314_edit,1314_delete,1314_status,1315_add,1315_edit,1315_delete,1315_status,1316_add,1316_edit,1316_delete,1316_status,1317_add,1317_edit,1317_delete,1317_status,1318_add,1318_edit,1318_delete,1318_status,1319_add,1319_edit,1319_delete,1319_status,1320_add,1320_edit,1320_delete,1320_status,1321_add,1321_edit,1321_delete,1321_status,1322_add,1322_edit,1322_delete,1322_status,1323_add,1323_edit,1323_delete,1323_status,1324_add,1324_edit,1324_delete,1324_status,1325_add,1325_edit,1325_delete,1325_status,1326_add,1326_edit,1326_delete,1326_status,1327_add,1327_edit,1327_delete,1327_status,1328_add,1328_edit,1328_delete,1328_status,1329_add,1329_edit,1329_delete,1329_status,1330_add,1330_edit,1330_delete,1330_status,1331_add,1331_edit,1331_delete,1331_status,1332_add,1332_edit,1332_delete,1332_status,1333_add,1333_edit,1333_delete,1333_status,1334_add,1334_edit,1334_delete,1334_status,1335_add,1335_edit,1335_delete,1335_status,1336_add,1336_edit,1336_delete,1336_status', 0, 'PIET', 'DIRECTOR'),
(2, '995', 'Dr.Pooja Sapra', 'parul', '9537895612', '123', '2023-01-09', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6', '1', '', '1', '36,37,41,42,180,187,249,250,251,252,253,254,1003,1004,1314,1315,1316,1317,1318,1319,1320,1321,1322,1323,1324,1325,1326,1327,1328,1329,1330,1331,1332,1333,1334,1337', '36_add,36_edit,36_delete,36_status,37_add,37_edit,37_delete,37_status,41_add,41_edit,41_delete,41_status,42_add,42_edit,42_delete,42_status,150_add,150_edit,150_delete,150_status,164_add,164_edit,164_delete,164_status,165_add,165_edit,165_delete,165_status,166_add,166_edit,166_delete,166_status,178_add,178_edit,178_delete,178_status,179_add,179_edit,179_delete,179_status,180_add,180_edit,180_delete,180_status,187_add,187_edit,187_delete,187_status,249_add,249_edit,249_delete,249_status,250_add,250_edit,250_delete,250_status,251_add,251_edit,251_delete,251_status,252_add,252_edit,252_delete,252_status,253_add,253_edit,253_delete,253_status,254_add,254_edit,254_delete,254_status,1002_add,1002_edit,1002_delete,1002_status,1003_add,1003_edit,1003_delete,1003_status,1004_add,1004_edit,1004_delete,1004_status,1314_add,1314_edit,1314_delete,1314_status,1315_add,1315_edit,1315_delete,1315_status,1316_add,1316_edit,1316_delete,1316_status,1317_add,1317_edit,1317_delete,1317_status,1318_add,1318_edit,1318_delete,1318_status,1319_add,1319_edit,1319_delete,1319_status,1320_add,1320_edit,1320_delete,1320_status,1321_add,1321_edit,1321_delete,1321_status,1322_add,1322_edit,1322_delete,1322_status,1323_add,1323_edit,1323_delete,1323_status,1324_add,1324_edit,1324_delete,1324_status,1325_add,1325_edit,1325_delete,1325_status,1326_add,1326_edit,1326_delete,1326_status,1327_add,1327_edit,1327_delete,1327_status,1328_add,1328_edit,1328_delete,1328_status,1329_add,1329_edit,1329_delete,1329_status,1330_add,1330_edit,1330_delete,1330_status,1331_add,1331_edit,1331_delete,1331_status,1332_add,1332_edit,1332_delete,1332_status,1333_add,1333_edit,1333_delete,1333_status,1334_add,1334_edit,1334_delete,1334_status', 0, 'PIET', 'Head Of Department'),
(3, '0996', 'Tejal Patel', 'tp@pu.ac.in', '9876543211', '123', '2020-02-11', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '1', '36,187,1003,1004,1314,1315,1316', '36_add,36_edit,36_delete,36_status,187_add,187_edit,187_delete,187_status,1003_add,1003_edit,1003_delete,1003_status,1004_add,1004_edit,1004_delete,1004_status,1314_add,1314_edit,1314_delete,1314_status,1315_add,1315_edit,1315_delete,1315_status,1316_add,1316_edit,1316_delete,1316_status', 0, 'PINNACLE FABRICATION', 'Associate Professor'),
(5, '25', 'Chirag bhalani', 'chirag', '9016', '123', '0000-00-00', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', 0, '', ''),
(6, '456', 'kk', 'kk', '9876', '123', '0000-00-00', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '2', '36,37.38', '', 0, 'PIET', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `temp_shape`
--

DROP TABLE IF EXISTS `temp_shape`;
CREATE TABLE IF NOT EXISTS `temp_shape` (
  `id` int NOT NULL AUTO_INCREMENT,
  `shape_extra_field` varchar(20) NOT NULL,
  `shape_extra_label` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=540 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_shape`
--

INSERT INTO `temp_shape` (`id`, `shape_extra_field`, `shape_extra_label`) VALUES
(5, '321', 'width'),
(4, '123', 'length'),
(6, '123', 'length'),
(7, '321', 'width'),
(8, '789', 'length'),
(9, '987', 'width'),
(10, '1', 'length'),
(11, '0', 'width'),
(12, '0', 'length'),
(13, '0', 'width'),
(14, '9636', 'length'),
(15, '9637', 'width'),
(16, '1111', 'length'),
(17, '2222', 'width'),
(18, '000855', 'length'),
(19, '000855', 'breadth'),
(20, '000855', 'height'),
(21, '12', 'length'),
(22, '12', 'width'),
(23, '12', 'length'),
(24, '12', 'width'),
(25, '10', 'length'),
(26, '10', 'breadth'),
(27, '10', 'height'),
(28, '10', 'length'),
(29, '10', 'width'),
(30, '10', 'length'),
(31, '10', 'width'),
(32, '12', 'length'),
(33, '12', 'breadth'),
(34, '12', 'height'),
(35, '12', 'length'),
(36, '12', 'width'),
(37, '12', 'length'),
(38, '12', 'width'),
(39, '1', 'length'),
(40, '1', 'breadth'),
(41, '1', 'height'),
(42, '56', 'length'),
(43, '56', 'width'),
(44, '10', 'length'),
(45, '10', 'width'),
(46, '10', 'length'),
(47, '10', 'width'),
(48, '44', 'length'),
(49, '45', 'width'),
(50, '12', 'length'),
(51, '0', 'width'),
(52, '12', 'length'),
(53, '0', 'width'),
(54, '12', 'length'),
(55, '12', 'breadth'),
(56, '10', 'height'),
(57, '12', 'length'),
(58, '12', 'width'),
(59, '12', 'length'),
(60, '12', 'breadth'),
(61, '12', 'height'),
(62, '10', 'length'),
(63, '10', 'width'),
(64, '10', 'length'),
(65, '10', 'width'),
(66, '10', 'length'),
(67, '10', 'width'),
(68, '20', 'length'),
(69, '20', 'width'),
(70, '10', 'length'),
(71, '10', 'width'),
(72, '10', 'length'),
(73, '10', 'width'),
(74, '10', 'length'),
(75, '10', 'breadth'),
(76, '10', 'height'),
(77, '1', 'length'),
(78, '1', 'breadth'),
(79, '1', 'height'),
(80, '55', 'length'),
(81, '58', 'width'),
(82, '10', 'length'),
(83, '10', 'breadth'),
(84, '10', 'height'),
(85, '74', 'length'),
(86, '74', 'width'),
(87, '5', 'length'),
(88, '5', 'breadth'),
(89, '5', 'height'),
(90, '77', 'length'),
(91, '77', 'width'),
(92, '10', 'length'),
(93, '10', 'width'),
(94, '55', 'length'),
(95, '55', 'breadth'),
(96, '55', 'height'),
(97, '77', 'length'),
(98, '77', 'width'),
(99, '10', 'length'),
(100, '10', 'width'),
(101, '0', 'length'),
(102, '0', 'width'),
(103, '10', 'length'),
(104, '10', 'width'),
(105, '11', 'length'),
(106, '11', 'breadth'),
(107, '11', 'height'),
(108, '101', 'length'),
(109, '111', 'width'),
(110, '10', 'length'),
(111, '12', 'breadth'),
(112, '13', 'height'),
(113, '10', 'length'),
(114, '20', 'breadth'),
(115, '30', 'height'),
(116, '10', 'length'),
(117, '10', 'breadth'),
(118, '10', 'height'),
(119, '5', 'length'),
(120, '5', 'breadth'),
(121, '5', 'height'),
(122, '58', 'length'),
(123, '85', 'breadth'),
(124, '58', 'height'),
(125, '10', 'length'),
(126, '50', 'width'),
(127, '10', 'length'),
(128, '20', 'breadth'),
(129, '30', 'height'),
(130, '99', 'length'),
(131, '99', 'width'),
(132, '99', 'length'),
(133, '99', 'breadth'),
(134, '99', 'height'),
(135, '99', 'length'),
(136, '99', 'width'),
(137, '100', 'length'),
(138, '100', 'width'),
(139, '10', 'length'),
(140, '1', 'width'),
(141, '990', 'length'),
(142, '10', 'width'),
(143, '20', 'BREADTH'),
(144, '30', 'THICKNESS'),
(145, '10', 'LENGTH'),
(146, '20', 'BREADTH'),
(147, '30', 'THICKNESS'),
(148, '999', 'height'),
(149, '999', 'breadth'),
(150, '999', 'length'),
(151, '10', 'LENGTH'),
(152, '20', 'BREADTH'),
(153, '30', 'THICKNESS'),
(154, '10', 'OUTER DIAMETER'),
(155, '30', 'INNER DIAMETER'),
(156, '50', 'THICKNESS/LENGTH'),
(157, '90', 'OUTER DIAMETER'),
(158, '80', 'INNER DIAMETER'),
(159, '70', 'THICKNESS/LENGTH'),
(160, '10', 'OUTER DIAMETER'),
(161, '20', 'INNER DIAMETER'),
(162, '30', 'THICKNESS/LENGTH'),
(163, '10', 'OUTER DIAMETER'),
(164, '20', 'INNER DIAMETER'),
(165, '30', 'THICKNESS/LENGTH'),
(166, '40', 'DENSITY'),
(167, '20', 'LENGTH'),
(168, '30', 'BREADTH'),
(169, '40', 'THICKNESS'),
(170, '58', 'OUTER DIAMETER'),
(171, '98', 'INNER DIAMETER'),
(172, '63', 'THICKNESS/LENGTH'),
(173, '52', 'DENSITY'),
(174, '12', 'LENGTH'),
(175, '20', 'BREADTH'),
(176, '30', 'THICKNESS'),
(177, '10', 'OUTER DIAMETER'),
(178, '10', 'OUTER DIAMETER'),
(179, '10', 'INNER DIAMETER'),
(180, '10', 'THICKNESS/LENGTH'),
(181, '10', 'DENSITY'),
(182, '10', 'OUTER DIAMETER'),
(183, '101', 'INNER DIAMETER'),
(184, '10', 'THICKNESS/LENGTH'),
(185, '100', 'DENSITY'),
(186, '10', 'OUTER DIAMETER'),
(187, '10', 'INNER DIAMETER'),
(188, '10', 'THICKNESS/LENGTH'),
(189, '10', 'DENSITY'),
(190, '10', 'LENGTH'),
(191, '10', 'BREADTH'),
(192, '10', 'THICKNESS'),
(193, '10', 'OUTER DIAMETER'),
(194, '10', 'INNER DIAMETER'),
(195, '10', 'THICKNESS/LENGTH'),
(196, '10', 'DENSITY'),
(197, '10', 'LENGTH'),
(198, '101', 'BREADTH'),
(199, '10', 'THICKNESS'),
(200, '10', 'height'),
(201, '101', 'breadth'),
(202, '10', 'length'),
(203, '10', 'OUTER DIAMETER'),
(204, '101', 'INNER DIAMETER'),
(205, '10', 'THICKNESS/LENGTH'),
(206, '10', 'DENSITY'),
(207, '10', 'LENGTH'),
(208, '10', 'BREADTH'),
(209, '100', 'THICKNESS'),
(210, '666', 'OUTER DIAMETER'),
(211, '666', 'INNER DIAMETER'),
(212, '666', 'THICKNESS/LENGTH'),
(213, '666', 'DENSITY'),
(214, '10', 'LENGTH'),
(215, '20', 'BREADTH'),
(216, '30', 'THICKNESS'),
(217, '10', 'height'),
(218, '20', 'breadth'),
(219, '30', 'length'),
(220, '10', 'OUTER DIAMETER'),
(221, '20', 'INNER DIAMETER'),
(222, '30', 'THICKNESS/LENGTH'),
(223, '40', 'DENSITY'),
(224, '20', 'LENGTH'),
(225, '30', 'BREADTH'),
(226, '50', 'THICKNESS'),
(227, '89', 'height'),
(228, '8', 'breadth'),
(229, '87', 'length'),
(230, '40', 'height'),
(231, '50', 'breadth'),
(232, '90', 'length'),
(233, '10', 'OUTER DIAMETER'),
(234, '20', 'INNER DIAMETER'),
(235, '30', 'THICKNESS/LENGTH'),
(236, '40', 'DENSITY'),
(237, '10', 'LENGTH'),
(238, '20', 'BREADTH'),
(239, '30', 'THICKNESS'),
(240, '20', 'height'),
(241, '30', 'breadth'),
(242, '40', 'length'),
(243, '10', 'height'),
(244, '20', 'breadth'),
(245, '30', 'length'),
(246, '10', 'LENGTH'),
(247, '20', 'BREADTH'),
(248, '30', 'THICKNESS'),
(249, '80', 'OUTER DIAMETER'),
(250, '90', 'INNER DIAMETER'),
(251, '60', 'THICKNESS/LENGTH'),
(252, '40', 'DENSITY'),
(253, '10', 'OUTER DIAMETER'),
(254, '20', 'INNER DIAMETER'),
(255, '30', 'THICKNESS/LENGTH'),
(256, '40', 'DENSITY'),
(257, '80090', 'LENGTH'),
(258, '60', 'BREADTH'),
(259, '40', 'THICKNESS'),
(260, '10', 'height'),
(261, '20', 'breadth'),
(262, '30', 'length'),
(263, '20', 'OUTER DIAMETER'),
(264, '30', 'INNER DIAMETER'),
(265, '50', 'THICKNESS/LENGTH'),
(266, '60', 'DENSITY'),
(267, '10', 'OUTER DIAMETER'),
(268, '10', 'INNER DIAMETER'),
(269, '10', 'THICKNESS/LENGTH'),
(270, '10', 'DENSITY'),
(271, '1', 'OUTER DIAMETER'),
(272, '10', 'INNER DIAMETER'),
(273, '10', 'THICKNESS/LENGTH'),
(274, '10', 'DENSITY'),
(275, '10', 'OUTER DIAMETER'),
(276, '30', 'INNER DIAMETER'),
(277, '050', 'THICKNESS/LENGTH'),
(278, '80', 'DENSITY'),
(279, '50', 'LENGTH'),
(280, '20', 'BREADTH'),
(281, '30', 'THICKNESS'),
(282, '10', 'OUTER DIAMETER'),
(283, '50', 'INNER DIAMETER'),
(284, '30', 'THICKNESS/LENGTH'),
(285, '60', 'DENSITY'),
(286, '10', 'LENGTH'),
(287, '50', 'BREADTH'),
(288, '20', 'THICKNESS'),
(289, '80', 'OUTER DIAMETER'),
(290, '50', 'INNER DIAMETER'),
(291, '90', 'THICKNESS/LENGTH'),
(292, '8', 'DENSITY'),
(293, '10', 'LENGTH'),
(294, '50', 'BREADTH'),
(295, '30', 'THICKNESS'),
(296, '10', 'LENGTH'),
(297, '50', 'BREADTH'),
(298, '20', 'THICKNESS'),
(299, '1', 'OUTER DIAMETER'),
(300, '2', 'INNER DIAMETER'),
(301, '3', 'THICKNESS/LENGTH'),
(302, '4', 'DENSITY'),
(303, '1000', 'LENGTH'),
(304, '1000', 'BREADTH'),
(305, '10', 'THICKNESS'),
(306, '1000', 'LENGTH'),
(307, '1000', 'BREADTH'),
(308, '10', 'THICKNESS'),
(309, '100', 'OUTER DIAMETER'),
(310, '50', 'INNER DIAMETER'),
(311, '10', 'THICKNESS/LENGTH'),
(312, '8', 'DENSITY'),
(313, '100', 'OUTER DIAMETER'),
(314, '50', 'INNER DIAMETER'),
(315, '11', 'THICKNESS/LENGTH'),
(316, '8', 'DENSITY'),
(317, '100', 'LENGTH'),
(318, '100', 'BREADTH'),
(319, '10', 'THICKNESS'),
(320, '10', 'OUTER DIAMETER'),
(321, '20', 'INNER DIAMETER'),
(322, '50', 'THICKNESS/LENGTH'),
(323, '1', 'DENSITY'),
(324, '10', 'LENGTH'),
(325, '20', 'BREADTH'),
(326, '5', 'THICKNESS'),
(327, '20', 'LENGTH'),
(328, '30', 'BREADTH'),
(329, '50', 'THICKNESS'),
(330, '20', 'LENGTH'),
(331, '50', 'BREADTH'),
(332, '30', 'THICKNESS'),
(333, '10', 'LENGTH'),
(334, '20', 'BREADTH'),
(335, '5', 'THICKNESS'),
(336, '50', 'LENGTH'),
(337, '80', 'BREADTH'),
(338, '60', 'THICKNESS'),
(339, '800', 'OUTER DIAMETER'),
(340, '900', 'INNER DIAMETER'),
(341, '500', 'THICKNESS/LENGTH'),
(342, '8', 'DENSITY'),
(343, '80', 'LENGTH'),
(344, '60', 'BREADTH'),
(345, '8', 'THICKNESS'),
(346, '90', 'LENGTH'),
(347, '80', 'BREADTH'),
(348, '60', 'THICKNESS'),
(349, '900', 'LENGTH'),
(350, '800', 'BREADTH'),
(351, '600', 'THICKNESS'),
(352, '800', 'LENGTH'),
(353, '900', 'BREADTH'),
(354, '600', 'THICKNESS'),
(355, '900', 'height'),
(356, '800', 'breadth'),
(357, '600', 'length'),
(358, '800', 'LENGTH'),
(359, '900', 'BREADTH'),
(360, '600', 'THICKNESS'),
(361, '10', 'LENGTH'),
(362, '50', 'BREADTH'),
(363, '60', 'THICKNESS'),
(364, '600', 'LENGTH'),
(365, '800', 'BREADTH'),
(366, '900', 'THICKNESS'),
(367, '20', 'LENGTH'),
(368, '30', 'BREADTH'),
(369, '50', 'THICKNESS'),
(370, '80', 'LENGTH'),
(371, '9', 'BREADTH'),
(372, '0', 'THICKNESS'),
(373, '50', 'LENGTH'),
(374, '50', 'BREADTH'),
(375, '50', 'THICKNESS'),
(376, '10', 'LENGTH'),
(377, '20', 'BREADTH'),
(378, '50', 'THICKNESS'),
(379, '800', 'height'),
(380, '900', 'breadth'),
(381, '100', 'length'),
(382, '20', 'LENGTH'),
(383, '50', 'BREADTH'),
(384, '60', 'THICKNESS'),
(385, '10', 'OUTER DIAMETER'),
(386, '20', 'INNER DIAMETER'),
(387, '50', 'THICKNESS/LENGTH'),
(388, '9', 'DENSITY'),
(389, '100', 'OUTER DIAMETER'),
(390, '100', 'INNER DIAMETER'),
(391, '100', 'THICKNESS/LENGTH'),
(392, '100', 'DENSITY'),
(393, '1000', 'height'),
(394, '1000', 'breadth'),
(395, '10', 'length'),
(396, '100', 'OUTER DIAMETER'),
(397, '50', 'INNER DIAMETER'),
(398, '11', 'THICKNESS/LENGTH'),
(399, '8', 'DENSITY'),
(400, '100', 'OUTER DIAMETER'),
(401, '50', 'INNER DIAMETER'),
(402, '11', 'THICKNESS/LENGTH'),
(403, '8', 'DENSITY'),
(404, '100', 'OUTER DIAMETER'),
(405, '50', 'INNER DIAMETER'),
(406, '11', 'THICKNESS/LENGTH'),
(407, '8', 'DENSITY'),
(408, '100', 'DENSITY'),
(409, '50', 'THICKNESS/LENGTH'),
(410, '11', 'INNER DIAMETER'),
(411, '8', 'OUTER DIAMETER'),
(412, '100', 'DENSITY'),
(413, '50', 'THICKNESS'),
(414, '11', 'HEIGHT'),
(415, '8', 'BREADTH'),
(416, '500', 'HEIGHT'),
(417, '5', 'THICKNESS'),
(418, '500', 'DENSITY'),
(419, '500', 'HEIGHT'),
(420, '5', 'THICKNESS'),
(421, '500', 'DENSITY'),
(422, '500', 'HEIGHT'),
(423, '5', 'THICKNESS'),
(424, '500', 'DENSITY'),
(425, '50', 'LENGTH'),
(426, '10', 'BREADTH'),
(427, '5', 'THICKNESS'),
(428, '500', 'LENGTH'),
(429, '100', 'BREADTH'),
(430, '50', 'THICKNESS'),
(431, '500', 'LENGTH'),
(432, '100', 'BREADTH'),
(433, '50', 'THICKNESS'),
(434, '500', 'LENGTH'),
(435, '100', 'BREADTH'),
(436, '50', 'THICKNESS'),
(437, '500', 'LENGTH'),
(438, '100', 'BREADTH'),
(439, '50', 'THICKNESS'),
(440, '500', 'LENGTH'),
(441, '100', 'BREADTH'),
(442, '50', 'THICKNESS'),
(443, '500', 'LENGTH'),
(444, '100', 'BREADTH'),
(445, '50', 'THICKNESS'),
(446, '500', 'height'),
(447, '100', 'breadth'),
(448, '50', 'length'),
(449, '50', 'LENGTH'),
(450, '10', 'BREADTH'),
(451, '5', 'THICKNESS'),
(452, '500', 'LENGTH'),
(453, '10', 'BREADTH'),
(454, '50', 'THICKNESS'),
(455, '500', 'LENGTH'),
(456, '100', 'BREADTH'),
(457, '50', 'THICKNESS'),
(458, '500', 'height'),
(459, '100', 'breadth'),
(460, '50', 'length'),
(461, '500', 'LENGTH'),
(462, '10', 'BREADTH'),
(463, '5', 'THICKNESS'),
(464, '500', 'LENGTH'),
(465, '100', 'BREADTH'),
(466, '50', 'THICKNESS'),
(467, '900', 'height'),
(468, '600', 'breadth'),
(469, '20', 'length'),
(470, '600', 'height'),
(471, '900', 'breadth'),
(472, '20', 'length'),
(473, '800', 'DENSITY'),
(474, '900', 'THICKNESS/LENGTH'),
(475, '60', 'INNER DIAMETER'),
(476, '50', 'OUTER DIAMETER'),
(477, '500', 'LENGTH'),
(478, '600', 'BREADTH'),
(479, '10', 'THICKNESS'),
(480, '500', 'LENGTH'),
(481, '600', 'BREADTH'),
(482, '300', 'THICKNESS'),
(483, '500', 'LENGTH'),
(484, '600', 'BREADTH'),
(485, '10', 'THICKNESS'),
(486, '500', 'LENGTH'),
(487, '900', 'BREADTH'),
(488, '30', 'THICKNESS'),
(489, '600', 'height'),
(490, '300', 'breadth'),
(491, '20', 'length'),
(492, '789', 'height'),
(493, '456', 'breadth'),
(494, '12', 'length'),
(495, '10', 'height'),
(496, '20', 'breadth'),
(497, '3', 'length'),
(498, '50', 'height'),
(499, '60', 'breadth'),
(500, '10', 'length'),
(501, '800', 'height'),
(502, '600', 'breadth'),
(503, '20', 'length'),
(504, '800', 'height'),
(505, '200', 'breadth'),
(506, '10', 'length'),
(507, '500', 'height'),
(508, '200', 'breadth'),
(509, '100', 'length'),
(510, '900', 'height'),
(511, '300', 'breadth'),
(512, '600', 'length'),
(513, '800', 'LENGTH'),
(514, '400', 'BREADTH'),
(515, '100', 'THICKNESS'),
(516, '700', 'LENGTH'),
(517, '600', 'BREADTH'),
(518, '20', 'THICKNESS'),
(519, '800', 'LENGTH'),
(520, '600', 'BREADTH'),
(521, '5', 'THICKNESS'),
(522, '800', 'LENGTH'),
(523, '600', 'BREADTH'),
(524, '1', 'THICKNESS'),
(525, '200', 'height'),
(526, '300', 'breadth'),
(527, '1', 'length'),
(528, '500', 'height'),
(529, '600', 'breadth'),
(530, '10', 'length'),
(531, '800', 'LENGTH'),
(532, '900', 'BREADTH'),
(533, '3', 'THICKNESS'),
(534, '800', 'LENGTH'),
(535, '900', 'BREADTH'),
(536, '2', 'THICKNESS'),
(537, '200', 'LENGTH'),
(538, '30', 'BREADTH'),
(539, '1', 'THICKNESS');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

DROP TABLE IF EXISTS `testing`;
CREATE TABLE IF NOT EXISTS `testing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `testing_select_tpi` varchar(100) NOT NULL,
  `testing_no_of_days` varchar(50) NOT NULL,
  `testing_unit_rate` varchar(100) NOT NULL,
  `testing_total_cost` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `cost_est_id`, `testing_select_tpi`, `testing_no_of_days`, `testing_unit_rate`, `testing_total_cost`) VALUES
(1, 0, 'rahul', '120', '120', '14400'),
(2, 2, 'rahul', '120', '120', '14400'),
(3, 2, 'rahul', '120', '120', '14400'),
(4, 2, 'rahul', '120', '120', '14400'),
(5, 8, 'rahul', '120', '120', '14400'),
(6, 9, 'rahul', '120', '120', '14400'),
(7, 12, '', '', '', ''),
(8, 13, 'rahul', '120', '120', '14400'),
(9, 14, 'rahul', '120', '120', '14400');

-- --------------------------------------------------------

--
-- Table structure for table `tpi`
--

DROP TABLE IF EXISTS `tpi`;
CREATE TABLE IF NOT EXISTS `tpi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enrollment_no` int NOT NULL,
  `total_marks` int NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `given_marks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpi`
--

INSERT INTO `tpi` (`id`, `enrollment_no`, `total_marks`, `status`, `given_marks`) VALUES
(1, 2, 60, '1', 49),
(2, 3, 60, '1', 48),
(10, 230, 60, '1', 39),
(5, 141, 60, '1', 1),
(14, 55, 60, '1', 57),
(7, 68, 60, '1', 45),
(13, 19, 60, '1', 55),
(15, 934, 60, '1', 2),
(16, 12, 60, '1', 12),
(17, 33, 60, '1', 59),
(19, 101, 60, '1', 59),
(20, 68, 60, '1', 55),
(23, 2003031081, 60, '1', 45);

-- --------------------------------------------------------

--
-- Table structure for table `tpi1`
--

DROP TABLE IF EXISTS `tpi1`;
CREATE TABLE IF NOT EXISTS `tpi1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enrollment_no` int NOT NULL,
  `total_marks` int NOT NULL,
  `status` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `given_marks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tpi1`
--

INSERT INTO `tpi1` (`id`, `enrollment_no`, `total_marks`, `status`, `given_marks`) VALUES
(1, 68, 60, '1', 50),
(2, 13, 60, '1', 59),
(3, 54, 60, '1', 55),
(4, 876, 60, '1', 3),
(5, 765, 60, '1', 61),
(6, 7651, 60, '1', 54);

-- --------------------------------------------------------

--
-- Table structure for table `tpi2`
--

DROP TABLE IF EXISTS `tpi2`;
CREATE TABLE IF NOT EXISTS `tpi2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enrollment_no` int NOT NULL,
  `total_marks` int NOT NULL,
  `status` enum('0','1') NOT NULL,
  `given_marks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tpi2`
--

INSERT INTO `tpi2` (`id`, `enrollment_no`, `total_marks`, `status`, `given_marks`) VALUES
(3, 11, 60, '1', 50),
(2, 13, 60, '1', 55),
(4, 68, 60, '1', 55),
(5, 12, 60, '1', 45),
(6, 2147483647, 60, '1', 55);

-- --------------------------------------------------------

--
-- Table structure for table `transportation_charges`
--

DROP TABLE IF EXISTS `transportation_charges`;
CREATE TABLE IF NOT EXISTS `transportation_charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_est_id` int NOT NULL,
  `transportation_stage` varchar(200) NOT NULL,
  `transportation_from` varchar(100) NOT NULL,
  `transportation_to` varchar(100) NOT NULL,
  `transportation_unit_charge` varchar(200) NOT NULL,
  `transportation_no_of_trip` varchar(100) NOT NULL,
  `transportation_total` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transportation_charges`
--

INSERT INTO `transportation_charges` (`id`, `cost_est_id`, `transportation_stage`, `transportation_from`, `transportation_to`, `transportation_unit_charge`, `transportation_no_of_trip`, `transportation_total`) VALUES
(1, 0, 'stage2', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(2, 2, 'stage2', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(3, 2, 'stage2', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(4, 2, 'stage1', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(5, 8, 'stage1', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(6, 9, 'stage2', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(7, 9, 'stage1', '', '', '', '', ''),
(8, 9, 'stage1', '', '', '', '', ''),
(9, 12, 'stage1', '', '', '', '', ''),
(10, 13, 'stage1', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(11, 14, 'stage1', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(12, 16, 'stage2', 'VADODARA', 'VADODARA', '100', '250', '25000'),
(13, 17, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `uom`
--

DROP TABLE IF EXISTS `uom`;
CREATE TABLE IF NOT EXISTS `uom` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uom_name` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uom`
--

INSERT INTO `uom` (`id`, `uom_name`, `status`) VALUES
(6, 'kgs', '1');

-- --------------------------------------------------------

--
-- Table structure for table `validation_log`
--

DROP TABLE IF EXISTS `validation_log`;
CREATE TABLE IF NOT EXISTS `validation_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `module_name` varchar(25) NOT NULL,
  `mod_id` int NOT NULL,
  `ref_mod` varchar(25) NOT NULL,
  `ref_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validation_log`
--

INSERT INTO `validation_log` (`id`, `module_name`, `mod_id`, `ref_mod`, `ref_id`) VALUES
(152, 'validate_sub_group_mst', 53, 'validate_product_mst', 73);

-- --------------------------------------------------------

--
-- Table structure for table `weekly`
--

DROP TABLE IF EXISTS `weekly`;
CREATE TABLE IF NOT EXISTS `weekly` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enrollment_no` int NOT NULL,
  `total_mco1` int NOT NULL,
  `given_mco1` int NOT NULL,
  `total_mco2` int NOT NULL,
  `given_mco2` int NOT NULL,
  `total_mco3` int NOT NULL,
  `given_mco3` int NOT NULL,
  `total_mco4` int NOT NULL,
  `given_mco4` int NOT NULL,
  `total_mco5` int NOT NULL,
  `given_mco5` int NOT NULL,
  `total_mco6` int NOT NULL,
  `given_mco6` int NOT NULL,
  `sub_total_marks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `weekly`
--

INSERT INTO `weekly` (`id`, `enrollment_no`, `total_mco1`, `given_mco1`, `total_mco2`, `given_mco2`, `total_mco3`, `given_mco3`, `total_mco4`, `given_mco4`, `total_mco5`, `given_mco5`, `total_mco6`, `given_mco6`, `sub_total_marks`) VALUES
(1, 13, 60, 15, 15, 11, 14, 10, 15, 10, 0, 0, 0, 0, 35),
(2, 14, 40, 15, 15, 11, 24, 10, 15, 10, 0, 0, 0, 0, 35);

-- --------------------------------------------------------

--
-- Table structure for table `weld_consumable`
--

DROP TABLE IF EXISTS `weld_consumable`;
CREATE TABLE IF NOT EXISTS `weld_consumable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `weld_code` int NOT NULL,
  `weld_name` varchar(180) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weld_consumable`
--

INSERT INTO `weld_consumable` (`id`, `weld_code`, `weld_name`, `status`) VALUES
(1, 1, 'ram1', '1'),
(2, 2, 'simple', '1'),
(3, 32, 'Powder', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
