-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 02:22 PM
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
-- Table structure for table `phishingimg`
--

CREATE TABLE `phishingimg` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phishingimg`
--

INSERT INTO `phishingimg` (`id`, `title`, `answer`) VALUES
(1, 'Apple_original', 1),
(2, 'messenger_ad', 0),
(3, 'messenger_phishing', 0),
(4, 'messenger_phishing1', 0),
(5, 'messenger_phishing2', 0),
(6, 'grab_origin', 1),
(7, 'Apple_phishing', 0),
(8, 'EF_Education_origin', 1),
(9, 'EF_education_phishingEmail', 0),
(10, 'grab_phishing1', 0),
(11, 'grab_phishing2', 0),
(12, 'grab_phishing2', 0),
(13, 'Instagram_original', 1),
(14, 'Instagram_phishing1', 0),
(15, 'momo_ad_origin', 1),
(16, 'momo_ad_phishing', 0),
(17, 'momo_ad_phishing1', 0),
(18, 'momo_original', 1),
(19, 'momo_phishing', 0),
(20, 'momo_phishing1', 0),
(21, 'momo_phishing2', 0),
(22, 'momo_phishing3', 0),
(23, 'scam_phishingEmail', 0),
(24, 'shopee_ad_original', 1),
(25, 'Tiki_ad_original', 1),
(26, 'Tiki_ad_phishing', 0),
(27, 'Tiki_ad_phishing2', 0),
(28, 'Cake_original', 1),
(29, 'cake_phishing_1', 0),
(30, 'facebook_original', 1),
(31, 'facebook_phishing', 0),
(32, 'facebook_phishing1', 0),
(33, 'facebook_phishing2', 0),
(34, 'facebook_phishing3', 0),
(35, 'instagram_web_original', 1),
(36, 'Instagram_web_phishing', 0),
(37, 'Instagram_web_phishing1', 0),
(38, 'Instagram_web_phishing2', 0),
(39, 'CGV_ad_original', 1),
(40, 'momo_scam_facebook', 0),
(41, 'Zalo_ad_original', 1),
(42, 'Zalo_ad_phishing', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify_code` int(11) NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT 0,
  `level` int(11) NOT NULL,
  `phishing_result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`, `verify_code`, `verify`, `level`, `phishing_result`) VALUES
(1, 'admin', 'dangtran862000@gmail.com', '123456', 0, 0, 60, 0),
(2, 'danghan', 'dangtran862000@gmail.com', '123', 552652, 1, 0, 0),
(4, 'rmit', 'tranhaidang.la@rmit.edu.vn', '123', 308046, 1, 0, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phishingimg`
--
ALTER TABLE `phishingimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phishingimg`
--
ALTER TABLE `phishingimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
