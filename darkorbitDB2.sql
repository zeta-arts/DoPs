-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 19. 06 2013 kl. 18:06:47
-- Serverversion: 5.5.27
-- PHP-version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `darkorbit`
--
CREATE DATABASE IF NOT EXISTS `darkorbit` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `darkorbit`;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `clan`
--

CREATE TABLE IF NOT EXISTS `clan` (
  `clanID` int(11) NOT NULL,
  `clanName` varchar(255) NOT NULL,
  `tagName` varchar(255) NOT NULL,
  `memberCount` int(2) NOT NULL DEFAULT '1' COMMENT 'Can''t be more than 50',
  PRIMARY KEY (`clanID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `clan`
--

INSERT INTO `clan` (`clanID`, `clanName`, `tagName`, `memberCount`) VALUES
(1, 'Administradores', 'adm', 1),
(2, 'Developer', 'Dev', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `etype` varchar(255) NOT NULL,
  `gfx` int(50) NOT NULL DEFAULT '0',
  `effect` text NOT NULL,
  `uridium` double(255,1) NOT NULL DEFAULT '-1.0',
  `credits` int(255) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`),
  KEY `1` (`id`),
  KEY `2` (`name`),
  KEY `3` (`etype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `etype`, `gfx`, `effect`, `uridium`, `credits`) VALUES
(1, 'LF-1', 'laser', 1, 'D40', -1.0, 10000),
(2, 'MP-1', 'laser', 2, 'D60', -1.0, 40000),
(3, 'LF-2', 'laser', 3, 'D100', 5000.0, -1),
(4, 'LF-3', 'laser', 4, 'D150', 10000.0, -1),
(5, 'HST-1', 'laser', 11, 'HM3', -1.0, 500000),
(6, 'HST-2', 'laser', 12, 'HM5', 15000.0, -1),
(7, 'LCB-10', 'battery', 1, '', -1.0, 10),
(8, 'MCB-25', 'battery', 2, '', 0.5, -1),
(9, 'MCB-50', 'battery', 3, '', 1.0, -1),
(10, 'UCB-100', 'battery', 4, '', 2.5, -1),
(11, 'SAB-50', 'battery', 5, '', 1.0, -1),
(12, 'RSB-75', 'battery', 6, '', 5.0, -1),
(13, 'R-310', 'rocket', 1, 'D1000', -1.0, 100),
(14, 'PLT-2026', 'rocket', 2, 'D2000', -1.0, 500),
(15, 'PLT-2021', 'rocket', 3, 'D4000', 5.0, -1),
(16, 'PLD-8', 'rocket', 4, 'DIS3', 100.0, -1),
(17, 'PLT-3030', 'rocket', 5, 'D6000', 7.0, -1),
(18, 'ACM-1', 'rocket', 11, 'DM20', 100.0, -1),
(19, 'HSTRM-01', 'rocket', 50, 'D5000', 25.0, -1),
(20, 'UBR-100', 'rocket', 51, 'D8000', 30.0, -1),
(21, 'ECO-10', 'rocket', 52, 'D2400', -1.0, 1500),
(22, 'G3N-1010', 'generator', 1, 'V2', -1.0, 2000),
(23, 'G3N-2010', 'generator', 2, 'V3', -1.0, 4000),
(24, 'G3N-3210', 'generator', 3, 'V4', -1.0, 8000),
(25, 'G3N-3310', 'generator', 4, 'V5', -1.0, 16000),
(26, 'G3N-6900', 'generator', 5, 'V7', 1000.0, -1),
(27, 'G3N-7900', 'generator', 6, 'V10', 2000.0, -1),
(28, 'SG3N-A01', 'generator', 7, 'E1000|40', -1.0, 8000),
(29, 'SG3N-A02', 'generator', 8, 'E2000|50', -1.0, 16000),
(30, 'SG3N-B01', 'generator', 9, 'E4000|70', 2500.0, -1),
(31, 'SG3N-A03', 'generator', 10, 'E5000|60', -1.0, 256000),
(32, 'SG3N-B02', 'generator', 11, 'E10000|80', 10000.0, -1),
(33, 'LF-4', 'laser', 0, 'D200', -1.0, -1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `maps`
--

CREATE TABLE IF NOT EXISTS `maps` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL DEFAULT '',
  `Portals` text NOT NULL,
  `NPCS` text NOT NULL,
  `isStarterMap` enum('0','1') NOT NULL DEFAULT '0',
  `factionId` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `maps`
--

INSERT INTO `maps` (`id`, `Name`, `Portals`, `NPCS`, `isStarterMap`, `factionId`) VALUES
(1, '1-1', '[{"Id":1,"x":"18500","y":"11500","newX":"2000","newY":"2000","Map":2}]', '[{"npcId":84,"Count":50}]', '1', 1),
(2, '1-2', '[{"Id":1,"x":"2000","y":"2000","newX":"18500","newY":"11500","Map":1},{"Id":2,"x":"18500","y":"2000","newX":"2000","newY":"11500","Map":3}]', '[{"npcId":84,"Count":50},{"npcId":71,"Count":25}]', '1', 1),
(3, '1-3', '[{"Id":1,"x":"2000","y":"11500","newX":"18500","newY":"2000","Map":2}]', '[{"npcId":71,"Count":25},{"npcId":72,"Count":10}]', '0', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `rank`
--

CREATE TABLE IF NOT EXISTS `rank` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `percentage` double(11,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `rank`
--

INSERT INTO `rank` (`id`, `name`, `percentage`) VALUES
(1, 'Basic Space Pilot', 20.00),
(2, 'Space Pilot', 12.39),
(3, 'Chief Space Pilot', 10.00),
(4, 'Basic Sergeant', 9.00),
(5, 'Sergeant', 8.00),
(6, 'Chief Sergeant', 7.00),
(7, 'Basic Lieutenant', 6.00),
(8, 'Lieutenant', 5.00),
(9, 'Chief Lieutenant', 4.50),
(10, 'Basic Captain', 4.00),
(11, 'Captain', 3.50),
(12, 'Chief Captain', 3.00),
(13, 'Basic Major', 2.50),
(14, 'Major', 2.00),
(15, 'Chief Major', 1.50),
(16, 'Basic Colonel', 1.00),
(17, 'Colonel', 0.50),
(18, 'Chief Colonel', 0.10),
(19, 'Basic General', 0.01),
(20, 'General', 0.00),
(99, 'Administrator', 0.00),
(21, 'Administrator', 0.00),
(22, 'Wanted', 0.00);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `server_1_players`
--

CREATE TABLE IF NOT EXISTS `server_1_players` (
  `playerID` int(255) NOT NULL AUTO_INCREMENT,
  `userID` int(255) NOT NULL,
  `tokenId` bigint(20) NOT NULL DEFAULT '0',
  `shipId` smallint(11) NOT NULL DEFAULT '1',
  `factionId` smallint(1) NOT NULL DEFAULT '0',
  `mapId` smallint(30) NOT NULL DEFAULT '1',
  `x` varchar(5) NOT NULL DEFAULT '1000',
  `y` varchar(5) NOT NULL DEFAULT '1000',
  `settings` text NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '1' COMMENT '1: Basic Space Pilot',
  `premium` int(1) NOT NULL DEFAULT '1' COMMENT '0: No, Premium | 1: Yes, Premium',
  `level` int(11) NOT NULL DEFAULT '1',
  `uav` varchar(255) NOT NULL DEFAULT '3/3-25-25-25,3/4-25-25-25-25,3/3-25-25-25',
  `clanId` int(11) NOT NULL DEFAULT '0',
  `uri` bigint(255) NOT NULL DEFAULT '500000',
  `exp` bigint(255) NOT NULL DEFAULT '0',
  `credits` bigint(255) NOT NULL DEFAULT '2500000',
  `jackpot` double(50,2) NOT NULL DEFAULT '0.00',
  `Health` bigint(255) NOT NULL DEFAULT '4000',
  `maxHealth` bigint(255) NOT NULL DEFAULT '4000',
  `shield` bigint(255) NOT NULL DEFAULT '0',
  `maxShield` bigint(255) NOT NULL DEFAULT '0',
  `Nanohull` bigint(255) NOT NULL DEFAULT '0',
  `MaxNanohull` bigint(255) NOT NULL DEFAULT '0',
  `speed` int(11) NOT NULL DEFAULT '320',
  `honor` bigint(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`playerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=1004 ;

--
-- Data dump for tabellen `server_1_players`
--

INSERT INTO `server_1_players` (`playerID`, `userID`, `tokenId`, `shipId`, `factionId`, `mapId`, `x`, `y`, `settings`, `rank`, `premium`, `level`, `uav`, `clanId`, `uri`, `exp`, `credits`, `jackpot`, `Health`, `maxHealth`, `shield`, `maxShield`, `Nanohull`, `MaxNanohull`, `speed`, `honor`) VALUES
(1000, 1, 2322130013, 1, 1, 1, '868', '1077', '{"SET":"1|1|1|1|1|1|1|1|1|1|1|0|0|1|1|0|0|1|1|0|0|1|1|1|1","MINIMAP_SCALE":"3|8","DISPLAY_PLAYER_NAMES":true,"DISPLAY_CHAT":true,"PLAY_MUSIC":true,"PLAY_SFX":true,"BAR_STATUS":"23,0,24,0,25,1,26,0,27,0","WINDOW_SETTINGS":"3|0,376,6,1,1,601,6,1,3,821,251,1,5,10,10,1,10,4,330,1,13,315,122,0,20,7,544,1,22,475,260,0,23,1060,131,1,24,412,97,0\\n\\u0000","AUTO_REFINEMENT":false,"QUICKSLOT_STOP_ATTACK":false,"DOUBLECLICK_ATTACK":true,"AUTO_START":false,"DISPLAY_NOTIFICATIONS":true,"SHOW_DRONES":true,"DISPLAY_WINDOW_BACKGROUND":true,"ALWAYS_DRAGGABLE_WINDOWS":true,"PRELOAD_USER_SHIPS":false,"QUALITY_PRESETTING":3,"QUALITY_CUSTOMIZED":0,"QUALITY_BACKGROUND":3,"QUALITY_POIZONE":3,"QUALITY_SHIP":3,"QUALITY_ENGINE":3,"QUALITY_COLLECTABLE":3,"QUALITY_ATTACK":3,"QUALITY_EFFECT":3,"QUALITY_EXPLOSION":3,"QUICKBAR_SLOT":"-1,-1,-1,-1,-1,-1,-1,-1,-1,-1","SLOTMENU_POSITION":"313,451","SLOTMENU_ORDER":0}', 12, 1, 9, '3/3-25-25-25,3/4-25-25-25-25,3/3-25-25-25', 1, 500000, 999999, 99999, 0.00, 999, 999, 1000, 1000, 0, 0, 320, 999),
(1002, 3, 1881687555, 66, 3, 1, '522', '1045', '{"SET":"1|1|1|1|1|1|1|1|1|1|1|0|0|1|1|0|0|1|1|0|0|1|1|1|1","MINIMAP_SCALE":"3|8","DISPLAY_PLAYER_NAMES":true,"DISPLAY_CHAT":true,"PLAY_MUSIC":true,"PLAY_SFX":true,"BAR_STATUS":"23,0,24,0,25,1,26,0,27,0","WINDOW_SETTINGS":"3|0,376,6,0,1,601,6,1,3,1020,520,1,5,10,10,1,10,4,330,1,13,315,122,0,20,7,544,1,22,475,260,0,23,1060,131,1,24,412,97,0\\n\\u0000","AUTO_REFINEMENT":false,"QUICKSLOT_STOP_ATTACK":false,"DOUBLECLICK_ATTACK":true,"AUTO_START":false,"DISPLAY_NOTIFICATIONS":true,"SHOW_DRONES":true,"DISPLAY_WINDOW_BACKGROUND":true,"ALWAYS_DRAGGABLE_WINDOWS":true,"PRELOAD_USER_SHIPS":false,"QUALITY_PRESETTING":3,"QUALITY_CUSTOMIZED":0,"QUALITY_BACKGROUND":3,"QUALITY_POIZONE":3,"QUALITY_SHIP":3,"QUALITY_ENGINE":3,"QUALITY_COLLECTABLE":3,"QUALITY_ATTACK":3,"QUALITY_EFFECT":3,"QUALITY_EXPLOSION":3,"QUICKBAR_SLOT":"-1,-1,-1,-1,-1,-1,-1,-1,-1,-1","SLOTMENU_POSITION":"313,451","SLOTMENU_ORDER":0}', 1, 1, 1, '3/3-25-25-25,3/4-25-25-25-25,3/3-25-25-25', 0, 500000, 9000000, 2500000, 0.00, 4000, 256000, 0, 0, 101100, 256000, 320, 9181205),
(1003, 4, 2548592902, 1, 1, 1, '1000', '1000', '', 1, 1, 1, '3/3-25-25-25,3/4-25-25-25-25,3/3-25-25-25', 0, 500000, 0, 2500000, 0.00, 4000, 4000, 0, 0, 0, 0, 320, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `server_1_players_equipment`
--

CREATE TABLE IF NOT EXISTS `server_1_players_equipment` (
  `playerID` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `equipmentCombo` int(255) NOT NULL,
  PRIMARY KEY (`playerID`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `servers`
--

CREATE TABLE IF NOT EXISTS `servers` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL DEFAULT 'Server 1',
  `ShortName` varchar(10) NOT NULL DEFAULT 'SV1',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `servers`
--

INSERT INTO `servers` (`ID`, `Name`, `ShortName`) VALUES
(1, 'Global', 'G');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `ships`
--

CREATE TABLE IF NOT EXISTS `ships` (
  `Id` smallint(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL DEFAULT '-=[ ]=-',
  `type` varchar(100) NOT NULL DEFAULT '',
  `Costs` bigint(255) NOT NULL,
  `HP` int(255) NOT NULL DEFAULT '1000',
  `MaxNanohull` bigint(255) NOT NULL,
  `Shield` int(255) NOT NULL DEFAULT '0',
  `shieldAbsorb` smallint(11) NOT NULL DEFAULT '20',
  `Damage` int(255) NOT NULL DEFAULT '20',
  `Speed` smallint(11) NOT NULL DEFAULT '150',
  `isNeutral` enum('0','1') NOT NULL DEFAULT '1',
  `LaserId` tinyint(1) NOT NULL DEFAULT '0',
  `Lasers` bigint(255) NOT NULL,
  `Generators` bigint(255) NOT NULL,
  `Batteries` bigint(255) NOT NULL,
  `Rockets` bigint(255) NOT NULL,
  `Extra` int(11) NOT NULL,
  `Cargo` bigint(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- Data dump for tabellen `ships`
--

INSERT INTO `ships` (`Id`, `Name`, `type`, `Costs`, `HP`, `MaxNanohull`, `Shield`, `shieldAbsorb`, `Damage`, `Speed`, `isNeutral`, `LaserId`, `Lasers`, `Generators`, `Batteries`, `Rockets`, `Extra`, `Cargo`) VALUES
(23, '..::{ Boss Streuner }::..', '', -1, 3200, 0, 1600, 60, 80, 250, '1', 0, 0, 0, 0, 0, 0, 0),
(71, '-=[ Lordakia ]=-', '', -1, 2000, 0, 2000, 60, 80, 320, '0', 0, 0, 0, 0, 0, 0, 0),
(84, '-=[ Streuner ]=-', '', -1, 800, 0, 400, 60, 20, 270, '1', 0, 0, 0, 0, 0, 0, 0),
(72, '-=[ Devolarium ]=-', '', -1, 100000, 0, 100000, 60, 1000, 200, '0', 0, 0, 0, 0, 0, 0, 0),
(1, 'Phoenix', 'ship_phoenix', 0, 4000, 4000, 0, 0, 0, 320, '1', 0, 0, 0, 0, 0, 0, 0),
(2, 'Yamato', 'ship_yamato', 0, 8000, 8000, 0, 0, 0, 340, '1', 0, 0, 0, 0, 0, 0, 0),
(3, 'Leonov', 'ship_leonov', 0, 64000, 64000, 0, 0, 0, 360, '1', 0, 0, 0, 0, 0, 0, 0),
(4, 'Defcom', 'ship_defcom', 0, 12000, 12000, 0, 0, 0, 280, '1', 0, 0, 0, 0, 0, 0, 0),
(5, 'Liberator', 'ship_liberator', 0, 16000, 16000, 0, 0, 0, 300, '1', 0, 0, 0, 0, 0, 0, 0),
(6, 'Piranha', 'ship_piranha', 0, 64000, 64000, 0, 0, 0, 360, '1', 0, 0, 0, 0, 0, 0, 0),
(7, 'Nostromo', 'ship_nostromo', 0, 120000, 120000, 0, 0, 0, 340, '1', 0, 0, 0, 0, 0, 0, 0),
(8, 'Vengeance', 'ship_vengeance', 0, 180000, 180000, 0, 0, 0, 380, '1', 0, 0, 0, 0, 0, 0, 0),
(9, 'Bigboy', 'ship_bigboy', 0, 160000, 160000, 0, 0, 0, 260, '1', 0, 0, 0, 0, 0, 0, 0),
(10, 'Goliath', 'ship_goliath', 0, 256000, 256000, 0, 0, 0, 300, '1', 0, 0, 0, 0, 0, 0, 0),
(98, 'PoliceShip', 'ship_police', 0, 20000000, 20000000, 0, 0, 0, 700, '1', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `ships_designs`
--

CREATE TABLE IF NOT EXISTS `ships_designs` (
  `Id` smallint(11) NOT NULL AUTO_INCREMENT,
  `ShipId` smallint(11) NOT NULL,
  `Name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=111 ;

--
-- Data dump for tabellen `ships_designs`
--

INSERT INTO `ships_designs` (`Id`, `ShipId`, `Name`, `type`) VALUES
(16, 8, 'Vengeance Adept', 'ship_vengeance_design_adept'),
(17, 8, 'Vengeance Corsair', 'ship_vengeance_design_corsair'),
(18, 8, 'Vengeance Skill Design Lightning', 'ship_vengeance_design_lightning'),
(19, 10, 'Goliath Jade', 'ship_goliath_design_jade'),
(52, 10, 'Goliath Orange / Amber', 'ship_goliath_design_amber'),
(53, 10, 'Goliath Red (Crimson)', 'ship_goliath_design_crimson'),
(54, 10, 'Goliath Blue / Sapphire', 'ship_goliath_design_sapphire'),
(56, 10, 'Goliath Black (Enforcer)', 'ship_goliath_design_enforcer'),
(57, 10, 'Goliath Stars and Stripes', 'ship_goliath_design_independence'),
(58, 8, 'Vengeance Revenge', 'ship_vengeance_design_revenge'),
(59, 10, 'Goliath Bastion', 'ship_goliath_design_bastion'),
(60, 8, 'Vengeance Avenger', 'ship_vengeance_design_avenger'),
(61, 10, 'Goliath Veteran', 'ship_goliath_design_veteran'),
(62, 10, 'Goliath Exalted', 'ship_goliath_design_exalted'),
(63, 10, 'Skill Design 1 - Solace', 'ship_goliath_design_solace'),
(64, 10, 'Skill Design 2 - Diminisher', 'ship_goliath_design_diminisher'),
(65, 10, 'Skill Design 3 - Spectrum', 'ship_goliath_design_spectrum'),
(66, 10, 'Skill Design 4 - Sentinel', 'ship_goliath_design_sentinel'),
(67, 10, 'Skill Design 5 - Venom', 'ship_goliath_design_venom'),
(68, 10, 'Goliath Ignite', 'ship_goliath_design_ignite'),
(86, 10, 'Goliath Kick', 'ship_goliath_design_kick'),
(87, 10, 'Goliath Referee', 'ship_goliath_design_referee'),
(88, 10, 'Goliath Goal', 'ship_goliath_design_goal'),
(109, 10, 'Goliath Saturn', 'ship_goliath_design_saturn'),
(110, 10, 'Goliath Centaur', 'ship_goliath_design_centaur');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL DEFAULT '',
  `Name` varchar(255) NOT NULL DEFAULT '',
  `pwHash` varchar(255) NOT NULL DEFAULT '',
  `Servers` text NOT NULL,
  `sessionId` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`ID`, `Email`, `Name`, `pwHash`, `Servers`, `sessionId`) VALUES
(1, 'vittorigno1@gmail.com', 'Luiviky', 'c024c9f848ceb83b6c40455edaa4671c', '[{1:1}]', 343167719446826865),
(2, 'benzo11@hotmail.co.uk', 'thmspectre', '527a81da8ed6fd38b05fa6f591a7ac79', '[{1:2}]', 732520111400898614),
(3, 'Zeta@xkay.dk', 'Zeta', 'd41fbd35941b1b68ca99064e0794c1f2', '[{1:3}]', 219560091174465195),
(4, 'joachimloeve@live.dk', 'Disturbed', '04ec909a8102b04ba02afee493767a3c', '[{1:4}]', 40952203054005382);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
