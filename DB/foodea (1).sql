-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 05:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodea`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_application`
--

CREATE TABLE `merchant_application` (
  `merchant_application_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `merchantinfo_id` int(11) NOT NULL,
  `merchant_document_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_document`
--

CREATE TABLE `merchant_document` (
  `merchant_document_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `menu_photo` varchar(128) NOT NULL,
  `business_permit` varchar(128) NOT NULL,
  `bir_cert` varchar(128) NOT NULL,
  `barangay_permit` varchar(128) NOT NULL,
  `dti_cert` varchar(128) NOT NULL,
  `front_license` varchar(128) NOT NULL,
  `back_license` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchant_document`
--

INSERT INTO `merchant_document` (`merchant_document_id`, `merchant_id`, `menu_photo`, `business_permit`, `bir_cert`, `barangay_permit`, `dti_cert`, `front_license`, `back_license`, `date`) VALUES
(1, 7, 'bike.png', 'Bubble_Tea.png', 'Bubble_Tea.png', 'barangay_permit.png', 'car.png', 'Bubble_Tea.png', 'earn.png', '2022-12-19 18:12:09'),
(2, 8, 'back_id.PNG', 'drug-test.PNG', 'bgmotor.png', 'attract.png', '1x1.png', 'bell.png', 'DTI.png', '2022-12-19 18:54:08'),
(3, 9, 'Bubble_Tea.png', 'eating.png', 'back_id.PNG', 'bgmotor.png', 'back_id.PNG', 'bell.png', 'cashier.png', '2022-12-20 00:10:05'),
(4, 11, 'cr.PNG', 'bell.png', 'bg-circle.png', 'attract.png', 'barangay_permit.png', '1x1.png', 'BIR.png', '2023-01-28 17:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rider_application`
--

INSERT INTO `rider_application` (`rider_application_id`, `rider_id`, `vehicle_id`, `document_id`, `status`, `date`) VALUES
(1, 53, 19, NULL, NULL, '2023-01-31 15:33:53'),
(3, 54, 20, NULL, NULL, '2023-01-31 16:03:59'),
(4, 55, 36, 23, 'pending', '2023-01-31 16:32:03');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application`
--

CREATE TABLE `tbl_application` (
  `applicants_id` int(11) NOT NULL,
  `rider_application_id` int(11) NOT NULL,
  `merchant_application_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `main_category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_document_info`
--

INSERT INTO `tbl_document_info` (`document_id`, `rider_id`, `driver_license`, `official_receipt`, `cert_registration`, `nbi_clearance`, `drug_test`, `rider_photo`, `vehicle_front`, `vehicle_back`, `vehicle_side`, `license_back`, `date`) VALUES
(19, 48, 'customer.png', 'Bubble_Tea.png', 'business_permit.png', 'drug-test.PNG', 'earn.png', 'back_id.PNG', 'adidas.png', 'BIR.png', 'BIR.png', 'back_id.PNG', '2022-12-19 17:19:04'),
(20, 48, 'customer.png', 'Bubble_Tea.png', 'business_permit.png', 'drug-test.PNG', 'earn.png', 'back_id.PNG', 'adidas.png', 'BIR.png', 'BIR.png', 'back_id.PNG', '2022-12-19 17:19:25'),
(21, 49, 'bell.png', 'car.png', 'business_permit.png', 'customer.png', 'BIR.png', '1x1.png', 'back.PNG', 'eating.png', 'back_id.PNG', 'BIR.png', '2022-12-19 21:59:01'),
(22, 50, 'back_id.PNG', 'barangay_permit.png', 'cr.PNG', 'cr.PNG', 'cashier.png', '1x1.png', 'about3.png', 'cashier.png', 'back.PNG', 'back_id.PNG', '2023-01-28 17:44:05'),
(23, 55, 'back_id.PNG', 'barangay_permit.png', 'cr.PNG', 'nbi.png', 'business_permit.png', '1x1.png', 'front.PNG', 'back.PNG', 'side.PNG', 'back_id.PNG', '2023-01-31 16:26:56'),
(24, 55, 'back_id.PNG', 'barangay_permit.png', 'cr.PNG', 'nbi.png', 'business_permit.png', '1x1.png', 'front.PNG', 'back.PNG', 'side.PNG', 'back_id.PNG', '2023-01-31 16:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `inventory_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(128) NOT NULL,
  `stock` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_merchant_account`
--

INSERT INTO `tbl_merchant_account` (`merchant_id`, `salutation`, `firstname`, `middlename`, `lastname`, `suffix`, `email`, `password`, `date`) VALUES
(1, 'Mr.', 's', 's', 's', 's', 'andreinowellong@yahoo.com', 'CK3$X2HE.$mG4m9', '2022-12-19 11:54:35'),
(2, 'Mr.', 'a', 'a', 'a', 'a', 'goodmanwha@gmail.com', '123456', '2022-12-19 11:55:22'),
(3, 'Mr.', 'a', 'a', 'a', 'a', 'agoodmanwha@gmail.com', '123456', '2022-12-19 12:56:16'),
(4, 'Mr.', 's', 's', 's', 's', '1andreinowellong@yahoo.com', 'CK3$X2HE.$mG4m9', '2022-12-19 13:01:20'),
(5, 'Ms.', 's', 's', 's', 's', 'andreinowellong2@yahoo.com', 'CK3$X2HE.$mG4m9', '2022-12-19 13:49:51'),
(6, 'Mr.', 'sd', 'sd', 'sd', 'sd', '4andreinowellong@yahoo.com', 'CK3$X2HE.$mG4m9', '2022-12-19 14:13:09'),
(7, 'Ms.', 'sd', 'sd', 'sd', 'sd', '4andsreinowellong@yahoo.com', '123456', '2022-12-19 14:14:33'),
(8, 'Mr.', 'andrei', 'gutierrez', 'ong', NULL, '2andreinowellong@yahoo.com', '123456', '2022-12-19 18:53:32'),
(9, 'Mr.', 'andrei', 'andrei', 'andrei', 'g', 'sample11@gmail.com', '123456', '2022-12-20 00:09:27'),
(10, 'Mr.', 'ds', 'ds', 'ds', 'g', 'sample@gmail.com', '123456', '2023-01-19 06:35:50'),
(11, 'Mr.', 'sample', 'sample', 'sample', 'sample', 'sample2023@gmail.com', '123456', '2023-01-28 17:03:32');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_merchant_info`
--

INSERT INTO `tbl_merchant_info` (`merchantinfo_id`, `merchant_id`, `business_type`, `business_name`, `country`, `address`, `city`, `barangay`, `street`, `postal_code`, `store_number`, `store_email`, `date`) VALUES
(1, 7, 'Sole proprietorship', 's', 'Philippines', 's', 's', 's', 's', '123', '123', 'sad2@gmail.com', '2022-12-19 14:14:52'),
(2, 7, 'Sole proprietorship', 's', 'Philippines', 's', 's', 's', 's', '123', '123', 'sad2@gmail.com', '2022-12-19 14:15:39'),
(3, 8, 'Sole proprietorship', 's', 'Philippines', 's', 's', 's', 's', '1', '123', 'sad2@gmail.com', '2022-12-19 18:53:48'),
(4, 9, 'Sole proprietorship', 'andrei', 'Philippines', 'andrei', 'andrei', 'andrei', 'andrei', '1', '123', 'andrei@gmail.com', '2022-12-20 00:09:43'),
(5, 10, 'Sole proprietorship', 's', 'Philippines', 'sd', 'sd', 'sda', 'sda', '123', '123', 'sad@gmail.com', '2023-01-19 06:36:18'),
(6, 11, 'Sole proprietorship', 'sample', 'Philippines', 'sample', 'sample', '123', 'sample', '123', '123', 'sad@gmail.com', '2023-01-28 17:05:56');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `product_image` varchar(128) NOT NULL,
  `stock` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `merchant_id`, `category_id`, `product_name`, `price`, `product_image`, `stock`, `status`, `description`, `date`) VALUES
(2, 111, 222, 's', '12.00', 'image', 1, 'Active', 's', '2020-02-17 16:00:00'),
(3, 111, 222, 's', '10.00', 'Capture.PNG', 1, 'Active', 'sadsdas', '2023-01-19 23:19:56');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rider_account`
--

INSERT INTO `tbl_rider_account` (`rider_id`, `password`, `firstname`, `middlename`, `lastname`, `suffix`, `age`, `gender`, `email`, `mobile_number`, `address`, `city`, `barangay`, `zip_code`, `date`) VALUES
(44, NULL, 'andrei', 'nowell', 'ong', 'g', 12, 'MALE', 'andreinowellong@yahoo.com', 123, 's', 's', 's', 123, '2022-12-18 16:08:28'),
(45, NULL, 'aaron', 'ong', 'g', 'g', 1, 'MALE', 'andreinowellong@gmail.com', 13, 'sd', 'sd', 'ds', 123, '2022-12-18 16:11:15'),
(46, NULL, 'ss', 's', 's', 's', 2, 'MALE', 'sample11@gmail.com', 123, 's', 's', 's', 123, '2022-12-18 16:37:30'),
(47, NULL, 'rodrigo', 'rodrigo', 'rodrigo', 'rodrigo', 1, 'MALE', 'rodrigo@gmail.com', 123, 'rodrigo', 'rodrigo', 'rodrigo', 123, '2022-12-18 16:40:23'),
(48, NULL, 'hello', 'hello', 'hello', 'hello', 2, 'MALE', 'hello@gmail.com', 123, 'hello', 'hello', 'hello', 123, '2022-12-19 09:05:54'),
(49, '$2y$10$gUYgTX94x0rVTn2qFIexe.bv4KbDanPuNGlJzD6kqmYqVELsXa6Y2', 'a', 'a', 'a', 'a', 2, 'MALE', 'goodmanwhaa@gmail.com', 123, 'a', 'a', 'a', 1, '2022-12-19 21:58:10'),
(50, '$2y$10$bBXpTOgQ1S6G5Q4sj09i6Oze3IjuP0f1zXSRm8huuF0WUkLXECxt2', 'sample', 'sample', 'sample', 'sample', 1, 'MALE', 'sample22@gmail.com', 123, 'sample', 'sample', 'sample', 123, '2023-01-28 17:43:28'),
(51, '$2y$10$23jZlCFMyjRpQxEYPl5t4.XpzWU6tp5oa/f6d5PGvsWqYNLWCpY/6', 'sample', 'sample', 'sample', 'sample', 2, 'MALE', 'sample2023@gmail.com', 123, 'sample', 'sample', 'sample', 1, '2023-01-31 15:15:56'),
(52, '$2y$10$aa73iPQo0Knn.V7MEGjrkuGuWnB5D78pvsgY2ax1J78pIiBDHFK.e', 'sample', 'sample', 'sample', 'sample', 2, 'MALE', 'sample2024@gmail.com', 123, 'sample', 'sample', 'sample', 1, '2023-01-31 15:16:45'),
(53, '$2y$10$TDcUQNWc2yjfjgnnQBxOOuKcZz0WKBzkT2j9MHshghTPdaRe77R52', 'sample', 'sample', 'sample', NULL, 2, 'MALE', 'sample2025@gmail.com', 123, 'sample', 'sample', 'sample', 1, '2023-01-31 15:18:02'),
(54, '$2y$10$zvY2UYKxDemSGwCEYJmVwuWgjHDwQec8D/nUHUHTmYqrPiOZSFAS.', 'sample', 'sample', 'sample', 'sample', 23, 'MALE', 's@gmail.com', 123, 'sample', 'sample', 'sample', 123, '2023-01-31 15:34:49'),
(55, '$2y$10$JO1G13Y99kFODNKl/.KJquvh5CwB5IOZxq.cy2nWos9rROI4bHsnC', 'sample', 'sample', 'sample', 'sample', 23, 'MALE', 'goodmanwha1@gmail.com', 123, 'sample', 'sample', 'sample', 123, '2023-01-31 16:05:44');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vehicle_info`
--

INSERT INTO `tbl_vehicle_info` (`vehicle_id`, `rider_id`, `vehicle_type`, `plate_number`, `displacement`, `engine_number`, `year_model`, `date`) VALUES
(6, 44, 'Motorcycle', '123', 123, 123, 123, '2022-12-18 16:08:33'),
(7, 45, 'Motorcycle', '12', 21, 12, 12, '2022-12-18 16:11:21'),
(8, 46, 'Motorcycle', '12', 123, 123, 123, '2022-12-18 16:37:38'),
(9, 46, 'Motorcycle', '123', 1, 1, 1, '2022-12-18 16:38:58'),
(10, 47, 'Motorcycle', '123', 123, 123, 123, '2022-12-18 16:40:30'),
(11, 48, 'Motorcycle', '123', 123, 123, 123, '2022-12-19 09:06:03'),
(12, 49, 'Motorcycle', '123', 123, 123, 123, '2022-12-19 21:58:26'),
(13, 50, 'Motorcycle', '123', 123, 123, 123, '2023-01-28 17:43:36'),
(14, 53, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 15:21:19'),
(15, 53, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 15:22:04'),
(16, 53, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 15:22:23'),
(17, 53, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 15:32:03'),
(18, 53, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 15:33:16'),
(19, 53, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 15:33:53'),
(20, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:35:12'),
(21, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:35:12'),
(22, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:48:33'),
(23, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:50:34'),
(24, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:51:36'),
(25, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:52:06'),
(26, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:52:48'),
(27, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:52:58'),
(28, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:53:05'),
(29, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:53:49'),
(30, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 15:56:36'),
(31, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 16:03:07'),
(32, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 16:03:12'),
(33, 54, 'Bicycle', '123', 123, 123, 123, '2023-01-31 16:03:18'),
(34, 54, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 16:03:51'),
(35, 54, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 16:03:58'),
(36, 55, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 16:05:56'),
(37, 55, 'Motorcycle', '123', 123, 123, 123, '2023-01-31 16:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucher`
--

CREATE TABLE `tbl_voucher` (
  `voucher_id` int(11) NOT NULL,
  `voucher_type` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expired` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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
  MODIFY `merchant_application_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_document`
--
ALTER TABLE `merchant_document`
  MODIFY `merchant_document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `rider_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_merchant_account`
--
ALTER TABLE `tbl_merchant_account`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_merchant_info`
--
ALTER TABLE `tbl_merchant_info`
  MODIFY `merchantinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rider_account`
--
ALTER TABLE `tbl_rider_account`
  MODIFY `rider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vehicle_info`
--
ALTER TABLE `tbl_vehicle_info`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
