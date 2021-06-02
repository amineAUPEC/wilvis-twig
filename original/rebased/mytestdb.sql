-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : database
-- Généré le :  lun. 11 mai 2020 à 14:59
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mytestdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `bibliographie`
--

DROP TABLE IF EXISTS `bibliographie`;
CREATE TABLE IF NOT EXISTS `bibliographie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salle` char(100) NOT NULL,
  `nom` char(100) NOT NULL,
  `gere` char(100) DEFAULT NULL,
  `quantite` int(255) DEFAULT NULL,
  `prix` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliographie`
--

INSERT INTO `bibliographie` (`id`, `salle`, `nom`, `gere`, `quantite`, `prix`) VALUES
(1, 'salle 110', 'ordinateur', 'Wilvis', 10, '15'),
(2, 'salle 110', 'ordinateur portable', 'Wilvis', 5, '300'),
(3, 'salle 111', 'Ã©cran tout en un', 'Youssef', 4, '500'),
(4, '108', 'SOURIS', 'AMINE ABDOUL-AZID', 65, '45'),
(5, '106', 'cÃ¢ble RJ-45', 'Wilvis', 10, '15'),
(6, '106', 'cÃ¢ble RS-232', 'ATTAL', 1, '15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
