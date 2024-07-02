-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 17.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservers`
--

CREATE TABLE `reservers` (
  `Name` varchar(50) NOT NULL,
  `Telephone` int(15) NOT NULL,
  `jenisReservasi` enum('Haircut','Manicure','Facial') NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reservers`
--

INSERT INTO `reservers` (`Name`, `Telephone`, `jenisReservasi`, `waktu`) VALUES
('ABIBIBI', 818497660, 'Manicure', '21:10:00'),
('a', 0, 'Manicure', '11:40:00'),
('Habib Rizieq', 818497660, 'Facial', '11:41:00'),
('Mas', 818497660, 'Manicure', '19:42:00'),
('da', 0, 'Facial', '20:01:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
