-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour forfaits
CREATE DATABASE IF NOT EXISTS `forfaits` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `forfaits`;

-- Listage de la structure de table forfaits. pricing
CREATE TABLE IF NOT EXISTS `pricing` (
  `name` varchar(25) NOT NULL,
  `price` int NOT NULL,
  `sale` int DEFAULT NULL,
  `bandwidth` int NOT NULL DEFAULT '0',
  `online_space` int NOT NULL,
  `support` tinyint NOT NULL DEFAULT '0',
  `domain` varchar(50) NOT NULL DEFAULT '0',
  `hidden_fees` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

INSERT INTO pricing (id_pricing, NAME, price, bandwidth, online_space, support, domain, hidden_fees)
VALUES (1, "Starter", 9, 1, 500, FALSE, 1, FALSE)

INSERT INTO pricing (id_pricing, NAME, price, sale, bandwidth, online_space, support, domain, hidden_fees)
VALUES (2, "Advanced", 19, 20, 2, 1, TRUE, 3, FALSE);

INSERT INTO pricing (id_pricing, NAME, price, bandwidth, online_space, support, domain, hidden_fees)
VALUES (3, "Professional", 29, 3, 2, TRUE, "Unlimited", FALSE);
