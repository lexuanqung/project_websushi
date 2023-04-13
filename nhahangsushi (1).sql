-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 06:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhahangsushi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_caption` varchar(1000) NOT NULL,
  `about_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_caption`, `about_img`) VALUES
(1, 'Food comes to us from our raltives, whether they have wings or roots. This is how we consider food , it also has a culture. It has a history that passes from generation to generation.', '/img/about-sushi.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `status`) VALUES
(5, 44, '595', 0),
(6, 44, '5391', 0),
(7, 44, '5676', 0),
(8, 44, '934', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(7, '595', 39, 5),
(8, '595', 40, 4),
(9, '595', 41, 3),
(10, '5391', 39, 3),
(11, '5391', 45, 5),
(12, '5391', 46, 5),
(13, '5676', 39, 1),
(14, '934', 39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(5, 'Sashimi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` int(11) NOT NULL,
  `home_caption` varchar(1000) NOT NULL,
  `home_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_caption`, `home_img`) VALUES
(1, 'Thưởng thức bửa tối ngon miệng với những món ăn ngon nhất tại nhà hàng và cải thiện ngày của bạn.', '/img/popular-sushi-rolls.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(39, 'Sashimi cá hồi', '2', '15.99', 100, '1678691460_sashimi_ca_hoi.png', 'Sashimi Cá Hồi', 'Sashimi Cá Hồi', 1, 5),
(40, 'Sashimi Sò Đỏ', '3', '19.99', 100, '1678691503_30-removebg-preview.png', 'Sashimi Sò Đỏ', 'Sashimi Sò Đỏ', 1, 5),
(41, 'Sushi cá hồi phô mai', '4', '14.99', 100, '1678691539_59-removebg-preview.png', 'Sushi cá hồi phô mai', 'Sushi cá hồi phô mai', 1, 5),
(42, 'Sushi Tôm Tem', '5', '5.00', 100, '1678691590_61-removebg-preview.png', 'Sushi Tôm Tem', 'Sushi Tôm Tem', 1, 5),
(43, 'Sushi 79', '6', '2.99', 100, '1678691632_40-removebg-preview.png', 'Sushi 79', 'Sushi 79', 1, 5),
(44, 'Salad Da Cá Hồi', '7', '1.99', 100, '1678691673_da_ca_hoi-removebg-preview.png', 'Salad Da Cá Hồi', 'Salad Da Cá Hồi', 1, 5),
(45, 'Salad Cá Hồi & Bơ', '8', '7.99', 100, '1678691708_salad_ca_hoi_va_bo.png', 'Salad Cá Hồi & Bơ', 'Salad Cá Hồi & Bơ', 1, 5),
(46, 'Maki cá hồi cay', '9', '3.99', 100, '1678706248_maki_ca_hoi_cay.png', 'Maki cá hồi cay', 'Maki cá hồi cay', 1, 5),
(49, 'Sashimi cá trích ép trứng', '1', '10.99', 100, '1678707452_sashimi_ca_trich_ep_trung.png', 'Sashimi cá trích ép trứng', 'Sashimi cá trích ép trứng', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_password`, `user_fullname`, `user_gender`, `user_phone`, `user_address`) VALUES
(39, 'b@gmail.com', '7d781fe2e69e3710895405177cb87a23', 'Xuân Quang', 'Nam', 0, '35 Tân Thuận Tây, quận 7, HCM'),
(40, 'c@gmail.com', '7d781fe2e69e3710895405177cb87a23', 'Xuân Quang', '', 582128022, '35 Tân Thuận Tây, quận 7, HCM'),
(41, 'b1@gmail.com', '7d781fe2e69e3710895405177cb87a23', 'Xuân Quang', '', 582128022, '35 Tân Thuận Tây, quận 7, HCM'),
(42, 'q@gmail.com', '7d781fe2e69e3710895405177cb87a23', 'Xuân Quang', 'Nam', 582128022, '35 Tân Thuận Tây, quận 7, HCM'),
(43, 'quang@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'quang', 'Nam', 1212321, '1122321312'),
(44, 'quang1@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'quang', 'Nam', 1212321, '1122321312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
