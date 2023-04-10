-- phpMyAdmin SQL Dump
-- version 4.9.9
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 04 avr. 2022 à 14:04
-- Version du serveur : 5.7.24
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `categoriecompetence`
--

CREATE TABLE `categoriecompetence` (
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categoriecompetence`
--

INSERT INTO `categoriecompetence` (`nom`) VALUES
('langage'),
('systeme');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `nomCompetence` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`nomCompetence`, `nom`) VALUES
('php', 'langage'),
('windows', 'systeme');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `titre` varchar(300) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nom` varchar(70) DEFAULT NULL,
  `prenom` varchar(70) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `rue` varchar(150) DEFAULT NULL,
  `numRue` varchar(10) DEFAULT NULL,
  `codePostal` varchar(5) DEFAULT NULL,
  `ville` varchar(70) DEFAULT NULL,
  `permis` varchar(50) DEFAULT NULL,
  `datePermis` date DEFAULT NULL,
  `centreInteret` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`email`, `telephone`, `titre`, `nom`, `prenom`, `image`, `rue`, `numRue`, `codePostal`, `ville`, `permis`, `datePermis`, `centreInteret`) VALUES
('legrispelerin@ebuyclub.com', '45', 'webmaster dÃ©butant mais motivÃ©', 'bismuth', 'eliyoel', 'scrat.jpg', 'eliyoel bismuth', '57', '94270', 'le kremlin-bicÃªtre', '', '2022-03-29', '			'),
('legrispelerin@gmail.com', '45', 'webmaster dÃ©butant mais motivÃ©', 'bismuth', 'eliyoel', 'scrat.jpg', 'eliyoel bismuth', '57', '94270', 'le kremlin-bicÃªtre', 'poids lourd japonais', '2022-04-30', '	mlkmlkklm		'),
('legrispelerin@gmail.comm', '45', 'webmaster dÃ©butant mais motivÃ©', 'bismuth', 'eliyoel', 'scrat.jpg', 'eliyoel bismuth', '57', '94270', 'le kremlin-bicÃªtre', 'poids lourd japonais', '2022-04-30', '	mlkmlkklm		'),
('toto@toto.com', '45', 'webmaster débutant mais motivé', 'toto', 'toto', 'scrat.jpg', 'rue de la poupÃ©e qui pleure', '57', '75014', 'paris', 'poids lourd japonais', '2022-03-22', '	truc		');

-- --------------------------------------------------------

--
-- Structure de la table `cvcompetence`
--

CREATE TABLE `cvcompetence` (
  `email` varchar(100) NOT NULL,
  `nomCompetence` varchar(100) NOT NULL,
  `niveau` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cvlangue`
--

CREATE TABLE `cvlangue` (
  `email` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `niveau` varchar(20) DEFAULT NULL,
  `competence` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE `diplome` (
  `nom` varchar(50) NOT NULL,
  `niveau` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `diplome`
--

INSERT INTO `diplome` (`nom`, `niveau`) VALUES
('bts', 'bac + 2'),
('licence générale', 'bac + 3');

-- --------------------------------------------------------

--
-- Structure de la table `etude`
--

CREATE TABLE `etude` (
  `id` int(11) NOT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `lieu` varchar(150) DEFAULT NULL,
  `typeDiplome` varchar(100) NOT NULL,
  `libelleDiplome` varchar(100) DEFAULT NULL,
  `obtenu` tinyint(1) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) DEFAULT NULL,
  `lieu` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `codePostal` varchar(5) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id`, `nom`, `lieu`, `description`, `dateDebut`, `dateFin`, `codePostal`, `ville`, `email`) VALUES
(1, 'wbemarketer', 'dsfdsfsdfdsf', 'qsderfeqs			', '2022-04-20', '2022-04-26', 'mklkk', 'kjmlkjlkj', 'legrispelerin@gmail.comm'),
(2, 'wbemarketer', 'dsfdsfsdfdsf', 'qsderfeqs			', '2022-04-20', '2022-04-26', 'mklkk', 'kjmlkjlkj', 'legrispelerin@gmail.comm');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`nom`) VALUES
('anglais'),
('espagnol');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categoriecompetence`
--
ALTER TABLE `categoriecompetence`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`nomCompetence`),
  ADD KEY `nom` (`nom`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `cvcompetence`
--
ALTER TABLE `cvcompetence`
  ADD PRIMARY KEY (`email`,`nomCompetence`),
  ADD KEY `nomCompetence` (`nomCompetence`);

--
-- Index pour la table `cvlangue`
--
ALTER TABLE `cvlangue`
  ADD PRIMARY KEY (`email`,`nom`),
  ADD KEY `nom` (`nom`);

--
-- Index pour la table `diplome`
--
ALTER TABLE `diplome`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `etude`
--
ALTER TABLE `etude`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `fk_etude_diplome` (`typeDiplome`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etude`
--
ALTER TABLE `etude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `competence`
--
ALTER TABLE `competence`
  ADD CONSTRAINT `competence_ibfk_1` FOREIGN KEY (`nom`) REFERENCES `categoriecompetence` (`nom`);

--
-- Contraintes pour la table `cvcompetence`
--
ALTER TABLE `cvcompetence`
  ADD CONSTRAINT `cvcompetence_ibfk_1` FOREIGN KEY (`email`) REFERENCES `cv` (`email`),
  ADD CONSTRAINT `cvcompetence_ibfk_2` FOREIGN KEY (`nomCompetence`) REFERENCES `competence` (`nomCompetence`);

--
-- Contraintes pour la table `cvlangue`
--
ALTER TABLE `cvlangue`
  ADD CONSTRAINT `cvlangue_ibfk_1` FOREIGN KEY (`email`) REFERENCES `cv` (`email`),
  ADD CONSTRAINT `cvlangue_ibfk_2` FOREIGN KEY (`nom`) REFERENCES `langue` (`nom`);

--
-- Contraintes pour la table `etude`
--
ALTER TABLE `etude`
  ADD CONSTRAINT `etude_ibfk_1` FOREIGN KEY (`email`) REFERENCES `cv` (`email`),
  ADD CONSTRAINT `fk_etude_diplome` FOREIGN KEY (`typeDiplome`) REFERENCES `diplome` (`nom`);

--
-- Contraintes pour la table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`email`) REFERENCES `cv` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
