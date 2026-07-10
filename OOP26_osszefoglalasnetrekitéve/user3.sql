-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2026. Júl 10. 19:16
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `gulyas_mate`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user3`
--

CREATE TABLE `user3` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `user3`
--

INSERT INTO `user3` (`id`, `name`, `email`, `password`) VALUES
(319, 'Gulyás Máté', 'mate.gulyjas@gmail.com', '11'),
(321, 'ss', 'mate.gulyjas@gmail.coffffn', '2222222222222'),
(322, '11', '1@1.hu', '11'),
(323, '22', '2@2.hu', '$2y$10$dm/pnhmMOV4CNNhYoA3jM.v.m1uIfqjhhmlfRMqVFiexJztHQ753i'),
(324, 'Máté Gulyás', 'mate.gulyjas@gmail.comm', '$2y$10$Rk7MgYqHYly/djioGTT14O6WCKSIcB6xNE8h.Zw7W2Z2npMli6Nmq'),
(325, 'Máté Gulyásd', 'mate.gulyjas@gmail.comn', '$2y$10$6v/V02itJfHd2J8jKWF0eO547RJ6y3FGPqddIJR3vGd/mmTxvMY6q'),
(326, 'admin', 'admin@admin.hu', '$2y$10$tTgwYw2jImup2KazGVfdx.aRS.hE0ruf1.Y9k/9MyAqnaZAh1HJZq');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `user3`
--
ALTER TABLE `user3`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `user3`
--
ALTER TABLE `user3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
