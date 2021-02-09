-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Fev-2021 às 03:06
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdautoml`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cenario`
--

CREATE TABLE `cenario` (
  `codcenario` int(10) NOT NULL,
  `usuario` int(10) NOT NULL,
  `identcenario` varchar(100) NOT NULL,
  `descenario` varchar(100) NOT NULL,
  `descupload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cenario`
--

INSERT INTO `cenario` (`codcenario`, `usuario`, `identcenario`, `descenario`, `descupload`) VALUES
(5, 1, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `execucao`
--

CREATE TABLE `execucao` (
  `codexecucao` int(10) NOT NULL,
  `treino` int(10) NOT NULL,
  `tipoproblema` varchar(100) DEFAULT NULL,
  `variavelalvo` varchar(100) DEFAULT NULL,
  `budget` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mapeamento`
--

CREATE TABLE `mapeamento` (
  `codmap` int(10) NOT NULL,
  `cenario` int(10) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL,
  `profissao` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `nascionalidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
--

CREATE TABLE `treino` (
  `codtreino` int(10) NOT NULL,
  `map` int(10) NOT NULL,
  `validacao` int(3) NOT NULL,
  `treino` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `perfil` char(1) NOT NULL,
  `ultimoacesso` datetime DEFAULT NULL,
  `ativo` char(1) DEFAULT 'A',
  `senha` varchar(12) DEFAULT '12345678'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nome`, `email`, `perfil`, `ultimoacesso`, `ativo`, `senha`) VALUES
(1, 'Moisés Traves', 'traves8@msn.com', 'A', '2021-02-08 22:47:01', 'A', '12345678'),
(2, 'Rodrigo Silveira', 'rsilveira@gmail.com', 'A', '2021-01-16 19:25:48', 'A', '12345678'),
(10, 'Maria Eduarda Anelli   Traves', 'duda_traves@gmail.com', 'U', NULL, 'A', '12345678');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cenario`
--
ALTER TABLE `cenario`
  ADD PRIMARY KEY (`codcenario`),
  ADD KEY `cenario_FKIndex1` (`usuario`);

--
-- Índices para tabela `execucao`
--
ALTER TABLE `execucao`
  ADD PRIMARY KEY (`codexecucao`),
  ADD KEY `execucao_FKIndex1` (`treino`);

--
-- Índices para tabela `mapeamento`
--
ALTER TABLE `mapeamento`
  ADD PRIMARY KEY (`codmap`),
  ADD KEY `cenario` (`cenario`);

--
-- Índices para tabela `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`codtreino`),
  ADD KEY `treino_FKIndex1` (`map`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cenario`
--
ALTER TABLE `cenario`
  MODIFY `codcenario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `execucao`
--
ALTER TABLE `execucao`
  MODIFY `codexecucao` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mapeamento`
--
ALTER TABLE `mapeamento`
  MODIFY `codmap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `treino`
--
ALTER TABLE `treino`
  MODIFY `codtreino` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cenario`
--
ALTER TABLE `cenario`
  ADD CONSTRAINT `cenario_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`codusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `execucao`
--
ALTER TABLE `execucao`
  ADD CONSTRAINT `execucao_ibfk_1` FOREIGN KEY (`treino`) REFERENCES `treino` (`codtreino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `mapeamento`
--
ALTER TABLE `mapeamento`
  ADD CONSTRAINT `mapeamento_ibfk_1` FOREIGN KEY (`cenario`) REFERENCES `cenario` (`codcenario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mapeamento_ibfk_2` FOREIGN KEY (`cenario`) REFERENCES `cenario` (`codcenario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `treino`
--
ALTER TABLE `treino`
  ADD CONSTRAINT `treino_ibfk_1` FOREIGN KEY (`map`) REFERENCES `mapeamento` (`codmap`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
