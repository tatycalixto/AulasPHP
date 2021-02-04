-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/02/2021 às 00:43
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_controle_de_notas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `notas`
--

CREATE TABLE `notas` (
  `ce_id_notas` int(100) NOT NULL,
  `nome_aluno` varchar(500) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `media` float NOT NULL,
  `id_notas` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `notas`
--

INSERT INTO `notas` (`ce_id_notas`, `nome_aluno`, `nota1`, `nota2`, `media`, `id_notas`) VALUES
(1, 'Fernando Torres', 10, 2, 6, 1),
(1, 'Fernanda Torres', 10, 4, 7, 2),
(2, 'Maria Torres', 10, 10, 10, 3),
(2, 'Rogério Torres', 10, 1, 5.5, 4),
(10, 'Maria da Silva', 8, 5, 6.5, 10),
(10, 'Fernando', 10, 10, 10, 11),
(10, 'Yago', 5, 9, 7, 12),
(10, 'Cremildo da Silva', 10, 8, 9, 13),
(10, 'João da Silva', 8, 6, 7, 14),
(7, 'Frederico da  Silva', 10, 4, 7, 16),
(7, 'Fernando  da Silva', 10, 8, 9, 18),
(7, 'Maria da Silva', 10, 1, 5.5, 19),
(7, 'Marlene da Silva', 10, 2, 6, 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `nome_usuario` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email`, `senha`) VALUES
(1, 'Tatyane', 'tatycalixto@gmail.com', '123456'),
(2, 'Maria', 'maria@gmail.com', '654321'),
(4, 'Fernando', 'fernando@gmail.com', '321654'),
(6, 'Leticia', 'leticia@gmail.com', '123456'),
(7, 'Taty', 'tatyanecalixto@gmail.com', '123456'),
(8, 'João', 'joao@gmail.com', '123456'),
(9, 'Roberta', 'roberta@gmail.com', '123456'),
(10, 'Tatyane Calixto', 'tatyc@gmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_notas`),
  ADD KEY `ce_id_notas` (`ce_id_notas`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id_notas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `ce_id_notas` FOREIGN KEY (`ce_id_notas`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
