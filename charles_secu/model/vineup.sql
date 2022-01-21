-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 21 Janvier 2022 à 13:48
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vineup`
--

-- --------------------------------------------------------

--
-- Structure de la table `Capteur`
--

CREATE TABLE `Capteur` (
  `IdVin` varchar(50) NOT NULL,
  `temps` varchar(50) NOT NULL,
  `Gaz` varchar(50) NOT NULL,
  `C02` varchar(50) NOT NULL,
  `Humidite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `Question` mediumtext,
  `Reponse` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `IdUtilisateur` int(11) NOT NULL,
  `Titre` mediumtext NOT NULL,
  `TypeQuestion` mediumtext,
  `Reponse` mediumtext,
  `Utilite` mediumtext,
  `Etat` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `forum_utilisateur`
--

CREATE TABLE `forum_utilisateur` (
  `Forum_IdUtilisateur` int(11) NOT NULL,
  `Utilisateur_IdUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IdUtilisateur` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Naissance` date NOT NULL,
  `MDP` mediumtext NOT NULL,
  `Mail` mediumtext NOT NULL,
  `TypeUser` varchar(45) NOT NULL,
  `Adresse` varchar(45) NOT NULL,
  `Tel` varchar(45) NOT NULL,
  `NomDomaine` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vin`
--

CREATE TABLE `vin` (
  `IdVin` int(11) NOT NULL,
  `Vignoble` varchar(45) DEFAULT NULL,
  `TypeVin` varchar(45) DEFAULT NULL,
  `Note` varchar(45) DEFAULT NULL,
  `Commentaire` longtext,
  `Utilisateur_IdUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Capteur`
--
ALTER TABLE `Capteur`
  ADD PRIMARY KEY (`IdVin`);

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`IdUtilisateur`);

--
-- Index pour la table `forum_utilisateur`
--
ALTER TABLE `forum_utilisateur`
  ADD PRIMARY KEY (`Forum_IdUtilisateur`,`Utilisateur_IdUtilisateur`),
  ADD KEY `fk_Forum_has_Utilisateur_Utilisateur1_idx` (`Utilisateur_IdUtilisateur`),
  ADD KEY `fk_Forum_has_Utilisateur_Forum1_idx` (`Forum_IdUtilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IdUtilisateur`),
  ADD UNIQUE KEY `idUtilisateur_UNIQUE` (`IdUtilisateur`);

--
-- Index pour la table `vin`
--
ALTER TABLE `vin`
  ADD PRIMARY KEY (`IdVin`),
  ADD KEY `fk_Vin_Utilisateur1_idx` (`Utilisateur_IdUtilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `vin`
--
ALTER TABLE `vin`
  MODIFY `IdVin` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `forum_utilisateur`
--
ALTER TABLE `forum_utilisateur`
  ADD CONSTRAINT `fk_Forum_has_Utilisateur_Forum1` FOREIGN KEY (`Forum_IdUtilisateur`) REFERENCES `forum` (`IdUtilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Forum_has_Utilisateur_Utilisateur1` FOREIGN KEY (`Utilisateur_IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vin`
--
ALTER TABLE `vin`
  ADD CONSTRAINT `fk_Vin_Utilisateur1` FOREIGN KEY (`Utilisateur_IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
