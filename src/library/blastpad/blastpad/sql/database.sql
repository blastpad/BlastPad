-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 05:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `site_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_home_post_id` int(11) NOT NULL,
  `site_language` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` tinyint(4) unsigned NOT NULL,
  `site_order` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `site_is_default` tinyint(1) NOT NULL,
  `site_google_analytics` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `site_date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `site_date_deleted` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`site_id`),
  UNIQUE KEY `site_id` (`site_id`),
  KEY `site_id_2` (`site_id`),
  KEY `site_id_3` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_subscriber`
--

CREATE TABLE IF NOT EXISTS `site_subscriber` (
  `site_subscriber_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(10) unsigned NOT NULL,
  `subscriber_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`site_subscriber_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `subscriber_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subscriber_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_ip_address` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_date_created` datetime NOT NULL,
  `subscriber_date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `subscriber_date_deleted` datetime NOT NULL,
  PRIMARY KEY (`subscriber_id`),
  KEY `id` (`subscriber_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_salt` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_date_deleted` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`user_email`),
  KEY `id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
