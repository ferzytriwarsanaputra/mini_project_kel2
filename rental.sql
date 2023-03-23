-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 01:30 PM
-- Server version: 10.9.2-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kontak` int(50) NOT NULL,
  `no_rek` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`, `alamat`, `kontak`, `no_rek`) VALUES
('1', 'ahds', 'huh', 'hhi', 5, 5),
('3', 'ghj', 'gjg', 'gjg', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_mobil` int(50) NOT NULL,
  `no_plat` int(50) NOT NULL,
  `merk` varchar(250) NOT NULL,
  `harga` int(50) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `status_ketersediaan` varchar(250) NOT NULL,
  `jumlah_tersedia` int(50) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kontak` int(50) NOT NULL,
  `no_rek` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(50) NOT NULL,
  `kode_booking` int(50) NOT NULL,
  `no_rek` int(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kontak` int(50) NOT NULL,
  `status_pembayaran` varchar(250) NOT NULL,
  `bukti_pembayaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kontak` int(50) NOT NULL,
  `no_rek` int(50) NOT NULL,
  `no_plat` varchar(250) NOT NULL,
  `merk_mobil` varchar(250) NOT NULL,
  `harga_rental` int(50) NOT NULL,
  `status_kendaraan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
