-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2019 at 10:13 AM
-- Server version: 10.1.37-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblarossi`
--

-- --------------------------------------------------------

--
-- Table structure for table `TNews`
--

CREATE TABLE `TNews` (
  `Url` varchar(190) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Date` datetime NOT NULL,
  `NbClics` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TNews`
--

INSERT INTO `TNews` (`Url`, `Website`, `Title`, `Description`, `Date`, `NbClics`) VALUES
('http://video.lefigaro.fr/figaro/video/ces-2019-decouvrez-les-dernieres-innovations-en-direct-de-las-vegas/5987211984001/', 'video.lefigaro.fr', 'CES 2019 : découvrez les dernières innovations en direct de Las Vegas', 'Comme chaque année, le «Consumer Electronics Show» dévoile l\'actualité du secteur des nouvelles technologies. Nous vous les faisons découvrir en direct.', '2019-01-09 17:15:46', 0),
('http://video.lefigaro.fr/figaro/video/en-haute-savoie-la-manoeuvre-impressionnante-d-un-pilote-de-la-gendarmerie/5987199976001/', 'video.lefigaro.fr', 'En Haute-Savoie, la manœuvre impressionnante d\'un pilote de la gendarmerie', 'En Haute Savoie, afin de secourir un randonneur blessé, un pilote de la gendarmerie à réalisé, à 2 200 mètres d\'altitude, sur un flanc de montagne escarpé, une manœuvre spectaculaire appelé l\'appui-patin.', '2019-01-08 20:10:20', 0),
('http://video.lefigaro.fr/figaro/video/grand-debat-a-quoi-sert-il/5987459484001/', 'video.lefigaro.fr', 'Grand débat : à quoi sert-il ?', 'Vanik Berbérian (AMRF), Cécile Crouzel (Figaro), Philippe Laurent (AMF) et Emmanuel Galiero (Figaro) décryptent les enjeux du grand débat national.', '2019-01-09 12:09:31', 0),
('http://video.lefigaro.fr/figaro/video/la-nasa-devoile-les-plans-de-la-premiere-mission-de-defense-planetaire-de-l-histoire/5987388016001/', 'video.lefigaro.fr', 'La NASA dévoile les plans de la première mission de défense planétaire de l\'histoire', 'Le test de redirection de double astéroïde de la NASA, ou DART, est la première mission de défense planétaire de l\'histoire. Son objectif principal est de démontrer un impact cinétique sur un astéroïde.', '2019-01-09 07:54:08', 0),
('http://video.lefigaro.fr/figaro/video/points-de-vue-du-9-janvier-grand-debat-salvini-et-les-gilets-jaunes-mariani-trump/5987536188001/', 'video.lefigaro.fr', 'Points de vue du 9 janvier : grand débat, Salvini et les Gilets jaunes, Mariani, Trump', 'Grand débat : vous y croyez ? L’Italie au secours des “Gilets jaunes” ? Mariani au RN : une grosse prise ? Migrants : Trump va-t-il dans le mur ?', '2019-01-09 17:55:58', 0),
('http://www.lefigaro.fr/actualite-france/2019/01/09/01016-20190109ARTFIG00156-gilets-jaunes-le-boxeur-christophe-dettinger-va-etre-defere.php', 'lefigaro.fr', '«Gilets jaunes» : l\'ex-boxeur Christophe Dettinger jugé en comparution immédiate', 'L\'ancien boxeur professionnel soupçonné d\'avoir frappé des gendarmes samedi dernier à Paris sera déféré mercredi après-midi en vue d\'un jugement en comparution immédiate.', '2019-01-09 13:50:59', 0),
('http://www.lefigaro.fr/actualite-france/2019/01/09/01016-20190109ARTFIG00183-mon-pere-a-tue-ma-mere-on-ne-devrait-pas-me-solliciter-pour-payer-son-ehpad.php', 'lefigaro.fr', '«Mon père a tué ma mère, on ne devrait pas me solliciter pour payer son Ehpad»', 'Le département du Maine-et-Loire a adressé en novembre un courrier à Françoise, 49 ans, pour savoir si elle était en mesure d\'aider son père assassin à régler la facture de la maison de retraite. Depuis, elle a été exonérée du paiement mais se bat pour que d\'autres«enfants devenus grands» ne vivent plus la même situation.', '2019-01-09 15:25:04', 0),
('http://www.lefigaro.fr/actualite-france/2019/01/09/01016-20190109ARTFIG00227-un-mirage-2000-disparait-entre-le-doubs-et-le-jura.php', 'lefigaro.fr', 'Disparition d\'un Mirage 2000 : des débris retrouvés dans le Jura', 'L\'avion de chasse a décollé de la base aérienne de Nancy-Ochey (Meurthe-et-Moselle) et a disparu des écrans radars mercredi peu après 11h. Des débris ont été retrouvés mais les pilotes sont toujours introuvables.', '2019-01-09 17:05:27', 0),
('http://www.lefigaro.fr/actualite-france/2019/01/09/01016-20190109QCMWWW00120-pensez-vous-que-le-grand-debat-national-va-deboucher-sur-des-hausses-d-impots.php', 'lefigaro.fr', 'Pensez-vous que le grand débat national va déboucher sur des hausses d\'impôts ?', 'No description available.', '2019-01-09 12:00:22', 0),
('http://www.lefigaro.fr/conjoncture/2019/01/09/20002-20190109ARTFIG00312-le-gouvernement-multiplie-les-petits-gestes-envers-les-fonctionnaires.php', 'lefigaro.fr', 'Le gouvernement multiplie les (petits) gestes envers les fonctionnaires', 'Prime pour les aides-soignants des maisons de retraite, certains agents du fisc, augmentations pour les policiers : l\'exécutif privilégie les mesures ciblées et veut s\'éviter une hausse générale.', '2019-01-09 18:02:27', 0),
('http://www.lefigaro.fr/flash-actu/2019/01/09/97001-20190109FILWWW00232-theresa-may-perd-un-vote-cle-sur-le-brexit-au-parlement.php', 'lefigaro.fr', 'Theresa May perd un vote clé sur le Brexit au Parlement', 'No description available.', '2019-01-09 17:10:27', 0),
('http://www.lefigaro.fr/flash-actu/2019/01/09/97001-20190109FILWWW00259-plus-de-100-personnes-a-creteil-contre-la-venue-de-macron.php', 'lefigaro.fr', 'Plus de 100 personnesà Créteil contre la venue de Macron', 'No description available.', '2019-01-09 16:41:14', 0),
('http://www.lefigaro.fr/international/2019/01/09/01003-20190109ARTFIG00311-norvege-l-epouse-d-un-riche-homme-d-affaires-probablement-enlevee.php', 'lefigaro.fr', 'Norvège : l\'épouse d\'un riche homme d\'affaires probablement enlevée', 'La compagne d\'un richissime Norvégien a disparu depuis plus de deux mois. La police, ayant choisi de rendre l\'affaire publique, privilégie la thèse d\'un enlèvement.', '2019-01-09 18:01:09', 1),
('http://www.lefigaro.fr/placement/2019/01/08/05006-20190108ARTFIG00219-location-meublee-faut-il-opter-pour-l-imposition-au-regime-reel.php', 'lefigaro.fr', 'Location meublée : faut-il opter pour l\'imposition au régime réel ?', 'NOS CONSEILS - Effacer complètement son impôt, c\'est possible en louant meublé, si l\'on opte pour le réel. Tentant ? À réserver aux loueurs chevronnés et bien épaulés.', '2019-01-08 16:48:12', 0),
('http://www.lefigaro.fr/politique/2019/01/08/01002-20190108ARTFIG00320-les-autorites-independantes-font-debat.php', 'lefigaro.fr', 'Ces salaires dans les autorités indépendantes qui font débat', 'Chantal Jouanno s\'est retirée mardi du grand débat national après la polémique sur son salaire. Comme la Commission nationale du débat public, il y a 26 autorités administratives indépendantes en France. Les rémunérations de ceux qui les dirigent font régulièrement polémique.', '2019-01-09 14:46:04', 0),
('http://www.lefigaro.fr/politique/2019/01/08/01002-20190108ARTFIG00371-reunions-themes-kits-animation8230-dans-les-coulisses-d-une-consultation-inedite.php', 'lefigaro.fr', 'Réunions, thèmes, kits, animation… dans les coulisses d\'une consultation inédite', 'Par son ampleur et la diversité des sujets abordés, le grand débat national est une première. Son ambition : associer tous les Français qui le souhaitent aux politiques publiques du pays, du 15 janvier au 15 mars.', '2019-01-09 15:01:24', 0),
('http://www.lefigaro.fr/politique/le-scan/2019/01/09/25001-20190109ARTFIG00102-chantal-jouanno-assure-que-la-polemique-sur-son-salaire-est-la-seule-raison-de-son-retrait.php', 'lefigaro.fr', 'Chantal Jouanno assure que la polémique sur son salaire «est la seule raison» de son retrait', 'LE SCAN POLITIQUE - Pour la présidente de la Commission nationale du débat public, la polémique sur sa rémunération était «devenue un frein à la tenue du débat. Elle serait revenue en permanence».', '2019-01-09 12:53:08', 0),
('http://www.lefigaro.fr/politique/le-scan/2019/01/09/25001-20190109ARTFIG00179-retrait-de-jouanno-l-opposition-juge-le-debat-national-mort-ne.php', 'lefigaro.fr', 'Retrait de Jouanno : l\'opposition juge le débat national «mort-né»', 'LE SCAN POLITIQUE -À une semaine de son lancement, le débat national a déjà du plomb dans l\'aile. Son organisatrice Chantal Jouanno a préféré se retirer du pilotage à la suite d\'une polémique sur son salaire de présidente de la CNDP.', '2019-01-09 16:00:26', 0),
('http://www.lefigaro.fr/politique/le-scan/2019/01/09/25001-20190109ARTFIG00237-grand-debat-philippe-regrette-le-depart-de-jouanno-mais-le-reduit-a-une-peripetie.php', 'lefigaro.fr', '«Grand débat» : Philippe «regrette» le départ de Jouanno mais le réduit à une «péripétie»', 'LE SCAN POLITIQUE - Le premier ministre a rappelé que la présidente de la Commission nationale du débat public était «irrévocable», mais il l\'a invitée à «se déterminer» après sa décision de se mettre en retrait.', '2019-01-09 16:07:54', 0),
('http://www.lefigaro.fr/politique/le-scan/2019/01/09/25001-20190109ARTFIG00256-aurore-berge-veut-signaler-a-la-justice-des-propos-de-cadres-de-lfi-incitant-a-la-violence.php', 'lefigaro.fr', 'Aurore Bergé veut signaler à la justice des propos de cadres de LFI incitant à la violence', 'LE SCAN POLITIQUE - Le ministre du Logement Julien Denormandie et la députée LaREM Aurore Bergé mettent en cause les propos de responsables de La France insoumse.', '2019-01-09 16:31:01', 0),
('http://www.lefigaro.fr/politique/le-scan/2019/01/09/25001-20190109ARTFIG00270-alexandre-benalla-a-restitue-ses-passeports-diplomatiques.php', 'lefigaro.fr', 'Alexandre Benalla a restitué ses passeports diplomatiques', 'LE SCAN POLITIQUE - Avant les révélations de Mediapart fin décembre, l\'ex-collaborateur de l\'Élysée voyageait toujours avec ses passeports diplomatiques.', '2019-01-09 16:50:54', 0),
('http://www.lefigaro.fr/societes/2019/01/08/20005-20190108ARTFIG00326-nissan-fait-la-chasse-aux-fideles-de-carlos-ghosn.php', 'lefigaro.fr', 'Nissan fait la chasse aux fidèles de Carlos Ghosn', 'VIDÉO - L\'entourage professionnel de l\'ancien patron du constructeur japonais subit les foudres de l\'actuelleéquipe dirigeante. Seuls les Français de Nissan, généralement des anciens de Renault, n\'ont pasété touchés.', '2019-01-08 21:21:21', 0),
('http://www.lefigaro.fr/vox/societe/2019/01/06/31003-20190106ARTFIG00113-jacques-julliard-des-8220gilets-jaunes8221-a-la-sortie-de-l-histoire.php', 'lefigaro.fr', 'Jacques Julliard:«Des “gilets jaunes” à la sortie de l\'histoire?»', 'CHRONIQUE - Notre pays qui, au XVIIe siècle, a inventé l\'art de la conversation ignore encore celui du dialogue social, s\'alarme l\'historien et essayiste. Les conséquences d\'une telle immaturité pourraient devenir dramatiques au plan intérieur et pour la vocation internationale de la France, juge-t-il.', '2019-01-06 17:13:52', 0),
('https://www.lemonde.fr/actualite-medias/article/2019/01/09/philip-chetwynd-nouveau-directeur-de-l-information-a-l-afp_5406867_3236.html?xtor=RSS-3208', 'lemonde.fr', 'Philip Chetwynd, nouveau directeur de l’information à l’AFP', 'Le journaliste britannique remplace Michèle Léridon. C’est la première fois dans l’histoire de la troisième agence de presse mondiale que le poste n’est pas occupé par un Français.', '2019-01-09 15:57:35', 0),
('https://www.lemonde.fr/disparitions/article/2019/01/09/mort-de-l-artiste-nicola-l_5406865_3382.html?xtor=RSS-3208', 'lemonde.fr', 'Mort de l’artiste Nicola L.', 'L’artiste et performeuse avait su allier ses pratiques picturales et sculpturales avec une activation des objets par le corps vivant.', '2019-01-09 15:56:24', 0),
('https://www.lemonde.fr/economie/article/2019/01/09/a-las-vegas-google-gagne-la-bataille-de-la-visibilite_5406939_3234.html?xtor=RSS-3208', 'lemonde.fr', 'A Las Vegas, Google gagne la bataille de la visibilité', 'Le moteur de recherche californien est partout au CES de Las Vegas, la grand-messe de l’électronique grand public, qui se tient jusqu’au vendredi 11 janvier.', '2019-01-09 17:53:03', 0),
('https://www.lemonde.fr/economie/article/2019/01/09/aux-etats-unis-le-shutdown-n-arrete-pas-les-forages-petroliers_5406950_3234.html?xtor=RSS-3208', 'lemonde.fr', 'Aux Etats-Unis, le shutdown n’arrête pas les forages pétroliers', 'Malgré le blocage budgétaire, l’administration Trump continue de délivrer des permis de forage et poursuit les opérations pour les autoriser dans une zone protégée en Alaska.', '2019-01-09 18:15:34', 3),
('https://www.lemonde.fr/economie/article/2019/01/09/l-etat-va-ouvrir-a-la-concurrence-les-lignes-de-train-nantes-lyon-et-nantes-bordeaux_5406936_3234.html?xtor=RSS-3208', 'lemonde.fr', 'L’Etat va ouvrir à la concurrence les lignes de train Nantes-Lyon et Nantes-Bordeaux', 'Ces deux lignes font partie des quelques« trains d’équilibre du territoire » (TET) gérés par l’Etat, une convention le liant à la SNCF jusqu’à fin 2020.', '2019-01-09 17:34:17', 0),
('https://www.lemonde.fr/economie/article/2019/01/09/la-famille-mitterrand-entre-au-capital-de-christian-bourgois-editeur_5406873_3234.html?xtor=RSS-3208', 'lemonde.fr', 'La famille Mitterrand entre au capital de Christian Bourgois Editeur', 'Les deux partenaires n’ont pas précisé les détails de leur accord, qui a été annoncé mercredi 9 janvier.', '2019-01-09 16:00:32', 0),
('https://www.lemonde.fr/education/article/2019/01/09/les-stylos-rouges-aussi-veulent-faire-entendre-leur-colere_5406747_1473685.html?xtor=RSS-3208', 'lemonde.fr', 'Les« stylos rouges » aussi veulent faire entendre leur colère', 'En tête de liste des revendications des enseignants figure la revalorisation salariale.', '2019-01-09 11:32:45', 0),
('https://www.lemonde.fr/idees/article/2019/01/09/au-yemen-le-temps-des-saboteurs_5406700_3232.html?xtor=RSS-3208', 'lemonde.fr', 'Pour mettre finà la guerre au Yémen, un dialogue politique doit s’engager', 'Un premier accord de retrait militaire aété conclu sous l’égide de l’ONU à Stockholm, en décembre, mais il peine à être appliqué, note notre journaliste Louis Imbert.', '2019-01-09 10:43:24', 0),
('https://www.lemonde.fr/idees/article/2019/01/09/etats-unis-le-blocage-sur-le-mur-enfonce-un-peu-plus-le-pays-dans-l-orniere_5406754_3232.html?xtor=RSS-3208', 'lemonde.fr', 'Etats-Unis : le blocage sur le « mur » enfonce un peu plus le pays dans l’ornière', 'Editorial. L’opposition entre Donald Trump et les démocrates illustre l’incapacité des deux camps à discuter sereinement d’immigration depuis des années.', '2019-01-09 11:43:47', 0),
('https://www.lemonde.fr/idees/article/2019/01/09/l-impot-progressif-occupe-une-place-derisoire-dans-la-fiscalite-francaise_5406571_3232.html?xtor=RSS-3208', 'lemonde.fr', '« L’impôt progressif occupe une place dérisoire dans la fiscalité française »', 'On se trompe de débat fiscal : il faut baisser la CSG et accroître le produit de l’impôt sur le revenu, considère l’ancien haut fonctionnaire Pierre-Louis Rémy dans une tribune au « Monde ».', '2019-01-09 07:00:28', 0),
('https://www.lemonde.fr/idees/article/2019/01/09/loi-sur-la-prostitution-depenaliser-serait-une-catastrophe_5406832_3232.html?xtor=RSS-3208', 'lemonde.fr', 'Loi sur la prostitution : « Dépénaliser serait une catastrophe »', 'Saisi par neuf associations, en novembre 2018, le Conseil d’Etat a transmis au Conseil constitutionnel une question prioritaire de constitutionnalité portant sur la loi de 2016 qui pénalise les clients de la prostitution. Un collectif de médecins dans une tribune au « Monde » s’alarme d’une possible abrogation du texte.', '2019-01-09 15:00:34', 0),
('https://www.lemonde.fr/international/article/2019/01/09/brexit-les-deputes-obligent-theresa-may-a-proposer-un-plan-b-en-cas-de-rejet-de-l-accord_5406954_3210.html?xtor=RSS-3208', 'lemonde.fr', 'Brexit : les députés obligent Theresa May à proposer un « plan B » en cas de rejet de l’accord', 'Les députés ont voté un amendement qui oblige le gouvernement à présenter sous seulement trois jours un plan alternatif sur le Brexit en cas de rejet de l’accord de sortie.', '2019-01-09 18:30:22', 2),
('https://www.lemonde.fr/international/article/2019/01/09/en-suede-l-ex-handballeuse-loui-sand-met-fin-a-sa-carriere-et-annonce-etre-trans_5406712_3210.html?xtor=RSS-3208', 'lemonde.fr', 'En Suède, la handballeuse Loui Sand met fin à sa carrière et annonce être trans', 'L’ex-ailière gauche, qui évoluait en France, a annoncé sa retraite anticipée, lundi, avant d’en dévoiler les raisons dans un podcast.', '2019-01-09 10:49:27', 0),
('https://www.lemonde.fr/international/article/2019/01/09/la-turquie-confrontee-a-une-poussee-djihadiste-a-idlib_5406721_3210.html?xtor=RSS-3208', 'lemonde.fr', 'La Turquie confrontée à une poussée djihadiste à Idlib', 'Les rebelles soutenus par la Turquie perdent du terrain, alors que Moscou et Damas s’impatientent', '2019-01-09 11:03:41', 0),
('https://www.lemonde.fr/international/article/2019/01/09/les-gilets-jaunes-font-leur-apparition-en-grande-bretagne-pour-protester-contre-l-austerite_5406941_3210.html?xtor=RSS-3208', 'lemonde.fr', 'Les« gilets jaunes » font leur apparition en Grande-Bretagne pour protester contre l’austérité', 'Le mouvement anti-austérité People’s Assembly appelle à une « manifestation nationale » samedi à Londres, demandant aux participants de revêtir un gilet jaune.', '2019-01-09 17:56:20', 0),
('https://www.lemonde.fr/international/article/2019/01/09/les-migrants-bloques-au-large-de-malte-finalement-autorises-a-accoster_5406703_3210.html?xtor=RSS-3208', 'lemonde.fr', 'Les migrants bloqués en Méditerranée ont débarqué à Malte', 'A l’issue de longues négociations ayant impliqué des responsables au plus haut niveau dans les Etats membres, la majorité des rescapés vont être répartis dans neuf pays de l’Union européenne.', '2019-01-09 10:44:09', 0),
('https://www.lemonde.fr/international/article/2019/01/09/un-avion-de-chasse-a-disparu-entre-le-doubs-et-le-jura_5406856_3210.html?xtor=RSS-3208', 'lemonde.fr', 'Un Mirage 2000 a disparu entre le Doubs et le Jura', 'Les recherches dans cette vaste zone montagneuse sont rendues difficiles en raison de la neige et du manque de visibilité. Deux militaires se trouvent à bord.', '2019-01-09 15:49:45', 0),
('https://www.lemonde.fr/international/article/2019/01/09/une-demande-de-rancon-en-cryptomonnaie-pour-l-epouse-d-un-milliardaire-norvegien_5406859_3210.html?xtor=RSS-3208', 'lemonde.fr', 'Une demande de rançon en cryptomonnaie pour l’épouse d’un milliardaire norvégien', 'La police norvégienne avait jusqu’ici choisi de garder le secret sur la disparition d’Anne-Elisabeth Falkevik Hagen, vraisemblablement kidnappée à son domicile fin octobre.', '2019-01-09 15:52:46', 0),
('https://www.lemonde.fr/les-decodeurs/article/2019/01/09/comprendre-la-polemique-sur-le-retablissement-de-l-isf_5406788_4355770.html?xtor=RSS-3208', 'lemonde.fr', 'Rétablir l’ISF ? Le point sur cet impôt au cœur des revendications des « Gilets jaunes »', 'La possibilité d’un retour de l’impôt de solidarité sur la fortune a été écartée par le gouvernement.', '2019-01-09 13:06:01', 0),
('https://www.lemonde.fr/les-decodeurs/article/2019/01/09/les-chers-salaires-des-presidents-d-autorites-administratives-independantes_5406838_4355770.html?xtor=RSS-3208', 'lemonde.fr', 'Les chers salaires des présidents d’autorités administratives indépendantes', 'La publication du salaire de Chantal Jouanno en tant que présidente de la Commission nationale du débat public a provoqué de nombreuses réactions.', '2019-01-09 15:05:46', 0),
('https://www.lemonde.fr/les-decodeurs/article/2019/01/09/pme-ou-entreprises-du-cac-40-qui-beneficie-des-20-milliards-du-cice_5406893_4355770.html?xtor=RSS-3208', 'lemonde.fr', 'PME ou entreprises du CAC 40 : qui bénéficie des 20 milliards du CICE ?', 'Ces aides aux entreprises mises en place par François Hollande, qui fêtent leurs cinq ans, ont aussi profité aux petites entreprises.', '2019-01-09 16:42:48', 0),
('https://www.lemonde.fr/m-le-mag/article/2018/12/27/en-irak-l-eau-ne-coule-plus-dans-le-jardin-d-eden_5402710_4500055.html', 'lemonde.fr', 'En Irak, l’eau ne coule plus dans le « jardin d’Eden »', 'Au confluent du Tigre et de l’Euphrate, sécheresse et salinité ont eu raison des marais irakiens, poussant les habitants à l’exode.', '2018-12-27 15:00:28', 0),
('https://www.lemonde.fr/m-le-mag/article/2018/12/28/au-nouveau-club-des-cinq-on-se-promene-en-uber-et-on-se-chamaille-sur-le-brexit_5403154_4500055.html', 'lemonde.fr', 'Au nouveau« Club des cinq », on se promène en Uber et on se chamaille sur le Brexit', 'Gros succès de librairie en Grande-Bretagne, les versions adultes parodiques du célèbre « Club des cinq » d’Enid Blyton débarquent en français. Une résurrection nostalgique par l’auteur anglais Bruno Vincent.', '2018-12-28 14:51:37', 0),
('https://www.lemonde.fr/m-le-mag/article/2018/12/28/aux-champs-elysees-splendeurs-et-miseres-d-emmanuel-macron_5402911_4500055.html', 'lemonde.fr', 'Les Champs Elysées, théâtre du pouvoir macronien, de l’investiture aux « gilets jaunes »', 'L’ostentatoire avenue parisienne s’est transformée en rendez-vous des « gilets jaunes ». Un retour de bâton pour le président qui y a régulièrement mis en scène son pouvoir « jupitérien ».', '2018-12-28 06:23:43', 0),
('https://www.lemonde.fr/m-le-mag/article/2018/12/28/en-amazonie-le-combat-des-guarani-kaiowa-pour-sauver-ce-qu-il-reste-de-leur-terre_5403151_4500055.html', 'lemonde.fr', 'Au Brésil, le combat des Guarani-Kaiowá pour sauver ce qu’il reste de leur terre', 'D’un côté, des agriculteurs soutenus par le président brésilien Bolsonaro. De l’autre, un peuple autochtone attaché à sa culture. Un combat inégal.', '2018-12-28 14:49:54', 0),
('https://www.lemonde.fr/m-le-mag/article/2018/12/28/heureux-comme-un-legionnaire-en-corse_5403191_4500055.html', 'lemonde.fr', 'Heureux comme un légionnaire en Corse', 'De nombreux ex-légionnaires ont posé définitivement leur barda sur l’Île de Beauté et sont devenus plus corses que les Corses eux-mêmes. Une greffe qui a fini par prendre, même si la cohabitation avec les insulaires n’allait pas toujours de soi.', '2018-12-28 14:58:54', 0),
('https://www.lemonde.fr/m-le-mag/article/2018/12/28/le-site-de-la-gauche-radicale-lundimatin-booste-par-l-effet-gilets-jaunes_5403206_4500055.html', 'lemonde.fr', 'Le site de la gauche radicale« Lundimatin » boosté par l’effet « gilets jaunes »', 'Créée en 2014, la revue libertaire en ligne est dirigée par une rédaction anonyme et qui tient à le rester. Depuis le début du mouvement contestataire, elle connaît une forte audience, plus de 500 000 visites par mois.', '2018-12-28 15:06:18', 0),
('https://www.lemonde.fr/m-le-mag/article/2018/12/30/james-ivory-jeune-cineaste-de-90-ans_5403599_4500055.html', 'lemonde.fr', 'James Ivory, jeune cinéaste de 90 ans', 'Il a reçu, en mars, son premier Oscar pour le scénario de « Call Me by Your Name ». Un sacre pour le réalisateur américain qui n’a rien perdu de sa liberté de penser et d’agir.', '2018-12-30 06:27:15', 0),
('https://www.lemonde.fr/m-le-mag/article/2018/12/31/jonathan-cohen-joue-son-drole_5403773_4500055.html', 'lemonde.fr', 'Jonathan Cohen joue son drôle', 'Depuis Serge Le Mytho sur Canal+, il s’est imposé dans le rôle du meilleur pote. Aujourd’hui, l’acteur a droit à son « vrai » premier rôle dans « Premières vacances », qui sort mercredi.', '2018-12-31 06:33:17', 0),
('https://www.lemonde.fr/m-le-mag/article/2019/01/01/en-cisjordanie-l-autorite-palestinienne-aux-petits-soins-pour-la-basilique-de-bethleem_5404128_4500055.html', 'lemonde.fr', 'En Cisjordanie, l’Autorité palestinienne aux petits soins pour la basilique de Bethléem', 'L’Autorité palestinienne est le premier contributeur du projet de restauration de l’église qu’elle avait lancé en 2008. Une opération chargée de symbole mais qui vise aussi la revalorisation d’un édifice à fort potentiel touristique.', '2019-01-01 11:43:01', 0),
('https://www.lemonde.fr/m-le-mag/article/2019/01/01/sleepyme-ou-le-sommeil-fantasme_5404131_4500055.html', 'lemonde.fr', '#sleepyme ou le sommeil fantasmé', 'Les accros des réseaux sociaux ne cessent de mettre en scène leur vie à coups de hashtags et de selfies, lançant la tendance (ou pas). Cette semaine, des clichés à dormir debout.', '2019-01-01 12:05:12', 0),
('https://www.lemonde.fr/m-le-mag/article/2019/01/02/des-femmes-d-influence-et-un-homme_5404487_4500055.html', 'lemonde.fr', 'Des femmes d’influence et un homme', 'Chronique. Les prix de la Femme d’influence 2018 ont été remis à Paris, le 17 décembre. A l’honneur, Muriel Pénicaud, la présidente croate ainsi que le docteur Mukwege, l’homme qui répare les femmes. La chroniqueuse de « M » y était.', '2019-01-02 18:15:30', 0),
('https://www.lemonde.fr/m-le-mag/article/2019/01/02/quand-les-drones-jouent-les-nuisibles_5404370_4500055.html', 'lemonde.fr', 'Quand les drones jouent les nuisibles', 'Le 20 décembre 2018, un aéroport londonien a dû être fermé en raison de la présence de drones. Ces objets volants, pas toujours identifiés, jouent régulièrement les trouble-fêtes.', '2019-01-02 10:59:39', 0),
('https://www.lemonde.fr/m-le-mag/article/2019/01/04/chantal-jouanno-de-la-ceinture-noire-aux-gilets-jaunes_5405161_4500055.html', 'lemonde.fr', 'Chantal Jouanno, de la ceinture noire aux gilets jaunes', 'L’ancienne ministre des sports a été mandatée pour organiser le grand débat national censé répondre aux revendications des « gilets jaunes ». Un nouveau combat politique pour l’ex-karatéka.', '2019-01-04 12:26:56', 0),
('https://www.lemonde.fr/m-le-mag/article/2019/01/04/elle-est-comme-ca-theresa-may_5405114_4500055.html', 'lemonde.fr', 'Elle est commeça… Theresa May', 'Chronique. Chaque semaine, notre journaliste Philippe Ridet croque une personnalité qui fait l’actualité. Comme la première ministre britannique, qui a repoussé un vote de défiance au sein de sa majorité, le 12 décembre 2018.', '2019-01-04 11:40:32', 0),
('https://www.lemonde.fr/m-le-mag/article/2019/01/06/la-defense-de-l-occident-s-invite-dans-les-facs-australiennes_5405556_4500055.html', 'lemonde.fr', 'La défense de l’Occident s’invite dans les facs australiennes', 'Un nouveau cursus de l’université de Wollongong, près de Sydney, fait polémique. En cause, sa vocation, chargée de promouvoir la civilisation occidentale, et jugée conservatrice par de nombreux universitaires.', '2019-01-06 06:41:27', 0),
('https://www.lemonde.fr/m-le-mag/article/2019/01/07/andre-soulier-l-avocat-du-pouvoir_5405811_4500055.html', 'lemonde.fr', 'André Soulier, l’avocat du pouvoir', 'Le ténor du barreau lyonnais s’apprête à défendre le cardinal Barbarin, accusé d’avoir tu des agressions sexuelles sur mineurs.', '2019-01-07 07:15:38', 0),
('https://www.lemonde.fr/m-le-mag/portfolio/2018/12/28/les-guarani-kaiowa-fragiles-gardiens-d-une-terre-bresilienne-en-peril_5403224_4500055.html', 'lemonde.fr', 'Les Guarani-Kaiowá, fragiles gardiens d’une terre brésilienne en péril', 'Au Brésil, les Guarani-Kaiowá font face aux puissants fazendeiros, tenants d’une agriculture gorgée de pesticides. Le photographe Victor Moriyama a documenté leur lutte.', '2018-12-28 15:22:13', 0),
('https://www.lemonde.fr/m-le-mag/portfolio/2019/01/02/le-grand-defile-de-francois-morel_5404348_4500055.html', 'lemonde.fr', 'Le grand défilé de François Morel', 'Notre chroniqueur a encore frappé : après les vestiaires d’Alain Ducasse et de Charlotte Gainsbourg, Marc Beaugé scrute celui de l’acteur et humoriste, qui reprend au Théâtre du Rond-Point les textes (et non les costumes) de Raymond Devos.', '2019-01-02 10:06:27', 0),
('https://www.lemonde.fr/m-le-mag/portfolio/2019/01/09/carte-blanche-a-henri-cartier-bresson_5406818_4500055.html', 'lemonde.fr', 'Carte blancheà Henri Cartier-Bresson', 'Le photographe français ne se résume pas à son coup d’œil fulgurant et son art de saisir « l’instant décisif ». Jusqu’en mars, « M » ouvre sa carte blanche à une dimension plus contemplative de son œuvre. A redécouvrir à la fondation qui porte son nom, dans le Marais, à Paris.', '2019-01-09 14:25:33', 0),
('https://www.lemonde.fr/m-le-mag/portfolio/2019/01/09/le-grand-defile-de-sylvester-stallone_5406581_4500055.html', 'lemonde.fr', 'Le grand défilé de Sylvester Stallone', 'Notre chroniqueur a encore frappé : après les vestiaires de Juliette Binoche et Thierry Henry, Marc Beaugé scrute celui de l’acteur de légende, qui ne passe pas inaperçu dans « Creed II », en salle le 9 janvier.', '2019-01-09 07:15:56', 0),
('https://www.lemonde.fr/police-justice/article/2019/01/09/proces-barbarin-la-procureur-ne-requiert-aucune-condamnation_5406916_1653578.html?xtor=RSS-3208', 'lemonde.fr', 'Procès Barbarin : le parquet ne requiert aucune condamnation', 'Cette absence de réquisition intervient dans la logique du classement sans suite de l’affaire en 2016.', '2019-01-09 17:01:21', 0),
('https://www.lemonde.fr/politique/article/2019/01/09/face-aux-menaces-et-aux-violences-le-desarroi-des-deputes-la-republique-en-marche_5406554_823448.html?xtor=RSS-3208', 'lemonde.fr', 'Face aux menaces et aux violences, le désarroi des députés La République en marche', 'Permanences vandalisées, lettres d’insultes, intrusions dans les domiciles : les actes malveillants se multiplient depuis le début du mouvement des « gilets jaunes ».', '2019-01-09 06:40:20', 0),
('https://www.lemonde.fr/rugby/article/2019/01/09/xv-de-france-avec-paul-willemse-et-romain-ntamack-pour-preparer-le-tournoi-des-six-nations_5406880_1616937.html?xtor=RSS-3208', 'lemonde.fr', 'XV de France : avec Paul Willemse et Romain Ntamack pour préparer le Tournoi des six nations', 'Le sélectionneur Jacques Brunel a fait appel à cinq nouveaux joueurs parmi les 31 appelés. Dont le deuxième-ligne né en Afrique du Sud mais naturalisé français.', '2019-01-09 16:41:13', 0),
('https://www.lemonde.fr/societe/article/2019/01/09/agression-de-gendarmes-a-paris-l-ex-boxeur-defere-en-vue-d-une-comparution-immediate_5406776_3224.html?xtor=RSS-3208', 'lemonde.fr', 'Agression de gendarmesà Paris : l’ex-boxeur déféré en vue d’une comparution immédiate', 'Christophe Dettinger, soupçonné d’avoir agressé deux gendarmes samedi, doit être jugé ce mercredi en comparution immédiate.', '2019-01-09 12:25:10', 0),
('https://www.lemonde.fr/societe/article/2019/01/09/alexandre-benalla-a-rendu-ses-passeports-diplomatiques_5406947_3224.html?xtor=RSS-3208', 'lemonde.fr', 'Alexandre Benalla a rendu ses passeports diplomatiques', 'Les documents ontété saisis mercredi par les policiers dans le cadre de l’enquête ouverte le 29 décembre pour « abus de confiance » ou encore « usage sans droit d’un document justificatif d’une qualité professionnelle ».', '2019-01-09 17:59:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `TRss`
--

CREATE TABLE `TRss` (
  `RssUrl` varchar(150) NOT NULL,
  `WebsiteName` varchar(50) NOT NULL,
  `SiteUrl` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TRss`
--

INSERT INTO `TRss` (`RssUrl`, `WebsiteName`, `SiteUrl`) VALUES
('http://www.lefigaro.fr/rss/figaro_actualites.xml', 'lefigaro.fr', 'http://www.lefigaro.fr'),
('https://www.lemonde.fr/m-actu/rss_full.xml', 'lemonde.fr', 'https://www.lemonde.fr'),
('https://www.lemonde.fr/rss/une.xml', 'lemonde.fr', 'https://www.lemonde.fr');

-- --------------------------------------------------------

--
-- Table structure for table `TUser`
--

CREATE TABLE `TUser` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TUser`
--

INSERT INTO `TUser` (`Username`, `Password`, `Name`, `Surname`, `Mail`) VALUES
('lobellec', '$2y$10$VZjQiik1Kzqgl5SGntHun.e1RcqC90D9qepAQ.0ddME/9XYBshla2', 'louison', 'bellec', 'lobellec@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TNews`
--
ALTER TABLE `TNews`
  ADD PRIMARY KEY (`Url`);

--
-- Indexes for table `TRss`
--
ALTER TABLE `TRss`
  ADD PRIMARY KEY (`RssUrl`);

--
-- Indexes for table `TUser`
--
ALTER TABLE `TUser`
  ADD PRIMARY KEY (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
