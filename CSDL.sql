-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 06, 2020 lúc 04:46 AM
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
(1, 'admin', '781e5e245d69b566979b86e28d23f2c7', 'Admin name', '0123456789', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chude`
--

CREATE TABLE `tbl_chude` (
  `IDChuDe` int(10) UNSIGNED NOT NULL,
  `TenChuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaChuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `hoi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `PhanHoi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phanhoi`
--

INSERT INTO `tbl_phanhoi` (`IDPhanHoi`, `IDChuDe`, `IDTuKhoa`, `PhanHoi`) VALUES
(1, 4, 1, 'Cố Vấn Học Tập Online Xin chào bạn :D'),
(2, 4, 2, 'Hi !!'),
(3, 4, 3, 'Hello !!'),
(4, 1, 4, 'Bạn có thể đăng ký tại đây : abc.com'),
(5, 1, 5, 'bạn có thể tải mẫu đơn tại đây'),
(6, 1, 6, 'Bạn có thể đăng ký Giay Hoan Nghia Vu tại đây : abc.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tukhoa`
--

CREATE TABLE `tbl_tukhoa` (
  `IDTuKhoa` int(10) UNSIGNED NOT NULL,
  `TuKhoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tukhoa`
--

INSERT INTO `tbl_tukhoa` (`IDTuKhoa`, `TuKhoa`) VALUES
(1, 'xin chao'),
(2, 'hello'),
(3, 'hi'),
(4, 'giay hoan nghia vu'),
(5, 'don xin gia han hoc phi'),
(6, 'giấy hoãn nghĩa vụ quân sự');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tlb_user`
--

CREATE TABLE `tlb_user` (
  `id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tlb_user`
--

INSERT INTO `tlb_user` (`id`, `first_name`, `last_name`, `locale`, `gender`, `time`) VALUES
('4696015090441182', 'Khoi', 'Bui', 'vi_VN', 'male', '1604283769955');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

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

--
-- Chỉ mục cho bảng `tbl_tukhoa`
--
ALTER TABLE `tbl_tukhoa`
  ADD PRIMARY KEY (`IDTuKhoa`);

--
-- Chỉ mục cho bảng `tlb_user`
--
ALTER TABLE `tlb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `IDPhanHoi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_tukhoa`
--
ALTER TABLE `tbl_tukhoa`
  MODIFY `IDTuKhoa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
