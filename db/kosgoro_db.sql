-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2017 at 02:32 PM
-- Server version: 10.0.28-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kosgoro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `id_daftar` int(10) NOT NULL,
  `no_reg` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmp_lhr` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `as_sklh` varchar(100) NOT NULL,
  `bin` float NOT NULL,
  `big` float NOT NULL,
  `mat` float NOT NULL,
  `ipa` float NOT NULL,
  `jmlnilai` float NOT NULL,
  `jurpil1` varchar(50) NOT NULL,
  `jurpil2` varchar(50) NOT NULL,
  `ortu` varchar(50) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`id_daftar`, `no_reg`, `password`, `nama`, `tmp_lhr`, `tgl`, `jk`, `as_sklh`, `bin`, `big`, `mat`, `ipa`, `jmlnilai`, `jurpil1`, `jurpil2`, `ortu`, `rt`, `rw`, `alamat`, `no_hp`, `tgl_daftar`, `status`) VALUES
(1, '20160001', '3PGwN', 'ABIMANYU KAUSAR B', 'NGANJUK', '2000-03-10', 'L', 'PAS PACE', 45.5, 46.5, 45.5, 48.9, 186.4, 'TKJ', 'TKJ', 'BAMBANG WIDODO', '07', '01', 'Ds. PACE Kec. PACEKULON NGANJUK', '087139082248', '2016-09-29 09:42:42', 'DITERIMA'),
(2, '20160002', '3QHwW', 'ADE DION SUBEKTI', 'NGANJUK', '2000-08-26', 'L', 'SMPN 1 PACE', 60.1, 38.3, 36.5, 48.5, 183.4, 'TKJ', 'AKT', 'JUARI SUKAD', '07', '02', 'Ds. JETIS Kec. PACE', '089622722203', '2016-09-29 09:44:22', 'DITERIMA'),
(3, '20160003', 'TCteq', 'AGUNG SETIAWAN', 'NGANJUK', '2000-03-01', 'L', 'SMPN 1 SAWAHAN', 60.5, 35.4, 36.5, 55.5, 187.9, 'TKJ', 'TKJ', 'SUPARI', '06', '02', 'Ds. SIDOREJO Kec. SAWAHAN', '087372937383', '2016-09-29 02:54:07', 'DITERIMA'),
(4, '20160004', 'X6xgY', 'AHMAD FARKHAN JIHANSYAH', 'MOJOKERTO', '2000-11-16', 'L', 'SMPN 2 MOJOANYAR MOJOKERTO', 50.1, 39.1, 46.7, 47.2, 183.1, 'TKJ', 'TKJ', 'MOH JUANSYAH', '06', '02', 'MOJOANYAR MOJOKERTO', '083201658927', '2016-09-29 10:02:07', 'DITERIMA'),
(5, '20160005', 'ykHxa', 'ALBAR SUTONI', 'NGANJUK', '2000-01-21', 'L', 'SMP KERTOSONO', 63.5, 38.2, 35.2, 50.4, 187.3, 'TKJ', 'TKJ', 'TONI RAHMAN', '06', '01', 'Ds. PLOSO Kec. NGANJUK', '083112738927', '2016-09-29 10:05:45', 'DITERIMA'),
(6, '20160006', '7EWq2', 'ANISTIN', 'NGANJUK', '2000-08-19', 'P', 'SMPN 1 SUKOMORO', 61.5, 37.4, 34.1, 52.1, 185.1, 'PM', 'PM', 'JAINUDIN', '07', '02', 'Ds. SUMBER KEPUH Kec. SUKOMORO', '089774829273', '2016-10-02 21:19:45', 'DITERIMA'),
(7, '20160007', 'F3PZr', 'ANAN BASOFI', 'PATI', '2000-10-20', 'L', 'SMPN 6 NGANJUK', 61.2, 36.5, 38.3, 46.4, 182.4, 'AKT', 'AKT', 'SUMARTO', '08', '02', 'Ds. KAUMAN Kec. NGANJUK', '039884892029', '2016-10-07 23:44:52', 'DITERIMA'),
(8, '20160008', 't95Sw', 'ANDRI PANGESTU', 'NGANJUK', '2000-10-12', 'L', 'SMPN 1 REJOSO', 53.1, 42.4, 41.2, 47.1, 183.8, 'TKJ', 'TKJ', 'RAMLAN', '05', '02', 'Ds. SIDOKARE Kec. REJOSO', '087625356120', '2016-10-18 10:47:35', 'DITERIMA'),
(9, '20160009', 'xzTYx', 'AMAT ZAILANI', 'NGANJUK', '2000-10-13', 'L', 'SMPN 3 REJOSO', 61.1, 36.5, 34.1, 50.2, 181.9, 'TKJ', 'TKJ', 'MAHMUDI', '07', '02', 'Ds. SETREN Kec. NGANJUK', '083721800183', '2016-10-18 10:54:49', 'DITERIMA'),
(10, '20160010', 'zm3t9', 'ANDRIANTO', 'NGANJUK', '2000-10-27', 'L', 'SMPN 1 REJOSO', 60.5, 38.6, 33.4, 50, 182.5, 'TKJ', 'TKJ', 'NUR ROHMAN', '06', '01', 'Ds. SUKOREJO Kec. NGANJUK', '082132405538', '2016-10-18 11:00:45', 'DITERIMA'),
(11, '20160011', '8TDLc', 'AFRILIANA WIJIANTI', 'NGANJUK', '2000-11-01', 'P', 'SMPN 1 SUKOMORO', 61, 35.1, 40.5, 46.7, 183.3, 'AKT', 'PM', 'MOH JUANSYAH', '05', '01', 'Ds. PEHSERUT Kec. SUKOMORO', '089381003282', '2016-10-18 11:04:51', 'DITERIMA'),
(12, '20160012', 'q7c54', 'ALIYATUL ZAHROK', 'NGANJUK', '2000-10-25', 'P', 'MTsN BERBEK', 59.2, 40.2, 39.1, 48.3, 186.8, 'AKT', 'AKT', 'DWI SUKAMTO', '03', '02', 'Ds. SUMBER URIP Kec. BERBEK', '085772016292', '2016-10-18 11:09:59', 'DITERIMA'),
(13, '20160013', 'NEfAG', 'ALVITA ROBIATUL ADAWIYAH', 'NGANJUK', '2000-12-17', 'P', 'SMPN 3 NGANJUK', 60.1, 39.5, 33.2, 54.1, 186.9, 'AKT', 'PM', 'MOHAMMAD BUSRO', '04', '01', 'Ds. KRAMAT Kec. NGANJUK', '087122032801', '2016-10-18 11:14:25', 'DITERIMA'),
(14, '20160014', 'X2sfg', 'AMELITA LISTIANA', 'NGANJUK', '2000-01-03', 'P', 'SMPN 6 NGANJUK', 61.2, 37.1, 35.3, 50.9, 184.5, 'AKT', 'PM', 'BAMBANG WIRYONO', '07', '02', 'Ds. PLOSO Kec. NGANJUK', '087322104558', '2016-10-18 11:17:34', 'DITERIMA'),
(15, '20160015', 'ynkC6', 'ANDRIAN', 'NGANJUK', '2000-06-06', 'L', 'SMPN 2 SAWAHAN', 62.1, 38.3, 32.6, 54.5, 187.5, 'AKT', 'AKT', 'SUKAD', '06', '01', 'Ds. NGLIMAN Kec. SAWAHAN', '082138483902', '2016-10-18 11:20:43', 'DITERIMA'),
(16, '20160016', 'eLrtj', 'ANGGA SANTIAJI', 'NGANJUK', '2000-04-27', 'L', 'SMPN 2 SAWAHAN', 60.2, 35.4, 34.5, 56.2, 186.3, 'AKT', 'PM', 'AHMAD SETIAJI', '08', '01', 'Ds. SIDOREJO Kec. SAWAHAN', '085109283211', '2016-10-18 11:24:52', 'DITERIMA'),
(17, '20160017', 'n3gGD', 'ANIS PRAMETIA', 'NGANJUK', '2000-06-27', 'P', 'SMPN 6 NGANJUK', 63.1, 35.6, 33.7, 52.1, 184.5, 'AKT', 'AKT', 'SOBARI', '07', '02', 'Ds. RINGIN ANOM Kec. NGANJUK', '089231738145', '2016-10-18 11:27:36', 'DITERIMA'),
(18, '20160018', 'eqHPR', 'ARIESTA DINI ASTARI', 'NGANJUK', '2000-08-27', 'P', 'SMPN 1 SUKOMORO', 60.2, 36.7, 34.3, 56.3, 187.5, 'AKT', 'AKT', 'RUSLAN', '06', '01', 'Ds. BLITARAN Kec. SUKOMORO', '081277335190', '2016-10-18 11:30:19', 'DITERIMA'),
(19, '20160019', 'NxRhq', 'ARVI KUSUMA MELATI', 'NGANJUK', '2000-07-24', 'P', 'SMPN 7 NGANJUK', 63.1, 34.5, 32.1, 56.4, 186.1, 'AKT', 'AKT', 'RUSLAN EFENDI', '08', '01', 'Ds. WERUNGOTOK Kec. NGANJUK', '085321022649', '2016-10-18 12:20:28', 'DITERIMA'),
(20, '20160020', 'c3MpN', 'BINTI KHOIRU NIK´AMAH', 'NGANJUK', '2000-09-12', 'P', 'MTsN BERBEK', 62.1, 36.2, 34.1, 53.2, 185.6, 'PM', 'PM', 'MARWAN', '06', '01', 'Ds. SENGKUT Kec. BERBEK', '087610242887', '2016-10-18 12:23:28', 'DITERIMA'),
(21, '20160021', '7WTKC', 'CRISTINA VENEL VONISTION', 'NGANJUK', '2000-10-20', 'P', 'MTS TAUHIDIYAH 2', 60.4, 37.2, 35.4, 53.1, 186.1, 'PM', 'PM', 'SADEWO RUSLI', '05', '01', 'Ds. GANUNG KIDUL Kec. NGANJUK', '087346235190', '2016-10-18 12:26:21', 'DITERIMA'),
(22, '20160022', 'eHzCM', 'DEVI AINUR RAHMA', 'NGANJUK', '2000-07-18', 'P', 'MTs PSM PACE', 63.1, 34.9, 35.6, 53.2, 186.8, 'PM', 'PM', 'PUSPITO ROHMAN', '04', '02', 'Ds. KECUBUNG Kec. PACE', '089182054822', '2016-10-18 12:29:56', 'DITERIMA'),
(23, '20160023', 'Hn5d2', 'DWI INTAN PERWATI', 'NGANJUK', '2000-11-04', 'P', 'SMPN 1 KUNJANG', 64.3, 35.4, 32.7, 53.5, 185.9, 'PM', 'PM', 'SUKARDI', '06', '01', 'Ds. LASEM Kec. KUNJANG', '089457621103', '2016-10-18 12:34:21', 'DITERIMA'),
(24, '20160024', '5dQ73', 'DWI WIGATI NINGSIH', 'NGANJUK', '2000-09-27', 'P', 'SMPN 2 BERBEK', 63.1, 35.6, 32.7, 52.3, 183.7, 'PM', 'PM', 'SUHARTO', '06', '01', 'Ds. CEPOKO Kec. BERBEK', '081230183455', '2016-10-18 12:42:05', 'DITERIMA'),
(25, '20160025', 'OjaLN', 'DYAH AYU AGUSTINA', 'NGANJUK', '2000-08-26', 'P', 'SMPN 1 PACE', 62.5, 34.4, 33.7, 52.3, 182.9, 'PM', 'PM', 'RUSDI', '05', '01', 'Ds. JOHO Kec. PACE', '089267390122', '2016-10-18 12:44:20', 'DITERIMA'),
(26, '20160026', 'PLf2C', 'ERRITTE SARI DIANA', 'NGANJUK', '2000-07-29', 'P', 'SMPN 1 PACE', 63.1, 34.5, 32.7, 52.3, 182.6, 'PM', 'PM', 'DWI SUKAMTO', '05', '01', 'Ds. SANAN Kec. PACE', '085198362300', '2016-10-18 12:48:23', 'DITERIMA'),
(27, '20160027', 'mCmXq', 'ANGGI OKTA VIARINI', 'NGANJUK', '2000-08-25', 'P', 'SMPN 1 BAGOR', 63.1, 36.2, 32.7, 50.5, 182.5, 'TKJ', 'TKJ', 'AGUS SUSANTO', '04', '02', 'Ds. GIRI REJO Kec. BAGOR', '082197827113', '2016-10-18 21:33:26', 'DITERIMA'),
(28, '20160028', '8D9kK', 'ANGGORO CATURIANTO UTOMO', 'NGANJUK', '2000-06-14', 'L', 'SMPN 3 NGANJUK', 63.2, 34.5, 32.7, 50.5, 180.9, 'TKJ', 'TKJ', 'MUKTAR', '03', '02', 'Ds. PLOSO Kec. NGANJUK', '087210462991', '2016-10-18 21:36:00', 'DITERIMA'),
(29, '20160029', '1RySh', 'APRILIA DIAH PUSPITASARI', 'NGANJUK', '2000-07-19', 'P', 'SMPN 2 NGANJUK', 61.5, 37.1, 32.4, 50.4, 181.4, 'TKJ', 'TKJ', 'SUTRISNO', '07', '01', 'Ds. KAUMAN Kec. NGANJUK', '085267190442', '2016-10-18 21:38:38', 'DITERIMA'),
(30, '20160030', 'rkF1G', 'BAMBANG KURNIAWAN', 'NGANJUK', '2000-07-15', 'L', 'SMPN 3 REJOSO', 64.5, 34.2, 33.5, 50.1, 182.3, 'TKJ', 'TKJ', 'HERLAMBANG', '06', '01', 'Ds. SIDOKARE Kec. NGANJUK', '089519667130', '2016-10-18 21:41:27', 'DITERIMA'),
(31, '20160031', 'y4O1m', 'BAYU DWI JATMIKO', 'NGANJUK', '2000-05-02', 'L', 'SMPN 6 NGANJUK', 62.4, 35.5, 33.7, 51.6, 183.2, 'TKJ', 'TKJ', 'SUHARDI', '06', '01', 'Ds. MANGUNDIKARAN Kec. NGANJUK', '082164927301', '2016-10-18 21:43:49', 'DITERIMA'),
(32, '20160032', 'KD3xO', 'BAYU SUKMA SAPUTRA', 'NGANJUK', '2000-04-13', 'L', 'SMPN 5 NGANJUK', 63.1, 34.5, 32.7, 51.5, 181.8, 'TKJ', 'AKT', 'SUKARNO', '05', '01', 'Ds. CANGKRINGAN Kec. NGANJUK', '082145012348', '2016-10-18 21:45:52', 'DITERIMA'),
(33, '20160033', '8cW43', 'BELLA SENJA WULAN FEBRIANTI', 'NGANJUK', '2000-06-15', 'P', 'SMPN 4 NGANJUK', 62.2, 36.1, 32.4, 49.8, 180.5, 'TKJ', 'TKJ', 'EKO NUGROHO', '02', '01', 'Ds. RINGIN ANOM Kec. NGANJUK', '087319034286', '2016-10-18 21:47:51', 'DITERIMA'),
(34, '20160034', 'Eax93', 'BRIZA TRI WAHYUNINGTYAS', 'NGANJUK', '2000-11-03', 'P', 'SMPN 1 SUKOMORO', 60.5, 35.6, 34.5, 51.5, 182.1, 'TKJ', 'AKT', 'SUPARYONO', '01', '01', 'Ds. BUNGOR Kec. SUKOMORO', '082159162703', '2016-10-18 21:50:29', 'DITERIMA'),
(35, '20160035', '4T9pE', 'CHOLIS RAHMAWATI', 'NGANJUK', '2000-12-02', 'P', 'SMPN 1 WILANGAN', 60.5, 36.5, 33.7, 50.1, 180.8, 'TKJ', 'AKT', 'NUR CHOLIS', '03', '01', 'Ds. NGADIPURO Kec. WILANGAN', '083901546811', '2016-10-18 22:07:00', 'DITERIMA'),
(36, '20160036', '8b85t', 'DANANG BAYU AGUS PRASTYO', 'NGANJUK', '2000-10-01', 'L', 'SMPN 2 NGANJUK', 61.5, 35.6, 34.5, 52.2, 183.8, 'TKJ', 'AKT', 'AGUS PRASETYO', '08', '01', 'Ds. BALONG PACUL Kec. NGANJUK', '082172100582', '2016-10-18 22:10:14', 'DITERIMA'),
(37, '20160037', 'PR1LS', 'DANNI PRIYO SIGIT', 'NGANJUK', '2000-11-04', 'L', 'SMPN 3 BAGOR', 64.1, 35.2, 32.6, 51.5, 183.4, 'TKJ', 'AKT', 'SUPRIYONO', '06', '01', 'Ds. PESU DUKUH Kec. REJOSO', '089627701138', '2016-10-18 22:12:45', 'DITERIMA'),
(38, '20160038', 'jFL9H', 'DEDI TRISNADI', 'NGANJUK', '2000-10-31', 'L', 'SMPN 1 REJOSO', 60.5, 34.5, 32.7, 52.5, 180.2, 'TKJ', 'TKJ', 'KURNIAWAN', '04', '02', 'Ds. KLAGEN Kec. REJOSO', '082183064493', '2016-10-18 22:15:19', 'DITERIMA'),
(39, '20160039', 'P9D5p', 'DEVI DIANA NOVITASARI', 'NGANJUK', '2000-11-02', 'P', 'SMPN 1 SUKOMORO', 64.5, 35.7, 34.5, 51.4, 186.1, 'TKJ', 'TKJ', 'KOHAR', '06', '02', 'Ds. NGLUNDO Kec. SUKOMORO', '082192301083', '2016-10-18 22:17:32', 'DITERIMA'),
(40, '20160040', 'GEjrX', 'DEVI TRI CAHYANINGRUM', 'NGANJUK', '2000-06-01', 'P', 'SMPN 2 WILANGAN', 62.4, 35.4, 32.7, 50.2, 180.7, 'TKJ', 'AKT', 'SULISTYO', '07', '01', 'Ds. MANCON Kec. NGANJUK', '083594721063', '2016-10-18 22:20:10', 'DITERIMA'),
(41, '20160041', 'NbDcG', 'DIMAS ADITYA', 'NGANJUK', '2000-04-15', 'L', 'SMPN 3 REJOSO', 62.3, 37.2, 32.6, 52.7, 184.8, 'TKJ', 'AKT', 'SASMITRO', '05', '01', 'Ds. JATIREJO Kec. REJOSO', '087421830591', '2016-10-19 22:49:53', 'DITERIMA'),
(42, '20160042', 'ztnfa', 'DWI AGUNG PRAYITNO', 'NGANJUK', '2000-06-22', 'L', 'SMPN 6 NGANJUK', 64.1, 35.4, 34.2, 54.1, 187.8, 'TKJ', 'TKJ', 'SUPRAYITNO', '06', '02', 'Ds. KEDUNGDOWO Kec. NGANJUK', '085723611904', '2016-10-19 22:52:02', 'DITERIMA'),
(43, '20160043', 'Q3QE6', 'DWI FITRI  VIVIT WIYANTI', 'NGANJUK', '2000-07-08', 'P', 'SMPN 1 PACE', 63.2, 36.2, 32.1, 49.7, 181.2, 'TKJ', 'AKT', 'KUNARSO', '04', '02', 'Ds. BATEMBAT Kec. PACE', '089672391255', '2016-10-19 22:54:22', 'DITERIMA'),
(44, '20160044', 'yjfhe', 'EDO BAGUS PRASTYA', 'NGANJUK', '2000-08-10', 'L', 'SMPN 1 SAWAHAN', 60.5, 37.4, 34.5, 52.1, 184.5, 'TKJ', 'TKJ', 'EDI WIJANARKO', '07', '01', 'Ds. BARENG Kec. SAWAHAN', '082119437630', '2016-10-19 22:56:42', 'DITERIMA'),
(45, '20160045', 'rSMXq', 'ENDRIKO GADING PRATAMA', 'NGANJUK', '2000-09-14', 'L', 'SMPN 3 NGANJUK', 61.5, 35.4, 33.7, 52.1, 182.7, 'TKJ', 'AKT', 'SUNANDAR', '04', '02', 'Ds. BOGO Kec. NGANJUK', '083716944028', '2016-10-19 22:58:59', 'DITERIMA'),
(46, '20160046', 'Pj1Nm', 'EVI LUVITA SARI', 'NGANJUK', '2000-06-06', 'P', 'SMPN 6 NGANJUK', 60.8, 36.2, 34.5, 52.4, 183.9, 'TKJ', 'TKJ', 'SUHENDRO', '07', '01', 'Ds. BEGADUNG Kec. NGANJUK', '089872103351', '2016-10-19 23:01:11', 'DITERIMA'),
(47, '20160047', 'Omss3', 'FAHRIZAL WAHYU PRASETYO', 'NGANJUK', '2000-12-31', 'L', 'SMPN 1 BAGOR', 63.4, 36.7, 34.5, 51.3, 185.9, 'TKJ', 'TKJ', 'SUTOYO', '06', '02', 'Ds. SEKARPUTIH Kec. BAGOR', '083629106327', '2016-10-19 23:04:07', 'DITERIMA'),
(48, '20160048', 'hgSz2', 'FEBRIYANA PUTRI', 'NGANJUK', '2000-11-18', 'P', 'SMPN 1 SUKOMORO', 60.6, 35.3, 33.5, 51.4, 180.8, 'TKJ', 'TKJ', 'SIMAN', '05', '01', 'Ds. PEHSERUT Kec. SUKOMORO', '083280511944', '2016-10-19 23:06:50', 'DITERIMA'),
(49, '20160049', 'bajtz', 'FELISIA JUNIAR', 'NGANJUK', '2000-08-16', 'P', 'SMPN 2 WILANGAN', 64.1, 35.4, 32.5, 50.2, 182.2, 'TKJ', 'PM', 'JUHARI', '06', '02', 'Ds. NGUDIKAN Kec. WILANGAN', '087915260411', '2016-10-19 23:09:29', 'DITERIMA'),
(50, '20160050', 'L287w', 'FIRNANDA DWI PRASTYA', 'NGANJUK', '2000-09-23', 'L', 'SMPN 3 BAGOR', 63.1, 34.5, 33.7, 52.3, 183.6, 'TKJ', 'TKJ', 'PRASTYONO', '04', '01', 'Ds. GANDU Kec. BAGOR', '082162037558', '2016-10-19 23:11:38', 'DITERIMA'),
(51, '20160051', 'yg555', 'GINANTO EKO PRASTYA', 'NGANJUK', '2000-07-28', 'L', 'SMPN 3 REJOSO', 61.5, 35.4, 34.5, 52.2, 183.6, 'TKJ', 'TKJ', 'GUNADI', '05', '02', 'Ds. MLORAH Kec. REJOSO', '083421093677', '2016-10-20 21:31:35', 'DITERIMA'),
(52, '20160052', 'Fenwc', 'INDAH NUR ISTIANI', 'NGANJUK', '2000-08-11', 'P', 'SMPN 2 BAGOR', 63.2, 37.2, 32.4, 53.4, 186.2, 'TKJ', 'AKT', 'SUMARDI', '03', '01', 'Ds. SUGIH WARAS Kec. BAGOR', '082129451607', '2016-10-20 21:35:03', 'DITERIMA'),
(53, '20160053', 'xEfZ4', 'INTAN MEILIA PUTRI', 'NGANJUK', '2000-06-23', 'P', 'SMPN 1 SUKOMORO', 60.5, 35.4, 32.7, 51.6, 180.2, 'TKJ', 'PM', 'SUKANDAR', '04', '02', 'Ds. NGLUNDO Kec. SUKOMORO', '087290347681', '2016-10-20 21:37:29', 'DITERIMA'),
(54, '20160054', 'zP7Z1', 'ITA WAHYUNINGSIH', 'NGANJUK', '2000-09-13', 'P', 'SMPN 3 BAGOR', 61.5, 35.4, 32.7, 52.1, 181.7, 'TKJ', 'AKT', 'KARTONO', '01', '03', 'Ds. PARON Kec. BAGOR', '081567291830', '2016-10-20 21:40:05', 'DITERIMA'),
(55, '20160055', 'w4QPz', 'IVANDA ARYUDA PRADANA', 'NGANJUK', '2000-11-06', 'L', 'SMPN 2 BAGOR', 63.1, 34.5, 32.7, 52.5, 182.8, 'TKJ', 'AKT', 'SUNARTO', '05', '02', 'Ds. GANDU Kec. BARON', '085147025811', '2016-10-20 21:43:00', 'DITERIMA'),
(56, '20160056', 'q94XY', 'JOHAN MERDIANTORO', 'NGANJUK', '2000-09-20', 'L', 'SMPN 3 REJOSO', 63.1, 34.5, 32.7, 51.5, 181.8, 'TKJ', 'TKJ', 'JUMADI', '05', '02', 'Ds. MUSIR LOR Kec. SIDOKARE', '085213782011', '2016-10-20 21:46:02', 'DITERIMA'),
(57, '20160057', '7EDQD', 'JONI FEBRIANTO', 'NGANJUK', '2000-07-14', 'L', 'SMPN 2 SAWAHAN', 65.1, 35.2, 31.3, 52.1, 183.7, 'TKJ', 'AKT', 'KUNARDI', '03', '01', 'Ds. MARGOPATUT Kec. SAWAHAN', '089116227905', '2016-10-20 21:48:59', 'DITERIMA'),
(58, '20160058', '7Q3LP', 'JONI TIMAN', 'NGANJUK', '2000-08-18', 'L', 'SMPN 6 NGANJUK', 61.5, 35.6, 33.2, 50.2, 180.5, 'TKJ', 'AKT', 'KADAR', '02', '02', 'Ds. BALONG PACUL Kec. NGANJUK', '083273820183', '2016-10-20 21:51:15', 'DITERIMA'),
(59, '20160059', 'P5RCT', 'JUNIA KRISTINAWATI', 'JOMBANG', '2000-06-09', 'P', 'SMP BAHRUL ULUM JOMBANG', 63.1, 35.4, 34.5, 50.5, 183.5, 'TKJ', 'AKT', 'KRISTANTO', '01', '01', 'Ds. JOMBANG Kec. JOMBANG', '081362906711', '2016-10-20 21:53:31', 'DITERIMA'),
(60, '20160060', '6XXcB', 'JUNIAR ANGRIAWAN', 'NGANJUK', '2000-05-06', 'L', 'SMPN 6 NGANJUK', 60.5, 35.4, 33.7, 52.1, 181.7, 'TKJ', 'TKJ', 'AGUS PRATONO', '06', '03', 'Ds. BEGADUNG Kec. NGANJUK', '083128491021', '2016-10-20 21:55:31', 'DITERIMA'),
(61, '20160061', 'K4Lsn', 'KARTIAS DWI YANTI', 'NGANJUK', '2000-07-21', 'P', 'MTsN NGANJUK', 62.6, 36.4, 32.5, 51.2, 182.7, 'TKJ', 'AKT', 'PRIYONO', '02', '02', 'Ds. WERUNGOTOK Kec. NGANJUK', '082159214733', '2016-10-20 21:57:52', 'DITERIMA'),
(62, '20160062', 'dTAYZ', 'KRISNAWATI', 'NGANJUK', '2000-05-18', 'P', 'SMPN 1 NGLUYU', 63.1, 35.4, 32.7, 52.1, 183.3, 'TKJ', 'TKJ', 'KUSTIONO', '03', '01', 'Ds. TEMPURAN Kec. NGLUYU', '083122694788', '2016-10-20 22:00:39', 'DITERIMA'),
(63, '20160063', 'wZGhX', 'KUKUH WAHYU UTOMO', 'NGANJUK', '2000-04-23', 'L', 'SMPN 3 BAGOR', 63.1, 35.4, 32.7, 50.2, 181.4, 'TKJ', 'PM', 'BAMBANG HADI PRAYITNO', '04', '01', 'Ds. PETAK Kec. BAGOR', '085732118944', '2016-10-20 22:03:27', 'DITERIMA'),
(64, '20160064', 'qb7dz', 'LAYLI NURUR RAHMAH', 'NGANJUK', '2000-10-13', 'P', 'MTsN NGANJUK', 60.5, 34.5, 34.2, 52.3, 181.5, 'TKJ', 'PM', 'AGUS MARWAN', '04', '02', 'Ds. CANGKRINGAN Kec. NGANJUK', '082153283021', '2016-10-20 22:07:14', ''),
(65, '20160065', 'gy9T6', 'LINDA HAYU PANGASTUTI', 'NGANJUK', '2000-10-25', 'L', 'SMPN 2 WILANGAN', 63.2, 36.2, 34.5, 50.2, 184.1, 'TKJ', 'PM', 'SUHENDAR', '05', '01', 'Ds. MANCON Kec. WILANGAN', '081492037841', '2016-10-20 22:09:34', ''),
(66, '20160066', 'QNZRL', 'MELANIA NANDA KARTIKA', 'NGANJUK', '2000-08-27', 'P', 'SMPN 2 TANJUNGANOM', 63.6, 37.1, 32.4, 50.2, 183.3, 'TKJ', 'AKT', 'SULISTYO', '08', '01', 'Ds. WATES Kec. TANJUNGANOM', '089327312575', '2016-10-20 22:13:25', ''),
(67, '20160067', '6NWt4', 'NABILLA BERLIANA SHINTA PUTERI', 'NGANJUK', '2000-06-23', 'P', 'SMPN 5 NGANJUK', 63.1, 35.4, 34.1, 52.3, 184.9, 'TKJ', 'AKT', 'WAHYUDI S.', '06', '02', 'Ds. BOGO Kec. NGANJUK', '089364122941', '2016-10-20 22:16:20', ''),
(68, '20160068', 'EyyWH', 'NURUL AZIZAH', 'NGANJUK', '2000-07-24', 'P', 'SMPN 5 NGANJUK', 62.6, 36.2, 34.5, 50.2, 183.5, 'TKJ', 'AKT', 'SUDARMADI', '03', '01', 'Ds. KRAMAT Kec. NGANJUK', '083721922731', '2016-10-20 22:18:41', ''),
(69, '20160069', 'NTPhO', 'PURNOMO', 'NGANJUK', '2000-05-26', 'L', 'SMPN 6 NGANJUK', 63.5, 37.1, 34.6, 48.4, 183.6, 'TKJ', 'AKT', 'RAMITO', '04', '02', 'Ds. PAYAMAN Kec. NGANJUK', '083741290335', '2016-10-20 22:20:55', ''),
(70, '20160070', 'NKPme', 'PUTRI DWI ASTUTI', 'NGANJUK', '2000-03-31', 'P', 'SMPN 1 SUKOMORO', 62.7, 35.1, 34.4, 49.5, 181.7, 'TKJ', 'AKT', 'SUSILO', '04', '02', 'Ds. NGLUNDO Kec. SUKOMORO', '083742109281', '2016-10-20 22:23:25', ''),
(71, '20160071', 'KTrzm', 'PUTRI PEPRILIYA WAHYU NINGSIH', 'NGANJUK', '2000-07-19', 'P', 'SMPN 2 PACE', 60.6, 36.5, 34.5, 52.1, 183.7, 'TKJ', 'TKJ', 'SUPARDI', '04', '02', 'Ds. JOHO Kec. PACE', '085326410922', '2016-10-22 19:31:11', ''),
(72, '20160072', 'mQWDF', 'QOYYUUM NUR AFIFAH UTOMO', 'NGANJUK', '2000-10-01', 'P', 'SMPN 6 NGANJUK', 63.1, 34.2, 33.1, 51.2, 181.6, 'TKJ', 'AKT', 'KANDAR', '07', '02', 'Ds. KRAMAT Kec. NGANJUK', '083572819378', '2016-10-22 19:33:32', ''),
(73, '20160073', 'ZEPOT', 'ASRI WINDAYANI', 'NGANJUK', '2000-05-18', 'P', 'SMPN 1 NGLUYU', 60.8, 36.7, 35.6, 52.5, 185.6, 'AKT', 'PM', 'SUPRIYADI', '06', '01', 'Ds. BAJANG Kec. NGLUYU', '085219841267', '2016-10-22 19:36:16', 'DITERIMA'),
(74, '20160074', 'TrqEp', 'AYU INDRAS WARI', 'NGANJUK', '2000-04-30', 'P', 'SMPN 2 BERBEK', 62.3, 36.4, 32.6, 51.2, 182.5, 'AKT', 'PM', 'AGUS SUJARWADI', '03', '03', 'Ds. MLILIR Kec. BERBEK', '082164732091', '2016-10-22 19:39:13', 'DITERIMA'),
(75, '20160075', 'Wx2m8', 'AYU MARTI RAHAYU', 'NGANJUK', '2000-03-31', 'P', 'SMPN 3 BAGOR', 61.5, 36.2, 34.1, 51.3, 183.1, 'AKT', 'PM', 'JAMALUDIN', '06', '01', 'Ds. PARON Kec. BAGOR', '087921639021', '2016-10-22 19:41:07', 'DITERIMA'),
(76, '20160076', 'FmEEZ', 'AYU NUR ALFINA', 'NGANJUK', '2000-06-16', 'P', 'MTsN BERBEK', 61.5, 37.2, 34.5, 52.1, 185.3, 'AKT', 'PM', 'DWI SUSILO', '05', '01', 'Ds. TIRIPAN Kec. BERBEK', '083221537208', '2016-10-22 20:45:53', 'DITERIMA'),
(77, '20160077', 'ehk6z', 'BELLA PUTRA HANDIKA', 'NGANJUK', '2000-08-10', 'L', 'SMPN 6 NGANJUK', 60.5, 36.4, 33.1, 51.3, 181.3, 'AKT', 'PM', 'SUGENG', '04', '02', 'Ds. KAUMAN Kec. NGANJUK', '083473920165', '2016-10-22 20:48:00', 'DITERIMA'),
(78, '20160078', '7TREB', 'BINTI NUR BUDIASIH', 'NGANJUK', '2000-09-07', 'P', 'SMPN 1 SUKOMORO', 60.5, 36.5, 34.5, 52.1, 183.6, 'AKT', 'PM', 'SULISTYO', '04', '03', 'Ds. KAPAS Kec. SUKOMORO', '089327317012', '2016-10-22 20:50:37', 'DITERIMA'),
(79, '20160079', 'cHpqj', 'CRISTIKA KARUNIA SANI', 'SUKOHARJO', '2000-10-12', 'P', 'SMPN 2 POLOKARTO SUKOHARJO', 62.5, 35.5, 34.5, 52.3, 184.8, 'AKT', 'PM', 'MAULANA', '05', '01', 'Ds. POLOKARTO Kec. SUKOHARJO Kab. SUKOHARJO', '087283291039', '2016-10-22 20:52:53', 'DITERIMA'),
(80, '20160080', 'fN3mm', 'DAMIANTO', 'NGANJUK', '2000-11-05', 'L', 'SMPN 1 SAWAHAN', 61.5, 35.4, 32.7, 52.3, 181.9, 'AKT', 'PM', 'DARMINTO', '04', '02', 'Ds. BARENG Kec. SAWAHAN', '085312830457', '2016-10-22 20:55:09', 'DITERIMA'),
(81, '20160081', '2rpEy', 'DAYANTI AYU SARI', 'NGANJUK', '2000-10-19', 'P', 'SMPN 2 NGANJUK', 59.4, 37.6, 34.2, 50.1, 181.3, 'AKT', 'PM', 'DAYAT', '05', '01', 'Ds. PLOSO Kec. NGANJUK', '083281766401', '2016-10-22 20:57:13', 'DITERIMA'),
(82, '20160082', 'skdKm', 'DEFITA SARI', 'NGANJUK', '2000-06-22', 'P', 'SMPN  NGLUYU', 64.1, 35.4, 34.1, 52.1, 185.7, 'AKT', 'PM', 'SUPARNO', '08', '01', 'Ds. LENGKONG LOR Kec. NGLUYU', '083280945532', '2016-10-22 20:59:13', 'DITERIMA'),
(83, '20160083', 'yC3Oa', 'DEPY CARTIKA SARI', 'NGANJUK', '2000-11-24', 'P', 'SMP 17 LOCERET', 63.2, 36.2, 34.5, 51.5, 185.4, 'AKT', 'PM', 'SUJATMIKO', '05', '01', 'Ds. PATIHAN Kec. LOCERET', '082147583927', '2016-10-22 21:01:12', 'DITERIMA'),
(84, '20160084', 'sOjSQ', 'DESY SETYO NINGRUM', 'NGANJUK', '2000-10-17', 'P', 'SMPN 2 NGANJUK', 63.1, 35.4, 34.5, 52.3, 185.3, 'AKT', 'AKT', 'SUDARMONO', '05', '02', 'Ds. PLOSO Kec. NGANJUK', '085638291340', '2016-10-22 21:03:47', 'DITERIMA'),
(85, '20160085', 'MnfAP', 'DEVI TRI UTAMI', 'NGANJUK', '2000-10-24', 'P', 'MTsN BERBEK', 61.1, 37.5, 35.5, 50.1, 184.2, 'AKT', 'PM', 'MARTONO', '08', '01', 'Ds. MLILIR Kec. BERBEK', '083756372081', '2016-10-22 21:05:58', 'DITERIMA'),
(86, '20160086', 'ecBnj', 'DEWANDA AGUSTIN', 'NGANJUK', '2000-10-21', 'P', 'SMPN 2 BERBEK', 61.5, 34.5, 35.6, 50.1, 181.7, 'AKT', 'PM', 'PARSIDI', '06', '02', 'Ds. SENGKUT Kec. BERBEK', '085749621038', '2016-10-22 21:07:47', 'DITERIMA'),
(87, '20160087', 'Bjfr2', 'DEWI KUSNUL KHOTIMAH', 'NGANJUK', '2000-08-27', 'P', 'SMPN 3 REJOSO', 60.5, 34.5, 36.5, 52.3, 183.8, 'AKT', 'PM', 'SUSANTO', '07', '02', 'Ds. SETREN Kec. REJOSO', '087364028311', '2016-10-22 21:10:02', 'DITERIMA'),
(88, '20160088', 'm5MN2', 'DEWI QUROTA´AYUN', 'NGANJUK', '2000-07-30', 'P', 'MTsN BERBEK', 60.5, 35.4, 35.6, 52.1, 183.6, 'AKT', 'AKT', 'RAHMAD WIDODO', '04', '03', 'Ds. MAGUAN Kec. BERBEK', '089347513147', '2016-10-22 21:11:56', 'DITERIMA'),
(89, '20160089', 'PQ6cR', 'DIANA FITRI RAHAYU', 'NGANJUK', '2000-09-29', 'P', 'SMPN 2 NGANJUK', 62.2, 34.3, 35.5, 51.2, 183.2, 'AKT', 'PM', 'SUKAMTO', '07', '01', 'Ds. GANUNG KIDUL Kec. NGANJUK', '082157839477', '2016-10-22 21:14:04', 'DITERIMA'),
(90, '20160090', 'q1m4b', 'DINA PUJI LESTARI', 'NGANJUK', '2000-06-29', 'P', 'SMP ALAROOF MUNGKUNG', 59.8, 37.5, 35.4, 50.1, 182.8, 'AKT', 'PM', 'SUKADIR', '01', '03', 'Ds. MUNGKUNG Kec. REJOSO', '081573821066', '2016-10-22 21:16:29', 'DITERIMA'),
(91, '20160091', 'q9m2d', 'DISTIANA WATI', 'NGANJUK', '2000-07-23', 'P', 'SMPN 5 NGANJUK', 59.7, 35.4, 36.8, 49.5, 181.4, 'AKT', 'PM', 'SUKANDAR', '03', '02', 'Ds. PAYAMAN Kec. NGANJUK', '083524026211', '2016-10-22 21:18:38', 'DITERIMA'),
(92, '20160092', 'P188C', 'DWI MIFTACHUL KHASANAH', 'NGANJUK', '2000-08-21', 'P', 'SMPN 6 NGANJUK', 58.6, 38.1, 35.6, 49.1, 181.4, 'AKT', 'PM', 'JUWARI', '03', '01', 'Ds. WERUNGOTOK Kec. NGANJUK', '083674103254', '2016-10-22 21:20:57', 'DITERIMA'),
(93, '20160093', 'b1zOf', 'DWI MU´ALIFAH', 'NGANJUK', '2000-08-31', 'P', 'MTs PSM PACE', 61.5, 35.4, 35.6, 49.6, 182.1, 'AKT', 'PM', 'KARSONO', '03', '02', 'Ds. BABADAN Kec. PACE', '083142975016', '2016-10-22 21:28:44', 'DITERIMA'),
(94, '20160094', '1w6R2', 'EKA RETNO HANDAYANI', 'NGANJUK', '2000-06-28', 'P', 'SMPN 1 LOCERET', 60.5, 34.5, 35.6, 49.7, 180.3, 'AKT', 'PM', 'PROJO', '05', '02', 'Ds. SOMBRON Kec. LOCERET', '083174603254', '2016-10-22 21:30:50', 'DITERIMA'),
(95, '20160095', '8sP6g', 'ELISA AGUSTINA', 'NGANJUK', '2000-07-24', 'P', 'MTs AL HUDA GONDANG', 60.1, 34.5, 37.4, 49.5, 181.5, 'AKT', 'PM', 'TARSAN', '07', '01', 'Ds. GONDANG Kec. PACE', '085721164802', '2016-10-22 21:33:15', 'DITERIMA'),
(96, '20160096', 'b68NF', 'ELLICIA HERDIATI', 'NGANJUK', '2000-07-20', 'P', 'MTs MOJOSARI', 59.5, 35.4, 37.4, 50.2, 182.5, 'AKT', 'PM', 'KUNANDAR', '05', '01', 'Ds. MOJOSARI Kec. MOJOSARI', '089367233701', '2016-10-22 21:35:47', 'DITERIMA'),
(97, '20160097', 'KCzbs', 'ELSANDI EKA LEYRIAN', 'NGANJUK', '2000-09-19', 'P', 'SMPN 2 BERBEK', 59.5, 35.4, 37.4, 51.2, 183.5, 'AKT', 'PM', 'JAMARI', '04', '02', 'Ds. MAGUAN Kec. CEPOKO', '085710283147', '2016-10-22 21:39:34', 'DITERIMA'),
(98, '20160098', '3SY4m', 'ERIKA PUTRI RUSDIMAN', 'NGANJUK', '2000-08-17', 'P', 'SMP ISLAM MUAWANAH', 59.6, 36.5, 35.9, 52.5, 184.5, 'AKT', 'PM', 'RUSDIMAN', '05', '03', 'Ds. KWEDEN Kec. NGETOS', '082162772460', '2016-10-22 21:41:57', 'DITERIMA'),
(99, '20160099', 'xMnFX', 'ERLINA LUKITASARI', 'NGANJUK', '2000-10-29', 'P', 'SMPN 6 NGANJUK', 60.5, 34.5, 35.6, 51.2, 181.8, 'AKT', 'PM', 'DWI SISWANTO', '05', '02', 'Ds. KARTOHARJO Kec. NGANJUK', '083211573902', '2016-10-22 21:43:55', 'DITERIMA'),
(100, '20160100', 'YQTpT', 'FEBIANI SEKARWANGI', 'NGANJUK', '2000-08-12', 'P', 'SMPN 2 LOCERET', 60.5, 35.4, 37.5, 49.5, 182.9, 'AKT', 'PM', 'SAMAD', '03', '01', 'Ds. NGEPEH Kec. LOCERET', '083210314773', '2016-10-22 21:46:16', 'DITERIMA'),
(101, '20160101', 'tAd9s', 'FENTI RACHMATUL UULA', 'NGANJUK', '2000-08-29', 'P', 'SMPN 7 NGANJUK', 63.1, 35.4, 34.5, 51.3, 184.3, 'AKT', 'PM', 'SUPARDI', '03', '01', 'Ds. BOGO Kec. NGANJUK', '089352740169', '2016-10-25 01:20:04', 'DITERIMA'),
(102, '20160102', 'dOznF', 'FIDDINI LINDIA FEBRIANTI', 'NGANJUK', '2000-10-11', 'P', 'SMPN 1 PACE', 59.3, 36.7, 34.5, 50.1, 180.6, 'PM', 'PM', 'SUHARTO', '06', '02', 'Ds. GONDANG Kec. PACE', '089627335102', '2016-10-29 20:53:16', 'DITERIMA'),
(103, '20160103', 'ZcxT6', 'FIRDA NURANISA', 'NGANJUK', '2000-09-17', 'P', 'SMPN 2 PACE', 63.1, 35.2, 34.5, 49.3, 182.1, 'PM', 'AKT', 'SUNOTO', '06', '02', 'Ds. JATI GREGES Kec. PACE', '085325712847', '2016-10-29 20:55:22', 'DITERIMA'),
(104, '20160104', 'E3Cgw', 'INTAN RAHAYU PUTRI', 'NGANJUK', '2000-08-15', 'P', 'MTs PSM PACE', 59.2, 36.5, 35.4, 49.3, 180.4, 'PM', 'PM', 'MAHMUD', '07', '02', 'Ds. PACE KULON Kec. PACE', '081328918211', '2016-10-29 20:58:31', 'DITERIMA'),
(105, '20160105', 'a9QcH', 'JANALIA ANIN DITA', 'NGANJUK', '2000-10-22', 'P', 'MTS AL HUDA GONDANG', 61.4, 34.5, 35.4, 50.2, 181.5, 'PM', 'PM', 'KARNADI', '07', '01', 'Ds. SENJAYAN Kec. GONDANG', '087326189271', '2016-10-29 21:01:52', 'DITERIMA'),
(106, '20160106', 'CpxXe', 'JAYA WITA', 'NGANJUK', '2000-08-26', 'L', 'SMPN 2 LOCERET', 60.3, 35.4, 34.6, 50.2, 180.5, 'PM', 'PM', 'AHMAD MUJAYIN', '07', '02', 'Ds. GENJENG Kec. LOCERET', '081247313982', '2016-10-29 21:08:06', 'DITERIMA'),
(107, '20160107', 'j8tKG', 'JUMROTUN NISAK', 'NGANJUK', '2000-11-04', 'P', 'SMPN 2 NGANJUK', 61.2, 35.5, 34.5, 50.1, 181.3, 'PM', 'AKT', 'SULISTYO', '04', '01', 'Ds. KRAMAT Kec. NGANJUK', '087263617763', '2016-10-29 21:09:46', 'DITERIMA'),
(108, '20160108', '2Oqbr', 'KITRUNADA MAISAROH', 'NGANJUK', '2000-07-21', 'P', 'SMPN 2 WILANGAN', 60.1, 35.2, 34.5, 50.1, 179.9, 'PM', 'AKT', 'MOH. SAELAN', '05', '02', 'Ds. NGADIPURO Kec. WILANGAN', '087217263782', '2016-10-29 21:14:59', 'DITERIMA'),
(109, '20160109', '8M5PD', 'KRISTA ADE SAPITRI', 'NGANJUK', '2000-08-09', 'P', 'SMPN 1 NGLUYU', 61.4, 35.3, 35.5, 52.1, 184.3, 'PM', 'AKT', 'MOH. KARNADI', '03', '02', 'Ds. TEMPURAN Kec. NGLUYU', '082123741182', '2016-10-29 21:19:06', 'DITERIMA'),
(110, '20160110', 'ryLGy', 'LAURIN IVA PUTRI NOVANTI', 'NGANJUK', '2000-07-07', 'P', 'SMPN 1 NGLUYU', 60.5, 36.2, 34.5, 52.1, 183.3, 'PM', 'AKT', 'SULISTYO', '06', '02', 'Ds. LENGKONG LOR Kec. NGLUYU', '081328918211', '2016-10-29 21:20:49', 'DITERIMA'),
(111, '20160111', 'NPHQ9', 'LESTARI AGUSTINA', 'NGANJUK', '2000-07-28', 'P', 'MTsN NGANJUK', 61.5, 35.4, 34.5, 52.3, 183.7, 'PM', 'AKT', 'SUKANDAR', '05', '01', 'Ds. PLOSO Kec. NGANJUK', '081247313982', '2016-10-29 21:23:56', 'DITERIMA'),
(112, '20160112', 'tCR7S', 'MARTALIA DWI JAYANTI', 'NGANJUK', '2000-08-04', 'P', 'SMPN 5 NGANJUK', 60.3, 35.3, 33.5, 52.1, 181.2, 'PM', 'PM', 'SUPARDI', '05', '02', 'Ds. CANGKRINGAN Kec. NGANJUK', '081247313982', '2016-10-29 21:30:47', 'DITERIMA'),
(113, '20160113', 'd6gCR', 'MEY LINDA PUTRI KHAMIDHA', 'NGANJUK', '2000-08-11', 'P', 'MTsN TANJUNGANOM', 63.1, 35.4, 34.5, 50.2, 183.2, 'PM', 'PM', 'DWI SUKAMTO', '06', '01', 'Ds. TANJUNGANOM Kec. NGANJUK', '081328918211', '2016-10-29 21:34:11', 'DITERIMA'),
(114, '20160114', '795zX', 'MILA FITRIANI', 'NGANJUK', '2000-08-05', 'P', 'SMPN 7 NGANJUK', 61.1, 35.4, 34.5, 52.1, 183.1, 'PM', 'AKT', 'KASAN BADAWI', '04', '02', 'Ds. MANGUNDIKARAN Kec. NGANJUK', '083712712029', '2016-10-29 21:39:07', 'DITERIMA'),
(115, '20160115', 'ec7by', 'MURTININGSIH', 'NGANJUK', '2000-07-12', 'P', 'SMPN 6 NGANJUK', 63.1, 35.4, 34.5, 50.1, 183.1, 'PM', 'PM', 'SUHARTO', '06', '01', 'Ds. BOGO Kec. NGANJUK', '082173128937', '2016-10-29 21:41:36', 'DITERIMA'),
(116, '20160116', 'L7kAA', 'NIKEN DWI KHOLIFAH', 'NGANJUK', '2000-10-23', 'P', 'MTsN NGANJUK', 61.2, 36.3, 34.4, 50.2, 182.1, 'PM', 'AKT', 'KARTONO', '06', '02', 'Ds. BEGADUNG Kec. NGANJUK', '081247313982', '2016-10-29 21:45:04', 'DITERIMA'),
(117, '20160117', 'AFDpN', 'NIMAS A SAFIIYAH', 'NGANJUK', '2000-07-13', 'P', 'SMPN 2 BERBEK', 62.5, 35.4, 34.5, 50.2, 182.6, 'PM', 'AKT', 'KHOIRUDIN', '03', '01', 'Ds. SEMENGKO Kec. BERBEK', '081247313982', '2016-10-29 21:49:20', 'DITERIMA'),
(118, '20160118', '7RrD7', 'NUR KHOLISOH', 'NGANJUK', '2000-10-07', 'P', 'MTsN NGANJUK', 63.1, 35.4, 32.7, 50.2, 181.4, 'PM', 'AKT', 'SUPARDI', '06', '01', 'Ds. GANUNG KIDUL Kec. NGANJUK', '081273819273', '2016-10-29 21:51:24', 'DITERIMA'),
(119, '20160119', 'LQdbB', 'RAGIL WIDIA HANIS LUTFIA NINGRUM', 'NGANJUK', '2000-07-15', 'P', 'SMPN 1 BERBEK', 62.5, 35.4, 34.5, 50.2, 182.6, 'PM', 'AKT', 'SULISTYO', '05', '01', 'Ds. SEMENGKO Kec. BERBEK', '087263672612', '2016-10-29 21:53:36', 'DITERIMA'),
(120, '20160120', 'ShOhb', 'RENI FATMAWATI', 'NGANJUK', '2000-05-01', 'P', 'SMPN 1 BAGOR', 63.1, 35.4, 32.7, 50.2, 181.4, 'PM', 'AKT', 'JAENURI', '06', '02', 'Ds. WAUNG Kec. BARON', '087360286311', '2016-10-29 21:56:38', 'DITERIMA'),
(121, '20160121', 'Dkymn', 'RETNO PRIHATINI', 'NGANJUK', '2000-06-08', 'P', 'SMPN 2 PACE', 62.2, 35.4, 34.5, 50.3, 182.4, 'PM', 'AKT', 'JAMARI', '06', '01', 'Ds.CERME Kec. PACE', '082123741182', '2016-10-29 21:58:36', 'DITERIMA'),
(122, '20160122', 'WOmhL', 'RIZA IKA PRATIWI', 'NGANJUK', '2000-10-14', 'P', 'SMPN 3 BAGOR', 61.1, 34.5, 34.7, 50.2, 180.5, 'PM', 'PM', 'TONI RAHMAN', '06', '02', 'Ds. GIRI REJO Kec. BAGOR', '087302711262', '2016-10-29 22:01:17', 'DITERIMA'),
(123, '20160123', 'FwctX', 'SULISTYA ANGGARA PUTRA', 'NGANJUK', '2000-10-18', 'L', 'SMPN 3 NGANJUK', 60.5, 36.5, 34.5, 50.1, 181.6, 'PM', 'AKT', 'EKO NUGROHO', '06', '02', 'Ds. BOGO Kec. NGANJUK', '089327317012', '2016-10-29 22:03:29', 'DITERIMA'),
(124, '20160124', '8NG6H', 'FITRIA RAMAWATI', 'NGANJUK', '2000-10-27', 'P', 'SMPN 1 LOCERET', 60.5, 35.4, 34.5, 50.2, 180.6, 'AKT', 'PM', 'SULISTYO', '06', '02', 'Ds. NGEPEH Kec. LOCERET', '089872103351', '2016-10-29 22:08:09', ''),
(125, '20160125', '7E4FP', 'HETI SETIYA NINGSIH', 'NGANJUK', '2000-07-14', 'P', 'SMPN 1 SUKOMORO', 60.5, 36.6, 34.5, 51.2, 182.8, 'AKT', 'AKT', 'DAYAT', '05', '02', 'Ds. BUNGOR Kec. SUKOMORO', '087625356120', '2016-10-29 22:11:48', ''),
(126, '20160126', 'NxqwH', 'IKE SELFIANA', 'NGANJUK', '2000-06-26', 'P', 'SMPN 7 NGANJUK', 60.4, 35.4, 35.5, 51.2, 182.5, 'AKT', 'PM', 'SUPRIYONO', '05', '01', 'Ds. KEDUNGDOWO Kec. NGANJUK', '087610242887', '2016-10-30 00:02:27', ''),
(127, '20160127', 'FydqX', 'IKE SRI WAHYUNINGSIH', 'NGANJUK', '2000-08-11', 'P', 'SMPN 1 NGLUYU', 61.4, 34.5, 35.6, 50.2, 181.7, 'AKT', 'PM', 'SUKARNO', '06', '02', 'Ds. BAJANG Kec. NGLUYU', '082157839477', '2016-10-30 00:04:33', ''),
(128, '20160128', 'qaKXn', 'RIZA WIDIA', 'NGANJUK', '2000-07-16', 'P', 'SMPN 6 NGANJUK', 61.5, 35.4, 34.5, 50.2, 181.6, 'PM', 'AKT', 'BAMBANG WIRYONO', '05', '01', 'Ds. KAUMAN Kec. NGANJUK', '082172100582', '2016-10-30 00:06:53', ''),
(129, '20160129', 'Xk2f9', 'INDAH MULYANI', 'NGANJUK', '2000-08-30', 'P', 'MTs AL HUDA GONDANG', 60.5, 36.2, 34.5, 50.2, 181.4, 'AKT', 'PM', 'SUJATMIKO', '07', '02', 'Ds. KRANGSEMI Kec. GONDANG', '087283291039', '2016-10-30 00:09:26', ''),
(130, '20160130', 'b91zz', 'DIAJENG MERITA RIZKYANA', 'NGANJUK', '2000-03-10', 'P', 'SMPN 1 NGANJUK', 60.4, 37.5, 34.5, 50.3, 182.7, 'TKJ', 'AKT', 'SUGENG WIDODO', '07', '02', 'Ds. SIDOKARE Kec. REJOSO', '089737287828', '2016-11-03 13:35:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `info_id` int(5) NOT NULL,
  `info_judul` varchar(100) NOT NULL,
  `info_isi` text NOT NULL,
  `info_tglpost` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`info_id`, `info_judul`, `info_isi`, `info_tglpost`) VALUES
(1, 'Selamat Datang di Pendaftaran Siswa Baru (PSB) Online.', 'Silakan baca terlebih dahulu informasi tentang\r\nprosedur pendaftaran sebelum melakukan proses pendaftaran.<br>', '2016-08-31 22:59:54'),
(2, 'Visi Sekolah', 'Visi SMK Kosgoro\r\nNganjuk adalah Menjadi Lembaga Diklat Kebanggaan melalui Keunggulan,\r\nKeilmuan, Kompetensi dan Budi Pekerti para tamatannya.<br>', '2016-08-30 03:42:02'),
(3, 'Misi Sekolah', '<ol><li>Mengembangkan program pembelajaran yang mengarah pada pembelajaran berbasis kompetensi dan kecakapan hidup.</li><li>Meningkatkan mutu pendidikan sesuai dengan tuntutan masyarakat dan perkembangan Ilmu Pengetahuan dan Tehnologi.</li><li>Menghasilkan tamatan yang memiliki keunggulan kompetensi dalam memasuki era persaingan global.</li><li>Meningkatkan penyelenggaraan program pendidikan yang senantiasa berakar pada sistem nilai, adat istiadat, agama dan budaya masyarakat dengan tetap mengikuti perkembangan dunia luar.</li><li>Ikut membentuk insan pejuang dengan nilai kejuangan, pengabdian, kerakyatan dan solidaritas.</li></ol>', '2016-08-30 03:42:07'),
(4, 'Jadwal Kegiatan Pendaftaran', 'Pendaftaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 01 Juni 2016 - 20 Juni 2016<br><br>Pengumuman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 21 Juni 2016<br>', '2016-10-28 10:49:38'),
(5, 'Kompetensi Keahlian / Jurusan', '<ol><li> Teknik Komputer &amp; Jaringan (TKJ)<br></li><li>Pemasaran / Marketing</li><li>Akuntansi</li></ol>', '2016-10-27 21:58:52'),
(6, 'Fasilitas', '<ul><li>Gedung milik sendiri </li><li>Mushola Nurul Fatah</li><li>Lab. Komputer</li><li>Lab. Bahasa Inggris</li><li>R. Perpustakaan</li><li>R. Serbaguna/Aula</li><li>R. Praktek Mengetik</li><li>R. Praktek Pemasaran</li><li>R. Praktek Akutansi</li><li>Warung Internet(Free Hotspot)</li><li>Kafetaria</li><li>Tempat parkir</li><li>Bengkel TKJ</li></ul>', '2016-10-30 11:54:31'),
(7, 'Kegiatan Siswa', '<ul><li>Majelis Taklim</li><li>Palang Merah Remaja</li><li>Pramuka</li><li>Olahraga</li><li>Pencak Silat</li><li>Kelompok Debat/ English Club</li><li>Seni Musik</li><li>Paskibra</li></ul>', '2016-10-27 21:51:08'),
(8, 'Prosedur dan Syarat Pendaftaran', 'Prosedur Pendaftaran<br><ol><li>Calon siswa mengisi formulir pendaftaran dengan data lengkap dan akurat.</li><li>Setelah mengisi seluruh kolom isian dan berhasil mendaftar, silahkan mencetak formulir bukti pendaftaran.</li><li>Calon siswa datang ke panitia dengan menyerahkan formulir bukti pendaftaran beserta berkas-berkas sesuai dengan syarat pendaftaran.</li><li>Panitia memverifikasi serta memberikan validasi berupa tanda tangan dan menyetempel bukti pendaftaran.</li></ol>Syarat - syarat Pendaftaran<ol><li>Memiliki Ijazah dan SKHU SMP/MTs yang dilegalisir.</li><li>Fotokopi akta kelahiran.</li><li>Usia tidak lebih dari 21 tahun.</li></ol>Nilai UN Minimal Tiap Jurusan<br><ol><li>Teknik Komputer Jaringan&nbsp; &gt;= 183 <br></li><li>Akuntansi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &gt;= 185<br></li><li>Pemasaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &gt;= 180<br></li></ol>', '2016-11-07 17:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `jur_id` int(10) NOT NULL,
  `jur_nama` varchar(20) NOT NULL,
  `jur_ket` varchar(50) NOT NULL,
  `jur_akre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`jur_id`, `jur_nama`, `jur_ket`, `jur_akre`) VALUES
(1, 'TKJ', 'TEKNIK KOMPUTER JARINGAN', '-'),
(2, 'AKT', 'AKUNTANSI', 'A'),
(3, 'PM', 'PEMASARAN', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `psn_id` int(10) NOT NULL,
  `psn_nama` varchar(100) NOT NULL,
  `psn_email` varchar(100) NOT NULL,
  `psn_isi` text NOT NULL,
  `psn_tglkirim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(5) NOT NULL,
  `post_status` enum('true','false') NOT NULL,
  `post_postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`post_id`, `post_status`, `post_postdate`) VALUES
(1, 'false', '2016-11-14 04:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `sek_id` int(5) NOT NULL,
  `sek_nama` varchar(100) NOT NULL,
  `sek_alamat` varchar(100) NOT NULL,
  `sek_kodepos` varchar(15) NOT NULL,
  `sek_kepsek` varchar(50) NOT NULL,
  `sek_nip` varchar(15) NOT NULL,
  `sek_telp` varchar(30) NOT NULL,
  `sek_kab` varchar(50) NOT NULL,
  `sek_logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`sek_id`, `sek_nama`, `sek_alamat`, `sek_kodepos`, `sek_kepsek`, `sek_nip`, `sek_telp`, `sek_kab`, `sek_logo`) VALUES
(1, 'SMK Kosgoro Nganjuk', 'Jl. Wolter Monginsidi No. 78', '64418', 'Drs. YUHARTONO, MM', '19630923 199003', '( 0358 ) 321832', 'Nganjuk', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(10) NOT NULL,
  `no_reg` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `as_sklh` varchar(100) NOT NULL,
  `jmlnilai` float NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tglconfirm` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `regist` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `no_reg`, `nama`, `jk`, `as_sklh`, `jmlnilai`, `jurusan`, `tglconfirm`, `status`, `regist`) VALUES
(1, '20160001', 'ABIMANYU KAUSAR B', 'L', 'PAS PACE', 186.4, 'TKJ', '2016-10-29 22:19:26', 'DITERIMA', ''),
(2, '20160002', 'ADE DION SUBEKTI', 'L', 'SMPN 1 PACE', 183.4, 'TKJ', '2016-10-29 22:19:36', 'DITERIMA', ''),
(3, '20160003', 'AGUNG SETIAWAN', 'L', 'SMPN 1 SAWAHAN', 187.9, 'TKJ', '2016-10-29 22:19:47', 'DITERIMA', ''),
(4, '20160004', 'AHMAD FARKHAN JIHANSYAH', 'L', 'SMPN 2 MOJOANYAR MOJOKERTO', 183.1, 'TKJ', '2016-10-29 22:19:58', 'DITERIMA', ''),
(5, '20160005', 'ALBAR SUTONI', 'L', 'SMP KERTOSONO', 187.3, 'TKJ', '2016-10-29 22:20:17', 'DITERIMA', ''),
(6, '20160006', 'ANISTIN', 'P', 'SMPN 1 SUKOMORO', 185.1, 'PM', '2016-10-29 22:20:33', 'DITERIMA', ''),
(7, '20160007', 'ANAN BASOFI', 'L', 'SMPN 6 NGANJUK', 182.4, 'AKT', '2016-10-29 22:24:18', 'DITERIMA', ''),
(8, '20160008', 'ANDRI PANGESTU', 'L', 'SMPN 1 REJOSO', 183.8, 'TKJ', '2016-10-29 22:24:47', 'DITERIMA', ''),
(9, '20160009', 'AMAT ZAILANI', 'L', 'SMPN 3 REJOSO', 181.9, 'TKJ', '2016-10-29 22:24:57', 'DITERIMA', ''),
(10, '20160010', 'ANDRIANTO', 'L', 'SMPN 1 REJOSO', 182.5, 'TKJ', '2016-10-29 22:25:05', 'DITERIMA', ''),
(11, '20160011', 'AFRILIANA WIJIANTI', 'P', 'SMPN 1 SUKOMORO', 183.3, 'AKT', '2016-10-29 22:26:23', 'DITERIMA', ''),
(12, '20160012', 'ALIYATUL ZAHROK', 'P', 'MTsN BERBEK', 186.8, 'AKT', '2016-10-29 22:26:32', 'DITERIMA', ''),
(13, '20160013', 'ALVITA ROBIATUL ADAWIYAH', 'P', 'SMPN 3 NGANJUK', 186.9, 'AKT', '2016-10-29 22:26:41', 'DITERIMA', ''),
(14, '20160014', 'AMELITA LISTIANA', 'P', 'SMPN 6 NGANJUK', 184.5, 'AKT', '2016-10-29 22:26:49', 'DITERIMA', ''),
(15, '20160015', 'ANDRIAN', 'L', 'SMPN 2 SAWAHAN', 187.5, 'AKT', '2016-10-29 22:26:59', 'DITERIMA', ''),
(16, '20160016', 'ANGGA SANTIAJI', 'L', 'SMPN 2 SAWAHAN', 186.3, 'AKT', '2016-10-29 22:30:30', 'DITERIMA', ''),
(17, '20160017', 'ANIS PRAMETIA', 'P', 'SMPN 6 NGANJUK', 184.5, 'AKT', '2016-10-29 22:30:39', 'DITERIMA', ''),
(18, '20160018', 'ARIESTA DINI ASTARI', 'P', 'SMPN 1 SUKOMORO', 187.5, 'AKT', '2016-10-29 22:30:49', 'DITERIMA', ''),
(19, '20160019', 'ARVI KUSUMA MELATI', 'P', 'SMPN 7 NGANJUK', 186.1, 'AKT', '2016-10-29 22:31:11', 'DITERIMA', ''),
(20, '20160020', 'BINTI KHOIRU NIK´AMAH', 'P', 'MTsN BERBEK', 185.6, 'PM', '2016-10-29 22:33:15', 'DITERIMA', ''),
(21, '20160021', 'CRISTINA VENEL VONISTION', 'P', 'MTS TAUHIDIYAH 2', 186.1, 'PM', '2016-10-29 22:33:26', 'DITERIMA', ''),
(22, '20160022', 'DEVI AINUR RAHMA', 'P', 'MTs PSM PACE', 186.8, 'PM', '2016-10-29 22:33:35', 'DITERIMA', ''),
(23, '20160023', 'DWI INTAN PERWATI', 'P', 'SMPN 1 KUNJANG', 185.9, 'PM', '2016-10-29 22:33:43', 'DITERIMA', ''),
(24, '20160024', 'DWI WIGATI NINGSIH', 'P', 'SMPN 2 BERBEK', 183.7, 'PM', '2016-10-29 22:33:51', 'DITERIMA', ''),
(25, '20160025', 'DYAH AYU AGUSTINA', 'P', 'SMPN 1 PACE', 182.9, 'PM', '2016-10-29 22:34:00', 'DITERIMA', ''),
(26, '20160026', 'ERRITTE SARI DIANA', 'P', 'SMPN 1 PACE', 182.6, 'PM', '2016-10-29 22:34:09', 'DITERIMA', ''),
(27, '20160027', 'ANGGI OKTA VIARINI', 'P', 'SMPN 1 BAGOR', 182.5, 'TKJ', '2016-10-29 22:37:05', 'DITERIMA', ''),
(28, '20160028', 'ANGGORO CATURIANTO UTOMO', 'L', 'SMPN 3 NGANJUK', 180.9, 'TKJ', '2016-10-29 22:37:14', 'DITERIMA', ''),
(29, '20160029', 'APRILIA DIAH PUSPITASARI', 'P', 'SMPN 2 NGANJUK', 181.4, 'TKJ', '2016-10-29 22:37:22', 'DITERIMA', ''),
(30, '20160116', 'NIKEN DWI KHOLIFAH', 'P', 'MTsN NGANJUK', 182.1, 'TKJ', '2016-10-29 22:37:29', 'DITERIMA', ''),
(31, '20160030', 'BAMBANG KURNIAWAN', 'L', 'SMPN 3 REJOSO', 182.3, 'TKJ', '2016-10-29 22:37:53', 'DITERIMA', ''),
(32, '20160031', 'BAYU DWI JATMIKO', 'L', 'SMPN 6 NGANJUK', 183.2, 'TKJ', '2016-10-29 22:38:02', 'DITERIMA', ''),
(33, '20160032', 'BAYU SUKMA SAPUTRA', 'L', 'SMPN 5 NGANJUK', 181.8, 'TKJ', '2016-10-29 22:38:10', 'DITERIMA', ''),
(34, '20160033', 'BELLA SENJA WULAN FEBRIANTI', 'P', 'SMPN 4 NGANJUK', 180.5, 'TKJ', '2016-10-29 22:38:20', 'DITERIMA', ''),
(35, '20160034', 'BRIZA TRI WAHYUNINGTYAS', 'P', 'SMPN 1 SUKOMORO', 182.1, 'TKJ', '2016-10-29 22:38:28', 'DITERIMA', ''),
(36, '20160035', 'CHOLIS RAHMAWATI', 'P', 'SMPN 1 WILANGAN', 180.8, 'TKJ', '2016-10-29 22:38:48', 'DITERIMA', ''),
(37, '20160036', 'DANANG BAYU AGUS PRASTYO', 'L', 'SMPN 2 NGANJUK', 183.8, 'TKJ', '2016-10-29 22:38:57', 'DITERIMA', ''),
(38, '20160037', 'DANNI PRIYO SIGIT', 'L', 'SMPN 3 BAGOR', 183.4, 'TKJ', '2016-10-29 22:39:05', 'DITERIMA', ''),
(39, '20160038', 'DEDI TRISNADI', 'L', 'SMPN 1 REJOSO', 180.2, 'TKJ', '2016-10-29 22:39:15', 'DITERIMA', ''),
(40, '20160039', 'DEVI DIANA NOVITASARI', 'P', 'SMPN 1 SUKOMORO', 186.1, 'TKJ', '2016-10-29 22:39:23', 'DITERIMA', ''),
(41, '20160040', 'DEVI TRI CAHYANINGRUM', 'P', 'SMPN 2 WILANGAN', 180.7, 'TKJ', '2016-10-29 22:39:31', 'DITERIMA', ''),
(42, '20160041', 'DIMAS ADITYA', 'L', 'SMPN 3 REJOSO', 184.8, 'TKJ', '2016-10-29 22:39:40', 'DITERIMA', ''),
(43, '20160042', 'DWI AGUNG PRAYITNO', 'L', 'SMPN 6 NGANJUK', 187.8, 'TKJ', '2016-10-29 22:39:49', 'DITERIMA', ''),
(44, '20160043', 'DWI FITRI  VIVIT WIYANTI', 'P', 'SMPN 1 PACE', 181.2, 'TKJ', '2016-10-29 22:39:59', 'DITERIMA', ''),
(45, '20160044', 'EDO BAGUS PRASTYA', 'L', 'SMPN 1 SAWAHAN', 184.5, 'TKJ', '2016-10-29 22:40:10', 'DITERIMA', ''),
(46, '20160045', 'ENDRIKO GADING PRATAMA', 'L', 'SMPN 3 NGANJUK', 182.7, 'TKJ', '2016-10-30 00:17:37', 'DITERIMA', ''),
(47, '20160046', 'EVI LUVITA SARI', 'P', 'SMPN 6 NGANJUK', 183.9, 'TKJ', '2016-10-30 00:17:46', 'DITERIMA', ''),
(48, '20160047', 'FAHRIZAL WAHYU PRASETYO', 'L', 'SMPN 1 BAGOR', 185.9, 'TKJ', '2016-10-30 00:17:58', 'DITERIMA', ''),
(49, '20160048', 'FEBRIYANA PUTRI', 'P', 'SMPN 1 SUKOMORO', 180.8, 'TKJ', '2016-10-30 00:18:10', 'DITERIMA', ''),
(50, '20160049', 'FELISIA JUNIAR', 'P', 'SMPN 2 WILANGAN', 182.2, 'TKJ', '2016-10-30 00:19:24', 'DITERIMA', ''),
(51, '20160050', 'FIRNANDA DWI PRASTYA', 'L', 'SMPN 3 BAGOR', 183.6, 'TKJ', '2016-10-30 00:19:31', 'DITERIMA', ''),
(52, '20160051', 'GINANTO EKO PRASTYA', 'L', 'SMPN 3 REJOSO', 183.6, 'TKJ', '2016-10-30 00:19:39', 'DITERIMA', ''),
(53, '20160052', 'INDAH NUR ISTIANI', 'P', 'SMPN 2 BAGOR', 186.2, 'TKJ', '2016-10-30 00:19:48', 'DITERIMA', ''),
(54, '20160053', 'INTAN MEILIA PUTRI', 'P', 'SMPN 1 SUKOMORO', 180.2, 'TKJ', '2016-10-30 00:19:56', 'DITERIMA', ''),
(55, '20160054', 'ITA WAHYUNINGSIH', 'P', 'SMPN 3 BAGOR', 181.7, 'TKJ', '2016-10-30 00:21:46', 'DITERIMA', ''),
(56, '20160055', 'IVANDA ARYUDA PRADANA', 'L', 'SMPN 2 BAGOR', 182.8, 'TKJ', '2016-10-30 00:21:55', 'DITERIMA', ''),
(57, '20160056', 'JOHAN MERDIANTORO', 'L', 'SMPN 3 REJOSO', 181.8, 'TKJ', '2016-10-30 00:22:02', 'DITERIMA', ''),
(58, '20160057', 'JONI FEBRIANTO', 'L', 'SMPN 2 SAWAHAN', 183.7, 'TKJ', '2016-10-30 00:23:19', 'DITERIMA', ''),
(59, '20160058', 'JONI TIMAN', 'L', 'SMPN 6 NGANJUK', 180.5, 'TKJ', '2016-10-30 00:23:32', 'DITERIMA', ''),
(60, '20160059', 'JUNIA KRISTINAWATI', 'P', 'SMP BAHRUL ULUM JOMBANG', 183.5, 'TKJ', '2016-10-30 00:23:46', 'DITERIMA', ''),
(61, '20160060', 'JUNIAR ANGRIAWAN', 'L', 'SMPN 6 NGANJUK', 181.7, 'TKJ', '2016-10-30 00:23:54', 'DITERIMA', ''),
(62, '20160061', 'KARTIAS DWI YANTI', 'P', 'MTsN NGANJUK', 182.7, 'TKJ', '2016-10-30 00:24:02', 'DITERIMA', ''),
(63, '20160062', 'KRISNAWATI', 'P', 'SMPN 1 NGLUYU', 183.3, 'TKJ', '2016-10-30 00:24:10', 'DITERIMA', ''),
(64, '20160063', 'KUKUH WAHYU UTOMO', 'L', 'SMPN 3 BAGOR', 181.4, 'AKT', '2016-10-30 00:24:20', 'DITERIMA', ''),
(65, '20160073', 'ASRI WINDAYANI', 'P', 'SMPN 1 NGLUYU', 185.6, 'AKT', '2016-10-30 00:25:46', 'DITERIMA', ''),
(66, '20160074', 'AYU INDRAS WARI', 'P', 'SMPN 2 BERBEK', 182.5, 'AKT', '2016-10-30 00:25:55', 'DITERIMA', ''),
(67, '20160075', 'AYU MARTI RAHAYU', 'P', 'SMPN 3 BAGOR', 183.1, 'AKT', '2016-10-30 00:26:07', 'DITERIMA', ''),
(68, '20160076', 'AYU NUR ALFINA', 'P', 'MTsN BERBEK', 185.3, 'AKT', '2016-10-30 00:26:20', 'DITERIMA', ''),
(69, '20160077', 'BELLA PUTRA HANDIKA', 'L', 'SMPN 6 NGANJUK', 181.3, 'AKT', '2016-10-30 00:26:40', 'DITERIMA', ''),
(70, '20160078', 'BINTI NUR BUDIASIH', 'P', 'SMPN 1 SUKOMORO', 183.6, 'AKT', '2016-10-30 00:26:56', 'DITERIMA', ''),
(71, '20160079', 'CRISTIKA KARUNIA SANI', 'P', 'SMPN 2 POLOKARTO SUKOHARJO', 184.8, 'AKT', '2016-10-30 00:27:07', 'DITERIMA', ''),
(72, '20160080', 'DAMIANTO', 'L', 'SMPN 1 SAWAHAN', 181.9, 'AKT', '2016-10-30 00:27:18', 'DITERIMA', ''),
(73, '20160081', 'DAYANTI AYU SARI', 'P', 'SMPN 2 NGANJUK', 181.3, 'AKT', '2016-10-30 00:27:33', 'DITERIMA', ''),
(74, '20160082', 'DEFITA SARI', 'P', 'SMPN  NGLUYU', 185.7, 'AKT', '2016-10-30 00:27:44', 'DITERIMA', ''),
(75, '20160083', 'DEPY CARTIKA SARI', 'P', 'SMP 17 LOCERET', 185.4, 'AKT', '2016-10-30 00:27:56', 'DITERIMA', ''),
(76, '20160084', 'DESY SETYO NINGRUM', 'P', 'SMPN 2 NGANJUK', 185.3, 'AKT', '2016-10-30 00:28:06', 'DITERIMA', ''),
(77, '20160085', 'DEVI TRI UTAMI', 'P', 'MTsN BERBEK', 184.2, 'AKT', '2016-10-30 00:28:17', 'DITERIMA', ''),
(78, '20160086', 'DEWANDA AGUSTIN', 'P', 'SMPN 2 BERBEK', 181.7, 'AKT', '2016-10-30 00:28:27', 'DITERIMA', ''),
(79, '20160087', 'DEWI KUSNUL KHOTIMAH', 'P', 'SMPN 3 REJOSO', 183.8, 'AKT', '2016-10-30 00:28:35', 'DITERIMA', ''),
(80, '20160088', 'DEWI QUROTA´AYUN', 'P', 'MTsN BERBEK', 183.6, 'AKT', '2016-10-30 00:32:19', 'DITERIMA', ''),
(81, '20160089', 'DIANA FITRI RAHAYU', 'P', 'SMPN 2 NGANJUK', 183.2, 'AKT', '2016-10-30 00:32:35', 'DITERIMA', ''),
(82, '20160090', 'DINA PUJI LESTARI', 'P', 'SMP ALAROOF MUNGKUNG', 182.8, 'AKT', '2016-10-30 00:32:44', 'DITERIMA', ''),
(83, '20160091', 'DISTIANA WATI', 'P', 'SMPN 5 NGANJUK', 181.4, 'AKT', '2016-10-30 00:32:54', 'DITERIMA', ''),
(84, '20160092', 'DWI MIFTACHUL KHASANAH', 'P', 'SMPN 6 NGANJUK', 181.4, 'AKT', '2016-10-30 00:33:04', 'DITERIMA', ''),
(85, '20160093', 'DWI MU´ALIFAH', 'P', 'MTs PSM PACE', 182.1, 'AKT', '2016-10-30 00:33:14', 'DITERIMA', ''),
(86, '20160094', 'EKA RETNO HANDAYANI', 'P', 'SMPN 1 LOCERET', 180.3, 'AKT', '2016-10-30 00:33:25', 'DITERIMA', ''),
(87, '20160095', 'ELISA AGUSTINA', 'P', 'MTs AL HUDA GONDANG', 181.5, 'AKT', '2016-10-30 00:33:36', 'DITERIMA', ''),
(88, '20160096', 'ELLICIA HERDIATI', 'P', 'MTs MOJOSARI', 182.5, 'AKT', '2016-10-30 00:33:46', 'DITERIMA', ''),
(89, '20160097', 'ELSANDI EKA LEYRIAN', 'P', 'SMPN 2 BERBEK', 183.5, 'AKT', '2016-10-30 00:33:57', 'DITERIMA', ''),
(90, '20160098', 'ERIKA PUTRI RUSDIMAN', 'P', 'SMP ISLAM MUAWANAH', 184.5, 'AKT', '2016-10-30 00:34:06', 'DITERIMA', ''),
(91, '20160099', 'ERLINA LUKITASARI', 'P', 'SMPN 6 NGANJUK', 181.8, 'AKT', '2016-10-30 00:34:21', 'DITERIMA', ''),
(92, '20160101', 'FENTI RACHMATUL UULA', 'P', 'SMPN 7 NGANJUK', 184.3, 'AKT', '2016-10-30 00:36:39', 'DITERIMA', ''),
(93, '20160100', 'FEBIANI SEKARWANGI', 'P', 'SMPN 2 LOCERET', 182.9, 'AKT', '2016-10-30 00:37:04', 'DITERIMA', ''),
(94, '20160102', 'FIDDINI LINDIA FEBRIANTI', 'P', 'SMPN 1 PACE', 180.6, 'PM', '2016-10-30 00:38:30', 'DITERIMA', ''),
(95, '20160103', 'FIRDA NURANISA', 'P', 'SMPN 2 PACE', 182.1, 'PM', '2016-10-30 00:38:41', 'DITERIMA', ''),
(96, '20160104', 'INTAN RAHAYU PUTRI', 'P', 'MTs PSM PACE', 180.4, 'PM', '2016-10-30 00:39:04', 'DITERIMA', ''),
(97, '20160105', 'JANALIA ANIN DITA', 'P', 'MTS AL HUDA GONDANG', 181.5, 'PM', '2016-10-30 00:39:13', 'DITERIMA', ''),
(98, '20160106', 'JAYA WITA', 'L', 'SMPN 2 LOCERET', 180.5, 'PM', '2016-10-30 00:39:22', 'DITERIMA', ''),
(99, '20160107', 'JUMROTUN NISAK', 'P', 'SMPN 2 NGANJUK', 181.3, 'PM', '2016-10-30 00:39:34', 'DITERIMA', ''),
(100, '20160108', 'KITRUNADA MAISAROH', 'P', 'SMPN 2 WILANGAN', 179.9, 'PM', '2016-10-30 00:39:44', 'DITERIMA', ''),
(101, '20160109', 'KRISTA ADE SAPITRI', 'P', 'SMPN 1 NGLUYU', 184.3, 'PM', '2016-10-30 00:39:59', 'DITERIMA', ''),
(102, '20160110', 'LAURIN IVA PUTRI NOVANTI', 'P', 'SMPN 1 NGLUYU', 183.3, 'PM', '2016-10-30 00:40:08', 'DITERIMA', ''),
(103, '20160111', 'LESTARI AGUSTINA', 'P', 'MTsN NGANJUK', 183.7, 'PM', '2016-10-30 00:40:23', 'DITERIMA', ''),
(104, '20160112', 'MARTALIA DWI JAYANTI', 'P', 'SMPN 5 NGANJUK', 181.2, 'PM', '2016-10-30 00:40:31', 'DITERIMA', ''),
(105, '20160113', 'MEY LINDA PUTRI KHAMIDHA', 'P', 'MTsN TANJUNGANOM', 183.2, 'PM', '2016-10-30 00:40:40', 'DITERIMA', ''),
(106, '20160114', 'MILA FITRIANI', 'P', 'SMPN 7 NGANJUK', 183.1, 'PM', '2016-10-30 00:40:48', 'DITERIMA', ''),
(107, '20160115', 'MURTININGSIH', 'P', 'SMPN 6 NGANJUK', 183.1, 'PM', '2016-10-30 00:40:56', 'DITERIMA', ''),
(108, '20160117', 'NIMAS A SAFIIYAH', 'P', 'SMPN 2 BERBEK', 182.6, 'PM', '2016-10-30 00:41:05', 'DITERIMA', ''),
(109, '20160118', 'NUR KHOLISOH', 'P', 'MTsN NGANJUK', 181.4, 'PM', '2016-10-30 00:41:13', 'DITERIMA', ''),
(110, '20160119', 'RAGIL WIDIA HANIS LUTFIA NINGRUM', 'P', 'SMPN 1 BERBEK', 182.6, 'PM', '2016-10-30 00:41:22', 'DITERIMA', ''),
(111, '20160120', 'RENI FATMAWATI', 'P', 'SMPN 1 BAGOR', 181.4, 'PM', '2016-10-30 00:41:33', 'DITERIMA', ''),
(112, '20160121', 'RETNO PRIHATINI', 'P', 'SMPN 2 PACE', 182.4, 'PM', '2016-10-30 00:41:41', 'DITERIMA', ''),
(113, '20160122', 'RIZA IKA PRATIWI', 'P', 'SMPN 3 BAGOR', 180.5, 'PM', '2016-10-30 00:41:51', 'DITERIMA', ''),
(114, '20160123', 'SULISTYA ANGGARA PUTRA', 'L', 'SMPN 3 NGANJUK', 181.6, 'PM', '2016-10-30 18:03:57', 'DITERIMA', 'REGISTER'),
(115, '20160130', 'DIAJENG MERITA RIZKYANA', 'P', 'SMPN 1 NGANJUK', 182.7, 'TKJ', '2016-11-03 13:47:39', 'DITERIMA', 'REGISTER');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahunajaran`
--

CREATE TABLE `tb_tahunajaran` (
  `ta_id` int(10) NOT NULL,
  `ta_tahunajaran` varchar(20) NOT NULL,
  `ta_status` varchar(20) NOT NULL,
  `ta_kuota` varchar(20) NOT NULL,
  `ta_akre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tahunajaran`
--

INSERT INTO `tb_tahunajaran` (`ta_id`, `ta_tahunajaran`, `ta_status`, `ta_kuota`, `ta_akre`) VALUES
(1, '2016 / 2017', 'Aktif', '200', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `usr_id` int(11) NOT NULL,
  `usr_username` varchar(15) NOT NULL,
  `usr_password` varchar(40) NOT NULL,
  `usr_nama` varchar(100) NOT NULL,
  `usr_nip` varchar(15) NOT NULL,
  `usr_jk` varchar(10) NOT NULL,
  `usr_alamat` text NOT NULL,
  `usr_no_telp` varchar(20) NOT NULL,
  `usr_blokir` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`usr_id`, `usr_username`, `usr_password`, `usr_nama`, `usr_nip`, `usr_jk`, `usr_alamat`, `usr_no_telp`, `usr_blokir`) VALUES
(1, 'Panitia', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'SUJARWO, S.Pd.', '19850124 207001', 'L', 'Nganjuk', '085247690351', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `no_reg` (`no_reg`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`jur_id`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`psn_id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`sek_id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_tahunajaran`
--
ALTER TABLE `tb_tahunajaran`
  ADD PRIMARY KEY (`ta_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `id_daftar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `info_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `jur_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `psn_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `sek_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `tb_tahunajaran`
--
ALTER TABLE `tb_tahunajaran`
  MODIFY `ta_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
