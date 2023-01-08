-- MySQL dump 10.13  Distrib 5.7.34, for Linux (x86_64)
--
-- Host: localhost    Database: biblioteca
-- ------------------------------------------------------
-- Server version	5.7.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grupo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'EDNA MONICA','1768909','1','B','Principal SN El Palmar km 40','+(52) 765-1062132'),(3,'Alondra Maythe','345678','3','B','El Palmar km 40','+(52) 765-1062132'),(4,'Roberta Juarez Muñoz','456789','3','A','Papantla','+(52) 782-1424591'),(5,'Kevi Abraham Cruz Chagala','67895','3','A','La Piedad Cazones','+(52) 782-1291478'),(6,'Alan Tajcen Ramos','17610111','3','A','Papantla','+(52) 782-2598812');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autores`
--

DROP TABLE IF EXISTS `autores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autores`
--

LOCK TABLES `autores` WRITE;
/*!40000 ALTER TABLE `autores` DISABLE KEYS */;
INSERT INTO `autores` VALUES (1,'J. K. Rowling','Autores/m0NCAwcrdYI2Qz9thGa1adxVDjabVoNUroHiAee1.jpg','Rowling nació el 31 de julio de 1965 en Yate (Reino Unido), hija de Peter James Rowling y Anne Rowling, cuyo apellido de soltera era Volant.12​ Su hermana Dianne, Di, nació en el hogar familiar el 18 de junio de 196713​ cuando Rowling tenía 23 meses de edad.12​ La familia se mudó al pueblo cercano de Winterbourne cuando Rowling tenía 4 años. Asistió a la Escuela Primaria St Michael\'s,14​ un establecimiento fundado por el famoso abolicionista William Wilberforce15​ y por la activista Hannah More en 1813. Se cree que su primer director en St. Michael\'s, Alfred Dunn, fue la inspiración del personaje de Harry Potter Albus Dumbledore.16​17​'),(2,'Jennette McCurdy','Autores/ZQeXkBM96lDyLHbQE7DckEGJaCuPB4XaEgQVWtV1.jpg','McCurdy fue criada en Garden Grove, California en una familia relativamente pobre que era miembro de la La Iglesia de Jesucristo de los Santos de los Últimos Días. Su madre, Debra McCurdy, la educó en casa a ella y a sus tres hermanos mayores.9​10​ Su padre no biológico, Mark McCurdy, tenía dos trabajos.11​'),(4,'Roberto Dario Mori','Autores/BdaPlZu6sPVhbpcRwGhFOnjl9dYmCTtactQhPcvl.jpg','Roberto Dario Mori es un escritor Mexicano, conocido por obras como \"La casa de mi tia esta embrujada\" \"Las batallas en el desierto\" \"El Joven y yo\" en la serie de películas de Harry Potter. Obtuvo dicho papel a los once años, después de haber participado anteriormente solo en obras de teatro escolares y grupos de teatro locales'),(5,'Sergio','Autores/f4bSE6hzx5Ic83IGKeCi4CoNGstd48fhXQmtrOks.png','Hola'),(6,'Juan Rulfo','Autores/Ut8yHIVg5UsAwoHXOOcdjyc8DlGQPWMt2RFvRTUl.jpg','lerrjbl-,rjb,-l  ,sfn b-lm snb,n ,nblf n f lbjf.b');
/*!40000 ALTER TABLE `autores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generos`
--

DROP TABLE IF EXISTS `generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generos`
--

LOCK TABLES `generos` WRITE;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` VALUES (1,'Terror'),(2,'Biología'),(4,'Aventura'),(5,'Drama'),(6,'Cuentos'),(7,'Biografios'),(8,'Ciencia Ficción'),(9,'Novela'),(10,'Misterio y Aventura'),(11,'deasd');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_genero` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resumen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idioma` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_publicacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

LOCK TABLES `libros` WRITE;
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` VALUES (1,6,4,'Las Batallas en el Decierto','Preparándose para una visita de un potencial cliente del tío Vernon, los Dursley confinan a Harry Potter en su habitación. Sin embargo este recibe la visita inesperada de Dobby, un elfo doméstico, que le advierte que no debe regresar a Hogwarts, ya que ahora el lugar no es seguro. Debido a la negativa de Harry, Dobby arruina la cena haciendo que los tíos culparan a Harry. Este incidente fuerza al tío Vernon a encerrar a Harry en su cuarto para que no pueda volver al colegio. Ron, Fred y George Weasley llegan en un volador Ford Anglia celeste 1967, rescatan a Harry y lo llevan a La Madriguera. Harry conoce a la hermana menor de Ron, Ginny, que se sorprende al verlo debido a que le gusta. Esta empieza su primer año en Hogwarts. También conoce al padre de Ron, Arthur Weasley.>','Español','12/09/2007','Libros/QAfmElcew0RpM3lhwedjJOwadWgXFN0GCAsZWzek.jpg','10'),(2,8,1,'Harry Potter y la cámara secreta','Harry Potter y la cámara secreta (título original en inglés, Harry Potter and the Chamber of Secrets) es una película de género fantástico, dirigida por Chris Columbus y distruibuida por Warner Bros. Pictures; está basada en la novela homónima de J. K. Rowling. Es el segundo largometraje de la saga de películas de Harry Potter y de la franquicia Wizarding World, y fue escrito por Steve Kloves y producido por David Heyman. Fue la última película que hizo actor Richard Harris (Álbus Dumbledore) antes de fallecer el mismo año que se estrenó la película.>>','Español','12/09/2022','Libros/RpYA7enJXsRrVB9dsbwCAS3IMXdMnIxrJUnkJkLl.jpg','3'),(3,4,1,'Harry Potter y la Piedra Filosofal','Harry Potter y la piedra filosofal (título original en inglés, Harry Potter and the Philosopher\'s Stone, titulada Harry Potter and the Sorcerer\'s Stone en Estados Unidos e India)3​ es una película británica-estadounidense de fantasía y aventuras basada en el libro homónimo de J. K. Rowling, dirigida por el cineasta Chris Columbus y estrenada en 2001. La historia sigue a Harry Potter, un niño que al cumplir once años descubre que es un mago, por lo cual es enviado al Colegio Hogwarts de Magia y Hechicería para comenzar su entrenamiento como tal.\r\n\r\nEsta película marca el inicio de la saga de películas de Harry Potter que se extendió hasta 2011, con el estreno de Harry Potter y las reliquias de la Muerte: parte 2; así como también es el comienzo del universo cinematográfico del mundo mágico, que para 2022 suma un total de once películas.','Ingles','02/06/2001','Libros/EETb0EI6wr8HycNWWKnuASo5740KSbJtNPuefZ6v.jpg','2'),(4,5,2,'I\'m Glad My Mom Died','I\'m Glad My Mom Died es un libro de memorias escrito por la actriz y cantante estadounidense, Jennette McCurdy, en el que habla sobre su carrera como actriz infantil y su difícil relación con su madre abusiva que murió en 2013. Es el primer libro de McCurdy y se publicó el 9 de agosto de 2022 por Simon & Schuster','Español','12/10/2022','Libros/TlwYCyVejGcbkzLL6Cs1eSz2uLS8zNgXV92GNTEB.jpg','2'),(5,4,6,'El Principito','‘El Principito’ es la obra cumbre del conde Antoine de Saint-Exupéry, que narra el encuentro entre un piloto que está varado en el desierto por una avería de su avión y un niño, un príncipe, dueño de un diminuto planeta que tiene tres volcanes miniatura, uno extinguido y que usa como asiento, pero que limpia a diario porque no se sabe cuándo puede volver a tener actividad y si está limpio, no causará mayor daño.','Español','12/09/1998','Libros/uavaFrJjrCB23bWEWYfWYVri4ImmFEd2shza1Acs.jpg','4'),(6,10,6,'Talpa','lhghb mlsb m b','Español','12/12/2000','Libros/nKsMUgsk9rNhPocSO6Vwimws1HugC9bYG1xSQN69.jpg','0'),(7,6,6,'Alicia en el País de las Maravillas','Las aventuras de Alicia en el país de las maravillas, comúnmente abreviado como Alicia en el país de las maravillas, es una novela de fantasía escrita por el matemático, lógico, fotógrafo y escritor británico Charles Lutwidge Dodgson, bajo el seudónimo de Lewis Carroll, publicada en 1865. La historia cuenta cómo una niña llamada Alicia cae por un agujero, encontrándose en un mundo peculiar y extraño, poblado por humanos y criaturas antropomórficas. El libro juega con la lógica, dando a la novela gran popularidad tanto en niños como en adultos. Está considerada una de las mejores novelas del género del Sinsentido. Su narrativa y estructura, junto con sus personajes, han sido una gran influencia tanto en la cultura popular como en la literatura, sobre todo en el género fantástico.','Español','09/05/1980','Libros/wYuoKGViZW939klvm92yxB6ZP4pW3gvdBjE1KhqY.jpg','0');
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7,'2014_10_12_000000_create_users_table',1),(8,'2014_10_12_100000_create_password_resets_table',1),(9,'2019_08_19_000000_create_failed_jobs_table',1),(10,'2022_10_05_173523_create_alumnos_table',2),(11,'2022_10_08_032735_create_generos_table',3),(14,'2022_10_12_034200_create_autores_table',4),(15,'2022_10_12_233135_create_libros_table',5),(16,'2022_12_01_050659_create_prestamos_table',6),(17,'2022_12_02_063857_create_prestamo_table',7),(18,'2022_12_02_201447_create_libros_table',8),(19,'2022_12_02_211510_create_prestamos_table',9),(20,'2022_12_02_211905_create_prestamo_table',10),(21,'2022_12_31_050142_create_permission_tables',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(1,'App\\Models\\User',3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'listar usuarios','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(2,'crear usuarios','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(3,'eliminar usuarios','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(4,'editar usuarios','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(5,'listar alumnos','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(6,'crear alumnos','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(7,'eliminar alumnos','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(8,'editar alumnos','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(9,'listar generos','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(10,'crear generos','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(11,'eliminar generos','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(12,'editar generos','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(13,'listar autores','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(14,'crear autores','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(15,'eliminar autores','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(16,'editar autores','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(17,'listar libros','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(18,'crear libros','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(19,'eliminar libros','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(20,'editar libros','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(21,'gestionar prestamos','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(22,'finalizar prestamos','web','2023-01-06 04:16:27','2023-01-06 04:16:27'),(23,'crear prestamos','web','2023-01-08 02:24:39','2023-01-08 02:24:39'),(24,'ver prestamos','web','2023-01-08 02:24:39','2023-01-08 02:24:39');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestamo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_prestamo` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamo`
--

LOCK TABLES `prestamo` WRITE;
/*!40000 ALTER TABLE `prestamo` DISABLE KEYS */;
INSERT INTO `prestamo` VALUES (1,1,1),(3,3,2),(4,2,3),(5,2,4),(6,4,2),(7,5,1),(8,3,4),(9,6,5),(10,3,4),(11,7,1),(12,8,5),(13,9,6),(14,11,6),(15,12,2),(16,13,7),(17,13,7),(18,13,7),(19,13,5),(20,13,5),(21,13,5);
/*!40000 ALTER TABLE `prestamo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamos`
--

DROP TABLE IF EXISTS `prestamos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestamos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `estado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_fin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamos`
--

LOCK TABLES `prestamos` WRITE;
/*!40000 ALTER TABLE `prestamos` DISABLE KEYS */;
INSERT INTO `prestamos` VALUES (1,1,1,'Finalizado','02/12/2022 - 15:21',''),(2,3,1,'Finalizado','02/12/2022 - 15:37',''),(3,4,1,'Finalizado','02/12/2022 - 15:38',''),(4,1,1,'Finalizado','02/12/2022 - 17:41',''),(5,5,1,'Finalizado','05/12/2022 - 10:24',''),(6,6,1,'Finalizado','06/12/2022 - 09:53',''),(7,5,1,'Finalizado','12/12/2022 - 10:20',''),(8,5,1,'Finalizado','13/12/2022 - 20:06',''),(9,4,1,'Creado','13/12/2022 - 20:07',''),(10,6,1,'Creado','13/12/2022 - 20:07',''),(11,1,1,'Creado','21/12/2022 - 02:01',''),(12,3,1,'Finalizado','21/12/2022 - 08:38',''),(13,1,2,'Finalizado','07/01/2023 - 20:32','08/01/2023 - 02:51');
/*!40000 ALTER TABLE `prestamos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(1,2),(5,2),(8,2),(9,2),(10,2),(13,2),(14,2),(15,2),(16,2),(17,2),(18,2),(21,2),(22,2),(23,2),(24,2);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'director','web','2023-01-06 04:16:26','2023-01-06 04:16:26'),(2,'maestro','web','2023-01-06 04:16:26','2023-01-06 04:16:26');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Alan Tajcen Rsm','alanrsm18@gmail.com',NULL,'$2y$10$UEEr/S/VA0uI28BHsEJ2uOuSFYSrb9rlgVJhrui8N7QkA6DK7Q9FC','Director','17610111UTGZ','Usuarios/Alan Tajcen Rsm/C3TS03lMuEnJgAIKy8BvdIVJXmDVBLD7DLQqblZ3.jpg',NULL,'2022-09-27 09:50:02','2022-09-27 09:50:02'),(2,'Ivan Hernandez Lopez','van.m285@gmail.com',NULL,'$2y$10$X72os77QOsknxrh9K9w3VO2x4HhEwxn1OMab1mCVlqOGonPtM2rrC','Maestro','','',NULL,'2023-01-08 00:45:28','2023-01-08 00:45:28'),(3,'Director','admin@gmail.com',NULL,'$2y$10$6IFXmp.NwVj91AbjW3b8rOFi3glNLEfYVn7YpUyCP9U4DkhJ/ZxG2','Director','','',NULL,'2023-01-08 01:37:35','2023-01-08 01:37:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-08  2:59:51
