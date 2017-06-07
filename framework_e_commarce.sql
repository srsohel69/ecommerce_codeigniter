-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2017 at 04:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framework_e_commarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_income`
--

CREATE TABLE `admin_income` (
  `username` varchar(5) NOT NULL,
  `total_income` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_income`
--

INSERT INTO `admin_income` (`username`, `total_income`) VALUES
('admin', 108000);

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `P_id` varchar(15) NOT NULL,
  `P_catagory` varchar(30) NOT NULL,
  `P_brand` varchar(50) NOT NULL,
  `P_price` int(8) NOT NULL,
  `P_quantity` int(8) NOT NULL,
  `P_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`P_id`, `P_catagory`, `P_brand`, `P_price`, `P_quantity`, `P_picture`) VALUES
('444441', 'Laptop', 'Asus', 40000, 20, '/atp3project/Product Pic/444441.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `computer_accessory`
--

CREATE TABLE `computer_accessory` (
  `P_id` varchar(15) NOT NULL,
  `P_catagory` varchar(30) NOT NULL,
  `P_brand` varchar(50) NOT NULL,
  `P_price` int(8) NOT NULL,
  `P_quantity` int(8) NOT NULL,
  `P_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_accessory`
--

INSERT INTO `computer_accessory` (`P_id`, `P_catagory`, `P_brand`, `P_price`, `P_quantity`, `P_picture`) VALUES
('555551', 'Keyboard', 'Logitech', 2500, 20, '/atp3project/Product Pic/555551.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `P_id` varchar(15) NOT NULL,
  `P_catagory` varchar(30) NOT NULL,
  `P_brand` varchar(50) NOT NULL,
  `P_price` int(8) NOT NULL,
  `P_quantity` int(8) NOT NULL,
  `P_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `P_id` varchar(15) NOT NULL,
  `P_catagory` varchar(30) NOT NULL,
  `P_brand` varchar(50) NOT NULL,
  `P_price` int(8) NOT NULL,
  `P_quantity` int(8) NOT NULL,
  `P_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`P_id`, `P_catagory`, `P_brand`, `P_price`, `P_quantity`, `P_picture`) VALUES
('333331', 'Toy', 'Toys "R" Us', 4000, 26, '/atp3project/Product Pic/333331.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `User_Name` varchar(15) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`User_Name`, `Password`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `P_id` varchar(15) NOT NULL,
  `P_catagory` varchar(30) NOT NULL,
  `P_brand` varchar(50) NOT NULL,
  `P_price` int(8) NOT NULL,
  `P_quantity` int(4) NOT NULL,
  `P_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`P_id`, `P_catagory`, `P_brand`, `P_price`, `P_quantity`, `P_picture`) VALUES
('111111', 'Shirt', 'Westin', 2000, 45, '/atp3project/Product Pic/111111.jpg'),
('111112', 'T-shirt', 'Polo', 1000, 25, '/atp3project/Product Pic/111112.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `P_id` varchar(15) NOT NULL,
  `P_catagory` varchar(30) NOT NULL,
  `P_brand` varchar(50) NOT NULL,
  `P_price` int(8) NOT NULL,
  `P_quantity` int(8) NOT NULL,
  `P_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `P_id` varchar(15) NOT NULL,
  `P_catagory` varchar(30) NOT NULL,
  `P_brand` varchar(50) NOT NULL,
  `P_price` int(8) NOT NULL,
  `P_quantity` int(8) NOT NULL,
  `P_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selling_product`
--

CREATE TABLE `selling_product` (
  `P_id` varchar(15) NOT NULL,
  `P_category` varchar(15) NOT NULL,
  `P_selling_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selling_product`
--

INSERT INTO `selling_product` (`P_id`, `P_category`, `P_selling_quantity`) VALUES
('111112', 'men', 8),
('222221', 'women', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `User_Name` varchar(50) NOT NULL,
  `User_id` varchar(15) NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `User_Password` varchar(20) NOT NULL,
  `User_Mobile` varchar(11) NOT NULL,
  `User_Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `P_id` varchar(15) NOT NULL,
  `P_catagory` varchar(30) NOT NULL,
  `P_brand` varchar(30) NOT NULL,
  `P_price` int(8) NOT NULL,
  `P_quantity` int(8) NOT NULL,
  `P_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`P_id`, `P_catagory`, `P_brand`, `P_price`, `P_quantity`, `P_picture`) VALUES
('222221', 'Shari', 'Anjons', 5000, 15, '/atp3project/Product Pic/222221.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_income`
--
ALTER TABLE `admin_income`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `computer_accessory`
--
ALTER TABLE `computer_accessory`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`User_Name`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `selling_product`
--
ALTER TABLE `selling_product`
  ADD PRIMARY KEY (`P_id`),
  ADD UNIQUE KEY `P_id` (`P_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`P_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
