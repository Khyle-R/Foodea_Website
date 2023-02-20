-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 04:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodea_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_id`, `email`, `password`, `date`) VALUES
(1, 'foodea@gmail.com', 'foodea2023', '2023-01-27 16:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_application`
--

CREATE TABLE `merchant_application` (
  `merchant_application_id` int(11) NOT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `merchantinfo_id` int(11) DEFAULT NULL,
  `merchant_document_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchant_application`
--

INSERT INTO `merchant_application` (`merchant_application_id`, `merchant_id`, `merchantinfo_id`, `merchant_document_id`, `status`, `date`) VALUES
(2, 13, 8, 24, 'Accepted', '2023-02-15 01:47:36'),
(3, 14, 9, 28, 'Accepted', '2023-02-15 01:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_document`
--

CREATE TABLE `merchant_document` (
  `merchant_document_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `menu_photo` varchar(128) NOT NULL,
  `business_permit` varchar(128) NOT NULL,
  `bir_cert` varchar(128) NOT NULL,
  `barangay_permit` varchar(128) NOT NULL,
  `dti_cert` varchar(128) NOT NULL,
  `front_license` varchar(128) NOT NULL,
  `back_license` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchant_document`
--

INSERT INTO `merchant_document` (`merchant_document_id`, `merchant_id`, `logo`, `menu_photo`, `business_permit`, `bir_cert`, `barangay_permit`, `dti_cert`, `front_license`, `back_license`, `date`) VALUES
(27, 13, 'bell.png', 'menu_sample.png', 'barangay_permit.png', 'business_permit.png', 'BIR.png', 'cr.PNG', 'front_id.PNG', 'back_id.PNG', '2023-02-14 18:02:17'),
(28, 14, 'adidas.png', 'menu_sample.png', 'business_permit.png', 'BIR.png', 'barangay_permit.png', 'DTI.png', 'front_id.PNG', 'back_id.PNG', '2023-02-15 01:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rider_application`
--

CREATE TABLE `rider_application` (
  `rider_application_id` int(11) NOT NULL,
  `rider_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `document_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rider_application`
--

INSERT INTO `rider_application` (`rider_application_id`, `rider_id`, `vehicle_id`, `document_id`, `status`, `date`) VALUES
(9, 59, 41, 28, 'Accepted', '2023-02-14 16:47:50'),
(10, 60, 42, 29, 'Accepted', '2023-02-14 16:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accepted_merchant`
--

CREATE TABLE `tbl_accepted_merchant` (
  `accepted_merchant_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `ratings` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accepted_merchant`
--

INSERT INTO `tbl_accepted_merchant` (`accepted_merchant_id`, `merchant_id`, `ratings`, `date`) VALUES
(1, 12, 100, '2023-02-14 18:24:25'),
(2, 13, 100, '2023-02-14 18:48:55'),
(4, 14, 100, '2023-02-15 01:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accepted_rider`
--

CREATE TABLE `tbl_accepted_rider` (
  `accepted_rider_id` int(11) NOT NULL,
  `rider_id` int(11) NOT NULL,
  `credit_score` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accepted_rider`
--

INSERT INTO `tbl_accepted_rider` (`accepted_rider_id`, `rider_id`, `credit_score`, `date`) VALUES
(7, 58, 100, '2023-02-10 13:42:52'),
(8, 58, 100, '2023-02-10 13:59:01'),
(9, 60, 100, '2023-02-14 16:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activitylog`
--

CREATE TABLE `tbl_activitylog` (
  `activity_id` int(11) NOT NULL,
  `activity description` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `logout` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application`
--

CREATE TABLE `tbl_application` (
  `applicants_id` int(11) NOT NULL,
  `rider_application_id` int(11) NOT NULL,
  `merchant_application_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `main_category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document_info`
--

CREATE TABLE `tbl_document_info` (
  `document_id` int(11) NOT NULL,
  `rider_id` int(11) NOT NULL,
  `driver_license` varchar(128) NOT NULL,
  `official_receipt` varchar(128) NOT NULL,
  `cert_registration` varchar(128) NOT NULL,
  `nbi_clearance` varchar(128) NOT NULL,
  `drug_test` varchar(128) NOT NULL,
  `rider_photo` varchar(128) NOT NULL,
  `vehicle_front` varchar(128) NOT NULL,
  `vehicle_back` varchar(128) NOT NULL,
  `vehicle_side` varchar(128) NOT NULL,
  `license_back` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_document_info`
--

INSERT INTO `tbl_document_info` (`document_id`, `rider_id`, `driver_license`, `official_receipt`, `cert_registration`, `nbi_clearance`, `drug_test`, `rider_photo`, `vehicle_front`, `vehicle_back`, `vehicle_side`, `license_back`, `date`) VALUES
(25, 56, 'back_id.PNG', 'business_permit.png', 'cr.PNG', 'nbi.png', 'business_permit.png', '1x1.png', 'side.PNG', 'side.PNG', 'side.PNG', 'back_id.PNG', '2023-02-03 07:18:22'),
(26, 57, 'back_id.PNG', 'cr.PNG', 'cr.PNG', 'cr.PNG', 'cr.PNG', 'about3.png', 'back.PNG', 'back.PNG', 'back.PNG', 'back_id.PNG', '2023-02-03 15:50:27'),
(27, 58, 'back_id.PNG', 'back_id.PNG', 'back_id.PNG', 'back_id.PNG', 'back_id.PNG', '1x1.png', 'back.PNG', 'back.PNG', 'front.PNG', 'back_id.PNG', '2023-02-09 06:52:56'),
(28, 59, 'back_id.PNG', 'business_permit.png', 'cr.PNG', 'cr.PNG', 'cr.PNG', '1x1.png', 'back.PNG', 'back.PNG', 'back.PNG', 'business_permit.png', '2023-02-10 15:30:13'),
(29, 60, 'back_id.PNG', 'cr.PNG', 'cr.PNG', 'cr.PNG', 'cr.PNG', '375851_359667544127511_1532145665_n.jpg', 'back.PNG', 'back.PNG', 'back.PNG', 'back_id.PNG', '2023-02-14 10:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `inventory_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `product_image` varchar(128) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tags` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `ingredients` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merchant_account`
--

CREATE TABLE `tbl_merchant_account` (
  `merchant_id` int(11) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_merchant_account`
--

INSERT INTO `tbl_merchant_account` (`merchant_id`, `salutation`, `firstname`, `middlename`, `lastname`, `suffix`, `email`, `password`, `date`) VALUES
(12, 'Mr.', 'Roger', 'Acosta', 'Sangol', NULL, 'rogermooresangol@gmail.com', 'password', '2023-02-18 18:49:48'),
(13, 'Mr.', 'juan', 'jose', 'dela cruz', 'jr', 'sample10@gmail.com', '123456', '2023-02-14 17:50:15'),
(14, 'Mr.', 'Andrei', 'Gutierrez', 'Ong', 'Jr', 'andreinowellong@yahoo.com', '123456', '2023-02-15 01:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merchant_info`
--

CREATE TABLE `tbl_merchant_info` (
  `merchantinfo_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `business_type` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `store_number` varchar(50) NOT NULL,
  `store_email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_merchant_info`
--

INSERT INTO `tbl_merchant_info` (`merchantinfo_id`, `merchant_id`, `business_type`, `business_name`, `country`, `address`, `city`, `barangay`, `street`, `postal_code`, `store_number`, `store_email`, `date`) VALUES
(8, 13, 'Sole proprietorship', 'juan bakery', 'Philippines', 'sample', 'sample', 'sample', 'sample', '123', '123', 'sad2@gmail.com', '2023-02-14 17:50:38'),
(9, 14, 'Corporation', 'foodea', 'Philippines', 'foodea', 'foodea', 'foodea', 'foodea', '123', '099999999', 'foodea@gmail.com', '2023-02-15 01:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` double(20,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `product_image` varchar(128) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tags` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `ingredients` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `merchant_id`, `product_name`, `stock`, `product_image`, `price`, `category_name`, `status`, `tags`, `description`, `ingredients`, `date`) VALUES
(1, 1, 'aaaa', 1, '4.jpg', '1.00', 'Chicken', 'Active', '[\"aaa\"]', 'aa', 'aa', '2023-02-19 02:52:55'),
(2, 1, 'aaa', 1, '5 (2).jpg', '1.00', 'Chicken', 'Disabled', '[\"sdfasdfasdf\"]', 'aaaa', 'aaa', '2023-02-19 03:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rider_account`
--

CREATE TABLE `tbl_rider_account` (
  `rider_id` int(11) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rider_account`
--

INSERT INTO `tbl_rider_account` (`rider_id`, `password`, `firstname`, `middlename`, `lastname`, `suffix`, `age`, `gender`, `email`, `mobile_number`, `address`, `city`, `barangay`, `zip_code`, `date`) VALUES
(56, '$2y$10$4SsBPiLnzIVQafFXNwLRFOt4UMR16UkqtOqTFMKzrx3c4HT3W2Eq6', 'Andrei', 'Gutierrez', 'Ong', 'G', 23, 'MALE', 'andreinowellong@yahoo.com', 123, 'Caloocan City', 'Caloocan', '167', 123, '2023-02-03 07:17:17'),
(57, '$2y$10$emv0wQW9Yj8ZarhADw304eWjZvqmvXVvKaQwY6vx8wdI5Y0IshTO2', 'Sample', 'Sample', 'Sample', 'Sample', 12, 'MALE', 'goodmanwha@gmail.com', 123, 'Sample', 'Sample', 'Sample', 123, '2023-02-03 15:47:24'),
(58, '$2y$10$NgC8z.Y3YB40lvJ6VIpESuQAJowxSEzqMbCldk9KF2aWH2X/j1j9C', 'Andrei', 'Gutierrez', 'Ong', 'Jr', 23, 'MALE', 'sample10@gmail.com', 123, 'sample', 'sd', 'sample', 1, '2023-02-09 06:51:35'),
(59, '$2y$10$0n1Aok/.GNW2kIcWDgQVx.131VApp0txLtUmL/K2so4Fj5iJPd5UC', 'sample', 'sample', 'sample', 'g', 12, 'FEMALE', 'goodmanwha@gmail.com1', 123, 'sample', 'sample', 'sample', 123, '2023-02-10 15:29:19'),
(60, '$2y$10$S58xnK2X3fzh9y1VHfkRdeTX.fjjSscEjc5joZF1/C1nGx7aCnRSK', 'andrei', 'sample', 'sample', 'jr', 12, 'MALE', 'sample2@gmail.com', 123, 'sample', 'sample', 'sample', 123, '2023-02-14 10:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_superadmin_log`
--

CREATE TABLE `tbl_superadmin_log` (
  `log_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_superadmin_log`
--

INSERT INTO `tbl_superadmin_log` (`log_id`, `email`, `name`, `description`, `date`) VALUES
(1, NULL, NULL, 'Has Log In', '2023-02-14 17:30:45'),
(2, NULL, NULL, 'Has Log Out', '2023-02-14 17:36:26'),
(3, NULL, NULL, 'Has Log In', '2023-02-14 17:36:32'),
(4, NULL, NULL, 'Has Log Out', '2023-02-14 19:10:54'),
(5, NULL, NULL, 'Has Log In', '2023-02-14 19:10:59'),
(6, NULL, NULL, 'Has Log Out', '2023-02-14 19:11:08'),
(7, NULL, NULL, 'Has Log In', '2023-02-15 01:39:37'),
(8, NULL, NULL, 'Has Log Out', '2023-02-15 01:48:32'),
(9, NULL, NULL, 'Has Log In', '2023-02-15 01:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `transaction_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rider_id` int(11) NOT NULL,
  `product_Id` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle_info`
--

CREATE TABLE `tbl_vehicle_info` (
  `vehicle_id` int(11) NOT NULL,
  `rider_id` int(11) NOT NULL,
  `vehicle_type` varchar(50) NOT NULL,
  `plate_number` varchar(50) NOT NULL,
  `displacement` int(50) NOT NULL,
  `engine_number` int(11) NOT NULL,
  `year_model` int(11) NOT NULL,
  `datee` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vehicle_info`
--

INSERT INTO `tbl_vehicle_info` (`vehicle_id`, `rider_id`, `vehicle_type`, `plate_number`, `displacement`, `engine_number`, `year_model`, `datee`) VALUES
(38, 56, 'Motorcycle', '123', 123, 123, 123, '2023-02-03 07:17:24'),
(39, 57, 'Motorcycle', '123', 123, 123, 123, '2023-02-03 15:47:31'),
(40, 58, 'Motorcycle', '123', 12, 123, 123, '2023-02-09 06:51:52'),
(41, 59, 'Motorcycle', '123', 123, 123, 123, '2023-02-10 15:29:26'),
(42, 60, 'Motorcycle', '123', 123, 123, 123, '2023-02-14 10:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucher`
--

CREATE TABLE `tbl_voucher` (
  `voucher_id` int(11) NOT NULL,
  `voucher_type` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expired` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `merchant_application`
--
ALTER TABLE `merchant_application`
  ADD PRIMARY KEY (`merchant_application_id`);

--
-- Indexes for table `merchant_document`
--
ALTER TABLE `merchant_document`
  ADD PRIMARY KEY (`merchant_document_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rider_application`
--
ALTER TABLE `rider_application`
  ADD PRIMARY KEY (`rider_application_id`);

--
-- Indexes for table `tbl_accepted_merchant`
--
ALTER TABLE `tbl_accepted_merchant`
  ADD PRIMARY KEY (`accepted_merchant_id`);

--
-- Indexes for table `tbl_accepted_rider`
--
ALTER TABLE `tbl_accepted_rider`
  ADD PRIMARY KEY (`accepted_rider_id`);

--
-- Indexes for table `tbl_activitylog`
--
ALTER TABLE `tbl_activitylog`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `tbl_application`
--
ALTER TABLE `tbl_application`
  ADD PRIMARY KEY (`applicants_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_document_info`
--
ALTER TABLE `tbl_document_info`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `tbl_merchant_account`
--
ALTER TABLE `tbl_merchant_account`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `tbl_merchant_info`
--
ALTER TABLE `tbl_merchant_info`
  ADD PRIMARY KEY (`merchantinfo_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_rider_account`
--
ALTER TABLE `tbl_rider_account`
  ADD PRIMARY KEY (`rider_id`);

--
-- Indexes for table `tbl_superadmin_log`
--
ALTER TABLE `tbl_superadmin_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `tbl_vehicle_info`
--
ALTER TABLE `tbl_vehicle_info`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `rider_id` (`rider_id`),
  ADD KEY `rider_id_2` (`rider_id`),
  ADD KEY `rider_id_3` (`rider_id`);

--
-- Indexes for table `tbl_voucher`
--
ALTER TABLE `tbl_voucher`
  ADD PRIMARY KEY (`voucher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_application`
--
ALTER TABLE `merchant_application`
  MODIFY `merchant_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `merchant_document`
--
ALTER TABLE `merchant_document`
  MODIFY `merchant_document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rider_application`
--
ALTER TABLE `rider_application`
  MODIFY `rider_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_accepted_merchant`
--
ALTER TABLE `tbl_accepted_merchant`
  MODIFY `accepted_merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_accepted_rider`
--
ALTER TABLE `tbl_accepted_rider`
  MODIFY `accepted_rider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_activitylog`
--
ALTER TABLE `tbl_activitylog`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_application`
--
ALTER TABLE `tbl_application`
  MODIFY `applicants_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_document_info`
--
ALTER TABLE `tbl_document_info`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_merchant_account`
--
ALTER TABLE `tbl_merchant_account`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_merchant_info`
--
ALTER TABLE `tbl_merchant_info`
  MODIFY `merchantinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rider_account`
--
ALTER TABLE `tbl_rider_account`
  MODIFY `rider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_superadmin_log`
--
ALTER TABLE `tbl_superadmin_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vehicle_info`
--
ALTER TABLE `tbl_vehicle_info`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_voucher`
--
ALTER TABLE `tbl_voucher`
  MODIFY `voucher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
