-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2019 at 07:42 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raharja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin1', '$2y$10$OzTEtQZeenajvvqm6Mbh1.ONciNR95e8QLRA8OOActkqnMPrd7pcq', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `curiculum_vitae`
--

CREATE TABLE `curiculum_vitae` (
  `id` int(11) NOT NULL,
  `id_loker` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_test`
--

CREATE TABLE `hasil_test` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hasil` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info_loker`
--

CREATE TABLE `info_loker` (
  `id` int(11) NOT NULL,
  `info` varchar(100) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_loker`
--

INSERT INTO `info_loker` (`id`, `info`, `jabatan`, `bagian`, `tanggal_akhir`, `tanggal`) VALUES
(6, 'Dicari Kasir Wanita Untuk IndoApril', 'Kasir', 'Keuangan', '2019-07-13', '2019-07-07'),
(7, 'Programmer Node.js dan Vue.js', 'Programmer', 'Javascript Developme', '2019-09-30', '2019-07-07'),
(8, 'Wordpress Development Plugin', 'Ketua Plugin Develop', 'CMS Development', '2019-07-20', '2019-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_soal` varchar(10) NOT NULL,
  `jawaban` varchar(10) NOT NULL,
  `correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `jenjang_pendidikan` varchar(30) DEFAULT NULL,
  `pas_foto_ijazah` varchar(50) DEFAULT NULL,
  `umur` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat_lengkap` text,
  `no_hp` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pas_foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `username`, `password`, `nama_lengkap`, `tgl_lahir`, `agama`, `kewarganegaraan`, `jenjang_pendidikan`, `pas_foto_ijazah`, `umur`, `status`, `jenis_kelamin`, `alamat_lengkap`, `no_hp`, `tanggal`, `pas_foto`) VALUES
(8, 'sena', '$2y$10$OzTEtQZeenajvvqm6Mbh1.ONciNR95e8QLRA8OOActkqnMPrd7pcq', 'Shenna', '2019-07-07', 'hindu', 'WNI', 'sd', '15624382095d20ea4150ab5.jpg', '18', 'Menikah', 'Laki-laki', 'Crime North', '8584934857', '2019-07-07', '15624382095d20ea4150ab5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test_online`
--

CREATE TABLE `test_online` (
  `id` int(11) NOT NULL,
  `nomor` int(10) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `jawaban` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_online`
--

INSERT INTO `test_online` (`id`, `nomor`, `soal`, `a`, `b`, `c`, `jawaban`, `tanggal`) VALUES
(4, 1, 'Kapan Indonesia Merdeka?', 'Indonesia tidak pernah merdeka', '17 Agustus 1945', '2 Mei 1998', 'a', '2019-07-07'),
(5, 2, 'Bagaimana Cara memakan bubur?', 'Diaduk searah jarum jam', 'Diaduk menyilang', 'Ditelen', 'c', '2019-07-07'),
(6, 3, 'Kenapa dinamakan ikan?', 'Warnanya kuning', 'Karena dina lapar', 'Karena dina suka', 'b', '2019-07-07'),
(7, 4, 'Kenapa kamu suka spongeboob?', 'Karena Ngeselin', 'Karena Kuning', 'Karena Kocak kaya saya', 'c', '2019-07-07'),
(8, 5, 'Makanan Yang biking bingung', 'Semangka', 'Pepaya', 'Apel', 'c', '2019-07-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curiculum_vitae`
--
ALTER TABLE `curiculum_vitae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_test`
--
ALTER TABLE `hasil_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_loker`
--
ALTER TABLE `info_loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_online`
--
ALTER TABLE `test_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `curiculum_vitae`
--
ALTER TABLE `curiculum_vitae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasil_test`
--
ALTER TABLE `hasil_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info_loker`
--
ALTER TABLE `info_loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test_online`
--
ALTER TABLE `test_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
