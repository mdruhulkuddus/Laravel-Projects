-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 08:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `confirmation` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `student_id`, `course_id`, `confirmation`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 1, '2022-10-02 00:39:22', '2022-10-02 00:39:22'),
(2, 1, 9, 1, '2022-10-02 04:03:03', '2022-10-02 04:03:03'),
(3, 2, 11, 1, '2022-10-02 23:43:12', '2022-10-02 23:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL COMMENT 'from teacher table',
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `teacher_id`, `course_name`, `course_code`, `slug`, `course_description`, `course_fee`, `image`, `created_at`, `updated_at`) VALUES
(8, 5, 'Web Development', 'web123', 'Web-Development', 'Course Outline :\r\n\r\nMODULE 1 – Introduction to Web Technology\r\n\r\nLearning the Basics of Web Technology\r\n\r\nIdea about - Web Designing, Web Development, Software Development, Outsourcing, Freelancing.\r\nBasic Ideas on - Domain, Hosting, IP, Server, NameServer, Programming Language, Designing Language, Structured Query Language, Framework, CMS, IDE, cPanel, Domain Control Panel, FTP Client, Local Server.\r\nDiscuss on what we will be Learning in the Web Technology course and how\r\nCode Concepts, Program Concepts\r\nLearning to Use the Tools of Web Programming\r\n\r\nHow to use IDEs (NotePad++, NetBeans, PHPStorm, PHPEdit)\r\nHow to use Local Server Application (XAMPP, WAMP, LAMP, MAMP)\r\nHow to operate cPanel and Domain Control Panel\r\nHow to use FTP Clients (CoreFTP, FileZilla)\r\nMODULE 2 – HTML and HTML5\r\n\r\n Practicing the Basics of HTML and HTML Pages\r\n\r\nComments, Starting HTML Page, Head, Style, Script, Body\r\nMeta Tag, Meta Attributes, Keywords, Description, Author, Page Refresh\r\nParagraph, Heading, Division, Section, Article\r\nHeader, Footer, Main, Aside\r\nSpan, Cite, Address, Abbreviation, Details, Summary\r\nBold, Underline, Italic, Small, Strong, Subscript, Superscript\r\nDelete, Mark, Code, Block Quote, Quotation\r\nPracticing Advanced HTML and Basic HTML5\r\n\r\nFont, Font Size, Font Color, Font Face\r\nHTML Entities – Registered Trademark, Copyright, Euro, Space, Cent, Pound\r\nSymbol – Summation, Elements Of, Not Elements Of, Empty, Differential Sign\r\nURL Anchor, Mail Anchor, Call Anchor, Target\r\nNavigation Tag, Purpose of Navigation Tag\r\nImage, Image Source, Alternate Attribute, Height and Width, Title\r\nDescription List, Define Terms, Define Details, Ordered List, Unordered List, List Item', '120000', 'adminAsset/course-image/832123962.jpg', '2022-10-01 23:51:24', '2022-10-01 23:51:24'),
(9, 5, 'MS Office Program', 'ms122', 'MS-Office-Program', 'Microsoft Word \r\n\r\nHow to get started with Word \r\nWord  basics including navigation, editing, and saving\r\nCreating Word File, Save File, Rename File, Delete File, and Restore.\r\nEnglish Typing & Bangla Typing\r\nCut Copy and Paste, Format Bold, Italic, Underline, Font Change Font Size, Font Color, Highlight Text, and Shortcut.\r\nCharacter formatting in Word including Format Painter and AutoCorrect\r\nFind, Replace and Change Styles\r\nHow to properly work with bullets and numbering in Microsoft Word\r\nAll about formatting paragraphs and managing lists\r\nWorking with Tables in Word including formatting, converting data and formulas\r\nPage appearance including page-breaks, watermarks, and styles\r\nInserting graphics, pictures, shapes, icons\r\nHow to work with envelopes and labels\r\nAll about mail-merge and operating Word at scale\r\nMargin, Orientation, Size, Columns, Breaks, Indent. Position, Wrap Text, Align\r\nSpelling and Grammar, Word Count, Comment\r\nViews, Ruler, Zoom in and Out, Split, Macros.\r\nReviewing and Printing in Word and Page Setup', '18000', 'adminAsset/course-image/626639130.jpg', '2022-10-01 23:53:30', '2022-10-01 23:53:30'),
(10, 5, 'ASP.NET Core', 'asp125', 'ASP.NET-Core', 'Course Outline\r\n\r\nIntroduction\r\nWhat is an Enterprise Application?\r\n\r\nHow ASP.NET Core will be used to build Enterprise Applications?\r\n\r\nWhy is Extensibility needed for Enterprise Application?\r\nHow to Extend ASP.NET Core Components for Enterprise Application?\r\n\r\nASP.NET Core MVC Request Life Cycle\r\n\r\nEssential Life Cycle Concepts\r\n\r\nMiddleware Pipeline\r\n\r\nWorking with Routing\r\n\r\nController Initialization Aspects\r\n\r\nRequest Handling with Actions\r\n\r\nAction Results and View Engine\r\n\r\nExtending ASP.NET Core MVC\r\nApplication Flow with Filters\r\n\r\nData Binding and Validation Enhancements\r\n\r\nApplication Responses Manipulation\r\n\r\nAction Method Selection Process\r\n\r\nCustomizing Middleware Pipeline\r\n\r\nImplementing Authentication Authorization\r\n\r\nASP.NET Core Identity\r\n\r\nToken Based Security for API\r\n\r\nClaim Based Authorization\r\n\r\nRole Based Authorization\r\nPolicy Based Authorization', '190000', 'adminAsset/course-image/1009199436.jpg', '2022-10-01 23:54:39', '2022-10-01 23:54:39'),
(11, 4, 'Cloud Journey with AWS', 'cl125', 'Cloud-Journey-with-AWS', 'Course Outline:\r\n\r\n1.1:\r\nIntroduction to Amazon Web Services (AWS)\r\nAbout AWS\r\nElastic computing\r\nAdvantage of cloud computing\r\nTypes of Cloud Computing\r\nIntroduction to the AWS products\r\nAWS Security Compliance\r\nRegions and Availability Zones\r\nSigning up for AWS\r\nAWS Free Usage tier\r\nIntroduction AWS management console\r\n\r\n\r\n1.2:\r\n\r\nEC2 Instances & ELB (Elastic Load Balancer)\r\nUnderstanding AMI\r\nLaunching your first AWS instance\r\nHands-on Exercise on EC2\r\nOn-demand Instance pricing\r\nReserved Instance pricing\r\nSpot instance pricing\r\nSettings up security groups\r\nAmazon Machine Images (AMI)\r\nIP Addressing Scheme\r\nPublic and Private IP’s\r\nKey Pairs\r\nElastic IP’s\r\n\r\nELB (Elastic Load Balancer)\r\nIntroduction to ELB\r\nBasic ELB concepts\r\nInternet-facing ELB\r\nVPC-facing ELB\r\nCreate an ELB (Elastic Load Balancer)\r\nAdding and removing instances on ELB\r\n\r\n1.3:\r\nEBS (Elastic Block Storage)\r\nCreate EBS volumes\r\nDelete EBS Volumes\r\nAttach and detach EBS volumes\r\nMounting and un-mounting EBS volume\r\nCreating and deleting snapshots\r\nCreating volumes from snapshots', '15000', 'adminAsset/course-image/425597406.jpg', '2022-10-02 23:33:20', '2022-10-02 23:33:20');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_19_074417_create_sessions_table', 1),
(7, '2022_09_19_112055_create_teachers_table', 1),
(8, '2022_09_22_082250_create_courses_table', 2),
(9, '2022_09_24_093431_create_students_table', 3),
(10, '2022_10_01_110357_create_admissions_table', 3);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('z1Lz4gptfyS58gtq5LQYT1eoy37vFzl0GGVjqixS', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZTB6RVI2UGR2cG5aNXVBTW1VWmRRUVBCUWxLVmFPSThaZDN0TU5WaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly9sb2NhbGhvc3QvTGFyYXZlbC9TTVMvcHVibGljL2FwcGxpY2FudC1vdmVydmlldyI7fXM6OToidGVhY2hlcklkIjtpOjU7czoxMToidGVhY2hlck5hbWUiO3M6NToiRWFzaW4iO30=', 1664779093);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_email`, `student_phone`, `password`, `image`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Ruhul', 'ruhul@gmail.com', '01845709663', '$2y$10$sFetD5qoQLQuvW3qVk4vZuf/4j9iKIdeypCMP3foGzM5G7v6SSxLa', 'adminAsset/student-image/544305451.png', 'feni', '2022-10-01 23:57:00', '2022-10-01 23:57:00'),
(2, 'mrk', 'mrk@gmail.com', '01828587467', '$2y$10$hLy7MTmtaTFLgqD6aeQA1.CWZDHtU8yZOv43JQKe6hEDQSfwwiPuC', 'adminAsset/student-image/571867827.webp', 'feni', '2022-10-02 23:42:41', '2022-10-02 23:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `phone`, `email`, `password`, `image`, `address`, `created_at`, `updated_at`) VALUES
(4, 'ruhul', '01845709663', 'ruhul@gmail.com', '$2y$10$4DtwiixIbge34NkCCZM/h.hntmH8jOGQQVBUSixIZ9V6BEFD.oKn.', 'adminAsset/teacher-image/254146372.png', 'feni', '2022-09-21 23:49:22', '2022-10-01 09:41:01'),
(5, 'Easin', '01648944617', 'easin@gmail.com', '$2y$10$OGXw1DeXAbr5nVcw2SdEPuMboqcxR.n9v0KthvEEnQ89ky0lVtM/2', 'adminAsset/teacher-image/2123640252.jpg', 'feni', '2022-10-01 09:26:32', '2022-10-01 09:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$R4AOhA5pruixLOxuEjtzt.BMhETnnQtmR464oY9BRJGNklPsbM2O6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-21 00:05:42', '2022-09-21 00:05:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_email_unique` (`student_email`),
  ADD UNIQUE KEY `students_student_phone_unique` (`student_phone`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
