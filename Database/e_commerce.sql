-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 02:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Contact`, `Email`, `Password`) VALUES
('Srijita Chakrabarty', 1234567890, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Name` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Name`, `Address`, `Pincode`, `Contact`, `Email`, `Password`) VALUES
('Srijita Chakrabarty', 'India', 700100, 1234567890, 'srijita@gmail.com', '12345'),
('Srijita Chakrabarty', 'USA', 900039, 1122334455, 'srijitachakrabarty007@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Date_Time` datetime NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Items` int(11) NOT NULL,
  `Amount` bigint(20) NOT NULL,
  `Transaction_ID` text DEFAULT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Date_Time`, `Name`, `Email`, `Address`, `Contact`, `Items`, `Amount`, `Transaction_ID`, `Status`) VALUES
('2021-05-16 07:36:22', 'Srijita Chakrabarty', 'srijita@gmail.com', 'India', 1234567890, 4, 705000, 'd6e556cfb7e8bc13afda', 'Paid'),
('2021-05-16 07:52:35', 'Srijita Chakrabarty', 'srijita@gmail.com', 'India', 1234567890, 4, 325000, NULL, 'Unpaid'),
('2021-05-16 08:15:52', 'Srijita Chakrabarty', 'srijita@gmail.com', 'India', 1234567890, 4, 325000, NULL, 'Unpaid'),
('2021-05-16 08:16:22', 'Srijita Chakrabarty', 'srijita@gmail.com', 'India', 1234567890, 4, 325000, NULL, 'Unpaid'),
('2021-05-16 12:52:41', 'Srijita Chakrabarty', 'srijita@gmail.com', 'India', 1234567890, 3, 355000, NULL, 'Unpaid'),
('2021-06-28 13:57:05', 'Srijita Chakrabarty', 'srijitachakrabarty007@gmail.com', 'USA', 1122334455, 2, 135000, NULL, 'Unpaid'),
('2021-06-28 14:02:23', 'Srijita Chakrabarty', 'srijitachakrabarty007@gmail.com', 'USA', 1122334455, 2, 135000, NULL, 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `P_Image` varchar(500) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `product_name`, `P_Image`, `category`, `description`, `price`, `status`) VALUES
('L_101', 'Lenovo Ideapad s145', 'Lenovo_Ideapad_s145.jpg', 'laptop', 'Lenovo Home Basic Laptop', 45000, 'Active'),
('L_102', 'Lenovo Legion 5i', 'Lenovo_Legion_5.jpg', 'laptop', 'Lenovo Gaming Laptop', 73000, 'Active'),
('L_103', 'HP Omen 15', 'HP_omen_15.jpg', 'laptop', 'HP Gaming Laptop', 70000, 'Active'),
('L_104', 'Dell Inspiron 3502', 'Dell_inspiron_3502.jpg', 'laptop', 'Dell Home Basic Laptop', 31500, 'Active'),
('S_101', 'Samsung Galaxy S21 ultra', 'galaxys21_ultra.jpg', 'smartphone', 'Samsung Flagship', 105000, 'Active'),
('S_102', 'One Plus 9 pro', 'oneplus9pro.jpg', 'smartphone', 'One Plus Flagship', 65000, 'Active'),
('S_103', 'Apple iPhone 12 pro max', 'Apple-iPhone-12-Pro-Max.jpg', 'smartphone', 'Apple iPhone Flagship', 126000, 'Active'),
('S_104', 'Xiaomi Mi 11 ultra', 'XiaomiMi11Ultra.jpg', 'smartphone', 'Xiaomi Flagship', 70000, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `srijita@gmail.com`
--

CREATE TABLE `srijita@gmail.com` (
  `p_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srijita@gmail.com`
--

INSERT INTO `srijita@gmail.com` (`p_id`, `product_name`, `category`, `price`, `quantity`, `amount`) VALUES
('L_101', 'Lenovo Ideapad s145', 'laptop', 45000, NULL, NULL),
('S_101', 'Samsung Galaxy S21 ultra', 'smartphone', 105000, NULL, NULL),
('S_104', 'Xiaomi Mi 11 ultra', 'smartphone', 70000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `srijitachakrabarty007@gmail.com`
--

CREATE TABLE `srijitachakrabarty007@gmail.com` (
  `p_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srijitachakrabarty007@gmail.com`
--

INSERT INTO `srijitachakrabarty007@gmail.com` (`p_id`, `product_name`, `category`, `price`, `quantity`, `amount`) VALUES
('L_103', 'HP Omen 15', 'laptop', 70000, NULL, NULL),
('S_102', 'One Plus 9 pro', 'smartphone', 65000, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Date_Time`,`Email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `srijita@gmail.com`
--
ALTER TABLE `srijita@gmail.com`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `srijitachakrabarty007@gmail.com`
--
ALTER TABLE `srijitachakrabarty007@gmail.com`
  ADD PRIMARY KEY (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
