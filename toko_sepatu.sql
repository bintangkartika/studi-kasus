-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 08:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `namabarang` varchar(225) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idsupplier` int(11) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `namabarang`, `idkategori`, `idsupplier`, `warna`, `harga`, `gambar`) VALUES
(1, 'Jcarrson Heeled Sandals', 1, 1, 'Black', 1099000, 'https://cdn.shopify.com/s/files/1/2170/8465/products/STEVEMADDEN-KIDS_JCARRSON_BLACK_SIDE.jpg?v=1618236781'),
(2, 'Mingle Mary Jane Delcote', 1, 1, 'Brown', 759000, 'https://cdn.shopify.com/s/files/1/2170/8465/products/STEVEMADDEN-SHOES_MINGLE_COGNAC-PATENT_grande.jpg?v=1620571164'),
(3, 'Steve Madden Mingle Mary Jane Platform Pump', 1, 1, 'Black', 759000, 'https://cdn.shopify.com/s/files/1/2170/8465/products/STEVEMADDEN-SHOES_MINGLE_BLACK-PATENT_grande.jpg?v=1620571109'),
(4, 'Propel Sandal', 1, 1, 'Black', 300000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRpN1Lnklpff7TxReXMr-LEHp5hq57lQio4w&usqp=CAU'),
(5, 'Converse Chuck 70 High Black', 2, 2, 'Black', 300000, 'https://www.707.co.id/cdn/shop/products/06-EYM63EO050982-HI-BLACK-WHTE_51_800x.jpg?v=1680329403'),
(6, 'Black Stitch-Trim Buckled', 3, 3, 'Black', 300000, 'https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dw3a4aabf7/images/hi-res/2023-L2-CK1-70380984-01-1.jpg?sw=1152&sh=1536');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `nama_kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama_kategori`) VALUES
(2, 'Shoes'),
(3, 'Sandals');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idsupplier` int(11) NOT NULL,
  `nama_supplier` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telpon` int(12) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idsupplier`, `nama_supplier`, `alamat`, `telpon`, `email`) VALUES
(2, 'Converse', 'Jln.ABC No.456', 876554321, 'converse@gmail.com'),
(3, 'Charles & Keith', 'Jln.abc No.789', 855443210, 'charlesandkeith@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`idkategori`),
  ADD KEY `id_supplier` (`idsupplier`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idsupplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idsupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `barang` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`idsupplier`) REFERENCES `barang` (`idsupplier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
