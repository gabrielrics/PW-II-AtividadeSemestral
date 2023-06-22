-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Jun-2023 às 19:27
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

DROP TABLE IF EXISTS `tbcontato`;
CREATE TABLE IF NOT EXISTS `tbcontato` (
  `idFilme` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) DEFAULT NULL,
  `Senha` varchar(100) DEFAULT NULL,
  `idGenero` int DEFAULT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfilme`
--

DROP TABLE IF EXISTS `tbfilme`;
CREATE TABLE IF NOT EXISTS `tbfilme` (
  `idFilme` int NOT NULL AUTO_INCREMENT,
  `NomeFilme` varchar(100) DEFAULT NULL,
  `Diretor` varchar(100) DEFAULT NULL,
  `OndeVer` varchar(100) DEFAULT NULL,
  `Sinopse` varchar(300) DEFAULT NULL,
  `tempo` varchar(20) DEFAULT NULL,
  `imageInicio` varchar(255) DEFAULT NULL,
  `imagePrincipal` varchar(255) DEFAULT NULL,
  `idGenero` int DEFAULT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbfilme`
--

INSERT INTO `tbfilme` (`idFilme`, `NomeFilme`, `Diretor`, `OndeVer`, `Sinopse`, `tempo`, `imageInicio`, `imagePrincipal`, `idGenero`) VALUES
(22, 'gh', 'f', 'g', 'fsd     ', 'f', 'f', '', 0),
(31, 'asd', 's', 's', 's                     ', 's', 's', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

DROP TABLE IF EXISTS `tbgenero`;
CREATE TABLE IF NOT EXISTS `tbgenero` (
  `idGenero` int NOT NULL AUTO_INCREMENT,
  `genero` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbgenero`
--

INSERT INTO `tbgenero` (`idGenero`, `genero`) VALUES
(1, 'Terror'),
(2, 'Comédia'),
(3, 'Romance');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
