-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2024 at 05:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int NOT NULL,
  `adminName` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `adminName`, `email`, `password`) VALUES
(1, 'admin', 'sachvek@gmail.com', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id` int NOT NULL,
  `userCode` varchar(240) NOT NULL,
  `userName` varchar(240) NOT NULL,
  `bankName` varchar(240) NOT NULL,
  `bankAccount` varchar(240) NOT NULL,
  `ifsc` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`id`, `userCode`, `userName`, `bankName`, `bankAccount`, `ifsc`) VALUES
(7, '39744', 'dd', '432', 'df', 'fdd'),
(8, '12465', 'Ganesh Ram', 'State Bank of India', '31554597492', 'SBIN0010140');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bv`
--

CREATE TABLE `tbl_bv` (
  `id` int NOT NULL,
  `userCode` varchar(240) NOT NULL,
  `amount` varchar(240) NOT NULL,
  `side` varchar(240) NOT NULL,
  `pstatus` int NOT NULL DEFAULT '0',
  `lstatus` int NOT NULL DEFAULT '0',
  `wStatus` varchar(240) NOT NULL DEFAULT '0',
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_bv`
--

INSERT INTO `tbl_bv` (`id`, `userCode`, `amount`, `side`, `pstatus`, `lstatus`, `wStatus`, `date`) VALUES
(1059, '12465', '15000', 'right', 1, 0, '0', '2024-05-05 00:00:00'),
(1060, '12465', '30000', 'left', 1, 0, '0', '2024-05-05 00:00:00'),
(1061, '12465', '30000', 'right', 1, 0, '0', '2024-05-05 00:00:00'),
(1062, '12465', '60000', 'left', 1, 0, '0', '2024-05-05 00:00:00'),
(1063, '12465', '30000', 'left', 1, 0, '0', '2024-05-05 00:00:00'),
(1064, '12465', '60000', 'right', 1, 0, '0', '2024-05-05 00:00:00'),
(1089, '14783', '125000', 'right', 1, 0, '0', '2024-05-05 00:00:00'),
(1090, '53189', '125000', 'right', 0, 0, '0', '2024-05-05 00:00:00'),
(1091, '46118', '125000', 'right', 0, 0, '0', '2024-05-05 00:00:00'),
(1092, '12465', '125000', 'right', 1, 0, '0', '2024-05-05 00:00:00'),
(1093, '27313', '125000', 'left', 1, 0, '0', '2024-05-05 00:00:00'),
(1094, '39744', '125000', 'left', 0, 0, '0', '2024-05-05 00:00:00'),
(1095, '14783', '125000', 'right', 1, 0, '0', '2024-05-05 00:00:00'),
(1096, '53189', '125000', 'right', 0, 0, '0', '2024-05-05 00:00:00'),
(1097, '46118', '125000', 'right', 0, 0, '0', '2024-05-05 00:00:00'),
(1098, '12465', '125000', 'left', 1, 0, '0', '2024-05-05 00:00:00'),
(1099, '27313', '125000', 'left', 1, 0, '0', '2024-05-05 00:00:00'),
(1100, '39744', '125000', 'left', 0, 0, '0', '2024-05-05 00:00:00'),
(1101, '53189', '15000', 'right', 0, 0, '0', '2024-05-05 00:00:00'),
(1102, '46118', '15000', 'right', 0, 0, '0', '2024-05-05 00:00:00'),
(1103, '12465', '15000', 'right', 1, 0, '0', '2024-05-05 00:00:00'),
(1104, '27313', '15000', 'left', 1, 0, '0', '2024-05-05 00:00:00'),
(1105, '39744', '15000', 'left', 0, 0, '0', '2024-05-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int NOT NULL,
  `proID` varchar(240) NOT NULL,
  `size` varchar(240) NOT NULL,
  `quantity` varchar(240) NOT NULL,
  `userId` varchar(240) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `proID`, `size`, `quantity`, `userId`, `status`) VALUES
(374, ' 51', '', '1', '390', 1),
(375, ' 51', '', '1', '391', 1),
(376, ' 51', '', '1', '389', 1),
(377, ' 49', '', '100', '392', 1),
(378, ' 48', '', '250', '393', 1),
(379, ' 51', '', '1', '394', 1),
(380, ' 47', '', '100', '394', 1),
(381, ' 51', '', '1', '396', 1),
(382, ' 51', '', '1', '397', 1),
(385, ' 51', '', '10', '393', 1),
(386, ' 51', '', '350', '398', 1),
(387, ' 51', '', '25', '393', 1),
(388, ' 51', '', '5', '401', 1),
(389, ' 51', '', '100', '400', 1),
(390, ' 51', '', '1', '399', 1),
(391, ' 52', '', '1', '402', 1),
(392, ' 52', '', '1', '403', 1),
(393, ' 52', '', '1', '404', 1),
(394, ' 52', '', '1', '405', 1),
(395, ' 51', '', '40', '407', 1),
(396, ' 51', '', '50', '408', 1),
(397, ' 51', '', '1', '406', 1),
(398, ' 52', '', '1', '406', 1),
(399, ' 51', '', '40', '408', 1),
(400, ' 51', '', '40', '407', 1),
(401, ' 48', '', '1', '389', 1),
(402, ' 48', '', '1', '389', 1),
(403, ' 51', '', '10', '409', 1),
(404, ' 51', '', '20', '410', 1),
(405, ' 51', '', '1', '407', 1),
(406, ' 51', '', '1', '411', 1),
(407, ' 51', '', '20', '412', 1),
(408, ' 51', '', '5', '411', 1),
(409, ' 49', '', '25', '413', 1),
(410, ' 49', '', '50', '414', 1),
(411, ' 51', '', '40', '412', 1),
(412, ' 51', '', '41', '411', 1),
(413, ' 51', '', '2', '412', 1),
(414, ' 51', '', '1', '412', 1),
(415, ' 51', '', '2', '411', 1),
(416, ' 51', '', '2', '412', 1),
(417, ' 51', '', '4', '411', 1),
(418, ' 51', '', '2', '414', 1),
(419, ' 51', '', '4', '408', 1),
(420, ' 52', '', '1', '415', 1),
(421, ' 52', '', '1', '415', 1),
(422, ' 52', '', '1', '415', 1),
(423, ' 52', '', '1', '415', 1),
(424, ' 52', '', '1', '415', 1),
(425, ' 52', '', '1', '415', 1),
(426, ' 51', '', '1', '412', 1),
(427, ' 49', '', '1', '406', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int NOT NULL,
  `catName` varchar(240) NOT NULL,
  `catSlug` varchar(240) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `catName`, `catSlug`, `status`) VALUES
(6, 'Health Care', 'health care', 1),
(7, 'Personal Care', 'personal care', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int NOT NULL,
  `email` varchar(240) DEFAULT NULL,
  `mobile` varchar(240) NOT NULL,
  `address` varchar(240) NOT NULL,
  `gst` varchar(240) DEFAULT NULL,
  `cin` varchar(240) DEFAULT NULL,
  `comName` varchar(240) DEFAULT NULL,
  `sintro` text NOT NULL,
  `holder` varchar(240) NOT NULL,
  `bankName` varchar(240) NOT NULL,
  `bankAcc` varchar(240) NOT NULL,
  `ifsc` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `email`, `mobile`, `address`, `gst`, `cin`, `comName`, `sintro`, `holder`, `bankName`, `bankAcc`, `ifsc`) VALUES
(1, 'info@azwokdirect.com', '0186643898', 'dhaka', '99922', '1231', 'AZWOK DIGITAL NETWORK PVT LTD', '', 'holder name', 'ICICI Bank', '005505013204', 'ICIC0000055');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_copyright`
--

CREATE TABLE `tbl_copyright` (
  `id` int NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_copyright`
--

INSERT INTO `tbl_copyright` (`id`, `des`) VALUES
(1, 'Â© 2024 Azwok Digital Network Pvt Ltd ... All Right Reserved.Privacy policy.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int NOT NULL,
  `countryName` varchar(240) NOT NULL,
  `countrySlug` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `countryName`, `countrySlug`) VALUES
(3, 'India', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cupon`
--

CREATE TABLE `tbl_cupon` (
  `id` int NOT NULL,
  `code` varchar(240) NOT NULL,
  `discount` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_cupon`
--

INSERT INTO `tbl_cupon` (`id`, `code`, `discount`) VALUES
(1, '12', '20'),
(2, '5423453', '10'),
(3, 'vivek99', '99');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eligible`
--

CREATE TABLE `tbl_eligible` (
  `id` int NOT NULL,
  `ubCode` varchar(240) DEFAULT NULL,
  `left` varchar(240) DEFAULT NULL,
  `right` varchar(240) DEFAULT NULL,
  `self` varchar(240) DEFAULT NULL,
  `kycStatus` varchar(240) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_eligible`
--

INSERT INTO `tbl_eligible` (`id`, `ubCode`, `left`, `right`, `self`, `kycStatus`) VALUES
(9, '39744', '5827750', '500', '500', '1'),
(10, '27315', NULL, NULL, '500', '0'),
(11, '56373', NULL, NULL, '500', '0'),
(12, '91898', NULL, NULL, '500', '0'),
(13, '59817', NULL, NULL, '500', '0'),
(14, '35212', NULL, NULL, '500', '0'),
(15, '13529', NULL, NULL, '500', '0'),
(16, '99660', NULL, NULL, '500', '0'),
(17, '53383', NULL, NULL, '500', '0'),
(18, '33214', NULL, NULL, '500', '0'),
(19, '51171', NULL, NULL, '500', '0'),
(20, '38282', NULL, NULL, '500', '0'),
(21, '39630', NULL, NULL, '500', '0'),
(22, '27313', NULL, NULL, '500', '0'),
(23, '88897', NULL, NULL, '500', '0'),
(24, '56343', NULL, NULL, '500', '0'),
(25, '46118', NULL, NULL, '500', '0'),
(26, '12465', NULL, NULL, '500', '0'),
(27, '80611', NULL, NULL, '500', '0'),
(28, '53189', NULL, NULL, '500', '0'),
(29, '35308', NULL, NULL, '500', '0'),
(30, '14783', NULL, NULL, '500', '0'),
(31, '24861', NULL, NULL, '500', '0'),
(32, '47797', NULL, NULL, '500', '0'),
(33, '36310', NULL, NULL, '500', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_features`
--

CREATE TABLE `tbl_features` (
  `id` int NOT NULL,
  `icon` varchar(240) NOT NULL,
  `title` varchar(240) NOT NULL,
  `des` varchar(240) NOT NULL,
  `icon2` varchar(240) NOT NULL,
  `title2` varchar(240) NOT NULL,
  `des2` varchar(240) NOT NULL,
  `icon3` varchar(240) NOT NULL,
  `title3` varchar(240) NOT NULL,
  `des3` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_features`
--

INSERT INTO `tbl_features` (`id`, `icon`, `title`, `des`, `icon2`, `title2`, `des2`, `icon3`, `title3`, `des3`) VALUES
(1, '../uploads/a97e1aa265.jpg', 'Azwok Liver', 'AZWOK LIVER for infantile liver disorder,anorexia, hepatitis jaundice & fatty infiltration of liver', '../uploads/a97e1aa.jpg', 'Warning', 'Azwokdirect sells its recognized products only', '../uploads/a97e1.jpg', 'Segmentation', 'Summary of changes that we have made to our Segmentation');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forwards`
--

CREATE TABLE `tbl_forwards` (
  `id` int NOT NULL,
  `userCode` varchar(240) NOT NULL,
  `amount` varchar(240) NOT NULL,
  `side` varchar(240) NOT NULL,
  `type` varchar(200) NOT NULL DEFAULT 'none',
  `Status` int NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_forwards`
--

INSERT INTO `tbl_forwards` (`id`, `userCode`, `amount`, `side`, `type`, `Status`, `date`) VALUES
(585, '12465', '15000', 'left', 'none', 1, '2024-05-05 16:44:07'),
(586, '12465', '15000', 'right', 'none', 1, '2024-05-05 16:44:37'),
(587, '12465', '45000', 'left', 'none', 1, '2024-05-05 16:45:13'),
(588, '12465', '15000', 'left', 'none', 1, '2024-05-05 16:45:54'),
(596, '12465', '110000', 'right', 'none', 1, '2024-05-05 17:49:43'),
(597, '12465', '15000', 'left', 'none', 1, '2024-05-05 17:51:53'),
(598, '12465', '0', 'right', 'none', 0, '2024-05-05 22:29:42'),
(599, '27313', '250000', 'right', 'none', 1, '2024-05-05 08:39:42'),
(600, '', '250000', 'right', 'none', 0, '2024-05-05 23:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income`
--

CREATE TABLE `tbl_income` (
  `id` int NOT NULL,
  `uCode` varchar(255) NOT NULL,
  `amount` int NOT NULL,
  `process` varchar(240) NOT NULL,
  `incomeDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_income`
--

INSERT INTO `tbl_income` (`id`, `uCode`, `amount`, `process`, `incomeDate`) VALUES
(307, '27313', 125000, 'Pruches Bonuse', '2024-05-05 03:27:04'),
(308, '88897', 125000, 'Pruches Bonuse', '2024-05-05 03:28:26'),
(309, '56343', 600000, 'Pruches Bonuse', '2024-05-05 09:40:26'),
(310, '46118', 750000, 'Pruches Bonuse', '2024-05-05 09:42:12'),
(311, '12465', 15000, 'Pruches Bonuse', '2024-05-05 09:43:58'),
(312, '12465', 125000, 'Pruches Bonuse', '2024-05-05 12:36:00'),
(313, '46118', 600000, 'Pruches Bonuse', '2024-05-05 15:16:55'),
(314, '56343', 600000, 'Pruches Bonuse', '2024-05-05 15:19:09'),
(315, '39744', 15000, 'Pruches Bonuse', '2024-05-05 15:39:07'),
(316, '39744', 523, 'Pruches Bonuse', '2024-05-05 15:39:07'),
(317, '39744', 523, 'Pruches Bonuse', '2024-05-05 15:39:07'),
(318, '80611', 150000, 'Pruches Bonuse', '2024-05-05 06:52:12'),
(319, '53189', 300000, 'Pruches Bonuse', '2024-05-05 06:55:57'),
(320, '56343', 15000, 'Pruches Bonuse', '2024-05-05 08:21:27'),
(321, '35308', 15000, 'Pruches Bonuse', '2024-05-05 07:11:48'),
(322, '14783', 300000, 'Pruches Bonuse', '2024-05-05 07:13:22'),
(323, '35308', 75000, 'Pruches Bonuse', '2024-05-05 11:36:07'),
(324, '24861', 15750, 'Pruches Bonuse', '2024-05-05 16:53:52'),
(325, '47797', 31500, 'Pruches Bonuse', '2024-05-05 16:55:39'),
(326, '14783', 600000, 'Pruches Bonuse', '2024-05-05 16:43:39'),
(327, '35308', 615000, 'Pruches Bonuse', '2024-05-05 16:45:12'),
(328, '14783', 30000, 'Pruches Bonuse', '2024-05-05 16:48:07'),
(329, '14783', 15000, 'Pruches Bonuse', '2024-05-05 10:35:14'),
(330, '35308', 30000, 'Pruches Bonuse', '2024-05-05 10:36:40'),
(331, '14783', 30000, 'Pruches Bonuse', '2024-05-05 10:39:21'),
(332, '35308', 60000, 'Pruches Bonuse', '2024-05-05 10:41:47'),
(333, '47797', 30000, 'Pruches Bonuse', '2024-05-05 10:45:00'),
(334, '46118', 60000, 'Pruches Bonuse', '2024-05-05 10:49:13'),
(335, '36310', 125000, 'Pruches Bonuse', '2024-05-05 11:24:17'),
(336, '36310', 125000, 'Pruches Bonuse', '2024-05-05 11:38:18'),
(337, '36310', 125000, 'Pruches Bonuse', '2024-05-05 11:40:27'),
(338, '36310', 125000, 'Pruches Bonuse', '2024-05-05 12:12:16'),
(339, '36310', 125000, 'Pruches Bonuse', '2024-05-05 12:19:28'),
(340, '36310', 125000, 'Pruches Bonuse', '2024-05-05 12:21:42'),
(341, '14783', 15000, 'Pruches Bonuse', '2024-05-05 16:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int NOT NULL,
  `uid` int NOT NULL,
  `invoice` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `uid`, `invoice`, `date`) VALUES
(108, 390, 'pdfs/Invoice-1605060553.pdf', '2024-05-05 02:09:13'),
(109, 391, 'pdfs/Invoice-1605061040.pdf', '2024-05-05 02:17:20'),
(110, 392, 'pdfs/Invoice-1605067911.pdf', '2024-05-05 04:11:51'),
(111, 393, 'pdfs/Invoice-1605068178.pdf', '2024-05-05 04:16:18'),
(112, 394, 'pdfs/Invoice-1605068301.pdf', '2024-05-05 04:18:21'),
(113, 394, 'pdfs/Invoice-1605068480.pdf', '2024-05-05 04:21:20'),
(114, 396, 'pdfs/Invoice-1605235959.pdf', '2024-05-05 02:52:39'),
(115, 397, 'pdfs/Invoice-1605236075.pdf', '2024-05-05 02:54:35'),
(116, 393, 'pdfs/Invoice-1605287969.pdf', '2024-05-05 17:19:29'),
(117, 398, 'pdfs/Invoice-1605288405.pdf', '2024-05-05 17:26:45'),
(118, 393, 'pdfs/Invoice-1605288605.pdf', '2024-05-05 17:30:05'),
(119, 401, 'pdfs/Invoice-1605340417.pdf', '2024-05-05 07:53:37'),
(120, 400, 'pdfs/Invoice-1605340503.pdf', '2024-05-05 07:55:03'),
(121, 399, 'pdfs/Invoice-1605340986.pdf', '2024-05-05 08:03:06'),
(122, 402, 'pdfs/Invoice-1605356707.pdf', '2024-05-05 12:25:07'),
(123, 403, 'pdfs/Invoice-1605356794.pdf', '2024-05-05 12:26:34'),
(124, 404, 'pdfs/Invoice-1605497226.pdf', '2024-05-05 03:27:06'),
(125, 405, 'pdfs/Invoice-1605497308.pdf', '2024-05-05 03:28:28'),
(126, 407, 'pdfs/Invoice-1605519628.pdf', '2024-05-05 09:40:28'),
(127, 408, 'pdfs/Invoice-1605519734.pdf', '2024-05-05 09:42:14'),
(128, 406, 'pdfs/Invoice-1605519840.pdf', '2024-05-05 09:44:00'),
(129, 406, 'pdfs/Invoice-1605530163.pdf', '2024-05-05 12:36:03'),
(130, 408, 'pdfs/Invoice-1605539817.pdf', '2024-05-05 15:16:57'),
(131, 407, 'pdfs/Invoice-1605539951.pdf', '2024-05-05 15:19:11'),
(132, 389, 'pdfs/Invoice-1605541149.pdf', '2024-05-05 15:39:09'),
(133, 409, 'pdfs/Invoice-1605595934.pdf', '2024-05-05 06:52:14'),
(134, 410, 'pdfs/Invoice-1605596159.pdf', '2024-05-05 06:55:59'),
(135, 407, 'pdfs/Invoice-1605601289.pdf', '2024-05-05 08:21:29'),
(136, 411, 'pdfs/Invoice-1605769911.pdf', '2024-05-05 07:11:51'),
(137, 412, 'pdfs/Invoice-1605770004.pdf', '2024-05-05 07:13:24'),
(138, 411, 'pdfs/Invoice-1605785769.pdf', '2024-05-05 11:36:09'),
(139, 413, 'pdfs/Invoice-1605804834.pdf', '2024-05-05 16:53:54'),
(140, 414, 'pdfs/Invoice-1605804941.pdf', '2024-05-05 16:55:41'),
(141, 412, 'pdfs/Invoice-1605890621.pdf', '2024-05-05 16:43:41'),
(142, 411, 'pdfs/Invoice-1605890714.pdf', '2024-05-05 16:45:14'),
(143, 412, 'pdfs/Invoice-1605890889.pdf', '2024-05-05 16:48:09'),
(144, 412, 'pdfs/Invoice-1605954916.pdf', '2024-05-05 10:35:16'),
(145, 411, 'pdfs/Invoice-1605955002.pdf', '2024-05-05 10:36:42'),
(146, 412, 'pdfs/Invoice-1605955163.pdf', '2024-05-05 10:39:23'),
(147, 411, 'pdfs/Invoice-1605955308.pdf', '2024-05-05 10:41:48'),
(148, 414, 'pdfs/Invoice-1605955501.pdf', '2024-05-05 10:45:01'),
(149, 408, 'pdfs/Invoice-1605955755.pdf', '2024-05-05 10:49:15'),
(150, 415, 'pdfs/Invoice-1605957861.pdf', '2024-05-05 11:24:21'),
(151, 415, 'pdfs/Invoice-1605958700.pdf', '2024-05-05 11:38:20'),
(152, 415, 'pdfs/Invoice-1605958829.pdf', '2024-05-05 11:40:29'),
(153, 415, 'pdfs/Invoice-1605960738.pdf', '2024-05-05 12:12:18'),
(154, 415, 'pdfs/Invoice-1605961170.pdf', '2024-05-05 12:19:30'),
(155, 415, 'pdfs/Invoice-1605961304.pdf', '2024-05-05 12:21:44'),
(156, 412, 'pdfs/Invoice-1606323565.pdf', '2024-05-05 16:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kyc`
--

CREATE TABLE `tbl_kyc` (
  `id` int NOT NULL,
  `UsCode` varchar(240) NOT NULL,
  `aadhar` varchar(240) NOT NULL,
  `pan` varchar(240) NOT NULL,
  `penNumber` varchar(240) NOT NULL,
  `bank` varchar(240) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_kyc`
--

INSERT INTO `tbl_kyc` (`id`, `UsCode`, `aadhar`, `pan`, `penNumber`, `bank`, `status`) VALUES
(25, '39744', '../uploads/0b647.png', '../uploads/0b647e.png', '3', '../uploads/0b647e2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lavel`
--

CREATE TABLE `tbl_lavel` (
  `id` int NOT NULL,
  `customId` varchar(200) NOT NULL,
  `lavel_one` int NOT NULL DEFAULT '0',
  `lavel_two` int NOT NULL DEFAULT '0',
  `lavel_three` int NOT NULL DEFAULT '0',
  `date_one` date DEFAULT NULL,
  `date_two` date DEFAULT NULL,
  `date_three` date DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `point_one` int NOT NULL DEFAULT '0',
  `point_two` int NOT NULL DEFAULT '0',
  `point_three` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lavel`
--

INSERT INTO `tbl_lavel` (`id`, `customId`, `lavel_one`, `lavel_two`, `lavel_three`, `date_one`, `date_two`, `date_three`, `status`, `point_one`, `point_two`, `point_three`) VALUES
(57, '39744', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(59, '27313', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(60, '88897', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(61, '12465', 1, 1, 1, '2024-05-05', '2024-05-05', '2024-05-05', 3, 49, 49, 49),
(62, '56343', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(63, '46118', 1, 0, 0, '2024-05-05', NULL, NULL, 1, 30, 0, 0),
(64, '80611', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(65, '53189', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(66, '35308', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(67, '14783', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(68, '24861', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(69, '47797', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0),
(70, '36310', 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int NOT NULL,
  `logo` varchar(240) NOT NULL,
  `front` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `logo`, `front`) VALUES
(1, '../uploads/9807f46b6c.png', '../uploads/cf4265a666.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int NOT NULL,
  `userID` int NOT NULL,
  `pid` int NOT NULL,
  `cartid` int NOT NULL,
  `quantity` varchar(240) NOT NULL,
  `size` varchar(240) NOT NULL,
  `instruction` text NOT NULL,
  `firstName` varchar(240) NOT NULL,
  `LastName` varchar(240) NOT NULL,
  `company` varchar(240) NOT NULL,
  `address` varchar(240) NOT NULL,
  `apertment` varchar(240) NOT NULL,
  `city` varchar(240) NOT NULL,
  `country` varchar(240) NOT NULL,
  `state` varchar(240) NOT NULL,
  `postal` varchar(240) NOT NULL,
  `payType` varchar(240) DEFAULT NULL,
  `price` int NOT NULL DEFAULT '0',
  `total` varchar(240) NOT NULL,
  `proof` varchar(240) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `year` int NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `userID`, `pid`, `cartid`, `quantity`, `size`, `instruction`, `firstName`, `LastName`, `company`, `address`, `apertment`, `city`, `country`, `state`, `postal`, `payType`, `price`, `total`, `proof`, `date`, `year`, `status`) VALUES
(389, 403, 52, 392, '1', '', '', 'vivek', 'nage', 'youth', 'aurangabad', 'ghhj', 'aurangabad', 'india', 'maharashtra', '431001', '1', 22222, '1000', 'uploads/747c440b45.', '2024-05-05 12:26:32', 2024, 0),
(390, 404, 52, 393, '1', '', '', 'vivek', 'nage', 'youth', 'aurangabad', 'ghhj', 'aurangabad', 'india', 'maharashtra', '431001', '1', 22222, '25777.52', 'uploads/c4dee88449.', '2024-05-05 03:27:04', 2024, 0),
(391, 405, 52, 394, '1', '', '', 'vivek', 'nage', 'youth', 'aurangabad', 'ghhj', 'aurangabad', 'india', 'maharashtra', '431001', '1', 22222, '25777.52', 'uploads/1a6e14f75b.', '2024-05-05 03:28:27', 2024, 0),
(392, 407, 51, 395, '40', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '25752', 'uploads/86fddac97e.', '2024-05-05 09:40:26', 2024, 0),
(393, 408, 51, 396, '50', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '32190', 'uploads/efda26fc76.', '2024-05-05 09:42:12', 2024, 0),
(394, 406, 51, 397, '1', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '643.8', 'uploads/0761048277.', '2024-05-05 09:43:58', 2024, 0),
(395, 406, 52, 398, '1', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'india', 'maharashtra', '1', '1', 22222, '25777.52', 'uploads/f52517b92c.', '2024-05-05 12:36:00', 2024, 0),
(396, 408, 51, 399, '40', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '25752', 'uploads/e195f7e666.', '2024-05-05 15:16:55', 2024, 0),
(397, 407, 51, 400, '40', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '25752', 'uploads/02423c344c.', '2024-05-05 15:19:09', 2024, 0),
(398, 389, 51, 376, '1', '', '', 'f', 'g', 'b', 'h', 'j', 'j', 'india', 'maharashtra', '1', '1', 555, '643.8', 'uploads/a4be7097d1.', '2024-05-05 15:39:07', 2024, 0),
(399, 389, 48, 401, '1', '', '', 'f', 'g', 'b', 'h', 'j', 'j', 'india', 'maharashtra', '1', '1', 1300, '1508', 'uploads/a4be7097d1.', '2024-05-05 15:39:07', 2024, 0),
(400, 389, 48, 402, '1', '', '', 'f', 'g', 'b', 'h', 'j', 'j', 'india', 'maharashtra', '1', '1', 1300, '1508', 'uploads/a4be7097d1.', '2024-05-05 15:39:07', 2024, 0),
(401, 409, 51, 403, '10', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Agd', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '6438', 'uploads/2b5b2a35f6.', '2024-05-05 06:52:12', 2024, 0),
(402, 410, 51, 404, '20', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '12876', 'uploads/3b2db24948.', '2024-05-05 06:55:57', 2024, 0),
(403, 407, 51, 405, '1', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '643.8', 'uploads/358573a717.', '2024-05-05 08:21:27', 2024, 0),
(404, 411, 51, 406, '1', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '643.8', 'uploads/d0c7083d49.', '2024-05-05 07:11:48', 2024, 0),
(405, 412, 51, 407, '20', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'AGs', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '12876', 'uploads/f123a00ad3.', '2024-05-05 07:13:22', 2024, 0),
(406, 411, 51, 408, '5', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'AGS', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '3219', 'uploads/30849c6141.', '2024-05-05 11:36:07', 2024, 0),
(407, 413, 49, 409, '25', '', '', 'Azwok', 'Digital', 'Ags', 'Bhopal', 'Ags', 'Bpl', 'india', 'madhya pradesh', '462001', '1', 2500, '73125', 'uploads/e539f8df96.', '2024-05-05 16:53:52', 2024, 0),
(408, 414, 49, 410, '50', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 2500, '146250', 'uploads/22b394f788.', '2024-05-05 16:55:39', 2024, 0),
(409, 412, 51, 411, '40', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '25752', 'uploads/af34387a8d.', '2024-05-05 16:43:39', 2024, 0),
(410, 411, 51, 412, '41', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '26395.8', 'uploads/09cfdd23c5.', '2024-05-05 16:45:12', 2024, 0),
(411, 412, 51, 413, '2', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '1287.6', 'uploads/6f42531dc8.', '2024-05-05 16:48:07', 2024, 0),
(412, 412, 51, 414, '1', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '643.8', 'uploads/150b10e305.', '2024-05-05 10:35:14', 2024, 0),
(413, 411, 51, 415, '2', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '1287.6', 'uploads/e7d4e020f9.', '2024-05-05 10:36:40', 2024, 0),
(414, 412, 51, 416, '2', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '1287.6', 'uploads/a0384b5565.', '2024-05-05 10:39:21', 2024, 0),
(415, 411, 51, 417, '4', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '2575.2', 'uploads/b07f0de687.', '2024-05-05 10:41:47', 2024, 0),
(416, 414, 51, 418, '2', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '1287.6', 'uploads/1f658c5c22.', '2024-05-05 10:45:00', 2024, 0),
(417, 408, 51, 419, '4', '', '', 'Ganesh', 'Ram', 'Gaa', 'Ho no 19 purav Nishat pura', 'Ags', 'Bhopal', 'india', 'madhya pradesh', '462038', '1', 555, '2575.2', 'uploads/537d51c524.', '2024-05-05 10:49:13', 2024, 0),
(418, 415, 52, 420, '1', '', '', 'vivek', 'nage', 'youth', 'aurangabad', 'ghhj', 'aurangabad', 'india', 'maharashtra', '431001', '1', 22222, '25777.52', 'uploads/ba2c86ee0f.', '2024-05-05 11:24:17', 2024, 0),
(419, 415, 52, 421, '1', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'india', 'maharashtra', '1', '1', 22222, '25777.52', 'uploads/c1f6153514.', '2024-05-05 11:38:18', 2024, 0),
(420, 415, 52, 422, '1', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'india', 'maharashtra', '1', '1', 22222, '25777.52', 'uploads/a42335944f.', '2024-05-05 11:40:27', 2024, 0),
(421, 415, 52, 423, '1', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'india', 'maharashtra', '1', '1', 22222, '25777.52', 'uploads/21d29fbe42.', '2024-05-05 12:12:16', 2024, 0),
(422, 415, 52, 424, '1', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'india', 'maharashtra', '1', '1', 22222, '25777.52', 'uploads/63caebd728.', '2024-05-05 12:19:28', 2024, 0),
(423, 415, 52, 425, '1', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'india', 'maharashtra', '1', '1', 22222, '25777.52', 'uploads/f8a3f10bda.', '2024-05-05 12:21:42', 2024, 0),
(424, 412, 51, 426, '1', '', '', 'Ghh', 'Fggg', 'Ffgg', 'Hhhu', 'Ghh', 'Bhopal', 'india', 'madhya pradesh', '453876', '1', 555, '643.8', 'uploads/1feaed8aaa.', '2024-05-05 16:59:24', 2024, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int NOT NULL,
  `title` varchar(240) NOT NULL,
  `img` varchar(240) NOT NULL,
  `description` text NOT NULL,
  `title2` varchar(240) NOT NULL,
  `img2` varchar(240) NOT NULL,
  `description2` text NOT NULL,
  `title3` varchar(240) NOT NULL,
  `img3` varchar(240) NOT NULL,
  `description3` text NOT NULL,
  `type` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `title`, `img`, `description`, `title2`, `img2`, `description2`, `title3`, `img3`, `description3`, `type`) VALUES
(1, 'Our Company', '../uploads/555d1d.jpg', 'We are one of the leading 21st century business module (Direct selling company) in India, We have high standards and our goal is to provide you with the best quality products, we possibly can all products meet quality standards. Creating wealth through profit and growth.', 'Our Mission', '../uploads/bce0bdb.png', ' Azwok will always works with legal and ethics. Transparent rules and whatever business partner is with us will always take care of them. It will be our mission to build training program leadership with the right plan with quality product.\r\n\r\nEvery direct seller and consumer who is associated with us will also take care of our main objective.The main mission of our company is to bring the dreams of the person who has brought his dreams to the right place.Azwok will always work on this principle', 'Our Goal', '../uploads/bce0bdbbcb.jpg', 'our goal is to provide you with the best quality products, we possibly can:\r\n\r\nAll products meet quality standards.\r\n\r\nResponsible farming & sustainability.\r\n\r\nCreating Wealth through profit & growth.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_percent`
--

CREATE TABLE `tbl_percent` (
  `id` int NOT NULL,
  `customId` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `amount` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `type` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `pstatus` int NOT NULL DEFAULT '0',
  `wStatus` varchar(240) NOT NULL DEFAULT '0',
  `date` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_percent`
--

INSERT INTO `tbl_percent` (`id`, `customId`, `amount`, `type`, `pstatus`, `wStatus`, `date`) VALUES
(522, '12465', '2250', '7.5% bonus', 0, '0', '2024-05-05'),
(523, '12465', '1750', 'special weak', 0, '0', '2024-05-05'),
(524, '12465', '2250', '7.5% bonus', 0, '0', '2024-05-05'),
(525, '12465', '2250', '7.5% bonus', 0, '0', '2024-05-05'),
(526, '12465', '9000', '7.5% bonus', 0, '0', '2024-05-05'),
(534, '12465', '2250', '7.5% bonus', 0, '0', '2024-05-05'),
(535, '12465', '16500', '7.5% bonus', 0, '0', '2024-05-05'),
(536, '12465', '2250', '7.5% bonus', 0, '0', '2024-05-05'),
(537, '27313', '0', '7.5% bonus', 0, '0', '2024-05-05'),
(538, '', '0', '7.5% bonus', 0, '0', '2024-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `gimg1` varchar(240) NOT NULL,
  `gimg2` varchar(240) NOT NULL,
  `gimg3` varchar(240) NOT NULL,
  `gimg4` varchar(240) NOT NULL,
  `catId` varchar(240) NOT NULL,
  `price` varchar(240) NOT NULL,
  `disPrice` varchar(240) NOT NULL DEFAULT '0',
  `quantity` varchar(240) NOT NULL,
  `size1` varchar(240) NOT NULL,
  `size2` varchar(240) NOT NULL,
  `size3` varchar(240) NOT NULL,
  `size4` varchar(240) NOT NULL,
  `size5` varchar(240) NOT NULL,
  `size6` varchar(240) NOT NULL,
  `homeRow` int NOT NULL DEFAULT '0',
  `bv` varchar(240) NOT NULL DEFAULT '0',
  `gst` varchar(240) DEFAULT NULL,
  `cgst` varchar(240) DEFAULT NULL,
  `hsn` varchar(240) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `title`, `description`, `gimg1`, `gimg2`, `gimg3`, `gimg4`, `catId`, `price`, `disPrice`, `quantity`, `size1`, `size2`, `size3`, `size4`, `size5`, `size6`, `homeRow`, `bv`, `gst`, `cgst`, `hsn`, `status`) VALUES
(45, 'product1', 'a', '../uploads/1f234c9964.png', '0', '0', '0', 'health care', '0', '0', '1', '0', '0', '0', '0', '0', '0', 0, '1', '1', '1', '', 1),
(46, 'product2', '2', '../uploads/1b6aa3841e.png', '0', '0', '../uploads/3841b80622.png', 'health care', '200', '200', '2', '0', '0', '0', '0', '0', '0', 0, '2', '2', '2', '', 1),
(47, 'Azwok Face and Body Scrub', 'AZWOK SCRUB this revitalising face &amp; body scrub gently exfoliates dead skin cells.it deeply moisturise your skin with fine granules of minera -rich and nourishing blend of Ayurvedic oils, revealing an unparalleled silky &amp; velvety feel. The invigorating aromas energies the body and mind, reviving all your senses...', '../uploads/2472ba510b.jpeg', '0', '0', '0', 'personal care', '1550', '1550', '655', '0', '0', '0', '0', '0', '0', 1, '2365', '9', '9', '', 1),
(48, 'Green tablet', 'Wheatgrass rich in chlorophyll a complete food,Immune &amp; Energy booster &amp; excellent blood tonic.Barley grass contains fiber and oil that may help to lower cholesterol. Alfalfa besides being rich in nutrition, it is also known to help in regulating the bowel movements and improving the digestion process which in turn helps in the better assimilation of the food consumed. Spirulina contains beta-carotene, as well as chlorophyll and the essential fatty acid GLA. Phycocyanin, its phytonutrient, has been shown in animal studies to stimulate the production.\r\n\r\nBenefits of Green tablet:\r\n\r\nâ€¢ An excellent combination for daily nutritional requirement. Provides essential micronutrients.\r\nâ€¢ May help in increasing the energy levels.\r\nâ€¢ May help to boost immunity which makes the body stronger to fight against infections.\r\nâ€¢ Supports in detoxification.', '../uploads/cf66dfb94b.png', '0', '0', '0', 'health care', '1600', '1300', '125', '0', '0', '0', '0', '0', '0', 1, '523', '8', '8', '', 1),
(49, 'Diabo Tablet', '', '../uploads/548f9a1a49.png', '0', '0', '0', 'health care', '2500', '2500', '120', '0', '0', '0', '0', '0', '0', 1, '630', '7', '10', '', 1),
(50, 'Azwok Blood Purifier', 'AZWOK BLOOM PURIFIER inner health &amp; outer glow of skin control skin infection &amp; allergies', '../uploads/34c466310e.png', '0', '0', '0', 'health care', '532', '532', '120', '0', '0', '0', '0', '0', '0', 1, '252', '12', '3', '', 1),
(51, 'kick', 'df', '../uploads/bf61bcbceb.png', '0', '0', '0', 'health care', '555', '555', '530', '0', '0', '0', '0', '0', '0', 0, '15000', '8', '8', '15544545445', 1),
(52, '125000', 'as', '../uploads/b8f453b7df.png', '0', '0', '0', 'health care', '22222', '22222', '12', '0', '0', '0', '0', '0', '0', 0, '125000', '8', '8', '888888888', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int NOT NULL,
  `images` varchar(240) NOT NULL,
  `link` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `images`, `link`) VALUES
(12, '../uploads/de90a53700.jpg', '#'),
(13, '../uploads/6866cceab8.jpg', '#'),
(14, '../uploads/72f9b81a43.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int NOT NULL,
  `link` varchar(240) DEFAULT NULL,
  `link2` varchar(240) DEFAULT NULL,
  `link3` varchar(240) DEFAULT NULL,
  `link4` varchar(240) DEFAULT NULL,
  `link5` varchar(240) DEFAULT NULL,
  `link6` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `link`, `link2`, `link3`, `link4`, `link5`, `link6`) VALUES
(1, 'https://www.facebook.com/pg/azwoknetworkcompany', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int NOT NULL,
  `stateName` varchar(240) NOT NULL,
  `stateSlug` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `stateName`, `stateSlug`) VALUES
(4, 'Maharashtra', 'maharashtra'),
(5, 'Madhya Pradesh', 'madhya pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `uid` int NOT NULL,
  `customId` varchar(240) DEFAULT NULL,
  `name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `mobile` varchar(240) DEFAULT NULL,
  `address` varchar(240) DEFAULT NULL,
  `nominee` varchar(240) DEFAULT NULL,
  `relation` varchar(240) DEFAULT NULL,
  `password` varchar(240) NOT NULL,
  `pin` varchar(240) NOT NULL DEFAULT '0',
  `state` varchar(240) NOT NULL,
  `country` varchar(200) NOT NULL,
  `sponserId` varchar(240) NOT NULL DEFAULT '1',
  `placementId` varchar(240) NOT NULL DEFAULT '0',
  `side` varchar(240) NOT NULL DEFAULT '1',
  `rightSide` varchar(240) NOT NULL DEFAULT '0',
  `leftSide` varchar(240) NOT NULL DEFAULT '0',
  `leftCount` int NOT NULL DEFAULT '0',
  `rightCount` int NOT NULL DEFAULT '0',
  `blance` varchar(240) NOT NULL DEFAULT '0',
  `regDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(240) NOT NULL DEFAULT '0',
  `eligible` int NOT NULL DEFAULT '0',
  `birth` varchar(240) DEFAULT NULL,
  `selfPurches` varchar(240) DEFAULT NULL,
  `gender` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `customId`, `name`, `email`, `mobile`, `address`, `nominee`, `relation`, `password`, `pin`, `state`, `country`, `sponserId`, `placementId`, `side`, `rightSide`, `leftSide`, `leftCount`, `rightCount`, `blance`, `regDate`, `status`, `eligible`, `birth`, `selfPurches`, `gender`) VALUES
(389, '39744', 'Admin', 'sachvek@gmail.com', NULL, NULL, NULL, NULL, '202cb962ac59075b964b07152d234b70', '0', 'maharashtra', 'india', '0', '0', '1', '88897', '27313', 11, 1, '0', '2024-05-05 00:00:00', '1', 0, NULL, '16046', ''),
(404, '27313', 'vivek nage', 'vsn5886@gmail.com', NULL, NULL, NULL, NULL, '355f61645d2edc98463d3827b0451d0a', '431001', 'maharashtra', 'india', '39744', '39744', '1', '0', '12465', 10, 0, '0', '2024-05-05 08:55:26', '1', 0, NULL, '125000', ''),
(405, '88897', 'vivek nage', 'infinitytips97@gmail.com', NULL, NULL, NULL, NULL, '355f61645d2edc98463d3827b0451d0a', '431001', 'maharashtra', 'india', '39744', '39744', '2', '0', '0', 0, 0, '0', '2024-05-05 08:57:38', '1', 0, NULL, '125000', ''),
(406, '12465', 'Azwok Digital', 'azwokdirect@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462023', 'madhya pradesh', 'india', '39744', '27313', '1', '46118', '56343', 4, 5, '38500', '2024-05-05 18:37:11', '1', 0, NULL, '140000', ''),
(407, '56343', 'Herbal and beauty', 'gan.nayak.03@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462001', 'madhya pradesh', 'india', '12465', '12465', '1', '0', '35308', 3, 0, '0', '2024-05-05 11:35:03', '1', 0, NULL, '1215000', ''),
(408, '46118', 'Jitendra Patel', 'jitendra@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462001', 'madhya pradesh', 'india', '12465', '12465', '2', '53189', '80611', 1, 3, '0', '2024-05-05 11:35:56', '1', 0, NULL, '1410000', ''),
(409, '80611', 'RAM Kumar', 'ram@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462001', 'madhya pradesh', 'india', '46118', '46118', '1', '0', '0', 0, 0, '0', '2024-05-05 12:21:12', '1', 0, NULL, '150000', ''),
(410, '53189', 'Shyam patel', 'shyampatel@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462001', 'madhya pradesh', 'india', '46118', '46118', '2', '14783', '0', 0, 2, '0', '2024-05-05 12:24:05', '1', 0, NULL, '300000', ''),
(411, '35308', 'Kamlesh Singh', 'kamlesh@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462001', 'madhya pradesh', 'india', '12465', '56343', '1', '47797', '24861', 1, 1, '0', '2024-05-05 12:38:55', '1', 0, NULL, '795000', ''),
(412, '14783', 'Shubham Singh', 'shubham@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462001', 'madhya pradesh', 'india', '12465', '53189', '2', '36310', '0', 0, 1, '0', '2024-05-05 12:40:01', '1', 0, NULL, '990000', ''),
(413, '24861', 'Honey', 'honey@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462001', 'madhya pradesh', 'india', '35308', '35308', '1', '0', '0', 0, 0, '0', '2024-05-05 22:21:01', '1', 0, NULL, '15750', ''),
(414, '47797', 'Honey2', 'honey2@gmail.com', NULL, NULL, NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '462001', 'madhya pradesh', 'india', '35308', '35308', '2', '0', '0', 0, 0, '0', '2024-05-05 22:22:14', '1', 0, NULL, '61500', ''),
(415, '36310', 'Sachvek Technologies', 'minta@gmail.com', NULL, NULL, NULL, NULL, '202cb962ac59075b964b07152d234b70', '431001', 'maharashtra', 'india', '12465', '14783', '2', '0', '0', 0, 0, '0', '2024-05-05 16:52:38', '1', 0, NULL, '750000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_withdraw`
--

CREATE TABLE `tbl_withdraw` (
  `id` int NOT NULL,
  `uid` varchar(240) NOT NULL,
  `bank` varchar(240) NOT NULL,
  `account` varchar(240) NOT NULL,
  `amount` varchar(240) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_withdraw`
--

INSERT INTO `tbl_withdraw` (`id`, `uid`, `bank`, `account`, `amount`, `date`, `status`) VALUES
(7, '39744', '432', 'df', '100', '2024-05-05 04:14:01', 1),
(8, '39744', '432', 'df', '100', '2024-05-05 04:15:17', 1),
(9, '39744', '432', 'df', '100', '2024-05-05 04:16:05', 1),
(10, '39744', '432', 'df', '200', '2024-05-05 04:18:28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bv`
--
ALTER TABLE `tbl_bv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cupon`
--
ALTER TABLE `tbl_cupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_eligible`
--
ALTER TABLE `tbl_eligible`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_features`
--
ALTER TABLE `tbl_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_forwards`
--
ALTER TABLE `tbl_forwards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_income`
--
ALTER TABLE `tbl_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kyc`
--
ALTER TABLE `tbl_kyc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lavel`
--
ALTER TABLE `tbl_lavel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_percent`
--
ALTER TABLE `tbl_percent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_withdraw`
--
ALTER TABLE `tbl_withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_bv`
--
ALTER TABLE `tbl_bv`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1106;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cupon`
--
ALTER TABLE `tbl_cupon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_eligible`
--
ALTER TABLE `tbl_eligible`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_features`
--
ALTER TABLE `tbl_features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_forwards`
--
ALTER TABLE `tbl_forwards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `tbl_income`
--
ALTER TABLE `tbl_income`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `tbl_kyc`
--
ALTER TABLE `tbl_kyc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_lavel`
--
ALTER TABLE `tbl_lavel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_percent`
--
ALTER TABLE `tbl_percent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=539;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT for table `tbl_withdraw`
--
ALTER TABLE `tbl_withdraw`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
