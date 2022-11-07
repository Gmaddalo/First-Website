-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2022 at 07:28 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1-log
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Cisco`
--

-- --------------------------------------------------------

--
-- Table structure for table `Actuals`
--

CREATE TABLE `Actuals` (
  `Actuals_ID` int(11) NOT NULL,
  `Amount` decimal(16,2) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Type_ID` int(11) NOT NULL,
  `Week_quarter_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Actuals`
--

INSERT INTO `Actuals` (`Actuals_ID`, `Amount`, `Admin_ID`, `Type_ID`, `Week_quarter_ID`) VALUES
(10, '2161205.37', 6, 2, 7),
(11, '59679.47', 6, 4, 7),
(12, '37760.85', 6, 1, 7),
(13, '119357.43', 6, 3, 7),
(14, '4353066.24', 6, 2, 8),
(15, '161828.05', 6, 4, 8),
(16, '71814.91', 6, 1, 8),
(17, '220755.55', 6, 3, 8),
(18, '6698047.67', 6, 2, 9),
(19, '302493.59', 6, 4, 9),
(20, '85810.75', 6, 1, 9),
(21, '255073.41', 6, 3, 9),
(23, '7235018.65', 6, 2, 10),
(24, '353066.01', 6, 4, 10),
(25, '93721.89', 6, 1, 10),
(26, '336354.99', 6, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Admin_ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Admin_ID`, `Fname`, `Lname`, `Email`, `Password`) VALUES
(3, 'Ian', 'T', 'i@gmail.com', '$2y$10$E6xc6F/7IIi/CFzgdlG7o.D4hKtzNxnxG9eBDmMJWCINAX8IdJdQ2'),
(6, 'lucy', 'M', 'lucym@gmail.com', '$2y$10$bvdSFHR7o9v1YSu9gDD4zeMLV7nRt5gm2fVGFJMWHx26DdM/ZQ5Rq'),
(7, 'Gerry', 'L', 'gerry@gmail.com', '$2y$10$NoeV1iTuZVUX1vu/EG.QvODbD.eq8FHbU08Qpms0UBmSP6fK4iXPK');

-- --------------------------------------------------------

--
-- Table structure for table `Budget`
--

CREATE TABLE `Budget` (
  `Budget_ID` int(11) NOT NULL,
  `Amount` decimal(16,2) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Type_ID` int(11) NOT NULL,
  `Week_quarter_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Budget`
--

INSERT INTO `Budget` (`Budget_ID`, `Amount`, `Admin_ID`, `Type_ID`, `Week_quarter_ID`) VALUES
(6, '7176975.49', 6, 2, 7),
(7, '364999.99', 6, 4, 7),
(8, '180000.14', 6, 1, 7),
(9, '335768.52', 6, 3, 7),
(10, '7176975.49', 6, 2, 8),
(11, '364999.99', 6, 4, 8),
(12, '180000.14', 6, 1, 8),
(13, '335768.52', 6, 3, 8),
(14, '7176975.49', 6, 2, 9),
(15, '364999.99', 6, 4, 9),
(16, '335768.52', 6, 3, 9),
(17, '7176975.49', 6, 2, 10),
(18, '364999.99', 6, 4, 10),
(19, '180000.14', 6, 1, 10),
(20, '335768.52', 6, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Expenses`
--

CREATE TABLE `Expenses` (
  `Expense_ID` int(11) NOT NULL,
  `Amount` decimal(16,2) NOT NULL,
  `Expense_name` varchar(50) NOT NULL,
  `Type_ID` int(11) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Week_quarter_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Expenses`
--

INSERT INTO `Expenses` (`Expense_ID`, `Amount`, `Expense_name`, `Type_ID`, `Admin_ID`, `Week_quarter_ID`) VALUES
(67, '1404783.49', 'Salary', 2, 6, 7),
(68, '540301.34', 'Comp', 2, 6, 7),
(69, '216120.54', 'Fringes', 2, 6, 7),
(70, '50727.55', 'Contractors', 4, 6, 7),
(71, '8951.92', 'Cross Charges', 4, 6, 7),
(72, '18880.43', 'Travel', 1, 6, 7),
(73, '11328.26', 'Training', 1, 6, 7),
(74, '4531.30', 'Equipment', 1, 6, 7),
(75, '3020.87', 'Fun Events', 1, 6, 7),
(76, '11935.74', 'Depreciation', 3, 6, 7),
(77, '59678.72', 'Rent and Leasing', 3, 6, 7),
(78, '47742.97', 'Other Allocations', 3, 6, 7),
(79, '1418578.47', 'Salary', 2, 6, 8),
(80, '545607.10', 'Comp', 2, 6, 8),
(81, '218242.84', 'Fringes', 2, 6, 8),
(82, '75718.99', 'Contractors', 4, 6, 8),
(83, '13362.17', 'Cross Charges', 4, 6, 8),
(84, '17597.31', 'Travel', 1, 6, 8),
(85, '10558.38', 'Training', 1, 6, 8),
(86, '4223.35', 'Equipment', 1, 6, 8),
(87, '2815.57', 'Fun Events', 1, 6, 8),
(88, '10692.41', 'Depreciation', 3, 6, 8),
(89, '53462.03', 'Rent and Leasing', 3, 6, 8),
(90, '42769.62', 'Other Allocations', 3, 6, 8),
(91, '1456858.61', 'Salary', 2, 6, 9),
(92, '560330.23', 'Comp', 2, 6, 9),
(93, '224132.09', 'Fringes', 2, 6, 9),
(94, '88311.07', 'Contractors', 4, 6, 9),
(95, '15584.31', 'Cross Charges', 4, 6, 9),
(96, '13739.96', 'Travel', 1, 6, 9),
(97, '8243.97', 'Training', 1, 6, 9),
(98, '3297.59', 'Equipment', 1, 6, 9),
(99, '2198.39', 'Fun Events', 1, 6, 9),
(100, '8112.40', 'Depreciation', 3, 6, 9),
(101, '40561.98', 'Rent and Leasing', 3, 6, 9),
(102, '32449.58', 'Other Allocations', 3, 6, 9),
(103, '1447003.73', 'Salary', 2, 6, 10),
(104, '556539.90', 'Comp', 2, 6, 10),
(105, '222615.96', 'Fringes', 2, 6, 10),
(106, '92340.34', 'Contractors', 4, 6, 10),
(107, '16295.35', 'Cross Charges', 4, 6, 10),
(108, '14418.75', 'Travel', 1, 6, 10),
(109, '8651.25', 'Training', 1, 6, 10),
(110, '3460.50', 'Equipment', 1, 6, 10),
(111, '2307.00', 'Fun Events', 1, 6, 10),
(112, '10349.38', 'Depreciation', 3, 6, 10),
(113, '51746.92', 'Rent and Leasing', 3, 6, 10),
(114, '41397.54', 'Other Allocations', 3, 6, 10),
(117, '25000000.00', 'HOUSES', 1, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Expense_Type`
--

CREATE TABLE `Expense_Type` (
  `Type_ID` int(11) NOT NULL,
  `Expense_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Expense_Type`
--

INSERT INTO `Expense_Type` (`Type_ID`, `Expense_type_name`) VALUES
(1, 'Discretionary '),
(2, 'Headcount'),
(3, 'Controllable'),
(4, 'Outsource');

-- --------------------------------------------------------

--
-- Table structure for table `Quarters`
--

CREATE TABLE `Quarters` (
  `Quarter_ID` int(11) NOT NULL,
  `Quarter_start` date NOT NULL,
  `Quarter_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Quarters`
--

INSERT INTO `Quarters` (`Quarter_ID`, `Quarter_start`, `Quarter_end`) VALUES
(4, '2020-01-26', '2020-04-25'),
(5, '2019-10-27', '2020-01-25'),
(6, '2021-07-01', '2021-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `Viewer`
--

CREATE TABLE `Viewer` (
  `Viewer_ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Viewer`
--

INSERT INTO `Viewer` (`Viewer_ID`, `Fname`, `Lname`, `Email`, `Password`) VALUES
(3, 'Tark', 'B', 't@gmail.com', '$2y$10$P.T1P.ABxXD1DY97ITuCV.INCPT9Nb6Ynr0muAUqUTElhwF2CecbW'),
(8, 'gio', 'm', 'giovannim2022@internationalsf.org', '$2y$10$tBLczME28/N/Q8BvGp5.eO2VhFlgkpQlKMwYMsQrlB5hF1uOAqKgK'),
(9, 'tala', 'cool', 't@gmail.com', '$2y$10$8jF8LlON5V5KHNkZt6vameGEUsRTCLcpF1vEskoVNWBFCkuVYPLAS');

-- --------------------------------------------------------

--
-- Table structure for table `Week_in_quarters`
--

CREATE TABLE `Week_in_quarters` (
  `Week_quarter_ID` int(11) NOT NULL,
  `Quarter_ID` int(11) NOT NULL,
  `Day_due` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Week_in_quarters`
--

INSERT INTO `Week_in_quarters` (`Week_quarter_ID`, `Quarter_ID`, `Day_due`) VALUES
(7, 4, '2020-02-22'),
(8, 4, '2020-03-21'),
(9, 4, '2020-04-18'),
(10, 4, '2020-04-25'),
(11, 5, '2019-11-23'),
(12, 5, '2019-12-21'),
(13, 5, '2020-01-18'),
(14, 5, '2020-01-25'),
(15, 6, '2021-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `Year_Forecast`
--

CREATE TABLE `Year_Forecast` (
  `Year_forecast_ID` int(11) NOT NULL,
  `Amount` decimal(16,2) NOT NULL,
  `Type_ID` int(11) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Week_Quarter_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Year_Forecast`
--

INSERT INTO `Year_Forecast` (`Year_forecast_ID`, `Amount`, `Type_ID`, `Admin_ID`, `Week_Quarter_ID`) VALUES
(10, '6820155.97', 2, 6, 11),
(11, '472412.10', 4, 6, 11),
(12, '63808.91', 1, 6, 11),
(13, '383832.12', 3, 6, 11),
(14, '6822435.09', 2, 6, 12),
(15, '649707.00', 4, 6, 12),
(16, '60661.59', 1, 6, 12),
(17, '346957.03', 3, 6, 12),
(18, '6940361.01', 2, 6, 13),
(19, '610625.52', 4, 6, 13),
(20, '45673.94', 1, 6, 13),
(21, '336163.78', 3, 6, 13),
(22, '6959849.23', 2, 6, 14),
(23, '624936.48', 4, 6, 14),
(24, '43334.46', 1, 6, 14),
(25, '336091.78', 3, 6, 14),
(90, '122722.80', 1, 6, 7),
(91, '7023917.45', 2, 6, 7),
(92, '387911.65', 3, 6, 7),
(93, '193958.28', 4, 6, 7),
(100, '115808.17', 1, 6, 8),
(101, '7081101.75', 2, 6, 8),
(102, '354410.63', 3, 6, 8),
(103, '273179.50', 4, 6, 8),
(106, '92680.73', 1, 6, 9),
(107, '7258377.90', 2, 6, 9),
(108, '275354.40', 3, 6, 9),
(109, '328467.44', 4, 6, 9),
(114, '93721.89', 1, 6, 10),
(115, '7235018.65', 2, 6, 10),
(116, '336354.99', 3, 6, 10),
(117, '353066.01', 4, 6, 10),
(118, '111111100.00', 1, 3, 11),
(119, '16000.00', 1, 7, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Actuals`
--
ALTER TABLE `Actuals`
  ADD PRIMARY KEY (`Actuals_ID`),
  ADD KEY `User_ID2` (`Admin_ID`),
  ADD KEY `Type_ID1` (`Type_ID`),
  ADD KEY `Week_quarter_ID` (`Week_quarter_ID`);

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `Budget`
--
ALTER TABLE `Budget`
  ADD PRIMARY KEY (`Budget_ID`),
  ADD KEY `User_ID3` (`Admin_ID`),
  ADD KEY `Type_ID2` (`Type_ID`),
  ADD KEY `Week_quarter_ID1` (`Week_quarter_ID`);

--
-- Indexes for table `Expenses`
--
ALTER TABLE `Expenses`
  ADD PRIMARY KEY (`Expense_ID`),
  ADD KEY `User_ID` (`Type_ID`),
  ADD KEY `User_ID1` (`Admin_ID`),
  ADD KEY `Week_quarter_ID4` (`Week_quarter_ID`);

--
-- Indexes for table `Expense_Type`
--
ALTER TABLE `Expense_Type`
  ADD PRIMARY KEY (`Type_ID`);

--
-- Indexes for table `Quarters`
--
ALTER TABLE `Quarters`
  ADD PRIMARY KEY (`Quarter_ID`);

--
-- Indexes for table `Viewer`
--
ALTER TABLE `Viewer`
  ADD PRIMARY KEY (`Viewer_ID`);

--
-- Indexes for table `Week_in_quarters`
--
ALTER TABLE `Week_in_quarters`
  ADD PRIMARY KEY (`Week_quarter_ID`),
  ADD KEY `Quarter_ID` (`Quarter_ID`);

--
-- Indexes for table `Year_Forecast`
--
ALTER TABLE `Year_Forecast`
  ADD PRIMARY KEY (`Year_forecast_ID`),
  ADD KEY `Type_ID5` (`Type_ID`),
  ADD KEY `Admin_ID5` (`Admin_ID`),
  ADD KEY `Week_quarter_ID5` (`Week_Quarter_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Actuals`
--
ALTER TABLE `Actuals`
  MODIFY `Actuals_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Budget`
--
ALTER TABLE `Budget`
  MODIFY `Budget_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Expenses`
--
ALTER TABLE `Expenses`
  MODIFY `Expense_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `Expense_Type`
--
ALTER TABLE `Expense_Type`
  MODIFY `Type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Quarters`
--
ALTER TABLE `Quarters`
  MODIFY `Quarter_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Viewer`
--
ALTER TABLE `Viewer`
  MODIFY `Viewer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Week_in_quarters`
--
ALTER TABLE `Week_in_quarters`
  MODIFY `Week_quarter_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Year_Forecast`
--
ALTER TABLE `Year_Forecast`
  MODIFY `Year_forecast_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Actuals`
--
ALTER TABLE `Actuals`
  ADD CONSTRAINT `Admin_ID2` FOREIGN KEY (`Admin_ID`) REFERENCES `Admin` (`Admin_ID`),
  ADD CONSTRAINT `Type_ID1` FOREIGN KEY (`Type_ID`) REFERENCES `Expense_Type` (`Type_ID`),
  ADD CONSTRAINT `Week_quarter_ID` FOREIGN KEY (`Week_quarter_ID`) REFERENCES `Week_in_quarters` (`Week_quarter_ID`);

--
-- Constraints for table `Budget`
--
ALTER TABLE `Budget`
  ADD CONSTRAINT `Admin_ID3` FOREIGN KEY (`Admin_ID`) REFERENCES `Admin` (`Admin_ID`),
  ADD CONSTRAINT `Type_ID2` FOREIGN KEY (`Type_ID`) REFERENCES `Expense_Type` (`Type_ID`),
  ADD CONSTRAINT `Week_quarter_ID1` FOREIGN KEY (`Week_quarter_ID`) REFERENCES `Week_in_quarters` (`Week_quarter_ID`);

--
-- Constraints for table `Expenses`
--
ALTER TABLE `Expenses`
  ADD CONSTRAINT `Admin_ID1` FOREIGN KEY (`Admin_ID`) REFERENCES `Admin` (`Admin_ID`),
  ADD CONSTRAINT `Type_ID` FOREIGN KEY (`Type_ID`) REFERENCES `Expense_Type` (`Type_ID`),
  ADD CONSTRAINT `Week_quarter_ID4` FOREIGN KEY (`Week_quarter_ID`) REFERENCES `Week_in_quarters` (`Week_quarter_ID`);

--
-- Constraints for table `Week_in_quarters`
--
ALTER TABLE `Week_in_quarters`
  ADD CONSTRAINT `Quarter_ID` FOREIGN KEY (`Quarter_ID`) REFERENCES `Quarters` (`Quarter_ID`);

--
-- Constraints for table `Year_Forecast`
--
ALTER TABLE `Year_Forecast`
  ADD CONSTRAINT `Admin_ID5` FOREIGN KEY (`Admin_ID`) REFERENCES `Admin` (`Admin_ID`),
  ADD CONSTRAINT `Type_ID5` FOREIGN KEY (`Type_ID`) REFERENCES `Expense_Type` (`Type_ID`),
  ADD CONSTRAINT `Week_quarter_ID5` FOREIGN KEY (`Week_Quarter_ID`) REFERENCES `Week_in_quarters` (`Week_quarter_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
