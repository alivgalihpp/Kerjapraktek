-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2021 pada 13.58
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simwas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenispengawasan`
--

CREATE TABLE `jenispengawasan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenispengawasan`
--

INSERT INTO `jenispengawasan` (`id`, `jenis`) VALUES
(1, 'Audit'),
(2, 'Review'),
(3, 'Monev'),
(4, 'Evaluasi'),
(5, 'Kasus Pengaduan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `instansi_id` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `id_jenispengawasan` int(11) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `id_timpengawasan` int(11) NOT NULL,
  `obrik` varchar(100) NOT NULL,
  `no_hasil_pengawasan` varchar(100) NOT NULL,
  `tanggal_hasil_pengawasan` date NOT NULL,
  `rekomendasi` text NOT NULL,
  `hasil_tindak_lanjut` text NOT NULL,
  `status_pengaduan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `instansi_id`, `tgl_pengaduan`, `id_jenispengawasan`, `tanggal_pelaksanaan`, `id_timpengawasan`, `obrik`, `no_hasil_pengawasan`, `tanggal_hasil_pengawasan`, `rekomendasi`, `hasil_tindak_lanjut`, `status_pengaduan`) VALUES
(23, 8, '2021-09-20', 1, '2021-09-06', 3, 'Kelurahan Randugunting', '714/057', '2021-09-20', '<p>Kepada Lurah Randugunting kota Tegal:</p><ol><li>Dokumen pertanggung jawaban penggunaan anggaran tidak lengkao. sehubungan dengan hal tersebut diatas, Lurah Randugunting Kota Tegal agar memerintahkan secara tertulis kepada:</li></ol><ul><li>PPTK dan Bendahara pengeluaran pembantu untuk membuat pernyataan secara tertulis bahwa dalam penatausahaan dan pertanggungjawaban anggaran akan berpedman pada peraturan yang berlaku</li><li>bendahara pengeluaran pembantu untuk melengkapi dokumen pendukung bukti pertanggung jawaban penggunaan anggaran. (Kode : 06)</li></ul><ol><li>Bendahara Pengeluaran pembantu masih hterlambat dalam mempertanggung jawabkan anggaran sehubungan dengan hal tersebut diatas. Lurah Randugunting kota tegal agar memerintahkan secara tertulis kepada:</li></ol><ul><li>Bendahara pengeluaran pembantu untuk menyampaikan laporan pertanggungjawaban penggunaan anggaran sesuai dengan ketentuan berlaku</li><li>Bendahara Pengeluaran pembantu untuk membuat pernyataan bahwa penggunaan anggarn akan berpedoman pada ketentuan berlau</li></ul>', '<div style=\"text-align: justify;\"><p class=\"MsoNormal\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: normal;\">lari lari lari terbang dan&nbsp; berlarii dan ter<span style=\"font-size: 1rem;\">terbang lagi lagi lagi terbang lari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbang</span></p></div>', 2),
(25, 8, '2021-09-19', 2, '2021-09-16', 1, 'Kelurahan Randugunting', '714/057', '2021-09-15', '<div style=\"text-align: justify;\"><br></div><p style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></p><p style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Lurah randugunting Kota Tegal agar:</p><p style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">1.<span style=\"font-size: 1rem; white-space: pre;\">	</span><span style=\"font-size: 1rem;\">Dalam Pertanggungjawaban penggunaan anggran tdk lengkap. sehubungan dengan hal tersebut diminta lurah randugunting Kota Tegal agar memerintahkan secara tertulis kepada:</span></p><ul><li style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">PPTK dan bendahara pengeluaran pembantu untuk membuat pernyataan secara tertulis bahwa dalam penatausahaan dan pertanggungjawaban anggaran akan berpedoman pada peraturan yang berlaku.</li><li style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">bendahara pengeluaran pembantu untuk melengkapi dokumen pendukung bukti pertanggung jawabanpenggunaan anggaran.   ( Kode: 06)</li></ul><p style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">2.<span style=\"white-space:pre\">	</span>Bendahara pengeluaran pembantu masih terlambat dalam mempertanggungjawabkan penggunaan anggaran. sehubungan dengan hal tersebut diatas, lurah randugunting kota tegal agar memerintahkan secara tertulis kepada:</p><ul><li style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">bendahara pengeluaran pembantu untuk menyampaikan laporan pertanggungjawaban penggunaan anggaran sesuai ketentuan yang berlaku.</li><li style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">memerintahkan bendahara pengeluaran pembantu untuk membuat pernyataan bahwa dalam penatausaahan dan pertanggungjawaban penggunaan anggaran akan berpedoman kepada ketentuan yang berlaku (Kode: 09) </li></ul><p style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><br></p>', '<p>lari lari lari terbang danÂ berlarii dan \r\nterbang lagi lagi lagi terbang :\r\n</p><p><br></p>', 0),
(27, 8, '2021-09-19', 2, '2021-09-13', 2, 'Kelurahan Randugunting', '714/057', '2021-09-19', '<p class=\"MsoNormal\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; line-height: normal;\">lari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbang :</p><ol><li style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">terbang lagi lagi lagi terbang lari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbang</li><li style=\"text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">terbang lagi lagi lagi terbang lari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbanglari lari lari terbang dan&nbsp; berlarii dan terbang lagi lagi lagi terbang</li></ol>', '<ol><li>a</li></ol>', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `timpengawasan`
--

CREATE TABLE `timpengawasan` (
  `id` int(11) NOT NULL,
  `tim` varchar(109) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `timpengawasan`
--

INSERT INTO `timpengawasan` (`id`, `tim`) VALUES
(1, 'Tim 1'),
(2, 'Tim 2'),
(3, 'Tim 3'),
(4, 'Tim 4'),
(5, 'Tim 5'),
(6, 'Tim 6'),
(7, 'Tim 7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_instansi` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_instansi`, `email`, `alamat`, `username`, `password`, `role_id`) VALUES
(1, 'Hesty A.', '', '', 'admin123', '$2y$10$i4HD610v2o5HOxZXEC4G5eO.E.D0oVy/eKAohNku2EXZOOW4Y75pC', 1),
(7, 'member', 'alivgalih12@gmail.com', 'member', 'member', '$2y$10$TxsrOb3hN7aHJvwrzD25eeNs6d1bfvYhEGhVCq01I8mBSTP8KGEKG', 2),
(8, 'Inspektorat', 'admin@mail.com', 'Tegal', 'elpisyahrin', '$2y$10$v1d0fZ8ZWCAYeV/0Txggo.GPBr4L1GEHaDCLC0439022XE82Uxp06', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_pengaduan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_pengaduan` (
`id` int(11)
,`instansi_id` int(11)
,`tgl_pengaduan` date
,`id_jenispengawasan` int(11)
,`tanggal_pelaksanaan` date
,`id_timpengawasan` int(11)
,`obrik` varchar(100)
,`no_hasil_pengawasan` varchar(100)
,`tanggal_hasil_pengawasan` date
,`rekomendasi` text
,`hasil_tindak_lanjut` text
,`status_pengaduan` int(11)
,`jenis` varchar(100)
,`tim` varchar(109)
,`nama_instansi` varchar(128)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pengaduan`
--
DROP TABLE IF EXISTS `view_pengaduan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pengaduan`  AS SELECT `pengaduan`.`id` AS `id`, `pengaduan`.`instansi_id` AS `instansi_id`, `pengaduan`.`tgl_pengaduan` AS `tgl_pengaduan`, `pengaduan`.`id_jenispengawasan` AS `id_jenispengawasan`, `pengaduan`.`tanggal_pelaksanaan` AS `tanggal_pelaksanaan`, `pengaduan`.`id_timpengawasan` AS `id_timpengawasan`, `pengaduan`.`obrik` AS `obrik`, `pengaduan`.`no_hasil_pengawasan` AS `no_hasil_pengawasan`, `pengaduan`.`tanggal_hasil_pengawasan` AS `tanggal_hasil_pengawasan`, `pengaduan`.`rekomendasi` AS `rekomendasi`, `pengaduan`.`hasil_tindak_lanjut` AS `hasil_tindak_lanjut`, `pengaduan`.`status_pengaduan` AS `status_pengaduan`, `jenispengawasan`.`jenis` AS `jenis`, `timpengawasan`.`tim` AS `tim`, `user`.`nama_instansi` AS `nama_instansi` FROM (((`pengaduan` join `jenispengawasan` on(`pengaduan`.`id_jenispengawasan` = `jenispengawasan`.`id`)) join `timpengawasan` on(`pengaduan`.`id_timpengawasan` = `timpengawasan`.`id`)) join `user` on(`pengaduan`.`instansi_id` = `user`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenispengawasan`
--
ALTER TABLE `jenispengawasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jenis_pengawas` (`id_jenispengawasan`),
  ADD KEY `fk_tim` (`id_timpengawasan`);

--
-- Indeks untuk tabel `timpengawasan`
--
ALTER TABLE `timpengawasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
