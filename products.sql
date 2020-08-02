-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 01, 2020 lúc 01:01 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vothonglien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) auto_increment primary key,
  `name` varchar(225) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `oldPrice` float DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` ( `name`, `price`, `oldPrice`, `image`, `type`) VALUES
( 'Vỏ thông xay 1-2', 10000, 11000, 'x12.jpg', 1),
( 'Vỏ thông xay 2-3', 9000, 10000, 'x23.jpg', 1),
('Dớn bảng',25000, 30000, 'db.jpg', 5),
('Rêu khô',45000, 50000, 'rk.jpg', 5),
( 'Vỏ thông xay 3-4', 10000, 11000, 'x34.jpg', 1),
( 'Túi lót chậu', 4000, 5000, 'tlc.jpg', 2),
( '1 kg phân dê', 30000, 35000, 'pd.jpg', 4),
( 'Vỏ thông băm 1-2', 10000, 11000, 'b12.jpg', 1),
( 'Vỏ thông băm 2-3', 8500, 10000, 'b23.jpg', 1),
( 'Chậu gỗ 10x10', 90000, 100000, 'cg1010.jpg', 3),
( '1 kg phân trùn quế', 30000, 35000, 'ptq.jpg', 4),
( 'Vỏ thông băm 3-4', 10000, 11000, 'b34.jpg', 1),
( 'Xay hạt ngô', 9000, 10000, 'xhn.jpg', 1),
( 'Xay hạt đỗ', 9000, 10000, 'xhd.jpg', 1),
('Chậu đất nung 17cm', 120000, 150000, 'cdn17.jpg', 3),
('Túi đựng phân 1m', 2500, 4000, 'tpd.jpg', 2),
('Xơ dừa 1kg', 15000, 20000, 'xd.jpg', 5),
('Chậu giả gỗ', 135000, 140000, 'cgg.jpg', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
