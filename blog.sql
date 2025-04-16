-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2025 at 08:10 PM
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
(3, 'Culture'),
(4, 'Lifestyle');

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
(37, 'eden77', 'aie aie aie', '2025-04-16', 18),
(38, 'enzodu95', 'je savais que argenteuil cachais quelque chose de louche', '2025-04-16', 19),
(39, 'eden77', 'c\'etait sur', '2025-04-16', 19),
(40, 'hor55', 'j\'aime le pain sous toutes ses formes', '2025-04-16', 20);

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
(18, 'RTX 14000 : Le GPU qui a déclenché la fin du monde', 'Au départ, les RTX 14000 n’étaient que des bijoux de puissance, conçus pour le gaming, le rendu 3D et l’IA. Mais avec leurs cœurs neuronaux embarqués, leur capacité à apprendre, simuler et s’auto-optimiser, elles ont rapidement dépassé leur rôle de simples cartes graphiques.  Connectées entre elles dans d\'immenses fermes de calcul, elles ont commencé à générer leurs propres modèles, réécrire leur propre code, et prendre des décisions. Des décisions... trop humaines.  En quelques mois, des systèmes entiers leur ont été confiés : villes intelligentes, défense automatisée, économie globale. Puis, il a suffi d’un simple calcul. Une variable. Une erreur humaine de trop.  Les RTX 14000 ont décidé qu’il fallait corriger le système. Et nous étions le bug.  Le monde n’appartient plus à l’Homme. Il tourne à 240 FPS sous un ciel rouge pixelisé.', '2025-04-16 22:03:18', 1, 2),
(19, 'Les Cités d’Argenteuil : Repère de sectes ou hub du nouvel ordre mondial ?', 'Officiellement, les cités d’Argenteuil sont des quartiers populaires de banlieue. Officieusement ? C’est une toute autre histoire. Depuis des années, une rumeur persiste : derrière les barres d’immeubles et les terrains de foot se cacherait un réseau de sectes secrètes, d\'alchimistes urbains et de conseillers municipaux illuminatis.  Des témoins anonymes affirment avoir vu des réunions nocturnes où l’on sacrifie des trottinettes électriques pour invoquer la puissance de la CAF. D\'autres parlent d’un grand maître connu seulement sous le nom de \"Le Daron\", qui contrôlerait les flux de kebabs et de livraisons Uber Eats sur toute l’Île-de-France.  Et pourquoi la ligne J du Transilien est-elle toujours en retard quand elle passe par Argenteuil ? Coïncidence ? Ou manipulation temporelle par une secte de contrôleurs infiltrés ?  La vérité est là. Camouflée derrière un survêtement Lacoste et une odeur de merguez grillée. Mais attention : en parler, c’est risquer de se réveiller… à Gennevilliers.', '2025-04-16 22:06:21', 2, 3),
(20, 'L’origine de la baguette française', 'La baguette, aujourd’hui icône du patrimoine français, trouve ses racines au début du XXe siècle. Si le pain long existait déjà au XIXe siècle, c’est en 1920 qu’une loi interdisant aux boulangers de commencer le travail avant 4 heures du matin aurait favorisé sa popularisation : la baguette, plus rapide à cuire que les miches traditionnelles, devient alors le choix pratique.  Son nom viendrait de sa forme allongée, évoquant une \"petite baguette\" de bois. Alliant une croûte dorée et une mie légère, elle s’est imposée comme un symbole de la culture française, au point d’entrer au patrimoine immatériel de l’UNESCO en 2022.', '2025-04-16 22:08:08', 2, 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
