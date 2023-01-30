-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2022 pada 11.52
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `barang`
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
-- Dumping data untuk tabel `barang`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tgl_input`) VALUES
(10, 'BAJU', '17 October 2022, 11:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `detail_keranjang` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `keranjang`
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
(207, 'KODE-88675', '{\"5\":{\"id_barang\":\"BR001\",\"nama_barang\":\"Blus Rajut BabyDoll\",\"harga_jual\":105000,\"merk\":\"-\",\"gambar\":\"62b563e1ac286.png\",\"jumlah\":\"3\"},\"8\":{\"id_barang\":\"BR004\",\"nama_barang\":\"Mini Dress MK\",\"harga_jual\":\"150000\",\"is_diskon\":\"0\",\"diskon\":null,\"gambar\":\"62b5637e11a7c.png\",\"jumlah\":\"1\"}}', '2022-12-08 10:08:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` char(32) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`, `id_member`) VALUES
(1, 'wendo', '202cb962ac59075b964b07152d234b70', 1),
(40, 'user', '202cb962ac59075b964b07152d234b70', 24392);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
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
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nm_member`, `alamat_member`, `telepon`, `email`, `gambar`, `NIK`, `level`) VALUES
(1, 'admin', 'JALAN PURWO SIMPANG CEMPAKA SARI, DELITUA\r\n', '088262832413', 'kknswag@gmail.com', '1670432230Universitas_Harapan_Medan.png', '-', 'admin'),
(1649, 'asdad', 'asad', '0909', 'mail@gmai.com', '639078bbc54de.jpeg', '123', 'admin'),
(16943, 'asdad', 'asad', '0909', 'mail@gmai.com', '6390792e10ad0.jpeg', '123', 'admin'),
(24392, 'user', 'jalan', '0888', 'user@gmail.com', '1670519850WhatsApp Image 2022-07-06 at 17.16.20.jpeg', '12358546', 'user'),
(43393, 'asdad', 'asdads', '090', 'asdad@gma.com', '1670431646Universitas_Harapan_Medan.png', '123', 'user'),
(43980, 'asdad', 'adads', '9899', 'mail@mail.com', '639077cd98944.png', '123', 'admin'),
(44163, 'asdda', 'asdad', '01293109', 'asda@gmail.com', '639076939d316.png', '123', 'user'),
(46667, 'asdad', 'asad', '0909', 'mail@gmai.com', '639078e3ee428.jpeg', '123', 'admin'),
(80322, 'wendo', 'asad', '021031239', 'email@mail.com', '63907608d6d37.jpeg', 'asdasd', 'user'),
(85580, 'Magna aliqua Ipsum ', 'Asperiores expedita ', 'Vitae magni perspici', 'zuwegevic@mailinator.com', '638ef00ae1485.png', 'Nam nisi est quia de', 'user'),
(86779, 'arep cacar', 'jl setia ujung', '088008', 'arepcacar@gmail.com', '638f1f7fd7d66.jpeg', '123123', 'user'),
(92111, 'asdasd', '123123asdasd', '123123', '123123sad@gmail.com', '638f1e9ceb43f.png', '123123', 'user'),
(94590, 'wendo', 'akdma', '0129301923', 'asdads@gmial.com', '6390755e3cf49.png', 'asd', 'user'),
(97917, 'asdad', 'asad', '0909', 'mail@gmai.com', '639079207a035.jpeg', '123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
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
-- Dumping data untuk tabel `nota`
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
-- Struktur dari tabel `penjualan`
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
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` text NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `tlp`, `nama_pemilik`) VALUES
(1, 'Ajeng Tia Fashion', ' Jalan Purwo Simpang Cempaka Sari, Delitua', '088262832413', 'Ajeng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id`, `nama`, `harga`, `gambar`, `deskripsi`) VALUES
(46, 'Gamis Syari Sukriyah', '500.000', '62b16df9dd1f3.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(47, 'Gamis kaptan', '450.000', '62b16f681fd68.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(48, 'Mini Dress Extu', '150.000', '62b5603c8acd7.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(49, 'Kemeja Bangkok', '150.000', '62b560fa4756b.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(50, 'Kemeja Katun', '150.000', '62b56187c3e61.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(51, 'Mini Dress Lee', '150.000', '62b561a09de3e.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(52, 'Blus Kardigan', '150.000', '62b561c7a6112.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(53, 'Mini Dress Bunga', '150.000', '62b561db92ecd.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(54, 'Kemeja Kotak burberry', '150.000', '62b561f2ac994.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(55, 'Blus Smok BabyDoll', '150.000', '62b562066625d.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(56, 'Kemeja Katus Garis', '150.000', '62b5621e99b1e.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(57, 'Kemeja Silk', '150.000', '62b5622cb5f9d.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(58, 'Kemeja Silk Bangkok', '150.000', '62b5624727bbe.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(59, 'Gamis Tangan Balon', '250.000', '62b56287d55ad.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(60, 'Gamis Kardigan Kotak', '300.000', '62b562a883275.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(61, 'Kemeja Satin Liris', '150.000', '62b562d30f03f.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(62, 'Krop Rajut', '150.000', '62b562e379f2f.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(63, 'Gamis Brukat', '280.000', '62b562f6f04b6.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(64, 'Blus Bunga', '150.000', '62b5631f13be6.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(65, 'Kemeja Bunga Tangan Balon', '150.000', '62b5634902fae.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(66, 'Mini Dress Kotak', '150.000', '62b5636c0d527.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(67, 'Mini Dress MK', '150.000', '62b5637e11a7c.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(68, 'Kemeja Satin Import', '150.000', '62b5639b5aa18.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(69, 'Kemeja Kotak BabyDoll', '150.000', '62b563c6b5a52.png', 'Bahan Batik Katun Prima Polos Moscrape  Resleting Belakang  Ukuran M 96-98cm L 100-102cm XL 104-106cm XXL 108-110cm Panjang Baju 60-62cm'),
(70, 'Blus Rajut BabyDoll', '150.000', '62b563e1ac286.png', 'Bahan\nBatik Katun Prima\nPolos Moscrape\n\nResleting Belakang\n\nUkuran\nM 96-98cm\nL 100-102cm\nXL 104-106cm\nXXL 108-110cm\nPanjang Baju 60-62cm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`) USING BTREE,
  ADD KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`) USING BTREE;

--
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`) USING BTREE;

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`) USING BTREE;

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`) USING BTREE;

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99444;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
