-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 08:32 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genius-cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE DATABASE genius-cbt;

USE genius-cbt;

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` int(10) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `semester`, `level`, `code`, `unit`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to Computer Science', 'First Semester', '100 Level', 'CSC111', 3, 1, '2023-04-24 16:45:27', '2023-04-24 16:45:27'),
(2, 'General Mathematics I', 'First Semester', '100 Level', 'MTH111', 3, 1, '2023-04-24 16:45:27', '2023-04-24 16:45:27'),
(3, 'Use of English I', 'First Semester', '100 Level', 'GSTIII', 2, 1, '2023-04-24 16:45:27', '2023-04-24 16:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`id`, `student_id`, `course_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `faculty_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Computer Science', '2023-04-24 16:45:27', '2023-04-24 16:45:27'),
(2, 1, 'Software Engineering', '2023-04-24 17:01:49', '2023-04-24 17:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Computing', '2023-04-24 16:45:27', '2023-04-24 16:45:27');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_11_141422_create_faculties_table', 1),
(6, '2023_02_12_141358_create_departments_table', 1),
(7, '2023_02_13_140836_create_courses_table', 1),
(8, '2023_02_14_215722_student', 1),
(9, '2023_02_15_215801_student_course', 1),
(10, '2023_02_16_221422_create_quizzes_table', 1),
(11, '2023_02_17_221450_create_questions_table', 1);

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `options`, `correct_option`, `quiz_id`, `created_at`, `updated_at`) VALUES
(1, 'Which of the following is not a programming language?', 'Java|HTML|CSS|Python', 'B', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(2, 'Which of the following is an example of a relational database management system?', 'MongoDB|Oracle|Redis|Cassandra', 'B', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(3, 'Which of the following is not a data structure?', 'Stack|Queue|Map|Binary', 'D', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(4, 'Which of the following is used to access web pages?', 'HTTP|FTP|SMTP|SSH', 'A', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(5, 'Which of the following is not a type of sorting algorithm?', 'Quick Sort|Merge Sort|Selection Sort|Heap Sort', 'C', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(6, 'Which of the following is a software for creating and editing vector graphics?', 'Photoshop|GIMP|Inkscape|Blender', 'C', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(7, 'Which of the following is a process of converting high-level programming language to machine code?', 'Assembly|Compilation|Interpretation|Execution', 'B', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(8, 'Which of the following is used to prevent unauthorized access to a computer network?', 'Firewall|Antivirus|Spyware|Trojan', 'A', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(9, 'Which of the following is used to convert analog signals to digital signals?', 'Modem|Router|Switch|Hub', 'A', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(10, 'Which of the following is used to store temporary data in a computer?', 'RAM|ROM|HDD|SSD', 'A', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(11, 'Which of the following is used to represent a group of IP addresses as a single address?', 'IPv4|IPv6|DNS|NAT', 'D', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(12, 'Which of the following is a programming language used for creating dynamic web pages?', 'HTML|CSS|JavaScript|SQL', 'C', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(13, 'Which of the following is an operating system?', 'Apache|MySQL|Windows|PostgreSQL', 'C', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(14, 'Which of the following is a protocol used to transfer files over the internet?', 'FTP|HTTP|SMTP|SSH', 'A', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(15, 'Which of the following is used to manage version control of software projects?', 'Git|Apache|Nginx|IIS', 'A', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(16, 'Which of the following is a type of computer memory that retains its contents even when the power is turned off?', 'RAM|ROM|Cache|Virtual', 'B', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(17, 'Which of the following is a programming language used for scientific computing?', 'MATLAB|Ruby|PHP|Swift', 'A', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(18, 'Which of the following is a data structure used for storing key-value pairs?', 'Queue|Stack|Map|Tree', 'C', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(19, 'Which of the following is a type of network topology in which each node is connected to two other nodes in a circular manner?', 'Bus|Star|Mesh|Ring', 'D', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53'),
(20, 'Which of THESE is an interpreted language', 'Java|JavaScript|C#|Golang', 'B', 1, '2023-04-24 17:25:53', '2023-04-24 17:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `no_options` int(10) UNSIGNED NOT NULL,
  `no_questions` int(10) UNSIGNED NOT NULL,
  `no_answerable_questions` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `course_id`, `title`, `duration`, `type`, `date`, `no_options`, `no_questions`, `no_answerable_questions`, `created_at`, `updated_at`) VALUES
(1, 1, 'CSC111 Examinations', 5, 'Exam', '2023-04-29', 4, 20, 15, '2023-04-24 17:25:53', '2023-04-24 17:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matric` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `matric`, `level`, `status`, `image_path`, `email`, `password`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Abdulkadir Annawas', '201700012', '100 Level', 1, '', 'abdulkadir@fulafia.cbt.edu', 'eyJpdiI6Ik9oSnVSSUZITnBNZnhQQU1DSnBRM2c9PSIsInZhbHVlIjoidThZbnd6NjRKTHBQOE9SQ0tjN0YyZz09IiwibWFjIjoiOGY3ZmFjNGQ4MmM5M2NkYmQ5Nzk2ZDJmZmE3MzkyNjUwZWVhMDAyNzQ2NzllMTdiOWU5ZDhmNWU1YjRjOTMzOCIsInRhZyI6IiJ9', 1, '2023-04-24 16:45:27', '2023-04-24 16:45:27'),
(2, 'Bilyamin El-Kaigama', '201700013', '100 Level', 1, '', 'bilyamin@fulafia.cbt.edu', 'eyJpdiI6IkZ6bGgyaHFCOElFNDEyY0FRNkZmaEE9PSIsInZhbHVlIjoiL0k0b0wvTTN4V3B1dm9NU296SnkyUT09IiwibWFjIjoiOWViNzU1ZTQ1ZGYwYTIzNGVhYTRiMThmOGFmMWY1NGM0Nzg0ODk1NDFmODI0YmIyZTJhN2I1MDQyMjY0ZGJmOCIsInRhZyI6IiJ9', 1, '2023-04-24 16:45:27', '2023-04-24 16:45:27'),
(3, 'Habiba Abdulkadir', '201700014', '100 Level', 1, '', 'habiba@fulafia.cbt.edu', 'eyJpdiI6ImNHK0psUnd5TTVLeXBwU2U2dmxQd3c9PSIsInZhbHVlIjoidVdwNERtU3RFV1NjSFdQb1R5aGw2UT09IiwibWFjIjoiNzIzYThjOWVlNzE0MDMwYWQ4YzliZTAwOTQ0OGU0Y2M5ODk2Yjc4OGNkMjZlYjE2OWZjZDI0Y2RmY2MzMGI3NSIsInRhZyI6IiJ9', 1, '2023-04-24 16:45:27', '2023-04-24 16:45:27');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Agushaka', 'agushaka@fulafia.cbt.edu', '2023-04-24 04:04:27', '$2y$10$nS.r91DZtaYTqTb1FIs8DONYvkE58GzI9N2T7N8BYqwSx6J0G0EkK', NULL, '2023-04-24 16:45:27', '2023-04-24 16:45:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_department_id_foreign` (`department_id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_student_id_foreign` (`student_id`),
  ADD KEY `course_student_course_id_foreign` (`course_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_faculty_id_foreign` (`faculty_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_course_id_foreign` (`course_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_matric_unique` (`matric`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_department_id_foreign` (`department_id`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
