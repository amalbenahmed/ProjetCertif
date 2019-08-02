-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 juil. 2019 à 10:17
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `adm`
--

CREATE TABLE `adm` (
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adm`
--

INSERT INTO `adm` (`email`, `pass`) VALUES
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(10) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`nom`, `prenom`, `email`, `tel`, `pass`) VALUES
('bechir', 'ben slimen', 'bechirbenahmed03@gmail.com', 54031749, '96264344'),
('fghiuo', 'hjklm!', 'bechirbenahmed@gmail.com', 54031749, 'iubgkbkb');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `nomrec` varchar(50) NOT NULL,
  `typerec` varchar(50) NOT NULL,
  `comp` varchar(500) NOT NULL,
  `etape` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`nomrec`, `typerec`, `comp`, `etape`, `id`) VALUES
('sccscsc', 'gateau ', 'sdcdcsc', 'csdcsc', 15),
('orange', 'jus ', 'shjcsdkcsc', 'sdcscs', 18),
('cake', 'cake ', 'qdqsd', 'qsdqsdq', 19),
('macaron', 'macron ', 'x xcccsdcsdcs', 'jzkl:dzcdcz', 20),
('sable', 'sablÃ© ', 'qqsdqsd', 'qdqdqds', 21),
('tarte', 'tarte ', 'qsdqsd', 'qsdqsd', 22);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email` (`email`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
