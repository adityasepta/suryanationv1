-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2018 at 03:48 PM
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
(75, '5000', '5035', ' BIAYA PAJAK ');

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

--
-- Dumping data for table `bommassal`
--

INSERT INTO `bommassal` (`idBOM`, `idSubSPK`, `idMaterial`, `jumlah`, `status`) VALUES
(2, '7', 39, 233.01, 'Disetujui'),
(3, '8', 39, 261.38, 'Disetujui'),
(4, '10', 39, 212.36, 'Belum Disetujui'),
(5, '9', 39, 261.38, 'Disetujui'),
(6, '11', 38, 145.33, 'Belum Disetujui');

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

--
-- Dumping data for table `bomtempahan`
--

INSERT INTO `bomtempahan` (`idBOM`, `idKloter`, `idMaterial`, `jumlah`, `status`) VALUES
(6, 'FaVcaEKcG8', 35, 16.8, 'Disetujui'),
(7, 'qMHDxC40sz', 36, 24.88, 'Disetujui'),
(8, 'APo6QqsSrj', 57, 19.9, 'Disetujui'),
(9, 'ZGZkTjG73M', 59, 44.26, 'Disetujui'),
(10, '5YBrK7VsSj', 42, 25.92, 'Disetujui');

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

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `idCurrency` int(11) NOT NULL,
  `hargaEmas` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`idCurrency`, `hargaEmas`, `tanggal`) VALUES
(1, 590280, '2018-04-06 11:18:22'),
(3, 590300, '2018-04-07 19:46:44'),
(4, 590280, '2018-04-08 18:13:24'),
(6, 590550, '2018-04-09 13:57:38'),
(7, 593500, '2018-04-11 17:38:44'),
(8, 575000, '2018-04-16 14:43:04'),
(9, 577000, '2018-04-17 11:27:51'),
(10, 575000, '2018-04-18 12:46:39'),
(11, 578000, '2018-04-19 10:34:56'),
(12, 576000, '2018-04-21 12:09:25'),
(13, 576000, '2018-04-25 10:20:11'),
(14, 575000, '2018-04-26 11:09:12'),
(15, 572500, '2018-04-27 11:52:44'),
(16, 573000, '2018-04-28 11:02:07'),
(17, 574000, '2018-05-08 21:47:20');

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
(21, 'Ko Asu', '8123123213', '0000-00-00 00:00:00'),
(22, 'Ko Alim', '8123123213', '0000-00-00 00:00:00'),
(23, 'Ko Taro', '8123123213', '0000-00-00 00:00:00'),
(24, 'Ko Rendy', '8123123213', '0000-00-00 00:00:00'),
(25, 'Ko Salim', '8123123213', '0000-00-00 00:00:00'),
(26, 'Ci Rita', '8123123213', '0000-00-00 00:00:00'),
(27, 'Bambang', '8123123213', '0000-00-00 00:00:00'),
(28, 'Bimbi', '812316732', '0000-00-00 00:00:00'),
(29, 'Vera', '8123128473', '0000-00-00 00:00:00'),
(30, 'Ko Jery', '8123180188', '0000-00-00 00:00:00'),
(31, 'ko asan dompet', '', '2018-04-09 07:06:49'),
(33, 'Tkm. Pelangi Mas', '082277763666', '2018-04-16 07:48:16'),
(34, 'TKM Daniel', '081260089898', '2018-04-16 07:54:39'),
(35, 'Oheng', '08126045232', '2018-04-16 08:48:30'),
(36, 'Bg Aris', '08126447706', '2018-04-16 10:47:26'),
(37, 'Ko Eddy Ayong', '08126538911', '2018-04-17 04:41:50'),
(38, 'Ko Atak', '', '2018-04-17 07:26:42'),
(39, 'Maroli', '085360926060', '2018-04-17 07:35:33'),
(40, 'Pak. Yasir ', '081388418141', '2018-04-17 07:48:40'),
(41, 'Ko Adi ', '081321718288', '2018-04-17 08:06:35'),
(42, 'tkm.indah', '0614524605', '2018-04-18 04:19:53'),
(43, 'Bg Dahru', '081991910007', '2018-04-18 06:10:31'),
(44, 'Bg Andi KR', '085360111183', '2018-04-18 06:55:34'),
(45, 'Ko Ahua', '081260603234', '2018-04-18 08:09:45'),
(46, 'Ko Awi Garuda', '', '2018-04-18 10:59:41'),
(47, 'Ko Asiong', '', '2018-04-19 02:10:53'),
(48, 'Ko Aguan', '082366668886', '2018-04-19 03:40:36'),
(49, 'Tkm. Awi Sogo', '08126503881', '2018-04-19 07:15:35'),
(50, 'tkm.mentari', '0811607521', '2018-04-19 10:40:12'),
(51, 'Tkm. Maju Jaya', '082272262777', '2018-04-21 06:20:11'),
(52, 'Ko Stiven', '081263331303', '2018-04-21 06:35:31'),
(53, 'Ko Stiven', '081263331303', '2018-04-21 06:36:18'),
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
(64, 'Tkm. Pelangi Mas', '0617360466', '2018-04-30 04:23:37'),
(65, 'Bg Arifin ', '081365586788', '2018-04-30 09:23:56'),
(66, 'Kak Mutia', '085373877020', '2018-05-02 02:50:36'),
(67, 'Marwan Lobian', '0', '2018-05-02 09:31:31'),
(68, 'Tkm. London', '0', '2018-05-02 09:34:53'),
(69, 'Tkm. Rapi', '0', '2018-05-02 09:49:12'),
(70, 'Tkm. Agung', '061-4151175', '2018-05-04 04:09:06'),
(71, 'Tkm. Agung', '061-4151175', '2018-05-04 04:32:27'),
(72, 'Tkm. Golden', '061-4569323', '2018-05-08 05:11:07'),
(73, 'Tkm. Matahari Petisah', '0', '2018-05-08 05:15:14'),
(74, 'Silvia', '082272446654', '2018-05-09 05:03:58'),
(75, 'Silvia', '082272446654', '2018-05-09 05:03:58'),
(76, 'Kak Dewi', '000', '2018-05-09 05:44:50'),
(77, 'TKM Suranta', '000', '2018-05-09 05:59:46'),
(78, 'TKM Kasandra', '000', '2018-05-09 06:19:40'),
(79, 'Tkm. Abadi', '061-4529651', '2018-05-09 06:56:11'),
(80, 'Ko Asan Ansori', '0', '2018-05-09 07:02:19'),
(81, 'Ko Kaslim', '085276043322', '2018-05-09 07:03:15');

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

--
-- Dumping data for table `factproduction`
--

INSERT INTO `factproduction` (`idProProd`, `idSPK`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `beratAwal`, `beratTambahan`, `berat`, `kembali`, `statusBerat`, `statusWork`, `statusSPK`, `statusPengambilan`) VALUES
(42, 17, 1003, 16, '2018-04-20 00:00:00', '2018-04-20 00:00:00', 36.9, 0, 37.09, 0, '', 'Done', 'Done', 'Belum'),
(46, 27, 1003, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(47, 17, 1005, 31, '2018-04-28 00:00:00', '2018-04-28 00:00:00', 36.9, 0, 37.09, 0, '', 'Done', 'Done', 'Belum'),
(48, 17, 1006, 31, '2018-04-28 00:00:00', '2018-04-28 00:00:00', 36.9, 0, 37.09, 15.55, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(49, 17, 1007, 38, '2018-05-03 14:30:36', '2018-05-03 14:31:26', 15.09, 0, 13.42, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(50, 26, 1003, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(51, 15, 1003, 16, '2018-05-07 19:46:05', '2018-05-07 19:46:15', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(52, 32, 1003, 16, '2018-05-07 19:46:34', '2018-05-07 19:46:50', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(53, 61, 1003, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(54, 62, 1003, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(55, 43, 1003, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(56, 55, 1003, 16, '2018-05-07 19:48:27', '2018-05-07 19:50:47', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(57, 56, 1003, 16, '2018-05-02 14:47:32', '2018-05-02 14:48:05', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(58, 59, 1003, 16, '2018-05-02 14:49:23', '2018-05-02 14:49:30', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(59, 44, 1003, 16, '2018-05-07 19:47:45', '2018-05-07 19:49:56', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(60, 75, 1003, 16, '2018-05-02 16:04:30', '2018-05-02 16:04:40', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(61, 63, 1003, 16, '2018-05-02 16:22:27', '2018-05-02 16:22:39', 0, 0, 0, 0, '', 'Done', 'Done', 'Belum'),
(62, 68, 1003, 16, '2018-05-02 16:22:09', '2018-05-02 16:22:33', 0, 0, 0, 0, '', 'Done', 'Done', 'Belum'),
(63, 56, 1005, 16, '2018-05-04 10:35:57', '2018-05-04 10:45:44', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(64, 59, 1005, 16, '2018-05-04 10:35:57', '2018-05-04 10:45:44', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(65, 75, 1005, 16, '2018-05-04 10:49:49', '2018-05-04 11:22:25', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(66, 63, 1005, 16, '2018-05-04 10:48:55', '2018-05-04 11:33:01', 0, 0, 0, 0, '', 'Done', 'Done', 'Belum'),
(67, 68, 1005, 16, '2018-05-04 10:48:55', '2018-05-04 11:33:01', 0, 0, 0, 0, '', 'Done', 'Done', 'Belum'),
(68, 84, 1003, 16, '2018-05-02 17:27:00', '2018-05-02 17:27:06', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(69, 84, 1005, 16, '2018-05-04 11:38:35', '2018-05-04 11:42:58', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(70, 17, 1008, 41, '2018-05-03 14:31:45', '2018-05-03 14:32:34', 13.42, 0, 13.14, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(71, 17, 1012, 41, '2018-05-03 14:32:51', '2018-05-03 14:33:29', 13.14, 0, 12.49, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(72, 17, 1013, 10, '2018-05-03 14:33:57', '2018-05-03 14:35:05', 12.49, 0, 12.4, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(73, 17, 1014, 2, '2018-05-03 14:35:44', '2018-05-03 14:35:44', 12.4, 0, 12.4, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(74, 56, 1006, 31, '2018-05-04 10:46:10', '2018-05-04 10:46:52', 24.88, 0, 25.11, 15.96, 'Belum Disetujui', 'Done', 'Active', 'Belum'),
(75, 59, 1006, 31, '2018-05-04 10:46:10', '2018-05-04 10:46:52', 24.88, 0, 25.11, 15.96, 'Belum Disetujui', 'Done', 'Active', 'Belum'),
(76, 56, 1007, 10, '2018-05-08 10:42:18', '2018-05-08 10:43:18', 45.74, 0, 32.92, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(77, 59, 1007, 40, '2018-05-04 11:23:16', '2018-05-04 11:24:31', 7.64, 0, 5.74, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(78, 75, 1006, 31, '2018-05-04 11:23:16', '2018-05-04 11:24:28', 19.9, 0, 19.9, 12.27, 'Belum Disetujui', 'Done', 'Active', 'Belum'),
(79, 75, 1007, 38, '2018-05-04 11:29:47', '2018-05-04 17:29:51', 7.62, 0, 7.06, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(80, 59, 1009, 41, '2018-05-04 11:27:06', '2018-05-08 10:46:46', 5.74, 0, 5.74, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(81, 63, 1006, 31, '2018-05-04 11:33:22', '2018-05-04 11:46:52', 44.26, 0, 43.14, 20.88, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(82, 68, 1006, 31, '2018-05-04 11:33:22', '2018-05-04 11:46:52', 44.26, 0, 43.14, 20.88, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(83, 84, 1006, 16, '2018-05-04 11:47:26', '2018-05-04 11:47:49', 25.92, 0, 27.44, 20.74, 'Belum Disetujui', 'Done', 'Active', 'Belum'),
(84, 63, 1007, 40, '2018-05-08 11:22:53', '2018-05-08 11:24:24', 13, 0, 11.95, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(85, 68, 1007, 40, '2018-05-08 10:58:34', '2018-05-08 10:59:31', 9.5, 0, 8.21, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(86, 84, 1007, 40, '2018-05-04 17:20:26', '2018-05-04 17:21:20', 6.69, 0, 5.69, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(87, 84, 1009, 41, '2018-05-04 17:21:45', '2018-05-04 17:22:49', 5.69, 0, 5.69, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(88, 84, 1010, 41, '2018-05-04 17:23:06', '2018-05-04 17:24:26', 5.69, 0, 5.69, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(89, 84, 1007, 40, '2018-05-04 17:25:01', '2018-05-04 17:25:39', 5.69, 0, 5.69, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(90, 84, 1009, 41, '2018-05-04 17:26:01', '2018-05-04 17:27:39', 5.69, 0, 5.69, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(91, 84, 1007, 40, '2018-05-04 17:28:00', '2018-05-04 17:28:52', 5.69, 0, 5.69, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(92, 84, 1009, 41, '2018-05-08 11:03:22', '2018-05-08 11:05:04', 5.69, 0, 5.69, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(93, 75, 1008, 41, '2018-05-04 17:30:14', '2018-05-04 17:30:52', 7.06, 0, 6.68, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(94, 75, 1009, 41, '2018-05-04 17:31:19', '0000-00-00 00:00:00', 6.68, 0, 6.68, 0, 'Disetujui', 'On Progress', 'Active', 'Belum'),
(95, 100, 1003, 16, '2018-05-07 19:21:24', '2018-05-07 19:21:38', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(96, 73, 1003, 16, '2018-05-07 19:28:58', '2018-05-07 19:29:11', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(97, 58, 1003, 16, '2018-05-07 19:36:54', '2018-05-07 19:47:31', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(98, 38, 1003, 16, '2018-05-07 19:47:08', '2018-05-07 19:50:23', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(99, 39, 1003, 16, '2018-05-07 19:47:20', '2018-05-07 19:49:31', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(100, 93, 1003, 16, '2018-05-07 19:48:05', '2018-05-07 19:49:06', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(101, 56, 1008, 41, '2018-05-08 10:43:55', '2018-05-08 10:45:03', 32.92, 0, 32.49, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(102, 56, 1012, 41, '2018-05-08 10:45:30', '0000-00-00 00:00:00', 32.49, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'Active', 'Belum'),
(103, 59, 1008, 41, '2018-05-08 10:47:00', '2018-05-08 10:48:00', 5.74, 0, 5.73, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(104, 59, 1010, 41, '2018-05-08 10:51:35', '2018-05-08 10:52:23', 5.73, 0, 5.63, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(105, 59, 1009, 41, '2018-05-08 10:52:56', '2018-05-08 10:53:40', 5.63, 0.03, 5.53, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(106, 59, 1012, 43, '2018-05-08 10:54:27', '0000-00-00 00:00:00', 5.53, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'Active', 'Belum'),
(107, 68, 1010, 41, '2018-05-08 11:00:14', '2018-05-08 11:01:20', 8.21, 0.03, 7.58, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(108, 68, 1009, 41, '2018-05-08 11:01:43', '2018-05-08 11:02:54', 7.58, 0.03, 7.51, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(109, 68, 1012, 41, '2018-05-08 11:09:54', '2018-05-09 11:11:36', 7.51, 0, 7.44, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(110, 84, 1008, 41, '2018-05-08 11:05:21', '2018-05-08 11:05:56', 5.69, 0, 5.68, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(111, 84, 1010, 41, '2018-05-08 11:06:27', '2018-05-08 11:07:51', 5.68, 0, 5.58, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(112, 84, 1009, 24, '2018-05-08 11:08:40', '2018-05-08 11:09:14', 5.58, 0.04, 5.45, 0, 'Disetujui', 'Done', 'Active', 'Belum'),
(113, 84, 1012, 41, '2018-05-08 11:09:36', '0000-00-00 00:00:00', 5.45, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'Active', 'Belum'),
(114, 19, 1003, 16, '2018-05-08 11:17:19', '2018-05-08 11:17:24', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(115, 29, 1003, 16, '2018-05-08 11:18:34', '2018-05-08 11:19:03', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(116, 63, 1010, 41, '2018-05-08 11:24:44', '2018-05-08 11:25:26', 11.95, 0, 11.83, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(117, 63, 1009, 24, '2018-05-08 11:25:57', '2018-05-08 11:26:50', 11.83, 0, 11.83, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(118, 63, 1010, 41, '2018-05-08 11:27:22', '2018-05-08 11:27:58', 11.83, 0.12, 11.83, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(119, 63, 1009, 24, '2018-05-08 11:28:20', '2018-05-08 11:29:02', 11.83, 0.12, 11.8, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(120, 63, 1012, 41, '2018-05-08 11:29:34', '2018-05-08 11:30:22', 11.8, 0, 11.65, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(121, 63, 1013, 10, '2018-05-08 11:30:49', '2018-05-08 11:32:08', 11.65, 0, 11.47, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(122, 63, 1014, 2, '2018-05-08 11:32:30', '2018-05-08 11:32:30', 11.47, 0, 11.45, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(123, 86, 1003, 16, '2018-05-08 11:47:10', '2018-05-08 11:47:17', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(124, 87, 1003, 16, '2018-05-08 11:54:41', '2018-05-08 11:54:46', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(125, 85, 1003, 16, '2018-05-08 12:00:01', '2018-05-08 12:00:09', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(126, 35, 1003, 16, '2018-05-08 12:06:31', '2018-05-08 12:06:35', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(127, 28, 1003, 16, '2018-05-08 13:33:13', '2018-05-08 13:33:17', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(128, 60, 1003, 16, '2018-05-08 13:42:11', '2018-05-08 13:42:17', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(129, 70, 1003, 16, '2018-05-08 13:47:35', '2018-05-08 13:47:56', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(130, 71, 1003, 16, '2018-05-08 14:06:29', '2018-05-08 14:06:36', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(131, 36, 1003, 16, '2018-05-08 14:09:19', '2018-05-08 14:09:24', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(132, 74, 1003, 16, '2018-05-08 14:11:41', '2018-05-08 14:11:44', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(133, 68, 1014, 2, '2018-05-09 11:12:09', '2018-05-09 11:12:09', 7.44, 0, 7.44, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(134, 106, 1003, 16, '2018-05-09 12:11:44', '2018-05-09 17:05:15', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(135, 101, 1003, 16, '2018-05-09 16:07:21', '2018-05-09 17:05:08', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(136, 47, 1003, 16, '2018-05-09 16:07:47', '2018-05-09 17:05:25', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(137, 19, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(138, 39, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(139, 38, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(140, 71, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(141, 15, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(142, 58, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(143, 116, 1003, 16, '2018-05-09 14:43:47', '2018-05-09 14:47:17', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(144, 111, 1003, 16, '2018-05-09 16:08:41', '2018-05-09 17:06:19', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(145, 112, 1003, 16, '2018-05-09 16:09:01', '2018-05-09 17:06:25', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(146, 117, 1003, 16, '2018-05-09 16:10:01', '2018-05-09 17:06:13', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(147, 118, 1003, 16, '2018-05-09 16:57:47', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'On Progress', 'Active', 'Belum'),
(148, 119, 1003, 16, '2018-05-09 17:13:05', '2018-05-09 17:19:44', 0, 0, 0, 0, '', 'Done', 'Active', 'Belum'),
(149, 111, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(150, 47, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(151, 101, 1005, 16, '2018-05-10 11:15:26', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'On Progress', 'Active', 'Belum'),
(152, 112, 1005, 16, '2018-05-10 11:15:26', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'On Progress', 'Active', 'Belum'),
(153, 119, 1005, 16, '2018-05-10 11:15:26', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'On Progress', 'Active', 'Belum'),
(154, 106, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(155, 117, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum'),
(156, 90, 1003, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', 'Belum ada PIC', 'Active', 'Belum');

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

--
-- Dumping data for table `factproduction2`
--

INSERT INTO `factproduction2` (`idProProd`, `idProProdAsal`, `idSPK`, `idSubSPK`, `idWadah`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `beratAwal`, `beratTambahan`, `berat`, `beratKecap`, `kembali`, `jumlah`, `jumlahNow`, `statusBerat`, `statusWork`, `statusRework`, `statusSPK`, `statusPengambilan`) VALUES
(1, 0, 2, 1, 0, 1004, 27, '2018-04-16 17:52:57', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(2, 0, 2, 2, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(3, 0, 4, 3, 0, 1004, 27, '2018-04-17 14:18:47', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(4, 0, 4, 4, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(5, 0, 2, 5, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(6, 0, 17, 6, 0, 1004, 27, '2018-04-28 13:35:35', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(7, 0, 20, 7, 0, 1004, 27, '2018-04-28 14:22:43', '2018-04-28 15:16:06', 0, 0, 0, 0, 0, 228, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(8, 0, 20, 8, 0, 1004, 27, '2018-04-28 16:33:12', '2018-04-28 16:35:06', 0, 0, 0, 0, 0, 228, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(9, 0, 20, 9, 0, 1004, 27, '2018-04-28 16:35:25', '2018-04-28 16:43:57', 0, 0, 0, 0, 0, 228, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(10, 0, 20, 10, 0, 1004, 27, '2018-04-28 16:38:35', '2018-04-28 16:41:50', 0, 0, 0, 0, 0, 228, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(11, 0, 20, 7, 0, 1005, 27, '2018-04-28 15:16:26', '2018-04-28 15:16:32', 0, 0, 0, 0, 0, 228, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(12, 0, 20, 7, 0, 1006, 31, '2018-04-28 15:16:59', '2018-04-28 15:18:22', 233.01, 0, 227.97, 226.18, 113.97, 228, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(13, 0, 20, 7, 0, 1007, 31, '2018-04-28 00:00:00', '2018-04-28 15:25:50', 112.09, 0, 110, 0, 0, 228, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(14, 13, 20, 7, 1, 1008, 28, '2018-04-28 15:25:50', '2018-04-28 15:26:34', 110, 0, 105, 0, 0, 228, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(15, 14, 20, 7, 2, 1009, 30, '2018-04-28 15:26:34', '2018-04-28 15:27:22', 105, 0, 100, 0, 0, 228, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(16, 15, 20, 7, 3, 1011, 26, '2018-04-28 15:27:22', '2018-04-28 15:27:59', 100, 0, 90, 0, 0, 228, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(17, 16, 20, 7, 4, 1012, 32, '2018-04-28 15:27:59', '2018-04-28 15:28:48', 90, 0, 89, 0, 0, 228, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(18, 17, 20, 7, 5, 1013, 27, '2018-04-28 15:28:48', '2018-04-28 15:29:45', 89, 0, 89, 0, 0, 228, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(19, 18, 20, 7, 6, 1014, 1, '2018-04-28 15:29:45', '0000-00-00 00:00:00', 89, 0, 0, 0, 0, 228, 78, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(20, 0, 20, 8, 0, 1005, 27, '2018-04-28 16:52:29', '2018-04-28 16:52:36', 0, 0, 0, 0, 0, 228, 78, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(21, 0, 20, 10, 0, 1005, 29, '2018-04-28 16:53:26', '2018-04-28 16:53:32', 0, 0, 0, 0, 0, 228, 78, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(22, 0, 20, 9, 0, 1005, 27, '2018-04-28 16:52:46', '2018-04-28 16:52:53', 0, 0, 0, 0, 0, 228, 78, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(23, 0, 21, 11, 0, 1004, 27, '2018-04-28 16:48:30', '2018-04-28 16:50:44', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(24, 0, 21, 11, 0, 1005, 31, '2018-04-28 16:51:08', '2018-04-28 16:51:20', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(25, 0, 21, 11, 0, 1006, 31, '2018-04-28 16:51:49', '0000-00-00 00:00:00', 145.33, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(26, 0, 20, 8, 0, 1006, 31, '2018-04-28 16:54:29', '2018-04-28 16:55:57', 233.01, 0, 226.18, 112.09, 113.97, 228, 78, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(27, 0, 20, 9, 0, 1006, 27, '2018-04-28 16:57:11', '2018-04-28 16:58:53', 261.38, 0, 256.36, 156.27, 98.41, 228, 78, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(28, 0, 20, 10, 0, 1006, 31, '2018-04-28 16:59:35', '0000-00-00 00:00:00', 236.79, 0, 243.58, 133.33, 108.29, 75, 78, 'Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(29, 0, 20, 8, 0, 1007, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 112.09, 0, 0, 0, 0, 228, 78, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(30, 0, 20, 9, 0, 1007, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 156.27, 0, 0, 0, 0, 228, 72, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(31, 0, 15, 12, 0, 1004, 27, '2018-05-07 19:38:58', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum');

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
  `idCashflow` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `kloter`
--

INSERT INTO `kloter` (`idGroup`, `idKloter`, `idSPK`, `nama`, `kadar`, `beratKotor`, `beratKaret`, `tgl_kloter`) VALUES
(11, 'zNs7qzf9D5', 22, 'Sisik Naga 17 & 18 cm', 70, 0, 0, '2018-04-20 10:16:49'),
(12, 'GFyD15vPyX', 21, 'Sisik Naga 17 & 18 cm', 70, 0, 0, '2018-04-20 10:17:26'),
(13, 'mkeU0TIWAj', 31, 'Sisik Naga 19 cm', 75, 115.07, 100.8, '2018-04-20 16:36:32'),
(14, 'FaVcaEKcG8', 17, 'Swasa 50%', 50, 63.79, 60.58, '2018-04-20 16:37:21'),
(15, 'qMHDxC40sz', 56, 'R. Gold ', 75, 109.75, 100.2, '2018-05-02 16:30:24'),
(16, 'qMHDxC40sz', 59, 'R. Gold ', 75, 109.75, 100.2, '2018-05-02 16:30:24'),
(17, 'APo6QqsSrj', 75, 'R. Gold ', 70, 63.99, 62.46, '2018-05-02 16:31:16'),
(18, 'ZGZkTjG73M', 63, 'Perak', 925, 65.9, 61.75, '2018-05-02 16:32:10'),
(19, 'ZGZkTjG73M', 68, 'Perak', 925, 65.9, 61.75, '2018-05-02 16:32:10'),
(20, '5YBrK7VsSj', 84, 'M. Putih', 75, 64.79, 62.68, '2018-05-03 13:06:01'),
(21, '0yMUcrfhbS', 19, 'M. P', 70, 0, 0, '2018-05-09 11:37:08'),
(22, 'MsHlbVhCNX', 39, 'Manual Logam', 70, 0, 0, '2018-05-09 14:36:09'),
(23, 'L1CqTr72ON', 38, 'Manual Logam', 70, 0, 0, '2018-05-09 14:37:00'),
(24, 'aLiAvYalNn', 71, 'Liontin', 75, 0, 0, '2018-05-09 14:38:25'),
(25, '3g5yLd3JLm', 15, 'Manual', 70, 0, 0, '2018-05-09 14:39:01'),
(26, 'rr8EM0GHX0', 58, 'Anting', 70, 0, 0, '2018-05-09 14:39:52'),
(31, 'fTvgnDJmtA', 112, 'M. Kuning', 70, 107.07, 101.96, '2018-05-09 17:22:00'),
(32, 'fTvgnDJmtA', 119, 'M. Kuning', 70, 107.07, 101.96, '2018-05-09 17:22:00'),
(33, 'fTvgnDJmtA', 101, 'M. Kuning', 70, 107.07, 101.96, '2018-05-09 17:22:00'),
(34, 'jlHi8Ih0hb', 106, 'R. Gold', 70, 63.15, 61, '2018-05-09 17:25:24'),
(35, 'jlHi8Ih0hb', 117, 'R. Gold', 70, 63.15, 61, '2018-05-09 17:25:24'),
(36, 'TxuDjjrizi', 47, 'M. Putih', 75, 66.78, 62.68, '2018-05-09 17:26:12'),
(37, 'XlEdAwzrXf', 111, 'M. Putih', 70, 64.5, 61.75, '2018-05-09 17:27:26');

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
  `clarity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materialdasar`
--

INSERT INTO `materialdasar` (`idMaterial`, `kodeMaterial`, `namaMaterial`, `kadar`, `karat`, `satuan`, `stokMaterial`, `safetyStock`, `kategori`, `asal`, `color`, `clarity`) VALUES
(35, 1, 'mas murni 100% ( 103.62)', 103.62, 0, 'gr', -230.8, 0, 'Emas', 'Asli', '', ''),
(36, 2, 'emas rose gold 75%', 74.61, 0, 'gr', -180.12, 0, 'Emas', 'Asli', '', ''),
(37, 3, 'emas putih 70% ', 69.43, 0, 'gr', -37.53, 0, 'Emas', 'Asli', '', ''),
(38, 4, 'emas kuning 59.5%', 58.75, 0, 'gr', -414.74, 0, 'Emas', 'Asli', '', ''),
(39, 5, 'emas kuning 30%', 29.53, 0, 'gr', -233.01, 0, 'Emas', 'Asli', '', ''),
(40, 6, 'patri 85% (88.08)', 88.08, 0, 'gr', -3.48, 0, 'Emas', 'Asli', '', ''),
(41, 7, 'benang kadar 70%', 69.43, 0, 'gr', -13.17, 0, 'Emas', 'Asli', '', ''),
(42, 8, 'emas putih 75%', 74.61, 0, 'gr', 5.98, 0, 'Emas', 'Asli', '', ''),
(43, 9, 'emas kuning 70%', 70, 0, 'gr', 89.66, 0, 'Emas', 'Asli', '', ''),
(44, 10, 'emas putih 75%', 75, 0, 'gr', -4.31, 0, 'Emas', 'Asli', '', ''),
(45, 11, 'paladium 100%', 103.62, 0, 'gr', 0, 10, 'Emas', 'Asli', '', ''),
(46, 12, 'Emas Kuning 96.5%', 96.5, 0, 'gr', 10.31, 0, 'Emas', 'Datang Emas', '', ''),
(47, 13, 'alloy merah', 0, 0, 'gr', -44.54, 500, 'Non Emas', 'Asli', '', ''),
(48, 14, 'Berlian 0 Karat', 0, 0, 'Karat', 0, 0, 'Berlian', 'Datang Berlian', '', ''),
(49, 15, 'mas kuning 60% lokal ( 59.50%)', 59.58, 0, 'gr', -382.34, 0, 'Emas', 'Asli', '', ''),
(50, 16, 'emas kuning 30%', 29.53, 0, 'gr', 0, 0, 'Emas', 'Asli', '', ''),
(51, 17, 'emas kuning 65%', 64.24, 0, 'gr', -0.01, 0, 'Emas', 'Asli', '', ''),
(52, 18, 'emas kuning 55%', 54.92, 0, 'gr', 0, 0, 'Emas', 'Asli', '', ''),
(53, 19, 'Balik Bahan 29.5%', 29.5, 0, 'gr', -113.97, 0, 'Emas', 'Balik Bahan', '', ''),
(54, 20, 'Balik Bahan 49.5%', 49.5, 0, 'gr', -15.55, 0, 'Emas', 'Balik Bahan', '', ''),
(55, 21, 'Emas Kuning Masak 99.5% (102.59Lokal)', 102.59, 0, 'gr', -188.99, 0, 'Emas', 'Asli', '', ''),
(56, 22, 'Balik Bahan 74.5%', 74.5, 0, 'gr', -15.96, 0, 'Emas', 'Balik Bahan', '', ''),
(57, 23, 'emas rose gold 70%', 69.43, 0, 'gr', -19.92, 0, 'Emas', 'Asli', '', ''),
(58, 24, 'Balik Bahan 69.5%', 69.5, 0, 'gr', -12.27, 0, 'Emas', 'Balik Bahan', '', ''),
(59, 25, 'perak', 0, 0, 'gr', -25.17, 100, 'Non Emas', 'Asli', '', ''),
(61, 27, 'EMAS KUNING 54.46% ( LOKAL 56.43523)', 56.43, 0, 'gr', -446.1, 0, 'Emas', 'Asli', '', ''),
(62, 28, 'EMAS KUNING 52% ( 53.8860)', 53.88, 0, 'gr', 139.36, 0, 'Emas', 'Asli', '', ''),
(63, 29, 'EMAS KUNING 53.49% ( lokal 55.43005)', 55.43, 0, 'gr', -109.06, 0, 'Emas', 'Asli', '', ''),
(64, 30, 'emas kuning 54.69%', 56.67, 0, 'gr', -154.38, 0, 'Emas', 'Asli', '', ''),
(65, 31, 'emas kuning 56.04%', 58.07, 0, 'gr', -165.42, 0, 'Emas', 'Asli', '', ''),
(66, 32, 'tembaga', 0, 0, 'gr', -6.22, 300, 'Non Emas', 'Asli', '', ''),
(67, 33, 'alloy putih', 0, 0, 'gr', 608.54, 300, 'Non Emas', 'Asli', '', ''),
(68, 34, 'alloy L50M', 0, 0, 'gr', 459, 350, 'Non Emas', 'Asli', '', ''),
(69, 35, 'ALLOY kuning ', 0, 0, 'gr', 874.2, 300, 'Non Emas', 'Asli', '', ''),
(70, 36, 'alloy perak', 0, 0, 'gr', 502.79, 300, 'Non Emas', 'Asli', '', ''),
(71, 37, 'alloy patri emas', 0, 0, 'gr', -7.29, 300, 'Non Emas', 'Asli', '', ''),
(72, 38, 'alloy patri perak', 0, 0, 'gr', 950.43, 100, 'Non Emas', 'Asli', '', ''),
(73, 39, 'emas kuning 56% (58.03108)', 58.03, 0, 'gr', 186.57, 0, 'Emas', 'Asli', '', '');

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
  `jumlah` double NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poberlian`
--

INSERT INTO `poberlian` (`idPOBerlian`, `nomorPO`, `kodeMaterial`, `jumlah`, `harga`) VALUES
(2, 1, 109, 0.46, 10803000),
(3, 50, 14, 0, 10803000),
(4, 51, 14, 0, 10803000),
(5, 52, 14, 0, 10803000),
(6, 53, 14, 0, 10803000),
(7, 54, 14, 0, 10803000),
(8, 59, 14, 0, 0),
(9, 64, 14, 1.43, 11426000),
(10, 66, 14, 0, 10803000),
(11, 68, 14, 1, 2020000),
(12, 70, 14, 0, 0),
(13, 73, 14, 1, 1670000),
(14, 76, 14, 0, 10881000),
(15, 80, 14, 0, 10881000),
(16, 81, 14, 0, 10881000),
(17, 82, 14, 0, 10881000),
(18, 83, 14, 0, 10881000),
(19, 87, 14, 0, 0),
(20, 102, 14, 0, 0),
(21, 103, 14, 0, 780),
(22, 113, 14, 0, 0);

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
(24, 24, 893, 45, 19, '2018-04-30 00:00:00', '2018-05-19 00:00:00', 573000, 'Emas Kuning', 59.5, 'Sesuaikan', 'kuning + kombinasi', '0', 'Cincin Cewek', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap \"700B\"', 200, 0, 0, '2018-04-30 06:29:20', 'massal', 0),
(25, 25, 894, 45, 19, '2018-04-30 00:00:00', '2018-05-19 00:00:00', 573000, 'Emas Kuning', 59.5, 'Sesuaikan', 'kuning + kombinasi', '0', 'Anting Jepit, Tusukannya jangan Panjang Kali', 5, 0, 0, 'Standard', 'Kode Cap', 'Cap \"700B\"', 200, 0, 0, '2018-04-30 06:37:47', 'massal', 0),
(27, 27, 896, 65, 19, '2018-04-30 00:00:00', '2018-04-25 00:00:00', 573000, 'Emas Kuning', 60, 'Sesuaikan', 'Kuning', '0', 'Campur', 6, 0, 0, 'Standard', 'Kode Cap', 'Cap \"700\"', 850, 0, 0, '2018-04-30 09:23:56', 'massal', 0),
(28, 28, 909, 31, 19, '2018-05-03 00:00:00', '2018-05-14 00:00:00', 573000, 'Emas Kuning', 59, 'Sesuaikan', 'kuning + kombinasi', '0', 'Shogun Ukir, Sisik Naga , Gelang Mata , Cincin Mata', 65, 0, 0, 'Standard', 'Kode Cap', 'Cap ', 285, 0, 65, '2018-05-03 05:10:29', 'massal', 0),
(29, 29, 910, 31, 19, '2018-05-03 00:00:00', '2018-05-25 00:00:00', 573000, 'Emas Kuning', 65, '8-10', 'Kuning', '0', 'Cincin Mata ', 7, 0, 0, 'Standard', 'Kode Cap', 'Cap ', 600, 0, 7, '2018-05-03 05:38:34', 'massal', 0),
(30, 30, 923, 31, 19, '2018-05-04 00:00:00', '2018-05-07 00:00:00', 573000, 'Emas Kuning', 59, '8-10', 'kuning + kombinasi', '0', 'CINCIN MATA', 6, 0, 0, 'Standard', 'Kode Cap', 'Cap \"SCP 700\"', 200, 0, 0, '2018-05-04 09:45:40', 'massal', 0),
(31, 31, 924, 36, 19, '2018-05-04 00:00:00', '2018-05-24 00:00:00', 573000, 'Emas Kuning', 41, 'Sesuaikan', 'kuning + kombinasi', '0', 'Gelang Anak-Anak', 6, 0, 0, 'Standard', 'Kode Cap', 'Cap\"A\"', 200, 0, 0, '2018-05-05 03:15:01', 'massal', 0),
(32, 32, 925, 31, 19, '2018-05-04 00:00:00', '2018-05-14 00:00:00', 573000, 'Emas Kuning', 59, 'Sesuaikan', 'kuning + kombinasi', '0', 'Gelang mata, Cincin Mata dan Cincin Anak', 65, 0, 0, 'Standard', 'Kode Cap', 'Cap \"SCP 700\"', 500, 0, 0, '2018-05-05 03:23:02', 'massal', 0);

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
  `model` varchar(255) NOT NULL,
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
(72, 72, 892, 64, 11, '2018-04-30 00:00:00', '2018-05-16 00:00:00', 573000, 400000, 0, 573000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 0.6, 'Emas Kuning', 70, 'Hitam', 5.92, 'Tidak Tahan', 'Cukup', 'Lebih dari 7', 'Mulus', '27', '', 0, 0, '', 0, 0, 'Kuning', 30000, 'Standart', 'Bungkus', 'Cincin Cowok ', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-04-30 04:23:37', 'custom', 0, '', ''),
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
(115, 114, 944, 81, 19, '2018-12-04 00:00:00', '2018-02-05 00:00:00', 574000, 2500000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1.5, 'Emas Kuning', 70, '', 0, '', '', '', '', '', '', 0, 0, '', 0, 0, 'Kuning', 50000, 'Kuning', 'Bungkus', 'model ikuti gambar, bungkus semua semua sesuai contoh gambar', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 07:03:15', 'custom', 0, '', ''),
(117, 116, 946, 64, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 574000, 550000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Rose Gold', 70, '', 0, '', '', '', '', '5.5', '', 0, 0, '', 0, 0, 'Rose Gold', 25000, 'Krum Rose Gold', '', 'CIncin Belah Rotan, Diamond poin 2', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 08:13:47', 'custom', 0, '', ''),
(118, 117, 947, 48, 19, '2018-05-08 00:00:00', '2018-05-18 00:00:00', 574000, 400000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 15, 0.6, 'Emas Putih', 7, 'Black Saphire', 1.13, 'Tahan', 'Bagus', 'Lebih dari 7', 'Serat Kasar', '16', '', 0, 0, 'PRQ', 0, 3500, 'Putih', 40000, '0', 'Kuku', 'Cincin Cowok CLB 51', 'Inject', 0, 0, 0, '', 100, 0, 0, '2018-05-09 09:11:45', 'custom', 0, '0', '0'),
(119, 118, 948, 52, 19, '2018-05-07 00:00:00', '2018-05-11 00:00:00', 574000, 400000, 0, 574000, 0, '', 0, 0, 'Standard', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 3.5, 0.6, 'Emas Kuning', 70, 'Bacan', 0.29, '', '', '6,5 Sampai 7,5', '', '12.5', '', 0, 0, 'PRQ', 0, 3500, 'Kuning', 30000, '0', 'Kuku', 'Model Ccn Cewek MCD 49 ', 'Manual', 0, 0, 0, '', 100, 0, 0, '2018-05-09 09:16:17', 'custom', 0, '0', '0'),
(120, 119, 949, 33, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 574000, 0, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Emas Kuning', 70, '', 0, '', '', '', '', '17', '', 0, 0, '', 0, 0, 'Kuning', 0, 'Krum Kuning+Enamel Hitam', '', 'Cincin Nama Mandarin', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 09:20:59', 'custom', 0, '', ''),
(121, 120, 950, 50, 11, '2018-12-04 00:00:00', '2018-03-04 00:00:00', 574000, 850000, 0, 574000, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, 0, 1, 'Emas Putih', 75, 'Topas', 0, 'Tahan', 'Kurang', 'Lebih dari 7', 'Mulus', '20', '', 0, 0, '', 0, 0, 'Putih', 0, 'Putih Polos', 'Mangkok Kuku', 'Buka Setengah Mangkok, Permukaan mau tampak segi empat, keliling pakai poin 10, mau tampak mewah', 'Design', 0, 0, 0, '', 100, 0, 0, '2018-05-09 10:55:20', 'custom', 0, '', '');

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
(3, 'TR01', 'TURA', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'N62HD46Qna', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:32:53'),
(4, 'RL', 'Royok Labu', 'Anting', 'Massal', '', 'Pcs', 0, 0, 'EyMBc06W3I', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:35:20'),
(5, 'AMTSBL', 'Mitsubhisi Labu', 'Anting', 'Massal', '', 'Pcs', 0, 0, '7tr0u4IgRw', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:36:36'),
(6, 'MCDE1', 'Cincin Elishabet', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'bk3taansfs', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:37:42'),
(7, 'MCDMKS01', 'Cincin Markis', 'Cincin', 'Massal', '', 'Pcs', 0, 0, '14hl9NxgyB', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:38:17'),
(8, 'MCDB3R', 'Cincin Baris 3 Rata', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'oCpjYIowWT', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:39:02'),
(9, 'MCDB2R', 'Cincin Baris 2 Rata', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'fTbWmQPs8T', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:40:06'),
(10, 'MCDP', 'Cincin Padi', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'GY4sGYxDQR', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:40:45'),
(11, 'APL', 'Anting Pita Labu', 'Anting', 'Massal', '', 'Pcs', 0, 0, '9ICt3BN62m', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:41:20'),
(12, 'MCD SN2', 'Cincin Sisik Naga 2 gram', 'Cincin', 'Massal', '', 'Pcs', 0, 0, '8DhEgjiQ41', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:42:07'),
(13, 'MCD SN1', 'Cincin Sisik Naga 1 gram', 'Cincin', 'Massal', '', 'Pcs', 0, 0, '1QNOMj4fwc', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 08:42:52'),
(14, '5001', 'Oheng-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'F50laatwPZ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-16 08:48:30'),
(15, 'MCDSGK', 'Cincin Shogun Kuning ', 'Cincin', 'Massal', 'Berat 0.9 gr', 'Pcs', 0, 0, 'BfOopqlzHo', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-16 09:09:09'),
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
(324, 'MCD0145', 'Cincin Mata MCD0145', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0145', NULL, NULL, NULL, NULL, 145, 'Tidak Tampil', '0000-00-00 00:00:00'),
(325, 'MCD0146', 'Cincin Mata MCD0146', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'BfOMCD0146', NULL, NULL, NULL, NULL, 146, 'Tidak Tampil', '0000-00-00 00:00:00');
INSERT INTO `produk` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `kategori`, `deskripsi`, `satuan`, `hargaModal`, `hargaJual`, `kodeGambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `stok`, `statusKatalog`, `lastModified`) VALUES
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
(571, 'MCD RA1B', 'Cincin Rante Atas 1 Baris', 'Cincin', 'Massal', 'Berat 2 graman', 'Pcs', 0, 0, 'glecvEQkuq', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-17 02:46:48'),
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
(641, 'MLT0067', 'Liontin MLT0067', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00067', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(642, 'MLT0068', 'Liontin MLT0068', 'Liontin', 'Massal', '', 'Pcs', 0, 0, 'BfOMLT00068', '', '', '', '', 0, 'Tidak Tampil', '0000-00-00 00:00:00');
INSERT INTO `produk` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `kategori`, `deskripsi`, `satuan`, `hargaModal`, `hargaJual`, `kodeGambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `stok`, `statusKatalog`, `lastModified`) VALUES
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
(817, 'MCDR3G', 'Cincin Rante 3 Baris', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'kiFrNOpKI4', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-19 02:15:19'),
(818, '5012', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'yq4i0s380t', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 02:23:14'),
(819, 'MCDR2G', 'Cincin Rante 2 Graman', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'vzHTX9KKCZ', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-19 02:28:10'),
(820, 'MCD SN3', 'Cincin Sisik Naga 3 graman', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'tF3tuMe6PX', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-19 02:29:18'),
(821, 'CNC-21', 'Ko Aguan-21-Ruby', 'Cincin', 'Tempahan', '', '', 0, 0, 'GMVUv5Pwhf', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 03:40:37'),
(822, '5013', 'Ko Adi -Agregat', 'Agregat', 'Massal', '', '', 0, 0, '1HpDwzNnyc', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 05:15:26'),
(823, '5014', 'Oheng-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'WgjZlZCcS8', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 05:31:02'),
(824, '5013', 'Ko Eddy Ayong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '3RWm4Tndmh', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-19 06:13:10'),
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
(852, '5015', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '2Dh5olmNYq', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 05:11:00'),
(853, 'MCD RB', 'Cincin RB', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'ZI9ghfn72f', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-25 05:14:14'),
(854, '5016', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'eJWrUTMOey', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 08:26:12'),
(855, '5017', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '6cxqj8ffQj', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 08:32:52'),
(856, 'CNC-47', 'Tkm. Metro -47-Alexander', 'Cincin', 'Tempahan', '', '', 0, 0, 'henw0yrO8r', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 08:55:51'),
(857, '5018', 'Ko Asiong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '0mnUIeoHla', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-25 09:19:41'),
(858, 'MGL 0161', 'Gelang Mata', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'VBO9kq81X9', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-25 09:23:02'),
(859, 'MGL 0162', 'Gelang Mata', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'ARux8FjQp9', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-25 09:23:28'),
(860, 'MGL 0163', 'Gelang Mata', 'Gelang', 'Massal', '', 'Pcs', 0, 0, '8zprmAYa85', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-25 09:23:49'),
(861, 'MGL 0166', 'Gelang Mata', 'Gelang', 'Massal', '', 'Pcs', 0, 0, 'GQ6RlT1vrq', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-25 09:24:09'),
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
(884, '5019', 'Oheng-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'hHWaCMLuA5', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-28 03:29:00'),
(885, 'CNC-67', 'Tkm. Ria-67-Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'wSMwDSczUH', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-28 03:39:22'),
(886, 'MCDSGP', 'Cincin Shogun Putih', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'FGRG8vlaCG', NULL, NULL, NULL, NULL, NULL, 'Tampil', '2018-04-28 03:57:44'),
(887, '5020', 'Ko Eddy Ayong-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'tIJUxoihSp', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-28 04:00:51'),
(888, 'CNC-68', 'Gagah-68', 'Cincin', 'Tempahan', '', '', 0, 0, 'Ek3ZLuIyPA', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-28 10:24:32'),
(889, 'GLG-69', 'Tkm. Pelangi Mas-69', 'Gelang', 'Tempahan', '', '', 0, 0, 'Zcjyh6pceV', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 03:35:41'),
(890, 'GLG-70', 'tkm.mentari-70', 'Gelang', 'Tempahan', '', '', 0, 0, 'GaBZyCvGEF', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 03:51:39'),
(891, 'LTN-71', 'tkm.dunia jaya -71-berlian 7.60 mm', 'Liontin', 'Tempahan', '', '', 0, 0, 'lBFJNrfS1Y', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 04:11:14'),
(892, 'CNC-72', 'Tkm. Pelangi Mas-72-Hitam', 'Cincin', 'Tempahan', '', '', 0, 0, 'F3ZwHS0myv', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 04:23:37'),
(893, '5021', 'Ko Ahua-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'pvD6DShk52', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 06:29:20'),
(894, '5021', 'Ko Ahua-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'ziZS3zA8Vr', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 06:37:47'),
(895, '5022', 'Ko Ahua-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'i7K21cyDgF', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 06:47:48'),
(896, '5023', 'Bg Arifin -Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'WbWcJpHtGW', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-30 09:23:56'),
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
(909, '5024', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'WHZHydibmb', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-03 05:09:10'),
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
(923, '5026', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'OVhFquG2kM', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-04 09:45:40'),
(924, '5027', 'Bg Aris-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '6s4aMKa0mU', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-05 03:15:01'),
(925, '5028', 'ko asan dompet-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'Rh9O2gwzad', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-05 03:23:02'),
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
(951, 'CNC-121', 'Tkm. Pelangi Mas-121', 'Cincin', 'Tempahan', '', '', 0, 0, 'mZHBir1Boa', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-05-09 11:01:30');

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
(1091, 918, 1014, 0, 0);

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
(227, 32, 5028, 345, 'Cincin Merica Anak 50 gr');

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
(161, 16, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(162, 16, 1002, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(163, 16, 1003, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(164, 16, 1004, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(165, 16, 1005, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(166, 16, 1006, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(167, 16, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(168, 16, 1008, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(169, 16, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(170, 16, 1010, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(171, 16, 1011, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(172, 16, 1012, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(173, 16, 1013, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(174, 16, 1014, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(175, 17, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(176, 17, 1002, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(177, 17, 1003, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(178, 17, 1004, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(179, 17, 1005, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(180, 17, 1006, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(181, 17, 1007, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(182, 17, 1008, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(183, 17, 1009, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(184, 17, 1010, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(185, 17, 1011, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(186, 17, 1012, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(187, 17, 1013, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(188, 17, 1014, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(189, 23, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(190, 23, 1002, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(191, 23, 1003, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(192, 23, 1004, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(193, 23, 1005, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(194, 23, 1006, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(195, 23, 1007, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(196, 23, 1008, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(197, 23, 1009, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(198, 23, 1010, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(199, 23, 1011, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(200, 23, 1012, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(201, 23, 1013, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(202, 23, 1014, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(203, 18, 1001, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(204, 18, 1002, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(205, 18, 1003, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(206, 18, 1004, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(207, 18, 1005, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(208, 18, 1006, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(209, 18, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(210, 18, 1008, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(211, 18, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(212, 18, 1010, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(213, 18, 1011, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(214, 18, 1012, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(215, 18, 1013, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(216, 18, 1014, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(217, 31, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(218, 31, 1002, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(219, 31, 1003, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(220, 31, 1004, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(221, 31, 1005, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(222, 31, 1006, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(223, 31, 1007, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(224, 31, 1008, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(225, 31, 1009, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(226, 31, 1010, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(227, 31, 1011, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(228, 31, 1012, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(229, 31, 1013, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(230, 31, 1014, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(231, 27, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(232, 27, 1002, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(233, 27, 1003, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(234, 27, 1004, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(235, 27, 1005, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(236, 27, 1006, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(237, 27, 1007, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(238, 27, 1008, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(239, 27, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(240, 27, 1010, '2018-06-26 00:00:00', '2018-06-26 00:00:00'),
(241, 27, 1011, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(242, 27, 1012, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(243, 27, 1013, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(244, 27, 1014, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(245, 22, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(246, 22, 1002, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(247, 22, 1003, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(248, 22, 1004, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(249, 22, 1005, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(250, 22, 1006, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(251, 22, 1007, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(252, 22, 1008, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(253, 22, 1009, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(254, 22, 1010, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(255, 22, 1011, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(256, 22, 1012, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(257, 22, 1013, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(258, 22, 1014, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(259, 21, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(260, 21, 1002, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(261, 21, 1003, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(262, 21, 1004, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(263, 21, 1005, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(264, 21, 1006, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(265, 21, 1007, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(266, 21, 1008, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(267, 21, 1009, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(268, 21, 1010, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(269, 21, 1011, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(270, 21, 1012, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(271, 21, 1013, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(272, 21, 1014, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(273, 20, 1001, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(274, 20, 1002, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(275, 20, 1003, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(276, 20, 1004, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(277, 20, 1005, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(278, 20, 1006, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(279, 20, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(280, 20, 1008, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(281, 20, 1009, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(282, 20, 1010, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(283, 20, 1011, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(284, 20, 1012, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(285, 20, 1013, '2018-05-30 00:00:00', '2018-05-30 00:00:00'),
(286, 20, 1014, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(287, 19, 1001, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(288, 19, 1002, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(289, 19, 1003, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(290, 19, 1004, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(291, 19, 1005, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(292, 19, 1006, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(293, 19, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(294, 19, 1008, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(295, 19, 1009, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(296, 19, 1010, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(297, 19, 1011, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(298, 19, 1012, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(299, 19, 1013, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(300, 19, 1014, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(301, 26, 1001, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(302, 26, 1002, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(303, 26, 1003, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(304, 26, 1004, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(305, 26, 1005, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(306, 26, 1006, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(307, 26, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(308, 26, 1008, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(309, 26, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(310, 26, 1010, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(311, 26, 1011, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(312, 26, 1012, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(313, 26, 1013, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(314, 26, 1014, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(315, 15, 1001, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(316, 15, 1002, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(317, 15, 1003, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(318, 15, 1004, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(319, 15, 1005, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(320, 15, 1006, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(321, 15, 1007, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(322, 15, 1008, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(323, 15, 1009, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(324, 15, 1010, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(325, 15, 1011, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(326, 15, 1012, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(327, 15, 1013, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(328, 15, 1014, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(329, 29, 1001, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(330, 29, 1002, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(331, 29, 1003, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(332, 29, 1004, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(333, 29, 1005, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(334, 29, 1006, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(335, 29, 1007, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(336, 29, 1008, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(337, 29, 1009, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(338, 29, 1010, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(339, 29, 1011, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(340, 29, 1012, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(341, 29, 1013, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(342, 29, 1014, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(343, 32, 1001, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(344, 32, 1002, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(345, 32, 1003, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(346, 32, 1004, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(347, 32, 1005, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(348, 32, 1006, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(349, 32, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(350, 32, 1008, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(351, 32, 1009, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(352, 32, 1010, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(353, 32, 1011, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(354, 32, 1012, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(355, 32, 1013, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(356, 32, 1014, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(357, 39, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(358, 39, 1002, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(359, 39, 1003, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(360, 39, 1004, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(361, 39, 1005, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(362, 39, 1006, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(363, 39, 1007, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(364, 39, 1008, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(365, 39, 1009, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(366, 39, 1010, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(367, 39, 1011, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(368, 39, 1012, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(369, 39, 1013, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(370, 39, 1014, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(371, 38, 1001, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(372, 38, 1002, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(373, 38, 1003, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(374, 38, 1004, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(375, 38, 1005, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(376, 38, 1006, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(377, 38, 1007, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(378, 38, 1008, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(379, 38, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(380, 38, 1010, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(381, 38, 1011, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(382, 38, 1012, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(383, 38, 1013, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(384, 38, 1014, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(385, 58, 1001, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(386, 58, 1002, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(387, 58, 1003, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(388, 58, 1004, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(389, 58, 1005, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(390, 58, 1006, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(391, 58, 1007, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(392, 58, 1008, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(393, 58, 1009, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(394, 58, 1010, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(395, 58, 1011, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(396, 58, 1012, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(397, 58, 1013, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(398, 58, 1014, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(399, 56, 1001, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(400, 56, 1002, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(401, 56, 1003, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(402, 56, 1004, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(403, 56, 1005, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(404, 56, 1006, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(405, 56, 1007, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(406, 56, 1008, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(407, 56, 1009, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(408, 56, 1010, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(409, 56, 1011, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(410, 56, 1012, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(411, 56, 1013, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(412, 56, 1014, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(413, 55, 1001, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(414, 55, 1002, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(415, 55, 1003, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(416, 55, 1004, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(417, 55, 1005, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(418, 55, 1006, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(419, 55, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(420, 55, 1008, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(421, 55, 1009, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(422, 55, 1010, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(423, 55, 1011, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(424, 55, 1012, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(425, 55, 1013, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(426, 55, 1014, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(427, 43, 1001, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(428, 43, 1002, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(429, 43, 1003, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(430, 43, 1004, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(431, 43, 1005, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(432, 43, 1006, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(433, 43, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(434, 43, 1008, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(435, 43, 1009, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(436, 43, 1010, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(437, 43, 1011, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(438, 43, 1012, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(439, 43, 1013, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(440, 43, 1014, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(441, 44, 1001, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(442, 44, 1002, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(443, 44, 1003, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(444, 44, 1004, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(445, 44, 1005, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(446, 44, 1006, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(447, 44, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(448, 44, 1008, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(449, 44, 1009, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(450, 44, 1010, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(451, 44, 1011, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(452, 44, 1012, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(453, 44, 1013, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(454, 44, 1014, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(455, 35, 1001, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(456, 35, 1002, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(457, 35, 1003, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(458, 35, 1004, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(459, 35, 1005, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(460, 35, 1006, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(461, 35, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(462, 35, 1008, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(463, 35, 1009, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(464, 35, 1010, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(465, 35, 1011, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(466, 35, 1012, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(467, 35, 1013, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(468, 35, 1014, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(469, 36, 1001, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(470, 36, 1002, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(471, 36, 1003, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(472, 36, 1004, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(473, 36, 1005, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(474, 36, 1006, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(475, 36, 1007, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(476, 36, 1008, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(477, 36, 1009, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(478, 36, 1010, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(479, 36, 1011, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(480, 36, 1012, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(481, 36, 1013, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(482, 36, 1014, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(483, 62, 1001, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(484, 62, 1002, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(485, 62, 1003, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(486, 62, 1004, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(487, 62, 1005, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(488, 62, 1006, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(489, 62, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(490, 62, 1008, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(491, 62, 1009, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(492, 62, 1010, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(493, 62, 1011, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(494, 62, 1012, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(495, 62, 1013, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(496, 62, 1014, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(497, 61, 1001, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(498, 61, 1002, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(499, 61, 1003, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(500, 61, 1004, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(501, 61, 1005, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(502, 61, 1006, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(503, 61, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(504, 61, 1008, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(505, 61, 1009, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(506, 61, 1010, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(507, 61, 1011, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(508, 61, 1012, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(509, 61, 1013, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(510, 61, 1014, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(511, 59, 1001, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(512, 59, 1002, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(513, 59, 1003, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(514, 59, 1004, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(515, 59, 1005, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(516, 59, 1006, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(517, 59, 1007, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(518, 59, 1008, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(519, 59, 1009, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(520, 59, 1010, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(521, 59, 1011, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(522, 59, 1012, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(523, 59, 1013, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(524, 59, 1014, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(525, 68, 1001, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(526, 68, 1002, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(527, 68, 1003, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(528, 68, 1004, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(529, 68, 1005, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(530, 68, 1006, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(531, 68, 1007, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(532, 68, 1008, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(533, 68, 1009, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(534, 68, 1010, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(535, 68, 1011, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(536, 68, 1012, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(537, 68, 1013, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(538, 68, 1014, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(539, 74, 1001, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(540, 74, 1002, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(541, 74, 1003, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(542, 74, 1004, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(543, 74, 1005, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(544, 74, 1006, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(545, 74, 1007, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(546, 74, 1008, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(547, 74, 1009, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(548, 74, 1010, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(549, 74, 1011, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(550, 74, 1012, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(551, 74, 1013, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(552, 74, 1014, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(553, 73, 1001, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(554, 73, 1002, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(555, 73, 1003, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(556, 73, 1004, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(557, 73, 1005, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(558, 73, 1006, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(559, 73, 1007, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(560, 73, 1008, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(561, 73, 1009, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(562, 73, 1010, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(563, 73, 1011, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(564, 73, 1012, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(565, 73, 1013, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(566, 73, 1014, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(567, 71, 1001, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(568, 71, 1002, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(569, 71, 1003, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(570, 71, 1004, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(571, 71, 1005, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(572, 71, 1006, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(573, 71, 1007, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(574, 71, 1008, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(575, 71, 1009, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(576, 71, 1010, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(577, 71, 1011, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(578, 71, 1012, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(579, 71, 1013, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(580, 71, 1014, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(581, 75, 1001, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(582, 75, 1002, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(583, 75, 1003, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(584, 75, 1004, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(585, 75, 1005, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(586, 75, 1006, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(587, 75, 1007, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(588, 75, 1008, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(589, 75, 1009, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(590, 75, 1010, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(591, 75, 1011, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(592, 75, 1012, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(593, 75, 1013, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(594, 75, 1014, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(595, 63, 1001, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(596, 63, 1002, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(597, 63, 1003, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(598, 63, 1004, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(599, 63, 1005, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(600, 63, 1006, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(601, 63, 1007, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(602, 63, 1008, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(603, 63, 1009, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(604, 63, 1010, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(605, 63, 1011, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(606, 63, 1012, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(607, 63, 1013, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(608, 63, 1014, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(609, 84, 1001, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(610, 84, 1002, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(611, 84, 1003, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(612, 84, 1004, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(613, 84, 1005, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(614, 84, 1006, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(615, 84, 1007, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(616, 84, 1008, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(617, 84, 1009, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(618, 84, 1010, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(619, 84, 1011, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(620, 84, 1012, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(621, 84, 1013, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(622, 84, 1014, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(623, 100, 1001, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(624, 100, 1002, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(625, 100, 1003, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(626, 100, 1004, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(627, 100, 1005, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(628, 100, 1006, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(629, 100, 1007, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(630, 100, 1008, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(631, 100, 1009, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(632, 100, 1010, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(633, 100, 1012, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(634, 100, 1014, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(635, 93, 1001, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(636, 93, 1002, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(637, 93, 1003, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(638, 93, 1004, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(639, 93, 1005, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(640, 93, 1006, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(641, 93, 1007, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(642, 93, 1008, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(643, 93, 1009, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(644, 93, 1010, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(645, 93, 1012, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(646, 93, 1014, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(647, 86, 1001, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(648, 86, 1002, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(649, 86, 1003, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(650, 86, 1004, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(651, 86, 1005, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(652, 86, 1006, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(653, 86, 1007, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(654, 86, 1008, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(655, 86, 1010, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(656, 86, 1011, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(657, 86, 1012, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(658, 86, 1014, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(659, 87, 1001, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(660, 87, 1002, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(661, 87, 1003, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(662, 87, 1004, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(663, 87, 1005, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(664, 87, 1006, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(665, 87, 1007, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(666, 87, 1008, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(667, 87, 1009, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(668, 87, 1010, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(669, 87, 1011, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(670, 87, 1012, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(671, 87, 1014, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(672, 85, 1001, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(673, 85, 1002, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(674, 85, 1003, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(675, 85, 1004, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(676, 85, 1005, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(677, 85, 1006, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(678, 85, 1007, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(679, 85, 1008, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(680, 85, 1010, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(681, 85, 1011, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(682, 85, 1012, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(683, 85, 1014, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(684, 28, 1001, '2018-05-01 00:00:00', '2018-05-01 00:00:00'),
(685, 28, 1002, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(686, 28, 1003, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(687, 28, 1004, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(688, 28, 1005, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(689, 28, 1006, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(690, 28, 1007, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(691, 28, 1008, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(692, 28, 1009, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(693, 28, 1010, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(694, 28, 1011, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(695, 28, 1012, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(696, 28, 1013, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(697, 28, 1014, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(698, 60, 1001, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(699, 60, 1002, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(700, 60, 1003, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(701, 60, 1004, '2018-05-01 00:00:00', '2018-05-01 00:00:00'),
(702, 60, 1005, '2018-05-01 00:00:00', '2018-05-01 00:00:00'),
(703, 60, 1006, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(704, 60, 1007, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(705, 60, 1008, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(706, 60, 1009, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(707, 60, 1010, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(708, 60, 1011, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(709, 60, 1012, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(710, 60, 1013, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(711, 60, 1014, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(712, 70, 1001, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(713, 70, 1002, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(714, 70, 1003, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(715, 70, 1004, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(716, 70, 1005, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(717, 70, 1006, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(718, 70, 1007, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(719, 70, 1008, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(720, 70, 1009, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(721, 70, 1010, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(722, 70, 1012, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(723, 70, 1014, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(724, 104, 1001, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(725, 104, 1002, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(726, 104, 1003, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(727, 104, 1004, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(728, 104, 1005, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(729, 104, 1006, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(730, 104, 1007, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(731, 104, 1008, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(732, 104, 1009, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(733, 104, 1010, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(734, 104, 1012, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(735, 104, 1014, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(736, 105, 1001, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(737, 105, 1002, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(738, 105, 1003, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(739, 105, 1004, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(740, 105, 1005, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(741, 105, 1006, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(742, 105, 1007, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(743, 105, 1008, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(744, 105, 1009, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(745, 105, 1010, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(746, 105, 1012, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(747, 105, 1013, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(748, 105, 1014, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(749, 101, 1001, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(750, 101, 1002, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(751, 101, 1003, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(752, 101, 1004, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(753, 101, 1005, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(754, 101, 1006, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(755, 101, 1007, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(756, 101, 1008, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(757, 101, 1009, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(758, 101, 1010, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(759, 101, 1011, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(760, 101, 1012, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(761, 101, 1013, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(762, 101, 1014, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(763, 106, 1001, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(764, 106, 1002, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(765, 106, 1003, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(766, 106, 1004, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(767, 106, 1005, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(768, 106, 1006, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(769, 106, 1007, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(770, 106, 1008, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(771, 106, 1009, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(772, 106, 1010, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(773, 106, 1012, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(774, 106, 1013, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(775, 106, 1014, '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(776, 107, 1001, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(777, 107, 1002, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(778, 107, 1003, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(779, 107, 1004, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(780, 107, 1005, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(781, 107, 1006, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(782, 107, 1007, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(783, 107, 1008, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(784, 107, 1009, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(785, 107, 1010, '2018-05-17 00:00:00', '2018-05-17 00:00:00'),
(786, 107, 1012, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(787, 107, 1013, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(788, 107, 1014, '2018-05-18 00:00:00', '2018-05-18 00:00:00'),
(789, 94, 1001, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(790, 94, 1002, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(791, 94, 1003, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(792, 94, 1004, '0010-05-07 00:00:00', '0010-05-07 00:00:00'),
(793, 94, 1005, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(794, 94, 1006, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(795, 94, 1007, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(796, 94, 1008, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(797, 94, 1009, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(798, 94, 1010, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(799, 94, 1011, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(800, 94, 1012, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(801, 94, 1013, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(802, 94, 1014, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(803, 47, 1001, '2018-04-23 00:00:00', '2018-04-23 00:00:00'),
(804, 47, 1002, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(805, 47, 1003, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(806, 47, 1004, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(807, 47, 1005, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(808, 47, 1006, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(809, 47, 1007, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(810, 47, 1008, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(811, 47, 1009, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(812, 47, 1010, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(813, 47, 1012, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(814, 47, 1013, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(815, 47, 1014, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(816, 116, 1001, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(817, 116, 1002, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(818, 116, 1003, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(819, 116, 1004, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(820, 116, 1005, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(821, 116, 1006, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(822, 116, 1007, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(823, 116, 1008, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(824, 116, 1009, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(825, 116, 1010, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(826, 116, 1012, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(827, 116, 1013, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(828, 116, 1014, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(829, 111, 1001, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(830, 111, 1002, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(831, 111, 1003, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(832, 111, 1004, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(833, 111, 1005, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(834, 111, 1006, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(835, 111, 1007, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(836, 111, 1008, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(837, 111, 1009, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(838, 111, 1010, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(839, 111, 1011, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(840, 111, 1012, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(841, 111, 1013, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(842, 111, 1014, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(843, 112, 1001, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(844, 112, 1002, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(845, 112, 1003, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(846, 112, 1004, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(847, 112, 1005, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(848, 112, 1006, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(849, 112, 1007, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(850, 112, 1008, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(851, 112, 1009, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(852, 112, 1010, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(853, 112, 1011, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(854, 112, 1012, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(855, 112, 1013, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(856, 112, 1014, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(857, 90, 1001, '2018-05-01 00:00:00', '2018-05-01 00:00:00'),
(858, 90, 1002, '2018-05-01 00:00:00', '2018-05-01 00:00:00'),
(859, 90, 1003, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(860, 90, 1004, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(861, 90, 1005, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(862, 90, 1006, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(863, 90, 1007, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(864, 90, 1008, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(865, 90, 1009, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(866, 90, 1010, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(867, 90, 1011, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(868, 90, 1012, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(869, 90, 1013, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(870, 90, 1014, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(871, 117, 1001, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(872, 117, 1002, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(873, 117, 1003, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(874, 117, 1004, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(875, 117, 1005, '2018-05-08 00:00:00', '2018-05-08 00:00:00'),
(876, 117, 1006, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(877, 117, 1007, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(878, 117, 1008, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(879, 117, 1009, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(880, 117, 1010, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(881, 117, 1012, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(882, 117, 1014, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(883, 69, 1001, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(884, 69, 1002, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(885, 69, 1003, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(886, 69, 1004, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(887, 69, 1005, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(888, 69, 1006, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(889, 69, 1007, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(890, 69, 1008, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(891, 69, 1009, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(892, 69, 1010, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(893, 69, 1011, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(894, 69, 1012, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(895, 69, 1013, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(896, 69, 1014, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(897, 120, 1001, '2018-05-01 00:00:00', '2018-05-01 00:00:00'),
(898, 120, 1002, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(899, 120, 1003, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(900, 120, 1004, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(901, 120, 1005, '2018-05-07 00:00:00', '2018-05-07 00:00:00'),
(902, 120, 1006, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(903, 120, 1007, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(904, 120, 1008, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(905, 120, 1009, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(906, 120, 1010, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(907, 120, 1012, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(908, 120, 1014, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(909, 96, 1001, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(910, 96, 1002, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(911, 96, 1003, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(912, 96, 1004, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(913, 96, 1005, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(914, 96, 1006, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(915, 96, 1007, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(916, 96, 1008, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(917, 96, 1009, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(918, 96, 1010, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(919, 96, 1011, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(920, 96, 1012, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(921, 96, 1013, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(922, 96, 1014, '2018-05-17 00:00:00', '2018-05-17 00:00:00'),
(923, 118, 1001, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(924, 118, 1002, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(925, 118, 1003, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(926, 118, 1004, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(927, 118, 1005, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(928, 118, 1006, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(929, 118, 1007, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(930, 118, 1008, '2018-05-13 00:00:00', '2018-05-13 00:00:00'),
(931, 118, 1009, '2018-05-14 00:00:00', '2018-05-14 00:00:00'),
(932, 118, 1010, '2018-05-15 00:00:00', '2018-05-15 00:00:00'),
(933, 118, 1012, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(934, 118, 1013, '2018-05-16 00:00:00', '2018-05-16 00:00:00'),
(935, 118, 1014, '2018-05-17 00:00:00', '2018-05-17 00:00:00'),
(936, 119, 1001, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(937, 119, 1002, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(938, 119, 1003, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(939, 119, 1004, '2018-05-09 00:00:00', '2018-05-09 00:00:00'),
(940, 119, 1005, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(941, 119, 1006, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(942, 119, 1007, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(943, 119, 1008, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(944, 119, 1009, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(945, 119, 1010, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(946, 119, 1012, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(947, 119, 1013, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(948, 119, 1014, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(949, 92, 1001, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(950, 92, 1002, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(951, 92, 1003, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(952, 92, 1004, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(953, 92, 1005, '2018-05-10 00:00:00', '2018-05-10 00:00:00'),
(954, 92, 1006, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(955, 92, 1007, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(956, 92, 1008, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(957, 92, 1009, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(958, 92, 1010, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(959, 92, 1011, '2018-05-11 00:00:00', '2018-05-11 00:00:00'),
(960, 92, 1012, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(961, 92, 1013, '2018-05-12 00:00:00', '2018-05-12 00:00:00'),
(962, 92, 1014, '2018-05-12 00:00:00', '2018-05-12 00:00:00');

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

--
-- Dumping data for table `rencanaproduksi2`
--

INSERT INTO `rencanaproduksi2` (`idRencana`, `idSPK`, `idAktivitas`, `startDate`, `endDate`) VALUES
(1, 2, 1004, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(2, 2, 1005, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(3, 2, 1006, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(4, 2, 1007, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(5, 2, 1008, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(6, 2, 1009, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(7, 2, 1010, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(8, 2, 1011, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(9, 2, 1012, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(10, 2, 1013, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(11, 2, 1014, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(12, 3, 1004, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(13, 3, 1005, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(14, 3, 1006, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(15, 3, 1007, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(16, 3, 1008, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(17, 3, 1009, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(18, 3, 1011, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(19, 3, 1012, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(20, 3, 1013, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(21, 3, 1014, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(22, 4, 1004, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(23, 4, 1005, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(24, 4, 1006, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(25, 4, 1007, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(26, 4, 1008, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(27, 4, 1009, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(28, 4, 1010, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(29, 4, 1011, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(30, 4, 1012, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(31, 4, 1013, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(32, 4, 1014, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(33, 5, 1004, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(34, 5, 1005, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(35, 5, 1006, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(36, 5, 1007, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(37, 5, 1008, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(38, 5, 1009, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(39, 5, 1010, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(40, 5, 1011, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(41, 5, 1012, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(42, 5, 1013, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(43, 5, 1014, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(44, 7, 1004, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(45, 7, 1005, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(46, 7, 1006, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(47, 7, 1007, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(48, 7, 1008, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(49, 7, 1009, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(50, 7, 1010, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(51, 7, 1011, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(52, 7, 1012, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(53, 7, 1013, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(54, 7, 1014, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(55, 6, 1004, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(56, 6, 1005, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(57, 6, 1006, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(58, 6, 1007, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(59, 6, 1008, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(60, 6, 1009, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(61, 6, 1010, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(62, 6, 1011, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(63, 6, 1012, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(64, 6, 1013, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(65, 6, 1014, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(66, 20, 1004, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(67, 20, 1005, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(68, 20, 1006, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(69, 20, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(70, 20, 1008, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(71, 20, 1009, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(72, 20, 1010, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(73, 20, 1011, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(74, 20, 1012, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(75, 20, 1013, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(76, 20, 1014, '2018-04-30 00:00:00', '2018-04-30 00:00:00'),
(77, 19, 1004, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(78, 19, 1005, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(79, 19, 1006, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(80, 19, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(81, 19, 1008, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(82, 19, 1009, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(83, 19, 1010, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(84, 19, 1011, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(85, 19, 1012, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(86, 19, 1013, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(87, 19, 1014, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(88, 17, 1004, '2018-04-24 00:00:00', '2018-04-24 00:00:00'),
(89, 17, 1005, '2018-04-25 00:00:00', '2018-04-25 00:00:00'),
(90, 17, 1006, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(91, 17, 1007, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(92, 17, 1008, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(93, 17, 1009, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(94, 17, 1010, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(95, 17, 1011, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(96, 17, 1012, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(97, 17, 1013, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(98, 17, 1014, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(99, 21, 1004, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(100, 21, 1005, '2018-04-26 00:00:00', '2018-04-26 00:00:00'),
(101, 21, 1006, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(102, 21, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(103, 21, 1008, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(104, 21, 1009, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(105, 21, 1010, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(106, 21, 1011, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(107, 21, 1012, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(108, 21, 1013, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(109, 21, 1014, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(110, 16, 1004, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(111, 16, 1005, '2018-04-27 00:00:00', '2018-04-27 00:00:00'),
(112, 16, 1006, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(113, 16, 1007, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(114, 16, 1008, '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(115, 16, 1009, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(116, 16, 1010, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(117, 16, 1011, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(118, 16, 1012, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(119, 16, 1013, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(120, 16, 1014, '2018-04-29 00:00:00', '2018-04-29 00:00:00'),
(121, 15, 1004, '2018-05-02 00:00:00', '2018-05-02 00:00:00'),
(122, 15, 1005, '2018-05-03 00:00:00', '2018-05-03 00:00:00'),
(123, 15, 1006, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(124, 15, 1007, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(125, 15, 1008, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(126, 15, 1009, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(127, 15, 1010, '2018-05-04 00:00:00', '2018-05-04 00:00:00'),
(128, 15, 1011, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(129, 15, 1012, '2018-05-05 00:00:00', '2018-05-05 00:00:00'),
(130, 15, 1013, '2018-05-06 00:00:00', '2018-05-06 00:00:00'),
(131, 15, 1014, '2018-05-07 00:00:00', '2018-05-07 00:00:00');

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
(30, 30, 30, 834, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-19 07:54:48', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(33, 33, 33, 837, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-21 06:05:26', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(34, 34, 34, 838, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-21 06:12:01', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(40, 40, 40, 844, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-21 06:53:15', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(41, 41, 41, 845, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-21 06:57:33', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(42, 42, 42, 846, 50, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-21 07:49:43', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(45, 45, 45, 849, 56, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-21 09:06:12', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(46, 46, 46, 850, 56, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-21 09:09:02', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(47, 47, 47, 856, 55, 'Disetujui', '2018-05-09 13:56:02', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 13:51:01', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 07:12:46', 'On progress', 'Sudah', '0', '', '2018-05-08 00:00:00'),
(48, 48, 48, 863, 57, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-25 09:35:53', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(49, 49, 49, 864, 58, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-25 09:40:08', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(50, 50, 50, 865, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-25 09:45:07', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(51, 51, 51, 866, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-25 09:52:09', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(52, 52, 52, 867, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-25 09:56:08', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(53, 53, 53, 868, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-25 10:03:41', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(54, 54, 54, 869, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-25 10:07:43', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(57, 57, 57, 874, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-26 07:20:12', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(64, 64, 64, 881, 60, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-27 03:03:07', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(65, 65, 65, 882, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-27 05:41:41', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(66, 66, 66, 883, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-27 05:53:23', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(67, 67, 67, 885, 61, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-28 03:39:22', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(69, 69, 69, 889, 33, 'Disetujui', '2018-05-09 16:12:23', 2, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 16:09:05', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 09:12:23', 'On progress', 'Proses Print', '0', '', '2018-05-09 00:00:00'),
(72, 72, 72, 892, 64, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-04-30 04:23:37', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(77, 76, 76, 901, 67, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-02 09:31:31', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(78, 77, 77, 902, 68, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-02 09:34:53', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(79, 78, 78, 903, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-02 09:37:11', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(81, 80, 80, 905, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-02 09:52:07', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(82, 81, 81, 906, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-02 09:55:16', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(83, 82, 82, 907, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-02 09:58:57', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(88, 87, 87, 914, 50, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-04 02:58:42', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(89, 88, 88, 915, 50, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-04 03:02:50', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(90, 89, 89, 916, 50, 'Disetujui', '2018-05-09 15:55:28', 2, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 15:53:13', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-10 08:35:12', 'On progress', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(92, 91, 91, 918, 71, 'Menunggu Persetujuan', '0000-00-00 00:00:00', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-10 12:09:56', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-10 08:45:46', 'On progress', 'Belum', '0', '', '2018-05-03 00:00:00'),
(94, 93, 93, 920, 33, 'Disetujui', '2018-05-09 13:41:25', 2, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 13:35:48', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 06:41:25', 'On progress', 'Proses Print', 'Liontin nama ANGELIA JULITA', '', '2018-05-09 00:00:00'),
(95, 94, 94, 921, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-04 05:20:37', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(96, 95, 95, 922, 33, 'Disetujui', '2018-05-09 16:30:31', 2, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 16:27:39', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 09:30:31', 'On progress', 'Proses Print', '0', '', '2018-05-10 00:00:00'),
(97, 96, 96, 926, 56, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-05 03:33:54', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(98, 97, 97, 927, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-05 03:39:17', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(99, 98, 98, 928, 33, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-05 03:42:02', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(101, 100, 100, 930, 72, 'Disetujui', '2018-05-09 13:17:21', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 12:03:40', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 06:25:44', 'On progress', 'Sudah', '0', '', '2018-05-08 00:00:00'),
(102, 101, 101, 931, 73, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-08 05:15:14', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(103, 102, 102, 932, 49, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-08 05:20:05', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(104, 103, 103, 933, 33, 'Menunggu Persetujuan', '0000-00-00 00:00:00', 2, 'Belum Ada', '0000-00-00 00:00:00', 2, 'Sudah Ada', '2018-05-09 11:36:21', 2, 'Belum Disetujui', '0000-00-00 00:00:00', 2, 0, '2018-05-09 04:50:57', 'On progress', 'Belum', 'Cincin Cewek Diamond', '', '2018-05-08 00:00:00'),
(105, 104, 104, 934, 50, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 11:41:15', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 04:41:15', 'On progress', 'Belum', '', '', '2018-04-19 00:00:00'),
(106, 105, 105, 935, 75, 'Disetujui', '2018-05-09 12:11:08', 11, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 12:06:26', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 05:11:18', 'On progress', 'Sudah', 'cincin kawin ', '', '2018-05-08 00:00:00'),
(107, 106, 106, 936, 48, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 12:37:12', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 05:37:12', 'On progress', 'Belum', '', '', '2018-05-12 00:00:00'),
(108, 107, 107, 937, 76, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 05:44:50', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(109, 108, 108, 938, 77, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 05:59:46', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(110, 109, 109, 939, 57, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 06:12:32', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(111, 110, 110, 940, 78, 'Disetujui', '2018-05-09 15:00:50', 2, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 14:51:49', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 08:01:08', 'On progress', 'Sudah', '0', '', '2018-05-07 00:00:00'),
(112, 111, 111, 941, 52, 'Disetujui', '2018-05-09 15:37:17', 2, 'Belum Ada', '0000-00-00 00:00:00', 11, 'Sudah Ada', '2018-05-09 15:35:23', 11, 'Belum Disetujui', '0000-00-00 00:00:00', 11, 0, '2018-05-09 08:37:29', 'On progress', 'Sudah', '0', '', '2018-05-07 00:00:00'),
(113, 112, 112, 942, 79, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 06:56:11', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(114, 113, 113, 943, 80, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 07:02:19', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(115, 114, 114, 944, 81, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-09 07:03:15', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00'),
(117, 116, 116, 946, 64, 'Disetujui', '2018-05-09 16:06:02', 6, 'Belum Ada', '0000-00-00 00:00:00', 6, 'Sudah Ada', '2018-05-09 16:00:46', 6, 'Belum Disetujui', '0000-00-00 00:00:00', 6, 0, '2018-05-09 09:06:20', 'On progress', 'Sudah', '0', '', '2018-05-06 00:00:00'),
(118, 117, 117, 947, 48, 'Disetujui', '2018-05-09 16:56:18', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 16:38:32', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 09:57:22', 'On progress', 'Sudah', '0', '', '2018-05-12 00:00:00'),
(119, 118, 118, 948, 52, 'Disetujui', '2018-05-09 17:12:26', 6, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-05-09 17:05:20', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-09 10:12:50', 'On progress', 'Sudah', '0', '', '2018-05-09 00:00:00'),
(120, 119, 119, 949, 33, 'Disetujui', '2018-05-09 16:33:05', 6, 'Belum Ada', '0000-00-00 00:00:00', 6, 'Sudah Ada', '2018-05-09 16:24:35', 6, 'Belum Disetujui', '0000-00-00 00:00:00', 6, 0, '2018-05-09 09:33:05', 'On progress', 'Proses Print', '0', '', '2018-05-06 00:00:00'),
(121, 120, 120, 950, 50, 'Proses Desain', '0000-00-00 00:00:00', 0, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Ada', '0000-00-00 00:00:00', 5, 'Belum Disetujui', '0000-00-00 00:00:00', 5, 0, '2018-05-09 10:55:20', 'On progress', 'Belum', '', '', '0000-00-00 00:00:00');

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
(15, 15, 15, 824, 37, 'Disetujui', '2018-05-07 19:38:26', 19, 'Sudah Ada', '2018-05-07 19:37:29', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-07 12:38:26', 0, 'On progress'),
(16, 16, 16, 851, 36, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-04-28 16:47:35', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-28 09:47:35', 0, 'On progress'),
(17, 17, 17, 852, 31, 'Disetujui', '2018-04-28 13:35:20', 19, 'Sudah Ada', '2018-04-26 11:09:50', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 59, '2018-04-28 06:36:05', 0, 'On progress'),
(18, 18, 18, 854, 31, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-25 08:26:12', 0, 'On progress'),
(19, 19, 19, 855, 31, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Sudah Ada', '2018-04-26 11:05:34', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-26 04:05:34', 0, 'On progress'),
(20, 20, 20, 857, 47, 'Disetujui', '2018-04-28 14:21:53', 19, 'Sudah Ada', '2018-04-26 11:03:38', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 29.5, '2018-04-28 07:23:26', 0, 'On progress'),
(21, 21, 21, 862, 38, 'Disetujui', '2018-04-28 16:48:06', 19, 'Sudah Ada', '2018-04-28 16:46:13', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 59, '2018-04-28 09:49:03', 0, 'On progress'),
(22, 22, 22, 884, 35, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-28 03:29:00', 0, 'On progress'),
(23, 23, 23, 887, 37, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-28 04:00:51', 0, 'On progress'),
(24, 24, 24, 893, 45, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-30 06:29:20', 0, 'On progress'),
(25, 25, 25, 894, 45, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-30 06:37:47', 0, 'On progress'),
(26, 26, 26, 895, 45, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-30 06:47:48', 0, 'On progress'),
(27, 27, 27, 896, 65, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-04-30 09:23:56', 0, 'On progress'),
(28, 28, 28, 909, 31, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-03 05:09:10', 0, 'On progress'),
(29, 29, 29, 910, 31, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-03 05:15:10', 0, 'On progress'),
(30, 30, 30, 923, 31, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-04 09:45:40', 0, 'On progress'),
(31, 31, 31, 924, 36, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-05 03:15:01', 0, 'On progress'),
(32, 32, 32, 925, 31, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, 0, '2018-05-05 03:23:02', 0, 'On progress');

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
(3, 2, 0, 'Produk Semi Jadi', '2', 42.56, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-16 16:13:18', ''),
(8, 2, 0, 'Produk Semi Jadi', '17', 81.19, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-16 17:16:03', ''),
(9, 2, 0, 'Produk Semi Jadi', '17', 37.78, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-16 17:25:20', ''),
(47, 19, 0, 'Material Dasar', '12', 10.31, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-19 09:23:14', ''),
(48, 19, 0, 'Material Dasar', '12', 25.77, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-19 12:15:26', ''),
(49, 19, 32, 'Material Dasar', '14', 6, 'cr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-21 12:41:13', ''),
(50, 19, 45, 'Material Dasar', '14', 7, 'cr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-21 16:06:12', ''),
(55, 19, 0, 'Material Dasar', '1', 14.22, 'gr', 'OUT', 'Transfer Material', 'Valid', 0, '2018-04-26 11:58:55', 'Delima Jaya Rangka Cincin  (25/4/18)'),
(57, 19, 0, 'Material Dasar', '1', 200, 'gr', 'IN', 'Beli Material', 'Valid', 0, '2018-04-26 12:00:12', 'Beli Emas ke TKM. Cahaya (26 april 2018)'),
(58, 19, 0, 'Material Dasar', '1', 200, 'gr', 'OUT', 'Transfer Material', 'Valid', 0, '2018-04-26 12:00:46', 'Beli Bahan Dari Cahaya  26/4/18'),
(60, 5, 0, 'Material Dasar', '1', 100, 'gr', 'IN', 'Beli Material', 'Valid', 0, '2018-04-26 15:14:20', 'beli dari TKM Cahaya'),
(61, 5, 0, 'Material Dasar', '1', 100, 'gr', 'OUT', 'Transfer Material', 'Valid', 0, '2018-04-26 15:15:33', 'BAHAN MURNI '),
(63, 19, 0, 'Material Dasar', '1', 305.7, 'gr', 'IN', 'Beli Material', 'Valid', 0, '2018-04-28 10:31:17', 'Beli Emas ke TKM. Cahaya (28 april 2018)'),
(64, 19, 0, 'Material Dasar', '1', 305.7, 'gr', 'OUT', 'Transfer', 'Valid', 0, '2018-04-28 10:34:00', 'Beli Emas ke TKM. Cahaya (28 april 2018)'),
(76, 1, 0, 'Material Dasar', '17', 257.96, 'gr', 'IN', 'Transfer', 'Valid', 0, '2018-04-28 15:00:42', 'bahan produksi'),
(78, 1, 0, 'Produk Semi Jadi', '857', 226.18, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-28 15:18:22', ''),
(80, 9, 0, 'Produk Semi Jadi', '857', 89, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-28 15:29:45', ''),
(84, 1, 0, 'Produk Semi Jadi', '857', 112.09, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-28 16:55:57', ''),
(87, 1, 0, 'Produk Semi Jadi', '857', 156.27, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-28 16:58:53', ''),
(102, 2, 0, 'Produk Semi Jadi', '803', 15.09, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-03 14:31:26', ''),
(103, 2, 0, 'Produk Semi Jadi', '803', 12.4, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-05-03 14:35:05', ''),
(104, 2, 17, 'Produk Jadi', '803', 12.4, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-03 14:35:05', ''),
(105, 2, 0, 'Produk Jadi', '803', 12.4, 'gr', 'OUT', 'Transfer', 'Valid', 0, '2018-05-03 14:35:44', ''),
(107, 2, 17, 'Produk Jadi', '803', 12.4, 'gr', 'OUT', 'Diambil Customer', 'Valid', 0, '2018-05-03 14:35:56', ''),
(108, 2, 17, 'Produk Jadi', '803', 12.4, 'gr', 'OUT', 'Diambil Customer', 'Valid', 0, '2018-05-03 14:36:15', ''),
(115, 2, 0, 'Produk Semi Jadi', '876', 7.64, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-04 11:24:31', ''),
(125, 2, 0, 'Produk Semi Jadi', '908', 6.69, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-04 17:21:20', ''),
(126, 2, 0, 'Produk Semi Jadi', '899', 7.62, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-04 17:29:51', ''),
(127, 19, 0, 'Material Dasar', '1', 403, 'gr', 'IN', 'Beli Material', 'Valid', 0, '2018-05-07 16:09:52', 'Beli Bahan dari Cahaya 7/5/18'),
(128, 19, 0, 'Material Dasar', '1', 403, 'gr', 'OUT', 'Transfer', 'Valid', 0, '2018-05-07 16:11:21', 'Beli Bahan dari Cahaya 7/5/18'),
(130, 19, 0, 'Material Dasar', '1', 1000, 'gr', 'IN', 'Beli Material', 'Valid', 0, '2018-05-07 16:12:04', 'Dat Bahan Dari Koko '),
(131, 19, 0, 'Material Dasar', '1', 1000, 'gr', 'OUT', 'Transfer', 'Valid', 0, '2018-05-07 16:12:35', 'Dat Bahan Dari Koko 7/5/18'),
(133, 2, 0, 'Produk Semi Jadi', '871', 45.74, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-08 10:43:18', ''),
(134, 2, 0, 'Produk Semi Jadi', '888', 9.5, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-08 10:59:31', ''),
(135, 2, 0, 'Produk Semi Jadi', '880', 13, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-08 11:24:24', ''),
(136, 2, 0, 'Produk Semi Jadi', '880', 11.47, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-05-08 11:32:08', ''),
(137, 2, 63, 'Produk Jadi', '880', 11.47, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-08 11:32:08', ''),
(138, 2, 0, 'Produk Jadi', '880', 11.45, 'gr', 'OUT', 'Transfer', 'Valid', 0, '2018-05-08 11:32:30', ''),
(139, 19, 0, 'Produk Jadi', '880', 11.45, 'gr', 'IN', 'Transfer', 'Pending', 0, '2018-05-08 11:32:30', ''),
(140, 2, 63, 'Produk Jadi', '880', 11.47, 'gr', 'OUT', 'Diambil Customer', 'Valid', 0, '2018-05-08 11:33:10', ''),
(157, 9, 0, 'Material Dasar', '33', 608.54, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-08 19:59:40', 'bahan'),
(159, 9, 0, 'Material Dasar', '34', 459, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-08 20:01:01', 'bahan'),
(160, 9, 0, 'Material Dasar', '35', 874.2, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-08 20:03:30', 'bahan'),
(161, 9, 0, 'Material Dasar', '36', 502.79, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-08 20:04:07', 'bahan'),
(163, 9, 0, 'Material Dasar', '38', 950.43, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-08 20:05:21', 'bahan'),
(164, 2, 0, 'Produk Semi Jadi', '888', 7.44, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-05-09 11:11:36', ''),
(165, 2, 68, 'Produk Jadi', '888', 7.44, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-05-09 11:11:36', ''),
(166, 2, 0, 'Produk Jadi', '888', 7.44, 'gr', 'OUT', 'Transfer', 'Valid', 0, '2018-05-09 11:12:09', ''),
(167, 19, 0, 'Produk Jadi', '888', 7.44, 'gr', 'IN', 'Transfer', 'Pending', 0, '2018-05-09 11:12:09', ''),
(168, 19, 17, 'Produk Jadi', '803', 12.4, 'gr', 'OUT', 'Diambil Customer', 'Valid', 0, '2018-05-09 13:27:41', ''),
(169, 19, 17, 'Produk Jadi', '803', 12.4, 'gr', 'OUT', 'Diambil Customer', 'Valid', 0, '2018-05-09 13:31:28', ''),
(170, 19, 63, 'Produk Jadi', '880', 11.47, 'gr', 'OUT', 'Diambil Customer', 'Valid', 0, '2018-05-09 13:31:43', ''),
(171, 9, 0, 'Material Dasar', '25', 782.39, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:03:52', 'bahan'),
(172, 9, 0, 'Material Dasar', '32', 82.6, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:04:32', ''),
(173, 9, 0, 'Material Dasar', '13', 171.19, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:05:17', ''),
(174, 9, 0, 'Material Dasar', '37', 61.49, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:05:51', ''),
(175, 9, 0, 'Material Dasar', '27', 289.57, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:18:37', 'bahan arifin'),
(176, 9, 0, 'Material Dasar', '15', 126.1, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:21:35', 'bahan arifin'),
(177, 9, 0, 'Material Dasar', '1', 576.6, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:22:59', 'bahan LM'),
(178, 9, 0, 'Material Dasar', '11', 8.75, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:23:29', ''),
(179, 9, 0, 'Material Dasar', '17', 20.2, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:24:13', 'anting rusak'),
(180, 9, 0, 'Material Dasar', '9', 89.66, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:24:49', 'sisa bahan cor '),
(181, 9, 0, 'Material Dasar', '3', 24.03, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:25:18', 'sisa bahan cor '),
(182, 9, 0, 'Material Dasar', '15', 232.63, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:26:00', 'sisa bahan cor '),
(183, 9, 0, 'Material Dasar', '8', 157.07, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:26:35', 'bahan'),
(184, 9, 0, 'Material Dasar', '8', 5.99, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:27:37', 'bahan'),
(185, 9, 0, 'Material Dasar', '9', 20.47, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:28:16', 'bahan campur'),
(186, 9, 0, 'Material Dasar', '28', 208.59, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:29:34', 'sisa abu cor'),
(187, 9, 0, 'Material Dasar', '39', 186.57, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-05-09 20:35:13', 'sisa bahan cor');

-- --------------------------------------------------------

--
-- Table structure for table `subspk`
--

CREATE TABLE `subspk` (
  `idSubSPK` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subspk`
--

INSERT INTO `subspk` (`idSubSPK`, `idSPK`) VALUES
(1, 2),
(2, 2),
(3, 4),
(4, 4),
(5, 2),
(6, 17),
(7, 20),
(8, 20),
(9, 20),
(10, 20),
(11, 21),
(12, 15);

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
(10, '5000', 'BIAYA-BIAYA');

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
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `nama`, `jabatan`, `level`, `phone`, `email`, `alamat`) VALUES
(0, '', '123', 'Belum ada PIC', '', 0, NULL, NULL, NULL),
(1, 'Mutia', '123', 'Mutia Naimi', 'Admin Produksi', 0, '', '', ' Dusun VI Jl. Binjai KM 10.5 Gg. Jadi Kel/Desa Paya Geli Kec. Sunggal '),
(2, 'Ertin Barutu', '123', 'Ertin Barutu', 'Admin Tempahan', 0, '', '', ' Sihabong-habong Kel/Desa Sihotang Hasugian Dolok II '),
(3, 'Rijal Tanjung', '123', 'Rijal Tanjung', 'Cleaning Service', 0, '', '', ' -   '),
(4, 'Wak Jen', '123', 'Wak Jen', 'Cleaning Service', 0, '', '', ' -   '),
(5, 'Melita Sari Lubis', '1234', 'Melita Sari Lubis', 'General Affair', 0, '085262244633', 'melita.sari55@yahoo.com', ' Jl. Pendidikan Gg. Kasih Dusun II Kel/Desa Bandar setia Kec. Percut Sei Tuan '),
(6, 'Muhammad Andre', '123', 'Muhammad Andre', 'Staff Desain Tempahan', 0, '', '', ' Dusun II Desa Pematang Kasih Kec. Pantai Cermin Kab. Serdang Bedagai '),
(7, 'Susi wana Pasaribu', '123', 'Susi wana Pasaribu', 'Leader Finishing', 0, '', '', ' Sisolu-soli Kel/Desa Pegangan Julu V Kec. Sumbul '),
(8, 'Hendra', '123', 'Hendra', 'Leader Produksi', 0, '', '', ' Jl. Selam I Gg. Saudara No. 30 Kel/desa Tegal S. Mandala I Kec. Medan Denai '),
(9, 'Wenny', '123', 'Wenny Aleesa Ramadani', 'Leader Produksi', 0, '', '', ' Huta II Afd I Laras Kel/Desa Laras Kec. Bandar Huluan '),
(10, 'Riki Andika', '123', 'Riki Andika', 'Leader Tempahan', 0, '', '', ' Dusun IX Pasar Kacang Kel/Desa Sei Muka Kec. Talawi '),
(11, 'Vivi Eliza Elthia', '123', 'Vivi Eliza Elthia', 'Manager Sales & Marketing', 0, '', '', ' -   '),
(12, 'Swandie', '123', 'Maxim Swandie', 'Owner', 0, '', '', ' Jl. Kota Baru '),
(13, 'Franziska SF', '123', 'Franziska SF', 'PPIC Tempahan', 0, '', '', ' Jl. Danau Melintang No. 81 MedanKel/Desa Sei Agul Kec. Medan Barat  '),
(14, 'Rina Rahmadani', '123', 'Rina Rahmadani', 'Staff Accounting', 0, '', '', ' Jl. Kenanga XV No. 02 TG. Sari Kel Tanjung Sari Kec. Medan Selayang '),
(15, 'Armiah', '123', 'Armiah', 'Staff Desain Tempahan', 0, '', '', ' Dusun II Kel/Desa Pematang guntung Kec. Teluk Mengkudu '),
(16, 'Irvan', '123', 'Irvan', 'Staff Desain Tempahan', 0, '', '', ' Dusun Getek I Kel/Desa Pantai Cermin Kec. Tanjung Pura '),
(17, 'Muhammad Yusuf N', '123', 'Muhammad Yusuf N', 'Staff Desain Tempahan', 0, '', '', ' Pematang Guntung Kel/Desa Pematang guntung Kec. Teluk Mengkudu '),
(18, 'Roberto Efendi Sinaga', '123', 'Roberto Efendi Sinaga', 'Staff Desain Tempahan', 0, '', '', ' Komplek Rumah Sakit Balimbingan Kel/Desa Balimbingan Kec. Tanah Jawa '),
(19, 'Aaleyah', '123', 'Aaleyah A. Susanti', 'Staff Keuangan', 0, '', '', ' Jl. Budi Luhur LK. I No. 40 B Kel/Desa Dwikora Kec. Medan Helvetia '),
(20, 'Darma', '123', 'Darma', 'Staff Krum', 0, '', '', ' -   '),
(21, 'Irfan Juhari', '123', 'Irfan Juhari', 'Staff Krum', 0, '', '', ' Serba Jadi Kel/Desa Dolok Kataran Kec. Dolok Batu Nanggar '),
(22, 'Mas Andi Susanto', '123', 'Mas Andi Susanto', 'Staff Krum', 0, '', '', ' Jl. P. Kemerdekaan LK IV Kel/Desa Cengkeh Turi Kec. Binjai Utara '),
(23, 'Sarida Hanum Ritonga', '123', 'Sarida Hanum Ritonga', 'Staff Krum', 0, '', '', ' Jl. Bersama No. 112 Medan Kel/Desa Bantan Kec. Medan Tembung '),
(24, 'Sandi Putra Lelono', '123', 'Sandi Putra Lelono', 'Staff Microsetting', 0, '', '', ' Jl. Kalianyar Kel/Desa Kalianyar Kec. Tambora '),
(25, 'Ali Imron', '123', 'Ali Imron', 'Staff Produksi', 0, '', '', ' Jl. Pembangunan Desa Kolam Kel/Desa Kolam Kec. Percut Sei Tuan '),
(26, 'Andrie Fadhil Siregar', '123', 'Andrie Fadhil Siregar', 'Staff Produksi', 0, '', '', ' Dusun III BTN Jl. Prasetya III No.119 Kel/Desa Sei Semayang Kec. Sunggal '),
(27, 'Dorlintaria', '123', 'Dorlintaria', 'Staff Produksi', 0, '', '', ' Lumban Siantar Kel/Desa Pollung Kec. Pollung '),
(28, 'Hotman Siregar', '123', 'Hotman Siregar', 'Staff Produksi', 0, '', '', ' Jl. Durung No. 182 Medan Kel/Desa Sidorejo Kec. Medan Tembung '),
(29, 'Morisa Barimbing', '123', 'Morisa Barimbing', 'Staff Produksi', 0, '', '', ' Sihorbo Kel/Desa Sihorbo Kec. Siempat Nempu '),
(30, 'Muhammad Solihin', '123', 'Muhammad Solihin', 'Staff Produksi', 0, '', '', ' Jl. Selamat No. 17 Kel/Desa Kedai Durian Kec. Deli Tua '),
(31, 'Sariadi', '123', 'Sariadi', 'Staff Produksi', 0, '', '', ' Jl. Balai Umum Dusun II Kel/Desa Tembung Kec. Percut Sei Tuan '),
(32, 'Siska Pratiwi', '123', 'Siska Pratiwi', 'Staff Produksi', 0, '', '', ' Dusun I Pematang Kasih Kel/Desa Pematang Kasih Kec. Pantai Cermin '),
(33, 'Tessya', '123', 'Tessya', 'Staff Produksi', 0, '', '', ' -   '),
(34, 'Trie Hatta Mulya', '123', 'Trie Hatta Mulya', 'Staff Produksi', 0, '', '', ' Dusun VII Kel/Desa Marindal II Kec. Patumbak '),
(35, 'Wulan Febriani', '123', 'Wulan Febriani', 'Staff Produksi', 0, '', '', ' Huta I Kel/Desa Sidotani Kec. Bandar '),
(36, 'Rafael Sinaga', '123', 'Rafael Sinaga', 'Staff Sales & Marketing', 0, '', '', ' Ganda Samurung Kel/Desa Pegagan Julu III Kec. Sumbul '),
(37, 'Sriwahyuni', '123', 'Sriwahyuni', 'Staff Sales & Marketing', 0, '', '', ' Dusun IV Kel/Desa Sipaku Area Kec. Simpang Empat '),
(38, 'Hanafi Sanjaya', '123', 'Hanafi Sanjaya', 'Staff Tempahan', 0, '', '', ' Huta Serba Jadi Kel/Desa Dolok Kataran Kec. Dolok Batu Nanggar '),
(39, 'Hendra Gunawan', '123', 'Hendra Gunawan', 'Staff Tempahan', 0, '', '', ' Dusun VII Jl. Kebun Sayur Rambungan I Kel/Desa Bandar Klippa Kec. Percut Sei Tuan '),
(40, 'Hendra Saputra', '123', 'Hendra Saputra', 'Staff Tempahan', 0, '', '', ' Jl. Bhayangkara No. 367 LK VI Kel. Indrakasih Kec. Medan Tembung '),
(41, 'Joni', '123', 'Joni', 'Staff Tempahan', 0, '', '', ' Dusun Getek I Kel/Desa Pantai Cermin Kec. Tanjung Pura '),
(42, 'Liusandra', '123', 'Liusandra', 'Staff Tempahan', 0, '', '', ' -   '),
(43, 'Rahmawaty', '123', 'Rahmawaty', 'Staff Tempahan', 0, '', '', ' Dusun IV Kel/Desa Paya Lombang Kec. Tebing Tinggi '),
(44, 'Soleh Pratama', '123', 'Soleh Pratama', 'Staff Tempahan', 0, '', '', ' Huta VI Bandar Tongah Kel/Desa Bandar Tongah Kec. Bandar Huluan '),
(45, 'Isnaini Raizal Rais', '123', 'Isnaini Raizal Rais', 'Umum', 0, '', '', ' Sei Tualang Kel/Desa Bandar Selamat Kec. Aek Kuo ');

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
  MODIFY `idAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `billofmaterial`
--
ALTER TABLE `billofmaterial`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bommassal`
--
ALTER TABLE `bommassal`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bomperak`
--
ALTER TABLE `bomperak`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bomtempahan`
--
ALTER TABLE `bomtempahan`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cashflow`
--
ALTER TABLE `cashflow`
  MODIFY `idCashflow` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `idCurrency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `detailjurnal`
--
ALTER TABLE `detailjurnal`
  MODIFY `idDetailJurnal` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `factproduction2`
--
ALTER TABLE `factproduction2`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idJabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `idJurnal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `idKatalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kloter`
--
ALTER TABLE `kloter`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `kloter2`
--
ALTER TABLE `kloter2`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialdasar`
--
ALTER TABLE `materialdasar`
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

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
  MODIFY `idPOBerlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pomasal`
--
ALTER TABLE `pomasal`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `poperak`
--
ALTER TABLE `poperak`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potempahan`
--
ALTER TABLE `potempahan`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=952;

--
-- AUTO_INCREMENT for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  MODIFY `idProses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1092;

--
-- AUTO_INCREMENT for table `produkpo`
--
ALTER TABLE `produkpo`
  MODIFY `idProdukPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

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
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=963;

--
-- AUTO_INCREMENT for table `rencanaproduksi2`
--
ALTER TABLE `rencanaproduksi2`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

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
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `spkmasal`
--
ALTER TABLE `spkmasal`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `subspk`
--
ALTER TABLE `subspk`
  MODIFY `idSubSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tipeakun`
--
ALTER TABLE `tipeakun`
  MODIFY `idTipeAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `wadah`
--
ALTER TABLE `wadah`
  MODIFY `idWadah` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
