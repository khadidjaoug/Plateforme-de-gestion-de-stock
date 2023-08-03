-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2023 at 03:54 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infotech`
--
drop database if exists infotech;
 create database infotech;
 use infotech
-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_nom` varchar(50) NOT NULL,
  `client_prenom` varchar(50) NOT NULL,
  `client_telephone` varchar(50) NOT NULL,
  `client_adresse` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  PRIMARY KEY (`client_id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `commande_id` int(11) NOT NULL AUTO_INCREMENT,
  `commande_date` date NOT NULL,
  `fourniseeur_id` int(11) NOT NULL,
  PRIMARY KEY (`commande_id`),
  KEY `commande_fournisseur_FK` (`fourniseeur_id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commande_produit`
--

DROP TABLE IF EXISTS `commande_produit`;
CREATE TABLE IF NOT EXISTS `commande_produit` (
  `prod_id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `commande_qt` int(11) NOT NULL,
  PRIMARY KEY (`prod_id`,`commande_id`),
  KEY `commande_produit_commande0_FK` (`commande_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `fournisseur_id` int(11) NOT NULL AUTO_INCREMENT,
  `fournisseur_nom` varchar(50) NOT NULL,
  `fournisseur_prenom` varchar(50) NOT NULL,
  `fournisseur_telephone` varchar(50) NOT NULL,
  `fournisseur_adresse` varchar(50) NOT NULL,
  `fournisseur_email` varchar(50) NOT NULL,
  PRIMARY KEY (`fourniseeur_id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nom` varchar(50) NOT NULL,
  `prod_design` varchar(150) NOT NULL,
  `prod_qt` int(11) NOT NULL,
  `prod_prix` decimal(15,3) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `produit_categorie_FK` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_nom` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nom` varchar(50) NOT NULL,
  `user_prenom` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_mdp` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_role_FK` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `vente_id` int(11) NOT NULL AUTO_INCREMENT,
  `vente_date` date NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`vente_id`),
  KEY `vente_client_FK` (`client_id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vente_produit`
--

DROP TABLE IF EXISTS `vente_produit`;
CREATE TABLE IF NOT EXISTS `vente_produit` (
  `vente_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `vente_qt` int(11) NOT NULL,
  PRIMARY KEY (`vente_id`,`prod_id`),
  KEY `vente_produit_produit0_FK` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--


--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_fournisseur_FK` FOREIGN KEY (`fourniseeur_id`) REFERENCES `fournisseur` (`fourniseeur_id`),

--
-- Constraints for table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD CONSTRAINT `commande_produit_commande0_FK` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`commande_id`),
  ADD CONSTRAINT `commande_produit_produit_FK` FOREIGN KEY (`prod_id`) REFERENCES `produit` (`prod_id`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_categorie_FK` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`cat_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_FK` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_client_FK` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
 
--
-- Constraints for table `vente_produit`
--
ALTER TABLE `vente_produit`
  ADD CONSTRAINT `vente_produit_produit0_FK` FOREIGN KEY (`prod_id`) REFERENCES `produit` (`prod_id`),
  ADD CONSTRAINT `vente_produit_vente_FK` FOREIGN KEY (`vente_id`) REFERENCES `vente` (`vente_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
