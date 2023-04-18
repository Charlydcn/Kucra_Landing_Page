-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour forfaits
CREATE DATABASE IF NOT EXISTS `forfaits` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `forfaits`;

-- Listage de la structure de la table forfaits. pricing
CREATE TABLE IF NOT EXISTS `pricing` (
  `id_pricing` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `bandwidth` int(11) NOT NULL DEFAULT '0',
  `onlineSpace` int(11) NOT NULL,
  `support` tinyint(4) NOT NULL DEFAULT '0',
  `domain` varchar(50) NOT NULL DEFAULT '0',
  `hiddenFees` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pricing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table forfaits.pricing : ~0 rows (environ)
/*!40000 ALTER TABLE `pricing` DISABLE KEYS */;
INSERT INTO `pricing` (`id_pricing`, `name`, `price`, `sale`, `bandwidth`, `onlineSpace`, `support`, `domain`, `hiddenFees`) VALUES
	(1, 'Starter', 9, NULL, 1, 500, 0, '1', 0),
	(2, 'Advanced', 19, 20, 2, 1, 1, '3', 0),
	(3, 'Professional', 29, NULL, 3, 2, 1, 'Unlimited', 0);
/*!40000 ALTER TABLE `pricing` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

