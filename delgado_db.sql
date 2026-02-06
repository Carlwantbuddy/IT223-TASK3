-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2026 at 04:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delgado_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `sentence` varchar(255) NOT NULL,
  `code` varchar(50) NOT NULL,
  `csv_values` varchar(100) NOT NULL,
  `padded_text` varchar(100) NOT NULL,
  `mixed_case` varchar(100) NOT NULL,
  `numbers_text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `first_name`, `last_name`, `full_name`, `sentence`, `code`, `csv_values`, `padded_text`, `mixed_case`, `numbers_text`) VALUES
(1, '  Alex  ', '  Delgado ', 'Alex Delgado', 'MySQL is fun to learn', 'ABC12345', 'apple,banana,grape', '   hello world   ', 'hElLo WoRlD', '12345'),
(2, ' Carl ', ' Aplacador ', 'Carl Aplacador', 'Database systems are powerful', 'XYZ98765', 'red,green,blue', '   bakit mahal kita   ', 'pHp aNd mYsQl', '67890'),
(3, ' Elyza ', ' Florez ', 'Elyza Florez', 'String functions are useful', 'LMN45678', 'cat,dog,bird', '   bading ka   ', 'sTrInG TeSt', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`order_id`, `customer_name`, `order_date`, `order_time`, `created_at`) VALUES
(1, 'Carl Aplacador', '2023-12-15', '08:30:45', '2023-12-15 08:30:45'),
(2, 'Alex Delgado', '2024-01-10', '14:15:30', '2024-01-10 14:15:30'),
(3, 'Elyza Flores', '2024-02-20', '19:45:10', '2024-02-20 19:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `table_advfunc`
--

CREATE TABLE `table_advfunc` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `discount_rate` float NOT NULL,
  `tags` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_advfunc`
--

INSERT INTO `table_advfunc` (`id`, `product_name`, `product_code`, `description`, `price`, `stock_quantity`, `discount_rate`, `tags`, `remarks`, `created_at`, `expiry_date`) VALUES
(1, 'Wireless Mouse', 'ACC-9988-XM', 'A high-speed optical mouse for gaming.', 45.57, 120, 0.155, 'tech,gaming,usb', 'In Stock', '2025-01-15 10:30:00', '2026-12-31'),
(2, 'Ergonomic Keyboard', 'ACC-1122-KY', 'Mechanical keyboard with RGB lighting.', 120.00, -5, 0.05, 'tech,office', NULL, '2025-02-01 14:00:00', '2027-06-15'),
(3, 'USB-C Cable', 'CBL-5544-TH', 'Fast charging 2-meter braided cable.', 15.20, 0, 0, 'cable,charge,usb', 'Limited', '2024-12-20 09:15:00', '2025-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `table_numfunc`
--

CREATE TABLE `table_numfunc` (
  `product` varchar(20) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock_quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_numfunc`
--

INSERT INTO `table_numfunc` (`product`, `price`, `stock_quantity`) VALUES
('Smartphone', 600.75, 25),
('Tablet', 299.50, 0),
('Wireless Earbuds', 80.25, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `table_advfunc`
--
ALTER TABLE `table_advfunc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_advfunc`
--
ALTER TABLE `table_advfunc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
