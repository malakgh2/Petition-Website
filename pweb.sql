-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2022 at 04:23 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `id_petition` int(11) NOT NULL,
  `type` varchar(5) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`,`id_membre`,`id_petition`),
  KEY `id_membre` (`id_membre`),
  KEY `id_petition` (`id_petition`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id`, `id_membre`, `id_petition`, `type`) VALUES
(5, 1, 4, 'no'),
(6, 6, 4, 'no'),
(7, 5, 5, 'no'),
(8, 1, 8, 'yes'),
(10, 1, 13, 'yes'),
(11, 1, 14, 'yes'),
(17, 6, 8, 'yes'),
(20, 6, 14, 'no'),
(21, 7, 5, 'yes'),
(23, 1, 16, 'yes'),
(24, 15, 17, 'yes'),
(27, 15, 19, 'yes'),
(28, 5, 20, 'yes'),
(29, 7, 20, 'no'),
(30, 19, 17, 'yes'),
(31, 19, 19, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_petition` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `content` varchar(300) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id_petition`,`id_membre`),
  UNIQUE KEY `uk_commentaire` (`id`),
  KEY `id_petition` (`id_petition`),
  KEY `id_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_petition`, `id_membre`, `content`) VALUES
(8, 4, 6, 'بااااااااع'),
(3, 5, 5, 'ffff hamdoulaaaah'),
(9, 13, 6, 'for 13 try'),
(15, 14, 1, 'wi wi wi '),
(16, 17, 15, 'finallyyyyy'),
(17, 19, 19, 'comen mohamed');

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `mdp` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `statut` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_croatian_ci DEFAULT 'default.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_membre_mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`id`, `mail`, `mdp`, `nom`, `prenom`, `statut`, `image`) VALUES
(1, 'sarra.ayed3016@gmail.com', 'mdp', 'sarra', 'ayed', 'etudiant', 'me.jpg'),
(4, 'sarra.ayed@gmail.com', 'mdp', 'sarra', 'ayed', 'etudiant', 'p1.jpg'),
(5, 'personal@gmail.com', 'mdp', 'first', 'personal', 'perso', 'p2.jpg'),
(6, 'membreNew@gmail.com', 'mdp', 'new', 'membre', 'etudiant', 'p3.jpg'),
(7, 'test1@gmail.com', 'mdp', 'nom', 'die', 'perso', 'p4.jpg'),
(8, 'eflmr@gmail.com', 'hjk', 'sfd', 'fgegze', 'etudiant', 'default.png'),
(12, 'image3@gmail.com', 'mdp', 'new', 'image', 'etudiant', 'default.png'),
(13, 'image4@gmail.com', 'mdp', 'new', 'image', 'etudiant', 'default.png'),
(15, 'prof1@gmail.com', 'mdp', 'new', 'image', 'prof', 'rainbow-pizza-with-text-horizontal-for-fb-500x375.jpg'),
(16, 'prof2@gmail.com', 'mdp', 'prof', 'jdid', 'prof', 'prof.jpg'),
(19, 'mohamed@gmail.com', 'mdp', 'mohamed', 'ben ahmed', 'prof', 'p3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `petition`
--

DROP TABLE IF EXISTS `petition`;
CREATE TABLE IF NOT EXISTS `petition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `objet` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `depot` date NOT NULL,
  `id_membre` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_petition_titre` (`titre`),
  KEY `fk_petition_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `petition`
--

INSERT INTO `petition` (`id`, `titre`, `objet`, `depot`, `id_membre`) VALUES
(4, 'pet etud', 'jkjbhjbjh', '2022-04-28', 1),
(5, 'pet prof', 'hbvbkdjdkj', '2022-04-28', 5),
(8, 'hihi', 'vhgjgxgxjg', '2022-04-29', 1),
(13, 'hello', 'behiiii ???', '2022-04-29', 1),
(14, 'new', 'cette petition est la premiere dans la nouvelle base de donnee \r\nles prochains tests vont etre executes sur cette petition hihihihi', '2022-04-29', 1),
(16, 'pls', 'pls work', '2022-05-05', 1),
(17, 'prof', 'pls work first prof', '2022-05-05', 15),
(19, 'jh', 'jnjhj', '2022-05-05', 15),
(20, 'jdbsj', ' jnjknkjb', '2022-05-05', 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `action_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `action_ibfk_2` FOREIGN KEY (`id_petition`) REFERENCES `petition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_petition`) REFERENCES `petition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petition`
--
ALTER TABLE `petition`
  ADD CONSTRAINT `fk_petition_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
