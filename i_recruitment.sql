-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 06:22 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i_recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE IF NOT EXISTS `bagian` (
  `id_bagian` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `psikotest` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama`, `deskripsi`, `psikotest`, `status`) VALUES
(1, 'Mechanical Engineering', 'Mechanical Engineering Jobs', '', 'Aktif'),
(2, 'Networking', 'Networking Jobs', '', 'Aktif'),
(3, 'Online Marketing', 'Online Marketing Jobs', '', 'Aktif'),
(4, 'Animation', 'Animation Jobs', '', 'Aktif'),
(5, 'Design Engineer', 'Design Engineer Jobs', '', 'Aktif'),
(6, 'Analytics', 'Analytics Jobs', '', 'Aktif'),
(7, 'UI/UX', 'UI/UX Jobs', '', 'Aktif'),
(8, 'Marketing', 'Marketing Jobs', '', 'Aktif'),
(9, 'Banking', 'Banking Jobs', '', 'Aktif'),
(10, 'MBA', 'MBA Jobs', '', 'Aktif'),
(11, 'Teaching', 'Teaching Jobs', '', 'Aktif'),
(12, 'Accounting', 'Accounting Jobs', '', 'Aktif'),
(13, 'Retail', 'Retail Jobs', '', 'Aktif'),
(14, 'Merchandiser', 'Merchandiser Jobs', '', 'Aktif'),
(15, 'Architecture', 'Architecture Jobs', '', 'Aktif'),
(16, 'Banking Insurance', 'Banking Insurance Jobs', '', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `crips`
--

CREATE TABLE IF NOT EXISTS `crips` (
  `id_crips` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crips`
--

INSERT INTO `crips` (`id_crips`, `kriteria_id`, `keterangan`, `nilai`) VALUES
(2, 1, 'Sangat Buruk', 5),
(3, 1, 'Buruk', 25),
(4, 1, 'Cukup', 50),
(5, 1, 'Baik', 75),
(6, 1, 'Sangat Baik', 100),
(7, 2, 'Sangat Tidak Mampu', 5),
(8, 2, 'Tidak Mampu', 25),
(9, 2, 'Cukup', 50),
(10, 2, 'Mampu', 75),
(11, 2, 'Sangat Mampu', 100),
(12, 3, 'Sangat Tidak Mampu', 5),
(13, 3, 'Tidak Mampu', 25),
(14, 3, 'Cukup', 50),
(15, 3, 'Mampu', 75),
(16, 3, 'Sangat Mampu', 100),
(17, 4, 'Sangat Kurang', 5),
(18, 4, 'Kurang', 25),
(19, 4, 'Cukup', 50),
(20, 4, 'Baik', 75),
(21, 4, 'Sangat Baik', 100),
(22, 5, 'Sangat Mundur', 5),
(23, 5, 'Mundur', 25),
(24, 5, 'Statis', 50),
(25, 5, 'Maju', 75),
(26, 5, 'Sangat Maju', 100),
(27, 6, 'Sangat Kurang', 5),
(28, 6, 'Kurang', 25),
(29, 6, 'Cukup', 50),
(30, 6, 'Baik', 75),
(31, 6, 'Sangat Baik', 100),
(32, 7, 'Blacklist', 25),
(33, 7, 'Netral', 50),
(34, 7, 'Whitelist', 100);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `id_divisi` int(11) NOT NULL,
  `kode_divisi` varchar(50) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `kode_divisi`, `nama_divisi`) VALUES
(1, 'D000001', 'Olahraga'),
(2, 'D000002', 'Administrasi Umum'),
(3, 'D000003', 'Keuangan'),
(4, 'D000004', 'Operasional'),
(5, 'D000005', 'Produksi');

-- --------------------------------------------------------

--
-- Table structure for table `file_lamaran`
--

CREATE TABLE IF NOT EXISTS `file_lamaran` (
  `id` int(25) NOT NULL,
  `file_lamaran` varchar(250) NOT NULL,
  `id_people` int(25) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `status_lamaran` varchar(25) NOT NULL,
  `tanggal_verifikasi` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `verifikasi_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  `psikotest` varchar(255) NOT NULL,
  `test_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama`, `deskripsi`, `status`) VALUES
(1, 'Kepala Bagian', 'Kepala Bagian', 'Aktif'),
(2, 'Koordinator', 'Koordinator Proyek', 'Aktif'),
(3, 'Staff ', 'Staff Khusus Bidang', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `province_id`, `name`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE'),
('1102', '11', 'KABUPATEN ACEH SINGKIL'),
('1103', '11', 'KABUPATEN ACEH SELATAN'),
('1104', '11', 'KABUPATEN ACEH TENGGARA'),
('1105', '11', 'KABUPATEN ACEH TIMUR'),
('1106', '11', 'KABUPATEN ACEH TENGAH'),
('1107', '11', 'KABUPATEN ACEH BARAT'),
('1108', '11', 'KABUPATEN ACEH BESAR'),
('1109', '11', 'KABUPATEN PIDIE'),
('1110', '11', 'KABUPATEN BIREUEN'),
('1111', '11', 'KABUPATEN ACEH UTARA'),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA'),
('1113', '11', 'KABUPATEN GAYO LUES'),
('1114', '11', 'KABUPATEN ACEH TAMIANG'),
('1115', '11', 'KABUPATEN NAGAN RAYA'),
('1116', '11', 'KABUPATEN ACEH JAYA'),
('1117', '11', 'KABUPATEN BENER MERIAH'),
('1118', '11', 'KABUPATEN PIDIE JAYA'),
('1171', '11', 'KOTA BANDA ACEH'),
('1172', '11', 'KOTA SABANG'),
('1173', '11', 'KOTA LANGSA'),
('1174', '11', 'KOTA LHOKSEUMAWE'),
('1175', '11', 'KOTA SUBULUSSALAM'),
('1201', '12', 'KABUPATEN NIAS'),
('1202', '12', 'KABUPATEN MANDAILING NATAL'),
('1203', '12', 'KABUPATEN TAPANULI SELATAN'),
('1204', '12', 'KABUPATEN TAPANULI TENGAH'),
('1205', '12', 'KABUPATEN TAPANULI UTARA'),
('1206', '12', 'KABUPATEN TOBA SAMOSIR'),
('1207', '12', 'KABUPATEN LABUHAN BATU'),
('1208', '12', 'KABUPATEN ASAHAN'),
('1209', '12', 'KABUPATEN SIMALUNGUN'),
('1210', '12', 'KABUPATEN DAIRI'),
('1211', '12', 'KABUPATEN KARO'),
('1212', '12', 'KABUPATEN DELI SERDANG'),
('1213', '12', 'KABUPATEN LANGKAT'),
('1214', '12', 'KABUPATEN NIAS SELATAN'),
('1215', '12', 'KABUPATEN HUMBANG HASUNDUTAN'),
('1216', '12', 'KABUPATEN PAKPAK BHARAT'),
('1217', '12', 'KABUPATEN SAMOSIR'),
('1218', '12', 'KABUPATEN SERDANG BEDAGAI'),
('1219', '12', 'KABUPATEN BATU BARA'),
('1220', '12', 'KABUPATEN PADANG LAWAS UTARA'),
('1221', '12', 'KABUPATEN PADANG LAWAS'),
('1222', '12', 'KABUPATEN LABUHAN BATU SELATAN'),
('1223', '12', 'KABUPATEN LABUHAN BATU UTARA'),
('1224', '12', 'KABUPATEN NIAS UTARA'),
('1225', '12', 'KABUPATEN NIAS BARAT'),
('1271', '12', 'KOTA SIBOLGA'),
('1272', '12', 'KOTA TANJUNG BALAI'),
('1273', '12', 'KOTA PEMATANG SIANTAR'),
('1274', '12', 'KOTA TEBING TINGGI'),
('1275', '12', 'KOTA MEDAN'),
('1276', '12', 'KOTA BINJAI'),
('1277', '12', 'KOTA PADANGSIDIMPUAN'),
('1278', '12', 'KOTA GUNUNGSITOLI'),
('1301', '13', 'KABUPATEN KEPULAUAN MENTAWAI'),
('1302', '13', 'KABUPATEN PESISIR SELATAN'),
('1303', '13', 'KABUPATEN SOLOK'),
('1304', '13', 'KABUPATEN SIJUNJUNG'),
('1305', '13', 'KABUPATEN TANAH DATAR'),
('1306', '13', 'KABUPATEN PADANG PARIAMAN'),
('1307', '13', 'KABUPATEN AGAM'),
('1308', '13', 'KABUPATEN LIMA PULUH KOTA'),
('1309', '13', 'KABUPATEN PASAMAN'),
('1310', '13', 'KABUPATEN SOLOK SELATAN'),
('1311', '13', 'KABUPATEN DHARMASRAYA'),
('1312', '13', 'KABUPATEN PASAMAN BARAT'),
('1371', '13', 'KOTA PADANG'),
('1372', '13', 'KOTA SOLOK'),
('1373', '13', 'KOTA SAWAH LUNTO'),
('1374', '13', 'KOTA PADANG PANJANG'),
('1375', '13', 'KOTA BUKITTINGGI'),
('1376', '13', 'KOTA PAYAKUMBUH'),
('1377', '13', 'KOTA PARIAMAN'),
('1401', '14', 'KABUPATEN KUANTAN SINGINGI'),
('1402', '14', 'KABUPATEN INDRAGIRI HULU'),
('1403', '14', 'KABUPATEN INDRAGIRI HILIR'),
('1404', '14', 'KABUPATEN PELALAWAN'),
('1405', '14', 'KABUPATEN S I A K'),
('1406', '14', 'KABUPATEN KAMPAR'),
('1407', '14', 'KABUPATEN ROKAN HULU'),
('1408', '14', 'KABUPATEN BENGKALIS'),
('1409', '14', 'KABUPATEN ROKAN HILIR'),
('1410', '14', 'KABUPATEN KEPULAUAN MERANTI'),
('1471', '14', 'KOTA PEKANBARU'),
('1473', '14', 'KOTA D U M A I'),
('1501', '15', 'KABUPATEN KERINCI'),
('1502', '15', 'KABUPATEN MERANGIN'),
('1503', '15', 'KABUPATEN SAROLANGUN'),
('1504', '15', 'KABUPATEN BATANG HARI'),
('1505', '15', 'KABUPATEN MUARO JAMBI'),
('1506', '15', 'KABUPATEN TANJUNG JABUNG TIMUR'),
('1507', '15', 'KABUPATEN TANJUNG JABUNG BARAT'),
('1508', '15', 'KABUPATEN TEBO'),
('1509', '15', 'KABUPATEN BUNGO'),
('1571', '15', 'KOTA JAMBI'),
('1572', '15', 'KOTA SUNGAI PENUH'),
('1601', '16', 'KABUPATEN OGAN KOMERING ULU'),
('1602', '16', 'KABUPATEN OGAN KOMERING ILIR'),
('1603', '16', 'KABUPATEN MUARA ENIM'),
('1604', '16', 'KABUPATEN LAHAT'),
('1605', '16', 'KABUPATEN MUSI RAWAS'),
('1606', '16', 'KABUPATEN MUSI BANYUASIN'),
('1607', '16', 'KABUPATEN BANYU ASIN'),
('1608', '16', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609', '16', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610', '16', 'KABUPATEN OGAN ILIR'),
('1611', '16', 'KABUPATEN EMPAT LAWANG'),
('1612', '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613', '16', 'KABUPATEN MUSI RAWAS UTARA'),
('1671', '16', 'KOTA PALEMBANG'),
('1672', '16', 'KOTA PRABUMULIH'),
('1673', '16', 'KOTA PAGAR ALAM'),
('1674', '16', 'KOTA LUBUKLINGGAU'),
('1701', '17', 'KABUPATEN BENGKULU SELATAN'),
('1702', '17', 'KABUPATEN REJANG LEBONG'),
('1703', '17', 'KABUPATEN BENGKULU UTARA'),
('1704', '17', 'KABUPATEN KAUR'),
('1705', '17', 'KABUPATEN SELUMA'),
('1706', '17', 'KABUPATEN MUKOMUKO'),
('1707', '17', 'KABUPATEN LEBONG'),
('1708', '17', 'KABUPATEN KEPAHIANG'),
('1709', '17', 'KABUPATEN BENGKULU TENGAH'),
('1771', '17', 'KOTA BENGKULU'),
('1801', '18', 'KABUPATEN LAMPUNG BARAT'),
('1802', '18', 'KABUPATEN TANGGAMUS'),
('1803', '18', 'KABUPATEN LAMPUNG SELATAN'),
('1804', '18', 'KABUPATEN LAMPUNG TIMUR'),
('1805', '18', 'KABUPATEN LAMPUNG TENGAH'),
('1806', '18', 'KABUPATEN LAMPUNG UTARA'),
('1807', '18', 'KABUPATEN WAY KANAN'),
('1808', '18', 'KABUPATEN TULANGBAWANG'),
('1809', '18', 'KABUPATEN PESAWARAN'),
('1810', '18', 'KABUPATEN PRINGSEWU'),
('1811', '18', 'KABUPATEN MESUJI'),
('1812', '18', 'KABUPATEN TULANG BAWANG BARAT'),
('1813', '18', 'KABUPATEN PESISIR BARAT'),
('1871', '18', 'KOTA BANDAR LAMPUNG'),
('1872', '18', 'KOTA METRO'),
('1901', '19', 'KABUPATEN BANGKA'),
('1902', '19', 'KABUPATEN BELITUNG'),
('1903', '19', 'KABUPATEN BANGKA BARAT'),
('1904', '19', 'KABUPATEN BANGKA TENGAH'),
('1905', '19', 'KABUPATEN BANGKA SELATAN'),
('1906', '19', 'KABUPATEN BELITUNG TIMUR'),
('1971', '19', 'KOTA PANGKAL PINANG'),
('2101', '21', 'KABUPATEN KARIMUN'),
('2102', '21', 'KABUPATEN BINTAN'),
('2103', '21', 'KABUPATEN NATUNA'),
('2104', '21', 'KABUPATEN LINGGA'),
('2105', '21', 'KABUPATEN KEPULAUAN ANAMBAS'),
('2171', '21', 'KOTA B A T A M'),
('2172', '21', 'KOTA TANJUNG PINANG'),
('3101', '31', 'KABUPATEN KEPULAUAN SERIBU'),
('3171', '31', 'KOTA JAKARTA SELATAN'),
('3172', '31', 'KOTA JAKARTA TIMUR'),
('3173', '31', 'KOTA JAKARTA PUSAT'),
('3174', '31', 'KOTA JAKARTA BARAT'),
('3175', '31', 'KOTA JAKARTA UTARA'),
('3201', '32', 'KABUPATEN BOGOR'),
('3202', '32', 'KABUPATEN SUKABUMI'),
('3203', '32', 'KABUPATEN CIANJUR'),
('3204', '32', 'KABUPATEN BANDUNG'),
('3205', '32', 'KABUPATEN GARUT'),
('3206', '32', 'KABUPATEN TASIKMALAYA'),
('3207', '32', 'KABUPATEN CIAMIS'),
('3208', '32', 'KABUPATEN KUNINGAN'),
('3209', '32', 'KABUPATEN CIREBON'),
('3210', '32', 'KABUPATEN MAJALENGKA'),
('3211', '32', 'KABUPATEN SUMEDANG'),
('3212', '32', 'KABUPATEN INDRAMAYU'),
('3213', '32', 'KABUPATEN SUBANG'),
('3214', '32', 'KABUPATEN PURWAKARTA'),
('3215', '32', 'KABUPATEN KARAWANG'),
('3216', '32', 'KABUPATEN BEKASI'),
('3217', '32', 'KABUPATEN BANDUNG BARAT'),
('3218', '32', 'KABUPATEN PANGANDARAN'),
('3271', '32', 'KOTA BOGOR'),
('3272', '32', 'KOTA SUKABUMI'),
('3273', '32', 'KOTA BANDUNG'),
('3274', '32', 'KOTA CIREBON'),
('3275', '32', 'KOTA BEKASI'),
('3276', '32', 'KOTA DEPOK'),
('3277', '32', 'KOTA CIMAHI'),
('3278', '32', 'KOTA TASIKMALAYA'),
('3279', '32', 'KOTA BANJAR'),
('3301', '33', 'KABUPATEN CILACAP'),
('3302', '33', 'KABUPATEN BANYUMAS'),
('3303', '33', 'KABUPATEN PURBALINGGA'),
('3304', '33', 'KABUPATEN BANJARNEGARA'),
('3305', '33', 'KABUPATEN KEBUMEN'),
('3306', '33', 'KABUPATEN PURWOREJO'),
('3307', '33', 'KABUPATEN WONOSOBO'),
('3308', '33', 'KABUPATEN MAGELANG'),
('3309', '33', 'KABUPATEN BOYOLALI'),
('3310', '33', 'KABUPATEN KLATEN'),
('3311', '33', 'KABUPATEN SUKOHARJO'),
('3312', '33', 'KABUPATEN WONOGIRI'),
('3313', '33', 'KABUPATEN KARANGANYAR'),
('3314', '33', 'KABUPATEN SRAGEN'),
('3315', '33', 'KABUPATEN GROBOGAN'),
('3316', '33', 'KABUPATEN BLORA'),
('3317', '33', 'KABUPATEN REMBANG'),
('3318', '33', 'KABUPATEN PATI'),
('3319', '33', 'KABUPATEN KUDUS'),
('3320', '33', 'KABUPATEN JEPARA'),
('3321', '33', 'KABUPATEN DEMAK'),
('3322', '33', 'KABUPATEN SEMARANG'),
('3323', '33', 'KABUPATEN TEMANGGUNG'),
('3324', '33', 'KABUPATEN KENDAL'),
('3325', '33', 'KABUPATEN BATANG'),
('3326', '33', 'KABUPATEN PEKALONGAN'),
('3327', '33', 'KABUPATEN PEMALANG'),
('3328', '33', 'KABUPATEN TEGAL'),
('3329', '33', 'KABUPATEN BREBES'),
('3371', '33', 'KOTA MAGELANG'),
('3372', '33', 'KOTA SURAKARTA'),
('3373', '33', 'KOTA SALATIGA'),
('3374', '33', 'KOTA SEMARANG'),
('3375', '33', 'KOTA PEKALONGAN'),
('3376', '33', 'KOTA TEGAL'),
('3401', '34', 'KABUPATEN KULON PROGO'),
('3402', '34', 'KABUPATEN BANTUL'),
('3403', '34', 'KABUPATEN GUNUNG KIDUL'),
('3404', '34', 'KABUPATEN SLEMAN'),
('3471', '34', 'KOTA YOGYAKARTA'),
('3501', '35', 'KABUPATEN PACITAN'),
('3502', '35', 'KABUPATEN PONOROGO'),
('3503', '35', 'KABUPATEN TRENGGALEK'),
('3504', '35', 'KABUPATEN TULUNGAGUNG'),
('3505', '35', 'KABUPATEN BLITAR'),
('3506', '35', 'KABUPATEN KEDIRI'),
('3507', '35', 'KABUPATEN MALANG'),
('3508', '35', 'KABUPATEN LUMAJANG'),
('3509', '35', 'KABUPATEN JEMBER'),
('3510', '35', 'KABUPATEN BANYUWANGI'),
('3511', '35', 'KABUPATEN BONDOWOSO'),
('3512', '35', 'KABUPATEN SITUBONDO'),
('3513', '35', 'KABUPATEN PROBOLINGGO'),
('3514', '35', 'KABUPATEN PASURUAN'),
('3515', '35', 'KABUPATEN SIDOARJO'),
('3516', '35', 'KABUPATEN MOJOKERTO'),
('3517', '35', 'KABUPATEN JOMBANG'),
('3518', '35', 'KABUPATEN NGANJUK'),
('3519', '35', 'KABUPATEN MADIUN'),
('3520', '35', 'KABUPATEN MAGETAN'),
('3521', '35', 'KABUPATEN NGAWI'),
('3522', '35', 'KABUPATEN BOJONEGORO'),
('3523', '35', 'KABUPATEN TUBAN'),
('3524', '35', 'KABUPATEN LAMONGAN'),
('3525', '35', 'KABUPATEN GRESIK'),
('3526', '35', 'KABUPATEN BANGKALAN'),
('3527', '35', 'KABUPATEN SAMPANG'),
('3528', '35', 'KABUPATEN PAMEKASAN'),
('3529', '35', 'KABUPATEN SUMENEP'),
('3571', '35', 'KOTA KEDIRI'),
('3572', '35', 'KOTA BLITAR'),
('3573', '35', 'KOTA MALANG'),
('3574', '35', 'KOTA PROBOLINGGO'),
('3575', '35', 'KOTA PASURUAN'),
('3576', '35', 'KOTA MOJOKERTO'),
('3577', '35', 'KOTA MADIUN'),
('3578', '35', 'KOTA SURABAYA'),
('3579', '35', 'KOTA BATU'),
('3601', '36', 'KABUPATEN PANDEGLANG'),
('3602', '36', 'KABUPATEN LEBAK'),
('3603', '36', 'KABUPATEN TANGERANG'),
('3604', '36', 'KABUPATEN SERANG'),
('3671', '36', 'KOTA TANGERANG'),
('3672', '36', 'KOTA CILEGON'),
('3673', '36', 'KOTA SERANG'),
('3674', '36', 'KOTA TANGERANG SELATAN'),
('5101', '51', 'KABUPATEN JEMBRANA'),
('5102', '51', 'KABUPATEN TABANAN'),
('5103', '51', 'KABUPATEN BADUNG'),
('5104', '51', 'KABUPATEN GIANYAR'),
('5105', '51', 'KABUPATEN KLUNGKUNG'),
('5106', '51', 'KABUPATEN BANGLI'),
('5107', '51', 'KABUPATEN KARANG ASEM'),
('5108', '51', 'KABUPATEN BULELENG'),
('5171', '51', 'KOTA DENPASAR'),
('5201', '52', 'KABUPATEN LOMBOK BARAT'),
('5202', '52', 'KABUPATEN LOMBOK TENGAH'),
('5203', '52', 'KABUPATEN LOMBOK TIMUR'),
('5204', '52', 'KABUPATEN SUMBAWA'),
('5205', '52', 'KABUPATEN DOMPU'),
('5206', '52', 'KABUPATEN BIMA'),
('5207', '52', 'KABUPATEN SUMBAWA BARAT'),
('5208', '52', 'KABUPATEN LOMBOK UTARA'),
('5271', '52', 'KOTA MATARAM'),
('5272', '52', 'KOTA BIMA'),
('5301', '53', 'KABUPATEN SUMBA BARAT'),
('5302', '53', 'KABUPATEN SUMBA TIMUR'),
('5303', '53', 'KABUPATEN KUPANG'),
('5304', '53', 'KABUPATEN TIMOR TENGAH SELATAN'),
('5305', '53', 'KABUPATEN TIMOR TENGAH UTARA'),
('5306', '53', 'KABUPATEN BELU'),
('5307', '53', 'KABUPATEN ALOR'),
('5308', '53', 'KABUPATEN LEMBATA'),
('5309', '53', 'KABUPATEN FLORES TIMUR'),
('5310', '53', 'KABUPATEN SIKKA'),
('5311', '53', 'KABUPATEN ENDE'),
('5312', '53', 'KABUPATEN NGADA'),
('5313', '53', 'KABUPATEN MANGGARAI'),
('5314', '53', 'KABUPATEN ROTE NDAO'),
('5315', '53', 'KABUPATEN MANGGARAI BARAT'),
('5316', '53', 'KABUPATEN SUMBA TENGAH'),
('5317', '53', 'KABUPATEN SUMBA BARAT DAYA'),
('5318', '53', 'KABUPATEN NAGEKEO'),
('5319', '53', 'KABUPATEN MANGGARAI TIMUR'),
('5320', '53', 'KABUPATEN SABU RAIJUA'),
('5321', '53', 'KABUPATEN MALAKA'),
('5371', '53', 'KOTA KUPANG'),
('6101', '61', 'KABUPATEN SAMBAS'),
('6102', '61', 'KABUPATEN BENGKAYANG'),
('6103', '61', 'KABUPATEN LANDAK'),
('6104', '61', 'KABUPATEN MEMPAWAH'),
('6105', '61', 'KABUPATEN SANGGAU'),
('6106', '61', 'KABUPATEN KETAPANG'),
('6107', '61', 'KABUPATEN SINTANG'),
('6108', '61', 'KABUPATEN KAPUAS HULU'),
('6109', '61', 'KABUPATEN SEKADAU'),
('6110', '61', 'KABUPATEN MELAWI'),
('6111', '61', 'KABUPATEN KAYONG UTARA'),
('6112', '61', 'KABUPATEN KUBU RAYA'),
('6171', '61', 'KOTA PONTIANAK'),
('6172', '61', 'KOTA SINGKAWANG'),
('6201', '62', 'KABUPATEN KOTAWARINGIN BARAT'),
('6202', '62', 'KABUPATEN KOTAWARINGIN TIMUR'),
('6203', '62', 'KABUPATEN KAPUAS'),
('6204', '62', 'KABUPATEN BARITO SELATAN'),
('6205', '62', 'KABUPATEN BARITO UTARA'),
('6206', '62', 'KABUPATEN SUKAMARA'),
('6207', '62', 'KABUPATEN LAMANDAU'),
('6208', '62', 'KABUPATEN SERUYAN'),
('6209', '62', 'KABUPATEN KATINGAN'),
('6210', '62', 'KABUPATEN PULANG PISAU'),
('6211', '62', 'KABUPATEN GUNUNG MAS'),
('6212', '62', 'KABUPATEN BARITO TIMUR'),
('6213', '62', 'KABUPATEN MURUNG RAYA'),
('6271', '62', 'KOTA PALANGKA RAYA'),
('6301', '63', 'KABUPATEN TANAH LAUT'),
('6302', '63', 'KABUPATEN KOTA BARU'),
('6303', '63', 'KABUPATEN BANJAR'),
('6304', '63', 'KABUPATEN BARITO KUALA'),
('6305', '63', 'KABUPATEN TAPIN'),
('6306', '63', 'KABUPATEN HULU SUNGAI SELATAN'),
('6307', '63', 'KABUPATEN HULU SUNGAI TENGAH'),
('6308', '63', 'KABUPATEN HULU SUNGAI UTARA'),
('6309', '63', 'KABUPATEN TABALONG'),
('6310', '63', 'KABUPATEN TANAH BUMBU'),
('6311', '63', 'KABUPATEN BALANGAN'),
('6371', '63', 'KOTA BANJARMASIN'),
('6372', '63', 'KOTA BANJAR BARU'),
('6401', '64', 'KABUPATEN PASER'),
('6402', '64', 'KABUPATEN KUTAI BARAT'),
('6403', '64', 'KABUPATEN KUTAI KARTANEGARA'),
('6404', '64', 'KABUPATEN KUTAI TIMUR'),
('6405', '64', 'KABUPATEN BERAU'),
('6409', '64', 'KABUPATEN PENAJAM PASER UTARA'),
('6411', '64', 'KABUPATEN MAHAKAM HULU'),
('6471', '64', 'KOTA BALIKPAPAN'),
('6472', '64', 'KOTA SAMARINDA'),
('6474', '64', 'KOTA BONTANG'),
('6501', '65', 'KABUPATEN MALINAU'),
('6502', '65', 'KABUPATEN BULUNGAN'),
('6503', '65', 'KABUPATEN TANA TIDUNG'),
('6504', '65', 'KABUPATEN NUNUKAN'),
('6571', '65', 'KOTA TARAKAN'),
('7101', '71', 'KABUPATEN BOLAANG MONGONDOW'),
('7102', '71', 'KABUPATEN MINAHASA'),
('7103', '71', 'KABUPATEN KEPULAUAN SANGIHE'),
('7104', '71', 'KABUPATEN KEPULAUAN TALAUD'),
('7105', '71', 'KABUPATEN MINAHASA SELATAN'),
('7106', '71', 'KABUPATEN MINAHASA UTARA'),
('7107', '71', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108', '71', 'KABUPATEN SIAU TAGULANDANG BIARO'),
('7109', '71', 'KABUPATEN MINAHASA TENGGARA'),
('7110', '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111', '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171', '71', 'KOTA MANADO'),
('7172', '71', 'KOTA BITUNG'),
('7173', '71', 'KOTA TOMOHON'),
('7174', '71', 'KOTA KOTAMOBAGU'),
('7201', '72', 'KABUPATEN BANGGAI KEPULAUAN'),
('7202', '72', 'KABUPATEN BANGGAI'),
('7203', '72', 'KABUPATEN MOROWALI'),
('7204', '72', 'KABUPATEN POSO'),
('7205', '72', 'KABUPATEN DONGGALA'),
('7206', '72', 'KABUPATEN TOLI-TOLI'),
('7207', '72', 'KABUPATEN BUOL'),
('7208', '72', 'KABUPATEN PARIGI MOUTONG'),
('7209', '72', 'KABUPATEN TOJO UNA-UNA'),
('7210', '72', 'KABUPATEN SIGI'),
('7211', '72', 'KABUPATEN BANGGAI LAUT'),
('7212', '72', 'KABUPATEN MOROWALI UTARA'),
('7271', '72', 'KOTA PALU'),
('7301', '73', 'KABUPATEN KEPULAUAN SELAYAR'),
('7302', '73', 'KABUPATEN BULUKUMBA'),
('7303', '73', 'KABUPATEN BANTAENG'),
('7304', '73', 'KABUPATEN JENEPONTO'),
('7305', '73', 'KABUPATEN TAKALAR'),
('7306', '73', 'KABUPATEN GOWA'),
('7307', '73', 'KABUPATEN SINJAI'),
('7308', '73', 'KABUPATEN MAROS'),
('7309', '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310', '73', 'KABUPATEN BARRU'),
('7311', '73', 'KABUPATEN BONE'),
('7312', '73', 'KABUPATEN SOPPENG'),
('7313', '73', 'KABUPATEN WAJO'),
('7314', '73', 'KABUPATEN SIDENRENG RAPPANG'),
('7315', '73', 'KABUPATEN PINRANG'),
('7316', '73', 'KABUPATEN ENREKANG'),
('7317', '73', 'KABUPATEN LUWU'),
('7318', '73', 'KABUPATEN TANA TORAJA'),
('7322', '73', 'KABUPATEN LUWU UTARA'),
('7325', '73', 'KABUPATEN LUWU TIMUR'),
('7326', '73', 'KABUPATEN TORAJA UTARA'),
('7371', '73', 'KOTA MAKASSAR'),
('7372', '73', 'KOTA PAREPARE'),
('7373', '73', 'KOTA PALOPO'),
('7401', '74', 'KABUPATEN BUTON'),
('7402', '74', 'KABUPATEN MUNA'),
('7403', '74', 'KABUPATEN KONAWE'),
('7404', '74', 'KABUPATEN KOLAKA'),
('7405', '74', 'KABUPATEN KONAWE SELATAN'),
('7406', '74', 'KABUPATEN BOMBANA'),
('7407', '74', 'KABUPATEN WAKATOBI'),
('7408', '74', 'KABUPATEN KOLAKA UTARA'),
('7409', '74', 'KABUPATEN BUTON UTARA'),
('7410', '74', 'KABUPATEN KONAWE UTARA'),
('7411', '74', 'KABUPATEN KOLAKA TIMUR'),
('7412', '74', 'KABUPATEN KONAWE KEPULAUAN'),
('7413', '74', 'KABUPATEN MUNA BARAT'),
('7414', '74', 'KABUPATEN BUTON TENGAH'),
('7415', '74', 'KABUPATEN BUTON SELATAN'),
('7471', '74', 'KOTA KENDARI'),
('7472', '74', 'KOTA BAUBAU'),
('7501', '75', 'KABUPATEN BOALEMO'),
('7502', '75', 'KABUPATEN GORONTALO'),
('7503', '75', 'KABUPATEN POHUWATO'),
('7504', '75', 'KABUPATEN BONE BOLANGO'),
('7505', '75', 'KABUPATEN GORONTALO UTARA'),
('7571', '75', 'KOTA GORONTALO'),
('7601', '76', 'KABUPATEN MAJENE'),
('7602', '76', 'KABUPATEN POLEWALI MANDAR'),
('7603', '76', 'KABUPATEN MAMASA'),
('7604', '76', 'KABUPATEN MAMUJU'),
('7605', '76', 'KABUPATEN MAMUJU UTARA'),
('7606', '76', 'KABUPATEN MAMUJU TENGAH'),
('8101', '81', 'KABUPATEN MALUKU TENGGARA BARAT'),
('8102', '81', 'KABUPATEN MALUKU TENGGARA'),
('8103', '81', 'KABUPATEN MALUKU TENGAH'),
('8104', '81', 'KABUPATEN BURU'),
('8105', '81', 'KABUPATEN KEPULAUAN ARU'),
('8106', '81', 'KABUPATEN SERAM BAGIAN BARAT'),
('8107', '81', 'KABUPATEN SERAM BAGIAN TIMUR'),
('8108', '81', 'KABUPATEN MALUKU BARAT DAYA'),
('8109', '81', 'KABUPATEN BURU SELATAN'),
('8171', '81', 'KOTA AMBON'),
('8172', '81', 'KOTA TUAL'),
('8201', '82', 'KABUPATEN HALMAHERA BARAT'),
('8202', '82', 'KABUPATEN HALMAHERA TENGAH'),
('8203', '82', 'KABUPATEN KEPULAUAN SULA'),
('8204', '82', 'KABUPATEN HALMAHERA SELATAN'),
('8205', '82', 'KABUPATEN HALMAHERA UTARA'),
('8206', '82', 'KABUPATEN HALMAHERA TIMUR'),
('8207', '82', 'KABUPATEN PULAU MOROTAI'),
('8208', '82', 'KABUPATEN PULAU TALIABU'),
('8271', '82', 'KOTA TERNATE'),
('8272', '82', 'KOTA TIDORE KEPULAUAN'),
('9101', '91', 'KABUPATEN FAKFAK'),
('9102', '91', 'KABUPATEN KAIMANA'),
('9103', '91', 'KABUPATEN TELUK WONDAMA'),
('9104', '91', 'KABUPATEN TELUK BINTUNI'),
('9105', '91', 'KABUPATEN MANOKWARI'),
('9106', '91', 'KABUPATEN SORONG SELATAN'),
('9107', '91', 'KABUPATEN SORONG'),
('9108', '91', 'KABUPATEN RAJA AMPAT'),
('9109', '91', 'KABUPATEN TAMBRAUW'),
('9110', '91', 'KABUPATEN MAYBRAT'),
('9111', '91', 'KABUPATEN MANOKWARI SELATAN'),
('9112', '91', 'KABUPATEN PEGUNUNGAN ARFAK'),
('9171', '91', 'KOTA SORONG'),
('9401', '94', 'KABUPATEN MERAUKE'),
('9402', '94', 'KABUPATEN JAYAWIJAYA'),
('9403', '94', 'KABUPATEN JAYAPURA'),
('9404', '94', 'KABUPATEN NABIRE'),
('9408', '94', 'KABUPATEN KEPULAUAN YAPEN'),
('9409', '94', 'KABUPATEN BIAK NUMFOR'),
('9410', '94', 'KABUPATEN PANIAI'),
('9411', '94', 'KABUPATEN PUNCAK JAYA'),
('9412', '94', 'KABUPATEN MIMIKA'),
('9413', '94', 'KABUPATEN BOVEN DIGOEL'),
('9414', '94', 'KABUPATEN MAPPI'),
('9415', '94', 'KABUPATEN ASMAT'),
('9416', '94', 'KABUPATEN YAHUKIMO'),
('9417', '94', 'KABUPATEN PEGUNUNGAN BINTANG'),
('9418', '94', 'KABUPATEN TOLIKARA'),
('9419', '94', 'KABUPATEN SARMI'),
('9420', '94', 'KABUPATEN KEEROM'),
('9426', '94', 'KABUPATEN WAROPEN'),
('9427', '94', 'KABUPATEN SUPIORI'),
('9428', '94', 'KABUPATEN MAMBERAMO RAYA'),
('9429', '94', 'KABUPATEN NDUGA'),
('9430', '94', 'KABUPATEN LANNY JAYA'),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH'),
('9432', '94', 'KABUPATEN YALIMO'),
('9433', '94', 'KABUPATEN PUNCAK'),
('9434', '94', 'KABUPATEN DOGIYAI'),
('9435', '94', 'KABUPATEN INTAN JAYA'),
('9436', '94', 'KABUPATEN DEIYAI'),
('9471', '94', 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode` varchar(2) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `atribut` int(11) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode`, `nama`, `atribut`, `bobot`) VALUES
(1, 'C1', 'Interview HR', 1, 0.25),
(2, 'C2', 'Tes Komputer', 2, 0.2),
(3, 'C3', 'Tes Psikotest', 1, 0.15),
(4, 'C4', 'Tes Inventory', 2, 0.15),
(5, 'C5', 'Tes Kemampuan', 1, 0.1),
(6, 'C6', 'Tes Suara', 2, 0.1),
(7, 'C7', 'Interview Client', 1, 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `level_ID` int(10) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_ID`, `level`) VALUES
(1, 'Administrator'),
(2, 'Pelamar'),
(3, 'Atasan');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bagian` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `deskripsi_pekerjaan` text NOT NULL,
  `deskripsi_kebutuhan` text NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `tanggal_kebutuhan` date NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `jeniskelamin` varchar(2) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `tanggal`, `bagian`, `jabatan`, `tipe`, `deskripsi_pekerjaan`, `deskripsi_kebutuhan`, `jumlah_orang`, `tanggal_kebutuhan`, `lokasi`, `status`, `jeniskelamin`, `umur`) VALUES
(1, '2017-03-17', 1, 3, 1, 'Membuat dan merekan administrasi', 'SMK/ D3/ S1', 6, '2017-07-30', 'Soreang, Bandung, West Java, Indonesia', 1, 'L', 35),
(2, '2017-03-17', 3, 2, 1, 'Membuat Desain Brosur dan Pamplet', 'Menguasasi CorelDraw, Photoshop, Adobe Illustrator.', 7, '2017-07-29', 'Banjaran, Bandung, West Java, Indonesia', 1, 'P', 25),
(3, '2017-03-17', 1, 1, 1, 'Menguasai Softskill dan Konseptual.', 'Magister Administrasi', 10, '2017-08-29', 'Majalaya, Bandung, West Java, Indonesia', 1, 'L', 35),
(4, '2017-03-17', 3, 1, 1, 'Membuat Desain Animasi 3D', 'S2 Desain Komunikasi Visual', 5, '2017-08-14', 'Jakarta, Special Capital Region of Jakarta, Indonesia', 1, 'P', 25),
(5, '2017-03-17', 1, 2, 1, 'Membuat Desain Brosur dan Pamplet', 'Menguasai CSS, HTML, PHOTOSHOP, CORELDRAW', 5, '2017-09-13', 'Bandung', 1, 'L', 20),
(6, '2017-03-17', 3, 1, 1, 'Merancang Desain', 'Menguasai CSS, HTML, PHOTOSHOP, CORELDRAW', 8, '2017-08-30', 'Soreang, Bandung, West Java, Indonesia', 1, 'P', 25),
(8, '2017-03-13', 3, 1, 1, 'Merancang Desain 2', 'Menguasai CSS, HTML, PHOTOSHOP, CORELDRAW', 5, '2017-08-30', 'Soreang, Bandung, West Java, Indonesia', 1, 'L', 25),
(9, '2017-03-13', 2, 2, 1, 'Membuat Desain Animasi 3D', 'Menguasai CSS, HTML, PHOTOSHOP, CORELDRAW', 4, '2017-09-30', 'Bandung, Bandung City, West Java, Indonesia', 1, 'P', 30),
(10, '2017-03-13', 1, 1, 1, 'Membuat Desain Animasi 3D', 'Menguasasi CorelDraw, Photoshop, Adobe Illustrator.', 2, '2017-08-25', 'Jakarta, Indonesia', 1, 'L', 35);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE IF NOT EXISTS `pelamar` (
  `id_people` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `id_user` int(10) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat_domisili` text NOT NULL,
  `status_domisili` int(11) NOT NULL,
  `status_menikah` int(11) NOT NULL,
  `tanggal_menikah` date NOT NULL,
  `no_jamsostek` varchar(50) NOT NULL,
  `no_sim` varchar(50) NOT NULL,
  `no_npwp` varchar(50) NOT NULL,
  `telephone_pribadi` varchar(50) NOT NULL,
  `telephone_rumah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_people`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `golongan_darah`, `kewarganegaraan`, `id_user`, `kota_id`, `provinsi_id`, `hp`, `alamat_domisili`, `status_domisili`, `status_menikah`, `tanggal_menikah`, `no_jamsostek`, `no_sim`, `no_npwp`, `telephone_pribadi`, `telephone_rumah`) VALUES
(1037231, 0, 'Syifa Andani', 'Bandung', '1998-06-10', 'Islam', 'L', 'A', 'WNI', 33, 3204, 32, '08724955', '', 0, 0, '0000-00-00', '', '', '', '', ''),
(1194397, 0, 'Mugi Rachmat', 'Bandung', '1996-01-30', 'Islam', 'L', 'O', 'WNI', 30, 2101, 21, '', '', 0, 0, '0000-00-00', '', '', '', '', ''),
(1196411, 0, 'Andika Pratyam', 'Jakatya', '1991-03-07', 'Islam', 'L', 'A', 'WNI', 31, 2101, 21, '', '', 0, 0, '0000-00-00', '', '', '', '', ''),
(1277862, 123456789, 'Bima Ventor', '', '1970-01-01', '', '', '', '', 44, 0, 0, '', '', 0, 0, '1970-01-01', '', '', '', '', ''),
(1278869, 258963, 'Krimo', 'Subaraya', '1999-01-30', 'Kristen', 'L', 'B', 'WNI', 45, 7107, 71, '087858488797', 'Bandung', 0, 1, '1970-01-01', '596596556565', '06565656445', '08854656545', '08415645615', '05494984917'),
(1393127, 0, '', '', '1970-01-01', '', '', '', '', 38, 0, 0, '', '', 0, 0, '0000-00-00', '', '', '', '', ''),
(1459259, 0, 'Andi', 'Bandung', '1970-01-01', 'Islam', 'L', 'B', 'WNI', 34, 6411, 64, '08785959595', '', 0, 0, '0000-00-00', '', '', '', '', ''),
(1527100, 0, 'Renika Auliya', 'Tuban', '1989-03-08', 'Islam', 'L', 'A', 'WNI', 32, 3523, 35, '087854848448', '', 0, 0, '0000-00-00', '', '', '', '', ''),
(1684723, 6312144, 'admins', 'Jakarta', '1980-01-03', 'Islam', 'L', 'B', 'WNI', 41, 6501, 65, '087659595949', '', 0, 0, '0000-00-00', '', '', '', '', ''),
(1910492, 132456, 'mehdi', 'Jakarta', '1982-01-22', 'Islam', 'L', 'B', 'WNI', 42, 3315, 33, '087824931504', '', 0, 0, '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_bahasa`
--

CREATE TABLE IF NOT EXISTS `pelamar_bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `berbicara` int(11) NOT NULL,
  `menulis` int(11) NOT NULL,
  `membaca` int(11) NOT NULL,
  `mengerti` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_bahasa`
--

INSERT INTO `pelamar_bahasa` (`id_bahasa`, `nama`, `berbicara`, `menulis`, `membaca`, `mengerti`, `people_id`, `user_id`) VALUES
(1, 'Inggris', 1, 2, 3, 2, 1910492, 42);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_dokumen`
--

CREATE TABLE IF NOT EXISTS `pelamar_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `cv` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `transkrip` varchar(255) NOT NULL,
  `skck` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `people_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `verifikasi_id` int(11) NOT NULL,
  `tanggal_verifikasi` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_dokumen`
--

INSERT INTO `pelamar_dokumen` (`id_dokumen`, `tanggal`, `cv`, `ktp`, `ijazah`, `transkrip`, `skck`, `sertifikat`, `people_id`, `user_id`, `verifikasi_id`, `tanggal_verifikasi`, `status`) VALUES
(1, '2017-08-13 12:16:04', '', '', '', '', '', '', 1278869, 45, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_keahlian`
--

CREATE TABLE IF NOT EXISTS `pelamar_keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `word` int(11) NOT NULL,
  `excel` int(11) NOT NULL,
  `powerpoint` int(11) NOT NULL,
  `sql` int(11) NOT NULL,
  `lan` int(11) NOT NULL,
  `wan` int(11) NOT NULL,
  `bahasa_pascal` int(11) NOT NULL,
  `php` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_keahlian`
--

INSERT INTO `pelamar_keahlian` (`id_keahlian`, `word`, `excel`, `powerpoint`, `sql`, `lan`, `wan`, `bahasa_pascal`, `php`, `c`, `java`, `people_id`, `user_id`) VALUES
(1, 1, 2, 1, 1, 1, 1, 2, 2, 2, 2, 1278869, 45);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_keluarga`
--

CREATE TABLE IF NOT EXISTS `pelamar_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `hubungan_keluarga` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` int(11) NOT NULL,
  `jabatan_pekerjaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `people_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_keluarga`
--

INSERT INTO `pelamar_keluarga` (`id_keluarga`, `hubungan_keluarga`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `jabatan_pekerjaan`, `nama_perusahaan`, `keterangan`, `people_id`, `user_id`) VALUES
(1, 1, 'Andi', 1, 'Jakarta', '0000-00-00', 5, 2, 'PT. Mardel ', '-', 1684723, 41),
(2, 2, 'Ina', 0, 'Surabaya', '2017-08-17', 2, 2, 'PT. Mardel ', '-', 1684723, 41),
(3, 1, 'Ono', 1, 'Surabaya', '1997-08-21', 4, 2, 'Pt. ZYX', '-', 1910492, 42);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_organisasi`
--

CREATE TABLE IF NOT EXISTS `pelamar_organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `jenis_kegiatan` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `people_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pelamar_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `gaji` float DEFAULT NULL,
  `bagian` varchar(50) DEFAULT NULL,
  `people_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_pekerjaan`
--

INSERT INTO `pelamar_pekerjaan` (`id_pekerjaan`, `instansi`, `tahun`, `gaji`, `bagian`, `people_id`, `user_id`) VALUES
(6, 'ITS', '2016', 3.45, 'TI', 1527100, 32);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_pendidikan`
--

CREATE TABLE IF NOT EXISTS `pelamar_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `jenjang` int(11) NOT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `kota` varchar(50) NOT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `tahun_lulus` varchar(5) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `nilai` float DEFAULT NULL,
  `jenis` int(11) NOT NULL,
  `macam` int(11) NOT NULL,
  `no_dokumen` varchar(50) NOT NULL,
  `people_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_pendidikan`
--

INSERT INTO `pelamar_pendidikan` (`id_pendidikan`, `jenjang`, `instansi`, `kota`, `jurusan`, `mulai`, `selesai`, `tahun_lulus`, `status`, `nilai`, `jenis`, `macam`, `no_dokumen`, `people_id`, `user_id`) VALUES
(6, 0, 'ITS', '', 'TI', '0000-00-00', '0000-00-00', '2016', 0, 3.45, 0, 0, '', 1527100, 32),
(7, 5, 'LPKIA', 'Bandung', 'Teknik Informatika', '0000-00-00', '0000-00-00', '2012', 1, 3.25, 1, 0, '', 1684723, 41),
(8, 5, 'Unpad', 'Bandung', 'TI', '2018-08-04', '1970-01-01', '2016', 1, 3.75, 1, 0, '', 1910492, 42),
(9, 0, 'LPK', '', NULL, '0000-00-00', '0000-00-00', NULL, 0, NULL, 2, 1, 'SK/90/YI/1029', 1910492, 42);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_saw`
--

CREATE TABLE IF NOT EXISTS `penilaian_saw` (
  `id_penilaian_saw` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penilai_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_saw`
--

INSERT INTO `penilaian_saw` (`id_penilaian_saw`, `tanggal`, `penilai_id`, `customer_id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `nilai`, `status`) VALUES
(3, '2016-07-25', 1, 30, 6, 9, 15, 19, 25, 30, 34, 0.867, 1),
(10, '2016-12-15', 3, 31, 2, 8, 15, 19, 24, 29, 32, 0.692, 2);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id_test` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `lamaran_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status1` varchar(50) NOT NULL,
  `berita_acara1` text NOT NULL,
  `status2` varchar(50) NOT NULL,
  `berita_acara2` text NOT NULL,
  `status3` varchar(50) NOT NULL,
  `berita_acara3` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `tanggal`, `lamaran_id`, `lowongan_id`, `user_id`, `status1`, `berita_acara1`, `status2`, `berita_acara2`, `status3`, `berita_acara3`) VALUES
(5, '2017-03-20', 25, 1, 32, 'Lulus', 'Lulus', '', '', '', ''),
(6, '2017-03-20', 29, 10, 30, 'Lulus', 'Sip', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `date_create` date NOT NULL,
  `level_ID` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `date_create`, `level_ID`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '2016-05-10', 1),
(2, 'pimpinan', '21232f297a57a5a743894a0e4a801fc3', 'pimpinan@pimpinan.com', '2016-05-10', 3),
(30, 'mugi', '21232f297a57a5a743894a0e4a801fc3', 'infomugi@gmail.com', '2017-03-13', 2),
(31, 'andika', '7e51eea5fa101ed4dade9ad3a7a072bb', 'andika@gmial.com', '2017-03-20', 2),
(32, 'renika', '21232f297a57a5a743894a0e4a801fc3', 'renika@gmail.com', '2017-03-20', 2),
(33, 'syifa', '21232f297a57a5a743894a0e4a801fc3', 'syifa@gmial.com', '2017-06-12', 2),
(34, 'akira', '21232f297a57a5a743894a0e4a801fc3', 'akira@gmail.com', '2017-07-11', 2),
(40, 'okin', '21232f297a57a5a743894a0e4a801fc3', 'okin@gmail.com', '2017-08-02', 2),
(41, 'admins', 'c3284d0f94606de1fd2af172aba15bf3', 'admins@fmi.com', '2017-08-03', 2),
(42, 'mehdi', '77e2edcc9b40441200e31dc57dbb8829', 'mehdi@gmaiol.com', '2017-08-04', 2),
(43, 'andi', '21232f297a57a5a743894a0e4a801fc3', 'andi@gmail.com', '2017-08-13', 2),
(44, 'bima', '21232f297a57a5a743894a0e4a801fc3', 'bima@gmail.com', '2017-08-13', 2),
(45, 'krimo', '6ad4664ba23eac71b5ef5e826ea0c6cd', 'krimo@gmail.com', '2017-08-13', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `crips`
--
ALTER TABLE `crips`
  ADD PRIMARY KEY (`id_crips`);

--
-- Indexes for table `file_lamaran`
--
ALTER TABLE `file_lamaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_people` (`id_people`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_index` (`province_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_ID`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_people`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pelamar_bahasa`
--
ALTER TABLE `pelamar_bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `pelamar_dokumen`
--
ALTER TABLE `pelamar_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `pelamar_keahlian`
--
ALTER TABLE `pelamar_keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `pelamar_keluarga`
--
ALTER TABLE `pelamar_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `pelamar_pekerjaan`
--
ALTER TABLE `pelamar_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `pelamar_pendidikan`
--
ALTER TABLE `pelamar_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `penilaian_saw`
--
ALTER TABLE `penilaian_saw`
  ADD PRIMARY KEY (`id_penilaian_saw`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`level_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `crips`
--
ALTER TABLE `crips`
  MODIFY `id_crips` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `file_lamaran`
--
ALTER TABLE `file_lamaran`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pelamar_bahasa`
--
ALTER TABLE `pelamar_bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelamar_dokumen`
--
ALTER TABLE `pelamar_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelamar_keahlian`
--
ALTER TABLE `pelamar_keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelamar_keluarga`
--
ALTER TABLE `pelamar_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelamar_pekerjaan`
--
ALTER TABLE `pelamar_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelamar_pendidikan`
--
ALTER TABLE `pelamar_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `penilaian_saw`
--
ALTER TABLE `penilaian_saw`
  MODIFY `id_penilaian_saw` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinsi` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
