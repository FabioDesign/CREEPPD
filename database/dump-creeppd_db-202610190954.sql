/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: creeppd_db
-- ------------------------------------------------------
-- Server version	11.5.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `listemail`
--

DROP TABLE IF EXISTS `listemail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `listemail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listemail`
--

LOCK TABLES `listemail` WRITE;
/*!40000 ALTER TABLE `listemail` DISABLE KEYS */;
INSERT INTO `listemail` VALUES
(1,'fabrice_omfh@yahoo.fr',1),
(2,'fabrice225@yopmail.com',2),
(3,'fabio225@yopmail.com',2);
/*!40000 ALTER TABLE `listemail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'2025_12_10_041025_create_sendmail_table',1),
(2,'2025_12_11_185535_create_wordceo_table',1),
(3,'2025_12_20_190010_create_types_table',1),
(4,'2025_12_20_190525_create_services_table',1),
(5,'2025_12_20_191050_create_partners_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` text NOT NULL,
  `filename` varchar(15) NOT NULL,
  `website` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sendmail`
--

DROP TABLE IF EXISTS `sendmail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sendmail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sendmail`
--

LOCK TABLES `sendmail` WRITE;
/*!40000 ALTER TABLE `sendmail` DISABLE KEYS */;
INSERT INTO `sendmail` VALUES
(1,'Fabrice OGOU','fabrice.ogou@ngser.com','Test','Juste un test.',0,'2026-01-21 01:10:44','2026-01-21 01:10:44'),
(2,'Falex OGOU','fabiodesign2010@gmail.com','PNCI','Police Communication.',0,'2026-01-21 01:17:16','2026-01-21 01:17:16');
/*!40000 ALTER TABLE `sendmail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `libelle` text NOT NULL,
  `filename` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_code_unique` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES
(1,'form','Nos Formations','1.	Anglais<br>\n2.	Art oratoire<br>\n3.	Business plan<br>\n4.	Entrepreneuriat<br>\n5.	Etique et redevabilité<br>\n6.	Comptabilité simplifiée<br>\n7.	Fiscalité des entreprises<br>\n8.	Développement personnel,<br>\n9.	Gestion des relations clients<br>\n10.	Méthodologie de la recherche<br>\n11.	Gestion commerciale simplifiée<br>\n12.	Gestion de projets/programmes<br>\n13.	Conception de projets/programmes<br>\n14.	Création d’organisation et entreprise<br>\n15.	Processus de création d’une entreprise<br>\n16.	Markéting digital (Community Manager)<br>\n17.	Suivi-évaluation de projets / programmes<br>\n18.	Energie solaire : installation et maintenance<br>\n19.	Gestion des Ressources Humaines simplifiée<br>\n20.	Informatique (initiation, professionnel et Expert)<br>\n21.	Gestion durable des organisations et entreprises<br>\n22.	Relation internationale et Diplomatie économique <br>\n23.	Gestion financière et comptable de projets/programmes<br>\n24.	Stratégie de relèvement des entreprises des organisations<br>\n25.	Maitrise de logiciel d’analyse (Stata, Eviews, SPSS, Sphinx, Kobo, etc.…)<br>\n26.	Prévention et Gestion de conflits identitaires d’organisation, entreprise et pays<br>\n27.	Informatique et réseau (logiciel et matériels) : initiation, professionnel et expert.<br>\n28.	Nouveau cadre de passation des marchés de la Banque Mondiale et de la Banque Africaine de Développement<br>\n29.	Sauvegarde environnementale et sociale selon les exigences des Banques Multilatérales de Développement (Banque Mondiale, Banque Africaine de Développement) ; <br>\n30.	Etude d’Impact Environnemental et Social selon les procédures de la Banque Mondiale et de la Banque Africaine de Développement ; <br>\n31.	Suivi et surveillance environnementale et sociale des grands chantiers de travaux (miniers, pé-trolier, routier, ferroviaire, portuaire) <br>\n32.	Suivi et évaluation des programmes et projets suivant les procédures de la Banque Mondiale et de la Banque Africaine de Développement ;','formation.png',1,'2026-01-19 18:57:30','2026-01-19 18:57:30',2),
(2,'etud','Nos Etudes','1.	Lotissement<br>\r\n2.	Étude diagnostique<br>\r\n3.	Profilage des promoteurs<br>\r\n4.	Plan d’Aménagement forestier.<br>\r\n5.	Étude des opportunités économiques<br>\r\n6.	Élaboration de plan de gestion durable<br>\r\n7.	Création d’organisation et d’entreprise<br>\r\n8.	Mission de Contrôle des infrastructures<br>\r\n9.	Diverses Analyses du sol, de l’eau et autres<br>\r\n10.	Schéma Directeur d’Aménagement du Territoire<br>\r\n11.	Plans architecturaux et techniques des bâtiments<br>\r\n12.	Étude d’Impact Environnemental et social des projets<br>\r\n13.	Élaboration de plan d’action stratégique de relèvement<br>\r\n14.	Construction et Réhabilitation des bâtiments et autres<br>\r\n15.	Audit environnemental des programmes / projets et unités industrielles<br>\r\n16.	Évaluation Environnementale Stratégique (Plan d’action environnementale, Cadre de gestion environnementale et sociale)<br>\r\n17.	Étude d’Impact Environnemental et Social selon les procédures de la Banque Mondiale et de la Banque Africaine de Développement.','etude.webp',1,'2026-01-19 18:57:30','2026-01-19 18:57:30',2),
(3,'cons','Nos Conseils','1.	Appui dans le processus électoral.<br>\r\n2.	Appui à l’artisanat et aux PME/PMI.<br>\r\n3.	Appui à l’élaboration et l’usage des business plans.<br>\r\n4.	Appui dans la bonne gouvernance économique et politique.<br>\r\n5.	Appui-conseils stratégique aux organisations et entreprises en vue de la durabilité.<br>\r\n6.	Appui aux actions de promotion de l’emploi, en particulier l’emploi des jeunes et l’autonomisation des femmes.<br>\r\n7.	Appui-conseils institutionnel pour la mise en place des Systèmes de Management Environnemental (SME).','conseil.png',1,'2026-01-19 18:57:30','2026-01-19 18:57:30',2),
(4,'real','Nos Réalisations','1.	Lotissement<br>\r\n2.	Aménagement urbain<br>\r\n3.	Réalisation de projets d’infrastructure<br>\r\n4.	Construction et Réhabilitation des bâtiments et autres<br>\r\n5.	Bâtiment Travaux Publics (Infrastructures Hydrauliques, Routes, etc.)','realisation.jpg',1,'2026-01-19 18:57:30','2026-01-19 18:57:30',2),
(5,'caphum','Le capital humain','<div class=\"choose-us-content\">\r\n  <div class=\"section-title\">\r\n    <p class=\"mt-3 mt-mb-0 wow fadeInUp\" data-wow-delay=\".5s\">\r\n      Aux vues de notre mission, nous avons un capital humain de haute qualité. Nos experts nationaux et internationaux ont les compétences et les qualifications suivantes :\r\n    </p>\r\n  </div>\r\n  <div class=\"choose-us-item\">\r\n    <ul class=\"list-item\">\r\n	  <li>\r\n	    <i class=\"fas fa-check-circle\"></i>\r\n		Hautes Compétences en recherche :<br>\r\n	- Capacité à concevoir et à mener des recherches scientifiques,<br>\r\n	- Connaissance des méthodes de recherche et des outils d\'analyse,<br>\r\n	- Capacité à interpréter et à communiquer les résultats de la recherche.\r\n	  </li>\r\n	  <li>\r\n	    <i class=\"fas fa-check-circle\"></i>\r\n		Hautes Compétences en formation :<br>\r\n	- Capacité à concevoir et à dispenser des formations de haute qualité,<br>\r\n	- Capacité à évaluer les besoins de formation et à adapter les contenus,<br>\r\n	- Connaissance des méthodes pédagogiques et des outils d\'enseignement.\r\n	  </li>\r\n	  <li>\r\n	    <i class=\"fas fa-check-circle\"></i>\r\n		Compétences en études et analyses :<br>\r\n	- Connaissance des outils d\'analyse et des méthodes statistiques,<br>\r\n	- Capacité à analyser des données et des informations complexes,<br>\r\n	- Capacité à interpréter et à communiquer les résultats des analyses.\r\n	  </li>\r\n	  <li>\r\n	    <i class=\"fas fa-check-circle\"></i>\r\n		Compétences en appui-conseil :<br>\r\n	- Connaissance des besoins et des enjeux des clients,<br>\r\n	- Capacité à fournir des conseils et des recommandations de haute qualité,<br>\r\n	- Capacité à communiquer de manière efficace et à établir des relations de confiance.\r\n	  </li>\r\n	  <li>\r\n	    <i class=\"fas fa-check-circle\"></i>\r\n		Compétences en réalisations :<br>\r\n	- Bonne capacité à gérer les ressources et à atteindre les objectifs, <br>\r\n	- Capacité à concevoir et à mettre en œuvre des projets et des programmes,<br>\r\n	- Bonne connaissance des outils de gestion de projet et des méthodes de mise en œuvre.\r\n	  </li>\r\n	  <li>\r\n	    <i class=\"fas fa-check-circle\"></i>\r\n		Hautes qualifications de tous nos intervenants :<br>\r\n	- Diplômes universitaires de niveau master et /ou doctorat dans tous nos domaines d’expertise.<br>\r\n	- Une expérience professionnelle significative dans le domaine de la recherche, de la formation, des études, de l\'appui-conseil ou des réalisations.<br>\r\n	- Des compétences en communication, en gestion de projet et en travail d\'équipe.<br>\r\n	- Une capacité à travailler de manière autonome et à prendre des initiatives.\r\n	  </li>\r\n	</ul>\r\n  </div>\r\n</div>','',1,'2026-01-19 18:57:30','2026-01-19 18:57:30',1),
(6,'formprat','La formation pratique','<div class=\"choose-us-content\">\r\n  <div class=\"section-title\">\r\n    <p class=\"mt-3 mt-mb-0 wow fadeInUp\" data-wow-delay=\".5s\">\r\n      Nos formations visent à développer des compétences et des connaissances des auditeurs en leur permettant de mettre en pratique les concepts et les techniques appris en théorie. L\'objectif est de préparer les participants à appliquer leurs connaissances dans un contexte réel et à développer des compétences nécessaires pour réussir dans leur domaine d\'étude ou de travail.<br>\r\n	  Nos formations pratiques prennent en compte :\r\n    </p>\r\n  </div>\r\n  <div class=\"choose-us-item\">\r\n    <ul class=\"list-item\">\r\n	  <li>\r\n	    <i class=\"fas fa-check-circle\"></i>\r\n	    <b>La mise en pratique réelle :</b> les participants sont encouragés à mettre en pratique les concepts et les techniques apprises et travaillent sur des projets ou des cas réels pour développer leurs compétences.\r\n	  </li>\r\n	  <li>   \r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>L’apprentissage par l\'expérience :</b> les participants apprennent en faisant, en expérimentant et en réfléchissant sur leurs expériences et les partager avec les autres.\r\n	  </li>\r\n	  <li>\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Le développement de compétences :</b> les participants développent des compétences pratiques et des connaissances qui peuvent être appliquées dans un contexte réel.\r\n	  </li>\r\n	  <li>\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>L’évaluation pratique :</b> les participants sont évalués sur leur capacité à appliquer les concepts et les techniques appris en pratique.\r\n	  </li>\r\n	  <li>\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>la Meilleure rétention des connaissances :</b> les participants retiennent mieux les connaissances lorsqu\'ils les mettent en pratique.\r\n	  </li>\r\n	  <li>\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Préparation au marché du travail :</b> les participants sont mieux préparés à entrer sur le marché du travail et à réussir dans leur domaine d\'étude ou de travail.\r\n	  </li>\r\n	  <li>\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Amélioration de la confiance en soi :</b> les participants développent une plus grande confiance en soi lorsqu\'ils mettent en pratique les concepts et les techniques appris.\r\n	  </li>\r\n	</ul>\r\n  </div>\r\n</div>','',1,'2026-01-19 18:57:30','2026-01-19 18:57:30',1),
(7,'suiveval','Le suivi-évaluation','<div class=\"choose-us-content\">\r\n  <div class=\"section-title\">\r\n    <p class=\"mt-3 mt-mb-0 wow fadeInUp\" data-wow-delay=\".5s\">\r\n      Pour assurer la réussite de tous nos projets, programme ou même des entreprises et des organisations, nous adoptons un bon suivi et évaluation dont quelques étapes sont ci-après.\r\n    </p>\r\n  </div>\r\n  <div class=\"choose-us-item\">\r\n    <ul class=\"list-item\">\r\n	  <li>\r\n	    <i class=\"fas fa-check-circle\"></i>\r\n	    <b>Définir les objectifs et les indicateurs clairs :</b> définir clairement les objectifs et les indicateurs de performance pour le projet ou le programme.\r\n	  </li>\r\n	  <li>    \r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Tableau de bord :</b> un tableau de bord pour suivre les indicateurs de performance et les objectifs.\r\n	  </li>\r\n	  <li>	\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Rapports de suivi :</b> des rapports réguliers pour suivre les progrès et les résultats.\r\n	  </li>\r\n	  <li>	\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Évaluations périodiques :</b> des évaluations périodiques pour évaluer les résultats et identifier les leçons apprises.\r\n	  </li>\r\n	  <li>	\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Évaluer les résultats :</b> évaluer les résultats obtenus par rapport aux objectifs fixés.\r\n	  </li>\r\n	  <li>	\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Identifier les leçons apprises :</b> identifier les leçons apprises et les bonnes pratiques pour améliorer les performances futures.\r\n	  </li>\r\n	  <li>	\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Faire des recommandations :</b> faire des recommandations pour améliorer les performances et atteindre les objectifs.\r\n	  </li>\r\n	  <li>	\r\n		<i class=\"fas fa-check-circle\"></i>\r\n		<b>Mettre en œuvre les recommandations :</b> mettre en œuvre les recommandations pour améliorer les performances et atteindre les objectifs.\r\n	  </li>\r\n	</ul>\r\n  </div>\r\n</div>','',1,'2026-01-19 18:57:30','2026-01-19 18:57:30',1);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES
(1,'Services',1),
(2,'Prestations',1);
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wordceo`
--

DROP TABLE IF EXISTS `wordceo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `wordceo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` text NOT NULL,
  `filename` varchar(15) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wordceo`
--

LOCK TABLES `wordceo` WRITE;
/*!40000 ALTER TABLE `wordceo` DISABLE KEYS */;
/*!40000 ALTER TABLE `wordceo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'creeppd_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-10-19  9:54:05
