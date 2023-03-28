-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2023 pada 06.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `nik` varchar(250) NOT NULL,
  `nama_pemilik` varchar(250) NOT NULL,
  `jeniskelamin` varchar(250) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`nik`, `nama_pemilik`, `jeniskelamin`, `Alamat`, `password`) VALUES
('222', 'asep', 'Laki-laki', 'bjb', '123'),
('2110131310002', 'Meyda Wikaromah', 'Perempuan', 'Kapuas', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_motor` varchar(100) NOT NULL,
  `jenis_motor` varchar(100) NOT NULL,
  `nama_motor` varchar(100) NOT NULL,
  `muatan` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `status_motor` varchar(100) NOT NULL,
  `nik` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_motor`, `jenis_motor`, `nama_motor`, `muatan`, `harga`, `status_motor`, `nik`) VALUES
('SZK', 'Suzuki', 'Ferrari', '4', 500000, 'Tersedia', '6303066106030001'),
('SZK2', 'Suzuki', 'lamborghini', '2', 1200000, 'Tersedia', '6303066106030001'),
('YMH', 'Yamaha', 'Avanza', '8', 1000000, 'Tersedia', '6303066106030001'),
('YMH10', 'yamaha', 'lamborghini', '2', 10000, 'Tersedia', '111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` varchar(100) NOT NULL,
  `jenis_pembayaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `jenis_pembayaran`) VALUES
('csh', 'cash'),
('dbt', 'debit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `nik` varchar(250) NOT NULL,
  `nama_pemilik` varchar(250) NOT NULL,
  `jeniskelamin` varchar(250) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`nik`, `nama_pemilik`, `jeniskelamin`, `Alamat`, `password`) VALUES
('111', 'agus', 'Laki-laki', 'bjb', '123'),
('6303066106030001', 'Khairul Fuad', 'Laki-laki', 'Mandiangin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `nik` varchar(250) NOT NULL,
  `nama_pemilik` varchar(250) NOT NULL,
  `id_motor` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `estimasi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`nik`, `nama_pemilik`, `id_motor`, `id`, `id_pesanan`, `estimasi`) VALUES
('111', 'asep', 'YMH10', 'csh', 21, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', '999');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nama_pemilik`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_motor`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_motor` (`id_motor`),
  ADD KEY `id` (`id`),
  ADD KEY `nama_pemilik` (`nama_pemilik`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pemilik` (`nik`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pemilik` (`nik`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_motor`) REFERENCES `kendaraan` (`id_motor`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id`) REFERENCES `pembayaran` (`id`),
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`nama_pemilik`) REFERENCES `customer` (`nama_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
