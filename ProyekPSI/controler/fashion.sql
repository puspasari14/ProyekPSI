-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2019 pada 08.04
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `email`, `alamat`) VALUES
(1, 'ggdfh', 'hfhfghjfgjf@gdgdfc.com', 'jgfjgkghkgh'),
(2, 'syifa', 'syifa@gmail.com', 'pangkalan bun'),
(3, 'syifa', 'syifa@gmail.com', 'pangkalan bun'),
(4, 'dhelian Ashwan', 'DhelianAshwan@gamail.com', 'klaten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `ukuran` char(3) NOT NULL,
  `harga` decimal(22,0) NOT NULL,
  `harga_beli` decimal(22,0) NOT NULL,
  `jumlah_produk` int(10) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `jenis`, `ukuran`, `harga`, `harga_beli`, `jumlah_produk`, `foto`) VALUES
(1, 'A02', 'dress', 'S', '25000', '30000', 10, 'shop.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pembelian`
--

CREATE TABLE `transaksi_pembelian` (
  `id` int(5) NOT NULL,
  `kodebeli` char(15) NOT NULL,
  `kode` char(5) NOT NULL,
  `harga` decimal(22,0) NOT NULL,
  `jumlah_produk` int(10) NOT NULL,
  `total` decimal(22,0) NOT NULL,
  `status_bayar` enum('belum bayar','sudah bayar','','') NOT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `harga` (`harga`) USING BTREE,
  ADD KEY `jumlah_produk` (`jumlah_produk`),
  ADD KEY `index2` (`id`);

--
-- Indeks untuk tabel `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD PRIMARY KEY (`kodebeli`),
  ADD UNIQUE KEY `kodebeli` (`kodebeli`),
  ADD KEY `harga` (`harga`),
  ADD KEY `kode` (`kode`),
  ADD KEY `jumlah_produk` (`jumlah_produk`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD CONSTRAINT `transaksi_pembelian_ibfk_1` FOREIGN KEY (`harga`) REFERENCES `produk` (`harga`),
  ADD CONSTRAINT `transaksi_pembelian_ibfk_2` FOREIGN KEY (`kode`) REFERENCES `produk` (`kode`),
  ADD CONSTRAINT `transaksi_pembelian_ibfk_3` FOREIGN KEY (`jumlah_produk`) REFERENCES `produk` (`jumlah_produk`),
  ADD CONSTRAINT `transaksi_pembelian_ibfk_4` FOREIGN KEY (`id`) REFERENCES `customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
