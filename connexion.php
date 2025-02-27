<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site code de la route">
    <meta name="keywords" content="code la route, sécurité routière, panneaux de signalisation, permis">
    <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Préventiv'auto - Connexion</title>
</head>

<body id="page">
    <!-- HEADER => Navigation + logo -->
    <header>
        <div id="logo">
            <img src="img/securiteroutiere.png" alt="logo du site">
            <h1><a href="#"><i class="fas fa-user"></i></a>Préventiv'<span>Auto</span></h1>
        </div>
        <nav>
            <div class="menu_hamburger">
                <label for="nav_btn" class="nav_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
            </div>
            <input type="checkbox" id="nav_btn">
            <ul id="menu">
                <li><a href="index.php"><i class="fas fa-home"></i>Accueil</a></li>
                <li class="menu-dropdown"><a href="">Panneaux <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li>
                            <a href="panneaux_dangers.php"><i class="fas fa-angle-double-right"></i> Type A</a>
                        </li>
                        <li>
                            <a href="panneaux_priorite.php"><i class="fas fa-angle-double-right"></i> Type AB</a>
                        </li>
                        <li class="second">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type B <i class="fas fa-caret-down"></i></a>
                            <ul class="second_dropdown">
                                <li><a href="panneaux_interdiction.php"><i class="fas fa-angle-double-right"></i> Panneaux d'interdiction</a></li>
                                <li><a href="panneaux_obligation.php"><i class="fas fa-angle-double-right"></i> Panneaux d'obligation</a></li>
                                <li><a href="panneaux_finPrescription.php"><i class="fas fa-angle-double-right"></i> Panneaux de fin de prescription</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="panneaux_indications.php"><i class="fas fa-angle-double-right"></i> Type C</a>
                        </li>
                        <li>
                            <a href="panneaux_services.php"><i class="fas fa-angle-double-right"></i> Type CE</a>
                        </li>
                        <li>
                            <a href="panneaux_direction.php"><i class="fas fa-angle-double-right"></i> Type D</a>
                        </li>
                        <li>
                            <a href="panneaux_jalonnement.php"><i class="fas fa-angle-double-right"></i> Type Dp</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-angle-double-right"></i> Type Dv</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-angle-double-right"></i> Type Dc</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-angle-double-right"></i> Type E</a>
                        </li>

                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type EB</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type F</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type G</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type H</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type ID</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type J</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type Ak, K, KC et KD</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type M</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type R</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type SE</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type SR</a>
                        </li>
                        <li class="hide_responsive">
                            <a href=""><i class="fas fa-angle-double-right"></i> Type X</a>
                        </li>

                    </ul>
                </li>

                <li class="menu-dropdown"><a href="">Permis <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li>
                            <a href="page_type_de_permis.php"><i class="fas fa-angle-double-right"></i> Type de permis</a>
                        </li>
                        <li>
                            <a href="page_permis1e.php"><i class="fas fa-angle-double-right"></i> Permis à 1€</a>
                        </li>
                        <li>
                            <a href="page_conduiteAccompagne.php"><i class="fas fa-angle-double-right"></i> Conduite Accompagnée</a>
                        </li>
                        <li>
                            <a href="permis_a_points.php"><i class="fas fa-angle-double-right"></i> Permis à points</a>
                        </li>
                    </ul>
                </li>
                <li><a href="dangers.php">Dangers</a></li>
                <li><a href="autoecole.php">Auto-école</a></li>
                <li><a href="contacts.php">Contact</a></li>
            </ul>

        </nav>
        <div id="connexion">
            <p><a href="#"><i class="fas fa-user"></i>Connexion</a></p>
        </div>
    </header>

    <section class="login_page">
        <div class="login">
            <div class="main_icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="login_form">
                <form action="#" method="post">
                    <div class="login_input">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Adresse Mail" required>
                    </div>
                    <div class="login_input">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="login_check">
                        <label for="checkbox" class="checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" checked>
                            Se souvenir de moi
                        </label>
                    </div>
                    <div class="bottom">
                        <input type="submit" value="Se connecter">
                    </div>
                    <div class="links">
                        <p><a href="#">Mot de passe oublié</a></p>
                        <p class="right"><a href="#">S'inscrire</a></p>
                    </div>
                </form>
            </div>
            <div class="reseaux_sociaux">
                <ul>
                    <li>Ou se connecter avec :</li>
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="google_plus">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <div class="contact">
            <h3>Nous contacter</h3>
            <ul>
                <li><a href="#">Email: support@securiteroutiere.com</a></li>
                <li>Téléphone: 03 21 86 54 96</li>
                <li>Fax: 03 21 52 53 85</li>
            </ul>
            <div class="social">
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="infos">
            <h3>Autres informations</h3>
            <ul>
                <li>
                    <a href="sitemap.php">Site map</a>
                </li>
                <li>
                    <a href="confidentialite.php">Mentions légales</a>
                </li>
            </ul>
        </div>
        <div class="a_propos">
            <h3>Préventiv'auto</h3>
            <p style="color:white;"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis repellendus animi sed iusto tempora, obcaecati, fugit reiciendis, sit sint ad dolorem nemo dolores repellat! Voluptates impedit eveniet facere doloribus earum? </p>
        </div>
    </footer>
</body>

</html>