-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Generation Time: Jul 19, 2016 at 10:43 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `DB_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `published`
--

CREATE TABLE `published` (
  `id` int(11) NOT NULL,
  `place` varchar(100) NOT NULL,
  `item_id` int(11) NOT NULL,
  `published_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `published`
--

INSERT INTO `published` (`id`, `place`, `item_id`, `published_date`) VALUES
(1, 'featured', 6, '2016-07-15 00:00:00'),
(2, 'teaser1', 1, '2016-07-15 00:00:00'),
(3, 'teaser2', 4, '2016-07-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sortable`
--

CREATE TABLE `sortable` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `position` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sortable`
--

INSERT INTO `sortable` (`id`, `title`, `content`, `position`, `published`, `image`) VALUES
(1, 'PHP is awesome', 'PHP is a popular general-purpose scripting language that is especially suited to web development.\n\nFast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.', 0, 1, 'img/php.png'),
(2, 'Python is powerfull', 'Python is a programming language that lets you work quickly\nand integrate systems more effectively. ', 1, 1, 'img/python.png'),
(3, 'Javascript is incredible', 'JAVASCRIPT Harum, maxime. Voluptas dolores, amet facere voluptatum velit sapiente, sed minima nulla, quibusdam voluptatibus cupiditate quia magni.', 3, 0, 'img/javascript.jpg'),
(4, 'CSS is essential', 'CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.1. It brings a lot of long-awaited novelties, like rounded corners, shadows, gradients, transitions or animations, as well as new layouts like multi-columns, flexible box or grid layouts.', 4, 0, 'img/css3.jpg'),
(5, 'HTML5 is backbone', 'HTML5 [note 1] is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.', 0, 1, 'img/html5.JPG'),
(6, 'Ruby on Rails', 'Rails is a web application development framework written in the Ruby language. It is designed to make programming web applications easier by making assumptions about what every developer needs to get started. I', 0, 0, 'img/ruby.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `published`
--
ALTER TABLE `published`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sortable`
--
ALTER TABLE `sortable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `published`
--
ALTER TABLE `published`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sortable`
--
ALTER TABLE `sortable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
