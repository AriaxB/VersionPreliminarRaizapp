-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: raizapp
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `contraseña` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `num_telefono` int(11) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nacionalidad` varchar(15) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrito` (
  `idcarrito` int(11) NOT NULL AUTO_INCREMENT,
  `doc_comprador` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`idcarrito`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogo`
--

DROP TABLE IF EXISTS `catalogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catalogo` (
  `nombre_cat` varchar(20) DEFAULT NULL,
  `id_catalogo` int(11) NOT NULL,
  `id_prod` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_catalogo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogo`
--

LOCK TABLES `catalogo` WRITE;
/*!40000 ALTER TABLE `catalogo` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comprador`
--

DROP TABLE IF EXISTS `comprador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comprador` (
  `doc_comprador` int(11) NOT NULL,
  `contraseña` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `num_telefono` int(11) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nacionalidad` varchar(15) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `nombre_com` varchar(30) DEFAULT NULL,
  `apellido_com` varchar(30) DEFAULT NULL,
  `ciudad_com` varchar(25) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`doc_comprador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comprador`
--

LOCK TABLES `comprador` WRITE;
/*!40000 ALTER TABLE `comprador` DISABLE KEYS */;
INSERT INTO `comprador` VALUES (1075624897,'1234','test@gmail.com',123456789,'kennedy','2004-04-03','Colombia','masculino','brayan','linares','Bogota',2);
/*!40000 ALTER TABLE `comprador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emprendedor`
--

DROP TABLE IF EXISTS `emprendedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emprendedor` (
  `ced_emprendedor` int(11) NOT NULL,
  `nombre_emprendimiento` varchar(25) DEFAULT NULL,
  `contraseña` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `num_telefono` int(11) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `comunidad_etnica` varchar(20) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(20) NOT NULL,
  `ciudad_emp` varchar(25) DEFAULT NULL,
  `num_cuenta` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `estado_balance` varchar(15) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`ced_emprendedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emprendedor`
--

LOCK TABLES `emprendedor` WRITE;
/*!40000 ALTER TABLE `emprendedor` DISABLE KEYS */;
INSERT INTO `emprendedor` VALUES (1075624153,'goku','pava','networpava@gmail.com',2147483647,'kennedy','2004-04-03','palenquera','masculino','kevin','pava','Bogota',123,10000,NULL,1);
/*!40000 ALTER TABLE `emprendedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial_compra`
--

DROP TABLE IF EXISTS `historial_compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historial_compra` (
  `fecha_hora_compra` date DEFAULT NULL,
  `num_orden` int(11) DEFAULT NULL,
  `id_historial_compra` int(11) NOT NULL,
  `num_guia` int(11) NOT NULL,
  `doc_comprador` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_historial_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial_compra`
--

LOCK TABLES `historial_compra` WRITE;
/*!40000 ALTER TABLE `historial_compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `historial_compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial_venta`
--

DROP TABLE IF EXISTS `historial_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historial_venta` (
  `fecha_hora_venta` datetime DEFAULT NULL,
  `id_historial_venta` int(11) NOT NULL,
  `num_orden` int(11) NOT NULL,
  `num_guia` int(11) NOT NULL,
  `ced_emprendedor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_historial_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial_venta`
--

LOCK TABLES `historial_venta` WRITE;
/*!40000 ALTER TABLE `historial_venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `historial_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacion_pago`
--

DROP TABLE IF EXISTS `notificacion_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacion_pago` (
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `cedula` int(15) NOT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `NoCuenta` int(15) DEFAULT NULL,
  `balance` decimal(10,0) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacion_pago`
--

LOCK TABLES `notificacion_pago` WRITE;
/*!40000 ALTER TABLE `notificacion_pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `notificacion_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacion_pedido`
--

DROP TABLE IF EXISTS `notificacion_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacion_pedido` (
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL,
  `numero_notificacion_pedido` int(11) NOT NULL,
  `doc_comprador` int(11) DEFAULT NULL,
  PRIMARY KEY (`numero_notificacion_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacion_pedido`
--

LOCK TABLES `notificacion_pedido` WRITE;
/*!40000 ALTER TABLE `notificacion_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `notificacion_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_pedido`
--

DROP TABLE IF EXISTS `orden_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_pedido` (
  `numero_orden` int(11) NOT NULL,
  `precio_total` int(11) DEFAULT NULL,
  `cantidad_productos` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,0) DEFAULT NULL,
  `numero_guia` varchar(20) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `ced_emprendedor` int(11) NOT NULL,
  `doc_comprador` int(11) NOT NULL,
  PRIMARY KEY (`numero_orden`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_pedido`
--

LOCK TABLES `orden_pedido` WRITE;
/*!40000 ALTER TABLE `orden_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `orden_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `nombre_producto` varchar(25) DEFAULT NULL,
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(225) DEFAULT NULL,
  `cantidad_producto` int(11) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `estado_producto` int(11) NOT NULL,
  `id_catalogo` int(11) DEFAULT NULL,
  `id_emprendedor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES ('Mona china',1,'img/Braya sin fondo_00000.png',1,2000,'una mona china epica',0,8,NULL),('Mona china',2,'img/Braya sin fondo_00000.png',1,2000,'una mona china epica',0,NULL,NULL);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `cargo` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
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

-- Dump completed on 2023-06-27 22:23:00
