-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 06:10 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `title`) VALUES
(1, 'نظم معلومات'),
(2, 'إدارة'),
(3, 'علوم حاسب');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `detail_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`detail_id`, `std_id`, `subject_id`, `question_id`, `answer`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 2, 1),
(3, 1, 1, 3, 1),
(4, 1, 1, 4, 1),
(5, 1, 1, 5, 1),
(6, 1, 1, 6, 2),
(7, 1, 1, 7, 1),
(8, 1, 1, 8, 2),
(9, 1, 1, 10, 2),
(10, 1, 1, 9, 3),
(11, 2, 1, 1, 5),
(12, 2, 1, 2, 1),
(13, 2, 1, 3, 1),
(14, 2, 1, 4, 1),
(15, 2, 1, 5, 1),
(16, 2, 1, 6, 2),
(17, 2, 1, 7, 1),
(18, 2, 1, 8, 2),
(19, 2, 1, 10, 2),
(20, 2, 1, 9, 3),
(21, 3, 1, 1, 5),
(22, 3, 1, 2, 5),
(23, 3, 1, 3, 1),
(24, 3, 1, 4, 1),
(25, 3, 1, 5, 1),
(26, 3, 1, 6, 2),
(27, 3, 1, 7, 1),
(28, 3, 1, 8, 2),
(29, 3, 1, 10, 2),
(30, 3, 1, 9, 3),
(31, 1, 2, 1, 4),
(32, 1, 2, 2, 2),
(33, 1, 2, 3, 3),
(34, 1, 2, 4, 2),
(35, 1, 2, 5, 5),
(36, 1, 2, 6, 2),
(37, 1, 2, 7, 1),
(38, 1, 2, 8, 2),
(39, 1, 2, 10, 3),
(40, 1, 2, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `title`) VALUES
(1, 'الفرقة الأولى'),
(2, 'الفرقة الثانية'),
(3, 'الفرقة الثالثة'),
(4, 'الفرقة الرابعة');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `title_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `title_id`) VALUES
(1, 'توصيف المقرر معلن من الاسبوع الاول ؟', 1),
(2, 'المقرر يحفز على الحضور ؟', 1),
(3, 'يرتبط المقرر بالتخصص', 1),
(4, 'يتضمن المقرر معلومات حديثة ', 1),
(5, 'يتضمن  المقرر أمثلة تطبيقية', 1),
(6, 'يتضمن المقرر أمثلة عملية', 1),
(7, 'محتوى المقرر مناسب لعدد أسابيع الدراسة', 1),
(8, 'المقرر له دور  يتماشى مع باقى المقررات ', 1),
(9, 'اضاف المقرر مجموعة من المعارف والمفاهيم ؟', 2),
(10, 'dfvfdg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `std_id`, `subject_id`, `answer`) VALUES
(1, 1, 1, '30'),
(2, 2, 1, '38'),
(3, 3, 1, '46'),
(4, 1, 2, '54');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `code`, `email`, `password`, `grade_id`, `dept_id`) VALUES
(1, 'تقى', 123, 'toka@oi.edu.eg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4, 1),
(2, 'أميرة', 456, 'amira@oi.edu.eg', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 4, 1),
(3, 'ابتهال', 444, 'ebtihal@oi.edu.eg', 'fc1200c7a7aa52109d762a9f005b149abef01479', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `name`, `subject_code`, `grade_id`, `dept_id`) VALUES
(1, 'برمجة شبكات', '123', 4, 1),
(2, 'محاسبة', '444', 4, 1),
(3, 'dff', '111', 3, 2),
(4, 'php', '555', 4, 1),
(5, 'html', '333', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `title_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`title_id`, `title`) VALUES
(1, 'أراء عامة حول المقرر الدراسى'),
(3, 'الجداول والمحاضرات'),
(9, 'الكتب والمراجع العلمية'),
(4, 'المحاضر'),
(8, 'المدرجات وقاعات التدريس'),
(7, 'المعامل التى بها مقرارات'),
(5, 'عضو الهيئة المعاونة'),
(2, 'مخرجات التعلم المستهدفة'),
(6, 'نظام الإمتحانات');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `title_id` (`title_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `fk_std` (`std_id`),
  ADD KEY `fk_sub` (`subject_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_code` (`subject_code`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `question_detail_fk` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`),
  ADD CONSTRAINT `std_fk` FOREIGN KEY (`std_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `sub_detail_fk` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_question_title` FOREIGN KEY (`title_id`) REFERENCES `titles` (`title_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fk_std` FOREIGN KEY (`std_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `fk_sub` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_dept` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `fk_grade` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`grade_id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `fk_subject_dept` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `fk_subject_grade` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`grade_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
