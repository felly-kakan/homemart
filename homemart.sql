-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 08:35 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Benjamin', 'bkamuti@gmail.com', 'benja4510'),
(2, 'mwangi', 'mwangi@gmail.com', 'mwangi4510');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `reply_id`, `post_id`, `timestamp`, `name`, `message`) VALUES
(1, NULL, 999, '2019-02-12 17:16:56', 'sam', 'need a service'),
(2, NULL, 999, '2019-02-12 18:51:21', 'Samy ', 'Want a service '),
(3, NULL, 999, '2019-03-22 12:35:09', 'id', 'Need quick response'),
(4, NULL, 999, '2019-03-23 18:17:34', 'h', 'hi'),
(5, NULL, 999, '2019-04-02 19:02:50', 'do', 'meded');

-- --------------------------------------------------------

--
-- Table structure for table `mpesa_payments`
--

CREATE TABLE `mpesa_payments` (
  `Number` int(11) NOT NULL,
  `FName` varchar(40) DEFAULT NULL,
  `MName` varchar(40) DEFAULT NULL,
  `LName` varchar(40) DEFAULT NULL,
  `TransactionType` varchar(40) DEFAULT NULL,
  `TransID` varchar(40) DEFAULT NULL,
  `TransTime` varchar(40) DEFAULT NULL,
  `TransAmount` double DEFAULT NULL,
  `ShortCode` varchar(15) DEFAULT NULL,
  `BillRefNumber` varchar(30) DEFAULT NULL,
  `InvoiceNumber` varchar(30) DEFAULT NULL,
  `ThirdPartyTransID` varchar(40) DEFAULT NULL,
  `MSISDN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `due_date` varchar(20) NOT NULL,
  `optional_details` varchar(20) DEFAULT NULL,
  `vendor` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `due_date`, `optional_details`, `vendor`, `email`, `fname`, `lname`, `phone`, `contact`, `occupation`, `time`) VALUES
(79, 'Next Week', 'gvghjkl', 'Design Scope Limited', 'geoffreymwangi215@gm', 'Geoffrey', 'jkiop', '0704565633', 'Email', 'Interior Design Services', '2019-03-30 10:34:20'),
(81, 'Next month', 'vfgcbdhxnjzm', 'Design Scope Limited', 'h@gmail.com', 'dftgy', 'ftegyhdsx', '09876543', 'Phone', 'Interior Design Services', '2019-03-30 11:35:33'),
(84, 'Next month', 'dfgvhbjnjbhvgfcds', 'Orchid Plumbing Company', 'h@gmail.com', 'Bos', '67cffgf', '8765432345678', 'Phone', 'Water Softener and purification', '2019-03-30 11:46:43'),
(85, 'Next month', 'gvhdbcx ', 'Intex Africa Limited', 'y@gmail.com', 'ui', 'trf', '123456787654', 'Email', 'Stairway Build', '2019-03-30 12:06:29'),
(86, 'Within a few days', 'wefghjyhg', 'Intex Africa Limited', 'dy@gmail.com', 'dfrgh', 'erfg5trhgfvd', '987654345', 'Phone', 'Interior trim installation', '2019-03-30 12:11:04'),
(87, 'Next Week', 'fgdghjskz', 'xyz', 'h@gmail.com', 'enock', 'hgfdfg', '098765432345', 'Phone', 'Outlet Repair', '2019-04-03 13:42:32'),
(88, 'Next month', 'dfghjkhgbfd', 'xyz', 'geoffreymwangi215@gm', 'Geoffrey', 'mwas', '0705831052', 'Phone', 'Outlet Repair', '2019-04-03 13:46:40'),
(89, 'Next Week', '8u7yhgt5rfeds', 'xyz', 'dfrtg@gmail.com', 'dftgy', 'fghjhngbfvcx', '09876543', 'Phone', 'Outlet Repair', '2019-04-03 13:50:03'),
(90, 'Next Week', 'dfghn', 'xyz', 'dfrtg@gmail.com', 'dfg', 'bgfvcxs', 'fdxxdfg', 'Email', 'Outlet Repair', '2019-04-03 20:38:21'),
(91, 'Next Week', 'mngfdsdfghjk', 'xyz', 'g@gmail.com', 'Bos', 'hgfdfg', '2345677654', 'Phone', 'Outlet Repair', '2019-04-03 20:50:21'),
(92, 'Next Week', 'jbfdwerftghyjk', '', 'dy@gmail.com', 'Geoffrey', 'fredsza', '98765432', 'Email', 'Outlet Repair', '2019-04-03 23:20:55'),
(93, 'Next Week', 'wertyuiop', 'Design Scope Limited', 'y@gmail.com', 'hbgfd', 'ujyhtgrfefrty', '2345677654', 'Phone', 'Interior Design Services', '2019-04-09 09:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `vendor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `location`, `vendor_name`) VALUES
(29, 'Interior design', 'Nakuru', 'Design Scope Limited'),
(31, 'Carpentry', 'Bondo', 'Intex Africa Limited'),
(32, 'Plumbing', 'Kisumu', 'Orchid Plumbing Company'),
(35, 'Painting', 'Kericho', 'Modern Painters Kenya'),
(37, 'Landscaping', 'Naivasha', 'Bakugan Ltd'),
(38, 'Electrical', 'Thika', 'Vivo Energy Kenya'),
(39, 'Contracting', 'Rongai', 'Fas Kenya'),
(40, 'Handiwork', 'Embakasi', 'Han Handiwork Ltd'),
(42, 'Carpentry', 'Eldoret', 'Eldoret Desighners'),
(43, 'Interior design', 'Kileleshwa', 'Mamboleo Designers'),
(44, 'Carpentry', 'Eldoret', 'Eldoret Desighners'),
(45, 'Carpentry', 'Eldoret', 'Eldoret Desighners'),
(46, 'Handiwork', 'bondo', 'jooust'),
(47, 'Electrical', 'Thika', 'xyz'),
(48, 'Painting', 'gilgil', 'v'),
(49, 'Interior design', 'kikuyu', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_v` int(11) NOT NULL,
  `business_owner_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `work_phone` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `business_location` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_v`, `business_owner_name`, `email`, `password`, `work_phone`, `business_name`, `business_location`, `username`, `occupation`) VALUES
(16, 'Geoffrey Mwangi', 'geoffreymwangi215@gmail.com', '0d3237f9248314aedbc498a49357d803', '0704565633', 'Design Scope Limited', 'Nakuru', 'Design Scope Limited', 'Interior design'),
(17, 'Intex Africa Limited', 'info@intexafrica.com', '0d3237f9248314aedbc498a49357d803', '+254706733498', 'Intex Africa Limited', 'Bondo', 'Intex Africa Limited', 'Carpentry'),
(18, 'Orchid Plumbing Company', 'info@orchid.com', '0d3237f9248314aedbc498a49357d803', '+254705832058', 'Orchid Plumbing Company', 'Kisumu', 'Orchid Plumbing Company', 'Plumbing'),
(19, 'Modern Painters Kenya', 'info@modern.com', '0d3237f9248314aedbc498a49357d803', '+254707001003', 'Modern Painters Kenya', 'Kericho', 'Modern Painters Kenya', 'Painting'),
(20, 'Fatuma Ali', 'info@bakugan.com', '0d3237f9248314aedbc498a49357d803', '+254726733498', 'Bakugan Ltd', 'Naivasha', 'Bakugan Ltd', 'Landscaping'),
(21, 'Benjamin Kyalo', 'info@han.com', '0d3237f9248314aedbc498a49357d803', '+254789734500', 'Han Handiwork Ltd', 'Embakasi', 'Han Handiwork Ltd', 'Handiwork'),
(22, 'Ali Kharif', 'info@faskenya.com', '0d3237f9248314aedbc498a49357d803', '+254767456234', 'Fas Kenya', 'Rongai', 'Fas Kenya', 'Contracting'),
(23, 'Shem Aliko', 'info@vivoenergykenya.com', '0d3237f9248314aedbc498a49357d803', '+25421985307', 'Vivo Energy Kenya', 'Thika', 'Vivo Energy Kenya', 'Electrical'),
(26, 'ss', 'ss@gmail.com', '202cb962ac59075b964b07152d234b70', 'Asti ', 'Ouch ', 'Dgc ', 'ss', 'Contracting'),
(27, 'kelvo', 'kelvo@gmail.com', 'ee2d261dbdcdfe8b266518dd11508334', '+254700666251', 'Eldoret Desighners', 'Eldoret', 'kelvo@gmail.com', 'Carpentry'),
(28, 'Kamuti', 'kamuti@gmail.com', '44dc54b6368d0edaee58c9a977642d65', '0748460169', 'Mamboleo Designers', 'Kileleshwa', 'kamuti@gmail.com', 'Interior design'),
(29, 'judy', 'bella@gmail.com', 'f30fd8727a34819d154e68a6205e654c', '0705192628', 'Bella Designers', 'Mulolongo', 'bella@gmail.com', 'Electrical'),
(30, 'jooust', 'info@jooust.com', '0d3237f9248314aedbc498a49357d803', '0987654321', 'jooust', 'bondo', 'jooust', 'Handiwork'),
(31, 'Geoffrey Mwangi', 'geoffreynjuguna215@gmail.com', '0d3237f9248314aedbc498a49357d803', '0710345678', 'xyz', 'molo', 'xyz', 'Electrical'),
(32, 'Njuguna Mwangi', 'n@gmail.com', '0d3237f9248314aedbc498a49357d803', '1234567890', 'v', 'gilgil', 'b', 'Painting'),
(33, 'a', 'a@gmail.com', '0d3237f9248314aedbc498a49357d803', '9090909009', 'a', 'kikuyu', 'a', 'Interior design');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_requirement`
--

CREATE TABLE `vendor_requirement` (
  `id_r` int(11) NOT NULL,
  `vendor_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `national_identity_card` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `county_government_vendor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendor_requirement`
--

INSERT INTO `vendor_requirement` (`id_r`, `vendor_name`, `national_identity_card`, `county_government_vendor`, `insurance`, `uploaded_on`, `status`) VALUES
(22, 'Design Scope Limited ', 'upload/ID/IMG_20190206_173532.jpg', 'upload/license/IMG_20190206_173400.jpg', 'upload/insurance/IMG_20190206_173618.jpg', '0000-00-00 00:00:00', '1'),
(23, 'Intex Africa Limited ', 'upload/ID/IMG_20190214_120003.JPG', 'upload/license/IMG_20190214_120018.JPG', 'upload/insurance/IMG_20190214_120033.JPG', '0000-00-00 00:00:00', '1'),
(24, 'Orchid Plumbing Company ', 'upload/ID/IMG_20190214_134642.JPG', 'upload/license/IMG_20190214_134659.JPG', 'upload/insurance/IMG_20190214_134715.JPG', '0000-00-00 00:00:00', '1'),
(25, 'Modern Painters Kenya ', 'upload/ID/IMG_20190214_140106.JPG', 'upload/license/IMG_20190214_140043.JPG', 'upload/insurance/IMG_20190214_140028.JPG', '0000-00-00 00:00:00', '1'),
(26, 'Vivo Energy Kenya ', 'upload/ID/IMG_20190307_185600.JPG', 'upload/license/IMG_20190307_185542.JPG', 'upload/insurance/IMG_20190307_185524.JPG', '0000-00-00 00:00:00', '1'),
(27, 'Bakugan Ltd', 'upload/ID/IMG_20190307_185804.JPG', 'upload/license/IMG_20190307_185747.JPG', 'upload/insurance/IMG_20190307_185733.JPG', '0000-00-00 00:00:00', '1'),
(28, 'Han Handiwork Ltd', 'upload/ID/han_id.JPG', 'upload/license/han_license.JPG', 'upload/insurance/han_insurance.JPG', '0000-00-00 00:00:00', '1'),
(29, 'Fas Kenya', 'upload/ID/fas_id.JPG', 'upload/license/fas_license.JPG', 'upload/insurance/fas_insurance.JPG', '0000-00-00 00:00:00', '1'),
(30, 'kelvo@gmail.com', 'upload/ID/1552471513651537631687.jpg', 'upload/license/15524715456182073354237.jpg', 'upload/insurance/1552471415116141985351.jpg', '0000-00-00 00:00:00', '1'),
(31, 'kamuti@gmail.com', 'upload/ID/15524725463191877253713.jpg', 'upload/license/1552472594234895196806.jpg', 'upload/insurance/15524726251082116360379.jpg', '0000-00-00 00:00:00', '1'),
(32, 'jooust', 'upload/ID/.23.jpg', 'upload/license/.33.jpg', 'upload/insurance/.90.jpg', '0000-00-00 00:00:00', '1'),
(33, 'xyz', 'upload/ID/.43.jpg', 'upload/license/.46.jpg', 'upload/insurance/.47.jpg', '0000-00-00 00:00:00', '1'),
(34, 'b', 'upload/ID/1.jpg', 'upload/license/2.jpg', 'upload/insurance/3.jpg', '0000-00-00 00:00:00', '1'),
(35, 'a', 'upload/ID/1.jpg', 'upload/license/2.jpg', 'upload/insurance/3.jpg', '0000-00-00 00:00:00', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `mpesa_payments`
--
ALTER TABLE `mpesa_payments`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_v`);

--
-- Indexes for table `vendor_requirement`
--
ALTER TABLE `vendor_requirement`
  ADD PRIMARY KEY (`id_r`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mpesa_payments`
--
ALTER TABLE `mpesa_payments`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vendor_requirement`
--
ALTER TABLE `vendor_requirement`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
