-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 10:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_product`
--

CREATE TABLE `img_product` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `img_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `img_product`
--

INSERT INTO `img_product` (`id`, `id_product`, `img_product`) VALUES
(220, 43, '60640_laptop_asus_vivobook_a515ep_bq498t_bac_1.png'),
(221, 43, '60640_laptop_asus_vivobook_a515ep_bq498t_bac_2.png'),
(222, 43, '60640_laptop_asus_vivobook_a515ep_bq498t_bac_3.png'),
(224, 43, '60640_laptop_asus_vivobook_a515ep_bq498t_bac_5.png'),
(239, 43, '60640_laptop_asus_vivobook_a515ep_bq498t_bac_4.png'),
(240, 54, '58922_keyboard_gigabyte_aorus_k1_rgb_usb_red_sw_0000_1.jpg'),
(241, 54, '58922_keyboard_gigabyte_aorus_k1_rgb_usb_red_sw_0001_2.jpg'),
(242, 54, '58922_keyboard_gigabyte_aorus_k1_rgb_usb_red_sw_0002_3.jpg'),
(243, 54, '58922_keyboard_gigabyte_aorus_k1_rgb_usb_red_sw_0003_4.jpg'),
(244, 55, '27422_tai_nghe_kingston_hyperx_cloud_2_gaming_red_0001_2.jpg'),
(245, 55, '27422_tai_nghe_kingston_hyperx_cloud_2_gaming_red_0002_3.jpg'),
(246, 55, '27422_tai_nghe_kingston_hyperx_cloud_2_gaming_red_0003_4.jpg'),
(247, 55, '27422_tai_nghe_kingston_hyperx_cloud_2_gaming_red_0004_5.jpg'),
(267, 60, 'anh4-3.png'),
(268, 60, 'anh4-2.png'),
(269, 60, 'anh4-1.png'),
(270, 61, 'anh5-2.png'),
(271, 61, 'anh5-1.png'),
(272, 62, 'anh6-3.png'),
(273, 62, 'anh6-2.png'),
(274, 62, 'anh6-1.png'),
(281, 58, 'anh2-3.png'),
(282, 58, 'anh2-2.png'),
(283, 58, 'anh2-1.png'),
(285, 57, 'anh1-3.png'),
(286, 57, 'anh1-2.png'),
(287, 57, 'anh1-1.png'),
(288, 63, 'anh7-2.png'),
(289, 63, 'anh7-1.png'),
(290, 64, 'anh8-2.png'),
(291, 64, 'anh8-1.png'),
(292, 65, 'anh9-4.png'),
(293, 65, 'anh9-3.png'),
(294, 65, 'anh9-2.png'),
(295, 65, 'anh9-1.png'),
(296, 66, 'anh10-3.png'),
(297, 66, 'anh10-2.png'),
(298, 66, 'anh10-1.png'),
(299, 67, 'anh11-2.png'),
(300, 67, 'anh11-1.png'),
(301, 68, 'anh12-3.png'),
(302, 68, 'anh12-2.png'),
(303, 68, 'anh12-1.png'),
(304, 69, 'anh13-1.png'),
(305, 70, 'anh14-2.png'),
(306, 70, 'anh14-1.png'),
(307, 71, 'anh15-3.png'),
(308, 71, 'anh15-2.png'),
(309, 71, 'anh15-1.png'),
(310, 72, 'anh16-3.png'),
(311, 72, 'anh16-2.png'),
(312, 72, 'anh16-1.png'),
(313, 73, 'anh17-1.png'),
(314, 74, 'anh18-2.png'),
(315, 74, 'anh18-1.png'),
(316, 75, 'anh19-2.png'),
(317, 75, 'anh19-1.png'),
(318, 76, 'anh20-2.png'),
(319, 76, 'anh20-1.png'),
(320, 77, 'anh21-4.png'),
(321, 77, 'anh21-3.png'),
(322, 77, 'anh21-2.png'),
(323, 77, 'anh21-1.png'),
(324, 78, 'anh22-1.png'),
(325, 79, 'anh23-4.png'),
(326, 79, 'anh23-3.png'),
(327, 79, 'anh23-2.png'),
(328, 79, 'anh23-1.png'),
(329, 59, 'anh24-4.png'),
(330, 59, 'anh24-3.png'),
(331, 59, 'anh24-2.png'),
(332, 59, 'anh24-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `shop_cmt`
--

CREATE TABLE `shop_cmt` (
  `id_comment_shop` int(11) NOT NULL,
  `id_comment_user` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `time_comment` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_cmt`
--

INSERT INTO `shop_cmt` (`id_comment_shop`, `id_comment_user`, `noidung`, `time_comment`) VALUES
(8, 54, 'Oke bạn , shop sẽ liên hệ qua zalo hoặc gmail của bạn', '2022-03-23 22:35:53'),
(9, 8, 'Còn Nhiều lắm bạn ạ', '2022-03-23 22:38:13'),
(10, 9, 'được chứ', '2022-04-06 22:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `TOPIC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `tinhtrang`, `hinhanh`, `time`, `TOPIC`) VALUES
(8, 'Vivo T3X 5G ra mắt: Chip Snadragon 6 Gen 1, màn hình 120Hz, pin trâu, giá từ 4 triệu đồng', '<p><a href=\"https://www.thegioididong.com/dtdd-vivo\" target=\"_blank\">Vivo</a>&nbsp;đ&atilde; tr&igrave;nh l&agrave;ng mẫu&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;gi&aacute; rẻ mới nhất của m&igrave;nh - Vivo T3X 5G tại Ấn Độ. Điều n&agrave;y diễn ra sau sự ra mắt của&nbsp;<a href=\"https://www.thegioididong.com/dtdd/vivo-t3-5g\" target=\"_blank\">Vivo T3 5G</a>&nbsp;tại thị trường n&agrave;y v&agrave;o th&aacute;ng trước. Vivo T3X 5G tự h&agrave;o c&oacute; một số t&iacute;nh năng ấn tượng trong ph&acirc;n kh&uacute;c gồm vi&ecirc;n pin &quot;khủng&quot;, m&agrave;n h&igrave;nh mượt m&agrave; v&agrave; hệ thống camera hoạt động tốt</p>\r\n', '<h3><strong>Cấu h&igrave;nh Vivo T3X 5G</strong></h3>\r\n\r\n<p>Vivo T3X 5G được trang bị m&agrave;n h&igrave;nh LCD 6.72 inch độ ph&acirc;n giải Full HD+ với tần số qu&eacute;t 120 Hz, tỷ lệ m&agrave;n h&igrave;nh so với th&acirc;n m&aacute;y l&agrave; 91.48% v&agrave; mật độ điểm ảnh 393 PPI. Thiết bị c&oacute; độ s&aacute;ng tối đa 1.000 nits, gi&uacute;p c&oacute; thể xem được ngay cả trong điều kiện ngo&agrave;i trời s&aacute;ng.</p>\r\n\r\n<p><img alt=\"Màn hình của Vivo T3X 5G  có độ sáng tối đa 1.000 nits\" src=\"https://cdn.tgdd.vn/News/0/man-1280x758.jpg\" /></p>\r\n\r\n<p>Vivo T3X 5G được trang bị con chip Snapdragon 6 Gen 1 c&oacute; tiến tr&igrave;nh 4 nm. Bộ xử l&yacute; n&agrave;y c&oacute; số điểm AnTuTu tr&ecirc;n 561.250, khiến T3X trở th&agrave;nh một đối thủ nặng k&yacute; trong ph&acirc;n kh&uacute;c gi&aacute; rẻ. Đi c&ugrave;ng với đ&oacute; l&agrave; t&ugrave;y chọn dung lượng&nbsp;RAM 4 GB, 6 GB hoặc 8 GB, c&ugrave;ng với bộ nhớ trong 128 GB. V&agrave; c&oacute; thể mở rộng RAM&nbsp; l&ecirc;n tới 8 GB v&agrave; bộ nhớ c&oacute; thể được mở rộng l&ecirc;n tới 1 TB qua khe thẻ nhớ microSD.</p>\r\n\r\n<p><img alt=\"Toàn bộ thông tin cấu hình của Vivo T3X 5G \" src=\"https://cdn.tgdd.vn/News/0/cauhinh-1280x937.jpg\" /></p>\r\n\r\n<p>Về khả năng chụp ảnh, Vivo T3X 5G được trang bị camera ch&iacute;nh 50 MP v&agrave; camera đo độ s&acirc;u trường ảnh 2 MP. Camera ch&iacute;nh c&oacute; thể chụp ảnh độ ph&acirc;n giải cao ngay cả trong điều kiện &aacute;nh s&aacute;ng yếu. Thiết bị cũng hỗ trợ quay video 4K v&agrave; nhiều t&iacute;nh năng camera kh&aacute;c nhau như Chế độ ban đ&ecirc;m, Chế độ ch&acirc;n dung v&agrave; Chế độ si&ecirc;u đ&ecirc;m để n&acirc;ng cao khả năng chụp ảnh thiếu s&aacute;ng.</p>\r\n\r\n<p>Vivo T3X 5G chạy giao diện Funtouch OS 14 dựa tr&ecirc;n Android 14. M&aacute;y được trang bị cảm biến v&acirc;n tay b&ecirc;n cạnh v&agrave; hỗ trợ hai SIM, mạng 5G. Thiết bị c&oacute; loa &acirc;m thanh nổi k&eacute;p với &Acirc;m thanh độ ph&acirc;n giải cao v&agrave; c&oacute; giắc cắm tai nghe 3.5 mm.&nbsp;Thiết bị c&oacute; k&iacute;ch thước 165.7 x 76 x 7.99mm v&agrave; nặng 199 gram. Điện thoại c&oacute; xếp hạng kh&aacute;ng nước bụi v&agrave; nước IP64.</p>\r\n\r\n<p><img alt=\"Vivo T3X 5G  được trang bị camera 50 MP và camera đo độ sâu trường ảnh 2 MP\" src=\"https://cdn.tgdd.vn/News/0/camera-1280x623.jpg\" /></p>\r\n\r\n<p>Vivo T3X 5G được trang bị vi&ecirc;n pin c&oacute; dung lượng 6.000mAh, được Vivo tuy&ecirc;n bố c&oacute; thể đem lại thời lượng ph&aacute;t nhạc l&ecirc;n tới 68.8 giờ v&agrave; ph&aacute;t lại video 23.33 giờ trong một lần sạc. Điện thoại cũng hỗ trợ sạc nhanh 44 W.&nbsp;</p>\r\n\r\n<p>Vivo đ&atilde; thiết kế T3X tập trung v&agrave;o phong c&aacute;ch. Điện thoại c&oacute; hai t&ugrave;y chọn m&agrave;u bắt mắt gồm: Celestial Green v&agrave; Crimson Bliss. Mặt sau nổi bật với khung phẳng 2.5D với thiết kế m&ocirc;-đun camera đẹp mắt, gợi nhớ đến một chiếc đồng hồ cao cấp.</p>\r\n\r\n<h3><strong>Vivo T3X 5G gi&aacute; bao nhi&ecirc;u</strong></h3>\r\n\r\n<p>Mức gi&aacute; của Vivo T3X 5G c&ugrave;ng với c&aacute;c t&ugrave;y chọn cấu h&igrave;nh tại thị trường Ấn Độ như sau:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>&nbsp; &nbsp; &nbsp; Phi&ecirc;n bản RAM 4 GB + ROM 128 GB c&oacute; gi&aacute; 13.499 INR (khoảng 4 triệu đồng).</li>\r\n	<li>&nbsp; &nbsp; &nbsp; Phi&ecirc;n bản RAM 6 GB + ROM 128 GB c&oacute; gi&aacute; 14.999 INR (khoảng 4.5 triệu đồng).</li>\r\n	<li>&nbsp; &nbsp; &nbsp; Phi&ecirc;n bản RAM 8 GB + ROM 128 GB c&oacute; gi&aacute; 16.499 INR (khoảng 5 triệu đồng).</li>\r\n</ul>\r\n\r\n<p>Bạn c&oacute; mong muốn được sở hữu Vivo T3X 5G kh&ocirc;ng?</p>\r\n', 1, '1713421190_baiviet1.png', '2022-04-12 18:23:20', '<?php echo Tin tức công nghệ ?>'),
(9, 'OPPO A60 lộ diện: Sạc nhanh tới 45W, camera 50MP nhưng có vài điểm đáng tiếc', '<p>Sau khi ra mắt OPPO A1s 5G v&agrave; OPPO A1i tại Trung Quốc, c&oacute; vẻ như&nbsp;<a href=\"https://www.thegioididong.com/dtdd-oppo\" target=\"_blank\">OPPO</a>&nbsp;sắp ra mắt th&ecirc;m smartphone mới -&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a60\" target=\"_blank\">OPPO A60</a>. Tuy nhi&ecirc;n, c&oacute; một điểm đ&aacute;ng tiếc khi OPPO A60 sẽ kh&ocirc;ng c&oacute; 5G, điều đ&oacute; c&oacute; nghĩa l&agrave; OPPO A60 sẽ đ&oacute;ng vai tr&ograve; l&agrave; thiết bị kế nhiệm cho&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a58-4g\" target=\"_blank\">OPPO A58 4G</a>&nbsp;thay v&igrave; OPPO A59 5G vốn được ra mắt v&agrave;o th&aacute;ng 12 năm ngo&aacute;i.</p>\r\n', '<h2>&nbsp;</h2>\r\n\r\n<p>OPPO A60 đ&atilde; được ph&aacute;t hiện trong Google Play Console v&agrave; như thường lệ, danh s&aacute;ch tr&ecirc;n đ&atilde; tiết lộ một số th&ocirc;ng số kỹ thuật của m&aacute;y, bao gồm cả th&ocirc;ng số quan trọng nhất &ndash; thiết bị sẽ được trang bị chip Snapdragon 680, con chip hiện đang trang bị tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a78\" target=\"_blank\">OPPO A78</a>&nbsp;v&agrave; kh&ocirc;ng c&oacute; khả năng kết nối 5G.</p>\r\n\r\n<p><img alt=\"OPPO A78\" src=\"https://cdn.tgdd.vn/News/1564717/oppo-a78-25-1280x720.jpg\" /></p>\r\n\r\n<p>OPPO A60 cũng đi k&egrave;m với 8 GB RAM v&agrave; m&agrave;n h&igrave;nh của m&aacute;y sẽ c&oacute; k&iacute;ch thước 6.7 inch c&ugrave;ng độ ph&acirc;n giải 720 &times; 1.604 pixel, một bước thụt l&ugrave;i so với OPPO A58 4G. Tất nhi&ecirc;n, điện thoại mới sẽ chạy Android 14 với ColorOS 14 ngay khi ra mắt.</p>\r\n\r\n<p>Chứng nhận TUV Rheinland gần đ&acirc;y cũng đ&atilde; tiết lộ rằng OPPO A60 sẽ c&oacute; pin 5.000 mAh, hỗ trợ sạc nhanh c&oacute; d&acirc;y 45 W. Về camera, m&aacute;y sẽ c&oacute; camera ch&iacute;nh ph&iacute;a sau 50 MP với khẩu độ f/1.9 v&agrave; camera selfie 8 MP với khẩu độ f/2.0.</p>\r\n\r\n<p><img alt=\"OPPO A60 thông số\" src=\"https://cdn.tgdd.vn/News/1564717/MSPO1-1200x769.jpeg\" /></p>\r\n\r\n<p>C&aacute;c th&ocirc;ng số kh&aacute;c của m&aacute;y hiện vẫn chưa được tiết lộ, nhưng với việc đạt được loạt chứng nhận quan trọng kể tr&ecirc;n. Ch&uacute;ng ta c&oacute; thể mong đợi nhiều th&ocirc;ng tin hơn về c&aacute;c th&ocirc;ng số, thời điểm ra mắt của OPPO A60 trong thời gian tới</p>\r\n', 1, '1713421418_baiviet2.png', '2024-04-18 13:23:38', 'Tin tức công nghệ'),
(10, 'Đây là bằng chứng cho thấy PS5 Pro sẽ là phiên bản nhảy vọt về mặt đồ họa', '<p>Tương tự như chiến lược PS4, PS5 Pro được cho l&agrave; đang được ph&aacute;t triển v&agrave; sẽ sớm được cho ra mắt. Theo The Verge, c&aacute;c th&ocirc;ng số kỹ thuật được đồn đo&aacute;n cho m&aacute;y chơi game n&agrave;y cho thấy c&oacute; GPU mạnh hơn v&agrave; CPU nhanh hơn một ch&uacute;t, đồng thời Sony được cho l&agrave; đang khuyến kh&iacute;ch c&aacute;c nh&agrave; ph&aacute;t triển &aacute;p dụng nhiều t&iacute;nh năng Ray Tracing hơn trong tr&ograve; chơi của họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Hệ thống n&agrave;y sẽ được trang bị ổ cứng nhiều hơn v&agrave; nhanh hơn, c&ugrave;ng với khả năng render GPU được cải thiện được cho l&agrave; &quot;nhanh hơn khoảng 45%&quot; so với PS5 ti&ecirc;u chuẩn, theo danh s&aacute;ch đầy đủ c&aacute;c th&ocirc;ng số kỹ thuật trong t&agrave;i liệu d&agrave;nh cho nh&agrave; ph&aacute;t triển PS5 Pro m&agrave; The Verge đ&atilde; đưa tin.</p>\r\n\r\n<p>Nh&igrave;n chung, c&oacute; th&ocirc;ng tin cho rằng PS5 Pro sẽ c&oacute; GPU được cải thiện đ&aacute;ng kể v&agrave; mặc d&ugrave; CPU sẽ giống như PS5 ti&ecirc;u chuẩn nhưng sẽ được hưởng lợi từ chế độ mới nhắm đến xung nhịp CPU 3.85 GHz cải thiện khoảng 10%. Điều đ&aacute;ng lưu &yacute; ở đ&acirc;y l&agrave; c&aacute;c b&agrave;i b&aacute;o đ&atilde; n&oacute;i về &quot;chế độ ti&ecirc;u chuẩn&quot; ở xung nhịp 3.5 GHz hoặc &quot;chế độ xung nhịp CPU cao&quot; ở tốc độ 3.85 GHz để c&aacute;c nh&agrave; ph&aacute;t triển c&oacute; thể tận dụng.</p>\r\n\r\n<p><img alt=\"PS5 Pro dường như sẽ có tốc độ CPU và GPU nhanh hơn so với phiên bản tiêu chuẩn\" src=\"https://cdn.tgdd.vn/News/0/ps5pro-1280x853.jpg\" /></p>\r\n\r\n<p>Những thay đổi về bộ nhớ sẽ l&agrave;m cho PS5 Pro tăng 25% khoảng 576 GB/gi&acirc;y tr&ecirc;n hệ thống khi so s&aacute;nh với 448 GB/gi&acirc;y của PS5 ti&ecirc;u chuẩn, v&agrave; c&ocirc;ng nghệ PlayStation Spectral Super Resolution (PSSR) mới của Sony sẽ đ&oacute;ng vai tr&ograve; n&acirc;ng cấp giải ph&aacute;p cho c&aacute;c tr&ograve; chơi đ&ograve;i hỏi chất lượng h&igrave;nh ảnh khắt khe.</p>\r\n\r\n<p>C&ocirc;ng nghệ n&agrave;y tương tự như DLSS của Nvidia v&agrave; FSR của AMD để cải thiện tốc độ khung h&igrave;nh m&agrave; kh&ocirc;ng ảnh hưởng nhiều đến chất lượng h&igrave;nh ảnh. Sony được cho l&agrave; đ&atilde; x&acirc;y dựng một &quot;kiến tr&uacute;c t&ugrave;y chỉnh cho m&aacute;y học&quot; tr&ecirc;n PS5 Pro, hỗ trợ 300 TOPS t&iacute;nh to&aacute;n 8 bit.</p>\r\n\r\n<p><img alt=\"PS5 Pro hứa hẹn sẽ hỗ trợ nâng cấp hình ảnh trong trờ chơi với công nghệ PSSR\" src=\"https://cdn.tgdd.vn/News/0/hinhanh-1280x720.jpg\" /></p>\r\n\r\n<p>The Verge n&oacute;i th&ecirc;m rằng nếu c&aacute;c nh&agrave; ph&aacute;t triển c&oacute; thể chuẩn bị sẵn tr&ograve; chơi của họ kịp thời th&igrave; PS5 Pro sẽ ra mắt v&agrave;o cuối năm nay. Digital Foundry cũng đ&atilde; ph&acirc;n t&iacute;ch một số r&ograve; rỉ gần đ&acirc;y, với một trong những điểm đ&aacute;ng ch&uacute; &yacute; ch&iacute;nh l&agrave; thiết bị được đồn đo&aacute;n l&agrave; sẽ c&oacute; tốc độ khung h&igrave;nh cao hơn, chất lượng h&igrave;nh ảnh được n&acirc;ng cao đ&aacute;ng kể v&agrave; c&aacute;c t&iacute;nh năng Ray Tracing được cải thiện.</p>\r\n\r\n<p>Tin tức n&agrave;y xuất hiện kh&ocirc;ng l&acirc;u sau khi Sony sửa đổi dự b&aacute;o doanh số b&aacute;n h&agrave;ng cho năm t&agrave;i ch&iacute;nh kết th&uacute;c v&agrave;o th&aacute;ng 3, cho biết họ dự kiến ​​sẽ b&aacute;n được 21 triệu m&aacute;y chơi game PS5 v&agrave;o cuối giai đoạn đ&oacute;. Th&ocirc;ng b&aacute;o n&agrave;y đ&atilde; l&agrave;m giảm 10 tỷ USD gi&aacute; trị cổ phiếu của c&ocirc;ng ty v&agrave; Sony tiết lộ rằng sẽ kh&ocirc;ng c&oacute; dự &aacute;n &quot;lớn&quot; mới n&agrave;o được ph&aacute;t h&agrave;nh cho đến &iacute;t nhất l&agrave; th&aacute;ng 4 năm 2025.</p>\r\n', 1, '1713421575_baiviet3.png', '2024-04-18 13:26:15', 'Tin tức công nghệ'),
(11, 'Dòng Google Pixel 9 và Pixel Fold 2 sẽ hỗ trợ liên lạc thông qua vệ tinh', '<p>D&ograve;ng Google Pixel 9, Pixel Fold 2 dự kiến ​​ra mắt v&agrave;o cuối năm nay, c&oacute; thể giới thiệu một t&iacute;nh năng chưa từng c&oacute; tr&ecirc;n c&aacute;c&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;Pixel trước đ&acirc;y: Li&ecirc;n lạc qua vệ tin</p>\r\n', '<p>Theo Android Authority, tr&iacute;ch dẫn một người trong cuộc của Google, Pixel 9 sẽ sử dụng&nbsp;<a href=\"https://www.thegioididong.com/samsung\" target=\"_blank\">Samsung</a>&nbsp;Modem 5400 mới, cho ph&eacute;p n&oacute; kết nối với vệ tinh th&ocirc;ng qua mạng 5G phi mặt đất (NTN). Điều n&agrave;y c&oacute; nghĩa l&agrave; khả năng gửi tin nhắn khẩn cấp ở những địa điểm xa nơi kh&ocirc;ng c&oacute; dịch vụ di động.</p>\r\n\r\n<p>Dịch vụ n&agrave;y được cho l&agrave; ban đầu được cung cấp bởi nh&agrave; mạng T-Mobile, tận dụng hệ thống Starlink &ldquo;Direct to cell&rdquo; của SpaceX. Ban đầu, người d&ugrave;ng sẽ c&oacute; thể gửi tin nhắn văn bản nhưng kh&ocirc;ng thể thực hiện cuộc gọi.</p>\r\n\r\n<p><img alt=\"Direct to Cell\" src=\"https://cdn.tgdd.vn/News/1564625/DTCE1-1280x720.jpg\" /></p>\r\n\r\n<p>SpaceX gần đ&acirc;y đ&atilde; nhận được sự chấp thuận của FCC để mở rộng thử nghiệm Starlink di động tr&ecirc;n khắp Hoa Kỳ, bao gồm c&aacute;c thử nghiệm tr&ecirc;n to&agrave;n tiểu bang tại một số tiểu bang v&agrave; chuẩn bị cho thử nghiệm to&agrave;n cầu.</p>\r\n\r\n<p>Đầu th&aacute;ng 3, SpaceX đ&atilde; ho&agrave;n th&agrave;nh th&agrave;nh c&ocirc;ng c&aacute;c cuộc thử nghiệm dịch vụ Starlink di động của m&igrave;nh bằng c&aacute;ch sử dụng điện thoại nguy&ecirc;n bản của c&aacute;c nh&agrave; sản xuất h&agrave;ng đầu, bao gồm cả d&ograve;ng Pixel.</p>\r\n\r\n<p><img alt=\"Pixel 9\" src=\"https://cdn.tgdd.vn/News/1564625/Pixel-9-Pro-1280x720.jpg\" /></p>\r\n\r\n<p>Android Authority b&aacute;o c&aacute;o rằng t&iacute;nh năng nhắn tin khẩn cấp của Pixel 9 sẽ phản hồi c&aacute;c lời nhắc cụ thể, cho ph&eacute;p c&aacute;c dịch vụ khẩn cấp hợp l&yacute; h&oacute;a việc li&ecirc;n lạc v&agrave; cung cấp hỗ trợ nhanh hơn. Chức năng n&agrave;y tương tự t&iacute;nh năng SOS khẩn cấp của Apple tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a>.</p>\r\n\r\n<p>V&agrave;o th&aacute;ng 2, Google đ&atilde; c&ocirc;ng bố hợp t&aacute;c với AST SpaceMobile để n&acirc;ng cao kết nối vệ tinh cho c&aacute;c thiết bị Android. Sự hợp t&aacute;c n&agrave;y chứng kiến ​​Google c&ugrave;ng với c&aacute;c nh&agrave; mạng di động AT&amp;T v&agrave; Vodafone đầu tư 110 triệu USD v&agrave;o AST SpaceMobile, một c&ocirc;ng ty đang ph&aacute;t triển c&aacute;c th&aacute;p di động quay quanh kh&ocirc;ng gian.</p>\r\n\r\n<p><img alt=\"Pixel Fold 2\" src=\"https://cdn.tgdd.vn/News/1564625/pixel-fold-2-1280x960.jpg\" /></p>\r\n\r\n<p>Bản xem trước thứ hai d&agrave;nh cho nh&agrave; ph&aacute;t triển của Android 15 đ&atilde; củng cố th&ecirc;m khả năng hỗ trợ hiện c&oacute; cho chuyển v&ugrave;ng vệ tinh.</p>\r\n\r\n<p>Ngo&agrave;i d&ograve;ng Pixel 9, Android Authority b&aacute;o c&aacute;o rằng kết nối vệ tinh dự kiến ​​cũng sẽ được đưa v&agrave;o thế hệ tiếp theo của Pixel Fold. Theo c&aacute;c b&aacute;o c&aacute;o trước đ&oacute;, Google Pixel 9 v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/google-pixel-9-pro\" target=\"_blank\">Google Pixel 9 Pro</a>&nbsp;c&ugrave;ng Pixel Fold 2 dự kiến đều được trang bị chip Tensor G4. Ngo&agrave;i ra, Pixel Fold 2 cũng được cho l&agrave; sẽ c&oacute; m&agrave;n h&igrave;nh gập 8.02 inch v&agrave; m&agrave;n h&igrave;nh ngo&agrave;i 6.29 inch.</p>\r\n', 1, '1713421964_baiviet4.png', '2024-04-18 13:32:44', 'Tin tức công nghệ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `anh_banner` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `anh_banner`, `thutu`) VALUES
(4, '1647134355_ROG-Falchion-1.jpg', 1),
(5, '1647134644_banner-bo-luu-dien.jpg', 2),
(6, '1649770949_tai_xuong(3).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` int(11) NOT NULL,
  `tenbrand` varchar(255) NOT NULL,
  `hinhanhbrand` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `tenbrand`, `hinhanhbrand`, `trangthai`) VALUES
(11, 'Gigabytes', '1646909705_logo2.png', 1),
(14, 'Kingston', '1648649025_Kingston-HyperX-logo-edit-removebg-preview.png', 1),
(16, 'Thương hiệu khác', '1713146075_images.png', 1),
(17, 'Fujitsu', '1713146938_Fujitsu-Logo.svg.png', 1),
(18, 'MSI', '1713147079_Msi_logo.png', 1),
(19, 'Lenovo', '1713147544_lenovologo2015.png', 1),
(20, 'Apple', '1713147930_Apple_logo_black.svg.png', 1),
(21, 'Samsung', '1713148029_Samsung_wordmark.svg.png', 1),
(22, 'Prolink', '1713148178_Logo-ProLink.png', 1),
(23, 'Elecome', '1713148323_images (1).png', 1),
(24, 'Logitech', '1713148393_Logitech_logo.svg.png', 1),
(25, 'Zadez', '1713148523_', 1),
(26, 'Dell', '1713148560_Dell_logo_2016.svg.png', 1),
(27, 'Asus', '1713148644_logo-Asus.jpg', 1),
(28, 'HP', '1713148686_HP-Logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `cart_status`, `cart_date`) VALUES
(139, 139, 0, '2024-04-10'),
(141, 139, 0, '2024-04-11'),
(142, 139, 0, '2024-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `id_sanpham`, `soluongmua`) VALUES
(139, 43, 1),
(139, 54, 1),
(139, 55, 1),
(141, 54, 1),
(141, 55, 1),
(142, 43, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitietphieunhap`
--

CREATE TABLE `tbl_chitietphieunhap` (
  `id_phieunhap` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongnhap` int(11) NOT NULL,
  `dongia` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_chitietphieunhap`
--

INSERT INTO `tbl_chitietphieunhap` (`id_phieunhap`, `id_sanpham`, `soluongnhap`, `dongia`) VALUES
(20, 43, 2, 1000000),
(20, 54, 4, 500000),
(21, 43, 2, 21000000),
(21, 54, 3, 500000),
(29, 43, 3, 10000),
(29, 54, 2, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `noidungcmt` text NOT NULL,
  `time_cmt` datetime NOT NULL DEFAULT current_timestamp(),
  `tinhtrang` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaisp`
--

CREATE TABLE `tbl_loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisp` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_loaisp`
--

INSERT INTO `tbl_loaisp` (`id_loaisp`, `tenloaisp`, `trangthai`) VALUES
(16, 'Phụ Kiện Máy Tính', 1),
(18, 'Laptop & PC', 1),
(19, 'SmartPhone', 1),
(20, 'Phụ Kiện', 1),
(21, 'Loại sản phẩm khác', 1),
(22, 'Bàn phím', 1),
(23, 'Chuột máy tính', 1),
(24, 'Màn hinh ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhacungcap`
--

CREATE TABLE `tbl_nhacungcap` (
  `mancc` int(11) NOT NULL,
  `tenncc` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `trangthai` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_nhacungcap`
--

INSERT INTO `tbl_nhacungcap` (`mancc`, `tenncc`, `diachi`, `trangthai`) VALUES
(1, 'CTY Phụ kiện công nghệ ', '106 Truong Chinh, Ward Tan Hung Thuan, District 12', 1),
(7, 'CTY CDF 1', '207 Hai Thuong Lan Ong Street, Ward 13, District 5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phieunhap`
--

CREATE TABLE `tbl_phieunhap` (
  `id_phieunhap` int(11) NOT NULL,
  `thoigian` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_nhacungcap` int(11) NOT NULL,
  `tongtien` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_phieunhap`
--

INSERT INTO `tbl_phieunhap` (`id_phieunhap`, `thoigian`, `id_user`, `id_nhacungcap`, `tongtien`) VALUES
(20, '2024-04-08 19:39:51', 147, 7, 4000000),
(21, '2024-04-09 13:01:48', 147, 1, 43500000),
(29, '2024-04-15 00:00:00', 147, 1, 20030000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `sanxuat` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `thongso` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `luongmua` int(11) NOT NULL DEFAULT 0,
  `idloaisp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `sanxuat`, `hinhanh`, `tomtat`, `noidung`, `thongso`, `tinhtrang`, `id_brand`, `luongmua`, `idloaisp`) VALUES
(43, 'Laptop Asus VivoBook A515EP-BQ498T ', ' LTAU599', '18599000', 5, 'Viêt Nam', '1647965406_60640_laptop_asus_vivobook_a515ep_bq498t_bac_6-removebg-preview.png', '<ul>\n	<li>CPU: Intel Core i5 1135G7</li>\n	<li>RAM: 8GB (trống 1 khe ram)</li>\n	<li>Ổ cứng: 512GB SSD (c&oacute; thể lắp th&ecirc;m ổ 2.5)</li>\n	<li>VGA: Nvidia MX330 2GB</li>\n	<li>M&agrave;n h&igrave;nh: 15.6 inch FHD</li>\n	<li>HĐH: Win 10</li>\n</ul>\n', '<h3>Cấu h&igrave;nh xịn</h3>\r\n\r\n<p><a href=\"https://www.hanoicomputer.vn/laptop-asus-vivobook?cpu-laptop=intel-core-i5-1-1-1-1\">Laptop Asus VivoBook core I5</a>&nbsp;trang bị vi xử l&yacute; Intel&reg; Core&trade; i thế hệ 11 c&ugrave;ng với bộ nhớ trong 4 hoặc 8GB RAM cung cấp khả năng hỗ trợ tốt mọi ứng dụng về văn ph&ograve;ng như Word, Excel, PowerPoint. B&ecirc;n cạnh đ&oacute; m&aacute;y c&oacute; thể xử l&iacute; Photoshop với nhu cầu cắt gh&eacute;p đơn giản, kh&ocirc;ng chuy&ecirc;n. Ngo&agrave;i ra m&aacute;y c&ograve;n được trang bị ổ ssd tăng tốc độ xử l&yacute; file v&agrave; boot win cực nhanh.</p>\r\n\r\n<p><img alt=\"Laptop Asus VivoBook A515EP-1\" src=\"https://hanoicomputercdn.com/media/product/60640_laptop_asus_vivobook_a515ep_bq498t_bac_3.png\" style=\"height:850px; width:850px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>M&agrave;n h&igrave;nh</h3>\r\n\r\n<p>M&agrave;n h&igrave;nh NanoEdge viền si&ecirc;u mỏng mang lại trải nghiệm h&igrave;nh ảnh đắm ch&igrave;m, kh&ocirc;ng gian h&igrave;nh ảnh được mở rộng bằng c&aacute;ch mang đến m&agrave;n h&igrave;nh lớn hơn trong một khung m&aacute;y nhỏ hơn. M&agrave;n h&igrave;nh Full HD với g&oacute;c nh&igrave;n rộng v&agrave; khả năng t&aacute;i tạo m&agrave;u sắc vượt trội đem lại h&igrave;nh ảnh ch&acirc;n thực, sống động</p>\r\n\r\n<p><img alt=\"Laptop Asus VivoBook A515EP-2\" src=\"https://hanoicomputercdn.com/media/product/60640_laptop_asus_vivobook_a515ep_bq498t_bac_6.png\" style=\"height:850px; width:850px\" /></p>\r\n\r\n<h3>Bảo mật&nbsp;</h3>\r\n\r\n<p>Truy cập ASUS VivoBook 15 chưa bao giờ dễ hơn v&agrave; bảo mật hơn. Với cảm biến v&acirc;n tay t&iacute;ch hợp tại b&agrave;n di chuột v&agrave; Windows Hello, bạn kh&ocirc;ng cần phải g&otilde; mật khẩu cho mỗi lần đăng nhập &ndash; chỉ cần một chạm để mở m&aacute;y t&iacute;nh!</p>\r\n\r\n<p>B&agrave;n ph&iacute;m fullsize được thiết kế nguy&ecirc;n khối v&agrave; h&agrave;nh tr&igrave;nh ph&iacute;m 1.4mm cho trải nghiệm đ&aacute;nh m&aacute;y thoải m&aacute;i, ph&ugrave; hợp cho mọi t&aacute;c vụ văn ph&ograve;ng.</p>\r\n\r\n<p><img alt=\"Laptop Asus VivoBook A515EP-3\" src=\"https://hanoicomputercdn.com/media/product/60640_laptop_asus_vivobook_a515ep_bq498t_bac_5.png\" style=\"height:850px; width:850px\" /></p>\r\n\r\n<h3>Cổng cắm đa dạng</h3>\r\n\r\n<p>VivoBook 15 được trang bị cổng USB 3.2 Gen 1 Type-C&trade; đảo chiều cho việc kết nối c&aacute;c thiết bị dễ d&agrave;ng hơn. M&aacute;y cũng c&oacute; cổng USB 3.2 Gen 1, USB 2.0, HDMI v&agrave; khe đọc thẻ microSD &ndash; để việc kết nối với c&aacute;c thiết bị ngoại vi, m&agrave;n h&igrave;nh, m&aacute;y chiếu thuận tiện hơn.</p>\r\n\r\n<p><img alt=\"Laptop Asus VivoBook A515EP-4\" src=\"https://hanoicomputercdn.com/media/product/60640_laptop_asus_vivobook_a515ep_bq498t_bac_1.png\" style=\"height:850px; width:850px\" /></p>\r\n', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>H&atilde;ng Sản xuất</td>\r\n			<td>ASUS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chủng Loại&nbsp;</td>\r\n			<td>M3401QA-KM040W</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Part-number</td>\r\n			<td>Quiet-blue</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>M&agrave;u Sắc</td>\r\n			<td>Blue &amp;&nbsp; Black</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset</td>\r\n			<td>AMD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ Nhớ Trong</td>\r\n			<td>8GB DDR4 on board</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 11, 4, 18),
(54, 'Keyboard Gigabyte Aorus K1 RGB - Red switch', 'KBGI033', '2179000', 11, 'Trung Quốc', '1647965500_58922_keyboard_gigabyte_aorus_k1_rgb_usb_red_sw_0004_5-removebg-preview.png', '<ul>\r\n	<li>Keyboard Gigabyte Aorus K1 RGB</li>\r\n	<li>Thiết kế layout Fullsize 104 ph&iacute;m</li>\r\n	<li>Sử dụng switch Cherry MX cao cấp</li>\r\n	<li>T&iacute;ch hợp ph&iacute;m Media tiện lợi</li>\r\n	<li>Led RGB Fusion 2.0, đồng bộ led với c&aacute;c thiết bị linh kiện Aorus kh&aacute;c</li>\r\n</ul>\r\n', '<h3>Switch Cherry MX cao cấp</h3>\r\n\r\n<p>Cherry Red Switch mang lại cảm gi&aacute;c phản hồi của ph&iacute;m vượt trội v&agrave; lực nhấn tối ưu. H&agrave;nh tr&igrave;nh ph&iacute;m 2mm, kh&ocirc;ng c&oacute; khấc cản gi&uacute;p cải thiện thời gian phản hồi cũng như giảm thiểu tiếng ồn</p>\r\n\r\n<p><img alt=\"Keyboard Gigabyte Aorus K1 RGB (USB/Red sw) sử dụng switch Cherry MX cao cấp\" src=\"https://hanoicomputercdn.com/media/lib/05-05-2021/switch-cua-keyboard-gigabyte-aorus-k1-rgb-usb-red-sw.png\" style=\"width:100%\" /></p>\r\n\r\n<h3>Led RGB Fusion</h3>\r\n\r\n<p>Với dải led 16.7 triệu m&agrave;u v&agrave; đi k&egrave;m nhiều hiệu ứng &aacute;nh s&aacute;ng, c&oacute; thể c&agrave;i đặt cho từng ph&iacute;m hoặc đồng bộ hiệu ứng với c&aacute;c thiết bị Aorus kh&aacute;c</p>\r\n\r\n<p><img alt=\"Keyboard Gigabyte Aorus K1 RGB (USB/Red sw) tích hợp led RGB Fusion 2.0\" src=\"https://hanoicomputercdn.com/media/lib/05-05-2021/led-cua-keyboard-gigabyte-aorus-k1-rgb-usb-red-sw.png\" style=\"width:100%\" /></p>\r\n\r\n<h3>C&aacute;c ph&iacute;m c&oacute; thể lập tr&igrave;nh</h3>\r\n\r\n<p>C&agrave;i đặt chức năng cho ph&iacute;m hoặc g&aacute;n Macro, tổ hợp ph&iacute;m bất kỳ m&agrave; bạn muốn. Với bộ nhớ được t&iacute;ch hợp b&ecirc;n trong, bạn c&oacute; thể thiết lập c&aacute;c cấu h&igrave;nh gần như kh&ocirc;ng giới hạn.</p>\r\n\r\n<p><img alt=\"Keyboard Gigabyte Aorus K1 RGB (USB/Red sw) có thể gán macro dễ dàng\" src=\"https://hanoicomputercdn.com/media/lib/05-05-2021/macro-cua-keyboard-gigabyte-aorus-k1-rgb-usb-red-sw.png\" style=\"width:100%\" /></p>\r\n\r\n<h3>Anti-Ghosting</h3>\r\n\r\n<p>Aorus K1 cung cấp t&iacute;nh năng Anti-Ghosting cực k&igrave; hữu dụng, đảm bảo cho c&aacute;c tổ hợp ph&iacute;m bấm nhiều v&agrave; phức tạp được thực hiện 1 c&aacute;ch ch&iacute;nh x&aacute;c nhất. Hỗ trợ đồng thời 64 ph&iacute;m c&ugrave;ng l&uacute;c với kết nối USB</p>\r\n\r\n<p><img alt=\"Keyboard Gigabyte Aorus K1 RGB (USB/Red sw) trang bị tính năng anti-ghosting hữu ích\" src=\"https://hanoicomputercdn.com/media/lib/05-05-2021/tinh-nang-anti-ghosting-cua-keyboard-gigabyte-aorus-k1-rgb-usb-red-sw.png\" style=\"width:100%\" /></p>\r\n\r\n<h3>On-The-Fly</h3>\r\n\r\n<p>C&aacute;c ph&iacute;m chức năng được t&iacute;ch hợp thuận tiện cung cấp khả năng điều khiển đa phương tiện dễ d&agrave;ng v&agrave; cho ph&eacute;p bạn tinh chỉnh đ&egrave;n led một c&aacute;ch thoải m&aacute;i</p>\r\n\r\n<p><img alt=\"Keyboard Gigabyte Aorus K1 RGB (USB/Red sw) tích hợp phím chức năng tiện lợi\" src=\"https://hanoicomputercdn.com/media/lib/05-05-2021/phim-media-cua-keyboard-gigabyte-aorus-k1-rgb-usb-red-sw.png\" style=\"width:100%\" /></p>\r\n', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Switch</td>\r\n			<td>Red Switch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất Liệu</td>\r\n			<td>Sắt Fe56</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Led</td>\r\n			<td>RGB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số Ph&iacute;m</td>\r\n			<td>Fullsize 104 ph&iacute;m</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 11, 4, 16),
(55, 'Tai nghe Kingston HyperX Cloud II Gaming  Red (KHX-HSCP-RD)', 'TNKT003', '2529000', 9, 'Nhật Bản', '1648649839_27422_tai_nghe_kingston_hyperx_cloud_2_gaming_red_0000_1-removebg-preview.png', '<ul>\r\n	<li>Phi&ecirc;n bản Cloud 2 II với c&ocirc;ng nghệ giả lập &acirc;m thanh v&ograve;m 7.1</li>\r\n	<li>Sử dụng chiếc Soundcard 7.1, chỉ cần cắm v&agrave; sử dụng</li>\r\n	<li>Kh&ocirc;ng cần Driver điều chỉnh</li>\r\n	<li>Thiết kế cứng c&aacute;p, cảm gi&aacute;c đeo thoải m&aacute;i trong nhiều giờ</li>\r\n	<li>Chất &acirc;m thi&ecirc;n s&aacute;ng, chi tiết tốt, ph&ugrave; hợp với c&aacute;c game thi đấu ESPORTS</li>\r\n	<li>Microphone c&oacute; thể được th&aacute;o rời thuận tiện</li>\r\n	<li>Được khuy&ecirc;n d&ugrave;ng bởi c&aacute;c game thủ CS:GO chuy&ecirc;n nghiệp</li>\r\n</ul>\r\n', '<p>Trong một v&agrave;i năm gần đ&acirc;y, d&ograve;ng sản phẩm HyperX của Kingston đang l&agrave;m mưa l&agrave;m gi&oacute; tr&ecirc;n thị trường gaming gear Việt Nam. Vốn chỉ l&agrave; một thương hiệu chuy&ecirc;n về thiết bị lưu trữ như thẻ nhớ,&nbsp;<a href=\"https://www.hanoicomputer.vn/ram-bo-nho-trong/c32.html\" target=\"_blank\">SSD</a>,&nbsp;<a href=\"https://www.hanoicomputer.vn/ram-bo-nho-trong/c32.html\" target=\"_blank\">RAM</a>.. những tưởng khi lấn s&acirc;n sang mảng phụ kiện gaming n&agrave;y, Kingston sẽ gặp phải kh&ocirc;ng &iacute;t kh&oacute; khăn. Nhưng với chất lượng của m&igrave;nh, d&ograve;ng sản phẩm n&agrave;y của Kingston nhanh ch&oacute;ng tạo dựng được thương hiệu trong cộng đồng game thủ đặc biệt l&agrave; mảng tai nghe. Mới đ&acirc;y, sản phẩm&nbsp;<strong>Tai nghe Kingston HyperX Cloud II Gaming Red</strong>&nbsp;đ&atilde; được ra mắt. Đ&acirc;y l&agrave; một mẫu tai nghe chuy&ecirc;n dụng cho game thủ, v&agrave; được đ&aacute;nh gi&aacute; l&agrave; xứng đ&aacute;ng đồng tiền b&aacute;t gạo.</p>\r\n\r\n<h3>Thiết kế giữ nguy&ecirc;n so với phi&ecirc;n bản cũ</h3>\r\n\r\n<p>Nếu&nbsp;c&oacute; theo d&otilde;i về tin tức của d&ograve;ng tai nghe Kingston, anh em c&oacute; thể thấy rằng&nbsp;<a href=\"https://www.hanoicomputer.vn/tai-nghe-kingston-hyperx-cloud-2-gaming-red/p27422.html\">Kingston HyperX Cloud II Gaming</a>&nbsp;c&oacute; thiết kế kh&ocirc;ng kh&aacute;c mấy so với người anh tiền nhiệm HyperX Cloud. Vốn dĩ thiết kế ban đầu được người d&ugrave;ng đ&oacute;n nhận nhiệt t&igrave;nh, do vậy ở phi&ecirc;n bản n&agrave;y Kingston cũng chả tội g&igrave; m&agrave; phải thay đổi thiết kế cũ cả. Về mặt cơ bản,&nbsp;Kingston HyperX Cloud II vẫn c&oacute; Micro c&oacute; thể th&aacute;o rời để tăng t&iacute;nh khả dụng cho từng mục đ&iacute;ch của bạn.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/tainghekingstonhyperxcloudiigamingred_1.jpg\" style=\"height:478px; width:850px\" /></p>\r\n\r\n<p><strong>Cloud II</strong>&nbsp;được trang bị c&aacute;p kết nối d&agrave;i 1m với đầu jack 3.5mm. Nếu cảm thấy chiều d&agrave;i của d&acirc;y hơi ngắn, bạn c&oacute; thể cắm tai nghe qua Sound Card 7.1 được trang bị sẵn k&egrave;m với sản phẩm. Với chiếc Sound card USB được Kingston ưu &aacute;i cho chiều d&agrave;i l&ecirc;n tới 2m bạn cộng với 1m c&aacute;p từ tai nghe bạn đ&atilde; c&oacute; tổng chiều d&agrave;i sử dụng l&ecirc;n tới 3m, thoải m&aacute;i cho bạn sử dụng trong kh&ocirc;ng gian chơi game của m&igrave;nh.</p>\r\n\r\n<p><strong>HyperX Cloud II</strong>&nbsp;c&oacute; thiết kế over-ear mang lại cảm gi&aacute;c thoải m&aacute;i cho người sử dụng khi đ&ocirc;i tai của bạn sẽ nằm gọn b&ecirc;n trong ốp l&oacute;t tai cũng như hạn chế tối đa ảnh hưởng của tiếng ồn b&ecirc;n ngo&agrave;i. Với thiết kế khung nh&ocirc;m v&agrave; c&aacute;c ốp đệm bằng da kh&ocirc;ng chỉ đem lại cảm gi&aacute;c cứng c&aacute;p m&agrave; lại v&ocirc; c&ugrave;ng sang trọng cho sản phẩm n&agrave;y. V&agrave; một điểm cộng nữa l&agrave; việc microphone c&oacute; thể th&aacute;o rời tr&aacute;nh vướng v&iacute;u khi kh&ocirc;ng phải sử dụng đến mic.</p>\r\n\r\n<p>Trong hộp, tai nghe&nbsp;<strong>Kingston HyperX Cloud II Gaming</strong>&nbsp;c&ograve;n được khuyến m&atilde;i th&ecirc;m một cặp đệm tai nghe dự ph&ograve;ng với chất liệu giả da si&ecirc;u mềm. Theo m&igrave;nh đ&aacute;nh gi&aacute; th&igrave; phần ốp tai n&agrave;y của&nbsp;HyperX Cloud II&nbsp;tốt hơn nhiều so với c&aacute;c loại đệm nhung đi k&egrave;m với mẫu HyperX Cloud trước đ&acirc;y. Phần đệm trong tai được l&agrave;m với dạng m&uacute;t bọt rất thoải m&aacute;i&nbsp;kể cả khi sử dụng&nbsp;trong thời gian d&agrave;i. N&oacute;i t&oacute;m lại, HyperX Cloud II c&oacute; thiết kế v&ocirc; c&ugrave;ng đơn giản nhưng v&ocirc; c&ugrave;ng ph&ugrave; hợp với mọi đối tượng game thủ. Ngo&agrave;i đệm tai chất lượng, HyperX Cloud II vẫn giữ nguy&ecirc;n thiết kế với phần vỏ bằng nhựa cao cấp v&agrave; khung kim loại b&ecirc;n trong.&nbsp;Sound card&nbsp;USB cũng được l&agrave;m bằng nhựa. N&oacute; c&oacute; một n&uacute;t để k&iacute;ch hoạt &acirc;m thanh 7.1 v&agrave; c&aacute;c n&uacute;t điều chỉnh &acirc;m lượng ri&ecirc;ng cho tai nghe v&agrave; micr&ocirc;.</p>\r\n\r\n<h3>&Acirc;m thanh v&ograve;m Virtual 7.1</h3>\r\n\r\n<p>Soundcard 7.1 ch&iacute;nh l&agrave; điểm kh&aacute;c biệt giữa Cloud v&agrave; Cloud II. Ở phi&ecirc;n bản Cloud II khi sử dụng k&egrave;m chiếc soundcard n&agrave;y sẽ đem lại một trải nghiệm &ldquo;đ&atilde; hay lại c&ograve;n hay hơn&rdquo; so với việc sử dụng cổng cắm 3.5mm b&igrave;nh thường. Theo như Kingston th&igrave; chiếc soundcard 7.1 của h&atilde;ng tạo ra được tối ưu cho c&aacute;c d&ograve;ng game đặc biệt l&agrave; d&ograve;ng game FPS. Với c&aacute;c tựa game bắn s&uacute;ng cơ bản như PUBG, CS-GO hay&nbsp;Battlefield 4, &acirc;m thanh v&ograve;m được xử l&yacute; qua Sound card n&agrave;y sẽ gi&uacute;p bạn x&aacute;c định ch&iacute;nh x&aacute;c vị tr&iacute; của kẻ th&ugrave;. &Acirc;m thanh của tiếng s&uacute;ng được tạo ra từ&nbsp;HyperX Cloud II nghe rất đanh v&agrave; chắc chắn nhờ &acirc;m bass mạnh mẽ. C&aacute;c vụ nổ từ bom, hay lựu đạn th&igrave; sống động như bạn đang chứng kiến ch&uacute;ng trong thực tế vậy.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/tainghekingstonhyperxcloudiigamingred_2.jpg\" style=\"height:397px; width:850px\" /></p>\r\n\r\n<p>&Acirc;m thanh v&ograve;m 7.1 của&nbsp;Kingston HyperX Cloud II cho trải nghiệm v&ocirc; c&ugrave;ng th&uacute; vị khi xem phim , đặc biệt l&agrave; những phim chứa đầy c&aacute;c cảnh h&agrave;nh động hard core. M&ocirc; phỏng &acirc;m thanh v&ograve;m kh&ocirc;ng c&oacute; nghĩa l&agrave; cho &acirc;m nhạc stereo. Điều đ&oacute; đồng nghĩa&nbsp;&nbsp;rằng, khả năng&nbsp;nghe&nbsp;nhạc của&nbsp;Cloud II cũng kh&ocirc;ng tệ.&nbsp;Về trải nghiệm nghe nhạc, m&igrave;nh&nbsp;thực sự th&iacute;ch mids punchy, những &acirc;m thanh trong dải tần số cao hơn l&agrave; hơi thiếu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Tai nghe Kingston HyperX Cloud 2 Gaming  Red (KHX-HSCP-RD) trang bị âm thanh vòm 7.1\" src=\"https://hanoicomputercdn.com/media/lib/27422_am-thanh-vom-cua-tai-nghe-kingston-hyperx-cloud-2-gaming-red.jpg\" style=\"width:800px\" /></p>\r\n', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>H&atilde;ng sản xuất</td>\r\n			<td>Kingston</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chủng Loại</td>\r\n			<td>HyperX Cloud2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn cắm hỗ trợ</td>\r\n			<td>3.5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MicroPhone</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Trở Kh&aacute;ng</td>\r\n			<td>60&Omega;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần Số</td>\r\n			<td>15-25kKhz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch cỡ mảng loa</td>\r\n			<td>53mm bằng nam ch&acirc;m Neodymium</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Trọng Lượng</td>\r\n			<td>320 &ndash; 350g</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh Năng Đặc Biệt</td>\r\n			<td>\r\n			<p>Đi k&egrave;m soundcard giả lập &acirc;m th&agrave;nh v&ograve;m 7.1.Chất lượng &acirc;m thanh tuyệt vời cho game v&agrave; nghe nhạc.C&oacute; thể sử dụng với PS4, Tablet v&agrave; Smartphone&Acirc;m treble s&aacute;ng, &acirc;m mid trong, bass vừa phải, th&iacute;ch hợp với nghe nhạc Pop, Trance, Dance, Metal</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 14, 4, 20),
(57, 'Laptop Fujitsu CH-9C13A1', '', '15990000', 1, 'Trung Quốc', '1713163085_anh1.png', '<ul>\r\n	<li>Thiết kế tinh tế, sang trọng k&iacute;ch thước nhỏ gọn với trọng lượng chỉ 999g</li>\r\n	<li>Bộ vi xử l&yacute; i5-1135G7 với sức mạnh ấn tượng, xử l&yacute; tốt mượt m&agrave; mọi t&aacute;c vụ</li>\r\n	<li>RAM 16GB c&oacute; thể hoạt động tốt ngay cả khi mở nhiều tab hoặc thiết kế đồ họa</li>\r\n	<li>Ổ cứng 512GB khởi động m&aacute;y nhanh trong t&iacute;c tắc, cho kh&ocirc;ng gian lưu trữ lớn</li>\r\n	<li>M&agrave;n h&igrave;nh 13.3 inch Full HD với độ ph&acirc;n giải 1920x1080 hiển thị h&igrave;nh ảnh sắc n&eacute;t</li>\r\n	<li>Được t&iacute;ch hợp hệ điều h&agrave;nh Windows 11 với giao diện th&acirc;n thiện, dễ sử dụng</li>\r\n	<li>Trang bị đầy đủ c&aacute;c cổng kết nối th&ocirc;ng dụng, như: USB, HDMI,Audio Combo,...</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Bạc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Fujitsu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>24 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/cpu-la-gi.html\" target=\"_blank\">Intel Core i5</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại CPU:</td>\r\n			<td>1135G7</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU tối đa:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại RAM:</td>\r\n			<td>LPDDR4X</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng RAM:</td>\r\n			<td>16 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ Bus RAM:</td>\r\n			<td>4266 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại ổ đĩa cứng:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/o-cung-ssd-la-gi-nhung-loai-o-cung-ssd-tren-laptop.html\" target=\"_blank\">SSD</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng ổ cứng:</td>\r\n			<td>512 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ xử l&yacute; đồ họa:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>FHD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>13.3 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>Full HD (1920 x 1080)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ &acirc;m thanh:</td>\r\n			<td>Stereo Speakers, x4 Digital mics</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn WiFi:</td>\r\n			<td>WIFI6 AX</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng USB:</td>\r\n			<td>x2 USB Type C, x1 USB Type A</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng HDMI:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera:</td>\r\n			<td>Có Webcam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu vỏ:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HĐH k&egrave;m theo m&aacute;y:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/windows-11-danh-gia.html\" target=\"_blank\">Win 11</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại Pin Laptop :</td>\r\n			<td>2-cell, 30 Wh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>0.99 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>307 x 207 x 8~15.8 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 17, 0, 18),
(58, 'Laptop MSI Katana 15', '', '25990000', 3, 'Trung Quốc', '1713165377_anh2.png', '<ul>\r\n	<li>Thiết kế c&aacute; t&iacute;nh, phong c&aacute;ch mạnh mẽ&nbsp;<a href=\"https://www.nguyenkim.com/laptop-gaming-la-gi-cac-dong-laptop-gaming-dang-mua-nhat-2022.html\">chuẩn Gaming</a>&nbsp;với b&agrave;n ph&iacute;m tuyệt đẹp</li>\r\n	<li>Vi xử l&yacute; Intel Core i7-13620H hiệu năng mạnh mẽ, học tập tốt, chơi game mượt</li>\r\n	<li>Card m&agrave;n h&igrave;nh NVIDIA GeForce RTX 4050 6GB cho hiệu ứng đồ họa ch&acirc;n thực</li>\r\n	<li>RAM DDR5 8GB đa nhiệm tốt, mở nhiều Tab khi l&agrave;m việc m&agrave; kh&ocirc;ng bị giật, lag</li>\r\n	<li>Ổ cứng 512GB lưu trữ được nhiều dữ liệu, khởi động m&aacute;y v&agrave; ứng dụng nhanh hơn</li>\r\n	<li>Tần số qu&eacute;t m&agrave;n h&igrave;nh 144Hz, h&igrave;nh ảnh chuyển động mượt, kh&ocirc;ng bị giật x&eacute; h&igrave;nh</li>\r\n	<li>M&agrave;n h&igrave;nh Full HD 15.6 inch kh&ocirc;ng gian hiển thị rộng r&atilde;i, m&agrave;u sắc sống động</li>\r\n	<li>Đắm ch&igrave;m trong thế giới &acirc;m thanh l&ocirc;i cuốn nhờ c&ocirc;ng nghệ Nahimic Audio</li>\r\n	<li><a href=\"https://www.nguyenkim.com/laptop-msi/\">Laptop MSI</a>&nbsp;trang bị đầy đủ cổng kết nối th&ocirc;ng dụng, đ&aacute;p ứng đa dạng nhu cầu</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>Katana 15 B13VEK-252VN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>MSI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>24 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/intel-core-i7-la-gi-thich-hop-chay-nhung-tac-vu-nao.html\" target=\"_blank\">Intel Core i7</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại CPU:</td>\r\n			<td>13620H</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ đệm:</td>\r\n			<td>24 MB Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU tối đa:</td>\r\n			<td>4.9 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại RAM:</td>\r\n			<td>DDR5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng RAM:</td>\r\n			<td>8 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ Bus RAM:</td>\r\n			<td>5200 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại ổ đĩa cứng:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/o-cung-ssd-la-gi-nhung-loai-o-cung-ssd-tren-laptop.html\" target=\"_blank\">SSD</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng ổ cứng:</td>\r\n			<td>512 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ xử l&yacute; đồ họa:</td>\r\n			<td>NVIDIA GeForce RTX 4050 6GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>Tấm nền IPS, 144Hz, 45%NTSC</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>15.6 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>Full HD (1920 x 1080)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ &acirc;m thanh:</td>\r\n			<td>Nahimic Audio</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn WiFi:</td>\r\n			<td>Wi-Fi 6 + Bluetooth v5.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn LAN:</td>\r\n			<td>1x RJ45 Gigabit LAN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng USB:</td>\r\n			<td>1x Type-C (USB3.2 Gen1 / DP); 2x Type-A USB3.2 Gen1; 1x Type-A USB2.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng HDMI:</td>\r\n			<td>1x HDMI&trade; 2.1 (8K @ 60Hz / 4K @ 120Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kết nối kh&aacute;c laptop:</td>\r\n			<td>1 x Mic-in/Headphone-out Combo Jack</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera:</td>\r\n			<td>Webcam HD type (30fps@720p)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu vỏ:</td>\r\n			<td>Vỏ nhựa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng mở rộng:</td>\r\n			<td>Đ&egrave;n b&agrave;n ph&iacute;m 4-Zone RGB Gaming Keyboard</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HĐH k&egrave;m theo m&aacute;y:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/5-tinh-nang-giup-ban-dung-windows-11-chuyen-nghiep-hon.html\" target=\"_blank\">Windows 11 Home</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại Pin Laptop :</td>\r\n			<td>Battery 3-Cell 53.5 Battery (Whr) 200W adapter</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>2.25 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>359 x 259 x 24.9 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 18, 0, 16),
(59, 'Laptop MSI Gaming GF63', '', '19490000', 2, 'Trung Quốc', '1713173321_anh24.png', '<ul>\n	<li><a href=\"https://www.nguyenkim.com/laptop-lenovo/\">Laptop Lenovo</a>&nbsp;Legion Slim 5&nbsp;diện mạo sang trọng,&nbsp;phong c&aacute;ch c&aacute; t&iacute;nh&nbsp;<a href=\"https://www.nguyenkim.com/laptop-gaming-la-gi-cac-dong-laptop-gaming-dang-mua-nhat-2022.html\">chuẩn gaming</a>&nbsp;</li>\n	<li>CPU AMD Ryzen 7&nbsp;hiệu năng vượt trội, xử l&yacute; mượt mọi t&aacute;c vụ từ l&agrave;m việc đến giải tr&iacute;</li>\n	<li>Card đồ họa&nbsp;<a href=\"https://www.nguyenkim.com/nvidia-geforce-tat-ca-moi-thu-ban-can-biet-ve-dong-gpu-noi-tieng-nhat.html\">NVIDIA GeForce</a>&nbsp;RTX 4060 8GB, đ&aacute;p ứng tốt nhu cầu l&agrave;m việc với đồ họa</li>\n	<li>RAM 16GB DDR5 đa nhiệm tốt, chạy mượt khi mở nhiều tab l&agrave;m việc c&ugrave;ng một l&uacute;c</li>\n	<li>Ổ cứng 512GB&nbsp;SSD M.2 2280 PCIe&reg; 4.0x4 NVMe, kh&ocirc;ng gian lưu trữ dữ liệu rộng r&atilde;i</li>\n	<li>M&agrave;n h&igrave;nh IPS 16&quot; rộng r&atilde;i, độ ph&acirc;n giải WQXGA t&aacute;i hiện h&igrave;nh ảnh r&otilde; n&eacute;t, sống động&nbsp;</li>\n	<li>Tốc độ l&agrave;m mới 165Hz, chuyển động khung h&igrave;nh mượt, hạn chế hiện tượng b&oacute;ng mờ</li>\n	<li>Bản lề gập mở 180 độ, dễ d&agrave;ng chia sẻ dữ liệu với đối t&aacute;c trong c&aacute;c cuộc hội họp</li>\n	<li>Trang bị đa dạng cổng kết nối, đ&aacute;p ứng đầy đủ nhu cầu truyền/nhận dữ liệu</li>\n</ul>\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>82Y9002YVN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>X&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Lenovo</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>36 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU:</td>\r\n			<td>AMD Ryzen 7</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại CPU:</td>\r\n			<td>7840HS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU:</td>\r\n			<td>3.8 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ đệm:</td>\r\n			<td>8MB L2 / 16MB L3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU tối đa:</td>\r\n			<td>5.1 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại RAM:</td>\r\n			<td>DDR5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng RAM:</td>\r\n			<td>16 GB (2x8)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số khe RAM:</td>\r\n			<td>2 khe</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ Bus RAM:</td>\r\n			<td>5600 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại ổ đĩa cứng:</td>\r\n			<td>SSD M.2 2280 PCIe&reg; 4.0x4 NVMe</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng ổ cứng:</td>\r\n			<td>512 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;ch hợp đĩa quang:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại đĩa quang:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ xử l&yacute; đồ họa:</td>\r\n			<td>NVIDIA GeForce RTX&trade; 4060 8GB GDDR6</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset card đồ họa:</td>\r\n			<td>NVIDIA GeForce RTX</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng card đồ họa:</td>\r\n			<td>8GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>IPS 300nits Anti-glare, 100% sRGB, 165Hz, Dolby&reg; Vision&trade;, FreeSync&trade;, G-SYNC&reg;, Low Blue Light</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>16 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>WQXGA (2560x1600) pixels</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần số qu&eacute;t m&agrave;n h&igrave;nh:</td>\r\n			<td>165Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;n h&igrave;nh cảm ứng:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ &acirc;m thanh:</td>\r\n			<td>High Definition (HD) Audio, Realtek&reg; ALC3287 codec</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn &acirc;m thanh:</td>\r\n			<td>HD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn WiFi:</td>\r\n			<td>Wi-Fi&reg; 6E, 11ax 2x2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth:</td>\r\n			<td>Bluetooth 5.1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn LAN:</td>\r\n			<td>100/1000M (RJ-45)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng USB:</td>\r\n			<td>1x USB 3.2 Gen 2; 1x USB 3.2 Gen 2 (Always On); 1x USB-C&reg; 3.2 Gen 2 (support data transfer and DisplayPort&trade; 1.4); 1x USB-C&reg; 3.2 Gen 2 (support data transfer, Power Delivery 140W and DisplayPort&trade; 1.4)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng HDMI:</td>\r\n			<td>1x HDMI&reg; 2.1, up to 8K/60Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khe đọc thẻ nhớ:</td>\r\n			<td>1x Card reader</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kết nối kh&aacute;c laptop:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera:</td>\r\n			<td>FHD 1080p with E-shutter</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu vỏ:</td>\r\n			<td>Aluminium (Top), PC-ABS (Bottom)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng mở rộng:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HĐH k&egrave;m theo m&aacute;y:</td>\r\n			<td>Windows 11 Home Single Language, English</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại Pin Laptop :</td>\r\n			<td>Integrated 80Wh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>2.4 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>359.7 x 260.3 x 19.9 - 25.2 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 19, 0, 18),
(60, 'Laptop MSI GF63 Thin', '', '16990000', 2, 'Trung Quốc', '1713165353_anh4.png', '<ul>\r\n	<li>Bộ vi xử l&yacute; Intel Core i5-11400H gi&uacute;p trải nghiệm game ổn định</li>\r\n	<li>RAM 8GB DDR4 gi&uacute;p laptop đa nhiệm mượt m&agrave;, hạn chế giật lag</li>\r\n	<li>Ổ cứng SSD 512GB gi&uacute;p khởi động m&aacute;y nhanh, kh&ocirc;ng gian lưu trữ tốt</li>\r\n	<li>M&agrave;n h&igrave;nh 15.6&#39;&#39; FHD mang đến h&igrave;nh ảnh r&otilde; n&eacute;t, m&agrave;u sắc ch&acirc;n thực</li>\r\n	<li>Trải nghiệm &acirc;m thanh to, sống động nhờ &acirc;m thanh Nahimic Audio</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>GF63THIN11UC-443VN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>MSI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2021</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/cpu-la-gi.html\" target=\"_blank\">Intel Core i5</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại CPU:</td>\r\n			<td>11400H</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU:</td>\r\n			<td>2.7 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ đệm:</td>\r\n			<td>6C12T, 12 MB Intel&reg; Smart Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU tối đa:</td>\r\n			<td>4.5 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại RAM:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/ram-la-gi-chuc-nang-cua-ram-la-gi-su-khac-nhau-giua-ram-ddr3-ddr4.html\" target=\"_blank\">DDR4</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng RAM:</td>\r\n			<td>8 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ Bus RAM:</td>\r\n			<td>3200 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại ổ đĩa cứng:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/o-cung-ssd-la-gi-nhung-loai-o-cung-ssd-tren-laptop.html\" target=\"_blank\">SSD</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng ổ cứng:</td>\r\n			<td>512 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;ch hợp đĩa quang:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ xử l&yacute; đồ họa:</td>\r\n			<td>NVIDIA&reg; GeForce RTX&trade; 3050 Laptop GPU, 4GB GDDR6</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>LCD IPS 60Hz (72% NTSC)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>15.6 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>Full HD (1920 x 1080)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ &acirc;m thanh:</td>\r\n			<td>Nahimic Audio</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn WiFi:</td>\r\n			<td>Wi-Fi 6 802.11 ax + Bluetooth v5.1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn LAN:</td>\r\n			<td>3x Type-A USB3.2 Gen1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng USB:</td>\r\n			<td>1x Type-C USB3.2 Gen1, 3x Type-A USB3.2 Gen1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng HDMI:</td>\r\n			<td>1x (4K @ 30Hz) HDMI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kết nối kh&aacute;c laptop:</td>\r\n			<td>1x Mic-in, 1x Headphone-out</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera:</td>\r\n			<td>Webcam HD type (30fps@720p)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu vỏ:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng mở rộng:</td>\r\n			<td>Đ&egrave;n b&agrave;n ph&iacute;m (Đơn sắc - m&agrave;u đỏ)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HĐH k&egrave;m theo m&aacute;y:</td>\r\n			<td>Windows 10 Home Single Language 64-bit (C&oacute; thể update miễn ph&iacute; l&ecirc;n Windows 11)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại Pin Laptop :</td>\r\n			<td>Battery 3-Cell, 51 (Whr) + 120W adapter</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>1.86 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>359 x 254 x 21.7 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 18, 0, 18),
(61, 'Laptop Lenovo Ideapad 3', '', '11990000', 5, 'Trung Quốc', '1713165730_anh5.png', '<ul>\r\n	<li><a href=\"https://www.nguyenkim.com/laptop-lenovo/\">Laptop Lenovo</a>&nbsp;c&oacute; ngoại h&igrave;nh năng động, mỏng nhẹ với trọng lượng chỉ ~1.5 kg</li>\r\n	<li>Intel Core i5-1235U với hiệu suất mạnh mẽ xử l&yacute; tốt c&aacute;c t&aacute;c vụ</li>\r\n	<li><a href=\"https://www.nguyenkim.com/laptop-may-tinh-xach-tay/\">Laptop</a>&nbsp;RAM 8GB chuẩn DDR4 đa nhiệm với tốc độ Bus l&ecirc;n đến 3200MHz</li>\r\n	<li>Ổ cứng 512GB tăng tốc khởi động m&aacute;y, mở c&aacute;c ứng dụng nhanh hơn</li>\r\n	<li>M&agrave;n h&igrave;nh FHD với độ ph&acirc;n giải 1920x1080 hiển thị h&igrave;nh ảnh sắc n&eacute;t</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>82RJ0019VN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>X&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Lenovo</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>24 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/cpu-la-gi.html\" target=\"_blank\">Intel Core i5</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại CPU:</td>\r\n			<td>1235U</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU:</td>\r\n			<td>1.3 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ đệm:</td>\r\n			<td>12MB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ CPU tối đa:</td>\r\n			<td>4.4 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại RAM:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/ram-la-gi-chuc-nang-cua-ram-la-gi-su-khac-nhau-giua-ram-ddr3-ddr4.html\" target=\"_blank\">DDR4</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng RAM:</td>\r\n			<td>8 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ Bus RAM:</td>\r\n			<td>3200 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại ổ đĩa cứng:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/o-cung-ssd-la-gi-nhung-loai-o-cung-ssd-tren-laptop.html\" target=\"_blank\">SSD</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng ổ cứng:</td>\r\n			<td>512 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ xử l&yacute; đồ họa:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset card đồ họa:</td>\r\n			<td>Intel SoC Platform</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>FHD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>14 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>Full HD (1920 x 1080)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ &acirc;m thanh:</td>\r\n			<td>Stereo speakers, Dolby Audio</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuẩn WiFi:</td>\r\n			<td>11ac, 2x2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng USB:</td>\r\n			<td>1x USB 2.0; 1x USB 3.2 Gen 1; 1x USB-C 3.2 Gen 1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng HDMI:</td>\r\n			<td>1x HDMI 1.4b</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khe đọc thẻ nhớ:</td>\r\n			<td>1x Card reader</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera:</td>\r\n			<td>HD 720p</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu vỏ:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HĐH k&egrave;m theo m&aacute;y:</td>\r\n			<td>Windows 11 Home 64 Single Language, English</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại Pin Laptop :</td>\r\n			<td>Integrated 45Wh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>1.43 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>324.2 x 215.7 x 19.9 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 19, 0, 18),
(62, 'Điện thoại iPhone 14 Plus 256GB Đen', '', '23390000', 1, 'Trung Quốc', '1713165868_anh6.png', '<ul>\r\n	<li>M&agrave;n h&igrave;nh OLED Super Retina XDR 6.7&#39;&#39; hiển thị sắc n&eacute;t, m&agrave;u sắc ch&acirc;n thực</li>\r\n	<li>Chip Apple A15 Bionic mạnh mẽ xử l&yacute; t&aacute;c vụ tốt, trải nghiệm game mượt m&agrave;</li>\r\n	<li>Mạng di động 5G gi&uacute;p xem trực tuyến, tải xuống c&aacute;c ứng dụng nhanh ch&oacute;ng</li>\r\n	<li>Bộ đ&ocirc;i camera sau thiết kế đặt ch&eacute;o, độ ph&acirc;n giải 12MP+12MP chụp ảnh sắc n&eacute;t</li>\r\n	<li>Camera trước c&oacute; độ ph&acirc;n giải l&ecirc;n đến 12MP, chụp selfie r&otilde; n&eacute;t, đẹp tự nhi&ecirc;n</li>\r\n	<li>Điện thoại đạt chỉ số kh&aacute;ng nước, bụi chuẩn IP68 cho bạn y&ecirc;n t&acirc;m sử dụng</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>iPhone 14 Plus 256GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/dien-thoai-di-dong-apple-iphone/\" target=\"_blank\">iPhone</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>9/2022</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM:</td>\r\n			<td>6 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ trong:</td>\r\n			<td>256 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh:</td>\r\n			<td>iOS 16</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset:</td>\r\n			<td>Apple A15 Bionic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cảm ứng:</td>\r\n			<td>Cảm ứng điện dung đa điểm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>OLED</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>6.7 &quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần số qu&eacute;t m&agrave;n h&igrave;nh:</td>\r\n			<td>60 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>1284 x 2778 pixels</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera trước:</td>\r\n			<td>12MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera sau:</td>\r\n			<td>12 MP - 12 MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n Flash:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mạng 5G:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại SIM:</td>\r\n			<td>1 Nano SIM &amp; 1 eSIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>WIFI:</td>\r\n			<td>Wi-Fi 802.11 a/b/g/n/ac/ax, Wi-Fi hotspot, Wi-Fi MIMO</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth:</td>\r\n			<td>v5.3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPS:</td>\r\n			<td>BEIDOU, GALILEO, GLONASS, GPS, QZSS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB:</td>\r\n			<td>Lightning</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jack tai nghe:</td>\r\n			<td>Lightning</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng Pin:</td>\r\n			<td>26 giờ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ sạc tối đa:</td>\r\n			<td>Sạc tối đa 20W</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mở kh&oacute;a nhanh:</td>\r\n			<td>Mở kho&aacute; khu&ocirc;n mặt Face ID</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thiết kế:</td>\r\n			<td>Nguy&ecirc;n khối</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu:</td>\r\n			<td>Khung nh&ocirc;m &amp; Mặt lưng k&iacute;nh cường lực</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ghi &acirc;m:</td>\r\n			<td>Ghi &acirc;m mặc định</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chống nước:</td>\r\n			<td>IP68</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tiện &iacute;ch kh&aacute;c ĐTDĐ:</td>\r\n			<td>Chạm 2 lần s&aacute;ng m&agrave;n h&igrave;nh, Sạc kh&ocirc;ng d&acirc;y, Ph&aacute;t hiện va chạm (Crash Detection), Apple Pay</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>160.8 x 78.1 x 7.8 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 20, 0, 19),
(63, 'Điện thoại iPhone 15 Pro Max 256GB Titan Tự Nhiên', '', '30490000', 8, 'Trung Quốc', '1713167740_anh7.png', '<ul>\r\n	<li>iPhone 15 Pro Max ngoại h&igrave;nh ho&agrave;n thiện cao cấp, mặt lưng k&iacute;nh hết mực sang trọng</li>\r\n	<li>Tấm nền OLED Super Retina XDR 6.7&#39;&#39; hiển thị sắc n&eacute;t, m&agrave;u sắc ch&acirc;n thực</li>\r\n	<li>Thiết kế vi&ecirc;n thuốc Dynamic Island tr&ecirc;n m&agrave;n h&igrave;nh, xem v&agrave; điều chỉnh nhanh t&aacute;c vụ</li>\r\n	<li>Chip Apple A17 Bionic mạnh mẽ gi&uacute;p l&agrave;m việc hiệu quả, &ldquo;chiến game&rdquo; mượt m&agrave;</li>\r\n	<li>Bộ 3 camera sau n&acirc;ng cấp 48MP - 12MP - 12MP, chụp ảnh v&agrave; quay video sắc n&eacute;t</li>\r\n	<li>Camera trước độ ph&acirc;n giải đến 12MP, chụp selfie r&otilde; n&eacute;t, đẹp tự nhi&ecirc;n v&agrave; cuốn h&uacute;t</li>\r\n	<li>Mạng di động 5G gi&uacute;p xem trực tuyến, tải xuống c&aacute;c ứng dụng nhanh ch&oacute;ng</li>\r\n	<li><a href=\"https://www.nguyenkim.com/dien-thoai-di-dong-apple-iphone/\">Điện thoại iPhone</a>&nbsp;đạt chỉ số kh&aacute;ng nước chuẩn IP68 cho bạn y&ecirc;n t&acirc;m sử dụng</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>IPHONE15PROMAX256GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Titan Tự Nhi&ecirc;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/dien-thoai-di-dong-apple-iphone/\" target=\"_blank\">iPhone</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ trong:</td>\r\n			<td>256GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh:</td>\r\n			<td>iOS 17</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU:</td>\r\n			<td>Hexa-core (2x + 4x)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset:</td>\r\n			<td>Apple A17 Pro</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cảm ứng:</td>\r\n			<td>M&agrave;n h&igrave;nh lu&ocirc;n bật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>OLED, Super Retina XDR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>6.7 &quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>2796 x 1290 pixels</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ s&aacute;ng tối đa:</td>\r\n			<td>Tối đa 2000 nit</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera trước:</td>\r\n			<td>12MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera sau:</td>\r\n			<td>Ch&iacute;nh 48MP, Phụ 12MP &amp; 12MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n Flash:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Video:</td>\r\n			<td>Quay video 4K</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mạng 5G:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại SIM:</td>\r\n			<td>nano-SIM v&agrave; eSIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số khe SIM:</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>WIFI:</td>\r\n			<td>Wi‑Fi 6E (802.11ax) với 2x2 MIMO</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth:</td>\r\n			<td>Bluetooth 5.3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NFC:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPS:</td>\r\n			<td>GPS, GLONASS, Galileo, QZSS, BeiDou v&agrave; NavIC</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB:</td>\r\n			<td>USB-C</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng Pin:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại pin:</td>\r\n			<td>T&iacute;ch hợp pin sạc lithium-ion</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ sạc tối đa:</td>\r\n			<td>Sạc l&ecirc;n đến 50% trong v&ograve;ng 30 ph&uacute;t với bộ tiếp hợp nguồn 20W trở l&ecirc;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sạc k&egrave;m theo m&aacute;y (W):</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mở kh&oacute;a nhanh:</td>\r\n			<td>Camera TrueDepth hỗ trợ nhận diện khu&ocirc;n mặt Face ID</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thiết kế:</td>\r\n			<td>Nguy&ecirc;n khối</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu:</td>\r\n			<td>Khung Titan, mặt trước Ceramic Shield, mặt sau K&iacute;nh nh&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chống nước:</td>\r\n			<td>IP68</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tiện &iacute;ch kh&aacute;c ĐTDĐ:</td>\r\n			<td>Dynamic Island, lớp phủ kh&aacute;ng dầu chống in dấu v&acirc;n tay, hỗ trợ hiển thị đồng thời nhiều ng&ocirc;n ngữ v&agrave; k&yacute; tự</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phụ kiện trong hộp:</td>\r\n			<td>C&aacute;p Sạc USB-C (1m), t&agrave;i liệu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (gram):</td>\r\n			<td>221 gram</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>159.9 x 76.7 x 8.25 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 20, 0, 19);
INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `sanxuat`, `hinhanh`, `tomtat`, `noidung`, `thongso`, `tinhtrang`, `id_brand`, `luongmua`, `idloaisp`) VALUES
(64, 'Điện thoại Samsung Galaxy S24 Ultra 256GB Tím', '', '33990000', 7, 'Việt Nam/Hàn Quốc', '1713168170_anh8.png', '<ul>\r\n	<li><a href=\"https://www.nguyenkim.com/dien-thoai-di-dong-samsung/\">Samsung Galaxy S24 Ultra</a>&nbsp;khung viền Titanium, diện mạo hết mực đẳng cấp</li>\r\n	<li>N&acirc;ng cấp với h&agrave;ng loạt t&iacute;nh năng AI th&ocirc;ng minh, n&acirc;ng tầm trải nghiệm</li>\r\n	<li>M&agrave;n h&igrave;nh&nbsp;<a href=\"https://www.nguyenkim.com/cong-nghe-man-hinh-dynamic-amoled-2x-la-gi.html\">Dynamic AMOLED 2X</a>&nbsp;độ ph&acirc;n giải Quad HD+ hiển thị sống động như thực</li>\r\n	<li>Camera trước 12MP gi&uacute;p s&aacute;ng tạo ảnh ch&acirc;n dung đẹp tự nhi&ecirc;n, sắc n&eacute;t</li>\r\n	<li>4 camera sau &quot;si&ecirc;u khủng&quot; tới 200MP-50MP-12MP-10MP, quay chụp chuy&ecirc;n nghiệp</li>\r\n	<li>T&iacute;ch hợp c&ocirc;ng nghệ&nbsp;<a href=\"https://www.nguyenkim.com/nhung-dieu-can-biet-ve-cong-nghe-chong-rung-quang-hoc.html\">chống rung OIS</a>, chụp h&igrave;nh v&agrave; quay phim ổn định</li>\r\n	<li>Vi&ecirc;n pin dung lượng lớn 5000mAh bền bỉ, l&agrave;m việc v&agrave; giải tr&iacute; suốt ng&agrave;y d&agrave;i</li>\r\n	<li>Chuẩn kh&aacute;ng nước IP68, trải nghiệm bất chấp thời tiết nắng mưa thất thường</li>\r\n	<li>Mở kh&oacute;a cực nhanh &amp; an to&agrave;n với&nbsp;<a href=\"https://www.nguyenkim.com/cam-bien-van-tay-va-ung-dung.html\">cảm biến v&acirc;n tay</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.nguyenkim.com/nhan-dien-khuon-mat-so-sanh.html\">nhận diện khu&ocirc;n mặt</a></li>\r\n	<li>Tương th&iacute;ch b&uacute;t S-Pen, s&aacute;ng tạo kh&ocirc;ng ngừng nghỉ, n&acirc;ng cao năng suất l&agrave;m việc</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>SAMSUNG S24 ULTRA (SM-S928B/DS)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>T&iacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Việt Nam/H&agrave;n Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2024</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM:</td>\r\n			<td>12 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ trong:</td>\r\n			<td>256 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ thẻ nhớ ngo&agrave;i:</td>\r\n			<td>Kh&ocirc;ng hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh:</td>\r\n			<td>Android 14</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset:</td>\r\n			<td>Snapdragon 8 Gen 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/cong-nghe-man-hinh-dynamic-amoled-2x-la-gi.html\" target=\"_blank\">Dynamic AMOLED 2X</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>6.8 &quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần số qu&eacute;t m&agrave;n h&igrave;nh:</td>\r\n			<td>120Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>Quad HD+ (1440 x 3120) pixels</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ s&aacute;ng tối đa:</td>\r\n			<td>2600 nits</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera trước:</td>\r\n			<td>12MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera sau:</td>\r\n			<td>200MP, 50MP, 12MP, 10MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n Flash:</td>\r\n			<td>Đ&egrave;n flash k&eacute;p</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Video:</td>\r\n			<td>8K@24/30fps, 4K@30/60/120fps, 1080p@30/60/240fps, 1080p@960fps, HDR10+, stereo sound rec., gyro-EIS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mạng 5G:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại SIM:</td>\r\n			<td>1 nano SIM + 1 e-SIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>WIFI:</td>\r\n			<td>802.11a/b/g/n/ac/ax/be 2.4GHz+5GHz+6GHz, EHT320, MIMO, 4096-QAM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth:</td>\r\n			<td>Bluetooth 5,3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NFC:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPS:</td>\r\n			<td>GPS, GLONASS, BDS, GALILEO</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/usb-type-c-la-gi-co-loi-gi-so-voi-nhung-dau-usb-truyen-thong.html\" target=\"_blank\">USB Type-C</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loa ngo&agrave;i:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jack 3.5mm:</td>\r\n			<td>Kh&ocirc;ng hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jack tai nghe:</td>\r\n			<td>Type-C</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng Pin:</td>\r\n			<td>5000mAh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại pin:</td>\r\n			<td>Li-lon</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ sạc tối đa:</td>\r\n			<td>45W</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sạc k&egrave;m theo m&aacute;y (W):</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mở kh&oacute;a nhanh:</td>\r\n			<td>Mở kho&aacute; v&acirc;n tay dưới m&agrave;n h&igrave;nh, Mở kho&aacute; khu&ocirc;n mặt</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thiết kế:</td>\r\n			<td>Nguy&ecirc;n khối</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu:</td>\r\n			<td>Khung Titanium &amp; Mặt lưng k&iacute;nh cường lực Corning&reg; Gorilla&reg; Glass Victus&reg; 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ghi &acirc;m:</td>\r\n			<td>Ghi &acirc;m cuộc gọi, ghi &acirc;m mặc định</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Radio:</td>\r\n			<td>Kh&ocirc;ng hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chống nước:</td>\r\n			<td>IP68</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (gram):</td>\r\n			<td>232 gram</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>162.3 x 79 x 8.6 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 21, 0, 19),
(65, 'Điện thoại Samsung Galaxy A05', '', '2740000', 6, 'Trung Quốc', '1713168496_anh9.png', '<ul>\r\n	<li>M&agrave;n h&igrave;nh lớn 6.7&quot;&nbsp;<a href=\"https://www.nguyenkim.com/do-phan-giai-man-hinh-hd-fhd-4k-co-y-nghia-nhu-the-nao.html\">HD+</a>, đắm ch&igrave;m trong thế giới giải tr&iacute; sống động, sắc n&eacute;t</li>\r\n	<li>Trang bị chip MediaTek Helio G85 (12nm) mạnh mẽ, xử l&yacute; trơn tru mọi t&aacute;c vụ</li>\r\n	<li>Bộ đ&ocirc;i camera sau độ ph&acirc;n giải đến 50MP - 2MP, quay chụp chuy&ecirc;n nghiệp</li>\r\n	<li>Camera trước 8MP tha hồ s&aacute;ng tạo ảnh ch&acirc;n dung r&otilde; n&eacute;t, đẹp tự nhi&ecirc;n</li>\r\n	<li>Dung lượng pin lớn 5000mAh k&eacute;o d&agrave;i thời gian trải nghiệm suốt cả ng&agrave;y</li>\r\n	<li><a href=\"https://www.nguyenkim.com/dien-thoai-di-dong-samsung/\">Điện thoại Samsung</a>&nbsp;2 khe SIM, dễ t&aacute;ch bạch giữa li&ecirc;n lạc c&aacute; nh&acirc;n &amp; c&ocirc;ng việc</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>SAMSUNGA05 (SM-A055F/DS)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Xanh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/thuong-hieu/samsung\" target=\"_blank\">Samsung</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM:</td>\r\n			<td>4GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ trong:</td>\r\n			<td>128GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ thẻ nhớ ngo&agrave;i:</td>\r\n			<td>Tối đa 1TB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh:</td>\r\n			<td>Android 13</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU:</td>\r\n			<td>Octa-core (2x2.0 GHz Cortex-A75 &amp; 6x1.8 GHz Cortex-A55)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset:</td>\r\n			<td>Helio G85 (12nm)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>PLS LCD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>6.7 &quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần số qu&eacute;t m&agrave;n h&igrave;nh:</td>\r\n			<td>60Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>HD+ (1600 x 720) pixels</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera sau:</td>\r\n			<td>50MP, 2MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n Flash:</td>\r\n			<td>LED Flash</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Video:</td>\r\n			<td>1080p@30/60fps</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mạng 4G:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mạng 5G:</td>\r\n			<td>Kh&ocirc;ng hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại SIM:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/esim-hay-nanosim-lua-chon-nao-phu-hop-cho-thiet-bi-di-dong-cua-ban.html\" target=\"_blank\">2 Nano SIM</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>WIFI:</td>\r\n			<td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth:</td>\r\n			<td>Bluetooth 5.3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NFC:</td>\r\n			<td>Kh&ocirc;ng hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPS:</td>\r\n			<td>GPS, GLONASS, GALILEO, BDS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/usb-type-c-la-gi-co-loi-gi-so-voi-nhung-dau-usb-truyen-thong.html\" target=\"_blank\">Type-C</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loa ngo&agrave;i:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jack 3.5mm:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jack tai nghe:</td>\r\n			<td>Hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng Pin:</td>\r\n			<td>5000mAh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ sạc tối đa:</td>\r\n			<td>Tối đa 25W</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sạc k&egrave;m theo m&aacute;y (W):</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thiết kế:</td>\r\n			<td>Nguy&ecirc;n khối</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Radio:</td>\r\n			<td>Kh&ocirc;ng hỗ trợ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (gram):</td>\r\n			<td>195 gram</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>168.8 x 78.2 x 8.8 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 21, 0, 19),
(66, 'Điện thoại Samsung Galaxy A23 5G', '', '3990000', 5, 'Việt Nam', '1713168706_anh10.png', '<ul>\r\n	<li><a href=\"https://www.nguyenkim.com/dien-thoai-di-dong-samsung/\">Samsung Galaxy</a>&nbsp;sở hữu m&agrave;n h&igrave;nh tr&agrave;n viền v&ocirc; cực Infinity-V 6.6 inch FHD+ rộng lớn, hiển thị sống động</li>\r\n	<li>Bộ 4 camera 50MP, 5MP, 2MP, 2MP cho mọi bức ảnh sắc n&eacute;t đến từng chi tiết</li>\r\n	<li>Selfie đẹp độc đ&aacute;o với camera trước 8MP &amp; hiệu ứng Bokeh l&agrave;m mờ hậu cảnh</li>\r\n	<li>Sở hữu chip Snapdragon 680 5G 8 nh&acirc;n mạnh mẽ, xử l&yacute; mượt m&agrave; c&aacute;c t&aacute;c vụ</li>\r\n	<li>Quay phim, chụp h&igrave;nh ổn định nhờ sở hữu t&iacute;nh năng Chống Rung OIS 2022</li>\r\n	<li>Dung lượng pin 5000mAh bền bỉ, trải nghiệm giải tr&iacute; liền mạch suốt ng&agrave;y d&agrave;i</li>\r\n	<li>C&ocirc;ng nghệ Dolby Atmos, đắm ch&igrave;m trong thế giới &acirc;m thanh đa chiều si&ecirc;u thực</li>\r\n	<li>Cảm biến v&acirc;n tay tr&ecirc;n n&uacute;t nguồn gi&uacute;p mở kh&oacute;a nhanh ch&oacute;ng v&agrave; an to&agrave;n</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>A236 (SM-A236E/DS)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Xanh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/thuong-hieu/samsung\" target=\"_blank\">Samsung</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>11/2022</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM:</td>\r\n			<td>4GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ trong:</td>\r\n			<td>128GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ thẻ nhớ ngo&agrave;i:</td>\r\n			<td>MicroSD, hỗ trợ tối đa 1 TB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/android-12-lich-cap-nhat-va-cach-tai-android-12-chinh-thuc.html\" target=\"_blank\">Android 12</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset:</td>\r\n			<td>Snapdragon 695 5G 8 nh&acirc;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cảm ứng:</td>\r\n			<td>K&iacute;nh cường lực Corning Gorilla Glass 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>Tr&agrave;n viền v&ocirc; cực Infinity-V FHD+</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh:</td>\r\n			<td>6.6 &quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần số qu&eacute;t m&agrave;n h&igrave;nh:</td>\r\n			<td>120 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</td>\r\n			<td>Full HD+ (1080 x 2408) pixels</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera trước:</td>\r\n			<td>8MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera sau:</td>\r\n			<td>50MP (Ch&iacute;nh), 5MP (Camera g&oacute;c si&ecirc;u rộng), 2MP (Macro), 2MP (Depth)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n Flash:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mạng 4G:</td>\r\n			<td>Hỗ trợ 5G</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mạng 5G:</td>\r\n			<td>Hỗ trợ 5G</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại SIM:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/esim-hay-nanosim-lua-chon-nao-phu-hop-cho-thiet-bi-di-dong-cua-ban.html\" target=\"_blank\">2 Nano SIM</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>WIFI:</td>\r\n			<td>Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct,Wi-Fi hotspot</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth:</td>\r\n			<td>v5.1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NFC:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPS:</td>\r\n			<td>GPS, GALILEO,GLONASS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/usb-type-c-la-gi-co-loi-gi-so-voi-nhung-dau-usb-truyen-thong.html\" target=\"_blank\">Type-C</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jack 3.5mm:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng Pin:</td>\r\n			<td>5000mAh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ sạc tối đa:</td>\r\n			<td>Sạc nhanh 25W</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mở kh&oacute;a nhanh:</td>\r\n			<td>Mở kho&aacute; v&acirc;n tay cạnh viền, Mở kho&aacute; khu&ocirc;n mặt</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thiết kế:</td>\r\n			<td>Nguy&ecirc;n khối</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu:</td>\r\n			<td>Khung &amp; Mặt lưng nhựa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ghi &acirc;m:</td>\r\n			<td>Ghi &acirc;m mặc định, Ghi &acirc;m cuộc gọi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Radio:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tiện &iacute;ch kh&aacute;c ĐTDĐ:</td>\r\n			<td>Quay chụp Chống rung OIS 2022</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>165.4 x 76.9 x 8.4 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 21, 0, 19),
(67, 'Chuột không dây Prolink PMW5008', '', '179000', 2, 'Trung Quốc', '1713169452_anh11.png', '<ul>\r\n	<li>Thiết kế đối xứng, ph&ugrave; hợp với cả những người thuận tay tr&aacute;i</li>\r\n	<li>3 n&uacute;t bấm, cảm biến quang dễ sử dụng</li>\r\n	<li>Ph&acirc;n giải DPI 1600, di chuột mượt tr&ecirc;n c&aacute;c bề mặt kh&aacute;c nhau&nbsp;</li>\r\n	<li>Chuột nhỏ gọn, th&iacute;ch hợp cho những người di chuyển nhiều</li>\r\n	<li>Kết nối bằng đầu USB, c&oacute; chỗ cất USB ngay tr&ecirc;n th&acirc;n chuột</li>\r\n	<li>Tiết kiệm pin hơn nhờ chế độ tự động tắt khi kh&ocirc;ng hoạt động</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>PMW5008</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đỏ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Prolink</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguy&ecirc;̃n Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải:</td>\r\n			<td>1600 DPI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D&acirc;y dẫn:</td>\r\n			<td>Kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ph&iacute;m chức năng:</td>\r\n			<td>3 ph&iacute;m chức năng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>0.048 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>103 x 64 x 31 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 22, 0, 23),
(68, 'Chuột không dây Prolink PMW5007', '', '200000', 3, 'Trung Quốc', '1713169925_anh12.png', '<ul>\r\n	<li>Thiết kế trẻ trung, hiện đại, thể hiện c&aacute; t&iacute;nh ri&ecirc;ng của bản th&acirc;n</li>\r\n	<li>Pin d&ugrave;ng được 12 th&aacute;ng, thoải m&aacute;i sử dụng m&agrave; kh&ocirc;ng lo hết pin</li>\r\n	<li>Kết nối nhanh ch&oacute;ng v&agrave; kh&ocirc;ng l&agrave;m gi&aacute;n đoạn c&ocirc;ng việc&nbsp;</li>\r\n	<li>Giao tiếp qua cổng USB, ph&ugrave; hợp với nhiều loại m&aacute;y t&iacute;nh</li>\r\n	<li>Cuộn trang nhanh, n&acirc;ng cao năng suất c&ocirc;ng việc</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>PMW5007</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Giao ngẫu nhi&ecirc;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Prolink</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải:</td>\r\n			<td>1600 DPI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D&acirc;y dẫn:</td>\r\n			<td>Kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ph&iacute;m chức năng:</td>\r\n			<td>3 ph&iacute;m chức năng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sử dụng pin:</td>\r\n			<td>AA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>0.475 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>102.7 x 60.7 x 35.9 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 22, 0, 23),
(69, 'CHUỘT KHÔNG DÂY ELECOM M-IR07DRSBU', '', '309000', 2, 'Trung Quốc', '1713170967_anh13.png', '<ul>\r\n	<li>Chuột kh&ocirc;ng d&acirc;y Elecom c&oacute; thiết kế nhỏ gọn, cảm gi&aacute;c cầm vừa tay</li>\r\n	<li>Độ ph&acirc;n giải 1200 DPI cho thao t&aacute;c chuột nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c</li>\r\n	<li>Trang bị c&ocirc;ng nghệ kh&ocirc;ng d&acirc;y 2.4GHz, khoảng c&aacute;ch kết nối đến 10m</li>\r\n	<li>Chuột sở hữu c&ocirc;ng nghệ n&uacute;t click &ecirc;m &aacute;i, kh&ocirc;ng g&acirc;y ồn đến xung quanh</li>\r\n	<li>C&oacute; n&uacute;t ON/OFF để tiết kiệm pin, thao t&aacute;c sử dụng chuột kh&aacute; đơn giản</li>\r\n	<li>Sử dụng pin AA th&ocirc;ng dụng, thời gian sử dụng c&oacute; thể l&ecirc;n đến 12 th&aacute;ng</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>M-IR07DRS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Xanh Dương</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Elecom</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Tháng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải:</td>\r\n			<td>1200 DPI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D&acirc;y dẫn:</td>\r\n			<td>Kh&ocirc;ng d&acirc;y khoảng c&aacute;ch 10m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ph&iacute;m chức năng:</td>\r\n			<td>3 ph&iacute;m chức năng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sử dụng pin:</td>\r\n			<td>AA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>59 x 99.8 x 39 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 23, 0, 23),
(70, 'Chuột game có dây Elecom M-G02URWH', '', '390000', 4, 'Trung Quốc', '1713171101_anh14.png', '<ul>\r\n	<li>Chuột thiết kế tổ hợp 13 n&uacute;t bấm chuy&ecirc;n nghiệp v&agrave; tiện dụng</li>\r\n	<li>Tốc độ con trỏ l&ecirc;n tới 16000 dpi c&oacute; thể t&ugrave;y chỉnh được</li>\r\n	<li>T&iacute;ch hợp với dải đ&egrave;n led chạy dọc quanh th&acirc;n cực k&igrave; ấn tượng</li>\r\n	<li>C&oacute; thể ghi nhớ 5 cấu h&igrave;nh set up sẵn như g&aacute;n n&uacute;t v&agrave; c&agrave;i đặt DPI.</li>\r\n	<li>Phản ứng ch&iacute;nh x&aacute;c với tốc độ l&ecirc;n tới 400 inch / gi&acirc;y v&agrave; tăng tốc 50G</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>M-G02UR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Trắng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Elecom</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2020</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải:</td>\r\n			<td>16 DPI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ph&iacute;m chức năng:</td>\r\n			<td>13 n&uacute;t</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>78.4 x 132.7 x 43.3 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 23, 0, 23),
(71, 'Chuột không dây yên tĩnh Elecom M-TM10BB Xanh dương', '', '499000', 1, 'Trung Quốc', '1713171287_anh15.png', '<ul>\r\n	<li>Thiết kế đối xứng, sử dụng cho cả người thuận tay tr&aacute;i v&agrave; tay phải</li>\r\n	<li>Độ ph&acirc;n giải 1600 dpi gi&uacute;p thực hiện c&aacute;c thao t&aacute;c chuột trơn tru</li>\r\n	<li>Chuột mỏng với độ d&agrave;y 28mm dễ d&agrave;ng mang theo trong t&uacute;i x&aacute;ch</li>\r\n	<li>Ngo&agrave;i 3 n&uacute;t cơ bản, chuột được t&iacute;ch hợp th&ecirc;m n&uacute;t &quot;quay lại&quot; tiện lợi</li>\r\n	<li>Trang bị đ&egrave;n LED xanh phản chiếu &aacute;nh s&aacute;ng ch&iacute;nh x&aacute;c hơn</li>\r\n	<li>Chức năng click y&ecirc;n tĩnh, kh&ocirc;ng tạo ra tiếng l&aacute;ch c&aacute;ch khi nhấp chuột</li>\r\n	<li>Kết nối th&ocirc;ng qua Bluetooth 4.2, trang bị đ&egrave;n b&aacute;o khi sắp hết pin</li>\r\n	<li>T&ugrave;y chỉnh chế độ thuyết tr&igrave;nh th&ocirc;ng qua App &quot;ELECOM Mouse Assistant</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>M-TM10BB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Xanh Dương</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Elecom</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải:</td>\r\n			<td>1600 DPI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D&acirc;y dẫn:</td>\r\n			<td>Kh&ocirc;ng d&acirc;y, khoảng c&aacute;ch tối đa 10m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ph&iacute;m chức năng:</td>\r\n			<td>4 n&uacute;t bấm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sử dụng pin:</td>\r\n			<td>AA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian sử dụng pin:</td>\r\n			<td>Khoảng 307 giờ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Giao tiếp:</td>\r\n			<td>Bluetooth 4.2</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 23, 0, 23),
(72, 'Bàn phím cơ Gaming không dây Zadez GT-015DK', '', '1190000', 2, 'Trung Quốc', '1713171622_anh16.png', '<ul>\r\n	<li>Thiết kế TKL 87 ph&iacute;m, kiểu d&aacute;ng nhỏ gọn, thuận tiện sử dụng</li>\r\n	<li>Switch cơ học OUTEMU, đa dạng lựa chọn với Blue-Red-Brown</li>\r\n	<li>Kết nối kh&ocirc;ng d&acirc;y, đảm bảo t&iacute;n hiệu truyền nhanh v&agrave; ổn định</li>\r\n	<li>Kết nối Type-C, vừa truyền tải dữ liệu vừa cung cấp nguồn sạc</li>\r\n	<li>Hỗ trợ Hot-Swap, độ bền ph&iacute;m l&ecirc;n đến 50 triệu lần nhấn ph&iacute;m</li>\r\n	<li>Đ&egrave;n LED Rainbow, t&ugrave;y chỉnh hiển thị bằng ph&iacute;m n&oacute;ng v&agrave; driver</li>\r\n	<li>D&acirc;y c&aacute;p 1.6m bọc d&ugrave; v&agrave; chống nhiễu, an to&agrave;n v&agrave; cực kỳ bền bỉ</li>\r\n	<li>Pin Li-Polymer dung lượng 2000 mAh sử dụng trong thời gian d&agrave;i</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>GT-015DK</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&agrave;n ph&iacute;m:</td>\r\n			<td>B&agrave;n ph&iacute;m cơ kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số ph&iacute;m:</td>\r\n			<td>Thiết kế TKL 87 ph&iacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&aacute;ch kết nối:</td>\r\n			<td>Type-C v&agrave; Nano Receiver 2.4G</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n LED:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ d&agrave;i d&acirc;y:</td>\r\n			<td>Kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tương th&iacute;ch:</td>\r\n			<td>Windows 8/10 v&agrave; MacOS (Driver c&agrave;i đặt tr&ecirc;n Windows)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu:</td>\r\n			<td>Nhựa cao cấp</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng:</td>\r\n			<td>Switch cơ OUTEMU (Blue/ Red/ Brown), hỗ trợ hot-swap, độ bền đến 50 triệu lần nhấn ph&iacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>0.737 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>361 x 135 x 36 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 25, 0, 22),
(73, 'Bàn phím không dây Logitech MX Keys Mini Đen', '', '2590000', 1, 'Trung Quốc', '1713171828_anh17.png', '<ul>\r\n	<li><a href=\"https://www.nguyenkim.com/ban-phim-logitech/\">B&agrave;n ph&iacute;m Logitech</a>&nbsp;MX Keys Mini thiết kế tối giản, k&iacute;ch thước nhỏ gọn</li>\r\n	<li>Tạo h&igrave;nh vừa với ng&oacute;n tay gi&uacute;p g&otilde; si&ecirc;u mượt v&agrave; giảm tiếng ồn tối đa</li>\r\n	<li>C&oacute; t&iacute;ch hợp ph&iacute;m Emoji cho bạn khả năng gửi c&aacute;c biểu tượng cảm x&uacute;c</li>\r\n	<li>Nhấn ph&iacute;m F6 đọc ch&iacute;nh tả gi&uacute;p chuyển từ đ&agrave;m thoại sang văn bản</li>\r\n	<li>Ph&iacute;m F9 gi&uacute;p tắt tiếng v&agrave; hủy tắt tiếng mic cho c&aacute;c cuộc gọi video</li>\r\n	<li>Được trang bị đ&egrave;n LED chiếu s&aacute;ng hỗ trợ bạn l&agrave;m việc v&agrave;o buổi tối</li>\r\n	<li>Thời lượng pin l&ecirc;n đến 10 ng&agrave;y hoặc 5 th&aacute;ng (tắt t&iacute;nh năng đ&egrave;n nền)</li>\r\n	<li>T&iacute;nh năng FLOW cho ph&eacute;p sao ch&eacute;p văn bản, thư mục giữa c&aacute;c thiết bị</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>920-010505</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Logitech</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2022</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&agrave;n ph&iacute;m:</td>\r\n			<td>B&agrave;n ph&iacute;m kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số ph&iacute;m:</td>\r\n			<td>79 ph&iacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&aacute;ch kết nối:</td>\r\n			<td>USB Bolt (Kh&ocirc;ng đi k&egrave;m) / Bluetooth (Phạm vi kh&ocirc;ng d&acirc;y 10m)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n LED:</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ d&agrave;i d&acirc;y:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tương th&iacute;ch:</td>\r\n			<td>Windows 10 trở l&ecirc;n, macOS 10.15 trở l&ecirc;n, Chrome OS &trade;, Linux&reg;, iOS 13.4 trở l&ecirc;n, iPadOS 14 trở l&ecirc;n, Android &trade; 5.0 trở l&ecirc;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu:</td>\r\n			<td>Sử dụng vật liệu t&aacute;i chế</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng:</td>\r\n			<td>T&iacute;nh năng tiết kiệm pin th&ocirc;ng minh, ph&iacute;m đọc ch&iacute;nh tả gi&uacute;p chuyển đ&agrave;m thoại th&agrave;nh văn bản, ph&iacute;m Emoji, ph&iacute;m tắt/mở mic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>0.5064 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>131.9 x 295.9 x 20.9 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 24, 0, 22),
(74, 'Bàn phím không dây Logitech K400 Plus Đen', '', '799000', 2, 'Trung Quốc', '1713420039_banphimk400.png', '<ul>\r\n	<li>Thiết kế nổi bật với c&aacute;c ph&iacute;m tr&ograve;n, m&agrave;u sắc bắt mắt</li>\r\n	<li>T&iacute;ch hợp&nbsp;<a href=\"https://www.nguyenkim.com/can-phai-lam-gi-khi-touchpad-dinh-cong.html\">Touch Pad</a>&nbsp;dễ d&agrave;ng di chuyển tr&ecirc;n m&agrave;n h&igrave;nh</li>\r\n	<li>Dễ d&agrave;ng di chuyển xa, v&ocirc; tư kết nối trong phạm vi 10m</li>\r\n	<li>B&agrave;n ph&iacute;m c&oacute; độ bền bỉ cao, nhờ thiết kế chống đổ tr&agrave;n</li>\r\n	<li>Pin 18 th&aacute;ng loại bỏ rắc rối khi phải thay pin thường xuy&ecirc;n</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>K400 PLUS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Logitech</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&agrave;n ph&iacute;m:</td>\r\n			<td>B&agrave;n ph&iacute;m kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số ph&iacute;m:</td>\r\n			<td>83 ph&iacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&aacute;ch kết nối:</td>\r\n			<td>USB Receiver (Đầu thu USB)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n LED:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ d&agrave;i d&acirc;y:</td>\r\n			<td>Kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tương th&iacute;ch:</td>\r\n			<td>M&aacute;y t&iacute;nh, điện thoại v&agrave; m&aacute;y t&iacute;nh bảng hỗ trợ b&agrave;n ph&iacute;m ngo&agrave;i; Windows 10,11 trở l&ecirc;n; Android 7 trở l&ecirc;n; ChromeOS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu:</td>\r\n			<td>H&atilde;ng kh&ocirc;ng c&ocirc;ng bố</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng:</td>\r\n			<td>T&iacute;ch hợp b&agrave;n di chuột lớn (3.5 inch); Tuổi thọ ph&iacute;m l&ecirc;n tới 5 triệu lần nhấn ph&iacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>0.39 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>139,9 x 354,3 x 23,5 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 24, 0, 22),
(75, 'Bàn phím vi tính Prolink PKGM9302', '', '199000', 4, 'Trung Quốc', '1713172118_anh19.png', '<ul>\r\n	<li>Thiết kế đậm chất game thủ, thể hiện c&aacute; t&iacute;nh bản th&acirc;n</li>\r\n	<li>Cổng kết nối USB, tương th&iacute;ch tốt với nhiều loại thiết bị</li>\r\n	<li>Chất liệu phím l&agrave;m từ nhựa cao cấp gi&uacute;p g&otilde; ph&iacute;m thư th&aacute;i</li>\r\n	<li>Thiết kế b&agrave;n ph&iacute;m Full size, tạo cảm gi&aacute;c bấm thoải m&aacute;i</li>\r\n	<li>Độ cao b&agrave;n ph&iacute;m c&oacute; thể t&ugrave;y chỉnh cho ph&ugrave; hợp với người d&ugrave;ng</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>PKGM9302</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Prolink</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguy&ecirc;̃n Kim</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 22, 0, 22),
(76, 'Bàn phím không dây Logitech K270', '', '390000', 1, 'Trung Quốc', '1713419966_logitech-k270.png', '<ul>\r\n	<li>Thiết kế mỏng nhẹ, g&otilde; ph&iacute;m &ecirc;m &aacute;i, tạo cảm gi&aacute;c thoải m&aacute;i</li>\r\n	<li>B&agrave;n ph&iacute;m kh&ocirc;ng d&acirc;y, chỉ cần cắm v&agrave;o l&agrave; đ&atilde; c&oacute; thể sử dụng</li>\r\n	<li>8 ph&iacute;m n&oacute;ng gi&uacute;p việc nhập dữ liệu v&agrave; điều hướng nhanh ch&oacute;ng</li>\r\n	<li>Thiết kế chống đổ tr&agrave;n, bảo vệ b&agrave;n phim&nbsp;bất kể mọi rủi ro</li>\r\n	<li>Sử dụng 2 Pin AAA gi&uacute;p k&eacute;o d&agrave;i tuổi thọ v&agrave; thời gian sử dụng&nbsp;</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>K270</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Logitech</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&agrave;n ph&iacute;m:</td>\r\n			<td>B&agrave;n ph&iacute;m kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số ph&iacute;m:</td>\r\n			<td>Full size</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&aacute;ch kết nối:</td>\r\n			<td>USB (Khoảng c&aacute;ch kết nối: 10m)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&egrave;n LED:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ d&agrave;i d&acirc;y:</td>\r\n			<td>Kh&ocirc;ng d&acirc;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tương th&iacute;ch:</td>\r\n			<td>Windows 10, 11 trở l&ecirc;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu:</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng:</td>\r\n			<td>C&aacute;c ph&iacute;m n&oacute;ng (v&iacute; dụ: Internet, e-mail, Ph&iacute;m phương tiện, &Acirc;m lượng); L&ecirc;n tới 5 triệu lần nhấn ph&iacute;m; B&agrave;n ph&iacute;m g&otilde; thoải m&aacute;i</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>0.498 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>441 x 149 x 18 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 24, 0, 22),
(77, 'Màn hình Dell 23.8 inch E2423H', '', '3290000', 2, 'Trung Quốc', '1713172498_anh21.png', '<ul>\r\n	<li><a href=\"https://www.nguyenkim.com/lcd-vi-tinh-dell/\">M&agrave;n h&igrave;nh Dell</a>&nbsp;23.8 inch, độ ph&acirc;n giải&nbsp;<a href=\"https://www.nguyenkim.com/do-phan-giai-man-hinh-hd-fhd-4k-co-y-nghia-nhu-the-nao.html\">Full HD</a>&nbsp;hiển thị h&igrave;nh ảnh r&otilde; n&eacute;t</li>\r\n	<li>G&oacute;c nh&igrave;n ngang v&agrave; dọc 178&deg; cho m&agrave;u sắc đồng đều từ nhiều g&oacute;c nh&igrave;n</li>\r\n	<li>T&aacute;i hiện m&agrave;u sắc rực rỡ, sống động với khả năng hiển thị 16.7 triệu m&agrave;u</li>\r\n	<li>Độ tương phản tĩnh đến 3000:1, hiển thị h&igrave;nh ảnh với độ chi tiết cao</li>\r\n	<li>C&ocirc;ng nghệ Flicker-free hạn chế tối đa t&igrave;nh trạng nhấp nh&aacute;y kh&oacute; chịu</li>\r\n	<li>Trang bị cổng VGA v&agrave; cổng DisplayPort, kết nối thuận tiện c&aacute;c thiết bị</li>\r\n	<li>Ng&ocirc;n ngữ thiết kế tối giản, sang trọng khi đặt trong kh&ocirc;ng gian l&agrave;m việc</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>E2423H</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/thuong-hieu/dell\" target=\"_blank\">Dell</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2022</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>36 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>VA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước:</td>\r\n			<td>23.8 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tỉ lệ:</td>\r\n			<td>Tỉ lệ 16:09</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải:</td>\r\n			<td>1920 x 1080</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần số qu&eacute;t:</td>\r\n			<td>60 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ s&aacute;ng:</td>\r\n			<td>250 cd/m2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ tương phản:</td>\r\n			<td>3,000:1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian đ&aacute;p ứng:</td>\r\n			<td>8 ms</td>\r\n		</tr>\r\n		<tr>\r\n			<td>G&oacute;c nh&igrave;n:</td>\r\n			<td>178&deg;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh hiệu đầu v&agrave;o:</td>\r\n			<td>1x DisplayPort, 1x VGA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loa:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>3.85 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>625x400x120 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 26, 0, 24),
(78, 'Màn hình Asus 23.8 inch VA24EHF', '', '2390000', 1, 'Trung Quốc', '1713172702_anh22.png', '<ul>\r\n	<li><a href=\"https://www.nguyenkim.com/asus/\">M&agrave;n h&igrave;nh Asus</a>&nbsp;WLED IPS cho m&agrave;u sắc ch&iacute;nh x&aacute;c &amp; đồng đều từ nhiều g&oacute;c nh&igrave;n</li>\r\n	<li>C&ocirc;ng nghệ Adaptive-Sync hạn chế x&eacute; h&igrave;nh, ph&aacute;t video r&otilde; r&agrave;ng v&agrave; sắc n&eacute;t</li>\r\n	<li><a href=\"https://www.nguyenkim.com/tan-so-quet-may23.html\">Tốc độ l&agrave;m mới</a>&nbsp;l&ecirc;n đến 100Hz, h&igrave;nh ảnh liền mạch, chơi game mượt m&agrave;</li>\r\n	<li>C&ocirc;ng nghệ Low Blue Light bảo vệ mắt bạn khỏi &aacute;nh s&aacute;ng xanh c&oacute; hại</li>\r\n	<li>C&ocirc;ng nghệ Flicker-free khử nhấp nh&aacute;y, hạn chế mỏi mắt v&agrave; căng mắt</li>\r\n	<li>Trang bị cổng HDMI gi&uacute;p người d&ugrave;ng dễ d&agrave;ng truyền tải dữ liệu</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>VA24EHF</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/thuong-hieu/asus\" target=\"_blank\">Asus</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>36 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>WLED IPS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước:</td>\r\n			<td>23.8 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tỉ lệ:</td>\r\n			<td>Tỉ lệ 16:09</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải:</td>\r\n			<td>Full HD (1920 x 1080) Pixels</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần số qu&eacute;t:</td>\r\n			<td>100 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ s&aacute;ng:</td>\r\n			<td>250 cd/m2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ tương phản:</td>\r\n			<td>1,300:1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian đ&aacute;p ứng:</td>\r\n			<td>1 ms</td>\r\n		</tr>\r\n		<tr>\r\n			<td>G&oacute;c nh&igrave;n:</td>\r\n			<td>178&deg;(H) / 178&deg;(V)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh hiệu đầu v&agrave;o:</td>\r\n			<td>1x HDMI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loa:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera:</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng kh&aacute;c:</td>\r\n			<td>C&ocirc;ng nghệ Adaptive-Sync, Low Blue Light (Bộ lọc &aacute;nh s&aacute;ng xanh dương), Flicker Free (Khử nhấp nh&aacute;y)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước kh&ocirc;ng ch&acirc;n đế:</td>\r\n			<td>539.52 x 313.15 x 48.15 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước c&oacute; ch&acirc;n đế:</td>\r\n			<td>539.52 x 417.22 x 205.94 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng kh&ocirc;ng ch&acirc;n đế:</td>\r\n			<td>2.46 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng c&oacute; ch&acirc;n đế:</td>\r\n			<td>2.84 kg</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 27, 0, 24),
(79, 'Màn hình Asus ProArt 24 inch PA248QV', '', '4990000', 1, 'Trung Quốc', '1713172837_anh23.png', '<ul>\r\n	<li>T&iacute;ch hợp c&ocirc;ng nghệ kh&ocirc;ng đễ lại dấu v&acirc;n tay khi chạm v&agrave;o</li>\r\n	<li>M&agrave;n h&igrave;nh IPS chống ch&oacute;i hiệu quả, hiển thị sắc m&agrave;u rực rỡ</li>\r\n	<li>C&oacute; c&ocirc;ng nghệ Adaptive-Sync&nbsp;gi&uacute;p đ&aacute;p ứng c&aacute;c pha h&agrave;nh động nhanh</li>\r\n	<li>Trang bị cổng kết nối đầy đủ HDMI, D-Sub, DisplayPort</li>\r\n	<li>M&agrave;n h&igrave;nh m&aacute;y t&iacute;nh sở hữu đường n&eacute;t hiện đại, tinh tế</li>\r\n</ul>\r\n', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>PA248QV</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td><a href=\"https://www.nguyenkim.com/thuong-hieu/asus\" target=\"_blank\">Asus</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>36 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại m&agrave;n h&igrave;nh:</td>\r\n			<td>IPS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước:</td>\r\n			<td>24 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tỉ lệ:</td>\r\n			<td>16:10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải:</td>\r\n			<td>1920 x 1200 Pixels</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tần số qu&eacute;t:</td>\r\n			<td>75 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ s&aacute;ng:</td>\r\n			<td>300 cd/m2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ tương phản:</td>\r\n			<td>1000:1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian đ&aacute;p ứng:</td>\r\n			<td>5 ms</td>\r\n		</tr>\r\n		<tr>\r\n			<td>G&oacute;c nh&igrave;n:</td>\r\n			<td>78&deg;(H)/178&deg;(V)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh hiệu đầu v&agrave;o:</td>\r\n			<td>HDMI, D-Sub, DisplayPort</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loa:</td>\r\n			<td>2W x 2 Stereo RMS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;nh năng kh&aacute;c:</td>\r\n			<td>100% sRGB, C&ocirc;ng nghệ Adaptive-Syn, c&ocirc;ng nghệ kh&ocirc;ng để lại dấu trace free, ProArt Palette, QuickFit</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>6.1 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước sản phẩm:</td>\r\n			<td>533 x (375 - 505) x 211 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 27, 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(50) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(5, '2022-04-01', 3, '41906000', 4),
(6, '2022-04-02', 1, '2179000', 1),
(7, '2022-04-04', 3, '22957000', 1),
(8, '2022-04-06', 6, '64513000', 1),
(9, '2022-04-10', 3, '7237000', 2),
(10, '2022-04-12', 1, '2179000', 1),
(11, '2024-04-10', 5, '92995000', 1),
(12, '2024-04-11', 46, '700297000', 1),
(13, '2024-04-12', 1, '18599000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `quyen` varchar(50) NOT NULL DEFAULT 'khach',
  `password` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `diachicuthe` text NOT NULL,
  `donhangdamua` int(11) NOT NULL DEFAULT 0,
  `tongtien` int(11) NOT NULL DEFAULT 0,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `quyen`, `password`, `fullname`, `sdt`, `email`, `hinhanh`, `diachicuthe`, `donhangdamua`, `tongtien`, `trangthai`) VALUES
(139, 'quan8', 'khach', '123', 'Nguyễn Trọng Quân', '0853001126', 'qquannguyentrong123@gmail.com', '1649773041_tải xuống (3).jpg', '09 , Phúc Trung , Phúc thanh', 35, 646992000, 1),
(140, 'quan9', 'khach', '123', 'Quân Nguyễn', '+84853001127', 'qquannguyentrong123@gmail.com', '1649521865_tải xuống.jpg', '09 , Phúc Trung , Phúc thành', 0, 0, 1),
(141, 'quan10', 'khach', '123', 'Quân Nguyễn', '+84853001127', 'qquannguyentrong123@gmail.com', '1649562828_tải xuống.jpg', '09 , Phúc Trung , Phúc thanh', 3, 34695340, 1),
(142, 'quan11', 'khach', '123', 'Quân Nguyễn 2', '+84853001127', 'qquannguyentrong123@gmail.com', '1649564038_tivi-Sharp-AQUOS-8K-6.jpg', '09 , Phúc Trung , Phúc thanh', 0, 0, 1),
(143, 'test', 'khach', '123', 'test', '0123456789', 'p@gmail.com', '', 'test', 0, 0, 1),
(144, 'quanlykho', 'quanlykho', '123', 'Nguyễn Văn A', '0909090909', 'quanlykho@test.com', '', '', 0, 0, 1),
(145, 'nhanvien', 'nhanvien', '123', 'Nguyễn Thị B', '0987654321', 'nhanvien@test.com', '', '', 0, 0, 1),
(146, 'admin', 'admin', '123', 'Lê Thị C', '0897645321', 'admin@test.com', '', '', 0, 0, 1),
(147, 'chudoanhnghiep', 'chudoanhnghiep', '123', 'Phan Văn D', '0129834765', 'chudoanhnghiep@test.com', '', '', 0, 0, 1),
(148, 'quanlykho2', 'quanlykho', '123', 'quanlykho2', '0123456789', 'p@g.c', '', 'ddd', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_sale`
--

CREATE TABLE `time_sale` (
  `id` int(11) NOT NULL,
  `time1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_sale`
--

INSERT INTO `time_sale` (`id`, `time1`) VALUES
(1, '2024-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_product`
--
ALTER TABLE `img_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IMG_PRODUCT` (`id_product`);

--
-- Indexes for table `shop_cmt`
--
ALTER TABLE `shop_cmt`
  ADD PRIMARY KEY (`id_comment_shop`);

--
-- Indexes for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `FK1` (`id_khachhang`);

--
-- Indexes for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`,`id_sanpham`),
  ADD KEY `FK00` (`id_sanpham`);

--
-- Indexes for table `tbl_chitietphieunhap`
--
ALTER TABLE `tbl_chitietphieunhap`
  ADD PRIMARY KEY (`id_phieunhap`,`id_sanpham`) USING BTREE,
  ADD KEY `FK_chitietpn_sanpham` (`id_sanpham`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `FK_COMMENTS_SANPHAM` (`id_sp`),
  ADD KEY `FK_COMMENTS_USER` (`id_user`);

--
-- Indexes for table `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Indexes for table `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  ADD PRIMARY KEY (`mancc`);

--
-- Indexes for table `tbl_phieunhap`
--
ALTER TABLE `tbl_phieunhap`
  ADD PRIMARY KEY (`id_phieunhap`),
  ADD KEY `FK_phieunhap_nguoitao` (`id_user`),
  ADD KEY `FK_phieunhap_ncc` (`id_nhacungcap`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `FK_SANPHAM_BRAND` (`id_brand`),
  ADD KEY `FK_SANPHAM_LOAISP` (`idloaisp`);

--
-- Indexes for table `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `time_sale`
--
ALTER TABLE `time_sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `shop_cmt`
--
ALTER TABLE `shop_cmt`
  MODIFY `id_comment_shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `tbl_chitietphieunhap`
--
ALTER TABLE `tbl_chitietphieunhap`
  MODIFY `id_phieunhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  MODIFY `mancc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_phieunhap`
--
ALTER TABLE `tbl_phieunhap`
  MODIFY `id_phieunhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `time_sale`
--
ALTER TABLE `time_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `img_product`
--
ALTER TABLE `img_product`
  ADD CONSTRAINT `FK_IMG_PRODUCT` FOREIGN KEY (`id_product`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD CONSTRAINT `FK00` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`),
  ADD CONSTRAINT `FK12` FOREIGN KEY (`id_cart_details`) REFERENCES `tbl_cart` (`id_cart`);

--
-- Constraints for table `tbl_chitietphieunhap`
--
ALTER TABLE `tbl_chitietphieunhap`
  ADD CONSTRAINT `FK_chitietpn_phieunhap` FOREIGN KEY (`id_phieunhap`) REFERENCES `tbl_phieunhap` (`id_phieunhap`),
  ADD CONSTRAINT `FK_chitietpn_sanpham` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Constraints for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD CONSTRAINT `FK_COMMENTS_SANPHAM` FOREIGN KEY (`id_sp`) REFERENCES `tbl_sanpham` (`id_sanpham`),
  ADD CONSTRAINT `FK_COMMENTS_USER` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_phieunhap`
--
ALTER TABLE `tbl_phieunhap`
  ADD CONSTRAINT `FK_phieunhap_ncc` FOREIGN KEY (`id_nhacungcap`) REFERENCES `tbl_nhacungcap` (`mancc`),
  ADD CONSTRAINT `FK_phieunhap_nguoitao` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `FK_SANPHAM_BRAND` FOREIGN KEY (`id_brand`) REFERENCES `tbl_brand` (`id_brand`),
  ADD CONSTRAINT `FK_SANPHAM_LOAISP` FOREIGN KEY (`idloaisp`) REFERENCES `tbl_loaisp` (`id_loaisp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
