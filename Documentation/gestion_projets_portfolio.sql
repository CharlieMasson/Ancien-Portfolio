-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 06 sep. 2022 à 14:38
-- Version du serveur : 5.7.11
-- Version de PHP : 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_projets_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `email` text NOT NULL,
  `motDePasse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_user`, `email`, `motDePasse`) VALUES
(1, 'charlie.mass.cm@gmail.com', 'ea821a32d4becdb5fc8f09979b6131a939e7c2c7'),
(3, 'admin', 'd0ed7acc367e71ed92aad431a140409da81f9d2f');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projet` int(11) NOT NULL,
  `projetTitre` text NOT NULL,
  `projetVignette` text NOT NULL,
  `projetDescription` text NOT NULL,
  `projetBut` text NOT NULL,
  `projetResultat` text NOT NULL,
  `projetTechnos` text NOT NULL,
  `projetGalerieImg1` text NOT NULL,
  `projetGalerieDesc1` text NOT NULL,
  `projetGalerieImg2` text NOT NULL,
  `projetGalerieDesc2` text NOT NULL,
  `projetGalerieImg3` text NOT NULL,
  `projetGalerieDesc3` text NOT NULL,
  `projetTelechargement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id_projet`, `projetTitre`, `projetVignette`, `projetDescription`, `projetBut`, `projetResultat`, `projetTechnos`, `projetGalerieImg1`, `projetGalerieDesc1`, `projetGalerieImg2`, `projetGalerieDesc2`, `projetGalerieImg3`, `projetGalerieDesc3`, `projetTelechargement`) VALUES
(1, 'Site Travel Agency (html/css)', 'projetSiteUdemy1.png', 'Un simple site d\'agence de voyage fait avec du HTML et du CSS créé via le cours en ligne \"Apprendre HTML et CSS et créer un site Web\" de John Taieb sur Udemy. ', 'Créer un simple site d\'agence de voyage attrayant. ', 'Projet mené à bien, connaissances en HTML et CSS acquises. ', 'HTML, CSS. ', 'imgSiteUdemy1-1.png', 'Haut du site', 'imgSiteUdemy1-2.png', 'Contactez-Nous', 'imgSiteUdemy1-3.png', 'Une partie du HTML du projet', 'site-udemy.zip'),
(6, 'CV factice en ligne (html/css/bootstrap)', 'projetSiteUdemy2.png', 'Un site faisant guise de CV utilisant du HTML, CSS et Bootstrap créé via le cours en ligne \"Apprendre Bootstrap et créer un CV en ligne responsive\" de John Taieb sur Udemy.', 'Créer un CV responsive utilisant la librairie Bootstrap.', 'Projet réussi ce qui m\'a permis d\'apprendre comment utiliser Bootstrap.', 'HTML, CSS, Boostrap, un peu de Javascript.', 'imgSiteUdemy2-1.png', 'Haut du Site', 'imgSiteUdemy2-2.png', 'Partie Expérience Professionnelle (factice)', 'imgSiteUdemy2-3.png', 'Une partie du HTML du projet', 'site-udemy2.zip'),
(7, 'Jeu Snake (Javascript)', 'projetSnake.png', 'Un projet visant à recréer le célèbre jeu &quot;Snake&quot; via le cours en ligne &quot;Apprendre Javascript et créer un jeu en ligne&quot; de John Taieb sur Udemy.', 'Créer un jeu en ligne Snake ressemblant en tout point au jeu d\'origine: on contrôle un serpent qui mange des pommes pour grandir, le jeu s\'arrête si le serpent touche un mur ou sa queue. Le jeu comptabilise aussi les points du joueur.', 'Projet réussi ce qui m\'a permis d\'acquérir des bases en Javascript.', 'Javascript.', 'imgSnake1.png', 'Game Over', 'imgSnake2.png', 'Score: 15', 'imgSnake3.png', 'Une partie du code du projet', 'snake.zip');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
