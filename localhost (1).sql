-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2013 at 11:13 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctf`
--
CREATE DATABASE `ctf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ctf`;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `marks` int(4) NOT NULL,
  `marks2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `marks`, `marks2`) VALUES
(1, 345, 333),
(2, 423, 3444),
(3, 3425, 4545),
(4, 323, 2334);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `logintime` time NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `member1` varchar(50) NOT NULL,
  `member2` varchar(50) NOT NULL,
  `phonenumber` int(13) NOT NULL,
  `q1` varchar(5) NOT NULL DEFAULT '0',
  `q2` varchar(5) NOT NULL DEFAULT '0',
  `q3` varchar(5) NOT NULL DEFAULT '0',
  `q4` varchar(5) NOT NULL DEFAULT '0',
  `q5` varchar(5) NOT NULL DEFAULT '0',
  `q6` varchar(5) NOT NULL DEFAULT '0',
  `q7` varchar(5) NOT NULL DEFAULT '0',
  `q8` varchar(5) NOT NULL DEFAULT '0',
  `q9` varchar(5) NOT NULL DEFAULT '0',
  `q10` varchar(5) NOT NULL DEFAULT '0',
  `q11` varchar(5) NOT NULL DEFAULT '0',
  `q12` varchar(5) NOT NULL DEFAULT '0',
  `q13` varchar(5) NOT NULL DEFAULT '0',
  `q14` varchar(5) NOT NULL DEFAULT '0',
  `q15` varchar(5) NOT NULL DEFAULT '0',
  `q16` varchar(5) NOT NULL DEFAULT '0',
  `q17` varchar(5) NOT NULL DEFAULT '0',
  `q18` varchar(5) NOT NULL DEFAULT '0',
  `q19` varchar(5) NOT NULL DEFAULT '0',
  `q20` varchar(5) NOT NULL DEFAULT '0',
  `q21` varchar(5) NOT NULL DEFAULT '0',
  `q22` varchar(5) NOT NULL DEFAULT '0',
  `q23` varchar(5) NOT NULL DEFAULT '0',
  `q24` varchar(5) NOT NULL DEFAULT '0',
  `q25` varchar(5) NOT NULL DEFAULT '0',
  `q26` varchar(5) NOT NULL DEFAULT '0',
  `q27` varchar(5) NOT NULL DEFAULT '0',
  `q28` varchar(5) NOT NULL DEFAULT '0',
  `q29` varchar(5) NOT NULL DEFAULT '0',
  `q30` int(3) NOT NULL DEFAULT '0',
  `q31` int(3) NOT NULL DEFAULT '0',
  `q32` int(3) NOT NULL DEFAULT '0',
  `q33` int(3) NOT NULL DEFAULT '0',
  `qno` int(3) NOT NULL DEFAULT '0',
  `skipcount` int(2) NOT NULL DEFAULT '0',
  `skipcount1` int(3) NOT NULL DEFAULT '0',
  `skipcount2` int(3) NOT NULL DEFAULT '0',
  `skipcount3` int(3) NOT NULL DEFAULT '0',
  `skipcount4` int(3) NOT NULL DEFAULT '0',
  `level0score` int(3) NOT NULL DEFAULT '0',
  `level1score` int(3) NOT NULL DEFAULT '0',
  `level2score` int(3) NOT NULL DEFAULT '0',
  `level3score` int(3) NOT NULL DEFAULT '0',
  `level4score` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `logintime`, `teamname`, `password`, `member1`, `member2`, `phonenumber`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `q32`, `q33`, `qno`, `skipcount`, `skipcount1`, `skipcount2`, `skipcount3`, `skipcount4`, `level0score`, `level1score`, `level2score`, `level3score`, `level4score`) VALUES
(1, '07:48:00', 'test1', '151b21ec5773a54dc76ea247ebb10fb2c505e235', 'navneet', 'navneettest', 232534534, '7:55 ', '7:57 ', '8:04 ', '8:04 ', '0', '0', '8:23 ', '8:30 ', '8:46 ', '8:51 ', '9:06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 3, 0, 0, 0, 0, 13, 0, 0, 0, 0),
(2, '09:10:00', 'test2', 'baec485a5c517708378233ea257a7675121b2c2f', 'test2', 'tessd', 32323434, '9:10 ', '9:10 ', '9:12 ', '0', '9:14 ', '0', '9:17 ', '9:17 ', '0', '0', '0', '0', '0', '6:55 ', '6:55 ', '0', '0', '0', '0', '0', '0', '10:02', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 21, 3, 2, 2, 0, 0, 6, 1, 22, 0, 0),
(3, '09:51:00', 'test3', 'a699ec1046780d22408d88e3974a32f9801cf6f5', 'ewwevw', 'dsvsddsv', 2147483647, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '10:07:00', 'testin', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'lasiv', 'attad', 235467, '10:08', '0', '0', '10:09', '10:12', '0', '10:20', '10:20', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 9, 3, 0, 0, 0, 0, 5, 0, 0, 0, 0),
(5, '10:07:00', 'hack', 'daccfdf09d68692cbbb36f8d6a956a521db95ee6', 'rishant', 'testing', 98, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '01:31:00', '1', '364321e78f46562a65a902156e03c322badbcf48', 'Akash Goel', '1', 1, '1:31 ', '1:31 ', '1:32 ', '1:32 ', '1:44 ', '1:46 ', '0', '1:48 ', '1:52 ', '1:55 ', '2:04 ', '0', '0', '2:20 ', '2:25 ', '2:28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 21, 1, 1, 0, 0, 0, 10, 2, 0, 0, 0),
(10, '01:11:00', 'a', '38524bdc3d1caac0b3e139003ea0954e15ad9648', 'Akash Goel', 'a', 0, '1:11 ', '1:12 ', '1:13 ', '1:14 ', '1:17 ', '1:19 ', '1:24 ', '0', '0', '0', '1:28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 3, 2, 0, 0, 0, 8, 0, 0, 0, 0),
(9, '01:06:00', 'Akash', '38524bdc3d1caac0b3e139003ea0954e15ad9648', 'Akash Goel', 'a', 0, '1:06 ', '1:08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 5, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0),
(12, '03:36:00', 'Krishna', '50db3ace9c16b68ccc14cdbb4a873583a2dd7c7a', 'Arvind', 'Rao', 368537393, '3:36 ', '3:37 ', '3:38 ', '3:38 ', '0', '3:44 ', '3:45 ', '3:46 ', '3:51 ', '3:54 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 16, 2, 1, 0, 0, 0, 9, 0, 0, 0, 0),
(13, '10:22:00', 'godplease', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'red', 'sdsdv', 123131313, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '10:55', '10:56', '0', '0', '0', '0', '11:18', '0', 0, 0, 0, 0, 29, 0, 0, 2, 0, 0, 0, 1, 1, 0, 0),
(14, '12:01:00', 'b', '32afd256590a7fcca5593f63eb51b79d10ac1446', 'b', 'b', 0, '12:01', '12:01', '12:02', '12:02', '0', '0', '12:04', '12:04', '0', '0', '12:07', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 3, 0, 0, 0, 0, 8, 0, 0, 0, 0),
(15, '12:12:00', 'c', '31c05b56c2b50dd390206f835f4838412b665435', 'c', 'c', 0, '12:13', '12:13', '12:14', '12:14', '0', '0', '0', '12:16', '12:16', '12:17', '12:20', '0', '0', '12:26', '12:26', '0', '0', '0', '0', '0', '12:30', '0', '12:38', '12:51', '12:55', '0', '1:06 ', '1:07 ', '0', 0, 0, 0, 0, 29, 3, 1, 2, 0, 0, 9, 1, 1, 0, 0),
(16, '12:52:00', '123456', '50db3ace9c16b68ccc14cdbb4a873583a2dd7c7a', 'something', 'anything', 987654321, '12:54', '12:54', '12:55', '12:56', '0', '12:58', '1:00 ', '1:08 ', '1:12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 10, 1, 0, 0, 0, 0, 8, 0, 0, 0, 0),
(17, '01:13:00', 'final', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'dvdssd', 'sdvsd', 112423221, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1:39 ', '0', '1:19 ', '0', '0', '0', '0', '0', 2, 0, 3, 0, 32, 0, 0, 2, 0, 0, 7, 2, 3, 10, 0),
(18, '04:40:00', 'abc', '50db3ace9c16b68ccc14cdbb4a873583a2dd7c7a', 'qwdrr', 'sfgrfd', 5787, '4:40 ', '4:41 ', '4:42 ', '4:42 ', '4:47 ', '0', '4:48 ', '4:49 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 3, 0, 0, 0, 0, 7, 0, 0, 0, 0),
(19, '04:53:00', 'qwerty', '50db3ace9c16b68ccc14cdbb4a873583a2dd7c7a', 'fsaklfnsd;', 'xvcbjkszncv', 76980, '0', '0', '0', '4:54 ', '4:57 ', '4:58 ', '4:58 ', '4:58 ', '4:59 ', '5:00 ', '5:01 ', '0', '0', '5:02 ', '5:03 ', '5:04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 22, 3, 1, 0, 0, 0, 8, 2, 0, 0, 0),
(20, '05:13:00', '12', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'dfdfb', 'dfbdf', 453434, '5:13 ', '0', '0', '0', '5:15 ', '5:19 ', '5:19 ', '5:20 ', '5:22 ', '5:23 ', '5:24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 3, 0, 0, 0, 0, 8, 0, 0, 0, 0),
(21, '05:30:00', '3434', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'dfbedbf', 'dfbdfbdfbdf', 221234121, '5:43 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(22, '05:31:00', 'we', 'b05e9172804763aca4e98dd4485d1c3ab3bade30', 'dhdf', 'dfhdffhdhd', 123, '5:33 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(23, '05:34:00', 'Shikanji', '3b33e3c9d4af1171deab08bf507e8c1073fd42a8', 'Samvit', 'Neeraj', 2147483647, '5:46 ', '5:52 ', '5:53 ', '5:55 ', '5:57 ', '6:00 ', '6:08 ', '6:10 ', '0', '0', '6:48 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 1, 0, 0, 0, 0, 9, 0, 0, 0, 0),
(24, '05:34:00', 'tejinder', 'f3441709bd6343fb31676cc9b387bb626fda1bad', 'Tadrish', 'Shikhar', 2147483647, '5:38 ', '5:40 ', '5:50 ', '5:52 ', '0', '6:14 ', '6:15 ', '6:16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 3, 0, 0, 0, 0, 7, 0, 0, 0, 0),
(25, '05:34:00', 'coders', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'Visal Datta R', 'Sai Krishna', 2147483647, '5:35 ', '5:36 ', '5:48 ', '5:51 ', '5:53 ', '5:55 ', '6:07 ', '6:07 ', '6:13 ', '0', '6:39 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 1, 0, 0, 0, 0, 10, 0, 0, 0, 0),
(26, '05:34:00', 'Whitespace', 'a579e34f68e7bf0569b6b0275bc1801214c5836f', 'Akshay Aurora', 'Amanpreet Singh', 2147483647, '5:48 ', '5:55 ', '5:56 ', '5:57 ', '5:58 ', '6:02 ', '6:09 ', '6:10 ', '0', '6:32 ', '6:34 ', '0', '0', '6:35 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 10, 1, 0, 0, 0),
(27, '05:34:00', '#ash', '0c47af651139e7ba807bbff700128aceca26b4b0', 'Prasanth G', 'Pavan Kotesh', 2147483647, '5:41 ', '5:44 ', '5:45 ', '5:45 ', '5:47 ', '5:48 ', '5:53 ', '5:54 ', '6:11 ', '0', '6:36 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 1, 0, 0, 0, 0, 10, 0, 0, 0, 0),
(28, '05:34:00', 'Psuedo Coders', '42ba01c1c114967c5fc78fc543747971f5cbe8ab', 'Hasil Sharma', 'Abhinav Gaur', 2147483647, '5:43 ', '5:54 ', '5:54 ', '5:55 ', '6:03 ', '6:13 ', '0', '6:40 ', '0', '0', '7:00 ', '0', '0', '7:06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 2, 0, 0, 0, 0, 8, 1, 0, 0, 0),
(29, '05:34:00', 'masters', 'e49ea27bab3209a82e60dfd28a2127be3575a978', 'jashan goyal', 'jyotirmaya patra', 2147483647, '5:43 ', '6:00 ', '6:09 ', '6:09 ', '6:23 ', '6:37 ', '6:39 ', '6:40 ', '6:51 ', '6:53 ', '6:57 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 0, 1, 0, 0, 0, 11, 0, 0, 0, 0),
(30, '05:34:00', 'rAndi c0der', '510435c9311c14bfb38d8aa6c58c8a1a386e21e3', 'Aditya Raisinghani', 'Utkarsh Verma', 2147483647, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, '05:35:00', 'Hungover', '0885fbda2fdf63b0f7c4b13ac06463b7d5ff7b5a', 'Karthik', 'Sudhanshu Mittal', 2147483647, '0', '5:49 ', '5:52 ', '5:53 ', '6:01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 6, 1, 0, 0, 0, 0, 4, 0, 0, 0, 0),
(32, '05:35:00', 'asdfghjkl', 'a6d61cdff0b39de835811230e3dbc3aad78b7592', 'saisri', 'sai krishna', 2147483647, '5:37 ', '5:38 ', '5:50 ', '5:57 ', '6:00 ', '0', '6:10 ', '6:15 ', '0', '0', '6:41 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 14, 2, 0, 0, 0, 0, 8, 0, 0, 0, 0),
(33, '05:35:00', 'flag', '53649f6e45138ef119c955d04bf042562f6e2946', 'pooja garg', 'arnav jain', 2147483647, '5:44 ', '6:03 ', '6:05 ', '6:06 ', '6:26 ', '6:31 ', '6:33 ', '6:34 ', '0', '0', '7:04 ', '0', '0', '7:05 ', '7:06 ', '7:13 ', '7:14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 22, 1, 1, 0, 0, 0, 9, 1, 0, 0, 0),
(34, '05:35:00', 'BlueNotebook', '819d1423ea11877dc58f2d166dd9184c671d094d', 'Siddhant Jain', 'Sowmya Munukutla', 2147483647, '5:46 ', '5:59 ', '6:02 ', '6:08 ', '6:24 ', '6:31 ', '6:39 ', '6:42 ', '0', '0', '0', '0', '0', '7:14 ', '7:23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 16, 2, 0, 0, 0, 0, 8, 1, 0, 0, 0),
(35, '05:35:00', 'Akashvani', 'f80720f75ac31e4a46434b9f3ddd0294f306f202', 'Yash Agarwal', 'Rishabh Dixit', 2147483647, '6:03 ', '6:04 ', '6:05 ', '6:15 ', '6:29 ', '6:32 ', '6:41 ', '6:42 ', '6:54 ', '0', '6:55 ', '0', '0', '6:57 ', '6:57 ', '0', '7:12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 23, 1, 1, 1, 0, 0, 10, 1, 0, 0, 0),
(36, '05:35:00', 'Hungover_Not', '03639ae430d2c732e6e65098326b8e1a719c64a2', 'Nithin George', 'Yatharth Tyagi', 2147483647, '0', '6:00 ', '6:01 ', '6:02 ', '6:06 ', '6:13 ', '6:15 ', '6:17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 3, 1, 0, 0, 0, 7, 0, 0, 0, 0),
(37, '05:36:00', 'monalisha', '8bcb2453fa71ba0ee3867abb2cdfe3a29c2d7ff4', 'monalisha dash', 'rishant agarwal', 2147483647, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, '05:38:00', 'CodeZero', 'bfcbcf8cfaeff08715aa0b6933c96578d89c25c4', 'Kartik goyal', 'Rishab Kalra', 2147483647, '5:44 ', '5:54 ', '6:01 ', '6:04 ', '0', '6:42 ', '6:48 ', '6:51 ', '7:05 ', '0', '7:13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 2, 1, 0, 0, 0, 9, 0, 0, 0, 0),
(39, '05:38:00', 'THE AVENGERS', '96fef85642c3b79e1d107681c5e6983f912abcde', 'Ambuj', 'Tushar', 2147483647, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, '05:43:00', 'ghostrider', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'Shashi kanth', 'Vaibhav', 2147483647, '5:43 ', '5:44 ', '5:49 ', '5:56 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 7, 2, 0, 0, 0, 0, 4, 0, 0, 0, 0),
(41, '05:44:00', 'randi_coder', '510435c9311c14bfb38d8aa6c58c8a1a386e21e3', 'Aditya', 'Utkarsh', 2147483647, '5:47 ', '5:48 ', '5:48 ', '5:50 ', '5:57 ', '6:01 ', '0', '6:22 ', '6:39 ', '0', '6:48 ', '0', '0', '7:03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 2, 0, 0, 0, 0, 9, 1, 0, 0, 0),
(42, '05:45:00', 'couple', '641cad6c1ba77e8c6cafe0122a940e2c6775e899', 'harsh', 'kapil', 2147483647, '5:46 ', '5:46 ', '5:53 ', '5:56 ', '6:02 ', '6:23 ', '6:23 ', '6:24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 2, 1, 0, 0, 0, 8, 0, 0, 0, 0),
(43, '05:49:00', 'lazy', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'Rohan', 'Rishant', 80587952, '5:50 ', '5:50 ', '5:51 ', '5:57 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 6, 1, 0, 0, 0, 0, 4, 0, 0, 0, 0),
(44, '05:51:00', 'Aravind', '1ff7a4bd9d0d04e47e0690307dd7939cc6c87cf8', 'monalisha', 'Aravind', 2147483647, '5:51 ', '5:52 ', '5:52 ', '5:52 ', '5:53 ', '5:54 ', '5:55 ', '5:55 ', '5:55 ', '6:13 ', '6:48 ', '0', '0', '6:57 ', '7:07 ', '7:08 ', '7:09 ', '0', '0', '0', '7:12 ', '7:17', '7:19', '0', '720', '7:21', '', '0', '0', 0, 0, 0, 0, 22, 0, 0, 0, 0, 0, 11, 5, 7, 0, 0),
(45, '06:02:00', 'war', '00002a91ca47c11c855f6bb9ede9018850a6ef8b', 'Rajat Gupta', 'Rahul Kapoor', 2147483647, '6:14 ', '6:17 ', '6:20 ', '6:23 ', '6:37 ', '6:41 ', '6:45 ', '6:46 ', '7:10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 11, 1, 0, 0, 0, 0, 10, 0, 0, 0, 0),
(46, '06:03:00', 'LongtimeABD No C', '63721665d2515ba1e685adecf8988621326433ee', 'Vaibhav Marya', 'Shubham Arora', 2147483647, '6:14 ', '6:17 ', '6:21 ', '6:22 ', '0', '6:43 ', '6:45 ', '6:47 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 9, 1, 0, 0, 0, 0, 7, 0, 0, 0, 0),
(47, '06:08:00', '', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '', '', 0, '0', '6:13 ', '6:13 ', '6:13 ', '6:14 ', '6:17 ', '6:18 ', '6:21 ', '0', '0', '6:48 ', '0', '0', '6:51 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 2, 0, 0, 0, 0, 8, 1, 0, 0, 0),
(48, '06:10:00', 'ayu', 'b916493c1cb8521b4c150a0bf714ee77c2085c1d', 'Ayush Khaitan', 'Sonali Singh', 2147483647, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, '06:11:00', 'blitz', '59934d50204616d6d86fca77292e8835ef47f09a', 'raghav', 'devam', 2147483647, '6:17 ', '6:18 ', '6:20 ', '6:25 ', '0', '0', '0', '7:02 ', '7:12 ', '7:18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 11, 3, 0, 0, 0, 0, 7, 0, 0, 0, 0),
(50, '06:15:00', 'Ethics', 'c4016d450edeee8c3d7425f42c033c5874d3b951', 'Prakhar', 'asdf', 2147483647, '6:18 ', '6:23 ', '0', '6:29 ', '6:44 ', '0', '6:47 ', '6:49 ', '0', '0', '7:13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 3, 1, 0, 0, 0, 7, 0, 0, 0, 0),
(51, '06:18:00', 'Go get it', '82825c90ae0b39d8f92121c41cb4d78738418470', 'Sarwesh Shah', 'Abhilash Shrivastav', 2147483647, '6:19 ', '6:19 ', '6:21 ', '6:21 ', '0', '6:55 ', '6:57 ', '6:58 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 9, 1, 0, 0, 0, 0, 7, 0, 0, 0, 0),
(52, '06:51:00', '123', 'e79a8581c65a2a45e5162f01187db0842c0dbc4c', 'sdsdsdvsd', 'sdvsdsdsdv', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, '06:59:00', 'tejindar', '39b839a1086e42ee2a2599d07b6171af9c40e65e', 'Tadrish', 'Shikhar', 2147483647, '7:01 ', '7:02 ', '7:02 ', '7:02 ', '7:07 ', '7:12 ', '7:12 ', '7:12 ', '7:14 ', '0', '7:17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 15, 3, 1, 0, 0, 0, 10, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
