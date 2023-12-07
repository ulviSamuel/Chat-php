-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 07, 2023 alle 11:14
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat5f`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tlogin`
--

CREATE TABLE `tlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tlogin`
--

INSERT INTO `tlogin` (`id`, `username`, `password`) VALUES
(1, 'Mario', 'Mario'),
(2, 'Giovanni', 'Giovanni'),
(3, 'Francesca', 'Francesca'),
(4, 'Lucia', 'Lucia'),
(5, 'Mauro', 'Mauro'),
(6, 'ulivi', 'ulivi2');

-- --------------------------------------------------------

--
-- Struttura della tabella `tmessaggi`
--

CREATE TABLE `tmessaggi` (
  `id` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idDest` int(11) DEFAULT NULL,
  `messaggio` text DEFAULT NULL,
  `dataIns` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tmessaggi`
--

INSERT INTO `tmessaggi` (`id`, `idUser`, `idDest`, `messaggio`, `dataIns`) VALUES
(38, 6, 3, 'Ciao Francesca, come va?', '2023-12-07 11:02:37'),
(39, 3, 6, 'Bene, tu?', '2023-12-07 11:03:20'),
(40, 6, 3, 'Bene bene', '2023-12-07 11:04:17'),
(41, 6, 3, 'Sta sera esci?', '2023-12-07 11:04:53'),
(42, 3, 6, 'Si', '2023-12-07 11:05:55'),
(43, 6, 3, 'Perfetto, a sta sera', '2023-12-07 11:06:19'),
(44, 6, 5, 'Vieni a calcetto pomeriggio?', '2023-12-07 11:07:41'),
(45, 5, 6, 'Per forza', '2023-12-07 11:08:09'),
(47, 6, 5, 'top', '2023-12-07 11:08:27'),
(48, 6, 1, 'Mario vammi a comprare queste cose:\r\n- Banane\r\n- Pasta\r\n- Latte', '2023-12-07 11:11:55'),
(49, 1, 6, 'Va bene', '2023-12-07 11:12:50');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `tlogin`
--
ALTER TABLE `tlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `tmessaggi`
--
ALTER TABLE `tmessaggi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `tlogin`
--
ALTER TABLE `tlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `tmessaggi`
--
ALTER TABLE `tmessaggi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
