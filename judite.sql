-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Ago-2022 às 16:57
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
-- Banco de dados: `judite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `nome` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome`, `telefone`, `cpf`, `email`, `endereco`, `senha`, `nivel`, `id_vendedor`) VALUES
('Alynne Bianca', '84994074902', 701755, 'alynnebianca774@gmail.com', 'Rua Manoel Monteiro Filho, 2081', 'aa68c75c4a77c87f97fb686b2f068676', '', 5),
('Luis Macedo', '84940028922', 2147483647, 'macedinho<3@gmail.com', 'Rua dos Lesos', 'fff5807faa8843dda040fc9a2d245e6f', '', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemvendas`
--

CREATE TABLE `itemvendas` (
  `ID_venda` int(11) NOT NULL,
  `ID_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `precodecompra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precodevenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garantia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`precodecompra`, `descricao`, `precodevenda`, `garantia`, `marca`, `id_produto`) VALUES
('20', 'Gabinete Grindor', '100', '1', 'Grindor', 1),
('20', 'Apollo DT3', '90', '1', 'Apollo', 2),
('5', 'Gabinete GT', '30', '1', 'GT', 3),
('30', 'Gabinete Ghost', '105', '1', 'Ghost', 4),
('35', 'Gabinete White Tiger', '120', '1', 'Tiger', 5),
('40', 'Gabinete  Ultra violeta', '150', '1', 'Hyperx', 6),
('20', 'Teclado', '50', '30', 'ryzen 4', 7),
('50', 'Mouse', '300', '30', 'reddragon', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cliente` text NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `vendedor` text NOT NULL,
  `produto` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco_und` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  `datadecompra` date NOT NULL DEFAULT current_timestamp(),
  `garantia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD UNIQUE KEY `id_vendedor` (`id_vendedor`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD UNIQUE KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD UNIQUE KEY `id_venda` (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
