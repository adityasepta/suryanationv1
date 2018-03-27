-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 02:46 PM
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
(1, 'CLS-100', 'Muhammad Andre-1-Ruby', 'Cincin', 'Tempahan', 'It is a long established fact that a reader will be distracted by the readable                                         content of a page when looking at its layout. The point of using Lorem Ipsum is                                         that it has a more-or-less normal distribution of letters, as opposed to using                                         ''Content here, content here'', making it look like readable English.', 'Pcs', 1200000, 1545000, 'IQjrAaLKJe', '', '', '', '', 1, 'Tampil', '2018-03-27 12:45:50'),
(2, 'CLC-121', 'Denanda Putri-2-Saphire', 'Cincin', 'Massal', 'It is a long established fact that a reader will be distracted by the readable                                         content of a page when looking at its layout. The point of using Lorem Ipsum is                                         that it has a more-or-less normal distribution of letters, as opposed to using                                         ''Content here, content here'', making it look like readable English.', 'Pcs', 980000, 1312000, 'W7G84wHaba', '', '', '', '', 0, 'Tidak Tampil', '2018-03-27 12:45:57'),
(3, 'CLB-12', 'ko joni-3-peridot', 'Cincin', 'Trading', 'It is a long established fact that a reader will be distracted by the readable                                         content of a page when looking at its layout. The point of using Lorem Ipsum is                                         that it has a more-or-less normal distribution of letters, as opposed to using                                         ''Content here, content here'', making it look like readable English.', 'Pcs', 560000, 590000, '9vkvHGWtR5', '', '', '', '', 0, 'Tampil', '2018-03-27 12:45:59'),
(6, 'KMP-18', 'Denanda Putri-3-Asghard', 'Cincin', 'Katalog', 'It is a long established fact that a reader will be distracted by the readable                                         content of a page when looking at its layout. The point of using Lorem Ipsum is                                         that it has a more-or-less normal distribution of letters, as opposed to using                                         ''Content here, content here'', making it look like readable English.', 'Pcs', 280000, 320000, 'wDrLsAfUXD', '', '', '', '', 0, 'Tampil', '2018-03-27 12:46:01'),
(7, 'KRT-1', 'Ferdinan Sinaga-4-8', 'Cincin', 'Massal', 'It is a long established fact that a reader will be distracted by the readable                                         content of a page when looking at its layout. The point of using Lorem Ipsum is                                         that it has a more-or-less normal distribution of letters, as opposed to using                                         ''Content here, content here'', making it look like readable English.', 'Pcs', 134000, 185000, 'SI7Wt9PZiW', '', '', '', '', 0, 'Tampil', '2018-03-27 12:46:03'),
(9, 'CLB01', 'Cincin Perak Berongga', 'Cincin', 'Katalog', 'Bahan: Perak\r\nBatu Permata: Saphire Biru\r\nUkuran: 18', 'Pcs', 280000, 0, 'spYGKGHsda', 'spYGKGHsda1.jpg', 'spYGKGHsda2.jpg', NULL, NULL, 0, 'Tampil', '2018-03-27 12:46:04'),
(10, 'CLB02', 'Cincin Saphire Biru Doff', 'Cincin', 'Katalog', 'Cincin Emas', 'Pcs', 450000, 530000, 'YTlJ04wNwZ', 'YTlJ04wNwZ1.jpg', 'YTlJ04wNwZ2.jpg', NULL, NULL, 0, 'Tampil', '2018-03-27 12:46:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
