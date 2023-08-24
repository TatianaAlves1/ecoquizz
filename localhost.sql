-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12/12/2022 às 04:41
-- Versão do servidor: 8.0.31-0ubuntu0.22.04.1
-- Versão do PHP: 8.1.2-1ubuntu2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecoquiz`
--
CREATE DATABASE IF NOT EXISTS `ecoquiz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecoquiz`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE `respostas` (
  `idResp` int NOT NULL,
  `topico1` int NOT NULL,
  `topico2` int NOT NULL,
  `topico3` int NOT NULL,
  `topico4` int NOT NULL,
  `idUser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `respostas`
--

INSERT INTO `respostas` (`idResp`, `topico1`, `topico2`, `topico3`, `topico4`, `idUser`) VALUES
(1, 2, 2, 2, 2, 1),
(2, 3, 2, 2, 1, 1),
(3, 3, 3, 2, 2, 5),
(4, 3, 2, 1, 2, 6),
(5, 3, 2, 1, 2, 6),
(6, 3, 2, 1, 2, 6),
(7, 3, 2, 1, 2, 6),
(8, 3, 2, 1, 2, 6),
(9, 3, 2, 1, 2, 6),
(10, 3, 2, 1, 2, 6),
(11, 3, 2, 1, 2, 6),
(12, 3, 2, 1, 2, 6),
(13, 3, 2, 1, 2, 6),
(14, 3, 2, 1, 2, 6),
(15, 3, 2, 1, 2, 6),
(16, 1, 0, 0, 0, 6),
(17, 3, 1, 1, 1, 6),
(18, 3, 2, 2, 3, 7),
(19, 3, 2, 2, 3, 7),
(20, 3, 2, 3, 3, 9),
(21, 3, 2, 2, 2, 10),
(22, 3, 2, 2, 1, 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `idUser` int NOT NULL,
  `nomeUser` varchar(255) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `tipoUser` int NOT NULL,
  `dataCadUser` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`idUser`, `nomeUser`, `emailUser`, `tipoUser`, `dataCadUser`) VALUES
(1, 'eita2222', 'tatipublisher000@gmail.com', 1, '2022-12-12'),
(2, 'Teste02', 'tatipublisher002@gmail.com', 1, '2022-12-12'),
(3, 'Teste03', 'tatipublisher003@gmail.com', 1, '2022-12-12'),
(4, 'Teste04', 'tatipublisher004@gmail.com', 1, '2022-12-12'),
(5, 'Teste05', 'tatipublisher005@gmail.com', 1, '2022-12-12'),
(6, 'Teste05', 'tatipublisher005@gmail.com', 1, '2022-12-12'),
(7, 'Teste06', 'tatipublisher006@gmail.com', 1, '2022-12-12'),
(8, 'Teste07', 'tatipublisher007@gmail.com', 1, '2022-12-12'),
(9, 'Teste08', 'tatipublisher008@gmail.com', 1, '2022-12-12'),
(10, 'Teste09', 'tatipublisher009@gmail.com', 1, '2022-12-12'),
(11, 'Teste10', 'tatipublisher010@gmail.com', 1, '2022-12-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`idResp`),
  ADD KEY `fk` (`idUser`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `idResp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `fk` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
