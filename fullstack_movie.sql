-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 02:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemain`
--

CREATE TABLE `detail_pemain` (
  `idmovie` int(11) NOT NULL,
  `idpemain` int(11) NOT NULL,
  `peran` enum('Utama','Pembantu','Cameo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_pemain`
--

INSERT INTO `detail_pemain` (`idmovie`, `idpemain`, `peran`) VALUES
(7, 1, 'Utama'),
(7, 2, 'Pembantu'),
(7, 4, 'Cameo'),
(7, 5, 'Cameo'),
(8, 1, 'Utama'),
(8, 2, 'Pembantu'),
(9, 2, 'Pembantu');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `idgenre` int(11) NOT NULL,
  `nama` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`idgenre`, `nama`) VALUES
(1, 'Adventure'),
(2, 'Comedy'),
(3, 'Sci-Fi'),
(4, 'Shounen'),
(5, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `genre_movie`
--

CREATE TABLE `genre_movie` (
  `genre_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre_movie`
--

INSERT INTO `genre_movie` (`genre_id`, `movie_id`) VALUES
(1, 3),
(1, 4),
(1, 5),
(1, 7),
(1, 8),
(1, 9),
(2, 2),
(2, 8),
(3, 6),
(3, 8),
(4, 8),
(5, 3),
(5, 5),
(5, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `idmovie` int(11) NOT NULL,
  `judul` varchar(75) DEFAULT NULL,
  `rilis` date DEFAULT NULL,
  `skor` double DEFAULT NULL,
  `sinopsis` varchar(500) DEFAULT NULL,
  `extension` varchar(4) DEFAULT NULL,
  `serial` tinyint(4) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`idmovie`, `judul`, `rilis`, `skor`, `sinopsis`, `extension`, `serial`, `genre`) VALUES
(1, 'One Piece the Movie', '2022-09-01', 5, 'Movie', '', 0, 'Adventure'),
(2, 'Kimi no Na wa', '2013-09-04', 4.9, 'Movie by Makoto Shinkai ', 'png', 0, 'Slice of Life'),
(3, 'Naruto Shippuden', '2002-01-01', 4.85, 'Cerita di dunia ninja', 'png', 1, 'Shounen'),
(4, 'Pokemon Z', '2021-02-10', 4.9, 'Ash berpetualang di dunia Z', 'png', 1, 'Adventure'),
(5, 'Bleach', '2023-01-01', 4.8, 'Ichigo mati', 'png', 1, 'Action'),
(6, 'Ubaya the Movie', '2022-09-14', 9.8, 'Bolang yang berkuliah di Ubaya', 'png', 1, 'Comedy'),
(7, 'BEMUS the Movie', '2022-09-22', 10, 'BEM Universitas Surabaya Tour', 'png', 1, NULL),
(8, 'Coba', '2022-09-23', 5, 'Coba coba aja', 'png', 0, NULL),
(9, '123123', '2022-09-14', 3, 'aseqweasdasd', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `idpemain` int(11) NOT NULL,
  `nama` varchar(999) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`idpemain`, `nama`, `gender`) VALUES
(1, 'Pemain A', 'Pria'),
(2, 'Pemain B', 'Pria'),
(3, 'Pemain Z', 'Pria'),
(4, 'Pemain C', 'Wanita'),
(5, 'Pemain D', 'Pria'),
(6, 'Pemain E', 'Wanita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pemain`
--
ALTER TABLE `detail_pemain`
  ADD PRIMARY KEY (`idmovie`,`idpemain`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idgenre`);

--
-- Indexes for table `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD PRIMARY KEY (`genre_id`,`movie_id`),
  ADD KEY `fk_genre_movie_movie1_idx` (`movie_id`),
  ADD KEY `fk_genre_movie_genre_idx` (`genre_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idmovie`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`idpemain`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `idgenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `idmovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `idpemain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD CONSTRAINT `fk_genre_movie_genre` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`idgenre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_genre_movie_movie1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`idmovie`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
