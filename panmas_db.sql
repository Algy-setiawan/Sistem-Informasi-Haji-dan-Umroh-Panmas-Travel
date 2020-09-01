-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2017 pada 03.07
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panmas_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `berita` text NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `berita`, `tanggal`, `gambar`, `file`) VALUES
(32, 'cara Login', 'silahkan melakukan Pendaftaran\r\npada halaman yang disediakan', ' 01 May 2017 ', 'file_1493653206.jpg', ''),
(33, 'Cara Pendaftara', 'silahkan melakukan prosedur pendaftaran\r\ndengan baik dan benar', ' 01 May 2017 ', 'file_1493653274.jpg', ''),
(34, 'Cara pemesanan', 'silahkan melakukan pemesanan dan\r\nmencetak data yang telah di print \r\ndan membawanya kepada panmas travel', ' 01 May 2017 ', 'file_1493653316.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nm_gbr` varchar(25) NOT NULL,
  `tipe_gbr` varchar(10) NOT NULL,
  `ket_gbr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `nm_gbr`, `tipe_gbr`, `ket_gbr`) VALUES
(9, 'file_1493217204.jpg', 'image/jpeg', 'a'),
(10, 'file_1493217342.png', 'image/png', 's'),
(11, 'file_1493573447.jpg', 'image/jpeg', 'Poster'),
(12, 'file_1493573521.jpg', 'image/jpeg', 'ds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `nama_paket` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kelas`, `nama_paket`, `harga`, `tanggal`, `fasilitas`) VALUES
(23, '9D', 'Umroh Konsorsium', 'IDR 16.750.000', '2017-05-07', 'Hotel Bintang 3\r\nPesawat tanpa Transit(Starting Jakarta)\r\nFlight by Lion Air'),
(24, '12D', 'Umroh Konsorsium', 'IDR 24.000.000', '2017-04-09', 'Hotel Bintang 3\r\nPesawat tanpa Transit(Starting Jakarta)\r\nFlight by Lion Air'),
(25, '12D', 'Umroh', 'IDR 24.000.000', '2017-05-16', 'Hotel Bintang 3\r\nPesawat tanpa Transit(Starting Jakarta)\r\nFlight by Lion Air');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_04_14_030604_create_user', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tgl_lhr` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `no_tlp`, `nama`, `jk`, `tgl_lhr`, `alamat`, `photo`, `id_user`) VALUES
(129, '45646154821', 'Asep', 'Laki-Laki', '2017-04-06', 'sdajaskdasdasd', 'default.png', 0),
(130, '231312', 'Wiwi', 'Perempuan', '2017-04-21', 'sadsada', 'default.png', 0),
(131, '2313213', 'saepul', 'Laki-Laki', '2017-04-12', 'sdadsad', 'file_1493035318.jpg', 0),
(136, '123', 'bastos', 'Laki-Laki', '2017-04-12', '123', 'default.png', 5),
(139, '123', 'User', 'Laki-Laki', '2017-05-29', '123', 'default.png', 4),
(140, '123', 'Asep', 'Laki-Laki', '2017-04-04', '123', 'default.png', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `id_jadwal` varchar(50) NOT NULL,
  `tgl_pesan` varchar(25) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama`, `id_jadwal`, `tgl_pesan`, `id_user`) VALUES
(4, 'Asep', '23', ' 29 April 2017 ', 3),
(5, 'User', '23', ' 29 April 2017 ', 4),
(6, 'bastos', '23', ' 29 April 2017 ', 5),
(15, 'Wiwi', '23', ' 29 April 2017 ', 2),
(16, 'Asep', '23', ' 29 April 2017 ', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resi`
--

CREATE TABLE `resi` (
  `id_resi` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_lhr` varchar(25) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jadwal` varchar(20) NOT NULL,
  `paket` varchar(20) NOT NULL,
  `tgl_pesan` varchar(25) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `isi_testimoni` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `tanggal`, `isi_testimoni`, `id_user`) VALUES
(28, 'bastos', ' 02 May 2017 ', 'jangarrrr', 5),
(29, 'User', ' 02 May 2017 ', 'aaaa', 4),
(30, 'User', ' 02 May 2017 ', 'emaaaa', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('adm','usr') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(2, '', 'terserah', 'e00b29d5b34c3f78df09d45921c9ec47', 'adm'),
(3, 'Asep', 'Asep', '081e127fe622361157d47abcf49ffce5', 'usr'),
(4, 'User', 'User', '530ada28d22d3fc69183ebf75e17e275', 'usr'),
(5, 'bastos', 'bastos', 'f76d601547eb35762a020f4e7a5c907d', 'usr'),
(6, 'dadang', 'dadang', '0037bb978d51e84d1ad5478e85430f26', 'usr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
