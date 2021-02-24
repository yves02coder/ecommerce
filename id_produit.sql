-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 28 jan. 2021 à 14:26
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `id_produit`
--

DROP TABLE IF EXISTS `id_produit`;
CREATE TABLE IF NOT EXISTS `id_produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) NOT NULL,
  `description_produit` text NOT NULL,
  `image_produit` varchar(255) NOT NULL,
  `prix_produit` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `id_produit`
--

INSERT INTO `id_produit` (`id_produit`, `nom_produit`, `description_produit`, `image_produit`, `prix_produit`) VALUES
(10, 'jordan', 'basket iconique\r\nPas besoin de superflu. Un style épuré, simple et athlétique, voilà ce dont tu as besoin. Inspirée d\'une paire introduite en 1969, cette chaussure', 'pho/9.jpg', '161'),
(11, 'NIKE', 'chaussure de basket ball\r\nPas besoin de superflu. Un style épuré, simple et athlétique, voilà ce dont tu as besoin. Inspirée d\'une paire introduite en 1969, cette chaussure', 'pho/11.jpg', '146'),
(13, 'jordan', 'basket iconique\r\nPas besoin de superflu. Un style épuré, simple et athlétique, voilà ce dont tu as besoin. Inspirée d\'une paire introduite en 1969, cette chaussure', 'pho/12.jpg', '201'),
(15, 'NIKE', 'chaussure Lebron james\r\nPas besoin de superflu. Un style épuré, simple et athlétique, voilà ce dont tu as besoin. Inspirée d\'une paire introduite en 1969, cette chaussure', 'pho/14.jpg', '191'),
(20, 'ADIDAS PREDATOR', 'Pas besoin de superflu. Un style épuré, simple et athlétique, voilà ce dont tu as besoin. Inspirée d\'une paire introduite en 1969, cette chaussure', 'pho/15.jpg', '150'),
(21, 'ADIDAS ADVENTOR', 'Pas besoin de superflu. Un style épuré, simple et athlétique, voilà ce dont tu as besoin. Inspirée d\'une paire introduite en 1969, cette chaussure', 'pho/18.jpg', '120'),
(22, 'Lebron james', 'Lebron soldier 10\r\nPas besoin de superflu. Un style épuré, simple et athlétique, voilà ce dont tu as besoin. Inspirée d\'une paire introduite en 1969, cette chaussure', 'pho/13.jpg', '161');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
