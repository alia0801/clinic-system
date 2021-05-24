-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `clinic`
--

-- --------------------------------------------------------

--
-- 資料表結構 `chemist`
--

CREATE TABLE `chemist` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `workday` varchar(10) NOT NULL,
  `time_period` varchar(10) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `chemist`
--

INSERT INTO `chemist` (`id`, `name`, `phone`, `workday`, `time_period`, `salary`) VALUES
(51, 'Caden', '0964362869', 'Mon', 'AM', 38000),
(52, 'Riley', '0905188167', 'Mon', 'PM', 38000),
(53, 'Vivian', '0963103575', 'Tue', 'AM', 44000),
(54, 'Aiden', '0913182151', 'Tue', 'PM', 47000),
(55, 'Amelia', '0953864741', 'Wed', 'AM', 44000),
(56, 'Elijah', '0926237120', 'Wed', 'PM', 35000),
(57, 'Lisa', '0955863463', 'Thu', 'AM', 50000),
(58, 'Mia', '0955147383', 'Thu', 'PM', 35000),
(59, 'Caden', '0950136699', 'Fri', 'AM', 35000),
(60, 'Patricia', '0976122048', 'Fri', 'PM', 47000);

-- --------------------------------------------------------

--
-- 資料表結構 `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `department`, `phone`, `salary`) VALUES
(1, 'Ava', 'Home Medicine', '0973904276', 100000),
(2, 'Olivia', 'Internal Medicine', '0978722635', 60000),
(3, 'Sophia', 'Home Medicine', '0956040985', 65000),
(4, 'Vivian', 'Otorhinolaryngology', '0945991033', 85000),
(5, 'Lisa', 'Otorhinolaryngology', '0903456807', 100000),
(6, 'Olivia', 'Home Medicine', '0921301035', 60000),
(7, 'Grayson', 'Home Medicine', '0954541507', 55000),
(8, 'Isabella', 'Home Medicine', '0921028758', 70000),
(9, 'Caden', 'Home Medicine', '0903569454', 90000),
(10, 'Mia', 'Home Medicine', '0901111596', 50000);

-- --------------------------------------------------------

--
-- 資料表結構 `examine_record`
--

CREATE TABLE `examine_record` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `nurse_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `examine_record`
--

INSERT INTO `examine_record` (`id`, `date`, `nurse_id`, `patient_id`) VALUES
(501, '2020-10-07', 23, 111),
(502, '2020-10-06', 21, 103),
(503, '2020-10-07', 24, 107),
(504, '2020-10-08', 26, 114),
(505, '2020-10-06', 22, 112),
(506, '2020-10-08', 25, 111),
(507, '2020-10-06', 21, 106),
(508, '2020-10-01', 25, 112),
(509, '2020-10-07', 24, 113),
(510, '2020-10-07', 24, 109),
(511, '2020-10-13', 22, 101),
(512, '2020-10-02', 27, 112),
(513, '2020-10-10', 30, 106),
(514, '2020-10-08', 25, 105),
(515, '2020-10-14', 24, 110),
(516, '2020-10-03', 30, 110),
(517, '2020-10-06', 22, 103),
(518, '2020-10-14', 24, 103),
(519, '2020-10-10', 30, 102),
(520, '2020-10-07', 24, 110);

-- --------------------------------------------------------

--
-- 資料表結構 `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `workday` varchar(10) NOT NULL,
  `time_period` varchar(10) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `nurse`
--

INSERT INTO `nurse` (`id`, `name`, `phone`, `workday`, `time_period`, `salary`) VALUES
(21, 'Robert', '0958852346', 'Mon', 'AM', 28000),
(22, 'Mary', '0910018393', 'Mon', 'PM', 34000),
(23, 'Noah', '0941858168', 'Tue', 'AM', 28000),
(24, 'Isabella', '0976482534', 'Tue', 'PM', 28000),
(25, 'Michael', '0906310016', 'Wed', 'AM', 40000),
(26, 'Aiden', '0963476626', 'Wed', 'PM', 25000),
(27, 'Jackson', '0918311655', 'Thu', 'AM', 34000),
(28, 'Barbara', '0980885178', 'Thu', 'PM', 28000),
(29, 'Barbara', '0910531614', 'Fri', 'AM', 25000),
(30, 'Lisa', '0981635549', 'Fri', 'PM', 28000);

-- --------------------------------------------------------

--
-- 資料表結構 `outpatient`
--

CREATE TABLE `outpatient` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_period` varchar(10) NOT NULL,
  `nurse_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `outpatient`
--

INSERT INTO `outpatient` (`id`, `date`, `time_period`, `nurse_id`) VALUES
(1001, '2020-10-01', 'AM', 25),
(1002, '2020-10-01', 'PM', 26),
(1003, '2020-10-02', 'AM', 27),
(1004, '2020-10-02', 'PM', 28),
(1005, '2020-10-03', 'AM', 29),
(1006, '2020-10-03', 'PM', 30),
(1007, '2020-10-06', 'AM', 21),
(1008, '2020-10-06', 'PM', 22),
(1009, '2020-10-07', 'AM', 23),
(1010, '2020-10-07', 'PM', 24),
(1011, '2020-10-08', 'AM', 25),
(1012, '2020-10-08', 'PM', 26),
(1013, '2020-10-09', 'AM', 27),
(1014, '2020-10-09', 'PM', 28),
(1015, '2020-10-10', 'AM', 29),
(1016, '2020-10-10', 'PM', 30),
(1017, '2020-10-13', 'AM', 21),
(1018, '2020-10-13', 'PM', 22),
(1019, '2020-10-14', 'AM', 23),
(1020, '2020-10-14', 'PM', 24);

-- --------------------------------------------------------

--
-- 資料表結構 `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` char(1) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `patient`
--

INSERT INTO `patient` (`id`, `name`, `sex`, `birthday`, `address`, `phone`) VALUES
(101, 'Amelia', 'W', '1983-03-18', 'No.56, Datong Rd.', '0987381271'),
(102, 'Jennifer', 'W', '1993-08-23', 'No.488, Dongning Rd.', '0993934140'),
(103, 'Isabella', 'W', '1987-07-07', 'No.83, Dongning Rd.', '0954533702'),
(104, 'Riley', 'W', '1984-04-16', 'No.648, Changrong Rd.', '0972013773'),
(105, 'Margaret', 'W', '1987-06-06', 'No.203, Datong Rd.', '0971862724'),
(106, 'Margaret', 'W', '1977-11-19', 'No.774, Linsen Rd.', '0951383421'),
(107, 'Aria', 'W', '1981-11-20', 'No.511, Changrong Rd.', '0948320319'),
(108, 'Mason', 'M', '1988-07-22', 'No.868, Dongan Rd.', '0959351442'),
(109, 'Amy', 'W', '1997-01-14', 'No.454, Datong Rd.', '0929745929'),
(110, 'Peter', 'M', '1995-12-03', 'No.216, Dongning Rd.', '0934430619'),
(111, 'Charles', 'M', '1981-07-27', 'No.540, Dongan Rd.', '0904657121'),
(112, 'Jennifer', 'W', '1992-05-06', 'No.599, Qianfeng Rd.', '0964646750'),
(113, 'Riley', 'W', '1982-05-18', 'No.313, Datong Rd.', '0926113561'),
(114, 'Michael', 'M', '1973-09-18', 'No.139, Qianfeng Rd.', '0985056153'),
(115, 'Michael', 'M', '1987-08-03', 'No.849, Qianfeng Rd.', '0981261291');

-- --------------------------------------------------------

--
-- 資料表結構 `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `chemist_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `prescription`
--

INSERT INTO `prescription` (`id`, `date`, `doctor_id`, `chemist_id`, `patient_id`) VALUES
(5001, '2020-10-09', 9, 58, 107),
(5002, '2020-10-02', 9, 58, 114),
(5003, '2020-10-13', 9, 51, 104),
(5004, '2020-10-06', 2, 51, 101),
(5005, '2020-10-13', 4, 52, 107),
(5006, '2020-10-08', 5, 56, 113),
(5007, '2020-10-01', 2, 55, 103),
(5008, '2020-10-13', 10, 52, 101),
(5009, '2020-10-14', 3, 53, 107),
(5010, '2020-10-09', 9, 58, 105),
(5011, '2020-10-06', 3, 52, 102),
(5012, '2020-10-10', 7, 60, 107),
(5013, '2020-10-02', 7, 58, 104),
(5014, '2020-10-14', 10, 53, 108),
(5015, '2020-10-08', 6, 56, 110),
(5016, '2020-10-03', 2, 60, 103),
(5017, '2020-10-13', 7, 51, 106),
(5018, '2020-10-13', 2, 52, 112),
(5019, '2020-10-07', 5, 54, 109),
(5020, '2020-10-10', 6, 60, 104),
(5021, '2020-10-06', 6, 51, 115),
(5022, '2020-10-06', 6, 52, 102),
(5023, '2020-10-02', 3, 58, 104),
(5024, '2020-10-13', 8, 51, 108),
(5025, '2020-10-09', 4, 57, 106),
(5026, '2020-10-14', 9, 53, 112),
(5027, '2020-10-06', 6, 52, 109),
(5028, '2020-10-03', 4, 60, 102),
(5029, '2020-10-09', 10, 57, 115),
(5030, '2020-10-06', 7, 51, 113),
(5031, '2020-10-07', 4, 54, 104),
(5032, '2020-10-01', 8, 55, 104),
(5033, '2020-10-02', 6, 57, 103),
(5034, '2020-10-06', 3, 52, 109),
(5035, '2020-10-08', 6, 55, 114),
(5036, '2020-10-09', 6, 58, 115),
(5037, '2020-10-03', 1, 59, 107),
(5038, '2020-10-10', 7, 60, 103),
(5039, '2020-10-09', 4, 58, 109),
(5040, '2020-10-06', 7, 52, 111),
(5041, '2020-10-03', 4, 59, 107),
(5042, '2020-10-02', 5, 57, 104),
(5043, '2020-10-14', 1, 54, 102),
(5044, '2020-10-10', 10, 60, 109),
(5045, '2020-10-13', 7, 51, 104),
(5046, '2020-10-03', 6, 60, 106),
(5047, '2020-10-07', 1, 53, 105),
(5048, '2020-10-07', 3, 54, 105),
(5049, '2020-10-03', 9, 59, 104),
(5050, '2020-10-01', 9, 56, 115);

-- --------------------------------------------------------

--
-- 資料表結構 `register_record`
--

CREATE TABLE `register_record` (
  `outpatient_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `nurse_id` int(11) NOT NULL,
  `register_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `register_record`
--

INSERT INTO `register_record` (`outpatient_id`, `patient_id`, `nurse_id`, `register_time`) VALUES
(1014, 107, 28, '16:56:09'),
(1004, 114, 28, '16:48:24'),
(1017, 104, 21, '09:51:57'),
(1007, 101, 21, '10:51:48'),
(1018, 107, 22, '15:32:30'),
(1012, 113, 26, '16:38:01'),
(1001, 103, 25, '10:30:01'),
(1018, 101, 22, '17:07:01'),
(1019, 107, 23, '10:43:44'),
(1014, 105, 28, '16:08:42'),
(1008, 102, 22, '17:47:33'),
(1016, 107, 30, '17:20:53'),
(1004, 104, 28, '17:18:38'),
(1019, 108, 23, '10:35:27'),
(1012, 110, 26, '17:27:21'),
(1006, 103, 30, '17:43:52'),
(1017, 106, 21, '09:03:13'),
(1018, 112, 22, '15:56:21'),
(1010, 109, 24, '16:44:52'),
(1016, 104, 30, '16:23:32'),
(1007, 115, 21, '11:42:05'),
(1008, 102, 22, '15:43:09'),
(1004, 104, 28, '15:16:53'),
(1017, 108, 21, '09:47:36'),
(1013, 106, 27, '10:01:22'),
(1019, 112, 23, '10:24:46'),
(1008, 109, 22, '16:16:59'),
(1006, 102, 30, '16:33:21'),
(1013, 115, 27, '10:13:48'),
(1007, 113, 21, '11:36:02'),
(1010, 104, 24, '15:44:57'),
(1001, 104, 25, '09:04:22'),
(1003, 103, 27, '10:25:52'),
(1008, 109, 22, '16:15:37'),
(1011, 114, 25, '10:47:43'),
(1014, 115, 28, '15:33:36'),
(1005, 107, 29, '11:58:05'),
(1016, 103, 30, '16:31:04'),
(1014, 109, 28, '16:55:25'),
(1008, 111, 22, '17:25:13'),
(1005, 107, 29, '10:26:53'),
(1003, 104, 27, '11:43:03'),
(1020, 102, 24, '17:35:15'),
(1016, 109, 30, '16:02:24'),
(1017, 104, 21, '09:27:57'),
(1006, 106, 30, '16:14:49'),
(1009, 105, 23, '11:08:37'),
(1010, 105, 24, '15:06:40'),
(1005, 104, 29, '09:56:58'),
(1002, 115, 26, '15:30:03');

-- --------------------------------------------------------

--
-- 資料表結構 `treat_record`
--

CREATE TABLE `treat_record` (
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `outpatient_id` int(11) NOT NULL,
  `disease` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `treat_record`
--

INSERT INTO `treat_record` (`doctor_id`, `patient_id`, `outpatient_id`, `disease`) VALUES
(9, 107, 1014, 'fatty liver'),
(9, 114, 1004, 'chronic hepatitis'),
(9, 104, 1017, 'bronchitis'),
(2, 101, 1007, 'chronic hepatitis'),
(4, 107, 1018, 'fatty liver'),
(5, 113, 1012, 'cold'),
(2, 103, 1001, 'chronic hepatitis'),
(10, 101, 1018, 'Stomach flu'),
(3, 107, 1019, 'influenza'),
(9, 105, 1014, 'chronic hepatitis'),
(3, 102, 1008, 'cold'),
(7, 107, 1016, 'bronchitis'),
(7, 104, 1004, 'cold'),
(10, 108, 1019, 'cold'),
(6, 110, 1012, 'gastric ulcer'),
(2, 103, 1006, 'chronic hepatitis'),
(7, 106, 1017, 'bronchitis'),
(2, 112, 1018, 'gastric ulcer'),
(5, 109, 1010, 'nephrolithiasis'),
(6, 104, 1016, 'cold'),
(6, 115, 1007, 'fatty liver'),
(6, 102, 1008, 'chronic hepatitis'),
(3, 104, 1004, 'influenza'),
(8, 108, 1017, 'influenza'),
(4, 106, 1013, 'nephrolithiasis'),
(9, 112, 1019, 'chronic hepatitis'),
(6, 109, 1008, 'Stomach flu'),
(4, 102, 1006, 'Stomach flu'),
(10, 115, 1013, 'bronchitis'),
(7, 113, 1007, 'gastric ulcer'),
(4, 104, 1010, 'chronic hepatitis'),
(8, 104, 1001, 'influenza'),
(6, 103, 1003, 'influenza'),
(3, 109, 1008, 'cold'),
(6, 114, 1011, 'bronchitis'),
(6, 115, 1014, 'Stomach flu'),
(1, 107, 1005, 'influenza'),
(7, 103, 1016, 'gastric ulcer'),
(4, 109, 1014, 'gastric ulcer'),
(7, 111, 1008, 'Stomach flu'),
(4, 107, 1005, 'bronchitis'),
(5, 104, 1003, 'fatty liver'),
(1, 102, 1020, 'gastric ulcer'),
(10, 109, 1016, 'bronchitis'),
(7, 104, 1017, 'cold'),
(6, 106, 1006, 'chronic hepatitis'),
(1, 105, 1009, 'Stomach flu'),
(3, 105, 1010, 'influenza'),
(9, 104, 1005, 'Stomach flu'),
(9, 115, 1002, 'influenza');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
