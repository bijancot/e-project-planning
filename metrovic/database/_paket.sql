-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2020 pada 09.35
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1ekbang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `_paket`
--

CREATE TABLE `_paket` (
  `id_paket` int(11) NOT NULL,
  `id_keterangan` int(11) DEFAULT NULL,
  `id_ktgori_pengadaan` varchar(255) DEFAULT NULL,
  `sumberdana` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `tgl_kebutuhan` varchar(255) DEFAULT NULL,
  `tgl_awal_pkerjaan` varchar(255) DEFAULT NULL,
  `tgl_akhir_pkerjaan` varchar(255) DEFAULT NULL,
  `tgl_awal_pengadaan` varchar(255) DEFAULT NULL,
  `tgl_akhir_pengadaan` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `metode` varchar(255) DEFAULT NULL,
  `uraian` varchar(500) NOT NULL,
  `tahun_anggaran` smallint(6) DEFAULT NULL,
  `createtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_paket` varchar(255) DEFAULT NULL,
  `rincian_paket` varchar(1000) DEFAULT NULL,
  `detail_paket` varchar(255) DEFAULT NULL,
  `uang_paket` varchar(255) DEFAULT NULL,
  `id_penyedia` int(11) DEFAULT NULL,
  `id_progress` int(11) DEFAULT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_paket`
--

INSERT INTO `_paket` (`id_paket`, `id_keterangan`, `id_ktgori_pengadaan`, `sumberdana`, `volume`, `tgl_kebutuhan`, `tgl_awal_pkerjaan`, `tgl_akhir_pkerjaan`, `tgl_awal_pengadaan`, `tgl_akhir_pengadaan`, `jenis`, `metode`, `uraian`, `tahun_anggaran`, `createtime`, `nama_paket`, `rincian_paket`, `detail_paket`, `uang_paket`, `id_penyedia`, `id_progress`, `id_kegiatan`, `createdDate`) VALUES
(10, NULL, 'Penyedia', 'APBD', '100', '01/01/1970', '01/01/1970', '01/01/1970', '01/01/1970', '01/01/1970', 'BARANG', 'E-PURCHASING', 'asd', 2020, '0000-00-00 00:00:00', '123dsdsadasd', NULL, NULL, NULL, NULL, NULL, 1, '2020-02-26 11:34:24'),
(11, NULL, 'Swakelola', 'APBD', '100', '26/02/2020', '26/02/2020', '26/02/2020', '26/02/2020', '26/02/2020', 'JASA LAINNYA', 'E-PURCHASING', 'asd', 2020, '0000-00-00 00:00:00', 'JNS', NULL, NULL, NULL, NULL, NULL, 1, '2020-02-26 13:58:10'),
(12, NULL, 'Swakelola', 'APBD', '100', '27/02/2020', '27/02/2020', '27/02/2020', '27/02/2020', '27/02/2020', 'JASA LAINNYA', 'PENUNJUKAN LANGSUNG', 'tstser', 2020, '0000-00-00 00:00:00', 'panji', NULL, NULL, NULL, NULL, NULL, 1, '2020-02-27 15:33:54'),
(13, NULL, 'Swakelola', 'APBD', '1', '06/03/2020', '03/03/2020', '02/03/2020', '02/03/2020', '03/03/2020', 'BARANG', 'E-PURCHASING', 'aaaaaaaaaaaaaaaa', 2020, '0000-00-00 00:00:00', 'aaaaa', NULL, NULL, NULL, NULL, NULL, 1, '2020-03-09 14:22:04'),
(14, NULL, 'Penyedia', 'APBN', '1', '09/03/2020', '09/03/2020', '09/03/2020', '09/03/2020', '09/03/2020', 'JASA LAINNYA', 'PENGADAAN LANGSUNG', 'asd', 2020, '0000-00-00 00:00:00', 'oip;', NULL, NULL, NULL, NULL, NULL, 1, '2020-03-09 14:32:13'),
(15, NULL, NULL, ' ', '', '09/03/2020', '09/03/2020', '09/03/2020', '09/03/2020', '09/03/2020', '', ' ', 'a', NULL, '0000-00-00 00:00:00', 'p', NULL, NULL, NULL, NULL, NULL, 1, '2020-03-09 14:57:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `_paket`
--
ALTER TABLE `_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `tr_keterangan` (`id_keterangan`),
  ADD KEY `tr_penyyedia` (`id_penyedia`),
  ADD KEY `tr_progress` (`id_progress`),
  ADD KEY `tr_bkegiatan` (`id_kegiatan`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `_paket`
--
ALTER TABLE `_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `_paket`
--
ALTER TABLE `_paket`
  ADD CONSTRAINT `tr_bkegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `_kegiatan` (`id_kegiatan`),
  ADD CONSTRAINT `tr_keterangan` FOREIGN KEY (`id_keterangan`) REFERENCES `_keterangan` (`id_keterangan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tr_penyyedia` FOREIGN KEY (`id_penyedia`) REFERENCES `_penyedia` (`id_penyedia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tr_progress` FOREIGN KEY (`id_progress`) REFERENCES `progress` (`id_progress`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
