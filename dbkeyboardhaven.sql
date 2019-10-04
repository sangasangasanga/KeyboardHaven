-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 03:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkeyboardhaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_number` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_number`, `username`) VALUES
(3, 'ded'),
(1, 'ivantan'),
(2, 'tommylim');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_number` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `costperunit` decimal(5,2) NOT NULL,
  `cost` decimal(6,2) NOT NULL,
  `paid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_number`, `product_id`, `quantity`, `costperunit`, `cost`, `paid`) VALUES
(2, 3, 1, '19.00', '19.00', 0),
(1, 1, 1, '10.00', '10.00', 0),
(1, 4, 2, '25.00', '50.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `email` varchar(200) NOT NULL,
  `login_time` varchar(25) NOT NULL,
  `logout_time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`email`, `login_time`, `logout_time`) VALUES
('msndocument@hotmail.com', '2019-10-04 07:50:45', ''),
('msndocument@hotmail.com', '', '2019-10-04 07:51:00'),
('msndocument@hotmail.com', '', '2019-10-04 07:51:08'),
('msndocument@hotmail.com', '2019-10-04 07:51:27', ''),
('msndocument@hotmail.com', '2019-10-04 07:51:30', ''),
('msndocument@hotmail.com', '', '2019-10-04 07:51:38'),
('msndocument@hotmail.com', '2019-10-04 07:51:46', ''),
('msndocument@hotmail.com', '', '2019-10-04 07:52:11'),
('msndocument@hotmail.com', '', '2019-10-04 07:52:27'),
('msndocument@hotmail.com', '2019-10-04 07:52:34', ''),
('msndocument@hotmail.com', '', '2019-10-04 07:54:28'),
('msndocument@hotmail.com', '2019-10-04 07:54:32', ''),
('msndocument@hotmail.com', '', '2019-10-04 07:54:34'),
('msndocument@hotmail.com', '2019-10-04 07:54:52', ''),
('willie@hotmail.com', '2019-10-04 12:04:34', ''),
('msndocument@hotmail.com', '', '2019-10-04 12:46:34'),
('msndocument@hotmail.com', '', '2019-10-04 12:46:41'),
('msndocument@hotmail.com', '2019-10-04 13:45:07', ''),
('msndocument@hotmail.com', '', '2019-10-04 13:54:52'),
('msndocument@hotmail.com', '', '2019-10-04 14:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(10) NOT NULL,
  `mem_is_admin` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p198gnj` varchar(80) NOT NULL COMMENT 'This field is for password. Name is weird for security reasons',
  `mem_contact_no` varchar(15) NOT NULL,
  `is_locked` int(1) NOT NULL,
  `login_times` int(11) NOT NULL,
  `tries` int(1) NOT NULL,
  `is_verified` int(1) NOT NULL,
  `shipping_address` varchar(100) NOT NULL,
  `shipping_details_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_is_admin`, `email`, `p198gnj`, `mem_contact_no`, `is_locked`, `login_times`, `tries`, `is_verified`, `shipping_address`, `shipping_details_id`) VALUES
(481, 1, 'msndocument@hotmail.com', '$2y$10$5C62VciUSUB/ujhpuRDq4ePRBqnBWX71nOfZGtUFbxBeCM5xvSzOa', '', 0, 14, 0, 1, '', 0),
(483, 0, 'patrick@hotmail.com', '$2y$10$IeRKGWYjPxk7whN74RpzieIbd/8oqmHj4paOREdKHZSZz4cWHXLc6', '', 0, 0, 0, 0, '', 0),
(484, 1, 'willie@hotmail.com', '$2y$10$Hp6Ylpc6.prD4rlAxmQXH.BmVz4oVhgdmZ3KIToYmvnq.nvvkwp9m', '', 0, 1, 0, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `msg_sender` varchar(30) NOT NULL,
  `msg_email` varchar(120) NOT NULL,
  `msg_subject` varchar(30) NOT NULL,
  `msg_details` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_sender`, `msg_email`, `msg_subject`, `msg_details`) VALUES
(1, 'test123', 'msndocument@ghotmail.com', 'testsubject', 'dnsajfwnwkqnkrwqnkfnwqknfkwqnfkwqk'),
(22, 'dsadsa', 'msn@abc.com', 'General Customer Service', 'dsadsa'),
(23, 'patrick', 'adsads@dsanjdsanjsadnj.dsanj', 'General Customer Service', 'dsa'),
(24, 'dsadsadsa', 'ab@abc.com', 'General Customer Service', 'dsadsadsa'),
(25, 'gfdgfdgfdgdsf', 'patrick@hotmail.conm', 'General Customer Service', 'fdgdsgfdgfds');

-- --------------------------------------------------------

--
-- Table structure for table `notice_message`
--

CREATE TABLE `notice_message` (
  `notice_id` int(2) NOT NULL,
  `notice_text` varchar(200) NOT NULL,
  `changed_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_message`
--

INSERT INTO `notice_message` (`notice_id`, `notice_text`, `changed_by`) VALUES
(1, 'niggaassfjnsaksfnak', 'jeromedog'),
(10, '--Empty--', 'msndocument@hotmail.'),
(11, '---Lastest Notice--- New stocks arrival for SteelSeries keyb', 'msndocument@hotmail.'),
(12, 'jtiewnjkhyrew3nlkjrnyjlknyewjkyrnekwjynjwlkenjykrenrejykwnjk', 'msndocument@hotmail.'),
(13, '---Lastest Notice--- New stocks arrival for SteelSeries keyboards!', 'msndocument@hotmail.'),
(14, '--Empty--', 'msndocument@hotmail.'),
(15, '---Lastest Notice--- New stocks arrival for SteelSeries keyboards! ', 'msndocument@hotmail.'),
(16, 'test123', 'msndocument@hotmail.'),
(17, 'test123', 'msndocument@hotmail.'),
(18, '---Lastest Notice--- New stocks arrival for SteelSeries keyboards! ', 'msndocument@hotmail.'),
(19, 'williie handsome', 'willie@hotmail.com'),
(20, '---Lastest Notice--- New stocks arrival for SteelSeries keyboards!', 'willie@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `invoice_id` int(10) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `is_packed` int(1) NOT NULL,
  `is_shipped` int(1) NOT NULL,
  `amount` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`invoice_id`, `customer_email`, `status`, `is_packed`, `is_shipped`, `amount`) VALUES
(1, 'cleaven@hotmail.com', 'Pending', 0, 1, '15.44'),
(2, 'msndocument@hotmail.com', 'Confirmed', 1, 0, '90.50');

-- --------------------------------------------------------

--
-- Table structure for table `passwordreset`
--

CREATE TABLE `passwordreset` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwordreset`
--

INSERT INTO `passwordreset` (`username`, `email`) VALUES
('samchua', 'samchua@gmail.com'),
('de', 'fef@gmail.com'),
('tets', 'efef@gmail.com'),
('ivantan', 'ivantan97@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `shipping_no` int(5) NOT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `card_number` varchar(50) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL,
  `order_no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`shipping_no`, `payment_mode`, `card_number`, `month`, `year`, `cvv`, `order_no`, `username`) VALUES
(1, 'Visa', '4523578969335412', 'January', 2016, 174, 1, 'ivantan');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `itm_id` int(11) NOT NULL,
  `itm_brand` varchar(40) DEFAULT NULL,
  `itm_price` decimal(5,2) DEFAULT NULL,
  `itm_name` varchar(200) DEFAULT NULL,
  `itm_desc` varchar(500) DEFAULT NULL,
  `itm_file_path` varchar(100) DEFAULT NULL,
  `itm_quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`itm_id`, `itm_brand`, `itm_price`, `itm_name`, `itm_desc`, `itm_file_path`, `itm_quantity`) VALUES
(1, 'iKBC', '144.00', 'IKBC F87 Black', 'Perfect for gamers, delivering a fast and precise response with great tactile feedback and It makes double-tapping keys easy.', 'img/Keyboard Images/iKBC/f87black.jpg', 10),
(7, 'iKBC', '179.99', 'IKBC F108 Black', 'Perfect for gamers, delivering a fast and precise response with great tactile feedback and It makes double-tapping keys easy.', 'img/Keyboard Images/iKBC/f108black.jpg', 22),
(8, 'iKBC', '140.00', 'IKBC F87  White', 'A durable keyboard with PBT Keycaps & Double shot injection molding keycaps with laser etching printing for crystal clear backlighting as well as Ergonomic Keycap Shapes designed to provide you with durable, long lasting and comfortable typing experience.', 'img/Keyboard Images/iKBC/f87white.jpg', 15),
(9, 'iKBC', '219.00', 'IKBC CD108 Black', 'A durable keyboard with PBT Keycaps & Double shot injection molding keycaps with laser etching printing for crystal clear backlighting as well as Ergonomic Keycap Shapes designed to provide you with durable, long lasting and comfortable typing experience.', 'img/Keyboard Images/iKBC/cd108black.jpg', 13),
(10, 'iKBC', '180.00', 'IKBC F108 White', 'Reliable keyboard for both gaming and office usage', 'img/Keyboard Images/iKBC/f108white.jpg', 12),
(11, 'iKBC', '170.00', 'IKBC CD87 Black', 'Bluetooth keyboard', 'img/Keyboard Images/iKBC/cd87bluetooth.jpg', 10),
(12, 'iKBC', '200.00', 'IKBC MF87 Grey', 'Metal frame keyboard with premium aesthetics!', 'img/Keyboard Images/iKBC/mf87grey.jpg', 9),
(13, 'Ducky', '185.00', 'Ducky MA108M Sea Melody', 'TestDesc', 'img/Keyboard Images/Ducky/varmilo_ma108m_Sea_melody.jpg', 8),
(14, 'Ducky', '215.00', 'Ducky Shine 7 BlackOut', 'TestDesc', 'img/Keyboard Images/Ducky/shine7blackout.jpg', 7),
(15, 'Ducky', '237.00', 'Ducky Shine 3 Yellow Limited Edition', 'TestDesc', 'img/Keyboard Images/Ducky/shine3yellowlimitededition.jpg', 6),
(16, 'Ducky', '188.00', 'Ducky One Gray', 'TestDesc', 'img/Keyboard Images/Ducky/onegray.jpg', 5),
(17, 'Ducky', '178.00', 'Ducky One Blue', 'TestDesc', 'img/Keyboard Images/Ducky/oneblue.jpg', 4),
(18, 'Ducky', '222.00', 'Ducky One 2 Razer Edition', 'TestDesc', 'img/Keyboard Images/Ducky/one2razeredition.jpg', 3),
(19, 'Ducky', '246.00', 'Miya Pro Sakura-Pink', 'TestDesc', 'img/Keyboard Images/Ducky/miyaprosakurapink.jpg', 2),
(20, 'Ducky', '190.00', 'Ducky One 2 Horizon', 'TestDesc', 'img/Keyboard Images/Ducky/one2horizon.jpg', 5),
(21, 'Corsair', '215.00', 'Corsair K65 Rapidfire', 'Rapidfire Desc', 'img/Keyboard Images/Corsair/k65rapidfire.jpg', 7),
(22, 'Corsair', '188.00', 'Corsair K70 RGB', 'RGB Keyboard', 'img/Keyboard Images/Corsair/k70rgb.jpg', 8),
(23, 'Corsair', '198.00', 'Corsair K70 RGB MK2', 'Mk2', 'img/Keyboard Images/Corsair/k70rgbmk2.jpg', 45),
(24, 'SteelSeries', '225.00', 'SteelSeries Apex 7', '', 'img/Keyboard Images/SteelSeries/apex 7.png', 5),
(25, 'SteelSeries', '245.00', 'SteelSeries Apex M750', 'Apex M750', 'img/Keyboard Images/SteelSeries/apex m750.png', 5),
(26, 'Razer', '222.00', 'Razer BlackWidow Elite', 'Black Widow Keyboard', 'img/Keyboard Imaages/Razer/blackwidowelite.jpg', 2),
(27, 'Razer', '260.00', 'Ducky One 2 RGB Razer Edition', 'Razer Keyboard', 'img/Keyboard Imaages/Razer/duckyone2rgb razeredition.jpg', 5),
(28, 'Razer', '200.00', 'Razer Black Widow Lite Storm Trooper', 'Razer Keyboard', 'img/Keyboard Imaages/Razer/razerblackwidowLitestormtrooperedition.jpg', 5),
(29, 'Razer', '188.00', 'Razer Huntsman Elite', 'Razer Keybaord', 'img/Keyboard Imaages/Razer/razerhuntsman elite.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `session_data`
--

CREATE TABLE `session_data` (
  `session_id` varchar(32) NOT NULL DEFAULT '',
  `hash` varchar(32) NOT NULL DEFAULT '',
  `session_data` blob NOT NULL,
  `session_expire` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_data`
--

INSERT INTO `session_data` (`session_id`, `hash`, `session_data`, `session_expire`) VALUES
('02kcqa7mstrnus8frescgkgm9u', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('0pi7l4s3tc37cj2ocglv579e8o', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('2eq951ua5tp06a8tqg8k8eiki8', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('2o04fjof4igiqi9uf2bh0usb57', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('4bue4d46kuhi86vor3loravv34', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('6qc275c8dgvhv3ll16d3jf2mf3', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('7ioikknkbermgh1t3dmd4dllmh', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('8hasgmcnkt3q49i2oqb6kqjbc0', '6f3b5de28ce89d82d75d37db476d8304', '', 1570120849),
('8t5en82fgdopbpm1v2jj67o304', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('95p8qg30s6n4pemdlert19fu51', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('a5tef90um2hmovhe79lf23u4s8', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('argah29ou63m6c1c56pa88m9sf', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('c8dhf02h1kqaq4djdhvqjiaj1q', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('dn3d07d7blk9okfe3m99s8ct3t', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('f2184ll8m6o31e9eagcsg7d91m', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('guv711t1d8itn7l3qjngqnh3q0', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('j51mafebtu3qq645g9b9doou18', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('jginah20pf60o4sia7t6f5p114', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('k7i9hhi8v1eg5cipspb1d606uf', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('ka9crovta3ia6hqkdv2037q72e', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('kj7a9o2kc69h121f17go818ukb', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('l3kp3eunnr47dbrle629vpvpqj', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('l5ebbqnf31u3bd3tolpguta7jp', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('leq1s2k329do6crmn7k88cb7au', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('mf7slf8e1ilajaqc8agr12o16c', '6f3b5de28ce89d82d75d37db476d8304', 0x656d61696c7c733a32333a226d736e646f63756d656e7440686f746d61696c2e636f6d223b69735f61646d696e7c693a303b, 1570132541),
('mndui0090e6j2i1t8p6tqedn4p', '6f3b5de28ce89d82d75d37db476d8304', '', 1570129250),
('ms9br5v5tcfr40psg89ft3ka46', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('poesj76qaf77r5gsic5f41l33a', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('s4f3pvr6uciohm4v50lfs0cud4', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('sjaqavajd6ucenqv4rn84u2dm6', '6f3b5de28ce89d82d75d37db476d8304', 0x656d61696c7c733a32333a226d736e646f63756d656e7440686f746d61696c2e636f6d223b69735f61646d696e7c693a313b, 1570196325),
('tsglf2p1i90a2036pcf0uhih91', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('uk0gsetqlg40nt0b7sri5tuog5', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('ur533m342geg2od38qisdsmknb', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173),
('vq1u6v81on7in82np4rej61tpi', '6f3b5de28ce89d82d75d37db476d8304', '', 1570184173);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `order_no` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` int(6) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone_number` int(8) NOT NULL,
  `email` varchar(500) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `total_cost` decimal(6,2) NOT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`order_no`, `first_name`, `last_name`, `city`, `address`, `postal_code`, `country`, `phone_number`, `email`, `cart_id`, `total_cost`, `username`) VALUES
(1, 'Kevin', 'Tan', 'Singapore', '29B Flora Road Estella Gardens #07-09', 509742, 'Singapore', 98599898, 'kevintan35@hotmail.com', 1, '63.00', 'ivantan');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postal_code` int(10) DEFAULT NULL,
  `mem_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `first_name`, `last_name`, `address1`, `address2`, `city`, `postal_code`, `mem_id`) VALUES
(13, 'Patrick', 'Kang', 'Kovan Road #10-19', '', 'Singapore', 548193, 481),
(15, '', '', '', '', '', NULL, 483),
(16, '', '', '', '', '', NULL, 484);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_number`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `shipping_details_id` (`shipping_details_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `notice_message`
--
ALTER TABLE `notice_message`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`shipping_no`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`itm_id`);

--
-- Indexes for table `session_data`
--
ALTER TABLE `session_data`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mem_id` (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notice_message`
--
ALTER TABLE `notice_message`
  MODIFY `notice_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `invoice_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `shipping_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `itm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD CONSTRAINT `shipping_details_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `members` (`mem_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
