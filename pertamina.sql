-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 16 Agu 2022 pada 07.47
-- Versi server: 5.7.36
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertamina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupatens`
--

DROP TABLE IF EXISTS `kabupatens`;
CREATE TABLE IF NOT EXISTS `kabupatens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=477 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kabupatens`
--

INSERT INTO `kabupatens` (`id`, `kabupaten`, `id_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'PIDIE JAYA', 1, NULL, NULL),
(2, 'SIMEULUE', 1, NULL, NULL),
(3, 'BIREUEN', 1, NULL, NULL),
(4, 'ACEH TIMUR', 1, NULL, NULL),
(5, 'ACEH UTARA', 1, NULL, NULL),
(6, 'PIDIE', 1, NULL, NULL),
(7, 'ACEH BARAT DAYA', 1, NULL, NULL),
(8, 'GAYO LUES', 1, NULL, NULL),
(9, 'ACEH SELATAN', 1, NULL, NULL),
(10, 'ACEH TAMIANG', 1, NULL, NULL),
(11, 'ACEH BESAR', 1, NULL, NULL),
(12, 'ACEH TENGGARA', 1, NULL, NULL),
(13, 'BENER MERIAH', 1, NULL, NULL),
(14, 'ACEH JAYA', 1, NULL, NULL),
(15, 'LHOKSEUMAWE', 1, NULL, NULL),
(16, 'ACEH BARAT', 1, NULL, NULL),
(17, 'NAGAN RAYA', 1, NULL, NULL),
(18, 'LANGSA', 1, NULL, NULL),
(19, 'BANDA ACEH', 1, NULL, NULL),
(20, 'ACEH SINGKIL', 1, NULL, NULL),
(21, 'SABANG', 1, NULL, NULL),
(22, 'ACEH TENGAH', 1, NULL, NULL),
(23, 'SUBULUSSALAM', 1, NULL, NULL),
(24, 'NIAS SELATAN', 2, NULL, NULL),
(25, 'MANDAILING NATAL', 2, NULL, NULL),
(26, 'DAIRI', 2, NULL, NULL),
(27, 'LABUHAN BATU UTARA', 2, NULL, NULL),
(28, 'TAPANULI UTARA', 2, NULL, NULL),
(29, 'SIMALUNGUN', 2, NULL, NULL),
(30, 'LANGKAT', 2, NULL, NULL),
(31, 'SERDANG BEDAGAI', 2, NULL, NULL),
(32, 'TAPANULI SELATAN', 2, NULL, NULL),
(33, 'ASAHAN', 2, NULL, NULL),
(34, 'PADANG LAWAS UTARA', 2, NULL, NULL),
(35, 'PADANG LAWAS', 2, NULL, NULL),
(36, 'LABUHAN BATU SELATAN', 2, NULL, NULL),
(37, 'PADANG SIDEMPUAN', 2, NULL, NULL),
(38, 'TOBA SAMOSIR', 2, NULL, NULL),
(39, 'TAPANULI TENGAH', 2, NULL, NULL),
(40, 'HUMBANG HASUNDUTAN', 2, NULL, NULL),
(41, 'SIBOLGA', 2, NULL, NULL),
(42, 'BATU BARA', 2, NULL, NULL),
(43, 'SAMOSIR', 2, NULL, NULL),
(44, 'PEMATANG SIANTAR', 2, NULL, NULL),
(45, 'LABUHAN BATU', 2, NULL, NULL),
(46, 'DELI SERDANG', 2, NULL, NULL),
(47, 'GUNUNGSITOLI', 2, NULL, NULL),
(48, 'NIAS UTARA', 2, NULL, NULL),
(49, 'NIAS', 2, NULL, NULL),
(50, 'KARO', 2, NULL, NULL),
(51, 'NIAS BARAT', 2, NULL, NULL),
(52, 'MEDAN', 2, NULL, NULL),
(53, 'PAKPAK BHARAT', 2, NULL, NULL),
(54, 'TEBING TINGGI', 2, NULL, NULL),
(55, 'BINJAI', 2, NULL, NULL),
(56, 'TANJUNG BALAI', 2, NULL, NULL),
(57, 'DHARMASRAYA', 3, NULL, NULL),
(58, 'SOLOK SELATAN', 3, NULL, NULL),
(59, 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)', 3, NULL, NULL),
(60, 'PASAMAN BARAT', 3, NULL, NULL),
(61, 'SOLOK', 3, NULL, NULL),
(62, 'PASAMAN', 3, NULL, NULL),
(63, 'PARIAMAN', 3, NULL, NULL),
(64, 'TANAH DATAR', 3, NULL, NULL),
(65, 'PADANG PARIAMAN', 3, NULL, NULL),
(66, 'PESISIR SELATAN', 3, NULL, NULL),
(67, 'PADANG', 3, NULL, NULL),
(68, 'SAWAH LUNTO', 3, NULL, NULL),
(69, 'LIMA PULUH KOTO / KOTA', 3, NULL, NULL),
(70, 'AGAM', 3, NULL, NULL),
(71, 'PAYAKUMBUH', 3, NULL, NULL),
(72, 'BUKITTINGGI', 3, NULL, NULL),
(73, 'PADANG PANJANG', 3, NULL, NULL),
(74, 'KEPULAUAN MENTAWAI', 3, NULL, NULL),
(75, 'INDRAGIRI HILIR', 4, NULL, NULL),
(76, 'KUANTAN SINGINGI', 4, NULL, NULL),
(77, 'PELALAWAN', 4, NULL, NULL),
(78, 'PEKANBARU', 4, NULL, NULL),
(79, 'ROKAN HILIR', 4, NULL, NULL),
(80, 'BENGKALIS', 4, NULL, NULL),
(81, 'INDRAGIRI HULU', 4, NULL, NULL),
(82, 'ROKAN HULU', 4, NULL, NULL),
(83, 'KAMPAR', 4, NULL, NULL),
(84, 'KEPULAUAN MERANTI', 4, NULL, NULL),
(85, 'DUMAI', 4, NULL, NULL),
(86, 'SIAK', 4, NULL, NULL),
(87, 'TEBO', 5, NULL, NULL),
(88, 'TANJUNG JABUNG BARAT', 5, NULL, NULL),
(89, 'MUARO JAMBI', 5, NULL, NULL),
(90, 'KERINCI', 5, NULL, NULL),
(91, 'MERANGIN', 5, NULL, NULL),
(92, 'BUNGO', 5, NULL, NULL),
(93, 'TANJUNG JABUNG TIMUR', 5, NULL, NULL),
(94, 'SUNGAIPENUH', 5, NULL, NULL),
(95, 'BATANG HARI', 5, NULL, NULL),
(96, 'JAMBI', 5, NULL, NULL),
(97, 'SAROLANGUN', 5, NULL, NULL),
(98, 'PALEMBANG', 6, NULL, NULL),
(99, 'LAHAT', 6, NULL, NULL),
(100, 'OGAN KOMERING ULU TIMUR', 6, NULL, NULL),
(101, 'MUSI BANYUASIN', 6, NULL, NULL),
(102, 'PAGAR ALAM', 6, NULL, NULL),
(103, 'OGAN KOMERING ULU SELATAN', 6, NULL, NULL),
(104, 'BANYUASIN', 6, NULL, NULL),
(105, 'MUSI RAWAS', 6, NULL, NULL),
(106, 'MUARA ENIM', 6, NULL, NULL),
(107, 'OGAN KOMERING ULU', 6, NULL, NULL),
(108, 'OGAN KOMERING ILIR', 6, NULL, NULL),
(109, 'EMPAT LAWANG', 6, NULL, NULL),
(110, 'LUBUK LINGGAU', 6, NULL, NULL),
(111, 'PRABUMULIH', 6, NULL, NULL),
(112, 'OGAN ILIR', 6, NULL, NULL),
(113, 'BENGKULU TENGAH', 7, NULL, NULL),
(114, 'REJANG LEBONG', 7, NULL, NULL),
(115, 'MUKO MUKO', 7, NULL, NULL),
(116, 'KAUR', 7, NULL, NULL),
(117, 'BENGKULU UTARA', 7, NULL, NULL),
(118, 'LEBONG', 7, NULL, NULL),
(119, 'KEPAHIANG', 7, NULL, NULL),
(120, 'BENGKULU SELATAN', 7, NULL, NULL),
(121, 'SELUMA', 7, NULL, NULL),
(122, 'BENGKULU', 7, NULL, NULL),
(123, 'LAMPUNG UTARA', 8, NULL, NULL),
(124, 'WAY KANAN', 8, NULL, NULL),
(125, 'LAMPUNG TENGAH', 8, NULL, NULL),
(126, 'MESUJI', 8, NULL, NULL),
(127, 'PRINGSEWU', 8, NULL, NULL),
(128, 'LAMPUNG TIMUR', 8, NULL, NULL),
(129, 'LAMPUNG SELATAN', 8, NULL, NULL),
(130, 'TULANG BAWANG', 8, NULL, NULL),
(131, 'TULANG BAWANG BARAT', 8, NULL, NULL),
(132, 'TANGGAMUS', 8, NULL, NULL),
(133, 'LAMPUNG BARAT', 8, NULL, NULL),
(134, 'PESISIR BARAT', 8, NULL, NULL),
(135, 'PESAWARAN', 8, NULL, NULL),
(136, 'BANDAR LAMPUNG', 8, NULL, NULL),
(137, 'METRO', 8, NULL, NULL),
(138, 'BELITUNG', 9, NULL, NULL),
(139, 'BELITUNG TIMUR', 9, NULL, NULL),
(140, 'BANGKA', 9, NULL, NULL),
(141, 'BANGKA SELATAN', 9, NULL, NULL),
(142, 'BANGKA BARAT', 9, NULL, NULL),
(143, 'PANGKAL PINANG', 9, NULL, NULL),
(144, 'BANGKA TENGAH', 9, NULL, NULL),
(145, 'KEPULAUAN ANAMBAS', 10, NULL, NULL),
(146, 'BINTAN', 10, NULL, NULL),
(147, 'NATUNA', 10, NULL, NULL),
(148, 'BATAM', 10, NULL, NULL),
(149, 'TANJUNG PINANG', 10, NULL, NULL),
(150, 'KARIMUN', 10, NULL, NULL),
(151, 'LINGGA', 10, NULL, NULL),
(152, 'JAKARTA UTARA', 11, NULL, NULL),
(153, 'JAKARTA BARAT', 11, NULL, NULL),
(154, 'JAKARTA TIMUR', 11, NULL, NULL),
(155, 'JAKARTA SELATAN', 11, NULL, NULL),
(156, 'JAKARTA PUSAT', 11, NULL, NULL),
(157, 'KEPULAUAN SERIBU', 11, NULL, NULL),
(158, 'DEPOK', 12, NULL, NULL),
(159, 'KARAWANG', 12, NULL, NULL),
(160, 'CIREBON', 12, NULL, NULL),
(161, 'BANDUNG', 12, NULL, NULL),
(162, 'SUKABUMI', 12, NULL, NULL),
(163, 'SUMEDANG', 12, NULL, NULL),
(164, 'INDRAMAYU', 12, NULL, NULL),
(165, 'MAJALENGKA', 12, NULL, NULL),
(166, 'KUNINGAN', 12, NULL, NULL),
(167, 'TASIKMALAYA', 12, NULL, NULL),
(168, 'CIAMIS', 12, NULL, NULL),
(169, 'SUBANG', 12, NULL, NULL),
(170, 'PURWAKARTA', 12, NULL, NULL),
(171, 'BOGOR', 12, NULL, NULL),
(172, 'BEKASI', 12, NULL, NULL),
(173, 'GARUT', 12, NULL, NULL),
(174, 'PANGANDARAN', 12, NULL, NULL),
(175, 'CIANJUR', 12, NULL, NULL),
(176, 'BANJAR', 12, NULL, NULL),
(177, 'BANDUNG BARAT', 12, NULL, NULL),
(178, 'CIMAHI', 12, NULL, NULL),
(179, 'PURBALINGGA', 13, NULL, NULL),
(180, 'KEBUMEN', 13, NULL, NULL),
(181, 'MAGELANG', 13, NULL, NULL),
(182, 'CILACAP', 13, NULL, NULL),
(183, 'BATANG', 13, NULL, NULL),
(184, 'BANJARNEGARA', 13, NULL, NULL),
(185, 'BLORA', 13, NULL, NULL),
(186, 'BREBES', 13, NULL, NULL),
(187, 'BANYUMAS', 13, NULL, NULL),
(188, 'WONOSOBO', 13, NULL, NULL),
(189, 'TEGAL', 13, NULL, NULL),
(190, 'PURWOREJO', 13, NULL, NULL),
(191, 'PATI', 13, NULL, NULL),
(192, 'SUKOHARJO', 13, NULL, NULL),
(193, 'KARANGANYAR', 13, NULL, NULL),
(194, 'PEKALONGAN', 13, NULL, NULL),
(195, 'PEMALANG', 13, NULL, NULL),
(196, 'BOYOLALI', 13, NULL, NULL),
(197, 'GROBOGAN', 13, NULL, NULL),
(198, 'SEMARANG', 13, NULL, NULL),
(199, 'DEMAK', 13, NULL, NULL),
(200, 'REMBANG', 13, NULL, NULL),
(201, 'KLATEN', 13, NULL, NULL),
(202, 'KUDUS', 13, NULL, NULL),
(203, 'TEMANGGUNG', 13, NULL, NULL),
(204, 'SRAGEN', 13, NULL, NULL),
(205, 'JEPARA', 13, NULL, NULL),
(206, 'WONOGIRI', 13, NULL, NULL),
(207, 'KENDAL', 13, NULL, NULL),
(208, 'SURAKARTA (SOLO)', 13, NULL, NULL),
(209, 'SALATIGA', 13, NULL, NULL),
(210, 'SLEMAN', 14, NULL, NULL),
(211, 'BANTUL', 14, NULL, NULL),
(212, 'YOGYAKARTA', 14, NULL, NULL),
(213, 'GUNUNG KIDUL', 14, NULL, NULL),
(214, 'KULON PROGO', 14, NULL, NULL),
(215, 'GRESIK', 15, NULL, NULL),
(216, 'KEDIRI', 15, NULL, NULL),
(217, 'SAMPANG', 15, NULL, NULL),
(218, 'BANGKALAN', 15, NULL, NULL),
(219, 'SUMENEP', 15, NULL, NULL),
(220, 'SITUBONDO', 15, NULL, NULL),
(221, 'SURABAYA', 15, NULL, NULL),
(222, 'JEMBER', 15, NULL, NULL),
(223, 'PAMEKASAN', 15, NULL, NULL),
(224, 'JOMBANG', 15, NULL, NULL),
(225, 'PROBOLINGGO', 15, NULL, NULL),
(226, 'BANYUWANGI', 15, NULL, NULL),
(227, 'PASURUAN', 15, NULL, NULL),
(228, 'BOJONEGORO', 15, NULL, NULL),
(229, 'BONDOWOSO', 15, NULL, NULL),
(230, 'MAGETAN', 15, NULL, NULL),
(231, 'LUMAJANG', 15, NULL, NULL),
(232, 'MALANG', 15, NULL, NULL),
(233, 'BLITAR', 15, NULL, NULL),
(234, 'SIDOARJO', 15, NULL, NULL),
(235, 'LAMONGAN', 15, NULL, NULL),
(236, 'PACITAN', 15, NULL, NULL),
(237, 'TULUNGAGUNG', 15, NULL, NULL),
(238, 'MOJOKERTO', 15, NULL, NULL),
(239, 'MADIUN', 15, NULL, NULL),
(240, 'PONOROGO', 15, NULL, NULL),
(241, 'NGAWI', 15, NULL, NULL),
(242, 'NGANJUK', 15, NULL, NULL),
(243, 'TUBAN', 15, NULL, NULL),
(244, 'TRENGGALEK', 15, NULL, NULL),
(245, 'BATU', 15, NULL, NULL),
(246, 'TANGERANG', 16, NULL, NULL),
(247, 'SERANG', 16, NULL, NULL),
(248, 'PANDEGLANG', 16, NULL, NULL),
(249, 'LEBAK', 16, NULL, NULL),
(250, 'TANGERANG SELATAN', 16, NULL, NULL),
(251, 'CILEGON', 16, NULL, NULL),
(252, 'KLUNGKUNG', 17, NULL, NULL),
(253, 'KARANGASEM', 17, NULL, NULL),
(254, 'BANGLI', 17, NULL, NULL),
(255, 'TABANAN', 17, NULL, NULL),
(256, 'GIANYAR', 17, NULL, NULL),
(257, 'BADUNG', 17, NULL, NULL),
(258, 'JEMBRANA', 17, NULL, NULL),
(259, 'BULELENG', 17, NULL, NULL),
(260, 'DENPASAR', 17, NULL, NULL),
(261, 'MATARAM', 18, NULL, NULL),
(262, 'DOMPU', 18, NULL, NULL),
(263, 'SUMBAWA BARAT', 18, NULL, NULL),
(264, 'SUMBAWA', 18, NULL, NULL),
(265, 'LOMBOK TENGAH', 18, NULL, NULL),
(266, 'LOMBOK TIMUR', 18, NULL, NULL),
(267, 'LOMBOK UTARA', 18, NULL, NULL),
(268, 'LOMBOK BARAT', 18, NULL, NULL),
(269, 'BIMA', 18, NULL, NULL),
(270, 'TIMOR TENGAH SELATAN', 19, NULL, NULL),
(271, 'FLORES TIMUR', 19, NULL, NULL),
(272, 'ALOR', 19, NULL, NULL),
(273, 'ENDE', 19, NULL, NULL),
(274, 'NAGEKEO', 19, NULL, NULL),
(275, 'KUPANG', 19, NULL, NULL),
(276, 'SIKKA', 19, NULL, NULL),
(277, 'NGADA', 19, NULL, NULL),
(278, 'TIMOR TENGAH UTARA', 19, NULL, NULL),
(279, 'BELU', 19, NULL, NULL),
(280, 'LEMBATA', 19, NULL, NULL),
(281, 'SUMBA BARAT DAYA', 19, NULL, NULL),
(282, 'SUMBA BARAT', 19, NULL, NULL),
(283, 'SUMBA TENGAH', 19, NULL, NULL),
(284, 'SUMBA TIMUR', 19, NULL, NULL),
(285, 'ROTE NDAO', 19, NULL, NULL),
(286, 'MANGGARAI TIMUR', 19, NULL, NULL),
(287, 'MANGGARAI', 19, NULL, NULL),
(288, 'SABU RAIJUA', 19, NULL, NULL),
(289, 'MANGGARAI BARAT', 19, NULL, NULL),
(290, 'LANDAK', 20, NULL, NULL),
(291, 'KETAPANG', 20, NULL, NULL),
(292, 'SINTANG', 20, NULL, NULL),
(293, 'KUBU RAYA', 20, NULL, NULL),
(294, 'PONTIANAK', 20, NULL, NULL),
(295, 'KAYONG UTARA', 20, NULL, NULL),
(296, 'BENGKAYANG', 20, NULL, NULL),
(297, 'KAPUAS HULU', 20, NULL, NULL),
(298, 'SAMBAS', 20, NULL, NULL),
(299, 'SINGKAWANG', 20, NULL, NULL),
(300, 'SANGGAU', 20, NULL, NULL),
(301, 'MELAWI', 20, NULL, NULL),
(302, 'SEKADAU', 20, NULL, NULL),
(303, 'KOTAWARINGIN TIMUR', 21, NULL, NULL),
(304, 'SUKAMARA', 21, NULL, NULL),
(305, 'KOTAWARINGIN BARAT', 21, NULL, NULL),
(306, 'BARITO TIMUR', 21, NULL, NULL),
(307, 'KAPUAS', 21, NULL, NULL),
(308, 'PULANG PISAU', 21, NULL, NULL),
(309, 'LAMANDAU', 21, NULL, NULL),
(310, 'SERUYAN', 21, NULL, NULL),
(311, 'KATINGAN', 21, NULL, NULL),
(312, 'BARITO SELATAN', 21, NULL, NULL),
(313, 'MURUNG RAYA', 21, NULL, NULL),
(314, 'BARITO UTARA', 21, NULL, NULL),
(315, 'GUNUNG MAS', 21, NULL, NULL),
(316, 'PALANGKA RAYA', 21, NULL, NULL),
(317, 'TAPIN', 22, NULL, NULL),
(318, 'BANJAR', 22, NULL, NULL),
(319, 'HULU SUNGAI TENGAH', 22, NULL, NULL),
(320, 'TABALONG', 22, NULL, NULL),
(321, 'HULU SUNGAI UTARA', 22, NULL, NULL),
(322, 'BALANGAN', 22, NULL, NULL),
(323, 'TANAH BUMBU', 22, NULL, NULL),
(324, 'BANJARMASIN', 22, NULL, NULL),
(325, 'KOTABARU', 22, NULL, NULL),
(326, 'TANAH LAUT', 22, NULL, NULL),
(327, 'HULU SUNGAI SELATAN', 22, NULL, NULL),
(328, 'BARITO KUALA', 22, NULL, NULL),
(329, 'BANJARBARU', 22, NULL, NULL),
(330, 'KUTAI BARAT', 23, NULL, NULL),
(331, 'SAMARINDA', 23, NULL, NULL),
(332, 'PASER', 23, NULL, NULL),
(333, 'KUTAI KARTANEGARA', 23, NULL, NULL),
(334, 'BERAU', 23, NULL, NULL),
(335, 'PENAJAM PASER UTARA', 23, NULL, NULL),
(336, 'BONTANG', 23, NULL, NULL),
(337, 'KUTAI TIMUR', 23, NULL, NULL),
(338, 'BALIKPAPAN', 23, NULL, NULL),
(339, 'MALINAU', 24, NULL, NULL),
(340, 'NUNUKAN', 24, NULL, NULL),
(341, 'BULUNGAN (BULONGAN)', 24, NULL, NULL),
(342, 'TANA TIDUNG', 24, NULL, NULL),
(343, 'TARAKAN', 24, NULL, NULL),
(344, 'BOLAANG MONGONDOW (BOLMONG)', 25, NULL, NULL),
(345, 'BOLAANG MONGONDOW SELATAN', 25, NULL, NULL),
(346, 'MINAHASA SELATAN', 25, NULL, NULL),
(347, 'BITUNG', 25, NULL, NULL),
(348, 'MINAHASA', 25, NULL, NULL),
(349, 'KEPULAUAN SANGIHE', 25, NULL, NULL),
(350, 'MINAHASA UTARA', 25, NULL, NULL),
(351, 'KEPULAUAN TALAUD', 25, NULL, NULL),
(352, 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)', 25, NULL, NULL),
(353, 'MANADO', 25, NULL, NULL),
(354, 'BOLAANG MONGONDOW UTARA', 25, NULL, NULL),
(355, 'BOLAANG MONGONDOW TIMUR', 25, NULL, NULL),
(356, 'MINAHASA TENGGARA', 25, NULL, NULL),
(357, 'KOTAMOBAGU', 25, NULL, NULL),
(358, 'TOMOHON', 25, NULL, NULL),
(359, 'BANGGAI KEPULAUAN', 26, NULL, NULL),
(360, 'TOLI-TOLI', 26, NULL, NULL),
(361, 'PARIGI MOUTONG', 26, NULL, NULL),
(362, 'BUOL', 26, NULL, NULL),
(363, 'DONGGALA', 26, NULL, NULL),
(364, 'POSO', 26, NULL, NULL),
(365, 'MOROWALI', 26, NULL, NULL),
(366, 'TOJO UNA-UNA', 26, NULL, NULL),
(367, 'BANGGAI', 26, NULL, NULL),
(368, 'SIGI', 26, NULL, NULL),
(369, 'PALU', 26, NULL, NULL),
(370, 'MAROS', 27, NULL, NULL),
(371, 'WAJO', 27, NULL, NULL),
(372, 'BONE', 27, NULL, NULL),
(373, 'SOPPENG', 27, NULL, NULL),
(374, 'SIDENRENG RAPPANG / RAPANG', 27, NULL, NULL),
(375, 'TAKALAR', 27, NULL, NULL),
(376, 'BARRU', 27, NULL, NULL),
(377, 'LUWU TIMUR', 27, NULL, NULL),
(378, 'SINJAI', 27, NULL, NULL),
(379, 'PANGKAJENE KEPULAUAN', 27, NULL, NULL),
(380, 'PINRANG', 27, NULL, NULL),
(381, 'JENEPONTO', 27, NULL, NULL),
(382, 'PALOPO', 27, NULL, NULL),
(383, 'TORAJA UTARA', 27, NULL, NULL),
(384, 'LUWU', 27, NULL, NULL),
(385, 'BULUKUMBA', 27, NULL, NULL),
(386, 'MAKASSAR', 27, NULL, NULL),
(387, 'SELAYAR (KEPULAUAN SELAYAR)', 27, NULL, NULL),
(388, 'TANA TORAJA', 27, NULL, NULL),
(389, 'LUWU UTARA', 27, NULL, NULL),
(390, 'BANTAENG', 27, NULL, NULL),
(391, 'GOWA', 27, NULL, NULL),
(392, 'ENREKANG', 27, NULL, NULL),
(393, 'PAREPARE', 27, NULL, NULL),
(394, 'KOLAKA', 28, NULL, NULL),
(395, 'MUNA', 28, NULL, NULL),
(396, 'KONAWE SELATAN', 28, NULL, NULL),
(397, 'KENDARI', 28, NULL, NULL),
(398, 'KONAWE', 28, NULL, NULL),
(399, 'KONAWE UTARA', 28, NULL, NULL),
(400, 'KOLAKA UTARA', 28, NULL, NULL),
(401, 'BUTON', 28, NULL, NULL),
(402, 'BOMBANA', 28, NULL, NULL),
(403, 'WAKATOBI', 28, NULL, NULL),
(404, 'BAU-BAU', 28, NULL, NULL),
(405, 'BUTON UTARA', 28, NULL, NULL),
(406, 'GORONTALO UTARA', 29, NULL, NULL),
(407, 'BONE BOLANGO', 29, NULL, NULL),
(408, 'GORONTALO', 29, NULL, NULL),
(409, 'BOALEMO', 29, NULL, NULL),
(410, 'POHUWATO', 29, NULL, NULL),
(411, 'MAJENE', 30, NULL, NULL),
(412, 'MAMUJU', 30, NULL, NULL),
(413, 'MAMUJU UTARA', 30, NULL, NULL),
(414, 'POLEWALI MANDAR', 30, NULL, NULL),
(415, 'MAMASA', 30, NULL, NULL),
(416, 'MALUKU TENGGARA BARAT', 31, NULL, NULL),
(417, 'MALUKU TENGGARA', 31, NULL, NULL),
(418, 'SERAM BAGIAN BARAT', 31, NULL, NULL),
(419, 'MALUKU TENGAH', 31, NULL, NULL),
(420, 'SERAM BAGIAN TIMUR', 31, NULL, NULL),
(421, 'MALUKU BARAT DAYA', 31, NULL, NULL),
(422, 'AMBON', 31, NULL, NULL),
(423, 'BURU', 31, NULL, NULL),
(424, 'BURU SELATAN', 31, NULL, NULL),
(425, 'KEPULAUAN ARU', 31, NULL, NULL),
(426, 'TUAL', 31, NULL, NULL),
(427, 'HALMAHERA BARAT', 32, NULL, NULL),
(428, 'TIDORE KEPULAUAN', 32, NULL, NULL),
(429, 'TERNATE', 32, NULL, NULL),
(430, 'PULAU MOROTAI', 32, NULL, NULL),
(431, 'KEPULAUAN SULA', 32, NULL, NULL),
(432, 'HALMAHERA SELATAN', 32, NULL, NULL),
(433, 'HALMAHERA TENGAH', 32, NULL, NULL),
(434, 'HALMAHERA TIMUR', 32, NULL, NULL),
(435, 'HALMAHERA UTARA', 32, NULL, NULL),
(436, 'YALIMO', 33, NULL, NULL),
(437, 'DOGIYAI', 33, NULL, NULL),
(438, 'ASMAT', 33, NULL, NULL),
(439, 'JAYAPURA', 33, NULL, NULL),
(440, 'PANIAI', 33, NULL, NULL),
(441, 'MAPPI', 33, NULL, NULL),
(442, 'TOLIKARA', 33, NULL, NULL),
(443, 'PUNCAK JAYA', 33, NULL, NULL),
(444, 'PEGUNUNGAN BINTANG', 33, NULL, NULL),
(445, 'JAYAWIJAYA', 33, NULL, NULL),
(446, 'LANNY JAYA', 33, NULL, NULL),
(447, 'NDUGA', 33, NULL, NULL),
(448, 'BIAK NUMFOR', 33, NULL, NULL),
(449, 'KEPULAUAN YAPEN (YAPEN WAROPEN)', 33, NULL, NULL),
(450, 'PUNCAK', 33, NULL, NULL),
(451, 'INTAN JAYA', 33, NULL, NULL),
(452, 'WAROPEN', 33, NULL, NULL),
(453, 'NABIRE', 33, NULL, NULL),
(454, 'MIMIKA', 33, NULL, NULL),
(455, 'BOVEN DIGOEL', 33, NULL, NULL),
(456, 'YAHUKIMO', 33, NULL, NULL),
(457, 'SARMI', 33, NULL, NULL),
(458, 'MERAUKE', 33, NULL, NULL),
(459, 'DEIYAI (DELIYAI)', 33, NULL, NULL),
(460, 'KEEROM', 33, NULL, NULL),
(461, 'SUPIORI', 33, NULL, NULL),
(462, 'MAMBERAMO RAYA', 33, NULL, NULL),
(463, 'MAMBERAMO TENGAH', 33, NULL, NULL),
(464, 'RAJA AMPAT', 34, NULL, NULL),
(465, 'MANOKWARI SELATAN', 34, NULL, NULL),
(466, 'MANOKWARI', 34, NULL, NULL),
(467, 'KAIMANA', 34, NULL, NULL),
(468, 'MAYBRAT', 34, NULL, NULL),
(469, 'SORONG SELATAN', 34, NULL, NULL),
(470, 'FAKFAK', 34, NULL, NULL),
(471, 'PEGUNUNGAN ARFAK', 34, NULL, NULL),
(472, 'TAMBRAUW', 34, NULL, NULL),
(473, 'SORONG', 34, NULL, NULL),
(474, 'TELUK WONDAMA', 34, NULL, NULL),
(475, 'TELUK BINTUNI', 34, NULL, NULL),
(476, 'ALL Kabupaten', 35, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatans`
--

DROP TABLE IF EXISTS `kecamatans`;
CREATE TABLE IF NOT EXISTS `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_kabupaten` int(11) NOT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahans`
--

DROP TABLE IF EXISTS `kelurahans`;
CREATE TABLE IF NOT EXISTS `kelurahans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_09_080503_create_provinsis_table', 1),
(6, '2022_08_09_080527_create_kabupatens_table', 1),
(7, '2022_08_09_080548_create_kecamatans_table', 1),
(8, '2022_08_09_080628_create_kelurahans_table', 1),
(9, '2022_08_09_080740_create_pangkalans_table', 1),
(10, '2022_08_09_090346_create_user_apps_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkalans`
--

DROP TABLE IF EXISTS `pangkalans`;
CREATE TABLE IF NOT EXISTS `pangkalans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_type` int(11) DEFAULT NULL,
  `id_registrasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pangkalan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon_kantor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pangkalans`
--

INSERT INTO `pangkalans` (`id`, `id_type`, `id_registrasi`, `nama_pangkalan`, `telpon_kantor`, `nama_pemilik`, `nik`, `no_hp`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `kode_pos`, `alamat`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, NULL, '123123123', 'PT Amnah Raya 1', '0851645878', 'Hamzah', '13711040296004', '082122855458', '3', '67', 'padang', 'padang selatan', '-', 'jalan raya lubuk minturun rt 05\r\njalan raya lubuk minturun', 'AKTIF', 'Diterima', NULL, NULL),
(2, NULL, '1313123123', 'Voluptatem in sapien', '08554465421', 'Itaque irure omnis q', '21551145165165', '0851524424', '3', '67', 'Officiis provident', 'Asperiores officiis', 'Consequuntur pariatu', 'Quas ab error fuga', 'TIDAK AKTIF', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsis`
--

DROP TABLE IF EXISTS `provinsis`;
CREATE TABLE IF NOT EXISTS `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinsis`
--

INSERT INTO `provinsis` (`id`, `provinsi`, `created_at`, `updated_at`) VALUES
(1, 'ACEH', NULL, NULL),
(2, 'SUMATERA UTARA', NULL, NULL),
(3, 'SUMATERA BARAT', NULL, NULL),
(4, 'RIAU', NULL, NULL),
(5, 'JAMBI', NULL, NULL),
(6, 'SUMATERA SELATAN', NULL, NULL),
(7, 'BENGKULU', NULL, NULL),
(8, 'LAMPUNG', NULL, NULL),
(9, 'KEPULAUAN BANGKA BELITUNG', NULL, NULL),
(10, 'KEPULAUAN RIAU', NULL, NULL),
(11, 'DKI JAKARTA', NULL, NULL),
(12, 'JAWA BARAT', NULL, NULL),
(13, 'JAWA TENGAH', NULL, NULL),
(14, 'DI YOGYAKARTA', NULL, NULL),
(15, 'JAWA TIMUR', NULL, NULL),
(16, 'BANTEN', NULL, NULL),
(17, 'BALI', NULL, NULL),
(18, 'NUSA TENGGARA BARAT', NULL, NULL),
(19, 'NUSA TENGGARA TIMUR', NULL, NULL),
(20, 'KALIMANTAN BARAT', NULL, NULL),
(21, 'KALIMANTAN TENGAH', NULL, NULL),
(22, 'KALIMANTAN SELATAN', NULL, NULL),
(23, 'KALIMANTAN TIMUR', NULL, NULL),
(24, 'KALIMANTAN UTARA', NULL, NULL),
(25, 'SULAWESI UTARA', NULL, NULL),
(26, 'SULAWESI TENGAH', NULL, NULL),
(27, 'SULAWESI SELATAN', NULL, NULL),
(28, 'SULAWESI TENGGARA', NULL, NULL),
(29, 'GORONTALO', NULL, NULL),
(30, 'SULAWESI BARAT', NULL, NULL),
(31, 'MALUKU', NULL, NULL),
(32, 'MALUKU UTARA', NULL, NULL),
(33, 'PAPUA', NULL, NULL),
(34, 'PAPUA BARAT', NULL, NULL),
(35, 'ALL Provinisi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'PT Pertamina');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_apps`
--

DROP TABLE IF EXISTS `user_apps`;
CREATE TABLE IF NOT EXISTS `user_apps` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `mor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sold_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `level` enum('SUPER ADMIN','ADMIN APROVAL','AGEN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_apps`
--

INSERT INTO `user_apps` (`id`, `nama`, `email`, `password`, `telpon`, `id_provinsi`, `id_kabupaten`, `mor`, `sold_to`, `alamat`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRATOR', 'admin@gmail.com', '$2y$10$Az7dXw9KgZcXoaXq9TaPpeBWLowSCnTkDP4yz78uD6hyRbtBfhkZS', '082122855458', 35, 476, NULL, NULL, NULL, 'SUPER ADMIN', NULL, NULL, NULL),
(2, 'gema fajar', 'gemafajar09@gmail.com', '$2y$10$Az7dXw9KgZcXoaXq9TaPpeBWLowSCnTkDP4yz78uD6hyRbtBfhkZS', '085162658554', 3, 67, NULL, NULL, NULL, 'ADMIN APROVAL', NULL, NULL, NULL),
(3, 'PT Aziz Mulya', 'aziz@gmail.com', '$2y$10$Az7dXw9KgZcXoaXq9TaPpeBWLowSCnTkDP4yz78uD6hyRbtBfhkZS', NULL, 3, 67, '1', '175485', 'padang', 'AGEN', NULL, NULL, NULL),
(4, 'PT Imam Mulya', 'imam@gmail.com', '$2y$10$nXJAJe4.Tu/ydawZzGh8O.1oy7d7JKmf60gFtq/SGGAjD4EkpDIIm', NULL, 3, 67, '2', '123456', 'padang', 'AGEN', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
