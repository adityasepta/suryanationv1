-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2018 at 02:46 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u4930521_victor`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `idAkses` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `kodeRole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`idAkses`, `idUser`, `kodeRole`) VALUES
(1, 1, 'ADM'),
(2, 1, 'PO'),
(3, 1, 'TM'),
(4, 9, 'ADM'),
(5, 9, 'PO'),
(6, 9, 'TM'),
(7, 9, 'JDW'),
(8, 12, 'ADM'),
(9, 12, 'PO'),
(10, 12, 'TM'),
(11, 12, 'JDW');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `idAktivitas` int(11) NOT NULL,
  `namaAktivitas` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`idAktivitas`, `namaAktivitas`) VALUES
(1001, 'Desain'),
(1002, 'Menunggu ACC'),
(1003, 'Grouping'),
(1004, 'Lilin'),
(1005, 'Gips'),
(1006, 'Cor'),
(1007, 'Gosok Pentol'),
(1008, 'Gosok'),
(1009, 'Boom'),
(1010, 'Pasang CZ'),
(1011, 'Polish'),
(1012, 'Sleb'),
(1013, 'Krum'),
(1014, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas2`
--

CREATE TABLE `aktivitas2` (
  `idAktivitas` int(11) NOT NULL,
  `namaAktivitas` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas2`
--

INSERT INTO `aktivitas2` (`idAktivitas`, `namaAktivitas`) VALUES
(1001, 'Desain'),
(1002, 'Menunggu ACC'),
(1003, 'Lilin'),
(1004, 'Grouping'),
(1005, 'Gips'),
(1006, 'Cor'),
(1007, 'Gosok'),
(1008, 'Boom'),
(1009, 'Pasang CZ'),
(1010, 'Polish'),
(1011, 'Sleb'),
(1012, 'Krum'),
(1013, 'Pasang Batu Tengah'),
(1014, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitasservice`
--

CREATE TABLE `aktivitasservice` (
  `idAktivitas` int(11) NOT NULL,
  `namaAktivitas` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitasservice`
--

INSERT INTO `aktivitasservice` (`idAktivitas`, `namaAktivitas`) VALUES
(1001, 'Masak Soda + Cuci'),
(1002, 'Polis + Cuci'),
(1003, 'Doff + Layang'),
(1004, 'Dreasing + Krum'),
(1005, 'Pen'),
(1006, 'QC + Pasang CZ'),
(1007, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(11) NOT NULL,
  `kodeTipeAkun` varchar(5) NOT NULL,
  `kodeAkun` varchar(5) NOT NULL,
  `namaAkun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idAkun`, `kodeTipeAkun`, `kodeAkun`, `namaAkun`) VALUES
(1, '1000', '1001', 'KAS'),
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
(75, '5000', '5035', ' BIAYA PAJAK '),
(76, '3200', '3201', 'PEMBAYARAN DIBAYAR DIMUKA');

-- --------------------------------------------------------

--
-- Table structure for table `billofmaterial`
--

CREATE TABLE `billofmaterial` (
  `idBOM` int(11) NOT NULL,
  `kodeProduk` varchar(255) NOT NULL,
  `kodeMaterial` varchar(255) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bommassal`
--

CREATE TABLE `bommassal` (
  `idBOM` int(11) NOT NULL,
  `idSubSPK` varchar(255) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `jumlah` float NOT NULL,
  `status` varchar(123) NOT NULL DEFAULT 'Belum Disetujui'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bomperak`
--

CREATE TABLE `bomperak` (
  `idBOM` int(11) NOT NULL,
  `idKloter` varchar(123) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bomtempahan`
--

CREATE TABLE `bomtempahan` (
  `idBOM` int(11) NOT NULL,
  `idKloter` varchar(123) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `jumlah` double NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Belum Disetujui'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashflow`
--

CREATE TABLE `cashflow` (
  `idCashflow` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `tipeTransaksi` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashflow`
--

INSERT INTO `cashflow` (`idCashflow`, `keterangan`, `kategori`, `tipeTransaksi`, `jumlah`, `tanggal`) VALUES
(1, 'Ko Aguan Bayar Tempahan No, 58', 'Masuk', 'Tunai', 5770000, '2018-05-19 00:00:00'),
(2, 'Beli Nitrogen', 'Keluar', 'Tunai', 105000, '2018-05-19 00:00:00'),
(3, 'Beli eMAS 100.43 ', 'Keluar', 'Tunai', 41000000, '2018-05-19 00:00:00'),
(4, 'Beli eMAS 100.43 ', 'Keluar', 'Bank', 18360000, '2018-05-19 00:00:00'),
(5, 'Parkir Beli Jam Beker', 'Keluar', 'Tunai', 2000, '2018-05-19 00:00:00'),
(6, 'Parkir ke Medan Mall', 'Keluar', 'Tunai', 3000, '2018-05-19 00:00:00'),
(7, 'Bayar Tukang Slep', 'Keluar', 'Tunai', 30000, '2018-05-19 00:00:00'),
(8, 'Bayar Hutang Ke KO Alim', 'Keluar', 'Bank', 33610300, '2018-05-19 00:00:00'),
(9, 'Biaya Adm BCA Baru', 'Keluar', 'Bank', 20000, '2018-05-19 00:00:00'),
(10, 'Bayar Service Kompur Listrik', 'Keluar', 'Tunai', 100000, '2018-05-19 00:00:00'),
(11, 'SALDO AWAL', 'Masuk', 'Tunai', 47526200, '2018-05-19 00:00:00'),
(12, 'Bayar Hotel Adit', 'Masuk', 'Tunai', 1625000, '2018-05-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `idCurrency` int(11) NOT NULL,
  `hargaEmas` int(11) NOT NULL,
  `hargaRupiah` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`idCurrency`, `hargaEmas`, `hargaRupiah`, `tanggal`) VALUES
(1, 590280, 0, '2018-04-06 11:18:22'),
(3, 590300, 0, '2018-04-07 19:46:44'),
(4, 590280, 0, '2018-04-08 18:13:24'),
(6, 590550, 0, '2018-04-09 13:57:38'),
(7, 593500, 0, '2018-04-11 17:38:44'),
(8, 575000, 0, '2018-04-16 14:43:04'),
(9, 577000, 0, '2018-04-17 11:27:51'),
(10, 575000, 0, '2018-04-18 12:46:39'),
(11, 578000, 0, '2018-04-19 10:34:56'),
(12, 576000, 0, '2018-04-21 12:09:25'),
(13, 576000, 0, '2018-04-25 10:20:11'),
(14, 575000, 0, '2018-04-26 11:09:12'),
(15, 572500, 0, '2018-04-27 11:52:44'),
(16, 573000, 0, '2018-04-28 11:02:07'),
(17, 574000, 0, '2018-05-08 21:47:20'),
(18, 569000, 14150, '2018-05-18 13:16:36'),
(19, 572000, 14150, '2018-05-23 09:34:20'),
(20, 572000, 14185, '2018-05-26 10:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `namaCustomer` varchar(200) NOT NULL,
  `nomorTelepon` varchar(100) NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idCustomer`, `namaCustomer`, `nomorTelepon`, `lastModified`) VALUES
(31, 'Ko Asan Dompet', '', '2018-05-27 16:26:49'),
(33, 'Tkm. Pelangi Mas', '082277763666', '2018-04-16 07:48:16'),
(34, 'Tkm. Daniel', '081260089898', '2018-05-27 16:27:00'),
(35, 'Oheng', '08126045232', '2018-04-16 08:48:30'),
(36, 'Bg Aris', '08126447706', '2018-04-16 10:47:26'),
(37, 'Ko Eddy Ayong', '08126538911', '2018-04-17 04:41:50'),
(38, 'Ko Atak', '', '2018-04-17 07:26:42'),
(39, 'Maroli', '085360926060', '2018-04-17 07:35:33'),
(40, 'Pak Yasir ', '081388418141', '2018-05-27 16:28:02'),
(41, 'Ko Adi ', '081321718288', '2018-04-17 08:06:35'),
(42, 'Tkm. Indah', '0614524605', '2018-05-27 16:28:21'),
(43, 'Bg Dahru', '081991910007', '2018-04-18 06:10:31'),
(44, 'Bg Andi KR', '085360111183', '2018-04-18 06:55:34'),
(45, 'Ko Ahua', '081260603234', '2018-04-18 08:09:45'),
(46, 'Ko Awi Garuda', '', '2018-04-18 10:59:41'),
(47, 'Ko Asiong', '', '2018-04-19 02:10:53'),
(48, 'Ko Aguan', '082366668886', '2018-04-19 03:40:36'),
(49, 'Tkm. Awi Sogo', '08126503881', '2018-04-19 07:15:35'),
(50, 'Tkm. Mentari', '0811607521', '2018-05-27 16:30:51'),
(51, 'Tkm. Maju Jaya', '082272262777', '2018-04-21 06:20:11'),
(52, 'Ko Stiven', '081263331303', '2018-04-21 06:35:31'),
(54, 'Ko wiwin', '085358566197', '2018-04-21 07:52:54'),
(55, 'Tkm. Metro ', '0', '2018-04-21 08:52:09'),
(56, 'Tkm. Asia Baru', '0811607800', '2018-04-21 09:06:12'),
(57, 'Tkm. Megah', '08126011119', '2018-04-25 09:35:53'),
(58, 'Tkm. Sinar Mas', '0', '2018-04-25 09:40:08'),
(59, 'Tkm. Matahari P.Rame', '0', '2018-04-26 01:26:08'),
(60, 'Ko Ahen', '0', '2018-04-27 03:03:07'),
(61, 'Tkm. Ria', '0', '2018-04-28 03:39:22'),
(62, 'Gagah', '08111261642', '2018-04-28 10:24:32'),
(63, 'tkm.dunia jaya ', '0819855209', '2018-04-30 04:11:14'),
(65, 'Bg Arifin ', '081365586788', '2018-04-30 09:23:56'),
(66, 'Kak Mutia', '085373877020', '2018-05-02 02:50:36'),
(67, 'Marwan Lobian', '0', '2018-05-02 09:31:31'),
(68, 'Tkm. London', '0', '2018-05-02 09:34:53'),
(69, 'Tkm. Rapi', '0', '2018-05-02 09:49:12'),
(70, 'Tkm. Agung', '061-4151175', '2018-05-04 04:09:06'),
(71, 'Tkm. Agung', '061-4151175', '2018-05-04 04:09:06'),
(72, 'Tkm. Golden', '061-4569323', '2018-05-08 05:11:07'),
(73, 'Tkm. Matahari Petisah', '0', '2018-05-08 05:15:14'),
(74, 'Silvia', '082272446654', '2018-05-09 05:03:58'),
(75, 'Silvia', '082272446654', '2018-05-09 05:03:58'),
(76, 'Kak Dewi', '000', '2018-05-09 05:44:50'),
(77, 'TKM Suranta', '000', '2018-05-09 05:59:46'),
(78, 'TKM Kasandra', '000', '2018-05-09 06:19:40'),
(79, 'Tkm. Abadi', '061-4529651', '2018-05-09 06:56:11'),
(80, 'Ko Asan Ansori', '0', '2018-05-09 07:02:19'),
(81, 'Ko Kaslim', '085276043322', '2018-05-09 07:03:15'),
(82, 'Tkm. Kurnia', '0811641750', '2018-05-11 06:34:06'),
(83, 'Bg Satria', '0', '2018-05-18 06:43:34'),
(84, 'Ko Rudy', '081265888858', '2018-05-18 06:49:55'),
(85, 'Ci Linda', '085100380198', '2018-05-19 03:10:19'),
(86, 'TKM Sinar jaya', '0000', '2018-05-21 08:58:22'),
(87, 'Ko Aho', '081260125999', '2018-05-24 04:38:38'),
(88, 'Ko Kus', '0811655665', '2018-05-24 05:15:51'),
(89, 'Binsar', '085360302000', '2018-05-25 07:23:52'),
(90, 'Ko Rudy', '083822888888', '2018-05-26 08:21:52'),
(91, 'Tkm. Dunia Jaya/Ko Awa', '0811645209', '2018-05-26 08:51:59'),
(93, 'Bg Andi KR', '085360111183', '2018-05-27 15:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `detailjurnal`
--

CREATE TABLE `detailjurnal` (
  `idDetailJurnal` int(11) NOT NULL,
  `idJurnal` int(11) NOT NULL,
  `kodeAkun` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailjurnal`
--

INSERT INTO `detailjurnal` (`idDetailJurnal`, `idJurnal`, `kodeAkun`, `jumlah`, `kategori`) VALUES
(3, 1, '1001', 5770000, 'Debit'),
(4, 1, '1201', 5770000, 'Kredit'),
(16, 2, '1001', 105000, 'Kredit'),
(17, 2, '5021', 105000, 'Debit'),
(18, 5, '1001', 2000, 'Kredit'),
(19, 5, '5006', 2000, 'Debit'),
(20, 6, '1001', 3000, 'Kredit'),
(21, 6, '5006', 3000, 'Debit'),
(24, 9, '5033', 20000, 'Debit'),
(25, 9, '1101', 20000, 'Kredit'),
(26, 10, '5002', 100000, 'Debit'),
(27, 10, '1001', 100000, 'Kredit'),
(30, 3, '1301', 41000000, 'Debit'),
(31, 3, '1001', 41000000, 'Kredit'),
(32, 8, '1101', 33610300, 'Kredit'),
(33, 8, '3001', 33610300, 'Debit'),
(34, 4, '1101', 18360000, 'Kredit'),
(35, 4, '1301', 18360000, 'Debit'),
(36, 7, '5022', 30000, 'Debit'),
(37, 7, '1001', 30000, 'Kredit'),
(38, 11, '1001', 47526200, 'Debit'),
(39, 12, '1001', 145000000, 'Kredit'),
(40, 12, '1101', 32450000, 'Kredit'),
(41, 12, '1301', 177450000, 'Debit'),
(52, 13, '1001', 200000, 'Debit'),
(53, 13, '1201', 200000, 'Kredit'),
(54, 15, '1001', 40000, 'Debit'),
(55, 15, '1201', 40000, 'Kredit'),
(58, 14, '1001', 1000000, 'Debit'),
(59, 14, '3201', 1000000, 'Kredit'),
(60, 16, '1201', 20000000, 'Kredit'),
(61, 16, '4001', 20000000, 'Debit');

-- --------------------------------------------------------

--
-- Table structure for table `detailpurchaseorderservice`
--

CREATE TABLE `detailpurchaseorderservice` (
  `idDetailPO` int(11) NOT NULL,
  `idPO` int(11) NOT NULL,
  `namaBarang` text NOT NULL,
  `berat` float DEFAULT NULL,
  `jumlah` double NOT NULL,
  `harga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpurchaseorderservice`
--

INSERT INTO `detailpurchaseorderservice` (`idDetailPO`, `idPO`, `namaBarang`, `berat`, `jumlah`, `harga`) VALUES
(1, 1, 'Cincin Batu Bacan', 18.31, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `detailpurchaseordertrading`
--

CREATE TABLE `detailpurchaseordertrading` (
  `idDetailPO` int(11) NOT NULL,
  `idPO` int(11) NOT NULL,
  `idProduk` varchar(255) NOT NULL,
  `jumlah` double NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dimensi`
--

CREATE TABLE `dimensi` (
  `dimensi` varchar(20) NOT NULL,
  `definisi` text NOT NULL,
  `correctiveAction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dimensi`
--

INSERT INTO `dimensi` (`dimensi`, `definisi`, `correctiveAction`) VALUES
('Assurance', 'Pengetahuan, kesopanan dan kemampuan karyawan untuk memberikan keyakinan kepada Konsumen sehingga merasa nyaman atau terjamin.\r\n', 'Perusahaan perlu meningkatkan kualitas SDM terutama pengetahuan, kesopanan dan kemampuan karyawan meyakinkan Konsumen sehingga merasa nyaman atau terjamin.\r\n'),
('Empathy', 'Perusahaan memberikan pelayanan yang sesuai dengan kebutuhan konsumen. Produsen memberikan pelayanan yang membuat perusahaan juga merasakan apa yang dirasakan dan dibutuhkan \r\n', 'Perusahaan perlu meningkatkan kualitas layanan agar lebih sesuai sesuai dengan kebutuhan konsumen dan layanan yang lebih merasakan apa yang dirasakan konsumen\r\n'),
('Reliability', 'Kemampuan untuk menunjukan atau melaksanakan service yang dijanjikan secara tepat dan dapat dipercaya. Pelayanan harus tepat waktu dalam spesifikasi yang sama \r\n', 'Perusahaan perlu meningkatkan kualitas ketepatan service terutama tepat waktu dan tepat spesifikasi agar sesuai dengan yang dijanjikan sehingga kepercayaan konsumen terus meningkat \r\n'),
('Responsiveness', 'Tindakan yang berasal dari kemauan untuk memberikan konsumen pelayanan yang tangkas dan cepat \r\n', 'Perusahaan perlu meningkatkan kualitas layanan kepada konsumen agar lebih tangkas dan cepat \r\n'),
('Tangibles', 'Penampilan luar dari service quality yang dapat berupa fasilitas fisik, peralatan, personalia dan komunikasi', 'Perusahaan perlu meningkatkan kualitas fasilitas fisik, peralatan, penampilan dan kemampuan komunikasi SDM');

-- --------------------------------------------------------

--
-- Table structure for table `factproduction`
--

CREATE TABLE `factproduction` (
  `idProProd` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `idPIC` int(11) NOT NULL,
  `RealisasiStartDate` datetime NOT NULL,
  `RealisasiEndDate` datetime NOT NULL,
  `beratAwal` double NOT NULL,
  `beratTambahan` double NOT NULL,
  `berat` double NOT NULL,
  `kembali` double NOT NULL,
  `statusBerat` varchar(123) NOT NULL,
  `statusWork` varchar(231) NOT NULL,
  `statusSPK` varchar(23) NOT NULL,
  `statusPengambilan` varchar(123) NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `factproduction2`
--

CREATE TABLE `factproduction2` (
  `idProProd` int(11) NOT NULL,
  `idProProdAsal` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idSubSPK` int(11) NOT NULL,
  `idWadah` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `idPIC` int(11) NOT NULL,
  `RealisasiStartDate` datetime NOT NULL,
  `RealisasiEndDate` datetime NOT NULL,
  `beratAwal` double NOT NULL,
  `beratTambahan` double NOT NULL,
  `berat` double NOT NULL,
  `beratKecap` double NOT NULL,
  `kembali` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlahNow` int(11) NOT NULL,
  `statusBerat` varchar(123) NOT NULL,
  `statusWork` varchar(231) NOT NULL,
  `statusRework` varchar(100) NOT NULL DEFAULT 'No',
  `statusSPK` varchar(23) NOT NULL,
  `statusPengambilan` varchar(200) NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `factproduction3`
--

CREATE TABLE `factproduction3` (
  `idProProd` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `idPIC` int(11) NOT NULL,
  `RealisasiStartDate` datetime NOT NULL,
  `RealisasiEndDate` datetime NOT NULL,
  `berat` double NOT NULL,
  `beratAwal` double NOT NULL,
  `kembali` double NOT NULL,
  `statusBerat` varchar(123) NOT NULL,
  `statusWork` varchar(231) NOT NULL,
  `statusSPK` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `factproductionservice`
--

CREATE TABLE `factproductionservice` (
  `idProProd` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `idPIC` int(11) NOT NULL,
  `RealisasiStartDate` datetime NOT NULL,
  `RealisasiEndDate` datetime NOT NULL,
  `berat` double NOT NULL,
  `beratAwal` double NOT NULL,
  `kembali` double NOT NULL,
  `statusBerat` varchar(123) NOT NULL,
  `statusWork` varchar(231) NOT NULL,
  `statusSPK` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoiceheader`
--

CREATE TABLE `invoiceheader` (
  `idHeader` int(11) NOT NULL,
  `nomorPO` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `datangEmas` double NOT NULL,
  `jenisInvoice` varchar(255) NOT NULL,
  `tipeInvoice` varchar(255) DEFAULT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoicemassal`
--

CREATE TABLE `invoicemassal` (
  `idInvoiceMassal` int(11) NOT NULL,
  `idHeader` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `kadar` double NOT NULL,
  `upah` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `berat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoicemassalperseorangan`
--

CREATE TABLE `invoicemassalperseorangan` (
  `idTempahan` int(11) NOT NULL,
  `idHeader` int(11) NOT NULL,
  `nomorPO` varchar(255) NOT NULL,
  `beratTotal` float NOT NULL,
  `beratBatu` float NOT NULL,
  `susut` float DEFAULT NULL,
  `beratAkhir` float NOT NULL,
  `hargaAkhir` float NOT NULL,
  `beratHargaAkhir` float NOT NULL,
  `upah` float NOT NULL,
  `jumlahDatangBerlian` float NOT NULL,
  `upahPasangBerlian` float NOT NULL,
  `upahBerlian` float NOT NULL,
  `jumlahBatuZirkon` float NOT NULL,
  `hargaBatuZirkon` float NOT NULL,
  `upahCZ` float NOT NULL,
  `hargaKrumWarna` float NOT NULL,
  `datangEmas` float NOT NULL,
  `hargaDatangEmas` float NOT NULL,
  `totalDatangEmas` float NOT NULL,
  `panjar` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoicemassalpertokoan`
--

CREATE TABLE `invoicemassalpertokoan` (
  `idTempahan` int(11) NOT NULL,
  `idHeader` int(11) NOT NULL,
  `nomorPO` varchar(255) NOT NULL,
  `beratTotal` float NOT NULL,
  `beratBatu` float NOT NULL,
  `susut` float DEFAULT NULL,
  `beratAkhir` float NOT NULL,
  `hargaAkhir` float NOT NULL,
  `prosentase` float NOT NULL,
  `beratHargaAkhir` float NOT NULL,
  `upah` float NOT NULL,
  `jumlahDatangBerlian` float NOT NULL,
  `beratDatangBerlian` float NOT NULL,
  `upahPasangBerlian` float NOT NULL,
  `upahBerlian` float NOT NULL,
  `jumlahBatuZirkon` float NOT NULL,
  `hargaBatuZirkon` float NOT NULL,
  `upahCZ` float NOT NULL,
  `hargaKrumWarna` float NOT NULL,
  `datangEmas` float NOT NULL,
  `hargaDatangEmas` float NOT NULL,
  `totalDatangEmas` float NOT NULL,
  `panjar` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoicetempahanperseorangan`
--

CREATE TABLE `invoicetempahanperseorangan` (
  `idTempahan` int(11) NOT NULL,
  `idHeader` int(11) NOT NULL,
  `nomorPO` varchar(255) NOT NULL,
  `beratTotal` float NOT NULL,
  `beratBatu` float NOT NULL,
  `susut` float DEFAULT NULL,
  `beratAkhir` float NOT NULL,
  `hargaAkhir` float NOT NULL,
  `beratHargaAkhir` float NOT NULL,
  `upah` float NOT NULL,
  `jumlahDatangBerlian` float NOT NULL,
  `upahPasangBerlian` float NOT NULL,
  `upahBerlian` float NOT NULL,
  `jumlahBatuZirkon` float NOT NULL,
  `hargaBatuZirkon` float NOT NULL,
  `upahCZ` float NOT NULL,
  `hargaKrumWarna` float NOT NULL,
  `datangEmas` float NOT NULL,
  `hargaDatangEmas` float NOT NULL,
  `totalDatangEmas` float NOT NULL,
  `panjar` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoicetempahanpertokoan`
--

CREATE TABLE `invoicetempahanpertokoan` (
  `idTempahan` int(11) NOT NULL,
  `idHeader` int(11) NOT NULL,
  `nomorPO` varchar(255) NOT NULL,
  `beratTotal` float NOT NULL,
  `beratBatu` float NOT NULL,
  `susut` float DEFAULT NULL,
  `beratAkhir` float NOT NULL,
  `hargaAkhir` float NOT NULL,
  `prosentase` float NOT NULL,
  `beratHargaAkhir` float NOT NULL,
  `upah` float NOT NULL,
  `jumlahDatangBerlian` float NOT NULL,
  `beratDatangBerlian` float NOT NULL,
  `upahPasangBerlian` float NOT NULL,
  `upahBerlian` float NOT NULL,
  `jumlahBatuZirkon` float NOT NULL,
  `hargaBatuZirkon` float NOT NULL,
  `upahCZ` float NOT NULL,
  `hargaKrumWarna` float NOT NULL,
  `datangEmas` float NOT NULL,
  `hargaDatangEmas` float NOT NULL,
  `totalDatangEmas` float NOT NULL,
  `panjar` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoicetempahanpertokoan`
--

INSERT INTO `invoicetempahanpertokoan` (`idTempahan`, `idHeader`, `nomorPO`, `beratTotal`, `beratBatu`, `susut`, `beratAkhir`, `hargaAkhir`, `prosentase`, `beratHargaAkhir`, `upah`, `jumlahDatangBerlian`, `beratDatangBerlian`, `upahPasangBerlian`, `upahBerlian`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `upahCZ`, `hargaKrumWarna`, `datangEmas`, `hargaDatangEmas`, `totalDatangEmas`, `panjar`, `total`) VALUES
(1, 1, '138', 10.11, 1.5, 1, 9.61, 574000, 77, 4247430, 1500000, 0, 0, 0, 0, 0, 0, 0, 50000, 0, 574000, 0, 0, 5797430),
(2, 2, '139', 17.35, 0, 0, 17.35, 574000, 77, 7668350, 1500000, 0, 0, 0, 0, 48, 5000, 240000, 50000, 0, 574000, 0, 0, 9458350);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `idJabatan` int(11) NOT NULL,
  `namaJabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`idJabatan`, `namaJabatan`) VALUES
(1, 'Admin Produksi'),
(2, 'Admin Tempahan'),
(3, 'Cleaning Service'),
(4, 'General Affair'),
(5, 'Leader Desain'),
(6, 'Leader Finishing'),
(7, 'Leader Produksi'),
(9, 'Leader Tempahan'),
(10, 'Manager Sales & Marketing'),
(11, 'Owner'),
(12, 'PPIC Tempahan'),
(13, 'Staff Accounting'),
(14, 'Staff Desain Tempahan'),
(15, 'Staff Keuangan'),
(16, 'Staff Krum'),
(17, 'Staff Microsetting'),
(18, 'Staff Produksi'),
(19, 'Staff Sales & Marketing'),
(20, 'Staff Tempahan'),
(21, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `idJurnal` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`idJurnal`, `idCustomer`, `keterangan`, `tanggal`) VALUES
(1, 1, 'Ko Aguan Bayar Tempahan No, 58', '2018-05-19 00:00:00'),
(2, 2, 'Beli Nitrogen', '2018-05-19 00:00:00'),
(3, 3, 'Beli eMAS 100.43 ', '2018-05-19 00:00:00'),
(4, 4, 'Beli eMAS 100.43 ', '2018-05-19 00:00:00'),
(5, 5, 'Parkir Beli Jam Beker', '2018-05-19 00:00:00'),
(6, 6, 'Parkir ke Medan Mall', '2018-05-19 00:00:00'),
(7, 7, 'Bayar Tukang Slep', '2018-05-19 00:00:00'),
(8, 8, 'Bayar Hutang Ke KO Alim', '2018-05-19 00:00:00'),
(9, 9, 'Biaya Adm BCA Baru', '2018-05-19 00:00:00'),
(10, 10, 'Bayar Service Kompur Listrik', '2018-05-19 00:00:00'),
(11, 11, 'SALDO AWAL', '2018-05-19 00:00:00'),
(12, 12, 'Beli Emas 300BCA Baru', '2018-05-21 00:00:00'),
(13, 33, 'Bayar Bon Reparasi 8089', '2018-05-23 00:00:00'),
(14, 33, 'Bon Faktur No. 125', '2018-05-23 00:00:00'),
(16, 33, 'Penjualan Tempahan INV 120', '2018-05-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `idKatalog` int(11) NOT NULL,
  `kodeProduk` varchar(200) NOT NULL,
  `namaProduk` varchar(255) NOT NULL,
  `jenisProduk` varchar(150) NOT NULL,
  `deskripsiProduk` text NOT NULL,
  `hargaProduk` float NOT NULL,
  `hargaModal` int(11) NOT NULL,
  `gambarProduk` varchar(50) NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`idKatalog`, `kodeProduk`, `namaProduk`, `jenisProduk`, `deskripsiProduk`, `hargaProduk`, `hargaModal`, `gambarProduk`, `lastModified`) VALUES
(1, 'CLT-100', 'Cincin Saphire Biru', 'Cincin', 'Batu Zirkon 20 Buah\r\nBerat 20 gr', 2450000, 1950000, 'YMNWvACcxd', '2018-03-25 18:41:50'),
(2, 'CLT-101', 'Liontin Saphire Merah', 'Liontin', 'Berat Batu Saphire 15 Gr', 670000, 550000, 'ky9KPxnQcp', '2018-03-25 18:38:12'),
(3, 'CPR 12312', 'Cincin Kawin', 'Liontin', 'Coba', 2000000, 1670000, 'uV6uKdYjL3', '2018-03-25 18:43:40'),
(4, 'KTO 12322', 'Cincin Nikah Pria', 'Cincin', 'contoh deskripsi produk', 1000000, 0, 'w3Wd2XreHF', '2018-03-15 05:53:57'),
(5, 'CLT-102', 'Kotak Cincin Biru', 'Liontin', 'Warna: Biru', 70000, 0, 'ffVnq8KL8q', '2018-03-24 07:41:45'),
(6, 'CXL 123', 'Cincin Saphire Biru', 'Cincin', 'contoh desikripsi', 1233230, 0, 'uH5fxAT7js', '2018-03-24 09:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `kloter`
--

CREATE TABLE `kloter` (
  `idGroup` int(11) NOT NULL,
  `idKloter` varchar(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `nama` varchar(1232) NOT NULL,
  `kadar` int(11) NOT NULL,
  `beratKotor` double NOT NULL,
  `beratKaret` double NOT NULL,
  `tgl_kloter` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kloter2`
--

CREATE TABLE `kloter2` (
  `idGroup` int(11) NOT NULL,
  `idKloter` varchar(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `nama` varchar(1232) NOT NULL,
  `kadar` int(11) NOT NULL,
  `tgl_kloter` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materialdasar`
--

CREATE TABLE `materialdasar` (
  `idMaterial` int(11) NOT NULL,
  `kodeMaterial` int(255) NOT NULL,
  `namaMaterial` varchar(255) NOT NULL,
  `kadar` double NOT NULL,
  `karat` double NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `stokMaterial` float NOT NULL,
  `safetyStock` float NOT NULL,
  `kategori` varchar(123) NOT NULL DEFAULT 'Emas',
  `asal` varchar(200) NOT NULL DEFAULT 'Asli',
  `color` varchar(100) NOT NULL,
  `clarity` varchar(100) NOT NULL,
  `hargaToko` int(11) NOT NULL,
  `hargaSatuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materialdasar`
--

INSERT INTO `materialdasar` (`idMaterial`, `kodeMaterial`, `namaMaterial`, `kadar`, `karat`, `satuan`, `stokMaterial`, `safetyStock`, `kategori`, `asal`, `color`, `clarity`, `hargaToko`, `hargaSatuan`) VALUES
(35, 1, 'Emas Murni 100% ( 103.62%)', 103.62, 0, 'gr', 1473.65, 0, 'Emas', 'Asli', '', '', 0, 0),
(36, 2, 'Emas Rosegold 75%', 74.61, 0, 'gr', -180.12, 0, 'Emas', 'Asli', '', '', 0, 0),
(37, 3, 'Emas Putih 70% ', 69.43, 0, 'gr', 5.73, 0, 'Emas', 'Asli', '', '', 0, 0),
(38, 4, 'Emas Kuning 59.5%', 58.75, 0, 'gr', -1514.74, 0, 'Emas', 'Asli', '', '', 0, 0),
(39, 5, 'Emas Kuning 30%', 29.53, 0, 'gr', -233.01, 0, 'Emas', 'Asli', '', '', 0, 0),
(40, 6, 'Patri 85% (88.08)', 88.08, 0, 'gr', -3.48, 0, 'Emas', 'Asli', '', '', 0, 0),
(41, 7, 'Benang Kadar 70%', 69.43, 0, 'gr', -13.17, 0, 'Emas', 'Asli', '', '', 0, 0),
(42, 8, 'Emas Putih 75%', 74.61, 0, 'gr', 5.98, 0, 'Emas', 'Asli', '', '', 0, 0),
(43, 9, 'Emas Kuning 70%', 70, 0, 'gr', 577.67, 0, 'Emas', 'Asli', '', '', 0, 0),
(45, 11, 'Paladium 100%', 103.62, 0, 'gr', 0, 10, 'Emas', 'Asli', '', '', 0, 0),
(46, 12, 'Emas Kuning 96.5%', 96.5, 0, 'gr', 10.31, 0, 'Emas', 'Datang Emas', '', '', 0, 0),
(47, 13, 'Alloy Merah', 0, 0, 'gr', -44.54, 500, 'Non Emas', 'Asli', '', '', 0, 0),
(48, 14, 'Berlian 0 Karat', 0, 0, 'Karat', 0, 0, 'Berlian', 'Datang Berlian', '', '', 0, 0),
(49, 15, 'Emas Kuning 60% (59.50%)', 59.58, 0, 'gr', -682.34, 0, 'Emas', 'Asli', '', '', 0, 0),
(51, 17, 'Emas Kuning 65%', 64.24, 0, 'gr', -2041.75, 0, 'Emas', 'Asli', '', '', 0, 0),
(52, 18, 'Emas Kuning 55%', 54.92, 0, 'gr', -5, 0, 'Emas', 'Asli', '', '', 0, 0),
(53, 19, 'Balik Bahan 29.5%', 29.5, 0, 'gr', -113.97, 0, 'Emas', 'Balik Bahan', '', '', 0, 0),
(54, 20, 'Balik Bahan 49.5%', 49.5, 0, 'gr', -15.55, 0, 'Emas', 'Balik Bahan', '', '', 0, 0),
(55, 21, 'Emas Kuning Masak 99.5% (102.59%)', 102.59, 0, 'gr', 140.01, 0, 'Emas', 'Asli', '', '', 0, 0),
(56, 22, 'Balik Bahan 74.5%', 74.5, 0, 'gr', -15.96, 0, 'Emas', 'Balik Bahan', '', '', 0, 0),
(57, 23, 'Emas Rose Gold 70%', 69.43, 0, 'gr', -9.49, 0, 'Emas', 'Asli', '', '', 0, 0),
(58, 24, 'Balik Bahan 69.5%', 69.5, 0, 'gr', -12.27, 0, 'Emas', 'Balik Bahan', '', '', 0, 0),
(59, 25, 'Perak', 0, 0, 'gr', -25.17, 100, 'Non Emas', 'Asli', '', '', 0, 0),
(61, 27, 'Emas Kuning 54.46% (56.43%)', 56.43, 0, 'gr', -446.1, 0, 'Emas', 'Asli', '', '', 0, 0),
(62, 28, 'Emas Kuning 52% ( 53.886%)', 53.88, 0, 'gr', 139.36, 0, 'Emas', 'Asli', '', '', 0, 0),
(63, 29, 'Emas Kuning 53.49% (55.43%)', 55.43, 0, 'gr', -109.06, 0, 'Emas', 'Asli', '', '', 0, 0),
(64, 30, 'Emas Kuning 54.69%', 56.67, 0, 'gr', -154.38, 0, 'Emas', 'Asli', '', '', 0, 0),
(65, 31, 'Emas Kuning 56.04%', 58.07, 0, 'gr', -165.42, 0, 'Emas', 'Asli', '', '', 0, 0),
(66, 32, 'Tembaga', 0, 0, 'gr', -6.22, 300, 'Non Emas', 'Asli', '', '', 0, 0),
(67, 33, 'Alloy Putih', 0, 0, 'gr', 608.54, 300, 'Non Emas', 'Asli', '', '', 0, 0),
(68, 34, 'Alloy L50M', 0, 0, 'gr', 459, 350, 'Non Emas', 'Asli', '', '', 0, 0),
(69, 35, 'Alloy Kuning ', 0, 0, 'gr', 874.2, 300, 'Non Emas', 'Asli', '', '', 0, 0),
(70, 36, 'Alloy Perak', 0, 0, 'gr', 502.79, 300, 'Non Emas', 'Asli', '', '', 0, 0),
(71, 37, 'Alloy Patri Emas', 0, 0, 'gr', -7.29, 300, 'Non Emas', 'Asli', '', '', 0, 0),
(72, 38, 'Alloy Patri Perak', 0, 0, 'gr', 950.43, 100, 'Non Emas', 'Asli', '', '', 0, 0),
(73, 39, 'Emas Kuning 56% (58.03%)', 58.03, 0, 'gr', 186.57, 0, 'Emas', 'Asli', '', '', 0, 0),
(74, 40, 'Balik Bahan 0%', 0, 0, 'gr', 0, 0, 'Emas', 'Balik Bahan', '', '', 0, 0),
(75, 41, 'Emas Kuning 98% (101.55)', 101.55, 0, 'gr', 234.97, 0, 'Emas', 'Asli', '', '', 0, 0),
(76, 42, 'Emas Kuning 37% (36.787%)', 36.787, 0, 'gr', 5.97, 0, 'Emas', 'Asli', '', '', 0, 0),
(77, 43, 'POIN 1-5', 0, 0, 'ct', 0, 0, 'Berlian', 'Asli', '', '', 780, 900),
(78, 44, 'POIN 5.5-7', 0, 0, 'ct', 0, 0, 'Berlian', 'Asli', '', '', 900, 1100),
(79, 45, 'POIN 8-11', 0, 0, 'ct', 0, 0, 'Berlian', 'Asli', '', '', 1000, 1200),
(80, 46, 'POIN 12-16', 0, 0, 'ct', 0, 0, 'Berlian', 'Asli', '', '', 1250, 1400),
(81, 47, 'POIN 17-22', 0, 0, 'ct', 0, 0, 'Berlian', 'Asli', '', '', 1400, 1650),
(82, 48, 'POIN 23-25', 0, 0, 'ct', 0, 0, 'Berlian', 'Asli', '', '', 1650, 1850),
(83, 49, 'Swarovski Putih 1', 0, 0, 'pcs', 0, 0, 'Zirkon', 'Asli', '', '', 3500, 10000),
(84, 50, 'Swarovski Putih 2', 0, 0, 'pcs', 0, 0, 'Zirkon', 'Asli', '', '', 5000, 0),
(85, 51, 'Swarovski Warna', 0, 0, 'pcs', 0, 0, 'Zirkon', 'Asli', '', '', 8000, 15000),
(86, 52, 'Emas Kuning 99.5%', 99.5, 0, 'gr', 103.18, 0, 'Emas', 'Datang Emas', '', '', 0, 0),
(87, 53, 'Emas Kuning 97%', 97, 0, 'gr', 148.55, 0, 'Emas', 'Datang Emas', '', '', 0, 0),
(88, 54, 'Balik Bahan 59%', 59, 0, 'gr', 0, 0, 'Emas', 'Balik Bahan', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `h1` int(11) NOT NULL,
  `h2` int(11) NOT NULL,
  `h3` int(11) NOT NULL,
  `h4` int(11) NOT NULL,
  `h5` int(11) NOT NULL,
  `h6` int(11) NOT NULL,
  `h7` int(11) NOT NULL,
  `h8` int(11) NOT NULL,
  `h9` int(11) NOT NULL,
  `h10` int(11) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL,
  `r5` int(11) NOT NULL,
  `r6` int(11) NOT NULL,
  `r7` int(11) NOT NULL,
  `r8` int(11) NOT NULL,
  `r9` int(11) NOT NULL,
  `r10` int(11) NOT NULL,
  `u1` int(11) NOT NULL,
  `u2` int(11) NOT NULL,
  `rataHarapanT` double NOT NULL,
  `rataHarapanR` double NOT NULL,
  `rataHarapanRE` double NOT NULL,
  `rataHarapanA` double NOT NULL,
  `rataHarapanE` double NOT NULL,
  `rataRealisasiT` double NOT NULL,
  `rataRealisasiR` double NOT NULL,
  `rataRealisasiRE` double NOT NULL,
  `rataRealisasiA` double NOT NULL,
  `rataRealisasiE` double NOT NULL,
  `rataHarapan` double NOT NULL,
  `rataRealisasi` double NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `indikator` text NOT NULL,
  `dimensi` varchar(20) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `indikator`, `dimensi`, `kode`) VALUES
(1, 'Fasilitas fisik Surya Sumatera tampak baik', 'Tangibles', 'T1'),
(2, 'Para karyawan yang melayani anda pada saat menggunakan jasa penerbangan Surya Sumatera berpenampilan rapi dan enak dilihat', 'Tangibles', 'T2'),
(3, 'Surya Sumatera menepati janji sesuai dengan waktu yang telah ditentukan\r\n', 'Reliability', 'R1'),
(4, 'Surya Sumatera memberikan pelayanan yang sesuai dengan rencana yang ditentukan\r\n', 'Reliability', 'R2'),
(5, 'Surya Sumatera memberikan pelayanan yang cepat', 'Responsiveness', 'RE1'),
(6, 'Surya Sumatera menanggapi permintaan Konsumennya dengan cepat', 'Responsiveness', 'RE2'),
(7, 'Surya Sumatera memberikan pelayanan yang berkualitas baik', 'Assurance', 'A1'),
(8, 'Surya Sumatera memberikan pelayanan yang membuat rasa nyaman saat menggunakan jasa penerbangan', 'Assurance', 'A2'),
(9, 'Surya Sumatera memahami kebutuhan spesifik para Konsumennya dengan baik', 'Empathy', 'E1'),
(10, 'Surya Sumatera berusaha untuk membangun minat Konsumennya untuk memberikan pelayanan yang berkualitas', 'Empathy', 'E2');

-- --------------------------------------------------------

--
-- Table structure for table `poberlian`
--

CREATE TABLE `poberlian` (
  `idPOBerlian` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `kodeMaterial` int(11) NOT NULL,
  `namaBerlian` varchar(200) DEFAULT NULL,
  `jenis` varchar(200) NOT NULL,
  `jumlah` double DEFAULT NULL,
  `karat` double DEFAULT '0.01',
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poberlian`
--

INSERT INTO `poberlian` (`idPOBerlian`, `nomorPO`, `kodeMaterial`, `namaBerlian`, `jenis`, `jumlah`, `karat`, `harga`) VALUES
(2, 1, 109, '', '', 0.46, 0.01, 10803000),
(3, 50, 14, '', '', 0, 0.01, 10803000),
(4, 51, 14, '', '', 0, 0.01, 10803000),
(5, 52, 14, '', '', 0, 0.01, 10803000),
(6, 53, 14, '', '', 0, 0.01, 10803000),
(7, 54, 14, '', '', 0, 0.01, 10803000),
(8, 59, 14, '', '', 0, 0.01, 0),
(9, 64, 14, '', '', 1.43, 0.01, 11426000),
(10, 66, 14, '', '', 0, 0.01, 10803000),
(11, 68, 14, '', '', 1, 0.01, 2020000),
(12, 70, 14, '', '', 0, 0.01, 0),
(13, 73, 14, '', '', 1, 0.01, 1670000),
(14, 76, 14, '', '', 0, 0.01, 10881000),
(15, 80, 14, '', '', 0, 0.01, 10881000),
(16, 81, 14, '', '', 0, 0.01, 10881000),
(17, 82, 14, '', '', 0, 0.01, 10881000),
(18, 83, 14, '', '', 0, 0.01, 10881000),
(19, 87, 14, '', '', 0, 0.01, 0),
(20, 102, 14, '', '', 0, 0.01, 0),
(21, 103, 14, '', '', 0, 0.01, 780),
(22, 113, 14, '', '', 0, 0.01, 0),
(23, 122, 14, '', '', 0, 0.01, 0),
(24, 126, 14, '', '', 0, 0.01, 0),
(25, 134, 14, '', '', 0, 0.01, 0),
(26, 135, 14, '', '', 0, 0.01, 0),
(28, 141, 14, '', '', 0, 0.01, 780),
(29, 142, 0, '', 'Zirkon', 1, 0.01, 5000),
(30, 143, 0, '', 'Zirkon', 1, 0.01, 5000),
(31, 144, 0, '', 'Zirkon', 1, 0.01, 3500),
(32, 145, 0, '', 'Zirkon', 1, 0.01, 3500),
(33, 146, 0, 'Swarovski Putih 2', 'Zirkon', 1, 0.01, 20000),
(34, 147, 0, '', 'Zirkon', 1, 0.01, 3500),
(35, 148, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 10000),
(36, 149, 0, '', 'Zirkon', 1, 0.01, 3500),
(37, 150, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(38, 151, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(42, 155, 0, 'POIN 1-5', 'Berlian', 2, 0.21, 780),
(43, 155, 0, 'Swarovski Putih 1', 'Zirkon', 2, 0, 3500),
(44, 156, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(45, 157, 0, '', 'Berlian', 1, 0.01, 780),
(46, 158, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 3500),
(47, 160, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 3500),
(48, 161, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 3500),
(50, 163, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(51, 162, 0, 'Swarovski Putih 2', 'Zirkon', 1, 0, 20000),
(52, 162, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0, 3500),
(53, 164, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 3500),
(54, 169, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(55, 171, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 10000),
(57, 173, 0, 'Swarovski Putih 1', 'Zirkon', NULL, 0.01, 3500),
(58, 174, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 3500),
(59, 177, 0, 'Swarovski Putih 2', 'Zirkon', 1, 0.01, 5000),
(60, 178, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(61, 186, 0, 'POIN 5.5-7', 'Berlian', 1, 0.01, 900),
(62, 187, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(63, 189, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 50000),
(64, 189, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 100000),
(65, 193, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 3500),
(66, 195, 0, 'Swarovski Putih 1', 'Zirkon', 1, 0.01, 3500),
(67, 196, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(68, 197, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(69, 201, 0, 'Swarovski Putih 2', 'Zirkon', 1, 0.01, 10000),
(70, 202, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(71, 203, 0, 'POIN 1-5', 'Berlian', 1, 0.01, 780),
(72, 204, 0, 'Swarovski Putih 2', 'Zirkon', 1, 0.01, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pomasal`
--

CREATE TABLE `pomasal` (
  `idPO` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `idSalesPerson` int(11) NOT NULL,
  `tanggalMasuk` datetime NOT NULL,
  `tanggalEstimasiPenyelesaian` datetime NOT NULL,
  `hargaBahan` float NOT NULL,
  `bahan` varchar(200) NOT NULL,
  `kadarBahan` double NOT NULL,
  `ukuranJari` varchar(50) NOT NULL,
  `krumWarna` varchar(200) NOT NULL,
  `keteranganKrum` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `upah` float NOT NULL,
  `datangEmas` float NOT NULL,
  `kadarDatangEmas` float NOT NULL,
  `tipeCustomer` varchar(100) NOT NULL,
  `pekerjaanTambahan` varchar(100) NOT NULL,
  `keteranganTambahan` varchar(255) NOT NULL,
  `beratAkhir` double NOT NULL,
  `panjar` float NOT NULL,
  `totalHarga` float NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL,
  `idStokBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pomasal`
--

INSERT INTO `pomasal` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `bahan`, `kadarBahan`, `ukuranJari`, `krumWarna`, `keteranganKrum`, `model`, `upah`, `datangEmas`, `kadarDatangEmas`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `beratAkhir`, `panjar`, `totalHarga`, `lastModified`, `tipeOrder`, `idStokBarang`) VALUES
(15, 15, 824, 37, 19, '2018-04-19 00:00:00', '2018-04-26 00:00:00', 578000, 'Emas Kuning', 65, 'Sesuaikan', 'Kuning', '0', 'Anting', 6, 0, 0, 'Standard', 'Kode Cap', 'Cap \"BC700\"', 100, 0, 0, '2018-04-19 06:13:10', 'massal', 0),
(17, 17, 852, 31, 19, '2018-04-23 00:00:00', '2018-04-30 00:00:00', 576000, 'Emas Kuning', 59.5, 'Sesuaikan', 'kuning + kombinasi', '0', 'Model Cincin Mata, Cincin Merica Dewasa, Kerabu Jepit', 7, 0, 0, 'Standard', 'Kode Cap', '0', 300, 0, 0, '2018-04-25 05:11:00', 'massal', 0),
(18, 18, 854, 31, 19, '2018-04-23 00:00:00', '2018-04-30 00:00:00', 576000, 'Emas Kuning', 65, 'Sesuaikan', 'Kuning', '0', 'Campur', 7, 0, 0, 'Standard', 'Kode Cap', '0', 750, 0, 0, '2018-04-25 08:26:12', 'massal', 0),
(19, 19, 855, 31, 19, '2018-04-25 00:00:00', '2018-05-04 00:00:00', 576000, 'Emas Kuning', 59.5, 'Sesuaikan', 'kuning + kombinasi', '0', 'Campur', 7, 0, 0, 'Standard', 'Kode Cap', 'Cap \"SCP 700\"', 250, 0, 0, '2018-04-25 08:32:52', 'massal', 0),
(22, 22, 884, 35, 19, '2018-04-28 00:00:00', '2018-05-05 00:00:00', 572500, 'Emas Kuning', 37, 'Sesuaikan', 'Polis Saja', '0', '0', 7, 0, 0, 'Standard', 'Tidak Ada', '0', 150, 0, 0, '2018-04-28 03:29:00', 'massal', 0),
(23, 23, 887, 37, 19, '2018-04-28 00:00:00', '2018-05-05 00:00:00', 572500, 'Emas Putih', 70, '8-22', 'Putih', '0', 'Cincin Shogun Putih ', 7, 0, 0, 'Standard', 'Kode Cap', 'Cap \"Superman 750\"', 100, 0, 0, '2018-04-28 04:00:51', 'massal', 0),
(25, 25, 894, 45, 19, '2018-04-30 00:00:00', '2018-05-19 00:00:00', 573000, 'Emas Kuning', 59.5, 'Sesuaikan', 'kuning + kombinasi', '0', 'Anting Jepit, Tusukannya jangan Panjang Kali', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap \"700B\"', 200, 0, 0, '2018-04-30 06:37:47', 'massal', 0),
(27, 27, 896, 65, 19, '2018-04-30 00:00:00', '2018-04-25 00:00:00', 573000, 'Emas Kuning', 60, 'Sesuaikan', 'Kuning', '0', 'Campur', 6, 0, 0, 'Standard', 'Kode Cap', 'Cap \"700\"', 850, 0, 0, '2018-04-30 09:23:56', 'massal', 0),
(28, 28, 909, 31, 19, '2018-05-03 00:00:00', '2018-05-14 00:00:00', 573000, 'Emas Kuning', 59, 'Sesuaikan', 'kuning + kombinasi', '0', 'Shogun Ukir, Sisik Naga , Gelang Mata , Cincin Mata', 65, 0, 0, 'Standard', 'Kode Cap', 'Cap ', 285, 0, 65, '2018-05-03 05:10:29', 'massal', 0),
(29, 29, 910, 31, 19, '2018-05-03 00:00:00', '2018-05-25 00:00:00', 573000, 'Emas Kuning', 65, '8-10', 'Kuning', '0', 'Cincin Mata ', 7, 0, 0, 'Standard', 'Kode Cap', 'Cap ', 600, 0, 7, '2018-05-03 05:38:34', 'massal', 0),
(30, 30, 923, 31, 19, '2018-05-04 00:00:00', '2018-05-07 00:00:00', 573000, 'Emas Kuning', 59, '8-10', 'kuning + kombinasi', '0', 'CINCIN MATA', 6, 0, 0, 'Standard', 'Kode Cap', 'Cap \"SCP 700\"', 200, 0, 0, '2018-05-04 09:45:40', 'massal', 0),
(31, 31, 924, 36, 19, '2018-05-04 00:00:00', '2018-05-24 00:00:00', 573000, 'Emas Kuning', 41, 'Sesuaikan', 'kuning + kombinasi', '0', 'Gelang Anak-Anak', 6, 0, 0, 'Standard', 'Kode Cap', 'Cap\"A\"', 200, 0, 0, '2018-05-05 03:15:01', 'massal', 0),
(32, 32, 925, 31, 19, '2018-05-04 00:00:00', '2018-05-14 00:00:00', 573000, 'Emas Kuning', 59, 'Sesuaikan', 'kuning + kombinasi', '0', 'Gelang mata, Cincin Mata dan Cincin Anak', 65, 0, 0, 'Standard', 'Kode Cap', 'Cap \"SCP 700\"', 500, 0, 0, '2018-05-05 03:23:02', 'massal', 0),
(33, 33, 1008, 41, 19, '2018-05-05 00:00:00', '2018-05-21 00:00:00', 569000, 'Emas Kuning', 50, '10-17', 'Kuning', '0', 'Cincin Rante 1 Graman', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap ', 200, 0, 5, '2018-05-22 05:06:51', 'massal', 0),
(34, 34, 1010, 41, 19, '2018-05-05 00:00:00', '2018-05-21 00:00:00', 569000, 'Emas Kuning', 50, '10-17', 'kuning + kombinasi', '0', 'Cincin Mata', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap \"Ari Berlian\"', 150, 0, 0, '2018-05-22 05:12:34', 'massal', 0),
(35, 35, 1011, 41, 19, '2018-05-05 00:00:00', '2018-05-24 00:00:00', 569000, 'Emas Kuning', 50, '10-18', 'Kuning', '0', 'Cincin Sisik Naga 1 Graman ', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap \"Ari Berlian\"', 180, 0, 0, '2018-05-22 05:14:57', 'massal', 0),
(36, 36, 1012, 41, 19, '2018-05-05 00:00:00', '2018-05-24 00:00:00', 569000, 'Emas Kuning', 50, '10-17', 'kuning + kombinasi', '0', 'Cincin Mata', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap \"Ari Berlian\"', 200, 0, 0, '2018-05-22 05:22:53', 'massal', 0),
(37, 37, 1013, 41, 19, '2018-05-05 00:00:00', '2018-05-26 00:00:00', 569000, 'Emas Kuning', 50, '14 cm -17 cm', 'kuning + kombinasi', '0', 'Gelang Model Oval', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap \"Ari Berlian\"', 300, 0, 0, '2018-05-22 05:27:21', 'massal', 0),
(38, 38, 1014, 65, 19, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 569000, 'Emas Kuning', 60, '10-12', 'Kuning', '0', 'Cincin Cewek, Liontin ', 5, 1073.58, 60, 'Standard', 'Kode Cap', 'Cap ', 850, 0, 5, '2018-05-26 09:29:50', 'massal', 4),
(39, 39, 1015, 36, 19, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 569000, 'Emas Kuning', 41, 'Sesuaikan', 'kuning + kombinasi', '0', 'Gelang Anak anak', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap \"A\"', 300, 0, 0, '2018-05-22 08:14:45', 'massal', 0),
(40, 40, 1016, 45, 19, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 569000, 'Emas Kuning', 59.5, 'Sesuaikan', 'kuning + kombinasi', '0', 'Gelang Dewasa', 5, 103.18, 99.5, 'Standard', 'Kode Cap', 'Cap \"700B\"', 200, 0, 0, '2018-05-26 09:29:24', 'massal', 1),
(41, 41, 1019, 87, 19, '2018-05-24 00:00:00', '2018-06-07 00:00:00', 572000, 'Emas Kuning', 51, '11-18', 'kuning + kombinasi', 'Standart', 'Cincin Mata Berat 2 lebih - 3 lebih  masing -masing 1 model 4 pcs', 5, 148.55, 97, 'Standard', 'Kode Cap', 'Cap \"700\"', 430, 0, 0, '2018-05-26 09:29:43', 'massal', 2);

-- --------------------------------------------------------

--
-- Table structure for table `poperak`
--

CREATE TABLE `poperak` (
  `idPO` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `idSalesPerson` int(11) NOT NULL,
  `tanggalMasuk` datetime NOT NULL,
  `tanggalEstimasiPenyelesaian` datetime NOT NULL,
  `beratAkhir` float NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `hargaBahan` float NOT NULL,
  `hargaPerak` int(11) NOT NULL,
  `upah` float NOT NULL,
  `tipeCustomer` varchar(100) NOT NULL,
  `krumWarna` varchar(255) NOT NULL,
  `keteranganKrum` varchar(255) NOT NULL,
  `hargaKrum` int(11) NOT NULL,
  `keteranganSlep` varchar(255) NOT NULL,
  `hargaSlep` int(11) NOT NULL,
  `keteranganRombak` varchar(255) NOT NULL,
  `upahRombak` int(11) NOT NULL,
  `resize` varchar(200) NOT NULL,
  `hargaResize` int(11) NOT NULL,
  `panjar` float NOT NULL,
  `totalHarga` float NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL,
  `namaBatu` varchar(200) NOT NULL,
  `beratBatu` double NOT NULL,
  `keadaanBatuTengah` varchar(255) NOT NULL,
  `batuTerhadapKruman` varchar(255) NOT NULL,
  `batuTerhadapPukulan` varchar(255) NOT NULL,
  `ukuranJari` int(11) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `potempahan`
--

CREATE TABLE `potempahan` (
  `idPO` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `idSalesPerson` int(11) NOT NULL,
  `tanggalMasuk` datetime NOT NULL,
  `tanggalEstimasiPenyelesaian` datetime NOT NULL,
  `hargaBahan` float NOT NULL,
  `upah` float NOT NULL,
  `datangEmas` float NOT NULL,
  `hargaDatangEmas` float NOT NULL,
  `kadarDatangEmas` float NOT NULL,
  `datangBerlian` varchar(255) NOT NULL,
  `jumlahDatangBerlian` int(11) NOT NULL,
  `upahPasangBerlian` int(11) NOT NULL,
  `tipeCustomer` varchar(100) NOT NULL,
  `pekerjaanTambahan` varchar(100) NOT NULL,
  `keteranganTambahan` varchar(255) NOT NULL,
  `keteranganEnamel` varchar(200) NOT NULL,
  `keteranganSlap` varchar(200) NOT NULL,
  `keteranganKombinasi` varchar(200) NOT NULL,
  `keteranganLaserHuruf` varchar(200) NOT NULL,
  `keteranganKodeCap` varchar(200) NOT NULL,
  `hargaEnamel` int(11) NOT NULL,
  `hargaSlap` int(11) NOT NULL,
  `hargaKombinasi` int(11) NOT NULL,
  `hargaLaserHuruf` int(11) NOT NULL,
  `hargaKodeCap` int(11) NOT NULL,
  `biayaTambahan` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `beratAkhir` float NOT NULL,
  `susut` float NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `kadarBahan` double NOT NULL,
  `namaBatu` varchar(255) NOT NULL,
  `beratBatu` double NOT NULL,
  `batuTerhadapKruman` varchar(200) NOT NULL,
  `batuTerhadapPukulan` varchar(200) NOT NULL,
  `batuTerhadapGoresan` varchar(200) NOT NULL,
  `keadaanBatuTengah` varchar(200) NOT NULL,
  `ukuranJari` varchar(200) NOT NULL,
  `berlian` varchar(255) NOT NULL,
  `beratBerlian` double NOT NULL,
  `hargaBerlian` int(11) NOT NULL,
  `batuZirkon` varchar(255) NOT NULL,
  `jumlahBatuZirkon` int(11) NOT NULL,
  `hargaBatuZirkon` int(11) NOT NULL,
  `krumWarna` varchar(255) NOT NULL,
  `hargaKrumWarna` int(11) NOT NULL,
  `keteranganKrum` varchar(255) NOT NULL,
  `tipeIkatan` varchar(255) NOT NULL,
  `model` text NOT NULL,
  `metode` varchar(100) NOT NULL,
  `budget` int(11) NOT NULL,
  `panjar` float NOT NULL,
  `totalHarga` float NOT NULL,
  `jenisCustomer` varchar(100) NOT NULL,
  `persenBiaya` double NOT NULL DEFAULT '100',
  `selisihHarga` int(11) NOT NULL DEFAULT '0',
  `diskon` double NOT NULL DEFAULT '0',
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL,
  `idStokBarang` int(11) NOT NULL,
  `estimasi` varchar(255) NOT NULL,
  `keteranganBatu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potempahan`
--

INSERT INTO `potempahan` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `keteranganEnamel`, `keteranganSlap`, `keteranganKombinasi`, `keteranganLaserHuruf`, `keteranganKodeCap`, `hargaEnamel`, `hargaSlap`, `hargaKombinasi`, `hargaLaserHuruf`, `hargaKodeCap`, `biayaTambahan`, `kuantitas`, `beratAkhir`, `susut`, `bahan`, `kadarBahan`, `namaBatu`, `beratBatu`, `batuTerhadapKruman`, `batuTerhadapPukulan`, `batuTerhadapGoresan`, `keadaanBatuTengah`, `ukuranJari`, `berlian`, `beratBerlian`, `hargaBerlian`, `batuZirkon`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `krumWarna`, `hargaKrumWarna`, `keteranganKrum`, `tipeIkatan`, `model`, `metode`, `budget`, `panjar`, `totalHarga`, `jenisCustomer`, `persenBiaya`, `selisihHarga`, `diskon`, `lastModified`, `tipeOrder`, `idStokBarang`, `estimasi`, `keteranganBatu`) VALUES
(20, 20, 810, 33, 11, '2018-04-18 00:00:00', '2018-05-06 00:00:00', 0, 800000, 0, 575000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 4, 1, 'Emas Putih', 70, 'roku 5 pcs', 0.38, '', 'Kurang', '', '', '14', '', 0, 0, '', 0, 0, 'putih polos', 30000, 'batu roku tdk tahan kruman', 'Kuku', 'cincin cartier 5 pcs ', 'Design', 0, 0, 800000, '', 100, 0, 0, '2018-04-18 10:52:38', 'custom', 0, '', ''),
(30, 30, 834, 49, 19, '2018-04-19 00:00:00', '2018-04-24 00:00:00', 578000, 450000, 0, 578000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 2, 1.5, 0.6, 'Emas Kuning', 70, 'Pink 2 pcs', 0.2, '', 'Cukup', '6,5 Sampai 7,5', 'Mulus', '0', '0', 0, 0, '', 0, 0, 'Kuning', 25000, '0', 'Kuku', 'Sepasang Anting ,ikuti contoh (dat. contoh1 pcs 0.31gr), tanpa skrup, ketebalan tusuk seperti contoh,', 'Manual', 0, 0, 450000, '', 100, 0, 0, '2018-04-19 07:54:48', 'custom', 0, '', ''),
(33, 33, 837, 33, 19, '2018-04-19 00:00:00', '2018-05-05 00:00:00', 576000, 800000, 0, 576000, 0, '0', 0, 0, 'Standard', 'Enamel', '', 'Hitam', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Rose Gold', 70, '0', 0, '', '', '', '', 'Panjang 2.5cm , Diameter 0.8', '', 0, 0, 'PRQ', 0, 3500, 'RoseGold', 0, 'Rosegold + enamel Hitam', '', 'Liontin Tabung , Nama Chines minta sama Ko Itang, Belakang Nama Rosalyn, Diameter Lubang Tabung 0.8', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-21 06:05:26', 'custom', 0, '0', '0'),
(34, 34, 838, 33, 19, '2018-04-19 00:00:00', '2018-05-05 00:00:00', 576000, 800000, 0, 576000, 0, '0', 0, 0, 'Teliti', 'Enamel', '', 'Hitam', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Rose Gold', 70, '0', 0, '', '', '', '', 'Panjang 2.5cm , Diameter 0.8', '', 0, 0, 'PRQ', 0, 3500, 'RoseGold', 0, 'Rosegold + enamel Hitam', '', 'Liontin Tabung , Nama Chines minta sama Ko Itang, Belakang Nama Raphael, Diameter Lubang Tabung 0.8', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-21 06:12:01', 'custom', 0, '0', '0'),
(40, 40, 844, 33, 11, '2018-04-19 00:00:00', '2018-04-26 00:00:00', 576000, 250000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0.6, 'Emas Kuning', 70, 'Blue Saphire', 0, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Mulus', '13.5', '', 0, 0, '', 0, 0, 'Kuning ', 20000, 'Standart', '', 'Model Ikuti Contoh Balik', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-04-21 06:53:15', 'custom', 0, '0', '0\r\n'),
(41, 41, 845, 33, 19, '2018-04-20 00:00:00', '2018-04-27 00:00:00', 576000, 550000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 11, 0.6, 'Emas Putih', 70, '0', 0, '', '', '', '', '8 dan 15', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '0', 'Tanam', 'Rangka Cincin Kawin, datang contoh 4.5, Cewek +/- 4.5 gram, Cowok +/- 6.5 gram, cewek uk. 8 Persis contoh, cowok uk 15 lebih lebar', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-04-21 06:57:33', 'custom', 0, '0', '0'),
(42, 42, 846, 50, 11, '2018-04-19 00:00:00', '2018-04-26 00:00:00', 576000, 0, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 70, 0, 'Emas Putih', 75, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'PUTIH', 0, 'Standart', '', 'Gelang Sisik Naga, Panjang 19 Cm, Belakang Polos, upah + 8 Pen', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-04-21 07:49:43', 'custom', 0, '0', '0'),
(45, 45, 849, 56, 19, '2018-04-20 00:00:00', '2018-04-28 00:00:00', 576000, 850000, 0, 576000, 0, '7 PCS', 0, 5000, 'Standard', 'Kode Cap', '', '', '', '', '', 'KODE CAP, BERAT BERLIAN', 0, 0, 0, 0, 0, 0, 1, 3, 1, 'Emas Putih', 75, '0', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '14', '', 0, 0, '', 0, 0, 'Putih', 25000, '', 'Kuku', 'Ikuti Contoh model cincin , samping mau polos', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-21 09:06:12', 'custom', 50, '0', '0'),
(46, 46, 850, 56, 19, '2018-04-20 00:00:00', '2018-05-04 00:00:00', 576000, 550000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 2, 10, 0.6, 'Emas Putih', 75, '0', 0, 'Tahan', 'Bagus', 'Lebih dari 7', '', '10 dan 26', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 50000, '', 'Tanam', 'Cincin Kawin, datang contoh 5.12 gr', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-04-21 09:09:02', 'custom', 0, '0', '0'),
(47, 47, 856, 55, 19, '2018-04-23 00:00:00', '2018-05-07 00:00:00', 576000, 1000000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 18, 1, 'Emas Putih', 75, 'Alexander', 0.9, 'Tahan', 'Bagus', '6,5 Sampai 7,5', 'Mulus', '19', '', 0, 0, 'PRQ', 0, 3500, 'Putih', 35000, '0', 'Mangkok Kuku', 'Model Sesuai Gambar ', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-25 08:55:51', 'custom', 0, '0', '0'),
(48, 48, 863, 57, 19, '2018-04-25 00:00:00', '2018-05-09 00:00:00', 576000, 250000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 0.6, 'Perak', 92.5, '0', 0, '', '', '', '', '22', '', 0, 0, '', 0, 0, 'Putih', 20000, '0', '', 'Cincin Kawin 1 pcs, Mau Grafir Intan ', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-04-25 09:35:53', 'custom', 0, '', ''),
(49, 49, 864, 58, 19, '2018-04-25 00:00:00', '2018-05-09 00:00:00', 576000, 800000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 2, 10, 1, 'Rose Gold', 70, '0', 0, '', '', '', '', '15 dan 11', '', 0, 0, '', 0, 25000, 'Rosegold + Pen Putih', 80000, '0', 'Tanam', 'Cincin Kawin, Model Seperti Contoh, Lebar Mau 0.7', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-25 09:40:08', 'custom', 0, '0', '0'),
(50, 50, 865, 49, 19, '2018-04-25 00:00:00', '2018-05-09 00:00:00', 576000, 1000000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 7, 1, 'Emas Kuning', 70, 'Zamrud', 0.53, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Kuning', 50000, '0', 'Kuku', 'Liontin 2 Baris, Mata Air Mau Poin 1.5 (3pcs), Zamrud Poin 1 (4 pcs)', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-25 09:45:07', 'custom', 0, '0', '0'),
(51, 51, 866, 49, 19, '2018-04-25 00:00:00', '2018-05-09 00:00:00', 576000, 1250000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 7, 1.5, 'Emas Kuning', 70, 'Pink,ZamrudPetak, Oval, Mata Air', 0.59, 'Tidak Tahan', 'Kurang', '6,5 Sampai 7,5', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Kuning', 75000, '0', 'Kuku', 'Liontin 4 baris, posisi batu (pink (poin 1 = 2pcs),mata air(poin 1 = 3pcs), zamrud petak(poin 1 = 1pcs), zamrud oVAL)(poin 1 = 4pcs)', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-25 09:52:09', 'custom', 0, '0', '0'),
(52, 52, 867, 49, 19, '2018-04-25 00:00:00', '2018-05-09 00:00:00', 576000, 1000000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 7, 1, 'Emas Kuning', 70, 'Pink, Zamrud Bulat, Zamrud Petak', 0.66, 'Tidak Tahan', 'Kurang', '6,5 Sampai 7,5', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Kuning', 70000, '0', 'Kuku', 'Liontin 3 baris ,pink poin 1 = 1pcs, zamrud petak poin  1.5 = 4 pcs, Mata Air poin 1 = 4 pcs', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-25 09:56:08', 'custom', 0, '0', '0'),
(53, 53, 868, 49, 19, '2018-04-25 00:00:00', '2018-05-09 00:00:00', 576000, 1000000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Kuning', 70, 'Zamrud', 0.27, 'Tidak Tahan', 'Kurang', '6,5 Sampai 7,5', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Kuning', 0, '0', 'Kuku', 'Liontin 1 pcs ,mau berlian poin 2 (7 pcs), batu kenak badan , belian dekat ke batu', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-25 10:03:41', 'custom', 0, '0', '0'),
(54, 54, 869, 49, 19, '2018-04-25 00:00:00', '2018-05-09 00:00:00', 576000, 750000, 0, 576000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 18, 1, 'Emas Kuning', 70, 'Zamrud', 0.23, 'Tidak Tahan', 'Kurang', '6,5 Sampai 7,5', 'Mulus', '16.5', '', 0, 0, '', 0, 0, 'Kuning', 50000, '0', 'Kuku', 'Cincin Cowok , Poin 2 , Ring 2.5 mm', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-25 10:07:43', 'custom', 0, '0', '0'),
(57, 57, 874, 33, 19, '2018-04-25 00:00:00', '2018-05-09 00:00:00', 575000, 800000, 0, 575000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Rose Gold', 70, '0', 0, '', '', '', '', '9', '', 0, 0, '', 0, 0, 'RoseGold', 0, '0', '', 'Cincin Mustikal a/n Pelangi Fanefa, pakai berlian', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-26 07:20:12', 'custom', 0, '', ''),
(64, 64, 881, 60, 19, '2018-04-27 00:00:00', '2018-05-11 00:00:00', 575000, 1000000, 0, 575000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 18, 1, 'Emas Putih', 70, 'yellow saphire', 1.49, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '22', '', 0, 0, '', 0, 0, 'Putih ', 50000, '0', 'Mangkok Kuku', 'ikuti gambar', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-27 03:03:07', 'custom', 0, '0', '0'),
(65, 65, 882, 33, 19, '2018-04-12 00:00:00', '2018-04-26 00:00:00', 572500, 650000, 0, 572500, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0.8, 'Emas Putih', 70, '0', 0, '', '', '', '', 'Panjang 15.5', '', 0, 0, '', 0, 0, 'Putih  + Enamel Hitam', 35000, '0', '', 'Mau Tebal Tapi kecil, Bagian Huruf Kasih Enamel, Tinngi 1.45, Tulisan Megawati & Eddy Agus, Dat. Rantai 1.27', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-27 05:41:41', 'custom', 0, '0', '0'),
(66, 66, 883, 33, 19, '2018-04-16 00:00:00', '2018-04-30 00:00:00', 572500, 800000, 0, 572500, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 2, 0, 1, 'Emas Putih', 70, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Putih', 50000, '0', '', 'Anting Tusuk, Mati/Tidak 2 Fungsi, Dat Emas 3.18gr', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-27 05:53:23', 'custom', 0, '', ''),
(67, 67, 885, 61, 19, '2018-04-23 00:00:00', '2018-05-10 00:00:00', 0, 750000, 0, 572500, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 13, 1, 'Emas Putih', 75, 'Saphire', 1.19, '', '', '', '', '19.5', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '0', 'Mangkok Kuku', 'Dat Contoh Berlian 1 pcs Poin 4, Model CLB 3, Rangka Saja', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-04-28 03:39:22', 'custom', 0, '0', '0'),
(69, 69, 889, 33, 11, '2018-04-30 00:00:00', '2018-05-12 00:00:00', 0, 1350000, 0, 0, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 35, 1, 'Rose Gold', 70, '', 0, '', '', '', '', '4.8 x 5.2', '', 0, 0, '', 0, 0, 'rose gold', 80000, '', '', 'gelang cartier polos', 'Design', 0, 0, 1350000, '', 100, 0, 0, '2018-04-30 03:42:55', 'custom', 0, '', ''),
(72, 72, 892, 33, 11, '2018-04-30 00:00:00', '2018-05-16 00:00:00', 573000, 400000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 0.6, 'Emas Kuning', 70, 'Hitam', 5.92, 'Tidak Tahan', 'Cukup', 'Lebih dari 7', 'Mulus', '27', '', 0, 0, '', 0, 0, 'Kuning', 30000, 'Standart', 'Bungkus', 'Cincin Cowok ', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-22 09:20:24', 'custom', 0, '', ''),
(77, 76, 901, 67, 19, '2018-05-02 00:00:00', '2018-05-15 00:00:00', 16000, 1000000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Perak', 92.5, 'Mata Kucing', 1.15, '', '', '', '', '29', '', 0, 0, 'PRQ', 0, 10000, 'Putih ', 40000, '', 'Mangkok Kuku', 'Cincin Cowok ', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-02 09:31:31', 'custom', 0, '0', '0'),
(78, 77, 902, 68, 19, '2018-04-30 00:00:00', '2018-05-10 00:00:00', 573000, 700000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Rose Gold', 70, 'Roku', 0, '', '', '', '', '18', '', 0, 0, '', 0, 0, 'RoseGold', 50000, '0', 'Mangkok Kuku', 'Cincin Cewek ikuti contoh , mau tanpa cz, dat contoh 4.60 gr', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-02 09:34:53', 'custom', 0, '0', '0'),
(79, 78, 903, 33, 19, '2018-05-02 00:00:00', '2018-05-19 00:00:00', 573000, 800000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Putih', 70, 'Topas', 1.37, '', '', '', '', '13', '', 0, 0, 'PRQ', 0, 3500, 'Putih ', 25000, '0', '', 'Cincin Cewek , cz mau uk. 1.5mm', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-02 09:37:11', 'custom', 0, '0', '0'),
(81, 80, 905, 33, 19, '2018-05-01 00:00:00', '2018-05-10 00:00:00', 573000, 550000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Putih', 70, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Putih ', 25000, '0', '', 'Cincin Belah Rotan , 9 pcs /keliling diluar, Cap p.750 + b. total berlian, lebar 0.3 cm', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-02 09:52:07', 'custom', 0, '0', '0'),
(82, 81, 906, 33, 19, '2018-05-02 00:00:00', '2018-05-10 00:00:00', 573000, 1350000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, '0', 0, '', '', '', '', '4.8 x 5.7', '', 0, 0, '', 0, 0, 'Putih  + Enamel Hitam', 250000, '0', '', 'Gelang Nama Sunarto Love Intan Love Amy', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-02 09:55:16', 'custom', 0, '0', '0'),
(83, 82, 907, 33, 19, '2018-05-02 00:00:00', '2018-05-10 00:00:00', 573000, 750000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 4, 1, 'Emas Putih', 70, 'Swravski 7 mm', 0, '', 'Bagus', 'Lebih dari 7', 'Mulus', '14', '', 0, 0, '', 0, 0, 'Putih ', 25000, '0', 'Kuku', 'Cincin Cewek', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-02 09:58:57', 'custom', 0, '0', '0'),
(88, 87, 914, 50, 19, '2018-05-01 00:00:00', '2018-05-12 00:00:00', 573000, 800000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Rose Gold', 75, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Rosegold + Enamel Hitam', 60000, '0', '', 'Liontin Tifani/Romawi, Bulat, Mau Pakai Berlian Poin 2', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-04 02:58:42', 'custom', 0, '0', '0'),
(89, 88, 915, 50, 19, '2018-05-01 00:00:00', '2018-05-12 00:00:00', 573000, 0, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 50, 0, 'Rose Gold', 75, '0', 0, '', '', '', '', 'uk. 20 cm ', '', 0, 0, '', 0, 0, 'RoseGold', 0, '0', '', 'Gelang Sisik Naga uk. 20cm, ', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-04 03:02:50', 'custom', 0, '0', '0'),
(90, 89, 916, 50, 19, '2018-05-01 00:00:00', '2018-05-12 00:00:00', 573000, 1350000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 35, 1, 'Rose Gold', 75, '0', 0, '', '', '', '', '5.8 x 5', '', 0, 0, '', 0, 0, 'Rosegold + Enamel Hitam', 150000, '0', '', 'Gelang Romawi uk Lebar 5.8 , panjang 5 cm', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-04 03:37:56', 'custom', 0, '0', '0'),
(92, 91, 918, 71, 19, '2018-05-03 00:00:00', '2018-05-12 00:00:00', 573000, 550000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 0.6, 'Emas Putih', 75, 'Saphire', 0.75, '', '', '', '', '24', '', 0, 0, 'PRQ', 0, 3500, 'Putih + doff Putih', 50000, '0', '', 'Model Ikuti Contoh , Datang Contoh 10.78', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-04 04:32:27', 'custom', 0, '0', '0'),
(94, 93, 920, 33, 19, '2018-05-03 00:00:00', '2018-05-12 00:00:00', 0, 350000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0.6, 'Emas Putih', 70, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Putih', 30000, '0', '', 'Mainan Nama Angelia Julita, Tinggi Huruf A (1.3 cm), Tinggi J 1.5cm, Polos , Mau Siap 10 Hari,Cap 750', 'Manual', 0, 0, 350000, '', 100, 0, 0, '2018-05-04 05:12:14', 'custom', 0, '0', '0'),
(95, 94, 921, 33, 19, '2018-05-03 00:00:00', '2018-05-14 00:00:00', 0, 4200000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 6, 60, 1, 'Emas Kuning', 70, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Kuning', 180000, '6 x 30,000', '', 'Koin bUat 6 pcs', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-04 05:20:37', 'custom', 0, '0', '0'),
(96, 95, 922, 33, 19, '2018-05-03 00:00:00', '2018-05-14 00:00:00', 573000, 1350000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Rose Gold', 75, '0', 0, '', '', '', '', '4.5 x 5.0', '', 0, 0, 'PRQ', 0, 3500, 'RoseGold', 0, '0', '', 'Model Cartier Buat 2 Pcs, Uk. 4.5 x 5.0 , Pakai CZ, cAP 750', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-04 05:32:23', 'custom', 0, '0', '0'),
(97, 96, 926, 56, 19, '2018-05-04 00:00:00', '2018-05-18 00:00:00', 573000, 600000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 0.8, 'Emas Kuning', 70, 'Batu Merah', 4.49, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Kuning', 35000, '0', '', 'Mainan Sangkar Burung ', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-05 03:33:54', 'custom', 0, '0', '0'),
(98, 97, 927, 33, 19, '2018-05-04 00:00:00', '2018-05-18 00:00:00', 573000, 350000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 4, 0.6, 'Emas Putih', 70, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Putih', 0, '0', '', 'Mainan Nama Olivia, Tinggi Huruf O = 1.3cm , Max 4 gr, 2 TINGKAT CZ mau 1.5mm', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-05 03:39:17', 'custom', 0, '0', '0'),
(99, 98, 928, 33, 19, '2018-05-04 00:00:00', '2018-05-18 00:00:00', 573000, 350000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3, 0.6, 'Emas Kuning', 70, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Kuning', 35000, '0', '', 'Maian Nama \" Rap\", Tinggi Huruf R = 1.5cm, Max 3 gr, 2 tingkat, Huruf Miring Cantik, CZ 1.5 mm', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-05 03:42:02', 'custom', 0, '0', '0'),
(101, 100, 930, 72, 19, '2018-05-05 00:00:00', '2018-05-19 00:00:00', 0, 1000000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 8, 1, 'Emas Kuning', 70, 'Batu Hijau', 0.66, '', '', '', '', '14', '', 0, 0, 'PRQ', 0, 3500, 'merah surabaya', 40000, '0', 'Kuku', 'Model Ikuti Contoh , Berat Contoh : 7.85 gr', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-08 05:11:07', 'custom', 0, '0', '0'),
(102, 101, 931, 73, 19, '2018-05-05 00:00:00', '2018-05-19 00:00:00', 16000, 700000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Perak', 92.5, 'Roku 7 pcs', 1.4, '', '', '', '', '23', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 40000, '0', 'Mangkok Kuku', 'Cincin Cowok ', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-08 05:15:14', 'custom', 0, '0', 'Batu Tidak Tahan Panas dan Gresing'),
(103, 102, 932, 49, 19, '2018-05-07 00:00:00', '2018-05-17 00:00:00', 573000, 750000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 20, 1, 'Emas Kuning', 70, 'Zamrud', 0.32, '', 'Kurang', '6,5 Sampai 7,5', 'Serat Kasar', '22', '', 0, 0, '', 0, 0, 'KUning + Doff Kuning', 40000, '', 'Kuku', 'Model Cincin Cowok Seperti Biasa', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-08 05:20:05', 'custom', 0, '', ''),
(104, 103, 933, 33, 11, '2018-04-10 00:00:00', '2018-05-19 00:00:00', 574000, 1000000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, '', 0, '', '', '', '', '24', '', 0, 0, '', 0, 0, 'Putih ', 30000, 'Krum Putih Polos', '', 'Cincin Cewek Diamond', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 04:31:38', 'custom', 0, '', ''),
(105, 104, 934, 50, 11, '2018-04-16 00:00:00', '2018-04-26 00:00:00', 573500, 1500000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Kode Cap', '', '', '', '', '', 'Kode MTR750 + berat batu saphire + berat carat berlian', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 75, 'Blue Saphire', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '20', '', 0, 0, '', 0, 0, 'putih', 0, 'Putih', 'Mangkok Kuku', 'cincin microsetting', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 04:37:28', 'custom', 0, '', ''),
(106, 105, 935, 75, 14, '2018-05-05 00:00:00', '2018-05-05 00:00:00', 517000, 1000000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 7, 1, 'Rose Gold', 75, 'swarovski', 0, '', 'Bagus', '6,5 Sampai 7,5', 'Mulus', 'cewek 10 - cowok 25', '', 0, 0, 'Swarovski', 7, 10000, 'warna asli rosegold', 0, 'warna asli rosegold', 'Kuku', 'Sepasang cincin kawin, model seperti foto, ring cincin cewek tidak mau besar, cincin cowok polos ikut foto', 'Design', 5600000, 2000000, 0, '', 100, 0, 0, '2018-05-09 05:03:58', 'custom', 0, '', ''),
(107, 106, 936, 48, 37, '2018-05-08 00:00:00', '2018-05-18 00:00:00', 573500, 850000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Putih', 70, 'Black Saphire', 1.09, '', 'Sangat Bagus', 'Lebih dari 7', 'Serat Kasar', '15', '', 0, 0, 'PRQ', 0, 3500, 'putih', 30000, 'Putih', 'Kuku', 'Cincin Cwek ikuti datang contoh', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 05:31:27', 'custom', 0, '', ''),
(108, 107, 937, 76, 37, '2018-05-07 00:00:00', '2018-05-21 00:00:00', 573500, 750000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Putih', 70, 'Batu Putih Oval', 1.55, 'Tahan', 'Sangat Bagus', '6,5 Sampai 7,5', 'Mulus', '24', '', 0, 0, 'Swarovski', 0, 10000, 'putih', 30000, 'Putih', 'Kuku', 'Cincin cewek batu Putih, ikuti contoh', 'Design', 0, 1000000, 0, '', 100, 0, 0, '2018-05-09 05:44:50', 'custom', 0, '', ''),
(109, 108, 938, 77, 37, '2018-05-07 00:00:00', '2018-05-17 00:00:00', 593500, 475000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 10, 0.6, 'Emas Putih', 70, '', 0, '', '', '', '', '', '', 0, 0, 'PRQ', 0, 3500, 'putih', 35000, 'Putih', '', 'Liontin Nama Nandya, Tinggi 2 cm, double benang, pakai CZ', 'Manual', 0, 0, 475000, '', 100, 0, 0, '2018-05-09 06:02:10', 'custom', 0, '', ''),
(110, 109, 939, 57, 37, '2018-05-07 00:00:00', '2018-05-11 00:00:00', 573500, 250000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 1.5, 0, 'Emas Putih', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'putih', 20000, 'Putih', '', 'Liontin nama F, Huruf Balok, tinggi 1 cm, satu lapis, kokot dibelakang, tanpa CZ', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-09 06:12:32', 'custom', 0, '', ''),
(111, 110, 940, 78, 37, '2018-05-07 00:00:00', '2018-05-18 00:00:00', 57350000, 450000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 13, 0.6, 'Emas Putih', 70, 'batu Saphire', 1.22, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Serat Halus', '27', '', 0, 0, 'PRQ', 0, 3500, 'Putih + doff Putih + slep', 45000, 'Putih + doff Putih + slep', 'Kuku', 'Cincin Cowok CLB 87', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-09 06:19:40', 'custom', 0, '', ''),
(112, 111, 941, 52, 37, '2018-05-07 00:00:00', '2018-05-11 00:00:00', 574000, 400000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3.5, 0.6, 'Emas Kuning', 70, 'Biru', 1.27, 'Tahan', 'Bagus', '6,5 Sampai 7,5', 'Mulus', '12.5', '', 0, 0, 'PRQ', 0, 3500, 'Kuning', 30000, 'Kuning', 'Kuku', 'Cincin cewek lady diana', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-09 06:27:11', 'custom', 0, '', ''),
(113, 112, 942, 79, 19, '2018-05-05 00:00:00', '2018-05-20 00:00:00', 574000, 1500000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 2, 15, 1.2, 'Emas Putih', 75, 'bERLIAN 0.58CT, D, VVS1', 0.2, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '17.5 & 11.5', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 50000, 'untuk cewek krum putih polos', 'Kuku', 'cincin Kawin Model berbeda, Cowok uk.17.5 & cewek 11.50, Berlian dari victoria vici, ukir nama T & P', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 06:56:11', 'custom', 0, '0', 'Mau Diamond Tengah 0.58ct, color d vvs1 (5.30mm)'),
(114, 113, 943, 80, 19, '2018-05-05 00:00:00', '2018-05-25 00:00:00', 574000, 3500000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1.5, 'Emas Putih', 70, 'Saphire', 0, 'Tahan', 'Bagus', 'Lebih dari 7', 'Serat Halus', '16.5', '', 0, 0, '', 0, 0, 'Putih', 50000, '', 'Mangkok Kuku', 'Hati-hati Batu Mahal, ikuti contoh , kuku lembek, perhatikan notes yang dibuat koko, berlian color e/f @ 1.200$', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 07:02:19', 'custom', 0, '0', 'Berlian Wajib non floeranse cari yang heart & orrow'),
(115, 114, 944, 81, 19, '2018-12-04 00:00:00', '2018-02-05 00:00:00', 574000, 2500000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Kode Cap', '', '', '', '', '', 'ss gold 750', 0, 0, 0, 0, 0, 0, 1, 0, 1.5, 'Emas Kuning', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Kuning', 50000, 'Kuning', 'Bungkus', 'model ikuti gambar, bungkus semua semua sesuai contoh gambar', 'Design', 0, 0, 2500000, '', 100, 0, 0, '2018-05-13 03:17:21', 'custom', 0, '', ''),
(117, 116, 946, 33, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 574000, 550000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Rose Gold', 70, '', 0, '', '', '', '', '5.5', '', 0, 0, '', 0, 0, 'Rose Gold', 25000, 'Krum Rose Gold', '', 'CIncin Belah Rotan, Diamond poin 2', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-22 09:20:27', 'custom', 0, '', ''),
(118, 117, 947, 48, 19, '2018-05-08 00:00:00', '2018-05-18 00:00:00', 574000, 400000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 0.6, 'Emas Putih', 7, 'Black Saphire', 1.13, 'Tahan', 'Bagus', 'Lebih dari 7', 'Serat Kasar', '16', '', 0, 0, 'PRQ', 0, 3500, 'Putih', 40000, '0', 'Kuku', 'Cincin Cowok CLB 51', 'Inject', 0, 0, 0, '', 100, 0, 0, '2018-05-09 09:11:45', 'custom', 0, '0', '0'),
(119, 118, 948, 52, 19, '2018-05-07 00:00:00', '2018-05-11 00:00:00', 574000, 400000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3.5, 0.6, 'Emas Kuning', 70, 'Bacan', 0.29, '', '', '6,5 Sampai 7,5', '', '12.5', '', 0, 0, 'PRQ', 0, 3500, 'Kuning', 30000, '0', 'Kuku', 'Model Ccn Cewek MCD 49 ', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-09 09:16:17', 'custom', 0, '0', '0'),
(120, 119, 949, 33, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 574000, 0, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Emas Kuning', 70, '', 0, '', '', '', '', '17', '', 0, 0, '', 0, 0, 'Kuning', 0, 'Krum Kuning+Enamel Hitam', '', 'Cincin Nama Mandarin', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 09:20:59', 'custom', 0, '', ''),
(121, 120, 950, 50, 11, '2018-12-04 00:00:00', '2018-03-04 00:00:00', 574000, 850000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 75, 'Topas', 0, 'Tahan', 'Kurang', 'Lebih dari 7', 'Mulus', '20', '', 0, 0, '', 0, 0, 'Putih', 0, 'Putih Polos', 'Mangkok Kuku', 'Buka Setengah Mangkok, Permukaan mau tampak segi empat, keliling pakai poin 10, mau tampak mewah', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 10:55:20', 'custom', 0, '', ''),
(122, 121, 952, 33, 19, '2018-05-09 00:00:00', '2018-05-18 00:00:00', 574000, 1350000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 20, 1, 'Emas Putih', 70, '0', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '5.2 x 4.7', '', 0, 0, '', 0, 0, 'Putih', 80000, '0', '', 'Gelang Cartier Paku, Diameter 5.2 x 4.7, Cap 750 + Berat Berlian ,berat max 20-22gr', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 06:22:38', 'custom', 0, '0', '0'),
(123, 122, 953, 82, 19, '2018-05-09 00:00:00', '2018-05-28 00:00:00', 574000, 700000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 1, 'Emas Putih', 75, 'Yellow Saphire', 1.01, '', 'Bagus', 'Lebih dari 7', 'Serat Kasar', '20', '', 0, 0, '', 0, 0, 'Putih', 30000, '0', 'Mangkok Kuku', 'Model Ikuti contoh, Mangkok tutup semua (jangan ada lubang ), dat contoh 11.78 gr', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 06:34:06', 'custom', 0, '0', '0'),
(124, 123, 954, 33, 19, '2018-05-09 00:00:00', '2018-05-18 00:00:00', 574000, 1200000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 20, 0, 'Emas Putih', 70, '0', 0, '', '', '', '', '5.1 x 4.5', '', 0, 0, '', 0, 0, 'Putih  + Enamel Hitam', 100000, '0', '', 'Gelang Cartier, Huruf Cartier kiri kanan pakai enamel hitam, diameter 4.5 x 5.1 , berat 20-22gr', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 06:39:51', 'custom', 0, '0', '0'),
(125, 124, 955, 56, 19, '2018-05-09 00:00:00', '2018-05-26 00:00:00', 574000, 800000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 12, 1, 'Emas Putih', 75, 'Kecubung ', 1.75, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Sompel', '18', '', 0, 0, 'PRQ', 0, 3500, 'Putih', 30000, '0', 'Kuku', 'Model ikuti contoh,tidak memakai kerawang, dat, contoh 10.92 gr pakai cz', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 06:47:39', 'custom', 0, '0', 'sompel di bagian samping'),
(126, 125, 956, 33, 19, '2018-05-09 00:00:00', '2018-05-26 00:00:00', 574000, 650000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, 'Topas Petak Segi', 3.5, 'Tidak Tahan', '', 'Lebih dari 7', 'Mulus', '19', '', 0, 0, 'PRQ', 0, 3500, 'Putih + doff Putih', 35000, '0', 'Kuku', 'Cincin Cowok, mau cz 2 mm, kuku mau bulat, ada lis dikit', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 07:48:33', 'custom', 0, '0', '0'),
(127, 126, 957, 33, 19, '2018-05-09 00:00:00', '2018-05-26 00:00:00', 574000, 750000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 4, 1, 'Emas Putih', 70, 'berlian 5 pcs', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '16', '', 0, 0, '', 0, 0, 'Putih', 30000, '', 'Kuku', 'Cincin Cewek 1 baris, ring tebal bawaH 1 Mili, cap 750 + total berlian', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 07:52:46', 'custom', 0, '0', '0'),
(128, 127, 958, 33, 19, '2018-05-09 00:00:00', '2018-05-26 00:00:00', 574000, 400000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 30, 0.6, 'Emas Putih', 70, 'Mutiara', 1.06, '', 'Kurang', 'Kurang dari 6', 'Mulus', '19', '', 0, 0, 'PRQ', 0, 3500, 'Putih', 25000, '0', '', 'Ikuti Gambar, cap P.750 + B. Mutiara', 'Inject', 0, 0, 0, '', 100, 0, 0, '2018-05-11 07:56:10', 'custom', 0, '0', '00'),
(129, 128, 959, 33, 19, '2018-05-09 00:00:00', '2018-05-26 00:00:00', 574000, 1000000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 30, 1, 'Rose Gold', 70, '0', 0, '', '', '', '', '4.5 x 4.9', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '0', '', 'Gelang Cartier Polos, diameter 4.5 x 4.9, cap p.750', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 07:59:21', 'custom', 0, '0', '0'),
(130, 129, 960, 33, 19, '2018-05-10 00:00:00', '2018-05-24 00:00:00', 574000, 950000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, '0', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '19', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 35000, '0', 'Tanam', 'cincin cowok 16 pcs, dat berlian 16 pcs', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 08:02:45', 'custom', 0, '0', '0'),
(131, 130, 961, 56, 19, '2018-05-09 00:00:00', '2018-05-23 00:00:00', 574000, 500000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 4, 0.8, 'Emas Putih', 75, 'Topas Oval', 1.28, '', 'Kurang', 'Lebih dari 7', 'Mulus', '0', '', 0, 0, 'PRQ', 0, 5000, 'Putih', 25000, '', 'Kuku', 'Dat Contoh 3.37 , liontin Lady', 'Inject', 0, 0, 0, '', 100, 0, 0, '2018-05-11 08:26:06', 'custom', 0, '', ''),
(132, 131, 962, 33, 11, '2018-04-16 00:00:00', '2018-04-30 00:00:00', 576000, 1000000, 0, 574000, 0, 'Berlian kecil 30 pcs + 29 pcs Berlian Besar 2 Pcs', 0, 5000, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Emas Putih', 70, 'Berlian', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', '', '', '', 0, 0, '', 0, 0, 'Putih', 50000, 'Putih Polos', 'Kuku', 'Anting Tusuk Ikuti Foto, Pakai Kokot, 2 Fungsi, ', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-22 09:20:34', 'custom', 0, '', ''),
(133, 132, 963, 50, 19, '2018-05-09 00:00:00', '2018-05-16 00:00:00', 574000, 0, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 40, 0, 'Emas Putih', 70, '0', 0, '', '', '', '', 'P= 17 CM , L=1cm', '', 0, 0, '', 0, 0, 'Putih', 0, '', '', 'Gelang sisik Naga uk. 17 cm, berat mau 40 gr, cap mtr 750', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-11 09:46:08', 'custom', 0, '', '0'),
(134, 133, 964, 50, 19, '2018-05-09 00:00:00', '2018-05-16 00:00:00', 574000, 0, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Emas Putih', 70, '0', 0, '', '', '', '', '30 CM', '', 0, 0, '', 0, 0, 'Putih', 0, '', '', 'Gelang Sisik Naga  uk. 30cm untuk di kaki, berat mau 30-32 gr, cap mtr 750', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-11 09:54:04', 'custom', 0, '', '0'),
(135, 134, 965, 49, 19, '2018-05-10 00:00:00', '2018-05-17 00:00:00', 574000, 1000000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 7, 1.5, 'Emas Kuning', 70, 'Zamrud hijau, pink', 0.43, 'Tidak Tahan', 'Kurang', '6,5 Sampai 7,5', 'Serat Halus', '0', '', 0, 0, '', 0, 0, 'Kuning', 70000, '0', 'Kuku', 'Liontin 3 bARIS', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 09:59:41', 'custom', 0, '0', '0'),
(136, 135, 966, 49, 19, '2018-05-10 00:00:00', '2018-05-17 00:00:00', 574000, 1000000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 7, 1.5, 'Emas Kuning', 70, 'zamrud, Pink, hijau', 0.51, 'Tidak Tahan', 'Kurang', '6,5 Sampai 7,5', 'Serat Halus', '0', '', 0, 0, '', 0, 0, 'Kuning', 70000, '', 'Kuku', 'liontin 3 baris , pakai berlian poin 1 dan 1.5', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-11 10:02:55', 'custom', 0, '0', '0'),
(137, 136, 967, 33, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 574000, 850000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 18, 1, 'Emas Putih', 70, 'topas', 0.56, 'Tidak Tahan', '', '', 'Sompel', '12', '', 0, 0, 'PRQ', 0, 3500, 'putih', 35000, '0', 'Mangkok Kuku', 'model ikuti contoh, dat. contoh 13.58 grm, kuku mau lembek', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-13 02:44:56', 'custom', 0, '0', 'sompel di bagian belakang'),
(141, 140, 971, 72, 19, '2018-05-17 00:00:00', '2018-05-31 00:00:00', 574000, 1000000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 6, 1, 'Emas Kuning', 70, 'MUTIARA', 2.22, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Mulus', '10', '', 0, 0, 'PRQ', 0, 3500, 'Kuning', 35000, '0', '', 'Ikuti Contoh ,pakai cz, mutiara posisinya di bulatan cz, pakai sarang', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-17 08:51:11', 'custom', 0, '', ''),
(142, 141, 972, 38, 19, '2018-05-17 00:00:00', '2018-05-26 00:00:00', 574000, 850000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Kuning', 70, 'topas', 0.89, 'Tidak Tahan', 'Cukup', '6,5 Sampai 7,5', 'Mulus', '16.5', '', 0, 0, '', 0, 0, 'badan putih , krum kuning ', 40000, '0', 'Kuku', 'Ikutu Gmabar , mau pakai 2 bahan:  kepala Kuning, Bdan Mau putih, pakai berlian disesuaikan, samping mau polos dan dibuat logo vl', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-17 08:59:04', 'custom', 0, '0', '0'),
(143, 142, 973, 56, 11, '2018-05-18 00:00:00', '2018-06-01 00:00:00', 569000, 1500000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 1, 'Emas Putih', 75, '0', 0, '', '', '', '', '24', '', 0, 0, '', 0, 0, 'Putih', 35000, '0', 'Kuku', 'Cincin Cewek , Dat Contoh 13.10 gr', 'Design', 0, 0, 1500000, 'Toko', 7, 0, 0, '2018-05-18 08:13:17', 'custom', 0, '15', ''),
(144, 143, 974, 56, 11, '2018-05-18 00:00:00', '2018-06-01 00:00:00', 569000, 350000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 0.6, 'Emas Putih', 75, 'Ruby Star', 1.42, '', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '17', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 35000, '0', 'Kuku', '', 'Manual', 0, 0, 350000, 'Toko', 7, 0, 0, '2018-05-18 08:13:32', 'custom', 0, '15-18', ''),
(145, 144, 975, 79, 11, '2018-05-16 00:00:00', '2018-05-31 00:00:00', 569000, 250000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3, 0.6, 'Emas Putih', 70, 'Hijau Lumut', 1.55, 'Tidak Tahan', 'Bagus', 'Kurang dari 6', 'Mulus', '', '', 0, 0, '', 0, 0, 'Putih', 30000, '0', 'Tanam', 'Buat Liontin, Model Lady Diana', 'Manual', 0, 0, 250000, 'Toko', 7, 0, 0, '2018-05-18 08:15:28', 'custom', 0, '3', ''),
(146, 145, 976, 79, 11, '2018-05-16 00:00:00', '2018-05-31 00:00:00', 569000, 250000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3, 0.6, 'Emas Putih', 70, 'Bacan', 0.61, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Putih', 30000, '0', 'Bungkus', '', 'Manual', 0, 0, 250000, 'Toko', 77, 0, 0, '2018-05-18 08:15:46', 'custom', 0, '3', 'Buat Liontin, Model Lady Diana, Pakai cz'),
(147, 146, 977, 83, 19, '2018-05-16 00:00:00', '2018-06-22 00:00:00', 16000, 650000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Perak', 92.5, '0', 0, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', '', '17.5 dan 15.5', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 50000, '0', 'Tanam', '', 'Inject', 0, 0, 0, 'Perseorangan', 0, 0, 0, '2018-05-18 06:43:34', 'tempahan', 0, '5', 'Sepasang Cincin Kawin, Model CK 22, lASER NAMA cowok \"M\" ,Cewek\"S\"'),
(148, 147, 978, 72, 19, '2018-05-16 00:00:00', '2018-05-31 00:00:00', 569000, 900000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 13, 1, 'Emas Putih', 75, 'Obsidian Merah', 1.19, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Sompel', '16', '', 0, 0, '', 0, 0, 'Putih + doff Putih + Pen Kuning', 45000, '0', 'Mangkok Kuku', '', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 06:47:01', 'tempahan', 0, '13', 'Cincin Cowok , Model Seperti Contoh'),
(149, 148, 979, 84, 19, '2018-05-14 00:00:00', '2018-05-28 00:00:00', 491000, 850000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 13, 1, 'Emas Putih', 70, 'Crysoberyl Alexadrit', 0.6, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '18.5', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 50000, '0', 'Mangkok Kuku', '', 'Design', 0, 0, 0, 'Perseorangan', 0, 0, 0, '2018-05-18 06:49:55', 'tempahan', 0, '13', '0'),
(150, 149, 984, 73, 19, '2018-05-15 00:00:00', '2018-05-22 00:00:00', 569000, 400000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3, 0.6, 'Emas Putih', 70, 'Crysoberyl', 0.51, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '15', '', 0, 0, 'PRQ', 0, 3500, 'Putih', 35000, '0', 'Kuku', 'Cincin Cewek Model Lady Diana samping mau ada 3 pcs cz, pakai cz', 'Manual', 0, 0, 400000, 'Toko', 7, 0, 0, '2018-05-18 07:45:27', 'custom', 0, '3-4', ''),
(151, 150, 985, 50, 19, '2018-05-17 00:00:00', '2018-05-31 00:00:00', 569000, 800000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3, 1, 'Rose Gold', 75, '', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Rosegold + Enamel Hitam', 80000, '0', '', '', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 07:02:31', 'tempahan', 0, '3', ''),
(152, 151, 986, 33, 19, '2018-04-02 00:00:00', '2018-04-16 00:00:00', 569000, 1500000, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 45, 1, 'Rose Gold', 70, '0', 0, '', '', '', '', '6.2 x 5.5', '', 0, 0, '', 0, 0, 'RoseGold', 0, '0', '', 'Gelang Hermes Piramida, Max 45 gr, Cap P.750+berat Total Berlian', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 07:06:18', 'tempahan', 0, '45', ''),
(153, 152, 987, 33, 19, '2018-05-15 00:00:00', '2018-06-01 00:00:00', 569000, 300000, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 0, 'Rose Gold', 70, 'Batu Siong Cing', 0, 'Tidak Tahan', '', '', '', '12.5', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '0', '', '', 'Manual', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 07:09:08', 'tempahan', 0, '5-7', ''),
(154, 153, 988, 33, 19, '2018-05-15 00:00:00', '2018-05-29 00:00:00', 569000, 0, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 12, 0, 'Emas Putih', 70, '0', 0, '', '', '', '', 'panjang 17.5', '', 0, 0, '', 0, 0, 'Putih', 0, '', '', 'Sisik Naga 2 pcs, L = 0.5, p= 17.5 dan 16.5, ikuti Foto', 'Manual', 0, 0, 0, 'Toko', 9, 0, 0, '2018-05-18 07:12:23', 'tempahan', 0, '12', ''),
(155, 154, 989, 33, 19, '2018-05-15 00:00:00', '2018-05-29 00:00:00', 569000, 250000, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 0.5, 'Emas Putih', 70, 'Batu Putih Gambar buDHA', 0, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Putih', 25000, '0', 'Kuku', '', 'Manual', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 07:15:28', 'tempahan', 0, '0', ''),
(157, 155, 991, 33, 19, '2018-05-15 00:00:00', '2018-05-29 00:00:00', 569000, 750000, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Rose Gold', 70, 'Pasir Emas', 0, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Mulus', '12.5', '', 0, 0, '', 0, 0, 'RoseGold', 25000, '0', 'Kuku', 'Model Cincin Cewek, Ikuti Contoh, Mau Pakai CZ', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 07:32:47', 'tempahan', 0, '3-5', ''),
(158, 156, 992, 33, 19, '2018-05-15 00:00:00', '2018-05-29 00:00:00', 569000, 1350000, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Rose Gold', 70, '0', 0, '', '', '', '', 'kecil', '', 0, 0, '', 0, 0, 'RoseGold', 0, '0', '', 'Gelang Romawi (Tidak Pakai Enamel), Romawi Mau Lubang)', 'Design', 0, 0, 0, 'Toko', 0, 0, 0, '2018-05-18 08:00:04', 'tempahan', 0, '0', ''),
(159, 157, 993, 33, 11, '2018-05-17 00:00:00', '2018-05-31 00:00:00', 569000, 800000, 0, 569000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, '', 0, '', '', '', '', '3 cm', '', 0, 0, '', 0, 0, 'Putih', 35000, '', 'Kuku', 'Liontin Mistikal Pakai Cantolan', 'Design', 0, 0, 800000, 'Toko', 7, 0, 0, '2018-05-18 08:06:12', 'custom', 0, '', ''),
(160, 158, 994, 33, 19, '2018-05-15 00:00:00', '2018-05-29 00:00:00', 569000, 300000, 0, 569000, 0, '1', 1, 5000, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0.4, 'Emas Kuning', 70, '0', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Kuning', 15000, '', 'Kuku', '', 'Design', 0, 0, 300000, 'Toko', 5, 0, 0, '2018-05-18 08:09:28', 'custom', 0, '0', 'Anting Tusuk 4 Kuku , Dat. Gelang Berat Emas Gelang 11.85 gr'),
(161, 159, 995, 33, 11, '2018-05-15 00:00:00', '2018-05-29 00:00:00', 569000, 300000, 0, 569000, 0, '5', 0, 5000, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 2, 'Emas Putih', 70, '0', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Putih', 15000, '', 'Kuku', '', 'Design', 0, 0, 300000, 'Toko', 5, 0, 0, '2018-05-18 08:12:48', 'custom', 0, '0', 'Anting Tusuk 4 Kuku , Dat. Gelang Berat Emas Gelang 11.85 gr'),
(162, 166, 996, 33, 11, '2018-05-17 00:00:00', '2018-05-31 00:00:00', 569000, 700000, 0, 569000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, 'Bacan Oval', 5.4, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Mulus', '21', '', 0, 0, '', 0, 0, 'Putih + Doff Putih', 35000, '', 'Kuku', 'Cincin cowok bacan oval, ikuti Foto', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 09:42:30', 'tempahan', 0, '', ''),
(163, 160, 997, 33, 11, '2018-05-17 00:00:00', '2018-05-31 00:00:00', 569000, 650000, 0, 569000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 18, 1, 'Emas Kuning', 70, '', 0, '', '', '', '', '20', '', 0, 0, '', 0, 0, 'Kuning + Dove', 35000, '', 'Bungkus', 'Cincin Cowok Segi 8', 'Design', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-18 08:15:12', 'tempahan', 0, '', ''),
(164, 161, 998, 33, 19, '2018-05-18 00:00:00', '2018-06-01 00:00:00', 569000, 700000, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 50000, '0', '', 'Liontin Nama Tabung Huang Hai Ling, Panjang Tabung 3cm tidak ikut cantolan, nama depan timbul, cantolan bisa putar 360 derajat, 5 baris CZ= 1.25cm', 'Design', 0, 0, 700000, 'Toko', 7, 0, 0, '2018-05-18 08:25:16', 'custom', 0, '0', ''),
(165, 162, 999, 33, 11, '2018-05-15 00:00:00', '2018-06-29 00:00:00', 569000, 800000, 0, 569000, 0, '', 0, 0, 'Teliti', 'Laser Huruf', '', '', '', '', 'Di cincin cewek : Haris K  Cowok : Mutia B', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Rose Gold', 70, '', 0, '', '', '', '', 'cewek : 15 Cowok : 19', '', 0, 0, 'Swarovski', 0, 3500, 'Rosegold + Dove + Pen Putih', 60000, '', 'Kuku', 'Sepasang Cincin Kawin, ', 'Design', 0, 0, 800000, 'Toko', 7, 0, 0, '2018-05-18 08:23:45', 'custom', 0, '', ''),
(166, 163, 1000, 33, 19, '2018-05-17 00:00:00', '2018-05-31 00:00:00', 569000, 750000, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, '0', 0, '', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Putih', 50000, '0', 'Kuku', 'Anting Tusuk 2 Fungsi, Pakai Skrup, Cap P.750 +B.Total Berlian, berlian poin 50 mau 2 pcs', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 08:21:35', 'tempahan', 0, '0', ''),
(167, 164, 1001, 33, 19, '2018-05-17 00:00:00', '2018-05-31 00:00:00', 569000, 450000, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 35, 0.6, 'Emas Kuning', 70, '0', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Kuning', 50000, '', '', 'Gelang kepala huruf  Fuk \"chines\"', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-18 08:28:52', 'tempahan', 0, '0', ''),
(169, 167, 1004, 85, 19, '2018-05-19 00:00:00', '2018-06-02 00:00:00', 483650, 700000, 0, 569000, 0, '25', 0, 5000, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 12, 1, 'Emas Putih', 70, 'Batu Kayu', 0.39, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Serat Kasar', '23', '', 0, 0, '', 0, 0, 'Putih + doff Putih', 45000, '0', 'Kuku', '', 'Design', 0, 0, 700000, 'Perseorangan', 0, 0, 0, '2018-05-19 03:12:15', 'custom', 0, '15-18', ''),
(170, 168, 1005, 86, 5, '2018-05-21 00:00:00', '2018-06-08 00:00:00', 569000, 600000, 0, 569000, 0, '9', 0, 5000, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3, 0.8, 'Emas Putih', 70, '', 0, '', '', '', '', '12.5', '', 0, 0, '', 0, 0, 'Putih', 30000, 'Putih Polos', 'Tanam', 'Cincin listring Berlian 9 Baris \r\nPemasangan berlian model tanam', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-21 08:58:22', 'tempahan', 0, '', ''),
(171, 169, 1006, 33, 19, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 569000, 750000, 0, 569000, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3, 1, 'Emas Putih', 70, '0', 0, 'Tahan', 'Sangat Bagus', 'Lebih dari 7', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Putih', 50000, '0', '', 'PLAT HURUF \"R\" DAN ANGKA \"8\" , DAT. GELANG 30.27 R, BAGIAN 8 DITENGAH , BAGIAN R DI KOKOT', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-22 04:55:40', 'tempahan', 0, '3-5', ''),
(172, 170, 1007, 50, 19, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 569000, 0, 0, 569000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 40, 0, 'Emas Putih', 75, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Putih', 0, '', '', '', 'Manual', 0, 0, 0, 'Toko', 7.5, 0, 0, '2018-05-22 04:57:43', 'tempahan', 0, '40', ''),
(173, 171, 1017, 87, 5, '2018-05-24 00:00:00', '2018-06-07 00:00:00', 460000, 1700000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 12, 1, 'Emas Kuning', 70, '', 0, '', '', '', '', '16', '', 0, 0, '', 0, 0, 'Kuning', 50000, 'Kuning', 'Mangkok Kuku', 'Model Ikuti Foto, Tetapi susunan batu nya microsetting', 'Design', 10000000, 2000000, 0, 'Perseorangan', 0, 0, 0, '2018-05-24 04:38:38', 'tempahan', 0, '12-15', '');
INSERT INTO `potempahan` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `keteranganEnamel`, `keteranganSlap`, `keteranganKombinasi`, `keteranganLaserHuruf`, `keteranganKodeCap`, `hargaEnamel`, `hargaSlap`, `hargaKombinasi`, `hargaLaserHuruf`, `hargaKodeCap`, `biayaTambahan`, `kuantitas`, `beratAkhir`, `susut`, `bahan`, `kadarBahan`, `namaBatu`, `beratBatu`, `batuTerhadapKruman`, `batuTerhadapPukulan`, `batuTerhadapGoresan`, `keadaanBatuTengah`, `ukuranJari`, `berlian`, `beratBerlian`, `hargaBerlian`, `batuZirkon`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `krumWarna`, `hargaKrumWarna`, `keteranganKrum`, `tipeIkatan`, `model`, `metode`, `budget`, `panjar`, `totalHarga`, `jenisCustomer`, `persenBiaya`, `selisihHarga`, `diskon`, `lastModified`, `tipeOrder`, `idStokBarang`, `estimasi`, `keteranganBatu`) VALUES
(174, 172, 1018, 88, 11, '2018-05-24 00:00:00', '2018-06-07 00:00:00', 489000, 800000, 0, 572000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Rose Gold', 75, '0', 0, '', '', '', '', '16.5', '', 0, 0, '', 0, 0, 'Rosegold + Enamel Hitam', 100000, '', '', 'Cincin Belah Rotan , Cap 750, Laser Nama I.S, Ikuti Gambar, ', 'Design', 0, 0, 0, 'Perseorangan', 0, 0, 0, '2018-05-24 05:15:51', 'tempahan', 0, '0', ''),
(175, 173, 1020, 59, 19, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 800000, 0, 572000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 10, 1, 'Emas Kuning', 70, '0', 0, '', '', '', '', '19 dan', '', 0, 0, '', 0, 0, 'Kuning', 50000, 'Standart', '', 'Model Ikuti Gambar', 'Design', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-25 03:16:56', 'tempahan', 0, '10', ''),
(176, 174, 1021, 48, 19, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 300000, 0, 572000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0.6, 'Emas Kuning', 70, '0', 0, '', '', '', '', '0', '', 0, 0, '', 0, 0, 'Kuning', 30000, '', '', 'mainan nama huruf \" RH\", Double Benang/Cz, Tinggi 2 cm', 'Manual', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-25 03:25:15', 'tempahan', 0, '0', ''),
(177, 175, 1022, 48, 11, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 457600, 250000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0.6, 'Emas Kuning', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Kuning', 20000, 'Kuning', 'Kuku', 'Mainan huruf F\r\nDouble Benang/Pakai CZ\r\nTinggi 1.5 cm', 'Manual', 0, 0, 0, 'Perseorangan', 0, 0, 0, '2018-05-25 05:23:17', 'tempahan', 0, '', ''),
(178, 176, 1023, 33, 11, '2018-05-23 00:00:00', '2018-06-01 00:00:00', 572000, 275000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Kode Cap', '', '', '', '', '', 'cap p.750', 0, 0, 0, 0, 0, 0, 1, 3, 0.6, 'Emas Putih', 70, '', 0, '', '', '', '', '14', '', 0, 0, '', 0, 0, 'Putih', 20000, 'Putih Polos', 'Kuku', 'Cincin ikuti Contoh\r\nContoh 3.48 gr\r\n', 'Manual', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:26:07', 'tempahan', 0, '3-4', ''),
(179, 177, 1024, 56, 11, '2018-05-23 00:00:00', '2018-06-12 00:00:00', 572000, 800000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Kode Cap', '', '', '', '', '', 'Cap AB.750', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 75, '', 0, '', '', '', '', '21', '', 0, 0, '', 0, 0, 'Putih', 30000, 'Putih Polos', 'Kuku', 'Cuma buat ring saja tanpa bunga nya\r\ndat.cincin 6.79 gr', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:30:23', 'tempahan', 0, '', ''),
(180, 178, 1025, 33, 11, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 1350000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 40, 1, 'Rose Gold', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '', '', 'Gelang Cartier Paku\r\nMau lebih tebal\r\n5.5 x 6.2\r\nLebar 6.2 \r\nTinggi 5.5', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:32:58', 'tempahan', 0, '40-45', ''),
(181, 179, 1026, 33, 11, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 350000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 0.6, 'Emas Putih', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Putih', 30000, 'Putih Polos', '', 'Mainan nama Tiffany\r\nDouble benang\r\n1.25 mm \r\nBerat tidak lewat dari 5 gram', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:35:19', 'tempahan', 0, '5', ''),
(182, 180, 1027, 33, 11, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 250000, 0, 572000, 0, '1', 0, 5000, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 0.5, 'Rose Gold', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '', '', 'Mainan nama Clarissa\r\n1Baris', 'Manual', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:37:32', 'tempahan', 0, '5', ''),
(183, 181, 1028, 33, 19, '2018-05-25 00:00:00', '2018-06-08 00:00:00', 572000, 1000000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1.2, 'Emas Putih', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Putih + Rosegold', 30000, 'Putih untuk emas putih, rosegold untuk emas rosegold', '', 'Buat Ring 4 Pasang\r\n2 Pasang Emas Putih\r\n2 Pasang Emas Rosegold', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:45:26', 'tempahan', 0, '', ''),
(184, 182, 1029, 33, 11, '2018-05-23 00:00:00', '2018-05-31 00:00:00', 572000, 800000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Rose Gold', 70, '', 0, '', '', '', '', '10', '', 0, 0, '', 0, 0, 'rose gold', 40000, 'Rosegold', 'Kuku', 'Cincin mistikal\r\nIkuti Font Pelangi/ vaneta', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:47:45', 'tempahan', 0, '', ''),
(185, 183, 1030, 88, 11, '2018-05-24 00:00:00', '2018-06-07 00:00:00', 572000, 800000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Enamel,Laser Huruf,Kode Cap', '', 'enamel hitam', '', '', 'Laser I.S.', '750', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Rose Gold', 75, '', 0, '', '', '', '', '16.5', '', 0, 0, '', 0, 0, 'rose gold', 100000, 'Rosegold + Enamel Hitam', '', 'Cincin belah rotan', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:50:52', 'tempahan', 0, '', ''),
(186, 184, 1031, 61, 37, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 1500000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Putih', 75, '', 0, '', '', '', '', '14.5', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '', 'Kuku', 'Cincin cewek \r\nModel seperti foto\r\nPakai berlian sendiri', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 05:57:06', 'tempahan', 0, '5-6', ''),
(187, 185, 1032, 49, 37, '2018-05-23 00:00:00', '2018-06-08 00:00:00', 572000, 1800000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Enamel', '', 'Krum putih enamel hitam', '', '', '', '', 100000, 0, 0, 0, 0, 0, 1, 25, 1.5, 'Emas Putih', 75, '', 0, '', '', '', '', '20', '', 0, 0, '', 0, 0, 'Putih', 0, 'Krum putih enamel hitam', '', 'Cincin cowok \r\nModel ikuti seperti contoh \r\nBuat Penutup dalam\r\nDatang contoh 1 Cincin perak', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 06:00:28', 'tempahan', 0, '25-30', ''),
(188, 186, 1033, 49, 37, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 1250000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Kuning', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Kuning', 40000, 'Kuning', 'Kuku', 'Liontin \r\nKuku tebal\r\nBerlian kena pinggang batu\r\nbatu sompel dibagian gerigi', 'Design', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-25 06:02:59', 'tempahan', 0, 'sesuiakan', ''),
(189, 187, 1034, 49, 37, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 750000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Kuning', 70, 'Zamrud', 0.57, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', '', '18', '', 0, 0, '', 0, 0, 'Kuning + Dove kuning', 50000, 'Kuning + Dove kuning', 'Kuku', 'Cincin cowok\r\nModel seperti Foto', 'Design', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-25 06:05:52', 'tempahan', 0, 'sesuiakan', ''),
(190, 188, 1035, 79, 37, '2018-05-23 00:00:00', '2018-06-06 00:00:00', 572000, 275000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 10, 0.5, 'Emas Kuning', 70, 'Lavendrer', 1.84, 'Tahan', 'Sangat Bagus', '6,5 Sampai 7,5', 'Mulus', '10', '', 0, 0, '', 0, 0, 'Kuning', 40000, 'Kuning Polos', 'Bungkus', 'Cincin cowok \r\nModel Seperti contih\r\ndat. contoh 1 pcs cincincowok  8.90 gr', 'Manual', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-25 06:08:56', 'tempahan', 0, '10', ''),
(191, 189, 1036, 89, 54, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 486200, 700000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 4, 1, 'Emas Putih', 70, '', 0, '', '', '', '', '9.5 dan 18', '', 0, 0, '', 0, 0, 'Kuning + Dove putih', 50000, 'Kuning + Dove putih', 'Tanam', 'Cincin kawin sepasang\r\nCK 20', 'Inject', 0, 2000000, 0, 'Perseorangan', 0, 0, 0, '2018-05-25 07:23:52', 'tempahan', 0, '2-5', ''),
(192, 190, 1037, 33, 11, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 572000, 1350000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Emas Putih', 70, 'Topas Sintetis', 1.27, '', 'Bagus', '6,5 Sampai 7,5', 'Mulus', '4.5 x 4.9', '', 0, 0, '', 0, 0, 'Putih', 50000, 'Putih Polos', 'Kuku', '', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 07:47:23', 'tempahan', 0, '', ''),
(193, 191, 1038, 33, 11, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 572000, 750000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 16, 1, 'Emas Putih', 70, 'Batu Ruby Sintetis', 0.87, 'Tahan', 'Bagus', 'Lebih dari 7', 'Mulus', '17', '', 0, 0, '', 0, 0, 'Putih + Doff Putih', 35000, 'Putih + Doff Putih', 'Kuku', 'Cincin cowok batu ruby sintetis\r\ndatang contoh emas 7.34', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 07:50:29', 'tempahan', 0, '15-18', ''),
(194, 192, 1039, 33, 11, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 572000, 700000, 0, 572000, 0, '9', 0, 5000, 'Teliti', 'Laser Huruf', '', '', '', '', 'Apui Love Sexi', '', 0, 0, 0, 45000, 0, 0, 1, 5, 1, 'Rose Gold', 70, '', 0, '', '', '', '', '13', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '', 'Tanam', 'Cincin belah rotan\r\ndalam 9 pcs berlian\r\nikuti contoh\r\ndat. emas 4.45', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 07:53:47', 'tempahan', 0, '5', ''),
(195, 193, 1040, 33, 11, '2018-05-22 00:00:00', '2018-06-05 00:00:00', 572000, 750000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 1, 'Emas Kuning', 70, 'Giok', 1.78, 'Tidak Tahan', 'Bagus', '6,5 Sampai 7,5', 'Mulus', '21', '', 0, 0, '', 0, 0, 'Kuning + Dove kuning + Pen Putih', 40000, 'Kuning + Dove kuning + Pen Putih', 'Bungkus', 'Cincin cowok batu giok', 'Design', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-25 07:56:14', 'tempahan', 0, '15', ''),
(196, 194, 1041, 72, 11, '2018-05-21 00:00:00', '2018-06-04 00:00:00', 572000, 900000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Kuning', 70, 'Mutiara putih', 1.53, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Mulus', '13', '', 0, 0, '', 0, 0, 'merah surabaya', 45000, 'merah surabaya', '', 'Cincin cewek\r\nModel seperti contoh\r\nTusuk Jarum\r\nDat. contoh 1 Pcs cincin cewek 6.07 gr', 'Design', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-25 08:00:25', 'tempahan', 0, '5', ''),
(197, 195, 1042, 72, 11, '2018-05-21 00:00:00', '2018-06-04 00:00:00', 572000, 750000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Putih', 70, 'Mutiara hitam', 1.37, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Mulus', '12', '', 0, 0, '', 0, 0, 'Putih', 35000, 'Putih Polos', '', 'cincin cewek\r\nModel seperti contoh\r\nTusuk jarum\r\ndat. contoh 5.94 gr', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 08:02:48', 'tempahan', 0, '5', ''),
(198, 196, 1043, 33, 11, '2018-05-09 00:00:00', '2018-06-30 00:00:00', 572000, 850000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Polis Saja', 30000, '', '', 'Liontin Huruf S', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-25 08:05:20', 'tempahan', 0, '', ''),
(199, 197, 1044, 33, 19, '2018-05-26 00:00:00', '2018-06-09 00:00:00', 572000, 750000, 0, 572000, 0, '0', 0, 0, 'Teliti', 'Kode Cap', '', '', '', '', '', 'Cap P.750 + B.Swaravski + Berlian', 0, 0, 0, 0, 0, 0, 1, 5, 1, 'Emas Putih', 70, 'Swarovski', 0, 'Tahan', 'Bagus', 'Lebih dari 7', 'Mulus', '16', '', 0, 0, '', 0, 0, 'Putih', 30000, '', '', 'Cincin Cewek, ', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-26 05:36:15', 'tempahan', 0, '5', ''),
(200, 198, 1045, 38, 19, '2018-05-26 00:00:00', '2018-06-09 00:00:00', 572000, 750000, 0, 572000, 0, '0', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 1, 'Emas Putih', 70, 'Bacan', 2.22, 'Tidak Tahan', 'Cukup', '6,5 Sampai 7,5', 'Mulus', '16', '', 0, 0, '', 0, 0, 'Putih', 30000, '', 'Bungkus', 'Model BUNGKUS sudah dikomfirmasih dengan leader Andre, ', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-26 05:41:28', 'tempahan', 0, '15-18', ''),
(201, 199, 1046, 48, 37, '2018-05-24 00:00:00', '2018-06-07 00:00:00', 572000, 900000, 0, 572000, 0, '13 pcs', 0, 5000, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3, 1, 'Emas Putih', 70, '', 0, '', '', '', '', '14', '', 0, 0, '', 0, 0, 'Putih', 35000, 'Putih', 'Kuku', 'Cincin cewek\r\nModel seperti  contoh\r\n4 kuku\r\nTinggi berlian seperti contoh\r\nDat. Contih 1 cincin cewek 2.48 gr', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-26 08:13:29', 'tempahan', 0, '3-4', ''),
(202, 200, 1047, 48, 37, '2018-05-21 00:00:00', '2018-06-06 00:00:00', 572000, 700000, 0, 572000, 0, '24 pcs', 1, 5000, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 13, 1, 'Emas Putih', 70, 'Citrine', 2.12, 'Tahan', 'Cukup', '6,5 Sampai 7,5', 'Mulus', '16', '', 0, 0, '', 0, 0, 'Putih', 40000, 'Putih', 'Kuku', 'Cinci cowok\r\nModel atas clp 57\r\nModel samping clp 52', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-26 08:17:06', 'tempahan', 0, '13', ''),
(203, 201, 1048, 90, 37, '2018-05-26 00:00:00', '2018-06-09 00:00:00', 486200, 1200000, 17.62, 0, 70, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 16, 1, 'Emas Putih', 70, 'Tourmalone', 2.39, 'Tahan', 'Cukup', '6,5 Sampai 7,5', '', '20', '', 0, 0, '', 0, 0, 'Putih', 45000, 'Putih', 'Mangkok Kuku', 'Cincin cowok\r\nModel seperti gambar\r\nTebal ring 1.63 mm\r\nLebar cincin 6.71 mm\r\nRing mau lebar 6.45 mm', 'Design', 0, 0, 0, 'Perseorangan', 0, 0, 0, '2018-05-26 09:30:18', 'tempahan', 3, '15-20', 'Gerigi sedikit di pinggang batu'),
(204, 202, 1049, 49, 37, '2018-05-21 00:00:00', '2018-06-06 00:00:00', 572000, 1000000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1.5, 'Emas Kuning', 70, 'Pink dan jamrud', 1.32, 'Tidak Tahan', 'Kurang', 'Kurang dari 6', 'Sompel', '', '', 0, 0, '', 0, 0, 'Kuning', 40000, 'Kuning', 'Kuku', 'Liontin 3 baris \r\nKeliling berlian\r\nIkut gambar \r\n1. Batu petak\r\n2. Batu mata air\r\n3. Batu petak cutting\r\nBerlian kena ke badan\r\nBerlian dekat dengan batu', 'Design', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-26 08:26:47', 'tempahan', 0, 'Sesuaikan', 'Gerigi'),
(205, 203, 1050, 49, 37, '2018-05-21 00:00:00', '2018-06-06 00:00:00', 572000, 1000000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1.5, 'Emas Kuning', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Kuning', 40000, 'Kuning', 'Kuku', 'Liontin 3 baris\r\nBerlian kena ke badan\r\nBerlian dekat dengan batu', 'Design', 0, 0, 0, 'Toko', 5, 0, 0, '2018-05-26 08:29:36', 'tempahan', 0, 'Sesuaikan', ''),
(206, 204, 1051, 52, 37, '2018-05-21 00:00:00', '2018-05-31 00:00:00', 572000, 350000, 0, 572000, 0, '', 0, 0, 'Teliti', 'Laser Huruf', '', '', '', '', 'Cewek : TYI  cowok : MAD', '', 0, 0, 0, 0, 0, 0, 1, 10, 0.6, 'Emas Putih', 70, '', 0, '', '', '', '', '11 dan 14', '', 0, 0, '', 0, 0, 'Putih + doff putih', 40000, 'Putih + doff putih', '', 'Sepasang cincin kawin\r\nModel seperti gambar\r\nModel jepit\r\nLebar cincin dari ujung atas ke ujung 0.7 cm', 'Manual', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-26 08:34:16', 'tempahan', 0, '10 sepasang', ''),
(207, 205, 1052, 91, 19, '2018-05-26 00:00:00', '2018-06-09 00:00:00', 572000, 850000, 0, 572000, 0, '0', 0, 0, 'Teliti', 'Kode Cap', '', '', '', '', '', '750', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 75, '', 0, '', '', '', '', '14', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '', '', 'Model C. cEWEK (Ikuti Contoh ), Dat. Contoh 7.15 gr , rANGKA Saja ', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-26 08:57:25', 'tempahan', 0, '0', ''),
(208, 206, 1053, 91, 19, '2018-05-26 00:00:00', '2018-06-09 00:00:00', 572000, 750000, 0, 572000, 0, '0', 0, 0, 'Teliti', 'Kode Cap', '', '', '', '', '', 'Cap 750', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 75, 'kecubung ', 1.74, 'Tidak Tahan', 'Kurang', '6,5 Sampai 7,5', 'Mulus', '0', '', 0, 0, '', 0, 0, 'Polis Saja', 0, '', 'Kuku', '', 'Design', 0, 0, 0, 'Toko', 7, 0, 0, '2018-05-26 08:55:47', 'tempahan', 0, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `kodeProduk` varchar(100) NOT NULL,
  `namaProduk` varchar(200) NOT NULL,
  `jenisProduk` varchar(100) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `hargaModal` int(11) NOT NULL,
  `hargaJual` int(11) NOT NULL,
  `kodeGambar` varchar(255) NOT NULL,
  `gambar1` text,
  `gambar2` text,
  `gambar3` text,
  `gambar4` text,
  `stok` int(11) DEFAULT '0',
  `statusKatalog` varchar(200) NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `kategori`, `deskripsi`, `satuan`, `hargaModal`, `hargaJual`, `kodeGambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `stok`, `statusKatalog`, `lastModified`) VALUES
(1, 'LTN-1', 'Tkm. Pelangi Mas-1-0', 'Anting', 'Tempahan', '', '', 0, 0, 'xw9bqnDJbc', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-16 07:48:16'),
(2, 'GLG-2', 'TKM Daniel-2', 'Gelang', 'Tempahan', '', '', 0, 0, 'QPncLN11zT', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-16 07:54:40'),
(3, 'TR01', 'TURA', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'N62HD46Qna', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:38'),
(4, 'RL', 'Royok Labu', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'EyMBc06W3I', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(5, 'AMTSBL', 'Mitsubhisi Labu', 'Anting', 'Massal', '', 'Pcs', 0, 0, '7tr0u4IgRw', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(6, 'MCDE1', 'Cincin Elishabet', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'bk3taansfs', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(7, 'MCDMKS01', 'Cincin Markis', 'Cincin', 'Massal', '', 'Pcs', 0, 0, '14hl9NxgyB', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(8, 'MCDB3R', 'Cincin Baris 3 Rata', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'oCpjYIowWT', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(9, 'MCDB2R', 'Cincin Baris 2 Rata', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'fTbWmQPs8T', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(10, 'MCDP', 'Cincin Padi', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'GY4sGYxDQR', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(11, 'APL', 'Anting Pita Labu', 'Anting', 'Massal', '', 'Pcs', 0, 0, '9ICt3BN62m', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(12, 'MCD SN2', 'Cincin Sisik Naga 2 gram', 'Cincin', 'Massal', '', 'Pcs', 0, 0, '8DhEgjiQ41', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(13, 'MCD SN1', 'Cincin Sisik Naga 1 gram', 'Cincin', 'Massal', '', 'Pcs', 0, 0, '1QNOMj4fwc', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(14, '5001', 'Oheng-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'F50laatwPZ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-16 08:48:30'),
(15, 'MCDSGK', 'Cincin Shogun Kuning ', 'Cincin', 'Massal', 'Berat 0.9 gr', 'Pcs', 0, 0, 'BfOopqlzHo', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(16, 'GLG-3', 'Tkm. Pelangi Mas-3', 'Gelang', 'Tempahan', '', '', 0, 0, 'mN65gT5iUZ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-16 09:32:28'),
(17, 'GLG-4', 'Tkm. Pelangi Mas-4', 'Gelang', 'Tempahan', '', '', 0, 0, 'oAF5hIpLyu', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-16 09:52:42'),
(20, 'MGL0001', 'Gelang MGL0001', 'Gelang', 'Massal', 'Berat 8', 'Pcs', 0, 0, 'BfOMGL0001', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(21, 'MGL0002', 'Gelang MGL0002', 'Gelang', 'Massal', 'Berat 7', 'Pcs', 0, 0, 'BfOMGL0002', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(22, 'MGL0003', 'Gelang MGL0003', 'Gelang', 'Massal', 'Berat 8', 'Pcs', 0, 0, 'BfOMGL0003', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(23, 'MGL0004', 'Gelang MGL0004', 'Gelang', 'Massal', 'Berat 8', 'Pcs', 0, 0, 'BfOMGL0004', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(24, 'MGL0005', 'Gelang MGL0005', 'Gelang', 'Massal', 'Berat 8', 'Pcs', 0, 0, 'BfOMGL0005', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(25, 'MGL0006', 'Gelang MGL0006', 'Gelang', 'Massal', 'Berat 8', 'Pcs', 0, 0, 'BfOMGL0006', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(26, 'MGL0007', 'Gelang MGL0007', 'Gelang', 'Massal', 'Berat 8', 'Pcs', 0, 0, 'BfOMGL0007', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(27, 'MGL0008', 'Gelang MGL0008', 'Gelang', 'Massal', 'Berat 6', 'Pcs', 0, 0, 'BfOMGL0008', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(28, 'MGL0009', 'Gelang MGL0009', 'Gelang', 'Massal', 'Berat 6', 'Pcs', 0, 0, 'BfOMGL0009', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(29, 'MGL0010', 'Gelang MGL0010', 'Gelang', 'Massal', 'Berat 6', 'Pcs', 0, 0, 'BfOMGL0010', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(30, 'MGL0011', 'Gelang MGL0011', 'Gelang', 'Massal', 'Berat 6', 'Pcs', 0, 0, 'BfOMGL0011', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(31, 'MGL0012', 'Gelang MGL0012', 'Gelang', 'Massal', 'Berat 6', 'Pcs', 0, 0, 'BfOMGL0012', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(32, 'MGL0013', 'Gelang MGL0013', 'Gelang', 'Massal', 'Berat 5', 'Pcs', 0, 0, 'BfOMGL0013', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(33, 'MGL0014', 'Gelang MGL0014', 'Gelang', 'Massal', 'Berat 10', 'Pcs', 0, 0, 'BfOMGL0014', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(34, 'MGL0015', 'Gelang MGL0015', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0015', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(35, 'MGL0016', 'Gelang MGL0016', 'Gelang', 'Massal', 'Berat 10', 'Pcs', 0, 0, 'BfOMGL0016', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(36, 'MGL0017', 'Gelang MGL0017', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0017', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(37, 'MGL0018', 'Gelang MGL0018', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0018', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(38, 'MGL0019', 'Gelang MGL0019', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0019', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(39, 'MGL0020', 'Gelang MGL0020', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0020', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(40, 'MGL0021', 'Gelang MGL0021', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0021', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(41, 'MGL0022', 'Gelang MGL0022', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0022', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(42, 'MGL0023', 'Gelang MGL0023', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0023', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(43, 'MGL0024', 'Gelang MGL0024', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0024', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(44, 'MGL0025', 'Gelang MGL0025', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0025', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(45, 'MGL0026', 'Gelang MGL0026', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0026', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(46, 'MGL0027', 'Gelang MGL0027', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0027', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(47, 'MGL0028', 'Gelang MGL0028', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0028', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(48, 'MGL0029', 'Gelang MGL0029', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0029', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(49, 'MGL0030', 'Gelang MGL0030', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0030', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(50, 'MGL0031', 'Gelang MGL0031', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0031', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(51, 'MGL0032', 'Gelang MGL0032', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0032', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(52, 'MGL0033', 'Gelang MGL0033', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0033', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(53, 'MGL0034', 'Gelang MGL0034', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0034', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(54, 'MGL0035', 'Gelang MGL0035', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0035', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(55, 'MGL0036', 'Gelang MGL0036', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0036', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(56, 'MGL0037', 'Gelang MGL0037', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0037', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(57, 'MGL0038', 'Gelang MGL0038', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0038', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(58, 'MGL0039', 'Gelang MGL0039', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0039', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(59, 'MGL0040', 'Gelang MGL0040', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0040', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(60, 'MGL0041', 'Gelang MGL0041', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0041', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(61, 'MGL0042', 'Gelang MGL0042', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0042', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(62, 'MGL0043', 'Gelang MGL0043', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0043', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(63, 'MGL0044', 'Gelang MGL0044', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0044', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(64, 'MGL0045', 'Gelang MGL0045', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0045', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(65, 'MGL0046', 'Gelang MGL0046', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0046', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(66, 'MGL0047', 'Gelang MGL0047', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0047', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(67, 'MGL0048', 'Gelang MGL0048', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0048', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(68, 'MGL0049', 'Gelang MGL0049', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0049', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(69, 'MGL0050', 'Gelang MGL0050', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0050', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(70, 'MGL0051', 'Gelang MGL0051', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0051', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(71, 'MGL0052', 'Gelang MGL0052', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0052', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(72, 'MGL0053', 'Gelang MGL0053', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0053', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(73, 'MGL0054', 'Gelang MGL0054', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0054', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(74, 'MGL0055', 'Gelang MGL0055', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0055', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(75, 'MGL0056', 'Gelang MGL0056', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0056', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(76, 'MGL0057', 'Gelang MGL0057', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0057', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(77, 'MGL0058', 'Gelang MGL0058', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0058', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(78, 'MGL0059', 'Gelang MGL0059', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0059', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(79, 'MGL0060', 'Gelang MGL0060', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0060', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(80, 'MGL0061', 'Gelang MGL0061', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0061', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(81, 'MGL0062', 'Gelang MGL0062', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0062', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(82, 'MGL0063', 'Gelang MGL0063', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0063', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(83, 'MGL0064', 'Gelang MGL0064', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0064', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(84, 'MGL0065', 'Gelang MGL0065', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0065', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(85, 'MGL0066', 'Gelang MGL0066', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0066', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(86, 'MGL0067', 'Gelang MGL0067', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0067', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(87, 'MGL0068', 'Gelang MGL0068', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0068', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(88, 'MGL0069', 'Gelang MGL0069', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0069', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(89, 'MGL0070', 'Gelang MGL0070', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0070', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(90, 'MGL0071', 'Gelang MGL0071', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0071', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(91, 'MGL0072', 'Gelang MGL0072', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0072', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(92, 'MGL0073', 'Gelang MGL0073', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0073', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(93, 'MGL0074', 'Gelang MGL0074', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0074', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(94, 'MGL0075', 'Gelang MGL0075', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0075', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(95, 'MGL0076', 'Gelang MGL0076', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0076', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(96, 'MGL0077', 'Gelang MGL0077', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0077', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(97, 'MGL0078', 'Gelang MGL0078', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0078', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(98, 'MGL0079', 'Gelang MGL0079', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0079', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(99, 'MGL0080', 'Gelang MGL0080', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0080', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(100, 'MGL0081', 'Gelang MGL0081', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0081', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(101, 'MGL0082', 'Gelang MGL0082', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0082', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(102, 'MGL0083', 'Gelang MGL0083', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0083', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(103, 'MGL0084', 'Gelang MGL0084', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0084', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(104, 'MGL0085', 'Gelang MGL0085', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0085', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(105, 'MGL0086', 'Gelang MGL0086', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0086', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(106, 'MGL0087', 'Gelang MGL0087', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0087', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(107, 'MGL0088', 'Gelang MGL0088', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0088', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(108, 'MGL0089', 'Gelang MGL0089', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0089', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(109, 'MGL0090', 'Gelang MGL0090', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0090', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(110, 'MGL0091', 'Gelang MGL0091', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0091', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(111, 'MGL0092', 'Gelang MGL0092', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0092', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(112, 'MGL0093', 'Gelang MGL0093', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0093', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(113, 'MGL0094', 'Gelang MGL0094', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0094', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(114, 'MGL0095', 'Gelang MGL0095', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0095', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(115, 'MGL0096', 'Gelang MGL0096', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0096', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(116, 'MGL0097', 'Gelang MGL0097', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0097', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(117, 'MGL0098', 'Gelang MGL0098', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0098', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(118, 'MGL0099', 'Gelang MGL0099', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0099', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(119, 'MGL0100', 'Gelang MGL0100', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0100', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(120, 'MGL0101', 'Gelang MGL0101', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0101', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(121, 'MGL0102', 'Gelang MGL0102', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0102', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(122, 'MGL0103', 'Gelang MGL0103', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0103', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(123, 'MGL0104', 'Gelang MGL0104', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0104', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(124, 'MGL0105', 'Gelang MGL0105', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0105', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(125, 'MGL0106', 'Gelang MGL0106', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0106', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(126, 'MGL0107', 'Gelang MGL0107', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0107', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(127, 'MGL0108', 'Gelang MGL0108', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0108', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(128, 'MGL0109', 'Gelang MGL0109', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0109', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(129, 'MGL0110', 'Gelang MGL0110', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0110', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(130, 'MGL0111', 'Gelang MGL0111', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0111', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(131, 'MGL0112', 'Gelang MGL0112', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0112', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(132, 'MGL0113', 'Gelang MGL0113', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0113', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(133, 'MGL0114', 'Gelang MGL0114', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0114', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(134, 'MGL0115', 'Gelang MGL0115', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0115', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(135, 'MGL0116', 'Gelang MGL0116', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0116', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(136, 'MGL0117', 'Gelang MGL0117', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0117', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(137, 'MGL0118', 'Gelang MGL0118', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0118', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(138, 'MGL0119', 'Gelang MGL0119', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0119', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(139, 'MGL0120', 'Gelang MGL0120', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0120', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(140, 'MGL0121', 'Gelang MGL0121', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0121', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(141, 'MGL0122', 'Gelang MGL0122', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0122', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(142, 'MGL0123', 'Gelang MGL0123', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0123', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(143, 'MGL0124', 'Gelang MGL0124', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0124', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(144, 'MGL0125', 'Gelang MGL0125', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0125', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(145, 'MGL0126', 'Gelang MGL0126', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0126', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(146, 'MGL0127', 'Gelang MGL0127', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0127', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(147, 'MGL0128', 'Gelang MGL0128', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0128', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(148, 'MGL0129', 'Gelang MGL0129', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0129', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(149, 'MGL0130', 'Gelang MGL0130', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0130', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(150, 'MGL0131', 'Gelang MGL0131', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0131', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(151, 'MGL0132', 'Gelang MGL0132', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0132', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(152, 'MGL0133', 'Gelang MGL0133', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0133', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(153, 'MGL0134', 'Gelang MGL0134', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0134', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(154, 'MGL0135', 'Gelang MGL0135', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0135', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(155, 'MGL0136', 'Gelang MGL0136', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0136', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(156, 'MGL0137', 'Gelang MGL0137', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0137', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(157, 'MGL0138', 'Gelang MGL0138', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0138', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(158, 'MGL0139', 'Gelang MGL0139', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0139', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(159, 'MGL0140', 'Gelang MGL0140', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0140', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(160, 'MGL0141', 'Gelang MGL0141', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0141', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(161, 'MGL0142', 'Gelang MGL0142', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0142', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(162, 'MGL0143', 'Gelang MGL0143', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0143', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(163, 'MGL0144', 'Gelang MGL0144', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0144', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(164, 'MGL0145', 'Gelang MGL0145', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0145', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(165, 'MGL0146', 'Gelang MGL0146', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0146', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(166, 'MGL0147', 'Gelang MGL0147', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0147', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(167, 'MGL0148', 'Gelang MGL0148', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0148', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(168, 'MGL0149', 'Gelang MGL0149', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0149', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(169, 'MGL0150', 'Gelang MGL0150', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0150', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(170, 'MGL0151', 'Gelang MGL0151', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0151', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(171, 'MGL0152', 'Gelang MGL0152', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0152', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(172, 'MGL0153', 'Gelang MGL0153', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0153', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(173, 'MGL0154', 'Gelang MGL0154', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0154', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(174, 'MGL0155', 'Gelang MGL0155', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0155', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(175, 'MGL0156', 'Gelang MGL0156', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0156', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(176, 'MGL0157', 'Gelang MGL0157', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0157', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(177, 'MGL0158', 'Gelang MGL0158', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0158', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(178, 'MGL0159', 'Gelang MGL0159', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0159', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(179, 'MGL0160', 'Gelang MGL0160', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'BfOMGL0160', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(180, 'MCD0001', 'Cincin Mata MCD0001', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0001', NULL, NULL, NULL, NULL, 1, 'Tidak Tampil', '0000-00-00 00:00:00'),
(181, 'MCD0002', 'Cincin Mata MCD0002', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0002', NULL, NULL, NULL, NULL, 2, 'Tidak Tampil', '0000-00-00 00:00:00'),
(182, 'MCD0003', 'Cincin Mata MCD0003', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0003', NULL, NULL, NULL, NULL, 3, 'Tidak Tampil', '0000-00-00 00:00:00'),
(183, 'MCD0004', 'Cincin Mata MCD0004', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0004', NULL, NULL, NULL, NULL, 4, 'Tidak Tampil', '0000-00-00 00:00:00'),
(184, 'MCD0005', 'Cincin Mata MCD0005', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0005', NULL, NULL, NULL, NULL, 5, 'Tidak Tampil', '0000-00-00 00:00:00'),
(185, 'MCD0006', 'Cincin Mata MCD0006', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0006', NULL, NULL, NULL, NULL, 6, 'Tidak Tampil', '0000-00-00 00:00:00'),
(186, 'MCD0007', 'Cincin Mata MCD0007', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0007', NULL, NULL, NULL, NULL, 7, 'Tidak Tampil', '0000-00-00 00:00:00'),
(187, 'MCD0008', 'Cincin Mata MCD0008', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0008', NULL, NULL, NULL, NULL, 8, 'Tidak Tampil', '0000-00-00 00:00:00'),
(188, 'MCD0009', 'Cincin Mata MCD0009', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0009', NULL, NULL, NULL, NULL, 9, 'Tidak Tampil', '0000-00-00 00:00:00'),
(189, 'MCD0010', 'Cincin Mata MCD0010', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0010', NULL, NULL, NULL, NULL, 10, 'Tidak Tampil', '0000-00-00 00:00:00'),
(190, 'MCD0011', 'Cincin Mata MCD0011', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0011', NULL, NULL, NULL, NULL, 11, 'Tidak Tampil', '0000-00-00 00:00:00'),
(191, 'MCD0012', 'Cincin Mata MCD0012', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0012', NULL, NULL, NULL, NULL, 12, 'Tidak Tampil', '0000-00-00 00:00:00'),
(192, 'MCD0013', 'Cincin Mata MCD0013', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0013', NULL, NULL, NULL, NULL, 13, 'Tidak Tampil', '0000-00-00 00:00:00'),
(193, 'MCD0014', 'Cincin Mata MCD0014', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0014', NULL, NULL, NULL, NULL, 14, 'Tidak Tampil', '0000-00-00 00:00:00'),
(194, 'MCD0015', 'Cincin Mata MCD0015', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0015', NULL, NULL, NULL, NULL, 15, 'Tidak Tampil', '0000-00-00 00:00:00'),
(195, 'MCD0016', 'Cincin Mata MCD0016', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0016', NULL, NULL, NULL, NULL, 16, 'Tidak Tampil', '0000-00-00 00:00:00'),
(196, 'MCD0017', 'Cincin Mata MCD0017', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0017', NULL, NULL, NULL, NULL, 17, 'Tidak Tampil', '0000-00-00 00:00:00'),
(197, 'MCD0018', 'Cincin Mata MCD0018', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0018', NULL, NULL, NULL, NULL, 18, 'Tidak Tampil', '0000-00-00 00:00:00'),
(198, 'MCD0019', 'Cincin Mata MCD0019', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0019', NULL, NULL, NULL, NULL, 19, 'Tidak Tampil', '0000-00-00 00:00:00'),
(199, 'MCD0020', 'Cincin Mata MCD0020', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0020', NULL, NULL, NULL, NULL, 20, 'Tidak Tampil', '0000-00-00 00:00:00'),
(200, 'MCD0021', 'Cincin Mata MCD0021', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0021', NULL, NULL, NULL, NULL, 21, 'Tidak Tampil', '0000-00-00 00:00:00'),
(201, 'MCD0022', 'Cincin Mata MCD0022', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0022', NULL, NULL, NULL, NULL, 22, 'Tidak Tampil', '0000-00-00 00:00:00'),
(202, 'MCD0023', 'Cincin Mata MCD0023', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0023', NULL, NULL, NULL, NULL, 23, 'Tidak Tampil', '0000-00-00 00:00:00'),
(203, 'MCD0024', 'Cincin Mata MCD0024', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0024', NULL, NULL, NULL, NULL, 24, 'Tidak Tampil', '0000-00-00 00:00:00'),
(204, 'MCD0025', 'Cincin Mata MCD0025', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0025', NULL, NULL, NULL, NULL, 25, 'Tidak Tampil', '0000-00-00 00:00:00'),
(205, 'MCD0026', 'Cincin Mata MCD0026', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0026', NULL, NULL, NULL, NULL, 26, 'Tidak Tampil', '0000-00-00 00:00:00'),
(206, 'MCD0027', 'Cincin Mata MCD0027', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0027', NULL, NULL, NULL, NULL, 27, 'Tidak Tampil', '0000-00-00 00:00:00'),
(207, 'MCD0028', 'Cincin Mata MCD0028', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0028', NULL, NULL, NULL, NULL, 28, 'Tidak Tampil', '0000-00-00 00:00:00'),
(208, 'MCD0029', 'Cincin Mata MCD0029', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0029', NULL, NULL, NULL, NULL, 29, 'Tidak Tampil', '0000-00-00 00:00:00'),
(209, 'MCD0030', 'Cincin Mata MCD0030', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0030', NULL, NULL, NULL, NULL, 30, 'Tidak Tampil', '0000-00-00 00:00:00'),
(210, 'MCD0031', 'Cincin Mata MCD0031', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0031', NULL, NULL, NULL, NULL, 31, 'Tidak Tampil', '0000-00-00 00:00:00'),
(211, 'MCD0032', 'Cincin Mata MCD0032', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0032', NULL, NULL, NULL, NULL, 32, 'Tidak Tampil', '0000-00-00 00:00:00'),
(212, 'MCD0033', 'Cincin Mata MCD0033', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0033', NULL, NULL, NULL, NULL, 33, 'Tidak Tampil', '0000-00-00 00:00:00'),
(213, 'MCD0034', 'Cincin Mata MCD0034', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0034', NULL, NULL, NULL, NULL, 34, 'Tidak Tampil', '0000-00-00 00:00:00'),
(214, 'MCD0035', 'Cincin Mata MCD0035', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0035', NULL, NULL, NULL, NULL, 35, 'Tidak Tampil', '0000-00-00 00:00:00'),
(215, 'MCD0036', 'Cincin Mata MCD0036', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0036', NULL, NULL, NULL, NULL, 36, 'Tidak Tampil', '0000-00-00 00:00:00'),
(216, 'MCD0037', 'Cincin Mata MCD0037', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0037', NULL, NULL, NULL, NULL, 37, 'Tidak Tampil', '0000-00-00 00:00:00'),
(217, 'MCD0038', 'Cincin Mata MCD0038', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0038', NULL, NULL, NULL, NULL, 38, 'Tidak Tampil', '0000-00-00 00:00:00'),
(218, 'MCD0039', 'Cincin Mata MCD0039', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0039', NULL, NULL, NULL, NULL, 39, 'Tidak Tampil', '0000-00-00 00:00:00'),
(219, 'MCD0040', 'Cincin Mata MCD0040', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0040', NULL, NULL, NULL, NULL, 40, 'Tidak Tampil', '0000-00-00 00:00:00'),
(220, 'MCD0041', 'Cincin Mata MCD0041', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0041', NULL, NULL, NULL, NULL, 41, 'Tidak Tampil', '0000-00-00 00:00:00'),
(221, 'MCD0042', 'Cincin Mata MCD0042', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0042', NULL, NULL, NULL, NULL, 42, 'Tidak Tampil', '0000-00-00 00:00:00'),
(222, 'MCD0043', 'Cincin Mata MCD0043', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0043', NULL, NULL, NULL, NULL, 43, 'Tidak Tampil', '0000-00-00 00:00:00'),
(223, 'MCD0044', 'Cincin Mata MCD0044', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0044', NULL, NULL, NULL, NULL, 44, 'Tidak Tampil', '0000-00-00 00:00:00'),
(224, 'MCD0045', 'Cincin Mata MCD0045', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0045', NULL, NULL, NULL, NULL, 45, 'Tidak Tampil', '0000-00-00 00:00:00'),
(225, 'MCD0046', 'Cincin Mata MCD0046', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0046', NULL, NULL, NULL, NULL, 46, 'Tidak Tampil', '0000-00-00 00:00:00'),
(226, 'MCD0047', 'Cincin Mata MCD0047', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0047', NULL, NULL, NULL, NULL, 47, 'Tidak Tampil', '0000-00-00 00:00:00'),
(227, 'MCD0048', 'Cincin Mata MCD0048', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0048', NULL, NULL, NULL, NULL, 48, 'Tidak Tampil', '0000-00-00 00:00:00'),
(228, 'MCD0049', 'Cincin Mata MCD0049', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0049', NULL, NULL, NULL, NULL, 49, 'Tidak Tampil', '0000-00-00 00:00:00'),
(229, 'MCD0050', 'Cincin Mata MCD0050', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0050', NULL, NULL, NULL, NULL, 50, 'Tidak Tampil', '0000-00-00 00:00:00'),
(230, 'MCD0051', 'Cincin Mata MCD0051', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0051', NULL, NULL, NULL, NULL, 51, 'Tidak Tampil', '0000-00-00 00:00:00'),
(231, 'MCD0052', 'Cincin Mata MCD0052', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0052', NULL, NULL, NULL, NULL, 52, 'Tidak Tampil', '0000-00-00 00:00:00'),
(232, 'MCD0053', 'Cincin Mata MCD0053', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0053', NULL, NULL, NULL, NULL, 53, 'Tidak Tampil', '0000-00-00 00:00:00'),
(233, 'MCD0054', 'Cincin Mata MCD0054', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0054', NULL, NULL, NULL, NULL, 54, 'Tidak Tampil', '0000-00-00 00:00:00'),
(234, 'MCD0055', 'Cincin Mata MCD0055', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0055', NULL, NULL, NULL, NULL, 55, 'Tidak Tampil', '0000-00-00 00:00:00'),
(235, 'MCD0056', 'Cincin Mata MCD0056', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0056', NULL, NULL, NULL, NULL, 56, 'Tidak Tampil', '0000-00-00 00:00:00'),
(236, 'MCD0057', 'Cincin Mata MCD0057', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0057', NULL, NULL, NULL, NULL, 57, 'Tidak Tampil', '0000-00-00 00:00:00'),
(237, 'MCD0058', 'Cincin Mata MCD0058', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0058', NULL, NULL, NULL, NULL, 58, 'Tidak Tampil', '0000-00-00 00:00:00'),
(238, 'MCD0059', 'Cincin Mata MCD0059', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0059', NULL, NULL, NULL, NULL, 59, 'Tidak Tampil', '0000-00-00 00:00:00'),
(239, 'MCD0060', 'Cincin Mata MCD0060', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0060', NULL, NULL, NULL, NULL, 60, 'Tidak Tampil', '0000-00-00 00:00:00'),
(240, 'MCD0061', 'Cincin Mata MCD0061', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0061', NULL, NULL, NULL, NULL, 61, 'Tidak Tampil', '0000-00-00 00:00:00'),
(241, 'MCD0062', 'Cincin Mata MCD0062', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0062', NULL, NULL, NULL, NULL, 62, 'Tidak Tampil', '0000-00-00 00:00:00'),
(242, 'MCD0063', 'Cincin Mata MCD0063', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0063', NULL, NULL, NULL, NULL, 63, 'Tidak Tampil', '0000-00-00 00:00:00'),
(243, 'MCD0064', 'Cincin Mata MCD0064', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0064', NULL, NULL, NULL, NULL, 64, 'Tidak Tampil', '0000-00-00 00:00:00'),
(244, 'MCD0065', 'Cincin Mata MCD0065', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0065', NULL, NULL, NULL, NULL, 65, 'Tidak Tampil', '0000-00-00 00:00:00'),
(245, 'MCD0066', 'Cincin Mata MCD0066', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0066', NULL, NULL, NULL, NULL, 66, 'Tidak Tampil', '0000-00-00 00:00:00'),
(246, 'MCD0067', 'Cincin Mata MCD0067', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0067', NULL, NULL, NULL, NULL, 67, 'Tidak Tampil', '0000-00-00 00:00:00'),
(247, 'MCD0068', 'Cincin Mata MCD0068', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0068', NULL, NULL, NULL, NULL, 68, 'Tidak Tampil', '0000-00-00 00:00:00'),
(248, 'MCD0069', 'Cincin Mata MCD0069', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0069', NULL, NULL, NULL, NULL, 69, 'Tidak Tampil', '0000-00-00 00:00:00'),
(249, 'MCD0070', 'Cincin Kerawang MCD0070', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0070', NULL, NULL, NULL, NULL, 70, 'Tidak Tampil', '0000-00-00 00:00:00'),
(250, 'MCD0071', 'Cincin Kerawang MCD0071', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0071', NULL, NULL, NULL, NULL, 71, 'Tidak Tampil', '0000-00-00 00:00:00'),
(251, 'MCD0072', 'Cincin Kerawang MCD0072', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0072', NULL, NULL, NULL, NULL, 72, 'Tidak Tampil', '0000-00-00 00:00:00'),
(252, 'MCD0073', 'Cincin Kerawang MCD0073', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0073', NULL, NULL, NULL, NULL, 73, 'Tidak Tampil', '0000-00-00 00:00:00'),
(253, 'MCD0074', 'Cincin Kerawang MCD0074', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0074', NULL, NULL, NULL, NULL, 74, 'Tidak Tampil', '0000-00-00 00:00:00'),
(254, 'MCD0075', 'Cincin Kerawang MCD0075', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0075', NULL, NULL, NULL, NULL, 75, 'Tidak Tampil', '0000-00-00 00:00:00'),
(255, 'MCD0076', 'Cincin Kerawang MCD0076', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0076', NULL, NULL, NULL, NULL, 76, 'Tidak Tampil', '0000-00-00 00:00:00'),
(256, 'MCD0077', 'Cincin Kerawang MCD0077', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0077', NULL, NULL, NULL, NULL, 77, 'Tidak Tampil', '0000-00-00 00:00:00'),
(257, 'MCD0078', 'Cincin Kerawang MCD0078', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0078', NULL, NULL, NULL, NULL, 78, 'Tidak Tampil', '0000-00-00 00:00:00'),
(258, 'MCD0079', 'Cincin Mata MCD0079', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0079', NULL, NULL, NULL, NULL, 79, 'Tidak Tampil', '0000-00-00 00:00:00'),
(259, 'MCD0080', 'Cincin Mata MCD0080', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0080', NULL, NULL, NULL, NULL, 80, 'Tidak Tampil', '0000-00-00 00:00:00'),
(260, 'MCD0081', 'Cincin Mata MCD0081', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0081', NULL, NULL, NULL, NULL, 81, 'Tidak Tampil', '0000-00-00 00:00:00'),
(261, 'MCD0082', 'Cincin Mata MCD0082', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0082', NULL, NULL, NULL, NULL, 82, 'Tidak Tampil', '0000-00-00 00:00:00'),
(262, 'MCD0083', 'Cincin Mata MCD0083', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0083', NULL, NULL, NULL, NULL, 83, 'Tidak Tampil', '0000-00-00 00:00:00'),
(263, 'MCD0084', 'Cincin Mata MCD0084', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0084', NULL, NULL, NULL, NULL, 84, 'Tidak Tampil', '0000-00-00 00:00:00'),
(264, 'MCD0085', 'Cincin Mata MCD0085', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0085', NULL, NULL, NULL, NULL, 85, 'Tidak Tampil', '0000-00-00 00:00:00'),
(265, 'MCD0086', 'Cincin Mata MCD0086', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0086', NULL, NULL, NULL, NULL, 86, 'Tidak Tampil', '0000-00-00 00:00:00'),
(266, 'MCD0087', 'Cincin Mata MCD0087', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0087', NULL, NULL, NULL, NULL, 87, 'Tidak Tampil', '0000-00-00 00:00:00'),
(267, 'MCD0088', 'Cincin Mata MCD0088', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0088', NULL, NULL, NULL, NULL, 88, 'Tidak Tampil', '0000-00-00 00:00:00'),
(268, 'MCD0089', 'Cincin Mata MCD0089', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0089', NULL, NULL, NULL, NULL, 89, 'Tidak Tampil', '0000-00-00 00:00:00'),
(269, 'MCD0090', 'Cincin Mata MCD0090', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0090', NULL, NULL, NULL, NULL, 90, 'Tidak Tampil', '0000-00-00 00:00:00'),
(270, 'MCD0091', 'Cincin Mata MCD0091', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0091', NULL, NULL, NULL, NULL, 91, 'Tidak Tampil', '0000-00-00 00:00:00'),
(271, 'MCD0092', 'Cincin Mata MCD0092', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0092', NULL, NULL, NULL, NULL, 92, 'Tidak Tampil', '0000-00-00 00:00:00'),
(272, 'MCD0093', 'Cincin Mata MCD0093', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0093', NULL, NULL, NULL, NULL, 93, 'Tidak Tampil', '0000-00-00 00:00:00'),
(273, 'MCD0094', 'Cincin Mata MCD0094', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0094', NULL, NULL, NULL, NULL, 94, 'Tidak Tampil', '0000-00-00 00:00:00'),
(274, 'MCD0095', 'Cincin Mata MCD0095', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0095', NULL, NULL, NULL, NULL, 95, 'Tidak Tampil', '0000-00-00 00:00:00'),
(275, 'MCD0096', 'Cincin Mata MCD0096', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0096', NULL, NULL, NULL, NULL, 96, 'Tidak Tampil', '0000-00-00 00:00:00'),
(276, 'MCD0097', 'Cincin Mata MCD0097', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0097', NULL, NULL, NULL, NULL, 97, 'Tidak Tampil', '0000-00-00 00:00:00'),
(277, 'MCD0098', 'Cincin Mata MCD0098', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0098', NULL, NULL, NULL, NULL, 98, 'Tidak Tampil', '0000-00-00 00:00:00'),
(278, 'MCD0099', 'Cincin Mata MCD0099', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0099', NULL, NULL, NULL, NULL, 99, 'Tidak Tampil', '0000-00-00 00:00:00'),
(279, 'MCD0100', 'Cincin Mata MCD0100', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0100', NULL, NULL, NULL, NULL, 100, 'Tidak Tampil', '0000-00-00 00:00:00'),
(280, 'MCD0101', 'Cincin Mata MCD0101', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0101', NULL, NULL, NULL, NULL, 101, 'Tidak Tampil', '0000-00-00 00:00:00'),
(281, 'MCD0102', 'Cincin Mata MCD0102', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0102', NULL, NULL, NULL, NULL, 102, 'Tidak Tampil', '0000-00-00 00:00:00'),
(282, 'MCD0103', 'Cincin Mata MCD0103', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0103', NULL, NULL, NULL, NULL, 103, 'Tidak Tampil', '0000-00-00 00:00:00'),
(283, 'MCD0104', 'Cincin Mata MCD0104', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0104', NULL, NULL, NULL, NULL, 104, 'Tidak Tampil', '0000-00-00 00:00:00'),
(284, 'MCD0105', 'Cincin Mata MCD0105', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0105', NULL, NULL, NULL, NULL, 105, 'Tidak Tampil', '0000-00-00 00:00:00'),
(285, 'MCD0106', 'Cincin Mata MCD0106', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0106', NULL, NULL, NULL, NULL, 106, 'Tidak Tampil', '0000-00-00 00:00:00'),
(286, 'MCD0107', 'Cincin Mata MCD0107', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0107', NULL, NULL, NULL, NULL, 107, 'Tidak Tampil', '0000-00-00 00:00:00'),
(287, 'MCD0108', 'Cincin Mata MCD0108', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0108', NULL, NULL, NULL, NULL, 108, 'Tidak Tampil', '0000-00-00 00:00:00'),
(288, 'MCD0109', 'Cincin Mata MCD0109', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0109', NULL, NULL, NULL, NULL, 109, 'Tidak Tampil', '0000-00-00 00:00:00'),
(289, 'MCD0110', 'Cincin Mata MCD0110', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0110', NULL, NULL, NULL, NULL, 110, 'Tidak Tampil', '0000-00-00 00:00:00'),
(290, 'MCD0111', 'Cincin Mata MCD0111', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0111', NULL, NULL, NULL, NULL, 111, 'Tidak Tampil', '0000-00-00 00:00:00'),
(291, 'MCD0112', 'Cincin Mata MCD0112', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0112', NULL, NULL, NULL, NULL, 112, 'Tidak Tampil', '0000-00-00 00:00:00'),
(292, 'MCD0113', 'Cincin Mata MCD0113', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0113', NULL, NULL, NULL, NULL, 113, 'Tidak Tampil', '0000-00-00 00:00:00'),
(293, 'MCD0114', 'Cincin Mata MCD0114', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0114', NULL, NULL, NULL, NULL, 114, 'Tidak Tampil', '0000-00-00 00:00:00'),
(294, 'MCD0115', 'Cincin Mata MCD0115', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0115', NULL, NULL, NULL, NULL, 115, 'Tidak Tampil', '0000-00-00 00:00:00'),
(295, 'MCD0116', 'Cincin Mata MCD0116', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0116', NULL, NULL, NULL, NULL, 116, 'Tidak Tampil', '0000-00-00 00:00:00'),
(296, 'MCD0117', 'Cincin Mata MCD0117', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0117', NULL, NULL, NULL, NULL, 117, 'Tidak Tampil', '0000-00-00 00:00:00'),
(297, 'MCD0118', 'Cincin Mata MCD0118', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0118', NULL, NULL, NULL, NULL, 118, 'Tidak Tampil', '0000-00-00 00:00:00'),
(298, 'MCD0119', 'Cincin Mata MCD0119', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0119', NULL, NULL, NULL, NULL, 119, 'Tidak Tampil', '0000-00-00 00:00:00'),
(299, 'MCD0120', 'Cincin Mata MCD0120', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0120', NULL, NULL, NULL, NULL, 120, 'Tidak Tampil', '0000-00-00 00:00:00'),
(300, 'MCD0121', 'Cincin Mata MCD0121', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0121', NULL, NULL, NULL, NULL, 121, 'Tidak Tampil', '0000-00-00 00:00:00'),
(301, 'MCD0122', 'Cincin Mata MCD0122', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0122', NULL, NULL, NULL, NULL, 122, 'Tidak Tampil', '0000-00-00 00:00:00'),
(302, 'MCD0123', 'Cincin Mata MCD0123', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0123', NULL, NULL, NULL, NULL, 123, 'Tidak Tampil', '0000-00-00 00:00:00'),
(303, 'MCD0124', 'Cincin Kerawang MCD0124', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0124', NULL, NULL, NULL, NULL, 124, 'Tidak Tampil', '0000-00-00 00:00:00'),
(304, 'MCD0125', 'Cincin Mata MCD0125', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0125', NULL, NULL, NULL, NULL, 125, 'Tidak Tampil', '0000-00-00 00:00:00'),
(305, 'MCD0126', 'Cincin Kerawang MCD0126', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0126', NULL, NULL, NULL, NULL, 126, 'Tidak Tampil', '0000-00-00 00:00:00'),
(306, 'MCD0127', 'Cincin Kerawang MCD0127', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0127', NULL, NULL, NULL, NULL, 127, 'Tidak Tampil', '0000-00-00 00:00:00'),
(307, 'MCD0128', 'Cincin Kerawang MCD0128', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0128', NULL, NULL, NULL, NULL, 128, 'Tidak Tampil', '0000-00-00 00:00:00'),
(308, 'MCD0129', 'Cincin Kerawang MCD0129', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0129', NULL, NULL, NULL, NULL, 129, 'Tidak Tampil', '0000-00-00 00:00:00'),
(309, 'MCD0130', 'Cincin Mata MCD0130', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0130', NULL, NULL, NULL, NULL, 130, 'Tidak Tampil', '0000-00-00 00:00:00'),
(310, 'MCD0131', 'Cincin Batu MCD0131', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0131', NULL, NULL, NULL, NULL, 131, 'Tidak Tampil', '0000-00-00 00:00:00'),
(311, 'MCD0132', 'Cincin Batu MCD0132', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0132', NULL, NULL, NULL, NULL, 132, 'Tidak Tampil', '0000-00-00 00:00:00'),
(312, 'MCD0133', 'Cincin Batu MCD0133', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0133', NULL, NULL, NULL, NULL, 133, 'Tidak Tampil', '0000-00-00 00:00:00'),
(313, 'MCD0134', 'Cincin Batu MCD0134', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0134', NULL, NULL, NULL, NULL, 134, 'Tidak Tampil', '0000-00-00 00:00:00'),
(314, 'MCD0135', 'Cincin Batu MCD0135', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0135', NULL, NULL, NULL, NULL, 135, 'Tidak Tampil', '0000-00-00 00:00:00'),
(315, 'MCD0136', 'Cincin Lady Diana MCD0136', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0136', NULL, NULL, NULL, NULL, 136, 'Tidak Tampil', '0000-00-00 00:00:00'),
(316, 'MCD0137', 'Cincin Lady Diana MCD0137', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0137', NULL, NULL, NULL, NULL, 137, 'Tidak Tampil', '0000-00-00 00:00:00'),
(317, 'MCD0138', 'Cincin Batu MCD0138', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0138', NULL, NULL, NULL, NULL, 138, 'Tidak Tampil', '0000-00-00 00:00:00'),
(318, 'MCD0139', 'Cincin Batu MCD0139', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0139', NULL, NULL, NULL, NULL, 139, 'Tidak Tampil', '0000-00-00 00:00:00'),
(319, 'MCD0140', 'Cincin Batu MCD0140', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0140', NULL, NULL, NULL, NULL, 140, 'Tidak Tampil', '0000-00-00 00:00:00'),
(320, 'MCD0141', 'Cincin Batu MCD0141', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0141', NULL, NULL, NULL, NULL, 141, 'Tidak Tampil', '0000-00-00 00:00:00'),
(321, 'MCD0142', 'Cincin Lady Diana MCD0142', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0142', NULL, NULL, NULL, NULL, 142, 'Tidak Tampil', '0000-00-00 00:00:00'),
(322, 'MCD0143', 'Cincin Mata MCD0143', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0143', NULL, NULL, NULL, NULL, 143, 'Tidak Tampil', '0000-00-00 00:00:00'),
(323, 'MCD0144', 'Cincin Mata MCD0144', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0144', NULL, NULL, NULL, NULL, 144, 'Tidak Tampil', '0000-00-00 00:00:00'),
(324, 'MCD0145', 'Cincin Mata MCD0145', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0145', NULL, NULL, NULL, NULL, 145, 'Tidak Tampil', '0000-00-00 00:00:00');
INSERT INTO `produk` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `kategori`, `deskripsi`, `satuan`, `hargaModal`, `hargaJual`, `kodeGambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `stok`, `statusKatalog`, `lastModified`) VALUES
(325, 'MCD0146', 'Cincin Mata MCD0146', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0146', NULL, NULL, NULL, NULL, 146, 'Tidak Tampil', '0000-00-00 00:00:00'),
(326, 'MCD0147', 'Cincin Mata MCD0147', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0147', NULL, NULL, NULL, NULL, 147, 'Tidak Tampil', '0000-00-00 00:00:00'),
(327, 'MCD0148', 'Cincin Mata MCD0148', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0148', NULL, NULL, NULL, NULL, 148, 'Tidak Tampil', '0000-00-00 00:00:00'),
(328, 'MCD0149', 'Cincin Mata MCD0149', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0149', NULL, NULL, NULL, NULL, 149, 'Tidak Tampil', '0000-00-00 00:00:00'),
(329, 'MCD0150', 'Cincin Mata MCD0150', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0150', NULL, NULL, NULL, NULL, 150, 'Tidak Tampil', '0000-00-00 00:00:00'),
(330, 'MCD0151', 'Cincin Mata MCD0151', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0151', NULL, NULL, NULL, NULL, 151, 'Tidak Tampil', '0000-00-00 00:00:00'),
(331, 'MCD0152', 'Cincin Mata MCD0152', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0152', NULL, NULL, NULL, NULL, 152, 'Tidak Tampil', '0000-00-00 00:00:00'),
(332, 'MCD0153', 'Cincin Mata MCD0153', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0153', NULL, NULL, NULL, NULL, 153, 'Tidak Tampil', '0000-00-00 00:00:00'),
(333, 'MCD0154', 'Cincin Mata MCD0154', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0154', NULL, NULL, NULL, NULL, 154, 'Tidak Tampil', '0000-00-00 00:00:00'),
(334, 'MCD0155', 'Cincin Mata MCD0155', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0155', NULL, NULL, NULL, NULL, 155, 'Tidak Tampil', '0000-00-00 00:00:00'),
(335, 'MCD0156', 'Cincin Mata MCD0156', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0156', NULL, NULL, NULL, NULL, 156, 'Tidak Tampil', '0000-00-00 00:00:00'),
(336, 'MCD0157', 'Cincin Mata MCD0157', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0157', NULL, NULL, NULL, NULL, 157, 'Tidak Tampil', '0000-00-00 00:00:00'),
(337, 'MCD0158', 'Cincin Mata MCD0158', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0158', NULL, NULL, NULL, NULL, 158, 'Tidak Tampil', '0000-00-00 00:00:00'),
(338, 'MCD0159', 'Cincin Mata MCD0159', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0159', NULL, NULL, NULL, NULL, 159, 'Tidak Tampil', '0000-00-00 00:00:00'),
(339, 'MCD0160', 'Cincin Mata MCD0160', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0160', NULL, NULL, NULL, NULL, 160, 'Tidak Tampil', '0000-00-00 00:00:00'),
(340, 'MCD0161', 'Cincin Mata MCD0161', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0161', NULL, NULL, NULL, NULL, 161, 'Tidak Tampil', '0000-00-00 00:00:00'),
(341, 'MCD0162', 'Cincin Mata MCD0162', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0162', NULL, NULL, NULL, NULL, 162, 'Tidak Tampil', '0000-00-00 00:00:00'),
(342, 'MCD0163', 'Cincin Mata MCD0163', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0163', NULL, NULL, NULL, NULL, 163, 'Tidak Tampil', '0000-00-00 00:00:00'),
(343, 'MCD0164', 'Cincin Kerawang MCD0164', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0164', NULL, NULL, NULL, NULL, 164, 'Tidak Tampil', '0000-00-00 00:00:00'),
(344, 'MCD0165', 'Cincin Mata MCD0165', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0165', NULL, NULL, NULL, NULL, 165, 'Tidak Tampil', '0000-00-00 00:00:00'),
(345, 'MCD0166', 'Cincin Baby MCD0166', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0166', NULL, NULL, NULL, NULL, 166, 'Tidak Tampil', '0000-00-00 00:00:00'),
(346, 'MCD0167', 'Cincin Baby MCD0167', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0167', NULL, NULL, NULL, NULL, 167, 'Tidak Tampil', '0000-00-00 00:00:00'),
(347, 'MCD0168', 'Cincin Baby MCD0168', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0168', NULL, NULL, NULL, NULL, 168, 'Tidak Tampil', '0000-00-00 00:00:00'),
(348, 'MCD0169', 'Cincin Baby MCD0169', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0169', NULL, NULL, NULL, NULL, 169, 'Tidak Tampil', '0000-00-00 00:00:00'),
(349, 'MCD0170', 'Cincin Baby MCD0170', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0170', NULL, NULL, NULL, NULL, 170, 'Tidak Tampil', '0000-00-00 00:00:00'),
(350, 'MCD0171', 'Cincin Baby MCD0171', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0171', NULL, NULL, NULL, NULL, 171, 'Tidak Tampil', '0000-00-00 00:00:00'),
(351, 'MCD0172', 'Cincin Baby MCD0172', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0172', NULL, NULL, NULL, NULL, 172, 'Tidak Tampil', '0000-00-00 00:00:00'),
(352, 'MCD0173', 'Cincin Baby MCD0173', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0173', NULL, NULL, NULL, NULL, 173, 'Tidak Tampil', '0000-00-00 00:00:00'),
(353, 'MCD0174', 'Cincin Baby MCD0174', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0174', NULL, NULL, NULL, NULL, 174, 'Tidak Tampil', '0000-00-00 00:00:00'),
(354, 'MCD0175', 'Cincin Baby MCD0175', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0175', NULL, NULL, NULL, NULL, 175, 'Tidak Tampil', '0000-00-00 00:00:00'),
(355, 'MCD0176', 'Cincin Baby MCD0176', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0176', NULL, NULL, NULL, NULL, 176, 'Tidak Tampil', '0000-00-00 00:00:00'),
(356, 'MCD0177', 'Cincin Mata MCD0177', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0177', NULL, NULL, NULL, NULL, 177, 'Tidak Tampil', '0000-00-00 00:00:00'),
(357, 'MCD0178', 'Cincin Mata MCD0178', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0178', NULL, NULL, NULL, NULL, 178, 'Tidak Tampil', '0000-00-00 00:00:00'),
(358, 'MCD0179', 'Cincin Mata MCD0179', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0179', NULL, NULL, NULL, NULL, 179, 'Tidak Tampil', '0000-00-00 00:00:00'),
(359, 'MCD0180', 'Cincin Mata MCD0180', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0180', NULL, NULL, NULL, NULL, 180, 'Tidak Tampil', '0000-00-00 00:00:00'),
(360, 'MCD0181', 'Cincin Mata MCD0181', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0181', NULL, NULL, NULL, NULL, 181, 'Tidak Tampil', '0000-00-00 00:00:00'),
(361, 'MCD0182', 'Cincin Mata MCD0182', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0182', NULL, NULL, NULL, NULL, 182, 'Tidak Tampil', '0000-00-00 00:00:00'),
(362, 'MCD0183', 'Cincin Kerawang MCD0183', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0183', NULL, NULL, NULL, NULL, 183, 'Tidak Tampil', '0000-00-00 00:00:00'),
(363, 'MCD0184', 'Cincin Kerawang MCD0184', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0184', NULL, NULL, NULL, NULL, 184, 'Tidak Tampil', '0000-00-00 00:00:00'),
(364, 'MCD0185', 'Cincin Kerawang MCD0185', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0185', NULL, NULL, NULL, NULL, 185, 'Tidak Tampil', '0000-00-00 00:00:00'),
(365, 'MCD0186', 'Cincin Kerawang MCD0186', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0186', NULL, NULL, NULL, NULL, 186, 'Tidak Tampil', '0000-00-00 00:00:00'),
(366, 'MCD0187', 'Cincin Kerawang MCD0187', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0187', NULL, NULL, NULL, NULL, 187, 'Tidak Tampil', '0000-00-00 00:00:00'),
(367, 'MCD0188', 'Cincin Kerawang MCD0188', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0188', NULL, NULL, NULL, NULL, 188, 'Tidak Tampil', '0000-00-00 00:00:00'),
(368, 'MCD0189', 'Cincin Kerawang MCD0189', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0189', NULL, NULL, NULL, NULL, 189, 'Tidak Tampil', '0000-00-00 00:00:00'),
(369, 'MCD0190', 'Cincin Kerawang MCD0190', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0190', NULL, NULL, NULL, NULL, 190, 'Tidak Tampil', '0000-00-00 00:00:00'),
(370, 'MCD0191', 'Cincin Kerawang MCD0191', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0191', NULL, NULL, NULL, NULL, 191, 'Tidak Tampil', '0000-00-00 00:00:00'),
(371, 'MCD0192', 'Cincin Kerawang MCD0192', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0192', NULL, NULL, NULL, NULL, 192, 'Tidak Tampil', '0000-00-00 00:00:00'),
(372, 'MCD0193', 'Cincin Kerawang MCD0193', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0193', NULL, NULL, NULL, NULL, 193, 'Tidak Tampil', '0000-00-00 00:00:00'),
(373, 'MCD0194', 'Cincin Kerawang MCD0194', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0194', NULL, NULL, NULL, NULL, 194, 'Tidak Tampil', '0000-00-00 00:00:00'),
(374, 'MCD0195', 'Cincin Kerawang MCD0195', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0195', NULL, NULL, NULL, NULL, 195, 'Tidak Tampil', '0000-00-00 00:00:00'),
(375, 'MCD0196', 'Cincin Mata MCD0196', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0196', NULL, NULL, NULL, NULL, 196, 'Tidak Tampil', '0000-00-00 00:00:00'),
(376, 'MCD0197', 'Cincin Mata MCD0197', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0197', NULL, NULL, NULL, NULL, 197, 'Tidak Tampil', '0000-00-00 00:00:00'),
(377, 'MCD0198', 'Cincin Mata MCD0198', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0198', NULL, NULL, NULL, NULL, 198, 'Tidak Tampil', '0000-00-00 00:00:00'),
(378, 'MCD0199', 'Cincin Mata MCD0199', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0199', NULL, NULL, NULL, NULL, 199, 'Tidak Tampil', '0000-00-00 00:00:00'),
(379, 'MCD0200', 'Cincin Mata MCD0200', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0200', NULL, NULL, NULL, NULL, 200, 'Tidak Tampil', '0000-00-00 00:00:00'),
(380, 'MCD0201', 'Cincin Mata MCD0201', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0201', NULL, NULL, NULL, NULL, 201, 'Tidak Tampil', '0000-00-00 00:00:00'),
(381, 'MCD0202', 'Cincin Mata MCD0202', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0202', NULL, NULL, NULL, NULL, 202, 'Tidak Tampil', '0000-00-00 00:00:00'),
(382, 'MCD0203', 'Cincin Mata MCD0203', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0203', NULL, NULL, NULL, NULL, 203, 'Tidak Tampil', '0000-00-00 00:00:00'),
(383, 'MCD0204', 'Cincin Mata MCD0204', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0204', NULL, NULL, NULL, NULL, 204, 'Tidak Tampil', '0000-00-00 00:00:00'),
(384, 'MCD0205', 'Cincin Kerawang MCD0205', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0205', NULL, NULL, NULL, NULL, 205, 'Tidak Tampil', '0000-00-00 00:00:00'),
(385, 'MCD0206', 'Cincin Kerawang MCD0206', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0206', NULL, NULL, NULL, NULL, 206, 'Tidak Tampil', '0000-00-00 00:00:00'),
(386, 'MCD0207', 'Cincin Kerawang MCD0207', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0207', NULL, NULL, NULL, NULL, 207, 'Tidak Tampil', '0000-00-00 00:00:00'),
(387, 'MCD0208', 'Cincin Kerawang MCD0208', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0208', NULL, NULL, NULL, NULL, 208, 'Tidak Tampil', '0000-00-00 00:00:00'),
(388, 'MCD0209', 'Cincin Kerawang MCD0209', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0209', NULL, NULL, NULL, NULL, 209, 'Tidak Tampil', '0000-00-00 00:00:00'),
(389, 'MCD0210', 'Cincin Kerawang MCD0210', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0210', NULL, NULL, NULL, NULL, 210, 'Tidak Tampil', '0000-00-00 00:00:00'),
(390, 'MCD0211', 'Cincin Kerawang MCD0211', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0211', NULL, NULL, NULL, NULL, 211, 'Tidak Tampil', '0000-00-00 00:00:00'),
(391, 'MCD0212', 'Cincin Kerawang MCD0212', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0212', NULL, NULL, NULL, NULL, 212, 'Tidak Tampil', '0000-00-00 00:00:00'),
(392, 'MCD0213', 'Cincin Kerawang MCD0213', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0213', NULL, NULL, NULL, NULL, 213, 'Tidak Tampil', '0000-00-00 00:00:00'),
(393, 'MCD0214', 'Cincin Kerawang MCD0214', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0214', NULL, NULL, NULL, NULL, 214, 'Tidak Tampil', '0000-00-00 00:00:00'),
(394, 'MCD0215', 'Cincin Kerawang MCD0215', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0215', NULL, NULL, NULL, NULL, 215, 'Tidak Tampil', '0000-00-00 00:00:00'),
(395, 'MCD0216', 'Cincin Kerawang MCD0216', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0216', NULL, NULL, NULL, NULL, 216, 'Tidak Tampil', '0000-00-00 00:00:00'),
(396, 'MCD0217', 'Cincin Kerawang MCD0217', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0217', NULL, NULL, NULL, NULL, 217, 'Tidak Tampil', '0000-00-00 00:00:00'),
(397, 'MCD0218', 'Cincin Kerawang MCD0218', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0218', NULL, NULL, NULL, NULL, 218, 'Tidak Tampil', '0000-00-00 00:00:00'),
(398, 'MCD0219', 'Cincin Kerawang MCD0219', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0219', NULL, NULL, NULL, NULL, 219, 'Tidak Tampil', '0000-00-00 00:00:00'),
(399, 'MCD0220', 'Cincin Kerawang MCD0220', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0220', NULL, NULL, NULL, NULL, 220, 'Tidak Tampil', '0000-00-00 00:00:00'),
(400, 'MCD0221', 'Cincin Kerawang MCD0221', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0221', NULL, NULL, NULL, NULL, 221, 'Tidak Tampil', '0000-00-00 00:00:00'),
(401, 'MCD0222', 'Cincin Kerawang MCD0222', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0222', NULL, NULL, NULL, NULL, 222, 'Tidak Tampil', '0000-00-00 00:00:00'),
(402, 'MCD0223', 'Cincin Kerawang MCD0223', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0223', NULL, NULL, NULL, NULL, 223, 'Tidak Tampil', '0000-00-00 00:00:00'),
(403, 'MCD0224', 'Cincin Kerawang MCD0224', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0224', NULL, NULL, NULL, NULL, 224, 'Tidak Tampil', '0000-00-00 00:00:00'),
(404, 'MCD0225', 'Cincin Kerawang MCD0225', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0225', NULL, NULL, NULL, NULL, 225, 'Tidak Tampil', '0000-00-00 00:00:00'),
(405, 'MCD0226', 'Cincin Kerawang MCD0226', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0226', NULL, NULL, NULL, NULL, 226, 'Tidak Tampil', '0000-00-00 00:00:00'),
(406, 'MCD0227', 'Cincin Kerawang MCD0227', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0227', NULL, NULL, NULL, NULL, 227, 'Tidak Tampil', '0000-00-00 00:00:00'),
(407, 'MCD0228', 'Cincin Kerawang MCD0228', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0228', NULL, NULL, NULL, NULL, 228, 'Tidak Tampil', '0000-00-00 00:00:00'),
(408, 'MCD0229', 'Cincin Kerawang MCD0229', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0229', NULL, NULL, NULL, NULL, 229, 'Tidak Tampil', '0000-00-00 00:00:00'),
(409, 'MCD0230', 'Cincin Kerawang MCD0230', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0230', NULL, NULL, NULL, NULL, 230, 'Tidak Tampil', '0000-00-00 00:00:00'),
(410, 'MCD0231', 'Cincin Kerawang MCD0231', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0231', NULL, NULL, NULL, NULL, 231, 'Tidak Tampil', '0000-00-00 00:00:00'),
(411, 'MCD0232', 'Cincin Mata MCD0232', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0232', NULL, NULL, NULL, NULL, 232, 'Tidak Tampil', '0000-00-00 00:00:00'),
(412, 'MCD0233', 'Cincin Mata MCD0233', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0233', NULL, NULL, NULL, NULL, 233, 'Tidak Tampil', '0000-00-00 00:00:00'),
(413, 'MCD0234', 'Cincin Mata MCD0234', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0234', NULL, NULL, NULL, NULL, 234, 'Tidak Tampil', '0000-00-00 00:00:00'),
(414, 'MCD0235', 'Cincin Mata MCD0235', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0235', NULL, NULL, NULL, NULL, 235, 'Tidak Tampil', '0000-00-00 00:00:00'),
(415, 'MCD0236', 'Cincin Mata MCD0236', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0236', NULL, NULL, NULL, NULL, 236, 'Tidak Tampil', '0000-00-00 00:00:00'),
(416, 'MCD0237', 'Cincin Mata MCD0237', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0237', NULL, NULL, NULL, NULL, 237, 'Tidak Tampil', '0000-00-00 00:00:00'),
(417, 'MCD0238', 'Cincin Mata MCD0238', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0238', NULL, NULL, NULL, NULL, 238, 'Tidak Tampil', '0000-00-00 00:00:00'),
(418, 'MCD0239', 'Cincin Mata MCD0239', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0239', NULL, NULL, NULL, NULL, 239, 'Tidak Tampil', '0000-00-00 00:00:00'),
(419, 'MCD0240', 'Cincin Mata MCD0240', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0240', NULL, NULL, NULL, NULL, 240, 'Tidak Tampil', '0000-00-00 00:00:00'),
(420, 'MCD0241', 'Cincin Mata MCD0241', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0241', NULL, NULL, NULL, NULL, 241, 'Tidak Tampil', '0000-00-00 00:00:00'),
(421, 'MCD0242', 'Cincin Mata MCD0242', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0242', NULL, NULL, NULL, NULL, 242, 'Tidak Tampil', '0000-00-00 00:00:00'),
(422, 'MCD0243', 'Cincin Mata MCD0243', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0243', NULL, NULL, NULL, NULL, 243, 'Tidak Tampil', '0000-00-00 00:00:00'),
(423, 'MCD0244', 'Cincin Mata MCD0244', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0244', NULL, NULL, NULL, NULL, 244, 'Tidak Tampil', '0000-00-00 00:00:00'),
(424, 'MCD0245', 'Cincin Mata MCD0245', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0245', NULL, NULL, NULL, NULL, 245, 'Tidak Tampil', '0000-00-00 00:00:00'),
(425, 'MCD0246', 'Cincin Mata MCD0246', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0246', NULL, NULL, NULL, NULL, 246, 'Tidak Tampil', '0000-00-00 00:00:00'),
(426, 'MCD0247', 'Cincin Mata MCD0247', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0247', NULL, NULL, NULL, NULL, 247, 'Tidak Tampil', '0000-00-00 00:00:00'),
(427, 'MCD0248', 'Cincin Mata MCD0248', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0248', NULL, NULL, NULL, NULL, 248, 'Tidak Tampil', '0000-00-00 00:00:00'),
(428, 'MCD0249', 'Cincin Mata MCD0249', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0249', NULL, NULL, NULL, NULL, 249, 'Tidak Tampil', '0000-00-00 00:00:00'),
(429, 'MCD0250', 'Cincin Mata MCD0250', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0250', NULL, NULL, NULL, NULL, 250, 'Tidak Tampil', '0000-00-00 00:00:00'),
(430, 'MCD0251', 'Cincin Mata MCD0251', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0251', NULL, NULL, NULL, NULL, 251, 'Tidak Tampil', '0000-00-00 00:00:00'),
(431, 'MCD0252', 'Cincin Kerawang MCD0252', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0252', NULL, NULL, NULL, NULL, 252, 'Tidak Tampil', '0000-00-00 00:00:00'),
(432, 'MCD0253', 'Cincin Kerawang MCD0253', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0253', NULL, NULL, NULL, NULL, 253, 'Tidak Tampil', '0000-00-00 00:00:00'),
(433, 'MCD0254', 'Cincin Kerawang MCD0254', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0254', NULL, NULL, NULL, NULL, 254, 'Tidak Tampil', '0000-00-00 00:00:00'),
(434, 'MCD0255', 'Cincin Kerawang MCD0255', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0255', NULL, NULL, NULL, NULL, 255, 'Tidak Tampil', '0000-00-00 00:00:00'),
(435, 'MCD0256', 'Cincin Kerawang MCD0256', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0256', NULL, NULL, NULL, NULL, 256, 'Tidak Tampil', '0000-00-00 00:00:00'),
(436, 'MCD0257', 'Cincin Kerawang MCD0257', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0257', NULL, NULL, NULL, NULL, 257, 'Tidak Tampil', '0000-00-00 00:00:00'),
(437, 'MCD0258', 'Cincin Kerawang MCD0258', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0258', NULL, NULL, NULL, NULL, 258, 'Tidak Tampil', '0000-00-00 00:00:00'),
(438, 'MCD0259', 'Cincin Kerawang MCD0259', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0259', NULL, NULL, NULL, NULL, 259, 'Tidak Tampil', '0000-00-00 00:00:00'),
(439, 'MCD0260', 'Cincin Kerawang MCD0260', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0260', NULL, NULL, NULL, NULL, 260, 'Tidak Tampil', '0000-00-00 00:00:00'),
(440, 'MCD0261', 'Cincin Kerawang MCD0261', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0261', NULL, NULL, NULL, NULL, 261, 'Tidak Tampil', '0000-00-00 00:00:00'),
(441, 'MCD0262', 'Cincin Kerawang MCD0262', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0262', NULL, NULL, NULL, NULL, 262, 'Tidak Tampil', '0000-00-00 00:00:00'),
(442, 'MCD0263', 'Cincin Kerawang MCD0263', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0263', NULL, NULL, NULL, NULL, 263, 'Tidak Tampil', '0000-00-00 00:00:00'),
(443, 'MCD0264', 'Cincin Kerawang MCD0264', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0264', NULL, NULL, NULL, NULL, 264, 'Tidak Tampil', '0000-00-00 00:00:00'),
(444, 'MCD0265', 'Cincin Kerawang MCD0265', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0265', NULL, NULL, NULL, NULL, 265, 'Tidak Tampil', '0000-00-00 00:00:00'),
(445, 'MCD0266', 'Cincin Kerawang MCD0266', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0266', NULL, NULL, NULL, NULL, 266, 'Tidak Tampil', '0000-00-00 00:00:00'),
(446, 'MCD0267', 'Cincin Kerawang MCD0267', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0267', NULL, NULL, NULL, NULL, 267, 'Tidak Tampil', '0000-00-00 00:00:00'),
(447, 'MCD0268', 'Cincin Kerawang MCD0268', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0268', NULL, NULL, NULL, NULL, 268, 'Tidak Tampil', '0000-00-00 00:00:00'),
(448, 'MCD0269', 'Cincin Kerawang MCD0269', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0269', NULL, NULL, NULL, NULL, 269, 'Tidak Tampil', '0000-00-00 00:00:00'),
(449, 'MCD0270', 'Cincin Kerawang MCD0270', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0270', NULL, NULL, NULL, NULL, 270, 'Tidak Tampil', '0000-00-00 00:00:00'),
(450, 'MCD0271', 'Cincin Kerawang MCD0271', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0271', NULL, NULL, NULL, NULL, 271, 'Tidak Tampil', '0000-00-00 00:00:00'),
(451, 'MCD0272', 'Cincin Kerawang MCD0272', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0272', NULL, NULL, NULL, NULL, 272, 'Tidak Tampil', '0000-00-00 00:00:00'),
(452, 'MCD0273', 'Cincin Kerawang MCD0273', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0273', NULL, NULL, NULL, NULL, 273, 'Tidak Tampil', '0000-00-00 00:00:00'),
(453, 'MCD0274', 'Cincin Kerawang MCD0274', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0274', NULL, NULL, NULL, NULL, 274, 'Tidak Tampil', '0000-00-00 00:00:00'),
(454, 'MCD0275', 'Cincin Kerawang MCD0275', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0275', NULL, NULL, NULL, NULL, 275, 'Tidak Tampil', '0000-00-00 00:00:00'),
(455, 'MCD0276', 'Cincin Kerawang MCD0276', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0276', NULL, NULL, NULL, NULL, 276, 'Tidak Tampil', '0000-00-00 00:00:00'),
(456, 'MCD0277', 'Cincin Kerawang MCD0277', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0277', NULL, NULL, NULL, NULL, 277, 'Tidak Tampil', '0000-00-00 00:00:00'),
(457, 'MCD0278', 'Cincin Kerawang MCD0278', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0278', NULL, NULL, NULL, NULL, 278, 'Tidak Tampil', '0000-00-00 00:00:00'),
(458, 'MCD0279', 'Cincin Kerawang MCD0279', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0279', NULL, NULL, NULL, NULL, 279, 'Tidak Tampil', '0000-00-00 00:00:00'),
(459, 'MCD0280', 'Cincin Kerawang MCD0280', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0280', NULL, NULL, NULL, NULL, 280, 'Tidak Tampil', '0000-00-00 00:00:00'),
(460, 'MCD0281', 'Cincin Kerawang MCD0281', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0281', NULL, NULL, NULL, NULL, 281, 'Tidak Tampil', '0000-00-00 00:00:00'),
(461, 'MCD0282', 'Cincin Mata MCD0282', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0282', NULL, NULL, NULL, NULL, 282, 'Tidak Tampil', '0000-00-00 00:00:00'),
(462, 'MCD0283', 'Cincin Mata MCD0283', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0283', NULL, NULL, NULL, NULL, 283, 'Tidak Tampil', '0000-00-00 00:00:00'),
(463, 'MCD0284', 'Cincin Mata MCD0284', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0284', NULL, NULL, NULL, NULL, 284, 'Tidak Tampil', '0000-00-00 00:00:00'),
(464, 'MCD0285', 'Cincin Mata MCD0285', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0285', NULL, NULL, NULL, NULL, 285, 'Tidak Tampil', '0000-00-00 00:00:00'),
(465, 'MCD0286', 'Cincin Mata MCD0286', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0286', NULL, NULL, NULL, NULL, 286, 'Tidak Tampil', '0000-00-00 00:00:00'),
(466, 'MCD0287', 'Cincin Mata MCD0287', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0287', NULL, NULL, NULL, NULL, 287, 'Tidak Tampil', '0000-00-00 00:00:00'),
(467, 'MCD0288', 'Cincin Mata MCD0288', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0288', NULL, NULL, NULL, NULL, 288, 'Tidak Tampil', '0000-00-00 00:00:00'),
(468, 'MCD0289', 'Cincin Mata MCD0289', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0289', NULL, NULL, NULL, NULL, 289, 'Tidak Tampil', '0000-00-00 00:00:00'),
(469, 'MCD0290', 'Cincin Mata MCD0290', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0290', NULL, NULL, NULL, NULL, 290, 'Tidak Tampil', '0000-00-00 00:00:00'),
(470, 'MCD0291', 'Cincin Mata MCD0291', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0291', NULL, NULL, NULL, NULL, 291, 'Tidak Tampil', '0000-00-00 00:00:00'),
(471, 'MCD0292', 'Cincin Mata MCD0292', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0292', NULL, NULL, NULL, NULL, 292, 'Tidak Tampil', '0000-00-00 00:00:00'),
(472, 'MCD0293', 'Cincin Mata MCD0293', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0293', NULL, NULL, NULL, NULL, 293, 'Tidak Tampil', '0000-00-00 00:00:00'),
(473, 'MCD0294', 'Cincin Mata MCD0294', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0294', NULL, NULL, NULL, NULL, 294, 'Tidak Tampil', '0000-00-00 00:00:00'),
(474, 'MCD0295', 'Cincin Kerawang MCD0295', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0295', NULL, NULL, NULL, NULL, 295, 'Tidak Tampil', '0000-00-00 00:00:00'),
(475, 'MCD0296', 'Cincin Mata MCD0296', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0296', NULL, NULL, NULL, NULL, 296, 'Tidak Tampil', '0000-00-00 00:00:00'),
(476, 'MCD0297', 'Cincin Kerawang MCD0297', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0297', NULL, NULL, NULL, NULL, 297, 'Tidak Tampil', '0000-00-00 00:00:00'),
(477, 'MCD0298', 'Cincin Kerawang MCD0298', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0298', NULL, NULL, NULL, NULL, 298, 'Tidak Tampil', '0000-00-00 00:00:00'),
(478, 'MCD0299', 'Cincin Kerawang MCD0299', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0299', NULL, NULL, NULL, NULL, 299, 'Tidak Tampil', '0000-00-00 00:00:00'),
(479, 'MCD0300', 'Cincin Mata MCD0300', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0300', NULL, NULL, NULL, NULL, 300, 'Tidak Tampil', '0000-00-00 00:00:00'),
(480, 'MCD0301', 'Cincin Kerawang MCD0301', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0301', NULL, NULL, NULL, NULL, 301, 'Tidak Tampil', '0000-00-00 00:00:00'),
(481, 'MCD0302', 'Cincin Kerawang MCD0302', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0302', NULL, NULL, NULL, NULL, 302, 'Tidak Tampil', '0000-00-00 00:00:00'),
(482, 'MCD0303', 'Cincin Kerawang MCD0303', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0303', NULL, NULL, NULL, NULL, 303, 'Tidak Tampil', '0000-00-00 00:00:00'),
(483, 'MCD0304', 'Cincin Kerawang MCD0304', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0304', NULL, NULL, NULL, NULL, 304, 'Tidak Tampil', '0000-00-00 00:00:00'),
(484, 'MCD0305', 'Cincin Kerawang MCD0305', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0305', NULL, NULL, NULL, NULL, 305, 'Tidak Tampil', '0000-00-00 00:00:00'),
(485, 'MCD0306', 'Cincin Kerawang MCD0306', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0306', NULL, NULL, NULL, NULL, 306, 'Tidak Tampil', '0000-00-00 00:00:00'),
(486, 'MCD0307', 'Cincin Kerawang MCD0307', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0307', NULL, NULL, NULL, NULL, 307, 'Tidak Tampil', '0000-00-00 00:00:00'),
(487, 'MCD0308', 'Cincin Mata MCD0308', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0308', NULL, NULL, NULL, NULL, 308, 'Tidak Tampil', '0000-00-00 00:00:00'),
(488, 'MCD0309', 'Cincin Mata MCD0309', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0309', NULL, NULL, NULL, NULL, 309, 'Tidak Tampil', '0000-00-00 00:00:00'),
(489, 'MCD0310', 'Cincin Mata MCD0310', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0310', NULL, NULL, NULL, NULL, 310, 'Tidak Tampil', '0000-00-00 00:00:00'),
(490, 'MCD0311', 'Cincin Mata MCD0311', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0311', NULL, NULL, NULL, NULL, 311, 'Tidak Tampil', '0000-00-00 00:00:00'),
(491, 'MCD0312', 'Cincin Mata MCD0312', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0312', NULL, NULL, NULL, NULL, 312, 'Tidak Tampil', '0000-00-00 00:00:00'),
(492, 'MCD0313', 'Cincin Mata MCD0313', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0313', NULL, NULL, NULL, NULL, 313, 'Tidak Tampil', '0000-00-00 00:00:00'),
(493, 'MCD0314', 'Cincin Mata MCD0314', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0314', NULL, NULL, NULL, NULL, 314, 'Tidak Tampil', '0000-00-00 00:00:00'),
(494, 'MCD0315', 'Cincin Mata MCD0315', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0315', NULL, NULL, NULL, NULL, 315, 'Tidak Tampil', '0000-00-00 00:00:00'),
(495, 'MCD0316', 'Cincin Mata MCD0316', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0316', NULL, NULL, NULL, NULL, 316, 'Tidak Tampil', '0000-00-00 00:00:00'),
(496, 'MCD0317', 'Cincin Kerawang MCD0317', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0317', NULL, NULL, NULL, NULL, 317, 'Tidak Tampil', '0000-00-00 00:00:00'),
(497, 'MCD0318', 'Cincin Kerawang MCD0318', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0318', NULL, NULL, NULL, NULL, 318, 'Tidak Tampil', '0000-00-00 00:00:00'),
(498, 'MCD0319', 'Cincin Kerawang MCD0319', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0319', NULL, NULL, NULL, NULL, 319, 'Tidak Tampil', '0000-00-00 00:00:00'),
(499, 'MCD0320', 'Cincin Kerawang MCD0320', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0320', NULL, NULL, NULL, NULL, 320, 'Tidak Tampil', '0000-00-00 00:00:00'),
(500, 'MCD0321', 'Cincin Kerawang MCD0321', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0321', NULL, NULL, NULL, NULL, 321, 'Tidak Tampil', '0000-00-00 00:00:00'),
(501, 'MCD0322', 'Cincin Kerawang MCD0322', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0322', NULL, NULL, NULL, NULL, 322, 'Tidak Tampil', '0000-00-00 00:00:00'),
(502, 'MCD0323', 'Cincin Kerawang MCD0323', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0323', NULL, NULL, NULL, NULL, 323, 'Tidak Tampil', '0000-00-00 00:00:00'),
(503, 'MCD0324', 'Cincin Kerawang MCD0324', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0324', NULL, NULL, NULL, NULL, 324, 'Tidak Tampil', '0000-00-00 00:00:00'),
(504, 'MCD0325', 'Cincin Kerawang MCD0325', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0325', NULL, NULL, NULL, NULL, 325, 'Tidak Tampil', '0000-00-00 00:00:00'),
(505, 'MCD0326', 'Cincin Kerawang MCD0326', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0326', NULL, NULL, NULL, NULL, 326, 'Tidak Tampil', '0000-00-00 00:00:00'),
(506, 'MCD0327', 'Cincin Kerawang MCD0327', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0327', NULL, NULL, NULL, NULL, 327, 'Tidak Tampil', '0000-00-00 00:00:00'),
(507, 'MCD0328', 'Cincin Kerawang MCD0328', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0328', NULL, NULL, NULL, NULL, 328, 'Tidak Tampil', '0000-00-00 00:00:00'),
(508, 'MCD0329', 'Cincin Kerawang MCD0329', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0329', NULL, NULL, NULL, NULL, 329, 'Tidak Tampil', '0000-00-00 00:00:00'),
(509, 'MCD0330', 'Cincin Kerawang MCD0330', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0330', NULL, NULL, NULL, NULL, 330, 'Tidak Tampil', '0000-00-00 00:00:00'),
(510, 'MCD0331', 'Cincin Kerawang MCD0331', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0331', NULL, NULL, NULL, NULL, 331, 'Tidak Tampil', '0000-00-00 00:00:00'),
(511, 'MCD0332', 'Cincin Kerawang MCD0332', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0332', NULL, NULL, NULL, NULL, 332, 'Tidak Tampil', '0000-00-00 00:00:00'),
(512, 'MCD0333', 'Cincin Kerawang MCD0333', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0333', NULL, NULL, NULL, NULL, 333, 'Tidak Tampil', '0000-00-00 00:00:00'),
(513, 'MCD0334', 'Cincin Kerawang MCD0334', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0334', NULL, NULL, NULL, NULL, 334, 'Tidak Tampil', '0000-00-00 00:00:00'),
(514, 'MCD0335', 'Cincin Kerawang MCD0335', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0335', NULL, NULL, NULL, NULL, 335, 'Tidak Tampil', '0000-00-00 00:00:00'),
(515, 'MCD0336', 'Cincin Kerawang MCD0336', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0336', NULL, NULL, NULL, NULL, 336, 'Tidak Tampil', '0000-00-00 00:00:00'),
(516, 'MCD0337', 'Cincin Kerawang MCD0337', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0337', NULL, NULL, NULL, NULL, 337, 'Tidak Tampil', '0000-00-00 00:00:00'),
(517, 'MCD0338', 'Cincin Kerawang MCD0338', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0338', NULL, NULL, NULL, NULL, 338, 'Tidak Tampil', '0000-00-00 00:00:00'),
(518, 'MCD0339', 'Cincin Kerawang MCD0339', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0339', NULL, NULL, NULL, NULL, 339, 'Tidak Tampil', '0000-00-00 00:00:00'),
(519, 'MCD0340', 'Cincin Kerawang MCD0340', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0340', NULL, NULL, NULL, NULL, 340, 'Tidak Tampil', '0000-00-00 00:00:00'),
(520, 'MCD0341', 'Cincin Kerawang MCD0341', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0341', NULL, NULL, NULL, NULL, 341, 'Tidak Tampil', '0000-00-00 00:00:00'),
(521, 'MCD0342', 'Cincin Kerawang MCD0342', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0342', NULL, NULL, NULL, NULL, 342, 'Tidak Tampil', '0000-00-00 00:00:00'),
(522, 'MCD0343', 'Cincin Kerawang MCD0343', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0343', NULL, NULL, NULL, NULL, 343, 'Tidak Tampil', '0000-00-00 00:00:00'),
(523, 'MCD0344', 'Cincin Kerawang MCD0344', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0344', NULL, NULL, NULL, NULL, 344, 'Tidak Tampil', '0000-00-00 00:00:00'),
(524, 'MCD0345', 'Cincin Kerawang MCD0345', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0345', NULL, NULL, NULL, NULL, 345, 'Tidak Tampil', '0000-00-00 00:00:00'),
(525, 'MCD0346', 'Cincin Kerawang MCD0346', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0346', NULL, NULL, NULL, NULL, 346, 'Tidak Tampil', '0000-00-00 00:00:00'),
(526, 'MCD0347', 'Cincin Kerawang MCD0347', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0347', NULL, NULL, NULL, NULL, 347, 'Tidak Tampil', '0000-00-00 00:00:00'),
(527, 'MCD0348', 'Cincin Kerawang MCD0348', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0348', NULL, NULL, NULL, NULL, 348, 'Tidak Tampil', '0000-00-00 00:00:00'),
(528, 'MCD0349', 'Cincin Kerawang MCD0349', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0349', NULL, NULL, NULL, NULL, 349, 'Tidak Tampil', '0000-00-00 00:00:00'),
(529, 'MCD0350', 'Cincin Kerawang MCD0350', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0350', NULL, NULL, NULL, NULL, 350, 'Tidak Tampil', '0000-00-00 00:00:00'),
(530, 'MCD0351', 'Cincin Kerawang MCD0351', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0351', NULL, NULL, NULL, NULL, 351, 'Tidak Tampil', '0000-00-00 00:00:00'),
(531, 'MCD0352', 'Cincin Kerawang MCD0352', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0352', NULL, NULL, NULL, NULL, 352, 'Tidak Tampil', '0000-00-00 00:00:00'),
(532, 'MCD0353', 'Cincin Kerawang MCD0353', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0353', NULL, NULL, NULL, NULL, 353, 'Tidak Tampil', '0000-00-00 00:00:00'),
(533, 'MCD0354', 'Cincin Kerawang MCD0354', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0354', NULL, NULL, NULL, NULL, 354, 'Tidak Tampil', '0000-00-00 00:00:00'),
(534, 'MCD0355', 'Cincin Kerawang MCD0355', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0355', NULL, NULL, NULL, NULL, 355, 'Tidak Tampil', '0000-00-00 00:00:00'),
(535, 'MCD0356', 'Cincin Kerawang MCD0356', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0356', NULL, NULL, NULL, NULL, 356, 'Tidak Tampil', '0000-00-00 00:00:00'),
(536, 'MCD0357', 'Cincin Kerawang MCD0357', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0357', NULL, NULL, NULL, NULL, 357, 'Tidak Tampil', '0000-00-00 00:00:00'),
(537, 'MCD0358', 'Cincin Kerawang MCD0358', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0358', NULL, NULL, NULL, NULL, 358, 'Tidak Tampil', '0000-00-00 00:00:00'),
(538, 'MCD0359', 'Cincin Kerawang MCD0359', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0359', NULL, NULL, NULL, NULL, 359, 'Tidak Tampil', '0000-00-00 00:00:00'),
(539, 'MCD0360', 'Cincin Kerawang MCD0360', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0360', NULL, NULL, NULL, NULL, 360, 'Tidak Tampil', '0000-00-00 00:00:00'),
(540, 'MCD0361', 'Cincin Kerawang MCD0361', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0361', NULL, NULL, NULL, NULL, 361, 'Tidak Tampil', '0000-00-00 00:00:00'),
(541, 'MCD0362', 'Cincin Kerawang MCD0362', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0362', NULL, NULL, NULL, NULL, 362, 'Tidak Tampil', '0000-00-00 00:00:00'),
(542, 'MCD0363', 'Cincin Kerawang MCD0363', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0363', NULL, NULL, NULL, NULL, 363, 'Tidak Tampil', '0000-00-00 00:00:00'),
(543, 'MCD0364', 'Cincin Kerawang MCD0364', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0364', NULL, NULL, NULL, NULL, 364, 'Tidak Tampil', '0000-00-00 00:00:00'),
(544, 'MCD0365', 'Cincin Kerawang MCD0365', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0365', NULL, NULL, NULL, NULL, 365, 'Tidak Tampil', '0000-00-00 00:00:00'),
(545, 'MCD0366', 'Cincin Kerawang MCD0366', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0366', NULL, NULL, NULL, NULL, 366, 'Tidak Tampil', '0000-00-00 00:00:00'),
(546, 'MCD0367', 'Cincin Kerawang MCD0367', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0367', NULL, NULL, NULL, NULL, 367, 'Tidak Tampil', '0000-00-00 00:00:00'),
(547, 'MCD0368', 'Cincin Kerawang MCD0368', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0368', NULL, NULL, NULL, NULL, 368, 'Tidak Tampil', '0000-00-00 00:00:00'),
(548, 'MCD0369', 'Cincin Kerawang MCD0369', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0369', NULL, NULL, NULL, NULL, 369, 'Tidak Tampil', '0000-00-00 00:00:00'),
(549, 'MCD0370', 'Cincin Kerawang MCD0370', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0370', NULL, NULL, NULL, NULL, 370, 'Tidak Tampil', '0000-00-00 00:00:00'),
(550, 'MCD0371', 'Cincin Kerawang MCD0371', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0371', NULL, NULL, NULL, NULL, 371, 'Tidak Tampil', '0000-00-00 00:00:00'),
(551, 'MCD0372', 'Cincin Kerawang MCD0372', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0372', NULL, NULL, NULL, NULL, 372, 'Tidak Tampil', '0000-00-00 00:00:00'),
(552, 'MCD0373', 'Cincin Kerawang MCD0373', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0373', NULL, NULL, NULL, NULL, 373, 'Tidak Tampil', '0000-00-00 00:00:00'),
(553, 'MCD0374', 'Cincin Kerawang MCD0374', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0374', NULL, NULL, NULL, NULL, 374, 'Tidak Tampil', '0000-00-00 00:00:00'),
(554, 'MCD0375', 'Cincin Kerawang MCD0375', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0375', NULL, NULL, NULL, NULL, 375, 'Tidak Tampil', '0000-00-00 00:00:00'),
(555, 'MCD0376', 'Cincin Kerawang MCD0376', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0376', NULL, NULL, NULL, NULL, 376, 'Tidak Tampil', '0000-00-00 00:00:00'),
(556, 'MCD0377', 'Cincin Kerawang MCD0377', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0377', NULL, NULL, NULL, NULL, 377, 'Tidak Tampil', '0000-00-00 00:00:00'),
(557, 'MCD0378', 'Cincin Kerawang MCD0378', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0378', NULL, NULL, NULL, NULL, 378, 'Tidak Tampil', '0000-00-00 00:00:00'),
(558, 'MCD0379', 'Cincin Kerawang MCD0379', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0379', NULL, NULL, NULL, NULL, 379, 'Tidak Tampil', '0000-00-00 00:00:00'),
(559, 'MCD0380', 'Cincin Kerawang MCD0380', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0380', NULL, NULL, NULL, NULL, 380, 'Tidak Tampil', '0000-00-00 00:00:00'),
(560, 'MCD0381', 'Cincin Kerawang MCD0381', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0381', NULL, NULL, NULL, NULL, 381, 'Tidak Tampil', '0000-00-00 00:00:00'),
(561, 'MCD0382', 'Cincin Kerawang MCD0382', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0382', NULL, NULL, NULL, NULL, 382, 'Tidak Tampil', '0000-00-00 00:00:00'),
(562, 'MCD0383', 'Cincin Kerawang MCD0383', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0383', NULL, NULL, NULL, NULL, 383, 'Tidak Tampil', '0000-00-00 00:00:00'),
(563, 'MCD0384', 'Cincin Kerawang MCD0384', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0384', NULL, NULL, NULL, NULL, 384, 'Tidak Tampil', '0000-00-00 00:00:00'),
(564, 'MCD0385', 'Cincin Kerawang MCD0385', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0385', NULL, NULL, NULL, NULL, 385, 'Tidak Tampil', '0000-00-00 00:00:00'),
(565, 'MCD0386', 'Cincin Kerawang MCD0386', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0386', NULL, NULL, NULL, NULL, 386, 'Tidak Tampil', '0000-00-00 00:00:00'),
(566, 'MCD0387', 'Cincin Kerawang MCD0387', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0387', NULL, NULL, NULL, NULL, 387, 'Tidak Tampil', '0000-00-00 00:00:00'),
(567, 'MCD0388', 'Cincin Kerawang MCD0388', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0388', NULL, NULL, NULL, NULL, 388, 'Tidak Tampil', '0000-00-00 00:00:00'),
(568, 'MCD0389', 'Cincin Kerawang MCD0389', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0389', NULL, NULL, NULL, NULL, 389, 'Tidak Tampil', '0000-00-00 00:00:00'),
(569, 'MCD0390', 'Cincin Kerawang MCD0390', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0390', NULL, NULL, NULL, NULL, 390, 'Tidak Tampil', '0000-00-00 00:00:00'),
(570, '5002', 'Bg Aris-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'Ped2DbTtkx', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-16 10:47:26'),
(571, 'MCD RA1B', 'Cincin Rante Atas 1 Baris', 'Cincin', 'Massal', 'Berat 2 graman', 'Pcs', 0, 0, 'glecvEQkuq', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(572, '5003', 'Ko Eddy Ayong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'zbdvBTmLZV', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 04:41:50'),
(573, '5004', 'Ko Eddy Ayong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'wo4yGdHtvc', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 04:46:27'),
(575, 'MLT0001', 'Liontin MLT0001', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00001', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(576, 'MLT0002', 'Liontin MLT0002', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00002', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(577, 'MLT0003', 'Liontin MLT0003', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00003', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(578, 'MLT0004', 'Liontin MLT0004', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00004', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(579, 'MLT0005', 'Liontin MLT0005', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00005', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(580, 'MLT0006', 'Liontin MLT0006', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00006', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(581, 'MLT0007', 'Liontin MLT0007', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00007', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(582, 'MLT0008', 'Liontin MLT0008', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00008', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(583, 'MLT0009', 'Liontin MLT0009', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00009', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(584, 'MLT0010', 'Liontin MLT0010', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00010', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(585, 'MLT0011', 'Liontin MLT0011', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00011', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(586, 'MLT0012', 'Liontin MLT0012', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00012', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(587, 'MLT0013', 'Liontin MLT0013', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00013', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(588, 'MLT0014', 'Liontin MLT0014', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00014', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(589, 'MLT0015', 'Liontin MLT0015', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00015', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(590, 'MLT0016', 'Liontin MLT0016', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00016', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(591, 'MLT0017', 'Liontin MLT0017', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00017', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(592, 'MLT0018', 'Liontin MLT0018', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00018', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(593, 'MLT0019', 'Liontin MLT0019', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00019', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(594, 'MLT0020', 'Liontin MLT0020', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00020', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(595, 'MLT0021', 'Liontin MLT0021', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00021', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(596, 'MLT0022', 'Liontin MLT0022', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00022', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(597, 'MLT0023', 'Liontin MLT0023', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00023', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(598, 'MLT0024', 'Liontin MLT0024', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00024', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(599, 'MLT0025', 'Liontin MLT0025', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00025', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(600, 'MLT0026', 'Liontin MLT0026', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00026', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(601, 'MLT0027', 'Liontin MLT0027', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00027', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(602, 'MLT0028', 'Liontin MLT0028', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00028', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(603, 'MLT0029', 'Liontin MLT0029', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00029', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(604, 'MLT0030', 'Liontin MLT0030', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00030', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(605, 'MLT0031', 'Liontin MLT0031', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00031', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(606, 'MLT0032', 'Liontin MLT0032', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00032', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(607, 'MLT0033', 'Liontin MLT0033', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00033', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(608, 'MLT0034', 'Liontin MLT0034', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00034', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(609, 'MLT0035', 'Liontin MLT0035', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00035', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(610, 'MLT0036', 'Liontin MLT0036', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00036', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(611, 'MLT0037', 'Liontin MLT0037', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00037', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(612, 'MLT0038', 'Liontin MLT0038', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00038', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(613, 'MLT0039', 'Liontin MLT0039', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00039', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(614, 'MLT0040', 'Liontin MLT0040', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00040', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(615, 'MLT0041', 'Liontin MLT0041', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00041', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(616, 'MLT0042', 'Liontin MLT0042', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00042', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(617, 'MLT0043', 'Liontin MLT0043', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00043', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(618, 'MLT0044', 'Liontin MLT0044', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00044', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(619, 'MLT0045', 'Liontin MLT0045', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00045', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(620, 'MLT0046', 'Liontin MLT0046', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00046', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(621, 'MLT0047', 'Liontin MLT0047', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00047', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(622, 'MLT0048', 'Liontin MLT0048', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00048', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(623, 'MLT0049', 'Liontin MLT0049', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00049', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(624, 'MLT0050', 'Liontin MLT0050', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00050', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(625, 'MLT0051', 'Liontin MLT0051', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00051', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(626, 'MLT0052', 'Liontin MLT0052', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00052', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(627, 'MLT0053', 'Liontin MLT0053', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00053', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(628, 'MLT0054', 'Liontin MLT0054', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00054', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(629, 'MLT0055', 'Liontin MLT0055', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00055', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(630, 'MLT0056', 'Liontin MLT0056', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00056', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(631, 'MLT0057', 'Liontin MLT0057', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00057', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(632, 'MLT0058', 'Liontin MLT0058', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00058', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(633, 'MLT0059', 'Liontin MLT0059', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00059', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(634, 'MLT0060', 'Liontin MLT0060', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00060', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(635, 'MLT0061', 'Liontin MLT0061', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00061', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(636, 'MLT0062', 'Liontin MLT0062', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00062', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(637, 'MLT0063', 'Liontin MLT0063', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00063', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(638, 'MLT0064', 'Liontin MLT0064', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00064', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(639, 'MLT0065', 'Liontin MLT0065', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00065', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(640, 'MLT0066', 'Liontin MLT0066', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00066', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(641, 'MLT0067', 'Liontin MLT0067', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00067', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00');
INSERT INTO `produk` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `kategori`, `deskripsi`, `satuan`, `hargaModal`, `hargaJual`, `kodeGambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `stok`, `statusKatalog`, `lastModified`) VALUES
(642, 'MLT0068', 'Liontin MLT0068', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00068', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(643, 'MLT0069', 'Liontin MLT0069', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00069', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(644, 'MLT0070', 'Liontin MLT0070', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00070', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(645, 'MLT0071', 'Liontin MLT0071', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00071', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(646, 'MLT0072', 'Liontin MLT0072', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00072', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(647, 'MLT0073', 'Liontin MLT0073', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00073', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(648, 'MLT0074', 'Liontin MLT0074', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00074', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(649, 'MLT0075', 'Liontin MLT0075', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00075', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(650, 'MLT0076', 'Liontin MLT0076', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00076', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(651, 'MLT0077', 'Liontin MLT0077', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00077', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(652, 'MLT0078', 'Liontin MLT0078', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00078', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(653, 'MLT0079', 'Liontin MLT0079', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00079', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(654, 'MLT0080', 'Liontin MLT0080', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00080', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(655, 'MLT0081', 'Liontin MLT0081', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00081', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(656, 'MLT0082', 'Liontin MLT0082', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00082', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(657, 'MLT0083', 'Liontin MLT0083', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00083', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(658, 'MLT0084', 'Liontin MLT0084', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00084', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(659, 'MLT0085', 'Liontin MLT0085', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00085', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(660, 'MLT0086', 'Liontin MLT0086', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00086', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(661, 'MLT0087', 'Liontin MLT0087', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00087', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(662, 'MLT0088', 'Liontin MLT0088', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00088', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(663, 'MLT0089', 'Liontin MLT0089', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00089', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(664, 'MLT0090', 'Liontin MLT0090', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00090', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(665, 'MLT0091', 'Liontin MLT0091', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00091', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(666, 'MLT0092', 'Liontin MLT0092', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00092', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(667, 'MLT0093', 'Liontin MLT0093', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00093', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(668, 'MLT0094', 'Liontin MLT0094', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00094', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(669, 'MLT0095', 'Liontin MLT0095', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00095', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(670, 'MLT0096', 'Liontin MLT0096', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00096', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(671, 'MLT0097', 'Liontin MLT0097', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00097', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(672, 'MLT0098', 'Liontin MLT0098', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00098', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(673, 'MLT0099', 'Liontin MLT0099', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00099', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(674, 'MLT0100', 'Liontin MLT0100', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00100', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(675, 'MLT0101', 'Liontin MLT0101', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00101', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(676, 'MLT0102', 'Liontin MLT0102', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00102', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(677, 'MLT0103', 'Liontin MLT0103', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00103', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(678, 'MLT0104', 'Liontin MLT0104', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00104', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(679, 'MLT0105', 'Liontin MLT0105', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00105', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(680, 'MLT0106', 'Liontin MLT0106', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00106', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(681, 'MLT0107', 'Liontin MLT0107', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00107', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(682, 'MLT0108', 'Liontin MLT0108', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00108', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(683, 'MLT0109', 'Liontin MLT0109', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00109', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(684, 'MLT0110', 'Liontin MLT0110', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00110', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(685, 'MLT0111', 'Liontin MLT0111', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00111', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(686, 'MLT0112', 'Liontin MLT0112', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00112', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(687, 'MLT0113', 'Liontin MLT0113', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00113', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(688, 'MLT0114', 'Liontin MLT0114', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00114', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(689, 'MLT0115', 'Liontin MLT0115', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00115', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(690, 'MLT0116', 'Liontin MLT0116', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00116', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(691, 'MLT0117', 'Liontin MLT0117', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00117', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(692, 'MLT0118', 'Liontin MLT0118', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00118', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(693, 'MLT0119', 'Liontin MLT0119', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00119', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(694, 'MLT0120', 'Liontin MLT0120', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00120', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(695, 'MLT0121', 'Liontin MLT0121', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00121', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(696, 'MLT0122', 'Liontin MLT0122', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00122', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(697, 'MLT0123', 'Liontin MLT0123', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00123', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(698, 'MLT0124', 'Liontin MLT0124', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00124', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(699, 'MLT0125', 'Liontin MLT0125', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00125', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(700, 'MLT0126', 'Liontin MLT0126', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00126', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(701, 'MLT0127', 'Liontin MLT0127', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00127', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(702, 'MLT0128', 'Liontin MLT0128', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00128', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(703, 'MLT0129', 'Liontin MLT0129', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00129', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(704, 'MLT0130', 'Liontin MLT0130', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00130', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(705, 'MLT0131', 'Liontin MLT0131', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00131', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(706, 'MLT0132', 'Liontin MLT0132', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00132', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(707, 'MLT0133', 'Liontin MLT0133', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00133', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(708, 'MLT0134', 'Liontin MLT0134', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00134', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(709, 'MLT0135', 'Liontin MLT0135', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00135', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(710, 'MLT0136', 'Liontin MLT0136', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00136', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(711, 'MLT0137', 'Liontin MLT0137', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00137', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(712, 'MLT0138', 'Liontin MLT0138', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00138', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(713, 'MLT0139', 'Liontin MLT0139', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00139', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(714, 'MLT0140', 'Liontin MLT0140', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00140', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(715, 'MLT0141', 'Liontin MLT0141', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00141', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(716, 'MLT0142', 'Liontin MLT0142', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00142', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(717, 'MLT0143', 'Liontin MLT0143', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00143', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(718, 'MLT0144', 'Liontin MLT0144', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00144', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(719, 'MLT0145', 'Liontin MLT0145', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00145', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(720, 'MLT0146', 'Liontin MLT0146', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00146', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(721, 'MLT0147', 'Liontin MLT0147', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00147', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(722, 'MLT0148', 'Liontin MLT0148', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00148', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(723, 'MLT0149', 'Liontin MLT0149', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00149', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(724, 'MLT0150', 'Liontin MLT0150', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00150', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(725, 'MLT0151', 'Liontin MLT0151', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00151', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(726, 'MLT0152', 'Liontin MLT0152', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00152', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(727, 'MLT0153', 'Liontin MLT0153', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00153', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(728, 'MLT0154', 'Liontin MLT0154', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00154', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(729, 'MLT0155', 'Liontin MLT0155', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00155', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(730, 'MLT0156', 'Liontin MLT0156', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00156', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(731, 'MLT0157', 'Liontin MLT0157', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00157', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(732, 'MLT0158', 'Liontin MLT0158', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00158', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(733, 'MAT0001', 'Anting MAT0001', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00001', '', '', '', '', 1, 'Tidak Tampil', '0000-00-00 00:00:00'),
(734, 'MAT0002', 'Anting MAT0002', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00002', '', '', '', '', 2, 'Tidak Tampil', '0000-00-00 00:00:00'),
(735, 'MAT0003', 'Anting MAT0003', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00003', '', '', '', '', 3, 'Tidak Tampil', '0000-00-00 00:00:00'),
(736, 'MAT0004', 'Anting MAT0004', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00004', '', '', '', '', 4, 'Tidak Tampil', '0000-00-00 00:00:00'),
(737, 'MAT0005', 'Anting MAT0005', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00005', '', '', '', '', 5, 'Tidak Tampil', '0000-00-00 00:00:00'),
(738, 'MAT0006', 'Anting MAT0006', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00006', '', '', '', '', 6, 'Tidak Tampil', '0000-00-00 00:00:00'),
(739, 'MAT0007', 'Anting MAT0007', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00007', '', '', '', '', 7, 'Tidak Tampil', '0000-00-00 00:00:00'),
(740, 'MAT0008', 'Anting MAT0008', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00008', '', '', '', '', 8, 'Tidak Tampil', '0000-00-00 00:00:00'),
(741, 'MAT0009', 'Anting MAT0009', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00009', '', '', '', '', 9, 'Tidak Tampil', '0000-00-00 00:00:00'),
(742, 'MAT0010', 'Anting MAT0010', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00010', '', '', '', '', 10, 'Tidak Tampil', '0000-00-00 00:00:00'),
(743, 'MAT0011', 'Anting MAT0011', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00011', '', '', '', '', 11, 'Tidak Tampil', '0000-00-00 00:00:00'),
(744, 'MAT0012', 'Anting MAT0012', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00012', '', '', '', '', 12, 'Tidak Tampil', '0000-00-00 00:00:00'),
(745, 'MAT0013', 'Anting MAT0013', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00013', '', '', '', '', 13, 'Tidak Tampil', '0000-00-00 00:00:00'),
(746, 'MAT0014', 'Anting MAT0014', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00014', '', '', '', '', 14, 'Tidak Tampil', '0000-00-00 00:00:00'),
(747, 'MAT0015', 'Anting MAT0015', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00015', '', '', '', '', 15, 'Tidak Tampil', '0000-00-00 00:00:00'),
(748, 'MAT0016', 'Anting MAT0016', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00016', '', '', '', '', 16, 'Tidak Tampil', '0000-00-00 00:00:00'),
(749, 'MAT0017', 'Anting MAT0017', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00017', '', '', '', '', 17, 'Tidak Tampil', '0000-00-00 00:00:00'),
(750, 'MAT0018', 'Anting MAT0018', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00018', '', '', '', '', 18, 'Tidak Tampil', '0000-00-00 00:00:00'),
(751, 'MAT0019', 'Anting MAT0019', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00019', '', '', '', '', 19, 'Tidak Tampil', '0000-00-00 00:00:00'),
(752, 'MAT0020', 'Anting MAT0020', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00020', '', '', '', '', 20, 'Tidak Tampil', '0000-00-00 00:00:00'),
(753, 'MAT0021', 'Anting MAT0021', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00021', '', '', '', '', 21, 'Tidak Tampil', '0000-00-00 00:00:00'),
(754, 'MAT0022', 'Anting MAT0022', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00022', '', '', '', '', 22, 'Tidak Tampil', '0000-00-00 00:00:00'),
(755, 'MAT0023', 'Anting MAT0023', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00023', '', '', '', '', 23, 'Tidak Tampil', '0000-00-00 00:00:00'),
(756, 'MAT0024', 'Anting MAT0024', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00024', '', '', '', '', 24, 'Tidak Tampil', '0000-00-00 00:00:00'),
(757, 'MAT0025', 'Anting MAT0025', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00025', '', '', '', '', 25, 'Tidak Tampil', '0000-00-00 00:00:00'),
(758, 'MAT0026', 'Anting MAT0026', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00026', '', '', '', '', 26, 'Tidak Tampil', '0000-00-00 00:00:00'),
(759, 'MAT0027', 'Anting MAT0027', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00027', '', '', '', '', 27, 'Tidak Tampil', '0000-00-00 00:00:00'),
(760, 'MAT0028', 'Anting MAT0028', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00028', '', '', '', '', 28, 'Tidak Tampil', '0000-00-00 00:00:00'),
(761, 'MAT0029', 'Anting MAT0029', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00029', '', '', '', '', 29, 'Tidak Tampil', '0000-00-00 00:00:00'),
(762, 'MAT0030', 'Anting MAT0030', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00030', '', '', '', '', 30, 'Tidak Tampil', '0000-00-00 00:00:00'),
(763, 'MAT0031', 'Anting MAT0031', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00031', '', '', '', '', 31, 'Tidak Tampil', '0000-00-00 00:00:00'),
(764, 'MAT0032', 'Anting MAT0032', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00032', '', '', '', '', 32, 'Tidak Tampil', '0000-00-00 00:00:00'),
(765, 'MAT0033', 'Anting MAT0033', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00033', '', '', '', '', 33, 'Tidak Tampil', '0000-00-00 00:00:00'),
(766, 'MAT0034', 'Anting MAT0034', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00034', '', '', '', '', 34, 'Tidak Tampil', '0000-00-00 00:00:00'),
(767, 'MAT0035', 'Anting MAT0035', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00035', '', '', '', '', 35, 'Tidak Tampil', '0000-00-00 00:00:00'),
(768, 'MAT0036', 'Anting MAT0036', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00036', '', '', '', '', 36, 'Tidak Tampil', '0000-00-00 00:00:00'),
(769, 'MAT0037', 'Anting MAT0037', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00037', '', '', '', '', 37, 'Tidak Tampil', '0000-00-00 00:00:00'),
(770, 'MAT0038', 'Anting MAT0038', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00038', '', '', '', '', 38, 'Tidak Tampil', '0000-00-00 00:00:00'),
(771, 'MAT0039', 'Anting MAT0039', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00039', '', '', '', '', 39, 'Tidak Tampil', '0000-00-00 00:00:00'),
(772, 'MAT0040', 'Anting MAT0040', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00040', '', '', '', '', 40, 'Tidak Tampil', '0000-00-00 00:00:00'),
(773, 'MAT0041', 'Anting MAT0041', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00041', '', '', '', '', 41, 'Tidak Tampil', '0000-00-00 00:00:00'),
(774, 'MAT0042', 'Anting MAT0042', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00042', '', '', '', '', 42, 'Tidak Tampil', '0000-00-00 00:00:00'),
(775, 'MAT0043', 'Anting MAT0043', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00043', '', '', '', '', 43, 'Tidak Tampil', '0000-00-00 00:00:00'),
(776, 'MAT0044', 'Anting MAT0044', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00044', '', '', '', '', 44, 'Tidak Tampil', '0000-00-00 00:00:00'),
(777, 'MAT0045', 'Anting MAT0045', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00045', '', '', '', '', 45, 'Tidak Tampil', '0000-00-00 00:00:00'),
(778, 'MAT0046', 'Anting MAT0046', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00046', '', '', '', '', 46, 'Tidak Tampil', '0000-00-00 00:00:00'),
(779, 'MAT0047', 'Anting MAT0047', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00047', '', '', '', '', 47, 'Tidak Tampil', '0000-00-00 00:00:00'),
(780, 'MAT0048', 'Anting MAT0048', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00048', '', '', '', '', 48, 'Tidak Tampil', '0000-00-00 00:00:00'),
(781, 'MAT0049', 'Anting MAT0049', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00049', '', '', '', '', 49, 'Tidak Tampil', '0000-00-00 00:00:00'),
(782, 'MAT0050', 'Anting MAT0050', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00050', '', '', '', '', 50, 'Tidak Tampil', '0000-00-00 00:00:00'),
(783, 'MAT0051', 'Anting MAT0051', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00051', '', '', '', '', 51, 'Tidak Tampil', '0000-00-00 00:00:00'),
(784, 'MAT0052', 'Anting MAT0052', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00052', '', '', '', '', 52, 'Tidak Tampil', '0000-00-00 00:00:00'),
(785, 'MAT0053', 'Anting MAT0053', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00053', '', '', '', '', 53, 'Tidak Tampil', '0000-00-00 00:00:00'),
(786, 'MAT0054', 'Anting MAT0054', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00054', '', '', '', '', 54, 'Tidak Tampil', '0000-00-00 00:00:00'),
(787, 'MAT0055', 'Anting MAT0055', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'BfOMAT00055', '', '', '', '', 55, 'Tidak Tampil', '0000-00-00 00:00:00'),
(788, '5005', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'MhjeXK2sSo', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 06:43:15'),
(789, '5006', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'WTHbFSab9O', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 06:50:40'),
(790, 'LTN-5', 'Tkm. Pelangi Mas-5-Giok', 'Liontin', 'Tempahan', '', '', 0, 0, 'PG9ZSJYYjw', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 06:59:51'),
(791, 'LTN-6', 'Tkm. Pelangi Mas-6-Giok', 'Liontin', 'Tempahan', '', '', 0, 0, '94YEot4o6N', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 07:09:12'),
(792, 'CNC-7', 'Tkm. Pelangi Mas-7-merah kabocon', 'Cincin', 'Tempahan', '', '', 0, 0, 'imDcj06nnk', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 07:14:04'),
(793, 'CNC-8', 'Tkm. Pelangi Mas-8', 'Cincin', 'Tempahan', '', '', 0, 0, 'krcKVD735V', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 07:21:04'),
(794, '5007', 'Ko Atak-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'suNTxdxnia', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 07:26:42'),
(795, 'CNC-9', 'Tkm. Pelangi Mas-9-Swarovski 8 mm', 'Cincin', 'Tempahan', '', '', 0, 0, 'MnFoaD7j7y', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 07:27:56'),
(796, 'CNC-10', 'Maroli-10-London Topas', 'Cincin', 'Tempahan', '', '', 0, 0, 'JpbJdMLEt0', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 07:35:33'),
(797, 'CNC-11', 'Pak. Yasir -11-Batu Garnet', 'Cincin', 'Tempahan', '', '', 0, 0, 'GvdiCZcG4J', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 07:48:40'),
(798, 'CNC-12', 'Ko Adi -12', 'Cincin', 'Tempahan', '', '', 0, 0, 'WAc65CTYjZ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 08:06:35'),
(799, 'LTN-13', 'Ko Adi -13', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'M4Qc81Kk5s', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 08:10:23'),
(800, 'CNC-14', 'Bg Aris-14-Onix', 'Cincin', 'Tempahan', '', '', 0, 0, 'eumyUnQuNT', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-17 08:15:52'),
(801, 'CNC-15', 'tkm.indah-15', 'Cincin', 'Tempahan', '', '', 0, 0, 'gGgBQpsz21', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 04:19:53'),
(802, 'CNC-16', 'Bg Dahru-16-Turmaline', 'Cincin', 'Tempahan', '', '', 0, 0, 'coaGNsxrdl', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 06:17:23'),
(803, 'CNC-17', 'Bg Dahru-17-Jamrud', 'Cincin', 'Tempahan', '', '', 0, 0, 'XzLPnTyd4V', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 06:25:08'),
(804, 'CNC-18', 'Bg Andi KR-18', 'Cincin', 'Tempahan', '', '', 0, 0, 'xZ7uZDoZTM', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 06:55:35'),
(805, '5008', 'Ko Atak-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'XIRe9VYzbN', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 07:00:36'),
(806, '5008', 'Ko Atak-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'Qrf2B7S0g0', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 07:00:47'),
(807, '5008', 'Ko Atak-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'VxkIPF2dgE', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 07:01:06'),
(808, 'GLG-19', 'Tkm. Pelangi Mas-19-roku 21 pcs', 'Gelang', 'Tempahan', '', '', 0, 0, 'OuWkkOhwsU', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 10:42:28'),
(809, '5008', 'Ko Ahua-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'G661zxfaIb', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 10:48:21'),
(810, 'CNC-20', 'Tkm. Pelangi Mas-20-roku 5 pcs', 'Cincin', 'Tempahan', '', '', 0, 0, 'IFoRprHVRU', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 10:52:38'),
(811, '5009', 'Ko Atak-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'J8wuQDUIrK', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 10:53:36'),
(812, '5009', 'Ko Awi Garuda-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'hfrVO0KOmL', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-18 10:59:41'),
(813, '5009', 'Ko Atak-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'T2PxUDhfif', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 01:47:26'),
(814, '5010', 'Ko Awi Garuda-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'MfBGzT2xoW', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 01:51:23'),
(815, '5010', 'Ko Awi Garuda-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '308naihHLs', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 01:53:29'),
(816, '5011', 'Ko Asiong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'MV9a8LgYD6', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 02:10:53'),
(817, 'MCDR3G', 'Cincin Rante 3 Baris', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'kiFrNOpKI4', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(818, '5012', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'yq4i0s380t', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 02:23:14'),
(819, 'MCDR2G', 'Cincin Rante 2 Graman', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'vzHTX9KKCZ', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(820, 'MCD SN3', 'Cincin Sisik Naga 3 graman', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'tF3tuMe6PX', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(821, 'CNC-21', 'Ko Aguan-21-Ruby', 'Cincin', 'Tempahan', '', '', 0, 0, 'GMVUv5Pwhf', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 03:40:37'),
(822, '5013', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, '1HpDwzNnyc', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 05:15:26'),
(823, '5014', 'Oheng-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'WgjZlZCcS8', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 05:31:02'),
(824, '5013', 'Ko Eddy Ayong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '3RWm4Tndmh', NULL, NULL, NULL, NULL, 5, 'Tidak Tampil', '2018-05-24 08:50:41'),
(825, 'GLG-21', 'Tkm. Pelangi Mas-21-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'DlgqEFI6Ne', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 06:34:10'),
(826, 'GLG-22', 'Tkm. Pelangi Mas-22-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'm0hYQPQPNh', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 06:38:52'),
(827, 'GLG-23', 'Tkm. Pelangi Mas-23-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'IDwHHatGIi', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 06:45:37'),
(828, 'LTN-24', 'Tkm. Awi Sogo-24-Zamrud,Mata air, dan Topas', 'Liontin', 'Tempahan', '', '', 0, 0, 'MmYAYOa0Fe', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 07:15:35'),
(829, 'LTN-25', 'Tkm. Awi Sogo-25-Zamrud dan pink', 'Liontin', 'Tempahan', '', '', 0, 0, 'w7BO0MZ8hf', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 07:23:24'),
(830, 'CNC-26', 'Tkm. Awi Sogo-26-Zamrud', 'Cincin', 'Tempahan', '', '', 0, 0, 'NhPgsEofAH', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 07:27:59'),
(831, 'CNC-27', 'Tkm. Awi Sogo-27-Zamrud', 'Cincin', 'Tempahan', '', '', 0, 0, 'uzigiWYNzG', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 07:33:26'),
(832, 'LTN-28', 'Tkm. Awi Sogo-28-Pink, Zamrud dan mata air', 'Liontin', 'Tempahan', '', '', 0, 0, 'uMSsh023nS', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 07:37:43'),
(833, 'LTN-29', 'Tkm. Awi Sogo-29-Pink Zamrud Mata Air', 'Liontin', 'Tempahan', '', '', 0, 0, 'BE2b9D8p05', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 07:48:55'),
(834, 'LTN-30', 'Tkm. Awi Sogo-30-Pink 2 pcs', 'Anting', 'Tempahan', '', '', 0, 0, 'iOCePXZjTO', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 07:54:48'),
(835, 'GLG-31', 'tkm.mentari-31', 'Gelang', 'Tempahan', '', '', 0, 0, 'cjxy0eASIh', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 10:40:12'),
(836, 'CNC-32', 'Ko Aguan-32-Ruby', 'Cincin', 'Tempahan', '', '', 0, 0, 'eU3X5SOcCS', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 05:41:13'),
(837, 'LTN-33', 'Tkm. Pelangi Mas-33-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'LYvM06cDxh', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:05:26'),
(838, 'LTN-34', 'Tkm. Pelangi Mas-34-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'gtXrkNwVU5', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:12:01'),
(839, 'GLG-35', 'Tkm. Maju Jaya-35-swaravski 8 mm', 'Gelang', 'Tempahan', '', '', 0, 0, 'TG4Qa1MRmq', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:20:11'),
(840, 'GLG-36', 'Tkm. Awi Sogo-36-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'z84JhqCRgY', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:31:16'),
(841, 'LTN-37', 'Ko Stiven-37-0', 'Liontin', 'Tempahan', '', '', 0, 0, '7keFJF2sP4', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:35:31'),
(842, 'LTN-38', 'Ko Stiven-38-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'gELjZcwohA', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:36:18'),
(843, 'LTN-39', 'Ko Stiven-39-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'eL3cE70l4N', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:44:48'),
(844, 'CNC-40', 'Tkm. Pelangi Mas-40-Blue Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'g3uOuW4dNT', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:53:15'),
(845, 'CNC-41', 'Tkm. Pelangi Mas-41-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'rAZ7maY4sl', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 06:57:33'),
(846, 'GLG-42', 'tkm.mentari-42-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'RlIwmQw3Vg', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 07:49:43'),
(847, 'CNC-43', 'Ko wiwin-43-Bacan', 'Cincin', 'Tempahan', '', '', 0, 0, 'SHv1Ir5b8D', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 07:52:54'),
(848, 'CNC-44', 'Tkm. Metro -44-American Diamond', 'Cincin', 'Tempahan', '', '', 0, 0, 'KC1Bj3WOEc', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 08:52:09'),
(849, 'CNC-45', 'Tkm. Asia Baru-45-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'ocTtGVzqXy', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 09:06:12'),
(850, 'CNC-46', 'Tkm. Asia Baru-46-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'WXjMMmH4te', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-21 09:09:02'),
(851, '5014', 'Bg Aris-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'otA7NVh4dS', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 05:06:09'),
(852, '5015', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '2Dh5olmNYq', NULL, NULL, NULL, NULL, 20, 'Tidak Tampil', '2018-05-24 08:51:32'),
(853, 'MCD RB', 'Cincin RB', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'ZI9ghfn72f', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(854, '5016', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'eJWrUTMOey', NULL, NULL, NULL, NULL, 5, 'Tidak Tampil', '2018-05-24 08:55:28'),
(855, '5017', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '6cxqj8ffQj', NULL, NULL, NULL, NULL, 10, 'Tidak Tampil', '2018-05-24 08:55:55'),
(856, 'CNC-47', 'Tkm. Metro -47-Alexander', 'Cincin', 'Tempahan', '', '', 0, 0, 'henw0yrO8r', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 08:55:51'),
(857, '5018', 'Ko Asiong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '0mnUIeoHla', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 09:19:41'),
(858, 'MGL 0161', 'Gelang Mata', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'VBO9kq81X9', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(859, 'MGL 0162', 'Gelang Mata', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'ARux8FjQp9', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(860, 'MGL 0163', 'Gelang Mata', 'Gelang', 'Massal', '', 'Pcs', 0, 0, '8zprmAYa85', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(861, 'MGL 0166', 'Gelang Mata', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'GQ6RlT1vrq', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(862, '5018', 'Ko Atak-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'MpfpObGFHo', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 09:31:08'),
(863, 'CNC-48', 'Tkm. Megah-48-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'Cftx9aCrm7', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 09:35:53'),
(864, 'CNC-49', 'Tkm. Sinar Mas-49-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'TVMIIsTiMu', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 09:40:08'),
(865, 'LTN-50', 'Tkm. Awi Sogo-50-Zamrud', 'Liontin', 'Tempahan', '', '', 0, 0, '91nEZHD8lm', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 09:45:07'),
(866, 'LTN-51', 'Tkm. Awi Sogo-51-Pink,ZamrudPetak, Oval, Mata Air', 'Liontin', 'Tempahan', '', '', 0, 0, 'dhOhi0s0Ok', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 09:52:09'),
(867, 'LTN-52', 'Tkm. Awi Sogo-52-Pink, Zamrud Bulat, Zamrud Petak', 'Liontin', 'Tempahan', '', '', 0, 0, '4JURkXp8hL', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 09:56:08'),
(868, 'LTN-53', 'Tkm. Awi Sogo-53-Zamrud', 'Liontin', 'Tempahan', '', '', 0, 0, 'mBMx6LAUga', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 10:03:41'),
(869, 'CNC-54', 'Tkm. Awi Sogo-54-Zamrud', 'Cincin', 'Tempahan', '', '', 0, 0, 'upp8PWzBb6', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 10:07:43'),
(870, 'CNC-55', 'Tkm. Matahari P.Rame-55-Ruby', 'Cincin', 'Tempahan', '', '', 0, 0, 'WV6Az6bJgj', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-26 01:26:08'),
(871, 'GLG-56', 'Tkm. Asia Baru-56', 'Gelang', 'Tempahan', '', '', 0, 0, 'zcwPjtfg1Z', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-26 04:09:53'),
(874, 'CNC-57', 'Tkm. Pelangi Mas-57-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'ZSfLUcUopd', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-26 07:20:12'),
(875, 'LTN-58', 'Ko Aguan-58', 'Anting', 'Tempahan', '', '', 0, 0, 'o8EKKdE3zW', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-26 07:35:44'),
(876, 'CNC-59', 'tkm.mentari-59', 'Cincin', 'Tempahan', '', '', 0, 0, 'jOwjO50EHU', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-26 10:43:40'),
(877, 'GLG-60', 'tkm.mentari-60', 'Gelang', 'Tempahan', '', '', 0, 0, 'FPnG2r38PG', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-26 10:47:38'),
(878, 'GLG-61', 'Tkm. Pelangi Mas-61-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'EasCAmbDpK', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-27 02:47:48'),
(879, 'GLG-62', 'Tkm. Pelangi Mas-62-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'fYdB53XmMO', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-27 02:50:50'),
(880, 'CNC-63', 'Tkm. Asia Baru-63-batu hijau', 'Cincin', 'Tempahan', '', '', 0, 0, 'fXeAlEK7UR', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-27 02:56:39'),
(881, 'CNC-64', 'Ko Ahen-64-yellow saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'sjBRKvFCIi', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-27 03:03:07'),
(882, 'GLG-65', 'Tkm. Pelangi Mas-65-0', 'Gelang', 'Tempahan', '', '', 0, 0, '4ngwZy5S3D', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-27 05:41:41'),
(883, 'LTN-66', 'Tkm. Pelangi Mas-66-0', 'Anting', 'Tempahan', '', '', 0, 0, '7iAFIKb0hf', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-27 05:53:23'),
(884, '5019', 'Oheng-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'hHWaCMLuA5', NULL, NULL, NULL, NULL, 20, 'Tidak Tampil', '2018-05-24 16:22:45'),
(885, 'CNC-67', 'Tkm. Ria-67-Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'wSMwDSczUH', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-28 03:39:22'),
(886, 'MCDSGP', 'Cincin Shogun Putih', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'FGRG8vlaCG', NULL, NULL, NULL, NULL, NULL, 'Tidak Tampil', '2018-05-18 07:24:51'),
(887, '5020', 'Ko Eddy Ayong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'tIJUxoihSp', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-28 04:00:51'),
(888, 'CNC-68', 'Gagah-68', 'Cincin', 'Tempahan', '', '', 0, 0, 'Ek3ZLuIyPA', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-28 10:24:32'),
(889, 'GLG-69', 'Tkm. Pelangi Mas-69', 'Gelang', 'Tempahan', '', '', 0, 0, 'Zcjyh6pceV', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 03:35:41'),
(890, 'GLG-70', 'tkm.mentari-70', 'Gelang', 'Tempahan', '', '', 0, 0, 'GaBZyCvGEF', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 03:51:39'),
(891, 'LTN-71', 'tkm.dunia jaya -71-berlian 7.60 mm', 'Liontin', 'Tempahan', '', '', 0, 0, 'lBFJNrfS1Y', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 04:11:14'),
(892, 'CNC-72', 'Tkm. Pelangi Mas-72-Hitam', 'Cincin', 'Tempahan', '', '', 0, 0, 'F3ZwHS0myv', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 04:23:37'),
(893, '5021', 'Ko Ahua-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'pvD6DShk52', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 06:29:20'),
(894, '5021', 'Ko Ahua-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'ziZS3zA8Vr', NULL, NULL, NULL, NULL, 20, 'Tidak Tampil', '2018-05-24 16:33:29'),
(895, '5022', 'Ko Ahua-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'i7K21cyDgF', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 06:47:48'),
(896, '5023', 'Bg Arifin -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'WbWcJpHtGW', NULL, NULL, NULL, NULL, 80, 'Tidak Tampil', '2018-05-24 16:43:05'),
(897, 'CNC-73', 'Kak Mutia-73', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, 'U8CaVaaSuY', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 02:50:36'),
(898, 'CNC-74', 'Kak Mutia-74', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, 'Z6KtnQHSLn', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 02:54:04'),
(899, 'LTN-75', 'Tkm. Pelangi Mas-75-0', 'Anting', 'Tempahan', '', '', 0, 0, '7fmRRKe6NC', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 08:25:05'),
(900, 'LTN-76', 'Tkm. Pelangi Mas-76-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'VSf1gOnAny', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 08:30:04'),
(901, 'CNC-76', 'Marwan Lobian-76-Mata Kucing', 'Cincin', 'Tempahan', '', '', 0, 0, 'imMgbA5Ejg', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 09:31:31'),
(902, 'CNC-77', 'Tkm. London-77-Roku', 'Cincin', 'Tempahan', '', '', 0, 0, 'zQk6vajgGV', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 09:34:53'),
(903, 'CNC-78', 'Tkm. Pelangi Mas-78-Topas', 'Cincin', 'Tempahan', '', '', 0, 0, 'ev77RfSOBD', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 09:37:11'),
(904, 'LTN-79', 'Tkm. Rapi-79-Ruby', 'Liontin', 'Tempahan', '', '', 0, 0, 'hDGtg1mGZ5', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 09:49:12'),
(905, 'CNC-80', 'Tkm. Pelangi Mas-80-0', 'Cincin', 'Tempahan', '', '', 0, 0, '8ERtXjP7T1', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 09:52:07'),
(906, 'GLG-81', 'Tkm. Pelangi Mas-81-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'RXyZbOUFkH', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 09:55:16'),
(907, 'CNC-82', 'Tkm. Pelangi Mas-82-Swravski 7 mm', 'Cincin', 'Tempahan', '', '', 0, 0, 'DKXk1gACfj', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 09:58:57'),
(908, 'LTN-83', 'tkm.mentari-83-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'DnsRgs6qO5', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-02 10:02:18'),
(909, '5024', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'WHZHydibmb', NULL, NULL, NULL, NULL, 40, 'Tidak Tampil', '2018-05-24 16:46:27'),
(910, '5025', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'b2KPNbPMpH', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-03 05:15:10'),
(911, 'GLG-84', 'Tkm. Awi Sogo-84-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'Lz6r04KpZJ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-03 07:49:07'),
(912, 'GLG-85', 'Tkm. Awi Sogo-85-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'ug3AiChgnt', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-03 07:51:29'),
(913, 'GLG-86', 'Tkm. Awi Sogo-86-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'ANEgrOF7Xa', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-03 08:09:37'),
(914, 'LTN-87', 'tkm.mentari-87-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'p2Lcg4F4oa', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 02:58:42'),
(915, 'GLG-88', 'tkm.mentari-88-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'VjpLRSpxZY', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 03:02:50'),
(916, 'GLG-89', 'tkm.mentari-89-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'Tv7Vebq4bb', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 03:37:56'),
(917, 'CNC-90', 'Tkm. Agung-90-Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'NqvhzDRHZz', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 04:09:06'),
(918, 'CNC-91', 'Tkm. Agung-91-Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'c0UQaRXgpk', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 04:32:27'),
(919, 'ATG-92', 'Tkm. Awi Sogo-92-0', 'Anting', 'Tempahan', '', '', 0, 0, 'wr73i64M0e', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 04:36:40'),
(920, 'MNA-93', 'Tkm. Pelangi Mas-93-0', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'UQjn2o4qHJ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 05:11:44'),
(921, 'LTN-94', 'Tkm. Pelangi Mas-94-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'NUP6YOGVT9', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 05:20:37'),
(922, 'GLG-95', 'Tkm. Pelangi Mas-95-0', 'Gelang', 'Tempahan', '', '', 0, 0, '884SdlZ6l2', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 05:32:23'),
(923, '5026', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'OVhFquG2kM', NULL, NULL, NULL, NULL, 2, 'Tidak Tampil', '2018-05-24 09:11:21'),
(924, '5027', 'Bg Aris-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '6s4aMKa0mU', NULL, NULL, NULL, NULL, 80, 'Tidak Tampil', '2018-05-24 16:49:03'),
(925, '5028', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'Rh9O2gwzad', NULL, NULL, NULL, NULL, 5, 'Tidak Tampil', '2018-05-24 09:04:13'),
(926, 'LTN-96', 'Tkm. Asia Baru-96-Batu Merah', 'Liontin', 'Tempahan', '', '', 0, 0, '0mPMIW1fWi', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-05 03:33:54'),
(927, 'MNA-97', 'Tkm. Pelangi Mas-97-0', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'PIyKCJbZUz', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-05 03:39:17'),
(928, 'MNA-98', 'Tkm. Pelangi Mas-98-0', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'g6ITaKKZCr', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-05 03:42:02'),
(929, 'GLG-99', 'Tkm. Pelangi Mas-99-cz biru', 'Gelang', 'Tempahan', '', '', 0, 0, 'AxmzJJzbur', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-07 12:11:50'),
(930, 'CNC-100', 'Tkm. Golden-100-Batu Hijau', 'Cincin', 'Tempahan', '', '', 0, 0, 'gAJtuJlRGs', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-08 05:11:07'),
(931, 'CNC-101', 'Tkm. Matahari Petisah-101-Roku 7 pcs', 'Cincin', 'Tempahan', '', '', 0, 0, '1IymVmOAsV', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-08 05:15:14'),
(932, 'CNC-102', 'Tkm. Awi Sogo-102-Zamrud', 'Cincin', 'Tempahan', '', '', 0, 0, 'PIECxbUx5A', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-08 05:20:05'),
(933, 'CNC-103', 'Tkm. Pelangi Mas-103', 'Cincin', 'Tempahan', '', '', 0, 0, 'CGQhQgUx30', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 04:31:38'),
(934, 'CNC-104', 'tkm.mentari-104-Blue Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'ABqQTFHKvH', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 04:37:28'),
(935, 'CCK-105', 'Silvia-105-swarovski', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, 'Mz0PjhBiH2', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 05:03:58'),
(936, 'CNC-106', 'Ko Aguan-106-Black Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'FJAvVGQL8s', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 05:31:27'),
(937, 'CNC-107', 'Kak Dewi-107-Batu Putih Oval', 'Cincin', 'Tempahan', '', '', 0, 0, 'FDhvUxjc4F', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 05:44:50'),
(938, 'MNA-108', 'TKM Suranta-108', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'UCatUEsk1r', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 05:59:46'),
(939, 'MNA-109', 'Tkm. Megah-109', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'Y62Pg8vm1Y', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 06:12:32'),
(940, 'CNC-110', 'TKM Kasandra-110-batu Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'zhdgRAUAKz', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 06:19:40'),
(941, 'CNC-111', 'Ko Stiven-111-Biru', 'Cincin', 'Tempahan', '', '', 0, 0, 'k6oAsV0hXu', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 06:27:11'),
(942, 'CCK-112', 'Tkm. Abadi-112-bERLIAN 0.58CT, D, VVS1', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, '4CuWe7Gpds', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 06:56:11'),
(943, 'CNC-113', 'Ko Asan Ansori-113-Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'KV3pvp8h3u', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 07:02:19'),
(944, 'LTN-113', 'Ko Kaslim-114', 'Liontin', 'Tempahan', '', '', 0, 0, 'T7IxJIKtj1', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 07:03:15'),
(945, 'CNC-115', 'Tkm. Awi Sogo-115-Zamrud Petak', 'Cincin', 'Tempahan', '', '', 0, 0, 'QGVRj5FnX4', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 07:17:41'),
(946, 'CNC-116', 'Tkm. Pelangi Mas-116', 'Cincin', 'Tempahan', '', '', 0, 0, 'nIyIeUjfp6', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 08:13:47'),
(947, 'CNC-117', 'Ko Aguan-117-Black Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'ROevXRcWKJ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 09:11:45'),
(948, 'CNC-118', 'Ko Stiven-118-Bacan', 'Cincin', 'Tempahan', '', '', 0, 0, '6K5tno50b9', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 09:16:17'),
(949, 'CNC-119', 'Tkm. Pelangi Mas-119', 'Cincin', 'Tempahan', '', '', 0, 0, 'uIxyBHclT8', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 09:20:59'),
(950, 'CNC-120', 'tkm.mentari-120-Topas', 'Cincin', 'Tempahan', '', '', 0, 0, 'yvuqCiQiAe', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 10:55:20'),
(951, 'CNC-121', 'Tkm. Pelangi Mas-121', 'Cincin', 'Tempahan', '', '', 0, 0, 'mZHBir1Boa', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 11:01:30'),
(952, 'GLG-121', 'Tkm. Pelangi Mas-121-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'YAu5Pi3UiK', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 06:22:38'),
(953, 'CNC-122', 'Tkm. Kurnia-122-Yellow Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'u0PuV1Cyj5', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 06:34:06'),
(954, 'GLG-123', 'Tkm. Pelangi Mas-123-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'LiEIwlK4Yv', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 06:39:51'),
(955, 'CNC-124', 'Tkm. Asia Baru-124-Kecubung ', 'Cincin', 'Tempahan', '', '', 0, 0, '5HXRWReuSb', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 06:47:39'),
(956, 'CNC-125', 'Tkm. Pelangi Mas-125-Topas Petak Segi', 'Cincin', 'Tempahan', '', '', 0, 0, 'lzxdYxJItj', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 07:48:33'),
(957, 'CNC-126', 'Tkm. Pelangi Mas-126-berlian 5 pcs', 'Cincin', 'Tempahan', '', '', 0, 0, '4x7W76HwLC', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 07:52:46'),
(958, 'CNC-127', 'Tkm. Pelangi Mas-127-Mutiara', 'Cincin', 'Tempahan', '', '', 0, 0, '6EOPlFtdxx', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 07:56:10'),
(959, 'GLG-128', 'Tkm. Pelangi Mas-128-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'W5cgtsD5IJ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 07:59:21'),
(960, 'CNC-129', 'Tkm. Pelangi Mas-129-0', 'Cincin', 'Tempahan', '', '', 0, 0, '0kMpizOg6O', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 08:02:45'),
(961, 'LTN-130', 'Tkm. Asia Baru-130-Topas Oval', 'Liontin', 'Tempahan', '', '', 0, 0, 'NfVtNuAHhv', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 08:26:06'),
(962, 'ATG-131', 'Tkm. Pelangi Mas-131-Berlian', 'Anting', 'Tempahan', '', '', 0, 0, '4vpbA8xDx7', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 09:35:35'),
(963, 'GLG-132', 'tkm.mentari-132-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'mxejxWPPam', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 09:46:08'),
(964, 'GLG-133', 'tkm.mentari-133-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'gJTcfbUJT1', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 09:54:04'),
(965, 'LTN-134', 'Tkm. Awi Sogo-134-Zamrud hijau, pink', 'Liontin', 'Tempahan', '', '', 0, 0, 'uGYoQwP0dq', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 09:59:41'),
(966, 'LTN-135', 'Tkm. Awi Sogo-135-zamrud, Pink, hijau', 'Liontin', 'Tempahan', '', '', 0, 0, '5LZ9iAVTM4', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-11 10:02:55'),
(967, 'CNC-136', 'Tkm. Pelangi Mas-136-topas', 'Cincin', 'Tempahan', '', '', 0, 0, 'TSMqqyG7ZA', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-13 02:44:56'),
(968, 'CNC-137', 'Tkm. Pelangi Mas-137-blue saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'EyoZmHZTiJ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-13 02:51:58'),
(969, 'CNC-138', 'Tkm. Pelangi Mas-138-blue saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'pgGitUu5Ze', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-13 03:02:14'),
(970, 'CNC-139', 'Tkm. Pelangi Mas-139-Blue Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'UV4kvvAuXo', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-13 03:13:42');
INSERT INTO `produk` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `kategori`, `deskripsi`, `satuan`, `hargaModal`, `hargaJual`, `kodeGambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `stok`, `statusKatalog`, `lastModified`) VALUES
(971, 'CNC-140', 'Tkm. Golden-140-MUTIARA', 'Cincin', 'Tempahan', '', '', 0, 0, 'teA5UZrLge', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-17 08:51:11'),
(972, 'CNC-141', 'Ko Atak-141-topas', 'Cincin', 'Tempahan', '', '', 0, 0, 'HUgnbtoal5', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-17 08:59:04'),
(973, 'CNC-142', 'Tkm. Asia Baru-142-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'IbCz7ZLd4N', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:20:38'),
(974, 'CNC-143', 'Tkm. Asia Baru-143-Ruby Star', 'Cincin', 'Tempahan', '', '', 0, 0, 'XI7ot7oN40', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:24:47'),
(975, 'LTN-144', 'Tkm. Abadi-144-Hijau Lumut', 'Liontin', 'Tempahan', '', '', 0, 0, 'qGGgZFOCmW', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:34:14'),
(976, 'LTN-145', 'Tkm. Abadi-145-Bacan', 'Liontin', 'Tempahan', '', '', 0, 0, 'fHZN6KKguI', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:39:21'),
(977, 'CCK-146', 'Bg Satria-146-0', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, 'ZeodBW7FK5', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:43:34'),
(978, 'CNC-147', 'Tkm. Golden-147-Obsidian Merah', 'Cincin', 'Tempahan', '', '', 0, 0, 'doStg71uq3', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:47:01'),
(979, 'CNC-148', 'Ko Rudy-148-Crysoberyl Alexadrit', 'Cincin', 'Tempahan', '', '', 0, 0, 'Qd2433aUl9', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:49:55'),
(980, 'CNC-149', 'Tkm. Matahari Petisah-149-Crysoberyl', 'Cincin', 'Tempahan', '', '', 0, 0, 'Xgx9qwtlx0', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:52:35'),
(981, 'CNC-149', 'Tkm. Matahari Petisah-149-Crysoberyl', 'Cincin', 'Tempahan', '', '', 0, 0, 'HYlNQzGwM1', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:52:49'),
(982, 'CNC-149', 'Tkm. Matahari Petisah-149-Crysoberyl', 'Cincin', 'Tempahan', '', '', 0, 0, 'FedMNDLWmX', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:54:10'),
(983, 'CNC-149', 'Tkm. Matahari Petisah-149-Crysoberyl', 'Cincin', 'Tempahan', '', '', 0, 0, 'oJTADPNJut', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:54:26'),
(984, 'CNC-149', 'Tkm. Matahari Petisah-149-Crysoberyl', 'Cincin', 'Tempahan', '', '', 0, 0, 'zLA2UyPawv', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 06:56:10'),
(985, 'LTN-150', 'tkm.mentari-150', 'Liontin', 'Tempahan', '', '', 0, 0, '2Cnp7dxWKX', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 07:02:31'),
(986, 'GLG-151', 'Tkm. Pelangi Mas-151-0', 'Gelang', 'Tempahan', '', '', 0, 0, '4u7grBcc22', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 07:06:18'),
(987, 'CNC-152', 'Tkm. Pelangi Mas-152-Batu Siong Cing', 'Cincin', 'Tempahan', '', '', 0, 0, '3ZA8zh8MtI', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 07:09:08'),
(988, 'GLG-153', 'Tkm. Pelangi Mas-153-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'jjOF4KI0gC', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 07:12:23'),
(989, 'LTN-154', 'Tkm. Pelangi Mas-154-Batu Putih Gambar buDHA', 'Liontin', 'Tempahan', '', '', 0, 0, 'SJ3fQQ4230', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 07:15:28'),
(990, 'LLN-155', 'Tkm. Pelangi Mas-154-Batu Putih Gambar buDHA', '', 'Tempahan', '', '', 0, 0, 'tPwM5rmQL3', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 07:15:44'),
(991, 'CNC-155', 'Tkm. Pelangi Mas-155-Pasir Emas', 'Cincin', 'Tempahan', '', '', 0, 0, '7YDdEJJond', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 07:32:47'),
(992, 'GLG-156', 'Tkm. Pelangi Mas-156-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'cDiGWmsre6', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 08:00:04'),
(993, 'LTN-157', 'Tkm. Pelangi Mas-157', 'Liontin', 'Tempahan', '', '', 0, 0, '98DPpdYNlS', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 08:05:28'),
(994, 'ATG-158', 'Tkm. Pelangi Mas-158-0', 'Anting', 'Tempahan', '', '', 0, 0, 'h3KbcUjckj', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 09:47:49'),
(995, 'ATG-159', 'Tkm. Pelangi Mas-159-0', 'Anting', 'Tempahan', '', '', 0, 0, 'f9SwhODhJO', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 08:07:32'),
(996, 'CNC-166', 'Tkm. Pelangi Mas-166-Bacan Oval', 'Cincin', 'Tempahan', '', '', 0, 0, 'Hf4p5lFM3V', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 09:44:06'),
(997, 'CNC-160', 'Tkm. Pelangi Mas-160', 'Cincin', 'Tempahan', '', '', 0, 0, 'E93Bg9Qfu7', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 08:15:12'),
(998, 'LTN-161', 'Tkm. Pelangi Mas-161-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'L3bYTtfncp', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 08:17:48'),
(999, 'CCK-162', 'Tkm. Pelangi Mas-162', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, 'SbkvaVSsjD', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 09:48:16'),
(1000, 'ATG-163', 'Tkm. Pelangi Mas-163-0', 'Anting', 'Tempahan', '', '', 0, 0, 'NJInlHlZQ3', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 09:48:20'),
(1001, 'GLG-164', 'Tkm. Pelangi Mas-164-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'vh1H4L5MYH', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 08:28:52'),
(1002, 'GLG-165', 'Tkm. Pelangi Mas-165-0', 'Gelang', 'Tempahan', '', '', 0, 0, 'KJrY2zbvbe', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-18 08:31:29'),
(1003, 'CWB 1', 'Cincin Wanita Batu Giok', 'Cincin', 'Tempahan', 'Cincin cewek batu giok berwarna hijau\r\nBahan emas kuning dengan kadar 70%\r\nBerat cincin +- 8.5 gr \r\n\r\n', 'Pcs', 0, 0, 'fAyNCFtI4T', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-05-18 10:11:58'),
(1004, 'CNC-167', 'Ci Linda-167-Batu Kayu', 'Cincin', 'Tempahan', '', '', 0, 0, 'brV2VY8dVC', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-19 03:10:19'),
(1005, 'CNC-168', 'TKM Sinar jaya-168', 'Cincin', 'Tempahan', '', '', 0, 0, '3Ii3ZYUCHE', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-21 08:58:22'),
(1006, 'LTN-169', 'Tkm. Pelangi Mas-169-0', 'Liontin', 'Tempahan', '', '', 0, 0, 'CGM2iJw5JW', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-22 04:55:40'),
(1007, 'GLG-170', 'tkm.mentari-170-0', 'Gelang', 'Tempahan', '', '', 0, 0, '1zpipOSJQK', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-22 04:57:43'),
(1008, '5029', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'c4PhFNdpF4', NULL, NULL, NULL, NULL, 80, 'Tidak Tampil', '2018-05-24 16:51:26'),
(1009, 'MCDR1G', 'Cincin Rante 1 Graman', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'sxfsWjodzk', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-05-22 05:05:39'),
(1010, '5030', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'TnKpkjbybs', NULL, NULL, NULL, NULL, 50, 'Tidak Tampil', '2018-05-24 17:05:49'),
(1011, '5031', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'zrFWgu0Seu', NULL, NULL, NULL, NULL, 80, 'Tidak Tampil', '2018-05-24 17:08:12'),
(1012, '5032', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'YqJgSI1WHp', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-22 05:22:53'),
(1013, '5033', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'weUwY4kZJD', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-22 05:27:21'),
(1014, '5034', 'Bg Arifin -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'ejtEopFZob', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-22 06:18:35'),
(1015, '5035', 'Bg Aris-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'ZVg9MMEp09', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-22 08:14:45'),
(1016, '5036', 'Ko Ahua-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'tMwhaGQlzA', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-22 08:18:17'),
(1017, 'CNC-171', 'Ko Aho-171', 'Cincin', 'Tempahan', '', '', 0, 0, 'W6IRlo1g2v', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-24 04:38:38'),
(1018, 'CNC-172', 'Ko Kus-172-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'lOmwzeSwjv', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-24 05:15:51'),
(1019, '5037', 'Ko Aho-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'oISuLBSgKP', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-24 06:53:09'),
(1020, 'CCK-173', 'Tkm. Matahari P.Rame-173-0', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, 'uQkFmy1e1o', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 03:16:56'),
(1021, 'MNA-174', 'Ko Aguan-174-0', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'QSSxGDjaJT', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 03:25:15'),
(1022, 'MNA-175', 'Ko Aguan-175', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'b1c3v51c3W', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:23:17'),
(1023, 'CNC-176', 'Tkm. Pelangi Mas-176', 'Cincin', 'Tempahan', '', '', 0, 0, 'XA35DoAwY0', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:26:07'),
(1024, 'CNC-177', 'Tkm. Asia Baru-177', 'Cincin', 'Tempahan', '', '', 0, 0, 'CDXio6wBIu', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:30:23'),
(1025, 'GLG-178', 'Tkm. Pelangi Mas-178', 'Gelang', 'Tempahan', '', '', 0, 0, 'kOLDqM9pxy', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:32:58'),
(1026, 'MNA-179', 'Tkm. Pelangi Mas-179', 'Mainan Nama', 'Tempahan', '', '', 0, 0, '7wNXHXQXvj', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:35:19'),
(1027, 'MNA-180', 'Tkm. Pelangi Mas-180', 'Mainan Nama', 'Tempahan', '', '', 0, 0, 'gQEdByJqYV', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:37:32'),
(1028, 'LLN-181', 'Tkm. Pelangi Mas-181', 'Ring', 'Tempahan', '', '', 0, 0, 'zPrpQ7cp9o', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:45:26'),
(1029, 'CNC-182', 'Tkm. Pelangi Mas-182', 'Cincin', 'Tempahan', '', '', 0, 0, '6a3nmUYAm1', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:47:45'),
(1030, 'CNC-183', 'Ko Kus-183', 'Cincin', 'Tempahan', '', '', 0, 0, '4TyRWYToc4', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:50:52'),
(1031, 'CNC-184', 'Tkm. Ria-184', 'Cincin', 'Tempahan', '', '', 0, 0, 'cS95oC9pqX', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 05:57:06'),
(1032, 'CNC-185', 'Tkm. Awi Sogo-185', 'Cincin', 'Tempahan', '', '', 0, 0, '7v5UbTS64a', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 06:00:03'),
(1033, 'LTN-186', 'Tkm. Awi Sogo-186', 'Liontin', 'Tempahan', '', '', 0, 0, 'Br6CMhta5I', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 06:02:59'),
(1034, 'CNC-187', 'Tkm. Awi Sogo-187-Zamrud', 'Cincin', 'Tempahan', '', '', 0, 0, 'kDFw3ULhR5', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 06:05:52'),
(1035, 'CNC-188', 'Tkm. Abadi-188-Lavendrer', 'Cincin', 'Tempahan', '', '', 0, 0, 'IIpOsOsfeV', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 06:08:56'),
(1036, 'CCK-189', 'Binsar-189', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, 'GYq3x0h9HC', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 07:23:52'),
(1037, 'GLG-190', 'Tkm. Pelangi Mas-190-Topas Sintetis', 'Gelang', 'Tempahan', '', '', 0, 0, 'O9gjMqLN0t', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 07:47:23'),
(1038, 'CNC-191', 'Tkm. Pelangi Mas-191-Batu Ruby Sintetis', 'Cincin', 'Tempahan', '', '', 0, 0, 'l2XQS25DR6', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 07:50:29'),
(1039, 'CNC-192', 'Tkm. Pelangi Mas-192', 'Cincin', 'Tempahan', '', '', 0, 0, 'Er5awssFy1', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 07:53:47'),
(1040, 'CNC-193', 'Tkm. Pelangi Mas-193-Giok', 'Cincin', 'Tempahan', '', '', 0, 0, 'bkvt9UnkZV', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 07:56:14'),
(1041, 'CNC-194', 'Tkm. Golden-194-Mutiara putih', 'Cincin', 'Tempahan', '', '', 0, 0, 'GPNvhYdI2U', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 08:00:25'),
(1042, 'CNC-195', 'Tkm. Golden-195-Mutiara hitam', 'Cincin', 'Tempahan', '', '', 0, 0, 'mqJyYQLdVz', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 08:02:48'),
(1043, 'LTN-196', 'Tkm. Pelangi Mas-196', 'Liontin', 'Tempahan', '', '', 0, 0, '8rGIxQKQML', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-25 08:05:20'),
(1044, 'CNC-197', 'Tkm. Pelangi Mas-197-Swarovski', 'Cincin', 'Tempahan', '', '', 0, 0, 'KAo7Vq8vs0', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 05:36:15'),
(1045, 'CNC-198', 'Ko Atak-198-Bacan', 'Cincin', 'Tempahan', '', '', 0, 0, 'XjHRvDaW7F', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 05:41:28'),
(1046, 'CNC-199', 'Ko Aguan-199', 'Cincin', 'Tempahan', '', '', 0, 0, 'Hcrd2ByXBG', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 08:13:29'),
(1047, 'CNC-200', 'Ko Aguan-200-Citrine', 'Cincin', 'Tempahan', '', '', 0, 0, '5awo2YjO67', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 08:17:06'),
(1048, 'CNC-201', 'Ko Rudy-201-Tourmalone', 'Cincin', 'Tempahan', '', '', 0, 0, '35YQRusuiC', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 08:21:52'),
(1049, 'LTN-202', 'Tkm. Awi Sogo-202-Pink dan jamrud', 'Liontin', 'Tempahan', '', '', 0, 0, 'w2e7fZg3Ji', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 08:26:47'),
(1050, 'LTN-203', 'Tkm. Awi Sogo-203', 'Liontin', 'Tempahan', '', '', 0, 0, 'P855LmW9Py', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 08:29:36'),
(1051, 'CCK-204', 'Ko Stiven-204', 'Cincin Kawin', 'Tempahan', '', '', 0, 0, 'LlgQpnuF5b', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 08:34:16'),
(1052, 'CNC-205', 'Tkm. Dunia Jaya/Ko Awa-205', 'Cincin', 'Tempahan', '', '', 0, 0, '1gpoqDXW1Q', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 08:51:59'),
(1053, 'LTN-206', 'Tkm. Dunia Jaya/Ko Awa-206-kecubung ', 'Liontin', 'Tempahan', '', '', 0, 0, 'oeinQhXOQf', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-26 08:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `produkaktivitas`
--

CREATE TABLE `produkaktivitas` (
  `idProses` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `maxOccurence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkaktivitas`
--

INSERT INTO `produkaktivitas` (`idProses`, `idProduk`, `idAktivitas`, `durasi`, `maxOccurence`) VALUES
(1, 2, 1001, 0, 0),
(2, 2, 1002, 0, 0),
(3, 2, 1003, 0, 0),
(4, 2, 1004, 0, 0),
(5, 2, 1005, 0, 0),
(6, 2, 1006, 0, 0),
(7, 2, 1007, 0, 0),
(8, 2, 1008, 0, 0),
(9, 2, 1009, 0, 0),
(10, 2, 1010, 0, 0),
(11, 2, 1012, 0, 0),
(12, 2, 1014, 0, 0),
(13, 16, 1004, 0, 0),
(14, 16, 1005, 0, 0),
(15, 16, 1006, 0, 0),
(16, 16, 1007, 0, 0),
(17, 16, 1008, 0, 0),
(18, 16, 1010, 0, 0),
(19, 16, 1011, 0, 0),
(20, 16, 1012, 0, 0),
(21, 16, 1014, 0, 0),
(22, 17, 1001, 0, 0),
(23, 17, 1002, 0, 0),
(24, 17, 1003, 0, 0),
(25, 17, 1004, 0, 0),
(26, 17, 1005, 0, 0),
(27, 17, 1006, 0, 0),
(28, 17, 1007, 0, 0),
(29, 17, 1008, 0, 0),
(30, 17, 1010, 0, 0),
(31, 17, 1011, 0, 0),
(32, 17, 1012, 0, 0),
(33, 17, 1014, 0, 0),
(34, 570, 1004, 0, 0),
(35, 570, 1005, 0, 0),
(36, 570, 1006, 0, 0),
(37, 570, 1007, 0, 0),
(38, 570, 1008, 0, 0),
(39, 570, 1009, 0, 0),
(40, 570, 1010, 0, 0),
(41, 570, 1011, 0, 0),
(42, 570, 1012, 0, 0),
(43, 570, 1013, 0, 0),
(44, 570, 1014, 0, 0),
(45, 790, 1001, 0, 0),
(46, 790, 1002, 0, 0),
(47, 790, 1003, 0, 0),
(48, 790, 1004, 0, 0),
(49, 790, 1005, 0, 0),
(50, 790, 1006, 0, 0),
(51, 790, 1007, 0, 0),
(52, 790, 1008, 0, 0),
(53, 790, 1009, 0, 0),
(54, 790, 1010, 0, 0),
(55, 790, 1012, 0, 0),
(56, 790, 1013, 0, 0),
(57, 790, 1014, 0, 0),
(58, 791, 1001, 0, 0),
(59, 791, 1002, 0, 0),
(60, 791, 1003, 0, 0),
(61, 791, 1004, 0, 0),
(62, 791, 1005, 0, 0),
(63, 791, 1006, 0, 0),
(64, 791, 1007, 0, 0),
(65, 791, 1008, 0, 0),
(66, 791, 1009, 0, 0),
(67, 791, 1010, 0, 0),
(68, 791, 1012, 0, 0),
(69, 791, 1013, 0, 0),
(70, 791, 1014, 0, 0),
(71, 572, 1004, 0, 0),
(72, 572, 1005, 0, 0),
(73, 572, 1006, 0, 0),
(74, 572, 1007, 0, 0),
(75, 572, 1008, 0, 0),
(76, 572, 1009, 0, 0),
(77, 572, 1011, 0, 0),
(78, 572, 1012, 0, 0),
(79, 572, 1013, 0, 0),
(80, 572, 1014, 0, 0),
(81, 573, 1004, 0, 0),
(82, 573, 1005, 0, 0),
(83, 573, 1006, 0, 0),
(84, 573, 1007, 0, 0),
(85, 573, 1008, 0, 0),
(86, 573, 1009, 0, 0),
(87, 573, 1010, 0, 0),
(88, 573, 1011, 0, 0),
(89, 573, 1012, 0, 0),
(90, 573, 1013, 0, 0),
(91, 573, 1014, 0, 0),
(92, 792, 1001, 0, 0),
(93, 792, 1002, 0, 0),
(94, 792, 1003, 0, 0),
(95, 792, 1004, 0, 0),
(96, 792, 1005, 0, 0),
(97, 792, 1006, 0, 0),
(98, 792, 1007, 0, 0),
(99, 792, 1008, 0, 0),
(100, 792, 1009, 0, 0),
(101, 792, 1010, 0, 0),
(102, 792, 1012, 0, 0),
(103, 792, 1013, 0, 0),
(104, 792, 1014, 0, 0),
(105, 793, 1001, 0, 0),
(106, 793, 1002, 0, 0),
(107, 793, 1003, 0, 0),
(108, 793, 1004, 0, 0),
(109, 793, 1005, 0, 0),
(110, 793, 1006, 0, 0),
(111, 793, 1007, 0, 0),
(112, 793, 1008, 0, 0),
(113, 793, 1009, 0, 0),
(114, 793, 1010, 0, 0),
(115, 793, 1012, 0, 0),
(116, 793, 1014, 0, 0),
(117, 795, 1001, 0, 0),
(118, 795, 1002, 0, 0),
(119, 795, 1003, 0, 0),
(120, 795, 1004, 0, 0),
(121, 795, 1005, 0, 0),
(122, 795, 1006, 0, 0),
(123, 795, 1007, 0, 0),
(124, 795, 1008, 0, 0),
(125, 795, 1009, 0, 0),
(126, 795, 1010, 0, 0),
(127, 795, 1012, 0, 0),
(128, 795, 1013, 0, 0),
(129, 795, 1014, 0, 0),
(130, 796, 1001, 0, 0),
(131, 796, 1002, 0, 0),
(132, 796, 1003, 0, 0),
(133, 796, 1004, 0, 0),
(134, 796, 1005, 0, 0),
(135, 796, 1006, 0, 0),
(136, 796, 1007, 0, 0),
(137, 796, 1008, 0, 0),
(138, 796, 1010, 0, 0),
(139, 796, 1012, 0, 0),
(140, 796, 1013, 0, 0),
(141, 796, 1014, 0, 0),
(142, 797, 1001, 0, 0),
(143, 797, 1002, 0, 0),
(144, 797, 1003, 0, 0),
(145, 797, 1004, 0, 0),
(146, 797, 1005, 0, 0),
(147, 797, 1006, 0, 0),
(148, 797, 1007, 0, 0),
(149, 797, 1008, 0, 0),
(150, 797, 1009, 0, 0),
(151, 797, 1010, 0, 0),
(152, 797, 1012, 0, 0),
(153, 797, 1013, 0, 0),
(154, 797, 1014, 0, 0),
(155, 798, 1001, 0, 0),
(156, 798, 1002, 0, 0),
(157, 798, 1003, 0, 0),
(158, 798, 1004, 0, 0),
(159, 798, 1005, 0, 0),
(160, 798, 1006, 0, 0),
(161, 798, 1007, 0, 0),
(162, 798, 1008, 0, 0),
(163, 798, 1009, 0, 0),
(164, 798, 1010, 0, 0),
(165, 798, 1012, 0, 0),
(166, 798, 1014, 0, 0),
(167, 799, 1001, 0, 0),
(168, 799, 1002, 0, 0),
(169, 799, 1003, 0, 0),
(170, 799, 1004, 0, 0),
(171, 799, 1005, 0, 0),
(172, 799, 1006, 0, 0),
(173, 799, 1007, 0, 0),
(174, 799, 1008, 0, 0),
(175, 799, 1009, 0, 0),
(176, 799, 1010, 0, 0),
(177, 799, 1012, 0, 0),
(178, 799, 1014, 0, 0),
(179, 800, 1001, 0, 0),
(180, 800, 1002, 0, 0),
(181, 800, 1003, 0, 0),
(182, 800, 1004, 0, 0),
(183, 800, 1005, 0, 0),
(184, 800, 1006, 0, 0),
(185, 800, 1007, 0, 0),
(186, 800, 1008, 0, 0),
(187, 800, 1010, 0, 0),
(188, 800, 1012, 0, 0),
(189, 800, 1013, 0, 0),
(190, 800, 1014, 0, 0),
(191, 788, 1004, 0, 0),
(192, 788, 1005, 0, 0),
(193, 788, 1006, 0, 0),
(194, 788, 1007, 0, 0),
(195, 788, 1008, 0, 0),
(196, 788, 1009, 0, 0),
(197, 788, 1010, 0, 0),
(198, 788, 1011, 0, 0),
(199, 788, 1012, 0, 0),
(200, 788, 1013, 0, 0),
(201, 788, 1014, 0, 0),
(202, 794, 1004, 0, 0),
(203, 794, 1005, 0, 0),
(204, 794, 1006, 0, 0),
(205, 794, 1007, 0, 0),
(206, 794, 1008, 0, 0),
(207, 794, 1009, 0, 0),
(208, 794, 1010, 0, 0),
(209, 794, 1011, 0, 0),
(210, 794, 1012, 0, 0),
(211, 794, 1013, 0, 0),
(212, 794, 1014, 0, 0),
(213, 789, 1004, 0, 0),
(214, 789, 1005, 0, 0),
(215, 789, 1006, 0, 0),
(216, 789, 1007, 0, 0),
(217, 789, 1008, 0, 0),
(218, 789, 1009, 0, 0),
(219, 789, 1010, 0, 0),
(220, 789, 1011, 0, 0),
(221, 789, 1012, 0, 0),
(222, 789, 1013, 0, 0),
(223, 789, 1014, 0, 0),
(224, 802, 1001, 0, 0),
(225, 802, 1002, 0, 0),
(226, 802, 1003, 0, 0),
(227, 802, 1004, 0, 0),
(228, 802, 1005, 0, 0),
(229, 802, 1006, 0, 0),
(230, 802, 1007, 0, 0),
(231, 802, 1008, 0, 0),
(232, 802, 1009, 0, 0),
(233, 802, 1010, 0, 0),
(234, 802, 1011, 0, 0),
(235, 802, 1012, 0, 0),
(236, 802, 1013, 0, 0),
(237, 802, 1014, 0, 0),
(238, 803, 1001, 0, 0),
(239, 803, 1002, 0, 0),
(240, 803, 1003, 0, 0),
(241, 803, 1004, 0, 0),
(242, 803, 1005, 0, 0),
(243, 803, 1006, 0, 0),
(244, 803, 1007, 0, 0),
(245, 803, 1008, 0, 0),
(246, 803, 1009, 0, 0),
(247, 803, 1010, 0, 0),
(248, 803, 1011, 0, 0),
(249, 803, 1012, 0, 0),
(250, 803, 1013, 0, 0),
(251, 803, 1014, 0, 0),
(252, 827, 1001, 0, 0),
(253, 827, 1002, 0, 0),
(254, 827, 1003, 0, 0),
(255, 827, 1004, 0, 0),
(256, 827, 1005, 0, 0),
(257, 827, 1006, 0, 0),
(258, 827, 1007, 0, 0),
(259, 827, 1008, 0, 0),
(260, 827, 1009, 0, 0),
(261, 827, 1010, 0, 0),
(262, 827, 1011, 0, 0),
(263, 827, 1012, 0, 0),
(264, 827, 1013, 0, 0),
(265, 827, 1014, 0, 0),
(266, 804, 1001, 0, 0),
(267, 804, 1002, 0, 0),
(268, 804, 1003, 0, 0),
(269, 804, 1004, 0, 0),
(270, 804, 1005, 0, 0),
(271, 804, 1006, 0, 0),
(272, 804, 1007, 0, 0),
(273, 804, 1008, 0, 0),
(274, 804, 1009, 0, 0),
(275, 804, 1010, 0, 0),
(276, 804, 1011, 0, 0),
(277, 804, 1012, 0, 0),
(278, 804, 1013, 0, 0),
(279, 804, 1014, 0, 0),
(280, 835, 1001, 0, 0),
(281, 835, 1002, 0, 0),
(282, 835, 1003, 0, 0),
(283, 835, 1004, 0, 0),
(284, 835, 1005, 0, 0),
(285, 835, 1006, 0, 0),
(286, 835, 1007, 0, 0),
(287, 835, 1008, 0, 0),
(288, 835, 1009, 0, 0),
(289, 835, 1010, 0, 0),
(290, 835, 1011, 0, 0),
(291, 835, 1012, 0, 0),
(292, 835, 1013, 0, 0),
(293, 835, 1014, 0, 0),
(294, 831, 1001, 0, 0),
(295, 831, 1002, 0, 0),
(296, 831, 1003, 0, 0),
(297, 831, 1004, 0, 0),
(298, 831, 1005, 0, 0),
(299, 831, 1006, 0, 0),
(300, 831, 1007, 0, 0),
(301, 831, 1008, 0, 0),
(302, 831, 1009, 0, 0),
(303, 831, 1010, 0, 0),
(304, 831, 1011, 0, 0),
(305, 831, 1012, 0, 0),
(306, 831, 1013, 0, 0),
(307, 831, 1014, 0, 0),
(308, 826, 1001, 0, 0),
(309, 826, 1002, 0, 0),
(310, 826, 1003, 0, 0),
(311, 826, 1004, 0, 0),
(312, 826, 1005, 0, 0),
(313, 826, 1006, 0, 0),
(314, 826, 1007, 0, 0),
(315, 826, 1008, 0, 0),
(316, 826, 1009, 0, 0),
(317, 826, 1010, 0, 0),
(318, 826, 1011, 0, 0),
(319, 826, 1012, 0, 0),
(320, 826, 1013, 0, 0),
(321, 826, 1014, 0, 0),
(322, 825, 1001, 0, 0),
(323, 825, 1002, 0, 0),
(324, 825, 1003, 0, 0),
(325, 825, 1004, 0, 0),
(326, 825, 1005, 0, 0),
(327, 825, 1006, 0, 0),
(328, 825, 1007, 0, 0),
(329, 825, 1008, 0, 0),
(330, 825, 1009, 0, 0),
(331, 825, 1010, 0, 0),
(332, 825, 1011, 0, 0),
(333, 825, 1012, 0, 0),
(334, 825, 1013, 0, 0),
(335, 825, 1014, 0, 0),
(336, 810, 1001, 0, 0),
(337, 810, 1002, 0, 0),
(338, 810, 1003, 0, 0),
(339, 810, 1004, 0, 0),
(340, 810, 1005, 0, 0),
(341, 810, 1006, 0, 0),
(342, 810, 1007, 0, 0),
(343, 810, 1008, 0, 0),
(344, 810, 1009, 0, 0),
(345, 810, 1010, 0, 0),
(346, 810, 1011, 0, 0),
(347, 810, 1012, 0, 0),
(348, 810, 1013, 0, 0),
(349, 810, 1014, 0, 0),
(350, 808, 1001, 0, 0),
(351, 808, 1002, 0, 0),
(352, 808, 1003, 0, 0),
(353, 808, 1004, 0, 0),
(354, 808, 1005, 0, 0),
(355, 808, 1006, 0, 0),
(356, 808, 1007, 0, 0),
(357, 808, 1008, 0, 0),
(358, 808, 1009, 0, 0),
(359, 808, 1010, 0, 0),
(360, 808, 1011, 0, 0),
(361, 808, 1012, 0, 0),
(362, 808, 1013, 0, 0),
(363, 808, 1014, 0, 0),
(364, 830, 1001, 0, 0),
(365, 830, 1002, 0, 0),
(366, 830, 1003, 0, 0),
(367, 830, 1004, 0, 0),
(368, 830, 1005, 0, 0),
(369, 830, 1006, 0, 0),
(370, 830, 1007, 0, 0),
(371, 830, 1008, 0, 0),
(372, 830, 1009, 0, 0),
(373, 830, 1010, 0, 0),
(374, 830, 1011, 0, 0),
(375, 830, 1012, 0, 0),
(376, 830, 1013, 0, 0),
(377, 830, 1014, 0, 0),
(378, 801, 1001, 0, 0),
(379, 801, 1002, 0, 0),
(380, 801, 1003, 0, 0),
(381, 801, 1004, 0, 0),
(382, 801, 1005, 0, 0),
(383, 801, 1006, 0, 0),
(384, 801, 1007, 0, 0),
(385, 801, 1008, 0, 0),
(386, 801, 1009, 0, 0),
(387, 801, 1010, 0, 0),
(388, 801, 1011, 0, 0),
(389, 801, 1012, 0, 0),
(390, 801, 1013, 0, 0),
(391, 801, 1014, 0, 0),
(392, 857, 1004, 0, 0),
(393, 857, 1005, 0, 0),
(394, 857, 1006, 0, 0),
(395, 857, 1007, 0, 0),
(396, 857, 1008, 0, 0),
(397, 857, 1009, 0, 0),
(398, 857, 1010, 0, 0),
(399, 857, 1011, 0, 0),
(400, 857, 1012, 0, 0),
(401, 857, 1013, 0, 0),
(402, 857, 1014, 0, 0),
(403, 855, 1004, 0, 0),
(404, 855, 1005, 0, 0),
(405, 855, 1006, 0, 0),
(406, 855, 1007, 0, 0),
(407, 855, 1008, 0, 0),
(408, 855, 1009, 0, 0),
(409, 855, 1010, 0, 0),
(410, 855, 1011, 0, 0),
(411, 855, 1012, 0, 0),
(412, 855, 1013, 0, 0),
(413, 855, 1014, 0, 0),
(414, 852, 1004, 0, 0),
(415, 852, 1005, 0, 0),
(416, 852, 1006, 0, 0),
(417, 852, 1007, 0, 0),
(418, 852, 1008, 0, 0),
(419, 852, 1009, 0, 0),
(420, 852, 1010, 0, 0),
(421, 852, 1011, 0, 0),
(422, 852, 1012, 0, 0),
(423, 852, 1013, 0, 0),
(424, 852, 1014, 0, 0),
(425, 833, 1001, 0, 0),
(426, 833, 1002, 0, 0),
(427, 833, 1003, 0, 0),
(428, 833, 1004, 0, 0),
(429, 833, 1005, 0, 0),
(430, 833, 1006, 0, 0),
(431, 833, 1007, 0, 0),
(432, 833, 1008, 0, 0),
(433, 833, 1009, 0, 0),
(434, 833, 1010, 0, 0),
(435, 833, 1011, 0, 0),
(436, 833, 1012, 0, 0),
(437, 833, 1013, 0, 0),
(438, 833, 1014, 0, 0),
(439, 836, 1001, 0, 0),
(440, 836, 1002, 0, 0),
(441, 836, 1003, 0, 0),
(442, 836, 1004, 0, 0),
(443, 836, 1005, 0, 0),
(444, 836, 1006, 0, 0),
(445, 836, 1007, 0, 0),
(446, 836, 1008, 0, 0),
(447, 836, 1009, 0, 0),
(448, 836, 1010, 0, 0),
(449, 836, 1011, 0, 0),
(450, 836, 1012, 0, 0),
(451, 836, 1013, 0, 0),
(452, 836, 1014, 0, 0),
(453, 843, 1001, 0, 0),
(454, 843, 1002, 0, 0),
(455, 843, 1003, 0, 0),
(456, 843, 1004, 0, 0),
(457, 843, 1005, 0, 0),
(458, 843, 1006, 0, 0),
(459, 843, 1007, 0, 0),
(460, 843, 1008, 0, 0),
(461, 843, 1009, 0, 0),
(462, 843, 1010, 0, 0),
(463, 843, 1011, 0, 0),
(464, 843, 1012, 0, 0),
(465, 843, 1013, 0, 0),
(466, 843, 1014, 0, 0),
(467, 842, 1001, 0, 0),
(468, 842, 1002, 0, 0),
(469, 842, 1003, 0, 0),
(470, 842, 1004, 0, 0),
(471, 842, 1005, 0, 0),
(472, 842, 1006, 0, 0),
(473, 842, 1007, 0, 0),
(474, 842, 1008, 0, 0),
(475, 842, 1009, 0, 0),
(476, 842, 1010, 0, 0),
(477, 842, 1011, 0, 0),
(478, 842, 1012, 0, 0),
(479, 842, 1013, 0, 0),
(480, 842, 1014, 0, 0),
(481, 875, 1001, 0, 0),
(482, 875, 1002, 0, 0),
(483, 875, 1003, 0, 0),
(484, 875, 1004, 0, 0),
(485, 875, 1005, 0, 0),
(486, 875, 1006, 0, 0),
(487, 875, 1007, 0, 0),
(488, 875, 1008, 0, 0),
(489, 875, 1009, 0, 0),
(490, 875, 1010, 0, 0),
(491, 875, 1011, 0, 0),
(492, 875, 1012, 0, 0),
(493, 875, 1013, 0, 0),
(494, 875, 1014, 0, 0),
(495, 871, 1001, 0, 0),
(496, 871, 1002, 0, 0),
(497, 871, 1003, 0, 0),
(498, 871, 1004, 0, 0),
(499, 871, 1005, 0, 0),
(500, 871, 1006, 0, 0),
(501, 871, 1007, 0, 0),
(502, 871, 1008, 0, 0),
(503, 871, 1009, 0, 0),
(504, 871, 1010, 0, 0),
(505, 871, 1011, 0, 0),
(506, 871, 1012, 0, 0),
(507, 871, 1013, 0, 0),
(508, 871, 1014, 0, 0),
(509, 870, 1001, 0, 0),
(510, 870, 1002, 0, 0),
(511, 870, 1003, 0, 0),
(512, 870, 1004, 0, 0),
(513, 870, 1005, 0, 0),
(514, 870, 1006, 0, 0),
(515, 870, 1007, 0, 0),
(516, 870, 1008, 0, 0),
(517, 870, 1009, 0, 0),
(518, 870, 1010, 0, 0),
(519, 870, 1011, 0, 0),
(520, 870, 1012, 0, 0),
(521, 870, 1013, 0, 0),
(522, 870, 1014, 0, 0),
(523, 847, 1001, 0, 0),
(524, 847, 1002, 0, 0),
(525, 847, 1003, 0, 0),
(526, 847, 1004, 0, 0),
(527, 847, 1005, 0, 0),
(528, 847, 1006, 0, 0),
(529, 847, 1007, 0, 0),
(530, 847, 1008, 0, 0),
(531, 847, 1009, 0, 0),
(532, 847, 1010, 0, 0),
(533, 847, 1011, 0, 0),
(534, 847, 1012, 0, 0),
(535, 847, 1013, 0, 0),
(536, 847, 1014, 0, 0),
(537, 848, 1001, 0, 0),
(538, 848, 1002, 0, 0),
(539, 848, 1003, 0, 0),
(540, 848, 1004, 0, 0),
(541, 848, 1005, 0, 0),
(542, 848, 1006, 0, 0),
(543, 848, 1007, 0, 0),
(544, 848, 1008, 0, 0),
(545, 848, 1009, 0, 0),
(546, 848, 1010, 0, 0),
(547, 848, 1011, 0, 0),
(548, 848, 1012, 0, 0),
(549, 848, 1013, 0, 0),
(550, 848, 1014, 0, 0),
(551, 839, 1001, 0, 0),
(552, 839, 1002, 0, 0),
(553, 839, 1003, 0, 0),
(554, 839, 1004, 0, 0),
(555, 839, 1005, 0, 0),
(556, 839, 1006, 0, 0),
(557, 839, 1007, 0, 0),
(558, 839, 1008, 0, 0),
(559, 839, 1009, 0, 0),
(560, 839, 1010, 0, 0),
(561, 839, 1011, 0, 0),
(562, 839, 1012, 0, 0),
(563, 839, 1013, 0, 0),
(564, 839, 1014, 0, 0),
(565, 840, 1001, 0, 0),
(566, 840, 1002, 0, 0),
(567, 840, 1003, 0, 0),
(568, 840, 1004, 0, 0),
(569, 840, 1005, 0, 0),
(570, 840, 1006, 0, 0),
(571, 840, 1007, 0, 0),
(572, 840, 1008, 0, 0),
(573, 840, 1009, 0, 0),
(574, 840, 1010, 0, 0),
(575, 840, 1011, 0, 0),
(576, 840, 1012, 0, 0),
(577, 840, 1013, 0, 0),
(578, 840, 1014, 0, 0),
(579, 879, 1001, 0, 0),
(580, 879, 1002, 0, 0),
(581, 879, 1003, 0, 0),
(582, 879, 1004, 0, 0),
(583, 879, 1005, 0, 0),
(584, 879, 1006, 0, 0),
(585, 879, 1007, 0, 0),
(586, 879, 1008, 0, 0),
(587, 879, 1009, 0, 0),
(588, 879, 1010, 0, 0),
(589, 879, 1011, 0, 0),
(590, 879, 1012, 0, 0),
(591, 879, 1013, 0, 0),
(592, 879, 1014, 0, 0),
(593, 878, 1001, 0, 0),
(594, 878, 1002, 0, 0),
(595, 878, 1003, 0, 0),
(596, 878, 1004, 0, 0),
(597, 878, 1005, 0, 0),
(598, 878, 1006, 0, 0),
(599, 878, 1007, 0, 0),
(600, 878, 1008, 0, 0),
(601, 878, 1009, 0, 0),
(602, 878, 1010, 0, 0),
(603, 878, 1011, 0, 0),
(604, 878, 1012, 0, 0),
(605, 878, 1013, 0, 0),
(606, 878, 1014, 0, 0),
(607, 862, 1004, 0, 0),
(608, 862, 1005, 0, 0),
(609, 862, 1006, 0, 0),
(610, 862, 1007, 0, 0),
(611, 862, 1008, 0, 0),
(612, 862, 1009, 0, 0),
(613, 862, 1010, 0, 0),
(614, 862, 1011, 0, 0),
(615, 862, 1012, 0, 0),
(616, 862, 1013, 0, 0),
(617, 862, 1014, 0, 0),
(618, 851, 1004, 0, 0),
(619, 851, 1005, 0, 0),
(620, 851, 1006, 0, 0),
(621, 851, 1007, 0, 0),
(622, 851, 1008, 0, 0),
(623, 851, 1009, 0, 0),
(624, 851, 1010, 0, 0),
(625, 851, 1011, 0, 0),
(626, 851, 1012, 0, 0),
(627, 851, 1013, 0, 0),
(628, 851, 1014, 0, 0),
(629, 876, 1001, 0, 0),
(630, 876, 1002, 0, 0),
(631, 876, 1003, 0, 0),
(632, 876, 1004, 0, 0),
(633, 876, 1005, 0, 0),
(634, 876, 1006, 0, 0),
(635, 876, 1007, 0, 0),
(636, 876, 1008, 0, 0),
(637, 876, 1009, 0, 0),
(638, 876, 1010, 0, 0),
(639, 876, 1011, 0, 0),
(640, 876, 1012, 0, 0),
(641, 876, 1013, 0, 0),
(642, 876, 1014, 0, 0),
(643, 888, 1001, 0, 0),
(644, 888, 1002, 0, 0),
(645, 888, 1003, 0, 0),
(646, 888, 1004, 0, 0),
(647, 888, 1005, 0, 0),
(648, 888, 1006, 0, 0),
(649, 888, 1007, 0, 0),
(650, 888, 1008, 0, 0),
(651, 888, 1009, 0, 0),
(652, 888, 1010, 0, 0),
(653, 888, 1011, 0, 0),
(654, 888, 1012, 0, 0),
(655, 888, 1013, 0, 0),
(656, 888, 1014, 0, 0),
(657, 898, 1001, 0, 0),
(658, 898, 1002, 0, 0),
(659, 898, 1003, 0, 0),
(660, 898, 1004, 0, 0),
(661, 898, 1005, 0, 0),
(662, 898, 1006, 0, 0),
(663, 898, 1007, 0, 0),
(664, 898, 1008, 0, 0),
(665, 898, 1009, 0, 0),
(666, 898, 1010, 0, 0),
(667, 898, 1011, 0, 0),
(668, 898, 1012, 0, 0),
(669, 898, 1013, 0, 0),
(670, 898, 1014, 0, 0),
(671, 897, 1001, 0, 0),
(672, 897, 1002, 0, 0),
(673, 897, 1003, 0, 0),
(674, 897, 1004, 0, 0),
(675, 897, 1005, 0, 0),
(676, 897, 1006, 0, 0),
(677, 897, 1007, 0, 0),
(678, 897, 1008, 0, 0),
(679, 897, 1009, 0, 0),
(680, 897, 1010, 0, 0),
(681, 897, 1011, 0, 0),
(682, 897, 1012, 0, 0),
(683, 897, 1013, 0, 0),
(684, 897, 1014, 0, 0),
(685, 891, 1001, 0, 0),
(686, 891, 1002, 0, 0),
(687, 891, 1003, 0, 0),
(688, 891, 1004, 0, 0),
(689, 891, 1005, 0, 0),
(690, 891, 1006, 0, 0),
(691, 891, 1007, 0, 0),
(692, 891, 1008, 0, 0),
(693, 891, 1009, 0, 0),
(694, 891, 1010, 0, 0),
(695, 891, 1011, 0, 0),
(696, 891, 1012, 0, 0),
(697, 891, 1013, 0, 0),
(698, 891, 1014, 0, 0),
(699, 899, 1001, 0, 0),
(700, 899, 1002, 0, 0),
(701, 899, 1003, 0, 0),
(702, 899, 1004, 0, 0),
(703, 899, 1005, 0, 0),
(704, 899, 1006, 0, 0),
(705, 899, 1007, 0, 0),
(706, 899, 1008, 0, 0),
(707, 899, 1009, 0, 0),
(708, 899, 1010, 0, 0),
(709, 899, 1011, 0, 0),
(710, 899, 1012, 0, 0),
(711, 899, 1013, 0, 0),
(712, 899, 1014, 0, 0),
(713, 880, 1001, 0, 0),
(714, 880, 1002, 0, 0),
(715, 880, 1003, 0, 0),
(716, 880, 1004, 0, 0),
(717, 880, 1005, 0, 0),
(718, 880, 1006, 0, 0),
(719, 880, 1007, 0, 0),
(720, 880, 1008, 0, 0),
(721, 880, 1009, 0, 0),
(722, 880, 1010, 0, 0),
(723, 880, 1011, 0, 0),
(724, 880, 1012, 0, 0),
(725, 880, 1013, 0, 0),
(726, 880, 1014, 0, 0),
(727, 908, 1001, 0, 0),
(728, 908, 1002, 0, 0),
(729, 908, 1003, 0, 0),
(730, 908, 1004, 0, 0),
(731, 908, 1005, 0, 0),
(732, 908, 1006, 0, 0),
(733, 908, 1007, 0, 0),
(734, 908, 1008, 0, 0),
(735, 908, 1009, 0, 0),
(736, 908, 1010, 0, 0),
(737, 908, 1011, 0, 0),
(738, 908, 1012, 0, 0),
(739, 908, 1013, 0, 0),
(740, 908, 1014, 0, 0),
(741, 929, 1001, 0, 0),
(742, 929, 1002, 0, 0),
(743, 929, 1003, 0, 0),
(744, 929, 1004, 0, 0),
(745, 929, 1005, 0, 0),
(746, 929, 1006, 0, 0),
(747, 929, 1007, 0, 0),
(748, 929, 1008, 0, 0),
(749, 929, 1009, 0, 0),
(750, 929, 1010, 0, 0),
(751, 929, 1012, 0, 0),
(752, 929, 1014, 0, 0),
(753, 824, 1004, 0, 0),
(754, 824, 1005, 0, 0),
(755, 824, 1006, 0, 0),
(756, 824, 1007, 0, 0),
(757, 824, 1008, 0, 0),
(758, 824, 1009, 0, 0),
(759, 824, 1010, 0, 0),
(760, 824, 1011, 0, 0),
(761, 824, 1012, 0, 0),
(762, 824, 1013, 0, 0),
(763, 824, 1014, 0, 0),
(764, 919, 1001, 0, 0),
(765, 919, 1002, 0, 0),
(766, 919, 1003, 0, 0),
(767, 919, 1004, 0, 0),
(768, 919, 1005, 0, 0),
(769, 919, 1006, 0, 0),
(770, 919, 1007, 0, 0),
(771, 919, 1008, 0, 0),
(772, 919, 1009, 0, 0),
(773, 919, 1010, 0, 0),
(774, 919, 1012, 0, 0),
(775, 919, 1014, 0, 0),
(776, 912, 1001, 0, 0),
(777, 912, 1002, 0, 0),
(778, 912, 1003, 0, 0),
(779, 912, 1004, 0, 0),
(780, 912, 1005, 0, 0),
(781, 912, 1006, 0, 0),
(782, 912, 1007, 0, 0),
(783, 912, 1008, 0, 0),
(784, 912, 1010, 0, 0),
(785, 912, 1011, 0, 0),
(786, 912, 1012, 0, 0),
(787, 912, 1014, 0, 0),
(788, 913, 1001, 0, 0),
(789, 913, 1002, 0, 0),
(790, 913, 1003, 0, 0),
(791, 913, 1004, 0, 0),
(792, 913, 1005, 0, 0),
(793, 913, 1006, 0, 0),
(794, 913, 1007, 0, 0),
(795, 913, 1008, 0, 0),
(796, 913, 1009, 0, 0),
(797, 913, 1010, 0, 0),
(798, 913, 1011, 0, 0),
(799, 913, 1012, 0, 0),
(800, 913, 1014, 0, 0),
(801, 911, 1001, 0, 0),
(802, 911, 1002, 0, 0),
(803, 911, 1003, 0, 0),
(804, 911, 1004, 0, 0),
(805, 911, 1005, 0, 0),
(806, 911, 1006, 0, 0),
(807, 911, 1007, 0, 0),
(808, 911, 1008, 0, 0),
(809, 911, 1010, 0, 0),
(810, 911, 1011, 0, 0),
(811, 911, 1012, 0, 0),
(812, 911, 1014, 0, 0),
(813, 832, 1001, 0, 0),
(814, 832, 1002, 0, 0),
(815, 832, 1003, 0, 0),
(816, 832, 1004, 0, 0),
(817, 832, 1005, 0, 0),
(818, 832, 1006, 0, 0),
(819, 832, 1007, 0, 0),
(820, 832, 1008, 0, 0),
(821, 832, 1009, 0, 0),
(822, 832, 1010, 0, 0),
(823, 832, 1011, 0, 0),
(824, 832, 1012, 0, 0),
(825, 832, 1013, 0, 0),
(826, 832, 1014, 0, 0),
(827, 877, 1001, 0, 0),
(828, 877, 1002, 0, 0),
(829, 877, 1003, 0, 0),
(830, 877, 1004, 0, 0),
(831, 877, 1005, 0, 0),
(832, 877, 1006, 0, 0),
(833, 877, 1007, 0, 0),
(834, 877, 1008, 0, 0),
(835, 877, 1009, 0, 0),
(836, 877, 1010, 0, 0),
(837, 877, 1011, 0, 0),
(838, 877, 1012, 0, 0),
(839, 877, 1013, 0, 0),
(840, 877, 1014, 0, 0),
(841, 890, 1001, 0, 0),
(842, 890, 1002, 0, 0),
(843, 890, 1003, 0, 0),
(844, 890, 1004, 0, 0),
(845, 890, 1005, 0, 0),
(846, 890, 1006, 0, 0),
(847, 890, 1007, 0, 0),
(848, 890, 1008, 0, 0),
(849, 890, 1009, 0, 0),
(850, 890, 1010, 0, 0),
(851, 890, 1012, 0, 0),
(852, 890, 1014, 0, 0),
(853, 933, 1001, 0, 0),
(854, 933, 1002, 0, 0),
(855, 933, 1003, 0, 0),
(856, 933, 1004, 0, 0),
(857, 933, 1005, 0, 0),
(858, 933, 1006, 0, 0),
(859, 933, 1007, 0, 0),
(860, 933, 1008, 0, 0),
(861, 933, 1009, 0, 0),
(862, 933, 1010, 0, 0),
(863, 933, 1012, 0, 0),
(864, 933, 1014, 0, 0),
(865, 934, 1001, 0, 0),
(866, 934, 1002, 0, 0),
(867, 934, 1003, 0, 0),
(868, 934, 1004, 0, 0),
(869, 934, 1005, 0, 0),
(870, 934, 1006, 0, 0),
(871, 934, 1007, 0, 0),
(872, 934, 1008, 0, 0),
(873, 934, 1009, 0, 0),
(874, 934, 1010, 0, 0),
(875, 934, 1012, 0, 0),
(876, 934, 1013, 0, 0),
(877, 934, 1014, 0, 0),
(878, 930, 1001, 0, 0),
(879, 930, 1002, 0, 0),
(880, 930, 1003, 0, 0),
(881, 930, 1004, 0, 0),
(882, 930, 1005, 0, 0),
(883, 930, 1006, 0, 0),
(884, 930, 1007, 0, 0),
(885, 930, 1008, 0, 0),
(886, 930, 1009, 0, 0),
(887, 930, 1010, 0, 0),
(888, 930, 1011, 0, 0),
(889, 930, 1012, 0, 0),
(890, 930, 1013, 0, 0),
(891, 930, 1014, 0, 0),
(892, 935, 1001, 0, 0),
(893, 935, 1002, 0, 0),
(894, 935, 1003, 0, 0),
(895, 935, 1004, 0, 0),
(896, 935, 1005, 0, 0),
(897, 935, 1006, 0, 0),
(898, 935, 1007, 0, 0),
(899, 935, 1008, 0, 0),
(900, 935, 1009, 0, 0),
(901, 935, 1010, 0, 0),
(902, 935, 1012, 0, 0),
(903, 935, 1013, 0, 0),
(904, 935, 1014, 0, 0),
(905, 936, 1001, 0, 0),
(906, 936, 1002, 0, 0),
(907, 936, 1003, 0, 0),
(908, 936, 1004, 0, 0),
(909, 936, 1005, 0, 0),
(910, 936, 1006, 0, 0),
(911, 936, 1007, 0, 0),
(912, 936, 1008, 0, 0),
(913, 936, 1009, 0, 0),
(914, 936, 1010, 0, 0),
(915, 936, 1012, 0, 0),
(916, 936, 1013, 0, 0),
(917, 936, 1014, 0, 0),
(918, 920, 1001, 0, 0),
(919, 920, 1002, 0, 0),
(920, 920, 1003, 0, 0),
(921, 920, 1004, 0, 0),
(922, 920, 1005, 0, 0),
(923, 920, 1006, 0, 0),
(924, 920, 1007, 0, 0),
(925, 920, 1008, 0, 0),
(926, 920, 1009, 0, 0),
(927, 920, 1010, 0, 0),
(928, 920, 1011, 0, 0),
(929, 920, 1012, 0, 0),
(930, 920, 1013, 0, 0),
(931, 920, 1014, 0, 0),
(932, 856, 1001, 0, 0),
(933, 856, 1002, 0, 0),
(934, 856, 1003, 0, 0),
(935, 856, 1004, 0, 0),
(936, 856, 1005, 0, 0),
(937, 856, 1006, 0, 0),
(938, 856, 1007, 0, 0),
(939, 856, 1008, 0, 0),
(940, 856, 1009, 0, 0),
(941, 856, 1010, 0, 0),
(942, 856, 1012, 0, 0),
(943, 856, 1013, 0, 0),
(944, 856, 1014, 0, 0),
(945, 945, 1001, 0, 0),
(946, 945, 1002, 0, 0),
(947, 945, 1003, 0, 0),
(948, 945, 1004, 0, 0),
(949, 945, 1005, 0, 0),
(950, 945, 1006, 0, 0),
(951, 945, 1007, 0, 0),
(952, 945, 1008, 0, 0),
(953, 945, 1009, 0, 0),
(954, 945, 1010, 0, 0),
(955, 945, 1012, 0, 0),
(956, 945, 1013, 0, 0),
(957, 945, 1014, 0, 0),
(958, 940, 1001, 0, 0),
(959, 940, 1002, 0, 0),
(960, 940, 1003, 0, 0),
(961, 940, 1004, 0, 0),
(962, 940, 1005, 0, 0),
(963, 940, 1006, 0, 0),
(964, 940, 1007, 0, 0),
(965, 940, 1008, 0, 0),
(966, 940, 1009, 0, 0),
(967, 940, 1010, 0, 0),
(968, 940, 1011, 0, 0),
(969, 940, 1012, 0, 0),
(970, 940, 1013, 0, 0),
(971, 940, 1014, 0, 0),
(972, 941, 1001, 0, 0),
(973, 941, 1002, 0, 0),
(974, 941, 1003, 0, 0),
(975, 941, 1004, 0, 0),
(976, 941, 1005, 0, 0),
(977, 941, 1006, 0, 0),
(978, 941, 1007, 0, 0),
(979, 941, 1008, 0, 0),
(980, 941, 1009, 0, 0),
(981, 941, 1010, 0, 0),
(982, 941, 1011, 0, 0),
(983, 941, 1012, 0, 0),
(984, 941, 1013, 0, 0),
(985, 941, 1014, 0, 0),
(986, 916, 1001, 0, 0),
(987, 916, 1002, 0, 0),
(988, 916, 1003, 0, 0),
(989, 916, 1004, 0, 0),
(990, 916, 1005, 0, 0),
(991, 916, 1006, 0, 0),
(992, 916, 1007, 0, 0),
(993, 916, 1008, 0, 0),
(994, 916, 1009, 0, 0),
(995, 916, 1010, 0, 0),
(996, 916, 1011, 0, 0),
(997, 916, 1012, 0, 0),
(998, 916, 1013, 0, 0),
(999, 916, 1014, 0, 0),
(1000, 946, 1001, 0, 0),
(1001, 946, 1002, 0, 0),
(1002, 946, 1003, 0, 0),
(1003, 946, 1004, 0, 0),
(1004, 946, 1005, 0, 0),
(1005, 946, 1006, 0, 0),
(1006, 946, 1007, 0, 0),
(1007, 946, 1008, 0, 0),
(1008, 946, 1009, 0, 0),
(1009, 946, 1010, 0, 0),
(1010, 946, 1012, 0, 0),
(1011, 946, 1014, 0, 0),
(1012, 889, 1001, 0, 0),
(1013, 889, 1002, 0, 0),
(1014, 889, 1003, 0, 0),
(1015, 889, 1004, 0, 0),
(1016, 889, 1005, 0, 0),
(1017, 889, 1006, 0, 0),
(1018, 889, 1007, 0, 0),
(1019, 889, 1008, 0, 0),
(1020, 889, 1009, 0, 0),
(1021, 889, 1010, 0, 0),
(1022, 889, 1011, 0, 0),
(1023, 889, 1012, 0, 0),
(1024, 889, 1013, 0, 0),
(1025, 889, 1014, 0, 0),
(1026, 949, 1001, 0, 0),
(1027, 949, 1002, 0, 0),
(1028, 949, 1003, 0, 0),
(1029, 949, 1004, 0, 0),
(1030, 949, 1005, 0, 0),
(1031, 949, 1006, 0, 0),
(1032, 949, 1007, 0, 0),
(1033, 949, 1008, 0, 0),
(1034, 949, 1009, 0, 0),
(1035, 949, 1010, 0, 0),
(1036, 949, 1012, 0, 0),
(1037, 949, 1014, 0, 0),
(1038, 922, 1001, 0, 0),
(1039, 922, 1002, 0, 0),
(1040, 922, 1003, 0, 0),
(1041, 922, 1004, 0, 0),
(1042, 922, 1005, 0, 0),
(1043, 922, 1006, 0, 0),
(1044, 922, 1007, 0, 0),
(1045, 922, 1008, 0, 0),
(1046, 922, 1009, 0, 0),
(1047, 922, 1010, 0, 0),
(1048, 922, 1011, 0, 0),
(1049, 922, 1012, 0, 0),
(1050, 922, 1013, 0, 0),
(1051, 922, 1014, 0, 0),
(1052, 947, 1001, 0, 0),
(1053, 947, 1002, 0, 0),
(1054, 947, 1003, 0, 0),
(1055, 947, 1004, 0, 0),
(1056, 947, 1005, 0, 0),
(1057, 947, 1006, 0, 0),
(1058, 947, 1007, 0, 0),
(1059, 947, 1008, 0, 0),
(1060, 947, 1009, 0, 0),
(1061, 947, 1010, 0, 0),
(1062, 947, 1012, 0, 0),
(1063, 947, 1013, 0, 0),
(1064, 947, 1014, 0, 0),
(1065, 948, 1001, 0, 0),
(1066, 948, 1002, 0, 0),
(1067, 948, 1003, 0, 0),
(1068, 948, 1004, 0, 0),
(1069, 948, 1005, 0, 0),
(1070, 948, 1006, 0, 0),
(1071, 948, 1007, 0, 0),
(1072, 948, 1008, 0, 0),
(1073, 948, 1009, 0, 0),
(1074, 948, 1010, 0, 0),
(1075, 948, 1012, 0, 0),
(1076, 948, 1013, 0, 0),
(1077, 948, 1014, 0, 0),
(1078, 918, 1001, 0, 0),
(1079, 918, 1002, 0, 0),
(1080, 918, 1003, 0, 0),
(1081, 918, 1004, 0, 0),
(1082, 918, 1005, 0, 0),
(1083, 918, 1006, 0, 0),
(1084, 918, 1007, 0, 0),
(1085, 918, 1008, 0, 0),
(1086, 918, 1009, 0, 0),
(1087, 918, 1010, 0, 0),
(1088, 918, 1011, 0, 0),
(1089, 918, 1012, 0, 0),
(1090, 918, 1013, 0, 0),
(1091, 918, 1014, 0, 0),
(1092, 943, 1001, 0, 0),
(1093, 943, 1002, 0, 0),
(1094, 943, 1003, 0, 0),
(1095, 943, 1004, 0, 0),
(1096, 943, 1005, 0, 0),
(1097, 943, 1006, 0, 0),
(1098, 943, 1007, 0, 0),
(1099, 943, 1008, 0, 0),
(1100, 943, 1009, 0, 0),
(1101, 943, 1010, 0, 0),
(1102, 943, 1011, 0, 0),
(1103, 943, 1012, 0, 0),
(1104, 943, 1013, 0, 0),
(1105, 943, 1014, 0, 0),
(1106, 921, 1001, 0, 0),
(1107, 921, 1002, 0, 0),
(1108, 921, 1003, 0, 0),
(1109, 921, 1004, 0, 0),
(1110, 921, 1005, 0, 0),
(1111, 921, 1006, 0, 0),
(1112, 921, 1007, 0, 0),
(1113, 921, 1008, 0, 0),
(1114, 921, 1009, 0, 0),
(1115, 921, 1010, 0, 0),
(1116, 921, 1011, 0, 0),
(1117, 921, 1012, 0, 0),
(1118, 921, 1013, 0, 0),
(1119, 921, 1014, 0, 0),
(1120, 938, 1001, 0, 0),
(1121, 938, 1002, 0, 0),
(1122, 938, 1003, 0, 0),
(1123, 938, 1004, 0, 0),
(1124, 938, 1005, 0, 0),
(1125, 938, 1006, 0, 0),
(1126, 938, 1007, 0, 0),
(1127, 938, 1008, 0, 0),
(1128, 938, 1009, 0, 0),
(1129, 938, 1010, 0, 0),
(1130, 938, 1011, 0, 0),
(1131, 938, 1012, 0, 0),
(1132, 938, 1013, 0, 0),
(1133, 938, 1014, 0, 0),
(1134, 907, 1001, 0, 0),
(1135, 907, 1002, 0, 0),
(1136, 907, 1003, 0, 0),
(1137, 907, 1004, 0, 0),
(1138, 907, 1005, 0, 0),
(1139, 907, 1006, 0, 0),
(1140, 907, 1007, 0, 0),
(1141, 907, 1008, 0, 0),
(1142, 907, 1009, 0, 0),
(1143, 907, 1010, 0, 0),
(1144, 907, 1011, 0, 0),
(1145, 907, 1012, 0, 0),
(1146, 907, 1013, 0, 0),
(1147, 907, 1014, 0, 0),
(1148, 926, 1001, 0, 0),
(1149, 926, 1002, 0, 0),
(1150, 926, 1003, 0, 0),
(1151, 926, 1004, 0, 0),
(1152, 926, 1005, 0, 0),
(1153, 926, 1006, 0, 0),
(1154, 926, 1007, 0, 0),
(1155, 926, 1008, 0, 0),
(1156, 926, 1009, 0, 0),
(1157, 926, 1010, 0, 0),
(1158, 926, 1011, 0, 0),
(1159, 926, 1012, 0, 0),
(1160, 926, 1013, 0, 0),
(1161, 926, 1014, 0, 0),
(1162, 931, 1001, 0, 0),
(1163, 931, 1002, 0, 0),
(1164, 931, 1003, 0, 0),
(1165, 931, 1004, 0, 0),
(1166, 931, 1005, 0, 0),
(1167, 931, 1006, 0, 0),
(1168, 931, 1007, 0, 0),
(1169, 931, 1008, 0, 0),
(1170, 931, 1009, 0, 0),
(1171, 931, 1010, 0, 0),
(1172, 931, 1011, 0, 0),
(1173, 931, 1012, 0, 0),
(1174, 931, 1013, 0, 0),
(1175, 931, 1014, 0, 0),
(1176, 963, 1001, 0, 0),
(1177, 963, 1002, 0, 0),
(1178, 963, 1003, 0, 0),
(1179, 963, 1004, 0, 0),
(1180, 963, 1005, 0, 0),
(1181, 963, 1006, 0, 0),
(1182, 963, 1007, 0, 0),
(1183, 963, 1008, 0, 0),
(1184, 963, 1009, 0, 0),
(1185, 963, 1010, 0, 0),
(1186, 963, 1011, 0, 0),
(1187, 963, 1012, 0, 0),
(1188, 963, 1013, 0, 0),
(1189, 963, 1014, 0, 0),
(1190, 964, 1001, 0, 0),
(1191, 964, 1002, 0, 0),
(1192, 964, 1003, 0, 0),
(1193, 964, 1004, 0, 0),
(1194, 964, 1005, 0, 0),
(1195, 964, 1006, 0, 0),
(1196, 964, 1007, 0, 0),
(1197, 964, 1008, 0, 0),
(1198, 964, 1009, 0, 0),
(1199, 964, 1010, 0, 0),
(1200, 964, 1011, 0, 0),
(1201, 964, 1012, 0, 0),
(1202, 964, 1013, 0, 0),
(1203, 964, 1014, 0, 0),
(1204, 958, 1001, 0, 0),
(1205, 958, 1002, 0, 0),
(1206, 958, 1003, 0, 0),
(1207, 958, 1004, 0, 0),
(1208, 958, 1005, 0, 0),
(1209, 958, 1006, 0, 0),
(1210, 958, 1007, 0, 0),
(1211, 958, 1008, 0, 0),
(1212, 958, 1009, 0, 0),
(1213, 958, 1010, 0, 0),
(1214, 958, 1011, 0, 0),
(1215, 958, 1012, 0, 0),
(1216, 958, 1013, 0, 0),
(1217, 958, 1014, 0, 0),
(1218, 959, 1001, 0, 0),
(1219, 959, 1002, 0, 0),
(1220, 959, 1003, 0, 0),
(1221, 959, 1004, 0, 0),
(1222, 959, 1005, 0, 0),
(1223, 959, 1006, 0, 0),
(1224, 959, 1007, 0, 0),
(1225, 959, 1008, 0, 0),
(1226, 959, 1009, 0, 0),
(1227, 959, 1010, 0, 0),
(1228, 959, 1011, 0, 0),
(1229, 959, 1012, 0, 0),
(1230, 959, 1013, 0, 0),
(1231, 959, 1014, 0, 0),
(1232, 932, 1001, 0, 0),
(1233, 932, 1002, 0, 0),
(1234, 932, 1003, 0, 0),
(1235, 932, 1004, 0, 0),
(1236, 932, 1005, 0, 0),
(1237, 932, 1006, 0, 0),
(1238, 932, 1007, 0, 0),
(1239, 932, 1008, 0, 0),
(1240, 932, 1009, 0, 0),
(1241, 932, 1010, 0, 0),
(1242, 932, 1011, 0, 0),
(1243, 932, 1012, 0, 0),
(1244, 932, 1013, 0, 0),
(1245, 932, 1014, 0, 0),
(1246, 965, 1001, 0, 0),
(1247, 965, 1002, 0, 0),
(1248, 965, 1003, 0, 0),
(1249, 965, 1004, 0, 0),
(1250, 965, 1005, 0, 0),
(1251, 965, 1006, 0, 0),
(1252, 965, 1007, 0, 0),
(1253, 965, 1008, 0, 0),
(1254, 965, 1009, 0, 0),
(1255, 965, 1010, 0, 0),
(1256, 965, 1011, 0, 0),
(1257, 965, 1012, 0, 0),
(1258, 965, 1013, 0, 0),
(1259, 965, 1014, 0, 0),
(1260, 966, 1001, 0, 0),
(1261, 966, 1002, 0, 0),
(1262, 966, 1003, 0, 0),
(1263, 966, 1004, 0, 0),
(1264, 966, 1005, 0, 0),
(1265, 966, 1006, 0, 0),
(1266, 966, 1007, 0, 0),
(1267, 966, 1008, 0, 0),
(1268, 966, 1009, 0, 0),
(1269, 966, 1010, 0, 0),
(1270, 966, 1011, 0, 0),
(1271, 966, 1012, 0, 0),
(1272, 966, 1013, 0, 0),
(1273, 966, 1014, 0, 0),
(1274, 961, 1001, 0, 0),
(1275, 961, 1002, 0, 0),
(1276, 961, 1003, 0, 0),
(1277, 961, 1004, 0, 0),
(1278, 961, 1005, 0, 0),
(1279, 961, 1006, 0, 0),
(1280, 961, 1007, 0, 0),
(1281, 961, 1008, 0, 0),
(1282, 961, 1009, 0, 0),
(1283, 961, 1010, 0, 0),
(1284, 961, 1011, 0, 0),
(1285, 961, 1012, 0, 0),
(1286, 961, 1013, 0, 0),
(1287, 961, 1014, 0, 0),
(1288, 960, 1001, 0, 0),
(1289, 960, 1002, 0, 0),
(1290, 960, 1003, 0, 0),
(1291, 960, 1004, 0, 0),
(1292, 960, 1005, 0, 0),
(1293, 960, 1006, 0, 0),
(1294, 960, 1007, 0, 0),
(1295, 960, 1008, 0, 0),
(1296, 960, 1009, 0, 0),
(1297, 960, 1010, 0, 0),
(1298, 960, 1011, 0, 0),
(1299, 960, 1012, 0, 0),
(1300, 960, 1013, 0, 0),
(1301, 960, 1014, 0, 0),
(1302, 970, 1001, 0, 0),
(1303, 970, 1002, 0, 0),
(1304, 970, 1003, 0, 0),
(1305, 970, 1004, 0, 0),
(1306, 970, 1005, 0, 0),
(1307, 970, 1006, 0, 0),
(1308, 970, 1007, 0, 0),
(1309, 970, 1008, 0, 0),
(1310, 970, 1009, 0, 0),
(1311, 970, 1010, 0, 0),
(1312, 970, 1012, 0, 0),
(1313, 970, 1013, 0, 0),
(1314, 970, 1014, 0, 0),
(1315, 969, 1001, 0, 0),
(1316, 969, 1002, 0, 0),
(1317, 969, 1003, 0, 0),
(1318, 969, 1004, 0, 0),
(1319, 969, 1005, 0, 0),
(1320, 969, 1006, 0, 0),
(1321, 969, 1007, 0, 0),
(1322, 969, 1008, 0, 0),
(1323, 969, 1009, 0, 0),
(1324, 969, 1010, 0, 0),
(1325, 969, 1011, 0, 0),
(1326, 969, 1012, 0, 0),
(1327, 969, 1013, 0, 0),
(1328, 969, 1014, 0, 0),
(1329, 925, 1004, 0, 0),
(1330, 925, 1005, 0, 0),
(1331, 925, 1006, 0, 0),
(1332, 925, 1007, 0, 0),
(1333, 925, 1008, 0, 0),
(1334, 925, 1009, 0, 0),
(1335, 925, 1010, 0, 0),
(1336, 925, 1011, 0, 0),
(1337, 925, 1012, 0, 0),
(1338, 925, 1013, 0, 0),
(1339, 925, 1014, 0, 0),
(1340, 923, 1004, 0, 0),
(1341, 923, 1005, 0, 0),
(1342, 923, 1006, 0, 0),
(1343, 923, 1007, 0, 0),
(1344, 923, 1008, 0, 0),
(1345, 923, 1009, 0, 0),
(1346, 923, 1010, 0, 0),
(1347, 923, 1011, 0, 0),
(1348, 923, 1012, 0, 0),
(1349, 923, 1013, 0, 0),
(1350, 923, 1014, 0, 0),
(1351, 884, 1004, 0, 0),
(1352, 884, 1005, 0, 0),
(1353, 884, 1006, 0, 0),
(1354, 884, 1007, 0, 0),
(1355, 884, 1008, 0, 0),
(1356, 884, 1009, 0, 0),
(1357, 884, 1010, 0, 0),
(1358, 884, 1011, 0, 0),
(1359, 884, 1012, 0, 0),
(1360, 884, 1013, 0, 0),
(1361, 884, 1014, 0, 0),
(1362, 893, 1004, 0, 0),
(1363, 893, 1005, 0, 0),
(1364, 893, 1006, 0, 0),
(1365, 893, 1007, 0, 0),
(1366, 893, 1008, 0, 0),
(1367, 893, 1009, 0, 0),
(1368, 893, 1010, 0, 0),
(1369, 893, 1011, 0, 0),
(1370, 893, 1012, 0, 0),
(1371, 893, 1013, 0, 0),
(1372, 893, 1014, 0, 0),
(1373, 854, 1004, 0, 0),
(1374, 854, 1005, 0, 0),
(1375, 854, 1006, 0, 0),
(1376, 854, 1007, 0, 0),
(1377, 854, 1008, 0, 0),
(1378, 854, 1009, 0, 0),
(1379, 854, 1010, 0, 0),
(1380, 854, 1011, 0, 0),
(1381, 854, 1012, 0, 0),
(1382, 854, 1013, 0, 0),
(1383, 854, 1014, 0, 0),
(1384, 894, 1004, 0, 0),
(1385, 894, 1005, 0, 0),
(1386, 894, 1006, 0, 0),
(1387, 894, 1007, 0, 0),
(1388, 894, 1008, 0, 0),
(1389, 894, 1009, 0, 0),
(1390, 894, 1010, 0, 0),
(1391, 894, 1011, 0, 0),
(1392, 894, 1012, 0, 0),
(1393, 894, 1013, 0, 0),
(1394, 894, 1014, 0, 0),
(1395, 896, 1004, 0, 0),
(1396, 896, 1005, 0, 0),
(1397, 896, 1006, 0, 0),
(1398, 896, 1007, 0, 0),
(1399, 896, 1008, 0, 0),
(1400, 896, 1009, 0, 0),
(1401, 896, 1010, 0, 0),
(1402, 896, 1011, 0, 0),
(1403, 896, 1012, 0, 0),
(1404, 896, 1013, 0, 0),
(1405, 896, 1014, 0, 0),
(1406, 909, 1004, 0, 0),
(1407, 909, 1005, 0, 0),
(1408, 909, 1006, 0, 0),
(1409, 909, 1007, 0, 0),
(1410, 909, 1008, 0, 0),
(1411, 909, 1009, 0, 0),
(1412, 909, 1010, 0, 0),
(1413, 909, 1011, 0, 0),
(1414, 909, 1012, 0, 0),
(1415, 909, 1013, 0, 0),
(1416, 909, 1014, 0, 0),
(1417, 924, 1004, 0, 0),
(1418, 924, 1005, 0, 0),
(1419, 924, 1006, 0, 0),
(1420, 924, 1007, 0, 0),
(1421, 924, 1008, 0, 0),
(1422, 924, 1009, 0, 0),
(1423, 924, 1010, 0, 0),
(1424, 924, 1011, 0, 0),
(1425, 924, 1012, 0, 0),
(1426, 924, 1013, 0, 0),
(1427, 924, 1014, 0, 0),
(1428, 1008, 1004, 0, 0),
(1429, 1008, 1005, 0, 0),
(1430, 1008, 1006, 0, 0),
(1431, 1008, 1007, 0, 0),
(1432, 1008, 1008, 0, 0),
(1433, 1008, 1009, 0, 0),
(1434, 1008, 1010, 0, 0),
(1435, 1008, 1011, 0, 0),
(1436, 1008, 1012, 0, 0),
(1437, 1008, 1013, 0, 0),
(1438, 1008, 1014, 0, 0),
(1439, 1010, 1004, 0, 0),
(1440, 1010, 1005, 0, 0),
(1441, 1010, 1006, 0, 0),
(1442, 1010, 1007, 0, 0),
(1443, 1010, 1008, 0, 0),
(1444, 1010, 1009, 0, 0),
(1445, 1010, 1010, 0, 0),
(1446, 1010, 1011, 0, 0),
(1447, 1010, 1012, 0, 0),
(1448, 1010, 1013, 0, 0),
(1449, 1010, 1014, 0, 0),
(1450, 1011, 1004, 0, 0),
(1451, 1011, 1005, 0, 0),
(1452, 1011, 1006, 0, 0),
(1453, 1011, 1007, 0, 0),
(1454, 1011, 1008, 0, 0),
(1455, 1011, 1009, 0, 0),
(1456, 1011, 1010, 0, 0),
(1457, 1011, 1011, 0, 0),
(1458, 1011, 1012, 0, 0),
(1459, 1011, 1013, 0, 0),
(1460, 1011, 1014, 0, 0),
(1461, 984, 1001, 0, 0),
(1462, 984, 1002, 0, 0),
(1463, 984, 1003, 0, 0),
(1464, 984, 1004, 0, 0),
(1465, 984, 1005, 0, 0),
(1466, 984, 1006, 0, 0),
(1467, 984, 1007, 0, 0),
(1468, 984, 1008, 0, 0),
(1469, 984, 1009, 0, 0),
(1470, 984, 1010, 0, 0),
(1471, 984, 1011, 0, 0),
(1472, 984, 1012, 0, 0),
(1473, 984, 1013, 0, 0),
(1474, 984, 1014, 0, 0),
(1475, 972, 1001, 0, 0),
(1476, 972, 1002, 0, 0),
(1477, 972, 1003, 0, 0),
(1478, 972, 1004, 0, 0),
(1479, 972, 1005, 0, 0),
(1480, 972, 1006, 0, 0),
(1481, 972, 1007, 0, 0),
(1482, 972, 1008, 0, 0),
(1483, 972, 1009, 0, 0),
(1484, 972, 1010, 0, 0),
(1485, 972, 1011, 0, 0),
(1486, 972, 1012, 0, 0),
(1487, 972, 1013, 0, 0),
(1488, 972, 1014, 0, 0),
(1489, 967, 1001, 0, 0),
(1490, 967, 1002, 0, 0),
(1491, 967, 1003, 0, 0),
(1492, 967, 1004, 0, 0),
(1493, 967, 1005, 0, 0),
(1494, 967, 1006, 0, 0),
(1495, 967, 1007, 0, 0),
(1496, 967, 1008, 0, 0),
(1497, 967, 1009, 0, 0),
(1498, 967, 1010, 0, 0),
(1499, 967, 1011, 0, 0),
(1500, 967, 1012, 0, 0),
(1501, 967, 1013, 0, 0),
(1502, 967, 1014, 0, 0),
(1503, 957, 1001, 0, 0),
(1504, 957, 1002, 0, 0),
(1505, 957, 1003, 0, 0),
(1506, 957, 1004, 0, 0),
(1507, 957, 1005, 0, 0),
(1508, 957, 1006, 0, 0),
(1509, 957, 1007, 0, 0),
(1510, 957, 1008, 0, 0),
(1511, 957, 1009, 0, 0),
(1512, 957, 1010, 0, 0),
(1513, 957, 1011, 0, 0),
(1514, 957, 1012, 0, 0),
(1515, 957, 1013, 0, 0),
(1516, 957, 1014, 0, 0),
(1517, 956, 1001, 0, 0),
(1518, 956, 1002, 0, 0),
(1519, 956, 1003, 0, 0),
(1520, 956, 1004, 0, 0),
(1521, 956, 1005, 0, 0),
(1522, 956, 1006, 0, 0),
(1523, 956, 1007, 0, 0),
(1524, 956, 1008, 0, 0),
(1525, 956, 1009, 0, 0),
(1526, 956, 1010, 0, 0),
(1527, 956, 1011, 0, 0),
(1528, 956, 1012, 0, 0),
(1529, 956, 1013, 0, 0),
(1530, 956, 1014, 0, 0),
(1531, 955, 1001, 0, 0),
(1532, 955, 1002, 0, 0),
(1533, 955, 1003, 0, 0),
(1534, 955, 1004, 0, 0),
(1535, 955, 1005, 0, 0),
(1536, 955, 1006, 0, 0),
(1537, 955, 1007, 0, 0),
(1538, 955, 1008, 0, 0),
(1539, 955, 1009, 0, 0),
(1540, 955, 1010, 0, 0),
(1541, 955, 1011, 0, 0),
(1542, 955, 1012, 0, 0),
(1543, 955, 1013, 0, 0),
(1544, 955, 1014, 0, 0),
(1545, 954, 1001, 0, 0),
(1546, 954, 1002, 0, 0),
(1547, 954, 1003, 0, 0),
(1548, 954, 1004, 0, 0),
(1549, 954, 1005, 0, 0),
(1550, 954, 1006, 0, 0),
(1551, 954, 1007, 0, 0),
(1552, 954, 1008, 0, 0),
(1553, 954, 1009, 0, 0),
(1554, 954, 1010, 0, 0),
(1555, 954, 1011, 0, 0),
(1556, 954, 1012, 0, 0),
(1557, 954, 1013, 0, 0),
(1558, 954, 1014, 0, 0),
(1559, 953, 1001, 0, 0),
(1560, 953, 1002, 0, 0),
(1561, 953, 1003, 0, 0),
(1562, 953, 1004, 0, 0),
(1563, 953, 1005, 0, 0),
(1564, 953, 1006, 0, 0),
(1565, 953, 1007, 0, 0),
(1566, 953, 1008, 0, 0),
(1567, 953, 1009, 0, 0),
(1568, 953, 1010, 0, 0),
(1569, 953, 1011, 0, 0),
(1570, 953, 1012, 0, 0),
(1571, 953, 1013, 0, 0),
(1572, 953, 1014, 0, 0),
(1573, 952, 1001, 0, 0),
(1574, 952, 1002, 0, 0),
(1575, 952, 1003, 0, 0),
(1576, 952, 1004, 0, 0),
(1577, 952, 1005, 0, 0),
(1578, 952, 1006, 0, 0),
(1579, 952, 1007, 0, 0),
(1580, 952, 1008, 0, 0),
(1581, 952, 1009, 0, 0),
(1582, 952, 1010, 0, 0),
(1583, 952, 1011, 0, 0),
(1584, 952, 1012, 0, 0),
(1585, 952, 1013, 0, 0),
(1586, 952, 1014, 0, 0),
(1587, 950, 1001, 0, 0),
(1588, 950, 1002, 0, 0),
(1589, 950, 1003, 0, 0),
(1590, 950, 1004, 0, 0),
(1591, 950, 1005, 0, 0),
(1592, 950, 1006, 0, 0),
(1593, 950, 1007, 0, 0),
(1594, 950, 1008, 0, 0),
(1595, 950, 1009, 0, 0),
(1596, 950, 1010, 0, 0),
(1597, 950, 1011, 0, 0),
(1598, 950, 1012, 0, 0),
(1599, 950, 1013, 0, 0),
(1600, 950, 1014, 0, 0),
(1601, 944, 1001, 0, 0),
(1602, 944, 1002, 0, 0),
(1603, 944, 1003, 0, 0),
(1604, 944, 1004, 0, 0),
(1605, 944, 1005, 0, 0),
(1606, 944, 1006, 0, 0),
(1607, 944, 1007, 0, 0),
(1608, 944, 1008, 0, 0),
(1609, 944, 1009, 0, 0),
(1610, 944, 1010, 0, 0),
(1611, 944, 1011, 0, 0),
(1612, 944, 1012, 0, 0),
(1613, 944, 1013, 0, 0),
(1614, 944, 1014, 0, 0),
(1615, 939, 1001, 0, 0),
(1616, 939, 1002, 0, 0),
(1617, 939, 1003, 0, 0),
(1618, 939, 1004, 0, 0),
(1619, 939, 1005, 0, 0),
(1620, 939, 1006, 0, 0),
(1621, 939, 1007, 0, 0),
(1622, 939, 1008, 0, 0),
(1623, 939, 1009, 0, 0),
(1624, 939, 1010, 0, 0),
(1625, 939, 1011, 0, 0),
(1626, 939, 1012, 0, 0),
(1627, 939, 1013, 0, 0),
(1628, 939, 1014, 0, 0),
(1629, 937, 1001, 0, 0),
(1630, 937, 1002, 0, 0),
(1631, 937, 1003, 0, 0),
(1632, 937, 1004, 0, 0),
(1633, 937, 1005, 0, 0),
(1634, 937, 1006, 0, 0),
(1635, 937, 1007, 0, 0),
(1636, 937, 1008, 0, 0),
(1637, 937, 1009, 0, 0),
(1638, 937, 1010, 0, 0),
(1639, 937, 1011, 0, 0),
(1640, 937, 1012, 0, 0),
(1641, 937, 1013, 0, 0),
(1642, 937, 1014, 0, 0),
(1643, 928, 1001, 0, 0),
(1644, 928, 1002, 0, 0),
(1645, 928, 1003, 0, 0),
(1646, 928, 1004, 0, 0),
(1647, 928, 1005, 0, 0),
(1648, 928, 1006, 0, 0),
(1649, 928, 1007, 0, 0),
(1650, 928, 1008, 0, 0),
(1651, 928, 1009, 0, 0),
(1652, 928, 1010, 0, 0),
(1653, 928, 1011, 0, 0),
(1654, 928, 1012, 0, 0),
(1655, 928, 1013, 0, 0),
(1656, 928, 1014, 0, 0),
(1657, 927, 1001, 0, 0),
(1658, 927, 1002, 0, 0),
(1659, 927, 1003, 0, 0),
(1660, 927, 1004, 0, 0),
(1661, 927, 1005, 0, 0),
(1662, 927, 1006, 0, 0),
(1663, 927, 1007, 0, 0),
(1664, 927, 1008, 0, 0),
(1665, 927, 1009, 0, 0),
(1666, 927, 1010, 0, 0),
(1667, 927, 1011, 0, 0),
(1668, 927, 1012, 0, 0),
(1669, 927, 1013, 0, 0),
(1670, 927, 1014, 0, 0),
(1671, 915, 1001, 0, 0),
(1672, 915, 1002, 0, 0),
(1673, 915, 1003, 0, 0),
(1674, 915, 1004, 0, 0),
(1675, 915, 1005, 0, 0),
(1676, 915, 1006, 0, 0),
(1677, 915, 1007, 0, 0),
(1678, 915, 1008, 0, 0),
(1679, 915, 1009, 0, 0),
(1680, 915, 1010, 0, 0),
(1681, 915, 1011, 0, 0),
(1682, 915, 1012, 0, 0),
(1683, 915, 1013, 0, 0),
(1684, 915, 1014, 0, 0),
(1685, 914, 1001, 0, 0),
(1686, 914, 1002, 0, 0),
(1687, 914, 1003, 0, 0),
(1688, 914, 1004, 0, 0),
(1689, 914, 1005, 0, 0),
(1690, 914, 1006, 0, 0),
(1691, 914, 1007, 0, 0),
(1692, 914, 1008, 0, 0),
(1693, 914, 1009, 0, 0),
(1694, 914, 1010, 0, 0),
(1695, 914, 1011, 0, 0),
(1696, 914, 1012, 0, 0),
(1697, 914, 1013, 0, 0),
(1698, 914, 1014, 0, 0),
(1699, 906, 1001, 0, 0),
(1700, 906, 1002, 0, 0),
(1701, 906, 1003, 0, 0),
(1702, 906, 1004, 0, 0),
(1703, 906, 1005, 0, 0),
(1704, 906, 1006, 0, 0),
(1705, 906, 1007, 0, 0),
(1706, 906, 1008, 0, 0),
(1707, 906, 1009, 0, 0),
(1708, 906, 1010, 0, 0),
(1709, 906, 1011, 0, 0),
(1710, 906, 1012, 0, 0),
(1711, 906, 1013, 0, 0),
(1712, 906, 1014, 0, 0),
(1713, 887, 1004, 0, 0),
(1714, 887, 1005, 0, 0),
(1715, 887, 1006, 0, 0),
(1716, 887, 1007, 0, 0),
(1717, 887, 1008, 0, 0),
(1718, 887, 1009, 0, 0),
(1719, 887, 1010, 0, 0),
(1720, 887, 1011, 0, 0),
(1721, 887, 1012, 0, 0),
(1722, 887, 1013, 0, 0),
(1723, 887, 1014, 0, 0),
(1724, 910, 1004, 0, 0),
(1725, 910, 1005, 0, 0),
(1726, 910, 1006, 0, 0),
(1727, 910, 1007, 0, 0),
(1728, 910, 1008, 0, 0),
(1729, 910, 1009, 0, 0),
(1730, 910, 1010, 0, 0),
(1731, 910, 1011, 0, 0),
(1732, 910, 1012, 0, 0),
(1733, 910, 1013, 0, 0),
(1734, 910, 1014, 0, 0),
(1735, 910, 1004, 0, 0),
(1736, 910, 1005, 0, 0),
(1737, 910, 1006, 0, 0),
(1738, 910, 1007, 0, 0),
(1739, 910, 1008, 0, 0),
(1740, 910, 1009, 0, 0),
(1741, 910, 1010, 0, 0),
(1742, 910, 1011, 0, 0),
(1743, 910, 1012, 0, 0),
(1744, 910, 1013, 0, 0),
(1745, 910, 1014, 0, 0),
(1746, 905, 1001, 0, 0),
(1747, 905, 1002, 0, 0),
(1748, 905, 1003, 0, 0),
(1749, 905, 1004, 0, 0),
(1750, 905, 1005, 0, 0),
(1751, 905, 1006, 0, 0),
(1752, 905, 1007, 0, 0),
(1753, 905, 1008, 0, 0),
(1754, 905, 1009, 0, 0),
(1755, 905, 1010, 0, 0),
(1756, 905, 1011, 0, 0),
(1757, 905, 1012, 0, 0),
(1758, 905, 1013, 0, 0),
(1759, 905, 1014, 0, 0),
(1760, 903, 1001, 0, 0),
(1761, 903, 1002, 0, 0),
(1762, 903, 1003, 0, 0),
(1763, 903, 1004, 0, 0),
(1764, 903, 1005, 0, 0),
(1765, 903, 1006, 0, 0),
(1766, 903, 1007, 0, 0),
(1767, 903, 1008, 0, 0),
(1768, 903, 1009, 0, 0),
(1769, 903, 1010, 0, 0),
(1770, 903, 1011, 0, 0),
(1771, 903, 1012, 0, 0),
(1772, 903, 1013, 0, 0),
(1773, 903, 1014, 0, 0),
(1774, 902, 1001, 0, 0),
(1775, 902, 1002, 0, 0),
(1776, 902, 1003, 0, 0),
(1777, 902, 1004, 0, 0),
(1778, 902, 1005, 0, 0),
(1779, 902, 1006, 0, 0),
(1780, 902, 1007, 0, 0),
(1781, 902, 1008, 0, 0),
(1782, 902, 1009, 0, 0),
(1783, 902, 1010, 0, 0),
(1784, 902, 1011, 0, 0),
(1785, 902, 1012, 0, 0),
(1786, 902, 1013, 0, 0),
(1787, 902, 1014, 0, 0),
(1788, 901, 1001, 0, 0),
(1789, 901, 1002, 0, 0),
(1790, 901, 1003, 0, 0),
(1791, 901, 1004, 0, 0),
(1792, 901, 1005, 0, 0),
(1793, 901, 1006, 0, 0),
(1794, 901, 1007, 0, 0),
(1795, 901, 1008, 0, 0),
(1796, 901, 1009, 0, 0),
(1797, 901, 1010, 0, 0),
(1798, 901, 1011, 0, 0),
(1799, 901, 1012, 0, 0),
(1800, 901, 1013, 0, 0),
(1801, 901, 1014, 0, 0),
(1802, 892, 1001, 0, 0),
(1803, 892, 1002, 0, 0),
(1804, 892, 1003, 0, 0),
(1805, 892, 1004, 0, 0),
(1806, 892, 1005, 0, 0),
(1807, 892, 1006, 0, 0),
(1808, 892, 1007, 0, 0),
(1809, 892, 1008, 0, 0),
(1810, 892, 1009, 0, 0),
(1811, 892, 1010, 0, 0),
(1812, 892, 1011, 0, 0),
(1813, 892, 1012, 0, 0),
(1814, 892, 1013, 0, 0),
(1815, 892, 1014, 0, 0),
(1816, 885, 1001, 0, 0),
(1817, 885, 1002, 0, 0),
(1818, 885, 1003, 0, 0),
(1819, 885, 1004, 0, 0),
(1820, 885, 1005, 0, 0),
(1821, 885, 1006, 0, 0),
(1822, 885, 1007, 0, 0),
(1823, 885, 1008, 0, 0),
(1824, 885, 1009, 0, 0),
(1825, 885, 1010, 0, 0),
(1826, 885, 1011, 0, 0),
(1827, 885, 1012, 0, 0),
(1828, 885, 1013, 0, 0),
(1829, 885, 1014, 0, 0),
(1830, 883, 1001, 0, 0),
(1831, 883, 1002, 0, 0),
(1832, 883, 1003, 0, 0),
(1833, 883, 1004, 0, 0),
(1834, 883, 1005, 0, 0),
(1835, 883, 1006, 0, 0),
(1836, 883, 1007, 0, 0),
(1837, 883, 1008, 0, 0),
(1838, 883, 1009, 0, 0),
(1839, 883, 1010, 0, 0),
(1840, 883, 1011, 0, 0),
(1841, 883, 1012, 0, 0),
(1842, 883, 1013, 0, 0),
(1843, 883, 1014, 0, 0),
(1844, 882, 1001, 0, 0),
(1845, 882, 1002, 0, 0),
(1846, 882, 1003, 0, 0),
(1847, 882, 1004, 0, 0),
(1848, 882, 1005, 0, 0),
(1849, 882, 1006, 0, 0),
(1850, 882, 1007, 0, 0),
(1851, 882, 1008, 0, 0),
(1852, 882, 1009, 0, 0),
(1853, 882, 1010, 0, 0),
(1854, 882, 1011, 0, 0),
(1855, 882, 1012, 0, 0),
(1856, 882, 1013, 0, 0),
(1857, 882, 1014, 0, 0),
(1858, 881, 1001, 0, 0),
(1859, 881, 1002, 0, 0),
(1860, 881, 1003, 0, 0),
(1861, 881, 1004, 0, 0),
(1862, 881, 1005, 0, 0),
(1863, 881, 1006, 0, 0),
(1864, 881, 1007, 0, 0),
(1865, 881, 1008, 0, 0),
(1866, 881, 1009, 0, 0),
(1867, 881, 1010, 0, 0),
(1868, 881, 1011, 0, 0),
(1869, 881, 1012, 0, 0),
(1870, 881, 1013, 0, 0),
(1871, 881, 1014, 0, 0),
(1872, 874, 1001, 0, 0),
(1873, 874, 1002, 0, 0),
(1874, 874, 1003, 0, 0),
(1875, 874, 1004, 0, 0),
(1876, 874, 1005, 0, 0),
(1877, 874, 1006, 0, 0),
(1878, 874, 1007, 0, 0),
(1879, 874, 1008, 0, 0),
(1880, 874, 1009, 0, 0),
(1881, 874, 1010, 0, 0),
(1882, 874, 1011, 0, 0),
(1883, 874, 1012, 0, 0),
(1884, 874, 1013, 0, 0),
(1885, 874, 1014, 0, 0),
(1886, 869, 1001, 0, 0),
(1887, 869, 1002, 0, 0),
(1888, 869, 1003, 0, 0),
(1889, 869, 1004, 0, 0),
(1890, 869, 1005, 0, 0),
(1891, 869, 1006, 0, 0),
(1892, 869, 1007, 0, 0),
(1893, 869, 1008, 0, 0),
(1894, 869, 1009, 0, 0),
(1895, 869, 1010, 0, 0),
(1896, 869, 1011, 0, 0),
(1897, 869, 1012, 0, 0),
(1898, 869, 1013, 0, 0),
(1899, 869, 1014, 0, 0),
(1900, 868, 1001, 0, 0),
(1901, 868, 1002, 0, 0),
(1902, 868, 1003, 0, 0),
(1903, 868, 1004, 0, 0),
(1904, 868, 1005, 0, 0),
(1905, 868, 1006, 0, 0),
(1906, 868, 1007, 0, 0),
(1907, 868, 1008, 0, 0),
(1908, 868, 1009, 0, 0),
(1909, 868, 1010, 0, 0),
(1910, 868, 1011, 0, 0),
(1911, 868, 1012, 0, 0),
(1912, 868, 1013, 0, 0),
(1913, 868, 1014, 0, 0),
(1914, 867, 1001, 0, 0),
(1915, 867, 1002, 0, 0),
(1916, 867, 1003, 0, 0),
(1917, 867, 1004, 0, 0),
(1918, 867, 1005, 0, 0),
(1919, 867, 1006, 0, 0),
(1920, 867, 1007, 0, 0),
(1921, 867, 1008, 0, 0),
(1922, 867, 1009, 0, 0),
(1923, 867, 1010, 0, 0),
(1924, 867, 1011, 0, 0),
(1925, 867, 1012, 0, 0),
(1926, 867, 1013, 0, 0),
(1927, 867, 1014, 0, 0),
(1928, 866, 1001, 0, 0),
(1929, 866, 1002, 0, 0),
(1930, 866, 1003, 0, 0),
(1931, 866, 1004, 0, 0),
(1932, 866, 1005, 0, 0),
(1933, 866, 1006, 0, 0),
(1934, 866, 1007, 0, 0),
(1935, 866, 1008, 0, 0),
(1936, 866, 1009, 0, 0),
(1937, 866, 1010, 0, 0),
(1938, 866, 1011, 0, 0),
(1939, 866, 1012, 0, 0),
(1940, 866, 1013, 0, 0),
(1941, 866, 1014, 0, 0),
(1942, 865, 1001, 0, 0),
(1943, 865, 1002, 0, 0),
(1944, 865, 1003, 0, 0),
(1945, 865, 1004, 0, 0),
(1946, 865, 1005, 0, 0),
(1947, 865, 1006, 0, 0),
(1948, 865, 1007, 0, 0),
(1949, 865, 1008, 0, 0),
(1950, 865, 1009, 0, 0),
(1951, 865, 1010, 0, 0),
(1952, 865, 1011, 0, 0),
(1953, 865, 1012, 0, 0),
(1954, 865, 1013, 0, 0),
(1955, 865, 1014, 0, 0),
(1956, 864, 1001, 0, 0),
(1957, 864, 1002, 0, 0),
(1958, 864, 1003, 0, 0),
(1959, 864, 1004, 0, 0),
(1960, 864, 1005, 0, 0),
(1961, 864, 1006, 0, 0),
(1962, 864, 1007, 0, 0),
(1963, 864, 1008, 0, 0),
(1964, 864, 1009, 0, 0),
(1965, 864, 1010, 0, 0),
(1966, 864, 1011, 0, 0),
(1967, 864, 1012, 0, 0),
(1968, 864, 1013, 0, 0),
(1969, 864, 1014, 0, 0),
(1970, 863, 1001, 0, 0),
(1971, 863, 1002, 0, 0),
(1972, 863, 1003, 0, 0),
(1973, 863, 1004, 0, 0),
(1974, 863, 1005, 0, 0),
(1975, 863, 1006, 0, 0),
(1976, 863, 1007, 0, 0),
(1977, 863, 1008, 0, 0),
(1978, 863, 1009, 0, 0),
(1979, 863, 1010, 0, 0),
(1980, 863, 1011, 0, 0),
(1981, 863, 1012, 0, 0),
(1982, 863, 1013, 0, 0),
(1983, 863, 1014, 0, 0),
(1984, 850, 1001, 0, 0),
(1985, 850, 1002, 0, 0),
(1986, 850, 1003, 0, 0),
(1987, 850, 1004, 0, 0),
(1988, 850, 1005, 0, 0),
(1989, 850, 1006, 0, 0),
(1990, 850, 1007, 0, 0),
(1991, 850, 1008, 0, 0),
(1992, 850, 1009, 0, 0),
(1993, 850, 1010, 0, 0),
(1994, 850, 1011, 0, 0),
(1995, 850, 1012, 0, 0),
(1996, 850, 1013, 0, 0),
(1997, 850, 1014, 0, 0),
(1998, 849, 1001, 0, 0),
(1999, 849, 1002, 0, 0),
(2000, 849, 1003, 0, 0),
(2001, 849, 1004, 0, 0),
(2002, 849, 1005, 0, 0),
(2003, 849, 1006, 0, 0),
(2004, 849, 1007, 0, 0),
(2005, 849, 1008, 0, 0),
(2006, 849, 1009, 0, 0),
(2007, 849, 1010, 0, 0),
(2008, 849, 1011, 0, 0),
(2009, 849, 1012, 0, 0),
(2010, 849, 1013, 0, 0),
(2011, 849, 1014, 0, 0),
(2012, 846, 1001, 0, 0),
(2013, 846, 1002, 0, 0),
(2014, 846, 1003, 0, 0),
(2015, 846, 1004, 0, 0),
(2016, 846, 1005, 0, 0),
(2017, 846, 1006, 0, 0),
(2018, 846, 1007, 0, 0),
(2019, 846, 1008, 0, 0),
(2020, 846, 1009, 0, 0),
(2021, 846, 1010, 0, 0),
(2022, 846, 1011, 0, 0),
(2023, 846, 1012, 0, 0),
(2024, 846, 1013, 0, 0),
(2025, 846, 1014, 0, 0),
(2026, 845, 1001, 0, 0),
(2027, 845, 1002, 0, 0),
(2028, 845, 1003, 0, 0),
(2029, 845, 1004, 0, 0),
(2030, 845, 1005, 0, 0),
(2031, 845, 1006, 0, 0),
(2032, 845, 1007, 0, 0),
(2033, 845, 1008, 0, 0),
(2034, 845, 1009, 0, 0),
(2035, 845, 1010, 0, 0),
(2036, 845, 1011, 0, 0),
(2037, 845, 1012, 0, 0),
(2038, 845, 1013, 0, 0),
(2039, 845, 1014, 0, 0),
(2040, 844, 1001, 0, 0),
(2041, 844, 1002, 0, 0),
(2042, 844, 1003, 0, 0),
(2043, 844, 1004, 0, 0),
(2044, 844, 1005, 0, 0),
(2045, 844, 1006, 0, 0),
(2046, 844, 1007, 0, 0),
(2047, 844, 1008, 0, 0),
(2048, 844, 1009, 0, 0),
(2049, 844, 1010, 0, 0),
(2050, 844, 1011, 0, 0),
(2051, 844, 1012, 0, 0),
(2052, 844, 1013, 0, 0),
(2053, 844, 1014, 0, 0),
(2054, 838, 1001, 0, 0),
(2055, 838, 1002, 0, 0),
(2056, 838, 1003, 0, 0),
(2057, 838, 1004, 0, 0),
(2058, 838, 1005, 0, 0),
(2059, 838, 1006, 0, 0),
(2060, 838, 1007, 0, 0),
(2061, 838, 1008, 0, 0),
(2062, 838, 1009, 0, 0),
(2063, 838, 1010, 0, 0),
(2064, 838, 1011, 0, 0),
(2065, 838, 1012, 0, 0),
(2066, 838, 1013, 0, 0),
(2067, 838, 1014, 0, 0),
(2068, 837, 1001, 0, 0),
(2069, 837, 1002, 0, 0),
(2070, 837, 1003, 0, 0),
(2071, 837, 1004, 0, 0),
(2072, 837, 1005, 0, 0),
(2073, 837, 1006, 0, 0),
(2074, 837, 1007, 0, 0),
(2075, 837, 1008, 0, 0),
(2076, 837, 1009, 0, 0),
(2077, 837, 1010, 0, 0),
(2078, 837, 1011, 0, 0),
(2079, 837, 1012, 0, 0),
(2080, 837, 1013, 0, 0),
(2081, 837, 1014, 0, 0),
(2082, 834, 1001, 0, 0),
(2083, 834, 1002, 0, 0),
(2084, 834, 1003, 0, 0),
(2085, 834, 1004, 0, 0),
(2086, 834, 1005, 0, 0),
(2087, 834, 1006, 0, 0),
(2088, 834, 1007, 0, 0),
(2089, 834, 1008, 0, 0),
(2090, 834, 1009, 0, 0),
(2091, 834, 1010, 0, 0),
(2092, 834, 1011, 0, 0),
(2093, 834, 1012, 0, 0),
(2094, 834, 1013, 0, 0),
(2095, 834, 1014, 0, 0),
(2096, 1038, 1001, 0, 0),
(2097, 1038, 1002, 0, 0),
(2098, 1038, 1003, 0, 0),
(2099, 1038, 1004, 0, 0),
(2100, 1038, 1005, 0, 0),
(2101, 1038, 1006, 0, 0),
(2102, 1038, 1007, 0, 0),
(2103, 1038, 1008, 0, 0),
(2104, 1038, 1009, 0, 0),
(2105, 1038, 1010, 0, 0),
(2106, 1038, 1011, 0, 0),
(2107, 1038, 1012, 0, 0),
(2108, 1038, 1013, 0, 0),
(2109, 1038, 1014, 0, 0),
(2110, 1053, 1001, 0, 0),
(2111, 1053, 1002, 0, 0),
(2112, 1053, 1003, 0, 0),
(2113, 1053, 1004, 0, 0),
(2114, 1053, 1005, 0, 0),
(2115, 1053, 1006, 0, 0),
(2116, 1053, 1007, 0, 0),
(2117, 1053, 1008, 0, 0),
(2118, 1053, 1009, 0, 0),
(2119, 1053, 1010, 0, 0),
(2120, 1053, 1011, 0, 0),
(2121, 1053, 1012, 0, 0),
(2122, 1053, 1013, 0, 0),
(2123, 1053, 1014, 0, 0),
(2124, 1020, 1001, 0, 0),
(2125, 1020, 1002, 0, 0),
(2126, 1020, 1003, 0, 0),
(2127, 1020, 1004, 0, 0),
(2128, 1020, 1005, 0, 0),
(2129, 1020, 1006, 0, 0),
(2130, 1020, 1007, 0, 0),
(2131, 1020, 1008, 0, 0),
(2132, 1020, 1009, 0, 0),
(2133, 1020, 1010, 0, 0),
(2134, 1020, 1011, 0, 0),
(2135, 1020, 1012, 0, 0),
(2136, 1020, 1013, 0, 0),
(2137, 1020, 1014, 0, 0),
(2138, 1046, 1001, 0, 0),
(2139, 1046, 1002, 0, 0),
(2140, 1046, 1003, 0, 0),
(2141, 1046, 1004, 0, 0),
(2142, 1046, 1005, 0, 0),
(2143, 1046, 1006, 0, 0),
(2144, 1046, 1007, 0, 0),
(2145, 1046, 1008, 0, 0),
(2146, 1046, 1009, 0, 0),
(2147, 1046, 1010, 0, 0),
(2148, 1046, 1011, 0, 0),
(2149, 1046, 1012, 0, 0),
(2150, 1046, 1013, 0, 0),
(2151, 1046, 1014, 0, 0),
(2152, 1017, 1001, 0, 0),
(2153, 1017, 1002, 0, 0),
(2154, 1017, 1003, 0, 0),
(2155, 1017, 1004, 0, 0),
(2156, 1017, 1005, 0, 0),
(2157, 1017, 1006, 0, 0),
(2158, 1017, 1007, 0, 0),
(2159, 1017, 1008, 0, 0),
(2160, 1017, 1009, 0, 0),
(2161, 1017, 1010, 0, 0),
(2162, 1017, 1011, 0, 0),
(2163, 1017, 1012, 0, 0),
(2164, 1017, 1013, 0, 0),
(2165, 1017, 1014, 0, 0),
(2166, 1024, 1001, 0, 0),
(2167, 1024, 1002, 0, 0),
(2168, 1024, 1003, 0, 0),
(2169, 1024, 1004, 0, 0),
(2170, 1024, 1005, 0, 0),
(2171, 1024, 1006, 0, 0),
(2172, 1024, 1007, 0, 0),
(2173, 1024, 1008, 0, 0),
(2174, 1024, 1009, 0, 0),
(2175, 1024, 1010, 0, 0),
(2176, 1024, 1011, 0, 0),
(2177, 1024, 1012, 0, 0),
(2178, 1024, 1013, 0, 0),
(2179, 1024, 1014, 0, 0),
(2180, 1033, 1001, 0, 0),
(2181, 1033, 1002, 0, 0),
(2182, 1033, 1003, 0, 0),
(2183, 1033, 1004, 0, 0),
(2184, 1033, 1005, 0, 0),
(2185, 1033, 1006, 0, 0),
(2186, 1033, 1007, 0, 0),
(2187, 1033, 1008, 0, 0),
(2188, 1033, 1009, 0, 0),
(2189, 1033, 1010, 0, 0),
(2190, 1033, 1011, 0, 0),
(2191, 1033, 1012, 0, 0),
(2192, 1033, 1013, 0, 0),
(2193, 1033, 1014, 0, 0),
(2194, 1031, 1001, 0, 0),
(2195, 1031, 1002, 0, 0),
(2196, 1031, 1003, 0, 0),
(2197, 1031, 1004, 0, 0),
(2198, 1031, 1005, 0, 0),
(2199, 1031, 1006, 0, 0),
(2200, 1031, 1007, 0, 0),
(2201, 1031, 1008, 0, 0),
(2202, 1031, 1009, 0, 0),
(2203, 1031, 1010, 0, 0),
(2204, 1031, 1011, 0, 0),
(2205, 1031, 1012, 0, 0),
(2206, 1031, 1013, 0, 0),
(2207, 1031, 1014, 0, 0),
(2208, 1052, 1001, 0, 0),
(2209, 1052, 1002, 0, 0),
(2210, 1052, 1003, 0, 0),
(2211, 1052, 1004, 0, 0),
(2212, 1052, 1005, 0, 0);
INSERT INTO `produkaktivitas` (`idProses`, `idProduk`, `idAktivitas`, `durasi`, `maxOccurence`) VALUES
(2213, 1052, 1006, 0, 0),
(2214, 1052, 1007, 0, 0),
(2215, 1052, 1008, 0, 0),
(2216, 1052, 1009, 0, 0),
(2217, 1052, 1010, 0, 0),
(2218, 1052, 1011, 0, 0),
(2219, 1052, 1012, 0, 0),
(2220, 1052, 1013, 0, 0),
(2221, 1052, 1014, 0, 0),
(2222, 1032, 1001, 0, 0),
(2223, 1032, 1002, 0, 0),
(2224, 1032, 1003, 0, 0),
(2225, 1032, 1004, 0, 0),
(2226, 1032, 1005, 0, 0),
(2227, 1032, 1006, 0, 0),
(2228, 1032, 1007, 0, 0),
(2229, 1032, 1008, 0, 0),
(2230, 1032, 1009, 0, 0),
(2231, 1032, 1010, 0, 0),
(2232, 1032, 1011, 0, 0),
(2233, 1032, 1012, 0, 0),
(2234, 1032, 1013, 0, 0),
(2235, 1032, 1014, 0, 0),
(2236, 998, 1001, 0, 0),
(2237, 998, 1002, 0, 0),
(2238, 998, 1003, 0, 0),
(2239, 998, 1004, 0, 0),
(2240, 998, 1005, 0, 0),
(2241, 998, 1006, 0, 0),
(2242, 998, 1007, 0, 0),
(2243, 998, 1008, 0, 0),
(2244, 998, 1009, 0, 0),
(2245, 998, 1010, 0, 0),
(2246, 998, 1011, 0, 0),
(2247, 998, 1012, 0, 0),
(2248, 998, 1013, 0, 0),
(2249, 998, 1014, 0, 0),
(2250, 997, 1001, 0, 0),
(2251, 997, 1002, 0, 0),
(2252, 997, 1003, 0, 0),
(2253, 997, 1004, 0, 0),
(2254, 997, 1005, 0, 0),
(2255, 997, 1006, 0, 0),
(2256, 997, 1007, 0, 0),
(2257, 997, 1008, 0, 0),
(2258, 997, 1009, 0, 0),
(2259, 997, 1010, 0, 0),
(2260, 997, 1011, 0, 0),
(2261, 997, 1012, 0, 0),
(2262, 997, 1013, 0, 0),
(2263, 997, 1014, 0, 0),
(2264, 1037, 1001, 0, 0),
(2265, 1037, 1002, 0, 0),
(2266, 1037, 1003, 0, 0),
(2267, 1037, 1004, 0, 0),
(2268, 1037, 1005, 0, 0),
(2269, 1037, 1006, 0, 0),
(2270, 1037, 1007, 0, 0),
(2271, 1037, 1008, 0, 0),
(2272, 1037, 1009, 0, 0),
(2273, 1037, 1010, 0, 0),
(2274, 1037, 1011, 0, 0),
(2275, 1037, 1012, 0, 0),
(2276, 1037, 1013, 0, 0),
(2277, 1037, 1014, 0, 0),
(2278, 1047, 1001, 0, 0),
(2279, 1047, 1002, 0, 0),
(2280, 1047, 1003, 0, 0),
(2281, 1047, 1004, 0, 0),
(2282, 1047, 1005, 0, 0),
(2283, 1047, 1006, 0, 0),
(2284, 1047, 1007, 0, 0),
(2285, 1047, 1008, 0, 0),
(2286, 1047, 1009, 0, 0),
(2287, 1047, 1010, 0, 0),
(2288, 1047, 1011, 0, 0),
(2289, 1047, 1012, 0, 0),
(2290, 1047, 1013, 0, 0),
(2291, 1047, 1014, 0, 0),
(2292, 962, 1001, 0, 0),
(2293, 962, 1002, 0, 0),
(2294, 962, 1003, 0, 0),
(2295, 962, 1004, 0, 0),
(2296, 962, 1005, 0, 0),
(2297, 962, 1006, 0, 0),
(2298, 962, 1007, 0, 0),
(2299, 962, 1008, 0, 0),
(2300, 962, 1009, 0, 0),
(2301, 962, 1010, 0, 0),
(2302, 962, 1011, 0, 0),
(2303, 962, 1012, 0, 0),
(2304, 962, 1013, 0, 0),
(2305, 962, 1014, 0, 0),
(2306, 1026, 1001, 0, 0),
(2307, 1026, 1002, 0, 0),
(2308, 1026, 1003, 0, 0),
(2309, 1026, 1004, 0, 0),
(2310, 1026, 1005, 0, 0),
(2311, 1026, 1006, 0, 0),
(2312, 1026, 1007, 0, 0),
(2313, 1026, 1008, 0, 0),
(2314, 1026, 1009, 0, 0),
(2315, 1026, 1010, 0, 0),
(2316, 1026, 1011, 0, 0),
(2317, 1026, 1012, 0, 0),
(2318, 1026, 1013, 0, 0),
(2319, 1026, 1014, 0, 0),
(2320, 1045, 1001, 0, 0),
(2321, 1045, 1002, 0, 0),
(2322, 1045, 1003, 0, 0),
(2323, 1045, 1004, 0, 0),
(2324, 1045, 1005, 0, 0),
(2325, 1045, 1006, 0, 0),
(2326, 1045, 1007, 0, 0),
(2327, 1045, 1008, 0, 0),
(2328, 1045, 1009, 0, 0),
(2329, 1045, 1010, 0, 0),
(2330, 1045, 1011, 0, 0),
(2331, 1045, 1012, 0, 0),
(2332, 1045, 1013, 0, 0),
(2333, 1045, 1014, 0, 0),
(2334, 1043, 1001, 0, 0),
(2335, 1043, 1002, 0, 0),
(2336, 1043, 1003, 0, 0),
(2337, 1043, 1004, 0, 0),
(2338, 1043, 1005, 0, 0),
(2339, 1043, 1006, 0, 0),
(2340, 1043, 1007, 0, 0),
(2341, 1043, 1008, 0, 0),
(2342, 1043, 1009, 0, 0),
(2343, 1043, 1010, 0, 0),
(2344, 1043, 1011, 0, 0),
(2345, 1043, 1012, 0, 0),
(2346, 1043, 1013, 0, 0),
(2347, 1043, 1014, 0, 0),
(2348, 1027, 1001, 0, 0),
(2349, 1027, 1002, 0, 0),
(2350, 1027, 1003, 0, 0),
(2351, 1027, 1004, 0, 0),
(2352, 1027, 1005, 0, 0),
(2353, 1027, 1006, 0, 0),
(2354, 1027, 1007, 0, 0),
(2355, 1027, 1008, 0, 0),
(2356, 1027, 1009, 0, 0),
(2357, 1027, 1010, 0, 0),
(2358, 1027, 1011, 0, 0),
(2359, 1027, 1012, 0, 0),
(2360, 1027, 1013, 0, 0),
(2361, 1027, 1014, 0, 0),
(2362, 934, 1001, 0, 0),
(2363, 934, 1002, 0, 0),
(2364, 934, 1003, 0, 0),
(2365, 934, 1004, 0, 0),
(2366, 934, 1005, 0, 0),
(2367, 934, 1006, 0, 0),
(2368, 934, 1007, 0, 0),
(2369, 934, 1008, 0, 0),
(2370, 934, 1009, 0, 0),
(2371, 934, 1010, 0, 0),
(2372, 934, 1011, 0, 0),
(2373, 934, 1012, 0, 0),
(2374, 934, 1013, 0, 0),
(2375, 934, 1014, 0, 0),
(2376, 934, 1001, 0, 0),
(2377, 934, 1002, 0, 0),
(2378, 934, 1003, 0, 0),
(2379, 934, 1004, 0, 0),
(2380, 934, 1005, 0, 0),
(2381, 934, 1006, 0, 0),
(2382, 934, 1007, 0, 0),
(2383, 934, 1008, 0, 0),
(2384, 934, 1009, 0, 0),
(2385, 934, 1010, 0, 0),
(2386, 934, 1011, 0, 0),
(2387, 934, 1012, 0, 0),
(2388, 934, 1013, 0, 0),
(2389, 934, 1014, 0, 0),
(2390, 1028, 1001, 0, 0),
(2391, 1028, 1002, 0, 0),
(2392, 1028, 1003, 0, 0),
(2393, 1028, 1004, 0, 0),
(2394, 1028, 1005, 0, 0),
(2395, 1028, 1006, 0, 0),
(2396, 1028, 1007, 0, 0),
(2397, 1028, 1008, 0, 0),
(2398, 1028, 1009, 0, 0),
(2399, 1028, 1010, 0, 0),
(2400, 1028, 1011, 0, 0),
(2401, 1028, 1012, 0, 0),
(2402, 1028, 1013, 0, 0),
(2403, 1028, 1014, 0, 0),
(2404, 1005, 1001, 0, 0),
(2405, 1005, 1002, 0, 0),
(2406, 1005, 1003, 0, 0),
(2407, 1005, 1004, 0, 0),
(2408, 1005, 1005, 0, 0),
(2409, 1005, 1006, 0, 0),
(2410, 1005, 1007, 0, 0),
(2411, 1005, 1008, 0, 0),
(2412, 1005, 1009, 0, 0),
(2413, 1005, 1010, 0, 0),
(2414, 1005, 1011, 0, 0),
(2415, 1005, 1012, 0, 0),
(2416, 1005, 1013, 0, 0),
(2417, 1005, 1014, 0, 0),
(2418, 1048, 1001, 0, 0),
(2419, 1048, 1002, 0, 0),
(2420, 1048, 1003, 0, 0),
(2421, 1048, 1004, 0, 0),
(2422, 1048, 1005, 0, 0),
(2423, 1048, 1006, 0, 0),
(2424, 1048, 1007, 0, 0),
(2425, 1048, 1008, 0, 0),
(2426, 1048, 1009, 0, 0),
(2427, 1048, 1010, 0, 0),
(2428, 1048, 1011, 0, 0),
(2429, 1048, 1012, 0, 0),
(2430, 1048, 1013, 0, 0),
(2431, 1048, 1014, 0, 0),
(2432, 1034, 1001, 0, 0),
(2433, 1034, 1002, 0, 0),
(2434, 1034, 1003, 0, 0),
(2435, 1034, 1004, 0, 0),
(2436, 1034, 1005, 0, 0),
(2437, 1034, 1006, 0, 0),
(2438, 1034, 1007, 0, 0),
(2439, 1034, 1008, 0, 0),
(2440, 1034, 1009, 0, 0),
(2441, 1034, 1010, 0, 0),
(2442, 1034, 1011, 0, 0),
(2443, 1034, 1012, 0, 0),
(2444, 1034, 1013, 0, 0),
(2445, 1034, 1014, 0, 0),
(2446, 1035, 1001, 0, 0),
(2447, 1035, 1002, 0, 0),
(2448, 1035, 1003, 0, 0),
(2449, 1035, 1004, 0, 0),
(2450, 1035, 1005, 0, 0),
(2451, 1035, 1006, 0, 0),
(2452, 1035, 1007, 0, 0),
(2453, 1035, 1008, 0, 0),
(2454, 1035, 1009, 0, 0),
(2455, 1035, 1010, 0, 0),
(2456, 1035, 1011, 0, 0),
(2457, 1035, 1012, 0, 0),
(2458, 1035, 1013, 0, 0),
(2459, 1035, 1014, 0, 0),
(2460, 1051, 1001, 0, 0),
(2461, 1051, 1002, 0, 0),
(2462, 1051, 1003, 0, 0),
(2463, 1051, 1004, 0, 0),
(2464, 1051, 1005, 0, 0),
(2465, 1051, 1006, 0, 0),
(2466, 1051, 1007, 0, 0),
(2467, 1051, 1008, 0, 0),
(2468, 1051, 1009, 0, 0),
(2469, 1051, 1010, 0, 0),
(2470, 1051, 1011, 0, 0),
(2471, 1051, 1012, 0, 0),
(2472, 1051, 1013, 0, 0),
(2473, 1051, 1014, 0, 0),
(2474, 810, 1001, 0, 0),
(2475, 810, 1002, 0, 0),
(2476, 810, 1003, 0, 0),
(2477, 810, 1004, 0, 0),
(2478, 810, 1005, 0, 0),
(2479, 810, 1006, 0, 0),
(2480, 810, 1007, 0, 0),
(2481, 810, 1008, 0, 0),
(2482, 810, 1009, 0, 0),
(2483, 810, 1010, 0, 0),
(2484, 810, 1011, 0, 0),
(2485, 810, 1012, 0, 0),
(2486, 810, 1013, 0, 0),
(2487, 810, 1014, 0, 0),
(2488, 1025, 1001, 0, 0),
(2489, 1025, 1002, 0, 0),
(2490, 1025, 1003, 0, 0),
(2491, 1025, 1004, 0, 0),
(2492, 1025, 1005, 0, 0),
(2493, 1025, 1006, 0, 0),
(2494, 1025, 1007, 0, 0),
(2495, 1025, 1008, 0, 0),
(2496, 1025, 1009, 0, 0),
(2497, 1025, 1010, 0, 0),
(2498, 1025, 1011, 0, 0),
(2499, 1025, 1012, 0, 0),
(2500, 1025, 1013, 0, 0),
(2501, 1025, 1014, 0, 0),
(2502, 1049, 1001, 0, 0),
(2503, 1049, 1002, 0, 0),
(2504, 1049, 1003, 0, 0),
(2505, 1049, 1004, 0, 0),
(2506, 1049, 1005, 0, 0),
(2507, 1049, 1006, 0, 0),
(2508, 1049, 1007, 0, 0),
(2509, 1049, 1008, 0, 0),
(2510, 1049, 1009, 0, 0),
(2511, 1049, 1010, 0, 0),
(2512, 1049, 1011, 0, 0),
(2513, 1049, 1012, 0, 0),
(2514, 1049, 1013, 0, 0),
(2515, 1049, 1014, 0, 0),
(2516, 838, 1001, 0, 0),
(2517, 838, 1002, 0, 0),
(2518, 838, 1003, 0, 0),
(2519, 838, 1004, 0, 0),
(2520, 838, 1005, 0, 0),
(2521, 838, 1006, 0, 0),
(2522, 838, 1007, 0, 0),
(2523, 838, 1008, 0, 0),
(2524, 838, 1009, 0, 0),
(2525, 838, 1010, 0, 0),
(2526, 838, 1011, 0, 0),
(2527, 838, 1012, 0, 0),
(2528, 838, 1013, 0, 0),
(2529, 838, 1014, 0, 0),
(2530, 837, 1001, 0, 0),
(2531, 837, 1002, 0, 0),
(2532, 837, 1003, 0, 0),
(2533, 837, 1004, 0, 0),
(2534, 837, 1005, 0, 0),
(2535, 837, 1006, 0, 0),
(2536, 837, 1007, 0, 0),
(2537, 837, 1008, 0, 0),
(2538, 837, 1009, 0, 0),
(2539, 837, 1010, 0, 0),
(2540, 837, 1011, 0, 0),
(2541, 837, 1012, 0, 0),
(2542, 837, 1013, 0, 0),
(2543, 837, 1014, 0, 0),
(2544, 1044, 1001, 0, 0),
(2545, 1044, 1002, 0, 0),
(2546, 1044, 1003, 0, 0),
(2547, 1044, 1004, 0, 0),
(2548, 1044, 1005, 0, 0),
(2549, 1044, 1006, 0, 0),
(2550, 1044, 1007, 0, 0),
(2551, 1044, 1008, 0, 0),
(2552, 1044, 1009, 0, 0),
(2553, 1044, 1010, 0, 0),
(2554, 1044, 1011, 0, 0),
(2555, 1044, 1012, 0, 0),
(2556, 1044, 1013, 0, 0),
(2557, 1044, 1014, 0, 0),
(2558, 1030, 1001, 0, 0),
(2559, 1030, 1002, 0, 0),
(2560, 1030, 1003, 0, 0),
(2561, 1030, 1004, 0, 0),
(2562, 1030, 1005, 0, 0),
(2563, 1030, 1006, 0, 0),
(2564, 1030, 1007, 0, 0),
(2565, 1030, 1008, 0, 0),
(2566, 1030, 1009, 0, 0),
(2567, 1030, 1010, 0, 0),
(2568, 1030, 1011, 0, 0),
(2569, 1030, 1012, 0, 0),
(2570, 1030, 1013, 0, 0),
(2571, 1030, 1014, 0, 0),
(2572, 1001, 1001, 0, 0),
(2573, 1001, 1002, 0, 0),
(2574, 1001, 1003, 0, 0),
(2575, 1001, 1004, 0, 0),
(2576, 1001, 1005, 0, 0),
(2577, 1001, 1006, 0, 0),
(2578, 1001, 1007, 0, 0),
(2579, 1001, 1008, 0, 0),
(2580, 1001, 1009, 0, 0),
(2581, 1001, 1010, 0, 0),
(2582, 1001, 1011, 0, 0),
(2583, 1001, 1012, 0, 0),
(2584, 1001, 1013, 0, 0),
(2585, 1001, 1014, 0, 0),
(2586, 1000, 1001, 0, 0),
(2587, 1000, 1002, 0, 0),
(2588, 1000, 1003, 0, 0),
(2589, 1000, 1004, 0, 0),
(2590, 1000, 1005, 0, 0),
(2591, 1000, 1006, 0, 0),
(2592, 1000, 1007, 0, 0),
(2593, 1000, 1008, 0, 0),
(2594, 1000, 1009, 0, 0),
(2595, 1000, 1010, 0, 0),
(2596, 1000, 1011, 0, 0),
(2597, 1000, 1012, 0, 0),
(2598, 1000, 1013, 0, 0),
(2599, 1000, 1014, 0, 0),
(2600, 927, 1001, 0, 0),
(2601, 927, 1002, 0, 0),
(2602, 927, 1003, 0, 0),
(2603, 927, 1004, 0, 0),
(2604, 927, 1005, 0, 0),
(2605, 927, 1006, 0, 0),
(2606, 927, 1007, 0, 0),
(2607, 927, 1008, 0, 0),
(2608, 927, 1009, 0, 0),
(2609, 927, 1010, 0, 0),
(2610, 927, 1011, 0, 0),
(2611, 927, 1012, 0, 0),
(2612, 927, 1013, 0, 0),
(2613, 927, 1014, 0, 0),
(2614, 1050, 1001, 0, 0),
(2615, 1050, 1002, 0, 0),
(2616, 1050, 1003, 0, 0),
(2617, 1050, 1004, 0, 0),
(2618, 1050, 1005, 0, 0),
(2619, 1050, 1006, 0, 0),
(2620, 1050, 1007, 0, 0),
(2621, 1050, 1008, 0, 0),
(2622, 1050, 1009, 0, 0),
(2623, 1050, 1010, 0, 0),
(2624, 1050, 1011, 0, 0),
(2625, 1050, 1012, 0, 0),
(2626, 1050, 1013, 0, 0),
(2627, 1050, 1014, 0, 0),
(2628, 933, 1001, 0, 0),
(2629, 933, 1002, 0, 0),
(2630, 933, 1003, 0, 0),
(2631, 933, 1004, 0, 0),
(2632, 933, 1005, 0, 0),
(2633, 933, 1006, 0, 0),
(2634, 933, 1007, 0, 0),
(2635, 933, 1008, 0, 0),
(2636, 933, 1009, 0, 0),
(2637, 933, 1010, 0, 0),
(2638, 933, 1011, 0, 0),
(2639, 933, 1012, 0, 0),
(2640, 933, 1013, 0, 0),
(2641, 933, 1014, 0, 0),
(2642, 950, 1001, 0, 0),
(2643, 950, 1002, 0, 0),
(2644, 950, 1003, 0, 0),
(2645, 950, 1004, 0, 0),
(2646, 950, 1005, 0, 0),
(2647, 950, 1006, 0, 0),
(2648, 950, 1007, 0, 0),
(2649, 950, 1008, 0, 0),
(2650, 950, 1009, 0, 0),
(2651, 950, 1010, 0, 0),
(2652, 950, 1011, 0, 0),
(2653, 950, 1012, 0, 0),
(2654, 950, 1013, 0, 0),
(2655, 950, 1014, 0, 0),
(2656, 971, 1001, 0, 0),
(2657, 971, 1002, 0, 0),
(2658, 971, 1003, 0, 0),
(2659, 971, 1004, 0, 0),
(2660, 971, 1005, 0, 0),
(2661, 971, 1006, 0, 0),
(2662, 971, 1007, 0, 0),
(2663, 971, 1008, 0, 0),
(2664, 971, 1009, 0, 0),
(2665, 971, 1010, 0, 0),
(2666, 971, 1011, 0, 0),
(2667, 971, 1012, 0, 0),
(2668, 971, 1013, 0, 0),
(2669, 971, 1014, 0, 0),
(2670, 1029, 1001, 0, 0),
(2671, 1029, 1002, 0, 0),
(2672, 1029, 1003, 0, 0),
(2673, 1029, 1004, 0, 0),
(2674, 1029, 1005, 0, 0),
(2675, 1029, 1006, 0, 0),
(2676, 1029, 1007, 0, 0),
(2677, 1029, 1008, 0, 0),
(2678, 1029, 1009, 0, 0),
(2679, 1029, 1010, 0, 0),
(2680, 1029, 1011, 0, 0),
(2681, 1029, 1012, 0, 0),
(2682, 1029, 1013, 0, 0),
(2683, 1029, 1014, 0, 0),
(2684, 986, 1001, 0, 0),
(2685, 986, 1002, 0, 0),
(2686, 986, 1003, 0, 0),
(2687, 986, 1004, 0, 0),
(2688, 986, 1005, 0, 0),
(2689, 986, 1006, 0, 0),
(2690, 986, 1007, 0, 0),
(2691, 986, 1008, 0, 0),
(2692, 986, 1009, 0, 0),
(2693, 986, 1010, 0, 0),
(2694, 986, 1011, 0, 0),
(2695, 986, 1012, 0, 0),
(2696, 986, 1013, 0, 0),
(2697, 986, 1014, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produkpo`
--

CREATE TABLE `produkpo` (
  `idProdukPO` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `idProdukAG` int(11) NOT NULL,
  `idProdukChild` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkpo`
--

INSERT INTO `produkpo` (`idProdukPO`, `nomorPO`, `idProdukAG`, `idProdukChild`, `keterangan`) VALUES
(1, 1, 5001, 3, '5 psg'),
(2, 1, 5001, 4, '5 psg'),
(3, 1, 5001, 5, '5 psg'),
(4, 1, 5001, 6, '10 pcs'),
(5, 1, 5001, 7, '5 pcs'),
(6, 1, 5001, 8, '5 pcs'),
(7, 1, 5001, 9, '5 pcs'),
(8, 1, 5001, 10, '5 pcs'),
(9, 1, 5001, 11, '5 pcs'),
(10, 2, 5002, 12, '100 gr'),
(11, 2, 5002, 431, '(252-281) berat 200 gr'),
(26, 3, 5003, 15, '100 grm / uk. 8-27'),
(27, 3, 5003, 156, '2 pcs'),
(28, 3, 5003, 157, '2pcs'),
(29, 3, 5003, 158, '2 pcs'),
(30, 3, 5003, 159, '2 pcs'),
(31, 3, 5003, 160, '2 pcs'),
(32, 3, 5003, 161, '2 pcs'),
(33, 3, 5003, 162, '2 pcs'),
(34, 3, 5003, 163, '2 pcs'),
(35, 3, 5003, 164, '2 pcs'),
(36, 3, 5003, 165, '2 pcs'),
(37, 3, 5003, 166, '2 pcs'),
(38, 3, 5003, 167, '2 pcs'),
(39, 4, 5004, 571, 'Berat 2 graman '),
(40, 5, 5005, 20, '3 gr (25 pcs), 4 gr (25 pcs), 5gr (5pcs'),
(41, 5, 5005, 259, '100 gr '),
(42, 6, 5006, 13, '50 gr (18-22) Brt mau 1.5 paling Berat'),
(43, 6, 5006, 15, '100 gr (12-18) Berat Jgn Lwt 0.9'),
(44, 6, 5006, 20, '3.5 (15 pcs), 4 (15 pcs), 5 (5pcs)'),
(62, 7, 5007, 68, '1 pcs'),
(63, 7, 5007, 69, '1 pcs'),
(64, 7, 5007, 115, '1 pcs'),
(65, 7, 5007, 38, '1 pcs'),
(66, 7, 5007, 42, '1 ps'),
(67, 7, 5007, 123, '1 pcs'),
(68, 7, 5007, 140, '1 pcs'),
(69, 7, 5007, 476, '2 pcs'),
(70, 7, 5007, 479, '2 pcs'),
(71, 7, 5007, 470, '2 pcs'),
(72, 7, 5007, 421, '2 pcs'),
(73, 7, 5007, 207, '2 pcs'),
(74, 7, 5007, 219, '2 pcs'),
(75, 7, 5007, 218, '2 pcs'),
(76, 7, 5007, 217, '2 pcs'),
(77, 7, 5007, 215, '2 pcs'),
(78, 7, 5007, 290, '2 pcs'),
(79, 8, 5008, 237, '12 pcs'),
(80, 8, 5008, 271, '12 pcs'),
(81, 8, 5008, 277, '12 pcs'),
(82, 8, 5008, 300, '12 pcs'),
(83, 8, 5008, 240, '12 pcs'),
(84, 8, 5008, 273, '12 pcs'),
(85, 8, 5008, 192, '12 pcs'),
(86, 8, 5008, 283, '12 pcs'),
(87, 8, 5008, 199, '12 pcs'),
(88, 8, 5008, 270, '12 pcs'),
(89, 9, 5009, 437, '2 pcs'),
(90, 9, 5009, 449, '2 pcs'),
(91, 9, 5009, 457, '2 pcs'),
(92, 9, 5009, 459, '2 pcs'),
(93, 9, 5009, 568, '2 pcs'),
(94, 9, 5009, 569, '2 pcs'),
(95, 9, 5009, 499, '2 pcs'),
(96, 9, 5009, 521, '2 pcs'),
(97, 9, 5009, 257, '2 pcs'),
(98, 9, 5009, 406, '2 pcs'),
(99, 9, 5009, 4, '5psg'),
(100, 10, 5010, 575, 'Berat mau 1 graman'),
(101, 10, 5010, 180, 'Berat mau 1 graman'),
(102, 11, 5011, 180, 'Cincin Campur'),
(103, 11, 5011, 575, 'Liontin '),
(104, 11, 5011, 733, 'Anting'),
(109, 14, 5014, 3, '5psg'),
(110, 14, 5014, 9, '5 pcs'),
(111, 14, 5014, 6, '10 pcd'),
(112, 14, 5014, 5, '5psg'),
(113, 13, 5013, 819, '14-19 (slep daun 20, slep garis 20)'),
(114, 12, 5012, 817, 'uK. 11-15 (slep Daun 20, Slep Garis 20), uk 16-20 (Slep Daun 20, Slep Garis 20)'),
(115, 15, 5013, 766, '50 pcs'),
(116, 15, 5013, 767, '50 pcs'),
(117, 16, 5014, 86, '3 pcs'),
(118, 16, 5014, 84, '3 pcs'),
(119, 16, 5014, 82, '3 pcs'),
(120, 16, 5014, 85, '3 pcs'),
(121, 16, 5014, 83, '3 pcs'),
(122, 16, 5014, 66, '3 pcs'),
(123, 16, 5014, 87, '3 pcs'),
(124, 16, 5014, 93, '3 pcs'),
(125, 17, 5015, 180, 'model cincin mata berat 1-1.2 gr uk . 8-12 (150gr)'),
(126, 17, 5015, 569, 'Model Cincin Merica Dewasa brt 1-1.2 uk.10-14 (100 gr)'),
(127, 17, 5015, 733, 'Kerabu Jepit Berat 1-1.2 (50 gr)'),
(128, 18, 5016, 853, '150 gr (18-22)'),
(129, 18, 5016, 13, 'slep 2 model 150gr uk.15-21'),
(130, 18, 5016, 817, 'cincin 3A (50gr) )(18-22), Cincin 3B(100gr)(18-22)'),
(131, 18, 5016, 819, '2A Brt 50gr (18-21), 2B brt 50gr (18-21)'),
(132, 18, 5016, 431, 'Merica uk.12-18 (100gr)'),
(133, 18, 5016, 362, 'merica anak brt 50 gr'),
(134, 18, 5016, 575, 'Berat 1-1.2 (50gr)'),
(135, 19, 5017, 575, 'berat 1-1.2 (50gr)'),
(136, 19, 5017, 20, 'berat 5 gr (10 pcs)'),
(137, 19, 5017, 20, 'berat 3 gr (10 pcs)'),
(138, 19, 5017, 20, 'berat 4 gr (10 pcs)'),
(139, 19, 5017, 853, '70 gr (18-22) berat mau 3graman'),
(140, 20, 5018, 76, '1 PCS'),
(141, 20, 5018, 74, '1 PCS'),
(142, 20, 5018, 77, '1 PCS'),
(143, 20, 5018, 75, '1 PCS'),
(144, 20, 5018, 79, '1 PCS'),
(145, 20, 5018, 78, '1 PCS'),
(146, 20, 5018, 861, '1 PCS'),
(147, 20, 5018, 860, '1 PCS'),
(148, 20, 5018, 859, '1 PCS'),
(149, 20, 5018, 858, '1 PCS'),
(150, 20, 5018, 819, '5 PCS (8-15)'),
(151, 20, 5018, 13, '5 PCS (8-15)'),
(152, 20, 5018, 487, '5 PCS 10-15'),
(153, 20, 5018, 216, '5 PCS 10-15'),
(154, 22, 5019, 4, '5psg'),
(155, 22, 5019, 5, '5psg'),
(156, 22, 5019, 11, '5psg'),
(157, 22, 5019, 3, '5psg'),
(158, 22, 5019, 10, '5 pcs'),
(159, 22, 5019, 6, '10 pcs'),
(160, 22, 5019, 7, '5 pcs'),
(161, 22, 5019, 8, '5 pcs'),
(162, 22, 5019, 9, '5 pcs'),
(163, 23, 5020, 886, '100 pcs'),
(164, 25, 5021, 762, '20 PSG'),
(165, 25, 5021, 582, '20 PSG'),
(166, 25, 5021, 595, '20 PSG'),
(167, 25, 5021, 600, '20 PSG'),
(168, 25, 5021, 583, '20 PSG'),
(169, 26, 5022, 26, '9 pcs'),
(170, 26, 5022, 23, '9 pcs'),
(171, 26, 5022, 44, '6 pcs'),
(172, 26, 5022, 43, '6 pcs'),
(173, 26, 5022, 31, '6 pcs'),
(174, 26, 5022, 119, '6 pcs'),
(175, 26, 5022, 117, '5 pcs'),
(176, 27, 5023, 448, '15 pcs (uk. 12-20)'),
(177, 27, 5023, 451, '15 pcs (uk. 12-20)'),
(178, 27, 5023, 453, '15 pcs (uk. 12-20)'),
(179, 27, 5023, 454, '15 pcs (uk. 12-20)'),
(180, 27, 5023, 455, '15 pcs (uk. 12-20)'),
(181, 27, 5023, 477, '15 pcs (uk. 12-20)'),
(182, 27, 5023, 478, '15 pcs (uk. 12-20)'),
(183, 27, 5023, 485, '15 pcs (uk. 12-20)'),
(184, 27, 5023, 439, '15 pcs (uk. 12-20)'),
(185, 27, 5023, 446, '15 pcs (uk. 12-20)'),
(186, 27, 5023, 235, '15 pcs (uk. 12-20)'),
(187, 27, 5023, 236, '15 pcs (uk. 12-20)'),
(188, 27, 5023, 330, '15 pcs (uk. 12-20)'),
(189, 27, 5023, 209, '15 pcs (uk. 12-20)'),
(190, 27, 5023, 250, '15 pcs (uk. 12-20)'),
(191, 27, 5023, 440, '15 pcs (uk. 12-20)'),
(192, 27, 5023, 349, '16 pcs'),
(193, 27, 5023, 351, '16 pcs'),
(194, 27, 5023, 348, '16 pcs'),
(195, 27, 5023, 637, '14 pcs'),
(196, 27, 5023, 640, '14 pcs'),
(197, 27, 5023, 639, '14 pcs'),
(198, 27, 5023, 633, '14 pcs'),
(199, 27, 5023, 634, '14 pcs'),
(200, 27, 5023, 632, '14 pcs'),
(201, 27, 5023, 635, '14 pcs'),
(202, 27, 5023, 180, '10 pcs (uk. 17-22) (chanel 2 model)'),
(203, 27, 5023, 509, '10 pcs uk 17-22'),
(204, 27, 5023, 537, '10 pcs uk 17-22'),
(211, 28, 5024, 15, 'Berat 50 grm (8-10)'),
(212, 28, 5024, 13, 'Berat 100 grm (14-18)'),
(213, 28, 5024, 20, 'Gelang Mata berat 5 grm (10 pcs)'),
(214, 28, 5024, 20, 'Gelang Mata Berat 4 grm (5 pcs)'),
(215, 28, 5024, 20, 'Gelang Mata Berat 3.5 grm (20 pcs)'),
(216, 28, 5024, 180, 'Berat 1 - 1.2 (8-10) berat 50 grm'),
(219, 29, 5025, 180, 'Berat Mau 1-1.3 (400 grm)'),
(220, 29, 5025, 250, 'Berat 1-1.3 (8-10) barat 200 grm'),
(221, 29, 5025, 15, 'mau polos ( 100 grm) 8-10'),
(222, 30, 5026, 185, '8-10 (200 GRM)'),
(223, 31, 5027, 20, 'Gelang Anak-anak'),
(224, 32, 5028, 20, 'Gelang Mata Berat 4 gr (20 pcs)'),
(225, 32, 5028, 20, 'Gelang Mata Berat 3 gr (20 pcs)'),
(226, 32, 5028, 180, 'Cincin Mata 8-10 (200 gr)'),
(227, 32, 5028, 345, 'Cincin Merica Anak 50 gr'),
(228, 33, 5029, 1009, '180 pcs (90 pcs slep daun, 90 pcs slep garis)'),
(229, 34, 5030, 249, '10 pcs'),
(230, 34, 5030, 250, '10 pcs'),
(231, 34, 5030, 251, '10 pcs'),
(232, 34, 5030, 252, '10 pcs'),
(233, 34, 5030, 253, '10 pcs'),
(234, 34, 5030, 254, '10 pcs'),
(235, 34, 5030, 255, '10 pcs'),
(236, 34, 5030, 256, '10 pcs'),
(237, 34, 5030, 257, '10 pcs'),
(238, 34, 5030, 259, '10 pcs'),
(239, 34, 5030, 260, '10 pcs'),
(240, 34, 5030, 261, '10 pcs'),
(241, 34, 5030, 262, '10 pcs'),
(242, 34, 5030, 263, '10 pcs'),
(243, 34, 5030, 264, '10 pcs'),
(244, 35, 5031, 13, '180 pcs'),
(245, 36, 5032, 212, '10 pcs'),
(246, 36, 5032, 214, '10 pcs'),
(247, 36, 5032, 216, '8 pcs'),
(248, 36, 5032, 222, '8 pcs'),
(249, 36, 5032, 232, '10 pcs'),
(250, 36, 5032, 234, '10 pcs'),
(251, 36, 5032, 235, '10 pcs'),
(252, 36, 5032, 238, '8 pcs'),
(253, 36, 5032, 239, '8 pcs'),
(254, 36, 5032, 244, '8 pcs'),
(255, 36, 5032, 243, '8 pcs'),
(256, 36, 5032, 245, '8 pcs'),
(257, 36, 5032, 246, '8 pcs'),
(258, 36, 5032, 247, '8 pcs'),
(259, 36, 5032, 248, '8 pcs'),
(260, 36, 5032, 323, '8 pcs'),
(261, 36, 5032, 324, '8 pcs'),
(262, 36, 5032, 325, '8 pcs'),
(263, 37, 5033, 56, '5 pcs'),
(264, 37, 5033, 85, '6 pcs'),
(265, 37, 5033, 94, '5 pcs'),
(266, 37, 5033, 103, '6 pcs'),
(267, 37, 5033, 108, '4 pcs'),
(268, 37, 5033, 124, '5 pcs'),
(269, 37, 5033, 125, '5 pcs'),
(270, 37, 5033, 126, '5 pcs'),
(271, 37, 5033, 127, '5 pcs'),
(272, 37, 5033, 87, '5 pcs'),
(273, 37, 5033, 86, '5 pcs'),
(274, 37, 5033, 84, '5 pcs'),
(296, 38, 5034, 575, 'Liontin Chanel kecil 50 grm'),
(297, 38, 5034, 496, 'cincin Merica  Dewasa 100 gr'),
(298, 38, 5034, 249, 'Cincin Anak Merica 50 gr'),
(299, 38, 5034, 180, 'Cincin Mata Chanel 100 gr'),
(300, 38, 5034, 448, '17 pcs'),
(301, 38, 5034, 451, '17 pcs'),
(302, 38, 5034, 453, '17 pcs'),
(303, 38, 5034, 454, '17 pcs'),
(304, 38, 5034, 455, '17 pcs'),
(305, 38, 5034, 477, '17 pcs'),
(306, 38, 5034, 478, '17 pcs'),
(307, 38, 5034, 485, '17 pcs'),
(308, 38, 5034, 439, '17 pcs'),
(309, 38, 5034, 235, '17 pcs'),
(310, 38, 5034, 236, '17 pcs'),
(311, 38, 5034, 330, '17 pcs'),
(312, 38, 5034, 209, '17 pcs'),
(313, 38, 5034, 250, '17 pcs'),
(314, 38, 5034, 440, '17 pcs'),
(315, 38, 5034, 180, 'contoh 50 gr berat 1 graman'),
(316, 38, 5034, 249, 'Contoh 100 gr Berat 1 Graman'),
(317, 39, 5035, 20, 'Gelang Anak-anak'),
(318, 40, 5036, 26, '6 pcs'),
(319, 40, 5036, 23, '6 pcs'),
(320, 40, 5036, 44, '6 pcs'),
(321, 40, 5036, 31, '6 pcs'),
(322, 40, 5036, 119, '6 pcs'),
(323, 40, 5036, 117, '6 pcs'),
(324, 41, 5037, 180, 'masing -masing 1 model  4 pcs');

-- --------------------------------------------------------

--
-- Table structure for table `produktrading`
--

CREATE TABLE `produktrading` (
  `idProduk` int(11) NOT NULL,
  `kodeProduk` varchar(100) NOT NULL,
  `namaProduk` varchar(200) NOT NULL,
  `jenisProduk` varchar(100) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `kodeGambar` varchar(255) NOT NULL,
  `stok` int(11) DEFAULT '0',
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorderservice`
--

CREATE TABLE `purchaseorderservice` (
  `idPO` int(11) NOT NULL,
  `nomorPO` varchar(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `idSalesPerson` int(11) NOT NULL,
  `tanggalMasuk` datetime NOT NULL,
  `tanggalEstimasiPenyelesaian` datetime NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL,
  `jenisOrder` varchar(100) NOT NULL,
  `totalBerat` float NOT NULL,
  `totalHarga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseorderservice`
--

INSERT INTO `purchaseorderservice` (`idPO`, `nomorPO`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `lastModified`, `tipeOrder`, `jenisOrder`, `totalBerat`, `totalHarga`) VALUES
(1, '1', 43, 19, '2018-04-18 00:00:00', '2018-04-19 00:00:00', '2018-04-18 06:10:31', 'service', 'Satuan', 18.31, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseordertrading`
--

CREATE TABLE `purchaseordertrading` (
  `idPO` int(11) NOT NULL,
  `nomorPO` varchar(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `idSalesPerson` int(11) NOT NULL,
  `tanggalMasuk` datetime NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL,
  `totalHarga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekapproduksi`
--

CREATE TABLE `rekapproduksi` (
  `idRekapProduksi` int(11) NOT NULL,
  `kodeRekapProduksi` varchar(50) NOT NULL,
  `idPIC` int(11) NOT NULL,
  `waktuPengembalian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `beratKembali` double NOT NULL,
  `kadar` double NOT NULL,
  `jenisProduksi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekapproduksiline`
--

CREATE TABLE `rekapproduksiline` (
  `idRekapProduksiLine` int(11) NOT NULL,
  `kodeRekapProduksi` varchar(50) NOT NULL,
  `idProProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rencanaproduksi`
--

CREATE TABLE `rencanaproduksi` (
  `idRencana` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rencanaproduksi`
--

INSERT INTO `rencanaproduksi` (`idRencana`, `idSPK`, `idAktivitas`, `startDate`, `endDate`) VALUES
(1, 193, 1001, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(2, 193, 1002, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(3, 193, 1003, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(4, 193, 1004, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(5, 193, 1005, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(6, 193, 1006, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(7, 193, 1007, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(8, 193, 1008, '2018-05-29 00:00:00', '2018-05-29 00:00:00'),
(9, 193, 1009, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(10, 193, 1010, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(11, 193, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(12, 193, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(13, 193, 1013, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(14, 193, 1014, '2018-06-12 00:00:00', '2018-06-12 00:00:00'),
(15, 208, 1001, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(16, 208, 1002, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(17, 208, 1003, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(18, 208, 1004, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(19, 208, 1005, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(20, 208, 1006, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(21, 208, 1007, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(22, 208, 1008, '2018-06-03 00:00:00', '2018-06-03 00:00:00'),
(23, 208, 1009, '2018-06-03 00:00:00', '2018-06-03 00:00:00'),
(24, 208, 1010, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(25, 208, 1011, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(26, 208, 1012, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(27, 208, 1013, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(28, 208, 1014, '2018-06-09 00:00:00', '2018-06-09 00:00:00'),
(29, 175, 1001, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(30, 175, 1002, '2018-05-27 00:00:00', '2018-05-27 00:00:00'),
(31, 175, 1003, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(32, 175, 1004, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(33, 175, 1005, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(34, 175, 1006, '2018-05-29 00:00:00', '2018-05-29 00:00:00'),
(35, 175, 1007, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(36, 175, 1008, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(37, 175, 1009, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(38, 175, 1010, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(39, 175, 1011, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(40, 175, 1012, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(41, 175, 1013, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(42, 175, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(43, 201, 1001, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(44, 201, 1002, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(45, 201, 1003, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(46, 201, 1004, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(47, 201, 1005, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(48, 201, 1006, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(49, 201, 1007, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(50, 201, 1008, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(51, 201, 1009, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(52, 201, 1010, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(53, 201, 1011, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(54, 201, 1012, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(55, 201, 1013, '2018-06-07 00:00:00', '2018-06-07 00:00:00'),
(56, 201, 1014, '2018-06-07 00:00:00', '2018-06-07 00:00:00'),
(57, 173, 1001, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(58, 173, 1002, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(59, 173, 1003, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(60, 173, 1004, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(61, 173, 1005, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(62, 173, 1006, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(63, 173, 1007, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(64, 173, 1008, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(65, 173, 1009, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(66, 173, 1010, '2018-07-03 00:00:00', '2018-07-03 00:00:00'),
(67, 173, 1011, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(68, 173, 1012, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(69, 173, 1013, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(70, 173, 1014, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(71, 179, 1001, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(72, 179, 1002, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(73, 179, 1003, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(74, 179, 1004, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(75, 179, 1005, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(76, 179, 1006, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(77, 179, 1007, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(78, 179, 1008, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(79, 179, 1009, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(80, 179, 1010, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(81, 179, 1011, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(82, 179, 1012, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(83, 179, 1013, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(84, 179, 1014, '2018-06-10 00:00:00', '2018-06-10 00:00:00'),
(85, 188, 1001, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(86, 188, 1002, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(87, 188, 1003, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(88, 188, 1004, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(89, 188, 1005, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(90, 188, 1006, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(91, 188, 1007, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(92, 188, 1008, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(93, 188, 1009, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(94, 188, 1010, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(95, 188, 1011, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(96, 188, 1012, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(97, 188, 1013, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(98, 188, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(99, 186, 1001, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(100, 186, 1002, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(101, 186, 1003, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(102, 186, 1004, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(103, 186, 1005, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(104, 186, 1006, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(105, 186, 1007, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(106, 186, 1008, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(107, 186, 1009, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(108, 186, 1010, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(109, 186, 1011, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(110, 186, 1012, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(111, 186, 1013, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(112, 186, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(113, 207, 1001, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(114, 207, 1002, '2018-05-29 00:00:00', '2018-05-29 00:00:00'),
(115, 207, 1003, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(116, 207, 1004, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(117, 207, 1005, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(118, 207, 1006, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(119, 207, 1007, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(120, 207, 1008, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(121, 207, 1009, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(122, 207, 1010, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(123, 207, 1011, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(124, 207, 1012, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(125, 207, 1013, '2018-06-09 00:00:00', '2018-06-09 00:00:00'),
(126, 207, 1014, '2018-06-09 00:00:00', '2018-06-09 00:00:00'),
(127, 187, 1001, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(128, 187, 1002, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(129, 187, 1003, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(130, 187, 1004, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(131, 187, 1005, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(132, 187, 1006, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(133, 187, 1007, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(134, 187, 1008, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(135, 187, 1009, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(136, 187, 1010, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(137, 187, 1011, '2018-06-03 00:00:00', '2018-06-03 00:00:00'),
(138, 187, 1012, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(139, 187, 1013, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(140, 187, 1014, '2018-06-08 00:00:00', '2018-06-08 00:00:00'),
(141, 164, 1001, '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(142, 164, 1002, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(143, 164, 1003, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(144, 164, 1004, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(145, 164, 1005, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(146, 164, 1006, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(147, 164, 1007, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(148, 164, 1008, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(149, 164, 1009, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(150, 164, 1010, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(151, 164, 1011, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(152, 164, 1012, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(153, 164, 1013, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(154, 164, 1014, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(155, 163, 1001, '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(156, 163, 1002, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(157, 163, 1003, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(158, 163, 1004, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(159, 163, 1005, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(160, 163, 1006, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(161, 163, 1007, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(162, 163, 1008, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(163, 163, 1009, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(164, 163, 1010, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(165, 163, 1011, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(166, 163, 1012, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(167, 163, 1013, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(168, 163, 1014, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(169, 192, 1001, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(170, 192, 1002, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(171, 192, 1003, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(172, 192, 1004, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(173, 192, 1005, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(174, 192, 1006, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(175, 192, 1007, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(176, 192, 1008, '2018-05-29 00:00:00', '2018-05-29 00:00:00'),
(177, 192, 1009, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(178, 192, 1010, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(179, 192, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(180, 192, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(181, 192, 1013, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(182, 192, 1014, '2018-06-12 00:00:00', '2018-06-12 00:00:00'),
(183, 202, 1001, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(184, 202, 1002, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(185, 202, 1003, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(186, 202, 1004, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(187, 202, 1005, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(188, 202, 1006, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(189, 202, 1007, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(190, 202, 1008, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(191, 202, 1009, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(192, 202, 1010, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(193, 202, 1011, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(194, 202, 1012, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(195, 202, 1013, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(196, 202, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(197, 132, 1001, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(198, 132, 1002, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(199, 132, 1003, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(200, 132, 1004, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(201, 132, 1005, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(202, 132, 1006, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(203, 132, 1007, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(204, 132, 1008, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(205, 132, 1009, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(206, 132, 1010, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(207, 132, 1011, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(208, 132, 1012, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(209, 132, 1013, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(210, 132, 1014, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(211, 181, 1001, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(212, 181, 1002, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(213, 181, 1003, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(214, 181, 1004, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(215, 181, 1005, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(216, 181, 1006, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(217, 181, 1007, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(218, 181, 1008, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(219, 181, 1009, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(220, 181, 1010, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(221, 181, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(222, 181, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(223, 181, 1013, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(224, 181, 1014, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(225, 200, 1001, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(226, 200, 1002, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(227, 200, 1003, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(228, 200, 1004, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(229, 200, 1005, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(230, 200, 1006, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(231, 200, 1007, '2018-06-03 00:00:00', '2018-06-03 00:00:00'),
(232, 200, 1008, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(233, 200, 1009, '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(234, 200, 1010, '2018-06-07 00:00:00', '2018-06-07 00:00:00'),
(235, 200, 1011, '2018-06-07 00:00:00', '2018-06-07 00:00:00'),
(236, 200, 1012, '2018-06-07 00:00:00', '2018-06-07 00:00:00'),
(237, 200, 1013, '2018-06-09 00:00:00', '2018-06-09 00:00:00'),
(238, 200, 1014, '2018-06-09 00:00:00', '2018-06-09 00:00:00'),
(239, 198, 1001, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(240, 198, 1002, '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(241, 198, 1003, '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(242, 198, 1004, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(243, 198, 1005, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(244, 198, 1006, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(245, 198, 1007, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(246, 198, 1008, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(247, 198, 1009, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(248, 198, 1010, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(249, 198, 1011, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(250, 198, 1012, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(251, 198, 1013, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(252, 198, 1014, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(253, 182, 1001, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(254, 182, 1002, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(255, 182, 1003, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(256, 182, 1004, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(257, 182, 1005, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(258, 182, 1006, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(259, 182, 1007, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(260, 182, 1008, '2018-05-29 00:00:00', '2018-05-29 00:00:00'),
(261, 182, 1009, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(262, 182, 1010, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(263, 182, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(264, 182, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(265, 182, 1013, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(266, 182, 1014, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(267, 105, 1001, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(268, 105, 1002, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(269, 105, 1003, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(270, 105, 1004, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(271, 105, 1005, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(272, 105, 1006, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(273, 105, 1007, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(274, 105, 1008, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(275, 105, 1009, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(276, 105, 1010, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(277, 105, 1011, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(278, 105, 1012, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(279, 105, 1013, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(280, 105, 1014, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(281, 105, 1001, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(282, 105, 1002, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(283, 105, 1003, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(284, 105, 1004, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(285, 105, 1005, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(286, 105, 1006, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(287, 105, 1007, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(288, 105, 1008, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(289, 105, 1009, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(290, 105, 1010, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(291, 105, 1011, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(292, 105, 1012, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(293, 105, 1013, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(294, 105, 1014, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(295, 183, 1001, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(296, 183, 1002, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(297, 183, 1003, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(298, 183, 1004, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(299, 183, 1005, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(300, 183, 1006, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(301, 183, 1007, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(302, 183, 1008, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(303, 183, 1009, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(304, 183, 1010, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(305, 183, 1011, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(306, 183, 1012, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(307, 183, 1013, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(308, 183, 1014, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(309, 170, 1001, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(310, 170, 1002, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(311, 170, 1003, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(312, 170, 1004, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(313, 170, 1005, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(314, 170, 1006, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(315, 170, 1007, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(316, 170, 1008, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(317, 170, 1009, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(318, 170, 1010, '2018-05-29 00:00:00', '2018-05-29 00:00:00'),
(319, 170, 1011, '2018-05-29 00:00:00', '2018-05-29 00:00:00'),
(320, 170, 1012, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(321, 170, 1013, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(322, 170, 1014, '2018-06-08 00:00:00', '2018-06-08 00:00:00'),
(323, 203, 1001, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(324, 203, 1002, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(325, 203, 1003, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(326, 203, 1004, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(327, 203, 1005, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(328, 203, 1006, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(329, 203, 1007, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(330, 203, 1008, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(331, 203, 1009, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(332, 203, 1010, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(333, 203, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(334, 203, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(335, 203, 1013, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(336, 203, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(337, 189, 1001, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(338, 189, 1002, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(339, 189, 1003, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(340, 189, 1004, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(341, 189, 1005, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(342, 189, 1006, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(343, 189, 1007, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(344, 189, 1008, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(345, 189, 1009, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(346, 189, 1010, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(347, 189, 1011, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(348, 189, 1012, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(349, 189, 1013, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(350, 189, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(351, 190, 1001, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(352, 190, 1002, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(353, 190, 1003, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(354, 190, 1004, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(355, 190, 1005, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(356, 190, 1006, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(357, 190, 1007, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(358, 190, 1008, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(359, 190, 1009, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(360, 190, 1010, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(361, 190, 1011, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(362, 190, 1012, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(363, 190, 1013, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(364, 190, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(365, 206, 1001, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(366, 206, 1002, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(367, 206, 1003, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(368, 206, 1004, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(369, 206, 1005, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(370, 206, 1006, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(371, 206, 1007, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(372, 206, 1008, '2018-05-29 00:00:00', '2018-05-29 00:00:00'),
(373, 206, 1009, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(374, 206, 1010, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(375, 206, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(376, 206, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(377, 206, 1013, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(378, 206, 1014, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(379, 20, 1001, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(380, 20, 1002, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(381, 20, 1003, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(382, 20, 1004, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(383, 20, 1005, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(384, 20, 1006, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(385, 20, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(386, 20, 1008, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(387, 20, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(388, 20, 1010, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(389, 20, 1011, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(390, 20, 1012, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(391, 20, 1013, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(392, 20, 1014, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(393, 180, 1001, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(394, 180, 1002, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(395, 180, 1003, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(396, 180, 1004, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(397, 180, 1005, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(398, 180, 1006, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(399, 180, 1007, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(400, 180, 1008, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(401, 180, 1009, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(402, 180, 1010, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(403, 180, 1011, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(404, 180, 1012, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(405, 180, 1013, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(406, 180, 1014, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(407, 204, 1001, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(408, 204, 1002, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(409, 204, 1003, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(410, 204, 1004, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(411, 204, 1005, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(412, 204, 1006, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(413, 204, 1007, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(414, 204, 1008, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(415, 204, 1009, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(416, 204, 1010, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(417, 204, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(418, 204, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(419, 204, 1013, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(420, 204, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(421, 34, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(422, 34, 1002, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(423, 34, 1003, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(424, 34, 1004, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(425, 34, 1005, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(426, 34, 1006, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(427, 34, 1007, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(428, 34, 1008, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(429, 34, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(430, 34, 1010, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(431, 34, 1011, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(432, 34, 1012, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(433, 34, 1013, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(434, 34, 1014, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(435, 33, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(436, 33, 1002, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(437, 33, 1003, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(438, 33, 1004, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(439, 33, 1005, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(440, 33, 1006, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(441, 33, 1007, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(442, 33, 1008, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(443, 33, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(444, 33, 1010, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(445, 33, 1011, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(446, 33, 1012, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(447, 33, 1013, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(448, 33, 1014, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(449, 199, 1001, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(450, 199, 1002, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(451, 199, 1003, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(452, 199, 1004, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(453, 199, 1005, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(454, 199, 1006, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(455, 199, 1007, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(456, 199, 1008, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(457, 199, 1009, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(458, 199, 1010, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(459, 199, 1011, '2018-06-05 00:00:00', '2018-06-05 00:00:00'),
(460, 199, 1012, '2018-06-05 00:00:00', '2018-06-05 00:00:00'),
(461, 199, 1013, '2018-06-05 00:00:00', '2018-06-05 00:00:00'),
(462, 199, 1014, '2018-06-05 00:00:00', '2018-06-05 00:00:00'),
(463, 185, 1001, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(464, 185, 1002, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(465, 185, 1003, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(466, 185, 1004, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(467, 185, 1005, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(468, 185, 1006, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(469, 185, 1007, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(470, 185, 1008, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(471, 185, 1009, '2018-06-01 00:00:00', '2018-06-01 00:00:00'),
(472, 185, 1010, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(473, 185, 1011, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(474, 185, 1012, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(475, 185, 1013, '2018-06-02 00:00:00', '2018-06-02 00:00:00'),
(476, 185, 1014, '2018-06-07 00:00:00', '2018-06-07 00:00:00'),
(477, 167, 1001, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(478, 167, 1002, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(479, 167, 1003, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(480, 167, 1004, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(481, 167, 1005, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(482, 167, 1006, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(483, 167, 1007, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(484, 167, 1008, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(485, 167, 1009, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(486, 167, 1010, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(487, 167, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(488, 167, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(489, 167, 1013, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(490, 167, 1014, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(491, 166, 1001, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(492, 166, 1002, '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(493, 166, 1003, '2018-05-20 00:00:00', '2018-05-20 00:00:00'),
(494, 166, 1004, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(495, 166, 1005, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(496, 166, 1006, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(497, 166, 1007, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(498, 166, 1008, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(499, 166, 1009, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(500, 166, 1010, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(501, 166, 1011, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(502, 166, 1012, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(503, 166, 1013, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(504, 166, 1014, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(505, 98, 1001, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(506, 98, 1002, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(507, 98, 1003, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(508, 98, 1004, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(509, 98, 1005, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(510, 98, 1006, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(511, 98, 1007, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(512, 98, 1008, '2018-05-17 00:00:00', '2018-05-17 00:00:00'),
(513, 98, 1009, '2018-05-17 00:00:00', '2018-05-17 00:00:00'),
(514, 98, 1010, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(515, 98, 1011, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(516, 98, 1012, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(517, 98, 1013, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(518, 98, 1014, '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(519, 205, 1001, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(520, 205, 1002, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(521, 205, 1003, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(522, 205, 1004, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(523, 205, 1005, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(524, 205, 1006, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(525, 205, 1007, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(526, 205, 1008, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(527, 205, 1009, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(528, 205, 1010, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(529, 205, 1011, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(530, 205, 1012, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(531, 205, 1013, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(532, 205, 1014, '2018-06-06 00:00:00', '2018-06-06 00:00:00'),
(533, 104, 1001, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(534, 104, 1002, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(535, 104, 1003, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(536, 104, 1004, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(537, 104, 1005, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(538, 104, 1006, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(539, 104, 1007, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(540, 104, 1008, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(541, 104, 1009, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(542, 104, 1010, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(543, 104, 1011, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(544, 104, 1012, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(545, 104, 1013, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(546, 104, 1014, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(547, 121, 1001, '2018-12-17 00:00:00', '2018-12-17 00:00:00'),
(548, 121, 1002, '2018-12-19 00:00:00', '2018-12-19 00:00:00'),
(549, 121, 1003, '2018-12-20 00:00:00', '2018-12-20 00:00:00'),
(550, 121, 1004, '2018-12-20 00:00:00', '2018-12-20 00:00:00'),
(551, 121, 1005, '2018-12-20 00:00:00', '2018-12-20 00:00:00'),
(552, 121, 1006, '2018-12-22 00:00:00', '2018-12-22 00:00:00'),
(553, 121, 1007, '2018-12-23 00:00:00', '2018-12-23 00:00:00'),
(554, 121, 1008, '2018-12-25 00:00:00', '2018-12-25 00:00:00'),
(555, 121, 1009, '2018-12-25 00:00:00', '2018-12-25 00:00:00'),
(556, 121, 1010, '2018-12-27 00:00:00', '2018-12-27 00:00:00'),
(557, 121, 1011, '2018-12-27 00:00:00', '2018-12-27 00:00:00'),
(558, 121, 1012, '2018-12-27 00:00:00', '2018-12-27 00:00:00'),
(559, 121, 1013, '2018-12-27 00:00:00', '2018-12-27 00:00:00'),
(560, 121, 1014, '2018-12-28 00:00:00', '2018-12-28 00:00:00'),
(561, 141, 1001, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(562, 141, 1002, '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(563, 141, 1003, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(564, 141, 1004, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(565, 141, 1005, '2018-05-21 00:00:00', '2018-05-21 00:00:00'),
(566, 141, 1006, '2018-05-22 00:00:00', '2018-05-22 00:00:00'),
(567, 141, 1007, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(568, 141, 1008, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(569, 141, 1009, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(570, 141, 1010, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(571, 141, 1011, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(572, 141, 1012, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(573, 141, 1013, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(574, 141, 1014, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(575, 184, 1001, '2018-05-23 00:00:00', '2018-05-23 00:00:00'),
(576, 184, 1002, '2018-05-24 00:00:00', '2018-05-24 00:00:00'),
(577, 184, 1003, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(578, 184, 1004, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(579, 184, 1005, '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(580, 184, 1006, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(581, 184, 1007, '2018-05-26 00:00:00', '2018-05-26 00:00:00'),
(582, 184, 1008, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(583, 184, 1009, '2018-05-28 00:00:00', '2018-05-28 00:00:00'),
(584, 184, 1010, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(585, 184, 1011, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(586, 184, 1012, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(587, 184, 1013, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(588, 184, 1014, '2018-05-31 00:00:00', '2018-05-31 00:00:00'),
(589, 152, 1001, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(590, 152, 1002, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(591, 152, 1003, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(592, 152, 1004, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(593, 152, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(594, 152, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(595, 152, 1007, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(596, 152, 1008, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(597, 152, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(598, 152, 1010, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(599, 152, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(600, 152, 1012, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(601, 152, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(602, 152, 1014, '2018-04-16 00:00:00', '2018-04-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rencanaproduksi2`
--

CREATE TABLE `rencanaproduksi2` (
  `idRencana` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rencanaproduksi3`
--

CREATE TABLE `rencanaproduksi3` (
  `idRencana` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rencanaproduksiservice`
--

CREATE TABLE `rencanaproduksiservice` (
  `idRencana` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `kodeRole` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `kodeRole`, `deskripsi`) VALUES
(1, 'ADM', 'Super Admin'),
(2, 'PO', 'CRUD Purchase Order'),
(3, 'TM', 'Transfer Material'),
(4, 'JDW', 'CRUD Jadwal  Produksi');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `jenisProduksi` varchar(255) NOT NULL,
  `nilaiKecepatan` double NOT NULL,
  `nilaiKualitas` double NOT NULL,
  `dateCreated` datetime NOT NULL,
  `alasan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `nama`, `nilai`) VALUES
(1, 'emas lokal', 96.5),
(2, 'warning', 5),
(3, 'toleransi', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `spk`
--

CREATE TABLE `spk` (
  `idSPK` int(11) NOT NULL,
  `nomorFaktur` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `statusDesain` varchar(100) NOT NULL,
  `tanggalApprovalDesain` datetime NOT NULL,
  `PICDesain` int(11) NOT NULL,
  `statusBOM` varchar(100) NOT NULL,
  `tanggalApprovalBOM` datetime NOT NULL,
  `PICBOM` int(11) NOT NULL,
  `statusJadwal` varchar(100) NOT NULL,
  `tanggalApprovalJadwal` datetime NOT NULL,
  `PICJadwal` int(11) NOT NULL,
  `statusPersetujuan` varchar(100) NOT NULL,
  `tanggalApprovalPersetujuan` datetime NOT NULL,
  `PICPersetujuan` int(11) NOT NULL,
  `kadarWenny` double NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusSPK` varchar(100) NOT NULL DEFAULT 'On progress',
  `statusPrint` varchar(200) NOT NULL DEFAULT 'Belum',
  `keteranganDesain` varchar(200) NOT NULL,
  `keteranganPending` varchar(200) NOT NULL,
  `tglPrint` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spk`
--

INSERT INTO `spk` (`idSPK`, `nomorFaktur`, `nomorPO`, `idProduk`, `idCustomer`, `statusDesain`, `tanggalApprovalDesain`, `PICDesain`, `statusBOM`, `tanggalApprovalBOM`, `PICBOM`, `statusJadwal`, `tanggalApprovalJadwal`, `PICJadwal`, `statusPersetujuan`, `tanggalApprovalPersetujuan`, `PICPersetujuan`, `kadarWenny`, `lastModified`, `statusSPK`, `statusPrint`, `keteranganDesain`, `keteranganPending`, `tglPrint`) VALUES
(20, 20, 20, 810, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 23:20:27', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 16:20:27', 'On progress', 'Belum', '', '', '2018-04-23 00:00:00'),
(30, 30, 30, 834, 49, 'Disetujui', '2018-05-25 14:35:05', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 14:34:26', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:49:30', 'Done', 'Sudah', '2', '', '2018-04-19 00:00:00'),
(33, 33, 33, 837, 33, 'Disetujui', '2018-05-25 14:34:18', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-28 00:36:07', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-27 17:36:07', 'Done', 'Sudah', '2', '', '2018-04-23 00:00:00'),
(34, 34, 34, 838, 33, 'Disetujui', '2018-05-25 14:33:31', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-28 00:33:57', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-27 17:33:57', 'Done', 'Sudah', '2', '', '2018-04-21 00:00:00'),
(40, 40, 40, 844, 33, 'Disetujui', '2018-05-25 14:23:45', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 14:23:17', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:50:13', 'Done', 'Sudah', '2', '', '2018-04-19 00:00:00'),
(41, 41, 41, 845, 33, 'Disetujui', '2018-05-25 14:23:04', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 14:22:34', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:50:27', 'Done', 'Sudah', '2', '', '2018-04-20 00:00:00'),
(42, 42, 42, 846, 50, 'Disetujui', '2018-05-25 14:22:26', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 14:21:46', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:50:44', 'Done', 'Sudah', '2', '', '2018-04-19 00:00:00'),
(45, 45, 45, 849, 56, 'Disetujui', '2018-05-25 14:21:39', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 14:20:33', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:50:54', 'Done', 'Sudah', '2', '', '2018-04-20 00:00:00'),
(46, 46, 46, 850, 56, 'Disetujui', '2018-05-25 14:20:24', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 14:19:47', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:51:11', 'Done', 'Sudah', '2', '', '2018-04-20 00:00:00'),
(47, 47, 47, 856, 55, 'Disetujui', '2018-05-09 13:56:02', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 13:51:01', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:48:22', 'Done', 'Sudah', '0', '', '2018-05-08 00:00:00'),
(48, 48, 48, 863, 57, 'Disetujui', '2018-05-25 14:19:39', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 14:18:49', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:51:23', 'Done', 'Sudah', '2', '', '2018-04-25 00:00:00'),
(49, 49, 49, 864, 58, 'Disetujui', '2018-05-25 14:02:22', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:47:21', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:51:35', 'Done', 'Sudah', '2', '', '2018-04-25 00:00:00'),
(50, 50, 50, 865, 49, 'Disetujui', '2018-05-25 11:47:14', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:46:23', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:51:46', 'Done', 'Sudah', '2', '', '2018-04-25 00:00:00'),
(51, 51, 51, 866, 49, 'Disetujui', '2018-05-25 11:46:12', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:45:35', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:52:00', 'Done', 'Sudah', '2', '', '2018-04-25 00:00:00'),
(52, 52, 52, 867, 49, 'Disetujui', '2018-05-25 11:45:21', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:44:28', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:52:13', 'Done', 'Sudah', '2', '', '2018-04-25 00:00:00'),
(53, 53, 53, 868, 49, 'Disetujui', '2018-05-25 11:44:16', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:43:25', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:52:27', 'Done', 'Sudah', '2', '', '2018-04-25 00:00:00'),
(54, 54, 54, 869, 49, 'Disetujui', '2018-05-25 11:43:17', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:42:42', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:52:49', 'Done', 'Sudah', '2', '', '2018-04-25 00:00:00'),
(57, 57, 57, 874, 33, 'Disetujui', '2018-05-25 11:42:36', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:41:59', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:55:52', 'Done', 'Sudah', '2', '', '2018-04-25 00:00:00'),
(64, 64, 64, 881, 60, 'Disetujui', '2018-05-25 11:41:51', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:40:57', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:57:18', 'Done', 'Sudah', '2', '', '2018-04-27 00:00:00'),
(65, 65, 65, 882, 33, 'Disetujui', '2018-05-25 11:40:49', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:39:56', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:56:13', 'Done', 'Sudah', '2', '', '2018-04-12 00:00:00'),
(66, 66, 66, 883, 33, 'Disetujui', '2018-05-25 11:39:46', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:38:46', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:54:03', 'Done', 'Sudah', '2', '', '2018-04-16 00:00:00'),
(67, 67, 67, 885, 61, 'Disetujui', '2018-05-25 11:38:38', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:37:57', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:56:20', 'Done', 'Sudah', '2', '', '2018-04-23 00:00:00'),
(69, 69, 69, 889, 33, 'Disetujui', '2018-05-09 16:12:23', 2, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 16:09:05', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-25 08:50:18', 'Done', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(72, 72, 72, 892, 64, 'Disetujui', '2018-05-25 11:37:27', 19, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-25 11:36:42', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-25 07:20:38', 'On progress', 'Sudah', '2', '', '2018-04-30 00:00:00'),
(77, 76, 76, 901, 67, 'Disetujui', '2018-05-25 11:36:33', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:35:53', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:54:49', 'Done', 'Sudah', '2', '', '2018-05-02 00:00:00'),
(78, 77, 77, 902, 68, 'Disetujui', '2018-05-25 11:35:46', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:34:34', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:53:38', 'Done', 'Sudah', '2', '', '2018-04-30 00:00:00'),
(79, 78, 78, 903, 33, 'Disetujui', '2018-05-25 11:34:26', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:20:52', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:54:41', 'Done', 'Sudah', '2', '', '2018-05-02 00:00:00'),
(81, 80, 80, 905, 33, 'Disetujui', '2018-05-25 11:17:30', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:14:34', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:55:42', 'Done', 'Sudah', '2', '', '2018-05-01 00:00:00'),
(82, 81, 81, 906, 33, 'Disetujui', '2018-05-25 00:53:48', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:53:15', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:53:54', 'Done', 'Sudah', '2', '', '2018-05-02 00:00:00'),
(83, 82, 82, 907, 33, 'Disetujui', '2018-05-11 15:31:52', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-11 15:11:07', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:51:50', 'Done', 'Sudah', '0', '', '2018-05-11 00:00:00'),
(88, 87, 87, 914, 50, 'Disetujui', '2018-05-25 00:53:09', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:52:34', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:57:39', 'Done', 'Sudah', '2', '', '2018-05-01 00:00:00'),
(89, 88, 88, 915, 50, 'Disetujui', '2018-05-25 00:52:25', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:51:44', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:57:16', 'Done', 'Sudah', '2', '', '2018-05-01 00:00:00'),
(90, 89, 89, 916, 50, 'Disetujui', '2018-05-09 15:55:28', 2, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 15:53:13', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:49:54', 'Done', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(92, 91, 91, 918, 71, 'Disetujui', '2018-05-10 15:49:48', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-10 12:09:56', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:51:18', 'Done', 'Sudah', '0', '', '2018-05-03 00:00:00'),
(94, 93, 93, 920, 33, 'Disetujui', '2018-05-09 13:41:25', 2, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 13:35:48', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:45:15', 'Done', 'Sudah', 'Liontin nama ANGELIA JULITA', '', '2018-05-09 00:00:00'),
(95, 94, 94, 921, 33, 'Disetujui', '2018-05-11 15:31:21', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-10 17:04:32', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:51:27', 'Done', 'Sudah', '0', '', '0000-00-00 00:00:00'),
(96, 95, 95, 922, 33, 'Disetujui', '2018-05-09 16:30:31', 2, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 16:27:39', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:50:40', 'Done', 'Sudah', '0', '', '2018-05-10 00:00:00'),
(97, 96, 96, 926, 56, 'Disetujui', '2018-05-11 15:31:12', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-11 15:16:44', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:52:01', 'Done', 'Sudah', '0', '', '2018-05-11 00:00:00'),
(98, 97, 97, 927, 33, 'Disetujui', '2018-05-25 00:50:45', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-28 00:46:49', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-27 17:46:49', 'Done', 'Sudah', '2', '', '2018-05-12 00:00:00'),
(99, 98, 98, 928, 33, 'Disetujui', '2018-05-25 00:49:44', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:49:07', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:56:39', 'Done', 'Sudah', '2', '', '2018-05-04 00:00:00'),
(101, 100, 100, 930, 72, 'Disetujui', '2018-05-09 13:17:21', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 12:03:40', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:41:14', 'Done', 'Sudah', '0', '', '2018-05-08 00:00:00'),
(102, 101, 101, 931, 73, 'Disetujui', '2018-05-11 15:30:58', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-11 15:27:02', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:52:13', 'Done', 'Sudah', '0', '', '2018-05-05 00:00:00'),
(103, 102, 102, 932, 49, 'Disetujui', '2018-05-12 13:16:24', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-12 13:12:47', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:53:34', 'Done', 'Sudah', '0', '', '2018-05-12 00:00:00'),
(104, 103, 103, 933, 33, 'Menunggu Persetujuan', '0000-00-00 00:00:00', 2, 'Belum Ada', '0000-00-00 00:00:00', 2, 'Sudah Ada', '2018-05-28 00:51:29', 2, 'Belum Disetujui', '0000-00-00 00:00:00', 2, 0, '2018-05-27 17:51:29', 'On progress', 'Belum', 'Cincin Cewek Diamond', '', '2018-05-07 00:00:00'),
(105, 104, 104, 934, 50, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-26 17:36:36', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-26 10:36:36', 'On progress', 'Belum', '', '', '2018-04-19 00:00:00'),
(106, 105, 105, 935, 75, 'Disetujui', '2018-05-09 12:11:08', 11, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 12:06:26', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 05:11:18', 'On progress', 'Sudah', 'cincin kawin ', '', '2018-05-08 00:00:00'),
(107, 106, 106, 936, 48, 'Disetujui', '2018-05-25 00:48:47', 9, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 12:37:12', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-25 08:42:47', 'Done', 'Sudah', '2', '', '2018-05-12 00:00:00'),
(108, 107, 107, 937, 76, 'Disetujui', '2018-05-25 00:47:17', 9, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-25 00:46:44', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-25 08:54:28', 'Done', 'Sudah', '0', '', '2018-05-07 00:00:00'),
(109, 108, 108, 938, 77, 'Disetujui', '2018-05-11 15:32:05', 6, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-11 15:08:01', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-25 08:51:38', 'Done', 'Sudah', '0', '', '2018-05-07 00:00:00'),
(110, 109, 109, 939, 57, 'Disetujui', '2018-05-25 00:46:36', 9, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-25 00:45:57', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-25 08:56:35', 'Done', 'Sudah', '2', '', '2018-05-07 00:00:00'),
(111, 110, 110, 940, 78, 'Disetujui', '2018-05-09 15:00:50', 2, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 14:51:49', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-25 08:49:15', 'Done', 'Sudah', '0', '', '2018-05-07 00:00:00'),
(112, 111, 111, 941, 52, 'Disetujui', '2018-05-09 15:37:17', 2, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 15:35:23', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-25 08:49:39', 'Done', 'Sudah', '0', '', '2018-05-07 00:00:00'),
(113, 112, 112, 942, 79, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 06:56:11', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(114, 113, 113, 943, 80, 'Disetujui', '2018-05-10 16:39:51', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-10 16:37:42', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-12 02:51:29', 'On progress', 'Sudah', '0', '', '2018-05-11 00:00:00'),
(115, 114, 114, 944, 81, 'Disetujui', '2018-05-25 00:45:20', 9, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-25 00:44:48', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-25 08:56:25', 'Done', 'Sudah', '2', '', '2018-12-04 00:00:00'),
(117, 116, 116, 946, 64, 'Disetujui', '2018-05-09 16:06:02', 6, 'Belum Ada', '0000-00-00 00:00:00', 6, 'Sudah Ada', '2018-05-09 16:00:46', 6, 'Belum Disetujui', '0000-00-00 00:00:00', 6, 0, '2018-05-25 08:50:07', 'Done', 'Sudah', '0', '', '2018-05-06 00:00:00'),
(118, 117, 117, 947, 48, 'Disetujui', '2018-05-09 16:56:18', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 16:38:32', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:50:52', 'Done', 'Sudah', '0', '', '2018-05-12 00:00:00'),
(119, 118, 118, 948, 52, 'Disetujui', '2018-05-09 17:12:26', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 17:05:20', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:51:02', 'Done', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(120, 119, 119, 949, 33, 'Disetujui', '2018-05-09 16:33:05', 6, 'Belum Ada', '0000-00-00 00:00:00', 6, 'Sudah Ada', '2018-05-09 16:24:35', 6, 'Belum Disetujui', '0000-00-00 00:00:00', 6, 0, '2018-05-25 08:50:30', 'Done', 'Sudah', '0', '', '2018-05-06 00:00:00'),
(121, 120, 120, 950, 50, 'Disetujui', '2018-05-25 00:44:40', 9, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-28 00:53:15', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 17:53:15', 'Done', 'Sudah', '2', '', '2018-12-19 00:00:00'),
(122, 121, 121, 952, 33, 'Disetujui', '2018-05-25 00:43:44', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:43:04', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:55:46', 'Done', 'Sudah', '2', '', '2018-05-09 00:00:00'),
(123, 122, 122, 953, 82, 'Disetujui', '2018-05-25 00:42:58', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:42:24', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:56:13', 'Done', 'Sudah', '2', '', '2018-05-09 00:00:00'),
(124, 123, 123, 954, 33, 'Disetujui', '2018-05-25 00:42:16', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:41:41', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:55:57', 'Done', 'Sudah', '2', '', '2018-05-09 00:00:00'),
(125, 124, 124, 955, 56, 'Disetujui', '2018-05-25 00:41:34', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:41:04', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:55:49', 'Done', 'Sudah', '2', '', '2018-05-09 00:00:00'),
(126, 125, 125, 956, 33, 'Disetujui', '2018-05-25 00:40:57', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:40:24', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:55:38', 'Done', 'Sudah', '2', '', '2018-05-09 00:00:00'),
(127, 126, 126, 957, 33, 'Disetujui', '2018-05-25 00:40:14', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:32:35', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:55:24', 'Done', 'Sudah', '2', '', '2018-05-09 00:00:00'),
(128, 127, 127, 958, 33, 'Disetujui', '2018-05-12 13:43:48', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-12 10:00:59', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:53:00', 'Done', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(129, 128, 128, 959, 33, 'Disetujui', '2018-05-12 13:11:24', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-12 10:24:52', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:53:24', 'Done', 'Sudah', '0', '', '2018-05-12 00:00:00'),
(130, 129, 129, 960, 33, 'Disetujui', '2018-05-12 17:22:14', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-12 17:17:57', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:54:40', 'Done', 'Sudah', '0', '', '2018-05-12 00:00:00'),
(131, 130, 130, 961, 56, 'Disetujui', '2018-05-12 13:39:10', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-12 13:32:33', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:54:28', 'Done', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(132, 131, 131, 962, 64, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:32:28', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:32:28', 'On progress', 'Belum', '', '', '2018-04-19 00:00:00'),
(133, 132, 132, 963, 50, 'Disetujui', '2018-05-11 16:55:13', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-11 16:52:22', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:52:30', 'Done', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(134, 133, 133, 964, 50, 'Disetujui', '2018-05-12 13:46:15', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-11 17:20:51', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:52:40', 'Done', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(135, 134, 134, 965, 49, 'Disetujui', '2018-05-12 13:26:54', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-12 13:19:14', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:53:49', 'Done', 'Sudah', '0', '', '2018-05-12 00:00:00'),
(136, 135, 135, 966, 49, 'Disetujui', '2018-05-12 13:26:50', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-12 13:22:37', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:54:03', 'Done', 'Sudah', '0', '', '2018-05-12 00:00:00'),
(137, 136, 136, 967, 33, 'Disetujui', '2018-05-25 00:32:19', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:31:12', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:55:11', 'Done', 'Sudah', '2', '', '2018-05-25 00:00:00'),
(141, 140, 140, 971, 72, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-28 01:03:27', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-27 18:03:27', 'On progress', 'Belum', '', '', '2018-05-19 00:00:00'),
(142, 141, 141, 972, 38, 'Disetujui', '2018-05-25 00:29:42', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:27:33', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 08:54:55', 'Done', 'Sudah', '2', '', '2018-05-17 00:00:00'),
(143, 142, 142, 973, 56, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 06:20:38', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(144, 143, 143, 974, 56, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 06:24:47', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(145, 144, 144, 975, 79, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 06:34:14', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(146, 145, 145, 976, 79, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 06:39:21', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(147, 146, 146, 977, 83, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 06:43:34', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(148, 147, 147, 978, 72, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 06:47:01', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(149, 148, 148, 979, 84, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 06:49:55', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(150, 149, 149, 984, 73, 'Menunggu Persetujuan', '0000-00-00 00:00:00', 9, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 00:25:21', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-24 17:28:09', 'On progress', 'Belum', '0', '', '2018-05-15 00:00:00'),
(151, 150, 150, 985, 50, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 07:02:31', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(152, 151, 151, 986, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-28 01:08:25', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-27 18:08:25', 'On progress', 'Belum', '', '', '2018-04-04 00:00:00'),
(153, 152, 152, 987, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 07:09:08', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(154, 153, 153, 988, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 07:12:23', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(155, 154, 154, 989, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 07:15:28', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(157, 155, 155, 991, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 07:32:47', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(158, 156, 156, 992, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 08:00:04', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(159, 157, 157, 993, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-18 08:05:28', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(160, 158, 158, 994, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 08:06:57', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(161, 159, 159, 995, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-18 08:07:32', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(162, 166, 166, 996, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-18 09:46:04', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(163, 160, 160, 997, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:27:31', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:27:31', 'On progress', 'Belum', '', '', '2018-05-21 00:00:00'),
(164, 161, 161, 998, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-26 17:27:31', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-26 10:27:31', 'On progress', 'Belum', '', '', '2018-05-21 00:00:00'),
(165, 162, 162, 999, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-18 08:21:03', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(166, 163, 163, 1000, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-28 00:44:08', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-27 17:44:08', 'On progress', 'Belum', '', '', '2018-05-19 00:00:00'),
(167, 164, 164, 1001, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-28 00:42:55', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-27 17:42:55', 'On progress', 'Belum', '', '', '2018-05-22 00:00:00'),
(169, 167, 167, 1004, 85, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-19 03:10:19', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(170, 168, 168, 1005, 86, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 22:48:52', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 15:48:52', 'On progress', 'Belum', '', '', '2018-05-23 00:00:00'),
(171, 169, 169, 1006, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-22 04:55:40', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(172, 170, 170, 1007, 50, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-22 04:57:43', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(173, 171, 171, 1017, 87, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:15:33', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:15:33', 'On progress', 'Belum', '', '', '2018-05-28 00:00:00'),
(174, 172, 172, 1018, 88, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-24 05:15:51', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(175, 173, 173, 1020, 59, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-26 17:13:33', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-26 10:13:33', 'On progress', 'Belum', '', '', '2018-05-27 00:00:00'),
(176, 174, 174, 1021, 48, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 03:25:15', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(177, 175, 175, 1022, 48, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-25 05:23:17', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(178, 176, 176, 1023, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-25 05:26:07', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(179, 177, 177, 1024, 56, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:17:11', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:17:11', 'On progress', 'Belum', '', '', '2018-05-26 00:00:00'),
(180, 178, 178, 1025, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 23:22:14', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 16:22:14', 'On progress', 'Belum', '', '', '2018-05-25 00:00:00'),
(181, 179, 179, 1026, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:32:41', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:32:41', 'On progress', 'Belum', '', '', '2018-05-25 00:00:00'),
(182, 180, 180, 1027, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:36:21', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:36:21', 'On progress', 'Belum', '', '', '2018-05-25 00:00:00'),
(183, 181, 181, 1028, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 22:42:55', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 15:42:55', 'On progress', 'Belum', '', '', '2018-05-25 00:00:00'),
(184, 182, 182, 1029, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-28 01:04:40', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 18:04:40', 'On progress', 'Belum', '', '', '2018-05-24 00:00:00'),
(185, 183, 183, 1030, 88, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-28 00:41:18', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 17:41:18', 'On progress', 'Belum', '', '', '2018-05-26 00:00:00'),
(186, 184, 184, 1031, 61, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:19:06', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:19:06', 'On progress', 'Belum', '', '', '2018-05-28 00:00:00'),
(187, 185, 185, 1032, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:20:44', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:20:44', 'On progress', 'Belum', '', '', '2018-05-29 00:00:00'),
(188, 186, 186, 1033, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:17:19', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:17:19', 'On progress', 'Belum', '', '', '2018-05-26 00:00:00'),
(189, 187, 187, 1034, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 23:03:31', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 16:03:31', 'On progress', 'Belum', '', '', '2018-05-25 00:00:00'),
(190, 188, 188, 1035, 79, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 23:05:50', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 16:05:50', 'On progress', 'Belum', '', '', '2018-05-25 00:00:00'),
(191, 189, 189, 1036, 89, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-25 07:23:52', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(192, 190, 190, 1037, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:28:56', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:28:56', 'On progress', 'Belum', '', '', '2018-05-24 00:00:00'),
(193, 191, 191, 1038, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:09:24', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:09:24', 'On progress', 'Belum', '', '', '2018-05-24 00:00:00'),
(194, 192, 192, 1039, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-25 07:53:47', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(195, 193, 193, 1040, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-25 07:56:14', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(196, 194, 194, 1041, 72, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-25 08:00:25', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(197, 195, 195, 1042, 72, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-25 08:02:48', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(198, 196, 196, 1043, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:34:53', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:34:53', 'On progress', 'Belum', '', '', '2018-05-09 00:00:00'),
(199, 197, 197, 1044, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-28 00:38:36', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-27 17:38:36', 'On progress', 'Belum', '', '', '2018-05-26 00:00:00'),
(200, 198, 198, 1045, 38, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-26 17:34:29', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-26 10:34:29', 'On progress', 'Belum', '', '', '2018-05-30 00:00:00'),
(201, 199, 199, 1046, 48, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:15:28', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:15:28', 'On progress', 'Belum', '', '', '2018-05-28 00:00:00'),
(202, 200, 200, 1047, 48, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-26 17:29:07', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-26 10:29:07', 'On progress', 'Belum', '', '', '2018-05-23 00:00:00'),
(203, 201, 201, 1048, 90, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 23:01:05', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 16:01:05', 'On progress', 'Belum', '', '', '2018-05-24 00:00:00'),
(204, 202, 202, 1049, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 23:23:57', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 16:23:57', 'On progress', 'Belum', '', '', '2018-05-24 00:00:00'),
(205, 203, 203, 1050, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-28 00:48:08', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 17:48:08', 'On progress', 'Belum', '', '', '2018-05-24 00:00:00'),
(206, 204, 204, 1051, 52, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Sudah Ada', '2018-05-27 23:09:34', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-27 16:09:34', 'On progress', 'Belum', '', '', '2018-05-23 00:00:00'),
(207, 205, 205, 1052, 91, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-26 17:19:45', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-26 10:19:45', 'On progress', 'Belum', '', '', '2018-05-29 00:00:00'),
(208, 206, 206, 1053, 91, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-26 17:13:25', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-26 10:13:25', 'On progress', 'Belum', '', '', '2018-05-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `spkmasal`
--

CREATE TABLE `spkmasal` (
  `idSPK` int(11) NOT NULL,
  `nomorFaktur` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `statusBOM` varchar(100) NOT NULL,
  `tanggalApprovalBOM` datetime NOT NULL,
  `PICBOM` int(11) NOT NULL,
  `statusJadwal` varchar(100) NOT NULL,
  `tanggalApprovalJadwal` datetime NOT NULL,
  `PICJadwal` int(11) NOT NULL,
  `statusPersetujuan` varchar(100) NOT NULL,
  `tanggalApprovalPersetujuan` datetime NOT NULL,
  `PICPersetujuan` int(11) NOT NULL,
  `kadarWenny` double NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `prioritas` int(11) NOT NULL,
  `statusSPK` varchar(15) NOT NULL DEFAULT 'On progress'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spkmasal`
--

INSERT INTO `spkmasal` (`idSPK`, `nomorFaktur`, `nomorPO`, `idProduk`, `idCustomer`, `statusBOM`, `tanggalApprovalBOM`, `PICBOM`, `statusJadwal`, `tanggalApprovalJadwal`, `PICJadwal`, `statusPersetujuan`, `tanggalApprovalPersetujuan`, `PICPersetujuan`, `kadarWenny`, `lastModified`, `prioritas`, `statusSPK`) VALUES
(15, 15, 15, 824, 37, 'Disetujui', '2018-05-07 19:38:26', 19, 'Disetujui', '2018-05-07 19:37:29', 19, 'Disetujui', '2018-05-24 15:50:41', 19, 0, '2018-05-24 08:50:41', 0, 'Done'),
(16, 16, 16, 851, 36, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-04-28 16:47:35', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-28 09:47:35', 0, 'On progress'),
(17, 17, 17, 852, 31, 'Disetujui', '2018-04-28 13:35:20', 19, 'Disetujui', '2018-04-26 11:09:50', 19, 'Disetujui', '2018-05-24 15:51:32', 19, 59, '2018-05-24 08:51:32', 0, 'Done'),
(18, 18, 18, 854, 31, 'Disetujui', '2018-05-24 15:52:02', 19, 'Disetujui', '2018-05-16 17:20:28', 19, 'Disetujui', '2018-05-24 15:55:28', 19, 0, '2018-05-24 08:55:28', 0, 'Done'),
(19, 19, 19, 855, 31, 'Disetujui', '2018-05-24 15:52:03', 19, 'Disetujui', '2018-04-26 11:05:34', 19, 'Disetujui', '2018-05-24 15:55:55', 19, 0, '2018-05-24 08:55:55', 0, 'Done'),
(20, 20, 20, 857, 47, 'Disetujui', '2018-04-28 14:21:53', 19, 'Sudah Ada', '2018-04-26 11:03:38', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 29.5, '2018-04-28 07:23:26', 0, 'On progress'),
(21, 21, 21, 862, 38, 'Disetujui', '2018-04-28 16:48:06', 19, 'Sudah Ada', '2018-04-28 16:46:13', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 59, '2018-04-28 09:49:03', 0, 'On progress'),
(22, 22, 22, 884, 35, 'Disetujui', '2018-05-24 16:09:10', 19, 'Disetujui', '2018-05-16 17:18:05', 19, 'Disetujui', '2018-05-24 23:22:45', 19, 0, '2018-05-24 16:22:45', 0, 'Done'),
(23, 23, 23, 887, 37, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:01:57', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 04:01:57', 0, 'On progress'),
(24, 24, 24, 893, 45, 'Disetujui', '2018-05-24 16:00:41', 19, 'Sudah Ada', '2018-05-16 17:19:17', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-24 09:00:41', 0, 'On progress'),
(25, 25, 25, 894, 45, 'Disetujui', '2018-05-24 23:30:53', 19, 'Disetujui', '2018-05-24 23:24:48', 19, 'Disetujui', '2018-05-24 23:33:29', 19, 0, '2018-05-24 16:33:29', 0, 'Done'),
(27, 27, 27, 896, 65, 'Disetujui', '2018-05-24 23:39:26', 19, 'Disetujui', '2018-05-24 23:25:29', 19, 'Disetujui', '2018-05-24 23:43:05', 19, 0, '2018-05-24 16:43:05', 0, 'Done'),
(28, 28, 28, 909, 31, 'Disetujui', '2018-05-24 23:43:11', 19, 'Disetujui', '2018-05-24 23:25:41', 19, 'Disetujui', '2018-05-24 23:46:27', 19, 0, '2018-05-24 16:46:27', 0, 'Done'),
(29, 29, 29, 910, 31, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-25 11:10:25', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-25 04:10:25', 0, 'On progress'),
(30, 30, 30, 923, 31, 'Disetujui', '2018-05-24 16:08:49', 19, 'Disetujui', '2018-05-16 17:10:08', 19, 'Disetujui', '2018-05-24 16:11:21', 19, 0, '2018-05-24 09:11:21', 0, 'Done'),
(31, 31, 31, 924, 36, 'Disetujui', '2018-05-24 23:46:36', 19, 'Disetujui', '2018-05-24 23:29:27', 19, 'Disetujui', '2018-05-24 23:49:03', 19, 0, '2018-05-24 16:49:03', 0, 'Done'),
(32, 32, 32, 925, 31, 'Disetujui', '2018-05-24 16:00:31', 19, 'Disetujui', '2018-05-16 17:09:30', 19, 'Disetujui', '2018-05-24 16:04:13', 19, 0, '2018-05-24 09:04:13', 0, 'Done'),
(33, 33, 33, 1008, 41, 'Disetujui', '2018-05-24 23:49:10', 19, 'Disetujui', '2018-05-24 23:29:40', 19, 'Disetujui', '2018-05-24 23:51:26', 19, 0, '2018-05-24 16:51:26', 0, 'Done'),
(34, 34, 34, 1010, 41, 'Disetujui', '2018-05-25 00:03:24', 19, 'Disetujui', '2018-05-24 23:30:09', 19, 'Disetujui', '2018-05-25 00:05:49', 19, 0, '2018-05-24 17:05:49', 0, 'Done'),
(35, 35, 35, 1011, 41, 'Disetujui', '2018-05-25 00:05:59', 19, 'Disetujui', '2018-05-24 23:30:16', 19, 'Disetujui', '2018-05-25 00:08:12', 19, 0, '2018-05-24 17:08:12', 0, 'Done'),
(36, 36, 36, 1012, 41, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-22 05:22:53', 0, 'On progress'),
(37, 37, 37, 1013, 41, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-22 05:27:21', 0, 'On progress'),
(38, 38, 38, 1014, 65, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-22 06:18:35', 0, 'On progress'),
(39, 39, 39, 1015, 36, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-22 08:14:45', 0, 'On progress'),
(40, 40, 40, 1016, 45, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-22 08:18:17', 0, 'On progress'),
(41, 41, 41, 1019, 87, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-24 06:53:09', 0, 'On progress');

-- --------------------------------------------------------

--
-- Table structure for table `spkperak`
--

CREATE TABLE `spkperak` (
  `idSPK` int(11) NOT NULL,
  `nomorFaktur` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `statusDesain` varchar(100) NOT NULL,
  `tanggalApprovalDesain` datetime NOT NULL,
  `PICDesain` int(11) NOT NULL,
  `statusBOM` varchar(100) NOT NULL,
  `tanggalApprovalBOM` datetime NOT NULL,
  `PICBOM` int(11) NOT NULL,
  `statusJadwal` varchar(100) NOT NULL,
  `tanggalApprovalJadwal` datetime NOT NULL,
  `PICJadwal` int(11) NOT NULL,
  `statusPersetujuan` varchar(100) NOT NULL,
  `tanggalApprovalPersetujuan` datetime NOT NULL,
  `PICPersetujuan` int(11) NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `prioritas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spkservice`
--

CREATE TABLE `spkservice` (
  `idSPK` int(11) NOT NULL,
  `nomorFaktur` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `statusJadwal` varchar(100) NOT NULL,
  `tanggalApprovalJadwal` datetime NOT NULL,
  `PICJadwal` int(11) NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `durasi` int(11) NOT NULL,
  `statusSPK` varchar(25) NOT NULL DEFAULT 'On Progress'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spkservice`
--

INSERT INTO `spkservice` (`idSPK`, `nomorFaktur`, `nomorPO`, `idCustomer`, `statusJadwal`, `tanggalApprovalJadwal`, `PICJadwal`, `lastModified`, `durasi`, `statusSPK`) VALUES
(1, 1, 1, 43, 'Belum Ada', '0000-00-00 00:00:00', 19, '2018-04-18 06:10:31', 0, 'On Progress');

-- --------------------------------------------------------

--
-- Table structure for table `stokbarang`
--

CREATE TABLE `stokbarang` (
  `idStok` int(11) NOT NULL,
  `idPIC` int(11) NOT NULL,
  `nomorPO` int(11) NOT NULL,
  `tipeBarang` varchar(255) NOT NULL,
  `kodeBarang` varchar(255) NOT NULL,
  `jumlah` double NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `jenisPergerakanBarang` varchar(255) NOT NULL,
  `tipePergerakan` varchar(200) NOT NULL,
  `statusTransfer` varchar(123) NOT NULL DEFAULT 'Valid',
  `hargaBeli` double NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stokbarang`
--

INSERT INTO `stokbarang` (`idStok`, `idPIC`, `nomorPO`, `tipeBarang`, `kodeBarang`, `jumlah`, `satuan`, `jenisPergerakanBarang`, `tipePergerakan`, `statusTransfer`, `hargaBeli`, `tanggal`, `keterangan`) VALUES
(1, 19, 0, 'Material Dasar', '52', 103.18, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-05-22 15:18:17', ''),
(2, 19, 0, 'Material Dasar', '53', 148.55, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-05-24 13:53:09', ''),
(3, 5, 201, 'Material Dasar', '9', 17.62, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-05-26 15:21:52', ''),
(4, 19, 0, 'Material Dasar', '1014', 1073.58, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-05-24 13:53:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `subspk`
--

CREATE TABLE `subspk` (
  `idSubSPK` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipeakun`
--

CREATE TABLE `tipeakun` (
  `idTipeAkun` int(11) NOT NULL,
  `kodeTipeAkun` varchar(5) NOT NULL,
  `namaTipeAkun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipeakun`
--

INSERT INTO `tipeakun` (`idTipeAkun`, `kodeTipeAkun`, `namaTipeAkun`) VALUES
(1, '1000', 'KAS'),
(2, '1100', 'BANK'),
(3, '1200', 'PIUTANG'),
(4, '1300', 'PERSEDIAAN'),
(5, '2000', 'AKTIVA'),
(6, '2100', 'PENY AK TETAP'),
(7, '3000', 'HUTANG'),
(8, '3100', 'HUTANG BANK KMK'),
(9, '4000', 'PENDAPATAN'),
(10, '5000', 'BIAYA-BIAYA'),
(11, '3200', 'HUTANG LAINNYA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `jabatan` varchar(132) NOT NULL,
  `level` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` text,
  `fotoUser` text NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `nama`, `jabatan`, `level`, `phone`, `email`, `alamat`, `fotoUser`, `dateCreated`) VALUES
(0, '', '123', 'Belum ada PIC', '', 0, NULL, NULL, NULL, '', '0000-00-00 00:00:00'),
(1, 'Mutia', '123', 'Mutia Naimi', 'Admin Produksi', 0, '', '', NULL, '', '2018-05-23 14:46:26'),
(2, 'Ertin Barutu', '123', 'Ertin Barutu', 'Admin Tempahan', 0, '082368390603', 'erthyn@gmail.com', ' Sihabong-habong Kel/Desa Sihotang Hasugian Dolok II ', 'Ertin_Fransischa_Barutu.png', '0000-00-00 00:00:00'),
(3, 'Rijal Tanjung', '123', 'Rijal Tanjung', 'Cleaning Service', 0, '', '', ' -   ', 'Rizal_Novianto.png', '0000-00-00 00:00:00'),
(4, 'Wak Jen', '123', 'Wak Jen', 'Cleaning Service', 0, '', '', ' -   ', 'Suiyendra.png', '0000-00-00 00:00:00'),
(5, 'Melita Sari Lubis', '1234', 'Melita Sari Lubis', 'General Affair', 0, '085262244633', 'melita.sari55@yahoo.com', ' Jl. Pendidikan Gg. Kasih Dusun II Kel/Desa Bandar setia Kec. Percut Sei Tuan ', 'Melita_Sari_Lubis.png', '0000-00-00 00:00:00'),
(6, 'Muhammad Andre', '123', 'Muhammad Andre', 'Leader Desain', 0, '', '', ' Dusun II Desa Pematang Kasih Kec. Pantai Cermin Kab. Serdang Bedagai ', 'Muhammad_Andre.png', '0000-00-00 00:00:00'),
(7, 'Susi wana Pasaribu', '123', 'Susi wana Pasaribu', 'Leader Finishing', 0, NULL, NULL, 'Sisolu-soli Kel/Desa Pegangan Julu V Kec. Sumbul ', '', '0000-00-00 00:00:00'),
(8, 'Hendra', '123', 'Hendra', 'Leader Produksi', 0, '', '', ' Jl. Selam I Gg. Saudara No. 30 Kel/desa Tegal S. Mandala I Kec. Medan Denai ', 'Hendra.png', '0000-00-00 00:00:00'),
(9, 'Wenny', '123', 'Wenny Aleesa Ramadani', 'Leader Produksi', 0, '082304733454', 'ramadaniwenny@gmail.com', ' Huta II Afd I Laras Kel/Desa Laras Kec. Bandar Huluan ', 'Wenny_Alesha_Ramadani.png', '0000-00-00 00:00:00'),
(10, 'Riki Andika', '123', 'Riki Andika', 'Leader Tempahan', 0, NULL, NULL, 'Dusun IX Pasar Kacang Kel/Desa Sei Muka Kec. Talawi ', '', '0000-00-00 00:00:00'),
(11, 'Vivi', '123', 'Vivi Eliza Elthia', 'Manager Sales & Marketing', 0, '', '', ' -   ', 'Vivi_Eliza_Elthia.png', '0000-00-00 00:00:00'),
(12, 'Swandie', '123', 'Maxim Swandie', 'Owner', 0, '', '', ' Jl. Kota Baru ', 'Maxim_Swandie_Colin_Jien.png', '0000-00-00 00:00:00'),
(13, 'Franziska SF', '123', 'Franziska SF', 'PPIC Tempahan', 0, '', '', ' Jl. Danau Melintang No. 81 MedanKel/Desa Sei Agul Kec. Medan Barat  ', 'Franziska_Sarveshi_Fenty.png', '0000-00-00 00:00:00'),
(15, 'Armiah', '123', 'Armiah', 'Staff Desain Tempahan', 0, '', '', ' Dusun II Kel/Desa Pematang guntung Kec. Teluk Mengkudu ', 'Armiah.png', '0000-00-00 00:00:00'),
(16, 'Irvan', '123', 'Irvan', 'Staff Desain Tempahan', 0, '', '', ' Dusun Getek I Kel/Desa Pantai Cermin Kec. Tanjung Pura ', 'Irvan.png', '0000-00-00 00:00:00'),
(17, 'Muhammad Yusuf N', '123', 'Muhammad Yusuf N', 'Staff Desain Tempahan', 0, '', '', ' Pematang Guntung Kel/Desa Pematang guntung Kec. Teluk Mengkudu ', 'Muhammad_Yusuf_Nasution.png', '0000-00-00 00:00:00'),
(18, 'Roberto Efendi Sinaga', '123', 'Roberto Efendi Sinaga', 'Staff Desain Tempahan', 0, '', '', ' Komplek Rumah Sakit Balimbingan Kel/Desa Balimbingan Kec. Tanah Jawa ', 'Roberto_Efendi_Sinaga.png', '0000-00-00 00:00:00'),
(19, 'Aaleyah', '123', 'Aaleyah A. Susanti', 'Staff Keuangan', 0, '', '', ' Jl. Budi Luhur LK. I No. 40 B Kel/Desa Dwikora Kec. Medan Helvetia ', 'Aaleyah_Avantika_Susanti.png', '0000-00-00 00:00:00'),
(20, 'Darma', '123', 'Darma', 'Staff Krum', 0, '', '', ' -   ', 'Darma.png', '0000-00-00 00:00:00'),
(21, 'Irfan Juhari', '123', 'Irfan Juhari', 'Staff Krum', 0, '', '', ' Serba Jadi Kel/Desa Dolok Kataran Kec. Dolok Batu Nanggar ', 'Irfan_Juhari.png', '0000-00-00 00:00:00'),
(22, 'Mas Andi Susanto', '123', 'Mas Andi Susanto', 'Staff Krum', 0, '', '', ' Jl. P. Kemerdekaan LK IV Kel/Desa Cengkeh Turi Kec. Binjai Utara ', 'Mas_Andi_Susanto.png', '0000-00-00 00:00:00'),
(23, 'Sarida Hanum Ritonga', '123', 'Sarida Hanum Ritonga', 'Staff Krum', 0, '', '', ' Jl. Bersama No. 112 Medan Kel/Desa Bantan Kec. Medan Tembung ', 'Sarida_Hanum_Ritonga.png', '0000-00-00 00:00:00'),
(24, 'Sandi Putra Lelono', '123', 'Sandi Putra Lelono', 'Staff Microsetting', 0, '085899998180', 'sandiputra221096@gmail.com', ' Jl. Kalianyar Kel/Desa Kalianyar Kec. Tambora ', 'Sandi_Putra_Lelono.png', '0000-00-00 00:00:00'),
(25, 'Ali Imron', '123', 'Ali Imron', 'Staff Produksi', 0, '', '', ' Jl. Pembangunan Desa Kolam Kel/Desa Kolam Kec. Percut Sei Tuan ', 'Ali_Imron.png', '0000-00-00 00:00:00'),
(26, 'Andrie Fadhil Siregar', '123', 'Andrie Fadhil Siregar', 'Staff Produksi', 0, '', '', ' Dusun III BTN Jl. Prasetya III No.119 Kel/Desa Sei Semayang Kec. Sunggal ', 'Andrie_Fadhil_Siregar.png', '0000-00-00 00:00:00'),
(27, 'Dorlintaria', '123', 'Dorlintaria', 'Staff Produksi', 0, '', '', ' Lumban Siantar Kel/Desa Pollung Kec. Pollung ', 'Dorlintaria_Lumban_Gaol.png', '0000-00-00 00:00:00'),
(28, 'Hotman Siregar', '123', 'Hotman Siregar', 'Staff Produksi', 0, NULL, NULL, 'Jl. Durung No. 182 Medan Kel/Desa Sidorejo Kec. Medan Tembung ', '', '0000-00-00 00:00:00'),
(29, 'Morisa Barimbing', '123', 'Morisa Barimbing', 'Staff Produksi', 0, '', '', ' Sihorbo Kel/Desa Sihorbo Kec. Siempat Nempu ', 'Morisa_Barimbing.png', '0000-00-00 00:00:00'),
(30, 'Muhammad Solihin', '123', 'Muhammad Solihin', 'Staff Produksi', 0, NULL, NULL, 'Jl. Selamat No. 17 Kel/Desa Kedai Durian Kec. Deli Tua ', '', '0000-00-00 00:00:00'),
(31, 'Sariadi', '123', 'Sariadi', 'Staff Produksi', 0, '', '', ' Jl. Balai Umum Dusun II Kel/Desa Tembung Kec. Percut Sei Tuan ', 'Sariadi.png', '0000-00-00 00:00:00'),
(32, 'Siska Pratiwi', '123', 'Siska Pratiwi', 'Staff Produksi', 0, '', '', ' Dusun I Pematang Kasih Kel/Desa Pematang Kasih Kec. Pantai Cermin ', 'Siska_Pratiwi.png', '0000-00-00 00:00:00'),
(33, 'Tessya', '123', 'Tessya', 'Staff Produksi', 0, '', '', ' -   ', 'Tessya_Elfiani.png', '0000-00-00 00:00:00'),
(34, 'Trie Hatta Mulya', '123', 'Trie Hatta Mulya', 'Staff Produksi', 0, '', '', ' Dusun VII Kel/Desa Marindal II Kec. Patumbak ', 'Trie_Hatta_Mulya.png', '0000-00-00 00:00:00'),
(35, 'Wulan Febriani', '123', 'Wulan Febriani', 'Staff Produksi', 0, NULL, NULL, 'Huta I Kel/Desa Sidotani Kec. Bandar ', '', '0000-00-00 00:00:00'),
(36, 'Rafael Sinaga', '123', 'Rafael Sinaga', 'Staff Sales & Marketing', 0, '', '', ' Ganda Samurung Kel/Desa Pegagan Julu III Kec. Sumbul ', 'Rafael_Sinaga.png', '0000-00-00 00:00:00'),
(37, 'Sriwahyuni', '123', 'Sriwahyuni', 'Staff Sales & Marketing', 0, '', '', ' Dusun IV Kel/Desa Sipaku Area Kec. Simpang Empat ', 'Sriwahyuni.png', '0000-00-00 00:00:00'),
(38, 'Hanafi Sanjaya', '123', 'Hanafi Sanjaya', 'Staff Tempahan', 0, '', '', ' Huta Serba Jadi Kel/Desa Dolok Kataran Kec. Dolok Batu Nanggar ', 'Hanafi_Sanjaya.png', '0000-00-00 00:00:00'),
(39, 'Hendra Gunawan', '123', 'Hendra Gunawan', 'Staff Tempahan', 0, '', '', ' Dusun VII Jl. Kebun Sayur Rambungan I Kel/Desa Bandar Klippa Kec. Percut Sei Tuan ', 'Hendra_Gunawan.png', '0000-00-00 00:00:00'),
(40, 'Hendra Saputra', '123', 'Hendra Saputra', 'Staff Tempahan', 0, '', '', ' Jl. Bhayangkara No. 367 LK VI Kel. Indrakasih Kec. Medan Tembung ', 'Hendra_Saputra.png', '0000-00-00 00:00:00'),
(41, 'Joni', '123', 'Joni', 'Staff Tempahan', 0, '', '', ' Dusun Getek I Kel/Desa Pantai Cermin Kec. Tanjung Pura ', 'Joni.png', '0000-00-00 00:00:00'),
(42, 'Liusandra', '123', 'Liusandra', 'Staff Tempahan', 0, '', '', ' -   ', 'Liu_Sandra.png', '0000-00-00 00:00:00'),
(43, 'Rahmawaty', '123', 'Rahmawaty', 'Staff Tempahan', 0, '', '', ' Dusun IV Kel/Desa Paya Lombang Kec. Tebing Tinggi ', 'Rahmawati.png', '0000-00-00 00:00:00'),
(44, 'Soleh Pratama', '123', 'Soleh Pratama', 'Staff Tempahan', 0, '082238370886', 'solehpratama62@yahoo.com', ' Huta VI Bandar Tongah Kel/Desa Bandar Tongah Kec. Bandar Huluan ', 'Soleh_Pratamal.png', '0000-00-00 00:00:00'),
(45, 'Isnaini Raizal Rais', '123', 'Isnaini Raizal Rais', 'Umum', 0, '', '', ' Sei Tualang Kel/Desa Bandar Selamat Kec. Aek Kuo ', 'Isnaini_Raizal_Rais.png', '0000-00-00 00:00:00'),
(46, 'Nurhikmah', '123', 'Nurhikmah', 'Staff Sales & Marketing', 0, '085270768259', 'nh.marahoesin@gmail.com', 'Jl. Kelambir V gg. semangka No. 20', 'Nurhikmah.png', '0000-00-00 00:00:00'),
(47, 'Dewi Astuti', '123', 'Dewi Astuti', 'Staff Produksi', 0, '', '', NULL, 'Dewi_Astuti.png', '2018-05-22 16:20:26'),
(48, 'Sugeng', '123', 'Sugeng Prayetno', 'Staff Produksi', 0, '', '', NULL, 'Sugeng_Prayetno.png', '2018-05-22 16:21:33'),
(49, 'junaidi', '123', 'Junaidi', 'Leader Produksi', 0, '', '', NULL, 'Junaidi.png', '2018-05-22 16:22:33'),
(50, 'muhammad chandra', '123', 'Muhammad Chandra', 'Staff Produksi', 0, '', '', NULL, 'Muhammad_Chandra.png', '2018-05-22 16:23:12'),
(51, 'roy ', '123', 'Roy widianto purba', 'Leader Produksi', 0, '', '', NULL, 'Roy_Widianto_Purba.png', '2018-05-22 16:24:04'),
(52, 'Riki Andika', '123', 'Riki Andika', 'Leader Produksi', 0, '', '', NULL, 'Riki_Andika.png', '2018-05-22 16:25:39'),
(53, 'Shaylee Susi WP', '123', 'Shaylee Susi WP', 'Leader Produksi', 0, '', '', NULL, 'Shaylee_Susy_Wana_Pasaribu.png', '2018-05-22 16:28:41'),
(54, 'Rina Rahmadani', '123', 'Rina Rahmadani', 'Leader Produksi', 0, '', '', NULL, 'Rina_Rahmadani.png', '2018-05-22 16:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `wadah`
--

CREATE TABLE `wadah` (
  `idWadah` int(11) NOT NULL,
  `idSubSPK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`idAkses`);

--
-- Indexes for table `aktivitas2`
--
ALTER TABLE `aktivitas2`
  ADD PRIMARY KEY (`idAktivitas`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `billofmaterial`
--
ALTER TABLE `billofmaterial`
  ADD PRIMARY KEY (`idBOM`);

--
-- Indexes for table `bommassal`
--
ALTER TABLE `bommassal`
  ADD PRIMARY KEY (`idBOM`);

--
-- Indexes for table `bomperak`
--
ALTER TABLE `bomperak`
  ADD PRIMARY KEY (`idBOM`);

--
-- Indexes for table `bomtempahan`
--
ALTER TABLE `bomtempahan`
  ADD PRIMARY KEY (`idBOM`);

--
-- Indexes for table `cashflow`
--
ALTER TABLE `cashflow`
  ADD PRIMARY KEY (`idCashflow`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`idCurrency`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`);

--
-- Indexes for table `detailjurnal`
--
ALTER TABLE `detailjurnal`
  ADD PRIMARY KEY (`idDetailJurnal`);

--
-- Indexes for table `detailpurchaseorderservice`
--
ALTER TABLE `detailpurchaseorderservice`
  ADD PRIMARY KEY (`idDetailPO`);

--
-- Indexes for table `detailpurchaseordertrading`
--
ALTER TABLE `detailpurchaseordertrading`
  ADD PRIMARY KEY (`idDetailPO`);

--
-- Indexes for table `dimensi`
--
ALTER TABLE `dimensi`
  ADD PRIMARY KEY (`dimensi`);

--
-- Indexes for table `factproduction`
--
ALTER TABLE `factproduction`
  ADD PRIMARY KEY (`idProProd`);

--
-- Indexes for table `factproduction2`
--
ALTER TABLE `factproduction2`
  ADD PRIMARY KEY (`idProProd`);

--
-- Indexes for table `factproduction3`
--
ALTER TABLE `factproduction3`
  ADD PRIMARY KEY (`idProProd`);

--
-- Indexes for table `factproductionservice`
--
ALTER TABLE `factproductionservice`
  ADD PRIMARY KEY (`idProProd`);

--
-- Indexes for table `invoiceheader`
--
ALTER TABLE `invoiceheader`
  ADD PRIMARY KEY (`idHeader`);

--
-- Indexes for table `invoicemassal`
--
ALTER TABLE `invoicemassal`
  ADD PRIMARY KEY (`idInvoiceMassal`);

--
-- Indexes for table `invoicemassalperseorangan`
--
ALTER TABLE `invoicemassalperseorangan`
  ADD PRIMARY KEY (`idTempahan`);

--
-- Indexes for table `invoicemassalpertokoan`
--
ALTER TABLE `invoicemassalpertokoan`
  ADD PRIMARY KEY (`idTempahan`);

--
-- Indexes for table `invoicetempahanperseorangan`
--
ALTER TABLE `invoicetempahanperseorangan`
  ADD PRIMARY KEY (`idTempahan`);

--
-- Indexes for table `invoicetempahanpertokoan`
--
ALTER TABLE `invoicetempahanpertokoan`
  ADD PRIMARY KEY (`idTempahan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idJabatan`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`idJurnal`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`idKatalog`);

--
-- Indexes for table `kloter`
--
ALTER TABLE `kloter`
  ADD PRIMARY KEY (`idGroup`);

--
-- Indexes for table `kloter2`
--
ALTER TABLE `kloter2`
  ADD PRIMARY KEY (`idGroup`);

--
-- Indexes for table `materialdasar`
--
ALTER TABLE `materialdasar`
  ADD PRIMARY KEY (`idMaterial`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `poberlian`
--
ALTER TABLE `poberlian`
  ADD PRIMARY KEY (`idPOBerlian`);

--
-- Indexes for table `pomasal`
--
ALTER TABLE `pomasal`
  ADD PRIMARY KEY (`idPO`);

--
-- Indexes for table `poperak`
--
ALTER TABLE `poperak`
  ADD PRIMARY KEY (`idPO`);

--
-- Indexes for table `potempahan`
--
ALTER TABLE `potempahan`
  ADD PRIMARY KEY (`idPO`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  ADD PRIMARY KEY (`idProses`);

--
-- Indexes for table `produkpo`
--
ALTER TABLE `produkpo`
  ADD PRIMARY KEY (`idProdukPO`);

--
-- Indexes for table `produktrading`
--
ALTER TABLE `produktrading`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `purchaseorderservice`
--
ALTER TABLE `purchaseorderservice`
  ADD PRIMARY KEY (`idPO`);

--
-- Indexes for table `purchaseordertrading`
--
ALTER TABLE `purchaseordertrading`
  ADD PRIMARY KEY (`idPO`);

--
-- Indexes for table `rekapproduksi`
--
ALTER TABLE `rekapproduksi`
  ADD PRIMARY KEY (`idRekapProduksi`);

--
-- Indexes for table `rekapproduksiline`
--
ALTER TABLE `rekapproduksiline`
  ADD PRIMARY KEY (`idRekapProduksiLine`);

--
-- Indexes for table `rencanaproduksi`
--
ALTER TABLE `rencanaproduksi`
  ADD PRIMARY KEY (`idRencana`);

--
-- Indexes for table `rencanaproduksi2`
--
ALTER TABLE `rencanaproduksi2`
  ADD PRIMARY KEY (`idRencana`);

--
-- Indexes for table `rencanaproduksi3`
--
ALTER TABLE `rencanaproduksi3`
  ADD PRIMARY KEY (`idRencana`);

--
-- Indexes for table `rencanaproduksiservice`
--
ALTER TABLE `rencanaproduksiservice`
  ADD PRIMARY KEY (`idRencana`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spk`
--
ALTER TABLE `spk`
  ADD PRIMARY KEY (`idSPK`);

--
-- Indexes for table `spkmasal`
--
ALTER TABLE `spkmasal`
  ADD PRIMARY KEY (`idSPK`);

--
-- Indexes for table `spkperak`
--
ALTER TABLE `spkperak`
  ADD PRIMARY KEY (`idSPK`);

--
-- Indexes for table `spkservice`
--
ALTER TABLE `spkservice`
  ADD PRIMARY KEY (`idSPK`);

--
-- Indexes for table `stokbarang`
--
ALTER TABLE `stokbarang`
  ADD PRIMARY KEY (`idStok`);

--
-- Indexes for table `subspk`
--
ALTER TABLE `subspk`
  ADD PRIMARY KEY (`idSubSPK`);

--
-- Indexes for table `tipeakun`
--
ALTER TABLE `tipeakun`
  ADD PRIMARY KEY (`idTipeAkun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `wadah`
--
ALTER TABLE `wadah`
  ADD PRIMARY KEY (`idWadah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `idAkses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `billofmaterial`
--
ALTER TABLE `billofmaterial`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bommassal`
--
ALTER TABLE `bommassal`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bomperak`
--
ALTER TABLE `bomperak`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bomtempahan`
--
ALTER TABLE `bomtempahan`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashflow`
--
ALTER TABLE `cashflow`
  MODIFY `idCashflow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `idCurrency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `detailjurnal`
--
ALTER TABLE `detailjurnal`
  MODIFY `idDetailJurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `detailpurchaseorderservice`
--
ALTER TABLE `detailpurchaseorderservice`
  MODIFY `idDetailPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detailpurchaseordertrading`
--
ALTER TABLE `detailpurchaseordertrading`
  MODIFY `idDetailPO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factproduction`
--
ALTER TABLE `factproduction`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factproduction2`
--
ALTER TABLE `factproduction2`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factproduction3`
--
ALTER TABLE `factproduction3`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factproductionservice`
--
ALTER TABLE `factproductionservice`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoiceheader`
--
ALTER TABLE `invoiceheader`
  MODIFY `idHeader` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoicemassal`
--
ALTER TABLE `invoicemassal`
  MODIFY `idInvoiceMassal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoicemassalperseorangan`
--
ALTER TABLE `invoicemassalperseorangan`
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoicemassalpertokoan`
--
ALTER TABLE `invoicemassalpertokoan`
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoicetempahanperseorangan`
--
ALTER TABLE `invoicetempahanperseorangan`
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoicetempahanpertokoan`
--
ALTER TABLE `invoicetempahanpertokoan`
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idJabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `idJurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `idKatalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kloter`
--
ALTER TABLE `kloter`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kloter2`
--
ALTER TABLE `kloter2`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialdasar`
--
ALTER TABLE `materialdasar`
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `poberlian`
--
ALTER TABLE `poberlian`
  MODIFY `idPOBerlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `pomasal`
--
ALTER TABLE `pomasal`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `poperak`
--
ALTER TABLE `poperak`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potempahan`
--
ALTER TABLE `potempahan`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1054;

--
-- AUTO_INCREMENT for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  MODIFY `idProses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2698;

--
-- AUTO_INCREMENT for table `produkpo`
--
ALTER TABLE `produkpo`
  MODIFY `idProdukPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT for table `produktrading`
--
ALTER TABLE `produktrading`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchaseorderservice`
--
ALTER TABLE `purchaseorderservice`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchaseordertrading`
--
ALTER TABLE `purchaseordertrading`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rekapproduksi`
--
ALTER TABLE `rekapproduksi`
  MODIFY `idRekapProduksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekapproduksiline`
--
ALTER TABLE `rekapproduksiline`
  MODIFY `idRekapProduksiLine` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rencanaproduksi`
--
ALTER TABLE `rencanaproduksi`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=603;

--
-- AUTO_INCREMENT for table `rencanaproduksi2`
--
ALTER TABLE `rencanaproduksi2`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rencanaproduksi3`
--
ALTER TABLE `rencanaproduksi3`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rencanaproduksiservice`
--
ALTER TABLE `rencanaproduksiservice`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `spkmasal`
--
ALTER TABLE `spkmasal`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `spkperak`
--
ALTER TABLE `spkperak`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spkservice`
--
ALTER TABLE `spkservice`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stokbarang`
--
ALTER TABLE `stokbarang`
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subspk`
--
ALTER TABLE `subspk`
  MODIFY `idSubSPK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipeakun`
--
ALTER TABLE `tipeakun`
  MODIFY `idTipeAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `wadah`
--
ALTER TABLE `wadah`
  MODIFY `idWadah` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
