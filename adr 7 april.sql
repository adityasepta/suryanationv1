-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 07:28 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
(1, '1', 7, 200, 'Disetujui'),
(2, '2', 7, 250, 'Disetujui'),
(3, '3', 7, 250, 'Disetujui');

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
(21, 'Ko Asu Siahaan', '08123123213', '2018-04-05 18:41:12');

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
  `beratKecap` double NOT NULL,
  `berat` double NOT NULL,
  `kembali` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlahNow` int(11) NOT NULL,
  `statusBerat` varchar(123) NOT NULL,
  `statusWork` varchar(231) NOT NULL,
  `statusRework` varchar(123) NOT NULL DEFAULT 'No',
  `statusSPK` varchar(23) NOT NULL,
  `statusPengambilan` varchar(200) NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factproduction2`
--

INSERT INTO `factproduction2` (`idProProd`, `idProProdAsal`, `idSPK`, `idSubSPK`, `idWadah`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `beratAwal`, `beratTambahan`, `beratKecap`, `berat`, `kembali`, `jumlah`, `jumlahNow`, `statusBerat`, `statusWork`, `statusRework`, `statusSPK`, `statusPengambilan`) VALUES
(1, 0, 1, 1, 0, 1004, 20, '2018-04-06 11:35:26', '2018-04-06 11:36:20', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(2, 0, 1, 1, 0, 1005, 27, '2018-04-06 11:37:07', '2018-04-06 11:37:10', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(3, 0, 1, 1, 0, 1006, 28, '2018-04-06 11:39:00', '2018-04-06 11:39:58', 200, 0, 115, 119, 80, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(4, 0, 1, 1, 0, 1007, 38, '2018-04-06 11:40:08', '2018-04-06 11:40:38', 115, 0, 0, 114, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(5, 4, 1, 1, 1, 1008, 38, '2018-04-06 11:40:38', '2018-04-06 11:41:34', 114, 0, 0, 113, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(6, 5, 1, 1, 2, 1009, 38, '2018-04-06 11:41:34', '2018-04-06 11:42:02', 113, 0, 0, 112, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(7, 6, 1, 1, 3, 1010, 27, '2018-04-06 11:42:14', '2018-04-06 11:46:44', 112, 5, 0, 114, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(8, 7, 1, 1, 4, 1011, 27, '2018-04-06 11:46:44', '2018-04-06 11:47:36', 114, 0, 0, 112, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(9, 8, 1, 1, 5, 1009, 21, '2018-04-06 11:47:36', '2018-04-06 11:48:22', 112, 0, 0, 111, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(10, 9, 1, 1, 6, 1013, 21, '2018-04-06 11:48:22', '2018-04-06 11:50:59', 111, 0, 0, 110, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(11, 10, 1, 1, 7, 1014, 20, '2018-04-06 11:50:59', '2018-04-06 11:51:27', 110, 0, 0, 110, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(12, 0, 2, 2, 0, 1004, 15, '2018-04-06 12:10:10', '2018-04-06 12:11:05', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(13, 0, 2, 3, 0, 1004, 38, '2018-04-06 12:10:34', '2018-04-06 12:11:10', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(14, 0, 2, 2, 0, 1005, 15, '2018-04-06 12:11:19', '2018-04-06 12:11:27', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(15, 0, 2, 3, 0, 1005, 21, '2018-04-06 12:11:23', '2018-04-06 12:11:30', 0, 0, 0, 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'No', 'Done', 'Belum'),
(16, 0, 2, 2, 0, 1006, 13, '2018-04-06 12:12:05', '2018-04-06 12:13:53', 250, 0, 205, 210, 38, 20, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(17, 0, 2, 3, 0, 1006, 22, '2018-04-06 12:12:50', '2018-04-06 12:13:56', 250, 0, 205, 210, 38, 20, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(18, 0, 2, 2, 0, 1007, 11, '2018-04-06 12:14:11', '2018-04-06 12:15:46', 205, 0, 0, 200, 0, 20, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(19, 0, 2, 3, 0, 1007, 28, '2018-04-06 12:14:21', '2018-04-06 12:16:11', 205, 0, 0, 200, 0, 20, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(20, 18, 2, 2, 8, 1008, 36, '2018-04-06 12:15:30', '2018-04-06 12:17:35', 100, 0, 0, 99, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(21, 18, 2, 2, 9, 1008, 3, '2018-04-06 12:15:46', '2018-04-06 12:23:27', 100, 0, 0, 99, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(22, 19, 2, 3, 10, 1008, 26, '2018-04-06 12:16:00', '2018-04-06 12:23:43', 100, 0, 0, 99, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(23, 19, 2, 3, 11, 1008, 28, '2018-04-06 12:16:11', '2018-04-06 12:23:57', 100, 0, 0, 99, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(24, 20, 2, 2, 12, 1009, 45, '2018-04-06 12:17:35', '2018-04-06 12:25:12', 99, 0, 0, 98, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(25, 21, 2, 2, 13, 1009, 7, '2018-04-06 12:23:27', '2018-04-06 12:25:27', 99, 0, 0, 98, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(26, 22, 2, 3, 14, 1009, 16, '2018-04-06 12:23:43', '2018-04-06 12:25:44', 99, 0, 0, 98, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(27, 23, 2, 3, 15, 1009, 27, '2018-04-06 12:23:57', '2018-04-06 12:26:00', 99, 0, 0, 98, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(28, 24, 2, 2, 16, 1010, 45, '2018-04-06 12:26:20', '2018-04-06 12:26:56', 98, 5, 0, 103, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(29, 25, 2, 2, 17, 1010, 36, '2018-04-06 12:26:26', '2018-04-06 12:27:17', 98, 5, 0, 103, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(30, 26, 2, 3, 18, 1010, 37, '2018-04-06 12:26:32', '2018-04-06 12:27:34', 98, 5, 0, 103, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(31, 27, 2, 3, 19, 1010, 33, '2018-04-06 12:26:38', '2018-04-06 12:27:47', 98, 5, 0, 103, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(32, 28, 2, 2, 20, 1011, 25, '2018-04-06 12:26:56', '2018-04-06 13:36:11', 103, 0, 0, 102, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(33, 29, 2, 2, 21, 1011, 36, '2018-04-06 12:27:17', '2018-04-06 13:36:32', 103, 0, 0, 102, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(34, 30, 2, 3, 22, 1011, 43, '2018-04-06 12:27:34', '2018-04-06 13:37:12', 103, 0, 0, 102, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(35, 31, 2, 3, 23, 1011, 34, '2018-04-06 12:27:47', '2018-04-06 13:37:24', 103, 0, 0, 102, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(36, 32, 2, 2, 24, 1012, 25, '2018-04-06 13:36:11', '2018-04-06 13:38:55', 102, 0, 0, 100, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(37, 33, 2, 2, 25, 1012, 45, '2018-04-06 13:36:32', '2018-04-06 13:39:14', 102, 0, 0, 100, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(38, 34, 2, 3, 26, 1012, 45, '2018-04-06 13:37:12', '2018-04-06 13:39:31', 102, 0, 0, 100, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(39, 35, 2, 3, 27, 1012, 43, '2018-04-06 13:37:24', '2018-04-06 13:39:50', 102, 0, 0, 100, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(40, 36, 2, 2, 28, 1013, 25, '2018-04-06 13:38:55', '2018-04-06 13:40:12', 100, 0, 0, 99, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(41, 37, 2, 2, 29, 1013, 18, '2018-04-06 13:39:14', '2018-04-06 13:40:43', 100, 0, 0, 99, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(42, 38, 2, 3, 30, 1013, 20, '2018-04-06 13:39:31', '2018-04-06 13:40:58', 100, 0, 0, 99, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(43, 39, 2, 3, 31, 1013, 41, '2018-04-06 13:39:50', '2018-04-06 13:41:17', 100, 0, 0, 99, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(44, 40, 2, 2, 32, 1008, 2, '2018-04-06 13:40:12', '2018-04-06 13:41:41', 99, 0, 0, 95, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(45, 41, 2, 2, 33, 1008, 42, '2018-04-06 13:40:43', '2018-04-06 13:42:24', 99, 0, 0, 95, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(46, 42, 2, 3, 34, 1009, 13, '2018-04-06 13:40:58', '2018-04-06 13:42:43', 99, 0, 0, 95, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(47, 43, 2, 3, 35, 1009, 25, '2018-04-06 13:41:17', '2018-04-06 13:43:04', 99, 0, 0, 95, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(48, 44, 2, 2, 36, 1014, 17, '2018-04-06 13:41:41', '2018-04-06 13:43:57', 95, 0, 0, 380, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(49, 45, 2, 2, 37, 1014, 42, '2018-04-06 13:42:24', '2018-04-06 13:43:57', 95, 0, 0, 380, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum'),
(50, 46, 2, 3, 38, 1014, 26, '2018-04-06 13:42:43', '2018-04-06 13:43:57', 95, 0, 0, 380, 0, 10, 0, 'Disetujui', 'Done', 'No', 'Done', 'Belum'),
(51, 47, 2, 3, 39, 1014, 34, '2018-04-06 13:43:04', '2018-04-06 13:43:57', 95, 0, 0, 380, 0, 10, 0, 'Disetujui', 'Done', 'Yes', 'Done', 'Belum');

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
  `jenisInvoice` varchar(255) NOT NULL,
  `tipeInvoice` varchar(255) DEFAULT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
(7, '101', 'Emas Kuning 65%', 65, 'gr', 400, 100, 'Emas', 'Asli', '', ''),
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
(25, 'NOrQHyFJMF', 'Emas Kuning 65%', 65, 'gr', 100, 0, 'Emas', 'Datang Emas', '', '');

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
  `hargaDatangEmas` float NOT NULL,
  `kadarDatangEmas` float NOT NULL,
  `datangBerlian` varchar(255) NOT NULL,
  `jumlahDatangBerlian` int(11) NOT NULL,
  `upahPasangBerlian` int(11) NOT NULL,
  `tipeCustomer` varchar(100) NOT NULL,
  `pekerjaanTambahan` varchar(100) NOT NULL,
  `keteranganTambahan` varchar(255) NOT NULL,
  `biayaTambahan` int(11) NOT NULL,
  `beratAkhir` double NOT NULL,
  `metode` varchar(100) NOT NULL,
  `panjar` float NOT NULL,
  `totalHarga` float NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL,
  `idStokBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pomasal`
--

INSERT INTO `pomasal` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `bahan`, `kadarBahan`, `ukuranJari`, `krumWarna`, `keteranganKrum`, `model`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `biayaTambahan`, `beratAkhir`, `metode`, `panjar`, `totalHarga`, `lastModified`, `tipeOrder`, `idStokBarang`) VALUES
(1, 1, 1, 21, 36, '2018-04-06 00:00:00', '2018-05-04 00:00:00', 543434, 'Emas Kuning', 65, '12', 'Merah', 'Mengkilat', 'Apik', 5, 0, 0, 0, '', 0, 0, 'Teliti', 'Slap', 'Ndangan', 0, 100, '', 100000, 0, '2018-04-06 04:34:24', 'massal', 0),
(2, 2, 2, 21, 36, '2018-04-06 00:00:00', '2018-04-27 00:00:00', 300000, 'Emas Kuning', 65, '12', 'Merah', 'Mengkilat', 'Apik', 5, 0, 0, 0, '', 0, 0, 'Teliti', 'Slap', 'Fast', 0, 300, '', 10000, 0, '2018-04-06 05:06:56', 'massal', 0),
(3, 3, 3, 21, 36, '2018-04-06 00:00:00', '2018-04-27 00:00:00', 543000, 'Emas Kuning', 65, '12', 'Merah', 'Mengkilat', 'Apik', 5, 100, 0, 65, '', 0, 0, 'Teliti', 'Slap', 'Ndang', 0, 400, '', 300000, 0, '2018-04-06 17:28:06', 'massal', 0);

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
(1, 'CDF 232', 'Ko Asu Siahaan-1', 'Cincin', 'Massal', '', '', 0, 0, 'YWtsMfF2Kw', NULL, NULL, NULL, NULL, 10, 'Tidak Tampil', '2018-04-06 04:51:27'),
(2, 'FRT 343', 'Ko Asu Siahaan-2', 'Cincin', 'Massal', '', '', 0, 0, 'apaGvLO3WO', NULL, NULL, NULL, NULL, 40, 'Tidak Tampil', '2018-04-06 06:43:57'),
(3, 'THG 943', 'Ko Asu Siahaan-3', 'Cincin', 'Massal', '', '', 0, 0, 'NOrQHyFJMF', NULL, NULL, NULL, NULL, 0, 'Tidak Tampil', '2018-04-06 16:11:56');

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
(12, 2, 1004, 0, 0),
(13, 2, 1005, 0, 0),
(14, 2, 1006, 0, 0),
(15, 2, 1007, 0, 0),
(16, 2, 1008, 0, 0),
(17, 2, 1009, 0, 0),
(18, 2, 1010, 0, 0),
(19, 2, 1011, 0, 0),
(20, 2, 1012, 0, 0),
(21, 2, 1013, 0, 0),
(22, 2, 1014, 0, 0);

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
(1, 1, 1004, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(2, 1, 1005, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(3, 1, 1006, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(4, 1, 1007, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(5, 1, 1008, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(6, 1, 1009, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(7, 1, 1010, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(8, 1, 1011, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(9, 1, 1012, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(10, 1, 1013, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(11, 1, 1014, '2018-04-16 00:00:00', '2018-04-16 00:00:00'),
(12, 2, 1004, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(13, 2, 1005, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(14, 2, 1006, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(15, 2, 1007, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(16, 2, 1008, '2018-04-10 00:00:00', '2018-04-10 00:00:00'),
(17, 2, 1009, '2018-04-11 00:00:00', '2018-04-11 00:00:00'),
(18, 2, 1010, '2018-04-12 00:00:00', '2018-04-12 00:00:00'),
(19, 2, 1011, '2018-04-13 00:00:00', '2018-04-13 00:00:00'),
(20, 2, 1012, '2018-04-14 00:00:00', '2018-04-14 00:00:00'),
(21, 2, 1013, '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(22, 2, 1014, '2018-04-16 00:00:00', '2018-04-16 00:00:00');

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
(1, 1, 1, 1, 21, 'Disetujui', '2018-04-06 11:35:18', 19, 'Disetujui', '2018-04-06 11:35:06', 19, 'Disetujui', '2018-04-06 11:35:18', 19, '2018-04-06 04:53:28', 0, 'Done'),
(2, 2, 2, 2, 21, 'Disetujui', '2018-04-06 12:10:02', 19, 'Disetujui', '2018-04-06 12:07:55', 19, 'Disetujui', '2018-04-06 12:10:02', 19, '2018-04-06 06:43:57', 0, 'Done'),
(3, 3, 3, 3, 21, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Ada', '0000-00-00 00:00:00', 19, 'Belum Disetujui', '0000-00-00 00:00:00', 19, '2018-04-06 16:11:56', 0, 'On progress');

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
(3, 2);

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
-- AUTO_INCREMENT for table `billofmaterial`
--
ALTER TABLE `billofmaterial`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bommassal`
--
ALTER TABLE `bommassal`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
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
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
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
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  MODIFY `idProses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `spkmasal`
--
ALTER TABLE `spkmasal`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `subspk`
--
ALTER TABLE `subspk`
  MODIFY `idSubSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
