-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              5.6.12-log - MySQL Community Server (GPL)
-- S.O. server:                  Win32
-- HeidiSQL Versione:            8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dump della struttura del database db_immobili
CREATE DATABASE IF NOT EXISTS `db_immobili` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_immobili`;


-- Dump della struttura di tabella db_immobili.tb_accessori
CREATE TABLE IF NOT EXISTS `tb_accessori` (
  `id_acces_res` int(10) NOT NULL AUTO_INCREMENT,
  `cod_immo` int(10) NOT NULL,
  `tipo_prop` varchar(30) NOT NULL,
  `piano` varchar(15) NOT NULL,
  `livelli` tinyint(1) NOT NULL,
  `ascensore` tinyint(1) NOT NULL,
  `soggiorno` tinyint(3) NOT NULL,
  `cucina` varchar(15) NOT NULL,
  `camera` tinyint(3) NOT NULL,
  `sup_prod` smallint(5) unsigned NOT NULL,
  `sup_uff` smallint(5) unsigned NOT NULL,
  `sup_comm` smallint(5) unsigned NOT NULL,
  `sup_est` smallint(5) unsigned NOT NULL,
  `coltura` varchar(50) NOT NULL,
  `panorama` varchar(50) NOT NULL,
  `ettari` tinyint(4) NOT NULL,
  `giacitura` varchar(50) NOT NULL,
  `dotazione` varchar(50) NOT NULL,
  `bagno` tinyint(3) NOT NULL,
  `balcone` tinyint(1) NOT NULL,
  `terrazza` tinyint(1) NOT NULL,
  `giardino` varchar(15) NOT NULL,
  `garage` varchar(15) NOT NULL,
  `soffitta` tinyint(1) NOT NULL,
  `mansarda` tinyint(1) NOT NULL,
  `cantina` tinyint(1) NOT NULL,
  `taverna` tinyint(1) NOT NULL,
  `piscina` tinyint(1) NOT NULL DEFAULT '0',
  `montacarichi` tinyint(1) NOT NULL,
  `ribalte` tinyint(1) NOT NULL,
  `carroponte` tinyint(1) NOT NULL,
  `arredato` varchar(15) NOT NULL,
  `allarme` varchar(15) NOT NULL,
  `climatizzatore` varchar(15) NOT NULL,
  `riscaldamento` varchar(20) NOT NULL,
  PRIMARY KEY (`id_acces_res`),
  KEY `cod_immo` (`cod_immo`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_accessori: 6 rows
/*!40000 ALTER TABLE `tb_accessori` DISABLE KEYS */;
INSERT INTO `tb_accessori` (`id_acces_res`, `cod_immo`, `tipo_prop`, `piano`, `livelli`, `ascensore`, `soggiorno`, `cucina`, `camera`, `sup_prod`, `sup_uff`, `sup_comm`, `sup_est`, `coltura`, `panorama`, `ettari`, `giacitura`, `dotazione`, `bagno`, `balcone`, `terrazza`, `giardino`, `garage`, `soffitta`, `mansarda`, `cantina`, `taverna`, `piscina`, `montacarichi`, `ribalte`, `carroponte`, `arredato`, `allarme`, `climatizzatore`, `riscaldamento`) VALUES
	(3, 16, 'intera propriet&agrave;', 'rialzato', 1, 1, 2, 'angolo cottura', 2, 0, 0, 0, 0, '', '', 0, '', '', 2, 0, 0, 'privato', '0', 0, 0, 1, 1, 0, 0, 0, 0, '0', '0', '0', 'termosingolo'),
	(4, 17, 'intera propriet&agrave;', '1&deg;', 1, 1, 1, 'angolo cottura', 1, 0, 0, 0, 0, '', '', 0, '', '', 1, 1, 0, '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, '0', 'predisposizione', 'predisposizione', 'centralizzato'),
	(5, 17, 'intera propriet&agrave;', '0', 0, 0, 0, '0', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '0', 'inesistente'),
	(6, 18, 'intera propriet&agrave;', '1&deg;', 1, 1, 1, 'angolo cottura', 1, 0, 0, 0, 0, '', '', 0, '', '', 1, 1, 0, '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, '0', 'predisposizione', 'predisposizione', 'centralizzato'),
	(7, 19, 'intera propriet&agrave;', 'terra', 1, 1, 1, 'abitabile', 2, 0, 0, 0, 0, '', '', 0, '', '', 2, 0, 0, 'privato', '0', 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '0', 'centralizzato'),
	(8, 20, 'intera propriet&agrave;', '1&deg;', 1, 1, 0, '0', 0, 187, 0, 0, 0, '', '', 0, '', '', 2, 1, 0, '0', '0', 0, 0, 0, 0, 0, 1, 0, 0, '0', '0', 'installata', 'termosingolo');
/*!40000 ALTER TABLE `tb_accessori` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_att_comm
CREATE TABLE IF NOT EXISTS `tb_att_comm` (
  `id_att_comm` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nm_att_comm` varchar(30) NOT NULL,
  PRIMARY KEY (`id_att_comm`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_att_comm: 11 rows
/*!40000 ALTER TABLE `tb_att_comm` DISABLE KEYS */;
INSERT INTO `tb_att_comm` (`id_att_comm`, `nm_att_comm`) VALUES
	(1, '-'),
	(2, 'Albergo'),
	(3, 'Bar'),
	(4, 'Edicola'),
	(5, 'Forno'),
	(6, 'Gelateria'),
	(7, 'Parrucchiera/e'),
	(8, 'Pasticceria'),
	(9, 'Pub'),
	(10, 'Ristorante'),
	(11, 'Tabaccheria');
/*!40000 ALTER TABLE `tb_att_comm` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_categ
CREATE TABLE IF NOT EXISTS `tb_categ` (
  `id_categ` tinyint(1) NOT NULL AUTO_INCREMENT,
  `nm_categ` varchar(30) NOT NULL,
  PRIMARY KEY (`id_categ`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_categ: 3 rows
/*!40000 ALTER TABLE `tb_categ` DISABLE KEYS */;
INSERT INTO `tb_categ` (`id_categ`, `nm_categ`) VALUES
	(1, 'Residenziale'),
	(2, 'Commerciale'),
	(3, 'Terreno e Azienda Agricola');
/*!40000 ALTER TABLE `tb_categ` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_comune
CREATE TABLE IF NOT EXISTS `tb_comune` (
  `id_comune` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nm_comune` varchar(30) NOT NULL,
  PRIMARY KEY (`id_comune`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_comune: 4 rows
/*!40000 ALTER TABLE `tb_comune` DISABLE KEYS */;
INSERT INTO `tb_comune` (`id_comune`, `nm_comune`) VALUES
	(1, 'Firenze'),
	(2, 'Campi Bisenzio'),
	(3, 'Bagno A Ripoli'),
	(4, 'Scandicci');
/*!40000 ALTER TABLE `tb_comune` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_cond
CREATE TABLE IF NOT EXISTS `tb_cond` (
  `id_cond` tinyint(1) NOT NULL AUTO_INCREMENT,
  `nm_cond` varchar(30) NOT NULL,
  PRIMARY KEY (`id_cond`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_cond: 8 rows
/*!40000 ALTER TABLE `tb_cond` DISABLE KEYS */;
INSERT INTO `tb_cond` (`id_cond`, `nm_cond`) VALUES
	(1, 'Non Definite'),
	(2, 'Nuova Costruzione'),
	(3, 'Semi Nuovo'),
	(4, 'Ristrutturato'),
	(5, 'Ottime'),
	(6, 'Buone'),
	(7, 'Abitabile'),
	(8, 'Da Ristrutturare');
/*!40000 ALTER TABLE `tb_cond` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_contratto
CREATE TABLE IF NOT EXISTS `tb_contratto` (
  `id_contr` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `nm_contr` varchar(20) NOT NULL,
  PRIMARY KEY (`id_contr`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_contratto: 2 rows
/*!40000 ALTER TABLE `tb_contratto` DISABLE KEYS */;
INSERT INTO `tb_contratto` (`id_contr`, `nm_contr`) VALUES
	(1, 'Affitto'),
	(2, 'Vendita');
/*!40000 ALTER TABLE `tb_contratto` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_desc
CREATE TABLE IF NOT EXISTS `tb_desc` (
  `id_desc` int(10) NOT NULL AUTO_INCREMENT,
  `cod_immo` int(10) NOT NULL,
  `desc` longtext,
  PRIMARY KEY (`id_desc`),
  KEY `cod_immo` (`cod_immo`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_desc: 11 rows
/*!40000 ALTER TABLE `tb_desc` DISABLE KEYS */;
INSERT INTO `tb_desc` (`id_desc`, `cod_immo`, `desc`) VALUES
	(2, 14, 'COVERCIANO PRESSI. Luminoso e tranquillo attico 5 vani di 110mq. composto da ingresso, soggiorno, cucina abitabile, tre matrimoniali, ripostiglio, doppia terrazza e doppi servizi. Posto al terzo piano con ascensore. Riscaldamento centralizzato. Predisposizione aria condizionata. Lo si affitta vuoto.'),
	(3, 15, 'COVERCIANO PRESSI. Luminoso e tranquillo attico 5 vani di 110mq. composto da ingresso, soggiorno, cucina abitabile, tre matrimoniali, ripostiglio, doppia terrazza e doppi servizi. Posto al terzo piano con ascensore. Riscaldamento centralizzato. Predisposizione aria condizionata. Lo si affitta vuoto.'),
	(4, 15, 'COVERCIANO PRESSI. Luminoso e tranquillo attico 5 vani di 110mq. composto da ingresso, soggiorno, cucina abitabile, tre matrimoniali, ripostiglio, doppia terrazza e doppi servizi. Posto al terzo piano con ascensore. Riscaldamento centralizzato. Predisposizione aria condizionata. Lo si affitta vuoto.'),
	(5, 15, 'COVERCIANO PRESSI. Luminoso e tranquillo attico 5 vani di 110mq. composto da ingresso, soggiorno, cucina abitabile, tre matrimoniali, ripostiglio, doppia terrazza e doppi servizi. Posto al terzo piano con ascensore. Riscaldamento centralizzato. Predisposizione aria condizionata. Lo si affitta vuoto.'),
	(6, 16, 'VALLINA PRESSI, a circa 4 km dal Viale Europa, vendesi appartamento ristrutturato di 5 vani 115 mq oltre giardino di 120 mq circa, posto al piano terra rialzato in piccolo terratetto edificato nel 2002. Provvisto di doppio ingresso, &egrave; attualmente composto da soggiorno doppio con angolo cottura, camera matrimoniale dotata di cabina armadio, camera singola e studio. Dotato di doppi servizi, ripostiglio, taverna con ulteriore servizio e cantina. Riscaldamento autonomo, aria condizionata, due posti auto esclusivi con cancello automatico. Predisposto per eventuale divisione in due unit&agrave; indipendenti. Prezzo trattabile.'),
	(7, 17, 'COVERCIANO pressi vendesi luminoso laboratorio di 500 mq  in ottimo stato, posto al piano terra con passo carrabile e composto da grande vano principale, ulteriore ampio vano, doppi servizi e vano archivio. Si presta a varie destinazioni d''uso.'),
	(8, 17, 'VIALE VOLTA pressi vendesi appartamento di due vani e mezzo di 60 mq. ca. ristrutturato con ingresso indipendente, posto al primo piano. Composto da soggiorno con angolo cottura, camera matrimoniale, ripostiglio, servizio e balcone. Posto auto condominiale. Termocentrale e predisposizione aria condizionata, tv-sat, e allarme.\r\n'),
	(9, 17, ''),
	(10, 18, 'VIALE VOLTA pressi vendesi appartamento di due vani e mezzo di 60 mq. ca. ristrutturato con ingresso indipendente, posto al primo piano. Composto da soggiorno con angolo cottura, camera matrimoniale, ripostiglio, servizio e balcone. Posto auto condominiale. Termocentrale e predisposizione aria condizionata, tv-sat, e allarme.\r\n'),
	(11, 19, 'COVERCIANO-GIGNORO PRESSI affittasi in zona silenziosa appartamento 4 vani di 100mq. con ampio giardino privato, posto al piano terra di stabile di tre piani. Composto da ingresso, soggiorno, cucina abitabile, due camere matrimoniali, ripostiglio, terrazzo e doppi servizi. Riscaldamento centralizzato. Lo si affitta vuoto o arredato di sola cucina. Possibilit&agrave; di affittare posto auto coperto. Libero da Luglio.'),
	(12, 20, 'SCANDICCI VIA DEI PRATONI PRESSI affittasi laboratorio in ottime condizioni posto al primo e ultimo piano con ascensore montacarichi. Metratura 187 mq oltre terrazza di 40 mq e doppio servizio. Aria condizionata e riscaldamento. Abbondanza di posti auto nell''area esterna. Prezzo trattabile.');
/*!40000 ALTER TABLE `tb_desc` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_geo
CREATE TABLE IF NOT EXISTS `tb_geo` (
  `id_geo` int(10) NOT NULL AUTO_INCREMENT,
  `cod_immo` int(10) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  PRIMARY KEY (`id_geo`),
  KEY `cod_immo` (`cod_immo`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_geo: 3 rows
/*!40000 ALTER TABLE `tb_geo` DISABLE KEYS */;
INSERT INTO `tb_geo` (`id_geo`, `cod_immo`, `lat`, `lng`) VALUES
	(7, 17, 0.000000, 0.000000),
	(6, 16, 0.000000, 0.000000),
	(8, 17, 0.000000, 0.000000);
/*!40000 ALTER TABLE `tb_geo` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_image
CREATE TABLE IF NOT EXISTS `tb_image` (
  `id_img` int(10) NOT NULL AUTO_INCREMENT,
  `cod_immo` int(10) NOT NULL,
  `thumb` varchar(50) DEFAULT NULL,
  `gallery` varchar(50) DEFAULT NULL,
  `vetrina` varchar(50) DEFAULT NULL,
  `alt` varchar(30) DEFAULT NULL,
  `pos` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_img`),
  KEY `cod_immo` (`cod_immo`,`pos`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_image: 68 rows
/*!40000 ALTER TABLE `tb_image` DISABLE KEYS */;
INSERT INTO `tb_image` (`id_img`, `cod_immo`, `thumb`, `gallery`, `vetrina`, `alt`, `pos`) VALUES
	(36, 16, 'thumb/DSCN1111.JPG', 'gallery/DSCN1111.JPG', '-', '-', 12),
	(37, 16, 'thumb/DSCN1112.JPG', 'gallery/DSCN1112.JPG', '-', '-', 13),
	(38, 17, 'thumb/P1060637.JPG', 'gallery/P1060637.JPG', 'vetrina/P1060637.JPG', '-', 0),
	(39, 17, 'thumb/P1060638.JPG', 'gallery/P1060638.JPG', '-', '-', 1),
	(35, 16, 'thumb/DSCN1109.JPG', 'gallery/DSCN1109.JPG', '-', '-', 11),
	(34, 16, 'thumb/DSCN1108.JPG', 'gallery/DSCN1108.JPG', '-', '-', 10),
	(33, 16, 'thumb/DSCN1107.JPG', 'gallery/DSCN1107.JPG', '-', '-', 9),
	(32, 16, 'thumb/DSCN1106.JPG', 'gallery/DSCN1106.JPG', '-', '-', 8),
	(31, 16, 'thumb/DSCN1096.JPG', 'gallery/DSCN1096.JPG', '-', '-', 7),
	(30, 16, 'thumb/DSCN1075.JPG', 'gallery/DSCN1075.JPG', '-', '-', 6),
	(29, 16, 'thumb/DSCN1074.JPG', 'gallery/DSCN1074.JPG', '-', '-', 5),
	(28, 16, 'thumb/DSCN1073.JPG', 'gallery/DSCN1073.JPG', '-', '-', 4),
	(27, 16, 'thumb/DSCN0024.JPG', 'gallery/DSCN0024.JPG', '-', '-', 3),
	(25, 16, 'thumb/DSC_0879.JPG', 'gallery/DSC_0879.JPG', '-', '-', 1),
	(26, 16, 'thumb/DSCN0016.JPG', 'gallery/DSCN0016.JPG', '-', '-', 2),
	(24, 16, 'thumb/DSC_0874.JPG', 'gallery/DSC_0874.JPG', 'vetrina/DSC_0874.JPG', '-', 0),
	(40, 17, 'thumb/P1060639.JPG', 'gallery/P1060639.JPG', '-', '-', 2),
	(41, 17, 'thumb/P1060640.JPG', 'gallery/P1060640.JPG', '-', '-', 3),
	(42, 17, 'thumb/P1060641.JPG', 'gallery/P1060641.JPG', '-', '-', 4),
	(43, 17, 'thumb/P1060642.JPG', 'gallery/P1060642.JPG', '-', '-', 5),
	(44, 17, 'thumb/P1060643.JPG', 'gallery/P1060643.JPG', '-', '-', 6),
	(45, 17, 'thumb/P1060644.JPG', 'gallery/P1060644.JPG', '-', '-', 7),
	(46, 17, 'thumb/P1060645.JPG', 'gallery/P1060645.JPG', '-', '-', 8),
	(47, 17, 'thumb/P1060646.JPG', 'gallery/P1060646.JPG', '-', '-', 9),
	(48, 17, 'thumb/P1060647.JPG', 'gallery/P1060647.JPG', '-', '-', 10),
	(49, 17, 'thumb/P1060648.JPG', 'gallery/P1060648.JPG', '-', '-', 11),
	(50, 17, 'thumb/P1060649.JPG', 'gallery/P1060649.JPG', '-', '-', 12),
	(51, 17, 'thumb/P1060650.JPG', 'gallery/P1060650.JPG', '-', '-', 13),
	(52, 17, 'thumb/P1060651.JPG', 'gallery/P1060651.JPG', '-', '-', 14),
	(53, 17, 'thumb/planimetriaV00560.jpg', 'gallery/planimetriaV00560.jpg', '-', '-', 15),
	(54, 18, 'thumb/IMG-20130304-00063.jpg', 'gallery/IMG-20130304-00063.jpg', '-', '-', 0),
	(55, 18, 'thumb/P1020390.JPG', 'gallery/P1020390.JPG', '-', '-', 1),
	(56, 18, 'thumb/P1020391.JPG', 'gallery/P1020391.JPG', '-', '-', 2),
	(57, 18, 'thumb/P1020392.JPG', 'gallery/P1020392.JPG', '-', '-', 3),
	(58, 18, 'thumb/P1020393.JPG', 'gallery/P1020393.JPG', '-', '-', 4),
	(59, 18, 'thumb/P1020394.JPG', 'gallery/P1020394.JPG', '-', '-', 5),
	(60, 18, 'thumb/P1020395.JPG', 'gallery/P1020395.JPG', '-', '-', 6),
	(61, 18, 'thumb/P1020396.JPG', 'gallery/P1020396.JPG', '-', '-', 7),
	(62, 18, 'thumb/P1020397.JPG', 'gallery/P1020397.JPG', '-', '-', 8),
	(63, 18, 'thumb/P1020398.JPG', 'gallery/P1020398.JPG', '-', '-', 9),
	(64, 18, 'thumb/P1020399.JPG', 'gallery/P1020399.JPG', '-', '-', 10),
	(65, 18, 'thumb/P1020400.JPG', 'gallery/P1020400.JPG', '-', '-', 11),
	(66, 18, 'thumb/P1020401.JPG', 'gallery/P1020401.JPG', '-', '-', 12),
	(67, 18, 'thumb/planimetriaV01-529.jpg', 'gallery/planimetriaV01-529.jpg', '-', '-', 13),
	(68, 19, 'thumb/P1030590.JPG', 'gallery/P1030590.JPG', '-', '-', 0),
	(69, 19, 'thumb/P1030591.JPG', 'gallery/P1030591.JPG', '-', '-', 1),
	(70, 19, 'thumb/P1030592.JPG', 'gallery/P1030592.JPG', '-', '-', 2),
	(71, 19, 'thumb/P1030594.JPG', 'gallery/P1030594.JPG', '-', '-', 3),
	(72, 19, 'thumb/P1030595.JPG', 'gallery/P1030595.JPG', '-', '-', 4),
	(73, 19, 'thumb/P1030596.JPG', 'gallery/P1030596.JPG', '-', '-', 5),
	(74, 19, 'thumb/P1030597.JPG', 'gallery/P1030597.JPG', '-', '-', 6),
	(75, 19, 'thumb/P1030598.JPG', 'gallery/P1030598.JPG', '-', '-', 7),
	(76, 19, 'thumb/P1030599.JPG', 'gallery/P1030599.JPG', '-', '-', 8),
	(77, 19, 'thumb/P1030600.JPG', 'gallery/P1030600.JPG', '-', '-', 9),
	(78, 19, 'thumb/P1030601.JPG', 'gallery/P1030601.JPG', '-', '-', 10),
	(79, 19, 'thumb/P1030602.JPG', 'gallery/P1030602.JPG', '-', '-', 11),
	(80, 19, 'thumb/P1030604.JPG', 'gallery/P1030604.JPG', '-', '-', 12),
	(81, 19, 'thumb/P1030605.JPG', 'gallery/P1030605.JPG', '-', '-', 13),
	(82, 19, 'thumb/planimetriaA00-413.jpg', 'gallery/planimetriaA00-413.jpg', '-', '-', 14),
	(83, 20, 'thumb/P1040010.JPG', 'gallery/P1040010.JPG', '-', '-', 0),
	(84, 20, 'thumb/P1040011.JPG', 'gallery/P1040011.JPG', '-', '-', 1),
	(85, 20, 'thumb/P1040012.JPG', 'gallery/P1040012.JPG', '-', '-', 2),
	(86, 20, 'thumb/P1040013.JPG', 'gallery/P1040013.JPG', '-', '-', 3),
	(87, 20, 'thumb/P1040014.JPG', 'gallery/P1040014.JPG', '-', '-', 4),
	(88, 20, 'thumb/P1040015.JPG', 'gallery/P1040015.JPG', '-', '-', 5),
	(89, 20, 'thumb/P1040016.JPG', 'gallery/P1040016.JPG', '-', '-', 6),
	(90, 20, 'thumb/P1040017.JPG', 'gallery/P1040017.JPG', '-', '-', 7),
	(91, 20, 'thumb/planimetriaV02-424.jpg', 'gallery/planimetriaV02-424.jpg', '-', '-', 8);
/*!40000 ALTER TABLE `tb_image` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_immobile
CREATE TABLE IF NOT EXISTS `tb_immobile` (
  `id_immo` int(10) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `cod_rif` varchar(7) NOT NULL,
  `stato` tinyint(1) NOT NULL,
  `contratto` tinyint(1) NOT NULL,
  `categ` tinyint(1) NOT NULL,
  `tipo` tinyint(2) NOT NULL,
  `att_comm` tinyint(2) NOT NULL,
  `cond` tinyint(1) NOT NULL,
  `vani` tinyint(2) NOT NULL,
  `sup` smallint(6) NOT NULL,
  `comune` tinyint(2) NOT NULL,
  `zona` tinyint(2) NOT NULL,
  `prezzo` int(15) NOT NULL,
  `ape` varchar(12) NOT NULL,
  `epi` varchar(30) NOT NULL,
  `slideshow` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_immo`),
  UNIQUE KEY `cod_rif` (`cod_rif`),
  KEY `contratto` (`contratto`,`categ`,`tipo`,`att_comm`,`cond`,`comune`,`zona`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_immobile: 5 rows
/*!40000 ALTER TABLE `tb_immobile` DISABLE KEYS */;
INSERT INTO `tb_immobile` (`id_immo`, `data`, `cod_rif`, `stato`, `contratto`, `categ`, `tipo`, `att_comm`, `cond`, `vani`, `sup`, `comune`, `zona`, `prezzo`, `ape`, `epi`, `slideshow`) VALUES
	(17, '2013-08-11', 'V00-560', 1, 2, 2, 25, 1, 5, 3, 500, 1, 5, 800000, 'non soggetto', ' kwh/mq&nbsp;annuo', 1),
	(16, '2013-08-11', 'V00-565', 1, 2, 1, 1, 1, 4, 5, 110, 3, 51, 450000, 'G', '175 kwh/mq*annuo', 1),
	(18, '2013-08-20', 'V01-529', 1, 2, 1, 1, 1, 4, 2, 60, 1, 5, 193000, 'G', '175 kwh/mq&nbsp;annuo', 0),
	(19, '2013-08-20', 'A00-413', 1, 1, 1, 1, 1, 5, 4, 130, 1, 5, 1050, 'G', '175 kwh/mq&nbsp;annuo', 0),
	(20, '2013-08-20', 'A00-424', 1, 1, 2, 25, 1, 6, 1, 187, 1, 12, 1300, 'G', '175 kwh/mq&nbsp;annuo', 0);
/*!40000 ALTER TABLE `tb_immobile` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_tipo
CREATE TABLE IF NOT EXISTS `tb_tipo` (
  `id_tipo` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nm_tipo` varchar(30) NOT NULL,
  `cod_categ` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_tipo`),
  KEY `cod_categ` (`cod_categ`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_tipo: 38 rows
/*!40000 ALTER TABLE `tb_tipo` DISABLE KEYS */;
INSERT INTO `tb_tipo` (`id_tipo`, `nm_tipo`, `cod_categ`) VALUES
	(1, 'Appartamento', 1),
	(2, 'Appartamento Indipendente', 1),
	(3, 'Attico', 1),
	(4, 'Casa Semi Indipendente', 1),
	(5, 'Casa Singola', 1),
	(6, 'Colonica', 1),
	(7, 'Garage', 1),
	(8, 'Loft', 1),
	(9, 'Mansarda', 1),
	(10, 'Masseria', 1),
	(11, 'Multipropriet&agrave;', 1),
	(12, 'Nuova Costruzione', 1),
	(13, 'Palazzo', 1),
	(14, 'Rustico Casale', 1),
	(15, 'Stanza/Casale', 1),
	(16, 'Tenuta-Complesso', 1),
	(17, 'Terratetto', 1),
	(18, 'Villa', 1),
	(19, 'Villa a schiera', 1),
	(20, 'Villa bifamiliare', 1),
	(21, 'Villino', 1),
	(22, 'Attivit&agrave; Commerciale', 2),
	(23, 'Capannone Industriale', 2),
	(24, 'Capannone Commerciale', 2),
	(25, 'Laboratorio', 2),
	(26, 'Locale Commerciale', 2),
	(27, 'Magazzino', 2),
	(28, 'Negozio', 2),
	(29, 'Stabile', 2),
	(30, 'Ufficio', 2),
	(31, 'Agriturismo', 3),
	(32, 'Annesso Agricolo', 3),
	(33, 'Azienda Agricola', 3),
	(34, 'Baita', 3),
	(35, 'Castello', 3),
	(36, 'Terreno Agricolo', 3),
	(37, 'Terreno Edificabile', 3),
	(38, 'Terreno Industriale', 3);
/*!40000 ALTER TABLE `tb_tipo` ENABLE KEYS */;


-- Dump della struttura di tabella db_immobili.tb_zona
CREATE TABLE IF NOT EXISTS `tb_zona` (
  `id_zona` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nm_zona` varchar(60) NOT NULL,
  `cod_comune` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_zona`),
  KEY `cod_comune` (`cod_comune`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella db_immobili.tb_zona: 79 rows
/*!40000 ALTER TABLE `tb_zona` DISABLE KEYS */;
INSERT INTO `tb_zona` (`id_zona`, `nm_zona`, `cod_comune`) VALUES
	(1, 'Alberti', 1),
	(2, 'Beccaria', 1),
	(3, 'Bellosguardo', 1),
	(4, 'Bolognese', 1),
	(5, 'Campo di Marte', 1),
	(6, 'Centro Duomo', 1),
	(7, 'Centro Oltrarno', 1),
	(8, 'Galluzzo', 1),
	(9, 'Gavinana', 1),
	(10, 'Isolotto', 1),
	(11, 'Le Piaggie', 1),
	(12, 'Legnaia', 1),
	(13, 'Libert&agrave;', 1),
	(14, 'Novoli', 1),
	(15, 'Peretola', 1),
	(16, 'Piazza Leopoldo', 1),
	(17, 'Poggio Imperiale', 1),
	(18, 'Porta a Prato', 1),
	(19, 'Porta Romana', 1),
	(20, 'Rifredi', 1),
	(21, 'San Domenico', 1),
	(22, 'Santa Croce', 1),
	(23, 'Statuto', 1),
	(24, 'Varlungo', 1),
	(25, 'Capalle', 2),
	(26, 'Il Rosi', 2),
	(27, 'Indicatore', 2),
	(28, 'La Madonnina', 2),
	(29, 'Le Torri', 2),
	(30, 'Limite', 2),
	(31, 'Poggio Nuovo', 2),
	(32, 'San Cresci', 2),
	(33, 'San Donnino', 2),
	(34, 'San Giusto', 2),
	(35, 'San Lorenzo', 2),
	(36, 'San Martino', 2),
	(37, 'San Piero a Ponti', 2),
	(38, 'Sant''Angelo a Lecore', 2),
	(39, 'Santa Maria', 2),
	(40, 'Santo Stefano', 2),
	(41, 'Antella', 3),
	(42, 'Candeli', 3),
	(43, 'Capannuccia', 3),
	(44, 'Grassina', 3),
	(45, 'Meoste', 3),
	(46, 'Osteria Nuova', 3),
	(47, 'Ponte A Ema', 3),
	(48, 'Ponte A Niccheri', 3),
	(49, 'Rimaggio', 3),
	(50, 'San Donato in Collina', 3),
	(51, 'Vallina', 3),
	(52, 'Villamagna', 3),
	(53, 'Bagno A Ripoli', 3),
	(54, 'Bellariva', 1),
	(55, 'Oberdan', 1),
	(56, 'Coverciano', 1),
	(57, 'Le Cure', 1),
	(58, 'Santo Spirito', 1),
	(59, 'San Frediano', 1),
	(60, 'Certosa', 1),
	(61, 'Viale Europa', 1),
	(62, 'Firenze Sud', 1),
	(63, 'Talenti', 1),
	(64, 'Pistoiese', 1),
	(65, 'Soffiano', 1),
	(66, 'Savonarola', 1),
	(67, 'Firenze Nova', 1),
	(68, 'Firenze Nord', 1),
	(69, 'Brozzi', 1),
	(70, 'Vittorio Emanuele', 1),
	(71, 'Piazzale Michelangelo', 1),
	(72, 'Pian dei Giullari', 1),
	(73, 'San Jacopino', 1),
	(74, 'Giardino di Boboli', 1),
	(75, 'Careggi', 1),
	(76, 'Settignano', 1),
	(77, 'Sant''Ambrogio', 1),
	(78, 'Fortezza', 1),
	(79, 'Rovezzano', 1);
/*!40000 ALTER TABLE `tb_zona` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
