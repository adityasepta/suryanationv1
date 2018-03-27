-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 09:50 PM
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
  `jumlah` float NOT NULL
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
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bomtempahan`
--

INSERT INTO `bomtempahan` (`idBOM`, `idKloter`, `idMaterial`, `jumlah`) VALUES
(1, 'Q738j9QTxq', 20, 85);

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
(16, 'Adr', '123123123123', '2018-03-24 08:54:42'),
(17, 's', '3', '2018-03-25 09:26:23'),
(18, 'j', '1', '2018-03-26 02:11:52'),
(19, 'Brenda', '087859275353', '2018-03-27 17:20:31'),
(20, 'Denanda Putri', '087859275353', '2018-03-27 18:12:24'),
(21, 'Hildan Ma''ruf', '085746324212', '2018-03-27 18:30:44');

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

--
-- Dumping data for table `detailpurchaseordertrading`
--

INSERT INTO `detailpurchaseordertrading` (`idDetailPO`, `idPO`, `idProduk`, `jumlah`, `harga`) VALUES
(12, 3, '1', 3, '13000'),
(13, 3, '2', 5, '16000');

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
(1, 1, 1004, 25, '2018-03-28 01:57:38', '2018-03-28 01:58:32', 0, 0, 0, 0, '', 'Done', 'Done', 'Belum'),
(2, 1, 1005, 26, '2018-03-28 01:58:39', '2018-03-28 01:58:43', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(3, 1, 1006, 25, '2018-03-28 01:59:36', '2018-03-28 01:59:43', 0, 0, 0, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum'),
(4, 1, 1007, 25, '2018-03-28 02:00:00', '2018-03-28 02:00:38', 30, 2, 29.5, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(5, 1, 1008, 25, '2018-03-28 02:00:53', '2018-03-28 02:01:21', 29.5, 2, 28, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(6, 1, 1009, 25, '2018-03-28 02:02:26', '2018-03-28 02:02:46', 28, 0, 28, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(7, 1, 1010, 25, '2018-03-28 02:02:56', '2018-03-28 02:03:18', 28, 0, 27.56, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(8, 1, 1011, 25, '2018-03-28 02:03:27', '2018-03-28 02:03:52', 27.56, 0, 27, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(9, 1, 1012, 25, '2018-03-28 02:04:31', '2018-03-28 02:05:01', 27, 0, 25, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(10, 1, 1013, 25, '2018-03-28 02:05:15', '2018-03-28 02:05:38', 25, 0, 21, 0, 'Disetujui', 'Done', 'Done', 'Belum'),
(11, 1, 1014, 1, '2018-03-28 02:06:04', '2018-03-28 02:06:04', 21, 0, 20, 0, 'Belum Disetujui', 'Done', 'Done', 'Belum');

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
  `jumlahNow` int(11) NOT NULL,
  `statusBerat` varchar(123) NOT NULL,
  `statusWork` varchar(231) NOT NULL,
  `statusSPK` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factproduction2`
--

INSERT INTO `factproduction2` (`idProProd`, `idSPK`, `idSubSPK`, `idWadah`, `idAktivitas`, `idPIC`, `RealisasiStartDate`, `RealisasiEndDate`, `beratAwal`, `berat`, `kembali`, `jumlah`, `jumlahNow`, `statusBerat`, `statusWork`, `statusSPK`) VALUES
(1, 1, 1, 0, 1004, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'Active'),
(2, 1, 2, 0, 1005, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 'Belum Disetujui', 'Belum ada PIC', 'Active');

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
(3, '1', 4378000, 'massal', 'pertokoan', '2018-03-27 19:45:05');

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

--
-- Dumping data for table `invoicemassalpertokoan`
--

INSERT INTO `invoicemassalpertokoan` (`idTempahan`, `idHeader`, `nomorPO`, `beratTotal`, `beratBatu`, `susut`, `beratAkhir`, `hargaAkhir`, `prosentase`, `beratHargaAkhir`, `upah`, `jumlahDatangBerlian`, `beratDatangBerlian`, `upahPasangBerlian`, `upahBerlian`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `upahCZ`, `hargaKrumWarna`, `datangEmas`, `hargaDatangEmas`, `totalDatangEmas`, `panjar`, `total`) VALUES
(1, 3, '1', 20, 4, 1.4, 17.4, 400000, 80, 5568000, 100000, 9, 9, 40000, 3240000, 6, 70000, 420000, 50000, 10, 400000, 4000000, 1000000, 4378000);

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

--
-- Dumping data for table `kloter`
--

INSERT INTO `kloter` (`idGroup`, `idKloter`, `idSPK`, `nama`, `kadar`, `tgl_kloter`) VALUES
(1, 'Q738j9QTxq', 1, 'Kloter-79%', 79, '2018-03-28 01:57:19');

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
(20, '207', 'Emas Swasa 50%', 'gram', 115, 100, 'Emas'),
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
  `kuantitas` int(11) NOT NULL,
  `beratAkhir` float NOT NULL,
  `susut` float NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `kadarBahan` double NOT NULL,
  `namaBatu` varchar(255) NOT NULL,
  `beratBatu` double NOT NULL,
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
  `tipeOrder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pomasal`
--

INSERT INTO `pomasal` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `biayaTambahan`, `kuantitas`, `beratAkhir`, `susut`, `bahan`, `kadarBahan`, `namaBatu`, `beratBatu`, `ukuranJari`, `berlian`, `beratBerlian`, `hargaBerlian`, `batuZirkon`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `krumWarna`, `hargaKrumWarna`, `keteranganKrum`, `tipeIkatan`, `model`, `metode`, `budget`, `panjar`, `totalHarga`, `lastModified`, `tipeOrder`) VALUES
(1, 1, 3, 2, 36, '2018-03-28 00:00:00', '2018-04-04 00:00:00', 568000, 100000, 10, 400000, 65, '3', 20, 399999, 'Standard', 'Enamel,Kombinasi', 'Tambah sip', 0, 2, 30, 10, 'Emas Kuning', 79, 'Saphire', 4, '3', 'Swarowski', 5, 900000, 'Swarovski', 6, 70000, 'Silver', 50000, 'Yang Bagus', 'Bungkus', '', 'Design', 9000000, 1000000, 100000, '2018-03-27 18:48:44', 'custom');

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
  `tipeOrder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potempahan`
--

INSERT INTO `potempahan` (`idPO`, `nomorPO`, `idProduk`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `tanggalEstimasiPenyelesaian`, `hargaBahan`, `upah`, `datangEmas`, `hargaDatangEmas`, `kadarDatangEmas`, `datangBerlian`, `jumlahDatangBerlian`, `upahPasangBerlian`, `tipeCustomer`, `pekerjaanTambahan`, `keteranganTambahan`, `biayaTambahan`, `kuantitas`, `beratAkhir`, `susut`, `bahan`, `kadarBahan`, `namaBatu`, `beratBatu`, `ukuranJari`, `berlian`, `beratBerlian`, `hargaBerlian`, `batuZirkon`, `jumlahBatuZirkon`, `hargaBatuZirkon`, `krumWarna`, `hargaKrumWarna`, `keteranganKrum`, `tipeIkatan`, `model`, `metode`, `budget`, `panjar`, `totalHarga`, `lastModified`, `tipeOrder`) VALUES
(1, 1, 3, 2, 36, '2018-03-28 00:00:00', '2018-04-04 00:00:00', 568000, 100000, 10, 400000, 65, '3', 20, 399999, 'Standard', 'Enamel,Kombinasi', 'Tambah sip', 0, 2, 30, 10, 'Emas Kuning', 79, 'Saphire', 4, '3', 'Swarowski', 5, 900000, 'Swarovski', 6, 70000, 'Silver', 50000, 'Yang Bagus', 'Bungkus', '', 'Design', 9000000, 1000000, 100000, '2018-03-27 18:48:44', 'custom');

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
(1, 'KKR-01', 'Kikir Toki Belah Rotan Rata', 'Lainnya', 'Trading', 'Kikir Toki Belah Rotan Rata', 'Pcs', 10000, 13000, 'VlvBJPTEoV', NULL, NULL, NULL, NULL, 7, 'Tidak Tampil', '2018-03-27 18:31:04'),
(2, 'TNG-01', 'Tang Antilope Runcing', 'Lainnya', 'Trading', 'Tang Antilope Runcing', 'Pcs', 14000, 16000, 'l3MPRDTNX0', NULL, NULL, NULL, NULL, 48, 'Tidak Tampil', '2018-03-27 18:31:04'),
(3, 'CLC-1000', 'Mamad-1-Saphire', 'Cincin', 'Tempahan', '', '', 0, 0, 'r0nRmXO7Yb', NULL, NULL, NULL, NULL, 2, 'Tidak Tampil', '2018-03-27 19:06:04');

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
(1, 3, 1001, 0, 0),
(2, 3, 1002, 0, 0),
(3, 3, 1003, 0, 0),
(4, 3, 1004, 0, 0),
(5, 3, 1005, 0, 0),
(6, 3, 1006, 0, 0),
(7, 3, 1007, 0, 0),
(8, 3, 1008, 0, 0),
(9, 3, 1009, 0, 0),
(10, 3, 1010, 0, 0),
(11, 3, 1011, 0, 0),
(12, 3, 1012, 0, 0),
(13, 3, 1013, 0, 0),
(14, 3, 1014, 0, 0),
(15, 3, 1004, 0, 0),
(16, 3, 1005, 0, 0),
(17, 3, 1006, 0, 0),
(18, 3, 1007, 0, 0),
(19, 3, 1008, 0, 0),
(20, 3, 1009, 0, 0),
(21, 3, 1010, 0, 0),
(22, 3, 1011, 0, 0),
(23, 3, 1012, 0, 0),
(24, 3, 1013, 0, 0),
(25, 3, 1014, 0, 0);

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

--
-- Dumping data for table `produktrading`
--

INSERT INTO `produktrading` (`idProduk`, `kodeProduk`, `namaProduk`, `jenisProduk`, `satuan`, `harga`, `kodeGambar`, `stok`, `lastModified`) VALUES
(1, 'TRD-111', 'Pinset', 'Alat Pasang Berlian', 'Pcs', 40000, '', 10, '2018-03-25 14:16:18'),
(3, 'TRD-222', 'Palu', 'Alat Tukang', 'Pcs', 50000, '', 56, '2018-03-25 14:18:42');

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

--
-- Dumping data for table `purchaseordertrading`
--

INSERT INTO `purchaseordertrading` (`idPO`, `nomorPO`, `idCustomer`, `idSalesPerson`, `tanggalMasuk`, `lastModified`, `tipeOrder`, `totalHarga`) VALUES
(3, '1', 21, 36, '2018-03-28 00:00:00', '2018-03-27 18:31:04', 'trading', 119000);

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

--
-- Dumping data for table `rencanaproduksi`
--

INSERT INTO `rencanaproduksi` (`idRencana`, `idSPK`, `idAktivitas`, `startDate`, `endDate`) VALUES
(1, 1, 1001, '2018-03-28 00:00:00', '2018-03-28 00:00:00'),
(2, 1, 1002, '2018-03-29 00:00:00', '2018-03-29 00:00:00'),
(3, 1, 1003, '2018-03-30 00:00:00', '2018-03-30 00:00:00'),
(4, 1, 1004, '2018-03-31 00:00:00', '2018-03-31 00:00:00'),
(5, 1, 1005, '2018-04-01 00:00:00', '2018-04-01 00:00:00'),
(6, 1, 1006, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(7, 1, 1007, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(8, 1, 1008, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(9, 1, 1009, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(10, 1, 1010, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(11, 1, 1011, '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(12, 1, 1012, '2018-04-08 00:00:00', '2018-04-08 00:00:00'),
(13, 1, 1013, '2018-04-09 00:00:00', '2018-04-09 00:00:00'),
(14, 1, 1014, '2018-04-10 00:00:00', '2018-04-10 00:00:00');

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
(1, 1, 1004, '2018-03-28 00:00:00', '2018-03-28 00:00:00'),
(2, 1, 1005, '2018-03-29 00:00:00', '2018-03-29 00:00:00'),
(3, 1, 1006, '2018-03-30 00:00:00', '2018-03-30 00:00:00'),
(4, 1, 1007, '2018-03-31 00:00:00', '2018-03-31 00:00:00'),
(5, 1, 1008, '2018-04-01 00:00:00', '2018-04-01 00:00:00'),
(6, 1, 1009, '2018-04-02 00:00:00', '2018-04-02 00:00:00'),
(7, 1, 1010, '2018-04-03 00:00:00', '2018-04-03 00:00:00'),
(8, 1, 1011, '2018-04-04 00:00:00', '2018-04-04 00:00:00'),
(9, 1, 1012, '2018-04-05 00:00:00', '2018-04-05 00:00:00'),
(10, 1, 1013, '2018-04-06 00:00:00', '2018-04-06 00:00:00'),
(11, 1, 1014, '2018-04-07 00:00:00', '2018-04-07 00:00:00');

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
(1, 1, 1, 3, 2, 'Tahan', 'Bagus', 'Lebih dari 7', 'Sompel', 'Disetujui', '2018-03-28 01:57:02', 15, 'Disetujui', '2018-03-28 01:58:32', 1, 'Disetujui', '2018-03-28 01:56:33', 1, 'Disetujui', '2018-03-28 01:58:32', 1, '2018-03-27 19:06:04', 2, 'Done');

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
(1, 1, 1, 3, 4, 'Disetujui', '2018-03-28 02:25:27', 1, 'Disetujui', '2018-03-28 02:25:07', 1, 'Disetujui', '2018-03-28 02:25:27', 1, '2018-03-27 19:29:04', 1, 'Done');

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
  `tipeBarang` varchar(255) NOT NULL,
  `kodeBarang` varchar(255) NOT NULL,
  `jumlah` double NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `jenisPergerakanBarang` varchar(255) NOT NULL,
  `hargaBeli` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stokbarang`
--

INSERT INTO `stokbarang` (`idStok`, `tipeBarang`, `kodeBarang`, `jumlah`, `satuan`, `jenisPergerakanBarang`, `hargaBeli`, `tanggal`) VALUES
(2, 'Produk Jadi', 'TNG-01', 5, '', 'IN', 10000, '2018-03-27 18:18:11'),
(3, 'Produk Jadi', 'KKR-01', 3, '', 'OUT', 39000, '2018-03-27 18:31:04'),
(4, 'Produk Jadi', 'TNG-01', 5, '', 'OUT', 65000, '2018-03-27 18:31:04'),
(5, 'Material Dasar', '207', 85, '', 'OUT', 0, '2018-03-27 18:58:32'),
(6, 'Produk Jadi', 'CLC-1000', 2, '', 'IN', 0, '2018-03-27 19:06:04');

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
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `nama`, `jabatan`, `level`, `phone`, `email`, `alamat`) VALUES
(1, 'Mutia Naimi', 'Mutia Naimi', 'Mutia Naimi', 'Admin Produksi', 0, '', '', ' Dusun VI Jl. Binjai KM 10.5 Gg. Jadi Kel/Desa Paya Geli Kec. Sunggal '),
(2, 'Ertin Barutu', 'Ertin Barutu', 'Ertin Barutu', 'Admin Tempahan', 0, '', '', ' Sihabong-habong Kel/Desa Sihotang Hasugian Dolok II '),
(3, 'Rijal Tanjung', 'Rijal Tanjung', 'Rijal Tanjung', 'Cleaning Service', 0, '', '', ' -   '),
(4, 'Wak Jen', 'Wak Jen', 'Wak Jen', 'Cleaning Service', 0, '', '', ' -   '),
(5, 'Melita Sari Lubis', 'Melita Sari Lubis', 'Melita Sari Lubis', 'General Affair', 0, '', '', ' Jl. Pendidikan Gg. Kasih Dusun II Kel/Desa Bandar setia Kec. Percut Sei Tuan '),
(6, 'Muhammad Andre', 'Muhammad Andre', 'Muhammad Andre', 'Leader Desain', 0, '', '', ' Dusun II Desa Pematang Kasih Kec. Pantai Cermin Kab. Serdang Bedagai '),
(7, 'Susi wana Pasaribu', 'Susi wana Pasaribu', 'Susi wana Pasaribu', 'Leader Finishing', 0, '', '', ' Sisolu-soli Kel/Desa Pegangan Julu V Kec. Sumbul '),
(8, 'Hendra', 'Hendra', 'Hendra', 'Leader Produksi', 0, '', '', ' Jl. Selam I Gg. Saudara No. 30 Kel/desa Tegal S. Mandala I Kec. Medan Denai '),
(9, 'Wenny Aleesa Ramadani', 'Wenny Aleesa Ramadani', 'Wenny Aleesa Ramadani', 'Leader Produksi', 0, '', '', ' Huta II Afd I Laras Kel/Desa Laras Kec. Bandar Huluan '),
(10, 'Riki Andika', 'Riki Andika', 'Riki Andika', 'Leader Tempahan', 0, '', '', ' Dusun IX Pasar Kacang Kel/Desa Sei Muka Kec. Talawi '),
(11, 'Vivi Eliza Elthia', 'Vivi Eliza Elthia', 'Vivi Eliza Elthia', 'Manager Sales & Marketing', 0, '', '', ' -   '),
(12, 'Maxim Swandie Colin Jien', 'Maxim Swandie Colin Jien', 'Maxim Swandie Colin Jien', 'Owner', 0, '', '', ' Jl. Kota Baru '),
(13, 'Franziska Sarveshi Fenty', 'Franziska Sarveshi Fenty', 'Franziska Sarveshi Fenty', 'PPIC Tempahan', 0, '', '', ' Jl. Danau Melintang No. 81 MedanKel/Desa Sei Agul Kec. Medan Barat  '),
(14, 'Rina Rahmadani', 'Rina Rahmadani', 'Rina Rahmadani', 'Staff Accounting', 0, '', '', ' Jl. Kenanga XV No. 02 TG. Sari Kel Tanjung Sari Kec. Medan Selayang '),
(15, 'Armiah', 'Armiah', 'Armiah', 'Staff Desain Tempahan', 0, '', '', ' Dusun II Kel/Desa Pematang guntung Kec. Teluk Mengkudu '),
(16, 'Irvan', 'Irvan', 'Irvan', 'Staff Desain Tempahan', 0, '', '', ' Dusun Getek I Kel/Desa Pantai Cermin Kec. Tanjung Pura '),
(17, 'Muhammad Yusuf Nasution', 'Muhammad Yusuf Nasution', 'Muhammad Yusuf Nasution', 'Staff Desain Tempahan', 0, '', '', ' Pematang Guntung Kel/Desa Pematang guntung Kec. Teluk Mengkudu '),
(18, 'Roberto Efendi Sinaga', 'Roberto Efendi Sinaga', 'Roberto Efendi Sinaga', 'Staff Desain Tempahan', 0, '', '', ' Komplek Rumah Sakit Balimbingan Kel/Desa Balimbingan Kec. Tanah Jawa '),
(19, 'Susanti', 'Susanti', 'Susanti', 'Staff Keuangan', 0, '', '', ' Jl. Budi Luhur LK. I No. 40 B Kel/Desa Dwikora Kec. Medan Helvetia '),
(20, 'Darma', 'Darma', 'Darma', 'Staff Krum', 0, '', '', ' -   '),
(21, 'Irfan Juhari', 'Irfan Juhari', 'Irfan Juhari', 'Staff Krum', 0, '', '', ' Serba Jadi Kel/Desa Dolok Kataran Kec. Dolok Batu Nanggar '),
(22, 'Mas Andi Susanto', 'Mas Andi Susanto', 'Mas Andi Susanto', 'Staff Krum', 0, '', '', ' Jl. P. Kemerdekaan LK IV Kel/Desa Cengkeh Turi Kec. Binjai Utara '),
(23, 'Sarida Hanum Ritonga', 'Sarida Hanum Ritonga', 'Sarida Hanum Ritonga', 'Staff Krum', 0, '', '', ' Jl. Bersama No. 112 Medan Kel/Desa Bantan Kec. Medan Tembung '),
(24, 'Sandi Putra Lelono', 'Sandi Putra Lelono', 'Sandi Putra Lelono', 'Staff Microsetting', 0, '', '', ' Jl. Kalianyar Kel/Desa Kalianyar Kec. Tambora '),
(25, 'Ali Imron', 'Ali Imron', 'Ali Imron', 'Staff Produksi', 0, '', '', ' Jl. Pembangunan Desa Kolam Kel/Desa Kolam Kec. Percut Sei Tuan '),
(26, 'Andrie Fadhil Siregar', 'Andrie Fadhil Siregar', 'Andrie Fadhil Siregar', 'Staff Produksi', 0, '', '', ' Dusun III BTN Jl. Prasetya III No.119 Kel/Desa Sei Semayang Kec. Sunggal '),
(27, 'Dorlintaria Lumban Gaol', 'Dorlintaria Lumban Gaol', 'Dorlintaria Lumban Gaol', 'Staff Produksi', 0, '', '', ' Lumban Siantar Kel/Desa Pollung Kec. Pollung '),
(28, 'Horman Siregar', 'Horman Siregar', 'Horman Siregar', 'Staff Produksi', 0, '', '', ' Jl. Durung No. 182 Medan Kel/Desa Sidorejo Kec. Medan Tembung '),
(29, 'Morisa Barimbing', 'Morisa Barimbing', 'Morisa Barimbing', 'Staff Produksi', 0, '', '', ' Sihorbo Kel/Desa Sihorbo Kec. Siempat Nempu '),
(30, 'Muhammad Solihin', 'Muhammad Solihin', 'Muhammad Solihin', 'Staff Produksi', 0, '', '', ' Jl. Selamat No. 17 Kel/Desa Kedai Durian Kec. Deli Tua '),
(31, 'Sariadi', 'Sariadi', 'Sariadi', 'Staff Produksi', 0, '', '', ' Jl. Balai Umum Dusun II Kel/Desa Tembung Kec. Percut Sei Tuan '),
(32, 'Siska Pratiwi', 'Siska Pratiwi', 'Siska Pratiwi', 'Staff Produksi', 0, '', '', ' Dusun I Pematang Kasih Kel/Desa Pematang Kasih Kec. Pantai Cermin '),
(33, 'Tessya', 'Tessya', 'Tessya', 'Staff Produksi', 0, '', '', ' -   '),
(34, 'Trie Hatta Mulya', 'Trie Hatta Mulya', 'Trie Hatta Mulya', 'Staff Produksi', 0, '', '', ' Dusun VII Kel/Desa Marindal II Kec. Patumbak '),
(35, 'Wulan Febriani', 'Wulan Febriani', 'Wulan Febriani', 'Staff Produksi', 0, '', '', ' Huta I Kel/Desa Sidotani Kec. Bandar '),
(36, 'Rafael Sinaga', 'Rafael Sinaga', 'Rafael Sinaga', 'Staff Sales & Marketing', 0, '', '', ' Ganda Samurung Kel/Desa Pegagan Julu III Kec. Sumbul '),
(37, 'Sriwahyuni', 'Sriwahyuni', 'Sriwahyuni', 'Staff Sales & Marketing', 0, '', '', ' Dusun IV Kel/Desa Sipaku Area Kec. Simpang Empat '),
(38, 'Hanafi Sanjaya', 'Hanafi Sanjaya', 'Hanafi Sanjaya', 'Staff Tempahan', 0, '', '', ' Huta Serba Jadi Kel/Desa Dolok Kataran Kec. Dolok Batu Nanggar '),
(39, 'Hendra Gunawan', 'Hendra Gunawan', 'Hendra Gunawan', 'Staff Tempahan', 0, '', '', ' Dusun VII Jl. Kebun Sayur Rambungan I Kel/Desa Bandar Klippa Kec. Percut Sei Tuan '),
(40, 'Hendra Saputra', 'Hendra Saputra', 'Hendra Saputra', 'Staff Tempahan', 0, '', '', ' Jl. Bhayangkara No. 367 LK VI Kel. Indrakasih Kec. Medan Tembung '),
(41, 'Joni', 'Joni', 'Joni', 'Staff Tempahan', 0, '', '', ' Dusun Getek I Kel/Desa Pantai Cermin Kec. Tanjung Pura '),
(42, 'Liusandra', 'Liusandra', 'Liusandra', 'Staff Tempahan', 0, '', '', ' -   '),
(43, 'Rahmawaty', 'Rahmawaty', 'Rahmawaty', 'Staff Tempahan', 0, '', '', ' Dusun IV Kel/Desa Paya Lombang Kec. Tebing Tinggi '),
(44, 'Soleh Pratama', 'Soleh Pratama', 'Soleh Pratama', 'Staff Tempahan', 0, '', '', ' Huta VI Bandar Tongah Kel/Desa Bandar Tongah Kec. Bandar Huluan '),
(45, 'Isnaini Raizal Rais', 'Isnaini Raizal Rais', 'Isnaini Raizal Rais', 'Umum', 0, '', '', ' Sei Tualang Kel/Desa Bandar Selamat Kec. Aek Kuo '),
(47, '', '', 'Belum ada PIC', '', 0, NULL, NULL, NULL);

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
  MODIFY `idBOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idDetailPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `factproduction`
--
ALTER TABLE `factproduction`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `factproduction2`
--
ALTER TABLE `factproduction2`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `factproduction3`
--
ALTER TABLE `factproduction3`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `factproductionservice`
--
ALTER TABLE `factproductionservice`
  MODIFY `idProProd` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoiceheader`
--
ALTER TABLE `invoiceheader`
  MODIFY `idHeader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoicemassalperseorangan`
--
ALTER TABLE `invoicemassalperseorangan`
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoicemassalpertokoan`
--
ALTER TABLE `invoicemassalpertokoan`
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `invoicetempahanperseorangan`
--
ALTER TABLE `invoicetempahanperseorangan`
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `invoicetempahanpertokoan`
--
ALTER TABLE `invoicetempahanpertokoan`
  MODIFY `idTempahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produkaktivitas`
--
ALTER TABLE `produkaktivitas`
  MODIFY `idProses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `produktrading`
--
ALTER TABLE `produktrading`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purchaseorderservice`
--
ALTER TABLE `purchaseorderservice`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchaseordertrading`
--
ALTER TABLE `purchaseordertrading`
  MODIFY `idPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `rencanaproduksi2`
--
ALTER TABLE `rencanaproduksi2`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rencanaproduksi3`
--
ALTER TABLE `rencanaproduksi3`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rencanaproduksiservice`
--
ALTER TABLE `rencanaproduksiservice`
  MODIFY `idRencana` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `idSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subspk`
--
ALTER TABLE `subspk`
  MODIFY `idSubSPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `wadah`
--
ALTER TABLE `wadah`
  MODIFY `idWadah` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
