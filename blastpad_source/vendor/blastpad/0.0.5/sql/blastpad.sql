-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2016 at 09:32 PM
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
-- Table structure for table `bp_activity`
--

CREATE TABLE `bp_activity` (
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `activity_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activity_date_modified` datetime NOT NULL,
  `activity_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_content`
--

CREATE TABLE `bp_content` (
  `content_id` bigint(20) UNSIGNED NOT NULL,
  `content_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_order` tinyint(4) NOT NULL,
  `element_id` bigint(20) UNSIGNED NOT NULL,
  `content_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `content_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_css`
--

CREATE TABLE `bp_css` (
  `css_id` bigint(20) NOT NULL,
  `css_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `css_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `css_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `css_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `css_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_element`
--

CREATE TABLE `bp_element` (
  `element_id` bigint(20) UNSIGNED NOT NULL,
  `element_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `element_slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status_id` tinyint(4) NOT NULL,
  `element_order` tinyint(4) NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `element_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `element_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `element_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_element_setting`
--

CREATE TABLE `bp_element_setting` (
  `element_setting_id` bigint(20) UNSIGNED NOT NULL,
  `element_setting_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `element_setting_value` tinyint(4) NOT NULL,
  `element_setting_order` bigint(20) UNSIGNED NOT NULL,
  `element_id` bigint(20) UNSIGNED NOT NULL,
  `element_setting_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `element_setting_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `element_setting_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_member`
--

CREATE TABLE `bp_member` (
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_nonce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_ip_address_last_login` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_proxy_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_proxy_address_last_login` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_referrer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_parent_id` bigint(20) UNSIGNED NOT NULL,
  `member_date_last_login` datetime NOT NULL,
  `member_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `member_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_member_setting`
--

CREATE TABLE `bp_member_setting` (
  `member_setting_id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `member_setting_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_setting_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_setting_order` bigint(20) NOT NULL,
  `member_setting_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_setting_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `member_setting_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_member_site`
--

CREATE TABLE `bp_member_site` (
  `member_site_id` bigint(20) UNSIGNED NOT NULL,
  `site_id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `member_site_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_site_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `member_site_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_page`
--

CREATE TABLE `bp_page` (
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `site_id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` tinyint(4) UNSIGNED NOT NULL,
  `page_order` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `page_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `page_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_page_setting`
--

CREATE TABLE `bp_page_setting` (
  `page_setting_id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `page_setting_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_setting_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_setting_order` bigint(20) NOT NULL,
  `page_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `page_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_passphrase`
--

CREATE TABLE `bp_passphrase` (
  `passphrase_id` bigint(20) UNSIGNED NOT NULL,
  `passphrase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `passphrase_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `passphrase_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `passphrase_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_salt`
--

CREATE TABLE `bp_salt` (
  `salt_id` bigint(20) UNSIGNED NOT NULL,
  `salt` varbinary(255) NOT NULL,
  `pepper` varbinary(255) NOT NULL,
  `passphrase_id` bigint(20) NOT NULL,
  `salt_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `salt_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `salt_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_site`
--

CREATE TABLE `bp_site` (
  `site_id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` tinyint(4) UNSIGNED NOT NULL,
  `site_order` bigint(20) UNSIGNED NOT NULL,
  `site_date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `site_date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `site_date_deleted` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_site_setting`
--

CREATE TABLE `bp_site_setting` (
  `site_setting_id` bigint(20) UNSIGNED NOT NULL,
  `site_id` bigint(20) UNSIGNED NOT NULL,
  `site_setting_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_setting_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_setting_order` bigint(20) NOT NULL,
  `site_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `site_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `site_date_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bp_site_subscriber`
--

CREATE TABLE `bp_site_subscriber` (
  `site_subscriber_id` bigint(20) UNSIGNED NOT NULL,
  `site_id` bigint(20) UNSIGNED NOT NULL,
  `subscriber_id` bigint(20) UNSIGNED NOT NULL
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
-- Indexes for table `bp_activity`
--
ALTER TABLE `bp_activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `bp_content`
--
ALTER TABLE `bp_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `bp_css`
--
ALTER TABLE `bp_css`
  ADD PRIMARY KEY (`css_id`);

--
-- Indexes for table `bp_element`
--
ALTER TABLE `bp_element`
  ADD PRIMARY KEY (`element_id`);

--
-- Indexes for table `bp_element_setting`
--
ALTER TABLE `bp_element_setting`
  ADD PRIMARY KEY (`element_setting_id`);

--
-- Indexes for table `bp_member`
--
ALTER TABLE `bp_member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `id` (`member_id`);

--
-- Indexes for table `bp_member_setting`
--
ALTER TABLE `bp_member_setting`
  ADD UNIQUE KEY `site_setting_id` (`member_setting_id`);

--
-- Indexes for table `bp_member_site`
--
ALTER TABLE `bp_member_site`
  ADD PRIMARY KEY (`member_site_id`);

--
-- Indexes for table `bp_page`
--
ALTER TABLE `bp_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `bp_page_setting`
--
ALTER TABLE `bp_page_setting`
  ADD UNIQUE KEY `site_setting_id` (`page_setting_id`);

--
-- Indexes for table `bp_passphrase`
--
ALTER TABLE `bp_passphrase`
  ADD PRIMARY KEY (`passphrase_id`);

--
-- Indexes for table `bp_salt`
--
ALTER TABLE `bp_salt`
  ADD PRIMARY KEY (`salt_id`);

--
-- Indexes for table `bp_site`
--
ALTER TABLE `bp_site`
  ADD PRIMARY KEY (`site_id`),
  ADD UNIQUE KEY `site_id` (`site_id`),
  ADD KEY `site_id_2` (`site_id`),
  ADD KEY `site_id_3` (`site_id`);

--
-- Indexes for table `bp_site_setting`
--
ALTER TABLE `bp_site_setting`
  ADD UNIQUE KEY `site_id` (`site_setting_id`);

--
-- Indexes for table `bp_site_subscriber`
--
ALTER TABLE `bp_site_subscriber`
  ADD PRIMARY KEY (`site_subscriber_id`);

--
-- Indexes for table `bp_subscriber`
--
ALTER TABLE `bp_subscriber`
  ADD PRIMARY KEY (`subscriber_id`),
  ADD KEY `id` (`subscriber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bp_activity`
--
ALTER TABLE `bp_activity`
  MODIFY `activity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_content`
--
ALTER TABLE `bp_content`
  MODIFY `content_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_css`
--
ALTER TABLE `bp_css`
  MODIFY `css_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_element`
--
ALTER TABLE `bp_element`
  MODIFY `element_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_element_setting`
--
ALTER TABLE `bp_element_setting`
  MODIFY `element_setting_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_member`
--
ALTER TABLE `bp_member`
  MODIFY `member_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_member_setting`
--
ALTER TABLE `bp_member_setting`
  MODIFY `member_setting_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_member_site`
--
ALTER TABLE `bp_member_site`
  MODIFY `member_site_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_page`
--
ALTER TABLE `bp_page`
  MODIFY `page_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_page_setting`
--
ALTER TABLE `bp_page_setting`
  MODIFY `page_setting_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_passphrase`
--
ALTER TABLE `bp_passphrase`
  MODIFY `passphrase_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_salt`
--
ALTER TABLE `bp_salt`
  MODIFY `salt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_site`
--
ALTER TABLE `bp_site`
  MODIFY `site_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_site_setting`
--
ALTER TABLE `bp_site_setting`
  MODIFY `site_setting_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_site_subscriber`
--
ALTER TABLE `bp_site_subscriber`
  MODIFY `site_subscriber_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_subscriber`
--
ALTER TABLE `bp_subscriber`
  MODIFY `subscriber_id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
