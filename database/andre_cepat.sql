-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 07:10 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andre_cepat`
--

-- --------------------------------------------------------

--
-- Table structure for table `cost_fee`
--

CREATE TABLE `cost_fee` (
  `id` int(11) NOT NULL,
  `id_delivery_type` int(11) NOT NULL,
  `id_item_type` int(11) NOT NULL,
  `id_destination` int(11) NOT NULL,
  `cost_fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cost_fee`
--

INSERT INTO `cost_fee` (`id`, `id_delivery_type`, `id_item_type`, `id_destination`, `cost_fee`) VALUES
(1, 1, 1, 1, '11000'),
(2, 1, 1, 2, '11000'),
(3, 1, 1, 3, '11000'),
(4, 1, 1, 4, '11000'),
(5, 1, 1, 5, '11000'),
(6, 1, 1, 6, '7000'),
(7, 1, 1, 7, '11000'),
(8, 1, 1, 8, '11000'),
(9, 1, 1, 9, '11000'),
(10, 1, 1, 10, '7000'),
(11, 1, 1, 11, '11000'),
(12, 1, 1, 12, '11000'),
(13, 1, 1, 13, '11000'),
(14, 1, 1, 14, '11000'),
(15, 1, 1, 15, '11000'),
(16, 1, 1, 16, '11000'),
(17, 1, 2, 1, '12000'),
(18, 1, 2, 2, '12000'),
(19, 1, 2, 3, '12000'),
(20, 1, 2, 4, '12000'),
(21, 1, 2, 5, '12000'),
(22, 1, 2, 6, '8000'),
(23, 1, 2, 7, '12000'),
(24, 1, 2, 8, '12000'),
(25, 1, 2, 9, '12000'),
(26, 1, 2, 10, '8000'),
(27, 1, 2, 11, '12000'),
(28, 1, 2, 12, '12000'),
(29, 1, 2, 13, '12000'),
(30, 1, 2, 14, '12000'),
(31, 1, 2, 15, '12000'),
(32, 1, 2, 16, '12000'),
(33, 1, 3, 1, '13000'),
(34, 1, 3, 2, '13000'),
(35, 1, 3, 3, '13000'),
(36, 1, 3, 4, '13000'),
(37, 1, 3, 5, '13000'),
(38, 1, 3, 6, '9000'),
(39, 1, 3, 7, '13000'),
(40, 1, 3, 8, '13000'),
(41, 1, 3, 9, '13000'),
(42, 1, 3, 10, '9000'),
(43, 1, 3, 11, '13000'),
(44, 1, 3, 12, '13000'),
(45, 1, 3, 13, '13000'),
(46, 1, 3, 14, '13000'),
(47, 1, 3, 15, '13000'),
(48, 1, 3, 16, '13000'),
(49, 1, 4, 1, '14000'),
(50, 1, 4, 2, '14000'),
(51, 1, 4, 3, '14000'),
(52, 1, 4, 4, '14000'),
(53, 1, 4, 5, '14000'),
(54, 1, 4, 6, '10000'),
(55, 1, 4, 7, '14000'),
(56, 1, 4, 8, '14000'),
(57, 1, 4, 9, '14000'),
(58, 1, 4, 10, '10000'),
(59, 1, 4, 11, '14000'),
(60, 1, 4, 12, '14000'),
(61, 1, 4, 13, '14000'),
(62, 1, 4, 14, '14000'),
(63, 1, 4, 15, '14000'),
(64, 1, 4, 16, '14000'),
(65, 2, 1, 1, '16000'),
(66, 2, 1, 2, '16000'),
(67, 2, 1, 3, '16000'),
(68, 2, 1, 4, '16000'),
(69, 2, 1, 5, '16000'),
(70, 2, 1, 6, '12000'),
(71, 2, 1, 7, '16000'),
(72, 2, 1, 8, '16000'),
(73, 2, 1, 9, '16000'),
(74, 2, 1, 10, '12000'),
(75, 2, 1, 11, '16000'),
(76, 2, 1, 12, '16000'),
(77, 2, 1, 13, '16000'),
(78, 2, 1, 14, '16000'),
(79, 2, 1, 15, '16000'),
(80, 2, 1, 16, '16000'),
(81, 2, 2, 1, '17000'),
(82, 2, 2, 2, '17000'),
(83, 2, 2, 3, '17000'),
(84, 2, 2, 4, '17000'),
(85, 2, 2, 5, '17000'),
(86, 2, 2, 6, '13000'),
(87, 2, 2, 7, '17000'),
(88, 2, 2, 8, '17000'),
(89, 2, 2, 9, '17000'),
(90, 2, 2, 10, '13000'),
(91, 2, 2, 11, '17000'),
(92, 2, 2, 12, '17000'),
(93, 2, 2, 13, '17000'),
(94, 2, 2, 14, '17000'),
(95, 2, 2, 15, '17000'),
(96, 2, 2, 16, '17000'),
(97, 2, 3, 1, '18000'),
(98, 2, 3, 2, '18000'),
(99, 2, 3, 3, '18000'),
(100, 2, 3, 4, '18000'),
(101, 2, 3, 5, '18000'),
(102, 2, 3, 6, '14000'),
(103, 2, 3, 7, '18000'),
(104, 2, 3, 8, '18000'),
(105, 2, 3, 9, '18000'),
(106, 2, 3, 10, '14000'),
(107, 2, 3, 11, '18000'),
(108, 2, 3, 12, '18000'),
(109, 2, 3, 13, '18000'),
(110, 2, 3, 14, '18000'),
(111, 2, 3, 15, '18000'),
(112, 2, 3, 16, '18000'),
(113, 2, 4, 1, '19000'),
(114, 2, 4, 2, '19000'),
(115, 2, 4, 3, '19000'),
(116, 2, 4, 4, '19000'),
(117, 2, 4, 5, '19000'),
(118, 2, 4, 6, '15000'),
(119, 2, 4, 7, '19000'),
(120, 2, 4, 8, '19000'),
(121, 2, 4, 9, '19000'),
(122, 2, 4, 10, '15000'),
(123, 2, 4, 11, '19000'),
(124, 2, 4, 12, '19000'),
(125, 2, 4, 13, '19000'),
(126, 2, 4, 14, '19000'),
(127, 2, 4, 15, '19000'),
(128, 2, 4, 16, '19000'),
(129, 3, 1, 1, '21000'),
(130, 3, 1, 2, '21000'),
(131, 3, 1, 3, '21000'),
(132, 3, 1, 4, '21000'),
(133, 3, 1, 5, '21000'),
(134, 3, 1, 6, '17000'),
(135, 3, 1, 7, '21000'),
(136, 3, 1, 8, '21000'),
(137, 3, 1, 9, '21000'),
(138, 3, 1, 10, '17000'),
(139, 3, 1, 11, '21000'),
(140, 3, 1, 12, '21000'),
(141, 3, 1, 13, '21000'),
(142, 3, 1, 14, '21000'),
(143, 3, 1, 15, '21000'),
(144, 3, 1, 16, '21000'),
(145, 3, 2, 1, '22000'),
(146, 3, 2, 2, '22000'),
(147, 3, 2, 3, '22000'),
(148, 3, 2, 4, '22000'),
(149, 3, 2, 5, '22000'),
(150, 3, 2, 6, '18000'),
(151, 3, 2, 7, '22000'),
(152, 3, 2, 8, '22000'),
(153, 3, 2, 9, '22000'),
(154, 3, 2, 10, '18000'),
(155, 3, 2, 11, '22000'),
(156, 3, 2, 12, '22000'),
(157, 3, 2, 13, '22000'),
(158, 3, 2, 14, '22000'),
(159, 3, 2, 15, '22000'),
(160, 3, 2, 16, '22000'),
(161, 3, 3, 1, '23000'),
(162, 3, 3, 2, '23000'),
(163, 3, 3, 3, '23000'),
(164, 3, 3, 4, '23000'),
(165, 3, 3, 5, '23000'),
(166, 3, 3, 6, '19000'),
(167, 3, 3, 7, '23000'),
(168, 3, 3, 8, '23000'),
(169, 3, 3, 9, '23000'),
(170, 3, 3, 10, '19000'),
(171, 3, 3, 11, '23000'),
(172, 3, 3, 12, '23000'),
(173, 3, 3, 13, '23000'),
(174, 3, 3, 14, '23000'),
(175, 3, 3, 15, '23000'),
(176, 3, 3, 16, '23000'),
(177, 3, 4, 1, '24000'),
(178, 3, 4, 2, '24000'),
(179, 3, 4, 3, '24000'),
(180, 3, 4, 4, '24000'),
(181, 3, 4, 5, '24000'),
(182, 3, 4, 6, '20000'),
(183, 3, 4, 7, '24000'),
(184, 3, 4, 8, '24000'),
(185, 3, 4, 9, '24000'),
(186, 3, 4, 10, '20000'),
(187, 3, 4, 11, '24000'),
(188, 3, 4, 12, '24000'),
(189, 3, 4, 13, '24000'),
(190, 3, 4, 14, '24000'),
(191, 3, 4, 15, '24000'),
(192, 3, 4, 16, '24000'),
(193, 1, 1, 17, '24500'),
(194, 1, 1, 18, '24500'),
(195, 1, 1, 19, '24500'),
(196, 1, 1, 20, '24500'),
(197, 1, 2, 17, '25000'),
(198, 1, 2, 18, '25000'),
(199, 1, 2, 19, '25000'),
(200, 1, 2, 20, '25000'),
(201, 1, 3, 17, '25500'),
(202, 1, 3, 18, '25500'),
(203, 1, 3, 19, '25500'),
(204, 1, 3, 20, '25500'),
(205, 1, 4, 17, '26000'),
(206, 1, 4, 18, '26000'),
(207, 1, 4, 19, '26000'),
(208, 1, 4, 20, '26000'),
(209, 2, 1, 17, '26500'),
(210, 2, 1, 18, '26500'),
(211, 2, 1, 19, '26500'),
(212, 2, 1, 20, '26500'),
(213, 2, 2, 17, '27000'),
(214, 2, 2, 18, '27000'),
(215, 2, 2, 19, '27000'),
(216, 2, 2, 20, '27000'),
(217, 2, 3, 17, '27500'),
(218, 2, 3, 18, '27500'),
(219, 2, 3, 19, '27500'),
(220, 2, 3, 20, '27500'),
(221, 2, 4, 17, '28000'),
(222, 2, 4, 18, '28000'),
(223, 2, 4, 19, '28000'),
(224, 2, 4, 20, '28000'),
(225, 3, 1, 17, '27500'),
(226, 3, 1, 18, '27500'),
(227, 3, 1, 19, '27500'),
(228, 3, 1, 20, '27500'),
(229, 3, 2, 17, '28000'),
(230, 3, 2, 18, '28000'),
(231, 3, 2, 19, '28000'),
(232, 3, 2, 20, '28000'),
(233, 3, 3, 17, '29000'),
(234, 3, 3, 18, '29000'),
(235, 3, 3, 19, '29000'),
(236, 3, 3, 20, '29000'),
(237, 3, 4, 17, '29500'),
(238, 3, 4, 18, '29500'),
(239, 3, 4, 19, '29500'),
(240, 3, 4, 20, '29500'),
(241, 1, 1, 21, '30000'),
(242, 1, 1, 22, '30000'),
(243, 1, 1, 23, '30000'),
(244, 1, 1, 24, '30000'),
(245, 1, 1, 25, '30000'),
(246, 1, 2, 21, '30500'),
(247, 1, 2, 22, '30500'),
(248, 1, 2, 23, '30500'),
(249, 1, 2, 24, '30500'),
(250, 1, 2, 25, '30500'),
(251, 1, 3, 21, '31000'),
(252, 1, 3, 22, '31000'),
(253, 1, 3, 23, '31000'),
(254, 1, 3, 24, '31000'),
(255, 1, 3, 25, '31000'),
(256, 1, 4, 21, '31500'),
(257, 1, 4, 22, '31500'),
(258, 1, 4, 23, '31500'),
(259, 1, 4, 24, '31500'),
(260, 1, 4, 25, '31200'),
(261, 2, 1, 21, '31000'),
(262, 2, 1, 22, '31500'),
(263, 2, 1, 23, '30000'),
(264, 2, 1, 24, '28000'),
(265, 2, 1, 25, '27500'),
(266, 2, 2, 21, '27500'),
(267, 2, 2, 22, '28500'),
(268, 2, 2, 23, '30500'),
(269, 2, 2, 24, '24500'),
(270, 2, 2, 25, '26500'),
(271, 2, 3, 21, '26000'),
(272, 2, 3, 22, '24000'),
(273, 2, 3, 23, '25000'),
(274, 2, 3, 24, '31000'),
(275, 2, 3, 25, '30000'),
(276, 2, 4, 21, '30500'),
(277, 2, 4, 22, '31500'),
(278, 2, 4, 23, '27500'),
(279, 2, 4, 24, '28500'),
(280, 2, 4, 25, '20500'),
(281, 3, 1, 21, '22000'),
(282, 3, 1, 22, '24000'),
(283, 3, 1, 23, '28000'),
(284, 3, 1, 24, '27500'),
(285, 3, 1, 25, '30500'),
(286, 3, 2, 21, '30500'),
(287, 3, 2, 22, '35000'),
(288, 3, 2, 23, '31500'),
(289, 3, 2, 24, '30500'),
(290, 3, 2, 25, '22500'),
(291, 3, 3, 21, '25000'),
(292, 3, 3, 22, '25500'),
(293, 3, 3, 23, '32000'),
(294, 3, 3, 24, '31000'),
(295, 3, 3, 25, '30000'),
(296, 3, 4, 21, '31500'),
(297, 3, 4, 22, '32500'),
(298, 3, 4, 23, '30500'),
(299, 3, 4, 24, '22500'),
(300, 3, 4, 25, '27500');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_phone_number` varchar(255) NOT NULL,
  `sender_origin_city` varchar(255) NOT NULL,
  `sender_address` text NOT NULL,
  `sender_post_code` varchar(255) NOT NULL,
  `receiver_name` text NOT NULL,
  `receiver_phone_number` varchar(255) NOT NULL,
  `receiver_origin_city` varchar(255) NOT NULL,
  `receiver_address` text NOT NULL,
  `receiver_post_code` varchar(255) NOT NULL,
  `item_name` text NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_value` text NOT NULL,
  `item_weight` varchar(255) NOT NULL,
  `item_notes` text NOT NULL,
  `delivery_type` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `delivery_status` varchar(255) NOT NULL,
  `resi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_type`
--

CREATE TABLE `delivery_type` (
  `id` int(11) NOT NULL,
  `delivery_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_type`
--

INSERT INTO `delivery_type` (`id`, `delivery_type_name`) VALUES
(1, 'ANDRE EKONOMIS'),
(2, 'ANDRE REGULAR'),
(3, 'ANDRE HALILINTAR');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `city_origin` varchar(255) NOT NULL,
  `city_destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `city_origin`, `city_destination`) VALUES
(1, 'Surabaya', 'Jakarta'),
(2, 'Surabaya', 'Bandung'),
(3, 'Surabaya', 'Semarang'),
(4, 'Surabaya', 'Jogjakarta'),
(5, 'Jakarta', 'Surabaya'),
(6, 'Jakarta', 'Bandung'),
(7, 'Jakarta', 'Semarang'),
(8, 'Jakarta', 'Jogjakarta'),
(9, 'Bandung', 'Surabaya'),
(10, 'Bandung', 'Jakarta'),
(11, 'Bandung', 'Semarang'),
(12, 'Bandung', 'Jogjakarta'),
(13, 'Jogjakarta', 'Surabaya'),
(14, 'Jogjakarta', 'Jakarta'),
(15, 'Jogjakarta', 'Semarang'),
(16, 'Jogjakarta', 'Bandung'),
(17, 'Semarang', 'Surabaya'),
(18, 'Semarang', 'Jakarta'),
(19, 'Semarang', 'Bandung'),
(20, 'Semarang', 'Jogjakarta'),
(21, 'Surabaya', 'Surabaya'),
(22, 'Jakarta', 'Jakarta'),
(23, 'Bandung', 'Bandung'),
(24, 'Jogjakarta', 'Jogjakarta'),
(25, 'Semarang', 'Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `item_type`
--

CREATE TABLE `item_type` (
  `id` int(11) NOT NULL,
  `item_type_weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_type`
--

INSERT INTO `item_type` (`id`, `item_type_weight`) VALUES
(1, '1-5'),
(2, '6-10'),
(3, '11-15'),
(4, '16-20');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'PICKREQ'),
(2, 'PICK'),
(3, 'ON TRANSIT'),
(4, 'ON DELIVERY'),
(5, 'DELIVERED');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost_fee`
--
ALTER TABLE `cost_fee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_delivery_type` (`id_delivery_type`),
  ADD KEY `id_item_type` (`id_item_type`),
  ADD KEY `id_destination` (`id_destination`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_type`
--
ALTER TABLE `delivery_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_type`
--
ALTER TABLE `item_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_type`
--
ALTER TABLE `delivery_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `item_type`
--
ALTER TABLE `item_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
