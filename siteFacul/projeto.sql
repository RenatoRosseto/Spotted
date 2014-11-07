-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1:3308
-- Data de Criação: 07-Nov-2014 às 11:21
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_alunos`
--

CREATE TABLE IF NOT EXISTS `cadastro_alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `TIA` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `elo` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `main_lane` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cadastro_alunos`
--

INSERT INTO `cadastro_alunos` (`id`, `nome`, `email`, `TIA`, `senha`, `sexo`, `elo`, `curso`, `data_nascimento`, `main_lane`) VALUES
(1, 'Renato1', 'renato_rosseto@hotmail.com', '31336353', '123', 'M', 'ouro', 'Ciência da Computação', '1992-03-14', 'SUP'),
(2, 'Renato2', 'renato@ydeasolutions.com.br', '31336353', '123', 'M', 'ouro', 'Sistemas', '1992-03-14', 'JUNGLE'),
(3, 'Royal Napoleao', 'royal_napoleao@hotmail.com', '31336353', '123', 'M', 'ouro', 'Ciência da Computação', '1992-03-14', 'TOP'),
(5, 'Danadin', 'danado@loko.com', '31336353', '321', 'M', 'Desafiante', 'Sistemas de informaÃ§Ã£o', '1992-03-14', 'JUNGLE'),
(6, 'danada', 'danada@bolada', '31336655', '456', 'F', 'Prata', 'CiÃªncia da ComputaÃ§Ã£o', '2011-10-11', 'MID');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
