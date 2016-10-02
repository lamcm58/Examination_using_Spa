-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 02:48 PM
-- Server version: 10.1.10-MariaDB-log
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `ma_cau_hoi` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_mon_hoc` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`ma_cau_hoi`, `ma_mon_hoc`, `noi_dung`) VALUES
('E001', 'ENG', 'Chọn 01 trong 04 lựa chọn có phần gạch chân có cách phát âm khác với những lựa chọn còn lại.'),
('E002', 'ENG', 'Chọn 01 từ trong 04 từ đã cho có cấu trúc trọng âm khác với các từ còn lại.'),
('E003', 'ENG', 'Chọn 01 từ hoặc cụm từ trong 04 lựa chọn có nghĩa gần nhất với từ/cụm từ được gạch chân trong câu hỏi.\r\nMy elder sister failed her final exam, which depressed my parents.'),
('E004', 'ENG', 'Chọn 01 từ hoặc cụm từ trong 04 lựa chọn trái nghĩa với từ hoặc cụm từ được gạch chân trong câu hỏi.\r\nLast year, the rush hour delayed our trip to the airport and as a result, we had to change our flight. '),
('E005', 'ENG', 'Chọn 01 lựa chọn đúng trong 04 lựa chọn cho sẵn để điền vào chỗ trống trong mỗi câu hỏi. \r\nMy sister is very ______ of classical music and she often listen to it every morning.'),
('E006', 'ENG', 'Chọn 01 lựa chọn đúng trong 04 lựa chọn cho sẵn để điền vào chỗ trống trong mỗi câu hỏi. \r\n______ the right buyer, he would have sold the house.'),
('L001', 'LIT', 'Bài thơ nào KHÔNG thuộc phong trào Thơ mới?'),
('L002', 'LIT', 'Nhà văn nào KHÔNG PHẢI là tác giả của thời kì văn học trung đại Việt Nam?'),
('L003', 'LIT', 'Bài thơ Việt Bắc của Tố Hữu là khúc hùng ca, cũng là khúc …………………… về cách mạng, về cuộc kháng chiến và con người kháng chiến.\r\n'),
('L004', 'LIT', 'Tuyên ngôn độc lập là ……………………… lịch sử tuyên bố trước quốc dân, đồng bào và thế giới về việc chấm dứt chế độ thực dân, phong kiến ở nước ta, đánh dấu kỉ nguyên độc lập, tự do của\r\nnước Việt Nam mới.\r\n'),
('L005', 'LIT', 'Về nghệ thuật, văn học từ thời kì đầu thế kỉ XX đến Cách mạng tháng Tám 1945 đã đạt được những ………………… hết sức to lớn, gắn liền với kết quả ………………… về thể loại và ngôn ngữ.'),
('L006', 'LIT', 'Cũng như bất cứ một loại hình\r\n……………………… nào khác, trong đời sống\r\n……………………… luôn có mối quan hệ qua lại giữa sáng tạo, truyền bá và tiếp nhận.\r\n'),
('M001', 'MAT', 'Hình chiếu vuông góc của điểm A(0;1;2) trên mặt phẳng (P) : x + y + z = 0 có tọa độ là:'),
('M002', 'MAT', 'Đường tròn tâm I (3;−1), cắt đường thẳng d : 2x + y + 5 = 0 theo dây cung AB = 8 có phương trình là:'),
('M003', 'MAT', 'Hàm số y = x3 - 6x2 + mx +1 đồng biến trên miền (0;+∞) khi giá trị của m là:'),
('M004', 'MAT', 'Phương trình tiếp tuyến của đường cong (C''): y = x3-2x tại điểm có hoành độ x=-1 là:'),
('S001', 'SCI', 'Cho bốn dung dịch muối: ZnCl2, AgNO3, CuSO4  và FeCl2. Kim loại nào sau đây tác dụng được với cả bốn dung dịch đó?'),
('S002', 'SCI', 'Hai điện tích điểm q1, q2 đặt trong chân không, cách nhau một đoạn a. Nếu giảm khoảng cách giữa hai điện tích đi một đoạn 3 cm thì lực tương tác giữa chúng tăng lên 4 lần. Tính a.'),
('S003', 'SCI', 'Trộn 8,4 gam bột Fe và 3,2 gam bột S, nung nóng hỗn hợp trong điều kiện không có không khí cho phản ứng xảy ra hoàn toàn. Sản phẩm thu được được hòa tan hoàn toàn trong dung dịch H2SO4 đặc nóng, thấy thoát ra V lít khí SO2 (đktc). Giá trị của V là:'),
('S004', 'SCI', 'Đáp án nào dưới đây mô tả đầy đủ nhất về hệ sinh thái tự nhiên trên trái đất?'),
('S005', 'SCI', 'Các nhà khoa học phát hiện rằng khi tính tuổi của các thiên thạch rơi vào Trái đất thì giá trị thu được gần như giống nhau. Người ta tin rằng các vật thể trong hệ Mặt trời (bao gồm cả Mặt trời) đều hình thành tại cùng thời điểm. Khi phân tích nồng độ các nguyên tố và đồng vị của chúng, người ta thấy rằng tỉ lệ nồng độ nguyên tử của 206 Pb và 238U  trong một mẫu thiên thạch là 1,04. Biết chu kỳ bán rã của  238U  thành  206 Pb  sau một chuỗi phân rã là 4,47 tỉ năm. Tính tuổi (tỉ năm) của mẫu thiên thạch đó biết ban đầu hoàn toàn không có 206 Pb .'),
('S006', 'SCI', 'Dao động điều hoà thì nhận định nào sau đây là SAI?'),
('S007', 'SCI', 'Ở cây cà chua, gen quy định màu đỏ và vàng gồm hai alen. Alen R quy định màu đỏ là trội, alen r quy định màu vàng là lặn. Khi lai cây có quả màu đỏ với cây có quả màu vàng thì các cây con cho quả có màu như thế nào?'),
('S008', 'SCI', 'Một bình đun nước gồm hai cuộn dây mắc song song, ngoài nấc ngắt điện, còn có ba nấc bật khác: nấc 1 bật cuộn dây 1, nấc 2 bật cuộn dây 2, nấc 3 bật cả 2 cuộn dây. Để đun sôi một lượng nước đầy bình, nếu bật nấc 1, cần thời gian 10 phút; nếu bật nấc 2, cần thời gian 15 phút. Hỏi nếu bật nấc 3 để đun sôi lượng nước đầy bình đó thì mất bao nhiêu thời gian?'),
('S009', 'SCI', 'Cá kiếm là loài động vật đẻ con. Chất dinh dưỡng cần cho quá trình phát triển phôi của chúng được lấy từ:'),
('S010', 'SCI', 'X là một ancol no, đơn chức, mạch hở. Đun nóng m gam X với dung dịch H2SO4 đặc\r\nở 1700C, thu được 6,72 lít (đktc) một olefin (hiệu suất 80%). Nếu cho m gam X tác dụng với HBr dư thu được 27,675 gam dẫn xuất monobrom (hiệu suất 60%). Trị số của m là:\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_01_031137_create_mon_hoc_table', 1),
('2016_10_01_031154_create_cau_hoi_table', 1),
('2016_10_01_031207_create_phuong_an_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `ma_mon_hoc` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ten_mon_hoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`ma_mon_hoc`, `ten_mon_hoc`) VALUES
('ENG', 'Tiếng Anh'),
('LIT', 'Văn'),
('MAT', 'Toán'),
('SCI', 'Khoa Học Tự Nhiên'),
('SOC', 'Khoa Học Xã Hội');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phuongan`
--

CREATE TABLE `phuongan` (
  `ma_phuong_an` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `dung_sai` tinyint(4) NOT NULL,
  `ma_cau_hoi` char(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phuongan`
--

INSERT INTO `phuongan` (`ma_phuong_an`, `noi_dung`, `dung_sai`, `ma_cau_hoi`) VALUES
('E1-A', 'turkey', 0, 'E001'),
('E1-B', 'thursday', 0, 'E001'),
('E1-C', 'person', 0, 'E001'),
('E1-D', 'clerk', 1, 'E001'),
('E2-A', 'handkerchief', 0, 'E002'),
('E2-B', 'property', 0, 'E002'),
('E2-C', 'murderer', 0, 'E002'),
('E2-D', 'computer ', 1, 'E002'),
('E3-A', 'embarrassed', 0, 'E003'),
('E3-B', 'disappointed', 1, 'E003'),
('E3-C', 'satisfied', 0, 'E003'),
('E3-D', 'pleased', 0, 'E003'),
('E4-A', 'a time during each day when traffic is at its easiest', 1, 'E004'),
('E4-B', 'an hour in the afternoon when people do not travel on the road', 0, 'E004'),
('E4-C', 'an hour in the morning when the traffic is easy', 0, 'E004'),
('E4-D', 'a time of the year when people don’t like shopping', 0, 'E004'),
('E5-A', 'keen', 0, 'E005'),
('E5-B', 'enjoyed', 0, 'E005'),
('E5-C', 'fond', 1, 'E005'),
('E5-D', 'interested', 0, 'E005'),
('E6-A', 'If Ann found', 0, 'E006'),
('E6-B', 'Found had Ann', 0, 'E006'),
('E6-C', 'If Ann could find', 0, 'E006'),
('E6-D', 'Had Ann found', 1, 'E006'),
('L1-A', 'Tràng giang', 0, 'L001'),
('L1-B', 'Từ ấy', 1, 'L001'),
('L1-C', 'Đây thôn Vĩ Dạ', 0, 'L001'),
('L1-D', 'Vội vàng', 0, 'L001'),
('L2-A', 'Nguyễn Bính', 1, 'L002'),
('L2-B', 'Nguyễn Bỉnh Khiêm', 0, 'L002'),
('L2-C', 'Nguyễn Du', 0, 'L002'),
('L2-D', 'Hồ Xuân Hương', 0, 'L002'),
('L3-A', 'tình ca', 1, 'L003'),
('L3-B', 'hòa ca', 0, 'L003'),
('L3-C', 'trường ca', 0, 'L003'),
('L3-D', 'hợp ca', 0, 'L003'),
('L4-A', 'văn phong', 0, 'L004'),
('L4-B', 'văn kiện', 1, 'L004'),
('L4-C', 'văn tự', 0, 'L004'),
('L4-D', 'văn bản', 0, 'L004'),
('L5-A', 'thành tựu - cách tân', 1, 'L005'),
('L5-B', 'thành công - to lớn', 0, 'L005'),
('L5-C', 'thành tích - cách mạng', 0, 'L005'),
('L5-D', 'giá trị - khác biệt', 0, 'L005'),
('L6-A', 'văn hóa - khoa học', 0, 'L006'),
('L6-B', 'khoa học - văn học', 0, 'L006'),
('L6-C', 'nghệ thuật - văn học', 1, 'L006'),
('L6-D', 'khoa học - nghệ thuật', 0, 'L006'),
('M1-A', '(–2;0;2)', 0, 'M001'),
('M1-B', '(–1;1;0)', 0, 'M001'),
('M1-C', '(–2;2;0)', 0, 'M001'),
('M1-D', '(–1;0;1)', 1, 'M001'),
('M2-A', '(x - 3)2 + (y + 1)2 = 36', 1, 'M002'),
('M2-B', '(x - 3)2 + (y + 1)2 = 4', 0, 'M002'),
('M2-C', '(x + 3)2 + (y -1 )2 = 4', 0, 'M002'),
('M2-D', '(x - 3)2 + (y + 1)2 = 20', 0, 'M002'),
('M3-A', 'm<=0', 0, 'M003'),
('M3-B', 'm>=0', 0, 'M003'),
('M3-C', 'm<=12', 0, 'M003'),
('M3-D', 'm>=12', 1, 'M003'),
('M4-A', 'y = -x+2', 0, 'M004'),
('M4-B', 'y = x+2', 1, 'M004'),
('M4-C', 'y = x-2', 0, 'M004'),
('M4-D', 'y = -x-2', 0, 'M004'),
('S1-A', 'FE', 0, 'S001'),
('S1-B', 'Al', 1, 'S001'),
('S1-C', 'Ag', 0, 'S001'),
('S1-D', 'Zn', 0, 'S001'),
('S10-A', '13,8', 0, 'S010'),
('S10-B', '17,25', 0, 'S010'),
('S10-C', '22,5', 1, 'S010'),
('S10-D', '18', 0, 'S010'),
('S2-A', '4 cm', 0, 'S002'),
('S2-B', '3 cm', 0, 'S002'),
('S2-C', '6 cm', 1, 'S002'),
('S2-D', '9 cm', 0, 'S002'),
('S3-A', '7,28 lít', 0, 'S003'),
('S3-B', '10,08 lít', 0, 'S003'),
('S3-C', '11,76 lít', 1, 'S003'),
('S3-D', '1,344 lít', 0, 'S003'),
('S4-A', 'Các hệ sinh thái nước ngọt, các hệ sinh thái cửa sông', 0, 'S004'),
('S4-B', 'Các hệ sinh thái vùng triều, các hệ sinh thái biển khơi', 0, 'S004'),
('S4-C', 'Các hệ sinh thái trên cạn, các hệ sinh thái dưới nước', 1, 'S004'),
('S4-D', 'Các hệ sinh thái rừng, các hệ sinh thái nước mặn', 0, 'S004'),
('S5-A', '3,8', 0, 'S005'),
('S5-B', '4,6', 1, 'S005'),
('S5-C', '4,8', 0, 'S005'),
('S5-D', '4,2', 0, 'S005'),
('S6-A', 'Vận tốc bằng không khi lực hồi phục lớn nhất', 0, 'S006'),
('S6-B', 'Vận tốc bằng không khi thế năng cực đại', 0, 'S006'),
('S6-C', 'Li độ bằng không khi gia tốc bằng không', 0, 'S006'),
('S6-D', 'Li độ bằng không khi vận tốc bằng không', 1, 'S006'),
('S7-A', 'Hoặc tất cả đều cho quả màu đỏ; hoặc một nửa cho quả màu đỏ, một nửa cho quả màu vàng', 1, 'S007'),
('S7-B', 'Một nửa cho quả màu đỏ, một nửa cho quả màu vàng', 0, 'S007'),
('S7-C', 'Số cây cho quả màu đỏ nhiều gấp 3 lần số cây cho quả màu vàng', 0, 'S007'),
('S7-D', 'Tất cả đều cho quả màu đỏ', 0, 'S007'),
('S8-A', '25 phút', 1, 'S008'),
('S8-B', '6 phút', 0, 'S008'),
('S8-C', '18 phút', 0, 'S008'),
('S8-D', '45 phút', 0, 'S008'),
('S9-A', 'Cơ thể mẹ qua nhau thai', 0, 'S009'),
('S9-B', 'Chất dự trữ có ở noãn hoàng của trứng', 1, 'S009'),
('S9-C', 'Cơ thể bố qua quá trình giao phối', 0, 'S009'),
('S9-D', 'Cơ thể mẹ qua nhau thai và từ chất dự trữ có ở noãn hoàng của trứng', 0, 'S009');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`ma_cau_hoi`),
  ADD KEY `cauhoi_ma_mon_hoc_foreign` (`ma_mon_hoc`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`ma_mon_hoc`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `phuongan`
--
ALTER TABLE `phuongan`
  ADD PRIMARY KEY (`ma_phuong_an`),
  ADD KEY `phuongan_ma_cau_hoi_foreign` (`ma_cau_hoi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `cauhoi_ma_mon_hoc_foreign` FOREIGN KEY (`ma_mon_hoc`) REFERENCES `monhoc` (`ma_mon_hoc`) ON DELETE CASCADE;

--
-- Constraints for table `phuongan`
--
ALTER TABLE `phuongan`
  ADD CONSTRAINT `phuongan_ma_cau_hoi_foreign` FOREIGN KEY (`ma_cau_hoi`) REFERENCES `cauhoi` (`ma_cau_hoi`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
