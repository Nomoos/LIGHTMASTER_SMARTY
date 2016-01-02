-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vygenerováno: Pát 18. pro 2015, 15:39
-- Verze serveru: 5.6.14
-- Verze PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `lamps`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nazev` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `page` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `nadpis` varchar(250) COLLATE utf8_czech_ci NOT NULL,
  `popis` varchar(250) COLLATE utf8_czech_ci NOT NULL,
  `druh` enum('main','sub') COLLATE utf8_czech_ci NOT NULL,
  `modul_id` tinyint(3) unsigned DEFAULT NULL,
  `zobraz` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `poradi` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `modul_id` (`modul_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=12 ;

--
-- Vypisuji data pro tabulku `modul`
--

INSERT INTO `modul` (`id`, `nazev`, `page`, `url`, `icon`, `nadpis`, `popis`, `druh`, `modul_id`, `zobraz`, `poradi`) VALUES
(1, 'Uživatelé', 'uzivatele', '', 'icon-group', '', '', 'main', NULL, 2, 2),
(2, 'Přidat', 'novy', 'uzivatele/novy.html', 'icon-plus', 'Přidání nového uživatele', '', 'sub', 1, 2, 1),
(3, 'Seznam', 'seznam', 'uzivatele/seznam.html', 'icon-list', 'Seznam aktuálních uživatelů', '', 'sub', 1, 2, 0),
(4, 'Edit', 'edit', 'uzivatele/edit.html', '', 'Editovat uživatele', '', 'sub', 1, 0, 2),
(5, 'Nastavení', 'nastaveni', '', 'icon-cogs', '', '', 'main', NULL, 2, 1),
(6, 'Seznam (modul)', 'seznamModul', 'nastaveni/seznamModul.html', 'icon-list', 'Seznam modulů', '', 'sub', 5, 2, 3),
(7, 'Přidat (modul)', 'novyModul', 'nastaveni/novyModul.html', 'icon-plus', 'Nový modul', '', 'sub', 5, 2, 4),
(8, 'Edit (modul)', 'editModul', 'nastaveni/editModul.html', '', 'Editovat modul', '', 'sub', 5, 0, 6),
(9, 'Oprávnění (modul)', 'opravneniModul', 'nastaveni/opravneniModul.html', 'icon-unlock-alt', 'Oprávnění pro moduly', '', 'sub', 5, 2, 5),
(10, 'Nastavení', 'nastaveni', 'profil/nastaveni.html', '', 'Uživatelský profil', '', 'sub', 11, 0, 0),
(11, 'Profil', 'profil', '', '', '', '', 'main', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `urlrequest`
--

CREATE TABLE IF NOT EXISTS `urlrequest` (
  `session` char(40) COLLATE utf8_czech_ci NOT NULL,
  `token` char(40) COLLATE utf8_czech_ci NOT NULL,
  `url` varchar(250) COLLATE utf8_czech_ci NOT NULL,
  `vytvoreno` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`session`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `urlrequest`
--

INSERT INTO `urlrequest` (`session`, `token`, `url`, `vytvoreno`) VALUES
('8itf2t4g421khb9pr1218gq080', 'a9876c186d33e79ef1541b3639fbd3c2922b892e', 'http://www.lamps.lan/uzivatele/novy.html', '2015-12-18 14:30:09'),
('8lstj32irsfrrodl5cqvdob9c3', 'd35baf6e5914a8a4ae5fc61777abad71b7544484', 'http://www.lamps.lan/?odhlasit=1', '2015-12-18 14:33:42'),
('c8skgb4qvvvss6et47g159auf7', '04fc3b6c0fe5e11c1e6819d7b32f20e2960ffd9e', 'http://www.lamps.lan/nastaveni/seznamModul.html', '2015-12-18 14:33:47'),
('htqsq44akbil3468tkhqkkld16', 'bf96f7f52b2e3a3fad2b8eed639dbae586e91a54', 'http://www.lamps.lan/?odhlasit=1', '2015-12-18 14:31:25'),
('jhv8sl11cjg064tj55p0p8lfo7', '37b6a233f528fdab57015c5650cae7df7fb95a03', 'http://www.lamps.lan/?odhlasit=1', '2015-12-18 14:33:24'),
('um8r6o3qfo97kvhai4sahimba4', '253b5bff59e41d37c2a636c337fab2325524fe6c', 'http://www.lamps.lan/?odhlasit=1', '2015-12-18 14:32:13');

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatel`
--

CREATE TABLE IF NOT EXISTS `uzivatel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(40) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `jmeno` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `nick` varchar(40) COLLATE utf8_czech_ci NOT NULL,
  `blokace` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `duvodBlokace` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `smazano` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(40) COLLATE utf8_czech_ci NOT NULL,
  `session` varchar(40) COLLATE utf8_czech_ci NOT NULL,
  `posledniPrihlaseni` datetime DEFAULT NULL,
  `pokusuPrihlasit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pocetPrihlaseni` int(10) unsigned NOT NULL DEFAULT '0',
  `uzivatelOpravneni_id` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  KEY `uzivatelOpravneni_id` (`uzivatelOpravneni_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=8 ;

--
-- Vypisuji data pro tabulku `uzivatel`
--

INSERT INTO `uzivatel` (`id`, `login`, `email`, `password`, `jmeno`, `prijmeni`, `nick`, `blokace`, `duvodBlokace`, `smazano`, `ip`, `session`, `posledniPrihlaseni`, `pokusuPrihlasit`, `pocetPrihlaseni`, `uzivatelOpravneni_id`) VALUES
(1, 'mates', '', '307b13e57cd88e6c19073f209b6888ccf5d2ab27', 'Martin', 'Mlýnek', 'Martin Mlýnek', 0, '', 0, '127.0.0.1', 'c8skgb4qvvvss6et47g159auf7', '2015-12-18 15:33:47', 0, 2, 1),
(2, 'kobza', '', '077da85445c92a40ea6caba763c2ad57448c27a9', 'Jaroslav', 'Kobza', 'Jaroslav Kobza', 0, '', 0, '127.0.0.1', '', '2015-12-18 15:31:29', 0, 1, 1),
(7, 'hittl', '', '456abd655e463bbfc66f147c721aa0ade8498b57', 'Roman', 'Hittl', 'Roman Hittl', 0, '', 0, '127.0.0.1', '', '2015-12-18 15:33:31', 0, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatelopravneni`
--

CREATE TABLE IF NOT EXISTS `uzivatelopravneni` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nazev` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `admin` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `vychoziModul` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vychoziModul` (`vychoziModul`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=4 ;

--
-- Vypisuji data pro tabulku `uzivatelopravneni`
--

INSERT INTO `uzivatelopravneni` (`id`, `nazev`, `admin`, `vychoziModul`) VALUES
(1, 'Super Admin', 2, 6),
(2, 'Admin', 0, 10),
(3, 'Uživatel', 0, 10);

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatelopravneni_modul`
--

CREATE TABLE IF NOT EXISTS `uzivatelopravneni_modul` (
  `uzivatelOpravneni_id` tinyint(3) unsigned NOT NULL,
  `modul_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`uzivatelOpravneni_id`,`modul_id`),
  KEY `modul_id` (`modul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatelopravneni_modul`
--

INSERT INTO `uzivatelopravneni_modul` (`uzivatelOpravneni_id`, `modul_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 10),
(3, 10),
(2, 11),
(3, 11);

-- --------------------------------------------------------

--
-- Zástupná struktura pro pohled `uzivatel_vw`
--
CREATE TABLE IF NOT EXISTS `uzivatel_vw` (
`id` int(10) unsigned
,`login` varchar(40)
,`email` varchar(150)
,`password` varchar(50)
,`jmeno` varchar(50)
,`prijmeni` varchar(50)
,`nick` varchar(40)
,`blokace` tinyint(3) unsigned
,`duvodBlokace` varchar(50)
,`smazano` tinyint(3) unsigned
,`ip` varchar(40)
,`session` varchar(40)
,`posledniPrihlaseni` datetime
,`pokusuPrihlasit` tinyint(3) unsigned
,`pocetPrihlaseni` int(10) unsigned
,`uzivatelOpravneni_id` tinyint(3) unsigned
,`uzivatelOpravneni_nazev` varchar(20)
,`admin` tinyint(3) unsigned
);
-- --------------------------------------------------------

--
-- Struktura pro pohled `uzivatel_vw`
--
DROP TABLE IF EXISTS `uzivatel_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `uzivatel_vw` AS select `u`.`id` AS `id`,`u`.`login` AS `login`,`u`.`email` AS `email`,`u`.`password` AS `password`,`u`.`jmeno` AS `jmeno`,`u`.`prijmeni` AS `prijmeni`,`u`.`nick` AS `nick`,`u`.`blokace` AS `blokace`,`u`.`duvodBlokace` AS `duvodBlokace`,`u`.`smazano` AS `smazano`,`u`.`ip` AS `ip`,`u`.`session` AS `session`,`u`.`posledniPrihlaseni` AS `posledniPrihlaseni`,`u`.`pokusuPrihlasit` AS `pokusuPrihlasit`,`u`.`pocetPrihlaseni` AS `pocetPrihlaseni`,`u`.`uzivatelOpravneni_id` AS `uzivatelOpravneni_id`,`uo`.`nazev` AS `uzivatelOpravneni_nazev`,`uo`.`admin` AS `admin` from (`uzivatel` `u` left join `uzivatelopravneni` `uo` on((`uo`.`id` = `u`.`uzivatelOpravneni_id`)));

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `uzivatel`
--
ALTER TABLE `uzivatel`
  ADD CONSTRAINT `uzivatel_ibfk_2` FOREIGN KEY (`uzivatelOpravneni_id`) REFERENCES `uzivatelopravneni` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Omezení pro tabulku `uzivatelopravneni`
--
ALTER TABLE `uzivatelopravneni`
  ADD CONSTRAINT `uzivatelOpravneni_ibfk_1` FOREIGN KEY (`vychoziModul`) REFERENCES `modul` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Omezení pro tabulku `uzivatelopravneni_modul`
--
ALTER TABLE `uzivatelopravneni_modul`
  ADD CONSTRAINT `uzivatelOpravneni_modul_ibfk_2` FOREIGN KEY (`uzivatelOpravneni_id`) REFERENCES `uzivatelopravneni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uzivatelOpravneni_modul_ibfk_3` FOREIGN KEY (`modul_id`) REFERENCES `modul` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
