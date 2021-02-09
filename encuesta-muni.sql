/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.3.15-MariaDB : Database - encuesta-muni
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`encuesta-muni` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `encuesta-muni`;

/*Table structure for table `codigo` */

DROP TABLE IF EXISTS `codigo`;

CREATE TABLE `codigo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=latin1;

/*Data for the table `codigo` */

insert  into `codigo`(`id`,`codigo`) values 
(1,'011824M'),
(2,'011824F'),
(3,'012534M'),
(4,'012534F'),
(5,'013544M'),
(6,'013544F'),
(7,'014554M'),
(8,'014554F'),
(9,'0155ADM'),
(10,'0155ADF'),
(11,'021824M'),
(12,'021824F'),
(13,'022534M'),
(14,'022534F'),
(15,'023544M'),
(16,'023544F'),
(17,'024554M'),
(18,'024554F'),
(19,'0255ADM'),
(20,'0255ADF'),
(21,'031824M'),
(22,'031824F'),
(23,'032534M'),
(24,'032534F'),
(25,'033544M'),
(26,'033544F'),
(27,'034554M'),
(28,'034554F'),
(29,'0355ADM'),
(30,'0355ADF'),
(31,'041824M'),
(32,'041824F'),
(33,'042534M'),
(34,'042534F'),
(35,'043544M'),
(36,'043544F'),
(37,'044554M'),
(38,'044554F'),
(39,'0455ADM'),
(40,'0455ADF'),
(41,'051824M'),
(42,'051824F'),
(43,'052534M'),
(44,'052534F'),
(45,'053544M'),
(46,'053544F'),
(47,'054554M'),
(48,'054554F'),
(49,'0555ADM'),
(50,'0555ADF'),
(51,'061824M'),
(52,'061824F'),
(53,'062534M'),
(54,'062534F'),
(55,'063544M'),
(56,'063544F'),
(57,'064554M'),
(58,'064554F'),
(59,'0655ADM'),
(60,'0655ADF'),
(61,'071824M'),
(62,'071824F'),
(63,'072534M'),
(64,'072534F'),
(65,'073544M'),
(66,'073544F'),
(67,'074554M'),
(68,'074554F'),
(69,'0755ADM'),
(70,'0755ADF'),
(71,'081824M'),
(72,'081824F'),
(73,'082534M'),
(74,'082534F'),
(75,'083544M'),
(76,'083544F'),
(77,'084554M'),
(78,'084554F'),
(79,'0855ADM'),
(80,'0855ADF'),
(81,'091824M'),
(82,'091824F'),
(83,'092534M'),
(84,'092534F'),
(85,'093544M'),
(86,'093544F'),
(87,'094554M'),
(88,'094554F'),
(89,'0955ADM'),
(90,'0955ADF'),
(91,'101824M'),
(92,'101824F'),
(93,'102534M'),
(94,'102534F'),
(95,'103544M'),
(96,'103544F'),
(97,'104554M'),
(98,'104554F'),
(99,'1055ADM'),
(100,'1055ADF'),
(101,'111824M'),
(102,'111824F'),
(103,'112534M'),
(104,'112534F'),
(105,'113544M'),
(106,'113544F'),
(107,'114554M'),
(108,'114554F'),
(109,'1155ADM'),
(110,'1155ADF'),
(111,'121824M'),
(112,'121824F'),
(113,'122534M'),
(114,'122534F'),
(115,'123544M'),
(116,'123544F'),
(117,'124554M'),
(118,'124554F'),
(119,'1255ADM'),
(120,'1255ADF'),
(121,'131824M'),
(122,'131824F'),
(123,'132534M'),
(124,'132534F'),
(125,'133544M'),
(126,'133544F'),
(127,'134554M'),
(128,'134554F'),
(129,'1355ADM'),
(130,'1355ADF'),
(131,'141824M'),
(132,'141824F'),
(133,'142534M'),
(134,'142534F'),
(135,'143544M'),
(136,'143544F'),
(137,'144554M'),
(138,'144554F'),
(139,'1455ADM'),
(140,'1455ADF'),
(141,'151824M'),
(142,'151824F'),
(143,'152534M'),
(144,'152534F'),
(145,'153544M'),
(146,'153544F'),
(147,'154554M'),
(148,'154554F'),
(149,'1555ADM'),
(150,'1555ADF'),
(151,'161824M'),
(152,'161824F'),
(153,'162534M'),
(154,'162534F'),
(155,'163544M'),
(156,'163544F'),
(157,'164554M'),
(158,'164554F'),
(159,'1655ADM'),
(160,'1655ADF'),
(161,'171824M'),
(162,'171824F'),
(163,'172534M'),
(164,'172534F'),
(165,'173544M'),
(166,'173544F'),
(167,'174554M'),
(168,'174554F'),
(169,'1755ADM'),
(170,'1755ADF'),
(171,'181824M'),
(172,'181824F'),
(173,'182534M'),
(174,'182534F'),
(175,'183544M'),
(176,'183544F'),
(177,'184554M'),
(178,'184554F'),
(179,'1855ADM'),
(180,'1855ADF'),
(181,'191824M'),
(182,'191824F'),
(183,'192534M'),
(184,'192534F'),
(185,'193544M'),
(186,'193544F'),
(187,'194554M'),
(188,'194554F'),
(189,'1955ADM'),
(190,'1955ADF'),
(191,'211824M'),
(192,'211824F'),
(193,'212534M'),
(194,'212534F'),
(195,'213544M'),
(196,'213544F'),
(197,'214554M'),
(198,'214554F'),
(199,'2155ADM'),
(200,'2155ADF'),
(201,'241824M'),
(202,'241824F'),
(203,'242534M'),
(204,'242534F'),
(205,'243544M'),
(206,'243544F'),
(207,'244554M'),
(208,'244554F'),
(209,'2455ADM'),
(210,'2455ADF'),
(211,'251824M'),
(212,'251824F'),
(213,'252534M'),
(214,'252534F'),
(215,'253544M'),
(216,'253544F'),
(217,'254554M'),
(218,'254554F'),
(219,'2555ADM'),
(220,'2555ADF');

/*Table structure for table `ponderacion` */

DROP TABLE IF EXISTS `ponderacion`;

CREATE TABLE `ponderacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) DEFAULT NULL,
  `id_pregunta` int(10) unsigned DEFAULT NULL,
  `bien` int(11) DEFAULT NULL,
  `regular` int(11) DEFAULT NULL,
  `mal` int(11) DEFAULT NULL,
  `no_encara` int(11) DEFAULT NULL,
  `ns_nr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ponderacion` */

/*Table structure for table `pregunta` */

DROP TABLE IF EXISTS `pregunta`;

CREATE TABLE `pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `pregunta` */

insert  into `pregunta`(`id`,`nombre`) values 
(1,'¿Conoce quién es el alcalde de Ciudad de Guatemala?'),
(2,'¿Cómo calificaría la GESTIÓN MUNICIPAL en la solución del problema seleccionado?'),
(3,'La Municipalidad de Ciudad de Guatemala trabaja de manera…'),
(4,'la gestión municipal en los siguientes temas:'),
(5,'¿Qué expectativa tiene del trabajo que realizará la Administración Municipal de Ciudad de Guatemala para el siguiente año?'),
(6,'Le voy a dar a conocer 9 obras que podrían llevarse a cabo en un futuro próximo.'),
(7,'Califique la gestión municipal en los siguientes temas con una escala del 1 al 5'),
(8,'Le voy a leer una serie de atributos, por favor califique cada uno, en una escala del 1 al 5. Ricardo Quiñonez es'),
(9,'La persona de Ricardo Quiñonez me causa un sentimiento de:'),
(10,'Cumplimiento de las promesas que hizo el Alcalde'),
(11,' Y ¿Cómo percibe al alcalde Ricardo Quiñonez según la figura que usted eligió?');

/*Table structure for table `rango` */

DROP TABLE IF EXISTS `rango`;

CREATE TABLE `rango` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) DEFAULT NULL,
  `id_pregunta` int(10) unsigned DEFAULT NULL,
  `1` int(11) DEFAULT NULL,
  `2` int(11) DEFAULT NULL,
  `3` int(11) DEFAULT NULL,
  `4` int(11) DEFAULT NULL,
  `5` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rango` */

/*Table structure for table `valoracion` */

DROP TABLE IF EXISTS `valoracion`;

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) DEFAULT NULL,
  `id_pregunta` int(10) unsigned DEFAULT NULL,
  `si` int(11) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `valoracion` */

insert  into `valoracion`(`id`,`codigo`,`id_pregunta`,`si`,`no`) values 
(1,'011824F',2,1,1),
(2,'011824M',1,0,5),
(3,'011824M',1,0,5),
(4,'0155ADM',2,1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
