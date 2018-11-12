-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 04:25 PM
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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `Stt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `School` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rank` int(11) DEFAULT NULL,
  `Bod` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `Stt`, `Name`, `Country`, `School`, `Rank`, `Bod`, `created_at`, `updated_at`) VALUES
(1, '001', 'Big1', 'Ninh Binh', 'HUST', 0, '2002-09-22', NULL, NULL),
(2, '002', 'Xuka2', 'Ha Noi', 'HUST', 2, '2008-09-17', NULL, '2018-08-26 03:51:08'),
(3, '003', 'Xuka3', 'Ha Dong', 'FTU', 0, '2016-03-06', NULL, NULL),
(4, '004', 'Xuka4', 'Ha Tay', 'HUST', 0, '2008-06-18', NULL, NULL),
(5, '005', 'Doremon5', 'Ha Dong', 'NEU', 0, '2000-10-16', NULL, NULL),
(6, '006', 'Doremon6', 'Ha Tay', 'FTU', 1, '2000-01-05', NULL, NULL),
(7, '007', 'Doremon7', 'Ha Dong', 'FTU', 0, '2001-01-16', NULL, NULL),
(8, '008', 'Doremon8', 'Ha Tay', 'NEU', 1, '2004-10-01', NULL, NULL),
(9, '009', 'Xuka9', 'Ninh Binh', 'NEU', 0, '1999-10-04', NULL, NULL),
(11, NULL, 'Vũ Tùng Quân', 'Tuyên Quang', 'Đại Học', 1, NULL, '2018-10-29 09:36:38', '2018-10-29 09:36:38'),
(12, NULL, 'Vũ Tùng Quân', 'Tuyên Quang', 'Đại Học', 2, '2018-10-02', '2018-10-30 06:45:36', '2018-10-30 06:45:36');

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
  `NgayKetKhoa` date DEFAULT NULL,
  `NgayPD` date DEFAULT NULL,
  `NgayKT` date DEFAULT NULL,
  `NgayNghi` date DEFAULT NULL,
  `Trangthai` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hocvien`
--

INSERT INTO `hocvien` (`id`, `MaTD`, `TenHV`, `Ngaysinh`, `TenPH`, `Sdt`, `Fb`, `Malop`, `Cahoc`, `MaKH`, `Ghichu`, `NgayDKM`, `NgayKetKhoa`, `NgayPD`, `NgayKT`, `NgayNghi`, `Trangthai`) VALUES
(2, 1, 'Nguyễn Thị Minh Nguyệt', '1995-12-02', 'Nguyễn Văn A', '02158824521', 'gg', 6, '1', 1, NULL, '2018-11-06', NULL, NULL, NULL, NULL, 2),
(3, 1, 'Vũ', '2018-11-06', 'Nguyễn Văn A', '01688587941', 'gg', 1, '1', 1, NULL, '2018-11-08', NULL, NULL, NULL, NULL, 2),
(4, 1, 'NobiTa', '2018-11-13', 'q', '01688587941', 'gg', 2, '1', 1, '11111', '2018-11-08', NULL, NULL, NULL, NULL, 1);

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
(1, 'Lập Trình');

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
-- Table structure for table `salarys`
--

CREATE TABLE `salarys` (
  `id` int(10) UNSIGNED NOT NULL,
  `EmployeeId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Work` int(11) DEFAULT NULL,
  `Basic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salarys`
--

INSERT INTO `salarys` (`id`, `EmployeeId`, `Name`, `Work`, `Basic`, `Bonus`, `Month`, `created_at`, `updated_at`) VALUES
(3, '4', NULL, 22, '433333', '232', '2018-10', '2018-10-31 07:14:10', '2018-10-31 07:14:10'),
(5, '1', NULL, 22, '23444', '213', '2018-10', '2018-10-31 08:52:57', '2018-10-31 08:52:57');

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
(2, '19c7fba9083b62ee317f3f46e4e894e2f81761cc', 'admin', '$2y$10$1ACB9rEmjxg/Efd6hfXqG.sK8KYtisnznOdjP72ddDUIkQnLIrMbC', 'lenhhoxung3193@gmail.com', 'Lenh Ho', 'Xung', 'Lenh Ho Xung', 1, 'G9yU5JuH14zulYxetvDYwf568zvMhxeJTt9tFMThqkRlDC1mqDNNuh3uhFz3', NULL, NULL, '2017-10-16 01:33:37', '2017-10-16 01:33:37', NULL, NULL, NULL, NULL),
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `Stt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ClassName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lecture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CourseNew` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL,
  `Type` tinyint(4) DEFAULT NULL,
  `RegDateNew` date DEFAULT NULL,
  `RegDate` date DEFAULT NULL,
  `Bod` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Stt`, `Name`, `Parent`, `Course`, `Phone`, `Facebook`, `ClassName`, `Lecture`, `CourseNew`, `Status`, `Type`, `RegDateNew`, `RegDate`, `Bod`, `created_at`, `updated_at`) VALUES
(1, '0050', 'Xuka50', 'Mr.TQ', '6 tháng', '0904751288', 'Big38', 'IELTS', '2', NULL, 1, 1, NULL, '2018-07-24', '2004-04-24', NULL, '2018-10-29 09:23:32'),
(2, '0051', 'Nobita51', 'BigDaddy', 'English_0', '0908607258', 'Doremon33', 'English Basic', '2', NULL, 0, 1, NULL, '2018-07-01', '2011-04-12', NULL, NULL),
(3, '0052', 'Xuka52', 'Mr.T', 'English_2', '0901601904', 'Nobita17', 'English Basic', '2', NULL, 1, 1, NULL, '2018-07-27', '2009-05-07', NULL, NULL),
(4, '0053', 'Nobit', 'Mr.Left', 'English_0', '0907051288', 'Nobita23', 'IELTS', '1', NULL, 1, 1, NULL, '2018-07-21', '2014-11-25', NULL, '2018-08-11 21:58:28'),
(5, '0054', 'Nobita54', 'Mr.Right', 'English_0', '0905069268', 'Big13', 'TOEIC', '3', NULL, 0, 1, NULL, '2018-07-19', '2006-01-25', NULL, NULL),
(6, '0055', 'Xuka55', 'Mr.T', 'English_1', '0904140989', 'Nobita8', 'IELTS', '2', NULL, 1, 1, NULL, '2018-07-21', '2002-02-26', NULL, NULL),
(7, '0056', 'Doremon56', 'Mr.Left', 'English_3', '0902554599', 'Doremon28', 'IELTS', '3', NULL, 1, 1, NULL, '2018-07-03', '2003-08-10', NULL, NULL),
(8, '0057', 'Doremon57', 'Mr.T', 'English_2', '0904294038', 'Big47', 'ENGLISH B', '2', NULL, 0, 1, NULL, '2018-07-05', '2003-05-26', NULL, NULL),
(9, '0058', 'Big58', 'Mr.T', 'English_3', '0905908945', 'Doremon9', 'English Basic', '3', NULL, 0, 1, NULL, '2018-07-08', '2004-01-22', NULL, NULL),
(10, '0059', 'Doremon59', 'Mr.Right', 'English_3', '0907844126', 'Nobita39', 'IELTS', '2', NULL, 1, 1, NULL, '2018-07-22', '1998-09-21', NULL, NULL),
(11, '0011', 'Xuka11', 'Mr.Right', 'English_1', '0909427085', 'Doremon45', 'TOEIC', '1', 'English_New_2', 1, 1, '2018-07-19', '2018-07-18', '2006-07-14', NULL, '2018-08-12 06:29:08'),
(12, '0012', 'Big12', 'Mr.Left', 'English_1', '0906513330', 'Big31', 'English Basic', '3', 'English_New_0', 1, 1, '2018-07-09', '2018-07-02', '2000-10-11', NULL, '2018-08-12 06:29:48'),
(13, '0013', 'Doremon13', 'Mr.Left', '6 tháng', '0907428373', 'Xuka22', 'English Basic', '1', '12 tháng', 1, 2, '2018-07-04', '2018-07-12', '2011-05-05', NULL, '2018-10-29 09:24:11'),
(14, '0014', 'Xuka14', 'Mr.Left', 'English_1', '0905080000', 'Doremon85', 'IELTS', '1', 'English_New_0', 0, 2, '2018-07-14', '2018-07-23', '2009-12-26', NULL, NULL),
(15, '0015', 'Xuka15', 'BigDaddy', 'English_1', '0906112993', 'Xuka7', 'IELTS', '2', 'English_New_3', 1, 2, '2018-07-19', '2018-07-12', '2012-04-30', NULL, NULL),
(16, '0016', 'Doremon16', 'Mr.Right', 'English_3', '0902444361', 'Doremon14', 'ENGLISH B', '3', 'English_New_2', 0, 1, '2018-07-20', '2018-07-01', '2003-01-19', NULL, '2018-08-12 06:41:05'),
(17, '0017', 'Big17', 'Mr.T', 'English_0', '0906402515', 'Doremon46', 'TOEIC', '1', 'English_New_0', 0, 1, '2018-07-13', '2018-07-14', '1997-06-30', NULL, '2018-08-12 06:40:22'),
(18, '0018', 'Doremon18', 'Mr.T', 'English_2', '0903640374', 'Xuka88', 'TOEIC', '2', 'English_New_0', 0, 1, '2018-07-09', '2018-07-26', '2016-08-28', NULL, '2018-08-12 06:40:08'),
(19, '0019', 'Big19', 'BigDaddy', 'English_1', '0907811472', 'Big47', 'TOEIC', '1', 'English_New_3', 0, 2, '2018-07-11', '2018-07-05', '2008-05-12', NULL, '2018-08-12 06:42:31'),
(20, '0020', NULL, NULL, NULL, NULL, NULL, 'ENGLISH B', '3', NULL, 11, 3, NULL, '2018-07-11', NULL, NULL, '2018-08-12 08:45:10'),
(22, '0022', NULL, NULL, NULL, NULL, NULL, 'IELTS', '2', NULL, 14, 3, NULL, '2018-08-28', NULL, NULL, NULL),
(23, '0023', NULL, NULL, NULL, NULL, NULL, 'ENGLISH B', '3', NULL, 16, 3, NULL, '2018-08-25', NULL, NULL, NULL),
(24, '0024', NULL, NULL, NULL, NULL, NULL, 'ENGLISH B', '1', NULL, 15, 3, NULL, '2018-08-10', NULL, NULL, NULL),
(25, '0025', NULL, NULL, NULL, NULL, NULL, 'TOEIC', '1', NULL, 17, 3, NULL, '2018-08-01', NULL, NULL, NULL),
(26, '0026', NULL, NULL, NULL, NULL, NULL, 'ENGLISH B', '1', NULL, 21, 3, NULL, '2018-08-03', NULL, NULL, NULL),
(27, '0027', NULL, NULL, NULL, NULL, NULL, 'ENGLISH B', '2', NULL, 22, 3, NULL, '2018-08-31', NULL, NULL, NULL),
(28, '0028', NULL, NULL, NULL, NULL, NULL, 'ENGLISH B', '1', NULL, 17, 3, NULL, '2018-08-20', NULL, NULL, NULL),
(29, '0029', NULL, NULL, NULL, NULL, NULL, 'TOEIC', '2', NULL, 8, 3, NULL, '2018-08-14', NULL, NULL, NULL),
(30, '0030', 'Xuka30', 'BigDaddy', 'English_2', '0903044438', 'Xuka37', 'Ielts 6.5', '2', NULL, NULL, 4, NULL, '2018-07-14', '2011-08-01', NULL, '2018-08-12 07:33:19'),
(31, '0031', 'Big31', 'Mr.Right', 'English_1', '0909046765', 'Big86', NULL, '2', NULL, NULL, 4, NULL, '2018-07-21', '2001-03-07', NULL, NULL),
(32, '0032', 'Doremon32', 'BigDaddy', 'English_3', '0901415792', 'Xuka92', NULL, '1', NULL, NULL, 4, NULL, '2018-07-28', '2016-01-15', NULL, NULL),
(33, '0033', 'Doremon33', 'BigDaddy', 'English_0', '0901603261', 'Doremon35', NULL, '1', NULL, NULL, 4, NULL, '2018-07-26', '2008-12-18', NULL, NULL),
(34, '0034', 'Doremon34', 'Mr.T', 'English_3', '0907144926', 'Big58', NULL, '1', NULL, NULL, 4, NULL, '2018-07-17', '2013-06-02', NULL, NULL),
(35, '0035', 'Big35', 'Mr.Right', 'English_1', '0902467945', 'Xuka52', NULL, '3', NULL, NULL, 4, NULL, '2018-07-26', '2007-11-27', NULL, NULL),
(36, '0036', 'Big36', 'Mr.T', 'English_3', '0909576502', 'Doremon49', NULL, '3', NULL, NULL, 4, NULL, '2018-07-26', '2013-03-21', NULL, NULL),
(37, '0037', 'Big37', 'Mr.T', 'English_0', '0903170795', 'Xuka87', NULL, '3', NULL, NULL, 4, NULL, '2018-07-18', '2016-03-26', NULL, NULL),
(38, '0038', 'Nobita38', 'Mr.Right', 'English_2', '0901574817', 'Doremon1', NULL, '1', NULL, NULL, 4, NULL, '2018-07-26', '1999-01-26', NULL, NULL),
(40, '0030', 'Nobita30', 'Mr.T', 'English_0', '0904515654', 'Doremon93', NULL, '3', NULL, 1, 5, '2018-07-16', '2018-07-23', '1999-05-28', NULL, NULL),
(41, '0031', 'Nobita31', 'Mr.Right', 'English_0', '0908945739', 'Doremon80', NULL, '3', NULL, 1, 5, '2018-07-10', '2018-07-15', '2010-11-04', NULL, NULL),
(42, '0032', 'Xuka32', 'Mr.T', 'English_0', '0907751573', 'Xuka9', NULL, '2', NULL, 0, 5, '2018-07-06', '2018-07-09', '1996-02-22', NULL, NULL),
(43, '0033', 'Nobita33', 'Mr.T', 'English_3', '0908613375', 'Xuka87', NULL, '2', NULL, 1, 5, '2018-07-28', '2018-07-03', '1998-11-19', NULL, NULL),
(44, '0034', 'Doremon34', 'Mr.Right', 'English_0', '0902825071', 'Big42', NULL, '2', NULL, 1, 5, '2018-07-12', '2018-07-01', '2011-07-06', NULL, NULL),
(45, '0035', 'Xuka35', 'BigDaddy', 'English_2', '0901434047', 'Doremon13', NULL, '1', NULL, 1, 5, '2018-07-12', '2018-07-13', '2008-08-05', NULL, NULL),
(46, '0036', 'Nobita36', 'BigDaddy', 'English_1', '0905968175', 'Big88', NULL, '2', NULL, 1, 5, '2018-07-12', '2018-07-07', '2007-12-09', NULL, NULL),
(47, '0037', 'Nobita37', 'BigDaddy', 'English_0', '0908598343', 'Doremon70', NULL, '1', NULL, NULL, 5, '2018-07-17', '2018-07-21', '2002-12-02', NULL, NULL),
(48, '0038', 'Xuka38', 'BigDaddy', 'English_1', '0906234476', 'Big54', NULL, '2', NULL, 1, 5, '2018-07-18', '2018-07-11', '2007-02-17', NULL, NULL),
(49, '0039', 'Xuka39', 'Mr.T', 'English_0', '0909853493', 'Xuka20', NULL, '2', NULL, 0, 5, '2018-07-03', '2018-07-11', '2007-09-04', NULL, NULL),
(50, '0030', 'Xuka', 'Mr.Left', 'English_1', '0903453097', 'Xuka91', 'TOEIC', '1', NULL, NULL, 1, NULL, '2018-07-04', '2006-03-23', NULL, '2018-09-16 04:03:55'),
(51, '0031', 'Big3111111111', 'Mr.T', 'English_3', '0909989430', 'Doremon51', 'ENGLISH B', '2', NULL, NULL, 1, NULL, '2018-07-12', '1996-12-15', NULL, '2018-08-12 07:51:57'),
(52, '0032', 'Big32', 'Mr.Left', 'English_2', '0905634155', 'Xuka94', 'ENGLISH B', '1', NULL, NULL, 6, NULL, '2018-07-22', '2014-07-10', NULL, NULL),
(53, '0033', 'Big33', 'Mr.T', 'English_0', '0901481061', 'Xuka7', 'TOEIC', '3', NULL, NULL, 6, NULL, '2018-07-23', '1999-06-01', NULL, NULL),
(54, '0034', 'Big34', 'Mr.Left', 'English_2', '0901659569', 'Doremon61', 'TOEIC', '2', NULL, NULL, 6, NULL, '2018-07-18', '2007-03-04', NULL, NULL),
(55, '0035', 'Big35', 'BigDaddy', 'English_3', '0901883959', 'Nobita18', 'ENGLISH B', '3', NULL, NULL, 6, NULL, '2018-07-25', '1996-01-26', NULL, NULL),
(56, '0036', 'Big36', 'Mr.Right', 'English_0', '0905666911', 'Nobita28', 'English Basic', '1', NULL, NULL, 6, NULL, '2018-07-18', '2010-09-19', NULL, NULL),
(57, '0037', 'Big37', 'BigDaddy', 'English_0', '0904669618', 'Doremon17', 'IELTS', '2', NULL, NULL, 6, NULL, '2018-07-22', '2012-10-01', NULL, NULL),
(58, '0038', 'Doremon38', 'BigDaddy', 'English_0', '0904255084', 'Doremon17', 'English Basic', '1', NULL, NULL, 6, NULL, '2018-07-02', '2011-06-19', NULL, NULL),
(59, '0039', 'Nobita39', 'Mr.Left', 'English_2', '0908509500', 'Big63', 'IELTS', '3', NULL, NULL, 1, NULL, '2018-07-26', '2007-03-11', NULL, '2018-08-12 07:52:17'),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 08:57:09', '2018-08-11 08:57:09'),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 08:58:14', '2018-08-11 08:58:14'),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 08:59:01', '2018-08-11 08:59:01'),
(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 08:59:30', '2018-08-11 08:59:30'),
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 09:08:44', '2018-08-11 09:08:44'),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 09:10:03', '2018-08-11 09:10:03'),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 09:11:17', '2018-08-11 09:11:17'),
(67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 09:11:30', '2018-08-11 09:11:30'),
(68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 09:11:45', '2018-08-11 09:11:45'),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-11 09:12:45', '2018-08-11 09:12:45'),
(70, NULL, 'Vũ Tùng Quân', 'Vũ Văn Kiệt', 'Ielts 6.5', '01688587941', 'Vũ', 'Ielts 6.5', '2', NULL, NULL, 2, '2018-08-09', '2018-08-11', '2018-08-08', '2018-08-11 09:18:23', '2018-08-12 06:43:03'),
(71, NULL, 'Xuka50', 'Mr.T', 'English_3', '0904751288', 'Big38', 'IELTS', '1', 'English -B', NULL, 2, '2018-08-09', '2018-07-24', '2004-04-24', '2018-08-11 21:38:50', '2018-08-12 06:42:55'),
(73, NULL, 'Nobita', 'Doremon', 'English', '01688587941', 'Xuka', 'Ielts 6.5', '1', 'English -B', NULL, 2, '2018-08-12', NULL, '2018-08-07', '2018-08-12 06:24:09', '2018-08-12 06:42:19'),
(76, NULL, 'Vũ', 'Vũ Văn Kiệt', 'Ielts 6.5', '01688587941', 'Vũ', 'Ielts 6.5', '1', 'English -B', NULL, 2, '2018-08-12', NULL, '2018-08-07', '2018-08-12 06:43:49', '2018-08-12 06:44:03'),
(89, NULL, 'Vũ Tùng Quân', 'Vũ Văn Kiệt', 'Ielts 6.5', '01688587941', 'Vũ', 'Ielts 6.5', NULL, NULL, 1, 5, '2018-10-30', '2018-10-30', NULL, '2018-10-30 06:25:20', '2018-10-30 06:25:32'),
(90, NULL, 'Vũ Tùng Quân', 'Vũ Văn Kiệt', 'Ielts 6.5', 'đâsd', 'dsadsa', 'Ielts 6.5', NULL, NULL, 0, 5, '2018-10-30', '2018-10-30', '2018-10-12', '2018-10-30 06:26:00', '2018-10-30 06:26:00'),
(91, NULL, 'Vũ Tùng Quân', 'Vũ Văn Kiệt', '6 tháng', '01688587941', 'Vũ', 'Ielts 6.5', '1', NULL, NULL, 1, NULL, '2018-10-30', '2018-10-17', '2018-10-30 06:27:16', '2018-10-30 06:27:16');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `alias` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1.Register 2.Confirm 3.Unregister',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_access_at` datetime DEFAULT NULL,
  `remember_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_token_expired` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` bigint(11) DEFAULT NULL,
  `updated_by` bigint(11) DEFAULT NULL,
  `deleted_by` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `alias`, `first_name`, `last_name`, `full_name`, `email`, `password`, `status`, `photo`, `phone_number`, `address`, `description`, `last_access_at`, `remember_token`, `reset_password_token`, `reset_password_token_expired`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'f1ce153b5ff07ffbcc03278383b9efff21ecb2cc', 'Pham', 'Tam', 'Pham Tam', 'phamtam3193@gmail.com', '$2y$10$1ACB9rEmjxg/Efd6hfXqG.sK8KYtisnznOdjP72ddDUIkQnLIrMbC', 1, NULL, '0962493756', NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-28 18:23:41', '2017-10-28 18:23:43', NULL, 1, 1, NULL),
(2, '021e464835503f111b36653d62a0c23f14d83902', 'Lenh Ho', 'Xung', 'Lenh Ho Xung', 'lenhhoxung3193@gmail.com', '$2y$10$1ACB9rEmjxg/Efd6hfXqG.sK8KYtisnznOdjP72ddDUIkQnLIrMbC', 1, NULL, '0962584368', 'Ninh Giang-Hai Dương', NULL, NULL, NULL, NULL, NULL, '2017-10-28 18:24:46', '2017-10-28 18:24:47', NULL, 2, 2, NULL);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `users` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
	SET NEW.`alias`=SHA1(UUID());
    END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salarys`
--
ALTER TABLE `salarys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salarys`
--
ALTER TABLE `salarys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
