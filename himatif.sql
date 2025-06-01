-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 09:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatif`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');
-- (2, 'admin2', 'bagus22'); //ori
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin2', 'bagus22');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `dokumen_pendukung` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `nama_ketua`, `nama_tim`, `asal`, `no_hp`, `lomba`, `dokumen_pendukung`, `foto`) VALUES
(1, 'asd', 'asd', 'asdasd', '123', 'short movie', '123', 'IMG_20180210_10171513.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `iot`
--

CREATE TABLE `iot` (
  `id` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `dokumen_pendukung` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iot`
--

INSERT INTO `iot` (`id`, `nama_ketua`, `nama_tim`, `asal`, `no_hp`, `lomba`, `dokumen_pendukung`, `foto`) VALUES
(1, 'asd', 'asd', 'asdasd', 'asd', 'iot', 'asd', 'IMG_20180210_1017158.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lomba_esport`
--

CREATE TABLE `lomba_esport` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lomba_sport`
--

CREATE TABLE `lomba_sport` (
  `id` int(11) NOT NULL,
  `nama_pj` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lomba_sport`
--

INSERT INTO `lomba_sport` (`id`, `nama_pj`, `kelas`, `no_hp`, `angkatan`, `lomba`, `foto`) VALUES
(1, 'asd', 'asd', '123', '123', 'Futsal', 'IMG_20180210_1017156.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftar` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `angkatan` varchar(255) DEFAULT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` varchar(500) NOT NULL,
  `foto2` varchar(500) NOT NULL,
  `foto3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftar`, `nama`, `nim`, `email`, `no_telp`, `kelas`, `angkatan`, `nama_instansi`, `lomba`, `pembayaran`, `tanggal_upload`, `foto`, `foto2`, `foto3`) VALUES
(3, 'Kitty', '321', '', '', 'A', '2019', '', 'Programming', 'Cash', '2022-08-07 14:22:32', '', '', ''),
(4, 'Dhan', '123', '', '', 'B', '2019', '', 'UI/UX Competition', 'Transfer', '2022-08-07 14:22:32', '', '', ''),
(10, 'asd', 'ss', '', '', 'asd', 'asd', '', 'Badminton', 'asd', '2022-08-07 14:22:32', ' ', '', ''),
(11, 'asd', 'asd', '', '', 'asd', 'asd', '', 'Badminton', 'asd', '2022-08-07 14:22:32', ' ', '', ''),
(13, '', '', '', '', '', '', '', 'Badminton', '', '2022-08-07 14:22:32', 'c20c934a9cdc7ddd4970acd60e59b777.gif', '', ''),
(14, 'asd', 'asd', '', '', 'asd', 'asd', '', 'Badminton', 'asd', '2022-08-07 14:22:32', 'Eris_Boreas_Greyrat_full_3332586.jpg', '', ''),
(15, 'Fajar', '3173111031', '', '', '', '', '', 'Programming', 'Cash', '2022-08-07 14:22:32', 'bukalapak-01.png', '', ''),
(16, '', '', '', '', '', '', '', 'Badminton', '', '2022-08-07 14:22:32', 'b8c0e655123a28df6a83b6a3fb8edb92.gif', '', ''),
(17, 'asd', 'asd', '', '', 'asd', 'asd', '', 'Mobile Legend', 'asd', '2022-08-07 14:22:32', '8d84ce8243603622bbf2409c936ac0c4.gif', '', ''),
(18, 'asd', 'asd', '', '', 'asd', 'asd', '', 'Futsal', 'asd', '2022-08-07 14:22:32', 'asia-pulp-paper-Logo-Sidu-Exercise.jpg', '', ''),
(19, 'asd', 'asd', '', '', 'asd', 'asd', '', 'Futsal', 'asd', '2022-08-07 14:22:32', '213-2136331_logo-one-piece-png-transparent-png.png', '', ''),
(20, 'kkaka', 'kakak', '', '', 'kKK', 'akka', '', 'Poster', 'ad', '2022-08-07 14:22:32', 'b75a6e09f8e810a9a371d90b3c69bdf2.gif', '', ''),
(21, 'asd', 'asd', '', '', 'asd', 'asd', '', 'Film', '123', '2022-08-07 14:22:32', '8d84ce8243603622bbf2409c936ac0c41.gif', '', ''),
(22, 'asd', 'asd', 'asd', '', 'asd', 'asd', '', 'Seminar Nasional', 'asd', '2022-08-07 14:22:32', 'b75a6e09f8e810a9a371d90b3c69bdf21.gif', '', ''),
(23, 'asd', 'asd', '', '', 'asd', 'asd', '', 'Network', 'asd', '2022-08-07 14:22:32', '270071449_604720053919860_5546849704551187354_n.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `poster`
--

CREATE TABLE `poster` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `dokumen_pendukung` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poster`
--

INSERT INTO `poster` (`id`, `nama`, `nim`, `asal`, `no_hp`, `lomba`, `dokumen_pendukung`, `foto`) VALUES
(1, 'asd', 'asd', 'asd', '123', 'poster', '123', 'IMG_20180210_10171511.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `semnas`
--

CREATE TABLE `semnas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semnas`
--

INSERT INTO `semnas` (`id`, `nama`, `nim`, `no_hp`, `asal`, `kegiatan`, `foto`) VALUES
(1, 'asd', 'asd', '123', '123', 'seminar nasional', 'IMG_20180210_10171519.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uiux`
--

CREATE TABLE `uiux` (
  `id` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `dokumen_pendukung` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uiux`
--

INSERT INTO `uiux` (`id`, `nama_ketua`, `nama_tim`, `asal`, `no_hp`, `lomba`, `dokumen_pendukung`, `foto`) VALUES
(1, 'asd', 'asd', 'ads', 'asd', 'iot', 'asd', 'IMG_20180210_1017159.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `dokumen_pendukung` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `nama`, `nim`, `no_hp`, `angkatan`, `materi`, `dokumen_pendukung`, `foto`) VALUES
(1, 'asd', 'asd', 'asd', '', 'workshop', 'asd', 'IMG_20180210_10171517.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot`
--
ALTER TABLE `iot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lomba_esport`
--
ALTER TABLE `lomba_esport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lomba_sport`
--
ALTER TABLE `lomba_sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semnas`
--
ALTER TABLE `semnas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uiux`
--
ALTER TABLE `uiux`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iot`
--
ALTER TABLE `iot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lomba_esport`
--
ALTER TABLE `lomba_esport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lomba_sport`
--
ALTER TABLE `lomba_sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semnas`
--
ALTER TABLE `semnas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uiux`
--
ALTER TABLE `uiux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
