<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Code de la route</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site code de la route">
    <meta name="keywords" content="code la route, sécurité routière, panneaux de signalisation, permis">
    <link href="img/4235Auto Ecole2.ico" rel="icon" type="image/x-icon" />
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
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Panneaux de fin de prescription</a></li>
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
                        <div class="hide_responsive">
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type EB</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type F</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type G</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type H</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type ID</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type J</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type Ak, K, KC et KD</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type M</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type R</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type SE</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type SR</a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Type X</a>
                            </li>
                        </div>
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
        <img src="img/panneaux-infos.jpg" alt="image de route">
        <div class="bloc_title">
            <h2>PANNEAUX DE FIN DE PRESCRIPTION</h2>
            <hr>
            <p>
                EN FRANCE IL EXISTE 29 PANNEAUX DE FIN DE PRESCRIPTION
            </p>

        </div>
        <div id="up">
            <a href="#page"><i class="fas fa-chevron-up"></i></a>
        </div>
    </section>

    <section id="body">
        <div class="container">

            <div class="panneaux_intro">
                <h2>Les panneaux de fin de prescription</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ad repellat nostrum rerum ab quisquam rem ipsa sunt expedita ut explicabo, cupiditate, aspernatur culpa! A porro repellat repudiandae reiciendis perspiciatis! Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Doloremque commodi earum incidunt nostrum optio odio obcaecati dolorum reprehenderit iste cumque minima, natus perspiciatis porro. Nulla autem sapiente iusto quia est.</p>

            </div>
            <div class="panneaux_container">
                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B31.svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21-1</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ullam aspernatur? Unde, nobis? Culpa ea, impedit unde maiores doloremque veritatis dolores adipisci, perspiciatis nostrum, sint tempora quos. Dolorum, reprehenderit
                                alias? <br> <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France" style="color:blue;"> >> Lire La suite</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B33_(50).svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21-2</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut officiis voluptatem dolore earum, nesciunt qui ad dicta repellendus deserunt? Iste quos mollitia quidem ex amet. Officia corrupti reiciendis nihil consequuntur! <br>                                <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France" style="color:blue;"> >> Lire La suite</a></p>
                        </div>
                    </div>
                </div>

                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B34.svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21a1</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime numquam non possimus ducimus eaque nisi deserunt quis, eligendi officiis iure placeat, iste, quasi natus in! Pariatur sint ipsa harum ex. <br> <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France"
                                    style="color:blue;"> >> Lire La suite</a></p>
                        </div>
                    </div>
                </div>

                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B34a.svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21a2</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum veniam doloremque eaque quos explicabo neque facilis, vel recusandae accusantium rem laborum culpa aut, officiis velit id expedita iure perspiciatis sunt.
                                <br> <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France" style="color:blue;"> >> Lire La suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B35.svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21b</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus possimus cupiditate, alias vitae aperiam, facilis voluptatibus atque culpa repellat cum omnis dolorum quo consectetur deleniti dolor natus esse blanditiis et.
                                <br> <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France" style="color:blue;"> >> Lire La suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B39.svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21c1</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora qui facere expedita quidem repudiandae aperiam necessitatibus quae natus quaerat atque, nisi reprehenderit assumenda totam deleniti ea iusto impedit rerum ullam.
                                <br> <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France" style="color:blue;"> >> Lire La suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B40.svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21c2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsam repellendus commodi debitis unde saepe voluptatum, blanditiis accusamus eum minus corporis animi voluptatibus culpa dolorem reprehenderit, exercitationem
                                libero quis voluptas! <br> <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France" style="color:blue;"> >> Lire La suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B41.svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21d1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis nostrum quas necessitatibus modi impedit exercitationem nulla doloremque molestias corrupti dolorum, saepe tempora, sit minus repudiandae laborum? Consequatur
                                natus perferendis fugiat! <br> <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France" style="color:blue;"> >> Lire La suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="groupement_panneaux">
                    <div class="panneaux__content">
                        <div class="panneaux__img"><img src="img/B42.svg" alt="panneau a1"></div>
                        <hr>
                        <div class="panneau__description">
                            <h4>B21d2</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae enim illum fugiat consequuntur eveniet iusto aliquam temporibus recusandae. Veniam corrupti tempora sint assumenda amet at facilis iure fugiat quos cumque! <br>                                <a href="https://fr.wikipedia.org/wiki/Panneau_de_signalisation_routi%C3%A8re_de_prescription_en_France" style="color:blue;"> >> Lire La suite</a></p>
                        </div>
                    </div>
                </div>
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