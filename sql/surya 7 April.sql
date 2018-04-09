-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 09:16 AM
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
(1, '29', 7, 605, 'Disetujui'),
(2, '30', 7, 495, 'Disetujui'),
(3, '31', 7, 440, 'Disetujui'),
(4, '39', 7, 385, 'Disetujui'),
(5, '32', 7, 242, 'Disetujui');

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
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bomtempahan`
--

INSERT INTO `bomtempahan` (`idBOM`, `idKloter`, `idMaterial`, `jumlah`) VALUES
(1, 'VPXGLTiUez', 7, 264);

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
(1, 590280, '2018-04-06 11:18:22');

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
(30, 'Ko Jery', '8123180188', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `factproduction`
--

INSERT INTO `factproduction` (`idProProd`, `idSPK`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `beratAwal`, `beratTambahan`, `berat`, `kembali`, `statusBerat`, `statusWork`, `statusSPK`, `statusPengambilan`) VALUES
(1, 1, 1004, 25, '2018-04-06 15:40:09', '2018-04-06 15:40:47', 0, 0, 0, 0, '', 'Done', 'Done', 'Belum'),
(2, 1, 1005, 20, '2018-04-06 15:40:52', '2018-04-06 15:40:58', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(3, 1, 1006, 13, '2018-04-06 15:41:05', '2018-04-06 15:41:12', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(4, 1, 1007, 38, '2018-04-06 15:42:07', '2018-04-06 15:42:36', 300, 0, 299, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(5, 1, 1014, 5, '2018-04-06 15:43:07', '2018-04-06 15:43:07', 299, 0, 299, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum');

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
(29, 0, 1, 29, 0, 1004, 16, '2018-04-05 22:37:33', '2018-04-05 22:46:58', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(30, 0, 2, 30, 0, 1004, 16, '2018-04-05 22:47:04', '2018-04-05 22:49:29', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(31, 0, 3, 31, 0, 1004, 16, '2018-04-05 22:49:36', '2018-04-05 22:49:55', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(32, 0, 4, 32, 0, 1004, 40, '2018-04-06 21:43:19', '2018-04-06 21:43:45', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(33, 0, 5, 33, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(34, 0, 6, 34, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(35, 0, 7, 35, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(36, 0, 8, 36, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(37, 0, 9, 37, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(38, 0, 10, 38, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'No', 'Active', 'Belum'),
(39, 0, 1, 29, 0, 1005, 40, '2018-04-05 22:50:05', '2018-04-05 22:50:14', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(40, 0, 2, 30, 0, 1005, 40, '2018-04-05 22:50:24', '2018-04-05 22:50:31', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(41, 0, 3, 31, 0, 1005, 40, '2018-04-05 22:51:13', '2018-04-05 22:51:19', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(42, 0, 1, 29, 0, 1006, 42, '2018-04-05 22:51:49', '2018-04-05 22:58:13', 80, 0, 79, 78, 0, 15, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(43, 0, 2, 30, 0, 1006, 25, '2018-04-05 23:15:28', '2018-04-05 23:16:29', 80, 0, 79, 78, 0, 16, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(44, 0, 3, 31, 0, 1006, 9, '2018-04-05 23:18:04', '2018-04-05 23:18:33', 80, 0, 79, 78.5, 0, 17, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(45, 0, 1, 29, 0, 1007, 25, '2018-04-05 22:58:23', '2018-04-05 23:16:51', 78, 0, 77, 0, 0, 15, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(46, 0, 2, 30, 0, 1007, 2, '2018-04-05 23:17:11', '2018-04-05 23:17:40', 78, 0, 76, 0, 0, 16, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(47, 45, 1, 29, 1, 1014, 2, '2018-04-05 23:16:51', '2018-04-05 23:20:10', 78, 0, 77, 0, 0, 15, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(48, 46, 2, 30, 2, 1014, 2, '2018-04-05 23:17:40', '2018-04-05 23:19:58', 78, 0, 77, 0, 0, 16, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(49, 0, 3, 31, 0, 1007, 2, '2018-04-05 23:18:44', '2018-04-05 23:19:19', 78.5, 0, 156.5, 0, 0, 17, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(50, 49, 3, 31, 3, 1014, 2, '2018-04-05 23:19:19', '2018-04-05 23:19:38', 78, 0, 77.5, 0, 0, 17, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(51, 0, 11, 39, 0, 1004, 9, '2018-04-06 20:15:21', '2018-04-06 20:16:06', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(52, 0, 11, 39, 0, 1005, 9, '2018-04-06 20:16:23', '2018-04-06 20:16:28', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(53, 0, 11, 39, 0, 1006, 9, '2018-04-06 20:16:45', '2018-04-06 20:17:46', 30, 0, 18, 17.8, 11.8, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(54, 0, 11, 39, 0, 1007, 1, '2018-04-06 20:18:05', '2018-04-06 20:18:40', 17.8, 0, 17.6, 0, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(55, 54, 11, 39, 4, 1008, 1, '2018-04-06 20:18:40', '2018-04-06 20:30:13', 17.6, 0, 17.6, 0, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(56, 55, 11, 39, 5, 1009, 1, '2018-04-06 20:30:13', '2018-04-06 20:30:50', 17.6, 0, 17.6, 0, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(57, 56, 11, 39, 6, 1014, 28, '2018-04-06 20:30:50', '2018-04-06 20:31:03', 17.6, 0, 17.6, 0, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(58, 0, 4, 32, 0, 1005, 39, '2018-04-06 21:43:54', '2018-04-06 21:45:23', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(59, 0, 4, 32, 0, 1006, 25, '2018-04-06 21:45:49', '2018-04-06 21:46:29', 130, 0, 72, 71.9, 58, 20, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(60, 0, 4, 32, 0, 1007, 28, '2018-04-06 21:46:41', '2018-04-06 21:47:31', 71.9, 0, 71.7, 0, 0, 20, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(61, 60, 4, 32, 7, 1014, 20, '2018-04-06 21:47:31', '2018-04-06 21:47:54', 7.7, 0, 7.6, 0, 0, 20, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum');

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

--
-- Dumping data for table `invoiceheader`
--

INSERT INTO `invoiceheader` (`idHeader`, `nomorPO`, `total`, `datangEmas`, `jenisInvoice`, `tipeInvoice`, `lastModified`) VALUES
(1, '1', 150595000, 0, 'tempahan', 'perseorangan', '2018-04-06 09:02:43'),
(3, '1,2,3', 155.875, 130, 'massal', 'pertokoan', '2018-04-06 15:07:24'),
(4, '11', 3.168, 9, 'massal', 'pertokoan', '2018-04-06 14:54:04');

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

--
-- Dumping data for table `invoicemassal`
--

INSERT INTO `invoicemassal` (`idInvoiceMassal`, `idHeader`, `nomorPO`, `kadar`, `upah`, `kuantitas`, `berat`) VALUES
(2, 3, 1, 60, 10, 15, 77),
(3, 3, 2, 60, 5, 16, 77),
(4, 3, 3, 60, 7, 17, 77.5),
(5, 4, 11, 9, 9, 10, 17.6);

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

--
-- Dumping data for table `invoicetempahanperseorangan`
--

INSERT INTO `invoicetempahanperseorangan` (`idTempahan`, `idHeader`, `nomorPO`, `beratTotal`, `beratBatu`, `susut`, `beratAkhir`, `hargaAkhir`, `beratHargaAkhir`, `upah`, `jumlahDatangBerlian`, `upahPasangBerlian`, `upahBerlian`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `upahCZ`, `hargaKrumWarna`, `datangEmas`, `hargaDatangEmas`, `totalDatangEmas`, `panjar`, `total`) VALUES
(1, 1, '1', 299, 0, 2, 301, 500000, 150500000, 150000, 0, 0, 0, 5, 5000, 25000, 120000, 0, 0, 0, 200000, 150595000);

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

--
-- Dumping data for table `kloter`
--

INSERT INTO `kloter` (`idGroup`, `idKloter`, `idSPK`, `nama`, `kadar`, `tgl_kloter`) VALUES
(1, 'VPXGLTiUez', 1, '80', 80, '2018-04-06 15:40:01');

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
(7, '101', 'Emas Kuning 65%', 65, 'gr', 30, 100, 'Emas', 'Asli', '', ''),
(8, '102', 'Emas Kuning 63%', 63, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(9, '103', 'Emas Kuning 60%', 60, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(10, '104', 'Emas Kuning 59.5%', 59.5, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(11, '105', 'Emas Kuning 48%', 48, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(12, '106', 'Emas Kuning 40%', 40, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(13, '107', 'Emas Kuning 38%', 38, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(14, '201', 'Emas Rose Gold 75%', 75, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(15, '202', 'Emas Rose Gold 70%', 70, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(16, '203', 'Emas Putih 70%', 70, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(17, '204', 'Emas Putih 75%', 75, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(18, '205', 'Emas Kuning 70%', 70, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(19, '206', 'Emas Kuning 80%', 80, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(20, '207', 'Emas Swasa 50%', 50, 'gr', 0, 100, 'Emas', 'Asli', '', ''),
(21, '301', 'Alloy', 0, 'gr', 0, 100, 'Non Emas', 'Asli', '', ''),
(22, '302', 'Tembaga', 0, 'gr', 0, 100, 'Non Emas', 'Asli', '', ''),
(23, '303', 'Perak', 0, 'gr', 0, 100, 'Non Emas', 'Asli', '', ''),
(24, '304', 'Paladium', 0, 'gr', 0, 100, 'Non Emas', 'Asli', '', ''),
(25, 'emas43', 'Emas Kuning 43 %', 43, 'gr', 200, 10, 'Emas', 'Asli', '', ''),
(26, 'TNXBOgQd0D', 'Emas Kuning 56%', 56, 'gr', 200, 0, 'Emas', 'Datang Emas', '', ''),
(27, 'PGE1x8nzjl', 'Emas Kuning 9%', 0, 'gr', 9, 0, 'Emas', 'Datang Emas', '', ''),
(28, '454RFUGMiu', 'Emas Kuning 9%', 0, 'gr', 9, 0, 'Emas', 'Datang Emas', '', ''),
(29, 'KYr78gks5v', 'Emas Kuning %', 62, 'gr', 0.5, 0, 'Emas', 'Balik Abu', '', '');

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

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_user`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `u1`, `u2`, `rataHarapanT`, `rataHarapanR`, `rataHarapanRE`, `rataHarapanA`, `rataHarapanE`, `rataRealisasiT`, `rataRealisasiR`, `rataRealisasiRE`, `rataRealisasiA`, `rataRealisasiE`, `rataHarapan`, `rataRealisasi`, `dateCreated`) VALUES
(1, 1, 3, 4, 5, 5, 3, 2, 4, 3, 5, 6, 5, 2, 3, 4, 5, 5, 5, 4, 6, 3, 87, 99, 3.5, 5, 2.5, 3.5, 5.5, 3.5, 3.5, 5, 4.5, 4.5, 4, 4.2, '2018-03-13 16:03:58'),
(2, 1, 5, 5, 5, 5, 2, 4, 5, 3, 3, 3, 3, 4, 3, 4, 5, 6, 4, 5, 5, 5, 69, 22, 5, 5, 3, 4, 3, 3.5, 3.5, 5.5, 4.5, 5, 4, 4.4, '2018-03-18 08:26:13'),
(3, 1, 5, 5, 5, 3, 6, 5, 5, 3, 3, 5, 3, 4, 1, 5, 4, 5, 6, 6, 4, 5, 22, 73, 5, 4, 5.5, 4, 4, 3.5, 3, 4.5, 6, 4.5, 4.5, 4.3, '2018-03-18 08:02:38'),
(4, 1, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 100, 100, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, '2018-03-23 13:32:00');

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
(1, 1, 1, 21, 21, '2018-04-05 17:45:00', '2018-04-14 17:45:00', 543000, 'Emas Kuning', 60, '12, 13, 15', 'Kuning', 'Ngedoff', 'Kombinasi', 10, 20, 56, 'Teliti', 'Slap', 'Ndangan', 300, 0, 0, '2018-04-06 04:32:30', 'massal', 9),
(2, 2, 2, 21, 21, '2018-04-05 15:49:00', '2018-04-14 16:54:00', 543000, 'Emas Kuning', 60, '18', 'Kuning', 'Ngedoff', 'Kombinasi', 5, 60, 60, 'Teliti', 'Slap', 'Ndangan', 200, 0, 0, '2018-04-06 04:32:56', 'massal', 10),
(3, 3, 3, 21, 21, '2018-04-05 15:35:00', '2018-04-14 13:47:00', 543000, 'Emas Kuning', 60, '16', 'Kuning', 'Ngedoff', 'Kombinasi', 7, 50, 80, 'Teliti', 'Kombinasi', 'Ndangan', 100, 0, 0, '2018-04-05 11:29:17', 'massal', 11),
(4, 4, 4, 24, 24, '2018-04-05 14:00:00', '2018-04-14 20:47:00', 543000, 'Emas Kuning', 60, '20', 'Kuning', 'Ngedoff', 'Kombinasi', 5, 80, 90, 'Teliti', 'Kombinasi', 'Ndangan', 120, 0, 0, '2018-04-05 11:29:22', 'massal', 12),
(5, 5, 5, 25, 25, '2018-04-05 11:37:00', '2018-04-14 11:29:00', 543000, 'Emas Kuning', 65, '15', 'Kuning', 'Ngedoff', 'Kombinasi', 5, 155, 80, 'Teliti', 'Kombinasi', 'Ndangan', 180, 0, 0, '2018-04-05 11:29:27', 'massal', 13),
(6, 6, 6, 26, 26, '2018-04-05 13:46:00', '2018-04-14 13:29:00', 543000, 'Emas Kuning', 65, '17', 'Kuning', 'Ngedoff', 'Kombinasi', 5, 230, 60, 'Teliti', 'Kode Cap', 'Ndangan', 250, 0, 0, '2018-04-05 11:29:31', 'massal', 14),
(7, 7, 7, 27, 27, '2018-04-05 19:47:00', '2018-04-14 14:33:00', 543000, 'Emas Kuning', 65, '21', 'Kuning', 'Ngedoff', 'Kombinasi', 5, 60, 50, 'Teliti', 'Kode Cap', 'Ndangan', 76, 0, 0, '2018-04-05 11:29:36', 'massal', 15),
(8, 8, 8, 28, 28, '2018-04-05 08:20:00', '2018-04-14 12:30:00', 543000, 'Emas Kuning', 70, '22', 'Kuning', 'Ngedoff', 'Kombinasi', 5, 0, 0, 'Teliti', '', '', 40, 0, 0, '2018-04-05 11:29:40', 'massal', 0),
(9, 9, 9, 29, 29, '2018-04-05 14:45:00', '2018-04-14 09:23:00', 543000, 'Emas Kuning', 75, '19', 'Kuning', 'Ngedoff', 'Kombinasi', 5, 0, 0, 'Teliti', '', '', 30, 0, 0, '2018-04-05 11:29:45', 'massal', 0),
(10, 10, 10, 29, 29, '2018-04-05 15:51:00', '2018-04-14 13:41:00', 543000, 'Emas Kuning', 55, '18', 'Kuning', 'Ngedoff', 'Kombinasi', 5, 195, 55, 'Teliti', '', '', 225, 0, 0, '2018-04-05 11:29:49', 'massal', 16),
(11, 11, 2, 21, 36, '2018-04-06 00:00:00', '2018-04-14 00:00:00', 9, 'Emas Kuning', 9, '9', '9', '9', '9', 9, 9, 9, 'Teliti', 'Slap,Kombinasi', '9', 99, 9, 0, '2018-04-06 13:14:08', 'massal', 36);

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

--
-- Dumping data for table `potempahan`
--

INSERT INTO `potempahan` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `biayaTambahan`, `kuantitas`, `beratAkhir`, `susut`, `bahan`, `kadarBahan`, `namaBatu`, `beratBatu`, `batuTerhadapKruman`, `batuTerhadapPukulan`, `batuTerhadapGoresan`, `keadaanBatuTengah`, `ukuranJari`, `berlian`, `beratBerlian`, `hargaBerlian`, `batuZirkon`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `krumWarna`, `hargaKrumWarna`, `keteranganKrum`, `tipeIkatan`, `model`, `metode`, `budget`, `panjar`, `totalHarga`, `lastModified`, `tipeOrder`, `idStokBarang`) VALUES
(1, 1, 12, 23, 36, '2018-04-05 00:00:00', '2018-04-14 00:00:00', 60000, 150000, 0, 0, 0, '', 0, 0, 'Teliti', 'Tidak Ada', '', 0, 1, 30, 1, 'Emas Kuning', 80, '0', 0, '', '', '', '', '18', '0', 0, 0, '', 0, 0, 'Kuning', 120000, 'Kombinasi', 'Bungkus', 'Cincin Wanita', 'Design', 450000, 200000, 150000, '2018-04-05 12:42:39', 'custom', 0);

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
(1, 'WER 121', 'Ko Asu', 'Cincin', 'Massal', 'Bahan Emas, Ukuran 18', 'pcs', 0, 0, 'TNXBOgQd0D', NULL, NULL, NULL, NULL, 25, 'Tidak Tampil', '2018-04-07 06:11:02'),
(2, 'WER 122', 'Ko Alim', 'Gelang', 'Massal', 'Bahan Emas, Ukuran 19', 'pcs', 0, 0, 'TNXBOgQd0r', NULL, NULL, NULL, NULL, 26, 'Tidak Tampil', '2018-04-06 13:31:04'),
(3, 'WER 123', 'Ko Taro', 'Anting', 'Massal', 'Bahan Emas, Ukuran 20', 'pcs', 0, 0, 'TNXBOgQd0u', NULL, NULL, NULL, NULL, 17, 'Tidak Tampil', '2018-04-05 16:19:38'),
(4, 'WER 124', 'Ko Rendy', 'Cincin', 'Massal', 'Bahan Emas, Ukuran 21', 'pcs', 0, 0, 'TNXBOgQd0p', NULL, NULL, NULL, NULL, 20, 'Tidak Tampil', '2018-04-06 14:47:54'),
(5, 'WER 125', 'Ko Salim', 'Gelang', 'Massal', 'Bahan Emas, Ukuran 22', 'pcs', 0, 0, 'TNXBOgQd0z', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(6, 'WER 126', 'Ci Rita', 'Anting', 'Massal', 'Bahan Emas, Ukuran 23', 'pcs', 0, 0, 'TNXBOgQd0a', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(7, 'WER 127', 'Bambang', 'Cincin', 'Massal', 'Bahan Emas, Ukuran 24', 'pcs', 0, 0, 'TNXBOgQd0v', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(8, 'WER 128', 'Bimbi', 'Gelang', 'Massal', 'Bahan Emas, Ukuran 25', 'pcs', 0, 0, 'TNXBOgQd0c', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(9, 'WER 129', 'Vera', 'Anting', 'Massal', 'Bahan Emas, Ukuran 26', 'pcs', 0, 0, 'TNXBOgQd0g', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(10, 'WER 130', 'Ko Jery', 'Cincin', 'Massal', 'Bahan Emas, Ukuran 27', 'pcs', 0, 0, 'TNXBOgQd0h', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '0000-00-00 00:00:00'),
(11, 'CLS01', 'Ko Taro-1-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'FtKxwSmERR', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-05 12:40:00'),
(12, 'CLS02', 'Ko Taro-1-0', 'Cincin', 'Tempahan', '', '', 0, 0, 'C5ThurmssN', NULL, NULL, NULL, NULL, 1, 'Tidak Tampil', '2018-04-06 08:43:07');

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
(1, 1, 1004, 0, 0),
(2, 1, 1005, 0, 0),
(3, 1, 1006, 0, 0),
(4, 1, 1007, 0, 0),
(5, 1, 1008, 0, 0),
(6, 1, 1009, 0, 0),
(7, 1, 1010, 0, 0),
(8, 1, 1011, 0, 0),
(9, 1, 1012, 0, 0),
(10, 1, 1013, 0, 0),
(11, 1, 1014, 0, 0),
(12, 1, 1004, 0, 0),
(13, 1, 1005, 0, 0),
(14, 1, 1006, 0, 0),
(15, 1, 1007, 0, 0),
(16, 1, 1008, 0, 0),
(17, 1, 1009, 0, 0),
(18, 1, 1010, 0, 0),
(19, 1, 1011, 0, 0),
(20, 1, 1012, 0, 0),
(21, 1, 1013, 0, 0),
(22, 1, 1014, 0, 0),
(23, 10, 1004, 0, 0),
(24, 10, 1005, 0, 0),
(25, 10, 1006, 0, 0),
(26, 10, 1007, 0, 0),
(27, 10, 1008, 0, 0),
(28, 10, 1009, 0, 0),
(29, 10, 1010, 0, 0),
(30, 10, 1011, 0, 0),
(31, 10, 1012, 0, 0),
(32, 10, 1013, 0, 0),
(33, 10, 1014, 0, 0),
(34, 9, 1004, 0, 0),
(35, 9, 1005, 0, 0),
(36, 9, 1006, 0, 0),
(37, 9, 1007, 0, 0),
(38, 9, 1008, 0, 0),
(39, 9, 1009, 0, 0),
(40, 9, 1010, 0, 0),
(41, 9, 1011, 0, 0),
(42, 9, 1012, 0, 0),
(43, 9, 1013, 0, 0),
(44, 9, 1014, 0, 0),
(45, 8, 1004, 0, 0),
(46, 8, 1005, 0, 0),
(47, 8, 1006, 0, 0),
(48, 8, 1007, 0, 0),
(49, 8, 1008, 0, 0),
(50, 8, 1009, 0, 0),
(51, 8, 1010, 0, 0),
(52, 8, 1011, 0, 0),
(53, 8, 1012, 0, 0),
(54, 8, 1013, 0, 0),
(55, 8, 1014, 0, 0),
(56, 7, 1004, 0, 0),
(57, 7, 1005, 0, 0),
(58, 7, 1006, 0, 0),
(59, 7, 1007, 0, 0),
(60, 7, 1008, 0, 0),
(61, 7, 1009, 0, 0),
(62, 7, 1010, 0, 0),
(63, 7, 1011, 0, 0),
(64, 7, 1012, 0, 0),
(65, 7, 1013, 0, 0),
(66, 7, 1014, 0, 0),
(67, 6, 1004, 0, 0),
(68, 6, 1005, 0, 0),
(69, 6, 1006, 0, 0),
(70, 6, 1007, 0, 0),
(71, 6, 1008, 0, 0),
(72, 6, 1009, 0, 0),
(73, 6, 1010, 0, 0),
(74, 6, 1011, 0, 0),
(75, 6, 1012, 0, 0),
(76, 6, 1013, 0, 0),
(77, 6, 1014, 0, 0),
(78, 5, 1004, 0, 0),
(79, 5, 1005, 0, 0),
(80, 5, 1006, 0, 0),
(81, 5, 1007, 0, 0),
(82, 5, 1008, 0, 0),
(83, 5, 1009, 0, 0),
(84, 5, 1010, 0, 0),
(85, 5, 1011, 0, 0),
(86, 5, 1012, 0, 0),
(87, 5, 1013, 0, 0),
(88, 5, 1014, 0, 0),
(89, 4, 1004, 0, 0),
(90, 4, 1005, 0, 0),
(91, 4, 1006, 0, 0),
(92, 4, 1007, 0, 0),
(93, 4, 1008, 0, 0),
(94, 4, 1009, 0, 0),
(95, 4, 1010, 0, 0),
(96, 4, 1011, 0, 0),
(97, 4, 1012, 0, 0),
(98, 4, 1013, 0, 0),
(99, 4, 1014, 0, 0),
(100, 3, 1004, 0, 0),
(101, 3, 1005, 0, 0),
(102, 3, 1006, 0, 0),
(103, 3, 1007, 0, 0),
(104, 3, 1008, 0, 0),
(105, 3, 1009, 0, 0),
(106, 3, 1010, 0, 0),
(107, 3, 1011, 0, 0),
(108, 3, 1012, 0, 0),
(109, 3, 1013, 0, 0),
(110, 3, 1014, 0, 0),
(111, 2, 1004, 0, 0),
(112, 2, 1005, 0, 0),
(113, 2, 1006, 0, 0),
(114, 2, 1007, 0, 0),
(115, 2, 1008, 0, 0),
(116, 2, 1009, 0, 0),
(117, 2, 1010, 0, 0),
(118, 2, 1011, 0, 0),
(119, 2, 1012, 0, 0),
(120, 2, 1013, 0, 0),
(121, 2, 1014, 0, 0),
(122, 1, 1004, 0, 0),
(123, 1, 1005, 0, 0),
(124, 1, 1006, 0, 0),
(125, 1, 1007, 0, 0),
(126, 1, 1008, 0, 0),
(127, 1, 1009, 0, 0),
(128, 1, 1010, 0, 0),
(129, 1, 1011, 0, 0),
(130, 1, 1012, 0, 0),
(131, 1, 1013, 0, 0),
(132, 1, 1014, 0, 0),
(133, 12, 1001, 0, 0),
(134, 12, 1002, 0, 0),
(135, 12, 1003, 0, 0),
(136, 12, 1004, 0, 0),
(137, 12, 1005, 0, 0),
(138, 12, 1006, 0, 0),
(139, 12, 1007, 0, 0),
(140, 12, 1008, 0, 0),
(141, 12, 1009, 0, 0),
(142, 12, 1010, 0, 0),
(143, 12, 1011, 0, 0),
(144, 12, 1012, 0, 0),
(145, 12, 1013, 0, 0),
(146, 12, 1014, 0, 0),
(147, 2, 1004, 0, 0),
(148, 2, 1005, 0, 0),
(149, 2, 1006, 0, 0),
(150, 2, 1007, 0, 0),
(151, 2, 1008, 0, 0),
(152, 2, 1009, 0, 0),
(153, 2, 1010, 0, 0),
(154, 2, 1011, 0, 0),
(155, 2, 1012, 0, 0),
(156, 2, 1013, 0, 0),
(157, 2, 1014, 0, 0);

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

--
-- Dumping data for table `rekapproduksi`
--

INSERT INTO `rekapproduksi` (`idRekapProduksi`, `kodeRekapProduksi`, `idPIC`, `waktuPengembalian`, `beratKembali`, `kadar`, `jenisProduksi`) VALUES
(1, 'KYr78gks5v', 38, '2018-04-06 19:15:37', 0.5, 62, 'tempahan'),
(2, 'fvX7LiiqoM', 25, '2018-04-06 19:23:30', 1.6, 60, 'massal');

-- --------------------------------------------------------

--
-- Table structure for table `rekapproduksiline`
--

CREATE TABLE `rekapproduksiline` (
  `idRekapProduksiLine` int(11) NOT NULL,
  `kodeRekapProduksi` varchar(50) NOT NULL,
  `idProProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekapproduksiline`
--

INSERT INTO `rekapproduksiline` (`idRekapProduksiLine`, `kodeRekapProduksi`, `idProProd`) VALUES
(1, 'KYr78gks5v', 4),
(2, 'fvX7LiiqoM', 43),
(3, 'fvX7LiiqoM', 45),
(4, 'fvX7LiiqoM', 59);

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
(1, 1, 1001, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(2, 1, 1002, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(3, 1, 1003, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(4, 1, 1004, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(5, 1, 1005, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(6, 1, 1006, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(7, 1, 1007, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(8, 1, 1008, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(9, 1, 1009, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(10, 1, 1010, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(11, 1, 1011, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(12, 1, 1012, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(13, 1, 1013, '2018-04-17 00:00:00', '2018-04-17 00:00:00'),
(14, 1, 1014, '2018-04-18 00:00:00', '2018-04-18 00:00:00');

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
(23, 10, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(24, 10, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(25, 10, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(26, 10, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(27, 10, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(28, 10, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(29, 10, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(30, 10, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(31, 10, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(32, 10, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(33, 10, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(34, 9, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(35, 9, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(36, 9, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(37, 9, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(38, 9, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(39, 9, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(40, 9, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(41, 9, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(42, 9, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(43, 9, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(44, 9, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(45, 8, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(46, 8, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(47, 8, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(48, 8, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(49, 8, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(50, 8, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(51, 8, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(52, 8, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(53, 8, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(54, 8, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(55, 8, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(56, 7, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(57, 7, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(58, 7, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(59, 7, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(60, 7, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(61, 7, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(62, 7, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(63, 7, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(64, 7, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(65, 7, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(66, 7, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(67, 6, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(68, 6, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(69, 6, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(70, 6, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(71, 6, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(72, 6, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(73, 6, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(74, 6, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(75, 6, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(76, 6, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(77, 6, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(78, 5, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(79, 5, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(80, 5, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(81, 5, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(82, 5, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(83, 5, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(84, 5, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(85, 5, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(86, 5, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(87, 5, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(88, 5, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(89, 4, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(90, 4, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(91, 4, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(92, 4, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(93, 4, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(94, 4, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(95, 4, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(96, 4, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(97, 4, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(98, 4, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(99, 4, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(100, 3, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(101, 3, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(102, 3, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(103, 3, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(104, 3, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(105, 3, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(106, 3, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(107, 3, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(108, 3, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(109, 3, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(110, 3, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(111, 2, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(112, 2, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(113, 2, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(114, 2, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(115, 2, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(116, 2, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(117, 2, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(118, 2, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(119, 2, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(120, 2, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(121, 2, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(122, 1, 1004, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(123, 1, 1005, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(124, 1, 1006, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(125, 1, 1007, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(126, 1, 1008, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(127, 1, 1009, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(128, 1, 1010, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(129, 1, 1011, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(130, 1, 1012, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(131, 1, 1013, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(132, 1, 1014, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(133, 11, 1004, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(134, 11, 1005, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(135, 11, 1006, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(136, 11, 1007, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(137, 11, 1008, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(138, 11, 1009, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(139, 11, 1010, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(140, 11, 1011, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(141, 11, 1012, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(142, 11, 1013, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(143, 11, 1014, '2018-04-16 00:00:00', '2018-04-16 00:00:00');

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
(1, 'emas lokal', 96.5);

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

--
-- Dumping data for table `spk`
--

INSERT INTO `spk` (`idSPK`, `nomorFaktur`, `nomorPO`, `idProduk`, `idCustomer`, `statusDesain`, `tanggalApprovalDesain`, `PICDesain`, `statusBOM`, `tanggalApprovalBOM`, `PICBOM`, `statusJadwal`, `tanggalApprovalJadwal`, `PICJadwal`, `statusPersetujuan`, `tanggalApprovalPersetujuan`, `PICPersetujuan`, `lastModified`, `statusSPK`) VALUES
(1, 1, 1, 12, 23, 'Disetujui', '2018-04-06 15:39:49', 5, 'Disetujui', '2018-04-06 15:40:47', 5, 'Disetujui', '2018-04-06 14:25:44', 5, 'Disetujui', '2018-04-06 15:40:47', 5, '2018-04-06 08:43:07', 'Done');

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
(1, 1, 1, 1, 21, 'Disetujui', '2018-04-05 22:36:36', 9, 'Disetujui', '2018-04-05 22:36:23', 9, 'Disetujui', '2018-04-05 22:36:36', 9, '2018-04-06 14:38:11', 0, 'Done'),
(2, 2, 2, 2, 21, 'Disetujui', '2018-04-05 22:36:41', 9, 'Disetujui', '2018-04-05 22:30:01', 9, 'Disetujui', '2018-04-05 22:36:41', 9, '2018-04-06 14:38:18', 0, 'Done'),
(3, 3, 3, 3, 21, 'Disetujui', '2018-04-05 22:36:46', 9, 'Disetujui', '2018-04-05 22:29:53', 9, 'Disetujui', '2018-04-05 22:36:46', 9, '2018-04-06 14:38:21', 0, 'Done'),
(4, 4, 4, 4, 24, 'Disetujui', '2018-04-05 22:36:53', 9, 'Disetujui', '2018-04-05 22:29:48', 9, 'Disetujui', '2018-04-05 22:36:53', 9, '2018-04-06 14:47:54', 0, 'Done'),
(5, 5, 5, 5, 25, 'Disetujui', '2018-04-05 22:36:59', 9, 'Disetujui', '2018-04-05 22:29:43', 9, 'Disetujui', '2018-04-05 22:36:59', 9, '2018-04-05 15:36:59', 0, 'On progress'),
(6, 6, 6, 6, 26, 'Disetujui', '2018-04-05 22:37:04', 9, 'Disetujui', '2018-04-05 22:29:37', 9, 'Disetujui', '2018-04-05 22:37:04', 9, '2018-04-05 15:37:04', 0, 'On progress'),
(7, 7, 7, 7, 27, 'Disetujui', '2018-04-05 22:37:08', 9, 'Disetujui', '2018-04-05 22:29:32', 9, 'Disetujui', '2018-04-05 22:37:08', 9, '2018-04-05 15:37:08', 0, 'On progress'),
(8, 8, 8, 8, 28, 'Disetujui', '2018-04-05 22:37:13', 9, 'Disetujui', '2018-04-05 22:29:25', 9, 'Disetujui', '2018-04-05 22:37:13', 9, '2018-04-05 15:37:13', 0, 'On progress'),
(9, 9, 9, 9, 29, 'Disetujui', '2018-04-05 22:37:17', 9, 'Disetujui', '2018-04-05 22:29:19', 9, 'Disetujui', '2018-04-05 22:37:17', 9, '2018-04-05 15:37:17', 0, 'On progress'),
(10, 10, 10, 10, 29, 'Disetujui', '2018-04-05 22:37:22', 9, 'Disetujui', '2018-04-05 19:37:38', 9, 'Disetujui', '2018-04-05 22:37:22', 9, '2018-04-05 15:37:22', 0, 'On progress'),
(11, 11, 11, 2, 21, 'Disetujui', '2018-04-06 20:15:08', 5, 'Disetujui', '2018-04-06 14:52:46', 5, 'Disetujui', '2018-04-06 20:15:08', 5, '2018-04-06 14:38:25', 0, 'Done');

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
  `tipeBarang` varchar(255) NOT NULL,
  `kodeBarang` varchar(255) NOT NULL,
  `jumlah` double NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `jenisPergerakanBarang` varchar(255) NOT NULL,
  `tipePergerakan` varchar(200) NOT NULL,
  `statusTransfer` varchar(123) NOT NULL DEFAULT 'Valid',
  `hargaBeli` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stokbarang`
--

INSERT INTO `stokbarang` (`idStok`, `idPIC`, `tipeBarang`, `kodeBarang`, `jumlah`, `satuan`, `jenisPergerakanBarang`, `tipePergerakan`, `statusTransfer`, `hargaBeli`, `tanggal`) VALUES
(1, 19, 'Material Dasar', 'emas43', 200, 'gr', 'IN', 'Beli Material', 'Valid', 0, '0000-00-00 00:00:00'),
(2, 19, 'Material Dasar', 'emas43', 200, 'gr', 'OUT', 'Transfer Material', 'Valid', 0, '0000-00-00 00:00:00'),
(3, 9, 'Material Dasar', 'emas43', 200, 'gr', 'IN', 'Transfer Material', 'Valid', 0, '0000-00-00 00:00:00'),
(4, 19, 'Material Dasar', '101', 300, 'gr', 'IN', 'Beli Material', 'Valid', 0, '0000-00-00 00:00:00'),
(5, 19, 'Material Dasar', '101', 200, 'gr', 'OUT', 'Transfer Material', 'Valid', 0, '0000-00-00 00:00:00'),
(6, 9, 'Material Dasar', '101', 200, 'gr', 'IN', 'Transfer Material', 'Valid', 0, '0000-00-00 00:00:00'),
(7, 19, 'Material Dasar', 'TNXBOgQd0D', 200, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(8, 9, 'Material Dasar', '101', 100, 'gr', 'IN', 'Beli Material', 'Valid', 0, '0000-00-00 00:00:00'),
(9, 19, 'Material Dasar', '1', 200, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(10, 19, 'Material Dasar', '2', 100, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(11, 19, 'Material Dasar', '3', 50, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(12, 19, 'Material Dasar', '4', 80, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(13, 19, 'Material Dasar', '5', 155, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(14, 19, 'Material Dasar', '6', 230, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(15, 19, 'Material Dasar', '7', 60, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(16, 19, 'Material Dasar', '10', 195, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '0000-00-00 00:00:00'),
(17, 5, 'Material Dasar', '101', 4000, 'gr', 'IN', 'Beli Material', 'Valid', 0, '2018-04-05 22:48:48'),
(18, 5, 'Material Dasar', '101', 605, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-05 22:58:14'),
(19, 1, 'Produk Semi Jadi', '1', 15, 'pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-05 22:58:14'),
(20, 5, 'Material Dasar', '101', 495, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-05 23:16:29'),
(21, 1, 'Produk Semi Jadi', '2', 16, 'pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-05 23:16:29'),
(22, 5, 'Material Dasar', '101', 440, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-05 23:18:33'),
(23, 1, 'Produk Semi Jadi', '3', 17, 'pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-05 23:18:33'),
(24, 5, 'Produk Semi Jadi', '3', 17, 'Pcs', 'OUT', 'Produksi', 'Valid', 0, '2018-04-05 23:19:38'),
(25, 5, 'Produk Jadi', '3', 17, 'Pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-05 23:19:38'),
(26, 5, 'Produk Jadi', '3', 17, 'Pcs', 'OUT', 'Transfer', 'Valid', 0, '2018-04-05 23:19:38'),
(27, 19, 'Produk Jadi', '3', 17, 'Pcs', 'IN', 'Transfer', 'Valid', 0, '2018-04-05 23:19:38'),
(28, 5, 'Produk Semi Jadi', '2', 16, 'Pcs', 'OUT', 'Produksi', 'Valid', 0, '2018-04-05 23:19:59'),
(29, 5, 'Produk Jadi', '2', 16, 'Pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-05 23:19:59'),
(30, 5, 'Produk Jadi', '2', 16, 'Pcs', 'OUT', 'Transfer', 'Valid', 0, '2018-04-05 23:19:59'),
(31, 19, 'Produk Jadi', '2', 16, 'Pcs', 'IN', 'Transfer', 'Valid', 0, '2018-04-05 23:19:59'),
(32, 5, 'Produk Semi Jadi', '1', 15, 'Pcs', 'OUT', 'Produksi', 'Valid', 0, '2018-04-05 23:20:10'),
(33, 5, 'Produk Jadi', '1', 15, 'Pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-05 23:20:10'),
(34, 5, 'Produk Jadi', '1', 15, 'Pcs', 'OUT', 'Transfer', 'Valid', 0, '2018-04-05 23:20:10'),
(35, 19, 'Produk Jadi', '1', 15, 'Pcs', 'IN', 'Transfer', 'Valid', 0, '2018-04-05 23:20:10'),
(36, 5, 'Material Dasar', '454RFUGMiu', 9, 'gr', 'IN', 'Bahan Datang', 'Valid', 0, '2018-04-06 13:57:30'),
(37, 0, 'Material Dasar', '101', 264, '', 'OUT', '', 'Valid', 0, '2018-04-06 15:40:47'),
(38, 0, 'Produk Jadi', 'CLS02', 1, '', 'IN', '', 'Valid', 0, '2018-04-06 15:43:07'),
(39, 5, 'Material Dasar', '101', 385, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-06 20:17:46'),
(40, 1, 'Produk Semi Jadi', '2', 10, 'pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-06 20:17:46'),
(41, 5, 'Produk Semi Jadi', '2', 10, 'Pcs', 'OUT', 'Produksi', 'Valid', 0, '2018-04-06 20:31:04'),
(42, 5, 'Produk Jadi', '2', 10, 'Pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-06 20:31:04'),
(43, 5, 'Produk Jadi', '2', 10, 'Pcs', 'OUT', 'Transfer', 'Valid', 0, '2018-04-06 20:31:04'),
(44, 19, 'Produk Jadi', '2', 10, 'Pcs', 'IN', 'Transfer', 'Valid', 0, '2018-04-06 20:31:04'),
(45, 5, 'Material Dasar', '101', 242, 'gr', 'OUT', 'Produksi', 'Valid', 0, '2018-04-06 21:46:30'),
(46, 1, 'Produk Semi Jadi', '4', 20, 'pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-06 21:46:30'),
(47, 5, 'Produk Semi Jadi', '4', 20, 'Pcs', 'OUT', 'Produksi', 'Valid', 0, '2018-04-06 21:47:54'),
(48, 5, 'Produk Jadi', '4', 20, 'Pcs', 'IN', 'Produksi', 'Valid', 0, '2018-04-06 21:47:54'),
(49, 5, 'Produk Jadi', '4', 20, 'Pcs', 'OUT', 'Transfer', 'Valid', 0, '2018-04-06 21:47:54'),
(50, 19, 'Produk Jadi', '4', 20, 'Pcs', 'IN', 'Transfer', 'Valid', 0, '2018-04-06 21:47:54'),
(51, 5, 'Material Dasar', 'KYr78gks5v', 0.5, 'gr', 'IN', 'Balik Abu', 'Valid', 0, '2018-04-07 02:15:37'),
(52, 5, 'Material Dasar', 'KYr78gks5v', 1.6, 'gr', 'IN', 'Balik Abu', 'Valid', 0, '2018-04-07 02:23:30'),
(54, 5, 'Material Dasar', '101', 50, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-04-07 13:10:00'),
(55, 5, 'Produk Jadi', 'WER 121', 10, 'gr', 'IN', 'Stok Opname', 'Valid', 0, '2018-04-07 13:11:02');

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
(29, 1),
(30, 2),
(31, 3),
(32, 4),
(33, 5),
(34, 6),
(35, 7),
(36, 8),
(37, 9),
(38, 10),
(39, 11);

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
(28, 'Horman Siregar', '123', 'Horman Siregar', 'Staff Produksi', 0, '', '', ' Jl. Durung No. 182 Medan Kel/Desa Sidorejo Kec. Medan Tembung '),
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
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `idCurrency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `factproduction2`
--
ALTER TABLE `factproduction2`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
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
  MODIFY `idHeader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `invoicemassal`
--
ALTER TABLE `invoicemassal`
  MODIFY `idInvoiceMassal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `idKatalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kloter`
--
ALTER TABLE `kloter`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kloter2`
--
ALTER TABLE `kloter2`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materialdasar`
--
ALTER TABLE `materialdasar`
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pomasal`
--
ALTER TABLE `pomasal`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `poperak`
--
ALTER TABLE `poperak`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `potempahan`
--
ALTER TABLE `potempahan`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  MODIFY `idProses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
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
  MODIFY `idRekapProduksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekapproduksiline`
--
ALTER TABLE `rekapproduksiline`
  MODIFY `idRekapProduksiLine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rencanaproduksi`
--
ALTER TABLE `rencanaproduksi`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `rencanaproduksi2`
--
ALTER TABLE `rencanaproduksi2`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `spkmasal`
--
ALTER TABLE `spkmasal`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `subspk`
--
ALTER TABLE `subspk`
  MODIFY `idSubSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
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
