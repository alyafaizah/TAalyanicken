-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 02:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2202_sinauka-nickal-ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tiket`
--

CREATE TABLE `data_tiket` (
  `kd_tiket` varchar(50) NOT NULL,
  `weekend` int(11) NOT NULL,
  `weekday` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tiket`
--

INSERT INTO `data_tiket` (`kd_tiket`, `weekend`, `weekday`, `stok`, `keterangan`, `created_at`, `updated_at`) VALUES
('623C8D1BE6002', 25000, 20000, 100, 'ketangan', '2022-03-24 14:39:12', '2022-03-24 22:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` varchar(70) NOT NULL,
  `kd_tiket` varchar(70) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `status` enum('aktif','nonaktif','','') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_profile` bigint(30) NOT NULL,
  `nama_lengkap` varchar(80) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `gender` enum('Laki-laki','Perempuan','','') DEFAULT NULL,
  `tempat_lahir` varchar(70) DEFAULT NULL,
  `tgl_lahir` varchar(30) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_profile`, `nama_lengkap`, `alamat`, `telepon`, `gender`, `tempat_lahir`, `tgl_lahir`, `foto`, `updated_at`) VALUES
(8, 'Alya Faizah From DB', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` bigint(30) NOT NULL,
  `kd_order` varchar(100) NOT NULL,
  `total_bayar` int(15) NOT NULL,
  `type` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(70) NOT NULL,
  `kd_order` varchar(100) NOT NULL,
  `id_profile` int(30) NOT NULL,
  `tgl_kunjungan` datetime DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('diproses','diterima','dibatalkan','berhasil') NOT NULL,
  `jenis_tiket` enum('weekday','weekend') NOT NULL,
  `jenis_pemesanan` enum('offline','online') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` bigint(30) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','petugas_tiket','pengunjung','') NOT NULL,
  `email` varchar(100) NOT NULL,
  `status_akun` enum('aktif','nonaktif','','') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `username`, `password`, `level`, `email`, `status_akun`, `created_at`) VALUES
(1, 'dwinuray', '$2y$10$o7q9a64BlO5LJ3AGGpVIYuI7t9wI4E.n4P0yLeWBlPtOYikTSE5mW', 'admin', 'dwinuray.dev@gmail.com', 'aktif', '2022-03-24 08:10:02'),
(2, 'nciken', '123', 'petugas_tiket', 'nicken@gmail.com', 'aktif', NULL),
(5, 'Hendra', '$2y$10$7mgJ61P7//C3u8sZA997yOuRr8Vh4A5oraiJ75Kp1hOYSr68Sxi0u', 'petugas_tiket', 'dwinuchy@gmail.com', 'aktif', '2022-04-21 17:03:37'),
(8, NULL, '$2y$10$MYBuR98YtlHcZXBvhQIbW.foaE.x4tu/97jg1N1zFx0.e3MI/p5XG', 'pengunjung', 'alya@gmail.com', 'aktif', '2022-05-25 09:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(70) NOT NULL,
  `id_profile` bigint(30) NOT NULL,
  `kd_order` varchar(100) NOT NULL,
  `tgl_kunjungan` datetime DEFAULT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tiket`
--
ALTER TABLE `data_tiket`
  ADD PRIMARY KEY (`kd_tiket`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`),
  ADD KEY `kd_tiket` (`kd_tiket`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD KEY `id_profile` (`id_profile`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_profile` (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` bigint(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diskon`
--
ALTER TABLE `diskon`
  ADD CONSTRAINT `diskon_ibfk_1` FOREIGN KEY (`kd_tiket`) REFERENCES `data_tiket` (`kd_tiket`);

--
-- Constraints for table `identitas`
--
ALTER TABLE `identitas`
  ADD CONSTRAINT `identitas_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
