<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Code de la route - Auto écoles</title>
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
                <li><a href="#">Auto-école</a></li>
                <li><a href="contacts.php">Contact</a></li>
            </ul>

        </nav>
        <div id="connexion">
            <p><a href="connexion.php"><i class="fas fa-user"></i>Connexion</a></p>
        </div>
    </header>
    <!-- SECTION ACCUEIL-->
    <section id="bloc_accueil">
        <img src="img/autoecole1.jpg" alt="image auto ecole">
        <div class="bloc_title">
            <h2>Informations pratiques</h2>
            <hr>
            <p>Toutes les auto-écoles de l'arrondissement de Montreuil</p>
        </div>
        <div id="up">
            <a href="#page"><i class="fas fa-chevron-up"></i></a>
        </div>
        <nav class="side_nav">
            <div><a href="#etaples">Auto Ecole Etaples</a> <i class="fas fa-arrow-circle-right"></i></div>
            <div><a href="#montreuil">Auto Ecole Montreuil</a> <i class="fas fa-arrow-circle-right"></i></div>
            <div><a href="#hesdin">Auto Ecole Hesdin </a><i class="fas fa-arrow-circle-right"></i></div>
            <div><a href="#berk">Auto Ecole Berk-sur-mer</a><i class="fas fa-arrow-circle-right"></i></div>
        </nav>
    </section>

    <!-- SECTION AUTO ECOLE-->
    <section id="auto_ecoles">

        <div class="container">
            <div id="etaples" class="ville">
                <h2>
                    ETAPLES SUR MER
                </h2>
                <div class="auto_ecole">
                    <div>
                        <h3>Auto-école Stéphane CAYET</h3>
                    </div>
                    <div class="informations">
                        <div class="coordonnees">
                            <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                            <p><span><i class="fas fa-map-pin"></i></span> 114 rue de Rosamel , 62630 ETAPLES SUR MER </p>
                            <p><span><i class="fas fa-phone"></i></span> 06 14 60 25 52</p>
                            <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-%C3%A9cole-stephane-cayet-377916052372479/</p>
                            <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i>
                            </p>
                        </div>
                        <div class="plan_logo">
                            <img src="img/auto_ecole_etaples3.png" alt="auto ecole Josselin Ramet">
                            <img src="img/stephanecayet.png" alt="facade auto ecole stephane cayet">
                        </div>
                    </div>
                </div>
                <div class="auto_ecole">
                    <div>
                        <h3>Auto-école Michel Merlaud</h3>
                    </div>
                    <div class="informations">
                        <div class="coordonnees">
                            <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                            <p><span><i class="fas fa-map-pin"></i></span> 96 rue ded Rosamel, 62630 ETAPLES SUR MER </p>
                            <p><span><i class="fas fa-phone"></i></span> 03 21 94 74 70</p>
                            <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-%C3%A9cole-michel-merlaud-377916052372479/</p>
                            <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i><i class="fas fa-motorcycle"></i></p>
                        </div>
                        <div class="plan_logo">
                            <img src="img/auto_ecole_etaples2.png" alt="auto ecole Josselin Ramet">
                            <img src="img/michelmerlaud.png" alt="façade auto ecole michel merlaud">
                        </div>
                    </div>
                </div>
                <div class="auto_ecole">
                    <div>
                        <h3>Auto-école Frédéric</h3>
                    </div>
                    <div class="informations">
                        <div class="coordonnees">
                            <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                            <p><span><i class="fas fa-map-pin"></i></span> 15 rue de Rosamel, 62630 ETAPLES SUR MER </p>
                            <p><span><i class="fas fa-phone"></i></span> 06 09 95 20 11</p>
                            <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-%C3%A9cole-frédéric-377916052372479/</p>
                            <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i></p>
                        </div>
                        <div class="plan_logo">
                            <img src="img/auto_ecole_etaples4.png" alt="auto ecole Josselin Ramet">
                            <img src="img/logo4.png" alt="logo auto ecole frederic">
                        </div>
                    </div>
                </div>
            </div>

            <div id="montreuil" class="ville">
                <h2>
                    MONTREUIL SUR MER
                </h2>
                <div class="auto_ecole">
                    <div>
                        <h3>Educaroute</h3>
                    </div>
                    <div class="informations">
                        <div class="coordonnees">
                            <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                            <p><span><i class="fas fa-map-pin"></i></span> 12 rue d'Hérambault 62170 MONTREUIL SUR MER</p>
                            <p><span><i class="fas fa-phone"></i></span> 03 21 06 05 71</p>
                            <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-educaroute-377916052372479/</p>
                            <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i><i class="fas fa-motorcycle"></i></p>
                        </div>
                        <div class="plan_logo">
                            <img src="img/auto_ecole_montreuil2.png" alt="auto ecole educaroute">
                            <img src="img/logo5.png" alt="logo auto educaroute">
                        </div>
                    </div>
                </div>
                <div class="auto_ecole">
                    <div>
                        <h3>Auto ecole AE3</h3>
                    </div>
                    <div class="informations">
                        <div class="coordonnees">
                            <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                            <p><span><i class="fas fa-map-pin"></i></span> 13 Place du Général de Gaulle, 62170 Montreuil </p>
                            <p><span><i class="fas fa-phone"></i></span> 03 21 86 24 61</p>
                            <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-ecole-ae3-377916052372479/</p>
                            <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i>
                            </p>
                        </div>
                        <div class="plan_logo">
                            <img src="img/auto_ecole_montreuil3.png" alt="auto ecole ae3">
                            <img src="img/logo_ae3.png" alt="logo ae3">
                        </div>
                    </div>
                </div>

                <div id="hesdin" class="ville">
                    <h2>
                        HESDIN
                    </h2>
                    <div class="auto_ecole">
                        <div>
                            <h3>Auto ecole Jackie</h3>
                        </div>
                        <div class="informations">
                            <div class="coordonnees">
                                <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                                <p><span><i class="fas fa-map-pin"></i></span> 18 rue Jacquemont 62140 HESDIN</p>
                                <p><span><i class="fas fa-phone"></i></span> 03 21 86 78 03</p>
                                <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-ecole-jackie-377916052372479/</p>
                                <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i>
                                </p>
                            </div>
                            <div class="plan_logo">
                                <img src="img/auto_ecole_hesdin1.png" alt="auto ecole jackie">
                                <img src="img/jacky.png" alt="logo jackie">
                            </div>
                        </div>
                    </div>
                    <div class="auto_ecole">
                        <div>
                            <h3>Auto-école Bruno</h3>
                        </div>
                        <div class="informations">
                            <div class="coordonnees">
                                <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                                <p><span><i class="fas fa-map-pin"></i></span> 11 Av. de Ste Austreberthe 62140 HESDIN</p>
                                <p><span><i class="fas fa-phone"></i></span> 03 21 86 89 80</p>
                                <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-moto-ecole-BRUNO-748618158540299/</p>
                                <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i><i class="fas fa-motorcycle"></i></p>
                            </div>
                            <div class="plan_logo">
                                <img src="img/auto_ecole_hesdin2.png" alt="auto ecole des remparts">
                                <img src="img/bruno.png" alt="logo auto ecole bruno">

                            </div>
                        </div>
                    </div>

                    <div class="auto_ecole">
                        <div>
                            <h3>Auto-école Anne-sophie</h3>
                        </div>
                        <div class="informations">
                            <div class="coordonnees">
                                <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                                <p><span><i class="fas fa-map-pin"></i></span> 6 rue André Fréville 62140 HESDIN</p>
                                <p><span><i class="fas fa-phone"></i></span> 03 21 05 01 71</p>
                                <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-ecole-anne-sophie-377916052372479/</p>
                                <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i><i class="fas fa-motorcycle"></i></p>
                            </div>
                            <div class="plan_logo">
                                <img src="img/auto_ecole_hesdin3.png" alt="auto ecole des remparts">
                                <img src="img/logo_remparts.png" alt="logo autot ecole des remparts">

                            </div>
                        </div>
                    </div>

                    <div id="berck" class="ville">
                        <h2>
                            Berk-sur-mer
                        </h2>
                        <div class="auto_ecole">
                            <div>
                                <h3>Auto ecole Michel Dérollez</h3>
                            </div>
                            <div class="informations">
                                <div class="coordonnees">
                                    <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                                    <p><span><i class="fas fa-map-pin"></i></span> 36 rue Gabriel Péri 62000 BERCK</p>
                                    <p><span><i class="fas fa-phone"></i></span> 03 21 09 20 82</p>
                                    <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/auto-ecole-dérollez-377916052372479/</p>
                                    <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i></p>
                                </div>
                                <div class="plan_logo">
                                    <img src="img/auto_ecole_berk1.png" alt="auto ecole michel dérollez">
                                    <img src="img/logo_derollez.png" alt="logo auto ecole dérollez">
                                </div>
                            </div>
                        </div>
                        <div class="auto_ecole">
                            <div>
                                <h3>Color conduite</h3>
                            </div>
                            <div class="informations">
                                <div class="coordonnees">
                                    <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                                    <p><span><i class="fas fa-map-pin"></i></span> 241 rue de l'Impératrice 62600 BERCK</p>
                                    <p><span><i class="fas fa-phone"></i></span> 03 21 62 46 20</p>
                                    <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/colorconduite/</p>
                                    <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i><i class="fas fa-motorcycle"></i>
                                    </p>
                                </div>
                                <div class="plan_logo">
                                    <img src="img/auto_ecole_berk2.png" alt="auto ecole color conduite">
                                    <img src="img/logo_ae3.png" alt="logo color conduite">
                                </div>
                            </div>
                        </div>
                        <div class="auto_ecole">
                            <div>
                                <h3>Auto-école Jean-Yves Martel</h3>
                            </div>
                            <div class="informations">
                                <div class="coordonnees">
                                    <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                                    <p><span><i class="fas fa-map-pin"></i></span> 50 rue St Josse 62000 BERCK</p>
                                    <p><span><i class="fas fa-phone"></i></span> 03 21 09 95 87</p>
                                    <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Jean-Yves-Martel/</p>
                                    <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i><i class="fas fa-motorcycle"></i></p>
                                </div>
                                <div class="plan_logo">
                                    <img src="img/auto_ecole_berk3.png" alt="auto ecole des remparts">
                                    <img src="img/logo_martel.png" alt="logo auto ecole jean-yves Martel">

                                </div>
                            </div>
                        </div>

                        <div class="auto_ecole">
                            <div>
                                <h3>Auto-école Rdf</h3>
                            </div>
                            <div class="informations">
                                <div class="coordonnees">
                                    <p><span><i class="fas fa-envelope"></i></span> example@gmail.com</p>
                                    <p><span><i class="fas fa-map-pin"></i></span> 83 Route de Berck 62180 RANG DU FLIERS</p>
                                    <p><span><i class="fas fa-phone"></i></span> 03 21 09 16 61</p>
                                    <p><span><i class="fab fa-facebook-square"></i></span> https://www.facebook.com/Auto-ecole-rdf/</p>
                                    <p><span><i class="fas fa-id-card"></i></span> Type de permis proposé: <i class="fas fa-car"></i></p>
                                </div>
                                <div class="plan_logo">
                                    <img src="img/auto_ecole_berk4.png" alt="auto ecole des remparts">
                                    <img src="img/logo_remparts.png" alt="logo autot ecole des remparts">

                                </div>
                            </div>
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