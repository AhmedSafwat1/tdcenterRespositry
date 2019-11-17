-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2019 at 01:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freee`
--

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'test_en', 'test_ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name_en`, `name_ar`, `faculty_id`, `created_at`, `updated_at`) VALUES
(1, 'information systeam', 'نظم معلومات ', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employment_cases`
--

CREATE TABLE `employment_cases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employment_cases`
--

INSERT INTO `employment_cases` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'test_en', 'test_ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `equivalent_certificates`
--

CREATE TABLE `equivalent_certificates` (
  `id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_hours` int(11) NOT NULL,
  `program_date` datetime NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_references`
--

CREATE TABLE `evaluation_references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_results`
--

CREATE TABLE `evaluation_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eval_ref_id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_start` datetime NOT NULL,
  `event_end` datetime NOT NULL,
  `capacity` int(11) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `trainers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_start`, `event_end`, `capacity`, `location`, `created_at`, `updated_at`, `program_id`, `trainers`) VALUES
(1, '2019-11-19 00:00:00', '2019-11-17 00:00:00', 15, 'القاهره شمال شرق غرب مدينة نصر', '2019-11-15 22:00:00', '2019-06-20 22:00:00', 4, 'ِAhmed safwat, ali salah'),
(2, '2019-11-15 00:00:00', '2019-11-17 00:00:00', 13, 'الجيزه جامعة القاهره', '2019-11-15 22:00:00', '2019-11-15 22:00:00', 2, 'ِAhmed safwat, ali salah'),
(3, '2019-11-17 00:00:00', '2019-11-17 00:00:00', 15, 'القاهره شمال شرق غرب مدينة نصر', '2019-11-15 22:00:00', '2019-06-20 22:00:00', 1, 'ِAhmed safwat, ali salah'),
(4, '2019-11-15 00:00:00', '2019-11-17 00:00:00', 13, 'الجيزه جامعة القاهره', '2019-11-15 22:00:00', '2019-11-15 22:00:00', 6, 'ِAhmed safwat, ali salah');

-- --------------------------------------------------------

--
-- Table structure for table `event_attendances`
--

CREATE TABLE `event_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `day1_in` datetime NOT NULL,
  `day1_out` datetime NOT NULL,
  `day2_in` datetime NOT NULL,
  `day2_out` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day1_part1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day1_part2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day2_part1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day2_part2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `day1_part1`, `day1_part2`, `day2_part1`, `day2_part2`, `created_at`, `updated_at`, `event_id`) VALUES
(1, 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', '2019-11-12 22:00:00', '2019-06-20 22:00:00', 2),
(2, 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', '2019-05-13 22:00:00', '2019-06-20 22:00:00', 4),
(3, 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', 'test1 ِAhmed safwat, ali salah test1 ِAhmed safwat, ali salah test1 ِ', '2019-05-15 22:00:00', '2019-06-20 22:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `event_user`
--

CREATE TABLE `event_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_user`
--

INSERT INTO `event_user` (`id`, `event_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'accept', '2019-11-05 22:00:00', '2019-06-20 22:00:00'),
(2, 3, 3, 'pending', '2019-11-03 22:00:00', '2019-06-20 22:00:00'),
(3, 3, 2, 'pending', '2019-11-03 22:00:00', '2019-06-20 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name_en`, `name_ar`, `university_id`, `created_at`, `updated_at`) VALUES
(1, 'computer', 'الحاسبات', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_10_21_160822_create_modules_table', 1),
(10, '2019_10_21_160903_create_programs_table', 1),
(11, '2019_10_21_163846_create_events_table', 1),
(12, '2019_10_21_164759_create_employment_cases_table', 1),
(13, '2019_10_26_050644_create_event_user_table', 1),
(14, '2019_10_26_055852_create_request_types_table', 1),
(15, '2019_10_26_055932_create_event_details_table', 1),
(16, '2019_10_28_211851_create_evaluation_references_table', 1),
(17, '2019_10_31_103149_create_universities_table', 1),
(18, '2019_10_31_103629_create_faculties_table', 1),
(19, '2019_10_31_104404_create_departments_table', 1),
(20, '2019_10_31_105319_create_degrees_table', 1),
(21, '2019_11_02_194328_create_equivalent_certificates_table', 1),
(22, '2019_11_02_194528_create_event_attendances_table', 1),
(23, '2019_11_02_194640_create_requests_table', 1),
(24, '2019_11_02_211159_add_fks_to_users_table', 1),
(25, '2019_11_05_073539_create_evaluation_results_table', 1),
(26, '2019_11_05_074127_create_program_exceptions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, '  the basic', 'الاسسيات', '2019-11-17 22:00:00', '2019-11-26 22:00:00'),
(2, 'connect to database', 'الاتصال بقواعد البيانات', '2019-11-19 22:00:00', '2019-11-26 22:00:00'),
(3, 'object orient programing', 'البرمجه الشيئيه', '2019-11-26 22:00:00', '2019-11-26 22:00:00'),
(4, 'تصميم موقع تجاره الكترونيه', 'design the e-commerce website', '2019-11-20 22:00:00', '2019-11-13 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `dependent_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name_en`, `name_ar`, `description_en`, `description_ar`, `created_at`, `updated_at`, `module_id`, `dependent_id`) VALUES
(1, 'php langue', ' لغة ي إتش بي', 'PHP. Stands for \"Hypertext Preprocessor.\" ... PHP is an HTML-embedded Web scripting language. This means PHP code can be inserted into the HTML of a Web page. When a PHP page is accessed, the PHP code is read or \"parsed\" by the server the page resides on.\r\n', 'بي إتش بي (PHP: Hypertext Preprocessor، \'الصفحة الرئيسية الشخصية كانت مجموعة من التطبيقات التي كتبت باستخدام لغة بيرل أطلق راسموس اسم Personal Home Page Tools (\"المعالج المسبق للنصوص الفائقة\") هي لغة برمجة نصية صممت أساسا من أجل استخدامها لتطوير وبرمجة تطبيقات الويب. كما يمكن استخدامها لإنتاج برامج قائمة بذاتها وليس لها علاقة بالويب فقط.\r\n\r\nبي إتش بي لغة مفتوحة المصدر ويطورها فريق من المتطوعين تحت رخصة بي إتش بي، تدعم البرمجة كائنية التوجه وتركيبها البنيوي يشبه كثيرًا التركيب البنيوي للغة السي، هذا بالإضافة إلى أنها تعمل على أنظمة تشغيل متعددة مثل لينكس وويندوز.\r\n\r\n', '2019-11-04 22:00:00', '2019-06-19 22:00:00', 2, NULL),
(2, '  laravel ', 'لارفل', 'PHP. Stands for \"Hypertext Preprocessor.\" ... PHP is an HTML-embedded Web scripting language. This means PHP code can be inserted into the HTML of a Web page. When a PHP page is accessed, the PHP code is read or \"parsed\" by the server the page resides on.\r\n', 'بي إتش بي (PHP: Hypertext Preprocessor، \'الصفحة الرئيسية الشخصية كانت مجموعة من التطبيقات التي كتبت باستخدام لغة بيرل أطلق راسموس اسم Personal Home Page Tools (\"المعالج المسبق للنصوص الفائقة\") هي لغة برمجة نصية صممت أساسا من أجل استخدامها لتطوير وبرمجة تطبيقات الويب. كما يمكن استخدامها لإنتاج برامج قائمة بذاتها وليس لها علاقة بالويب فقط.\r\n\r\nبي إتش بي لغة مفتوحة المصدر ويطورها فريق من المتطوعين تحت رخصة بي إتش بي، تدعم البرمجة كائنية التوجه وتركيبها البنيوي يشبه كثيرًا التركيب البنيوي للغة السي، هذا بالإضافة إلى أنها تعمل على أنظمة تشغيل متعددة مثل لينكس وويندوز.\r\n\r\n', '2019-11-04 22:00:00', '2019-06-19 22:00:00', 1, 1),
(3, 'word press', 'الورد برس', 'WordPress (WordPress.org) is a content management system (CMS) based on PHP and MySQL[4] that is usually used with the MySQL or MariaDB database servers but can also use the SQLite database engine.[5] Features include a plugin architecture and a template system, referred to inside WordPress as Themes. WordPress is most associated with blogging (its original purpose when first created) but has evolved to support other types of web content including more traditional mailing lists and forums, media galleries, membership sites, learning management systems (LMS) and online stores. WordPress is used by more than 60 million websites,[6] including 33.6% of the top 10 million websites as of April 2019,[7][8] WordPress is one of the most popular content management system (CMS) solutions in use.[9] WordPress has also been used for other application', 'ووردبريس هو نظام إدارة محتوى الكتروني مفتوح المصدر، مبنيّ بلغة بي إتش بي وقواعد بيانات ماي إس كيو إل، تُوزّعه شركة Automattic تحت رخصة جنو العمومية الإصدار رقم 2 أو أعلى؛ ويساهم في تطويره مجموعة من المطورين المتطوعين. تتيح الوظائف التي يتوفّر عليها ووردبريس إدارة أيّ موقع ويب خصوصا', '2019-11-18 22:00:00', '2019-11-05 22:00:00', 4, 1),
(4, ' python', 'بايثون', 'Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.[27]\r\n\r\nPython is dynamically typed and garbage-collected. It supports multiple programming paradigms, including procedural, object-oriented, and functional programming. Python is often described as a \"batteries included\" language due to its comprehensive standard library.[28]', 'بايثون (بالإنجليزية: Python) هي لغة برمجة، من لغات المستوى العالي، تتميز ببساطة كتابتها وقراءتها، سهلة التعلم، تستخدم أسلوب البرمجة الكائنية، مفتوحة المصدر، وقابلة للتطوير. تعتبر لغة بايثون لغة تفسيرية، متعددة الأغراض وتستخدم بشكل واسع في العديد من المجالات، كبناء البرامج المستقلة باستخدام الواجهات الرسومية المعروفة وفي عمل برامج الويب، بالإضافة إلى استخدامها كلغة برمجة نصية للتحكم في أداء بعض من أشهر البرامج المعروفة أو في بناء برامج ملحقة لها. وبشكل عام يمكن استخدام بايثون لبرمجة البرامج البسيطة للمبتدئين، ولإنجاز المشاريع الضخمة كأي لغة برمجية أخرى في نفس الوقت. غالباً ما يُنصح المبتدؤون في ميدان البرمجة بتعلم هذه اللغة لأنها من بين أسرع اللغات البرمجية تعلماً.', NULL, NULL, 1, NULL),
(5, 'django', 'دجانجو', 'Django (/ˈdʒæŋɡoʊ/ JANG-goh; stylised as django)[4] is a Python-based free and open-source web framework, which follows the model-template-view (MTV) architectural pattern.[5][6] It is maintained by the Django Software Foundation (DSF), an independent organization established as a 501(c)(3) non-profit.\r\n\r\nDjango\'s primary goal is to ease the creation of complex, database-driven websites. The framework emphasizes reusability and \"pluggability\" of components, less code, low coupling, rapid development, and the principle of don\'t repeat yourself.[7] Python is used throughout, even for settings files and data models. Django also provides an optional administrative create, read, update and delete interface that is generated dynamically through introspection and configured via admin models.\r\n\r\nSome well-known sites that use Django include the Public Broadcasting Service,[8] Instagram,[9] Mozilla,[10] The Washington Times,[11] Disqus,[12] Bi', 'جانغو (بالإنجليزية: Django؛ تنطق JANG-goh) هو منصة برمجية لتطبيقات الإنترنت حر ومفتوح المصدر مكتوب بلغة البرمجة بايثون. طُوّر أصلًا لإدارة مواقع إخبارية تديرها \"شركة العالم\" (بالإنجليزية: The World Company) وأصدر للعموم في يوليو 2005 تحت رخصة بي إس دي. في يونيو 2008 أعلن عن إنشاء مؤسسة برنامج جانغو التي ستتولى تطوير جانغو في المستقبل.\r\n\r\nهدف جانغو الأساسي تسهيل إنشاء مواقع الوب المعقدة المعتمدة على قواعد البيانات', '2019-11-26 22:00:00', '2019-06-20 22:00:00', 4, 4),
(6, 'جافا سكربت', 'javascript', 'Alongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web.[9] JavaScript enables interactive web pages and is an essential part of web applications. The vast majority of websites use it,[10] and major web browsers have a dedicated JavaScript engine to execute it.\r\n\r\nAs a multi-paradigm language, JavaScript supports event-driven, functional, and imperative (including object-oriented and prototype-based) programming styles. It has APIs for working with text, arrays, dates, regular expressions, and the DOM, but the language itself does not include any I/O, such as networking, storage, or graphics facilities. It relies upon the host environment in which it is embedded to provide these features.\r\n\r\nInitially only implemented client-side in web browsers, JavaScript engines are now embedded in many other types of host software, including server-side in web servers and databases, and in non-web programs such as word processors and PDF software, and in runtime environments that make JavaScript available for writing mobile and desktop applications, including desktop widgets.', 'جافا سكريبت (بالإنجليزية: JavaScript) هي لغة برمجة عالية المستوى تستخدم أساسا في متصفحات الويب لإنشاء صفحات أكثر تفاعلية. يتم تطويرها حاليا من طرف شركة نتسكيب وشركة موزيلا.\r\n\r\nكانت لغة الجافاسكريبت موجهة للمبرمجين الهواة وغير المحترفين، إلا أنه تزايد الاهتمام بها وجذبت اهتمام مبرمجين محترفين بعد إضافتها لتقنيات جديدة كإنتشار تقنية أجاكس التي أدت إلى سرعة في التفاعل بين الخادم والعميل.\r\n\r\nتُستخدَم لغة JavaScript لإنشاء صفحات ويب تفاعلية، ولتوفير تطبيقات ويب بما في ذلك الألعاب؛ وهي مُستعمَلة من أغلبية المواقع، وتدعمها جميع المتصفحات تقريبًا دون الحاجة إلى إضافات خارجية.', '2019-11-12 22:00:00', '2019-06-13 22:00:00', 1, NULL),
(7, 'node.js', ' نود', 'Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside of a browser. Node.js lets developers use JavaScript to write command line tools and for server-side scripting—running scripts server-side to produce dynamic web page content before the page is sent to the user\'s web browser. Consequently, Node.js represents a \"JavaScript everywhere\" paradigm,[6] unifying web-application development around a single programming language, rather than different languages for server- and client-side scripts.\r\n\r\nThough .js is the standard filename extension for JavaScript code, the name \"Node.js\" does not refer to a particular file in this context and is merely the name of the product. Node.js has an event-driven architecture capable of asynchronous I/O. These design choices aim to optimize throughput and scalability in web applications with many input/output operations, as well as for real-time Web applications (e.g., real-time communication programs and browser games).[7]\r\n\r\nThe Node.js distributed development project, governed by the Node.js Foundation,[8] is facilitated by the Linux Foundation\'s Collaborative Projects program.[9]', '.js هو نظام برامج مصمم لكتابة تطبيقات إنترنت قابلة للتوسع كخوادم الويب. تم اختياره بواسطة InfoWorld لجائزة تقنية العام في 2012.\r\n\r\nأنشئت Node.js على يد ريان دال ابتداءً في عام 2009، وقامت برعاية نموها Joyent، مشغله. يتألف Node.js من في 8 التابع لجوجل مع العديد من المكتبات المدمجة. وأخذت بعض مواصفات مشروع CommonJS.\r\n\r\nتكتب برامج node.js بلغة الجافاسكربت، باستخدام نمط حدثّي التوجه، إدخال وإخراج غير متزامنين للحد من النفقات وتحقيق أكبر قدر من قابلية التوسع. وعلى عكس أغلب برامج الجافاسكريبت فهي لا تشتغل على متصفح الويب، ولكن عوضا عن ذلك فيتم تشغيلها من طرف الخادم.', '2019-05-13 22:00:00', '2019-06-20 22:00:00', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `program_exceptions`
--

CREATE TABLE `program_exceptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `degree_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `req_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_type_id` bigint(20) UNSIGNED NOT NULL,
  `req_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `req_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `req_name`, `request_type_id`, `req_status`, `req_number`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'dddd', 1, 'pending', '5dd1224259d85', 2, '2019-11-17 08:34:42', '2019-11-17 08:34:42'),
(2, 'dddd', 1, 'pending', '5dd1224b7bc23', 2, '2019-11-17 08:34:51', '2019-11-17 08:34:51'),
(3, 'dsadsaD', 2, 'pending', '5dd129bc4d300', 2, '2019-11-17 09:06:36', '2019-11-17 09:06:36'),
(4, 'dsadsaD', 2, 'pending', '5dd12a266b880', 2, '2019-11-17 09:08:22', '2019-11-17 09:08:22'),
(5, 'dsadsaD', 2, 'pending', '5dd12a5ef0fe7', 2, '2019-11-17 09:09:18', '2019-11-17 09:09:18'),
(6, 'dsadsaD', 2, 'pending', '5dd12a6fa58e1', 2, '2019-11-17 09:09:35', '2019-11-17 09:09:35'),
(7, 'dsadsaD', 2, 'pending', '5dd12c553e788', 2, '2019-11-17 09:17:41', '2019-11-17 09:17:41'),
(8, 'dsadsaD', 2, 'pending', '5dd12c753ac55', 2, '2019-11-17 09:18:13', '2019-11-17 09:18:13'),
(9, 'dsadsaD', 2, 'pending', '5dd12c9e9bc71', 2, '2019-11-17 09:18:54', '2019-11-17 09:18:54'),
(10, 'dsadsaD', 2, 'pending', '5dd12cdb060c3', 2, '2019-11-17 09:19:55', '2019-11-17 09:19:55'),
(11, 'dsadsaD', 2, 'pending', '5dd12d36ac6eb', 2, '2019-11-17 09:21:26', '2019-11-17 09:21:26'),
(12, 'dsadsaD', 2, 'pending', '5dd12d6931887', 2, '2019-11-17 09:22:17', '2019-11-17 09:22:17'),
(13, 'sadsd', 1, 'pending', '5dd12dda77656', 2, '2019-11-17 09:24:10', '2019-11-17 09:24:10'),
(14, 'dadsa', 2, 'pending', '5dd12e1c3527c', 2, '2019-11-17 09:25:16', '2019-11-17 09:25:16'),
(15, 'dadsa', 2, 'pending', '5dd12ecff3a87', 2, '2019-11-17 09:28:15', '2019-11-17 09:28:15'),
(16, 'sadsd', 2, 'pending', '5dd12f117b517', 2, '2019-11-17 09:29:21', '2019-11-17 09:29:21'),
(17, 'sdasdsad', 2, 'pending', '5dd12f4dcf649', 2, '2019-11-17 09:30:21', '2019-11-17 09:30:21'),
(18, 'dsa', 1, 'pending', '5dd12f781d910', 2, '2019-11-17 09:31:04', '2019-11-17 09:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `request_types`
--

CREATE TABLE `request_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_types`
--

INSERT INTO `request_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'بدل فاقد', NULL, NULL),
(2, 'استخراج شهاده جديد', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'cairo', 'القاهره', '2019-11-18 22:00:00', '2019-06-20 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` bigint(20) NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `activation_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `university_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `degree_id` bigint(20) UNSIGNED NOT NULL,
  `employment_case_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname_en`, `fname_ar`, `email`, `email_verified_at`, `password`, `remember_token`, `gender`, `birthdate`, `nationality`, `national_id`, `phone_number`, `home_phone`, `username`, `active`, `activation_token`, `upload_file`, `created_at`, `updated_at`, `deleted_at`, `university_id`, `faculty_id`, `department_id`, `degree_id`, `employment_case_id`) VALUES
(1, 'ali', 'sss', 'safwat@info.com', '2019-11-19 22:00:00', '$2y$10$568b4ubQ118fDm2IslTnie8JEwQj9XfQE3FQTk4uhH/fNT384Y332', 'eF0ywmUC7h4NED95QYcwGFnM9E0qJcNGSoIGdHjN78USP2SQ6HY0OO2giXvi', 'male', '2019-11-03', 'dsadsad', 123131, '1233333', NULL, 'ali', 0, '', '', '2019-05-13 22:00:00', '2019-06-20 22:00:00', NULL, 1, 1, 1, 1, 1),
(2, 'ASadsA', 'addsa', 'Ahmed.Safwat1235@gmail.com', NULL, '$2y$10$sfec5wnjGjOu.E0cSk2nn.AgUz4f80XJ5OFbaSkq0gTNIm8AfaNha', 'IubgGh3E7XJvJMroJ5SxpbN9O95lsnhriwFukTkTPyO8UgQxViGu1GxN6xCU', 'male', '2019-11-07', 'dassdadsads', 29608111200057, '12312412414', '2132321323213', 'ahmed update', 0, '', '', '2019-11-15 19:49:25', '2019-11-15 21:57:20', NULL, 1, 1, 1, 1, 1),
(3, 'ASadsA', 'asddads', 'ahmed.aa@gmail.com', NULL, '$2y$10$Bjk7opOyBcpw0G/qIFQYQumKZddOHKtJ.UbR/LeYTOdbSJlGfwN62', NULL, 'male', '2019-11-27', 'dassdadsads', 29608111200057, '21343434', '1231232', 'asasads', 0, '', '5dcf1f591538b-1573855065-aUXyfoJqRa.pdf', '2019-11-15 19:57:45', '2019-11-15 19:57:45', NULL, 1, 1, 1, 1, 1),
(4, 'ASadsA', 'ASDDSA', 'aait@info.com', NULL, '$2y$10$iS0hlnBvzcG6/8E/nOJv1uyjagIYYMDF.F7LYbvz7AHvTh/ZvG7Ru', NULL, 'male', '2019-11-07', 'dassdadsads', 29608111200057, '2132132', '213231132', 'aait@info.comsdaDA', 0, '', '5dcf2101b57e9-1573855489-PQYfzI6leb.pdf', '2019-11-15 20:04:49', '2019-11-15 20:04:49', NULL, 1, 1, 1, 1, 1),
(5, 'Taha', 'طه عادل', 'taha676@gmail.com', NULL, '$2y$10$QHOongQdZDPJ14F/hkjJKuJUmtwXo4.RpboLl4hoDj66m6E4tAgDe', NULL, 'male', '1991-12-09', 'Egyptian', 8626378627836273, '1005603671', NULL, 'taha', 0, '', '', '2019-11-16 13:02:45', '2019-11-16 13:02:45', NULL, 1, 1, 1, 1, 1),
(6, 'ASadsA', 'طه عادل', 'aait2@aait.sa', NULL, '$2y$10$FE7bKQUZgoO1aEQ7OsOV5eqjMcHJwL0oChOzV9uW5F43yBqfian.6', NULL, 'female', '2019-11-01', 'dassdadsads', 29608111200057, '223432220', NULL, 'twst22', 0, '', '', '2019-11-16 13:34:52', '2019-11-16 13:34:52', NULL, 1, 1, 1, 1, 1),
(7, 'dsfsadfdsafsd', 'safdssdfsd', 'aait222@info.com', NULL, '$2y$10$sQ.ULZwMIUFj1Y450OTd1eZCctDoWxXvw5YbYues3AUHVZJfvKo0y', NULL, 'female', '2019-11-15', 'sdfdsdsfds', 29608111200057, '01008634708', NULL, 'Ahmed.Safwat12weweq35@gmail.com', 0, '', '', '2019-11-16 14:51:12', '2019-11-16 14:51:12', NULL, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_faculty_id_foreign` (`faculty_id`);

--
-- Indexes for table `employment_cases`
--
ALTER TABLE `employment_cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equivalent_certificates`
--
ALTER TABLE `equivalent_certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equivalent_certificates_user_id_foreign` (`user_id`);

--
-- Indexes for table `evaluation_references`
--
ALTER TABLE `evaluation_references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_results`
--
ALTER TABLE `evaluation_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluation_results_eval_ref_id_foreign` (`eval_ref_id`),
  ADD KEY `evaluation_results_event_id_foreign` (`event_id`),
  ADD KEY `evaluation_results_user_id_foreign` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_program_id_foreign` (`program_id`);

--
-- Indexes for table `event_attendances`
--
ALTER TABLE `event_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_attendances_event_id_foreign` (`event_id`),
  ADD KEY `event_attendances_user_id_foreign` (`user_id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_details_event_id_foreign` (`event_id`);

--
-- Indexes for table `event_user`
--
ALTER TABLE `event_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculties_university_id_foreign` (`university_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_module_id_foreign` (`module_id`),
  ADD KEY `programs_dependent_id_foreign` (`dependent_id`);

--
-- Indexes for table `program_exceptions`
--
ALTER TABLE `program_exceptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_exceptions_program_id_foreign` (`program_id`),
  ADD KEY `program_exceptions_faculty_id_foreign` (`faculty_id`),
  ADD KEY `program_exceptions_department_id_foreign` (`department_id`),
  ADD KEY `program_exceptions_degree_id_foreign` (`degree_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_request_type_id_foreign` (`request_type_id`),
  ADD KEY `requests_user_id_foreign` (`user_id`);

--
-- Indexes for table `request_types`
--
ALTER TABLE `request_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_university_id_foreign` (`university_id`),
  ADD KEY `users_faculty_id_foreign` (`faculty_id`),
  ADD KEY `users_department_id_foreign` (`department_id`),
  ADD KEY `users_degree_id_foreign` (`degree_id`),
  ADD KEY `users_employment_case_id_foreign` (`employment_case_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employment_cases`
--
ALTER TABLE `employment_cases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equivalent_certificates`
--
ALTER TABLE `equivalent_certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation_references`
--
ALTER TABLE `evaluation_references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation_results`
--
ALTER TABLE `evaluation_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_attendances`
--
ALTER TABLE `event_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_user`
--
ALTER TABLE `event_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `program_exceptions`
--
ALTER TABLE `program_exceptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `request_types`
--
ALTER TABLE `request_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `equivalent_certificates`
--
ALTER TABLE `equivalent_certificates`
  ADD CONSTRAINT `equivalent_certificates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `evaluation_results`
--
ALTER TABLE `evaluation_results`
  ADD CONSTRAINT `evaluation_results_eval_ref_id_foreign` FOREIGN KEY (`eval_ref_id`) REFERENCES `evaluation_references` (`id`),
  ADD CONSTRAINT `evaluation_results_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `evaluation_results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`);

--
-- Constraints for table `event_attendances`
--
ALTER TABLE `event_attendances`
  ADD CONSTRAINT `event_attendances_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `event_attendances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `event_details`
--
ALTER TABLE `event_details`
  ADD CONSTRAINT `event_details_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_dependent_id_foreign` FOREIGN KEY (`dependent_id`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `programs_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`);

--
-- Constraints for table `program_exceptions`
--
ALTER TABLE `program_exceptions`
  ADD CONSTRAINT `program_exceptions_degree_id_foreign` FOREIGN KEY (`degree_id`) REFERENCES `degrees` (`id`),
  ADD CONSTRAINT `program_exceptions_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `program_exceptions_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `program_exceptions_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_request_type_id_foreign` FOREIGN KEY (`request_type_id`) REFERENCES `request_types` (`id`),
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_degree_id_foreign` FOREIGN KEY (`degree_id`) REFERENCES `degrees` (`id`),
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `users_employment_case_id_foreign` FOREIGN KEY (`employment_case_id`) REFERENCES `employment_cases` (`id`),
  ADD CONSTRAINT `users_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `users_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
