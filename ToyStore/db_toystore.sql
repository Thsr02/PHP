-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Fev-2023 às 13:15
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_toystore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_brinquedo`
--

CREATE TABLE `tbl_brinquedo` (
  `bri_id` int(11) NOT NULL,
  `bri_name` varchar(80) NOT NULL,
  `bri_show` int(11) NOT NULL,
  `bri_cat` int(11) NOT NULL,
  `bri_userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `tbl_brinquedo`
--

INSERT INTO `tbl_brinquedo` (`bri_id`, `bri_name`, `bri_show`, `bri_cat`, `bri_userId`) VALUES
(2, 'Lego Senhor dos Aneis', 0, 1, 1),
(3, 'Lego StarWars', 0, 1, 1),
(4, 'Kenshin Himura', 0, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`cat_id`, `cat_name`) VALUES
(1, 'Blocos'),
(2, 'Bonecas'),
(3, 'Carrinhos'),
(4, 'Action Figure'),
(5, 'Esportes'),
(6, 'Jogos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'thiago', 'thiago@thiago', '123'),
(2, 'bruno', 'bruno@bruno', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_brinquedo`
--
ALTER TABLE `tbl_brinquedo`
  ADD PRIMARY KEY (`bri_id`),
  ADD KEY `bri_cat` (`bri_cat`),
  ADD KEY `bri_userId` (`bri_userId`) USING BTREE;

--
-- Índices para tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índices para tabela `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_brinquedo`
--
ALTER TABLE `tbl_brinquedo`
  MODIFY `bri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_brinquedo`
--
ALTER TABLE `tbl_brinquedo`
  ADD CONSTRAINT `tbl_brinquedo_ibfk_1` FOREIGN KEY (`bri_cat`) REFERENCES `tbl_categoria` (`cat_id`),
  ADD CONSTRAINT `tbl_brinquedo_ibfk_2` FOREIGN KEY (`bri_userId`) REFERENCES `tbl_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
