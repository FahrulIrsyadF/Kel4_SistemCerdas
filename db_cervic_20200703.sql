-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2021 pada 11.02
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cervic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `code_class` int(11) DEFAULT NULL,
  `name_class` varchar(20) DEFAULT NULL,
  `timestamp_class` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`id_class`, `code_class`, `name_class`, `timestamp_class`) VALUES
(1, 1, 'Positif', '2021-06-16 06:15:28'),
(2, 0, 'Negatif', '2021-06-16 06:27:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `id_weight` int(11) NOT NULL,
  `name_test` varchar(512) DEFAULT NULL,
  `age_test` int(11) DEFAULT NULL,
  `ts_behaviour_sexualrisk` int(11) DEFAULT NULL,
  `ts_behavior_eating` int(11) DEFAULT NULL,
  `ts_behavior_personalhygine` int(11) DEFAULT NULL,
  `ts_intention_aggregation` int(11) DEFAULT NULL,
  `ts_intention_commitment` int(11) DEFAULT NULL,
  `ts_attitude_consistency` int(11) DEFAULT NULL,
  `ts_attitude_spontaneity` int(11) DEFAULT NULL,
  `ts_norm_significantperson` int(11) DEFAULT NULL,
  `ts_norm_fulfillment` int(11) DEFAULT NULL,
  `ts_perception_vulnerability` int(11) DEFAULT NULL,
  `ts_perception_severity` int(11) DEFAULT NULL,
  `ts_motivation_strength` int(11) DEFAULT NULL,
  `ts_motivation_willingness` int(11) DEFAULT NULL,
  `ts_socialsupport_emotionality` int(11) DEFAULT NULL,
  `ts_socialsupport_appreciation` int(11) DEFAULT NULL,
  `ts_socialsupport_instrumental` int(11) DEFAULT NULL,
  `ts_empowerment_knowledge` int(11) DEFAULT NULL,
  `ts_empowerment_abilities` int(11) DEFAULT NULL,
  `ts_empowerment_desires` int(11) DEFAULT NULL,
  `ts_timestamp` datetime DEFAULT NULL,
  `result_a` float DEFAULT NULL,
  `result_b` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id_test`, `id_class`, `id_weight`, `name_test`, `age_test`, `ts_behaviour_sexualrisk`, `ts_behavior_eating`, `ts_behavior_personalhygine`, `ts_intention_aggregation`, `ts_intention_commitment`, `ts_attitude_consistency`, `ts_attitude_spontaneity`, `ts_norm_significantperson`, `ts_norm_fulfillment`, `ts_perception_vulnerability`, `ts_perception_severity`, `ts_motivation_strength`, `ts_motivation_willingness`, `ts_socialsupport_emotionality`, `ts_socialsupport_appreciation`, `ts_socialsupport_instrumental`, `ts_empowerment_knowledge`, `ts_empowerment_abilities`, `ts_empowerment_desires`, `ts_timestamp`, `result_a`, `result_b`) VALUES
(1, 2, 1, 'Tika', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2021-06-22 11:21:45', 19.1955, 40.8479),
(2, 1, 1, 'Siti', 20, 10, 12, 12, 8, 10, 8, 6, 2, 7, 6, 2, 12, 11, 9, 8, 12, 10, 10, 9, '2021-06-30 10:38:22', 37.1748, 15.4673),
(3, 1, 1, 'Neg', 34, 9, 12, 13, 9, 13, 6, 6, 5, 14, 13, 10, 13, 12, 11, 8, 12, 11, 13, 15, '2021-06-30 10:41:36', 45.9423, 11.0388),
(4, 2, 4, 'Neg', 20, 9, 12, 13, 10, 13, 6, 6, 5, 14, 13, 10, 13, 12, 11, 8, 12, 11, 13, 15, '2021-06-30 10:43:15', 3.40282e38, 3.40282e38),
(5, 2, 4, 'Pos', 10, 10, 11, 12, 2, 10, 8, 8, 2, 10, 8, 7, 6, 5, 3, 2, 4, 4, 4, 3, '2021-06-30 10:44:18', 3.40282e38, 3.40282e38),
(6, 2, 4, 'Poss', 20, 10, 12, 12, 8, 10, 8, 6, 2, 7, 6, 2, 12, 11, 9, 8, 12, 10, 10, 9, '2021-06-30 10:45:34', 3.40282e38, 3.40282e38),
(7, 2, 5, 'Neg', 21, 9, 12, 13, 10, 13, 6, 6, 5, 14, 13, 10, 13, 12, 11, 8, 12, 11, 13, 15, '2021-06-30 10:48:29', 20.7428, 20.7428),
(8, 2, 5, 'Posa', 23, 10, 12, 12, 8, 10, 8, 6, 2, 7, 6, 2, 12, 11, 9, 8, 12, 10, 10, 9, '2021-06-30 10:49:34', 32.6393, 32.6393),
(9, 2, 5, 'Negat', 22, 9, 12, 13, 10, 13, 6, 6, 5, 14, 13, 10, 13, 12, 11, 8, 12, 11, 13, 15, '2021-06-30 11:14:56', 20.7428, 20.7428),
(10, 2, 5, 'Posit', 23, 10, 12, 12, 8, 10, 8, 6, 2, 7, 6, 2, 12, 11, 9, 8, 12, 10, 10, 9, '2021-06-30 11:16:10', 32.6394, 32.6394),
(11, 1, 8, 'Negatif', 21, 9, 12, 13, 10, 13, 6, 6, 5, 14, 13, 10, 13, 12, 11, 8, 12, 11, 13, 15, '2021-06-30 11:18:42', 3.40282e38, 3.40282e38),
(12, 1, 8, 'hahah', 22, 15, 15, 15, 10, 15, 10, 10, 5, 15, 15, 10, 15, 15, 15, 10, 15, 15, 15, 15, '2021-06-30 11:20:02', 3.40282e38, 3.40282e38),
(13, 1, 12, 'NyobaPosi', 23, 10, 12, 12, 8, 10, 8, 6, 2, 7, 6, 2, 12, 11, 9, 8, 12, 10, 10, 9, '2021-07-02 03:02:24', 14.2854, 11.8194),
(14, 1, 12, 'NyobaNeg', 23, 9, 12, 13, 10, 13, 6, 6, 5, 14, 13, 10, 13, 12, 11, 8, 12, 11, 13, 15, '2021-07-02 03:03:37', 24.6681, 8.79804),
(15, 2, 12, 'NyobaNega', 24, 10, 8, 11, 6, 10, 6, 4, 3, 13, 9, 8, 14, 12, 9, 7, 11, 12, 10, 10, '2021-07-02 03:06:40', 21.7117, 10.7069),
(16, 1, 12, 'NyobaPosi', 24, 10, 15, 15, 4, 15, 8, 10, 5, 3, 8, 3, 11, 3, 3, 2, 7, 8, 5, 3, '2021-07-02 03:08:06', 15.8641, 20.4158),
(17, 2, 12, 'Bismillah negatif', 24, 10, 14, 14, 10, 15, 6, 7, 5, 15, 14, 10, 15, 13, 9, 8, 12, 12, 11, 9, '2021-07-02 03:36:19', 24.252, 8.38802),
(18, 1, 12, 'Bismillah Positif', 21, 10, 11, 12, 2, 10, 8, 8, 2, 10, 8, 7, 6, 5, 3, 2, 4, 4, 4, 3, '2021-07-02 03:37:37', 19.303, 21.7906),
(19, 2, 12, 'Pos', 24, 10, 12, 12, 8, 10, 8, 6, 2, 7, 6, 2, 12, 11, 9, 8, 12, 10, 10, 9, '2021-07-02 03:38:52', 14.2854, 11.8194),
(20, 2, 12, 'Neg', 23, 10, 12, 15, 10, 15, 8, 8, 5, 15, 14, 8, 12, 14, 11, 7, 13, 15, 11, 14, '2021-07-02 03:40:22', 25.7056, 9.95501);

-- --------------------------------------------------------

--
-- Struktur dari tabel `train`
--

CREATE TABLE `train` (
  `id_train` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `tr_behaviour_sexualrisk` int(11) DEFAULT NULL,
  `tr_behavior_eating` int(11) DEFAULT NULL,
  `tr_behavior_personalhygine` int(11) DEFAULT NULL,
  `tr_intention_aggregation` int(11) DEFAULT NULL,
  `tr_intention_commitment` int(11) DEFAULT NULL,
  `tr_attitude_consistency` int(11) DEFAULT NULL,
  `tr_attitude_spontaneity` int(11) DEFAULT NULL,
  `tr_norm_significantperson` int(11) DEFAULT NULL,
  `tr_norm_fulfillment` int(11) DEFAULT NULL,
  `tr_perception_vulnerability` int(11) DEFAULT NULL,
  `tr_perception_severity` int(11) DEFAULT NULL,
  `tr_motivation_strength` int(11) DEFAULT NULL,
  `tr_motivation_willingness` int(11) DEFAULT NULL,
  `tr_socialsupport_emotionality` int(11) DEFAULT NULL,
  `tr_socialsupport_appreciation` int(11) DEFAULT NULL,
  `tr_socialsupport_instrumental` int(11) DEFAULT NULL,
  `tr_empowerment_knowledge` int(11) DEFAULT NULL,
  `tr_empowerment_abilities` int(11) DEFAULT NULL,
  `tr_empowerment_desires` int(11) DEFAULT NULL,
  `tr_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `train`
--

INSERT INTO `train` (`id_train`, `id_user`, `id_class`, `tr_behaviour_sexualrisk`, `tr_behavior_eating`, `tr_behavior_personalhygine`, `tr_intention_aggregation`, `tr_intention_commitment`, `tr_attitude_consistency`, `tr_attitude_spontaneity`, `tr_norm_significantperson`, `tr_norm_fulfillment`, `tr_perception_vulnerability`, `tr_perception_severity`, `tr_motivation_strength`, `tr_motivation_willingness`, `tr_socialsupport_emotionality`, `tr_socialsupport_appreciation`, `tr_socialsupport_instrumental`, `tr_empowerment_knowledge`, `tr_empowerment_abilities`, `tr_empowerment_desires`, `tr_timestamp`) VALUES
(68, 1, 1, 10, 13, 12, 4, 7, 9, 10, 1, 8, 7, 3, 14, 8, 5, 7, 12, 12, 11, 8, '2021-06-30 10:34:12'),
(69, 1, 1, 10, 11, 11, 10, 14, 7, 7, 5, 5, 4, 2, 15, 13, 7, 6, 5, 5, 4, 4, '2021-06-30 10:34:12'),
(70, 1, 1, 10, 15, 3, 2, 14, 8, 10, 1, 4, 7, 2, 7, 3, 3, 6, 11, 3, 3, 15, '2021-06-30 10:34:12'),
(71, 1, 1, 10, 11, 10, 10, 15, 7, 7, 1, 5, 4, 2, 15, 13, 7, 4, 4, 4, 4, 4, '2021-06-30 10:34:12'),
(72, 1, 1, 8, 11, 7, 8, 10, 7, 8, 1, 5, 3, 2, 15, 5, 3, 6, 12, 5, 4, 7, '2021-06-30 10:34:12'),
(73, 1, 1, 10, 14, 8, 6, 15, 8, 10, 1, 3, 4, 2, 14, 8, 7, 2, 7, 13, 9, 6, '2021-06-30 10:34:12'),
(74, 1, 1, 10, 15, 4, 6, 14, 6, 10, 5, 3, 7, 2, 7, 13, 3, 3, 15, 3, 3, 5, '2021-06-30 10:34:12'),
(75, 1, 1, 8, 12, 9, 10, 10, 5, 10, 5, 5, 5, 2, 10, 9, 13, 2, 9, 8, 7, 12, '2021-06-30 10:34:12'),
(76, 1, 1, 10, 15, 7, 2, 15, 6, 10, 1, 3, 5, 2, 9, 15, 13, 10, 15, 13, 15, 15, '2021-06-30 10:34:12'),
(77, 1, 1, 7, 15, 7, 6, 11, 8, 8, 5, 3, 3, 4, 15, 3, 8, 2, 9, 3, 4, 4, '2021-06-30 10:34:12'),
(78, 1, 1, 7, 15, 7, 10, 14, 7, 9, 1, 3, 8, 2, 4, 3, 7, 9, 13, 8, 3, 9, '2021-06-30 10:34:12'),
(79, 1, 1, 10, 15, 8, 9, 15, 7, 10, 1, 3, 7, 2, 15, 3, 3, 6, 13, 7, 5, 9, '2021-06-30 10:34:12'),
(80, 1, 1, 10, 15, 12, 10, 15, 6, 10, 1, 3, 3, 2, 4, 3, 3, 2, 15, 13, 6, 11, '2021-06-30 10:34:12'),
(81, 1, 1, 9, 12, 14, 9, 15, 10, 9, 3, 6, 3, 2, 15, 15, 3, 10, 15, 11, 3, 11, '2021-06-30 10:34:12'),
(82, 1, 1, 2, 15, 15, 6, 13, 8, 9, 1, 3, 3, 4, 15, 3, 7, 6, 7, 7, 7, 3, '2021-06-30 10:34:12'),
(83, 1, 1, 10, 15, 7, 6, 14, 8, 8, 4, 8, 10, 2, 3, 3, 3, 2, 5, 5, 5, 3, '2021-06-30 10:34:12'),
(84, 1, 2, 10, 12, 11, 10, 15, 7, 8, 3, 3, 3, 2, 13, 11, 10, 7, 12, 12, 12, 12, '2021-06-30 10:34:12'),
(85, 1, 2, 10, 13, 14, 10, 15, 6, 8, 1, 5, 5, 2, 15, 10, 12, 8, 15, 15, 15, 15, '2021-06-30 10:34:12'),
(86, 1, 2, 10, 15, 13, 10, 15, 2, 10, 1, 5, 6, 2, 14, 14, 14, 8, 14, 15, 14, 15, '2021-06-30 10:34:12'),
(87, 1, 2, 10, 12, 10, 7, 15, 6, 8, 2, 4, 9, 2, 15, 12, 10, 7, 12, 14, 10, 14, '2021-06-30 10:34:12'),
(88, 1, 2, 10, 15, 13, 10, 15, 6, 10, 1, 3, 5, 2, 15, 13, 9, 7, 12, 15, 11, 15, '2021-06-30 10:34:12'),
(89, 1, 2, 10, 13, 15, 8, 13, 7, 8, 3, 5, 9, 2, 13, 11, 12, 9, 10, 12, 13, 12, '2021-06-30 10:34:12'),
(90, 1, 2, 10, 15, 11, 10, 15, 8, 10, 1, 3, 3, 2, 15, 13, 13, 10, 15, 15, 13, 15, '2021-06-30 10:34:12'),
(91, 1, 2, 10, 11, 11, 10, 14, 5, 8, 1, 4, 3, 4, 15, 11, 13, 9, 13, 13, 12, 13, '2021-06-30 10:34:12'),
(92, 1, 2, 10, 14, 10, 9, 15, 4, 5, 2, 5, 7, 3, 10, 7, 4, 6, 7, 5, 9, 12, '2021-06-30 10:34:12'),
(93, 1, 2, 10, 8, 9, 10, 15, 10, 10, 1, 3, 3, 2, 15, 13, 11, 6, 15, 15, 10, 15, '2021-06-30 10:34:12'),
(94, 1, 2, 10, 15, 15, 8, 9, 8, 9, 4, 7, 6, 4, 12, 12, 14, 9, 14, 13, 9, 12, '2021-06-30 10:34:12'),
(95, 1, 2, 10, 10, 11, 10, 15, 5, 8, 1, 5, 3, 6, 15, 13, 13, 10, 15, 13, 13, 13, '2021-06-30 10:34:12'),
(96, 1, 2, 10, 11, 10, 9, 15, 5, 10, 3, 3, 3, 2, 11, 11, 9, 4, 9, 15, 15, 15, '2021-06-30 10:34:12'),
(97, 1, 2, 10, 15, 15, 10, 15, 10, 10, 1, 3, 3, 2, 15, 10, 10, 10, 15, 15, 15, 15, '2021-06-30 10:34:12'),
(98, 1, 2, 10, 3, 5, 2, 9, 6, 10, 1, 3, 9, 6, 11, 10, 9, 9, 14, 6, 10, 10, '2021-06-30 10:34:12'),
(99, 1, 2, 10, 15, 9, 3, 15, 8, 10, 1, 3, 5, 6, 10, 15, 13, 10, 15, 15, 15, 15, '2021-06-30 10:34:12'),
(100, 1, 2, 10, 10, 12, 5, 7, 6, 6, 4, 5, 10, 4, 11, 9, 11, 8, 11, 11, 10, 11, '2021-06-30 10:34:12'),
(101, 1, 2, 10, 9, 11, 10, 15, 7, 6, 1, 3, 6, 2, 15, 15, 15, 10, 15, 15, 15, 14, '2021-06-30 10:34:12'),
(102, 1, 2, 10, 14, 14, 10, 11, 5, 9, 1, 5, 4, 2, 14, 15, 11, 8, 14, 13, 13, 13, '2021-06-30 10:34:12'),
(103, 1, 2, 10, 12, 11, 10, 15, 7, 8, 3, 3, 4, 2, 14, 7, 9, 8, 12, 15, 10, 14, '2021-06-30 10:34:12'),
(104, 1, 2, 10, 15, 13, 10, 15, 6, 10, 1, 7, 7, 2, 15, 7, 3, 4, 3, 11, 5, 9, '2021-06-30 10:34:12'),
(105, 1, 2, 10, 15, 15, 10, 15, 8, 8, 5, 11, 15, 10, 15, 15, 15, 10, 15, 15, 15, 15, '2021-06-30 10:34:12'),
(106, 1, 2, 10, 15, 15, 10, 15, 9, 10, 5, 11, 15, 10, 15, 15, 15, 10, 15, 15, 15, 15, '2021-06-30 10:34:12'),
(107, 1, 2, 10, 11, 14, 10, 15, 10, 10, 5, 15, 14, 10, 15, 9, 9, 4, 3, 14, 11, 15, '2021-06-30 10:34:12'),
(108, 1, 2, 10, 15, 14, 10, 11, 10, 8, 5, 11, 15, 10, 15, 15, 15, 10, 15, 15, 15, 15, '2021-06-30 10:34:12'),
(109, 1, 2, 10, 14, 11, 10, 15, 9, 10, 5, 15, 15, 10, 15, 13, 6, 6, 12, 15, 11, 14, '2021-06-30 10:34:12'),
(110, 1, 2, 10, 15, 15, 6, 11, 7, 6, 5, 11, 13, 10, 15, 15, 11, 10, 15, 11, 11, 15, '2021-06-30 10:34:12'),
(111, 1, 2, 10, 15, 11, 10, 15, 8, 10, 1, 15, 15, 10, 15, 13, 3, 2, 9, 15, 8, 11, '2021-06-30 10:34:12'),
(112, 1, 2, 6, 15, 11, 10, 12, 8, 10, 5, 14, 13, 10, 15, 7, 5, 2, 5, 13, 9, 3, '2021-06-30 10:34:12'),
(113, 1, 2, 10, 11, 15, 10, 11, 6, 10, 5, 15, 11, 10, 15, 15, 15, 6, 9, 15, 15, 9, '2021-06-30 10:34:12'),
(114, 1, 2, 10, 15, 15, 10, 15, 10, 10, 5, 15, 14, 9, 9, 13, 12, 9, 15, 15, 15, 15, '2021-06-30 10:34:12'),
(115, 1, 2, 10, 9, 12, 10, 14, 9, 6, 5, 11, 11, 9, 15, 11, 3, 2, 6, 13, 7, 3, '2021-06-30 10:34:12'),
(116, 1, 2, 10, 13, 12, 2, 15, 7, 10, 5, 15, 10, 2, 15, 12, 11, 7, 6, 10, 9, 12, '2021-06-30 10:34:12'),
(117, 1, 2, 10, 15, 15, 10, 11, 7, 8, 5, 15, 13, 10, 15, 15, 11, 8, 15, 15, 13, 11, '2021-06-30 10:34:12'),
(118, 1, 2, 10, 9, 8, 2, 15, 6, 10, 1, 15, 15, 8, 11, 11, 13, 10, 15, 13, 13, 10, '2021-06-30 10:34:12'),
(119, 1, 2, 10, 10, 5, 2, 15, 8, 10, 5, 13, 15, 10, 15, 3, 3, 2, 13, 15, 15, 15, '2021-06-30 10:34:12'),
(120, 1, 2, 10, 11, 8, 10, 15, 7, 8, 5, 14, 13, 8, 12, 7, 4, 3, 3, 4, 4, 7, '2021-06-30 10:34:12'),
(121, 1, 2, 10, 11, 9, 6, 15, 6, 8, 5, 14, 11, 8, 11, 7, 3, 2, 3, 3, 3, 3, '2021-06-30 10:34:12'),
(122, 1, 2, 10, 13, 9, 10, 15, 8, 8, 5, 14, 8, 8, 11, 3, 3, 2, 3, 3, 3, 3, '2021-06-30 10:34:12'),
(123, 1, 2, 10, 12, 10, 10, 15, 6, 8, 5, 15, 11, 8, 13, 7, 3, 2, 3, 3, 3, 3, '2021-06-30 10:34:12'),
(124, 1, 2, 10, 10, 10, 10, 15, 6, 6, 5, 14, 13, 9, 15, 9, 13, 8, 14, 13, 12, 12, '2021-06-30 10:34:12'),
(125, 1, 2, 10, 13, 11, 6, 15, 8, 10, 5, 15, 7, 10, 13, 7, 3, 5, 3, 3, 3, 3, '2021-06-30 10:34:12'),
(126, 1, 2, 10, 13, 15, 10, 15, 8, 10, 5, 14, 6, 8, 13, 7, 3, 4, 3, 3, 6, 3, '2021-06-30 10:34:12'),
(127, 1, 2, 10, 15, 8, 6, 11, 6, 10, 5, 11, 15, 8, 15, 7, 3, 4, 11, 13, 10, 15, '2021-06-30 10:34:12'),
(128, 1, 2, 10, 13, 11, 6, 14, 9, 10, 5, 15, 15, 10, 15, 3, 3, 4, 7, 7, 7, 11, '2021-06-30 10:34:12'),
(129, 1, 2, 10, 12, 13, 10, 11, 7, 7, 5, 14, 15, 9, 14, 10, 6, 6, 6, 9, 7, 11, '2021-06-30 10:34:12'),
(130, 1, 1, 10, 15, 9, 7, 6, 8, 8, 1, 12, 5, 4, 5, 4, 3, 3, 5, 7, 7, 3, '2021-06-30 10:34:12'),
(131, 1, 1, 10, 12, 7, 5, 10, 8, 8, 1, 8, 10, 4, 6, 3, 3, 2, 4, 4, 3, 5, '2021-06-30 10:34:12'),
(132, 1, 2, 10, 14, 14, 6, 12, 7, 8, 5, 15, 12, 10, 10, 13, 11, 9, 14, 13, 15, 15, '2021-06-30 10:34:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password`) VALUES
(1, 'fahrul', '$2y$10$a4lDaxwSwh.RtZmtEgZ82OnlXxr.PUR9Bw9k4G30PwDdoPaYC3nB.'),
(2, 'didin', '$2y$10$a4lDaxwSwh.RtZmtEgZ82OnlXxr.PUR9Bw9k4G30PwDdoPaYC3nB.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `weight`
--

CREATE TABLE `weight` (
  `id_weight` int(11) NOT NULL,
  `wa_behaviour_sexualrisk` double DEFAULT NULL,
  `wb_behaviour_sexualrisk` double DEFAULT NULL,
  `wa_behavior_eating` double DEFAULT NULL,
  `wb_behavior_eating` double DEFAULT NULL,
  `wa_behavior_personalhygine` double DEFAULT NULL,
  `wb_behavior_personalhygine` double DEFAULT NULL,
  `wa_intention_aggregation` double DEFAULT NULL,
  `wb_intention_aggregation` double DEFAULT NULL,
  `wa_intention_commitment` double DEFAULT NULL,
  `wb_intention_commitment` double DEFAULT NULL,
  `wa_attitude_consistency` double DEFAULT NULL,
  `wb_attitude_consistency` double DEFAULT NULL,
  `wa_attitude_spontaneity` double DEFAULT NULL,
  `wb_attitude_spontaneity` double DEFAULT NULL,
  `wa_norm_significantperson` double DEFAULT NULL,
  `wb_norm_significantperson` double DEFAULT NULL,
  `wa_norm_fulfillment` double DEFAULT NULL,
  `wb_norm_fulfillment` double DEFAULT NULL,
  `wa_perception_vulnerability` double DEFAULT NULL,
  `wb_perception_vulnerability` double DEFAULT NULL,
  `wa_perception_severity` double DEFAULT NULL,
  `wb_perception_severity` double DEFAULT NULL,
  `wa_motivation_strength` double DEFAULT NULL,
  `wb_motivation_strength` double DEFAULT NULL,
  `wa_motivation_willingness` double DEFAULT NULL,
  `wb_motivation_willingness` double DEFAULT NULL,
  `wa_socialsupport_emotionality` double DEFAULT NULL,
  `wb_socialsupport_emotionality` double DEFAULT NULL,
  `wa_socialsupport_appreciation` double DEFAULT NULL,
  `wb_socialsupport_appreciation` double DEFAULT NULL,
  `wa_socialsupport_instrumental` double DEFAULT NULL,
  `wb_socialsupport_instrumental` double DEFAULT NULL,
  `wa_empowerment_knowledge` double DEFAULT NULL,
  `wb_empowerment_knowledge` double DEFAULT NULL,
  `wa_empowerment_abilities` double DEFAULT NULL,
  `wb_empowerment_abilities` double DEFAULT NULL,
  `wa_empowerment_desires` double DEFAULT NULL,
  `wb_empowerment_desires` double DEFAULT NULL,
  `prosentase` double DEFAULT NULL,
  `alpha` float DEFAULT NULL,
  `max_epoch` int(11) DEFAULT NULL,
  `status_weight` varchar(20) NOT NULL,
  `datetime_weight` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `weight`
--

INSERT INTO `weight` (`id_weight`, `wa_behaviour_sexualrisk`, `wb_behaviour_sexualrisk`, `wa_behavior_eating`, `wb_behavior_eating`, `wa_behavior_personalhygine`, `wb_behavior_personalhygine`, `wa_intention_aggregation`, `wb_intention_aggregation`, `wa_intention_commitment`, `wb_intention_commitment`, `wa_attitude_consistency`, `wb_attitude_consistency`, `wa_attitude_spontaneity`, `wb_attitude_spontaneity`, `wa_norm_significantperson`, `wb_norm_significantperson`, `wa_norm_fulfillment`, `wb_norm_fulfillment`, `wa_perception_vulnerability`, `wb_perception_vulnerability`, `wa_perception_severity`, `wb_perception_severity`, `wa_motivation_strength`, `wb_motivation_strength`, `wa_motivation_willingness`, `wb_motivation_willingness`, `wa_socialsupport_emotionality`, `wb_socialsupport_emotionality`, `wa_socialsupport_appreciation`, `wb_socialsupport_appreciation`, `wa_socialsupport_instrumental`, `wb_socialsupport_instrumental`, `wa_empowerment_knowledge`, `wb_empowerment_knowledge`, `wa_empowerment_abilities`, `wb_empowerment_abilities`, `wa_empowerment_desires`, `wb_empowerment_desires`, `prosentase`, `alpha`, `max_epoch`, `status_weight`, `datetime_weight`) VALUES
(1, 2.597330093383789, 9.698479652404785, 9.37018871307373, 11.932560920715332, 1.922091007232666, 11.420165061950684, 1.7627004384994507, 8.167274475097656, 6.4873433113098145, 14.609041213989258, 6.535107135772705, 7.067963123321533, 5.983180522918701, 8.712788581848145, 2.1848983764648438, 5.29277229309082, 2.8545961380004883, 13.772944450378418, 3.1434133052825928, 12.595341682434082, 1.9666681289672852, 9.204147338867188, 1.4778105020523071, 15.059552192687988, -2.6318440437316895, 9.144570350646973, -4.044303894042969, 6.601937294006348, -0.6935447454452515, 5.4023895263671875, 3.7695577144622803, 8.337628364562988, -2.6465964317321777, 9.529186248779297, -5.413471698760986, 8.63905143737793, -4.015972137451172, 9.98361587524414, NULL, 0.5, 100, '0', '2021-06-16 03:08:00'),
(3, -345435.78125, -345435.78125, -1842364.875, -1842364.875, -1132282.625, -1132282.625, 3915057, 3915057, 4471612, 4433229, -1650454.5, -1650454.5, -2360536.75, -2360536.75, 2686802.25, 2648419.25, -2283773, -2322155.75, -2283774, -2245391, -748463, -786845.875, 172737.03125, 172737.03125, 3051446.5, 3051446.5, 1151491.25, 1189874.125, -901990.5, -901990.5, -5124101.5, -5124101.5, -5124101.5, -5162484.5, -5085719.5, -5085719.5, -2955473.25, -2955473.25, NULL, 0.2, 100, '0', '2021-06-28 23:23:01'),
(4, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, NULL, 0.3, 100, '0', '2021-06-30 10:34:48'),
(5, 9.99996566772461, 9.99996566772461, 11.296117782592773, 11.296117782592773, 16.376338958740234, 16.376338958740234, 11.061881065368652, 11.061881065368652, 18.061227798461914, 18.061227798461914, 6.757137775421143, 6.757137775421143, 8.917623519897461, 8.917623519897461, 9.997785568237305, 9.997785568237305, 18.306344985961914, 18.306344985961914, 22.946117401123047, 22.946117401123047, 15.427874565124512, 15.427874565124512, 25.356239318847656, 25.356239318847656, 12.411517143249512, 12.411517143249512, 6.738111972808838, 6.738111972808838, 8.14988899230957, 8.14988899230957, 9.2838134765625, 9.2838134765625, 11.690678596496582, 11.690678596496582, 9.482478141784668, 9.482478141784668, 19.221256256103516, 19.221256256103516, NULL, 0.5, 1000, '0', '2021-06-30 10:46:14'),
(6, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, NULL, 0.3, 1000, '0', '2021-06-30 10:50:08'),
(7, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, 3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, -3.4028234663852886e38, NULL, 0.3, 50, '0', '2021-06-30 10:52:19'),
(8, -4.4082169416067e152, -4.424475119376e152, 7.5506812612748e151, 7.7132630389672e151, -5.0816152044215e152, -5.0978733821907e152, -5.2028475330599e152, -5.2191057108291e152, -1.6088026128033e152, -1.5925444350341e152, 2.6014176273095e152, 2.6176758050788e152, -7.4199879880315e150, -5.7941702111082e150, 1.4573674252469e152, 1.4736256030161e152, -5.0235307427785e152, -5.0072725650094e152, -4.7383967065074e152, -4.7546548842765e152, 1.7942759171517e152, 1.8105340949209e152, 8.7912630609669e152, 8.7912630609669e152, -5.3061525631259e152, -5.3061525631259e152, -2.6540132173522e152, -2.637755039583e152, -2.5074208143277e152, -2.4911626365585e152, -5.1747341916102e152, -5.1747341916102e152, -1.1388274156412e153, -1.1372015978643e153, -3.4220996208704e152, -3.4220996208704e152, -1.0815037078131e153, -1.0798778900362e153, NULL, 0.5, 1000, '0', '2021-06-30 11:13:02'),
(10, -6.1707764780359e289, 2.5911777615547, -6.5712808217771e289, 3.4638334512711, -7.612375605191e289, 4.0270773768425, -6.0584023226735e289, 3.0352240800858, -8.9719987952034e289, 3.7673357129097, -5.2560979353209e289, -1.1106225848198, -5.6293652032842e289, 0.57427430152893, -6.1998894463746e288, 0.20208144187927, -2.1845581372942e289, 1.4594246149063, -2.1588751211243e289, 2.3263514637947, -2.3061424753413e289, 1.2642999887466, -8.6896034718202e289, 1.7662770152092, -7.8459122072561e289, 2.3008885383606, -8.1675018960785e289, 4.1529153585434, -4.6576319954404e289, 3.0334075689316, -9.6419690317985e289, 3.1761780381203, -9.5485076457316e289, 4.8656383156776, -7.2327736561763e289, 6.8957868814468, -9.5743797396894e289, 6.3726907968521, NULL, 0.5, 100, '0', '2021-06-30 20:51:30'),
(12, 8.0419425871913, 9.8922907590883, 14.119855528156, 12.467119301113, 8.0289211888173, 11.637072998505, 6.7037291051218, 8.2109762226402, 11.610288092215, 13.648676257866, 8.1098923626434, 7.3576096925628, 9.3877971852091, 8.8156446786239, 1.7934445823527, 4.0140803864263, 3.0260995507525, 11.437845675023, 4.3717623128426, 11.019318786819, 1.4020009860881, 7.5780528233619, 9.0564148686914, 13.906996819335, 5.8806445358794, 10.237998602523, 5.4561418715448, 8.4026346075597, 4.5995950740715, 6.2480090307723, 11.475785847393, 10.053363579403, 6.9042605462249, 11.439094568763, 4.1805113766499, 10.284661663915, 6.3773734000336, 11.021161081981, 92.307692307692, 0.04, 500, '1', '2021-07-02 02:56:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `FK_HASIL` (`id_class`),
  ADD KEY `FK_RELATIONSHIP_1` (`id_weight`);

--
-- Indeks untuk tabel `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id_train`),
  ADD KEY `FK_MEMILIKI` (`id_class`),
  ADD KEY `FK_MENGIMPORT` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id_weight`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `train`
--
ALTER TABLE `train`
  MODIFY `id_train` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `weight`
--
ALTER TABLE `weight`
  MODIFY `id_weight` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
