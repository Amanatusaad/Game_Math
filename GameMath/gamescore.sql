-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2021 pada 18.43
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamemath`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gamescore`
--

CREATE TABLE `gamescore` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `score` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gamescore`
--

INSERT INTO `gamescore` (`id`, `name`, `email`, `score`) VALUES
(38, 'Larisa', 'lala@gmail.com', 20),
(39, 'Ahmed', 'ahmd@gmail.com', 130),
(40, 'Samuel', 'sam@gmail.com', 80),
(41, 'Amanatusaad', 'aam@gmail.com', 210),
(42, 'Flora', 'ora@gmail.com', 80),
(43, 'fauna', 'lala@gmail.com', 50),
(44, 'sakuntara', 'tara@gmail.com', 30),
(45, 'sakuntara', 'tara@gmail.com', 40);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gamescore`
--
ALTER TABLE `gamescore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gamescore`
--
ALTER TABLE `gamescore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
