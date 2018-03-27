-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 06:04 AM
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
  `jumlah` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bommassal`
--

INSERT INTO `bommassal` (`idBOM`, `idSubSPK`, `idMaterial`, `jumlah`) VALUES
(1, '1', 10, 702),
(2, '1', 21, 1.09),
(3, '1', 22, 0.36),
(4, '1', 23, 0.36),
(5, '2', 7, 1117.8),
(6, '2', 21, 0.5),
(7, '2', 22, 0.17),
(8, '2', 23, 0.17),
(9, '3', 12, 99),
(10, '3', 21, 0.55),
(11, '3', 22, 0.18),
(12, '3', 23, 0.18),
(13, '4', 7, 481.95),
(14, '4', 10, 60),
(15, '5', 10, 17.8);

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
(1, 'eIbFTRhkKe', 16, 252),
(2, 'eIbFTRhkKe', 21, 22.91),
(3, 'eIbFTRhkKe', 24, 4.12);

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
(1, 'Brenda', '087859275353', '2018-01-29 13:14:21'),
(2, 'Mamad', '021677827', '2018-01-31 02:38:28'),
(3, 'Degananda', '085262244633', '2018-03-22 09:57:44'),
(4, 'Denanda Putri', '087859275353', '2018-02-02 10:09:33'),
(5, 'Ferdinan Sinaga', '087859275353', '2018-02-02 16:32:40'),
(6, 'Adrian Afnandika', '087545586120', '2018-02-24 17:27:17'),
(7, 'Melita Sari Lubis', '085262244633', '2018-02-27 06:59:27'),
(8, 'Muhammad Andre', '085276185896', '2018-02-27 07:00:25'),
(9, 'Hildan Ma''ruf', '085746324212', '2018-03-02 10:23:27'),
(10, 'Melita Sari Lubis', '085262244633', '2018-03-22 12:27:15'),
(11, 'Muhammad Andre', '085276185896', '2018-03-22 12:29:59'),
(12, 'Denanda Putri', '087859275353', '2018-03-22 12:33:38'),
(13, 'Mamad', '021677827', '2018-03-22 16:45:15'),
(14, 'ko joni', '88813114', '2018-03-24 08:00:33'),
(15, 'Firman', '087859275353', '2018-03-24 08:38:04'),
(16, 'Adr', '123123123123', '2018-03-24 08:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `detailpurchaseorderservice`
--

CREATE TABLE `detailpurchaseorderservice` (
  `idDetailPO` int(11) NOT NULL,
  `idPO` int(11) NOT NULL,
  `namaBarang` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpurchaseorderservice`
--

INSERT INTO `detailpurchaseorderservice` (`idDetailPO`, `idPO`, `namaBarang`, `jumlah`, `harga`) VALUES
(1, 1, 'j', 1, '30000'),
(2, 1, 'k', 1, '200000'),
(3, 1, 'l', 2, '10000'),
(4, 2, 'Adit', 3, '300000'),
(5, 3, 'ciincin', 1, '1234232');

-- --------------------------------------------------------

--
-- Table structure for table `detailpurchaseordertrading`
--

CREATE TABLE `detailpurchaseordertrading` (
  `idDetailPO` int(11) NOT NULL,
  `idPO` int(11) NOT NULL,
  `idProduk` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpurchaseordertrading`
--

INSERT INTO `detailpurchaseordertrading` (`idDetailPO`, `idPO`, `idProduk`, `jumlah`, `harga`) VALUES
(1, 1, '1', 2, ''),
(2, 2, '1', 1, '');

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
  `berat` double NOT NULL,
  `kembali` double NOT NULL,
  `statusBerat` varchar(123) NOT NULL,
  `statusWork` varchar(231) NOT NULL,
  `statusSPK` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factproduction`
--

INSERT INTO `factproduction` (`idProProd`, `idSPK`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `beratAwal`, `berat`, `kembali`, `statusBerat`, `statusWork`, `statusSPK`) VALUES
(2, 1, 1004, 19, '2018-03-22 22:13:51', '2018-03-22 22:32:41', 0, 0, 0, '', 'Done', 'Done'),
(3, 2, 1004, 19, '2018-03-22 22:13:51', '2018-03-22 22:32:41', 0, 0, 0, '', 'Done', 'Active'),
(4, 1, 1005, 24, '2018-03-22 22:33:09', '2018-03-22 22:33:13', 0, 0, 0, 'Belum Disetujui', 'Done', 'Done'),
(5, 2, 1005, 24, '2018-03-22 22:33:09', '2018-03-22 22:33:13', 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(6, 1, 1006, 19, '2018-03-22 22:33:26', '2018-03-22 22:34:16', 0, 0, 0, 'Belum Disetujui', 'Done', 'Done'),
(7, 2, 1006, 19, '2018-03-22 22:33:26', '2018-03-22 22:34:16', 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(8, 1, 1007, 19, '2018-03-22 22:45:45', '2018-03-22 22:46:40', 100.45, 100.2, 0, 'Disetujui', 'Done', 'Done'),
(9, 2, 1014, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 90.97, 0, 'Disetujui', 'Belum ada PIC', 'Active'),
(10, 1, 1008, 19, '2018-03-22 22:46:59', '2018-03-22 22:50:21', 0, 95, 0, 'Disetujui', 'Done', 'Done'),
(11, 1, 1009, 19, '2018-03-22 22:50:57', '2018-03-22 22:51:50', 0, 94.5, 0, 'Disetujui', 'Done', 'Done'),
(12, 1, 1011, 22, '2018-03-22 22:52:08', '2018-03-22 22:53:14', 0, 90.86, 0, 'Disetujui', 'Done', 'Done'),
(13, 1, 1012, 19, '2018-03-22 22:54:59', '2018-03-22 22:55:20', 0, 89.57, 0, 'Disetujui', 'Done', 'Done'),
(14, 1, 1013, 19, '2018-03-22 22:55:26', '2018-03-22 22:56:34', 0, 90, 0, 'Disetujui', 'Done', 'Done'),
(15, 1, 1014, 18, '2018-03-22 23:10:52', '2018-03-22 23:10:52', 90, 83.44, 0, 'Belum Disetujui', 'Done', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `factproduction2`
--

CREATE TABLE `factproduction2` (
  `idProProd` int(11) NOT NULL,
  `idSPK` int(11) NOT NULL,
  `idSubSPK` int(11) NOT NULL,
  `idWadah` int(11) NOT NULL,
  `idAktivitas` int(11) NOT NULL,
  `idPIC` int(11) NOT NULL,
  `RealisasiStartDate` datetime NOT NULL,
  `RealisasiEndDate` datetime NOT NULL,
  `beratAwal` double NOT NULL,
  `berat` double NOT NULL,
  `kembali` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `statusBerat` varchar(123) NOT NULL,
  `statusWork` varchar(231) NOT NULL,
  `statusSPK` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factproduction2`
--

INSERT INTO `factproduction2` (`idProProd`, `idSPK`, `idSubSPK`, `idWadah`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `beratAwal`, `berat`, `kembali`, `jumlah`, `statusBerat`, `statusWork`, `statusSPK`) VALUES
(1, 1, 1, 0, 1004, 20, '2018-03-23 21:07:30', '2018-03-24 01:28:21', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(2, 1, 2, 0, 1004, 18, '2018-03-24 01:28:32', '2018-03-24 01:29:24', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(3, 1, 1, 0, 1005, 22, '2018-03-24 01:35:57', '2018-03-24 01:36:03', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(4, 1, 2, 0, 1005, 18, '2018-03-24 13:35:41', '0000-00-00 00:00:00', 0, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'Active'),
(5, 1, 1, 0, 1006, 23, '2018-03-24 01:42:26', '2018-03-24 01:46:26', 0, 70, 0, 20, 'Disetujui', 'Done', 'Active'),
(9, 1, 1, 1, 1007, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 0, 0, 8, 'Belum Disetujui', 'Belum ada PIC', 'Active'),
(10, 2, 3, 0, 1004, 21, '2018-03-24 13:26:57', '2018-03-24 13:29:47', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(11, 2, 4, 0, 1004, 19, '2018-03-24 14:11:04', '2018-03-24 14:14:19', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(12, 2, 3, 0, 1005, 21, '2018-03-24 13:30:06', '2018-03-24 13:30:14', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(13, 2, 3, 0, 1006, 23, '2018-03-24 13:30:32', '2018-03-24 13:35:24', 0, 20, 0, 40, 'Disetujui', 'Done', 'Active'),
(15, 2, 3, 2, 1007, 21, '2018-03-24 13:38:12', '2018-03-24 13:40:50', 8, 7, 0, 17, 'Disetujui', 'Done', 'Active'),
(16, 2, 3, 3, 1007, 22, '2018-03-24 13:57:41', '2018-03-24 13:58:42', 7, 18, 0, 14, 'Disetujui', 'Done', 'Active'),
(17, 2, 3, 4, 1007, 19, '2018-03-24 13:59:50', '2018-03-24 14:00:23', 5, 18, 0, 9, 'Disetujui', 'Done', 'Active'),
(18, 2, 3, 2, 1008, 22, '2018-03-24 13:41:08', '2018-03-24 13:41:39', 0, 16, 0, 0, 'Disetujui', 'Done', 'Active'),
(19, 2, 3, 2, 1009, 20, '2018-03-24 13:44:42', '2018-03-24 13:49:34', 0, 10, 0, 0, 'Disetujui', 'Done', 'Active'),
(21, 2, 3, 2, 1011, 21, '2018-03-24 13:50:25', '2018-03-24 13:56:48', 0, 10, 0, 0, 'Disetujui', 'Done', 'Active'),
(22, 2, 3, 2, 1014, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'Active'),
(23, 2, 3, 3, 1008, 19, '2018-03-24 13:58:55', '2018-03-24 13:59:25', 0, 17, 0, 0, 'Disetujui', 'Done', 'Active'),
(24, 2, 3, 3, 1009, 19, '2018-03-24 14:02:05', '2018-03-24 14:03:26', 0, 16, 0, 0, 'Disetujui', 'Done', 'Active'),
(25, 2, 3, 4, 1008, 19, '2018-03-24 14:00:34', '2018-03-24 14:01:43', 0, 17, 0, 0, 'Disetujui', 'Done', 'Active'),
(26, 2, 3, 4, 1009, 19, '2018-03-24 14:03:45', '2018-03-24 14:04:18', 0, 16, 0, 0, 'Disetujui', 'Done', 'Active'),
(27, 2, 3, 3, 1014, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'Active'),
(28, 2, 3, 4, 1014, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'Active'),
(29, 2, 4, 0, 1005, 19, '2018-03-24 14:14:27', '2018-03-24 14:14:38', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(30, 2, 4, 0, 1006, 24, '2018-03-24 14:14:55', '2018-03-24 14:16:17', 0, 30, 0, 5, 'Disetujui', 'Done', 'Active'),
(32, 2, 4, 5, 1007, 19, '2018-03-24 14:17:49', '0000-00-00 00:00:00', 30, 30, 0, 5, 'Disetujui', 'On Progress', 'Active'),
(33, 3, 5, 0, 1004, 20, '2018-03-24 16:19:57', '2018-03-24 16:36:40', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(34, 3, 6, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'Active'),
(35, 3, 5, 0, 1005, 22, '2018-03-24 16:37:08', '2018-03-24 16:37:20', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(36, 3, 5, 0, 1006, 24, '2018-03-24 16:37:39', '2018-03-24 16:40:24', 0, 90, 0, 20, 'Disetujui', 'Done', 'Active'),
(38, 3, 5, 6, 1007, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, 0, 0, 3, 'Belum Disetujui', 'Belum ada PIC', 'Active');

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

--
-- Dumping data for table `factproduction3`
--

INSERT INTO `factproduction3` (`idProProd`, `idSPK`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `berat`, `beratAwal`, `kembali`, `statusBerat`, `statusWork`, `statusSPK`) VALUES
(1, 1, 1004, 24, '2018-03-24 08:13:01', '2018-03-24 08:57:53', 0, 0, 0, '', 'Done', 'Active'),
(2, 1, 1005, 21, '2018-03-24 08:58:01', '2018-03-24 08:58:12', 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(3, 1, 1006, 20, '2018-03-24 08:58:26', '2018-03-24 08:58:32', 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(4, 1, 1007, 19, '2018-03-24 09:00:07', '2018-03-24 09:01:07', 60, 62, 0, 'Disetujui', 'Done', 'Active'),
(5, 1, 1008, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'Active');

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

--
-- Dumping data for table `factproductionservice`
--

INSERT INTO `factproductionservice` (`idProProd`, `idSPK`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `berat`, `beratAwal`, `kembali`, `statusBerat`, `statusWork`, `statusSPK`) VALUES
(1, 1, 1001, 19, '2018-03-22 23:30:01', '2018-03-22 23:30:04', 36.5, 0, 0, 'Disetujui', 'Done', 'Done'),
(2, 1, 1002, 20, '2018-03-22 23:30:19', '2018-03-22 23:30:41', 35, 0, 0, 'Disetujui', 'Done', 'Done'),
(3, 1, 1003, 23, '2018-03-22 23:30:48', '2018-03-22 23:31:08', 34.6, 0, 0, 'Disetujui', 'Done', 'Done'),
(4, 1, 1004, 22, '2018-03-22 23:31:16', '2018-03-22 23:31:36', 33, 0, 0, 'Disetujui', 'Done', 'Done'),
(5, 1, 1005, 21, '2018-03-22 23:31:42', '2018-03-22 23:32:04', 32.5, 0, 0, 'Disetujui', 'Done', 'Done'),
(6, 1, 1006, 24, '2018-03-22 23:32:11', '2018-03-22 23:32:56', 31, 0, 0, 'Disetujui', 'Done', 'Done'),
(7, 1, 1007, 18, '2018-03-22 23:38:59', '2018-03-22 23:38:59', 30, 0, 0, 'Belum Disetujui', 'Done', 'Done'),
(8, 2, 1001, 22, '2018-03-22 23:46:17', '2018-03-22 23:46:31', 49, 0, 0, 'Disetujui', 'Done', 'Done'),
(9, 2, 1006, 22, '2018-03-22 23:46:38', '2018-03-22 23:46:58', 40, 0, 0, 'Disetujui', 'Done', 'Done'),
(10, 2, 1007, 18, '2018-03-22 23:52:27', '2018-03-22 23:52:27', 31, 0, 0, 'Belum Disetujui', 'Done', 'Done');

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

--
-- Dumping data for table `invoiceheader`
--

INSERT INTO `invoiceheader` (`idHeader`, `nomorPO`, `total`, `jenisInvoice`, `tipeInvoice`, `lastModified`) VALUES
(1, '1', 45105100, 'tempahan', 'perseorangan', '2018-03-22 16:57:11');

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
(1, 1, '1', 83.44, 10, 1, 74.44, 586178, 43635100, 500000, 20, 200000, 4000000, 20, 5000, 100000, 120000, 5, 450000, 2250000, 1000000, 45105100);

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
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `idKatalog` int(11) NOT NULL,
  `kodeProduk` varchar(200) NOT NULL,
  `namaProduk` varchar(255) NOT NULL,
  `jenisProduk` varchar(150) NOT NULL,
  `deskripsiProduk` text NOT NULL,
  `hargaProduk` float NOT NULL,
  `gambarProduk` varchar(50) NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`idKatalog`, `kodeProduk`, `namaProduk`, `jenisProduk`, `deskripsiProduk`, `hargaProduk`, `gambarProduk`, `lastModified`) VALUES
(1, 'CLT-100', 'Cincin Saphire Biru', 'Cincin', 'Batu Zirkon 20 Buah\r\nBerat 20 gr', 2450000, 'YMNWvACcxd', '2018-03-13 08:40:27'),
(2, 'CLT-101', 'Liontin Saphire Merah', 'Liontin', 'Berat Batu Saphire 15 Gr', 670000, 'ky9KPxnQcp', '2018-03-13 10:13:38'),
(3, 'CPR 12312', 'Cincin Kawin', 'Liontin', 'Coba', 2000000, 'uV6uKdYjL3', '2018-03-15 05:52:51'),
(4, 'KTO 12322', 'Cincin Nikah Pria', 'Cincin', 'contoh deskripsi produk', 1000000, 'w3Wd2XreHF', '2018-03-15 05:53:57'),
(5, 'CLT-102', 'Kotak Cincin Biru', 'Liontin', 'Warna: Biru', 70000, 'ffVnq8KL8q', '2018-03-24 07:41:45'),
(6, 'CXL 123', 'Cincin Saphire Biru', 'Cincin', 'contoh desikripsi', 1233230, 'uH5fxAT7js', '2018-03-24 09:04:45');

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
(2, 'eIbFTRhkKe', 1, 'Kloter-60-Andi', 60, '2018-03-22 22:13:11'),
(3, 'eIbFTRhkKe', 2, 'Kloter-60-Andi', 60, '2018-03-22 22:13:11');

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

--
-- Dumping data for table `kloter2`
--

INSERT INTO `kloter2` (`idGroup`, `idKloter`, `idSPK`, `nama`, `kadar`, `tgl_kloter`) VALUES
(1, 'moJnLN9iC5', 1, 'Kadar 60%', 60, '2018-03-24 08:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `materialdasar`
--

CREATE TABLE `materialdasar` (
  `idMaterial` int(11) NOT NULL,
  `kodeMaterial` varchar(255) NOT NULL,
  `namaMaterial` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `stokMaterial` float NOT NULL,
  `safetyStock` float NOT NULL,
  `kategori` varchar(123) NOT NULL DEFAULT 'Emas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materialdasar`
--

INSERT INTO `materialdasar` (`idMaterial`, `kodeMaterial`, `namaMaterial`, `satuan`, `stokMaterial`, `safetyStock`, `kategori`) VALUES
(7, '101', 'Emas Kuning 65%', 'gram', -1496.6, 100, 'Emas'),
(8, '102', 'Emas Kuning 63%', 'gram', 200, 100, 'Emas'),
(9, '103', 'Emas Kuning 60%', 'gram', 137.6, 100, 'Emas'),
(10, '104', 'Emas Kuning 59.5%', 'gram', -579.8, 100, 'Emas'),
(11, '105', 'Emas Kuning 48%', 'gram', 200, 100, 'Emas'),
(12, '106', 'Emas Kuning 40%', 'gram', 101, 100, 'Emas'),
(13, '107', 'Emas Kuning 38%', 'gram', 200, 100, 'Emas'),
(14, '201', 'Emas Rose Gold 75%', 'gram', 885.16, 100, 'Emas'),
(15, '202', 'Emas Rose Gold 70%', 'gram', 30.74, 100, 'Emas'),
(16, '203', 'Emas Putih 70%', 'gram', -52, 100, 'Emas'),
(17, '204', 'Emas Putih 75%', 'gram', 200, 100, 'Emas'),
(18, '205', 'Emas Kuning 70%', 'gram', 76.8, 100, 'Emas'),
(19, '206', 'Emas Kuning 80%', 'gram', 200, 100, 'Emas'),
(20, '207', 'Emas Swasa 50%', 'gram', 200, 100, 'Emas'),
(21, '301', 'Alloy', 'gram', 153.98, 100, 'Non Emas'),
(22, '302', 'Tembaga', 'gram', 195.13, 100, 'Non Emas'),
(23, '303', 'Perak', 'gram', 195.13, 100, 'Non Emas'),
(24, '304', 'Paladium', 'gram', 189.28, 100, 'Non Emas'),
(25, 'APX-702', 'Vibranium', 'Gram', 100, 100, 'Emas');

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
  `tipeOrder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pomasal`
--

INSERT INTO `pomasal` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `biayaTambahan`, `beratAkhir`, `metode`, `panjar`, `totalHarga`, `lastModified`, `tipeOrder`) VALUES
(1, 1, 1, 9, 19, '2018-03-22 00:00:00', '2018-03-31 00:00:00', 600000, 800000, 12, 0, 60, '', 0, 0, 'Teliti', 'Slap,Kombinasi', 'Kode tulisan "AX"', 0, 300, '', 2000000, 0, '2018-03-22 11:43:28', 'massal'),
(2, 2, 2, 9, 21, '2018-03-24 00:00:00', '2018-03-31 00:00:00', 577000, 3000000, 60, 0, 60, '', 0, 0, 'Teliti', 'Slap,Kombinasi', 'Kode nama ''AZ''', 0, 230, '', 4000000, 0, '2018-03-24 05:38:21', 'massal'),
(3, 3, 1, 8, 19, '2018-03-24 00:00:00', '2018-03-31 00:00:00', 123333, 111111000, 11, 0, 11, '', 0, 0, 'Teliti', 'Slap', '11', 0, 111, '', 11111100, 0, '2018-03-24 08:53:09', 'massal');

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
  `metode` varchar(100) NOT NULL,
  `budget` int(11) NOT NULL,
  `panjar` float NOT NULL,
  `totalHarga` float NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poperak`
--

INSERT INTO `poperak` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `biayaTambahan`, `kuantitas`, `metode`, `budget`, `panjar`, `totalHarga`, `lastModified`, `tipeOrder`) VALUES
(1, 1, 1, 3, 19, '2018-03-22 00:00:00', '2018-03-31 00:00:00', 600000, 0, 6, 600000, 60, '1', 12, 200000, 'Teliti', 'Enamel,Slap', 'Kode nama ''AZ''', 0, 1, 'Design', 2500000, 1500000, 0, '2018-03-22 12:09:15', 'custom'),
(2, 2, 2, 9, 19, '2018-03-24 00:00:00', '2018-03-24 00:00:00', 12343200, 0, 11, 11, 11, '1', 11, 111111, 'Teliti', 'Enamel', '11', 0, 1, 'Design', 11111, 11111, 0, '2018-03-24 08:57:09', 'custom');

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
  `metode` varchar(100) NOT NULL,
  `budget` int(11) NOT NULL,
  `panjar` float NOT NULL,
  `totalHarga` float NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipeOrder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potempahan`
--

INSERT INTO `potempahan` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `biayaTambahan`, `kuantitas`, `metode`, `budget`, `panjar`, `totalHarga`, `lastModified`, `tipeOrder`) VALUES
(1, 1, 1, 8, 21, '2018-03-22 00:00:00', '2018-03-31 00:00:00', 500000, 500000, 5, 450000, 50, '1', 20, 200000, 'Teliti', 'Enamel,Kombinasi', 'Cepet Mas', 20000, 1, 'Design', 2500000, 1000000, 500000, '2018-03-22 11:19:33', 'custom'),
(2, 2, 2, 12, 19, '2018-03-22 00:00:00', '2018-03-30 00:00:00', 700000, 700000, 0, 0, 0, '0', 0, 0, 'Teliti', 'Tidak Ada', '', 0, 1, 'Design', 2000000, 600000, 700000, '2018-03-22 14:23:14', 'custom'),
(3, 3, 3, 14, 19, '2018-01-09 00:00:00', '2018-01-21 00:00:00', 470000, 2000000, 0, 0, 0, '', 0, 0, 'Teliti', 'Kode Cap', 'cap kode  750', 0, 1, 'Design', 0, 2000000, 2000000, '2018-03-24 08:00:33', 'custom');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `kodeProduk` varchar(100) NOT NULL,
  `namaProduk` varchar(200) NOT NULL,
  `jenisProduk` varchar(100) NOT NULL,
  `bahan` varchar(200) NOT NULL,
  `kadarBahan` int(11) NOT NULL,
  `namaBatu` varchar(200) NOT NULL,
  `beratBatu` int(11) NOT NULL,
  `ukuranJari` int(11) NOT NULL,
  `berlian` varchar(200) NOT NULL,
  `beratBerlian` int(11) NOT NULL,
  `hargaBerlian` int(11) NOT NULL,
  `batuZirkon` varchar(100) NOT NULL,
  `jumlahBatuZirkon` int(11) NOT NULL,
  `hargaBatuZirkon` int(11) NOT NULL,
  `krumWarna` varchar(200) NOT NULL,
  `hargaKrumWarna` int(11) NOT NULL,
  `keteranganKrum` varchar(255) NOT NULL,
  `tipeIkatan` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `kodeGambar` varchar(255) NOT NULL,
  `stok` int(11) DEFAULT '0',
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `bahan`, `kadarBahan`, `namaBatu`, `beratBatu`, `ukuranJari`, `berlian`, `beratBerlian`, `hargaBerlian`, `batuZirkon`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `krumWarna`, `hargaKrumWarna`, `keteranganKrum`, `tipeIkatan`, `model`, `harga`, `kodeGambar`, `stok`, `lastModified`) VALUES
(1, 'CLS-100', 'Muhammad Andre-1-Ruby', 'Cincin', 'Emas Kuning', 60, 'Ruby', 10, 12, 'Ashberg', 6, 1200000, 'PRQ', 20, 5000, 'Perak', 120000, 'Mengkilat', 'Bungkus', 'Cincin Pria', 0, 'IQjrAaLKJe', 1, '2018-03-22 16:10:51'),
(2, 'CLC-121', 'Denanda Putri-2-Saphire', 'Cincin', 'Emas Putih', 60, 'Saphire', 8, 11, 'Ashgard', 9, 2000000, 'Swarovski', 15, 6000, 'Putih', 90000, 'Mengkilat', 'Bungkus', 'Cincin Wanita', 0, 'W7G84wHaba', 0, '2018-03-22 14:23:14'),
(3, 'ccn 1', 'ko joni-3-peridot', 'Cincin', 'Emas Putih', 70, 'peridot', 0, 19, 'dIamond poin 2', 0, 215000, '', 0, 0, 'putih + doff putih', 50000, '', 'Kuku', 'model ikuti contoh gambar, batu mau keliling poin 2, buat 2 baris', 0, '9vkvHGWtR5', 0, '2018-03-24 08:00:33');

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
(1, 1, 1001, 0, 0),
(2, 1, 1002, 0, 0),
(3, 1, 1003, 0, 0),
(4, 1, 1004, 0, 0),
(5, 1, 1005, 0, 0),
(6, 1, 1006, 0, 0),
(7, 1, 1007, 0, 0),
(8, 1, 1008, 0, 0),
(9, 1, 1009, 0, 0),
(10, 1, 1011, 0, 0),
(11, 1, 1012, 0, 0),
(12, 1, 1013, 0, 0),
(13, 1, 1014, 0, 0),
(14, 2, 1001, 0, 0),
(15, 2, 1002, 0, 0),
(16, 2, 1003, 0, 0),
(17, 2, 1004, 0, 0),
(18, 2, 1005, 0, 0),
(19, 2, 1006, 0, 0),
(20, 2, 1007, 0, 0),
(21, 2, 1008, 0, 0),
(22, 2, 1009, 0, 0),
(26, 2, 1014, 0, 0),
(27, 1, 1004, 0, 0),
(28, 1, 1005, 0, 0),
(29, 1, 1006, 0, 0),
(30, 1, 1007, 0, 0),
(31, 1, 1008, 0, 0),
(32, 1, 1009, 0, 0),
(33, 1, 1011, 0, 0),
(34, 1, 1012, 0, 0),
(35, 1, 1013, 0, 0),
(36, 1, 1014, 0, 0),
(37, 1, 1004, 0, 0),
(38, 1, 1005, 0, 0),
(39, 1, 1006, 0, 0),
(40, 1, 1007, 0, 0),
(41, 1, 1008, 0, 0),
(42, 1, 1009, 0, 0),
(43, 1, 1011, 0, 0),
(44, 1, 1012, 0, 0),
(45, 1, 1013, 0, 0),
(46, 1, 1014, 0, 0),
(47, 1, 1003, 0, 0),
(48, 1, 1004, 0, 0),
(49, 1, 1005, 0, 0),
(50, 1, 1006, 0, 0),
(51, 1, 1007, 0, 0),
(52, 1, 1008, 0, 0),
(53, 1, 1009, 0, 0),
(54, 1, 1011, 0, 0),
(55, 1, 1012, 0, 0),
(56, 1, 1013, 0, 0),
(57, 1, 1014, 0, 0),
(58, 2, 1004, 0, 0),
(59, 2, 1005, 0, 0),
(60, 2, 1006, 0, 0),
(61, 2, 1007, 0, 0),
(62, 2, 1008, 0, 0),
(63, 2, 1009, 0, 0),
(67, 2, 1014, 0, 0),
(68, 3, 1001, 0, 0),
(69, 3, 1002, 0, 0),
(70, 3, 1003, 0, 0),
(71, 3, 1004, 0, 0),
(72, 3, 1005, 0, 0),
(73, 3, 1006, 0, 0),
(74, 3, 1007, 0, 0),
(75, 3, 1008, 0, 0),
(76, 3, 1009, 0, 0),
(77, 3, 1010, 0, 0),
(78, 3, 1011, 0, 0),
(79, 3, 1012, 0, 0),
(80, 3, 1013, 0, 0),
(81, 3, 1014, 0, 0),
(82, 1, 1004, 0, 0),
(83, 1, 1005, 0, 0),
(84, 1, 1006, 0, 0),
(85, 1, 1007, 0, 0),
(86, 1, 1008, 0, 0),
(87, 1, 1009, 0, 0),
(88, 1, 1010, 0, 0),
(89, 1, 1011, 0, 0),
(90, 1, 1012, 0, 0),
(91, 1, 1013, 0, 0),
(92, 1, 1014, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produktrading`
--

CREATE TABLE `produktrading` (
  `idProduk` int(11) NOT NULL,
  `kodeProduk` varchar(100) NOT NULL,
  `namaProduk` varchar(200) NOT NULL,
  `jenisProduk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `kodeGambar` varchar(255) NOT NULL,
  `stok` int(11) DEFAULT '0',
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produktrading`
--

INSERT INTO `produktrading` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `harga`, `kodeGambar`, `stok`, `lastModified`) VALUES
(1, 'TRD-111', 'Pinset', 'Alat Pasang Berlian', 40000, '', 10, '2018-03-22 12:32:35');

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
  `tipeOrder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseorderservice`
--

INSERT INTO `purchaseorderservice` (`idPO`, `nomorPO`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `lastModified`, `tipeOrder`) VALUES
(1, '1', 10, 19, '2018-03-22 00:00:00', '2018-03-23 00:00:00', '2018-03-22 12:27:15', 'service'),
(2, '2', 13, 19, '2018-03-22 00:00:00', '2018-03-23 00:00:00', '2018-03-22 16:45:16', 'service'),
(3, '3', 16, 19, '2018-03-24 00:00:00', '2018-03-31 00:00:00', '2018-03-24 08:54:42', 'service');

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

--
-- Dumping data for table `purchaseordertrading`
--

INSERT INTO `purchaseordertrading` (`idPO`, `nomorPO`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `lastModified`, `tipeOrder`, `totalHarga`) VALUES
(1, '1', 12, 19, '2018-03-22 00:00:00', '2018-03-22 12:34:00', 'trading', 80000),
(2, '2', 15, 19, '2018-03-23 00:00:00', '2018-03-24 08:40:23', 'trading', 40000);

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

--
-- Dumping data for table `rekapproduksi`
--

INSERT INTO `rekapproduksi` (`idRekapProduksi`, `kodeRekapProduksi`, `idPIC`, `waktuPengembalian`, `beratKembali`, `jenisProduksi`) VALUES
(3, 'BFHLarhV9p', 18, '2018-03-23 19:06:42', 13.5, 'tempahan');

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
(4, 'BFHLarhV9p', 9),
(5, 'BFHLarhV9p', 15);

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
(1, 1, 1001, '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
(2, 1, 1002, '2018-03-23 00:00:00', '2018-03-23 00:00:00'),
(3, 1, 1003, '2018-03-24 00:00:00', '2018-03-24 00:00:00'),
(4, 1, 1004, '2018-03-25 00:00:00', '2018-03-25 00:00:00'),
(5, 1, 1005, '2018-03-26 00:00:00', '2018-03-26 00:00:00'),
(6, 1, 1006, '2018-03-27 00:00:00', '2018-03-27 00:00:00'),
(7, 1, 1007, '2018-03-28 00:00:00', '2018-03-28 00:00:00'),
(8, 1, 1008, '2018-03-29 00:00:00', '2018-03-29 00:00:00'),
(9, 1, 1009, '2018-03-30 00:00:00', '2018-03-30 00:00:00'),
(10, 1, 1011, '2018-04-01 00:00:00', '2018-04-01 00:00:00'),
(11, 1, 1012, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(12, 1, 1013, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(13, 1, 1014, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(14, 2, 1001, '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
(15, 2, 1002, '2018-03-23 00:00:00', '2018-03-23 00:00:00'),
(16, 2, 1003, '2018-03-24 00:00:00', '2018-03-24 00:00:00'),
(17, 2, 1004, '2018-03-25 00:00:00', '2018-03-25 00:00:00'),
(18, 2, 1005, '2018-03-26 00:00:00', '2018-03-26 00:00:00'),
(19, 2, 1006, '2018-03-27 00:00:00', '2018-03-27 00:00:00'),
(20, 2, 1007, '2018-03-28 00:00:00', '2018-03-28 00:00:00'),
(21, 2, 1008, '2018-03-29 00:00:00', '2018-03-29 00:00:00'),
(22, 2, 1009, '2018-03-30 00:00:00', '2018-03-30 00:00:00'),
(23, 2, 1011, '2018-04-01 00:00:00', '2018-04-01 00:00:00'),
(24, 2, 1012, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(25, 2, 1013, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(26, 2, 1014, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(27, 3, 1001, '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(28, 3, 1002, '2018-01-10 00:00:00', '2018-01-10 00:00:00'),
(29, 3, 1003, '2018-01-11 00:00:00', '2018-01-11 00:00:00'),
(30, 3, 1004, '2018-01-12 00:00:00', '2018-01-12 00:00:00'),
(31, 3, 1005, '2018-01-13 00:00:00', '2018-01-13 00:00:00'),
(32, 3, 1006, '2018-01-14 00:00:00', '2018-01-14 00:00:00'),
(33, 3, 1007, '2018-01-15 00:00:00', '2018-01-15 00:00:00'),
(34, 3, 1008, '2018-01-16 00:00:00', '2018-01-16 00:00:00'),
(35, 3, 1009, '2018-01-17 00:00:00', '2018-01-17 00:00:00'),
(36, 3, 1010, '2018-01-18 00:00:00', '2018-01-18 00:00:00'),
(37, 3, 1011, '2018-01-19 00:00:00', '2018-01-19 00:00:00'),
(38, 3, 1012, '2018-01-20 00:00:00', '2018-01-20 00:00:00'),
(39, 3, 1013, '2018-01-21 00:00:00', '2018-01-21 00:00:00'),
(40, 3, 1014, '2018-01-22 00:00:00', '2018-01-22 00:00:00');

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
(1, 1, 1004, '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
(2, 1, 1005, '2018-03-23 00:00:00', '2018-03-23 00:00:00'),
(3, 1, 1006, '2018-03-24 00:00:00', '2018-03-24 00:00:00'),
(4, 1, 1007, '2018-03-25 00:00:00', '2018-03-25 00:00:00'),
(5, 1, 1008, '2018-03-26 00:00:00', '2018-03-26 00:00:00'),
(6, 1, 1009, '2018-03-27 00:00:00', '2018-03-27 00:00:00'),
(7, 1, 1011, '2018-03-29 00:00:00', '2018-03-29 00:00:00'),
(8, 1, 1012, '2018-03-30 00:00:00', '2018-03-30 00:00:00'),
(9, 1, 1013, '2018-03-31 00:00:00', '2018-03-31 00:00:00'),
(10, 1, 1014, '2018-04-01 00:00:00', '2018-04-01 00:00:00'),
(11, 2, 1004, '2018-03-24 00:00:00', '2018-03-24 00:00:00'),
(12, 2, 1005, '2018-03-25 00:00:00', '2018-03-25 00:00:00'),
(13, 2, 1006, '2018-03-26 00:00:00', '2018-03-26 00:00:00'),
(14, 2, 1007, '2018-03-27 00:00:00', '2018-03-27 00:00:00'),
(15, 2, 1008, '2018-03-28 00:00:00', '2018-03-28 00:00:00'),
(16, 2, 1009, '2018-03-29 00:00:00', '2018-03-29 00:00:00'),
(17, 2, 1014, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(21, 3, 1004, '2018-03-24 00:00:00', '2018-03-24 00:00:00'),
(22, 3, 1005, '2018-03-25 00:00:00', '2018-03-25 00:00:00'),
(23, 3, 1006, '2018-03-26 00:00:00', '2018-03-26 00:00:00'),
(24, 3, 1007, '2018-03-27 00:00:00', '2018-03-27 00:00:00'),
(25, 3, 1008, '2018-03-28 00:00:00', '2018-03-28 00:00:00'),
(26, 3, 1009, '2018-03-29 00:00:00', '2018-03-29 00:00:00'),
(27, 3, 1010, '2018-03-30 00:00:00', '2018-03-30 00:00:00'),
(28, 3, 1011, '2018-03-31 00:00:00', '2018-03-31 00:00:00'),
(29, 3, 1012, '2018-04-01 00:00:00', '2018-04-01 00:00:00'),
(30, 3, 1013, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(31, 3, 1014, '2018-04-03 00:00:00', '2018-04-03 00:00:00');

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

--
-- Dumping data for table `rencanaproduksi3`
--

INSERT INTO `rencanaproduksi3` (`idRencana`, `idSPK`, `idAktivitas`, `startDate`, `endDate`) VALUES
(1, 1, 1003, '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
(2, 1, 1004, '2018-03-23 00:00:00', '2018-03-23 00:00:00'),
(3, 1, 1005, '2018-03-24 00:00:00', '2018-03-24 00:00:00'),
(4, 1, 1006, '2018-03-25 00:00:00', '2018-03-25 00:00:00'),
(5, 1, 1007, '2018-03-26 00:00:00', '2018-03-26 00:00:00'),
(6, 1, 1008, '2018-03-27 00:00:00', '2018-03-27 00:00:00'),
(7, 1, 1009, '2018-03-28 00:00:00', '2018-03-28 00:00:00'),
(8, 1, 1011, '2018-03-30 00:00:00', '2018-03-30 00:00:00'),
(9, 1, 1012, '2018-03-31 00:00:00', '2018-03-31 00:00:00'),
(10, 1, 1013, '2018-04-01 00:00:00', '2018-04-01 00:00:00'),
(11, 1, 1014, '2018-04-02 00:00:00', '2018-04-02 00:00:00');

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

--
-- Dumping data for table `rencanaproduksiservice`
--

INSERT INTO `rencanaproduksiservice` (`idRencana`, `idSPK`, `idAktivitas`, `startDate`, `endDate`) VALUES
(1, 1, 1001, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(2, 1, 1002, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(3, 1, 1003, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(4, 1, 1004, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(5, 1, 1005, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(6, 1, 1006, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(7, 1, 1007, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(8, 2, 1001, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(9, 2, 1006, '2018-03-22 12:03:00', '2018-03-22 12:03:00'),
(10, 2, 1007, '2018-03-22 12:03:00', '2018-03-22 12:03:00');

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
  `batuTerhadapKruman` varchar(100) NOT NULL,
  `batuTerhadapPukulan` varchar(100) NOT NULL,
  `batuTerhadapGoresan` varchar(100) NOT NULL,
  `keadaanBatuTengah` varchar(100) NOT NULL,
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
  `prioritas` int(11) NOT NULL,
  `statusSPK` varchar(100) NOT NULL DEFAULT 'On progress'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spk`
--

INSERT INTO `spk` (`idSPK`, `nomorFaktur`, `nomorPO`, `idProduk`, `idCustomer`, `batuTerhadapKruman`, `batuTerhadapPukulan`, `batuTerhadapGoresan`, `keadaanBatuTengah`, `statusDesain`, `tanggalApprovalDesain`, `PICDesain`, `statusBOM`, `tanggalApprovalBOM`, `PICBOM`, `statusJadwal`, `tanggalApprovalJadwal`, `PICJadwal`, `statusPersetujuan`, `tanggalApprovalPersetujuan`, `PICPersetujuan`, `lastModified`, `prioritas`, `statusSPK`) VALUES
(1, 1, 1, 1, 8, 'Tahan', 'Bagus', 'Lebih dari 7', 'Sompel', 'Disetujui', '2018-03-22 22:03:31', 20, 'Disetujui', '2018-03-22 22:32:41', 18, 'Disetujui', '2018-03-22 21:13:44', 18, 'Disetujui', '2018-03-22 22:32:41', 18, '2018-03-22 16:10:52', 1, 'Done'),
(2, 2, 2, 2, 12, 'Tahan', 'Cukup', '6,5 Sampai 7,5', 'Mulus', 'Disetujui', '2018-03-22 22:04:51', 22, 'Disetujui', '2018-03-22 22:32:41', 18, 'Disetujui', '2018-03-22 22:03:59', 18, 'Disetujui', '2018-03-22 22:32:41', 18, '2018-03-22 15:32:41', 1, 'On progress'),
(3, 3, 3, 3, 14, 'Tahan', 'Sangat Bagus', 'Kurang dari 6', 'Mulus', 'Disetujui', '2018-03-24 15:50:45', 20, 'Belum Ada', '0000-00-00 00:00:00', 18, 'Sudah Ada', '2018-03-24 15:45:49', 18, 'Belum Disetujui', '0000-00-00 00:00:00', 18, '2018-03-24 08:50:45', 1, 'On progress');

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
(1, 1, 1, 1, 9, 'Disetujui', '2018-03-23 21:07:09', 18, 'Sudah Ada', '2018-03-24 08:04:11', 18, 'Disetujui', '2018-03-23 21:07:09', 18, '2018-03-24 01:04:11', 1, 'On progress'),
(2, 2, 2, 2, 9, 'Disetujui', '2018-03-24 12:41:29', 18, 'Disetujui', '2018-03-24 12:39:42', 18, 'Disetujui', '2018-03-24 12:41:29', 18, '2018-03-24 05:41:29', 1, 'On progress'),
(3, 3, 3, 1, 8, 'Disetujui', '2018-03-24 16:18:47', 18, 'Disetujui', '2018-03-24 16:16:50', 18, 'Disetujui', '2018-03-24 16:18:47', 18, '2018-03-24 09:18:47', 1, 'On progress');

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

--
-- Dumping data for table `spkperak`
--

INSERT INTO `spkperak` (`idSPK`, `nomorFaktur`, `nomorPO`, `idProduk`, `idCustomer`, `statusDesain`, `tanggalApprovalDesain`, `PICDesain`, `statusBOM`, `tanggalApprovalBOM`, `PICBOM`, `statusJadwal`, `tanggalApprovalJadwal`, `PICJadwal`, `statusPersetujuan`, `tanggalApprovalPersetujuan`, `PICPersetujuan`, `lastModified`, `prioritas`) VALUES
(1, 1, 1, 1, 3, '', '0000-00-00 00:00:00', 0, 'Disetujui', '2018-03-24 08:57:53', 18, 'Disetujui', '2018-03-24 08:07:00', 18, 'Disetujui', '2018-03-24 08:57:53', 18, '2018-03-24 01:57:53', 2);

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
(1, 1, 1, 10, 'Disetujui', '0000-00-00 00:00:00', 18, '2018-03-22 16:38:59', 2, 'Done'),
(2, 2, 2, 13, 'Disetujui', '0000-00-00 00:00:00', 18, '2018-03-22 16:52:27', 5, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `stokbarang`
--

CREATE TABLE `stokbarang` (
  `idStok` int(11) NOT NULL,
  `tipeBarang` varchar(255) NOT NULL,
  `kodeBarang` varchar(255) NOT NULL,
  `jumlah` double NOT NULL,
  `jenisPergerakanBarang` varchar(255) NOT NULL,
  `hargaBeli` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stokbarang`
--

INSERT INTO `stokbarang` (`idStok`, `tipeBarang`, `kodeBarang`, `jumlah`, `jenisPergerakanBarang`, `hargaBeli`, `tanggal`) VALUES
(1, 'Material Dasar', '203', 252, 'OUT', 0, '2018-03-22 22:32:40'),
(2, 'Material Dasar', '301', 22.91, 'OUT', 0, '2018-03-22 22:32:40'),
(3, 'Material Dasar', '304', 4.12, 'OUT', 0, '2018-03-22 22:32:41'),
(4, 'Produk Jadi', 'CLS-100', 1, 'IN', 0, '2018-03-22 23:10:51'),
(5, 'Material Dasar', '104', 702, 'OUT', 0, '2018-03-24 01:28:22'),
(6, 'Material Dasar', '301', 1.09, 'OUT', 0, '2018-03-24 01:28:22'),
(7, 'Material Dasar', '302', 0.36, 'OUT', 0, '2018-03-24 01:28:22'),
(8, 'Material Dasar', '303', 0.36, 'OUT', 0, '2018-03-24 01:28:22'),
(9, 'Material Dasar', '101', 1117.8, 'OUT', 0, '2018-03-24 01:29:24'),
(10, 'Material Dasar', '301', 0.5, 'OUT', 0, '2018-03-24 01:29:24'),
(11, 'Material Dasar', '302', 0.17, 'OUT', 0, '2018-03-24 01:29:24'),
(12, 'Material Dasar', '303', 0.17, 'OUT', 0, '2018-03-24 01:29:24'),
(13, 'Material Dasar', '106', 99, 'OUT', 0, '2018-03-24 13:29:47'),
(14, 'Material Dasar', '301', 0.55, 'OUT', 0, '2018-03-24 13:29:47'),
(15, 'Material Dasar', '302', 0.18, 'OUT', 0, '2018-03-24 13:29:48'),
(16, 'Material Dasar', '303', 0.18, 'OUT', 0, '2018-03-24 13:29:48'),
(17, 'Material Dasar', '101', 481.95, 'OUT', 0, '2018-03-24 14:14:19'),
(18, 'Material Dasar', '104', 60, 'OUT', 0, '2018-03-24 14:14:19'),
(19, 'Material Dasar', '104', 17.8, 'OUT', 0, '2018-03-24 16:36:40');

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
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3);

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
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `nama`, `jabatan`, `level`, `phone`, `email`) VALUES
(0, '', '', 'Belum ada PIC', '', 0, '', ''),
(18, 'admprod', 'admprod', 'Sudirman', 'Admin Produksi', 0, '085236857136', 'adminprod@gmail.com'),
(19, 'andi', 'andi', 'Andi Noya', 'Staf Sales', 0, '085755911868', 'andi@gmail.com'),
(20, 'Dika', 'Dika', 'Dika', 'Staf Desain', 0, '08725673009', 'dika@gmail.com'),
(21, 'kurnia', 'kurnia', 'Kurnia', 'Staf Sales', 0, '082678210901', 'kurnia@gmail.com'),
(22, 'hans', 'hans', 'Hans Juno', 'Staf Desain', 0, '082109098375', 'hans@gmail.com'),
(23, 'weny', 'weny', 'Weny', 'Admin Produksi', 0, '084335673445', 'weny@gmail.com'),
(24, 'feridian', 'feridian', 'Feridian', 'Staf Lilin', 0, '087860218745', 'feridian@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wadah`
--

CREATE TABLE `wadah` (
  `idWadah` int(11) NOT NULL,
  `idSubSPK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wadah`
--

INSERT INTO `wadah` (`idWadah`, `idSubSPK`) VALUES
(1, 1),
(2, 3),
(3, 3),
(4, 3),
(5, 4),
(6, 5);

--
-- Indexes for dumped tables
--

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
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `bomperak`
--
ALTER TABLE `bomperak`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bomtempahan`
--
ALTER TABLE `bomtempahan`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `detailpurchaseorderservice`
--
ALTER TABLE `detailpurchaseorderservice`
  MODIFY `idDetailPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `detailpurchaseordertrading`
--
ALTER TABLE `detailpurchaseordertrading`
  MODIFY `idDetailPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `factproduction`
--
ALTER TABLE `factproduction`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `factproduction2`
--
ALTER TABLE `factproduction2`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `factproduction3`
--
ALTER TABLE `factproduction3`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `factproductionservice`
--
ALTER TABLE `factproductionservice`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `invoiceheader`
--
ALTER TABLE `invoiceheader`
  MODIFY `idHeader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `idKatalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kloter`
--
ALTER TABLE `kloter`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kloter2`
--
ALTER TABLE `kloter2`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `potempahan`
--
ALTER TABLE `potempahan`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  MODIFY `idProses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `produktrading`
--
ALTER TABLE `produktrading`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purchaseorderservice`
--
ALTER TABLE `purchaseorderservice`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purchaseordertrading`
--
ALTER TABLE `purchaseordertrading`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekapproduksi`
--
ALTER TABLE `rekapproduksi`
  MODIFY `idRekapProduksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rekapproduksiline`
--
ALTER TABLE `rekapproduksiline`
  MODIFY `idRekapProduksiLine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rencanaproduksi`
--
ALTER TABLE `rencanaproduksi`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `rencanaproduksi2`
--
ALTER TABLE `rencanaproduksi2`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `rencanaproduksi3`
--
ALTER TABLE `rencanaproduksi3`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rencanaproduksiservice`
--
ALTER TABLE `rencanaproduksiservice`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `spkmasal`
--
ALTER TABLE `spkmasal`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `spkperak`
--
ALTER TABLE `spkperak`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `spkservice`
--
ALTER TABLE `spkservice`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stokbarang`
--
ALTER TABLE `stokbarang`
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `subspk`
--
ALTER TABLE `subspk`
  MODIFY `idSubSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `wadah`
--
ALTER TABLE `wadah`
  MODIFY `idWadah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
