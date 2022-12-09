-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 03:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sambirejo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `id` int(100) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`id`, `nama`, `foto`, `link`) VALUES
(1, 'Anak Sehat Indonesia Hebat: Pentingnya Sosialisasi Imunisasi Sejak Dini\n', 'sosialisasiimunisasi.jpg', 'https://kumparan.com/kkntupn08sambirejo/anak-sehat-indonesia-hebat-pentingnya-sosialisasi-imunisasi-sejak-dini-1z22M7EdnHQ'),
(2, 'Ragam Mata Pencaharian Warga Lokal Desa Sambirejo', '01gf3ymaxpc06jn5xz5e69j44t.jpg', 'https://kumparan.com/kkntupn08sambirejo/ragam-mata-pencaharian-warga-lokal-desa-sambirejo-1z21tIzfdUi/full'),
(3, 'Karawitan Penyongsong Wisata Desa Sambirejo, Wonosalam, Kabupaten Jombang', '01gf3wvzh4kaemkpkyj02366sg.jpg', 'https://kumparan.com/kkntupn08sambirejo/karawitan-penyongsong-wisata-desa-sambirejo-wonosalam-kabupaten-jombang-1z218Ujdhu1/1'),
(4, 'Puluhan Ribu Pelajar Jombang Pecahkan Rekor MURI Tari Remo Boletan', '01gf5sfnys8zxpwafcfxrwpdjs.jpg', 'https://kumparan.com/kkntupn08sambirejo/puluhan-ribu-pelajar-jombang-pecahkan-rekor-muri-tari-remo-boletan-1z2JlkR1Bvg/full'),
(5, 'Menjaga Budaya Kuda Lumping melalui Hobi Masa Kecil', '01gf5v9p6hkekx3m8hcawe79bt.jpg', 'https://kumparan.com/kkntupn08sambirejo/menjaga-budaya-kuda-lumping-melalui-hobi-masa-kecil-1z2KEjimGGP/1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
