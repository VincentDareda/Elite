-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 01:35 PM
-- Server version: 10.11.2-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Nomor HP` varchar(20) DEFAULT NULL,
  `Pesan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `Nama`, `Email`, `Nomor HP`, `Pesan`) VALUES
(1, 'Christian', 'joshuasomba171@gmail.com', '082189254204', NULL),
(2, 'Christian', 'joshuasomba171@gmail.com', '082189254204', 'Tambahkan fitur lebih'),
(3, '123', '12333', '12222', '122222'),
(4, '12222', 'joshuasomba172@gmail.com', '1222', '122222'),
(5, '12222', 'joshuasomba172@gmail.com', '1222', '122222');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(12) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga_produk` int(12) DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `gambar_produk`) VALUES
(1, 'Attire #1', 699000, 'https://i.pinimg.com/236x/35/5f/1a/355f1acc15d4747ad9219afaf3a075ac.jpg'),
(2, 'Attire #2', 699000, 'https://i.pinimg.com/236x/bd/21/48/bd214855d70a5ebf20928a41dc22c3fb.jpg'),
(3, 'Attire #3', 889000, 'https://i.pinimg.com/236x/62/5f/eb/625feb0a981a41d8ac1c4b59f02edcc1.jpg'),
(4, 'Attire #4', 1099000, 'https://i.pinimg.com/236x/fe/78/ff/fe78ffe6717048b436788d32526921fc.jpg'),
(5, 'Attire #5', 799000, 'https://i.pinimg.com/236x/2f/41/9b/2f419bf2b8c47784cfca28ee8e3adfb2.jpg'),
(6, 'Attire #6', 499000, 'https://i.pinimg.com/236x/41/31/ae/4131aefc73e59cf4d7d7b12747a8bce9.jpg'),
(7, 'Attire #7', 699000, 'https://i.pinimg.com/236x/a5/d1/e5/a5d1e5a1fa4aa36140f7e66d3ca07f46.jpg'),
(8, 'Attire #8', 599000, 'https://i.pinimg.com/236x/d2/d6/f3/d2d6f303c93920f1a6982342d8121f8b.jpg'),
(9, 'Attire #9', 999000, 'https://i.pinimg.com/236x/2d/4a/a2/2d4aa2a710ebd2519d4b31c569fba9e8.jpg'),
(10, 'Attire #10', 699000, 'https://i.pinimg.com/236x/7e/67/ba/7e67ba17d46841e560e3cd88f7fbbab0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(13, 'cessair', 'joshuasomba171@gmail.com', '$2y$10$SMzAKcSMx.dk9oDu/lDnf.Cg1oKeiZf1Ms90Vo2NziAZM5FQJpGA.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
