-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2020 pada 07.33
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diabetes`
--

CREATE TABLE `diabetes` (
  `Pregnancies` int(11) NOT NULL,
  `PlasmaG` int(11) NOT NULL,
  `DiastolicBloodPressure` int(11) NOT NULL,
  `TricepsThickness` int(11) NOT NULL,
  `SerumInsulin` int(11) NOT NULL,
  `BMI` float NOT NULL,
  `DiabetesPedigree` float NOT NULL,
  `Age` int(11) NOT NULL,
  `Diabetes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diabetes`
--

INSERT INTO `diabetes` (`Pregnancies`, `PlasmaG`, `DiastolicBloodPressure`, `TricepsThickness`, `SerumInsulin`, `BMI`, `DiabetesPedigree`, `Age`, `Diabetes`) VALUES
(0, 171, 80, 34, 23, 43.5097, 1.21319, 21, 0),
(8, 92, 93, 47, 36, 21.2406, 0.158365, 23, 0),
(7, 115, 47, 52, 35, 41.5115, 0.0790186, 23, 0),
(2, 118, 61, 56, 66, 35.9911, 0.125032, 21, 1),
(1, 85, 59, 27, 35, 42.6045, 0.549542, 22, 0),
(1, 118, 42, 24, 71, 33.8964, 0.0790695, 21, 1),
(1, 80, 85, 24, 29, 21.1285, 0.749642, 25, 0),
(0, 67, 87, 43, 36, 18.2777, 0.236165, 26, 0),
(8, 80, 95, 33, 24, 26.6249, 0.443947, 53, 1),
(1, 72, 31, 40, 42, 36.8896, 0.103944, 26, 0),
(1, 88, 86, 11, 58, 43.225, 0.230285, 22, 0),
(3, 94, 96, 31, 36, 21.2945, 0.25902, 23, 0),
(5, 114, 101, 43, 70, 36.4953, 0.0791902, 38, 1),
(7, 110, 82, 16, 44, 36.0893, 0.281276, 25, 0),
(0, 68, 85, 9, 44, 41.0106, 0.291746, 22, 0),
(3, 109, 77, 46, 61, 19.8473, 0.204345, 21, 1),
(3, 106, 64, 25, 51, 29.0446, 0.589188, 42, 1),
(1, 157, 67, 52, 51, 43.4232, 0.771356, 23, 0),
(0, 118, 65, 33, 35, 40.0108, 1.09639, 26, 0),
(0, 68, 85, 9, 44, 41.0106, 0.291746, 22, 0),
(2, 109, 73, 25, 95, 23.6741, 0.175617, 33, 1),
(7, 76, 82, 31, 34, 18.2008, 0.111829, 21, 0),
(0, 77, 76, 42, 64, 20.2931, 0.642275, 26, 0),
(0, 67, 95, 10, 23, 38.3107, 0.182826, 23, 0),
(8, 105, 61, 26, 60, 28.3532, 0.175321, 43, 1),
(9, 104, 68, 42, 40, 51.8554, 0.182938, 21, 1),
(6, 135, 91, 31, 14, 45.2741, 0.707163, 21, 1),
(0, 88, 65, 46, 28, 42.6963, 0.262423, 22, 0),
(0, 119, 50, 52, 16, 45.3911, 0.270567, 22, 0),
(0, 70, 64, 9, 16, 20.9852, 0.137393, 33, 0),
(1, 160, 57, 16, 21, 40.5163, 0.164825, 22, 0),
(9, 100, 48, 48, 37, 39.6588, 0.0916636, 22, 1),
(4, 92, 79, 18, 19, 21.217, 0.141495, 23, 0),
(0, 46, 42, 8, 23, 50.7903, 0.794734, 71, 0),
(0, 159, 61, 33, 29, 20.271, 0.469074, 26, 0),
(6, 91, 68, 21, 17, 41.8992, 0.298977, 25, 0),
(0, 128, 78, 12, 34, 45.3824, 0.542372, 26, 0),
(4, 170, 48, 22, 59, 20.4149, 0.560378, 43, 1),
(5, 69, 52, 21, 19, 43.1658, 0.489559, 24, 0),
(9, 134, 63, 48, 34, 30.5873, 0.245255, 47, 1),
(7, 67, 86, 37, 17, 38.1294, 0.29176, 23, 0),
(0, 106, 63, 43, 15, 41.0831, 0.478329, 22, 0),
(3, 82, 53, 15, 15, 46.2366, 0.283817, 22, 0),
(9, 92, 68, 19, 136, 47.1002, 0.954918, 23, 0),
(1, 76, 98, 39, 214, 41.7033, 0.142556, 26, 0),
(1, 86, 49, 34, 163, 39.32, 0.136124, 26, 0),
(4, 70, 75, 43, 54, 30.4263, 1.07902, 32, 1),
(8, 48, 100, 53, 333, 30.8577, 0.11069, 45, 1),
(4, 60, 85, 29, 88, 31.8007, 0.896581, 45, 1),
(4, 175, 78, 14, 71, 35.5461, 0.0811756, 56, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;