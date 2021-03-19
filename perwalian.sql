-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 12:17 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perwalian`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `npp` varchar(9) NOT NULL,
  `nama_dsn` varchar(50) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `pendidikan` varchar(2) NOT NULL,
  `pin` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`npp`, `nama_dsn`, `ttl`, `no_telp`, `alamat`, `golongan`, `foto`, `pendidikan`, `pin`, `email`, `status`) VALUES
('119891101', 'Dr. Ir. Winarno Sugeng, M.Kom.', '-', '', 'Bandung', '3C', 'winarno.jpg', 'S3', '123456', 'winarno@itenas.com', 'Dosen Tetap'),
('119990102', 'Youllia Indrawaty N, ST., MT.', '-', '', 'Bandung', '4A', '', 'S2', '119990102', '', 'Dosen Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_mk` varchar(7) NOT NULL DEFAULT '0',
  `kelas` varchar(7) NOT NULL DEFAULT '0',
  `hari` varchar(50) NOT NULL DEFAULT '0',
  `jam` varchar(15) NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kode_mk`, `kelas`, `hari`, `jam`) VALUES
(1, 'IFA-111', 'AA', 'Selasa', '14:00 - 16:50'),
(2, 'IFA-111', 'BB', 'Selasa', '11:00 - 12:50'),
(3, 'IFA-111', 'CC', 'Rabu', '13:00 - 15:50'),
(4, 'IFA-111', 'DD', 'Selasa', '14:00 - 16:50'),
(5, 'IFA-101', 'AA', 'Kamis', '13:00 - 14:50'),
(6, 'IFA-101', 'BB', 'Rabu', '10:00 - 11:50'),
(13, 'IFA-101', 'CC', 'Kamis', '08:00 - 09:50'),
(14, 'IFA-101', 'DD', 'Jumat', '13:00 - 14:50'),
(15, 'IFA-201', 'AA', 'Sabtu', '10:00 - 12:50'),
(16, 'IFA-201', 'BB', 'Selasa', '07:00 - 09:50'),
(17, 'IFA-201', 'CC', 'Selasa', '07:00 - 09:50'),
(18, 'IFA-201', 'DD', 'Kamis', '07:00 - 09:50'),
(19, 'IFA-203', 'AA', 'Jumat', '08:00 - 09:50'),
(21, 'IFA-203', 'BB', 'Jumat', '10:00 - 11:50'),
(22, 'IFA-203', 'CC', 'Kamis', '13:00 - 14:50'),
(23, 'IFA-203', 'DD', 'Senin', '08:00 - 09:50'),
(24, 'IFA-301', 'AA', 'Selasa', '10:00 - 11:50'),
(25, 'IFA-301', 'BB', 'Selasa', '14:00 - 15:50'),
(26, 'IFA-301', 'CC', 'Rabu', '10:00 - 11:50'),
(27, 'IFA-301', 'DD', 'Senin', '13:00 - 14:50'),
(28, 'IFA-104', 'AA', 'Rabu', '10:00 - 11:50'),
(29, 'IFA-106', 'AA', 'Senin', '07:00 - 09:50'),
(30, 'IFA-108', 'AA', 'Rabu', '15:00 - 17:50'),
(31, 'IFA-110', 'AA', 'Jumat', '10:00 - 11:50'),
(32, 'IFA-112', 'AA', 'Senin', '14:00 - 16:50'),
(33, 'IFA-114', 'AA', 'Senin', '10:00 - 12:50'),
(34, 'IFA-104', 'BB', 'Kamis', '10:00 - 11:50'),
(35, 'IFA-106', 'BB', 'Senin', '10:00 - 12:50'),
(36, 'IFA-108', 'BB', 'Kamis', '13:00 - 15:50'),
(37, 'IFA-110', 'BB', 'Kamis', '08:00 - 09:50'),
(38, 'IFA-112', 'BB', 'Rabu', '07:00 - 09:50'),
(39, 'IFA-114', 'BB', 'Senin', '13:00 - 16:50'),
(40, 'IFA-104', 'CC', 'Senin', '14:00 - 15:50'),
(41, 'IFA-106', 'BB', 'Kamis', '13:00 - 15:50'),
(42, 'IFA-108', 'CC', 'Jumat', '13:00 - 15:50'),
(43, 'IFA-110', 'CC', 'Jumat', '07:00 - 08:50'),
(44, 'IFA-112', 'CC', 'Senin', '07:00 - 09:50'),
(45, 'IFA-114', 'CC', 'Kamis', '07:00 - 09:50'),
(46, 'IFA-104', 'DD', 'Rabu', '13:00 - 14:50'),
(47, 'IFA-106', 'DD', 'Jumat', '07:00 - 09:50'),
(48, 'IFA-204', 'AA', 'Selasa', '10:00:00'),
(49, 'IFA-202', 'AA', 'Rabu', '15:00:00'),
(50, 'IFA-206', 'AA', 'Sabtu', '07:00:00'),
(51, 'IFA-208', 'AA', 'Kamis', '13:00:00'),
(52, 'IFA-210', 'AA', 'Sabtu', '10:00:00'),
(53, 'IFA-212', 'AA', 'Selasa', '07:00:00'),
(54, 'IFA-202', 'BB', 'Selasa', '07:00:00'),
(55, 'IFA-204', 'BB', 'Selasa', '15:00:00'),
(56, 'IFA-206', 'BB', 'Sabtu', '10:00:00'),
(57, 'IFA-208', 'BB', 'Rabu', '13:00:00'),
(58, 'IFA-210', 'BB', 'Sabtu', '07:00:00'),
(59, 'IFA-212', 'BB', 'Selasa', '10:00:00'),
(60, 'IFA-500', 'AA', 'Minggu', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `krsbaru`
--

CREATE TABLE `krsbaru` (
  `id_krsbaru` int(11) NOT NULL,
  `nrp` varchar(9) NOT NULL,
  `kode_mk` varchar(7) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `approval` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krsbaru`
--

INSERT INTO `krsbaru` (`id_krsbaru`, `nrp`, `kode_mk`, `kelas`, `approval`) VALUES
(18, '152016023', 'IFA-201', '15', 'Terima'),
(19, '152016023', 'IFA-203', '19', 'Terima'),
(24, '152016034', 'IFA-108', '36', 'Tolak'),
(25, '152016006', 'IFA-104', '28', 'pending'),
(26, '152016006', 'IFA-106', '29', 'pending'),
(27, '152016006', 'IFA-108', '30', 'pending'),
(28, '152016006', 'IFA-110', '31', 'pending'),
(29, '152016006', 'IFA-112', '32', 'pending'),
(30, '152016006', 'IFA-114', '33', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nrp` varchar(9) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `nama_dsn` varchar(50) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `batas_studi` varchar(30) NOT NULL,
  `semester` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `nama_mhs`, `ttl`, `alamat`, `no_telp`, `email`, `jurusan`, `fakultas`, `nama_dsn`, `pin`, `foto`, `batas_studi`, `semester`, `status`) VALUES
('152016006', 'Refda Rais', 'Tasikmalaya, 17 Mei 1998', 'Bandung', '08988053138', 'refdarais@gmail.com', 'Informatika', 'Fakultas Teknologi Industri', 'Dr. Ir. Winarno Sugeng, M.Kom.', '170598', 'refda.jpg', '2022/2023', 2, 'Perwalian'),
('152016023', 'Nurjana Ariffilah Idris', 'Sumedang, ', 'Bandung', '', '', 'Informatika', 'Fakultas Teknologi Industri', 'Dr. Ir. Winarno Sugeng, M.Kom.', '123456', 'nur.jpg', '2022/2023', 3, 'Selesai'),
('152016034', 'Sony Sabat', 'Kuningan, 18 Februari 1998', 'Bandung', '', 'sony@gmail.com', 'Informatika', 'Fakultas Teknologi Industri', 'Dr. Ir. Winarno Sugeng, M.Kom.', '101010', '', '2022/2023', 2, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_mk` varchar(7) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_mk`, `nama_mk`, `sks`, `semester`) VALUES
('IFA-101', 'Bahasa Inggris 1', 2, 1),
('IFA-102', 'Kewarganegaraan', 2, 2),
('IFA-103', 'Matematika', 3, 1),
('IFA-104', 'Bahasa Inggris II', 2, 2),
('IFA-105', 'Matematika Komputer', 3, 1),
('IFA-106', 'Rangkaian Logika', 3, 2),
('IFA-107', 'Fisika Instrumentasi', 3, 1),
('IFA-108', 'Algoritma Lanjut', 3, 2),
('IFA-109', 'Pengantar Teknik Informatika', 2, 1),
('IFA-110', 'Teknologi Informasi', 2, 2),
('IFA-111', 'Algoritma Dasar', 3, 1),
('IFA-112', 'Matematika Teknik', 3, 2),
('IFA-113', 'Pancasila', 2, 1),
('IFA-114', 'Probabilistik dan Statistik', 3, 2),
('IFA-201', 'Basis Data', 3, 3),
('IFA-202', 'Bahasa Inggris III', 2, 4),
('IFA-203', 'Grafika Komputer Terapan', 2, 3),
('IFA-204', 'Bahasa Indonesia', 2, 4),
('IFA-205', 'Organisasi dan Arsitektur Komputer', 4, 3),
('IFA-206', 'Pemrog. Berorientasi Objek', 4, 4),
('IFA-207', 'Pemrograman Dasar', 4, 3),
('IFA-208', 'Pemrograman Basis Data', 4, 4),
('IFA-209', 'Sistem Operasi', 3, 3),
('IFA-210', 'Rekayasa Perangkat Lunak', 3, 4),
('IFA-211', 'Kriptografi', 2, 3),
('IFA-212', 'Pengolahan Citra Digital', 4, 4),
('IFA-213', 'Interaksi Manusia & Komputer', 2, 3),
('IFA-301', 'Teknik Multimedia', 3, 5),
('IFA-302', 'Sistem Pakar dan Bahasa Alamiah', 3, 6),
('IFA-303', 'Kecerdasan Buatan', 4, 5),
('IFA-304', 'Pengenalan Ucapan & Teks ke Ucapan', 3, 6),
('IFA-305', 'Jaringan Komputer', 4, 5),
('IFA-306', 'Pemrograman Mekatronika', 3, 6),
('IFA-307', 'Interoperabilitas', 3, 5),
('IFA-308', 'Computer Vision', 3, 6),
('IFA-309', 'Rekayasa Web', 3, 5),
('IFA-310', 'Jaringan Komputer Lanjut', 4, 6),
('IFA-312', 'Informatika Lingkungan', 2, 6),
('IFA-500', 'Tugas Akhir', 4, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`npp`),
  ADD KEY `nama_dsn` (`nama_dsn`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `FK_jadwal_matakuliah` (`kode_mk`);

--
-- Indexes for table `krsbaru`
--
ALTER TABLE `krsbaru`
  ADD PRIMARY KEY (`id_krsbaru`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nrp`),
  ADD KEY `FK_mahasiswa_dosen` (`nama_dsn`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `krsbaru`
--
ALTER TABLE `krsbaru`
  MODIFY `id_krsbaru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_jadwal_matakuliah` FOREIGN KEY (`kode_mk`) REFERENCES `matakuliah` (`kode_mk`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `FK_mahasiswa_dosen` FOREIGN KEY (`nama_dsn`) REFERENCES `dosen` (`nama_dsn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
