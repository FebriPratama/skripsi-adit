-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2016 at 04:28 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbcourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `gabung`
--

CREATE TABLE IF NOT EXISTS `gabung` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `id_register` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gabung`
--

INSERT INTO `gabung` (`id`, `name`, `nim`, `email`, `phone`, `id_register`) VALUES
(4, 'aditya rizky putra', '13.11.6979', 'adityarizkyputra@gmail.com', '081247882420', 6),
(5, 'yusuf bausa', '13.11.6990', 'yusufbausa@gmail.com', '0897662726', 6),
(6, 'ikrar muzaki', '13.11.7000', 'ikrarmuzaki@gmail.com', '085287668865', 13);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id_event` int(3) NOT NULL AUTO_INCREMENT,
  `event` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `sdate` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL,
  `edate` varchar(100) NOT NULL,
  `etime` varchar(100) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `kuota` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id_event`, `event`, `location`, `sdate`, `stime`, `edate`, `etime`, `poster`, `description`, `kuota`, `id_user`) VALUES
(6, 'Enterpreuner Day', 'basement 5 ', '12 oktober 2016', '08:00', '12 oktober 2016', '15:00', '1.png', 'acara tahunan yang diadakan oleh EC dan bekerjasama dengan pihak lembaga STMIK AMIKOM YOGYAKARTA', '100 orang', 1),
(13, 'pelantikan HMJTI', 'Citra 2', '13 oktober 2016', '08:00', '13 oktober 2016', '15:00', '2.jpg', 'pelantikan ktua dan wakil ketua HMJTI periode 2016-2017', '200 orang peserta', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `accountname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `accountname`, `status`, `image`) VALUES
(1, 'hmjti', 'hmjti0001', 'hmjti@gmail.com', 'hmjti', 'aktif', '1.png'),
(2, 'gana', 'gana0002', 'gana@gmail.com', 'gana', '', '2.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
