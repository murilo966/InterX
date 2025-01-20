-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/01/2025 às 00:40
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cole6345_app`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `denuncias`
--

CREATE TABLE `denuncias` (
  `id` int(11) NOT NULL,
  `turmaagredida` varchar(20) NOT NULL,
  `turmadenunciada` varchar(20) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `statusrecorrer` varchar(15) NOT NULL,
  `descrecorrer` varchar(255) NOT NULL,
  `veredito` varchar(255) NOT NULL,
  `gravidade` varchar(30) NOT NULL,
  `pontosperdidos` int(11) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `respanalise` varchar(50) NOT NULL,
  `datadenuncia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `denuncias`
--

INSERT INTO `denuncias` (`id`, `turmaagredida`, `turmadenunciada`, `descricao`, `status`, `statusrecorrer`, `descrecorrer`, `veredito`, `gravidade`, `pontosperdidos`, `responsavel`, `respanalise`, `datadenuncia`) VALUES
(16, 'Anacrônico', 'Pandora', 'sjdajksdskahdkashdkjahsdjk', 'Finalizada', '', '', 'Procedente', 'Alta', 300, '', '', '2024-10-01'),
(17, 'Pandora', 'Anacrônico', 'sdlkjfdksjfklsj', 'Finalizada', '', '', 'Procedente', 'Leve', 50, '', '', '2024-10-01'),
(18, 'Pandora', 'Anacrônico', 'eldjsalkdjalskjdl', 'Finalizada', '', '', 'Procedente', 'Leve', 50, 'adm@gmail.com', '', '2024-10-01'),
(19, 'Pandora', 'Anacrônico', 'aksdjoasdoaiudoiausdsaduaosid aosijdaoisduaina asdj adoaiosd asdiaopdi asdojsaoiduoa.', 'Finalizada', '', '', 'Improcedente', 'Não', 0, 'adm@gmail.com', '', '2024-10-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `modalidade` varchar(30) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `time1` varchar(20) NOT NULL,
  `time2` varchar(20) NOT NULL,
  `local` varchar(25) NOT NULL,
  `resultado` varchar(30) NOT NULL,
  `vencedor` varchar(20) NOT NULL,
  `pontos` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `hora` time NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`id`, `modalidade`, `sexo`, `time1`, `time2`, `local`, `resultado`, `vencedor`, `pontos`, `tipo`, `responsavel`, `hora`, `data`) VALUES
(39, 'Futsal', '', 'Pandora', 'Anacrônico', 'Ginásio interno', '05 a 02 ', 'Pandora', 50, 1, '', '10:00:00', '2024-10-01'),
(40, 'Basquete 3x3', '', 'Anacrônico', 'Corsário', 'Ginásio interno', '03 x 04', 'Anacrônico', 50, 1, '', '10:00:00', '2024-10-01'),
(41, 'Queimada mista', '', 'Corsário', 'Juízo Final', 'Ginásio interno', '03 x04', 'Corsário', 50, 1, '', '10:30:00', '2024-10-01'),
(42, 'Vôlei misto', '', 'Juízo Final', 'Atena', 'Ginásio interno', '05 x 02', 'Juízo Final', 50, 1, '', '10:30:00', '2024-10-01'),
(43, 'Tênis de mesa', '', 'Atena', 'Fênix', 'Ginásio interno', '03 x 09', 'Atena', 50, 1, '', '11:00:00', '2024-10-01'),
(44, 'Futsal', '', 'Pandora', '', '', 'Campeão', 'Pandora', 200, 2, '', '00:00:00', '2024-10-01'),
(45, 'Futsal', '', 'Pandora', 'Anacrônico', 'Ginásio interno', 'laksjdlasjd', 'Pandora', 50, 1, 'adm@gmail.com', '00:00:00', '2024-10-05'),
(46, 'Basquete 3x3', '', 'Anacrônico', 'Corsário', 'Ginásio interno', '', '', 0, 1, 'adm@gmail.com', '10:00:00', '2024-10-05'),
(47, 'Futsal', '', 'Pandora', '', '', 'Campeão', 'Pandora', 200, 2, 'adm@gmail.com', '00:00:00', '2024-10-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `turma` varchar(20) NOT NULL,
  `modalidade` varchar(20) NOT NULL,
  `ano` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `times`
--

INSERT INTO `times` (`id`, `turma`, `modalidade`, `ano`) VALUES
(1, 'Pandora', 'Futebol', '2024');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `turma` varchar(20) NOT NULL,
  `tipo` int(11) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `turma`, `tipo`, `responsavel`, `data`) VALUES
(100, 'Clerison Bueno', 'clerisonbueno@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Anacrônico', 1, '', '2024-09-04'),
(101, 'Admin', 'adm@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'pandora', 2, '', '2024-09-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
