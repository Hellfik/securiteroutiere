<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Code de la route - Accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site code de la route">
    <meta name="keywords" content="code la route, sécurité routière, panneaux de signalisation, permis">
    <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body id="page">
    <!-- HEADER => Navigation + logo -->
    <header>
        <div id="logo">
            <img src="img/securiteroutiere.png" alt="logo du site">
            <h1><a href="connexion.php"><i class="fas fa-user"></i></a>Préventiv'<span>Auto</span></h1>
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
                <li><a href=#><i class="fas fa-home"></i>Accueil</a></li>
                <li class="menu-dropdown"><a href="#">Panneaux <i class="fas fa-caret-down"></i></a>
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
            <p><a href="connexion.php"><i class="fas fa-user"></i>Connexion</a></p>
        </div>
    </header>

    <!-- SECTION ACCUEIL-->
    <section id="bloc_accueil">
        <img src="img/route.jpg" alt="image de route">
        <div class="bloc_title">
            <h2>PREVENTIV'AUTO</h2>
            <p>
                Vous trouverez toutes les informations necessaires concernant la sécurité routière, <br>les différents type de permis ou encore la signification de certains panneaux du code de la route.</p>
            <a href="https://www.ornikar.com/code/gratuit" class="reviser_code" target="_blank">Réviser le code</a>
            <a href="page_permis1e.php">Permis à un 1€</a>
        </div>
        <div id="up">
            <a href="#page"><i class="fas fa-chevron-up"></i></a>
        </div>
    </section>

    <!-- SECTION FAMILLE PANNEAUX-->
    <section id="body">
        <div class="container">
            <div class="bienvenue">
                <h2>Bienvenue</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aut fugiat ullam praesentium aspernatur animi minima, fugit voluptates totam, quasi ipsam provident ipsa maxime nobis odit ratione laudantium obcaecati deserunt! <br> Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis veniam alias minus possimus reprehenderit fuga maxime beatae, facilis voluptate omnis esse delectus magni harum aspernatur velit nisi nostrum fugiat accusamus. <br> Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Ipsam maxime debitis assumenda nihil distinctio nulla optio fugiat delectus blanditiis perferendis voluptates hic commodi, illo voluptatum. Repudiandae natus fugit eveniet expedita?
                </p>
            </div>
            <section id="bloc_panneaux">
                <div class="titre_section">
                    <h2>Les familles de panneaux</h2>
                    <div>
                        <hr>
                        <i class="fa fa-circle"></i>
                    </div>
                </div>
                <div class="panneaux">
                    <div class="panneau">

                        <div class="panneau_description">
                            <h2>01</h2>
                            <h3>Famille Interdiction</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati porro voluptate iure minima ducimus, possimus odit quaerat quasi, quibusdam debitis doloremque eligendi impedit magni quis asperiores aliquid itaque ipsum
                                eaque.
                            </p>
                            <a href="panneaux_interdiction.php">Plus d'infos</a>
                        </div>
                    </div>

                    <div class="panneau">
                        <div class="panneau_description">
                            <h2>02</h2>
                            <h3>Famille Indication</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati porro voluptate iure minima ducimus, possimus odit quaerat quasi, quibusdam debitis doloremque eligendi impedit magni quis asperiores aliquid itaque ipsum
                                eaque.
                            </p>
                            <a href="panneaux_indications.php">Plus d'infos</a>
                        </div>
                    </div>

                    <div class="panneau">
                        <div class="panneau_description">
                            <h2>03</h2>
                            <h3>Famille Obligation</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati porro voluptate iure minima ducimus, possimus odit quaerat quasi, quibusdam debitis doloremque eligendi impedit magni quis asperiores aliquid itaque ipsum
                                eaque.
                            </p>
                            <a href="panneaux_obligation.php">Plus d'infos</a>
                        </div>
                    </div>

                    <div class="panneau">
                        <div class="panneau_description">
                            <h2>04</h2>
                            <h3>Famille Fin de prescription</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati porro voluptate iure minima ducimus, possimus odit quaerat quasi, quibusdam debitis doloremque eligendi impedit magni quis asperiores aliquid itaque ipsum
                                eaque.
                            </p>
                            <a href="panneaux_finPrescription.php">Plus d'infos</a>
                        </div>
                    </div>

                    <div class="panneau">
                        <div class="panneau_description">
                            <h2>05</h2>
                            <h3>Famille Danger</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati porro voluptate iure minima ducimus, possimus odit quaerat quasi, quibusdam debitis doloremque eligendi impedit magni quis asperiores aliquid itaque ipsum
                                eaque.
                            </p>
                            <a href="panneaux_dangers.php">Plus d'infos</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION ACTUALITES -->
            <section id="bloc_actualites">
                <div class="titre_section">
                    <h2>Les dernières actualités de la région </h2>
                    <div>
                        <hr>
                        <i class="fa fa-circle"></i>
                    </div>
                </div>
                <div class="actualite">
                    <img src="img/actu1.png" alt="new">
                    <aside>
                        <h3>Bilan définitif de l’accidentalité routière 2018</h3>
                        <hr>
                        <p class="lettrine">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quasi ratione in nesciunt quam architecto consequuntur adipisci officiis aliquam, sunt nobis reiciendis cumque ab est laborum eius voluptatibus? Nisi, sed!</p>
                        <p style="font-style:italic;">Posté par Fayeulle Mickael, le 12 septembre 2018 </p>
                    </aside>
                </div>
                <hr class="separator">
                <div class="actualite">
                    <img src="img/appel_projet_securite_routiere_reference.jpg" alt="new">
                    <aside>
                        <h3>7eme édition : la sécurité routière c'est notre affaire </h3>
                        <hr>
                        <p class="lettrine">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quasi ratione in nesciunt quam architecto consequuntur adipisci officiis aliquam, sunt nobis reiciendis cumque ab est laborum eius voluptatibus? Nisi, sed!</p>
                        <p style="font-style:italic;">Posté par Fayeulle Mickael, le 12 septembre 2018 </p>
                    </aside>
                </div>
                <hr class="separator">
                <div class="actualite">
                    <img src="img/actu2.png" alt="new">
                    <aside>
                        <h3>12e Journée nationale de sécurité routière aux passages à niveau</h3>
                        <hr>
                        <p class="lettrine">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quasi ratione in nesciunt quam architecto consequuntur adipisci officiis aliquam, sunt nobis reiciendis cumque ab est laborum eius voluptatibus? Nisi, sed!</p>
                        <p style="font-style:italic;">Posté par Fayeulle Mickael, le 12 septembre 2018 </p>
                    </aside>
                </div>

            </section>

            <section id="bloc_dangers">
                <div class="titre_section">
                    <h2>Les dangers</h2>
                    <div>
                        <hr>
                        <i class="fa fa-circle point3"></i>
                    </div>
                </div>
                <div id="dangers_boxes">
                    <div class="box">
                        <div class="thumb">
                            <img src="img/alcool.jpg" alt="verre d'alcool">
                        </div>
                        <div class="details">
                            <div class="content">
                                <i class="fas fa-glass-cheers"></i>
                                <h3>L'alcool</h3>
                                <a href="dangers.php#danger2">Plus d'infos</a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="thumb">
                            <img src="img/telephone.jpg" alt="danger_telephone">
                        </div>
                        <div class="details">
                            <div class="content">
                                <i class="fas fa-phone-slash"></i>
                                <h3>Téléphone</h3>
                                <a href="dangers.php#danger1">Plus d'infos</a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="thumb">
                            <img src="img/speed.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="content">
                                <i class="fas fa-tachometer-alt"></i>
                                <h3>Vitesse</h3>
                                <a href="dangers.php#danger3">Plus d'infos</a>
                            </div>
                        </div>
                    </div>

                </div>


            </section>
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
            <p style="color:white;">Made with ❤️ by Fayeulle Mickael</p>
        </div>
    </footer>
</body>

</html>