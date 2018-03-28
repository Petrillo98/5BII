-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 alle 10:10
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_orienteeringpontedera`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `gara`
--

CREATE TABLE IF NOT EXISTS `gara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(200) CHARACTER SET utf8 NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `info_gara`
--

CREATE TABLE IF NOT EXISTS `info_gara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chiave_gara` int(11) NOT NULL,
  `latitudine` float NOT NULL,
  `longitudine` float NOT NULL,
  `tipo_punto` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `chiave_gara` (`chiave_gara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `cognome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `posizione`
--

CREATE TABLE IF NOT EXISTS `posizione` (
  `chiave_persona` int(11) NOT NULL,
  `chiave_gara` int(11) NOT NULL,
  `progressivo` int(11) NOT NULL,
  `latitudine` float NOT NULL,
  `longitudine` float NOT NULL,
  `accuratezza` float NOT NULL,
  `timestamp_server` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  ` timestamp_client` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`progressivo`),
  KEY `chiave_persona` (`chiave_persona`),
  KEY `chiave_gara` (`chiave_gara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `info_gara`
--
ALTER TABLE `info_gara`
  ADD CONSTRAINT `info_gara_ibfk_1` FOREIGN KEY (`chiave_gara`) REFERENCES `gara` (`id`);

--
-- Limiti per la tabella `posizione`
--
ALTER TABLE `posizione`
  ADD CONSTRAINT `posizione_ibfk_1` FOREIGN KEY (`chiave_persona`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `posizione_ibfk_2` FOREIGN KEY (`chiave_gara`) REFERENCES `gara` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
