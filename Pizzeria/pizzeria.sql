-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 04 déc. 2018 à 19:02
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pizzeria`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `numCli` int(3) NOT NULL,
  `nomCli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`numCli`, `nomCli`) VALUES
(1, 'GALMIER'),
(2, 'GAND'),
(3, 'MAUPAS'),
(4, 'NEYRAC'),
(5, 'MULLER');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `numCde` int(3) NOT NULL,
  `numCli` int(3) NOT NULL,
  `numLiv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`numCde`, `numCli`, `numLiv`) VALUES
(0, 0, 0),
(1, 2, 2),
(2, 3, 3),
(3, 5, 3),
(4, 2, 3),
(5, 4, 1),
(6, 3, 2),
(7, 5, 4),
(8, 3, 2),
(9, 1, 1),
(10, 3, 2),
(11, 5, 3),
(12, 5, 3),
(13, 1, 1),
(14, 1, 1),
(15, 3, 4),
(16, 3, 4),
(17, 3, 3),
(18, 3, 3),
(19, 3, 3),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 4, 3),
(24, 5, 3),
(25, 4, 2),
(26, 1, 1),
(27, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `lignescommandes`
--

CREATE TABLE `lignescommandes` (
  `refCde` int(3) NOT NULL,
  `refPizza` varchar(4) NOT NULL,
  `qte` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lignescommandes`
--

INSERT INTO `lignescommandes` (`refCde`, `refPizza`, `qte`) VALUES
(0, '', 0),
(1, 'ISA2', 1),
(1, 'PAY2', 1),
(2, 'CAL3', 1),
(3, 'NAP1', 2),
(3, 'PAY2', 1),
(4, 'CAL2', 1),
(4, 'FRU2', 1),
(5, 'FRU1', 1),
(5, 'PAY1', 2),
(5, 'PAY2', 1),
(6, 'CAL1', 1),
(6, 'ISA1', 3),
(7, 'FRU1', 2),
(7, 'NAP1', 3),
(8, 'PAY2', 2),
(9, 'ISA1', 6),
(10, 'CAL1', 4),
(10, 'CAL2', 1),
(10, 'CAL3', 3),
(10, 'FRU2', 5),
(10, 'NAP2', 2),
(11, 'CAL1', 4),
(11, 'CAL3', 3),
(11, 'ISA1', 1),
(11, 'NAP1', 5),
(12, 'CAL1', 4),
(12, 'CAL3', 2),
(12, 'FRU2', 5),
(12, 'ISA2', 2),
(13, 'CAL1', 2),
(13, 'CAL2', 5),
(13, 'CAL3', 1),
(14, 'CAL3', 4),
(15, 'CAL3', 1),
(15, 'ISA1', 3),
(16, 'FRU1', 6),
(17, 'FRU1', 7),
(18, 'ISA1', 2),
(19, 'CAL1', 1),
(19, 'CAL3', 6),
(19, 'ISA1', 4),
(20, 'CAL3', 2),
(20, 'ISA2', 5),
(21, 'CAL1', 1),
(21, 'ISA1', 1),
(22, 'CAL3', 1),
(22, 'NAP1', 2),
(23, 'CAL2', 5),
(23, 'FRU1', 1),
(24, 'CAL1', 2),
(24, 'ISA1', 3),
(24, 'PAY1', 5),
(26, 'CAL1', 3),
(26, 'ISA2', 2),
(26, 'NAP1', 2),
(27, 'CAL1', 4),
(27, 'CAL3', 1),
(27, 'PAY1', 2);

-- --------------------------------------------------------

--
-- Structure de la table `livreurs`
--

CREATE TABLE `livreurs` (
  `numLiv` int(3) NOT NULL,
  `nomLiv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreurs`
--

INSERT INTO `livreurs` (`numLiv`, `nomLiv`) VALUES
(1, 'AURADE'),
(2, 'CHAMPEX'),
(3, 'COMBIN'),
(4, 'MERVILLE');

-- --------------------------------------------------------

--
-- Structure de la table `pizzas`
--

CREATE TABLE `pizzas` (
  `numPiz` varchar(4) NOT NULL,
  `nomPiz` varchar(20) NOT NULL,
  `nbPers` int(3) NOT NULL,
  `prix` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pizzas`
--

INSERT INTO `pizzas` (`numPiz`, `nomPiz`, `nbPers`, `prix`) VALUES
('CAL1', 'CALZONE', 1, 7),
('CAL2', 'CALZONE', 2, 13),
('CAL3', 'CALZONE', 4, 23),
('FRU1', 'FRUIT DE MER', 1, 8),
('FRU2', 'FRUIT DE MER', 2, 13),
('ISA1', 'ISABELLA', 1, 7),
('ISA2', 'ISABELLA', 2, 12),
('NAP1', 'NAPOLITAINE', 1, 7),
('NAP2', 'NAPOLITAINE', 2, 13),
('PAY1', 'PAYSANNE', 1, 6),
('PAY2', 'PAYSANNE', 2, 11);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`numCli`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`numCde`);

--
-- Index pour la table `lignescommandes`
--
ALTER TABLE `lignescommandes`
  ADD PRIMARY KEY (`refCde`,`refPizza`);

--
-- Index pour la table `livreurs`
--
ALTER TABLE `livreurs`
  ADD PRIMARY KEY (`numLiv`);

--
-- Index pour la table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`numPiz`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
