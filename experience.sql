-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mai 2020 à 20:56
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moncv`
--

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(3) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `titre`, `date`, `description`) VALUES
(25, 'MEMBRE DU CVL DE MON LYCEE', 'ann&eacute;e 2017-2019', 'membre du conseil de vie lyc&eacute;en de mon lyc&eacute;e 3 ann&eacute;es de suite, dont une en &eacute;tant vice-pr&eacute;sident de celui-ci durant l&#039;ann&eacute;e scolaire 2018-2019. J&#039;ai pu participer a la mise en place du bal de fin d&#039;ann&eacute;e et a un plein d&#039;autre &eacute;v&eacute;nement de se style'),
(26, 'challenge 48h ynov', 'fevrier 2020', 'bien que celui-ci fut un fiasco le plus total , j&#039;ai eu la chance de participer a cette &eacute;v&eacute;nement qui m&#039;appris a travaill&eacute; en groupe.'),
(27, 'piscine ecole 42', 'juillet 2019', 'j&#039;ai eu l&#039;honneur de pouvoir participer a la piscine de l&rsquo;&eacute;cole 42, ou j&#039;ai pu apprendre beaucoup de base de la programmation. bien que je n&#039;ai pas &eacute;t&eacute; re&ccedil;u suite a ce concours, il fut d&#039;une grande utilit&eacute; pour mon exp&eacute;rience personnelle.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
