-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2021 lúc 05:44 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `edu`
--

CREATE TABLE `edu` (
  `idedu` mediumint(6) UNSIGNED NOT NULL,
  `nameedu` varchar(100) NOT NULL,
  `noidungedu` varchar(1000) NOT NULL,
  `timestart` varchar(6) NOT NULL,
  `timeend` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `edu`
--

INSERT INTO `edu` (`idedu`, `nameedu`, `noidungedu`, `timestart`, `timeend`) VALUES
(5, 'Trường mầm non thôn Sa Hạ', 'Chỉ là mầm non', '2003', '2006'),
(6, 'Trường tiểu học Hoàng Nam B', 'Ôi thời đỉnh cao học tập', '2006', '2011'),
(8, 'Trường THCS Hoàng Nam', 'Nghĩ lại nhớ các thầy quá', '2011', '2015'),
(9, 'Trường thpt Nghĩa Hưng A', 'Ôi cái thời tệ của tệ', '2015', '2018'),
(13, 'Đại học Thủy lợi', 'Một chân trời mới mở ra sau chuỗi ngày ngồi đáy giếng', '2018', '????');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `signup`
--

CREATE TABLE `signup` (
  `idup` mediumint(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `ykien` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL,
  `chude` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `signup`
--

INSERT INTO `signup` (`idup`, `name`, `ykien`, `email`, `chude`) VALUES
(3, 'Trần Văn Dương', '0866546300', 'anhyeuem2150@gmail.com', ''),
(5, 'duat', 'em yêu anh', '18lynnxx@gmail.com', ''),
(6, 'duat', 'hello', '18lynnxx@gmail.com', ''),
(7, 'duật', 'sao nào', '18lynnxx@gmail.com', ''),
(8, 'Nu', 'Em vẫn luôn oke 1 mình', '18lynnxx@gmail.com', 'Đôi ba cuộc tình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skin`
--

CREATE TABLE `skin` (
  `idskin` mediumint(6) UNSIGNED NOT NULL,
  `nameskin` varchar(30) NOT NULL,
  `noidung` varchar(1000) NOT NULL,
  `phantram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `skin`
--

INSERT INTO `skin` (`idskin`, `nameskin`, `noidung`, `phantram`) VALUES
(6, 'Năng động', 'rất là năng động', '40'),
(7, 'C++', 'Ngôn ngữ lập trình C++', '45'),
(8, 'C#', 'Ngôn ngữ lập trình C#', '30'),
(9, 'HTML', 'html', '60'),
(10, 'CSS', 'css', '40'),
(11, 'Nhiệt huyết', 'rất chi là nhiệt huyết', '60'),
(12, 'Tin học văn phòng', 'các kỹ năng văn phòng máy tính', '80'),
(13, 'Kỹ năng giao tiếp', 'kỹ năng giao tiếp và thuyết trình', '70'),
(14, 'Python', 'ngôn ngữ lập trình python', '40'),
(15, 'PHP', 'Ngôn ngữ lập trình PHP', '45'),
(16, 'Java', 'Ngôn ngữ lập trình Java', '25'),
(17, 'test', 'chỉ là test thôi', '100');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `st`
--

CREATE TABLE `st` (
  `idst` mediumint(6) UNSIGNED NOT NULL,
  `namest` varchar(30) NOT NULL,
  `noidungst` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `st`
--

INSERT INTO `st` (`idst`, `namest`, `noidungst`) VALUES
(5, 'Thứ thích nhất', 'Đọc sách, nghe nhạc và manga'),
(6, 'Thích nhì', 'Chắc là ngủ và ăn'),
(7, 'Thứ tam', 'Tán ngẫu với bạn bè, cafe các thứ'),
(8, 'Tiếp theo', 'Chơi game'),
(9, 'test cuối', 'nhìn ngắm trời trăng mây nước');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `status` binary(1) NOT NULL DEFAULT '\0',
  `activation_code` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `email`, `password`, `status`, `activation_code`) VALUES
(5, '1', '1', 0x31, ''),
(6, '1', '1', 0x31, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`idedu`);

--
-- Chỉ mục cho bảng `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`idup`);

--
-- Chỉ mục cho bảng `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`idskin`);

--
-- Chỉ mục cho bảng `st`
--
ALTER TABLE `st`
  ADD PRIMARY KEY (`idst`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `edu`
--
ALTER TABLE `edu`
  MODIFY `idedu` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `signup`
--
ALTER TABLE `signup`
  MODIFY `idup` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `skin`
--
ALTER TABLE `skin`
  MODIFY `idskin` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `st`
--
ALTER TABLE `st`
  MODIFY `idst` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
