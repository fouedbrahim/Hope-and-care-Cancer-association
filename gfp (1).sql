-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 08 Avril 2014 à 16:14
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gfp`
--

-- --------------------------------------------------------

--
-- Structure de la table `contactes`
--

CREATE TABLE IF NOT EXISTS `contactes` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sujet` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contactes`
--

INSERT INTO `contactes` (`nom`, `prenom`, `email`, `sujet`, `message`) VALUES
('', '', '', '', ''),
('Azouzi', 'Yahya', 'azouziya7ya@hotmail.fr', 'essai', 'messa');

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

CREATE TABLE IF NOT EXISTS `don` (
  `id_donateur` int(5) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(10) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nature_email` varchar(15) NOT NULL,
  `date_naissance` varchar(10) NOT NULL,
  `num_tel` varchar(10) NOT NULL,
  `adresse` text NOT NULL,
  `pays` varchar(15) NOT NULL,
  `deja_donateur` varchar(5) NOT NULL,
  `r_fiscale` varchar(15) NOT NULL,
  `montant_direct` int(5) NOT NULL,
  `mode_paiment_direct` varchar(15) NOT NULL,
  `montant_reg` int(5) NOT NULL,
  `mode_paiment_reg` varchar(15) NOT NULL,
  `jour_prelevement` varchar(20) NOT NULL,
  `periodicite` varchar(15) NOT NULL,
  PRIMARY KEY (`id_donateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `don`
--

INSERT INTO `don` (`id_donateur`, `civilite`, `nom`, `prenom`, `email`, `nature_email`, `date_naissance`, `num_tel`, `adresse`, `pays`, `deja_donateur`, `r_fiscale`, `montant_direct`, `mode_paiment_direct`, `montant_reg`, `mode_paiment_reg`, `jour_prelevement`, `periodicite`) VALUES
(19, 'Madame', 'amira ', 'gg', 'fsqf', 'Professionnel', 'ddddd', '7777777777', 'hjjjjjjkjjj', 'TUNISIE', 'oui', 'courrier', 100, 'cheque', 10, 'prÃ©lÃ¨vement a', 'Le 20 du mois', 'Mensuelle'),
(20, 'Mademoisel', 'fffff', 'gfgf', 'fgfgfg', 'Professionnel', '', 'fgfgf', 'fgfg', 'TUNISIE', 'oui', 'email', 50, 'carte 3 fois', 8, 'prÃ©lÃ¨vement a', '', 'Mensuelle'),
(23, 'Madame', 'dfgdf', 'dfgdfg', 'fgdfgdfg@ddd.fff', 'Personnel', 'khkkhkkh', '55555', 'fdfdfd', 'TONGA', 'oui', 'non', 150, 'carte 3 fois', 10, 'carte', 'Le 20 du mois', 'Trimestrielle');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id_evenement` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id_evenement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `nom`, `type`, `lieu`, `date`, `description`) VALUES
(4, 'test3', 'test2', 'test2fqsfqfqfq', '2014-03-02', 'test 2 test 2'),
(5, 'test4', 'test4', 'test4', '2014-03-07', 'test4 test 888'),
(12, 'test8', 'test8', 'test88888888', '2014-07-08', 'teest');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `daten` varchar(10) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `photo` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `prenom`, `sexe`, `daten`, `adresse`, `tel`, `email`, `pass`, `photo`, `type`) VALUES
('Azouzi', 'Yahya', 'homme', '08/06/1991', 'tunis', '21984501', 'azouziya7ya@hotmail.fr', '123456', 'img.jpg', 'admin'),
('Azouzi', 'Yahya', 'homme', '08/06/1991', 'kairouan', '+21621870804', 'azouziya@hotmail.fr', '123456', 'img.jpg', 'admin'),
('Azouzi', 'Yahya', 'homme', '12/02/1980', 'tunis', '+21621984501', 'yahya.azouzi@esprit.tn', 'azerty', 'NULL', 'volontaire'),
('mahfoudhi', 'amel', 'femme', '08/06/1965', 'tunisfs', '+21621984501', 'yahya_amin@live.com', 'azerty', 'NULL', 'medecin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
