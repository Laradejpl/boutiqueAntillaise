<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sql/lbantillaise.sql */
class __TwigTemplate_acf0b65a479b41f4b742321ed53d835a36fccbb260ae9cad925df9e8692072e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sql/lbantillaise.sql"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sql/lbantillaise.sql"));

        // line 1
        echo "-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 09, 2020 at 07:23 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET time_zone = \"+00:00\";

--
-- Database: `laboutiquefrancaise_dev`
--

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
(5, 'Accessoires');

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
('DoctrineMigrations\\\\Version20201207210438', '2020-12-07 21:10:42', 73);

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
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `illustration`, `subtitle`, `description`, `price`) VALUES
(2, 3, 'tee-shirt madras', 'tee-shirt-madras', '22ee7edf4466c76aeef0a0e01dd1e6b7fba884cb.jpeg', 'tee shirt vert jaune et rouge madras', 'tee shirt vert jaune et rouge madras', 800),
(3, 5, 'porte monnaie madras bleu', 'porte-monnaie-madras-bleu', '2a0af043b0f9fd2759b7ceef6b81bb27ea054e88.jpeg', 'porte monnaie', 'Un très beau porte monnaie madras des antilles.', 400),
(4, 2, 'bonnet bleu', 'bonnet-rouge-bleu-et-blanc', '218355ba2627f1869dd42f8b36a3f4a902cf0f25.jpeg', 'bonnet hiver homme et femme', 'Bonnet d\\'hiver pour tete blonde femmes et hommes.', 1200),
(5, 3, 'T- shirt str', 'tee-shirt-straight-to-madras', '2c9a8df7103b445e60f73f9e78238c4fe560506a.jpeg', 'tee shirt gansta made in mada', 'le tee shirt est en coton toute taille sont dispo ,en noir.', 2500),
(6, 2, 'Bonnet rouge', 'bonnet-rouge-en-laine', '4e05a856ab71953909d999cfcd465bd087b0c892.jpeg', 'bonnet rouge en laine', 'Bonnet rouge femme et homme.', 1200),
(7, 4, 'echarpe tricolore', 'echarpe-en-laine-tricolore', '2e2b24de1a7a95c8a07369b377456b2c586f23b8.jpeg', 'Echarpe pure laine trois couleur beige', 'Echarpe pure laine trois couleur beige', 800),
(8, 4, 'Echarpe rouge', 'echarpe-couleur-rouge-en-laine', 'f4929fb9bfb85692b8b0c5ac1da75cd86979f6ce.jpeg', 'echarpe laine rouge', 'Echarpe laine rouge bordeaux.', 800),
(9, 1, 'Manteau gris femme', 'manteau-gris-pour-femme', 'd1825d63272a2af19fb0537b49bf84f4ccad07a7.jpeg', 'manteau femme', 'Manteau pour femme hiver en cashmir.', 20000),
(10, 1, 'Manteau gris enfant', 'manteau-gris-enfant', 'd6772ee34640a971b943a3baa5a64495b0d079d7.jpeg', 'Manteau gris enfant', 'Manteau gris enfant taille XL S couleur gris ,marron.', 15000),
(11, 3, 'Tee shirt blanc', 'tee-shirt-blanc', 'f191619e886fdba3a3624763e73f5f9777a85f48.png', 'Tee shirt blanc', 'Tee shirt blanc en coton pour homme.', 1200),
(12, 3, 'Tee shirt mada', 'tee-shirt-parfait-mada', '4d501eca0ef93b38645f716ac7e6afd3f173c914.jpeg', 'Tee shirt vert gris noir et rouge', 'Tee shirt vert gris noir et rouge.', 2300),
(13, 3, 'T-shirt  gangsta', 'tee-shirt-gangsta-vert-gris-noir-et-rouge', '6e3d352c43d11fa1f85ac0a183660529a8250f49.jpeg', 'tee shirt gansta', 'Tee shirt  gangsta vert gris noir et rouge pour homme et femme.', 1100),
(14, 3, 'T-shirt  Vieux rhum', 'tee-shirt-vieux-rhum-martiniquais', '43da4c7f97b3620b35730a26e8a76a9f1a696575.jpeg', 'Tee shirt  Vieux rhum  Martiniquais', 'Tee shirt  Vieux rhum  Martiniquais', 1200),
(15, 3, 'Tee shirt guadeloupe', 'tee-shirt-guadeloupe', 'd42de8e6914d2aa50b2adf8dad13ee2156d1b630.jpeg', 'tee-shirt-guadeloupe', 'tee-shirt-guadeloupe', 1100),
(16, 3, 'T- shirt  antillais', 'tee-shirt-martiniquais-antillais', 'ce1b8d37a3667cd4c6d7d9cbfdd1d3ee604644f1.jpeg', 'Tee shirt martiniquais antillais', 'Tee shirt guadeloupe noir motif carte gwada.', 1200),
(17, 3, 'tee shirt noir', 'tee-shirt-noir', 'e53c4fa8c8c47298a5ed3bfec3110a8459d09457.jpeg', 'tee shirt noir', 'tee shirt noir  textile', 1200);

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
(9, 'pablolarade@gmail.com', '[]', '\$2y\$13\$Y5aJDvO1Au8eL7cRzEtUpel.KiL6PnXeRXSg.ls2XQX23/sYc4xCG', 'BROUSSE', 'KARINE'),
(10, 'bird@gmail.com', '[]', '\$2y\$13\$moVdP81wJsUc9whBcdRiheQYXb6xaGXmTfirGGyEWhJ/eFFZ/0vs2', 'birdi78', 'birdi78'),
(11, 'larade@gmail.com', '[]', '\$2y\$13\$hETitZiO7KvAemvqQJZ01uu6Bx1nNwYmpUELgx7QwvRL0aLk0PkJe', 'larade', 'jean-philippe'),
(12, 'hitlter@gmail.com', '[]', '\$2y\$13\$KoxWZsTK/ogTotLHB3iaduim/IgemBdbRDmB/KlNB6nceWEuCXTw.', 'adolf', 'hitler'),
(13, 'jojo', '[]', '123', 'jol', 'jojo');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sql/lbantillaise.sql";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 09, 2020 at 07:23 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET time_zone = \"+00:00\";

--
-- Database: `laboutiquefrancaise_dev`
--

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
(5, 'Accessoires');

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
('DoctrineMigrations\\\\Version20201207210438', '2020-12-07 21:10:42', 73);

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
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `illustration`, `subtitle`, `description`, `price`) VALUES
(2, 3, 'tee-shirt madras', 'tee-shirt-madras', '22ee7edf4466c76aeef0a0e01dd1e6b7fba884cb.jpeg', 'tee shirt vert jaune et rouge madras', 'tee shirt vert jaune et rouge madras', 800),
(3, 5, 'porte monnaie madras bleu', 'porte-monnaie-madras-bleu', '2a0af043b0f9fd2759b7ceef6b81bb27ea054e88.jpeg', 'porte monnaie', 'Un très beau porte monnaie madras des antilles.', 400),
(4, 2, 'bonnet bleu', 'bonnet-rouge-bleu-et-blanc', '218355ba2627f1869dd42f8b36a3f4a902cf0f25.jpeg', 'bonnet hiver homme et femme', 'Bonnet d\\'hiver pour tete blonde femmes et hommes.', 1200),
(5, 3, 'T- shirt str', 'tee-shirt-straight-to-madras', '2c9a8df7103b445e60f73f9e78238c4fe560506a.jpeg', 'tee shirt gansta made in mada', 'le tee shirt est en coton toute taille sont dispo ,en noir.', 2500),
(6, 2, 'Bonnet rouge', 'bonnet-rouge-en-laine', '4e05a856ab71953909d999cfcd465bd087b0c892.jpeg', 'bonnet rouge en laine', 'Bonnet rouge femme et homme.', 1200),
(7, 4, 'echarpe tricolore', 'echarpe-en-laine-tricolore', '2e2b24de1a7a95c8a07369b377456b2c586f23b8.jpeg', 'Echarpe pure laine trois couleur beige', 'Echarpe pure laine trois couleur beige', 800),
(8, 4, 'Echarpe rouge', 'echarpe-couleur-rouge-en-laine', 'f4929fb9bfb85692b8b0c5ac1da75cd86979f6ce.jpeg', 'echarpe laine rouge', 'Echarpe laine rouge bordeaux.', 800),
(9, 1, 'Manteau gris femme', 'manteau-gris-pour-femme', 'd1825d63272a2af19fb0537b49bf84f4ccad07a7.jpeg', 'manteau femme', 'Manteau pour femme hiver en cashmir.', 20000),
(10, 1, 'Manteau gris enfant', 'manteau-gris-enfant', 'd6772ee34640a971b943a3baa5a64495b0d079d7.jpeg', 'Manteau gris enfant', 'Manteau gris enfant taille XL S couleur gris ,marron.', 15000),
(11, 3, 'Tee shirt blanc', 'tee-shirt-blanc', 'f191619e886fdba3a3624763e73f5f9777a85f48.png', 'Tee shirt blanc', 'Tee shirt blanc en coton pour homme.', 1200),
(12, 3, 'Tee shirt mada', 'tee-shirt-parfait-mada', '4d501eca0ef93b38645f716ac7e6afd3f173c914.jpeg', 'Tee shirt vert gris noir et rouge', 'Tee shirt vert gris noir et rouge.', 2300),
(13, 3, 'T-shirt  gangsta', 'tee-shirt-gangsta-vert-gris-noir-et-rouge', '6e3d352c43d11fa1f85ac0a183660529a8250f49.jpeg', 'tee shirt gansta', 'Tee shirt  gangsta vert gris noir et rouge pour homme et femme.', 1100),
(14, 3, 'T-shirt  Vieux rhum', 'tee-shirt-vieux-rhum-martiniquais', '43da4c7f97b3620b35730a26e8a76a9f1a696575.jpeg', 'Tee shirt  Vieux rhum  Martiniquais', 'Tee shirt  Vieux rhum  Martiniquais', 1200),
(15, 3, 'Tee shirt guadeloupe', 'tee-shirt-guadeloupe', 'd42de8e6914d2aa50b2adf8dad13ee2156d1b630.jpeg', 'tee-shirt-guadeloupe', 'tee-shirt-guadeloupe', 1100),
(16, 3, 'T- shirt  antillais', 'tee-shirt-martiniquais-antillais', 'ce1b8d37a3667cd4c6d7d9cbfdd1d3ee604644f1.jpeg', 'Tee shirt martiniquais antillais', 'Tee shirt guadeloupe noir motif carte gwada.', 1200),
(17, 3, 'tee shirt noir', 'tee-shirt-noir', 'e53c4fa8c8c47298a5ed3bfec3110a8459d09457.jpeg', 'tee shirt noir', 'tee shirt noir  textile', 1200);

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
(9, 'pablolarade@gmail.com', '[]', '\$2y\$13\$Y5aJDvO1Au8eL7cRzEtUpel.KiL6PnXeRXSg.ls2XQX23/sYc4xCG', 'BROUSSE', 'KARINE'),
(10, 'bird@gmail.com', '[]', '\$2y\$13\$moVdP81wJsUc9whBcdRiheQYXb6xaGXmTfirGGyEWhJ/eFFZ/0vs2', 'birdi78', 'birdi78'),
(11, 'larade@gmail.com', '[]', '\$2y\$13\$hETitZiO7KvAemvqQJZ01uu6Bx1nNwYmpUELgx7QwvRL0aLk0PkJe', 'larade', 'jean-philippe'),
(12, 'hitlter@gmail.com', '[]', '\$2y\$13\$KoxWZsTK/ogTotLHB3iaduim/IgemBdbRDmB/KlNB6nceWEuCXTw.', 'adolf', 'hitler'),
(13, 'jojo', '[]', '123', 'jol', 'jojo');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);", "sql/lbantillaise.sql", "/Users/test/Downloads/laboutiqueFrancaise/templates/sql/lbantillaise.sql");
    }
}
