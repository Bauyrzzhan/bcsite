-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных bcbase
CREATE DATABASE IF NOT EXISTS `bcbase` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bcbase`;

-- Дамп структуры для таблица bcbase.address
CREATE TABLE IF NOT EXISTS `address` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.address: ~14 rows (приблизительно)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` (`city_id`, `city`) VALUES
	(1, 'Актобе'),
	(2, 'Нур-Султан'),
	(3, 'Шымкент'),
	(4, 'Караганда'),
	(5, 'Алма-Ата'),
	(6, 'Семей'),
	(7, 'Тараз'),
	(8, 'Усть-Каменегорск'),
	(9, '	Атырау'),
	(10, 'Костанай'),
	(11, 'Кызылорда'),
	(12, 'Уральск'),
	(13, 'Петропавловск'),
	(14, 'Темиртау'),
	(15, 'Кокшетау'),
	(16, 'Туркестан');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- Дамп структуры для таблица bcbase.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.category: ~39 rows (приблизительно)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`category_id`, `category_name`) VALUES
	(1, 'Искусство и фотография'),
	(2, 'Аудиокниги'),
	(3, 'Аудиозагрузки'),
	(4, 'Биографии и воспоминания'),
	(5, 'Бизнес и инвестицииБизнес и инвестиции'),
	(6, 'Детская литература'),
	(7, 'Компьютеры и интернет'),
	(8, 'Кулинария'),
	(9, 'Электронные книгиЭлектронные книги'),
	(10, 'Образование'),
	(11, 'Развлечения'),
	(12, 'Графический роман'),
	(13, 'Здоровье, душа и тело'),
	(14, 'История'),
	(15, 'Сад и огород'),
	(16, 'Ужасы'),
	(17, 'Юмор'),
	(18, 'Журналы'),
	(19, 'Художественная литература'),
	(20, 'Тайны и триллеры'),
	(21, 'Документальная литература'),
	(22, 'Природа'),
	(23, 'Семья'),
	(24, 'Животные'),
	(25, 'Философия'),
	(26, 'Пьесы и сценарии'),
	(27, 'Поэзия'),
	(28, 'Профессиональная и техническая литература'),
	(29, 'Религия'),
	(30, 'Романтика'),
	(31, 'Спорт'),
	(32, 'Наука'),
	(33, 'Литература для подростков'),
	(34, 'Научная фантастика и Фэнтези'),
	(35, 'Литература для подростков'),
	(36, 'Путешествия'),
	(37, 'Вестерны'),
	(38, 'Женские романы'),
	(39, 'Другое');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Дамп структуры для таблица bcbase.regbook
CREATE TABLE IF NOT EXISTS `regbook` (
  `regbook_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `avtor` varchar(50) NOT NULL DEFAULT '0',
  `category` varchar(50) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '0',
  `commentaries` varchar(200) NOT NULL DEFAULT '0',
  `city` varchar(50) NOT NULL,
  `mesto` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`regbook_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.regbook: ~27 rows (приблизительно)
/*!40000 ALTER TABLE `regbook` DISABLE KEYS */;
INSERT INTO `regbook` (`regbook_id`, `name`, `avtor`, `category`, `status`, `commentaries`, `city`, `mesto`, `email`) VALUES
	(1, 'dwawaddwa', 'dwadwadwa', '17', '1', 'dwawadawd', '1', 'wdadwawda', 'dwadaw@mail.ru'),
	(2, 'dwawaddwa', 'dwadwadwa', '17', '1', 'dwawadawd', '2', 'wdadwawda', 'dwadaw@mail.ru'),
	(3, 'dwawaddwa', 'dwadwadwa', '17', '1', 'dwawadawd', '3', 'wdadwawda', 'dwadaw@mail.ru'),
	(4, 'dwawaddwa', 'dwadwadwa', '17', '1', 'dwawadawd', '1', 'wdadwawda', 'dwadaw@mail.ru'),
	(5, 'dwawaddwa', 'dwadwadwa', '17', '1', 'dwawadawd', '6', 'wdadwawda', 'dwadaw@mail.ru'),
	(6, 'dwawaddwa', 'dwadwadwa', '17', '1', 'dwawadawd', '6', 'wdadwawda', 'dwadaw@mail.ru'),
	(7, 'dwadwawd', 'dawwaddwa', '19', '1', 'awdwaddwa', '4', 'dawadwadw', 'dawdwa@mail.ru'),
	(8, 'dwadawawd', 'awawaw', '19', '2', 'dwadawdwa', '2', 'qwerty', 'wadwawad@mail.ru'),
	(11, 'dsffdsdf', 'fdsfds', '3', '3', 'dssdffdsfdsfdsfd', '5', 'dsffdsfds', 'sfdsfdsfd@mail.ru'),
	(12, '', '', 'Категории', 'Все статусы', '', 'Город', '', ''),
	(13, 'qwertyw', 'qwertyw', '18', '1', 'dwadwadaw', '2', 'qwertyw', 'qwerty@mail.ru'),
	(14, 'Almaw', 'Akamw', '20', '1', 'dwadwawadawdawd', '1', 'qwerrr', 'dadwada@mail.ru'),
	(15, 'dwaadw', 'adwadw', '20', '1', 'dsadasdw', '2', 'dwaawdad', 'almas@mail.ru'),
	(16, 'Maks', 'My author', '19', '1', 'dwadwadwa', '1', 'qwerty', '87716552584'),
	(17, 'Maks', 'My author', '13', '1', 'dwadwaawd', '1', 'qwertyw', 'almas@mail.ru'),
	(18, 'dawwad', 'wdaawd', '18', '2', 'dawwadawd', '2', 'dwaadw', 'awddaw@mail.ru'),
	(19, 'wadadw', 'awdawd', '19', '1', 'dsadsadsadas', '2', 'wadadw', 'almas@mail.ru'),
	(20, 'wadwa', 'ssdds', '19', '2', 'dsadasddsad', '1', 'wadawd', 'awddaw@mail.ru'),
	(21, 'dsadas', 'asdadsads', '17', '1', 'adwadwadw', '3', 'dawadwawd', 'dsadasdas@mail.ru'),
	(22, 'Maks', 'qwerty', '20', '1', 'qwewqt', '4', 'qwerty', 'almas@mail.ru'),
	(23, 'dawdaw', 'dawawdwd', '18', '2', 'dsadasdas', '1', 'qwerty', 'almas@mail.ru'),
	(24, 'Maks', 'My author', '16', '3', 'dwadawdawd', '2', 'dwaawdwad', 'almas@mail.ru'),
	(25, 'Maks', 'My author', '21', '2', 'qwertyuoop', '3', 'Mesto', 'almas@mail.ru'),
	(26, 'Microsoft Office Excel', 'Виктор Долженков', '10', '6', 'Книга является подробным руководством, посвященным', '6', 'АВПК', 'kezkelgenpocta@mail.ru'),
	(28, 'wawa', 'Виктор Долженков', '18', '2', 'wadaw', '2', 'АВПК', 'bababa@gmail.com'),
	(29, 'wawa', 'Автор', '16', '1', 'dwadwa', '2', 'АВПК', 'bababa@gmail.com'),
	(30, 'wasaw', 'wasdfw', '19', '2', 'dwadaw', '2', 'АВПК', 'bababa@gmail.com'),
	(31, 'qwerty', 'qwerty', '18', '1', 'qwerty', '12', 'qwerty', 'qwerty@mail.ru');
/*!40000 ALTER TABLE `regbook` ENABLE KEYS */;

-- Дамп структуры для таблица bcbase.register
CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(200) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL DEFAULT '0',
  `pass` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `tel` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.register: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`reg_id`, `login`, `pass`, `name`, `email`, `tel`, `address`) VALUES
	(12, 'Sssddawsa', 'fcea920f7412b5da7be0cf42b8c93759', 'Bababasss', '', '+77054724265', 'Актобе'),
	(45, 'theeer', 'e10adc3949ba59abbe56e057f20f883e', 'toge', 'babasba@gmail.com', '+77054724265', 'Актобе'),
	(46, 'dsawdd', 'e10adc3949ba59abbe56e057f20f883e', 'wawaas', 'bababa@gmail.com', '+77054724265', 'Актобе'),
	(47, 'wawasa', 'e10adc3949ba59abbe56e057f20f883e', 'dsadaw', 'babaasba@gmail.com', '+77054724265', 'Актобе'),
	(48, 'dadawa', 'e10adc3949ba59abbe56e057f20f883e', 'dadadaw', 'danz@gmail.com', '+77054724265', 'Актобе'),
	(49, 'dawdawda', 'e10adc3949ba59abbe56e057f20f883e', 'dadawsa', 'bababaas@gmail.com', '+77054724265', 'Актобе'),
	(50, 'baurzhan', 'e10adc3949ba59abbe56e057f20f883e', 'Baurzhan', 'bababaw@gmail.com', '+77054724265', 'Петропавловск');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;

-- Дамп структуры для таблица bcbase.status
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.status: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`status_id`, `status_name`) VALUES
	(1, 'В списке чтения'),
	(2, 'Доступно'),
	(3, 'Постоянная коллекция'),
	(4, 'Зарезервировано'),
	(6, 'Путешествует');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
