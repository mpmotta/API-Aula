/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for osx10.20 (arm64)
--
-- Host: localhost    Database: games
-- ------------------------------------------------------
-- Server version	11.7.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `jogos`
--

DROP TABLE IF EXISTS `jogos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `estudio` varchar(255) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `disponibilidade` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogos`
--

LOCK TABLES `jogos` WRITE;
/*!40000 ALTER TABLE `jogos` DISABLE KEYS */;
INSERT INTO `jogos` VALUES
(1,'Spider-Man 2','Insomniac Games','Ação/Aventura','16+',349.90,1),
(2,'God of War Ragnarök','Santa Monica Studio','Ação/Aventura','18+',299.90,1),
(3,'Final Fantasy XVI','Square Enix','RPG','16+',299.90,1),
(4,'Ratchet and Clank: Rift Apart','Insomniac Games','Plataforma','10+',249.90,1),
(5,'Helldivers 2','Arrowhead Game Studios','Tiro','18+',199.90,1),
(6,'Astro Bot','PlayStation Studios','Plataforma','7+',199.90,1),
(7,'Uncharted: Legacy of Thieves Collection','Naughty Dog','Ação/Aventura','16+',189.90,1),
(8,'The Last of Us Part I','Naughty Dog','Ação/Aventura','18+',299.90,1),
(9,'Ghost of Tsushima: Director\'s Cut','Sucker Punch','Ação/Aventura','18+',249.90,1),
(10,'Death Stranding 2: On the Beach','Kojima Productions','Aventura','18+',349.90,0),
(11,'Forza Horizon 5','Playground Games','Corrida','10+',249.90,1),
(12,'Indiana Jones and the Great Circle','MachineGames','Ação/Aventura','16+',299.90,1),
(13,'GTA 6','Rockstar Games','Ação/Aventura','18+',399.90,1),
(14,'Monster Hunter Wilds','Capcom','RPG/Ação','14+',299.90,1),
(15,'Citizen Sleeper 2: Starward Vector','Jump Over the Age','RPG','12+',159.90,1),
(16,'Split Fiction','Narrative Games','Aventura','14+',179.90,1),
(17,'Kingdom Come: Deliverance 2','Warhorse Studios','RPG','18+',249.90,0),
(18,'Blue Prince','Dogubomb','Quebra-cabeça','10+',89.90,1),
(19,'Promise Mascot Agency','Kaizen Game Works','Simulação','7+',69.90,1),
(20,'Bionic Bay','Mureena','Plataforma','10+',59.90,1);
/*!40000 ALTER TABLE `jogos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-08-18 15:44:36
