# Data_Base-php

Les requetes sql de creation et d'insertion de data dans la Base 


-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 31 mai 2022 à 15:18
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `message_id`
--

-- --------------------------------------------------------

--
-- Structure de la table `container`
--

CREATE TABLE `container` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `priority` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `container`
--

INSERT INTO `container` (`id`, `name`, `body`, `priority`, `type`) VALUES
(5, 'KOKUTSE', 'hellon koku !', 2, 0),
(6, 'EZOKOVITCH josias', 'hello Ezok !', 3, 0),
(8, 'KANGNI Abdul', 'Hello ', 1, 0),
(9, 'STIFLEUR ', 'Comment tu vas?', 2, 0),
(10, 'Manager Justin', 'hello Justin!', 2, 0),
(11, 'ALAHONOU hubert', 'hello Hubert!', 2, 0),
(12, 'FADIL', 'Hello monsieur Fadil!', 2, 0),
(13, 'Joe Okanfor', 'hi Joe!', 2, 0),
(14, 'SETH', 'Tu as beacon d\'appétit Seth', 2, 0),
(15, 'EL Tawfik', 'hello le Champions du MMA', 3, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `container`
--
ALTER TABLE `container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
