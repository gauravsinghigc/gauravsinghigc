-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2025 at 10:35 AM
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
-- Database: `gauravsinghigc`
--

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
(1, 'APP_NAME', 'GAURAVSINGHIGC', 'TEXT', 'null'),
(2, 'TAGLINE', 'WORKING ON DIGITAL DREAMS', 'text', 'null'),
(3, 'OWNER_NAME', 'GAURAV SINGH', 'text', 'null'),
(4, 'PRIMARY_PHONE', '9876543210', 'phone', 'null'),
(5, 'PRIMARY_EMAIL', 'gauravsinghigc@gmail.com', 'email', 'null'),
(6, 'SHORT_DESCRIPTION', 'VnFxT3RpeW1ldkptYXAySWlURURYTzIvN3p1MUE4YnlTVDhuZXAyWG0wRko5MUVJbitnRDJHSWNGQTJHL0ZCYmM0VUZDMGk4ZkVvRXVSaDR4SVozQ3FkNUpWaTU2QnRTd0VMdVpUZHo4T3JvUlpCOHFlQ2dGOU03dFByKzRHcjNlS2t1V29uZnMxV1MzekpLWEZtUzNFYmwweFJGNVBNR3FWdmZkWjBaeStrK0VBejErcFdaM3YxQTFqVXBQWVhUTGFJcDRwTGk0NVRHNXVOMEpYMEdUT2I5My9iU2NzVFUzamlvb2pkWUZuaTFmRWJsRWpvaktxTDhwU1hrTW1qdktmbXF2WkZOU3lSSGp5NkR6MGRGZW9FY0J2aE5DZWJ0Q0UrZjVRRFVqNGtXTFFSYkN6VUhoa3dGSVNKcmJHem9VRWhZb2x0Yko3aXhNampIalMvT25ueTJKakpyMEZCTG5TR29FN0JPVmJxUURuQ3JhN0MybnlxKytlVUE3UzZ5aE5JVFV6NTAxTE83TWgxem5XRGNWVmthek9UV3NzeDUxOUJXNDFyaGU2ZEVlRlkxVDlULzZVNmVETHZpM3JtR2dwNkxIMGtJdTdEbElSaE5MRGZvTWFLZmFOK2FnbEl0Y2Q2VTIxQ003a0Q4MElOa3htRUgxTHlBejQvTk81MVJybW9GcFczZXQwOUdSR0NFTks2UWcxZW8yYXhweHF1OGRFdnJxMUZrVmw3di8zVzdMMHpjOE9iZnEzbndQTWNHTlk1NXJZSU5UdkN5K0RpckF4ZmZZUT09', 'text', 'null'),
(7, 'PRIMARY_ADDRESS', 'NDdpZVl2WkthNldNaWJUbVl4by9mSFYzOUFDZTU4S2x5Uk83U1RibG9JbzEwdXJwV3NBOStlZ242aWRYUUZIYg==', 'address', 'null'),
(8, 'PRIMARY_MAP_LOCATION_LINK', 'M3N6cEE1V0syMjBKWE9JamJ0d2dERVk0aGNLSGw4cW5SUjYyKzY1NWNvQzVtcmZuc1JkVS81dTRsbFZCaGFuUzdRWmQ2Sm84aHNMZ0w4ellQUWdyU2Ira09tSkJreFNOWGFkb20vbjhLY3Z4N1BGL0dBRndxSXM5Tit4aWdZR2lqQWV5YmQ3ejRCbHZjZGJvTlpTa1MyUjdxakE0MWdvN1YzZVlkbC91Mlk0ZWkvOFVyV0RacGRoRng2dUwwL0pWdE1NMndtbFBGaFMvQlRvSk5vUjNLR3grWEx0U3ExeVZiczdHd0sxdSszaHNNdksva3Zac2gyK3JxaEdGNWRrQW1ENlRoYlUzRU1wd0psTUpBSC9kQ29JNGwrUG5MUVFvWXVWTGxqb0wyME1pRDVhR3NjS3lRU0ZuWHAvMHJ0MkJMVWUvM3RDR21RREU3MmFqUW9BS2piZnEwSmNjcDY3ZHpkanZ0MVErcEZVPQ==', 'map', 'null'),
(9, 'SENDER_MAIL_ID', 'enquiry@gauravsinghigc.in', 'email', 'null'),
(10, 'RECEIVER_MAIL', 'enquiry@gauravsinghigc.in', 'email', 'null'),
(11, 'REPLY_TO', 'not available', 'email', 'null'),
(12, 'SUPPORT_MAIL', 'enquiry@gauravsinghigc.in', 'email', 'null'),
(13, 'ENQUIRY_MAIL', 'enquiry@gauravsinghigc.in', 'email', 'null'),
(14, 'ADMIN_MAIL', 'enquiry@gauravsinghigc.in', 'text', 'null'),
(15, 'SMS_API_KEY', 'null', 'text', 'null'),
(16, 'DOWNLOAD_ANDROID_APP_LINK', 'https://play.google.com/store/apps/details?id=XXXXXXXXX', 'link', 'null'),
(17, 'DOWNLOAD_IOS_APP_LINK', 'ios app link', 'link', 'null'),
(18, 'DOWNLOAD_BROCHER_LINK', 'brochur', 'link', 'null'),
(20, 'CONTROL_WORK_ENV', 'PROD', 'boolean', 'dev, prod'),
(21, 'CONTROL_SMS', 'false', 'boolean', 'true, false'),
(23, 'CONTROL_MAILS', 'true', 'boolean', 'true, false'),
(24, 'CONTROL_NOTIFICATION', 'true', 'boolean', 'true, false'),
(25, 'CONTROL_MSG_DISPLAY_TIME', '2500', 'number', '1000, 10000'),
(26, 'CONTROL_APP_LOGS', 'false', 'boolean', 'true, false'),
(27, 'APP_LOGO', 'GAURAVSINGHIGC__03_Jan_2025_03_01_04_26383046868_.png', 'img', 'null'),
(28, 'SMS_OTP_TEMP_ID', 'null', 'text', 'null'),
(29, 'PASS_RESET_OTP_TEMP', 'null', 'text', 'null'),
(30, 'SMS_SENDER_ID', 'null', 'text', 'null'),
(31, 'PG_PROVIDER', 'PAYTM', 'text', 'null'),
(32, 'PG_MODE', 'TEST', 'text', 'null'),
(33, 'MERCHENT_ID', 'XXXXXXXXXXXXXXXXXXXXXXXX', 'text', 'null'),
(34, 'MERCHANT_KEY', 'XXXxxXxxXxXxxXxXxXXxXxXXxxxXxXXx', 'text', 'null'),
(35, 'ONLINE_PAYMENT_OPTION', 'true', 'boolean', 'true, false'),
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
(48, 'DEFAULT_RECORD_LISTING', '25', 'text', 'null'),
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
-- Table structure for table `config_accounts_types`
--

CREATE TABLE `config_accounts_types` (
  `ccat_id` int(10) NOT NULL,
  `ccat_name` varchar(155) NOT NULL,
  `ccat_shortname` varchar(100) NOT NULL,
  `ccat_code` varchar(75) NOT NULL,
  `ccat_key` varchar(75) NOT NULL,
  `ccat_purpose` varchar(255) NOT NULL,
  `ccat_type` varchar(255) NOT NULL,
  `ccat_desc` varchar(525) NOT NULL,
  `ccat_status` int(1) NOT NULL DEFAULT 1,
  `ccat_created_at` varchar(45) NOT NULL,
  `ccat_updated_at` varchar(45) NOT NULL,
  `ccat_created_by` int(10) NOT NULL,
  `ccat_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_accounts_types`
--

INSERT INTO `config_accounts_types` (`ccat_id`, `ccat_name`, `ccat_shortname`, `ccat_code`, `ccat_key`, `ccat_purpose`, `ccat_type`, `ccat_desc`, `ccat_status`, `ccat_created_at`, `ccat_updated_at`, `ccat_created_by`, `ccat_updated_by`) VALUES
(1, 'General Ledger', 'GL', 'GL001', 'general_ledger', 'To manage and record all financial transactions within the company.', 'Asset', 'The general ledger contains a complete record of all company transactions and is the basis for preparing financial statements.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(2, 'Accounts Payable', 'AP', 'AP001', 'accounts_payable', 'To manage the company’s outstanding debts and obligations to creditors.', 'Liability', 'The accounts payable account tracks all amounts the company owes to suppliers and creditors for goods or services received.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(3, 'Accounts Receivable', 'AR', 'AR001', 'accounts_receivable', 'To track money owed by customers for products or services provided.', 'Asset', 'The accounts receivable account tracks the amounts owed to the company by customers who have purchased on credit.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(4, 'Payroll', 'PAYROLL', 'PR001', 'payroll', 'To manage the payment of salaries, wages, bonuses, and deductions for employees.', 'Expense', 'Payroll account tracks all employee compensation, including salaries, bonuses, and deductions for taxes or benefits.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(5, 'Tax Liabilities', 'TAX', 'TAX001', 'tax_liabilities', 'To record the company’s tax obligations to the government.', 'Liability', 'Tax liabilities account tracks amounts the company owes for taxes, including sales tax, income tax, and other government-imposed levies.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(6, 'Cash and Bank', 'CASH_BANK', 'CB001', 'cash_and_bank', 'To manage the cash and bank accounts of the company for daily transactions.', 'Asset', 'The cash and bank account tracks the company’s available cash, including money in hand and in bank accounts.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(7, 'Inventory', 'INV', 'INV001', 'inventory', 'To track the company’s stock of goods for resale or use in production.', 'Asset', 'Inventory account tracks the cost of goods the company holds for sale or use in its operations.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(8, 'Cost of Goods Sold', 'COGS', 'COGS001', 'cost_of_goods_sold', 'To track the direct costs of producing or purchasing the goods sold by the company.', 'Expense', 'COGS account tracks the direct costs associated with producing or acquiring the products the company sells.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(9, 'Equity', 'EQUITY', 'EQ001', 'equity', 'To track the ownership interest in the company, including stockholder equity or retained earnings.', 'Equity', 'Equity account reflects the ownership interests of shareholders or owners in the company, including retained earnings or share capital.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(10, 'Retained Earnings', 'RE', 'RE001', 'retained_earnings', 'To track the company’s cumulative earnings that are retained and not distributed to shareholders as dividends.', 'Equity', 'Retained earnings account shows the portion of the company’s profit that is retained in the business, rather than being paid out to shareholders.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(11, 'Prepaid Expenses', 'PREPAID', 'PE001', 'prepaid_expenses', 'To manage expenses that are paid in advance, such as insurance or rent.', 'Asset', 'Prepaid expenses account tracks the payments made for services or goods that will be consumed in future periods, such as insurance premiums or rent.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(12, 'Depreciation', 'DEPRECIATION', 'DEP001', 'depreciation', 'To record the allocation of the cost of tangible assets over their useful life.', 'Expense', 'Depreciation account reflects the systematic allocation of the cost of fixed assets like machinery, buildings, or vehicles over time.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(13, 'Interest Expense', 'INT_EXP', 'IE001', 'interest_expense', 'To track the interest costs associated with borrowing funds for the business.', 'Expense', 'Interest expense account reflects the cost of borrowing funds, including interest paid on loans, credit lines, or other borrowings.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(14, 'Bank Loans', 'BANK_LOANS', 'BL001', 'bank_loans', 'To track the company’s outstanding loans from banks or other financial institutions.', 'Liability', 'Bank loans account tracks the amounts owed by the company for loans taken from banks or other lending institutions.', 1, '2025-01-19 20:01:10', '2025-01-19 20:01:10', 1, 1),
(15, 'Deferred Tax Liabilities', 'DTAX_LIAB', 'DTAXLIAB001', 'deferred_tax_liabilities', 'To track future tax obligations due to temporary differences in income and expenses.', 'Liability', 'The deferred tax liabilities account tracks future taxes owed due to temporary accounting differences.', 1, '2025-01-19 20:02:52', '2025-01-19 20:02:52', 1, 1),
(16, 'Deferred Tax Assets', 'DTAX_ASSET', 'DTAXASSET001', 'deferred_tax_assets', 'To track future tax benefits from overpaid taxes or deductible temporary differences.', 'Asset', 'The deferred tax assets account tracks future tax benefits from overpayments or deductions.', 1, '2025-01-19 20:02:52', '2025-01-19 20:02:52', 1, 1),
(17, 'Retirement Benefit Obligations', 'RETIRE_BEN', 'RETIREBEN001', 'retirement_benefit_obligations', 'To track obligations related to employee pensions and retirement benefits.', 'Liability', 'The retirement benefit obligations account records future liabilities related to employee pension plans or benefits.', 1, '2025-01-19 20:02:52', '2025-01-19 20:02:52', 1, 1),
(18, 'Provision for Warranty', 'WARRANTY', 'WARRANTY001', 'provision_for_warranty', 'To set aside funds for warranty claims on products sold.', 'Liability', 'The provision for warranty account records future costs of honoring warranties on sold products.', 1, '2025-01-19 20:02:52', '2025-01-19 20:02:52', 1, 1),
(19, 'Bank Overdraft', 'BANK_OVERDRAFT', 'BANKOFD001', 'bank_overdraft', 'To track amounts owed to the bank under an overdraft agreement.', 'Liability', 'The bank overdraft account records amounts borrowed from the bank through an overdraft facility.', 1, '2025-01-19 20:02:52', '2025-01-19 20:02:52', 1, 1),
(20, 'Contingent Liabilities', 'CONT_LIAB', 'CONTLIA001', 'contingent_liabilities', 'To track potential liabilities dependent on future events like lawsuits.', 'Liability', 'The contingent liabilities account tracks possible liabilities that may arise from future events like legal cases.', 1, '2025-01-19 20:02:52', '2025-01-19 20:02:52', 1, 1),
(21, 'Miscellaneous Income', 'MISC_INCOME', 'MISCINC001', 'miscellaneous_income', 'To track any income that doesn’t belong to main revenue sources.', 'Income', 'The miscellaneous income account tracks income sources that do not fall under the company’s core business activities.', 1, '2025-01-19 20:02:52', '2025-01-19 20:02:52', 1, 1),
(22, 'Charitable Donations', 'CHAR_DONATION', 'CHARDON001', 'charitable_donations', 'To track donations made to charitable or nonprofit organizations.', 'Expense', 'The charitable donations account records the company&rsquo;s charitable giving and its impact on tax deductions.', 1, '2025-01-19 20:02:52', '2025-02-02 07:30:45 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_assets_categories`
--

CREATE TABLE `config_assets_categories` (
  `ccat_id` int(10) NOT NULL,
  `ccat_name` varchar(155) NOT NULL,
  `ccat_shortname` varchar(75) NOT NULL,
  `ccat_code` varchar(55) NOT NULL,
  `ccat_purpose` varchar(255) NOT NULL,
  `ccat_desc` varchar(525) NOT NULL,
  `ccat_status` int(10) NOT NULL DEFAULT 1,
  `ccat_created_at` varchar(45) NOT NULL,
  `ccat_updated_at` varchar(45) NOT NULL,
  `ccat_created_by` int(10) NOT NULL,
  `ccat_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_assets_categories`
--

INSERT INTO `config_assets_categories` (`ccat_id`, `ccat_name`, `ccat_shortname`, `ccat_code`, `ccat_purpose`, `ccat_desc`, `ccat_status`, `ccat_created_at`, `ccat_updated_at`, `ccat_created_by`, `ccat_updated_by`) VALUES
(1, 'IT & Technology Assets', 'IT_TECH', 'ASSET_IT_TECH', 'Assets related to technology infrastructure and IT operations.', 'All hardware and software used to support the company’s IT systems and operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(2, 'Office Equipment & Furniture', 'OFFICE_EQUIP', 'ASSET_OFFICE_EQUIP', 'Assets used in day-to-day office work and functioning.', 'Office furniture, equipment, and supplies used to facilitate business operations and employee activities.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(3, 'Vehicles & Transportation', 'VEHICLES', 'ASSET_VEHICLES', 'Vehicles used for business purposes such as transportation, delivery, and mobility.', 'Cars, trucks, and other vehicles used by the business for operations, deliveries, or employee transportation.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(4, 'Machinery & Industrial Equipment', 'MACHINERY', 'ASSET_MACHINERY', 'Machinery used in production, manufacturing, and industrial operations.', 'All machinery and equipment used in the production process, including tools, assembly line machines, and production units.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(5, 'Real Estate & Buildings', 'REAL_ESTATE', 'ASSET_REAL_ESTATE', 'Real estate assets including company-owned buildings, warehouses, and properties.', 'Buildings, land, and other real estate assets owned or leased by the company.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(6, 'Tools & Electrical Equipment', 'TOOLS', 'ASSET_TOOLS', 'Tools and electrical equipment used in various operations.', 'Hand tools, electrical equipment, and machines used to carry out specific tasks or functions in operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(7, 'Security & Surveillance', 'SECURITY', 'ASSET_SECURITY', 'Assets related to ensuring safety and monitoring operations.', 'CCTV cameras, alarm systems, access control systems, and other security-related equipment.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(8, 'Software & Digital Assets', 'SOFTWARE', 'ASSET_SOFTWARE', 'Software used in the company’s operations, from management tools to customer-facing platforms.', 'All licensed software, digital platforms, and proprietary systems used within the business operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(9, 'Inventory & Consumables', 'INVENTORY', 'ASSET_INVENTORY', 'Inventory and consumable goods used in operations.', 'Stock and consumables that support production, sales, or other business processes, including raw materials and parts.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(10, 'Medical & Laboratory Equipment', 'MEDICAL', 'ASSET_MEDICAL', 'Medical equipment used in healthcare, R&D, or employee health monitoring.', 'Medical tools, laboratory equipment, and other health-related instruments used by the company or in production.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(11, 'Research & Development Assets', 'RND', 'ASSET_RND', 'Assets related to research and development for creating new products or services.', 'Assets used for the research and development of new products, processes, or services for the company.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(12, 'Hospitality & Kitchen Equipment', 'HOSPITALITY', 'ASSET_HOSPITALITY', 'Assets used for hospitality and food-related services for employees or clients.', 'Equipment used for preparing and serving food, as well as maintaining hospitality facilities for staff and guests.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(13, 'Renewable Energy Assets', 'RENEWABLE', 'ASSET_RENEWABLE', 'Assets used for generating and using renewable energy sources.', 'Solar panels, wind turbines, and other renewable energy systems used to support sustainable business practices.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(14, 'Legal & Intellectual Property', 'LEGAL', 'ASSET_LEGAL', 'Legal documents, intellectual property, and licenses held by the company.', 'Patents, trademarks, copyrights, licenses, and legal documentation related to business operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(15, 'Artwork & Decorative Assets', 'ARTWORK', 'ASSET_ARTWORK', 'Assets related to art and décor used within the company’s office or properties.', 'Art, sculptures, paintings, and other decorative items used for office aesthetics and branding.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(16, 'Communication & Networking Equipment', 'COMMUNICATION', 'ASSET_COMMUNICATION', 'Assets used for communication and networking within and outside the company.', 'Networking equipment, telecommunication devices, and related systems used to facilitate business communication.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(17, 'Safety & Protective Equipment', 'SAFETY', 'ASSET_SAFETY', 'Safety equipment used to protect employees and assets.', 'Personal protective equipment (PPE), safety tools, and systems designed to ensure workplace safety.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(18, 'Event & Promotional Assets', 'EVENTS', 'ASSET_EVENTS', 'Assets used for organizing events and promoting the business.', 'Equipment and materials used for corporate events, conferences, and promotional activities.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(19, 'Remote Work & Home Office Assets', 'REMOTE_WORK', 'ASSET_REMOTE_WORK', 'Assets for remote work and home office setups.', 'Laptops, mobile devices, home office furniture, and other tools used for remote work or telecommuting.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(20, 'Miscellaneous Assets', 'MISC', 'ASSET_MISC', 'Assets that don’t fall into specific categories but are still considered company assets.', 'Miscellaneous items such as one-off purchases, gifts, or other assets that are not covered under specific categories.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(21, 'Pharmaceutical Equipment & Products', 'PHARMACEUTICAL', 'ASSET_PHARMACEUTICAL', 'Assets related to pharmaceutical and healthcare products.', 'Medical equipment, pharmaceutical tools, and drugs used in healthcare services, R&D, or manufacturing.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(22, 'Chemical Products & Equipment', 'CHEMICALS', 'ASSET_CHEMICALS', 'Chemical products and equipment used for manufacturing or laboratory purposes.', 'Chemicals, raw materials, and laboratory equipment used in various business operations or manufacturing processes.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(23, 'Furniture & Fixtures', 'FURNITURE', 'ASSET_FURNITURE', 'Furniture used in office and workspace environments.', 'Chairs, desks, cabinets, and other office furniture and fixtures used in business operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(24, 'Mobile Devices & Accessories', 'MOBILE', 'ASSET_MOBILE', 'Mobile devices and related accessories used in business operations.', 'Smartphones, tablets, and accessories that support employees and business operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(25, 'Electrical Equipment & Supplies', 'ELECTRICAL', 'ASSET_ELECTRICAL', 'Electrical supplies and equipment used for business operations.', 'Electrical components, devices, and equipment used for operations, including cables, generators, and more.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(26, 'Fire Safety Equipment', 'FIRE_SAFETY', 'ASSET_FIRE_SAFETY', 'Fire safety equipment used to ensure the safety of employees and premises.', 'Fire extinguishers, alarms, sprinkler systems, and other equipment used to maintain fire safety in the workplace.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(27, 'Cleaning Equipment & Supplies', 'CLEANING', 'ASSET_CLEANING', 'Cleaning equipment and supplies used for maintaining a clean workspace.', 'Vacuum cleaners, cleaning chemicals, brooms, and other equipment used to maintain cleanliness in the business premises.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(28, 'Logistics & Distribution Equipment', 'LOGISTICS', 'ASSET_LOGISTICS', 'Equipment used in logistics and distribution for goods and services.', 'Packaging materials, loading equipment, and transportation used for logistics and distribution operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(29, 'Packaging Materials & Equipment', 'PACKAGING', 'ASSET_PACKAGING', 'Packaging materials and equipment used for products and shipping.', 'Boxes, tapes, labels, and other materials and equipment used to package products for sale or delivery.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(30, 'Music & Audio Equipment', 'MUSIC', 'ASSET_MUSIC', 'Assets related to music and audio used in business operations.', 'Audio equipment, speakers, microphones, and sound systems used for events, recordings, or media production.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(31, 'Photography & Videography Equipment', 'PHOTOGRAPHY', 'ASSET_PHOTOGRAPHY', 'Equipment for photography and videography used for business purposes.', 'Cameras, tripods, lighting equipment, and other tools used for photography and video production in business activities.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(32, 'Audio-Visual Equipment', 'AUDIO_VISUAL', 'ASSET_AUDIO_VISUAL', 'Audio-visual equipment used for business presentations and media production.', 'Projectors, screens, audio systems, and other equipment used in presentations, conferences, and media production.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(33, 'Fashion & Apparel Assets', 'FASHION', 'ASSET_FASHION', 'Fashion and apparel assets used for business or retail purposes.', 'Clothing, accessories, and related fashion products used for retail or branding purposes.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(34, 'Home & Office Furnishings', 'FURNISHINGS', 'ASSET_FURNISHINGS', 'Furnishings and decorations used in the office and workplace environment.', 'Furniture, curtains, rugs, and other items that enhance the look and feel of office spaces.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(35, 'Office Stationery & Supplies', 'STATIONERY', 'ASSET_STATIONERY', 'Stationery and office supplies used in everyday business operations.', 'Pens, paper, notebooks, printers, and other supplies used for administrative and business operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(36, 'Exhibition & Trade Show Equipment', 'EXHIBITION', 'ASSET_EXHIBITION', 'Assets used for trade shows, exhibitions, and related events.', 'Booths, banners, promotional materials, and other assets used for events, conferences, and exhibitions.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(37, 'Catering Equipment & Supplies', 'CATERING', 'ASSET_CATERING', 'Catering equipment used for company events and employee services.', 'Catering tools, food containers, and serving items used during company events and for employee dining services.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(38, 'Toys & Educational Tools', 'TOYS', 'ASSET_TOYS', 'Toys and educational tools used for development or children-related services.', 'Educational toys, learning materials, and tools used to support training and development activities.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(39, 'Freight & Cargo Equipment', 'FREIGHT', 'ASSET_FREIGHT', 'Freight and cargo-related equipment used for transporting goods.', 'Cargo handling equipment, freight containers, and tools used for the transportation of goods and products.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(40, 'Contractor Equipment & Tools', 'CONTRACTOR', 'ASSET_CONTRACTOR', 'Tools and equipment used by contractors for various projects.', 'Specialized equipment used by contractors in construction, maintenance, or repair projects.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(41, 'Retail Equipment & Fixtures', 'RETAIL', 'ASSET_RETAIL', 'Retail-related equipment and fixtures used in business operations.', 'Display racks, counters, cash registers, and other equipment used for retail operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(42, 'Publishing & Printing Assets', 'PUBLISHING', 'ASSET_PUBLISHING', 'Assets related to publishing and printing used in business processes.', 'Printers, publishing tools, and materials used in the creation and distribution of publications.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(43, 'Cleaning & Janitorial Services', 'CLEANING_SERVICES', 'ASSET_CLEANING_SERVICES', 'Cleaning and janitorial equipment and services used for maintaining business premises.', 'Cleaning supplies, janitorial equipment, and services used to keep business environments clean and safe.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(44, 'Manufacturing Equipment & Tools', 'MANUFACTURING', 'ASSET_MANUFACTURING', 'Manufacturing equipment used in production and operational processes.', 'Production machinery, tools, and equipment used for manufacturing goods or services.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(45, 'Repair & Maintenance Equipment', 'REPAIR', 'ASSET_REPAIR', 'Equipment and tools used for repair and maintenance activities.', 'Maintenance tools, spare parts, and other assets required to repair and maintain company equipment.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(46, 'Textile & Garment Equipment', 'TEXTILE', 'ASSET_TEXTILE', 'Equipment used in textile production and garment manufacturing.', 'Sewing machines, looms, and other textile-related equipment used in garment manufacturing and textile operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(47, 'Air Transport & Aviation Equipment', 'AIR_TRANSPORT', 'ASSET_AIR_TRANSPORT', 'Air transport and aviation-related equipment used in business operations.', 'Aircraft, helicopters, drones, and other air transport equipment used for logistics, delivery, or operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(48, 'Maritime & Shipping Equipment', 'MARITIME', 'ASSET_MARITIME', 'Maritime equipment used for shipping and transport activities.', 'Boats, ships, and other maritime equipment used for logistics, shipping, and water-based operations.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(49, 'Healthcare Devices & Equipment', 'HEALTHCARE', 'ASSET_HEALTHCARE', 'Healthcare devices and medical equipment used by the company.', 'Medical devices, diagnostic tools, and equipment used for employee health, R&D, or healthcare services.', 1, '2025-02-03 12:42:36', '2025-02-03 12:42:36', 1, 1),
(50, 'Miscellaneous Equipment', 'MISC_EQUIP', 'ASSET_MISC_EQUIP', 'Miscellaneous equipment that does not fit in other categories.', 'All other types of equipment that do not fall under specific asset categories but are still essential to business operations.', 1, '2025-02-03 12:42:36', '2025-02-03 02:29:44 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_audit_types`
--

CREATE TABLE `config_audit_types` (
  `cadt_id` int(10) NOT NULL,
  `cadt_name` varchar(90) NOT NULL,
  `cadt_shortname` varchar(60) NOT NULL,
  `cadt_code` varchar(50) NOT NULL,
  `cadt_purpose` varchar(155) NOT NULL,
  `cadt_desc` varchar(255) NOT NULL,
  `cadt_status` int(1) NOT NULL DEFAULT 1,
  `cadt_created_by` int(10) NOT NULL,
  `cadt_updated_by` int(10) NOT NULL,
  `cadt_created_at` varchar(45) NOT NULL,
  `cadt_updated_at` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_audit_types`
--

INSERT INTO `config_audit_types` (`cadt_id`, `cadt_name`, `cadt_shortname`, `cadt_code`, `cadt_purpose`, `cadt_desc`, `cadt_status`, `cadt_created_by`, `cadt_updated_by`, `cadt_created_at`, `cadt_updated_at`) VALUES
(1, 'Financial Audit', 'FinAudit', 'FIN_AUDIT', 'Verify financial statements', 'An audit to ensure accuracy of financial records.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(2, 'Internal Audit', 'IntAudit', 'INT_AUDIT', 'Evaluate internal controls', 'A systematic examination of internal business operations.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(3, 'External Audit', 'ExtAudit', 'EXT_AUDIT', 'Independent financial review', 'An audit conducted by an external firm for compliance.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(4, 'Statutory Audit', 'StatAudit', 'STAT_AUDIT', 'Legal compliance audit', 'An audit required by law to check financial accuracy.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(5, 'Tax Audit', 'TaxAudit', 'TAX_AUDIT', 'Ensure tax law compliance', 'An audit to verify accuracy of tax filings.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(6, 'Forensic Audit', 'ForenAudit', 'FOREN_AUDIT', 'Investigate fraud', 'An audit conducted to detect financial fraud or irregularities.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(7, 'Operational Audit', 'OprAudit', 'OPR_AUDIT', 'Assess business operations', 'An evaluation of efficiency and effectiveness of processes.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(8, 'Compliance Audit', 'CompAudit', 'COMP_AUDIT', 'Regulatory compliance', 'An audit to check if regulations and policies are followed.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(9, 'Performance Audit', 'PerfAudit', 'PERF_AUDIT', 'Review efficiency', 'An audit assessing overall performance and productivity.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(10, 'IT Audit', 'ITAudit', 'IT_AUDIT', 'Evaluate IT systems', 'An audit ensuring security and efficiency of IT infrastructure.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(11, 'Quality Audit', 'QualAudit', 'QUAL_AUDIT', 'Ensure quality standards', 'An audit assessing quality control processes.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(12, 'Process Audit', 'ProcAudit', 'PROC_AUDIT', 'Review process efficiency', 'An audit of business processes to improve workflow.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(13, 'Environmental Audit', 'EnvAudit', 'ENV_AUDIT', 'Assess environmental impact', 'An audit ensuring compliance with environmental laws.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(14, 'Safety Audit', 'SafeAudit', 'SAFE_AUDIT', 'Review workplace safety', 'An audit of safety measures to prevent hazards.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(15, 'Energy Audit', 'EnergyAudit', 'ENERGY_AUDIT', 'Improve energy efficiency', 'An audit reviewing energy consumption patterns.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(16, 'Supplier Audit', 'SuppAudit', 'SUPP_AUDIT', 'Assess supplier standards', 'An audit to ensure suppliers meet quality standards.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(17, 'HR Audit', 'HRAudit', 'HR_AUDIT', 'Evaluate HR policies', 'An audit reviewing human resource management processes.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(18, 'Risk Audit', 'RiskAudit', 'RISK_AUDIT', 'Identify business risks', 'An audit assessing potential financial and operational risks.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(19, 'Social Audit', 'SocAudit', 'SOC_AUDIT', 'Assess social responsibility', 'An audit reviewing company social impact and CSR initiatives.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(20, 'Marketing Audit', 'MktAudit', 'MKT_AUDIT', 'Analyze marketing strategies', 'An audit reviewing marketing efforts and ROI.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(21, 'Ethical Audit', 'EthicAudit', 'ETHIC_AUDIT', 'Ensure ethical practices', 'An audit checking ethical standards in business operations.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(22, 'Data Security Audit', 'DataSecAudit', 'DATA_SEC_AUDIT', 'Review data protection', 'An audit ensuring compliance with data security regulations.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(23, 'Project Audit', 'ProjAudit', 'PROJ_AUDIT', 'Evaluate project performance', 'An audit tracking project execution and deliverables.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(24, 'Regulatory Audit', 'RegAudit', 'REG_AUDIT', 'Verify regulatory compliance', 'An audit ensuring business follows legal requirements.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(25, 'Due Diligence Audit', 'DDAudit', 'DD_AUDIT', 'Evaluate business investment', 'An audit assessing financial and operational health of a company.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(26, 'Construction Audit', 'ConstAudit', 'CONST_AUDIT', 'Assess construction projects', 'An audit ensuring quality and budget compliance in construction.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(27, 'Procurement Audit', 'ProcureAudit', 'PROCURE_AUDIT', 'Evaluate purchasing process', 'An audit reviewing company purchasing and supplier agreements.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(28, 'Healthcare Audit', 'HealthAudit', 'HEALTH_AUDIT', 'Review healthcare standards', 'An audit assessing compliance with medical and safety regulations.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(29, 'Inventory Audit', 'InvAudit', 'INV_AUDIT', 'Verify inventory records', 'An audit ensuring accuracy of stock and inventory records.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(30, 'Bank Audit', 'BankAudit', 'BANK_AUDIT', 'Assess banking operations', 'An audit reviewing financial transactions in banks.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(31, 'Stock Audit', 'StockAudit', 'STOCK_AUDIT', 'Check stock accuracy', 'An audit ensuring stock availability and valuation.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(32, 'Fraud Audit', 'FraudAudit', 'FRAUD_AUDIT', 'Investigate financial fraud', 'An audit identifying fraudulent activities in transactions.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(33, 'Governance Audit', 'GovAudit', 'GOV_AUDIT', 'Review corporate governance', 'An audit ensuring corporate governance policies are followed.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(34, 'ISO Audit', 'ISOAudit', 'ISO_AUDIT', 'Check ISO compliance', 'An audit ensuring compliance with ISO certification standards.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(35, 'GDPR Audit', 'GDPRAudit', 'GDPR_AUDIT', 'Ensure data privacy compliance', 'An audit checking adherence to GDPR regulations.', 1, 1, 1, '2025-02-10 14:51:58', '2025-02-10 14:51:58'),
(36, 'Ethical Sourcing Audit', 'EthicSrcAudit', 'ETHIC_SRC_AUDIT', 'Ensure responsible sourcing', 'An audit checking if materials are sourced ethically.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(37, 'Payroll Audit', 'PayrollAudit', 'PAYROLL_AUDIT', 'Verify payroll accuracy', 'An audit ensuring employees are paid correctly.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(38, 'Fixed Asset Audit', 'FixAssetAudit', 'FIX_ASSET_AUDIT', 'Check company assets', 'An audit ensuring physical and fixed assets are accounted for.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(39, 'Disaster Recovery Audit', 'DisRecAudit', 'DIS_REC_AUDIT', 'Ensure disaster preparedness', 'An audit reviewing company recovery plans in case of disaster.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(40, 'Business Continuity Audit', 'BusContAudit', 'BUS_CONT_AUDIT', 'Review contingency plans', 'An audit ensuring a company can operate during disruptions.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(41, 'EHS Audit', 'EHSAudit', 'EHS_AUDIT', 'Environmental, Health & Safety Compliance', 'An audit checking compliance with EHS regulations.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(42, 'Customer Service Audit', 'CustServAudit', 'CUST_SERV_AUDIT', 'Evaluate customer interactions', 'An audit assessing customer service quality.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(43, 'Warehouse Audit', 'WareAudit', 'WARE_AUDIT', 'Check warehouse management', 'An audit ensuring warehouse processes are efficient.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(44, 'Legal Audit', 'LegAudit', 'LEGAL_AUDIT', 'Review legal compliance', 'An audit assessing compliance with laws and regulations.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(45, 'Brand Audit', 'BrandAudit', 'BRAND_AUDIT', 'Analyze brand perception', 'An audit evaluating brand presence and performance.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(46, 'Sustainability Audit', 'SustainAudit', 'SUSTAIN_AUDIT', 'Evaluate sustainability practices', 'An audit checking environmental and sustainability impact.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(47, 'Smart City Audit', 'SmartCityAudit', 'SMART_CITY_AUDIT', 'Assess smart infrastructure', 'An audit reviewing implementation of smart city technology.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(48, 'Mobile App Security Audit', 'AppSecAudit', 'APP_SEC_AUDIT', 'Review mobile app security', 'An audit ensuring mobile applications are secure.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(49, 'Website Security Audit', 'WebSecAudit', 'WEB_SEC_AUDIT', 'Ensure website protection', 'An audit ensuring website security against cyber threats.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(50, 'Cloud Security Audit', 'CloudSecAudit', 'CLOUD_SEC_AUDIT', 'Review cloud security', 'An audit ensuring cloud systems are secure.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(51, 'Blockchain Audit', 'BlockAudit', 'BLOCK_AUDIT', 'Verify blockchain transactions', 'An audit reviewing blockchain security and transactions.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(52, 'Cryptocurrency Audit', 'CryptoAudit', 'CRYPTO_AUDIT', 'Assess crypto compliance', 'An audit ensuring cryptocurrency transactions follow regulations.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(53, 'Metaverse Audit', 'MetaverseAudit', 'METAVERSE_AUDIT', 'Analyze metaverse activities', 'An audit reviewing metaverse security and transactions.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(54, 'AI Ethics Audit', 'AIEthicsAudit', 'AI_ETHICS_AUDIT', 'Ensure AI transparency', 'An audit ensuring AI follows ethical standards.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(55, 'Social Media Audit', 'SocialAudit', 'SOCIAL_AUDIT', 'Evaluate social presence', 'An audit analyzing social media engagement and compliance.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(56, 'Dark Web Monitoring Audit', 'DarkWebAudit', 'DARK_WEB_AUDIT', 'Detect cyber threats', 'An audit checking for company data leaks on the dark web.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(57, 'IoT Security Audit', 'IoTSecAudit', 'IOT_SEC_AUDIT', 'Assess IoT security', 'An audit ensuring IoT devices are protected against threats.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(58, 'Remote Work Security Audit', 'RemoteAudit', 'REMOTE_AUDIT', 'Evaluate remote work security', 'An audit ensuring remote work environments are secure.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(59, '5G Network Audit', '5GAudit', '5G_AUDIT', 'Review 5G technology', 'An audit checking security and performance of 5G networks.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(60, 'NFT & Digital Asset Audit', 'NFTAudit', 'NFT_AUDIT', 'Assess NFT security', 'An audit ensuring NFT ownership and authenticity.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(61, 'E-commerce Audit', 'EcomAudit', 'ECOM_AUDIT', 'Check online store security', 'An audit ensuring e-commerce platforms are secure and compliant.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(62, 'Logistics Audit', 'LogAudit', 'LOG_AUDIT', 'Evaluate supply chain', 'An audit ensuring logistics and transportation efficiency.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(63, 'Drone Technology Audit', 'DroneAudit', 'DRONE_AUDIT', 'Assess drone security', 'An audit checking safety and compliance of drones.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(64, 'Quantum Computing Audit', 'QuantumAudit', 'QUANTUM_AUDIT', 'Evaluate quantum security', 'An audit ensuring quantum computing follows security guidelines.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(65, 'Gaming Security Audit', 'GameSecAudit', 'GAME_SEC_AUDIT', 'Assess gaming security', 'An audit ensuring gaming platforms are protected against cyber threats.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(66, 'Casino & Gambling Audit', 'CasinoAudit', 'CASINO_AUDIT', 'Check fair gaming practices', 'An audit ensuring casinos and online betting platforms follow regulations.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(67, 'Voice & Biometric Security Audit', 'VoiceBioAudit', 'VOICE_BIO_AUDIT', 'Evaluate biometric authentication', 'An audit checking security in voice and biometric authentication.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(68, 'Cyber Warfare Audit', 'CyberWarAudit', 'CYBER_WAR_AUDIT', 'Review cyber warfare risks', 'An audit assessing risks of cyber warfare attacks.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(69, 'AI Bias Audit', 'AIBiasAudit', 'AI_BIAS_AUDIT', 'Detect AI discrimination', 'An audit ensuring AI models do not have bias or unfair discrimination.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31'),
(70, 'Space Industry Audit', 'SpaceAudit', 'SPACE_AUDIT', 'Review space technology compliance', 'An audit ensuring space-related projects follow regulations.', 1, 1, 1, '2025-02-10 14:53:31', '2025-02-10 14:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `config_company_types`
--

CREATE TABLE `config_company_types` (
  `cct_id` int(10) NOT NULL,
  `cct_name` varchar(75) NOT NULL,
  `cct_registration_act` varchar(255) NOT NULL,
  `cct_legal_structure` varchar(75) NOT NULL,
  `cct_desc` varchar(255) NOT NULL,
  `cct_status` int(1) NOT NULL,
  `cct_created_at` varchar(45) NOT NULL,
  `cct_updated_at` varchar(45) NOT NULL,
  `cct_created_by` int(10) NOT NULL,
  `cct_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_company_types`
--

INSERT INTO `config_company_types` (`cct_id`, `cct_name`, `cct_registration_act`, `cct_legal_structure`, `cct_desc`, `cct_status`, `cct_created_at`, `cct_updated_at`, `cct_created_by`, `cct_updated_by`) VALUES
(1, 'Private Limited (Pvt Ltd)', 'Companies Act, 2013 (India)', 'Private Limited Company (Pvt Ltd)', 'A private limited company with limited liability for its shareholders. Governed by the Companies Act, 2013 in India, this structure is ideal for small to medium-sized businesses.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(2, 'Limited Liability Company (LLC)', 'Limited Liability Company Act', 'Limited Liability Company', 'LLC is a business structure in which the owners have limited personal liability for the company’s debts or liabilities. LLCs combine the advantages of a corporation with those of a partnership.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(3, 'Sole Proprietorship', 'Trade and Business Licensing Act', 'Sole Proprietorship', 'A sole proprietorship is owned and managed by a single individual who is responsible for all aspects of the business, including liabilities and debts. It is the simplest form of business entity.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(4, 'Partnership', 'Partnership Act', 'Partnership', 'A partnership is a business entity owned by two or more individuals who share the profits, losses, and liabilities of the business. Governed by the Partnership Act.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(5, 'Limited Liability Partnership (LLP)', 'Limited Liability Partnership Act', 'Limited Liability Partnership', 'An LLP combines the characteristics of a corporation with those of a partnership. It provides limited liability for the partners while maintaining the flexibility of a partnership structure.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(6, 'Non-Governmental Organization (NGO)', 'Societies Registration Act, 1860 (India)', 'NGO', 'An NGO is a non-profit organization that operates independently of government, focused on social, environmental, or charitable causes. Governed by the Societies Registration Act or similar laws.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(7, 'One Person Company (OPC)', 'Companies Act, 2013 (India)', 'One Person Company', 'An OPC is a unique company type where only one person is required to form a company. It provides the benefits of limited liability and is regulated under the Companies Act, 2013 in India.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(8, 'Cooperative Society', 'Cooperative Societies Act', 'Cooperative Society', 'A cooperative society is an autonomous association of persons united voluntarily to meet common economic, social, and cultural needs. Governed by the Cooperative Societies Act.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(9, 'Franchise', 'Franchise Agreement Act', 'Franchise', 'A franchise is a business model in which a franchisee is authorized to operate a business under the brand name and guidelines of the franchisor. The relationship is governed by a franchise agreement.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(10, 'Charity Organization', 'Charity Registration Act', 'Charity Organization', 'A charity organization is a non-profit entity that exists for charitable purposes. It is regulated by the Charity Registration Act and focuses on community welfare and public benefit.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(11, 'Trust', 'Indian Trusts Act, 1882 (India)', 'Trust', 'A trust is a fiduciary relationship where one party (the trustee) holds assets for the benefit of another (the beneficiary). It is governed by the Indian Trusts Act, 1882 or similar laws in other countries.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(12, 'Government-Owned Corporation', 'Government Corporations Act', 'Government Corporation', 'A government-owned corporation is a legal entity that operates in the commercial sector but is owned or controlled by the government. It is created through specific legislation or acts.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(13, 'Professional Corporation (PC)', 'Professional Corporation Act', 'Professional Corporation', 'A professional corporation is a type of corporation formed by professionals, such as doctors, lawyers, or accountants, who provide professional services. Governed by the Professional Corporation Act.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(14, 'Joint Venture', 'Joint Venture Act', 'Joint Venture', 'A joint venture is a business arrangement where two or more parties combine their resources to achieve a specific goal. The arrangement is governed by a joint venture agreement.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(15, 'Mutual Fund Company', 'Mutual Funds Act', 'Mutual Fund Company', 'A mutual fund company is a business that pools capital from investors to invest in securities. The company is governed by mutual fund laws and regulations to ensure investor protection and transparency.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(16, 'Social Enterprise', 'Social Enterprise Act', 'Social Enterprise', 'A social enterprise is an organization that applies commercial strategies to maximize improvements in human and environmental well-being. It is governed by specific social enterprise regulations.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(17, 'B Corporation (Benefit Corporation)', 'B Corporation Act', 'B Corporation', 'A B Corporation is a for-profit company that meets high social and environmental performance standards, accountability, and transparency. Governed by the B Corporation Act or similar laws.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(18, 'Public Limited Company (PLC)', 'Companies Act, 2013 (India)', 'Public Limited Company', 'A public limited company is a type of corporation that offers shares to the public and is regulated by securities laws. It is a more complex structure suitable for large organizations.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(19, 'Unlimited Company', 'Companies Act, 2013 (India)', 'Unlimited Company', 'An unlimited company has no limit on the liability of its members, meaning their personal assets are at risk in case of the company’s debts.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(20, 'Family-Owned Business', 'Family Business Governance Act', 'Family-Owned Business', 'A family-owned business is a privately-held corporation or business in which family members are involved in its ownership, management, and governance.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(21, 'S Corporation', 'Subchapter S of the Internal Revenue Code (USA)', 'S Corporation', 'An S Corporation is a special type of corporation that allows profits to be passed through to shareholders, avoiding double taxation. Governed by Subchapter S of the Internal Revenue Code in the USA.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(22, 'Close Corporation', 'Close Corporation Act', 'Close Corporation', 'A close corporation is a type of private corporation whose shares are not publicly traded, and ownership is typically restricted to a small group of people. It is governed by the Close Corporation Act.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(23, 'Non-Profit Corporation', 'Non-Profit Corporation Act', 'Non-Profit Corporation', 'A non-profit corporation is an organization formed for purposes other than generating profit, often focused on social, charitable, educational, or cultural goals. Governed by the Non-Profit Corporation Act.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(24, 'Employee-Owned Corporation', 'Employee Stock Ownership Plan Act', 'Employee-Owned Corporation', 'An employee-owned corporation is one in which employees own a significant portion of the company through stock ownership, governed by the Employee Stock Ownership Plan (ESOP) Act.', 1, '2025-01-19 14:33:58', '2025-01-19 14:33:58', 1, 1),
(25, 'Cooperative Corporation', 'Cooperative Corporation Act', 'Cooperative Corporation', 'A cooperative corporation is owned and operated by its members, who share the benefits and profits of the enterprise. It is governed by the Cooperative Corporation Act.', 1, '2025-01-19 14:33:58', '2025-01-19 03:03:33 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_compliance_types`
--

CREATE TABLE `config_compliance_types` (
  `ccct_id` int(10) NOT NULL,
  `ccct_name` varchar(155) NOT NULL,
  `ccct_short_name` varchar(155) NOT NULL,
  `ccct_code` varchar(75) NOT NULL,
  `ccct_desc` varchar(255) NOT NULL,
  `ccct_created_at` varchar(45) NOT NULL,
  `ccct_updated_at` varchar(45) NOT NULL,
  `ccct_status` int(1) NOT NULL DEFAULT 1,
  `ccct_created_by` int(10) NOT NULL,
  `ccct_updated_by` int(10) NOT NULL,
  `ccct_key` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_compliance_types`
--

INSERT INTO `config_compliance_types` (`ccct_id`, `ccct_name`, `ccct_short_name`, `ccct_code`, `ccct_desc`, `ccct_created_at`, `ccct_updated_at`, `ccct_status`, `ccct_created_by`, `ccct_updated_by`, `ccct_key`) VALUES
(1, 'General Data Protection Regulation', 'GDPR', 'GDPR001', 'Regulation for data protection and privacy in the European Union and the European Economic Area, aiming to give control to individuals over their personal data.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'GDPR_COMPLIANCE'),
(2, 'ISO 9001:2015 Quality Management System', 'ISO9001', 'ISO001', 'International standard for quality management systems to ensure products and services meet customer and regulatory requirements.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'ISO9001_COMPLIANCE'),
(3, 'Health and Safety Regulations', 'HSR', 'HSR001', 'Regulation ensuring workplace safety and the health of employees in various work environments to prevent accidents and occupational diseases.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'HSR_COMPLIANCE'),
(4, 'Environmental Management System', 'EMS', 'EMS001', 'Standard for developing an environmental management system to minimize the company’s environmental impact and enhance sustainability.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'EMS_COMPLIANCE'),
(5, 'Sarbanes-Oxley Act', 'SOX', 'SOX001', 'U.S. law that aims to protect investors from fraudulent financial reporting by corporations, primarily through enhanced financial disclosures and corporate governance.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'SOX_COMPLIANCE'),
(6, 'Financial Action Task Force (FATF)', 'FATF', 'FATF001', 'Intergovernmental body that sets international standards for combating money laundering, terrorist financing, and other threats to the international financial system.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'FATF_COMPLIANCE'),
(7, 'Anti-Money Laundering (AML)', 'AML', 'AML001', 'Regulations aimed at preventing money laundering activities and the financing of terrorism through the monitoring of financial transactions and reporting suspicious activities.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'AML_COMPLIANCE'),
(8, 'Food Safety Standards', 'FSS', 'FSS001', 'Regulations and standards aimed at ensuring food safety, sanitation, and hygiene to prevent foodborne illnesses and ensure safe food production processes.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'FSS_COMPLIANCE'),
(9, 'Consumer Protection Laws', 'CPL', 'CPL001', 'Laws aimed at protecting consumers from unfair business practices, defective products, fraud, or unsafe goods and services, ensuring consumer rights and welfare.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'CPL_COMPLIANCE'),
(10, 'Fair Labor Standards Act', 'FLSA', 'FLS001', 'Labor law that ensures minimum wage, overtime pay eligibility, and workplace standards for employees working in the United States.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'FLSA_COMPLIANCE'),
(11, 'Intellectual Property Rights (IPR)', 'IPR', 'IPR001', 'Set of regulations governing the use and protection of intellectual property such as patents, trademarks, and copyrights to prevent unauthorized use and infringement.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'IPR_COMPLIANCE'),
(12, 'Equal Employment Opportunity', 'EEO', 'EEO001', 'Laws prohibiting employment discrimination based on race, color, religion, sex, or national origin, promoting fair treatment in hiring, firing, and compensation practices.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'EEO_COMPLIANCE'),
(13, 'HIPAA Compliance', 'HIPAA', 'HIPAA001', 'U.S. law designed to provide privacy standards for protecting sensitive patient data in the healthcare industry, ensuring the confidentiality and security of health information.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'HIPAA_COMPLIANCE'),
(14, 'Gramm-Leach-Bliley Act (GLBA)', 'GLBA', 'GLBA001', 'U.S. federal law that protects consumers’ financial information held by financial institutions, ensuring privacy and data protection in financial transactions.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'GLBA_COMPLIANCE'),
(15, 'Payment Card Industry Data Security Standard', 'PCI DSS', 'PCI001', 'Set of standards for the protection of payment card data, ensuring secure transactions and protecting consumers from fraud and data breaches in financial systems.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'PCI_COMPLIANCE'),
(16, 'Foreign Corrupt Practices Act', 'FCPA', 'FCPA001', 'U.S. law aimed at preventing bribery and corrupt business practices among U.S. companies operating abroad, ensuring compliance with anti-corruption standards.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'FCPA_COMPLIANCE'),
(17, 'ISO 27001 Information Security Management System', 'ISO27001', 'ISO27001', 'International standard for managing information security risks, including data protection, integrity, and confidentiality for organizations handling sensitive data.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'ISO27001_COMPLIANCE'),
(18, 'Export Control Laws', 'ECL', 'ECL001', 'Regulations that control the export of sensitive technologies, information, and goods to foreign nations to ensure national security and compliance with international treaties.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'ECL_COMPLIANCE'),
(19, 'Tax Compliance', 'TAX', 'TAX001', 'Regulations related to the accurate and timely payment of taxes, including income, sales, and other business-related taxes in accordance with local, state, and federal law.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'TAX_COMPLIANCE'),
(20, 'Transparency International Standards', 'TI', 'TI001', 'Set of global standards for fighting corruption, promoting transparency, and improving ethical business practices through enhanced corporate governance and reporting.', '2025-01-19 18:43:28', '2025-01-19 18:43:28', 1, 1, 1, 'TI_COMPLIANCE'),
(21, 'Securities and Exchange Commission (SEC)', 'SEC', 'SEC001', 'U.S. federal agency responsible for enforcing securities laws and regulating the securities industry, protecting investors and maintaining fair and efficient markets.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'SEC_COMPLIANCE'),
(22, 'Federal Aviation Administration (FAA) Compliance', 'FAA', 'FAA001', 'U.S. government agency responsible for regulating and overseeing civil aviation, ensuring safety and regulatory compliance in aviation operations.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'FAA_COMPLIANCE'),
(23, 'Federal Trade Commission (FTC)', 'FTC', 'FTC001', 'U.S. agency responsible for protecting consumers and promoting competition by enforcing antitrust and consumer protection laws.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'FTC_COMPLIANCE'),
(24, 'Occupational Safety and Health Administration (OSHA)', 'OSHA', 'OSHA001', 'U.S. agency ensuring workplace safety by enforcing standards and regulations designed to protect employees from hazards and ensure a safe working environment.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'OSHA_COMPLIANCE'),
(25, 'Financial Industry Regulatory Authority (FINRA)', 'FINRA', 'FINRA001', 'Non-governmental organization that regulates member brokerage firms and exchange markets to protect investors and maintain market integrity.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'FINRA_COMPLIANCE'),
(26, 'California Consumer Privacy Act (CCPA)', 'CCPA', 'CCPA001', 'California state law that enhances privacy rights and consumer protection for residents of California, regulating the collection and sale of personal data.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'CCPA_COMPLIANCE'),
(27, 'The Children\'s Online Privacy Protection Act (COPPA)', 'COPPA', 'COPPA001', 'U.S. law designed to protect the privacy of children under the age of 13, particularly in online services and apps that collect personal data.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'COPPA_COMPLIANCE'),
(28, 'International Traffic in Arms Regulations (ITAR)', 'ITAR', 'ITAR001', 'U.S. government regulations that control the export and import of defense-related articles, services, and technologies to ensure national security and foreign policy interests.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'ITAR_COMPLIANCE'),
(29, 'Generalized System of Preferences (GSP)', 'GSP', 'GSP001', 'U.S. trade program that provides preferential tariff treatment to certain goods imported from developing countries, encouraging economic growth in those countries.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'GSP_COMPLIANCE'),
(30, 'Anti-Bribery and Corruption (ABC)', 'ABC', 'ABC001', 'Laws and regulations designed to prevent bribery and corruption in both the private and public sectors, promoting fair business practices and ethical behavior.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'ABC_COMPLIANCE'),
(31, 'Corporate Social Responsibility (CSR)', 'CSR', 'CSR001', 'Self-regulation by companies where they commit to conducting business ethically, ensuring a positive impact on society and the environment.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'CSR_COMPLIANCE'),
(32, 'FATF Travel Rule Compliance', 'FATFTRC', 'FATFTRC001', 'Regulation that requires financial institutions to collect and share information about the originator and beneficiary of wire transfers to prevent money laundering and terrorism financing.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'FATFTRC_COMPLIANCE'),
(33, 'UK Bribery Act', 'UKBA', 'UKBA001', 'U.K. law that criminalizes bribery and corruption in both the public and private sectors, providing guidelines on corporate anti-bribery policies and measures.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'UKBA_COMPLIANCE'),
(34, 'Securities Act of 1933', 'SA1933', 'SA1933', 'U.S. federal law that regulates the offer and sale of securities to protect investors and ensure transparency in the financial markets.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'SA1933_COMPLIANCE'),
(35, 'Transparency in Coverage Rule', 'TCR', 'TCR001', 'Regulation that requires health insurers to make pricing and coverage information more transparent to patients, allowing them to make better healthcare decisions.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'TCR_COMPLIANCE'),
(36, 'Data Localization Laws', 'DL', 'DL001', 'Laws that require data to be stored within the borders of a specific country or region, often for security, privacy, and regulatory purposes.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'DL_COMPLIANCE'),
(37, 'Basel III Compliance', 'BaselIII', 'BASELIII001', 'International regulatory framework established to strengthen regulation, supervision, and risk management within the banking sector, ensuring financial stability and reducing risks to the global economy.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'BASELIII_COMPLIANCE'),
(38, 'General Data Protection Regulation (GDPR) for Non-EU', 'GDPR-NEU', 'GDPR-NEU001', 'Regulation that applies to all companies processing the personal data of individuals located in the EU, even if the company itself is outside of the EU, ensuring privacy and data protection.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'GDPR-NEU_COMPLIANCE'),
(39, 'United Nations Global Compact', 'UNGC', 'UNGC001', 'A voluntary initiative based on CEO commitments to implement universal sustainability principles and to take steps to support UN goals regarding human rights, labor, environment, and anti-corruption.', '2025-01-19 18:43:41', '2025-01-19 18:43:41', 1, 1, 1, 'UNGC_COMPLIANCE'),
(40, 'Global Data Protection Regulation (GDPR) for Cloud Providers', 'GDPR-CP', 'GDPRCP001', 'A specific set of GDPR requirements designed for cloud service providers who handle sensitive personal data across borders.', '2025-01-19 18:43:41', '2025-01-19 07:07:23 PM', 1, 1, 1, 'GDPRCP_COMPLIANCE');

-- --------------------------------------------------------

--
-- Table structure for table `config_credentials_categories`
--

CREATE TABLE `config_credentials_categories` (
  `cccc_id` int(10) NOT NULL,
  `cccc_name` varchar(155) NOT NULL,
  `cccc_shortname` varchar(75) NOT NULL,
  `cccc_code` varchar(75) NOT NULL,
  `cccc_purpose` varchar(255) NOT NULL,
  `cccc_desc` varchar(525) NOT NULL,
  `cccc_status` int(1) NOT NULL DEFAULT 1,
  `cccc_created_at` varchar(45) NOT NULL,
  `cccc_updated_at` varchar(45) NOT NULL,
  `cccc_created_by` int(10) NOT NULL,
  `cccc_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_credentials_categories`
--

INSERT INTO `config_credentials_categories` (`cccc_id`, `cccc_name`, `cccc_shortname`, `cccc_code`, `cccc_purpose`, `cccc_desc`, `cccc_status`, `cccc_created_at`, `cccc_updated_at`, `cccc_created_by`, `cccc_updated_by`) VALUES
(1, 'Social Media Credentials', 'social_media', 'SMC', 'Used for managing social media accounts.', 'Includes username, password, login URL, and notes for platforms like Facebook, Twitter, LinkedIn, Instagram, etc.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(2, 'Government Portal Credentials', 'gov_portal', 'GPC', 'Used for accessing government-related services.', 'Includes login details for tax portals, e-governance platforms, Aadhar, passport, and other government websites.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(3, 'Billing Software Credentials', 'billing_software', 'BSC', 'Used for logging into billing and invoicing software.', 'Includes login credentials for software like QuickBooks, Zoho Invoice, FreshBooks, Tally, etc.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(4, 'Credit Card Credentials', 'credit_card', 'CCC', 'Used for storing credit card information securely.', 'Includes card number, expiry date, CVV, and associated login credentials for managing payments.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(5, 'Debit Card Credentials', 'debit_card', 'DCC', 'Used for managing debit card information.', 'Includes card number, expiry date, CVV, and linked bank login details.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(6, 'Banking & Finance Credentials', 'banking_finance', 'BFC', 'Used for accessing online banking and financial accounts.', 'Includes login credentials for net banking, payment gateways, stock trading platforms, and financial management tools.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(7, 'ERP & Business Software Credentials', 'erp_business', 'EBS', 'Used for enterprise resource planning and business software.', 'Includes login details for SAP, Microsoft Dynamics, Odoo, and other business management platforms.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(8, 'Legal & Compliance Portal Credentials', 'legal_compliance', 'LCC', 'Used for accessing legal and compliance management portals.', 'Includes login credentials for legal case management, government compliance websites, and regulatory tools.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(9, 'Affiliate & Ad Network Credentials', 'affiliate_ads', 'AAC', 'Used for managing ad networks and affiliate programs.', 'Includes login details for Google Ads, Facebook Ads, Amazon Affiliates, and other marketing platforms.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(10, 'Customer Support & Helpdesk Credentials', 'support_helpdesk', 'CSH', 'Used for managing customer support platforms.', 'Includes login credentials for Zendesk, Freshdesk, LiveChat, and other ticketing systems.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(11, 'AI & Automation Tool Credentials', 'ai_automation', 'AIC', 'Used for AI platforms and automation tools.', 'Includes login credentials for OpenAI, Zapier, RPA tools, and machine learning APIs.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(12, 'Cybersecurity & Ethical Hacking Credentials', 'cybersecurity', 'CEC', 'Used for cybersecurity tools and ethical hacking portals.', 'Includes login details for Kali Linux, Metasploit, Burp Suite, and other security testing platforms.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(13, 'YouTube & Video Platform Credentials', 'youtube_video', 'YVC', 'Used for managing YouTube channels and other video platforms.', 'Includes login credentials for YouTube, Vimeo, Dailymotion, and video monetization settings.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(14, 'Hardware & Device Logins', 'hardware_device', 'HDC', 'Used for accessing hardware systems and devices.', 'Includes credentials for routers, firewalls, BIOS, CCTV systems, and other hardware devices.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(15, 'Domain Credentials', 'domain_hosting', 'DHC', 'Used for managing domain names', 'Includes credentials for domain registrars, DNS management, and SSL settings.', 1, '2025-02-03 15:14:27', '2025-02-03 03:19:15 PM', 1, 1),
(16, 'Email & Communication Credentials', 'email_comm', 'ECC', 'Used for accessing email and communication platforms.', 'Includes login credentials for Gmail, Outlook, ProtonMail, Slack, Zoom, Microsoft Teams, etc.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(17, 'VPN & Remote Access Credentials', 'vpn_remote', 'VRC', 'Used for secure network access.', 'Includes credentials for VPNs, remote desktops, and network authentication systems.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(18, 'Cloud Storage & Hosting Credentials', 'cloud_hosting', 'CHC', 'Used for managing cloud storage and hosting accounts.', 'Includes login details for AWS, Google Cloud, Dropbox, OneDrive, and web hosting platforms.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(19, 'Streaming & Entertainment Credentials', 'stream_ent', 'SEC', 'Used for managing streaming and entertainment accounts.', 'Includes credentials for Netflix, Amazon Prime, Disney+, Spotify, YouTube Premium, etc.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(20, 'Gaming & Esports Credentials', 'gaming_esports', 'GEC', 'Used for online gaming platforms and esports accounts.', 'Includes login credentials for Steam, PlayStation Network, Xbox Live, Epic Games, and esports profiles.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(21, 'IoT & Smart Home Credentials', 'iot_smart_home', 'ISC', 'Used for managing smart home devices.', 'Includes login details for Alexa, Google Home, smart security systems, and IoT-connected devices.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(22, 'Freelancing & Job Portal Credentials', 'freelance_job', 'FJC', 'Used for freelancing and job applications.', 'Includes login credentials for platforms like Upwork, Fiverr, LinkedIn Jobs, Naukri, Indeed, and job portals.', 1, '2025-02-03 15:14:27', '2025-02-03 15:14:27', 1, 1),
(23, 'Databases &amp; Server Credentials', 'db_servers', 'DBS', 'Used in various projects where database connection is required!', 'Used in various projects where database connection is required!', 1, '2025-02-03 03:18:19 PM', '2025-02-03 03:18:19 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_department`
--

CREATE TABLE `config_department` (
  `ccd_id` int(10) NOT NULL,
  `ccd_name` varchar(155) NOT NULL,
  `ccd_short_name` varchar(155) NOT NULL,
  `ccd_code` varchar(155) NOT NULL,
  `ccd_desc` varchar(255) NOT NULL,
  `ccd_status` int(1) NOT NULL DEFAULT 1,
  `ccd_created_at` varchar(45) NOT NULL,
  `ccd_updated_at` varchar(45) NOT NULL,
  `ccd_created_by` int(10) NOT NULL,
  `ccd_updated_by` int(10) NOT NULL,
  `ccd_type` varchar(155) NOT NULL,
  `ccd_key` varchar(155) NOT NULL,
  `ccd_goals` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_department`
--

INSERT INTO `config_department` (`ccd_id`, `ccd_name`, `ccd_short_name`, `ccd_code`, `ccd_desc`, `ccd_status`, `ccd_created_at`, `ccd_updated_at`, `ccd_created_by`, `ccd_updated_by`, `ccd_type`, `ccd_key`, `ccd_goals`) VALUES
(1, 'Human Resources', 'HR', 'HR001', 'Responsible for managing employee relations, recruitment, training, payroll, and compliance with labor laws.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'HR_DEPT', 'Attract, develop, and retain top talent.'),
(2, 'Finance', 'FIN', 'FIN001', 'Handles budgeting, financial planning, accounting, and audits to manage the company’s financial resources.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'FIN_DEPT', 'Ensure financial stability and growth.'),
(3, 'Operations', 'OPS', 'OPS001', 'Oversees daily activities, process optimization, supply chain, and operational efficiency.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'OPS_DEPT', 'Enhance operational excellence and efficiency.'),
(4, 'Sales', 'SALES', 'SAL001', 'Focuses on generating revenue through sales of products and services and maintaining client relationships.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'SAL_DEPT', 'Increase revenue and expand market share.'),
(5, 'Marketing', 'MKT', 'MKT001', 'Manages advertising, promotions, customer engagement, and brand awareness strategies.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'MKT_DEPT', 'Build and strengthen brand presence.'),
(6, 'Information Technology', 'IT', 'IT001', 'Provides technical support, manages IT infrastructure, and ensures cybersecurity.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'IT_DEPT', 'Ensure robust and secure IT infrastructure.'),
(7, 'Customer Service', 'CS', 'CS001', 'Handles customer inquiries, complaints, and support requests to maintain customer satisfaction.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'CS_DEPT', 'Provide exceptional customer experience.'),
(8, 'Research and Development', 'R&D', 'RND001', 'Focuses on innovation and developing new products or improving existing offerings.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'RND_DEPT', 'Drive innovation and product advancement.'),
(9, 'Legal', 'LEGAL', 'LEG001', 'Manages compliance with regulations, contracts, and corporate governance to mitigate legal risks.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'LEG_DEPT', 'Protect the company from legal risks.'),
(10, 'Procurement', 'PROC', 'PROC001', 'Handles sourcing and purchasing of goods, services, and materials required for operations.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'PROC_DEPT', 'Streamline procurement processes and reduce costs.'),
(11, 'Product Management', 'PM', 'PM001', 'Oversees planning, development, and lifecycle of products to meet market demands.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'PM_DEPT', 'Deliver products that meet customer needs.'),
(12, 'Quality Assurance', 'QA', 'QA001', 'Ensures products or services meet quality standards and customer expectations.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'QA_DEPT', 'Maintain and improve product quality.'),
(13, 'Administration', 'ADMIN', 'ADM001', 'Handles office management, logistics, and general administrative tasks.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'ADMIN_DEPT', 'Ensure smooth day-to-day operations.'),
(14, 'Public Relations', 'PR', 'PR001', 'Manages communication with media, public, and stakeholders to maintain a positive image.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'PR_DEPT', 'Enhance and protect the company’s reputation.'),
(15, 'Training and Development', 'T&D', 'TND001', 'Focuses on employee skill enhancement and leadership development.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'TND_DEPT', 'Empower employees through continuous learning.'),
(16, 'Engineering', 'ENG', 'ENG001', 'Handles technical designs, prototypes, and system or machinery maintenance.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'ENG_DEPT', 'Design and deliver technical excellence.'),
(17, 'Facilities Management', 'FM', 'FM001', 'Oversees maintenance, safety, and operations of physical premises like offices or warehouses.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'FM_DEPT', 'Ensure safe and efficient facilities.'),
(18, 'Strategy and Planning', 'STRATEGY', 'STR001', 'Develops long-term strategies, business plans, and identifies growth opportunities.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'STR_DEPT', 'Drive sustainable growth and competitive advantage.'),
(19, 'Logistics and Supply Chain', 'LSC', 'LSC001', 'Ensures efficient movement of goods, from procurement to distribution.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'LSC_DEPT', 'Optimize supply chain operations.'),
(20, 'Business Development', 'BD', 'BD001', 'Identifies new opportunities, partnerships, and revenue streams to expand the business.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Core', 'BD_DEPT', 'Explore and capitalize on growth opportunities.'),
(21, 'Corporate Social Responsibility', 'CSR', 'CSR001', 'Focuses on ethical practices, community engagement, and environmental sustainability.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'CSR_DEPT', 'Foster positive community and environmental impact.'),
(22, 'Compliance and Risk Management', 'CRM', 'CRM001', 'Ensures adherence to industry standards and identifies potential risks.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'CRM_DEPT', 'Maintain regulatory compliance and mitigate risks.'),
(23, 'Security', 'SEC', 'SEC001', 'Manages physical and digital security to ensure safety and data protection.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'SEC_DEPT', 'Protect people, assets, and data.'),
(24, 'Analytics and Insights', 'AI', 'AI001', 'Analyzes data to support decision-making and track performance.', 1, '2025-01-19 18:05:50', '2025-01-19 18:05:50', 1, 1, 'Support', 'AI_DEPT', 'Provide actionable insights for better decisions.'),
(25, 'Creative and Design', 'CD', 'CD001', '1', 1, '2025-01-19 18:05:50', '2025-01-19 06:33:16 PM', 1, 1, 'Support', 'CD_DEPT', 'Enhance visual appeal and brand identity.');

-- --------------------------------------------------------

--
-- Table structure for table `config_document_types`
--

CREATE TABLE `config_document_types` (
  `ccdt_id` int(10) NOT NULL,
  `ccdt_name` varchar(155) NOT NULL,
  `ccdt_shortname` varchar(75) NOT NULL,
  `ccdt_code` varchar(100) NOT NULL,
  `ccdt_tags` varchar(155) NOT NULL,
  `ccdt_desc` varchar(255) NOT NULL,
  `ccdt_status` int(1) NOT NULL DEFAULT 1,
  `ccdt_purpose` varchar(100) NOT NULL,
  `ccdt_created_at` varchar(45) NOT NULL,
  `ccdt_updated_at` varchar(45) NOT NULL,
  `ccdt_created_by` int(10) NOT NULL,
  `ccdt_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_document_types`
--

INSERT INTO `config_document_types` (`ccdt_id`, `ccdt_name`, `ccdt_shortname`, `ccdt_code`, `ccdt_tags`, `ccdt_desc`, `ccdt_status`, `ccdt_purpose`, `ccdt_created_at`, `ccdt_updated_at`, `ccdt_created_by`, `ccdt_updated_by`) VALUES
(1, 'Interview Invitation Letter', 'INTERV_INVITE', 'INT001', 'HR, Interview, Recruitment', 'Document inviting a candidate for an interview.', 1, 'For scheduling and confirming interview appointments.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(2, 'Offer Letter', 'OFFER', 'OFFER001', 'HR, Offer, Recruitment', 'Document offering a job to a candidate.', 1, 'To formally offer a position to the selected candidate.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(3, 'Employee Contract', 'EMP_CONTRACT', 'EMP001', 'HR, Contract, Employment', 'Document for formalizing the terms and conditions of employment with the employee.', 1, 'To finalize the employment terms and legally bind both parties.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(4, 'Employee Handbook', 'EMP_HAND', 'EMP002', 'HR, Policies, Employee', 'A guide to company policies, expectations, and work environment.', 1, 'To provide employees with a clear understanding of company policies and expectations.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(5, 'Probation Period Evaluation', 'PROB_EVAL', 'PROB001', 'HR, Evaluation, Probation', 'Document used to assess an employee’s performance during their probation period.', 1, 'For evaluating the performance of new hires during their probationary period.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(6, 'Induction Document', 'INDUCTION', 'IND001', 'HR, Induction, New Hire', 'Document that provides new employees with essential information about the company.', 1, 'To onboard new employees and provide them with basic company and role-related information.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(7, 'Performance Appraisal', 'PERF_APPRAISAL', 'PERF001', 'HR, Performance, Review', 'Document evaluating employee performance against set goals and objectives.', 1, 'To assess the work performance and achievements of an employee.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(8, 'Promotion Letter', 'PROMO_LETTER', 'PROMO001', 'HR, Promotion, Employee', 'Document offering an employee a promotion to a higher role within the organization.', 1, 'To confirm and officially announce the employee’s promotion.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(9, 'Salary Slip', 'SALARY_SLIP', 'SAL001', 'HR, Salary, Payroll', 'Document detailing the breakdown of employee salary, bonuses, and deductions for a given period.', 1, 'For employees to track and review their monthly earnings and deductions.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(10, 'Leave Application Form', 'LEAVE_APP', 'LEAVE001', 'HR, Leave, Employee', 'Form used by employees to request leave for personal reasons, sickness, or holidays.', 1, 'To document and process employee leave requests and approvals.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(11, 'Sick Leave Certificate', 'SICK_CERT', 'SICK001', 'HR, Sick Leave, Employee', 'Certificate issued to an employee in case of illness or injury that justifies their absence from work.', 1, 'To support the employee’s leave request for sickness-related absences.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(12, 'Exit Interview Document', 'EXIT_INTERVIEW', 'EXIT001', 'HR, Exit, Employee', 'Document used for gathering feedback from an employee upon their departure from the company.', 1, 'To gather valuable insights from departing employees regarding company policies and work culture.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(13, 'Resignation Acceptance Letter', 'RESIGN_ACCEPT', 'RESIGN001', 'HR, Resignation, Employee', 'Letter acknowledging an employee’s resignation and their intent to leave the company.', 1, 'To officially accept the employee’s resignation and start the offboarding process.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(14, 'Final Settlement Letter', 'FINAL_SETTLE', 'FINSET001', 'HR, Settlement, Employee', 'Document outlining the final financial settlement between the company and the employee upon termination or resignation.', 1, 'To document all payments, benefits, and dues that need to be cleared for the exiting employee.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(15, 'Relieving Letter', 'RELIEVING', 'REL001', 'HR, Relieving, Employee', 'Letter issued to the employee upon completion of their employment term, officially releasing them from their duties.', 1, 'To formally release an employee from their role in the company.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(16, 'Experience Letter', 'EXPERIENCE', 'EXP001', 'HR, Experience, Employee', 'Document that summarizes an employee’s work experience, role, and contributions during their tenure at the company.', 1, 'To confirm the employee’s time and work experience at the company and to provide references for futu', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(17, 'Termination Letter', 'TERMINATION', 'TERM001', 'HR, Termination, Employee', 'Letter issued when an employee is being terminated from their role due to various reasons.', 1, 'To officially notify the employee about the termination of their employment.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(18, 'Severance Agreement', 'SEVERANCE', 'SEV001', 'HR, Severance, Employee', 'Agreement outlining the terms and conditions for severance pay or benefits after an employee leaves the company.', 1, 'To define the severance package and conditions under which the employee will receive benefits after ', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(19, 'Non-Disclosure Agreement (NDA)', 'NDA', 'NDA001', 'HR, Legal, Confidentiality', 'Agreement that prevents employees from disclosing confidential company information during and after their employment.', 1, 'To protect sensitive company information from being shared or misused by the employee.', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(20, 'Non-Compete Agreement', 'NON_COMPETE', 'NC001', 'HR, Legal, Competition', 'Agreement preventing an employee from working with competitors for a specified period after leaving the company.', 1, 'To ensure the employee does not join competing companies or start a competing business after departu', '2025-01-19 19:28:59', '2025-01-19 19:28:59', 1, 1),
(21, 'Asset Assignment Letter', 'ASSET_ASSIGN', 'ASSET001', 'HR, Assets, Employee, Assignment', 'Letter issued to employees regarding the assignment of company assets (e.g., laptops, mobile phones).', 1, 'To formally assign company assets to employees for their use.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(22, 'Asset Return Form', 'ASSET_RETURN', 'RETURN001', 'HR, Assets, Employee, Return', 'Document for employees to return company assets at the end of employment or project termination.', 1, 'To track and ensure the return of company assets by the employee.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(23, 'Asset Transfer Agreement', 'ASSET_TRANSFER', 'TRANS001', 'HR, Assets, Transfer', 'Agreement used when transferring ownership of company assets from one employee or department to another.', 1, 'To document the transfer of assets between employees or departments.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(24, 'Asset Usage Policy', 'ASSET_POLICY', 'POLICY001', 'HR, Assets, Policy', 'Document outlining the company’s rules and regulations regarding the use of assets assigned to employees.', 1, 'To ensure employees understand the proper usage and care of company assets.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(25, 'Asset Depreciation Report', 'ASSET_DEPRECIATION', 'DEP001', 'Finance, Assets, Depreciation', 'Document detailing the depreciation value of a company asset over time.', 1, 'To track the depreciation of company assets for accounting and financial purposes.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(26, 'Asset Purchase Agreement', 'ASSET_PURCHASE', 'PURCHASE001', 'Finance, Assets, Purchase', 'Agreement used to formalize the purchase of assets by the company.', 1, 'To document the terms and conditions of asset purchase transactions.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(27, 'Asset Disposal Agreement', 'ASSET_DISPOSAL', 'DISPOSAL001', 'Finance, Assets, Disposal', 'Agreement documenting the sale, disposal, or write-off of company assets.', 1, 'To outline the terms under which company assets are sold or disposed of.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(28, 'Asset Audit Report', 'ASSET_AUDIT', 'AUDIT001', 'HR, Finance, Assets, Audit', 'Document providing an audit of company assets, including their condition, usage, and location.', 1, 'To conduct an internal audit of company assets and verify their usage and condition.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(29, 'Asset Maintenance Report', 'ASSET_MAINTENANCE', 'MAINT001', 'HR, Assets, Maintenance', 'Report documenting the maintenance or repair of company assets.', 1, 'To keep track of maintenance activities related to company assets.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(30, 'Asset Ownership Certificate', 'ASSET_OWNERSHIP', 'OWNERSHIP001', 'Legal, Assets, Ownership', 'Legal certificate verifying the company’s ownership of a specific asset.', 1, 'To establish and verify ownership of company assets for legal and tax purposes.', '2025-01-19 19:29:12', '2025-01-19 19:29:12', 1, 1),
(31, 'Employee ID Card', 'EMP_ID_CARD', 'EMPID001', 'HR, Employee, Identification', 'Card issued to employees for identification and access to company premises.', 1, 'To provide employees with a unique identity and access to company facilities.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(32, 'Confidentiality Agreement', 'CONF_AGREEMENT', 'CONF001', 'HR, Legal, Confidentiality', 'Agreement to protect confidential company information from being disclosed by employees.', 1, 'To ensure employees maintain confidentiality of sensitive company data and trade secrets.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(33, 'Employee Grievance Form', 'EMP_GRIEVANCE', 'GRIEV001', 'HR, Employee, Grievance', 'Form for employees to express grievances or issues they face at work.', 1, 'To provide a formal process for employees to submit workplace concerns or complaints.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(34, 'Employee Promotion Form', 'PROMO_FORM', 'PROMO002', 'HR, Employee, Promotion', 'Form used to request or process employee promotions within the organization.', 1, 'To document the promotion request or approval process for employees.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(35, 'Employee Warning Letter', 'EMP_WARNING', 'WARN001', 'HR, Employee, Disciplinary', 'Letter issued when an employee’s performance or behavior fails to meet company standards.', 1, 'To formally warn an employee regarding their behavior or performance in the company.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(36, 'Employee Termination Checklist', 'EMP_TERM_CHECKLIST', 'TERM001', 'HR, Employee, Termination', 'Checklist to ensure all necessary steps are taken during the termination of an employee.', 1, 'To facilitate and track the offboarding process of an employee.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(37, 'Retirement Letter', 'RETIREMENT', 'RET001', 'HR, Employee, Retirement', 'Document issued to an employee who is retiring from the company after years of service.', 1, 'To formally acknowledge an employee’s retirement and recognize their contributions.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(38, 'Salary Increment Letter', 'SALARY_INCREMENT', 'SALIN001', 'HR, Employee, Salary', 'Letter confirming a salary increase for an employee after performance evaluation or policy changes.', 1, 'To notify employees of their salary increments and the reasons behind them.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(39, 'Non-Disclosure Agreement (NDA) Renewal', 'NDA_RENEWAL', 'NDAR001', 'HR, Legal, Confidentiality', 'Renewal of an existing Non-Disclosure Agreement for employees continuing in the organization.', 1, 'To ensure confidentiality agreements remain in effect as employees continue their employment.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(40, 'Probation Extension Letter', 'PROB_EXTENSION', 'PROBEXT001', 'HR, Employee, Probation', 'Letter extending the probationary period of an employee based on performance evaluations.', 1, 'To officially extend the employee’s probation period for further evaluation.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(41, 'Job Description', 'JOB_DESC', 'JD001', 'HR, Recruitment, Employee', 'Document outlining the responsibilities, qualifications, and expectations for a job role.', 1, 'To clearly define the duties and expectations for a specific job position in the company.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(42, 'Employee Attendance Record', 'EMP_ATTENDANCE', 'ATTEND001', 'HR, Employee, Attendance', 'Record used to track the attendance of employees, including leaves and absences.', 1, 'To maintain accurate records of employee attendance and working hours.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(43, 'Employee Transfer Letter', 'EMP_TRANSFER', 'TRANS002', 'HR, Employee, Transfer', 'Letter confirming the transfer of an employee to a different department or location.', 1, 'To officially notify an employee about their job transfer within the company.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(44, 'Overtime Approval Form', 'OT_APPROVAL', 'OT001', 'HR, Employee, Overtime', 'Form used to approve and document overtime worked by employees.', 1, 'To ensure proper authorization and documentation of overtime hours worked by employees.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(45, 'Employee Medical Leave Form', 'EMP_MEDICAL_LEAVE', 'MEDLEAVE001', 'HR, Employee, Medical', 'Form used by employees to request medical leave due to illness or injury.', 1, 'To formally request medical leave for sickness or injury-related absences.', '2025-01-19 19:29:46', '2025-01-19 19:29:46', 1, 1),
(46, 'Invoice', 'INVOICE', 'INV001', 'Accounts, Finance, Billing', 'Document issued to customers detailing the amount owed for goods or services provided.', 1, 'To bill clients for services rendered or products sold.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(47, 'Receipt Voucher', 'RECEIPT_VOUCHER', 'RECEIPT001', 'Accounts, Finance, Payment', 'Document acknowledging the receipt of payment from a client or customer.', 1, 'To acknowledge and record payments made by clients.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(48, 'Payment Voucher', 'PAYMENT_VOUCHER', 'PAYMENT001', 'Accounts, Finance, Payment', 'Document used to authorize the payment of funds to suppliers, employees, or other creditors.', 1, 'To approve and authorize payments for goods or services received by the company.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(49, 'Bank Statement', 'BANK_STATEMENT', 'BANK001', 'Accounts, Finance, Banking', 'Document issued by a bank that lists all account transactions over a given period.', 1, 'To track and verify the transactions in the company’s bank account.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(50, 'Payroll Report', 'PAYROLL_REPORT', 'PAYROLL001', 'HR, Accounts, Payroll', 'Report detailing the salaries, wages, bonuses, and deductions for employees.', 1, 'To summarize the payroll information for employees, including deductions and earnings.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(51, 'Tax Return', 'TAX_RETURN', 'TAX001', 'Accounts, Finance, Taxation', 'Document filed with the tax authorities detailing the taxes owed or refunded for the company or individual.', 1, 'To report earnings and taxes to the government authorities for tax filing.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(52, 'Expense Report', 'EXPENSE_REPORT', 'EXP001', 'Accounts, Finance, Expenses', 'Document used by employees or departments to submit details of business-related expenses for reimbursement or reporting.', 1, 'To track and manage business expenses for accurate reporting and reimbursement.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(53, 'Balance Sheet', 'BALANCE_SHEET', 'BAL001', 'Accounts, Finance, Financial', 'Document that summarizes the company’s assets, liabilities, and shareholder equity at a specific point in time.', 1, 'To give an overview of the company’s financial position at a specific moment.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(54, 'Profit and Loss Statement', 'P&L_STATEMENT', 'PL001', 'Accounts, Finance, Financial', 'Document summarizing the revenues, costs, and expenses during a specific period of time.', 1, 'To show the company’s financial performance over a period of time, typically monthly, quarterly, or ', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(55, 'General Ledger', 'GENERAL_LEDGER', 'GL001', 'Accounts, Finance, Accounting', 'Document providing a complete record of all financial transactions over the life of a company.', 1, 'To provide a detailed and complete record of all financial transactions for internal auditing and re', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(56, 'Accounts Payable Report', 'ACCOUNTS_PAYABLE', 'AP001', 'Accounts, Finance, Payable', 'Document that tracks the amounts the company owes to suppliers or creditors for goods or services received.', 1, 'To track and manage all outstanding debts the company has to suppliers and creditors.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(57, 'Accounts Receivable Report', 'ACCOUNTS_RECEIVABLE', 'AR001', 'Accounts, Finance, Receivable', 'Document that tracks amounts owed by customers to the company for products or services delivered.', 1, 'To track and manage all amounts owed to the company by customers or clients.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(58, 'Cash Flow Statement', 'CASH_FLOW', 'CFS001', 'Accounts, Finance, Financial', 'Document that shows the inflows and outflows of cash and cash equivalents in a company over a period of time.', 1, 'To assess the company’s liquidity and financial health based on cash inflows and outflows.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(59, 'Audit Report', 'AUDIT_REPORT', 'AUDIT001', 'Accounts, Finance, Audit', 'Document detailing the results of an audit of the company’s financial records and processes.', 1, 'To provide an independent assessment of the company’s financial status and compliance with regulatio', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(60, 'Petty Cash Voucher', 'PETTY_CASH_VOUCHER', 'PCV001', 'Accounts, Finance, Expenses', 'Voucher used to record small, routine business expenses paid from petty cash funds.', 1, 'To document small expenses paid from the petty cash fund, ensuring proper record-keeping.', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(61, 'Credit Note', 'CREDIT_NOTE', 'CREDIT001', 'Accounts, Finance, Credit', 'Document issued to customers to reduce the amount owed due to returned goods or billing errors.', 1, 'To adjust customer accounts by reducing the amount due, typically after product returns or errors in', '2025-01-19 19:31:14', '2025-01-19 19:31:14', 1, 1),
(62, 'Financial Statement', 'FINANCIAL_STATEMENT', 'FIN001', 'Accounts, Finance, Financial', 'Comprehensive report outlining the financial performance of the company over a specified period.', 1, 'To provide stakeholders with a summary of the company’s financial health and performance.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(63, 'Loan Agreement', 'LOAN_AGREEMENT', 'LOAN001', 'Accounts, Finance, Loan', 'Document outlining the terms and conditions of a loan agreement between the company and a financial institution or individual.', 1, 'To legally formalize the loan terms for both the lender and borrower.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(64, 'Vendor Contract', 'VENDOR_CONTRACT', 'VENDOR001', 'Accounts, Finance, Vendor', 'Legal agreement between the company and a vendor specifying the terms and conditions of goods or services provided.', 1, 'To formalize the terms of business between the company and its vendors.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(65, 'Purchase Order', 'PURCHASE_ORDER', 'PO001', 'Accounts, Procurement, Purchasing', 'Document used by the company to authorize the purchase of goods or services from a vendor.', 1, 'To initiate the purchase process with a vendor, including specifying quantities, prices, and deliver', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(66, 'Credit Report', 'CREDIT_REPORT', 'CREDIT001', 'Accounts, Finance, Credit', 'Report that provides details about a company or individual’s creditworthiness, usually obtained from a credit agency.', 1, 'To assess the creditworthiness of potential clients, vendors, or partners.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(67, 'Tax Payment Receipt', 'TAX_PAYMENT_RECEIPT', 'TAXREC001', 'Accounts, Taxation, Payment', 'Receipt issued by tax authorities acknowledging the payment of taxes by the company.', 1, 'To document tax payments made by the company to the government authorities.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(68, 'Customs Declaration', 'CUSTOMS_DECLARATION', 'CUSTDECL001', 'Accounts, Finance, Customs', 'Document required for the import or export of goods, declaring the nature and value of items to customs authorities.', 1, 'To declare the details of goods being imported or exported for customs clearance.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(69, 'Dividend Payment Record', 'DIVIDEND_PAYMENT', 'DIVIDEND001', 'Accounts, Finance, Dividend', 'Record of dividend payments made by the company to its shareholders based on their shareholding.', 1, 'To track and manage payments of dividends to shareholders.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(70, 'Investment Record', 'INVESTMENT_RECORD', 'INVEST001', 'Accounts, Finance, Investments', 'Document recording the company’s investments in various financial instruments, such as stocks, bonds, or real estate.', 1, 'To track the company’s investment portfolio and performance of investments.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(71, 'Depreciation Schedule', 'DEPRECIATION_SCHEDULE', 'DEPRECIATION001', 'Accounts, Finance, Depreciation', 'Document outlining the depreciation of assets over time for tax and accounting purposes.', 1, 'To calculate and track depreciation of company assets for financial reporting and tax compliance.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(72, 'Capital Expenditure Report', 'CAPEX_REPORT', 'CAPEX001', 'Accounts, Finance, Expenditure', 'Report tracking capital expenditures (CapEx) made by the company for long-term investments or asset purchases.', 1, 'To monitor and report on the company’s capital expenditures for business expansion or asset acquisit', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(73, 'Bank Reconciliation Report', 'BANK_RECONCILIATION', 'BANKREC001', 'Accounts, Finance, Banking', 'Document used to reconcile the company’s bank statement with its internal records to ensure accuracy of financial reporting.', 1, 'To verify that the company’s internal cash records match the bank’s records.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(74, 'Revenue Recognition Report', 'REVENUE_RECOGNITION', 'REVREC001', 'Accounts, Finance, Revenue', 'Report documenting the recognition of revenue for accounting purposes, in accordance with applicable accounting standards.', 1, 'To record and recognize earned revenue in the company’s financial statements.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(75, 'Intercompany Transaction Report', 'INTERCOMPANY_TRANSACTION', 'ICTR001', 'Accounts, Finance, Intercompany', 'Report detailing financial transactions between different entities or subsidiaries within the company.', 1, 'To track and manage transactions occurring between different parts of the company or its subsidiarie', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(76, 'Fixed Asset Register', 'FIXED_ASSET_REGISTER', 'FAR001', 'Accounts, Finance, Asset', 'A comprehensive list of the company’s fixed assets, including purchase cost, depreciation, and disposal records.', 1, 'To maintain a record of all the company’s fixed assets for accounting and tax purposes.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(77, 'Account Reconciliation Statement', 'ACCOUNT_RECONCILIATION', 'ACCREC001', 'Accounts, Finance, Reconciliation', 'Statement that reconciles the differences between the company’s internal account records and external records, such as bank or vendor statements.', 1, 'To ensure the accuracy of the company’s accounting records and identify discrepancies.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(78, 'Audit Trail Report', 'AUDIT_TRAIL_REPORT', 'ATR001', 'Accounts, Finance, Audit', 'Document that traces all financial transactions in the system, allowing for transparency and accountability in financial operations.', 1, 'To monitor and track every financial transaction for audit purposes and regulatory compliance.', '2025-01-19 19:31:25', '2025-01-19 19:31:25', 1, 1),
(79, 'Sales Agreement', 'SALES_AGREEMENT', 'SALES001', 'Sales, Agreement, Contract', 'A legal contract between the company and a customer outlining the terms and conditions of a sale.', 1, 'To formalize the terms of a sale transaction between the company and its customers.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(80, 'Sales Order', 'SALES_ORDER', 'SO001', 'Sales, Order, Customer', 'Document that specifies the details of an order placed by a customer for goods or services.', 1, 'To initiate the sales order process and capture order details from customers.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(81, 'Sales Quote', 'SALES_QUOTE', 'QUOTE001', 'Sales, Quote, Customer', 'A document that provides a price estimate for products or services offered to the customer.', 1, 'To provide potential customers with a price estimation for goods or services.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(82, 'Sales Invoice', 'SALES_INVOICE', 'INV001', 'Sales, Invoice, Customer', 'Invoice issued to the customer, detailing the products or services provided and the amount due for payment.', 1, 'To request payment from the customer for goods or services rendered.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(83, 'Discount Agreement', 'DISCOUNT_AGREEMENT', 'DISCOUNT001', 'Sales, Discount, Offer', 'Document outlining special discounts or promotional offers provided to the customer.', 1, 'To define and formalize the discount terms for specific customers or transactions.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(84, 'Product Catalog', 'PRODUCT_CATALOG', 'CATALOG001', 'Sales, Product, Marketing', 'Catalog listing all products or services offered by the company, including descriptions and prices.', 1, 'To showcase the company’s products or services to customers for selection and purchase.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(85, 'Customer Agreement', 'CUSTOMER_AGREEMENT', 'CUSTOMER001', 'Sales, Customer, Agreement', 'A formal contract between the company and the customer defining the terms of the customer relationship and transactions.', 1, 'To establish formal terms and conditions between the company and its customers.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(86, 'Purchase Receipt', 'PURCHASE_RECEIPT', 'PURCHASE001', 'Sales, Receipt, Payment', 'Document acknowledging the receipt of payment from the customer for goods or services purchased.', 1, 'To confirm receipt of payment from customers for sales transactions.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(87, 'Sales Return Form', 'SALES_RETURN_FORM', 'RETURNS001', 'Sales, Return, Customer', 'Form used when a customer returns purchased goods and requests a refund or exchange.', 1, 'To process returns and exchanges for products that customers are dissatisfied with.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(88, 'Sales Commission Report', 'SALES_COMMISSION_REPORT', 'COMM001', 'Sales, Commission, Payment', 'Document summarizing sales commissions earned by sales representatives based on the sales generated.', 1, 'To calculate and track commissions for sales team members based on their sales performance.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(89, 'Sales Proposal', 'SALES_PROPOSAL', 'PROP001', 'Sales, Proposal, Offer', 'Document outlining the products, services, and terms being offered to the customer for their approval or signature.', 1, 'To provide detailed terms, pricing, and conditions to potential customers to secure a sale.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(90, 'Sales Report', 'SALES_REPORT', 'REPORT001', 'Sales, Report, Performance', 'Document summarizing the sales activities, performance, and progress against sales targets.', 1, 'To monitor and report on sales performance and progress toward company targets.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(91, 'Lead Generation Report', 'LEAD_GEN_REPORT', 'LEAD001', 'Sales, Lead, Generation', 'Report summarizing all leads generated by the sales team, including status, contact information, and potential value.', 1, 'To track the progress of lead generation efforts and identify promising leads for follow-up.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(92, 'Customer Feedback Form', 'CUSTOMER_FEEDBACK', 'FEEDBACK001', 'Sales, Feedback, Customer', 'Form used to collect customer feedback about their experience with the company’s products or services.', 1, 'To gather insights into customer satisfaction and areas for improvement in the sales process.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(93, 'Sales Contract Amendment', 'SALES_CONTRACT_AMENDMENT', 'CONTRACT_AMEND001', 'Sales, Amendment, Contract', 'Document used to modify or update the terms of an existing sales contract between the company and the customer.', 1, 'To update and modify previously agreed-upon terms and conditions of a sales contract.', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(94, 'Sales Training Materials', 'SALES_TRAINING', 'TRAIN001', 'Sales, Training, Material', 'Materials and resources used for training the sales team to improve their skills and knowledge.', 1, 'To ensure that the sales team is equipped with the necessary knowledge and skills to perform effecti', '2025-01-19 19:32:15', '2025-01-19 19:32:15', 1, 1),
(95, 'Marketing Plan', 'MARKETING_PLAN', 'MARKETING001', 'Marketing, Strategy, Plan', 'Document detailing the overall marketing strategy and tactics for a specific period.', 1, 'To provide a strategic framework for the company’s marketing efforts.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(96, 'Campaign Brief', 'CAMPAIGN_BRIEF', 'CAMPAIGN001', 'Marketing, Campaign, Brief', 'Document outlining the details of a specific marketing campaign, including goals, target audience, and key messaging.', 1, 'To define the scope and objectives of a marketing campaign.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(97, 'Market Research Report', 'MARKET_RESEARCH_REPORT', 'RESEARCH001', 'Marketing, Research, Market', 'Document summarizing market research findings, trends, and competitor analysis.', 1, 'To provide insights into market conditions and help make informed decisions for marketing strategies', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(98, 'Brand Guidelines', 'BRAND_GUIDELINES', 'BRAND001', 'Marketing, Brand, Guidelines', 'Document that outlines the rules for how the brand should be used, including logo usage, colors, fonts, and tone of voice.', 1, 'To ensure consistent and effective use of the company’s brand across all marketing materials.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(99, 'Advertising Copy', 'ADVERTISING_COPY', 'AD_COPY001', 'Marketing, Advertising, Copy', 'Written content used for advertisements in various media channels, including print, digital, and broadcast.', 1, 'To communicate the marketing message in a clear and engaging way for advertisements.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(100, 'Email Marketing Template', 'EMAIL_TEMPLATE', 'EMAIL001', 'Marketing, Email, Template', 'Pre-designed email templates for marketing campaigns sent to customers or leads.', 1, 'To create and send promotional or informational emails to target audiences.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(101, 'Social Media Strategy', 'SOCIAL_MEDIA_STRATEGY', 'SOCIAL001', 'Marketing, Social Media, Strategy', 'Document detailing the approach and tactics for marketing through social media platforms.', 1, 'To define how the company will engage with its audience on social media platforms.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(102, 'Content Calendar', 'CONTENT_CALENDAR', 'CALENDAR001', 'Marketing, Content, Calendar', 'Document outlining the schedule of planned content, including blog posts, social media updates, and newsletters.', 1, 'To manage and plan marketing content for consistent communication with customers.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(103, 'Promotional Material', 'PROMOTIONAL_MATERIAL', 'PROMO001', 'Marketing, Promotion, Material', 'Marketing materials such as flyers, brochures, and posters used for promotional activities.', 1, 'To support promotional campaigns with marketing materials to engage customers.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(104, 'Public Relations Report', 'PR_REPORT', 'PR001', 'Marketing, PR, Report', 'Document detailing public relations activities, including media coverage, events, and press releases.', 1, 'To track and evaluate the company’s public relations efforts and media visibility.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(105, 'Influencer Marketing Agreement', 'INFLUENCER_AGREEMENT', 'INFLUENCER001', 'Marketing, Influencer, Agreement', 'Agreement outlining terms and conditions for collaborating with influencers in marketing campaigns.', 1, 'To formalize the collaboration between the company and influencers for promotional activities.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(106, 'Marketing Metrics Report', 'MARKETING_METRICS', 'METRICS001', 'Marketing, Metrics, Report', 'Document summarizing key marketing performance indicators (KPIs) such as customer engagement, lead generation, and campaign results.', 1, 'To evaluate the success and impact of marketing campaigns and strategies.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(107, 'Event Marketing Plan', 'EVENT_MARKETING_PLAN', 'EVENT001', 'Marketing, Event, Plan', 'Document detailing the strategy and plan for hosting or participating in marketing events, such as trade shows or conferences.', 1, 'To plan and execute marketing activities surrounding events for greater exposure and engagement.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(108, 'Customer Loyalty Program', 'LOYALTY_PROGRAM', 'LOYALTY001', 'Marketing, Loyalty, Customer', 'Document describing the structure and benefits of the company’s customer loyalty or rewards program.', 1, 'To reward and retain loyal customers, encouraging repeat business.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(109, 'SEO Strategy', 'SEO_STRATEGY', 'SEO001', 'Marketing, SEO, Strategy', 'Document outlining the strategy for improving the company’s search engine optimization (SEO) efforts to increase visibility in search engine results.', 1, 'To improve the company’s online visibility and drive organic traffic to its website.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(110, 'Affiliate Marketing Agreement', 'AFFILIATE_AGREEMENT', 'AFFILIATE001', 'Marketing, Affiliate, Agreement', 'Agreement outlining the terms and conditions for working with affiliate partners to promote the company’s products or services.', 1, 'To formalize the partnership with affiliates for promoting the company’s offerings.', '2025-01-19 19:32:50', '2025-01-19 19:32:50', 1, 1),
(111, 'Sales Agreement', 'SALES_AGREEMENT', 'SALES001', 'Sales, Agreement, Contract', 'Document outlining the terms and conditions of a sales agreement between the company and the customer.', 1, 'To formalize the sale and establish the agreed-upon terms and conditions.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(112, 'Sales Proposal', 'SALES_PROPOSAL', 'PROPOSAL001', 'Sales, Proposal, Offer', 'Document that proposes a product or service to a potential customer, outlining pricing and terms.', 1, 'To present a sales offer to a customer or prospect.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(113, 'Lead Generation Report', 'LEAD_GEN_REPORT', 'LEAD001', 'Sales, Lead, Report', 'Report detailing lead generation activities, including potential customers and sources of leads.', 1, 'To track and evaluate the lead generation efforts and effectiveness.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(114, 'Quotation', 'QUOTATION', 'QUOTE001', 'Sales, Quote, Pricing', 'Document providing a price estimate for a product or service offered to a customer.', 1, 'To communicate the price for a specific product or service to a customer or prospect.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(115, 'Sales Order', 'SALES_ORDER', 'ORDER001', 'Sales, Order, Transaction', 'Document confirming a customer’s intention to purchase goods or services.', 1, 'To finalize and confirm the sale after a quotation has been accepted.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(116, 'Customer Order Confirmation', 'ORDER_CONFIRM', 'CONFIRM001', 'Sales, Customer, Confirmation', 'Document confirming the customer’s order and receipt of payment for the goods or services.', 1, 'To confirm that the customer has placed an order and payment has been received.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(117, 'Sales Report', 'SALES_REPORT', 'REPORT001', 'Sales, Report, Performance', 'Report summarizing sales performance, including sales figures, targets, and growth analysis.', 1, 'To analyze and report on sales performance over a specific period.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(118, 'Customer Feedback', 'CUSTOMER_FEEDBACK', 'FEEDBACK001', 'Sales, Customer, Feedback', 'Document collecting feedback from customers regarding their purchase experience and satisfaction with the product or service.', 1, 'To collect and analyze customer feedback for improving sales and customer service.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(119, 'Sales Pipeline Report', 'SALES_PIPELINE', 'PIPELINE001', 'Sales, Pipeline, Report', 'Document showing the stages of sales opportunities, from initial contact to closing.', 1, 'To manage and track the progress of potential sales opportunities in the pipeline.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(120, 'Sales Commission Report', 'SALES_COMMISSION', 'COMMISSION001', 'Sales, Commission, Report', 'Report outlining sales commissions earned by the sales team based on performance and closed deals.', 1, 'To calculate and track the commission payments for salespeople based on their sales.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(121, 'Contract Renewal Agreement', 'CONTRACT_RENEWAL', 'RENEWAL001', 'Sales, Contract, Renewal', 'Document outlining the terms and conditions for renewing an existing contract with a customer.', 1, 'To establish the conditions for extending a contract with an existing client.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(122, 'Sales Training Material', 'SALES_TRAINING', 'TRAINING001', 'Sales, Training, Material', 'Documents used for training the sales team, including product knowledge, sales techniques, and best practices.', 1, 'To support the ongoing education and skill development of the sales team.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(123, 'Sales Target Agreement', 'SALES_TARGET', 'TARGET001', 'Sales, Target, Agreement', 'Document that sets out the sales targets for the sales team or individual salesperson.', 1, 'To define measurable sales targets for the sales team or individual members.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(124, 'Customer Onboarding Document', 'ONBOARDING_DOC', 'ONBOARD001', 'Sales, Onboarding, Customer', 'Document outlining the steps to onboard a new customer and ensure smooth product or service implementation.', 1, 'To help customers integrate successfully into the company’s products or services.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(125, 'Return Merchandise Authorization (RMA)', 'RMA', 'RMA001', 'Sales, Return, Authorization', 'Document that authorizes the return of goods sold to a customer due to issues such as defects or dissatisfaction.', 1, 'To manage the return process for products that do not meet customer expectations or are faulty.', '2025-01-19 19:33:24', '2025-01-19 19:33:24', 1, 1),
(126, 'Customer Registration Form', 'CUST_REG_FORM', 'CUSTREG001', 'Customer, Registration, Form', 'Document used for registering a new customer with the company, including basic details such as name, contact info, and preferences.', 1, 'To collect essential information from new customers during the onboarding process.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(127, 'Customer Feedback Form', 'CUST_FEEDBACK', 'FEEDBACK001', 'Customer, Feedback, Survey', 'Form that allows customers to provide feedback about the company’s products, services, or support.', 1, 'To collect feedback and improve customer experience and service delivery.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(128, 'Customer Agreement', 'CUST_AGREEMENT', 'CUSTAGRE001', 'Customer, Agreement, Terms', 'Formal agreement between the customer and the company outlining the terms and conditions of the service or product being provided.', 1, 'To define the agreed-upon terms and conditions between the company and the customer.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(129, 'Customer Support Ticket', 'SUPPORT_TICKET', 'TICKET001', 'Customer, Support, Ticket', 'Document created for tracking customer issues or inquiries in the support system, including details of the problem and resolution.', 1, 'To ensure timely resolution of customer issues and maintain detailed records of customer interaction', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(130, 'Customer Communication Log', 'COMM_LOG', 'LOG001', 'Customer, Communication, Log', 'Document detailing all communications with a customer, including phone calls, emails, meetings, etc.', 1, 'To maintain a comprehensive log of all interactions with customers for future reference.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(131, 'Service Level Agreement (SLA)', 'SLA', 'SLA001', 'Customer, SLA, Agreement', 'Agreement that defines the level of service the customer can expect, including response times, availability, and quality metrics.', 1, 'To set clear expectations for service levels and help manage customer satisfaction.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(132, 'Customer Payment History', 'CUST_PAY_HISTORY', 'PAYMENTHIST001', 'Customer, Payment, History', 'Document summarizing a customer’s payment history, including dates, amounts, and outstanding balances.', 1, 'To track payments made by the customer and ensure accurate billing records.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(133, 'Customer Profile', 'CUST_PROFILE', 'PROFILE001', 'Customer, Profile, Information', 'Comprehensive document containing all relevant information about a customer, such as contact details, preferences, purchase history, etc.', 1, 'To store detailed customer information for better personalized service and marketing.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(134, 'Customer Invoice', 'CUST_INVOICE', 'INVOICE001', 'Customer, Invoice, Billing', 'Document that provides details of charges owed by a customer for products or services, including pricing and payment instructions.', 1, 'To provide customers with billing information for products and services rendered.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(135, 'Customer Contract', 'CUST_CONTRACT', 'CONTRACT001', 'Customer, Contract, Agreement', 'Legal document outlining the formal terms of the agreement between the customer and the company for long-term service or product delivery.', 1, 'To formalize the terms and conditions of ongoing engagements with customers.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(136, 'Customer Cancellation Request', 'CUST_CANCEL_REQUEST', 'CANCEL001', 'Customer, Cancellation, Request', 'Document requesting the cancellation of services or products by the customer, typically in cases of dissatisfaction or change of circumstances.', 1, 'To track and process customer cancellation requests and ensure proper documentation.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(137, 'Customer Satisfaction Survey', 'CUST_SAT_SURVEY', 'SAT001', 'Customer, Satisfaction, Survey', 'Survey document that allows customers to rate their satisfaction with products, services, and overall experience with the company.', 1, 'To measure customer satisfaction and identify areas for improvement in service delivery.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(138, 'Customer Refund Request', 'CUST_REFUND_REQUEST', 'REFUND001', 'Customer, Refund, Request', 'Document requesting a refund from the company due to dissatisfaction, overcharge, or returns.', 1, 'To process customer requests for refunds and maintain accurate financial records.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(139, 'Customer Loyalty Program Agreement', 'CUST_LOYALTY_AGREEMENT', 'LOYALTYAGREE001', 'Customer, Loyalty, Program', 'Document outlining the terms and benefits of the customer loyalty or rewards program, including eligibility and redemption details.', 1, 'To set the conditions for customer participation in a loyalty program and track rewards accumulation', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(140, 'Customer Retention Plan', 'CUST_RETENTION_PLAN', 'RETENTION001', 'Customer, Retention, Plan', 'Document outlining strategies and actions to retain existing customers and reduce churn.', 1, 'To maintain long-term relationships with customers and improve customer loyalty.', '2025-01-19 19:34:02', '2025-01-19 19:34:02', 1, 1),
(141, 'Legal Contract', 'LEGAL_CONTRACT', 'LC001', 'Legal, Contract, Agreement', 'A formal document outlining the rights and obligations between two or more parties.', 1, 'To formalize agreements between parties regarding services, terms, and conditions.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(142, 'Non-Disclosure Agreement (NDA)', 'NDA', 'NDA001', 'Legal, Confidentiality, Agreement', 'Document signed to protect confidential information shared between parties.', 1, 'To protect sensitive business information from being disclosed to unauthorized parties.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(143, 'Employment Contract', 'EMPLOYMENT_CONTRACT', 'EMPCONTRACT001', 'Legal, Employment, Contract', 'Contract between employer and employee detailing the terms of employment.', 1, 'To establish terms, responsibilities, and expectations for both employer and employee.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(144, 'Intellectual Property (IP) Agreement', 'IP_AGREEMENT', 'IPAGREEMENT001', 'Legal, Intellectual Property, Agreement', 'Agreement outlining the rights and protections for intellectual property between the company and employees, contractors, or third parties.', 1, 'To define ownership and usage rights of intellectual property created or shared by parties.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(145, 'Partnership Agreement', 'PARTNERSHIP_AGREEMENT', 'PARTAGREEMENT001', 'Legal, Partnership, Agreement', 'Document outlining the terms and conditions of a business partnership, including roles, contributions, and profit-sharing arrangements.', 1, 'To formalize the partnership structure, responsibilities, and operational details.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(146, 'Memorandum of Understanding (MOU)', 'MOU', 'MOU001', 'Legal, MOU, Agreement', 'Non-binding agreement outlining the terms and goals of a potential partnership or joint venture.', 1, 'To clarify mutual understanding and intentions before entering a formal contract.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(147, 'Power of Attorney', 'POA', 'POA001', 'Legal, Power of Attorney, Authorization', 'Legal document allowing one person to act on behalf of another in legal or financial matters.', 1, 'To grant someone the authority to make decisions or sign documents on behalf of another party.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(148, 'Terms of Service', 'TERMS_OF_SERVICE', 'TOS001', 'Legal, Terms, Service', 'Document outlining the rules and guidelines for using a product or service, including rights and responsibilities of the service provider and user.', 1, 'To inform users about the terms they must accept before using a service or product.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(149, 'Privacy Policy', 'PRIVACY_POLICY', 'PRIVACY001', 'Legal, Privacy, Policy', 'Policy outlining how a company collects, uses, stores, and protects user data.', 1, 'To inform users about data collection practices and ensure compliance with privacy laws.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(150, 'Litigation Document', 'LITIGATION_DOC', 'LITDOC001', 'Legal, Litigation, Court', 'Legal documents related to court cases or disputes, including filings, motions, and legal pleadings.', 1, 'To manage documentation for ongoing legal cases and disputes.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1);
INSERT INTO `config_document_types` (`ccdt_id`, `ccdt_name`, `ccdt_shortname`, `ccdt_code`, `ccdt_tags`, `ccdt_desc`, `ccdt_status`, `ccdt_purpose`, `ccdt_created_at`, `ccdt_updated_at`, `ccdt_created_by`, `ccdt_updated_by`) VALUES
(151, 'Settlement Agreement', 'SETTLEMENT_AGREEMENT', 'SETTLEAGREE001', 'Legal, Settlement, Agreement', 'Agreement reached between parties in a dispute to settle the matter without further litigation.', 1, 'To resolve legal disputes through mutual agreement without going to trial.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(152, 'Confidentiality Agreement', 'CONFIDENTIALITY_AGREEMENT', 'CONFAGREE001', 'Legal, Confidentiality, Agreement', 'Document protecting the confidentiality of information shared between parties during business negotiations or partnerships.', 1, 'To prevent the unauthorized sharing of confidential information between parties.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(153, 'Franchise Agreement', 'FRANCHISE_AGREEMENT', 'FRANAGREEMENT001', 'Legal, Franchise, Agreement', 'Agreement between a franchisor and franchisee detailing the terms, conditions, and responsibilities of the franchise relationship.', 1, 'To formalize the terms of operating a franchise business.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(154, 'Shareholder Agreement', 'SHAREHOLDER_AGREEMENT', 'SHAREAGREEMENT001', 'Legal, Shareholder, Agreement', 'Agreement outlining the rights and obligations of shareholders in a company.', 1, 'To govern the relationship between the company and its shareholders.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(155, 'Legal Notice', 'LEGAL_NOTICE', 'NOTICE001', 'Legal, Notice, Communication', 'Formal notice sent to inform parties about a legal matter or violation that requires attention.', 1, 'To inform individuals or entities of legal actions or claims against them.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(156, 'Non-Compete Agreement', 'NON_COMPETE', 'NONCOMPETE001', 'Legal, Non-Compete, Agreement', 'Agreement preventing employees or partners from engaging in business activities that compete with the company after leaving the organization.', 1, 'To prevent competition by restricting the activities of former employees or business partners.', '2025-01-19 19:35:05', '2025-01-19 19:35:05', 1, 1),
(157, 'Customer Support Ticket', 'SUPPORT_TICKET', 'SUPTICKET001', 'Support, Ticket, Request', 'Document containing the details of a customer issue or service request, including the problem description, customer information, and resolution status.', 1, 'To track customer service requests and issues for resolution and follow-up.', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(158, 'Service Level Agreement (SLA)', 'SLA', 'SLA001', 'Support, SLA, Agreement', 'Agreement defining the level of service expected between a service provider and customer, including response times and resolution times.', 1, 'To ensure agreed-upon service levels are maintained and to set expectations for both the provider an', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(159, 'Knowledge Base Article', 'KNOWLEDGE_BASE', 'KB001', 'Support, Knowledge, Article', 'Document containing helpful information and solutions to common customer queries and issues, often available to customers for self-service.', 1, 'To provide customers with solutions and reduce the number of support tickets by allowing them to res', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(160, 'Customer Feedback Form', 'FEEDBACK_FORM', 'FEEDBACK001', 'Support, Feedback, Survey', 'Form used to gather customer feedback about their support experience or product usage.', 1, 'To collect valuable feedback from customers to improve products, services, and support processes.', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(161, 'Complaint Resolution Document', 'COMPLAINT_RESOLUTION', 'COMPRESDOC001', 'Support, Complaint, Resolution', 'Document that outlines the resolution to a customer’s complaint, including actions taken and final decision.', 1, 'To document the resolution process for customer complaints and ensure that the issue has been addres', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(162, 'Ticket Escalation Document', 'TICKET_ESCALATION', 'TICKETESCAL001', 'Support, Escalation, Ticket', 'Document outlining the process for escalating a customer support ticket when initial support efforts have been unsuccessful.', 1, 'To escalate unresolved issues to higher levels of support or management to ensure timely resolution.', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(163, 'Customer Support Report', 'SUPPORT_REPORT', 'SUPREPORT001', 'Support, Report, Metrics', 'Report providing detailed insights into customer support activities, including ticket volumes, resolution times, and customer satisfaction levels.', 1, 'To monitor and evaluate the performance of the support team and the quality of customer service prov', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(164, 'Troubleshooting Guide', 'TROUBLESHOOTING_GUIDE', 'TROUBLEGUIDE001', 'Support, Troubleshooting, Guide', 'Step-by-step document that assists customers or support agents in diagnosing and resolving technical issues with a product or service.', 1, 'To help customers or support agents solve common technical issues independently or during support se', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(165, 'Warranty & Repair Request', 'WARRANTY_REPAIR', 'WARRANTY001', 'Support, Warranty, Repair', 'Document used for requesting warranty service or repair for products under warranty.', 1, 'To manage requests for warranty claims and repairs to ensure compliance with warranty terms and cust', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(166, 'Customer Service Policy', 'CUSTOMER_SERVICE_POLICY', 'CSPOLICY001', 'Support, Policy, Service', 'Document outlining the company’s customer service standards, policies, and procedures for handling support requests.', 1, 'To provide a clear and consistent framework for customer support interactions and ensure a high leve', '2025-01-19 19:35:44', '2025-01-19 19:35:44', 1, 1),
(167, 'Return &amp; Refund Policy', 'RETURN_REFUND_POLICY', 'RREFUND001', 'Support, Policy, Return', 'Document outlining the conditions and procedures for returning products and receiving refunds.', 1, 'To clarify the process for customers wishing to return products and ensure compliance with company p', '2025-01-19 19:35:44', '2025-01-19 07:52:53 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_enquiry_flow`
--

CREATE TABLE `config_enquiry_flow` (
  `cef_id` int(10) NOT NULL,
  `cef_name` varchar(75) NOT NULL,
  `cef_short_name` varchar(75) NOT NULL,
  `cef_created_by` int(10) NOT NULL,
  `cef_updated_by` int(10) NOT NULL,
  `cef_created_at` varchar(45) NOT NULL,
  `cef_updated_at` varchar(45) NOT NULL,
  `cef_status` int(2) NOT NULL DEFAULT 1,
  `cef_user_id` int(10) NOT NULL,
  `cef_sort_order` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_enquiry_flow`
--

INSERT INTO `config_enquiry_flow` (`cef_id`, `cef_name`, `cef_short_name`, `cef_created_by`, `cef_updated_by`, `cef_created_at`, `cef_updated_at`, `cef_status`, `cef_user_id`, `cef_sort_order`) VALUES
(1, 'Fresh Enquiries', 'fresh_enquiries', 1, 1, '2024-12-06 10:24:02 AM', '2025-01-03 03:05:46 PM', 1, 1, 1),
(2, 'Dialled Enquiries', 'dialled_enquiries', 1, 1, '2024-12-06 10:24:55 AM', '2024-12-10 03:02:04 PM', 1, 1, 2),
(3, 'Information Shared', 'information_shared', 1, 1, '2024-12-06 10:26:37 AM', '2024-12-06 10:26:37 AM', 1, 1, 3),
(4, 'Meeting Scheduled', 'meeting_scheduled', 1, 1, '2024-12-06 10:27:02 AM', '2024-12-06 10:27:02 AM', 1, 1, 4),
(5, 'Meeting Done', 'meeting_done', 1, 1, '2024-12-06 10:27:12 AM', '2024-12-06 10:27:12 AM', 1, 1, 5),
(6, 'Quotation Shared', 'quotation_shared', 1, 1, '2024-12-06 10:27:22 AM', '2024-12-06 10:27:22 AM', 1, 1, 6),
(7, 'Quotation Approved', 'quotation_approved', 1, 1, '2024-12-06 10:27:36 AM', '2024-12-06 10:30:32 AM', 1, 1, 8),
(8, 'Quotation Rejected', 'quotation_rejected', 1, 1, '2024-12-06 10:27:47 AM', '2024-12-06 10:30:36 AM', 1, 1, 9),
(9, 'Sale Won', 'sale_won', 1, 1, '2024-12-06 10:29:11 AM', '2024-12-06 10:30:41 AM', 1, 1, 10),
(10, 'Sale Lost', 'sale_lost', 1, 1, '2024-12-06 10:29:21 AM', '2024-12-06 10:30:44 AM', 1, 1, 11),
(11, 'Quotation Revised', 'quotation_revised', 1, 1, '2024-12-06 10:31:00 AM', '2024-12-06 10:31:00 AM', 1, 1, 7),
(13, 'Not Interested', 'not_interested', 1, 1, '2024-12-08 08:48:48 AM', '2024-12-08 08:48:48 AM', 1, 1, 12),
(14, 'Junk Enquiries', 'junk_enquiries', 1, 1, '2024-12-08 08:49:04 AM', '2024-12-08 08:49:04 AM', 1, 1, 13),
(15, 'Invalid Nos', 'invalid_nos', 1, 1, '2024-12-10 03:00:56 PM', '2025-01-03 03:23:54 PM', 1, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `config_enquiry_types`
--

CREATE TABLE `config_enquiry_types` (
  `cet_id` int(10) NOT NULL,
  `cet_name` varchar(75) NOT NULL,
  `cet_icon` varchar(40) NOT NULL,
  `cet_status` int(2) NOT NULL,
  `cet_created_at` varchar(45) NOT NULL,
  `cet_created_by` int(10) NOT NULL,
  `cet_updated_at` varchar(45) NOT NULL,
  `cet_updated_by` int(10) NOT NULL,
  `cet_user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_enquiry_types`
--

INSERT INTO `config_enquiry_types` (`cet_id`, `cet_name`, `cet_icon`, `cet_status`, `cet_created_at`, `cet_created_by`, `cet_updated_at`, `cet_updated_by`, `cet_user_id`) VALUES
(1, 'Offline Enquiries', 'fa-hand-grab-o', 1, '2024-12-04 09:27:29 PM', 1, '2025-01-03 03:25:06 PM', 1, 1),
(2, 'Website Enquiries', 'fa-globe', 1, '2024-12-04 09:37:23 PM', 1, '2024-12-04 09:37:23 PM', 1, 1),
(3, 'Facebook Enquiries', 'fa-facebook', 1, '2024-12-04 09:37:55 PM', 1, '2024-12-04 09:37:55 PM', 1, 1),
(4, 'Instagram Enquiries', 'fa-instagram', 1, '2024-12-04 09:38:12 PM', 1, '2024-12-04 09:38:12 PM', 1, 1),
(5, 'Whatsapp Enquiries', 'fa-whatsapp', 1, '2024-12-04 09:39:10 PM', 1, '2024-12-04 09:39:10 PM', 1, 1),
(6, 'Google Map', 'fa-map-marker', 1, '2024-12-04 09:39:55 PM', 1, '2024-12-06 10:02:37 AM', 1, 1),
(7, 'Justdial Enquiries', 'fa-star-o', 1, '2024-12-04 09:42:01 PM', 1, '2024-12-05 02:59:45 PM', 1, 1),
(8, 'Contact Us Enquiries', 'fa-phone', 1, '2024-12-05 03:00:26 PM', 1, '2024-12-05 03:00:26 PM', 1, 1),
(9, 'Vendor Enquiries', 'fa-adjust', 1, '2024-12-05 03:00:59 PM', 1, '2024-12-06 08:30:08 AM', 1, 1),
(11, 'Support Enquiries', 'fa-hand-grab-o', 1, '2024-12-08 07:58:00 AM', 1, '2024-12-08 07:58:00 AM', 1, 1),
(12, 'Self Enquiries', 'fa-hand-o-up', 1, '2024-12-08 06:22:58 PM', 1, '2024-12-08 06:22:58 PM', 1, 1),
(13, 'Reference Enquiries', 'fa-history', 1, '2024-12-08 06:26:07 PM', 1, '2024-12-08 06:26:07 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_events_types`
--

CREATE TABLE `config_events_types` (
  `cent_id` int(10) NOT NULL,
  `cent_name` varchar(95) NOT NULL,
  `cent_shortname` varchar(55) NOT NULL,
  `cent_code` varchar(25) NOT NULL,
  `cent_purpose` varchar(155) NOT NULL,
  `cent_desc` varchar(255) NOT NULL,
  `cent_status` int(1) NOT NULL DEFAULT 1,
  `cent_created_by` int(10) NOT NULL,
  `cent_created_at` varchar(45) NOT NULL,
  `cent_updated_by` int(10) NOT NULL,
  `cent_updated_at` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_events_types`
--

INSERT INTO `config_events_types` (`cent_id`, `cent_name`, `cent_shortname`, `cent_code`, `cent_purpose`, `cent_desc`, `cent_status`, `cent_created_by`, `cent_created_at`, `cent_updated_by`, `cent_updated_at`) VALUES
(1, 'Birthday Party', 'Bday', 'BIRTHDAY', 'Personal Celebration', 'A party to celebrate a person\'s birth anniversary.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(2, 'Wedding', 'Wed', 'WEDDING', 'Marriage Celebration', 'A ceremony where two people get married.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(3, 'Anniversary Celebration', 'Anniv', 'ANNIV', 'Personal Celebration', 'A celebration of a wedding or any special date.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(4, 'Baby Shower', 'BabySh', 'BABY_SHOWER', 'Family Event', 'A party to celebrate the upcoming birth of a baby.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(5, 'Housewarming Party', 'House', 'HOUSEWARM', 'Personal Celebration', 'A celebration of moving into a new house.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(6, 'Retirement Celebration', 'Retire', 'RETIREMENT', 'Personal Achievement', 'A farewell event for someone retiring.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(7, 'Graduation Party', 'Grad', 'GRADUATION', 'Educational Achievement', 'A celebration for completing studies.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(8, 'Farewell Party', 'Farewell', 'FAREWELL', 'Personal or Corporate', 'A party to say goodbye to someone leaving.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(9, 'Engagement Ceremony', 'Engage', 'ENGAGEMENT', 'Marriage Preparation', 'A formal event before a wedding.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(10, 'Memorial Service', 'Memorial', 'MEMORIAL', 'Remembrance', 'An event to honor the life of a deceased person.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(11, 'Product Launch', 'Launch', 'PROD_LAUNCH', 'Marketing', 'An event to introduce a new product to the market.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(12, 'Business Conference', 'Conf', 'CONF', 'Corporate Networking', 'A formal meeting for discussions in business.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(13, 'Trade Show', 'Trade', 'TRADE_SHOW', 'Exhibition', 'An event where companies showcase products.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(14, 'Annual General Meeting', 'AGM', 'AGM', 'Corporate Governance', 'A meeting for shareholders and management.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(15, 'Networking Event', 'Network', 'NETWORK_EVENT', 'Professional', 'An event for professionals to connect.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(16, 'Team Building Event', 'Team', 'TEAM_BUILD', 'Corporate Activity', 'An event to improve teamwork in organizations.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(17, 'Corporate Retreat', 'Retreat', 'CORP_RETREAT', 'Business & Leisure', 'A company-sponsored event for relaxation and planning.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(18, 'Award Ceremony', 'Award', 'AWARD_CEREMONY', 'Recognition', 'An event to honor outstanding individuals or teams.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(19, 'Sales Kickoff Meeting', 'SalesKO', 'SALES_KO', 'Business Strategy', 'An event to motivate the sales team.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(20, 'Charity Fundraiser', 'Fundraiser', 'CHARITY', 'Social Cause', 'An event to raise money for a cause.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(21, 'Community Festival', 'Fest', 'COMM_FEST', 'Cultural', 'A festival celebrating community culture.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(22, 'Political Rally', 'Rally', 'POL_RALLY', 'Political', 'An event for political campaigns or support.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(23, 'Protest / Awareness March', 'Protest', 'PROTEST', 'Activism', 'A gathering to raise awareness or demand change.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(24, 'Music Concert', 'Concert', 'MUSIC_CON', 'Entertainment', 'A live performance of music.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(25, 'Sports Tournament', 'Sports', 'SPORTS_TOUR', 'Competition', 'An event featuring competitive sports.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(26, 'Hackathon', 'Hack', 'HACKATHON', 'Tech Innovation', 'A coding competition to develop software.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(27, 'Tech Conference', 'TechConf', 'TECH_CONF', 'Technology', 'A conference focused on new tech trends.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(28, 'Film Festival', 'FilmFest', 'FILM_FEST', 'Entertainment', 'A festival showcasing films and documentaries.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(29, 'Gaming Tournament', 'Gaming', 'GAMING_TOUR', 'Esports', 'A competitive video gaming event.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(30, 'Food & Wine Festival', 'FoodFest', 'FOOD_FEST', 'Culinary', 'An event for food and wine lovers.', 1, 1, '2025-02-10 14:27:36', 1, '2025-02-10 14:27:36'),
(31, 'Photography Exhibition', 'PhotoEx', 'PHOTO_EXHIBIT', 'Art & Culture', 'An event showcasing photography work.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(32, 'Dance Competition', 'DanceComp', 'DANCE_COMP', 'Performance Art', 'A competition featuring dance performances.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(33, 'Comedy Show', 'Comedy', 'COMEDY_SHOW', 'Entertainment', 'A live performance by stand-up comedians.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(34, 'Startup Pitch Event', 'Pitch', 'STARTUP_PITCH', 'Entrepreneurship', 'An event where startups pitch their ideas to investors.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(35, 'Cryptocurrency Meetup', 'CryptoMeet', 'CRYPTO_MEET', 'Finance & Tech', 'A meetup to discuss cryptocurrency trends.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(36, 'Cybersecurity Awareness Workshop', 'CyberSec', 'CYBER_AWARE', 'Tech & Security', 'An event focused on cybersecurity education.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(37, 'Fashion Show', 'Fashion', 'FASHION_SHOW', 'Lifestyle', 'A runway event showcasing fashion designs.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(38, 'E-Sports Championship', 'ESports', 'E_SPORTS', 'Gaming', 'A competitive gaming championship.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(39, 'Book Launch', 'BookLaunch', 'BOOK_LAUNCH', 'Literature', 'An event introducing a new book to the public.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(40, 'Theater Play', 'Theater', 'THEATER_PLAY', 'Performing Arts', 'A stage play performance.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(41, 'Leadership Summit', 'Leadership', 'LEADER_SUMMIT', 'Corporate Leadership', 'An event focused on leadership development.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(42, 'AI & Robotics Summit', 'AI_Robotics', 'AI_ROBO_SUMMIT', 'Tech', 'A summit discussing AI and robotics innovations.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(43, 'National Day Celebration', 'NatDay', 'NAT_DAY', 'Government', 'A celebration of national independence or events.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(44, 'Public Hearing', 'PublicH', 'PUBLIC_HEAR', 'Civic Engagement', 'A meeting where citizens express concerns and opinions.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(45, 'Volunteer Drive', 'Volunteer', 'VOLUNTEER_DRIVE', 'Social Work', 'An event to recruit and mobilize volunteers.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(46, 'Trade Fair', 'TradeFair', 'TRADE_FAIR', 'Business', 'An event where businesses exhibit products and services.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(47, 'CEO Roundtable', 'CEORound', 'CEO_RT', 'Business Leadership', 'A roundtable discussion for CEOs and executives.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(48, 'Remote Team Building Activities', 'RemoteTeam', 'REMOTE_TEAM', 'Corporate', 'Virtual activities to engage remote teams.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(49, 'Online Gaming Tournament', 'OnlineGame', 'ONLINE_GAME_TOUR', 'Esports', 'A virtual competitive gaming event.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 14:30:11'),
(50, 'Film Screening', '', 'FILM_SCREEN', 'Entertainment', 'An event featuring the screening of films or documentaries.', 1, 1, '2025-02-10 14:30:11', 1, '2025-02-10 02:33:18 PM'),
(51, 'Film Premiere', 'FilmPrem', 'FILM_PREMIERE', 'Entertainment', 'An event to launch a new movie.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(52, 'Poetry Slam', 'PoetrySlam', 'POETRY_SLAM', 'Literary', 'A live poetry performance competition.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(53, 'Fitness Bootcamp', 'FitCamp', 'FITNESS_BOOTCAMP', 'Health & Wellness', 'An intense group fitness training program.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(54, 'Art Exhibition', 'ArtExhibit', 'ART_EXHIBIT', 'Culture', 'A display of artistic works.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(55, 'Investment Summit', 'InvestSummit', 'INVEST_SUMMIT', 'Finance', 'An event where investors meet startups.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(56, 'Self-Development Seminar', 'SelfDev', 'SELF_DEV', 'Personal Growth', 'A seminar focused on self-improvement.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(57, 'Space Exploration Conference', 'SpaceConf', 'SPACE_CONF', 'Science', 'A conference discussing space technology and exploration.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(58, 'Motor Show', 'MotorShow', 'MOTOR_SHOW', 'Automotive', 'An exhibition showcasing new vehicle models.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(59, 'Marathon', 'Marathon', 'MARATHON', 'Sports', 'A long-distance running competition.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(60, 'Dance Festival', 'DanceFest', 'DANCE_FEST', 'Performing Arts', 'An event celebrating various dance styles.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(61, 'Public Speaking Workshop', 'PublicSpeak', 'PUBLIC_SPEAK', 'Skill Development', 'An event to improve public speaking skills.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(62, 'Food Tasting Event', 'FoodTaste', 'FOOD_TASTE', 'Culinary', 'An event for tasting different cuisines.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(63, 'Wine Tasting', 'WineTaste', 'WINE_TASTE', 'Beverages', 'An event where wines are sampled.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(64, 'Pet Adoption Drive', 'PetAdopt', 'PET_ADOPT', 'Animal Welfare', 'An event promoting pet adoption.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(65, 'Classic Car Show', 'ClassicCar', 'CLASSIC_CAR', 'Automotive', 'A show featuring classic and vintage cars.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(66, 'Tattoo Convention', 'TattooCon', 'TATTOO_CON', 'Lifestyle', 'An event celebrating tattoo art and culture.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(67, 'Stand-Up Comedy Open Mic', 'OpenMic', 'COMEDY_OPEN_MIC', 'Entertainment', 'An event where comedians perform short sets.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(68, 'Astronomy Night', 'AstroNight', 'ASTRONOMY_NIGHT', 'Science', 'A night dedicated to stargazing and space discussions.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(69, 'Photography Workshop', 'PhotoWorkshop', 'PHOTO_WORKSHOP', 'Skill Development', 'An event teaching photography techniques.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(70, 'Science & Innovation Fair', 'ScienceFair', 'SCIENCE_FAIR', 'Education', 'A fair showcasing scientific projects and innovations.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(71, 'Carnival', 'Carnival', 'CARNIVAL', 'Entertainment', 'A large-scale fair with games and rides.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(72, 'New Year Celebration', 'NYE', 'NEW_YEAR', 'Festivity', 'A celebration to welcome the new year.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(73, 'Halloween Party', 'Halloween', 'HALLOWEEN_PARTY', 'Festivity', 'A spooky-themed costume party.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(74, 'Virtual Reality Expo', 'VRExpo', 'VR_EXPO', 'Technology', 'An expo showcasing VR technology.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(75, 'Gaming Convention', 'GameCon', 'GAMING_CON', 'Gaming', 'A convention dedicated to video games and gamers.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(76, 'Zumba Dance Event', 'Zumba', 'ZUMBA_EVENT', 'Fitness', 'A dance fitness event.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(77, 'Tech Startup Meetup', 'StartupMeet', 'STARTUP_MEET', 'Business & Tech', 'A networking event for startup entrepreneurs.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(78, 'Movie Screening & Discussion', 'MovieDisc', 'MOVIE_SCREEN', 'Film & Media', 'A screening followed by discussion.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(79, 'MMA Fight Night', 'MMAFight', 'MMA_FIGHT', 'Sports', 'A night of mixed martial arts fights.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(80, 'Entrepreneurship Workshop', 'EntreWorkshop', 'ENTRE_WORKSHOP', 'Business', 'A workshop for aspiring entrepreneurs.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(81, 'Sustainability Summit', 'SustainSummit', 'SUSTAIN_SUMMIT', 'Environment', 'An event discussing sustainability initiatives.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(82, 'Green Energy Expo', 'GreenExpo', 'GREEN_EXPO', 'Renewable Energy', 'An exhibition promoting green energy solutions.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(83, 'Virtual Hackathon', 'VirtualHack', 'VIRTUAL_HACK', 'Tech', 'An online coding and innovation competition.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(84, 'Cultural Exchange Festival', 'CulturalFest', 'CULTURAL_FEST', 'Culture & Diversity', 'An event celebrating cultural diversity.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(85, 'Robotics Competition', 'RoboComp', 'ROBO_COMP', 'Tech', 'A competition for robotics enthusiasts.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(86, 'Smart City Summit', 'SmartCity', 'SMART_CITY', 'Urban Development', 'A summit discussing smart city technologies.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(87, 'TEDx Talk', 'TEDx', 'TEDX_TALK', 'Knowledge Sharing', 'A local TED-style talk event.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(88, 'Digital Marketing Conference', 'DigiMark', 'DIGI_MARK_CONF', 'Marketing', 'An event focused on digital marketing trends.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(89, 'Startup Funding Bootcamp', 'StartFund', 'START_FUND_BOOT', 'Finance', 'An event teaching how to secure startup funding.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07'),
(90, 'Influencer Meetup', 'InfluMeet', 'INFLUENCER_MEET', 'Social Media', 'An event for influencers to network.', 1, 1, '2025-02-10 14:47:07', 1, '2025-02-10 14:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `config_expanses_types`
--

CREATE TABLE `config_expanses_types` (
  `ccet_id` int(10) NOT NULL,
  `ccet_name` varchar(155) NOT NULL,
  `ccet_shortname` varchar(155) NOT NULL,
  `ccet_code` varchar(100) NOT NULL,
  `ccet_purpose` varchar(255) NOT NULL,
  `ccet_desc` varchar(525) NOT NULL,
  `ccet_status` int(1) NOT NULL,
  `ccet_created_at` varchar(45) NOT NULL,
  `ccet_created_by` int(10) NOT NULL,
  `ccet_updated_at` varchar(45) NOT NULL,
  `ccet_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_expanses_types`
--

INSERT INTO `config_expanses_types` (`ccet_id`, `ccet_name`, `ccet_shortname`, `ccet_code`, `ccet_purpose`, `ccet_desc`, `ccet_status`, `ccet_created_at`, `ccet_created_by`, `ccet_updated_at`, `ccet_updated_by`) VALUES
(1, 'Salaries & Wages', 'SALARIES_WAGES', 'SAL001', 'Employee Salary Payments', 'Regular monthly salaries and wages paid to employees.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(2, 'Bonuses & Incentives', 'BONUSES_INC', 'SAL002', 'Employee Motivation', 'Performance-based bonuses and incentives for employees.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(3, 'Employee Benefits', 'EMP_BENEFITS', 'SAL003', 'Employee Welfare', 'Health insurance, provident fund, and other employee benefits.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(4, 'Overtime Pay', 'OVERTIME_PAY', 'SAL004', 'Extra Work Compensation', 'Payment for overtime work done by employees.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(5, 'Freelancer/Contractor Payments', 'FREELANCER_PAY', 'SAL005', 'External Work Payments', 'Payments made to external freelancers or contractors.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(6, 'Employee Training & Development', 'EMP_TRAINING', 'SAL006', 'Skill Enhancement', 'Expenses for employee training and development programs.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(7, 'Recruitment Expenses', 'RECRUITMENT', 'SAL007', 'Hiring Costs', 'Costs related to hiring new employees including job postings.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(8, 'Business Travel & Accommodation', 'TRAVEL_ACCOM', 'SAL008', 'Official Travel', 'Expenses for employee business travel, lodging, and food.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(9, 'Office Rent/Lease', 'OFFICE_RENT', 'ADM001', 'Office Space', 'Monthly rent or lease payments for office premises.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(10, 'Utility Bills', 'UTILITY_BILLS', 'ADM002', 'Operational Costs', 'Electricity, water, and gas expenses for office operations.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(11, 'Internet & Phone Bills', 'INTERNET_PHONE', 'ADM003', 'Communication', 'Expenses for office internet and telephone services.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(12, 'Office Supplies', 'OFFICE_SUPPLIES', 'ADM004', 'Work Essentials', 'Stationery, printing, and other office supplies expenses.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(13, 'Furniture & Fixtures', 'FURNITURE_FIXT', 'ADM005', 'Office Setup', 'Expenses for office furniture and fixtures.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(14, 'Cleaning & Maintenance', 'CLEAN_MAINT', 'ADM006', 'Hygiene & Upkeep', 'Office cleaning, maintenance, and janitorial services.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(15, 'Security Services', 'SECURITY_SERV', 'ADM007', 'Safety Measures', 'Expenses for security guards, CCTV maintenance, etc.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(16, 'Insurance', 'INSURANCE', 'ADM008', 'Risk Management', 'Property, liability, and other office-related insurance.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(17, 'Digital Marketing', 'DIGI_MARKETING', 'MKT001', 'Online Promotion', 'Google Ads, Facebook Ads, and digital advertising expenses.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(18, 'Social Media Promotions', 'SOCIAL_MEDIA', 'MKT002', 'Brand Awareness', 'Paid promotions on social media platforms.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(19, 'SEO & Content Marketing', 'SEO_CONTENT', 'MKT003', 'Website Optimization', 'Expenses for search engine optimization and content marketing.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(20, 'Print & Media Advertising', 'PRINT_MEDIA', 'MKT004', 'Offline Marketing', 'Print advertisements, billboards, TV, and radio ads.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(21, 'Branding & Graphic Design', 'BRAND_DESIGN', 'MKT005', 'Visual Identity', 'Expenses for logo design, banners, and branding materials.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(22, 'Website Development & Hosting', 'WEB_DEV_HOST', 'MKT006', 'Online Presence', 'Website creation, hosting, and maintenance costs.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(23, 'Sponsorships & Events', 'SPONSOR_EVENTS', 'MKT007', 'Networking', 'Participation in industry events, sponsorship fees.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(24, 'Public Relations (PR)', 'PUBLIC_RELATIONS', 'MKT008', 'Media Coverage', 'PR campaigns, press releases, and media outreach.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(25, 'Software Subscriptions', 'SOFTWARE_SUBS', 'IT001', 'Business Tools', 'SaaS tools, CRM, project management software subscriptions.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(26, 'Cloud Services', 'CLOUD_SERVICES', 'IT002', 'Data Storage', 'Expenses for AWS, Google Cloud, Azure, etc.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(27, 'Hardware Purchases', 'HARDWARE_PURC', 'IT003', 'IT Equipment', 'Laptops, servers, networking equipment, etc.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(28, 'IT Support & Maintenance', 'IT_SUPPORT', 'IT004', 'Technical Assistance', 'IT support services and system maintenance.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(29, 'Cybersecurity & Data Protection', 'CYBERSECURITY', 'IT005', 'Data Security', 'Firewall, antivirus, and security software expenses.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(30, 'Sales Team Commissions', 'SALES_COMMS', 'SAL009', 'Sales Incentives', 'Commission payments for the sales team.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(31, 'Customer Support Tools', 'CUST_SUPPORT', 'SAL010', 'Customer Service', 'Expenses for chatbots, call centers, and support software.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(32, 'Legal Consultancy Fees', 'LEGAL_FEES', 'LEGAL001', 'Legal Advice', 'Consultation fees paid to lawyers and legal advisors.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(33, 'Government Taxes & Duties', 'TAX_DUTIES', 'FIN001', 'Regulatory Compliance', 'Corporate taxes, GST, VAT, and other government fees.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(34, 'Fuel Costs', 'FUEL_COSTS', 'TRANS001', 'Transportation', 'Fuel expenses for company vehicles.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(35, 'Vehicle Maintenance', 'VEH_MAINTENANCE', 'TRANS002', 'Fleet Management', 'Repair and maintenance costs for company vehicles.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(36, 'Loan Interest & Repayments', 'LOAN_REPAY', 'FIN002', 'Financial Obligations', 'Bank loan repayments and interest expenses.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(37, 'Equipment & Machinery Purchase', 'EQUIP_PURCHASE', 'CAP001', 'Fixed Asset Investment', 'Purchases of heavy equipment and machinery.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 20:04:29', 1),
(38, 'Building &amp; Property Investments', 'PROP_INVEST', 'CAP002', 'Real Estate', 'Investments in new buildings or properties.', 1, '2025-02-02 20:04:29', 1, '2025-02-02 09:37:19 PM', 1);

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
(1, 'NOIDA', 'dUlSTEdtYzF3ejBQU0wydGVRY1RnQT09', '28.627348', '77.380244', 1, '2023-05-10 05:09:48 pm', '2025-01-03 03:09:55 PM', 1, 1);

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
(1, 'smtp.hostinger.com', 'enquiry@gauravsinghigc.in', 'Gsi@9810895713#2025', '465', 'enquiry@gauravsinghigc.in');

-- --------------------------------------------------------

--
-- Table structure for table `config_meeting_types`
--

CREATE TABLE `config_meeting_types` (
  `cmt_id` int(10) NOT NULL,
  `cmt_name` varchar(155) NOT NULL,
  `cmt_shortname` varchar(75) NOT NULL,
  `cmt_code` varchar(55) NOT NULL,
  `cmt_purpose` varchar(255) NOT NULL,
  `cmt_desc` varchar(425) NOT NULL,
  `cmt_status` int(1) NOT NULL DEFAULT 1,
  `cmt_created_at` varchar(45) NOT NULL,
  `cmt_updated_at` varchar(45) NOT NULL,
  `cmt_created_by` int(10) NOT NULL,
  `cmt_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_meeting_types`
--

INSERT INTO `config_meeting_types` (`cmt_id`, `cmt_name`, `cmt_shortname`, `cmt_code`, `cmt_purpose`, `cmt_desc`, `cmt_status`, `cmt_created_at`, `cmt_updated_at`, `cmt_created_by`, `cmt_updated_by`) VALUES
(1, 'Status Update Meeting', 'status_update', 'SUM', 'Used for providing updates on the progress of tasks or projects.', 'Regular meeting to update team members on ongoing project status, discuss challenges, and plan next steps.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(2, 'Team Meeting', 'team_meeting', 'TM', 'Used for team discussions and collaboration on tasks.', 'Regular meeting for team discussions, task assignments, and addressing team-related concerns.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(3, 'Client Meeting', 'client_meeting', 'CM', 'Used for discussing client needs, progress, and project updates.', 'Meeting with clients to understand their requirements, review project status, and manage expectations.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(4, 'Sales Meeting', 'sales_meeting', 'SM', 'Used for discussing sales strategies, targets, and performance.', 'Regular meeting to discuss sales targets, strategy, and review sales performance for growth and targets achievement.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(5, 'Performance Review Meeting', 'performance_review', 'PRM', 'Used for assessing individual or team performance.', 'A meeting focused on assessing individual or team performance, providing feedback, and setting goals for improvement.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(6, 'Board Meeting', 'board_meeting', 'BM', 'Used for high-level organizational discussions with the board of directors.', 'Meeting involving the board of directors to discuss company strategy, goals, and financial performance.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(7, 'Investor Meeting', 'investor_meeting', 'IM', 'Used for meeting with potential or existing investors to discuss financials and strategy.', 'A meeting with investors to provide updates on company performance, financials, and future plans.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(8, 'Brainstorming Meeting', 'brainstorming', 'BM', 'Used for generating ideas and solving problems creatively.', 'A meeting where team members share ideas to solve specific challenges and come up with innovative solutions.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(9, 'Decision-Making Meeting', 'decision_making', 'DMM', 'Used for making critical decisions in a group setting.', 'A meeting where important decisions are made, requiring input from various stakeholders.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(10, 'Project Kickoff Meeting', 'project_kickoff', 'PKM', 'Used to start a new project and align the team on goals and timelines.', 'A meeting to kick off a new project, define goals, assign tasks, and discuss timelines and resources.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(11, 'Project Review Meeting', 'project_review', 'PRM', 'Used for evaluating the progress of an ongoing project.', 'A meeting to review the current progress of a project, identify obstacles, and adjust timelines and plans as needed.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(12, 'Sprint Planning Meeting', 'sprint_planning', 'SPM', 'Used in agile teams to plan work for the next sprint cycle.', 'A meeting to discuss and plan tasks and goals for the next sprint cycle in agile project management.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(13, 'Daily Standup Meeting', 'daily_standup', 'DSM', 'Used for quick daily check-ins with the team on current tasks and blockers.', 'A short meeting where team members provide updates on their current work and highlight any obstacles.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(14, 'Retrospective Meeting', 'retrospective', 'RM', 'Used to review the performance of a completed sprint or project.', 'A meeting where the team reflects on what went well, what didn’t, and how processes can be improved in future projects.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(15, 'One-on-One Meeting', 'one_on_one', 'OOM', 'Used for individual check-ins between manager and team members.', 'A private meeting between a manager and a team member to discuss performance, challenges, and personal development.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(16, 'Training Meeting', 'training_meeting', 'TM', 'Used for knowledge sharing, skills development, and training.', 'A meeting focused on training and development, offering knowledge sharing and skills enhancement to employees or teams.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(17, 'HR Meeting', 'hr_meeting', 'HRM', 'Used for human resource discussions and decisions.', 'A meeting held by HR to address employee-related issues, performance, policies, and workplace environment.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(18, 'Onboarding Meeting', 'onboarding', 'OBM', 'Used for introducing new employees to the company and its processes.', 'A meeting designed for new hires to introduce them to the company culture, processes, and expectations.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(19, 'Exit Interview Meeting', 'exit_interview', 'EIM', 'Used for discussing feedback when an employee is leaving the company.', 'A formal interview to gather feedback from departing employees about their experience within the company.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(20, 'Crisis Management Meeting', 'crisis_management', 'CMM', 'Used to address and manage urgent issues or crises within the company.', 'A meeting held to address urgent crises, identify solutions, and implement a plan to manage the situation effectively.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(21, 'Financial Review Meeting', 'financial_review', 'FRM', 'Used for reviewing financial performance and planning future financial strategies.', 'A meeting to review company finances, including profit & loss statements, budgeting, and financial forecasting.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(22, 'Strategy Planning Meeting', 'strategy_planning', 'SPM', 'Used for developing long-term strategies and setting business goals.', 'A meeting focused on planning the long-term strategy for the company, setting goals, and defining key business objectives.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(23, 'Quarterly Business Review (QBR) Meeting', 'quarterly_review', 'QBR', 'Used to review business performance on a quarterly basis.', 'A meeting to evaluate business performance over the past quarter and plan for the next quarter based on key metrics.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(24, 'Town Hall Meeting', 'town_hall', 'THM', 'Used for addressing all employees and sharing key company updates.', 'A company-wide meeting where leadership shares important updates and answers questions from employees.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(25, 'Vendor Meeting', 'vendor_meeting', 'VM', 'Used for discussions with external vendors or suppliers.', 'A meeting with vendors to discuss services, contracts, pricing, and potential partnerships.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(26, 'Partnership Meeting', 'partnership_meeting', 'PM', 'Used for discussions with current or potential business partners.', 'A meeting to discuss existing partnerships or explore new business collaborations and opportunities.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(27, 'Networking Meeting', 'networking_meeting', 'NM', 'Used for connecting with new people or potential collaborators.', 'A meeting aimed at building professional networks and exploring new opportunities for collaboration or business growth.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(28, 'All-Hands Meeting', 'all_hands', 'AHM', 'Used for company-wide updates from leadership.', 'A meeting where the entire company comes together to hear from leadership on company performance, updates, and future plans.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(29, 'Committee Meeting', 'committee_meeting', 'CM', 'Used for meetings of specific organizational committees.', 'A meeting where members of a specific committee (e.g., audit, ethics, etc.) gather to discuss relevant matters and make decisions.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(30, 'Product Development Meeting', 'product_development', 'PDM', 'Used for discussions around the development of new products.', 'A meeting where the product development team discusses progress, challenges, and planning for upcoming product releases.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(31, 'Research & Development (R&D) Meeting', 'research_development', 'RDM', 'Used for discussing research projects and product innovations.', 'A meeting focused on innovation, research projects, and development of new products or technologies.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(32, 'Marketing Meeting', 'marketing_meeting', 'MM', 'Used for discussing marketing strategies, campaigns, and results.', 'A meeting where marketing teams discuss campaign strategies, performance analysis, and upcoming marketing initiatives.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(33, 'Campaign Planning Meeting', 'campaign_planning', 'CPM', 'Used for planning and strategizing marketing campaigns.', 'A meeting where marketing teams plan future campaigns, set objectives, and allocate resources accordingly.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(34, 'Press & Media Meeting', 'press_media', 'PMM', 'Used for handling press releases and media coverage discussions.', 'A meeting where the PR team meets with media professionals or discusses press release strategies and media coverage opportunities.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(35, 'Government Meeting', 'government_meeting', 'GM', 'Used for official meetings with government entities or regulators.', 'A meeting with government representatives to discuss policies, regulations, or governmental matters affecting the business.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(36, 'Audit Meeting', 'audit_meeting', 'AM', 'Used for reviewing financial or operational audits.', 'A meeting where internal or external auditors present audit findings and discuss improvements or issues discovered during the audit process.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(37, 'Legal & Compliance Meeting', 'legal_compliance', 'LCM', 'Used for discussing legal and compliance matters within the organization.', 'A meeting to review compliance issues, legal requirements, or any ongoing legal matters.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(38, 'Contract Negotiation Meeting', 'contract_negotiation', 'CNM', 'Used for negotiating terms and conditions of business contracts.', 'A meeting where both parties come together to negotiate terms and finalize agreements on contracts or deals.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(39, 'Merger & Acquisition Meeting', 'merger_acquisition', 'MAM', 'Used for discussing mergers and acquisitions.', 'A meeting focused on potential mergers, acquisitions, or business consolidations, discussing terms and due diligence processes.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(40, 'Technical Meeting', 'technical_meeting', 'TM', 'Used for discussing technical aspects of projects or products.', 'A meeting where technical teams discuss project details, issues, and solutions related to product development or infrastructure.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(41, 'Incident Response Meeting', 'incident_response', 'IRM', 'Used for addressing and managing a business-related incident or crisis.', 'A meeting focused on assessing and managing a critical incident, outlining response plans, and implementing corrective measures.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(42, 'Customer Feedback Meeting', 'customer_feedback', 'CFM', 'Used for gathering feedback from customers or clients.', 'A meeting to collect feedback on products or services, identifying areas for improvement and customer satisfaction strategies.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(43, 'Support & Service Meeting', 'support_service', 'SSM', 'Used for customer support discussions and service improvements.', 'A meeting focused on reviewing customer service performance, addressing support challenges, and improving service delivery.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(44, 'Innovation Meeting', 'innovation_meeting', 'IM', 'Used for discussing innovative ideas and new business opportunities.', 'A meeting to discuss new business ideas, product innovations, and opportunities for business growth and advancement.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(45, 'Cultural & Engagement Meeting', 'cultural_engagement', 'CEM', 'Used for discussing company culture and employee engagement strategies.', 'A meeting focused on strengthening company culture, improving employee engagement, and fostering a positive work environment.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(46, 'Remote Team Meeting', 'remote_team', 'RTM', 'Used for virtual meetings with remote team members.', 'A meeting held virtually with team members working remotely, focusing on communication, task coordination, and progress updates.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(47, 'Annual General Meeting (AGM)', 'annual_general', 'AGM', 'Used for discussing the annual performance and direction of the company.', 'A formal meeting where the company’s financial performance, strategy, and future directions are discussed with shareholders and stakeholders.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(48, 'Performance Alignment Meeting', 'performance_alignment', 'PAM', 'Used for aligning team and individual performance with company goals.', 'A meeting where performance metrics are reviewed, and strategies are discussed to align personal or team performance with company objectives.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1),
(49, 'Exit Strategy Meeting', 'exit_strategy', 'ESM', 'Used for planning the exit strategy of a business or investment.', 'A meeting focused on planning the exit strategy for a business, including asset liquidation, mergers, or acquisitions.', 1, '2025-02-03 15:42:06', '2025-02-03 15:42:06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_note_remarks_types`
--

CREATE TABLE `config_note_remarks_types` (
  `cnrt_id` int(10) NOT NULL,
  `cnrt_name` varchar(155) NOT NULL,
  `cnrt_shortname` varchar(75) NOT NULL,
  `cnrt_code` varchar(55) NOT NULL,
  `cnrt_purpose` varchar(255) NOT NULL,
  `cnrt_desc` varchar(425) NOT NULL,
  `cnrt_status` int(1) NOT NULL DEFAULT 1,
  `cnrt_created_at` varchar(45) NOT NULL,
  `cnrt_updated_at` varchar(45) NOT NULL,
  `cnrt_created_by` int(10) NOT NULL,
  `cnrt_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_note_remarks_types`
--

INSERT INTO `config_note_remarks_types` (`cnrt_id`, `cnrt_name`, `cnrt_shortname`, `cnrt_code`, `cnrt_purpose`, `cnrt_desc`, `cnrt_status`, `cnrt_created_at`, `cnrt_updated_at`, `cnrt_created_by`, `cnrt_updated_by`) VALUES
(1, 'General Note', 'general_note', 'GN', 'A general note to document information without a specific category or urgency.', 'A note that captures general information or observations without requiring immediate action or follow-up.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(2, 'Important Note', 'important_note', 'IN', 'A note highlighting critical information requiring attention.', 'A note that emphasizes important information, ensuring it is noticed and acted upon if necessary.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(3, 'Action Required Note', 'action_required', 'ARN', 'A note indicating actions that need to be taken promptly.', 'This note is meant to alert users that immediate action is required to proceed with a task or process.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(4, 'Follow-up Note', 'follow_up', 'FN', 'A note reminding individuals to follow up on pending actions or tasks.', 'This note serves as a reminder to follow up on tasks or decisions that are still pending or require attention after a set period.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(5, 'Reminder Note', 'reminder_note', 'RN', 'A note reminding individuals of upcoming tasks or deadlines.', 'A reminder to ensure that important tasks, deadlines, or appointments are not forgotten or missed.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(6, 'Clarification Note', 'clarification_note', 'CN', 'A note aimed at clarifying confusion or misunderstandings regarding certain points.', 'This note provides additional explanation or clarification to resolve ambiguity or confusion regarding instructions or decisions.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(7, 'Feedback Note', 'feedback_note', 'FN', 'A note containing feedback for improvement or recognition of performance.', 'A note offering constructive feedback or praise based on observations, reviews, or evaluations of actions or results.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(8, 'Observation Note', 'observation_note', 'ON', 'A note recording observations without offering conclusions or recommendations.', 'A note to document observations made during a process, event, or situation, without any bias or judgment attached.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(9, 'Instruction Note', 'instruction_note', 'IN', 'A note that provides instructions or guidelines for carrying out tasks or actions.', 'This note includes detailed instructions or steps that need to be followed to complete a task or process efficiently.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(10, 'Recommendation Remark', 'recommendation_remark', 'RR', 'A remark offering suggestions or advice for improvement or future actions.', 'A remark that suggests an ideal course of action, based on an analysis or experience, for improving results or efficiency.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(11, 'Acknowledgment Remark', 'acknowledgment_remark', 'AR', 'A remark acknowledging the completion of tasks or receipt of information.', 'This remark recognizes and acknowledges the receipt of information or completion of a task, signifying that the process is confirmed.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(12, 'Progress Remark', 'progress_remark', 'PR', 'A remark indicating progress or milestones achieved during a process or task.', 'A remark that tracks the progress or milestones achieved in a project, ensuring transparency and motivation to continue work.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(13, 'Appreciation Remark', 'appreciation_remark', 'AR', 'A remark expressing appreciation for good performance or actions.', 'A remark recognizing and appreciating efforts, contributions, or achievements to motivate and encourage further excellence.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(14, 'Warning Remark', 'warning_remark', 'WR', 'A remark serving as a caution or alert to prevent mistakes or ensure compliance.', 'This remark serves as a warning about potential risks or non-compliance, urging individuals to correct actions or behaviors to avoid consequences.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(15, 'Urgent Remark', 'urgent_remark', 'UR', 'A remark highlighting critical urgency that requires immediate action or attention.', 'A remark that emphasizes the urgency of the situation, ensuring swift attention and action are taken to address the issue or opportunity.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(16, 'Suggestion Remark', 'suggestion_remark', 'SR', 'A remark offering ideas or suggestions for improvement or change.', 'A remark that proposes ideas or improvements to enhance processes, outcomes, or strategies in a collaborative environment.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(17, 'Correction Remark', 'correction_remark', 'CR', 'A remark correcting an error, oversight, or miscommunication.', 'A remark that corrects mistakes, inaccuracies, or misunderstandings to ensure proper direction or action moving forward.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(18, 'Approval Remark', 'approval_remark', 'AR', 'A remark indicating the approval of an action, document, or request.', 'This remark signifies that a request, document, or task has been reviewed and formally approved for execution or further processing.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(19, 'Disapproval Remark', 'disapproval_remark', 'DR', 'A remark indicating disagreement or disapproval of a decision or action.', 'This remark indicates that an action, decision, or request is disapproved, with reasons outlined to guide adjustments or changes.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(20, 'Informational Remark', 'informational_remark', 'IR', 'A remark providing additional information or context to clarify a situation.', 'A remark that delivers necessary information or context, supporting decision-making or understanding of a specific situation or event.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(21, 'Conclusion Remark', 'conclusion_remark', 'CR', 'A remark summarizing the outcome or results of a process or event.', 'This remark summarizes the key outcomes, conclusions, or findings of a task, project, or discussion, drawing the process to a close.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(22, 'Summary Remark', 'summary_remark', 'SR', 'A remark offering a concise summary of key points or outcomes.', 'A brief remark that provides a high-level summary of a process, meeting, or document for easy reference and understanding.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(23, 'Status Update Remark', 'status_update_remark', 'SUR', 'A remark updating the status or condition of a project, task, or process.', 'A remark that communicates the current status of a task, project, or initiative, ensuring stakeholders are informed of developments or delays.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(24, 'Evaluation Remark', 'evaluation_remark', 'ER', 'A remark assessing the quality or effectiveness of a task, project, or individual.', 'This remark provides an evaluation of the performance or effectiveness of a task, project, or person, offering feedback or a rating of success.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(25, 'Inquiry Remark', 'inquiry_remark', 'IR', 'A remark seeking clarification, additional information, or responses.', 'A remark that asks questions or inquires about a specific situation, helping to gather more details or clarify a point of interest.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(26, 'Resolution Remark', 'resolution_remark', 'RR', 'A remark indicating that an issue or problem has been resolved.', 'A remark confirming that a problem or issue has been resolved, providing the solution or steps taken to reach resolution.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(27, 'Confirmation Remark', 'confirmation_remark', 'CR', 'A remark confirming the receipt or completion of an action or request.', 'This remark confirms that a task, action, or request has been completed or acknowledged, ensuring accountability and closure.', 1, '2025-02-03 16:05:34', '2025-02-03 16:05:34', 1, 1),
(28, 'Status Change Remark', 'status_change_remark', 'SCR', 'A remark indicating that the status or condition of an item has changed.', 'A remark used to communicate that the status of a task, project, or item has changed, outlining the new status and reasons for the change.', 1, '2025-02-03 16:05:34', '2025-02-03 04:07:11 PM', 1, 1);

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
-- Table structure for table `config_purchase_types`
--

CREATE TABLE `config_purchase_types` (
  `ccpt_id` int(10) NOT NULL,
  `ccpt_name` varchar(155) NOT NULL,
  `ccpt_shortname` varchar(55) NOT NULL,
  `ccpt_code` varchar(30) NOT NULL,
  `ccpt_purpose` varchar(255) NOT NULL,
  `ccpt_status` int(1) NOT NULL DEFAULT 1,
  `ccpt_created_at` varchar(45) NOT NULL,
  `ccpt_updated_at` varchar(45) NOT NULL,
  `ccpt_created_by` int(10) NOT NULL,
  `ccpt_updated_by` int(10) NOT NULL,
  `ccpt_desc` varchar(525) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_purchase_types`
--

INSERT INTO `config_purchase_types` (`ccpt_id`, `ccpt_name`, `ccpt_shortname`, `ccpt_code`, `ccpt_purpose`, `ccpt_status`, `ccpt_created_at`, `ccpt_updated_at`, `ccpt_created_by`, `ccpt_updated_by`, `ccpt_desc`) VALUES
(1, 'Raw Materials', 'RM', 'PUR-RM', 'Essential materials for production and manufacturing.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Raw materials used for manufacturing or production processes, directly impacting product quality and efficiency.'),
(2, 'Office Supplies', 'OS', 'PUR-OS', 'Basic supplies for daily office operations.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Includes stationery, paper, writing tools, and other consumables necessary for administrative functions.'),
(3, 'Equipment & Machinery', 'EM', 'PUR-EM', 'Machinery and tools for business operations.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Acquisition of necessary machines and tools for production, service delivery, and operational efficiency.'),
(4, 'Software & Licenses', 'SL', 'PUR-SL', 'Software tools and licenses for operations.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Purchase of software applications, operating systems, security tools, and subscriptions required for business functions.'),
(5, 'Marketing & Advertising Services', 'MA', 'PUR-MA', 'Expenses on promotions and branding.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Investment in online and offline marketing, social media ads, SEO, and branding activities to boost sales and visibility.'),
(6, 'Professional Consultancy', 'PC', 'PUR-PC', 'Expert services for legal, IT, and finance.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Hiring professionals for legal compliance, financial auditing, IT consulting, and strategic business planning.'),
(7, 'Utilities & Internet Services', 'UI', 'PUR-UI', 'Electricity, water, and internet costs.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Covers operational necessities like electricity, water supply, internet services, and telecommunication expenses.'),
(8, 'Business Travel & Accommodation', 'BTA', 'PUR-BTA', 'Travel and lodging for business needs.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Costs incurred for flights, hotels, transportation, and related expenses during business trips or meetings.'),
(9, 'Employee Training & Development', 'ETD', 'PUR-ETD', 'Enhancing employee skills and knowledge.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Training programs, online courses, workshops, and skill development initiatives for workforce improvement.'),
(10, 'Maintenance & Repairs', 'MR', 'PUR-MR', 'Upkeep of equipment and infrastructure.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Routine servicing, repair works, and preventive maintenance of office, factory, or IT equipment.'),
(11, 'Vehicle & Fleet Purchases', 'VFP', 'PUR-VFP', 'Buying and maintaining company vehicles.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Procurement of business vehicles, transportation maintenance, and fuel expenses.'),
(12, 'Packaging Materials', 'PM', 'PUR-PM', 'Materials for product packaging.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Boxes, cartons, wrapping, labels, and related materials used for safe product storage and delivery.'),
(13, 'Furniture & Fixtures', 'FF', 'PUR-FF', 'Office furniture and interior setup.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Purchase of chairs, desks, cabinets, workstations, and decor for office spaces.'),
(14, 'Outsourced Services', 'OS', 'PUR-OS', 'Third-party support for business tasks.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Hiring freelancers, agencies, or contractors for specialized business functions like content writing, IT support, or customer service.'),
(15, 'Research & Development Costs', 'RD', 'PUR-RD', 'Investment in innovation and improvement.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Costs related to developing new products, testing prototypes, and improving business processes.'),
(16, 'Insurance', 'INS', 'PUR-INS', 'Coverage for business and employees.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Health insurance, property insurance, liability coverage, and other business risk management policies.'),
(17, 'Manufacturing & Production Costs', 'MPC', 'PUR-MPC', 'Expenses related to production.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'All costs linked to producing goods, including raw materials, labor, and overhead expenses.'),
(18, 'Safety & Security Equipment', 'SSE', 'PUR-SSE', 'Ensuring workplace safety and security.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Purchases of CCTV cameras, fire extinguishers, alarms, safety gear, and security services.'),
(19, 'Printing & Stationery', 'PS', 'PUR-PS', 'Printing costs and office stationery.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Paper, business cards, brochures, and other printed materials required for business operations.'),
(20, 'Warehousing & Storage Services', 'WSS', 'PUR-WSS', 'Storage space for inventory.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Renting warehouses, purchasing storage solutions, and managing inventory logistics.'),
(21, 'Courier & Logistics Services', 'CLS', 'PUR-CLS', 'Shipping and delivery costs.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Freight charges, courier services, and logistics expenses for product distribution.'),
(22, 'Rent & Lease Payments', 'RLP', 'PUR-RLP', 'Office, warehouse, and equipment leases.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Monthly rental payments for office spaces, warehouses, or leased equipment required for business operations.'),
(23, 'Event & Sponsorship Expenses', 'ESE', 'PUR-ESE', 'Funding events and sponsorships.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Costs incurred for organizing events, sponsoring industry conferences, or brand partnerships.'),
(24, 'Corporate Gifts & Hospitality', 'CGH', 'PUR-CGH', 'Employee and client appreciation gifts.', 1, '2025-02-03 10:49:37', '2025-02-03 10:49:37', 1, 1, 'Promotional gifts, employee rewards, and hospitality expenses for business relations and customer engagement.'),
(25, 'IT & Networking Equipment', 'ITN', 'PUR-ITN', 'Computers, servers, and networking hardware.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Includes computers, servers, routers, modems, and other networking tools essential for business operations.'),
(26, 'Office Renovation & Interior', 'ORI', 'PUR-ORI', 'Office infrastructure upgrades.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Expenses related to office remodeling, interior design, workstation setup, and improvements in workplace aesthetics.'),
(27, 'HR & Payroll Services', 'HRP', 'PUR-HRP', 'Employee payroll and HR-related purchases.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Outsourced payroll services, HR management software, recruitment costs, and background verification expenses.'),
(28, 'Legal & Compliance Fees', 'LCF', 'PUR-LCF', 'Regulatory and compliance-related costs.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Legal consultation fees, business registrations, tax compliance, licensing fees, and regulatory audit expenses.'),
(29, 'Cloud & Web Hosting Services', 'CWHS', 'PUR-CWHS', 'Hosting and cloud computing services.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Expenses for cloud storage, website hosting, domain renewals, and cloud-based business solutions like AWS, Azure, or Google Cloud.'),
(30, 'Customer Support & Call Center', 'CSCC', 'PUR-CSCC', 'Support tools and outsourced call centers.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Call center outsourcing, customer service software, support ticketing systems, and AI chatbots.'),
(31, 'Subscription & Memberships', 'SM', 'PUR-SM', 'Recurring business subscriptions.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Corporate memberships, professional magazine subscriptions, industry association fees, and online tools like SaaS platforms.'),
(32, 'Hygiene & Sanitation Products', 'HSP', 'PUR-HSP', 'Cleaning and workplace hygiene supplies.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Hand sanitizers, cleaning equipment, air purifiers, and workplace sanitation services.'),
(33, 'Security & Access Control', 'SAC', 'PUR-SAC', 'Security systems and surveillance.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Access control systems, biometric devices, ID card printers, security personnel expenses, and digital security solutions.'),
(34, 'Corporate Events & Team Building', 'CETB', 'PUR-CETB', 'Company events and employee engagement.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Expenses for corporate retreats, annual celebrations, employee engagement programs, and awards functions.'),
(35, 'Sustainability & Green Initiatives', 'SGI', 'PUR-SGI', 'Eco-friendly business investments.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Solar panels, carbon offset programs, biodegradable materials, and environmentally friendly workplace initiatives.'),
(36, 'Healthcare & Medical Supplies', 'HMS', 'PUR-HMS', 'Medical kits and workplace healthcare.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'First-aid kits, emergency medical supplies, ergonomic furniture, and employee wellness programs.'),
(37, 'Training & Certification Programs', 'TCP', 'PUR-TCP', 'Employee certification and skill development.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Professional certification courses, leadership training, software training, and technical workshops.'),
(38, 'Company Vehicles Leasing', 'CVL', 'PUR-CVL', 'Leasing of business transportation.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Short-term and long-term vehicle lease agreements, fuel cards, and fleet management software subscriptions.'),
(39, 'Remote Work & Home Office Setup', 'RWO', 'PUR-RWO', 'Expenses for remote employee support.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Remote work allowances, home office furniture, business laptops, and reimbursement for high-speed internet.'),
(40, 'Prototyping & Testing Equipment', 'PTE', 'PUR-PTE', 'Equipment for product development.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, '3D printers, testing kits, software simulation tools, and specialized R&D materials for product innovation.'),
(41, 'AI & Automation Tools', 'AAT', 'PUR-AAT', 'AI-driven business automation.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Chatbots, robotic process automation (RPA), AI-based analytics tools, and business intelligence automation systems.'),
(42, 'Food & Beverages', 'FB', 'PUR-FB', 'Workplace refreshments and meals.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Tea, coffee, snacks, pantry supplies, employee meal plans, and corporate catering expenses.'),
(43, 'Custom Merchandise & Branding', 'CMB', 'PUR-CMB', 'Promotional merchandise.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Company-branded T-shirts, mugs, bags, and other promotional materials used for employee recognition and marketing.'),
(44, 'Emergency & Disaster Recovery', 'EDR', 'PUR-EDR', 'Business continuity planning.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Data backup solutions, disaster recovery plans, emergency response systems, and crisis management tools.'),
(45, 'Government & Regulatory Fees', 'GRF', 'PUR-GRF', 'Government dues and licenses.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Business registration fees, import/export duties, industry compliance charges, and environmental permits.'),
(46, 'AI & Data Analytics Software', 'ADAS', 'PUR-ADAS', 'AI-powered data insights.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Machine learning platforms, predictive analytics software, customer behavior tracking, and business intelligence tools.'),
(47, 'Cybersecurity & Data Protection', 'CDP', 'PUR-CDP', 'Business security against cyber threats.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Antivirus software, firewall systems, ethical hacking services, and employee cybersecurity training.'),
(48, 'International Trade & Imports', 'ITI', 'PUR-ITI', 'Procurement of imported goods.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Customs duties, international vendor contracts, foreign exchange expenses, and global supply chain management.'),
(49, 'Legal Settlements & Penalties', 'LSP', 'PUR-LSP', 'Fines, penalties, and legal cases.', 1, '2025-02-03 11:59:25', '2025-02-03 11:59:25', 1, 1, 'Legal settlements, business-related penalties, non-compliance fines, and dispute resolution expenses.'),
(50, 'Employee Welfare &amp; Recreational Activities', 'EWR', 'PUR-EWR', 'Employee well-being and leisure.', 1, '2025-02-03 11:59:25', '2025-02-03 12:07:04 PM', 1, 1, 'Company-sponsored fitness programs, recreational activities, employee wellness workshops, and relaxation spaces.');

-- --------------------------------------------------------

--
-- Table structure for table `config_reminder_types`
--

CREATE TABLE `config_reminder_types` (
  `crt_id` int(10) NOT NULL,
  `crt_name` varchar(155) NOT NULL,
  `crt_shortname` varchar(75) NOT NULL,
  `crt_code` varchar(55) NOT NULL,
  `crt_purpose` varchar(255) NOT NULL,
  `crt_desc` varchar(425) NOT NULL,
  `crt_status` int(1) NOT NULL DEFAULT 1,
  `crt_created_at` varchar(45) NOT NULL,
  `crt_updated_at` varchar(45) NOT NULL,
  `crt_created_by` int(10) NOT NULL,
  `crt_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_reminder_types`
--

INSERT INTO `config_reminder_types` (`crt_id`, `crt_name`, `crt_shortname`, `crt_code`, `crt_purpose`, `crt_desc`, `crt_status`, `crt_created_at`, `crt_updated_at`, `crt_created_by`, `crt_updated_by`) VALUES
(1, 'Payment Reminder', 'payment_reminder', 'PR', 'Reminder for due payments or bills that need to be paid.', 'A reminder to alert individuals or businesses of pending payments or bills that need to be cleared within a certain period.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(2, 'Project Deadline Reminder', 'project_deadline', 'PD', 'Reminder for approaching project deadlines or milestones.', 'A reminder to ensure that all team members or stakeholders are aware of upcoming project deadlines or milestone dates.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(3, 'Appointment Reminder', 'appointment_reminder', 'AR', 'Reminder for scheduled appointments or meetings.', 'A reminder to ensure individuals are aware of upcoming appointments or meetings to avoid missing them.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(4, 'Invoice Due Reminder', 'invoice_due', 'IDR', 'Reminder for invoices that are due for payment.', 'A reminder to notify clients or businesses when invoices are due, ensuring timely payment.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(5, 'Follow-up Reminder', 'follow_up', 'FR', 'Reminder for following up on pending actions or tasks.', 'A reminder to follow up on tasks, requests, or communications that need a response or action.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(6, 'Meeting Reminder', 'meeting_reminder', 'MR', 'Reminder for upcoming meetings or discussions.', 'A reminder to ensure all involved parties are aware of and prepared for an upcoming meeting or discussion.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(7, 'Task Completion Reminder', 'task_completion', 'TCR', 'Reminder to complete specific tasks or actions by a given deadline.', 'A reminder to complete assigned tasks within a defined time frame to ensure efficient workflow.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(8, 'Subscription Renewal Reminder', 'subscription_renewal', 'SRR', 'Reminder for subscription renewals for services or products.', 'A reminder to notify users or businesses about upcoming subscription renewals to avoid service interruptions.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(9, 'Bill Payment Reminder', 'bill_payment', 'BPR', 'Reminder for upcoming utility or service bill payments.', 'A reminder to ensure individuals or businesses are aware of upcoming utility bills or service fees that need payment.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(10, 'Event Reminder', 'event_reminder', 'ER', 'Reminder for upcoming events or occasions.', 'A reminder to inform individuals or teams of upcoming events, deadlines, or celebrations to ensure preparedness.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(11, 'Client Follow-up Reminder', 'client_follow_up', 'CFUR', 'Reminder to follow up with clients regarding projects or payments.', 'A reminder to ensure that clients are contacted and provided with necessary information or to finalize outstanding tasks.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(12, 'Contract Expiry Reminder', 'contract_expiry', 'CER', 'Reminder for contract renewal or expiry dates.', 'A reminder to ensure that contracts are renewed on time or that steps are taken before a contract expires.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(13, 'Report Submission Reminder', 'report_submission', 'RSR', 'Reminder for submitting reports by the given deadline.', 'A reminder to ensure timely submission of reports, assessments, or other required documents within a deadline.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(14, 'Tax Filing Reminder', 'tax_filing', 'TFR', 'Reminder to file taxes within the deadline set by the tax authorities.', 'A reminder to ensure that all tax-related filings are submitted before the required deadline to avoid penalties.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(15, 'Expense Submission Reminder', 'expense_submission', 'ESR', 'Reminder to submit expenses for reimbursement or reporting.', 'A reminder to ensure that all expenses are submitted on time for approval, reimbursement, or record-keeping purposes.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(16, 'Salary Payment Reminder', 'salary_payment', 'SPR', 'Reminder for salary disbursements to employees or contractors.', 'A reminder to ensure salaries are paid on time to employees or contractors to maintain good relations and avoid delays.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(17, 'Overdue Task Reminder', 'overdue_task', 'OTR', 'Reminder for tasks or actions that are past the due date.', 'A reminder for overdue tasks, ensuring that missed deadlines are addressed and actions are taken promptly to complete them.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(18, 'Course or Training Reminder', 'course_training', 'CTR', 'Reminder for upcoming courses, workshops, or training sessions.', 'A reminder to attend or prepare for upcoming educational courses, certifications, or professional development training sessions.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(19, 'Loan Repayment Reminder', 'loan_repayment', 'LRR', 'Reminder for loan repayments due on specific dates.', 'A reminder to ensure that loan repayments are made on time to avoid penalties or damage to credit.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(20, 'Loan Application Follow-up Reminder', 'loan_follow_up', 'LFR', 'Reminder for following up on loan applications or requests.', 'A reminder to follow up on the status of loan applications or necessary actions related to loan processes.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(21, 'Medical Appointment Reminder', 'medical_appointment', 'MAR', 'Reminder for upcoming medical appointments or checkups.', 'A reminder to ensure individuals attend scheduled medical appointments, tests, or checkups to maintain health and wellness.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(22, 'Insurance Payment Reminder', 'insurance_payment', 'IPR', 'Reminder for insurance policy payments or renewals.', 'A reminder to make timely payments for insurance premiums to ensure continued coverage and avoid policy lapses.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(23, 'Customer Payment Reminder', 'customer_payment', 'CPR', 'Reminder for customer payments for goods or services provided.', 'A reminder to ensure customers make timely payments for services or products to maintain smooth business operations.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(24, 'Social Media Post Reminder', 'social_media_post', 'SMP', 'Reminder to post content on social media platforms at scheduled times.', 'A reminder to ensure that posts, updates, or engagements are made according to the planned social media schedule.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(25, 'Product Delivery Reminder', 'product_delivery', 'PDR', 'Reminder for scheduled product deliveries to customers.', 'A reminder to ensure that product deliveries are carried out on time to customers, maintaining satisfaction and trust.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(26, 'Warranty Expiry Reminder', 'warranty_expiry', 'WER', 'Reminder for product warranty expiration dates.', 'A reminder to inform customers or employees about upcoming warranty expirations, encouraging product replacement or repairs if necessary.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(27, 'Employee Evaluation Reminder', 'employee_evaluation', 'EER', 'Reminder for performance evaluations and appraisals of employees.', 'A reminder to ensure timely performance reviews or evaluations are conducted for employees to assess and guide their progress.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(28, 'Employee Birthday Reminder', 'employee_birthday', 'EBR', 'Reminder for employee birthdays to celebrate or acknowledge the occasion.', 'A reminder to recognize employee birthdays, fostering a positive and appreciative work environment.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(29, 'Loan Approval Reminder', 'loan_approval', 'LAR', 'Reminder for loan approvals or rejections.', 'A reminder to notify clients or individuals regarding the approval status of their loan application.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(30, 'Vendor Payment Reminder', 'vendor_payment', 'VPR', 'Reminder for payments to be made to vendors or suppliers.', 'A reminder to ensure timely payments to vendors or suppliers to maintain business relationships and avoid disruptions in service or supply.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(31, 'Freelance Submission Reminder', 'freelance_submission', 'FSR', 'Reminder for freelancers to submit their work or invoices.', 'A reminder for freelancers to submit completed tasks, work reports, or invoices to clients within the agreed timeline.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(32, 'Contract Renewal Reminder', 'contract_renewal', 'CRR', 'Reminder for the renewal of business contracts or agreements.', 'A reminder for businesses or individuals to review and renew contracts before they expire to maintain service continuity.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(33, 'Product Review Reminder', 'product_review', 'PRR', 'Reminder for customers to submit feedback or reviews on products or services.', 'A reminder to encourage customers to provide feedback or reviews on purchased products, fostering engagement and improvement opportunities.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(34, 'Quarterly Report Reminder', 'quarterly_report', 'QRR', 'Reminder for preparing and submitting quarterly reports.', 'A reminder to prepare and submit quarterly business, financial, or performance reports for analysis or stakeholder meetings.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(35, 'Supplier Order Reminder', 'supplier_order', 'SOR', 'Reminder for reordering or checking on supplies from suppliers.', 'A reminder to ensure that supplies or materials are ordered in time to avoid shortages or production delays.', 1, '2025-02-03 16:22:25', '2025-02-03 16:22:25', 1, 1),
(36, 'Project Review Reminder', 'project_review', 'PRR', 'Reminder for periodic project reviews to ensure alignment with goals.', 'A reminder to assess project progress, discuss blockers, and adjust goals as necessary at regular intervals.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(37, 'Website Update Reminder', 'website_update', 'WUR', 'Reminder for scheduling updates or improvements on the company website.', 'A reminder to ensure that the website is up-to-date with fresh content, design improvements, and security patches.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(38, 'Software Update Reminder', 'software_update', 'SUR', 'Reminder for updating software or apps to the latest version.', 'A reminder to check for and install software or application updates, ensuring security patches and new features are implemented.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(39, 'Employee Leave Reminder', 'employee_leave', 'ELR', 'Reminder for tracking employee leave balances and approvals.', 'A reminder to ensure that employee leave requests are approved and managed properly to avoid disruptions in workflow.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(40, 'Holiday Reminder', 'holiday_reminder', 'HRR', 'Reminder for upcoming public holidays or company holidays.', 'A reminder to inform employees about upcoming holidays, ensuring they plan accordingly for time off and business operations are adjusted.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(41, 'Credit Card Payment Reminder', 'credit_card_payment', 'CCPR', 'Reminder to make monthly payments for credit cards.', 'A reminder to ensure that credit card payments are made on time to avoid interest charges and maintain credit scores.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(42, 'Stock Reorder Reminder', 'stock_reorder', 'SRR', 'Reminder for reordering inventory items before they run out.', 'A reminder to reorder stock items to avoid running out of key products or materials needed for business operations.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(43, 'Customer Feedback Collection Reminder', 'feedback_collection', 'FCR', 'Reminder to gather feedback from customers on services or products provided.', 'A reminder to collect customer feedback to improve products and services and address any potential issues or opportunities.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(44, 'Job Application Follow-up Reminder', 'job_application_followup', 'JAFR', 'Reminder to follow up with candidates after job interviews or applications.', 'A reminder to follow up on job applications or interviews to provide feedback, schedule additional rounds, or finalize hiring decisions.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(45, 'Performance Review Follow-up Reminder', 'performance_review_followup', 'PRFR', 'Reminder to follow up on the outcomes of employee performance reviews.', 'A reminder to address any goals, feedback, or action items that were discussed during performance reviews and track progress.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(46, 'Supplier Payment Reminder', 'supplier_payment', 'SPR', 'Reminder to process payments to suppliers on time.', 'A reminder to ensure that supplier payments are made according to agreed-upon terms, maintaining a positive relationship and avoiding delays.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(47, 'Freelancer Payment Reminder', 'freelancer_payment', 'FPR', 'Reminder for payment due to freelancers for completed projects.', 'A reminder to pay freelancers on time for services rendered, ensuring good professional relationships and timely compensation.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(48, 'Account Reconciliation Reminder', 'account_reconciliation', 'ARR', 'Reminder for monthly account reconciliations to ensure accurate financial records.', 'A reminder to review financial transactions, match account statements with internal records, and resolve discrepancies before closing monthly books.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(49, 'Marketing Campaign Deadline Reminder', 'marketing_campaign_deadline', 'MCDR', 'Reminder to meet deadlines for marketing campaigns or initiatives.', 'A reminder to ensure that all aspects of a marketing campaign are executed on time, including content, advertising, and reporting.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(50, 'Company Policy Update Reminder', 'company_policy_update', 'CPUR', 'Reminder for updating or reviewing company policies for compliance and relevance.', 'A reminder to regularly review and update company policies, ensuring they align with the current legal framework and business goals.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(51, 'Database Backup Reminder', 'database_backup', 'DBR', 'Reminder for regular database backups to ensure data security.', 'A reminder to perform database backups on a regular schedule to avoid data loss due to system failures or other issues.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(52, 'Employee Training Program Reminder', 'employee_training', 'ETR', 'Reminder for scheduled employee training or upskilling programs.', 'A reminder to ensure employees participate in training programs for professional development and to stay updated on industry trends or company tools.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(53, 'Legal Compliance Reminder', 'legal_compliance', 'LCR', 'Reminder for ensuring the business is compliant with local or international legal regulations.', 'A reminder to review and comply with legal and regulatory requirements applicable to the business, including taxes, licenses, and contracts.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(54, 'Customer Appointment Reminder', 'customer_appointment', 'CAR', 'Reminder for appointments or meetings with customers or clients.', 'A reminder to ensure that customer appointments are confirmed and attended to, maintaining professionalism and timely service.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(55, 'Product Launch Reminder', 'product_launch', 'PLR', 'Reminder for the scheduled launch of new products or services.', 'A reminder to ensure that all preparations for product launches are completed on time, including marketing, logistics, and customer outreach.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(56, 'Employee Probation Period Reminder', 'employee_probation', 'EPR', 'Reminder for monitoring and evaluating employee probation periods.', 'A reminder to evaluate the performance of employees within their probation period, providing feedback and deciding whether to confirm their position.', 1, '2025-02-03 16:22:58', '2025-02-03 16:22:58', 1, 1),
(57, 'Freelancer Submission Reminder', 'freelancer_submission', 'FSR', 'Reminder for freelancers to submit their work or invoices on time.', 'A reminder for freelancers to ensure timely submission of work reports, completed tasks, or invoices for payment or review.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(58, 'Subscription Trial Expiry Reminder', 'subscription_trial_expiry', 'STE', 'Reminder for users to renew or cancel their subscription before the trial expires.', 'A reminder to notify users when their subscription trial period is about to expire, prompting them to either renew or cancel it.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(59, 'Project Milestone Reminder', 'project_milestone', 'PMR', 'Reminder for approaching or missed project milestones and deadlines.', 'A reminder for stakeholders or project managers about key project milestones that are due or approaching for timely completion.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(60, 'Vendor Contract Renewal Reminder', 'vendor_contract_renewal', 'VCR', 'Reminder for vendors to renew their service or supply contracts.', 'A reminder to ensure that vendor contracts are renewed on time, avoiding lapses in service or supply.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(61, 'Client Payment Reminder', 'client_payment', 'CPR', 'Reminder for clients to make payments for the services or products provided.', 'A reminder to ensure clients are reminded of their outstanding payments, helping to maintain positive cash flow.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(62, 'Salary Revision Reminder', 'salary_revision', 'SRR', 'Reminder for scheduled salary revisions or reviews for employees.', 'A reminder to review and implement salary revisions or adjustments for employees, ensuring that they are completed on schedule.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(63, 'Customer Engagement Reminder', 'customer_engagement', 'CER', 'Reminder to engage with customers through feedback, surveys, or follow-up actions.', 'A reminder to engage customers to enhance loyalty, improve service, or gather feedback on their experience with the company.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(64, 'Employee Shift Reminder', 'employee_shift', 'ESR', 'Reminder for employee shift timings and schedules.', 'A reminder to ensure that employees are informed of their upcoming shift schedules to avoid confusion or scheduling issues.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(65, 'Team Collaboration Deadline Reminder', 'team_collaboration_deadline', 'TCDR', 'Reminder for collaboration deadlines in team projects or tasks.', 'A reminder for teams to meet collaboration deadlines or deliverables, ensuring timely and effective completion of group projects.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(66, 'Annual Review Reminder', 'annual_review', 'ARR', 'Reminder for annual performance, budget, or business reviews.', 'A reminder to prepare for and conduct annual reviews, whether for employee performance, financials, or business strategies.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(67, 'Network Maintenance Reminder', 'network_maintenance', 'NMR', 'Reminder for scheduled network maintenance or system updates.', 'A reminder to ensure timely network maintenance, upgrades, or patch management to maintain smooth system operations and security.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(68, 'Marketing Budget Review Reminder', 'marketing_budget_review', 'MBR', 'Reminder for reviewing and adjusting the marketing budget as necessary.', 'A reminder to review and adjust the marketing budget regularly, ensuring funds are allocated effectively for campaigns and goals.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(69, 'Customer Service Follow-up Reminder', 'customer_service_follow_up', 'CSFR', 'Reminder for customer service representatives to follow up with clients.', 'A reminder for customer service teams to check in with clients after support interactions to ensure issues are resolved and satisfaction is high.', 1, '2025-02-03 16:25:11', '2025-02-03 16:25:11', 1, 1),
(70, 'Website Traffic Check Reminder', 'website_traffic_check', 'WTCR', 'Reminder to analyze and monitor website traffic performance and trends.', 'A reminder to assess website traffic, user behavior, and trends to optimize website performance and improve user experience.', 1, '2025-02-03 16:25:11', '2025-02-06 04:23:17 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_url_types`
--

CREATE TABLE `config_url_types` (
  `cut_id` int(10) NOT NULL,
  `cut_name` varchar(75) NOT NULL,
  `cut_purpose` varchar(255) NOT NULL,
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

INSERT INTO `config_url_types` (`cut_id`, `cut_name`, `cut_purpose`, `cut_icon`, `cut_created_at`, `cut_updated_at`, `cut_created_by`, `cut_updated_by`, `cut_status`, `if_cut_deleted`) VALUES
(1, 'Web Theme URL', 'A URL related to themes and templates for websites.', 'fa fa-paint-brush', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(2, 'Government Portal URL', 'A URL to government-related online services and portals.', 'fa fa-gov', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(3, 'Education Website URL', 'A URL for educational institutions, resources, or platforms.', 'fa fa-graduation-cap', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(4, 'College Website URL', 'A URL for colleges and higher educational institutions.', 'fa fa-university', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(5, 'Automobile Website URL', 'A URL for car dealerships, automobile services, and related websites.', 'fa fa-car', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(6, 'E-commerce Website URL', 'A URL for online shopping platforms and e-commerce websites.', 'fa fa-shopping-cart', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(7, 'Mobile App URL', 'A URL for mobile applications or related services.', 'fa fa-mobile', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(8, 'Social Media Platform URL', 'A URL for social media platforms like Facebook, Twitter, etc.', 'fa fa-users', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(9, 'News Website URL', 'A URL for news, updates, and articles on different topics.', 'fa fa-newspaper-o', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(10, 'Banking Portal URL', 'A URL for banking services like online account management and transactions.', 'fa fa-university', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(11, 'Healthcare Portal URL', 'A URL for healthcare services like online doctor appointments, health records, etc.', 'fa fa-hospital-o', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(12, 'Real Estate Website URL', 'A URL for real estate listings and property-related services.', 'fa fa-building', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(13, 'Job Portal URL', 'A URL for job search, career opportunities, and recruitment platforms.', 'fa fa-briefcase', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(14, 'Non-Profit Organization URL', 'A URL for charitable, social cause, or NGO websites.', 'fa fa-heart', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(15, 'Corporate Website URL', 'A URL for business, corporate, or company websites.', 'fa fa-building-o', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(16, 'Travel Booking Website URL', 'A URL for websites related to booking flights, hotels, and vacation packages.', 'fa fa-plane', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(17, 'Ticketing/Events Website URL', 'A URL for booking tickets for events, concerts, and sports.', 'fa fa-ticket', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(18, 'Blog Website URL', 'A URL for personal or professional blogs sharing articles, reviews, and information.', 'fa fa-pencil', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(19, 'Sports Website URL', 'A URL for sports-related content, scores, news, and updates.', 'fa fa-futbol-o', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(20, 'Community Forum URL', 'A URL for online discussion forums, support communities, or interest-based groups.', 'fa fa-users', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(21, 'Online Education Platform URL', 'A URL for platforms offering online courses, certifications, and educational resources.', 'fa fa-book', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(22, 'Financial Services Portal URL', 'A URL for online services in banking, investments, and personal finance management.', 'fa fa-credit-card', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(23, 'Marketplace URL', 'A URL for peer-to-peer or B2B/B2C marketplace platforms for various products and services.', 'fa fa-cogs', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(24, 'Affiliate Marketing Website URL', 'A URL for websites focusing on affiliate marketing, deals, and offers.', 'fa fa-share-alt', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(25, 'Freelance Job Portal URL', 'A URL for freelance job search platforms and independent project work.', 'fa fa-laptop', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(26, 'Government Service Portal URL', 'A URL for accessing government-related services, information, and resources.', 'fa fa-cogs', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(27, 'Legal Services Website URL', 'A URL for law firms, legal consultation services, and related businesses.', 'fa fa-gavel', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(28, 'Fashion E-commerce Website URL', 'A URL for online stores related to fashion, apparel, and accessories.', 'fa fa-shopping-bag', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(29, 'Technology News Website URL', 'A URL for websites focusing on the latest technology news, gadgets, and trends.', 'fa fa-gear', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(30, 'Art and Design Website URL', 'A URL for art, design, and creative industry-related websites.', 'fa fa-paint-brush', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(31, 'Entertainment Website URL', 'A URL for entertainment-related websites, movies, music, and celebrities.', 'fa fa-film', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(32, 'Gaming Website URL', 'A URL for websites related to online gaming, eSports, and gaming news.', 'fa fa-gamepad', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(33, 'Food Delivery Website URL', 'A URL for services providing food delivery and meal services.', 'fa fa-cutlery', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(34, 'Fitness Website URL', 'A URL for websites related to fitness, workouts, and health coaching.', 'fa fa-dumbbell', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(35, 'Local Business Website URL', 'A URL for websites of small businesses, shops, and local services.', 'fa fa-briefcase', '2025-02-04 15:09:03', '2025-02-04 15:09:03', 1, 1, 1, 0),
(36, 'Online Translation Service URL', 'A URL for websites that offer online translation services and tools.', 'fa fa-language', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(37, 'Online Food Ordering URL', 'A URL for online platforms that allow users to order food from restaurants.', 'fa fa-cutlery', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(38, 'Crowdsourced Design Platform URL', 'A URL for design platforms where users can submit ideas and collaborate on creative work.', 'fa fa-pencil', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(39, 'Digital Marketing Tools URL', 'A URL for websites that offer digital marketing tools, analytics, and resources.', 'fa fa-bar-chart', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(40, 'Online Printing Service URL', 'A URL for online print services, including business cards, flyers, and posters.', 'fa fa-print', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(41, 'Subscription-Based Product Box URL', 'A URL for subscription-based services that send curated product boxes regularly.', 'fa fa-gift', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(42, 'Luxury Goods E-commerce URL', 'A URL for e-commerce websites selling high-end luxury goods and brands.', 'fa fa-diamond', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(43, 'Online Legal Document Service URL', 'A URL for online platforms that help with creating and managing legal documents.', 'fa fa-gavel', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(44, 'Event Hosting Platform URL', 'A URL for platforms that allow users to create and host events, conferences, or webinars.', 'fa fa-calendar', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(45, 'Online Music Store URL', 'A URL for e-commerce websites that sell music, albums, and related products.', 'fa fa-music', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(46, 'Professional Service Directory URL', 'A URL for websites that list and connect users with professional services (e.g., lawyers, consultants).', 'fa fa-address-book', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(47, 'Online Auction for Antiques URL', 'A URL for auction platforms that focus on antique items and collectibles.', 'fa fa-gavel', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(48, 'Influencer Marketing Platform URL', 'A URL for platforms that help brands connect with social media influencers.', 'fa fa-users', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(49, 'Travel Blog Website URL', 'A URL for travel blogs, sharing travel experiences, tips, and guides.', 'fa fa-plane', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(50, 'Online Ticket Sales for Theatre URL', 'A URL for websites selling tickets for theater performances and plays.', 'fa fa-ticket', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(51, 'Online Auto Parts Store URL', 'A URL for e-commerce websites selling automotive parts and accessories.', 'fa fa-car', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(52, 'Live Event Streaming Platform URL', 'A URL for platforms that allow live streaming of events and performances.', 'fa fa-video-camera', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(53, 'Wedding Planning Services Website URL', 'A URL for wedding planners and service providers offering wedding-related services.', 'fa fa-gift', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(54, 'Voice over IP (VoIP) Service URL', 'A URL for services offering VoIP communication platforms and products.', 'fa fa-phone', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(55, 'Mobile App Development Agency URL', 'A URL for agencies that specialize in developing mobile applications for businesses and consumers.', 'fa fa-mobile', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(56, 'Cloud Computing Service URL', 'A URL for websites offering cloud storage, computing, and related services.', 'fa fa-cloud', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(57, 'Online Fitness Training Platform URL', 'A URL for platforms offering online fitness training, classes, and coaching.', 'fa fa-dumbbell', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(58, 'Pet Care Service Website URL', 'A URL for websites offering pet care services, grooming, and pet-related products.', 'fa fa-paw', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(59, 'Organic Product Store URL', 'A URL for e-commerce websites specializing in organic products and natural goods.', 'fa fa-leaf', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(60, 'Cryptocurrency Mining Platform URL', 'A URL for platforms related to cryptocurrency mining and related activities.', 'fa fa-btc', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(61, 'Tech Startup Portfolio URL', 'A URL for showcasing the portfolio of tech startups and their innovations.', 'fa fa-laptop', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(62, 'Nonprofit Fundraising Platform URL', 'A URL for websites dedicated to fundraising for nonprofit causes.', 'fa fa-heart', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(63, 'Online Comic Book Store URL', 'A URL for websites that sell comic books and related graphic novels.', 'fa fa-book', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(64, 'Online Vintage Goods Store URL', 'A URL for e-commerce websites selling vintage and antique goods.', 'fa fa-clock', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(65, 'Health Insurance Service URL', 'A URL for health insurance companies offering plans, coverage, and services.', 'fa fa-heartbeat', '2025-02-04 15:14:01', '2025-02-04 15:14:01', 1, 1, 1, 0),
(66, 'Online Ticketing System URL', 'A URL for systems providing ticketing services for events, travel, etc.', 'fa fa-ticket', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(67, 'Online Tax Filing Service URL', 'A URL for platforms offering tax filing and related services.', 'fa fa-calculator', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(68, 'Digital Education Platform URL', 'A URL for online platforms offering digital learning resources.', 'fa fa-laptop', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(69, 'Freelance Marketplace URL', 'A URL for freelance work, contract jobs, and talent marketplace.', 'fa fa-laptop', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(70, 'Voice Assistant Platform URL', 'A URL for platforms providing voice assistant services and integrations.', 'fa fa-microphone', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(71, 'Podcast Platform URL', 'A URL for platforms offering podcast hosting and distribution.', 'fa fa-podcast', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(72, 'Web Hosting Service URL', 'A URL for companies offering web hosting and related services.', 'fa fa-server', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(73, 'Online Health Consultation URL', 'A URL for platforms offering virtual health consultation services.', 'fa fa-stethoscope', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(74, 'Mobile Game Marketplace URL', 'A URL for websites selling and distributing mobile games.', 'fa fa-gamepad', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(75, 'Product Review Site URL', 'A URL for websites dedicated to product reviews and comparison.', 'fa fa-star', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(76, 'Online Bookstore URL', 'A URL for websites that sell books and related materials online.', 'fa fa-book', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(77, 'Marketplace for Handcrafted Goods URL', 'A URL for websites selling handmade or crafted goods.', 'fa fa-handshake', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(78, 'Crowdsourcing Service URL', 'A URL for platforms that facilitate crowdsourcing projects and ideas.', 'fa fa-users', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(79, 'Online Pet Store URL', 'A URL for e-commerce platforms selling pet products and services.', 'fa fa-paw', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(80, 'Digital Gift Shop URL', 'A URL for e-commerce stores specializing in digital gifts, gift cards, etc.', 'fa fa-gift', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(81, 'Online DIY Project Website URL', 'A URL for websites focused on DIY crafts, projects, and tutorials.', 'fa fa-cogs', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(82, 'Event Planning Services URL', 'A URL for websites offering event planning and management services.', 'fa fa-calendar-check-o', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(83, 'Virtual Shopping Mall URL', 'A URL for online marketplaces hosting multiple vendors or shops.', 'fa fa-mall', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(84, 'Crowdsourced Translation URL', 'A URL for platforms offering crowdsourced translation services.', 'fa fa-language', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(85, 'Online Subscription Service URL', 'A URL for subscription-based services for products or content.', 'fa fa-gift', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(86, 'Mobile App Distribution URL', 'A URL for distributing mobile applications through a web platform.', 'fa fa-android', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(87, 'Real Estate Auction URL', 'A URL for websites conducting online real estate auctions.', 'fa fa-gavel', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(88, 'Online Payment Gateway URL', 'A URL for platforms offering payment processing services for online businesses.', 'fa fa-credit-card', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(89, 'Home Automation Service URL', 'A URL for companies offering smart home solutions and devices.', 'fa fa-home', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(90, 'Online Coupon Aggregator URL', 'A URL for websites collecting and offering coupons from various online stores.', 'fa fa-tags', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(91, 'Educational Institution Portal URL', 'A URL for universities, schools, and other educational institutions.', 'fa fa-university', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(92, 'Online Auction for Art URL', 'A URL for platforms dedicated to online art auctions and art sales.', 'fa fa-paint-brush', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(93, 'Social Networking Website URL', 'A URL for social networking and online community platforms.', 'fa fa-users', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(94, 'Online Movie Streaming URL', 'A URL for services offering online movie and TV show streaming.', 'fa fa-film', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(95, 'Freelance Designer Portfolio URL', 'A URL for showcasing a freelance designer’s portfolio.', 'fa fa-pencil', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(96, 'Online Mortgage Services URL', 'A URL for websites offering mortgage, home loan, and financial services.', 'fa fa-home', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(97, 'Online Consulting Service URL', 'A URL for platforms offering professional consulting services.', 'fa fa-commenting', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(98, 'Online Task Management URL', 'A URL for tools and platforms that provide task and project management services.', 'fa fa-tasks', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(99, 'Online Language Learning URL', 'A URL for platforms offering online language courses and tutoring.', 'fa fa-language', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(100, 'Elderly Care Services URL', 'A URL for websites providing services for elderly care, home assistance, etc.', 'fa fa-heartbeat', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(101, 'Subscription-Based Fitness Service URL', 'A URL for subscription-based fitness and wellness platforms.', 'fa fa-dumbbell', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(102, 'Online Car Rental URL', 'A URL for websites offering car rental services.', 'fa fa-car', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(103, 'Online Budgeting Tools URL', 'A URL for personal finance management platforms and budgeting tools.', 'fa fa-calculator', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(104, 'Medical Appointment Scheduling URL', 'A URL for platforms allowing patients to schedule medical appointments online.', 'fa fa-calendar', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(105, 'Online Art Gallery URL', 'A URL for virtual art galleries and online art sales platforms.', 'fa fa-paint-brush', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(106, 'Crowdsourced Research URL', 'A URL for platforms offering crowdsourced research and analysis.', 'fa fa-users', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(107, 'Personalized Gift Shop URL', 'A URL for online stores specializing in personalized gifts and products.', 'fa fa-gift', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(108, 'Mobile Learning App URL', 'A URL for mobile apps that focus on learning and education.', 'fa fa-mobile', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(109, 'Online Resume Building URL', 'A URL for platforms helping users create and design professional resumes.', 'fa fa-id-badge', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(110, 'Luxury Travel URL', 'A URL for websites offering luxury travel services and vacation packages.', 'fa fa-globe', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(111, 'Online Interior Design Service URL', 'A URL for websites offering interior design consultations and services.', 'fa fa-home', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(112, 'SaaS Application URL', 'A URL for software as a service (SaaS) platforms providing cloud-based applications.', 'fa fa-cloud', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(113, 'Online Grocery Delivery URL', 'A URL for services offering grocery shopping and delivery online.', 'fa fa-shopping-basket', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(114, 'Pet Adoption Website URL', 'A URL for platforms facilitating pet adoption and rescue services.', 'fa fa-paw', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(115, 'Fitness Tracker Website URL', 'A URL for websites offering fitness tracking, health, and wellness services.', 'fa fa-heartbeat', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(116, 'Creative Agency Website URL', 'A URL for creative agencies providing design, branding, and marketing services.', 'fa fa-paint-brush', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(117, 'Nonprofit Donation Platform URL', 'A URL for nonprofit organizations offering online donation services.', 'fa fa-heart', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(118, 'Luxury Goods Online Store URL', 'A URL for luxury and premium goods e-commerce websites.', 'fa fa-diamond', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(119, 'Online Learning Community URL', 'A URL for community-based online learning and education platforms.', 'fa fa-users', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(120, 'Smart Home Automation URL', 'A URL for websites offering smart home automation devices and services.', 'fa fa-cogs', '2025-02-04 15:23:40', '2025-02-04 15:23:40', 1, 1, 1, 0),
(121, 'Online Real Estate Marketplace URL', 'A URL for real estate platforms that facilitate buying and selling properties.', 'fa fa-building', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(122, 'Freelancer Task Management URL', 'A URL for platforms that help freelancers manage their tasks, projects, and deadlines.', 'fa fa-tasks', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(123, 'Local Classifieds Website URL', 'A URL for local classifieds platforms for buying, selling, and trading services.', 'fa fa-list', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(124, 'Smart Device Control Platform URL', 'A URL for platforms offering control of smart devices in homes and offices.', 'fa fa-cogs', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(125, 'Online Marketplace for Services URL', 'A URL for platforms that connect service providers with clients, such as cleaning, plumbing, etc.', 'fa fa-briefcase', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(126, 'Crowdsourced Funding Platform URL', 'A URL for websites allowing people to fund projects or businesses via donations or investments.', 'fa fa-handshake', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(127, 'Health Monitoring Service URL', 'A URL for services that help monitor health-related metrics like blood pressure, heart rate, etc.', 'fa fa-heartbeat', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(128, 'Niche Community Forum URL', 'A URL for forums dedicated to niche interests, hobbies, and communities.', 'fa fa-users', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(129, 'Personalized Clothing Store URL', 'A URL for online stores that offer customized or personalized clothing.', 'fa fa-tshirt', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(130, 'Online Survey Platform URL', 'A URL for platforms that create and manage online surveys and questionnaires.', 'fa fa-poll', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(131, 'Corporate Collaboration Tools URL', 'A URL for platforms offering collaboration tools for corporate teams and businesses.', 'fa fa-users', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(132, 'Online Custom Furniture Store URL', 'A URL for websites selling custom or made-to-order furniture.', 'fa fa-cogs', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(133, 'Luxury Car Rental Website URL', 'A URL for websites that provide luxury and exotic car rental services.', 'fa fa-car', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(134, 'Elderly Caregiver Platform URL', 'A URL for platforms offering caregiving services to elderly individuals.', 'fa fa-heartbeat', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(135, 'Online Recipe Marketplace URL', 'A URL for platforms that sell or share recipes for cooking and meal planning.', 'fa fa-cutlery', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(136, 'Social Media Influencer Platform URL', 'A URL for platforms that connect influencers with brands and advertising opportunities.', 'fa fa-users', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(137, 'Cryptocurrency Wallet Service URL', 'A URL for platforms offering cryptocurrency wallet and management services.', 'fa fa-btc', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(138, 'Online DIY Tutorials Website URL', 'A URL for websites offering Do-It-Yourself (DIY) projects and tutorials.', 'fa fa-cogs', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(139, 'Remote Team Collaboration URL', 'A URL for platforms focused on remote team collaboration, communication, and project management.', 'fa fa-comments', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(140, 'Digital Scrapbooking Website URL', 'A URL for online platforms that offer tools and services for digital scrapbooking.', 'fa fa-book', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(141, 'Wedding Photography Service URL', 'A URL for wedding photographers offering booking and portfolio services online.', 'fa fa-camera', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(142, 'Online Task Marketplace URL', 'A URL for platforms where users can outsource or offer tasks and services.', 'fa fa-tasks', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(143, 'Digital Health Insurance URL', 'A URL for online platforms that provide health insurance and related services.', 'fa fa-heartbeat', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(144, 'Cloud Backup Service URL', 'A URL for online platforms offering cloud storage and backup services.', 'fa fa-cloud', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(145, 'Personalized Home Décor Store URL', 'A URL for stores selling customized or personalized home décor items.', 'fa fa-home', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(146, 'Crowdsourced Product Feedback Platform URL', 'A URL for platforms gathering crowdsourced feedback for products or services.', 'fa fa-comments', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(147, 'Online Escape Room Game URL', 'A URL for platforms offering online escape room games and experiences.', 'fa fa-puzzle-piece', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(148, 'Social Networking for Professionals URL', 'A URL for platforms that help professionals network and connect.', 'fa fa-linkedin', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(149, 'Mobile App Design Service URL', 'A URL for agencies offering mobile app design and development services.', 'fa fa-mobile', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(150, 'Online Book Exchange Platform URL', 'A URL for websites that allow users to exchange or borrow books online.', 'fa fa-book', '2025-02-04 15:31:55', '2025-02-04 15:31:55', 1, 1, 1, 0),
(151, 'Food Delivery Subscription URL', 'A URL for platforms offering subscription services for food delivery on a regular basis.', 'fa fa-cutlery', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(152, 'Elderly Care Platform URL', 'A URL for platforms that offer services for elderly care, including assistance and health management.', 'fa fa-heartbeat', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(153, 'B2B Service Marketplace URL', 'A URL for business-to-business service marketplaces offering solutions to other businesses.', 'fa fa-briefcase', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(154, 'Subscription-Based Art Supply Store URL', 'A URL for online stores that sell art supplies through a subscription model.', 'fa fa-paint-brush', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(155, 'Online Science Tutoring Platform URL', 'A URL for platforms offering science tutoring and educational services online.', 'fa fa-flask', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(156, 'Crowdsourced Software Testing URL', 'A URL for platforms offering crowdsourced software testing and bug reporting services.', 'fa fa-bug', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(157, 'Pet Adoption and Care URL', 'A URL for platforms facilitating pet adoption, care services, and fostering programs.', 'fa fa-paw', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(158, 'Health & Wellness Community URL', 'A URL for community platforms focused on health, wellness, and fitness discussions.', 'fa fa-users', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(159, 'Freelance Software Development URL', 'A URL for freelance software developers to showcase their skills and services.', 'fa fa-laptop', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(160, 'Online Legal Consultation URL', 'A URL for platforms providing legal consultations and advice from professionals online.', 'fa fa-gavel', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(161, 'Online Product Customization Platform URL', 'A URL for platforms that allow users to customize products before purchasing.', 'fa fa-cogs', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(162, 'Crowdsourced Shopping Platform URL', 'A URL for platforms where users can vote, review, or influence the shopping experience.', 'fa fa-shopping-cart', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(163, 'Subscription Box Service URL', 'A URL for services that provide subscription boxes with curated products delivered regularly.', 'fa fa-box', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(164, 'Wedding Services Directory URL', 'A URL for platforms that provide a directory of wedding service providers, including venues, planners, and photographers.', 'fa fa-heart', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(165, 'Charity Crowdfunding Platform URL', 'A URL for crowdfunding platforms dedicated to raising funds for charitable causes.', 'fa fa-gift', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(166, 'Subscription-Based Book Service URL', 'A URL for platforms offering subscription services for books and reading materials.', 'fa fa-book', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(167, 'Online Language Tutoring Service URL', 'A URL for platforms that offer language tutoring and learning services online.', 'fa fa-language', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(168, 'Online Event Hosting URL', 'A URL for platforms that help users host and manage virtual or physical events.', 'fa fa-calendar', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(169, 'Collaborative Project Management URL', 'A URL for platforms offering project management tools for collaborative teams.', 'fa fa-tasks', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(170, 'Tech Product Review Platform URL', 'A URL for websites dedicated to reviews, ratings, and information on tech products.', 'fa fa-star', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(171, 'B2C Shopping Platform URL', 'A URL for platforms that allow direct consumer-to-business product shopping.', 'fa fa-cart-plus', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(172, 'Online Fashion Rental Service URL', 'A URL for websites offering rental services for fashion items such as dresses, suits, and accessories.', 'fa fa-gift', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(173, 'Online Survey Creation Platform URL', 'A URL for platforms that allow users to create and distribute online surveys.', 'fa fa-poll', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(174, 'DIY Craft Store URL', 'A URL for online stores specializing in DIY crafts, supplies, and kits.', 'fa fa-scissors', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(175, 'Online Freelance Writer Marketplace URL', 'A URL for platforms that connect freelance writers with clients for content creation.', 'fa fa-pencil', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(176, 'Online Dating Service URL', 'A URL for platforms offering online dating services and matchmaking.', 'fa fa-heart', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(177, 'Mobile App Monetization Platform URL', 'A URL for platforms offering monetization solutions for mobile apps.', 'fa fa-mobile', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(178, 'E-commerce Analytics Tool URL', 'A URL for platforms offering analytics and insights for e-commerce websites.', 'fa fa-line-chart', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(179, 'Travel Booking Aggregator URL', 'A URL for websites that aggregate travel deals, flights, and hotel bookings.', 'fa fa-plane', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(180, 'Online Auction Platform URL', 'A URL for platforms conducting online auctions for various products and services.', 'fa fa-gavel', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(181, 'Crowdsourced Job Search URL', 'A URL for platforms offering crowdsourced job listings and talent searches.', 'fa fa-search', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(182, 'Freelancer Task Board URL', 'A URL for boards that list freelance tasks and projects for independent workers.', 'fa fa-tasks', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(183, 'Crowdsourced Funding for Startups URL', 'A URL for crowdfunding platforms that support startups and small businesses.', 'fa fa-handshake', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(184, 'Online Crafting Tutorials URL', 'A URL for websites offering video tutorials and guides for various crafting projects.', 'fa fa-scissors', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(185, 'Sustainable Fashion Marketplace URL', 'A URL for online platforms that sell sustainable and eco-friendly fashion products.', 'fa fa-leaf', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(186, 'Mobile Device Management Service URL', 'A URL for platforms that provide mobile device management services for businesses.', 'fa fa-mobile', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(187, 'Smart Home Setup Service URL', 'A URL for platforms offering installation and setup services for smart home systems.', 'fa fa-home', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(188, 'Online Car Rental Platform URL', 'A URL for platforms that offer car rentals and vehicle booking services.', 'fa fa-car', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(189, 'Influencer Collaboration Platform URL', 'A URL for platforms connecting influencers with brands for collaboration and promotions.', 'fa fa-users', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(190, 'Crowdsourced Funding for Ideas URL', 'A URL for platforms that help fund creative ideas and projects through public contributions.', 'fa fa-lightbulb', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(191, 'Online Fitness App URL', 'A URL for fitness and workout applications that provide guided exercises and tracking features.', 'fa fa-dumbbell', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(192, 'Home Improvement Services URL', 'A URL for online platforms offering home improvement services, such as renovation, painting, etc.', 'fa fa-wrench', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(193, 'Subscription-Based Fitness Classes URL', 'A URL for platforms offering subscription-based access to fitness classes and training.', 'fa fa-dumbbell', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(194, '3D Modeling Service URL', 'A URL for platforms that offer 3D modeling services for various industries.', 'fa fa-cogs', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(195, 'Online Therapy and Counseling Platform URL', 'A URL for platforms that provide online therapy and mental health services.', 'fa fa-heartbeat', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(196, 'Online Volunteer Opportunities URL', 'A URL for platforms offering opportunities for volunteering and community service.', 'fa fa-handshake-o', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(197, 'Online Subscription Box for Books URL', 'A URL for subscription services that send books to users regularly based on preferences.', 'fa fa-book', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(198, 'Online Education Resource Center URL', 'A URL for platforms offering educational resources, guides, and material for students and professionals.', 'fa fa-book', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(199, 'Personalized Marketing Platform URL', 'A URL for platforms offering personalized digital marketing services and tools.', 'fa fa-bullhorn', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(200, 'Online Travel Insurance Platform URL', 'A URL for platforms offering travel insurance for individuals booking travel services.', 'fa fa-shield', '2025-02-04 15:49:35', '2025-02-04 15:49:35', 1, 1, 1, 0),
(201, 'Online Fitness Equipment Store URL', 'A URL for online stores that sell fitness equipment and related products.', 'fa fa-dumbbell', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(202, 'Productivity Tools Marketplace URL', 'A URL for platforms that sell or offer productivity tools and applications.', 'fa fa-cogs', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(203, 'Online Interior Design Consultation URL', 'A URL for platforms offering online interior design consultation and services.', 'fa fa-home', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(204, 'Subscription Box for Tech Gadgets URL', 'A URL for subscription-based services offering tech gadgets and accessories.', 'fa fa-plug', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(205, 'Online Data Visualization Tools URL', 'A URL for platforms offering data visualization and analysis tools for businesses and individuals.', 'fa fa-bar-chart', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(206, 'Online Grocery Delivery Subscription URL', 'A URL for platforms offering subscription services for grocery deliveries.', 'fa fa-shopping-cart', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(207, 'Photography Equipment Rental URL', 'A URL for websites offering photography equipment rentals for short-term use.', 'fa fa-camera-retro', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(208, 'E-commerce Platform for Handmade Crafts URL', 'A URL for e-commerce platforms dedicated to selling handmade and unique crafts and art.', 'fa fa-handshake', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(209, 'Crowdsourced Music Composition URL', 'A URL for platforms offering crowdsourced music creation, collaborations, and submissions.', 'fa fa-music', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(210, 'Online Career Coaching URL', 'A URL for platforms providing career coaching, job advice, and interview preparation services.', 'fa fa-briefcase', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(211, 'Mobile App Testing Platform URL', 'A URL for platforms offering mobile app testing services, including QA and feedback.', 'fa fa-mobile', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(212, 'Crowdsourced Translation for Documents URL', 'A URL for platforms offering document translation services using crowdsourcing methods.', 'fa fa-language', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(213, 'Eco-Friendly Home Products URL', 'A URL for online stores offering eco-friendly, sustainable home products and solutions.', 'fa fa-leaf', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(214, 'SaaS for Supply Chain Management URL', 'A URL for SaaS platforms that offer solutions for managing supply chain logistics and operations.', 'fa fa-cogs', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(215, 'Crowdsourced Video Creation Platform URL', 'A URL for platforms that allow users to collaborate on creating videos or film projects.', 'fa fa-video-camera', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(216, 'Crowdsourced Audio Book Narration URL', 'A URL for platforms offering crowdsourced audiobook narration and production services.', 'fa fa-headphones', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(217, 'Online Financial Portfolio Management URL', 'A URL for platforms helping users manage, track, and optimize their investment portfolios.', 'fa fa-line-chart', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(218, 'Customized Meal Plan Subscription URL', 'A URL for subscription services offering personalized meal plans based on dietary needs.', 'fa fa-cutlery', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(219, 'Custom Software Development Service URL', 'A URL for platforms offering custom software development services for businesses and individuals.', 'fa fa-laptop', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(220, 'Home-Based Business Resources URL', 'A URL for websites offering resources, tools, and advice for home-based businesses.', 'fa fa-home', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(221, 'Online Beauty & Makeup Services URL', 'A URL for platforms offering beauty consultations, makeup services, and cosmetic products online.', 'fa fa-magic', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(222, 'SaaS for Human Resource Management URL', 'A URL for platforms offering software as a service (SaaS) HR management tools for businesses.', 'fa fa-users', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(223, 'Online Student Tutoring Services URL', 'A URL for platforms offering one-on-one tutoring sessions or group study resources for students.', 'fa fa-graduation-cap', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(224, 'Crowdsourced Market Research URL', 'A URL for platforms offering market research services using crowdsourced data and insights.', 'fa fa-search', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(225, 'Telemedicine Platform URL', 'A URL for online platforms offering telemedicine services, virtual doctor visits, and consultations.', 'fa fa-stethoscope', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(226, 'Real-Time Collaboration Tools URL', 'A URL for platforms that facilitate real-time collaboration, document sharing, and project management online.', 'fa fa-share-alt', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(227, 'Personalized Nutrition Plan URL', 'A URL for platforms offering personalized nutrition plans and dietary advice based on health goals.', 'fa fa-lemon-o', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(228, 'Crypto Trading Platform URL', 'A URL for platforms that enable the trading of cryptocurrencies, including buying and selling tokens.', 'fa fa-bitcoin', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(229, 'Peer-to-Peer Lending Platform URL', 'A URL for platforms that connect individuals or businesses for peer-to-peer lending services.', 'fa fa-credit-card', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(230, 'Customizable Apparel Design URL', 'A URL for platforms allowing users to customize and design apparel like t-shirts, hoodies, etc.', 'fa fa-tshirt', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(231, 'Live Streaming for Conferences URL', 'A URL for platforms that allow live streaming of business conferences, meetings, and seminars.', 'fa fa-video-camera', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(232, 'Online Cooking Recipe Sharing URL', 'A URL for platforms that allow users to share and discover new recipes for cooking and meal prep.', 'fa fa-cutlery', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(233, 'Virtual Reality Experiences Platform URL', 'A URL for platforms offering virtual reality experiences, games, and simulations for entertainment or education.', 'fa fa-glasses', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(234, 'Smart Kitchen Appliances Store URL', 'A URL for online stores selling smart kitchen appliances, gadgets, and accessories.', 'fa fa-cogs', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(235, 'Online Office Furniture Store URL', 'A URL for platforms that sell office furniture, including ergonomic chairs, desks, and office accessories.', 'fa fa-chair', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(236, 'Online Language Learning Tools URL', 'A URL for platforms that offer tools, resources, and lessons for learning new languages.', 'fa fa-language', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(237, 'Crowdsourced Video Translation URL', 'A URL for platforms offering crowdsourced video translation and subtitling services.', 'fa fa-language', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(238, 'Freelance Marketing Services URL', 'A URL for platforms where freelancers can offer digital marketing services to businesses.', 'fa fa-bullhorn', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(239, 'Freelance Consulting Services URL', 'A URL for platforms that connect consultants with clients in need of expertise in specific areas.', 'fa fa-briefcase', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(240, 'Cloud-Based Accounting Service URL', 'A URL for platforms offering cloud-based accounting and financial management tools for businesses.', 'fa fa-calculator', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(241, 'Custom Gadget Design Service URL', 'A URL for platforms offering custom-designed gadgets and tech products based on user specifications.', 'fa fa-plug', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(242, 'Apparel Sizing Assistance Platform URL', 'A URL for platforms that help customers determine the right apparel size based on measurements or guidelines.', 'fa fa-tshirt', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(243, 'Crowdsourced Social Media Marketing URL', 'A URL for platforms offering crowdsourced social media marketing campaigns for businesses.', 'fa fa-users', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(244, 'Subscription-Based Virtual Reality Content URL', 'A URL for platforms offering subscription access to virtual reality content such as games or educational material.', 'fa fa-glasses', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(245, 'Personalized Online Fitness Plans URL', 'A URL for platforms offering personalized fitness plans and workout routines for individuals.', 'fa fa-dumbbell', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(246, 'Online Event Tickets URL', 'A URL for websites that sell tickets for events such as concerts, theater, or conferences.', 'fa fa-ticket', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(247, 'Crowdsourced Writing Platform URL', 'A URL for platforms where users can collaborate on writing content or projects.', 'fa fa-pencil', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(248, 'Freelance Video Production URL', 'A URL for platforms offering freelance video production and editing services.', 'fa fa-video-camera', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(249, 'Automated Marketing Campaign Service URL', 'A URL for platforms that automate digital marketing campaigns and strategies for businesses.', 'fa fa-bullhorn', '2025-02-04 15:59:30', '2025-02-04 15:59:30', 1, 1, 1, 0),
(250, 'Online Wedding Registry URL', 'A URL for platforms that allow users to create wedding gift registries and share them with guests.', 'Select Icon', '2025-02-04 15:59:30', '2025-02-06 04:23:24 PM', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `config_vendor_categories`
--

CREATE TABLE `config_vendor_categories` (
  `cvc_id` int(10) NOT NULL,
  `cvc_name` varchar(100) NOT NULL,
  `cvc_desc` varchar(725) NOT NULL,
  `cvc_created_at` varchar(45) NOT NULL,
  `cvc_updated_at` varchar(45) NOT NULL,
  `cvc_created_by` int(10) NOT NULL,
  `cvc_updated_by` int(10) NOT NULL,
  `cvc_status` int(2) NOT NULL DEFAULT 1,
  `is_cvc_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_vendor_categories`
--

INSERT INTO `config_vendor_categories` (`cvc_id`, `cvc_name`, `cvc_desc`, `cvc_created_at`, `cvc_updated_at`, `cvc_created_by`, `cvc_updated_by`, `cvc_status`, `is_cvc_deleted`) VALUES
(1, 'IT Vendors', 'Vendors providing IT services and solutions.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(2, 'Raw Material Suppliers', 'Vendors supplying raw materials for production.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(3, 'Marketing Agencies', 'Agencies specializing in advertising, branding, and marketing.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(4, 'Logistics and Transportation Providers', 'Vendors offering transportation and logistics services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(5, 'Financial Services', 'Vendors providing financial, accounting, and banking services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(6, 'Maintenance and Repairs', 'Vendors offering maintenance and repair services for equipment and facilities.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(7, 'Consultancy Services', 'Vendors providing expert advice in business, legal, or technical areas.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(8, 'Healthcare Vendors', 'Vendors supplying healthcare products or services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(9, 'Construction Vendors', 'Vendors providing construction services, materials, and equipment.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(10, 'Education and Training Vendors', 'Vendors offering training, certification, and educational services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(11, 'Packaging Vendors', 'Vendors providing packaging materials and solutions.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(12, 'Event Vendors', 'Vendors providing event services, such as catering, decor, and AV equipment.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(13, 'Security Vendors', 'Vendors providing security services, including surveillance and personnel.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(14, 'Utilities Vendors', 'Vendors providing essential services like electricity, water, and internet.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(15, 'Advertising and Media Vendors', 'Vendors specializing in advertising platforms and media buying.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(16, 'Recruitment and Staffing Vendors', 'Vendors providing recruitment and staffing services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(17, 'Wholesale Suppliers', 'Vendors selling products in bulk, typically to retailers or distributors.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(18, 'Retail Suppliers', 'Vendors selling products directly to consumers or businesses.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(19, 'Freelance and Independent Contractors', 'Vendors offering freelance or contract-based services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(20, 'Service Providers', 'Vendors providing specialized services for business operations.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(21, 'Franchise Vendors', 'Vendors operating under a franchise agreement to sell or distribute products/services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(22, 'Import/Export Vendors', 'Vendors specializing in the import or export of goods or materials.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(23, 'Government and Public Sector Vendors', 'Vendors working with government or public sector entities.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(24, 'Hospitality and Catering Vendors', 'Vendors offering hospitality and catering services for events or facilities.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(25, 'Environmental and Waste Management Vendors', 'Vendors handling waste disposal, recycling, and environmental services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(26, 'Testing and Inspection Vendors', 'Vendors specializing in product testing and inspection for quality control.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(27, 'Transportation and Fleet Management Vendors', 'Vendors offering transportation or fleet management services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(28, 'Manufacturing and Production Vendors', 'Vendors involved in the production or manufacturing of goods.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(29, 'Customization and Personalization Vendors', 'Vendors providing customized products or tailored services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(30, 'Digital and Creative Services Vendors', 'Vendors specializing in digital media, creative design, and content production.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(31, 'Artificial Intelligence and Automation Vendors', 'Vendors providing AI-based solutions and automation services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(32, 'Event Technology and AV Vendors', 'Vendors specializing in audio-visual technology for events and conferences.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(33, 'E-commerce Platform Vendors', 'Vendors offering e-commerce platform solutions for online businesses.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(34, 'Fashion and Textile Vendors', 'Vendors providing fashion and textile products or materials.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(35, 'Specialty Equipment Suppliers', 'Vendors providing specialized equipment for specific industries.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(36, 'Distribution and Supply Chain Vendors', 'Vendors handling the distribution and supply chain logistics for products.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(37, 'Import and Export Logistics Vendors', 'Vendors specializing in import/export logistics and transportation services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(38, 'Digital Marketing Vendors', 'Vendors providing digital marketing services like SEO, SEM, and social media campaigns.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(39, 'Cloud Security Vendors', 'Vendors offering security solutions for cloud platforms and data protection.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(40, 'HR Software and Talent Acquisition Vendors', 'Vendors offering HR software or recruitment services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(41, 'Packaging Materials and Solutions Vendors', 'Vendors providing packaging materials for product shipment and delivery.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(42, 'Legal and Compliance Vendors', 'Vendors offering legal and compliance services and advice.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(43, 'Manufacturing Equipment Vendors', 'Vendors providing machines and tools for manufacturing processes.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(44, 'Software Development and Customization Vendors', 'Vendors offering software development and customization services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(45, 'Packaging Design Vendors', 'Vendors specializing in the design of packaging materials and graphics.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(46, 'Technology Support and Maintenance Vendors', 'Vendors providing ongoing technology support and maintenance services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(47, 'Commercial Printing Vendors', 'Vendors specializing in large-scale printing for businesses and promotional materials.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(48, 'Product Assembly Vendors', 'Vendors specializing in assembling parts or products for final distribution.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(49, 'Shipping and Freight Vendors', 'Vendors providing shipping and freight services for domestic and international delivery.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(50, 'Social Media and Content Marketing Vendors', 'Vendors specializing in social media management and content marketing strategies.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(51, 'Waste Disposal and Recycling Vendors', 'Vendors specializing in waste disposal and recycling services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(52, 'Fleet Leasing Vendors', 'Vendors offering vehicle leasing and fleet management services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(53, 'Cloud Service Providers', 'Vendors providing cloud storage, hosting, and cloud computing solutions.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(54, 'Property and Real Estate Vendors', 'Vendors specializing in property management, sales, and real estate services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(55, 'Media Buying and Planning Vendors', 'Vendors specializing in media planning, buying, and campaign execution.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(56, 'Office Supplies Vendors', 'Vendors providing office supplies and equipment for business operations.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(57, 'Telecommunication Vendors', 'Vendors providing telecommunication services, including internet and phone solutions.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(58, 'Renewable Energy Vendors', 'Vendors providing sustainable and renewable energy solutions.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(59, 'Packaging and Labeling Vendors', 'Vendors specializing in product labeling and packaging solutions.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(60, 'Waste Management and Disposal Vendors', 'Vendors offering waste management, disposal, and recycling services.', '2025-01-19 14:18:27', '2025-01-19 14:18:27', 1, 1, 1, 0),
(61, 'Research and Development Vendors', 'Vendors specializing in research and development for products and technologies.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(62, 'Artificial Intelligence Solution Vendors', 'Vendors providing AI-based solutions for business and automation.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(63, 'Agricultural Suppliers', 'Vendors offering agricultural equipment, seeds, and farming solutions.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(64, 'Film and Video Production Vendors', 'Vendors specializing in film production, video editing, and media services.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(65, 'Home Appliances Vendors', 'Vendors providing home appliances for residential use.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(66, 'Sports Equipment Vendors', 'Vendors providing sports equipment and gear for various sports.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(67, 'Cleaning and Janitorial Service Providers', 'Vendors offering cleaning, janitorial, and sanitation services.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(68, 'Mobile Application Development Vendors', 'Vendors providing mobile app development and customization services.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(69, 'E-commerce Solutions Vendors', 'Vendors offering solutions for setting up e-commerce platforms and stores.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(70, 'Legal Process Outsourcing Vendors', 'Vendors specializing in outsourcing legal services and processes.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(71, 'HR Consulting Vendors', 'Vendors offering HR and talent management consulting services.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(72, 'Translation and Localization Vendors', 'Vendors providing translation and localization services for global businesses.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(73, 'Printing Services Vendors', 'Vendors specializing in print materials like brochures, business cards, and other documents.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(74, 'Audio-Visual Equipment Suppliers', 'Vendors providing audio and video equipment for events and business use.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(75, 'Environmental Consulting Vendors', 'Vendors offering consulting services for environmental impact assessments and sustainability.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(76, 'Internet of Things (IoT) Solution Vendors', 'Vendors providing IoT solutions for smart devices and automation.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(77, 'Retail Technology Vendors', 'Vendors offering technology solutions for retail business operations.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(78, 'Cybersecurity Vendors', 'Vendors providing cybersecurity solutions to protect digital assets and networks.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(79, '3D Printing Service Providers', 'Vendors offering 3D printing services for prototyping and product creation.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(80, 'Augmented Reality (AR) and Virtual Reality (VR) Vendors', 'Vendors providing AR and VR technologies for businesses.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(81, 'Payment Gateway Vendors', 'Vendors offering online payment processing solutions for businesses.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(82, 'Blockchain Technology Vendors', 'Vendors specializing in blockchain-based solutions for businesses and industries.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(83, 'Freight Forwarding and Cargo Vendors', 'Vendors specializing in freight forwarding, shipping, and cargo management.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(84, 'Subscription Box Vendors', 'Vendors offering subscription-based product delivery services.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(85, 'Content Creation Vendors', 'Vendors providing content creation services for digital marketing and social media.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(86, 'Construction Material Vendors', 'Vendors supplying materials required for construction projects.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(87, 'Vehicle Fleet Management Vendors', 'Vendors specializing in fleet management solutions for businesses with vehicles.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(88, 'Shipping and Courier Service Vendors', 'Vendors offering shipping and courier services for document and parcel deliveries.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(89, 'Landscaping and Gardening Service Providers', 'Vendors offering landscaping and garden maintenance services.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(90, 'Heavy Machinery and Equipment Vendors', 'Vendors providing machinery and equipment for construction, mining, and other heavy industries.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(91, 'Furniture Vendors', 'Vendors providing office and residential furniture.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(92, 'Packaging Design and Customization Vendors', 'Vendors offering customized packaging solutions and design services.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(93, 'Wearable Technology Vendors', 'Vendors providing wearable technology such as smartwatches, fitness trackers, and more.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(94, 'Home Improvement Vendors', 'Vendors offering home renovation and improvement products and services.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(95, 'Solar Energy Solution Providers', 'Vendors offering solar panel installation and solar energy systems.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(96, 'Telecommunications Hardware Vendors', 'Vendors providing hardware for telecommunications infrastructure.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(97, 'Beauty and Personal Care Vendors', 'Vendors offering beauty products, cosmetics, and personal care items.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(98, 'Safety and Security Equipment Suppliers', 'Vendors providing safety and security equipment for homes and businesses.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(99, 'Rental Equipment Providers', 'Vendors offering equipment rentals for construction, events, and other industries.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(100, 'IT Hardware and Software Resellers', 'Vendors reselling IT hardware and software products.', '2025-01-19 14:19:36', '2025-01-19 14:19:36', 1, 1, 1, 0),
(101, 'Data Analytics Solution Vendors', 'Vendors providing data analytics and business intelligence solutions.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(102, 'Event Management Vendors', 'Vendors offering event planning, coordination, and management services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(103, 'Freight and Logistics Service Providers', 'Vendors providing freight transportation and logistics services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(104, 'HR Software Vendors', 'Vendors offering HR management software solutions.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(105, 'Business Intelligence (BI) Solution Vendors', 'Vendors providing BI solutions for data analysis and decision-making.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(106, 'Audio Engineering and Sound System Vendors', 'Vendors providing sound equipment and audio engineering services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(107, 'Enterprise Resource Planning (ERP) Vendors', 'Vendors offering ERP systems for business process management.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(108, 'Corporate Training Vendors', 'Vendors providing corporate training and development services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(109, 'Taxation and Accounting Vendors', 'Vendors providing accounting and tax services for businesses.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(110, 'Video Conferencing and Collaboration Tools Vendors', 'Vendors offering tools for video conferencing and team collaboration.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(111, 'Digital Marketing Service Providers', 'Vendors offering digital marketing services for online growth.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(112, 'Web Hosting and Domain Registration Vendors', 'Vendors offering web hosting and domain registration services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(113, 'Corporate Gifting Vendors', 'Vendors specializing in corporate gifts and promotional products.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(114, 'Packaging Materials Suppliers', 'Vendors providing packaging materials like boxes, tapes, and bubble wraps.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(115, 'Insurance Service Providers', 'Vendors offering insurance solutions for businesses and individuals.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(116, 'Electrical Equipment Suppliers', 'Vendors providing electrical equipment, cables, and accessories.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(117, 'Industrial Automation Vendors', 'Vendors offering automation solutions for industrial operations.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(118, 'Retail Management Solution Providers', 'Vendors offering solutions for managing retail operations and point of sale systems.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(119, 'Cloud Storage and Backup Vendors', 'Vendors providing cloud storage and data backup solutions.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(120, 'Scientific Equipment Vendors', 'Vendors providing scientific research and laboratory equipment.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(121, 'Catering Service Providers', 'Vendors offering catering services for events, corporate functions, and more.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(122, 'Wellness and Fitness Equipment Suppliers', 'Vendors providing fitness and wellness equipment for gyms and home use.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(123, 'Branding and Design Vendors', 'Vendors offering branding, logo design, and corporate identity services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(124, 'Investment and Financial Advisors', 'Vendors providing investment and financial advisory services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(125, 'Car Rental and Leasing Service Providers', 'Vendors providing car rental and leasing services for businesses and individuals.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(126, 'Video Surveillance and Security Vendors', 'Vendors providing surveillance cameras and security systems for businesses and homes.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(127, 'Marine and Shipping Equipment Vendors', 'Vendors offering equipment and services for marine and shipping industries.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(128, 'Surveying and Mapping Service Providers', 'Vendors offering land surveying, geospatial mapping, and related services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(129, 'IT Support and Maintenance Service Vendors', 'Vendors offering IT support, troubleshooting, and infrastructure maintenance services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(130, 'Custom Apparel and Promotional Merchandise Vendors', 'Vendors providing custom apparel, promotional products, and branded merchandise.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(131, 'Staffing and Recruitment Agencies', 'Vendors offering staffing and recruitment services for businesses.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(132, 'Software Development and IT Consulting Vendors', 'Vendors offering custom software development and IT consulting services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(133, 'Corporate Travel and Transport Vendors', 'Vendors providing corporate travel and transport management services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(134, 'Mobile Device Management (MDM) Solution Providers', 'Vendors offering MDM solutions for managing mobile devices in enterprises.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(135, 'Custom Software Solutions Vendors', 'Vendors offering customized software solutions for specific business needs.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(136, 'Market Research Service Providers', 'Vendors offering market research services for industry and consumer insights.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(137, 'Laboratory Equipment Suppliers', 'Vendors providing laboratory and research equipment for scientific work.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(138, 'Artificial Turf and Landscaping Materials Vendors', 'Vendors providing synthetic turf and landscaping materials for various projects.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(139, 'Facility Management Service Providers', 'Vendors offering facility management services, including maintenance and cleaning.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(140, 'Professional Photography Service Providers', 'Vendors offering professional photography services for events, portraits, and commercial needs.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(141, 'Document Management and Storage Service Providers', 'Vendors providing document storage and management solutions.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(142, 'Public Relations Agencies', 'Vendors offering public relations and media management services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(143, 'Real Estate Services Providers', 'Vendors offering real estate services for property sales, rentals, and management.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(144, 'Conference and Convention Organizers', 'Vendors specializing in organizing conferences, seminars, and conventions.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(145, 'Industrial Equipment Maintenance Vendors', 'Vendors offering maintenance and repair services for industrial equipment.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(146, 'Public Safety and Emergency Service Providers', 'Vendors providing public safety and emergency management services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(147, 'Building Maintenance and Repair Vendors', 'Vendors providing building maintenance, repair, and construction services.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(148, 'Waste Recycling and Composting Vendors', 'Vendors providing waste recycling and composting solutions for businesses and communities.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(149, 'Freight Transport and Cargo Service Providers', 'Vendors providing freight and cargo transport services for goods and logistics.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(150, 'Social Media Management Service Providers', 'Vendors offering social media management and marketing services for businesses.', '2025-01-19 14:20:26', '2025-01-19 14:20:26', 1, 1, 1, 0),
(151, 'Custom Packaging Solution Vendors', 'Vendors providing customized packaging solutions for various industries.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(152, 'Legal Service Providers', 'Vendors offering legal services, including consultancy, contracts, and dispute resolution.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(153, 'Enterprise Mobile App Development Vendors', 'Vendors specializing in the development of mobile applications for enterprises.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(154, 'Cloud Computing and Virtualization Vendors', 'Vendors providing cloud-based services and virtualization solutions for businesses.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(155, 'Educational Software Vendors', 'Vendors offering educational software solutions for e-learning and training.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(156, 'Translation and Localization Service Providers', 'Vendors offering translation, localization, and interpretation services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(157, 'Mining and Mineral Equipment Vendors', 'Vendors providing equipment and solutions for the mining and mineral extraction industry.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(158, 'Construction Material Suppliers', 'Vendors offering materials such as cement, steel, and building supplies for construction projects.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(159, 'Water Treatment and Filtration Vendors', 'Vendors providing water treatment, filtration systems, and solutions for businesses and homes.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(160, 'Graphic Design and Illustration Service Providers', 'Vendors offering graphic design and illustration services for marketing and branding.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(161, 'Biotech and Pharmaceutical Equipment Vendors', 'Vendors providing equipment for the biotech and pharmaceutical industries.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(162, 'Textile and Apparel Manufacturers', 'Vendors involved in the manufacturing of textiles and apparel products.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(163, 'Home Appliance and Electronics Vendors', 'Vendors offering home appliances and electronic products for households and businesses.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(164, 'Kitchen Equipment and Supplies Vendors', 'Vendors providing commercial kitchen equipment and supplies for restaurants and food services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(165, 'Fitness and Wellness Service Providers', 'Vendors offering fitness, wellness, and health-related services for businesses and individuals.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(166, 'Security and Fire Protection Service Providers', 'Vendors offering security services and fire protection equipment and installations.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(167, 'Printing and Publishing Vendors', 'Vendors offering printing, publishing, and media production services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(168, 'Real Estate Property Management Service Providers', 'Vendors offering property management services for real estate owners and tenants.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(169, 'Software Testing and Quality Assurance Vendors', 'Vendors providing software testing, quality assurance, and bug-fixing services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(170, 'Renewable Energy Solution Providers', 'Vendors offering renewable energy solutions such as solar, wind, and bioenergy systems.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(171, 'Video Production and Editing Service Providers', 'Vendors offering video production and post-production editing services for marketing and media.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(172, 'Drone Services Vendors', 'Vendors providing drone services for surveying, inspection, and media production.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(173, 'Shipping and Freight Forwarding Vendors', 'Vendors offering shipping and freight forwarding services for global trade.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(174, 'Music and Audio Production Service Providers', 'Vendors offering music and audio production, recording, and post-production services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(175, 'Supply Chain Management Solution Providers', 'Vendors offering solutions to optimize supply chain operations and logistics.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(176, 'Agricultural Equipment Suppliers', 'Vendors providing agricultural equipment and machinery for farming operations.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(177, 'Furniture and Interior Design Vendors', 'Vendors providing furniture and interior design solutions for commercial and residential spaces.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(178, 'Paper and Stationery Suppliers', 'Vendors providing paper products, stationery, and office supplies.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(179, 'IT Infrastructure and Hardware Vendors', 'Vendors offering IT infrastructure, hardware, and networking solutions for businesses.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(180, 'Business Automation Solution Vendors', 'Vendors offering automation solutions to streamline business processes and operations.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(181, 'IT Outsourcing Vendors', 'Vendors providing IT outsourcing services for businesses seeking external IT support.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(182, 'Courier and Parcel Delivery Vendors', 'Vendors offering courier, parcel delivery, and express shipping services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(183, 'Construction Equipment Rental Vendors', 'Vendors providing construction equipment rental services for construction projects.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(184, 'Recruitment Process Outsourcing (RPO) Providers', 'Vendors offering recruitment process outsourcing services for businesses.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(185, 'Mobile Payment and Wallet Providers', 'Vendors offering mobile payment solutions and wallet services for businesses and consumers.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(186, 'Industrial Cleaning Service Providers', 'Vendors offering industrial cleaning and sanitation services for commercial operations.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(187, 'Oil and Gas Equipment Suppliers', 'Vendors providing equipment and solutions for the oil and gas industry.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(188, 'Enterprise Security Solution Providers', 'Vendors offering enterprise-level security solutions and services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(189, 'Advertising Agencies', 'Vendors offering advertising services for businesses, brands, and products.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(190, 'Communication Service Providers', 'Vendors offering communication solutions such as telecom, email, and VoIP services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(191, 'Custom Metal Fabrication Vendors', 'Vendors providing custom metal fabrication and welding services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(192, 'Leather Goods and Accessories Suppliers', 'Vendors supplying leather goods such as bags, belts, and accessories.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(193, 'Talent Management Solution Vendors', 'Vendors offering talent management and employee development software solutions.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(194, 'Retail and E-commerce Solution Providers', 'Vendors providing solutions for retail management and e-commerce platforms.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(195, 'Maintenance, Repair, and Overhaul (MRO) Service Providers', 'Vendors offering MRO services for machinery, equipment, and infrastructure.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(196, 'Oil and Lubricant Suppliers', 'Vendors providing oil and lubricants for machinery and vehicles.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(197, 'Textile and Fabric Suppliers', 'Vendors offering textile and fabric products for various industries.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(198, 'Water and Wastewater Management Service Providers', 'Vendors providing water treatment, management, and wastewater disposal services.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(199, 'Renewable Energy Equipment Suppliers', 'Vendors providing equipment and solutions for renewable energy projects.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0),
(200, 'Heavy Equipment Rental Vendors', 'Vendors offering heavy equipment rental services for construction and industrial use.', '2025-01-19 14:22:10', '2025-01-19 14:22:10', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `config_vendor_types`
--

CREATE TABLE `config_vendor_types` (
  `vendor_type_id` int(10) NOT NULL,
  `vendor_type_name` varchar(80) NOT NULL,
  `vendor_type_desc` varchar(255) NOT NULL,
  `vendor_type_created_at` varchar(45) NOT NULL,
  `vendor_type_updated_at` varchar(45) NOT NULL,
  `vendor_type_created_by` varchar(45) NOT NULL,
  `vendor_type_updated_by` int(10) NOT NULL,
  `vendor_type_status` int(2) NOT NULL,
  `Is_vendor_type_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_vendor_types`
--

INSERT INTO `config_vendor_types` (`vendor_type_id`, `vendor_type_name`, `vendor_type_desc`, `vendor_type_created_at`, `vendor_type_updated_at`, `vendor_type_created_by`, `vendor_type_updated_by`, `vendor_type_status`, `Is_vendor_type_deleted`) VALUES
(24, 'Primary Vendors (main suppliers)', 'UUJJUmJYd0x3Sk1hNi9vaVpITnI3emY1cjBMNEswZ1RZVUFTY3Y0b09pME40cDRNMHlIbHZEa084ZWpUTXcwZ1FuM3k2Wm41VnNZVEtoUEUxUW5HanNVajdLeFdNOFBVUjJZc0FpYy9ZZU8yM09oSVIyS1N6RkVsS2F2N09UMS8=', '2025-01-19 01:42:05 PM', '2025-01-19 01:42:05 PM', '1', 1, 1, NULL),
(25, 'Secondary Vendors (backup suppliers)', 'aHZud0NDUmZFZk1lQmZodFF6RFZaZXU4aitFall6Tmd6anNvdFFaY0xqamhET0ZyTUZZekVoYVNIQmhYVTU1SXRpK1NNRkpTa01wdWllV3lqOW9DUWw2ZzRJSVVob2pHTk02NkdGcUsyRVpiYnNWSHdYRXpjTWh3WjR3V2c5UVU=', '2025-01-19 01:42:24 PM', '2025-01-19 01:42:24 PM', '1', 1, 1, NULL),
(26, 'One-Time Vendors (short-term/specific project)', 'OHRabVAzUjc5V1ZCdk14Um5zeGlvWGhLRndKVmlISmR3cXlXTnJiSFhBRlRLdnRueWZlVm5VS05zMGlMVTNlczBYeE9HOC9zNFg3TDMyMHpKaE1tTUE9PQ==', '2025-01-19 01:42:41 PM', '2025-01-19 01:42:41 PM', '1', 1, 1, NULL),
(27, 'Long-Term Vendors (contract-based suppliers)', 'K0NzRzk2SlJWeXRUUVBnYzQwbUk4N0RoRHF2QUVOZTRFVjhkZHNKL3cyQVQvQWcyb0J2TWNTYnNRK3ZwL1d2c21kcEJkekRLK2IxdGpvd0FaSC9ZdWViMXZlV0lWN2lJd2IzNE9SM3k4UGM9', '2025-01-19 01:42:58 PM', '2025-01-19 01:42:58 PM', '1', 1, 1, NULL),
(28, 'Local Vendors (geographically nearby)', 'aHc5M2Fkbi9tSDlTbWNKVTAxZExmWWQ4MXBzUXptMVlnQkFXa2tiS0tXMnhja1dlNXIwRTIvcHIwNm1mWFpOVUx0Z1NBY3dtL2VzMzFhaldGYStvcTNUTkdERTNRaVNHZGNNZzM1aGNDNUU9', '2025-01-19 01:43:16 PM', '2025-01-19 01:43:16 PM', '1', 1, 1, NULL),
(29, 'International Vendors (foreign suppliers)', 'MEUrOGg5TWRpd0t3OXVCblBuMndOSmhGTGJ5Q01GSjN6Y1VGZHVQWmdSMDhubUN3TnV3NUxPYmttTzRFUUN4bzZOaGNxTWQ5NGxpUWhwM1NzRlJpUllEbVhmODY5ekIwaGF2UTlpOUY1RXM9', '2025-01-19 01:43:36 PM', '2025-01-19 01:43:36 PM', '1', 1, 1, NULL),
(30, 'Service Providers (professional services)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMUNXL0hucmVjN1lYQTM0RXJIaW5WN1ppR1VoNDF6Z0xseWUwOU8wTzU5QWRrVVdvSi96NVBlVTJkRk5SV0UreXNEOFZCbnhxcE1GcElSR0s5SnVBNUMzemRxZ3hFNFkvak12L3o3ejIrYjQ=', '2025-01-19 01:43:54 PM', '2025-01-19 01:43:54 PM', '1', 1, 1, NULL),
(31, 'Strategic Vendors (business-critical suppliers)', 'a1puUFdCYnNoSjdtSUJXTlhQZExUZGdHZVh3UnFrWkJFbHJBMTFhMjJBTHBXTllOSGI0SHhBZlJCZEpNRXJ3NA==', '2025-01-19 01:44:15 PM', '2025-01-19 01:44:15 PM', '1', 1, 1, NULL),
(32, 'Approved Vendors (vetted suppliers)', 'ZlgwRGpvYURSQkNQeVMvWjdxWFJrWVdvNzhTRVM0Ui94UE5yTWIreGtCVW1ydjhIS1QvSm5HWTlyWkNhcHBralBkMmc2c3I0dWpZSGNEVFZ4LytPVitlTDZ5UWI3VnNpaWx0Mm5hdTBleXc9', '2025-01-19 01:44:32 PM', '2025-01-19 01:44:32 PM', '1', 1, 1, NULL),
(33, 'Preferred Vendors (priority suppliers)', 'ZU4va2t0bE01clowd3Rmd2ppc0xPUkR0aHhTeXcvYmhMZDRlS1ZtRmtVS1lidjJjcUU0bkdubDFSVzBsSjlyamlTeE5Cd0c4TzNWWGpCS1hvbjdLQmhob0sveXpnOUVpYUs2SlE4emwyYUk9', '2025-01-19 01:44:50 PM', '2025-01-19 01:44:50 PM', '1', 1, 1, NULL),
(34, 'Temporary Vendors (short-term engagement)', 'VGRCMVVZZW4zRjAwYzN2SGo1bW16NnpnckYvY3Q2U09HZFNCUHBLbnkxa0pSVmpmeXFvTzVXWEdFd3lwckxQNE4vSE1IL09XQW5hL3IvYXdrKzlXWlZrdzJuMG9ZaE1STG1BVDFBazRYTXc9', '2025-01-19 01:45:08 PM', '2025-01-19 01:45:08 PM', '1', 1, 1, NULL),
(35, 'Exclusive Vendors (sole suppliers)', 'NDB4UVFFaUYzVzVXUFc1RUI0Y2lKVy93dEMvbW1INURnazdaY2Y5Vy9DOUMwcHgzOUhXeXliQWVLMlJMeWxRS2gxTitjaGFESzh0QkY1Ti93dTJaSU81YzdKM0tVcnQ0UGVEeEtNc2Z1Wlk9', '2025-01-19 01:45:39 PM', '2025-01-19 01:45:39 PM', '1', 1, 1, NULL),
(36, 'Bulk Suppliers (large-quantity providers)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvYnFDNHdEUWczYUFtZHZEK0hKbFZuT3BKWTl3MmJQYzA0VmlQSmRZcUNKRFA5NGhFOHhPelRmZHdmY2ZxUHVpd1RyT2dXNDVxN1lPNnRlQnozM3BUejQ9', '2025-01-19 01:45:52 PM', '2025-01-19 01:46:03 PM', '1', 1, 1, NULL),
(37, 'Specialized Vendors (niche products/services)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXNDFKRVpsQ2QvY1NlVzFadnpFUjRqY0tmcWdFRjVrcTlwb0NRM3JwVWFkMmhaRjNhWm1lVExpU0Y0dHU5ZHRiZFhkOW42Q1YvZzF3TjJPYWQrSkYrYk09', '2025-01-19 01:46:26 PM', '2025-01-19 01:46:26 PM', '1', 1, 1, NULL),
(38, 'Freelance Vendors (independent contractors)', 'VzRNbm5WeDVZWWJQVlBuMkN3VDFnblRoRFV5cGFkR3QzL1pIRXpPQi9qOHU4SVZoUkIzeGRGcWUrN1R2cDdVdytWMy9JNU9xRUQxTmxoVjk5c3RIUGU4YlJydm9veStqeFdSOWpYTEFwaVE9', '2025-01-19 01:46:49 PM', '2025-01-19 01:46:49 PM', '1', 1, 1, NULL),
(39, 'Dropshipping Vendors (direct-to-customer shipping)', 'OTVyblRJb1dSeFpUekd1RkZxYkRFa213SGtLaVhDTjJDT1g2VVlIRjFITUtRWnlTN3VScTNselBsaEJZRUtyZ3hRd3U0NGN1VldhNGZoT1o4NGEwZm50UCtUV3Zya1F4UDFEMnNIWHZxblk9', '2025-01-19 01:47:05 PM', '2025-01-19 01:47:05 PM', '1', 1, 1, NULL),
(40, 'Distributors (intermediary suppliers)', 'RlBoYVY1ZlZZSHJQTEdkeEdyQ1VwYzluVERSd09LTHkzeG5uS0oxckFKYlR2VW03QzBhRjUwYitSUjNSWDY2RkhYV2tvMDdtK3lCZjZIR1FNTTYwMG1qSFg2emtMRHRzeWU5MHoweVpqc3M9', '2025-01-19 01:47:28 PM', '2025-01-19 01:47:28 PM', '1', 1, 1, NULL),
(41, 'Manufacturers (direct producers)', 'R3hDWERKam1Wek5FMUpHU24xRXhqYmtpYVlETlVjaEg3OHZKeld3U2NlR21Nc3BsT3dFV3pUWURQQXlYTVNERW1LWlcwcXl1bkIrZnROUndLK1p4VW5reTQwL2lrbFRoQm1DUWcvMXRlNnM9', '2025-01-19 01:47:43 PM', '2025-01-19 01:47:43 PM', '1', 1, 1, NULL),
(42, 'Outsourced Vendors (third-party operations)', 'Y1BKM3JzNW0vdDMzKzBkVWU3MXdXZGFGUjdPejFHZHZJWHViQ01vc1VSb29WV3U3UElYQmdjVWlkU1ZnQkpoL1YxeDM5em1Bb3lVbHVIaldzRDJobDZsa0c5M3MvRzZoN1hHb3lmcm1yUDg9', '2025-01-19 01:48:02 PM', '2025-01-19 01:48:02 PM', '1', 1, 1, NULL),
(43, 'Emergency Vendors (urgent requirement suppliers)', 'c3RqRDNkekMwc1pEdVNRVFFkLy9mOFcvOTcxRTNPRTBFQk96Vnd6TkZiMkhSZTQrMnM5ZVM0Q1NvdUsvR1FXdTZjSmNpOFlYU25RZkY2aGtIbFJWcUE9PQ==', '2025-01-19 01:48:20 PM', '2025-01-19 01:48:20 PM', '1', 1, 1, NULL),
(44, 'Non-Contractual Vendors (informal suppliers)', 'VzJFekJzYU9GQWlWemxaYjN4bktnVDRzWUhzL3JRUXplSDNLRlhBaU1VazZobkpLUm43RXFFVko1ZFQxWGlyWVliZkh6azRGTWNHV2RPRHIvbFVyUUVwdFVvZG9PTyt4Uk5mNEdhZ2NaQkE9', '2025-01-19 01:48:34 PM', '2025-01-19 01:48:34 PM', '1', 1, 1, NULL),
(45, 'Contractual Vendors (legally bound suppliers)', 'K0NzRzk2SlJWeXRUUVBnYzQwbUk4K3hzL2R2OE5Fak9XcDVVMUI3MHBiNjFybXQzajc2bXRSNTRZOEhINjJpOEJkU2RSTFdRN2tJODdPMHhQMVFJYzR4UlRxdkh2QmUrcUd0YVJUdUM4Sjg9', '2025-01-19 01:48:51 PM', '2025-01-19 01:48:51 PM', '1', 1, 1, NULL),
(46, 'Consortium Vendors (group-based providers)', 'N3ByaDAza0lCK3hjTStBVkxjQXJnL2lXSlEycG0xNitGZEN4dkVhOG04VG1wSWRqY2ZvM0RySkRqTVgveFVmZmFqajl5TDd3MWEwWmN5YUJOSE1KR29kMTFucjlLSTRqb1FlcE9Bc1hxU2c9', '2025-01-19 01:49:11 PM', '2025-01-19 01:49:11 PM', '1', 1, 1, NULL),
(47, 'Government Vendors (public-sector suppliers)', 'MGQ3THdHNngzelhVa01RUDMwM3RnM3Q3OGd2SXhOam1UUHJuUUNSWEttUDlCdkxsdU5oZkFXOE1HVGg3Yk15d01TUk9XSzhRWTJHTHFQbkRZY3pQUUE9PQ==', '2025-01-19 01:49:28 PM', '2025-01-19 01:49:28 PM', '1', 1, 1, NULL),
(48, 'Wholesale Vendors (large-scale sellers)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvV2lZZDNjYVBSTW5ScWZUbmc1U2k4MnF6RXI2Q2ZSYjRTUlhiOHpOWEZsUGRiN1VoME9wb1cwd3Z0c0RWL0I0ak82ZThGRmo1dmx1dmthQW1SL2U3VndZQ2M4VmE1dm9jOCsram9RVVplV2I=', '2025-01-19 01:50:24 PM', '2025-01-19 01:50:24 PM', '1', 1, 1, NULL),
(49, 'Retail Vendors (small-scale sellers)', 'L3RvSjdjVVU5MWlheXZIcjJoN2RBUTNJTmNVT3cvTy9xWVNRcDBTQnY1VDJFQkhKcFd3VmtDeXBFV3hmV1VzbThRR2FFSy92MUFGYktZdlBSSVlIa2FHR2xXaXZKTCtDVC9yMXBZRjcxMVgvUFVXbU94dFVodWhoMmxjMVFRdDM=', '2025-01-19 01:50:39 PM', '2025-01-19 01:50:39 PM', '1', 1, 1, NULL),
(50, 'Resellers (product re-distributors)', 'azAyN25mOWQwWElpM3BXdnZtZFAvVktJa2RySTZ0UFhqcGVqWDRKaC9nbVhwQlVqM0lDWW55eUlFeXJ5QS9LaktEZGRxMnFLd2J0TGIweGdKbEMveVlIa3RFdGIxRlZpOWpJd250UlN1Vk09', '2025-01-19 01:50:57 PM', '2025-01-19 01:50:57 PM', '1', 1, 1, NULL),
(51, 'Project-Based Vendors (task-specific providers)', 'OHRabVAzUjc5V1ZCdk14Um5zeGlvU0dUNUtuODdyVU83VXRlWFJHSmQrbWRsMU1FYlMvd0QzVnlXcXRvSjJTYWhUVUNINEM4M0RnT25xOG84dUM5YUZjaDRSVkpIMWdVUEdHektKS3ZZUU5EakZiSXl4dWpUY3d5Z2plRmlsK0g=', '2025-01-19 01:51:14 PM', '2025-01-19 01:51:14 PM', '1', 1, 1, NULL),
(52, 'Seasonal Vendors (temporary/seasonal services)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPdVg3ek8rOStJMkNjRm1mSW1LR1Zac01UR0J3YnlCK2REa21Ka1daYTVXemNiS0liY282VlUyS1F1NXFHdG1zNnJoNkM0dzk0d2t6dVhnZDNSc3Zia1E9', '2025-01-19 01:51:36 PM', '2025-01-19 01:51:36 PM', '1', 1, 1, NULL),
(53, 'Partnership Vendors (collaborative suppliers)', 'Z3lMR2tseFo5dHVxeDk0clpsWW84Q3R2Q2ZxVFMwZ1VUYUpYY3d2MHcxeHh3WWNKb1hwU3RLUGE2dG5CWmFoMmNCc0EzbUUwT25RV1FXeUxCQ09nOEo1QytSR1ZXL1BwbFB6Rlpna3IzUlU9', '2025-01-19 01:51:57 PM', '2025-01-19 01:51:57 PM', '1', 1, 1, NULL),
(54, 'Technology Vendors (IT and software providers)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXNkNXZXRyQ0ZXNTJJS0h2cGVReTNRQ3M1RWpYM1UyZStERDV5T0RrU01mS2liVXZSb2hYSERJbVdEKzI0QmhUNWV0NXBMVWtOaTh2K1dUOHpSbkNCQkZNamhyM3l6d0d1aitoSzhkMWNxSWk=', '2025-01-19 01:52:15 PM', '2025-01-19 01:52:15 PM', '1', 1, 1, NULL),
(55, 'Event Vendors (event-specific suppliers)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPc3d2cm0wd0pKeVorRTQ4ZTM0SjFjbUNQNjRLVzVpLzMrWnR4ai9KM1Nta1ZYc1VHRk1BY0pCNnczVzFwd2dzWW81Qkd1UGFHWHdKN3RYS0UzaGg0V3kzWUVJclRPVHhwczdxN1dySzBRakE=', '2025-01-19 01:52:34 PM', '2025-01-19 01:52:34 PM', '1', 1, 1, NULL),
(56, 'Marketing Vendors (advertising and promotion)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvWHk2ZWNPZWlNNWRaTVRzakRJVTAzd3hEeEZJdWhxdXNFUmRpQlpzU0RyZXdUek5SZjhndXRrVEtMTUJ4QUZkK0lMdDh6ZGZaZ2laTDVMVkQvYTdXNEcwc0Q1dkUyRURyTXh3c09DQStvejg=', '2025-01-19 01:52:52 PM', '2025-01-19 01:52:52 PM', '1', 1, 1, NULL),
(57, 'Construction Vendors (building and infrastructure)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPaHgrd09OeUpBZjVGT1J4bEprdDJSZDFvdWc5YTg5LzdpVVV2eE40dTljbUNXMzI4QXhienBLWnJ1NExQRzg3cVB2Tkl2NFlBY3Z4QkdIazZqNnQrMXFDZERpb1YxWmZJMTk1VElnd0RFZ2Q=', '2025-01-19 01:53:09 PM', '2025-01-19 01:53:09 PM', '1', 1, 1, NULL),
(58, 'Transport Vendors (logistics providers)', 'TTAxK2g3dk5tdmNlZkV4dXRVN3NUbHdBR0RsbUd4MUdaYTNZVmIwN0tOWmtzbzhka0NtQWFpR2ZtcU1GVkFRbXZZcXJEZWp1QXNZTWg4UVRUTTJLNE9ncXMyelV6TCt6dzI4Nm9hR3BJT2JWbWl2dkNFUTJwdElXcjI2SDlLRUtBZWhUS0svWWFGYS9PT1JvU2R5MVNBPT0=', '2025-01-19 01:53:28 PM', '2025-01-19 01:53:28 PM', '1', 1, 1, NULL),
(59, 'Facility Management Vendors (property and maintenance)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXL1Z3V3MraW5Ea0ZKYXlNWm1vd200bU1VSVYyRlFFV2pDSzNtWVk5SHB0Rk16bU5IUTFrOExpczlHQVByd2lZamc1NFlkcU5Dcjd3OXg5c3c1ekhGbDF1VVJjQ245d01FTjBBV1pyZ1dTc3Q=', '2025-01-19 01:53:46 PM', '2025-01-19 01:53:46 PM', '1', 1, 1, NULL),
(60, 'Training Vendors (skill development)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPaTFrRXRYOHlGdm9lazJrQXNNSzJrUFhVUkpDT2NzQWlKeDkyaHVlTjZFbFBIbXlLdTY1dXNnNWs1WHliVW8wRXZBanRZaCtJcWRybW5CcmxnNzhYdzQ9', '2025-01-19 01:54:03 PM', '2025-01-19 01:54:03 PM', '1', 1, 1, NULL),
(61, 'Testing and Inspection Vendors (quality assurance)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvYlB3bm1zQU1rNzJ4WXhQVWYzZzdzd3R5MldNakNRd1l5RzVUQTYvaEQ1dUxRSjFockpEeVU2K0k2ZDlhcXQxNGV6OG5QZURCYng4WlQvN011QjZQUE1zM05RR3ptRFZPV2pIZmJ1Y0krd0V5OGEzaEpXVHR2SUZWQWdPVTlicUpRPT0=', '2025-01-19 01:54:20 PM', '2025-01-19 01:54:20 PM', '1', 1, 1, NULL),
(62, 'Raw Material Vendors (basic resource suppliers)', 'ZHJad2FFNlkvK2t5SzlWRCtWcktDWEdwZVpZeENFY2hQaHBIa3FLZHdNYzlGd3d2aEsxb2dlQm90WkFyUEMzZlpFS21WK2s2eVJjYWg1dkFsN0hNUm1XeW1iRGljOHJqOTNTcDZnMU53aVk9', '2025-01-19 01:54:38 PM', '2025-01-19 01:54:38 PM', '1', 1, 1, NULL),
(63, 'Utilities Vendors (essential services providers)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXeGtrZzB0YkpkL1M5SE9iSkp0UVI4akV2YjRkTHQxTEJ5NzBrNEQ0VzVybFZ6MDdtVHoyRUwrdTNkZFdKNzRRQmVtM2xqWU1IdGRwTDhxQS9SY056SkpyaFRzQVg1Z0UzTU8xY2dERElXVHU=', '2025-01-19 01:54:55 PM', '2025-01-19 01:54:55 PM', '1', 1, 1, NULL),
(64, 'Consultancy Vendors (advisory services)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPaXN1TFpORVRFOFRORnErcU1SYnlsdHZZVHFTWm9oc0pJWmY3cDB6TUVWbG5YeUhucjJIMkVzZFRyUS9oUlJ3c2hLMVNXeGViWVAzcXk5VlFOOXVMaERTcitROUZJTTJGaEdMQ0R4MnJycmE=', '2025-01-19 01:55:11 PM', '2025-01-19 01:55:11 PM', '1', 1, 1, NULL),
(65, 'Finance Vendors (financial services)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXN2g2VU1waGlPdXk5QVhUV2dyZS9tOEpJZXhuMStURFdtZDJpVWoxUWZRMUJOUlBLODZvRjFyVUtHSTBVNmNBaEdNd1pGbURLY1JubGFQam9yc3FoczQ9', '2025-01-19 01:55:28 PM', '2025-01-19 01:55:28 PM', '1', 1, 1, NULL),
(66, 'Packaging Vendors (product packaging suppliers)', 'ZHJad2FFNlkvK2t5SzlWRCtWcktDZUNZWk1haXpoZnY1QkRuZUFwT0w2TDBZNkQ3cDdZZDhSb3M1MmxsTlhHN0c0Z1FCMUpTVHNlTHM2V1lqdWdaU051SGN1ejMvSDNwWkVoRlpkSEtLYURoWGw0Z0F3T2RHUG55M1RFT3FGWGw=', '2025-01-19 01:55:45 PM', '2025-01-19 01:55:45 PM', '1', 1, 1, NULL),
(67, 'Subscription Vendors (recurring service providers)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMTF5b2gxY1VYWFA2UHd0TnVpdHREZmlDd2NxOTRSaEJlNHYvOUpDRXVxelNybDdBMFZEU0d6eU1LYUpLaU8yRGpiWDRPOHorVHRhT1gxeEt1RFhkaEI5cVhON3JHQURweFBGOGVTeWo2USs=', '2025-01-19 01:56:01 PM', '2025-01-19 01:56:01 PM', '1', 1, 1, NULL),
(68, 'Recycling Vendors (waste management services)', 'dmo4eVpsUGZtRXEvb2RtNW5aYVd0QnEwOUhmRGtOUUdjUGZSTUgyY2VKZE8yZ0UyNldIUkdjaUc1VUxiZi96UnlhVDAycndlazhhck9ybGRFdm0yVUNxQUxuM2o2Rko1a2gySWJuQ1JscFE9', '2025-01-19 01:56:19 PM', '2025-01-19 01:56:19 PM', '1', 1, 1, NULL),
(69, 'Research and Development Vendors (innovation services)', 'OHRabVAzUjc5V1ZCdk14Um5zeGlvYUdLaGdTNTE3U0sySGhhVXFVUUFsdk8vMFV2Z1FTQ1JocFpJQWthdHBEeGtzZGYva0NKOFNkbnhyL1ZLUWV4TnltZ3FSdnJET0dERkFlVDhuaUU0aHN4dTV2aXVmY093eDlYdDdBTUtDbWM=', '2025-01-19 01:56:35 PM', '2025-01-19 01:56:35 PM', '1', 1, 1, NULL),
(70, 'Healthcare Vendors (medical services and supplies)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMUQzSElWUDloTkFZVzA1YVV3ekx6eFd2T0NkSzlxc2JXZDltYTdxK3Zpbi9MK3EvL2JidTMyWU93b05GQlpDUjlsbzNuUktOMGVRNUhsa1E0WjdSYVNTUEk3R1hTaElxa05QQVFvbno0OXBPV2tIZ3MzZk94Mkt2Z3RYZERWN0pRPT0=', '2025-01-19 01:56:51 PM', '2025-01-19 01:56:51 PM', '1', 1, 1, NULL),
(71, 'Recruitment Vendors (staffing agencies)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvWkI5cmNXNUdiZjgyNXhwR2NpL3JicXBKUnJwUE5Mci8xNWtvMS82OHB0S1FyKzErclZqS0NwWGNtcWlMNUltZTI4L01EWHJCeUh1N0lYWlJudUtwSU09', '2025-01-19 01:57:06 PM', '2025-01-19 01:57:06 PM', '1', 1, 1, NULL),
(72, 'Customization Vendors (tailored product/services providers)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMjJqZlZDRzRXdzV2bWNxWEJsa1N5UUFFbGl4YmVmTGZGNExjb2hna2J2M3poMjFvNzQyS24wUnl2L0JyV0tmSTd0MVFxMDduNlBrUFhBYkkwSUJHSi91N0lZRmlwcHpJSVZWTDlCL1BjbmU=', '2025-01-19 01:57:22 PM', '2025-01-19 01:57:22 PM', '1', 1, 1, NULL),
(73, 'Franchise Vendors (licensed distributors)', 'VzJFekJzYU9GQWlWemxaYjN4bktnYTBwRjlkWS9GeUdILy8vYkpNWnczV2lyV0d1VitrcnBsRVRIb1c2NGp6MnNNZWVXVFB1OS9HckZiT0xjR0FjYlg2cDdIT3BVT2pUMTRzQmgya1hjUE1TWUs5aDRaVEo2eStTRVJTMjdUOG8=', '2025-01-19 01:58:54 PM', '2025-01-19 01:58:54 PM', '1', 1, 1, NULL),
(74, 'Import Vendors (international procurement)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvVDJDV1l4Mi9JV0hHYWQxcFhaY2IvTkVmbWg2ajB2WVluRmZqQTBMWUFvUFZXRFNPVEllZzZjbldsekpSSG9VcVBxeVhDbU9NUnZoWmdhYTA0OHlDc2c9', '2025-01-19 01:59:19 PM', '2025-01-19 01:59:19 PM', '1', 1, 1, NULL),
(75, 'Export Vendors (international distributors)', 'TTAxK2g3dk5tdmNlZkV4dXRVN3NUcFJPMk44R1NyTWdhY0N4dEFydjMrb0I0dGNXNVZkVEwzaVVXbjN6YXNGbm16Lzg0UUo1VmU2Z0lSTm9xa1VvQUNsak1SalI3RXRZNjFBZTlPM1E1bGc9', '2025-01-19 01:59:34 PM', '2025-01-19 01:59:34 PM', '1', 1, 1, NULL),
(76, 'Legal Vendors (law firms and attorneys)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMjJIbXNHWWJYUUNYaU9salhmNlNrS3ZNS2lFYlVlYXppcUJIVnBPVjRpNlhldzdIN21qYUphN3NkMFEzZGpocXNmRlowM0NhS1l1MGRtWnYwb21QMGFyUkVoeTZVUU1lWmZYenBKWWpFQ2Q=', '2025-01-19 01:59:54 PM', '2025-01-19 01:59:54 PM', '1', 1, 1, NULL),
(77, 'Educational Vendors (training and certification)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPbHhBZno4eXZ5bGkxbEd6YjNpTTZaYml4UXpJSWJhNERoVzE1VXNYbFhhVGpSWTRHZVRBbkRqQVloaWFpWThBUFkrTFlqVDRwUW9vbkJVOVZUZVRkZXpuTU85VERQN0g1UURteFI0VnlFMGp5S1JHSFVhdFZ3QmdFUmtHUk5TUm1BPT0=', '2025-01-19 02:00:11 PM', '2025-01-19 02:00:11 PM', '1', 1, 1, NULL),
(78, 'Insurance Vendors (risk management providers)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXNFRsdGJwMGtQcHpXcnhFZGd6OStRazR6Y0JoTnFhbVN1VTVHR2lDdXROcVJIeCtRMXAxTjliYm9OZ0VDblRvQWxsOVRUc2doVUdXdGE0OFpJbnFBMjFkTHExMHNtS2czL1B3aWMyKyt0K0I=', '2025-01-19 02:00:27 PM', '2025-01-19 02:00:27 PM', '1', 1, 1, NULL),
(79, 'Hospitality Vendors (lodging and catering)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXNnp5bGlxTEhDSEhnZytsQmRFN1FsaGNmRXZaYWdLTE5WQlk0RXN6VTV1NXpEVmR5K1dsUE5mOXl6TWlwZ0tGVng0azljVEgxakhFL09hOVN5TGZ4SHZ1RzZuNndNV0U1YVBPeGF4OEt6OXY=', '2025-01-19 02:00:42 PM', '2025-01-19 02:00:42 PM', '1', 1, 1, NULL),
(80, 'Subscription Content Vendors (media and resources)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPczQrbnFRU3pCQ0hqNHhGOElKN0NDb2FRaWE2dmhJQmtqTWhqQmI1VUMzTFlaS0JRRm4zcVY2S0c4TWtCaUpFMGhwNXRDZUo5cWxTVHQzSDlCMnk3M0cxVW1MSTJqczgyRDFyTEhPQnU2c2c=', '2025-01-19 02:01:01 PM', '2025-01-19 02:01:01 PM', '1', 1, 1, NULL),
(81, 'Cloud Service Vendors (data and hosting)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMnh5a0VockRvaUZLd1huMk9Mb1FhVFdHWkh4M0wwK2xQOHVqTWpvQkJ2c3hSUHplZ2hobUVYbEg1NTcvK1dnclhCcFJzbTdiZTlSZXErU3Vra0ZiNW0yZmpNSGhhMGRUbE5sS1psSEJQQ24=', '2025-01-19 02:01:17 PM', '2025-01-19 02:01:17 PM', '1', 1, 1, NULL),
(82, 'Security Vendors (physical and digital)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPb3h3WWQ3VHRoQzlwU1pQRnh0SG5nZWNDMkdHRWczVFVDRFhLcERaK1Q0S1B5Uk5wTXdmVit6VTd3N0FSbFZ0M3ZNOGo2NlBsV1Y0NzBqd0JpM0FyUDlCZUFkbFJzWXA5b3hDRktMbXpSVzg2NFBtVmNTNXQ1NVFIWnlKczYyMkNnPT0=', '2025-01-19 02:01:34 PM', '2025-01-19 02:01:34 PM', '1', 1, 1, NULL),
(83, 'Creative Vendors (design and content creation)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMTMzZEw2R0lUUEZHUUpSaXBySVRpTCtxaTlzYjNCY0NpTnR5MmFPb09oTW80RmhQNUJQdU9jQVFtdjgzYjg4M2lLSHl2Z3QyTHVnTzJ0UEJBOHhhcVE9', '2025-01-19 02:01:52 PM', '2025-01-19 02:01:52 PM', '1', 1, 1, NULL),
(84, 'Media Vendors (advertising platforms)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvVnFObGdibm1KUmF2N0VNNWZlM2RPZklGazMxQ21pbzRMRVpaanFMYXk2TmZiTHNBQ2JtZnZpZms2SDMreTA5V3I4RkNsYWViUUhVVlAzaTExc1E3OXVLdGZ2NGJLV0c1NWZpazVJYmtBQkc=', '2025-01-19 02:02:12 PM', '2025-01-19 02:02:12 PM', '1', 1, 1, NULL),
(85, 'Event Staffing Vendors (temporary labor)', 'ZHJad2FFNlkvK2t5SzlWRCtWcktDUXMwcncyWEttMGprVDBGZm81bDdWNFg4SVdRUFlEMS94aC96U3pDdXJKVndvTnc1dGk5ODlHTW9vZ0VzYXpMSG9XZnBzcFlPMFQ2U0tNU2xvcENGcUk9', '2025-01-19 02:02:28 PM', '2025-01-19 02:02:28 PM', '1', 1, 1, NULL),
(87, 'Renovation Vendors (property upgrades)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPb1ZpYzFyRXNsNGlxeW5CYThkYWtUSko0a2Rzd0Q4M3VLYXpBaXpCdnBFTDlyK09CbWFqL01MU2JwakJCd2VSUzIwbjlqeVRKMEk3V3Fac3UzaXgxMlE9', '2025-01-19 02:03:18 PM', '2025-01-19 02:03:18 PM', '1', 1, 1, NULL),
(88, 'Waste Disposal Vendors (environmental services)', 'Y1BKM3JzNW0vdDMzKzBkVWU3MXdXYjlwUytmeldST0xzb25VaWxIcUpialdkaVVpK2R2TnB5N0ZnWFlDNGRTb3Vmd3dvMTVCZ3Y0cHV2blhUQlNab2tNWUJ6RDVOZHFBblU3Q095NFdrWWdTVGpNUzhQYzdTSVdFOXpGeThBc2U=', '2025-01-19 02:03:47 PM', '2025-01-19 02:03:47 PM', '1', 1, 1, NULL),
(89, 'Testing Labs Vendors (product/material testing)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvVEdVdFY5UWw3N0dhU2NNYjBrcDZGSTBRWVlIbno1SDJDb1FQbTFJUjc1cVpMbVJVakZtZno0TmZycXh4NU1NUU83c1FmdzFBTzVmL01sQmtXS3RHeHR2Z1ErcVlIOHM3OWhCV3IwMWNPQjg=', '2025-01-19 02:04:05 PM', '2025-01-19 02:04:05 PM', '1', 1, 1, NULL),
(90, 'Printing Vendors (document and promotional printing)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXNTVNVThadFQ2QXE5N0V3d3hwNWxWQUxBYVVwR05DNkxDcmR3QWIvRHZjSUVZbHhQQ1Y3ckcydXJsOTRmV3BXUlJMVCtxK25jbytIZ3JWcWlnbHVXZG13cG9zd1piYlF5SUJOVjUzajN4ZTE=', '2025-01-19 02:04:20 PM', '2025-01-19 02:04:20 PM', '1', 1, 1, NULL),
(91, 'Energy Vendors (renewable and non-renewable)', 'ZHJad2FFNlkvK2t5SzlWRCtWcktDZFVzS05PQkZxajdyaTN4cDByYUU1Q0RRaEIvRm9ZWkJWbHU4a1kyeXVjMFd3UWh0Y1NXUU5EZldvYjFyZlJVZ2pFU2kyK2YxUTRKdHR5YnFMZ1UvbFU9', '2025-01-19 02:04:37 PM', '2025-01-19 02:04:37 PM', '1', 1, 1, NULL),
(92, 'Fleet Management Vendors (vehicle providers)', 'dmo4eVpsUGZtRXEvb2RtNW5aYVd0TUw1citnNnJCMjdoZVB3SlhiL05QWjl0MFg0QXdDODFQTElaS0tGNDZLb1NJMm5vT0Y5bEI0NVVKREdKSVdVeHpRMTdHYlIxMW54M0ErbWJzRys2NGs9', '2025-01-19 02:04:58 PM', '2025-01-19 02:04:58 PM', '1', 1, 1, NULL),
(93, 'Auction Vendors (asset liquidation)', 'dmo4eVpsUGZtRXEvb2RtNW5aYVd0TUQ5bFZPNWFsZGtmaG5ueUxnc1hNZmNDN255d1p6WTVKYXpHc2hKYVczVGpwcHVqSXFieFQzRm9BbkRLSXNBdXdWdFlxc0s4UXdzckhreXJYVG9odTg9', '2025-01-19 02:05:16 PM', '2025-01-19 02:05:16 PM', '1', 1, 1, NULL),
(94, 'Licensing Vendors (IP and software licenses)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPb01GcnRsdnh0dE05TFpYWTY4OHBqQzFVclc5ckNldVVxdWZLVUFydVlyL1ZmNk1JYVhibDVpUURFWnpDdnJhdGQ4anE5S2d2L0w5d0NKMzJzVlhFSTQ9', '2025-01-19 02:05:32 PM', '2025-01-19 02:05:32 PM', '1', 1, 1, NULL),
(95, 'Translation Vendors (language services)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXd2o3ZDJkSm9PRkxtOXc2TkU4LzNnYlR0K1hwcGhSLzNBZUdaZi9jKzlxdWJuT2h4L3JjQlA0TjQxR0gxNDA0Wkc0Z1VUZ0hGUUh4SFk1d0R4bDNXUnJWTWVOMzhqK3ZhREc0S2NKalhtS3Q=', '2025-01-19 02:05:50 PM', '2025-01-19 02:05:50 PM', '1', 1, 1, NULL),
(96, 'Photography/Videography Vendors (visual content providers)', 'WXNuRVNRTC8wRWNDenhTTW9QM1dvY0FqMTNjYmtWNzV3dm14R3phTThDYWNnWVora05YVDF6b3pFQUtiL25CVnpxemxFZVdLMkYxc3NDNWEvZlQ4bk0rSDNsanRKdTl2bTFkUEp1aEVKYVk9', '2025-01-19 02:06:08 PM', '2025-01-19 02:06:08 PM', '1', 1, 1, NULL),
(97, 'Travel Agencies (corporate travel planners)', 'TDRyNUNzcGczK0t2YmtpQ28zaEczMDN5d0NiZUQ2WmxSdXNkNlA5R1JMWjUxMVdtMG5tTXA4NWxkcjZvZXduMDl4TXgweDZoZDBlMThHR2R0YkRrdUZPeFlUTDJXZDNGcEI5QVU4NHVySWM9', '2025-01-19 02:06:35 PM', '2025-01-19 02:06:35 PM', '1', 1, 1, NULL),
(98, 'Emergency Service Vendors (on-demand services)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPaTQrcVBsMFV4M3gxN3VHYnlQUndKeFI5NnhPTCtjVCs5eFVmR2FDT2xOaGQ2UzN3b2NySHZPdlIybWsrdVlJQkJMbTR4UHZRUS93aWNWRnRJY1BYdmc9', '2025-01-19 02:06:50 PM', '2025-01-19 02:06:50 PM', '1', 1, 1, NULL),
(99, 'Infrastructure Vendors (building utilities)', 'ZHJad2FFNlkvK2t5SzlWRCtWcktDWEgwOEo1U01aaVhlNVFWeVpjSTlmeDdqaUlxdXplelN5U0hSdHEwZURER1dSeTQxOFdCTTVNRWlXQkNXUko1K3BnNUFjN2duRnY1UDlCaEhPYkR6SXM9', '2025-01-19 02:07:08 PM', '2025-01-19 02:07:08 PM', '1', 1, 1, NULL),
(100, 'Subscription Maintenance Vendors (recurring upkeep services)', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPbDJDc0NIKzB0elc0OUhLTWcxcldCNDNPVElaalpzSTZXS2ZnNHVocjhtc2JydjFxQllVZyt1dUNicm45MUtWQ2JRdkk3bEtMUVo2a1pmYk1ZMVBhVWtHeWpTOVNncWFuZGxFR2k0MTNUYjA=', '2025-01-19 02:07:27 PM', '2025-01-19 02:07:27 PM', '1', 1, 1, NULL),
(101, 'Warehousing Vendors (storage providers)', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMGtvRDRyVnBhM1lSK3lGdEZaMHhDSmUzQmRlMkQ4Qnd1RXJROUFpQmFTOUt4ZHRNcllkcTN1UXlsc1EvSFpDZVRDdEc5RHpqWjhLbjNTWnNIbHE4aVE9', '2025-01-19 02:07:41 PM', '2025-01-19 02:07:41 PM', '1', 1, 1, NULL),
(102, 'Calibration Vendors (equipment accuracy)', 'QWVCd3MybEhteTc3TjlNdTRXYzJ2STBWYU5Ja3E1MnFWL1RCU2VNNXlOTW9teXZITnRHK0luZWZPQk50aXY2Vlg1WDd4bTQyTGlmcXVCZEtwcVNqSmJIVllqbCtFSjdGRUFGTkV0UXpQVGs9', '2025-01-19 02:07:59 PM', '2025-01-19 02:07:59 PM', '1', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `config_work_industries`
--

CREATE TABLE `config_work_industries` (
  `cwi_id` int(10) NOT NULL,
  `cwi_name` varchar(155) NOT NULL,
  `cwi_code` varchar(75) NOT NULL,
  `cwi_tags` varchar(255) NOT NULL,
  `cwi_desc` varchar(525) NOT NULL,
  `cwi_status` int(1) NOT NULL DEFAULT 1,
  `cwi_created_at` varchar(45) NOT NULL,
  `cwi_updated_at` varchar(45) NOT NULL,
  `cwi_created_by` int(10) NOT NULL,
  `cwi_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_work_industries`
--

INSERT INTO `config_work_industries` (`cwi_id`, `cwi_name`, `cwi_code`, `cwi_tags`, `cwi_desc`, `cwi_status`, `cwi_created_at`, `cwi_updated_at`, `cwi_created_by`, `cwi_updated_by`) VALUES
(1, 'Agriculture', 'AG', 'farming, forestry, aquaculture', 'Agriculture involves the cultivation of land, growing crops, and raising livestock for food, fiber, and other products essential to human life.', 1, '2025-01-19 12:00:00', '2025-01-19 12:00:00', 1, 1),
(2, 'Healthcare', 'HC', 'hospitals, clinics, pharma', 'The healthcare industry provides medical services, manufactures medical equipment, and develops pharmaceuticals to ensure public health and well-being.', 1, '2025-01-19 12:05:00', '2025-01-19 12:05:00', 1, 1),
(3, 'Education', 'EDU', 'schools, colleges, e-learning', 'The education sector focuses on providing learning environments and resources, including schools, universities, and online platforms, to enhance knowledge and skills.', 1, '2025-01-19 12:10:00', '2025-01-19 12:10:00', 1, 1),
(4, 'Banking', 'BANK', 'financial services, loans, credit', 'The banking sector manages financial transactions, savings, loans, and investments, playing a pivotal role in economic stability and growth.', 1, '2025-01-19 12:15:00', '2025-01-19 12:15:00', 1, 1),
(5, 'Information Technology', 'IT', 'software, hardware, IT services', 'The IT industry includes the development, maintenance, and support of computer systems, networks, software, and hardware, offering a wide range of services to businesses and consumers.', 1, '2025-01-19 18:10:00', '2025-01-19 18:10:00', 1, 1),
(6, 'Construction', 'CON', 'building, civil engineering, infrastructure', 'The construction industry is responsible for the planning, design, and construction of buildings, roads, bridges, and other infrastructure, with a focus on both residential and commercial projects.', 1, '2025-01-19 18:15:00', '2025-01-19 18:15:00', 1, 1),
(7, 'Manufacturing', 'MAN', 'production, assembly, supply chain', 'Manufacturing involves the production of goods through the use of labor, machinery, tools, and chemical or biological processes. It includes sectors like automotive, electronics, and consumer goods.', 1, '2025-01-19 18:20:00', '2025-01-19 18:20:00', 1, 1),
(8, 'Retail', 'RET', 'store, online retail, distribution', 'The retail industry includes businesses that sell goods and services to consumers. It covers both physical retail stores and online platforms, with an emphasis on supply chain and customer experience.', 1, '2025-01-19 18:25:00', '2025-01-19 18:25:00', 1, 1),
(9, 'Real Estate', 'RE', 'property, land, construction', 'The real estate industry involves buying, selling, and renting properties, as well as real estate development, which includes residential, commercial, and industrial real estate projects.', 1, '2025-01-19 18:30:00', '2025-01-19 18:30:00', 1, 1),
(10, 'Transportation and Logistics', 'TL', 'shipping, freight, supply chain', 'Transportation and logistics focus on the movement of goods and people through air, land, and sea, along with the management of supply chains and distribution networks.', 1, '2025-01-19 18:35:00', '2025-01-19 18:35:00', 1, 1),
(11, 'Automotive', 'AUTO', 'vehicles, manufacturing, sales', 'The automotive industry is involved in the design, development, manufacturing, and selling of motor vehicles. It includes manufacturers, dealerships, and suppliers of parts and accessories.', 1, '2025-01-19 18:40:00', '2025-01-19 18:40:00', 1, 1),
(12, 'Hospitality', 'HOSP', 'hotels, restaurants, travel', 'The hospitality industry covers services such as lodging, food and drink service, travel, and entertainment. It includes hotels, restaurants, resorts, and travel agencies.', 1, '2025-01-19 18:45:00', '2025-01-19 18:45:00', 1, 1),
(13, 'Insurance', 'INS', 'coverage, risk management, financial', 'The insurance industry provides risk management services, offering coverage for health, life, property, and other risks. It includes brokers, providers, and claims management services.', 1, '2025-01-19 18:50:00', '2025-01-19 18:50:00', 1, 1),
(14, 'Pharmaceutical', 'PHAR', 'medicine, healthcare, drugs', 'The pharmaceutical industry focuses on the development, production, and marketing of medications and therapies for various diseases and health conditions, including research and clinical trials.', 1, '2025-01-19 18:55:00', '2025-01-19 18:55:00', 1, 1),
(15, 'Aerospace', 'AERO', 'aviation, space, defense', 'The aerospace industry encompasses the development and manufacturing of aircraft and spacecraft, as well as providing related services, including air travel, defense, and space exploration.', 1, '2025-01-19 19:00:00', '2025-01-19 19:00:00', 1, 1),
(16, 'Textiles', 'TXT', 'fabric, apparel, production', 'The textiles industry includes the design, production, and marketing of fabrics, garments, and other textile-based products. It covers clothing, interior decor, and industrial textiles.', 1, '2025-01-19 19:05:00', '2025-01-19 19:05:00', 1, 1),
(17, 'Media and Entertainment', 'M&E', 'film, music, broadcasting', 'The media and entertainment industry includes film production, broadcasting, music, and other forms of entertainment, as well as the development of platforms like streaming services and live events.', 1, '2025-01-19 19:10:00', '2025-01-19 19:10:00', 1, 1),
(18, 'Telecommunications', 'TELCO', 'network, mobile, communication', 'Telecommunications involves the transmission of information over long distances through various means, including mobile networks, broadband, and satellite communication services.', 1, '2025-01-19 19:15:00', '2025-01-19 19:15:00', 1, 1),
(19, 'Food and Beverage', 'F&B', 'restaurants, production, service', 'The food and beverage industry involves the production, distribution, and service of food products and beverages, including restaurants, catering, and food processing.', 1, '2025-01-19 19:20:00', '2025-01-19 19:20:00', 1, 1),
(20, 'Mining', 'MIN', 'extraction, resources, materials', 'The mining industry is focused on the extraction of minerals and other natural resources, such as coal, metals, and precious stones, to supply various industries worldwide.', 1, '2025-01-19 19:25:00', '2025-01-19 19:25:00', 1, 1),
(21, 'Energy', 'ENG', 'oil, gas, utilities', 'The energy industry involves the production and distribution of energy, including renewable and non-renewable resources such as oil, gas, and electric utilities for residential and industrial use.', 1, '2025-01-19 19:30:00', '2025-01-19 19:30:00', 1, 1),
(22, 'Biotech', 'BIO', 'biotechnology, genetics, healthcare', 'Biotech focuses on the application of biological organisms and systems for innovations in medicine, agriculture, and other fields, such as genetic engineering and drug development.', 1, '2025-01-19 19:40:00', '2025-01-19 19:40:00', 1, 1),
(23, 'Consulting', 'CONS', 'advisory, management, strategy', 'Consulting involves providing expert advice in areas such as business strategy, management, IT, and operations to help organizations improve performance.', 1, '2025-01-19 19:45:00', '2025-01-19 19:45:00', 1, 1),
(24, 'Legal', 'LAW', 'law, legal services, advocacy', 'The legal industry offers services related to law, including legal advice, representation, and document preparation, catering to both individuals and businesses.', 1, '2025-01-19 19:50:00', '2025-01-19 19:50:00', 1, 1),
(25, 'Non-Profit', 'NPO', 'charity, social work, volunteering', 'Non-profit organizations focus on social, educational, and charitable missions, reinvesting revenue to further their goals rather than distributing profits to shareholders.', 1, '2025-01-19 19:55:00', '2025-01-19 19:55:00', 1, 1),
(26, 'E-Commerce', 'ECOM', 'online shopping, marketplaces, digital sales', 'E-commerce involves buying and selling goods and services online, including managing online marketplaces, payment gateways, and customer engagement strategies.', 1, '2025-01-19 20:00:00', '2025-01-19 20:00:00', 1, 1),
(27, 'Environmental Services', 'ENV', 'sustainability, recycling, green energy', 'Environmental services focus on sustainability, waste management, recycling, and renewable energy solutions to protect and enhance the natural environment.', 1, '2025-01-19 20:05:00', '2025-01-19 20:05:00', 1, 1),
(28, 'Event Management', 'EVENT', 'planning, execution, conferences', 'The event management industry specializes in planning and organizing events such as conferences, exhibitions, weddings, and other large gatherings.', 1, '2025-01-19 20:10:00', '2025-01-19 20:10:00', 1, 1),
(29, 'Travel and Tourism', 'TRVL', 'tours, travel services, destinations', 'The travel and tourism industry includes travel services, hospitality, and destination management, helping people explore and experience different cultures and locations.', 1, '2025-01-19 20:15:00', '2025-01-19 20:15:00', 1, 1),
(30, 'Cybersecurity', 'CYBER', 'security, data protection, IT', 'The cybersecurity industry focuses on protecting networks, systems, and data from digital attacks, ensuring privacy, and maintaining secure IT environments.', 1, '2025-01-19 20:20:00', '2025-01-19 20:20:00', 1, 1),
(31, 'Logistics', 'LOG', 'freight, supply chain, warehousing', 'The logistics industry encompasses transportation, warehousing, and supply chain management, ensuring the efficient movement and storage of goods.', 1, '2025-01-19 20:25:00', '2025-01-19 20:25:00', 1, 1),
(32, 'Defense and Military', 'DEF', 'security, armed forces, defense tech', 'The defense and military industry involves national security, weapons development, and technologies for military applications.', 1, '2025-01-19 20:30:00', '2025-01-19 20:30:00', 1, 1),
(33, 'Chemical', 'CHEM', 'chemicals, materials, production', 'The chemical industry produces raw materials, such as chemicals, plastics, and synthetic fibers, for various manufacturing and consumer applications.', 1, '2025-01-19 20:35:00', '2025-01-19 20:35:00', 1, 1),
(34, 'Gaming', 'GAME', 'video games, esports, development', 'The gaming industry involves the design, development, and publishing of video games, as well as esports and online gaming platforms.', 1, '2025-01-19 20:40:00', '2025-01-19 20:40:00', 1, 1),
(35, 'Art and Design', 'ART', 'creative, design, art', 'The art and design industry includes visual arts, graphic design, interior design, and related creative fields that combine aesthetics with functionality.', 1, '2025-01-19 20:45:00', '2025-01-19 20:45:00', 1, 1),
(36, 'Fitness and Wellness', 'FIT', 'gyms, wellness centers, health programs', 'The fitness and wellness industry offers services and products to promote physical health, mental well-being, and overall fitness.', 1, '2025-01-19 20:50:00', '2025-01-19 20:50:00', 1, 1),
(37, 'Pet Care', 'PET', 'veterinary, grooming, pet products', 'The pet care industry includes veterinary services, grooming, and the production and sale of pet-related products.', 1, '2025-01-19 20:55:00', '2025-01-19 05:28:16 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_work_types`
--

CREATE TABLE `config_work_types` (
  `cwt_id` int(10) NOT NULL,
  `cwt_name` varchar(155) NOT NULL,
  `cwt_shortname` varchar(155) NOT NULL,
  `cwt_desc` varchar(255) NOT NULL,
  `cwt_status` int(1) NOT NULL DEFAULT 1,
  `cwt_created_at` varchar(45) NOT NULL,
  `cwt_updated_at` varchar(45) NOT NULL,
  `cwt_created_by` int(10) NOT NULL,
  `cwt_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_work_types`
--

INSERT INTO `config_work_types` (`cwt_id`, `cwt_name`, `cwt_shortname`, `cwt_desc`, `cwt_status`, `cwt_created_at`, `cwt_updated_at`, `cwt_created_by`, `cwt_updated_by`) VALUES
(1, 'Full-Time', 'FULLTIME', 'Employment with a fixed schedule and regular working hours.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(2, 'Part-Time', 'PARTTIME', 'Employment with fewer hours per week than full-time work.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(3, 'Freelance', 'FREELANCE', 'Project-based work where individuals are self-employed.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(4, 'Contract', 'CONTRACT', 'Temporary work agreements for a specific duration or project.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(5, 'Internship', 'INTERNSHIP', 'Short-term work experience for students or entry-level workers.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(6, 'Consulting', 'CONSULTING', 'Expert advice or services provided to organizations.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(7, 'Remote', 'REMOTE', 'Work done outside the office, often from home or any location.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(8, 'Shift Work', 'SHIFTWORK', 'Work scheduled in shifts, common in hospitality and healthcare.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(9, 'Volunteer', 'VOLUNTEER', 'Unpaid work aimed at helping organizations or communities.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(10, 'Temporary/Seasonal', 'TEMPORARYSEASONAL', 'Short-term work during specific times of the year.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(11, 'Commission-Based', 'COMMISSIONBASED', 'Compensation depends on achieving specific targets.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(12, 'Entrepreneurship', 'ENTREPRENEURSHIP', 'Starting and managing your own business venture.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(13, 'Apprenticeship', 'APPRENTICESHIP', 'On-the-job training combined with classroom learning.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(14, 'Retainer', 'RETAINER', 'Ongoing service contracts paid regularly for specific tasks.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(15, 'On-Call', 'ONCALL', 'Workers available to work as needed, often for emergencies.', 1, '2025-01-19 17:39:09', '2025-01-19 17:39:09', 1, 1),
(16, 'Gig Work', 'GIG_WORK', 'Short-term, task-based jobs often via platforms.', 1, '2025-01-19 17:39:09', '2025-01-19 05:52:43 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_youtube_video_types`
--

CREATE TABLE `config_youtube_video_types` (
  `cyvt_id` int(10) NOT NULL,
  `cyvt_name` varchar(150) NOT NULL,
  `cyvt_shortname` varchar(150) NOT NULL,
  `cyvt_code` varchar(55) NOT NULL,
  `cyvt_purpose` varchar(255) NOT NULL,
  `cyvt_desc` varchar(525) NOT NULL,
  `cyvt_status` int(1) NOT NULL DEFAULT 1,
  `cyvt_created_at` varchar(45) NOT NULL,
  `cyvt_updated_at` varchar(45) NOT NULL,
  `cyvt_created_by` int(10) NOT NULL,
  `cyvt_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_youtube_video_types`
--

INSERT INTO `config_youtube_video_types` (`cyvt_id`, `cyvt_name`, `cyvt_shortname`, `cyvt_code`, `cyvt_purpose`, `cyvt_desc`, `cyvt_status`, `cyvt_created_at`, `cyvt_updated_at`, `cyvt_created_by`, `cyvt_updated_by`) VALUES
(1, 'Vlog', 'vlog', 'VLOG', 'Personal video blogs documenting daily life, travel, or experiences.', 'Vlogs are videos where creators share their daily activities, thoughts, or experiences in a personal and engaging manner.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(2, 'Tutorial', 'tutorial', 'TUT', 'Educational videos providing step-by-step instructions on various topics.', 'Tutorials help users learn new skills, from software training to DIY crafts, by providing clear, instructional content.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(3, 'Review', 'review', 'REV', 'Videos reviewing products, services, or experiences for consumer guidance.', 'Review videos provide insights and evaluations of products, services, or experiences to help viewers make informed decisions.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(4, 'Unboxing', 'unboxing', 'UNBX', 'Videos showcasing the opening and first impressions of a product.', 'Unboxing videos highlight the experience of opening a new product, showing its packaging and initial usage.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(5, 'Gaming', 'gaming', 'GAME', 'Videos related to gameplay, game reviews, or gaming tips.', 'Gaming videos include walkthroughs, game reviews, live streams, and esports-related content.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(6, 'Tech', 'tech', 'TECH', 'Videos covering technology news, product launches, and innovations.', 'Tech videos review gadgets, software, and technological advancements, helping viewers stay updated on new trends.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(7, 'Educational', 'educational', 'EDU', 'Informative videos designed to educate viewers on various subjects.', 'Educational videos cover academic topics, history, science, and self-improvement to provide knowledge and insights.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(8, 'Documentary', 'documentary', 'DOC', 'In-depth storytelling and factual content about real-world topics.', 'Documentaries provide detailed, factual storytelling on real-life subjects, history, or social issues.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(9, 'Podcast', 'podcast', 'POD', 'Long-form conversational videos featuring discussions and interviews.', 'Podcast videos include discussions, interviews, and conversations on various topics, often featuring guest speakers.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(10, 'Live Stream', 'livestream', 'LIVE', 'Real-time video broadcasts where creators interact with audiences.', 'Live streaming allows creators to engage with their audience in real-time, responding to comments and sharing experiences instantly.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(11, 'Music Video', 'music', 'MUS', 'Official or unofficial music-related videos and performances.', 'Music videos showcase official songs, live performances, remixes, and fan-made music content.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(12, 'Comedy', 'comedy', 'COM', 'Humorous videos, skits, parodies, or stand-up performances.', 'Comedy videos entertain audiences with jokes, funny skits, parody content, and stand-up comedy.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(13, 'Shorts', 'shorts', 'SHORT', 'Brief vertical videos optimized for mobile viewing.', 'YouTube Shorts are short, engaging videos designed for quick consumption, often using trends and music.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(14, 'Motivational', 'motivational', 'MOT', 'Videos providing inspiration, life advice, and self-improvement tips.', 'Motivational videos inspire viewers with positive messages, success stories, and personal growth advice.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(15, 'Travel', 'travel', 'TRV', 'Videos showcasing travel destinations, experiences, and guides.', 'Travel videos explore different places, providing insights into culture, food, and adventure.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(16, 'Fitness', 'fitness', 'FIT', 'Videos focused on workouts, exercise routines, and healthy living.', 'Fitness videos guide viewers through workouts, yoga sessions, and diet tips for a healthy lifestyle.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(17, 'Cooking', 'cooking', 'COOK', 'Videos demonstrating recipes and cooking techniques.', 'Cooking videos include step-by-step recipes, meal preparation techniques, and kitchen tips.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(18, 'DIY & Crafts', 'diy', 'DIY', 'Videos teaching creative DIY projects and crafting.', 'DIY videos provide step-by-step guides on making handmade crafts, home decor, and artistic creations.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(19, 'Science & Experiments', 'science', 'SCI', 'Videos explaining scientific concepts and experiments.', 'Science videos showcase interesting experiments, explain theories, and educate on various scientific phenomena.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(20, 'News & Politics', 'news', 'NEWS', 'Videos covering current events, politics, and world affairs.', 'News videos provide insights on current affairs, political discussions, and breaking news events.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(21, 'Luxury & Lifestyle', 'lifestyle', 'LUX', 'Videos showcasing luxury products, experiences, and high-end lifestyles.', 'Luxury videos feature expensive products, high-end travel, and insights into celebrity lifestyles.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(22, 'Automobile', 'automobile', 'AUTO', 'Videos about cars, bikes, reviews, and automobile technology.', 'Automobile videos include car reviews, test drives, auto shows, and modification tips.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(23, 'Spiritual', 'spiritual', 'SPIR', 'Videos related to meditation, mindfulness, and spirituality.', 'Spiritual videos guide viewers through meditation, relaxation, and spiritual teachings.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(24, 'Reaction', 'reaction', 'REACT', 'Videos where creators react to other content such as music, trends, or memes.', 'Reaction videos capture a creator’s response to trending content, music, trailers, or viral clips.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(25, 'Prank', 'prank', 'PRANK', 'Videos featuring pranks, jokes, and social experiments.', 'Prank videos entertain viewers with funny or surprising social interactions.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(26, 'Real Estate', 'real_estate', 'REAL', 'Videos about property tours, home buying tips, and real estate investment.', 'Real estate videos provide insights into property buying, investment opportunities, and interior designs.', 1, '2025-02-04 17:24:52', '2025-02-04 17:24:52', 1, 1),
(27, 'Health &amp; Wellness', '', 'HLTH', 'Videos focusing on physical and mental well-being.', 'Health videos include medical advice, mental wellness tips, and holistic healing practices.', 1, '2025-02-04 17:24:52', '2025-02-06 04:23:30 PM', 1, 1);

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
(1, 'Mr.', 'Gaurav Singh', '9266882565', 'gauravsinghigc@gmail.com', 'VE9pZHM4SjRxWlhncFllV2ZqZW5iZz09', '2019-01-06', '2025-01-19 11:13:02 AM', 1, 'YkVYdnY2YmtTdHBSRVkxbW95bFEyWTl6L2YxNUhpQ1NRK0FFR1BMRnpDN0JnUEdFTzNwb0NJaUptK2V6WDJUTQ==', 'GAURAVSINGHIGC', 'Sales &amp; Marketing', 'FULL STACK DEVELOPER', 'Information Technology', 'Profile_Photo__UID_1__24_Dec_2024_09_12_45_44014131971_.gif', 'Admin', '1999-01-22', 1, 0);

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
(12, '1', 'Zm5xL0xpdUlncVhGNFFieCtVRkxvRm5JNEMwbVI0UnFwK1I2S1IzTDkyVVZwWjRRNm0xd0hBTmNha1MrRGZKVGNZWW1uVHo2YWJVSUpzRWlvV1oxUXc9PQ==', '27-11-2024 23:43', 'ZTJEanRHQ0JZTjExY09OcGRUMERDallWU3Badk5pUk1LQWlocS9KVUFSMmQxMzN2Q2hXQ2Y1eHFEM21UOUhKN2RHSUloZDdwdXpTck5pelRicFJnNE9QejJrb1FlN1Nqajl3MWJoVm0wQTN0OFd6ZGFaQnZ2RGVLcWhHc1BrQWtHYVNKUkRtZ2FPdklLaCtUVTNJVVV6amJUWi9pTVVXWGNLbjB6Z0YrZ2RjNUJQZGg5aVhkSi9DcEJkN3NHeDNNSUpXTThIOWlKdUYxdTdNYVlpYkVvSHpBZnBSUEgyN2ZCQjlBQTRzcGVZc1kyZ2JMZkw4N05CU1dWZkQ5SkFkeFBsUEZndWYxUnc5N08vT3ZFWnc0N1lzMnphOTVFSFB6M3NEYTlmRVcwMzJuQzNvdEUzQWd1Q3hTRkRZSUVFK0FVVjdnc08wNlBodmVsY2hacVF3b2NRc3Izalp1enkvRktXdkhIRUpVdTRISzVPSTNtTXZZVDhoeVhFWmp3cExvL3Jaei9UWGppYTBwcU9SKzV2bmpNWmpXNUY5a1I0QWgxQWRKZkVkUkFhQmdBbVJ5eWlvVmJuY1BFbWZWSWJBK0Myb2RLQlJEZWI3bitsdk1wUDdodDdCYjRuMVVaVFpEbmN1UFpTUWFOMlJBZmZYYjd4Nlh6eHF3ZTcrUHVETGRzak8zOStjdm9wRUlDUXBWZ3B5RmQ4OGpOQ2lRTUNhZFFBWWZ4eHJQZUFBNW5lQWdkMFVvRGpRYit3TW0wR1ZJYmhUQkplVkxiQm0xajREMkRMZzNsRUttU1FudHZjRXZKb0IzY2dHTGpHWk1EZkJvUlNyVzN0V1pkdm9xeDV0cmE1R0JtbXh2eEx2UjZ6cHY1OXI4cmFtaUZpOThUWENOckYrNGJ0ZWZyY04yNnFZa2lPRG5KNlM1VGlUc2tiMXgxVWQvREZmT2U4RFg0VDc2TzVIbjl2ODJtVGtLY0YyY0tLUDk1QXBwNURyL2llUjZKekU0WDBGeXh2c01wUGNQVGcrdmZmSzlLWVpnMGNUVm56dEhMbG9kK2tpdDdnZksxMXVkYUlYcDdzT2xTcXN5OVVmbDl6QlRUU3J3ZWF4emE4S0NSd25vZkVmYnA4WGdON3lUNVA3TWh3ZGx0TWt3NHkrQ1hsdnYvTUxhRHU4eUxZTzVrL2dFVXBaSnJHRm1RYU8rWENEaGNBbkp6SGp2a0hLcnhtR2FsUm4vNlJSTC95Z0NzMThaMGZtM0d0ZHhRcnVQcTFabUZBME01LzBiNHZHaWNkL1pQZWJ3MklNZ3FZN0k2WHhmaWx0STFwWVVPUnJKYlp6UXp2dFB5RTVNT2U1cVRWQ050VzBMeHkvc1J0TndpaVcrMWplK0tnUGc2L0lRa0kyZ2tBTDRIYzVIMEVNU2NxZjhpZGl2YlgvWlRibW83dGI5azlKclJnZE4vd2tMU2h3R0JEMmp6MVZuWGY0MVcvSVhZMmt1a09vSCtoemNudytOYUNyYW5hQWRGb3FqcXZvQTVaL0VJSzJxRWZqTWpzU0l6YzNqSjQwcU1Wb0E3U0I4ZTlJelRNZFc0akZMOUZwSUxXT0RTOVpmSXdsaklvZkt0Zjg4SXBwQzVKbmkyL1cvZlVaWklNSlY3Q1E0SmFKYnQwdnRIT3k0czNTKzZZSnp4RlZlUHJubU5KUnBvV2owU3ZjYlgyaVhMVzEyUDJhVVkxTGFXbkxFdUlkNDdRPT0=', 'Expired'),
(13, '1', 'S2tETk9kTno5NlhEZUZ0WUNrRWU3SHluNjdkaHIvZVVBYk1oZXJGQ3dQazVlaGN5Q0d0akJLYkJxVk1tdGczdmp3UVZDaHIwRDZTdmRmMzd2RzAxNWc9PQ==', '01-01-2025 11:04', 'ZTJEanRHQ0JZTjExY09OcGRUMERDanJmSzl6bmdBSXE5T1NwSzJIdXpVTkF1dmVLTlRnZG40aUs1R0l0VUZGakFwVXJ5dFRYaEVmOHdVbEtxbzFVMHlHTWFDLzBDdDMwamZHc0VCTS9WRkh1aW04TUVZVGlDeGNldlRKaURldWpKQTdaV2dhdUIybVVyWXVlSDlUdG9yeUVubjdXVzhHQUhuU0dPaVcrcVh4T1p3a3hocDdSZ0ZSbjkzOVFyOWNqbEVvVkRxWllGeGxTZ0NDdFdxOXJDakFBK0xoc1g0YjVLZks2TWEwS2c4WldpQVVhYzJyNGxCM0U5eVpFOXJOMUtMUVE1Qit6RTU4TC9iQW5uVUFSZitqaFExcmp6YnBVWE9DcklhdEloSVNET0pDcERRUGdWUTZzMWR1Q2tqbHpONFUxV1p2VS80NnREb2p1cHhJRWw2MTB0YnByZVJXUW1mMXZ3MlFsYkVXVHI1S0VtQVZsQy9MektabHlwTUQ2b0lsVS9MSFlPMmxOSnV5ckhCcUxsYmlXdk1JaHd6Z0lLWUxzMTZXVm5Ta0FYaU1GTlp1YXdBbGFwS3pJakxORDhVc0pTa2F5ZWdWQUZodkRyUmNqaVZ3UllMT2dRRHdUYVlnak5XYWZiNkI5aFlVR2VYK3p2QVFqdnozUjdYdkgwOHh5UGtvd0Z3YzQ4S1dJcUNIdWhBMC9Jd1l5K2EyL05OQW9mSEQxWkJUZWpUM1NaRnJRRVNqYmtJWjQ5cVhmaGtkOUxoS044VzlUTUFKMmIwbEI2ZFEzb2ZjemFIdEY2NTFaazI2WGFCa001dUNmWFdiSzBTZnpRVnpNeEpEOGJOS2NROXgwdmF5RUtYMDltak04K21hU1VDWkQ3WWlWcGpJKzZPWHlpeHhvTDNnN0NlUGk5TjltaWVid1hCZGVDRHNXQmlGT2FFMURpZE9ZOGpMWmFpRHduc2VlbzE1NjFlaTlaMHh6RTJYakY3RDhBUDhKK0xjaWt3M1d0eExtTjRGd1pFbUsrUzFUR2k0d25FREt1dDU3ZkxWZzFnWCs3RjRXSkIyellhY2ZFcHpYaDJ2WlRzaVNCNDRLVHpEOHNhc1hVeTNRZ1VTOWVTUDE3M242NjhSMGpnTU5BZktBbVBicUUzaEMrdUhiZ0gvaHJiaDhBekkrYktIVDlKaVYyZjNtK3FWUTl1cGJseklXM29rNkpsSWpoNFJmQytQRXdCUUFJKzBWMTJWOGVoSTNhbnByWTFWZUxGNG9iRyt0Tmh3U040aldlY3R1RkxDSU5YWThWYkV3YlJ3Tm1uNHF1YVY1SXN2ZEdKbEQ0ejB6bFRlMVR5bmg5N3RuU2gzeFZtblJNbk8yWHphaWt4ZGoydzZYTCtlMVMwWkU2QThRV21qaXYzNFNRVWxoVnFBd1FMSXBWRjVqTm9Kak5NdW0rL1didXVsdW04ekdTSkwzRVZSVXpLMkdpd2hLa1hNbWxCdDNOVHVlWnRqQ1VYb043V1ZrL0g0Z2tYMnc5YnJZeHRTb1c4VE9wY1Bxd1FYVkxkVFVrc0RjSXZiMGZBNE54bnJzMy8zT2NYV1Q3djU0WTBIMlVEYU5neHNRanRTdi9raEpRTHZVME40QmRXa3kyQ09QSFJQZ0FYUUY2MGJBbGhtd2p1SHAxSzZtRDhCekxWRXFvRXc2aXdEQ1MxNUpVRll2SldxUi9GZEg2cGdyMHNTanJBPT0=', 'Expired');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(10) NOT NULL,
  `vendor_name` varchar(70) NOT NULL,
  `vendor_logo` varchar(255) NOT NULL,
  `vendor_type_id` int(3) NOT NULL,
  `vendor_biz_name` varchar(100) NOT NULL,
  `vendor_phone_code` varchar(10) NOT NULL,
  `vendor_phone` varchar(12) NOT NULL,
  `vendor_email` varchar(255) NOT NULL,
  `vendor_created_at` varchar(45) NOT NULL,
  `vendor_created_by` int(10) NOT NULL,
  `vendor_updated_at` varchar(45) NOT NULL,
  `vendor_updated_by` int(10) NOT NULL,
  `vendor_status` int(2) NOT NULL,
  `if_vendor_deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_logo`, `vendor_type_id`, `vendor_biz_name`, `vendor_phone_code`, `vendor_phone`, `vendor_email`, `vendor_created_at`, `vendor_created_by`, `vendor_updated_at`, `vendor_updated_by`, `vendor_status`, `if_vendor_deleted`) VALUES
(1, 'Gaurav Singh', 'GAURAVSINGHIGC__29_Sep_2024_07_09_01_58233716566_.jpg', 13, 'GAURAVSINGHIGC', '+91', '9318310565', 'gauravsinghigc@gmail.com', '2024-09-29 07:12:01 PM', 1, '2024-09-29 07:12:01 PM', 1, 1, 0),
(2, 'RITU MEHRA', 'ifdcbank-logo.jpg', 16, 'IDFC FIRST BANK', '+91', '8506973791', 'ritu.mehra@idfcfirstbank.com', '2024-09-30 07:02:59 PM', 1, '2024-09-30 07:02:59 PM', 1, 1, 0),
(3, 'MANOJ KUMAR', 'DAIKIN_AIR_CONDITIONING__30_Sep_2024_07_09_21_26682116256_.jpeg', 14, 'DAIKIN AIR CONDITIONING', '+91', '8059829980', 'manojkumar@optechaircon.com', '2024-09-30 07:10:21 PM', 1, '2024-09-30 07:10:21 PM', 1, 1, 0),
(4, 'GURMEET SINGH', 'MEET_FURNITURE_MART__30_Sep_2024_07_09_46_14327268604_.png', 21, 'MEET FURNITURE MART', '+91', '9811889266', 'meetfurnituremart@gmail.com', '2024-09-30 07:18:45 PM', 1, '2024-09-30 07:18:45 PM', 1, 1, 0),
(5, 'HARMINDER PAL SINGH GULATI', 'H.S._BATTERY_HUB__30_Sep_2024_07_09_29_65469507098_.png', 22, 'H.S. BATTERY HUB', '+91', '9899065743', 'harminderpal.sgulati@yahoo.co.in', '2024-09-30 07:42:29 PM', 1, '2024-09-30 07:42:29 PM', 1, 1, 0),
(6, 'PIYUSH', 'PIYUSH_LAPTOP_REPAIR__30_Sep_2024_07_09_55_60998765578_.jpeg', 23, 'PIYUSH LAPTOP REPAIR', '+91', '9911243392', 'piyushlaptops@gmail.com', '2024-09-30 07:46:55 PM', 1, '2024-09-30 07:46:55 PM', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_address`
--

CREATE TABLE `vendor_address` (
  `vendor_address_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_address_gst_no` varchar(55) NOT NULL,
  `vendor_address_type` varchar(100) NOT NULL,
  `vendor_address` varchar(300) NOT NULL,
  `vendor_area_locality` varchar(255) NOT NULL,
  `vendor_city` varchar(50) NOT NULL,
  `vendor_state` varchar(50) NOT NULL,
  `vendor_country` varchar(50) NOT NULL,
  `vendor_pincode` int(10) NOT NULL,
  `vendor_address_longitude` varchar(50) NOT NULL,
  `vendor_address_latitude` varchar(50) NOT NULL,
  `vendor_address_created_by` int(10) NOT NULL,
  `vendor_address_updated_by` int(10) NOT NULL,
  `vendor_address_created_at` varchar(45) NOT NULL,
  `vendor_address_updated_at` varchar(45) NOT NULL,
  `vendor_address_status` int(2) NOT NULL,
  `is_vendor_address_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_address`
--

INSERT INTO `vendor_address` (`vendor_address_id`, `vendor_main_id`, `vendor_address_gst_no`, `vendor_address_type`, `vendor_address`, `vendor_area_locality`, `vendor_city`, `vendor_state`, `vendor_country`, `vendor_pincode`, `vendor_address_longitude`, `vendor_address_latitude`, `vendor_address_created_by`, `vendor_address_updated_by`, `vendor_address_created_at`, `vendor_address_updated_at`, `vendor_address_status`, `is_vendor_address_deleted`) VALUES
(1, 1, 'NULL', 'Home', 'Y6-11/SF 2nd floor, Gali No 6, BPTP', 'Sector 76', 'FARIDABAD', 'Haryana', 'India', 121004, '', '', 1, 1, '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, NULL),
(2, 2, '', 'Office', 'First Floor, Plot No. 34 Block H-1-A, Gautam Buddha Nagar,', 'Sector 63', 'NOIDA', 'UTTAR PRADESH', 'INDIA', 201301, '', '', 1, 1, '2024-09-30 07:02:59 PM', '2024-09-30 07:02:59 PM', 1, NULL),
(3, 3, '', 'Office', 'U-06 (UG FLOOR), BPTP - The Next Door U Block', 'Sector 76', 'Faridabad -  121001', 'Haryana', 'India', 121004, '', '', 1, 1, '2024-09-30 07:10:21 PM', '2024-09-30 07:10:21 PM', 1, NULL),
(4, 4, '', 'Shop', '5E /  26, Meet Market', 'NIT', 'FARIDABAD', 'HARYANA', 'INDIA', 121001, '', '', 1, 1, '2024-09-30 07:18:45 PM', '2024-09-30 07:18:45 PM', 1, NULL),
(5, 5, '', 'Shop', '769-A, OLD LAJPAT RAI MARKET, CHANDNI CHOWK, Opp. Moti Cinema Gate.', 'CHANDNI CHOWK', 'DELHI', 'DELHI', 'INDIA', 110000, '', '', 1, 1, '2024-09-30 07:42:29 PM', '2024-09-30 07:42:29 PM', 1, NULL),
(6, 6, '', 'Shop', 'G-7/B, Siddharth Building 96', 'Nehru Place', 'NEW DELHI', 'DELHI', 'INDIA', 110022, '', '', 1, 1, '2024-09-30 07:46:55 PM', '2024-09-30 07:46:55 PM', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `vendor_category_id` int(10) NOT NULL,
  `vendor_category_main_id` int(10) NOT NULL,
  `vendor_category_config_id` int(10) NOT NULL,
  `vendor_category_created_at` varchar(45) NOT NULL,
  `vendor_category_updated_at` varchar(45) NOT NULL,
  `vendor_category_created_by` int(10) NOT NULL,
  `vendor_category_updated_by` int(10) NOT NULL,
  `vendor_category_status` int(2) NOT NULL,
  `if_vendor_category_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_contact_persons`
--

CREATE TABLE `vendor_contact_persons` (
  `vcp_id` int(10) NOT NULL,
  `vcp_main_vendor_id` int(10) NOT NULL,
  `vcp_full_name` varchar(60) NOT NULL,
  `vcp_contact_info_type` int(1) NOT NULL,
  `vcp_contact_info` varchar(255) NOT NULL,
  `vcp_created_by` int(10) NOT NULL,
  `vcp_created_at` varchar(45) NOT NULL,
  `vcp_updated_by` int(10) NOT NULL,
  `vcp_updated_at` varchar(45) NOT NULL,
  `vcp_status` int(2) NOT NULL,
  `is_vcp_deleted` int(2) DEFAULT NULL,
  `vcp_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_contact_persons`
--

INSERT INTO `vendor_contact_persons` (`vcp_id`, `vcp_main_vendor_id`, `vcp_full_name`, `vcp_contact_info_type`, `vcp_contact_info`, `vcp_created_by`, `vcp_created_at`, `vcp_updated_by`, `vcp_updated_at`, `vcp_status`, `is_vcp_deleted`, `vcp_remarks`) VALUES
(1, 1, 'Gaurav Singh', 1, '8447572565', 1, '2024-09-30', 1, '2024-09-30', 1, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_contracts`
--

CREATE TABLE `vendor_contracts` (
  `vendor_contract_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_contract_name` varchar(255) NOT NULL,
  `vendor_contract_type` varchar(100) NOT NULL,
  `vendor_contract_number` varchar(30) NOT NULL,
  `vendor_contract_start_date` varchar(45) NOT NULL,
  `vendor_contract_end_date` varchar(45) NOT NULL,
  `vendor_contract_due_date` varchar(45) NOT NULL,
  `vendor_contract_amount` varchar(10) NOT NULL,
  `vendor_contract_net_order_amount` varchar(10) NOT NULL,
  `vendor_contract_details` mediumtext NOT NULL,
  `vendor_contract_working_tags` varchar(1000) NOT NULL,
  `vendor_contract_created_at` varchar(45) NOT NULL,
  `vendor_contract_updated_at` varchar(45) NOT NULL,
  `vendor_contract_created_by` int(10) NOT NULL,
  `vendor_contract_updated_by` int(10) NOT NULL,
  `vendor_contract_status` int(10) NOT NULL,
  `is_vendor_contract_closed` int(10) DEFAULT NULL,
  `vendor_contract_color_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_contracts_documents`
--

CREATE TABLE `vendor_contracts_documents` (
  `vcd_id` int(10) NOT NULL,
  `vcd_main_contract_id` int(10) NOT NULL,
  `vcd_name` varchar(255) NOT NULL,
  `vcd_url` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_documents`
--

CREATE TABLE `vendor_documents` (
  `vendor_document_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_document_name` varchar(55) NOT NULL,
  `vendor_document_type` varchar(55) NOT NULL,
  `vendor_document_number` varchar(50) NOT NULL,
  `vendor_document_start_date` varchar(45) NOT NULL,
  `vendor_document_end_date` varchar(45) NOT NULL,
  `vendor_document_url` varchar(255) NOT NULL,
  `vendor_document_uploaded_at` varchar(45) NOT NULL,
  `vendor_document_uploaded_by` int(10) NOT NULL,
  `vendor_document_updated_at` varchar(45) NOT NULL,
  `vendor_document_updated_by` int(10) NOT NULL,
  `vendor_document_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoices`
--

CREATE TABLE `vendor_invoices` (
  `vendor_invoice_id` int(10) NOT NULL,
  `vendor_contract_main_id` int(10) NOT NULL,
  `vendor_invoice_number` varchar(50) NOT NULL,
  `vendor_invoice_ref_number` varchar(70) NOT NULL,
  `vendor_invoice_billing_address` varchar(555) NOT NULL,
  `vendor_invoice_shipping_address` varchar(555) NOT NULL,
  `vendor_invoice_due_date` varchar(45) NOT NULL,
  `vendor_invoice_amount` varchar(10) NOT NULL,
  `vendor_invoice_date` varchar(45) NOT NULL,
  `vendor_invoice_status` int(10) NOT NULL,
  `vendor_invoice_created_at` varchar(45) NOT NULL,
  `vendor_invoice_updated_at` varchar(45) NOT NULL,
  `vendor_invoice_created_by` int(10) NOT NULL,
  `vendor_invoice_updated_by` int(10) NOT NULL,
  `vendor_invoice_notes` varchar(1000) NOT NULL,
  `vendor_invoice_expire_date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoices_discount_charges`
--

CREATE TABLE `vendor_invoices_discount_charges` (
  `vidc_id` int(10) NOT NULL,
  `vidc_main_invoice_id` int(10) NOT NULL,
  `vidc_name` varchar(100) NOT NULL,
  `vidc_type` varchar(25) NOT NULL,
  `vidc_apply_in` varchar(25) NOT NULL,
  `vidc_value` varchar(10) NOT NULL,
  `vidc_created_at` varchar(45) NOT NULL,
  `vidc_updated_at` varchar(45) NOT NULL,
  `vidc_created_by` int(10) NOT NULL,
  `vidc_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoices_items`
--

CREATE TABLE `vendor_invoices_items` (
  `vii_id` int(10) NOT NULL,
  `vii_main_invoice_id` int(10) NOT NULL,
  `vii_name` varchar(255) NOT NULL,
  `vii_type` varchar(10) NOT NULL,
  `vii_code` varchar(10) NOT NULL,
  `vii_desc` varchar(500) NOT NULL,
  `vii_mrp_price` varchar(10) NOT NULL,
  `vii_sale_price` varchar(10) NOT NULL,
  `vii_qty` int(10) NOT NULL,
  `vii_tax` varchar(10) NOT NULL,
  `vii_total` varchar(10) NOT NULL,
  `vii_created_at` varchar(45) NOT NULL,
  `vii_updated_at` varchar(45) NOT NULL,
  `vii_created_by` int(10) NOT NULL,
  `vii_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoice_payments`
--

CREATE TABLE `vendor_invoice_payments` (
  `vip_id` int(10) NOT NULL,
  `vip_main_invoice_id` int(10) NOT NULL,
  `vip_transaction_ref_number` varchar(50) NOT NULL,
  `vip_transaction_id` varchar(75) NOT NULL,
  `vip_pay_method` varchar(25) NOT NULL,
  `vip_pay_date` varchar(45) NOT NULL,
  `vip_paid_amount` varchar(10) NOT NULL,
  `vip_transaction_details` varchar(555) NOT NULL,
  `vip_transaction_note` varchar(255) NOT NULL,
  `vip_created_at` varchar(45) NOT NULL,
  `vip_created_by` int(10) NOT NULL,
  `vip_transaction_status` int(10) NOT NULL,
  `vip_updated_at` varchar(10) NOT NULL,
  `vip_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_logs`
--

CREATE TABLE `vendor_logs` (
  `vendor_logs_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_logs_name` varchar(255) NOT NULL,
  `vendor_logs_sql` varchar(1000) NOT NULL,
  `vendor_logs_created_at` varchar(45) NOT NULL,
  `vendor_logs_created_by` int(10) NOT NULL,
  `vendor_logs_device_details` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_orders`
--

CREATE TABLE `vendor_orders` (
  `vendor_order_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_order_reference_number` varchar(25) NOT NULL,
  `vendor_order_date` varchar(45) NOT NULL,
  `vendor_order_amount` int(11) NOT NULL,
  `vendor_order_shipping_address` varchar(555) NOT NULL,
  `vendor_order_billing_address` varchar(555) NOT NULL,
  `vendor_order_status` int(10) NOT NULL,
  `vendor_order_receipt` varchar(255) NOT NULL,
  `vendor_order_created_at` varchar(45) NOT NULL,
  `vendor_order_updated_at` varchar(45) NOT NULL,
  `vendor_order_created_by` int(10) NOT NULL,
  `vendor_order_updated_by` int(10) NOT NULL,
  `vendor_order_remarks` varchar(1000) NOT NULL,
  `vendor_order_items_details` varchar(10000) NOT NULL,
  `vendor_order_estimate_delivery_date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_orders_documents`
--

CREATE TABLE `vendor_orders_documents` (
  `vod_id` int(10) NOT NULL,
  `vod_main_order_id` int(10) NOT NULL,
  `vod_name` varchar(55) NOT NULL,
  `vod_url` varchar(255) NOT NULL,
  `vod_type` varchar(55) NOT NULL,
  `vod_created_at` varchar(45) NOT NULL,
  `vod_updated_at` varchar(45) NOT NULL,
  `vod_created_by` int(10) NOT NULL,
  `vod_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_orders_payments`
--

CREATE TABLE `vendor_orders_payments` (
  `vop_id` int(10) NOT NULL,
  `vop_main_order_id` int(10) NOT NULL,
  `vop_pay_ref_number` varchar(30) NOT NULL,
  `vop_pay_txn_id` varchar(55) NOT NULL,
  `vop_pay_more_details` varchar(725) NOT NULL,
  `vop_pay_mode` varchar(50) NOT NULL,
  `vop_paid_amount` varchar(10) NOT NULL,
  `vop_pay_date` varchar(45) NOT NULL,
  `vop_pay_receipt_url` varchar(255) NOT NULL,
  `vop_created_at` varchar(45) NOT NULL,
  `vop_created_by` int(10) NOT NULL,
  `vop_updated_by` int(10) NOT NULL,
  `vop_updated_at` varchar(45) NOT NULL,
  `vop_pay_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payment_modes`
--

CREATE TABLE `vendor_payment_modes` (
  `vpm_id` int(10) NOT NULL,
  `vpm_main_id` int(10) NOT NULL,
  `vpm_name` varchar(155) NOT NULL,
  `vpm_type` varchar(100) NOT NULL,
  `vpm_bank_name` varchar(100) NOT NULL,
  `vpm_ifsc_code` varchar(30) NOT NULL,
  `vpm_number` varchar(30) NOT NULL,
  `vpm_person_name` varchar(50) NOT NULL,
  `vpm_created_at` varchar(45) NOT NULL,
  `vpm_created_by` int(10) NOT NULL,
  `vpm_updated_at` varchar(45) NOT NULL,
  `vpm_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_products_services`
--

CREATE TABLE `vendor_products_services` (
  `vps_id` int(10) NOT NULL,
  `vps_main_vendor_id` int(10) NOT NULL,
  `vps_main_category_id` int(10) NOT NULL,
  `vps_item_name` varchar(255) NOT NULL,
  `vps_item_type` varchar(75) NOT NULL,
  `vps_item_code` varchar(55) NOT NULL,
  `vps_item_desc` varchar(1000) NOT NULL,
  `vps_item_image` varchar(255) NOT NULL,
  `vps_sale_price` int(10) NOT NULL,
  `vps_mrp_price` int(10) NOT NULL,
  `vps_stock_qty` int(10) NOT NULL,
  `vps_category` varchar(100) NOT NULL,
  `vps_created_at` varchar(45) NOT NULL,
  `vps_updated_at` varchar(45) NOT NULL,
  `vps_last_ordered_date` varchar(45) NOT NULL,
  `vps_created_by` int(10) NOT NULL,
  `vps_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_queries`
--

CREATE TABLE `vendor_queries` (
  `vendor_query_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_query_subject` varchar(255) NOT NULL,
  `vendor_query_type` varchar(75) NOT NULL,
  `vendor_query_priority_level` int(2) NOT NULL,
  `vendor_query_person_name` varchar(75) NOT NULL,
  `vendor_query_person_phone_number` varchar(15) NOT NULL,
  `vendor_query_email_id` varchar(255) NOT NULL,
  `vendor_query_description` varchar(10000) NOT NULL,
  `vendor_query_created_at` varchar(45) NOT NULL,
  `vendor_query_updated_at` varchar(45) NOT NULL,
  `vendor_query_created_by` int(10) NOT NULL,
  `vendor_query_updated_by` int(10) NOT NULL,
  `vendor_query_status` int(10) NOT NULL,
  `vendor_query_assigned_to` int(10) NOT NULL,
  `vendor_query_assigned_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_reviews`
--

CREATE TABLE `vendor_reviews` (
  `vendor_review_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_review_rating` int(10) NOT NULL,
  `vendor_review_comments` varchar(1000) NOT NULL,
  `vendor_review_date` varchar(45) NOT NULL,
  `vendor_review_person_name` varchar(50) NOT NULL,
  `vendor_review_approved_by` int(10) NOT NULL,
  `vendor_review_approved_at` varchar(45) NOT NULL,
  `vendor_review_updated_at` varchar(45) NOT NULL,
  `vendor_review_updated_by` int(10) NOT NULL,
  `vendor_review_tags` varchar(255) NOT NULL,
  `vendor_review_status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tasks`
--

CREATE TABLE `vendor_tasks` (
  `vendor_tasks_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_task_name` varchar(255) NOT NULL,
  `vendor_task_details` varchar(10000) NOT NULL,
  `vendor_task_prority` int(1) NOT NULL,
  `vendor_task_tags` varchar(725) NOT NULL,
  `vendor_task_start_date` varchar(45) NOT NULL,
  `vendor_task_due_date` varchar(45) NOT NULL,
  `vendor_task_complete_date` varchar(45) NOT NULL,
  `vendor_task_create_date` varchar(45) NOT NULL,
  `vendor_task_update_date` varchar(45) NOT NULL,
  `vendor_task_status` int(10) NOT NULL,
  `vendor_task_created_by` int(10) NOT NULL,
  `vendor_task_updated_by` int(10) NOT NULL,
  `vendor_task_admin_remarks` varchar(255) NOT NULL,
  `vendor_task_type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tasks_activities`
--

CREATE TABLE `vendor_tasks_activities` (
  `vca_id` int(10) NOT NULL,
  `vca_main_task_id` int(10) NOT NULL,
  `vca_name` varchar(255) NOT NULL,
  `vca_details` varchar(10000) NOT NULL,
  `vca_created_at` varchar(45) NOT NULL,
  `vca_updated_at` varchar(45) NOT NULL,
  `vca_created_by` int(10) NOT NULL,
  `vca_updated_by` int(10) NOT NULL,
  `vca_status` int(10) NOT NULL,
  `is_vca_completed` int(10) NOT NULL,
  `vca_performed_by` int(10) NOT NULL,
  `vca_performed_at` varchar(45) NOT NULL,
  `vca_assigned_at` varchar(45) NOT NULL,
  `vca_assigned_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tasks_activities_document`
--

CREATE TABLE `vendor_tasks_activities_document` (
  `vcad_id` int(10) NOT NULL,
  `vcad_main_activity_id` int(10) NOT NULL,
  `vcad_document_type` varchar(10) NOT NULL,
  `vcad_document_url` varchar(255) NOT NULL,
  `vcad_added_at` varchar(45) NOT NULL,
  `vcad_added_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tasks_members`
--

CREATE TABLE `vendor_tasks_members` (
  `vendor_task_member_id` int(10) NOT NULL,
  `vendor_task_main_id` int(10) NOT NULL,
  `vendor_task_user_id` int(10) NOT NULL,
  `vendor_task_assigned_date` varchar(45) NOT NULL,
  `vendor_task_assigned_by` int(10) NOT NULL,
  `vendor_task_assign_msg` varchar(255) NOT NULL,
  `vendor_task_assign_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_urls`
--

CREATE TABLE `vendor_urls` (
  `vendor_url_id` int(10) NOT NULL,
  `vendor_url_main_id` int(10) NOT NULL,
  `vendor_url_name` varchar(75) NOT NULL,
  `vendor_url` varchar(1000) NOT NULL,
  `vendor_url_created_at` varchar(45) NOT NULL,
  `vendor_url_updated_at` varchar(45) NOT NULL,
  `vendor_url_created_by` int(10) NOT NULL,
  `vendor_url_updated_by` int(10) NOT NULL,
  `vendor_url_status` int(2) NOT NULL,
  `is_vendor_url_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_urls`
--

INSERT INTO `vendor_urls` (`vendor_url_id`, `vendor_url_main_id`, `vendor_url_name`, `vendor_url`, `vendor_url_created_at`, `vendor_url_updated_at`, `vendor_url_created_by`, `vendor_url_updated_by`, `vendor_url_status`, `is_vendor_url_deleted`) VALUES
(1, 1, 'WEBSITE', 'https://gauravsinghigc.in', '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, 1, 1, NULL),
(2, 1, 'FACEBOOK', 'https://facebook.com/gauravsinghigc', '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, 1, 1, NULL),
(3, 1, 'INSTAGRAM', 'https://instagram.com/gauravsinghigc', '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, 1, 1, NULL),
(4, 1, 'YOUTUBE', 'https://www.youtube.com/@gauravsinghigc', '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, 1, 0, NULL),
(5, 2, 'WEBSITE', 'https://idfcfirstbank.com', '2024-09-30 07:02:59 PM', '2024-09-30 07:02:59 PM', 1, 1, 1, NULL),
(6, 3, 'WEBSITE', 'http://optechaircon.com', '2024-09-30 07:10:21 PM', '2024-09-30 07:10:21 PM', 1, 1, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`configurationsid`);

--
-- Indexes for table `config_accounts_types`
--
ALTER TABLE `config_accounts_types`
  ADD PRIMARY KEY (`ccat_id`);

--
-- Indexes for table `config_assets_categories`
--
ALTER TABLE `config_assets_categories`
  ADD PRIMARY KEY (`ccat_id`);

--
-- Indexes for table `config_audit_types`
--
ALTER TABLE `config_audit_types`
  ADD PRIMARY KEY (`cadt_id`);

--
-- Indexes for table `config_company_types`
--
ALTER TABLE `config_company_types`
  ADD PRIMARY KEY (`cct_id`);

--
-- Indexes for table `config_compliance_types`
--
ALTER TABLE `config_compliance_types`
  ADD PRIMARY KEY (`ccct_id`);

--
-- Indexes for table `config_credentials_categories`
--
ALTER TABLE `config_credentials_categories`
  ADD PRIMARY KEY (`cccc_id`);

--
-- Indexes for table `config_department`
--
ALTER TABLE `config_department`
  ADD PRIMARY KEY (`ccd_id`);

--
-- Indexes for table `config_document_types`
--
ALTER TABLE `config_document_types`
  ADD PRIMARY KEY (`ccdt_id`);

--
-- Indexes for table `config_enquiry_flow`
--
ALTER TABLE `config_enquiry_flow`
  ADD PRIMARY KEY (`cef_id`);

--
-- Indexes for table `config_enquiry_types`
--
ALTER TABLE `config_enquiry_types`
  ADD PRIMARY KEY (`cet_id`);

--
-- Indexes for table `config_events_types`
--
ALTER TABLE `config_events_types`
  ADD PRIMARY KEY (`cent_id`);

--
-- Indexes for table `config_expanses_types`
--
ALTER TABLE `config_expanses_types`
  ADD PRIMARY KEY (`ccet_id`);

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
-- Indexes for table `config_meeting_types`
--
ALTER TABLE `config_meeting_types`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Indexes for table `config_note_remarks_types`
--
ALTER TABLE `config_note_remarks_types`
  ADD PRIMARY KEY (`cnrt_id`);

--
-- Indexes for table `config_pgs`
--
ALTER TABLE `config_pgs`
  ADD PRIMARY KEY (`ConfigPgId`);

--
-- Indexes for table `config_purchase_types`
--
ALTER TABLE `config_purchase_types`
  ADD PRIMARY KEY (`ccpt_id`);

--
-- Indexes for table `config_reminder_types`
--
ALTER TABLE `config_reminder_types`
  ADD PRIMARY KEY (`crt_id`);

--
-- Indexes for table `config_url_types`
--
ALTER TABLE `config_url_types`
  ADD PRIMARY KEY (`cut_id`);

--
-- Indexes for table `config_vendor_categories`
--
ALTER TABLE `config_vendor_categories`
  ADD PRIMARY KEY (`cvc_id`);

--
-- Indexes for table `config_vendor_types`
--
ALTER TABLE `config_vendor_types`
  ADD PRIMARY KEY (`vendor_type_id`);

--
-- Indexes for table `config_work_industries`
--
ALTER TABLE `config_work_industries`
  ADD PRIMARY KEY (`cwi_id`);

--
-- Indexes for table `config_work_types`
--
ALTER TABLE `config_work_types`
  ADD PRIMARY KEY (`cwt_id`);

--
-- Indexes for table `config_youtube_video_types`
--
ALTER TABLE `config_youtube_video_types`
  ADD PRIMARY KEY (`cyvt_id`);

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
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendor_address`
--
ALTER TABLE `vendor_address`
  ADD PRIMARY KEY (`vendor_address_id`);

--
-- Indexes for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  ADD PRIMARY KEY (`vendor_category_id`);

--
-- Indexes for table `vendor_contact_persons`
--
ALTER TABLE `vendor_contact_persons`
  ADD PRIMARY KEY (`vcp_id`);

--
-- Indexes for table `vendor_contracts`
--
ALTER TABLE `vendor_contracts`
  ADD PRIMARY KEY (`vendor_contract_id`);

--
-- Indexes for table `vendor_contracts_documents`
--
ALTER TABLE `vendor_contracts_documents`
  ADD PRIMARY KEY (`vcd_id`);

--
-- Indexes for table `vendor_documents`
--
ALTER TABLE `vendor_documents`
  ADD PRIMARY KEY (`vendor_document_id`);

--
-- Indexes for table `vendor_invoices`
--
ALTER TABLE `vendor_invoices`
  ADD PRIMARY KEY (`vendor_invoice_id`);

--
-- Indexes for table `vendor_invoices_discount_charges`
--
ALTER TABLE `vendor_invoices_discount_charges`
  ADD PRIMARY KEY (`vidc_id`);

--
-- Indexes for table `vendor_invoices_items`
--
ALTER TABLE `vendor_invoices_items`
  ADD PRIMARY KEY (`vii_id`);

--
-- Indexes for table `vendor_invoice_payments`
--
ALTER TABLE `vendor_invoice_payments`
  ADD PRIMARY KEY (`vip_id`);

--
-- Indexes for table `vendor_logs`
--
ALTER TABLE `vendor_logs`
  ADD PRIMARY KEY (`vendor_logs_id`);

--
-- Indexes for table `vendor_orders`
--
ALTER TABLE `vendor_orders`
  ADD PRIMARY KEY (`vendor_order_id`);

--
-- Indexes for table `vendor_orders_documents`
--
ALTER TABLE `vendor_orders_documents`
  ADD PRIMARY KEY (`vod_id`);

--
-- Indexes for table `vendor_orders_payments`
--
ALTER TABLE `vendor_orders_payments`
  ADD PRIMARY KEY (`vop_id`);

--
-- Indexes for table `vendor_payment_modes`
--
ALTER TABLE `vendor_payment_modes`
  ADD PRIMARY KEY (`vpm_id`);

--
-- Indexes for table `vendor_products_services`
--
ALTER TABLE `vendor_products_services`
  ADD PRIMARY KEY (`vps_id`);

--
-- Indexes for table `vendor_queries`
--
ALTER TABLE `vendor_queries`
  ADD PRIMARY KEY (`vendor_query_id`);

--
-- Indexes for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  ADD PRIMARY KEY (`vendor_review_id`);

--
-- Indexes for table `vendor_tasks`
--
ALTER TABLE `vendor_tasks`
  ADD PRIMARY KEY (`vendor_tasks_id`);

--
-- Indexes for table `vendor_tasks_activities`
--
ALTER TABLE `vendor_tasks_activities`
  ADD PRIMARY KEY (`vca_id`);

--
-- Indexes for table `vendor_tasks_activities_document`
--
ALTER TABLE `vendor_tasks_activities_document`
  ADD PRIMARY KEY (`vcad_id`);

--
-- Indexes for table `vendor_tasks_members`
--
ALTER TABLE `vendor_tasks_members`
  ADD PRIMARY KEY (`vendor_task_member_id`);

--
-- Indexes for table `vendor_urls`
--
ALTER TABLE `vendor_urls`
  ADD PRIMARY KEY (`vendor_url_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `configurationsid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `config_accounts_types`
--
ALTER TABLE `config_accounts_types`
  MODIFY `ccat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `config_assets_categories`
--
ALTER TABLE `config_assets_categories`
  MODIFY `ccat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `config_audit_types`
--
ALTER TABLE `config_audit_types`
  MODIFY `cadt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `config_company_types`
--
ALTER TABLE `config_company_types`
  MODIFY `cct_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `config_compliance_types`
--
ALTER TABLE `config_compliance_types`
  MODIFY `ccct_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `config_credentials_categories`
--
ALTER TABLE `config_credentials_categories`
  MODIFY `cccc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `config_department`
--
ALTER TABLE `config_department`
  MODIFY `ccd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `config_document_types`
--
ALTER TABLE `config_document_types`
  MODIFY `ccdt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `config_enquiry_flow`
--
ALTER TABLE `config_enquiry_flow`
  MODIFY `cef_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `config_enquiry_types`
--
ALTER TABLE `config_enquiry_types`
  MODIFY `cet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `config_events_types`
--
ALTER TABLE `config_events_types`
  MODIFY `cent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `config_expanses_types`
--
ALTER TABLE `config_expanses_types`
  MODIFY `ccet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `config_locations`
--
ALTER TABLE `config_locations`
  MODIFY `config_location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `config_mail_sender`
--
ALTER TABLE `config_mail_sender`
  MODIFY `config_mail_sender_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `config_meeting_types`
--
ALTER TABLE `config_meeting_types`
  MODIFY `cmt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `config_note_remarks_types`
--
ALTER TABLE `config_note_remarks_types`
  MODIFY `cnrt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `config_pgs`
--
ALTER TABLE `config_pgs`
  MODIFY `ConfigPgId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `config_purchase_types`
--
ALTER TABLE `config_purchase_types`
  MODIFY `ccpt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `config_reminder_types`
--
ALTER TABLE `config_reminder_types`
  MODIFY `crt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `config_url_types`
--
ALTER TABLE `config_url_types`
  MODIFY `cut_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `config_vendor_categories`
--
ALTER TABLE `config_vendor_categories`
  MODIFY `cvc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `config_vendor_types`
--
ALTER TABLE `config_vendor_types`
  MODIFY `vendor_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `config_work_industries`
--
ALTER TABLE `config_work_industries`
  MODIFY `cwi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `config_work_types`
--
ALTER TABLE `config_work_types`
  MODIFY `cwt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `config_youtube_video_types`
--
ALTER TABLE `config_youtube_video_types`
  MODIFY `cyvt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `systemlogs`
--
ALTER TABLE `systemlogs`
  MODIFY `LogsId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_password_change_requests`
--
ALTER TABLE `user_password_change_requests`
  MODIFY `PasswordChangeReqId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor_address`
--
ALTER TABLE `vendor_address`
  MODIFY `vendor_address_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `vendor_category_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_contact_persons`
--
ALTER TABLE `vendor_contact_persons`
  MODIFY `vcp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_contracts`
--
ALTER TABLE `vendor_contracts`
  MODIFY `vendor_contract_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_contracts_documents`
--
ALTER TABLE `vendor_contracts_documents`
  MODIFY `vcd_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_documents`
--
ALTER TABLE `vendor_documents`
  MODIFY `vendor_document_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_invoices`
--
ALTER TABLE `vendor_invoices`
  MODIFY `vendor_invoice_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_invoices_discount_charges`
--
ALTER TABLE `vendor_invoices_discount_charges`
  MODIFY `vidc_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_invoices_items`
--
ALTER TABLE `vendor_invoices_items`
  MODIFY `vii_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_invoice_payments`
--
ALTER TABLE `vendor_invoice_payments`
  MODIFY `vip_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_logs`
--
ALTER TABLE `vendor_logs`
  MODIFY `vendor_logs_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_orders`
--
ALTER TABLE `vendor_orders`
  MODIFY `vendor_order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_orders_documents`
--
ALTER TABLE `vendor_orders_documents`
  MODIFY `vod_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_orders_payments`
--
ALTER TABLE `vendor_orders_payments`
  MODIFY `vop_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_payment_modes`
--
ALTER TABLE `vendor_payment_modes`
  MODIFY `vpm_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_products_services`
--
ALTER TABLE `vendor_products_services`
  MODIFY `vps_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_queries`
--
ALTER TABLE `vendor_queries`
  MODIFY `vendor_query_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  MODIFY `vendor_review_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tasks`
--
ALTER TABLE `vendor_tasks`
  MODIFY `vendor_tasks_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tasks_activities`
--
ALTER TABLE `vendor_tasks_activities`
  MODIFY `vca_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tasks_activities_document`
--
ALTER TABLE `vendor_tasks_activities_document`
  MODIFY `vcad_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tasks_members`
--
ALTER TABLE `vendor_tasks_members`
  MODIFY `vendor_task_member_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_urls`
--
ALTER TABLE `vendor_urls`
  MODIFY `vendor_url_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
