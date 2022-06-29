-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 02:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `barang_id` varchar(15) NOT NULL,
  `barang_nama` varchar(150) DEFAULT NULL,
  `barang_satuan` varchar(30) DEFAULT NULL,
  `barang_harpok` double DEFAULT NULL,
  `barang_harjul` double DEFAULT NULL,
  `barang_harjul_grosir` double DEFAULT NULL,
  `barang_stok` int(11) DEFAULT 0,
  `barang_min_stok` int(11) DEFAULT 0,
  `barang_tgl_input` timestamp NULL DEFAULT current_timestamp(),
  `barang_tgl_last_update` datetime DEFAULT NULL,
  `barang_kategori_id` int(11) DEFAULT NULL,
  `barang_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`barang_id`, `barang_nama`, `barang_satuan`, `barang_harpok`, `barang_harjul`, `barang_harjul_grosir`, `barang_stok`, `barang_min_stok`, `barang_tgl_input`, `barang_tgl_last_update`, `barang_kategori_id`, `barang_user_id`) VALUES
('13232342', 'bbbbb', 'Unit', 1000, 1100, 1050, 100, 5, '2022-06-09 04:20:42', '2022-06-28 13:03:21', 44, 1),
('8851028002192', 'v-soy 200ml', 'PCS', 6900, 7500, 7000, 23, 1, '2022-05-13 04:06:48', '2022-05-26 22:08:42', 44, 1),
('8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 6900, 7500, 7000, 138, 1, '2022-05-13 07:09:17', '2022-05-26 22:08:06', 62, 1),
('8993159763433', 'club 220 ml', 'Unit', 1000, 1500, 1100, 162, 1, '2022-05-14 04:43:19', '2022-05-26 22:08:30', 62, 1),
('8993175531702', 'Ship 500', 'Unit', 400, 440, 420, 475, 1, '2022-05-18 07:09:54', '2022-06-09 11:03:24', 58, 1),
('8998989110501', 'surya 50', 'Kaleng', 120000, 132000, 126000, 30, 5, '2022-06-14 07:58:58', '2022-06-14 15:02:25', 60, 1),
('8999999001124', 'LIFEBUOY BW MILDCARE 250 ML', 'PCS', 2000, 2200, 2100, 98, 5, '2022-05-26 15:11:58', NULL, 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beli`
--

CREATE TABLE `tbl_beli` (
  `beli_nofak` varchar(15) DEFAULT NULL,
  `beli_tanggal` date DEFAULT NULL,
  `beli_suplier_id` int(11) DEFAULT NULL,
  `beli_user_id` int(11) DEFAULT NULL,
  `beli_kode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_beli`
--

INSERT INTO `tbl_beli` (`beli_nofak`, `beli_tanggal`, `beli_suplier_id`, `beli_user_id`, `beli_kode`) VALUES
('BL280622000001', '2022-06-28', 15, 1, 'BL280622000001'),
('BL280622000002', '2022-06-28', 14, 1, 'BL280622000002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_beli`
--

CREATE TABLE `tbl_detail_beli` (
  `d_beli_id` int(11) NOT NULL,
  `d_beli_nofak` varchar(15) DEFAULT NULL,
  `d_beli_barang_id` varchar(15) DEFAULT NULL,
  `d_beli_harga` double DEFAULT NULL,
  `d_beli_jumlah` int(11) DEFAULT NULL,
  `d_beli_total` double DEFAULT NULL,
  `d_beli_kode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_beli`
--

INSERT INTO `tbl_detail_beli` (`d_beli_id`, `d_beli_nofak`, `d_beli_barang_id`, `d_beli_harga`, `d_beli_jumlah`, `d_beli_total`, `d_beli_kode`) VALUES
(5, 'BL280622000001', '8886008101053', 6900, 12, 82800, 'BL280622000001'),
(6, 'BL280622000002', '8886008101053', 6900, 12, 82800, 'BL280622000002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_jual`
--

CREATE TABLE `tbl_detail_jual` (
  `d_jual_id` int(11) NOT NULL,
  `d_jual_nofak` varchar(15) DEFAULT NULL,
  `d_jual_barang_id` varchar(15) DEFAULT NULL,
  `d_jual_barang_nama` varchar(150) DEFAULT NULL,
  `d_jual_barang_satuan` varchar(30) DEFAULT NULL,
  `d_jual_barang_harpok` double DEFAULT NULL,
  `d_jual_barang_harjul` double DEFAULT NULL,
  `d_jual_qty` int(11) DEFAULT NULL,
  `d_jual_diskon` double DEFAULT NULL,
  `d_jual_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_jual`
--

INSERT INTO `tbl_detail_jual` (`d_jual_id`, `d_jual_nofak`, `d_jual_barang_id`, `d_jual_barang_nama`, `d_jual_barang_satuan`, `d_jual_barang_harpok`, `d_jual_barang_harjul`, `d_jual_qty`, `d_jual_diskon`, `d_jual_total`) VALUES
(85, '280622000001', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 6900, 7500, 12, 0, 90000),
(86, '280622000002', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 6900, 7500, 2, 500, 14000),
(87, '280622000003', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 6900, 7500, 1, 0, 7500),
(88, '280622000004', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 6900, 7500, 3, 0, 22500),
(89, '280622000005', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 6900, 7000, 3, 100, 20700);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jual`
--

CREATE TABLE `tbl_jual` (
  `jual_nofak` varchar(15) NOT NULL,
  `jual_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `jual_total` double DEFAULT NULL,
  `jual_jml_uang` double DEFAULT NULL,
  `jual_kembalian` double DEFAULT NULL,
  `jual_user_id` int(11) DEFAULT NULL,
  `jual_keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jual`
--

INSERT INTO `tbl_jual` (`jual_nofak`, `jual_tanggal`, `jual_total`, `jual_jml_uang`, `jual_kembalian`, `jual_user_id`, `jual_keterangan`) VALUES
('280622000001', '2022-06-28 05:14:11', 90000, 90000, 0, 1, 'eceran'),
('280622000002', '2022-06-28 05:15:02', 14000, 15000, 1000, 1, 'eceran'),
('280622000003', '2022-06-28 05:19:17', 7500, 7500, 0, 13, 'eceran'),
('280622000004', '2022-06-28 06:01:11', 22500, 23000, 500, 13, 'eceran'),
('280622000005', '2022-06-28 06:02:20', 20700, 22000, 1300, 13, 'grosir');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kode_kategori` varchar(11) NOT NULL,
  `kategori_nama` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kode_kategori`, `kategori_nama`) VALUES
(43, 'KT0043', 'sun'),
(44, 'KT0044', 'susu'),
(45, 'KT0045', 'Mie'),
(46, 'KT0046', 'Minuman'),
(47, 'KT0047', 'Roti'),
(48, 'KT0048', 'Shampoo'),
(49, 'KT0049', 'Sabun mandi'),
(50, 'KT0050', 'sabun cuci muka'),
(51, 'KT0051', 'Sabun cuci piring'),
(52, 'KT0052', 'bedak'),
(53, 'KT0053', 'Hand Body'),
(54, 'KT0054', 'Es Krim'),
(55, 'KT0055', 'Kapas'),
(56, 'KT0056', 'Tissu'),
(57, 'KT0057', 'Royco'),
(58, 'KT0058', 'Makanan Ringan'),
(59, 'KT0059', 'Frozen Food'),
(60, 'KT0060', 'Obat'),
(61, 'KT0061', 'Sarden'),
(62, 'KT0062', 'Mineral'),
(63, 'KT0063', 'Gula'),
(64, 'KT0064', 'Minyak'),
(65, 'KT0065', 'rokok'),
(66, 'KT0066', 'roti');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_retur`
--

CREATE TABLE `tbl_retur` (
  `retur_id` int(11) NOT NULL,
  `retur_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `retur_barang_id` varchar(15) DEFAULT NULL,
  `retur_barang_nama` varchar(150) DEFAULT NULL,
  `retur_barang_satuan` varchar(30) DEFAULT NULL,
  `retur_harjul` double DEFAULT NULL,
  `retur_qty` int(11) DEFAULT NULL,
  `retur_subtotal` double DEFAULT NULL,
  `retur_keterangan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_retur`
--

INSERT INTO `tbl_retur` (`retur_id`, `retur_tanggal`, `retur_barang_id`, `retur_barang_nama`, `retur_barang_satuan`, `retur_harjul`, `retur_qty`, `retur_subtotal`, `retur_keterangan`) VALUES
(1, '2022-05-25 08:12:29', '8993159763433', 'club 220 ml', 'Unit', 1100, 22, NULL, 'RUSAK'),
(2, '2022-05-25 08:12:53', '8993159763433', 'club 220 ml', 'Unit', 1100, 8, NULL, 'RUSAK'),
(3, '2022-05-25 08:13:41', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 7000, 2, NULL, 'RUSAK'),
(4, '2022-05-25 08:14:54', '8993175531702', 'Ship 500', 'Unit', 400, 1, NULL, 'Rusak'),
(5, '2022-05-25 08:15:59', '8993159763433', 'club 220 ml', 'Unit', 1100, 3, NULL, 'RUSAK'),
(6, '2022-05-25 08:20:09', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 7000, 20, NULL, 'RUSAK'),
(7, '2022-05-25 08:20:38', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 7000, 20, NULL, 'kedaluarsa'),
(8, '2022-05-27 03:34:23', '8993175531702', 'Ship 500', 'Unit', 400, 1, NULL, 'RUSAK'),
(9, '2022-06-09 03:38:43', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 7000, 1, NULL, 'Rusak'),
(11, '2022-06-14 08:07:05', '8998989110501', 'surya 50', 'Kaleng', 126000, 1, NULL, 'penyet'),
(12, '2022-06-28 04:02:58', '8851028002192', 'v-soy 200ml', 'PCS', 7000, 1, NULL, '11'),
(13, '2022-06-28 05:12:29', '8886008101053', 'aqua air mineral botol 600 ml', 'Unit', 7000, 1, NULL, 'rusak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suplier`
--

CREATE TABLE `tbl_suplier` (
  `suplier_id` int(11) NOT NULL,
  `kode_suplier` varchar(11) NOT NULL,
  `suplier_nama` varchar(35) DEFAULT NULL,
  `suplier_alamat` varchar(60) DEFAULT NULL,
  `suplier_notelp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_suplier`
--

INSERT INTO `tbl_suplier` (`suplier_id`, `kode_suplier`, `suplier_nama`, `suplier_alamat`, `suplier_notelp`) VALUES
(6, 'SP0006', 'PT. Sidomuncul', 'JL. Cendana manis no. 6', '085464645464'),
(7, 'SP0007', 'Anggi Jaya', 'Pondok Indak Blok M', '089564711223'),
(8, 'SP0008', 'PT. TriJayakusuma', 'Jl. mangkujaya Caruban', '081244553322'),
(9, 'SP0009', 'PT. Kartuna Jaya', 'JL. Kayu manis no. 18', '081445523564'),
(12, 'SP0005', 'PT. Indo', 'Madiun', '085455466455546'),
(13, 'SP0010', 'rizky', 'madiun', '085464645464535'),
(14, 'SP0011', 'ali', 'madiun', '085464645464535'),
(15, 'SP0012', 'Asep Yulianto', 'nglanduk', '081234565432');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(35) DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  `user_password` varchar(35) DEFAULT NULL,
  `user_level` varchar(2) DEFAULT NULL,
  `user_status` varchar(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_level`, `user_status`) VALUES
(1, 'admin', 'admin', '25d55ad283aa400af464c76d713c07ad', '1', '1'),
(3, 'rizky', 'rizky', '49d8712dd6ac9c3745d53cd4be48284c', '2', '1'),
(4, 'pemilik', 'pemilik', '25d55ad283aa400af464c76d713c07ad', '3', '1'),
(5, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '1'),
(6, 'kasir', 'kasir', 'c7911af3adbd12a035b289556d96470a', '2', '1'),
(7, 'aefef', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '0'),
(8, 'sdas', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '0'),
(9, 'fitri', 'fitri', '25d55ad283aa400af464c76d713c07ad', '2', '1'),
(11, 'alisa', 'alisa', '25d55ad283aa400af464c76d713c07ad', '2', '1'),
(12, 'windo', 'windo', '25d55ad283aa400af464c76d713c07ad', '1', '1'),
(13, 'Mamad', 'mamad', '25d55ad283aa400af464c76d713c07ad', '2', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `barang_user_id` (`barang_user_id`),
  ADD KEY `barang_kategori_id` (`barang_kategori_id`);

--
-- Indexes for table `tbl_beli`
--
ALTER TABLE `tbl_beli`
  ADD PRIMARY KEY (`beli_kode`),
  ADD KEY `beli_user_id` (`beli_user_id`),
  ADD KEY `beli_suplier_id` (`beli_suplier_id`),
  ADD KEY `beli_id` (`beli_kode`);

--
-- Indexes for table `tbl_detail_beli`
--
ALTER TABLE `tbl_detail_beli`
  ADD PRIMARY KEY (`d_beli_id`),
  ADD KEY `d_beli_barang_id` (`d_beli_barang_id`),
  ADD KEY `d_beli_nofak` (`d_beli_nofak`),
  ADD KEY `d_beli_kode` (`d_beli_kode`);

--
-- Indexes for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  ADD PRIMARY KEY (`d_jual_id`),
  ADD KEY `d_jual_barang_id` (`d_jual_barang_id`),
  ADD KEY `d_jual_nofak` (`d_jual_nofak`);

--
-- Indexes for table `tbl_jual`
--
ALTER TABLE `tbl_jual`
  ADD PRIMARY KEY (`jual_nofak`),
  ADD KEY `jual_user_id` (`jual_user_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_retur`
--
ALTER TABLE `tbl_retur`
  ADD PRIMARY KEY (`retur_id`);

--
-- Indexes for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_beli`
--
ALTER TABLE `tbl_detail_beli`
  MODIFY `d_beli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  MODIFY `d_jual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_retur`
--
ALTER TABLE `tbl_retur`
  MODIFY `retur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`barang_user_id`) REFERENCES `tbl_user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_barang_ibfk_2` FOREIGN KEY (`barang_kategori_id`) REFERENCES `tbl_kategori` (`kategori_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_beli`
--
ALTER TABLE `tbl_beli`
  ADD CONSTRAINT `tbl_beli_ibfk_1` FOREIGN KEY (`beli_user_id`) REFERENCES `tbl_user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_beli_ibfk_2` FOREIGN KEY (`beli_suplier_id`) REFERENCES `tbl_suplier` (`suplier_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail_beli`
--
ALTER TABLE `tbl_detail_beli`
  ADD CONSTRAINT `tbl_detail_beli_ibfk_1` FOREIGN KEY (`d_beli_barang_id`) REFERENCES `tbl_barang` (`barang_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_detail_beli_ibfk_2` FOREIGN KEY (`d_beli_kode`) REFERENCES `tbl_beli` (`beli_kode`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  ADD CONSTRAINT `tbl_detail_jual_ibfk_1` FOREIGN KEY (`d_jual_barang_id`) REFERENCES `tbl_barang` (`barang_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_detail_jual_ibfk_2` FOREIGN KEY (`d_jual_nofak`) REFERENCES `tbl_jual` (`jual_nofak`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_jual`
--
ALTER TABLE `tbl_jual`
  ADD CONSTRAINT `tbl_jual_ibfk_1` FOREIGN KEY (`jual_user_id`) REFERENCES `tbl_user` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
