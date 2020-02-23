-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 05:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekamid`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('Tersedia','Disewa','','') NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamera`
--

INSERT INTO `kamera` (`id_kamera`, `merk`, `tipe`, `harga`, `status`, `gambar`) VALUES
(14, 'Nikon', 'D3100', 60000, 'Tersedia', 'Nikon-D3100-Body-a.jpg'),
(15, 'Canon', '1500D', 65000, 'Disewa', 'jual-kamera-Canon-EOS-1500D-Kit-EF-S-18-55mm-f3_5-5_6-IS-II-harga-murah-2.jpg'),
(16, 'Lumix', 'DMC-FZ1000GA', 120000, 'Tersedia', 'Panasonic-Lumix-DMC-FZ1000GA-c.jpg'),
(17, 'Sony', 'A6400', 200000, 'Tersedia', 'Jual-Sony-A6400-Body-Only-Harga-Murah-dan-Spesifikasi-a.jpg'),
(18, 'Fujifilm', 'XE-3', 150000, 'Tersedia', 'jual-mirrorless-Fujifilm-XE-3-harga-murah-2.jpg'),
(19, 'DJI', 'Mavic Mini', 300000, 'Tersedia', 'Jual-DJI-Mavic-Mini-Harga-Murah-Terbaik-dan-Spesifikasi-a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `namapegawai` varchar(100) NOT NULL,
  `alamatpegawai` varchar(100) NOT NULL,
  `nohppegawai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `namapegawai`, `alamatpegawai`, `nohppegawai`) VALUES
(1, 'Dika', 'Jaten', 88303030);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(100) NOT NULL,
  `id_kam` int(11) DEFAULT NULL,
  `tglsewa` date NOT NULL,
  `tglkembali` date NOT NULL,
  `namaklien` varchar(100) NOT NULL,
  `alamatklien` varchar(100) NOT NULL,
  `nohpklien` varchar(13) NOT NULL,
  `status` enum('Disewa','Selesai') NOT NULL,
  `pendapatan` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_kam`, `tglsewa`, `tglkembali`, `namaklien`, `alamatklien`, `nohpklien`, `status`, `pendapatan`) VALUES
(0, 14, '2020-02-22', '2020-02-25', 'Dika', 'Matesih', '6289665690003', 'Selesai', 180000),
(18, 15, '2020-02-22', '2020-02-26', 'Syifa', 'Matesih', '6289665690003', 'Disewa', 260000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_user`, `email`, `password`, `level`) VALUES
(1, 'Dika Mahendra', 'deemplayid@gmail.com', '$2y$10$y5viS5qBHT2xh8cD9o1AfeSYMNuSBvJK202ei1T1JGSVEUEjbKr4m', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `sewa_ibfk_1` (`id_kam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`id_kam`) REFERENCES `kamera` (`id_kamera`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
