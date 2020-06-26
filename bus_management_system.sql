-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 10:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_together`
--

CREATE TABLE `all_together` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `dest` varchar(255) NOT NULL,
  `coach` varchar(255) NOT NULL,
  `A1` varchar(100) DEFAULT '0',
  `A2` varchar(100) DEFAULT '0',
  `A3` varchar(100) DEFAULT '0',
  `A4` varchar(100) DEFAULT '0',
  `B1` varchar(100) DEFAULT '0',
  `B2` varchar(100) DEFAULT '0',
  `B3` varchar(100) DEFAULT '0',
  `B4` varchar(100) DEFAULT '0',
  `C1` varchar(100) DEFAULT '0',
  `C2` varchar(100) DEFAULT '0',
  `C3` varchar(100) DEFAULT '0',
  `C4` varchar(100) DEFAULT '0',
  `D1` varchar(100) DEFAULT '0',
  `D2` varchar(100) DEFAULT '0',
  `D3` varchar(100) DEFAULT '0',
  `D4` varchar(100) DEFAULT '0',
  `E1` varchar(100) DEFAULT '0',
  `E2` varchar(1000) DEFAULT '0',
  `E3` varchar(100) DEFAULT '0',
  `E4` varchar(100) DEFAULT '0',
  `F1` varchar(100) DEFAULT '0',
  `F2` varchar(100) DEFAULT '0',
  `F3` varchar(100) DEFAULT '0',
  `F4` varchar(100) DEFAULT '0',
  `G1` varchar(100) DEFAULT '0',
  `G2` varchar(100) DEFAULT '0',
  `G3` varchar(100) DEFAULT '0',
  `G4` varchar(100) DEFAULT '0',
  `H1` varchar(100) DEFAULT '0',
  `H2` varchar(100) DEFAULT '0',
  `H3` varchar(100) DEFAULT '0',
  `H4` varchar(100) DEFAULT '0',
  `registration_fk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_together`
--

INSERT INTO `all_together` (`id`, `date`, `time`, `dest`, `coach`, `A1`, `A2`, `A3`, `A4`, `B1`, `B2`, `B3`, `B4`, `C1`, `C2`, `C3`, `C4`, `D1`, `D2`, `D3`, `D4`, `E1`, `E2`, `E3`, `E4`, `F1`, `F2`, `F3`, `F4`, `G1`, `G2`, `G3`, `G4`, `H1`, `H2`, `H3`, `H4`, `registration_fk`) VALUES
(107, '2019-12-05', '04:00 AM', 'Dhaka to Rajshahi', 'AC', '0', '0', '0', '0', '0', '0', '81', '81', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A22'),
(108, '0000-00-00', '12:01 AM', 'Dhaka to Sylhet', 'AC', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'damn', 'damn', '0', '0', 'damn', 'damn', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A16'),
(109, '2019-12-06', '12:01 AM', 'Dhaka to Sylhet', 'AC', '0', '0', 'damn', 'damn', '0', '0', 'damn', 'damn', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A16'),
(110, '2019-12-21', '12:01 AM', 'Dhaka to Sylhet', 'AC', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A16'),
(111, '2019-12-07', '12:01 AM', 'Dhaka to Sylhet', 'AC', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A16'),
(112, '2019-12-13', '08:00 AM', 'Dhaka to Sylhet', 'AC', '0', '0', '0', '0', '0', '84', '0', '0', '0', '84', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A13'),
(113, '2019-12-06', '04:00 PM', 'Dhaka to Sylhet', 'AC', '0', '0', '0', '0', '0', '85', '0', '0', '0', '85', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A14'),
(114, '2019-12-06', '08:00 PM', 'Dhaka to Sylhet', 'AC', '0', 'fall', 'fall', '0', '0', '0', '0', '0', '0', '86', '0', '0', '0', '86', '0', '0', '86', '86', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A15'),
(115, '2019-12-11', '04:00 PM', 'Chittagong to Dhaka', 'AC', '88', '87', '88', '88', '88', '87', '88', '88', '0', '87', '88', '88', '0', '87', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A23'),
(116, '2019-12-12', '12:01 AM', 'Dhaka to Sylhet', 'AC', '89', '89', '90', '90', '89', '89', '90', '90', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A16'),
(117, '2019-12-07', '08:00 AM', 'Dhaka to Sylhet', 'AC', 'damn', 'damn', '0', '0', 'damn', 'damn', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A13');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `registration` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `coach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`registration`, `color`, `model`, `route`, `time`, `coach`) VALUES
('A10', 'ASDasd', 'asdasda', 'Dhaka-Rajshahi', '12:01 AM-12:01 PM', 'AC'),
('A11', 'asdasdasd', 'asdasdas', 'Dhaka-Sylhet', '04:00 AM-04:00 PM', 'AC'),
('A12', 'red', 'asdsa', 'Dhaka-Sylhet', '12:01 PM-12:01 AM', 'AC'),
('A13', 'ASDasd', 'asdasdasd', 'Dhaka-Sylhet', '08:00 AM-08:00 PM', 'AC'),
('A14', 'aasdasd', 'asdasd', 'Dhaka-Sylhet', '04:00 PM-04:00 AM', 'AC'),
('A15', 'red', 'sadasd', 'Dhaka-Sylhet', '08:00 PM-08:00 AM', 'AC'),
('A16', 'asdasd', 'asdasd', 'Dhaka-Sylhet', '12:01 AM-12:01 PM', 'AC'),
('A17', 'asdsad', 'asdasd', 'Dhaka-Chittagong', '12:01 AM-12:01 PM', 'AC'),
('A18', 'asdas', 'asdasd', 'Dhaka-Rajshahi', '08:00 AM-08:00 PM', 'AC'),
('A19', 'asdasd', 'asdasd', 'Dhaka-Rajshahi', '12:01 PM-12:01 AM', 'AC'),
('A20', 'asdasd', 'asdasd', 'Dhaka-Rajshahi', '04:00 PM-04:00 AM', 'AC'),
('A21', 'asdasd', 'asdasd', 'Dhaka-Rajshahi', '08:00 PM-08:00 AM', 'AC'),
('A22', 'SDad', 'asdas', 'Dhaka-Rajshahi', '04:00 AM-04:00 PM', 'AC'),
('A23', 'asdsad', 'asdasd', 'Dhaka-Chittagong', '04:00 AM-04:00 PM', 'AC'),
('A24', 'asdasd', 'asdasd', 'Dhaka-Chittagong', '08:00 AM-08:00 PM', 'AC'),
('A25', 'asdasd', 'asdasd', 'Dhaka-Chittagong', '12:01 PM-12:01 AM', 'AC'),
('A26', 'asdasd', 'asdasd', 'Dhaka-Chittagong', '04:00 PM-04:00 AM', 'AC'),
('A27', 'asdasd', 'asdasd', 'Dhaka-Chittagong', '08:00 PM-08:00 AM', 'AC'),
('A29', 'asdasda', 'dasdasd', '', '', 'AC'),
('B1', 'asdasd', 'asdasd', 'Dhaka-Sylhet', '12:01 AM-12:01 PM', 'NON-AC'),
('B10', 'ASDASD', 'ASDASD', 'Dhaka-Sylhet', '04:00 AM-04:00 PM', 'NON-AC'),
('B11', 'ASDASD', 'DAASD', 'Dhaka-Rajshahi', '12:01 PM-12:01 AM', 'NON-AC'),
('B12', 'ASDASDA', 'ASDASD', 'Dhaka-Sylhet', '04:00 PM-04:00 AM', 'NON-AC'),
('B13', 'ASDASD', 'ASDASD', 'Dhaka-Sylhet', '12:01 PM-12:01 AM', 'NON-AC'),
('B14', 'ASDASAD', 'ASDASD', 'Dhaka-Sylhet', '08:00 PM-08:00 AM', 'NON-AC'),
('B15', 'ASDASD', 'ASDASD', 'Dhaka-Rajshahi', '12:01 AM-12:01 PM', 'NON-AC'),
('B16', 'SDFSDFSDF', 'ASDAFAF', 'Dhaka-Rajshahi', '04:00 AM-04:00 PM', 'NON-AC'),
('B17', 'ASDASDASD', 'ASDASDA', 'Dhaka-Rajshahi', '08:00 AM-08:00 PM', 'NON-AC'),
('B18', 'ASDASD', 'ASDASD', 'Dhaka-Sylhet', '08:00 AM-08:00 PM', 'NON-AC'),
('B19', 'ASSADASD', 'ASDASDASD', 'Dhaka-Rajshahi', '04:00 PM-04:00 AM', 'NON-AC'),
('B2', 'ASDASD', 'SDASD', 'Dhaka-Rajshahi', '08:00 PM-08:00 AM', 'NON-AC'),
('B20', 'ASDASD', 'ASDASDAS', 'Dhaka-Chittagong', '12:01 AM-12:01 PM', 'NON-AC'),
('B21', 'ASDASD', 'DASDASD', 'Dhaka-Chittagong', '04:00 AM-04:00 PM', 'NON-AC'),
('B3', 'ASDASD', 'SADASD', 'Dhaka-Chittagong', '08:00 AM-08:00 PM', 'NON-AC'),
('B4', 'ASDASD', 'SADASD', 'Dhaka-Chittagong', '12:01 PM-12:01 AM', 'NON-AC'),
('B5', 'ASDASD', 'SADASD', 'Dhaka-Chittagong', '04:00 PM-04:00 AM', 'NON-AC'),
('B6', 'SADSAD', 'ASDASDA', 'Dhaka-Chittagong', '08:00 PM-08:00 AM', 'NON-AC'),
('B7', 'ASDASD', 'ASDASD', '', '', 'NON-AC'),
('B8', 'ASDASD', 'ASDASDAS', '', '', 'NON-AC'),
('B9', 'ASDASD', 'ASDSAD', '', '', 'NON-AC');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `e_id_fk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`name`, `location`, `c_id`, `e_id_fk`) VALUES
('C1', 'Dhaka', 2, 'unlike'),
('C3', 'Dhaka', 4, 'lie'),
('C1', 'Rajshahi', 5, 'dude'),
('C2', 'Dhaka', 6, 'death'),
('C2', 'Rajshahi', 7, 'deep'),
('C3', 'Rajshahi', 8, 'deeper'),
('C1', 'Chittagong', 9, 'della'),
('C2', 'Chittagong', 10, 'killed'),
('C3', 'Chittagong', 11, 'bad'),
('C1', 'Sylhet', 12, 'kill'),
('C2', 'Sylhet', 13, 'liar'),
('C3', 'Sylhet', 15, 'damn');

-- --------------------------------------------------------

--
-- Table structure for table `customer2`
--

CREATE TABLE `customer2` (
  `name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer2`
--

INSERT INTO `customer2` (`name`, `number`, `address`, `customer_id`, `email`, `pass`) VALUES
('asdasd', 123123, 'adasdasd', 'asdasd', 'fasdasdad@asdrad.calksl', '7815696ecbf1c96e6894b779456d330e'),
('fall', 1231231231, 'asd@asd.asd', 'fall', 'asd@asd.asd', '7815696ecbf1c96e6894b779456d330e'),
('', 0, '', 'no', '', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `due`
--

CREATE TABLE `due` (
  `customer_id_fk` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `due_id` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `due`
--

INSERT INTO `due` (`customer_id_fk`, `Amount`, `status`, `due_id`, `number`) VALUES
('fall', 2100, 'paid', 23, 123123123);

-- --------------------------------------------------------

--
-- Table structure for table `e_login`
--

CREATE TABLE `e_login` (
  `name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `desig` varchar(255) NOT NULL,
  `e_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_login`
--

INSERT INTO `e_login` (`name`, `number`, `email`, `address`, `pass`, `desig`, `e_id`, `status`) VALUES
('bad', 213123, 'asdasd@asda.cokasd', 'asdasdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'bad', 'active'),
('asdasd', 213123, 'asd@asdasdsd.asda', 'asdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'damn', 'active'),
('death', 12312312, 'asdasd@asdaasd.cok', 'wasdasdas', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'death', 'active'),
('deep', 23123, 'asdasd@asda.cokasdaasdasdasd', 'asdasdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'deep', 'active'),
('deeper', 123123, 'asd@asdasdsd.asdaasdasdasdasd', 'asdas', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'deeper', 'active'),
('della', 21312312, 'Dasd@adsd.casasd', 'asdasda', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'della', 'active'),
('asdasdsad', 123123, 'asdasdasasdasdd@asda.cok', 'asdasdas', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'die', 'deactive'),
('dude', 12312312, 'asd@asdasdsd.asdaasd', 'asdads', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'dude', 'active'),
('asd', 123123, 'asdasd@asda.cok', 'sadasdasd', '7815696ecbf1c96e6894b779456d330e', 'Manager', 'hell', 'active'),
('asdasd', 123123, 'asdasdasd@asda.cok', 'a1231', '7815696ecbf1c96e6894b779456d330e', 'Manager', 'helloo', 'active'),
('kill', 123123, 'asd@asd.dfgadasda', 'asdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'kill', 'active'),
('killed', 123123, 'asdasd@asda.cokasdasd', 'asdasdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'killed', 'active'),
('liar', 1212312312, 'asdasd@asda.cokasdaasdasd', 'asdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'liar', 'active'),
('lie', 12312, 'asd@asdasdsd.asdaasdasd', 'asdasdas', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'lie', 'active'),
('life', 213121, 'asdasd@asda.cokasda', 'asdasdad', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'life', 'deactive'),
('like', 123123, 'asdasd@asda.cokasdsdasd', 'asdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'like', 'active'),
('live', 123123123, 'asd@asd.dfgad', 'asdasdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'live', 'active'),
('', 0, '', '', '', '', 'no', 'active'),
('shallow', 2147483647, 'asdasd@asda.cokasdasdasdaagg', 'asdasdas', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'shallow', 'active'),
('unlike', 123123, 'asdasd@asda.cokasdvv', 'asdasdasd', '7815696ecbf1c96e6894b779456d330e', 'Counter Employee', 'unlike', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `off_customer`
--

CREATE TABLE `off_customer` (
  `name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `off_id` int(11) NOT NULL,
  `e_id_fk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `off_customer`
--

INSERT INTO `off_customer` (`name`, `number`, `off_id`, `e_id_fk`) VALUES
('asdasd', 123132, 1, 'count2'),
('asd', 123123, 2, 'count'),
('rwer', 123123, 3, 'count'),
('asdfasfaf', 123123, 4, 'count2'),
('asd', 123, 5, 'count2'),
('asdsad', 0, 6, 'damn'),
('adsasd', 0, 7, 'damn'),
('asdasd', 0, 8, 'damn'),
('asdasd', 0, 9, 'damn'),
('asdsad', 0, 10, 'damn'),
('asdsad', 0, 11, 'damn'),
('asdsda', 0, 12, 'damn'),
('asdasd', 0, 13, 'damn'),
('sdasd', 0, 14, 'damn'),
('asdasd', 0, 15, 'damn');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_no` int(100) NOT NULL,
  `customer_id_fk` varchar(255) NOT NULL,
  `no_seats` int(11) NOT NULL,
  `seats` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `all_together_id` int(11) NOT NULL,
  `employee` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_no`, `customer_id_fk`, `no_seats`, `seats`, `payment`, `all_together_id`, `employee`) VALUES
(81, 'fall', 2, ' B3  B4 ', '1800', 107, 'no'),
(84, 'fall', 2, ' B2  C2 ', '1400', 112, 'no'),
(85, 'fall', 2, ' B2  C2 ', '1400', 113, 'no'),
(86, 'fall', 4, ' C2  D2  E1  E2 ', '2800', 114, 'no'),
(87, 'fall', 4, ' A2  B2  C2  D2 ', '4000', 115, 'no'),
(88, 'fall', 8, ' A1  A3  A4  B1  B3  B4  C3  C4 ', '8000', 115, 'no'),
(89, 'no', 4, ' A1  A2  B1  B2 ', '2800', 116, 'damn'),
(90, 'fall', 4, ' A3  A4  B3  B4 ', '2800', 116, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_together`
--
ALTER TABLE `all_together`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registration_fk` (`registration_fk`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`registration`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `e_id_fk` (`e_id_fk`);

--
-- Indexes for table `customer2`
--
ALTER TABLE `customer2`
  ADD PRIMARY KEY (`customer_id`,`email`);

--
-- Indexes for table `due`
--
ALTER TABLE `due`
  ADD PRIMARY KEY (`due_id`),
  ADD KEY `customer_id_fk` (`customer_id_fk`);

--
-- Indexes for table `e_login`
--
ALTER TABLE `e_login`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `off_customer`
--
ALTER TABLE `off_customer`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_no`),
  ADD KEY `customer_id_fk` (`customer_id_fk`),
  ADD KEY `all_together_id` (`all_together_id`),
  ADD KEY `employee` (`employee`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_together`
--
ALTER TABLE `all_together`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `due`
--
ALTER TABLE `due`
  MODIFY `due_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `off_customer`
--
ALTER TABLE `off_customer`
  MODIFY `off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_together`
--
ALTER TABLE `all_together`
  ADD CONSTRAINT `all_together_ibfk_1` FOREIGN KEY (`registration_fk`) REFERENCES `bus` (`registration`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `counter`
--
ALTER TABLE `counter`
  ADD CONSTRAINT `counter_ibfk_1` FOREIGN KEY (`e_id_fk`) REFERENCES `e_login` (`e_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `due`
--
ALTER TABLE `due`
  ADD CONSTRAINT `due_ibfk_1` FOREIGN KEY (`customer_id_fk`) REFERENCES `customer2` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`customer_id_fk`) REFERENCES `customer2` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`all_together_id`) REFERENCES `all_together` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`employee`) REFERENCES `e_login` (`e_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
