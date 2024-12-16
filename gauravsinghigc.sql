-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 06:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
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
(27, 'APP_LOGO', 'ABC_COMPANY__17_Nov_2024_06_11_01_20390372946_.jpg', 'img', 'null'),
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
(40, 'LOGIN_BG_IMAGE', 'ABC_COMPANY__17_Nov_2024_06_11_56_64296375500_.jpg', 'text', 'null'),
(41, 'PRIMARY_AREA', 'M3RKYjIyemJJcnFXZ2xLdzZINzdMNVNqRVJFbkY2ZnpTQ1BmNFdQcUgrMD0=', 'text', 'null'),
(42, 'PRIMARY_CITY', 'Q1o2a0w2NEpQOEFLTHA3ZHdNYjh4UT09', 'text', 'null'),
(43, 'PRIMARY_STATE', 'Rm9nUDlDRTVkV20zWm8wMmEvMEpPZz09', 'text', 'null'),
(44, 'PRIMARY_COUNTRY', 'MmtSc3hhcXA1OU1mNjFaYUJ6VVhIZz09', 'text', 'null'),
(45, 'PRIMARY_PINCODE', 'RjV6emhnOUxVeC9ic29tQ25BV211QT09', 'text', 'null'),
(46, 'TAX_NO', 'DELA61323D1', 'text', 'null'),
(47, 'APP_THEME', 'facebook', 'text', 'null'),
(48, 'DEFAULT_RECORD_LISTING', '20', 'text', 'null'),
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
(67, 'EMP_CODE', 'RNA', 'text', 'null'),
(68, 'WEBSITE_LOGO_SQ', 'ABC_COMPANY__17_Nov_2024_06_11_13_42198133738_.jpg', 'text', 'null'),
(69, 'WEBSITE_LOGO_REC', 'ABC_COMPANY__17_Nov_2024_06_11_43_78423077929_.jpg', 'text', 'null'),
(70, 'FAVICON_ICON', 'ABC_COMPANY__17_Nov_2024_06_11_49_63604552042_.jpg', 'text', 'null');

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
-- Table structure for table `config_url_types`
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
  `UserCreatedAt` varchar(25) NOT NULL DEFAULT 'current_timestamp(6)',
  `UserUpdatedAt` varchar(25) NOT NULL DEFAULT 'current_timestamp(6)',
  `UserStatus` tinyint(1) NOT NULL DEFAULT 1,
  `UserNotes` longtext NOT NULL,
  `UserCompanyName` varchar(1000) NOT NULL,
  `UserDepartment` varchar(1000) NOT NULL,
  `UserDesignation` varchar(1000) NOT NULL,
  `UserWorkFeilds` varchar(1000) NOT NULL,
  `UserProfileImage` varchar(1000) NOT NULL DEFAULT 'default.png',
  `UserType` varchar(1000) NOT NULL,
  `UserDateOfBirth` varchar(100) NOT NULL,
  `UserUpdatedBy` int(10) NOT NULL,
  `UserCreatedBy` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserSalutation`, `UserFullName`, `UserPhoneNumber`, `UserEmailId`, `UserPassword`, `UserCreatedAt`, `UserUpdatedAt`, `UserStatus`, `UserNotes`, `UserCompanyName`, `UserDepartment`, `UserDesignation`, `UserWorkFeilds`, `UserProfileImage`, `UserType`, `UserDateOfBirth`, `UserUpdatedBy`, `UserCreatedBy`) VALUES
(1, 'Mr.', 'Gaurav Singh', '8447572565', 'gauravsinghigc@gmail.com', 'VE9pZHM4SjRxWlhncFllV2ZqZW5iZz09', '2019-01-06', '2024-12-03 10:35:32 PM', 1, 'YkVYdnY2YmtTdHBSRVkxbW95bFEyWTl6L2YxNUhpQ1NRK0FFR1BMRnpDN0JnUEdFTzNwb0NJaUptK2V6WDJUTQ==', 'GAURAVSINGHIGC', 'Sales &amp; Marketing', 'Full Stack Dev', 'Information Technology', 'Profile_Photo__UID_1__03_Dec_2024_09_12_57_59653236727_.jpg', 'Admin', '1999-01-22', 1, 0),
(2, 'Mr.', 'Saurav Singh', '9654259953', 'sauravsinghigc26@gmail.com', 'bTBldlhuWC9VMnc1QkQ3K3pVVWdraUdYL2dxRGU0MUFXZ1FTZW5tS09rUT0=', '2024-12-03 10:32:19 PM', '2024-12-03 10:35:28 PM', 1, '', 'DARK SERVICES', '', 'FREELANCE', 'TENDOR &amp; SURVEY', 'default.png', 'Admin', '2000-09-28', 1, 1);

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
-- Dumping data for table `user_password_change_requests`
--

INSERT INTO `user_password_change_requests` (`PasswordChangeReqId`, `UserIdForPasswordChange`, `PasswordChangeToken`, `PasswordChangeTokenExpireTime`, `PasswordChangeDeviceDetails`, `PasswordChangeRequestStatus`) VALUES
(5, '1', 'VW1KYXgwN0N3R2pRQng2ZUZkSWllYlA2aGNyQXlLWnJNbWVNNWx5UlNPY2JQdEM1YWJQamlKeDl0Nk1xdHBsT2N6YTR6SjlhWVBVeEhLWW9UZzg1V0E9PQ==', '19-11-2024 21:03', 'ZTJEanRHQ0JZTjExY09OcGRUMERDc1pNK3I1a0VJUHJoUTA2dlczMTRSM2pLWGhjK1JZN0VZeTZFWW1wbmgvOEdZbnBvblFOQ3ZKYm0rRDZ6S08rZGgrRys2dndQV3p4WktMTFNpbDJYM0FVYlhLMnI0YkpEaTBlbmFVV3c3QjVDOFovL01sOC9odDhlNWkzSE9GenE2TG5yRm1DNWlhS043dHg1ZnhQekFVQTBQZTg2Tk90SFIvRnpaak1SRyt1bGRLaDQxUlVRcW00dzdhLzZJanZyZmpuVlNEbDdmbXgzNkFzeDZNTzJyY0p1NWZVZzl5MTRqZkxlRkNUYUl0UmV3cGJUOG5FZEdrMHlCdGhQVkI4ajZhN2hIaVZWN0lDdnlvcUNtSlBuOTVVSnExMkE4SVZ2SDMrM3UzOGV5cG1RQmFoWmNOTWJPb3crRHFYY0NXV3ArMkpzcm91VWNwVi9yaDNNQ1VTc1loMTJ1bDVkZDRFMldxT0dDazk5UHZoVXhoNTFHY1cxRzFudm1QMDRwWVdlT2dtK25ycHdFNmRZS2dWTFBEZ2RQRmEvQVRLMUtLcFd3clhjSEpJNm10c2xtOWpiT0JCZ21wRitGekZvbXhuSDVINTl6YklwK3VZMVRGbFBjbEpQRVhmUlVHajdhcUFUVllqcWY4L3Zydk1yS2xqNW1JYlVRSHEwMGMybC9MVlF2MGhzUEU5MmF0OUNnTFM4RVp6OUdYSzJUbENYWm9rN1NjL050aHNSa1FBakhiOUJUb3hmaWl6UmtDcVBsZkZMRTlqUmVGbS9IMlZlbzNoUy9ZQlE3OGg3TFJMa1JwYlZtdHJXamNSVENZQTUxdFRmV3hsaGcrY2dpMVlhU29uYjQyWENzY1YrSXRzWko1TEo5SVlCTVU0alhEb1UxTWltK0lUSVRCV2xTeUVRbEdXcGxDSjh6dWF6VFhyT2FxbHlJOG1UT1V3WDcyS2JKci8zS1JJUC81RkxqRnlqaGR1Q0xYRTJIWTViZUxaMk53QjU0ZGxzMVhFYWZWdGpiZnhmR2gzLzJPWjQ0UkE2RXBaQmJuVGV6bk0vdTlXWUczbXYwd2d1bHM0Q2J5bTU5b2lFU01NYkh0SWNmWVQ0SXBYU3VhcEhzQit6REdSRGVVejZDQ1R3QkQ5ajlvSzh6SXRsbytjckN0eXdmYW5pSWhDUXViSTBSQnd1MXhaMkxiODRnRmdqYkhZTThaRTlwL094dFBJTVloUFJFVVZxQzZBS3B1TkY4K3EwTzNKdEZSK0dSSXNGMEVLeTZrTGRkMHpNbTVrM2R2S0o3VC9UdUc5eWxDWmZDVXhuNDIwdEwwckZ5MCswbWVaWis2enE5QmxSWUF6ZTJOc0ZEYmNzVXMrSnpjMXFxMitQcWs3T0FoSVczSEJLT1h5MisrL3dsWlNnYkxIVmhXYzh4eTEzSDhKK0RwRjBESjNtZHk0dlI2UVlDcmNjNGtzZEFzVDZFdzNtZXh0dXFObk5odGNnOVQyVGtYb3VjR2pqUFU1T2F4QlNhYURBWU9EdkxBdUY3aHpjamVWRWF0c001cDJlY3Q0UXpRYTRuM0ViQVpoZTArUlBUZGlCVEJYVjNvekdlUXlZQW5xN1BwdTljVFkzbjh6c0JmSDY0WmYvaUN3SVRSTVR6Vmh4RlZFWU9kSkV4Y0NRd2t2eTgyRC95YzByeXk5SUluUnBZL0FRMVZscW9qd3NRPT0=', 'Expired'),
(6, '1', 'SG1yclYvOGx0akVwb0I5WUZsVytXbFdZUE5jZXB1dlJ3aStpR3phOVBCUVJ2UmdMZ3V5SU10N1ZlNkZnaE5mYzQ5aGFNV1U0a0hyWHduZ2JDb2FIcWc9PQ==', '19-11-2024 21:25', 'ZTJEanRHQ0JZTjExY09OcGRUMERDc1pNK3I1a0VJUHJoUTA2dlczMTRSM2pLWGhjK1JZN0VZeTZFWW1wbmgvODAyRm1TUVU1MWFqMmpGNG4yc0h0Ym5aMmFwRjErL05BbTRRWnVGUVNpQXhRY2h3MUw1TkJjMndtWnNlL2xFeUJiQ1pKeTZKS0dHeWg1dklsNmpRS1RXNTUvZTBhVHgzd1N5SndNRmxQcnAzUUt0MHBJUjF6SmdjS0xLSFpDblVzQXRoK2xCR2h2OUtlMlB1RU5yakpNMXVxekN3b2o0Q28zL1Blbm9kamJzT3hnSEV6ME9scWN6bmtSUjdYK2RQNVBOeDR2dXU5NmdWNlFOQXh3SER4QmlMWEtiNlEwOHZ3MURvV1VhczB1d2NHaGZRQ0tTVjlsZWNIc3VrdklSdTBaa1huTVVBRzhMcE1OV2N3Z0FuSFlQbklVeThHNExYaWFjUDU4c3FHOXY0SVhiNVZiVys2Nk4va2xXYUh3NEtJOW1HUnJWRS9pU1FScVZxTUVSOE9rYXY5U2NlVm5zRDg2bjZUVnVpK05haTVrYmZ1L3ZucHRFTmoxZXZ3WWZ0VHBBVHA0T2tsYS9GaHNvUXdSVm9qUVYydGRrT0J1eVl6dlczNGMxVzR5VUpZK1o3WERrT0tJT2FNV3JJSCtzUkxWR2svTE9KeEVkc09jTDlXZFAwaDVKMkoxa2JyYk5OdVRyazNxNGRxeWJvK3JRSnp0WjhuUERJdmFkSlh3YjczK3d0dWVIK0dpKy80NE9zVjBHdTlaZUVPT1JaTWFCQ3ZUa2EvN0xQY09XRy90em1RVGdOSW11WWlMTlF4VkpDRHZjaVpEdy9LNTg2UUEvcW5Tc1AxRzg2WUUwd1NXMG1meDRxblZFYll6d2grUXhpcUxpUmo3MHcrYkVBREVGZlpYbzk2U1FXWHpXeWZWY2FwUFUyUlBDMHppWmsxQ0dsK0IrS2wwL2FrYzYwOGV5c1lwZ2JEVmJIOTNnTmdyR0dhTllwWHhLMWdEVERKS3hTeHI5a3RrcmgwSGM0aVhBdHQyRDY2cjMyai9QYnRTNG5Kc3BXTGQ2Sm5XQUZWSDhCb1M1QjJtZFBOZm02bmQ2QnRvcGdjcFBseGsxNmMwZ2txZkNrYy8xTExqSkpLVUYrS2p1QUNmaXUvWHNnTURRQjBNZjlONHEzS0hiQWpmYUplNi8yUWVuVUZkT05DYUhvcHljN3llTlRqQk5LQ0Jwendaakt1VjlwVU9KRWlxeWRIUW5TZjBkd1Y5bk93WkRCa1Z5YnpDQ2JveC9uTFhmZUVFZmhQWW5vU2d1S3dDMU13T2k5L2pvMXBvYXVoU1JBR1RnYVFQOTl0R2szdDFodjFCeHFBM0x4V0RmaW80Y3FKNkUxSEpXQ051NE9PVDFEZmxjajV3NnJqTTVQK2lQNnJhKytJMEVEaDFVcC8wdndNUmZsQ1I3Y2k5RGVqU1hsbjVUUXJxSS9FejVkT3V4N1I1SjF5emNic2xYOEN4aVpqVGxxaFFYNU9VYjRsdWpZaU0yRVZodDJJaXlRNGhQNmVTK3VXMHFPdXRFQkxCNElKdFpuQU1mM0VOQmJhNTN5ZytFaU40Z3NQaERlTkpMaWlWMS9nMlNEQU5xZ1R5d2RwclhoZklEMGVJU0VhbkVMeWdRRU5uZ2RLVlhCWmVDaG1RNE5UZnBTUGkvYjlYdmVUby9QaTlRPT0=', 'Expired'),
(7, '1', 'UE5wL0FrWUlCTWZ3cVJCS0NMWlRWNjRBK1ZCbWNhTzZnNWcwRzJLd2VBbzgvOTZ4bUFnVDdNNmNpZHdOT2wyUys1NVQzcU1SSE5JWG1SUHlUcUx2VGc9PQ==', '19-11-2024 21:51', 'ZTJEanRHQ0JZTjExY09OcGRUMERDc1pNK3I1a0VJUHJoUTA2dlczMTRSM2pLWGhjK1JZN0VZeTZFWW1wbmgvOG9PaDZndUxpMHJHL2VBMVdzeS8yay8zNzZmMzJaaE1IMFdtcUtvMVFoaEg2by93VkNWSE9sNTBIcjU0ZTBwbFBISkVSeEdoNTJmT1AreElNUDF1WXJleWkySy9zbko5d1MrVHhvMXJZTG5BTmlhdkluSWVyb3F4QTlreWJLcXVYVHR3NjRpTkNiMzkxVVEwTzZ6QzdJaHZ6UlhLcmtHb1J1VmozbHJOSHpKRnZRSVZNaW11RUlpdkRIdEdOYmJObGtkdi9tL2hjelR1NlhiZm5CRnViaDg1RkpXbVdjQ3liZVI1aVZMSVFaM2lpNGZiL01wUmFLQzhXaVFSSDZtUy9PcytzcXpVdkF1dHVWUVg3Qno0QW5VYU0vRjFMTjlVcGdZeSttTGFOVGwyUDd6YnU0Q0F1QTNWdGxhVmVCcnl5dkVDWk1UdVN2U3ErM0x0VTN1bHZFSlJhOUgxZnI4NjhtYVpvalJVZWZFdjdBNjIyOUErcFQyd2FwL0lUR0o1ZWlpSVp3NlN1ZFJINlNOWDNBLzRiOXFTUGkvdGU3RitGdUVVSWovNlpTemxwOU5kM1p0QkNLRXVHb3dORHhBOWtmWlArZ1pncS9rVHNCaGp1UzBXSFZOa1dhcGhlOWhqZkZ1RkRuOWhjaDh5Z09Vc0EvV21YYk1aNkFYdzlGUU91U2V2UFY2dHE2OHFXT1pLVHhzMWp6aGF6ZFBnL2JJSlhTdGZqNEV0bHROcisyMi9maWVCYVFma3UrY0MvUHFUemtDT2Q5M3VnUHU2dWtJaUJ6M2Y1MUxTVnY3Ykl1Tm5EckxyZnFxRnJYZXlDeWFhYm5nNmJ0bDhiMUcrT25zaDJETnlqQXVwb2dsTVU0b0xXU1VpMW5tWGE1SXNHSzd5a1FTRi9JdW9GT0J4dUtJUWVTTURFenZhajI3UXdKekYxSmJ1SGNXM3dBVVFwNmlKc0lpUHl3Ui9SenBqUTdzTmY5b1lLRDVVWUYvd0xYYkJKUkZBRzJKRnAxc0tXV1FkMit4cWFvV0tmUDgxZ0p1alhpS2luaUNSOHZmeFlnM2krRjhjdm5xSEtOQmkzN0lrRDFiUG9nRWhYNE4zRlpkS0s2aDZpak9aM1ZPd1lBYkEvVUE3RTNIZTR2Q1RZK3RVWXpkUnVXMEhDbDVKMGJoaTFQaW52R3U0Uys5TnJqS0g1aXVnaUFKQzYySGRvV0xMa3Rka0NWWVdBMW9wdVh4WGRaOXpWZURqUFNyTkwwQjRSbFl4cE40TDJ6aDdLaHdLc3lyaTN3bUExY0o1NmhwQnRGS2g4clhtQ3hlbTZ2enN4MDJLemZLWXJSWlM1aG1BYzN1UENEK1pLVVdVM2wxY1I5dFNjNHZPb1Exb3FXN3NQRWtqUnlqa0RxY2tRbEhpWTFpRmFtL2hkWmd3RlNzMVlNUVJTNW1wZ1d5c2pJbnlKWkdPS0djZzFBamFpTjhYYVpPNHZIbFhIbzFlYklvQVlmK2tWWkd3NW14Z3QwY1pKbmhycW9uVUZ0U2tSSURKcDkxMi90OWM2WDlZcUM2ajhqd1JkWHVkampxN2N6aVF6QVFDZkVMY1lFOGs2bVdXU2o5TytGTEVsaEJ3d0hpejJGZUg5TWNzSXVKeWRwS1NIY2crVCtnPT0=', 'Expired'),
(8, '1', 'T3U0Vnl0Rjc5YllNZ1doOStRRnNReXpzV1BRK1lHRFY5NGFTUG9yNStsRU9jamt3UGpxRmJ4ZVpORzZtSndXSTIyMTU3ekVVK1ZZdGNmYzFHOGhtYUE9PQ==', '21-11-2024 09:11', 'ZTJEanRHQ0JZTjExY09OcGRUMERDdUZKemRtWHpObGVhSVBpV3BrU1JTeXE2UnlMRkNjQ1JZMytsMnVHQU9KRkJMN0NZVWpOOU9PS2FQeFNod3psRWxhOHZ3akNYd2dNN0hHZm5HM21jOWlKZWQvaGJRMXcrZG9BWGFjZkVtYko0NnFGdlY2b1BzWmx6OG1IazlsM1JwQkdBN0Q1MWRWOWtaV0ZZL1c2bVhnck5xK0g4UmhYYlp4WUxzOVFGTWdxVDQyT3FyeXQ2c21QTERLSks4c0NVRXA4aUl3L0xROE1Od2xEbzhjZ0RwMmRGYkxDYjVMQjFXUXhwRmcxTTlqTkJENVZsYVgrZXBSdEJXN0ZPUExYTWhZKzVjc01Ec1pTbjcrSWUwcFkzSEg4Q0RUS2lLcjN6V3EzQlVQb2xtUkVEeFN6SEp3ZitPODlUUG42SWQvVGpyWGNZNXp3TnVDTUNEYVFEeWdUN1BpT24rYjJFaFpaZ2xYTnZtQlVNdGlvRXpIYjRvejdJdnV6a3JLaUhGQkUrUmFIRit1b0wyM1VIUnJpWEpGMUVza2ExY2xOclg1NVNjaEVTUDJJdHFvZEhWM1dwK3cxU3E5Z2pqNkxLQkQvOTN2aitONVI4cm1YVWFGVDMxMXY2WTV6WmdiblNLMmJIcTJ3Z0EydTVXc1lhdzVpcjNIQlFUWEZ4Q2JKRzJ3TkhJS2h2V21EbFk1WTBSZWo3OUJJRW05ZnQvZGUyTGZDcHNhYWZVcHZPOGZWaldjakdPbEsvTkpucWtOcCtMTTUwZkNXN0VJQStQQ1NvMnJrbnZyZDlMdG1Pcy9DdkZxVSsyWTNOVHBvbHFhWEJoTkdjUm5NN0hCQ2dsd0prUzdQVEVIY3F5cFQ4S1NGSUFCQURnbzE4aVhocC9ZL2k3LzYvanNHS1UwcGlLakhmdFZpYUxxeVBQbW95bzRZa1ZBa21xT0JQczE0YWxBQUJkZW1WNi8xWWt1TjVLdkxRbElxdnEwaFNIeEh6VjRHQUw0ZllZT2dBYThDNUdCaWxyUk90THJvK0ZYS0pHaE1NUmd3S0Z4dlZ2TlhVS1I2d3p2TEhEWUtjemxHT2tyLyt1b2NVaDZEVjZYYXhXVWhHTU1odFM5Q09OVzErdnUrb0Jnb0t6S2ptcU4yYm9qVXV0bzhYVUQvWHR4SkUwYmNrZGc1STF0dlo1U3J0VzY2aG1zSXlxK2o0ZXlSM3JadG55Tmh3YnJuUnBXQ0RBM1M3QzNGa1ZzcmtZRllWUGk2S1BsQ0NIbFBMWlU0cDlITWkwNDd3NTRma0EyOTAwWERCVEs0bC9WdDBtWldXd1JuVE1FcTFNZG9Yb05UTE5sTGpuRy9HaGtYbm1wdjdRSnFjeHl2T0k0Q1NrMU5XV2pHeU9LNnAvUGJjKzdlTnY4bUV0QTIyS0tPVERHNytqUnozbzRqbEFyTm5RUFBPVlJ4NCtoN1g0M21ocGozZW5ta0s4Ti90MVVaYk5HSXpIOUxQckVLWFpiL0trNGVxRzFScDZJMWpKS1N4ZWVIbWFYK2Y5MURVSytTRlVPaG1nQTZCU3RhQlY3OWRpWDlKRG9VS2hBWnhQTGFpUjRvS0hGaHpOai9CbUhKM1FoNWpkR3MrNkI1OWYzK1pyZzJ2MTdvTVlFMUFpdm5zMkRHS3NqK3Z5bmlyOG1hMllhWEpJZ0ZENU9ISHpVUmhLbHlqSWFkQVA1WUVBPT0=', 'Expired'),
(9, '1', 'NTF1SWp5c0Naa1JPT1pmRjV2ejNBUW1CN05GSDlZSVNUZVlQaDNjTEdoOW9EdVR4YytsbVZ5cFpDdXZaZlBFWm52TjlaektVRWZaUWhlQnVlbGw4OFE9PQ==', '22-11-2024 08:47', 'ZTJEanRHQ0JZTjExY09OcGRUMERDbWdCTjdHNHhudXdxS3BEWjhGYTRCQytQMjY1MUFYM1JMMVZ5NlVOck5lNU5GOUNEVmxYTXhkUjduQjZOR0g2bWJiRUxYVjNMV1RhaFZ0ekdWcUhDYzc2UHN6d2dibWFBRm92ZTJjODJNcTYvRWpzUWtvUm1ZRDZrNTI0R0RLZ0dSOXhpZnZRZ0JwbkZ5MjIrQ3c3d3VubjV4U3RMZkVaT24wY21INzJuUWU4alMwSjkwRG56eWNFbEVmQ3lQKzByMHQ0eHhpYkUrbXhXcnpIYWhERjZFenVmNlNXTEV4TmVqcStUNUt4bnprY0Y0VTYyczBpejRzUGJFeGN3T1JYUHVVcG80c2xSZjRGMHFnYXlQQWpzL0dEUFc3ZVBRWHQ0RjROejRLcUd0S2JBMjZVVzN4VFBiUUR1NCt0S2s5VGUyZGxRdXc0clZqUDdqdXcrQTYvem5uQkVmd3ZsZ2R1Z1drSDM5cWRia01aZ2ZEakFPSVRlNVphb21xenk4TGdxSGh1ZE5RMm93YlZOVHBrbkJ5dTBheGtXclhickR5VkVtdHNOdjdOUE0vMEpET1Nld0FrdEhsQWRESG1hWVVjL0RFcVNYdUtFQkhuUlpnN2xCMjFrRFlLaXlLVkhTbkRzUW14M2h6RUdIbFNlVEpmTEpOdlRQY0VocVlUTC9NalgzVWVWRGpNZnVldnpsYWV6TlJJdXU4ZXFhNnJHMlZTZjhWeVNnSEdVcXkrKzNHdHVVYnJmekRFT01yOHJJbTg5SENrVVFha1FVMEpFYzdVQno4K3VWVmRkcmpLUVVDWGxXV0NXM2pnME9nN3FYUjZPamJYaVZQUExtTHIxeGdqRW8rc3hLNUROSDlOTFhZVXhiNk10elpHek44QXAxcE0yenYzeUlnK3dlb3dQQld1ZFRkSjRUd1BpbzFzV3dIWVpMQmg0cWJDYzJBc3lobi9iMkRCVU9XSWRzK1ZGTU5DditwaXJpODVRTTBYNkFyL1FXek9QSUU4K1o1V0NjY1dISFFqL0NSSE9RUytOVWFSZlQ0UGFTWlhGZWU5UkNQb2toZEY2cHJicjd5R0NYblZqREV3MU1Tdk5jekhYZ1hvdko3YkpORG11ZG9lSUJjQVEzakJOMEJHY2x5YTJKc2F4TXpVU09wOUptRTlpdzhKbWljTGRUMHpPd0JoVVdYVzdBd0k0Sk5LUHMxeDJONlgrZG5qbkFrTkJEc25RT0N1ZE9oL3M0eVhuYVNYTlJySlEzVDNmeTZ4VlNsRUhEc0REbExXTVJzakhDcnZxR0oxZGovZVhTNXU3b0Y1L0pVSVQzOFlNYllER0l2ajVzZGdyYmVYLytwdWt5SHpCQ2txNVRHK3Rzbk9sS3RjSE9Cd2RWZVhvbWhXWWVSSXFCN2tRTi9OWU9kdUxUcldUbzNGSWhDTXdjcnhEbUhNK0N4dG5jOVJ2SFJvTTBWbnRCczRORmVkYXk3VEg4d2RnZXhMb0FYeXBUQmx0dW92TlIrVUpJRXJkQUd4cElQRVNTMjNHWkQ4bEZJWnVHdDBQcVJzMHBsQ0hFMDBwSGRCNVAxVHd3TzJ2clRYK21iQ21SRUkvak9Ca2tDUVVFRE4xbTBMQXZwWFlYVWZ0Tll5OUU2eGVreDhvNGxtL1FrU2pxUlJ3TEF0THZVM0JMMFI3NzlONDdwNmJQdHdHdUNKZ1B1SXhRPT0=', 'Active'),
(10, '1', 'RW0zQmlMRGxqK2dBbk1jTzRtMDNMbzlCMHBWQ2MxWHM5aC9ZMUsrd09KOTMyVFMrNjJ4ak5ZUTVuRGVWcFdEc0VJSjVNZU00enZURHllOTh0UkFzd3c9PQ==', '27-11-2024 23:17', 'ZTJEanRHQ0JZTjExY09OcGRUMERDallWU3Badk5pUk1LQWlocS9KVUFSMmQxMzN2Q2hXQ2Y1eHFEM21UOUhKN0ZSNVVBVTRWRkRmZzZmYnhtVWkxdDh0S3NmVzV3UnByZU1BVVJQOWlkV21mVkUxdXliUTNiWm1ya0ZXVm1waUtjblBWOVFyK2JwM3N4Q0dRSWQxeGhOZ01LZlNuOWl1WE5DbDN1K0JPTVFoN0txUGVNaUloaVVsM2ZSeUtMUTRMb2lZekFLSGRUeFpMNzFnTnU0NWNXeXpUNWsvS3lxb3dlaHIzYVI5c2pHK1VSTlpqOGlXV1ZSTWNlSUlURC8rek9idkM0Y0RtWUdrZUNrNzZkQzNIOFdMOE9jWENhZUJVZXNZY1FMeElCdUhmUHNhY2VnL25tcmM2dThqOGpNSTNSOFYvb240MnVRWC9YL0NBNFRGVjhtODRhR2RHMEdmay93UWtHVnRBTlA0aWZWVXBGbytXRnIwdEw4R0d0T3JVZUF4dEtMeW1vMTlMS1NReFBtUW1zYWc2ZEZzYktSY3B5SXJnZGZWTEFWclFKTW81bVlaNGZBTzRWTTMzZzRyNklOaVNSQ2F6THRWOGxIZzl5NUxxRm1sZnpMK1hXUi9vb3AvNE85NGpuTHlkU21tRThGRE1TWlA5MjQyNXJLUUg4L1ROYXdTT1drb3UzNmkrWFJ5REdWWTJWS3FNNU0vNlVFc3FXVitEeXkrMWhvMUZ1QW01czdsNG9jQStoL3dQRk1sMVhxV3pxQVZWT2owWHkwNTlkb1A1UGRhL2xCcUNQNjNPTEZtbWlHMXBrUThKNDc5alMxaG5ZWFBKZmhlWXdyeG1pc2FuNU1wOU4vODhZbjZYTVZWUlpVL1B4SnRSWUhieXRrVFMzUk45RWpUT3Fnd3hqUFV3bkVBK3NFM3EzRVU5d1NmanJSSXhpbHNhV2s5bHNrbnNzK0lFR1ZXS3NTKzFDVlY4dFJZaktYbzI5aHV6cXBLRkhEZVlTYU1QSzd5VDlyeE04RmJTaXplRG5PejZNVFFYWjlhK1dzcWFWTFdSd1BvNWJtb1RDQUt4Vk1uaHZ5NVhqT3N4TG1aL0tpRCtUR2k5c1VrVkFaeW42MXVsZ2haRThrN1pXS01YZVJLZ3d3M2NoVGl0b01aMDFmU0VVMG94WFZsREoxeHRBNEQ5TmRvMU1kWk9qSDBzVmNRTUhOWXRIUkUwNlRUZFkwaHhwbU9LVXpYdW1mUDV3WE0xOHNwdVZTUjBqdDNUeXVoa2xxb01ZZnFBOVdRS2o4UWowbkpwNndxaTBlandtSTNua250TnRWV0dJdGc5VnNmMTFQa0gwNnFqaXVtZUhmSFBCSzdBNmZyckR1S3l1UHRYcHNIVzBaT3ZQeFBVZUVvYmFsUWFBdW1SMFZzemhuWEVqUjBXbXpaY3Mra24renNCY2F1M0o4aWoyN0hmL2liOXlIOVZGbDJTZ1B2a3k3QlVqdElQY25mb2VqRU1lNWxxUXNhZkJLdlZPRmFBdTk0Y0xoMnRWN1pVd1pBUGdsYXhYMlFrU21PNFVEZU4zWlpvZCtjUnkxQ21meTMxT1hzaEJiTWZPS2VWK25aZWxqVHZSaXhGWmZYNjdPTzNVMzdULzFIWkpobjZPT0ZHRkdRbkUxclpZZVZhN24xSFpOSlpGdWdSVWlENitHaHZnU3BXN1RYQXRjRitqejlwR1dCTG53PT0=', 'Expired'),
(11, '1', 'dGdiTituR3N4algwLzdEYTZRQ0ZyVEJVZjVJQkRIY0lqM093NXNzaTYvR2dmaWs5Z3dFUllEQXpkeFZnd1dPSHNYdkUwTTM5UVhtTVpuUmtjZDU0SWc9PQ==', '27-11-2024 23:33', 'ZTJEanRHQ0JZTjExY09OcGRUMERDallWU3Badk5pUk1LQWlocS9KVUFSMmQxMzN2Q2hXQ2Y1eHFEM21UOUhKN296eGgwMG1GSjVEQzNmd3FRUU5qVXcwczFYM0huOGwxdlNpcThqNXBrdGMwSUhaNkh2Y01qdmp6TXZhekdKS1pqQTcyQ016MWpDVURUVjE0Y2p2aVNhQUtJRmZDTVlxdS9zNnp1cG5pT3U4c0d0d2pkaEp4MCtEaTR2N1hkMzlZZ1RDS2kxL2NnNGY2YWE1aHc0NEMxbVJMcnNNQ2ZDdDZBOTlkQm5PVkYrbXNGR2VwSjVJL0hwRGdNeE5IZHpqOGxnQXVrV0ozOVM5amZIeXNtcnB0dnk0eStKT0hDQlgzaGpHTkxBK1JSRjlEWmNKY1Zaa0hkcXppSnVzZTR6RTgyR3dnNGJrVUR4NjQzbDJpeDM4WXhxWURJbFRxbEdDaGRpdEppVHoyMENBWkdSNllwb0ExNmdKd2VMRmlKMVo5NnFqK2FqOXNiTnJrK05EcXRNVENvN3ZuMFZNNU0rZHJ2NHBRTktPMHIxVFB1bzhnTWVUeDJ1N0pZQXNpYXVTdlZzK29ucXZ4dGFIei9wVFI2bU1IZ09vTi9lY1U5eHlKWlg4a3czTXkzNE5vbGh3V09oTHlWK1QvREMzamVxQ2JSaG1JWWwveTlmNXRWWERKTEJIcThxYVRTbENMbUVsU2srOCtqcUp0QUlBb0dXSHJFaG1lL2FpQTNOa0pnRjBqaFB6MmxRQ3hzNGJRRVU1UE1nM1djVThqTFVndjBvNWxqUksySTVEU2ZRRlkwQnNFMDZEall4Z1pUdXVta21JZ0w1MHNONS9DcVlneVRJV2hQTUpNSVZkV2RxVU90VWlmUGwyc2l6L2IwRExwZ2pmWStSWW9pYXhCRzJFcDhvSTFkRnJCZXJZWENPa0J6Z2VqbDVpU2F4K1pFUTVvWmRQUUlZWG9ubC9Yc3pXSVFuYVFuWURZcFNLblg5anAyUDhNWHUzcmkzSUpXVUh4QjZ2ZDJNRmcwY1Z5bUJEMG16cGVHZDhBMVBlOXhlTExxK3VLNWQ4UHlZaXB5K2FKdkZzdUpVK25oTVdPRUw4TXpRSDdKb3RidG5JWFFpY2pLbEttRTdYVGF3czJKZlRMTDlCemhnRW5ESlpuZWhIZm1LcmdkVWdOWUR3aU0wZ25JdmJGMWRNZjU0MnFaQ3B3a092WmdMRmpoWWpGcVFpTnRUWCtzOTRPVzBjWXVFRlk3eGdOSVVUMEpJWG8wVmFYbkpTNmZ6b0x0MmZKYXFqOVRqdjdEQ25USmV0RGtKdTIrSG1wSjhCN3hpMTIxNGY5a3NrdHNqalArL3FQRjlXTkYwcXZkOFFNd0dKRm0wNStoUWc4THhSTVFlTUE3VzY4a0FWOXZVd2pQMFB1bkpYODdLT2U5ZmJncFVwUzdNcFNlU0lHRG5PaXNiakt0bm1MVEtacHV3UHVML0svMFRtNjdQT3ZBWUE1STJCV3dSNnRXVDdibDhZUEwxZ2pFMllDWXd2ZUQxckVoU0owTndyZ0pNcm5PWDdoVjZ1bzhiUVVSZno3dGxPcEw0UzFqUm1lS2tyRHZwRHZ2RXZWQWFuWnRJdmE4UGZaRE9hWHRzYUNjemh0alltdE9YN0c1d2hQdmEzMGdzcU1uQnFzTjJkTElWUEkyTUh2NnJidUQva2s1aGttUzQ3dmxRPT0=', 'Expired'),
(12, '1', 'Zm5xL0xpdUlncVhGNFFieCtVRkxvRm5JNEMwbVI0UnFwK1I2S1IzTDkyVVZwWjRRNm0xd0hBTmNha1MrRGZKVGNZWW1uVHo2YWJVSUpzRWlvV1oxUXc9PQ==', '27-11-2024 23:43', 'ZTJEanRHQ0JZTjExY09OcGRUMERDallWU3Badk5pUk1LQWlocS9KVUFSMmQxMzN2Q2hXQ2Y1eHFEM21UOUhKN2RHSUloZDdwdXpTck5pelRicFJnNE9QejJrb1FlN1Nqajl3MWJoVm0wQTN0OFd6ZGFaQnZ2RGVLcWhHc1BrQWtHYVNKUkRtZ2FPdklLaCtUVTNJVVV6amJUWi9pTVVXWGNLbjB6Z0YrZ2RjNUJQZGg5aVhkSi9DcEJkN3NHeDNNSUpXTThIOWlKdUYxdTdNYVlpYkVvSHpBZnBSUEgyN2ZCQjlBQTRzcGVZc1kyZ2JMZkw4N05CU1dWZkQ5SkFkeFBsUEZndWYxUnc5N08vT3ZFWnc0N1lzMnphOTVFSFB6M3NEYTlmRVcwMzJuQzNvdEUzQWd1Q3hTRkRZSUVFK0FVVjdnc08wNlBodmVsY2hacVF3b2NRc3Izalp1enkvRktXdkhIRUpVdTRISzVPSTNtTXZZVDhoeVhFWmp3cExvL3Jaei9UWGppYTBwcU9SKzV2bmpNWmpXNUY5a1I0QWgxQWRKZkVkUkFhQmdBbVJ5eWlvVmJuY1BFbWZWSWJBK0Myb2RLQlJEZWI3bitsdk1wUDdodDdCYjRuMVVaVFpEbmN1UFpTUWFOMlJBZmZYYjd4Nlh6eHF3ZTcrUHVETGRzak8zOStjdm9wRUlDUXBWZ3B5RmQ4OGpOQ2lRTUNhZFFBWWZ4eHJQZUFBNW5lQWdkMFVvRGpRYit3TW0wR1ZJYmhUQkplVkxiQm0xajREMkRMZzNsRUttU1FudHZjRXZKb0IzY2dHTGpHWk1EZkJvUlNyVzN0V1pkdm9xeDV0cmE1R0JtbXh2eEx2UjZ6cHY1OXI4cmFtaUZpOThUWENOckYrNGJ0ZWZyY04yNnFZa2lPRG5KNlM1VGlUc2tiMXgxVWQvREZmT2U4RFg0VDc2TzVIbjl2ODJtVGtLY0YyY0tLUDk1QXBwNURyL2llUjZKekU0WDBGeXh2c01wUGNQVGcrdmZmSzlLWVpnMGNUVm56dEhMbG9kK2tpdDdnZksxMXVkYUlYcDdzT2xTcXN5OVVmbDl6QlRUU3J3ZWF4emE4S0NSd25vZkVmYnA4WGdON3lUNVA3TWh3ZGx0TWt3NHkrQ1hsdnYvTUxhRHU4eUxZTzVrL2dFVXBaSnJHRm1RYU8rWENEaGNBbkp6SGp2a0hLcnhtR2FsUm4vNlJSTC95Z0NzMThaMGZtM0d0ZHhRcnVQcTFabUZBME01LzBiNHZHaWNkL1pQZWJ3MklNZ3FZN0k2WHhmaWx0STFwWVVPUnJKYlp6UXp2dFB5RTVNT2U1cVRWQ050VzBMeHkvc1J0TndpaVcrMWplK0tnUGc2L0lRa0kyZ2tBTDRIYzVIMEVNU2NxZjhpZGl2YlgvWlRibW83dGI5azlKclJnZE4vd2tMU2h3R0JEMmp6MVZuWGY0MVcvSVhZMmt1a09vSCtoemNudytOYUNyYW5hQWRGb3FqcXZvQTVaL0VJSzJxRWZqTWpzU0l6YzNqSjQwcU1Wb0E3U0I4ZTlJelRNZFc0akZMOUZwSUxXT0RTOVpmSXdsaklvZkt0Zjg4SXBwQzVKbmkyL1cvZlVaWklNSlY3Q1E0SmFKYnQwdnRIT3k0czNTKzZZSnp4RlZlUHJubU5KUnBvV2owU3ZjYlgyaVhMVzEyUDJhVVkxTGFXbkxFdUlkNDdRPT0=', 'Expired');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `config_url_types`
--
ALTER TABLE `config_url_types`
  ADD PRIMARY KEY (`cut_id`);

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
  MODIFY `configurationsid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

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
-- AUTO_INCREMENT for table `config_url_types`
--
ALTER TABLE `config_url_types`
  MODIFY `cut_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `UserId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_password_change_requests`
--
ALTER TABLE `user_password_change_requests`
  MODIFY `PasswordChangeReqId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
