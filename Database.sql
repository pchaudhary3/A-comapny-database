-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: InstaTech
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Current Database: `InstaTech`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `InstaTech` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `InstaTech`;

--
-- Table structure for table `Customer_List`
--

DROP TABLE IF EXISTS `Customer_List`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Customer_List` (
  `Customer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Phone_Number` varchar(14) DEFAULT NULL,
  `Invoice_No` int(11) DEFAULT NULL,
  PRIMARY KEY (`Customer_ID`),
  KEY `FK_InvoiceNo` (`Invoice_No`),
  CONSTRAINT `FK_InvoiceNo` FOREIGN KEY (`Invoice_No`) REFERENCES `Requisition` (`Invoice_No`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customer_List`
--

LOCK TABLES `Customer_List` WRITE;
/*!40000 ALTER TABLE `Customer_List` DISABLE KEYS */;
INSERT INTO `Customer_List` VALUES (1,'asd dasd','2019-02-15','asdsa@una.edu','123-456-6577',1),(2,'asdhgghj','2019-04-20','sdfsf@una.edu','456-456-7812',2),(3,'dter','2019-04-20','sdfsd@dfg.df','789-364-1349',3),(4,'yuiyui','2019-02-15','sfsd@sdf.sdf','795-698-1305',4),(5,'wer ret','2019-02-15','fsdfs@sdf.sdf','789-420-5611',5),(6,'tryu wrw','2019-04-20','sdggfh@hj.ghj','453-782-9795',6),(7,'iouou 6y65','2019-02-15','sdfdghf@as.as','343-675-0897',7),(8,'wer yuiyu','2019-04-20','dsfs@sdf.fds','132-865-0756',8),(9,'etr ouo','2019-04-20','sdf@asd.asd','789-160-4612',9),(10,'wrer ioio','2019-04-20','dasdasfdh@gf.fg','789-456-1322',10);
/*!40000 ALTER TABLE `Customer_List` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Department`
--

DROP TABLE IF EXISTS `Department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Department` (
  `Department_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Department` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Department_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Department`
--

LOCK TABLES `Department` WRITE;
/*!40000 ALTER TABLE `Department` DISABLE KEYS */;
INSERT INTO `Department` VALUES (1,'Accountant'),(2,'HR'),(3,'Sales'),(4,'Advertising'),(5,'Management');
/*!40000 ALTER TABLE `Department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employee`
--

DROP TABLE IF EXISTS `Employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employee` (
  `Employee_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) DEFAULT NULL,
  `SSN` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `Phone_Number` varchar(14) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Department_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Employee_ID`),
  KEY `FK_DepartmentID` (`Department_ID`),
  CONSTRAINT `FK_DepartmentID` FOREIGN KEY (`Department_ID`) REFERENCES `Department` (`Department_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employee`
--

LOCK TABLES `Employee` WRITE;
/*!40000 ALTER TABLE `Employee` DISABLE KEYS */;
INSERT INTO `Employee` VALUES (1,'Vonyetta Hollomon','234-15-7894','1990-12-01','714-456-7894','UNA Box#468',5),(2,'Adam Benefield','567-78-4689','1995-01-15','715-786-4256','UNA Box#7987',1),(3,'Tyler Newton','787-12-4567','1957-02-05','789-159-3574','UNA Box#456',3),(4,'Hunter Davis','789-14-1023','1980-10-04','789-954-7896','UNA Box#621',4),(5,'Devin Berry','695-78-3650','1987-11-29','256-762-8946','UNA Box#134',2),(6,'Christian Poag','899-78-7894','1950-08-30','256-716-4973','UNA Box#164',4),(7,'Justin Watson','987-23-9845','1992-05-10','413-715-1234','UNA Box#45',3),(8,'Peyton Ewoldt','985-98-7894','1951-07-21','245-468-7022','UNA Box#95',3),(9,'Foster Hudsmith','976-78-9845','1987-11-29','786-741-7146','UNA Box#146',5),(10,'Prachi Chaudhary','369-78-7897','1997-02-05','976-741-0130','UNA Box#145',3),(11,'Tate Carden','963-89-7897','1990-07-25','732-365-2486','UNA Box#789',3),(12,'Ryan Newton','789-56-6599','1990-09-14','712-198-1456','UNA Box#47',5);
/*!40000 ALTER TABLE `Employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Inventory`
--

DROP TABLE IF EXISTS `Inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Inventory` (
  `Model_No` varchar(5) NOT NULL,
  `Product_Type` varchar(15) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`Model_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Inventory`
--

LOCK TABLES `Inventory` WRITE;
/*!40000 ALTER TABLE `Inventory` DISABLE KEYS */;
INSERT INTO `Inventory` VALUES ('A1001','Desktops',800,20),('A1002','Laptop',500,20),('A1003','Mouse',100,50),('A1004','Keyboard',75,50),('A1005','Webcam',35,60),('A1006','Anti-virus Soft',200,20),('B1001','3d printer',1000,10),('C1001','Drones',700,30),('D1001','Smartphones',850,20),('D1002','Smartwatches',650,30);
/*!40000 ALTER TABLE `Inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Requisition`
--

DROP TABLE IF EXISTS `Requisition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Requisition` (
  `Invoice_No` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(11) DEFAULT NULL,
  `Employee_ID` int(11) DEFAULT NULL,
  `QuantityPurchased` int(11) DEFAULT NULL,
  PRIMARY KEY (`Invoice_No`),
  KEY `FK_CustomerID` (`Customer_ID`),
  KEY `FK_EmployeeID` (`Employee_ID`),
  CONSTRAINT `FK_EmployeeID` FOREIGN KEY (`Employee_ID`) REFERENCES `Employee` (`Employee_ID`),
  CONSTRAINT `FK_CustomerID` FOREIGN KEY (`Customer_ID`) REFERENCES `Customer_List` (`Customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Requisition`
--

LOCK TABLES `Requisition` WRITE;
/*!40000 ALTER TABLE `Requisition` DISABLE KEYS */;
INSERT INTO `Requisition` VALUES (1,1,1,1),(2,2,2,1),(3,3,3,1),(4,4,4,1),(5,5,5,2),(6,6,6,5),(7,7,7,1),(8,8,8,1),(9,9,9,3),(10,10,10,1);
/*!40000 ALTER TABLE `Requisition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Requisition_Inventory`
--

DROP TABLE IF EXISTS `Requisition_Inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Requisition_Inventory` (
  `Invoice_No` int(11) NOT NULL AUTO_INCREMENT,
  `Model_No` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`Invoice_No`,`Model_No`),
  KEY `FK_ModelNo` (`Model_No`),
  CONSTRAINT `FK_Invoice` FOREIGN KEY (`Invoice_No`) REFERENCES `Requisition` (`Invoice_No`),
  CONSTRAINT `FK_ModelNo` FOREIGN KEY (`Model_No`) REFERENCES `Inventory` (`Model_No`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Requisition_Inventory`
--

LOCK TABLES `Requisition_Inventory` WRITE;
/*!40000 ALTER TABLE `Requisition_Inventory` DISABLE KEYS */;
INSERT INTO `Requisition_Inventory` VALUES (2,'A1001'),(1,'A1002'),(3,'A1002'),(9,'A1003'),(6,'A1004'),(7,'A1005'),(4,'A1006'),(8,'B1001'),(10,'C1001'),(5,'D1002');
/*!40000 ALTER TABLE `Requisition_Inventory` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-19 19:55:34
