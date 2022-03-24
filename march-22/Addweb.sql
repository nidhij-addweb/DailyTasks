-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 07:43 AM
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
-- Database: `Addweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `blog_id` int(20) NOT NULL,
  `blog_name` varchar(50) NOT NULL,
  `blog_type` varchar(50) NOT NULL,
  `blog_likes` varchar(50) NOT NULL,
  `blog_comment` varchar(50) NOT NULL,
  `blog_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`blog_id`, `blog_name`, `blog_type`, `blog_likes`, `blog_comment`, `blog_location`) VALUES
(1, 'photography blog', 'photography', '200', 'niceblog', 'ahmedabad'),
(2, 'inspiration blog', 'inspiration', '300', 'really inspirational', 'udaipur'),
(3, 'travelling blog', 'travel', '150', 'travelling is good', 'surat'),
(4, 'life quotes', 'life', '180', 'good quote', 'udaipur'),
(5, 'recipe blog', 'recipe', '210', 'good recipe', 'ahmedabad'),
(6, 'movie blog', 'movies', '170', 'good', 'surat'),
(7, 'music blog', 'music', '400', 'good', 'udaipur'),
(8, 'coding blog', 'coding', '300', 'good', 'ahmedabad'),
(9, 'playing blog', 'playing games', '300', 'good post', 'surat'),
(10, 'teaching blog', 'teaching', '201', 'teaching is good ', 'udaipur');

-- --------------------------------------------------------

--
-- Table structure for table `books_data`
--

CREATE TABLE `books_data` (
  `book_id` int(12) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_author` varchar(20) NOT NULL,
  `book_type` varchar(200) NOT NULL,
  `book_price` bigint(20) NOT NULL,
  `book_availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_data`
--

INSERT INTO `books_data` (`book_id`, `book_name`, `book_author`, `book_type`, `book_price`, `book_availability`) VALUES
(1, 'the guide', 'r.k.narayan', 'transformation', 1000, 'offline'),
(2, 'malguni days', 'r.k.narayan', 'portaysfacetoflife', 2000, 'offline'),
(3, 'untouchable', 'mulk raj anand', 'argument for eradicating caste system', 3000, 'online'),
(4, 'white tiger', 'aravind adiga', 'darklyhumorousperspectiveofindia\'sclassstruggle', 2000, 'offline'),
(5, 'suitable boy', 'vikram seth', 'the story of four families over a period of 18 months', 4000, 'both'),
(6, ' Sea of Poppies', 'AMITAV GHOSH', 'Her destiny is a tumultuous voyage across the Indian Ocean ', 5000, 'offline'),
(7, 'NARCOPOLIS', 'JEET THAYIL', 'about the lives of a few people, bound together by a common passion – Opium, and about Bombay, in a way we have never heard of before. ', 6000, 'both'),
(8, 'THE GREAT INDIAN', 'SHASHI THAROOR', 'takes the story of the Mahabharata and recasts and resets it in the context of the Indian Independence Movement and the first three decades post-independence.', 7000, 'offline'),
(9, 'VANITY BAGH', 'ANEES SALIM', 'about the life of a boy from the minority community.It is about hopelessness.More than anything else, it is about distress and religious intolerance that can divide humanity and win elections.', 8000, 'offline'),
(10, 'WHAT HAPPENED TO NETAJI?', 'ANUJ DHAR', 'talks about the controversy surrounding the death of Netaji Subhas Chandra Bose and lights the factual position with regard to the air crash theory.', 9000, 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(12) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_mobileno` bigint(10) NOT NULL,
  `customer_address` varchar(20) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_age` bigint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_mobileno`, `customer_address`, `customer_email`, `customer_age`) VALUES
(1, 'nidhi', 7890612345, 'dehgam', 'nidhi@gmail.com', 21),
(2, 'jinal', 9087612345, 'ahmedabad', 'jinal@gmail.com', 22),
(3, 'aaqib', 9087612345, 'ahmedabad', 'aaqib@gmail.com', 21),
(4, 'ravi', 9087677744, 'ahmedabad', 'ravi@gmail.com', 23),
(5, 'ghanshyam', 7890612333, 'ahmedabad', 'gp@gmail.com', 21),
(6, 'sam', 9908777744, 'dehgam', 'sam@gmail.com', 20),
(7, 'ram', 7890612345, 'dehgam', 'ram@gmail.com', 31),
(8, 'seema', 9187612345, 'surat', 's@gmail.com', 25),
(9, 'ravivaghela', 7899612345, 'baroda', 'raviv@gmail.com', 24),
(10, 'nividita', 9987612345, 'gandhinagar', 'nivi@gmail.com', 26);

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `order_id` bigint(10) NOT NULL,
  `order_status` varchar(10) NOT NULL,
  `order_date` date NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `shipped_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`order_id`, `order_status`, `order_date`, `customer_name`, `customer_email`, `shipped_date`) VALUES
(1, 'booked', '2022-03-01', 'nidhi', 'nidhi@gmail.com', '2022-03-09'),
(2, 'packed', '2022-03-10', 'sam', 's@gmail.com', '2022-03-20'),
(3, 'shipped', '2022-02-16', 'ram', 'ram@gmail.com', '2022-02-28'),
(4, 'refunded', '2022-01-25', 'nividita', 'nivi@gmail.com', '2022-01-31'),
(5, 'pending', '2022-03-01', 'smith', 'smith@gmail.com', '2022-03-08'),
(6, 'pending', '2022-02-15', 'jack', 'jack@gmail.com', '2022-02-25'),
(7, 'cancelled', '2022-03-01', 'jones', 'jones@gmail.com', '2022-03-09'),
(8, 'packed', '2022-01-25', 'jinal', 'jinal@gmail.com', '2022-01-31'),
(9, 'booked', '2022-02-16', 'ramesh', 'ramh@gmail.com', '2022-02-28'),
(10, 'packed', '2022-03-10', 'nividita', 'nivi@gmail.com', '2022-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `patient_data`
--

CREATE TABLE `patient_data` (
  `patient_id` int(5) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `patient_address` varchar(20) NOT NULL,
  `patient_wardno` bigint(10) NOT NULL,
  `patient_diagnosis` varchar(20) NOT NULL,
  `patient_age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`patient_id`, `patient_name`, `patient_address`, `patient_wardno`, `patient_diagnosis`, `patient_age`) VALUES
(1, 'smith', 'ahmedabad', 200, 'kidneyfall', 31),
(2, 'jack', 'ahmedabad', 203, 'lowsight', 32),
(3, 'allen', 'surat', 201, 'heart prob', 30),
(4, 'adams', 'baroda', 205, 'sugar prob', 29),
(5, 'adams', 'sonarda', 206, 'heartattack', 48),
(6, 'blake', 'rakhiyal', 208, 'haedache bad', 27),
(7, 'fatima', 'bayad', 213, 'lowsight', 39),
(8, 'shahab', 'ahmedabad', 202, 'headache bad', 27),
(9, 'ram', 'sonarda', 200, 'lowsight', 51),
(10, 'sam', 'rakhiyal', 211, 'headache bad', 23);

-- --------------------------------------------------------

--
-- Table structure for table `person-info`
--

CREATE TABLE `person-info` (
  `person_id` bigint(10) NOT NULL,
  `person_name` varchar(20) NOT NULL,
  `person_email` varchar(20) NOT NULL,
  `person_location` varchar(20) NOT NULL,
  `person_college` varchar(20) NOT NULL,
  `person_mobileno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person-info`
--

INSERT INTO `person-info` (`person_id`, `person_name`, `person_email`, `person_location`, `person_college`, `person_mobileno`) VALUES
(1, 'Nidhi Jain', 'nidhijain@gmail.com', 'dehgam', 'aiet', 9764567730),
(2, 'Jinal Shah', 'jinalshah@gmail.com', 'ahmedabad', 'ks', 8778774400),
(3, 'Ravi vaghela', 'raviv@gmail.com', 'ahmedabad', 'hngu', 9088991234),
(4, 'ghanshyam pandya', 'gp@gmail.com', 'ahmedabad', 'ganpat university', 8888990123),
(5, 'aaqib', 'aaqib@gmail.com', 'ahmedabad', 'gtu', 9088991245),
(6, 'samkit', 's@gmail.com', 'dehgam', 'gtu', 9764567712),
(7, 'ram', 'ram@gmail.com', 'ahmedabad', 'gtu', 9764566612),
(8, 'nividita', 'ni@gmail.com', 'ahmedabad', 'gtu', 8877901347),
(9, 'sam', 'sam@gmail.com', 'dehgam', 'gtu', 8765100871),
(10, 'nidhi ', 'nidhij@gmail.com', 'ahmedabad', 'gtu', 9088999876);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_data`
--

CREATE TABLE `restaurant_data` (
  `table_no` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `items_name` varchar(20) NOT NULL,
  `item_price` int(10) NOT NULL,
  `items_quantity` int(10) NOT NULL,
  `total_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant_data`
--

INSERT INTO `restaurant_data` (`table_no`, `order_id`, `items_name`, `item_price`, `items_quantity`, `total_bill`) VALUES
(12, 1, 'pizza', 200, 2, 400),
(13, 2, 'cheese toast', 100, 2, 200),
(13, 3, 'frankie', 50, 1, 50),
(14, 4, 'chole bhature', 100, 1, 100),
(14, 5, 'icecream', 50, 2, 100),
(15, 6, 'cold coffee', 70, 1, 70),
(18, 7, 'maska bun', 50, 2, 100),
(19, 8, 'veg cheese toast', 100, 1, 100),
(20, 9, 'lunch', 200, 1, 200),
(21, 10, 'cheese sandwich', 100, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(10) NOT NULL,
  `store_name` varchar(20) NOT NULL,
  `store_phone` bigint(10) NOT NULL,
  `store_email` varchar(20) NOT NULL,
  `store_city` varchar(20) NOT NULL,
  `store_street` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `store_phone`, `store_email`, `store_city`, `store_street`) VALUES
(39, 'a1 mobile', 18126719100, 'a1mob@gmail.com', 'surat', 'poddararcade'),
(100, 'shree mahalaxmi', 9876003456, 'shreem@gmail.com', 'baroda', 'sukunflats'),
(123, 'best shopping', 9876123456, 'bshop@gmail.com', 'ahmedabad', 'tirupaticomplexopp.'),
(124, 'lifestyle stores', 18006719000, 'lifestore@gmail.com', 'ahmedabad', 'nearvastrapur'),
(129, 'ladies readymate', 18006719222, 'ladies@gmail.com', 'surat', 'chowk bazar rd'),
(152, 'provision store', 18006719120, 'provistore@gmail.com', 'baroda', 'gunjan tower'),
(200, 'luckybookstore', 9871113456, 'luckystore@gmail.com', 'surat', 'goldensquare'),
(234, 'textile market', 18106719000, 'textmar@gmail.com', 'surat', 'shivparksocopp.'),
(400, 'shoppers stop', 9871113111, 'shopper@gmail.com', 'surat', 'dumasroadretail'),
(567, 'hastee mart', 9876093456, 'hastmar@gmail.com', 'surat', 'ringroadbesidehotel');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `student_no` bigint(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_class` bigint(5) NOT NULL,
  `student_div` varchar(5) NOT NULL,
  `student_grade` varchar(5) NOT NULL,
  `student_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`student_no`, `student_name`, `student_class`, `student_div`, `student_grade`, `student_address`) VALUES
(1, 'nidhi jain', 9, 'A', 'A++', 'dehgam'),
(2, 'jinal', 9, 'A', 'A++', 'ahmedabad'),
(3, 'ravi vaghela', 9, 'A', 'A+', 'Patan'),
(4, 'ghanshyam', 9, 'A', 'A+', 'ahmedabad'),
(5, 'ram', 9, 'A', 'B', 'dehgam'),
(6, 'sam', 9, 'A', 'B', 'sonarda'),
(7, 'nividita', 9, 'C', 'C', 'dehgam'),
(8, 'ravi v', 9, 'A', 'A+', 'rakhiyal'),
(9, 'james', 9, 'A', 'C', 'bayad'),
(10, 'smith', 9, 'A', 'B++', 'bayad');

-- --------------------------------------------------------

--
-- Table structure for table `travelling`
--

CREATE TABLE `travelling` (
  `booking_id` bigint(20) NOT NULL,
  `passenger_name` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `departure_time` datetime NOT NULL,
  `arrival_time` datetime NOT NULL,
  `source` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelling`
--

INSERT INTO `travelling` (`booking_id`, `passenger_name`, `destination`, `departure_time`, `arrival_time`, `source`) VALUES
(1, 'nidhi', 'udaipur', '2020-03-23 07:05:58', '2020-03-22 07:05:58', 'ahmedabad'),
(2, 'jinal', 'udaipur', '2020-02-22 07:07:23', '2020-02-23 07:07:23', 'ahmedabad'),
(3, 'ravi', 'patan', '2020-03-29 07:08:02', '2020-03-30 07:08:02', 'ahmedabad'),
(4, 'sam', 'udaipur', '2022-03-23 07:08:42', '2022-03-23 07:08:42', 'ahmedabad'),
(5, 'ghanshyam', 'udaipur', '2021-03-23 07:09:25', '2021-03-23 07:09:25', 'ahmedabad'),
(6, 'ram', 'udaipur', '2021-03-23 07:09:59', '2021-03-23 07:09:59', 'ahmedabad'),
(7, 'aaqib', 'udaipur', '2021-03-23 07:10:27', '2021-03-23 07:10:27', 'ahmedabad'),
(8, 'nidhijain', 'neemuch', '2021-04-23 07:11:03', '2021-04-23 07:11:03', 'ahmedabad'),
(9, 'jinal', 'surat', '2021-05-23 07:11:58', '2021-05-24 07:11:58', 'chiloda'),
(10, 'ravi v', 'udaipur', '2020-03-23 07:13:35', '2020-03-24 07:13:35', 'ahmedabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `books_data`
--
ALTER TABLE `books_data`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `person-info`
--
ALTER TABLE `person-info`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `restaurant_data`
--
ALTER TABLE `restaurant_data`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `blog_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books_data`
--
ALTER TABLE `books_data`
  MODIFY `book_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `person-info`
--
ALTER TABLE `person-info`
  MODIFY `person_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restaurant_data`
--
ALTER TABLE `restaurant_data`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=568;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
