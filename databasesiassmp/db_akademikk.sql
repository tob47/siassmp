-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2015 at 03:18 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_akademikk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE IF NOT EXISTS `data_guru` (
  `id_guru` int(3) NOT NULL auto_increment,
  `nama_guru` varchar(20) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `tgl` int(2) NOT NULL,
  `bln` varchar(15) NOT NULL,
  `thn` int(4) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat_guru` text NOT NULL,
  `tm_tanggal` int(2) NOT NULL,
  `tm_bulan` varchar(15) NOT NULL,
  `tm_tahun` int(4) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_guru`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `nama_guru`, `nip`, `kota`, `tgl`, `bln`, `thn`, `kelamin`, `agama`, `alamat_guru`, `tm_tanggal`, `tm_bulan`, `tm_tahun`, `pendidikan`, `golongan`, `jabatan`, `gambar`, `username`, `password`) VALUES
(1, 'H. Sunartdi, S. Pd, ', '111112', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Bogor', 1, 'januari', 1975, 'S 3', 'IA', 'Guru', '', 'sunar', '699528565f07a4a56dd3efd9f95dfcc2'),
(2, ' Muhammad Taufik, S.', '11111377', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Jakarta', 1, 'januari', 1975, 'S1', 'IC', 'Guru', '', 'taufik', 'd4305d7ed2ec97107cd6eb8dd4b6f6b7'),
(3, 'Iwan Pranoto', '111114', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Cijantung', 1, 'januari', 1975, 'S3', 'IA', 'Guru', '', 'iwan', '01ccce480c60fcdb67b54f4509ffdb56'),
(26, 'jablud', '13442', 'tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'tegal', 1, 'januari', 1975, 'sma', 'IA', 'operasi', '', 'x', '9dd4e461268c8034f5c8564e155c67a6'),
(11, 'Syamsul Arifin, S. P', '5656577', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Brebes', 1, 'januari', 1975, 'S2', 'ID', 'Guru', '', 'arifin', '89a46a3f7d7fe20f88bd3dbfd7943c89'),
(12, 'Muhamad Fahmi', '1245677', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Tegal', 1, 'januari', 1975, 'S3', 'IC', 'Guru', '', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12'),
(13, ' Sabar, S. Pd, M.T', '123', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Tegal', 1, 'januari', 1975, 'S3', 'IC', 'Guru', '', 'sabar', 'c168c2f78558ed3a3b69a5ec3574cf11'),
(14, 'Muhamad Basuki', '120404', 'Brebes', 1, 'januari', 1975, 'laki-laki', 'islam', 'Brebes', 1, 'januari', 1975, 'S2', 'IVE', 'Guru', '', 'suki', 'd61155f6f6120c0f17546b5311b08f9e'),
(16, ' Abu Sofyan, S. Pd', '8437487348', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Tegal', 1, 'januari', 1975, 'S3', 'IB', 'Guru', '', 'abu', '34d71b97c471931334f385b4e7b7379c'),
(18, 'Umi Haniin, S. Pd', '124567', 'Semarang', 1, 'januari', 2008, 'perempuan', 'islam', 'Tegal', 1, 'januari', 1975, 'S2', 'ID', 'Guru', '', 'umi', 'e84f942d7f93ddc14d24b930d87e3da7'),
(23, 'Muhamad Nadif', '0983938', 'Tegal', 3, 'november', 1993, 'laki-laki', 'islam', 'Tegal', 5, 'mei', 1981, 'S3', 'IB', 'Guru', '', 'tobi', 'e0dd692dcb560bc04bfa1cbfaca9ecff'),
(24, 'Muhamad Tobiin M. Ko', '12040480', 'Tegal', 3, 'november', 1993, 'laki-laki', 'islam', 'Tegal', 1, 'januari', 1975, 'S3', 'IVE', 'S3', '', 'tobi', 'e0dd692dcb560bc04bfa1cbfaca9ecff'),
(25, 'Khaerodin', '1206868', 'Tegal', 1, 'januari', 1977, 'laki-laki', 'islam', 'Tegal', 1, 'januari', 1975, 'S2', 'ID', 'Guru', '', 'odin', 'e44985980c9d3c5d70b6a548b14d773a');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(5) NOT NULL auto_increment,
  `nama_siswa` varchar(20) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tgl` int(2) NOT NULL,
  `bln` varchar(10) NOT NULL,
  `thn` int(4) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `anakke` varchar(10) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `telpon_siswa` varchar(12) NOT NULL,
  `sekolahasal` varchar(20) NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `pd_tgl` int(2) NOT NULL,
  `pd_bln` varchar(10) NOT NULL,
  `pd_thn` int(4) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `alamatortu` varchar(40) NOT NULL,
  `hportu` varchar(13) NOT NULL,
  `pekerjaanayah` varchar(20) NOT NULL,
  `pekerjaanibu` varchar(20) NOT NULL,
  `wali` varchar(30) NOT NULL,
  `alamatwali` varchar(40) NOT NULL,
  `hpwali` varchar(13) NOT NULL,
  `pekerjaanwali` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `nis`, `nisn`, `kota`, `tgl`, `bln`, `thn`, `kelamin`, `agama`, `status`, `anakke`, `alamat_siswa`, `telpon_siswa`, `sekolahasal`, `kelas`, `pd_tgl`, `pd_bln`, `pd_thn`, `ayah`, `ibu`, `alamatortu`, `hportu`, `pekerjaanayah`, `pekerjaanibu`, `wali`, `alamatwali`, `hpwali`, `pekerjaanwali`, `gambar`, `username`, `password`) VALUES
(2, 'Muhamad Alwi', '50000000', '8787878787', 'Brebes', 1, 'januari', 1991, 'laki-laki', 'islam', 'Anak Angkat', 'II', 'Brebes', '000000000000', 'SD N Brebes', 'VII', 1, 'januari', 1975, 'Sukra', 'Sikra', 'Tegal', '9999999999999', 'Tani', 'IRT', 'Dalban', 'Tegal', '7777777777777', 'Tani', '', 'alwi', '86df28556e29bfe0ab2431a6b07c3b01'),
(3, 'Alfionita Sari', '50406042', '08948549', 'Tegal', 1, 'januari', 1992, 'laki-laki', 'islam', 'Anak Kandung', '', 'Bojong', '0217703977', 'SD N KERTAHARJA 02', 'VII', 14, 'juli', 2014, 'Warmad', 'Sutinah', 'Kertahaja', '085727517569', 'Wiraswasta', 'Buruh', '', '', '', '', '', 'sari', 'a87bcf310c4fdf2a80f2f3d97f1f9424'),
(4, 'Muhamad Riski', '50406043', '12323', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Anak Kandung', 'II', 'Jakarta', '0217703988', 'SD N Tegal', 'VIII', 1, 'januari', 1975, 'Tarmad', 'Surat', 'Tegal', '0878393898', 'Tani', 'IRT', '', '', '', '', '', 'riski', '6e24184c9f8092a67bcd413cbcf598da'),
(6, 'Ahmad Rizal', '50406045', '456372828', 'Brebes', 1, 'januari', 1993, 'laki-laki', 'islam', 'Anak Kandung', 'VII', 'Brebes', '0217703944', 'SD N Brebes', 'VII', 1, 'januari', 2012, 'Dalban', 'Dalban', 'Brebes', '088734883784', 'Swasta', 'Swasta', '', '', '', '', '', 'rizal', '150fb021c56c33f82eef99253eb36ee1'),
(7, 'Anjani Septiani', '50406046', '2323', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'AnakKandung', 'II', 'Jakarta', '0217703933', 'SD N 1 Bumijawa', 'VII', 1, 'januari', 1975, 'Maryon', 'Maryati', 'Tegal', '087830390977', 'Tani', 'IRT', '', '', '', '', '', 'anjani', '48f55ebf10eeac8b54ea803837eb17ef'),
(8, 'Naela Azka', '50406047', '1234879', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Anak Kandung', 'II', 'Tegal', '0217703922', 'SD N 3 Slawi', 'VIII', 1, 'januari', 1975, 'Bejo', 'Bejowati', 'Tegal', '087849994837', 'Guru', 'Irt', '', '', '', '', '', 'naela', 'aff587a8d7fe6f1f84984c6da770ad1c'),
(10, 'Muhamad Arjuna', '212128', '43243', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Anak Kandung', 'II', 'Tegal', '087830390977', 'SD N 1 Sutapranan', 'VII', 1, 'januari', 1975, 'Warso', 'Leha', 'Tegal', '087822772882', 'Buruh tani', 'IRT', 'Markas', 'ikha', '6466333666', 'Swasta', '', 'arjuna', '2ea41863add9406830e378b9345ffe3b'),
(12, 'Royman Setiawan', '1978', '00562562', 'Tegal', 1, 'juli', 1993, 'laki-laki', 'islam', 'Anak Kandung', 'I', 'Tegal', '02134657565', 'SD N 2 Kerjaharja', 'VIII', 1, 'juli', 1992, 'Dasmad', 'Rohinah', 'Tegal', '021345678378', 'Swasta', 'Buruh', '', '', '', '', '', 'royman', 'd014d4527eff0bc28e4aa9e65d09ba77'),
(13, 'Riski Ahmad', '1928', '002345', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Anak Kandung', 'II', 'Tegal', '0231092999', 'SD N 2 Wangandawa', 'VIII', 1, 'januari', 1975, 'Tarmad', 'Sirti', 'Tegal', '063477627', 'Swasta', 'buruh', '', '', '', '', '', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12'),
(14, 'Muhamad Fajar', '1236', '0023232', 'Slawi', 1, 'januari', 1992, 'laki-laki', 'islam', 'Anak Kandung', 'II', 'Tegal', '087383473778', 'SD N 1 Depokan', 'VIII', 1, 'januari', 2006, 'Jasmad', 'Jastri', 'Tegal', '098459848994', 'Swasta', 'Buruh', '', '', '', '', '', 'fajar', '24bc50d85ad8fa9cda686145cf1f8aca'),
(15, 'Resti Okta', '1998', '0029839', 'Tegal', 1, 'januari', 1975, 'laki-laki', 'islam', 'Anak Kandung', 'II', 'Tegal', '0898238298', 'SD N 2 Wangandawa', 'IX', 1, 'januari', 1992, 'Rusja', 'Nurhikmah', 'Tegal', '087473737838', 'Swasta', 'Tani', '', '', '', '', '', 'resti', 'f5a7a91022921bea8248c0b7176902ed'),
(16, 'Rossi Munari', '1987', '00456738', 'Tegall', 1, 'januari', 1993, 'laki-laki', 'islam', 'Anak Kandung', 'II', 'Tegal', '087238982389', 'SD N 1 Bumijawa', 'IX', 1, 'januari', 2009, 'Harjo', 'Harti', 'Tegal', '089458944588', 'Tani', 'Buruh', '', '', '', '', '', 'rossi', '2bf65275cb7f5dc95febd7d46cd7d0af'),
(17, 'Siti Nurbaya', '17364', '008738', 'Brebes ', 1, 'januari', 1990, 'laki-laki', 'islam', 'Anak Kandungal', 'II', 'Tegal', '08783493884', 'SD N 7 Sutapranan', 'IX', 1, 'januari', 2007, 'Warjo', 'Suti', 'Tegal', '098498448993', 'Tani', 'Buruh', '', '', '', '', '', 'siti', 'db04eb4b07e0aaf8d1d477ae342bdff9'),
(18, 'Muhamad Ali', '1209', '002222', 'Tegal', 1, 'januari', 1994, 'laki-laki', 'islam', 'Anak Kandung', 'II', 'Tegal', '08783399888', 'SD N 1 Bumijaawa', 'IX', 1, 'januari', 2010, 'Dahron', 'Jelah', 'Tegal', '087839433847', 'Swasta', 'Guru', '', '', '', '', '', 'ali', '86318e52f5ed4801abe1d13d509443de'),
(19, 'Muhamad Bani', '1276', '008723484', 'Brebes', 1, 'januari', 2010, 'laki-laki', 'islam', 'Anak Tiri', 'II', 'Tegal', '08782039874', 'SD N 1 Tegal', 'IX', 1, 'januari', 2006, 'Bakrie', 'Anggi', 'Tegal', '087893488474', 'Swasta', 'Buruh', '', '', '', '', '', 'bani', '497a333d611f80dfddb5407f81632a85'),
(20, 'dalban', '007', '001', 'brebes', 9, 'januari', 2015, 'laki-laki', 'islam', 'x', 'x', 'x', 'x', 'x', 'IX', 7, 'januari', 2014, 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', '', 'x', '9dd4e461268c8034f5c8564e155c67a6');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(3) NOT NULL auto_increment,
  `namapegawai` varchar(30) NOT NULL,
  `pengertian` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `namapegawai`, `pengertian`) VALUES
(1, 'IA', 'Pangkat Juru Muda'),
(7, 'IB', 'Pangkat Juru Muda Tingkat 1'),
(9, 'IC', 'Pangkat Juru'),
(10, 'ID', 'Pangkat Juru Tingkat 1'),
(11, 'IVA', 'Pangkat Pembina'),
(12, 'IVE', 'Pangkat Pembina');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sekolah` int(3) NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL,
  `nss` char(20) NOT NULL,
  `nis` char(20) NOT NULL,
  `ntsn` char(20) NOT NULL,
  `skpd` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor` char(13) NOT NULL,
  `fax` char(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `tahun` varchar(9) NOT NULL,
  `semester` varchar(6) NOT NULL,
  PRIMARY KEY  (`id_sekolah`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama`, `nss`, `nis`, `ntsn`, `skpd`, `alamat`, `nomor`, `fax`, `email`, `profile`, `tahun`, `semester`) VALUES
(1, 'SMP Harapan Bersama Kota Tegal', '20.103.65.03.001', '20.103.65.03.001', '2', 'Dinas Pemuda', 'Jalan Karanganyar Bandasari Tegal No. 14 Tegal', '0283-9983331', '0283-9983331', 'smpharbertegal@gmail.com', 'Semangat dalam belajar dan beribadah', '2012-2013', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `setup_kelas`
--

CREATE TABLE IF NOT EXISTS `setup_kelas` (
  `id_kelas` int(3) NOT NULL auto_increment,
  `nama_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `setup_kelas`
--

INSERT INTO `setup_kelas` (`id_kelas`, `nama_kelas`, `jurusan`) VALUES
(7, 'IX ', 'SSN'),
(8, 'VII', 'SSN'),
(9, 'VIII', 'SSN');

-- --------------------------------------------------------

--
-- Table structure for table `setup_pelajaran`
--

CREATE TABLE IF NOT EXISTS `setup_pelajaran` (
  `id_pelajaran` int(3) NOT NULL auto_increment,
  `nama_pelajaran` varchar(50) NOT NULL,
  `kkm` char(5) NOT NULL,
  PRIMARY KEY  (`id_pelajaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `setup_pelajaran`
--

INSERT INTO `setup_pelajaran` (`id_pelajaran`, `nama_pelajaran`, `kkm`) VALUES
(1, ' Ilmu Pengetahuan Alam', '90'),
(2, 'Matematika', '90'),
(4, 'Bahasa Indonesia', '90'),
(6, ' Ilmu Pengetahuan Sosial', '90'),
(13, 'Seni Budaya dan Keterampilan', '90'),
(9, 'Bahasa Inggris', '80'),
(10, 'Bahasa Jawa', '70'),
(11, 'Pendidikan Agama Islam', '80'),
(12, 'Pendidikan Kewarganegaraan', '70'),
(14, 'Penjaskes', '90'),
(15, 'TIK', '90'),
(16, 'Bahasa Jepang', '80');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `id_jadwal` int(5) NOT NULL auto_increment,
  `nama_pelajaran` varchar(40) NOT NULL,
  `kkm` int(3) NOT NULL,
  `id_guru` int(3) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  PRIMARY KEY  (`id_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `nama_pelajaran`, `kkm`, `id_guru`, `kelas`) VALUES
(52, 'Pendidikan Kewarganegaraan', 70, 12, 'IX '),
(51, 'Pendidikan Agama Islam', 80, 14, 'IX '),
(50, 'Bahasa Jawa', 70, 25, 'VII'),
(49, 'Bahasa Inggris', 80, 3, 'IX '),
(48, 'Seni Budaya dan Keterampilan', 90, 4, 'IX '),
(47, ' Ilmu Pengetahuan Sosial', 90, 1, 'IX '),
(46, 'Bahasa Indonesia', 90, 13, 'VII'),
(45, 'Matematika', 90, 2, 'VII'),
(44, ' Ilmu Pengetahuan Alam', 90, 16, 'IX '),
(53, 'Penjaskes', 90, 11, 'VIII'),
(54, 'TIK', 90, 18, 'IX ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jwalikelas`
--

CREATE TABLE IF NOT EXISTS `tbl_jwalikelas` (
  `id_jwalikelas` int(5) NOT NULL auto_increment,
  `nama_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `id_guru` int(5) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY  (`id_jwalikelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_jwalikelas`
--

INSERT INTO `tbl_jwalikelas` (`id_jwalikelas`, `nama_kelas`, `jurusan`, `id_guru`, `nip`) VALUES
(6, 'VII', 'SSN', 13, ''),
(5, 'IX ', 'SSN', 16, ''),
(7, 'VIII', 'SSN', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id_nilai` int(5) NOT NULL auto_increment,
  `id_siswa` int(5) NOT NULL,
  `id_jadwal` int(4) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `id_guru` int(5) NOT NULL,
  `nilai_uh1` int(3) NOT NULL,
  `nilai_uh2` int(3) NOT NULL,
  `nilai_uh3` int(3) NOT NULL,
  `nilai_uh4` int(3) NOT NULL,
  `nilai_uh5` int(3) NOT NULL,
  `rata_uh` int(3) NOT NULL,
  `nilai_tugas1` int(3) NOT NULL,
  `nilai_tugas2` int(3) NOT NULL,
  `nilai_tugas3` int(3) NOT NULL,
  `nilai_tugas4` int(3) NOT NULL,
  `rata_tugas` int(3) NOT NULL,
  `nilai_harian` int(3) NOT NULL,
  `nilai_uas` int(3) NOT NULL,
  `nilai_rapor` int(3) NOT NULL,
  `kkm` int(3) NOT NULL,
  `ket` varchar(12) NOT NULL,
  PRIMARY KEY  (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_siswa`, `id_jadwal`, `kelas`, `id_guru`, `nilai_uh1`, `nilai_uh2`, `nilai_uh3`, `nilai_uh4`, `nilai_uh5`, `rata_uh`, `nilai_tugas1`, `nilai_tugas2`, `nilai_tugas3`, `nilai_tugas4`, `rata_tugas`, `nilai_harian`, `nilai_uas`, `nilai_rapor`, `kkm`, `ket`) VALUES
(40, 2, 45, 'VII', 2, 89, 88, 90, 88, 80, 87, 90, 80, 90, 85, 86, 87, 89, 88, 90, ' Tidak Lulus'),
(41, 10, 45, 'VII', 2, 80, 98, 88, 87, 89, 88, 90, 90, 100, 89, 92, 90, 90, 90, 90, ' Lulus'),
(39, 7, 45, 'VII', 2, 88, 90, 93, 92, 96, 92, 95, 91, 92, 95, 93, 93, 92, 92, 90, ' Lulus'),
(38, 3, 45, 'VII', 2, 100, 91, 90, 90, 92, 93, 91, 93, 94, 95, 93, 93, 92, 92, 90, ' Lulus'),
(37, 6, 45, 'VII', 2, 70, 75, 82, 76, 78, 76, 88, 90, 89, 80, 87, 81, 79, 80, 90, ' Tidak Lulus'),
(32, 18, 48, 'IX', 4, 80, 85, 90, 100, 78, 87, 98, 79, 70, 100, 87, 87, 100, 96, 90, 'Lulus'),
(33, 19, 48, 'IX', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 'Tidak Lulus'),
(34, 15, 48, 'IX', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 'Tidak Lulus'),
(35, 16, 48, 'IX', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 'Tidak Lulus'),
(36, 17, 48, 'IX', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id_admin` int(3) NOT NULL auto_increment,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Tobiah', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Dalbanisme', 'dalbanbro', '14242250c02653a745f2bf02aa5d959e'),
(8, 'User', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');
