-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 04:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcas_mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `label` text NOT NULL,
  `url` text NOT NULL,
  `icon` text NOT NULL,
  `urutan` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `label`, `url`, `icon`, `urutan`, `parent_id`, `status`) VALUES
(1, 'Dashboard', 'Auth/dashboard', '                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">                                 <rect x=\"2\" y=\"2\" width=\"9\" height=\"9\" rx=\"2\" fill=\"currentColor\" />                                 <rect opacity=\"0.3\" x=\"13\" y=\"2\" width=\"9\" height=\"9\" rx=\"2\" fill=\"currentColor\" />                                 <rect opacity=\"0.3\" x=\"13\" y=\"13\" width=\"9\" height=\"9\" rx=\"2\" fill=\"currentColor\" />                                 <rect opacity=\"0.3\" x=\"2\" y=\"13\" width=\"9\" height=\"9\" rx=\"2\" fill=\"currentColor\" />                             </svg>', 1, 0, 'active'),
(2, 'Planning', '', '                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">                                 <path d=\"M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z\" fill=\"currentColor\" />                                 <rect opacity=\"0.3\" x=\"8\" y=\"3\" width=\"8\" height=\"8\" rx=\"4\" fill=\"currentColor\" />                             </svg>', 2, 0, 'active'),
(3, 'Schedule', 'formSchedule', '<span class=\"bullet bullet-dot\"></span>', 3, 2, 'active'),
(4, 'APM', 'formAPM', '<span class=\"bullet bullet-dot\"></span>', 4, 2, 'active'),
(5, 'Surat Tugas', 'formSuratTugas', '<span class=\"bullet bullet-dot\"></span>', 5, 2, 'active'),
(6, 'Fieldwork', '', '                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">                                 <path d=\"M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z\" fill=\"currentColor\" />                                 <path d=\"M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z\" fill=\"currentColor\" />                                 <path opacity=\"0.3\" d=\"M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z\" fill=\"currentColor\" />                             </svg>', 6, 0, 'active'),
(7, 'Pemeriksaan', 'formPemeriksaan', '<span class=\"bullet bullet-dot\"></span>', 7, 6, 'active'),
(8, 'Dokumentasi', 'formDokumentasi', '<span class=\"bullet bullet-dot\"></span>', 8, 6, 'active'),
(9, 'Konfirmasi', 'formKonfirmasi', '<span class=\"bullet bullet-dot\"></span>', 9, 6, 'active'),
(10, 'Anomali Data', 'formAnomali', '<span class=\"bullet bullet-dot\"></span>', 10, 6, 'active'),
(11, 'Report', '', '                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">                                 <path opacity=\"0.3\" d=\"M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z\" fill=\"currentColor\" />                                 <path d=\"M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z\" fill=\"currentColor\" />                                 <path d=\"M10.3629 14.0084L8.92108 12.6429C8.57518 12.3153 8.03352 12.3153 7.68761 12.6429C7.31405 12.9967 7.31405 13.5915 7.68761 13.9453L10.2254 16.3488C10.6111 16.714 11.215 16.714 11.6007 16.3488L16.3124 11.8865C16.6859 11.5327 16.6859 10.9379 16.3124 10.5841C15.9665 10.2565 15.4248 10.2565 15.0789 10.5841L11.4631 14.0084C11.1546 14.3006 10.6715 14.3006 10.3629 14.0084Z\" fill=\"currentColor\" />                             </svg>', 11, 0, 'active'),
(12, 'Form LHA', 'formLHA', '<span class=\"bullet bullet-dot\"></span>', 12, 11, 'active'),
(13, 'Laporan Hasil Audit', '#', '<span class=\"bullet bullet-dot\"></span>', 13, 11, 'active'),
(14, 'Follow Up', '', '                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">                                 <path opacity=\"0.3\" d=\"M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z\" fill=\"currentColor\" />                                 <path d=\"M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z\" fill=\"currentColor\" />                             </svg>', 14, 0, 'active'),
(15, 'Form LTLHA', '#', '<span class=\"bullet bullet-dot\"></span>', 15, 14, 'active'),
(16, 'Data LTLHA', 'DataLTLHA', '<span class=\"bullet bullet-dot\"></span>', 16, 14, 'active'),
(17, 'User & Role', '', '                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">                                 <path opacity=\"0.3\" d=\"M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z\" fill=\"currentColor\" />                                 <path d=\"M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z\" fill=\"currentColor\" />                             </svg>', 17, 0, 'active'),
(18, 'User Level', 'UserLevel', '<span class=\"bullet bullet-dot\"></span>', 18, 17, 'active'),
(19, 'User Management', 'User', '<span class=\"bullet bullet-dot\"></span>', 19, 17, 'active'),
(20, 'User Role', 'UserRole', '<span class=\"bullet bullet-dot\"></span>', 20, 17, 'active'),
(21, '', '', '', 0, 0, ''),
(22, '', '', '', 0, 0, ''),
(23, '', '', '', 0, 0, ''),
(24, '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `token` text NOT NULL,
  `password` text NOT NULL,
  `date_login` date NOT NULL DEFAULT current_timestamp(),
  `login_by` text NOT NULL,
  `pass_desc` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `email` text NOT NULL,
  `level_user` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `token`, `password`, `date_login`, `login_by`, `pass_desc`, `date_created`, `email`, `level_user`, `status`) VALUES
(1, 'admin', '$2y$10$Xbk8V9cEWbq6SkCqdetaJeH30n1VoVWJ.J7R/Tc5Raax6Z.V.b2Um', '21232f297a57a5a743894a0e4a801fc3', '2022-10-29', 'AMS', '', '2022-10-27', 'admin@email.com', 'kadiv', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id` int(11) NOT NULL,
  `level_user` text NOT NULL,
  `label` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id`, `level_user`, `label`, `status`) VALUES
(1, 'kadiv', 'Kepala Divisi', 'active'),
(3, 'bb', 'bb-edit', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `user_level_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `is_view` int(11) NOT NULL DEFAULT 0,
  `is_create` int(11) NOT NULL DEFAULT 0,
  `is_edit` int(11) NOT NULL DEFAULT 0,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `is_print` int(11) NOT NULL DEFAULT 0,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `user_level_id`, `menu_id`, `is_view`, `is_create`, `is_edit`, `is_delete`, `is_print`, `status`) VALUES
(70, 1, 1, 1, 1, 1, 1, 1, ''),
(71, 1, 2, 1, 1, 1, 1, 1, ''),
(72, 1, 3, 1, 1, 1, 1, 1, ''),
(73, 1, 4, 1, 1, 1, 1, 1, ''),
(74, 1, 5, 1, 1, 1, 1, 1, ''),
(75, 1, 6, 1, 1, 1, 1, 1, ''),
(76, 1, 7, 1, 1, 1, 1, 1, ''),
(77, 1, 8, 1, 1, 1, 1, 1, ''),
(78, 1, 9, 1, 1, 1, 1, 1, ''),
(79, 1, 10, 1, 1, 1, 1, 1, ''),
(80, 1, 11, 1, 1, 1, 1, 1, ''),
(81, 1, 12, 1, 1, 1, 1, 1, ''),
(82, 1, 13, 1, 1, 1, 1, 1, ''),
(83, 1, 14, 1, 1, 1, 1, 1, ''),
(84, 1, 15, 1, 1, 1, 1, 1, ''),
(85, 1, 16, 1, 1, 1, 1, 1, ''),
(86, 1, 17, 1, 1, 1, 1, 1, ''),
(87, 1, 18, 1, 1, 1, 1, 1, ''),
(88, 1, 19, 1, 1, 1, 1, 1, ''),
(89, 1, 20, 1, 1, 1, 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
