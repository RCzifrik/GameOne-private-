-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 nov 2022 om 11:45
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `game`
--

INSERT INTO `game` (`id`, `name`, `description`, `image`) VALUES
(1, 'Elden Ring', 'Torture', 'img/ELDEN_RING.jpg'),
(2, 'Need for Speed', 'Cancer.', 'img/NFS.jpg'),
(3, 'Dying Light', 'Zombie go die', 'img/DYING_LIGHT.jpg'),
(4, 'Mario Kart', 'bad kart racer', 'img/MARIO_KART.jpg'),
(5, 'Crash Team Racing', 'Good kart racer.', 'img/CTR.jpg'),
(6, 'Super Mario Bros', 'old platformer', 'img/SUPER_MARIO_BROS.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gamelist`
--

CREATE TABLE `gamelist` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gamelist`
--

INSERT INTO `gamelist` (`id`, `genre_id`, `game_id`) VALUES
(1, 4, 1),
(2, 3, 1),
(3, 1, 6),
(4, 3, 3),
(5, 3, 2),
(6, 2, 2),
(7, 2, 5),
(8, 2, 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `genre`
--

INSERT INTO `genre` (`id`, `name`, `image`) VALUES
(1, 'Platformer', 'img/GENRE_PLATFORMER.jpg'),
(2, 'Racing', 'img/GENRE_RACING.jpg'),
(3, 'Open world', 'img/GENRE_OPEN_WORLD.jpg'),
(4, 'Fighting', 'img/GENRE_FIGHTING.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `score` int(2) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `game_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `score`, `title`, `description`, `game_id`, `user_id`) VALUES
(1, 10, 'BESTE GAME EVERR8GERGER', 'Zo\'n goed spel, mijn playstation pleegde zelfdood', 5, 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rights`
--

CREATE TABLE `rights` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `rights`
--

INSERT INTO `rights` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Guest');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `rights_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `password`, `profile_picture`, `rights_id`) VALUES
(3, 'Richard', 'Czifrik', 'Mashy Potato', '$2y$10$kBe/QYpl3sU62ejLcdOmN.txRZtwwIywjRpWttQE1sPZUfYs1C7F.', 'img/MASHY_POTATO.jpg', 1),
(4, 'Stijn', 'Veldhuis', 'Stijntje2010', 'wachtwoord123', 'img/STIJNTJE123.jpg', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gamelist`
--
ALTER TABLE `gamelist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gamelist_game_fk` (`game_id`),
  ADD KEY `gamelist_genre_fk` (`genre_id`);

--
-- Indexen voor tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_game_fk` (`game_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rights_id` (`rights_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `gamelist`
--
ALTER TABLE `gamelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `rights`
--
ALTER TABLE `rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `gamelist`
--
ALTER TABLE `gamelist`
  ADD CONSTRAINT `gamelist_game_fk` FOREIGN KEY (`game_id`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `gamelist_genre_fk` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_game_fk` FOREIGN KEY (`game_id`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Beperkingen voor tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rights_id`) REFERENCES `rights` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
