-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 03:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten_Danhmuc` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `loai_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_Danhmuc`, `loai_sp`) VALUES
(1, 'Bánh mì', 1),
(2, 'Bánh Kem', 1),
(3, 'Cafe', 2),
(4, 'Trà Sữa', 2),
(5, 'Cocktail', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lsmuahang`
--

CREATE TABLE `lsmuahang` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `soluong` int(50) NOT NULL,
  `thanhtien` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `lsmuahang`
--

INSERT INTO `lsmuahang` (`id`, `username`, `maSP`, `tenSP`, `soluong`, `thanhtien`) VALUES
(1, 'nguyen van b', 10101006, 'Bánh cuộn', 3, 129000),
(2, 'nguyen van a', 11001221, 'Bánh mì ngọt', 2, 70000),
(3, 'nguyen anh a', 11001225, 'Cupcake', 5, 125000),
(4, 'Ho ngoc T', 10101009, 'Gato Matcha', 3, 450000),
(6, 'nguyen thao V', 11000101, 'Latte Macchiato', 3, 105000),
(8, 'vu van k', 11110001, 'Trà Sữa Xoài kem', 3, 111000),
(11, 'Trần Văn Hậu', 11110003, 'Trà Sữa Matcha Đậu Đỏ', 1, 45000),
(12, 'Trần Văn Hậu', 11220004, 'Orange Cocktail ', 1, 41000),
(13, 'Trần Văn Hậu', 11000103, 'Espresso', 1, 45000),
(14, '', 10101002, 'Cheesecake', 1, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id_PH` int(11) NOT NULL,
  `fullname_PH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vande_PH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung_PH` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`id_PH`, `fullname_PH`, `vande_PH`, `noidung_PH`) VALUES
(1, 'nguyễn văn a', 'lỗi nhận hàng', 'không nhận được hàng từ trang web gửi tới, mong nhận được sự hỗ trợ'),
(2, 'nguyễn anh tuấn', 'không mua được hàng', 'hôm qua ngày 12/10 em có mua ly trà sữa nhưng không được'),
(3, 'nguyễn văn hậu', 'lỗi web', 'web không dùng được');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_SP` int(11) NOT NULL,
  `ten_SP` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `ma_SP` int(100) NOT NULL,
  `gia_SP` int(50) NOT NULL,
  `soLuong_SP` int(11) NOT NULL,
  `hinhAnh_SP` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `mota_SP` tinytext COLLATE utf8_vietnamese_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_SP`, `ten_SP`, `ma_SP`, `gia_SP`, `soLuong_SP`, `hinhAnh_SP`, `mota_SP`, `id_danhmuc`) VALUES
(63, 'Bánh mì ngọt', 11001221, 35000, 24, 'Banhmingot.png', 'Bánh mì ngọt ngoài thành phần là bột mì – nước – men, còn có thêm đường – chất béo – bột sữa. Bánh được tạo hình với nhiều kiểu dáng khác nhau và có mùi thơm hấp dẫn.', 1),
(64, 'Bánh sừng bò', 11001222, 25000, 12, 'banhsungtrau.jpg', 'Bánh sừng bò rất nổi tiếng ở Pháp, tuy nhiên nguồn gốc của nó là từ Áo. Loại bánh này còn có tên gọi khác là bánh con cua, với thành phần nguyên liệu làm từ bột mì, sữa, bơ, men và muối. Bánh sừn', 1),
(65, 'Scone', 11001223, 55000, 32, 'Scone.jpg', 'Scone là một loại bánh mì nhanh – không trải qua công đoạn ủ và lên men tự nhiên – có kết cầu mềm hơn bánh mì ngọt. Bánh scone thường có hình tam giác hoặc nón – hay được ăn kèm với mứt trái cây', 1),
(66, 'Loaf', 11001224, 30000, 16, 'Loaf.jpg', 'Loaf cũng là loại bánh mì nhanh có dạng hình khối chữ nhật, được các đầu bếp biến tấu với nhiều hương vị khác nhau: dừa, chanh, poppy…', 1),
(67, 'Cupcake', 11001225, 25000, 18, 'Muffin.jpg', 'Cupcake Là loại bánh thường được tạo hình trong những chiếc cốc giấy xinh xắn với nhân mặn hoặc ngọt.', 1),
(68, 'Pancake', 11001226, 40000, 15, 'pancake.png', 'Bánh Pancake được làm chín bằng cách tráng một lớp dầu ăn mỏng hoặc quét một lớp bơ lên mặt chào, sau đó cho bột vào – tạo hình dẹt, tròn. Bánh được ăn kèm với mật ong – các loại trái cây tư', 1),
(69, 'Crepe', 11001227, 25000, 15, 'Crep.png', 'Crepe được xem là phiên bản biến tấu của pancake, tuy nhiên bánh được tráng mỏng hơn nhiều và thường được cuộn lại với phần nhân ngọt hoặc mặn bên trong.', 1),
(70, 'Waffles', 11001228, 20000, 20, 'waffles.jpg', 'Bánh Waffles được nướng với khuôn bánh riêng, đặc trưng bởi hình giống “tổ ong” – thường được ăn kèm với mứt trái cây, kem tươi…', 1),
(71, 'Bánh mì đen', 11001229, 32000, 30, 'banhmi.jpg', 'Bánh mì đen hay bánh mì lúa mạch là một loại bánh mì được chế biến bằng những tỷ lệ khác nhau của bột mì từ hạt lúa mạch đen. ... Loại bánh này thường dày đặc hơn so với bánh mì làm từ bột ', 1),
(72, 'Mousse', 10101001, 55000, 20, 'Mousse.png', 'Mousse là loại bánh chuyên dùng để tráng miệng với phần bánh gato mỏng bên dưới, bên trên là lớp kem chanh leo – cam, chocolate, caramel… mềm mại, mát lạnh.', 2),
(73, 'Cheesecake', 10101002, 50000, 16, 'Cheesecake.jpg', 'Cheesecake hay còn được gọi là bánh kem phô mai, dù được biến tấu với nhiều phiên bản khác nhau nhưng thành phần chính không thể thiếu cream cheese.', 2),
(74, 'Tiramisu', 10101003, 45000, 28, 'Tiramisu.png', 'Tiramisu là loại bánh tráng miệng nổi tiếng của người Ý với vị bánh mềm ẩm, ngọt thanh nhẹ nhàng. Bánh quy Savoiardi, cà phê, phô mai Mascarpone, rượu Rhum, trứng, đường là những nguyên liệu thành phần ', 2),
(75, 'Macaron', 10101004, 33000, 23, 'Macaron.png', 'Bánh Macaron có biệt danh là chiếc “hamburger” màu sắc của người Pháp với thành phần nguyên liệu gồm: bột hạnh nhân, trứng – đường. Lớp bánh bên ngoài giòn tan – kẹp bên trong là lớp nhân dẻo m', 2),
(76, 'CakeCoffe', 10101005, 65000, 22, 'Cakecoffe.jpg', 'Cakecoffe Là loại bánh rất thích hợp để phục vụ trong các buổi tiệc trà… được tạo hình trong khuôn tròn, vuông hoặc hình chữ nhật.', 2),
(77, 'Bánh cuộn', 10101006, 43000, 23, 'banhcuon.jpg', 'Bánh cuộn socola miếng được xếp cuộn lại với nhau thành hình xoắn ốc, mỗi lớp cuộn, bánh lại phủ lên một lớp kem sữa. Với hương vị socola hòa quyện cùng lớp kem tươi hảo hạn', 2),
(78, 'Cheesecake Matcha', 10101007, 40000, 23, 'matcha.jpg', 'Cheesecake trà xanh với vị chua dịu, thơm ngát trà xanh và màu sắc tươi mát, bắt mắt luôn là quyến rũ bậc nhất!', 2),
(79, 'Tiramisu Chanh leo', 10101008, 32000, 23, 'Moussechanhleo.jpg', 'Vị chua ngọt thơm lừng của chanh dây quyện với kem phô mai béo ngậy, lại thêm bánh bông lan mềm mịn, tất cả tạo nên món bánh Gato tiramisu chanh dây thơm ngon không thể cưỡng lại. ', 2),
(80, 'Gato Matcha', 10101009, 150000, 24, 'gatomatcha.jpg', 'Bánh gato trà xanh là loại bánh ngọt rất được yêu thích, vì bánh không ngọt gắt lại béo xốp, ngập tràn hương vị trà xanh thơm ngon, khiến bạn đắm say mỗi khi thưởng thức đấy. ', 2),
(81, 'Bánh cuộn anh đào', 10101010, 85000, 25, 'banhcuonanhdao.jpg', 'Bánh cuộn hoa anh đào không chỉ thơm ngon mà còn mang nét tinh tế trong ẩm thực và sắc màu loài hoa đặc trưng của đất nước Nhật Bản.\r\n\r\n', 2),
(82, 'Latte Macchiato', 11000101, 35000, 35, 'cafe6.jpg', 'Latte Macchiato (Latte) là một loại cafe nóng gồm cafe Espresso và sữa. Về cơ bản, Latte giống như cafe sữa nhưng ngọt hơn. Một Latte Macchiato được pha đúng chuẩn phải gồm 3 tầng rõ rệt, được rót vào theo', 3),
(83, 'Cappuccino', 11000102, 40000, 40, 'cafe1.jpg', ' Cappuccino chuẩn sẽ gồm 3 phần đều nhau, đó là: cafe Espresso được pha với một lượng nước gấp đôi (Espresso Lungo), sữa nóng và sữa sủi bọt. Tiếp đến, rắc thêm lên trên ít bột cacao hay bột quế, ', 3),
(84, 'Espresso', 11000103, 45000, 40, 'cafe8.jpg', 'Một Espresso đựng trong tách Cappuccino, sau đó cho sữa nóng và bột sữa vào đến 80% tách, xịt kem sữa tươi lên trên rồi trang trí bằng bột cacao.', 3),
(85, 'Cafe Mocha', 11000104, 40000, 35, 'cafe4.jpg', 'Cafe Mocha là hỗn hợp giữa cafe Espresso được pha bằng hơi nước và chocolate nóng. Đặc trưng của loại thức uống này là vị thơm béo của kem tươi và vị ngậy của chocolate nóng. Cho trực tiếp Espresso pha ', 3),
(86, 'Americano', 11000105, 40000, 35, 'cafe5.jpg', 'Americano chính là Espresso nhưng được pha loãng với lượng nước gấp đôi. Một Espresso được pha trực tiếp với nước nóng đựng sẵn trong tách Cappuchino là có thể phục vụ ngay cho khách hàng; hoặc có th', 3),
(87, 'Trà Sữa Xoài kem', 11110001, 37000, 30, 'milktea1.jpg', 'Trà sữa, xoài và lớp kem cheese béo béo, mặn mặn sẽ khiến bạn ngây ngất khi thưởng thức ngụm đầu tiên đó. Những nguyên liệu trên sẽ tăng vị ngon riêng cho thức uống lại khiến trà sữa không quá ng', 4),
(88, 'Trà Sữa Khoai Môn', 11110002, 40000, 30, 'milktea2.jpg', 'Trà sữa khoai môn là sự kết hợp giữa vị béo béo của sữa, bùi bùi của khoai môn. Thức uống này hoàn toàn không quá ngọt vì nó được phủ thêm một lớp kem cheese trên cùng.', 4),
(89, 'Trà Sữa Matcha Đậu Đỏ', 11110003, 45000, 35, 'milktea3.jpg', 'Trà sữa matcha đậu đỏ lại là sản phẩm mới, thích hợp giải nhiệt dành cho mùa hè nắng nóng. Trà sữa Matcha đậu đỏ về cơ bản vẫn là trà sữa trà xanh với vị chát nhẹ của trà, vị thơm mát của', 4),
(90, 'Trà sữa Chocolate  ', 11110004, 45000, 30, 'tea3.png', 'Trà sữa Oreo Chocolate Cream là một loại trà sữa khá mới trong thời gian gần đây. Với những người hảo ngọt thì vị béo ngậy của cốc trà này sẽ làm bạn phải mê mẩn. Phần trà sữa thơm ngọt kết h', 4),
(91, 'Trà sữa cheese', 11110005, 40000, 30, 'milktea5.jpg', 'Trà sữa cheese milk foam là một loại đồ uống được giới trẻ đặc biệt yêu thích thời gian đổ lại đây. Ngoài vị trà sữa truyền thống thì cốc trà còn được thêm một lớp kem sữa béo béo, ngậy ng', 4),
(92, 'Pie', 11001230, 65000, 28, 'pie.jpg', 'Đây là loại bánh gồm 2 phần vỏ: vỏ dưới và vỏ trên, chứa phần nhân bên trong. Phần vỏ bánh bên trên thường được cắt thành sợi dài – đan vào nhau để tạo hình cho bắt mắt.', 1),
(94, 'MOJITO Việt Quất', 11220001, 45000, 25, 'cick2.jpg', 'Mojito việt quất tươi là một loại cocktail tuyệt vời cho mùa hè này với rượu rum trắng dễ làm, vị bạc hà và siêu sảng khoái.', 5),
(96, 'Rum Berry Cocktail ', 11220002, 40000, 25, 'cock5.jpg', 'Cocktail Rum Berry. Với rượu rum, Cointreau, nước ép lựu và bia gừng! Sử dụng quả mọng đông lạnh thay vì đá viên để hoàn thiện vẻ ngoài!', 5),
(97, 'Strawberry Cocktail ', 11220003, 42000, 24, 'cock1.jpg', 'Cocktail dâu chanh là sự hòa quyện tuyệt vời của các loại trái cây tươi mang đến cho bạn một ly thức uống thơm lừng, mát lạnh và chua chua ngọt ngọt đầy quyến rũ.', 5),
(98, 'Orange Cocktail ', 11220004, 41000, 24, 'cock3.jpg', 'Màu vàng của cam, vị thơm của hỗn hợp hoa quả và vị the mát của bạc hà, ngọt ngào của dừa tươi sẽ làm nên ly cocktail cam chanh quyến rũ hơn bao giờ hết.', 5),
(99, 'Blackberry Cocktail ', 11220005, 39000, 25, 'cock4.jpg', 'Blackberry Cocktail không những mang đến cảm giác mát mẻ, sảng khoái cho những ngày hè mà còn có nhiều tác dụng chữa bệnh. Cocktail Blackberry kết hợp với đá lạnh sẽ là thức uống tuyệt vời, mang lại c', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `fullname`, `dateofbirth`, `sex`, `email`, `phonenumber`, `address`) VALUES
(3, 'NgocTai', 'e10adc3949ba59abbe56e057f20f883e', 0, 'Hồ Ngọc Tài', '2001-01-01', 'nam', 'tai@gmail.com', '0946402578', 'buôn knul'),
(4, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Quản Trị Viên', '2001-01-01', 'nam', 'admin@gmail.com', '0946402578', 'buôn knul'),
(13, 'Trần Văn Hậu', 'ad93e5c415bedceadac92c660c8e4fd6', 0, 'Trần Văn Hậu ', '2001-08-10', 'nam', 'hau@gmail.com', '0123456789', '53/72  Bảo Lâm, Lâm Đồng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lsmuahang`
--
ALTER TABLE `lsmuahang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id_PH`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_SP`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lsmuahang`
--
ALTER TABLE `lsmuahang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id_PH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_SP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
