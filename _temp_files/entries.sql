-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Gép: localhost:3306
-- Létrehozás ideje: 2023. Jún 02. 22:11
-- Kiszolgáló verziója: 8.0.33-0ubuntu0.20.04.2
-- PHP verzió: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `ace`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `entries`
--

CREATE TABLE `entries` (
                           `id` int NOT NULL,
                           `url_string` varchar(255) DEFAULT NULL,
                           `title` varchar(255) DEFAULT NULL,
                           `content` text,
                           `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `entries`
--
ALTER TABLE `entries`
    ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `entries`
--
ALTER TABLE `entries`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `entries`
    ADD KEY `entries_title_index` (`title`);

ALTER TABLE `entries`
    ADD FULLTEXT KEY `entries_content_index` (`content`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
