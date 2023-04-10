-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : Dim 21 mars 2021 à 15:18
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `attestation`
--

-- --------------------------------------------------------

--
-- Structure de la table `motif`
--

DROP TABLE IF EXISTS `motif`;
CREATE TABLE IF NOT EXISTS `motif` (
  `idMotif` int(1) NOT NULL AUTO_INCREMENT,
  `Motif` varchar(10) NOT NULL,
  PRIMARY KEY (`idMotif`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `motif`
--

INSERT INTO `motif` (`idMotif`, `Motif`) VALUES
(1, 'travail'),
(2, 'hadicap'),
(3, 'convocatio'),
(4, 'missions'),
(5, 'voyage'),
(6, 'animaux');

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

DROP TABLE IF EXISTS `sortie`;
CREATE TABLE IF NOT EXISTS `sortie` (
  `IdUser` int(11) NOT NULL,
  `idMotif` int(1) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sortie`
--

INSERT INTO `sortie` (`IdUser`, `idMotif`, `dateTime`) VALUES
(1, 1, '2021-03-12 20:18:00'),
(4, 0, '2021-03-03 22:18:00'),
(4, 0, '2021-03-03 22:18:00'),
(4, 0, '2021-03-03 22:18:00'),
(4, 0, '2021-03-03 22:18:00'),
(4, 0, '2021-03-03 22:18:00'),
(4, 0, '2021-03-03 22:18:00'),
(4, 0, '2021-03-03 22:18:00'),
(5, 5, '2021-03-30 05:12:00'),
(5, 5, '2021-03-30 05:12:00'),
(5, 5, '2021-03-30 05:12:00'),
(7, 5, '2021-03-30 05:12:00'),
(7, 4, '2021-04-08 04:41:00'),
(5, 4, '2021-04-08 04:41:00'),
(8, 4, '2021-03-20 21:39:00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `DateNaissance` date NOT NULL,
  `LieuNaissance` varchar(50) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `CodePostal` int(5) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`IdUser`, `Nom`, `Prenom`, `DateNaissance`, `LieuNaissance`, `Adresse`, `Ville`, `CodePostal`) VALUES
(1, 'Elyahou', 'Houri', '2001-02-22', 'Paris-19E-Arrondissement', '27 Villa Curial', 'Paris', 75019),
(2, 'Frank', 'Dupont', '2018-03-05', '', '27 Villa Curial', 'Paris-19E-Arrondissement', 75019),
(3, 'Houri', 'Elyahou', '2018-05-01', 'Paris', '27 villa curial', 'Paris', 75019),
(4, 'Lalou', 'Cohen', '2018-05-01', 'Paris', '27 villa curial', 'Paris', 75019),
(5, 'Lanvin', 'ClÃ©ment', '2002-05-22', 'Marseille', '27 Villa Curial', 'Marseille', 13001),
(6, 'Lanvin', 'ClÃ©ment', '2002-05-22', 'Marseille', '27 Villa Curial', 'Marseille', 13001),
(7, 'Giroud', 'olivier', '2002-05-22', 'Marseille', '27 Villa Curial', 'Marseille', 13001),
(8, 'Houri', 'Annaelle', '2005-01-24', 'Paris', '27 villa curial', 'Paris-19E-Arrondissement', 75019);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
