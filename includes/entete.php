<?php
//Langues disponibles
$languesDisponibles = [];
$nomsDesLangues = [];
// Récupérer le contenu du dossier textes
$contenuDossierTextes = scandir('textes');
// Pour chaque dossier présent, on sépare le nom en deux parties le code de langue et le nom de la langue
foreach ($contenuDossierTextes as $nomDossier) {
    if ($nomDossier != '.' && $nomDossier != '..') {
        $codeEtNomLangue = explode('-', $nomDossier);
        //Tableau des code de langues dispos
        $languesDisponibles[] = $codeEtNomLangue[0];
        // Création d'un tableau associatif 'code langue' => 'langue'
        $nomsDesLangues[$codeEtNomLangue[0]] = $codeEtNomLangue[1];
    }
}
//Choisir une langue par défaut
$langueChoisie = 'fr';
// Si il y a un cookie de langue déjà établie, on prend cette langue si le cookie est valable
if (isset($_COOKIE['veloIntemporel_langue']) && in_array($_COOKIE['veloIntemporel_langue'], $languesDisponibles)) {
    $langueChoisie = $_COOKIE['veloIntemporel_langue'];
}
//Si l'utilisateur choisi une langue en cliquant un lien dans la navigation
if (isset($_GET['langue']) && in_array($_GET['langue'], $languesDisponibles)) {
    $langueChoisie = $_GET['langue'];
    //Retenir le choix de langue de l'utilisateur, dans un cookie
    setcookie('veloIntemporel_langue', $langueChoisie, time() + 365 * 24 * 60 * 60 * 2);
}
// on inclue les textes de la langue choisie
include("textes/$langueChoisie-$nomsDesLangues[$langueChoisie]/i18n.txt.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/carousel.css">
    <title>Vélo Intemporel | Magasin de vélo - Réparation - Café </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,600;0,700;0,900;1,600;1,800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <header>
        <nav>
            <!-- Liens Menu Burger -->
            <div class="menuBurger">
                <img class="menuBurgerIcone" src="images/icones/fontawesome/svgs/solid/bars.svg">
                <div class="liensBurgerMenu">
                    <ul>
                        <li>
                            <a href=""><?= $lienAccueil; ?></a>
                            <div class="barreNavAnime"></div>
                        </li>
                        <li>
                            <a href=""><?= $lienService; ?></a>
                            <div class="barreNavAnime"></div>
                        </li>
                        <li>
                            <a href=""><?= $lienMagasin; ?></a>
                            <div class="barreNavAnime"></div>
                        </li>
                        <li>
                            <a href=""><?= $lienCafe; ?></a>
                            <div class="barreNavAnime"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Logo -->
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.61 284.33">
                    <defs>
                        <style>
                            .cls-1,
                            .cls-2 {
                                stroke: #231f20;
                                stroke-miterlimit: 10;
                            }

                            .cls-2 {
                                fill: #55c2b3;
                            }

                            .cls-3 {
                                font-size: 161.83px;
                            }

                            .cls-3,
                            .cls-4 {
                                fill: #fff;
                                font-family: TeluguMN, Telugu MN;
                            }

                            .cls-4 {
                                font-size: 161.83px;
                            }

                            .cls-5 {
                                fill: #231f20;
                            }
                        </style>
                    </defs>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <path class="cls-1" d="M.51,34.76S42.87.5,107.43.5,212.09,34.76,212.09,34.76c-19.2,199-105.79,213.08-105.79,213.08S10.49,229.77.51,34.76Z" />
                            <path class="cls-2" d="M107.24,21.54C53.66,21.54,18.51,50,18.51,50,26.79,211.81,106.3,226.8,106.3,226.8S178.16,215.09,194.09,50C194.09,50,160.82,21.54,107.24,21.54Z" /><text class="cls-3" transform="translate(45.88 178.06)">V</text><text class="cls-4" transform="matrix(0.91, 0.4, -0.4, 0.91, 97.3, 171.58)">I</text>
                            <path class="cls-5" d="M129.29,52.67S118.62,57.59,117.8,56c-.61-1.22-.77-7.42,0-10.87-2,2.5-5.48,5.94-6.52,4.51-1.65-2.26-4.93-19.5-4.93-19.5s-3.28,17.24-4.93,19.5c-1,1.43-4.55-2-6.52-4.51.72,3.45.56,9.65,0,10.87-.82,1.64-11.49-3.28-11.49-3.28l6.36,6.16s-2,13.13,1.23,9.23,15.4-6.77,15.4-6.77,12.11,2.87,15.4,6.77,1.23-9.23,1.23-9.23Z" />
                            <path class="cls-5" d="M118.82,42.81c-.47.22-.82,1.08-1.07,2.27C118.88,43.64,119.5,42.51,118.82,42.81Z" />
                            <path class="cls-5" d="M93.78,42.81c-.68-.3-.06.83,1.07,2.27C94.6,43.89,94.25,43,93.78,42.81Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <!-- Liens Desktop -->
            <div class="liens extraBold">
                <ul>
                    <li>
                        <a href=""><?= $lienAccueil; ?></a>
                        <div class="barreNavAnime"></div>
                    </li>
                    <li>
                        <a href=""><?= $lienService; ?></a>
                        <div class="barreNavAnime"></div>
                    </li>
                    <li>
                        <a href=""><?= $lienMagasin; ?></a>
                        <div class="barreNavAnime"></div>
                    </li>
                    <li>
                        <a href=""><?= $lienCafe; ?></a>
                        <div class="barreNavAnime"></div>
                    </li>
                </ul>
            </div>
            <!-- Langues -->
            <div class="langues">
                <div class="selecteurLangue">
                    <img src="images/icones/drapeaux/<?= $langueChoisie; ?>-flag.svg">
                    <h3><?= strtoupper($langueChoisie); ?></h3>
                </div>
                <div class="languesDisponibles">
                    <a href="?langue=fr" class="selecteurLangue">
                        <img src="images/icones/drapeaux/fr-flag.svg">
                        <h3>FR</h3>
                    </a>
                    <a href="?langue=es" class="selecteurLangue">
                        <img src="images/icones/drapeaux/es-flag.svg">
                        <h3>ES</h3>
                    </a>
                    <a href="?langue=en" class="selecteurLangue">
                        <img src="images/icones/drapeaux/en-flag.svg">
                        <h3>EN</h3>
                    </a>
                </div>
            </div>
        </nav>
    </header>