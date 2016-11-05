-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 05:02 AM
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

--
-- Dumping data for table `monthi`
--

INSERT INTO `monthi` (`id_monthi`, `ten_monthi`, `so_dethi`) VALUES
('ENG', 'Tiếng Anh', 1),
('LIT', 'Văn', 1),
('MAT', 'Toán', 1),
('SCI', 'Khoa Học Tự Nhiên', 1),
('SOC', 'Khoa Học Xã Hội', 1);

--
-- Dumping data for table `dethi`
--

INSERT INTO `dethi` (`id_dethi`, `ten_dethi`, `so_cauhoi`, `id_monthi`) VALUES
('EN001', 'Tiếng Anh', 1, 'ENG'),
('LI001', 'Văn', 1, 'LIT'),
('MA001', 'Toán', 1, 'MAT'),
('SC001', 'Khoa Học Tự Nhiên', 1, 'SCI'),
('SO001', 'Khoa Học Xã Hội', 1, 'SOC');

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`id_cauhoi`, `noi_dung`, `id_dethi`) VALUES
('EN001-01', 'Chọn 01 trong 04 lựa chọn có phần gạch chân có cách phát âm khác với những lựa chọn còn lại.', 'EN001'),
('EN001-02', 'Chọn 01 từ trong 04 từ đã cho có cấu trúc trọng âm khác với các từ còn lại.', 'EN001'),
('EN001-03', 'Chọn 01 từ hoặc cụm từ trong 04 lựa chọn có nghĩa gần nhất với từ/cụm từ được gạch chân trong câu hỏi.\r\nMy elder sister failed her final exam, which depressed my parents.', 'EN001'),
('EN001-04', 'Chọn 01 từ hoặc cụm từ trong 04 lựa chọn trái nghĩa với từ hoặc cụm từ được gạch chân trong câu hỏi.\r\nLast year, the rush hour delayed our trip to the airport and as a result, we had to change our flight. ', 'EN001'),
('EN001-05', 'Chọn 01 lựa chọn đúng trong 04 lựa chọn cho sẵn để điền vào chỗ trống trong mỗi câu hỏi. \r\nMy sister is very ______ of classical music and she often listen to it every morning.', 'EN001'),
('EN001-06', 'Chọn 01 lựa chọn đúng trong 04 lựa chọn cho sẵn để điền vào chỗ trống trong mỗi câu hỏi. \r\n______ the right buyer, he would have sold the house.', 'EN001'),
('LI001-01', 'Bài thơ nào KHÔNG thuộc phong trào Thơ mới?', 'LI001'),
('LI001-02', 'Nhà văn nào KHÔNG PHẢI là tác giả của thời kì văn học trung đại Việt Nam?', 'LI001'),
('LI001-03', 'Bài thơ Việt Bắc của Tố Hữu là khúc hùng ca, cũng là khúc …………………… về cách mạng, về cuộc kháng chiến và con người kháng chiến.\r\n', 'LI001'),
('LI001-04', 'Tuyên ngôn độc lập là ……………………… lịch sử tuyên bố trước quốc dân, đồng bào và thế giới về việc chấm dứt chế độ thực dân, phong kiến ở nước ta, đánh dấu kỉ nguyên độc lập, tự do của\r\nnước Việt Nam mới.\r\n', 'LI001'),
('LI001-05', 'Về nghệ thuật, văn học từ thời kì đầu thế kỉ XX đến Cách mạng tháng Tám 1945 đã đạt được những ………………… hết sức to lớn, gắn liền với kết quả ………………… về thể loại và ngôn ngữ.', 'LI001'),
('LI001-06', 'Cũng như bất cứ một loại hình\r\n……………………… nào khác, trong đời sống\r\n……………………… luôn có mối quan hệ qua lại giữa sáng tạo, truyền bá và tiếp nhận.\r\n', 'LI001'),
('MA001-01', 'Hình chiếu vuông góc của điểm A(0;1;2) trên mặt phẳng (P) : x + y + z = 0 có tọa độ là:', 'MA001'),
('MA001-02', 'Đường tròn tâm I (3;−1), cắt đường thẳng d : 2x + y + 5 = 0 theo dây cung AB = 8 có phương trình là:', 'MA001'),
('MA001-03', 'Hàm số y = x3 - 6x2 + mx +1 đồng biến trên miền (0;+∞) khi giá trị của m là:', 'MA001'),
('MA001-04', 'Phương trình tiếp tuyến của đường cong (C''): y = x3-2x tại điểm có hoành độ x=-1 là:', 'MA001'),
('SC001-01', 'Cho bốn dung dịch muối: ZnCl2, AgNO3, CuSO4  và FeCl2. Kim loại nào sau đây tác dụng được với cả bốn dung dịch đó?', 'SC001'),
('SC001-02', 'Hai điện tích điểm q1, q2 đặt trong chân không, cách nhau một đoạn a. Nếu giảm khoảng cách giữa hai điện tích đi một đoạn 3 cm thì lực tương tác giữa chúng tăng lên 4 lần. Tính a.', 'SC001'),
('SC001-03', 'Trộn 8,4 gam bột Fe và 3,2 gam bột S, nung nóng hỗn hợp trong điều kiện không có không khí cho phản ứng xảy ra hoàn toàn. Sản phẩm thu được được hòa tan hoàn toàn trong dung dịch H2SO4 đặc nóng, thấy thoát ra V lít khí SO2 (đktc). Giá trị của V là:', 'SC001'),
('SC001-04', 'Đáp án nào dưới đây mô tả đầy đủ nhất về hệ sinh thái tự nhiên trên trái đất?', 'SC001'),
('SC001-05', 'Các nhà khoa học phát hiện rằng khi tính tuổi của các thiên thạch rơi vào Trái đất thì giá trị thu được gần như giống nhau. Người ta tin rằng các vật thể trong hệ Mặt trời (bao gồm cả Mặt trời) đều hình thành tại cùng thời điểm. Khi phân tích nồng độ các nguyên tố và đồng vị của chúng, người ta thấy rằng tỉ lệ nồng độ nguyên tử của 206 Pb và 238U  trong một mẫu thiên thạch là 1,04. Biết chu kỳ bán rã của  238U  thành  206 Pb  sau một chuỗi phân rã là 4,47 tỉ năm. Tính tuổi (tỉ năm) của mẫu thiên thạch đó biết ban đầu hoàn toàn không có 206 Pb .', 'SC001'),
('SC001-06', 'Dao động điều hoà thì nhận định nào sau đây là SAI?', 'SC001'),
('SC001-07', 'Ở cây cà chua, gen quy định màu đỏ và vàng gồm hai alen. Alen R quy định màu đỏ là trội, alen r quy định màu vàng là lặn. Khi lai cây có quả màu đỏ với cây có quả màu vàng thì các cây con cho quả có màu như thế nào?', 'SC001'),
('SC001-08', 'Một bình đun nước gồm hai cuộn dây mắc song song, ngoài nấc ngắt điện, còn có ba nấc bật khác: nấc 1 bật cuộn dây 1, nấc 2 bật cuộn dây 2, nấc 3 bật cả 2 cuộn dây. Để đun sôi một lượng nước đầy bình, nếu bật nấc 1, cần thời gian 10 phút; nếu bật nấc 2, cần thời gian 15 phút. Hỏi nếu bật nấc 3 để đun sôi lượng nước đầy bình đó thì mất bao nhiêu thời gian?', 'SC001'),
('SC001-09', 'Cá kiếm là loài động vật đẻ con. Chất dinh dưỡng cần cho quá trình phát triển phôi của chúng được lấy từ:', 'SC001'),
('SC001-10', 'X là một ancol no, đơn chức, mạch hở. Đun nóng m gam X với dung dịch H2SO4 đặc\r\nở 1700C, thu được 6,72 lít (đktc) một olefin (hiệu suất 80%). Nếu cho m gam X tác dụng với HBr dư thu được 27,675 gam dẫn xuất monobrom (hiệu suất 60%). Trị số của m là:\r\n', 'SC001');




--
-- Dumping data for table `phuongan`
--

INSERT INTO `phuongan` (`id_phuongan`, `noi_dung_phuongan`, `dung_sai`, `id_cauhoi`) VALUES
('EN001-01-A', 'turkey', 0, 'EN001-01'),
('EN001-01-B', 'thursday', 0, 'EN001-01'),
('EN001-01-C', 'person', 0, 'EN001-01'),
('EN001-01-D', 'clerk', 1, 'EN001-01'),
('EN001-02-A', 'handkerchief', 0, 'EN001-02'),
('EN001-02-B', 'property', 0, 'EN001-02'),
('EN001-02-C', 'murderer', 0, 'EN001-02'),
('EN001-02-D', 'computer ', 1, 'EN001-02'),
('EN001-03-A', 'embarrassed', 0, 'EN001-03'),
('EN001-03-B', 'disappointed', 1, 'EN001-03'),
('EN001-03-C', 'satisfied', 0, 'EN001-03'),
('EN001-03-D', 'pleased', 0, 'EN001-03'),
('EN001-04-A', 'a time during each day when traffic is at its easiest', 1, 'EN001-04'),
('EN001-04-B', 'an hour in the afternoon when people do not travel on the road', 0, 'EN001-04'),
('EN001-04-C', 'an hour in the morning when the traffic is easy', 0, 'EN001-04'),
('EN001-04-D', 'a time of the year when people don’t like shopping', 0, 'EN001-04'),
('EN001-05-A', 'keen', 0, 'EN001-05'),
('EN001-05-B', 'enjoyed', 0, 'EN001-05'),
('EN001-05-C', 'fond', 1, 'EN001-05'),
('EN001-05-D', 'interested', 0, 'EN001-05'),
('EN001-06-A', 'If Ann found', 0, 'EN001-06'),
('EN001-06-B', 'Found had Ann', 0, 'EN001-06'),
('EN001-06-C', 'If Ann could find', 0, 'EN001-06'),
('EN001-06-D', 'Had Ann found', 1, 'EN001-06'),
('LI001-01-A', 'Tràng giang', 0, 'LI001-01'),
('LI001-01-B', 'Từ ấy', 1, 'LI001-01'),
('LI001-01-C', 'Đây thôn Vĩ Dạ', 0, 'LI001-01'),
('LI001-01-D', 'Vội vàng', 0, 'LI001-01'),
('LI001-02-A', 'Nguyễn Bính', 1, 'LI001-02'),
('LI001-02-B', 'Nguyễn Bỉnh Khiêm', 0, 'LI001-02'),
('LI001-02-C', 'Nguyễn Du', 0, 'LI001-02'),
('LI001-02-D', 'Hồ Xuân Hương', 0, 'LI001-02'),
('LI001-03-A', 'tình ca', 1, 'LI001-03'),
('LI001-03-B', 'hòa ca', 0, 'LI001-03'),
('LI001-03-C', 'trường ca', 0, 'LI001-03'),
('LI001-03-D', 'hợp ca', 0, 'LI001-03'),
('LI001-04-A', 'văn phong', 0, 'LI001-04'),
('LI001-04-B', 'văn kiện', 1, 'LI001-04'),
('LI001-04-C', 'văn tự', 0, 'LI001-04'),
('LI001-04-D', 'văn bản', 0, 'LI001-04'),
('LI001-05-A', 'thành tựu - cách tân', 1, 'LI001-05'),
('LI001-05-B', 'thành công - to lớn', 0, 'LI001-05'),
('LI001-05-C', 'thành tích - cách mạng', 0, 'LI001-05'),
('LI001-05-D', 'giá trị - khác biệt', 0, 'LI001-05'),
('LI001-06-A', 'văn hóa - khoa học', 0, 'LI001-06'),
('LI001-06-B', 'khoa học - văn học', 0, 'LI001-06'),
('LI001-06-C', 'nghệ thuật - văn học', 1, 'LI001-06'),
('LI001-06-D', 'khoa học - nghệ thuật', 0, 'LI001-06'),
('MA001-01-A', '(–2;0;2)', 0, 'MA001-01'),
('MA001-01-B', '(–1;1;0)', 0, 'MA001-01'),
('MA001-01-C', '(–2;2;0)', 0, 'MA001-01'),
('MA001-01-D', '(–1;0;1)', 1, 'MA001-01'),
('MA001-02-A', '(x - 3)2 + (y + 1)2 = 36', 1, 'MA001-02'),
('MA001-02-B', '(x - 3)2 + (y + 1)2 = 4', 0, 'MA001-02'),
('MA001-02-C', '(x + 3)2 + (y -1 )2 = 4', 0, 'MA001-02'),
('MA001-02-D', '(x - 3)2 + (y + 1)2 = 20', 0, 'MA001-02'),
('MA001-03-A', 'm<=0', 0, 'MA001-03'),
('MA001-03-B', 'm>=0', 0, 'MA001-03'),
('MA001-03-C', 'm<=12', 0, 'MA001-03'),
('MA001-03-D', 'm>=12', 1, 'MA001-03'),
('MA001-04-A', 'y = -x+2', 0, 'MA001-04'),
('MA001-04-B', 'y = x+2', 1, 'MA001-04'),
('MA001-04-C', 'y = x-2', 0, 'MA001-04'),
('MA001-04-D', 'y = -x-2', 0, 'MA001-04'),
('SC001-01-A', 'FE', 0, 'SC001-01'),
('SC001-01-B', 'Al', 1, 'SC001-01'),
('SC001-01-C', 'Ag', 0, 'SC001-01'),
('SC001-01-D', 'Zn', 0, 'SC001-01'),
('SC001-02-A', '4 cm', 0, 'SC001-02'),
('SC001-02-B', '3 cm', 0, 'SC001-02'),
('SC001-02-C', '6 cm', 1, 'SC001-02'),
('SC001-02-D', '9 cm', 0, 'SC001-02'),
('SC001-03-A', '7,28 lít', 0, 'SC001-03'),
('SC001-03-B', '10,08 lít', 0, 'SC001-03'),
('SC001-03-C', '11,76 lít', 1, 'SC001-03'),
('SC001-03-D', '1,344 lít', 0, 'SC001-03'),
('SC001-04-A', 'Các hệ sinh thái nước ngọt, các hệ sinh thái cửa sông', 0, 'SC001-04'),
('SC001-04-B', 'Các hệ sinh thái vùng triều, các hệ sinh thái biển khơi', 0, 'SC001-04'),
('SC001-04-C', 'Các hệ sinh thái trên cạn, các hệ sinh thái dưới nước', 1, 'SC001-04'),
('SC001-04-D', 'Các hệ sinh thái rừng, các hệ sinh thái nước mặn', 0, 'SC001-04'),
('SC001-05-A', '3,8', 0, 'SC001-05'),
('SC001-05-B', '4,6', 1, 'SC001-05'),
('SC001-05-C', '4,8', 0, 'SC001-05'),
('SC001-05-D', '4,2', 0, 'SC001-05'),
('SC001-06-A', 'Vận tốc bằng không khi lực hồi phục lớn nhất', 0, 'SC001-06'),
('SC001-06-B', 'Vận tốc bằng không khi thế năng cực đại', 0, 'SC001-06'),
('SC001-06-C', 'Li độ bằng không khi gia tốc bằng không', 0, 'SC001-06'),
('SC001-06-D', 'Li độ bằng không khi vận tốc bằng không', 1, 'SC001-06'),
('SC001-07-A', 'Hoặc tất cả đều cho quả màu đỏ; hoặc một nửa cho quả màu đỏ, một nửa cho quả màu vàng', 1, 'SC001-07'),
('SC001-07-B', 'Một nửa cho quả màu đỏ, một nửa cho quả màu vàng', 0, 'SC001-07'),
('SC001-07-C', 'Số cây cho quả màu đỏ nhiều gấp 3 lần số cây cho quả màu vàng', 0, 'SC001-07'),
('SC001-07-D', 'Tất cả đều cho quả màu đỏ', 0, 'SC001-07'),
('SC001-08-A', '25 phút', 1, 'SC001-08'),
('SC001-08-B', '6 phút', 0, 'SC001-08'),
('SC001-08-C', '18 phút', 0, 'SC001-08'),
('SC001-08-D', '45 phút', 0, 'SC001-08'),
('SC001-09-A', 'Cơ thể mẹ qua nhau thai', 0, 'SC001-09'),
('SC001-09-B', 'Chất dự trữ có ở noãn hoàng của trứng', 1, 'SC001-09'),
('SC001-09-C', 'Cơ thể bố qua quá trình giao phối', 0, 'SC001-09'),
('SC001-09-D', 'Cơ thể mẹ qua nhau thai và từ chất dự trữ có ở noãn hoàng của trứng', 0, 'SC001-09'),
('SC001-10-A', '13,8', 0, 'SC001-10'),
('SC001-10-B', '17,25', 0, 'SC001-10'),
('SC001-10-C', '22,5', 1, 'SC001-10'),
('SC001-10-D', '18', 0, 'SC001-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
