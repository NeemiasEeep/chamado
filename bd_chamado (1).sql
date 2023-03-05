-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Mar-2023 às 00:47
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_chamado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adm`
--

CREATE TABLE `tb_adm` (
  `adm_id` int(11) NOT NULL,
  `adm_nome` varchar(255) DEFAULT NULL,
  `adm_login` varchar(255) DEFAULT NULL,
  `adm_senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_adm`
--

INSERT INTO `tb_adm` (`adm_id`, `adm_nome`, `adm_login`, `adm_senha`) VALUES
(1, 'Neemias', 'neemias_43', '40028922');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chamados`
--

CREATE TABLE `tb_chamados` (
  `ch_id` int(11) NOT NULL,
  `ch_usu_id` int(11) DEFAULT NULL,
  `ch_usu_nome` varchar(255) DEFAULT NULL,
  `ch_usu_setor` varchar(255) DEFAULT NULL,
  `ch_pedido` text DEFAULT NULL,
  `ch_data` date DEFAULT NULL,
  `ch_status` varchar(255) DEFAULT NULL,
  `ch_adm_id` int(11) DEFAULT NULL,
  `ch_adm_nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_chamados`
--

INSERT INTO `tb_chamados` (`ch_id`, `ch_usu_id`, `ch_usu_nome`, `ch_usu_setor`, `ch_pedido`, `ch_data`, `ch_status`, `ch_adm_id`, `ch_adm_nome`) VALUES
(1, 1, 'Daline', 'RH', 'Computador ta com problemas', '2023-03-05', 'Em aguardo', 1, 'Neemias'),
(3, 4, 'Samille', 'Politicas Publicas', 'Wait a minute', '0000-00-00', '', NULL, NULL),
(4, 4, 'Camila', 'Servico Social', 'Stolen dance', '0000-00-00', '', NULL, NULL),
(5, 4, 'Daline', 'RH', 'Superman', '0000-00-00', '', NULL, NULL),
(6, 4, 'Camila', 'Politicas Publicas', 'ssss', '2023-03-05', 'Aguardando Inicio', NULL, NULL),
(7, 5, 'Mariinha Justa', 'Epidemiologia', 'Sem internet ', '2023-03-05', 'Aguardando Inicio', NULL, NULL),
(8, 5, 'Daline', 'RH', 'yougyufuogf', '2023-03-05', 'Aguardando Inicio', NULL, NULL),
(9, 7, 'Gilvan', 'Transportes', 'Problemas no paraiso', '2023-03-06', 'Aguardando Inicio', NULL, NULL),
(10, 7, 'neemias', 'T.I', 'Samurai', '2023-03-06', 'Aguardando Inicio', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_nome` varchar(255) DEFAULT NULL,
  `usu_tel` varchar(255) DEFAULT NULL,
  `usu_setor` varchar(255) DEFAULT NULL,
  `usu_login` varchar(255) NOT NULL,
  `usu_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`usu_id`, `usu_nome`, `usu_tel`, `usu_setor`, `usu_login`, `usu_senha`) VALUES
(1, 'Daline', '33430102', 'RH', 'daline@rh.com', '123'),
(3, 'Samille', '33432256', 'Politicas Publicas', 'samille@jkl', '456321'),
(4, 'Camila', '546216', 'Servico Social', 'camila@trilha', '400215468'),
(5, 'Mariinha Justa', '84516165', 'Epidemiologia', 'justa@123', '14521'),
(6, 'neemias', '416845', 'T.I', 'admin', 'admin'),
(7, 'Gilvan', '45632178', 'Transportes', 'gilvan@sec', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_adm`
--
ALTER TABLE `tb_adm`
  ADD PRIMARY KEY (`adm_id`);

--
-- Índices para tabela `tb_chamados`
--
ALTER TABLE `tb_chamados`
  ADD PRIMARY KEY (`ch_id`),
  ADD KEY `ch_usu_id` (`ch_usu_id`),
  ADD KEY `ch_adm_id` (`ch_adm_id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_adm`
--
ALTER TABLE `tb_adm`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_chamados`
--
ALTER TABLE `tb_chamados`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_chamados`
--
ALTER TABLE `tb_chamados`
  ADD CONSTRAINT `tb_chamados_ibfk_1` FOREIGN KEY (`ch_usu_id`) REFERENCES `tb_usuarios` (`usu_id`),
  ADD CONSTRAINT `tb_chamados_ibfk_2` FOREIGN KEY (`ch_adm_id`) REFERENCES `tb_adm` (`adm_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
