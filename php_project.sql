-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2015 at 04:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_project`
create database php_project;
use php_project;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `image_src` varchar(100) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `price` decimal(5,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `name`, `image_src`, `id_category`, `price`, `quantity`, `description`) VALUES
(1, 'MCM boston medium sac a main pour femme cognac', 'images/article/14.jpg', 5, '550.00', 100, 'NOUVELLES<br>Reference constructeur: mwb4avi83 ASIN: B00M5953YC'),
(2, 'Mercer''s Furniture Corona Meuble range-CD 2 rangees de 4 tiroirs', 'images/article/9.jpg', 3, '86.28', 100, 'antiderapants 0/24 Mois 13 cm<br>Gamme Corona Pin robuste Fini cire vieilli A monter soi-meme Concu aux Mexique'),
(3, 'Apple MacBook Pro 13" Retina Argent (2015)', 'images/article/7.jpg', 1, '999.99', 100, 'Taille: RAM 8 Go - SSD 256 Go<br>Ecran 13 pouces - 2560 x 1600 Stockage et memoire : disque dur 256 Go, RAM 8 Go Intel Core i5 NC 2.7 Ghz Carte Graphique : Iris Graphics 6100 1 port(s) HDMI; 2 port(s) USB 3.0; 1 port(s) Ethernet; 1 prise(s) jack'),
(4, 'Belin Monaco la Boite de 105 g', 'images/article/13.jpg', 4, '1.04', 100, 'THE TWILIGHT SAGA NEW MOON : FIGURINE ALICE<br>Poids net du produit:105 grammes Poids net egoutte:105 grammes Marque:Belin<br>Fabricant/Producteur:Belin'),
(5, 'Kingston KVR16N11S8/4 4GB 1Rx8 512M x 64-Bit PC3-12800 CL11 240-Pin DIMM Value Memoire RAM DDR3 1600', 'images/article/6.jpg', 1, '22.49', 100, '#1 Meilleure vente<br>4Go 1600MHz DDR3 Non-ECC CL11 DIMM single rank, 240-pin, 1.5V Tous les modules ValueRam sont testes a 100% Veuillez verifier la compatibilite aupres de Kingston'),
(6, 'Minions Eau de Toilette 100 ml', 'images/article/5.jpg', 2, '11.95', 100, '#1 Meilleure vente<br>Les Minions reviennent, plus drôles et delirants que jamais ! Ils ont desormais leur parfum. Teste Sous Contrele Dermatologique. Ce produit est fabrique par la société Air-Val International, véritable expert du parfum pour enfants et adolescents, grâce à un savoir-faire et une connaissance développés depuis plus de 30 ans.'),
(7, 'Striale ST-715 Tapis de course inclinaison motorisee Noir', 'images/article/15.jpg', 6, '529.00', 100, 'NOUVELLES<br>usage occasionnel Moteur 1.1 HP en continu (puissance maximale 2.0 HP) Vitesse maximum de 1km à 16km/h – idéal pour la marche, le jogging et le running Inclinaison électrique sur 15 niveaux Surface de course 120 x 41.5 cm Dimensions Plies : 85 x 72.5 x 138cm Roues de transport intégrées Poids maximum utilisateur :100 Kg Pliant pour un rangement aise et pour un gain de place Pliage assiste par vérin hydraulique Système d’amorti pour limiter les chocs aux articulations Ordinateur avec ecran de 112*48mm retro eclairé bleu 5 fonctions : temps, distance, vitesse, approximation des calories pulsations cardiaques par hand pulse 18 programmes + 1 manuel 4 touches rapide pour la selection de la vitesse 4 touches rapide pour la selection de la vitesse 3h par semaine'),
(8, 'Qiyun Z. Occasionnels Laches Trous Dechires Femmes Pantalons Denim Nouvelles Longues Boyfriend Jean ', 'images/article/1.jpg', 5, '20.01', 100, 'NOUVELLES<br>Coton Bleu'),
(9, 'Habitrail Cage Cristal Petits Animaux', 'images/article/12.jpg', 3, '21.99', 100, '#1 Meilleure vente<br>L''Habitat Habitrail cristal est une unité d''habitation principale qui sert d''espace de vie central aux hamsters, et où ils se sentent en sécurité. Tous les autres articles Habitrail sont compatibles avec cet habitat. Sa cage grillagée en plastique offre à la fois une bonne durabilité et une excellente circulation d''air. Son design incorporant une base profonde et des coins arrondis, cela facilite son nettoyage et minimise les salissures Une porte en plastique de grande dimension permet d''accéder facilement au petit animal et celle-ci comporte un verrou pour que le petit animal reste bel et bien à l''intérieur de sa cage. On peut y raccorder d''autres accessoires Habitrail® aux deux fenêtres conçues à cette fin au moyen de nos raccords à verrou brevetés (vendus séparément) L''Habitat Habitrail cristal comprend également un poste d''observation d''une rampe d''accès pour combler l''instinct d''exploration naturel du hamster et son besoin de se mettre à l''abri; une roue d''exercice silencieuse; une bouteille à eau, à l''épreuve des dents, qui est munie d''un tube en acier inoxydable et d''un support en métal; un bol à nourriture; un pare-litière'),
(10, 'PAUL & JOE Rouge a Levres Couvrance Parfaite (Recharge)', 'images/article/4.jpg', 4, '15.00', 100, '3,2g<br>Rouges à Lèvres Couvrance Parfaite. Sa texture très pigmentée permet de se dessiner un sourire sophistiqué et intense.<br>Conseils d''utilisation<br>A insérer dans un étui à Rouge à Lèvres Paul & Joe (vendu séparément).'),
(11, 'Le petit prince', 'images/article/8.jpg', 2, '6.60', 100, '#1 Meilleure vente<br>«Le premier soir, je me suis donc endormi sur le sable à mille milles de toute terre habitée. J''étais bien plus isolé qu''un naufragé sur un radeau au milieu de l''océan. Alors, vous imaginez ma surprise, au lever du jour, quand une drôle de petite voix m''a réveillé. Elle disait : “S''il vous plaît... dessine-moi un mouton !” J''ai bien regardé. Et j''ai vu ce petit bonhomme tout à fait extraordinaire qui me considérait gravement...»'),
(12, 'Gardeo GTDAM38BAG Tondeuse a main 38 cm', 'images/article/11.jpg', 3, '65.80', 100, '#1 Meilleure vente<br>Largeur de travail: 38 cm système de coupe: manuel (18-38 mm) carter en acier modèle poussé livrée avec un bac récolteur 24 l'),
(13, 'Chaussons chaussettes avec semelle en veritable cuir', 'images/article/2.jpg', 5, '13.99', 100, 'antidérapants 0/24 Mois 13 cm<br>Chaussons chaussettes avec semelle en cuir pour bébé - enfant. Taille: 19 - 21 Très doux et agréable sur la peaux. Confortable procurent un effet pieds-nus Idéal pour les premiers pas, intérieur ou la créche. Parfait pour mettre sur le pyjama. Semelle en véritable 100% cuir. Lavable à 30°C Découvrez tout la collection en tapent Sevira Kids dans le moteur de recherche');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `id_basket` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(20) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_basket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id_basket`, `etat`, `id_user`, `date_time`) VALUES
(3, '1', 11, '2015-11-28 02:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `basket_line`
--

CREATE TABLE IF NOT EXISTS `basket_line` (
  `id_basket_line` int(11) NOT NULL AUTO_INCREMENT,
  `id_basket` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_basket_line`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `basket_line`
--

INSERT INTO `basket_line` (`id_basket_line`, `id_basket`, `id_article`, `quantity`) VALUES
(3, 3, 5, 3),
(4, 3, 11, 1),
(5, 3, 6, 1),
(6, 3, 4, 1),
(7, 3, 10, 1),
(8, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'High-Tech et Informatique'),
(2, 'Jouets, Enfants et Bebes'),
(3, 'Maison et Bricolage'),
(4, 'Beaute, Sante, Epicerie'),
(5, 'Vetements et Chaussures'),
(6, 'Sports et Loisirs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(11, 'zheng', '111', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
