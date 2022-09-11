-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 06:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkj`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `img_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`img_id`, `img_name`, `img_path`, `img_type`, `img_title`) VALUES
(19, 'a2.jpg', 'img/a2.jpg', 'image/jpeg', 'Captain America'),
(20, 'ironSpiderPopHeadArtwork.jpg', 'img/ironSpiderPopHeadArtwork.jpg', 'image/jpeg', 'Iron Spider-Man'),
(21, 'venom.jpg', 'img/venom.jpg', 'image/jpeg', 'Venom'),
(22, 'thanosnew.jpg', 'img/thanosnew.jpg', 'image/jpeg', 'Thanos'),
(24, 'thomyorkkk.jpg', 'img/thomyorkkk.jpg', 'image/jpeg', 'Thom Yorke'),
(26, 'thorgroot.jpg', 'img/thorgroot.jpg', 'image/jpeg', 'Thor, Groot & Rocket - Wakanda Scene'),
(27, 'drstrange.jpg', 'img/drstrange.jpg', 'image/jpeg', 'Doctor Strange'),
(28, 'bp-2.jpg', 'img/bp-2.jpg', 'image/jpeg', 'Black Panther');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kelas` enum('X TKJ 1','X TKJ 2','XI TKJ 1','XI TKJ 2','XII TKJ 1','XII TKJ 2') DEFAULT NULL,
  `id` int(11) NOT NULL,
  `NIS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `alamat`, `kelas`, `id`, `NIS`) VALUES
('Agrapratama Janu Putra Aji', '', 'X TKJ 1', 2, 16675),
('Angga Aji Pamungkas', '', 'X TKJ 1', 3, 16676),
('Arul Reza Alfahrezi', '', 'X TKJ 1', 4, 16677),
('Burhan Shalahuddin', '', 'X TKJ 1', 5, 16678),
('Daviq Kurniawan', '', 'X TKJ 1', 6, 16679),
('Dea Putri Arlistia', '', 'X TKJ 1', 7, 16680),
('Endri Irawan', '', 'X TKJ 1', 8, 16681),
('Farid Hidayat', '', 'X TKJ 1', 9, 16682),
('Fawwaz Bagdi Prastowo Akbar', '', 'X TKJ 1', 10, 16683),
('Fendy Bagus Purwanto', '', 'X TKJ 1', 11, 16684),
('Fitri Astuti', '', 'X TKJ 1', 12, 16685),
('Haidar Rosyid Alfaqih', '', 'X TKJ 1', 13, 16686),
('Hanan Nur Ikhsan', '', 'X TKJ 1', 14, 16687),
('Hanifa Nur Aini', '', 'X TKJ 1', 15, 16688),
('Helma Dimas Prasetyo', '', 'X TKJ 1', 16, 16689),
('Inka Rahmawati', '', 'X TKJ 1', 17, 16690),
('Khaila Dewi Fatika Sari', '', 'X TKJ 1', 18, 16691),
('Lindu Aji Putra Pratama', '', 'X TKJ 1', 19, 16692),
('Lindu Arif Puji Nugroho', '', 'X TKJ 1', 20, 16693),
('Muhamad Hasyim Abdul Majid', '', 'X TKJ 1', 21, 16694),
('Muhammad Bintang Wicaksono', '', 'X TKJ 1', 22, 16695),
('Muhammad Khoirudin Ashari', '', 'X TKJ 1', 23, 16696),
('Muhammad Zaki Pahlevi', '', 'X TKJ 1', 24, 16697),
('Raditya Eka Evandri', '', 'X TKJ 1', 25, 16698),
('Raditya Panji Prayogi', '', 'X TKJ 1', 26, 16699),
('Raditya Putra Pratama', '', 'X TKJ 1', 27, 16700),
('Rasya Maulana Hafidts', '', 'X TKJ 1', 28, 16701),
('Rayhan Aditya Pradhana', '', 'X TKJ 1', 29, 16702),
('Rayhan Damarjati Wijanarko', '', 'X TKJ 1', 30, 16703),
('Rehan Herdian Pamungkas', '', 'X TKJ 1', 31, 16704),
('Retno Muninggar', '', 'X TKJ 1', 32, 16705),
('Ribby Saskia Mecca', '', 'X TKJ 1', 33, 16706),
('Seto Sujatmiko', '', 'X TKJ 1', 34, 16707),
('Sunu Wicaksono', '', 'X TKJ 1', 35, 16708),
('Yoppy Desyanto Pujakusuma', '', 'X TKJ 1', 36, 16709),
('Abqori Ikhwanul Wakhidan', '', 'X TKJ 2', 37, 16710),
('Ade Dani Oktavian', '', 'X TKJ 2', 38, 16711),
('Adzkiya', '', 'X TKJ 2', 39, 16712),
('Ais Khoirul Rifan', '', 'X TKJ 2', 40, 16713),
('Akbar Aviantoro', '', 'X TKJ 2', 41, 16714),
('Amanda Setyawati', '', 'X TKJ 2', 42, 16715),
('Ardhan Anandhika', '', 'X TKJ 2', 43, 16716),
('Arina Maula Manasikana', '', 'X TKJ 2', 44, 16717),
('Arya Alfah Reza', '', 'X TKJ 2', 45, 16718),
('Daffa Rifky Haidar Ghazwan', '', 'X TKJ 2', 46, 16719),
('Desta Dwiangga', '', 'X TKJ 2', 47, 16720),
('Fatihah Al Aisyiyah', '', 'X TKJ 2', 48, 16721),
('Ibnu Fikri Ardiansyah', '', 'X TKJ 2', 49, 16722),
('Ilham Kurnia Putra Prapanca', '', 'X TKJ 2', 50, 16723),
('Irfan Maulana', '', 'X TKJ 2', 51, 16724),
('Jehan Arsyad Setyawan', '', 'X TKJ 2', 52, 16725),
('Meysa Tunggal Kharista', '', 'X TKJ 2', 53, 16726),
('Miftah Abit Rakhalana', '', 'X TKJ 2', 54, 16727),
('Muhammad Akmal Rasyid', '', 'X TKJ 2', 55, 16728),
('Muhammad Faisal', '', 'X TKJ 2', 56, 16729),
('Muhammad Hafidz Saputra', '', 'X TKJ 2', 57, 16730),
('Nabila Nur Riyanta', '', 'X TKJ 2', 58, 16731),
('Nur Dwi Cahyo', '', 'X TKJ 2', 59, 16732),
('Rahmat Diky Alfianzah', '', 'X TKJ 2', 60, 16733),
('Rama Putra Linggadiyanto', '', 'X TKJ 2', 61, 16734),
('Restu Agus Jatmiko', '', 'X TKJ 2', 62, 16735),
('Rizki Wahyu Nurrahman', '', 'X TKJ 2', 63, 16736),
('Sandi Bayu Darmawan', '', 'X TKJ 2', 64, 16737),
('Sinar Ing Jagad', '', 'X TKJ 2', 65, 16738),
('Tegar Fajar Ramadhan', '', 'X TKJ 2', 66, 16739),
('Teguh Firmansyah', '', 'X TKJ 2', 67, 16740),
('Thomas Yuda Setiawan', '', 'X TKJ 2', 68, 16741),
('Tomi Tabah Swasono', '', 'X TKJ 2', 69, 16742),
('Wildan Alghifari', '', 'X TKJ 2', 70, 16743),
('Yulia Ika Pratiwi', '', 'X TKJ 2', 71, 16744),
('Zolla Andra Pangestu', '', 'X TKJ 2', 72, 16745),
('Abyan Bergas Irmawan', '', 'XI TKJ 1', 73, 16100),
('Ahmad Fauzan', '', 'XI TKJ 1', 74, 16101),
('Amin Novi Tri Kurniati', '', 'XI TKJ 1', 75, 16102),
('Angel Setya Kasih', '', 'XI TKJ 1', 76, 16103),
('Aulana Dwi Andrian', '', 'XI TKJ 1', 77, 16104),
('Devon Alviantoro', '', 'XI TKJ 1', 78, 16105),
('Faiz Ubaidillah', '', 'XI TKJ 1', 79, 16106),
('Faiza Nisrina Abiyyah', '', 'XI TKJ 1', 80, 16107),
('Felix Giovanni', '', 'XI TKJ 1', 81, 16108),
('Ferdinan Lestiawan', '', 'XI TKJ 1', 82, 16109),
('Gaza Ghozali Hermawan', '', 'XI TKJ 1', 83, 16110),
('Hafshah Nurul Azizah', '', 'XI TKJ 1', 84, 16111),
('Hasta Maulana', '', 'XI TKJ 1', 85, 16112),
('Ilham Wibi Sahrofi', '', 'XI TKJ 1', 86, 16113),
('Imam Wahid Ardi Putro', '', 'XI TKJ 1', 87, 16114),
('Irvan Annassruallah', '', 'XI TKJ 1', 88, 16115),
('Kori Wulan Rahmadani', '', 'XI TKJ 1', 89, 16116),
('Luna Sabrina Meisya Asnanta', '', 'XI TKJ 1', 90, 16117),
('Meylan Extonika Sari', '', 'XI TKJ 1', 91, 16118),
('Mirza Fahmi Fadhilah', '', 'XI TKJ 1', 92, 16119),
('Muhammad Gufron Fauzi', '', 'XI TKJ 1', 93, 16120),
('Muhammad Nur Alfianto', '', 'XI TKJ 1', 94, 16121),
('Muhammad Nur Luthfi', '', 'XI TKJ 1', 95, 16122),
('Muhammad Wildan Al Fathoni', '', 'XI TKJ 1', 96, 16123),
('Mustaqim Kumara Prabhatakala', '', 'XI TKJ 1', 97, 16124),
('Nugroho Wisnu Murti', '', 'XI TKJ 1', 98, 16125),
('Pradipa Arka Prasetya', '', 'XI TKJ 1', 99, 16126),
('Raden Roro Widia Marcha Sasikirana', '', 'XI TKJ 1', 100, 16127),
('Rafa Adib Prabowo', '', 'XI TKJ 1', 101, 16128),
('Reihan Ardiansyah', '', 'XI TKJ 1', 102, 16129),
('Restu Aji Pamukti', '', 'XI TKJ 1', 103, 16130),
('Rifan Zulfantoro', '', 'XI TKJ 1', 104, 16131),
('Rizal Ainurohman', '', 'XI TKJ 1', 105, 16132),
('Yahya Nur Wakhid', '', 'XI TKJ 1', 106, 16133),
('Zulfidar Ibnu Nardi', '', 'XI TKJ 1', 107, 16134),
('Agnazaki Alefta Anandian Arafi', '', 'XI TKJ 2', 108, 16135),
('Aisyah Nur Maya Silviyani', '', 'XI TKJ 2', 109, 16136),
('Alfian Rahmansyah', '', 'XI TKJ 2', 110, 16137),
('Ardiansyah Restu Noor Maulana', '', 'XI TKJ 2', 111, 16138),
('Daffa Wahyu Prayudha', '', 'XI TKJ 2', 112, 16139),
('Dea Muslikhasari', '', 'XI TKJ 2', 113, 16140),
('Deni Maryanto', '', 'XI TKJ 2', 114, 16141),
('Dido Angga Saputra', '', 'XI TKJ 2', 115, 16143),
('Dony Setyawan', '', 'XI TKJ 2', 116, 16144),
('Eva Dewi Agustin', '', 'XI TKJ 2', 117, 16601),
('Fajar Nail Fauzan', '', 'XI TKJ 2', 118, 16145),
('Faril Syaiful Nur Dzaky', '', 'XI TKJ 2', 119, 16146),
('Gilang Yudha Prajatma', '', 'XI TKJ 2', 120, 16147),
('Habib Cahya Buwana', '', 'XI TKJ 2', 121, 16148),
('Kanaka Najib Imam Bukhary', '', 'XI TKJ 2', 122, 16149),
('Maulana Arif Hidayat', '', 'XI TKJ 2', 123, 16150),
('Maulina Mega Putri Lembayung', '', 'XI TKJ 2', 124, 16151),
('Melanie Prima Rusty', '', 'XI TKJ 2', 125, 16152),
('Muhammad Bagus Khoirudin', '', 'XI TKJ 2', 126, 16153),
('Muhammad Daffiq Raffiqan', '', 'XI TKJ 2', 127, 16154),
('Muhammad Zalfa Nur Alamsyah', '', 'XI TKJ 2', 128, 16155),
('Muzakki Rizki Ardana', '', 'XI TKJ 2', 129, 16156),
('Novia Safitri', '', 'XI TKJ 2', 130, 16157),
('Nursalina Khusnul Urba', '', 'XI TKJ 2', 131, 16158),
('Patrick Dhimas Esa Yudhistira', '', 'XI TKJ 2', 132, 16159),
('Paulus Febrian Gagah Wicaksono', '', 'XI TKJ 2', 133, 16160),
('Putra Adiyan Naufal Adani', '', 'XI TKJ 2', 134, 16161),
('Raditya Bayu Wirawan', '', 'XI TKJ 2', 135, 16162),
('Raditya Hevi Ferdiansyah', '', 'XI TKJ 2', 136, 16163),
('Rafa Alfikri', '', 'XI TKJ 2', 137, 16164),
('Ramadhan Wahyu Pratama', '', 'XI TKJ 2', 138, 16165),
('Rizky Fathurrahman Syahdira', '', 'XI TKJ 2', 139, 16166),
('Sifa Suryani', '', 'XI TKJ 2', 140, 16167),
('Silvester Ananda Allun Aditya', '', 'XI TKJ 2', 141, 16168);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
