-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 11:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `setup_aktif`
--

CREATE TABLE IF NOT EXISTS `setup_aktif` (
  `id_ta` int(11) NOT NULL AUTO_INCREMENT,
  `ta` varchar(20) DEFAULT NULL,
  `smt` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_ta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setup_aktif`
--

INSERT INTO `setup_aktif` (`id_ta`, `ta`, `smt`) VALUES
(1, '2018/2019', '1');

-- --------------------------------------------------------

--
-- Table structure for table `setup_smt`
--

CREATE TABLE IF NOT EXISTS `setup_smt` (
  `id_smt` int(11) NOT NULL AUTO_INCREMENT,
  `smt` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_smt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `setup_smt`
--

INSERT INTO `setup_smt` (`id_smt`, `smt`) VALUES
(1, 'Ganjil'),
(2, 'Genap'),
(3, 'Antara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE IF NOT EXISTS `tbl_akun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `status` set('mahasiswa','dosen','baak','admin','kajur') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `nomor_induk`, `pass`, `status`) VALUES
(1, '3143111011', 'd336036e9f330c578bb3437fdb7d3a39', 'admin'),
(2, '123123', '4297f44b13955235245b2497399d7a93', 'admin'),
(3, '2018101022', '375a0d4d75c5a94453f3a5e597b43aca', 'mahasiswa'),
(4, '2014101028', '776715f9a5f6f54e4c6331c0c76fedcf', 'mahasiswa'),
(5, '2018211001', '6f2fd2e97c1262b70321472d5069f6cc', 'mahasiswa'),
(6, '112233', 'd0970714757783e6cf17b26fb8e2298f', 'kajur'),
(7, '08999', '9eff28a7ef3a9fb031b3ad6af31806e4', 'dosen'),
(8, '123456', 'e10adc3949ba59abbe56e057f20f883e', 'baak'),
(9, '0899911', '682df544ed64696edc38f4943a0fa0b3', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_akun_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_akun_detail`
--

INSERT INTO `tbl_akun_detail` (`id`, `nomor_induk`, `nama`) VALUES
(1, '123456', 'A'),
(2, '3143111011', 'B'),
(3, '123123', 'C'),
(4, '112233', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dataket_mhs`
--

CREATE TABLE IF NOT EXISTS `tbl_dataket_mhs` (
  `id_dataket_mhs` int(11) NOT NULL,
  `id_ket_mhs` int(11) DEFAULT NULL,
  `nim` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(20) DEFAULT NULL,
  `smt` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dataket_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dataket_mhs`
--

INSERT INTO `tbl_dataket_mhs` (`id_dataket_mhs`, `id_ket_mhs`, `nim`, `tahun_ajaran`, `smt`) VALUES
(1, 1, 2014101028, '2018/2019', 1),
(2, 1, 2018211001, '2018/2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE IF NOT EXISTS `tbl_dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1',
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Kong Hu Chu') DEFAULT NULL,
  `img_file` varchar(100) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nidn`, `nama`, `gender`, `alamat`, `id_jabatan`, `id_status`, `tempat_lahir`, `tgl_lahir`, `agama`, `img_file`) VALUES
(7, '08999', 'ade', 'L', 'xxxxxx', 1, 1, 'Banjarnegara', '2018-11-27', 'Islam', 'X'),
(8, '0899911', 'ades', 'L', 'xxxxxxxxxxxx', 2, 1, 'Banjarnegara', '2018-11-27', 'Islam', 'X'),
(9, '57457456', 'ades', 'L', 'xxxxxxxxx', 1, 1, 'Purwokerto', '2018-11-27', 'Islam', '57457456.jpg'),
(10, '12312312', 'XXXXXX', 'L', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXX', 3, 0, 'Purwokerto', '2018-11-19', 'Islam', '12312312.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hari`
--

CREATE TABLE IF NOT EXISTS `tbl_hari` (
  `id_hari` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_hari`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_hari`
--

INSERT INTO `tbl_hari` (`id_hari`, `hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_krs`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal_krs` (
  `id_jadwal_krs` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_awl_krs` date DEFAULT NULL,
  `tgl_akr_krs` date DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_krs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_jadwal_krs`
--

INSERT INTO `tbl_jadwal_krs` (`id_jadwal_krs`, `tgl_awl_krs`, `tgl_akr_krs`, `id_jurusan`) VALUES
(1, '2018-12-18', '2018-12-19', 2),
(2, '2018-12-18', '2018-12-19', 3),
(3, '2018-12-18', '2018-12-19', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_mk`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal_mk` (
  `id_jadwal_mk` int(11) NOT NULL AUTO_INCREMENT,
  `id_mk` varchar(11) DEFAULT NULL,
  `id_jam` int(11) DEFAULT NULL,
  `id_hari` int(11) DEFAULT NULL,
  `id_ruang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_mk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_jadwal_mk`
--

INSERT INTO `tbl_jadwal_mk` (`id_jadwal_mk`, `id_mk`, `id_jam`, `id_hari`, `id_ruang`) VALUES
(9, '5', 1, 1, 1),
(10, '6', 2, 1, 1),
(11, '7', 1, 2, 2),
(12, '8', 2, 2, 2),
(13, '1', 1, 3, 3),
(14, '2', 1, 3, 1),
(15, '3', 2, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jam`
--

CREATE TABLE IF NOT EXISTS `tbl_jam` (
  `id_jam` int(11) NOT NULL AUTO_INCREMENT,
  `jam_mulai` time DEFAULT NULL,
  `jam_akhir` time DEFAULT NULL,
  PRIMARY KEY (`id_jam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_jam`
--

INSERT INTO `tbl_jam` (`id_jam`, `jam_mulai`, `jam_akhir`) VALUES
(1, '07:40:00', '09:00:00'),
(2, '08:50:00', '10:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas_mk`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas_mk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mk` int(11) DEFAULT NULL,
  `nama_kelas` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_kelas_mk`
--

INSERT INTO `tbl_kelas_mk` (`id`, `id_mk`, `nama_kelas`) VALUES
(1, 5, 'A'),
(2, 5, 'B'),
(3, 5, 'C'),
(5, 1, 'A'),
(6, 1, 'B'),
(7, 1, 'C'),
(8, 1, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelompok_mk`
--

CREATE TABLE IF NOT EXISTS `tbl_kelompok_mk` (
  `id_kel_mk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kel_mk` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kel_mk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_kelompok_mk`
--

INSERT INTO `tbl_kelompok_mk` (`id_kel_mk`, `nama_kel_mk`) VALUES
(1, 'MPK Inti'),
(2, 'MPK Institusional'),
(3, 'MKK Inti'),
(4, 'MKK Institusional'),
(5, 'MKB Inti'),
(6, 'MKB Institusional'),
(7, 'MPB Inti'),
(8, 'MPB Institusional'),
(9, 'MBB Inti'),
(10, 'MPB Institusional'),
(11, 'MBB Inti'),
(12, 'MBB Institusional');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keterangan_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_keterangan_mahasiswa` (
  `id_ket_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ket_mhs` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_ket_mhs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_keterangan_mahasiswa`
--

INSERT INTO `tbl_keterangan_mahasiswa` (`id_ket_mhs`, `nama_ket_mhs`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif'),
(3, 'Cuti'),
(4, 'Keuar (DO)'),
(5, 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_krs`
--

CREATE TABLE IF NOT EXISTS `tbl_krs` (
  `id_krs` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) DEFAULT NULL,
  `id_matakuliah` varchar(30) DEFAULT NULL,
  `status_krs` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`id_krs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_krs`
--

INSERT INTO `tbl_krs` (`id_krs`, `nim`, `id_matakuliah`, `status_krs`) VALUES
(5, 2018101022, '3', 'Y'),
(6, 2018101022, '8', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(30) DEFAULT NULL,
  `tempat_lahir_mhs` varchar(30) DEFAULT NULL,
  `tgl_lahir_mhs` date DEFAULT NULL,
  `gender_mhs` enum('L','P') DEFAULT NULL,
  `agama_mhs` enum('Islam','Kristen','Katolik','Hindu','Budha','Kong Hu Chu') DEFAULT NULL,
  `sks_diakui` tinyint(3) DEFAULT '0',
  `angkatan` int(11) DEFAULT NULL,
  `id_jenjang` int(11) DEFAULT NULL,
  `id_st_msk` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `foto_mhs` varchar(100) DEFAULT NULL,
  `id_ket_mhs` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama_mhs`, `tempat_lahir_mhs`, `tgl_lahir_mhs`, `gender_mhs`, `agama_mhs`, `sks_diakui`, `angkatan`, `id_jenjang`, `id_st_msk`, `status`, `foto_mhs`, `id_ket_mhs`) VALUES
('2014101028', 'Fifi Marsia Lasewa', 'Paisubatu', '1995-03-03', 'L', 'Kristen', 60, 2014, 2, 2, 1, NULL, 1),
('2018101022', 'Arga N. Pradana', 'Bekasi', '2000-12-12', 'L', 'Islam', 0, 2018, 2, 2, 1, NULL, 1),
('2018211001', 'Ayu Lestari', 'Mentok', '1994-08-15', 'P', 'Islam', 0, 2018, 3, 1, 1, NULL, 2),
('3150111011', 'XSS', 'XS', '2018-01-01', 'L', 'Kristen', 25, 2016, 3, 2, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ploting`
--

CREATE TABLE IF NOT EXISTS `tbl_ploting` (
  `id_ploting` int(11) NOT NULL AUTO_INCREMENT,
  `ploting_id_matakuliah` int(11) DEFAULT NULL,
  `ploting_id_dosen` int(11) DEFAULT NULL,
  `ploting_date` datetime DEFAULT NULL,
  `ploting_id_akun` varchar(20) DEFAULT NULL,
  `ploting_status` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`id_ploting`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_ploting`
--

INSERT INTO `tbl_ploting` (`id_ploting`, `ploting_id_matakuliah`, `ploting_id_dosen`, `ploting_date`, `ploting_id_akun`, `ploting_status`) VALUES
(13, 5, 7, '2018-12-17 15:38:50', '3143111011', 'Y'),
(14, 6, 8, '2018-12-17 15:38:56', '3143111011', 'Y'),
(15, 7, 9, '2018-12-17 15:39:00', '3143111011', 'Y'),
(16, 8, 10, '2018-12-17 15:39:03', '3143111011', 'Y'),
(17, 1, 7, '2018-12-17 15:39:08', '3143111011', 'Y'),
(18, 2, 8, '2018-12-17 15:39:12', '3143111011', 'Y'),
(20, 3, 10, '2018-12-17 15:39:49', '3143111011', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prasyarat_mk`
--

CREATE TABLE IF NOT EXISTS `tbl_prasyarat_mk` (
  `id_prasyarat_mk` int(11) NOT NULL AUTO_INCREMENT,
  `id_mk` varchar(11) DEFAULT NULL,
  `nama_mk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_prasyarat_mk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `tbl_prasyarat_mk`
--

INSERT INTO `tbl_prasyarat_mk` (`id_prasyarat_mk`, `id_mk`, `nama_mk`) VALUES
(1, '-', '-'),
(2, 'STU125', 'Fonologi Bahasa Inggris'),
(3, 'SEU233', 'Morfologi Bahasa Inggris'),
(4, 'SEU243', 'Sintaksis Bahasa Inggris'),
(5, 'SEU354', 'Semantik Bahasa Inggris'),
(6, 'SEU232', 'Pengkajian Prosa Inggris I'),
(7, 'SEK112', 'Keterampilan Menyimak II'),
(8, 'SEK122', 'Keterampilan Menyimak III'),
(9, 'SEK113', 'Keterampilan Berbicara II'),
(10, 'SEK123', 'Keterampilan Berbicara III'),
(11, 'SEK114', 'Keterampilan Membaca II'),
(12, 'SEK124', 'Keterampilan Membaca III'),
(13, 'SEK115', 'Keterampilan Menulis II'),
(14, 'SEK125', 'Keterampilan Menulis III'),
(15, 'SEK111', 'Keterampilan Tata Bahasa II'),
(16, 'SEK121', 'Keterampilan Tata Bahasa III'),
(17, 'SEK232', 'Keterampilan Menyimaka IV'),
(18, 'SEK234', 'Keterampilan Membaca IV'),
(19, 'SEK235', 'Keterampilan Menulis IV'),
(20, 'SEK245', 'Keterampilan Menulis V'),
(21, 'SEK355', 'Penulisan Portofolio'),
(22, 'SEK365', 'Thematic Seminar'),
(23, 'SEK231', 'Keterampilan Tata Bahasa IV'),
(24, 'PRC102B', 'Bahasa Perancis III'),
(25, 'PRC202A', 'Bahasa Perancis IV'),
(26, 'PRC202B', 'Bahasa Perancis V'),
(27, 'PRC302A', 'Bahasa Perancis VI'),
(28, 'SEK126', 'Penerjemah II'),
(29, 'SEK233', 'Keterampilan Berbicara Didepan Umum'),
(30, 'SEK246', 'Korespondensi II'),
(31, 'SEU232', 'Keterampilan Berbicara & Sejarah Sastra Inggris'),
(32, 'SEU244', 'Pengkajian Prosa Inggris II'),
(33, 'SEU355', 'Pengkajian Drama Inggris II'),
(34, 'SEU245', 'Pengkajian Puisi Inggris II'),
(35, 'SEK236', 'Teori Terjemahan'),
(36, 'SEK242', 'Persiapan TOEFL/EAT'),
(37, 'SEU369', 'Skripsi'),
(38, 'STP232', 'Aplikasi Komputer II'),
(39, 'STU114', 'Bahasa Indonesia II');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_masuk`
--

CREATE TABLE IF NOT EXISTS `tbl_status_masuk` (
  `id_st_msk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_st_msk` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_st_msk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_status_masuk`
--

INSERT INTO `tbl_status_masuk` (`id_st_msk`, `nama_st_msk`) VALUES
(1, 'Baru'),
(2, 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Lektor'),
(2, 'Lektor Madya'),
(3, 'Asisten Ahli'),
(4, 'Non Jabatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenjang`
--

CREATE TABLE IF NOT EXISTS `tb_jenjang` (
  `id_jenjang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenjang` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_jenjang`
--

INSERT INTO `tb_jenjang` (`id_jenjang`, `nama_jenjang`) VALUES
(1, 'D3'),
(2, 'D4'),
(3, 'S1'),
(4, 'S2'),
(5, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE IF NOT EXISTS `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `id_jenjang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `id_jenjang`) VALUES
(2, 'English (Morning)', 3),
(3, 'English', 1),
(4, 'English (Evening)', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE IF NOT EXISTS `tb_matakuliah` (
  `id_mk` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mk` varchar(50) DEFAULT NULL,
  `nama_mk` varchar(100) DEFAULT NULL,
  `id_prasyarat` int(11) DEFAULT NULL,
  `id_kel_mk` int(11) DEFAULT NULL,
  `sks_mk` int(11) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(20) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `semester_prodi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`id_mk`, `kode_mk`, `nama_mk`, `id_prasyarat`, `id_kel_mk`, `sks_mk`, `id_jurusan`, `tahun_ajaran`, `semester`, `status`, `semester_prodi`) VALUES
(1, 'MKKB1123', 'A', 4, 2, 2, 2, '2018/2019', '1', 1, 1),
(2, 'MKKB1124', 'BS', NULL, NULL, 2, 2, '2018/2019', '1', 0, 3),
(3, 'MKKB1125', 'B', NULL, NULL, 3, 2, '2018/2019', '1', 0, 3),
(4, 'MKKB1122', 'XXX', 18, 3, 4, 4, NULL, NULL, 0, 5),
(5, 'MKKB1120', 'MKMK', 16, 3, 5, 2, '2018/2019', '1', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE IF NOT EXISTS `tb_ruangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(50) DEFAULT NULL,
  `tipe_ruangan` enum('Laboratorium','Kelas') DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id`, `nama_ruangan`, `tipe_ruangan`, `kapasitas`) VALUES
(1, 'E.2.3', 'Kelas', 40),
(2, 'E.2.1', 'Kelas', 30),
(3, 'E.2.0', 'Kelas', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_dosen`
--

CREATE TABLE IF NOT EXISTS `tb_status_dosen` (
  `id_status_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_status_dosen`
--

INSERT INTO `tb_status_dosen` (`id_status_dosen`, `nama_status`) VALUES
(1, 'Stat 1'),
(2, 'Stat 2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
