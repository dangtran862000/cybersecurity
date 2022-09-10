-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 02:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyber_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer1` text COLLATE utf8_unicode_ci NOT NULL,
  `answer2` text COLLATE utf8_unicode_ci NOT NULL,
  `answer3` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `answer1`, `answer2`, `answer3`) VALUES
(1, 'Bạn có dùng một mật khẩu cho nhiều tài khoản khác nhau không?', 'Không', 'Có', ''),
(2, 'Bạn thường thay đổi mật khẩu cho 1 tài khoản bao lâu một lần?', 'Không bao giờ', '3 tháng một lần', '6 tháng một lần'),
(3, 'Mật khẩu của bạn có đầy đủ 3 yếu tố: ký tự chữ, ký tự số, ký tự viết hoa:', '1 trong 3 yếu tố trên', '2 trong 3 yếu tố trên', 'Cả 3 yếu tố trên'),
(4, 'Trong mật khẩu của bạn, những kí tự đặc biệt có được sử dụng khi đặt mật khẩu và chứa bao nhiêu kí tự đặc biệt?', 'Không có', 'Có từ 1-3 ký tự', 'Có trên 3 ký tự'),
(5, 'Bạn lưu giữ mật khẩu của mình vào sổ ghi chú hoặc email để dễ dàng xem lại khi quên?', 'Không', ' Có', ''),
(6, 'Mật khẩu của bạn có sử dụng những yếu tố đặc biệt sau đây để dễ nhớ: tên riêng, số điện thoại, ngày sinh?', 'Không có yếu tố nào', 'Có từ 1 đến 3 yếu tố trên', ''),
(7, 'Bạn thường sử dụng lại mật khẩu mà mình đã tạo và sử dụng trước đó?', 'Không', 'Có', ''),
(8, 'Bạn có chia sẻ mật khẩu của mình với bạn bè hay không?', 'Không', 'Có', ''),
(9, 'Bạn có sử dụng ‘tính năng xác thực hai yếu tố’ (*) cho mật khẩu của mình?', 'Không', 'Có', ''),
(10, 'Bạn có sử dụng ứng dụng quản lý mật khẩu cho các mật khẩu của mình hay không?', 'Không', 'Có', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
