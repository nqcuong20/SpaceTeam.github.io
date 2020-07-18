-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 07:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop_online2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` char(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_vietnamese_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`, `email`, `address`, `phone`, `gender`, `avatar`, `status`, `role`) VALUES
(10, 'SPACE TEAM', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'spaceteam.hcmue@gmail.com', '351A Lạc Long Quân Phường 5 Quận 11 TP.Hồ Chí Minh', '0377077630', 'male', 'admi1.jpg', 1, 1),
(11, 'Nguyễn Quốc Cường', 'nqcuong20', 'e10adc3949ba59abbe56e057f20f883e', 'nguyenquoccuongcn20@gmail.com', '351A Lạc Long Quân Phường 5 Quận 11 TP.Hồ Chí Minh', '0377077630', 'male', 'cuong.jpg', 1, 2),
(12, 'Trần Hoài Đức', 'thduc99', 'e10adc3949ba59abbe56e057f20f883e', 'paypal.dhtran789@gmail.com', '351A Lạc Long Quân Phường 5 Quận 11 TP.Hồ Chí Minh', '0981512780', 'male', 'duc.jpg', 1, 2),
(14, 'Nguyễn Thị Kim Anh', 'nttanh20', 'e10adc3949ba59abbe56e057f20f883e', 'kimanhcongnghethongtin2000@gmail.com', '351A Lạc Long Quân Phường 5 Quận 11 TP.HCM', '0344135640', 'female', 'kimanh.jpg', 1, 2),
(15, 'Dương Thái Nhật', 'dtnhat20', 'e10adc3949ba59abbe56e057f20f883e', 'duongthainhata10@gmail.com', '351A Lạc Long Quân Phường 5 Quận 11 TP.HCM', '0973250672', 'male', 'cuong.jpg', 1, 2),
(17, 'Phạm Huỳnh Quốc Duy', 'phqduy20', 'e10adc3949ba59abbe56e057f20f883e', 'phamhjuynhquocduy@gmail.com', '280 An Dương Vương Phường 4 Quận 5 TP.Hồ Chí Minh ', '0377077630', 'male', 'nhung-dau-hieu-ban-dang-bi-nang-loi-dung.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` char(11) COLLATE utf8_vietnamese_ci NOT NULL,
  `note` text COLLATE utf8_vietnamese_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_thumb` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `price_new` int(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `status` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `created_at`, `updated_at`, `status`) VALUES
(1, 'DELL', '2020-07-16 02:39:45', '2020-07-17 20:29:39', 1),
(2, 'ASUS', '2020-07-15 22:05:39', '2020-07-17 05:06:06', 1),
(3, 'HP', '2020-07-16 02:42:39', '2020-07-19 10:18:54', 1),
(4, 'MACBOOK', '2020-06-25 10:52:36', '2020-06-25 10:35:15', 1),
(5, 'LENOVO', '2020-06-25 10:52:41', '2020-06-25 10:50:14', 1),
(6, 'MSI', '2020-06-25 10:52:52', '2020-06-25 10:50:21', 1),
(7, 'ACER', '2020-06-27 03:32:38', '2020-06-25 10:50:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `post_title` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `images` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `post_desc` text COLLATE utf8_vietnamese_ci NOT NULL,
  `post_content` text COLLATE utf8_vietnamese_ci NOT NULL,
  `featured_posts` enum('Bình thường','Nổi bật') COLLATE utf8_vietnamese_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `cat_id`, `post_title`, `images`, `created_at`, `updated_at`, `post_desc`, `post_content`, `featured_posts`, `status`) VALUES
(12, 1, 'Ra mắt laptop đa chế độ HP Spectre x360 và EliteBook x360 1040 G5', 'ra-mat-hp-spectre-x360-13-elitebook-x360-1040-g5-200x155.jpg', '2020-07-17 04:28:23', '2020-06-27 23:05:16', 'Sáng nay 21/3, hãng HP đã chính thức giới thiệu các sản phẩm máy tính đa chế độ cao cấp mới với thiết kế sang trọng, hiệu suất vượt trội cùng bảo mật tân tiến.                                                                                                                                                                                                                                                                        ', '<p><img alt=\"\" src=\"/uploads/files/ra-mat-hp-spectre-x360-13-elitebook-x360-1040-g5-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Được thiết kế nhằm đ&aacute;p ứng với guồng quay của cuộc sống năng động, m&aacute;y t&iacute;nh x&aacute;ch tay đa chế độ&nbsp;<strong>HP Spectre x360 13</strong>thế hệ mới sở hữu thiết kế thời thượng, hiệu suất bứt ph&aacute; v&agrave; bảo mật tăng cường.</p>\r\n\r\n<p>Với m&agrave;u sắc ho&agrave;n to&agrave;n mới Xanh Biển S&acirc;u c&ugrave;ng cảm hứng từ h&igrave;nh dạng của những vi&ecirc;n đ&aacute; qu&yacute;, HP Spectre x360 13 được cắt v&aacute;t kh&eacute;o l&eacute;o để cho ra đời một thiết kế thanh mảnh trong bộ khung sắc gọn ấn tượng. Hiệu năng thiết kế của sản phẩm cũng được ch&uacute; trọng với cổng USB-C được bố tr&iacute; ở g&oacute;c phải gi&uacute;p người d&ugrave;ng dễ d&agrave;ng quản l&iacute; c&aacute;p nối, c&ugrave;ng thiết kế v&aacute;t k&eacute;p cho ph&eacute;p thao t&aacute;c mở m&aacute;y được dễ d&agrave;ng từ cả ba ph&iacute;a.</p>\r\n\r\n<p>Thiết kế lưới loa đặc trưng với d&agrave;n lỗ đi&ecirc;u khắc laser c&oacute; chủ đ&iacute;ch, mang đến t&iacute;nh thẩm mỹ c&ugrave;ng trải nghiệm &acirc;m thanh sống động, ch&acirc;n thực đến từ thương hiệu &acirc;m thanh nổi tiếng Bang &amp; Olufsen.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/files/ra-mat-hp-spectre-x360-13-elitebook-x360-1040-g5-4.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>HP Spectre x360 13 thế hệ mới cũng được trang bị c&aacute;c t&iacute;nh năng bảo mật n&acirc;ng cao. Bạn c&oacute; thể đăng nhập nhanh ch&oacute;ng v&agrave; bảo mật với camera hồng ngoại FHD c&ugrave;ng đầu đọc v&acirc;n tay t&iacute;ch hợp, cũng như y&ecirc;n t&acirc;m l&agrave;m việc với camera ri&ecirc;ng tư cơ chế gạt tắt cho ph&eacute;p ngắt điện ống k&iacute;nh camera khi kh&ocirc;ng d&ugrave;ng đến. Sản phẩm cũng được trang bị m&agrave;n h&igrave;nh t&iacute;ch hợp c&ocirc;ng nghệ chống nh&igrave;n trộm HP Sure View, gi&uacute;p dễ d&agrave;ng bảo vệ c&aacute;c th&ocirc;ng tin nhạy cảm tr&ecirc;n m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh khi sử dụng tại nơi c&ocirc;ng cộng.</p>\r\n\r\n<p>M&aacute;y trang bị bộ vi xử l&yacute; Intel Core i7 thế hệ 8 mới nhất, kết nối Wi-Fi si&ecirc;u nhanh với tốc độ truyền tải dữ liệu l&ecirc;n đến 1 gigabit đảm bảo t&iacute;nh kết nối cao. Chế độ chờ ti&ecirc;n tiến của Windows 10 cho ph&eacute;p cập nhật email, lịch tr&igrave;nh v&agrave; danh bạ li&ecirc;n tục, kết hợp c&ugrave;ng cảm biến v&acirc;n tay gi&uacute;p khởi động thiết bị nhanh ch&oacute;ng.</p>\r\n\r\n<p>Trong khi đ&oacute;,&nbsp;<strong>HP EliteBook x360 1040 G5</strong>c&oacute; m&agrave;n h&igrave;nh 14 inch nằm gọn trong bộ khung của một thiết bị 13 inch. Thiết kế m&aacute;y sử dụng khung nh&ocirc;m nguy&ecirc;n khối ứng dụng c&ocirc;ng nghệ cắt CNC, sản phẩm mới của d&ograve;ng HP Elite g&acirc;y ấn tượng với khả năng xoay gập 360 độ, c&ugrave;ng độ bền đạt chuẩn qu&acirc;n đội Mỹ MIL-STD.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/files/ra-mat-hp-spectre-x360-13-elitebook-x360-1040-g5-2.jpg\" style=\"height:551px; width:800px\" /></p>\r\n\r\n<p>Phục vụ t&iacute;nh di động cao, HP EliteBook x360 1040 G5 được trang bị thời lượng pin l&ecirc;n đến 17 tiếng, t&ugrave;y chọn m&ocirc;-đun 4G LTE hỗ trợ tốc độ gigabit, t&ugrave;y chọn m&agrave;n h&igrave;nh hiển thị ngo&agrave;i trời HP Outdoor Viewable Display với lớp k&iacute;nh chống l&oacute;a c&ugrave;ng độ s&aacute;ng 700-nit, t&ugrave;y chọn m&agrave;n h&igrave;nh chống nh&igrave;n trộm HP Sure View mang đến h&igrave;nh ảnh r&otilde; n&eacute;t trong nhiều điều kiện &aacute;nh s&aacute;ng kh&aacute;c nhau, d&ugrave; trong nh&agrave; hay ngo&agrave;i trời.</p>\r\n', 'Nổi bật', 1),
(14, 3, 'Lenovo ra mắt ThinkPad E series cho doanh nhân, thiết kế đẹp, giá vừa phải', 'lenovo-ra-mat-bo-ba-laptop-doanh-nhan-thiet-ke-dep-gia-vua-phai-1-200x155.jpg', '2020-07-09 23:38:39', '2020-06-27 23:05:16', 'Lenovo vừa công bố  bộ ba laptop ThinkPad E series mới, được thiết kế riêng cho các doanh nghiệp SMB cần duy trì hoạt động kinh doanh thông suốt và bảo mật với ngân sách vừa phải.                        ', '<p>Bộ ba sản phẩm gồm ThinkPad E490 (14 inch), ThinkPad E590 (15,6 inch) v&agrave; phi&ecirc;n bản mỏng hơn ThinkPad E490s (14 inch).</p>\r\n\r\n<p>Được trang bị&nbsp;<a href=\"https://www.techsignin.com/cong-nghe/hacking-bao-mat/lo-hong-bao-mat-moi-phat-hien-vi-xu-ly-intel/\" rel=\"noopener noreferrer\" target=\"_blank\">chip xử l&yacute; Intel</a>&nbsp;thế hệ mới nhất, t&ugrave;y chọn ổ cứng SSD tốc độ cao trong vẻ ngo&agrave;i trau chuốt c&ugrave;ng kết cấu bền chắc, những mẫu m&aacute;y mới n&agrave;y l&agrave; sự lựa chọn ho&agrave;n hảo cho những ai hay phải di chuyển nhưng lu&ocirc;n cần sự hỗ trợ của c&ocirc;ng nghệ.<img alt=\"\" src=\"/uploads/files/lenovo-ra-mat-bo-ba-laptop-doanh-nhan-thiet-ke-dep-gia-vua-phai-2-e1559021446262.jpg\" style=\"height:469px; width:800px\" /></p>\r\n\r\n<p>ThinkPad E series mới kết hợp h&agrave;i h&ograve;a t&iacute;nh hiện đại trong n&eacute;t đẹp cổ điển. M&aacute;y trang bị chip xử l&yacute; l&otilde;i tứ Intel Quad Core thế hệ 8 mới nhất, bộ nhớ trong DDR4 l&ecirc;n tới 32GB, m&agrave;n h&igrave;nh IPS Full HD (1920 x 1080), t&ugrave;y chọn card m&agrave;n h&igrave;nh rời AMD Radeon (tr&ecirc;n c&aacute;c m&aacute;y E490 v&agrave; E490s) c&ugrave;ng ổ cứng SSD tốc độ cao.</p>\r\n\r\n<p>Bộ ba sản phẩm đều sẽ được vận h&agrave;nh ở tốc độ cao, từ khởi động tới c&aacute;c t&aacute;c vụ điện to&aacute;n h&agrave;ng ng&agrave;y, mở những tệp tin lớn hay tải những game nặng. Đặc biệt, t&ugrave;y chọn ổ cứng k&eacute;p c&oacute; tr&ecirc;n ThinkPad E490 v&agrave; E590 sẽ tăng th&ecirc;m sức mạnh v&agrave; độ linh hoạt trong xử l&yacute; những t&aacute;c vụ ngốn nhiều t&agrave;i nguy&ecirc;n m&aacute;y.</p>\r\n\r\n<p>Bạn sẽ lu&ocirc;n duy tr&igrave; hiệu suất l&agrave;m việc cao khi c&oacute; thể tham dự mọi cuộc họp quan trọng ngay khi đang di chuyển, tất cả nhờ chức năng hội họp qua mạng tuyệt vời c&oacute; tr&ecirc;n d&ograve;ng ThinkPad E series mới.</p>\r\n\r\n<p>Thiết bị c&ograve;n c&oacute; thể cung cấp cuộc gọi VoIP ho&agrave;n hảo nhờ c&aacute;c cải tiến về camera HD, dải mic k&eacute;p c&oacute; khả năng chống ồn hỗ trợ bởi Dolby Advanced Audio. Cho d&ugrave; đang ở đ&acirc;u, bạn cũng sẽ c&oacute; được trải nghiệm như đang tr&ograve; chuyện trực tiếp &ndash; hơn nữa, ThinkPad E series mới đều được chứng nhận tương th&iacute;ch với Skype. C&ocirc;ng nghệ RapidCharge sẽ gi&uacute;p m&aacute;y đạt được 80% dung lượng pin chỉ trong 60 ph&uacute;t sạc.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/files/lenovo-ra-mat-bo-ba-laptop-doanh-nhan-thiet-ke-dep-gia-vua-phai-3-e1559021430176.jpg\" style=\"height:610px; width:800px\" /></p>\r\n\r\n<p>Bộ ba ThinkPad E series mới sở hữu một loạt t&iacute;nh năng bảo mật ti&ecirc;n tiến, hỗ trợ doanh nghiệp SMB tập trung v&agrave;o hiệu quả c&ocirc;ng việc m&agrave; kh&ocirc;ng cần lo lắng về bảo mật, gồm đầu đọc v&acirc;n tay (t&ugrave;y chọn tr&ecirc;n mẫu E490 v&agrave; E590) cho x&aacute;c thực sinh trắc học an to&agrave;n v&agrave; chip bảo mật dTPM 2.0 để m&atilde; ho&aacute; dữ liệu ở cấp phần cứng. Đặc biệt, ThinkPad E490s c&ograve;n c&oacute; nắp che ThinkShutter gi&uacute;p ngăn ngừa việc bị theo d&otilde;i qua webcam.</p>\r\n\r\n<p>Bộ ba laptop ThinkPad E series mới được kiểm thử về chất lượng theo ti&ecirc;u chuẩn ng&agrave;nh để đảm bảo độ tin cậy của m&aacute;y. Cả ba m&aacute;y đều trải qua một loạt c&aacute;c b&agrave;i kiểm tra như độ bền của bản lề, kiểm so&aacute;t nhiệt bằng quạt, c&aacute;c b&agrave;i kiểm thử rung v&agrave; sốc khi di chuyển h&agrave;ng ng&agrave;y v&agrave; kiểm tra độ bền chắc v&agrave; tuổi thọ của b&agrave;n ph&iacute;m cũng như c&aacute;c th&agrave;nh phần kh&aacute;c.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/files/lenovo-ra-mat-bo-ba-laptop-doanh-nhan-thiet-ke-dep-gia-vua-phai-e1559021458146.jpg\" style=\"height:485px; width:800px\" /></p>\r\n\r\n<p>Lenovo ThinkPad E490, E590 v&agrave; E490s hiện đ&atilde; sẵn s&agrave;ng để đặt h&agrave;ng th&ocirc;ng qua c&aacute;c đối t&aacute;c kinh doanh tại Việt Nam với mức gi&aacute; khởi điểm từ 16.490.000 VND.</p>\r\n\r\n<p>Sản phẩm được hưởng chế độ bảo h&agrave;nh tận nơi 1 năm k&egrave;m theo g&oacute;i dịch vụ hỗ trợ cao cấp (Premier Support) t&ugrave;y chọn cho c&aacute;c model ThinkPad E series ph&acirc;n phối tr&ecirc;n thị trường.</p>\r\n', 'Bình thường', 1),
(16, 4, 'Asus ROG Ra mắt laptop gaming dùng đồ họa GeForce RTX tại sự kiện Unleashed the Beasts', 'asus-rog-gioi-thieu-laptop-gaming-su-dung-do-hoa-geforce-rtx-tai-su-kien-unleashed-the-beasts-200x155.jpg', '2020-07-10 16:47:16', '2020-06-27 23:05:16', 'Dải sản phẩm toàn diện từ laptop siêu mỏng di động đến những chiếc mang hiệu năng tối thượng được nâng cấp card đồ họa GeForce RTX bao gồm ROG G703, Zephyrus S GX531 / GX701, Strix Scar II GL504 / GL704.                                                                                                                        ', '<p><img alt=\"\" src=\"/uploads/images/asus-rog-gioi-thieu-laptop-gaming-su-dung-do-hoa-geforce-rtx-tai-su-kien-unleashed-the-beasts.jpg\" style=\"height:715px; width:1197px\" /></p>\r\n\r\n<p>Theo Asus Republic of Gamers (ROG), ngo&agrave;i sản phẩm ho&agrave;n to&agrave;n mới l&agrave; ROG Zephyrus S GX701, những d&ograve;ng laptop hiện tại như ROG G703, ROG Zephyrus S GX531 v&agrave; ROG Strix SCAR II cũng được n&acirc;ng cấp l&ecirc;n t&ugrave;y chọn card đồ họa GeForce RTX mới nhất. Với dải sản phẩm phong ph&uacute;, ROG hứa hẹn mang lại những trải nghiệm chơi game tuyệt vời nhất tr&ecirc;n nền tảng RTX với hai c&ocirc;ng nghệ mang t&iacute;nh c&aacute;ch mạng l&agrave; Ray Tracing v&agrave; DLSS.</p>\r\n\r\n<p>Kiến tr&uacute;c Turing mới với c&ocirc;ng nghệ dựng h&igrave;nh &ldquo;d&ograve; tia s&aacute;ng&rdquo; Ray Tracing mang lại h&igrave;nh ảnh đổ b&oacute;ng v&agrave; phản chiếu trung thực như c&aacute;ch ch&uacute;ng ta nh&igrave;n c&aacute;c vật thể ngo&agrave;i thực tế. Đặc biệt l&agrave; c&ocirc;ng nghệ DLSS dựa tr&ecirc;n nền tảng AI mang lại hiệu suất tuyệt vời hơn cho những tựa game AAA hạng nặng. Những thiết bị đến từ Republic of Gamers nay được n&acirc;ng cao trải nghiệm chơi game v&agrave; chất lượng h&igrave;nh ảnh nhờ v&agrave;o d&ograve;ng card đồ họa NVIDIA GeForce RTX ho&agrave;n to&agrave;n mới.</p>\r\n\r\n<p>Với ngoại h&igrave;nh c&ugrave;ng th&ocirc;ng số kỹ thuật đa dạng, c&aacute;c d&ograve;ng laptop gaming ROG sử dụng GeForce RTX mới thu h&uacute;t được nhiều game thủ v&agrave; người d&ugrave;ng chuy&ecirc;n nghiệp với nhu cầu, ng&acirc;n s&aacute;ch kh&aacute;c nhau. ROG G703 với Intel Core i9 v&agrave; GeForce RTX 2080 đặt nặng hiệu suất mạnh mẽ để c&oacute; thể thay thế desktop.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/asus-rog-gioi-thieu-laptop-gaming-su-dung-do-hoa-geforce-rtx-tai-su-kien-unleashed-the-beasts-1.jpg\" style=\"height:1067px; width:1600px\" /></p>\r\n\r\n<p>C&aacute;c ống dẫn nhiệt v&agrave; quạt lớn gi&uacute;p tản nhiệt hiệu quả, mang đến cho ROG G703 khả năng &eacute;p xung l&ecirc;n đến 4.8GHz. ROG Zephyrus S GX531 / GX701 n&acirc;ng tầm trải nghiệm với GeForce RTX l&ecirc;n đến 2080 Max-Q tr&ecirc;n một thiết kế si&ecirc;u mỏng v&agrave; di động.</p>\r\n\r\n<p>Hệ thống tản nhiệt kh&iacute; động lực chủ động AAS tối ưu l&agrave;m m&aacute;t c&ugrave;ng giải ph&aacute;p n&acirc;ng mặt đ&aacute;y độc đ&aacute;o v&agrave; quạt k&eacute;p 83 c&aacute;nh hiệu suất cao. ROG Strix SCAR II (GL504 / GL704) thể hiện vai tr&ograve; của m&igrave;nh trong đấu trường eSports, với thiết kế năng động v&agrave; hiệu suất cao của GeForce RTX 2060 / 2070.</p>\r\n\r\n<p>B&agrave;n ph&iacute;m HyperStrike c&ugrave;ng c&ocirc;ng nghệ Overstroke độc quyền gi&uacute;p bạn lu&ocirc;n l&agrave;m chủ t&igrave;nh huống. C&ugrave;ng với đ&oacute; l&agrave; những t&iacute;nh năng phần cứng nhằm mang lại lợi thế gi&uacute;p bạn đạt được thắng lợi trong game.</p>\r\n\r\n<p>Những sản phẩm&nbsp;<a href=\"https://www.techsignin.com/game/asus-rog-tai-tro-doi-tuyen-496-dota2-game-thu-meomaika-starcraft-2/\" rel=\"noopener noreferrer\" target=\"_blank\">ROG</a>&nbsp;đều được trang bị m&agrave;n h&igrave;nh IPS tần số qu&eacute;t cao 144Hz/3ms v&agrave; viền m&agrave;n h&igrave;nh mỏng đ&aacute;ng kinh ngạc, đưa game thủ đắm ch&igrave;m v&agrave;o trong c&aacute;c tr&ograve; chơi y&ecirc;u th&iacute;ch của m&igrave;nh. Hệ thống l&agrave;m m&aacute;t n&acirc;ng cao đảm bảo cho hiệu suất tối đa. Với việc bổ sung c&aacute;c th&agrave;nh phần ti&ecirc;n tiến v&agrave; c&aacute;c t&iacute;nh năng ROG độc quyền, game thủ sẽ c&oacute; nền tảng ph&ugrave; hợp với một hệ sinh th&aacute;i đầy đủ, nổi bật so với phần c&ograve;n lại.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/asus-rog-gioi-thieu-laptop-gaming-su-dung-do-hoa-geforce-rtx-tai-su-kien-unleashed-the-beasts-GX701.jpg\" style=\"height:324px; width:574px\" /></p>\r\n\r\n<p>ROG Zephyrus S lập n&ecirc;n chuẩn mực mới cho m&aacute;y t&iacute;nh x&aacute;ch tay chơi game si&ecirc;u mỏng với m&agrave;n h&igrave;nh 17-inch viền si&ecirc;u mỏng trong một khung m&aacute;y chỉ mỏng 18,7mm. Zephyrus S GX701 trang bị GPU l&ecirc;n tới GeForce RTX 2080 Max-Q v&agrave; CPU Intel Core i7-8750H.</p>\r\n\r\n<p>M&agrave;n h&igrave;nh 144Hz/3ms mang đến trải nghiệm game mượt m&agrave; với m&agrave;u sắc đạt chuẩn m&agrave;u Pantone Validated phục vụ c&aacute;c t&aacute;c vụ đồ họa. C&ocirc;ng nghệ chuyển đổi chế độ GPU độc quyền của ROG thay đổi giữa G-SYNC d&agrave;nh cho chơi game v&agrave; Optimus gi&uacute;p k&eacute;o d&agrave;i thời lượng pin.</p>\r\n\r\n<p>Hệ thống Kh&iacute; động học chủ động (AAS) của ROG gi&uacute;p Zephyrus S GX701 duy tr&igrave; hiệu năng tối đa cho chơi game v&agrave; c&aacute;c t&aacute;c vụ nặng kh&aacute;c. Khi lật nắp lưng l&ecirc;n, một cửa h&uacute;t gi&oacute; lớn sẽ mở ra để tăng lượng kh&iacute; lưu th&ocirc;ng th&ecirc;m 32% so với thiết kế th&ocirc;ng thường.</p>\r\n\r\n<p>B&agrave;n ph&iacute;m đặt xuống ph&iacute;a dưới gi&uacute;p hạ thấp nhiệt độ bề mặt, cho ph&eacute;p bạn chơi game một c&aacute;ch thoải m&aacute;i nhiều giờ li&ecirc;n tục. T&ugrave;y chỉnh đ&egrave;n nền RGB tr&ecirc;n từng ph&iacute;m cho những tựa game kh&aacute;c nhau v&agrave; hiệu ứng &aacute;nh s&aacute;ng đồng bộ với c&aacute;c thiết bị ngoại vi tương th&iacute;ch th&ocirc;ng qua Aura Sync.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/asus-rog-gioi-thieu-laptop-gaming-su-dung-do-hoa-geforce-rtx-tai-su-kien-unleashed-the-beasts-G703.jpg\" style=\"height:325px; width:590px\" /></p>\r\n\r\n<p>Được trang bị bộ xử l&yacute; Intel Core i9-8950HK, ROG G703 c&oacute; thể &eacute;p xung cho tốc độ l&ecirc;n tới 4,8 GHz v&agrave; đồ họa mạnh mẽ GeForce RTX 2080. Việc giữ ngoại h&igrave;nh laptop 17 inch truyền thống đ&ograve;i hỏi hệ thống l&agrave;m m&aacute;t mạnh mẽ hơn v&agrave; khung m&aacute;y d&agrave;y hơn, để đạt được hiệu suất tương tự như những sản phẩm c&oacute; kh&ocirc;ng gian rộng r&atilde;i kh&aacute;c. C&aacute;c ống tản nhiệt v&agrave; quạt lớn hơn mang lại hiệu năng mạnh cho ROG G703.</p>\r\n\r\n<p>ROG G703 sở hữu m&agrave;n h&igrave;nh tấm nền IPS với tần số qu&eacute;t 144Hz, thời gian phản hồi 3ms gray-to-gray (GTG) v&agrave; c&ocirc;ng nghệ NVIDIA G-SYNC cho ph&eacute;p chơi game si&ecirc;u mượt ngay cả với c&agrave;i đặt đồ họa Ultra. G703 cũng được trang bị bộ lưu trữ HyperDrive Extreme, sử dụng c&ocirc;ng nghệ độc quyền để kết hợp ba ổ SSD NVMe PCI Express (PCIe) trong cấu h&igrave;nh RAID 0 cho tốc độ đọc l&ecirc;n tới 8700 MB/gi&acirc;y, nhanh nhất từ trước đến nay tr&ecirc;n laptop.</p>\r\n', 'Bình thường', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_cat`
--

CREATE TABLE `post_cat` (
  `cat_id` int(11) NOT NULL,
  `post_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `post_cat`
--

INSERT INTO `post_cat` (`cat_id`, `post_name`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Đánh giá', '2020-06-25 11:28:51', '2020-06-29 09:47:25', 1),
(2, 'Cẩm nang', '2020-06-25 10:31:46', '2020-06-29 10:54:44', 1),
(3, 'Tin tức', '2020-06-25 10:31:53', '2020-06-29 09:48:45', 1),
(4, 'So sánh', '2020-06-25 10:58:41', '2020-06-30 09:50:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `price_new` int(50) NOT NULL,
  `price_old` int(50) NOT NULL,
  `qty_product` int(11) NOT NULL DEFAULT 30,
  `product_desc` text COLLATE utf8_vietnamese_ci NOT NULL,
  `product_thumb` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `list_thumb_1` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `list_thumb_2` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `list_thumb_3` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `list_thumb_4` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `list_thumb_5` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `list_thumb_6` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `product_content` text COLLATE utf8_vietnamese_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `selling_products` enum('Bình thường','Bán chạy') COLLATE utf8_vietnamese_ci NOT NULL,
  `featured_products` enum('Bình thường','Nổi bật') COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'Bình thường',
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `images` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `images`, `creator`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Slider 1', 'slider-01.png', 'Người quản trị', '2020-06-29 02:01:49', '2020-07-17 04:41:18', 1),
(2, 'Slider 2', 'slider-02.png', 'Admin', '2020-06-27 00:43:49', '2020-07-17 04:41:18', 1),
(3, 'Slider 3', 'slider-03.png', 'Admin', '2020-06-27 00:43:51', '2020-07-17 04:41:19', 1),
(5, 'Slider 4', 'slider-4.jpg', 'Admin', '2020-07-02 09:50:27', '2020-07-07 05:50:19', 2),
(6, 'Slider 5', 'slider-5.jpg', 'Admin', '2020-07-02 09:51:01', '2020-07-17 04:41:19', 1),
(7, 'Slider 6', 'slider-8.jpg', 'Admin', '2020-07-02 09:51:19', '2020-07-17 04:41:20', 1),
(8, 'Slider 7', 'slider-6.jpg', 'Người quản trị', '2020-07-02 09:51:46', '2020-07-17 04:41:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sort`
--

CREATE TABLE `sort` (
  `id` int(11) NOT NULL,
  `sort_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sort`
--

INSERT INTO `sort` (`id`, `sort_name`, `status`) VALUES
(3, 'Giá cao xuống thấp', 1),
(4, 'Giá thấp lên cao', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` char(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_vietnamese_ci NOT NULL,
  `is_active` enum('0','1') COLLATE utf8_vietnamese_ci NOT NULL DEFAULT '0',
  `active_token` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `reset_token` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`,`bill_id`,`product_id`),
  ADD KEY `bill_id` (`bill_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `post_cat`
--
ALTER TABLE `post_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post_cat`
--
ALTER TABLE `post_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sort`
--
ALTER TABLE `sort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `post_cat` (`cat_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
