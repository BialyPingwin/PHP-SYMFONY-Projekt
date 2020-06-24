-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Cze 2020, 19:27
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `db_blog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20200623144615', '2020-06-24 18:43:34', 134);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `post`
--

INSERT INTO `post` (`id`, `author`, `title`, `text`, `date`) VALUES
(1, 'Marcin Kurach', 'Wół na stół', 'Restauracja gdzie zjemy najlepsze burgery w stolicy. \r\nDo wyboru jest sporo kompozycji oraz dwa rozmiary burgera:\r\n-mały, który jest zawsze wysmażony na well-done\r\n-duży, który można wybrać stopień wysmażenia (mój ulubiony na medium)\r\nPolecam burgera BBQ z bekonem, serem oraz krążkami cebulowymi.', '2020-06-24 18:53:37'),
(2, 'Marcin Kurach', 'Orzo Plac Konstytucji', 'Restauracja z kuchnią europejską: pasty,pizze,burgery,owoce morza.\r\nMenu jest też przystosowane dla osób vege więc każdy znajdzie coś dla siebie\r\nNajbardziej polecam pizze prosciutto.', '2020-06-24 19:15:29'),
(3, 'Marcin Kurach', 'Pij herbatę', 'Miejscówka w centrum Warszawy (na ul.Chmielnej).\r\nWypijesz tu najlepsze bubble tea w stolicy : 4 rodzaje herbaty, mnóstwo smaków oraz dodatków.\r\nPolecam herbatę czarną winogronową z tapioką i kulkami jagodowymi.', '2020-06-24 19:17:41'),
(4, 'Marcin Kurach', 'Domowa Quesadilla', 'Składniki: pierś z kurczaka, pomidory suszone w oleju, ser gouda, szczypiorek, kukurydza, przyprawy takie jakie się lubi), tortilla pszenna\r\nPrzygotowanie:\r\n-Kurczaka pokroić w kostkę, zamarynować w oleju z suszonych pomidorów oraz przyprawach i odstawić na 2 godziny do lodówki.\r\n-Usmażyć mięso na patelni aby się zarumieniło.\r\n-Pomidory i szczypiorek pokroić na drobno, odsączyć kukurydzę, zetrzeć ser na małych \"oczkach\".\r\n-Ułożyć na patelni tortille, kurczaka, ser, warzywa i przykryć drugą tortillą.\r\n-Podgrzewać z dwóch stron aby ser się rozpuścił.\r\n-Pokroić na trójkąty jak pizze i smacznego!', '2020-06-24 19:25:56');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5F9E962A4B89032C` (`post_id`);

--
-- Indeksy dla tabeli `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indeksy dla tabeli `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A4B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
