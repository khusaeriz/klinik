-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 09:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `password`, `nama`, `spesialis`, `no_telp`, `alamat`) VALUES
('ANK-2', '', 'Karina', 'ANAK', '081238213', 'aak');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `tgl_expired` date NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nama`, `harga`, `tgl_expired`, `stok`) VALUES
('AC-1', 'Acarbose', 40000, '2020-08-31', 4),
('AM-1', 'Amitanol', 20000, '2021-12-31', 20),
('AM-2', 'Ambroxol', 14000, '2022-09-28', 10),
('PR-2333', 'Paracetamol', 29000, '2020-12-31', 29);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `kd_pasien` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` char(1) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `kd_pasien`, `nama`, `tgl_lahir`, `jk`, `gol_darah`, `alamat`) VALUES
(1, 'P0001', 'Uju', '1995-07-05', 'L', 'O', ''),
(2, 'P0002', 'Mia', '2005-06-07', 'P', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `kd_pemeriksaan` varchar(10) NOT NULL,
  `kd_pasien` varchar(10) NOT NULL,
  `kd_dokter` varchar(10) NOT NULL,
  `hasil_pemeriksaan` text NOT NULL,
  `resep` text NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`kd_pemeriksaan`, `kd_pasien`, `kd_dokter`, `hasil_pemeriksaan`, `resep`, `biaya`) VALUES
('RM0001', 'P0001', 'THT-2', 'Panas Dingin', '[\"AM-1\"]', 40000),
('RM0002', 'P0001', 'THT-2', 'asd', 'asd', 90000),
('RM0003', 'P0001', 'THT-2', 'suram', 'cari hidup', 50000),
('RM0004', 'P0002', 'THT-2', 'Ada deh', '[\"AM-1\"]', 23232),
('RM190005', 'P0001', 'ANK-1', 'kb', '[\"AM-2\",\"PR-2333\"]', 32999),
('RM1990006', 'P0001', 'THT-2', '2132asd', '[\"AM-2\"]', 231231),
('RM19990007', 'P0002', 'ANK-2', 'sakit kronis', '[\"AM-2\"]', 0),
('RM19999000', 'P0001', 'ANK-2', 'stroke', '[\"AC-1\",\"AM-1\",\"AM-2\",\"PR-2333\"]', 0),
('RM19999900', 'P0001', 'ANK-2', 'kjhasd', '[\"AM-1\",\"AM-2\"]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` enum('admin','dokter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin'),
('ANK-2', 'b7a1bef48e489643e1899eb7f7884b9b', 'Karina', 'dokter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`kd_pemeriksaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
