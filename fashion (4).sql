-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 03:51 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

CREATE TABLE `hocvien` (
  `id` int(11) NOT NULL,
  `MaTD` int(11) NOT NULL,
  `TenHV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `TenPH` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Fb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Malop` int(11) NOT NULL,
  `Cahoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaKH` int(11) NOT NULL,
  `Ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayDKM` date NOT NULL,
  `NgayKetKhoa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayNghi` date DEFAULT NULL,
  `Trangthai` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hocvien`
--

INSERT INTO `hocvien` (`id`, `MaTD`, `TenHV`, `Ngaysinh`, `TenPH`, `Sdt`, `Fb`, `Malop`, `Cahoc`, `MaKH`, `Ghichu`, `NgayDKM`, `NgayKetKhoa`, `NgayNghi`, `Trangthai`) VALUES
(2, 1, 'Nguyễn Thị Minh Nguyệt', '1995-12-02', 'Nguyễn Văn A', '02158824521', 'gg', 6, '1', 1, NULL, '2018-11-06', NULL, '2018-11-30', 3),
(4, 1, 'NobiTa', '2018-11-13', 'q', '01688587941', 'gg', 1, '1', 1, '11111', '2018-11-16', NULL, '2018-11-11', 1),
(5, 1, 'Vũ Văn A', '2018-11-14', 'Nguyễn Văn A', '01688587941', 'gg', 2, '1', 1, '11111', '2018-11-17', NULL, '2018-11-18', 2),
(6, 1, 'NobiTa', '2018-11-07', 'Nguyễn Văn A', '01688587941', 'gg', 5, '2', 1, '11111', '2018-11-18', '2/18/2019', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id` int(11) NOT NULL,
  `Khoahoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `Khoahoc`) VALUES
(1, '3'),
(2, '4');

-- --------------------------------------------------------

--
-- Table structure for table `kiemtra`
--

CREATE TABLE `kiemtra` (
  `id` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL,
  `NgayKT` date NOT NULL,
  `ThoiGian` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kiemtra`
--

INSERT INTO `kiemtra` (`id`, `MaLop`, `NgayKT`, `ThoiGian`) VALUES
(1, 5, '2018-11-01', '2'),
(2, 2, '2018-11-18', '1'),
(4, 7, '2018-11-18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `id` int(11) NOT NULL,
  `TenLop` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`id`, `TenLop`) VALUES
(1, ''),
(2, ' Tình Thương 1'),
(5, 'Lớp Học Tình Nghĩa'),
(6, 'Lớp Học Tình Nghĩa 1'),
(7, 'Lớp Học Tình Nghĩa 12'),
(9, 'Lớp Học Tình Nghĩa');

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE `luong` (
  `id` int(11) NOT NULL,
  `LuongCB` int(11) NOT NULL,
  `Thang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Thuong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ngaycong` int(11) NOT NULL,
  `LuongTL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Trangthai` tinyint(4) NOT NULL,
  `MaNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `luong`
--

INSERT INTO `luong` (`id`, `LuongCB`, `Thang`, `Thuong`, `Ngaycong`, `LuongTL`, `Trangthai`, `MaNV`) VALUES
(1, 3000, '2018-11', '1000', 22, '3539', 1, 2),
(3, 30000, '2018-10', '1000', 22, '26385', 1, 3),
(4, 3000, '2018-11', '1000', 22, '3539', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_02_143724_students_table', 1),
(4, '2018_08_26_045433_employees_table', 2),
(5, '2018_10_30_151119_salarys_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `TenNV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Quequan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Bangcap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Capbac` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `TenNV`, `Ngaysinh`, `Quequan`, `Bangcap`, `Capbac`) VALUES
(2, 'Vũ', '2018-11-06', 'Hà Nội', 'Đại Học', '1'),
(3, 'Vũ', '2018-11-17', 'Hà Nội', 'Đại Học', '2'),
(4, 'Q', '2018-11-13', 'Hà Nội', 'Đại Học', '0');

-- --------------------------------------------------------

--
-- Table structure for table `phudao`
--

CREATE TABLE `phudao` (
  `id` int(11) NOT NULL,
  `MaHV` int(11) NOT NULL,
  `ThoiGian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayPD` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phudao`
--

INSERT INTO `phudao` (`id`, `MaHV`, `ThoiGian`, `NgayPD`) VALUES
(2, 5, '3', '2018-11-22'),
(3, 2, '1', '2018-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `alias` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_type` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1.Admin 2.Staff',
  `remember_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_token_expired` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` bigint(11) DEFAULT NULL,
  `updated_by` bigint(11) DEFAULT NULL,
  `deleted_by` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `alias`, `username`, `password`, `email`, `first_name`, `last_name`, `full_name`, `author_type`, `remember_token`, `reset_password_token`, `reset_password_token_expired`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, '19c7fba9083b62ee317f3f46e4e894e2f81761cc', 'admin', '$2y$10$1ACB9rEmjxg/Efd6hfXqG.sK8KYtisnznOdjP72ddDUIkQnLIrMbC', 'lenhhoxung3193@gmail.com', 'Lenh Ho', 'Xung', 'Lenh Ho Xung', 1, 'O3n0ysFvdgt3JjV4U1S54cRXU7neul3QItInUZ8GB2PsKnk9U5LZonB4pJAB', NULL, NULL, '2017-10-16 01:33:37', '2017-10-16 01:33:37', NULL, NULL, NULL, NULL),
(3, '3d6519c622cf803a093e8c9d0080c1cd87705771', 'admin', '$2y$10$RiITvnbCtcEW7EhU1vqME.K9BB4Xf20maX4wrshVn5ZoID33pZQzK', 'lenhhoxung3193@gmail.com', 'Lenh Ho', 'Xung', 'Lenh Ho Xung', 1, NULL, NULL, NULL, '2018-07-30 15:32:43', '2018-07-30 15:32:43', NULL, NULL, NULL, NULL),
(4, 'ed3f3111ee42e76f4052d8c81a32e0afef9a203e', 'admin', '$2y$10$Abi/y0fnQtPzyzfGI5n4FeEH5pGUL/MXTfOMVOnJoTvr7tnh9LysC', 'lenhhoxung3193@gmail.com', 'Lenh Ho', 'Xung', 'Lenh Ho Xung', 1, NULL, NULL, NULL, '2018-10-30 13:14:04', '2018-10-30 13:14:04', NULL, NULL, NULL, NULL);

--
-- Triggers `staffs`
--
DELIMITER $$
CREATE TRIGGER `staffs` BEFORE INSERT ON `staffs` FOR EACH ROW BEGIN
	SET NEW.`alias`=SHA1(UUID());
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trinhdo`
--

CREATE TABLE `trinhdo` (
  `id` int(11) NOT NULL,
  `TenTD` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trinhdo`
--

INSERT INTO `trinhdo` (`id`, `TenTD`) VALUES
(1, 'Con Dê Qua Cầu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kiemtra`
--
ALTER TABLE `kiemtra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phudao`
--
ALTER TABLE `phudao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kiemtra`
--
ALTER TABLE `kiemtra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `luong`
--
ALTER TABLE `luong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phudao`
--
ALTER TABLE `phudao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
