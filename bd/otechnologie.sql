-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 03 oct. 2018 à 18:23
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `otechnologie`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `numcom` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qtee` int(11) NOT NULL,
  `date_com` varchar(39) NOT NULL,
  `confirme` varchar(3) NOT NULL,
  `paiment` varchar(30) NOT NULL,
  `vu` varchar(3) NOT NULL,
  PRIMARY KEY (`numcom`),
  KEY `pro_id` (`pro_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=230 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`numcom`, `pro_id`, `user_id`, `qtee`, `date_com`, `confirme`, `paiment`, `vu`) VALUES
(139, 19, 2, 4, '2018-01-31 18:45:00', 'oui', 'manuel', 'oui'),
(140, 19, 26, 1, '2018-02-06 22:18:35', 'oui', 'manuel', 'oui'),
(141, 27, 26, 1, '2018-02-06 22:33:39', 'oui', 'manuel', 'oui'),
(142, 27, 26, 1, '2018-02-06 22:34:36', 'oui', 'manuel', 'oui'),
(143, 27, 2, 1, '2018-02-11 22:52:05', 'oui', 'manuel', 'oui'),
(148, 30, 2, 1, '2018-02-12 01:28:49', 'oui', 'manuel', 'oui'),
(150, 19, 2, 1, '2018-02-15 23:10:40', 'oui', 'manuel', 'oui'),
(151, 28, 2, 1, '2018-02-16 16:01:31', '', 'manuel', 'oui'),
(154, 28, 32, 2, '2018-02-16 23:12:22', 'oui', 'Cheque', 'oui'),
(190, 22, 34, 1, '2018-02-20 22:49:33', 'oui', 'Virement bancaire', 'oui'),
(199, 22, 35, 9, '2018-03-04 22:02:57', 'oui', 'Virement bancaire', 'oui'),
(200, 30, 35, 1, '2018-03-04 22:03:37', 'oui', 'Cheque', 'oui'),
(211, 43, 35, 1, '2018-03-10 16:09:36', 'oui', 'Virement bancaire', 'oui'),
(212, 27, 34, 1, '2018-03-10 16:14:23', 'oui', 'Virement bancaire', 'oui'),
(216, 30, 34, 1, '2018-03-10 19:03:56', 'oui', 'Virement bancaire', 'oui'),
(217, 28, 35, 4, '2018-03-10 19:21:21', 'oui', 'Virement bancaire', 'oui'),
(218, 19, 32, 1, '2018-03-10 19:27:46', 'oui', 'Par Cheque', 'oui'),
(220, 28, 35, 2, '2018-03-22 16:16:12', 'oui', 'Virement bancaire', 'oui'),
(221, 27, 35, 1, '2018-03-22 16:16:46', 'oui', 'Par Cheque', 'oui'),
(224, 19, 35, 4, '2018-04-04 07:22:45', 'oui', 'Par Cheque', 'oui'),
(225, 19, 34, 2, '2018-05-07 16:20:42', 'oui', 'Par Cheque', 'oui'),
(226, 29, 34, 1, '2018-05-07 16:20:42', 'oui', 'Par Cheque', 'oui'),
(229, 19, 34, 1, '2018-05-12 09:32:02', 'oui', 'Virement bancaire', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `fichet`
--

DROP TABLE IF EXISTS `fichet`;
CREATE TABLE IF NOT EXISTS `fichet` (
  `design` varchar(30) DEFAULT NULL,
  `dimensions` varchar(40) DEFAULT NULL,
  `poids` varchar(25) DEFAULT NULL,
  `processeur` varchar(100) DEFAULT NULL,
  `syse` varchar(50) DEFAULT NULL,
  `resolusion` varchar(40) DEFAULT NULL,
  `apphoto` varchar(70) DEFAULT NULL,
  `memoire` varchar(50) DEFAULT NULL,
  `catg` varchar(30) DEFAULT NULL,
  `date_sortie` varchar(30) DEFAULT NULL,
  `referance` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`referance`),
  KEY `referance` (`referance`),
  KEY `referance_2` (`referance`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichet`
--

INSERT INTO `fichet` (`design`, `dimensions`, `poids`, `processeur`, `syse`, `resolusion`, `apphoto`, `memoire`, `catg`, `date_sortie`, `referance`) VALUES
('Classique (Monobloc)', '118,00 x 50,20 x 13,50 mm', '81,00 g', '?', '?', '240 x 320 px (2,40\") 167 ppi', '0,3 Mpx', '?', 'x', '22/08/2016', '150DS'),
('classiue', 'hhgdsss', 'ddddxx', 'ccccccc', 'ccccccc', 'cccccc', 'cccccccc', 'cccccccc', 'cccccccc', 'ccccccc', 'atggdvrgvc'),
('Classique (full tactile)', '146 x 70,9 x 8,19 mm', '135 grammes', 'Qualcomm MSM8916 Snapdragon 410 - 1.2 GHz', 'Android 4.4 KitKat', '1280 x 720 pixels', '13 mÃ©gapixels avec Flash LED + Auto Focus', '16 Go, 2 Go RAM', '150 Mbps (Cat.4)', '02/09/2015', 'Desire626'),
('ASUS FX753VD-GC012', '', '3 kg', 'Intel Core i7', 'Endless OS', '1920 x 1080 pixels', '', '8 Go', '', '', 'FX753VD-GC012'),
('classique', '20155*2015', 'ggggg', 'ggggg', 'gggg', 'ggggg', 'ggggg', 'ggggg', 'ggg', '07/07/2016', 'hazsdfgtr'),
('Classique (full tactile)', '124,4 x 59,2 x 9 mm', '132 grammes', 'Apple A6 - 1.3 GHz', 'IOS', '1136 x 640 pixels', '8 mÃ©gapixels avec Flash LED + Auto Focus', '8 Go, 1 Go RAM', '100 Mbps (Cat.3)', '16/03/2014', 'i5c32b'),
('Classique (full tactile)', '138,1 x 67 x 6,9 mm', '129 grammes', 'Apple A8 - 1.4 GHz', 'iOS', '1334 x 750 pixels', '8 mÃ©gapixels avec Flash double LED + Auto Focus', '16 Go, 1 Go RAM', '150 Mbps (Cat.4)', 'Septembre 2014', 'MGA82ZD/A'),
('Classique (full tactile)', '142 x 71,8 x 7,9 mm', '146 grammes', 'Qualcomm MSM8916 Snapdragon 410 - 1.2 GHz', 'Android 5.1 Lollipop', '1280 x 720 pixels', '13 mÃ©gapixels avec Flash LED + Auto Focus', '8 Go, 1,5 Go RAM', '150 Mbps (Cat.4)', '02/08/2015', 'SM-J500FN');

-- --------------------------------------------------------

--
-- Structure de la table `formweb`
--

DROP TABLE IF EXISTS `formweb`;
CREATE TABLE IF NOT EXISTS `formweb` (
  `imgleft` varchar(100) NOT NULL,
  `imgright` varchar(100) NOT NULL,
  `imgtop` varchar(100) NOT NULL,
  `imgcarousel1` varchar(100) NOT NULL,
  `imgcarousel2` varchar(100) NOT NULL,
  `imgbot1` varchar(100) NOT NULL,
  `imgbot2` varchar(100) NOT NULL,
  `imgbot3` varchar(100) NOT NULL,
  `imgbcar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formweb`
--

INSERT INTO `formweb` (`imgleft`, `imgright`, `imgtop`, `imgcarousel1`, `imgcarousel2`, `imgbot1`, `imgbot2`, `imgbot3`, `imgbcar`) VALUES
('60.jpg', '50.jpg', 'materiel1.png', 'pp3.jpg', 'pp.jpg', 'publ1.jpg', 'publ2.jpg', 'publ3.jpg', 'pp2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `fourn_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `num_tel` int(11) DEFAULT NULL,
  PRIMARY KEY (`fourn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`fourn_id`, `nom`, `prenom`, `adresse`, `ville`, `num_tel`) VALUES
(1, 'aymen', 'sahli', 'bizerte centre ville', 'bizerte', 53458754),
(2, 'hamza', 'sahli', 'rue habib bourgiba tunis', 'tunis', 52659874);

-- --------------------------------------------------------

--
-- Structure de la table `mailbox`
--

DROP TABLE IF EXISTS `mailbox`;
CREATE TABLE IF NOT EXISTS `mailbox` (
  `nummail` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `objet` varchar(50) NOT NULL,
  `refcom` varchar(40) NOT NULL,
  `vu` varchar(3) NOT NULL,
  `date_msg` varchar(20) NOT NULL,
  PRIMARY KEY (`nummail`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mailbox`
--

INSERT INTO `mailbox` (`nummail`, `user_id`, `message`, `objet`, `refcom`, `vu`, `date_msg`) VALUES
(15, 2, 'drsresdrtfyughkhjkljhuyfdtrsqz', 'heloo', 'Desire626', 'oui', '31 Jan 2018'),
(16, 26, 'rtyuryyjkÃ¨jhg', 'erthy', 'MGA82ZD/A', 'oui', '06 Feb 2018'),
(20, 34, 'monsieur nasreddin :*', 'brahim', 'MGA82ZD/A', 'oui', '19 Mar 2018');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `referance` varchar(30) NOT NULL,
  `prix` float NOT NULL,
  `img` varchar(100) NOT NULL,
  `img_face` varchar(100) NOT NULL,
  `img_darrier` varchar(100) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `color` varchar(15) NOT NULL,
  `quantite` int(5) NOT NULL,
  `date_entre` varchar(50) NOT NULL,
  `description` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `four_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `referance` (`referance`),
  KEY `id` (`id`),
  KEY `four_id` (`four_id`),
  KEY `four_id_2` (`four_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `categorie`, `model`, `marque`, `referance`, `prix`, `img`, `img_face`, `img_darrier`, `etat`, `color`, `quantite`, `date_entre`, `description`, `four_id`) VALUES
(19, 'mobile', 'iphone', 'iphone 6 16Gb', 'MGA82ZD/A', 900, 'iphone6.jpg', 'iphonef6.jpg', 'iphonea6.jpg', 'Neuf', '#d4bba3', 10, '2018-01-28 12:41:39', 'L iPhone 6 signe Apple est sorti en septembre 2014. Avec son design épuré en verre et en aluminium, l’iPhone 6 est plus grand et offre désormais un écran multi-touch Retina HD de 4,7 pouces (résolution de 1 334 x 750 pixels à 326 ppp), contre 4 pouces...', 1),
(22, 'mobile', 'HTC', 'HTC Desire 626', 'Desire626', 620, 'htc-desire-626-bleu-lagon.jpg', 'htc-desire-626-a.jpg', 'htc-desire-626-f.jpg', 'Neuf', '#0000a0', 5, '2018-01-22 22:13:53', 'Le Desire 626 d\'HTC est un smartphone fonctionnant sous Android 5.1 et compatible 4G. Decliné en une multitude de couleurs, cet appareil à écran 5 pouces bénéficie pour son prix de 300 euros d\'un processeur quadricoeur, de 2 Go de mémoire vive et de 16 Go de mémoire interne.', 1),
(27, 'mobile', 'Iphone', 'Iphone 5c 32Gb\n', 'i5c32b', 500, 'iphone-5c-16-go-blanca.jpg', 'iphone-5c-16-go-blanc.jpg', 'iphone-5c-16-go-blancf.jpg', 'Neuf', '#ffffff', 11, '2018-01-23 11:12:54', 'Apple présente l\'iPhone 5C, remplaçant de l\'iPhone 5 sorti en 2012. Il en conserve l\'écran Retina de 4\" (1136 x 640 pixels), la puce A6 mais aussi l\'appareil photo principal de 8 mégapixels qui vous permettra de filmer en 1080p. FaceTime profitera tout de même d\'une webcam mieux définie avec une résolution de 1,9 mégapixels alors que la batterie offrira une plus grande autonomie : 10 heures navigation en 4G LTE, 10 heures conversation, 10 heures en lecture vidéo.\n', 1),
(28, 'mobile', 'Samsung ', 'Samsung Galaxy J5 4G\n', 'SM-J500FN', 499, 'j54g.jpg', 'telephone-portable-samsung-galaxy-j5-4g-gold-tunisie (1).jpg', 'telephone-portable-samsung-galaxy-j5-4g-gold-tunisie.jpg', 'Neuf', '#ecc49b', 6, '2018-01-23 11:22:54', 'Si son petit frère le Galaxy J1 était un smartphone d\'entrée de gamme aux capacités limitées, le Samsung Galaxy J5 se positionne quant à lui sur le segment milieu de gamme, en disposant d\'une fiche technique bien équipée. ', 2),
(29, 'laptop', 'Asus', 'ASUS GMAER ', 'FX753VD-GC012', 2578, 'LD0004179801_2.jpg', 'LD0004179806_2.jpg', 'LD0004179821_2.jpg', 'Neuf', '#000000', 1, '2018-01-23 12:11:28', 'Intel Core i7-7700HQ 8 Go 1 To 17.3\" LED Full HD NVIDIA GeForce GTX 1050 4 Go Wi-Fi AC/Bluetooth Webcam Endless OS - Bonne affaire (article utilisé, garantie 3 mois', 2),
(30, 'mobile', 'Nokia', 'Nokia 150 Ds', '150DS', 85, 'LD0004192495_2.jpg', 'LD0004192500_2.jpg', '', 'Neuf', '#000000', 16, '2018-01-23 12:22:56', 'Le Nokia 150 est un téléphone mobile 2G Dual SIM qui vous permet de restez connecter à tous vos contacts, à internet ou encore de suivre vos réseaux sociaux. Compact et élégant, profitez d\'un téléphone design et pratique à longue autonomie.\n', 1),
(43, 'laptop', 'samsung 4552', 'samsung', '5544552gvd', 545221, 'LD0004179806_2.jpg', 'LD0004179821_2.jpg', 'LD0004179801_2.jpg', 'neuf', '#000000', 2, '2018-01-18 20:31:42', 'sssedrtyuijok', 2),
(45, 'laptop', 'lenovo', 'lenovo', 'hazsdfgtr', 1000, 'sony-xperia-x-64-go-blanc.jpg', '', '', '', '#000000', 3, '2018-04-13 14:13:20', 'azeryyuknxbvvvvvxvvvvvx', 1),
(46, 'mobile', 'samsung', 'samsung j7', 'atggdvrgvc', 700, 'j3.jpg', 'j32.jpg', '', 'neuf', '#80ff00', 7, '2018-04-13 14:17:06', 'hhgdgdfffd', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_sexe` varchar(5) NOT NULL,
  `user_date` date NOT NULL,
  `user_prenom` varchar(20) NOT NULL,
  `user_img` varchar(100) NOT NULL DEFAULT 'default.png',
  `personnalite` varchar(10) NOT NULL,
  `societe` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `cod_postal` int(10) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `num_tel` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_email` (`user_email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_sexe`, `user_date`, `user_prenom`, `user_img`, `personnalite`, `societe`, `adresse`, `ville`, `etat`, `cod_postal`, `pays`, `num_tel`) VALUES
(2, 'lahbib', 'mklahbib@gmail.com', 'azerty', 'homme', '2017-04-20', 'karimlgfb', 'default.png', 'user', 'Ozalise technologie', 'fd', 'El alia', 'Bizerte', 7016, 'Tunisie', 22732431),
(26, 'nasreddine', 'nasreddine@gmail.com', 'hamzawi', 'homme', '1996-07-06', 'ben hamouda', 'hamza.jpg', 'admin', 'ozalise technologie', 'rue tastour', 'bizerte', 'etudiant', 7016, 'tunis', 54808062),
(32, 'saber', 'saber@gmail.com', 'azerty', 'homme', '1995-12-06', 'ben hamouda', '', 'user', 'Ozalise Technologie', 'bizert', 'bizert', '', 7016, 'bizert', 12457896),
(34, 'brahim', 'brahim@gmail.com', 'azerty', 'homme', '1883-06-03', 'ben hammouda', '', 'user', 'Ozalise Technologie', 'rue tastour el alia ', 'el alia ', 'bizert', 7016, 'tunis', 55885215),
(35, 'wassim', 'wassim@gmail.com', 'wassim', 'homme', '1999-07-06', 'ben hamouda', '', 'user', 'Ozalise Technologie', 'rue tastour', 'el alia', 'bizert', 7016, 'tunis', 213659871);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit` ADD FULLTEXT KEY `description` (`description`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fka` FOREIGN KEY (`pro_id`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `fkb` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `fichet`
--
ALTER TABLE `fichet`
  ADD CONSTRAINT `kk` FOREIGN KEY (`referance`) REFERENCES `produit` (`referance`);

--
-- Contraintes pour la table `mailbox`
--
ALTER TABLE `mailbox`
  ADD CONSTRAINT `fkp` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`four_id`) REFERENCES `fournisseur` (`fourn_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
