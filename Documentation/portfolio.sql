-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2022 at 07:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `email` text NOT NULL,
  `motDePasse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `email`, `motDePasse`) VALUES
(1, 'admin@admin.fr', '0f501748a97a8a40c2a3969ec4b43c463039c47b'),
(2, 'a@bc.fr', 'abc'),
(3, 'admin', '3844af4366714545015e3eaf1ca4445021fb0997'),
(4, 'cm@gmail.com', 'bd9921bac8c21170a4aa4b1ac23158ff426c0a2d');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `contactNom` text NOT NULL,
  `contactPrenom` text NOT NULL,
  `contactAdresse` text NOT NULL,
  `contactMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `contactNom`, `contactPrenom`, `contactAdresse`, `contactMessage`) VALUES
(1, 'test', 'test', 'test@test.com', 'test'),
(2, 'test', 'test', 'test@test.com', 'test'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `projets`
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
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id_projet`, `projetTitre`, `projetVignette`, `projetDescription`, `projetBut`, `projetResultat`, `projetTechnos`, `projetGalerieImg1`, `projetGalerieDesc1`, `projetGalerieImg2`, `projetGalerieDesc2`, `projetGalerieImg3`, `projetGalerieDesc3`, `projetTelechargement`) VALUES
(1, 'Site Travel Agency', 'projetSiteUdemy1.png', '?Un simple site d&#039;agence de voyage fait avec du HTML et du CSS créé via le cours en ligne &quot;Apprendre HTML et CSS et créer un site Web&quot; de John Taieb sur Udemy.', 'Créer un simple site d&#039;agence de voyage attrayant.', 'Projet mené à  bien, connaissances en HTML et CSS acquises.', 'HTML, CSS.', 'imgSiteUdemy1-1.png', 'Haut du Site', 'imgSiteUdemy1-2.png', 'Contactez-Nous', 'imgSiteUdemy1-3.png', 'Haut du Site', 'site-udemy.zip'),
(2, 'CV en Ligne', 'projetSiteUdemy2.png', 'Un site faisant guise de CV utilisant du HTML, CSS et Bootstrap créé via le cours en ligne &quot;Apprendre Bootstrap et créer un CV en ligne responsive&quot; de John Taieb sur Udemy.', 'Créer un CV responsive utilisant la librairie Bootstrap.', 'Projet réussi ce qui m\'a permis d\'apprendre comment utiliser Bootstrap.', 'HTML, CSS, Boostrap, un peu de Javascript.', 'imgSiteUdemy2-1.png', 'Haut du Site', 'imgSiteUdemy2-2.png', 'Partie Expérience Professionnelle (factice)', 'imgSiteUdemy2-3.png', 'Une partie du HTML du projet', 'site-udemy2.zip'),
(3, 'Jeu Snake', 'projetSnake.png', 'Un projet visant à  recréer le célèbre jeu &quot;Snake&quot; via le cours en ligne &quot;Apprendre Javascript et créer un jeu en ligne&quot; de John Taieb sur Udemy.', 'Créer un jeu en ligne Snake ressemblant en tout point au jeu d\'origine: on contrôle un serpent qui mange des pommes pour grandir, le jeu s\'arrête si le serpent touche un mur ou sa queue. Le jeu comptabilise aussi les points du joueur.', 'Projet réussi ce qui m\'a permis d\'acquérir des bases en Javascript.', 'Javascript.', 'imgSnake1.png', 'Game Over', 'imgSnake2.png', 'Score: 15', 'imgSnake3.png', 'Une partie du code du projet', 'snake.zip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
