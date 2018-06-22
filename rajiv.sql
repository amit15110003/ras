-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2018 at 02:46 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajiv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'amit', '202cb962ac59075b964b07152d234b70'),
(3, 'admin@123', '202cb962ac59075b964b07152d234b70'),
(4, 'admin@456', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_mail` varchar(200) NOT NULL,
  `a_username` varchar(200) NOT NULL,
  `a_pass` varchar(200) NOT NULL,
  `a_contact` bigint(200) NOT NULL,
  `a_design` varchar(50) NOT NULL,
  `a_lastseen` timestamp NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_mail`, `a_username`, `a_pass`, `a_contact`, `a_design`, `a_lastseen`, `status`) VALUES
(1, 'amitanand.kvj.2@gmail.com', 'Amit Anand', '202cb962ac59075b964b07152d234b70', 8979997072, 'Admin', '2018-06-22 07:05:07', 1),
(2, 'amitanand.kvj.2@gmail.com', 'admin', '123', 0, 'Admin', '2018-06-22 07:05:07', 1),
(3, '', 'amitanand.kvj.2@gmail.com', '123', 0, 'Admin', '2018-06-22 07:05:07', 1),
(4, 'amitanand.kvj.2@gmail.com', 'amitanand.kvj.2@gmail.com', '123', 0, 'Admin', '2018-06-22 07:05:07', 1),
(5, 'amitanand.kvj.2@gmail.com', 'amitanand.kvj.2@gmail.com', '123', 0, 'Admin', '2018-06-22 07:05:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

DROP TABLE IF EXISTS `batch`;
CREATE TABLE IF NOT EXISTS `batch` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_desc` text NOT NULL,
  `b_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`b_id`, `b_name`, `b_desc`, `b_status`) VALUES
(0, 'RAJIV RANJAN', 'sd', 1),
(0, 'alpha', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `batchstu`
--

DROP TABLE IF EXISTS `batchstu`;
CREATE TABLE IF NOT EXISTS `batchstu` (
  `bstu_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `u_id` text NOT NULL,
  PRIMARY KEY (`bstu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `r_id` int(10) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(50) NOT NULL,
  `r_image` varchar(200) NOT NULL,
  `r_desc` text NOT NULL,
  `r_type` int(2) NOT NULL,
  `r_status` int(2) NOT NULL,
  `r_year` int(4) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`r_id`, `r_name`, `r_image`, `r_desc`, `r_type`, `r_status`, `r_year`) VALUES
(1, 'amit', '1529310957image.png', 'chem 95', 0, 1, 0),
(2, 'amit', '1529311095image.png', 'chem 95', 1, 1, 2005),
(3, 'ravi kr ranjan', '1529671113image.jpg', 'chem 95 cghd yerggfrsr sdfgfg', 1, 1, 2014),
(4, 't', '1529671129image.jpg', 't', 1, 1, 2005);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL,
  `t_fmarks` int(11) NOT NULL,
  `t_sub` varchar(50) NOT NULL,
  `t_date` date NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(200) NOT NULL,
  `u_lname` varchar(200) NOT NULL,
  `u_card` varchar(200) NOT NULL,
  `u_mail` varchar(250) NOT NULL,
  `u_contact` bigint(20) NOT NULL,
  `u_pcontact` bigint(200) NOT NULL,
  `u_add` text NOT NULL,
  `u_visit` timestamp NOT NULL,
  `u_visitno` int(11) NOT NULL,
  `u_pass` varchar(200) NOT NULL,
  `u_class` int(11) NOT NULL,
  `u_batch` text NOT NULL,
  `u_status` int(11) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_card` (`u_card`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_lname`, `u_card`, `u_mail`, `u_contact`, `u_pcontact`, `u_add`, `u_visit`, `u_visitno`, `u_pass`, `u_class`, `u_batch`, `u_status`) VALUES
(5, '', '', '12233', '', 0, 8979997072, '', '2018-06-19 18:30:00', 0, '', 8, '0', 1),
(6, 'amit anand', '', '8161949574', '', 8979997072, 8979997072, '', '2018-06-18 18:30:00', 0, '', 8, '', 1),
(7, 'SNEHA ', '', '1218001', '', 7870718992, 7870718992, '', '2018-06-19 18:30:00', 0, '', 12, '', 1),
(8, 'MANISHA ', '', '1218002', '', 9771447584, 9771447584, '', '2018-06-12 18:30:00', 0, '', 12, '', 1),
(9, 'SONALI ', '', '1218003', '', 7903529232, 7903529232, '', '2018-06-18 18:30:00', 0, '', 12, '', 1),
(10, 'ANJALI BHARTI', '', '1218004', 'babyanjali012@gmail.com', 7488775815, 7488775815, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(11, 'ANSHU KUMARI', '', '1218005', 'smileanshu5s@gmail.com', 9934749003, 9934749003, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(12, 'KANAK LATA ', '', '1218006', 'kanaklata8809@gmail.com', 8809850157, 8809850157, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(13, 'ADYA STUDI', '', '1218007', '', 9934223242, 9934223242, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(14, 'SAKSHI GUPTA', '', '1218008', '', 7319961947, 7319961947, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(15, 'KUSHAL SUMAN', '', '1218009', 'kushalsuman123@gmail.com', 9122767601, 9122767601, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(16, 'PRAKHAR PRAKASH', '', '1218010', 'prakharprakash894@gmail.com', 8434609004, 8434609004, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(17, 'VIKAS TUDU', '', '1218011', 'vikastudu1@gmail.com', 8210355550, 8210355550, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(18, 'SOURAV SENROY', '', '1218012', 'souravsenroy17@gmail.com', 8789105437, 8789105437, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(19, 'SAMARTH RAJ ', '', '1218013', 'samarthraj081201@gmail.com', 7782963676, 7782963676, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(20, 'AKASH UMANG', '', '1218014', 'akashumang5555@gmail.com', 9708989746, 9708989746, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(21, 'KUNDAN KUMAR', '', '1218015', 'niketraj00035k@gmail.com', 7870487171, 7870487171, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(22, 'SAMIR MANDAL', '', '1218016', 'samirjmp25@gmail.com', 8340453223, 8340453223, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(23, 'NIKHIL KUMAR SINGH', '', '1218017', 'n12nikhilkumar@gmail.com', 7739168024, 7739168024, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(24, 'PRINCE KUMAR', '', '1218018', 'princekumar6200327239@gmail.com', 6200327239, 6200327239, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(25, 'DEEPAM KUAMR', '', '1218019', 'deepamkumar17@gmail.com', 8210632077, 8210632077, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(26, 'ANKESH KUMAR', '', '1218020', 'ankesh751@gmail.com', 9006069120, 9006069120, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(27, 'PRIYANSH KUAMR', '', '1218021', 'pk717@gmail.com', 7463042268, 7463042268, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(28, 'ABHIJEET KUMAR', '', '1218022', '', 8864085539, 8864085539, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(29, 'SHIVAM SNEHI', '', '1218023', 'shivamstark129@gmail.com', 9113709513, 9113709513, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(30, 'HARSH KUMAR', '', '1218024', '', 9470817772, 9470817772, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(31, 'ABHISHEK KUMAR', '', '1218025', '', 7643088805, 7643088805, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(32, 'NIRANJAN KUMAR', '', '1218026', '', 8541968168, 8541968168, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(33, 'ANKIT KUAMR', '', '1218027', '', 9801448813, 9801448813, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(34, 'RAVI KUMAR', '', '1218028', 'mahimitthu05111@gmail.com', 9931169591, 9931169591, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(35, 'ANURAG KUAMR ', '', '1218029', 'anurag2209s@gmail.com', 9123267592, 9123267592, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(36, 'TEJESHWA ANAND', '', '1218030', 'tejeshwanov25@gmail.com', 8651669398, 8651669398, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(37, 'RAHUL KUMAR RANJAN', '', '1218031', 'kjrahul21@gmail.com', 7759952394, 7759952394, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(38, 'VAISHNAVI ', '', '1218032', '', 7301711304, 7301711304, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(39, 'PRIYANKA SINHA', '', '1218033', '', 6200588960, 6200588960, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(40, 'RAJNANDANI  KUMARI', '', '1218034', '', 9304189490, 9304189490, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(41, 'SHREYA ', '', '1218035', '', 6280130097, 6280130097, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(42, 'VIJAY SHANKAR KUMAR', '', '1218036', '', 7654394063, 7654394063, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(43, 'AASHISH KUMAR', '', '1218037', '', 7050454170, 7050454170, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(44, 'ANIKET RAJ', '', '1218038', '', 9097980208, 9097980208, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(45, 'GOURAV GULZAR', '', '1218039', '', 8434946775, 8434946775, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(46, 'PRABHASH KUMAR', '', '1218040', '', 9113378964, 9113378964, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(47, 'ADITYA KUMAR', '', '1218041', '', 7361863599, 7361863599, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(48, 'OM KUMAR', '', '1218042', '', 7564845488, 7564845488, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(49, 'PRATHAM PANKAJ ', '', '1218043', '', 9065284899, 9065284899, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(50, 'RISHAV KUMAR', '', '1218044', '', 9801700712, 9801700712, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(51, 'NISHANT KUMAR', '', '1218045', '', 9006162893, 9006162893, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(52, 'PRASHANT KUMAR', '', '1218046', '', 8207598138, 8207598138, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(53, 'AMIT CHOURASIA', '', '1218047', '', 8789991320, 8789991320, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(54, 'RAKESH KUMAR', '', '1218048', '', 7808980436, 7808980436, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(55, 'ANAND KUMAR', '', '1218049', '', 8083429216, 8083429216, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(56, 'ASHOK KUMAR', '', '1218050', '', 7479454834, 7479454834, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(57, 'KUNDAN KUMAR', '', '1218051', '', 8709695676, 8709695676, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(58, 'SUMIT KUMAR', '', '1218052', '', 8540908061, 8540908061, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(59, 'MOHIT KUMAR', '', '1218053', '', 9123226265, 9123226265, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(60, '', '', '1118001', '', 9801569617, 9801569617, '', '0000-00-00 00:00:00', 0, '', 11, '0', 1),
(61, 'ANJALI KUMARI', '', '1118002', '', 8809133010, 8809133010, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(62, 'ANITA KUMARI', '', '1118003', '', 9801180776, 9801180776, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(63, 'TULIKA ', '', '1118004', '', 8873287899, 8873287899, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(64, 'AKANKSHA KIRAN', '', '1118005', '', 9507032884, 9507032884, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(65, 'ANUPAMA ', '', '1118006', '', 8709978331, 8709978331, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(66, 'RAHUL KUMAR', '', '1118007', '', 8406826822, 8406826822, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(67, 'BHUPENDRA KUMAR', '', '1118008', '', 9534782366, 9534782366, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(68, 'AKASH RANJAN', '', '1118009', '', 6202940672, 6202940672, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(69, 'PRIYANSHU DEEP', '', '1118010', '', 8789037305, 8789037305, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(70, 'ANIKET KUMAR TUDU', '', '1118011', '', 7634924942, 7634924942, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(71, 'ABHILASH KUMAR RANJAN', '', '1118012', '', 8651632266, 8651632266, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(72, 'ADITYA AKASH ', '', '1118013', '', 8709571584, 8709571584, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(73, 'KISHAN KUMAR', '', '1118014', '', 9234916015, 9234916015, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(74, 'PRAVEEN TIWARY', '', '1118015', '', 7765937831, 7765937831, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(75, 'SHEETAL KUMARI', '', '1218054', '', 7488404007, 7488404007, '', '0000-00-00 00:00:00', 0, '', 12, '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
