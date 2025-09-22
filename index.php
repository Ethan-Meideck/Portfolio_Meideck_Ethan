<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio - Accueil</title>
    <link rel="stylesheet" href="CSS/index.css">
    <meta charset="utf-8">
    
    <!-- Import de la police ROBOTO -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body class="fond">

    <!-- Header -->

    <header>
        <nav>
            <ul class="menu">
                <li class="logo">
                    <img src="Images\Signature.png" id="signature">
                </li>
                <li>
                    <a href="index.html" id="accueil">Accueil</a>
                </li>
                <li>
                    <a href="a-propos.html" d="a-propos">À propos</a>
                </li>
                <li>
                    <a href="projets.html" id="projets">Projets</a>
                </li>
                <li>
                    <a href="contact.html" id="contact">Contact</a>
                </li>
            </ul>
        </nav>
        <span id="saut_separateur"></span>
    </header>

    <!-- Contenu -->

    <main>
        <div class="contenu">
            <span id="saut_menu"></span>
            
            <!-- Accueil -->
            <div class="Accueil">
                <div class="titre_presentation">
                    <p id="nom">Ethan Meideck</p>
                    <p id="metier">Développeur Back-end</p>
                </div>
                <span id="saut_presentation"></span>
                <div class="presentation">
                    <div>
                        <img src="Images\Photo pro.jpeg" id="photo-pro">
                    </div>
                    <div>
                        <p>Bonjour à tous !
                            Moi, c’est Ethan, j’ai 18 ans et je suis actuellement en 1ère année 
                            de BTS SIO, option SLAM, en alternance. Vous pouvez retrouver mes
                            projets en cliquant sur le bouton juste en dessous 😄</p>
                        <a id="presentation-bouton" href="a-propos.html">Projets</a>
                    </div>
                </div>
                <br>
                <div class="Projets_experiences">
                    <div class="Experiences_preview">
                        <p id="Experience__preview_title">Mes Expériences</p>
                        <p id="Experience_preview_text">Retrouvez mes 2 ans d'expérience en alternance ainsi 
                            que mes différents stages en cliquant sur ce bouton !</p>
                    </div>
                    <div class="Projets_preview">
                        <p id="Projets_preview_title">Mes Projets</p>
                        <p id="Experience_preview_text">Retrouvez mes différents projets détaillés en cliquant ici !</p>
                    </div>
                </div>
            </div>

        <!-- Projets -->
             <!-- Projet à renommer ! -->
             <div id="Projets">
                <!-- Projets dev -->
                <div class="Projets_dev">
                    <p id="Projet_dev_title">Projets développement</p>
                    <div id="Projet_1_dev_div">
                        <p id="Projet_1_dev_title">Projet 1</p>
                        <p id="Projet_1_dev_summary">Résumé texte</p>
                        <a id="projet_1_dev_button" href="">Plus d'informations</a>
                    </div>
                    <div id="Projet_2_dev_div">
                        <p id="Projet_2_dev_title">Projet 2</p>
                        <p id="Projet_2_dev_summary">Résumé texte</p>
                        <a id="projet_2_dev_button" href="">Plus d'informations</a>
                    </div>
                    <div id="Projet_3_dev_div">
                        <p id="Projet_3_dev_title">Projet 3</p>
                        <p id="Projet_3_dev_summary">Résumé texte</p>
                        <a id="projet_3_dev_button" href="">Plus d'informations</a>
                    </div>
                </div>

                <!-- Projets réseaux -->
                <div class="Projets_reseau">
                    <p id="Projet_reseau_title">Projets réseau</p>
                    <p id="Projet_1_reseau_summary">Résumé texte</p>
                    <div id="Projet_1_reseau_div">
                        <p id="Projet_1_reseau_title">Projet 1</p>
                        <p id="Projet_1_reseau_summary">Résumé texte</p>
                        <a id="projet_1_reseau_button" href="">Plus d'informations</a>
                    </div>
                    <div id="Projet_2_reseau_div">
                        <p id="Projet_2_reseau_title">Projet 2</p>
                        <p id="Projet_1_reseau_summary">Résumé texte</p>
                        <a id="projet_2_reseau_button" href="">Plus d'informations</a>
                    </div>
                    <div id="Projet_3_reseau_div">
                        <p id="Projet_3_reseau_title">Projet 3</p>
                        <p id="Projet_1_reseau_summary">Résumé texte</p>
                        <a id="projet_3_reseau_button" href="">Plus d'informations</a>
                    </div>
                </div>
             </div>

        <!-- Compétences -->
            <div id="Competences">
                <div id="Python_div">
                    <img id="Python_logo" src="Images\Logo_python.png">
                    <p id="Python_text">Python</p>
                </div>
            <div id="HTML_div">
                <img id="HTML_logo" src="Images\Logo_html.svg" width="128px" height="128px">
                <p id="HTML_text">HTML</p>
            </div>
            <div id="CSS_div">
                <img id="CSS_logo" src="Images\Logo_css.svg" width="128px" height="128px">
                <p id="CSS_text">CSS</p>
            </div>
            <div id="Cs_div">
                <img id="Cs_logo" src="Images\Logo_Cs.svg" width="128px" height="128px">
                <p id="Cs_text">Cs</p>
            </div>
            <div id="PHP_div">
                <img id="PHP_logo" src="Images\Logo_php.svg" width="128px" height="128px">
                <p id="PHP_text">PHP</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div>
            <small class="footer_text">
                <ul class="footer_menu">
                    <li id="li-fast-nav">
                        <b id="fast-nav">Navigation rapide</b>
                    </li>
                    <li>
                        <a href="index.html">Accueil</a>
                    </li>
                    <li>
                        <a href="a-propos.html">À propos</a>
                    </li>
                    <li>
                        <a href="projets.html">Projets</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </small>
        </div>

        <div class="footer-right">
            <div class="footer_icons">
                <a href="https://www.linkedin.com/in/ethan-meideck" target="_blank">
                    <img id="linkedin-icon" src="Images\LinkedIn_icon.svg"></img>
                </a>
                <a class="footer_icons" href="https://github.com/EthanMeideck" target="_blank">
                    <img id="github-icon" src="Images\GitHub_icon.svg"></img>
                </a>
            </div>
            <div>
                <p id="copyright">© 2025 -Ethan Meideck - Tous droits réservés</p>
            </div>
        </div>
    </footer>

</body>
</html>