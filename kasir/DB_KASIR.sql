-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2023 at 11:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `merk` varchar(255) NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `harga_jual` varchar(255) NOT NULL,
  `diskon` int(11) DEFAULT NULL,
  `is_diskon` tinyint(1) DEFAULT NULL,
  `satuan_barang` varchar(255) NOT NULL,
  `stok` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `tgl_update` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_barang`, `id_kategori`, `nama_barang`, `merk`, `harga_beli`, `harga_jual`, `diskon`, `is_diskon`, `satuan_barang`, `stok`, `gambar`, `gambar2`, `gambar3`, `deskripsi`, `tgl_input`, `tgl_update`) VALUES
(5, 'BR001', 10, 'Blus Rajut BabyDoll', '-', '100000', '150000', 30, 1, 'PCS', '7', '62b563e1ac286.png', '639301a00321c.jpeg', '639301b7f22c5.jpeg', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm', '11 November 2022, 11:06', '9 December 2022, 16:36'),
(6, 'BR002', 10, 'Kemeja Kotak BabyDoll', '-', '100000', '150000', 50, 1, 'PCS', '8', '62b563c6b5a52.png', '', '', '', '21 November 2022, 13:27', '8 December 2022, 13:30'),
(7, 'BR003', 10, 'Kemeja Satin Import', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b5639b5aa18.png', '', '', '', '21 November 2022, 13:29', NULL),
(8, 'BR004', 10, 'Mini Dress MK', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b5637e11a7c.png', '', '', '', '21 November 2022, 13:30', NULL),
(9, 'BR005', 10, 'Mini Dress Kotak', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b5636c0d527.png', '', '', '', '21 November 2022, 13:31', NULL),
(10, 'BR006', 10, 'Kemeja Bunga Tangan Balon', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b5634902fae.png', '', '', '', '21 November 2022, 13:33', NULL),
(11, 'BR007', 10, 'Blus Bunga', '-', '100000', '150000', NULL, 0, 'PCS', '9', '62b5631f13be6.png', '', '', '', '21 November 2022, 13:34', NULL),
(12, 'BR008', 10, 'Gamis Brukat', '-', '230000', '280000', NULL, 0, 'PCS', '10', '62b562f6f04b6.png', '', '', '', '21 November 2022, 13:35', NULL),
(13, 'BR009', 10, 'Krop Rajut', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b562e379f2f.png', '', '', '', '21 November 2022, 13:37', NULL),
(14, 'BR010', 10, 'Kemeja Satin Liris', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b562d30f03f.png', '', '', '', '21 November 2022, 13:38', NULL),
(15, 'BR011', 10, 'Gamis Kardigan Kotak', '-', '250000', '300000', NULL, 0, 'PCS', '10', '62b562a883275.png', '', '', '', '21 November 2022, 13:39', '21 November 2022, 13:58'),
(16, 'BR012', 10, 'Gamis Tangan Balon', '-', '200000', '250000', NULL, 0, 'PCS', '10', '62b56287d55ad.png', '', '', '', '21 November 2022, 13:41', NULL),
(17, 'BR013', 10, 'Kemeja Silk Bangkok', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b5624727bbe.png', '', '', '', '21 November 2022, 13:42', NULL),
(18, 'BR014', 10, 'Kemeja Silk', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b5622cb5f9d.png', '', '', '', '21 November 2022, 13:43', NULL),
(19, 'BR015', 10, 'Kemeja Katus Garis', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b5621e99b1e.png', '', '', '', '21 November 2022, 13:44', NULL),
(20, 'BR016', 10, 'Blus Smok BabyDoll', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b562066625d.png', '', '', '', '21 November 2022, 13:45', NULL),
(21, 'BR017', 10, 'Kemeja Kotak burberry', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b561f2ac994.png', '', '', '', '21 November 2022, 13:46', NULL),
(22, 'BR018', 10, 'Mini Dress Bunga', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b561db92ecd.png', '', '', '', '21 November 2022, 13:46', NULL),
(23, 'BR019', 10, 'Blus Kardigan', '-', '100000', '150000', NULL, 0, 'PCS', '9', '62b561c7a6112.png', '', '', '', '21 November 2022, 13:47', NULL),
(24, 'BR020', 10, 'Mini Dress Lee', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b561a09de3e.png', '', '', '', '21 November 2022, 13:48', '21 November 2022, 14:01'),
(25, 'BR021', 10, 'Kemeja Katun', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b56187c3e61.png', '', '', '', '21 November 2022, 13:48', NULL),
(26, 'BR022', 10, 'Kemeja Bangkok', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b560fa4756b.png', '', '', '', '21 November 2022, 13:50', NULL),
(27, 'BR023', 10, 'Mini Dress Extu', '-', '100000', '150000', NULL, 0, 'PCS', '10', '62b5603c8acd7.png', '', '', '', '21 November 2022, 13:50', '21 November 2022, 14:00'),
(28, 'BR024', 10, 'Gamis kaptan', '-', '400000', '450000', 0, 0, 'PCS', '10', '62b16f681fd68.png', '', '', '', '21 November 2022, 13:51', '8 December 2022, 22:54'),
(29, 'BR025', 10, 'Gamis Syari Sukriyah', '-', '400000', '450000', 50, 50, 'PCS', '20', '62b16df9dd1f3.png', '', '', '', '21 November 2022, 13:52', '9 December 2022, 0:11');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tgl_input`) VALUES
(10, 'BAJU', '17 October 2022, 11:19');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `detail_keranjang` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `kode`, `detail_keranjang`, `created_at`) VALUES
(192, 'KODE-36977', '{\"56545\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":1},\"51737\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":1}}', '2022-11-30 03:43:20'),
(193, 'KODE-71836', '{\"298039\":{\"id_barang\":\"BR025\",\"nama_barang\":\"Gamis Syari Sukriyah\",\"harga_jual\":\"500000\",\"merk\":\"-\",\"gambar\":\"62b16df9dd1f3.png\",\"jumlah\":1}}', '2022-12-05 07:28:49'),
(194, 'KODE-8575', '{\"5\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":1}}', '2022-12-05 15:47:09'),
(195, 'KODE-96876', '{\"52502\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":1},\"65892\":{\"id_barang\":\"BR002\",\"nama_barang\":\"Kemeja Kotak BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563c6b5a52.png\",\"jumlah\":1},\"74280\":{\"id_barang\":\"BR003\",\"nama_barang\":\"Kemeja Satin Import\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b5639b5aa18.png\",\"jumlah\":1}}', '2022-12-05 15:47:49'),
(196, 'KODE-49106', '{\"5\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":1}}', '2022-12-05 16:00:47'),
(197, 'KODE-69219', '{\"5\":2}', '2022-12-06 17:41:08'),
(198, 'KODE-41838', '{\"5\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":2}}', '2022-12-06 18:08:34'),
(199, 'KODE-48453', '{\"6\":{\"id_barang\":\"BR002\",\"nama_barang\":\"Kemeja Kotak BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563c6b5a52.png\",\"jumlah\":\"15\"}}', '2022-12-06 18:38:05'),
(200, 'KODE-46992', '{\"6\":{\"id_barang\":\"BR002\",\"nama_barang\":\"Kemeja Kotak BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563c6b5a52.png\",\"jumlah\":\"2\"},\"5\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":3}}', '2022-12-07 07:12:35'),
(201, 'KODE-25543', '{\"5\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":1}}', '2022-12-07 08:31:20'),
(202, 'KODE-53991', '{\"29\":{\"id_barang\":\"BR025\",\"nama_barang\":\"Gamis Syari Sukriyah\",\"harga_jual\":\"500000\",\"merk\":\"-\",\"gambar\":\"62b16df9dd1f3.png\",\"jumlah\":3}}', '2022-12-07 13:08:50'),
(203, 'KODE-4117', '{\"29\":{\"id_barang\":\"BR025\",\"nama_barang\":\"Gamis Syari Sukriyah\",\"harga_jual\":0,\"merk\":\"-\",\"gambar\":\"62b16df9dd1f3.png\",\"jumlah\":1}}', '2022-12-07 13:14:45'),
(204, 'KODE-86648', '{\"29\":{\"id_barang\":\"BR025\",\"nama_barang\":\"Gamis Syari Sukriyah\",\"harga_jual\":400000,\"merk\":\"-\",\"gambar\":\"62b16df9dd1f3.png\",\"jumlah\":1}}', '2022-12-07 13:16:49'),
(205, 'KODE-35918', '{\"5\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":1}}', '2022-12-07 13:17:21'),
(206, 'KODE-23545', '{\"29\":{\"id_barang\":\"BR025\",\"nama_barang\":\"Gamis Syari Sukriyah\",\"harga_jual\":400000,\"merk\":\"-\",\"gambar\":\"62b16df9dd1f3.png\",\"jumlah\":\"5\"}}', '2022-12-07 18:00:56'),
(207, 'KODE-88675', '{\"5\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":105000,\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":\"3\"},\"8\":{\"id_barang\":\"BR004\",\"nama_barang\":\"Mini Dress MK\",\"harga_jual\":\"150000\",\"is_diskon\":\"0\",\"diskon\":null,\"gambar\":\"62b5637e11a7c.png\",\"jumlah\":\"1\"}}', '2022-12-08 10:08:22'),
(208, 'KODE-60485', '{\"27\":{\"id_barang\":\"BR023\",\"nama_barang\":\"Mini Dress Extu\",\"harga_jual\":\"150000\",\"merk\":\"-\",\"gambar\":\"62b5603c8acd7.png\",\"jumlah\":1},\"6\":{\"id_barang\":\"BR002\",\"nama_barang\":\"Kemeja Kotak BabyDoll\",\"harga_jual\":75000,\"merk\":\"-\",\"gambar\":\"62b563c6b5a52.png\",\"jumlah\":1}}', '2023-02-02 17:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` char(32) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`, `id_member`) VALUES
(1, 'wendo', '202cb962ac59075b964b07152d234b70', 63179),
(41, 'user', '202cb962ac59075b964b07152d234b70', 9951);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nm_member` varchar(255) NOT NULL,
  `alamat_member` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `NIK` text NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nm_member`, `alamat_member`, `telepon`, `email`, `gambar`, `NIK`, `level`) VALUES
(9951, 'user', 'user', '08899', 'admin@laravel.com', '16753311411655720421logo.jpeg', '-', 'user'),
(63179, 'admin', 'Jl jalan', '0855453494346', 'asswendo@gmail.com', '16753309881670431497Universitas_Harapan_Medan.png', '-', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL,
  `periode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_barang`, `id_member`, `jumlah`, `total`, `tanggal_input`, `periode`) VALUES
(10, 'BR019', 2, '1', '150000', '26 November 2022, 18:51', '11-2022'),
(11, 'BR007', 2, '1', '150000', '26 November 2022, 18:53', '11-2022'),
(12, 'BR001', 2, '1', '150000', '26 November 2022, 22:42', '11-2022'),
(13, 'BR001', 1, '1', '150000', '30 November 2022, 10:40', '11-2022'),
(14, 'BR002', 90823, '1', '150000', '30 November 2022, 10:41', '11-2022'),
(15, 'BR001', 90823, '1', '150000', '5 December 2022, 14:49', '12-2022'),
(16, 'BR002', 24392, '1', '150000', '8 December 2022, 0:07', '12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` text NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `maps` varchar(1000) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `tlp`, `nama_pemilik`, `email`, `ig`, `fb`, `logo`, `maps`, `deskripsi`, `link_maps`) VALUES
(1, 'Ajeng Tia Fashion', ' Jalan Purwo Simpang Cempaka Sari, Delitua', '088262832413', 'Ajeng', 'asswendo@gmail.com', 'arswendosryhd', 'endo.reverbest', '63db6bb6407ae.png', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0835657364437!2d98.69275841525157!3d3.568243851427141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313059bc5c1dcd%3A0x4711e61bc0acbfcc!2sUniversitas%20Harapan%20Medan!5e0!3m2!1sid!2sid!4v1675322856620!5m2!1sid!2sid&quot; width=&quot;300&quot; height=&quot;200&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 'Toko yang menjual busana muslim wanita', 'https://goo.gl/maps/8nBb4zJhtT7CFvsXA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`) USING BTREE,
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`) USING BTREE;

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`) USING BTREE;

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`) USING BTREE;

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99444;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
