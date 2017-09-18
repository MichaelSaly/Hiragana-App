-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 05:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiragana`
--

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` int(11) NOT NULL,
  `kana` varchar(5) CHARACTER SET big5 NOT NULL,
  `romaji` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `kana`, `romaji`) VALUES
(1, 'あ', 'a'),
(2, 'い', 'i'),
(3, 'う', 'u'),
(4, 'え', 'e'),
(5, 'お', 'o'),
(6, 'か', 'ka'),
(7, 'き', 'ki'),
(8, 'く', 'ku'),
(9, 'け', 'ke'),
(10, 'こ', 'ko'),
(11, 'さ', 'sa'),
(12, 'し', 'si'),
(13, 'す', 'su'),
(14, 'せ', 'se'),
(15, 'そ', 'so'),
(16, 'た', 'ta'),
(17, 'ち', 'ti'),
(18, 'つ', 'tu'),
(19, 'て', 'te'),
(20, 'と', 'to'),
(21, 'な', 'na'),
(22, 'に', 'ni'),
(23, 'ぬ', 'nu'),
(24, 'ね', 'ne'),
(25, 'の', 'no'),
(26, 'は', 'ha'),
(27, 'ひ', 'hi'),
(28, 'ふ', 'hu'),
(29, 'へ', 'he'),
(30, 'ほ', 'ho'),
(31, 'ま', 'ma'),
(32, 'み', 'mi'),
(33, 'む', 'mu'),
(34, 'め', 'me'),
(35, 'も', 'mo'),
(36, 'や', 'ya'),
(37, 'ゆ', 'yu'),
(38, 'よ', 'yo'),
(39, 'ら', 'ra'),
(40, 'り', 'ri'),
(41, 'る', 'ru'),
(42, 'れ', 're'),
(43, 'ろ', 'ro'),
(44, 'わ', 'wa'),
(45, 'を', 'wo'),
(46, 'ん', 'na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
