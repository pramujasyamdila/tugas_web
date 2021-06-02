-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 13.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_kategori`
--

CREATE TABLE `mst_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_kategori`
--

INSERT INTO `mst_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sosial'),
(2, 'Budaya'),
(7, 'Ekonomi'),
(8, 'Politik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trx_berita`
--

CREATE TABLE `trx_berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul_berita` varchar(200) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `penulis` varchar(225) DEFAULT NULL,
  `tgl_publis` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `trx_berita`
--

INSERT INTO `trx_berita` (`id_berita`, `id_kategori`, `judul_berita`, `isi_berita`, `penulis`, `tgl_publis`) VALUES
(7, 1, 'Libatkan Game, Judul Sinetron Ini Bikin Ngakak Warganet', '<header style=\"overflow-wrap: break-word; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 13px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline; color: rgb(114, 114, 114);\"><div class=\"content-details\" style=\"overflow-wrap: break-word; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"image\" style=\"overflow-wrap: break-word; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><img src=\"https://media.suara.com/pictures/653x366/2020/07/20/73960-judul-sinetron.jpg\" alt=\"Libatkan Game, Judul Sinetron Ini Bikin Ngakak Warganet\" loading=\"lazy\" style=\"overflow-wrap: break-word; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline; display: block; max-width: 100%; width: 653px; height: auto;\"><div class=\"caption\" style=\"overflow-wrap: break-word; margin: 0px; padding: 7px 10px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: 14px; font-family: inherit; vertical-align: baseline; background-color: rgb(238, 238, 238); color: rgb(153, 153, 153);\">Judul sInetron bikin ngakak. [Twitter/@djaycoholyc]</div></div></div></header><div class=\"reset h20\" style=\"overflow-wrap: break-word; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 13px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline; height: 20px; color: rgb(114, 114, 114); margin: 0px !important; padding: 0px !important; clear: both !important;\"></div><article class=\"content-article\" itemprop=\"articleBody\" style=\"overflow-wrap: break-word; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 24px; font-family: Arial, sans-serif; vertical-align: baseline; letter-spacing: 0.5px;\"><p style=\"overflow-wrap: break-word; padding: 0px 0px 10px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 24px; font-family: inherit; vertical-align: baseline;\"><span style=\"overflow-wrap: break-word; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Suara.com - </span><a href=\"https://www.suara.com/tag/judul-sinetron\" style=\"overflow-wrap: break-word; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(206, 73, 14); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: all 0.3s ease 0s;\">Judul sinetron</a> yang tayang di Indonesia terkadang aneh dan anti mainstream, untuk menarik minat penonton. Belakangan, warganet menemukan judul baru untuk sinetron Suara hati Istri yang umumnya berisi permasalahan rumah tangga. Judul baru kali ini melibatkan game online dan menarik perhatian warganet.</p><p style=\"overflow-wrap: break-word; padding: 0px 0px 10px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 24px; font-family: inherit; vertical-align: baseline;\">Dibagikan kembali oleh akun Twitter @djaycoholyc pada 18 Juli, pemilik akun mengunggah gambar tangkapan layar yang dijadikan satu di bagian atas dan bawah. Pada bagian atas memperlihatkan judul sinetron tersebut yang berjudul \"Game Online Adalah Istri Kedua Suamiku\".</p></article>', 'Cindy', '2021-06-30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mst_kategori`
--
ALTER TABLE `mst_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `trx_berita`
--
ALTER TABLE `trx_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mst_kategori`
--
ALTER TABLE `mst_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `trx_berita`
--
ALTER TABLE `trx_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
