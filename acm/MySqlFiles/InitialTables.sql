-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 07:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsor`
--

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `ConfigsId` int(100) NOT NULL,
  `ConfigGroupName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `configurationsid` int(100) NOT NULL,
  `configurationname` varchar(50) NOT NULL,
  `configurationvalue` varchar(9999) NOT NULL,
  `configurationtype` varchar(30) NOT NULL DEFAULT 'text',
  `configurationsupportivetext` varchar(1000) NOT NULL DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`configurationsid`, `configurationname`, `configurationvalue`, `configurationtype`, `configurationsupportivetext`) VALUES
(1, 'APP_NAME', 'ABC COMPANY', 'TEXT', 'null'),
(2, 'TAGLINE', 'GSI SYS-APP', 'text', 'null'),
(3, 'OWNER_NAME', 'GAURAV SINGH', 'text', 'null'),
(4, 'PRIMARY_PHONE', '0000000000', 'phone', 'null'),
(5, 'PRIMARY_EMAIL', 'company@domain.tld', 'email', 'null'),
(6, 'SHORT_DESCRIPTION', 'eWVMVlJmQnYvNUtpbmh6UHNDT0kyYVNTOFVxeWIrdmdMQjl1T0R3Q1BCZz0=', 'text', 'null'),
(7, 'PRIMARY_ADDRESS', 'SVlZb2Urc1lOL2RheVFOdkdXUlJTdldldnJmT3RwYmxWSnZNa2JZeHJ2QkZadkM4ODVkR3pISVNXNHJMTUFyK041RGlydStTVG5qbjBTZlBDMVRYcFE9PQ==', 'address', 'null'),
(8, 'PRIMARY_MAP_LOCATION_LINK', 'aWpTWWNsdmhvbDBXM3M0NnVyRklGZz09', 'map', 'null'),
(9, 'SENDER_MAIL_ID', 'sender@gmail.com', 'email', 'null'),
(10, 'RECEIVER_MAIL', 'sender@domain.com', 'email', 'null'),
(11, 'REPLY_TO', 'not available', 'email', 'null'),
(12, 'SUPPORT_MAIL', 'support@domain.com', 'email', 'null'),
(13, 'ENQUIRY_MAIL', 'enquiry@domain.com', 'email', 'null'),
(14, 'ADMIN_MAIL', 'admin@domain.com', 'text', 'null'),
(15, 'SMS_API_KEY', 'null', 'text', 'null'),
(16, 'DOWNLOAD_ANDROID_APP_LINK', 'https://play.google.com/store/apps/details?id=XXXXXXXXX', 'link', 'null'),
(17, 'DOWNLOAD_IOS_APP_LINK', 'ios app link', 'link', 'null'),
(18, 'DOWNLOAD_BROCHER_LINK', 'brochur', 'link', 'null'),
(20, 'CONTROL_WORK_ENV', 'DEV', 'boolean', 'dev, prod'),
(21, 'CONTROL_SMS', 'false', 'boolean', 'true, false'),
(23, 'CONTROL_MAILS', 'false', 'boolean', 'true, false'),
(24, 'CONTROL_NOTIFICATION', 'true', 'boolean', 'true, false'),
(25, 'CONTROL_MSG_DISPLAY_TIME', '4500', 'number', '1000, 10000'),
(26, 'CONTROL_APP_LOGS', 'false', 'boolean', 'true, false'),
(27, 'APP_LOGO', 'ABC_COMPANY__13_Feb_2024_08_02_10_1757609811_.jpg', 'img', 'null'),
(28, 'SMS_OTP_TEMP_ID', 'null', 'text', 'null'),
(29, 'PASS_RESET_OTP_TEMP', 'null', 'text', 'null'),
(30, 'SMS_SENDER_ID', 'null', 'text', 'null'),
(31, 'PG_PROVIDER', 'PAYTM', 'text', 'null'),
(32, 'PG_MODE', 'TEST', 'text', 'null'),
(33, 'MERCHENT_ID', 'XXXXXXXXXXXXXXXXXXXXXXXX', 'text', 'null'),
(34, 'MERCHANT_KEY', 'XXXxxXxxXxXxxXxXxXXxXxXXxxxXxXXx', 'text', 'null'),
(35, 'ONLINE_PAYMENT_OPTION', 'false', 'boolean', 'true, false'),
(36, 'CONTROL_NOTIFICATION_SOUND', 'true', 'boolean', 'true, false'),
(37, 'FINANCIAL_YEAR', 'September - August', 'text', 'null'),
(38, 'GST_NO', 'GSTNO1234567789', 'text', 'null'),
(39, 'COMPANY_TYPE', 'PUBLISHING', 'text', 'null'),
(40, 'LOGIN_BG_IMAGE', 'GSI_SYS-APP__02_Dec_2023_05_12_17_95104069713_.jpg', 'text', 'null'),
(41, 'PRIMARY_AREA', 'M3RKYjIyemJJcnFXZ2xLdzZINzdMNVNqRVJFbkY2ZnpTQ1BmNFdQcUgrMD0=', 'text', 'null'),
(42, 'PRIMARY_CITY', 'Q1o2a0w2NEpQOEFLTHA3ZHdNYjh4UT09', 'text', 'null'),
(43, 'PRIMARY_STATE', 'Rm9nUDlDRTVkV20zWm8wMmEvMEpPZz09', 'text', 'null'),
(44, 'PRIMARY_COUNTRY', 'MmtSc3hhcXA1OU1mNjFaYUJ6VVhIZz09', 'text', 'null'),
(45, 'PRIMARY_PINCODE', 'RjV6emhnOUxVeC9ic29tQ25BV211QT09', 'text', 'null'),
(46, 'TAX_NO', 'DELA61323D1', 'text', 'null'),
(47, 'APP_THEME', 'facebook', 'text', 'null'),
(48, 'DEFAULT_RECORD_LISTING', '10', 'text', 'null'),
(49, 'WEBSITE', 'false', 'text', 'null'),
(50, 'APP', 'false', 'text', 'null'),
(51, 'MAX_ORDER_QTY', '', 'text', 'null'),
(52, 'MIN_ORDER_QTY', '', 'text', 'null'),
(53, 'GOOGLE_MAP_API', '', 'text', 'null'),
(54, 'MINIMUM_ATTANDANCE_RANGE', '5', 'text', 'null'),
(55, 'OFFICE_START_TIME', '10:00', 'text', 'null'),
(56, 'OFFICE_MAX_START_TIME', '10:15', 'text', 'null'),
(57, 'OFFICE_HALF_DAY_ALLOWED', '16:30', 'text', 'null'),
(58, 'MAXIMUM_ALLOWED_LATE_CHECK_IN', '3', 'text', 'null'),
(59, 'OFFICE_LUNCH_START_TIME', '13:00', 'text', 'null'),
(60, 'OFFICE_END_TIME', '18:30', 'text', 'null'),
(61, 'SHORT_LEAVE_MAX_TIME', '16:30', 'text', 'null'),
(62, 'OFFICE_LUNCH_TIME_IN_MINUTES', '40', 'text', 'null'),
(63, 'WORKING_DAYS_IN_MONTH', '0', 'text', 'null'),
(64, 'AUTO_MONTHLY_PAYROLL_COSING_DATE', '', 'text', 'null'),
(65, 'MAXIMUM_SHORT_LEAVE_IN_MONTH', '3', 'text', 'null'),
(66, 'DEDUCTION_AMOUNT_ON_PER_LATE', '0', 'text', 'null'),
(67, 'EMP_CODE', 'RNA', 'text', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `config_locations`
--

CREATE TABLE `config_locations` (
  `config_location_id` int(10) NOT NULL,
  `config_location_name` varchar(25) NOT NULL,
  `config_location_address` varchar(255) NOT NULL,
  `config_location_Latitude` varchar(25) NOT NULL,
  `config_location_Longitude` varchar(25) NOT NULL,
  `config_location_status` int(1) NOT NULL,
  `config_location_created_at` varchar(25) NOT NULL,
  `config_location_updated_at` varchar(25) NOT NULL,
  `config_location_created_by` int(10) NOT NULL,
  `config_location_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_locations`
--

INSERT INTO `config_locations` (`config_location_id`, `config_location_name`, `config_location_address`, `config_location_Latitude`, `config_location_Longitude`, `config_location_status`, `config_location_created_at`, `config_location_updated_at`, `config_location_created_by`, `config_location_updated_by`) VALUES
(1, 'NOIDA', 'L2pVb2Z2cjhxRVdYUUhlbmVIOHJpRXFRcG40bUhGL1FDUDZhMHp6U3d3OTgxNTlFV2l2R0NybzB5YkxTZnVKRg==', '28.627348', '77.380244', 1, '2023-05-10 05:09:48 pm', '2023-08-29 02:15:38 pm', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_mail_sender`
--

CREATE TABLE `config_mail_sender` (
  `config_mail_sender_id` int(10) NOT NULL,
  `config_mail_sender_host` varchar(255) NOT NULL,
  `config_mail_sender_username` varchar(100) NOT NULL,
  `config_mail_sender_password` varchar(50) NOT NULL,
  `config_mail_sender_port` varchar(10) NOT NULL,
  `config_mail_sent_from` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_mail_sender`
--

INSERT INTO `config_mail_sender` (`config_mail_sender_id`, `config_mail_sender_host`, `config_mail_sender_username`, `config_mail_sender_password`, `config_mail_sender_port`, `config_mail_sent_from`) VALUES
(1, 'smtp.hostinger.com', 'development@navix.in', 'Gsi@9810895713', '465', 'development@navix.in');

-- --------------------------------------------------------

--
-- Table structure for table `config_pgs`
--

CREATE TABLE `config_pgs` (
  `ConfigPgId` int(100) NOT NULL,
  `ConfigPgProvider` varchar(100) NOT NULL,
  `ConfigPgMode` varchar(100) NOT NULL,
  `ConfigPgMerchantId` varchar(500) NOT NULL,
  `ConfigPgMerchantKey` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_pgs`
--

INSERT INTO `config_pgs` (`ConfigPgId`, `ConfigPgProvider`, `ConfigPgMode`, `ConfigPgMerchantId`, `ConfigPgMerchantKey`) VALUES
(1, 'RAZORAPAY', 'TEST', 'XXXXXXXXXXXXXXXXXX', 'XxXxxXxXXxXxXxXxXXxXxxXxXXx'),
(2, 'PAYTM', 'TEST', 'XXXXXXXXXXXXXXXXXXXXXXXX', 'XXXxxXxxXxXxxXxXxXXxXxXXxxxXxXXx');

-- --------------------------------------------------------

--
-- Table structure for table `config_values`
--

CREATE TABLE `config_values` (
  `ConfigValueId` int(100) NOT NULL,
  `ConfigValueGroupId` varchar(100) NOT NULL,
  `ConfigValueDetails` varchar(100) NOT NULL,
  `ConfigReferenceId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `systemlogs`
--

CREATE TABLE `systemlogs` (
  `LogsId` int(100) NOT NULL,
  `logTitle` varchar(200) NOT NULL,
  `logdesc` varchar(1000) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `systeminfo` varchar(1000) NOT NULL,
  `logtype` varchar(100) NOT NULL,
  `logenv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(100) NOT NULL,
  `UserSalutation` varchar(1000) NOT NULL,
  `UserFullName` varchar(500) NOT NULL,
  `UserPhoneNumber` varchar(100) NOT NULL,
  `UserEmailId` varchar(1000) NOT NULL,
  `UserPassword` varchar(500) NOT NULL,
  `UserCreatedAt` varchar(25) NOT NULL,
  `UserUpdatedAt` varchar(25) NOT NULL,
  `UserUpdatedBy` int(100),
  `UserStatus` tinyint(1) NOT NULL DEFAULT 1,
  `UserNotes` longtext NOT NULL,
  `UserCompanyName` varchar(1000) NOT NULL,
  `UserDepartment` varchar(1000) NOT NULL,
  `UserDesignation` varchar(1000) NOT NULL,
  `UserWorkFeilds` varchar(1000) NOT NULL,
  `UserProfileImage` varchar(1000) NOT NULL DEFAULT 'default.png',
  `UserType` varchar(1000) NOT NULL,
  `UserDateOfBirth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserUpdatedBy`, `UserSalutation`, `UserFullName`, `UserPhoneNumber`, `UserEmailId`, `UserPassword`, `UserCreatedAt`, `UserUpdatedAt`, `UserStatus`, `UserNotes`, `UserCompanyName`, `UserDepartment`, `UserDesignation`, `UserWorkFeilds`, `UserProfileImage`, `UserType`, `UserDateOfBirth`) VALUES
(1, 1, 'Mr.', 'Gaurav Singh', '9318310565', 'gauravsinghigc@gmail.com', 'VndsbUlpKzhKdWpEbEZNSUNva2t1UT09', NOW(), NOW(), 1, 'YkVYdnY2YmtTdHBSRVkxbW95bFEyWTl6L2YxNUhpQ1NRK0FFR1BMRnpDN0JnUEdFTzNwb0NJaUptK2V6WDJUTQ==', 'Navix Consultancy Services', 'Sales &amp; Marketing', 'Sales Head', 'Information Technology', 'default.png', 'Admin', '2022-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `user_password_change_requests`
--

CREATE TABLE `user_password_change_requests` (
  `PasswordChangeReqId` int(100) NOT NULL,
  `UserIdForPasswordChange` varchar(1000) NOT NULL,
  `PasswordChangeToken` varchar(1000) NOT NULL,
  `PasswordChangeTokenExpireTime` varchar(1000) NOT NULL,
  `PasswordChangeDeviceDetails` varchar(10000) NOT NULL,
  `PasswordChangeRequestStatus` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config_url_types`
--

CREATE TABLE `config_url_types` (
  `cut_id` int(10) NOT NULL,
  `cut_name` varchar(30) NOT NULL,
  `cut_icon` varchar(50) NOT NULL,
  `cut_created_at` varchar(45) NOT NULL,
  `cut_updated_at` varchar(45) NOT NULL,
  `cut_created_by` int(10) NOT NULL,
  `cut_updated_by` int(10) NOT NULL,
  `cut_status` int(2) NOT NULL,
  `if_cut_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_url_types`
--

INSERT INTO `config_url_types` (`cut_id`, `cut_name`, `cut_icon`, `cut_created_at`, `cut_updated_at`, `cut_created_by`, `cut_updated_by`, `cut_status`, `if_cut_deleted`) VALUES
(1, 'Facebook', 'fa-facebook', '2024-09-27 08:17:55 PM', '2024-09-27 08:17:55 PM', 1, 1, 1, NULL),
(2, 'Instagram', 'fa-instagram', '2024-09-27 08:30:33 PM', '2024-09-27 08:30:33 PM', 1, 1, 1, NULL),
(3, 'Youtube', 'fa-youtube', '2024-09-27 08:32:13 PM', '2024-09-27 08:32:13 PM', 1, 1, 1, NULL),
(4, 'Website', 'fa-globe', '2024-09-27 08:32:29 PM', '2024-09-27 08:32:29 PM', 1, 1, 1, NULL),
(5, 'MAP &amp; LOCATION', 'fa-map-marker', '2024-09-27 08:33:37 PM', '2024-09-27 08:33:37 PM', 1, 1, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config_url_types`
--
ALTER TABLE `config_url_types`
  ADD PRIMARY KEY (`cut_id`);

--
-- AUTO_INCREMENT for table `config_url_types`
--
ALTER TABLE `config_url_types`
  MODIFY `cut_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`ConfigsId`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`configurationsid`);

--
-- Indexes for table `config_locations`
--
ALTER TABLE `config_locations`
  ADD PRIMARY KEY (`config_location_id`);

--
-- Indexes for table `config_mail_sender`
--
ALTER TABLE `config_mail_sender`
  ADD PRIMARY KEY (`config_mail_sender_id`);

--
-- Indexes for table `config_pgs`
--
ALTER TABLE `config_pgs`
  ADD PRIMARY KEY (`ConfigPgId`);

--
-- Indexes for table `config_values`
--
ALTER TABLE `config_values`
  ADD PRIMARY KEY (`ConfigValueId`);

--
-- Indexes for table `systemlogs`
--
ALTER TABLE `systemlogs`
  ADD PRIMARY KEY (`LogsId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `user_password_change_requests`
--
ALTER TABLE `user_password_change_requests`
  ADD PRIMARY KEY (`PasswordChangeReqId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `ConfigsId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `configurationsid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `config_locations`
--
ALTER TABLE `config_locations`
  MODIFY `config_location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `config_mail_sender`
--
ALTER TABLE `config_mail_sender`
  MODIFY `config_mail_sender_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `config_pgs`
--
ALTER TABLE `config_pgs`
  MODIFY `ConfigPgId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `config_values`
--
ALTER TABLE `config_values`
  MODIFY `ConfigValueId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `systemlogs`
--
ALTER TABLE `systemlogs`
  MODIFY `LogsId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_password_change_requests`
--
ALTER TABLE `user_password_change_requests`
  MODIFY `PasswordChangeReqId` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
