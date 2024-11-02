-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 12:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpro_cuti02`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah_cuti` varchar(10) NOT NULL,
  `jenis_cuti` varchar(50) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `status` enum('Process','Approve','Reject') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `nik`, `nama`, `tanggal_cuti`, `tanggal_masuk`, `jumlah_cuti`, `jenis_cuti`, `keperluan`, `periode`, `status`) VALUES
(1113678, '14045', 'irfan agustian', '2020-11-23', '2020-11-24', '1', 'cuti menikah', 'menikah', '2020', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_dep` int(11) NOT NULL,
  `departemen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_dep`, `departemen`) VALUES
(1345, 'HRD'),
(1348, 'ACOUNTING'),
(1534, 'MARKETING'),
(1709, 'PPIC'),
(1805, 'GA'),
(1937, 'PRODUKSI');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jab` int(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `jabatan`) VALUES
(1341, 'Staff'),
(1705, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cuti`
--

CREATE TABLE `jenis_cuti` (
  `id` int(10) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_cuti`
--

INSERT INTO `jenis_cuti` (`id`, `jenis`) VALUES
(125, 'cuti hamil'),
(510, 'Cuti Haji'),
(1316, 'Cuti Tahunan'),
(1363, 'cuti menikah');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `masuk_kerja` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `sisa_cuti` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nik`, `masuk_kerja`, `nama`, `jenkel`, `email`, `jabatan`, `departemen`, `alamat`, `no_hp`, `sisa_cuti`, `password`) VALUES
(1272101, '10001', '2019-01-01', 'Pegawai Produksi Baik', 'Laki - Laki', 'abdulm@gmail.com', 'Operator', 'PRODUKSI', 'Tangerang', '02139123', '12', '123456'),
(1541657, '14045', '2019-11-12', 'Pegawai Produksi', 'Laki - Laki', 'user@gmail.com', 'Operator', 'PRODUKSI', 'bojong', '089988', '10', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `my_chart_data`
--

CREATE TABLE `my_chart_data` (
  `category` date NOT NULL,
  `value1` int(11) NOT NULL,
  `value2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_chart_data`
--

INSERT INTO `my_chart_data` (`category`, `value1`, `value2`) VALUES
('2013-08-24', 417, 127),
('2013-08-25', 417, 356),
('2013-08-26', 531, 585),
('2013-08-27', 333, 910),
('2013-08-28', 552, 30),
('2013-08-29', 492, 371),
('2013-08-30', 379, 781),
('2013-08-31', 767, 494),
('2013-09-01', 169, 364),
('2013-09-02', 314, 476),
('2013-09-03', 437, 759);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `level`, `gambar`) VALUES
(2, 'admin', 'admin', 'admin', 'admin', 'gambar_admin/admin.jpg'),
(3, 'manager', 'manager', 'Manager Ku', 'manager', 'gambar_admin/admin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indexes for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
