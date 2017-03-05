-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 09:29 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantryisland`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galleryimg`
--

CREATE TABLE `tbl_galleryimg` (
  `galleryimg_id` smallint(5) UNSIGNED NOT NULL,
  `galleryimg_path` varchar(75) NOT NULL DEFAULT 'defaultlarge',
  `galleryimg_title` varchar(50) NOT NULL DEFAULT 'Untitled',
  `galleryimg_desc` varchar(140) NOT NULL DEFAULT 'No description available.'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galleryimg`
--

INSERT INTO `tbl_galleryimg` (`galleryimg_id`, `galleryimg_path`, `galleryimg_title`, `galleryimg_desc`) VALUES
(1, 'chantryisland1', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(2, 'chantryisland2', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(3, 'chantryisland3', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(4, 'chantryisland4', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(5, 'chantryisland5', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(6, 'chantryisland6', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(7, 'chantryisland7', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(8, 'chantryisland8', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(9, 'chantryisland9', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(10, 'chantryisland10', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(11, 'chantryisland11', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(12, 'chantryisland12', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(13, 'chantryisland13', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(14, 'chantryisland14', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(15, 'chantryisland15', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(16, 'chantryisland16', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(17, 'chantryisland17', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(18, 'chantryisland18', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(19, 'chantryisland19', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(20, 'chantryisland20', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(21, 'chantryisland21', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(22, 'chantryisland22', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(23, 'chantryisland23', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(24, 'chantryisland24', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(25, 'chantryisland25', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(26, 'chantryisland26', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(27, 'chantryisland27', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(28, 'chantryisland28', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(29, 'chantryisland29', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(30, 'chantryisland30', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(31, 'chantryisland31', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(32, 'chantryisland31', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(33, 'chantryisland32', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(34, 'chantryisland33', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(35, 'chantryisland34', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(36, 'chantryisland35', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(37, 'chantryisland36', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(38, 'chantryisland37', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(39, 'chantryisland38', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(40, 'chantryisland39', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(41, 'chantryisland40', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(42, 'chantryisland41', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(43, 'chantryisland42', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(44, 'chantryisland43', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(45, 'chantryisland44', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(46, 'chantryisland45', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(47, 'chantryisland46', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(48, 'chantryisland47', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(49, 'chantryisland48', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.'),
(50, 'chantryisland49', 'Your Gallery', 'This is an early version of the AJAX gallery. Still needs some cosmetic fixes but is mostly functional.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_galleryimg`
--
ALTER TABLE `tbl_galleryimg`
  ADD PRIMARY KEY (`galleryimg_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_galleryimg`
--
ALTER TABLE `tbl_galleryimg`
  MODIFY `galleryimg_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
