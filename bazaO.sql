-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Wersja serwera:               10.1.16-MariaDB - mariadb.org binary distribution
-- Serwer OS:                    Win32
-- HeidiSQL Wersja:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Zrzut struktury bazy danych resident
CREATE DATABASE IF NOT EXISTS `resident` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `resident`;


-- Zrzut struktury tabela resident.training
CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `training_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `training_price` int(10) NOT NULL,
  `training_time` int(10) NOT NULL,
  `training_distance` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '5',
  `training_street` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `training_district` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `training_city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `training_country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `training_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD12469DE2` (`training_date`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Zrzucanie danych dla tabeli resident.training: ~3 rows (około)
DELETE FROM `training`;
/*!40000 ALTER TABLE `training` DISABLE KEYS */;
INSERT INTO `training` (`id`, `training_type`, `trainer_name`, `training_price`, `training_time`, `training_distance`, `training_street`, `training_district`, `training_city`, `training_country`, `training_date`) VALUES
	(37, 'power lifting', 'Omelańczuk', 150, 65, '5', 'Piotrkowsk', 'Bielany', 'Warsaw', '', '2017-04-06 03:03:00'),
	(38, 'brasilian jiu jitsu', 'Grzejszczuk', 30, 45, '10', 'Pomorska', 'Widzew', 'Lodz', '', '2017-06-08 09:06:00'),
	(39, 'muay thai', 'Rola', 250, 90, '3', 'Lopuszanska', 'Wlochy', 'Warsaw', '', '2017-04-06 00:00:00');
/*!40000 ALTER TABLE `training` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
