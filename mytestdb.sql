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
  `devices` char(100) DEFAULT NULL,
  `chain` char(100) NOT NULL,
  `inpint` char(100) DEFAULT NULL,
  `outint` char(100) DEFAULT NULL,
  `source` char(100) DEFAULT NULL,
  `dest` char(100) DEFAULT NULL,
  `sport` char(100) DEFAULT NULL,
  `dport` char(100) DEFAULT NULL,
  `aaction` char(100) NOT NULL,
  `atable` char(100) DEFAULT NULL,
  `gere` char(100) DEFAULT NULL,
  `proto` char(100) DEFAULT NULL,
  `enabling` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliographie`
--
-- select inpint
INSERT INTO `bibliographie` (`id`, `devices`, `chain`, `inpint`, `outint`, `source`, `dest`, `sport`, `dport`, `aaction`, `atable`, `gere`, `proto`, `enabling`) VALUES
--  `id`, 'fw', 'FORWARD', 'eth0', 'eth1', '172.16.110.0/24', '172.16.110.25', '21', '80', 'ACCEPT', 'FILTER', 'kavi', 'tcp', ''
 
 
  (1, 'fw', 'FORWARD', 'eth0', 'eth1', '172.16.110.0/24', '172.16.110.25', '21', '80', 'ACCEPT', 'FILTER', 'kavi', 'tcp', ''),
  (2, 'fw', 'OUTPUT', '', 'eth1', '', '172.16.110.25', '', '80', 'ACCEPT', 'FILTER', 'AAA', 'tcp', ''),
  (3, 'fw', 'FORWARD', 'eth1', 'eth0', '172.16.110.0/24', '172.16.110.25', '21', '80', 'ACCEPT', 'FILTER', 'AAA', 'tcp', ''),
  (4, 'web', 'INPUT', 'eth0', '', '172.16.110.0/24', '', '21', '', 'ACCEPT', 'FILTER', 'AAA', 'tcp', ''),
  (5, 'attack', 'INPUT', 'eth0', '', '', '172.16.110.25', '21', '', 'ACCEPT', 'FILTER', 'AAA', 'tcp', ''),
  (6, 'fw', 'INPUT', 'eth0', '', '', '', '21', '', 'ACCEPT', 'FILTER', 'kavi', 'tcp', ''); 
  
  COMMIT;





-- INSERT INTO `bibliographie` (`id`, `salle`, `nom`, `gere`, `quantite`, `prix`) VALUES
-- (1, 'salle 110', 'ordinateur', 'AAA', 10, '15'),
-- (2, 'salle 110', 'ordinateur portable', 'AAA', 5, '300'),
-- (3, 'salle 111', 'Ã©cran tout en un', 'Youssef', 4, '500'),
-- (4, '108', 'SOURIS', 'AMINE ABDOUL-AZID', 65, '45'),
-- (5, '106', 'cÃ¢ble RJ-45', 'AAA', 10, '15'),
-- (6, '106', 'cÃ¢ble RS-232', 'ATTAL', 1, '15');
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
