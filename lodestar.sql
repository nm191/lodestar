-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 sep 2018 om 13:42
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lodestar`
--
CREATE DATABASE IF NOT EXISTS `lodestar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lodestar`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `created_by_user_id` int(10) UNSIGNED NOT NULL,
  `date_last_modified` datetime DEFAULT NULL,
  `last_modified_by_user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `date_deleted` datetime DEFAULT NULL,
  `deleted_by_user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `date_last_logged_in` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `users`
--

TRUNCATE TABLE `users`;
--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `date_created`, `created_by_user_id`, `date_last_modified`, `last_modified_by_user_id`, `date_deleted`, `deleted_by_user_id`, `email_address`, `password`, `full_name`, `date_last_logged_in`) VALUES
(1, '2018-09-07 00:00:00', 0, '2018-09-07 00:00:00', 0, NULL, 0, 'nickvanmeel95@gmail.com', '$2y$10$4EDpAAngeGB/tCVbxFww6O3ialtiHLlu1wGUrkbJre/.24TmHdYlW', 'Nick van Meel', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
