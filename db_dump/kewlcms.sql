-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2022 at 03:25 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kewlcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `access` int(4) NOT NULL DEFAULT '0',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `is_menu` tinyint(1) NOT NULL DEFAULT '0',
  `ar_order` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `user_id`, `title`, `body`, `access`, `is_published`, `is_menu`, `ar_order`, `created`) VALUES
(7, 1, 2, 'What is PHP and Why Should You Learn It?', 'PHP is an acronym for “Hypertext Processor” and was first released by Danish-Canadian programmer Rasmus Lerdorf in 1995. PHP scripts can be easily embedded into HTML documents that are served at the front end of the server. An interpreter acts as a backend module integrating into the webserver. Thus, PHP is an excellent choice for building full-fledged websites based on static HTML.', 2, 1, 0, 0, '2022-01-19 07:10:34'),
(9, 1, 2, 'Jumpstart Your Programming Career with a Course in PHP', 'If you aim to become a web software developer, consider acquiring a complete learning of the top web development languages including PHP as the first step in the journey. One certification to consider is the Simplilearn’s Post Graduate Program in Full Stack Web Development offered in collaboration with Caltech CTME. Designed to help you master In-demand coding languages including PHP, this course should make sure you become an expert full stack web developer. After completing the training, along with the host of skills that you\'d master, you’ll know how to design, develop, and implement PHP based applications. Visit Simplilearn to learn more about how to get hired as a PHP developer.', 2, 1, 0, 0, '2022-01-19 07:14:39'),
(10, 3, 2, 'About', 'Whether you create a single-page site or a larger portfolio, the web resume serves as a more personalized option for sharing information and demonstrating your technological skills -- and it can be used by all types of job seekers.\r\n\r\nEven if you have very little work experience, you can leverage a website to build a better picture of your capabilities and yourself as a candidate, while leaning on your traditional resume to provide the basic background information.', 1, 1, 1, 1, '2022-01-19 12:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`) VALUES
(1, 'Programming Languages', '2022-01-17 15:57:49'),
(2, 'PHP Article', '2022-01-17 15:57:49'),
(3, 'Article', '2022-01-17 15:57:49'),
(8, 'Freelancer', '2022-01-19 20:39:51'),
(12, 'Web Developer', '2022-01-19 20:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Registered'),
(2, 'Admin'),
(3, 'Jumbotron Heading'),
(7, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `set_key` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `set_key`, `value`) VALUES
(1, 'site_title', 'KewlCMS'),
(2, 'site_description', 'This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(3, 'site_heading', 'KewlCMS Heading'),
(4, 'read_more', 'Read More'),
(5, 'site_logo', 'cms_logo.png'),
(6, 'favicon', 'CMS.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `group_id`, `created`) VALUES
(9, 'Ahmad', 'raza', 'raza', 'raza.ataki@gmail.com', '363bcb0ad5353a45ec79ff95cd60d2be', 2, '2022-01-20 11:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
