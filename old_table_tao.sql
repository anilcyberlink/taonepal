-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2024 at 03:30 AM
-- Server version: 8.0.40
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodhospitalorg_newwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appoint_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `full_name`, `address`, `contact`, `email`, `gender`, `day`, `month`, `year`, `department`, `doctor`, `appoint_date`, `time`, `created_at`, `updated_at`) VALUES
(10, 'Pratikshya Shah', 'Siyari-4, Rupandehi, Bhairahawa, Nepal', '9857042777', 'siddharthabs@gmai.com', 'female', '6', '6', '1958', '13', '169', '2021-12-23', '10-12 pm', '2021-12-21 17:40:37', '2021-12-21 17:40:37'),
(11, 'ssss', 'ssss', '98470000000656', 'ssssas@gmail.com', 'male', '1', '1', '1921', '13', NULL, '2022-10-20', '4-6 pm', '2022-10-19 10:48:55', '2022-10-19 10:48:55'),
(12, 'Ram kumar khadka', 'Bagdol', '9851199239', 'govikhadka@gmail.com', 'male', NULL, NULL, NULL, NULL, NULL, NULL, '10-12 pm', '2023-09-30 10:24:57', '2023-09-30 10:24:57'),
(13, 'Prabandh khanal', 'Phuyetappa', '9862637899', NULL, 'male', '2', '9', '2010', '14', '169', '2024-01-20', '4-6 pm', '2024-01-20 15:35:28', '2024-01-20 15:35:28'),
(14, 'Dibyansh adhikari', 'Jitpur simara', '9843336498', 'dipapoudel44444@gmail.com', 'male', '20', '3', '2020', '14', '169', '2024-02-06', '6-8 pm', '2024-02-06 06:45:26', '2024-02-06 06:45:26'),
(15, 'Ranmaya Magar', 'Kathmandu', '9749916337', NULL, 'female', '9', '8', '1986', NULL, '202', '2024-10-14', '10-12 pm', '2024-10-13 22:41:10', '2024-10-13 22:41:10'),
(16, 'Shekhar karki', 'Tikathali', '9808141315', 'shekhar.karki565@gmail.com', 'male', '1', '1', '1989', NULL, '202', '2024-10-26', '10-12 pm', '2024-10-21 19:25:13', '2024-10-21 19:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Burke', 'Burns', 'bololux@mailinator.com', '+1 (491) 988-1695', 'Quis nobis ex aliqua', 'Van', '2021-03-29 23:59:16', '2021-03-29 23:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `cl_adminmenu_user`
--

CREATE TABLE `cl_adminmenu_user` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `adminmenu_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_adminmenu_user`
--

INSERT INTO `cl_adminmenu_user` (`id`, `user_id`, `adminmenu_id`) VALUES
(1, 3, 1),
(11, 3, 2),
(12, 3, 4),
(13, 3, 5),
(14, 3, 12),
(15, 4, 1),
(16, 4, 2),
(18, 4, 12),
(19, 3, 3),
(23, 4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `cl_admin_menu`
--

CREATE TABLE `cl_admin_menu` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_admin_menu`
--

INSERT INTO `cl_admin_menu` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Manage Banners', '2020-08-16 08:51:13', '2020-08-16 08:51:13'),
(2, 'Manage Posts', '2020-08-16 08:52:23', '2020-08-16 08:52:23'),
(3, 'Manage Portfolio', '2020-08-16 08:52:31', '2020-08-16 08:52:31'),
(4, 'Manage Photo Gallery', '2020-08-16 08:52:38', '2020-08-16 08:52:38'),
(5, 'Manage Video Gallery', '2020-08-16 08:53:15', '2020-08-16 08:53:15'),
(6, 'Manage Circular', '2020-08-16 08:53:26', '2020-08-16 08:53:26'),
(7, 'Manage Tender', '2020-08-16 08:53:32', '2020-08-16 08:53:32'),
(8, 'Manage Members', '2020-08-16 08:53:44', '2020-08-16 09:00:08'),
(9, 'Manage Users', '2020-08-16 08:53:49', '2020-08-16 08:53:49'),
(10, 'Newsletter Subscribers', '2020-08-16 08:54:07', '2020-08-16 08:54:07'),
(11, 'Download Info', '2020-08-16 08:54:16', '2020-08-16 08:54:16'),
(12, 'Settings', '2020-08-16 08:54:22', '2020-08-16 08:54:22'),
(15, 'Booking & Inquiry', '2021-04-01 01:50:23', '2021-04-01 01:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `cl_associated_portfolios`
--

CREATE TABLE `cl_associated_portfolios` (
  `id` int UNSIGNED NOT NULL,
  `portfolio_id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` longtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int NOT NULL DEFAULT '0',
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_associated_posts`
--

CREATE TABLE `cl_associated_posts` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int DEFAULT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_associated_posts`
--

INSERT INTO `cl_associated_posts` (`id`, `post_id`, `title`, `sub_title`, `phone`, `email`, `brief`, `thumbnail`, `icon`, `ordering`, `uri`, `facebook_link`, `twitter_link`, `linked_in_link`, `page_key`, `created_at`, `updated_at`) VALUES
(48, 148, 'Blood Hospital Advices & Check Ups', NULL, NULL, NULL, NULL, '', 'heart', 38, 'Blood-Hospital-Advices-Check-Ups', NULL, NULL, NULL, '1627805241940435616', '2021-08-01 02:22:21', '2021-08-01 02:36:03'),
(49, 148, 'Trusted Blood Hospital Treatment', NULL, NULL, NULL, NULL, '', 'doctor', 39, 'Trusted-Blood-Hospital-Treatment', NULL, NULL, NULL, '1627805254101076257', '2021-08-01 02:22:34', '2021-08-01 02:36:54'),
(50, 148, 'Emergency Help Available 24/7', NULL, NULL, NULL, NULL, '', 'ambulance', 40, 'Emergency-Help-Available-247', NULL, NULL, NULL, '1627805267703890321', '2021-08-01 02:22:47', '2021-08-01 02:37:48'),
(51, 148, 'Medical Research Professionals', NULL, NULL, NULL, NULL, '', 'drugs', 41, 'Medical-Research-Professionals', NULL, NULL, NULL, '1627805275310289641', '2021-08-01 02:22:55', '2021-08-01 02:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `cl_banner`
--

CREATE TABLE `cl_banner` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` longtext COLLATE utf8mb4_unicode_ci,
  `banner_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Learn More',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_banner`
--

INSERT INTO `cl_banner` (`id`, `title`, `caption`, `banner_content`, `picture`, `video`, `link_title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Quality Health Care For you.', 'Caring For The Health And Well Being Of Family.', 'Leukemia- ALL, AML, lymphoma and myeloma diagnosed and treated in our center.', '1-LEhrZ3AArbKQrfnoywnpKjreM82GhBKywwH4Tkrz.png', NULL, NULL, NULL, '1', '2021-07-23 00:08:19', '2021-12-09 13:40:58'),
(5, 'Trusted Medical Treatment', 'Emergency Help 24/7', 'Our goal is to deliver quality of care in a courteous, respectful, and compassionate manner.', 'banner-2-RZWt3PjctfOKALGeFTkJRVPmPK1rzdX0DKeiH6FE.jpg', NULL, NULL, NULL, '1', '2021-08-05 03:56:13', '2021-08-05 03:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `cl_circulars`
--

CREATE TABLE `cl_circulars` (
  `id` int NOT NULL,
  `circular_date` datetime DEFAULT NULL,
  `circular_title` text,
  `sub_title` text,
  `circular_content` longtext,
  `circular_excerpt` text,
  `uri` varchar(255) NOT NULL,
  `circular_type` int DEFAULT '0',
  `ordering` int DEFAULT '0',
  `circular_thumbnail` varchar(255) DEFAULT NULL,
  `department` int DEFAULT '0',
  `members` text,
  `status` enum('1','0') DEFAULT '1',
  `published` enum('1','0') DEFAULT '0',
  `is_active` enum('1','0') DEFAULT '0',
  `is_trashed` enum('1','0') DEFAULT '0',
  `is_commentable` enum('1','0') DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cl_circulars`
--

INSERT INTO `cl_circulars` (`id`, `circular_date`, `circular_title`, `sub_title`, `circular_content`, `circular_excerpt`, `uri`, `circular_type`, `ordering`, `circular_thumbnail`, `department`, `members`, `status`, `published`, `is_active`, `is_trashed`, `is_commentable`, `created_at`, `updated_at`) VALUES
(2, '2018-12-19 10:32:16', 'Corporis aut voluptas s', 'Ullam magni mollitia asperiores p', NULL, 'Id repellendus Nobis magna est est est', 'dignissimos-eum-perspiciatis-ipsam-quis-lorem-mollit-tempor-et-ipsum-saepe-es', 4, 5, '2-SFqUUdZYOKW3gpTKspw7g6rbVLO6qJGfoqba4YgH.jpg', 0, NULL, '1', '0', '0', '0', '1', '2018-12-19 09:47:36', '2018-12-19 09:47:36'),
(7, '2018-12-29 07:56:34', 'Ipsam cupiditate q', 'Ullamco earum nisi officia incid', '<p>fdg sdfghdfghdfghf</p>', 'Velit quo et ut sequi culpa quidem molestiae enim occaecat', 'eum-et-cumque-possimus-e', 4, 5, '', NULL, 'null', '1', '0', '0', '0', '1', '2018-12-29 07:11:56', '2018-12-29 07:11:56'),
(9, '2019-02-21 05:18:50', 'Welcome', 'Welcome', NULL, 'Welcome', 'welcome', 1, 8, NULL, 4, '23', '1', '0', '0', '0', '1', '2018-12-29 08:36:56', '2019-02-21 17:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `cl_circular_type`
--

CREATE TABLE `cl_circular_type` (
  `id` int NOT NULL,
  `circular_type` varchar(191) DEFAULT NULL,
  `uri` varchar(191) DEFAULT NULL,
  `ordering` int DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cl_circular_type`
--

INSERT INTO `cl_circular_type` (`id`, `circular_type`, `uri`, `ordering`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Circular1', 'circular1', 1, '1', '2018-12-18 04:41:19', '2018-12-18 05:07:08'),
(2, 'Circular2', 'circular2', 2, '1', '2018-12-18 05:21:08', '2018-12-18 05:21:16'),
(3, 'Circular3', 'circular3', 3, '1', '2018-12-18 05:23:46', '2018-12-18 05:23:46'),
(4, 'Circular4', 'circular4', 4, '1', '2018-12-18 05:24:20', '2018-12-18 05:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `cl_country`
--

CREATE TABLE `cl_country` (
  `id` int NOT NULL,
  `country` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cl_country`
--

INSERT INTO `cl_country` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', NULL, NULL),
(3, 'Aland Islands', NULL, NULL),
(4, 'Albania', NULL, NULL),
(5, 'Algeria', NULL, NULL),
(6, 'American Samoa', NULL, NULL),
(7, 'Andorra', NULL, NULL),
(8, 'Angola', NULL, NULL),
(9, 'Anguilla', NULL, NULL),
(10, 'Antarctica', NULL, NULL),
(11, 'Antigua ', NULL, NULL),
(12, 'Argentina ', NULL, NULL),
(13, 'Armenia ', NULL, NULL),
(14, 'Aruba ', NULL, NULL),
(15, 'Australia', NULL, NULL),
(16, 'Austria ', NULL, NULL),
(17, 'Azerbaijan', NULL, NULL),
(18, 'Bahamas', NULL, NULL),
(19, 'Bahrain ', NULL, NULL),
(20, 'Bangladesh', NULL, NULL),
(21, 'Barbados', NULL, NULL),
(22, 'Barbuda ', NULL, NULL),
(23, 'Belarus ', NULL, NULL),
(24, 'Belgium ', NULL, NULL),
(25, 'Belize', NULL, NULL),
(26, 'Benin ', NULL, NULL),
(27, 'Bermuda ', NULL, NULL),
(28, 'Bhutan ', NULL, NULL),
(29, 'Bolivia', NULL, NULL),
(30, 'Bosnia ', NULL, NULL),
(31, 'Botswana', NULL, NULL),
(32, 'Bouvet Island', NULL, NULL),
(33, 'Brazil', NULL, NULL),
(34, 'British Indian Ocean Territory', NULL, NULL),
(35, 'Brunei Darussalam ', NULL, NULL),
(36, 'Bulgaria ', NULL, NULL),
(37, 'Burkina Faso ', NULL, NULL),
(38, 'Burundi ', NULL, NULL),
(39, 'Caicos Islands', NULL, NULL),
(40, 'Cambodia ', NULL, NULL),
(41, 'Cameroon ', NULL, NULL),
(42, 'Canada ', NULL, NULL),
(43, 'Cape Verde', NULL, NULL),
(44, 'Cayman Islands', NULL, NULL),
(45, 'Central African Republic ', NULL, NULL),
(46, 'Chad ', NULL, NULL),
(47, 'Chile ', NULL, NULL),
(48, 'China ', NULL, NULL),
(49, 'Christmas Island', NULL, NULL),
(50, 'Cocos (Keeling) Islands ', NULL, NULL),
(51, 'Colombia', NULL, NULL),
(52, 'Comoros', NULL, NULL),
(53, 'Republic of Congo ', NULL, NULL),
(54, 'Democratic Republic of the congo', NULL, NULL),
(55, 'Cook Islands ', NULL, NULL),
(56, 'Costa Rica ', NULL, NULL),
(57, 'Cote d\'Ivoire', NULL, NULL),
(58, 'Croatia ', NULL, NULL),
(59, 'Cuba ', NULL, NULL),
(60, 'Cyprus', NULL, NULL),
(61, 'Czech Republic', NULL, NULL),
(62, 'Denmark ', NULL, NULL),
(63, 'Djibouti ', NULL, NULL),
(64, 'Dominica ', NULL, NULL),
(65, ' Dominican Republic', NULL, NULL),
(66, 'Ecuador ', NULL, NULL),
(67, 'Egypt', NULL, NULL),
(68, 'El Salvador', NULL, NULL),
(69, 'Equatorial Guinea', NULL, NULL),
(70, 'Eritrea', NULL, NULL),
(71, 'Estonia ', NULL, NULL),
(72, 'Ethiopia ', NULL, NULL),
(73, 'Falkland Islands (Malvinas)', NULL, NULL),
(74, 'Faroe Islands  ', NULL, NULL),
(75, 'Fiji', NULL, NULL),
(76, 'Finland ', NULL, NULL),
(77, 'France ', NULL, NULL),
(78, 'French Guiana', NULL, NULL),
(79, 'French Polynesia', NULL, NULL),
(80, 'French Southern Territories ', NULL, NULL),
(81, 'Futuna Islands', NULL, NULL),
(82, 'Gabon  ', NULL, NULL),
(83, 'Gambia ', NULL, NULL),
(84, 'Georgia ', NULL, NULL),
(85, 'Germany ', NULL, NULL),
(86, 'Ghana ', NULL, NULL),
(87, 'Gibraltar ', NULL, NULL),
(88, 'Greece ', NULL, NULL),
(89, 'Greenland', NULL, NULL),
(90, 'Grenada ', NULL, NULL),
(91, 'Guadeloupe', NULL, NULL),
(92, 'Guam ', NULL, NULL),
(93, 'Guatemala', NULL, NULL),
(94, 'Guernsey', NULL, NULL),
(95, 'Guinea ', NULL, NULL),
(96, 'Guinea-Bissau', NULL, NULL),
(97, 'Guyana ', NULL, NULL),
(98, 'Haiti ', NULL, NULL),
(99, 'Heard', NULL, NULL),
(100, 'Herzegovina ', NULL, NULL),
(101, 'Holy See ', NULL, NULL),
(102, 'Honduras', NULL, NULL),
(103, 'Hong Kong', NULL, NULL),
(104, 'Hungary', NULL, NULL),
(105, 'Iceland ', NULL, NULL),
(106, 'India ', NULL, NULL),
(107, 'Indonesia ', NULL, NULL),
(108, 'Iran (Islamic Republic of)', NULL, NULL),
(109, 'Iraq', NULL, NULL),
(110, 'Ireland', NULL, NULL),
(111, 'Isle of Man', NULL, NULL),
(112, 'Israel ', NULL, NULL),
(113, 'Italy', NULL, NULL),
(114, 'Jamaica', NULL, NULL),
(115, 'Jan Mayen Islands', NULL, NULL),
(116, 'Japan ', NULL, NULL),
(117, 'Jersey', NULL, NULL),
(118, 'Jordan ', NULL, NULL),
(119, 'Kazakhstan', NULL, NULL),
(120, 'Kenya', NULL, NULL),
(121, 'Kiribati ', NULL, NULL),
(122, 'Korea ', NULL, NULL),
(123, 'Korea (Democratic)', NULL, NULL),
(124, 'Kuwait ', NULL, NULL),
(125, 'Kyrgyzstan', NULL, NULL),
(126, 'Lao ', NULL, NULL),
(127, 'Latvia', NULL, NULL),
(128, 'Lebanon ', NULL, NULL),
(129, 'Lesotho ', NULL, NULL),
(130, 'Liberia', NULL, NULL),
(131, 'Libyan Arab Jamahiriya', NULL, NULL),
(132, 'Liechtenstein', NULL, NULL),
(133, 'Lithuania ', NULL, NULL),
(134, 'Luxembourg ', NULL, NULL),
(135, 'Macao', NULL, NULL),
(136, 'Macedonia ', NULL, NULL),
(137, 'Madagascar ', NULL, NULL),
(138, 'Malawi ', NULL, NULL),
(139, 'Malaysia ', NULL, NULL),
(140, 'Maldives ', NULL, NULL),
(141, 'Mali', NULL, NULL),
(142, 'Malta ', NULL, NULL),
(143, 'Marshall Islands', NULL, NULL),
(144, 'Martinique ', NULL, NULL),
(145, 'Mauritania ', NULL, NULL),
(146, 'Mauritius', NULL, NULL),
(147, 'Mayotte', NULL, NULL),
(148, 'McDonald Islands', NULL, NULL),
(149, 'Mexico ', NULL, NULL),
(150, 'Micronesia ', NULL, NULL),
(151, 'Miquelon', NULL, NULL),
(152, 'Moldova ', NULL, NULL),
(153, 'Monaco ', NULL, NULL),
(154, 'Mongolia ', NULL, NULL),
(155, 'Montenegro ', NULL, NULL),
(156, 'Montserrat', NULL, NULL),
(157, 'Morocco ', NULL, NULL),
(158, 'Mozambique', NULL, NULL),
(159, 'Myanmar ', NULL, NULL),
(160, 'Namibia ', NULL, NULL),
(161, 'Nauru', NULL, NULL),
(162, 'United States', NULL, NULL),
(163, 'Netherlands', NULL, NULL),
(164, 'Netherlands Antilles ', NULL, NULL),
(165, 'Nevis ', NULL, NULL),
(166, 'New Caledonia', NULL, NULL),
(167, 'New Zealand ', NULL, NULL),
(168, 'Nicaragua', NULL, NULL),
(169, 'Niger ', NULL, NULL),
(170, 'Nigeria', NULL, NULL),
(171, 'Niue', NULL, NULL),
(172, 'Norfolk Island ', NULL, NULL),
(173, 'Northern Mariana Islands ', NULL, NULL),
(174, 'Norway ', NULL, NULL),
(175, 'Oman ', NULL, NULL),
(176, 'Pakistan', NULL, NULL),
(177, 'Palau ', NULL, NULL),
(178, 'Palestinian Territory Occupied', NULL, NULL),
(179, 'Panama ', NULL, NULL),
(180, 'Papua New Guinea', NULL, NULL),
(181, 'Paraguay ', NULL, NULL),
(182, 'Peru ', NULL, NULL),
(183, 'Philippines ', NULL, NULL),
(184, 'Pitcairn ', NULL, NULL),
(185, 'Poland', NULL, NULL),
(186, 'Portugal', NULL, NULL),
(187, 'Principe ', NULL, NULL),
(188, 'Puerto Rico ', NULL, NULL),
(189, 'Qatar ', NULL, NULL),
(190, 'Reunion ', NULL, NULL),
(191, 'Romania ', NULL, NULL),
(192, 'Russian Federation', NULL, NULL),
(193, 'Rwanda ', NULL, NULL),
(194, 'Saint Barthelemy', NULL, NULL),
(195, 'Saint Helena', NULL, NULL),
(196, 'Saint Kitts ', NULL, NULL),
(197, 'Saint Lucia ', NULL, NULL),
(198, 'Saint Martin (French part)', NULL, NULL),
(199, 'Saint Pierre ', NULL, NULL),
(200, 'Saint Vincent ', NULL, NULL),
(201, 'Samoa', NULL, NULL),
(202, 'San Marino ', NULL, NULL),
(203, 'Sao Tome ', NULL, NULL),
(204, 'Saudi Arabia', NULL, NULL),
(205, 'Senegal ', NULL, NULL),
(206, 'Serbia ', NULL, NULL),
(207, 'Seychelles ', NULL, NULL),
(208, 'Sierra Leone', NULL, NULL),
(209, 'Singapore', NULL, NULL),
(210, 'Slovakia', NULL, NULL),
(211, 'Slovenia ', NULL, NULL),
(212, 'Solomon Islands', NULL, NULL),
(213, 'Somalia ', NULL, NULL),
(214, 'South Africa', NULL, NULL),
(215, 'South Georgia ', NULL, NULL),
(216, 'South Sandwich Islands', NULL, NULL),
(217, 'Spain', NULL, NULL),
(218, 'Sri Lanka', NULL, NULL),
(219, 'Sudan', NULL, NULL),
(220, 'Suriname', NULL, NULL),
(221, 'Svalbard ', NULL, NULL),
(222, 'Swaziland ', NULL, NULL),
(223, 'Sweden ', NULL, NULL),
(224, 'Switzerland', NULL, NULL),
(225, 'Syrian Arab Republic', NULL, NULL),
(226, 'Taiwan ', NULL, NULL),
(227, 'Tajikistan ', NULL, NULL),
(228, 'Tanzania ', NULL, NULL),
(229, 'Thailand ', NULL, NULL),
(230, 'The Grenadines ', NULL, NULL),
(231, 'Timor-Leste', NULL, NULL),
(232, 'Tobago', NULL, NULL),
(233, 'Togo ', NULL, NULL),
(234, 'Tokelau', NULL, NULL),
(235, 'Tonga ', NULL, NULL),
(236, 'Trinidad ', NULL, NULL),
(237, 'Tunisia ', NULL, NULL),
(238, 'Turkey ', NULL, NULL),
(239, 'Turkmenistan ', NULL, NULL),
(240, 'Turks Islands ', NULL, NULL),
(241, 'Tuvalu', NULL, NULL),
(242, 'Uganda ', NULL, NULL),
(243, 'Ukraine ', NULL, NULL),
(244, 'United Arab Emirates', NULL, NULL),
(245, 'United Kingdom', NULL, NULL),
(246, 'Afghanistan', NULL, NULL),
(247, 'Uruguay ', NULL, NULL),
(248, 'US Minor Outlying Islands ', NULL, NULL),
(249, 'Uzbekistan ', NULL, NULL),
(250, 'Vanuatu ', NULL, NULL),
(251, 'Vatican City State ', NULL, NULL),
(252, 'Venezuela Vietnam ', NULL, NULL),
(253, 'Virgin Islands (British) ', NULL, NULL),
(254, 'Virgin Islands (US)', NULL, NULL),
(255, 'Wallis ', NULL, NULL),
(256, 'Western Sahara', NULL, NULL),
(257, 'Yemen', NULL, NULL),
(258, 'Zambia', NULL, NULL),
(259, 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cl_department`
--

CREATE TABLE `cl_department` (
  `id` int NOT NULL,
  `department` varchar(155) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cl_department`
--

INSERT INTO `cl_department` (`id`, `department`, `created_at`, `updated_at`) VALUES
(1, 'All', '2018-12-17 06:50:16', '2018-12-17 06:50:16'),
(2, 'Account', '2018-12-17 06:50:29', '2018-12-17 06:56:59'),
(4, 'Technical', '2018-12-17 08:26:13', '2018-12-17 08:26:13'),
(3, 'Finance', '2018-12-23 23:15:00', '2018-12-23 23:15:00'),
(7, 'Sales', '2019-01-06 23:32:51', '2019-01-06 23:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `cl_dwninfo`
--

CREATE TABLE `cl_dwninfo` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_dwninfo`
--

INSERT INTO `cl_dwninfo` (`id`, `title`, `first_name`, `last_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(51, 'viLogics Data Protection as a Service Resource Page', 'Colin', 'Joyce', 'mefyrijebi@mailinator.net', '+1 (963) 203-2281', '2019-03-20 10:47:16', '2019-03-20 10:47:16'),
(53, 'Office 365 Administration & Management Resource Page', 'Roanna', 'Farmer', 'dyvy@mailinator.net', '+1 (731) 783-2575', '2019-03-20 14:16:29', '2019-03-20 14:16:29'),
(54, 'Competitive-Cohesity-Battlecards', 'Whilemina', 'Cox', 'senile@mailinator.com', '+1 (321) 524-7302', '2019-03-20 14:59:53', '2019-03-20 14:59:53'),
(56, 'Eyes on Glass as a Service Resource Page', 'Ashley', 'Delfonso', 'Ashley.Delfonso@vilogics.com', '8004731587', '2019-03-29 21:52:29', '2019-03-29 21:52:29'),
(57, 'Competitive-Cohesity-Battlecards', 'Raj Kumar', 'Shrestha', 'test@gmail.com', '9849622966', '2019-04-11 02:58:51', '2019-04-11 02:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_images`
--

CREATE TABLE `cl_gallery_images` (
  `id` int UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_gallery_images`
--

INSERT INTO `cl_gallery_images` (`id`, `category_id`, `picture`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(11, 8, 'interaction-program-on-institution-building-and-capital-market-in-2019-3-CTuqwRoudJj0AErrhBPkG8xU0.png', 'Interaction Program On Institution Building And Capital Market In 2019 5', '1', '2021-01-06 17:08:00', '2021-01-06 17:08:00'),
(12, 8, 'interaction-program-on-institution-building-and-capital-market-in-2019-1-1ycB3Liu9sNRaaGeY8MdVn5Jd.png', 'Interaction Program On Institution Building And Capital Market In 2019 5', '1', '2021-01-06 17:08:27', '2021-01-06 17:08:27'),
(13, 8, 'interaction-program-on-institution-building-and-capital-market-in-2019-2-pyQ7jPou9PNpXn5Is6rEB2jMs.png', 'Interaction Program On Institution Building And Capital Market In 2019 5', '1', '2021-01-06 17:08:54', '2021-01-06 17:08:54'),
(14, 8, 'interaction-program-on-institution-building-and-capital-market-in-2019-4-xSjESSR72rMN2rAfULGsgjGEy.png', 'Interaction Program On Institution Building And Capital Market In 2019', '1', '2021-01-06 17:09:39', '2021-01-06 17:09:39'),
(15, 8, 'interaction-program-on-institution-building-and-capital-market-in-2019-5-hRXa9rv990kjy2jmba0pWlY8b.png', 'Interaction Program On Institution Building And Capital Market In 2019 5', '1', '2021-01-06 17:09:57', '2021-01-06 17:09:57'),
(16, 9, 'market-literacy-interaction-program-1-75BEo71ARPOxrqwtxqMASqjKU.png', 'Market Literacy Interaction Program', '1', '2021-01-06 17:13:20', '2021-01-06 17:13:20'),
(17, 9, 'market-literacy-interaction-program-2-F6L1IfoOSkJuE1JubomMR0IIK.png', 'Market Literacy Interaction Program', '1', '2021-01-06 17:13:43', '2021-01-06 17:13:43'),
(18, 9, 'market-literacy-interaction-program-3-TIfZifNpzyJAC4ya2lvluAJ4k.png', 'Market Literacy Interaction Program', '1', '2021-01-06 17:14:02', '2021-01-06 17:14:02'),
(19, 9, 'market-literacy-interaction-program-4-0e7AJdJFXQ5eYV3DlvBCnHRL0.png', 'Market Literacy Interaction Program', '1', '2021-01-06 17:15:05', '2021-01-06 17:15:05'),
(20, 9, 'market-literacy-interaction-program-5-gdQbbrANuAxSIPqOLEZrnPgZM.png', 'Market Literacy Interaction Program', '1', '2021-01-06 17:15:22', '2021-01-06 17:15:22'),
(21, 10, 'world-investor-week-2018-1-KFtGQzhJuUl78JoyFbWwyNSw3.png', 'World Investor Week 2018', '1', '2021-01-06 17:22:05', '2021-01-06 17:22:05'),
(22, 10, 'world-investor-week-2018-2-w4Hr3eeyf6FW9A1ZZZLMH5zQb.png', 'World Investor Week 2018 2', '1', '2021-01-06 17:22:24', '2021-01-06 17:22:24'),
(23, 10, 'world-investor-week-2018-2-3-xYnRCyl1nbYaWEHTBGhyerAb7.png', 'World Investor Week 2018', '1', '2021-01-06 17:22:47', '2021-01-06 17:22:47'),
(24, 5, 'dummy-8qyGBB7bEbt3WxzyD8iadBdBv.jpg', NULL, '1', '2021-03-26 09:41:16', '2021-03-26 09:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_image_categories`
--

CREATE TABLE `cl_gallery_image_categories` (
  `id` int UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_gallery_image_categories`
--

INSERT INTO `cl_gallery_image_categories` (`id`, `category`, `picture`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Past Muktinath Capital Staff', 'past-muktinath-capital-staff-cat-thumb-NigCEoByMwhsqUQRJLvHyMnlJu8jA1p051QKJ6aI.jpg', 'Past Muktinath Capital Staff', '1', '2021-01-05 21:36:40', '2021-01-05 21:36:40'),
(8, 'Interaction Program On Institution Building And Capital Market In 2019 5', 'interaction-program-on-institution-building-and-capital-market-in-2019-5-cat-thumb-rO4U42tyyajmrxb6pGRR4r3wrTLEeOp095UCIZeG.jpg', 'Interaction Program On Institution Building And Capital Market In 2019', '1', '2021-01-05 21:43:55', '2021-01-06 18:00:34'),
(9, 'Vibor Capital- Share Market Literacy Interaction Program', 'market-literacy-interaction-program2-cat-thumb-YyrTsxg2tSxuddCY3QKlRxqIhBJkdKJrF7bDPbbl.jpg', 'Market Literacy Interaction Program', '1', '2021-01-05 21:45:00', '2021-01-06 18:01:32'),
(10, 'World Investor Week 2018', 'world-investor-week-1-cat-thumb-lh0VpVt6QE5aQ9VXWr8QqMHN1JWylLwNNo8YoZz0.png', 'World Investor Week 2018', '1', '2021-01-05 22:09:41', '2021-01-05 22:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_videos`
--

CREATE TABLE `cl_gallery_videos` (
  `id` int UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_gallery_videos`
--

INSERT INTO `cl_gallery_videos` (`id`, `category_id`, `video`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://www.youtube.com/channel/UCE---JWSKp5TF4NGfxlFSaw', NULL, '1', '2020-10-20 21:01:25', '2020-10-20 21:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_video_categories`
--

CREATE TABLE `cl_gallery_video_categories` (
  `id` int UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_gallery_video_categories`
--

INSERT INTO `cl_gallery_video_categories` (`id`, `category`, `video`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Video Category1', 'Video Category1', 'Video Category1', '1', '2018-10-09 00:17:42', '2018-10-09 00:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `cl_init`
--

CREATE TABLE `cl_init` (
  `id` int NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cl_init`
--

INSERT INTO `cl_init` (`id`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, '123', 1, '2018-12-10 04:48:12', '2018-12-11 01:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `cl_log`
--

CREATE TABLE `cl_log` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_date` datetime DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_members`
--

CREATE TABLE `cl_members` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` int DEFAULT NULL,
  `role_id` int DEFAULT '2',
  `activation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_members`
--

INSERT INTO `cl_members` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `designation`, `department`, `role_id`, `activation_code`, `status`, `created_at`, `updated_at`) VALUES
(23, 'niraj', 'subedi', 'niraj.subedi7@gmail.com', '4f43e5973075cf2a4e485a7c3444396292295347', '9860801044', 'technical', 4, 2, NULL, '1', '2019-02-21 17:18:13', '2019-02-21 17:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `cl_membership`
--

CREATE TABLE `cl_membership` (
  `id` int NOT NULL,
  `CompanyName` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DirectorName` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MobileNumber` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PhoneNumber` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Url` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Company` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_membership`
--

INSERT INTO `cl_membership` (`id`, `CompanyName`, `DirectorName`, `MobileNumber`, `PhoneNumber`, `Email`, `Url`, `Company`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alternative Energy Resources Nepal Pvt. Ltd.', 'Rajkumar Pandey', '9851020873', '014416701/4418893', 'temple@mail.com.np', '0', 'Alternative Energy Resources Nepal Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(2, 'Anup Order and Suppliers', 'Lokendra KC', '9851229893', '086-410048', 'anupsolar27@gmail.com', '0', 'Anup Order and Suppliers', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(3, 'Asian Batteries Pvt. Ltd.', 'Suresh Lohani', '9851098444, 9801198300', '025-229044', 'manojkshrestha@megatech.com.np; gm@asianbatteries.com.np', '0', 'Asian Batteries Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(4, 'Bheri Rapti Urja Pvt. Ltd.', 'Tufel Ahmed Kha', '9851200022', '088-401084/081-411302', 'tufel36@yahoo.com; tufelk4@gmail.com', '0', 'Bheri Rapti Urja Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(5, 'Bio Energy Pvt. Ltd. ', 'Deepak B. Shahi', '9851071747', '081-526837/01-4387026/438207', 'bioenergy@ntc.net.np, dipakshahi@gmail.com', '0', 'Bio Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(6, 'Bright Energy Pvt. Ltd. ', 'Badri Khadka', '9851058946', '14462410', 'brightenergy4@gmail.com', '0', 'Bright Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(7, '<a class=\'uk-text-bold\'>Bright Sun Co. Pvt. Ltd.</a>', 'Megh Bahadur Parajuli', '9851058326', '14380176', 'brightsun197@gmail.com', NULL, 'Bright Sun Co. Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2021-04-30 10:39:13'),
(8, 'Bright Vision Energy Pvt. Ltd.', 'Om KC', '9851117031', '01-4382656', 'visiontobright@gmail.com', '0', 'Bright Vision Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(9, 'C.G. Solar Pvt. Ltd.', 'Roshan Singh', '9851092374', '01-5108101', 'roshan.singh@chaudharygroup.com', '0', 'C.G. Solar Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(10, 'Clean Homes Energy Nepal Pvt. Ltd. ', 'Govinda Subedi', '9851245270', '01-4390381/4390388', 'cleanhomesenergy@ntc.net.np; subedig50@gmail.com, ', '0', 'Clean Homes Energy Nepal Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(11, 'Clean Homes Investment Pvt. Ltd. ', 'Chudamani Gautam', '9801089034', '14389610', 'gautamcmsolargroup@gmail.com', '0', 'Clean Homes Investment Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(12, 'Deep Jyoti Sourya Urja Pvt. Ltd.', 'Deepak Joshi', '9852027100', '021-521584', 'djsouryaurja@gmail.com', '0', 'Deep Jyoti Sourya Urja Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(13, 'Deeplight Energy Pvt. Ltd. ', 'Komal Nath Panta', '9851022743', '14387678', 'info@deeplightenergy.com, contact@deeplightenergy.com', '0', 'Deeplight Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(14, 'Dhaulagiri Solar and Electronic Company Pvt. Ltd. ', 'Yam Prasad Gautam', '9851061203', '01-4465376/4353296/4352790', 'dhaulagirisolar@ntc.net.np', '0', 'Dhaulagiri Solar and Electronic Company Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(15, 'Dibya Urja Pvt. Ltd. ', 'Kumar Humagain', '9851004735', '14720996', 'dibyaurja@wlink.com.np', '0', 'Dibya Urja Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(16, 'El Sol Pvt. Ltd.', 'Somesh KC', '9851120756', '01-4424515/4424029', '001elsol@gmail.com, elsole@wlink.com.np', '0', 'El Sol Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(17, 'Energy and Construction Co. Pvt. Ltd. ', 'Rajendra B. Khadka', '9849453396', '016220189/4277196', 'eccnepal@ntc.net.np, info@energygroupn.com', '0', 'Energy and Construction Co. Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(18, 'Energy International Pvt. Ltd. ', 'Nabindhar', '9801028713', '01556039/5523959/5543482', 'info@energy-international.com.np', '0', 'Energy International Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(19, 'Energy Prabardhan Company Pvt. Ltd. ', 'Shivaraj Laudari', '9851006493', '14353697', 'info@energyprabardhan.com.np', '0', 'Energy Prabardhan Company Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(20, '<a class=\'uk-text-bold\'>Everest Solar Energy Pvt. Ltd.</a>', 'Sing Ras Ghale', '9851013280', '14360086', 'ese@ntc.net.np', NULL, 'Everest Solar Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2021-04-30 10:42:09'),
(21, 'Gham Power Nepal Pvt. Ltd. ', 'Anjal Niraula', '9841524444', '01-4721486', 'contact@ghampower.com', '0', 'Gham Power Nepal Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(22, 'Ghammpani Urja Pvt. Ltd.', 'Sanjaya Shrestha', '9851054039', '014254926/2035696', 'info@ghampani.com.np', '0', 'Ghammpani Urja Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(23, 'Globalmatics Renewable Energy Pvt. Ltd.', 'Yugratna Tamrakar\n', '9851022649\n', '15546076\n', 'yug@secnepal.com, ises@vianet.com.np, ises@sealthnet.org.np', '0', 'Globalmatics Renewable Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(24, 'Green Tech Project Pvt. Ltd.', 'Nihal Gurung', '9823221188', '01-5705149', 'nihalgurung99@gmail.com', '0', 'Green Tech Project Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(25, 'GUP Pvt. Ltd. ', 'Bishwa Bikram Joshi', '9851071228', '01-4228779/4256641', 'biswajoshi@gmail.com', '0', 'GUP Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(26, 'Himal Refrigeration & Electrical Industries Pvt. Ltd.', 'Bijaya Kumar Chaudhary', '9851026804', '01-5520123/5521123', 'solar_himalref@wlink.com.np', '0', 'Himal Refrigeration & Electrical Industries Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(27, 'Himalayan Renewable Energy Pvt. Ltd.', 'Shridhar Bhandari', '9851037519', '01-4468138', 'bhandari_3@hotmail.com', '0', 'Himalayan Renewable Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(28, 'Hom Energy Pvt. Ltd.', 'Kiran Pudashaini', '9851018023', '01-4223549', 'homenergyy12@gmail.com', '0', 'Hom Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(29, 'Ibeja International Pvt. Ltd.', 'Dinesh Babu Tiwari', '9851073952', '01-4104531', 'ibeja@mail.com.np', '0', 'Ibeja International Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(30, 'Kalash Solar & Electronics Co. Pvt. Ltd.', 'Gajendra Shrestha, Nika Kiran Raya', '9841710094', '01-4030038', 'kalashsolarcom@gmail.com', '0', 'Kalash Solar & Electronics Co. Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(31, 'Kaligandaki Solar and Electronic Co. Pvt. Ltd. ', 'Purna Bd. Khatri,           Narayan Chapai             ', '9851106233  9851121343 ', '01-4352279/4359223', 'kaligandakisolar@gmail.com, nchapagain064@gmail.com', '0', 'Kaligandaki Solar and Electronic Co. Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(32, 'Karnali Solar & Hydropower company Pvt. Ltd.', 'Yadav Khadka', '9851106565', '01-4462982/016630279', 'info@karnalisolar.com.np', '0', 'Karnali Solar & Hydropower company Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(33, 'Kathmandu Energy Pvt. Ltd.', 'Netra Pd. Gyawali', '9858025031', '', '\nnetrakpcnpj@gmail.com', '0', 'Kathmandu Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(34, 'Kathmandu Power Company Pvt. Ltd. ', 'Shailesh K.C.', '9841201514 9851076627', '01-4424515/4424029', 'kpc@wlink.com.np, sales@kpc.com.np', '0', 'Kathmandu Power Company Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(35, 'Kinetic Energy Pvt. Ltd. ', 'Keshab Prasad Dahal', '9851110065', '01-5523956/5525402', 'keshabdahal08@gmail.com', '0', 'Kinetic Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(36, 'Krishna Grill and Engineering Works Pvt. Ltd. ', 'Lawamani Rajbhandari', '9852020428', '021-472162/014650919', 'kgktc_brt@wlink.com.np', '0', 'Krishna Grill and Engineering Works Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(37, 'Kulayan Energy Pvt. Ltd.', 'Rajendra Bdr. Karki', '9851052062', '01-4387938/4355641', 'energykulayan@hotmail.com', '0', 'Kulayan Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(38, 'Lasersun Energy Pvt. Ltd. ', 'Binod Thapa', '9851025551', '01-5554987/88', 'info@lasersunenergy.com; binodthapa@lasersunenergy.com , thapabinod1@hotmail.com', '0', 'Lasersun Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(39, 'Lek Besi  Sourya Urja Tatha Gobargas Sewa Co.', 'Rabilal Aryal', '9851160887', '071-542538', 'dinesh@exclusivefabric.com', '0', 'Lek Besi  Sourya Urja Tatha Gobargas Sewa Co.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(40, 'Looza Nepal Pvt. Ltd. ', 'Nirish Krishna Shrestha', '9851034269', '01-4427264', 'loozanep@gmail.com; nirish@wavesgroup.com, loozanet@gmail.com', '0', 'Looza Nepal Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(41, 'Lotus Energy Pvt. Ltd. ', 'Kiran Pradhan', '9851051012', '01-4418203', 'info@lotusenergy.com.np', '0', 'Lotus Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(42, 'LS Solar Asia Pvt. Ltd. ', 'Dipan Raghubanshi', '9851022602', '01-5551456', 'info@lssolarasia.com', '0', 'LS Solar Asia Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(43, 'Lumbini Solar Center Pvt. Ltd.', 'Nandan Aryal', '9847045340', '071-543931', 'lumbinisolar@yahoo.com', '0', 'Lumbini Solar Center Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(44, 'Luniva Energy Pvt. Ltd. ', 'Hirakaji Maharjan', '9851122951', '01-5555972', 'info@lunivaenergy.com.np', '0', 'Luniva Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(45, 'Manasalu Energy Pvt. Ltd. ', 'Dilip Acharya', '9851033022', '014823015/4823016', 'info@manasaluenergy.com.np, manasalu.energy@gmail.com', '0', 'Manasalu Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(46, 'Manikej Urja Pvt. Ltd.', 'Puran Pr. Rijal', '9841811581', '083522360/014460804', 'manikej@gmail.com', '0', 'Manikej Urja Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(47, 'Nabajyoti Urja Pvt. Ltd. ', 'Deepak Humagain', '9851047869', '01-5000679', 'nabajyoti.urja@yahoo.com', '0', 'Nabajyoti Urja Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(48, 'Nabikaraniya Urja Pvt. Ltd. ', 'Nabin Kumar Shahi', '9858021150', '14382079', 'nabikaraniyaurja@gmail.com', '0', 'Nabikaraniya Urja Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(49, 'Narayani Power Solutions Pvt. Ltd. ', 'Indra Raj Subedi', '9801129925', '056-570268/01-4274925', 'indracom@wlink.com.np', '0', 'Narayani Power Solutions Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(50, 'Narayani Urja Shakti Pvt. Ltd.', 'Raj Kumar Malla', '9845028405', '057-5225530/9845028405', 'rajkumarmall33@yahoo.com', '0', 'Narayani Urja Shakti Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(51, 'National Solar and Investment Pvt. Ltd. ', 'Chudamani Gautam', '9801089034', '081-541755', 'gautamcmsolargroup@gmail.com', '0', 'National Solar and Investment Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(52, 'Nepal Energy Development Company Pvt. Ltd. ', 'Shree Ram Adhikari', '9851086656', '01-4670009/4270163', 'nedco@ntc.net.np', '0', 'Nepal Energy Development Company Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(53, 'North Energy Company Pvt. Ltd.', 'Narayan Nepal', '9857029995', '071-698440', 'northenergy08@yahoo.com', '0', 'North Energy Company Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(54, 'Panas Urja Pvt. Ltd.', 'Bedh Pr. Sharma', '9851216897', '', 'panas.urja2075@gmail.com', '0', 'Panas Urja Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(55, 'Paulatsya Saurya Energy & Investment Pvt. Ltd.', 'Chandra Datta Subedi', '9851066194', '01-4454470', 'psesolar2012@gmail.com', '0', 'Paulatsya Saurya Energy & Investment Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(56, 'Peak Sun Energy and Investment Pvt. Ltd. ', 'Bedh Pr. Sharma', '9741016897', '14355975', 'peaksun_energy@yahoo.com ', '0', 'Peak Sun Energy and Investment Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(57, 'Perennial Energy Nepal Pvt. Ltd. ', 'Subarna Rajbhandari', '9851025789', '01-4414363/4414674', 'info@perennialnepal.com; perennial_nepal@yahoo.com; subarna25789@gmail.com; subarna_raj@hotmail.com', '0', 'Perennial Energy Nepal Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(58, 'Pico Power Nepal Pvt. Ltd. ', 'Muniraj Upadhaya', '9851061616', '01-5202348', 'infoktm@sardaonline.com', '0', 'Pico Power Nepal Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(59, 'Pioneer Solar Company Pvt. Ltd.', 'Mahesh Kumar Sarada', '9851084777', '01-5544771/5544772', 'popularenergy2066@gmail.com', '0', 'Pioneer Solar Company Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(60, 'Popular Energy Pvt. Ltd.', 'Keshab Prasad Dahal', '9851110065', '01-4462982, 4499668', 'premierenergy@gmail.com', '0', 'Popular Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(61, 'Premiere Energy Pvt. Ltd.', 'Narayan Pr. Ghimire', '9842410888', '021-537198', 'premierenergy@ntc.net.np; umathapaliya1984@gmail.com', '0', 'Premiere Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(62, 'Priemier Energy and Electronics Company Pvt. Ltd. ', 'Uma Thapaliya', '9851137815', '', 'muniraj@rids-nepal.org', '0', 'Priemier Energy and Electronics Company Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(63, 'Public Solar Pvt. Ltd. ', 'Padam Bhattarai', '9851132802', '01-4364060', 'publicsolar@gmail.com', '0', 'Public Solar Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(64, 'Quality Renewable Energy Nepal Pvt. Ltd.', 'Hari N. Gautam                Surya Gautam', '9851061323/ 9851068312', '01-4361363', 'qrenepal@yahoo.com; qrenepal@gmail.com', '0', 'Quality Renewable Energy Nepal Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(65, 'Rastriya Gramin Tatha Baikalpik Urja Bikas Pvt. Ltd. ', 'Gyanu mahata', '9858750125', '099-520068/521699', 'nationalenergy2009@yahoo.com', '0', 'Rastriya Gramin Tatha Baikalpik Urja Bikas Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(66, 'Rays Nepal Pvt. Ltd.', 'Suresh Bhakta Shrestha', '9851050073', '014385818/4372522', 'raysnepal2005@gmail.com, raysnepal2065@gmail.com', '0', 'Rays Nepal Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(67, 'Renewable Nepal Alternative Energy Pvt. Ltd. ', 'Prakash Bikaram Basnet', '9851062599', '01-4282198/4283118', 'info@rna.com.np', '0', 'Renewable Nepal Alternative Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(68, 'Rural and Alternative Energy Pvt. Ltd. ', 'Krishna Chandra Subedi', '9851108570', '065-560573/01-4388604/5', 'resurja@ntc.net.np', '0', 'Rural and Alternative Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(69, 'Scientific Technology Pvt. Ltd. ', 'Gyanu Mahato', '9851035809', '01-5201504/5203564', 'stc_company@yahoo.com, stl.scientific@gmail.com', '0', 'Scientific Technology Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(70, 'Shikhar Renewable Energy Pvt. Ltd ', 'Kamal Bhujel', '9851002780', '01-4008641/4008642', 'shikharrenewable@ntc.net.np', '0', 'Shikhar Renewable Energy Pvt. Ltd ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(71, 'Sipradi Energy Pvt. Ltd ', 'Bishnu B. Khatri', '9801090278', '01-4100226/4100227/8', 'energy@sipradi.com.np; hari.shrestha@sipradi.com.np', '0', 'Sipradi Energy Pvt. Ltd ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(72, '<a class=\'uk-text-bold\'>Sky Sun Energy Co.  Pvt. Ltd.</a>', 'Deepak Gautam', '9851141649', '14390745', 'sky.energy2068@gmail.com', NULL, 'Sky Sun Energy Co.  Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2021-04-30 11:03:14'),
(73, 'Smart Power Pvt. Ltd. ', 'Babin Manandhar', '9851024323', '01-4413263/4413362', 'info@smartpower.com.np', '0', 'Smart Power Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(74, 'Solar Electricity Company Pvt. Ltd ', 'Yugratna Tamrakar', '9851022649', '01-5546076', 'yug@secnepal.com, ises@vianet.com.np, ises@sealthnet.org.np', '0', 'Solar Electricity Company Pvt. Ltd ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(75, 'Solar Homes Nepal Pvt. Ltd.', 'Bharat K Malla', '9851155178', '01-4390439', '\nsolarhomesnepal@gmail.com; solarhomesnepal@yahoo.com', '0', 'Solar Homes Nepal Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(76, 'Sol-Tronix Pvt. Ltd.', 'Govinda Malla Thakuri', '9851000660', '01-5534386', 'soltronix@solution4u.com', '0', 'Sol-Tronix Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(77, 'Sourya Energy Pvt. Ltd. ', 'Krishna Parajuli', '9851037517', '01-4822600/4822472', 'souryaenergy@ntc.net.np', '0', 'Sourya Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(78, 'Sourya Urja Nepal Pvt. Ltd. ', 'Dipendra Sitaula \nBinod Sapkota', '9851034739\n9851116368', '01-4351763-/6225365', 'souryaurjanepal@ntc.net.np', '0', 'Sourya Urja Nepal Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(79, 'Sprint International Pvt. Ltd ', 'Prachandaman Shrestha', '9851075736', '01-4430417/4441787', 'sprint@wlink.com.np', '0', 'Sprint International Pvt. Ltd ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(80, 'Sudur Paschim Soalr Co. Pvt. Ltd.', 'Rajendra Bom', '9848405116', '091-526134', 'sudurpaschimsolar1234@yahoo.com; sudurpaschimsolar123@yahoo.com, spsolarcompany@gmail.com', '0', 'Sudur Paschim Soalr Co. Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(81, 'Sun Power Pvt. Ltd. ', 'Chandreshwor Chaudhari', '9851047107', '01-4411051', 'info@sunpower.wlink.com.np', '0', 'Sun Power Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(82, 'Sun Force Homes Pvt. Ltd.', 'Rudra B. Pun', '9851130184', '01-4384197', 'sunforcehomes2018@gmail.com; pun.rb68@gmail.com', '0', 'Sun Force Homes Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(83, 'Sunforce Solar Energy and Investment Pvt. Ltd. ', 'Chudamani Gautam', '9801089034', '01-4673198/4673199', '', '0', 'Sunforce Solar Energy and Investment Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(84, 'Sunlife Energy Pvt. Ltd. ', 'Upendra Pandey', '9851128181', '01-5001369', 'info@sunlifeenergy.com; sunlife.energy@yahoo.com', '0', 'Sunlife Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(85, 'Sunlight Solar Company Pvt. Ltd ', 'Achyut Timilsina', '9851111573', '01-4037158/6922601', 'info@sunlightsolar.com.np', '0', 'Sunlight Solar Company Pvt. Ltd ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(86, 'Sunray Energy Nepal Pvt. Ltd.', 'Rajendra Bdr. Karki', '9851052062', '01-4387938/4355641', 'energykulayan@hotmail.com', '0', 'Sunray Energy Nepal Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(87, 'Sunrise Energy and Accessories Works', 'Ramhari Shrestha', '9851040348', '01-4272877/4272915', 'sunrise.sunix@gmail.com', '0', 'Sunrise Energy and Accessories Works', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(88, 'Sunsafe Solar and Investment Pvt. Ltd. ', 'Bhanubhakta Paudyal', '9851130183', '01-4385114/4389572', 'sunsafesolar12@gmail.com', '0', 'Sunsafe Solar and Investment Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(89, 'Sunshine Energy Pvt. Ltd. ', 'Uttam Sitaula', '9851047868', '01-4353538/4355347', 'info@sunshine.com.np, uttamsitaula@gmail.com', '0', 'Sunshine Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(90, 'Sun Solar Electronics Pvt. Ltd.', 'Nabin K. Darlami', ' 9851115559/ 9851235135', 'N/A', 'solarccnepal@gmail.com', '0', 'Sun Solar Electronics Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(91, 'Suntech Energy Co. Pvt. Ltd ', 'Ganesh Bahadur Shrestha', '9851032221', '01-4281995', 'info@stenepal.com; sotc_2004@hotmail.com', '0', 'Suntech Energy Co. Pvt. Ltd ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(92, 'Sunway Solar & Electronics Technology Pvt. Ltd.', 'Ram Prasad Paudel', '9818397500', '01-4277290', 'sunway@ntc.net.np', '0', 'Sunway Solar & Electronics Technology Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(93, 'Surya Jyoti Company Pvt. Ltd.', 'Kalpana Acharya', '9841241862', '01-429255/4249719', 'suryodeepurja@yahoo.com', '0', 'Surya Jyoti Company Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(94, 'Suryajyoti Mahila Maitri Urja Pvt. Ltd. ', 'Kalpana Acharya', '9841241862', '01-4008535', 'suryajyoti@hons.com.np, suryajyotiurja@hons.com.np', '0', 'Suryajyoti Mahila Maitri Urja Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(95, 'Surya Power Company Pvt. Ltd. ', 'Jeetendra Bhattarai', '9851176527', '01-4274604', 'suryajyoti@hons.com.np, suryajyotiurja@gmail.com', '0', 'Surya Power Company Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(96, 'Surya Roshani Industrial Pvt. Ltd.', 'Alok Kumar Malu', '9851034034', '4912985/4239405/4233840/4266820', 'jbhattarai@suryapowerco.com; ', '0', 'Surya Roshani Industrial Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(97, 'Suryodaya Hi Tech Pvt. Ltd. ', 'Ram Bhdr. Bhandari', '9851040440', '01-4379336', 'star_office@wlink.com.np; alokmalu@hotmail.com ', '0', 'Suryodaya Hi Tech Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(98, 'Suryodaya Urja Pvt. Ltd. ', 'Nabin Bhujel', '9851040404', '01-4379000', 'info@sdu.com.np, info@suryodaya.wlink.com.np, ram@sdu.com.np', '0', 'Suryodaya Urja Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(99, 'Suryodip Urja Pvt. Ltd.', 'Yam B. Gharti Magar', '9844907290', '082-562721/560331', 'info@sdu.com.np, nabin@sdu.com.np, nabin.bhujel@yahoo.com', '0', 'Suryodip Urja Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(100, 'Sustainable Energy Nepal Pvt. Ltd.', 'Rajendra Maharjan', '9841480557', '01-522053', ' senepal@senepal.com', '0', 'Sustainable Energy Nepal Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(101, 'Swogun Energy Pvt. Ltd. ', 'Gokula Khadka', '9851055740', '01-4362505', 'swogun@ntc.net.np', '0', 'Swogun Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(102, 'Swaviman Urja Bikash Company Pvt. Ltd. ', 'Hira K.C.', '9851087947', '01-4384632', 'swavimanurja@gmail.com , kchira2000@yahoo.com', '0', 'Swaviman Urja Bikash Company Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(103, 'Swargadwari Solar and Electronic Comany Pvt. Ltd.', 'Hemraj Bhandari', '9849646183', '01-4382608', 'swargadwarisolar@gmail.com', '0', 'Swargadwari Solar and Electronic Comany Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(104, 'Tamrang Green Solution Pvt. Ltd.', 'Gyan Bdr. Mahato', '9851035809', '01-5201504/5203564', 'stl_company@yahoo.com, tamranggreensolution@gmail.com', '0', 'Tamrang Green Solution Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(105, 'Topsun Energy Pvt. Ltd. ', 'Kiran Gautam', '9851089480', '01-4891268/4891369', 'kiran.gautam@ntc.net.np, topsun@ntc.net.np', '0', 'Topsun Energy Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(106, 'Trinity Solar Nepal Pvt. Ltd.', 'Nippan Shrestha', '9851031363', '015522191/5528254', 'nipponshr@gmail.com', '0', 'Trinity Solar Nepal Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(107, 'Triveni Renewable Energy Co. Pvt. Ltd.', 'Min Pr. Bhandari', '9857027836', '078-540313', 'trivenigovergas@gmail.com; sun2006bhandari@gmail.com, trivenibiogas27@gmail.com', '0', 'Triveni Renewable Energy Co. Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(108, 'Tumrok Energy Pvt. Ltd.', 'Tara Kumar Tumrok', '9852020832', '01-4037167/021-532297', 'tumrokenergy@gmail.com, bran.tumrokenergy@gmail.com', '0', 'Tumrok Energy Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(109, 'Ujyalo Urja Pvt. Ltd. ', 'Gyanu Shah', '9851177840', '01-4383358', 'ujyalourja2010@gmail.com', '0', 'Ujyalo Urja Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(110, 'Ultra Solar Energy and Steel Engineering Pvt. Ltd. ', 'Keshab Raj Khanal', '9851058186', '01-4313398/4117043', 'info@ultragroup.net.np', '0', 'Ultra Solar Energy and Steel Engineering Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(111, 'Unique Nepal Solar Pvt. Ltd.', 'Dinesh Silwal                   ', '9855067849', '01-4037149', 'uniquenepalsolar@gmail.com, info@uniquenepal.com', '0', 'Unique Nepal Solar Pvt. Ltd.', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00'),
(112, 'Urja Ghar Pvt. Ltd. ', 'Rameshwor Wagle        ', '9851033336', '01-4671108', ' urjagharnepal@gmail.com', '0', 'Urja Ghar Pvt. Ltd. ', 1, '2025-04-21 14:43:00', '2025-04-21 14:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_banner`
--

CREATE TABLE `cl_multiple_banner` (
  `id` int UNSIGNED NOT NULL,
  `banner_id` int DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_multiple_banner`
--

INSERT INTO `cl_multiple_banner` (`id`, `banner_id`, `title`, `caption`, `content`, `picture`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Free Demat Account Opening', NULL, NULL, 'banner-01-VMEjV7COdMmP9w5HhnWVkXa4P5ctBi6V0CsSr8so.jpg', 'https://muktinathcapital.dematservice.com/Demataccount', 1, '2020-12-31 08:17:13', '2021-01-27 20:22:17'),
(2, 1, 'Plain Banner', NULL, NULL, 'banner-02-lpEGkP1PY8LrnxMpk3Ij877DbPBsDd6gVRpA6c6f.jpg', NULL, 1, '2020-12-31 08:17:25', '2021-01-27 16:50:38'),
(3, 1, 'PMS', NULL, NULL, 'pms-banner-1dlMpxO75O7w9VROAKDmwPnGWcJG7y9TgMps1c3m.jpeg', 'https://muktinathcapital.com/1609327511267217523.html', 1, '2020-12-31 08:17:46', '2021-03-14 21:49:45'),
(10, 2, 'LBBL Bonus tax', NULL, 'md', 'lbbl-bonus-tax-1-ipWlV3ToLlbhhGg1X9TvcxjwBMb14XuhMEjayq6c.jpg', NULL, 0, '2021-01-31 22:10:45', '2021-01-31 22:46:51'),
(11, 2, 'Name Change Notice', NULL, 'md', 'name-change-notice-2-57Rv8O3JAbalQyb1NEvjo67hYPGmz3TlSPp4QAqn.jpg', NULL, 0, '2021-01-31 22:20:57', '2021-01-31 22:46:54'),
(12, 2, 'MNBBL AUCTION NOTICE', NULL, 'md', 'mnbbl-auction-notice-3-umS2FL7rL9EuVs13nTX8sCKqWhd2HCalciFtdjxT.jpg', NULL, 0, '2021-01-31 22:21:32', '2021-01-31 22:46:56'),
(13, 2, 'Mnbbl Auction Notice', NULL, 'sm', 'mnbbl-auction-notice-4-1HLjilTVsx6qbgANxdaectuEo4MZriFHKl8wSchN.jpg', NULL, 0, '2021-01-31 22:21:47', '2021-01-31 23:15:55'),
(14, 2, 'MNBBL Auction alloted notice', NULL, 'md', 'mnbbl-auction-alloted-notice-5-wZHfruthZ2sovRTUTJxNUMEnsgEZc5qT09Ewkwai.jpg', NULL, 0, '2021-01-31 22:22:02', '2021-01-31 22:47:01'),
(15, 2, 'FINANCIAL CHECK-UP', NULL, 'md', 'financial-check-up-6-ae1NvhoORS5uE2F0uxQvuHXQKpeFOrq9greByfQI.jpg', NULL, 0, '2021-01-31 22:22:17', '2021-01-31 22:47:03'),
(16, 2, 'Maghe Sangranti', NULL, 'md', 'maghe-sangranti-7-lDV9f6JYEduqMMGGCvbtLQXMbsLFSxh86GyAjuwb.jpg', NULL, 0, '2021-01-31 22:22:32', '2021-01-31 22:47:06'),
(17, 2, 'Muktinath-sonam-losar', NULL, 'md', 'muktinath-sonam-losar-8-cVHx3dvfKC47o5j2XhipOZTxrlV4jlZGtZtNxPOr.jpg', NULL, 0, '2021-01-31 22:23:12', '2021-01-31 22:47:11'),
(18, 2, 'Shree Panchami', NULL, 'md', 'shree-panchami-9-Jijo98h2gK3gLpOexhAFrtCk1uvMkOhS65e30BUU.jpg', NULL, 0, '2021-01-31 22:25:51', '2021-01-31 22:47:14'),
(19, 2, 'Relocation Notice', NULL, 'md', 'relocation-notice-10-2YGgPyjUo1ucyaeNTzUi8v9Noqdnl5sSmv8PerN0.jpg', NULL, 0, '2021-01-31 22:26:06', '2021-01-31 22:47:16'),
(20, 2, 'Relocation Notice in Nepali', NULL, 'md', 'relocation-notice-in-nepali-11-R8TuARi2KytvwdTRtESuKggdLOVLgDEdz0egZbki.jpg', NULL, 0, '2021-01-31 22:26:18', '2021-01-31 22:47:19'),
(21, 2, 'DEMAT RENEW NOTICE 2077', NULL, 'md', 'demat-renew-notice-2077-12-XNHpcMhmZbSLH3LKSxdFpaHjlPvd07cD7rKL1uxg.jpg', NULL, 0, '2021-01-31 22:26:31', '2021-03-15 14:42:07'),
(22, 2, 'Prabhu Bank promoter Auction- Notice', NULL, 'md', 'prabhu-bank-promoter-auction-notice-13-ZYwCNkimk8oZCnGjCru2P18kJCIDxiCSj9LeJjf2.jpg', NULL, 0, '2021-01-31 22:26:51', '2021-01-31 22:47:24'),
(23, 2, 'Merchant-Bank-Association', NULL, 'md', 'merchant-bank-association-14-qm8cWl8A9bHMIPvAZmfGHvHSBcFYbNy2jK2pLbiv.png', NULL, 0, '2021-01-31 22:27:19', '2021-01-31 22:47:25'),
(24, 2, 'Nagpanchami', NULL, 'md', 'nagpanchami-15-vRKHawFZOfirQxapRv8b73xMZHMBacyN6zWxx2LJ.jpg', NULL, 0, '2021-01-31 22:29:20', '2021-01-31 22:47:28'),
(25, 2, 'Online Service', NULL, 'md', 'online-service-16-2uEE162PDY0rlPzBSWIQNBh56zSXlSap3Y3OCFir.jpg', NULL, 0, '2021-01-31 22:29:42', '2021-01-31 22:47:31'),
(26, 2, 'Online Service', NULL, 'md', 'online-service-16-wr3igDwht9y5kfqlSneqeXfm9EvFBNdRGfqivh3i.jpg', NULL, 0, '2021-01-31 22:30:50', '2021-01-31 22:47:34'),
(27, 2, 'Dividend Notice', NULL, 'md', 'dividend-notice-17-8cBk5BWpEVOypEZw30OySlphOlQvCJtEJqq5XF4K.jpg', NULL, 0, '2021-01-31 22:31:04', '2021-01-31 22:47:36'),
(28, 2, 'Nepal Clearing House Auction Notice_promoter', NULL, 'md', 'nepal-clearing-house-auction-notice-promoter-18-eoVVQ1SwTWricBbHwSeoLzV8fX2XbPes0JTKnMzK.png', NULL, 0, '2021-01-31 22:31:21', '2021-01-31 22:47:40'),
(29, 2, 'Nepal Clearing House Auction Notice_Correction', NULL, 'md', 'nepal-clearing-house-auction-notice-correction-19-gqWnGEztATDvFJMh0M0WNJWWmGZqyMeEhJrVamw9.jpg', NULL, 0, '2021-01-31 22:32:12', '2021-01-31 22:47:44'),
(30, 2, 'Prabhu Insurance_ Auction Notice_promoter', NULL, 'md', 'prabhu-insurance-auction-notice-promoter-20-Y6UH9B8shGD21stGh1PYmnnmnD1CQYRBhXO1iAaV.jpg', NULL, 0, '2021-01-31 22:32:52', '2021-01-31 22:47:46'),
(31, 2, 'Firstmicro Finance Laghubitta Bittiya Sanstha_ Auction promoter Notice', NULL, 'md', 'firstmicro-finance-laghubitta-bittiya-sanstha-auction-promoter-notice-21-Vm8jCe2rEQVueKsgbFkxNZW6DcAM6ShhnjBypkLR.jpg', NULL, 0, '2021-01-31 22:33:18', '2021-01-31 22:47:49'),
(32, 2, 'Prabhu Insurance Promoter_Auction Notice', NULL, 'md', 'prabhu-insurance-promoter-auction-notice-22-ZD0Ox82xcBzweuSW4ij7G7y1VJdXcATHwdmJtN1j.jpg', NULL, 0, '2021-01-31 22:33:50', '2021-01-31 22:48:35'),
(33, 2, 'Aarambha Chautari Laghubitta Bittiya Sanstha Ltd', NULL, 'md', 'aarambha-chautari-laghubitta-bittiya-sanstha-ltd-23-7mH4Ewh4lacSE3ifSLDlJs3XPtFDAlnb91oitcxL.jpg', NULL, 0, '2021-01-31 22:34:02', '2021-03-15 14:41:48'),
(34, 2, 'HAPPY NEW YEAR 2021', NULL, 'md', 'happy-new-year-2021-24-LNAURvAAYemY95jaVD4DFOaOEVHVer4717k6BdyN.jpg', NULL, 0, '2021-01-31 22:34:13', '2021-01-31 22:48:32'),
(35, 2, 'Notice of Unclaimed dividend_MNBBL', NULL, 'md', 'notice-of-unclaimed-dividend-mnbbl-25-B16XlxY3Np3Msvy5Q5Z2NnqMcjmhBalPndJpNZ63.jpg', 'https://www.muktinathcapital.com/uploads/banners/notice-of-unclaimed-dividend-mnbbl-25-B16XlxY3Np3Msvy5Q5Z2NnqMcjmhBalPndJpNZ63.jpg', 1, '2021-01-31 22:34:25', '2021-03-19 16:38:36'),
(36, 2, 'Demat form', NULL, 'md', 'demat-form-26-JtgdjX7MxqFrZyXFKktiRtbo0DxxY6FvEi4xy7Xv.jpg', 'https://muktinathcapital.dematservice.com/Demataccount', 1, '2021-01-31 22:34:36', '2021-02-09 21:10:40'),
(37, 2, 'Lumbini Bikas Bank Limited Dividend Rejection List- F/Y 2076/77', NULL, 'md', 'lumbini-bikas-bank-limited-dividend-rejection-list-27-weWiKFTf3yC1tteLGmgt4323uTGRzjnlaTmfsKd3.jpg', 'https://www.muktinathcapital.com/uploads/banners/lumbini-bikas-bank-limited-dividend-rejection-list-27-weWiKFTf3yC1tteLGmgt4323uTGRzjnlaTmfsKd3.jpg', 1, '2021-01-31 22:34:49', '2021-03-19 16:36:59'),
(38, 2, 'Firstmicro Finance Laghubitta Bittiya Sanstha_ Auction promoter Notice', NULL, 'md', 'firstmicro-finance-laghubitta-bittiya-sanstha-auction-promoter-notice-ukaHH2OAvu69ZMOioIq1xK9RHeUQv13afLZpk9JB.jpg', 'https://www.muktinathcapital.com/uploads/banners/firstmicro-finance-laghubitta-bittiya-sanstha-auction-promoter-notice-ukaHH2OAvu69ZMOioIq1xK9RHeUQv13afLZpk9JB.jpg', 1, '2021-03-15 14:28:12', '2021-03-19 16:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_document`
--

CREATE TABLE `cl_multiple_document` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int NOT NULL DEFAULT '0',
  `key_string` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_multiple_document`
--

INSERT INTO `cl_multiple_document` (`id`, `post_id`, `key_string`, `title`, `document`, `ordering`, `created_at`, `updated_at`) VALUES
(3, 25, 'tu7oTVNWwXgI9zhLDvT8T4hmZhiePN1pCwyAc8yi', 'DP Rejection List', 'dp-rejection-list-5ff1670fd8ba4.pdf', 3, '2021-01-03 06:41:19', '2021-01-03 06:41:19'),
(4, 26, 'LvLvef9FAKPxqfdblmzJEd2vKDw3M8shxf2xpeEz', 'RTS Rejection List', 'rts-rejection-list-5ff167302d73f.pdf', 4, '2021-01-03 06:41:52', '2021-01-03 06:41:52'),
(5, 12, 'p5lK4KQ1XTWrEeQh9735d0yoHkTsB9jIQs1oi1ag', 'Account Close Form', 'account-close-form-5ff2ff04e6913.pdf', 5, '2021-01-04 22:26:56', '2021-01-04 22:26:56'),
(6, 12, 'I7D8Jll3iy038CDgADSbmRGrE4SDg9b4RrXydecZ', 'Account BO to BO Transfer form_Corporate', 'account-transfer-formbo-bo-corporate-5ff2ff2739daa.pdf', 6, '2021-01-04 22:27:31', '2021-02-09 17:23:27'),
(7, 12, 'ojExWiA3WhYywnZB7eIZfvNkYbT2L2BXtwhvKuZw', 'Bank Details Form', 'bank-details-form-5ff2ff454d93a.pdf', 7, '2021-01-04 22:28:01', '2021-02-09 17:24:08'),
(8, 12, 'RvCz0Vvrk3z14REygJmzHB4vq3javoMdQ6b5HXfl', 'BO Minor TO Individual Form', 'bo-minor-to-individual-form-nepali-604d9cd6a8da8.pdf', 8, '2021-01-04 22:28:26', '2021-03-14 15:04:18'),
(9, 12, 'uWDulVSCp2x3zK1FFnvvsnDL5U2GRPVi801Ioxf8', 'BO to BO Account Transfer form', 'bo-bo-account-transfer-form-5ff2ff80e59a9.pdf', 9, '2021-01-04 22:29:00', '2021-02-09 17:25:33'),
(11, 12, 'CTMV0R95P22zCWwmjw9KbZfL7wgA58rtDoRTDGsi', 'Demat Account Opening Form_Corporate', 'corporate-account-opening-form-5ff302453127a.pdf', 32, '2021-01-04 22:40:49', '2021-03-14 22:28:57'),
(12, 12, 'nFE2CyJPxaemu05RMUfWbV1zIz8iMmytgTLIc1KE', 'Dematerialization Form (DRF Request Form)', 'dematerialization-form-2-5ff302620a6ff.pdf', 12, '2021-01-04 22:41:18', '2021-02-09 17:41:20'),
(13, 12, 'D4emeW7FrggFP43GaVkKfcx2YitL7bOgECZ6JqMX', 'DIS (Debit Instruction Slip)', 'dis-new-6035da238c90f.pdf', 13, '2021-01-04 22:41:37', '2021-02-24 15:31:27'),
(14, 12, 'yDbMwFLSdDFjGw8bbjtgSENV1dqwS3gN8Y5cfrMj', 'Dmat Signature Change Form', 'dmat-signature-change-6035d3197d040.pdf', 14, '2021-01-04 22:41:57', '2021-02-24 15:01:25'),
(15, 12, 'u7ssfl0n1S8oCi0MYh6lTEfB0O5ybt25yMxvxurn', 'Guardians Details Form', 'guardians-details-5ff302a1e56b5.pdf', 15, '2021-01-04 22:42:21', '2021-02-09 17:44:29'),
(16, 12, 'SYj4E9H0sxV69k49NYZt4L7AySNpYWbde9kGVYDv', 'KYC-Form', 'kyc-form-60223a396b462.pdf', 16, '2021-01-04 22:45:17', '2021-02-09 18:16:05'),
(17, 12, 'qCR2Z67Lf1fgIwvvTqsOzomwlq9EeERTUhnGjM9f', 'Meroshare New Registration Form', 'meroshare-new-form1-5ff3038d80b2f.pdf', 17, '2021-01-04 22:46:17', '2021-02-09 17:45:25'),
(18, 12, 'n1gv1BhiYAV0VhchonMwPSsbNM6IESnJO8j9S3Nl', 'Meroshare Renew Form', 'meroshare-renew-online-1-5ff303a3281e6.pdf', 18, '2021-01-04 22:46:39', '2021-02-09 17:46:17'),
(19, 12, '46o1R4Hy1WYAPJsAtYadcM1G87CBfr6Opc3CXjNy', 'Name/Citizenship Correction Form', 'name-correction-5ff303bcca2f7.pdf', 19, '2021-01-04 22:47:04', '2021-02-10 15:46:11'),
(20, 12, 'MS2dBGqsqZhTmcddzGYQZlbXEMrbS9tuIZr4wwqP', 'Demat Account Opening Form_Individual', 'new-demat-account-form-60223870afed0.pdf', 33, '2021-01-04 22:48:51', '2021-03-14 22:28:21'),
(21, 12, '5G2HeQvXRSpCJc9dWPfoGFFnGj3pWWFt4oY4HIpJ', 'Personal Verification Form', 'personal-verification-form-5ff304933c212.pdf', 11, '2021-01-04 22:50:39', '2021-03-14 22:25:31'),
(22, 13, 'vguxjLlUJQvUEzs2aXdg1aQ6wXxfk0QhZTnBGLeU', 'Application for Notice publish', 'application-for-notice-publish-5ff304d41ce3b.pdf', 22, '2021-01-04 22:51:44', '2021-01-04 22:51:44'),
(23, 13, '504n5bQkvQbASnBx9qEiUGnEMacRonTq1EkSrV4B', 'Bonus share Credit Form', 'bonus-share-credit-form-5ff304e7e419a.pdf', 23, '2021-01-04 22:52:03', '2021-01-04 22:52:03'),
(24, 13, '3HWqmJYMH47Av9vmCQWRj3ih9I8M8xb9UUqA7Qxi', 'Ghalemdi Local Share Dematerialization Form', 'ghalemdi-local-share-dematerialization-form-5ff304fa0d27e.pdf', 24, '2021-01-04 22:52:22', '2021-02-09 20:04:56'),
(25, 14, 'p9CXncaispw5l9wAi7aa1cJvNcK082lVDSXiW6sP', 'Meroshare New Registration Form', 'meroshare-new-form1-5ff30559aa6c4.pdf', 25, '2021-01-04 22:53:57', '2021-02-09 20:08:54'),
(26, 14, 'N52FfU2Yrty0guPrlSCz1oP5Fi71B1XQcuVNvGTw', 'Meroshare Password Reset', 'meroshare-password-reset-5ff3057a2b6c8.pdf', 26, '2021-01-04 22:54:30', '2021-01-04 22:54:30'),
(27, 14, '7Cr49prWBcIuYz5NGzMRRqSzVALdI3RTXxwbA5SN', 'Meroshare Renew Form', 'meroshare-renew-online-1-5ff305eaca13c.pdf', 27, '2021-01-04 22:56:22', '2021-02-09 20:09:14'),
(28, 15, 'jSAIV52c49Q0p8eatC3129afGaRZwwO8A8S7UIM4', 'Prospectus of Ghalemdi Hydro Limited', 'prospectus-of-ghalemdi-hydro-limited-5ff30658f20fd.pdf', 28, '2021-01-04 22:58:12', '2021-01-04 22:58:12'),
(29, 15, 'HUAluOBawAy2BXkwm817zI4KtMixu582Mvoz2JnF', 'Prospectus of Muktinath Bikas Bank', 'prospectus-of-muktinath-bikas-bank-5ff30673c0052.pdf', 29, '2021-01-04 22:58:39', '2021-01-04 22:58:39'),
(30, 16, 'v4aIrZt3cvWJ2U4Vsf8xfdTtqxaJIt7RJr1eKBdX', 'Muktinath Rightshare Application form', 'muktinath-rightshare-application-form-5ff30742bc39a.pdf', 30, '2021-01-04 23:02:06', '2021-01-04 23:02:06'),
(31, 16, 'UXrPEGCM2qZgYxNgH4EmHUqQ8EfGTAGYzA6ry34W', 'Renounce Form (Anusuchi-11) of Muktinath Bikas Bank', 'renounce-form-anusuchi-11-of-muktinath-bikas-bank-5ff30754ac5e0.pdf', 31, '2021-01-04 23:02:24', '2021-01-04 23:02:24'),
(44, 32, 'mFuv1bZCrSNaxiPnC4x9vvsQhlpQCH0aiDZD5mCL', 'Aahawan Patra_Muktinath Bikas Bank', 'aahawan-patra-muktinath-bikas-bank-5ff30ba9b4e7a.pdf', 32, '2021-01-04 23:20:53', '2021-01-04 23:20:53'),
(45, 32, 'shq6iDsHutKdoqYjtE0N05kIHIUHkJ4WjyeIJYCc', 'Bibaran Patra_Muktinath', 'bibaran-patra-muktinath-5ff30bc13c17d.pdf', 33, '2021-01-04 23:21:17', '2021-01-04 23:21:17'),
(46, 33, 'n1hhf6WFhNqjjMrkWZTqElffKzbshLv7IjOXVi0A', 'Aahwanpatra_ghalemdi_Public', 'aahwanpatra-ghalemdi-public-5ff30c36bed78.pdf', 34, '2021-01-04 23:23:14', '2021-01-04 23:23:14'),
(47, 34, 'meILa3UyCG08lv9z9E0LGGqasMHlDbOpbmnTDyH0', 'Aarambha Chautari Laghubitta Bittiya Sanstha Ltd', 'aarambha-chautari-laghubitta-bittiya-sanstha-ltd-5ff30cd544d23.jpg', 35, '2021-01-04 23:25:53', '2021-01-04 23:25:53'),
(48, 35, 'RzV9Dj9MlrSIgBB3dkk3osfpCY22LdInoVlet7L5', 'Auction allotment notice of Muktinath Bikas Bank', 'auction-allotment-notice-of-muktinath-bikas-bank-5ff30d44a0956.jpg', 36, '2021-01-04 23:27:44', '2021-01-04 23:27:44'),
(49, 36, 'sB3EXaRPmsdXobFDrR8j15JFOcpQb0OaYMnFqJLy', 'Auction notice of Muktinath Bikas Bank', 'auction-notice-of-muktinath-bikas-bank-5ff30dc459533.jpg', 37, '2021-01-04 23:29:52', '2021-01-04 23:29:52'),
(50, 37, 'wdHOHp5bPgoCMq5EU3OroDisYYL3jwma2NMhZ0VS', 'Auction Opening notice of Muktinath Bikas Bank', 'auction-opening-notice-of-muktinath-bikas-bank-5ff30e2bc7130.jpg', 38, '2021-01-04 23:31:35', '2021-01-04 23:31:35'),
(51, 38, 'KQPSqHVj6KJGwiiRNkT9kK2BVDljzkCLQQQIepUs', 'DEMAT-RENEW-NOTICE-2077', 'demat-renew-notice-2077-5ff30e67b2fda.jpg', 39, '2021-01-04 23:32:35', '2021-01-04 23:32:35'),
(52, 39, '5LpvRocMvzG0LBN7w8Pw4AhSzdg7ORGiszC8Rt8I', 'Firstmicro-Finance-Laghubit', 'firstmicro-finance-laghubit-5ff30eb0bb46d.jpg', 40, '2021-01-04 23:33:48', '2021-01-04 23:33:48'),
(53, 40, 'ESyogKoguTeCq3A4FtkiUMEzTILHCtJkK1n7Zx11', 'Lumbini Bikas Bank Bonus Tax', 'lumbini-bikas-bank-bonus-tax-5ff30efbdc669.jpg', 41, '2021-01-04 23:35:03', '2021-01-04 23:35:03'),
(54, 41, 'LeVvoEG22CL8teOKpoexGATJeYDD6nOFRuMmwusk', 'Div final', 'div-final-5ff30f314e38d.pdf', 42, '2021-01-04 23:35:57', '2021-01-04 23:35:57'),
(55, 41, 'pxbPYf5XsdNWnCrK3oertTdI9Ri8UwhCgGAtoZX4', 'Dividend-Notice-@-aarthik-0', 'dividend-notice-at-aarthik-0-5ff30f427d507.jpg', 43, '2021-01-04 23:36:14', '2021-01-04 23:36:14'),
(56, 42, 'ETyyEhXdmLaoTDNbCSaLYkRjshgSj7WwhMmYmUfc', 'Nepal-Clearing-House', 'nepal-clearing-house-5ff30f791359a.jpg', 44, '2021-01-04 23:37:09', '2021-01-04 23:37:09'),
(57, 43, 'jLoYSrg4Rved98vNP9wYEx1FQz2KgoMV7v9VkJOV', 'Nepal Clearing House Auction Notice_promoter', 'nepal-clearing-house-auction-notice-promoter-5ff30fbb9408e.png', 45, '2021-01-04 23:38:15', '2021-01-04 23:38:15'),
(58, 45, 'LREguBVIKIYLLfcqk8maaLJnHrObTpObYKfoEkB6', 'COVID-NOTICE2', 'covid-notice2-5ff31010f10f6.jpg', 46, '2021-01-04 23:39:40', '2021-01-04 23:39:40'),
(59, 46, 'YXybZmuhZr9rXlUvmmbQdEG9tjdT6ZlCNOPS0TXr', 'Prabhu Insurance Auction promoter Notice', 'prabhu-insurance-auction-promoter-notice-5ff3104b7ba23.jpg', 47, '2021-01-04 23:40:39', '2021-01-04 23:40:39'),
(60, 47, 'MGXeVDCd3jxSoMCsd80gpGwGuVPRPGJIAebj5P0G', 'Prabhu Insurance Promoter_Auction Notice', 'prabhu-insurance-promoter-auction-notice-5ff3109c7bc68.jpg', 48, '2021-01-04 23:42:00', '2021-01-04 23:42:00'),
(61, 50, 'Ucn5sYjBQQXtJ0ap6wI27IO1a3rTYoJZ9BN9yVnV', 'Share Auction Notice Publish', 'share-auction-notice-publish-5ff31128186f3.pdf', 49, '2021-01-04 23:44:20', '2021-01-04 23:44:20'),
(62, 52, 'JwsNOZejN7uuMlmYJUTqBmr1Zut8T2UzdtWOzQqJ', 'Past Muktinath Capital Staff', 'past-muktinath-capital-staff-5ff44449c43d5.jpg', 50, '2021-01-05 21:34:45', '2021-01-05 21:34:45'),
(63, 69, '6KjEzz5kmvmS3KCDI8RpWT9HbVNYYHaioJyR2gsS', 'Muktinath Bikas Bank Ltd. Dividend Notice', 'div-final-601795d79bb61.pdf', 51, '2021-02-01 16:32:03', '2021-02-01 16:32:03'),
(64, 62, 'GnqxbKbwpR8HfVgzqVpr1vtBVxxvhV7Waw0ioXtz', 'Dividend Rejection List MNBBL', 'dividend-rejection-list-mnbbl-6023d0d548bf4.pdf', 52, '2021-02-10 23:10:57', '2021-02-10 23:10:57'),
(65, 63, 'lpMFq7iOH1wcPdadfbxDea32aYYssahi5UOkz0Pr', 'LBBL_Reject', 'lbbl-reject-6023d0f3e04d8.pdf', 53, '2021-02-10 23:11:27', '2021-02-10 23:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_image`
--

CREATE TABLE `cl_multiple_image` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_multiple_image`
--

INSERT INTO `cl_multiple_image` (`id`, `post_id`, `file_name`, `created_at`, `updated_at`) VALUES
(1, 157, '1-EBN0wMFInm7nMkXEBI57UdRJxjuMYwYfWMuzKb6P.jpg', '2020-10-09 09:36:23', '2020-10-09 09:36:23'),
(2, 157, '2-GvQ649T9NnQTg0lFAfgisXHsNuK2apjr5i5Jdnhm.jpg', '2020-10-09 09:36:40', '2020-10-09 09:36:40'),
(3, 157, '3-FHjTGraT19xFnGQl43ipcTGO28HrriSrv02s7Mwf.jpg', '2020-10-09 09:36:46', '2020-10-09 09:36:46'),
(4, 157, '4-Lju7lrMabIa7O6KVO9nRnpaLIJbHlOXxA9Gi1adz.jpg', '2020-10-09 09:36:52', '2020-10-09 09:36:52'),
(5, 157, '5-p9IsUNMUAkPS8a44fLitB92GB9alA0IBnhLnh5Au.jpg', '2020-10-09 09:36:57', '2020-10-09 09:36:57'),
(8, 27, 'slider10-XMF6e5wiQGnwLgEzlHEnvTfpH9EtGUEJaWAXCG0J.jpg', '2020-12-11 07:09:33', '2020-12-11 07:09:33'),
(10, 27, 'slider26-Jz5SNqkqRzbSo6zCTFUAhG55xsh9Z6hunRMpx7o8.jpg', '2020-12-11 07:10:05', '2020-12-11 07:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_video`
--

CREATE TABLE `cl_multiple_video` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_portfolio`
--

CREATE TABLE `cl_portfolio` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `brief` longtext COLLATE utf8mb4_unicode_ci,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int NOT NULL DEFAULT '0',
  `ordering` int NOT NULL DEFAULT '0',
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_portfolio`
--

INSERT INTO `cl_portfolio` (`id`, `title`, `sub_title`, `content`, `brief`, `uri`, `category_id`, `ordering`, `thumbnail`, `icon`, `page_thumbnail`, `banner`, `client_name`, `country`, `service`, `year`, `meta_keyword`, `meta_description`, `external_link`, `status`, `created_at`, `updated_at`) VALUES
(5, 'HAND WOOLEN KNITTING', 'HAND WOOLEN KNITTING', NULL, NULL, 'hand-woolen-knitting', 0, 1, 'img-1122-R5fgSOrq1GrfmgBu4IHtbj5RTHNNNbv8ywUhF0L5.jpg', NULL, NULL, 'img-1125-uQSgxpU6lhuvCe275Om656usPTOMp0BVD54rRv5g.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-10 08:29:51', '2020-12-10 09:16:58'),
(6, 'BEAUTY PARLOR', 'Assistant Beautician', NULL, NULL, 'beauty-parlor', 0, 2, 'img-4032-xW8EFzREMIzoPwaP0byvVv1UlbyTBNKvtzgKffTJ.jpg', '', '', 'img-4029-WXNxxq2bNzlaEE4ODDwiZRSijiJph5wxqxaiDLFZ.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-10 10:54:03', '2020-12-10 10:54:29'),
(7, 'TAILORING', 'TAILORING', NULL, NULL, 'tailoring', 0, 3, 'img-0146-CD03g4BVLxK5uVZJAL3973W1GtIMC4winep9MqXl.jpg', '', '', 'img-0137-WLWH40zrQJbp4buKL24WFahfy8pd8JbEC3clsyp0.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-10 10:56:48', '2020-12-10 10:57:01'),
(8, 'BEADS, PEARL AND CRYSTAL MAKER', 'BEADS, PEARL AND CRYSTAL MAKER', NULL, NULL, 'beads-pearl-and-crystal-maker', 0, 4, 'img-0241-UET6CkK0RiINpJPgEgPQSpLVjeIEvJj4mp43QW7n.jpg', '', '', 'img-47471-wC5NsdBnDaa0knjG3MHfCL8LeaCtT9pOBKkrxHzp.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-10 10:58:44', '2020-12-10 10:58:59'),
(9, 'STEEL FIXTER', 'Assistant Bar Bender & Steel Fixer', NULL, NULL, 'steel-fixter', 0, 5, '3508l300p-1-of-16-min-1024x768-5bTMqRrmjd2InBgg2kQqaMZsae70q5EF7NyFh7Mk.jpg', '', '', '3508l300p-16-z544NBsjYoaQDIzokSridqrQQpr8MRmbAF5HOANx.jpg', '4 Weeks', '208 Hours', 'With basic reading and writing ability', 'Age 19-35', 'Nepali and English', '1:10 ratio', 'Group structure:', '1', '2020-12-10 11:01:02', '2020-12-10 11:05:39'),
(10, 'MASONRY', 'Mason Concrete', NULL, NULL, 'masonry', 0, 6, '3508l300p-7-VqvFQL6Ogy9jIv7tY8pZbrcTVft7PCoJonqDe6XH.jpg', '', '', '3508l300p-7-uT0Nxlggj2ywUzwogLUyBjYPH3Y8bRGlZxm3IG9l.jpg', '4 Weeks', '161 Hours', 'With basic reading and writing ability', 'Age 19-35', 'Nepali and English', '1:10 ratio', '20 participants per training', '1', '2020-12-10 11:12:26', '2020-12-10 11:13:04'),
(11, 'GARMENT', 'Cutting, Tailoring & Dress Making', NULL, NULL, 'garment', 0, 7, 'dsc01831-Cu13uENQYEkIX39tyfkiNnhLRVSPZh7qiioSMjL3.jpg', '', '', '14390695-1158113747579615-5454445060524291748-n-vwaG37dymq0pbrjHdd94NK23YzOapUObhYLZMfjO.jpg', '4 Weeks', '160 Hours', 'At least completed grade 8', NULL, 'Nepali and English', '1:10 ratio', '20 participants per training', '1', '2020-12-10 11:14:18', '2020-12-10 11:23:27'),
(12, 'ELECTRICAL REPAIR AND MAINTENANCE', 'Assistant Electrician', 'izxMOUdVo4w', NULL, 'electrical-repair-and-maintenance', 0, 8, '3508l300p-13-R1z5gnJtb76GbcAMPhgsFtV9KsMOuMcb76lsoEzl.jpg', '', '', '800l300p75q-7-copy-sKvZramFul5E0Cy1cTeOlZ3JVbbCnCn13xvzTmMI.jpg', '4 Weeks', '208 Hours', 'At least completed grade 5 (With basic reading and writing ability)', 'Age 19-35', 'Nepali and English', '1:10 ratio', '20 participants per training', '1', '2020-12-10 11:16:45', '2020-12-10 11:52:11'),
(13, 'SCAFFOLDING', 'Scaffolding Training (3 Weeks)', NULL, NULL, 'scaffolding', 0, 9, '800l300p75q-22-copy-uTd9uw14yv8OOs8bfsidPevTcvJcCSzU5H5e2XAT.jpg', '', '', '800l300p75q-24-copy-0P8FtLOQb9ONkHUCpTIP8yyDsOIMW2Xy6BnG3d4Z.jpg', '3 Weeks', '159 Hours ( 136 hr practical/23 hr theory)', 'With basic reading and writing ability', 'Age 19-35', 'Nepali and English', '1:10 ratio', '20 participants per training', '1', '2020-12-10 11:18:56', '2020-12-10 11:19:16'),
(14, 'PLUMBING', 'Plumber (General)', NULL, 'This program is aimed at training candidates for the job of a “Plumber (General)”, in the ”Plumbing” Sector/Industry and aims at building the following key competencies amongst the learner. This course encompasses four out of four National Occupational Standards (NOS) of “Plumber (General)” Qualification Pack issued by “SSC: Indian Plumbing Skills Council”.', 'plumbing', 0, 10, '3508l300p-1-WKZlP2T0UDGXI73WtZ3hGQ8hPMrnHSKDIpVhioTv.jpg', '', '', '3508l300p-1-Ibi1evK06U38DurY9ga8tVCVoQ0wIbC2LSjy6o2J.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-10 11:20:30', '2020-12-10 11:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `cl_portfolio_categories`
--

CREATE TABLE `cl_portfolio_categories` (
  `id` int NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category_caption` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category_content` text COLLATE utf8mb4_general_ci,
  `uri` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ordering` int NOT NULL DEFAULT '0',
  `thumbnail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_posts`
--

CREATE TABLE `cl_posts` (
  `id` int UNSIGNED NOT NULL,
  `uid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `visiter` int DEFAULT '0',
  `post_date` datetime DEFAULT NULL,
  `post_author` int NOT NULL DEFAULT '1',
  `template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_child` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci,
  `sub_title` text COLLATE utf8mb4_unicode_ci,
  `post_content` longtext COLLATE utf8mb4_unicode_ci,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci,
  `uri` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `post_type` int DEFAULT '0',
  `post_category` int DEFAULT '0',
  `post_parent` int DEFAULT '0',
  `post_order` int DEFAULT '0',
  `home_order` int DEFAULT '0',
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `page_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `associated_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_status` tinyint(1) DEFAULT '0',
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `global_post` tinyint DEFAULT '0',
  `published` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_active` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_draft` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_trashed` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `show_in_home` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `is_password_protected` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comment` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `lang` enum('en','np') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_posts`
--

INSERT INTO `cl_posts` (`id`, `uid`, `visiter`, `post_date`, `post_author`, `template`, `template_child`, `post_title`, `sub_title`, `post_content`, `post_excerpt`, `uri`, `page_key`, `post_type`, `post_category`, `post_parent`, `post_order`, `home_order`, `banner`, `page_thumbnail`, `thumbnail`, `icon`, `page_video`, `meta_keyword`, `meta_description`, `associated_title`, `external_link`, `price`, `post_tags`, `project_status`, `status`, `global_post`, `published`, `is_active`, `is_draft`, `is_trashed`, `show_in_home`, `is_password_protected`, `comment`, `lang`, `created_at`, `updated_at`) VALUES
(144, NULL, 1415, '2024-08-11 09:05:27', 1, 'single', NULL, 'Gynecology', NULL, '<div class=\"text-block mb-50\">\r\n<p class=\"text-block__desc mb-20 font-weight-bold color-secondary\">Gynecologists are specialists who focus on the female reproductive system and specialize in women\'s health. They identify and treat problems with the female reproductive system. Obstetrics, or pregnancy and childbirth, menstruation and reproductive concerns, sexually transmitted infections (STIs), hormone imbalances, and other issues are all dealt with by them. The uterus, fallopian tubes, ovaries, and breasts are all included. A gynecologist can help anyone with female organs. Eighty percent of individuals who see one are between the ages of 15 and 45.</p>\r\n</div>', '<p>Gynecologists are specialists who focus on the female reproductive system and specialize in women\'s health. They identify and treat problems with the female reproductive system.&nbsp;</p>', 'gynecology', '1627646112172273793', 28, 18, 0, 2, 2, '1-13FAdvzXg8KAtNvaK1dJy9bPmKQink8XU9bJArCb.jpg', 'gynecology-byGtFQurrDTJxepuXMekZYrLf22o5RtiB31WScat.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-07-30 04:25:12', '2024-10-22 19:50:34'),
(145, NULL, 1177, '2024-08-11 09:05:28', 1, 'single', NULL, 'Cardiology', NULL, '<p>Cardiology is a medical speciality and a subspecialty of internal medicine that deals with cardiac problems. It covers with problems such congenital heart defects, coronary artery disease, electrophysiology, heart failure, and valvular heart disease, as well as its diagnosis and treatment. Cardiac electrophysiology, echocardiography, interventional cardiology, and nuclear cardiology are all subspecialties of cardiology.</p>', '<p>Cardiology is a medical speciality and a subspecialty of internal medicine that deals with cardiac problems. It covers with problems such congenital heart defects, coronary artery diseases.</p>', 'cardiology', '1627646434642791941', 28, 18, 0, 2, 5, '1-1LaimXQ4jpJpXNWRPsT6210PbSuBxXj6pQ9wXnVg.jpg', 'cardiology-HJzaWn1w2dIkJBuK3w8KzvuPrKdMwl7XhQpIjrD0.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-07-30 04:30:34', '2024-10-23 02:58:02'),
(146, NULL, 1665, '2021-12-09 09:25:09', 1, 'single', NULL, '9 important updates in blood cancer treatment, research', NULL, '<div class=\"post-item mb-0\">\r\n<div class=\"post__body pb-0\">\r\n<div class=\"post__desc\">\r\n<p>September is Blood Cancer Awareness Month.</p>\r\n<p>In conjunction with this observance, Healio highlights important research or treatment related to leukemia, lymphoma, multiple myeloma and myeloproliferative neoplasms.</p>\r\n<ol>\r\n<li>Approximately one-quarter of patients with hematologic malignancies did not produce measurable antibodies after two doses of COVID-19 vaccines.<br /><br /></li>\r\n<li>Convalescent plasma treatment appeared associated with a reduction in 30-day mortality among patients with hematologic malignancies hospitalized for COVID-19.&nbsp;<br /><br /></li>\r\n<li>Eprenetapopt with azacitidine exhibited encouraging activity as posttransplant maintenance therapy for patients with&nbsp;<em>TP53</em>-mutant myelodysplastic syndrome and acute myeloid leukemia.&nbsp;<br /><br /></li>\r\n<li>The FDA approved zanubrutinib for adults with Waldenstr&ouml;m macroglobulinemia.&nbsp;<br /><br /></li>\r\n<li>A free nurse navigation service helped overcome barriers to clinical trial enrollment for patients with blood cancer.&nbsp;<br /><br /></li>\r\n<li>Pembrolizumab (Keytruda, Merck) plus gemcitabine, vinorelbine and liposomal doxorubicin demonstrated substantial efficacy as second-line therapy among patients with relapsed or refractory classical Hodgkin lymphoma.<br /><br /></li>\r\n<li>Teclistamab (JNJ-64007957, Janssen) showed encouraging efficacy among patients with relapsed or refractory multiple myeloma.<br /><br /></li>\r\n<li>Healio spoke with hematologist-oncologists and transplant physicians about improved outcomes with hematopoietic stem cell transplantation, decreases in HSCT complications based on advances in supportive care and conditioning regimens, promising treatments for graft-versus-host disease, and how greater access to transplantation is now potentially providing a curative option for older and frailer populations.<br /><br /></li>\r\n<li>Healio explored how oncologists, geneticists and researchers are collaborating to determine how CRISPR gene editing can produce more effective chimeric antigen receptor T cells that have the potential to be more durable, less costly and available on demand.</li>\r\n</ol>\r\n<p>Source: <a href=\"https://www.healio.com/news/hematology-oncology/20210921/9-important-updates-in-blood-cancer-treatment-research\">https://www.healio.com/news/hematology-oncology/20210921/9-important-updates-in-blood-cancer-treatment-research</a></p>\r\n</div>\r\n</div>\r\n</div>', '<p>September is Blood Cancer Awareness Month.</p>\r\n<p>In conjunction with this observance, Healio highlights important research or treatment related to leukemia, lymphoma, multiple myeloma and myeloproliferative neoplasms.</p>', '9-important-updates-in-blood-cancer-treatment-research', '1627749478160369719', 30, 9, 0, 3, NULL, '3-37RAjk5szyXGu1ouftfsXuHYJoxZKZplsx4U2hJB.jpg', '3-aUgMKbMEuHHoO3CHr0uNsPgjEllLdV8KhTjsFZVi.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-07-31 09:07:58', '2024-10-22 03:00:54'),
(148, NULL, 0, '2024-08-21 08:07:14', 1, 'single', NULL, 'Improving The Quality Of Your Life Through Better Health.', NULL, '<p>we offer a wide range of comprehensive healthcare services to address all aspects of your health. From preventive care and health screenings to specialized treatments and chronic disease management.</p>', NULL, 'improving-the-quality-of-your-life-through-better-health', '1627805204364127301', 27, 23, 0, 5, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-08-01 00:36:44', '2024-08-21 06:22:23'),
(149, NULL, 1302, '2024-08-11 09:05:29', 1, 'single', NULL, 'Pathology', NULL, '<div class=\"text-block mb-50\">\r\n<p class=\"text-block__desc mb-20 font-weight-bold color-secondary\">A neurologist is a medical doctor with specialized training in diagnosing, treating, and managing disorders of the brain and nervous system including, but not limited to, Alzheimer&rsquo;s disease, amyotrophic lateral sclerosis (ALS), concussion, epilepsy, migraine, multiple sclerosis, Parkinson&rsquo;s disease, and stroke.</p>\r\n<p class=\"text-block__desc mb-20\">These teams are made up of pathologists &ndash; who are either doctors with specialist laboratory training or scientists with specialist clinical training &ndash; as well as biomedical scientists and support staff. Doctors, nurses, surgeons and other medical staff look to pathologists and consultant clinical scientists for advice on the nature and seriousness of a patient&rsquo;s illness, making sure they get the most appropriate treatment. We will work with you to develop individualised care plans, including management of chronic diseases.</p>\r\n<p class=\"text-block__desc mb-20\">If we cannot assist, we can provide referrals or advice about the type of practitioner you require. We are committed to being the region&rsquo;s premier healthcare network by providing patient-centered care that inspires clinical and service excellence, making us the first and best choice for our patients, employees, physicians, employers, volunteers and communities.</p>\r\n</div>\r\n<ul class=\"list-items list-unstyled mb-60 pl-40\">\r\n<li>If your blood doesn&rsquo;t clot properly &ndash; it&rsquo;s a haematologist who will conduct the blood tests, confirm if you have haemophilia, and offer treatment.</li>\r\n<li>When there&rsquo;s an outbreak of infection in a hospital, it&rsquo;s a medical microbiologist or infection doctor who will advise the infection control teams and work hard to contain it.</li>\r\n<li>For those having trouble getting pregnant &ndash; it&rsquo;s a reproductive scientist who will investigate, diagnose and, where possible, treat any infertility issues.</li>\r\n</ul>', '<p>Pathology is the study of disease, it is the bridge between science and medicine. Also it underpins every aspect of patient care, from diagnostic testing and treatment.</p>', 'pathology', '1627807906910166574', 28, 18, 0, 6, 6, '4-IwrWxfyddMcQgFR1Dk6X2CKHbmuX4jchrmgFqjzW.jpg', 'pathalogy-laboratory-aQUksiNRa6OWAgpTSX0MF9bV5sNnuGBVYCeW1I9S.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-08-01 01:21:46', '2024-10-20 21:34:59'),
(150, '0', 1390, '2021-08-01 12:04:53', 1, 'template-media-single', 'single', 'Unsure About Wearing A Face Mask? Here’s How And Why', NULL, '<p>Vast numbers of employees now work remotely, and it&rsquo;s too late to develop a set of remote-work policies if you didn&rsquo;t already have one. But there are ways to make the remote-work experience productive and engaging &mdash; for employees and the organization.</p>\r\n<p>&ldquo;At most organizations, scenario planning focuses on the necessary operational responses to ensure business continuity. Few of these plans address the ability or bandwidth of employees to focus on their work,&rdquo; says Brian Kropp, Distinguished Vice President, Research, Gartner.</p>\r\n<p>Use both direct conversations and indirect observations to get visibility into employees&rsquo; challenges and concerns. Use every opportunity to make clear to employees that you support and care for them. To facilitate regular conversations between managers and employees, provide managers with guidance on how best to broach sensitive subjects arising from the COVID-19 pandemic, including alternative work models, job security and prospects, impact on staffing and tension in the workplace.</p>\r\n<p>Make sure employees have the technology they need to be successful, which may be more than just a mobile phone and laptop. For example, if you expect employees to attend virtual meetings, do they have adequate cameras?</p>\r\n<p>Even if you don&rsquo;t have an extensive set of technology and collaborative tools available, you can equip employees to function effectively when remote. But don&rsquo;t just assume that people know how to operate with virtual communications &mdash; or are comfortable in that environment.</p>', NULL, 'unsure-about-wearing-a-face-mask-heres-how-and-why', '1627808221320826066', 30, 11, 0, 7, NULL, '2-2jpspSz4ocV14v7SNvmuCqyHRe2fXfINSiLPUclt.jpg', '2-OZiDf5xdtLU3FglyxZ31IyDSHbCGrGvsgqDbC21D.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-08-01 01:27:01', '2024-10-22 17:47:06'),
(151, NULL, 1186, '2024-08-11 09:05:30', 1, 'single', NULL, 'Gastroenterology', NULL, '<p style=\"text-align: justify;\">The esophagus, stomach, small intestine, colon, and rectum, as well as the pancreas, gallbladder, bile ducts, and liver, are all studied in gastroenterology. It entails a thorough understanding of the gastrointestinal organs\' normal function (physiology), which includes material movement through the stomach and intestine (motility), digestion and absorption of nutrients into the body, waste removal from the system, and the liver\'s role as a digestive organ. Colon polyps and cancer, hepatitis, gastroesophageal reflux disease (heartburn), peptic ulcer disease, colitis, gallbladder and biliary tract illness, nutritional issues, Irritable Bowel Syndrome (IBS), and pancreatitis are all included. In essence, Gastroenterology is the study of all normal and abnormal activities of the digestive organs.</p>', '<p>The esophagus, stomach, small intestine, colon, and rectum, as well as the pancreas, gallbladder, bile ducts, and liver, are all studied in gastroenterology.&nbsp;</p>', 'gastroenterology', '1627814925450828515', 28, 18, 0, 8, 4, '7-prXWjKqOwSYz0A067NZMHY8zviwCbGhA961xvALH.jpg', 'gastroenterology-DZPuPmsBO2XxyZW5fOtVEhxoobX2zZnEyyfnw3GE.png', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-08-01 03:18:45', '2024-10-23 05:39:19'),
(152, NULL, 567, '2021-12-09 09:30:55', 1, 'single', NULL, 'Tips For Eating Healthy When You’re Working From Home', 'Life Style,Nutrition', '<p>Vast numbers of employees now work remotely, and it&rsquo;s too late to develop a set of remote-work policies if you didn&rsquo;t already have one. But there are ways to make the remote-work experience productive and engaging &mdash; for employees and the organization.</p>\r\n<p>&ldquo;At most organizations, scenario planning focuses on the necessary operational responses to ensure business continuity. Few of these plans address the ability or bandwidth of employees to focus on their work,&rdquo; says Brian Kropp, Distinguished Vice President, Research, Gartner.</p>\r\n<p>Use both direct conversations and indirect observations to get visibility into employees&rsquo; challenges and concerns. Use every opportunity to make clear to employees that you support and care for them. To facilitate regular conversations between managers and employees, provide managers with guidance on how best to broach sensitive subjects arising from the COVID-19 pandemic, including alternative work models, job security and prospects, impact on staffing and tension in the workplace.</p>', NULL, 'tips-for-eating-healthy-when-youre-working-from-home', '1627815050614090559', 30, 10, 0, 9, NULL, '3-EFqV8EONbRdOARwgnGVnoFgnEmnJTMt9sFcN9mKN.jpg', '3-jOG2rrsarEZIBZvKfOWCsJnNf4VwYfjnGX57o8Fv.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-08-01 03:20:50', '2024-10-19 21:07:50'),
(153, NULL, 1178, '2024-08-11 09:05:31', 1, 'single', NULL, 'Anesthesiology', NULL, '<p>Anesthesiology is a medical speciality that deals with all aspects of patient care before, during, and after operation. Anesthesia, intensive care medicine, critical emergency medicine, and pain medication are all included. An anesthesiologist is a doctor who specializes in anesthesia. Physician anesthesiologists assess, monitor, and supervise patient care prior to, during, and after surgery, as well as administering anesthetic, managing the Anesthesia Care Team, and assuring patient safety.</p>', '<p>Anesthesiology is a medical speciality that deals with all aspects of patient care before, during, and after operation. Anesthesia, intensive care medicine, critical emergency medicine, and pain medication are all included.&nbsp;</p>', 'anesthesiology', '1628159683409210745', 28, 18, 0, 10, 3, '', 'anesthesiology-T290XoK2TktICwhXahotyW9rkWZraFZnLK1NQ90I.jpeg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-08-05 03:04:43', '2024-10-22 13:58:34'),
(157, NULL, 1544, '2021-12-09 09:30:32', 1, 'single', NULL, 'Nepal reports the first cases of coronavirus’ Omicron variant', NULL, '<p>Nepal has confirmed the first cases of the Omicron variant of coronavirus in the country.</p>\r\n<p>The Ministry of Health and Population&rsquo;s assistant spokesperson Sameer Kumar Adhikari says the new variant that is terrorising the world of late has been detected in a foreigner living in Nepal and a Nepali in contact with the foreigner.</p>\r\n<p>Both of them were already vaccinated against Covid-19, according to him.</p>\r\n<p>The ministry, in&nbsp;<a href=\"https://twitter.com/mohpnep/status/1467764000716775424?s=20&amp;fbclid=IwAR2PJSOCW2I8sVESB-Ej-wsFycqTjaaUpWTKtH-KW4SziaV2Hs_-sJjfLAE\" target=\"_blank\" rel=\"noreferrer noopener nofollow\" data-type=\"URL\" data-id=\"https://twitter.com/mohpnep/status/1467764000716775424?s=20&amp;fbclid=IwAR2PJSOCW2I8sVESB-Ej-wsFycqTjaaUpWTKtH-KW4SziaV2Hs_-sJjfLAE\">a statement</a>, says the 66-year-old foreigner had come to Nepal via air on November 19. He was allowed into the country as he had a negative PCR test report.</p>\r\n<p>However, the person and another 71-year-old Nepali in the contact showed symptoms of Covid-19 and hence had come for another test on November 23. Further, their gene sequencing at the National Public Health Laboratory in Teku had shown the new Omicron variant yesterday.</p>\r\n<p>The ministry says both the persons do not have any symptoms now and are under medical surveillance.</p>\r\n<p>The government, tracing their contacts, had tested 66 other people, but all of them showed negative results, according to the ministry.</p>\r\n<p>Meanwhile, the ministry says it has strengthened&nbsp;<a href=\"https://english.onlinekhabar.com/omicron-fears-nepal-bans-entry.html\" target=\"_blank\" rel=\"noreferrer noopener\" data-type=\"post\" data-id=\"481859\">surveillance</a>&nbsp;following the detection of the new Omicron variant.</p>\r\n<p>&nbsp;</p>\r\n<p>Source: <a href=\"https://english.onlinekhabar.com/nepal-omicron-first-case.html\">https://english.onlinekhabar.com/nepal-omicron-first-case.html</a></p>', NULL, 'nepal-reports-the-first-cases-of-coronavirus-omicron-variant', '1628414224546345741', 30, 10, 0, 1, 1, '', 'omicron-variant-pixabay-9kaWjInvuIcSWfzanS5KXn43UpVLgPBB46CQDUzb.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-08-08 01:47:04', '2024-10-21 09:04:34'),
(162, NULL, 1674, '2024-08-11 09:05:34', 1, 'single', NULL, 'Urology', NULL, '<p style=\"text-align: justify;\">Urology is a branch of medicine that deals with illnesses of the urinary tract in both men and women (kidneys, ureters, bladder and urethra). It also covers the male organs that are capable of producing children (penis, testes, scrotum, prostate, etc.). Urologic health is crucial since health disorders in these bodily parts can affect everybody. Urology is a surgical specialization. A urologist is a doctor who specializes in surgery as well as internal medicine, pediatrics, gynecology, and other areas of medicine. This is due to the fact that urologists deal with a wide spectrum of clinical issues.</p>', '<p>Urology is a branch of medicine that deals with illnesses of the urinary tract in both men and women (kidneys, ureters, bladder and urethra).</p>', 'urology', '163635062751402738', 28, 18, 0, 20, 7, '', 'urology-5hciP8wWT1CXofQpzItmGkINQ0ltsZ2fGIN09cSW.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-11-08 10:05:27', '2024-10-19 10:56:43'),
(163, NULL, 2945, '2024-08-11 09:05:26', 1, 'single', NULL, 'Haematology', NULL, '<p style=\"text-align: justify;\">People with blood diseases are looked after and treated by the department of haematology. Blood cancers (leukemia, lymphoma, multiple myeloma), disorders associated with low haemoglobin (various types of anemia, including thalassemia and sickle cell anemia), bleeding disorders (haemophilia and others), and other rare diseases such as hemoglobinopathies, primary immunodeficiency, and others are all treated in the department.</p>\r\n<p style=\"text-align: justify;\"><br />Our hospital\'s haematologists study the components of blood &ndash; red cells, white cells, and platelets &ndash; to aid in the diagnosis and monitoring of blood illnesses such as anemias, leukemias, lymphomas, and malaria; and to evaluate blood coagulation abnormalities such as haemophilia and thrombophilia.</p>\r\n<p style=\"text-align: justify;\">The following are examples of anomalies in the blood count.<br />Low haemoglobin or red blood cells cause anemia.<br />Leucopenia is a condition in which the number of white blood cells in the body is abnormally low.<br />Thrombocytopenia is defined as a low platelet count.<br />Polycythemia is a condition in which there are too many red blood cells in the body.<br />Leucocytosis is a condition in which there are too many white blood cells in the body.<br />Thrombocytosis is a condition in which there are too many platelets in the blood.</p>\r\n<p style=\"text-align: justify;\">Many of the clients who are referred to these clinics are concerned that they have cancer. While this may be true for some individuals, the vast majority of those sent to the general clinic do not have cancer. All patients visited in the clinic will meet with a consultant, and the majority will do so on their initial visit.</p>\r\n<p style=\"text-align: justify;\">Additional tests are frequently required to aid in the diagnosis. Additional blood tests may be required, and some individuals may additionally require X-rays, scans, and/or a bone marrow test. If these tests are ordered, the results will be presented to the patient. Many patients can then be dismissed from the Haematology Department, but others will require more investigation and treatment in a clinic dedicated to the kind of sickness diagnosed.</p>\r\n<p style=\"text-align: justify;\">Red marrow and yellow marrow are the two main forms of bone marrow tissue.<br />The bone marrow of the body can be affected by disease. Damage or sickness can cause a reduction in blood cell production. A bone marrow transplant may be necessary to restore the body\'s ability to manufacture enough healthy blood cells.</p>', '<p>People with blood diseases are looked after and treated by the department of haematology. Blood cancers (leukemia, lymphoma, multiple myeloma), disorders associated with low haemoglobin.</p>', 'haematology', '1636350753500150593', 28, 18, 0, 1, 1, '', 'haematology-1doWyG1fZByu4GdrJun4yUkdHpmjzmPUIi9QyN4Y.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2021-11-08 10:07:33', '2024-10-23 06:10:55'),
(164, NULL, 0, '2024-08-11 09:05:36', 1, 'single', NULL, 'OPD', NULL, NULL, NULL, 'opd', '1639039144197453610', 28, 18, 0, 21, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-12-09 12:54:04', '2024-08-11 07:21:22'),
(165, NULL, 0, '2024-08-11 09:05:37', 1, 'single', NULL, 'IPD', NULL, NULL, NULL, 'ipd', '1639039152423825340', 28, 18, 0, 22, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-12-09 12:54:12', '2024-08-11 07:21:26'),
(166, '0', 0, '2021-12-09 08:39:17', 1, 'single', NULL, 'Emergency', NULL, NULL, NULL, 'emergency', '163903916370553524', 28, 0, 0, 23, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-12-09 12:54:23', '2021-12-09 13:33:20'),
(167, '0', 1, '2021-12-09 08:39:24', 1, 'single', NULL, 'X-Ray & Lab', NULL, NULL, NULL, 'xray-lab', '1639039176243694626', 28, 0, 0, 24, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-12-09 12:54:36', '2021-12-09 13:33:21'),
(168, NULL, 543, '2024-08-11 09:05:32', 1, 'single', NULL, 'Pulmonology', NULL, '<p>Pulmonology is a branch of medicine that focuses on the respiratory system\'s health. Everything from asthma to tuberculosis is treated by pulmonologists. These doctors diagnose and treat problems that affect men, women, and children\'s respiratory systems.</p>', '<p>Pulmonology is a branch of medicine that focuses on the respiratory system\'s health. Everything from asthma to tuberculosis is treated by pulmonologists.&nbsp;</p>', 'pulmonology', '1639039920379226905', 28, 18, 0, 10, 6, '', 'pulmonology-v454oCS5cLYMFeMgD7VaREJKI4hreHtvBQyEGUpT.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-12-09 13:07:00', '2024-10-19 01:41:31'),
(169, NULL, 790, '2024-09-02 08:02:44', 1, 'single', NULL, 'DR PANKAJ JOSHI', 'MD Anesthesiology [NMC No. 9269]', NULL, NULL, 'dr-pankaj-joshi', '1639728626284569250', 29, 0, 0, 25, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2021-12-17 12:25:26', '2024-10-20 07:49:37'),
(170, NULL, 614, '2022-01-31 05:27:25', 1, 'single', NULL, 'जसले बनाए नेपालमा ‘बोन म्यारो’ प्रत्यारोपणलाई संसारकै सस्तो थप सामग्री', NULL, '<p>धेरै भएकै छैन, जम्मा दशकअघिको कुरा हो। बोनम्यारो प्रत्यारोपण गर्नुपर्ने बिरामीले भारतै धाउनुपर्थ्यो। स्वदेशी अस्पतालमा यो सुविधा थिएन। तर, जब डा. विशेष पौड्याल पढाइ सकेर फर्किए, परिस्थिति केही बदलियो। क्लिनिकल हेमाटोलोजिस्ट पौड्यालले सन् २०१२ मा यहीं बोनम्यारो प्रत्यारोपण सेवा शुरू गरे। त्यसयता एक सय जनाभन्दा बढीलाई नयाँ जीवन दिइसके, सस्तो शुल्कमा।</p>\r\n<p>काठमाडौंको निजामती कर्मचारी (सिभिल) अस्पतालमा कार्यरत पौड्याल नेपालमा बोनम्यारो प्रत्यारोपण गर्ने एक्ला चिकित्सक हुन्। तर, यो सेवा स्थापनाका पछाडि निकै सङ्घर्ष लुकेको छ। मानव जीवनसँग जोडिएको संवेदनशील विषयलाई सरकारले प्राथमिकता नदिंदा एउटा नागरिक कतिसम्म निरीह बन्दो रहेछ, यस दौरान नजिकबाट अनुभव गरे डा. पौड्यालले।</p>\r\n<p><br />सन् २००७ मा चाइना मेडिकल युनिभर्सिटीबाट हेमाटोलोजीमा एमडी पूरा गरेका उनले छात्रवृत्तिमा पढेकाले दुई वर्ष सरकारी अस्पतालमा काम गर्नैपर्थ्यो। उनी वीर अस्पतालमा खटिए। त्यहाँ उनी हेमाटोलोजीका सबै सेवा दिन चाहन्थे, तर सहयोग पाएनन्। अनि भारतको भेलोरस्थित क्रिश्चियन मेडिकल कलेजमा &lsquo;फेलोसिप&rsquo; गर्न गए।<br /><br /></p>\r\n<p>Source:<a href=\"https://www.himalkhabar.com/news/128077?fbclid=IwAR1ClWFhiHI4wXbWdLqzdUnypClO2gfCwikT8SNsZNh6WKfvxWCl8GuFsuc\"> https://www.himalkhabar.com/news/128077?fbclid=IwAR1ClWFhiHI4wXbWdLqzdUnypClO2gfCwikT8SNsZNh6WKfvxWCl8GuFsuc</a></p>', NULL, '1643605987404999098', '1643605987404999098', 30, 10, 0, 26, NULL, '', 'unnamed-CyN46IasGRAF21Qv4p8VL4toCCB0nb6y4iulGGlH.png', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '1', '0', '0', 'en', '2022-01-31 09:28:07', '2024-10-17 19:45:21'),
(171, NULL, 32, '2024-08-21 06:22:44', 1, 'single', NULL, 'Treatment of Blood Related Disorders', NULL, '<p>Expert consultations with board-certified cardiologists to assess</p>', NULL, 'treatment-of-blood-related-disorders', '1723374948881677766', 28, 19, 0, 27, NULL, '', 'icon-service-page-1-svUtUDaJMufbB6NUlkWz60BDyOKIoow2LZv7S2PA.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:30:48', '2024-10-22 22:02:30'),
(172, NULL, 29, '2024-08-21 06:21:10', 1, 'single', NULL, 'Treatment of Blood Cancer', NULL, '<p>Comprehensive tests to analyze body fluids, aiding in the diagnosis and monitoring of organ function and metabolic disorders.</p>', NULL, 'treatment-of-blood-cancer', '1723374968175778634', 28, 19, 0, 28, NULL, '', 'icon-service-page-2-yMgwdW4Bkgxtpw86hCqJpydTetvZCgUxgWW3X30g.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:31:08', '2024-10-22 21:34:51'),
(173, NULL, 38, '2024-08-21 06:22:46', 1, 'single', NULL, 'Bone Marrow Transplantation', NULL, '<p>Our Laboratory Analysis Services offer a comprehensive range of advanced tests to aid in the accurate diagnosis. metabolic disorders.</p>', NULL, 'bone-marrow-transplantation', '1723374983669097403', 28, 19, 0, 29, NULL, '', 'icon-service-page-3-FEEeGnzyqdeMXXA1snr0tHkKMl48QFsdO8xMcgHS.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:31:23', '2024-10-22 22:01:06'),
(174, '0', 33, '2024-08-11 11:17:37', 1, 'single', NULL, 'Blood Tests', NULL, NULL, NULL, 'blood-tests', '1723375132852496657', 28, 20, 0, 30, NULL, '', 'icon-specialist-1-lwoytQXzOX31eb2hBefXjwDZS8iIlVee6FZyZRKI.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:33:52', '2024-10-22 21:42:35'),
(175, '0', 28, '2024-08-11 11:19:00', 1, 'single', NULL, 'Transfusions', NULL, NULL, NULL, 'transfusions', '1723375188422225262', 28, 20, 0, 31, NULL, '', 'icon-specialist-2-1Yy4Oixs3UF2uAVSl19YuVt9dvtZ3hhYpVf0iGaS.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:34:48', '2024-10-22 21:41:36'),
(176, NULL, 28, '2024-08-21 06:31:36', 1, 'single', NULL, 'Chemotherapy and Targeted Therapy', NULL, NULL, NULL, 'chemotherapy-and-targeted-therapy', '1723375215750349507', 28, 20, 0, 32, NULL, '', 'icon-specialist-3-SLo0gToQIqiouH58PR9Ok3QtBwHR8oeFrDbS0kRk.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:35:15', '2024-10-22 21:47:54'),
(177, NULL, 31, '2024-08-21 06:31:40', 1, 'single', NULL, 'Bone Marrow and Stem Cell Transplantation', NULL, NULL, NULL, 'bone-marrow-and-stem-cell-transplantation', '172337522616132999', 28, 20, 0, 33, NULL, '', 'icon-specialist-4-ug9v1yaep7OfAcDawl5CeSo7lxjXSNfqFDJopi8Z.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:35:26', '2024-10-22 21:38:50'),
(178, NULL, 31, '2024-08-21 06:31:43', 1, 'single', NULL, 'Iron Chelation Therapy', NULL, NULL, NULL, 'iron-chelation-therapy', '1723375237967376371', 28, 20, 0, 34, NULL, '', 'icon-medical-service-5-I09aHoHTglvVjjvgIETWJFHIUxy7CdKz11CDM2VE.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:35:37', '2024-10-22 21:31:01'),
(179, NULL, 33, '2024-08-21 06:33:37', 1, 'single', NULL, 'Anticoagulation Therapy', NULL, NULL, NULL, 'anticoagulation-therapy', '1723375248713863228', 28, 20, 0, 35, NULL, '', 'icon-medical-service-2-JyXSUzUSYgx3boGcrY4pqfC4JOgrtL41Nt43IJxP.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:35:48', '2024-10-22 21:43:29'),
(180, NULL, 29, '2024-08-21 06:31:47', 1, 'single', NULL, 'Immunotherapy', NULL, NULL, NULL, 'immunotherapy', '1723375258175089059', 28, 20, 0, 36, NULL, '', 'icon-medical-service-1-gAeqoARiwBL1BWcAmQDVfUjJPrc62tMa8Vks0rzG.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:35:58', '2024-10-22 21:52:51'),
(181, NULL, 29, '2024-08-21 06:31:48', 1, 'single', NULL, 'Supportive Care', NULL, NULL, NULL, 'supportive-care', '1723375267115834121', 28, 20, 0, 37, NULL, '', 'icon-medical-service-4-0NHbZ28ZdsVgSKGcNJfOIYa7pIKO54qShcf1ZHWD.svg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-11 09:36:07', '2024-10-22 21:40:58'),
(183, NULL, 0, '2024-08-21 08:21:06', 1, 'single', NULL, 'To provide comprehensive, high quality care for all blood-related disorders, ensuring accessibility and affordability for all patients.', NULL, '<p>To provide comprehensive, high quality care for all blood-related disorders, ensuring accessibility and affordability for all patients.</p>', NULL, 'to-provide-comprehensive-high-quality-care-for-all-bloodrelated-disorders-ensuring-accessibility-and-affordability-for-all-patients', '172422793377975839', 27, 24, 0, 38, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-21 06:27:13', '2024-08-21 06:36:14'),
(184, NULL, 0, '2024-08-21 08:21:18', 1, 'single', NULL, 'To enhance patient outcomes and quality of life through personalized treatment plans, advanced therapies, and compassionate care.', NULL, '<p>To enhance patient outcomes and quality of life through personalized treatment plans, advanced therapies, and compassionate care.</p>', NULL, 'to-enhance-patient-outcomes-and-quality-of-life-through-personalized-treatment-plans-advanced-therapies-and-compassionate-care', '1724227958705414016', 27, 24, 0, 39, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-21 06:27:38', '2024-08-21 06:36:28'),
(185, NULL, 0, '2024-08-21 08:21:19', 1, 'single', NULL, 'To create a supportive and enriching workplace that values teamwork, continuous learning, and professional growth.', NULL, '<p>To create a supportive and enriching workplace that values teamwork, continuous learning, and professional growth.</p>', NULL, 'to-create-a-supportive-and-enriching-workplace-that-values-teamwork-continuous-learning-and-professional-growth', '1724227974451087021', 27, 24, 0, 40, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-21 06:27:54', '2024-08-21 06:36:34'),
(186, NULL, 0, '2024-08-21 08:21:20', 1, 'single', NULL, 'To uphold a culture of excellence, integrity, and compassion in all aspects of healthcare services.', NULL, '<p>To uphold a culture of excellence, integrity, and compassion in all aspects of healthcare services.</p>', NULL, 'to-uphold-a-culture-of-excellence-integrity-and-compassion-in-all-aspects-of-healthcare-services', '1724227997912221136', 27, 24, 0, 41, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-21 06:28:17', '2024-08-21 06:36:40'),
(187, NULL, 0, '2024-08-21 08:21:21', 1, 'single', NULL, 'To attract and retain leading hematologists and healthcare professionals by providing opportunities for advanced research and professional development.', NULL, '<p>To attract and retain leading hematologists and healthcare professionals by providing opportunities for advanced research and professional development.</p>', NULL, 'to-attract-and-retain-leading-hematologists-and-healthcare-professionals-by-providing-opportunities-for-advanced-research-and-professional-development', '1724228017396207363', 27, 24, 0, 42, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-21 06:28:37', '2024-08-21 06:36:47'),
(188, '0', 0, '2024-08-21 08:21:55', 1, 'single', NULL, 'To foster a collaborative environment that encourages innovation in blood related treatments and procedures.', NULL, '<p>To foster a collaborative environment that encourages innovation in blood related treatments and procedures.</p>', NULL, 'to-foster-a-collaborative-environment-that-encourages-innovation-in-blood-related-treatments-and-procedures', '1724228541296826555', 27, 24, 0, 43, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-21 06:37:21', '2024-08-21 06:37:21'),
(189, '0', 0, '2024-08-23 08:31:47', 1, 'single', NULL, 'To ensure financial sustainability through strategic investments in cutting-edge medical technologies and facilities.', NULL, '<p>To ensure financial sustainability through strategic investments in cutting-edge medical technologies and facilities.</p>', NULL, 'to-ensure-financial-sustainability-through-strategic-investments-in-cuttingedge-medical-technologies-and-facilities', '1724401919762955158', 27, 24, 0, 44, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-23 06:46:59', '2024-08-23 06:46:59'),
(190, '0', 0, '2024-08-23 08:32:02', 1, 'single', NULL, 'To deliver consistent and transparent returns by maintaining high standards of healthcare delivery and patient satisfaction', NULL, '<p>To deliver consistent and transparent returns by maintaining high standards of healthcare delivery and patient satisfaction</p>', NULL, 'to-deliver-consistent-and-transparent-returns-by-maintaining-high-standards-of-healthcare-delivery-and-patient-satisfaction', '1724401933586222956', 27, 24, 0, 45, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-23 06:47:13', '2024-08-23 06:47:13'),
(191, NULL, 0, '2024-08-23 11:38:25', 1, 'single', NULL, 'Our Goals.', NULL, '<p class=\"wow fadeInUp\" data-wow-delay=\"0.25s\">Our dedicated team of healthcare professionals is committed to providing you and your loved ones with personalized and compassionate healthcare services. We understand the importance of family health.</p>\r\n<ul class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">\r\n<li>To deliver accessible and high-quality treatment for blood-related disorders, ensuring patient satisfaction and improved health outcomes through personalized care.</li>\r\n<li>To lead in pioneering research and innovation in hematology, developing new and effective treatments for blood disorders and cancers.</li>\r\n<li>To invest in state-of-the-art medical technologies and facilities, providing a robust infrastructure for comprehensive blood related healthcare</li>\r\n<li>To create a supportive and enriching environment for healthcare professionals, encouraging continuous learning, collaboration, and excellence in clinical practice in blood related disorders.</li>\r\n</ul>', NULL, 'our-goals', '1724402977132801718', 27, 25, 0, 46, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-23 07:04:37', '2024-08-23 09:53:28'),
(192, NULL, 0, '2024-08-23 11:37:29', 1, 'single', NULL, 'Mission', NULL, '<p>Blood Hospital is committed to providing comprehensive and high-quality care for blood-related disorders within Nepal. The hospital\'s mission is to ensure that all patients suffering from blood diseases, blood cancers, and those needing bone marrow transplants receive world-class treatment without having to seek care abroad. By fostering advanced medical research, adopting cutting-edge technologies, and employing highly skilled professionals, Blood Hospital strives to be a beacon of hope and healing for individuals affected by hematologic conditions in Nepal.</p>', NULL, 'mission', '1724402998990013512', 27, 25, 0, 47, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-23 07:04:58', '2024-08-23 09:53:33'),
(193, NULL, 0, '2024-08-23 11:37:27', 1, 'single', NULL, 'Vision', NULL, '<p>At Blood Hospital, our vision is to be the leading center of excellence for the treatment of blood-related disorders, blood cancers, and bone marrow transplants in Nepal. We aim to provide world-class healthcare services within the country, eliminating the need for patients to seek treatment abroad.</p>', NULL, 'vision', '1724403014125124946', 27, 25, 0, 48, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-23 07:05:14', '2024-08-23 09:53:37'),
(194, '0', 0, '2024-08-25 06:33:51', 1, 'single', NULL, 'Comprehensive Blood-Related Treatments', NULL, '<div>\r\n<div>The Blood Hospital stands out for its comprehensive range of blood-related treatments. This includes specialized&nbsp;care for conditions such as blood cancers, anemia, clotting disorders, and other hematological diseases. The availability of such focused treatments ensures that patients receive targeted and effective care tailored to their specific conditions.</div>\r\n</div>', NULL, 'comprehensive-bloodrelated-treatments', '1724567691110102397', 27, 26, 0, 49, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-25 04:49:51', '2024-08-25 04:49:51'),
(195, '0', 0, '2024-08-25 06:40:34', 1, 'single', NULL, 'State-of-the-Art ICU Facilities', NULL, '<p>The hospital is equipped with state-of the-art Intensive Care Units (ICUs) designed specifically for blood-related treatments. These ICUs are furnished with the latest medical technology, ensuring that patients with critical blood disorders receive the highest level of care. The advanced facilities allow for close monitoring and prompt intervention, significantly improving patient outcomes.</p>', NULL, 'stateoftheart-icu-facilities', '1724568095156706287', 27, 26, 0, 50, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-25 04:56:35', '2024-08-25 04:56:35'),
(196, '0', 0, '2024-08-25 06:41:41', 1, 'single', NULL, 'Sophisticated Laboratory Services', NULL, '<p>A highly sophisticated laboratory dedicated to blood-related diagnostics and research forms the backbone of the hospital&rsquo;s treatment capabilities. The lab is equipped with cutting-edge technology and is staffed by expert technicians and hematologists. This enables accurate and timely diagnosis, which is crucial for effective treatment planning and management.</p>', NULL, 'sophisticated-laboratory-services', '1724568118902485188', 27, 26, 0, 51, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-25 04:56:58', '2024-08-25 04:56:58'),
(197, '0', 0, '2024-08-25 06:42:05', 1, 'single', NULL, 'Highly Skilled and Experienced Team', NULL, '<p>The hospital prides itself on having a team of highly skilled and experienced professionals specializing in blood related treatments. This team includes renowned hematologists, oncologists, lab technicians, and support staff, all of whom bring a wealth of knowledge and expertise to the care of patients. Their combined experience and dedication ensure that patients receive the best possible care and support throughout their treatment journey</p>', NULL, 'highly-skilled-and-experienced-team', '1724568147311149626', 27, 26, 0, 52, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-25 04:57:27', '2024-08-25 04:57:27'),
(198, NULL, 0, '2024-08-25 07:38:37', 1, 'single', NULL, 'Hosiptal Rooms', NULL, '<p>100</p>', NULL, 'hosiptal-rooms', '1724568273952256115', 27, 27, 0, 53, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, 'bed-pulse', NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-25 04:59:33', '2024-08-25 05:54:24'),
(199, NULL, 0, '2024-08-25 07:38:38', 1, 'single', NULL, 'Statisfied Patients', NULL, '<p>78200</p>', NULL, 'statisfied-patients', '1724568293733374308', 27, 27, 0, 54, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, 'thumbs-up', NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-25 04:59:53', '2024-08-25 05:55:28'),
(200, NULL, 0, '2024-08-25 07:38:40', 1, 'single', NULL, 'Machines', NULL, '<p>400</p>', NULL, 'machines', '1724568309696856715', 27, 27, 0, 55, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, 'suitcase', NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-25 05:00:09', '2024-08-25 05:55:46'),
(201, NULL, 0, '2024-08-25 07:42:07', 1, 'single', NULL, 'Years Of Excellences', NULL, '<p>2009</p>', NULL, 'years-of-excellences', '1724568581498016839', 27, 27, 0, 56, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, 'heart-pulse', NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-08-25 05:04:41', '2024-08-25 05:57:13'),
(202, 'https://www.facebook.com/', 10, '2024-09-04 08:01:58', 1, 'single', NULL, 'PROF. DR.BISHESH POUDYAL', 'MBBS, MD, FBMT, FIHTC, FSCT, FBMT, Seniour Consultant Haematologist', '<p>a sdfasdf asdf asdfa sdf</p>', '<p>a sdfas d</p>', 'prof-drbishesh-poudyal', '1725266551893965977', 29, 0, 0, 57, NULL, '', 'binesh-QBqH7IzMh24nhAkiwB6Z8stHQagdJIzDRa196guY.png', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:42:31', '2024-10-20 03:03:36'),
(203, 'https://www.facebook.com/', 6, '2024-09-02 08:42:41', 1, 'single', NULL, 'DR. SAMPURNA TULADHAR', 'MBBS, MD (PATHOLOGY)  [NMC No. 4352]', NULL, NULL, 'dr-sampurna-tuladhar', '1725266581676501582', 29, 0, 0, 58, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:43:01', '2024-10-20 11:09:13'),
(204, NULL, 6, '2024-09-02 08:43:05', 1, 'single', NULL, 'DR. BISHAL POUDEL', 'MBBS, MD (Internal Medicine), Medical Oncology,  [NMC No. 9264]', NULL, NULL, 'dr-bishal-poudel', '1725266607974057672', 29, 0, 0, 59, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:43:27', '2024-10-20 12:20:13'),
(205, 'https://www.facebook.com/', 6, '2024-09-02 08:43:29', 1, 'single', NULL, 'DR. BIDESH BISTA', 'MBBS,MD(INTERNAL MEDICINE),DM (PULMONARY MEDICINE,CRTICAL CARE&SLEEP MEDICINE)  [NMC No. 4883]', NULL, NULL, 'dr-bidesh-bista', '1725266624123119996', 29, 0, 0, 60, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:43:44', '2024-10-20 05:16:06'),
(206, NULL, 6, '2024-09-02 08:43:49', 1, 'single', NULL, 'DR PARAG KARKI', 'Consultant Cardiologist [NMC No. 6611]', NULL, NULL, 'dr-parag-karki', '1725266637203865306', 29, 0, 0, 61, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:43:57', '2024-10-20 09:49:12'),
(207, NULL, 6, '2024-09-02 08:44:16', 1, 'single', NULL, 'DR.ONIKA KARKI', 'MBBS, MD(Obstetrics & Gynaecology) [NMC No. 14425]', NULL, NULL, 'dronika-karki', '1725266684341144099', 29, 0, 0, 62, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:44:44', '2024-10-20 08:07:39'),
(208, 'https://www.facebook.com/', 6, '2024-09-02 08:45:17', 1, 'single', NULL, 'DR SAMEER ARYAL', 'MBBS, MS (Neurosurgeon) [NMC No. 8750]', NULL, NULL, 'dr-sameer-aryal', '1725266728520050769', 29, 0, 0, 63, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:45:28', '2024-10-20 05:28:40'),
(209, NULL, 6, '2024-09-02 08:45:32', 1, 'single', NULL, 'DR. ARUN SIGDEL', 'MBBS, MS Orthopedics & Traumatology [NMC No. 6920]', NULL, NULL, 'dr-arun-sigdel', '1725266745675850645', 29, 0, 0, 64, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:45:45', '2024-10-20 04:51:25'),
(210, NULL, 6, '2024-09-02 08:45:49', 1, 'single', NULL, 'Dr Dipesh Shakya', 'ENT/HEAD, NECK SURGEON  [NMC No. 7840]', NULL, NULL, 'dr-dipesh-shakya', '172526676461414806', 29, 0, 0, 65, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:46:04', '2024-10-20 10:30:05'),
(211, NULL, 6, '2024-09-02 08:46:22', 1, 'single', NULL, 'DR ANANTA SHRESTHA', 'ENDOCRINOLOGIST  [NMC No. 4306]', NULL, NULL, 'dr-ananta-shrestha', '172526678950482088', 29, 0, 0, 66, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:46:29', '2024-10-20 03:22:39'),
(212, NULL, 7, '2024-09-02 08:46:52', 1, 'single', NULL, 'Dr. Rukmani Shahi', 'Medical Officer  [NMC No. 21435]', NULL, NULL, 'dr-rukmani-shahi', '172526682169623379', 29, 0, 0, 67, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:47:01', '2024-10-20 15:00:59'),
(213, 'https://www.facebook.com/', 5, '2024-09-02 08:48:29', 1, 'single', NULL, 'Dr. Tanbir Ikram', 'Medical Officer  [NMC No. 28544]', NULL, NULL, 'dr-tanbir-ikram', '1725266916891362730', 29, 0, 0, 68, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:48:36', '2024-10-20 08:46:26'),
(214, NULL, 5, '2024-09-02 08:48:59', 1, 'single', NULL, 'DR. MANISH GAUTAM', 'GENERAL SURGEON  [NMC No. 13048]', NULL, NULL, 'dr-manish-gautam', '172526694940974264', 29, 0, 0, 69, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:49:09', '2024-10-19 23:36:37'),
(215, NULL, 5, '2024-09-02 08:49:14', 1, 'single', NULL, 'DR PRANAV SHRESTHA', 'OPTHALMOLOGIST  [NMC No. 11589]', NULL, NULL, 'dr-pranav-shrestha', '1725266963240672545', 29, 0, 0, 70, NULL, '', '', '', '', NULL, NULL, NULL, 'https://www.x.com', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:49:23', '2024-10-19 22:50:51'),
(216, 'https://www.facebook.com/', 5, '2024-09-02 08:49:27', 1, 'single', NULL, 'DR Sheelendra Shakya', 'CARDIOLOGIST  [NMC No. 6166]', NULL, NULL, 'dr-sheelendra-shakya', '1725266979618089440', 29, 0, 0, 71, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:49:39', '2024-10-20 01:05:44'),
(217, NULL, 5, '2024-09-02 08:49:43', 1, 'single', NULL, 'DR Pradeep Thakur', 'RADIOLOGIST  [NMC No. 7187]', NULL, NULL, 'dr-pradeep-thakur', '1725266995814188494', 29, 0, 0, 72, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:49:55', '2024-10-20 00:48:26'),
(218, NULL, 5, '2024-09-02 08:49:59', 1, 'single', NULL, 'DR Abhisheh Manandhar', 'RADIOLOGIST  [NMC No. 7584]', NULL, NULL, 'dr-abhisheh-manandhar', '1725267007890596441', 29, 0, 0, 73, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:50:07', '2024-10-19 19:27:33');
INSERT INTO `cl_posts` (`id`, `uid`, `visiter`, `post_date`, `post_author`, `template`, `template_child`, `post_title`, `sub_title`, `post_content`, `post_excerpt`, `uri`, `page_key`, `post_type`, `post_category`, `post_parent`, `post_order`, `home_order`, `banner`, `page_thumbnail`, `thumbnail`, `icon`, `page_video`, `meta_keyword`, `meta_description`, `associated_title`, `external_link`, `price`, `post_tags`, `project_status`, `status`, `global_post`, `published`, `is_active`, `is_draft`, `is_trashed`, `show_in_home`, `is_password_protected`, `comment`, `lang`, `created_at`, `updated_at`) VALUES
(219, NULL, 5, '2024-09-02 08:50:10', 1, 'single', NULL, 'Dr TENZING', 'RADIOLOGIST  [NMC No. 8292]', NULL, NULL, 'dr-tenzing', '1725267018740765330', 29, 0, 0, 74, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:50:18', '2024-10-20 06:15:16'),
(220, NULL, 5, '2024-09-02 08:50:24', 1, 'single', NULL, 'Dr. DIPENDRA RAI', 'UROLOGIST  [NMC No. 17426]', NULL, NULL, 'dr-dipendra-rai', '1725267031342065564', 29, 0, 0, 75, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:50:31', '2024-10-20 04:12:54'),
(221, NULL, 6, '2024-09-02 08:50:34', 1, 'single', NULL, 'DR.ABHILASHA SHAH', 'MBBS, MD, Consultant Rheumatologist [NMC No. 6733]', NULL, NULL, 'drabhilasha-shah', '1725267041524821948', 29, 0, 0, 76, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:50:41', '2024-10-20 04:39:06'),
(222, NULL, 5, '2024-09-02 08:50:49', 1, 'single', NULL, 'DR. AMRIT KOIRALA', 'MBBS, MD, Fellowship in Interventional Radiology Radiologist [NMC No. 7738]', NULL, NULL, 'dr-amrit-koirala', '1725267055460256063', 29, 0, 0, 77, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:50:55', '2024-10-19 21:56:56'),
(223, NULL, 5, '2024-09-02 08:50:59', 1, 'single', NULL, 'DR. NISHITA PATHAK', 'MBBS, MD ( TOM, TUTH) Psychiatrist [NMC No. 4668]', NULL, NULL, 'dr-nishita-pathak', '172526706785860915', 29, 0, 0, 78, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:51:07', '2024-10-20 03:44:17'),
(224, NULL, 5, '2024-09-02 08:51:11', 1, 'single', NULL, 'DR.KENISON SHRESTHA', 'CONSULTANT NEURO PSYCHIATRIST  [NMC No. 12934]', NULL, NULL, 'drkenison-shrestha', '1725267077309694908', 29, 0, 0, 79, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:51:17', '2024-10-20 06:35:46'),
(225, NULL, 5, '2024-09-02 08:51:22', 1, 'single', NULL, 'DR.GESON DHOJ K.C', 'MBBS, MD Sr Consultant Radiologist [NMC No. 12459]', NULL, NULL, 'drgeson-dhoj-kc', '1725267093176080008', 29, 0, 0, 80, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:51:33', '2024-10-20 05:04:09'),
(226, NULL, 5, '2024-09-02 08:51:38', 1, 'single', NULL, 'DR. NISHLA SHAKYA', 'MBBS, MD-Dermatology [NMC No. 7148]', NULL, NULL, 'dr-nishla-shakya', '1725267105913353428', 29, 0, 0, 81, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:51:45', '2024-10-20 00:30:55'),
(227, NULL, 5, '2024-09-02 08:51:49', 1, 'single', NULL, 'Dr. BIJAY POUDEL', 'MBBS, MS Orthopaedics [NMC No. 18773]', NULL, NULL, 'dr-bijay-poudel', '1725267116807605737', 29, 0, 0, 82, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:51:56', '2024-10-19 23:16:02'),
(228, NULL, 5, '2024-09-02 08:52:00', 1, 'single', NULL, 'DR. AMRIT RIJAL', 'ENDOCRINOLOGIST  [NMC No. 13757]', NULL, NULL, 'dr-amrit-rijal', '1725267128432054609', 29, 0, 0, 83, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:52:08', '2024-10-19 20:37:18'),
(229, NULL, 5, '2024-09-02 08:52:11', 1, 'single', NULL, 'Dr. Malika Bajracharya', 'Medical Officer  [NMC No. 11525]', NULL, NULL, 'dr-malika-bajracharya', '1725267139815673032', 29, 0, 0, 84, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2024-09-02 12:52:19', '2024-10-19 22:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_attachments`
--

CREATE TABLE `cl_post_attachments` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_categories`
--

CREATE TABLE `cl_post_categories` (
  `id` int UNSIGNED NOT NULL,
  `post_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_content` text COLLATE utf8mb4_unicode_ci,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int DEFAULT '0',
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_post_categories`
--

INSERT INTO `cl_post_categories` (`id`, `post_type`, `category`, `category_caption`, `category_content`, `uri`, `ordering`, `thumbnail`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(9, '30', 'Mental health', NULL, NULL, 'mental-health', NULL, NULL, NULL, '1', '2021-08-01 04:28:32', '2021-08-01 04:28:32'),
(10, '30', 'Infectious', NULL, NULL, 'infectious', NULL, NULL, NULL, '1', '2021-08-01 04:28:58', '2021-08-01 04:28:58'),
(11, '30', 'life style', NULL, NULL, 'life-style', NULL, NULL, NULL, '1', '2021-08-01 04:29:14', '2021-08-08 02:16:37'),
(12, '30', 'Nutrition', 'Nutrition', 'Nutrition', 'nutrition', NULL, NULL, NULL, '1', '2021-08-08 02:33:58', '2021-08-08 02:33:58'),
(13, '29', 'Cardiology Specialist', NULL, NULL, 'cardiology-specialist', NULL, NULL, NULL, '1', '2021-08-08 02:49:13', '2021-08-08 02:49:13'),
(14, '29', 'Pediatrician', NULL, NULL, 'pediatrician', NULL, NULL, NULL, '1', '2021-08-08 02:49:27', '2021-08-08 02:49:27'),
(15, '29', 'dentist', NULL, NULL, 'dentist', NULL, NULL, NULL, '1', '2021-08-09 08:19:35', '2021-08-09 08:19:35'),
(16, '30', 'breaking news', NULL, NULL, 'breaking-news', NULL, NULL, NULL, '1', '2021-08-09 08:19:50', '2021-08-09 08:19:50'),
(17, '27', 'Aspects of medical practice', NULL, NULL, 'aspects-of-medical-practice', NULL, NULL, NULL, '1', '2024-08-11 06:48:22', '2024-08-11 06:48:22'),
(18, '28', 'Medical Service', NULL, 'We pride ourselves on fostering a culture of care, where every\r\n                                individual’s\r\n                                well-being is our utmost priority. Our commitment to excellence in healthcare is grounded.', 'medical-service', NULL, NULL, NULL, '1', '2024-08-11 07:19:55', '2024-08-21 04:53:48'),
(19, '28', 'Major Service', NULL, NULL, 'major-service', NULL, NULL, NULL, '1', '2024-08-11 09:30:00', '2024-08-11 09:30:00'),
(20, '28', 'Blood Related Treatment', NULL, NULL, 'blood-releated-treatment', NULL, NULL, NULL, '1', '2024-08-11 09:30:15', '2024-08-19 05:18:21'),
(21, '28', 'Blood Related Conditions', NULL, '<ul class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">\r\n<li>Anemia (including iron-deficiency, vitamin B12 deficiency, and sickle cell anemia)</li>\r\n<li>Blood cancers (leukemia, lymphoma, multiple myeloma)</li>\r\n<li>Bleeding disorders (hemophilia, Von Willebrand disease)</li>\r\n<li>Clotting disorders (DVT, pulmonary embolism)</li>\r\n<li>Bone marrow disorders (myelodysplastic syndromes, polycythemia vera)</li>\r\n<li>Other blood disorders (thalassemia, hypercoagulable states)</li>\r\n</ul>', 'blood-related-contitions', NULL, 'bl-lj40qTwWwPNNkFcQnzmodqDu6wKdWd9UI1gIaKHT.png', NULL, '1', '2024-08-11 09:32:07', '2024-08-21 05:38:05'),
(23, '27', 'Who We are', 'Improving The Quality Of Your Life Through Better Health.', '<p>we offer a wide range of comprehensive healthcare services to address all aspects of your health. From preventive care and health screenings to specialized treatments and chronic disease management.</p>', 'who-we-are', NULL, 'tel-WN8RXN2gU11aOJa5Sg8BMeqakW0TJ0m7zBXNNgKQ.jpg', NULL, '1', '2024-08-21 06:17:40', '2024-08-22 07:53:23'),
(24, '27', 'Our Objectives', 'We Are a Progressive Medical Clinic.', NULL, 'our-objectives', NULL, 'oby-btSA0FrRkkJK0UwGUxhYFwxgN9JV6L7rCzr6LZQW.png', NULL, '1', '2024-08-21 06:23:31', '2024-08-21 06:26:07'),
(25, '27', 'Caring for the health of you and your family.', 'We Provide All Aspects Of Medical Practice', NULL, 'caring-for-the-health-of-you-and-your-family', NULL, NULL, NULL, '1', '2024-08-23 07:03:59', '2024-08-23 07:05:28'),
(26, '27', 'OUR STRENGTH', NULL, '<p>These strengths collectively position the Blood Hospital as a leading institution for the treatment of blood-related conditions, offering patients access to unparalleled care and the latest advancements in medical science</p>', 'our-strength', NULL, NULL, NULL, '1', '2024-08-23 07:06:22', '2024-08-23 07:06:22'),
(27, '27', 'Statistics', NULL, NULL, 'statistics', NULL, NULL, NULL, '1', '2024-08-25 04:58:39', '2024-08-25 04:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_comments`
--

CREATE TABLE `cl_post_comments` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int NOT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci,
  `comment_date` datetime NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `comment_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_featured_images`
--

CREATE TABLE `cl_post_featured_images` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image_caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_type`
--

CREATE TABLE `cl_post_type` (
  `id` int UNSIGNED NOT NULL,
  `uid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `post_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int DEFAULT '0',
  `is_menu` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_footer_menu` tinyint(1) DEFAULT '0',
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_post_type`
--

INSERT INTO `cl_post_type` (`id`, `uid`, `post_type`, `uri`, `caption`, `content`, `meta_keyword`, `meta_description`, `template`, `banner`, `ordering`, `is_menu`, `is_footer_menu`, `status`, `created_at`, `updated_at`) VALUES
(27, 'zSguDQRjZv0', 'About Us', 'about-us', 'Caring For The Health & Well Being Of Family.', '<p class=\"mb-30\">Blood Hospital is a premier private healthcare institution in Jawalakhel, Lalitpur, Nepal, specializing in the treatment of blood-related disorders, blood cancers such as leukemia, lymphoma, and myeloma, and bone marrow transplants. The hospital is dedicated to delivering high-quality, patient-centered blood treatments with a focus on providing all the blood related treatments in Nepal.</p>', NULL, NULL, 'posttypeTemplate-about', 'banner-2-EeKxEjkmkNFyhR1sgPZ8hNBKtqQjKRiI0ViWbLbo.jpg', 1, '1', 0, '1', '2021-07-30 03:08:29', '2024-08-22 06:24:24'),
(28, NULL, 'Services', 'services', 'We provide all aspects of medical practice for your whole family, includinggeneral check-ups or assisting you with specific injuries.', NULL, NULL, NULL, 'posttypeTemplate-service', NULL, 2, '1', 0, '1', '2021-07-30 03:08:57', '2021-08-07 23:40:34'),
(29, NULL, 'Our Team', 'find-a-doctor', NULL, NULL, NULL, NULL, 'posttypeTemplate-doctors', '', 3, '1', 0, '1', '2021-07-30 03:09:58', '2021-12-17 12:24:06'),
(30, NULL, 'News & Media', 'news-media', NULL, NULL, NULL, NULL, 'posttypeTemplate-media', NULL, 4, '1', 0, '1', '2021-07-30 03:11:34', '2021-08-08 00:18:15'),
(31, NULL, 'Contact us', 'contact-us', NULL, NULL, NULL, NULL, 'posttypeTemplate-contact-us', '', 5, '1', 0, '1', '2021-07-30 03:11:49', '2021-07-30 04:09:36'),
(32, NULL, 'Doctors', 'doctors', NULL, NULL, NULL, NULL, 'page', '', 6, '0', 0, '1', '2024-08-18 09:44:51', '2024-08-18 09:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_videos`
--

CREATE TABLE `cl_post_videos` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int NOT NULL,
  `featured_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_video_caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_video_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_roles`
--

CREATE TABLE `cl_roles` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_roles`
--

INSERT INTO `cl_roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', '2018-07-01 09:56:16', '2020-08-16 14:47:31'),
(2, 'Admin', '2018-07-01 09:56:34', '2020-08-16 14:47:43'),
(3, 'General', '2020-08-16 14:47:05', '2020-08-16 14:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `cl_settings`
--

CREATE TABLE `cl_settings` (
  `id` int UNSIGNED NOT NULL,
  `num_of_inquiries` int DEFAULT '0',
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_primary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_secondary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signin_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_key` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `google_map` text COLLATE utf8mb4_unicode_ci,
  `google_map2` text COLLATE utf8mb4_unicode_ci,
  `welcome_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome_text` text COLLATE utf8mb4_unicode_ci,
  `copyright_text` text COLLATE utf8mb4_unicode_ci,
  `field1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_settings`
--

INSERT INTO `cl_settings` (`id`, `num_of_inquiries`, `site_name`, `location1`, `location2`, `address2`, `website2`, `phone`, `phone2`, `email_primary`, `email_secondary`, `website`, `address`, `facebook_link`, `linkedin_link`, `youtube_link`, `twitter_link`, `google_plus`, `instagram_link`, `location_link`, `signin_url`, `signup_url`, `experience`, `meta_key`, `meta_description`, `google_map`, `google_map2`, `welcome_title`, `welcome_text`, `copyright_text`, `field1`, `field2`, `field3`, `field4`, `created_at`, `updated_at`) VALUES
(1, 46, 'Blood Hospital', 'Jawalkhel, Lallitpur, Nepal', NULL, NULL, NULL, '977-01-5440075', '977-01-5440076, 9802304188', 'info@bloodhospital.org.np', 'nraspataal@gmail.com', NULL, NULL, 'https://www.facebook.com/Bloodmultispecialityhospital', NULL, NULL, 'https://facebook.com', NULL, 'https://www.instagram.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.3609580340058!2d85.30647801506139!3d27.675236582805102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1831563665e9%3A0x81547cf3f9c3eb14!2sPulchowk%20-%20Dhobighat%20Rd%2C%20Lalitpur%2044600!5e0!3m2!1sen!2snp!4v1624529235026!5m2!1sen!2snp\" width=\"100%\" height=\"500\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '24 Hours Services Run', NULL, '© 2021 Blood Hospital, All Rights Reserved.', NULL, NULL, NULL, NULL, NULL, '2021-12-09 14:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `cl_tender`
--

CREATE TABLE `cl_tender` (
  `id` int UNSIGNED NOT NULL,
  `tender_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tender_subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tender_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tender_detail` longtext COLLATE utf8mb4_unicode_ci,
  `nit_date` text COLLATE utf8mb4_unicode_ci,
  `last_date_of_submittion` text COLLATE utf8mb4_unicode_ci,
  `time_of_submittion` text COLLATE utf8mb4_unicode_ci,
  `category_id` int DEFAULT NULL,
  `is_new` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `link_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_tender_category`
--

CREATE TABLE `cl_tender_category` (
  `id` int UNSIGNED NOT NULL,
  `tender_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_tender_category`
--

INSERT INTO `cl_tender_category` (`id`, `tender_category`, `created_at`, `updated_at`) VALUES
(1, 'Works', '2018-11-22 03:10:55', '2019-02-11 01:14:01'),
(2, 'Goods', '2018-11-18 23:27:58', '2019-02-13 04:30:21'),
(3, 'Services', '2019-02-13 04:30:48', '2019-02-13 04:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `cl_tender_document`
--

CREATE TABLE `cl_tender_document` (
  `id` int UNSIGNED NOT NULL,
  `tender_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_venderdetail`
--

CREATE TABLE `cl_venderdetail` (
  `id` int UNSIGNED NOT NULL,
  `vender_name` text COLLATE utf8mb4_unicode_ci,
  `tender_number` text COLLATE utf8mb4_unicode_ci,
  `tender_title` text COLLATE utf8mb4_unicode_ci,
  `tender_category` text COLLATE utf8mb4_unicode_ci,
  `awarded_date` text COLLATE utf8mb4_unicode_ci,
  `date_of_nit` text COLLATE utf8mb4_unicode_ci,
  `value` text COLLATE utf8mb4_unicode_ci,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `contact`, `position`, `company`, `post_code`, `address`, `town`, `country`, `comments`, `created_at`, `updated_at`) VALUES
(2, 'Teegan', 'Wells', 'xoduquwava@mailinator.com', '+11921063826', 'Non ut similique exc', 'Campbell Foster Inc', 'Placeat aliquip sun', 'Qui porro voluptas e', 'In ipsa aut sed nem', 'Djibouti', 'Iste dolor voluptate', '2021-04-21 01:45:24', '2021-04-21 01:45:24'),
(3, 'Ian', 'Delaney', 'kereloheg@mailinator.com', 'Nevada Valenzuela', 'Minim est neque dol', 'Monroe and Wagner Plc', 'Nulla magnam rerum v', 'Ad debitis quod quia', 'Quia culpa dolorem m', 'Djibouti', 'Corrupti asperiores', '2021-04-21 03:23:37', '2021-04-21 03:23:37'),
(4, 'Caleb', 'Mathews', 'wufut@mailinator.com', 'Halee Bright', 'Aperiam ipsa ea tem', 'Crane and Dejesus LLC', 'Distinctio Officia', 'Laborum Dolorem vol', 'Sapiente cupidatat r', 'Armenia', 'Quaerat amet non fu', '2021-05-23 00:01:25', '2021-05-23 00:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_03_28_114354_create_cl_post_metas_table', 1),
(5, '2018_03_28_114442_create_cl_post_featured_images_table', 1),
(6, '2018_03_28_114755_create_cl_post_attachments_table', 1),
(7, '2018_03_28_114834_create_cl_post_videos_table', 1),
(9, '2018_03_28_115212_create_cl_post_comments_table', 1),
(10, '2018_03_28_115358_create_cl_categories_table', 1),
(11, '2018_03_28_115432_create_cl_category_metas_table', 1),
(12, '2018_03_29_064328_create_cl_log_table', 1),
(13, '2018_05_08_114118_create_cl_userroles_table', 1),
(14, '2018_05_20_062425_create_cl_members_table', 1),
(15, '2018_06_04_092530_create_cl_roles_table', 1),
(16, '2018_06_06_123826_create_product_category_table', 1),
(17, '2018_06_07_093316_create_post_type_table', 1),
(18, '2018_06_13_071711_create_cl_post_category_table', 1),
(19, '2018_06_21_080700_create_cl_banner_table', 1),
(20, '2018_06_27_053620_create_cl_product_type_table', 2),
(21, '2018_06_28_061103_create_cl_product_brand_table', 3),
(22, '2018_06_28_061256_create_cl_currency_table', 3),
(23, '2018_06_28_061707_create_cl_product_unit_table', 3),
(26, '2018_06_29_051629_create_cl_products_table', 1),
(31, '2018_07_03_014755_create_cl_gallery_image_categories_table', 4),
(32, '2018_07_03_014814_create_cl_gallery_images_table', 4),
(35, '2018_07_03_104330_create_cl_gallery_videos_table', 6),
(37, '2018_07_03_103721_create_cl_gallery_video_categories_table', 7),
(38, '2018_07_04_061117_create_cl_post_type_table', 7),
(39, '2018_03_28_113701_create_cl_posts_table', 8),
(41, '2018_08_06_085514_create_cl_product_tag_table', 9),
(42, '2018_09_20_120321_create_cl_customer_billing_address_table', 10),
(43, '2018_09_20_120340_create_cl_customer_shipping_address_table', 10),
(44, '2018_09_24_094921_create_cl_orders_table', 11),
(45, '2018_09_25_061818_create_cl_country_table', 12),
(46, '2018_09_25_092853_create_order_product_table', 13),
(47, '2018_09_25_100703_create_cl_order_product_table', 14),
(48, '2018_10_02_031657_create_cl_settings_table', 15),
(49, '2018_11_14_092229_create_cl_tender_table', 16),
(51, '2018_11_19_042417_create_cl_tender_category', 18),
(52, '2018_11_19_075448_create_cl_tender_document_table', 19),
(53, '2018_11_16_111624_create_cl_venderdetail_table', 20),
(54, '2018_11_25_060813_create_cl_multiple_video_table', 21),
(55, '2018_11_29_065424_create_cl_multiple_document_table', 22),
(56, '2019_03_13_082841_create_newsletter_signup_table', 23),
(59, '2019_03_14_052123_create_cl_associated_posts_table', 24),
(61, '2019_03_15_090749_create_cl_dwninfo_table', 25),
(62, '2020_08_06_095339_create_cl_multiple_banner_table', 26),
(63, '2020_08_06_120936_add_banner_id_column_at_cl_multiple_banner_table', 26),
(64, '2020_08_07_084648_add_visitor_column_at_posts_table', 26),
(66, '2020_08_11_180220_create_role_user_table', 27),
(67, '2020_08_12_061740_create_foreign_keys_for_role_user_table', 27),
(68, '2020_08_16_130049_crate_admin_menu_table', 28),
(74, '2020_08_16_162623_create_adminmenu_user_table', 29),
(75, '2020_08_16_205219_crate_foreign_keys_for_adminmenu_user_table', 29),
(79, '2020_08_17_062614_add_global_post_cl_posts_table', 30),
(80, '2020_12_10_131852_create_cl_portfolio_table', 31),
(81, '2020_12_10_132930_create_cl_associated_portfolios_table', 31),
(82, '2019_08_19_000000_create_failed_jobs_table', 32),
(83, '2021_03_29_110453_create_inquiries_table', 32),
(86, '2021_03_29_111050_create_bookings_table', 33),
(87, '2021_03_29_122554_create_trip_bookings_table', 34),
(88, '2021_03_30_070214_create_contacts_table', 35),
(89, '2021_04_19_105315_create_proposals_table', 36),
(90, '2021_04_19_122930_create_contacts_table', 37),
(91, '2021_07_25_083843_create_appointments_table', 38);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_signup`
--

CREATE TABLE `newsletter_signup` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_signup`
--

INSERT INTO `newsletter_signup` (`id`, `first_name`, `last_name`, `email`, `company`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Elmo', 'Athena', 'buvysygefi@mailinator.net', 'Alyssa', '1', '2019-03-20 14:16:05', '2019-03-20 14:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` int UNSIGNED NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revenue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `uri`, `first_name`, `last_name`, `email`, `contact`, `position`, `company`, `post_code`, `country`, `industry`, `revenue`, `options`, `rfp`, `comments`, `created_at`, `updated_at`) VALUES
(33, NULL, 'Brianna', 'Foley', 'zyhoju@mailinator.com', 'Omar Cotton', 'Rem esse necessitati', 'Reyes Hoover Trading', 'Dolores nisi irure q', 'Burundi', 'banking-financial-service', '$200m - $500m', 'yes', '1621771688.jpg', 'Aut aliquam qui null', '2021-05-23 06:23:08', '2021-05-23 06:23:08'),
(34, NULL, 'Melanie', 'Curtis', 'nuref@mailinator.com', 'Kevin Mccullough', 'Nihil ipsum error o', 'Stokes Pitts Traders', 'Iste esse et sed omn', 'Uzbekistan', 'travel-tourism-hotel', '$200m - $500m', 'no', '1621771730.jpg', 'Est recusandae Cons', '2021-05-23 06:23:50', '2021-05-23 06:23:50'),
(35, NULL, 'Melanie', 'Curtis', 'nuref@mailinator.com', 'Kevin Mccullough', 'Nihil ipsum error o', 'Stokes Pitts Traders', 'Iste esse et sed omn', 'Uzbekistan', 'travel-tourism-hotel', '$200m - $500m', 'no', '1621771758.jpg', 'Est recusandae Cons', '2021-05-23 06:24:18', '2021-05-23 06:24:18'),
(36, NULL, 'Melanie', 'Curtis', 'nuref@mailinator.com', 'Kevin Mccullough', 'Nihil ipsum error o', 'Stokes Pitts Traders', 'Iste esse et sed omn', 'Uzbekistan', 'travel-tourism-hotel', '$200m - $500m', 'no', '1621771979.jpg', 'Est recusandae Cons', '2021-05-23 06:27:59', '2021-05-23 06:27:59'),
(37, NULL, 'Melanie', 'Curtis', 'nuref@mailinator.com', 'Kevin Mccullough', 'Nihil ipsum error o', 'Stokes Pitts Traders', 'Iste esse et sed omn', 'Uzbekistan', 'travel-tourism-hotel', '$200m - $500m', 'no', '1621772001.jpg', 'Est recusandae Cons', '2021-05-23 06:28:21', '2021-05-23 06:28:21'),
(38, NULL, 'Penelope', 'Velasquez', 'jusuhahiz@mailinator.com', 'Cole Ryan', 'Amet obcaecati dict', 'Hodge and Sanchez Inc', 'Do facilis libero es', 'Tobago', 'manufacturing', '$1m - 20m', 'yes', '1621772403.jpg', 'Qui eum sequi ullam', '2021-05-23 06:35:03', '2021-05-23 06:35:03'),
(39, NULL, 'Penelope', 'Velasquez', 'jusuhahiz@mailinator.com', 'Cole Ryan', 'Amet obcaecati dict', 'Hodge and Sanchez Inc', 'Do facilis libero es', 'Tobago', 'manufacturing', '$1m - 20m', 'yes', '1621772496.jpg', 'Qui eum sequi ullam', '2021-05-23 06:36:36', '2021-05-23 06:36:36'),
(40, NULL, 'Penelope', 'Velasquez', 'jusuhahiz@mailinator.com', 'Cole Ryan', 'Amet obcaecati dict', 'Hodge and Sanchez Inc', 'Do facilis libero es', 'Tobago', 'manufacturing', '$1m - 20m', 'yes', '1621772531.jpg', 'Qui eum sequi ullam', '2021-05-23 06:37:11', '2021-05-23 06:37:11'),
(41, NULL, 'Penelope', 'Velasquez', 'jusuhahiz@mailinator.com', 'Cole Ryan', 'Amet obcaecati dict', 'Hodge and Sanchez Inc', 'Do facilis libero es', 'Tobago', 'manufacturing', '$1m - 20m', 'yes', '1621772809.jpg', 'Qui eum sequi ullam', '2021-05-23 06:41:49', '2021-05-23 06:41:49'),
(42, NULL, 'Aubrey', 'Sellers', 'jogupy@mailinator.com', 'Drake Patel', 'Eaque quae nesciunt', 'Hodge and Harrison Associates', 'Qui non officia quia', 'Brunei Darussalam', 'trading', '$20m - $50m', 'no', '1621845205.jpg', 'Sapiente ducimus co', '2021-05-24 02:48:25', '2021-05-24 02:48:25'),
(43, NULL, 'Aubrey', 'Sellers', 'jogupy@mailinator.com', 'Drake Patel', 'Eaque quae nesciunt', 'Hodge and Harrison Associates', 'Qui non officia quia', 'Brunei Darussalam', 'trading', '$20m - $50m', 'no', '1621845238.jpg', 'Sapiente ducimus co', '2021-05-24 02:48:58', '2021-05-24 02:48:58'),
(44, NULL, 'Aubrey', 'Sellers', 'jogupy@mailinator.com', 'Drake Patel', 'Eaque quae nesciunt', 'Hodge and Harrison Associates', 'Qui non officia quia', 'Brunei Darussalam', 'trading', '$20m - $50m', 'no', '1621845767.jpg', 'Sapiente ducimus co', '2021-05-24 02:57:47', '2021-05-24 02:57:47'),
(45, NULL, 'Joseph', 'Franks', 'huzexyv@mailinator.com', 'Iris Johns', 'Nihil animi magna N', 'Marsh and Valentine LLC', 'Minim hic commodo ma', 'Eritrea', 'ngoingo', '<$1m', 'no', '1621845787.jpg', 'Temporibus iusto ali', '2021-05-24 02:58:07', '2021-05-24 02:58:07'),
(46, NULL, 'Joseph', 'Franks', 'huzexyv@mailinator.com', 'Iris Johns', 'Nihil animi magna N', 'Marsh and Valentine LLC', 'Minim hic commodo ma', 'Eritrea', 'ngoingo', '<$1m', 'no', '1621847404.jpg', 'Temporibus iusto ali', '2021-05-24 03:25:04', '2021-05-24 03:25:04'),
(47, NULL, 'Joseph', 'Franks', 'huzexyv@mailinator.com', 'Iris Johns', 'Nihil animi magna N', 'Marsh and Valentine LLC', 'Minim hic commodo ma', 'Eritrea', 'ngoingo', '<$1m', 'no', '1621847484.jpg', 'Temporibus iusto ali', '2021-05-24 03:26:24', '2021-05-24 03:26:24'),
(48, NULL, 'Joseph', 'Franks', 'huzexyv@mailinator.com', 'Iris Johns', 'Nihil animi magna N', 'Marsh and Valentine LLC', 'Minim hic commodo ma', 'Eritrea', 'ngoingo', '<$1m', 'no', '1621847529.jpg', 'Temporibus iusto ali', '2021-05-24 03:27:09', '2021-05-24 03:27:09'),
(50, NULL, 'Iris', 'Moon', 'fypabugu@mailinator.com', 'Doris Pruitt', 'Culpa praesentium fu', 'Howard and Pollard Associates', 'Adipisci corrupti e', 'Spain', 'manufacturing', 'Prefer not to say', 'no', '1621921803.pdf', 'Et voluptatibus inci', '2021-05-25 00:05:03', '2021-05-25 00:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 3, 4, NULL, NULL),
(16, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trip_bookings`
--

CREATE TABLE `trip_bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_bookings`
--

INSERT INTO `trip_bookings` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Felicia', 'Sears', 'dutukegyf@mailinator.com', '+1 (798) 517-2106', 'Lorem magni nesciunt', 'Chitwan Trip', '2021-03-29 23:41:47', '2021-03-29 23:41:47'),
(3, 'Hayley', 'Avila', 'wuryp@mailinator.com', '+1 (833) 285-8391', 'Commodi explicabo E', 'Pokhara Trip', '2021-03-30 00:31:42', '2021-03-30 00:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` int NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `pin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'master@cyberlink.com.np', '$2y$10$tvm8wI6EeOP0n2W0sT38E.RE5Mh0Kd5UpY1YncqGoPSnAAeTCFZPS', 8848, 'MwZaAriP4rQoMb1NwWKkyMKebP3Hy3tg3cckS9ln7AxIJOGKkZdMW7ntSv73', '2018-06-24 04:33:34', '2018-06-24 04:33:34'),
(3, 'Cyberlink', 'root@admin.com', '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 1100, 'whNOl22H8EgM0PuSlMaNuh4vM5e2bU4m1BeHhuTp4tAcTRsYCeGCgiUFnrIv', '2020-08-16 10:32:43', '2020-08-16 11:21:35'),
(4, 'User', 'user@bloodhospital.com', '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 8910, 'S4m93kK1mIKgnRAHHGfDWD7vDoEy19RtIDBMtZjHdDo7MZIZRJAOeAw4J1RO', '2020-08-16 11:22:14', '2021-08-05 03:23:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cl_adminmenu_user_user_id_foreign` (`user_id`),
  ADD KEY `cl_adminmenu_user_adminmenu_id_foreign` (`adminmenu_id`);

--
-- Indexes for table `cl_admin_menu`
--
ALTER TABLE `cl_admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_associated_portfolios`
--
ALTER TABLE `cl_associated_portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cl_associated_portfolios_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `cl_associated_posts`
--
ALTER TABLE `cl_associated_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_banner`
--
ALTER TABLE `cl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_circulars`
--
ALTER TABLE `cl_circulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_circular_type`
--
ALTER TABLE `cl_circular_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_country`
--
ALTER TABLE `cl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_department`
--
ALTER TABLE `cl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_dwninfo`
--
ALTER TABLE `cl_dwninfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_images`
--
ALTER TABLE `cl_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_image_categories`
--
ALTER TABLE `cl_gallery_image_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_videos`
--
ALTER TABLE `cl_gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_video_categories`
--
ALTER TABLE `cl_gallery_video_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_init`
--
ALTER TABLE `cl_init`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_log`
--
ALTER TABLE `cl_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_members`
--
ALTER TABLE `cl_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cl_members_email_unique` (`email`);

--
-- Indexes for table `cl_membership`
--
ALTER TABLE `cl_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_banner`
--
ALTER TABLE `cl_multiple_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_document`
--
ALTER TABLE `cl_multiple_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_image`
--
ALTER TABLE `cl_multiple_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_video`
--
ALTER TABLE `cl_multiple_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_portfolio`
--
ALTER TABLE `cl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_portfolio_categories`
--
ALTER TABLE `cl_portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_posts`
--
ALTER TABLE `cl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_attachments`
--
ALTER TABLE `cl_post_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_categories`
--
ALTER TABLE `cl_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_comments`
--
ALTER TABLE `cl_post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_featured_images`
--
ALTER TABLE `cl_post_featured_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_videos`
--
ALTER TABLE `cl_post_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_roles`
--
ALTER TABLE `cl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_settings`
--
ALTER TABLE `cl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_tender`
--
ALTER TABLE `cl_tender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_tender_category`
--
ALTER TABLE `cl_tender_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_tender_document`
--
ALTER TABLE `cl_tender_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_venderdetail`
--
ALTER TABLE `cl_venderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_signup`
--
ALTER TABLE `newsletter_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `trip_bookings`
--
ALTER TABLE `trip_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cl_admin_menu`
--
ALTER TABLE `cl_admin_menu`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cl_associated_portfolios`
--
ALTER TABLE `cl_associated_portfolios`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_associated_posts`
--
ALTER TABLE `cl_associated_posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cl_banner`
--
ALTER TABLE `cl_banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cl_circulars`
--
ALTER TABLE `cl_circulars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cl_circular_type`
--
ALTER TABLE `cl_circular_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_country`
--
ALTER TABLE `cl_country`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `cl_department`
--
ALTER TABLE `cl_department`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cl_dwninfo`
--
ALTER TABLE `cl_dwninfo`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `cl_gallery_images`
--
ALTER TABLE `cl_gallery_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cl_gallery_image_categories`
--
ALTER TABLE `cl_gallery_image_categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cl_gallery_videos`
--
ALTER TABLE `cl_gallery_videos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_gallery_video_categories`
--
ALTER TABLE `cl_gallery_video_categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_init`
--
ALTER TABLE `cl_init`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_log`
--
ALTER TABLE `cl_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_members`
--
ALTER TABLE `cl_members`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cl_membership`
--
ALTER TABLE `cl_membership`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `cl_multiple_banner`
--
ALTER TABLE `cl_multiple_banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `cl_multiple_document`
--
ALTER TABLE `cl_multiple_document`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `cl_multiple_image`
--
ALTER TABLE `cl_multiple_image`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cl_multiple_video`
--
ALTER TABLE `cl_multiple_video`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_portfolio`
--
ALTER TABLE `cl_portfolio`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cl_portfolio_categories`
--
ALTER TABLE `cl_portfolio_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_posts`
--
ALTER TABLE `cl_posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `cl_post_attachments`
--
ALTER TABLE `cl_post_attachments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_post_categories`
--
ALTER TABLE `cl_post_categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cl_post_comments`
--
ALTER TABLE `cl_post_comments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_post_featured_images`
--
ALTER TABLE `cl_post_featured_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cl_post_videos`
--
ALTER TABLE `cl_post_videos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_roles`
--
ALTER TABLE `cl_roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cl_settings`
--
ALTER TABLE `cl_settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_tender`
--
ALTER TABLE `cl_tender`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_tender_category`
--
ALTER TABLE `cl_tender_category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cl_tender_document`
--
ALTER TABLE `cl_tender_document`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_venderdetail`
--
ALTER TABLE `cl_venderdetail`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `newsletter_signup`
--
ALTER TABLE `newsletter_signup`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trip_bookings`
--
ALTER TABLE `trip_bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  ADD CONSTRAINT `cl_adminmenu_user_adminmenu_id_foreign` FOREIGN KEY (`adminmenu_id`) REFERENCES `cl_admin_menu` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `cl_adminmenu_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `cl_associated_portfolios`
--
ALTER TABLE `cl_associated_portfolios`
  ADD CONSTRAINT `cl_associated_portfolios_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `cl_portfolio` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `cl_roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
