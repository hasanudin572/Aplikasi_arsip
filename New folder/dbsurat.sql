-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2020 pada 15.41
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

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
-- Struktur dari tabel `konsep`
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
-- Struktur dari tabel `konsep_attachment`
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
-- Struktur dari tabel `surat`
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
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`ID`, `Nomor_surat`, `Dari`, `Kepada`, `Judul_surat`, `Isi_surat`, `Tanggal_surat`, `Parent_id`, `Tanggal_kirim`, `Tanggal_baca`, `Keterangan`, `CRE_DATE`, `CRE_BY`, `MOD_DATE`, `MOD_BY`) VALUES
(1, 'jkt', 5, 6, 'okdhd deviasi', '<p>dengan hormat</p>', '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, NULL, '2020-11-17 13:56:45', NULL, NULL, NULL),
(2, 'htstst', 6, 5, 'afdsg', '<p>asdfgh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>sdghfn</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>bdxvj</p>', '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, NULL, '2020-11-17 14:16:54', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_attachment`
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
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID` bigint(20) NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telepon` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `CRE_DATE` timestamp NULL DEFAULT current_timestamp(),
  `CRE_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOD_DATE` timestamp NULL DEFAULT NULL,
  `MOD_BY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID`, `Nama`, `Email`, `Password`, `Alamat`, `Telepon`, `Foto`, `Role`, `CRE_DATE`, `CRE_BY`, `MOD_DATE`, `MOD_BY`) VALUES
(1, 'admin258522', 'admin@gmail.com', 'admin123456', 'jln admin 2 ', '085716547967', NULL, 'admin', '2020-11-03 10:30:14', 'admin', '0000-00-00 00:00:00', 'admin'),
(5, 'hasan', 'hasanudin@gmail.com', '123456', 'bks', '08000000000', '', 'user', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(6, 'kriss', 'kriss@gmail.com', '123456', 'jkt', '080000000', '', 'user', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `konsep`
--
ALTER TABLE `konsep`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `konsep_attachment`
--
ALTER TABLE `konsep_attachment`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `surat_attachment`
--
ALTER TABLE `surat_attachment`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konsep`
--
ALTER TABLE `konsep`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsep_attachment`
--
ALTER TABLE `konsep_attachment`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_attachment`
--
ALTER TABLE `surat_attachment`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
