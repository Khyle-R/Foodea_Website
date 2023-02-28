-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 02:43 PM
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
  `password` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_id`, `email`, `password`, `date`) VALUES
(1, 'foodea@gmail.com', '$2y$10$rGH.m494OuC0dZBT04FWAeju7SRMC2eHaAHdgYuf9fVGnfuz4S2La', '2023-02-21 16:48:53');

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
  `merchant_id` int(11) DEFAULT NULL,
  `merchantinfo_id` int(11) DEFAULT NULL,
  `merchant_document_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchant_application`
--

INSERT INTO `merchant_application` (`merchant_application_id`, `merchant_id`, `merchantinfo_id`, `merchant_document_id`, `status`, `date`) VALUES
(8, 19, 15, 33, 'Accepted', '2023-02-27 15:41:21'),
(9, 20, 16, 36, 'Accepted', '2023-02-26 18:25:09');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchant_document`
--

INSERT INTO `merchant_document` (`merchant_document_id`, `merchant_id`, `logo`, `menu_photo`, `business_permit`, `bir_cert`, `barangay_permit`, `dti_cert`, `front_license`, `back_license`, `date`) VALUES
(35, 19, '5612_bell.png', '7302_menu_sample.png', '1936_JBG-Solutions-Brochure_v4.pdf', '8795_JBG-Solutions-Brochure_v4.pdf', '4798_JBG-Solutions-Brochure_v4.pdf', '8336_JBG-Solutions-Brochure_v4.pdf', '1470_front_id.PNG', '2986_back_id.PNG', '2023-02-26 16:57:00'),
(36, 20, '7523_bell.png', '6616_menu_sample.png', '3059_JBG-Solutions-Brochure_v4.pdf', '9565_JBG-Solutions-Brochure_v4.pdf', '1932_JBG-Solutions-Brochure_v4.pdf', '7374_JBG-Solutions-Brochure_v4.pdf', '9442_front_id.PNG', '7508_back_id.PNG', '2023-02-26 17:12:28');

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
(15, 64, 70, 43, 'Rejected', '2023-02-23 07:49:54'),
(16, 65, 71, NULL, 'second', '2023-02-23 07:17:46'),
(17, 66, 73, 44, 'Pending', '2023-02-23 17:16:40'),
(18, 67, 74, 45, 'Pending', '2023-02-23 17:18:17'),
(19, 68, 75, 66, 'Rejected', '2023-02-24 18:29:32'),
(20, 69, 76, 78, 'Accepted', '2023-02-25 17:13:27'),
(21, 70, 79, 80, 'Accepted', '2023-02-26 15:29:30'),
(22, 71, NULL, NULL, 'first', '2023-02-26 14:07:52'),
(23, 72, 80, 85, 'Accepted', '2023-02-26 16:29:12'),
(24, 73, 81, 87, 'Rejected', '2023-02-27 09:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accepted_merchant`
--

CREATE TABLE `tbl_accepted_merchant` (
  `accepted_merchant_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `ratings` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_accepted_merchant`
--

INSERT INTO `tbl_accepted_merchant` (`accepted_merchant_id`, `merchant_id`, `ratings`, `date`) VALUES
(21, 18, 100, '2023-02-26 07:48:21'),
(29, 20, 100, '2023-02-26 18:25:09'),
(30, 19, 100, '2023-02-27 15:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accepted_rider`
--

CREATE TABLE `tbl_accepted_rider` (
  `accepted_rider_id` int(11) NOT NULL,
  `rider_id` int(11) NOT NULL,
  `credit_score` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_accepted_rider`
--

INSERT INTO `tbl_accepted_rider` (`accepted_rider_id`, `rider_id`, `credit_score`, `date`) VALUES
(25, 64, 100, '2023-02-22 17:17:44'),
(26, 64, 100, '2023-02-23 07:19:51'),
(27, 64, 100, '2023-02-23 07:49:30'),
(35, 69, 100, '2023-02-25 17:13:27'),
(39, 70, 100, '2023-02-26 15:29:30'),
(43, 72, 100, '2023-02-26 16:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activitylog`
--

CREATE TABLE `tbl_activitylog` (
  `log_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_activitylog`
--

INSERT INTO `tbl_activitylog` (`log_id`, `merchant_id`, `email`, `name`, `description`, `date`) VALUES
(1, 20, 'sample13@gmail.com', 'sample sample', 'Has Log In', '2023-02-27 15:37:25'),
(2, 20, 'sample13@gmail.com', 'sample sample', 'Has Log Out', '2023-02-27 15:41:08'),
(3, 19, 'sample10@gmail.com', 'sample sample', 'Has Log In', '2023-02-27 15:41:32'),
(4, 19, 'sample10@gmail.com', 'sample sample', 'Has Log Out', '2023-02-27 15:50:25'),
(5, 20, 'sample13@gmail.com', 'sample sample', 'Has Log In', '2023-02-27 15:50:32'),
(6, 20, 'sample13@gmail.com', 'sample sample', 'Has Log Out', '2023-02-27 15:59:38'),
(7, 19, 'sample10@gmail.com', 'sample sample', 'Has Log In', '2023-02-28 13:30:47');

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
  `merchant_id` int(11) NOT NULL,
  `main_category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `merchant_id`, `main_category`, `sub_category`, `date`) VALUES
(1, 0, 'sample', '[\"s\",\" sds\",\" . sds \"]', '2023-02-19 20:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_claimed`
--

CREATE TABLE `tbl_claimed` (
  `claimed_id` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `voucher_code` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `claimed_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `auth_letter` varchar(128) DEFAULT NULL,
  `deed_sale` varchar(128) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_document_info`
--

INSERT INTO `tbl_document_info` (`document_id`, `rider_id`, `driver_license`, `official_receipt`, `cert_registration`, `nbi_clearance`, `drug_test`, `rider_photo`, `vehicle_front`, `vehicle_back`, `vehicle_side`, `license_back`, `auth_letter`, `deed_sale`, `date`) VALUES
(88, 73, '7358_back_id.PNG', '8443_JBG-Solutions-Brochure_v4.pdf', '9898_JBG-Solutions-Brochure_v4.pdf', '3923_JBG-Solutions-Brochure_v4.pdf', '1772_business_permit.png', '9216_1x1.png', '1561_back.PNG', '4689_back.PNG', '7855_back.PNG', '3121_back_id.PNG', NULL, '5027_JBG-Solutions-Brochure_v4.pdf', '2023-02-27 03:07:47');

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
  `password` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_merchant_account`
--

INSERT INTO `tbl_merchant_account` (`merchant_id`, `salutation`, `firstname`, `middlename`, `lastname`, `suffix`, `email`, `password`, `date`) VALUES
(16, 'Mr.', 'Juan', 'Gutierrez', 'Dela Cruz', NULL, 'bakery@gmail.com', '123456', '2023-02-22 06:31:30'),
(17, 'Mr.', 'sample', 'sample', 'sample', NULL, 'sample1@gmail.com', '$2y$10$PuGhkWasITfQXEbBCOehR.ZpO1s8UqSJjWM2hp0PkLoir7UqMGmB2', '2023-02-25 18:20:37'),
(18, 'Mr.', 'sample', 'sample', 'sample', NULL, 'sample11@gmail.com', '$2y$10$SxY2bPdMlr97q3BXp7vdb.aqCOXbZstacnaxuj3r2/3p5156rhOc2', '2023-02-26 07:02:56'),
(19, 'Mr.', 'sample', 'sample', 'sample', NULL, 'sample10@gmail.com', '$2y$10$uJAqKskL.XUa/W7LYu5tD.hcGhxVUym9c6/SXxnvrtg4XzcrLsuae', '2023-02-26 16:45:29'),
(20, 'Mr.', 'sample', 'sample', 'sample', NULL, 'sample13@gmail.com', '$2y$10$.9743bxqvfw6tTyIw63DPuQKqB.ODZr0aLgozHjbC5TLRiHBVUqVm', '2023-02-26 17:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merchant_info`
--

CREATE TABLE `tbl_merchant_info` (
  `merchantinfo_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `business_type` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `date_founded` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `store_number` varchar(50) NOT NULL,
  `store_email` varchar(50) NOT NULL,
  `mission` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_merchant_info`
--

INSERT INTO `tbl_merchant_info` (`merchantinfo_id`, `merchant_id`, `business_type`, `business_name`, `date_founded`, `country`, `address`, `city`, `barangay`, `street`, `postal_code`, `store_number`, `store_email`, `mission`, `vision`, `date`) VALUES
(12, 16, 'Corporation', 'juan bakery', '2014-06-30', 'Philippines', 'Congressional Rd Ext, Barangay 171, Caloocan, Metro Manila', 'Caloocan City', '171', 'Congressional Rd', '123', '09103215428', 'ucc@gmail.com', 'The University of Caloocan City is a public-type local university established in 1971 and formerly called Caloocan City Community College and Caloocan City Polytechnic College.', 'The University of Caloocan City is a public-type local university established in 1971 and formerly called Caloocan City Community College and Caloocan City Polytechnic College.', '2023-02-22 06:33:57'),
(13, 17, 'Sole proprietorship', 'bakery', '2023-01-30', 'Philippines', 'sample', 'sample', 'sample', 'sample', '123', '123', 'sample@gmail.com', 'dsss', 'dss', '2023-02-25 18:21:27'),
(14, 18, 'Sole proprietorship', 'sample', '2023-02-13', 'Philippines', 'sample', 'sample', 'sample', 'sample', '123', '09103215428', 'ucc@gmail.com', 'Since forming at university in London, Coldplay have gone on to become one of the planet’s most popular acts, selling more than 100 million copies of their eight Number One albums, which have spawned a string of hits including Yellow, Clocks, Fix You, Paradise, Viva La Vida, A Sky Full Of Stars, Hymn For The Weekend, Adventure Of A Lifetime, Orphans and, most recently, Higher Power.', 'Since forming at university in London, Coldplay have gone on to become one of the planet’s most popular acts, selling more than 100 million copies of their eight Number One albums, which have spawned a string of hits including Yellow, Clocks, Fix You, Paradise, Viva La Vida, A Sky Full Of Stars, Hymn For The Weekend, Adventure Of A Lifetime, Orphans and, most recently, Higher Power.', '2023-02-26 07:03:59'),
(15, 19, 'Corporation', 'sample', '2023-02-08', 'Philippines', 'sample', 'sample', 'sample', 'sample', '123', '09103215428', 'sample@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-02-26 16:46:51'),
(16, 20, 'Sole proprietorship', 'sample', '2023-02-16', 'Philippines', 'sample', 'sample', 'sample', 'sample', '123', '09103215428', 'sad@gmail.com', 'sd', 'sd', '2023-02-26 17:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
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
  `birthdate` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `emergency_name` varchar(128) NOT NULL,
  `relationship` varchar(128) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rider_account`
--

INSERT INTO `tbl_rider_account` (`rider_id`, `password`, `firstname`, `middlename`, `lastname`, `suffix`, `age`, `gender`, `birthdate`, `email`, `mobile_number`, `address`, `city`, `barangay`, `zip_code`, `emergency_name`, `relationship`, `contact_number`, `date`) VALUES
(64, '$2y$10$ldIqhUM6LqAj76dTkRxVNOyD666JBWqMSqmU.hbHYI0r3kzSSHbQW', 'Juan', 'Gutierrez', 'Dela Cruz', NULL, 23, 'Male', '2023-02-16', 'sample@gmail.com', '0910000000', 'sample', 'sample', 'sample', 123, 'William Q. Ong', 'father', '09103215428', '2023-02-22 17:12:26'),
(65, '$2y$10$S8hUs3NLzz3UDPs6/QEBE.s58WXT5YnqVu.9Hg4Vhfdzon72N7ugq', 'sample', 'sample', 'sample', 'sample', 12, 'Male', '2023-02-16', 'foodea@gmail.com', '123', 'sample', 'sample', 'sample', 123, 'sample', 'father', '123', '2023-02-23 07:17:39'),
(66, '$2y$10$dOA7V6x9tCG/0EbC2vhEUejoJRCiPkOjA.1pZADskzd/bKEd4DbRa', 'sample', 'sample', 'sample', NULL, 2, 'Male', '2023-02-15', 'foodea1@gmail.com', '0910000000', 'sample', 'sample', 'sample', 123, '123', '123', '123', '2023-02-23 17:15:24'),
(67, '$2y$10$UIigVGL3u40gyzBAKAnimekx6MZ6gW4jsGcRDcsldsKXBadhJLzum', 'sample', 'sample', 'sample', NULL, 2, 'Male', '2023-02-14', 'foodea2@gmail.com', '0910000000', 'sample', 'sample', 'sample', 123, '123', '123', '123', '2023-02-23 17:17:41'),
(68, '$2y$10$NbjiJM1DBnoDZY9EFtA0qeRAZ7WeG2PgExByX6AZ7z2C.GJPE0J2.', 'sample', 'sample', 'sample', NULL, 12, 'Male', '2023-02-01', 'foodea3@gmail.com', '0910000000', 'sample', 'sample', 'sample', 123, 'sample', 'sample', '123', '2023-02-24 14:54:15'),
(69, '$2y$10$P46u73A04.mjhaPQexFTJ..yPj2NvylAbuiZLXAbIer/lk/wms4mu', 'sample', 'sample', 'sample', NULL, 12, 'Male', '2023-02-08', 'goodmanwha@gmail.com', '123', 'sample', 'sample', 'sample', 123, 'sample', 'sample', '123', '2023-02-25 13:23:21'),
(70, '$2y$10$zYZwghompgRJo51yVGRlR.HAo2Zs2ykw5FISNR.4ZiTKXFAJRRGAS', 'sample', 'sample', 'sample', NULL, 12, 'Male', '2023-02-14', 'goodmanwha2@gmail.com', '0910000000', 'sample', 'sample', 'sample', 123, '123', '123', '123', '2023-02-26 06:34:55'),
(71, '$2y$10$VdTh9491Iy3ALC7AdytOu.8T3Pgz37UZYtm/h2kTQSCTkllNptb06', 'sample', 'sample', 'sample', NULL, 12, 'Male', '2023-02-09', 'sample13@gmail.com', '0910000000', 'sample', 'sample', 'sample', 123, 'sample', 'sample', '123', '2023-02-26 14:07:52'),
(72, '$2y$10$6tjBo8yjNf32fIXueUc2DOkQjCYhKv76FGjGxalJ9pZ47kCl/YyJO', 'sample', 'sample', 'sample', NULL, 12, 'Male', '2023-02-15', 'sample5@gmail.com', '0910000000', 'sample', 'sample', 'sample', 123, 'sample', 'father', '09459748950', '2023-02-26 15:37:24'),
(73, '$2y$10$ljhpF1NXEXbDre0pqBgZoOeuB4SI5N59BgXuwTBBJEQDiB3Nr7CcW', 'sample', 'sample', 'sample', NULL, 12, 'Male', '2023-02-14', 'sample6@gmail.com', '0910000000', 'sample', 'sample', 'sample', 123, '123', '123', '123', '2023-02-27 02:44:34');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_superadmin_log`
--

INSERT INTO `tbl_superadmin_log` (`log_id`, `email`, `name`, `description`, `date`) VALUES
(12, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-20 04:34:20'),
(14, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-20 04:37:56'),
(15, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-20 04:49:04'),
(16, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-20 04:49:11'),
(17, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-20 13:22:25'),
(18, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-21 06:28:41'),
(19, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-21 09:59:45'),
(20, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-21 17:10:20'),
(21, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-21 17:14:55'),
(22, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-21 17:15:01'),
(23, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-21 17:15:09'),
(24, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-21 17:15:14'),
(25, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-22 05:38:12'),
(26, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-22 07:23:07'),
(27, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-22 07:23:13'),
(28, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-22 16:53:48'),
(29, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-23 07:18:21'),
(30, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-24 16:03:53'),
(31, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-25 06:14:13'),
(32, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-25 18:33:08'),
(33, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-25 18:37:45'),
(34, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-26 06:43:08'),
(35, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-26 14:09:52'),
(36, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-26 15:13:43'),
(37, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-26 15:27:38'),
(38, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 02:40:20'),
(39, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 08:04:48'),
(40, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 14:51:38'),
(41, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 15:59:51'),
(42, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:09:59'),
(43, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:16:53'),
(44, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:25:54'),
(45, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:26:28'),
(46, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:26:50'),
(47, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:26:55'),
(48, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:29:45'),
(49, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:30:17'),
(50, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:32:08'),
(51, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:32:46'),
(52, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:32:55'),
(53, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:35:04'),
(54, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:35:27'),
(55, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:35:38'),
(56, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:36:57'),
(57, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:45:55'),
(58, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:49:08'),
(59, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:49:19'),
(60, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:49:36'),
(61, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:52:24'),
(62, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:52:28'),
(63, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:52:43'),
(64, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:53:50'),
(65, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:54:01'),
(66, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:54:42'),
(67, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 17:55:10'),
(68, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 17:55:20'),
(69, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 18:07:32'),
(70, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 18:13:17'),
(71, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 18:18:28'),
(72, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-27 18:21:31'),
(73, 'foodea@gmail.com', NULL, 'Has Log Out', '2023-02-27 18:21:43'),
(74, 'foodea@gmail.com', NULL, 'Has Log In', '2023-02-28 06:35:18');

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
  `vehicle_ownership` varchar(128) NOT NULL,
  `plate_number` varchar(50) NOT NULL,
  `displacement` int(50) NOT NULL,
  `engine_number` int(11) NOT NULL,
  `year_model` int(11) NOT NULL,
  `datee` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vehicle_info`
--

INSERT INTO `tbl_vehicle_info` (`vehicle_id`, `rider_id`, `vehicle_type`, `vehicle_ownership`, `plate_number`, `displacement`, `engine_number`, `year_model`, `datee`) VALUES
(82, 73, 'Motorcycle', 'Second-hand', '123', 123, 123, 123, '2023-02-27 03:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucher`
--

CREATE TABLE `tbl_voucher` (
  `voucher_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `voucher_name` int(50) NOT NULL,
  `voucher_code` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `total_claimed` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(50) NOT NULL,
  `exp_date` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  ADD PRIMARY KEY (`log_id`);

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
-- Indexes for table `tbl_claimed`
--
ALTER TABLE `tbl_claimed`
  ADD PRIMARY KEY (`claimed_id`);

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
  MODIFY `merchant_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `merchant_document`
--
ALTER TABLE `merchant_document`
  MODIFY `merchant_document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `rider_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_accepted_merchant`
--
ALTER TABLE `tbl_accepted_merchant`
  MODIFY `accepted_merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_accepted_rider`
--
ALTER TABLE `tbl_accepted_rider`
  MODIFY `accepted_rider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_activitylog`
--
ALTER TABLE `tbl_activitylog`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_application`
--
ALTER TABLE `tbl_application`
  MODIFY `applicants_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_claimed`
--
ALTER TABLE `tbl_claimed`
  MODIFY `claimed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_document_info`
--
ALTER TABLE `tbl_document_info`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_merchant_account`
--
ALTER TABLE `tbl_merchant_account`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_merchant_info`
--
ALTER TABLE `tbl_merchant_info`
  MODIFY `merchantinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `rider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_superadmin_log`
--
ALTER TABLE `tbl_superadmin_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vehicle_info`
--
ALTER TABLE `tbl_vehicle_info`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

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
