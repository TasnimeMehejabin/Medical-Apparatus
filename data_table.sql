-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 09:49 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `product` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `courier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`product`, `name`, `phone`, `email`, `address`, `courier`) VALUES
('Thermometer', 'sad', 'asd', 'asd', 'asd', 'Sundarban Courier'),
('Thermometer', 'sad', 'asd', 'asd', 'asd', 'Sundarban Courier'),
('Thermometer', 'sad', 'asd', 'asd', 'asd', 'Sundarban Courier'),
('Thermometer', 'sad', 'asd', 'asd', 'asd', 'Sundarban Courier'),
('Thermometer', 'sad', 'asd', 'asd', 'asd', 'Sundarban Courier'),
('Thermometer', 'uu', 'uu', 'uu', 'uu', 'S.A Paribahan'),
('Thermometer', 'uu', 'uu', 'uu', 'uu', 'S.A Paribahan'),
('Thermometer', 'mehejabin', '5678', 'm@gmail.com', 'khulna', 'S.A Paribahan'),
('Thermometer', 'mehejabin', '5678', 'm@gmail.com', 'khulna', 'S.A Paribahan'),
('Thermometer', 'mehejabin', '5678', 'm@gmail.com', 'khulna', 'S.A Paribahan'),
('Thermometer', 'mehejabin', '5678', 'm@gmail.com', 'khulna', 'S.A Paribahan'),
('Thermometer', 'mehejabin', '5678', 'm@gmail.com', 'khulna', 'S.A Paribahan'),
('Thermometer', 'mehejabin', '5678', 'm@gmail.com', 'khulna', 'S.A Paribahan'),
('Thermometer', '', '', '', '', 'Sundarban Courier'),
('Thermometer', 'mim', '1234', 'rt', 'df', 'S.A Paribahan');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(20) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(300) NOT NULL,
  `doctor_name` varchar(300) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `comment_submit` varchar(20) DEFAULT NULL,
  `c_description` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `patient_name`, `doctor_name`, `rating`, `comment_submit`, `c_description`) VALUES
(10, 'a', 'b', '12', NULL, 'axcvbg'),
(11, 'nabila', 'Monir Ahamed', '12', NULL, 'very good'),
(12, 'faria', 'Sahajamal', '***', NULL, 'very good'),
(13, 'a', 'ww', '*', NULL, 'aadsd'),
(14, 'TASNIME', 'AB', '****', NULL, 'GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_name`
--

CREATE TABLE IF NOT EXISTS `doctor_name` (
  `doc_id` int(20) NOT NULL AUTO_INCREMENT,
  `doc_headline` varchar(300) NOT NULL,
  `doc_submit` varchar(100) NOT NULL,
  `doc_valuetosearch` varchar(300) NOT NULL,
  `doc_description` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doctor_name`
--

INSERT INTO `doctor_name` (`doc_id`, `doc_headline`, `doc_submit`, `doc_valuetosearch`, `doc_description`) VALUES
(1, 'MD SHARAFAT HOSSAIN ', '', '', NULL),
(2, 'S AHSAN AHMED  ', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_table`
--

CREATE TABLE IF NOT EXISTS `d_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(100) NOT NULL,
  `description` text,
  `submit` varchar(100) NOT NULL,
  `valuetosearch` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `d_table`
--

INSERT INTO `d_table` (`id`, `headline`, `description`, `submit`, `valuetosearch`) VALUES
(12, 'Napa Tablet  ', ' What is Napa?\r\nNapa Tablet is used for Fever, Headache, Ear pain, Joint pain, Cold, Toothache and other conditions. Napa Tablet may also be used for purposes not listed in this medication guide.\r\nNapa Tablet contains Paracetamol as an active ingredient.\r\nNapa Tablet works by increasing the pain threshold and increases the blood flow across the skin, heat loss and sweating.\r\nBeximco Pharma manufactures Napa Tablet. \r\n\r\n Napa Tablet Uses\r\nNapa Tablet is used for the treatment, control, prevention, & improvement of the following diseases, conditions and symptoms:\r\n\r\n    Fever\r\n    Headache\r\n    Ear pain\r\n    Joint pain\r\n    Cold\r\n    Toothache\r\n    Periods pain ', '', NULL),
(14, 'Paracetamol ', ' Fever\r\n\r\nParacetamol is used for reducing fever in people of all ages.[24] The World Health Organization (WHO) recommends that paracetamol be used to treat fever in children only if their temperature is greater than 38.5 °C (101.3 °F).[25] The efficacy of paracetamol by itself in children with fevers has been questioned[26] and a meta-analysis showed that it is less effective than ibuprofen.[27] Paracetamol does not have significant anti-inflammatory effects.\r\nPain\r\n\r\nParacetamol is used for the relief of mild to moderate pain. The use of the intravenous form for pain of sudden onset in people in the emergency department is supported by limited evidence.', '', NULL),
(15, 'Histasin Tablet  ', ' \r\nHistasin Tablet Uses\r\nHistasin Tablet is used for the treatment, control, prevention, & improvement of the following diseases, conditions and symptoms:\r\n\r\n    Running nose\r\n    Allergy symptoms\r\n    Cold\r\n    Sneezing\r\n    Itching\r\n    Watery eyes\r\n    Skin allergies\r\n    Histasin Tablet may also be used for purposes not listed here. \r\n\r\n Histasin Tablet - Side-effects\r\nThe following is a list of possible side-effects that may occur from all constituting ingredients of Histasin Tablet. This is not a comprehensive list. These side-effects are possible, but do not always occur. Some of the side-effects may be rare but serious. Consult your doctor if you observe any of the following side-effects, especially if they do not go away.\r\n\r\n    Dryness\r\n    Drowsiness\r\n    Histasin Tablet may also cause side-effects not listed here. ', '', NULL),
(16, 'Tofen Tablet  ', '  Tofen Tablet Uses\r\nTofen Tablet is used for the treatment, control, prevention, & improvement of the following diseases, conditions and symptoms:\r\n\r\n    Allergic or seasonal conjunctivitis\r\n    Itching of the eyes\r\n    Tofen Tablet may also be used for purposes not listed here. \r\n\r\n Tofen Tablet - Side-effects\r\nThe following is a list of possible side-effects that may occur from all constituting ingredients of Tofen Tablet. This is not a comprehensive list. These side-effects are possible, but do not always occur. Some of the side-effects may be rare but serious. Consult your doctor if you observe any of the following side-effects, especially if they do not go away.\r\n\r\n    Irritability\r\n    Nervousness\r\n    Eye irritation\r\n    Eye pain\r\n    Tofen Tablet may also cause side-effects not listed here. ', '', NULL),
(17, 'napaExtra ', ' asdfgbvv', '', NULL),
(18, 'asd ', ' 123', '', NULL),
(19, 'qq ', ' assdc', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `aa` varchar(50) NOT NULL,
  `bb` int(50) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `dd` int(50) NOT NULL,
  `ee` int(50) NOT NULL,
  `ff` int(50) NOT NULL,
  `gg` int(50) NOT NULL,
  `hh` varchar(50) NOT NULL,
  `ii` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`aa`, `bb`, `cc`, `dd`, `ee`, `ff`, `gg`, `hh`, `ii`) VALUES
('admin', 1234, 'O+', 20, 50, 120, 80, 'no', 'nothing'),
('Tasn', 5678, 'A+', 24, 46, 200, 90, 'no', ''),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('urmi', 12345, 'A-', 22, 60, 120, 75, 'yes', '...'),
('admin', 1234, 'O+', 20, 50, 120, 80, 'no', 'nothing'),
('Tasn', 5678, 'A+', 24, 46, 200, 90, 'no', ''),
('nabila', 123, 'A-', 20, 59, 120, 70, 'yes', ''),
('sumi', 123456, 'O+', 20, 55, 120, 80, 'yes', 'good'),
('ta', 12345, 'O+', 20, 49, 120, 80, 'no', 'no'),
('', 0, '', 0, 0, 0, 0, '', ''),
('ta', 12345, 'O+', 20, 49, 120, 80, 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `aa` varchar(50) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `dd` text NOT NULL,
  `ee` varchar(50) NOT NULL,
  `ff` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`aa`, `bb`, `cc`, `dd`, `ee`, `ff`) VALUES
('admin', 'khulna', '1234', 'female', '1234', 'admin@gmail.com'),
('Tasnim', 'Khulna', '5678', 'female', '5678', 'tas@gmail.com'),
('admin3', 'Khulna', '5678', 'female', '5678', 'ad@gmail.com'),
('admin3', 'Khulna', '5678', 'female', '5678', 'ad@gmail.com'),
('nabila', 'moylapota', '0987', 'female', '1234', 'nb@gmai.com'),
('urmi', 'fulbarigat', '12345', 'female', '12345', 'urmi@gmail.com'),
('admin', 'khulna', '1234', 'female', '1234', 'admin@gmail.com'),
('Tasnim', 'Khulna', '5678', 'female', '5678', 'tas@gmail.com'),
('admin3', 'Khulna', '5678', 'female', '5678', 'ad@gmail.com'),
('admin3', 'Khulna', '5678', 'female', '5678', 'ad@gmail.com'),
('nabila', 'moylapota', '0987', 'female', '1234', 'nb@gmai.com'),
('nabila', 'khulna', '123', 'female', '1234', 'a@gmail.com'),
('nabila', 'khulna', '123', 'female', '1234', 'a@gmail.com'),
('', 'df', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(15, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(16, 'a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(17, 'a', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(18, 'nabila', 'a@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'a', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(20, 'a', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'Mehjaben', 'a@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(22, 'admin', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(23, 'tasnime', 'tasnime@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'shivanku', 'kshivamanku@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(25, 'mim', 'mim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
