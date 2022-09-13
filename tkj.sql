-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 05:59 AM
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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(3) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `alamay` varchar(100) NOT NULL,
  `nohp` int(13) NOT NULL,
  `pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `alamay`, `nohp`, `pendidikan`) VALUES
(1, 'pp', 'p', 57567575, 's2'),
(2, 'f', 'gfgfh', 43232342, ''),
(3, 'fdhd', 'gffdhftg', 432421342, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int(11) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `userType`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', 'phpgurukulofficial@gmail.com', 1, '2021-05-26 18:30:00', '2021-11-11 16:23:15'),
(3, 'subadmin', 'f925916e2754e5e03f75dd58a5733251', 'sudamin@gmail.in', 0, '2021-11-10 18:28:11', NULL),
(4, 'suadmin2', 'f925916e2754e5e03f75dd58a5733251', 'sbadmin@test.com', 0, '2021-11-10 18:28:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 'Sports', 'Related to sports news', '2021-06-05 18:30:00', '2022-09-05 10:01:48', 0),
(5, 'Entertainment', 'Entertainment related  News', '2021-06-13 18:30:00', '2021-06-13 18:30:00', 1),
(6, 'Politics', 'Politics', '2021-06-21 18:30:00', '0000-00-00 00:00:00', 1),
(7, 'Business', 'Business', '2021-06-21 18:30:00', '0000-00-00 00:00:00', 1),
(8, 'COVID-19', 'COVID-19', '2021-11-07 18:17:28', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` int(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'About News Portal', '<font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, å¾®è½¯é›…é»‘, å®‹ä½“, SimSun, STXihei, åŽæ–‡ç»†é»‘, serif\"><span style=\"font-size: 26px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></font><br>', '2021-06-29 18:30:00', '2021-11-06 18:30:00'),
(2, 'contactus', 'Contact Details', '<p><br></p><p><b>Address :&nbsp; </b>New Delhi India</p><p><b>Phone Number : </b>+91 -01234567890</p><p><b>Email -id : </b>phpgurukulofficial@gmail.com</p>', '2021-06-29 18:30:00', '2021-11-06 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `viewCounter` int(11) DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `viewCounter`, `postedBy`, `lastUpdatedBy`) VALUES
(7, 'Jasprit Bumrah ruled out of England T20I series due to injury', 5, 3, '<p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\"><span style=\"margin: 0px; padding: 0px; font-weight: 700;\">The Indian Cricket Team has received a huge blow right ahead of the commencement of the much-awaited series against England. Star speedster Jasprit Bumrah has been ruled out of the forthcoming 3-match T20I series as he suffered an injury in his left thumb.</span></p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">The 24-year-old pacer picked up a niggle during India’s first T20I match against Ireland played on June 27 at the Malahide cricket ground in Dublin. As per the reports, he is likely to be available for the ODI series against England scheduled to start from July 12.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">In the first, Bumrah exhibited a phenomenal performance with the ball. In his quota of four overs, he conceded 19 runs and picked 2 wickets at an economy rate of 4.75.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">Post his injury, he arrived at team’s optional training session on Thursday but didn’t train. Later, he was rested in the second face-off along with MS Dhoni, Shikhar Dhawan and Bhuvneshwar Kumar.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">As of now, no replacement has been announced. However, Umesh Yadav may be be given chance in the team in Bumrah’s absence.</p><p style=\"padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">The first T20I match between India and England will be played at Old Trafford, Manchester on July 3.</p>', '2021-07-07 18:30:00', '2022-09-12 05:56:11', 0, 'Jasprit-Bumrah-ruled-out-of-England-T20I-series-due-to-injury', '6d08a26c92cf30db69197a1fb7230626.jpg', 24, 'admin', 'subadmin'),
(10, 'Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal', 7, 9, '<p style=\"box-sizing: inherit; margin-top: 0px; padding: 0px; font-family: Roboto, sans-serif; font-size: 20px; line-height: normal; letter-spacing: -0.5px; color: rgb(51, 51, 51);\"><span itemprop=\"headline\" style=\"box-sizing: inherit;\">Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal</span>Tata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel Deal</p>', '2021-06-30 18:30:00', '2022-09-12 05:56:13', 0, 'Tata-Steel,-Thyssenkrupp-Finalise-Landmark-Steel-Deal', '505e59c459d38ce4e740e3c9f5c6caf7.jpg', 4, 'admin', 'subadmin'),
(11, 'UNs Jean Pierre Lacroix thanks India for contribution to peacekeeping', 6, 8, '<p>UNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeeping<br></p>', '2021-06-30 18:30:00', '2022-09-13 03:47:20', 1, 'UNs-Jean-Pierre-Lacroix-thanks-India-for-contribution-to-peacekeeping', '27095ab35ac9b89abb8f32ad3adef56a.jpg', 43, 'admin', NULL),
(12, 'Shah holds meeting with NE states leaders in Manipur', 6, 7, '<p><span style=\"color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">New Delhi: BJP president Amit Shah today held meetings with his party leaders who are in-charge of 11 Lok Sabha seats spread across seven northeast states as part of a drive to ensure that it wins the maximum number of these constituencies in the general election next year.</span><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><webviewcontentdata style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">Shah held separate meetings with Lok Sabha toli (group) of Arunachal Pradesh, Tripura, Meghalaya, Mizoram, Nagaland, Sikkim and Manipur in Manipur, the partys media head Anil Baluni said.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Baluni said that Shah was in West Bengal for two days before he arrived in Manipur. The BJP chief would reach Odisha tomorrow.</webviewcontentdata><br></p>', '2021-06-30 18:30:00', '2022-09-10 15:14:48', 0, 'Shah-holds-meeting-with-NE-states-leaders-in-Manipur', '7fdc1a630c238af0815181f9faa190f5.jpg', 52, 'admin', NULL),
(13, 'T20 World Cup 2021: Semi-final 1, England vs New Zealand â€“ Who Said What', 3, 4, '<p style=\"margin-bottom: 3rem; font-size: 20px; color: rgb(41, 41, 41); line-height: 1.6; font-family: &quot;Proxima Nova&quot;;\">New Zealand held their nerves admirably to make it a hat-trick of ICC event final entrances, trumping&nbsp;<a href=\"https://www.crictracker.com/cricket-teams/england/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(4, 93, 233);\"><strong>England</strong></a>&nbsp;in a see-sawing semi-final clash in Abu Dhabi. You would feel they are too nice to believe in revenging anything, even if it is as bitter as the fateful 2019 ODI World Cup loss, so letâ€™s put it this way: the scores are settled. And in doing so, New Zealand have made it to the finals of a tournament no one counted them as the favourites of.&nbsp;</p><p style=\"margin-bottom: 3rem; font-size: 20px; color: rgb(41, 41, 41); line-height: 1.6; font-family: &quot;Proxima Nova&quot;;\">After being inserted, a Jason Roy-less England managed 166/4 largely on the back of Dawid Malan (41 off 30), who got back his mojo at the right time, and Moeen Ali (51 off 37), who proved it for the umpteenth time what a marvellous short-format asset he is.</p>', '2021-11-10 18:50:09', '2022-09-10 15:27:58', 1, 'T20-World-Cup-2021:-Semi-final-1,-England-vs-New-Zealand-â€“-Who-Said-What', '8bc5c30be91dca9d07c1db858c60e39f.jpg', 34, 'admin', 'subadmin'),
(14, 'nnnnnnnnnnnnnnnnnnnnnnn', 6, 7, '<p>nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</p>', '2022-09-10 15:15:26', '2022-09-10 15:24:22', 0, 'nnnnnnnnnnnnnnnnnnnnnnn', 'b64810fde7027715e614449aff1d595f.png', 1, 'subadmin', NULL),
(15, 'hhhh', 5, 3, '<p class=\"detail\">nnnnnn</p>', '2022-09-10 15:22:48', '2022-09-10 15:24:20', 0, 'hhhh', 'b64810fde7027715e614449aff1d595f.png', 1, 'subadmin', NULL),
(16, 'nnnnnnnnnnn', 5, 6, '<p style=\"margin-bottom: 3rem; font-size: 20px; color: rgb(41, 41, 41); line-height: 1.6; font-family: &quot;Proxima Nova&quot;;\">New Zealand held their nerves admirably to make it a hat-trick of ICC event final entrances, trumping a see-sawing semi-final clash in Abu Dhabi. You would feel they are too nice to believe in revenging anything, even if it is as bitter as the fateful 2019 ODI World Cup loss, so letâ€™s put it this way: the scores are settled. And in doing so, New Zealand have made it to the finals of a tournament no one counted them as the favourites </p>', '2022-09-10 15:24:49', '2022-09-13 03:58:20', 1, 'nnnnnnnnnnn', 'b64810fde7027715e614449aff1d595f.png', 92, 'subadmin', 'subadmin'),
(17, 'nnnnnnnnnnnn', 8, 10, '<p style=\"margin-bottom: 3rem; font-size: 20px; color: rgb(41, 41, 41); line-height: 1.6;\">nnnnnnnnnnnnnn</p>', '2022-09-10 15:27:29', '2022-09-10 15:42:49', 0, 'nnnnnnnnnnnn', 'b64810fde7027715e614449aff1d595f.png', 1, 'subadmin', NULL),
(18, 'p', 5, 6, '<p style=\"margin-bottom: 3rem; font-size: 20px; color: rgb(41, 41, 41); line-height: 1.6;\">uuuuu</p>', '2022-09-12 07:15:53', '2022-09-12 07:16:35', 0, 'p', 'f121d135f39f03e48da5fe5e8ced5b0a.jpg', NULL, 'subadmin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 5, 'Bollywood ', 'Bollywood masala', '2021-06-21 18:30:00', '2021-11-07 17:59:57', 1),
(4, 3, 'Cricket', 'Cricket\r\n\r\n', '2021-06-29 18:30:00', '2021-11-07 17:59:57', 1),
(5, 3, 'Football', 'Football', '2021-06-29 18:30:00', '2021-11-07 17:59:57', 1),
(6, 5, 'Television', 'TeleVision', '2021-06-30 18:30:00', '2021-11-07 17:59:57', 1),
(7, 6, 'National', 'National', '2021-06-30 18:30:00', '2021-11-07 17:59:57', 1),
(8, 6, 'International', 'International', '2021-06-30 18:30:00', '2021-11-07 17:59:57', 1),
(9, 7, 'Jualan', 'India', '2021-06-30 18:30:00', '2022-09-05 09:58:16', 1),
(10, 8, 'Vaccination', 'Vaccination', '2021-11-07 18:18:25', NULL, 1);

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
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AdminUserName` (`AdminUserName`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postcatid` (`CategoryId`),
  ADD KEY `postsucatid` (`SubCategoryId`),
  ADD KEY `subadmin` (`postedBy`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`),
  ADD KEY `catid` (`CategoryId`);

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
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD CONSTRAINT `pid` FOREIGN KEY (`postId`) REFERENCES `tblposts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD CONSTRAINT `postcatid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `postsucatid` FOREIGN KEY (`SubCategoryId`) REFERENCES `tblsubcategory` (`SubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subadmin` FOREIGN KEY (`postedBy`) REFERENCES `tbladmin` (`AdminUserName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD CONSTRAINT `catid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
