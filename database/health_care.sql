-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 04:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `number` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `address_line1` varchar(255) NOT NULL,
  `address_line2` varchar(255) DEFAULT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `blood_group`, `age`, `gender`, `number`, `dob`, `address_line1`, `address_line2`, `district`, `city`, `state`, `pincode`, `email`, `registration_date`) VALUES
(1, 'AMIT RAY', 'B+', 31, 'Male', '7602361407', '1996-01-24', 'ANURAGPUR', 'PANAGARH BAZAR', 'PURBA BURDWAN', 'PANAGARH', 'Uttar-Pradesh', '713148', 'rayamit24@outlook.com', '2024-11-30 17:57:22'),
(3, 'mausumi ray', 'B+', 56, 'Male', '9064210020', '2024-12-03', 'ANURAGPUR', 'ANURAGPUR PANAGARH BAZAR', 'Srikakulam', 'PANAGARH', 'Andhra Pradesh', '713148', 'amitrayworks@gmail.com', '2024-11-30 19:37:11'),
(9, 'sudipta ghosh', 'B+', 36, 'Female', '9638527410', '2024-10-09', 'ANURAGPUR', 'ANURAGPUR PANAGARH BAZAR', 'Murshidabad', 'PANAGARH', 'West Bengal', '713148', 'sudipta@gmail.com', '2024-11-30 19:38:46'),
(12, 'santosh', 'B+', 36, 'Female', '9638527418', '2024-08-15', 'ANURAGPUR', 'ANURAGPUR PANAGARH BAZAR', 'Y.S.R.', 'PANAGARH', 'Andhra Pradesh', '713148', 'santosh@gmail.com', '2024-11-30 19:39:52'),
(14, 'Saptak', 'O+', 6, 'Male', '9474071224', '2016-01-01', 'Bhola Road', 'GT Road', 'North 24 Parganas', 'Hooghly', 'West Bengal', '986521', 'dashrisav7@gmail.com', '2024-11-30 19:41:26'),
(18, 'Saptak G', 'B+', 69, 'Male', '9474071225', '2024-12-01', 'Bhola Road', 'GT Road', 'North 24 Parganas', 'Hooghly', 'West Bengal', '986521', 'dashrisav78@gmail.com', '2024-11-30 19:42:30'),
(23, 'Saptak Ghosh', 'O+', 14, 'Male', '9474071227', '2024-06-06', 'Bhola Road', 'GT Road', 'Y.S.R.', 'Hooghly', 'Andhra Pradesh', '986521', 'dashrisav8@gmail.com', '2024-11-30 19:45:58'),
(26, 'Saptak Ghosh', 'O+', 14, 'Male', '9474071365', '2024-06-06', 'Bhola Road', 'GT Road', 'Tawang', 'Hooghly', 'Arunachal Pradesh', '986521', 'dashrisav10@gmail.com', '2024-11-30 19:48:39'),
(28, 'Saptak Gh', 'O+', 14, 'Male', '9474171365', '2024-06-06', 'Bhola Road', 'GT Road', 'Nadia', 'Hooghly', 'West Bengal', '986521', 'dashris10@gmail.com', '2024-11-30 19:51:14'),
(30, 'Swarnav Ghosh', 'B+', 14, 'Male', '9874561237', '2020-01-31', 'Bhola Road', 'GT Road', 'Jalpaiguri', 'Hooghly', 'West Bengal', '986521', 'sas@gmail.com', '2024-11-30 19:56:38'),
(33, 'Swarnav Ghosh', 'B+', 14, 'Male', '7879654123', '2020-01-31', 'Bhola Road', 'GT Road', 'Barpeta', 'Hooghly', 'Assam', '986521', 'saas@gmail.com', '2024-11-30 19:58:36'),
(35, 'Amit Ray', 'B+', 32, 'Male', '7452361498', '1992-01-24', 'Panagarh', 'Panagrh Bazar', 'Purba Burdwan', 'Hooghly', 'West Bengal', '713148', 'amitray@gmail.com', '2024-11-30 20:07:54'),
(39, 'Bittu ', 'B+', 21, 'Male', '8547962145', '2024-10-10', 'Bhola Road', 'GT Road', 'East Kameng', 'Hooghly', 'Arunachal Pradesh', '986521', 'dashrisav99@gmail.com', '2024-11-30 20:10:32'),
(44, 'Bittu ', 'B+', 21, 'Male', '9852145637', '2024-10-10', 'Bhola Road', 'GT Road', 'Bhagalpur', 'Hooghly', 'Bihar', '986521', 'dashrisav45@gmail.com', '2024-11-30 20:12:49'),
(46, 'Bittu ', 'B+', 21, 'Male', '7895216341', '2024-10-10', 'Bhola Road', 'GT Road', 'Bhagalpur', 'Hooghly', 'Bihar', '986521', 'dashrisav66@gmail.com', '2024-11-30 20:14:15'),
(47, 'Bittu ', 'O+', 21, 'Male', '8967451203', '2024-12-01', 'Bhola Road', 'GT Road', 'Bhagalpur', 'Hooghly', 'Bihar', '986521', 'dashrisav76@gmail.com', '2024-11-30 20:14:40'),
(51, 'Bittu Pal', 'O+', 21, 'Male', '7896523142', '2024-01-03', 'Bhola Road', 'GT Road', 'Aurangabad', 'Hooghly', 'Bihar', '96385', 'dashrisav41@gmail.com', '2024-11-30 20:18:26'),
(53, 'Bittu Pal', 'O+', 21, 'Male', '7896823143', '2024-01-03', 'Bhola Road', 'GT Road', 'Gaya', 'Hooghly', 'Bihar', '96385', 'dashrisav22@gmail.com', '2024-11-30 20:22:06'),
(54, 'Bittu Pal', 'O+', 21, 'Male', '8896823143', '2024-01-03', 'Bhola Road', 'GT Road', 'Gaya', 'Hooghly', 'Bihar', '96385', 'dashrisav12@gmail.com', '2024-11-30 20:23:11'),
(55, 'Bittu Pal', 'O+', 21, 'Male', '8886823143', '2024-01-03', 'Bhola Road', 'GT Road', 'Barpeta', 'Hooghly', 'Assam', '96385', 'dashrisav42@gmail.com', '2024-11-30 20:24:29'),
(57, 'Bittu Pal', 'O+', 21, 'Male', '8886823145', '2024-01-03', 'Bhola Road', 'GT Road', 'Upper Subansiri', 'Hooghly', 'Arunachal Pradesh', '96385', 'dashrisav32@gmail.com', '2024-11-30 20:26:52'),
(59, 'Bittu Pal', 'O+', 21, 'Male', '9886823145', '2024-01-03', 'Bhola Road', 'GT Road', 'Nellore', 'Hooghly', 'Andhra Pradesh', '96385', 'dashrisav02@gmail.com', '2024-11-30 20:41:09'),
(63, 'Bittu Pal', 'O+', 21, 'Male', '9896823145', '2024-01-03', 'Bhola Road', 'GT Road', 'Nellore', 'Hooghly', 'Andhra Pradesh', '96385', 'dashrisav0042@gmail.com', '2024-11-30 20:41:52'),
(64, 'xyz', 'B-', 2, 'Female', '8542613021', '2024-12-01', 'Bhola Road', 'GT Road', 'Srikakulam', 'Hooghly', 'Andhra Pradesh', '96385', 'dashrisav002@gmail.com', '2024-11-30 20:42:23'),
(68, 'xyz', 'B-', 2, 'Female', '8542613221', '2024-12-01', 'Bhola Road', 'GT Road', 'Visakhapatnam', 'Hooghly', 'Andhra Pradesh', '96385', 'dashrisav0002@gmail.com', '2024-11-30 20:45:38'),
(69, 'pp', 'B+', 3, 'Male', '6521423698', '2024-12-01', 'Bhola Road', 'GT Road', 'Prakasam', 'Hooghly', 'Andhra Pradesh', '96385', 'dashrisav00002@gmail.com', '2024-11-30 20:47:20'),
(71, 'pp', 'B+', 3, 'Male', '6521423298', '2024-12-01', 'Bhola Road', 'GT Road', 'West Kameng', 'Hooghly', 'Arunachal Pradesh', '96385', 'dashrisav00502@gmail.com', '2024-11-30 20:49:37'),
(72, 'ppp', 'B+', 3, 'Male', '6521423299', '2024-12-01', 'Bhola Road', 'GT Road', 'Barpeta', 'Hooghly', 'Assam', '96385', 'dashrisav00582@gmail.com', '2024-11-30 20:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `contact`, `password`) VALUES
(1, 'rayamit24@outlook.com', 'rayamit24@outlook.com', '9064210020', '$2y$10$TQ9F/CCiqtNYUBUmO1ueOOArROIhWpOrRD3tZg1RA7ll1B/dxyaCG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
