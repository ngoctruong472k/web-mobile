-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 29, 2019 lúc 04:58 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sp_id` int(11) NOT NULL,
  `sp_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sp_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sp_price` int(11) NOT NULL,
  `sp_sl` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`user_id`, `sp_id`, `sp_image`, `sp_name`, `sp_price`, `sp_sl`) VALUES
('user01', 14, 'asus-s530fa-i5-8265u-4gb-512gb-156f-win10-bq070t-17.jpg', 'Laptop Asus Vivobook S530FA i5 8265U/4GB/512GB/Win10 (BQ070T)', 826, 1),
('user01', 3, 'oppo-reno-10x-zoom-edition-black.png', 'OPPO Reno 10x Zoom Edition', 1548, 2),
('user01', 1, 'iphone-xs-max-256gb-white-400x460.png', 'iPhone Xs Max 256GB', 4518, 3),
('user01', 12, 'pin_du_phong_xiaomi_20000_gen2c___2.jpg', 'Pin dự phòng Xiaomi 20000 gen2c', 25, 1),
('user01', 17, 'apple-macbook-pro-touch-2019-i5-14ghz-8gb-128gb-m-2-2-600x600.jpg', 'Laptop Apple Macbook Pro Touch 2019 i5 1.4GHz/8GB/128GB (MUHN2SA/A)', 1463, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_ID` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manu_img` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_ID`, `manu_name`, `manu_img`) VALUES
(1, 'OPPO', 'OPPO_Logo_wiki.png'),
(2, 'Samsung', 'samsung.png'),
(3, 'Xiaomi', '1024px-Xiaomi_logo.svg.png'),
(4, 'Apple', 'apple-logo-computer-ipad-iphone.jpg'),
(5, 'Asus', 'asus_logo.ai_.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image3` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image4` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `manu_ID` int(11) NOT NULL,
  `type_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ID`, `name`, `image`, `image2`, `image3`, `image4`, `description`, `price`, `manu_ID`, `type_ID`) VALUES
(1, 'iPhone Xs Max 256GB', 'iphone-xs-max-256gb-white-400x460.png', '636748771945393060_iPhone-Xs-Max-gold.png', 'a2.png', 'apple-iphone-xs-xs-max-64gb-256gb.jpg', 'Sau 1 năm mong chờ, chiếc smartphone cao cấp nhất của Apple đã chính thức ra mắt mang tên iPhone Xs Max. Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.', 1506, 4, 1),
(2, 'iPhone Xr 128GB', 'iphone-xr-128gb-red-400x460.png', '51qBzX0pGYL._SY500_.jpg', '643756404.jpeg', 'apple-iphone-xr-128gb-blue.jpg', 'Được xem là phiên bản iPhone giá rẻ đầy hoàn hảo, iPhone Xr 128GB khiến người dùng có nhiều sự lựa chọn hơn về màu sắc đa dạng nhưng vẫn sở hữu cấu hình mạnh mẽ và thiết kế sang trọng.', 860, 4, 1),
(3, 'OPPO Reno 10x Zoom Edition', 'oppo-reno-10x-zoom-edition-black.png', 'oppo-reno-10x-zoom-xanh-1.png', 'OPPO_RENO_10x_long_binh.png', '811Hx9Yz4AL._SL1500_.jpg', 'Những chiếc flagship trong năm 2019 không chỉ có một camera chụp ảnh đẹp, chụp xóa phông ảo diệu mà còn phải \"chụp thật xa\" và với chiếc OPPO Reno 10x Zoom Edition chính thức gia nhập thị trường \"smartphone có camera siêu zoom\".', 774, 1, 1),
(4, 'Samsung Galaxy Note 10+', 'samsung-galaxy-note-10-plus-white-400x460.png', 'SS-note-10-pl-glow-1-1.png', '71QIWoR7EZL._SX569_.jpg', 'galaxy-note10_highlights_mobile_kv.jpg', 'Trông ngoại hình khá giống nhau, tuy nhiên Samsung Galaxy Note 10+ sở hữu khá nhiều điểm khác biệt so với Galaxy Note 10 và đây được xem là một trong những chiếc máy đáng mua nhất trong năm 2019, đặc biệt dành cho những người thích một chiếc máy màn hình lớn, camera chất lượng hàng đầu.', 1162, 2, 1),
(5, 'Samsung Galaxy S10+ (512GB)', 'samsung-galaxy-s10-plus-512gb-ceramic-black.png', 'samsung-galaxy-s10-plus-single-sim-512gb-8gb.jpeg', 's10-plus-512gb-han-trang.jpg', 'samsung-galaxy-s10-512gb-8gb-ram-dual-sim-a31.jpg', 'Samsung Galaxy S10+ (512GB) - phiên bản kỷ niệm 10 năm chiếc Galaxy S đầu tiên ra mắt, là một chiếc smartphone hội tủ đủ các yếu tố mà bạn cần ở một chiếc máy cao cấp trong năm 2019.', 1248, 2, 1),
(6, 'OPPO R17 Pro', 'oppo-r17-pro-2-400x460.png', 'oppo-r17-pro.jpg', 'oppo-r17-pro-seize-the-night-128gb-rom-8gb-ram.jpeg', 'oppo-r17-pro-8gb-ram-128gb-rom.jpeg', 'OPPO R17 Pro được xem là chiếc smartphone sự hiện thân của cái đẹp khi được khoác lên mình một thiết kế trẻ trung và hiện đại, cùng với đó là hàng loạt các trang bị cao cấp đi từ cấu hình cho đến camera.', 473, 1, 1),
(7, 'Mi Smart Band 3', 'mi-band-3-nt-600x600.jpg', '3e06ef12-a57c-4956-9fd0-6d3a16a560f7.jpg', 's-l640.jpg', 'origin-xiaomi-mi-band-3-smart-bracelet-watch.jpg', 'Vòng tay thông minh Mi-Band 3 là dòng sản phẩm vòng đeo tay theo dõi sức khoẻ nổi tiếng từ Xiaomi, giúp bạn theo dõi sức khoẻ, thông báo, một cách nhanh chóng mà không cần xem trên điện thoại. Phiên bản vòng tay thông minh Mi-Band 3 mới còn có màn hình OLED cảm ứng điều chỉnh tiện lợi.', 49, 3, 2),
(8, 'Xiaomi Amazfit Pace GPS', 'xiaomi-amazfit-pace-gps-den-nt-600x600.jpg', 'dong-ho-thong-minh-xiaomi-amazfit-pace-gps.jpg', 'xiaomi-amazfit-pace-gps-do-hang-phan-phoi-chinh-thuc.jpg', 'xiaomi-amazfit-pace-gps-den-note-1.jpg', 'Đồng hồ thông minh Xiaomi Amazfit Pace GPS là sản phẩm đồng hồ đeo tay theo dõi sức khỏe. Đồng hồ có thể đo được nhịp tim, số bước chân chạy, lượng calories tiêu thụ, đem lại thông số chính xác cho người tập luyện. Nó còn có thể kết nối với điện thoại để bạn nhận thông báo ngay trên đồng hồ.', 131, 3, 2),
(9, 'Apple Watch S4 GPS 44mm', 'apple-watch-s4-gps-44mm.jpg', 'apple-watch-s4-gps-44mm-vien-nhom-xam-day-cao-su-m-5.jpg', '636726106069770000_MU682VNA 1.png', 'WATCH-S4-BLACK-SPORT-LTE-500x493.jpg', 'Apple Watch S4 GPS 44mm viền nhôm dây cao su. Màn hình 44m giúp hiển thị thông tin dễ nhìn, rõ ràng hơn cho người dùng.', 516, 4, 2),
(10, 'Samsung Gear Fit2 Pro', 'samsung-gear-fit2-pro-2.jpg', 'samsung-gear-fit-2-proheader.jpg', 'Samsung-gear-fit2-with-UA-features.jpg', 'Samsung_Gear_Fit2_Pro_L_1.jpg', 'Vẫn kiểu dáng thon gọn như dòng Gear đời đầu, mặt vòng đeo tay thông minh Samsung Gear Fit2 Pro hơi cong ôm sát cổ tay thoải mái hơn.', 163, 2, 2),
(11, 'Pin dự phòng 20000mAh Xiaomi Gen3', 'pin_sac_du_phong_xiaomi_20000_gen3.jpg', '703702a19dd3956f32d4ea18ef060fa1_tn.jpg', 'dscf3174-1547522862541438562176.jpg', 'cvb.jpg', 'Pin sạc dự phòng 20000mAh Xiaomi gen 3 với 3 cổng ra, cho phép sạc cùng lúc 3 thiết bị, công suất 45w cho phép bạn vừa có thể sạc cho laptop lại vừa có thể sạc cho điện thoại, dung lượng pin siêu khủng...', 29, 3, 4),
(12, 'Pin dự phòng Xiaomi 20000 gen2c', 'pin_du_phong_xiaomi_20000_gen2c___2.jpg', 'Sạc-Dự-Phòng-Xiaomi-Mi-Powerbank-20000mAh-Gen-2C.jpg', 'mg-5818-1448358732190.jpg', '5fbc66ab0c6a761be978503291f1be2f_tn.jpg', 'Sạc dự phòng Xiaomi 20000 gen2c với dung lượng pin cực khủng cho phép bạn thoải mái ở ngoài mà không lo điện thoại máy tính bảng hết pin...', 25, 3, 4),
(13, 'Laptop Asus X507MA N4000/4GB/256GB/Win10 (BR318T)', 'asus-x507ma-n4000-4gb-256gb-win10-br318t-8.jpg', 'Review-laptop-asus-x507ma-n4000-4gb-256gb-win10-br318t-1.jpg', 'asus-x507ma-n4000-4gb-256gb-win10-br318t-5.jpg', '63a5e3ac4890326b06c5138507f452ff_1806166.jpg', 'Laptop Asus X507MA (BR318T) là chiếc laptop văn phòng - học tập sở hữu thiết kế mỏng nhẹ, hoạt động nhanh mượt với ổ cứng SSD. Máy tính xách tay này còn được trang bị tính năng bảo mật bằng vân tay 360 độ, giúp mở máy nhanh chóng và an toàn.', 279, 5, 3),
(14, 'Laptop Asus Vivobook S530FA i5 8265U/4GB/512GB/Win10 (BQ070T)', 'asus-s530fa-i5-8265u-4gb-512gb-156f-win10-bq070t-17.jpg', 'asus-s530fa-i5-8265u-4gb-512gb-156f-win10-bq070t.jpg', 'asus-s530fa-i5-8265u-4gb-512gb-156f-win10-bq070t-17-600x600.jpg', '25e2bc86471d4808954d0a37a571dea0_master.jpg', 'Laptop ASUS S530FA i5 (BQ070T) là chiếc laptop thiết kế hiện đại, siêu mỏng, siêu nhẹ giúp thuận tiện cho việc di chuyển. Cấu hình máy khỏe xử lý tốt các nhu cầu văn phòng và đồ họa, thích hợp cho sinh viên, nhân viên văn phòng có nhu cầu xử lý hình ảnh chuyên nghiệp.', 826, 5, 3),
(15, 'Laptop Asus Gaming FX505GE i5 8300H/8GB/1TB/4GB GTX1050Ti/Win10 (BQ052T)', 'asus-fx505ge-bq052t-24-600x600.jpg', 'laptop_asus_tuf_gaming_fx505_1_1.jpg', 'FX505_4.jpg', 'asus-fx505ge-bq052t-1-1.jpg', 'Laptop Asus TUF Gaming FX505-BQ052T là chiếc laptop gaming có thiết kế hầm hố quen thuộc của dòng Asus TUF. Cấu hình hiện đại bao gồm chip core i5 thế hệ thứ 8, RAM 8 GB và card đồ họa rời NVIDIA GeForce GTX 1050Ti đem đến cho Asus TUF Gaming FX505-BQ052T sức mạnh chinh phục mọi tựa game.', 968, 5, 3),
(16, 'Laptop Apple Macbook Air 2018 i5/8GB/128GB (MRE82SA/A)', 'apple-macbook-air-mre82sa-a-i5-8gb-128gb-2018-2-600x600.jpg', 'apple-macbook-air-mre82sa-a-i5-8gb-128gb-2018-1-2.jpg', 'apple-macbook-air-mree2sa-a-i5-8gb-128gb-133-gold-content-thietke-1.jpg', 'apple-macbook-air-mree2sa-a-i5-8gb-128gb-133-gold-content-vantaytgdd.jpg', 'Sở hữu thiết kế đơn giản và sang trọng bậc nhất thế giới, Laptop Apple MacBook Air 128 GB hoàn toàn phù hợp với những ai yêu thích vẻ đẹp tinh tế, hiện đại. Bên cạnh đó, máy trang bị ổ cứng SSD có thể khởi chạy các ứng dụng cực nhanh, RAM 8 GB xử lý đa nhiệm hiệu quả và thời lượng pin ấn tượng lên đến 12 giờ.', 1248, 4, 3),
(17, 'Laptop Apple Macbook Pro Touch 2019 i5 1.4GHz/8GB/128GB (MUHN2SA/A)', 'apple-macbook-pro-touch-2019-i5-14ghz-8gb-128gb-m-2-2-600x600.jpg', '636955228494210061_macbook-pro-13-touchbar-2019-7.jpg', '637019089921181539_macbook-pro-13-touch-bar-2019-xam-1-1.png', '-macbook-pro-2019-1.jpg', 'Laptop Apple MacBook Pro Touch 2019 i5 (MUHN2SA/A) là thế hệ laptop mới của dòng MacBook Pro. Khoác lên mình vẻ ngoài đẳng cấp, cấu hình mạnh mẽ cùng nhiều tính năng hiện đại, chiếc laptop Apple MacBook Pro là một trong những chiếc laptop cao cấp - sang trọng đáng sở hữu nhất hiện nay.', 1463, 4, 3),
(18, 'Asus ROG Pugio', 'gearvn-asus-rog-pugi-3.jpg', '201711AM280000002_15118170872481980004865.jpg', 'pugio-0.jpg', 'dhdfgdfgdfg.jpg', 'Chuột chơi game có dây có thiết kế cho hai tay với nút điều chỉnh bên cạnh, thiết kế ổ cắm chuyển đổi độc quyền và ánh sáng Aura RGB với hỗ trợ Aura Sync', 68, 5, 5),
(19, 'Asus ROG Gladius II Wireless', 'gadiusii-gearvn-1_ef6dc3d1a9274f2e838c2a93c60068c3.jpg', '81flXona9qL._SL1500_.jpg', '6238425cv15d.jpg', 'Asus-Rog-Gladius-ii.jpg', 'Hãy sẵn sàng để khóa mục tiêu và cùng đắm chìm trong vinh quang với Gladius II Wireless với bộ kết nối không dây kép (2.4GHz / Bluetooth). Gladius II Wireless có cảm biến quang học 16000 DPI tiên tiến cho khả năng phản hồi nhanh và điều khiển chính xác, thiết kế thuận tay phải để đảm bảo bạn luôn thoải mái trong các phiên chơi trò chơi kéo dài và công nghệ chiếu sáng Aura Sync để vượt qua đối thủ.', 107, 1, 1),
(22, 'Catherine Full Body (PS4)', '6336784_sd.jpg', 'Catherine-Full-Body_Famitsu_09-11-18_001.jpg', 'catherine-full-body-review-1e2b.jpg', '71QLVr4wugL._SX679_.jpg', 'Không chỉ là một tựa game giải đố thông thường, Catherine còn ẩn chứa nhiều tình tiết thú vị và đặc sắc đưa đẩy người chơi vào những tình huống và lựa chọn khó xử, do vậy dù đã ra mắt từ lâu nhưng Catherine vẫn còn giá trị chơi lại rất cao.', 200, 4, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_ID` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_img` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_ID`, `type_name`, `type_img`) VALUES
(1, 'Smartphone', 'product07.png'),
(2, 'Smartband', 'zeblaze-plug-smart-wristband-continuous-heart.jpg'),
(3, 'Laptop', 'G531GD-02-1.jpg'),
(4, 'Sạc dự phòng', '616QLdPTZWL._SX466_.jpg'),
(5, 'Mouse', 'npmce11005.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `password`, `permission`) VALUES
('user01', '1234', 0),
('user02', '12345', 0),
('admin01', '123456', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
