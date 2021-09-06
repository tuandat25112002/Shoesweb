-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 06, 2021 lúc 08:13 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopshoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `IDproduct` int(11) NOT NULL,
  `nameproduct` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gia` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`idcart`, `IDproduct`, `nameproduct`, `image`, `gia`, `soluong`, `size`) VALUES
(8, 108, 'AIR JORDAN 1 HI TROPHY ROOM CHICAGO', 'https://kingshoes.vn/data/upload/media/air-jordan-1-hi-trophy-room-chicago-da2728-100-king-shoes-sneaker-real-hcm-1624273272.jpeg', 2240, 1, 45),
(10, 162, 'AIR FORCE 1 ZITRON', 'https://kingshoes.vn/data/upload/media/nike-air-force-1-zitron-315115-160-king-shoes-sneaker-real-hcm-1628156526.jpeg', 290, 1, 38),
(11, 106, 'JORDAN 1 LOW BLACK TOE', 'https://kingshoes.vn/data/upload/media/air-jordan-1-retro-low-black-toe-553558-116-king-shoes-sneaker-real-tan-binh.jpg', 405, 3, 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `logocategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `logocategory`) VALUES
(1, 'NIKE', 'nike.png'),
(2, 'ADIDAS', 'logo-thuong-hieu-adidas-4.png'),
(3, 'PUMA', 'phan-biet-giay-puma-chinh-hang.jpg4_.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `IDproduct` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `nameproduct` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gia` float(11,0) NOT NULL,
  `sale` float(11,0) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`IDproduct`, `categoryID`, `code`, `nameproduct`, `image`, `gia`, `sale`, `image2`) VALUES
(0, 0, '', '', '', 0, NULL, NULL),
(1, 1, 'N1', 'AIR MAX 90 HOME & AWAY BLUE', 'https://kingshoes.vn/data/upload/media/nike-air-max-90-home-away-blue-cj0611-1021-king-shoes-sneaker-real-hcm-1624254820.jpeg', 200, 10, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-air-max-90-home-away-blue-cj0611-102-king-shoes-sneaker-real-hcm-12.jpeg'),
(16, 3, 'P2', 'PUMA RS-X3 SONIC', 'https://kingshoes.vn/data/upload/media/puma-rs-x3-sonic-373427-01-king-shoes-sneaker-real-hcm-1624435192.jpg', 280, 5, 'https://kingshoes.vn/data/upload/media/373427-016.jpg'),
(103, 1, 'N4', 'DUNK LOW ORANGE PEARL', 'https://kingshoes.vn/data/upload/media/dunk-low-orange-pearl-dd1503-102-king-shoes-sneaker-real-hcm-1624272761.jpeg', 414, 0, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-dunk-low-orange-pearl-dd1503-102-king-shoes-sneaker-real-hcm-6.jpeg'),
(104, 1, 'N5', 'AIR FORCE 1 ESSENTIAL RUST PINK', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-air-force-1-07-essential-cz0270-103-king-shoes-sneaker-real-hcm-1-1629196332.jpeg', 260, 6, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-air-force-1-07-essential-cz0270-103-king-shoes-sneaker-real-hcm-7.jpeg'),
(105, 1, 'N6', 'DUNK LOW COAST', 'https://kingshoes.vn/data/upload/media/nike-dunk-low-coast-dd1503-100-tai-king-shoes-sneaker-real-hcm-1624272905.jpeg', 450, 0, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-dunk-low-coast-dd1503-100-tai-king-shoes-sneaker-real-hcm-10.jpg'),
(106, 1, 'N7', 'JORDAN 1 LOW BLACK TOE', 'https://kingshoes.vn/data/upload/media/air-jordan-1-retro-low-black-toe-553558-116-king-shoes-sneaker-real-tan-binh.jpg', 450, 10, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-air-jordan-1-low-553558-116-king-shoes-sneaker-real-hcm-1.jpeg'),
(107, 1, 'N8', 'AIR MAX 270 JUST DO IT', 'https://kingshoes.vn/data/upload/media/nike-air-max-270-just-do-it-ah805-001-king-shoes-sneaker-real-hcm-1624260112.jpeg', 250, 20, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-air-max-270-just-do-it-ah8050-017-king-shoes-sneaker-real-hcm-71.jpeg'),
(108, 1, 'N9', 'AIR JORDAN 1 HI TROPHY ROOM CHICAGO', 'https://kingshoes.vn/data/upload/media/air-jordan-1-hi-trophy-room-chicago-da2728-100-king-shoes-sneaker-real-hcm-1624273272.jpeg', 2800, 20, 'https://kingshoes.vn/data/upload/media/da2728-1009.jpg'),
(111, 2, 'A1', 'SUPERSTAR', 'https://kingshoes.vn/data/upload/media/sneaker-c77124-super-star-adidas-kingshoes.vn-tphcm-tanbinh-27-1628053703.jpeg', 140, 10, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-superstar-review-on-feet-c77124-king-shoes-sneaker-real-hcm-61.jpeg'),
(112, 2, 'A2', 'STAN SMITH WHITE HOLOGRAM', 'https://kingshoes.vn/data/upload/media/adidas-stan-smith-hologram-fu6673-chinh-hang-tai-quan-tan-binh-hcm-king-shoes-3.jpg', 200, 0, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-stan-smith-nu%CC%9B%CC%83-fu6673-king-shoes-sneaker-real-hcm-4.jpeg'),
(113, 2, 'A3', 'ULTRABOOST 20 METALLIC GOLD', 'https://kingshoes.vn/data/upload/media/adidas-ultraboost-20-metallic-gold-fv83511-king-shoes-sneaker-real-hcm-1624253902.jpeg', 280, 0, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-fv8351-king-shoes-sneaker-real-hcm-16.jpeg'),
(114, 2, 'A4', 'X9000L4 BLACK', 'https://kingshoes.vn/data/upload/media/giay-adidas-x9000l4-fw4910-king-shoes.vn-ban-giay-sneaker-chinh-hang-tai-tphcm-1628046063.jpg', 250, 50, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-x9000l4-fw4910-king-shoes-sneaker-real-hcm-1.jpeg'),
(115, 2, 'A5', 'NMD R1 METALLIC GOLD', 'https://kingshoes.vn/data/upload/media/adidas-nmd-r1-metallic-gold-eg56651-king-shoes-sneaker-real-hcm-1624253101.jpeg', 260, 50, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-nmd-r1-metallic-gold-eg5665-king-shoes-sneaker-real-hcm-25.jpeg'),
(116, 2, 'A6', 'OZWEEGO PRIDE', 'https://kingshoes.vn/data/upload/media/adidas-eg10761-king-shoes-sneaker-real-uy-tin-nhat-hcm-1624249846.jpeg', 280, 15, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ozweego-pride-eg1076-king-shoes-sneaker-real-hcm-17.jpeg'),
(117, 2, 'A7', 'NMD R1 ALL WHITE', 'https://kingshoes.vn/data/upload/media/adidas-nmd-r1-all-white-h019031-king-shoes-sneaker-real-hcm-1624253160.jpeg', 250, 20, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-nmd-r1-all-white-h01903-king-shoes-sneaker-real-hcm-31.jpeg'),
(118, 2, 'A8', '\r\nZX 2K BOOST NASA', 'https://kingshoes.vn/data/upload/media/giay-adidas-zx-2k-boost-fy5724-king-shoes-ban-giay-sneaker-chinh-hang-tai-tphcm-1628047068.jpg', 245, 6, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-zx-2k-boost-fy5724-king-shoes-sneaker-real-hcm-36.jpeg'),
(119, 2, 'A9', 'ULTRABOOST 20 NASA CORE BLACK', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-nasa-core-black-fx7979-king-shoes-sneaker-real-hcm-1-1628047833.jpeg', 290, 7, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-nasa-core-black-fx7979-king-shoes-sneaker-real-hcm-7.jpeg'),
(120, 2, 'A10', 'ULTRABOOST 4.0', 'https://kingshoes.vn/data/upload/media/adidas-ultraboost-4-0-f347181-king-shoes-sneaker-real-hcm-1624253211.jpeg', 250, 8, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-4.0-nu%CC%9B%CC%83-f34718-king-shoes-sneaker-real-hcm-45.jpeg'),
(121, 2, 'A11', 'SOLAR HU NMD', 'https://kingshoes.vn/data/upload/media/adidas-pharrell-williams-hu-nmd-eg7737-chinh-hang-hcm-king-shoes-sneaker-authentic-hcm-1624249958.jpeg', 240, 9, 'https://kingshoes.vn/data/upload/media/adidas-pharrell-williams-hu-nmd-eg7737-chinh-hang-hcm-king-shoes-sneaker-authentic-10.jpg'),
(122, 0, 'A20', 'NMD R1 GREY', 'https://kingshoes.vn/data/upload/media/giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 180, 10, 'https://kingshoes.vn/data/upload/media/giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon-6.jpg'),
(161, 1, 'N10', 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-17-logo-1551924204-.jpg', 240, 5, 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg'),
(162, 1, 'N11', 'AIR FORCE 1 ZITRON', 'https://kingshoes.vn/data/upload/media/nike-air-force-1-zitron-315115-160-king-shoes-sneaker-real-hcm-1628156526.jpeg', 290, 0, 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-air-force-1-zitron-315115-160-king-shoes-sneaker-real-hcm-26.jpeg'),
(163, 1, 'N12', 'D/MS/X WAFFLE BLACK SILVER', 'https://kingshoes.vn/data/upload/media/nike-cha%CC%A3y-bo%CC%A3%CC%82-cq0205-001-king-shoes-sneaker-real-hcm-1-1622871969.jpeg', 290, 10, 'https://kingshoes.vn/data/upload/media/nike-cha%CC%A3y-bo%CC%A3%CC%82-cq0205-001-king-shoes-sneaker-real-hcm-2.jpeg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`IDproduct`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `IDproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
