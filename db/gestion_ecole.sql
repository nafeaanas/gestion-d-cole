-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 24 mai 2022 à 00:09
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `role`, `password`, `email`) VALUES
(1, 'ahmed', 'Ahmed', 'formateur', '111', 'ahmed@gmail.com'),
(2, 'morad', 'Morad', 'administrateur', '1234', 'morad@gmail.com'),
(3, 'admin', 'admin', 'etudiant', 'admin', 'admin@gmail.com'),
(4, 'admin2', 'admin', 'etudiant', 'admin', 'admin2@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom_complet`, `genre`, `class`, `parent`, `adresse`, `date_de_naissance`, `email`) VALUES
(1, 'anas jaballah', 'male', 1, 'zzzz', 'anncnknk', '2022-05-03', 'anas@gmail.com'),
(2, 'amin', 'female', 3, 'hsldqls', 'KJSDKSDKSDHKDCKHK', '2022-05-03', 'adam@gmail.com'),
(3, 'zakaria', 'male', 3, 'Mohammed', 'hhskdhlkd jdksh', '2022-05-03', 'zakaria@gmail.com'),
(4, 'admin', 'male', 3, 'xyz', 'adress', '2022-05-21', 'admin@gmail.com'),
(5, 'etudiant', 'female', 2, 'Etudiant', 'HJLK ioyo yoi hlkK LHoillk', '9877-06-05', 'etudiant@gmail.com'),
(8, 'test', 'male', 2, 'text', 'hqslksd  qd', '2018-12-29', 'test@gmail.com'),
(11, 'test1', 'female', 1, 'test1', 'jhldjlqsjdl', '2022-01-01', 'test1@gmail.com'),
(12, 'test3', 'female', 3, 'aaaa', 'djqsl', '2020-10-29', 'kerkazou.zakaria@gmail.com'),
(19, 'Zwaks zakaria', 'male', 3, 'djsdl', 'dfsd', '2022-12-30', 'zakaria@gmail.com'),
(20, 'zwaks', 'male', 1, 'xyz', 'sdhqlkdj', '2022-04-28', 'zakariaana32@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='parent';

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`id`, `nom_complet`, `genre`, `job`, `adresse`, `phone`) VALUES
(2, 'kerkazou', 'male', 'job', 'JKHkhlkh', '0622766915'),
(3, 'anas jaballah', 'male', 'job', 'jflks', '0611111111');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='professeur';

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `nom_complet`, `genre`, `class`, `matiere`, `phone`) VALUES
(2, 'Youssef', 'male', 1, 'PHP JS', '0611111111'),
(3, 'imane', 'female', 2, 'JS PHP ...', '0622222222'),
(4, 'ezrze', 'female', 1, 'PHP JS', '0622766915'),
(5, 'test', 'male', 1, 'testing', '0600000000'),
(6, 'test1', 'female', 3, 'JS PHP ...', '0102030040'),
(7, 'test test', 'male', 2, 'testing', '0644444444');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
