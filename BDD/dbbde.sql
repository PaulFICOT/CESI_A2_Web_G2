-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 04 mars 2019 à 12:43
-- Version du serveur :  5.7.22-log
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbbde`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `Id_category` int(11) NOT NULL AUTO_INCREMENT,
  `Category_type` varchar(63) NOT NULL,
  PRIMARY KEY (`Id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `centers`
--

DROP TABLE IF EXISTS `centers`;
CREATE TABLE IF NOT EXISTS `centers` (
  `Id_center` int(11) NOT NULL AUTO_INCREMENT,
  `Center_name` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_center`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `centers`
--

INSERT INTO `centers` (`Id_center`, `Center_name`) VALUES
(1, 'Aix-en-Provence'),
(2, 'Alger'),
(3, 'Angoulême'),
(4, 'Arras'),
(5, 'Bordeaux'),
(6, 'Brest'),
(7, 'Caen'),
(8, 'Châteauroux'),
(9, 'Dijon'),
(10, 'Grenoble'),
(11, 'La Rochelle'),
(12, 'Le Mans'),
(13, 'Lille'),
(14, 'Lyon'),
(15, 'Montpellier'),
(16, 'Nancy'),
(17, 'Nantes'),
(18, 'Nice'),
(19, 'Orléans'),
(20, 'Paris Nanterre'),
(21, 'Pau'),
(22, 'Reims'),
(23, 'Rouen'),
(24, 'Saint-Nazaire'),
(25, 'Strasbourg'),
(26, 'Toulouse');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `Id_user` int(11) NOT NULL,
  `Id_photo` int(11) NOT NULL,
  `Comment_content` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_user`,`Id_photo`),
  KEY `Comments_Photos0_FK` (`Id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `containz`
--

DROP TABLE IF EXISTS `containz`;
CREATE TABLE IF NOT EXISTS `containz` (
  `Id_order` int(11) NOT NULL,
  `Id_product` int(11) NOT NULL,
  PRIMARY KEY (`Id_order`,`Id_product`),
  KEY `Containz_Products0_FK` (`Id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `eventz`
--

DROP TABLE IF EXISTS `eventz`;
CREATE TABLE IF NOT EXISTS `eventz` (
  `Id_event` int(11) NOT NULL AUTO_INCREMENT,
  `Event_title` varchar(255) NOT NULL,
  `Event_description` varchar(255) NOT NULL,
  `Event_approval` tinyint(1) NOT NULL,
  `Event_date` date NOT NULL,
  `Event_recurrence` tinyint(1) NOT NULL,
  `Event_price` decimal(15,3) NOT NULL,
  `Event_period` varchar(63) DEFAULT NULL,
  `Event_location` varchar(100) DEFAULT NULL,
  `Id_user` int(11) NOT NULL,
  PRIMARY KEY (`Id_event`),
  KEY `Eventz_Users_FK` (`Id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `eventz`
--

INSERT INTO `eventz` (`Id_event`, `Event_title`, `Event_description`, `Event_approval`, `Event_date`, `Event_recurrence`, `Event_price`, `Event_period`, `Event_location`, `Id_user`) VALUES
(1, 'Soirée RoleXia', 'Soirée jeux de roles et jeux de plateau par RoleXia', 1, '2019-01-26', 0, '0.000', '0', 'CESI Arras', 2),
(2, 'LAN', 'Soirée LAN par ExiaLan', 1, '2019-03-02', 0, '2.000', '0', 'CESI Arras', 3),
(3, 'Repas', 'Repas organisé par exiamiam', 1, '2019-02-01', 1, '4.000', 'hedbomadaire', 'CESI Arras', 1),
(4, 'Sport', 'Après-midi sportive avec le BDS', 1, '2019-03-09', 0, '3.000', '0', 'Citadelle', 4),
(5, 'CS', 'Game de CS avec Hugo', 1, '2019-01-29', 0, '0.000', '0', 'CESI Arras', 5),
(6, 'Sortie sportive', 'Le BDS vous invite à la base nautique de Saint Laurent', 1, '2019-05-13', 0, '0.000', '0', 'Base nautique de Saint Laurent', 2),
(7, 'Sortie sportive2', 'Le BDS vous invite à la base nautique de Saint Laurent2', 1, '2019-05-18', 0, '2.000', '0', 'Base nautique de Saint Laurent2', 2),
(8, 'Proposition', 'Le BDS vous invite à la base nautique de Saint Laurent2', 0, '2019-05-18', 0, '2.000', '0', 'Base nautique de Saint Laurent2', 2),
(9, 'Proposition2', 'Le BDS vous invite à la base nautique de Saint Laurent2', 0, '2019-05-18', 0, '2.000', '0', 'Base nautique de Saint Laurent2', 2),
(10, 'Proposition3', 'Le BDS vous invite à la base nautique de Saint Laurent2', 0, '2019-05-18', 0, '2.000', '0', 'Base nautique de Saint Laurent2', 2),
(11, 'Proposition4', 'Le BDS vous invite à la base nautique de Saint Laurent2', 0, '2019-05-18', 0, '2.000', '0', 'Base nautique de Saint Laurent2', 2),
(12, 'Proposition5', 'Le BDS vous invite à la base nautique de Saint Laurent2', 0, '2019-05-18', 0, '2.000', '0', 'Base nautique de Saint Laurent2', 2),
(13, 'Proposition6', 'Le BDS vous invite à la base nautique de Saint Laurent2', 0, '2019-05-18', 0, '2.000', '0', 'Base nautique de Saint Laurent2', 2),
(14, 'Proposition7', 'Le BDS vous invite à la base nautique de Saint Laurent2', 0, '2019-05-18', 0, '2.000', '0', 'Base nautique de Saint Laurent2', 2);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `Id_photo` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  PRIMARY KEY (`Id_photo`,`Id_user`),
  KEY `Likes_Users0_FK` (`Id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Id_order` int(11) NOT NULL AUTO_INCREMENT,
  `Order_date` date NOT NULL,
  `Order_price` decimal(15,3) NOT NULL,
  `Order_Amount` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  PRIMARY KEY (`Id_order`),
  KEY `Orders_Users_FK` (`Id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `Id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `Photo_name` varchar(255) DEFAULT NULL,
  `Photo_is_public` tinyint(1) NOT NULL,
  `Id_event` int(11) NOT NULL,
  PRIMARY KEY (`Id_photo`),
  KEY `Photos_Eventz_FK` (`Id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Id_product` int(11) NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(50) NOT NULL,
  `Product_price` decimal(15,3) NOT NULL,
  `Product_description` varchar(255) DEFAULT NULL,
  `Product_nbr_sold` int(11) NOT NULL,
  `Product_stock` int(11) NOT NULL,
  `Id_category` int(11) NOT NULL,
  `Product_photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_product`),
  KEY `Products_Category_FK` (`Id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `signs_in`
--

DROP TABLE IF EXISTS `signs_in`;
CREATE TABLE IF NOT EXISTS `signs_in` (
  `Id_event` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  PRIMARY KEY (`Id_event`,`Id_user`),
  KEY `SignsS_in_User_FK` (`Id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id_user` int(11) NOT NULL AUTO_INCREMENT,
  `User_firstname` varchar(50) NOT NULL,
  `User_lastname` varchar(50) NOT NULL,
  `User_mail` varchar(50) NOT NULL,
  `User_password` varchar(255) NOT NULL,
  `User_status` varchar(10) NOT NULL,
  `User_isAdmin` tinyint(1) NOT NULL,
  `Id_center` int(11) NOT NULL,
  PRIMARY KEY (`Id_user`),
  KEY `Users_Centers_FK` (`Id_center`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id_user`, `User_firstname`, `User_lastname`, `User_mail`, `User_password`, `User_status`, `User_isAdmin`, `Id_center`) VALUES
(1, 'Paul', 'FICOT', 'paul.ficot@viacesi.fr', '123456', 'admin', 1, 4),
(2, 'Axel', 'SAUVAGE', 'axel.sauvage@viacesi.fr', '123456', 'user', 0, 4),
(3, 'Nathan', 'LAMBEC', 'nathan.lambec@viacesi.fr', '123456', 'user', 0, 4),
(4, 'Antoine', 'DESRAMAUT', 'antoine.desramaut@viacesi.fr', '123456', 'user', 0, 4),
(5, 'Hugo', 'DEVOYE', 'hugo.devoye@viacesi.fr', '123456', 'user', 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `Id_event` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  PRIMARY KEY (`Id_event`,`Id_user`),
  KEY `Votes_Photos_FK` (`Id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comments_Photos0_FK` FOREIGN KEY (`Id_photo`) REFERENCES `photos` (`Id_photo`),
  ADD CONSTRAINT `Comments_Users_FK` FOREIGN KEY (`Id_user`) REFERENCES `users` (`Id_user`);

--
-- Contraintes pour la table `containz`
--
ALTER TABLE `containz`
  ADD CONSTRAINT `Containz_Orders_FK` FOREIGN KEY (`Id_order`) REFERENCES `orders` (`Id_order`),
  ADD CONSTRAINT `Containz_Products0_FK` FOREIGN KEY (`Id_product`) REFERENCES `products` (`Id_product`);

--
-- Contraintes pour la table `eventz`
--
ALTER TABLE `eventz`
  ADD CONSTRAINT `Eventz_Users_FK` FOREIGN KEY (`Id_user`) REFERENCES `users` (`Id_user`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `Likes_Photos_FK` FOREIGN KEY (`Id_photo`) REFERENCES `photos` (`Id_photo`),
  ADD CONSTRAINT `Likes_Users0_FK` FOREIGN KEY (`Id_user`) REFERENCES `users` (`Id_user`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Orders_Users_FK` FOREIGN KEY (`Id_user`) REFERENCES `users` (`Id_user`);

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `Photos_Eventz_FK` FOREIGN KEY (`Id_event`) REFERENCES `eventz` (`Id_event`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Products_Category_FK` FOREIGN KEY (`Id_category`) REFERENCES `categories` (`Id_category`);

--
-- Contraintes pour la table `signs_in`
--
ALTER TABLE `signs_in`
  ADD CONSTRAINT `SignsS_in_User_FK` FOREIGN KEY (`Id_user`) REFERENCES `users` (`Id_user`),
  ADD CONSTRAINT `Signs_in_Eventz_FK` FOREIGN KEY (`Id_event`) REFERENCES `eventz` (`Id_event`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_Centers_FK` FOREIGN KEY (`Id_center`) REFERENCES `centers` (`Id_center`);

--
-- Contraintes pour la table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `Votes_Eventz_FK` FOREIGN KEY (`Id_event`) REFERENCES `eventz` (`Id_event`),
  ADD CONSTRAINT `Votes_Photos_FK` FOREIGN KEY (`Id_user`) REFERENCES `users` (`Id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
