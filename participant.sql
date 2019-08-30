-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 30 août 2019 à 05:39
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bsoft`
--

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `age` int(3) NOT NULL,
  `sexe` varchar(15) NOT NULL,
  `profession` varchar(40) NOT NULL,
  `tel` int(16) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id`, `nom`, `prenom`, `age`, `sexe`, `profession`, `tel`, `mail`) VALUES
(1, 'Nb', 'Gv', 34, 'Male', 'etudiant', 34343434, '0'),
(2, 'Nb', 'Gv', 34, 'Male', 'autre', 23232323, '0'),
(3, 'Nb', 'Gv', 34, 'Male', 'autre', 23232324, '0'),
(4, 'abdoul', 'teste', 23, 'Male', 'Fonctionnaire', 12121234, '0'),
(5, 'abdoul', 'teste', 23, 'Male', 'Fonctionnaire', 12121236, 'dfefrferfer@gmail.com'),
(6, 'abdoul', 'teste', 23, 'Male', 'Fonctionnaire', 12121230, 'dfefrferfer@gmail.com'),
(7, 'abdoul', 'teste', 23, 'Male', 'Fonctionnaire', 12121238, 'dfefrferfer@gmail.com'),
(8, 'Kouanda', 'Nedjolbe', 32, 'Male', 'etudiant', 44556677, 'asd@ff.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tel` (`tel`),
  ADD UNIQUE KEY `tel_2` (`tel`),
  ADD UNIQUE KEY `tel_3` (`tel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
