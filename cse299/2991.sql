--
-- Table structure for table `confirmation`
--
-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 06:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;




CREATE TABLE DOCTOR (
  FIRSTNAME varchar(50) NOT NULL,
  LASTNAME  varchar(50) NOT NULL,
  EMAIL  varchar(50) NOT NULL UNIQUE,
  USERNAME varchar(50) NOT NULL,
  SPECIALITY VARCHAR(50) NOT NULL,
  PASSWORD varchar(200) NOT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=latin1; 



INSERT INTO DOCTOR (FIRSTNAME,LASTNAME,EMAIL,USERNAME,SPECIALITY,PASSWORD) VALUES
 ('sayem', 'mahmud', 'sayem.mahmud97@northsouth.edu', 'sayem mahmud','neuro','@@@@@@@@@@@sam'),
 ('sayem', 'mahmud', 'sayem.mahmud97@northsouth', 'sayem mahmud','medicine', '@@@@@@@@@@@sam');
 
 CREATE TABLE PATIENT (
  FIRSTNAME varchar(50) NOT NULL,
  LASTNAME  varchar(50) NOT NULL,
  EMAIL  varchar(50) NOT NULL UNIQUE,
  USERNAME varchar(50) NOT NULL,
  PASSWORD varchar(200) NOT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=latin1; 



INSERT INTO PATIENT (FIRSTNAME,LASTNAME,EMAIL,USERNAME,PASSWORD) VALUES
 ('sayem', 'mahmud', 'sayem.mahmud97@gmail.com', 'sayem mahmud','@@@@@@@@@@@sam'),
 ('sayem', 'mahmud', 'sayem.mahmud97@gmail', 'sayem mahmud','@@@@@@@@@@@sam');
 COMMIT;
 
 /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

 

