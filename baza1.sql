-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2015 at 10:43 PM
-- Server version: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baza1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE IF NOT EXISTS `admin_menu` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `name`, `href`) VALUES
(1, 'Home', 'index.php'),
(2, 'About', 'about.php'),
(3, 'Contact', 'contact.php'),
(4, 'Think Green', ''),
(5, 'Sign in / Sign up', 'signup.php'),
(6, 'Admin panel', 'dash.php'),
(7, 'Log out', 'logout.php');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sub_menu`
--

CREATE TABLE IF NOT EXISTS `admin_sub_menu` (
`id` int(11) NOT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_sub_menu`
--

INSERT INTO `admin_sub_menu` (`id`, `sub_name`, `href`, `cat_id`) VALUES
(1, 'Sustainable tourism', 'susTourism.php', 4),
(2, 'Green traveler', 'green.php', 4);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
`id_korisnik` int(5) NOT NULL,
  `korisnicko_ime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id_korisnik`, `korisnicko_ime`, `lozinka`, `email`) VALUES
(1, 'pera', 'd8795f0d07280328f80e59b1e8414c49', 'pera@gmail.com'),
(2, 'mika', '07af613eea059030daaed3bde1fd1ce7', 'mika@gmail.com'),
(23, 'maja', '0cc45c9b2fc35c72a5fae9a682d630e3', 'maja@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik_uloga`
--

CREATE TABLE IF NOT EXISTS `korisnik_uloga` (
  `id_uloga` int(5) NOT NULL DEFAULT '1',
  `id_korisnik` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik_uloga`
--

INSERT INTO `korisnik_uloga` (`id_uloga`, `id_korisnik`) VALUES
(1, 2),
(2, 1),
(0, 18),
(1, 19),
(1, 21),
(2, 22),
(1, 23),
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_menu`
--

CREATE TABLE IF NOT EXISTS `member_menu` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_menu`
--

INSERT INTO `member_menu` (`id`, `name`, `href`) VALUES
(1, 'Home', 'index.php'),
(2, 'About', 'about.php'),
(3, 'Contact', 'contact.php'),
(4, 'Think Green', ''),
(5, 'Sign in / Sign up', 'signup.php'),
(6, 'Profile', 'profile.php'),
(7, 'Log out', 'logout.php');

-- --------------------------------------------------------

--
-- Table structure for table `member_sub_menu`
--

CREATE TABLE IF NOT EXISTS `member_sub_menu` (
`id` int(11) NOT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_sub_menu`
--

INSERT INTO `member_sub_menu` (`id`, `sub_name`, `href`, `cat_id`) VALUES
(1, 'Sustainable tourism', 'susTourism.php', 4),
(2, 'Green traveler', 'green.php', 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `href`) VALUES
(1, 'Home', 'index.php'),
(2, 'About', 'about.php'),
(3, 'Contact', 'contact.php'),
(4, 'Think Green', ''),
(5, 'Sign up / Sign in', 'signup.php');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
`id` int(11) NOT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `sub_name`, `href`, `cat_id`) VALUES
(1, 'Sustainable tourism', 'susTourism.php', 4),
(2, 'Green traveler', 'green.php', 4);

-- --------------------------------------------------------

--
-- Table structure for table `uloge`
--

CREATE TABLE IF NOT EXISTS `uloge` (
`id_uloga` int(5) NOT NULL,
  `naziv_uloge` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloge`
--

INSERT INTO `uloge` (`id_uloga`, `naziv_uloge`) VALUES
(1, 'admin'),
(2, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
 ADD PRIMARY KEY (`id_korisnik`);

--
-- Indexes for table `member_menu`
--
ALTER TABLE `member_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_sub_menu`
--
ALTER TABLE `member_sub_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uloge`
--
ALTER TABLE `uloge`
 ADD PRIMARY KEY (`id_uloga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
MODIFY `id_korisnik` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `member_menu`
--
ALTER TABLE `member_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `member_sub_menu`
--
ALTER TABLE `member_sub_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uloge`
--
ALTER TABLE `uloge`
MODIFY `id_uloga` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
