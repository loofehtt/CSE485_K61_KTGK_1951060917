-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 06:06 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_exams`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `exam_title` varchar(30) NOT NULL,
  `exam_datetime` date NOT NULL,
  `duration` int(11) NOT NULL,
  `total_question` int(11) NOT NULL,
  `marks_per_right_answer` float NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `exam_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `exams`
--

INSERT INTO `exams` (`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) VALUES
(1, 'KT1', '2021-10-23', 90, 25, 2, '2021-10-22', 'Pending', 'code1'),
(2, 'KT2', '2021-10-23', 120, 50, 1, '2021-10-22', 'Created', 'code2'),
(3, 'KT3', '2021-10-23', 90, 25, 2, '2021-10-22', 'Started', 'code3'),
(4, 'KT4', '2021-10-22', 120, 50, 1, '2021-10-22', 'Completed', 'code4'),
(8, 'kt7', '2021-10-25', 120, 60, 1.5, '2021-10-22', 'Created', 'code6');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
