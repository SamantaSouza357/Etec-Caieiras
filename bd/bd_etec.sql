-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29-Out-2022 às 21:23
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_etec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_noticias`
--

CREATE TABLE `categoria_noticias` (
  `cod_categoria` int(7) NOT NULL,
  `nm_categoria` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela das categorias das noticias';

--
-- Extraindo dados da tabela `categoria_noticias`
--

INSERT INTO `categoria_noticias` (`cod_categoria`, `nm_categoria`) VALUES
(1, 'tecnologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `cod_contato` int(7) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` varchar(3000) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela do formulario de contato';

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `cod_documento` int(7) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` varchar(200) NOT NULL,
  `anexo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de documentos em geral da etec';

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `cod_noticia` int(7) NOT NULL,
  `categoria` char(50) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `conteudo` varchar(3000) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `nm_usuario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela para as noticias do site';

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `cod_professor` int(7) NOT NULL,
  `nome` char(150) NOT NULL,
  `email_inst` varchar(200) NOT NULL,
  `componentes` varchar(300) NOT NULL,
  `cursos` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de professores e seus componentes';

-- --------------------------------------------------------

--
-- Estrutura da tabela `tp_contato`
--

CREATE TABLE `tp_contato` (
  `cod_tp` int(7) NOT NULL,
  `assunto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de assuntos pre definidos';

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(7) NOT NULL,
  `nome` char(150) NOT NULL,
  `email` char(200) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `tipo` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de usuarios cadastrados';

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'Samanta Souza', 'samantaSouza@gmail.com', '$2y$10$sPq4wrKdqKuUj/fSnNh0nOjtEzu8euu9itgo.uS7bJCjPlRXY6Jhu', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_noticias`
--
ALTER TABLE `categoria_noticias`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`cod_contato`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`cod_documento`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`cod_noticia`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`cod_professor`);

--
-- Indexes for table `tp_contato`
--
ALTER TABLE `tp_contato`
  ADD PRIMARY KEY (`cod_tp`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_noticias`
--
ALTER TABLE `categoria_noticias`
  MODIFY `cod_categoria` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `cod_contato` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `cod_documento` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `cod_noticia` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `cod_professor` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tp_contato`
--
ALTER TABLE `tp_contato`
  MODIFY `cod_tp` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
