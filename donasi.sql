-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2021 pada 16.11
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `text` mediumtext NOT NULL,
  `date` date NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `text`, `date`, `gambar`) VALUES
(24, 'Ayobantu Salurkan Donasi untuk Petugas Pemakaman Covid-19', 'Dana yang terkumpul dijadikan paket bantuan yang berisi suplemen, APD, sembako, dan insentif untuk disalurkan kepada para petugas pemakaman khusus Covid-19 yang tersebar di empat lokasi, yaitu TPU Rorotan Jakarta Utara, TPU Jatisari Semarang, TPU Padurenan Bekasi, dan TPU Keputih Surabaya.', '2021-10-03', 'donasi1.jpeg'),
(25, 'Bocah Tanpa Bola Mata Azmi Ramadan Terima Donasi Rp 36,8 Juta dari Pembaca', 'Bantuan tersebut merupakan yang kali ketiga. Sebelumnya, bantuan diberikan secara bertahap kepada pihak keluarga guna memenuhi kebutuhan sehari-hari Azmi. Adapun, total bantuan keseluruhan sebesar RP 36.856.052.', '2021-10-15', 'donasi2.jfif'),
(26, 'Kisah Penyandang Disabilitas Jualan Gorengan di Tengah Hujan, Kini Dapat Donasi hingga Rp 50 Juta', 'Saat dikonfirmasi Tribunnews.com, pemilik akun, Sri Astuti (22) mengabarkan, sosok penyandang disabilitas dalam video tersebut bernama Titin.Sri tak sengaja bertemu Titin saat sedang berteduh dari hujan di sekitar pemukiman daerah Cimerak, Kabupaten Pangandaran, Provinsi Jawa Barat', '2021-10-01', 'donasi33.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `campaing`
--

CREATE TABLE `campaing` (
  `id_cam` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `jumlahdonatur` varchar(10) NOT NULL,
  `kebutuhan_dana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi_sekarang`
--

CREATE TABLE `donasi_sekarang` (
  `id_donasi` int(10) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelpn` int(15) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `yayasan` int(100) NOT NULL,
  `kebutuhan` varchar(100) NOT NULL,
  `jumlahdonasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'donatur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_log` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_tlpn` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` int(11) NOT NULL,
  `kode` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_log`, `nama_lengkap`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_tlpn`, `email`, `username`, `password`, `level`, `kode`) VALUES
(1, 'rizka', 'kupuk', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaa', '2021-10-19', 8217, 'zzzzzzzzzzzz', 'ayu', '123', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `yayasan`
--

CREATE TABLE `yayasan` (
  `id_yas` int(11) NOT NULL,
  `nama_yayasan` int(11) NOT NULL,
  `alamat` int(11) NOT NULL,
  `notlp` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `kebutuhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `campaing`
--
ALTER TABLE `campaing`
  ADD PRIMARY KEY (`id_cam`);

--
-- Indeks untuk tabel `donasi_sekarang`
--
ALTER TABLE `donasi_sekarang`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `level` (`level`);

--
-- Indeks untuk tabel `yayasan`
--
ALTER TABLE `yayasan`
  ADD PRIMARY KEY (`id_yas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `campaing`
--
ALTER TABLE `campaing`
  MODIFY `id_cam` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `donasi_sekarang`
--
ALTER TABLE `donasi_sekarang`
  MODIFY `id_donasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `yayasan`
--
ALTER TABLE `yayasan`
  MODIFY `id_yas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
