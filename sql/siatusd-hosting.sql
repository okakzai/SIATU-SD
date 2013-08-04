SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE `absensiguru` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `guruid` int(11) NOT NULL,
  `ket` varchar(7) COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL,
  `bln` int(3) NOT NULL,
  `thn` int(5) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `absensiguru`
--

INSERT INTO `absensiguru` VALUES(1, 'Jumat ', 1, '2', '2012-06-01', 6, 2012);
INSERT INTO `absensiguru` VALUES(2, 'Jumat ', 11, '1', '2012-06-01', 6, 2012);
INSERT INTO `absensiguru` VALUES(3, 'Sabtu ', 6, '1', '2012-06-16', 6, 2012);
INSERT INTO `absensiguru` VALUES(4, 'Sabtu ', 4, '2', '2012-06-16', 6, 2012);
INSERT INTO `absensiguru` VALUES(5, 'Sabtu ', 9, '3', '2012-06-16', 6, 2012);
INSERT INTO `absensiguru` VALUES(6, 'Sabtu ', 11, '2', '2012-06-16', 6, 2012);

-- --------------------------------------------------------

--
-- Table structure for table `absensisiswa`
--

CREATE TABLE `absensisiswa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `date` date DEFAULT NULL,
  `tgl` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `bln` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `thn` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) DEFAULT NULL,
  `nis` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `absensisiswa`
--

INSERT INTO `absensisiswa` VALUES(1, 'Rabu ', '2012-05-16', '16', '5', '2012', 1, '1926', 'Rendy Tri Andika', 'Izin');
INSERT INTO `absensisiswa` VALUES(2, 'Senin', '2012-04-23', '23', '4', '2012', 1, '1926', 'Rendy Tri Andika', 'Alpha');
INSERT INTO `absensisiswa` VALUES(3, 'Rabu ', '2012-05-16', '16', '5', '2012', 3, '1891', 'Annas Apritasari', 'Sakit');
INSERT INTO `absensisiswa` VALUES(4, 'Rabu ', '2012-05-16', '16', '5', '2012', 2, '1894', 'Nanda Ferdiana Indarno', 'Izin');
INSERT INTO `absensisiswa` VALUES(5, 'Jumat ', '2012-05-25', '25', '5', '2012', 1, '1941', 'Andika Setiawan', 'Sakit');
INSERT INTO `absensisiswa` VALUES(6, 'Rabu ', '2012-05-30', '30', '5', '2012', 2, '1908', 'Risky Septian', 'Izin');
INSERT INTO `absensisiswa` VALUES(7, 'Rabu ', '2012-05-30', '30', '5', '2012', 2, '1925', 'Rakhul Adi Rafdila', 'Alpha');
INSERT INTO `absensisiswa` VALUES(8, 'Rabu ', '2012-05-30', '30', '5', '2012', 1, '1941', 'Andika Setiawan', 'Alpha');
INSERT INTO `absensisiswa` VALUES(9, 'Rabu ', '2012-05-30', '30', '5', '2012', 1, '1940', 'Aditia Wahyu Kusuma', 'Izin');
INSERT INTO `absensisiswa` VALUES(10, 'Rabu ', '2012-05-30', '30', '5', '2012', 2, '1927', 'Rikhi Ristianto', 'Izin');
INSERT INTO `absensisiswa` VALUES(11, 'Rabu ', '2012-05-30', '30', '5', '2012', 6, '1832', 'Candra Megayanti', 'Alpha');
INSERT INTO `absensisiswa` VALUES(13, 'Rabu ', '2012-05-30', '30', '5', '2012', 4, '1879', 'Muhammad Setyo Fajar Rianto', 'Sakit');
INSERT INTO `absensisiswa` VALUES(14, 'Kamis ', '2012-05-31', '31', '5', '2012', 1, '1941', 'Andika Setiawan', 'Sakit');
INSERT INTO `absensisiswa` VALUES(15, 'Jumat ', '2012-06-01', '1', '6', '2012', 1, '1943', 'Chelisya Claudi Desemberia Lili Priyadi', 'Sakit');
INSERT INTO `absensisiswa` VALUES(16, 'Jumat ', '2012-06-01', '1', '6', '2012', 1, '1950', 'Ratih Widiasari', 'Izin');
INSERT INTO `absensisiswa` VALUES(17, 'Jumat ', '2012-06-01', '1', '6', '2012', 1, '1946', 'Inggrit Wening Pratitis', 'Sakit');
INSERT INTO `absensisiswa` VALUES(18, 'Sabtu ', '2012-06-02', '2', '6', '2012', 1, '1942', 'Atha Alfin Putra Suryanto', 'Sakit');
INSERT INTO `absensisiswa` VALUES(19, 'Sabtu ', '2012-06-02', '2', '6', '2012', 1, '1952', 'Romadan Nofianto', 'Sakit');
INSERT INTO `absensisiswa` VALUES(20, 'Sabtu ', '2012-06-02', '2', '6', '2012', 1, '1926', 'Rendy Tri Andika', 'Alpha');
INSERT INTO `absensisiswa` VALUES(21, 'Sabtu ', '2012-06-02', '2', '6', '2012', 5, '1852', 'Cacuk Saniar', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `userpass` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` VALUES(1, 'arif', '21232f297a57a5a743894a0e4a801fc3', 'arif.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `guruid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `userpass` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(17) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `matpel` varchar(17) COLLATE latin1_general_ci NOT NULL,
  `tgl` int(11) DEFAULT NULL,
  `bln` int(11) NOT NULL,
  `thn` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `agama` int(11) NOT NULL,
  `tempat_lahir` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`guruid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` VALUES(1, 'martini', '7f6412ea0b565ab3fb16195746cd6c97', 'martini', ' MARTINI, S.Pd ', '19541215 197601 2 001', 'Kepala Sekolah', 0, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(2, 'sumarti', 'd3becf804a80fa4831800c2d2b444c8f', 'sumarti', ' SUMARTI, S.Pd ', '19580615 197803 2 012', 'Kelas 1', 0, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(3, 'lilik', 'ef90d17d3ee20a6c628fa4cdc4462e5a', 'lilik', ' LILIK MARDIATI, S.Pd ', '19650613 199003 2 005', 'Kelas 2', 0, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(4, 'aning', 'c1901c302bd7648bffa1bef0283fe8d4', 'aning', ' ANING R, S.Pd ', '19580601 197803 2 015', 'Kelas 3', 0, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(5, 'suparti', 'c708ca9e78cc77c808ab6f4b02338239', 'suparti', ' Hj. SUPARTI, S.Pd ', '19600712 198904 2 001', 'Kelas 4', 0, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(6, 'bibit', '314dc2c56b755f63359d1b43a6a2492d', 'bibit', ' BIBIT WINARTI, S.Pd ', '19590909 197907 2 004', 'Kelas 5', 0, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(7, 'partini', 'a7be41b19c9e8741a6ed67f41c6f36b3', 'partini', ' PARTINI, S.Pd ', '19590609 197907 2 003', 'Kelas 6', 0, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(8, 'sofrotun', '3d588ffaff7479d4526020b81422d8a8', 'sofrotun', ' Hj. SOFROTUN, S.Pd.I ', '19610310 198603 2 012', 'PA', 0, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(9, 'purwito', 'b94415f8635883b7d3b75dc574a98224', 'purwito', 'EDHI PURWITO, S.Pd ', '19630518 198504 1 003', 'PJK', NULL, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(10, 'ririn', 'b84a4059d1af6c8b50bb7a28290dbd63', 'ririn', 'RIRIN WAHYU PURBANDARI, S.Pd', '000', 'BING', NULL, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(11, 'asikin', 'a7e39bbc5275c2f3bd00cdfefc3694b8', 'asikin', 'ARIF ASIKIN, A.Md ', '000', 'TIK', NULL, 0, 0, 0, 0, '', '');
INSERT INTO `guru` VALUES(12, 'kasmani', '4d928659055292266493e36f53dbd9bf', 'kasmani', 'KASMANI', '19650918 199303 1 006', 'Karyawan', NULL, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `fotoid` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(17) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`fotoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` VALUES(1, '1.jpg');
INSERT INTO `kegiatan` VALUES(2, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mid1pr`
--

CREATE TABLE `mid1pr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mid1pr`
--

INSERT INTO `mid1pr` VALUES(1, '1851', 4, 12, 'A');
INSERT INTO `mid1pr` VALUES(2, '1851', 4, 2, '12');
INSERT INTO `mid1pr` VALUES(3, '1851', 4, 4, '23');
INSERT INTO `mid1pr` VALUES(4, '1851', 4, 5, '34');
INSERT INTO `mid1pr` VALUES(5, '1851', 4, 6, '45');
INSERT INTO `mid1pr` VALUES(6, '1851', 4, 7, '56');
INSERT INTO `mid1pr` VALUES(7, '1851', 4, 9, '67');
INSERT INTO `mid1pr` VALUES(8, '1851', 4, 3, '78');
INSERT INTO `mid1pr` VALUES(9, '1851', 4, 11, 'C');
INSERT INTO `mid1pr` VALUES(10, '1851', 4, 1, '90');
INSERT INTO `mid1pr` VALUES(11, '1851', 4, 8, '33');
INSERT INTO `mid1pr` VALUES(12, '1851', 4, 10, '77');

-- --------------------------------------------------------

--
-- Table structure for table `mid1tugas`
--

CREATE TABLE `mid1tugas` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mid1tugas`
--

INSERT INTO `mid1tugas` VALUES(1, '1831', 6, 1, '79');

-- --------------------------------------------------------

--
-- Table structure for table `mid1ujian`
--

CREATE TABLE `mid1ujian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mid1ujian`
--

INSERT INTO `mid1ujian` VALUES(1, '1830', 6, 6, '89');

-- --------------------------------------------------------

--
-- Table structure for table `mid2pr`
--

CREATE TABLE `mid2pr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mid2pr`
--


-- --------------------------------------------------------

--
-- Table structure for table `mid2tugas`
--

CREATE TABLE `mid2tugas` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mid2tugas`
--


-- --------------------------------------------------------

--
-- Table structure for table `mid2ujian`
--

CREATE TABLE `mid2ujian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mid2ujian`
--


-- --------------------------------------------------------

--
-- Table structure for table `sem1pr`
--

CREATE TABLE `sem1pr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sem1pr`
--


-- --------------------------------------------------------

--
-- Table structure for table `sem1tugas`
--

CREATE TABLE `sem1tugas` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sem1tugas`
--


-- --------------------------------------------------------

--
-- Table structure for table `sem1ujian`
--

CREATE TABLE `sem1ujian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sem1ujian`
--


-- --------------------------------------------------------

--
-- Table structure for table `sem2pr`
--

CREATE TABLE `sem2pr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sem2pr`
--


-- --------------------------------------------------------

--
-- Table structure for table `sem2tugas`
--

CREATE TABLE `sem2tugas` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sem2tugas`
--


-- --------------------------------------------------------

--
-- Table structure for table `sem2ujian`
--

CREATE TABLE `sem2ujian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sem2ujian`
--


-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kerja_ayah` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kerja_ibu` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=111 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` VALUES(1, '1818', '9994190946', 'Evi Nurjanah', 'P', ' Magetan ', '1999-04-30', '', 'Ds. Bogem', '', 'Slamet Riyadi', '', '', '', '6');
INSERT INTO `siswa` VALUES(2, '1823', '9984099743', 'Laila Nur Dyah Syafa''atur Rohmah', 'P', ' Jombang ', '1998-10-30', '', 'Ds. Bogem', '', 'Mujiono', '', '', '', '6');
INSERT INTO `siswa` VALUES(3, '1830', '0003038901', 'Anggie Nur Andhini', 'P', ' Magetan ', '2000-01-13', '', 'Ds. Bogem', '', 'Larto', '', '', '', '6');
INSERT INTO `siswa` VALUES(4, '1831', '9994190943', 'Annisak Khoiru Nurjannah', 'P', ' Magetan ', '1999-03-14', '', 'Ds. Bogem', '', 'Parno', '', '', '', '6');
INSERT INTO `siswa` VALUES(5, '1832', '0008838978', 'Candra Megayanti', 'P', 'Magetan', '2000-01-14', '', 'Ds. Bogem', '', 'Karmono', '', '', '', '6');
INSERT INTO `siswa` VALUES(6, '1834', '9990925015', 'Dyah Patmasari', 'P', 'Magetan', '1999-09-27', '', 'Ds. Bogem', '', 'Simin', '', '', '', '6');
INSERT INTO `siswa` VALUES(7, '1835', '9990925016', 'Ervan Yudianto', 'L', 'Magetan', '1999-11-28', '', 'Ds. Bogem', '', 'Basuki', '', '', '', '6');
INSERT INTO `siswa` VALUES(8, '1840', '9994190950', 'Herdianti Kartika Pratiwi', 'P', 'Lampung Tengah', '1999-09-01', '', 'Ds. Bogem', '', 'Heru Pramono', '', '', '', '6');
INSERT INTO `siswa` VALUES(9, '1841', '9994190951', 'Isfandu Prananda', 'L', 'Magetan', '1999-11-12', '', 'Ds. Bogem', '', 'Isnur Pranoto', '', '', '', '6');
INSERT INTO `siswa` VALUES(10, '1842', '9994190952', 'Miftahussurur Riyandi', 'L', 'Magetan', '1999-10-15', '', 'Ds. Bogem', '', 'Subandi', '', '', '', '6');
INSERT INTO `siswa` VALUES(11, '1843', '0003038905', 'Nikita Ratna Fitri Ayu Fadilla', 'P', 'Magetan', '2000-01-09', '', 'Ds. Bogem', '', 'Parman', '', '', '', '6');
INSERT INTO `siswa` VALUES(12, '1844', '0000685276', 'Nurul Nurvaizah', 'P', 'Magetan', '2000-01-24', '', 'Kel. Sampung', '', 'Siswanto', '', '', '', '6');
INSERT INTO `siswa` VALUES(13, '1845', '9994190953', 'Rafidhia Mahardika', 'L', 'Magetan', '1999-06-26', '', 'Ds. Bogem', '', 'Aris Subejo', '', '', '', '6');
INSERT INTO `siswa` VALUES(14, '1846', '9994190954', 'Reni Wibowo', 'P', 'Magetan', '1999-09-05', '', 'Kel. Sampung', '', 'Sumiran', '', '', '', '6');
INSERT INTO `siswa` VALUES(15, '1847', '9994190955', 'Refina Sastya Qomariyuti', 'P', 'Magetan', '1999-08-21', '', 'Ds. Bogem', '', 'Setyo Winarno', '', '', '', '6');
INSERT INTO `siswa` VALUES(16, '1848', '0003038907', 'Rikha Listianti', 'P', 'Magetan', '2000-03-31', '', 'Ds. Bogem', '', 'Parlan', '', '', '', '6');
INSERT INTO `siswa` VALUES(17, '1849', '9994190956', 'Susilo Watiningrum Hairiyah', 'P', 'Magetan', '1999-09-05', '', 'Ds. Bogem', '', 'Jumiran', '', '', '', '6');
INSERT INTO `siswa` VALUES(18, '1890', '0003523875', 'Emiliano Nugroho', 'L', 'Tangerang', '2000-11-23', '', 'Ds. Karangrejo', '', 'Sugino', '', '', '', '6');
INSERT INTO `siswa` VALUES(19, '1935', '9990960728', 'Risyan Abdilah', 'L', 'Rejang Lebong', '1999-06-04', '', 'Ds. Bogem', 'Mutasi dari SDN Wates 1, Panekan', ' Abad Salim ', '', '', '', '6');
INSERT INTO `siswa` VALUES(20, '1962', '9994190949', 'Fretty Silvya Eka Seftyanti', 'P', 'Magetan', '1999-09-14', '', 'Ds. Bogem', 'Mutasi dari Sidoarjo', ' Rachmad Basuki ', '', '', '', '6');
INSERT INTO `siswa` VALUES(21, '1836', '9994190948', 'Fitri Rahayuningsih', 'P', 'Bogor', '1999-12-28', '', 'Kel. Sampung', '', 'Triyanto', '', '', '', '5');
INSERT INTO `siswa` VALUES(22, '1837', '0003038903', 'Fitri Susanti', 'P', 'Magetan', '2000-01-12', '', 'Kel. Sampung', '', 'Kariyanto', '', '', '', '5');
INSERT INTO `siswa` VALUES(23, '1839', '0003038904', 'Giri Susilo', 'L', 'Magetan', '2000-04-24', '', 'Ds. Bogem', '', 'Darmo Wani', '', '', '', '5');
INSERT INTO `siswa` VALUES(24, '1852', '0008838984', 'Cacuk Saniar', 'L', 'Magetan', '2000-08-25', '', 'Ds. Bogem', '', 'Sunarto', '', '', '', '5');
INSERT INTO `siswa` VALUES(25, '1853', '0008838989', 'Endi Bambang Listiawan', 'L', 'Magetan', '2000-10-04', '', 'Ds. Bogem', '', 'Suwarno', '', '', '', '5');
INSERT INTO `siswa` VALUES(26, '1854', '0008838980', 'Eva Dwi Pratiwi', 'P', 'Magetan', '2000-05-23', '', 'Ds. Bogem', '', 'Misran', '', '', '', '5');
INSERT INTO `siswa` VALUES(27, '1855', '0008838987', 'Fatimah Rachmawati', 'P', 'Magetan', '2000-09-29', '', 'Ds. Bogem', '', 'Drs. Dipoyono', '', '', '', '5');
INSERT INTO `siswa` VALUES(28, '1856', '0008838983', 'Fitya Achfiana Saripah', 'P', 'Jember', '2000-08-24', '', 'Kel. Sampung', '', 'Sumardik', '', '', '', '5');
INSERT INTO `siswa` VALUES(29, '1857', '0013792936', 'Iin Suprihatin', 'P', 'Magetan', '2001-03-21', '', 'Ds. Bogem', '', 'Marjuni', '', '', '', '5');
INSERT INTO `siswa` VALUES(30, '1859', '0013792934', 'Muhammad Fiky Nugroho', 'L', 'Magetan', '2001-02-12', '', 'Ds. Bogem', '', 'Mukadji', '', '', '', '5');
INSERT INTO `siswa` VALUES(31, '1861', '0008838985', 'Putri Yana Dian Wandan Sari', 'P', 'Magetan', '2000-09-10', '', 'Ds. Bogem', '', 'Suwahdi', '', '', '', '5');
INSERT INTO `siswa` VALUES(32, '1862', '0008838988', 'Ridho Aji Wibowo', 'L', 'Magetan', '2000-09-19', '', 'Ds. Bogem', '', 'Latif Supriyono', '', '', '', '5');
INSERT INTO `siswa` VALUES(33, '1903', '0011485882', 'Afian Taufiqurrohman', 'L', 'Magetan', '2001-06-08', '', 'Kel. Sampung', '', 'Ichwan Harianto', '', '', '', '5');
INSERT INTO `siswa` VALUES(34, '1932', '0011485881', 'Kiki Mardiansyah', 'L', 'Magetan', '2001-03-21', '', 'Ds. Bogem', 'Mutasi dari Jakarta', 'Sunardi', '', '', '', '5');
INSERT INTO `siswa` VALUES(35, '1933', '0008833472', 'Ariyan Saputra Wibawa', 'L', 'Magetan', '2000-05-30', '', ' Kel. Sampung ', 'Mutasi dari Rejosari', 'Suyikno', '', '', '', '5');
INSERT INTO `siswa` VALUES(36, '1937', '0014399988', 'Hatori Ardiansyah', 'L', 'Tangerang', '2001-05-03', '', 'Ds. Bogem', 'Mutasi dari Tangerang', 'Budi Prasetio ', '', '', '', '5');
INSERT INTO `siswa` VALUES(37, '1938', '', 'Nur Anissa Fatikah', 'P', 'Tarakan', '2001-04-06', '', 'Ds. Bogem', 'Mutasi dari Bunyu', 'Suwito', '', '', '', '5');
INSERT INTO `siswa` VALUES(38, '1960', '0014774936', 'Tari Setyaningrum', 'P', 'Jakarta', '2001-05-08', '', 'Ds. Bogem', 'Mutasi dari Jakarta', ' Sumarno ', '', '', '', '5');
INSERT INTO `siswa` VALUES(39, '1961', '', 'Alief Maulana', 'L', 'Magetan', '2000-11-19', '', 'Ds. Bogem', 'Mutasi dari Yogyakarta', 'Sarno', '', '', '', '5');
INSERT INTO `siswa` VALUES(40, '1851', '0013792935', 'Bagus Tri Kurniawan', 'L', 'Magetan', '2001-03-23', '', 'Kel. Sampung', '', 'Suraji', '', '', '', '4');
INSERT INTO `siswa` VALUES(41, '1852', '0008838982', 'Rudi Wijayanto', 'L', 'Magetan', '2000-07-15', '', 'Ds. Bogem', '', 'Sartono', '', '', '', '4');
INSERT INTO `siswa` VALUES(42, '1872', '0022636270', 'Akbar Pangestu', 'L', 'Tangerang', '2002-05-16', '', 'Ds. Bogem', '', ' Tjatur Djuhadi ', '', '', '', '4');
INSERT INTO `siswa` VALUES(43, '1873', '0016392330', 'Awang Darmawan', 'L', 'Magetan', '2001-07-23', '', 'Kel. Sampung', '', ' Sumadi ', '', '', '', '4');
INSERT INTO `siswa` VALUES(44, '1874', '0016392324', 'Beti Lestariningsih', 'P', 'Magetan', '2001-04-21', '', 'Ds. Bogem', '', ' Koniran ', '', '', '', '4');
INSERT INTO `siswa` VALUES(45, '1877', '0016392325', 'Hari Fauzan Lutfi', 'L', 'Magetan', '2001-10-05', '', 'Ds. Bogem', '', ' Slamet Riyadi ', '', '', '', '4');
INSERT INTO `siswa` VALUES(46, '1878', '0016392329', 'Ida Dwiana', 'P', 'Magetan', '2001-06-24', '', 'Ds. Bogem', '', ' Suyono ', '', '', '', '4');
INSERT INTO `siswa` VALUES(47, '1879', '0016392327', 'Muhammad Setyo Fajar Rianto', 'L', 'Magetan', '2001-06-22', '', 'Ds. Bogem', '', ' Parno ', '', '', '', '4');
INSERT INTO `siswa` VALUES(48, '1880', '0022636272', 'Nadhif Firmansyah', 'L', 'Magetan', '2002-07-26', '', 'Ds. Bogem', '', ' Eko Suwarno ', '', '', '', '4');
INSERT INTO `siswa` VALUES(49, '1881', '0022636268', 'Nuari Sinta Defi', 'P', 'Magetan', '2002-01-20', '', 'Ds. Bogem', '', ' Sulamto ', '', '', '', '4');
INSERT INTO `siswa` VALUES(50, '1882', '0016392328', 'Rani Diah Cahyawati', 'P', 'Magetan', '2001-06-23', '', 'Ds. Bogem', '', ' Diding Rahmat ', '', '', '', '4');
INSERT INTO `siswa` VALUES(51, '1883', '0016392326', 'Renata Maharani Putri', 'P', 'Magetan', '2001-05-24', '', 'Ds. Bogem', '', 'Budi Utomo ', '', '', '', '4');
INSERT INTO `siswa` VALUES(52, '1884', '0016392323', 'Rizky Baktiar Apriliano', 'L', 'Magetan', '2001-04-15', '', 'Ds. Bogem', '', ' Suratno ', '', '', '', '4');
INSERT INTO `siswa` VALUES(53, '1885', '0022636273', 'Satriya Hakim', 'L', 'Magetan', '2002-01-08', '', 'Kel. Sampung', '', ' Marwat ', '', '', '', '4');
INSERT INTO `siswa` VALUES(54, '1886', '0016392325', 'Tobing Gumelar', 'L', 'Magetan', '2000-12-25', '', 'Ds. Bogem', '', ' Yatim ', '', '', '', '4');
INSERT INTO `siswa` VALUES(55, '1904', '0020104899', 'Salma Anisa Muthiah', 'P', 'Magetan', '2002-03-19', '', 'Kel. Sampung', '', ' Agus Triyadi ', '', '', '', '4');
INSERT INTO `siswa` VALUES(56, '1907', '0011485883', 'Muhammad Khaqqu Mukhlisin', 'L', 'Magetan', '2001-10-07', '', 'Ds. Karangrejo', 'Mutasi dari Depok', ' Lagiono ', '', '', '', '4');
INSERT INTO `siswa` VALUES(57, '1911', '0000078364', 'Syifak Ainul Fikri', 'L', 'Magetan', '2000-05-29', '', 'Kel. Sampung', 'Tdk Naik', 'Sukirman ', '', '', '', '3');
INSERT INTO `siswa` VALUES(58, '1914', '0020104900', 'Hambali', 'L', 'Sidoarjo', '2002-07-06', '', 'Ds. Bogem', 'Tdk Naik', ' Budi Utomo ', '', '', '', '3');
INSERT INTO `siswa` VALUES(59, '1875', '0022636271', 'Ficto Hadi Pratama', 'L', 'Magetan', '2002-05-19', '', 'Ds. Ngadirejo', '', ' Sumiran ', '', '', '', '3');
INSERT INTO `siswa` VALUES(60, '1891', '0033859435', 'Annas Apritasari', 'P', 'Magetan', '2003-04-29', '', 'Kel. Sampung', '', 'Marsono ', '', '', '', '3');
INSERT INTO `siswa` VALUES(61, '1892', '0033859433', 'Dimas Lutfi Arivano', 'L', 'Magetan', '2003-03-13', '', 'Ds. Bogem', '', ' Suwanto ', '', '', '', '3');
INSERT INTO `siswa` VALUES(62, '1893', '0033859437', 'Muhammad Rizky Romadhon Ningrat', 'L', 'Bogor', '2003-11-23', '', 'Kel. Sampung', '', ' Triyanto ', '', '', '', '3');
INSERT INTO `siswa` VALUES(63, '1895', '0033859432', 'Nur Farida Riyandini', 'P', 'Magetan', '2003-04-03', '', 'Ds. Bogem', '', ' Subandi ', '', '', '', '3');
INSERT INTO `siswa` VALUES(64, '1896', '0033859434', 'Putri Wilys Sintyasari', 'P', 'Magetan', '2003-03-28', '', 'Ds. Bogem', '', ' Puji Arifin ', '', '', '', '3');
INSERT INTO `siswa` VALUES(65, '1897', '0033859436', 'Raviel Akbar Vernanda', 'L', 'Magetan', '2003-03-11', '', 'Ds. Bogem', '', 'Rudito Kukuh Basuki ', '', '', '', '3');
INSERT INTO `siswa` VALUES(66, '1898', '0027258561', 'Septy Puspitasari', 'P', 'Magetan', '2002-09-14', '', 'Ds. Bogem', '', ' Suji ', '', '', '', '3');
INSERT INTO `siswa` VALUES(67, '1899', '0033859430', ' Sintia Rindi Antika ', 'P', 'Magetan', '2003-01-18', '', 'Ds. Bogem', '', 'Heru Ikrar Hadi Wijaya ', '', '', '', '3');
INSERT INTO `siswa` VALUES(68, '1901', '0027258560', 'Yanuar Sigit Purnomo', 'L', 'Magetan', '2002-01-13', '', 'Ds. Bogem', '', ' Didi Purnomowandi ', '', '', '', '3');
INSERT INTO `siswa` VALUES(69, '1934', '', 'Ardika Fikri Nugraha', 'L', 'Tarakan', '2003-06-02', '', 'Ds. Bogem', 'Mutasi dari Bunyu', 'Suwito ', '', '', '', '3');
INSERT INTO `siswa` VALUES(70, '1894', '0033859431', 'Nanda Ferdiana Indarno', 'L', 'Magetan', '2003-02-25', '', 'Kel. Sampung', '', ' Suyadi ', '', '', '', '2');
INSERT INTO `siswa` VALUES(71, '1900', '0010386209', 'Topik Hidayat', 'L', 'Magetan', '2001-10-19', '', 'Ds. Bogem', '', ' Samadi ', '', '', '', '2');
INSERT INTO `siswa` VALUES(72, '1908', '0037196851', 'Risky Septian', 'L', 'Magetan', '2003-09-17', '', 'Ds. Bogem', '', 'Sunarto ', '', '', '', '2');
INSERT INTO `siswa` VALUES(73, '1915', '0043530368', 'Andri Muhammad Firdaus', 'L', 'Magetan', '2004-02-03', '', 'Ds. Bogem', '', 'Slamet Riyadi ', '', '', '', '2');
INSERT INTO `siswa` VALUES(74, '1917', '0037196842', 'Berlyan Meyranda Putri', 'P', 'Magetan', '2003-05-25', '', 'Ds. Bogem', '', 'Sukidi ', '', '', '', '2');
INSERT INTO `siswa` VALUES(75, '1919', '0043530367', 'Elang Maulana Robinuari Putra', 'L', 'Magetan', '2004-01-29', '', 'Ds. Bogem', '', 'Amanu Fatoni ', '', '', '', '2');
INSERT INTO `siswa` VALUES(76, '1920', '0037196849', 'Fitri Wulandari', 'P', 'Magetan', '2003-09-02', '', 'Ds. Bogem', '', 'Gimin ', '', '', '', '2');
INSERT INTO `siswa` VALUES(77, '1921', '0037196845', 'Halid Royana', 'L', 'Magetan', '2003-08-15', '', 'Ds. Bogem', '', 'Lasimin ', '', '', '', '2');
INSERT INTO `siswa` VALUES(78, '1922', '0020104901', 'Heri Prasetyo', 'L', 'Magetan', '2002-12-23', '', 'Ds. Bogem', '', 'Agus Dwiyanto ', '', '', '', '2');
INSERT INTO `siswa` VALUES(79, '1923', '0043530370', 'Ilham Maqruf Budiarto', 'L', 'Magetan', '2004-05-04', '', 'Ds. Bogem', '', 'Waimun ', '', '', '', '2');
INSERT INTO `siswa` VALUES(80, '1924', '0043530369', 'Lissa''addah Febrianti', 'P', 'Magetan', '2004-02-18', '', 'Ds. Bogem', '', 'Misdi ', '', '', '', '2');
INSERT INTO `siswa` VALUES(81, '1925', '0037196841', 'Rakhul Adi Rafdila', 'L', 'Bantul', '2003-01-17', '', 'Ds. Bogem', '', ' (Alm.) Panar', '', 'Janingsih ', '', '2');
INSERT INTO `siswa` VALUES(82, '1927', '0037196846', 'Rikhi Ristianto', 'L', 'Magetan', '2003-08-15', '', 'Ds. Bogem', '', 'Parlan ', '', '', '', '2');
INSERT INTO `siswa` VALUES(83, '1929', '0037196843', 'Tria Putri Lestari', 'P', 'Magetan', '2003-05-26', '', 'Ds. Bogem', '', 'Parno  ', '', '', '', '2');
INSERT INTO `siswa` VALUES(84, '1930', '0037196848', 'Umi Rahmawati', 'P', 'Magetan', '2003-08-26', '', 'Ds. Bogem', '', 'Sudjono ', '', '', '', '2');
INSERT INTO `siswa` VALUES(85, '1931', '0037196852', 'Yugi Ardi', 'L', 'Magetan', '2003-10-30', '', 'Kel. Sampung', '', 'Sadimin ', '', '', '', '2');
INSERT INTO `siswa` VALUES(86, '1939', '0041498737', 'Vicky Miftakhul Ulya', 'L', 'Bengkulu', '2004-03-28', '', 'Ds. Bogem', 'Mutasi dari SDN Wates 1, Panekan', 'Abad Salim ', '', '', '', '2');
INSERT INTO `siswa` VALUES(87, '1926', '0037196853', 'Rendy Tri Andika', 'L', 'Magetan', '2003-12-14', '', 'Ds. Bogem', '', 'Sarni ', '', '', '', '1');
INSERT INTO `siswa` VALUES(88, '1940', '', 'Aditia Wahyu Kusuma', 'L', 'Magetan', '2005-01-11', '', 'Ds. Bogem', 'Mutasi dari Cirebon', 'Heru Pramono ', '', '', '', '1');
INSERT INTO `siswa` VALUES(89, '1941', '', 'Andika Setiawan', 'L', 'Jakarta', '2005-01-26', '', 'Ds. Bogem', '', 'Sumarno ', '', '', '', '1');
INSERT INTO `siswa` VALUES(90, '1942', '', 'Atha Alfin Putra Suryanto', 'L', 'Magetan', '2004-07-14', '', 'Ds. Bogem', '', 'Suryanto ', '', '', '', '1');
INSERT INTO `siswa` VALUES(91, '1943', '', 'Chelisya Claudi Desemberia Lili Priyadi', 'P', 'Magetan', '2004-12-12', '', 'Ds. Jambangan', '', 'Supriyadi ', '', '', '', '1');
INSERT INTO `siswa` VALUES(92, '1944', '', 'Dandi Setiawan', 'L', 'Magetan', '2004-08-27', '', 'Ds. Bogem', '', 'Supriyadi ', '', '', '', '1');
INSERT INTO `siswa` VALUES(93, '1945', '', 'Eriza Trianita', 'P', 'Magetan', '2005-01-30', '', 'Ds. Bogem', '', 'Samsul ', '', '', '', '1');
INSERT INTO `siswa` VALUES(94, '1946', '', 'Inggrit Wening Pratitis', 'P', 'Magetan', '2004-07-16', '', 'Ds. Bogem', '', 'Mariman ', '', '', '', '1');
INSERT INTO `siswa` VALUES(95, '1947', '', 'Leni Puspita Sari', 'P', 'Magetan', '2004-11-08', '', 'Ds. Bogem', '', 'Suwardi ', '', '', '', '1');
INSERT INTO `siswa` VALUES(96, '1948', '', 'Niken Putri Istiqomah', 'P', 'Magetan', '2005-03-16', '', 'Ds. Jambangan', '', 'Purwanto ', '', '', '', '1');
INSERT INTO `siswa` VALUES(97, '1949', '', 'Rancy Marcelena Oktaviani', 'P', 'Magetan', '2005-03-26', '', 'Ds. Bogem', '', 'Hadi Purnomo ', '', '', '', '1');
INSERT INTO `siswa` VALUES(98, '1950', '', 'Ratih Widiasari', 'P', 'Magetan', '2004-08-08', '', 'Ds. Bogem', '', ' Suwarno ', '', '', '', '1');
INSERT INTO `siswa` VALUES(99, '1951', '', 'Rendy Ardhana Putra Arianto', 'L', 'Magetan', '2005-04-12', '', 'Ds. Bogem', '', 'Ris Rianto ', '', '', '', '1');
INSERT INTO `siswa` VALUES(100, '1952', '', 'Romadan Nofianto', 'L', 'Magetan', '2004-11-18', '', 'Ds. Bogem', '', 'Parlan', '', '', '', '1');
INSERT INTO `siswa` VALUES(101, '1953', '', 'Sendy Putra Aditya', 'L', 'Magetan', '2004-01-19', '', 'Ds. Bogem', '', 'Sugeng ', '', '', '', '1');
INSERT INTO `siswa` VALUES(102, '1954', '', 'Sokip Zainudin', 'L', 'Magetan', '2004-09-06', '', 'Ds. Bogem', '', 'Bashori ', '', '', '', '1');
INSERT INTO `siswa` VALUES(103, '1955', '', 'Tri Ditho Wahyu Kusuma', 'L', 'Magetan', '2004-07-16', '', 'Ds. Bogem', '', 'Tukiran ', '', '', '', '1');
INSERT INTO `siswa` VALUES(104, '1956', '', 'Yuardha Alif Nur Rohman', 'L', 'Magetan', NULL, '', 'Ds. Bogem', '', 'Sumiran ', '', '', '', '1');
INSERT INTO `siswa` VALUES(105, '1957', '', 'Yudistira Permana Herdi Nugraha', 'L', 'Magetan', '2004-09-26', '', 'Ds. Karangrejo', '', 'Heru Purwanto ', '', '', '', '1');
INSERT INTO `siswa` VALUES(106, '1958', '', 'Zainatus Sahidah', 'P', 'Magetan', '2004-08-23', '', 'Kel. Sampung', '', 'Siswanto ', '', '', '', '1');
INSERT INTO `siswa` VALUES(107, '1959', '', 'Zulfa Trian Nasrullah', 'L', 'Madiun', '2004-04-11', '', 'Ds. Bogem', '', 'Sukamto ', '', '', '', '1');
INSERT INTO `siswa` VALUES(108, '1963', '', 'Zainal Abidin', 'L', 'Magetan', '1990-09-02', 'Islam', 'Banjeng RT 5/RW 1', '', 'Alm. M. Nur Affandi', 'Wiraswasta', 'Katini', 'Guru', '6');
INSERT INTO `siswa` VALUES(109, '1964', '', 'Antonius', 'L', 'Banyuwangi', '1991-01-06', 'Kristen', 'Karangrejo', '', 'Kaftono', 'Petani', 'Elizabeth', 'Penjahit', '5');
INSERT INTO `siswa` VALUES(110, '1965', '', 'Amanda', 'P', 'Medan', '1993-01-18', 'Islam', 'Desa Bogem RT 7/RW 1', '', 'Robert', 'Nelayan', 'Ningsih', 'Buruh', '2');

-- --------------------------------------------------------

--
-- Table structure for table `submatpel`
--

CREATE TABLE `submatpel` (
  `subid` int(11) NOT NULL,
  `subname` varchar(5) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `submatpel`
--

INSERT INTO `submatpel` VALUES(1, 'PA');
INSERT INTO `submatpel` VALUES(2, 'PKN');
INSERT INTO `submatpel` VALUES(3, 'BIN');
INSERT INTO `submatpel` VALUES(4, 'MAT');
INSERT INTO `submatpel` VALUES(5, 'IPA');
INSERT INTO `submatpel` VALUES(6, 'IPS');
INSERT INTO `submatpel` VALUES(7, 'SBK');
INSERT INTO `submatpel` VALUES(8, 'PJK');
INSERT INTO `submatpel` VALUES(9, 'BJW');
INSERT INTO `submatpel` VALUES(10, 'BING');
INSERT INTO `submatpel` VALUES(11, 'PRAM');
INSERT INTO `submatpel` VALUES(12, 'TIK');
