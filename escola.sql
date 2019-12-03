-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 02/09/2018 às 00:08
-- Versão do servidor: 5.5.61-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `escola`
--
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `matricula` varchar(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `codcurso` char(2) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `endereco`, `cidade`, `codcurso`) VALUES
('1001', 'Marcos Moraes', 'Rua Pe Roque, 2057', 'Mogi Mirim', '01'),
('1002', 'Maria Conceicao Lopes', 'Rua Araras, 23', 'Mogi Gua', '01'),
('1003', 'Ana Carina Lopes', 'Rua Peraltas, 222', 'Santos', '01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `codcurso` char(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `coddisc1` char(2) NOT NULL,
  `coddisc2` char(2) NOT NULL,
  `coddisc3` char(2) NOT NULL,
  PRIMARY KEY (`codcurso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cursos`
--

INSERT INTO `cursos` (`codcurso`, `nome`, `coddisc1`, `coddisc2`, `coddisc3`) VALUES
('01', 'Auxiliar de Informatica', '11', '12', '13'),
('02', 'Programacao de Computadores', '21', '22', '23'),
('03', 'Tecnico em Informatica', '31', '32', '33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `CodDisciplina` char(2) NOT NULL,
  `NomeDisciplina` varchar(30) NOT NULL,
  PRIMARY KEY (`CodDisciplina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `disciplinas`
--

INSERT INTO `disciplinas` (`CodDisciplina`, `NomeDisciplina`) VALUES
('11', 'Banco de Dados'),
('12', 'Logica de Programacao'),
('13', 'Desenvolvimento de Software I'),
('21', 'Banco de Dados 2'),
('22', 'Desenvolvimento de Software 2'),
('23', 'Programacao de Computadores I'),
('31', 'Banco de Dados 3'),
('32', 'Programacao de Computadores 2'),
('33', 'Desenvolvimento de Software 3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `login` varchar(5) NOT NULL,
  `senha` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`login`, `senha`) VALUES
('adm', '123'),
('comum', '456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
