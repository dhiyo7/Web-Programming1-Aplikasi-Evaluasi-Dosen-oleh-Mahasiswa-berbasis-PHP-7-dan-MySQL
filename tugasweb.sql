-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2018 at 09:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `prodi`, `kelas`, `deleted`) VALUES
(1, 'Mark Zuckeberg', 'Teknik Informatika', '4C , 4B , 4A', 0),
(2, 'LeBron James King', 'Teknik Mesin', '4C, 4B', 0),
(3, 'Steve Jobs', 'Teknik Informatika', '6C , 6B , 4A', 0),
(4, 'Olivia', 'Kebidanan', '2A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `saran` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `id_user`, `id_dosen`, `nilai`, `saran`, `deleted`) VALUES
(1, 1, 3, 8.9, 'Terlalu Pelan saat menyampaikan', 0),
(2, 2, 3, 9, 'Keep it work', 0),
(3, 2, 4, 9, 'yup', 0),
(4, 6, 1, 9.5, 'Keep going on', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `log` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `log`, `date`) VALUES
(1, 'Admin Login', '2018-06-04 19:22:22'),
(2, 'Admin Logout', '2018-06-04 19:27:07'),
(3, 'Admin Login', '2018-06-04 19:27:18'),
(4, 'Admin Logout', '2018-06-04 19:28:53'),
(5, '15090070 Login', '2018-06-04 19:29:52'),
(6, '15090070 Logout', '2018-06-04 19:32:13'),
(7, '16090088 Login', '2018-06-04 19:33:16'),
(8, '16090088 memberikan penilaian terhadap dosen yang ber id 1', '2018-06-04 19:33:52'),
(9, '16090088 Logout', '2018-06-04 19:34:09'),
(10, 'Admin Login', '2018-06-04 19:34:16'),
(11, 'Admin menambahkan user dengan nim16090003dari prodi Teknik Informatika', '2018-06-04 19:37:29'),
(12, 'Admin menambahkan user dengan nim 16090077 dari prodi Teknik Informatika', '2018-06-04 19:38:34'),
(13, 'Admin menghapus user dengan id9', '2018-06-04 19:41:08'),
(14, 'Admin Logout', '2018-06-04 19:44:58'),
(15, '16090077 Login', '2018-06-04 19:47:04'),
(16, '16090077 Logout', '2018-06-04 19:47:06'),
(17, '16090077 Login', '2018-06-04 19:48:03'),
(18, '16090077 Logout', '2018-06-04 19:48:08'),
(19, 'Admin Login', '2018-06-04 19:50:24'),
(20, 'Admin Logout', '2018-06-04 19:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(10) NOT NULL,
  `pertanyaan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`) VALUES
(1, 'Methode pembelajaran bervariasi ?'),
(2, 'Apakah Dosen Datang Tepat Waktu ??'),
(3, 'Karyawan mampu menanggapi keluhan wajib pajak'),
(4, 'Karyawan berada ditempat saat dibutuhkan wajib pajak'),
(5, 'Pengetahuan dan kecakapan karyawan dalam menjalankan tugas'),
(6, 'Ketelitian karyawan dalam menjalankan tugas'),
(7, 'Pelayanan tidak membedakan status sosial wajib pajak'),
(8, 'Kebersihan dan kenyamanan kantor'),
(9, 'sistem antrian yang teratur tampa membedakan status tiap nasabah'),
(10, 'Jasa yang diberikan karyawan sudah tercapai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `level` int(1) NOT NULL DEFAULT '0',
  `deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `prodi`, `password`, `kelas`, `status`, `level`, `deleted`) VALUES
(1, '15090070', 'Elektro', '15090070', '6B', 0, 0, 0),
(2, '15090079', 'Teknik Informatika', '15090079', '4C', 0, 0, 0),
(4, '16090070', 'Farmasi', '16090070', '6C', 0, 0, 0),
(5, 'admin', 'admin', 'admin', 'ad', 0, 1, 0),
(6, '16090088', 'Elektro', '16090088', '4A', 0, 0, 1),
(7, '14090089', 'Teknik Informatika', '14090089', '1E', 0, 0, 0),
(8, '111', 'Teknik Informatika', '111', '6C', 0, 0, 0),
(9, '16090003', 'Teknik Informatika', '16090003', '4A', 0, 0, 1),
(10, '16090077', 'Teknik Informatika', '16090077', '4C', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
