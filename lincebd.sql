# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: lincebd
# ------------------------------------------------------
# Server version 5.5.5-10.4.21-MariaDB

DROP DATABASE IF EXISTS `lincebd`;
CREATE DATABASE `lincebd` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `lincebd`;

#
# Source for table destinos
#

DROP TABLE IF EXISTS `destinos`;
CREATE TABLE `destinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `minidescricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table destinos
#

LOCK TABLES `destinos` WRITE;
/*!40000 ALTER TABLE `destinos` DISABLE KEYS */;
INSERT INTO `destinos` VALUES (68,'S�o Paulo','S�o Paulo � um estado brasileiro da regi�o Sudeste. Trata-se da unidade de federa��o mais populosa do pa�s, com 46 milh�es de pessoas, e abriga tamb�m a cidade com maior concentra��o de habitantes do Brasil, que � a sua capital.','01034-903','Fundada em 1554 por padres jesu�tas, a cidade � mundialmente conhecida e exerce significativa influ�ncia nacional e internacional, seja do ponto de vista cultural, econ�mico ou pol�tico.');
INSERT INTO `destinos` VALUES (69,'Rio de Janeiro','O Rio de Janeiro � um estado brasileiro situado na regi�o Sudeste do pa�s. � a quarta menor unidade da federa��o em �rea, mas a terceira mais populosa, reunindo 17,3 milh�es de habitantes. Sua capital j� foi tamb�m sede do governo brasileiro, entre 1763.','23545-037','O Rio de Janeiro � um estado brasileiro localizado na regi�o Sudeste, tendo como capital o munic�pio de mesmo nome. Sua �rea territorial � de 43.750 km�, a quarta menor do territ�rio nacional, depois ');
INSERT INTO `destinos` VALUES (70,'Curitiba','Curitiba � uma cidade brasileira situada no estado do Paran�, na regi�o Sul do pa�s. Abriga a sede do governo estadual, desempenhando, dessa forma, a fun��o de capital. Trata-se da cidade paranaense mais populosa, com pouco mais de 1,94 milh�o de habitant','81170-423','Curitiba � a capital do estado do Paran�, na regi�o Sul do Brasil. A cidade conta hoje com mais de 1,94 milh�o de habitantes e consiste em uma das capitais mais ricas do pa�s.');
INSERT INTO `destinos` VALUES (71,'Rio Grande do Sul','O Rio Grande do Sul est� situado na Zona Temperada Sul do planeta. Em fun��o disso, o clima predominante no estado � o Subtropical �mido. Uma das suas principais caracter�sticas � a melhor distin��o entre as quatro esta��es e as chuvas abundantes e bem di','96050-500','O Rio Grande do Sul � um estado brasileiro que integra a regi�o Sul, sendo a unidade mais meridional do territ�rio nacional. A sede do governo estadual fica na cidade de Porto Alegre. Com 11,4 milh�es');
INSERT INTO `destinos` VALUES (72,'Porto Alegre','Porto Alegre � a capital do estado do Rio Grande do Sul, que fica na regi�o Sul do Brasil. Uma parte de sua superf�cie, que � de 495 km�, divide-se em ilhas circundadas pelo lago Gua�ba, o qual se tornou uma importante �rea de lazer e ponto tur�stico.','04870-470','Porto Alegre, capital do Rio Grande do Sul, � seu munic�pio mais populoso, com 1,48 milh�o de habitantes. Possui clima Subtropical e um relevo composto por plan�cies e morros.');
INSERT INTO `destinos` VALUES (73,'Piraju�','Piraju�\" � um termo em l�ngua bras�lica que significa \"rio dos pirajus\". Outra fonte afirma que a palavra � fruto da jun��o dos termos em tupi \"pira\" (peixe), \"�ub\" (amarelo) e \"y\" (�gua), de modo que \"piraju�\" seria \"�gua do peixe amarelo\"; com efeito, m','16600-001','Piraju� � um munic�pio do estado de S�o Paulo, no Brasil. O munic�pio � formado pela sede e pelos distritos de Corredeira, Prad�nia e Santo Ant�nio da Estiva[5][6].');
INSERT INTO `destinos` VALUES (74,'Bauru','Bauru � um munic�pio brasileiro do interior do estado de S�o Paulo, sendo o munic�pio mais populoso do Centro-Oeste paulista. Pertence � Mesorregi�o e Microrregi�o de Bauru, localizando-se a noroeste da capital do estado, distando desta cerca de 326 km.','17010-001','CIDADE DO LANCHE');
INSERT INTO `destinos` VALUES (75,'Agudos','Agudos � um munic�pio brasileiro localizado no centro-oeste do estado de S�o Paulo. Localiza-se a 330 quil�metros da capital, sendo o acesso pela Rodovia Marechal Rondon. Sua posi��o geogr�fica � 47�4\'39\" de longitude oeste e 22�53\'20\" de latitude sul. O ','17120-078','CIDADE DO PASTEL');
INSERT INTO `destinos` VALUES (76,'Piratininga','Piratininga localiza-se na regi�o conhecida como Alta Paulista, a noroeste do Estado de S�o Paulo, pertencente � Regi�o Administrativa de Bauru. A origem da cidade remonta ao ano de 1887, quando na encosta da Serra do Veado, contraforte da Serra de Agudos','17490-000','Piratininga � um munic�pio brasileiro do estado de S�o Paulo. O munic�pio � formado somente pelo distrito sede, que inclui o povoado de Bras�lia Paulista.');
INSERT INTO `destinos` VALUES (77,'It�polis','O territ�rio do munic�pio de It�polis � conhecido desde 1723, quando estiveram aqui os senhores Sebasti�o Sutil de Oliveira e o Padre Frutuoso da Concei��o, a procura de ouro, nas imedia��es de Araraquara. Mas, � em 2 de maio de 1856 que acontece a compra','06680-155','It�polis � um munic�pio do estado de S�o Paulo, no Brasil. Em 2011, era o maior produtor de laranja do pa�s. Conforme dados do IBGE de 2019, sua popula��o foi estimada em 43 120 habitantes. O munic�pi');
/*!40000 ALTER TABLE `destinos` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table usuarios
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table usuarios
#

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (3,'admin','admin123456');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
