-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2016 at 06:22 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blastpad`
--

-- --------------------------------------------------------

--
-- Table structure for table `bp_site`
--

CREATE TABLE `bp_site` (
  `site_id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_blueprint_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_blueprint_version` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` tinyint(4) UNSIGNED NOT NULL,
  `site_order` bigint(20) UNSIGNED NOT NULL,
  `site_date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `site_date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `site_date_deleted` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_subscriber`
--

CREATE TABLE `bp_subscriber` (
  `subscriber_id` bigint(11) UNSIGNED NOT NULL,
  `subscriber_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_id` bigint(20) NOT NULL,
  `subscriber_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_referrer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_proxy_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subscriber_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `subscriber_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bp_site`
--
ALTER TABLE `bp_site`
  ADD PRIMARY KEY (`site_id`),
  ADD UNIQUE KEY `site_id` (`site_id`);

--
-- Indexes for table `bp_subscriber`
--
ALTER TABLE `bp_subscriber`
  ADD PRIMARY KEY (`subscriber_id`),
  ADD UNIQUE KEY `id` (`subscriber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bp_site`
--
ALTER TABLE `bp_site`
  MODIFY `site_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_subscriber`
--
ALTER TABLE `bp_subscriber`
  MODIFY `subscriber_id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
