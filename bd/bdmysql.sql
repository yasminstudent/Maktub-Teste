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
-- Dumping data for table `tblcliente`
--

LOCK TABLES `tblcliente` WRITE;
/*!40000 ALTER TABLE `tblcliente` DISABLE KEYS */;
INSERT INTO `tblcliente` VALUES (35,'JUAN RIQUELME',3,'WHATSAPP','(011) 11111-1111','(022) 2222-2222'),(36,'LARISSA',1,'WHATSAPP','(011) 11111-1111','(022) 2222-2222'),(37,'LARISSA',1,'WHATSAPP','(011) 11111-1111','(022) 2222-2222'),(38,'LARISSA',1,'WHATSAPP','(011) 11111-1111','(022) 2222-2222'),(39,'LARISSA',1,'WHATSAPP','(011) 11111-1111','(022) 2222-2222'),(40,'LARISSA',1,'WHATSAPP','(011) 11111-1111','(022) 2222-2222'),(41,'LARISSA',1,'WHATSAPP','(011) 11111-1111','(022) 2222-2222'),(42,'GUILHERME PEREIRA',5,'TELEFONE','(011) 11111-1111','(011) 1111-1111'),(43,'GUILHERME PEREIRA',5,'TELEFONE','(011) 11111-1111','(011) 1111-1111'),(44,'JOAO',1,'WHATSAPP','(055) 55555-5555','');
/*!40000 ALTER TABLE `tblcliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tblcliente_plano`
--

LOCK TABLES `tblcliente_plano` WRITE;
/*!40000 ALTER TABLE `tblcliente_plano` DISABLE KEYS */;
INSERT INTO `tblcliente_plano` VALUES (36,41,2,303.6),(37,42,2,331.2),(38,43,2,331.2),(39,44,1,132);
/*!40000 ALTER TABLE `tblcliente_plano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tblcontato`
--

LOCK TABLES `tblcontato` WRITE;
/*!40000 ALTER TABLE `tblcontato` DISABLE KEYS */;
INSERT INTO `tblcontato` VALUES (1,'S','(1','','                  '),(2,'JERFERSON','(011) 1111-1111','','Esadsdsdsdvsdv&#39;ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffd  f ff f  f f ff  f f f f f  f f f f f f f Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP, 06453-017Endereço: Rua Robert Bosch, 544 - Barra Funda');
/*!40000 ALTER TABLE `tblcontato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tblmodalidade`
--

LOCK TABLES `tblmodalidade` WRITE;
/*!40000 ALTER TABLE `tblmodalidade` DISABLE KEYS */;
INSERT INTO `tblmodalidade` VALUES (1,'Enfermaria',10),(2,'Apartamento',20);
/*!40000 ALTER TABLE `tblmodalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tblplano`
--

LOCK TABLES `tblplano` WRITE;
/*!40000 ALTER TABLE `tblplano` DISABLE KEYS */;
INSERT INTO `tblplano` VALUES (1,'Bradesco Saúde',15,NULL,100),(2,'Notre Dame Intermédica',20,NULL,120),(3,'Unimed',17,NULL,110),(4,'Amil',25,NULL,130),(5,'Sul América',15,NULL,115);
/*!40000 ALTER TABLE `tblplano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tblplano_modalidade`
--

LOCK TABLES `tblplano_modalidade` WRITE;
/*!40000 ALTER TABLE `tblplano_modalidade` DISABLE KEYS */;
INSERT INTO `tblplano_modalidade` VALUES (1,1,1),(2,1,2),(3,2,1),(4,2,2),(5,3,1),(6,4,2),(7,5,1);
/*!40000 ALTER TABLE `tblplano_modalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tblsuporte`
--

LOCK TABLES `tblsuporte` WRITE;
/*!40000 ALTER TABLE `tblsuporte` DISABLE KEYS */;
INSERT INTO `tblsuporte` VALUES (1,1,'Quais são as formas de pagamento?','Você pode efetuar o pagamento por boleto ou cartão de crédito.'),(2,1,'Como funciona o pagamento?','Após o corretor entrar em contato e os detalhes forem acertados, o cliente deve efetuar o pagamento. Quando a empresa receber, o plano estará disponível.'),(3,1,'Quantos dias úteis demora para confirmar o pagamento?','Caso o cliente pague pelo boleto, o prazo é de até 3 dias úteis. Caso contrário, o prazo é de 2 dias úteis.'),(4,1,'Quais cartões a empresa aceita?','Nós aceitamos VISA, MASTERCARD, ELO, AMERICAN EXPRESS, HIPERCARD E JCB.'),(5,1,'Quais são os descontos?','Não oferecemos descontos.'),(6,2,'Quais são os tipos de seguro que a Maktub trabalha?','No momento só trabalhamos com seguros de saúde, mas temos como objetivo cobrir toda a área de seguros num futuro próximo.'),(7,3,'Quais são as modalidades?','Os planos possuem as modalidades Enfermaria e/ou Apartamento.'),(8,3,'Qual a diferença das modalidades?','A modalidade Apartamento possui x, x e x, e a modalidade Enfermaria possui y, y e y.'),(9,4,'Quais são as operadoras?','No momento trabalhamos com as operadoras: Notre Dame Intermédica, Bradesco Saúde, Unimed, Amil e Sul América.'),(10,4,'O que é uma operadora?','É uma empresa que disponibiliza planos de saúde.'),(11,4,'Como escolher uma operadora?','Faça uma simulação e aguarde o corretor entrar em contato, ele explicará todas diferenças.'),(12,4,'Quais as diferenças entre as operadoras?','As principais diferenças entre as operadoras são:\n Notre Dame Intermédica: xxxxxxxx;\n Bradesco Saúde: yyyyyyyyyy;\n Unimed: jjjjjjjjjjj;\n Amil: hhhhhhhhhhh;\n Sul América: dddddddddd;\n.'),(13,5,'Como requisitar o reembolso?','Mande um email para: maktubseguros@gmail.com ou entre em contato com o corretor'),(14,5,'Não recebi o reembolso. Como proceder?','A maktub lamenta o ocorrido e pede para que o cliente entre em contato com a operadora'),(15,6,'Quais regiões vocês atendem?','Nós estamos em SP, MG e RJ'),(16,6,'Contratei o serviço mas minha empresa mudou de cidade. Como proceder?','O plano continua disponível, no entanto pedimos que entre em contato com a maktub informando o novo endereço'),(17,7,'Como entrar em contato com a maktub?','Mande um email para maktubseguros@gmail.com, ligue para (11) 3619-3309 ou preencha o formulário na página contato'),(18,7,'O que fazer quando o corretor não entrou em contato?','Lamentamos o ocorrido. O cliente deve entrar em contato com a maktub pelo email da empresa ou pelo formulário na página de contatos.'),(19,8,'Como cancelar um plano?','Mande um email para maktubseguros@gmail.com, ligue para (11) 3619-3309 ou entre em contato com o corretor.'),(20,8,'Como cancelar o pedido de cancelamento','Mande um email para maktubseguros@gmail.com, ligue para (11) 3619-3309 ou entre em contato com o corretor.'),(21,9,'Como faço para contratar um plano?','Faça uma simulação na tela home e escolha um plano.'),(22,9,'O que devo fazer após a simulação?','O cliente deve aguardar o contato com o corretor.');
/*!40000 ALTER TABLE `tblsuporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbltipo_cnpj`
--

LOCK TABLES `tbltipo_cnpj` WRITE;
/*!40000 ALTER TABLE `tbltipo_cnpj` DISABLE KEYS */;
INSERT INTO `tbltipo_cnpj` VALUES (1,'MEI'),(2,'ME'),(3,'LTDA'),(4,'EI'),(5,'EP'),(6,'EIRELI'),(7,'S.A');
/*!40000 ALTER TABLE `tbltipo_cnpj` ENABLE KEYS */;
UNLOCK TABLES;

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

-- Dump completed on 2020-06-22  6:50:05
