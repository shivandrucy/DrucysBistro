-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 01:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `qty`, `total_price`, `code`) VALUES
(40, 'Drucy\'s Smokin\' patty', '800', 'menu_images/bur1.PNG', 1, '800', 'p1050'),
(41, 'Pizza Cheese Dip', '800', 'menu_images/a.PNG', 1, '800', 'p1000');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `image`, `code`) VALUES
(1, 'Pizza Cheese Dip', '800', 'menu_images/a.PNG', 'p1000'),
(2, 'Drucy\'s Smokin\' patty', '800', 'menu_images/bur1.PNG', 'p1050'),
(3, 'Hamburger and double cheese burger', '900', 'menu_images/b.PNG', 'p1100'),
(4, 'Fried Chicken Burger', '850', 'menu_images/c.PNG', 'p1020'),
(5, 'Double deck beef burger', '700', 'menu_images/d.PNG', 'p1150'),
(6, 'Pizza pepperoni', '1200', 'menu_images/e.PNG', 'p1200'),
(7, 'Beef and bbq pizza', '1400', 'menu_images/f.PNG', 'p1250'),
(8, 'Pizza magherita', '1600', 'menu_images/g.PNG', 'p3000'),
(9, 'Frozen Hot Chocolate Milkshake', '800', 'menu_images/j.PNG', 'p1350'),
(10, 'Mango mixed with passion fruit juice', '550', 'menu_images/i.PNG', 'p1300'),
(11, 'Lemon Orange mocktail', '650', 'menu_images/h.PNG', 'p1400'),
(14, 'rtgh', '4567856', 'aa.PNG', '56'),
(15, 'yui', '34567', '12.PNG', 'fg789'),
(16, 'now', '56785', '7.PNG', 'fu67'),
(20, 'food1', '1000', 'menu_images/1.PNG', 'p3601'),
(21, 'food2', '400', 'menu_images/2.PNG', 'p5200'),
(22, 'food3', '250', 'menu_images/3.PNG', 'p7578');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `chooseusername` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `chooseusername`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'nay', 'nay@gmail.com', '0776606066', 'kyaliwajjala', 'cod', 'Pizza pepperoni(2)', '2400'),
(2, 'Jo Wilson', 'WKarev@gmail.com', '+256777611301', 'Nairobi West,Langata', 'netbanking', 'Lemon Orange mocktail(2)', '1300'),
(3, 'Aria Montgomery', 'aria1@gmail.com', '+254798441003', 'Caren,Behind shoprite', 'cod', 'Hamburger and double cheese burger(1), Pizza magherita(2)', '4100'),
(4, 'Kirumi Allan', 'AllanK@gmail.com', '+254754390253', 'Nairobi Central', 'cards', 'Double deck beef burger(2), Lemon Orange mocktail(1)', '2050'),
(6, 'nay', 'nay@gmail.com', '0776606066', 'Kyaliwajjala', 'netbanking', 'Frozen Hot Chocolate Milkshake(2), Fried Chicken Burger(1)', '2450'),
(7, 'nay', 'nay@gmail.com', '345678765', 'sdfghgfd', 'Mpesa', 'Drucy\'s Smokin\' patty(4)', '3200'),
(8, 'aria1', 'aria1@gmail.com', '56789765', 'ghjklkjhg', 'cards', 'Hamburger and double cheese burger(2)', '1800'),
(11, 'client1', 'client1@gmail.com', '0776606066', 'Nairobi', 'Mpesa', 'food1(2), food2(2)', '2800'),
(12, 'client2', 'client2@gmaoil.com', '087654433', 'Nakuru', 'cod', 'food3(2), food2(2)', '1300'),
(13, 'hjk', 'fgyuio@hj', 'ghjk', 'ghjkl', 'cod', 'Drucy\'s Smokin\' patty(2)', '1600');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullnames` varchar(50) NOT NULL,
  `chooseusername` varchar(50) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `enterpassword` varchar(20) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullnames`, `chooseusername`, `emailaddress`, `enterpassword`, `gender`, `usertype`) VALUES
(2, 'Damon Salvatore', 'Damon35', 'damonS@gmail.com', '#delena', 'm', 'customer'),
(3, 'Spencer Hastings', 'Spencer@p', 'spencerp@gmail.com', '#hastings', 'f', 'customer'),
(4, 'Andrew De Luca', 'DeLuca', 'Adelucs@gmail.com', 'mermer', 'm', 'customer'),
(5, 'Jo Wilson', 'karev', 'WKarev@gmail.com', 'Karev4ever', 'f', 'customer'),
(9, 'Harvey Specter', 'specter', 'SpecterH@gmail.com', 'Harvey65', 'm', 'customer'),
(10, 'Shivan Druscilla', 'Drucy', 'shivand@gmail.com', 'shivan123', 'f', 'admin'),
(11, 'Kahika Sidona', 'Sido', 'Sido@gmail.com', 'sido123', 'f', 'admin'),
(12, 'Kajura Jeanne', 'Jeanne', 'jeanne@gmail.com', 'jeanne567', 'f', 'admin'),
(13, 'Kirumi Allan', 'allan', 'AllanK@gmail.com', 'Kallan78', 'f', 'customer'),
(16, 'Mike Ross', 'Rossy', 'Rossty@gmail.com', 'Rossy65', 'm', 'customer'),
(17, 'Hello Kitty', 'Kitty45', 'kitty45@gmail.com', 'kitty143', 'f', 'customer'),
(20, 'Kimpairwe Lisa', 'Rumba', 'RumbaB@gmail.com', 'Bamzee', 'f', 'admin'),
(23, 'Jesse Wilshere', 'Jesse', 'WJesse@gmail.com', 'jesse578', 'm', 'customer'),
(24, 'nay ray', 'nay', 'nay@gmail.com', 'nay1', 'f', 'customer'),
(25, 'Joseph Wambua', 'Jose', 'jose@gmail.com', 'jose1', 'm', 'customer'),
(30, 'client1', 'client1', 'client1@gmail.com', 'client1', 'f', 'customer'),
(31, 'client2', 'client2', 'client2@gmail.com', 'client2', 'f', 'customer'),
(32, 'admin1', 'admin1', 'admin1@gmail.com', 'admin1', 'f', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
