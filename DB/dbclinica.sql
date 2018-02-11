-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: clinica
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `idcita` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(30) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion_medica` varchar(350) DEFAULT NULL,
  `paciente_curp` varchar(18) NOT NULL,
  `doctor_curp` varchar(18) NOT NULL,
  PRIMARY KEY (`idcita`,`paciente_curp`,`doctor_curp`),
  KEY `fk_paciente_has_doctor_doctor1_idx` (`doctor_curp`),
  KEY `fk_paciente_has_doctor_paciente1_idx` (`paciente_curp`),
  CONSTRAINT `fk_paciente_has_doctor_doctor1` FOREIGN KEY (`doctor_curp`) REFERENCES `doctor` (`curp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_paciente_has_doctor_paciente1` FOREIGN KEY (`paciente_curp`) REFERENCES `paciente` (`curp`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor` (
  `curp` varchar(18) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apPaterno` varchar(20) DEFAULT NULL,
  `apMaterno` varchar(20) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `especialidad_idespecialidad` int(11) NOT NULL,
  PRIMARY KEY (`curp`,`especialidad_idespecialidad`),
  KEY `fk_doctor_especialidad_idx` (`especialidad_idespecialidad`),
  CONSTRAINT `fk_doctor_especialidad` FOREIGN KEY (`especialidad_idespecialidad`) REFERENCES `especialidad` (`idespecialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES ('AECJ940429HCHRRS01','0001','Jesús Leonardo','Arévalo','Cárdenas','5518790394','jesus@gmail.com','jesus',1),('AIHP911101MCHRRR03','0002','Perla Clarissa','Arías','Hernández','5510843214','perla@gmail.com','perla',2),('BAVC840614HCHRLR04','0003','Carlos','Barrera','Villanueva','5547920378','carlos@gmail.com','carlos',3),('CAMM780216MOCSRN05','0011','Minerva','Castellanos','Martínez','5570971971','minerva@gmail.com','minerva',11),('COBC891127MCHRLR08','0004','María Cristina','Corral','Balderrama','5578940315','maria@gmail.com','maria',4),('COCA761007MDGRNN02','0005','Ana Soledad','Correa','Contreras','5501489743','ana@gmail.com','ana',5),('DEMS901008HCHLXR04','0009','Sergio Alejandro','Delgado ','Muñoz','5572090841','sergio@gmail.com','sergio',9),('GOLP850729MCHNNR03','0008','Perla Liliana','González','Linares','5578086557','liliana@gmail.com','lili',8),('HEVL910224HCHRLS09','0006','Luis Eduardo','Herrera','Villareal','5598742031','luis@gmail.com','luis',6),('HOAE940218HCHLGR02','0007','Erick Francisco','Holguín','Aguirre','5593472018','erick@gmail.com','erick',7),('JAAJ761004HCLLGS07','0010','José','Jalife','Aguirre','5578910684','jalife@gmail.com','jalife',10);
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidad`
--

DROP TABLE IF EXISTS `especialidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidad` (
  `idespecialidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idespecialidad`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidad`
--

LOCK TABLES `especialidad` WRITE;
/*!40000 ALTER TABLE `especialidad` DISABLE KEYS */;
INSERT INTO `especialidad` VALUES (1,'Cardiología'),(2,'Psiquiatría'),(3,'Pediatría'),(4,'Oftamología'),(5,'Nutriología'),(6,'Neurología'),(7,'Gastroenterología'),(8,'Endocrinología'),(9,'Otorrinolaringología'),(10,'Dermatología'),(11,'Ginecología');
/*!40000 ALTER TABLE `especialidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario`
--

DROP TABLE IF EXISTS `horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario` (
  `idhorario` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idhorario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` VALUES (1,'9:00 am - 10:00 am'),(2,'10:00 am - 11:00 am'),(3,'11:00 am - 12:00 pm'),(4,'12:00 pm - 13:00 pm'),(5,'13:00 pm - 14:00 pm'),(6,'14:00 pm - 15:00 pm'),(7,'15:00 pm - 16:00 pm'),(8,'16:00 pm - 17:00 pm'),(9,'17:00 pm - 18:00 pm');
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario_doctor`
--

DROP TABLE IF EXISTS `horario_doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario_doctor` (
  `horario_idhorario` int(11) NOT NULL,
  `doctor_curp` varchar(18) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `dia` date DEFAULT NULL,
  PRIMARY KEY (`horario_idhorario`,`doctor_curp`),
  KEY `fk_horario_has_doctor_doctor1_idx` (`doctor_curp`),
  KEY `fk_horario_has_doctor_horario1_idx` (`horario_idhorario`),
  CONSTRAINT `fk_horario_has_doctor_doctor1` FOREIGN KEY (`doctor_curp`) REFERENCES `doctor` (`curp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_horario_has_doctor_horario1` FOREIGN KEY (`horario_idhorario`) REFERENCES `horario` (`idhorario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario_doctor`
--

LOCK TABLES `horario_doctor` WRITE;
/*!40000 ALTER TABLE `horario_doctor` DISABLE KEYS */;
/*!40000 ALTER TABLE `horario_doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `curp` varchar(18) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apPaterno` varchar(20) DEFAULT NULL,
  `apMaterno` varchar(20) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `genero` varchar(6) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES ('DARI690109MOCVVS07','Isabel','Dávila','Rivera','1990-02-22','Mujer','5580870143','isabel@gmail.com','isabel');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `curp` varchar(18) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apPaterno` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('AECJ940429HCHRRS01','Jesús Leonardo','Arévalo','jesus','medico'),('AIHP911101MCHRRR03','Perla Clarissa','Arías','perla','medico'),('BAVC840614HCHRLR04','Carlos','Barrera','carlos','medico'),('CAMM780216MOCSRN05','Minerva','Castellanos','minerva','medico'),('COBC891127MCHRLR08','María Cristina','Corral','maria','medico'),('COCA761007MDGRNN02','Ana Soledad','Correa','ana','medico'),('CUVN780614MCSRZR04','Norma Cleyver','Cruz','root','administrador'),('DARI690109MOCVVS07','Isabel','Dávila','isabeñ','paciente'),('DEMS901008HCHLXR04','Sergio Alejandro','Delgado','sergio','medico'),('GOLP850729MCHNNR03','Perla Liliana','Gonzáles','lili','medico'),('HEVL910224HCHRLS09','Luis Eduardo','Herrera','luis','medico'),('HOAE940218HCHLGR02','Erick Francisco','Holguín','erick','medico'),('JAAJ761004HCLLGS07','José','Jalife','jalife','medico');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-19 21:41:45
