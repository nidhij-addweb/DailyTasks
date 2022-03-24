-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 02:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addweb_db_with_queries`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_management_system_db`
--

CREATE TABLE `attendance_management_system_db` (
  `student_id` bigint(10) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_status` varchar(20) NOT NULL,
  `s_date` date NOT NULL,
  `student_division` varchar(10) NOT NULL,
  `student_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_management_system_db`
--

INSERT INTO `attendance_management_system_db` (`student_id`, `student_name`, `student_status`, `s_date`, `student_division`, `student_email`) VALUES
(1, 'heena', 'present', '2022-03-24', 'A', 'heena@gmail.com'),
(2, 'veena', 'present', '2022-03-24', 'A', 'veena@gmail.com'),
(3, 'ram', 'present', '2022-03-24', 'A', 'ram@gmail.com'),
(4, 'mahesh', 'present', '2022-03-24', 'A', 'mahesh@gmail.com'),
(5, 'rekha', 'present', '2022-03-24', 'A', 'rekha@gmail.com'),
(6, 'esha', 'present', '2022-03-24', 'A', 'esha@gmail.com'),
(7, 'nividita', 'present', '2022-03-24', 'A', 'nividita@gmail.com'),
(8, 'ishan', 'absent', '2022-03-24', 'A', 'ishan@gmail.com'),
(9, 'shabana', 'present', '2022-03-24', 'A', 'shabana@gmail.com'),
(10, 'mohan', 'absent', '2022-03-24', 'A', 'mohan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_management_system_db`
--

CREATE TABLE `certificate_management_system_db` (
  `c_id` bigint(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_type` varchar(50) NOT NULL,
  `c_desc` varchar(50) NOT NULL,
  `c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificate_management_system_db`
--

INSERT INTO `certificate_management_system_db` (`c_id`, `c_name`, `c_type`, `c_desc`, `c_date`) VALUES
(12, 'php certificate', 'php course', 'on completing php course', '2021-06-12'),
(13, 'html certificate', 'html course', 'on completing html course', '2021-07-12'),
(14, 'css certificate', 'css course', 'on completing css course', '2021-07-12'),
(15, 'java certificate', 'java course', 'on completing java course', '2021-08-12'),
(16, 'nodejs certificate', 'nodejs course', 'on completing nodejs course', '2021-08-22'),
(17, 'bootstrap certificate', 'bootstrap course', 'on completing bootstrap course', '2021-08-30'),
(18, 'javascript certificate', 'javascript course', 'on completing javascript course', '2021-09-12'),
(19, 'responsive website certificate', 'responsive website course', 'on completing responsive website course', '2021-09-22'),
(20, 'sql certificate', 'sql course', 'on completing sql course', '2021-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `course_management_system_db`
--

CREATE TABLE `course_management_system_db` (
  `c_id` bigint(10) NOT NULL,
  `c_desc` varchar(20) NOT NULL,
  `c_startdate` date NOT NULL,
  `c_enddate` date NOT NULL,
  `c_perfomance` varchar(50) NOT NULL,
  `c_code` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_management_system_db`
--

INSERT INTO `course_management_system_db` (`c_id`, `c_desc`, `c_startdate`, `c_enddate`, `c_perfomance`, `c_code`) VALUES
(1, 'BE IT', '2018-02-12', '2022-02-23', 'good', 211),
(2, 'BE CE', '2018-02-12', '2022-02-23', 'good', 200),
(3, 'BE ME', '2018-02-12', '2022-02-23', 'good', 194),
(4, 'BE EC', '2018-02-12', '2022-02-23', 'good', 198),
(5, 'BTECH IT', '2018-02-12', '2022-02-23', 'good', 231),
(6, 'BTECH ME', '2018-02-12', '2022-02-23', 'good', 218),
(7, 'BTECH EC', '2018-02-12', '2022-02-23', 'good', 131),
(8, 'BCOM', '2018-02-12', '2021-02-23', 'good', 118),
(9, 'MCOM', '2018-02-12', '2021-02-23', 'good', 180),
(10, 'BE CIVIL', '2018-02-12', '2022-02-23', 'good', 111);

-- --------------------------------------------------------

--
-- Table structure for table `employee_vacation_system_db`
--

CREATE TABLE `employee_vacation_system_db` (
  `e_id` bigint(10) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_vacationdays` bigint(10) NOT NULL,
  `vac_date` date NOT NULL,
  `e_mobileno` bigint(12) NOT NULL,
  `vac_place` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_vacation_system_db`
--

INSERT INTO `employee_vacation_system_db` (`e_id`, `e_name`, `e_vacationdays`, `vac_date`, `e_mobileno`, `vac_place`) VALUES
(1, 'nidhi', 3, '2020-08-22', 9087612345, 'udaipur'),
(2, 'nividita', 2, '2021-08-22', 9087655345, 'jaipur'),
(3, 'heena', 2, '2020-08-22', 9223655345, 'surat'),
(4, 'veena', 2, '2022-01-22', 9223655001, 'palitana'),
(5, 'meena', 2, '2022-01-22', 9223655231, 'palitana'),
(6, 'nividita', 2, '2022-01-22', 9223155231, 'saputara'),
(7, 'shabana', 2, '2022-02-22', 9223155031, 'somnath'),
(8, 'rekha', 2, '2020-02-02', 9003155031, 'jaisalmer'),
(9, 'mahesh', 2, '2020-02-03', 9223155099, 'udaipur'),
(10, 'ramesh', 2, '2020-02-04', 9783155099, 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `fruit_selling_management_system_db`
--

CREATE TABLE `fruit_selling_management_system_db` (
  `f_id` bigint(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `f_quantity` bigint(10) NOT NULL,
  `f_price` bigint(50) NOT NULL,
  `f_date` date NOT NULL,
  `customer_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruit_selling_management_system_db`
--

INSERT INTO `fruit_selling_management_system_db` (`f_id`, `f_name`, `f_quantity`, `f_price`, `f_date`, `customer_name`) VALUES
(1, 'kiwi', 3, 120, '2021-09-21', 'smith'),
(2, 'watermelon', 2, 60, '2021-10-21', 'sam'),
(3, 'apple', 5, 100, '2021-11-21', 'ram'),
(4, 'orange', 5, 90, '2021-11-02', 'ramesh'),
(5, 'guava', 5, 90, '2020-11-02', 'harry'),
(6, 'strawberry', 5, 190, '2020-11-22', 'kavita'),
(7, 'apples', 5, 190, '2021-11-22', 'sheetal'),
(8, 'apples', 7, 120, '2021-10-22', 'nikita'),
(9, 'oranges', 7, 100, '2020-10-22', 'mahesh'),
(10, 'watermelon', 3, 80, '2020-09-02', 'ramesh');

-- --------------------------------------------------------

--
-- Table structure for table `online_cake_ordering_system_db`
--

CREATE TABLE `online_cake_ordering_system_db` (
  `cake_id` bigint(10) NOT NULL,
  `cake_name` varchar(20) NOT NULL,
  `cake_flavor` varchar(20) NOT NULL,
  `c_date` date NOT NULL,
  `c_ingredients` varchar(20) NOT NULL,
  `c_price` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_cake_ordering_system_db`
--

INSERT INTO `online_cake_ordering_system_db` (`cake_id`, `cake_name`, `cake_flavor`, `c_date`, `c_ingredients`, `c_price`) VALUES
(12, 'blackforest', 'chocolate', '2021-03-12', 'milk,chocolate,flour', 500),
(13, 'vanilla', 'vanilla', '2021-04-12', 'milk,chocolate,flour', 400),
(14, 'blueberry', 'blueberry', '2021-04-02', 'milk,flour,blueberry', 400),
(15, 'butterscotch', 'butterscotch', '2021-04-12', 'milk,chocolate,flour', 400),
(16, 'eggless', 'butterscotch', '2021-04-12', 'milk,chocolate,flour', 400),
(17, 'heart cake', 'butterscotch', '2021-04-12', 'milk,chocolate,flour', 400),
(18, 'vanilla', 'vanilla', '2021-05-12', 'milk,chocolate,flour', 400),
(19, 'butterscotch', 'butterscotch', '2021-02-12', 'milk,chocolate,flour', 400),
(20, 'blackforest', 'chocolate', '2021-02-12', 'milk,chocolate,flour', 500),
(21, 'heart cake', 'butterscotch', '2021-04-02', 'milk,chocolate,flour', 400);

-- --------------------------------------------------------

--
-- Table structure for table `online_pizza_ordering_management_system_db`
--

CREATE TABLE `online_pizza_ordering_management_system_db` (
  `p_id` bigint(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_toppings` varchar(20) NOT NULL,
  `p_date` date NOT NULL,
  `p_size` bigint(10) NOT NULL,
  `p_price` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_pizza_ordering_management_system_db`
--

INSERT INTO `online_pizza_ordering_management_system_db` (`p_id`, `p_name`, `p_toppings`, `p_date`, `p_size`, `p_price`) VALUES
(101, 'cheese margherita', 'chilli flakes', '2021-03-03', 1, 389),
(102, 'peppy paneer', 'red paprika', '2021-02-03', 1, 419),
(103, 'veggie paradise', 'red paprika', '2021-01-03', 1, 400),
(104, 'cheese n corn', 'cheese', '2021-01-13', 1, 359),
(105, 'margherita', 'cheese', '2021-01-23', 1, 259),
(106, 'fresh veggie', 'chilli flakes', '2021-01-23', 1, 389),
(107, 'deluxe veggie', 'chilli flakes', '2021-02-24', 1, 539),
(108, 'indi tandori paneer', 'red paprika', '2021-02-24', 1, 539),
(109, 'margherita', 'chilli flakes', '2021-01-20', 2, 659),
(110, 'cheese n corn', 'cheese', '2021-01-13', 2, 789);

-- --------------------------------------------------------

--
-- Table structure for table `staff_management_system_db`
--

CREATE TABLE `staff_management_system_db` (
  `s_id` bigint(10) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `s_shift` varchar(20) NOT NULL,
  `s_date` date NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `s_contactno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_management_system_db`
--

INSERT INTO `staff_management_system_db` (`s_id`, `s_name`, `s_shift`, `s_date`, `s_email`, `s_contactno`) VALUES
(21, 'veena', 'day', '2021-04-02', 'veena@gmail.com', 9876512341),
(22, 'heena', 'day', '2021-03-02', 'heena@gmail.com', 9800512341),
(23, 'rekha', 'day', '2021-03-12', 'rekha@gmail.com', 9822512341),
(24, 'ishan', 'day', '2021-01-12', 'ishan@gmail.com', 9812512341),
(25, 'esha', 'day', '2021-01-12', 'esha@gmail.com', 9812512388),
(26, 'neha', 'day', '2021-02-12', 'neha@gmail.com', 9812502388),
(27, 'nehal', 'day', '2021-02-22', 'nehal@gmail.com', 8812502388),
(28, 'hiral', 'day', '2021-02-02', 'hiral@gmail.com', 8812502399),
(29, 'ram', 'day', '2021-02-03', 'ram@gmail.com', 8812502311),
(30, 'sam', 'day', '2021-01-03', 'sam@gmail.com', 8812502399);

-- --------------------------------------------------------

--
-- Table structure for table `task_management_system_db`
--

CREATE TABLE `task_management_system_db` (
  `t_id` bigint(10) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_lang` varchar(20) NOT NULL,
  `ts_date` date NOT NULL,
  `t_status` varchar(20) NOT NULL,
  `t_committed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_management_system_db`
--

INSERT INTO `task_management_system_db` (`t_id`, `t_name`, `t_lang`, `ts_date`, `t_status`, `t_committed`) VALUES
(1, 'basic programs', 'html', '2021-03-03', 'done', 'yes'),
(2, 'loop programs', 'js', '2021-03-04', 'done', 'yes'),
(3, 'conditional programs', 'js', '2021-03-05', 'done', 'yes'),
(4, 'functions', 'js', '2021-03-05', 'done', 'yes'),
(5, 'basic css', 'css', '2021-03-06', 'done', 'yes'),
(6, 'basic php programs', 'php', '2021-03-07', 'done', 'yes'),
(7, 'php looping programs', 'php', '2021-03-08', 'done', 'yes'),
(8, 'oops theory', 'php', '2021-03-09', 'done', 'no'),
(9, 'php array programs', 'php', '2021-03-09', 'done', 'yes'),
(10, 'php functions ', 'php', '2021-03-11', 'done', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `time_management_system_db`
--

CREATE TABLE `time_management_system_db` (
  `activity_id` bigint(6) NOT NULL,
  `t_day` varchar(20) NOT NULL,
  `t_time` time NOT NULL,
  `t_todo` varchar(20) NOT NULL,
  `t_desc` varchar(50) NOT NULL,
  `t_status` varchar(20) DEFAULT 'update status'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_management_system_db`
--

INSERT INTO `time_management_system_db` (`activity_id`, `t_day`, `t_time`, `t_todo`, `t_desc`, `t_status`) VALUES
(10, 'monday', '12:44:44', 'study', 'study all topics', 'half done'),
(11, 'monday', '13:44:44', 'cook', 'cooking my fav meals', 'important'),
(12, 'monday', '14:44:44', 'nap', 'to take nap for refreshment', 'necessary'),
(13, 'monday', '15:12:23', 'watch tv', 'to watch serial', 'not important'),
(14, 'monday', '16:23:19', 'walking', 'go for walking for sometime', 'necessary'),
(15, 'monday', '17:24:44', 'dance', 'dancing', 'not necessary'),
(16, 'monday', '18:12:23', 'coding', 'to code basic programs', 'important'),
(17, 'monday', '17:23:19', 'dinner', 'take dinner on time', 'necessary'),
(18, 'monday', '19:24:44', 'music', 'listening music', 'not necessary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_management_system_db`
--
ALTER TABLE `attendance_management_system_db`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `certificate_management_system_db`
--
ALTER TABLE `certificate_management_system_db`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `course_management_system_db`
--
ALTER TABLE `course_management_system_db`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `employee_vacation_system_db`
--
ALTER TABLE `employee_vacation_system_db`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `e_mobileno` (`e_mobileno`);

--
-- Indexes for table `fruit_selling_management_system_db`
--
ALTER TABLE `fruit_selling_management_system_db`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `f_date` (`f_date`);

--
-- Indexes for table `online_cake_ordering_system_db`
--
ALTER TABLE `online_cake_ordering_system_db`
  ADD PRIMARY KEY (`cake_id`);

--
-- Indexes for table `online_pizza_ordering_management_system_db`
--
ALTER TABLE `online_pizza_ordering_management_system_db`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `staff_management_system_db`
--
ALTER TABLE `staff_management_system_db`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `task_management_system_db`
--
ALTER TABLE `task_management_system_db`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `time_management_system_db`
--
ALTER TABLE `time_management_system_db`
  ADD PRIMARY KEY (`activity_id`),
  ADD UNIQUE KEY `t_desc` (`t_desc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_management_system_db`
--
ALTER TABLE `attendance_management_system_db`
  MODIFY `student_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `certificate_management_system_db`
--
ALTER TABLE `certificate_management_system_db`
  MODIFY `c_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `course_management_system_db`
--
ALTER TABLE `course_management_system_db`
  MODIFY `c_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee_vacation_system_db`
--
ALTER TABLE `employee_vacation_system_db`
  MODIFY `e_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fruit_selling_management_system_db`
--
ALTER TABLE `fruit_selling_management_system_db`
  MODIFY `f_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `online_cake_ordering_system_db`
--
ALTER TABLE `online_cake_ordering_system_db`
  MODIFY `cake_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `online_pizza_ordering_management_system_db`
--
ALTER TABLE `online_pizza_ordering_management_system_db`
  MODIFY `p_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `staff_management_system_db`
--
ALTER TABLE `staff_management_system_db`
  MODIFY `s_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `task_management_system_db`
--
ALTER TABLE `task_management_system_db`
  MODIFY `t_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `time_management_system_db`
--
ALTER TABLE `time_management_system_db`
  MODIFY `activity_id` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
