-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 10:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `surename` varchar(45) DEFAULT NULL,
  `biography` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `firstname`, `surename`, `biography`, `birthday`) VALUES
(1, 'Diganti dulu lagirddd', 'natalis', 'Kendari', '2017-06-29'),
(2, 'Samid', 'Hamid', 'oakad', '2017-06-24'),
(3, 'Natalis Ransi', 'natalis', 'Kendari', '2017-06-16'),
(37, 'yanti 2', 'Yanti Sarira', 'liat aja nanati', '2012-02-02'),
(38, 'yanti 2', 'Yanti Sarira', 'liat aja nanati', '2012-02-02'),
(39, 'Sipa', 'diaasdasd', 'kik', '2017-06-16'),
(40, 'La Urimi', 'imin', 'Io', '2017-06-06'),
(41, 'Bambang Pramono', 'bp', 'Nanti diliat', '2017-06-14'),
(42, 'Juan Antonio', 'JA Ransi', 'liat aja nanati', '2012-02-02'),
(43, 'Juan Antonio', 'JA Ransi', 'liat aja nanati', '2012-02-02'),
(44, 'Juan Antonio', 'JA Ransi', 'liat aja nanati', '2012-02-02'),
(45, 'Agung', 'Agung', 'lulusan tahun 2000', '2000-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` text,
  `isbn` varchar(45) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `description`, `isbn`, `author_id`, `rank`) VALUES
(1, 'Buku kerjsa ama', 'mantab', '231', 1, 34),
(2, 'sdfas', 'sdf', '231', 2, 344),
(3, 'sdfd', 'sdfsfd', 'sdf', 3, 456),
(4, '', '', '', 1, 3453),
(5, 'Buku Python', 'Buku Pytho', '9283930', 41, 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_book_author_idx` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_book_author` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
