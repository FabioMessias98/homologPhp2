-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05-Maio-2020 às 00:35
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id12870088_banco1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL COMMENT 'Chave primária da relação usuários',
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome do usuário',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email do usuário',
  `senha` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Senha do usuário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Zé dos Alfaces', 'zedascouves@gmail.com', '123456'),
(2, 'Maria das Couves', 'mariadascouves@gmail.com', '654321'),
(3, 'teste', 'teste@gmail.com', 'teste'),
(5, 'Monica', 'monica@gmail.com', 'mmm123'),
(6, 'Cebolinha', 'cebolinha@gmail.com', 'llllll'),
(8, 'Cascão', 'cascao@gmail.com', 'sujeira'),
(12, 'Dorimê', 'teste@gmail.com', '123456'),
(13, 'Sergio', 'sergio@sergio.com.br', 'teste'),
(14, 'php melhor linguagem', 'de programação', 'phpevida');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primária da relação usuários', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
