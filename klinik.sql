-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 12:43 AM
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
  `kd_dokter` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nama`, `spesialis`, `no_telp`, `alamat`) VALUES
('ANK-01', 'Mia', 'ANK', '', ''),
('ANK-02', 'nina', 'ANK', '', ''),
('UMM-01', 'Dani', 'UMM', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(6) NOT NULL,
  `tgl_expired` date NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nama`, `harga`, `tgl_expired`, `stok`) VALUES
('ORA001', 'Oralit', 14000, '2020-12-02', 29),
('PAR001', 'Paracetamol', 20000, '2018-12-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kd_pasien` char(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` char(1) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kd_pasien`, `nama`, `tgl_lahir`, `jk`, `gol_darah`, `alamat`) VALUES
('P0002', 'Anita', '1995-02-08', 'P', '', ''),
('P0003', 'Fana', '2000-06-14', 'P', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `kd_pemeriksaan` char(8) NOT NULL,
  `kd_pasien` char(6) NOT NULL,
  `kd_dokter` char(6) NOT NULL,
  `hasil_pemeriksaan` text NOT NULL,
  `biaya` int(6) NOT NULL,
  `resep` text NOT NULL,
  `tgl_pemeriksaan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`kd_pemeriksaan`, `kd_pasien`, `kd_dokter`, `hasil_pemeriksaan`, `biaya`, `resep`, `tgl_pemeriksaan`) VALUES
('RM190001', 'P0002', 'ANK-02', 'panas dingin', 0, '[\"PAR001\"]', '2019-06-18 13:45:15'),
('RM190002', 'P0003', 'ANK-02', 'sembelit', 0, '[\"ORA001\"]', '2019-06-18 14:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` enum('admin','dokter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
('ANK-01', '5102ecd3d47f6561de70979017b87a80', 'Mia', 'dokter'),
('ANK-02', '5102ecd3d47f6561de70979017b87a80', 'mia', 'dokter');

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
  ADD PRIMARY KEY (`kd_pasien`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
