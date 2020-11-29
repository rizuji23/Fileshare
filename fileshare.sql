-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2020 at 11:30 PM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3
=======
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2020 at 09:02 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10
>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fileshare`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` int NOT NULL,
  `folder` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `folder`, `tanggal`) VALUES
(2, 'Anime', '22-Nov-2020'),
(3, 'Dokumen', '22-Nov-2020'),
(4, 'Film', '22-Nov-2020'),
(5, 'Foto', '22-Nov-2020'),
(6, 'Games', '22-Nov-2020'),
(7, 'Music', '22-Nov-2020'),
(8, 'Music Video', '22-Nov-2020'),
(9, 'Project', '22-Nov-2020'),
(10, 'Haluan', '29-Nov-2020'),
(11, 'UJI', '29-Nov-2020'),
(12, 'dadada', '29-Nov-2020'),
(13, 'dadadad', '29-Nov-2020'),
(14, 'ddds', '29-Nov-2020');
=======
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `folder` text NOT NULL,
  `file` text NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `folder`, `file`, `user`) VALUES
(2, 'Coba', 'RKdvclwV2k6_KUk7.mp4', ''),
(3, 'Games', 'PARAM.SFO', 'rizki'),
(4, 'Dokumen', 'laporan us praktek.docx', 'rizki');
>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
<<<<<<< HEAD
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
=======
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'rizki', 'fauzi'),
<<<<<<< HEAD
(3, 'dawdaw', '8bf5b92c1d9d737935f172144d21e4f5'),
(4, 'uji', '35554673ebc827b53e33e6184bbca83f'),
(6, 'rizki', '0bd9897bf12294ce35fdc0e21065c8a7');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int NOT NULL,
  `folder` text NOT NULL,
  `file` text NOT NULL,
  `user` varchar(50) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `folder`, `file`, `user`, `activity`, `tanggal`) VALUES
(9, 'Music Video', 'SI LEMAH - RAN ft. Hindia (cover) - YouTube.mkv', 'uji', '', '21-Nov-2020'),
(10, 'Foto', 'cursepride-20201120-0001.jpg', 'uji', '', '21-Nov-2020'),
(11, 'Foto', '118045279_601143510589896_1243208718911771349_n.jpg', 'uji', '', '29-Nov-2020'),
(12, 'Music Video', 'ヨルシカ - ただ君に晴れ (MUSIC VIDEO) - YouTube.mkv', 'uji', '', '29-Nov-2020'),
(13, 'Dokumen', '方大同 love song cover - YouTube.mkv', 'uji', '', '29-Nov-2020'),
(14, 'Music Video', 'V - YouTube_1.mkv', 'uji', '', '29-Nov-2020'),
(15, 'Music Video', 'ヨルシカ - ノーチラス (OFFICIAL VIDEO) - YouTube.mkv', 'uji', '', '29-Nov-2020'),
(16, 'Music Video', '方大同 love song cover - YouTube.mkv', 'uji', '', '29-Nov-2020'),
(17, 'Music Video', 'ヨルシカ - ただ君に晴れ (MUSIC VIDEO) - YouTube.mkv', 'uji', '', '29-Nov-2020'),
(18, 'Music Video', 'SI LEMAH - RAN ft. Hindia (cover) - YouTube.mkv', 'uji', '', '29-Nov-2020'),
(19, 'Music Video', '方大同 love song cover - YouTube.mkv', 'uji', '', '29-Nov-2020'),
(20, 'Foto', 'Kyshia.zip', 'uji', 'Delete File', ''),
(21, 'Dokumen', '方大同 love song cover - YouTube.mkv', 'uji', 'Delete File', '29-Nov-2020'),
(22, 'Haluan', 'Snaptik_6900476962104478978_k-y-s-h-i-a.mp4', 'uji', 'Upload', '29-Nov-2020'),
(23, 'Haluan', 'Snaptik_6900485317086825730_k-y-s-h-i-a.mp4', 'uji', 'Upload', '29-Nov-2020'),
(24, 'Haluan', 'Snaptik_6900495559782632706_k-y-s-h-i-a.mp4', 'uji', 'Upload', '29-Nov-2020'),
(25, 'Haluan', 'Snaptik_6900498310608588033_k-y-s-h-i-a.mp4', 'uji', 'Upload', '29-Nov-2020'),
(26, 'Anime', '02_Project Single.psd', 'uji', 'Delete File', '29-Nov-2020');

=======
(2, 'uji', '35554673ebc827b53e33e6184bbca83f'),
(3, 'dawdaw', '8bf5b92c1d9d737935f172144d21e4f5'),
(4, 'uji23', '35554673ebc827b53e33e6184bbca83f'),
(5, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'rizki', '0bd9897bf12294ce35fdc0e21065c8a7');

>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95
--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indexes for table `folder`
--
ALTER TABLE `folder`
=======
-- Indexes for table `file`
--
ALTER TABLE `file`
>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
=======
>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95
-- AUTO_INCREMENT for dumped tables
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
=======
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
<<<<<<< HEAD
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
