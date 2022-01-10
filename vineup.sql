-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 jan. 2022 à 23:53
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `Question` mediumtext DEFAULT NULL,
  `Reponse` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `IdUtilisateur` int(11) NOT NULL,
  `Titre` mediumtext NOT NULL,
  `TypeQuestion` mediumtext DEFAULT NULL,
  `Reponse` mediumtext DEFAULT NULL,
  `Utilite` mediumtext DEFAULT NULL,
  `Etat` mediumtext DEFAULT NULL
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
  `MDP` mediumtext NOT NULL,
  `Mail` mediumtext NOT NULL,
  `TypeUser` varchar(45) NOT NULL,
  `Adresse` varchar(45) NOT NULL,
  `Tel` varchar(45) NOT NULL,
  `NomDomaine` mediumtext DEFAULT NULL
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
  `Commentaire` longtext DEFAULT NULL,
  `Utilisateur_IdUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vin`
--
ALTER TABLE `vin`
  MODIFY `IdVin` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
