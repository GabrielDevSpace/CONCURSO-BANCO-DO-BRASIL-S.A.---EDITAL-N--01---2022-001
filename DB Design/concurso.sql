-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Mar-2023 às 14:55
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concurso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `subject_contents`
--

CREATE TABLE `subject_contents` (
  `id` int(11) NOT NULL,
  `id_title` varchar(25) NOT NULL,
  `id_subtitle` varchar(11) NOT NULL,
  `content` blob NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subject_notes`
--

CREATE TABLE `subject_notes` (
  `id` int(11) NOT NULL,
  `id_title` varchar(25) NOT NULL,
  `id_subtitle` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `note` blob NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subject_subtitles`
--

CREATE TABLE `subject_subtitles` (
  `id` int(11) NOT NULL,
  `id_title` varchar(25) NOT NULL,
  `subtitle` varchar(550) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subject_titles`
--

CREATE TABLE `subject_titles` (
  `id` int(11) NOT NULL,
  `id_title` varchar(30) NOT NULL,
  `title` varchar(120) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `subject_contents`
--
ALTER TABLE `subject_contents`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `subject_notes`
--
ALTER TABLE `subject_notes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `subject_subtitles`
--
ALTER TABLE `subject_subtitles`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `subject_titles`
--
ALTER TABLE `subject_titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `subject_contents`
--
ALTER TABLE `subject_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `subject_notes`
--
ALTER TABLE `subject_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `subject_subtitles`
--
ALTER TABLE `subject_subtitles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `subject_titles`
--
ALTER TABLE `subject_titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
