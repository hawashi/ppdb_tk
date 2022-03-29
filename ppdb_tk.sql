-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 04:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `no_kk`, `password`) VALUES
(1, 'admin', 'admin', '11111', 'admin123'),
(2, '', 'admin123', '222', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(3, '', 'admin123', '222', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(4, '', 'admin123', '222', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(5, '', 'admin123', '222', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(6, '', 'admin123', '222', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(7, '', 'admin1', '111', 'e00cf25ad42683b3df678c61f42c6bda'),
(8, '', 'admin1', '111', 'e00cf25ad42683b3df678c61f42c6bda'),
(9, '', 'admin1', '111', 'e00cf25ad42683b3df678c61f42c6bda'),
(10, 'admin123', 'admin123', '373', 'ffd52f3c7e12435a724a8f30fddadd9c'),
(11, 'coba admin', 'cobaadmin', '078', 'b1e0a5a7b01ab8d76921b9b26ea8d1f4'),
(12, 'coba admin', 'cobaadmin', '078', 'b1e0a5a7b01ab8d76921b9b26ea8d1f4'),
(13, 'coba', 'coba123', '999', 'b706835de79a2b4e80506f582af3676a'),
(14, 'saya', 'saya', '0575', '453b94ed53c068e99a0605a7dccb06c7'),
(15, 'kooo', 'ko', '0987', '9e1e06ec8e02f0a0074f2fcc6b26303b');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `anak_ke` int(100) NOT NULL,
  `jumlah_saudara` int(100) NOT NULL,
  `status_dalam_keluarga` varchar(200) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `stat` varchar(100) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `foto_kk` varchar(100) NOT NULL,
  `foto_akte` varchar(100) NOT NULL,
  `foto_anak` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(255) NOT NULL,
  `agama_ayah` varchar(255) NOT NULL,
  `kewarganegaraan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `pendidikan_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tempat_lahir_ibu` varchar(200) NOT NULL,
  `agama_ibu` varchar(255) NOT NULL,
  `kewarganegaraan_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `pendidikan_ibu` varchar(255) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `id_user`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `nama_ayah`, `no_hp`, `no_kk`, `nama_panggilan`, `anak_ke`, `jumlah_saudara`, `status_dalam_keluarga`, `kewarganegaraan`, `stat`, `tgl_daftar`, `nama_program`, `foto_kk`, `foto_akte`, `foto_anak`, `tempat_lahir_ayah`, `agama_ayah`, `kewarganegaraan_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `agama_ibu`, `kewarganegaraan_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `tanggal_lahir_ayah`, `tanggal_lahir_ibu`) VALUES
(6, 5, 'delapan', 'ddd', '2022-01-13', '888', 'djlksajdak', 'Perempuan', 'Islam', 'djlakjdlaskj', '989868', '', 0, 0, '', '', 'Taman Kanak-kanak', '0000-00-00 00:00:00', '2022-01-16 16:01:27', 'sarung 5.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0000-00-00', '0000-00-00'),
(7, 5, 'delapan', 'ddd', '2022-01-13', '888', 'djlksajdak', 'Perempuan', 'Islam', 'djlakjdlaskj', '989868', '', 0, 0, '', '', 'Taman Kanak-kanak', '0000-00-00 00:00:00', '2022-01-16 16:01:27', 'sarung 5.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0000-00-00', '0000-00-00'),
(8, 6, 'sembilaaan', 'jdkasjhda', '2022-01-26', '999', 'ndsankdsaj', 'Laki-laki', 'Islam', 'daldlksajdlaj', '987987', '', 0, 0, '', '', 'Penitipan Anak', '0000-00-00 00:00:00', '2022-01-16 16:01:32', 'sarung 1.jpg', 'thumb-removebg-preview.png', 'cap.jpg', '', '', '', '', '', '', '', '', '', '', '0', '0000-00-00', '0000-00-00'),
(9, 6, 'sembilaaan', 'jdkasjhda', '2022-01-26', '999', 'ndsankdsaj', 'Laki-laki', 'Islam', 'daldlksajdlaj', '987987', '', 0, 0, '', '', 'Penitipan Anak', '0000-00-00 00:00:00', '2022-01-16 16:01:32', 'sarung 1.jpg', 'thumb-removebg-preview.png', 'cap.jpg', '', '', '', '', '', '', '', '', '', '', '0', '0000-00-00', '0000-00-00'),
(28, 27, 'cobaaaasajaa', 'saja', '2022-02-17', 'Laki-laki', 'jdslkajsdalskdj', 'Islam', 'hdhksajhdkajsdh', '97987987', '343', '', 0, 0, '', '', 'Ditolak', '2022-02-07 10:02:02', 'Taman Kanak-kanak', 'cap-removebg-preview.png', 'sarung 3.jpg', 'cap.jpg', '', '', '', '', '', '', '', '', '', '', '0', '0000-00-00', '0000-00-00'),
(37, 37, 'semangaterus', 'yooooooooo', '2022-01-31', 'Laki-laki', 'dshakdsaj', 'Islam', 'dsjakjdsh', '8787837', '7997', 'teruus', 2, 2, 'Anak Kandung', 'hdskajsdhkajh', 'Ditolak', '2022-02-10 08:02:49', 'Taman Kanak-kanak', 'cap.jpg', 'sarung 2.jpg', 'sarung 3.jpg', 'hdskajhs', 'Islam', 'dsaksjdh', 'hdskajh', 'hsdkjah', 'hdskajhsd', 'dsaljdkahkjh', 'Islam', 'dhsakjhd', 'dhskajsdh', 'hdskaj', '2022-02-08', '2022-01-30'),
(39, 39, 'okeee', 'oooo', '2022-02-02', 'Laki-laki', 'ddsoasdo', 'Islam', 'djalkjd', '12432342', '474', 'kee', 1, 1, 'Anak Kandung', 'dlaalkdjsalkj', 'Diterima', '2022-02-10 11:02:20', 'Taman Kanak-kanak', 'uyghur 3.jpg', 'uyghur cap 2.jpg', 'sarung 5.jpg', 'jdslakjds', 'Islam', 'djsakjdsh', 'dhsakjdh', 'dhsakjh', 'dshkajsdh', 'dakjdsakj', 'Islam', 'jdsakdjkj', 'hdskajshd', 'dhskajh', '2022-01-31', '2022-01-30'),
(41, 41, 'fix terima', 'bbb', '2022-02-01', 'Laki-laki', 'bumi pallangga mas 1 blok c7 no 3', 'Islam', 'aaaaaaaaa', '082119007565', '990', 'ma', 1, 1, 'Anak Kandung', 'Indonesia', 'Diterima', '2022-02-11 06:02:17', 'Play Group', 'cap.jpg', 'sarung 3.jpg', 'sarung 5.jpg', 'bbbbb', 'Islam', 'djsakdsakjh', 'dshkasjdh', 'hdskajshd', 'jdoawidjoaij', 'kdsajhsdkajh', 'Islam', 'dsahjdsah', 'dshkajsdhakj', 'hdskjahdsakjh', '2022-01-30', '2022-01-30'),
(42, 42, 'coba lagi eaaa', 'jkl', '2022-02-01', 'Laki-laki', 'akjsdhaksjh', 'Islam', 'adhkajshd', '3234235', '077', 'ea', 4, 4, 'Anak Kandung', 'hdskajsdh', 'Menunggu Keputusan', '2022-02-11 08:02:06', 'Penitipan Anak', 'cap.jpg', 'taliban cap 1.jpg', 'sarung 1.jpg', 'dskajdhaksjh', 'Islam', 'sdhajsdh', 'hdskajhd', 'hdskajh', 'hdskajsdh', 'sdhhkajsdh', 'Islam', 'dsahkjsdh', 'hdskajsh', 'hdskajh', '2022-01-31', '2022-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(100) NOT NULL,
  `nama_program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `nama_program`) VALUES
(1, 'Taman Kanak-kanak'),
(2, 'Play Group'),
(3, 'Penitipan Anak');

-- --------------------------------------------------------

--
-- Table structure for table `terima`
--

CREATE TABLE `terima` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `no_hp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terima`
--

INSERT INTO `terima` (`id`, `id_user`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `no_kk`, `nama_program`, `tempat_lahir`, `alamat`, `agama`, `nama_ayah`, `no_hp`) VALUES
(1, 0, 'zzzzzzzzzzzz', '2022-02-08', 'Laki-laki', '444', 'Taman Kanak-kanak', 'bdg', 'daksjdhsa', 'Islam', 'limaaa', 888),
(2, 0, 'hawashi', '2022-01-31', 'Laki-laki', '322', 'Taman Kanak-kanak', 'hhahah', 'dsadas', 'Islam', 'readonly', 0),
(3, 32, 'cobalagiii', '2022-02-01', 'Laki-laki', '322', 'Taman Kanak-kanak', 'dhskajhd', 'dskajshd', 'Islam', 'jdslakjsd', 2322332),
(4, 0, 'cobalagiii', '2022-02-01', 'Laki-laki', '322', 'Penitipan Anak', 'dhskajhd', 'dskajshd', 'Islam', 'jdslakjsd', 2322332),
(5, 0, 'cobalagiii', '2022-02-01', 'Laki-laki', '322', 'Penitipan Anak', 'dhskajhd', 'dskajshd', 'Islam', 'jdslakjsd', 2322332),
(6, 0, 'cobalagiii', '2022-02-01', 'Laki-laki', '322', 'Taman Kanak-kanak', 'dhskajhd', 'dskajshd', 'Islam', 'jdslakjsd', 2322332),
(7, 0, 'cobalagiii', '2022-02-01', 'Laki-laki', '322', 'Taman Kanak-kanak', 'dhskajhd', 'dskajshd', 'Islam', 'jdslakjsd', 2322332),
(8, 0, 'cobalagiii', '2022-02-01', 'Laki-laki', '322', 'Play Group', 'dhskajhd', 'dskajshd', 'Islam', 'jdslakjsd', 2322332),
(9, 0, 'cobalagiii', '2022-02-01', 'Laki-laki', '322', 'Play Group', 'dhskajhd', 'dskajshd', 'Islam', 'jdslakjsd', 2322332),
(10, 0, 'jijijijij', '2022-02-07', 'Laki-laki', '078', 'Taman Kanak-kanak', 'jijjojpjpj', 'sdjakjds', 'Islam', 'sdakjsd', 232222),
(11, 0, 'ayooooo', '2020-01-13', 'Laki-laki', '575', 'Taman Kanak-kanak', 'lah', 'kjksajd', 'Islam', 'djlajdl', 2312414),
(12, 0, 'semangaaaaaaaaaaaatttt', '2022-02-08', 'Laki-laki', '797', 'Taman Kanak-kanak', 'ayo', 'ayooooooooooooooooo', 'Islam', 'dsadslkaj', 232342),
(13, 0, 'sekuuuutttt', '2022-02-07', 'Laki-laki', '099', 'Taman Kanak-kanak', 'kuy', 'sdjkjadk', 'Islam', 'dskajhsdakjh', 2147483647),
(14, 38, 'cobamii', '2022-01-31', 'Laki-laki', '088', 'Taman Kanak-kanak', 'dhskajhd', 'ksdhakjdh', 'Islam', 'dskajdhsakh', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `no_kk`, `password`) VALUES
(1, 'kami', '54321', '202cb962ac59075b964b07152d234b70'),
(2, 'aaa', '111', '698d51a19d8a121ce581499d7b701668'),
(3, 'yusuf', '777', 'f1c1592588411002af340cbaedd6fc33'),
(4, 'hahaha', '333', '310dcbbf4cce62f762a2aaa148d556bd'),
(5, 'coba', '888', '0a113ef6b61820daa5611c870ed8d5ee'),
(6, 'sembilan', '999', 'b706835de79a2b4e80506f582af3676a'),
(7, 'lima', '555', '15de21c670ae7c3f6f3f1f37029303c9'),
(8, 'enam', '676', 'dc6a70712a252123c40d2adba6a11d84'),
(9, 'noool', '000', 'c6f057b86584942e415435ffb1fa93d4'),
(10, 'saya', '090', '56d9ba4ec637e6b48278c3a7837db9e9'),
(11, 'tujudelapan', '787', '3621f1454cacf995530ea53652ddf8fb'),
(12, 'tujuh', '7777', 'f1c1592588411002af340cbaedd6fc33'),
(13, 'namaaa', '442', 'c203d8a151612acf12457e4d67635a95'),
(14, 'cobanumber', '212', '1534b76d325a8f591b52d302e7181331'),
(15, 'jaja', '900', 'acf4b89d3d503d8252c9c4ba75ddbf6d'),
(16, 'cobaprogram', '008', 'a13ee062eff9d7295bfc800a11f33704'),
(17, 'tatata', '009', 'dc5e819e186f11ef3f59e6c7d6830c35'),
(18, 'penerus', '007', '9e94b15ed312fa42232fd87a55db0d39'),
(19, 'mata', '010', 'ea20a043c08f5168d4409ff4144f32e2'),
(20, 'sekali', '101', '38b3eff8baf56627478ec76a704e9b52'),
(21, 'kooooo', '778', 'e07413354875be01a996dc560274708e'),
(22, 'kkk', '003', 'e88a49bccde359f0cabb40db83ba6080'),
(23, 'wkwkkw', '800', '7a53928fa4dd31e82c6ef826f341daec'),
(24, 'naamaa', '688', 'f79921bbae40a577928b76d2fc3edc2a'),
(25, 'cobalagi', '909', 'a4300b002bcfb71f291dac175d52df94'),
(26, 'cobaterus', '707', '500e75a036dc2d7d2fec5da1b71d36cc'),
(27, 'cobaaa', '343', '3ad7c2ebb96fcba7cda0cf54a2e802f5'),
(28, 'enamlima', '656', '26408ffa703a72e8ac0117e74ad46f33'),
(29, 'limalimaenam', '556', '11b921ef080f7736089c757404650e40'),
(30, 'zzzz', '444', '550a141f12de6341fba65b0ad0433500'),
(31, 'kakaka', '818', 'f0adc8838f4bdedde4ec2cfad0515589'),
(32, 'nama saya', '322', '5737c6ec2e0716f3d8a7a5c4e0de0d9a'),
(33, 'cobami', '232', 'be83ab3ecd0db773eb2dc1b0a17836a1'),
(34, 'jijijijiji', '078', 'b1e0a5a7b01ab8d76921b9b26ea8d1f4'),
(35, 'ayooooo', '575', 'ffeabd223de0d4eacb9a3e6e53e5448d'),
(36, 'semangat', '797', 'beb22fb694d513edcf5533cf006dfeae'),
(37, 'selesaiihariini', '7997', '74f23f9e28cbc5ddaae8582f48642a59'),
(38, 'ceklagidaftar', '099', '8638096e4ddb49a0dd6592c57d9f50ab'),
(39, 'mari coba', '474', '25ddc0f8c9d3e22e03d3076f98d83cb2'),
(40, 'apalah', '088', 'd5f038a4537e6a3f89b32ae3227b6702'),
(41, 'fix terima', '990', '4fac9ba115140ac4f1c22da82aa0bc7f'),
(42, 'coba lagi eaa', '077', 'a861405761149022ffe871c0967b2412');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terima`
--
ALTER TABLE `terima`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terima`
--
ALTER TABLE `terima`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
