-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 07/03/2019 às 00:34
-- Versão do servidor: 10.1.37-MariaDB-0+deb9u1
-- Versão do PHP: 7.0.33-0+deb9u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_euro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `desc_pg`
--

CREATE TABLE `desc_pg` (
  `id` int(11) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `pg_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modifield` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `desc_pg`
--

INSERT INTO `desc_pg` (`id`, `descricao`, `pg_id`, `created`, `modifield`) VALUES
(1, '<p><em style=\"font-size:20px\">Planeje um ambiente agrad&aacute;vel, aproveitando melhor o espa&ccedil;o do seu banheiro!</em></p>\r\n', 1, '2019-03-01 22:57:15', '2019-03-04 17:36:28'),
(11, '<p><em style=\"font-size:20px\">Seu ambiente de trabalho com layout funcional, atrativo e moderno.</em></p>\r\n', 2, '2019-03-01 23:55:43', '2019-03-04 17:38:13'),
(12, '<p><em><span style=\"font-size:20px\">Cozinhas da Euro Ambientes acentuam a praticidade na hora de cozinhar e a sutileza na hora de armazenar</span></em></p>\r\n', 5, '2019-03-02 00:39:20', '2019-03-02 01:16:36'),
(13, '<p><em><span style=\"font-size:20px\">Os dormit&oacute;rios na Euro Ambientes alinham criatividade, conforto e sofistica&ccedil;&atilde;o</span></em></p>\r\n', 6, '2019-03-02 00:39:46', '2019-03-02 01:16:43'),
(14, '<p><em><span style=\"font-size:20px\">Um home office diferenciado, compartilhando a Infra-Estrutura o ambiente dom&eacute;stico com seu trabalho profissional voc&ecirc; encontra na Euro Ambientes</span></em></p>\r\n', 7, '2019-03-02 00:40:13', '2019-03-02 01:16:56'),
(15, '<p><em><span style=\"font-size:20px\">Na Euro Ambientes o seu Home tera um designer moderno sem deixar a sua personalidade de lado</span></em></p>\r\n', 8, '2019-03-02 00:40:39', '2019-03-02 01:17:07'),
(16, '<p><em><span style=\"font-size:20px\">Quem n&atilde;o gosta de deixar a sua roupa limpa num lugar sofisticado e agrad&aacute;vel, voc&ecirc; tem tudo isso com a Euro Ambientes</span></em></p>\r\n', 9, '2019-03-02 00:41:03', '2019-03-02 01:17:19'),
(17, '<p><em><span style=\"font-size:20px\">Cabeceiras estofadas de v&aacute;rios estilos contrastando com seu perfil</span></em></p>\r\n', 3, '2019-03-02 01:30:10', NULL),
(18, '<p><em><span style=\"font-size:20px\">Na hora do seu descanso, temos os produtos ideais</span></em></p>\r\n', 10, '2019-03-02 01:30:36', NULL),
(20, '<p><em><span style=\"font-size:20px\">Al&eacute;m de modernos nossos estofados alinham conforto e tecnologia para seu bem estar</span></em></p>\r\n', 11, '2019-03-02 01:32:04', NULL),
(21, '<p><em><span style=\"font-size:20px\">As poltronas alem de modernas ajudam a decorar seu ambiente</span></em></p>\r\n', 13, '2019-03-02 01:32:28', NULL),
(22, '<p><em><span style=\"font-size:20px\">Apesar de ser uma pe&ccedil;a mais decorativa ajuda tamb&eacute;m no design do seu dormit&oacute;rio</span></em></p>\r\n', 14, '2019-03-02 01:32:59', '2019-03-02 01:33:41'),
(27, '<p><strong><span style=\"font-size:18px\"><span style=\"color:#FF0000\">Somos uma empresa de Passo Fundo(RS) que iniciou suas atividades </span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:#FF0000\">no dia 18 de novembro de 2015, com a finalidade de ofereer m&oacute;veis planejados, </span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:#FF0000\">estofados, poltronas, colch&otilde;es, persianas e objetos de decora&ccedil;&atilde;o, </span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:#FF0000\">com a qualidade e o requinte que o cliente deseja, prezando sempre pela </span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:#FF0000\">excel&ecirc;ncia no atendimento e satisfa&ccedil;&atilde;o do cliente.</span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:#FF0000\">Elaboramos projetos personalizados e exclusivos para resid&ecirc;ncia, loja ou escrit&oacute;rio</span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:rgb(255, 0, 0)\">Somos uma empresa de Passo Fundo(RS) que iniciou suas atividades</span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:rgb(255, 0, 0)\">no dia 18 de novembro de 2015, com a finalidade de ofereer m&oacute;veis planejados,</span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:rgb(255, 0, 0)\">estofados, poltronas, colch&otilde;es, persianas e objetos de decora&ccedil;&atilde;o,</span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"color:rgb(255, 0, 0)\">com a qualidade e o requinte que o cliente deseja, prezando sempre pela</span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><spa', 21, '2019-03-05 18:41:30', '2019-03-06 23:52:33'),
(28, '', 4, '2019-03-05 19:05:36', '2019-03-05 19:06:36'),
(29, '<p>Rua Benjamin Constant 630,</p>\r\n\r\n<p>Centro, Passo Fundo - RS</p>\r\n\r\n<p><br />\r\n<span style=\"color:rgb(171, 77, 99); font-family:ptsansregular\">Fone:&nbsp;</span>(54) 3632-5444&nbsp; &nbsp;</p>\r\n\r\n<p><span style=\"color:rgb(171, 77, 99); font-family:ptsansregular\">Whats:&nbsp;</span>&nbsp;(54)99920-7966</p>\r\n\r\n<p><span style=\"color:rgb(171, 77, 99); font-family:ptsansregular\">E-mail:</span>&nbsp;contato@euroambientes.com.br</p>\r\n', 22, '2019-03-05 19:07:59', '2019-03-06 23:33:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem_pagina`
--

CREATE TABLE `imagem_pagina` (
  `id` int(11) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  `imagem` varchar(220) NOT NULL,
  `modifield` datetime DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imagem_pagina`
--

INSERT INTO `imagem_pagina` (`id`, `pagina_id`, `imagem`, `modifield`, `created`) VALUES
(1, 1, '1551635080.jpg', '2019-03-03 18:19:52', '2019-03-03 14:44:40'),
(2, 1, '1551635110.jpg', NULL, '2019-03-03 14:45:10'),
(3, 1, '1551635127.jpg', NULL, '2019-03-03 14:45:27'),
(4, 1, '1551635135.jpg', NULL, '2019-03-03 14:45:35'),
(5, 1, '1551635146.jpg', NULL, '2019-03-03 14:45:46'),
(6, 1, '1551635157.jpg', NULL, '2019-03-03 14:45:57'),
(7, 1, '1551635168.jpg', NULL, '2019-03-03 14:46:08'),
(8, 2, '1551635181.jpg', NULL, '2019-03-03 14:46:21'),
(9, 2, '1551635191.jpg', NULL, '2019-03-03 14:46:31'),
(10, 2, '1551635200.jpg', NULL, '2019-03-03 14:46:40'),
(11, 2, '1551635207.jpg', NULL, '2019-03-03 14:46:47'),
(12, 2, '1551635215.jpg', NULL, '2019-03-03 14:46:55'),
(13, 2, '1551635223.jpg', NULL, '2019-03-03 14:47:03'),
(14, 5, '1551636808.jpg', NULL, '2019-03-03 15:13:28'),
(15, 5, '1551636826.jpg', NULL, '2019-03-03 15:13:46'),
(16, 5, '1551636835.jpg', NULL, '2019-03-03 15:13:55'),
(17, 5, '1551636843.jpg', NULL, '2019-03-03 15:14:03'),
(18, 5, '1551636853.jpg', NULL, '2019-03-03 15:14:13'),
(19, 5, '1551636861.jpg', NULL, '2019-03-03 15:14:21'),
(20, 5, '1551640030.jpg', NULL, '2019-03-03 16:07:10'),
(21, 5, '1551640049.jpg', NULL, '2019-03-03 16:07:29'),
(22, 5, '1551640065.jpg', NULL, '2019-03-03 16:07:45'),
(23, 5, '1551640100.jpg', NULL, '2019-03-03 16:08:20'),
(24, 5, '1551640124.jpg', NULL, '2019-03-03 16:08:44'),
(25, 6, '1551640144.jpg', NULL, '2019-03-03 16:09:04'),
(26, 6, '1551640260.jpg', NULL, '2019-03-03 16:11:00'),
(27, 6, '1551640270.jpg', NULL, '2019-03-03 16:11:10'),
(28, 6, '1551640285.jpg', NULL, '2019-03-03 16:11:25'),
(29, 6, '1551640347.jpg', NULL, '2019-03-03 16:12:27'),
(30, 6, '1551640365.jpg', NULL, '2019-03-03 16:12:45'),
(31, 6, '1551640379.jpg', NULL, '2019-03-03 16:12:59'),
(32, 6, '1551640397.jpg', NULL, '2019-03-03 16:13:17'),
(33, 6, '1551640411.jpg', NULL, '2019-03-03 16:13:31'),
(34, 7, '1551640452.jpg', NULL, '2019-03-03 16:14:12'),
(35, 7, '1551640460.jpg', NULL, '2019-03-03 16:14:20'),
(36, 7, '1551640467.jpg', NULL, '2019-03-03 16:14:27'),
(37, 7, '1551640474.jpg', NULL, '2019-03-03 16:14:34'),
(38, 7, '1551640479.jpg', NULL, '2019-03-03 16:14:39'),
(39, 7, '1551640485.jpg', NULL, '2019-03-03 16:14:45'),
(40, 7, '1551640489.jpg', NULL, '2019-03-03 16:14:49'),
(41, 7, '1551640494.jpg', NULL, '2019-03-03 16:14:54'),
(42, 8, '1551640502.jpg', NULL, '2019-03-03 16:15:02'),
(51, 8, '1551642207.jpg', NULL, '2019-03-03 16:43:27'),
(52, 8, '1551642374.jpg', NULL, '2019-03-03 16:46:14'),
(53, 0, '', NULL, '2019-03-03 16:46:27'),
(55, 8, '1551643507.jpg', NULL, '2019-03-03 17:05:07'),
(56, 8, '1551643515.jpg', NULL, '2019-03-03 17:05:15'),
(57, 8, '1551643529.jpg', NULL, '2019-03-03 17:05:29'),
(58, 8, '1551643540.jpg', NULL, '2019-03-03 17:05:40'),
(59, 9, '1551643558.jpg', NULL, '2019-03-03 17:05:58'),
(60, 9, '1551643581.jpg', NULL, '2019-03-03 17:06:21'),
(61, 9, '1551643591.jpg', NULL, '2019-03-03 17:06:31'),
(62, 9, '1551643596.jpg', NULL, '2019-03-03 17:06:36'),
(63, 9, '1551643606.jpg', NULL, '2019-03-03 17:06:46'),
(64, 9, '1551643614.jpg', NULL, '2019-03-03 17:06:54'),
(65, 9, '1551643618.jpg', NULL, '2019-03-03 17:06:58'),
(67, 3, '1551643640.jpg', NULL, '2019-03-03 17:07:20'),
(68, 10, '1551643667.jpg', NULL, '2019-03-03 17:07:47'),
(69, 10, '1551643675.jpg', NULL, '2019-03-03 17:07:55'),
(70, 10, '1551643686.jpg', NULL, '2019-03-03 17:08:06'),
(71, 10, '1551643719.jpg', NULL, '2019-03-03 17:08:39'),
(72, 10, '1551643731.jpg', NULL, '2019-03-03 17:08:51'),
(73, 10, '1551643740.jpg', NULL, '2019-03-03 17:09:00'),
(75, 11, '1551643770.jpg', NULL, '2019-03-03 17:09:30'),
(76, 11, '1551643777.jpg', NULL, '2019-03-03 17:09:37'),
(77, 11, '1551643784.jpg', NULL, '2019-03-03 17:09:44'),
(78, 11, '1551643791.jpg', NULL, '2019-03-03 17:09:51'),
(79, 11, '1551643796.jpg', NULL, '2019-03-03 17:09:56'),
(80, 11, '1551643802.jpg', NULL, '2019-03-03 17:10:02'),
(81, 11, '1551643810.jpg', NULL, '2019-03-03 17:10:10'),
(82, 11, '1551643816.jpg', NULL, '2019-03-03 17:10:16'),
(83, 11, '1551643823.jpg', NULL, '2019-03-03 17:10:23'),
(84, 11, '1551643830.jpg', NULL, '2019-03-03 17:10:30'),
(85, 11, '1551643838.jpg', NULL, '2019-03-03 17:10:38'),
(86, 11, '1551643846.jpg', NULL, '2019-03-03 17:10:46'),
(87, 11, '1551643855.jpg', NULL, '2019-03-03 17:10:55'),
(88, 11, '1551643863.jpg', NULL, '2019-03-03 17:11:03'),
(89, 11, '1551643872.jpg', NULL, '2019-03-03 17:11:12'),
(92, 13, '1551643924.jpg', NULL, '2019-03-03 17:12:04'),
(93, 13, '1551643931.jpg', NULL, '2019-03-03 17:12:11'),
(94, 13, '1551643938.jpg', NULL, '2019-03-03 17:12:18'),
(95, 13, '1551643945.jpg', NULL, '2019-03-03 17:12:25'),
(96, 13, '1551643951.jpg', NULL, '2019-03-03 17:12:31'),
(97, 13, '1551643956.jpg', NULL, '2019-03-03 17:12:36'),
(98, 13, '1551643961.jpg', NULL, '2019-03-03 17:12:41'),
(99, 13, '1551643967.jpg', NULL, '2019-03-03 17:12:47'),
(100, 13, '1551643973.jpg', NULL, '2019-03-03 17:12:53'),
(101, 13, '1551643981.jpg', NULL, '2019-03-03 17:13:01'),
(102, 13, '1551643989.jpg', NULL, '2019-03-03 17:13:09'),
(103, 14, '1551644004.jpg', NULL, '2019-03-03 17:13:24'),
(104, 14, '1551644010.jpg', NULL, '2019-03-03 17:13:30'),
(105, 4, '1551644067.jpg', NULL, '2019-03-03 17:14:27'),
(106, 4, '1551644075.jpg', NULL, '2019-03-03 17:14:35'),
(107, 4, '1551644084.jpg', NULL, '2019-03-03 17:14:44'),
(108, 4, '1551644092.jpg', NULL, '2019-03-03 17:14:52'),
(109, 4, '1551644100.jpg', NULL, '2019-03-03 17:15:00'),
(118, 19, '1551734471.jpg', NULL, '2019-03-04 18:21:11'),
(119, 0, '1551737384.jpg', NULL, '2019-03-04 19:09:44'),
(120, 0, '1551737456.jpg', NULL, '2019-03-04 19:10:56'),
(121, 0, '1551737479.jpg', NULL, '2019-03-04 19:11:19'),
(122, 1, '1551737524.jpg', '2019-03-04 19:13:16', '2019-03-04 19:12:04'),
(123, 1, 'bg4.jpg', '2019-03-05 19:11:14', '2019-03-05 18:55:33'),
(124, 21, '1551925003.jpg', NULL, '2019-03-06 23:16:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem_sistema`
--

CREATE TABLE `imagem_sistema` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `imagem` varchar(220) NOT NULL,
  `modifield` datetime DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imagem_sistema`
--

INSERT INTO `imagem_sistema` (`id`, `nome`, `imagem`, `modifield`, `created`) VALUES
(2, 'logo', 'logo (1).png', '2019-03-04 18:02:31', '2019-03-02 10:21:09'),
(3, 'facebook', '1551532887.jpg', NULL, '2019-03-02 10:21:27'),
(4, 'twitter', '1551532913.jpg', NULL, '2019-03-02 10:21:53'),
(5, 'instagram', '1551532933.jpg', NULL, '2019-03-02 10:22:13'),
(6, 'favicon', '1551532961.jpg', NULL, '2019-03-02 10:22:41'),
(7, 'background', 'WhatsApp Image 2019-01-18 at 15.28.11 (2).jpeg', '2019-03-04 18:13:28', '2019-03-02 11:04:53');

-- --------------------------------------------------------

--
-- Estrutura para tabela `nivel_acessos`
--

CREATE TABLE `nivel_acessos` (
  `id` int(11) NOT NULL,
  `nome_nivel` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`id`, `nome_nivel`, `created`, `modified`) VALUES
(1, 'Administrador', '2015-09-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(520) NOT NULL,
  `tag` varchar(220) NOT NULL,
  `rotulo_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modifield` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `paginas`
--

INSERT INTO `paginas` (`id`, `descricao`, `tag`, `rotulo_id`, `created`, `modifield`) VALUES
(1, 'Banheiros', 'banheiros', 1, '2019-03-01 20:41:57', '2019-03-02 01:03:04'),
(2, 'Corporativo', 'corporativo', 1, '2019-03-01 20:42:20', '2019-03-01 21:39:16'),
(3, 'Cabeceiras', 'cabeceiras', 2, '2019-03-01 20:43:56', '2019-03-01 21:47:54'),
(4, 'Página Inicial', 'pagina-inicial', 4, '2019-03-05 18:35:15', NULL),
(5, 'Cozinhas', 'cozinhas', 1, '2019-03-01 21:11:06', '2019-03-01 21:39:23'),
(6, 'Dormitórios', 'dormitorios', 1, '2019-03-01 21:11:15', '2019-03-05 17:45:29'),
(7, 'Home Office', 'home_office', 1, '2019-03-01 21:15:28', '2019-03-01 21:39:39'),
(8, 'Home Theater', 'home_theater', 1, '2019-03-01 21:15:48', '2019-03-01 21:39:49'),
(9, 'Lavanderia', 'lavanderia', 1, '2019-03-01 21:16:03', '2019-03-01 21:47:43'),
(10, 'Colchões', 'colchoes', 2, '2019-03-01 21:16:20', '2019-03-05 17:45:38'),
(11, 'Estofados', 'estofados', 2, '2019-03-01 21:18:23', '2019-03-01 21:48:10'),
(12, 'Divans', 'divans', 2, '2019-03-01 21:18:39', '2019-03-01 21:48:06'),
(13, 'Poltronas', 'poltronas', 2, '2019-03-01 21:18:52', '2019-03-01 21:48:15'),
(14, 'Recamiere', 'recamiere', 2, '2019-03-01 21:19:06', '2019-03-04 08:36:08'),
(19, 'Show Room', 'show-room', 8, '2019-03-04 18:20:29', NULL),
(21, 'Quem Somos', 'quem-somos', 6, '2019-03-05 18:38:16', NULL),
(22, 'Fale Conosco', 'fale-conosco', 10, '2019-03-05 18:38:39', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `rotulo`
--

CREATE TABLE `rotulo` (
  `id` int(11) NOT NULL,
  `descricao` varchar(520) NOT NULL,
  `created` datetime NOT NULL,
  `modifield` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `rotulo`
--

INSERT INTO `rotulo` (`id`, `descricao`, `created`, `modifield`) VALUES
(1, 'MÓVEIS PLANEJADOS', '2019-03-01 20:14:50', '2019-03-04 19:54:20'),
(2, 'PRODUTOS PRONTOS', '2019-03-01 20:15:02', '2019-03-04 17:30:12'),
(4, 'PÁGINA INICIAL', '2019-03-01 20:47:02', '2019-03-05 17:46:41'),
(6, 'QUEM SOMOS ', '2019-03-04 17:22:51', '2019-03-04 17:55:21'),
(10, 'FALE CONOSCO', '2019-03-05 17:48:15', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `nivel_acesso_id`, `created`, `modified`) VALUES
(2, 'Web Master', 'master@master.com', 'webmaster', 'ZXVybzEyMzQ=', 1, '2019-03-01 13:09:32', '2019-03-07 00:31:19'),
(5, 'usuario 2', 'contato@euroambientes.com.br', 'valmor', 'dGVzdGUxMjM0', 1, '2019-03-01 13:12:43', '2019-03-07 00:30:21'),
(6, 'usuario 3', 'contato@euroambientes.com.br', 'ronan', 'MTIzNHRlc3Rl', 1, '2019-03-02 11:29:28', '2019-03-07 00:30:37');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `desc_pg`
--
ALTER TABLE `desc_pg`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imagem_pagina`
--
ALTER TABLE `imagem_pagina`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imagem_sistema`
--
ALTER TABLE `imagem_sistema`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rotulo`
--
ALTER TABLE `rotulo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `desc_pg`
--
ALTER TABLE `desc_pg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de tabela `imagem_pagina`
--
ALTER TABLE `imagem_pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT de tabela `imagem_sistema`
--
ALTER TABLE `imagem_sistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de tabela `rotulo`
--
ALTER TABLE `rotulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
