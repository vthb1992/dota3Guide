-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2014 at 12:31 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dota2`
--

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE IF NOT EXISTS `guides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heroid` int(11) NOT NULL,
  `item1` int(11) NOT NULL,
  `item2` int(11) NOT NULL,
  `item3` int(11) NOT NULL,
  `item4` int(11) NOT NULL,
  `item5` int(11) NOT NULL,
  `item6` int(11) NOT NULL,
  `item7` int(11) NOT NULL,
  `item8` int(11) NOT NULL,
  `item9` int(11) NOT NULL,
  `item10` int(11) NOT NULL,
  `item11` int(11) NOT NULL,
  `item12` int(11) NOT NULL,
  `item13` int(11) NOT NULL,
  `item14` int(11) NOT NULL,
  `item15` int(11) NOT NULL,
  `item16` int(11) NOT NULL,
  `item17` int(11) NOT NULL,
  `item18` int(11) NOT NULL,
  `guidetext` longtext NOT NULL,
  `guidename` text NOT NULL,
  `guidescore` float NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `creatorid` int(11) NOT NULL,
  `creatorname` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `heroid`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`, `item10`, `item11`, `item12`, `item13`, `item14`, `item15`, `item16`, `item17`, `item18`, `guidetext`, `guidename`, `guidescore`, `time`, `creatorid`, `creatorname`) VALUES
(4, 1, 2, 0, 0, 0, 0, 47, 0, 0, 0, 0, 0, 49, 6, 0, 0, 0, 51, 51, '<p>asdasdasdsad<span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span></p>', 'heeboon5', 0, '2014-07-27 04:55:24', 1, 'Admin'),
(5, 2, 4, 49, 43, 0, 48, 0, 0, 0, 0, 49, 0, 0, 0, 0, 0, 51, 0, 0, '<p>fgdfgdfg<span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span></p>', 'heeboon4', 42.86, '2014-07-27 05:36:05', 1, 'Admin'),
(6, 2, 6, 26, 3, 6, 6, 6, 6, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, '<p style="text-align: center; ">ascsccsacscs</p><p style="text-align: center; "><br></p><p style="text-align: center; ">zx z zx x x zx x x xz xz x &nbsp;xzx z x xz xz zxz z<span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span></p>', 'heeboon3', 25, '2014-07-27 04:55:24', 1, 'Admin'),
(7, 2, 6, 26, 3, 6, 6, 6, 6, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, '<p style="text-align: center; "><span style="font-size: 13px;"><span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span>&lt;script&gt;alert('');&lt;/script&gt;</span><br></p>', 'heebooonnn', 50, '2014-07-27 04:55:24', 1, 'Admin'),
(8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1', 'This is Guide 1', 36.17, '2014-07-27 04:55:24', 1, 'Admin'),
(9, 1, 6, 2, 0, 0, 0, 6, 0, 20, 7, 0, 0, 0, 0, 0, 10, 21, 0, 0, '<p>assad<span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span></p>', 'hee boon', 0, '2014-07-27 04:55:24', 1, 'Admin'),
(10, 3, 6, 5, 0, 0, 0, 6, 0, 20, 7, 0, 0, 17, 0, 0, 10, 21, 0, 0, '<p>assad</p><p><br></p><span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><p>&nbsp;INTELLIGENT<span class="horange" style="color: orange;">13</span><img src="http://localhost/dota3/img/asset/icon_hp.png" style="vertical-align: middle;">&nbsp;HEALTH<span class="horange" style="color: orange;">58</span><img src="http://localhost/dota3/img/asset/icon_mp.png" style="vertical-align: middle;">&nbsp;MANA<span class="horange" style="color: orange;">94</span><img src="http://localhost/dota3/img/asset/icon_dmg.png" style="vertical-align: middle;">&nbsp;DAMAGE<span class="horange" style="color: orange;">45</span><img src="http://localhost/dota3/img/asset/icon_amr.png" style="vertical-align: middle;">&nbsp;ARMOR<span class="horange" style="color: orange;">2</span><img src="http://localhost/dota3/img/asset/icon_spd.png" style="vertical-align: middle;">&nbsp;SPEED<span class="horange" style="color: orange;">256</span><br></p>', 'hee boon 2', 0, '2014-07-27 04:55:24', 1, 'Admin'),
(11, 1, 4, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, '<p>g<span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span></p>', 'fjfjhhgjghgh', 0, '2014-07-27 04:55:24', 1, 'Admin'),
(12, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 8, 8, 8, 7, 7, 'ascascsaacscsac<span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span>', 'Best Lion Guide', 0, '2014-07-27 04:55:24', 1, 'Admin'),
(13, 16, 3, 7, 12, 0, 0, 0, 32, 16, 6, 0, 0, 0, 60, 25, 44, 9, 8, 15, ' Clockwerk is a very strong initiator/ganker who is also a very versatile laner. While he can farm and use said farm well he does not need much to solo kill heroes early on in the game. His abilities allow him to disrupt enemy movement and lock heroes down during teamfights. He''s also a Can of whoopass. This guide will talk primarily about  Clockwerk<span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span> in the middle lane.', 'Primary Clock Max Intel Guide.', 54.55, '2014-07-27 04:55:24', 1, 'Admin'),
(18, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '<p><br></br></p>', '', 0, '2014-07-27 05:14:15', 1, 'Admin'),
(24, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '<p><br></br></p>', 'xx', 0, '2014-07-27 05:07:10', 1, 'admin'),
(25, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '<p><br></br></p>', '(Unnamed Guide)', 0, '2014-07-27 05:15:10', 4, 'A''llc'),
(26, 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '<p><br></br></p>', '(Unnamed Guide)', 57.14, '2014-07-27 09:45:18', 5, '&lt;script&gt;alert(&quot;&quot;);&lt;/script&gt;'),
(29, 66, 7, 8, 7, 7, 8, 7, 2, 2, 2, 3, 3, 3, 13, 12, 13, 26, 25, 26, '<p><iframe width="560" height="315" src="http://www.youtube.com/embed/3AbGva_C1Xw?wmode=opaque" data-youtube-id="3AbGva_C1Xw" frameborder="0" allowfullscreen=""></iframe><span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"> </span><br></p>', 'Stupid Guide', 0, '2014-07-27 09:47:14', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE IF NOT EXISTS `hero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `filename` text NOT NULL,
  `agi` int(11) NOT NULL,
  `str` int(11) NOT NULL,
  `intl` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `mp` int(11) NOT NULL,
  `dmg` int(11) NOT NULL,
  `amr` int(11) NOT NULL,
  `spd` int(11) NOT NULL,
  `info` text NOT NULL,
  `attr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `name`, `filename`, `agi`, `str`, `intl`, `hp`, `mp`, `dmg`, `amr`, `spd`, `info`, `attr`) VALUES
(1, 'Abaddon', 'abaddon.png', 6, 24, 12, 306, 87, 43, 42, 20, '', 'Strength'),
(2, 'Alchemist', 'alchemist.png', 11, 23, 16, 312, 116, 41, 34, 36, '', 'Strength'),
(3, 'Ancient Apparition', 'ancient-apparition.png', 6, 24, 11, 291, 80, 43, 48, 20, '', 'Strength'),
(4, 'Anti Mage', 'anti-mage.png', 8, 11, 18, 58, 315, 32, 17, 26, '', 'Intelligence'),
(5, 'Axe', 'axe.png', 8, 15, 23, 79, 336, 41, 23, 26, '', 'Intelligence'),
(6, 'Bane', 'bane.png', 22, 8, 10, 42, 73, 40, 14, 262, '', 'Agility'),
(7, 'Batrider', 'batrider.png', 11, 18, 11, 280, 80, 32, 54, 36, '', 'Strength'),
(8, 'Beastmaster', 'beastmaster.png', 7, 24, 13, 313, 94, 43, 42, 23, '', 'Strength'),
(9, 'Bloodseeker', 'bloodseeker.png', 16, 10, 16, 53, 116, 29, 14, 249, '', 'Agility'),
(10, 'Bounty Hunter', 'bounty-hunter.png', 16, 9, 10, 47, 73, 29, 4, 230, '', 'Agility'),
(11, 'Brewmaster', 'brewmaster.png', 10, 19, 10, 271, 73, 34, 55, 33, '', 'Strength'),
(12, 'Bristleback', 'bristleback.png', 6, 24, 14, 283, 102, 43, 40, 20, '', 'Strength'),
(13, 'Centaur Warchief', 'centaur-warchief.png', 22, 9, 14, 47, 102, 40, 12, 254, '', 'Agility'),
(14, 'Chaos Knight', 'chaos-knight.png', 16, 6, 15, 32, 109, 29, 8, 204, '', 'Agility'),
(15, 'Clinkz', 'clinkz.png', 10, 11, 22, 58, 313, 40, 25, 33, '', 'Intelligence'),
(16, 'Clockwerk', 'clockwerk.png', 21, 7, 13, 37, 94, 38, 16, 237, '', 'Agility'),
(17, 'Crystal Maiden', 'crystal-maiden.png', 21, 8, 15, 42, 109, 38, 19, 254, '', 'Agility'),
(18, 'Dark Seer', 'dark-seer.png', 25, 11, 13, 58, 94, 45, 2, 256, '', 'Agility'),
(19, 'Dazzle', 'dazzle.png', 19, 12, 14, 63, 102, 34, 9, 255, '', 'Agility'),
(20, 'Death Prophet', 'death-prophet.png', 9, 10, 17, 53, 281, 31, 21, 29, '', 'Intelligence'),
(21, 'Disruptor', 'disruptor.png', 20, 11, 10, 58, 73, 36, 11, 236, '', 'Agility'),
(22, 'Doom Bringer', 'doom-bringer.png', 11, 22, 15, 309, 109, 40, 38, 36, '', 'Strength'),
(23, 'Dragon Knight', 'dragon-knight.png', 8, 21, 16, 308, 116, 38, 43, 26, '', 'Strength'),
(24, 'Drow Ranger', 'drow-ranger.png', 8, 20, 10, 300, 73, 36, 48, 26, '', 'Strength'),
(25, 'Earth Spirit', 'earth-spirit.png', 25, 8, 13, 42, 94, 45, 1, 239, '', 'Agility'),
(26, 'Earthshaker', 'earthshaker.png', 17, 6, 10, 32, 73, 31, 1, 216, '', 'Agility'),
(27, 'Elder Titan', 'elder-titan.png', 6, 19, 12, 268, 87, 34, 46, 20, '', 'Strength'),
(28, 'Ember Spirit', 'ember-spirit.png', 23, 8, 11, 42, 80, 41, 9, 232, '', 'Agility'),
(29, 'Enchantress', 'enchantress.png', 19, 7, 11, 37, 80, 34, 7, 227, '', 'Agility'),
(30, 'Enigma', 'enigma.png', 24, 8, 14, 42, 102, 43, 7, 244, '', 'Agility'),
(31, 'Faceless Void', 'faceless-void.png', 7, 18, 16, 266, 116, 32, 60, 23, '', 'Strength'),
(32, 'Goblin Techies', 'goblin-techies.png', 19, 6, 16, 32, 116, 34, 15, 254, '', 'Agility'),
(33, 'Gyrocopter', 'gyrocopter.png', 11, 17, 13, 252, 94, 31, 47, 36, '', 'Strength'),
(34, 'Huskar', 'huskar.png', 19, 7, 13, 37, 94, 34, 3, 231, '', 'Agility'),
(35, 'Invoker', 'invoker.png', 8, 15, 24, 79, 361, 43, 24, 26, '', 'Intelligence'),
(36, 'Jakiro', 'jakiro.png', 10, 15, 25, 79, 332, 45, 15, 33, '', 'Intelligence'),
(37, 'Juggernaut', 'juggernaut.png', 7, 15, 22, 79, 342, 40, 17, 23, '', 'Intelligence'),
(38, 'Keeper Of The Light', 'keeper-of-the-light.png', 10, 15, 18, 79, 284, 32, 24, 33, '', 'Intelligence'),
(39, 'Kunkka', 'kunkka.png', 12, 16, 14, 259, 102, 29, 60, 39, '', 'Strength'),
(40, 'Legion Commander', 'legion-commander.png', 24, 8, 16, 42, 116, 43, 3, 236, '', 'Agility'),
(41, 'Leshrac', 'leshrac.png', 21, 8, 12, 42, 87, 38, 12, 246, '', 'Agility'),
(42, 'Lich', 'lich.png', 12, 16, 12, 265, 87, 29, 41, 39, '', 'Strength'),
(43, 'Lifestealer', 'lifestealer.png', 6, 12, 21, 63, 325, 38, 24, 20, '', 'Intelligence'),
(44, 'Lina', 'lina.png', 24, 10, 15, 53, 109, 43, 11, 271, '', 'Agility'),
(45, 'Lion', 'lion.png', 6, 21, 11, 288, 80, 38, 52, 20, '', 'Strength'),
(46, 'Lone Druid', 'lone-druid.png', 19, 8, 16, 42, 116, 34, 13, 258, '', 'Agility'),
(47, 'Luna', 'luna.png', 10, 17, 10, 244, 73, 31, 43, 33, '', 'Strength'),
(48, 'Lycanthrope', 'lycanthrope.png', 6, 13, 25, 68, 363, 45, 18, 20, '', 'Intelligence'),
(49, 'Medusa', 'medusa.png', 6, 12, 22, 63, 337, 40, 19, 20, '', 'Intelligence'),
(50, 'Meepo', 'meepo.png', 10, 25, 10, 288, 73, 45, 58, 33, '', 'Strength'),
(51, 'Mirana', 'mirana.png', 11, 18, 10, 263, 73, 32, 52, 36, '', 'Strength'),
(52, 'Morphling', 'morphling.png', 22, 9, 11, 47, 80, 40, 16, 231, '', 'Agility'),
(53, 'Naga Siren', 'naga-siren.png', 19, 10, 16, 53, 116, 34, 5, 226, '', 'Agility'),
(54, 'Natures Prophet', 'natures-prophet.png', 7, 13, 16, 68, 302, 29, 15, 23, '', 'Intelligence'),
(55, 'Necrophos', 'necrophos.png', 19, 6, 10, 32, 73, 34, 5, 235, '', 'Agility'),
(56, 'Night Stalker', 'night-stalker.png', 16, 12, 11, 63, 80, 29, 17, 210, '', 'Agility'),
(57, 'Nyx Assassin', 'nyx-assassin.png', 22, 11, 13, 58, 94, 40, 12, 259, '', 'Agility'),
(58, 'Ogre Magi', 'ogre-magi.png', 6, 24, 10, 318, 73, 43, 43, 20, '', 'Strength'),
(59, 'Omniknight', 'omniknight.png', 7, 25, 16, 290, 116, 45, 39, 23, '', 'Strength'),
(60, 'Oracle', 'oracle.png', 12, 23, 15, 284, 109, 41, 30, 39, '', 'Strength'),
(61, 'Outworld Devourer', 'outworld-devourer.png', 16, 11, 12, 58, 87, 29, 8, 213, '', 'Agility'),
(62, 'Phantom Assassin', 'phantom-assassin.png', 6, 15, 19, 79, 336, 34, 22, 20, '', 'Intelligence'),
(63, 'Phantom Lancer', 'phantom-lancer.png', 10, 18, 11, 277, 80, 32, 58, 33, '', 'Strength'),
(64, 'Phoenix', 'phoenix.png', 7, 17, 16, 245, 116, 31, 57, 23, '', 'Strength'),
(65, 'Pit Lord', 'pit-lord.png', 7, 14, 25, 74, 338, 45, 24, 23, '', 'Intelligence'),
(66, 'Puck', 'puck.png', 7, 17, 12, 271, 87, 31, 36, 23, '', 'Strength'),
(67, 'Pudge', 'pudge.png', 8, 15, 24, 79, 332, 43, 23, 26, '', 'Intelligence'),
(68, 'Pugna', 'pugna.png', 6, 14, 19, 74, 320, 34, 18, 20, '', 'Intelligence'),
(69, 'Queen Of Pain', 'queen-of-pain.png', 16, 12, 15, 63, 109, 29, 11, 241, '', 'Agility'),
(70, 'Razor', 'razor.png', 12, 24, 13, 303, 94, 43, 50, 39, '', 'Strength'),
(71, 'Riki', 'riki.png', 9, 11, 19, 58, 306, 34, 25, 29, '', 'Intelligence'),
(72, 'Rubick', 'rubick.png', 9, 19, 13, 261, 94, 34, 52, 29, '', 'Strength'),
(73, 'Sand King', 'sand-king.png', 25, 9, 13, 47, 94, 45, 12, 243, '', 'Agility'),
(74, 'Shadow Demon', 'shadow-demon.png', 7, 20, 12, 255, 87, 36, 52, 23, '', 'Strength'),
(75, 'Shadow Fiend', 'shadow-fiend.png', 23, 9, 14, 47, 102, 41, 20, 229, '', 'Agility'),
(76, 'Shadow Shaman', 'shadow-shaman.png', 17, 12, 10, 63, 73, 31, 3, 225, '', 'Agility'),
(77, 'Skywrath Mage', 'skywrath-mage.png', 10, 20, 15, 300, 109, 36, 44, 33, '', 'Strength'),
(78, 'Slardar', 'slardar.png', 24, 12, 10, 63, 73, 43, 6, 265, '', 'Agility'),
(79, 'Sniper', 'sniper.png', 7, 12, 16, 63, 308, 29, 25, 23, '', 'Intelligence'),
(80, 'Soul Keeper', 'soul-keeper.png', 21, 10, 10, 53, 73, 38, 13, 232, '', 'Agility'),
(81, 'Spectre', 'spectre.png', 6, 16, 11, 283, 80, 29, 32, 20, '', 'Strength'),
(82, 'Spirit Breaker', 'spirit-breaker.png', 11, 21, 14, 289, 102, 38, 52, 36, '', 'Strength'),
(83, 'Storm Spirit', 'storm-spirit.png', 10, 10, 25, 53, 368, 45, 24, 33, '', 'Intelligence'),
(84, 'Sven', 'sven.png', 6, 17, 10, 255, 73, 31, 39, 20, '', 'Strength'),
(85, 'Templar Assassin', 'templar-assassin.png', 17, 8, 10, 42, 73, 31, 1, 236, '', 'Agility'),
(86, 'Tidehunter', 'tidehunter.png', 9, 10, 25, 53, 372, 45, 15, 29, '', 'Intelligence'),
(87, 'Tinker', 'tinker.png', 12, 25, 12, 330, 87, 45, 31, 39, '', 'Strength'),
(88, 'Tiny', 'tiny.png', 23, 7, 10, 37, 73, 41, 13, 270, '', 'Agility'),
(89, 'Treant Protector', 'treant-protector.png', 7, 11, 24, 58, 330, 43, 17, 23, '', 'Intelligence'),
(90, 'Troll Warlord', 'troll-warlord.png', 12, 23, 13, 293, 94, 41, 45, 39, '', 'Strength'),
(91, 'Tuskarr', 'tuskarr.png', 9, 13, 20, 68, 331, 36, 17, 29, '', 'Intelligence'),
(92, 'Undying', 'undying.png', 10, 24, 13, 325, 94, 43, 54, 33, '', 'Strength'),
(93, 'Ursa', 'ursa.png', 6, 19, 16, 255, 116, 34, 35, 20, '', 'Strength'),
(94, 'Vengeful Spirit', 'vengeful-spirit.png', 12, 21, 16, 274, 116, 38, 52, 39, '', 'Strength'),
(95, 'Venomancer', 'venomancer.png', 7, 12, 18, 63, 320, 32, 17, 23, '', 'Intelligence'),
(96, 'Viper', 'viper.png', 8, 25, 11, 311, 80, 45, 30, 26, '', 'Strength'),
(97, 'Visage', 'visage.png', 8, 19, 11, 272, 80, 34, 41, 26, '', 'Strength'),
(98, 'Warlock', 'warlock.png', 16, 7, 13, 37, 94, 29, 5, 247, '', 'Agility'),
(99, 'Weaver', 'weaver.png', 9, 15, 22, 79, 344, 40, 23, 29, '', 'Intelligence'),
(100, 'Windranger', 'windranger.png', 16, 10, 10, 53, 73, 29, 13, 202, '', 'Agility'),
(101, 'Winter Wyvern', 'winter-wyvern.png', 10, 12, 24, 63, 354, 43, 22, 33, '', 'Intelligence'),
(102, 'Wisp', 'wisp.png', 12, 17, 16, 261, 116, 31, 37, 39, '', 'Strength'),
(103, 'Witch Doctor', 'witch-doctor.png', 20, 10, 14, 53, 102, 36, 17, 228, '', 'Agility'),
(104, 'Wraith King', 'wraith-king.png', 24, 12, 15, 63, 109, 43, 15, 270, '', 'Agility'),
(105, 'Zeus', 'zeus.png', 9, 15, 21, 79, 349, 38, 18, 29, '', 'Intelligence');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `filename` text NOT NULL,
  `itemtype` text NOT NULL,
  `info` text NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `filename`, `itemtype`, `info`, `cost`) VALUES
(1, 'Clarity', 'clarity.png', 'Consumables', 'Use: Restores mana on the target unit over time. If the unit is attacked, the effect is lost.<br/>\nDURATION: 40<br/>\nMANA RESTORED: 135 ', 50),
(2, 'Tango', 'tango.png', 'Consumables', 'Use: Eat Tree - Consume a tree to restore HP over time. Comes with 3 charges.<br/> \nDURATION: 16<br/>\nHEALTH RESTORED: 115 ', 125),
(3, 'Healing Salve', 'healing-salve.png', 'Consumables', 'Use: Regenerate - Restores HP on the target unit over time. If the unit is attacked, the effect is lost. <br/>\nDURATION: 10<br/>\nHEALTH RESTORED: 400 ', 115),
(4, 'Smoke of Deceit', 'smoke-of-deceit.png', 'Consumables', 'Use: Upon activation, the user and all nearby allied player-controlled units gain invisiblity and bonus movement speed for a brief time. Minimap icons will also be hidden. Upon moving within 1025 range of an enemy hero or tower, the invisibility is lost.<br/> \nBONUS SPEED: 15%<br/>\nDURATION: 35 <br/>\nCOOLDOWN: 90', 100),
(5, 'Town Portal Scroll', 'town-portal-scroll.png', 'Consumables', 'Use: Teleport - Teleports you to a target friendly building.<br/> \nMANACOST: 75<br/> \nCOOLDOWN: 65', 135),
(6, 'Dust of Appearance', 'dust-of-appearance.png', 'Consumables', 'Use: Reveal - Reveals and slows invisible Heroes in a nearby area.<br/>                                                \nDURATION: 12<br/>                                        \nRADIUS: 1050<br/>                                           \nSLOW: 15%<br/>                                         \nMANACOST: 5<br/>                                            \nCOOLDOWN: 60  ', 180),
(7, 'Animal Courier', 'courier.png', 'Consumables', 'Creature that carries items to and from your base. ', 150),
(8, 'Flying courier', 'flying-courier.png', 'Consumables', 'Fast flying creature that carries items to and from your base. Requires Animal Courier.', 220),
(9, 'Observer Ward', 'observer-ward.png', 'Consumables', 'Use: Places an Observer Ward to give sight of the surrounding area. Lasts 7 minutes.<br/> \n\nHold Control to give one Observer Ward to an allied hero. ', 150),
(10, 'Sentry Ward', 'sentry-ward.png', 'Consumables', 'Use: Places a Sentry Ward to give True Sight of the surrounding area. Lasts 4 minutes.<br/> \n\nHold Control to give one Sentry Ward to an allied hero. ', 200),
(11, 'Bottle', 'bottle.png', 'Consumables', 'Use: Regenerate - Restores HP and Mana over time. Effect is lost if unit is attacked. Empty Bottle refills near town fountain. You can also store runes in the bottle, to save for later use. After 2 minutes, stored Runes will be activated. If Bottle is empty, it causes a courier to move 30% slower.<br/> \n\nHold Control to use your Bottle on an allied hero.<br/>  HEALTH RESTORED: 135<br/> \nMANA RESTORED: 70<br/> \nDURATION: 3 ', 650),
(12, 'Iron Branch', 'iron-branch.png', 'Attributes', '+ 1 All Attributes ', 50),
(13, 'Gauntlets of Strength', 'gauntlets-of-strength.png', 'Attributes', '+ 3 Strength', 150),
(14, 'Slippers of Agility', 'slippers-of-agility.png', 'Attributes', '+ 3 Agility', 150),
(15, 'Mantle of Intelligence', 'mantle-of-intelligence.png', 'Attributes', '+ 3 Intelligence', 150),
(16, 'Circlet', 'circlet.png', 'Attributes', '+ 2 All Attributes', 185),
(17, 'Belt of Strength', 'belt-of-strength.png', 'Attributes', '+ 6 Strength ', 450),
(18, 'Band of Elvenskin', 'band-of-elvenskin.png', 'Attributes', '+ 6 Agility ', 450),
(19, 'Robe of the Magi', 'robe-of-the-magi.png', 'Attributes', '+ 6 Intelligence ', 450),
(20, 'Ogre Club', 'ogre-club.png', 'Attributes', '+ 10 Strength ', 1000),
(21, 'Blade of Alacrity', 'blade-of-alacrity.png', 'Attributes', '+ 10 Agility ', 1000),
(22, 'Staff of Wizardry', 'staff-of-wizardry.png', 'Attributes', '+ 10 Intelligence ', 1000),
(23, 'Ultimate Orb', 'ultimate-orb.png', 'Attributes', '+ 10 All Attributes ', 2100),
(24, 'Ring of Protection', 'ring-of-protection.png', 'Armaments', '+ 2 Armor ', 175),
(25, 'Quelling Blade', 'quelling-blade.png', 'Armaments', 'Active: Destroy Tree/Ward - Destroy a target tree, or deals 100 damage to a ward.\nPassive: Quell - Gives bonus attack damage against non-hero units, depending on the type of hero you are.<br/> MELEE BONUS: 32%<br/>\nRANGED BONUS: 12% ', 225),
(26, 'Stout Shield', 'stout-shield.png', 'Armaments', 'Passive: Damage Block - Gives a chance to block damage, depending on the type of hero you are.<br/> MELEE BLOCK: 20<br/>\nRANGED BLOCK: 10<br/>\nBLOCK CHANCE: 60% ', 250),
(27, 'Blades of Attack', 'blades-of-attack.png', 'Armaments', '+ 9 Damage ', 450),
(28, 'Chainmail', 'chainmail.png', 'Armaments', '+ 5 Armor ', 550),
(29, 'Helm of Iron Will', 'helm-of-iron-will.png', 'Armaments', '+ 5 Armor<br/>+ 3 HP Regeneration ', 950),
(30, 'Broadsword', 'broadsword.png', 'Armaments', '+ 18 Damage ', 1200),
(31, 'Quaterstaff', 'quarterstaff.png', 'Armaments', '+ 10 Damage<br/>\r\n+ 10 Attack Speed ', 900),
(32, 'Claymore', 'claymore.png', 'Armaments', '+ 21 Damage ', 1400),
(33, 'Javelin', 'javelin.png', 'Armaments', 'Passive: Pierce - Grants a chance to deal bonus damage.<br/>\n + 21 Damage<br/>\nCHANCE TO PIERCE: 20%<br/>\nPIERCE DAMAGE: 40 ', 1500),
(34, 'Platemail', 'platemail.png', 'Armaments', '+ 10 Armor ', 1400),
(35, 'Mithril Hammer', 'mithril-hammer.png', 'Armaments', '+ 24 Damage', 1600),
(36, 'Magic Stick', 'magic-stick.png', 'Arcane', 'Active: Energy Charge - Gains charges (max 10) based on enemies using abilities in a nearby area. When activated, it restores health and mana based on the number of charges stored. <br/>\nRESTORE PER CHARGE: 15 <br/>\nCooldown:13', 200),
(37, 'Sage''s mask', 'sages-mask.png', 'Arcane', '+ 50% Mana Regeneration ', 325),
(38, 'Ring of Regen', 'ring-of-regen.png', 'Arcane', '+ 2 HP Regeneration ', 350),
(39, 'Boots of Speed', 'boots-of-speed.png', 'Arcane', 'Flat movement speed bonuses from multiple pairs of boots do not stack.<br/>\r\n + 50 Movement Speed ', 500),
(40, 'Gloves of Haste', 'gloves-of-haste.png', 'Arcane', '+ 15 Attack Speed ', 500),
(41, 'Cloak', 'cloak.png', 'Arcane', 'Multiple instances of spell resistance from items do not stack.<br/>\r\n + 15% Spell Resistance ', 550),
(42, 'Gem of True Sight', 'gem-of-true-sight.png', 'Arcane', 'Passive: True Sight - Gives the ability to see invisible units and wards. Drops on death, but cannot be destroyed. ', 900),
(43, 'Morbid Mask', 'morbid-mask.png', 'Arcane', 'Passive: Lifesteal - Gives lifesteal on attacks. <br/>\r\n\r\nMorbid Mask is a Unique Attack Modifier, and does not stack with other Unique Attack Modifiers. <br/>\r\nLIFESTEAL: 15% ', 900),
(44, 'Ghost Scepter', 'ghost-scepter.png', 'Arcane', 'Active: Ghost Form - Enter ghost form and become unable to attack or be attacked, but take 40% extra magic damage. Using a Teleport Scroll dispels Ghost Form.<br/>\r\n + 7 All Attributes<br/>\r\nGHOST DURATION: 4<br/>\r\nINCREASED MAGIC DAMAGE: 40% <br/>\r\nCooldown:30', 1600),
(45, 'Talisman of Evasion', 'talisman-of-evasion.png', 'Arcane', '+ 25% Evasion ', 1800),
(46, 'Blink Dagger', 'blink-dagger.png', 'Arcane', 'Active: Blink - Teleport to a target point up to 1200 units away. If damage is taken from an enemy hero, Blink Dagger cannot be used for 3 seconds.  <br/>\r\nCooldown:12', 2150),
(47, 'Shadow Amulet', 'shadow-amulet.png', 'Arcane', 'Active: Fade - Grants invisibility to you or target allied hero over 1.5 seconds. Moving breaks the invisibility. There is no cooldown when using this item on yourself.<br/>\r\n + 30 Attack Speed <br/>\r\nCooldown:10\r\n', 1600),
(48, 'Wraith Band', 'wraith-band.png', 'Upgrades', '+ 3 Strength<br/>\r\n+ 6 Agility<br/>\r\n+ 3 Intelligence<br/>\r\n+ 3 Damage ', 485),
(49, 'Null Talisman', 'null-talisman.png', 'Upgrades', '+ 3 Strength<br/>\r\n+ 3 Agility<br/>\r\n+ 6 Intelligence<br/>\r\n+ 3 Damage ', 470),
(50, 'Magic Wand', 'magic-wand.png', 'Upgrades', 'Active: Energy Charge - Gains charges (max 15) based on enemies using abilities in a nearby area. When activated, it restores health and mana based on the number of charges stored.<br/>\r\n + 3 All Attributes<br/>\r\nRESTORE PER CHARGE: 15 <br/>\r\nCooldown:13', 500),
(51, 'Bracer', 'bracer.png', 'Upgrades', '+ 6 Strength<br/>\r\n+ 3 Agility<br/>\r\n+ 3 Intelligence<br/>\r\n+ 3 Damage ', 525),
(52, 'Poor Man''s Shield', 'poor-mans-shield.png', 'Upgrades', 'Passive: Damage Block - Blocks physical attack damage, depending on the type of hero you are. Poor Man''s Shield will always block attacks from enemy Heroes, but has a chance to block damage from creeps. <br/>\nMELEE BLOCK: 20<br/>\nRANGED BLOCK: 10<br/>\nBLOCK CHANCE: 60%<br/>\n+ 6 Agility ', 550),
(53, 'Soul Ring', 'soul-ring.png', 'Upgrades', 'Active: Sacrifice - Consume 150 HP to temporarily gain 150 Mana. Lasts 10 seconds.<br/> + 3 HP Regeneration<br/>\r\n+ 50% Mana Regeneration <br/>\r\nCooldown:30', 800),
(54, 'Phase Boots', 'phase-boots.png', 'Upgrades', 'Active: Phase - Gives increased movement speed and lets you move through units. Phase is cancelled upon using another item or ability.<br/>\r\n\r\nFlat movement speed bonuses from multiple pairs of boots do not stack. <br/>PHASE DURATION: 4<br/>\r\nPHASE MOVE BOOST: 16%<br/>\r\n+ 50 Movement Speed<br/>\r\n+ 24 Damage <br/>\r\nCooldown:8', 1350),
(55, 'Power Treads', 'power-treads.png', 'Upgrades', 'Active: Switch Attribute - Changes selected attribute between Strength, Agility and Intelligence.<br/>\r\n\r\nFlat movement speed bonuses from multiple pairs of boots do not stack.<br/> + 50 Movement Speed<br/>\r\n+ 8 Selected Attribute<br/>\r\n+ 30 Attack Speed ', 1400),
(56, 'Oblivion Staff', 'oblivion-staff.png', 'Upgrades', '+ 6 Intelligence<br/>\r\n+ 10 Attack Speed<br/>\r\n+ 15 Damage<br/>\r\n+ 75% Mana Regeneration ', 1675),
(57, 'Perseverance', 'perseverance.png', 'Upgrades', '+ 10 Damage<br/>\r\n+ 5 HP Regeneration<br/>\r\n+ 125% Mana Regeneration', 1750),
(58, 'Hand of Midas', 'hand-of-midas.png', 'Upgrades', 'Active: Transmute - Kills a non-hero target for 190 gold and 2.5x experience. Cannot be used on Ancients.<br/>\r\n + 30 Attack Speed <br/>\r\nCooldown:100', 2050),
(59, 'Boots of Travel', 'boots-of-travel.png', 'Upgrades', 'Active: Teleport - Teleports you to an allied non-hero unit or structure.<br/>\r\n\r\nFlat movement speed bonuses from multiple pairs of boots do not stack. <br/>+ 100 Movement Speed <br/>\r\nMana Cost:75<br/>\r\nCooldown:60', 2450),
(60, 'Ring of Basilius', 'ring-of-basilius.png', 'Upgrades', 'Passive: Basilius Aura - Grants mana regeneration and armor in a 900 AoE.\r\nActive: Toggle whether the aura affects other non-hero units.<br/>\r\n\r\nMultiple instances of Basilius Aura do not stack.<br/> + 6 Damage<br/>\r\nAURA MANA REGEN: 0.65<br/>\r\nAURA BONUS ARMOR: 2<br/>\r\n+ 1 Armor ', 500),
(61, 'Headdress', 'headdress.png', 'Upgrades', 'Passive: Regeneration Aura - Restores HP to allies in a 750 unit radius.<br/>\r\n\r\nMultiple instances of Regeneration Aura do not stack. <br/>+ 2 All Attributes<br/>\r\nBONUS REGEN: 3 ', 600),
(62, 'Buckler', 'buckler.png', 'Upgrades', 'Active: Armor Bonus - Gives +2 to all nearby allied units. Lasts 25 seconds on heroes, 30 seconds on units. <br/>+ 5 Armor<br/>\r\n+ 2 All Attributes <br/>\r\nMana Cost:10<br/>Cooldown:25\r\n', 800),
(63, 'Urn of Shadows', 'urn-of-shadows.png', 'Upgrades', 'Gains charges every time an enemy hero dies within 1400 units. Only the closest Urn to the dying hero will gain a charge.\nActive: Soul Release - Heals HP over time for friendly units, but deals damage over time for enemy units. The healing effect is lost if the affected unit takes damage from an enemy hero or tower. <br/>+ 50% Mana Regeneration<br/>\n+ 6 Strength<br/>\nURN HEAL: 400<br/>\nDURATION: 8<br/>\nURN DAMAGE: 150 <br/>\nCooldown:7', 875),
(64, 'Ring of Aquila', 'ring-of-aquila.png', 'Upgrades', 'Passive: Aquila Aura - Grants mana regeneration and armor in a 900 AoE.\nActive: Toggle whether the aura affects other non-hero units.<br/>\n\nMultiple instances of Aquila Aura do not stack. <br/>+ 9 Damage<br/>\n+ 3 All Attributes<br/>\n+ 6 Agility<br/>\n+ 1 Armor<br/>\nAURA MANA REGEN: 0.65<br/>\nAURA BONUS ARMOR: 2 ', 985);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `postcount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `postcount`) VALUES
(1, 'admin', 'admin', 0),
(3, 'admin1', 'admin1', 0),
(4, 'A''llc', 'allc', 0),
(6, '&lt;script&gt;alert(\\&quot;\\&quot;);&lt;/script&gt;', 'asd', 0),
(7, '&lt;script&gt;alert(\\&quot;\\\\/\\&quot;);&lt;/script&gt;', '<script>alert("\\/");</script>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guideid` int(11) NOT NULL,
  `voterid` int(11) NOT NULL,
  `votevalue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `guideid`, `voterid`, `votevalue`) VALUES
(1, 13, 1, 1),
(2, 13, 1, 1),
(3, 13, 1, 0),
(4, 13, 1, 1),
(5, 8, 1, 1),
(6, 8, 1, 1),
(7, 8, 1, 1),
(8, 8, 1, 1),
(9, 8, 1, 0),
(10, 8, 1, 1),
(11, 8, 1, 1),
(12, 8, 1, 0),
(13, 8, 1, 0),
(14, 8, 1, 0),
(15, 13, 1, 1),
(16, 13, 1, 0),
(17, 13, 1, 1),
(18, 13, 1, 1),
(19, 13, 1, 0),
(20, 13, 1, 0),
(21, 13, 1, 0),
(22, 5, 1, 1),
(23, 5, 1, 1),
(24, 5, 1, 0),
(25, 5, 1, 1),
(26, 8, 1, 0),
(27, 8, 1, 0),
(28, 8, 1, 0),
(29, 8, 1, 0),
(30, 8, 1, 0),
(31, 8, 1, 0),
(32, 8, 1, 0),
(33, 8, 1, 0),
(34, 8, 1, 0),
(35, 8, 1, 0),
(36, 8, 1, 0),
(37, 8, 1, 0),
(38, 8, 1, 0),
(39, 8, 1, 0),
(40, 8, 1, 1),
(41, 8, 1, 1),
(42, 8, 1, 0),
(43, 8, 1, 0),
(44, 8, 1, 0),
(45, 8, 1, 1),
(46, 8, 1, 0),
(47, 8, 1, 1),
(48, 8, 1, 1),
(49, 8, 1, 1),
(50, 8, 1, 0),
(51, 8, 1, 0),
(52, 8, 1, 0),
(53, 8, 1, 0),
(54, 8, 1, 0),
(55, 8, 1, 0),
(56, 8, 1, 0),
(57, 8, 1, 0),
(58, 8, 1, 1),
(59, 8, 1, 1),
(60, 8, 1, 1),
(61, 8, 1, 1),
(62, 8, 1, 1),
(63, 5, 1, 0),
(64, 5, 1, 0),
(65, 6, 1, 1),
(66, 6, 1, 0),
(67, 6, 1, 0),
(68, 6, 1, 0),
(69, 7, 1, 1),
(73, 7, 3, 0),
(87, 5, 7, 0),
(88, 26, 7, 1),
(89, 26, 1, 0),
(90, 26, 1, 0),
(91, 26, 1, 0),
(92, 26, 1, 1),
(93, 26, 1, 1),
(94, 26, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
