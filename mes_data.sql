-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 09, 2021 at 07:05 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `laboutiquefrancaise_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adress`
--

INSERT INTO `adress` (`id`, `user_id`, `name`, `firstname`, `lastname`, `company`, `address`, `postal`, `city`, `country`, `phone`) VALUES
(1, 11, '35 rue du parc', 'larade', 'jean-philippe', 'sainte croix tattoo', '75 rue de bercy', '75013', 'paris', 'AF', '+93762245123'),
(7, 12, '35 RUE DU PARC', 'larade', 'jean-philippe', NULL, '35 RUE DU PARC', '45', 'PITHIVIERS', 'FR', '0769754123'),
(8, 12, 'deuxieme adresse', 'phil', 'rosebud', NULL, '17 Square Georges Sand', '78', 'Trappes', 'FR', '0642280062'),
(9, 10, '35 RUE DU PARC', 'larade', 'jean-philippe', 'sainte croix tattoo', '75 rue de bercy', '75013', 'paris', 'AF', '+93762245123'),
(10, 16, '35 RUE DU PARC', 'larade', 'jean-philippe', NULL, '75 rue de bercy', '75013', 'pithivies', 'FR', '+93762245123');

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrier`
--

INSERT INTO `carrier` (`id`, `name`, `description`, `price`) VALUES
(1, 'Colissimo', 'Profiter d\'une livraison premium avec un colis chez vous dans les 72 prochaines heures.', 900),
(2, 'Chronopost', 'Profiter d\'une livraison premium avec un colis chez vous dans les 72 prochaines heures.', 1490);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Manteaux'),
(2, 'Bonnets'),
(3, 'T-shirts'),
(4, 'Écharpes'),
(5, 'Accessoires'),
(6, 'Alimentation');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201207210438', '2020-12-07 21:10:42', 73),
('DoctrineMigrations\\Version20201211131707', '2020-12-11 13:18:01', 109),
('DoctrineMigrations\\Version20201214194714', '2020-12-14 19:48:07', 101),
('DoctrineMigrations\\Version20201214201003', '2020-12-14 20:10:30', 87),
('DoctrineMigrations\\Version20201214201916', '2020-12-14 20:23:21', 66),
('DoctrineMigrations\\Version20201215203620', '2020-12-15 20:36:41', 109),
('DoctrineMigrations\\Version20201231113419', '2020-12-31 11:35:28', 112),
('DoctrineMigrations\\Version20201231152932', '2020-12-31 15:30:13', 108),
('DoctrineMigrations\\Version20210105101549', '2021-01-05 10:16:32', 108),
('DoctrineMigrations\\Version20210105170425', '2021-01-05 17:05:13', 84),
('DoctrineMigrations\\Version20210105190724', '2021-01-05 19:07:49', 84);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `title`, `content`, `btn_title`, `btn_url`, `illustration`) VALUES
(1, 'nouvelle collection', 'Découvrez notre collection hiver 2021,creée par nos \r\nartisan et couturiers.', 'Découvrir', '/nos-produits', '2fc9ee1698774d5f9627860691e5ea4817770fc0.jpeg'),
(2, 'chaussures de la collection', 'Etre chic sous les tropiques ce n\'est pas un luxe sur la boutique des antilles.', 'Découvrir', '/nos-produits', '1151af6eca5561577636e84e0cc6af5e4036a996.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_price` double NOT NULL,
  `delivery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `created_at`, `carrier_name`, `carrier_price`, `delivery`, `is_paid`, `reference`, `stripe_session_id`) VALUES
(1, 11, '2020-12-22 09:55:06', 'Colissimo', 9.9, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '', NULL),
(2, 10, '2020-12-22 18:41:03', 'Colissimo', 9.9, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '', NULL),
(3, 10, '2020-12-25 08:40:25', 'Chronopost', 7.5, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '', NULL),
(4, 10, '2020-12-27 15:22:54', 'Chronopost', 7.5, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '', NULL),
(5, 12, '2020-12-31 12:10:12', 'Chronopost', 7.5, 'laradejean-philippe<br/>0769754123<br/>35 RUE DU PARC<br/>45PITHIVIERS<br/>FR', 0, '31122020-5fedbfa41e722', NULL),
(6, 12, '2020-12-31 14:42:44', 'Colissimo', 9.9, 'philrosebud<br/>0642280062<br/>17 Square Georges Sand<br/>78Trappes<br/>FR', 0, '31122020-5fede364d9349', NULL),
(7, 12, '2020-12-31 14:45:28', 'Colissimo', 9.9, 'laradejean-philippe<br/>0769754123<br/>35 RUE DU PARC<br/>45PITHIVIERS<br/>FR', 0, '31122020-5fede4083d2e5', NULL),
(8, 11, '2020-12-31 15:06:50', 'Chronopost', 7.5, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '31122020-5fede90a545c7', NULL),
(9, 11, '2020-12-31 15:09:14', 'Chronopost', 7.5, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '31122020-5fede99aecd3e', NULL),
(10, 11, '2020-12-31 15:13:56', 'Colissimo', 9.9, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '31122020-5fedeab4737d1', NULL),
(11, 10, '2020-12-31 15:33:27', 'Chronopost', 7.5, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '31122020-5fedef474c1e2', NULL),
(12, 10, '2020-12-31 15:46:37', 'Colissimo', 9.9, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '31122020-5fedf25daac84', NULL),
(13, 10, '2021-01-02 18:35:32', 'Chronopost', 7.5, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '02012021-5ff0bcf40f640', 'cs_test_b12rE06ZjhdwkufXRqXqq3N3iKoQfBVip2Q1qRRuJFXUhRuz5brFqjE0tH'),
(14, 10, '2021-01-02 19:21:35', 'Chronopost', 7.5, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 1, '02012021-5ff0c7bf4e400', 'cs_test_b1NhdH82NVAnMVoogffb3Eklz6unvg24RJK4paJRoFmJBrhxfPneyPLA9y'),
(15, 10, '2021-01-02 19:50:21', 'Colissimo', 9.9, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 1, '02012021-5ff0ce7d036bc', 'cs_test_b1J8nqVSziGdpgV9e8CPPsBXnMWUvzsPrtUHMGjb4RxdnDl6mhcn1MMpU5'),
(16, 10, '2021-01-02 20:31:47', 'Colissimo', 900, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '02012021-5ff0d8339c1b2', NULL),
(17, 10, '2021-01-02 20:33:27', 'Colissimo', 900, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '02012021-5ff0d8970dbca', NULL),
(18, 10, '2021-01-02 20:35:05', 'Colissimo', 900, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 1, '02012021-5ff0d8f915816', 'cs_test_b1VIhxOgTkVwZ2XfCvkzinhUEZ3A8VdO9mgcDfjUpcf230wXZMM1z2ma8Y'),
(20, 10, '2021-01-02 20:53:27', 'Chronopost', 1490, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '02012021-5ff0dd47609d5', NULL),
(21, 10, '2021-01-02 21:12:13', 'Colissimo', 900, 'laradejean-philippe<br/>+93762245123<br/>sainte croix tattoo<br/>75 rue de bercy<br/>75013paris<br/>AF', 0, '02012021-5ff0e1adb86b0', 'cs_test_b1D3qXiquBQFFtboQt0bmFvzfnzfpKrL83GvEwKZIIcZWQiwLjfUITcT13'),
(22, 16, '2021-01-04 22:57:11', 'Colissimo', 900, 'laradejean-philippe<br/>+93762245123<br/>75 rue de bercy<br/>75013pithivies<br/>FR', 0, '04012021-5ff39d47399e6', 'cs_test_b1qJYVl3TvJI4m44O9CV7hpzXYzMvBwEQjd6nzUn3urdWH2agIb12mgygw'),
(23, 16, '2021-01-04 23:00:48', 'Chronopost', 1490, 'laradejean-philippe<br/>+93762245123<br/>75 rue de bercy<br/>75013pithivies<br/>FR', 1, '04012021-5ff39e20b7134', 'cs_test_b1QW36PiR9r8UERjSCYUBnWmB8n1gIIdHUBhqY5xTFDC6MMaf2xRHiCFlS'),
(24, 16, '2021-01-04 23:04:08', 'Colissimo', 900, 'laradejean-philippe<br/>+93762245123<br/>75 rue de bercy<br/>75013pithivies<br/>FR', 1, '04012021-5ff39ee8881fd', 'cs_test_b10as87Rbd7jtlDk8iqrAHlUEeveMzKz5T7s59nx0MPAeeaoWkvMd34FRM'),
(25, 16, '2021-01-04 23:07:01', 'Colissimo', 900, 'laradejean-philippe<br/>+93762245123<br/>75 rue de bercy<br/>75013pithivies<br/>FR', 1, '04012021-5ff39f957ef3d', 'cs_test_b1LKqMd9Mv4CFVK9uLYIWfOH768AidiEu74ljitS0nnU5GI5hTj10ZIblI');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `my_order_id` int(11) NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `my_order_id`, `product`, `quantity`, `price`, `total`) VALUES
(1, 1, 'tee-shirt madras', 1, 800, '800'),
(2, 1, 'porte monnaie madras bleu', 1, 400, '400'),
(3, 1, 'Bonnet rouge', 1, 1200, '1200'),
(4, 2, 'Tee shirt guadeloupe', 1, 1100, '1100'),
(5, 2, 'T-shirt  Vieux rhum', 1, 1200, '1200'),
(6, 3, 'Manteau gris enfant', 1, 15000, '15000'),
(7, 4, 'tee-shirt madras', 1, 800, '800'),
(8, 5, 'Tee shirt mada', 1, 2300, '2300'),
(9, 6, 'Tee shirt mada', 1, 2300, '2300'),
(10, 6, 'tee-shirt madras', 1, 800, '800'),
(11, 7, 'Tee shirt mada', 1, 2300, '2300'),
(12, 7, 'tee-shirt madras', 1, 800, '800'),
(13, 8, 'porte monnaie madras bleu', 1, 400, '400'),
(14, 9, 'porte monnaie madras bleu', 1, 400, '400'),
(15, 10, 'porte monnaie madras bleu', 1, 400, '400'),
(16, 11, 'tee-shirt madras', 1, 800, '800'),
(17, 12, 'tee-shirt madras', 1, 800, '800'),
(18, 13, 'tee-shirt madras', 1, 800, '800'),
(19, 14, 'Bonnet rouge', 1, 1200, '1200'),
(20, 14, 'Manteau gris femme', 1, 20000, '20000'),
(21, 15, 'tee-shirt madras', 1, 800, '800'),
(22, 16, 'tee-shirt madras', 2, 800, '1600'),
(23, 17, 'tee-shirt madras', 2, 800, '1600'),
(24, 18, 'tee-shirt madras', 2, 800, '1600'),
(25, 20, 'tee-shirt madras', 1, 800, '800'),
(26, 21, 'tee-shirt madras', 1, 800, '800'),
(27, 21, 'Punch laMauny 1L', 1, 2900, '2900'),
(28, 22, 'Punch laMauny 1L', 1, 2900, '2900'),
(29, 22, 'tee-shirt madras', 1, 800, '800'),
(30, 23, 'Bonnet rouge', 1, 1200, '1200'),
(31, 24, 'Rhum trois riviéres 1L', 1, 2000, '2000'),
(32, 25, 'Manteau gris femme', 1, 20000, '20000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `is_best` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `illustration`, `subtitle`, `description`, `price`, `is_best`) VALUES
(2, 3, 'tee-shirt madras', 'tee-shirt-madras', '22ee7edf4466c76aeef0a0e01dd1e6b7fba884cb.jpeg', 'tee shirt vert jaune et rouge madras', 'tee shirt vert jaune et rouge madras', 800, 0),
(3, 5, 'porte monnaie madras bleu', 'porte-monnaie-madras-bleu', '2a0af043b0f9fd2759b7ceef6b81bb27ea054e88.jpeg', 'porte monnaie', 'Un très beau porte monnaie madras des antilles.', 400, 0),
(4, 2, 'bonnet bleu', 'bonnet-rouge-bleu-et-blanc', '218355ba2627f1869dd42f8b36a3f4a902cf0f25.jpeg', 'bonnet hiver homme et femme', 'Bonnet d\'hiver pour tete blonde femmes et hommes.', 1200, 1),
(5, 3, 'T- shirt str', 'tee-shirt-straight-to-madras', '2c9a8df7103b445e60f73f9e78238c4fe560506a.jpeg', 'tee shirt gansta made in mada', 'le tee shirt est en coton toute taille sont dispo ,en noir.', 2500, 0),
(6, 2, 'Bonnet rouge', 'bonnet-rouge-en-laine', '4e05a856ab71953909d999cfcd465bd087b0c892.jpeg', 'bonnet rouge en laine', 'Bonnet rouge femme et homme.', 1200, 0),
(7, 4, 'echarpe tricolore', 'echarpe-en-laine-tricolore', '2e2b24de1a7a95c8a07369b377456b2c586f23b8.jpeg', 'Echarpe pure laine trois couleur beige', 'Echarpe pure laine trois couleur beige', 800, 0),
(8, 4, 'Echarpe rouge', 'echarpe-couleur-rouge-en-laine', 'f4929fb9bfb85692b8b0c5ac1da75cd86979f6ce.jpeg', 'echarpe laine rouge', 'Echarpe laine rouge bordeaux.', 800, 0),
(9, 1, 'Manteau gris femme', 'manteau-gris-pour-femme', 'd1825d63272a2af19fb0537b49bf84f4ccad07a7.jpeg', 'manteau femme', 'Manteau pour femme hiver en cashmir.', 20000, 0),
(10, 1, 'Manteau gris enfant', 'manteau-gris-enfant', 'd6772ee34640a971b943a3baa5a64495b0d079d7.jpeg', 'Manteau gris enfant', 'Manteau gris enfant taille XL S couleur gris ,marron.', 15000, 1),
(11, 3, 'Tee shirt mada', 'tee-shirt-madinina', 'f191619e886fdba3a3624763e73f5f9777a85f48.png', 'Tee shirt mada', 'Tee shirt blanc en coton pour homme.', 1200, 1),
(12, 3, 'Tee shirt mada', 'tee-shirt-parfait-mada', '4d501eca0ef93b38645f716ac7e6afd3f173c914.jpeg', 'Tee shirt vert gris noir et rouge', 'Tee shirt vert gris noir et rouge.', 2300, 1),
(13, 3, 'T-shirt  gangsta', 'tee-shirt-gangsta-vert-gris-noir-et-rouge', '6e3d352c43d11fa1f85ac0a183660529a8250f49.jpeg', 'tee shirt gansta', 'Tee shirt  gangsta vert gris noir et rouge pour homme et femme.', 1100, 0),
(14, 3, 'T-shirt  Vieux rhum', 'tee-shirt-vieux-rhum-martiniquais', '43da4c7f97b3620b35730a26e8a76a9f1a696575.jpeg', 'Tee shirt  Vieux rhum  Martiniquais', 'Tee shirt  Vieux rhum  Martiniquais', 1200, 0),
(15, 3, 'Tee shirt guadeloupe', 'tee-shirt-guadeloupe', 'd42de8e6914d2aa50b2adf8dad13ee2156d1b630.jpeg', 'tee-shirt-guadeloupe', 'tee-shirt-guadeloupe', 1100, 0),
(16, 3, 'T- shirt  antillais', 'tee-shirt-martiniquais-antillais', 'ce1b8d37a3667cd4c6d7d9cbfdd1d3ee604644f1.jpeg', 'Tee shirt martiniquais antillais', 'Tee shirt guadeloupe noir motif carte gwada.', 1200, 0),
(17, 3, 'tee shirt noir', 'tee-shirt-noir', 'e53c4fa8c8c47298a5ed3bfec3110a8459d09457.jpeg', 'tee shirt noir', 'tee shirt noir  textile', 1200, 0),
(18, 6, 'Punch laMauny 1L', 'punch-lamauny-1l', 'c8e19fd06450435892faf1ef0979a8e87a079413.png', 'punch blanc 50°', 'Création des maîtres distillateurs de la Maison La Mauny, ce rhum blanc agricole a bénéficié d\'un finish exceptionnel en fût d\'acacia. \r\n\r\nSa méthode d’élaboration bien particulière a permis de développer un profil organoleptique marqué pas un nez frais et acidulé et des notes de miel en bouche. \r\n\r\nIl est parfait pour sublimer toutes les recettes de cocktails à base de fruits. Il apporte aux punchs et autres planteurs un goût unique, à la fois gourmand, frais et tonique. Une présentation en grand format à partager antre amis.', 2900, 0),
(19, 6, 'Rhum trois riviéres 1L', 'rhum-trois-rivieres-1l', '8069ab6b9613c11aef03cd69f12960857e795c81.png', 'rhum vieux de la martinique', 'Un rhum élégant, complexe mais aussi accessible pour des palais en progression ou experts. L\'assemblage des ex-fûts de bourbon, de cognac et de fûts neuf lui apporte un équilibre et une belle palette aromatique.', 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`id`, `user_id`, `token`, `created_at`) VALUES
(1, 16, '5ff7671f323dd', '2021-01-07 19:55:11'),
(2, 16, '5ff7672d652ac', '2021-01-07 19:55:25'),
(3, 16, '5ff770ef4671a', '2021-01-07 20:37:03'),
(4, 16, '5ff7717a4dfd1', '2021-01-07 20:39:22'),
(5, 16, '5ff77bbbbd1fd', '2021-01-07 21:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES
(10, 'bird@gmail.com', '[]', '$2y$13$moVdP81wJsUc9whBcdRiheQYXb6xaGXmTfirGGyEWhJ/eFFZ/0vs2', 'birdi78', 'birdi78'),
(11, 'larade@gmail.com', '[]', '$2y$13$Eug2f/IwrcpGmddovXCbS.53bLJdNdv.0iQuemBEdCZvzKn0FIry.', 'larade', 'jean-philippe'),
(12, 'hitlter@gmail.com', '[]', '$2y$13$KoxWZsTK/ogTotLHB3iaduim/IgemBdbRDmB/KlNB6nceWEuCXTw.', 'adolf', 'hitler'),
(13, 'jojo', '[]', '123', 'jol', 'jojo'),
(16, 'pablolarade@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$t138/AVLAghDdRuueHSIhunxq9ZwntEmRLzWLj42K7UjRUNqW0LRC', 'larade', 'jean-philippe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5CECC7BEA76ED395` (`user_id`);

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5299398A76ED395` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_845CA2C1BFCDF877` (`my_order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B9983CE5A76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adress`
--
ALTER TABLE `adress`
  ADD CONSTRAINT `FK_5CECC7BEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_845CA2C1BFCDF877` FOREIGN KEY (`my_order_id`) REFERENCES `order` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD CONSTRAINT `FK_B9983CE5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
