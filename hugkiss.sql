-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 15, 2020 lúc 12:18 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hugkiss`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `pro_detail_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `member_id`, `pro_detail_id`, `amount`) VALUES
(28, 8, 7, 7),
(29, 8, 6, 1),
(32, 8, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` varchar(10) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
('clothes', 'Áo, Quần'),
('hat', 'Mũ'),
('shoes', 'Giày'),
('watch', 'Đồng hồ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(36) CHARACTER SET utf8 NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `hoten`, `diachi`, `taikhoan`, `matkhau`, `sdt`, `email`) VALUES
(6, 'Nguyễn Võ Trường Giang', '41 Lương Tấn Thịnh', 'hugne99', 'e10adc3949ba59abbe56e057f20f883e', '0326643746', 'alunlameiu@gmail.com'),
(7, 'Nguyễn Thị Huyền Trang', 'Gemek Tower 1', 'kissne05', 'e10adc3949ba59abbe56e057f20f883e', '0326643746', 'dinht1824@gmail.com'),
(8, 'Nguyễn Văn A', 'Gemek Tower 1', 'hug', 'c4ca4238a0b923820dcc509a6f75849b', '0377949906', 'bubini@gmail.com'),
(10, 'Nguyễn Văn B', 'Gemek Tower 1', 'kiss', 'c4ca4238a0b923820dcc509a6f75849b', '2546874121', 'tuyetlehan01@gmail.com'),
(11, 'Nguyễn Văn C', 'Gemek Tower 1', 'test', 'c4ca4238a0b923820dcc509a6f75849b', '2645874125', 'yhyhy@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(10) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `pro_active` int(11) NOT NULL,
  `pro_hot` int(11) NOT NULL,
  `pro_amount` int(11) NOT NULL,
  `pro_img` varchar(50) NOT NULL,
  `pro_sale` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `cat_id`, `pro_name`, `price`, `pro_active`, `pro_hot`, `pro_amount`, `pro_img`, `pro_sale`) VALUES
(1, 'clothes', 'Áo thun Hooded Navy Xám', 1500000, 1, 1, 10, 'product1.jpg', 0),
(2, 'clothes', 'Áo khoác Bomber Jacket hoạ tiết', 1700000, 1, 1, 10, 'product2.jpg', 0),
(3, 'clothes', 'Áo khoác nam Xanh Navy & Xám', 1200000, 1, 1, 10, 'product3.jpg', 0),
(4, 'clothes', 'Áo sơ mi nam kẻ sọc ca rô lớn', 1100000, 1, 1, 10, 'product4.jpg', 0),
(5, 'clothes', 'Áo thun đen kẻ sọc', 689000, 1, 1, 10, 'product5.jpg', 0),
(6, 'shoes', 'Giày Nike JORDAN 1 HIGH', 1400000, 1, 1, 20, 'nike1.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(5) NOT NULL,
  `color` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `size`, `color`, `amount`) VALUES
(1, 1, 'L', 'white', 5),
(2, 2, 'M', 'black', 7),
(3, 1, 'M', 'white', 5),
(4, 1, 'XL', 'black', 7),
(5, 1, 'S', 'red', 3),
(6, 1, 'S', 'black', 2),
(7, 1, 'L', 'red', 5),
(8, 1, 'L', 'pink', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pro_detail_img`
--

CREATE TABLE `pro_detail_img` (
  `id` int(11) NOT NULL,
  `pro_detail_id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_detail_id` (`pro_detail_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Chỉ mục cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `pro_detail_img`
--
ALTER TABLE `pro_detail_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_detail_id` (`pro_detail_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `pro_detail_img`
--
ALTER TABLE `pro_detail_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pro_detail_id`) REFERENCES `product_details` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`category_id`);

--
-- Các ràng buộc cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `pro_detail_img`
--
ALTER TABLE `pro_detail_img`
  ADD CONSTRAINT `pro_detail_img_ibfk_1` FOREIGN KEY (`pro_detail_id`) REFERENCES `product_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
