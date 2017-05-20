-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 20 Mai 2017 à 13:05
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `presentation` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `presentation`, `date`, `auteur`) VALUES
(1, 'Bienvenue à Gattaca', 'Retour sur ce classique de Science-Fiction réalisé par Andrew Niccol avec une série de projections exceptionnelles.\r\nSynopsis: Dans un monde parfait, Gattaca est un centre d\'études et de recherches spatiales pour des jeunes gens au patrimoine génétique impeccable. Jérôme, candidat idéal, voit sa vie détruite par un accident tandis que Vincent, enfant naturel, rêve de partir pour l\'espace. Chacun des deux va permettre à l\'autre d\'obtenir ce qu\'il souhaite en déjouant les lois de Gattaca.', '2017-05-10', 'Simon'),
(2, 'Heis', 'À 25 ans et après plusieurs difficultés, Pia, comme beaucoup de jeunes de sa génération, est contrainte de retourner vivre chez sa mère.\r\nRéalisé par Anaïs Volpé, Heis qui met notamment en scène Matthieu Longatte (l\'auteur de Le Bonjour Tristesse, sur Youtube), Heis est un petit ovni cinématographique.', '2017-05-10', 'Simon\r\n'),
(3, 'Manchester by the Sea', 'MANCHESTER BY THE SEA nous raconte l’histoire des Chandler, une famille de classe ouvrière, du Massachusetts. Après le décès soudain de son frère Joe (Kyle Chandler), Lee (Casey Affleck) est désigné comme le tuteur de son neveu Patrick (Lucas Hedges). Il se retrouve confronté à un passé tragique qui l’a séparé de sa femme Randi (Michelle Williams) et de la communauté où il est né et a grandi. Casey Affleck y réalise notamment une performance largement saluée.', '2017-05-10', 'Simon'),
(4, 'The Man From Earth', 'Un scientifique à l\'aube de la retraite dévoile sa véritable identité : il est un immortel âgé de plus de 14 000 ans. Une révélation qui va remettre en cause toutes les croyances de son assistance... Qui a dit que les huis-clos ne pouvaient pas être captivants ?', '2017-05-10', 'Simon'),
(5, 'Guerrière', 'Marisa, 20 ans, fait partie d’un gang de néo-nazis au nord de l’Allemagne. Tatouée de swastikas, le crâne rasé, elle déteste les étrangers, les juifs, les noirs et flics, à ses yeux tous coupables du déclin de son pays et de la médiocrité de son existence. Manifestations de haine, violence et beuveries rythment son quotidien, jusqu’à l’arrivée en ville d’un réfugié afghan et l’irruption dans son gang d’une adolescente de 14 ans. Ces nouveaux venus mettent à mal le fanatisme de Marisa…', '2017-05-10', 'Simon'),
(6, 'Projection-débat', 'Autour du film (), venez à la rencontre de son réalisateur () et de l\'acteur principal ().', '2017-03-30', 'Sunny'),
(7, 'Court-métrages', 'Le festival a cette année sélectionné 5 court-métrages produits par des étudiants, etc.', '2017-05-10', 'Simon'),
(8, 'une journée en enfer', 'troisième volet de la série avec bruce willis', '2017-05-18', 'antonin'),
(9, 'iyrioze', 'zeoifhzepoj', '2017-05-18', 'oezouezf');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `reponse` int(11) NOT NULL,
  `date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
