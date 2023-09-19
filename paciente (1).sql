-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Set-2023 às 17:27
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `Data` date NOT NULL,
  `Sexo` varchar(7) NOT NULL,
  `Nome_hospital` varchar(45) NOT NULL,
  `Nomepac` varchar(45) NOT NULL,
  `Idadepac` int(11) NOT NULL,
  `CPFpac` int(11) NOT NULL,
  `Telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`Data`, `Sexo`, `Nome_hospital`, `Nomepac`, `Idadepac`, `CPFpac`, `Telefone`) VALUES
('2023-08-30', 'Masculi', 'são josé', 'andre', 42, 3242342, 2345434),
('2023-08-30', 'Masculi', 'são josé', 'andre', 42, 3242342, 2345434),
('2023-08-30', 'Masculi', 'são josé', 'andre', 42, 3242342, 2345434),
('2023-08-30', 'Masculi', 'são josé', 'andre', 42, 3242342, 2345434),
('2023-08-30', 'Feminin', 'são josé', 'tissia', 43, 2147483647, 2147483647),
('2023-08-29', 'Feminin', 'la', 'tissia', 1, 2147483647, 1231241412),
('2021-02-02', 'Feminin', 'são josé', 'evelin', 12, 19394949, 2147483647),
('2023-09-06', 'Feminin', 'são josé', 'andre', 33, 45345435, 343444334),
('2023-09-13', 'Feminin', 'são josé', 'amanda', 2, 292929292, 292929229),
('2023-08-31', 'Masculi', 'são josé', 'anderson', 45, 292929292, 292929229),
('2023-09-06', 'Feminin', 'elaine', 'andre23', 113, 1213133, 121212121),
('2023-09-06', 'Feminin', 'elaine', 'andre23', 113, 1213133, 121212121),
('2023-09-05', 'Masculi', 'gabriel', 'ula ula ', 112, 1213133, 121212121),
('2023-09-20', 'Feminin', 'são josé', 'tissia', 534, 443534534, 345353453),
('2023-09-07', 'Masculi', 'la', 'brach', 23, 2233333, 2147483647),
('2023-09-07', 'Feminin', 'são josé', 'maicol', 15, 19292929, 12344333);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
