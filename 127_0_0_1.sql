-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Jan-2021 às 16:11
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdexact`
--
CREATE DATABASE IF NOT EXISTS `bdexact` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bdexact`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `NomeCategoria` varchar(60) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `NomeCategoria`) VALUES
(1, 'CATEGORIA ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome`) VALUES
(2, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhos`
--

DROP TABLE IF EXISTS `trabalhos`;
CREATE TABLE IF NOT EXISTS `trabalhos` (
  `id_trabalho` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `id_categoria` int NOT NULL,
  `diretorioArquivo` varchar(250) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  PRIMARY KEY (`id_trabalho`),
  KEY `id_categoria` (`id_categoria`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `confirmar_senha` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tipo_user` varchar(45) NOT NULL,
  `id_curso` int DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_curso` (`id_curso`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nome`, `usuario`, `senha`, `confirmar_senha`, `email`, `tipo_user`, `id_curso`) VALUES
(1, 'jessica', 'jessica', '123', '123', 'jessicaidro@gmail.com', 'A', 1),
(2, 'Jéssica Idro', 'idro', '1', '1', 'jessicaidro@hotmail.com', 'A', 1),
(3, 'professor', 'professor', '1', '1', 'professor@exacifsp.com', 'P', 1),
(4, 'professornulo', 'professornulo', '1', '1', 'professornulo@exactifsp.com', 'P', 1);
--
-- Banco de dados: `trabalhointerdisciplinar`
--
CREATE DATABASE IF NOT EXISTS `trabalhointerdisciplinar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `trabalhointerdisciplinar`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `IDCategoria` int NOT NULL,
  `NomeCategoria` varchar(100) NOT NULL,
  PRIMARY KEY (`IDCategoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `classificacaofiscal`
--

DROP TABLE IF EXISTS `classificacaofiscal`;
CREATE TABLE IF NOT EXISTS `classificacaofiscal` (
  `IDClassificacaoFiscal` int NOT NULL,
  `ICMS` int NOT NULL,
  `NCM` int NOT NULL,
  `CSOSN` int NOT NULL,
  `Aliquota` int NOT NULL,
  `CFOP` int NOT NULL,
  PRIMARY KEY (`IDClassificacaoFiscal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `CPF` varchar(14) NOT NULL,
  `NomeCliente` varchar(100) NOT NULL,
  `EmailCliente` varchar(100) NOT NULL,
  `RG` varchar(12) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomenda`
--

DROP TABLE IF EXISTS `encomenda`;
CREATE TABLE IF NOT EXISTS `encomenda` (
  `IDEncomenda` int NOT NULL,
  `FormaPagamento` varchar(100) NOT NULL,
  `DataEncomenda` date NOT NULL,
  `CPF` varchar(14) NOT NULL,
  PRIMARY KEY (`IDEncomenda`),
  KEY `fk_CPF4` (`CPF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecocliente`
--

DROP TABLE IF EXISTS `enderecocliente`;
CREATE TABLE IF NOT EXISTS `enderecocliente` (
  `IDEnderecoCliente` int NOT NULL,
  `RuaCliente` varchar(100) NOT NULL,
  `NumeroCasaCliente` int NOT NULL,
  `ComplementoCasaCliente` varchar(100) DEFAULT NULL,
  `CEPCliente` varchar(9) NOT NULL,
  `CidadeCliente` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  PRIMARY KEY (`IDEnderecoCliente`),
  KEY `fk_CPF2` (`CPF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecoentrega`
--

DROP TABLE IF EXISTS `enderecoentrega`;
CREATE TABLE IF NOT EXISTS `enderecoentrega` (
  `IDEnderecoEntrega` int NOT NULL,
  `RuaEntrega` varchar(100) NOT NULL,
  `NumeroCasaEntrega` int NOT NULL,
  `ComplementoCasaEntrega` varchar(100) DEFAULT NULL,
  `CEPEntrega` varchar(9) NOT NULL,
  `CidadeEntrega` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  PRIMARY KEY (`IDEnderecoEntrega`),
  KEY `fk_CPF3` (`CPF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingrediente`
--

DROP TABLE IF EXISTS `ingrediente`;
CREATE TABLE IF NOT EXISTS `ingrediente` (
  `IDIngrediente` int NOT NULL,
  `NomeIngrediente` varchar(100) NOT NULL,
  `QuantidadeIngrediente` decimal(10,10) NOT NULL,
  PRIMARY KEY (`IDIngrediente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `IDProduto` int NOT NULL,
  `PrecoProduto` decimal(10,2) NOT NULL,
  `NomeProduto` varchar(100) NOT NULL,
  `IDCategoria` int NOT NULL,
  `IDClassificacaoFiscal` int NOT NULL,
  PRIMARY KEY (`IDProduto`),
  KEY `fk_IDCategoria` (`IDCategoria`),
  KEY `fk_IDClassificacaoFiscal` (`IDClassificacaoFiscal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtoencomenda`
--

DROP TABLE IF EXISTS `produtoencomenda`;
CREATE TABLE IF NOT EXISTS `produtoencomenda` (
  `IDProduto` int NOT NULL,
  `IDEncomenda` int NOT NULL,
  `Quantidade` int NOT NULL,
  PRIMARY KEY (`IDProduto`,`IDEncomenda`),
  KEY `fk_IDEncomenda2` (`IDEncomenda`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtoingrediente`
--

DROP TABLE IF EXISTS `produtoingrediente`;
CREATE TABLE IF NOT EXISTS `produtoingrediente` (
  `IDProduto` int NOT NULL,
  `IDIngrediente` int NOT NULL,
  PRIMARY KEY (`IDProduto`,`IDIngrediente`),
  KEY `fk_IDIngrediente` (`IDIngrediente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `statusencomenda`
--

DROP TABLE IF EXISTS `statusencomenda`;
CREATE TABLE IF NOT EXISTS `statusencomenda` (
  `IDStatusEncomenda` int NOT NULL,
  `IDEncomenda` int NOT NULL,
  `StatusEncomenda` int NOT NULL,
  PRIMARY KEY (`IDStatusEncomenda`),
  KEY `fk_IDEncomenda` (`IDEncomenda`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

DROP TABLE IF EXISTS `telefone`;
CREATE TABLE IF NOT EXISTS `telefone` (
  `IDTelefone` int NOT NULL,
  `NumeroTelefone` varchar(20) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  PRIMARY KEY (`IDTelefone`),
  KEY `fk_CPF` (`CPF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
