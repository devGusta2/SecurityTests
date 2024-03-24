-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/03/2024 às 22:21
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sqlinjection`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadm`
--

CREATE TABLE `tbadm` (
  `idAdm` int(11) NOT NULL,
  `nomeAdm` varchar(20) NOT NULL,
  `emailAdm` varchar(30) NOT NULL,
  `senhaAdm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `nameUser` varchar(50) NOT NULL,
  `sobrenomeUser` varchar(50) NOT NULL,
  `emailUser` varchar(100) NOT NULL,
  `senhaUser` varchar(50) NOT NULL,
  `telUser` varchar(20) NOT NULL,
  `dataNascUser` date NOT NULL,
  `cpfUser` char(11) NOT NULL,
  `logUser` varchar(200) NOT NULL,
  `cidadeUser` varchar(30) NOT NULL,
  `estadoUser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadm`
--
ALTER TABLE `tbadm`
  ADD PRIMARY KEY (`idAdm`);

--
-- Índices de tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadm`
--
ALTER TABLE `tbadm`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
