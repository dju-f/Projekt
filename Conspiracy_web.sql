-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 06. Mrz 2025 um 07:35
-- Server-Version: 8.0.40
-- PHP-Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `Conspiracy.web`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `articles`
--

CREATE TABLE `articles` (
  `article_title` varchar(255) NOT NULL,
  `article_subtitle` varchar(255) NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `article_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Forum`
--

CREATE TABLE `Forum` (
  `forum_author` varchar(32) NOT NULL DEFAULT 'Anonymous',
  `forum_title` varchar(64) NOT NULL,
  `forum_text` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Produkts`
--

CREATE TABLE `Produkts` (
  `prod_name` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_shorttext` varchar(255) NOT NULL,
  `prod_longtext` varchar(255) NOT NULL,
  `prod_price` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `User`
--

CREATE TABLE `User` (
  `User_ID` int NOT NULL,
  `User_Username` varchar(32) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `User_Password` varchar(16) NOT NULL,
  `Bank_Cardholder` varchar(255) NOT NULL,
  `Bank_Cardnumber` varchar(16) NOT NULL,
  `Bank_CVV` varchar(3) NOT NULL,
  `Bank_ExpDate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `User`
--
ALTER TABLE `User`
  MODIFY `User_ID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
