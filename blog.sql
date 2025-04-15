-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2025 at 10:16 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `nom`, `prenom`) VALUES
(1, 'adminEden', 'admin', 'Vandewatyne', 'Eden'),
(2, 'adminEnzo', 'admin', 'Soler', 'Enzo');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Voyage'),
(2, 'Technologie'),
(3, 'Culture');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `pseudo` text NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` date NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `pseudo`, `contenu`, `date_creation`, `post_id`) VALUES
(29, 'Seykamal medetov', '0110001', '2025-04-15', 11),
(30, 'enzodu95', 'super article !', '2025-04-15', 11),
(31, 'rayane93', 'J\'arrete quand je veux mais ecoute ma prod', '2025-04-15', 12),
(32, 'Seykamal medetov', 'Ce n\'est pas très correct d\'inventer des histoires sur son professeur', '2025-04-15', 11);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `auteur_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `titre`, `contenu`, `date_creation`, `auteur_id`, `categorie_id`) VALUES
(11, 'Seytkamal medetov : un robot de l\'URSS ?', 'Seytkamal Medetov serait, selon cette théorie, un robot créé secrètement par l\'URSS durant la guerre froide dans le but de surveiller et analyser le monde sous un prisme technologique et utilitaire. Conçu avec une intelligence artificielle rudimentaire mais efficace, Medetov percevrait et interagirait avec son environnement en binaire, ne discernant que des valeurs de \"1\" et de \"0\", comme des données essentielles dans un système informatique. Ce mode de perception lui permettrait de comprendre le monde non pas dans sa complexité humaine, mais dans une logique froide et mécanique, réduisant les interactions, les émotions et les situations à une simple dichotomie de succès ou d\'échec, d\'utile ou d\'inutile. Ainsi, Seytkamal Medetov serait un espion parfait, mais dénué de la capacité à appréhender la nuance de la condition humaine.', '2025-04-16 00:02:24', 2, 2),
(12, 'Le crack c\'est mal', 'Rayane, jeune prometteur de 18 ans, avait tout pour réussir : un diplôme, des rêves et une vague idée de ce qu’était la vie adulte. Mais un jour, il a croisé le crack. Et là, tout a changé. Au lieu de planifier son avenir, il a appris à planifier ses prochaines doses.  Adieu les voyages exotiques et les projets de carrière, bienvenue dans l\'univers parallèle des ruelles sombres et des décisions douteuses. Ses parents ont vite compris que \"Rayane, futur médecin\" n’était plus qu’un lointain souvenir, remplacé par \"Rayane, expert en fumerie\".  Morale de l’histoire : la vraie détente, c\'est Netflix, pas le crack.', '2025-04-16 00:10:10', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
