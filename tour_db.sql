-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2025 at 02:12 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` tinyint NOT NULL,
  `tieu_de` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int NOT NULL,
  `category_id` tinyint NOT NULL,
  `status` int DEFAULT '1' COMMENT '1:xuất bản , 0:bản nháp',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `tieu_de`, `noi_dung`, `image`, `author_id`, `category_id`, `status`, `created_at`) VALUES
(1, 'Nha Trang - Biển Nhũ Tiên - Chùa Long Sơn', 'Nha Trang luôn được xem là một trong những điểm đến hấp dẫn nhất miền Trung với vẻ đẹp trong trẻo của biển xanh, cát trắng và khí hậu dịu nhẹ quanh năm. Trong hành trình khám phá thành phố biển, Biển Nhũ Tiên nổi bật như một thiên đường nhỏ tách biệt, nơi du khách có thể thả mình trong làn nước trong vắt và tận hưởng không gian yên bình khác hẳn sự nhộn nhịp ở trung tâm. Nhũ Tiên còn thu hút bởi bãi cát mịn, những ghềnh đá đẹp mắt và khung cảnh hoang sơ rất thích hợp để nghỉ dưỡng. Sau khi dạo biển, du khách thường ghé thăm Chùa Long Sơn – ngôi chùa linh thiêng với tượng Phật Trắng uy nghi trên đồi Trại Thủy. Từ đây, toàn cảnh Nha Trang hiện ra rộng lớn và thanh bình, mang đến cảm giác thư thái và thêm yêu mảnh đất biển hiền hòa này.', 'public/image/nhatrang.png', 16, 1, 1, '2025-11-24 10:26:22'),
(2, 'Khám phá Sapa: Thị trấn trong sương mờ', 'Sapa, thị trấn nhỏ nằm trên dãy Hoàng Liên Sơn, luôn mang vẻ đẹp quyến rũ nhờ những lớp sương mờ bao phủ quanh năm, khi đặt chân đến đây, du khách sẽ cảm nhận ngay bầu không khí se lạnh, trong lành cùng cảnh sắc thiên nhiên hùng vĩ, những thửa ruộng bậc thang trải dài như những dải lụa mềm uốn quanh sườn núi, đặc biệt đẹp vào mùa lúa chín vàng rực, không chỉ có thiên nhiên, Sapa còn cuốn hút bởi văn hóa đa dạng của đồng bào dân tộc H’Mông, Dao đỏ, Tày, du khách có thể dạo bước trên những con đường đá cổ, thăm các bản làng, thưởng thức những món đặc sản như thắng cố, cá hồi hay nướng than hoa, khi sương tan, Fansipan – “nóc nhà Đông Dương” hiện ra đầy tráng lệ, tạo nên một trải nghiệm khó quên cho mọi du khách.', 'public/image/tb.jpg\r\n', 16, 1, 1, '2025-11-28 10:48:51'),
(3, 'Hạ Long - Kỳ quan thiên nhiên thế giới', 'Hạ Long, nằm ở phía Đông Bắc Việt Nam, là một trong những kỳ quan thiên nhiên thế giới nổi tiếng với hàng nghìn đảo đá vôi nhấp nhô giữa vịnh xanh biếc, tạo nên một bức tranh thiên nhiên hùng vĩ và thơ mộng, vịnh Hạ Long không chỉ thu hút du khách bởi cảnh quan độc đáo mà còn bởi những hang động kỳ bí như Sung Sot, Thien Cung hay Dau Go, nơi những nhũ đá hình thù kỳ lạ kể câu chuyện hàng triệu năm, đến Hạ Long, du khách có thể tham gia các hoạt động như du thuyền ngắm bình minh, chèo kayak khám phá các hòn đảo nhỏ hay thưởng thức hải sản tươi ngon ngay trên thuyền, đặc biệt khi mặt trời chiếu xuống mặt nước lấp lánh như những viên ngọc, cả vịnh như bừng sáng, tạo nên khung cảnh vừa hùng vĩ vừa lãng mạn, Hạ Long không chỉ là điểm đến du lịch mà còn là biểu tượng tự hào của Việt Nam với vẻ đẹp thiên nhiên độc nhất vô nhị.', 'public/image/hl.jpg', 16, 1, 1, '2025-11-28 10:59:57'),
(4, 'Khám Phá về Cát Bà - Du lịch sinh thái', 'Cát Bà, hòn đảo lớn nhất trong quần đảo Cát Bà thuộc vịnh Hạ Long, là điểm đến lý tưởng cho du lịch sinh thái nhờ sự kết hợp hài hòa giữa biển xanh, rừng nguyên sinh và những bãi cát trắng mịn, đến Cát Bà, du khách có thể tham gia các hoạt động như trekking xuyên rừng quốc gia, khám phá hang động kỳ bí, chèo kayak trên những vịnh nhỏ hay bơi lội tại các bãi tắm hoang sơ, đảo còn nổi tiếng với hệ sinh thái đa dạng bao gồm nhiều loài động thực vật quý hiếm, đặc biệt là loài voọc đầu trắng chỉ có ở Cát Bà, không chỉ hấp dẫn về thiên nhiên, nơi đây còn mang đến trải nghiệm văn hóa độc đáo với các làng chài truyền thống, thưởng thức hải sản tươi sống ngay trên bờ biển, những khoảnh khắc bình minh và hoàng hôn trên đảo khiến du khách say lòng, Cát Bà thực sự là điểm đến sinh thái hoàn hảo kết hợp thư giãn, khám phá và hòa mình cùng thiên nhiên.', 'public/image/catba.png', 16, 1, 1, '2025-11-28 11:03:05'),
(5, 'Đà Nẵng - Di sản thiên nhiên', 'Đà Nẵng, thành phố ven biển miền Trung Việt Nam, không chỉ nổi bật với cảnh quan hiện đại mà còn là nơi hội tụ nhiều di sản thiên nhiên tuyệt đẹp, từ những bãi biển dài như Mỹ Khê, Non Nước với cát trắng mịn, sóng vỗ êm đềm đến những ngọn núi hùng vĩ như Bà Nà, Ngũ Hành Sơn, nơi du khách có thể khám phá hang động, chùa chiền cổ kính và thưởng ngoạn toàn cảnh thành phố từ trên cao, Đà Nẵng còn gần kề với vườn quốc gia Bạch Mã với hệ sinh thái rừng nguyên sinh đa dạng, mang đến trải nghiệm trekking, ngắm chim và thác nước, kết hợp với các di sản văn hóa, ẩm thực phong phú, du khách có thể thưởng thức hải sản tươi ngon, tham quan làng nghề truyền thống, cảm nhận nhịp sống năng động nhưng vẫn hài hòa với thiên nhiên, Đà Nẵng thực sự là điểm đến lý tưởng cho những ai yêu thích vẻ đẹp thiên nhiên kết hợp trải nghiệm văn hóa và nghỉ dưỡng.', 'public/image/danang.png', 16, 1, 1, '2025-11-28 11:07:55'),
(6, 'Khám phá hành trình Quy Nhơn – Phú Yên', 'Hành trình Quy Nhơn – Phú Yên mang đến cho du khách trải nghiệm kết hợp giữa biển xanh, cát trắng và núi non hùng vĩ, từ những bãi biển hoang sơ như Kỳ Co, Eo Gió ở Quy Nhơn với nước biển trong xanh và những ghềnh đá kỳ vĩ, đến những bãi Xép, Gành Đá Đĩa ở Phú Yên nổi tiếng với cảnh quan độc đáo và thơ mộng, du khách còn có cơ hội khám phá văn hóa địa phương qua các làng chài, thưởng thức hải sản tươi ngon và trải nghiệm đời sống thân thiện của người dân miền Trung, hành trình cũng đưa du khách qua những con đường ven biển ngoạn mục, những ngọn núi và rừng nguyên sinh, tạo cảm giác thư giãn và phiêu lưu đồng thời, bình minh và hoàng hôn nơi đây khiến cảnh vật trở nên huyền ảo, Quy Nhơn – Phú Yên thực sự là hành trình lý tưởng cho những ai yêu thiên nhiên, khám phá văn hóa và tìm kiếm trải nghiệm biển miền Trung Việt Nam.', 'public/image/qn.jpg', 16, 1, 1, '2025-11-28 11:31:36'),
(7, 'Ninh Bình - Tràng An, Tam Cốc', 'Ninh Bình, vùng đất được mệnh danh là “Vịnh Hạ Long trên cạn”, nổi bật với quần thể Tràng An và Tam Cốc, nơi núi non sừng sững ôm lấy những cánh đồng lúa xanh mướt, du khách có thể trải nghiệm những chuyến thuyền len lỏi qua các hang động huyền bí, chiêm ngưỡng nhũ đá với hình thù kỳ thú và cảm nhận sự bình yên của thiên nhiên, Tam Cốc còn nổi tiếng với cảnh quan mùa lúa chín vàng rực rỡ, tạo nên bức tranh thiên nhiên sống động, Tràng An kết hợp giữa cảnh quan núi non, sông nước và di tích văn hóa, mang đến trải nghiệm đa dạng từ du lịch sinh thái, văn hóa đến lịch sử, tham quan chùa Bích Động hay cố đô Hoa Lư, thưởng thức đặc sản địa phương, tất cả tạo nên một hành trình đáng nhớ, nơi du khách vừa hòa mình cùng thiên nhiên vừa khám phá vẻ đẹp văn hóa truyền thống của Ninh Bình.', 'public/image/nb.jpg', 16, 1, 1, '2025-11-28 11:37:49'),
(8, 'Cáp Nhĩ Tân - Trung Quốc', 'Dưới đây là phiên bản viết liền, liền mạch, khoảng 150 từ về Cáp Nhĩ Tân, Trung Quốc:\r\n\r\nCáp Nhĩ Tân, thủ phủ của tỉnh Hắc Long Giang, nằm ở phía Đông Bắc Trung Quốc, nổi bật với cảnh quan mùa đông tuyệt đẹp và kiến trúc mang phong cách Nga đặc trưng, thành phố được biết đến với các công trình cổ kính như nhà thờ Saint Sophia với mái vòm Byzantine, những con phố rộng rãi, các quảng trường lớn và công viên phủ đầy tuyết vào mùa đông tạo nên không gian lãng mạn và huyền ảo, Cáp Nhĩ Tân còn nổi tiếng với lễ hội băng đăng quốc tế, nơi hàng nghìn tác phẩm điêu khắc băng khổng lồ rực rỡ ánh sáng thu hút du khách khắp nơi, ngoài ra, ẩm thực địa phương với các món ăn đậm hương vị Đông Bắc Trung Quốc cũng là điểm nhấn đáng chú ý, đến Cáp Nhĩ Tân, du khách có thể vừa khám phá vẻ đẹp văn hóa, kiến trúc vừa trải nghiệm thiên nhiên mùa đông độc đáo, biến nơi đây thành điểm đến hấp dẫn quanh năm.\r\n', 'public/image/cnt.jpg', 16, 2, 1, '2025-11-28 11:39:02'),
(9, ' Paris – Pháp', 'Dưới đây là phiên bản viết liền, liền mạch, khoảng 150 từ về Paris, Pháp:\r\n\r\nParis, thủ đô lãng mạn của Pháp, nổi tiếng với kiến trúc cổ kính, nghệ thuật và văn hóa tinh tế, từ tháp Eiffel vươn mình giữa bầu trời, sông Seine uốn lượn qua các cây cầu lịch sử, đến nhà thờ Notre-Dame tráng lệ và Bảo tàng Louvre chứa đựng vô vàn kiệt tác nghệ thuật, thành phố còn thu hút du khách bằng những con phố thơ mộng, quán cà phê nhỏ nhắn và những khu chợ sầm uất, khi dạo bước trên đại lộ Champs-Élysées hay thưởng ngoạn hoàng hôn từ Montmartre, du khách sẽ cảm nhận nhịp sống năng động nhưng vẫn đầy tinh tế của Paris, ẩm thực phong phú từ bánh mì, phô mai đến rượu vang nổi tiếng cũng làm say lòng du khách, Paris không chỉ là trung tâm văn hóa và lịch sử của Pháp mà còn là biểu tượng của tình yêu, nghệ thuật và lối sống thanh lịch, khiến mỗi chuyến đi trở thành trải nghiệm khó quên.\r\n', 'public/image/pr.jpg', 16, 2, 1, '2025-11-28 11:39:32'),
(10, 'Khám phá Hàn Quốc', 'Dưới đây là phiên bản viết liền, liền mạch, khoảng 150 từ về Hàn Quốc:\r\n\r\nHàn Quốc là điểm đến hấp dẫn với sự kết hợp hài hòa giữa truyền thống và hiện đại, từ thủ đô Seoul sầm uất với những tòa nhà chọc trời, trung tâm mua sắm nhộn nhịp và công nghệ tiên tiến, đến các cung điện cổ kính như Gyeongbokgung và Changdeokgung, du khách còn có cơ hội khám phá văn hóa đặc sắc qua lễ hội truyền thống, làng cổ Hanok và ẩm thực phong phú từ kimchi, bulgogi đến các món đường phố hấp dẫn, thiên nhiên Hàn Quốc cũng mang vẻ đẹp quyến rũ quanh năm, từ mùa hoa anh đào rực rỡ ở Jinhae, núi Seoraksan hùng vĩ mùa thu đến những bãi biển và đảo Jeju yên bình, du khách có thể trekking, tắm biển, hoặc tham gia các hoạt động giải trí hiện đại, Hàn Quốc thực sự là điểm đến đa dạng, vừa hấp dẫn người yêu văn hóa, vừa mê hoặc những tín đồ khám phá thiên nhiên và trải nghiệm sống động.\r\n', 'public/image/hq.jpg', 16, 2, 1, '2025-11-28 11:39:32'),
(11, 'Bắc Kinh - Trung Quốc', 'Dưới đây là phiên bản viết liền, liền mạch, khoảng 150 từ về Bắc Kinh, Trung Quốc:\r\n\r\nBắc Kinh, thủ đô của Trung Quốc, là trung tâm chính trị, văn hóa và lịch sử quan trọng, nơi du khách có thể khám phá những công trình mang tính biểu tượng như Tử Cấm Thành tráng lệ, Thiên An Môn rộng lớn và Cung điện Mùa Hè lộng lẫy, đồng thời trải nghiệm văn hóa truyền thống qua các ngõ hutong cổ kính và nghệ thuật biểu diễn truyền thống, thành phố còn gần kề với Vạn Lý Trường Thành, kỳ quan nhân tạo nổi tiếng thế giới, thu hút du khách từ khắp nơi đến chiêm ngưỡng kiến trúc hùng vĩ và cảnh quan ngoạn mục, Bắc Kinh cũng nổi bật với ẩm thực phong phú như vịt quay Bắc Kinh, mì sợi và các món đặc sản vùng miền, kết hợp giữa hiện đại và cổ kính, các khu mua sắm sầm uất, công viên xanh mát và hệ thống giao thông tiện lợi, Bắc Kinh thực sự mang đến trải nghiệm đa dạng, hòa quyện giữa lịch sử, văn hóa và nhịp sống đô thị năng động.\r\n', 'public/image/bk.jpg', 16, 2, 1, '2025-11-28 11:40:57'),
(12, 'Khám phá Tứ Tỉnh Miền Tây', 'Dưới đây là phiên bản viết liền, liền mạch, khoảng 150 từ về Tứ Tỉnh Miền Tây (An Giang, Kiên Giang, Cần Thơ, Vĩnh Long):\r\n\r\nKhám phá Tứ Tỉnh Miền Tây mang đến cho du khách trải nghiệm độc đáo giữa thiên nhiên sông nước, từ những chợ nổi nhộn nhịp ở Cần Thơ, nơi những chiếc thuyền đầy ắp trái cây và hàng hóa tỏa hương ngọt ngào, đến Vĩnh Long với những vườn trái cây trĩu quả và rừng ngập mặn phong phú, An Giang nổi bật với núi non hùng vĩ, các di tích Phật giáo và văn hóa dân tộc Chăm, trong khi Kiên Giang chinh phục du khách bởi đảo ngọc Phú Quốc, bãi biển cát trắng và làng chài bình yên, hành trình còn đưa du khách thưởng thức ẩm thực đặc trưng miền Tây như cá lóc nướng trui, hủ tiếu, bánh xèo và tham gia các hoạt động trải nghiệm địa phương, Tứ Tỉnh Miền Tây thực sự là điểm đến lý tưởng cho những ai yêu thiên nhiên sông nước, văn hóa đa dạng và nhịp sống thân thiện, tạo nên những hành trình khám phá khó quên.\r\n', 'public/image/tutinh.png', 16, 1, 1, '2025-11-28 11:41:28'),
(30, 'h', '<p>fff</p>', 'public/uploads/1764664027Ảnh chụp màn hình 2025-12-01 182320.png', 16, 1, 0, '2025-12-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_pt`
--

CREATE TABLE `danhmuc_pt` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0:khác,1:xe du lịch,2 :tàu , 3 : máy bay'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc_pt`
--

INSERT INTO `danhmuc_pt` (`id`, `name`) VALUES
(1, 'Xe du lịch'),
(2, 'Tàu'),
(3, 'Máy bay'),
(4, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `booking_id` int NOT NULL,
  `ma_booking` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lkh_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `ten_khach` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_khach` int DEFAULT NULL,
  `tong_tien` decimal(12,0) DEFAULT NULL,
  `tien_coc` decimal(12,0) DEFAULT NULL,
  `trang_thai` enum('chờ','cọc','hoàn','hủy') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'chờ',
  `ngay_dat` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_checkin`
--

CREATE TABLE `tb_checkin` (
  `ci_id` int NOT NULL,
  `kh_id` int NOT NULL,
  `lkh_id` int NOT NULL,
  `thoi_gian` datetime DEFAULT NULL,
  `trang_thai` enum('có mặt','vắng','muộn') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `dm_id` tinyint NOT NULL,
  `ten_danhmuc` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Trong nước, Quốc tế, Custom',
  `mo_ta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`dm_id`, `ten_danhmuc`, `mo_ta`) VALUES
(1, 'Du lịch Trong Nước', 'Khám phá vẻ đẹp Việt Nam hùng vĩ'),
(2, 'Du lịch Quốc Tế', 'Trải nghiệm văn hóa thế giới'),
(3, 'Tour Mạo Hiểm', 'Trekking, leo núi, thám hiểm hang động');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dat_dichvu`
--

CREATE TABLE `tb_dat_dichvu` (
  `dv_id` int NOT NULL,
  `lkh_id` int NOT NULL,
  `ncc_id` int NOT NULL,
  `ngay_su_dung` date DEFAULT NULL,
  `chi_phi` decimal(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_diemden`
--

CREATE TABLE `tb_diemden` (
  `dd_id` int NOT NULL,
  `ten_diemden` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `dia_chi` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `tinh_thanh` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `quoc_gia` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'Việt Nam',
  `toa_do` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lat,long',
  `tour_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_doanhthu`
--

CREATE TABLE `tb_doanhthu` (
  `dt_id` int NOT NULL,
  `lkh_id` int NOT NULL,
  `doanh_thu` decimal(12,0) DEFAULT NULL,
  `ngay_cap_nhat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ghi_chu`
--

CREATE TABLE `tb_ghi_chu` (
  `gc_id` int NOT NULL,
  `kh_id` int NOT NULL,
  `loai` enum('ăn chay','dị ứng','bệnh lý','khác') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_dung` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gia_tour`
--

CREATE TABLE `tb_gia_tour` (
  `gia_id` int NOT NULL,
  `tour_id` int NOT NULL,
  `tu_ngay` date DEFAULT NULL,
  `den_ngay` date DEFAULT NULL,
  `gia_nguoilon` decimal(12,0) DEFAULT NULL,
  `gia_treem` decimal(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hdv`
--

CREATE TABLE `tb_hdv` (
  `hdv_id` int NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngon_ngu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kinh_nghiem` year DEFAULT NULL,
  `trang_thai` enum('rảnh','bận','nghỉ') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'rảnh'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hinh_anh`
--

CREATE TABLE `tb_hinh_anh` (
  `ha_id` int NOT NULL,
  `tour_id` int NOT NULL,
  `url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_thumbnail` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_khachsan`
--

CREATE TABLE `tb_khachsan` (
  `ks_id` int NOT NULL,
  `ten_ks` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `hang_sao` tinyint DEFAULT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_moi_dem` decimal(12,0) DEFAULT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_khach_doan`
--

CREATE TABLE `tb_khach_doan` (
  `kh_id` int NOT NULL,
  `booking_id` int NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `gio_tinh` enum('nam','nữ','khác') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nam_sinh` year DEFAULT NULL,
  `cmnd_cccd` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lich_khoihanh`
--

CREATE TABLE `tb_lich_khoihanh` (
  `lkh_id` int NOT NULL,
  `tour_id` int NOT NULL,
  `ngay_khoihanh` date NOT NULL,
  `ngay_ketthuc` date NOT NULL,
  `gio_khoihanh` time DEFAULT NULL,
  `diem_tap_trung` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `so_cho_con_lai` smallint DEFAULT NULL,
  `trang_thai` enum('open','full','done','cancel') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_lich_khoihanh`
--

INSERT INTO `tb_lich_khoihanh` (`lkh_id`, `tour_id`, `ngay_khoihanh`, `ngay_ketthuc`, `gio_khoihanh`, `diem_tap_trung`, `so_cho_con_lai`, `trang_thai`) VALUES
(1, 1, '2025-12-05', '2025-12-08', '07:00:00', 'Nhà Hát Lớn', 28, 'open'),
(2, 2, '2025-11-24', '2025-11-27', '22:00:00', 'Bến xe Mỹ Đình', 5, 'open'),
(3, 3, '2025-10-25', '2025-10-29', '08:00:00', 'Sân bay Nội Bài', 0, 'done'),
(4, 4, '2025-11-30', '2025-12-05', '05:00:00', 'Sân bay Tân Sơn Nhất', 45, 'open'),
(5, 4, '2025-11-19', '2025-11-23', NULL, NULL, 36, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lich_trinh`
--

CREATE TABLE `tb_lich_trinh` (
  `ltr_id` int NOT NULL,
  `tour_id` int NOT NULL,
  `ngay_thu` tinyint DEFAULT NULL,
  `tieu_de` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `noi_dung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_lich_trinh`
--

INSERT INTO `tb_lich_trinh` (`ltr_id`, `tour_id`, `ngay_thu`, `tieu_de`, `noi_dung`) VALUES
(1, 1, 1, 'Hà Nội - Hạ Long', 'Xe đón quý khách tại điểm hẹn, khởi hành đi Hạ Long. Ăn trưa trên tàu.'),
(2, 1, 2, 'Vịnh Hạ Long - Yên Tử', 'Tham quan hang Sửng Sốt, đảo Ti Tốp. Chiều di chuyển về Yên Tử.'),
(3, 1, 3, 'Yên Tử - Hà Nội', 'Lên chùa Đồng. Ăn trưa tại nhà hàng. Chiều xe đưa về Hà Nội.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nhacungcap`
--

CREATE TABLE `tb_nhacungcap` (
  `ncc_id` int NOT NULL,
  `ten_ncc` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `loai_dich_vu` enum('khách sạn','xe','nhà hàng','vé') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nhatky`
--

CREATE TABLE `tb_nhatky` (
  `nk_id` int NOT NULL,
  `lkh_id` int NOT NULL,
  `ngay` date DEFAULT NULL,
  `nguoi_nhap` int DEFAULT NULL,
  `noi_dung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `hinh_anh` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_phanbo_hdv`
--

CREATE TABLE `tb_phanbo_hdv` (
  `pb_id` int NOT NULL,
  `lkh_id` int NOT NULL,
  `hdv_id` int NOT NULL,
  `vai_tro` enum('chính','phụ') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_phanbo_ks`
--

CREATE TABLE `tb_phanbo_ks` (
  `pbks_id` int NOT NULL,
  `lkh_id` int NOT NULL,
  `ks_id` int NOT NULL,
  `so_dem` smallint DEFAULT '1',
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `ghi_chu` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_phanbo_pt`
--

CREATE TABLE `tb_phanbo_pt` (
  `pbpt_id` int NOT NULL,
  `lkh_id` int NOT NULL,
  `pt_id` int NOT NULL,
  `tu_ngay` date DEFAULT NULL,
  `den_ngay` date DEFAULT NULL,
  `ghi_chu` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_phuongtien`
--

CREATE TABLE `tb_phuongtien` (
  `pt_id` int NOT NULL,
  `loai_pt_id` int DEFAULT NULL,
  `loai_pt` enum('xe du lịch','tàu','máy bay','xe bus','khác') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'xe du lịch',
  `bien_so` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_cho_ngoi` smallint DEFAULT NULL,
  `ten_tai_xe` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `phone_tai_xe` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chi_phi` decimal(12,0) DEFAULT NULL,
  `trang_thai` enum('rảnh','đang chạy','bảo trì') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'rảnh',
  `ten_pt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_pt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_phuongtien`
--

INSERT INTO `tb_phuongtien` (`pt_id`, `loai_pt_id`, `loai_pt`, `bien_so`, `so_cho_ngoi`, `ten_tai_xe`, `phone_tai_xe`, `chi_phi`, `trang_thai`, `ten_pt`, `anh_pt`) VALUES
(9, 3, 'xe du lịch', 'VN-A862', 120, 'Nguyen Thanh Dat', NULL, NULL, 'rảnh', 'Máy bay Airlines VN238', 'public/uploads/1764337939mb.jpg'),
(10, 1, 'xe du lịch', '29B-12345', 45, 'Nguyen Thanh Dat', NULL, NULL, 'rảnh', 'Xe du lich', 'public/uploads/1764338006dl.webp'),
(11, 2, 'xe du lịch', 'VN-12345', 235, 'Nguyen Thanh Dat', NULL, NULL, 'rảnh', 'Tàu Icon Sear', 'public/uploads/1764338119tau.jpg'),
(12, 4, 'xe du lịch', '29b-12345', 909, 'Nguyen Thanh Dat', NULL, NULL, 'rảnh', 'Máy bay Airlines VN237', 'public/uploads/1764405279mb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:HDV,1:admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id`, `name`) VALUES
(0, 'Hướng Dẫn Viên'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tour`
--

CREATE TABLE `tb_tour` (
  `tour_id` int NOT NULL,
  `ma_tour` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_tour` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `so_ngay` tinyint DEFAULT '1' COMMENT 'Số ngày đi tour',
  `dm_id` tinyint NOT NULL,
  `gia_co_ban` decimal(12,0) DEFAULT NULL,
  `so_cho_toi_da` smallint DEFAULT NULL,
  `anh_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_xuat_phat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Nơi khởi hành',
  `diem_den` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Điểm đến chính',
  `mo_ta_tour` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'Mô tả chi tiết tour',
  `trang_thai` enum('draft','publish','stop') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Thông tin tour';

--
-- Dumping data for table `tb_tour`
--

INSERT INTO `tb_tour` (`tour_id`, `ma_tour`, `ten_tour`, `so_ngay`, `dm_id`, `gia_co_ban`, `so_cho_toi_da`, `anh_tour`, `noi_xuat_phat`, `diem_den`, `mo_ta_tour`, `trang_thai`) VALUES
(1, 'TOUR_HL01', 'Hà Nội - Hạ Long - Yên Tử 3N2Đ', 3, 1, '3500000', 30, NULL, NULL, NULL, NULL, 'publish'),
(2, 'TOUR_SP01', 'Sapa - Fansipan - Bản Cát Cát Săn Mây', 3, 1, '2800000', 25, NULL, NULL, NULL, NULL, 'publish'),
(3, 'TOUR_DN01', 'Đà Nẵng - Hội An - Bà Nà Hills', 3, 1, '4200000', 40, NULL, NULL, NULL, NULL, 'publish'),
(4, 'TOUR_TL01', 'Bangkok - Pattaya - Đảo San Hô', 5, 2, '6500000', 50, NULL, NULL, NULL, NULL, 'publish'),
(5, 'TOUR_PQ01', 'Phú Quốc - Đảo Ngọc Thiên Đường', 3, 1, '5100000', 35, NULL, NULL, NULL, NULL, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 0=inactive',
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` int DEFAULT '0' COMMENT '0: HDV, 1: Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `password`, `phone`, `address`, `role_id`, `status`, `create_at`, `role`) VALUES
(1, 'Nguyễn Quang Huy', 'huynguyen1582006@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '0376764702', '0', 1, 1, '2025-12-02 20:28:26', 1),
(16, 'Nguyễn Thành Đạt', 'datbinn06@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '0987654321', 'ha noi', 1, 1, '2025-11-26 16:29:27', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_author` (`author_id`),
  ADD KEY `lk_category` (`category_id`),
  ADD KEY `lk_status` (`status`);

--
-- Indexes for table `danhmuc_pt`
--
ALTER TABLE `danhmuc_pt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `ma_booking` (`ma_booking`),
  ADD KEY `lkh_id` (`lkh_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `idx_booking_trangthai` (`trang_thai`);

--
-- Indexes for table `tb_checkin`
--
ALTER TABLE `tb_checkin`
  ADD PRIMARY KEY (`ci_id`),
  ADD KEY `kh_id` (`kh_id`),
  ADD KEY `lkh_id` (`lkh_id`);

--
-- Indexes for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `tb_dat_dichvu`
--
ALTER TABLE `tb_dat_dichvu`
  ADD PRIMARY KEY (`dv_id`),
  ADD KEY `lkh_id` (`lkh_id`),
  ADD KEY `ncc_id` (`ncc_id`);

--
-- Indexes for table `tb_diemden`
--
ALTER TABLE `tb_diemden`
  ADD PRIMARY KEY (`dd_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tb_doanhthu`
--
ALTER TABLE `tb_doanhthu`
  ADD PRIMARY KEY (`dt_id`),
  ADD KEY `lkh_id` (`lkh_id`);

--
-- Indexes for table `tb_ghi_chu`
--
ALTER TABLE `tb_ghi_chu`
  ADD PRIMARY KEY (`gc_id`),
  ADD KEY `kh_id` (`kh_id`);

--
-- Indexes for table `tb_gia_tour`
--
ALTER TABLE `tb_gia_tour`
  ADD PRIMARY KEY (`gia_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tb_hdv`
--
ALTER TABLE `tb_hdv`
  ADD PRIMARY KEY (`hdv_id`);

--
-- Indexes for table `tb_hinh_anh`
--
ALTER TABLE `tb_hinh_anh`
  ADD PRIMARY KEY (`ha_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tb_khachsan`
--
ALTER TABLE `tb_khachsan`
  ADD PRIMARY KEY (`ks_id`);

--
-- Indexes for table `tb_khach_doan`
--
ALTER TABLE `tb_khach_doan`
  ADD PRIMARY KEY (`kh_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `tb_lich_khoihanh`
--
ALTER TABLE `tb_lich_khoihanh`
  ADD PRIMARY KEY (`lkh_id`),
  ADD KEY `tour_id` (`tour_id`),
  ADD KEY `idx_lkh_ngay` (`ngay_khoihanh`);

--
-- Indexes for table `tb_lich_trinh`
--
ALTER TABLE `tb_lich_trinh`
  ADD PRIMARY KEY (`ltr_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tb_nhacungcap`
--
ALTER TABLE `tb_nhacungcap`
  ADD PRIMARY KEY (`ncc_id`);

--
-- Indexes for table `tb_nhatky`
--
ALTER TABLE `tb_nhatky`
  ADD PRIMARY KEY (`nk_id`),
  ADD KEY `lkh_id` (`lkh_id`),
  ADD KEY `nguoi_nhap` (`nguoi_nhap`);

--
-- Indexes for table `tb_phanbo_hdv`
--
ALTER TABLE `tb_phanbo_hdv`
  ADD PRIMARY KEY (`pb_id`),
  ADD UNIQUE KEY `lkh_id` (`lkh_id`,`hdv_id`),
  ADD KEY `hdv_id` (`hdv_id`);

--
-- Indexes for table `tb_phanbo_ks`
--
ALTER TABLE `tb_phanbo_ks`
  ADD PRIMARY KEY (`pbks_id`),
  ADD UNIQUE KEY `lkh_id` (`lkh_id`,`ks_id`),
  ADD KEY `ks_id` (`ks_id`);

--
-- Indexes for table `tb_phanbo_pt`
--
ALTER TABLE `tb_phanbo_pt`
  ADD PRIMARY KEY (`pbpt_id`),
  ADD UNIQUE KEY `lkh_id` (`lkh_id`,`pt_id`),
  ADD KEY `pt_id` (`pt_id`);

--
-- Indexes for table `tb_phuongtien`
--
ALTER TABLE `tb_phuongtien`
  ADD PRIMARY KEY (`pt_id`),
  ADD KEY `lk_dm_pt` (`loai_pt_id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tour`
--
ALTER TABLE `tb_tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD UNIQUE KEY `ma_tour` (`ma_tour`),
  ADD KEY `dm_id` (`dm_id`),
  ADD KEY `idx_tour_ma` (`ma_tour`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `lk_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `danhmuc_pt`
--
ALTER TABLE `danhmuc_pt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `booking_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_checkin`
--
ALTER TABLE `tb_checkin`
  MODIFY `ci_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `dm_id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_dat_dichvu`
--
ALTER TABLE `tb_dat_dichvu`
  MODIFY `dv_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_diemden`
--
ALTER TABLE `tb_diemden`
  MODIFY `dd_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_doanhthu`
--
ALTER TABLE `tb_doanhthu`
  MODIFY `dt_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ghi_chu`
--
ALTER TABLE `tb_ghi_chu`
  MODIFY `gc_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_gia_tour`
--
ALTER TABLE `tb_gia_tour`
  MODIFY `gia_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hdv`
--
ALTER TABLE `tb_hdv`
  MODIFY `hdv_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hinh_anh`
--
ALTER TABLE `tb_hinh_anh`
  MODIFY `ha_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_khachsan`
--
ALTER TABLE `tb_khachsan`
  MODIFY `ks_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_khach_doan`
--
ALTER TABLE `tb_khach_doan`
  MODIFY `kh_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_lich_khoihanh`
--
ALTER TABLE `tb_lich_khoihanh`
  MODIFY `lkh_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tb_lich_trinh`
--
ALTER TABLE `tb_lich_trinh`
  MODIFY `ltr_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_nhacungcap`
--
ALTER TABLE `tb_nhacungcap`
  MODIFY `ncc_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nhatky`
--
ALTER TABLE `tb_nhatky`
  MODIFY `nk_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_phanbo_hdv`
--
ALTER TABLE `tb_phanbo_hdv`
  MODIFY `pb_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_phanbo_ks`
--
ALTER TABLE `tb_phanbo_ks`
  MODIFY `pbks_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_phanbo_pt`
--
ALTER TABLE `tb_phanbo_pt`
  MODIFY `pbpt_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_phuongtien`
--
ALTER TABLE `tb_phuongtien`
  MODIFY `pt_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tour`
--
ALTER TABLE `tb_tour`
  MODIFY `tour_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `lk_author` FOREIGN KEY (`author_id`) REFERENCES `tb_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_category` FOREIGN KEY (`category_id`) REFERENCES `tb_danhmuc` (`dm_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`lkh_id`) REFERENCES `tb_lich_khoihanh` (`lkh_id`),
  ADD CONSTRAINT `tb_booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_checkin`
--
ALTER TABLE `tb_checkin`
  ADD CONSTRAINT `tb_checkin_ibfk_1` FOREIGN KEY (`kh_id`) REFERENCES `tb_khach_doan` (`kh_id`),
  ADD CONSTRAINT `tb_checkin_ibfk_2` FOREIGN KEY (`lkh_id`) REFERENCES `tb_lich_khoihanh` (`lkh_id`);

--
-- Constraints for table `tb_dat_dichvu`
--
ALTER TABLE `tb_dat_dichvu`
  ADD CONSTRAINT `tb_dat_dichvu_ibfk_1` FOREIGN KEY (`lkh_id`) REFERENCES `tb_lich_khoihanh` (`lkh_id`),
  ADD CONSTRAINT `tb_dat_dichvu_ibfk_2` FOREIGN KEY (`ncc_id`) REFERENCES `tb_nhacungcap` (`ncc_id`);

--
-- Constraints for table `tb_diemden`
--
ALTER TABLE `tb_diemden`
  ADD CONSTRAINT `tb_diemden_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tb_tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_doanhthu`
--
ALTER TABLE `tb_doanhthu`
  ADD CONSTRAINT `tb_doanhthu_ibfk_1` FOREIGN KEY (`lkh_id`) REFERENCES `tb_lich_khoihanh` (`lkh_id`);

--
-- Constraints for table `tb_ghi_chu`
--
ALTER TABLE `tb_ghi_chu`
  ADD CONSTRAINT `tb_ghi_chu_ibfk_1` FOREIGN KEY (`kh_id`) REFERENCES `tb_khach_doan` (`kh_id`);

--
-- Constraints for table `tb_gia_tour`
--
ALTER TABLE `tb_gia_tour`
  ADD CONSTRAINT `tb_gia_tour_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tb_tour` (`tour_id`);

--
-- Constraints for table `tb_hinh_anh`
--
ALTER TABLE `tb_hinh_anh`
  ADD CONSTRAINT `tb_hinh_anh_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tb_tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_khach_doan`
--
ALTER TABLE `tb_khach_doan`
  ADD CONSTRAINT `tb_khach_doan_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `tb_booking` (`booking_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_lich_khoihanh`
--
ALTER TABLE `tb_lich_khoihanh`
  ADD CONSTRAINT `tb_lich_khoihanh_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tb_tour` (`tour_id`);

--
-- Constraints for table `tb_lich_trinh`
--
ALTER TABLE `tb_lich_trinh`
  ADD CONSTRAINT `tb_lich_trinh_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tb_tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_nhatky`
--
ALTER TABLE `tb_nhatky`
  ADD CONSTRAINT `tb_nhatky_ibfk_1` FOREIGN KEY (`lkh_id`) REFERENCES `tb_lich_khoihanh` (`lkh_id`),
  ADD CONSTRAINT `tb_nhatky_ibfk_2` FOREIGN KEY (`nguoi_nhap`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_phanbo_hdv`
--
ALTER TABLE `tb_phanbo_hdv`
  ADD CONSTRAINT `tb_phanbo_hdv_ibfk_1` FOREIGN KEY (`lkh_id`) REFERENCES `tb_lich_khoihanh` (`lkh_id`),
  ADD CONSTRAINT `tb_phanbo_hdv_ibfk_2` FOREIGN KEY (`hdv_id`) REFERENCES `tb_hdv` (`hdv_id`);

--
-- Constraints for table `tb_phanbo_ks`
--
ALTER TABLE `tb_phanbo_ks`
  ADD CONSTRAINT `tb_phanbo_ks_ibfk_1` FOREIGN KEY (`lkh_id`) REFERENCES `tb_lich_khoihanh` (`lkh_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_phanbo_ks_ibfk_2` FOREIGN KEY (`ks_id`) REFERENCES `tb_khachsan` (`ks_id`);

--
-- Constraints for table `tb_phanbo_pt`
--
ALTER TABLE `tb_phanbo_pt`
  ADD CONSTRAINT `tb_phanbo_pt_ibfk_1` FOREIGN KEY (`lkh_id`) REFERENCES `tb_lich_khoihanh` (`lkh_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_phanbo_pt_ibfk_2` FOREIGN KEY (`pt_id`) REFERENCES `tb_phuongtien` (`pt_id`);

--
-- Constraints for table `tb_phuongtien`
--
ALTER TABLE `tb_phuongtien`
  ADD CONSTRAINT `lk_dm_pt` FOREIGN KEY (`loai_pt_id`) REFERENCES `danhmuc_pt` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tb_tour`
--
ALTER TABLE `tb_tour`
  ADD CONSTRAINT `tb_tour_ibfk_1` FOREIGN KEY (`dm_id`) REFERENCES `tb_danhmuc` (`dm_id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `lk_role` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
