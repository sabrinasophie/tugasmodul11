-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2020 pada 19.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_produk`
--

CREATE TABLE `list_produk` (
  `id` int(10) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_produk`
--

INSERT INTO `list_produk` (`id`, `produk`, `warna`, `jumlah`, `gambar`) VALUES
(1, 'Fujifilm Instax Mini 9 Marble', 'Smoky White', '7', 'instax.jpg'),
(2, 'Smart Keyboard For 10.5 inch iPad Pro', 'Black', '10', 'keyboard.jpg'),
(3, 'Apple iPad Pro 11-inch Wi-Fi 128GB', 'Space Grey', '12', '5f87111f307e3.jpg'),
(5, 'OPPO Reno4 8/128GB', 'Purple', '20', '5f871c340a7e3.jpg'),
(6, 'Samsung Galaxy Note20 8/256GB', 'Mystic Gray', '17', '5f87267a89874.jpg'),
(7, 'Sony PlayStation VR Beat Saber Pack', 'White', '3', '5f87278c3c382.jpg'),
(8, 'JBL Pulse 4 ', 'White', '25', '5f8728f0788dd.jpg'),
(9, 'Mi Robot Vacuum', 'White', '36', '5f8729106e78b.jpg'),
(10, 'Xiaomi Mi TV LED 43 Inci', 'Black', '2', '5f87294511dfa.jpg'),
(11, 'Sony PlayStation VR Beat Saber Pack', 'White', '6', '5f87297450182.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list_produk`
--
ALTER TABLE `list_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list_produk`
--
ALTER TABLE `list_produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
