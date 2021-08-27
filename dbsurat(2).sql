-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 04:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsep`
--

CREATE TABLE `konsep` (
  `ID` bigint(20) NOT NULL,
  `Nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dari` bigint(20) DEFAULT NULL,
  `Kepada` bigint(20) DEFAULT NULL,
  `Judul_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Isi_surat` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tanggal_surat` date DEFAULT NULL,
  `Parent_id` bigint(20) DEFAULT NULL,
  `Tanggal_kirim` timestamp NULL DEFAULT NULL,
  `Tanggal_baca` timestamp NULL DEFAULT NULL,
  `Keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CRE_DATE` timestamp NULL DEFAULT current_timestamp(),
  `CRE_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOD_DATE` timestamp NULL DEFAULT NULL,
  `MOD_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konsep_attachment`
--

CREATE TABLE `konsep_attachment` (
  `ID` bigint(20) NOT NULL,
  `ID_konsep` bigint(20) NOT NULL,
  `Filepath` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Uploader` bigint(20) NOT NULL,
  `Keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CRE_DATE` timestamp NULL DEFAULT current_timestamp(),
  `CRE_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOD_DATE` timestamp NULL DEFAULT NULL,
  `MOD_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `ID` bigint(20) NOT NULL,
  `Nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dari` bigint(20) NOT NULL,
  `Kepada` bigint(20) NOT NULL,
  `Judul_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Isi_surat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_surat` date NOT NULL DEFAULT current_timestamp(),
  `Parent_id` bigint(20) DEFAULT NULL,
  `Tanggal_kirim` timestamp NULL DEFAULT current_timestamp(),
  `Tanggal_baca` timestamp NULL DEFAULT NULL,
  `Keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CRE_DATE` timestamp NULL DEFAULT current_timestamp(),
  `CRE_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOD_DATE` timestamp NULL DEFAULT NULL,
  `MOD_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`ID`, `Nomor_surat`, `Dari`, `Kepada`, `Judul_surat`, `Isi_surat`, `Tanggal_surat`, `Parent_id`, `Tanggal_kirim`, `Tanggal_baca`, `Keterangan`, `CRE_DATE`, `CRE_BY`, `MOD_DATE`, `MOD_BY`) VALUES
(1, 'JKRT/PT SDD/2020/11/15', 0, 0, 'pemberitahuan ', 'kepada yang terhormat HRD ', '0000-00-00', NULL, '2020-11-03 19:24:15', NULL, NULL, '2020-11-03 19:24:15', 'hasan', NULL, NULL),
(3, 'JKRT/01/PT SDD/2020/11/16', 18691, 18692, 'SURAT KUASA', 'BERSAMA INI KAMI SAMPAIKAN AGAR MOBIL DENGAN NOPOL 2018 AGAR SEGERA DI KEMBALIKAN KEPADA PEMILIKNYA.', '0000-00-00', NULL, '2020-11-03 20:27:12', NULL, 'HASAN', '2020-11-03 20:27:12', 'HASAN', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_attachment`
--

CREATE TABLE `surat_attachment` (
  `ID` bigint(20) NOT NULL,
  `ID_surat` bigint(20) NOT NULL,
  `Filepath` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Uploader` bigint(20) NOT NULL,
  `Keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CRE_DATE` timestamp NULL DEFAULT current_timestamp(),
  `CRE_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOD_DATE` timestamp NULL DEFAULT NULL,
  `MOD_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` bigint(20) NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telepon` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CRE_DATE` timestamp NULL DEFAULT current_timestamp(),
  `CRE_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOD_DATE` timestamp NULL DEFAULT NULL,
  `MOD_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Nama`, `Email`, `Password`, `Alamat`, `Telepon`, `Foto`, `CRE_DATE`, `CRE_BY`, `MOD_DATE`, `MOD_BY`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123456', 'jln admin 2 ', '085716547967', NULL, '2020-11-03 10:30:14', 'admin', '0000-00-00 00:00:00', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsep`
--
ALTER TABLE `konsep`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `konsep_attachment`
--
ALTER TABLE `konsep_attachment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `surat_attachment`
--
ALTER TABLE `surat_attachment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsep`
--
ALTER TABLE `konsep`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsep_attachment`
--
ALTER TABLE `konsep_attachment`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_attachment`
--
ALTER TABLE `surat_attachment`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
