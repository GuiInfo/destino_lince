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
INSERT INTO `destinos` VALUES (68,'São Paulo','São Paulo é um estado brasileiro da região Sudeste. Trata-se da unidade de federação mais populosa do país, com 46 milhões de pessoas, e abriga também a cidade com maior concentração de habitantes do Brasil, que é a sua capital.','01034-903','Fundada em 1554 por padres jesuítas, a cidade é mundialmente conhecida e exerce significativa influência nacional e internacional, seja do ponto de vista cultural, econômico ou político.');
INSERT INTO `destinos` VALUES (69,'Rio de Janeiro','O Rio de Janeiro é um estado brasileiro situado na região Sudeste do país. É a quarta menor unidade da federação em área, mas a terceira mais populosa, reunindo 17,3 milhões de habitantes. Sua capital já foi também sede do governo brasileiro, entre 1763.','23545-037','O Rio de Janeiro é um estado brasileiro localizado na região Sudeste, tendo como capital o município de mesmo nome. Sua área territorial é de 43.750 km², a quarta menor do território nacional, depois ');
INSERT INTO `destinos` VALUES (70,'Curitiba','Curitiba é uma cidade brasileira situada no estado do Paraná, na região Sul do país. Abriga a sede do governo estadual, desempenhando, dessa forma, a função de capital. Trata-se da cidade paranaense mais populosa, com pouco mais de 1,94 milhão de habitant','81170-423','Curitiba é a capital do estado do Paraná, na região Sul do Brasil. A cidade conta hoje com mais de 1,94 milhão de habitantes e consiste em uma das capitais mais ricas do país.');
INSERT INTO `destinos` VALUES (71,'Rio Grande do Sul','O Rio Grande do Sul está situado na Zona Temperada Sul do planeta. Em função disso, o clima predominante no estado é o Subtropical Úmido. Uma das suas principais características é a melhor distinção entre as quatro estações e as chuvas abundantes e bem di','96050-500','O Rio Grande do Sul é um estado brasileiro que integra a região Sul, sendo a unidade mais meridional do território nacional. A sede do governo estadual fica na cidade de Porto Alegre. Com 11,4 milhões');
INSERT INTO `destinos` VALUES (72,'Porto Alegre','Porto Alegre é a capital do estado do Rio Grande do Sul, que fica na região Sul do Brasil. Uma parte de sua superfície, que é de 495 km², divide-se em ilhas circundadas pelo lago Guaíba, o qual se tornou uma importante área de lazer e ponto turístico.','04870-470','Porto Alegre, capital do Rio Grande do Sul, é seu município mais populoso, com 1,48 milhão de habitantes. Possui clima Subtropical e um relevo composto por planícies e morros.');
INSERT INTO `destinos` VALUES (73,'Pirajuí','Pirajuí\" é um termo em língua brasílica que significa \"rio dos pirajus\". Outra fonte afirma que a palavra é fruto da junção dos termos em tupi \"pira\" (peixe), \"íub\" (amarelo) e \"y\" (água), de modo que \"pirajuí\" seria \"água do peixe amarelo\"; com efeito, m','16600-001','Pirajuí é um município do estado de São Paulo, no Brasil. O município é formado pela sede e pelos distritos de Corredeira, Pradínia e Santo Antônio da Estiva[5][6].');
INSERT INTO `destinos` VALUES (74,'Bauru','Bauru é um município brasileiro do interior do estado de São Paulo, sendo o município mais populoso do Centro-Oeste paulista. Pertence à Mesorregião e Microrregião de Bauru, localizando-se a noroeste da capital do estado, distando desta cerca de 326 km.','17010-001','CIDADE DO LANCHE');
INSERT INTO `destinos` VALUES (75,'Agudos','Agudos é um município brasileiro localizado no centro-oeste do estado de São Paulo. Localiza-se a 330 quilômetros da capital, sendo o acesso pela Rodovia Marechal Rondon. Sua posição geográfica é 47°4\'39\" de longitude oeste e 22°53\'20\" de latitude sul. O ','17120-078','CIDADE DO PASTEL');
INSERT INTO `destinos` VALUES (76,'Piratininga','Piratininga localiza-se na região conhecida como Alta Paulista, a noroeste do Estado de São Paulo, pertencente à Região Administrativa de Bauru. A origem da cidade remonta ao ano de 1887, quando na encosta da Serra do Veado, contraforte da Serra de Agudos','17490-000','Piratininga é um município brasileiro do estado de São Paulo. O município é formado somente pelo distrito sede, que inclui o povoado de Brasília Paulista.');
INSERT INTO `destinos` VALUES (77,'Itápolis','O território do município de Itápolis é conhecido desde 1723, quando estiveram aqui os senhores Sebastião Sutil de Oliveira e o Padre Frutuoso da Conceição, a procura de ouro, nas imediações de Araraquara. Mas, é em 2 de maio de 1856 que acontece a compra','06680-155','Itápolis é um município do estado de São Paulo, no Brasil. Em 2011, era o maior produtor de laranja do país. Conforme dados do IBGE de 2019, sua população foi estimada em 43 120 habitantes. O municípi');
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
