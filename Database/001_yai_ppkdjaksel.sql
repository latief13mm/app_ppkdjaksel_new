-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 12:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `001_yai_ppkdjaksel`
--

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE IF NOT EXISTS `reset_password` (
`id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `new_pass` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `expire` datetime NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`id`, `email`, `new_pass`, `token`, `expire`, `role`) VALUES
(1, 'abdullatief.muktimufida@gmail.', '123456', 'ca509c5ff3678523570ff9a5a9795354', '2019-08-06 15:02:11', 'alumni'),
(3, 'trio@gmail.com', '54321', 'c0cf43134e6e9b7cc6c9cf09741fe7a7', '2019-08-06 15:43:17', 'alumni'),
(4, 'abdullatief.muktimufida@gmail.com', '87654321', '9c7a766b448c3e6b73245fc2b621c84c', '2019-08-06 16:13:19', 'alumni'),
(5, 'abdullatief.muktimufida@gmail.net', '87654321', 'f9ce2e174e9c925d8870fbbc78ea64e4', '2019-08-06 16:17:42', 'alumni'),
(6, 'sule@gmail.com', '55555', '9b30a2d1cdd3f24ba688f7ee4c8d3a0d', '2019-08-06 16:36:48', 'admin'),
(7, 'abdullatief.muktimufida@gmail.com', '12345', '795a9a44a39f8bd2dc390958c64d4028', '2019-08-08 00:48:58', 'alumni'),
(8, 'trio@gmail.com', '77777', '0d62f5eb11817c2708138253b661f94e', '2019-08-08 16:56:52', 'alumni'),
(9, 'indomaret@gmail.com', '77777', '71ed6886c52231f17db77c270f5b037c', '2019-08-08 16:59:48', 'perusahaan'),
(10, '', '', 'd8b8745e53e538ac276464d703d3c93f', '2019-08-12 04:24:00', 'alumni');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `kode_admin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`kode_admin`, `username`, `password`, `telepon`, `email`, `gambar`, `status`) VALUES
('ADM02', 'username1', 'Admin', '0234567845678', 'admin@yahoo.com', 'user-33638_960_720.png', 'Aktif'),
('ADM03', 'username2', 'array', '02345678923456', 'array@a.com', 'lady-31217_960_720.png', 'Aktif'),
('ADM04', 'username7', '123456', '79797979', 'S121@gmail.com', 'user-33638_960_720.png', 'Tidak Aktif'),
('ADM05', 'username6', '123456', '0898998912', 'sizuk@gmail.com', 'lady-31217_960_720.png', 'Tidak Aktif'),
('ADM06', 'username5', '12345', '897978', 'sssa@gmail.com', 'user-33638_960_720.png', 'Tidak Aktif'),
('ADM01', 'superadmin', '55555', '089664187625', 'abdullatief.muktimufida@gmail.com', 'Foto Strong.jpg', 'Super Administrator'),
('ADM07', 'username3', '55555', '081214141', 'sule@gmail.com', 'lady-31217_960_720.png', 'Aktif'),
('ADM08', 'username4', '12345', '021000111222', 'angga@gmail.com', 'user-33638_960_720.png', 'Aktif'),
('ADM09', 'adminpower', 'admin', '089664186725', 'abdullatief.muktimufida@gmail.com', 'DSC00931.JPG', 'Super Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE IF NOT EXISTS `tb_alumni` (
`id_alumni` int(15) NOT NULL,
  `nama_alumni` varchar(50) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `keahlian` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `peminatan_kejuruan` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `nama_alumni`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telephone`, `email`, `pendidikan`, `keahlian`, `user_name`, `password`, `peminatan_kejuruan`, `status`, `kategori`, `keterangan`, `gambar`) VALUES
(2, 'Maria', '3101010101010101', 'Jakarta', '1997-02-06', 'Perempuan', 'Jl. Mampang Prapatan no. 1', '08333222111', 'maria@gmail.com', 'S1 / D4 / Sederajat', 'Bisa Berbahasa Asing', 'maria123', '12345', 'Bahasa Jepang', 'Alumni', '', 'Ingin Ikut Pelatihan', '89.jpeg'),
(3, 'Trio ', '3102020202020202', 'Lampung ', '1994-06-08', 'Laki-Laki', 'Jl. Setia Budi ', '08111222333', 'trio@gmail.com', 'S1 / D4 / Sederajat', 'Mengoperasikan Microsoft excel', 'trio123', '77777', 'Bahasa Inggris', 'Alumni', 'Peserta Standar', 'Ingin belajar bareng kawan - kawan', 'poto 81.jpeg'),
(4, 'asri ', '3103030303030303', 'Jakarta', '1994-06-11', 'Perempuan', 'Jl. Menteng Dalam', '081333222111', 'asri@gmail.com', 'S1 / D4 / Sederajat', 'bisa bernyanyi sambil tidur', 'asri123', '12345', 'Tata Busana', 'Alumni', '', 'Karena Gratis...! ', 'poto 25.jpg'),
(5, 'Novianto ', '3105050505050505', 'Jakarta', '1997-02-06', 'Laki-Laki', 'Jl. Bodor Raya No. 23', '08111222333', 'novianto@gmail.com', 'Silahkan Pilih', 'Bisa nonton anime tanpa subtit', 'novianto123', '12345', 'Teknik Pendingin / AC', 'Alumni', 'Komitmen Terbaik', 'Karena suka anime ', 'poto 39.jpg'),
(6, 'Andrian', '3106060606060606', 'Jakarta', '1995-12-01', 'Laki-Laki', 'cek', '08111222333', 'andrian@gmail.com', 'Silahkan Pilih', 'Bisa memasang baut tanpa obeng', 'andrian123', '12345', 'Silahkan Pilih', 'Alumni', '', 'Karena Owkey', 'poto 7.jpg'),
(7, 'Andi Hutapea', '3173071312960004', 'Jakarta', '2000-12-16', 'Laki-Laki', 'Jl. Timur Barat Utara', '08111222333', 'andi123', 'D3 / Sederajat', 'Main Gaplek', 'andi123', '12345', 'Silahkan Pilih', 'Alumni', '', 'ingin jadi juara gaplek', 'poto 54.jpg'),
(8, 'Shinta', '3108080808080808', 'Jakarta', '1994-07-13', 'Perempuan', 'Jl. Tangerang Raya No.21', '08222333444', 'shinta@gmail.com', 'S1 / D4 / Sederajat', 'Bisa menganalisis perminyakan', 'shinta123', '12345', 'Operator Komputer', 'Alumni', 'Komitmen Terbaik', 'karena saya ingin mengenal orang-orangnya ', 'poto 36.jpg'),
(9, 'Fajar', '3109090909090909', 'Jakarta', '1996-08-12', 'Laki-Laki', 'Jl. Bekasi Barat No.99', '021222333555', 'fajar@gmail.com', 'SMK / SMEA / STM / Sederajat', 'Bisa berbahasa jepang dengan b', 'fajar123', '12345', 'Bahasa Jepang', 'Alumni', 'Peserta Berprestasi', 'Karena ingin lebih belajar lagi', 'poto 72.jpeg'),
(11, 'Wahyu', '3111111111111111', 'Bogor', '1999-07-13', 'Laki-Laki', 'Jl. Bogor Situ no. 11', '08128899001', 'wahyu@gmail.com', 'S1 / D4 / Sederajat', 'Bisa membuat elektronik dari h', 'wahyu123', '12345', 'Teknik Pendingin / AC', '', '', 'Karena gratis dan tempatnya bagus', 'poto 55.jpg'),
(12, 'Agus', '3112121212121212', 'Jakarta', '1992-01-29', 'Laki-Laki', 'Jl. Jatim Baru  No.22', '089664186725', 'agus@gmail.com', 'S1 / D4 / Sederajat', 'Bisa memanagement ikan di laut', 'agus123', '12345', 'MTU Tata Busana', 'Alumni', '', 'Karena dekat dengan jalan raya', 'DSC00565.JPG'),
(13, 'karel', '3113131313131313', 'Jakarta', '1998-10-21', 'Laki-Laki', 'Jl. Manggari Selatan', '021000111444', 'karel@gmail.com', 'S1 / D4 / Sederajat', 'Bisa ngoding sambil terbang', 'karel123', '12345', 'Desain Grafis', 'Alumni', '', 'Karena ada wibu di sana', 'DSC00725.JPG'),
(14, 'syarif', '3114141414141414', 'Jakarta', '1992-12-02', 'Laki-Laki', 'Jl. pasar rebo', '021000111222', 'syarif@gmail.com', 'S1 / D4 / Sederajat', 'bela diri ', 'syarif123', '12345', 'Operator Komputer', 'Alumni', '', 'karena bisa menghajar lawan ', 'DSC00681.JPG'),
(15, 'nobita', '3115151515151515', 'Jepang', '2002-03-01', 'Laki-Laki', 'Jl. Jembatan Mampang', '021000111333', 'nobita@gmail.com', 'S1 / D4 / Sederajat', 'suka pinjam alat doraemon', 'nobita123', '12345', 'Tata Graha', 'Alumni', 'Peserta Berprestasi', 'karena tidak ada jiaentnya ', 'DSC00584.JPG'),
(16, 'Anjar', '3118181818181818', 'Jakarta', '1997-12-11', 'Laki-Laki', 'Jl. Petamburan Dalam', '0821111122244', 'anjar@gmail.com', 'D2 / Sederajat', 'Bisa memancing ikan dengan tan', 'anjar123', '12345', 'Operator Komputer', 'Alumni', '', 'Karena dekat dengan rumah sakit', 'Wallpaper_call_of_duty_5_world_at_war.jpg'),
(18, 'Latief Mukti', '3173071312960004', 'Jakarta', '1996-12-13', 'Laki-Laki', 'Jl. Tomang Pulo No.17', '089664186725', 'abdullatief.muktimufida@gmail.com', 'S1 / D4 / Sederajat', 'Main Game ', 'Latief321', '3173071312960004', 'Bahasa Jepang', 'Alumni', 'Komitmen Terbaik', 'Karena tempatnya strategis', 'Abdul Latief Mukti.jpg'),
(19, 'Abdul Latief Mukti Mufida', '3173071312960004', 'Jakarta', '2019-08-02', 'Laki-Laki', 'Jl. Abdul Muis ', '021000111222', 'abdullatief.muktimufida@gmail.com', 'S1 / D4 / Sederajat', 'mampu menguasai bahasa inggris', 'latief123', '3173071312960004', 'MTU Tata Busana', 'Alumni', '', 'Karena tempatnya strategis', 'user-lg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inbox`
--

CREATE TABLE IF NOT EXISTS `tb_inbox` (
`id_inbox` int(8) NOT NULL,
  `id_perusahaan` int(8) NOT NULL,
  `id_alumni` int(8) NOT NULL,
  `pesan` text NOT NULL,
  `balasan` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'UnRead',
  `flag` varchar(15) NOT NULL DEFAULT 'Perusahaan'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_inbox`
--

INSERT INTO `tb_inbox` (`id_inbox`, `id_perusahaan`, `id_alumni`, `pesan`, `balasan`, `tanggal`, `jam`, `keterangan`, `status`, `flag`) VALUES
(1, 8, 17, 'kepada saudara latief\r\n\r\nkami tertarik dengan pengalaman saudara, dan kami harapkan saudara dapat datang untuk mengikuti interview di perusahaan kami\r\nsekian dan terimakasih', '', '2019-08-17', '19:53:04', 'Membawa alat tulis dan perlengkapan interview lainnya', 'Read', 'Perusahaan'),
(2, 8, 17, '', 'Terimakasih kepada perusahaan indomaret.\r\n\r\nsaya bersedian untuk datang keperusahaan anda \r\nterimakasih', '2019-08-17', '21:17:23', '', 'Read', 'Alumni'),
(3, 10, 18, 'Kami Tertarik Kepada anda, kami harap anda dapat mengikuti interview diperusahaan kami', '', '2019-08-25', '08:28:04', 'membawa ijazah dan lain - lain', 'Read', 'Perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_loker`
--

CREATE TABLE IF NOT EXISTS `tb_loker` (
`id_loker` int(15) NOT NULL,
  `judul_loker` text NOT NULL,
  `status_pekerjaan` varchar(50) NOT NULL,
  `id_perusahaan` int(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jumlah_karyawan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi_pekerjaan` text NOT NULL,
  `bidang_pekerjaan` varchar(100) NOT NULL,
  `gaji` varchar(100) NOT NULL,
  `tunjangan` text NOT NULL,
  `hari_kerja` varchar(50) NOT NULL,
  `jam_kerja` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `usia` varchar(50) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `status_pernikahan` varchar(30) NOT NULL,
  `pengalaman` text NOT NULL,
  `kemampuan_penunjang` text NOT NULL,
  `sertifikat_profesi` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_loker`
--

INSERT INTO `tb_loker` (`id_loker`, `judul_loker`, `status_pekerjaan`, `id_perusahaan`, `jabatan`, `jumlah_karyawan`, `tanggal`, `lokasi_pekerjaan`, `bidang_pekerjaan`, `gaji`, `tunjangan`, `hari_kerja`, `jam_kerja`, `jenis_kelamin`, `usia`, `pendidikan`, `status_pernikahan`, `pengalaman`, `kemampuan_penunjang`, `sertifikat_profesi`, `keterangan`, `gambar`, `status`) VALUES
(3, 'Dibutuhkan Karyawan Indomaret', 'Kontrak', 8, 'Kasir', '32 Orang', '2019-07-28', 'Jakarta', 'Logistik', 'Rp. 3000.000', 'Kesehatan, Pulsa', 'Senin-Minggu', 'Shifting', 'Laki-laki Dan Perempuan', '17 - 20 Tahun', 'SMA / SMK / Mandrasah', 'Belum Menikah', 'Berpengalaman Sebagai kasir', 'Bahasa Inggris', 'Diutamakan', 'Konsentrasi yang tinggi', '11821305_474704746033813_1001957042_n[1].jpg', 'Publish'),
(5, 'Dibutuhkan sukarelawan uniliver', 'Kontrak', 10, 'Founder', '100 Orang', '2019-07-29', 'Jakarta', 'Logistik', 'Rp. 3000.000', 'Kesehatan, Pulsa', 'Senin-Jumat', 'Shifting', 'Laki-laki Dan Perempuan', '17 - 20 Tahun', 'D-3', 'Belum Menikah', 'Siap terjun Lapangan', 'Bahasa Inggris', 'Tidak Diutamakan', 'Siap kerja sama team', 'training-sales-team-investment-open-graph.png', 'Publish'),
(6, 'Bagian Gudang', 'Tetap', 8, 'Gudang', '25 Orang', '2019-08-03', 'Jakarta', 'Logistik', 'Rp. 3000.000', 'Kesehatan, Pulsa, Medal Of Honor', 'Senin-Jumat', 'Office Hour', 'Laki-laki', '17 - 20 Tahun', 'S-1', 'Belum Menikah', 'Berpengalaman Sebagai Dibagian Logistik', 'Teknik Otomotif', 'Diutamakan', 'Siap kerja banting tulang', 'Pengertian-Logistik.jpg', 'Publish'),
(7, 'Dibutuhkan Seorang Marketing Indomaret', 'Kontrak', 8, 'staff marketing', '12 orang', '2019-08-05', 'jabodetabek', 'Layanan Pelanggan', 'Rp. 2000.000 - Rp.3000.000', 'Kesehatan, Pulsa, Medal Of Honor', 'Senin-Jumat', 'Shifting', 'Laki-laki Dan Perempuan', '17 - 20 Tahun', 'SMA / SMK / Mandrasah', 'Belum Menikah', 'pandai berkomunikasi', 'Bahasa Inggris', 'Diutamakan', 'suka bergaul', 'training-sales-team-investment-open-graph.png', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengalaman`
--

CREATE TABLE IF NOT EXISTS `tb_pengalaman` (
`id_pengalaman` int(15) NOT NULL,
  `id_alumni` int(15) NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `periode` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `sertifikat_bnsp` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengalaman`
--

INSERT INTO `tb_pengalaman` (`id_pengalaman`, `id_alumni`, `pengalaman_kerja`, `periode`, `catatan`, `ijazah`, `sertifikat`, `sertifikat_bnsp`) VALUES
(4, 2, 'yutuber', '2 dekade', 'suka liat ata jalan tapi tidak  ada petir', '', '', ''),
(5, 3, 'pernah bekerja di walikota', '2 bulan', 'bisa uinput excel, main excel dan koding pake excel', '', '', ''),
(6, 15, 'ngerjain doraemon terus ', 'dari dulu sampe sekarang', 'doraemon nya kocak mau di kerjai  aja', '', '', ''),
(8, 17, 'Pernah mengikuti pelatihan akuntansi ', 'Pelatihan 1 Bulan', 'Mendapatkan sertifikat BNSP Akuntansi ', 'ijazah 1.jpg', 'sertifikat.jpg', '1.jpg'),
(9, 18, 'Pernah Mengikuti Pelatihan Akuntansi ', '3 Bulan ', 'Mendapatkan Sertifikat BNSP', 'ijazah 1.jpg', 'sertifikat.jpg', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE IF NOT EXISTS `tb_perusahaan` (
`id_perusahaan` int(15) NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `skdp` varchar(30) NOT NULL,
  `wlk` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `website`, `email`, `telephone`, `user_name`, `password`, `status`, `skdp`, `wlk`, `keterangan`, `gambar`) VALUES
(1, 'PT Honda', 'Jl.  Jangan harus irit bensin', 'www.astra-honda.com', 'honda@gmail.com', '2147483647', 'honda', '12345', 'Menunggu Verifikasi', '111222333444', '444333222111', 'Perusahaan Kami Bergerak di bidang otomotif', 'download (2).png'),
(2, 'PT Suzuki ', 'Jl.  Terus tapi spepart mahal', 'www.suzuki.co.id', 'suzuki@gmail.com', '2147483647', 'suzuki', '12345', 'Menunggu Verifikasi', '111222333444', '444333222111', 'Perusahaan kami bergerak di bidang otomotif', 'images.png'),
(3, 'PT Toshiba Indonesia ', 'Jl.  Masih panjang walaupun nanti ketemunya disana', 'http://www.toshiba.com', 'toshiba@gmail.com', '2147483647', 'toshiba', '12345', 'Terverifikasi', '111222333444', '444333222111', 'Perusahaan kami bergerak di bidang perangkat keras', '8SNmvxUn.jpg'),
(4, 'PT AMD Indonesia ', 'Jl. Harco mangga dua', 'www.amd.com', 'amd@gmail.com', '2147483647', 'amd', '12345', 'Menunggu Verifikasi', '111222333444', '444333222111', 'Perusahaan kami suka gaming dan bikin dompet mahasiswa menangins, hahaha', '420dea10868d26aad1dbba1358e453f2.jpg'),
(5, 'PT Nvidia Indonesia ', 'Jl. Mangga Besar ', 'www.nvidia.com', 'nvidia@gmail.com', '2147483647', 'nvidia', '12345', 'Menunggu Verifikasi', '111222333444', '444333222111', 'Perusahaan kami bisa membuat games misqueen jadi lebih merana, wkwkwkwk', 'download (1).png'),
(6, 'PT  Youtube Indonesia', 'Jl. Ashiap subcribe gratis gays', 'www.youtube.com', 'youtube@gmail.com', '2147483647', 'youtube', '12345', 'Menunggu Verifikasi', '111222333444', '444333222111', 'Perusahaan kami bisa membuat konten yang gratis', '2000px-YouTube_social_white_square_2017.svg_-1-1024x778.png'),
(7, 'PT Nokia Indonesia ', 'Jl. Yang menghubungkan jauh dekat dekat jadi jauh', 'www.nokia.com', 'nokia@gmail.com', '2147483647', 'nokia', '12345', 'Menunggu Verifikasi', '111222333444', '9999999999999', 'Perusahaan kami terus bertahan walaupun kemaren jatuh ', 'logo-nokia.jpg'),
(8, 'PT Indomaret ', 'Jl. Sampingan sama saingan  yuhuuu', 'www.indomaret.com', 'indomaret@gmail.com', '02122555666', 'indomaret', '77777', 'Terverifikasi', '111222333444', '444333222111', 'Perusahaan kami bergerak di bidang pasar yang deket dengan pasar', 'download.png'),
(9, 'PT Alfamaret ', 'Jl. Sampingan lagi sama pesaing', 'www.alfamaret.com', 'alfmaret@gmail.com', '2147483647', 'alfamaret', '12345', 'Menunggu Verifikasi', '111222333444', '444333222111', 'Perusahaan kami bergerak di bidang market place', 'alfamartku.jpg'),
(10, 'PT Uniliver ', 'Jl. nya di gundulin terus', 'www.uniliver.com', 'uniliver@gmail.com', '2147483647', 'uniliver', '12345', 'Terverifikasi', '111222333444', '444333222111', 'Perusahaan kami bergerak disegala bidang ', '1200px-Unilever.svg.png'),
(11, 'PT Asus ', 'Jl. Pemain baru tapi bisa bersaing', 'www.asus.com', 'asus@gmail.com', '2147483647', 'asus', '12345', 'Terverifikasi', '111222333444', '444333222111', 'Perusahaan kami bergerak dibidang  hadrware laptop', 'download (3).png'),
(12, 'PT Honda Mobil ', 'Jl. Tali Putar Putar', 'www.honda-mobil.com', 'honda-mobil@gmail.com', '2147483647', 'honda', '12345', 'Terverifikasi', '111222333444', '444333222111', 'Perusahaan kami beda dengan honda motor', 'Honda-logo.png'),
(13, 'PT Google Indonesia ', 'Jl. SCBD ', 'www.google.com', 'google@gmail.com', '2147483647', 'google', '12345', 'Terverifikasi', '111222333444', '444333222111', 'Perusahaan Kami sudah terkenal dong', 'googlelogo_color_284x96dp.png'),
(14, 'PT Detik ', 'Jl. Detik ', 'www.detik.com', 'detik@gmail.com', '2147483647', 'detik', '12345', 'Terverifikasi', '111222333444', '444333222111', 'Detik adalah perusahaan berita ', 'download.jpg'),
(15, 'PT Kompas ', 'Jl. Kompas', 'www.kompas.com', 'kompas@gmail.com', '2147483647', 'kompas', '12345', 'Terverifikasi', '111222333444', '444333222111', 'Kompas adalah perusahaan berita ', '250px-Logo_Kompasdotcom.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilihan`
--

CREATE TABLE IF NOT EXISTS `tb_pilihan` (
`id_pilihan` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `id_alumni` int(15) NOT NULL,
  `pesan` text NOT NULL,
  `id_loker` int(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `balasan` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pilihan`
--

INSERT INTO `tb_pilihan` (`id_pilihan`, `tanggal`, `id_alumni`, `pesan`, `id_loker`, `status`, `balasan`, `keterangan`) VALUES
(30, '2019-08-06', 9, 'Saya ingin melamar diperusahaan indomaret', 3, 'Diterima', 'Iya Fajar Saya Terima Kerja Di Indomaret', ''),
(35, '2019-08-25', 18, 'Kepada Bapak Dan Ibu yang saya Hormati\r\n\r\nDengan ini Saya Menulis Format Lamaran Pekerjaan untuk dapat bekerja di perusahaan ini\r\n\r\nsekian dan terimakasih', 7, 'Diterima', 'Baik Saudara Kami terima untuk mengikuti interview yang ada perusahaan kami.Harap membawa persyaratan yang kami butuhkan :1. Ijazah yang telah difotocopy2. Memakai pakaian yang rapih dan sopan3. Membawa fotocopy sertifikat-sertifikat terkait. sekian dari kami, kami harapkan kedatangan saudara untuk tepat waktu', ''),
(36, '2019-08-25', 18, 'tes', 5, 'Tidak Diterima', 'maaf', ''),
(37, '2019-08-25', 18, 'Ingin masuk perusahaan itu', 6, 'Diterima', 'OKE DAY', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
 ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
 ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `tb_loker`
--
ALTER TABLE `tb_loker`
 ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `tb_pengalaman`
--
ALTER TABLE `tb_pengalaman`
 ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
 ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
 ADD PRIMARY KEY (`id_pilihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
MODIFY `id_alumni` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
MODIFY `id_inbox` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_loker`
--
ALTER TABLE `tb_loker`
MODIFY `id_loker` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_pengalaman`
--
ALTER TABLE `tb_pengalaman`
MODIFY `id_pengalaman` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
MODIFY `id_perusahaan` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
MODIFY `id_pilihan` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
