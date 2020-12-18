-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 18, 2020 lúc 07:57 PM
-- Phiên bản máy phục vụ: 8.0.18
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cvht`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', '781e5e245d69b566979b86e28d23f2c7', 'Admin name', '0123456789', NULL, NULL),
(2, 'khoi', '124bd1296bec0d9d93c7b52a71ad8d5b', 'Admin name', '0123456789', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cauhoi`
--

CREATE TABLE `tbl_cauhoi` (
  `id` int(11) NOT NULL,
  `cau_hoi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `done` int(11) NOT NULL,
  `tra_loi` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cauhoi`
--

INSERT INTO `tbl_cauhoi` (`id`, `cau_hoi`, `time`, `done`, `tra_loi`) VALUES
(1, 'TEST đặt Câu hỏi', 1607913281, 1, 'nnnnnnnnnnnn'),
(3, 'ABC DÈ GH YKLM', 1607955798, 1, 'TESTN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chude`
--

CREATE TABLE `tbl_chude` (
  `IDChuDe` int(10) UNSIGNED NOT NULL,
  `TenChuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaChuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chude`
--

INSERT INTO `tbl_chude` (`IDChuDe`, `TenChuDe`, `MaChuDe`) VALUES
(1, 'Biểu Mẫu', 'bieu_mau'),
(2, 'Quy Trình', 'quy_trinh'),
(3, 'Hướng Dẫn', 'huong_dan'),
(4, 'Câu Chào', 'Cau_Chao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_log`
--

CREATE TABLE `tbl_log` (
  `id` int(11) NOT NULL,
  `hoi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phanhoi`
--

CREATE TABLE `tbl_phanhoi` (
  `IDPhanHoi` int(10) UNSIGNED NOT NULL,
  `IDChuDe` int(10) UNSIGNED NOT NULL,
  `IDTuKhoa` int(10) UNSIGNED NOT NULL,
  `PhanHoi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phanhoi`
--

INSERT INTO `tbl_phanhoi` (`IDPhanHoi`, `IDChuDe`, `IDTuKhoa`, `PhanHoi`, `link`) VALUES
(1, 4, 1, 'ChatBot Cố Vấn Học Tập Ảo xin chào bạn !', NULL),
(2, 1, 2, 'Sinh viên Trường ĐHCT phải chấp hành nội quy, quy định của Trường, của Khoa/Viện/Bộ môn trực thuộc Trường (sau đây gọi chung là Khoa), của lớp và của các đơn vị khác trong Trường. Khi vào Trường, SV phải mang bảng tên, trang phục sạch sẽ, gọn gàng, kín đáo; phải mặc đồng phục khi tham dự những học phần có yêu cầu. Sinh viên phải giữ trật tự, vệ sinh, chấp hành luật giao thông, để xe đúng nơi quy định. Sinh viên Trường ĐHCT phải có nếp sống văn minh, không làm ồn, gây mất trật tự; không tụ tập uống rượu bia.', NULL),
(3, 1, 3, 'Sinh viên phải xây dựng kế hoạch học tập toàn khóa (KHHTTK) bằng cách liệt kê các học phần phải học cho từng học kỳ (HK) của khoá học. KHHTTK phải được cố vấn học tập (CVHT) phê duyệt. KHHTTK là cơ sở để SV đăng ký học phần trong mỗi HK. \r\n<br/>\r\nSinh viên có thể thay đổi KHHTTK trong quá trình học nhưng phải xin ý kiến tư vấn của CVHT.', NULL),
(4, 1, 4, 'Thời gian thiết kế cho một chương trình đào tạo tùy theo ngành học. Thời gian cho phép để hoàn thành chương trình đào tạo được xác định như sau: \r\nChương trình đào tạo : Bật đại học <br/>\r\n- Thời gian thiết kế: 4 năm; Thời gian tối đa: 8 năm <br/>\r\n- Thời gian thiết kế: 4,5 năm; Thời gian tối đa: 9 năm <br/>\r\n- Thời gian thiết kế: 5 năm; Thời gian tối đa: 10 năm<br/>\r\n Những SV được hưởng chính sách ưu tiên theo đối tượng quy định tại Quy chế tuyển sinh đại học, cao đẳng hệ chính quy không giới hạn về thời gian tối đa để hoàn thành CTĐT.', NULL),
(6, 1, 6, '1. Kiến thức của mỗi học phần và toàn khóa học được đo lường bằng tín chỉ (TC). Thời lượng của TC được quy định như sau: 1TC = 15 tiết học lý thuyết và 30 tiết tự học, chuẩn bị cá nhân có hướng dẫn hoặc 30 tiết thực hành, thí nghiệm, thảo luận, seminar... và 15 tiết tự học, chuẩn bị cá nhân có hướng dẫn; hoặc 45 tiết thực tập tại cơ sở, làm tiểu luận, bài tập lớn, đồ án, niên luận, tiểu luận tốt nghiệp, luận văn tốt nghiệp. <br/>\r\n2. Một tiết học được tính bằng 50 phút. <br/>\r\n3. Khối lượng chương trình đào tạo của các ngành/chuyên ngành đào tạo được xây dựng theo qui định của Bộ Giáo dục và Đào tạo; được cụ thể hóa trong chương trình đào tạo ngành/chuyên ngành đào tạo; được công bố công khai và thông tin đến sinh viên.<br/>', NULL),
(7, 1, 7, 'a) Học bổng khuyến khích học tập (HBKKHT) được xét cấp theo học kỳ (HK) dựa trên cơ sở điểm trung bình chung học kỳ (ĐTBCHK) và điểm rèn luyện (ĐRL) của HK chính trước đó. Học bổng được cấp cho SV từ cao xuống thấp theo mức học bổng, trong từng mức ưu tiên theo ĐTBCHK (trường hợp SV có cùng ĐTBCHK thì xét ưu tiên theo ĐRL). Riêng đối với HK đầu tiên của khóa học, học bổng được cấp dựa trên kết quả xét tuyển đầu vào do Hiệu trưởng quyết định (không bao gồm điểm ưu tiên). \r\n<br/>\r\nb) Quỹ học bổng cấp cho SV từng lớp chuyên ngành được công bố từ đầu khóa học và sẽ được điều chỉnh nếu nguồn quỹ học bổng của Trường có thay đổi. \r\n<br/>\r\nc) Điều kiện để được xét học bổng:<br/>\r\n- Có số tín chỉ (TC) đăng ký tối thiểu trong HK chính trước đó là 15 TC (trừ trường hợp do Trường bố trí);<br/>\r\n- HK chính trước đó, SV có kết quả học tập, rèn luyện đạt từ loại khá trở lên, trong đó không có học phần dưới điểm D;<br/>\r\n- Không bị kỷ luật từ hình thức khiển trách cấp Trường trở lên<br/>\r\ne) Học bổng cho SV đi học tập ở nước ngoài: SV được cấp học bổng khuyến khích học tập (HBKKHT) còn được xét cấp học bổng để đi học nước ngoài theo Quy chế số 770/QĐ-ĐHCT, ngày 15/3/2017 của Hiệu trưởng Trường Đại học Cần Thơ.<br/>\r\nf) Mức học bổng do Hiệu trưởng quyết định.', NULL),
(8, 1, 8, 'Hằng năm, Trường xét cấp học bổng tài trợ từ nguồn tài trợ của các cơ quan, doanh nghiệp, tổ chức, cá nhân,... trong và ngoài nước theo Quy định về quản lý và cấp phát học bổng tài trợ.', NULL),
(9, 1, 9, 'Học phí đóng theo học kì (HK) và tính theo tổng số tín chỉ (TC) mà SV đã đăng ký học ở HK đó. Mức học phí do Hiệu trưởng quyết định', NULL),
(10, 1, 10, 'Đối tượng được miễn, giảm học phí và được hỗ trợ chi phí học tập thực hiện theo các quy định hiện hành và các văn bản hướng dẫn có liên quan', NULL),
(11, 1, 11, '1. Bảo hiểm y tế (BHYT): SV phải nộp phí BHYT theo các quy định hiện hành của Luật Bảo hiểm y tế số 25/2008/QH12, ngày 14/11/2008 và các văn bản hướng dẫn có liên quan.  <br/>\r\n2. Bảo hiểm tai nạn (BHTN): Trường khuyến khích SV tham gia nộp BHTN. <br/>\r\n3. Tín dụng sinh viên: SV có thể xin vay tín dụng từ các Ngân hàng Chính sách xã hội tại địa phương nơi gia đình SV cư trú. Trường sẽ cấp giấy xác nhận để SV bổ sung hồ sơ xin vay vốn.', NULL),
(12, 1, 12, '1. Bảo hiểm y tế (BHYT): SV phải nộp phí BHYT theo các quy định hiện hành của Luật Bảo hiểm y tế số 25/2008/QH12, ngày 14/11/2008 và các văn bản hướng dẫn có liên quan. <br/> 2. Bảo hiểm tai nạn (BHTN): Trường khuyến khích SV tham gia nộp BHTN. <br/> 3. Tín dụng sinh viên: SV có thể xin vay tín dụng từ các Ngân hàng Chính sách xã hội tại địa phương nơi gia đình SV cư trú. Trường sẽ cấp giấy xác nhận để SV bổ sung hồ sơ xin vay vốn.', NULL),
(13, 1, 13, '1. Bảo hiểm y tế (BHYT): SV phải nộp phí BHYT theo các quy định hiện hành của Luật Bảo hiểm y tế số 25/2008/QH12, ngày 14/11/2008 và các văn bản hướng dẫn có liên quan. <br/> 2. Bảo hiểm tai nạn (BHTN): Trường khuyến khích SV tham gia nộp BHTN. <br/> 3. Tín dụng sinh viên: SV có thể xin vay tín dụng từ các Ngân hàng Chính sách xã hội tại địa phương nơi gia đình SV cư trú. Trường sẽ cấp giấy xác nhận để SV bổ sung hồ sơ xin vay vốn.', NULL),
(14, 1, 14, 'a) Đầu khóa học, Trường cung cấp cho sinh viên CTĐT của ngành học, quy định về công tác học vụ và bố trí CVHT cho từng lớp chuyên ngành.<br/>\r\nb) Cán bộ làm CVHT chịu trách nhiệm quản lý SV, tư vấn SV xây dựng KHHTTK và thực hiện quá trình học tập theo đúng quy định của Trường.<br/>\r\nc) Đầu mỗi HK, Trường thông báo cho SV những học phần sẽ giảng dạy trong HK đó và thời khóa biểu (TKB) của từng học phần tương ứng<br/>', NULL),
(15, 1, 15, 'Sinh viên phải thực hiện đăng ký học phần trước khi HK mới bắt đầu (SV mới trúng tuyển không phải đăng ký học phần cho HK đầu tiên của khóa học). Các học phần đăng ký phải theo KHHTTK', NULL),
(16, 1, 16, 'Để đảm bảo tiến độ thời gian hoàn thành khóa học và đảm bảo chất lượng học tập, mỗi học kỳ SV chỉ đăng ký với số lượng TC như sau: <br/>\r\n1. Học kỳ chính: <br/>\r\na) Sinh viên đăng ký học tối đa 20 TC. Những sy chỉ còn lại <25 TC của CTĐT được đăng ký tối đa 25 TC. <br/>\r\nb) Đối với HK đầu tiên, SV không phải đăng ký học phần. Các học phần của HK này sẽ do Trường bố trí. <br/>\r\nc) Sinh viên bị cảnh báo học vụ (Điểm a, Khoản 2, Điều 18) chỉ được phép đăng ký tối đa 14 TC. <br/>\r\n2. Học kỳ phụ:<br/>\r\nSV đăng ký tối đa 8 TC. Trường không bắt buộc SV phải học HK này. <br/>\r\nTuỳ theo năng lực học tập và điều kiện cá nhân, sinh viên nên đăng ký học với số TC phù hợp để đạt kết quả học tập tốt.<br/>', NULL),
(17, 1, 17, 'Sinh viên dựa vào KHHTTK và TKB các học phần giảng dạy trong HK do Trường công bố để đăng ký học phần trực tuyến theo kế hoạch chung. Sau tuần lễ thứ 2 của HK, SV vào hệ thống quản lý trực tuyến để in “Kết quả đăng ký học phần”.<br/>\r\nLưu ý:<br/>\r\n- Danh mục các học phần sẽ mở ở HK được quy định trong danh mục tra cứu CTĐT và được công bố 6 tuần trước khi bắt đầu HK.<br/>\r\n- Danh mục các học phần đủ điều kiện tổ chức giảng dạy sẽ được công bố 1 tuần trước khi bắt đầu HK.<br/>\r\n- Trong 1 tuần đầu của HK, SV có thể xóa những học phần đã đăng ký; hoặc đăng ký bổ sung những học phần mới (trừ các học phần thực hành, thí nghiệm, thực tập tại cơ sở, GDQP&AN, GDTC) thay cho các học phần mà Trường không thể mở được. Sau thời gian trên, kết quả đăng ký học phần của SV sẽ được cố định.<br/>\r\n- Chậm nhất là tuần lễ thứ 8 của HK chính và tuần lễ thứ 2 của HK phụ nếu thấy việc học khó khăn có thể dẫn đến kết quả kém, SV có thể rút bớt học phần đã đăng ký nhưng không được trả lại học phí. Muốn rút bớt học phần, SV vào hệ thống quản lý trực tuyến của Trường để thực hiện. Những học phần đã rút sẽ nhận điểm W trong bảng điểm HK.<br/>\r\n- Sinh viên đã đăng ký học phần nhưng không đi học hoặc không dự thi kết thúc \r\nhọc phần sẽ bị điểm F của học phần đó', NULL),
(18, 1, 18, 'Trường sẽ xóa những lớp học phần có số lượng đăng ký ít hơn 25 SV, những trường hợp đặc biệt do Hiệu trưởng quyết định. Trong tuần đầu HK, những SV đã đăng ký các học phần bị xóa do không đủ điều kiện mở lớp được phép đăng ký học phần khác để thay thế (trừ các học phần thực hành, thí nghiệm, thực tập tại cơ sở, GDQP&AN, GDTC).', NULL),
(19, 1, 19, 'trong thời gian quy định đăng ký học phần của HK, nếu có nhiều hơn 25 SV có nguyện vọng học, được trưởng bộ môn và trưởng khoa quản lý học phần đó chấp thuận, Trường sẽ mở thêm lớp học phần theo đề nghị.', NULL),
(20, 1, 20, '1. Các học phần có điểm F sẽ không được tích lũy. Nếu là học phần bắt buộc SV phải đăng ký học lại những học phần này, nếu là học phần tự chọn, SV có thể đăng ký học lại hoặc chọn học phần tự chọn khác. <br/>\r\n2. SV có thể đăng ký học để cải thiện kết quả. Điểm của học phần sẽ là điểm cao nhất trong các lần học. Số tín chỉ của học phần học cải thiện bị điểm F sẽ không tính giảm một mức hạng tốt nghiệp.<br/>\r\n3. Đối với học phần tự chọn, nếu SV tích lũy số tín chỉ nhiều hơn yêu cầu của nhóm học phần tự chọn, khi xét tốt nghiệp SV có thể lựa chọn học phần có điểm cao để tính vào ĐTBCTL.<br/>', NULL),
(21, 1, 21, '1. Nghỉ học tạm thời: SV có thể làm đơn xin phép nghỉ học tạm thời trong các trường hợp sau đây: <br/>\r\na) Được điều động vào các lực lượng vũ trang.<br/>\r\nb) Ốm đau, tai nạn phải điều trị trong thời gian dài (có xác nhận của cơ quan y tế). <br/>\r\nc) Vì nhu cầu cá nhân (hoàn cảnh gia đình neo đơn, việc riêng...). Trường hợp này chỉ giải quyết khi SV đã học ít nhất 1 học kỳ ở Trường, không rơi vào tình trạng bị buộc thôi học và phải có ĐTBCTL không dưới 2,00. Thời gian nghỉ học tạm thời trong trường hợp này được tính vào quỹ thời gian để hoàn thành CTĐT. <br/>\r\nNếu được chấp thuận, SV sẽ được nhận quyết định cho phép nghỉ học của Hiệu trưởng. Khi hết thời gian nghỉ học tạm thời và chậm nhất là 2 tuần trước khi HK mới bắt đầu, SV phải nộp hồ sơ xin học lại. Nếu đủ điều kiện, Hiệu trưởng sẽ có quyết định thu nhận SV học lại.', NULL),
(22, 1, 22, 'a) Có ĐTBCHK đạt dưới 0,80 đối với học kỳ đầu của khóa học, dưới 1,00 đối với các học kỳ tiếp theo. <br/>\r\nb) Không đăng ký học trong HK chính mà không được sự cho phép của Hiệu trưởng.', NULL),
(23, 1, 23, 'Đình chỉ học tập 1 học kỳ trong các trường hợp:<br/>\r\na) Bị kỷ luật ở mức đình chỉ học tập.<br/>\r\nb) Có ĐRL yếu, kém trong 2 học kỳ liên tiếp.<br/>\r\n<br/>\r\nĐình chỉ học tập 1 năm trong trường hợp bị kỷ luật ở mức đình chỉ học tập.\r\n<br/>\r\nBuộc thôi học trong các trường hợp:\r\na) Bị kỷ luật ở mức buộc thôi học. <br/>\r\nb) Đã bị cảnh báo học vụ và HK chính kế tiếp có ĐTBCHK dưới 1,00. Những trường hợp đặc biệt sẽ do Hiệu trưởng quyết định. <br/>\r\nc) Nghỉ học tạm thời quá thời hạn cho phép. <br/>\r\nd) Không đăng ký học trong 2 học kỳ chính liên tiếp mà không được sự cho phép của Hiệu trưởng. <br/>\r\ne) Không đóng học phí 2 học kỳ liên tiếp.<br/>\r\nf) Có ĐRL yếu, kém 2 học kỳ liên tiếp lần thứ hai. g) Đã hết thời gian tối đa được phép học. <br/>\r\n<br/>\r\nNhững trường hợp bị buộc thôi học tại Điểm b, Điểm g, SV có thể xin xét chuyển sang học các chương trình giáo dục thường xuyên tương ứng (nếu có). \r\nCVHT thông báo về gia đình những trường hợp SV bị cảnh báo học vụ và bị xử lý kỷ luật. Trường gửi về địa phương và gia đình các trường hợp SV bị đình chỉ học tập hoặc buộc thôi học.', NULL),
(24, 1, 24, 'Sinh viên phải dự 100% số tiết đối với các học phần thực hành, thí nghiệm, thực tập tại cơ sở, GDQP&AN, GDTC; phải tham dự tối thiểu 80% số tiết đối với các học phần lý thuyết. SV vắng lên lớp nhiều hơn thời gian quy định sẽ bị cấm thi. Giảng viên (GV) giảng dạy học phần đề nghị trưởng khoa duyệt danh sách SV bị cấm thi và cho điểm F vào bảng điểm. \r\n<br/>\r\nVào buổi học đầu tiên, GV thông báo cho SV biết đề cương chi tiết học phần (nội dung học phần, phương pháp giảng dạy, hình thức kiểm tra, đánh giá, cách tính điểm...). \r\nCông tác giảng dạy, học tập được thực hiện 6 ngày/tuần (trừ Chủ nhật). <br/>\r\nThời gian giảng dạy trong ngày được phân bố như sau:<br/>\r\nSáng:<br/>\r\n- Tiết 1: từ 7:00 đến 7:50; thời gian nghỉ:  không<br/>\r\n- Tiết 2: từ 7:50 đến 8:40; thời gian nghỉ:  10 phút<br/>\r\n- Tiết 3: từ 8:50 đến 9:40; thời gian nghỉ:  10 phút<br/>\r\n- Tiết 4: từ 9:50 đến 10:40; thời gian nghỉ:  không<br/>\r\n- Tiết 5: từ 10:40 đến 11:30; thời gian nghỉ:  không<br/>\r\nChiều:<br/>\r\n- Tiết 6: từ 13:30 đến 14:20; thời gian nghỉ:  không<br/>\r\n- Tiết 7: từ 14:20 đến 15:10; thời gian nghỉ:  10 phút<br/>\r\n- Tiết 8: từ 15:20 đến 15:10; thời gian nghỉ:  không<br/>\r\n- Tiết 9: từ 16:10 đến 17:00; thời gian nghỉ:  không<br/>\r\n- Tiết 10: Tiết nghỉ chung<br/>\r\nTối:<br/>\r\n- Tiết 11: từ 18:20 đến 19:10; thời gian nghỉ:  không<br/>\r\n - Tiết 12: từ 19:10 đến 20:00; thời gian nghỉ:  không', NULL),
(25, 1, 25, 'Thời gian giảng dạy trong ngày được phân bố như sau:<br/>\r\nSáng:<br/>\r\n- Tiết 1: từ 7:00 đến 7:50; thời gian nghỉ:  không<br/>\r\n- Tiết 2: từ 7:50 đến 8:40; thời gian nghỉ:  10 phút<br/>\r\n- Tiết 3: từ 8:50 đến 9:40; thời gian nghỉ:  10 phút<br/>\r\n- Tiết 4: từ 9:50 đến 10:40; thời gian nghỉ:  không<br/>\r\n- Tiết 5: từ 10:40 đến 11:30; thời gian nghỉ:  không<br/>\r\nChiều:<br/>\r\n- Tiết 6: từ 13:30 đến 14:20; thời gian nghỉ:  không<br/>\r\n- Tiết 7: từ 14:20 đến 15:10; thời gian nghỉ:  10 phút<br/>\r\n- Tiết 8: từ 15:20 đến 15:10; thời gian nghỉ:  không<br/>\r\n- Tiết 9: từ 16:10 đến 17:00; thời gian nghỉ:  không<br/>\r\n- Tiết 10: Tiết nghỉ chung<br/>\r\nTối:<br/>\r\n- Tiết 11: từ 18:20 đến 19:10; thời gian nghỉ:  không<br/>\r\n - Tiết 12: từ 19:10 đến 20:00; thời gian nghỉ:  không', NULL),
(26, 1, 26, '1. Điểm đánh giá thành phần và điểm thi kết thúc học phần được chấm theo thang điểm 10 (từ 0 đến 10), làm tròn đến một chữ số thập phân. <br/>\r\n2. Điểm học phần là tổng số điểm của tất cả các điểm đánh giá thành phần của học phần nhân với trọng số tương ứng. Điểm học phần được tính theo thang điểm 10 và làm tròn đến một chữ số thập phân. GV phụ trách học phần nhập điểm vào hệ thống quản lý trực tuyến, hệ thống quy đổi sang điểm chữ và điểm số theo thang điểm 4. Cách quy đổi điểm được thực hiện như dưới đây:<br/>\r\n<br/>Thang điểm 10: từ 9,0 đến 10,0 ; Điểm chữ: A ; Thang điểm 4: 4,0\r\n<br/>Thang điểm 10: từ 8,0 đến 8,9 ; Điểm chữ: B+ ; Thang điểm 4: 3,5\r\n<br/>Thang điểm 10: từ 7,0 đến 7,9 ; Điểm chữ: B ; Thang điểm 4: 3,0\r\n<br/>Thang điểm 10: từ 6,5 đến 6,9 ; Điểm chữ: C+ ; Thang điểm 4: 2,5\r\n<br/>Thang điểm 10: từ 5,5 đến 6,4 ; Điểm chữ: C ; Thang điểm 4: 2,0\r\n<br/>Thang điểm 10: từ 5,0 đến 5,4 ; Điểm chữ: D+ ; Thang điểm 4: 1,5\r\n<br/>Thang điểm 10: từ 4,0 đến 4,9 ; Điểm chữ: D ; Thang điểm 4: 1,0\r\n<br/>Thang điểm 10: nhỏ hơn 4,0 ; Điểm chữ: F ; Thang điểm 4: 0,0', NULL),
(27, 1, 27, 'Điểm trung bình chung học kỳ là trung bình có trọng số của điểm các học phần mà SV đã học trong HK (kể cả các học phần bị điểm F và học phần điều kiện trừ học phần GDTC), với trọng số là số TC của các học phần đó. ĐTBCHK là cơ sở để đánh giá kết quả học tập, xét học bổng, khen thưởng, cảnh báo học vụ sau mỗi HK. ĐTBCHK được tính theo công thức tính như sau:<br/>\r\n<b> ĐTBCHK = (a(i) * X(i) ) / N\r\n</b><br/>Trong đó:\r\n<br/>X(i) là điểm học phần thứ i;\r\n<br/>a(i) là số TC của học phần thứ i; \r\n<br/>N là tổng số tín chỉ của tất cả học phần SV đăng ký học trong HK đó.', NULL),
(28, 1, 28, 'Điểm trung bình chung năm học là trung bình có trọng số của điểm các học phần mà SV đã học trong 2 học kỳ chính của năm học (kể cả các học phần bị điểm F và học phần điều kiện trừ học phần GDTC).', NULL),
(29, 1, 29, 'Điểm trung bình chung tích lũy là trung bình có trọng số của điểm các học phần đã tích lũy tính đến thời điểm xét (không bao gồm các học phần bị điểm F và học phận điều kiện). ĐTBCTL là cơ sở để đánh giá kết quả học tập trong suốt thời gian học, xếp loại học tập, xếp hạng tốt nghiệp.', NULL),
(30, 1, 30, 'Xếp loại học tập HK căn cứ vào ĐTBCHK; xếp loại học tập năm học căn cứ vào ĐTBCNH theo bảng sau:<br/>\r\nĐTBCHK/ĐTBCNH: từ 3,60 đến 4,00 ; Xếp loại: Xuất sắc<br/>\r\nĐTBCHK/ĐTBCNH: từ 3,20 đến 3,59 ; Xếp loại: Giỏi<br/>\r\nĐTBCHK/ĐTBCNH: từ 2,50 đến 3,19 ; Xếp loại: Khá<br/>\r\nĐTBCHK/ĐTBCNH: từ 2,00 đến 2,49 ; Xếp loại: Trung bình<br/>\r\nĐTBCHK/ĐTBCNH: từ 1,00 đến 1,99 ; Xếp loại: Trung bình yếu<br/>\r\nĐTBCHK/ĐTBCNH: dưới 1,00 ; Xếp loại: Kém', NULL),
(31, 1, 31, '1. Mức độ rèn luyện của SV được đánh giá từng HK của 2 học kỳ chính và đo lường bằng ĐRL được chấm theo thang điểm 100 dựa vào các quy định hiện hành. ĐRL cả năm là trung bình cộng của ĐRL 2 học kỳ chính. HK phụ không tính ĐRL. <br/>\r\n2. Sinh viên bị kỷ luật mức khiển trách cấp Trường, khi đánh giá kết quả rèn luyện không được vượt quá loại khá. <br/>\r\n3. Sinh viên bị kỷ luật mức cảnh cáo cấp Trường, khi đánh giá kết quả rèn luyện không được vượt quá loại trung bình. <br/>\r\n4. Sinh viên không thực hiện bảng đánh giá kết quả rèn luyện hoặc không nộp bảng đánh giá đúng thời gian quy định sẽ bị xếp loại kém ở HK đó. <br/>\r\n5. Sinh viên bị xếp loại rèn luyện yếu, kém trong 2 học kỳ liên tiếp sẽ bị đình chỉ học tập một học kỳ. <br/>\r\n6. Sinh viên bị xếp loại rèn luyện yếu, kém trong 2 học kỳ liên tiếp lần thứ hai sẽ bị buộc thôi học. <br/>\r\n7. Sử dụng điểm rèn luyện: <br/>\r\na) Điểm rèn luyện toàn khóa học được lưu trong hồ sơ quản lý SV, ghi vào bảng điểm học tập toàn khóa của SV khi ra trường. <br/>\r\nb) Điểm rèn luyện của SV từng HK là tiêu chí để xét HBKKHT, xếp loại và khen thưởng cuối mỗi năm học.<br/>', NULL),
(32, 1, 32, '1. Giảng viên chịu trách nhiệm: trả bài kiểm tra và bài thi tại lớp; nhập điểm học phần vào hệ thống quản lý trực tuyến và in thành hai (02) bản, ký tên, gửi Khoa quản lý học phần. Khoa quản lý học phần lưu một (01) bản và gửi về Phòng Đào tạo một (01) bản chậm nhất là 10 ngày sau ngày thi của học phần. Trưởng khoa quản lý học phần xử lý tất cả khiếu nại liên quan đến kết quả học tập của học phần do khoa quản lý và chỉ thực hiện trong thời gian 1 tuần kể từ ngày công bố điểm. \r\n<br/>\r\n2. Đơn vị quản lý học phần lưu giữ các bài thi viết, tiểu luận ít nhất là 02 năm kể từ ngày thi hoặc ngày nộp tiểu luận. \r\n<br/>\r\n3. Kết thúc khoá học, Trường cấp bảng điểm học tập toàn khóa cho SV được công nhận tốt nghiệp. \r\n<br/>\r\n4. Trong quá trình học tập, SV có thể đăng ký cấp bảng điểm học kỳ theo nhu cầu riêng, mức chi phí do Trường quy định.', NULL),
(33, 1, 33, 'Sinh viên có đủ các điều kiện sau đây được xét công nhận tốt nghiệp: <br/>\r\na) Tích lũy đủ các học phần và số TC quy định trong CTĐT; ĐTBCTL của các học phần đạt từ 2,00 trở lên (theo thang điểm 4); <br/>\r\nb) Hoàn thành các học phần điều kiện. Ngoài ra, điểm trung bình chung các học phần GDQP&AN phải đạt từ 5,0 trở lên (theo thang điểm 10); <br/>\r\nc) Không bị truy cứu trách nhiệm hình sự, không bị kỷ luật ở mức đình chỉ học tập trong năm học cuối.', NULL),
(34, 1, 34, '1. Khi hết thời gian tối đa được phép học, những SV không đủ điều kiện tốt nghiệp sẽ bị xóa tên, trừ những SV được hưởng ưu tiên theo đối tượng quy định tại Quy chế tuyển sinh đại học, cao đẳng hệ chính quy. <br/>\r\n2. Sinh viên không đủ điều kiện tốt nghiệp sẽ được cấp bảng điểm các học phần đã học. <br/>\r\n3. Sinh viên còn nợ các học phần GDQP&AN, GDTC, nhưng đã hết thời gian tối đa được phép học, trong thời hạn 5 năm SV trở về Trường trả nợ để có đủ điều kiện xét tốt nghiệp.', NULL),
(35, 1, 35, '1. Bằng tốt nghiệp được cấp theo ngành đào tạo.<br/>\r\n2. Hạng tốt nghiệp được xác định căn cứ vào ĐTBCTL theo các mức trong bảng sau: <br/>\r\n-	ĐTBCTL: từ 3,60 đến 4,00 ; Hạng tốt nghiệp; Loại xuất sắc<br/>\r\n-	ĐTBCTL: từ 3,20 đến 3,59 ; Hạng tốt nghiệp; Loại giỏi<br/>\r\n-	ĐTBCTL: từ 2,50 đến 3,19 ; Hạng tốt nghiệp; Loại khá<br/>\r\n-	ĐTBCTL: từ 2,00 đến 2,49 ; Hạng tốt nghiệp; Loại trung bình<br/>\r\nHạng tốt nghiệp loại xuất sắc và giỏi sẽ bị giảm một mức nếu rơi vào một trong các trường hợp sau: <br/>\r\na) Có khối lượng các học phần bị điểm F vượt quá 5% tổng số TC của CTĐT (không tính khối lượng học phần học cải thiện điểm bị điểm F). <br/>\r\nb) Đã bị kỷ luật từ mức cảnh cáo cấp Trường trong thời gian học.', NULL),
(36, 1, 36, 'Sinh viên có thể đóng học phí tại tất cả các địa điểm giao dịch của Ngân hàng AgriBank, SacomBank, HDBank trên toàn quốc.', NULL),
(37, 1, 37, 'Mẫu đơn xác nhận hộ nghèo', 'https://dsa.ctu.edu.vn/images/upload/vbanply/%289%29%20Bieu%20mau%20sinh%20vien/%2821%29%20Mau%20Giay%20CN%20SV%20dien%20ho%20ngheo.doc'),
(38, 1, 38, 'Mẫu đơn xác nhận hộ cận nghèo', 'https://dsa.ctu.edu.vn/images/upload/vbanply/%289%29%20Bieu%20mau%20sinh%20vien/%2825%29%20Maucanngheo.doc'),
(39, 1, 39, 'Mẫu đơn xin trợ cấp khó khăn đột xuất', 'https://dsa.ctu.edu.vn/images/upload/vbanply/%289%29%20Bieu%20mau%20sinh%20vien/%2808%29%20Don%20xin%20tro%20cap%20kho%20khan%20dot%20xuat.doc'),
(40, 1, 40, 'Mẫu đơn xin trợ cấp xã hội', 'https://dsa.ctu.edu.vn/images/upload/vbanply/%289%29%20Bieu%20mau%20sinh%20vien/%2807%29%20Don%20xin%20xet%20tro%20cap%20xa%20hoi.doc'),
(41, 1, 41, 'Giấy cam kết trả nợ', 'https://dsa.ctu.edu.vn/images/upload/vbanply/%289%29%20Bieu%20mau%20sinh%20vien/%2803%29%20Giay%20cam%20ket%20tro%20no%20TDSV.doc'),
(42, 1, 42, 'Giấy xác nhận vay vốn mẫu 01/TDSV *', 'https://dsa.ctu.edu.vn/images/upload/vbanply/%289%29%20Bieu%20mau%20sinh%20vien/%2801%29%20Giay%20xac%20nhan%20vay%20von%20TDSV.doc'),
(43, 1, 43, 'Mẫu đơn xin tạm hoãn nghĩa vụ quân sự', 'https://dsa.ctu.edu.vn/images/upload/vbanply/2017/BieuMau/BieuMau_NVQS.doc'),
(44, 1, 44, 'Mẫu đơn xác nhận sinh viên trường ( tiếng Việt)', 'https://dsa.ctu.edu.vn/images/upload/vbanply/2020/Bieumau/Mau_XacnhanSV.doc'),
(45, 1, 45, 'Mẫu giấy xác nhận sinh viên trường ( tiếng Anh)', 'https://dsa.ctu.edu.vn/images/upload/vbanply/2020/Bieumau/XacnhanSC_English.doc'),
(46, 1, 46, 'Mẫu đơn đăng ký vay vốn theo lớp', 'https://dsa.ctu.edu.vn/images/upload/vbanply/2017/BieuMau/mau_dangkyvayvon_theolop.xls'),
(47, 1, 47, 'Đơn xin ở Ký túc xá cho sinh viên Sau đại học, không chính quy của Trường', 'https://dsa.ctu.edu.vn/images/upload/vbanply/%289%29%20Bieu%20mau%20sinh%20vien/%2824%29%20mau_ktx_hocvienCH-khongchinhquy.doc'),
(48, 1, 48, 'Mẫu đơn xin chuyển trường', 'https://dsa.ctu.edu.vn/images/upload/vbanply/%289%29%20Bieu%20mau%20sinh%20vien/%2809%29%20Don%20xin%20chuyen%20truong.doc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tukhoa`
--

CREATE TABLE `tbl_tukhoa` (
  `IDTuKhoa` int(10) UNSIGNED NOT NULL,
  `TuKhoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usetk` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tukhoa`
--

INSERT INTO `tbl_tukhoa` (`IDTuKhoa`, `TuKhoa`, `usetk`) VALUES
(1, 'Xin chào', 1),
(2, 'Nội quy trường', 1),
(3, 'xây dựng kế hoạch học tập toàn khóa', 1),
(4, 'thời gian đào tạo đại học', 1),
(6, 'tín chỉ và khối lượng chương trình đào tạo', 1),
(7, 'Học bổng khuyến khích học tập', 1),
(8, 'Học bổng tài trợ', 1),
(9, 'mức học phí', 1),
(10, 'miễn giảm học phí', 1),
(11, 'Bảo hiểm y tế', 1),
(12, 'bảo hiểm tai nạn', 1),
(13, 'tín dụng sinh viên', 1),
(14, 'Trách nhiệm của Trường trong việc đăng ký học phần', 1),
(15, 'Trách nhiệm của sinh viên trong việc đăng ký học phần', 1),
(16, 'Số tín chỉ đăng ký trong một học kỳ', 1),
(17, 'quy trình đăng ký học phần', 1),
(18, 'Xóa lớp học phần', 1),
(19, 'Mở thêm lớp học phần', 1),
(20, 'đăng kí học lại', 1),
(21, 'Nghỉ học tạm thời', 1),
(22, 'cảnh báo học vụ', 1),
(23, 'đình chỉ học tập và buộc thôi học', 1),
(24, 'Giờ lên lớp', 1),
(25, 'Thời gian các tiết học', 1),
(26, 'điểm học phần', 1),
(27, 'Điểm trung bình chung học kỳ', 1),
(28, 'điểm trung bình chung năm học', 1),
(29, 'điểm trung bình chung tích lũy', 1),
(30, 'xếp loại học tập', 1),
(31, 'Điểm rèn luyện', 1),
(32, 'Thông báo kết quả học tập', 1),
(33, 'Điều kiện tốt nghiệp', 1),
(34, 'quá hạn thời gian đào tạo', 1),
(35, 'Bằng tốt nghiệp và hạng tốt nghiệp', 1),
(36, 'cách thức đóng học phí', 1),
(37, 'Mẫu đơn xác nhận hộ nghèo', 1),
(38, 'Mẫu đơn xác nhận hộ cận nghèo', 1),
(39, 'Đơn xin trợ cấp khó khăn đột xuất', 1),
(40, 'Đơn xin trợ cấp xã hội', 1),
(41, 'Giấy cam kết trả nợ', 1),
(42, 'Giấy xác nhận vay vốn mẫu 01/TDSV', 1),
(43, 'Đơn xin tạm hoãn nghĩa vụ quân sự', 1),
(44, 'Đơn xác nhận sinh viên Trường', 1),
(45, 'Giấy xác nhận sinh viên (Tiếng Anh)', 1),
(46, 'Mẫu đơn đăng ký vay vốn theo lớp.', 1),
(47, 'Đơn xin ở Ký túc xá cho sinh viên Sau đại học, không chính quy của Trường', 1),
(48, 'Đơn xin chuyển trường', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_chude`
--
ALTER TABLE `tbl_chude`
  ADD PRIMARY KEY (`IDChuDe`);

--
-- Chỉ mục cho bảng `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_phanhoi`
--
ALTER TABLE `tbl_phanhoi`
  ADD PRIMARY KEY (`IDPhanHoi`),
  ADD KEY `IDChuDe` (`IDChuDe`),
  ADD KEY `IDTuKhoa` (`IDTuKhoa`);
ALTER TABLE `tbl_phanhoi` ADD FULLTEXT KEY `PhanHoi` (`PhanHoi`);

--
-- Chỉ mục cho bảng `tbl_tukhoa`
--
ALTER TABLE `tbl_tukhoa`
  ADD PRIMARY KEY (`IDTuKhoa`);
ALTER TABLE `tbl_tukhoa` ADD FULLTEXT KEY `TuKhoa` (`TuKhoa`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_chude`
--
ALTER TABLE `tbl_chude`
  MODIFY `IDChuDe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_phanhoi`
--
ALTER TABLE `tbl_phanhoi`
  MODIFY `IDPhanHoi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_tukhoa`
--
ALTER TABLE `tbl_tukhoa`
  MODIFY `IDTuKhoa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
