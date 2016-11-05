-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2016 at 06:07 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tcsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientdetail`
--

CREATE TABLE IF NOT EXISTS `patientdetail` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `patientdetail`
--


-- --------------------------------------------------------

--
-- Table structure for table `patientdoctordetail`
--

CREATE TABLE IF NOT EXISTS `patientdoctordetail` (
  `patient_id` int(11) NOT NULL,
  `patient_dname` varchar(50) NOT NULL,
  `patient_demail` varchar(100) NOT NULL,
  `patient_rcontact_number` varchar(15) NOT NULL,
  `patient_hospital_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdoctordetail`
--


-- --------------------------------------------------------

--
-- Table structure for table `patientmedicaldetail`
--

CREATE TABLE IF NOT EXISTS `patientmedicaldetail` (
  `patient_id` int(11) NOT NULL,
  `smoke` varchar(5) NOT NULL,
  `bp` varchar(5) NOT NULL,
  `heart_issues` varchar(5) NOT NULL,
  `diabetes` varchar(5) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientmedicaldetail`
--


-- --------------------------------------------------------

--
-- Table structure for table `patientmonitoring`
--

CREATE TABLE IF NOT EXISTS `patientmonitoring` (
  `patient_id` int(11) NOT NULL,
  `request_DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patient_temp` varchar(50) NOT NULL,
  `patient_bp` varchar(50) NOT NULL,
  `patient_heartrate` varchar(50) NOT NULL,
  `patient_pulseoximeter` varchar(50) NOT NULL,
  `patient_bloodglucose` varchar(50) NOT NULL,
  PRIMARY KEY (`patient_id`,`request_DateTime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientmonitoring`
--


-- --------------------------------------------------------

--
-- Table structure for table `patientrelativedetail`
--

CREATE TABLE IF NOT EXISTS `patientrelativedetail` (
  `patient_id` int(11) NOT NULL,
  `patient_rname` varchar(50) NOT NULL,
  `patient_rcontact_number` varchar(15) NOT NULL,
  `patient_relationship` varchar(50) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientrelativedetail`
--

