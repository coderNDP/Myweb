-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2023 lúc 08:55 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name_brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name_brand`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Puma');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_productDT` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `size` int(11) NOT NULL DEFAULT 38,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_productDT`, `id_customer`, `size`, `quantity`) VALUES
(98, 1, 66, 0, 1),
(118, 1, 62, 0, 0),
(119, 2, 62, 0, 0),
(120, 3, 62, 0, 0),
(130, 1, 64, 0, 1),
(133, 1, 64, 0, 1),
(134, 2, 64, 0, 1),
(135, 3, 64, 0, 1),
(136, 4, 64, 0, 1),
(157, 50, 68, 0, 1),
(169, 13, 67, 38, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL COMMENT '0: Nam, 1: Nữ, 2: Trẻ con',
  `id_cha` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`, `id_cha`, `level`) VALUES
(1, 'Men', NULL, 0),
(2, 'Women', NULL, 0),
(3, 'Kids', NULL, 0),
(23, 'Newest ', 1, 1),
(24, 'Jordan', 1, 1),
(25, 'Running', 1, 1),
(26, 'Football', 1, 1),
(28, 'Newest', 2, 1),
(29, 'Jorndan', 2, 1),
(30, 'Running', 2, 1),
(31, 'Football', 2, 1),
(33, 'Newest', 3, 1),
(34, 'Jorndan', 3, 1),
(35, 'Running', 3, 1),
(36, 'Football', 3, 1),
(37, 'All Shoes', NULL, 2),
(38, 'Basketball', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `name_color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id_color`, `name_color`) VALUES
(1, 'Black'),
(2, 'White'),
(3, 'Pink'),
(4, 'Grey'),
(5, 'Red');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'coderNDP', 'ndp@gmail.com', '1234567', 1),
(59, 'NDD', 'nd@gmail.com', '123456789', 1),
(60, 'NDPPP', 'ndpp@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1),
(61, 'aaa', 'a@gmail.com', '22337788', 1),
(62, 'abc', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(63, 'coder', 'a@gmail.com', '123456', 0),
(64, 'NDP', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(65, 'toan12781324', 'toan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1),
(66, 'quocanh', 'quanhh3105@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(67, 'ad', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(68, 'phuonganhcua', 'phuonganhhtran@gmail.com', '5b7f567a009d1f3a68f49bbf0491dfb5', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `name_image` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0: hiện, 1: ẩn, 2: thumnail'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id_image`, `name_image`, `id_product`, `status`) VALUES
(53, 'nike1_1.jpg', 1, 1),
(54, 'nike1_2.jpg', 1, 1),
(55, 'nike1_3.jpg', 1, 1),
(56, 'nike1_4.jpg', 1, 1),
(57, 'nike2_1.jpg', 2, 1),
(58, 'nike2_2.jpg', 2, 1),
(59, 'nike2_3.jpg', 2, 1),
(60, 'nike2_4.jpg', 2, 1),
(61, 'nike3_1.jpg', 3, 1),
(62, 'nike3_2.jpg', 3, 1),
(63, 'nike3_3.jpg', 3, 1),
(64, 'nike3_4.jpg', 3, 1),
(65, 'nike4__1.jpg', 4, 1),
(66, 'nike4__2.jpg', 4, 1),
(67, 'nike4_3.jpg', 4, 1),
(68, 'nike4_4.jpg', 4, 1),
(69, 'nike5__1.jpg', 5, 1),
(70, 'nike5_2.jpg', 5, 1),
(71, 'nike5_3.jpg', 5, 1),
(72, 'nike5_4.jpg', 5, 1),
(73, 'nike6_1.jpg', 6, 1),
(74, 'nike6_2.jpg', 6, 1),
(75, 'nike6_3.jpg', 6, 1),
(76, 'nike6_4.jpg', 6, 1),
(77, 'adidas1_1.jpg', 7, 1),
(78, 'adidas1_2.jpg', 7, 1),
(79, 'adidas1_3.jpg', 7, 1),
(80, 'adidas1_4.jpg', 7, 1),
(81, 'adidas2_1.jpg', 8, 1),
(82, 'adidas2_2.jpg', 8, 1),
(83, 'adidas2_3.jpg', 8, 1),
(84, 'adidas2_4.jpg', 8, 1),
(85, 'adidas3_1.jpg', 9, 1),
(86, 'adidas3_2.jpg', 9, 1),
(87, 'adidas3_3.jpg', 9, 1),
(88, 'adidas3_4.jpg', 9, 1),
(89, 'adidas4_1.jpg', 10, 1),
(90, 'adidas4_2.jpg', 10, 1),
(91, 'adidas4_3.jpg', 10, 1),
(92, 'adidas4_4.jpg', 10, 1),
(93, 'adidas5_1.jpg', 11, 1),
(94, 'adidas5_2.jpg', 11, 1),
(95, 'adidas5_3.jpg', 11, 1),
(96, 'adidas5_4.jpg', 11, 1),
(97, 'adidas6__1.jpg', 12, 1),
(98, 'adidas6_2.jpg', 12, 1),
(99, 'adidas6_3.jpg', 12, 1),
(100, 'adidas6_4.jpg', 12, 1),
(101, 'puma1_1.jpg', 13, 1),
(102, 'puma2_1.jpg', 14, 1),
(103, 'puma3_1.jpg', 15, 1),
(104, 'puma4_1.jpg', 16, 1),
(105, 'puma5_1.jpg', 36, 1),
(107, 'puma1_2.jpg', 13, 1),
(108, 'puma1_3.jpg', 13, 1),
(109, 'puma1_4.jpg', 13, 1),
(110, 'puma2_2.jpg', 14, 1),
(111, 'puma2_3.jpg', 14, 1),
(112, 'puma2_4.jpg', 14, 1),
(113, 'puma3_2.jpg', 15, 1),
(114, 'puma3_3.jpg', 15, 1),
(115, 'puma3_4.jpg', 15, 1),
(116, 'puma4_2.jpg', 16, 1),
(117, 'puma4_3.jpg', 16, 1),
(118, 'puma4_4.jpg', 16, 1),
(119, 'puma5_2.jpg', 36, 1),
(120, 'puma5_3.jpg', 36, 1),
(121, 'puma5_4.jpg', 36, 1),
(125, 'nike7_1.jpg', 48, 0),
(126, 'nike7_2.jpg', 48, 0),
(127, 'nike7_3.jpg', 48, 0),
(128, 'nike7_4.jpg', 48, 0),
(129, 'nike8_1.jpg', 49, 0),
(130, 'nike8_2.jpg', 49, 0),
(131, 'nike8_3.jpg', 49, 0),
(133, 'nike8_4.jpg', 49, 0),
(134, 'nike9_1.jpg', 50, 0),
(135, 'nike9_2.jpg', 50, 0),
(136, 'nike9_3.jpg', 50, 0),
(137, 'nike9_4.jpg', 50, 0),
(138, 'adidas7_1.jpg', 51, 0),
(139, 'adidas7_2.jpg', 51, 0),
(140, 'adidas7_3.jpg', 51, 0),
(141, 'adidas7_4.jpg', 51, 0),
(142, 'adidas8_1.jpg', 52, 0),
(143, 'adidas8_2.jpg', 52, 0),
(144, 'adidas8_3.jpg', 52, 0),
(145, 'adidas8_4.jpg', 52, 0),
(146, 'adidas9_1.jpg', 53, 0),
(147, 'adidas9_2.jpg', 53, 0),
(148, 'adidas9_3.jpg', 53, 0),
(149, 'adidas9_4.jpg', 53, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `note` text DEFAULT NULL,
  `total` float NOT NULL,
  `id_payment` int(11) NOT NULL,
  `status_payment` tinyint(4) NOT NULL COMMENT '0: đã thanh toán , 1: chưa thanh toán',
  `updated_time` date DEFAULT current_timestamp(),
  `status` int(11) NOT NULL COMMENT '0: chưa duyệt, 1: đang đóng gói , 2: đang vận chuyển, 3: hoàn thành, 4: đã hủy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `id_customer`, `name`, `phone`, `address`, `note`, `total`, `id_payment`, `status_payment`, `updated_time`, `status`) VALUES
(34, 67, 'Phú Nguyễn', '0373786288', 'Viet Nam', '22333444', 325, 3, 0, '2023-07-28', 0),
(35, 67, 'Phú Nguyễn', '0373786288', 'Viet Nam', 'hjbkdsbk', 118, 3, 0, '2023-07-29', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_order`, `id_product`, `quantity`, `price`) VALUES
(74, 34, 48, 1, 59),
(75, 34, 50, 1, 64),
(76, 34, 5, 1, 90),
(77, 34, 3, 1, 112),
(78, 35, 48, 1, 59),
(79, 35, 48, 1, 59);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `name_payment` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1: ẩn , 0: hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`id_payment`, `name_payment`, `status`) VALUES
(1, 'Visa card', 0),
(2, 'COD', 0),
(3, 'Paypal', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `price` float NOT NULL,
  `sale_price` float NOT NULL DEFAULT 0,
  `Des` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `name`, `img`, `id_brand`, `id_category`, `price`, `sale_price`, `Des`) VALUES
(1, 'Nike Invicible ', 'nike_1.jpg', 1, 23, 1800, 0, 'Men\'s road running shoes'),
(2, 'Nike Vomero 16', 'nike_2.jpg', 1, 23, 158.5, 0, 'Men\'s road running shoes'),
(3, 'Nike Impact 4', 'nike_3.jpg', 1, 23, 112, 0, 'Basketball Shoes'),
(4, 'Nike Air Force 1\'07', 'nike_4.jpg', 1, 28, 124, 0, 'Women\'s Shoes'),
(5, 'Nike City Rep TR', 'nike_5.jpg', 1, 28, 90, 0, 'Women\'s Training Shoes'),
(6, 'Nike Spark', 'nike_6.jpg', 1, 28, 174, 0, 'Women\'s Shoes'),
(7, 'Daily 3.0 Shoes', 'adidas_1.jpg', 2, 23, 65, 0, 'Men\'s sportswear'),
(8, 'Ultraboost 1.0 Shoes', 'adidas_2.jpg', 2, 23, 190, 0, 'Men\'s sportswear'),
(9, 'Stan Smith Shoes', 'adidas_3.jpg', 2, 23, 100, 0, 'Men\'s Originals '),
(10, 'Cloudfoam Pure Shoes', 'adidas_4.jpg', 2, 28, 75, 0, 'Women\'s Essentials'),
(11, 'Nizza Platform Shoes', 'adidas_5.jpg', 2, 28, 75, 0, 'Originals'),
(12, 'Ultrabounce Running Shoes', 'adidas_6.jpg', 2, 28, 80, 0, 'Women\'s Running Shoes'),
(13, 'Suede Classic XXI Men\'s Sneaker', 'puma_1.jpg', 3, 23, 75, 0, 'Men\'s Shoes'),
(14, 'PUMAxLAMELO BALL MB.01', 'puma_2.jpg', 3, 23, 120, 0, 'Men\'s Basketball Shoes'),
(15, 'SpeedcatOG+Sparco Driving Shoes', 'puma_3.jpg', 3, 23, 100, 0, 'Men\'s Shoes'),
(16, 'Cali Dream Thrifted', 'puma_4.jpg', 3, 28, 95, 0, 'Women\'s Sneaker'),
(36, 'Mayze UT Mono', 'puma__5.jpg', 3, 28, 90, 0, 'Women\'s Sneakers'),
(48, 'Jordan 1 Low Alt', 'nike_7.jpg', 1, 34, 59, 0, 'Baby & Toddler Shoes'),
(49, 'Nike Air Zoom Pegasus 40', 'nike_8.jpg', 1, 35, 113, 0, 'Older Kids\' Road Running Shoes'),
(50, 'Nike Team Hustle D 11', 'nike_9.jpg', 1, 35, 64, 0, 'Younger Kids\' Shoes'),
(51, 'SUPERSTAR 360 X LEGO®', 'adidas_7.jpg', 2, 33, 65, 0, 'Kids Unisex • Originals'),
(52, 'X CRAZYFAST.3 TURF SHOES', 'adidas_8.jpg', 2, 36, 70, 0, 'Kids Unisex • Soccer'),
(53, 'FORTARUN 2.0 SHOES KIDS', 'adidas_9.jpg', 2, 35, 43, 0, 'Kids Unisex • Running');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_detail`
--

INSERT INTO `product_detail` (`id`, `id_product`, `id_size`, `id_color`, `Quantity`) VALUES
(19, 1, 1, 1, 20),
(20, 2, 2, 2, 20),
(21, 3, 3, 2, 20),
(22, 4, 4, 2, 20),
(23, 5, 5, 3, 20),
(24, 6, 6, 2, 20),
(25, 7, 7, 1, 20),
(26, 8, 8, 1, 20),
(27, 9, 1, 2, 20),
(28, 10, 2, 2, 20),
(29, 11, 3, 2, 20),
(30, 12, 4, 2, 20),
(31, 13, 5, 1, 20),
(32, 14, 6, 2, 20),
(33, 15, 7, 1, 20),
(34, 16, 8, 2, 20),
(35, 36, 1, 2, 20),
(39, 48, 3, 1, 20),
(40, 49, 1, 3, 20),
(41, 50, 2, 3, 20),
(42, 51, 4, 4, 20),
(43, 52, 5, 1, 20),
(44, 53, 7, 5, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `size`) VALUES
(1, 38),
(2, 39),
(3, 40),
(4, 41),
(5, 42),
(6, 43),
(7, 44),
(8, 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'NDP', 'nguyenphuduy2004@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(3, 'NDDD', 'nd@gmail.com', '123456'),
(4, 'coderNDP', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Admin', 'admin1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'aaa', 'a2@gmail.com', '$2y$12$1HdouA7B0dnEqN87ClKpx.xNe2TxlWVb4OmIwSSBtdgZFashMD00i');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `FK_customer` (`id_customer`),
  ADD KEY `FK_productID` (`id_productDT`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `FK_categories` (`id_cha`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_customer_id` (`id_customer`),
  ADD KEY `FK_product_id` (`id_product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `FK_imagePD` (`id_product`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDcustomer` (`id_customer`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product` (`id_product`),
  ADD KEY `FK_order` (`id_order`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `FK_Category` (`id_category`),
  ADD KEY `FK_brand` (`id_brand`);

--
-- Chỉ mục cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_productDT` (`id_product`),
  ADD KEY `FK_productColor` (`id_color`),
  ADD KEY `FK_productSize` (`id_size`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `FK_productID` FOREIGN KEY (`id_productDT`) REFERENCES `products` (`id_product`);

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_categories` FOREIGN KEY (`id_cha`) REFERENCES `categories` (`id_category`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_customer_id` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `FK_product_id` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_imagePD` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_IDcustomer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_Category` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_brand` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `FK_productColor` FOREIGN KEY (`id_color`) REFERENCES `color` (`id_color`),
  ADD CONSTRAINT `FK_productDT` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_productSize` FOREIGN KEY (`id_size`) REFERENCES `size` (`id_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
