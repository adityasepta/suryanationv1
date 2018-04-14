-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 06:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

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
(1003, 'Grouping'),
(1004, 'Lilin'),
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
(1, '1', 10, 80, 'Disetujui'),
(2, '2', 9, 80, 'Disetujui'),
(3, '4', 8, 4, 'Disetujui'),
(4, '5', 12, 6, 'Disetujui'),
(5, '6', 13, 30, 'Disetujui');

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
(1, 'Disetor modal tunai ', 'Keluar', 'Bank', 10000000, '2018-04-07 00:00:00'),
(2, 'Pembayaran Bank', 'Keluar', 'Tunai', 1200000, '2018-04-13 00:00:00'),
(3, 'Penjualan kepada Ko Asiong', 'Masuk', 'Bank', 20000000, '2018-04-14 00:00:00'),
(4, 'Pembelian TV LG', 'Keluar', 'Tunai', 12400000, '2018-04-14 00:00:00'),
(5, 'Penjualan kepada Ko Adi', 'Masuk', 'Tunai', 35000000, '2018-04-14 00:00:00');

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
(7, 593500, '2018-04-11 17:38:44');

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
(32, 'Bg Aris', '', '2018-04-11 10:41:57');

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
(3, 2, '1001', 1200000, 'Kredit'),
(4, 2, '1105', 1200000, 'Debit'),
(5, 1, '1001', 10000000, 'Debit'),
(6, 1, '1302', 5000000, 'Kredit'),
(7, 1, '1106', 5000000, 'Kredit'),
(8, 3, '1105', 20000000, 'Debit'),
(9, 3, '1301', 20000000, 'Kredit'),
(10, 4, '1001', 12400000, 'Kredit'),
(11, 4, '2103', 12400000, 'Debit'),
(15, 5, '1001', 35000000, 'Debit'),
(16, 5, '1301', 30000000, 'Kredit'),
(17, 5, '1303', 5000000, 'Kredit');

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

--
-- Dumping data for table `factproduction2`
--

INSERT INTO `factproduction2` (`idProProd`, `idProProdAsal`, `idSPK`, `idSubSPK`, `idWadah`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `beratAwal`, `beratTambahan`, `berat`, `beratKecap`, `kembali`, `jumlah`, `jumlahNow`, `statusBerat`, `statusWork`, `statusRework`, `statusSPK`, `statusPengambilan`) VALUES
(1, 0, 1, 1, 0, 1004, 38, '2018-04-11 09:50:17', '2018-04-11 09:51:35', 0, 0, 0, 0, 0, 20, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(2, 0, 1, 1, 0, 1005, 21, '2018-04-11 09:57:01', '2018-04-11 09:57:08', 0, 0, 0, 0, 0, 20, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(3, 0, 2, 2, 0, 1004, 2, '2018-04-11 09:56:36', '2018-04-11 09:57:22', 0, 0, 0, 0, 0, 10, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(4, 0, 1, 1, 0, 1006, 8, '2018-04-11 09:57:54', '2018-04-11 09:58:58', 80, 0, 75, 30, 45, 20, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(5, 0, 2, 2, 0, 1005, 28, '2018-04-11 09:57:39', '2018-04-11 09:58:04', 0, 0, 0, 0, 0, 10, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(6, 0, 2, 2, 0, 1006, 21, '2018-04-11 09:59:16', '2018-04-11 10:00:42', 74, 0, 70, 69, 49, 10, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(7, 0, 1, 1, 0, 1007, 41, '2018-04-11 10:00:56', '0000-00-00 00:00:00', 30, 0, 30, 0, 0, 20, 20, 'Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(8, 0, 2, 2, 0, 1007, 25, '2018-04-12 14:24:44', '0000-00-00 00:00:00', 69, 0, 0, 0, 0, 10, 10, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(9, 0, 3, 3, 0, 1004, 25, '2018-04-11 14:48:17', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(10, 0, 7, 4, 0, 1004, 25, '2018-04-12 12:33:49', '2018-04-12 14:15:55', 0, 0, 0, 0, 0, 16, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(11, 0, 7, 4, 0, 1005, 16, '2018-04-12 14:17:21', '2018-04-12 14:17:28', 0, 0, 0, 0, 0, 16, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(12, 0, 7, 5, 0, 1004, 25, '2018-04-12 14:16:17', '2018-04-12 14:16:38', 0, 0, 0, 0, 0, 16, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(13, 0, 7, 6, 0, 1004, 25, '2018-04-12 14:16:42', '2018-04-12 14:17:07', 0, 0, 0, 0, 0, 16, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(14, 0, 7, 5, 0, 1005, 25, '2018-04-12 14:18:29', '2018-04-12 14:18:38', 0, 0, 0, 0, 0, 16, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(15, 0, 7, 6, 0, 1005, 25, '2018-04-12 14:18:43', '2018-04-12 14:18:47', 0, 0, 0, 0, 0, 16, 0, 'Belum Disetujui', 'Done', 'No', 'Active', 'Belum'),
(16, 0, 7, 4, 0, 1006, 25, '2018-04-12 14:17:37', '2018-04-12 14:18:04', 434, 0, 7, 7, 7, 16, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(17, 0, 7, 4, 0, 1007, 25, '2018-04-12 14:18:19', '2018-04-12 14:25:53', 7, 0, 1, 0, 0, 16, 0, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(18, 0, 7, 5, 0, 1006, 25, '2018-04-12 14:19:25', '2018-04-12 14:19:49', 2, 0, 1, 1, 1, 16, 7, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(19, 0, 7, 6, 0, 1006, 25, '2018-04-12 14:19:14', '2018-04-12 14:23:43', 1, 0, 80, 80, 80, 16, 7, 'Disetujui', 'Done', 'No', 'Active', 'Belum'),
(20, 0, 7, 5, 0, 1007, 25, '2018-04-12 14:26:07', '0000-00-00 00:00:00', 1, 0, 1, 0, 0, 16, 1, 'Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(21, 0, 7, 6, 0, 1007, 25, '2018-04-12 14:23:57', '0000-00-00 00:00:00', 80, 80, 0, 0, 0, 16, 8, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum'),
(22, 17, 7, 4, 1, 1008, 25, '2018-04-12 14:25:53', '0000-00-00 00:00:00', 1, 0, 0, 0, 0, 16, 7, 'Belum Disetujui', 'On Progress', 'No', 'Active', 'Belum');

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

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`idJurnal`, `idCashflow`, `keterangan`, `tanggal`) VALUES
(1, 1, 'Disetor modal tunai', '2018-04-07 00:00:00'),
(2, 2, 'Pembayran Bank', '2018-04-13 00:00:00'),
(3, 3, 'Penjualan kepada Ko Asiong', '2018-04-14 00:00:00'),
(4, 4, 'Pembelian TV LG', '2018-04-14 00:00:00'),
(5, 5, 'Penjualan kepada Ko Adi', '2018-04-14 00:00:00');

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
  `kodeMaterial` varchar(255) NOT NULL,
  `namaMaterial` varchar(255) NOT NULL,
  `kadar` double NOT NULL,
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

INSERT INTO `materialdasar` (`idMaterial`, `kodeMaterial`, `namaMaterial`, `kadar`, `satuan`, `stokMaterial`, `safetyStock`, `kategori`, `asal`, `color`, `clarity`) VALUES
(2, '1', 'Emas Kuning 96.5%', 96.5, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(3, '2', 'Emas Kuning 80%', 80, 'gr', 0, 0, 'Emas', 'Datang Emas', '', ''),
(4, '3', 'Alloy', 0, 'gr', 993.86, 100, 'Non Emas', 'Asli', '', ''),
(5, '4', 'Perak', 0, 'gr', 993.86, 100, 'Non Emas', 'Asli', '', ''),
(6, '5', 'Tembaga', 0, 'gr', 994.74, 100, 'Non Emas', 'Asli', '', ''),
(7, '6', 'Emas Kuning 70%', 70, 'gr', -10, 0, 'Emas', 'Datang Emas', '', ''),
(8, '7', 'Emas Kuning 60%', 60, 'gr', -4, 0, 'Emas', 'Datang Emas', '', ''),
(9, '8', 'Emas Kuning 8%', 8, 'gr', -52, 0, 'Emas', 'Datang Emas', '', ''),
(10, '9', 'Emas Kuning 99.5%', 99.5, 'gr', 80, 0, 'Emas', 'Datang Emas', '', ''),
(11, '10', 'Balik Bahan 7.5%', 7.5, 'gr', 0, 0, 'Emas', 'Balik Bahan', '', ''),
(12, '10', 'Balik Bahan 88.5%', 88.5, 'gr', -6, 0, 'Emas', 'Balik Bahan', '', ''),
(13, '10', 'Emas Kuning 20%', 20, 'gr', -10, 0, 'Emas', 'Datang Emas', '', ''),
(14, '10', 'Balik Bahan 19.5%', 19.5, 'gr', 0, 0, 'Emas', 'Balik Bahan', '', '');

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
(1, 1, 3, 24, 1, '2018-04-10 00:00:00', '2018-04-17 00:00:00', 590550, 'Emas Kuning', 8, '8', '8', '8', '8', 8, 8, 8, 'Teliti', 'Slap', '', 8, 8, 0, '2018-04-10 16:15:40', 'massal', 3),
(2, 2, 4, 24, 1, '2018-04-10 00:00:00', '2018-04-16 00:00:00', 590550, 'Emas Kuning', 89, '16', '8', '8', '8', 9, 9, 8, 'Teliti', 'Slap,Kombinasi,Kode Cap', '9', 8, 8, 0, '2018-04-10 16:16:00', 'massal', 4),
(3, 3, 5, 21, 1, '2018-04-11 00:00:00', '2018-04-18 00:00:00', 590550, 'Emas Kuning', 60, '18', 'Kuning', 'Kombinasi', 'Cincin Pria', 5, 160, 99.5, 'Teliti', 'Slap,Kombinasi,Kode Cap', 'Kombinasi, Kode Cap AZ', 220, 0, 0, '2018-04-10 17:48:08', 'massal', 5),
(4, 4, 6, 23, 1, '2018-04-11 00:00:00', '2018-04-15 00:00:00', 590550, 'Emas Kuning', 70, '12-18', 'Kuning', 'Kombinasi', 'Cincin Wanita', 5, 100, 70, 'Teliti', 'Slap,Kombinasi,Kode Cap', 'Kombinasi, Kode Cap AZ', 300, 0, 0, '2018-04-10 17:55:00', 'massal', 6),
(5, 5, 8, 32, 19, '2018-04-11 00:00:00', '2018-04-18 00:00:00', 593500, 'Emas Kuning', 55, 'sesuai keterangan', 'Kuning', '', 'Cincin Wanita', 6, 0, 0, 'Teliti', 'Kode Cap', 'cap SM', 300, 0, 6, '2018-04-12 17:54:32', 'massal', 0),
(6, 6, 9, 25, 1, '2018-04-11 00:00:00', '2018-04-12 00:00:00', 593500, 'Emas Kuning', 50, 'manut', 'merah', 'apik', 'apik', 2, 0, 0, 'Teliti', 'Slap,Kombinasi', 'merah', 100, 10, 0, '2018-04-11 10:46:35', 'massal', 0),
(8, 7, 7, 27, 19, '2018-04-11 08:25:31', '2018-04-17 08:28:00', 591000, 'Emas Kuning', 60, '18', 'Kuning', 'Kombinasi', 'Cincin Pria', 5, 0, 0, 'Teliti', '', '', 100, 0, 0, '2018-04-12 16:32:38', 'Massal', 7);

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
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL,
  `idStokBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'CLS01', 'Cincin Kerawang', 'Cincin', 'Massal', '-', 'Pcs', 0, 0, 'SsH7EJuVTT', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-10 12:55:08'),
(2, 'CLS02', 'Cincin Bayi', 'Cincin', 'Massal', 'Cincin ukuran 10 - 13', 'Pcs', 0, 0, '85JiCbyPv4', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-10 14:49:21'),
(3, '5001', 'Ko Rendy-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '22SNzvl02O', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-10 15:22:34'),
(4, '5001', 'Ko Rendy-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'EL7HgVszlE', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-10 15:28:27'),
(5, '3', 'Ko Asu-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'qEdki0Fwhm', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-10 17:48:08'),
(6, '4', 'Ko Taro-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'MPyhWEmUZl', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-10 17:54:59'),
(7, 'CSN 2', 'Cincin Sisik Naga', 'Cincin', 'Massal', '', 'Pcs', 0, 0, 'SmRsjCtGcc', NULL, NULL, NULL, NULL, 0, 'Tampil', '2018-04-11 10:37:00'),
(8, '5', 'Bg Aris-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'Ea7PImaIwf', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-11 10:41:57'),
(9, '6', 'Ko Salim-Agregat', 'Agregat', 'Massal', '', '', 0, 0, 'Bxk4ZqjDiA', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-11 10:46:35'),
(10, '7', 'Bambang-Agregat', 'Agregat', 'Massal', '', '', 0, 0, '6nc1K2n8iJ', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-12 05:26:31');

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
(1, 4, 1004, 0, 0),
(2, 4, 1005, 0, 0),
(3, 4, 1006, 0, 0),
(4, 4, 1007, 0, 0),
(5, 4, 1008, 0, 0),
(6, 4, 1009, 0, 0),
(7, 4, 1010, 0, 0),
(8, 4, 1011, 0, 0),
(9, 4, 1012, 0, 0),
(10, 4, 1013, 0, 0),
(11, 4, 1014, 0, 0),
(12, 3, 1004, 0, 0),
(13, 3, 1005, 0, 0),
(14, 3, 1006, 0, 0),
(15, 3, 1007, 0, 0),
(16, 3, 1008, 0, 0),
(17, 3, 1009, 0, 0),
(18, 3, 1010, 0, 0),
(19, 3, 1011, 0, 0),
(20, 3, 1012, 0, 0),
(21, 3, 1013, 0, 0),
(22, 3, 1014, 0, 0),
(23, 5, 1004, 0, 0),
(24, 5, 1005, 0, 0),
(25, 5, 1006, 0, 0),
(26, 5, 1007, 0, 0),
(27, 5, 1008, 0, 0),
(28, 5, 1009, 0, 0),
(29, 5, 1010, 0, 0),
(30, 5, 1011, 0, 0),
(31, 5, 1012, 0, 0),
(32, 5, 1013, 0, 0),
(33, 5, 1014, 0, 0),
(34, 10, 1004, 0, 0),
(35, 10, 1005, 0, 0),
(36, 10, 1006, 0, 0),
(37, 10, 1007, 0, 0),
(38, 10, 1008, 0, 0),
(39, 10, 1009, 0, 0),
(40, 10, 1010, 0, 0),
(41, 10, 1011, 0, 0),
(42, 10, 1012, 0, 0),
(43, 10, 1013, 0, 0),
(44, 10, 1014, 0, 0);

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
(1, 2, 5001, 1, 'Assa'),
(2, 2, 5001, 2, 'SAAS'),
(3, 3, 3, 1, '12'),
(4, 3, 3, 2, '15'),
(5, 3, 3, 1, '18'),
(6, 4, 4, 2, 'poil'),
(7, 4, 4, 2, 'loki'),
(8, 4, 4, 1, 'iuyt'),
(9, 4, 4, 1, 'bver'),
(11, 6, 6, 1, 'ukuran 22'),
(12, 6, 6, 2, 'ukuran 24'),
(13, 7, 7, 1, '12'),
(16, 5, 5, 7, '8-13');

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
(1, 2, 1004, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(2, 2, 1005, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(3, 2, 1006, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(4, 2, 1007, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(5, 2, 1008, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(6, 2, 1009, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(7, 2, 1010, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(8, 2, 1011, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(9, 2, 1012, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(10, 2, 1013, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(11, 2, 1014, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(12, 1, 1004, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(13, 1, 1005, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(14, 1, 1006, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(15, 1, 1007, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(16, 1, 1008, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(17, 1, 1009, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(18, 1, 1010, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(19, 1, 1011, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(20, 1, 1012, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(21, 1, 1013, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(22, 1, 1014, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(23, 3, 1004, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(24, 3, 1005, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(25, 3, 1006, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(26, 3, 1007, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(27, 3, 1008, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(28, 3, 1009, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(29, 3, 1010, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(30, 3, 1011, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(31, 3, 1012, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(32, 3, 1013, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(33, 3, 1014, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(34, 7, 1004, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(35, 7, 1005, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(36, 7, 1006, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(37, 7, 1007, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(38, 7, 1008, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(39, 7, 1009, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(40, 7, 1010, '2018-04-18 00:00:00', '2018-04-18 00:00:00'),
(41, 7, 1011, '2018-04-19 00:00:00', '2018-04-19 00:00:00'),
(42, 7, 1012, '2018-04-20 00:00:00', '2018-04-20 00:00:00'),
(43, 7, 1013, '2018-04-21 00:00:00', '2018-04-21 00:00:00'),
(44, 7, 1014, '2018-04-22 00:00:00', '2018-04-22 00:00:00');

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
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusSPK` varchar(100) NOT NULL DEFAULT 'On progress'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `prioritas` int(11) NOT NULL,
  `statusSPK` varchar(15) NOT NULL DEFAULT 'On progress'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spkmasal`
--

INSERT INTO `spkmasal` (`idSPK`, `nomorFaktur`, `nomorPO`, `idProduk`, `idCustomer`, `statusBOM`, `tanggalApprovalBOM`, `PICBOM`, `statusJadwal`, `tanggalApprovalJadwal`, `PICJadwal`, `statusPersetujuan`, `tanggalApprovalPersetujuan`, `PICPersetujuan`, `lastModified`, `prioritas`, `statusSPK`) VALUES
(1, 1, 1, 3, 24, 'Disetujui', '2018-04-11 09:43:25', 19, 'Disetujui', '2018-04-10 23:14:02', 19, 'Disetujui', '2018-04-11 09:53:27', 19, '2018-04-11 02:53:27', 0, 'On progress'),
(2, 2, 2, 4, 24, 'Disetujui', '2018-04-11 09:53:21', 19, 'Disetujui', '2018-04-10 23:13:55', 19, 'Disetujui', '2018-04-11 09:57:28', 19, '2018-04-11 02:57:28', 0, 'On progress'),
(3, 3, 3, 5, 21, 'Disetujui', '2018-04-11 14:48:06', 19, 'Sudah Ada', '2018-04-11 14:47:59', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, '2018-04-11 07:48:06', 0, 'On progress'),
(4, 4, 4, 6, 23, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, '2018-04-10 17:55:07', 0, 'On progress'),
(5, 5, 5, 8, 32, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, '2018-04-11 10:41:57', 0, 'On progress'),
(6, 6, 6, 9, 25, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, '2018-04-11 10:46:35', 0, 'On progress'),
(7, 7, 7, 10, 27, 'Disetujui', '2018-04-12 14:16:06', 19, 'Disetujui', '2018-04-12 12:33:24', 19, 'Disetujui', '2018-04-12 14:16:11', 19, '2018-04-12 07:16:11', 0, 'On progress');

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
(1, 19, 0, 'Material Dasar', '8', 8, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-10 22:19:32', ''),
(2, 19, 0, 'Material Dasar', '8', 8, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-10 22:21:58', ''),
(3, 19, 0, 'Material Dasar', '8', 8, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-10 22:22:34', ''),
(4, 19, 0, 'Material Dasar', '8', 9, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-10 22:28:27', ''),
(5, 19, 0, 'Material Dasar', '9', 160, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-11 00:48:08', ''),
(6, 19, 0, 'Material Dasar', '6', 100, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-11 00:54:57', ''),
(7, 19, 0, 'Material Dasar', '9', 80, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-11 09:58:58', ''),
(8, 1, 0, 'Produk Semi Jadi', '3', 30, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-11 09:58:58', ''),
(9, 19, 0, 'Material Dasar', '10', 45, 'gr', 'IN', 'Balik Bahan', 'Valid', 0, '2018-04-11 09:58:58', ''),
(10, 19, 0, 'Material Dasar', '8', 80, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-11 10:00:42', ''),
(11, 1, 0, 'Produk Semi Jadi', '4', 69, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-11 10:00:43', ''),
(12, 19, 0, 'Material Dasar', '10', 49, 'gr', 'IN', 'Balik Bahan', 'Valid', 0, '2018-04-11 10:00:43', ''),
(13, 19, 0, 'Material Dasar', '10', 20, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-12 12:26:30', ''),
(14, 9, 0, 'Material Dasar', '7', 4, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-12 14:18:04', ''),
(15, 1, 0, 'Produk Semi Jadi', '10', 7, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-12 14:18:04', ''),
(16, 9, 0, 'Material Dasar', '10', 7, 'gr', 'IN', 'Balik Bahan', 'Valid', 0, '2018-04-12 14:18:05', ''),
(17, 9, 0, 'Material Dasar', '10', 6, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-12 14:19:49', ''),
(18, 1, 0, 'Produk Semi Jadi', '10', 1, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-12 14:19:50', ''),
(19, 9, 0, 'Material Dasar', '10', 1, 'gr', 'IN', 'Balik Bahan', 'Valid', 0, '2018-04-12 14:19:50', ''),
(20, 9, 0, 'Material Dasar', '10', 30, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-12 14:23:43', ''),
(21, 1, 0, 'Produk Semi Jadi', '10', 80, 'gr', 'IN', 'Produksi', 'Valid', 0, '2018-04-12 14:23:43', ''),
(22, 9, 0, 'Material Dasar', '10', 80, 'gr', 'IN', 'Balik Bahan', 'Valid', 0, '2018-04-12 14:23:43', ''),
(24, 5, 0, 'Material Dasar', '1', 20, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-04-13 12:21:59', 'Bahan Datang dari Ko Asiong'),
(25, 5, 0, 'Material Dasar', '8', 20, 'gr', 'IN', 'Beli Material', 'Valid', 0, '2018-04-13 12:29:00', 'Beli Emas Aja');

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
(1, 1),
(2, 2),
(3, 3),
(4, 7),
(5, 7),
(6, 7);

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
(5, 'Melita Sari Lubis', '123', 'Melita Sari Lubis', 'General Affair', 0, '', '', ' Jl. Pendidikan Gg. Kasih Dusun II Kel/Desa Bandar setia Kec. Percut Sei Tuan '),
(6, 'Muhammad Andre', '123', 'Muhammad Andre', 'Staff Desain Tempahan', 0, '', '', ' Dusun II Desa Pematang Kasih Kec. Pantai Cermin Kab. Serdang Bedagai '),
(7, 'Susi wana Pasaribu', '123', 'Susi wana Pasaribu', 'Leader Finishing', 0, '', '', ' Sisolu-soli Kel/Desa Pegangan Julu V Kec. Sumbul '),
(8, 'Hendra', '123', 'Hendra', 'Leader Produksi', 0, '', '', ' Jl. Selam I Gg. Saudara No. 30 Kel/desa Tegal S. Mandala I Kec. Medan Denai '),
(9, 'Wenny', '123', 'Wenny Aleesa Ramadani', 'Leader Produksi', 0, '', '', ' Huta II Afd I Laras Kel/Desa Laras Kec. Bandar Huluan '),
(10, 'Riki Andika', '123', 'Riki Andika', 'Leader Tempahan', 0, '', '', ' Dusun IX Pasar Kacang Kel/Desa Sei Muka Kec. Talawi '),
(11, 'Vivi Eliza Elthia', '123', 'Vivi Eliza Elthia', 'Manager Sales & Marketing', 0, '', '', ' -   '),
(12, 'Maxim Swandie Colin Jien', '123', 'Maxim Swandie Colin Jien', 'Owner', 0, '', '', ' Jl. Kota Baru '),
(13, 'Franziska Sarveshi Fenty', '123', 'Franziska Sarveshi Fenty', 'PPIC Tempahan', 0, '', '', ' Jl. Danau Melintang No. 81 MedanKel/Desa Sei Agul Kec. Medan Barat  '),
(14, 'Rina Rahmadani', '123', 'Rina Rahmadani', 'Staff Accounting', 0, '', '', ' Jl. Kenanga XV No. 02 TG. Sari Kel Tanjung Sari Kec. Medan Selayang '),
(15, 'Armiah', '123', 'Armiah', 'Staff Desain Tempahan', 0, '', '', ' Dusun II Kel/Desa Pematang guntung Kec. Teluk Mengkudu '),
(16, 'Irvan', '123', 'Irvan', 'Staff Desain Tempahan', 0, '', '', ' Dusun Getek I Kel/Desa Pantai Cermin Kec. Tanjung Pura '),
(17, 'Muhammad Yusuf Nasution', '123', 'Muhammad Yusuf Nasution', 'Staff Desain Tempahan', 0, '', '', ' Pematang Guntung Kel/Desa Pematang guntung Kec. Teluk Mengkudu '),
(18, 'Roberto Efendi Sinaga', '123', 'Roberto Efendi Sinaga', 'Staff Desain Tempahan', 0, '', '', ' Komplek Rumah Sakit Balimbingan Kel/Desa Balimbingan Kec. Tanah Jawa '),
(19, 'Susanti', '123', 'Susanti', 'Staff Keuangan', 0, '', '', ' Jl. Budi Luhur LK. I No. 40 B Kel/Desa Dwikora Kec. Medan Helvetia '),
(20, 'Darma', '123', 'Darma', 'Staff Krum', 0, '', '', ' -   '),
(21, 'Irfan Juhari', '123', 'Irfan Juhari', 'Staff Krum', 0, '', '', ' Serba Jadi Kel/Desa Dolok Kataran Kec. Dolok Batu Nanggar '),
(22, 'Mas Andi Susanto', '123', 'Mas Andi Susanto', 'Staff Krum', 0, '', '', ' Jl. P. Kemerdekaan LK IV Kel/Desa Cengkeh Turi Kec. Binjai Utara '),
(23, 'Sarida Hanum Ritonga', '123', 'Sarida Hanum Ritonga', 'Staff Krum', 0, '', '', ' Jl. Bersama No. 112 Medan Kel/Desa Bantan Kec. Medan Tembung '),
(24, 'Sandi Putra Lelono', '123', 'Sandi Putra Lelono', 'Staff Microsetting', 0, '', '', ' Jl. Kalianyar Kel/Desa Kalianyar Kec. Tambora '),
(25, 'Ali Imron', '123', 'Ali Imron', 'Staff Produksi', 0, '', '', ' Jl. Pembangunan Desa Kolam Kel/Desa Kolam Kec. Percut Sei Tuan '),
(26, 'Andrie Fadhil Siregar', '123', 'Andrie Fadhil Siregar', 'Staff Produksi', 0, '', '', ' Dusun III BTN Jl. Prasetya III No.119 Kel/Desa Sei Semayang Kec. Sunggal '),
(27, 'Dorlintaria Lumban Gaol', '123', 'Dorlintaria Lumban Gaol', 'Staff Produksi', 0, '', '', ' Lumban Siantar Kel/Desa Pollung Kec. Pollung '),
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
(45, 'Isnaini Raizal Rais', '123', 'Isnaini Raizal Rais', 'Umum', 0, '', '', ' Sei Tualang Kel/Desa Bandar Selamat Kec. Aek Kuo '),
(48, 'admprod', '123', 'admprod', 'Admin Produksi 2', 5, NULL, NULL, NULL);

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
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `idCashflow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `idCurrency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `detailjurnal`
--
ALTER TABLE `detailjurnal`
  MODIFY `idDetailJurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `detailpurchaseorderservice`
--
ALTER TABLE `detailpurchaseorderservice`
  MODIFY `idDetailPO` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
  MODIFY `idJurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
-- AUTO_INCREMENT for table `pomasal`
--
ALTER TABLE `pomasal`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `poperak`
--
ALTER TABLE `poperak`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `potempahan`
--
ALTER TABLE `potempahan`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  MODIFY `idProses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `produkpo`
--
ALTER TABLE `produkpo`
  MODIFY `idProdukPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `produktrading`
--
ALTER TABLE `produktrading`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchaseorderservice`
--
ALTER TABLE `purchaseorderservice`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rencanaproduksi2`
--
ALTER TABLE `rencanaproduksi2`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
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
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `spkmasal`
--
ALTER TABLE `spkmasal`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `spkperak`
--
ALTER TABLE `spkperak`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `spkservice`
--
ALTER TABLE `spkservice`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stokbarang`
--
ALTER TABLE `stokbarang`
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `subspk`
--
ALTER TABLE `subspk`
  MODIFY `idSubSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tipeakun`
--
ALTER TABLE `tipeakun`
  MODIFY `idTipeAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `wadah`
--
ALTER TABLE `wadah`
  MODIFY `idWadah` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
