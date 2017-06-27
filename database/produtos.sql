-- phpMyAdmin SQL Dump
-- version 4.4.14
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20-Jun-2017 às 23:05
-- Versão do servidor: 5.7.14
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `USSPORTSBD`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `modalidade` text NOT NULL,
  `preco` double NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela de Produtos';

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `modalidade`, `preco`, `descricao`) VALUES
(1, 'Camisa Lebron James', 'NBA', 199.99, 'Camisa Lebron James - Cleveland Cavaliers - 23'),
(2, 'Camisa Stephen Curry', 'NBA', 199.99, 'Camisa Stephen Curry - Golden State Warriors - 30'),
(3, 'Camisa Kawhi Leonard', 'NBA', 179.99, 'Camisa Kawhi Leonard - San Antonio Spurs - 2'),
(4, 'Camisa Russel Westbrook', 'NBA', 179.99, 'Camisa Russel Westbrook - Oklahoma City Thunder - 0'),
(5, 'Camisa James Harden', 'NBA', 189.99, 'Camisa James Harden - Houston Rockets - 13'),
(6, 'Camisa Isaiah Thomas', 'NBA', 179.99, 'Camisa Isaiah Thomas - Boston Celtics - 4'),
(7, 'Camisa Tom Brady', 'NFL', 299.99, 'Camisa Tom Brady - New England Patriots - 12'),
(8, 'Camisa Drew Brees', 'NFL', 279.99, 'Camisa Drew Brees - New Orleans Saints - 9'),
(9, 'Camisa Peyton Manning', 'NFL', 289.99, 'Camisa Peyton Manning - Denver Broncos - 18'),
(10, 'Camisa Ben Roethlisberger', 'NFL', 279.99, 'Camisa Ben Roethlisberger - Pittsburgh Steelers - 7'),
(11, 'Camisa Cam Newton', 'NFL', 279.99, 'Camisa Cam Newton - Carolina Panthers - 1'),
(12, 'Camisa Larry Fitzgerald', 'NFL', 279.99, 'Camisa Larry Fitzgerald - Arizona Cardinals - 11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
