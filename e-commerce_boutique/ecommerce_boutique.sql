-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 24 jan. 2021 à 01:36
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerce_boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(100) NOT NULL,
  `titre_cat` text NOT NULL,
  `desc_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `titre_cat`, `desc_cat`) VALUES
(200, 'Vetements', 'Habillez-vous pour impressionner et tirer le meilleur parti de chaque jour.\r\nvous pouvez trouver ce que vous cherchez sur E-commerce Boutique.'),
(300, 'Technologies', 'Des Smartphones et ordinateurs portables aux appareils photo et consoles de jeux video, vous pouvez trouver les appareils electroniques les plus en vogue sur E-commerce Boutique.'),
(400, 'Joues', 'a la recherche de quelque chose que les enfants peuvent apprecier et de jouer avec vos enfants, consultez la section Jouets'),
(500, 'Immobilies', 'Vous ne trouvez pas ce que vous voulez pour decorer votre maison? Parcourez la boutique en ligne pour tout article que vous pouvez imaginer.');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `panier_id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `produit_id` int(11) DEFAULT NULL,
  `qtn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `prd`
--

CREATE TABLE `prd` (
  `prd_id` int(100) NOT NULL,
  `prd_cat` int(11) DEFAULT NULL,
  `prd_libelle` varchar(25) NOT NULL,
  `prd_prix` int(100) NOT NULL,
  `prd_qtn` int(11) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prd`
--

INSERT INTO `prd` (`prd_id`, `prd_cat`, `prd_libelle`, `prd_prix`, `prd_qtn`, `prd_desc`, `prd_image`) VALUES
(3, 200, 'jupe', 150, 12, 'jupe', 'img/Vetements/jupe.jpg'),
(4, 200, 'pull-over', 180, 10, 'pull-over', 'img/Vetements/pull-over.jpg'),
(5, 200, 'teeshirt', 50, 8, 'teeshirt', 'img/Vetements/teeshirt.jpg'),
(6, 200, 'robe', 300, 4, 'teeshirt', 'img/Vetements/robe.jpg'),
(7, 300, 'HP', 2000, 15, 'Elitebook', 'img/Technologies/pc1.jpg'),
(8, 300, 'Lenovo', 5000, 5, 'i7 generation', 'img/Technologies/pc2.jpg'),
(9, 300, 'camera', 200, 9, 'sony', 'img/Technologies/camera.jpg'),
(10, 300, 'ipad', 2000, 2, 'apple', 'img/Technologies/ipad.jpg'),
(11, 300, 'ipad', 3000, 1, 'dlink', 'img/Technologies/ipad2.jpg'),
(12, 300, 'Tele', 8000, 8, 'samsung', 'img/Technologies/samsung.jpg'),
(13, 300, 'smartphone', 9999, 8, 'samsung_galaxy', 'img/Technologies/samsung_galaxy_note3.jpg'),
(14, 300, 'Telephone', 8999, 8, 'apple', 'img/Technologies/iphone.jpg'),
(15, 400, 'ballon', 200, 2, 'ballon', 'img/Joues/ballon.jpg'),
(16, 400, 'pistole', 35, 1, 'pistole', 'img/Joues/pistole.jpg'),
(17, 400, 'canards', 90, 3, 'canards', 'img/Joues/canards.jpg'),
(19, 400, 'voiture', 2000, 2, 'voiture', 'img/Joues/voiture.jpg'),
(20, 500, 'biblio', 150, 12, 'bibliotheque de livres', 'img/Immobilies/biblio.jpg'),
(21, 500, 'lit', 200, 32, 'lit de deux personnes', 'img/Immobilies/lit.jpg'),
(22, 500, 'office', 2400, 12, 'mixer', 'img/Immobilies/mixer.jpg'),
(23, 500, 'table', 2000, 12, 'table', 'img/Immobilies/table.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(25) NOT NULL,
  `prenom_utilisateur` varchar(25) NOT NULL,
  `email_utilisateur` varchar(100) NOT NULL,
  `password_utilisateur` varchar(25) NOT NULL,
  `mobile_utilisateur` varchar(25) NOT NULL,
  `addresse__utilisateur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`panier_id`),
  ADD KEY `panier_user` (`utilisateur_id`),
  ADD KEY `panier_prod` (`produit_id`);

--
-- Index pour la table `prd`
--
ALTER TABLE `prd`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `fk_prd_cat` (`prd_cat`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `panier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `prd`
--
ALTER TABLE `prd`
  MODIFY `prd_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_prod` FOREIGN KEY (`produit_id`) REFERENCES `prd` (`prd_id`),
  ADD CONSTRAINT `panier_user` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `prd`
--
ALTER TABLE `prd`
  ADD CONSTRAINT `fk_prd_cat` FOREIGN KEY (`prd_cat`) REFERENCES `categories` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
