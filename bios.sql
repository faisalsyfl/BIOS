-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Jun 2018 pada 09.36
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bios`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `data_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `data_year` varchar(255) NOT NULL,
  `data_month` varchar(255) NOT NULL,
  `data_total` varchar(255) NOT NULL,
  `data_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`data_id`, `service_id`, `data_year`, `data_month`, `data_total`, `data_updated_at`) VALUES
(1, 6, '2017', '1', '50', '2017-12-30 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_indicator` varchar(255) NOT NULL,
  `service_stats` tinyint(1) NOT NULL,
  `service_satker_code` varchar(255) NOT NULL DEFAULT '247140',
  `service_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_indicator`, `service_stats`, `service_satker_code`, `service_updated_at`) VALUES
(1, 'Pengujian', '0060', 0, '247140', '2018-06-06 06:02:47'),
(2, 'Inspeksi Teknis', '0061', 0, '247140', '2018-06-06 06:03:44'),
(3, 'Kalibrasi', '652', 0, '247140', '2018-06-06 06:03:44'),
(4, 'Konsultasi', '0063', 0, '247140', '2018-06-06 06:04:36'),
(5, 'Litbang', '662', 0, '247140', '2018-06-06 06:04:36'),
(6, 'Sertifikasi', '0064', 0, '247140', '2018-06-06 06:04:51'),
(7, 'Pelatihan', '622', 0, '247140', '2018-06-06 06:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
