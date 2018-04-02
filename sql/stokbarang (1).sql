-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 06:12 PM
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
  `hargaBeli` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stokbarang`
--

INSERT INTO `stokbarang` (`idStok`, `idPIC`, `tipeBarang`, `kodeBarang`, `jumlah`, `satuan`, `jenisPergerakanBarang`, `tipePergerakan`, `hargaBeli`, `tanggal`) VALUES
(1, 9, 'Material Dasar', '103', 222.69, '', 'OUT', '', 0, '2018-03-28 14:13:46'),
(2, 9, 'Material Dasar', '103', 16.95, '', 'OUT', '', 0, '2018-03-28 14:13:47'),
(3, 9, 'Material Dasar', '103', 1.6, '', 'OUT', '', 0, '2018-03-28 14:13:47'),
(4, 9, 'Material Dasar', '201', 13.3, '', 'OUT', '', 0, '2018-03-28 15:01:29'),
(5, 19, 'Produk Jadi', 'CLS13', 1, '', 'IN', '', 0, '2018-03-28 15:24:45'),
(6, 19, 'Material Dasar', '101', 50, '', 'OUT', 'Transfer Material', 0, '0000-00-00 00:00:00'),
(7, 9, 'Material Dasar', '101', 50, '', 'IN', 'Transfer Material', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stokbarang`
--
ALTER TABLE `stokbarang`
  ADD PRIMARY KEY (`idStok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stokbarang`
--
ALTER TABLE `stokbarang`
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
