-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2015 at 04:32 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_do_cu`
--

-- --------------------------------------------------------

--
-- Table structure for table `done_exchange1`
--

CREATE TABLE IF NOT EXISTS `done_exchange1` (
  `id` int(11) NOT NULL,
  `exchange1_id` int(11) NOT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exchange1`
--

CREATE TABLE IF NOT EXISTS `exchange1` (
  `id` int(11) NOT NULL,
  `product_id1` int(11) NOT NULL,
  `product_id2` int(11) NOT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exchange1`
--

INSERT INTO `exchange1` (`id`, `product_id1`, `product_id2`, `time`, `type`) VALUES
(1, 80, 98, '1446691792', 1),
(3, 82, 101, '1446691817', 1),
(5, 99, 109, '1446691902', 1),
(6, 80, 109, '1446692159', 1),
(8, 100, 101, '1446692496', 1),
(9, 82, 109, '1446692617', 1),
(10, 80, 101, '1446694726', 1),
(11, 99, 101, '1446696505', 1),
(12, 98, 85, '1446697258', 1),
(13, 85, 99, '1446780390', 1),
(14, 99, 91, '1446783336', 1),
(15, 99, 85, '1446804074', 1),
(16, 98, 91, '1446804130', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL,
  `id_change` int(11) NOT NULL,
  `type_change` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_view` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `id_change`, `type_change`, `time`, `is_view`) VALUES
(4, 9, 'doing', '1446692617', 0),
(5, 10, 'doing', '1446694726', 0),
(6, 11, 'doing', '1446696505', 0),
(7, 12, 'doing', '1446697258', 0),
(8, 13, 'doing', '1446780390', 0),
(9, 14, 'doing', '1446783336', 0),
(10, 15, 'doing', '1446804075', 0),
(11, 16, 'doing', '1446804130', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `change_way` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `access_level` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public',
  `view` int(11) NOT NULL DEFAULT '0',
  `creat_time` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `image_more` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `title`, `name`, `tag`, `image`, `info`, `change_way`, `access_level`, `view`, `creat_time`, `is_delete`, `image_more`) VALUES
(80, 10, 'Äá»•i samsung láº¥y iphone 4', 'samsung galaxy', 'Äiá»‡n Thoáº¡i di Ä‘á»™ng', 'images/images.jpg1445220955.png', 'samsung galaxysamsung galaxysamsung galaxysamsung galaxysamsung galaxysamsung galaxysamsung galaxy', 'samsung galaxysamsung galaxysamsung galaxysamsung galaxysamsung galaxy', 'Chá»‰ báº¡n bÃ¨', 13, 1445220955, 0, ''),
(82, 10, 'b', 'b', 'Xe Ä‘áº¡p', 'images/Penguins.jpg1445351483.png', 'b', 'b', 'Chá»‰ mÃ¬nh tÃ´i', 7, 1445351483, 0, ''),
(85, 10, 'a', 'a', 'Ã” tÃ´', 'images/Hydrangeas.jpg1445445985.png', 'a', 'a', 'Má»i ngÆ°á»i', 45, 1445445985, 0, 'images/Untitled.png1445445985.png images/images.jpg1445445985.png '),
(91, 10, 'ab', 'a', 'Ã” tÃ´', 'images/Untitled.png1445693662.png', 'a', 'a', 'Má»i ngÆ°á»i', 8, 1445693662, 0, 'images/Untitled.png1445693662.png images/images.jpg1445693662.png '),
(96, 3, 'ÄÃ´i Ä‘iá»‡n thoáº¡i gáº¥p', 'iphone 5', 'Äiá»‡n Thoáº¡i di Ä‘á»™ng', 'images/947iphone6-gold-select-2014.jpg1445823635.png', 'má»›i mua 1111', 'gá»i trá»±c tiáº¿p', 'Chá»‰ mÃ¬nh tÃ´i', 38, 1445823635, 0, 'images/Tulips.jpg1445823635.png images/Penguins.jpg1445823635.png images/Lighthouse.jpg1445823635.png images/Koala.jpg1445823635.png '),
(98, 3, 'Ä‘Ã´i laptop', 'asus k55vd', 'MÃ¡y tÃ­nh, Laptop', 'images/93_asus_k55a_nau_3.jpg1445823858.png', 'cu 2 nÄƒm', 'gá»i trá»±c tiáº¿p', 'Má»i ngÆ°á»i', 12, 1445823858, 0, 'images/QkPqIaECBNeVvJVC_500.jpg1445823858.png images/974_2_asus_k55vd_ds71_2.jpg1445823858.png images/93_asus_k55a_nau_3.jpg1445823858.png '),
(99, 9, 'xe mÃ¡y', 'honda', 'Xe MÃ¡y', 'images/7b44065bd83d6d9a30a8d6bdb55b50e2.jpg1445823983.png', 'xe moi mua 1 nam', 'goi Ä‘t', 'Má»i ngÆ°á»i', 17, 1445823983, 0, 'images/7b44065bd83d6d9a30a8d6bdb55b50e2.jpg1445823983.png '),
(100, 13, 'san pham', 'gay', 'Máº¹ vÃ  bÃ©', 'images/Koala.jpg1445843310.png', 'dep', 'tuy', 'Má»i ngÆ°á»i', 3, 1445843310, 0, 'images/1445843310.png '),
(101, 3, 'mÃ¡y tÃ­nh Ä‘Ãª bÃ n', 'mÃ¡y tÃ­nh Ä‘Ãª bÃ n asus', 'MÃ¡y tÃ­nh, Laptop', 'images/Desert.jpg1446604805.png', 'mÃ¡y tÃ­nh Ä‘Ãª bÃ n', 'gá»i Ä‘iá»‡n', 'Má»i ngÆ°á»i', 9, 1446604805, 0, 'images/Koala.jpg1446604805.png '),
(109, 3, 'laptop mini', 'laptop mini', 'MÃ¡y tÃ­nh, Laptop', 'images/Desert.jpg1446605199.png', 'laptop mini', 'laptop mini', 'Má»i ngÆ°á»i', 1, 1446605199, 0, 'images/Jellyfish.jpg1446605199.png ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `create_time` int(11) NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hometown` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phonenumber`, `level`, `create_time`, `address`, `hometown`, `sex`, `info`, `birthday`, `image`) VALUES
(1, 'tranduytung', 'tranduytung1994@gmail.com', '123456', 1234567, 1, 1443543805, 'HBT,HN', 'ÄÃ´ng hÆ°ngthÃ¡i bÃ¬nh', 'Nam', '', '1/1/1970', 'images/Lighthouse.jpg1445095815.png'),
(3, 'Tráº§n Duy TÃ¹ng1234', 'a@gmail.com', '123456', 2147483647, 1, 1443668290, 'HÃ  Ná»™i', 'ThÃ¡i BÃ¬nh', 'Nam', 'xxx', '1994-12-17', 'images/Koala.jpg1444621933.png'),
(9, 'Tráº§n Duy B', 'b@gmail.com', '123456', 1635439157, 1, 1444126194, '', '', '', '', '', 'images/user_default.png'),
(10, 'Tráº§n Duy C', 'c@gmail.com', '123456', 1635439157, 1, 1444126936, '', '', 'Nam', '', '2015-10-26', 'images/images.jpg1445006375.png'),
(11, 'Tráº§n VÄƒn C', 'd@gmail.com', '123456', 1234567890, 1, 1444621974, '', '', 'None', '', 'None/None/', 'images/Koala.jpg1444622486.png'),
(12, 'Tráº§n Duy E', 'e@gmail.com', '123456', 123456789, 1, 1445825315, '', '', '', '', '', 'images/user_default.png'),
(13, 'vu', 'vu@gmail.com', '12345678', 1234567890, 1, 1445843152, '', '', '', '', '', 'images/user_default.png'),
(14, 'Tráº§n Duy G', 'g@gmail.com', '12345', 2147483647, 1, 1446132711, 'hÃ  ná»™i', 'thÃ¡i bÃ¬nh', 'Nam', 'tÃ´i lÃ  G', '2015-10-08', 'images/Koala.jpg1446135033.png'),
(15, 'tÃ¹ng', 't@gmail.com', '123456', 123456789, 1, 1446605926, 'hÃ  ná»™i', 'thÃ¡i bÃ¬nh', '', '', '2015-11-12', 'images/Hydrangeas.jpg1446606835.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `done_exchange1`
--
ALTER TABLE `done_exchange1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange1`
--
ALTER TABLE `exchange1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `done_exchange1`
--
ALTER TABLE `done_exchange1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exchange1`
--
ALTER TABLE `exchange1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
