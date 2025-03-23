-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 08:52 AM
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
-- Database: `shubhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_list`
--

CREATE TABLE `active_list` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `upgrade_userid` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `active_list`
--

INSERT INTO `active_list` (`id`, `userid`, `amount`, `upgrade_userid`, `date`) VALUES
(1, '999', '1000', '999', '2023-11-27 08:44:19am'),
(2, 'SN4706739', '10000', '999', '2023-11-27 08:45:02am'),
(3, 'SN8401684', '20000', '999', '2023-11-27 08:45:43am'),
(4, 'SN1876618', '10000', '999', '2023-11-27 10:21:48am');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `name`, `mobile`, `email`, `position`, `password`) VALUES
(1, 'admin', 'Malappa', '8861840378', 'info@srinidhi.world', 'CMD', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `earning_to_main`
--

CREATE TABLE `earning_to_main` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `trn_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `day_bal` varchar(255) NOT NULL DEFAULT '0',
  `current_bal` varchar(255) NOT NULL DEFAULT '0',
  `total_bal` varchar(255) NOT NULL DEFAULT '0',
  `referal_income` varchar(255) NOT NULL DEFAULT '0',
  `usdt` varchar(255) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL DEFAULT '0',
  `roi` varchar(255) NOT NULL DEFAULT '0',
  `ref_roi` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(110) NOT NULL DEFAULT 'on',
  `mct_token` float NOT NULL,
  `mct_staking` varchar(255) NOT NULL DEFAULT '0',
  `staking_days` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `bank_pass` varchar(255) NOT NULL,
  `aadhaar_no` varchar(255) NOT NULL,
  `aadtar_fornt` varchar(255) NOT NULL,
  `aadtar_back` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `pan_img` varchar(255) NOT NULL,
  `bank_status` varchar(255) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `email`, `day_bal`, `current_bal`, `total_bal`, `referal_income`, `usdt`, `image`, `roi`, `ref_roi`, `status`, `mct_token`, `mct_staking`, `staking_days`, `bank_name`, `account_number`, `ifsc_code`, `branch`, `bank_pass`, `aadhaar_no`, `aadtar_fornt`, `aadtar_back`, `pan_no`, `pan_img`, `bank_status`) VALUES
(1, '999', '500', '20000', '1105', '600', '0', '0', '5', '0', 'of', 0, '0', 0, 'idfc', '1234567890', '2323', 'yelahanka', 'ev-bike1.jpg', '', '', '', '', '', 'on'),
(4, 'SN1876618', '0', '0', '0', '0', '0', '0', '0', '0', 'on', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 'off'),
(5, 'SN6967967', '0', '0', '0', '0', '0', '0', '0', '0', 'on', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 'off'),
(6, 'SN9518507', '0', '0', '0', '0', '0', '0', '0', '0', 'on', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 'off'),
(7, 'RL3571085', '0', '0', '0', '0', '0', '0', '0', '0', 'on', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 'off'),
(8, 'RL6855580', '0', '0', '0', '0', '0', '0', '0', '0', 'on', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 'off'),
(9, 'SCF9567804', '0', '0', '0', '0', '0', '0', '0', '0', 'on', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `income_hisory`
--

CREATE TABLE `income_hisory` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `type_of_income` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income_received`
--

CREATE TABLE `income_received` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `opening_blance` decimal(12,2) NOT NULL,
  `closing_blance` decimal(12,2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `orider_id` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `jolo_orider` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `error` varchar(100) NOT NULL,
  `status_jolo` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `beneficiaryid` varchar(100) NOT NULL,
  `checked` varchar(100) NOT NULL DEFAULT '0',
  `operatortxnid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `income_received`
--

INSERT INTO `income_received` (`id`, `email`, `amount`, `opening_blance`, `closing_blance`, `status`, `orider_id`, `date`, `jolo_orider`, `mobile`, `error`, `status_jolo`, `account_number`, `ifsc_code`, `beneficiaryid`, `checked`, `operatortxnid`) VALUES
(1, '999', 605.00, 605.00, 0.00, 'Sended', 'TRN1735400', '0000-00-00 00:00:00', '', '', '0', 'yw4t2425t', 'wrgsraerf', 'yhwrtw4', 'aefw', '0', ''),
(2, '999', 20000.00, 20000.00, 0.00, 'Sended', 'TRN1804518', '0000-00-00 00:00:00', '', '', '0', '', '', '', '_', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `international_transfer`
--

CREATE TABLE `international_transfer` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `receiver_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matching_income_daily`
--

CREATE TABLE `matching_income_daily` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `total_right` varchar(100) NOT NULL,
  `total_left` varchar(100) NOT NULL,
  `matching_pv` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `withdraw_amount` varchar(110) DEFAULT '0',
  `withdraw_date` varchar(110) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matching_income_daily`
--

INSERT INTO `matching_income_daily` (`id`, `userid`, `total_right`, `total_left`, `matching_pv`, `amount`, `date`, `withdraw_amount`, `withdraw_date`) VALUES
(1, '999', '1000', '500', '500', '500', '2023-11-27', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `num_counts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `userid`, `amount`, `date`, `num_counts`) VALUES
(1, '999', '1000', '2023-11-27 08:44:19am', 1),
(2, 'SN4706739', '10000', '2023-11-27 08:45:02am', 1),
(3, 'SN8401684', '20000', '2023-11-27 08:45:43am', 1),
(4, 'SN1876618', '10000', '2023-11-27 10:21:48am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `referral_income`
--

CREATE TABLE `referral_income` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `sponser_userid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `referral_income`
--

INSERT INTO `referral_income` (`id`, `userid`, `sponser_userid`, `amount`, `date`) VALUES
(1, '', '999', '20', '2023-11-27 08:44:19am'),
(2, '999', 'SN4706739', '200', '2023-11-27 08:45:02am'),
(3, '999', 'SN8401684', '400', '2023-11-27 08:45:43am'),
(4, 'SN8401684', 'SN1876618', '200', '2023-11-27 10:21:48am');

-- --------------------------------------------------------

--
-- Table structure for table `roi`
--

CREATE TABLE `roi` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roi`
--

INSERT INTO `roi` (`id`, `userid`, `amount`, `date`) VALUES
(1, '999', '5', '27-11-2023 14:17:03'),
(2, 'SN4706739', '50', '27-11-2023 14:17:03'),
(3, 'SN8401684', '100', '27-11-2023 14:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `sell_market`
--

CREATE TABLE `sell_market` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `mct_address` varchar(255) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `mct` varchar(255) NOT NULL,
  `sell_date` varchar(255) NOT NULL,
  `receiver_id` varchar(255) NOT NULL,
  `rceiver_mct_address` varchar(255) NOT NULL,
  `trn_status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `send_income_list`
--

CREATE TABLE `send_income_list` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `today_income`
--

CREATE TABLE `today_income` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matching` varchar(11) NOT NULL,
  `rferral` varchar(255) NOT NULL DEFAULT '0',
  `ref_roi` varchar(255) NOT NULL DEFAULT '0',
  `roi` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `top_add`
--

CREATE TABLE `top_add` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_to_others_list`
--

CREATE TABLE `transfer_to_others_list` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `mct` varchar(255) NOT NULL,
  `receiver_userid` varchar(255) NOT NULL,
  `transfer_date` varchar(255) NOT NULL,
  `email_status` varchar(255) NOT NULL,
  `opp_status` varchar(255) NOT NULL,
  `sender_mct_address` varchar(255) NOT NULL,
  `receiver_mct_address` varchar(255) NOT NULL,
  `hash_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `userid` varchar(110) NOT NULL,
  `left` varchar(110) DEFAULT NULL,
  `right` varchar(110) DEFAULT NULL,
  `leftcount` varchar(100) DEFAULT '0',
  `rightcount` varchar(100) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `userid`, `left`, `right`, `leftcount`, `rightcount`) VALUES
(1, '999', 'SN4706739', 'SN8401684', '2', '3'),
(2, 'SN4706739', 'SN6967967', NULL, '1', '0'),
(3, 'SN8401684', NULL, 'SN1876618', '0', '2'),
(4, 'SN1876618', NULL, 'SN9518507', '0', '1'),
(5, 'SN6967967', NULL, NULL, '0', '0'),
(6, 'SN9518507', NULL, NULL, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `upgrade_list`
--

CREATE TABLE `upgrade_list` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `upgrade_id` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upgrade_list`
--

INSERT INTO `upgrade_list` (`id`, `userid`, `upgrade_id`, `amount`, `date`, `image`, `product_details`) VALUES
(1, '999', '999', '1000', '2023-11-27 08:44:19am', '', ''),
(2, 'SN4706739', '999', '10000', '2023-11-27 08:45:02am', '', ''),
(3, 'SN8401684', '999', '20000', '2023-11-27 08:45:43am', '', ''),
(4, 'SN1876618', '999', '10000', '2023-11-27 10:21:48am', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `referral_userid` varchar(100) NOT NULL,
  `under_userid` varchar(100) NOT NULL,
  `side` varchar(100) NOT NULL,
  `paid_status` enum('yes','no') NOT NULL DEFAULT 'no',
  `trn_password` varchar(100) NOT NULL DEFAULT '123456',
  `status` varchar(255) NOT NULL DEFAULT 'In Active',
  `is_paid` varchar(255) NOT NULL DEFAULT 'Pending',
  `date` varchar(100) NOT NULL,
  `left_count` varchar(255) NOT NULL DEFAULT '0',
  `right_count` varchar(255) NOT NULL DEFAULT '0',
  `award_left_count` varchar(255) NOT NULL DEFAULT '0',
  `award_right_count` varchar(255) NOT NULL DEFAULT '0',
  `capping` varchar(255) NOT NULL DEFAULT '0',
  `paid_date` datetime DEFAULT NULL,
  `time_count` varchar(100) DEFAULT '0',
  `image` varchar(100) DEFAULT NULL,
  `num_count` varchar(110) NOT NULL DEFAULT '0',
  `cont_two_one` varchar(100) DEFAULT '1',
  `upgrade_count` varchar(100) NOT NULL DEFAULT '0',
  `account_status` varchar(100) NOT NULL DEFAULT 'of',
  `gg_coin` int(11) NOT NULL DEFAULT 0,
  `product` varchar(255) NOT NULL DEFAULT '1',
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `aadhaar` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `login_status` enum('on','of') NOT NULL DEFAULT 'on',
  `activation_first` enum('pending','done') NOT NULL DEFAULT 'pending',
  `poool` varchar(255) NOT NULL DEFAULT 'no',
  `pool_referral` varchar(255) NOT NULL,
  `pack_amount` int(11) NOT NULL,
  `otp` varchar(110) NOT NULL,
  `daily_capping` varchar(255) NOT NULL DEFAULT '0',
  `mct_address` varchar(255) NOT NULL,
  `secort_code` varchar(255) NOT NULL,
  `blackchain_email` varchar(255) NOT NULL,
  `blockchain_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `email1`, `password`, `referral_userid`, `under_userid`, `side`, `paid_status`, `trn_password`, `status`, `is_paid`, `date`, `left_count`, `right_count`, `award_left_count`, `award_right_count`, `capping`, `paid_date`, `time_count`, `image`, `num_count`, `cont_two_one`, `upgrade_count`, `account_status`, `gg_coin`, `product`, `name`, `mobile`, `address`, `city`, `state`, `pincode`, `aadhaar`, `pan`, `login_status`, `activation_first`, `poool`, `pool_referral`, `pack_amount`, `otp`, `daily_capping`, `mct_address`, `secort_code`, `blackchain_email`, `blockchain_password`) VALUES
(1, '999', 'bachegowda27@gmail.com', '123', '', '', '', 'no', '111', 'Active', 'Approval', '', '0', '1000', '500', '1000', '2000', NULL, '0', 'ev-bike1.jpg', '0', '1', '0', 'of', 0, '1', 'wegqe', '56765', 'qwaesrdgf', 'bangaore', 'karnataka', '43567', '123dbbddb', '1234567', 'on', 'done', 'no', '', 0, '432984', '1000', '', '', '', ''),
(2, 'SN4706739', 'k@gmail.com', '123456', '999', '999', 'left', 'no', '123456', 'Active', 'Approval', '27-11-23', '0', '0', '0', '0', '5000', NULL, '0', NULL, '0', '1', '0', 'of', 0, '1', 'JAGADISH BM', '+919898989898', '', '', '', '', '', '', 'on', 'pending', 'no', '', 0, '', '10000', '', '', '', ''),
(7, 'RL3571085', 'bachegowda27@gmail.com', '123', '999', '', '', 'no', '123', 'In Active', 'Pending', '10-05-2024', '0', '0', '0', '0', '0', NULL, '0', NULL, '0', '1', '0', 'of', 0, '1', 'Bache Gowda ', '56765', '', '', '', '', '', '', 'on', 'pending', 'no', '', 0, '', '0', '', '', '', ''),
(8, 'RL6855580', 'bachegowda27@gmail.com', '123', '999', '', '', 'no', '123', 'In Active', 'Pending', '10-05-2024', '0', '0', '0', '0', '0', NULL, '0', NULL, '0', '1', '0', 'of', 0, '1', 'Bache Gowda ', '56765', '', '', '', '', '', '', 'on', 'pending', 'no', '', 0, '', '0', '', '', '', ''),
(9, 'SCF9567804', 'ADSV@SDFGH', '123', '999', '', '', 'no', '123', 'In Active', 'Pending', '10-05-2024', '0', '0', '0', '0', '0', NULL, '0', NULL, '0', '1', '0', 'of', 0, '1', 'index', '56765', '', '', '', '', '', '', 'on', 'pending', 'no', '', 0, '', '0', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` varchar(100) DEFAULT '0',
  `total_amount` varchar(100) DEFAULT '0',
  `total_earning` varchar(100) DEFAULT '0',
  `matching` varchar(100) DEFAULT '0',
  `referral` varchar(100) DEFAULT '0',
  `level` varchar(100) DEFAULT '0',
  `pay_button` enum('on','of') NOT NULL DEFAULT 'on',
  `withdraw_wallet` varchar(100) NOT NULL DEFAULT '0',
  `status` varchar(110) NOT NULL DEFAULT 'on'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `email`, `amount`, `total_amount`, `total_earning`, `matching`, `referral`, `level`, `pay_button`, `withdraw_wallet`, `status`) VALUES
(1, '999', '59000', '0', '0', '0', '0', '0', 'on', '0', 'on'),
(2, 'SN4706739', '0', '0', '0', '0', '0', '0', 'on', '0', 'on'),
(3, 'SN8401684', '0', '0', '0', '0', '0', '0', 'on', '0', 'on'),
(4, 'SN1876618', '0', '0', '0', '0', '0', '0', 'on', '0', 'on'),
(5, 'SN6967967', '0', '0', '0', '0', '0', '0', 'on', '0', 'on'),
(6, 'SN9518507', '0', '0', '0', '0', '0', '0', 'on', '0', 'on'),
(7, 'RL3571085', '0', '0', '0', '0', '0', '0', 'on', '0', 'on'),
(8, 'RL6855580', '0', '0', '0', '0', '0', '0', 'on', '0', 'on'),
(9, 'SCF9567804', '0', '0', '0', '0', '0', '0', 'on', '0', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_request`
--

CREATE TABLE `wallet_request` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `trn_number` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admin_userid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wallet_request`
--

INSERT INTO `wallet_request` (`id`, `email`, `payment_mode`, `amount`, `trn_number`, `image`, `date`, `status`, `admin_userid`) VALUES
(1, '999', '', '200000', '123456', 'IMG-20231127-WA0009.jpg', '27-11-23', 'Approved', ''),
(2, '999', '', '200000', '123456', 'Screenshot_20231127_114232.jpg', '27-11-23', 'Approved', ''),
(3, '999', 'Google pay', '2000', '123456789po76', 'ev-bike3.jpg', 'date', '', ''),
(4, '999', 'Phone pay', '11111', '123456789po76', 'ev-bike2.jpg', '2024-05-13', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transfer`
--

CREATE TABLE `wallet_transfer` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `sender_id` varchar(100) NOT NULL,
  `trn_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_list`
--
ALTER TABLE `active_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earning_to_main`
--
ALTER TABLE `earning_to_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_hisory`
--
ALTER TABLE `income_hisory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_received`
--
ALTER TABLE `income_received`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_transfer`
--
ALTER TABLE `international_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matching_income_daily`
--
ALTER TABLE `matching_income_daily`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_income`
--
ALTER TABLE `referral_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roi`
--
ALTER TABLE `roi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_market`
--
ALTER TABLE `sell_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_income_list`
--
ALTER TABLE `send_income_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `today_income`
--
ALTER TABLE `today_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_add`
--
ALTER TABLE `top_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_to_others_list`
--
ALTER TABLE `transfer_to_others_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upgrade_list`
--
ALTER TABLE `upgrade_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_request`
--
ALTER TABLE `wallet_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_transfer`
--
ALTER TABLE `wallet_transfer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_list`
--
ALTER TABLE `active_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `earning_to_main`
--
ALTER TABLE `earning_to_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `income_hisory`
--
ALTER TABLE `income_hisory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income_received`
--
ALTER TABLE `income_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `international_transfer`
--
ALTER TABLE `international_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matching_income_daily`
--
ALTER TABLE `matching_income_daily`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `referral_income`
--
ALTER TABLE `referral_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roi`
--
ALTER TABLE `roi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sell_market`
--
ALTER TABLE `sell_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `send_income_list`
--
ALTER TABLE `send_income_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `today_income`
--
ALTER TABLE `today_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `top_add`
--
ALTER TABLE `top_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer_to_others_list`
--
ALTER TABLE `transfer_to_others_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upgrade_list`
--
ALTER TABLE `upgrade_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wallet_request`
--
ALTER TABLE `wallet_request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wallet_transfer`
--
ALTER TABLE `wallet_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
