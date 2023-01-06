-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 07:10 PM
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
-- Database: `db_tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(20) NOT NULL,
  `nama_agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(6, 'Budha');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `id_dusun` int(11) NOT NULL,
  `nama_dusun` varchar(45) NOT NULL,
  `alamat_dusun` varchar(100) NOT NULL,
  `kepala_dusun` varchar(20) NOT NULL,
  `sekre_dusun` varchar(20) NOT NULL,
  `bendahara_dusun` varchar(20) NOT NULL,
  `no_hp_dusun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id_dusun`, `nama_dusun`, `alamat_dusun`, `kepala_dusun`, `sekre_dusun`, `bendahara_dusun`, `no_hp_dusun`) VALUES
(11, 'Suka Damai', 'null', 'null', 'null', 'null', 'null'),
(12, 'Kebon Jeruk', 'null', 'null', 'null', 'null', 'null'),
(15, 'Suka Bakti', 'null', 'null', 'null', 'null', 'null'),
(16, 'Rejo Agung', 'null', 'null', 'null', 'null', 'null'),
(17, 'Purwodadi', 'null', 'null', 'null', 'null', 'null'),
(18, 'Bina Karya', 'null', 'null', 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `golongan_darah`
--

CREATE TABLE `golongan_darah` (
  `id_golongan_darah` int(10) NOT NULL,
  `nama_golongan_darah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan_darah`
--

INSERT INTO `golongan_darah` (`id_golongan_darah`, `nama_golongan_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'O'),
(6, 'Tidak Tahu');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` int(10) NOT NULL,
  `nama_jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `nama_jenis_kelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan ');

-- --------------------------------------------------------

--
-- Table structure for table `jumlahkk_has_dusun`
--

CREATE TABLE `jumlahkk_has_dusun` (
  `id_jumlah_kk` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_kk`
--

CREATE TABLE `jumlah_kk` (
  `id_jumlah_kk` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `data_jumlah_kk` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumlah_kk`
--

INSERT INTO `jumlah_kk` (`id_jumlah_kk`, `id_dusun`, `desa`, `data_jumlah_kk`, `status`) VALUES
(10, 11, 'Rasau Jaya Satu', 5, 'Belum Dikonfirmasi'),
(11, 12, 'Rasau Jaya Satu', 2, 'Belum Dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `id_rt_rw` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kode_pos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kewarganegaraan`
--

CREATE TABLE `kewarganegaraan` (
  `id_kewarganegaraan` int(10) NOT NULL,
  `nama_kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kewarganegaraan`
--

INSERT INTO `kewarganegaraan` (`id_kewarganegaraan`, `nama_kewarganegaraan`) VALUES
(1, 'Indonesia'),
(2, 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `kk_has_referensi`
--

CREATE TABLE `kk_has_referensi` (
  `id_kk` int(11) NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `id_rt_rw` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `id_kewarganegaraan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(20) NOT NULL,
  `nama_pekerjaan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(2, 'Petani'),
(4, 'Buruh'),
(5, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(10) NOT NULL,
  `nama_pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
(1, 'Tidak Sekolah'),
(2, 'SD'),
(3, 'SMP'),
(4, 'SMA'),
(7, 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `rt_has_dusun`
--

CREATE TABLE `rt_has_dusun` (
  `id_rt_rw` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rt_rw`
--

CREATE TABLE `rt_rw` (
  `id_rt_rw` int(11) NOT NULL,
  `nama_rt_rw` varchar(50) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `alamat_rt_rw` varchar(100) NOT NULL,
  `ketua_rt_rw` varchar(20) NOT NULL,
  `sekre_rt_rw` varchar(50) NOT NULL,
  `bendahara_rt_rw` varchar(50) NOT NULL,
  `no_hp_rt_rw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rt_rw`
--

INSERT INTO `rt_rw` (`id_rt_rw`, `nama_rt_rw`, `id_dusun`, `alamat_rt_rw`, `ketua_rt_rw`, `sekre_rt_rw`, `bendahara_rt_rw`, `no_hp_rt_rw`) VALUES
(51, '01/01', 11, 'null', 'null', 'null', 'null', '08123456789'),
(52, '02/02', 12, 'null', 'null', 'null', 'null', '08123456789'),
(53, '03/03', 15, 'null', 'null', 'null', 'null', '08123456789'),
(54, '04/04', 16, 'null', 'null', 'null', 'null', '08123456789');

-- --------------------------------------------------------

--
-- Table structure for table `status_keluarga`
--

CREATE TABLE `status_keluarga` (
  `id_status_keluarga` int(10) NOT NULL,
  `nama_status_keluarga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_keluarga`
--

INSERT INTO `status_keluarga` (`id_status_keluarga`, `nama_status_keluarga`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Istri'),
(3, 'Anak');

-- --------------------------------------------------------

--
-- Table structure for table `status_pernikahan`
--

CREATE TABLE `status_pernikahan` (
  `id_status_pernikahan` int(10) NOT NULL,
  `nama_status_pernikahan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_pernikahan`
--

INSERT INTO `status_pernikahan` (`id_status_pernikahan`, `nama_status_pernikahan`) VALUES
(2, 'Belum Menikah'),
(5, 'Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(10) NOT NULL,
  `password_user` varchar(40) NOT NULL,
  `jabatan_user` enum('Operator','Kades','Dusun','Sekpem') NOT NULL,
  `id_jenis_kelamin` int(11) NOT NULL,
  `no_hp_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `jabatan_user`, `id_jenis_kelamin`, `no_hp_user`) VALUES
(19, 'Operator Desa', 'operator', '2407bd807d6ca01d1bcd766c730cec9a', 'Operator', 1, '081247214241'),
(20, 'Kepala Dusun', 'dusun', 'a2d4c85e01b07031bdc03eaacbc75edb', 'Dusun', 1, '0812472144567'),
(21, 'Sekpem', 'sekpem', 'b3d6eab5fe712871d0fd85c86d288965', 'Sekpem', 1, '0812472144567'),
(23, 'Kades', 'kades', '1bd5da988b535455b33007aca5bb5b87', 'Kades', 2, '081247214241');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_jk`
--

CREATE TABLE `user_has_jk` (
  `id_user` int(11) NOT NULL,
  `id_jenis_kelamin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `id_jenis_kelamin` int(11) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_golongan_darah` int(11) NOT NULL,
  `id_status_pernikahan` int(11) NOT NULL,
  `id_status_keluarga` int(11) NOT NULL,
  `id_kewarganegaraan` int(11) NOT NULL,
  `no_paspor` varchar(50) NOT NULL,
  `no_kitas_kitap` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `id_rt_rw` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `status_warga` enum('Domisili','Non Domisili') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warga_has_referensi`
--

CREATE TABLE `warga_has_referensi` (
  `id_warga` int(11) NOT NULL,
  `id_jenis_kelamin` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_jenis_pekerjaan` int(11) NOT NULL,
  `id_golongan_darah` int(11) NOT NULL,
  `id_status_pernikahan` int(11) NOT NULL,
  `id_status_keluarga` int(11) NOT NULL,
  `id_kewarganegaraan` int(11) NOT NULL,
  `id_rt_rw` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id_dusun`);

--
-- Indexes for table `golongan_darah`
--
ALTER TABLE `golongan_darah`
  ADD PRIMARY KEY (`id_golongan_darah`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indexes for table `jumlahkk_has_dusun`
--
ALTER TABLE `jumlahkk_has_dusun`
  ADD KEY `id_jumlah_kk` (`id_jumlah_kk`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- Indexes for table `jumlah_kk`
--
ALTER TABLE `jumlah_kk`
  ADD PRIMARY KEY (`id_jumlah_kk`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_kk`),
  ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`),
  ADD KEY `id_rt_rw` (`id_rt_rw`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- Indexes for table `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  ADD PRIMARY KEY (`id_kewarganegaraan`);

--
-- Indexes for table `kk_has_referensi`
--
ALTER TABLE `kk_has_referensi`
  ADD KEY `id_kk` (`id_kk`),
  ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`),
  ADD KEY `id_rt_rw` (`id_rt_rw`),
  ADD KEY `id_dusun` (`id_dusun`),
  ADD KEY `id_kewarganegaraan` (`id_kewarganegaraan`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `rt_has_dusun`
--
ALTER TABLE `rt_has_dusun`
  ADD KEY `id_rt_rw` (`id_rt_rw`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- Indexes for table `rt_rw`
--
ALTER TABLE `rt_rw`
  ADD PRIMARY KEY (`id_rt_rw`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- Indexes for table `status_keluarga`
--
ALTER TABLE `status_keluarga`
  ADD PRIMARY KEY (`id_status_keluarga`);

--
-- Indexes for table `status_pernikahan`
--
ALTER TABLE `status_pernikahan`
  ADD PRIMARY KEY (`id_status_pernikahan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`);

--
-- Indexes for table `user_has_jk`
--
ALTER TABLE `user_has_jk`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_pendidikan` (`id_pendidikan`),
  ADD KEY `id_jenis_pekerjaan` (`id_pekerjaan`),
  ADD KEY `id_golongan_darah` (`id_golongan_darah`),
  ADD KEY `id_status_pernikahan` (`id_status_pernikahan`),
  ADD KEY `id_status_keluarga` (`id_status_keluarga`),
  ADD KEY `id_kewarganegaraan` (`id_kewarganegaraan`),
  ADD KEY `id_rt_rw` (`id_rt_rw`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- Indexes for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD KEY `id_warga` (`id_warga`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `warga_has_referensi`
--
ALTER TABLE `warga_has_referensi`
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_pendidikan` (`id_pendidikan`),
  ADD KEY `id_jenis_pekerjaan` (`id_jenis_pekerjaan`),
  ADD KEY `id_golongan_darah` (`id_golongan_darah`),
  ADD KEY `id_status_pernikahan` (`id_status_pernikahan`),
  ADD KEY `id_status_keluarga` (`id_status_keluarga`),
  ADD KEY `id_kewarganegaraan` (`id_kewarganegaraan`),
  ADD KEY `id_rt_rw` (`id_rt_rw`),
  ADD KEY `id_dusun` (`id_dusun`),
  ADD KEY `id_warga` (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id_dusun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `golongan_darah`
--
ALTER TABLE `golongan_darah`
  MODIFY `id_golongan_darah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jumlah_kk`
--
ALTER TABLE `jumlah_kk`
  MODIFY `id_jumlah_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  MODIFY `id_kewarganegaraan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rt_rw`
--
ALTER TABLE `rt_rw`
  MODIFY `id_rt_rw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `status_keluarga`
--
ALTER TABLE `status_keluarga`
  MODIFY `id_status_keluarga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_pernikahan`
--
ALTER TABLE `status_pernikahan`
  MODIFY `id_status_pernikahan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jumlahkk_has_dusun`
--
ALTER TABLE `jumlahkk_has_dusun`
  ADD CONSTRAINT `jumlahkk_has_dusun_ibfk_1` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jumlah_kk`
--
ALTER TABLE `jumlah_kk`
  ADD CONSTRAINT `jumlah_kk_ibfk_1` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`);

--
-- Constraints for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_rt_rw`) REFERENCES `rt_rw` (`id_rt_rw`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_3` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`);

--
-- Constraints for table `kk_has_referensi`
--
ALTER TABLE `kk_has_referensi`
  ADD CONSTRAINT `kk_has_referensi_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `kartu_keluarga` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kk_has_referensi_ibfk_2` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kk_has_referensi_ibfk_3` FOREIGN KEY (`id_rt_rw`) REFERENCES `rt_rw` (`id_rt_rw`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kk_has_referensi_ibfk_4` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kk_has_referensi_ibfk_5` FOREIGN KEY (`id_kewarganegaraan`) REFERENCES `kewarganegaraan` (`id_kewarganegaraan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rt_has_dusun`
--
ALTER TABLE `rt_has_dusun`
  ADD CONSTRAINT `rt_has_dusun_ibfk_1` FOREIGN KEY (`id_rt_rw`) REFERENCES `rt_rw` (`id_rt_rw`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rt_has_dusun_ibfk_2` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rt_rw`
--
ALTER TABLE `rt_rw`
  ADD CONSTRAINT `rt_rw_ibfk_1` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`);

--
-- Constraints for table `user_has_jk`
--
ALTER TABLE `user_has_jk`
  ADD CONSTRAINT `user_has_jk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_has_jk_ibfk_2` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `warga_ibfk_10` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`),
  ADD CONSTRAINT `warga_ibfk_2` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id_agama`),
  ADD CONSTRAINT `warga_ibfk_3` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id_pendidikan`),
  ADD CONSTRAINT `warga_ibfk_4` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`),
  ADD CONSTRAINT `warga_ibfk_5` FOREIGN KEY (`id_golongan_darah`) REFERENCES `golongan_darah` (`id_golongan_darah`),
  ADD CONSTRAINT `warga_ibfk_6` FOREIGN KEY (`id_status_pernikahan`) REFERENCES `status_pernikahan` (`id_status_pernikahan`),
  ADD CONSTRAINT `warga_ibfk_7` FOREIGN KEY (`id_status_keluarga`) REFERENCES `status_keluarga` (`id_status_keluarga`),
  ADD CONSTRAINT `warga_ibfk_8` FOREIGN KEY (`id_kewarganegaraan`) REFERENCES `kewarganegaraan` (`id_kewarganegaraan`),
  ADD CONSTRAINT `warga_ibfk_9` FOREIGN KEY (`id_rt_rw`) REFERENCES `rt_rw` (`id_rt_rw`);

--
-- Constraints for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_kk`) REFERENCES `kartu_keluarga` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warga_has_referensi`
--
ALTER TABLE `warga_has_referensi`
  ADD CONSTRAINT `warga_has_referensi_ibfk_1` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_10` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_2` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_3` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id_pendidikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_4` FOREIGN KEY (`id_jenis_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_5` FOREIGN KEY (`id_golongan_darah`) REFERENCES `golongan_darah` (`id_golongan_darah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_6` FOREIGN KEY (`id_status_pernikahan`) REFERENCES `status_pernikahan` (`id_status_pernikahan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_7` FOREIGN KEY (`id_status_keluarga`) REFERENCES `status_keluarga` (`id_status_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_8` FOREIGN KEY (`id_kewarganegaraan`) REFERENCES `kewarganegaraan` (`id_kewarganegaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_referensi_ibfk_9` FOREIGN KEY (`id_rt_rw`) REFERENCES `rt_rw` (`id_rt_rw`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
