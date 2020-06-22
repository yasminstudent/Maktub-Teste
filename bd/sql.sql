CREATE DATABASE  IF NOT EXISTS `dbmaktub_teste` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dbmaktub_teste`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbmaktub_teste
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblcliente`
--

DROP TABLE IF EXISTS `tblcliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblcliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(3000) NOT NULL,
  `idtipo_cnpj` int(11) NOT NULL,
  `tipo_contato` varchar(45) NOT NULL,
  `celular` varchar(16) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idtipo_cnpj` (`idtipo_cnpj`),
  CONSTRAINT `tblcliente_ibfk_1` FOREIGN KEY (`idtipo_cnpj`) REFERENCES `tbltipo_cnpj` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcliente`
--

LOCK TABLES `tblcliente` WRITE;
/*!40000 ALTER TABLE `tblcliente` DISABLE KEYS */;
INSERT INTO `tblcliente` VALUES (1,'JOICE RIBEIRO',2,'TELEFONE','(011) 11111-1111','');
/*!40000 ALTER TABLE `tblcliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcliente_plano`
--

DROP TABLE IF EXISTS `tblcliente_plano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblcliente_plano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `idplano_modalidade` int(11) NOT NULL,
  `preço` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idplano` (`idplano_modalidade`),
  KEY `idcliente` (`idcliente`),
  CONSTRAINT `tblcliente_plano_ibfk_1` FOREIGN KEY (`idplano_modalidade`) REFERENCES `tblplano_modalidade` (`id`),
  CONSTRAINT `tblcliente_plano_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `tblcliente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcliente_plano`
--

LOCK TABLES `tblcliente_plano` WRITE;
/*!40000 ALTER TABLE `tblcliente_plano` DISABLE KEYS */;
INSERT INTO `tblcliente_plano` VALUES (1,1,5,405.35);
/*!40000 ALTER TABLE `tblcliente_plano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcontato`
--

DROP TABLE IF EXISTS `tblcontato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblcontato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(3000) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` text,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcontato`
--

LOCK TABLES `tblcontato` WRITE;
/*!40000 ALTER TABLE `tblcontato` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblcontato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblfaixa`
--

DROP TABLE IF EXISTS `tblfaixa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblfaixa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faixa` varchar(45) NOT NULL,
  `percentual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblfaixa`
--

LOCK TABLES `tblfaixa` WRITE;
/*!40000 ALTER TABLE `tblfaixa` DISABLE KEYS */;
INSERT INTO `tblfaixa` VALUES (1,'0-18',5),(2,'19-23',10),(3,'24-28',15),(4,'29-33',20),(5,'34-38',25),(6,'39-43',35),(7,'44-48',45),(8,'49-53',55),(9,'54-58',65),(10,'59+',75);
/*!40000 ALTER TABLE `tblfaixa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmodalidade`
--

DROP TABLE IF EXISTS `tblmodalidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblmodalidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(3000) NOT NULL,
  `percentual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmodalidade`
--

LOCK TABLES `tblmodalidade` WRITE;
/*!40000 ALTER TABLE `tblmodalidade` DISABLE KEYS */;
INSERT INTO `tblmodalidade` VALUES (1,'Enfermaria',10),(2,'Apartamento',20);
/*!40000 ALTER TABLE `tblmodalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblplano`
--

DROP TABLE IF EXISTS `tblplano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblplano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operadora` varchar(3000) NOT NULL,
  `reembolso` int(11) NOT NULL,
  `foto` varchar(3000) DEFAULT NULL,
  `preco_base` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplano`
--

LOCK TABLES `tblplano` WRITE;
/*!40000 ALTER TABLE `tblplano` DISABLE KEYS */;
INSERT INTO `tblplano` VALUES (1,'Bradesco Saúde',15,NULL,100),(2,'Notre Dame Intermédica',20,NULL,120),(3,'Unimed',17,NULL,110),(4,'Amil',25,NULL,130),(5,'Sul América',15,NULL,115);
/*!40000 ALTER TABLE `tblplano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblplano_modalidade`
--

DROP TABLE IF EXISTS `tblplano_modalidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblplano_modalidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idplano` int(11) NOT NULL,
  `idmodalidade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idplano` (`idplano`),
  KEY `idmodalidade` (`idmodalidade`),
  CONSTRAINT `tblplano_modalidade_ibfk_1` FOREIGN KEY (`idplano`) REFERENCES `tblplano` (`id`),
  CONSTRAINT `tblplano_modalidade_ibfk_2` FOREIGN KEY (`idmodalidade`) REFERENCES `tblmodalidade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplano_modalidade`
--

LOCK TABLES `tblplano_modalidade` WRITE;
/*!40000 ALTER TABLE `tblplano_modalidade` DISABLE KEYS */;
INSERT INTO `tblplano_modalidade` VALUES (1,1,1),(2,1,2),(3,2,1),(4,2,2),(5,3,1),(6,4,2),(7,5,1);
/*!40000 ALTER TABLE `tblplano_modalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsuporte`
--

DROP TABLE IF EXISTS `tblsuporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblsuporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtopico` int(11) NOT NULL,
  `pergunta` varchar(3000) NOT NULL,
  `resposta` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idtopico` (`idtopico`),
  CONSTRAINT `tblsuporte_ibfk_1` FOREIGN KEY (`idtopico`) REFERENCES `tbltopico` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsuporte`
--

LOCK TABLES `tblsuporte` WRITE;
/*!40000 ALTER TABLE `tblsuporte` DISABLE KEYS */;
INSERT INTO `tblsuporte` VALUES (1,1,'Quais são as formas de pagamento?','Você pode efetuar o pagamento por boleto ou cartão de crédito.'),(2,1,'Como funciona o pagamento?','Após o corretor entrar em contato e os detalhes forem acertados, o cliente deve efetuar o pagamento. Quando a empresa receber, o plano estará disponível.'),(3,1,'Quantos dias úteis demora para confirmar o pagamento?','Caso o cliente pague pelo boleto, o prazo é de até 3 dias úteis. Caso contrário, o prazo é de 2 dias úteis.'),(4,1,'Quais cartões a empresa aceita?','Nós aceitamos VISA, MASTERCARD, ELO, AMERICAN EXPRESS, HIPERCARD E JCB.'),(5,1,'Quais são os descontos?','Não oferecemos descontos.'),(6,2,'Quais são os tipos de seguro que a Maktub trabalha?','No momento só trabalhamos com seguros de saúde, mas temos como objetivo cobrir toda a área de seguros num futuro próximo.'),(7,3,'Quais são as modalidades?','Os planos possuem as modalidades Enfermaria e/ou Apartamento.'),(8,3,'Qual a diferença das modalidades?','A modalidade Apartamento possui x, x e x, e a modalidade Enfermaria possui y, y e y.'),(9,4,'Quais são as operadoras?','No momento trabalhamos com as operadoras: Notre Dame Intermédica, Bradesco Saúde, Unimed, Amil e Sul América.'),(10,4,'O que é uma operadora?','É uma empresa que disponibiliza planos de saúde.'),(11,4,'Como escolher uma operadora?','Faça uma simulação e aguarde o corretor entrar em contato, ele explicará todas diferenças.'),(12,4,'Quais as diferenças entre as operadoras?','As principais diferenças entre as operadoras são:\n Notre Dame Intermédica: xxxxxxxx;\n Bradesco Saúde: yyyyyyyyyy;\n Unimed: jjjjjjjjjjj;\n Amil: hhhhhhhhhhh;\n Sul América: dddddddddd;\n.'),(13,5,'Como requisitar o reembolso?','Mande um email para: maktubseguros@gmail.com ou entre em contato com o corretor'),(14,5,'Não recebi o reembolso. Como proceder?','A maktub lamenta o ocorrido e pede para que o cliente entre em contato com a operadora'),(15,6,'Quais regiões vocês atendem?','Nós estamos em SP, MG e RJ'),(16,6,'Contratei o serviço mas minha empresa mudou de cidade. Como proceder?','O plano continua disponível, no entanto pedimos que entre em contato com a maktub informando o novo endereço'),(17,7,'Como entrar em contato com a maktub?','Mande um email para maktubseguros@gmail.com, ligue para (11) 3619-3309 ou preencha o formulário na página contato'),(18,7,'O que fazer quando o corretor não entrou em contato?','Lamentamos o ocorrido. O cliente deve entrar em contato com a maktub pelo email da empresa ou pelo formulário na página de contatos.'),(19,8,'Como cancelar um plano?','Mande um email para maktubseguros@gmail.com, ligue para (11) 3619-3309 ou entre em contato com o corretor.'),(20,8,'Como cancelar o pedido de cancelamento','Mande um email para maktubseguros@gmail.com, ligue para (11) 3619-3309 ou entre em contato com o corretor.'),(21,9,'Como faço para contratar um plano?','Faça uma simulação na tela home e escolha um plano.'),(22,9,'O que devo fazer após a simulação?','O cliente deve aguardar o contato com o corretor.');
/*!40000 ALTER TABLE `tblsuporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltipo_cnpj`
--

DROP TABLE IF EXISTS `tbltipo_cnpj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbltipo_cnpj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltipo_cnpj`
--

LOCK TABLES `tbltipo_cnpj` WRITE;
/*!40000 ALTER TABLE `tbltipo_cnpj` DISABLE KEYS */;
INSERT INTO `tbltipo_cnpj` VALUES (1,'MEI'),(2,'ME'),(3,'LTDA'),(4,'EI'),(5,'EP'),(6,'EIRELI'),(7,'S.A');
/*!40000 ALTER TABLE `tbltipo_cnpj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltopico`
--

DROP TABLE IF EXISTS `tbltopico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbltopico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topico` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltopico`
--

LOCK TABLES `tbltopico` WRITE;
/*!40000 ALTER TABLE `tbltopico` DISABLE KEYS */;
INSERT INTO `tbltopico` VALUES (1,'PAGAMENTO'),(2,'SEGURO'),(3,'MODALIDADE'),(4,'OPERADORA'),(5,'REEMBOLSO'),(6,'REGIÃO'),(7,'CONTATO'),(8,'CANCELAMENTO'),(9,'FUNCIONAMENTO');
/*!40000 ALTER TABLE `tbltopico` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-22 14:06:38
