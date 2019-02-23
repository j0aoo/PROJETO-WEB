-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Fev-2019 às 07:47
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `login`, `senha`) VALUES
(5, 'j0aoo', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cademailnovidades`
--

CREATE TABLE `cademailnovidades` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cademailnovidades`
--

INSERT INTO `cademailnovidades` (`id`, `email`) VALUES
(1, 'panda@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `ano` varchar(10) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `portas` int(11) NOT NULL,
  `preco` double NOT NULL,
  `kilo` int(11) NOT NULL,
  `gasolina` varchar(20) DEFAULT NULL,
  `motor` varchar(20) DEFAULT NULL,
  `acessorios` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` text,
  `stat` enum('lida','Nlida') DEFAULT 'Nlida'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `telefone`, `email`, `mensagem`, `stat`) VALUES
(8, 'admin', '(11)1-1111-1111', 'joao_nog12@gmail.com', 'ef', 'lida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatoconsorcio`
--

CREATE TABLE `contatoconsorcio` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stat` enum('lida','Nlida') DEFAULT 'Nlida'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatoconsorcio`
--

INSERT INTO `contatoconsorcio` (`id`, `nome`, `telefone`, `email`, `stat`) VALUES
(3, 'Joao Carlos', '(88)94002-8925', 'maria@gmail.com', 'lida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`id`, `nome`) VALUES
(1, 'azul'),
(2, 'rosa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `financiamento`
--

CREATE TABLE `financiamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `parcela` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id`, `nome`) VALUES
(3, 'teste marca - 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `novidade`
--

CREATE TABLE `novidade` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `novos`
--

CREATE TABLE `novos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `versao` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cor` varchar(20) NOT NULL,
  `nomeImage` varchar(36) NOT NULL,
  `nomeImage2` varchar(36) NOT NULL,
  `nomeImage3` varchar(36) NOT NULL,
  `nomeImage4` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `novos`
--

INSERT INTO `novos` (`id`, `nome`, `preco`, `versao`, `ano`, `marca`, `cor`, `nomeImage`, `nomeImage2`, `nomeImage3`, `nomeImage4`) VALUES
(2, 'teste', 150, 'cross up ', 1, 'teste', 'azul', '0.27276400 1550897916.png', '1.272764.jpg', '2.274764.jpg', '3.274764.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stat` enum('lida','Nlida') DEFAULT 'Nlida'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`id`, `nome`, `telefone`, `email`, `stat`) VALUES
(4, 'Joao Carlos', '(84)94004-8922', 'maria@gmail.com', 'lida'),
(5, 'Joao Carlos', '(84)94004-8922', 'maria@gmail.com', 'lida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orccar`
--

CREATE TABLE `orccar` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stat` enum('lida','Nlida') DEFAULT 'Nlida'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orccar`
--

INSERT INTO `orccar` (`id`, `nome`, `telefone`, `email`, `stat`) VALUES
(1, 'joao', '(84)94002-8922', 'joao_nog12@hotmail.com', 'lida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE `pecas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stat` enum('lida','Nlida') DEFAULT 'Nlida'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`id`, `nome`, `telefone`, `email`, `stat`) VALUES
(20, 'maria', '(84)9-4002-8922', 'Marilyonaria@hotmail.com', 'lida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proposta`
--

CREATE TABLE `proposta` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `financiamento` varchar(10) DEFAULT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `semi`
--

CREATE TABLE `semi` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL,
  `preco` double NOT NULL,
  `km` int(11) NOT NULL,
  `versao` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `nomeImage` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `semi`
--

INSERT INTO `semi` (`id`, `nome`, `ano`, `preco`, `km`, `versao`, `cor`, `marca`, `nomeImage`) VALUES
(2, 'renaut', 1900, 150, 1399, 'cross up ', 'azul', 'teste', '0.07826400 1550876890.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `serv` varchar(100) DEFAULT NULL,
  `stat` enum('lida','Nlida') DEFAULT 'Nlida'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `telefone`, `email`, `serv`, `stat`) VALUES
(2, 'joao', '(84)9-4002-8922', 'maria@gmail.com', 'troca de peÃ§a', 'lida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cademailnovidades`
--
ALTER TABLE `cademailnovidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_cor` (`id_cor`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatoconsorcio`
--
ALTER TABLE `contatoconsorcio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financiamento`
--
ALTER TABLE `financiamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `novidade`
--
ALTER TABLE `novidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novos`
--
ALTER TABLE `novos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orccar`
--
ALTER TABLE `orccar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposta`
--
ALTER TABLE `proposta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semi`
--
ALTER TABLE `semi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cademailnovidades`
--
ALTER TABLE `cademailnovidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contatoconsorcio`
--
ALTER TABLE `contatoconsorcio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cor`
--
ALTER TABLE `cor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `financiamento`
--
ALTER TABLE `financiamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `novidade`
--
ALTER TABLE `novidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `novos`
--
ALTER TABLE `novos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orccar`
--
ALTER TABLE `orccar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pecas`
--
ALTER TABLE `pecas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `proposta`
--
ALTER TABLE `proposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semi`
--
ALTER TABLE `semi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carros`
--
ALTER TABLE `carros`
  ADD CONSTRAINT `carros_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `carros_ibfk_2` FOREIGN KEY (`id_cor`) REFERENCES `cor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
