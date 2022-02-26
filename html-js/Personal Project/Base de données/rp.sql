-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 26 fév. 2022 à 09:38
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
-- Base de données : `rp`
--

-- --------------------------------------------------------

--
-- Structure de la table `arme`
--

DROP TABLE IF EXISTS `arme`;
CREATE TABLE IF NOT EXISTS `arme` (
  `idArme` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Type` text NOT NULL,
  `Rareté` text NOT NULL,
  `Matériau` text NOT NULL,
  `DmgPhys` text,
  `DmgMagique` text,
  `Proprio` int(11) DEFAULT NULL,
  `Enchant1` int(11) DEFAULT NULL,
  `Enchant2` int(11) DEFAULT NULL,
  `Enchant3` int(11) DEFAULT NULL,
  `Enchant4` int(11) DEFAULT NULL,
  `Enchant5` int(11) DEFAULT NULL,
  `Enchant6` int(11) DEFAULT NULL,
  `Passif1` text NOT NULL,
  `Passif2` text NOT NULL,
  `Passif3` text NOT NULL,
  PRIMARY KEY (`idArme`),
  KEY `arme_effect_ibfk_3` (`Enchant3`) USING BTREE,
  KEY `arme_effect_ibfk_2` (`Enchant2`) USING BTREE,
  KEY `arme_enchant_ibfk_4` (`Enchant4`),
  KEY `arme_enchant_ibfk_5` (`Enchant5`),
  KEY `arme_enchant_ibfk_6` (`Enchant6`),
  KEY `Enchant1` (`Enchant1`),
  KEY `Proprio` (`Proprio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `arme`
--

INSERT INTO `arme` (`idArme`, `Nom`, `Type`, `Rareté`, `Matériau`, `DmgPhys`, `DmgMagique`, `Proprio`, `Enchant1`, `Enchant2`, `Enchant3`, `Enchant4`, `Enchant5`, `Enchant6`, `Passif1`, `Passif2`, `Passif3`) VALUES
(1, 'Théosyion', 'Rapière', 'Chef d’œuvre', 'Obsidienne', '2d8 + 1d6', NULL, 1, 1, 3, 2, NULL, NULL, NULL, '+20 réflexes', '+20 initiative', 'Chaque esquive réussie permet d\'infliger 2 CC.');

-- --------------------------------------------------------

--
-- Structure de la table `armure`
--

DROP TABLE IF EXISTS `armure`;
CREATE TABLE IF NOT EXISTS `armure` (
  `idArmure` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Type` text NOT NULL,
  `Rareté` text NOT NULL,
  `Matériau` text NOT NULL,
  `ResiPhys` int(11) NOT NULL,
  `ResiMagique` int(11) NOT NULL,
  `Proprio` int(11) DEFAULT NULL,
  `Equip` tinyint(1) NOT NULL,
  `Enchant1` int(11) DEFAULT NULL,
  `Enchant2` int(11) DEFAULT NULL,
  `Enchant3` int(11) DEFAULT NULL,
  `Enchant4` int(11) DEFAULT NULL,
  `Passif1` text NOT NULL,
  `Passif2` text NOT NULL,
  `Passif3` text NOT NULL,
  PRIMARY KEY (`idArmure`),
  KEY `armure_ibfk_enchant_1` (`Enchant1`),
  KEY `armure_ibfk_enchant_2` (`Enchant2`),
  KEY `armure_ibfk_enchant_3` (`Enchant3`),
  KEY `armure_ibfk_enchant_4` (`Enchant4`),
  KEY `Proprio` (`Proprio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `armure`
--

INSERT INTO `armure` (`idArmure`, `Nom`, `Type`, `Rareté`, `Matériau`, `ResiPhys`, `ResiMagique`, `Proprio`, `Equip`, `Enchant1`, `Enchant2`, `Enchant3`, `Enchant4`, `Passif1`, `Passif2`, `Passif3`) VALUES
(1, 'Casque en plaques réactives', 'casque', 'unique', 'plaques réactives', 12, 12, 1, 1, 1, NULL, NULL, NULL, '+5 armure / +5 résistance magique', '', ''),
(2, 'Plastron en plaques réactives', 'plastron', 'unique', 'plaques réactives', 15, 15, 1, 1, 1, NULL, NULL, NULL, '+5 armure / +5 résistance magique', '', ''),
(3, 'Jambières en plaque réactive', 'jambières', 'unique', 'plaques réactives', 14, 14, 1, 1, 1, NULL, NULL, NULL, '+5 armure / +5 résistance magique', '', ''),
(4, 'Bottes en plaques réactives', 'Bottes', 'unique', 'plaques réactives', 12, 12, 1, 1, 1, NULL, NULL, NULL, '+5 armure / +5 résistance magique', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `bonus`
--

DROP TABLE IF EXISTS `bonus`;
CREATE TABLE IF NOT EXISTS `bonus` (
  `IdBonus` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Description` text NOT NULL,
  `Proprio` int(11) NOT NULL,
  PRIMARY KEY (`IdBonus`),
  KEY `bonus_ibfk_1` (`Proprio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `idClasse` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Description` text NOT NULL,
  `Type` text NOT NULL,
  `Hp` int(11) DEFAULT NULL,
  `Mana` int(11) DEFAULT NULL,
  `Ferveur` int(11) DEFAULT NULL,
  `énergie` int(11) DEFAULT NULL,
  `Sable` int(11) DEFAULT NULL,
  `Sort1` int(11) NOT NULL,
  `Sort2` int(11) NOT NULL,
  `Sort3` int(11) NOT NULL,
  `Sort4` int(11) NOT NULL,
  `Sort5` int(11) NOT NULL,
  `Sort6` int(11) NOT NULL,
  `Sort7` int(11) NOT NULL,
  `Sort8` int(11) NOT NULL,
  `Sort9` int(11) NOT NULL,
  `Sort10` int(11) NOT NULL,
  PRIMARY KEY (`idClasse`),
  KEY `Sort1` (`Sort1`),
  KEY `Sort2` (`Sort2`),
  KEY `Sort3` (`Sort3`),
  KEY `Sort4` (`Sort4`),
  KEY `Sort5` (`Sort5`),
  KEY `Sort6` (`Sort6`),
  KEY `Sort7` (`Sort7`),
  KEY `Sort8` (`Sort8`),
  KEY `Sort9` (`Sort9`),
  KEY `Sort10` (`Sort10`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`idClasse`, `Nom`, `Description`, `Type`, `Hp`, `Mana`, `Ferveur`, `énergie`, `Sable`, `Sort1`, `Sort2`, `Sort3`, `Sort4`, `Sort5`, `Sort6`, `Sort7`, `Sort8`, `Sort9`, `Sort10`) VALUES
(1, 'Guerrier Fantôme', 'test', 'tank', NULL, NULL, NULL, NULL, NULL, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
(2, 'Paladin', 'test', 'tank', NULL, NULL, NULL, NULL, NULL, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
(3, 'Chevalier Runique', 'test', 'tank', NULL, NULL, NULL, NULL, NULL, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30),
(4, 'Assassin', 'test', 'dps physique', NULL, NULL, NULL, NULL, NULL, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40),
(5, 'Archer', 'test', 'dps physique\r\n', NULL, NULL, NULL, NULL, NULL, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50),
(6, 'Mécaniste', 'test', 'dps physique', NULL, NULL, NULL, NULL, NULL, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60),
(7, 'Élémentaliste', 'test', 'dps mage', NULL, NULL, NULL, NULL, NULL, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70),
(8, 'Clerc', 'test', 'dps mage', NULL, NULL, NULL, NULL, NULL, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80),
(9, 'Démoniste', 'test', 'dps mage', NULL, NULL, NULL, NULL, NULL, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90),
(10, 'Alchimiste', 'test', 'Support', NULL, NULL, NULL, NULL, NULL, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100),
(11, 'Druide', 'test', 'support', NULL, NULL, NULL, NULL, NULL, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110),
(12, 'Animiste', 'test', 'support', NULL, NULL, NULL, NULL, NULL, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120),
(13, 'Liche', '+100 armure\r\n-100 rm', 'tank', NULL, NULL, NULL, NULL, NULL, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130),
(14, 'Archange', 'Pas de mana, points de ferveur, +1 pt de ferveur par hit de CC, 15max', 'Tank/Dps', NULL, NULL, NULL, NULL, NULL, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140),
(15, 'Ascendant', '( Pas de PV, les dégâts inflige du Mana X 10, Commence avec 300 points de Mana )', 'Dps', NULL, NULL, NULL, NULL, NULL, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150),
(16, 'Ombre', 'test', 'Dps', NULL, NULL, NULL, NULL, NULL, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160),
(17, 'Sniper', 'un dés de perception pour les tirs, pas de mana, perception +20, coût en balles, dois recharge', 'dps', NULL, NULL, NULL, NULL, NULL, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170),
(18, '3XT3RM1N4T3UR', '( utilise de l\'énergie, max 100(+10), regen 10 par tour )', 'Dps', NULL, NULL, NULL, NULL, NULL, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180),
(19, 'Oracle', '( Mana = sable du temps, stackable à l\'infini, +1 par tour)', 'dps mage', NULL, NULL, NULL, NULL, NULL, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190),
(20, 'Archevêque', '( pas de Mana que des cooldown)', 'Dps', NULL, NULL, NULL, NULL, NULL, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200),
(21, 'Manipulateur d\'âmes', '( Max 3 âmes )', 'Dps', NULL, NULL, NULL, NULL, NULL, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210),
(22, 'Enchanteur', 'test', 'Support', NULL, NULL, NULL, NULL, NULL, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220),
(23, 'Shaman', '( 60 points d\'énergie, 30 de regen par tours sans utiliser de sorts )', 'support', NULL, NULL, NULL, NULL, NULL, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230),
(24, 'Archonte', 'test', 'support', NULL, NULL, NULL, NULL, NULL, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `idCompte` int(11) NOT NULL AUTO_INCREMENT,
  `Login` text NOT NULL,
  `Mdp` text NOT NULL,
  PRIMARY KEY (`idCompte`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `Login`, `Mdp`) VALUES
(1, 'LeMjOui', '31415926535897932384'),
(2, 'DmbMoon', 'Fernando45'),
(3, 'Aisuki', 'mai25052001'),
(4, 'Baylie', 'Morgane500'),
(5, 'Theo', 'Millot'),
(6, 'oui', 'Peut-être'),
(7, '', ''),
(13, 'nehelhur', 'bahdevine');

-- --------------------------------------------------------

--
-- Structure de la table `enchants`
--

DROP TABLE IF EXISTS `enchants`;
CREATE TABLE IF NOT EXISTS `enchants` (
  `idEnchant` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Description` text NOT NULL,
  `Type` text NOT NULL,
  PRIMARY KEY (`idEnchant`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enchants`
--

INSERT INTO `enchants` (`idEnchant`, `Nom`, `Description`, `Type`) VALUES
(1, 'Adaptable', 'Permet d\'avoir un slot d\'enchantement supplémentaire', 'tout'),
(2, 'Silence', 'Permet de silence l\'ennemi touché pdnt 1 tour', 'épée'),
(3, 'Réflexe canalisé', 'Vous pouvez dépenser 50 points de mana pour gagner +10 en réflexe pour un tour.', 'arme CC');

-- --------------------------------------------------------

--
-- Structure de la table `itemconso`
--

DROP TABLE IF EXISTS `itemconso`;
CREATE TABLE IF NOT EXISTS `itemconso` (
  `idItemC` int(11) NOT NULL AUTO_INCREMENT,
  `NomC` text NOT NULL,
  `Type` text NOT NULL,
  `Description` text NOT NULL,
  `NombreDraw` int(11) NOT NULL,
  `Proprio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idItemC`),
  KEY `Proprio` (`Proprio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `itemconso`
--

INSERT INTO `itemconso` (`idItemC`, `NomC`, `Type`, `Description`, `NombreDraw`, `Proprio`) VALUES
(1, 'potion test', 'potion', 'test', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `itemfixe`
--

DROP TABLE IF EXISTS `itemfixe`;
CREATE TABLE IF NOT EXISTS `itemfixe` (
  `idItemF` int(11) NOT NULL AUTO_INCREMENT,
  `NomF` text NOT NULL,
  `Description` text NOT NULL,
  `NombreDraw` int(11) NOT NULL,
  `Proprio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idItemF`),
  KEY `itemfixe_ibfk_1` (`Proprio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `itemfixe`
--

INSERT INTO `itemfixe` (`idItemF`, `NomF`, `Description`, `NombreDraw`, `Proprio`) VALUES
(1, 'épée test', 'test d', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `idJoueur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `SlotInventory` int(11) NOT NULL,
  `PuiMag` int(11) NOT NULL,
  `RésiMag` int(11) NOT NULL,
  `Armor` int(11) NOT NULL,
  `Initiative` int(11) NOT NULL,
  `Réflexe` int(11) NOT NULL,
  `Perception` int(11) NOT NULL,
  `Proprio` int(11) NOT NULL,
  `Classe` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Talents` text NOT NULL,
  PRIMARY KEY (`idJoueur`),
  KEY `Proprio` (`Proprio`),
  KEY `joueur_ibfk_class_2` (`Classe`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`idJoueur`, `Nom`, `SlotInventory`, `PuiMag`, `RésiMag`, `Armor`, `Initiative`, `Réflexe`, `Perception`, `Proprio`, `Classe`, `Titre`, `Talents`) VALUES
(1, 'Ren Hiremi', 16, 60, 8, 8, 60, 50, 55, 3, 19, 'Fractureur Du Temps', '- Nage rapide : permet déplacement 70kmh pour 100 pt mana/t\r\n\r\n- Vol : permet de voler à 20kmh pour 100 pt mana/t\r\n\r\n- Cristallisation : permet de cristalliser un sort, lançable par n’importe qui pour le double de 	coût\r\n\r\n- Cuisto : +10 en roll de bouffe\r\n - Le malchanceux : 3 échecs crit en 5 rolls, dernier échec = réussite crit\r\n\r\n- Expert en dépeçage : +30 en dépeçage'),
(2, 'Kostya Kalyy', 14, 20, 0, 0, 35, 65, 20, 6, 17, 'Fractureur du temps', 'Pour toute aide envers oku +20%\r\n\r\n Pour toute aide envers Jackie +20%\r\n\r\nforgestonks (peut craft n’import quelle arme a partir des bons matériaux)'),
(3, 'Hoku Salee', 10, 100, 20, 20, 40, 40, 40, 5, 14, 'Fractureur du temps', 'sans talents :chacun de mes talents sont doublé \r\n\r\noptimisations de la prière: +5 de critique pour les prière \r\n\r\nFervent adepte : commence le combat a 2 de ferveurs'),
(4, 'Jacquie Lafripouille', 10, 70, 10, 0, 20, 60, 50, 2, 9, 'Fractureur du temps', '« il a dit bonjour » +10 pts de social\r\n\r\nnarcolepsie (s\'endort random récupérer 4 de pv et 4 de mana)\r\n\r\nMaman?! (+20 quand aide kostya)\r\n\r\noptimisation de la magie mineur : +10 puissance magique \r\n');

-- --------------------------------------------------------

--
-- Structure de la table `money`
--

DROP TABLE IF EXISTS `money`;
CREATE TABLE IF NOT EXISTS `money` (
  `IdMoney` int(11) NOT NULL AUTO_INCREMENT,
  `PO` int(11) NOT NULL,
  `Argent` int(11) NOT NULL,
  `Bronze` int(11) NOT NULL,
  `Proprio` int(11) NOT NULL,
  PRIMARY KEY (`IdMoney`),
  KEY `Proprio` (`Proprio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `money`
--

INSERT INTO `money` (`IdMoney`, `PO`, `Argent`, `Bronze`, `Proprio`) VALUES
(1, 23, 0, 0, 1),
(2, 6, 0, 0, 3),
(3, 1, 80, 0, 2),
(4, 5, 50, 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `spells`
--

DROP TABLE IF EXISTS `spells`;
CREATE TABLE IF NOT EXISTS `spells` (
  `IdSort` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Description` text NOT NULL,
  `Coût` int(11) DEFAULT NULL,
  `Type` text NOT NULL,
  `Level` int(11) NOT NULL,
  PRIMARY KEY (`IdSort`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `spells`
--

INSERT INTO `spells` (`IdSort`, `Nom`, `Description`, `Coût`, `Type`, `Level`) VALUES
(1, 'Récolte-âme\r\n', 'Vole PM/10 PV', 20, 'Mono', 1),
(2, 'Prison éthérée', 'Fige un ennemi au sol pour 1t', 30, 'mono', 2),
(3, 'Bouclier de Mana', 'Crée un bouclier de PM/5 PV(uniquement magique) sur cible', 20, 'Mono', 3),
(4, 'Arrache-vie', 'inflige PM et convertis en bouclier ', 70, 'mono', 4),
(5, 'Contrôle du vide', 'absorbe une attaque et la convertis en bouclier  ', 60, 'mono', 5),
(6, 'Dénit', 'PM chance de faire fuir un ennemi peu puissant, PM/5  pour ennemis puissants, PM/50 pour boss', 10, 'mono', 6),
(7, 'Cristallisation d\'armure', 'échange AP et AM ', 50, 'mono', 7),
(8, 'Requiem', 'Si vous mourrez ce tours, l\'ennemis qui vous à tué meurs aussi', 100, 'mono', 8),
(9, 'Pompax un max', 'Vole PM/10 PV', 40, 'zone', 9),
(10, 'Conversion d\'énergie pure', 'annule tout les dégâts ce tour et génère un bouclier = dmg x PM/20', 100, 'zone', 10),
(11, 'Soins Rapides', 'soigne PM/5', 40, 'mono', 1),
(12, 'Cicatrisation :  ', 'soigne PM/10 par tours , dois être activé/désactivé ', 20, 'mono', 2),
(13, 'Bouclier des cieux ', 'confère PV/4 de bouclier à tout les aliés proche (2m)', 80, 'zone', 3),
(14, 'Fraternité ', 'amène un alliés jusqu\'au paladins ignorant les contrôles', 10, 'mono', 4),
(15, 'Source de vie', 'rend PV/2 après 1t de charge', 100, 'zone', 5),
(16, 'Battez vous !', 'taunt un ennemi', 10, 'mono', 6),
(17, 'Martyre', 'PVx2 mais Dmg ---> 0 pour 2t', 70, 'mono', 7),
(18, 'Toucher rédempteur', 'rend PV/10 pour chaque attaque physique infligé', NULL, 'passif', 8),
(19, 'Ouverture à la vie', 'tout les soins sont augmenté de PM/10', NULL, 'passif', 9),
(20, 'Nous rentrerons chez nous !', '1t de canalisation, rend PV ,res  et annule les effets négatif', 200, 'zone', 10),
(21, 'conversion runique', 'convertit Dmg x 10 en Mana', NULL, 'passif', 1),
(22, 'Brulure', 'Brule PM/10 sur 2 t ', 30, 'mono', 2),
(23, 'choc de flamme', 'inflige PM/10', 50, 'zone', 3),
(24, 'Bulle', 'silence un ennemi pour 2 t', 20, 'mono', 4),
(25, 'Conversion Magique', 'Convertit Mana Actuel/4 en bouclier', NULL, 'mono', 5),
(26, 'Dévore Mana', 'Rend PM/4 PV', 30, 'mono', 6),
(27, 'Liens de Mana', 'permet de donner ou prendre X mana à un allié ( avec sa permission )', 10, 'mono', 7),
(28, 'Âme alliée', 'crée une arme de mana : 5t, 1d(ManaMax/5)', 100, 'mono', 8),
(29, 'Bombe Magique', 'Convertit Mana Actuel en dégâts ( peu toucher les alliés )', NULL, 'zone', 9),
(30, 'Affluence de Magie', 'Les potions, arme magique, amulettes, bagues et runes ont leur effet doublé', NULL, 'passif', 10),
(31, 'Eviscération', 'les prochains Dés de CC est doublé', 50, 'mono', 1),
(32, 'Découpage', 'le prochain lancer de dé se fait en zone', 40, 'zone', 2),
(33, 'Flash', 'le prochain dé de réflexe obtient -30', 20, 'mono', 3),
(34, 'Voile', 'Permets de ce couvrir d\'ombre et de devenir furtif', 50, 'mono', 4),
(35, 'Poison', 'appliquer sur max 3 armes : inflige empoisonnement ( PM/4 tours pour 2 tours)', NULL, 'passif', 5),
(36, 'Manteau ténébreux', 'permets de camouflé jusqu\'à 6 personne', 100, 'zone', 6),
(37, 'Le cocu', 'relancer tout les dés de CC faisant 1', NULL, 'passif', 7),
(38, 'Poison paralysant', 'appliquer sur max 3 armes : inflige paralysie ( stun pour pm/10 tours )', NULL, 'passif', 8),
(39, 'Fissure du Vide', 'Le prochain CC touche à distance illimité', 50, 'mono', 9),
(40, 'Mais ça one shot ?!?', 'si le Dés de CC atteint le score maximal, double les dégâts du coup', NULL, 'passif', 10),
(41, 'Carquois à rallonge', 'permet de faire + 2 CC ce tours  ', 50, 'mono', 1),
(42, 'Moment critique', 'double vos Dés de CC ce tour', 80, 'mono', 2),
(43, 'Flèche givrante', 'inflige + PM/10 dmg, inflige ralentissement puis immobilisation puis givré', 20, 'mono', 3),
(44, 'Pluie de flèche', 'inflige PM/10 *6 sur des ennemis aléatoire (marche avec flèche givrante)', 80, 'zone', 4),
(45, 'Trouver la faille', '+ 10% les dégâts subit d\'un ennemis touché 1t , max 30% et reset à chaque coup', NULL, 'passif', 5),
(46, 'Flèche chargé', 'inflige PM/10 fois x le nombre de tours passé à charger ce sort (1t de charge = 10pt de mana)', 10, 'mono', 6),
(47, 'Pisteur', 'Perception x 2 dans un environnement naturel', NULL, 'passif', 7),
(48, 'Liés à l\'arme', 'rend en PV Dmg/4', NULL, 'passif', 8),
(49, 'Tir d\'ombre', 'lie les ennemis pour 2 tours (les dégâts subit par un sont subits par les autres)', 100, 'zone', 9),
(50, 'Piou Piou Piou !', 'Si les dégâts d\'un CC est dans la moitié inférieur, +1 CC ce tour', NULL, 'passif', 10),
(51, 'Une tourelle !', 'Pose une tourelle : CC : 1d5 + CCBrut + PM/2 PV/3 ', 50, 'mono', 1),
(52, 'Surcharge !', 'donne un deuxième CC aux tourelles ce tour', 50, 'zone', 2),
(53, 'Petite amélioration', 'améliore une tourelle : + CCBrut + PM/2 + PV/3', 20, 'mono', 3),
(54, 'Auto réparation', 'les tourelles régénèrent PV/12 par tour', NULL, 'passif', 4),
(55, 'Pressons nous un peu !', 'permet de lancer deux sorts par tour', NULL, 'passif', 5),
(56, 'Mécaniser', 'permet de donner +10 à une stat d\'allié, max 1 par allié', NULL, 'passif', 6),
(57, 'Une grosse tourelle !', 'invoque une tourelle 2d10 + CCBrut + PM PV', 100, 'mono', 7),
(58, 'Une mine !', 'pose une mine qui inflige PM', 20, 'mono', 8),
(59, 'Plus de tirs !', '+1 CC par tourelles', NULL, 'passif', 9),
(60, 'Découpeur précis', 'les tourelles inflige 5% des pv max de la cible en dégâts brut supplémentaires', NULL, 'passif', 10),
(61, 'Lame feuille', 'PM/8', 10, 'mono', 1),
(62, 'Grêle', 'PM/20 par t', 10, 'zone', 2),
(63, 'Sphère de flammes', 'PM/4 inesquivable', 20, 'mono', 3),
(64, 'Excavation', 'Créer un mur de granit 5m max', 25, 'zone', 4),
(65, 'Méditation', 'Permets de lancer deux sorts par tour', NULL, 'passif', 5),
(66, 'Armure de Bulle', 'Donne 100% de réflexe pour un tour', 30, 'mono', 6),
(67, 'Foudre', 'foudroie un ennemis PM/2', 50, 'mono', 7),
(68, 'Concentration de Mana', 'au début du tour suivant, rend le double de mana consomé', NULL, 'mono', 8),
(69, 'Forme Astral', 'Copie un ennemis pour 75Mana, Élite 150Mana, Boss 300Mana', NULL, 'mono', 9),
(70, 'Déchainer les éléments', '-90% PV et -100% Mana à la fin du tours, permets d\'envoyer 6 sorts gratuitement', NULL, 'mono', 10),
(71, 'Flagellation', 'inflige PM/2', 50, 'mono', 1),
(72, 'Consécration', 'inflige PM/2', 100, 'zone', 2),
(73, 'Vœu de Malheur', 'Inflige PM/2 régenère (PM/4) PV', 80, 'mono', 3),
(74, 'Radinerie', 'Inflige PM/2 régen (PM)Mana', 100, 'mono', 4),
(75, 'Fanatisme', 'rend un allié fanatique, 25% des dégâts sont convertit en pv pour lui', NULL, 'passif', 5),
(76, 'Cage du païen', 'Emprisonne jusqu\'à deux ennemis pour 2t', 60, 'zone', 6),
(77, 'Mots : souffrance', 'inflige à un ennemis tout les dégâts qu\'il à infligé', 100, 'mono', 7),
(78, 'Mots : rédemption', 'fait passer un ennemis dans votre camp, 25% pour les élites, 10% pour les boss', 100, 'mono', 8),
(79, 'Mots : jugement', 'stase un ennemis pour une durée de temps de votre choix', 150, 'mono', 9),
(80, 'Jugement Divin', 'inflige 100% des PV d\'un ennemis à celui-ci en dégâts brut', 300, 'mono', 10),
(81, 'Nécrose', 'inflige PM/4 + PM/20 après 1 tour', 30, 'mono', 1),
(82, 'Succion d\'âme', 'inflige PM/10, rend PM/10 PV', 0, 'mono', 2),
(83, 'Fantassin des ombres', 'invoque une goule 10PV, 1d6 de dégâts ( max 2 goules )', 50, 'mono', 3),
(84, 'Brute d\'ombre ', 'invoque une goule 30PV, 1d6 de dégâts ( max 2 goules )', 100, 'mono', 4),
(85, 'Conversion sinistre', 'permet de convertir X PV en X fois 10 Mana', NULL, 'mono', 5),
(86, 'Conversion d\'âme', 'chaque mort vous rend 4PV', NULL, 'passif', 6),
(87, 'Sombre dessein', 'inflige PM/4 à tout les ennemis pendant 3 tours', 80, 'zone', 7),
(88, 'Poison Nécrotique mortel', 'inflige PM/20 par tour, cumulable, dure jusqu\'à ce que l\'ennemi soit mort', 20, 'mono', 8),
(89, 'Enfer Nécrotique', 'inflige Poison Nécrotique mortel à toutes les cibles ennemies', 100, 'zone', 9),
(90, 'Dragon des ombres ', '|PV = (PMx2) |CC : 1D(PM/4) |AP :20 |AM:20      (Max : 1)', 150, 'mono', 10),
(91, 'William Saurin !', 'Permet de concocter des petits plats mais aussi des Potions de soins (Max:5)  : + (PM/5)PV', 30, 'passif', 1),
(92, 'Ça brille !', 'Potions de Mana(Max:3) : + (PM)Mana', NULL, 'passif', 2),
(93, 'Ça ce boit ça ?', 'Potion de résurrection(Max:1) : réanime avec 50% PV 50% Mana', 80, 'passif', 3),
(94, 'Potion mystère !', '1d6 : \r\n1: rend 5PV                                                                          \r\n2: donne 10PB \r\n3: Gèle pour 2t\r\n4: Brûle PM/10 pour 5t \r\n5: Stase pour 2t \r\n6: doubles les stats pour 2t', 20, 'mono', 4),
(95, 'Joli caillou', 'Permet de créer des runes prenants deux places d\'inventaire et ajoutant +5 à une stat', NULL, 'passif', 5),
(96, 'Invocation : Élémentaire des abysses', 'Invoque une créature \r\nPV : 20 \r\n1DPM/2', 50, 'mono', 6),
(97, 'Invocation :', 'Invoque une créature :\r\nNom : Golem de flammes\r\nPV 30 \r\n1DPM/2 + PM/2 de brûlure au tour suivant                                ', 100, 'mono', 7),
(98, 'Invocation : Gardien de glaces', 'Invoque une créature :\r\nNom : Gardien de glaces \r\nPV 50 \r\n1DPM/5 ralentiseement, root, gèle AP=PM/2 AM=PM/2', 100, 'mono', 8),
(99, 'Optimisation', 'Les runes coûtent -1 place d\'inventaire et les potions max sont doublés', NULL, 'passif', 9),
(100, 'Intellect arcanique', 'permets de lancer n\'importe quel sorts d\'une autre classe pour le double du coût', NULL, 'passif', 10),
(101, 'Liens de Vie', 'rends PM/10 par tour, à activer, nombre de cible illimité', 10, 'mono', 1),
(102, 'Nova de soin', 'rends PM/5 aux alliés', 30, 'zone', 2),
(103, 'Concentration', 'doit être activé, rend PM/2 point de Mana', 0, 'mono', 3),
(104, 'Régénération des tissus', 'rend 30% des Pv de la cible', 40, 'mono', 4),
(105, 'Debout !', 'Réanime un allié (utilisable une fois par allié par combat)', 80, 'mono', 5),
(106, 'Infusion vital', 'Lie deux alliés plus le lanceur, après un tours, les % de PV de tous devienne le plus haut', 100, 'multicible', 6),
(107, 'Ferveur du sang', 'donne 50% de vol de vie à un allié pour le tour', 50, 'mono', 7),
(108, 'Trêve', 'réduit TOUS les dégâts à 1 ce tour', 100, 'zone', 8),
(109, 'Pacification ', 'rend à toutes les unités dans un rayon de 100m 100% de leurs PV', 100, 'zone', 9),
(110, 'Phénix', 'réanime et réduit les pv max de 50% pour le reste du combat, ne marche plus en dessous de 5 PV MAX', NULL, 'passif', 10),
(111, 'Célérité', 'donne une action supplémentaire ( CC ou sort ) ', 20, 'mono', 1),
(112, 'Boost', '(PM/20) x une stat au choix pour 1t', 20, 'mono', 2),
(113, 'Aura,Vent', 'donne +(PM) réflexe pour 1t', 50, 'zone', 3),
(114, 'Aura,Energie', '(PM) x dmg pour 1t', 50, 'zone', 4),
(115, 'Fragmentation de l\'Esprit', 'Permet de lancer 2 sorts par tour, réduit à 0 réflexe', 0, 'mono', 5),
(116, 'Armure,Terre', 'dure 3t, (PM/20) x AM et AP', 80, 'mono', 6),
(117, 'Armure,Lames', 'dure 3t, (PM/20) x  dégâts physiques', 80, 'mono', 7),
(118, 'Armure,Convection', 'dure 3t, (PM/20) x  dégâts magiques', 80, 'mono', 8),
(119, 'Moisson de Mana', 'rends PM de MANA', 0, 'mono', 9),
(120, 'Afflux de puissance', 'transfert les stats de l\'équipe sur un membre de l\'équipe et inflige surchauffe : -40%PV/t', NULL, 'mono', 10),
(121, 'Poigne de givre ', 'Vos 3 prochain CC gèle l\'ennemi pour 1t, inflige CC + PM/10', 30, 'mono', 1),
(122, 'Nova de glace', 'Gèle tout les ennemis dans un rayon de 5m autour de vous pour 2t', 50, 'zone', 2),
(123, 'Sans scrupule', 'Chaque entité subissant un contrôle rajoute +20 PM', NULL, 'passif', 3),
(124, 'Frappes fantomatiques', 'Inflige 3 CC dans une zone de 3m en demi cercle, réduit l\'armure magique de 10 par coup', 70, 'zone ', 4),
(125, 'La mort frappe 7 fois', 'Devient inciblable, Frappe un ennemis 7 fois infligeant (PM/5)% de ses Pv Max', 100, 'mono', 5),
(126, 'Changement de phase', 'Téléporte le lanceur à porté d\'attaque de la cible', 30, 'mono', 6),
(127, 'Conversion de la souffrance', 'vous générez 50% des dégâts infligés en bouclier', NULL, 'passif', 7),
(128, 'Styx', 'crée un siphon d\'âme autour de vous, infligeant (PM/5)%PV par tour pour 5t', 80, 'zone', 8),
(129, 'allonge éthérée', 'durant votre prochain tour, vos attaques on une portée augmenté de 2m et touche en zone', 20, 'mono', 9),
(130, 'Yndasyss, les milles âmes', 'invoque Yndassys pour 3t (PMx10)PV 1d(PM) PM armure et armure magique', 150, 'mono', 10),
(131, 'Apaiser', 'Soigne PM/5 sur cible', 1, 'mono', 1),
(132, 'Enchaîner', 'Inflige 3 CC sur cible, le troisième coup étourdit pour un tour', 3, 'mono', 2),
(133, 'Soumettez vous !', 'PM/4 sur cible, chance de pacifier (30/10/1 pour base/élite/boss)', 5, 'mono', 3),
(134, 'Frénésie du combat', 'Votre dévouement stimule vos alliés, +5 initiative par ferveur pour les aliés', NULL, 'passif', 4),
(135, 'Égide céleste', 'redirige tout les dégâts infligé à vos alliés vers vous pour 3t', 10, 'zone', 5),
(136, 'Rage de vaincre', 'Double votre ferveur max et les points de ferveur générés par les coups réussit', NULL, 'passif', 6),
(137, 'Galvaniser la haine', 'Les cibles auxquelles vous infligez des dégâts sont taunt pour 2t', NULL, 'passif', 7),
(138, 'Ravitaillement des troupes', 'Rend ((PM/10)x ferveur) PV aux alliés, consume la ferveur', NULL, 'multicible', 8),
(139, 'Sacrifice utile', 'Sacrifie X points de vie pour X points de ferveur', NULL, 'mono', 9),
(140, 'Pour la gloire !', 'Tant que vous êtes debout, vos alliés ne peuvent descendre en dessous de 1pv, 5t', 20, 'multicibles', 10),
(141, 'Lame d\'énergie', 'lance une lame d\'énergie à distance (PM/8)', 10, 'mono', 1),
(142, 'Éventail de lames', 'lance 5 lames d\'énergie à distance 5x (PM/8)', 50, 'multicibles', 2),
(143, 'Cycle de la magie', '+(PM) Mana max, +(Mana/10)PM, non cumulables', NULL, 'passif', 3),
(144, 'Impulsion', 'PM/4 Zone autours du lanceur, 30% de chance de paralyser pour 1t', 60, 'zone', 4),
(145, 'Transcendance', 'vous perdez tous votre PM jusqu\'à 10 min, transforme la PM/2 perdus en armure magique et physique', 0, 'mono', 5),
(146, 'Recycler', 'Permet de transformer n\'importe quel objet en Mana', NULL, 'passif', 6),
(147, 'Création, passage vers les souvenirs', 'crée un trou de verre vers un lieu déjà visité', 20, 'zone', 7),
(148, 'Création, passage vers les ténèbres', 'crée un trou noir pour 5t qui attire ennemis et alliés, stase au contact ', 100, 'mono', 8),
(149, 'Récolteur des énergies perdus', 'Tout point de vie perdu ( ennemi ou ami ) vous redonne (PM/10) Mana', NULL, 'passif', 9),
(150, 'Implosion d\'énergie absolue', 'Vous infligez (PM x (Mana/10)) dans une zone de PM mètres, stase jusqu\'à 100% Mana, -100% Mana', NULL, 'zone', 10),
(151, 'Oublié', 'Passer votre tour vous rend furtif, en états furtif les dégâts infligé sont doublés', NULL, 'passif', 1),
(152, 'Jouer le jeu', 'lancez 1d6, si pair, les dégâts sont triplé, si impaire, vous vous infligez les dégâts', 20, 'mono', 2),
(153, 'Brise armure', 'infligez un CC, -30 d\'armure pour l\'ennemi pour 3t', 50, 'mono', 3),
(154, 'Impact guidé', 'Vos attaques ne peuvent pas êtres esquivés', NULL, 'passif', 4),
(155, 'lancer de couteau', 'projette 10 lames ciblant la cible la plus proche pour PM/8', 100, 'multicibles', 5),
(156, 'Voile', 'Devenez constamment furtif pour 3t ', 30, 'mono', 6),
(157, 'Ombre consciente', 'votre ombre attaque après vous, tout vos CC sont doublés', NULL, 'passif', 7),
(158, 'Sans un bruit', 'tuer alors que vous êtes furtif ne brise pas la furtivité et double le prochain CC, cumulable', NULL, 'passif', 8),
(159, 'Danse avec les lames ', 'votre réflexe est doublé', NULL, 'mono', 9),
(160, 'Les milles entailles', 'inflige X CC à tout ennemis dans un rayon de 5m, X égale le nbr d\'ennemis', 100, 'zone', 10),
(161, 'Générer une munition', 'Permets de transformer n\'importe quel objet en balles (3 par tours ) ( 20 par stacks ) ', NULL, 'passif', 1),
(162, 'Concentration', '-50% perception x2 dmg', 1, 'mono', 2),
(163, 'Balle absolutoire', 'réduit l\'armure de la cible de 50% en armure magique et physique', 3, 'mono', 3),
(164, 'Information tactique', 'Permets de connaitre les stats de toute personne touché par un de vos tir', NULL, 'passif', 4),
(165, 'Pleine puissance !', 'Le prochain tir fait dmgx4 inflige des dégâts brut et transperce jusqu\'à 3 cibles', 5, 'mono', 5),
(166, 'Tir parfait', 'les jets pour tirer sont critique si en dessous de 15', NULL, 'passif', 6),
(167, 'Ball-trap', 'Tire une balle-filet qui immobilise pour 2t', 3, 'mono', 7),
(168, 'Troisième bras', 'Vous n\'avez plus besoin de recharger', NULL, 'passif', 8),
(169, 'Balles nécrosantes', 'vos balles inflige 5% PVmax de la cible en dégâts brut supplémentaire', NULL, 'passif', 9),
(170, 'Fardeau', 'Inflige (2^X)xdmg de dégâts brut X étant le nombre de balle utilisé par Fardeau', NULL, 'mono', 10),
(171, 'Mode Magie/Mode physique', 'Tout vos dégâts sont magiques/ Tout vos dégâts sont physique,compte pas comme une action', 0, 'mono', 1),
(172, 'Tranche', 'inflige PM/10 ( portée illimitée / inflige saignement )', 20, 'mono', 2),
(173, 'Recharge', 'Rends PM/5 ( Mana x5 ( ou équivalent ) / Pv )', 30, 'mono', 3),
(174, 'Jet d\'acide', 'inflige PM/10 pendant 3t ( réduit la résistance magique de 30 / réduit l\'armure physique de 30 )', 60, 'mono', 4),
(175, 'Surtension', 'Coût du sort surchargé X 2, dégâts = dégâts brut, les deux effets de mode sont infligé', NULL, 'passif', 5),
(176, 'Optimisation du générateur', 'double l\'énergie max et la regen d\'énergie', NULL, 'passif', 6),
(177, 'Zap', 'inflige PM/10 en cône sur 3m ( Silence / Aveugle )', 50, 'mono', 7),
(178, 'Missiles-Harpons', 'inflige 2 x PM/20 à toutes les cibles visibles ( rends 5 énergie par impact / étourdit )', 100, 'multicibles', 8),
(179, 'Générateur auxiliaire', 'sacrifiez 10 (max : -100 ) points d\'armure pour 10 point d\'énergie max et 1 de regen', NULL, 'passif', 9),
(180, 'Gros Bouton rouge ', 'Lance un missile qui tombe après 1t, inflige PM x 2 ( Effet de zone / Tire deux missiles )', 200, 'mono', 10),
(181, 'Érosion', 'inflige PM/4 dégâts brut', 3, 'mono', 1),
(182, 'Frappe cinétique', 'PM/20 x dégâts physique pour ce tour sur cible, sur soit ne compte pas comme une action', 1, 'mono', 2),
(183, 'Intrication', 'permets de ce téléporter dans une zone visible, ne compte pas comme une action', 1, 'mono', 3),
(184, 'Prendre le temps', 'Chaque personnage sautant sont tour, vous rajoute PM/20 sable', NULL, 'passif', 4),
(185, 'Écho', 'crée une copie de vous même qui joue après votre tour, dure PM/4 ', 10, 'mono', 5),
(186, 'Boucle temporel', 'stase la cible, dois être réactivé pour annuler l\'effet', 5, 'mono', 6),
(187, 'Échiquier', 'stase et permet d\'effectuer un déplacement de chaque entité dans un rayon de PM/2 mètres', 15, 'zone\r\n', 7),
(188, 'Voler leurs temps', 'regagne (PM/6)/(PM/4)/(PM/2) de sable par ennemis tuer ( base/Élite/Boss)', NULL, 'passif', 8),
(189, 'Tesseract', 'Permet de créer une dimension-tesseract, modifiable en tout points ( temps, dimension, contenu)', 100, 'mono', 9),
(190, 'Il n\'y a pas de destin, que des choix ', 'permet de revenir à un moment donné du temps de la session active', 50, 'mono', 10),
(191, 'Burst !', 'Inflige PM', 5, 'mono', 1),
(192, 'Investissement', 'Rend PM Mana à un allié', 2, 'mono', 2),
(193, 'Garde royale ', 'Invoque un garde \r\n30 PV \r\n30 armure physique et magique, \r\n1d5 \r\nMax : 2', 0, 'mono', 3),
(194, 'Calamité', 'réduit les cooldown actifs de 1/2/3 pour chaque participation à un kill', NULL, 'passif', 4),
(195, 'Je l\'interdit !', 'Annule une action utilisable n\'importe quand', 10, 'mono', 5),
(196, 'Appel au gardien', 'Invoque un titan de marbre de 100pv 40 armure physique et magique, 1d10, Max : 1', 20, 'mono', 6),
(197, 'Purification', 'annule tout les effets négatif et rend PM% de point de vie (max 100%)', 10, 'mono', 7),
(198, 'Voix du roi', 'Force une personne à obéir', 25, 'mono', 8),
(199, 'Puissance partagé', 'Gagne PM/10 de chaque alliés tant qu\'il sont en vie', NULL, 'passif', 9),
(200, 'Cataclysme', 'tant que catalysé, inflige PM', 50, 'zone', 10),
(201, 'Création de gemme', 'Permet de créer une gemme pouvant contenir une âme, 1d100 :(1/1-5/5-25/25-50)', 20, 'mono', 1),
(202, 'Taphophobie', 'Inflige PM/5 et immobilise', 35, 'mono', 2),
(203, 'Psychose', 'Inflige PM/5 de dégâts brut', 50, 'mono', 3),
(204, 'Maîtrise des cristaux', 'Permet de générer la puissance de gemme du choix contre un coût x3', NULL, 'passif', 4),
(205, 'Vision des enfers', 'stun les ennemis proches pour 1t +1 de frayeur par ennemi', 80, 'zone', 5),
(206, 'Invocation de marionnettes', 'invoque 2 marionnettes 5PV, 1d4', 20, 'mono', 6),
(207, 'Voile du faucheur', 'invoque une monture sans Pv +30 initiative +50 reflexe', 50, 'mono', 7),
(208, 'Invocation, Faux du moissonneur', 'invoque une arme infligeant 1dPM', 100, 'mono', 8),
(209, 'Rappel des âmes', 'permets de sacrifier des invocations, restituant leurs coûts (200/100/50/10) ', NULL, 'passif', 9),
(210, 'Marqué par la mort', 'marque une cible qui mourra après 3t, intangible', 400, 'mono', 10),
(211, 'Héritage', 'Vous bénéficiez de tous les sorts de l\'alchimiste', NULL, 'passif', 1),
(212, 'Éphémère, Magie', 'Consommable, +(PM/2)PM pour 3t, Max: 2', 40, 'mono', 2),
(213, 'Éphémère, Physique', 'Consommable, (PM/20)x dmg pour 3t, Max: 2', 40, 'mono', 3),
(214, 'Éphémère, Résistance', 'Consommable, +(PM/10)Armure physique et magique pour 3t, Max: 2', 40, 'mono', 4),
(215, 'Création d\'enchantement', 'Permets de faire deux enchantement par session ( multivalent )', NULL, 'passif', 5),
(216, 'Pat Pat', 'Utilisable une fois par ennemis, ne marche pas sur les robots, 30% de chance d\'apprivoiser', 50, 'mono', 6),
(217, 'La Giga Pompote', 'quand vous faite un plat, rend au choix, 100% des PV ou 100% Mana', NULL, 'passif', 7),
(218, 'Éveil de potion ', 'Double l\'effet d\'une potion mais double aussi son coût de création', NULL, 'mono', 8),
(219, 'Éphémère, phœnix', 'Consumé en cas de mort, ressuscite avec (PM/2)% PV et Mana, Max : 1', 100, 'mono', 9),
(220, 'Optimisation des lois magiques', 'passe le cap à 4 enchantements et débloque multivalent', NULL, 'passif', 10),
(221, 'Posture du Phénix', 'Vos CC soigne l\'allié avec le moins de pv restant pour PM/10', 20, 'mono', 1),
(222, 'Posture du tigre', 'Vos CC multiplie les prochains dégâts du prochain allié de PM/20', 20, 'mono', 2),
(223, 'Posture de l\'ours ', 'Vos CC réduise l\'armure de la cible de 50%', 20, 'mono', 3),
(224, 'Maitrise des esprits', 'Vos postures de compte pas comme des actions', NULL, 'passif', 4),
(225, 'Paume sacrée', 'marque l\'allié pour 2t, s\'il meurt marqué, ressuscite à 100% des pv', 60, 'mono', 5),
(226, 'Adaptation du mouvement', 'Vous mets au même niveau d\'initiative que l\'allié ciblé', 40, 'mono', 6),
(227, 'Posture du loup', 'Vos CC augmente l\'esquive et l\'initiative de PM/5 pour vous et votre prochain allié jusqu\'à switch', 40, 'mono', 7),
(228, 'Posture du lotus', 'Vos CC rende PM/2 Mana ( ou équivalent )', 40, 'mono', 8),
(229, 'Frappe de l\'âme ', 'Stase la cible pour 7t, tout dégâts infligé à la cible lui sera infligé à la fin de la stase en brut', 60, 'mono', 9),
(230, 'Art du poing', 'Vous pouvez infliger trois CC par tour', NULL, 'passif', 10),
(231, 'Mode archonte', 'Vous fusionnez avec un alliés, vos stats sont superposé ( sauf stuff | PV-->PB ) et vous joué après lui', 50, 'mono', 1),
(232, 'Infusion d\'énergie', 'rends PM/5 PV à un allié, si trop de pv sont rendus, donne en plus (PM/4) armure physique/magique', 20, 'mono', 2),
(233, 'Boost métabolique', 'donne +(PM/2) reflexe et initiative à un alliés jusqu\'à la fin du combat', 20, 'mono', 3),
(234, 'Projection d\'aura', 'rajoute +(PM/10) à chaque dégâts infligé par la cible pour 1t', 20, 'mono', 4),
(235, 'Résonance énergétique', 'en mode archonte, vos sorts son appliqué à votre fusion en plus de votre cible', NULL, 'mono', 5),
(236, 'Concéder ', 'Vous donner votre tour à un autre joueur', 0, 'mono', 6),
(237, 'Dissection énergétique', 'projette un laser infligeant (PM/20) PVmax des cibles', 40, 'zone', 7),
(238, 'Garde tempête', 'rajoute PM/2 reflexe et donne un bouclier anti-projectiles aux joueurs pour le combat', 100, 'zone', 8),
(239, 'Synchronisation des esprits', 'gagnez +(PM/10) de stats (Sauf PV et Mana Max ) par membre dans votre groupe', NULL, 'passif', 9),
(240, 'Trop de puissance', '(PM/20)x Stats pour le combat sur soit, vos PV deviennes des PB et vos soins sont annulés', 100, 'mono', 10);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `arme`
--
ALTER TABLE `arme`
  ADD CONSTRAINT `arme_enchant_ibfk_4` FOREIGN KEY (`Enchant4`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `arme_enchant_ibfk_5` FOREIGN KEY (`Enchant5`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `arme_enchant_ibfk_6` FOREIGN KEY (`Enchant6`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `arme_ibfk_1` FOREIGN KEY (`Enchant1`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `arme_ibfk_2` FOREIGN KEY (`Enchant2`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `arme_ibfk_3` FOREIGN KEY (`Enchant3`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `arme_ibfk_4` FOREIGN KEY (`Proprio`) REFERENCES `joueur` (`idJoueur`);

--
-- Contraintes pour la table `armure`
--
ALTER TABLE `armure`
  ADD CONSTRAINT `armure_ibfk_1` FOREIGN KEY (`Proprio`) REFERENCES `joueur` (`idJoueur`),
  ADD CONSTRAINT `armure_ibfk_enchant_1` FOREIGN KEY (`Enchant1`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `armure_ibfk_enchant_2` FOREIGN KEY (`Enchant2`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `armure_ibfk_enchant_3` FOREIGN KEY (`Enchant3`) REFERENCES `enchants` (`idEnchant`),
  ADD CONSTRAINT `armure_ibfk_enchant_4` FOREIGN KEY (`Enchant4`) REFERENCES `enchants` (`idEnchant`);

--
-- Contraintes pour la table `bonus`
--
ALTER TABLE `bonus`
  ADD CONSTRAINT `bonus_ibfk_1` FOREIGN KEY (`Proprio`) REFERENCES `joueur` (`idJoueur`);

--
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`Sort1`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_10` FOREIGN KEY (`Sort10`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_2` FOREIGN KEY (`Sort2`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_3` FOREIGN KEY (`Sort3`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_4` FOREIGN KEY (`Sort4`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_5` FOREIGN KEY (`Sort5`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_6` FOREIGN KEY (`Sort6`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_7` FOREIGN KEY (`Sort7`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_8` FOREIGN KEY (`Sort8`) REFERENCES `spells` (`IdSort`),
  ADD CONSTRAINT `classe_ibfk_9` FOREIGN KEY (`Sort9`) REFERENCES `spells` (`IdSort`);

--
-- Contraintes pour la table `itemconso`
--
ALTER TABLE `itemconso`
  ADD CONSTRAINT `Proprio` FOREIGN KEY (`Proprio`) REFERENCES `joueur` (`idJoueur`);

--
-- Contraintes pour la table `itemfixe`
--
ALTER TABLE `itemfixe`
  ADD CONSTRAINT `itemfixe_ibfk_1` FOREIGN KEY (`Proprio`) REFERENCES `joueur` (`idJoueur`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`Proprio`) REFERENCES `compte` (`idCompte`),
  ADD CONSTRAINT `joueur_ibfk_class_2` FOREIGN KEY (`Classe`) REFERENCES `classe` (`idClasse`);

--
-- Contraintes pour la table `money`
--
ALTER TABLE `money`
  ADD CONSTRAINT `money_ibfk_1` FOREIGN KEY (`Proprio`) REFERENCES `joueur` (`idJoueur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
