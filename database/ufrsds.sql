-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 17 Mai 2022 à 16:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ufrsds`
--

-- --------------------------------------------------------

--
-- Structure de la table `admine`
--

CREATE TABLE IF NOT EXISTS `admine` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `admine`
--

INSERT INTO `admine` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(11, 'Namountougou', 'Boureima', 'naboure@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(250) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_n` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `id_tuteur` int(25) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tuteur` (`id_tuteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `date_n`, `email`, `telephone`, `id_tuteur`) VALUES
(1, 'NAMOUNTOUGOU', 'Boureima', '2001-12-31', 'naboure@gmail.com', '71731548', 70703754),
(3, 'APHRO', 'CG', '2000-01-14', 'sylva@yahoo.fr', '72727205', 71731548),
(5, 'Aperiam ut quos omni', 'Tempore at a et cul', '1981-01-30', 'pytutomad@mailinator.com', '+1 (644) 667-5848', 70703754),
(15, 'Est inventore cumque', 'Quos enim labore mol', '1973-05-21', 'jilumevu@mailinator.com', '+1 (442) 776-7407', 70789845),
(23, 'Ut velit totam aut n', 'Omnis et at eos par', '1981-09-21', 'vuqad@mailinator.com', '+1 (602) 891-4869', 71731548),
(25, 'Qui veritatis eum es', 'Eiusmod est cillum e', '1978-11-16', 'ciwetype@mailinator.com', '+1 (344) 116-6966', 70703754);

-- --------------------------------------------------------

--
-- Structure de la table `tuteur`
--

CREATE TABLE IF NOT EXISTS `tuteur` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(25) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`telephone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tuteur`
--

INSERT INTO `tuteur` (`nom`, `prenom`, `email`, `telephone`) VALUES
('Dolorem consectetur ', 'Et in cupiditate eli', 'walihe@mailinator.com', 1),
('namountougou', 'Mamadou', 'mamadou@gmail.com', 70703754),
('Dambina', 'Migandiba', 'mmedambina@gmail.com', 70789845),
('Namountougou', 'Boureima', 'na@gmail.com', 71731548);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_tuteur` FOREIGN KEY (`id_tuteur`) REFERENCES `tuteur` (`telephone`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
