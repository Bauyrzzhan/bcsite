-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.20 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица bcbase.address
CREATE TABLE IF NOT EXISTS `address` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.address: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` (`city_id`, `city`) VALUES
	(1, 'Актобе'),
	(2, 'Нур-Султан'),
	(3, 'Шымкент'),
	(4, 'Караганда'),
	(5, 'Алма-Ата'),
	(6, 'Семей');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- Дамп структуры для таблица bcbase.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.category: ~40 rows (приблизительно)
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
  `regbook_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `avtor` varchar(50) NOT NULL DEFAULT '0',
  `category` varchar(50) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '0',
  `commentaries` varchar(50) NOT NULL DEFAULT '0',
  `city` varchar(50) NOT NULL,
  `mesto` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`regbook_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.regbook: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `regbook` DISABLE KEYS */;
INSERT INTO `regbook` (`regbook_id`, `name`, `avtor`, `category`, `status`, `commentaries`, `city`, `mesto`, `email`) VALUES
	(1, 'qwerwe', 'qwerqwer', '1', '1', 'qwerqwer', '1', 'qwerqewr', NULL),
	(2, 'qwerty', 'qwerty', 'Журналы', 'В списке чтения', 'qwerty', 'Нур-Султан', 'qwerty', 'qwerty@mail.ru'),
	(3, 'wwwww', 'wwwww', 'Художественная литература', 'Доступно', 'wwwww', 'Шымкент', 'wwwww', 'wwwww@mail.ru'),
	(4, 'wadwadwa', 'wadawdawd', 'Документальная литература', 'Доступно', 'dwawadwad', 'Шымкент', 'dwaawdawd', 'wadwawad@mail.ru');
/*!40000 ALTER TABLE `regbook` ENABLE KEYS */;

-- Дамп структуры для таблица bcbase.register
CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL DEFAULT '0',
  `pass` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `tel` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.register: ~19 rows (приблизительно)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`reg_id`, `login`, `pass`, `name`, `email`, `tel`, `address`) VALUES
	(2, 'wwww', '25d55ad283aa400af464c76d713c07ad', '', 'bababa@gmail.com', '+77054724265', ''),
	(3, 'Babau', '25d55ad283aa400af464c76d713c07ad', '', 'bababa@gmail.com', '+77054724268', ''),
	(4, 'Baur228', '25d55ad283aa400af464c76d713c07ad', 'Bauyrzzhan', 'bulteev.b@mail.ru', '+77054721337', ''),
	(5, 'Baurhan2', '25f9e794323b453885f5181f1b624d0b', 'Bauyrzhan2', '', '+77054724222', ''),
	(6, 'das', 'aaa42296669b958c3cee6c0475c8093e', 'Dada', '', '+77054724265', ''),
	(7, 'baurwwww', 'e10adc3949ba59abbe56e057f20f883e', 'Dada', '', '+77054724265', ''),
	(8, 'wawaww', 'e10adc3949ba59abbe56e057f20f883e', 'wawaw', '', '+77054724222', ''),
	(9, 'Baurzhan23', 'e10adc3949ba59abbe56e057f20f883e', 'Babazzz', '', '+77054724255', ''),
	(10, 'dasdasd', 'e10adc3949ba59abbe56e057f20f883e', 'Babababa', '', '+77054724265', ''),
	(11, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'test', '', '+77054724265', ''),
	(12, 'Sssddawsa', 'fcea920f7412b5da7be0cf42b8c93759', 'Bababasss', '', '+77054724265', 'Актобе'),
	(13, 'Basdadw', 'fcea920f7412b5da7be0cf42b8c93759', 'Bababaabass', 'babawwba@gmail.com', '+77054724265', 'Астана'),
	(14, 'dasdasda', '25d55ad283aa400af464c76d713c07ad', 'SDadasd', 'dwadasd', '+77054721337', 'dwadsadsasd'),
	(15, 'dwadwawda', '25f9e794323b453885f5181f1b624d0b', 'dsadasdsa', 'bababa@gmail.com', '+77054724265', 'Актобе'),
	(21, 'Alalals', 'fcea920f7412b5da7be0cf42b8c93759', 'Alalal', 'bababawa@gmail.com', '+77054724265', 'Актобе'),
	(22, 'babaw', 'fcea920f7412b5da7be0cf42b8c93759', 'Bababaabass', 'bababa@gmail.com', '+77054724265', 'Караганда'),
	(23, 'Baurw', '25f9e794323b453885f5181f1b624d0b', 'Bauyrzhareg', 'bababwa@gmail.com', '+77054724265', 'Алма-Ата'),
	(24, 'dwadawsa', '25f9e794323b453885f5181f1b624d0b', 'dwadwadas', 'bababass@gmail.com', '+77054724265', 'Шымкент'),
	(25, 'daadas', 'fcea920f7412b5da7be0cf42b8c93759', 'dawawda', 'baurzhanba@gmail.com', '+77054724265', 'Семей');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;

-- Дамп структуры для таблица bcbase.status
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bcbase.status: ~6 rows (приблизительно)
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
