-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 11:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'MEN'),
(2, 'WOMEN'),
(3, 'electronics'),
(4, 'baby&kids'),
(5, 'Furniture'),
(6, 'Lifestyle'),
(7, 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_dsc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `product_dsc`, `product_image`) VALUES
(1, 'Sports Running Shoes For Men (Black)', 1, 7999.5, 100, 'This is a genuine product of adidas India Marketing Private Ltd. The product comes with a standard brand warranty of 90 days', 'A shoe is an item of footwear intended to protect and comfort the human foot. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture, with appearance originally being tied to function. Additionally, fashion has often dictated many design elements, such as whether shoes have very high heels or flat ones. Contemporary footwear in the 2010s varies widely in style, complexity and cost. Basic sandals may consist of only a thin sole and simple strap and be sold for a low cost. High fashion shoes made by famous designers may be made of expensive materials, use complex construction and sell for hundreds or even thousands of dollars a pair', '\\ecomm\\images\\men\\shoe.jpeg'),
(2, 'Casio Analog Watch for Men\'s  (black)', 1, 6000, 20, 'This is a genuine Casio product. The product comes with a standard manufacturer warranty of 2 Years.\r\n\r\n.', 'Casio Computer Co., Ltd. is a Japanese multinational consumer electronics and commercial electronics manufacturing company headquartered in Shibuya, Tokyo, Japan. Its products include calculators, mobile phones, digital cameras, electronic musical instruments, and analogue and digital watches. It was founded in 1946, and in 1957 introduced the world\'s first entirely electric compact calculator. It was an early digital camera innovator, and during the 1980s and 1990s, the company developed numerous affordable home electronic keyboards for musicians along with introducing the world\'s first mass-produced digital watches.', '\\ecomm\\images\\men\\watch.jpeg'),
(3, 'mens\'s jean', 1, 500, 200, 'Material: Denim\r\nFit Type: Relaxed\r\nOccasion: Casual\r\nsize: xl\r\ngender: male\r\nThe product comes with a standard brand warranty of 90 days\r\n', '', '\\ecomm\\images\\men\\jeans.jpeg'),
(4, 'Gas Men\'s Printed Slim fit T-Shirt', 1, 1494, 200, '\r\n    Care Instructions: machine wash\r\n    Fit Type: slim fit\r\n    Color: Cendre Blue\r\n    100% Cotton\r\n    Slim fit\r\n    Half sleeve with round neck\r\n    Machine wash\r\n', 'Gas Jeans, sometimes stylized as GAS, is a leading premium apparel and denim brand owned by Grotto S.p.A, run by the Grotto family out of Italy. The company was founded by, Claudio Grotto, in the early 1970s. ', '\\ecomm\\images\\men\\tshirt.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_email`, `user_password`) VALUES
(5, 'nick', 'nick@gmail.com', 'nick001'),
(6, 'vikas', 'vikas@gmail.com', 'vikas001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
