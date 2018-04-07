-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 09:40 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surya`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `kodeAkun` varchar(5) NOT NULL,
  `namaAkun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `kodeAkun`, `namaAkun`) VALUES
(1, '1000', 'KAS'),
(2, '1100', 'BANK'),
(3, '1200', 'PIUTANG'),
(4, '1300', 'PERSEDIAAN'),
(5, '2000', 'AKTIVA'),
(6, '2100', 'PENY AK TETAP'),
(7, '3000', 'HUTANG'),
(8, '3100', 'HUTANG BANK KMK'),
(9, '4000', 'PENDAPATAN'),
(10, '5000', 'BIAYA-BIAYA');

-- --------------------------------------------------------

--
-- Table structure for table `subakun`
--

CREATE TABLE `subakun` (
  `idSubAkun` int(11) NOT NULL,
  `kodeAkun` varchar(5) NOT NULL,
  `kodeSubAkun` varchar(5) NOT NULL,
  `namaAkun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subakun`
--

INSERT INTO `subakun` (`idSubAkun`, `kodeAkun`, `kodeSubAkun`, `namaAkun`) VALUES
(1, '1000', '1001', ' KAS '),
(2, '1000', '1002', ' KAS KECIL '),
(3, '1100', '1101', ' BANK BCA '),
(4, '1100', '1102', ' BANK BCA A/N SWANDI '),
(5, '1100', '1103', ' BANK BCA A/N VIVI MARIANTY '),
(6, '1100', '1104', ' BANK MANDIRI '),
(7, '1100', '1105', ' BANK BNI '),
(8, '1100', '1106', ' BANK CIMB '),
(9, '1100', '1107', ' BANK BRI '),
(10, '1200', '1201', ' PIUTANG USAHA '),
(11, '1200', '1202', ' PIUTANG KARYAWAN '),
(12, '1300', '1301', ' PERSEDIAAN EMAS '),
(13, '1300', '1302', ' PERSEDIAAN PERAK '),
(14, '1300', '1303', ' PERSEDIAAN BERLIAN '),
(15, '1300', '1304', ' PERSEDIAAN KOTAK PERHIASAN '),
(16, '1300', '1305', ' PERSEDIAAN CZ & SWAROVSKI '),
(17, '1300', '1306', '  PERS. ALAT PERTUKANGAN '),
(18, '1300', '1307', ' PERSEDIAAN CHEMICAL '),
(19, '2000', '2001', ' GEDUNG '),
(20, '2000', '2002', ' KENDARAAN '),
(21, '2000', '2003', ' PERALATAN  '),
(22, '2000', '2004', ' MESIN PRODUKSI '),
(23, '2100', '2101', ' AK. PENY. GEDUNG '),
(24, '2100', '2102', ' AK. PENY. KENDARAAN '),
(25, '2100', '2103', ' AK. PENY. PERALATAN '),
(26, '2100', '2104', ' AK. PENY. MESIN PRODUKSI '),
(27, '3000', '3001', ' HUTANG USAHA '),
(28, '3100', '3101', ' HUTANG KMK BNI '),
(29, '3100', '3102', ' HUTANG KMK DANAMON '),
(30, '3100', '3103', ' HUTANG KMK PROPERTY (8JT) '),
(31, '3100', '3104', ' HUTANG KMK PROPERTY (4.5JT) '),
(32, '3100', '3105', ' HUTANG KMK MESIN SOLIDCAPE 1 '),
(33, '3100', '3106', ' HUTANG KMK MESIN SOLIDCAPE 2 '),
(34, '3100', '3107', ' HUTANG KMK MESIN REVO '),
(35, '3100', '3108', ' HUTANG KMK MESIN LASER '),
(36, '3100', '3109', ' HUTANG KMK RENOVASI '),
(37, '4000', '4001', ' PENJUALAN DIVISI TEMPAHAN '),
(38, '4000', '4002', ' PENJUALAN DIVISI PRODUKSI '),
(39, '4000', '4003', ' PENJUALAN DIVISI JASA '),
(40, '4000', '4004', ' PENJUALAN DIVISI ALAT PERTUKANGAN '),
(41, '4000', '4101', ' PENDAPATAN BUNGA BANK '),
(42, '4000', '4102', ' PENDAPATAN LAINNYA '),
(43, '5000', '5001', ' BIAYA OPERASIONAL '),
(44, '5000', '5002', ' BIAYA SERVICE & REPARASI '),
(45, '5000', '5003', ' BIAYA EKSPEDISI '),
(46, '5000', '5004', ' BIAYA KESEHATAN '),
(47, '5000', '5005', ' BIAYA KEBERSIHAN '),
(48, '5000', '5006', ' BIAYA KEAMANAN '),
(49, '5000', '5007', ' BIAYA ATK '),
(50, '5000', '5008', ' BIAYA LISTRIK '),
(51, '5000', '5009', ' BIAYA AIR '),
(52, '5000', '5010', ' BIAYA TELEPON '),
(53, '5000', '5011', ' BIAYA LANGGANAN KORAN '),
(54, '5000', '5012', ' BIAYA THR KARYAWAN '),
(55, '5000', '5013', ' BIAYA MAKAN LEMBUR KARYAWAN '),
(56, '5000', '5014', ' BIAYA GAJI OWNER '),
(57, '5000', '5015', ' BIAYA GAJI ADM & UMUM '),
(58, '5000', '5016', ' BIAYA MAKAN ADM & UMUM '),
(59, '5000', '5017', ' BIAYA RANTANGAN  '),
(60, '5000', '5018', ' BIAYA IKLAN '),
(61, '5000', '5019', ' BIAYA REDUKASI BISNIS '),
(62, '5000', '5020', ' BIAYA BUNGA ANGSURAN '),
(63, '5000', '5021', ' BIAYA GAS, OKSIGEN,BENSIN '),
(64, '5000', '5022', ' BIAYA LAIN-LAIN '),
(65, '5000', '5023', ' BIAYA ENTERTAINT '),
(66, '5000', '5024', ' BIAYA PELATIHAN & SEMINAR '),
(67, '5000', '5025', ' BIAYA PENYUSUTAN GEDUNG '),
(68, '5000', '5026', ' BIAYA PENYUSUTAN KENDARAAN '),
(69, '5000', '5027', ' BIAYA PENYUSUTAN PERALATAN '),
(70, '5000', '5028', ' BIAYA PENYUSUTAN MESIN PRODUKSI '),
(71, '5000', '5031', ' BIAYA RENOVASI TAMBAHAN DAYA SSMJ '),
(72, '5000', '5032', ' BIAYA RENOVASI PINDAHAN '),
(73, '5000', '5033', ' BIAYA ADM & BANK '),
(74, '5000', '5034', ' BIAYA PAJAK BANK '),
(75, '5000', '5035', ' BIAYA PAJAK ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subakun`
--
ALTER TABLE `subakun`
  ADD PRIMARY KEY (`idSubAkun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subakun`
--
ALTER TABLE `subakun`
  MODIFY `idSubAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
