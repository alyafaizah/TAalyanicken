-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2022 pada 16.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanantiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tiket`
--

CREATE TABLE `data_tiket` (
  `kd_tiket` varchar(50) NOT NULL,
  `jenis` varchar(95) NOT NULL,
  `harga` int(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tiket`
--

INSERT INTO `data_tiket` (`kd_tiket`, `jenis`, `harga`, `stok`, `keterangan`, `created_at`, `updated_at`) VALUES
('KNS001', 'weekdays', 15000, 20, 'Lorem ipsum', '2022-03-15 13:19:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
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

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `kd_tiket`, `nama`, `deskripsi`, `foto`, `nilai`, `tgl_awal`, `tgl_akhir`, `status`, `created_at`, `updated_at`) VALUES
('DKNS001', 'KNS001', 'Diskon Imlek', '', '', '10000', '2022-03-15', '2022-03-22', 'aktif', '2022-03-15 13:22:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id_profile` bigint(30) DEFAULT NULL,
  `nama_lengkap` varchar(80) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(70) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_profile`, `nama_lengkap`, `alamat`, `telepon`, `tempat_lahir`, `tgl_lahir`, `foto`, `updated_at`) VALUES
(1, 'Alya Faizah', 'Jl. Terusan semeru', '0895618999201', 'Jombang', '2001-07-02', '', NULL),
(1, 'Alya Faizah', 'Jl. Terusan semeru', '0895618999201', 'Jombang', '2001-07-02', '', NULL),
(2, 'Nicken Octaviana', 'Jl. Bareng', '081223678110', 'Jombang', '2001-10-05', '', NULL),
(2, 'Nicken Octaviana', 'Jl. Bareng', '081223678110', 'Jombang', '2001-10-05', '', NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'alyaiueooo', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'alyaiueooo', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'bbb', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'bbb', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'nnnnnnn', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'nnnnnnn', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` bigint(30) NOT NULL,
  `kd_order` varchar(100) NOT NULL,
  `total_bayar` int(15) NOT NULL,
  `type` enum('cash','debit','','') NOT NULL,
  `tanggal` datetime NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `kd_order`, `total_bayar`, `type`, `tanggal`, `file`) VALUES
(1, 'KNS0101', 30000, 'cash', '2022-03-15 13:59:39', ''),
(2, 'KNS0102', 15000, 'cash', '2022-03-15 13:59:39', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(70) NOT NULL,
  `kd_order` varchar(100) NOT NULL,
  `kd_tiket` varchar(70) NOT NULL,
  `id_profile` int(30) NOT NULL,
  `tgl_kunjungan` datetime DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('diproses','dibatalkan','berhasil') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kd_order`, `kd_tiket`, `id_profile`, `tgl_kunjungan`, `jumlah`, `status`, `created_at`, `updated_at`) VALUES
('001', 'KNS0101', 'KNS001', 1, '2022-03-15 14:00:59', 2, 'diproses', '2022-03-15 14:00:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id_profile` bigint(30) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','petugas tiket','pengunjung','') NOT NULL,
  `email` varchar(100) NOT NULL,
  `status_akun` enum('aktif','nonaktif','','') NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_profile`, `username`, `password`, `level`, `email`, `status_akun`, `created_at`) VALUES
(1, 'alyafaizah', '123', 'petugas tiket', 'alya@gmail.com', 'aktif', '2022-03-15 13:33:50'),
(2, 'nickenoctaviana', '12345678', 'admin', 'nicken@gmail.com', 'aktif', '2022-03-15 13:34:23'),
(3, NULL, '$2y$10$MXj/Z01OwIeBxVWVYj3OZuIylBnCEBfks1WcZc2rnWGG92MYxCx9K', 'admin', 'alya123@gmail.com', 'aktif', NULL),
(6, NULL, '$2y$10$nO5FOJVZiTWNbaMaiLLAfezaGc858yNd5zVZG5FZDqHFbhEMaVAfq', 'pengunjung', 'alya123@gmail.com', 'aktif', NULL),
(7, NULL, '$2y$10$lw.Xm6U0ke15aHD6q0.mjusRSmqFCnlEQBFLzQC2GKx8Q4u9X/9Ty', 'pengunjung', 'alya123@gmail.com', 'aktif', NULL),
(8, NULL, '$2y$10$qpLMNaJjmBWJ6kwtg6Zequ06473PnYAVuNj4gofB3P8.u7PFmQy4.', 'pengunjung', 'nicken@gmail.com', 'aktif', NULL),
(9, NULL, '$2y$10$v5noyp42I.OoSaKzUStCi.FxowzTTdHYGIXJQSW.xEkbFGS.KCZ3O', 'pengunjung', 'alya123@gmail.com', 'aktif', NULL),
(10, 'alyafaizah', '$2y$10$pxY2/TvJIkP2HBJm26M6VusEWL/QZg3q977AjGuK3v.ghkwzMYm3C', 'pengunjung', 'alya1@gmail.com', 'aktif', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(70) NOT NULL,
  `id_profile` bigint(30) NOT NULL,
  `kd_order` varchar(100) NOT NULL,
  `tgl_kunjungan` datetime DEFAULT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_profile`, `kd_order`, `tgl_kunjungan`, `jumlah`) VALUES
('TRANSAKSI01', 1, 'KNS0101', '2022-03-15 14:01:47', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_tiket`
--
ALTER TABLE `data_tiket`
  ADD PRIMARY KEY (`kd_tiket`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`),
  ADD KEY `kd_tiket` (`kd_tiket`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD KEY `id_profile` (`id_profile`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `kd_tiket` (`kd_tiket`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_profile` (`id_profile`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD CONSTRAINT `diskon_ibfk_1` FOREIGN KEY (`kd_tiket`) REFERENCES `data_tiket` (`kd_tiket`);

--
-- Ketidakleluasaan untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD CONSTRAINT `identitas_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`kd_tiket`) REFERENCES `data_tiket` (`kd_tiket`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
