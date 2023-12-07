-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 02, 2023 lúc 12:53 PM
-- Phiên bản máy phục vụ: 5.7.25
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Kem chóng nắng'),
(2, 'Toner'),
(3, 'Son'),
(4, 'Kem dưỡng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
--

CREATE TABLE `diachi` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `macdinh` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi_id` int(11) DEFAULT NULL,
  `ngay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tongtien` float NOT NULL DEFAULT '0',
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangct`
--

CREATE TABLE `donhangct` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) NOT NULL,
  `mathang_id` int(11) NOT NULL,
  `dongia` float NOT NULL DEFAULT '0',
  `soluong` int(11) NOT NULL DEFAULT '1',
  `thanhtien` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

CREATE TABLE `mathang` (
  `id` int(11) NOT NULL,
  `tenmathang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `giagoc` float NOT NULL DEFAULT '0',
  `giaban` float NOT NULL DEFAULT '0',
  `soluongton` int(11) NOT NULL DEFAULT '0',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT '0',
  `luotmua` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`id`, `tenmathang`, `mota`, `giagoc`, `giaban`, `soluongton`, `hinhanh`, `danhmuc_id`, `luotxem`, `luotmua`) VALUES
(22, 'Kem Chống Nắng La Roche-Posay Kiểm Soát Dầu SPF50+ 50ml', '<p>Kem chống nắng La Roche-Posay UVMune 400 Oil Control Gel Cream phiên bản mới được cải tiến với nồng độ phần trăm hoạt chất Airlicium được tăng lên, mang đến hiệu quả kiềm dầu tốt hơn đến 12h. Ngoài ra, sản phẩm còn có kết cấu mới dễ tán, thấm nhanh không gây vón, mang lại cho bạn một lớp finish mịn lì và bóng khỏe tự nhiên.</p>', 399000, 120000, 100, 'images/products/k1.jpg', 1, 1, 0),
(23, 'Kem Chống Nắng Skin Aqua Tone Up Essence 50ml (hồng)', '<p>CÔNG DỤNG : - Sự hòa quyện sắc hồng đậm và sắc vỏ cam nhạt: tạo nên màu cánh hồng giúp hiệu chỉnh tông da tái xanh, che phủ khuyết điểm tự nhiên. -Hạt ngọc trai siêu mịn: phản chiếu ánh sáng da chiều, cho da trong suốt, rạng rỡ. - Vitamin C &amp; B3: dưỡng da sáng mịn - Hương hoa hồng tự nhiên lan tỏa hạnh phúc --Các hạt ngọc trai siêu mịn, - Hyaluronic Acid và Vitamin C LOẠI DA PHÙ HỢP : - Mọi loại da , đặc biệt tông da sáng có sắc tái xanh</p>', 199000, 199000, 80, 'images/products/k2.jpg', 1, 0, 0),
(24, 'Kem chống nắng vật lý Fixderma Shadow Cream SPF 50+ PA+++', '<p>Kem chống nắng vật lý Fixderma Shadow Cream SPF 50+ PA+++ không những giúp ngăn chặn các dấu hiệu lão hóa do tiếp xúc với nhiều tia UVA/UVB mà còn cung cấp chất dưỡng ẩm tuyệt vời chống lại sự khô da, duy trì độ ẩm và sự mềm mại tối ưu cho da mà không gây dính, ngăn chặn cả hai bước sóng cực tím A &amp; B cũng như cung cấp thêm chất chống oxy hóa giúp bảo vệ da.</p>', 310000, 200000, 60, 'images/products/k3.jpg', 1, 0, 0),
(25, 'Kem chống nắng dưỡng thể Cica & Sensitive Care Sun Lotion', 'Kem Cica & Sensitive Care Sun Lotion – chống nắng cica\r\nSản phẩm có kết cấu nhẹ nhàng, thẩm thấu nhanh chóng vào da, không hề gây bí rít khó chịu. Giúp làm trắng da. Giúp cải thiện nếp nhăn trên da. bảo vệ da khỏi tia UV với chỉ số chống nắng SPF50+ PA ++++.\r\nMang đến làn da mềm mịn & tăng cường hàng rào bảo vệ da, chống nắng hiệu quả.', 352000, 252000, 70, 'images/products/k4.jpg', 1, 0, 0),
(26, 'Kem Chống Nắng Hây Hây - Bổ Sung AmitoseR Dưỡng Ẩm Thiên Nhiên', 'Kem chống nắng Hây Hây là sản phẩm kem chống nắng của công ty cổ phần mỹ phẩm thiên nhiên Cỏ Mềm giúp bảo vệ da khỏi tác động xấu của các tia cực tím, đem đến cho bạn làn da mềm mại, khỏe mạnh hơn đồng thời góp phần hạn chế quá trình lão hóa cho da và cải thiện tình trạng da dầu mụn.', 260000, 260000, 98, 'images/products/k5.jpg', 1, 0, 0),
(27, 'Toner chiết xuất hoa hồng Mamonde', 'Đây là loại nước cân bằng da êm dịu nhất, chứa nước và chất dưỡng ẩm như glycerin và rất ít alcohol (từ 0-10%). Skin Freshener có chức năng cung cấp nước, refresh cho da, làm mát da. Bên cạnh đó, trong skin freshener còn sử dụng nước tinh chất từ các loại hoa như hoa hồng, cúc La Mã, oải hương, trà xanh cùng với chiết xuất nha đam, thảo dược… để tăng cường dưỡng chất cho làn da. Thông thường, ‘nước hoa hồng’ – thuật ngữ thường được dùng để nói về nước cân bằng da trong tiếng Việt, thực ra là để nói đến loại Skin Freshener này.', 250000, 250000, 50, 'images/products/t1.jpg', 2, 0, 0),
(28, 'Nước Cân Bằng Eucerin ProAcne Toner Cho Da Nhờn Mụn | Eucerin', '<p>Eucerin ProAcne - Toner có thể được sử dụng như một bước trong tiến trình tẩy trang, giúp cân bằng độ ẩm và độ pH, tối ưu hiệu quả làm sạch và chăm sóc da hàng ngày. Sản phẩm có công thức chứa 2% Lactic Acid với hoạt tính hỗ trợ ngăn ngừa vi khuẩn gây mụn , thu nhỏ lỗ chân lông mà không làm khô da. Sản phẩm đặc biệt hiệu quả cho vùng da chữ T và các vùng da có vấn đề khác, đồng thời cũng có thể dùng chung với các loại thuốc trị mụn thông thường.</p>', 300000, 250000, 20, 'images/products/t2.jpg', 2, 0, 0),
(29, 'Nước hoa hồng không mùi Klairs Supple Preparation Unscented Toner', '<p>Nước hoa hồng không mùi Dear Klairs dưỡng ẩm và làm mềm da Supple Preparation Unscented Toner có chiết xuất từ thực vật, giúp cân bằng độ pH, tăng cường hiệu quả chăm sóc da Toner có dạng trong suốt, không màu, lỏng, nhẹ, hơi nhớt, thấm rất nhanh trên da. Sản phẩm giúp loại bỏ bụi bẩn và bã nhờn dư thừa trên da sau khi rửa mặt đồng thời cân bằng độ pH để các bước skincare tiếp theo đạt hiệu quả hơn.</p>', 350000, 280000, 36, 'images/products/t3.jpg', 2, 0, 0),
(30, 'NORMACNE Cleansing and regulating skin toner - Toner làm sạch dành cho da dầu, mụn', '<p>NORMACNE Cleansing and regulating skin toner là toner có công thức dành riêng cho da dầu, mụn, những làn da có vấn đề về lỗ chân lông Công dụng: Làm dịu viêm da cục bộ. Phục hồi cân bằng lớp màng Hydrolipid trên da. Ức chế sản xuất bã nhờn. Giảm mụn đầu đen, mụn viêm và thu nhỏ lỗ chân lông. Cấp ẩm an toàn cho da mụn với Glicerin Không làm khô, không gây kích ứng da.</p>', 350000, 350000, 40, 'images/products/t4.jpg', 2, 0, 0),
(31, 'Toner cân bằng, kháng viêm Physiodermie Stabilizing Lotion 200ml ', 'Nước hoa hồng cân bằng độ pH cho da có tác dụng cấp ẩm, làm dịu, kháng viêm, se lỗ chân lông. Loại bỏ những tạp chất còn sót lại sau khi làm sạch bằng sữa rửa mặt, tạo độ pH lý tưởng cho da. Thích hợp cho da nhạy cảm sau laser, lăn kim, nặn mụn.', 1500000, 1250000, 20, 'images/products/t5.jpg', 2, 0, 0),
(32, 'SON KEM BLACK ROUGE POWER PROOF MATTE TINT (DÒNG MT) CHÍNH HÃNG', 'Thỏi son mang đậm phong cách Black Rouge với sự cải tiến thỏi nhỏ gọn, dáng thanh tao.\r\nThân vỏ hình trụ tròn, trong suốt, hơi mờ, giúp bạn nhìn được màu son thật bên trong.\r\nNắp son vặn màu hồng nhạt mang lại cảm giác ngọt ngào, dễ chịu.\r\nĐầu cọ cải tiến lỗ thoát khí giúp môi ẩm mà vẫn lì, hạn chế gây khô son và giúp màu bám mướt hơn.', 102000, 99000, 120, 'images/products/s1.jpg', 3, 0, 0),
(33, 'Son Kem Bóng Bền Màu, Nhẹ Môi Maybelline New York Superstay Vinyl Ink 4.2ml', 'Son Kem Bóng Bền Màu, Nhẹ Môi Maybelline New York Superstay Vinyl Ink 4.2ml là son kem lì đến từ thương hiệu Maybelline chứa công thức đột phá mới với công nghệ “khóa” màu thách thức lem trôi, nhẹ mướt, để lại lớp bóng nhẹ tinh tế, cho đôi môi căng tràn sức sống. Son bóng lên màu chuẩn, nhưng vẫn duy trì độ ẩm và giữ được sự mềm mịn cho môi.', 298000, 259000, 45, 'images/products/s2.jpg', 3, 0, 0),
(34, 'Son Kem Bóng Bền Màu, Nhẹ Môi Maybelline New York Superstay Vinyl Ink 4.2ml', 'Son Kem Bóng Bền Màu, Nhẹ Môi Maybelline New York Superstay Vinyl Ink 4.2ml là son kem lì đến từ thương hiệu Maybelline chứa công thức đột phá mới với công nghệ “khóa” màu thách thức lem trôi, nhẹ mướt, để lại lớp bóng nhẹ tinh tế, cho đôi môi căng tràn sức sống. Son bóng lên màu chuẩn, nhưng vẫn duy trì độ ẩm và giữ được sự mềm mịn cho môi.', 298000, 259000, 45, 'images/products/s2.jpg', 3, 0, 0),
(35, 'Son Kem Fenty Beauty Icon Velvet Liquid Lipstick THE MVP Màu Đỏ Tươi', 'Son Kem Fenty Beauty Icon Velvet Liquid Lipstick THE MVP Màu Đỏ Tươi là thỏi son cao cấp đến từ thương hiệu Fenty Beauty nổi tiếng. Fenty Beauty THE MVP sở hữu tồn màu đỏ tươi nổi bật thu hút cùng chất son mịn lì cho đôi môi thêm xinh xắn, quyến rũ hơn.', 980000, 899000, 67, 'images/products/s3.jpg', 3, 0, 0),
(36, 'Son Kem Lì 3CE Hazy Lip Clay (New) 4g', 'Son Kem Lì 3CE Hazy Lip Clay (Mới) là dòng son tint dạng kem đến từ thương hiệu 3CE của Hàn Quốc được ra mắt với các tone màu cực trendy và tôn da, cực kì phù hợp cho tiết trời Thu – Đông.', 245000, 245000, 34, 'images/products/s4.jpg', 3, 0, 0),
(37, 'Son Thỏi 3CE Mịn Lì 222 Step And Go - Đỏ Đất 3.5g Mood Recipe Matte Lip Color', 'Son Thỏi Mịn Lì 3CE 3.5g là sản phẩm son môi đến từ thương hiệu mỹ phẩm nổi tiếng 3CE của Hàn Quốc, chất son dạng Primer matte tăng độ bám, giảm hiện tượng son trượt môi, tạo đường viền môi gọn gàng, không hề gây khó chịu hay nặng môi giúp môi thêm gợi cảm, thu hút.', 380000, 344000, 38, 'images/products/s5.jpg', 3, 0, 0),
(38, 'Kem Dưỡng I\'m From Vitamin Tree Water Gel Dưỡng Ẩm Sáng Da Kiềm Dầu 75g', 'Kem dưỡng là bước cuối cùng trong quá trình chăm sóc da. Vì thế lựa chọn một sản phẩm kem dưỡng có tác dụng cấp ẩm, cải thiện và phục hồi sức khỏe cho da, bảo vệ da,... là một việc rất quan trọng để có một làn da trẻ trung, khỏe đẹp. Kem Dưỡng Da I\'m From Vitamin Tree Water Gel đến từ thương hiệu mỹ phẩm thiên nhiên nổi tiếng của Hàn Quốc I’m From chính là một sản phẩm dưỡng da đa công dụng mà mọi cô gái đang tìm kiếm.', 340000, 308000, 35, 'images/products/d1.jpg', 4, 0, 0),
(39, 'Kyung Lab Kem dưỡng Ultra Hydrating Cream 50ml', 'Kem dưỡng Kyung Lab Ultra Hydrating Cream có tác dụng cấp ẩm vượt trội, bổ sung nước tầng sâu, giúp tăng sinh Collagen, ngăn ngừa lão hóa, dưỡng da trắng hồng tự nhiên.', 550000, 500000, 57, 'images/products/d2.jpg', 4, 0, 0),
(40, 'Kem dưỡng ẩm cho da khô, mất nước Klairs Rich Moist Soothing Cream 80ml', 'Sản phẩm giúp dưỡng ẩm sâu nhằm khôi phục cân bằng độ ẩm, giúp da trở nên rạng rỡ và căng bóng hơn, bên cạnh đó làm dịu da và giảm mẩn đỏ, hỗ trợ giảm sự xuất hiện của lỗ chân lông to, cho làn da cảm giác thoải mái và dễ chịu suốt cả ngày dài.', 515000, 435000, 36, 'images/products/d3.jpg', 4, 0, 0),
(41, 'Kem Dưỡng Dạng Nước Kiehl\'s Calendula Serum-Infused Water Cream 50ml', 'Tinh chất Hoa Cúc được điều chế với nồng độ cô đặc cao nhất của chiết xuất Hoa Cúc và hàng trăm cánh Hoa Cúc nghiền nhuyễn siêu mịn. Trong công thức của Kiehl\'s, hoa cúc Calendula được biết đến với công dụng liên tục bổ sung các hợp chất quan trọng giúp giảm cảm giác khó chịu trên da dài lâu.', 1500000, 1500000, 18, 'images/products/d4.jpg', 4, 0, 0),
(42, 'Kem Dưỡng Innisfree Green Tea Balancing Cream Dưỡng Ẩm, Làm Dịu Cho Da Mụn 50ml', 'Innisfree là thương hiệu mỹ phẩm dưỡng da hàng đầu của Hàn Quốc và được đông đảo các chị em yêu thích và tin dùng. Các sản phẩm của hãng nổi bật với thành phần chính có nguồn gốc thiên nhiên từ đảo Jeju, chứa nhiều công dụng dưỡng da, lành tính, an toàn cho da. Trong đó, không thể không kể đến Kem Dưỡng Ẩm, Làm Dịu Cho Da Mụn Innisfree Green Tea 50ml nằm trong dòng sản phẩm chăm sóc da chiết xuất trà xanh “best-seller” của hãng.', 275000, 249000, 45, 'images/products/d5.jpg', 4, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai` tinyint(4) NOT NULL DEFAULT '3',
  `trangthai` tinyint(4) NOT NULL DEFAULT '1',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `email`, `sodienthoai`, `matkhau`, `hoten`, `loai`, `trangthai`, `hinhanh`) VALUES
(1, 'abc@abc.com', '0988994683', '827ccb0eea8a706c4c34a16891f84e7b', 'Long Xuyên', 1, 1, 'signup.png'),
(2, 'def@abc.com', '11111111', '900150983cd24fb0d6963f7d28e17f72', 'Mèo máy Doraemon', 2, 1, 'avatar.jpg'),
(3, 'ghi@abc.com', '0988994685', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên GHI', 2, 1, NULL),
(4, 'kh1@gmail.com', '0988994686', '900150983cd24fb0d6963f7d28e17f72', 'Nguyễn Thị Thu An', 3, 1, NULL),
(5, 'kh2@gmail.com', '0988994687', '900150983cd24fb0d6963f7d28e17f72', 'Hồ Xuân Minh', 3, 1, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`),
  ADD KEY `diachi_id` (`diachi_id`);

--
-- Chỉ mục cho bảng `donhangct`
--
ALTER TABLE `donhangct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_id` (`donhang_id`),
  ADD KEY `mathang_id` (`mathang_id`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhangct`
--
ALTER TABLE `donhangct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mathang`
--
ALTER TABLE `mathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangct`
--
ALTER TABLE `donhangct`
  ADD CONSTRAINT `donhangct_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donhangct_ibfk_2` FOREIGN KEY (`mathang_id`) REFERENCES `mathang` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
