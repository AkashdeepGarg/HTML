-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 10:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da5`
--

-- --------------------------------------------------------

--
-- Table structure for table `fallsem2019`
--

CREATE TABLE `fallsem2019` (
  `subject` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `slot` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fallsem2019`
--

INSERT INTO `fallsem2019` (`subject`, `category`, `slot`, `faculty`) VALUES
(' Ethics and Values', 'University Core', 'D1', 'Rashmi M'),
('Basic Electrical and Electronics Engineering', 'Programme Core', 'A1', 'JANAKI M'),
('Calculus for Engineers', 'University Core', 'G1+TG1', 'SELVAKUMAR R'),
('Engineering Physics', 'University Core', 'E1 + TC1', 'VIJAYA CHAMUNDEESWARI S P'),
('Environmental Sciences', 'Non-credit course', 'B1+TB1', 'SUSANTA KUMAR BHUNIA'),
('Foundation English - I', 'Non-credit course', 'L33+L34+L47+L48', 'CHRISTOPHER RAJASEKARAN W'),
('Introduction to Problem Solving', 'University Core', 'F1+TF1', 'SMART (APT)'),
('Problem Solving and Programming', 'University Core', 'L35+L36+L43+L44+L57+L58', 'SELVA RANI B');

-- --------------------------------------------------------

--
-- Table structure for table `fallsem2020`
--

CREATE TABLE `fallsem2020` (
  `subject` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `slot` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fallsem2020`
--

INSERT INTO `fallsem2020` (`subject`, `category`, `slot`, `faculty`) VALUES
(' Database Management Systems', 'Programme Core', 'D1', 'SIVAKUMAR. N'),
('Computer Architecture and Organization', 'Programme Core', 'B1+TB1', 'YOKESH BABU S'),
('Numerical Ability and Cognitive Intelligence', 'University Core', 'E2+TE2 ', 'FACE (APT)'),
('Operating Systems', 'Programme Core', 'F1', 'VIJAYARAJAN V'),
('Statistics for Engineers', 'Programme Core', 'G1+TG1', 'ROY.S'),
('Technical English - I', 'University Core', 'L43+L44+L57+L58', 'MD. SAHUL HAMEED M A'),
('Theory of Computation and Compiler Design', 'Programme Core', 'A1+TA1+TAA1', 'SIVASANKARI S');

-- --------------------------------------------------------

--
-- Table structure for table `fallsem2021`
--

CREATE TABLE `fallsem2021` (
  `subject` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `slot` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fallsem2021`
--

INSERT INTO `fallsem2021` (`subject`, `category`, `slot`, `faculty`) VALUES
('  Information Security Analysis and Audit', 'Programme Elective', 'F1', 'MURALI S'),
('  Parallel and Distributed Computing', 'Programme Core', 'B1', 'DEEBAK B D'),
(' Internet and Web Programming', 'Programme Core', 'G1', 'JAYAKUMAR S'),
(' Programming Skills for Employment', 'University Core', 'D1+TD1', 'SMART (APT)'),
('Applied Linear Algebra', 'Programme Core', 'C1+TC1+TCC1+V2', 'PRAKASH M'),
('Data Privacy', 'Programme Elective', 'A1+TA1', 'VIJAYA KUMAR K'),
('Software Engineering', 'Programme Core', 'E1', 'KATHIRAVAN S');

-- --------------------------------------------------------

--
-- Table structure for table `winsem2019`
--

CREATE TABLE `winsem2019` (
  `subject` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `slot` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `winsem2019`
--

INSERT INTO `winsem2019` (`subject`, `category`, `slot`, `faculty`) VALUES
(' Digital Logic and Design', 'Programme Core', 'E1 + TE1', 'SHASHIKIRAN V'),
(' Problem Solving and Object Oriented Programming', 'University Core', 'L33+L34+L41+L42+L55+L56', 'CHANDRA MOHAN B'),
('Applications of Differential & Difference Equation', 'University Core', 'D1 + TD1', 'PRASAD THEEDA'),
('Business Mathematics', 'University Elective', 'NIL(online)', 'UMADEVI K S'),
('Discrete Mathematics and Graph Theory', 'Programme Core', 'A1+TA1+TAA1+V1', 'SARAVANARAJAN M C'),
('Engineering Chemistry', 'University Core', 'C1+TC1', 'SIVAKUMAR. A'),
('Foundation English - II', 'University Core', 'L39+L40+L51+L52', 'CHRISTOPHER RAJASEKARAN W'),
('Intro to Quantitative,Logical & Verbal Ability', 'University Core', 'F1+TF1', 'SMART (APT)');

-- --------------------------------------------------------

--
-- Table structure for table `winsem2020`
--

CREATE TABLE `winsem2020` (
  `subject` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `slot` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `winsem2020`
--

INSERT INTO `winsem2020` (`subject`, `category`, `slot`, `faculty`) VALUES
(' Advanced Aptitude and Reasoning Skills', 'University Core', 'E1+TE1', 'SMART (APT)'),
(' Introduction to Innovative Projects', 'University Core', 'TC2', 'RAJAN BABU D'),
(' Java Programming', 'Programme Core', 'C1+TC1', 'LOKESH KUMAR R'),
(' Network and Communication', 'Programme Core', 'G1+TG1', 'SRIMATHI C'),
('Cryptography Fundamentals', 'Programme Core', 'A1', 'MADHU VISWANATHAM V'),
('Data Structures and Algorithms', 'Programme Core', 'A2', 'SANJIBAN SEKHAR ROY'),
('Network Security', 'Programme Core', 'B1 + TB1', 'ANTO S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fallsem2019`
--
ALTER TABLE `fallsem2019`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `fallsem2020`
--
ALTER TABLE `fallsem2020`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `fallsem2021`
--
ALTER TABLE `fallsem2021`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `winsem2019`
--
ALTER TABLE `winsem2019`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `winsem2020`
--
ALTER TABLE `winsem2020`
  ADD PRIMARY KEY (`subject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
