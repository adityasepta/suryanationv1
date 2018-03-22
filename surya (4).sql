-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 09:51 AM
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
(1, '2', 7, 113.4),
(2, '2', 21, 12.49),
(3, '2', 22, 4.16),
(4, '2', 23, 4.16),
(5, '1', 9, 62.4),
(6, '1', 7, -16.55);

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
(1, 'O6QQfRym55', 18, 123.2),
(2, 'O6QQfRym55', 21, 9.48),
(3, 'O6QQfRym55', 24, 1.99);

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
(3, 'Melita Sari Lubis', '085262244633', '2018-02-02 03:25:26'),
(4, 'Denanda Putri', '087859275353', '2018-02-02 10:09:33'),
(5, 'Ferdinan Sinaga', '087859275353', '2018-02-02 16:32:40'),
(6, 'Adrian Afnandika', '087545586120', '2018-02-24 17:27:17'),
(7, 'Melita Sari Lubis', '085262244633', '2018-02-27 06:59:27'),
(8, 'Muhammad Andre', '085276185896', '2018-02-27 07:00:25'),
(9, 'Hildan Ma''ruf', '085746324212', '2018-03-02 10:23:27');

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
(1, 1, 1004, 0, '2018-02-25 00:32:41', '2018-02-25 00:39:05', 0, 0, 0, '', 'Done', 'Done'),
(2, 1, 1005, 19, '2018-02-25 00:39:12', '2018-02-25 00:39:19', 0, 0, 0, 'Belum Disetujui', 'Done', 'Done'),
(3, 1, 1006, 18, '2018-02-25 00:39:38', '2018-02-25 00:39:45', 0, 0, 0, 'Belum Disetujui', 'Done', 'Done'),
(4, 1, 1007, 23, '2018-02-25 00:40:36', '2018-02-25 00:41:54', 50, 46, 0, 'Disetujui', 'Done', 'Done'),
(5, 1, 1008, 21, '2018-02-25 00:42:03', '2018-02-25 00:42:29', 0, 44, 0, 'Disetujui', 'Done', 'Done'),
(6, 1, 1013, 20, '2018-02-25 00:42:41', '2018-02-25 00:43:05', 0, 43, 0, 'Disetujui', 'Done', 'Done'),
(7, 1, 1014, 18, '2018-02-25 00:43:38', '2018-02-25 00:43:38', 0, 42, 0, 'Belum Disetujui', 'Done', 'Done');

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
(1, 1, 1, 0, 1004, 20, '2018-03-02 19:10:44', '2018-03-02 19:19:37', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(2, 1, 2, 0, 1004, 22, '2018-03-02 19:10:52', '2018-03-02 19:19:43', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(3, 1, 1, 0, 1005, 22, '2018-03-02 19:19:53', '2018-03-02 19:20:08', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(4, 1, 2, 0, 1005, 18, '2018-03-02 19:20:04', '2018-03-02 19:20:12', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Active'),
(5, 1, 1, 0, 1006, 19, '2018-03-02 19:24:11', '2018-03-02 19:24:58', 0, 40, 0, 20, 'Disetujui', 'Done', 'Active'),
(6, 1, 2, 0, 1006, 23, '2018-03-02 19:24:21', '2018-03-02 19:25:28', 0, 30, 0, 10, 'Disetujui', 'Done', 'Active'),
(9, 1, 1, 1, 1007, 21, '2018-03-02 19:29:18', '2018-03-02 19:31:40', 20, 9.5, 0, 10, 'Disetujui', 'Done', 'Active'),
(10, 1, 1, 2, 1007, 20, '2018-03-02 19:29:28', '2018-03-02 19:32:24', 20, 10, 0, 10, 'Disetujui', 'Done', 'Active'),
(11, 1, 2, 3, 1007, 18, '2018-03-02 19:29:40', '0000-00-00 00:00:00', 30, 0, 0, 10, 'Belum Disetujui', 'On Progress', 'Active'),
(12, 1, 1, 1, 1008, 19, '2018-03-02 19:32:38', '2018-03-02 19:33:31', 0, 9, 0, 0, 'Disetujui', 'Done', 'Active'),
(13, 1, 1, 2, 1008, 18, '2018-03-02 19:32:46', '0000-00-00 00:00:00', 0, 0, 0, 0, 'Belum Disetujui', 'On Progress', 'Active'),
(14, 1, 1, 1, 1009, 19, '2018-03-02 19:34:00', '2018-03-02 19:34:21', 0, 9, 0, 0, 'Disetujui', 'Done', 'Active'),
(15, 1, 1, 1, 1010, 23, '2018-03-02 19:34:29', '2018-03-02 19:35:03', 0, 8, 0, 0, 'Disetujui', 'Done', 'Active'),
(16, 1, 1, 1, 1011, 18, '2018-03-02 19:35:20', '2018-03-02 19:35:33', 0, 8, 0, 0, 'Disetujui', 'Done', 'Active'),
(17, 1, 1, 1, 1012, 18, '2018-03-02 19:35:53', '2018-03-02 19:36:21', 0, 7, 0, 0, 'Disetujui', 'Done', 'Active'),
(18, 1, 1, 1, 1013, 20, '2018-03-02 19:36:30', '2018-03-02 19:36:54', 0, 6.9, 0, 0, 'Disetujui', 'Done', 'Active'),
(19, 1, 1, 1, 1014, 18, '2018-03-02 20:26:21', '2018-03-02 20:26:21', 0, 6.5, 0, 0, 'Disetujui', 'Done', 'Active');

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

--
-- Dumping data for table `invoiceheader`
--

INSERT INTO `invoiceheader` (`idHeader`, `nomorPO`, `total`, `jenisInvoice`, `tipeInvoice`, `lastModified`) VALUES
(1, '1234', 17736000, 'tempahan', 'perseorangan', '2018-02-24 17:44:46');

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
(1, 1, '1234', 42, 5, 1, 38, 477000, 18126000, 600000, 0, 0, 0, 20, 8000, 160000, 50000, 0, 0, 0, 1200000, 17736000);

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
(1, 'O6QQfRym55', 1, 'Kadar 60%', 60, '2018-02-25 00:32:19'),
(2, 'NAXtcyoJY0', 3, 'Andre', 70, '2018-02-27 15:31:54');

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
(7, '101', 'Emas Kuning 65%', 'gram', 103.15, 100, 'Emas'),
(8, '102', 'Emas Kuning 63%', 'gram', 200, 100, 'Emas'),
(9, '103', 'Emas Kuning 60%', 'gram', 137.6, 100, 'Emas'),
(10, '104', 'Emas Kuning 59.5%', 'gram', 200, 100, 'Emas'),
(11, '105', 'Emas Kuning 48%', 'gram', 200, 100, 'Emas'),
(12, '106', 'Emas Kuning 40%', 'gram', 200, 100, 'Emas'),
(13, '107', 'Emas Kuning 38%', 'gram', 200, 100, 'Emas'),
(14, '201', 'Emas Rose Gold 75%', 'gram', 885.16, 100, 'Emas'),
(15, '202', 'Emas Rose Gold 70%', 'gram', 30.74, 100, 'Emas'),
(16, '203', 'Emas Putih 70%', 'gram', 200, 100, 'Emas'),
(17, '204', 'Emas Putih 75%', 'gram', 200, 100, 'Emas'),
(18, '205', 'Emas Kuning 70%', 'gram', 76.8, 100, 'Emas'),
(19, '206', 'Emas Kuning 80%', 'gram', 200, 100, 'Emas'),
(20, '207', 'Emas Swasa 50%', 'gram', 200, 100, 'Emas'),
(21, '301', 'Alloy', 'gram', -20.97, 100, 'Non Emas'),
(22, '302', 'Tembaga', 'gram', 195.84, 100, 'Non Emas'),
(23, '303', 'Perak', 'gram', 195.84, 100, 'Non Emas'),
(24, '304', 'Paladium', 'gram', 193.4, 100, 'Non Emas');

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
(3, 1, 5, 5, 5, 3, 6, 5, 5, 3, 3, 5, 3, 4, 1, 5, 4, 5, 6, 6, 4, 5, 22, 73, 5, 4, 5.5, 4, 4, 3.5, 3, 4.5, 6, 4.5, 4.5, 4.3, '2018-03-18 08:02:38');

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
(1, 1238, 4, 9, 19, '2018-03-02 00:00:00', '2018-03-09 00:00:00', 0, 150000, 35, 540000, 0, '5', 2, 150000, 'Standard', '', '', 0, 30, 'Design', 500000, 150000, '2018-03-02 10:23:27', 'custom');

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
(1, 1234, 10, 6, 19, '2018-02-25 00:00:00', '2018-03-03 00:00:00', 900000, 600000, 0, 0, 0, '0', 0, 0, 'Teliti', 'Enamel', 'AS', 50000, 1, 'Design', 2400000, 1200000, 600000, '2018-02-24 17:27:18', 'custom'),
(2, 1235, 11, 1, 19, '2018-03-03 00:00:00', '2018-03-10 00:00:00', 500000, 1000000, 100, 450000, 70, '25', 70, 1000000, 'Teliti', 'Enamel', '', 0, 100, 'Manual', 10000000, 1000000, 1000000, '2018-02-26 01:06:27', 'custom'),
(4, 1237, 13, 8, 21, '2018-02-27 00:00:00', '2018-03-05 00:00:00', 424500, 1000000, 0, 0, 0, '0', 0, 0, 'Teliti', 'Slap', 'Slap tikar', 30000, 1, 'Design', 15000000, 3000000, 1000000, '2018-02-27 07:00:25', 'custom');

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
(2, 'CLS-992', 'Brenda-1230-saphire gold', 'Cincin', 'Perak', 92, 'saphire gold', 100, 31, 'diamond', 0, 0, '', 0, 0, 'merah delima', 0, '', 'Bungkus', 'ke samping', 25000000, 'LWYfTxZlYU', 100, '2018-02-11 15:52:26'),
(3, 'CAC-102', 'Melita Sari Lubis-1233-Berlian', 'Cincin', 'Emas Putih', 70, 'Berlian', 0, 12, 'Diamond', 0, 0, '', 0, 0, 'Putih', 0, '', 'Kuku', 'Cincin Cewek Listring', 0, 'M5i41rNLO3', 1, '2018-02-11 15:52:34'),
(4, 'CLS-311', 'Brenda-1231-Berlian', 'Cincin', 'Emas Kuning', 2, 'Shapire Biru', 2, 1, 'Diamond', 0, 0, '', 0, 0, 'Emas', 0, '', 'Bungkus', 'Keroncong', 2000000, 'egE7TK8Pjs', 10, '2018-03-02 13:26:21'),
(5, 'CLS-1023', 'Denanda Putri-1234-Saphire', 'Anting', 'Emas Putih', 2, 'Saphire', 1, 1, 'Diamond', 0, 0, '', 0, 0, 'Silver', 0, '', 'Bungkus', 'Anting', 2300000, 'c1ocu6RvzW', 0, '2018-02-02 10:09:33'),
(6, 'CLS-101', 'Ferdinan Sinaga-1235-Kwarsa', 'Anting', 'Perak', 2, 'Kwarsa', 2, 12, 'Berlian', 0, 0, '', 0, 0, 'Silver', 0, '', 'Bungkus Kaku', 'Cincin Wanita', 2300000, 'Boz711zK7T', 0, '2018-02-02 16:32:40'),
(7, 'CLS-100', 'Brenda-1236-Saphire', 'Cincin', 'Emas Kuning', 65, 'Saphire', 0, 11, 'Swarowski', 0, 0, '', 0, 0, 'Kuning', 0, '', 'Tanam', 'Cincin Pria', 2300000, 'qEy7u6zwBl', 0, '2018-02-03 09:12:11'),
(8, 'CLS-230', 'Melita Sari Lubis-1238-Permata', 'Cincin', 'Emas Putih', 6, 'Permata', 2, 12, 'Berlian', 7, 800000, 'PRQ', 20, 5000, 'Putih', 600000, 'Kombinasi', 'Bungkus', 'Cincin Pria', 0, 'o1dnPPVYd1', 0, '2018-02-12 10:13:59'),
(9, 'CLS-444', 'Melita Sari Lubis-1239-Berlian', 'Cincin', 'Emas Kuning', 50, 'Berlian', 5, 12, 'Diamond', 5, 900000, 'Swarovski', 20, 6000, 'Emas', 60000, 'Emas Kuning', 'Bungkus', 'Cincin Pria', 0, 'WLd3sYX49I', 0, '2018-02-19 10:03:41'),
(10, 'CLS-239', 'Adrian Afnandika-1234-Saphire', 'Cincin', 'Emas Kuning', 60, 'Saphire', 5, 12, 'Berlian', 8, 2000000, 'Swarovski', 20, 8000, 'Kuning', 50000, 'Kombinasi', 'Bungkus', 'Cincin Pria', 0, 'iPOzhIYwoy', 1, '2018-02-24 17:43:38'),
(11, 'ABC 02', 'Brenda-1235-merah delima', 'Cincin', 'Emas Kuning', 70, 'merah delima', 10, 21, 'cj', 70, 600000, 'Swarovski', 10, 200000, 'merah', 150000, '', 'Bungkus', 'agak ke atas', 0, 'EjNw5k0y6L', 0, '2018-02-26 01:06:27'),
(12, 'cincin kawin', 'Melita Sari Lubis-1236-saphire', 'Cincin Kawin', 'Emas Putih', 70, 'saphire', 0, 12, 'zircon', 0, 0, 'Swarovski', 20, 5000, 'putih', 50000, 'kombinasi', 'Kuku', 'cincin kawin', 0, '5KKc9GRhcd', 0, '2018-02-27 06:59:27'),
(13, 'CLB 03', 'Muhammad Andre-1237-Berlian', 'Cincin', 'Emas Putih', 70, 'Berlian', 1, 15, '', 0, 0, 'Swarovski', 50, 5000, 'Putih', 30000, 'Putih polos', 'Mangkok Kuku', 'Cincin cowok', 0, 'g4Pr2MAFM9', 0, '2018-02-27 07:00:25');

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
(1, 10, 1001, 0, 0),
(2, 10, 1002, 0, 0),
(3, 10, 1003, 0, 0),
(4, 10, 1004, 0, 0),
(5, 10, 1005, 0, 0),
(6, 10, 1006, 0, 0),
(7, 10, 1007, 0, 0),
(8, 10, 1008, 0, 0),
(9, 10, 1013, 0, 0),
(10, 10, 1014, 0, 0),
(17, 11, 1001, 0, 0),
(18, 11, 1002, 0, 0),
(19, 11, 1003, 0, 0),
(20, 11, 1007, 0, 0),
(21, 11, 1013, 0, 0),
(22, 11, 1014, 0, 0),
(23, 13, 1001, 0, 0),
(24, 13, 1002, 0, 0),
(25, 13, 1003, 0, 0),
(26, 13, 1004, 0, 0),
(27, 13, 1011, 0, 0),
(28, 13, 1013, 0, 0),
(29, 13, 1014, 0, 0),
(30, 12, 1001, 0, 0),
(31, 12, 1002, 0, 0),
(32, 12, 1003, 0, 0),
(33, 12, 1004, 0, 0),
(34, 12, 1005, 0, 0),
(35, 12, 1006, 0, 0),
(36, 12, 1007, 0, 0),
(37, 12, 1008, 0, 0),
(38, 12, 1009, 0, 0),
(39, 12, 1010, 0, 0),
(40, 12, 1011, 0, 0),
(41, 12, 1012, 0, 0),
(42, 12, 1013, 0, 0),
(43, 12, 1014, 0, 0),
(44, 4, 1004, 0, 0),
(45, 4, 1004, 0, 0),
(46, 4, 1005, 0, 0),
(47, 4, 1006, 0, 0),
(48, 4, 1007, 0, 0),
(49, 4, 1008, 0, 0),
(50, 4, 1009, 0, 0),
(51, 4, 1010, 0, 0),
(52, 4, 1011, 0, 0),
(53, 4, 1012, 0, 0),
(54, 4, 1013, 0, 0),
(55, 4, 1014, 0, 0);

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

--
-- Dumping data for table `rekapproduksi`
--

INSERT INTO `rekapproduksi` (`idRekapProduksi`, `kodeRekapProduksi`, `idPIC`, `waktuPengembalian`, `beratKembali`, `jenisProduksi`) VALUES
(1, 'XFC0hBrVj6', 21, '2018-02-24 17:47:09', 1.2, 'tempahan');

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
(1, 'XFC0hBrVj6', 2);

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
(1, 1, 1001, '2018-02-25 00:00:00', '2018-02-25 00:00:00'),
(2, 1, 1002, '2018-02-26 00:00:00', '2018-02-26 00:00:00'),
(3, 1, 1003, '2018-02-27 00:00:00', '2018-02-27 00:00:00'),
(4, 1, 1004, '2018-02-28 00:00:00', '2018-02-28 00:00:00'),
(5, 1, 1005, '2018-03-01 00:00:00', '2018-03-01 00:00:00'),
(6, 1, 1006, '2018-03-02 00:00:00', '2018-03-02 00:00:00'),
(7, 1, 1007, '2018-03-03 00:00:00', '2018-03-03 00:00:00'),
(8, 1, 1008, '2018-03-04 00:00:00', '2018-03-04 00:00:00'),
(9, 1, 1013, '2018-03-09 00:00:00', '2018-03-09 00:00:00'),
(10, 1, 1014, '2018-03-10 00:00:00', '2018-03-10 00:00:00'),
(17, 2, 1001, '2018-02-27 00:00:00', '2018-02-28 00:00:00'),
(18, 2, 1002, '2018-03-01 00:00:00', '2018-03-02 00:00:00'),
(19, 2, 1003, '2018-03-03 00:00:00', '2018-03-04 00:00:00'),
(20, 2, 1007, '2018-03-06 00:00:00', '2018-03-07 00:00:00'),
(21, 2, 1013, '2018-03-08 00:00:00', '2018-03-09 00:00:00'),
(22, 2, 1014, '2018-03-10 00:00:00', '2018-03-11 00:00:00');

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
(14, 1, 1004, '2018-03-02 00:00:00', '2018-03-02 00:00:00'),
(15, 1, 1005, '2018-03-03 00:00:00', '2018-03-03 00:00:00'),
(16, 1, 1006, '2018-03-04 00:00:00', '2018-03-04 00:00:00'),
(17, 1, 1007, '2018-03-05 00:00:00', '2018-03-05 00:00:00'),
(18, 1, 1008, '2018-03-06 00:00:00', '2018-03-06 00:00:00'),
(19, 1, 1009, '2018-03-07 00:00:00', '2018-03-07 00:00:00'),
(20, 1, 1010, '2018-03-08 00:00:00', '2018-03-08 00:00:00'),
(21, 1, 1011, '2018-03-09 00:00:00', '2018-03-09 00:00:00'),
(22, 1, 1012, '2018-03-10 00:00:00', '2018-03-10 00:00:00'),
(23, 1, 1013, '2018-03-11 00:00:00', '2018-03-11 00:00:00'),
(24, 1, 1014, '2018-03-12 00:00:00', '2018-03-12 00:00:00');

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
(1, 1234, 1234, 10, 6, 'Tahan', 'Bagus', 'Lebih dari 7', 'Mulus', 'Disetujui', '2018-02-25 00:31:25', 22, 'Disetujui', '2018-02-25 00:39:05', 18, 'Disetujui', '2018-02-25 00:29:52', 18, 'Disetujui', '2018-02-25 00:39:05', 18, '2018-02-24 17:43:38', 2, 'Done'),
(2, 1235, 1235, 11, 1, 'Tahan', 'Bagus', 'Kurang dari 6', 'Mulus', 'Menunggu Persetujuan', '0000-00-00 00:00:00', 20, 'Belum Ada', '0000-00-00 00:00:00', 18, 'Belum Ada', '0000-00-00 00:00:00', 18, 'Belum Disetujui', '0000-00-00 00:00:00', 18, '2018-02-26 01:13:45', 2, 'On progress');

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
(1, 1239, 1238, 4, 9, 'Disetujui', '2018-03-02 18:51:25', 18, 'Disetujui', '2018-03-02 17:43:37', 18, 'Disetujui', '2018-03-02 18:51:25', 18, '2018-03-02 11:51:25', 1, 'On progress');

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
  `durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Material Dasar', '205', 123.2, 'OUT', 0, '2018-02-25 00:39:05'),
(2, 'Material Dasar', '301', 9.48, 'OUT', 0, '2018-02-25 00:39:05'),
(3, 'Material Dasar', '304', 1.99, 'OUT', 0, '2018-02-25 00:39:05'),
(4, 'Produk Jadi', 'CLS-239', 1, 'IN', 0, '2018-02-25 00:43:38'),
(5, 'Material Dasar', '103', 62.4, 'OUT', 0, '2018-03-02 19:19:37'),
(6, 'Material Dasar', '101', -16.55, 'OUT', 0, '2018-03-02 19:19:37'),
(7, 'Material Dasar', '101', 113.4, 'OUT', 0, '2018-03-02 19:19:43'),
(8, 'Material Dasar', '301', 12.49, 'OUT', 0, '2018-03-02 19:19:43'),
(9, 'Material Dasar', '302', 4.16, 'OUT', 0, '2018-03-02 19:19:43'),
(10, 'Material Dasar', '303', 4.16, 'OUT', 0, '2018-03-02 19:19:43'),
(11, 'Produk Jadi', 'CLS-311', 10, 'IN', 0, '2018-03-02 20:26:21');

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
(2, 1);

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
(23, 'weny', 'weny', 'Weny', 'Admin Produksi', 0, '084335673445', 'weny@gmail.com');

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
(2, 1),
(3, 2);

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
-- Indexes for table `kloter`
--
ALTER TABLE `kloter`
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
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bomtempahan`
--
ALTER TABLE `bomtempahan`
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `factproduction2`
--
ALTER TABLE `factproduction2`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `factproductionservice`
--
ALTER TABLE `factproductionservice`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `kloter`
--
ALTER TABLE `kloter`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `materialdasar`
--
ALTER TABLE `materialdasar`
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pomasal`
--
ALTER TABLE `pomasal`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `poperak`
--
ALTER TABLE `poperak`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `potempahan`
--
ALTER TABLE `potempahan`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  MODIFY `idProses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
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
  MODIFY `idRekapProduksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rekapproduksiline`
--
ALTER TABLE `rekapproduksiline`
  MODIFY `idRekapProduksiLine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rencanaproduksi`
--
ALTER TABLE `rencanaproduksi`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `rencanaproduksi2`
--
ALTER TABLE `rencanaproduksi2`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `rencanaproduksiservice`
--
ALTER TABLE `rencanaproduksiservice`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `spkmasal`
--
ALTER TABLE `spkmasal`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `subspk`
--
ALTER TABLE `subspk`
  MODIFY `idSubSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `wadah`
--
ALTER TABLE `wadah`
  MODIFY `idWadah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
