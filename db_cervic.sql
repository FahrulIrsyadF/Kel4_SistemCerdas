-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2021 pada 09.55
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
(1, 2, 1, 'Tika', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2021-06-22 11:21:45', 19.1955, 40.8479);

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
(1, 1, 1, 10, 13, 12, 4, 7, 9, 10, 1, 8, 7, 3, 14, 8, 5, 7, 12, 12, 11, 8, '2021-06-16 03:10:00'),
(2, 1, 2, 10, 11, 11, 10, 14, 7, 7, 5, 5, 4, 2, 15, 13, 7, 6, 5, 5, 4, 4, '2021-06-16 03:08:00');

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
  `wa_behaviour_sexualrisk` float DEFAULT NULL,
  `wb_behaviour_sexualrisk` float DEFAULT NULL,
  `wa_behavior_eating` float DEFAULT NULL,
  `wb_behavior_eating` float DEFAULT NULL,
  `wa_behavior_personalhygine` float DEFAULT NULL,
  `wb_behavior_personalhygine` float DEFAULT NULL,
  `wa_intention_aggregation` float DEFAULT NULL,
  `wb_intention_aggregation` float DEFAULT NULL,
  `wa_intention_commitment` float DEFAULT NULL,
  `wb_intention_commitment` float DEFAULT NULL,
  `wa_attitude_consistency` float DEFAULT NULL,
  `wb_attitude_consistency` float DEFAULT NULL,
  `wa_attitude_spontaneity` float DEFAULT NULL,
  `wb_attitude_spontaneity` float DEFAULT NULL,
  `wa_norm_significantperson` float DEFAULT NULL,
  `wb_norm_significantperson` float DEFAULT NULL,
  `wa_norm_fulfillment` float DEFAULT NULL,
  `wb_norm_fulfillment` float DEFAULT NULL,
  `wa_perception_vulnerability` float DEFAULT NULL,
  `wb_perception_vulnerability` float DEFAULT NULL,
  `wa_perception_severity` float DEFAULT NULL,
  `wb_perception_severity` float DEFAULT NULL,
  `wa_motivation_strength` float DEFAULT NULL,
  `wb_motivation_strength` float DEFAULT NULL,
  `wa_motivation_willingness` float DEFAULT NULL,
  `wb_motivation_willingness` float DEFAULT NULL,
  `wa_socialsupport_emotionality` float DEFAULT NULL,
  `wb_socialsupport_emotionality` float DEFAULT NULL,
  `wa_socialsupport_appreciation` float DEFAULT NULL,
  `wb_socialsupport_appreciation` float DEFAULT NULL,
  `wa_socialsupport_instrumental` float DEFAULT NULL,
  `wb_socialsupport_instrumental` float DEFAULT NULL,
  `wa_empowerment_knowledge` float DEFAULT NULL,
  `wb_empowerment_knowledge` float DEFAULT NULL,
  `wa_empowerment_abilities` float DEFAULT NULL,
  `wb_empowerment_abilities` float DEFAULT NULL,
  `wa_empowerment_desires` float DEFAULT NULL,
  `wb_empowerment_desires` float DEFAULT NULL,
  `alpha` float DEFAULT NULL,
  `max_epoch` int(11) DEFAULT NULL,
  `status_weight` varchar(20) NOT NULL,
  `datetime_weight` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `weight`
--

INSERT INTO `weight` (`id_weight`, `wa_behaviour_sexualrisk`, `wb_behaviour_sexualrisk`, `wa_behavior_eating`, `wb_behavior_eating`, `wa_behavior_personalhygine`, `wb_behavior_personalhygine`, `wa_intention_aggregation`, `wb_intention_aggregation`, `wa_intention_commitment`, `wb_intention_commitment`, `wa_attitude_consistency`, `wb_attitude_consistency`, `wa_attitude_spontaneity`, `wb_attitude_spontaneity`, `wa_norm_significantperson`, `wb_norm_significantperson`, `wa_norm_fulfillment`, `wb_norm_fulfillment`, `wa_perception_vulnerability`, `wb_perception_vulnerability`, `wa_perception_severity`, `wb_perception_severity`, `wa_motivation_strength`, `wb_motivation_strength`, `wa_motivation_willingness`, `wb_motivation_willingness`, `wa_socialsupport_emotionality`, `wb_socialsupport_emotionality`, `wa_socialsupport_appreciation`, `wb_socialsupport_appreciation`, `wa_socialsupport_instrumental`, `wb_socialsupport_instrumental`, `wa_empowerment_knowledge`, `wb_empowerment_knowledge`, `wa_empowerment_abilities`, `wb_empowerment_abilities`, `wa_empowerment_desires`, `wb_empowerment_desires`, `alpha`, `max_epoch`, `status_weight`, `datetime_weight`) VALUES
(1, 2.59733, 9.69848, 9.37019, 11.9326, 1.92209, 11.4202, 1.7627, 8.16727, 6.48734, 14.609, 6.53511, 7.06796, 5.98318, 8.71279, 2.1849, 5.29277, 2.8546, 13.7729, 3.14341, 12.5953, 1.96667, 9.20415, 1.47781, 15.0596, -2.63184, 9.14457, -4.0443, 6.60194, -0.693545, 5.40239, 3.76956, 8.33763, -2.6466, 9.52919, -5.41347, 8.63905, -4.01597, 9.98362, 0.5, 100, '1', '2021-06-16 03:08:00');

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
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `train`
--
ALTER TABLE `train`
  MODIFY `id_train` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `weight`
--
ALTER TABLE `weight`
  MODIFY `id_weight` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
