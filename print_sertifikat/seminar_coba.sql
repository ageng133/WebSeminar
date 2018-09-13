-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 11:11 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar_coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE IF NOT EXISTS `panitia` (
  `no` varchar(3) DEFAULT NULL,
  `nama` varchar(29) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`no`, `nama`) VALUES
('P01', 'NUR ARIF FADLILLAH'),
('P02', 'SEPTIAN EKA PRASETIYO'),
('P03', 'RYSTA RUTH DEVI'),
('P04', 'RIAN NOVIANTO'),
('P05', 'ANDHIKA SETYO PANTAWIS'),
('P06', 'MARDIANUS EFENDI'),
('P07', 'MARLINA MAJID'),
('P08', 'PRIYAMBODO'),
('P09', 'ACEP SUDRAJAT'),
('P10', 'ARYO SETO'),
('P11', 'MIFTAHUSSALAM'),
('P12', 'MUHAMMAD AFIF RAHMAN SYHAEP'),
('P13', 'ACHMAD DWI APRIYANTO'),
('P14', 'DEDE SETIAWAN'),
('P15', 'AHMAD RIFAI'),
('P16', 'ARFIAN NUR FAJAR'),
('P17', 'DHIMAS WICAKSANA A.'),
('P18', 'ALDI LUKMAN'),
('P19', 'ARI PRATITASARI'),
('P20', 'DWI PRIHATINI'),
('P21', 'PUTRI INTAN FARAMULI'),
('P22', 'MIRANDA HASANTI'),
('P23', 'CUT ZURAIDAH'),
('P24', 'WAHYU PRATAMA'),
('P25', 'ONESINUS SAUT PARULIAN'),
('P26', 'ABDURAFFI ALWAN'),
('P27', 'RINA'),
('P28', 'GLADIS MEY AGUSTA'),
('P29', 'MUHAMMAD IQBAL'),
('P30', 'MUHAMMAD IRHAM MAULANA'),
('P31', 'SAEFUDIN'),
('P32', 'IBNU RAMADHAN'),
('P33', 'RISKY JULIANTO'),
('P34', 'ERI NOVITASARI'),
('P35', 'ATIK BUDI PARYANTI.SPd.MM'),
('P36', 'DADANG ISKANDAR MULYANA.M.Kom'),
('P37', 'VERI ARINAL .M.Kom'),
('P38', 'MESRA BETTY YEL.M.Kom.MM');

-- --------------------------------------------------------

--
-- Table structure for table `panitiabnn`
--

CREATE TABLE IF NOT EXISTS `panitiabnn` (
  `no` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitiabnn`
--

INSERT INTO `panitiabnn` (`no`, `nama`) VALUES
('P01', 'Nur Arif Fadlillah'),
('P02', 'Septian Eka Prasetiyo'),
('P03', 'Rysta Ruth Devi'),
('P04', 'Rian Novianto'),
('P05', 'Andhika Setyo Pantawis'),
('P06', 'Mardianus Efendi'),
('P07', 'Marlina Majid'),
('P08', 'Priyambodo'),
('P09', 'Aryo Seto'),
('P10', 'Mifthaussalam'),
('P11', 'Achamad Dwi Apriyanto'),
('P12', 'Putri Intan Faramuli'),
('P13', 'Wahyu Pratama'),
('P14', 'Gladis Mey Agusta'),
('P15', 'Eri Novitasari'),
('P16', 'Puspita Syarafina'),
('P17', 'Asep Ovid Afidin'),
('P18', 'Rinto Handoyo'),
('P19', 'Indra Irwansyah'),
('P20', 'Maulidyah Intan'),
('P21', 'Dhimas Wicaksana Adrian'),
('P22', 'Eka Nurul Septriana'),
('P23', 'Dede Setiawan'),
('P24', 'Ahmad Rifai');

-- --------------------------------------------------------

--
-- Table structure for table `panitia_seminar_machine`
--

CREATE TABLE IF NOT EXISTS `panitia_seminar_machine` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia_seminar_machine`
--

INSERT INTO `panitia_seminar_machine` (`id`, `nama`, `no`) VALUES
(6, 'Hendri Irawan, S.KOM', '40'),
(10, 'Andhika setyo pantawis', '41'),
(11, 'Rian novianto', '42'),
(12, 'Achmad Dwi Apriyanto', '43'),
(13, 'Asep Ovid Afidin', '44'),
(14, 'Ade Ismail', '45'),
(15, 'frenskilia Malsi Manggala', '46'),
(16, 'Puspita Syarafina', '47'),
(17, 'Arfian Nur Fajar', '48'),
(18, 'miftahussalam', '49'),
(19, 'Ageng M.W', '50'),
(20, 'Eri Novitasari', '51'),
(21, 'Putri Intan Faramuli', '52'),
(22, 'Ahmad Rifai', '53'),
(23, 'Mardianus Efendy', '54'),
(24, 'Septian Eka Prasetiyo', '55'),
(25, 'Wahyu Pratama', '56'),
(26, 'Rinto handoyo', '57'),
(27, 'Indra Irwansyah', '58'),
(28, 'Dhimas wicaksana adrian', '59'),
(29, 'Cut Zuraidah', '60'),
(30, 'Muhammad Iqbal', '61'),
(31, 'M. Irham Maulana Ramadhan', '62'),
(32, 'Miranda Hasanti', '71'),
(33, 'Muhammad Abdurraffi Alwan', '72'),
(34, 'Aldi Lukman', '73'),
(35, 'Rina', '74'),
(36, 'Mohamad Saefudin', '75'),
(37, 'Onesinus Saut Parulian', '76'),
(38, 'Gladis Mey Agusta', '77'),
(39, 'Muryan Awaludin, M.KOM', '78'),
(40, 'Dede Setiawan', '79'),
(41, 'Marlina', '80'),
(42, 'Nur Arif Fadlillah', '81'),
(43, 'Ari Pratitasari', '82'),
(44, 'Rysta Ruth Devi', '83'),
(45, 'Dadang Iskandar M, M. Kom', '84');

-- --------------------------------------------------------

--
-- Table structure for table `panitia_workshop`
--

CREATE TABLE IF NOT EXISTS `panitia_workshop` (
  `no` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia_workshop`
--

INSERT INTO `panitia_workshop` (`no`, `nama`) VALUES
('25', 'WAHYU PRATAMA'),
('26', 'MARLINA'),
('27', 'ANDHIKA SETYO . P'),
('28', 'BUDI ISMAIL'),
('29', 'PUTRI FARA'),
('30', 'ASEP OVID AFIDIN'),
('31', 'ARI PRTITASARI'),
('32', 'MIFTAHUSSALAM'),
('33', 'EDI MARIO'),
('34', 'ERI NOVITASARI'),
('35', 'NUR ARIF FADLILLAH'),
('36', 'ARYO SETO'),
('37', 'DADANG ISKANDAR M M.KOM'),
('38', 'EKO WIDODO S.KOM'),
('39', 'PUTRI INTAN FARAMULI');

-- --------------------------------------------------------

--
-- Table structure for table `pesertabnn`
--

CREATE TABLE IF NOT EXISTS `pesertabnn` (
  `no` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesertabnn`
--

INSERT INTO `pesertabnn` (`no`, `nama`) VALUES
('001', 'Septa Anugrah'),
('002', 'Rahmat Enur Fazri'),
('003', 'Enduh Abdullah'),
('004', 'Toyib Abdur Rahman'),
('005', 'Minfadillah'),
('006', 'Anis Fitriyana'),
('007', 'Kenny Surya Wijaya'),
('008', 'Fitria Mardani'),
('009', 'Ahmad Bisri Maulana'),
('010', 'Muhammad Irham M.R'),
('011', 'Amir Muchammad'),
('012', 'Yulius Umbu Lede'),
('013', 'Heny Nengsi'),
('014', 'Anita Ananda Putri'),
('015', 'Andhika Setyo Pantawis'),
('016', 'Gusniar Alfian Noor'),
('017', 'Budi Setiawan'),
('018', 'Muhammad Abdur Raffi Alwan'),
('019', 'Dendi Kurniawan'),
('020', 'Mochmammad Denny Prayitno'),
('021', 'Achmad Syafrizal'),
('022', 'Supyan Nurhadi'),
('023', 'Muhammad Jamhari'),
('024', 'Onesinus Saut Parulian'),
('025', 'Christian Bona Patar'),
('026', 'Fadil Chaeruna'),
('027', 'Adam Adriyanto'),
('028', 'Muhammad Iqbal'),
('029', 'Indah Nurmalasari'),
('030', 'Elisabeth Lota Kaka'),
('031', 'Niat Juita Halawa'),
('032', 'Diah Veranita Sari'),
('033', 'Cut Zuraidah'),
('034', 'Ari Pratitasari'),
('035', 'Miranda Hasanti'),
('036', 'Muhammad Hizri Sulthan'),
('037', 'Zahlul Rusydi'),
('038', 'Pandu'),
('039', 'Rosita Oktaviani'),
('040', 'Amelia Theresia Panggabean'),
('041', 'Superman'),
('042', 'Esya Fella Sulfah S'),
('043', 'Muhammad Yusuf Nurfadlullah'),
('044', 'Mhd. Afif Rahman Syahep'),
('045', 'Firza Novianto'),
('046', 'M Rizki Fadilah'),
('047', 'Atik Budi Paryanti'),
('048', 'Sri Lestari'),
('049', 'Sugiyono'),
('050', 'Ayub'),
('051', 'Dadang Iskandar Mulyana');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_seminar_machine`
--

CREATE TABLE IF NOT EXISTS `peserta_seminar_machine` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta_seminar_machine`
--

INSERT INTO `peserta_seminar_machine` (`id`, `nama`, `no`) VALUES
(1, 'Backran Umar', '105'),
(2, 'Abdul Rohim', '106'),
(3, 'Pratomo Djati Nugroho', '107'),
(4, 'Hasbul Loh', '108'),
(5, 'Amat damuri', '109'),
(6, 'Helmida Priandini', '110'),
(7, 'Ratri Rachma Pramesti', '111'),
(8, 'Fitria Mardani', '112'),
(9, 'Ryan Safriyanto', '113'),
(10, 'Toni Imam Prasetyo', '114'),
(11, 'Muhammad Syarif Hartawan', '115'),
(12, 'rifto sahfidi', '116'),
(13, 'Zico Sarlizano', '117'),
(14, 'Gempa Hendratna', '118'),
(15, 'Idrus Ramadhan', '119'),
(16, 'Muita Subani', '120'),
(17, 'Winarni', '121'),
(18, 'Amir Muchammad', '122'),
(19, 'Popy Purnamasari Wahid S', '123'),
(20, 'Nurhayati', '124'),
(21, 'Moch Yogi Sumarna', '125'),
(22, 'HANSEN CANDRA', '126'),
(23, 'Renida Bunga Prananingrum', '127'),
(24, 'BAGUS FIRMANSYAH', '128'),
(25, 'Yuli handriyani', '129'),
(26, 'Ahmad Syaifur Rijal', '130'),
(27, 'agung setiadi', '131'),
(28, 'Supyan Nurhadi', '132'),
(29, 'Agus Priana', '133'),
(30, 'Ulfa Puji Lestari', '134'),
(31, 'Triyono', '135'),
(32, 'Irsyad Asyhari Lubis', '136'),
(33, 'Anis Fitriyana', '137'),
(34, 'eka nurul sepriana', '138'),
(35, 'Juarni Siregar', '139'),
(36, 'Eko Budi Prasetyo', '140'),
(37, 'Ryan Giovanny Muliadi', '141'),
(38, 'siti zahroh', '142'),
(39, 'M AINUR ROFIK', '143'),
(40, 'NOFIARDI', '144'),
(41, 'Leni Devera Asrar', '145'),
(42, 'Resty Dwi Anggraini', '146'),
(43, 'Asep Hunaifi', '147'),
(44, 'Devinisa Suhartono', '148'),
(45, 'Muhammad Biondi Nasution', '149'),
(46, 'Lintang Wisesa Atissalam', '150'),
(47, 'Ateng adhitya erlangga', '151'),
(48, 'Shinta Ayuningtias', '152'),
(49, 'Rizal Amegia Saputra', '153'),
(50, 'HERFIN ALIF SAPUTRA', '154'),
(51, 'Erika Mutiara', '155'),
(52, 'JAMAL MAULANA HUDIN', '156'),
(53, 'Heni Nur Safitri', '157'),
(54, 'Sri Indarto', '158'),
(55, 'Ahmad sofa', '159'),
(56, 'FREDERIKUS TUTOILE SOROMAKING', '160'),
(57, 'M. Syarifpudin', '161'),
(58, 'Sony Widodo', '162'),
(59, 'Elah Nurlelah', '163'),
(60, 'Dwi Saputra Anjasmara', '164'),
(61, 'Erwin Ruky', '165'),
(62, 'Kenni lasprino', '166'),
(63, 'Erni Ermawati', '167'),
(64, 'Rossa Agustiana Wibowo', '168'),
(65, 'Andini Dewi Sankurniasih', '169'),
(66, 'Andika Pebrianto', '170'),
(67, 'Maharanisa', '171'),
(68, 'Deni Dwi Antama', '172'),
(69, 'Ary Widodo Soegiharto', '173'),
(70, 'Ciptania Saraswati', '174'),
(71, 'Ayuk Ambar Kusuma', '175'),
(72, 'Sigit bintoro', '176'),
(73, 'Syahulia', '177'),
(74, 'Muhamad Sabilillah', '178'),
(75, 'Robi Aziz Zuama', '179'),
(76, 'AJI SETIAWAN', '180'),
(77, 'Achmad syafrizal', '181'),
(78, 'Rendy Fabiola', '182'),
(79, 'Andri Yansyah', '183'),
(80, 'Andrew sakti wiguna', '184'),
(81, 'muhamad sofyan', '185'),
(82, 'Rizky Wahyuningtias', '186'),
(83, 'RAHMAWATI SUSILO PUTRI', '187'),
(84, 'YONGKI SURYO PRAYOGO', '188'),
(85, 'Endi Nurcahyo', '189'),
(86, 'Wildan Maulana Briliance', '190'),
(87, 'Alfyan pradana putra', '191'),
(88, 'Imam Badru Zaman', '192'),
(89, 'YURNIMAN LAIA', '193'),
(90, 'Raditya Chandra Kusuma', '194'),
(91, 'Suparman', '195'),
(92, 'REZKHI DINI ILLAHI', '196'),
(93, 'Rofi Ria Khorela', '197'),
(94, 'Suci Heti', '198'),
(95, 'agnas putri', '199'),
(96, 'SUSILAWATI', '200'),
(97, 'Andi Zulkifli', '201'),
(98, 'Agus Ribut Susanto', '202'),
(99, 'Natasya Erent Yolanda', '203'),
(100, 'Yudi Arfianto Imam', '204'),
(101, 'Andreas almeika', '205'),
(102, 'muhammad yasin nur', '206'),
(103, 'ARI SAPUTRA', '207'),
(104, 'Ester Laekha, ST', '208'),
(105, 'FIRDA RUSMIANTI', '209'),
(106, 'Nurhasanah', '210'),
(107, 'Bernadus Herdi Sirenden', '211'),
(108, 'Christian Bona Patar', '212'),
(109, 'sendi firdaus', '213'),
(110, 'Heri Rizky Firdaus', '214'),
(111, 'DIKA ADITIA', '215'),
(112, 'Lukas Eka octhorino', '216'),
(113, 'M. Yusuf Hizbullah', '217'),
(114, 'Wisnu Murti Prabowo', '218'),
(115, 'slamet tri mulyono', '219'),
(116, 'Siti Nurajizah', '220'),
(117, 'Radiant Utama', '221'),
(118, 'Ahmadi', '222'),
(119, 'abdul bashir kurniawan', '223'),
(120, 'Dika Yohelmi', '224'),
(121, 'Anthonius Ledoh S.Kom', '225'),
(122, 'M. Heikal Mafazi', '226'),
(123, 'Okki Setyawan', '227'),
(124, 'Agung prasetyo', '228'),
(125, 'Ina Muthia Kanza', '229'),
(126, 'M.Abdurraffi Alwan', '230'),
(127, 'Nozia Monansi', '231'),
(128, 'Reni Kartika', '232'),
(129, 'Arifin Yulianto', '233'),
(130, 'Septian', '234'),
(131, 'ZAHLUL RUSYDI', '235'),
(132, 'Ryan Naryanto Sulaksono', '236'),
(133, 'Suyatna Aristiady', '237'),
(134, 'lia alphini', '238'),
(135, 'Agung Satriyo Mulyo', '239'),
(136, 'Anita ananda putri', '240'),
(137, 'Yuni Safitri', '241'),
(138, 'M. Denny Prayitno', '242'),
(139, 'Diah veranita sari', '243'),
(140, 'Rizki Darmawan M.kom', '244'),
(141, 'Suhendri Dwi Prasetyo', '245'),
(142, 'Adi wijaya, M.KOM', '246'),
(143, 'Slamet Sucipto, M.KOM', '247'),
(144, 'Dadang Iskandar M, M. Kom', '248'),
(145, 'Sri Lestari, S.pd, MM', '249'),
(146, 'Sudirman, M.KOM, MM', '250'),
(147, 'Imam Santoso, S.KOM', '251'),
(148, 'Yuma Akbar, S.KOM', '252'),
(149, 'Atik Budi Paryanti, S.PD, MM', '253'),
(150, 'C. Wardiono, S.KOM, MM', '254'),
(151, 'Sutisna, S.KOM', '255'),
(152, 'M. Lutfi', '256'),
(153, 'Heni Nur Safitri', '257'),
(154, 'Gempa Hendratna', '258'),
(155, 'Sonaliaman Gulo', '259'),
(156, 'Andika wido pradana', '260'),
(157, 'Samsudin', '261'),
(158, 'Rizky Defega', '262'),
(159, 'Dhimas Chandra P', '263'),
(160, 'Hani Harafani', '264');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_workshop`
--

CREATE TABLE IF NOT EXISTS `peserta_workshop` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta_workshop`
--

INSERT INTO `peserta_workshop` (`id`, `nama`, `no`) VALUES
(1, 'AHMAD JAZULI', '52'),
(2, 'MASRO SARI', '53'),
(3, 'IMA FATIMAH', '54'),
(4, 'ANIS FITRIYANA', '55'),
(5, 'TAUFIK ANUGRAH', '56'),
(6, 'PRIYAMBODO', '57'),
(7, 'ROSITA OKTAVIANI', '58'),
(8, 'ZULFIKAR KAMAL. T', '59'),
(9, 'AGUS PRIYATNO', '60'),
(10, 'ZAHLUL RUSYDI', '61'),
(11, 'SELIYANTI ASHARI', '62'),
(12, 'ANDREAS ALMEIKA', '63'),
(13, 'ADE BAGUS DERMAWAN', '64'),
(14, 'DEWI PORTUNA', '65'),
(15, 'AXEL FERNANDO', '66'),
(16, 'AMIRULLAH', '67'),
(17, 'SALDY MICHAEL', '68'),
(18, 'OKTAVIA USWATUN. C', '69'),
(19, 'REZKHI DINI ILLAHI', '70'),
(20, 'ALI SUSWANTO', '71'),
(21, 'RIAN GASPERSZ', '72'),
(22, 'AMELIA THERESIA. P', '73'),
(23, 'AULIA ARIF', '74'),
(24, 'DIKA YOHELMI', '75'),
(25, 'ALLBER RIDHO AZURI', '76'),
(26, 'CHRISTIAN BONA PATAR', '77'),
(27, 'TAUFIK HIDAYAT', '78'),
(28, 'RESTY DWI ANGGRAINI', '79'),
(29, 'M. SYARIFUDIN', '80'),
(30, 'MUHAMAD FARKHAN', '81'),
(31, 'DENY YUSUF AKBAR', '82'),
(32, 'SETIAWAN', '83'),
(33, 'PRADANA YUDHISTIRA', '84'),
(34, 'RAFSANJANIGALIH. E', '85'),
(35, 'DWI INDAH NOVITASARI', '86'),
(36, 'APIP TAUFIQURACHMAN', '87'),
(37, 'PUTRA APRIANDI', '88'),
(38, 'RINTO HANDOYO', '89'),
(39, 'ATENG ADHITYA', '90'),
(40, 'INA MUTHIA KANZA', '91'),
(41, 'RATNI ASIH', '92'),
(42, 'AGUS BAHRUDIN', '93'),
(43, 'ANDRI ABDULLAH', '94'),
(44, 'MUHAMAD SABILILLAH', '95'),
(45, 'BAGUS FIRMANSYAH', '96'),
(46, 'KHOIRUL FAHMI', '97'),
(47, 'ARI PRATITASARI', '98'),
(48, 'RETNI ASIH', '99'),
(49, 'RAFSANJANI GALIH E', '100'),
(50, 'TOFIK ANUGRA K', '101'),
(51, 'SETIAWAN', '102'),
(52, 'MUHAMMAD IQBAL', '103'),
(53, 'DHIMAS WICAKSANA A', '104'),
(54, 'INDRA IRWANSYAH', '105');

-- --------------------------------------------------------

--
-- Table structure for table `regis_ulang`
--

CREATE TABLE IF NOT EXISTS `regis_ulang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mhs_kelas` varchar(255) NOT NULL,
  `mhs_jurusan` enum('Teknik Informatika','Sistem Informasi','','') NOT NULL,
  `mhs_semester` varchar(2) NOT NULL,
  `no` varchar(100) NOT NULL,
  `mhs_nim` varchar(20) NOT NULL,
  `mhs_telp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis_ulang`
--

INSERT INTO `regis_ulang` (`id`, `nama`, `mhs_kelas`, `mhs_jurusan`, `mhs_semester`, `no`, `mhs_nim`, `mhs_telp`) VALUES
(1, 'DIKA YOHELMI', 'Kelas Sabtu', 'Teknik Informatika', '4', '57', '1501110038', '088808325903'),
(2, 'RINTO HANDOYO', 'Kelas Minggu', 'Teknik Informatika', '6', '16', '1401110160', '087889456465'),
(3, 'TRIYONO', 'Kelas Minggu', 'Teknik Informatika', '6', '53', '1401110024', '085946191701'),
(4, 'ROSITA OKTAVIANI', 'Kelas Sabtu', 'Teknik Informatika', '4', '11', '1501110078', '081514443095'),
(5, 'OKTAVIA USWATUN CHASANAH', 'Kelas Sabtu', 'Teknik Informatika', '4', '12', '1501150152', '082243523924'),
(6, 'RACHMAT HIDAYAT', 'Kelas Sabtu', 'Teknik Informatika', '4', '24', '1501150153', '085959517044'),
(7, 'PUSPITA SYARAFINA', 'Reguler Pagi', 'Teknik Informatika', '6', '25', '1401110053', '089527240687'),
(8, 'NOVA RATNA SARI', 'Kelas Sabtu', 'Sistem Informasi', '8', '36', '1302110012', '089688174437'),
(9, 'DIKI MUNGGARAN', 'Reguler Malam', 'Teknik Informatika', '4', '59', '1501110039', '089689696474'),
(10, 'MEILIA CITRA DEVI', 'Reguler Malam', 'Sistem Informasi', '6', '46', '1402110015', '083873591322'),
(11, 'SUPARMAN', 'Kelas Sabtu', 'Teknik Informatika', '8', '43', '1602110031', '081317352767'),
(12, 'MUHAMAD BRATA KUSUMA', 'Reguler Malam', 'Teknik Informatika', '8', '54', '1301110129', '081318408743'),
(13, 'SLAMET TRI MULYONO', 'Kelas Minggu', 'Teknik Informatika', '4', '02', '1501110082', '085814972417'),
(14, 'EVI NOVITASARI', 'Kelas Minggu', 'Teknik Informatika', '2', '03', '1601110026', '08567354447'),
(15, 'ILHAM AJI SAPUTRA', 'Kelas Sabtu', 'Teknik Informatika', '4', '13', '1501110048', '081902615213'),
(16, 'ARIFIN YULIANTO', 'Kelas Minggu', 'Teknik Informatika', '2', '48', '1601110015', '085777696196'),
(17, 'TAUFIK HIDAYAT', 'Kelas Sabtu', 'Teknik Informatika', '8', '17', '1301110061', '089647111879'),
(18, 'AHMAD RICKY', 'Reguler Malam', 'Sistem Informasi', '2', '33', '1602111069', '0895348865521'),
(19, 'MUAMAR KHADAFI', 'Kelas Minggu', 'Teknik Informatika', '2', '55', '1601110054', '085777768169'),
(20, 'KENNY SURYA WIJAYA', 'Kelas Sabtu', 'Teknik Informatika', '8', '26', '1301110036', '085775899980'),
(21, 'MASRO SILITONGA', 'Kelas Sabtu', 'Sistem Informasi', '8', '47', '1302110011', '082310746103'),
(22, 'AHMAD FUADY MUSTAHAL', 'Reguler Malam', 'Teknik Informatika', '8', '08', '1301110001', '08562113932'),
(23, 'YUDI ARFIANTO IMAM', 'Kelas Sabtu', 'Teknik Informatika', '6', '10', '1401110155', '08118116684'),
(24, 'HERI RIZKY FIRDAUS', 'Kelas Minggu', 'Teknik Informatika', '4', '01', '1501110047', '085881766433'),
(25, 'ESYA FELLA SULFAH SUKMAASYARI', 'Reguler Pagi', 'Sistem Informasi', '2', '19', '1602110011', '089630425107'),
(26, 'MUHAMMAD YUSUF NURFADLULLAH', 'Reguler Pagi', 'Teknik Informatika', '2', '21', '1601110063', '082111587207'),
(27, 'MUHAMAD RIDWAN', 'Kelas Minggu', 'Teknik Informatika', '4', '07', '1501110061', '08975570987'),
(28, 'EKA PRASETYA RAMADHAN', 'Kelas Sabtu', 'Teknik Informatika', '6', '41', '1401150152', '081213528724'),
(29, 'EKO SUNARYA', 'Kelas Sabtu', 'Teknik Informatika', '6', '42', '1401150155', '081318456095'),
(30, 'ANDRI BUSTANUL ARIFIN', 'Kelas Minggu', 'Sistem Informasi', '6', '52', '1502111020', '085780470857'),
(31, 'RAHMAT WAHYUDIN', 'Kelas Minggu', 'Teknik Informatika', '4', '06', '1501110072', '089665733698'),
(32, 'EKA NURUL SEPRIANA', 'Reguler Malam', 'Sistem Informasi', '6', '27', '1402110023', '085311183952'),
(33, 'SINTO DWI CAHYONO', 'Kelas Sabtu', 'Teknik Informatika', '6', '15', '1401110163', '082213676953'),
(34, 'SEPTA ANUGERAH', 'Kelas Sabtu', 'Teknik Informatika', '8', '45', '1301110039', '083890550915'),
(35, 'PUTRA APRIANDI', 'Reguler Malam', 'Teknik Informatika', '8', '35', '1301110120', '08988286581'),
(36, 'NABILLA FEBRILIA', 'Reguler Pagi', 'Teknik Informatika', '2', '22', '1601110064', '08123012207'),
(37, 'MASLAH', 'Reguler Pagi', 'Sistem Informasi', '2', '20', '1602110020', '082316311236'),
(39, 'ACHMAD SYAFRIZAL', 'Reguler Pagi', 'Teknik Informatika', '6', '14', '1401110074', '089690434696'),
(40, 'ALLBER RIDHO AZURI', 'Kelas Sabtu', 'Teknik Informatika', '4', '56', '1501150175', '087888000085'),
(41, 'NI LUH LISTARINI', 'Kelas Minggu', 'Teknik Informatika', '2', '04', '1601110065', '082346409697'),
(42, 'CHRISTIAN BONA PATAR', 'Kelas Sabtu', 'Teknik Informatika', '4', '18', '1501150151', '088214292765'),
(43, 'SEPTIAN ADZRI', 'Kelas Minggu', 'Teknik Informatika', '2', '50', '1601110082', '089678700527'),
(44, 'AMIR MUCHAMMAD', 'Kelas Minggu', 'Sistem Informasi', '2', '31', '1602110005', '081932653015'),
(45, 'OKI NANDANG PRIYATMOKO', 'Reguler Malam', 'Sistem Informasi', '2', '30', '1602111076', '089691462220'),
(46, 'ADE ARFIAN', 'Kelas Minggu', 'Teknik Informatika', '2', '49', '1601110002', '082260187697'),
(47, 'JUNEDI PASARIBU', 'Kelas Sabtu', 'Teknik Informatika', '8', '34', '1301110034', '081218525481'),
(48, 'ROMY DEWANTARA', 'Reguler Malam', 'Teknik Informatika', '2', '29', '1601110079', '081291360838'),
(49, 'BAGUS FIRMANSYAH', 'Reguler Malam', 'Teknik Informatika', '6', '32', '1401112186', '081290552494'),
(50, 'SOPAN MUKTI', 'Reguler Malam', 'Teknik Informatika', '6', '58', '1401112184', '081280745617'),
(51, 'SUS KRISTIYANINGSIH', 'Reguler Pagi', 'Sistem Informasi', '2', '23', '1602111077', '085729657099'),
(52, 'DIDEN TAOPIQUROHMAN', 'Konversi', 'Teknik Informatika', '8', '44', '1601111095', '08111843000'),
(53, 'ANIS FITRIYANA', 'Reguler Malam', 'Teknik Informatika', '6', '09', '1401110094', '08561976340'),
(54, 'REZKHI DINI ILLAHI', 'Kelas Sabtu', 'Teknik Informatika', '4', '51', '1501150154', '08976897521');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panitiabnn`
--
ALTER TABLE `panitiabnn`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `panitia_seminar_machine`
--
ALTER TABLE `panitia_seminar_machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia_workshop`
--
ALTER TABLE `panitia_workshop`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pesertabnn`
--
ALTER TABLE `pesertabnn`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `peserta_seminar_machine`
--
ALTER TABLE `peserta_seminar_machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta_workshop`
--
ALTER TABLE `peserta_workshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis_ulang`
--
ALTER TABLE `regis_ulang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panitia_seminar_machine`
--
ALTER TABLE `panitia_seminar_machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `peserta_seminar_machine`
--
ALTER TABLE `peserta_seminar_machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `peserta_workshop`
--
ALTER TABLE `peserta_workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
