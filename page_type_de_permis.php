<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Code de la route - Accueil</title>
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
                            <a href="#"><i class="fas fa-angle-double-right"></i> Permis à points</a>
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
        <img src="images/imagepermis.jpg" alt="image permis">
        <div class="bloc_title">
            <h2>
                TOUT SAVOIR SUR LES TYPES DE PERMIS
            </h2>
            <hr>
            <p>Toutes les informations sur les types de permis</p>
        </div>
        <div id="up">
            <a href="#page"><i class="fas fa-chevron-up"></i></a>
        </div>
    </section>

    <!-- SECTION FAMILLE PANNEAUX-->
    <section id="body">
        <div class="container">
            <div class="permispoint_title">

                <h2>
                    Les types de permis
                </h2>

                <h3>Les différentes catégories de permis</h3>

            </div>

            <div class="permispoint_content">
                <div class="catA">
                    <div class="catA_descrip">

                        <ul>

                            <li class="A">
                                <div class="puce">1</div>
                                <div class="A_text"><strong>La catégorie AM:</strong> Le permis A1 autorise à conduire les motocyclettes dont la cylindrée n’excède pas 125 cm3, dont la puissance n’excède pas 11 kW et dont le rapport puissance/poids est inférieur à 0,1 kW
                                    par kilogramme.Son obtention est soumise notamment à des conditions d’âge, de formation et de réussite à un examen composé d’une épreuve théorique générale (le code) et d’une épreuve pratique. <a class="savoir" href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/le-permis-moto-permis-a1-a2-a">>>En savoir plus...</a></div>
                            </li><br>


                            <li class="A">
                                <div class="puce">2</div>
                                <div class="A_text"><strong>La catégorie A1:</strong> Le permis A1 autorise à conduire les motocyclettes dont la cylindrée n’excède pas 125 cm3, dont la puissance n’excède pas 11 kW et dont le rapport puissance/poids est inférieur à 0,1 kW
                                    par kilogramme.Son obtention est soumise notamment à des conditions d’âge, de formation et de réussite à un examen composé d’une épreuve théorique générale (le code) et d’une épreuve pratique..<a class="savoir" href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/le-permis-moto-permis-a1-a2-a">>>En savoir plus...</a></div>
                            </li><br>



                            <li class="A">
                                <div class="puce">3</div>
                                <div class="A_text"><strong>La catégorie A2:</strong> Depuis le 2 juin 2016, le permis A2 est destiné à tous les conducteurs de motocyclettes, dès 18 ans, avec ou sans side-car, d’une puissance n’excédant pas 35 kW et dont le rapport puissance/poids
                                    est inférieur à 0,2 kW/kg. Ces motocyclettes ne doivent pas être issues d'un modèle développant plus de 70kW. Un titulaire d’un permis A2 depuis plus de 2 ans peut se voir délivrer, après une formation de 7h, un permis
                                    de la catégorie A. La carte sécurisée A2 est valable 15 ans à compter de la date de délivrance. Cette validité est indiquée sur le document.<a class="savoir" href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/le-permis-moto-permis-a1-a2-a">>>En savoir plus...</a></div>
                            </li><br>


                            <li class="A">
                                <div class="puce">4</div>
                                <div class="A_text"><strong>La catégorie A:</strong> Le candidat doit être titulaire du permis A2 depuis plus de 2 ans et de l'attestation de formation 7 heures délivrée par une école de conduite. La catégorie A du permis de conduire permet
                                    la conduite de toutes les motocyclettes et tricycles ainsi que les quadricycles à moteur d’une puissance maximum de 15 kW.<a class="savoir" href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/le-permis-moto-permis-a1-a2-a">>>En savoir plus...</a></div>
                            </li>

                        </ul>
                    </div>

                    <div id="photo">
                        <div id="moto"><a href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/le-permis-moto-permis-a1-a2-a"><i class="fas fa-angle-double-right">Permis moto</i></a></div>
                        <div id="logomoto"><i style="font-size:150px" class="fas fa-motorcycle"></i></div>

                    </div>
                </div>

                <hr>

                <div class="catA">
                    <div class="catA_descrip">
                        <ul>
                            <li class="A">
                                <div class="puce">1</div>
                                <div class="A_text"><strong>La catégorie B:</strong> Le permis B Il permet de conduire les véhicules automobiles ayant un poids total autorisé en charge (PTAC) qui n'excède pas 3,5 tonnes affectés au transport de personnes ou de marchandises
                                    conçus et construits pour le transport de huit passagers au maximum non compris le conducteur Peuvent également être conduits les véhicules mentionnés précédemment, attelés d'une remorque lorsque le poids total autorisé
                                    en charge (PTAC) de la remorque est inférieur ou égal à 750 kilogrammes. Les mêmes véhicules peuvent être attelés d'une remorque lorsque le poids total autorisé en charge (PTAC) de la remorque est supérieur à 750 kilogrammes,
                                    sous réserve que la somme des poids totaux autorisés en charge (PTAC) du véhicule tracteur et de la remorque de l'ensemble n'excède pas 4 250 kilogrammes. Le permis B limité aux véhicules équipés d’une boîte de vitesses
                                    automatique
                                    <a class="savoir" href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/le-permis-voiture-permis-b">>>En savoir plus...</a></div>
                            </li>

                        </ul>
                    </div>

                    <div id="photo">
                        <div id="moto"><a href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/le-permis-voiture-permis-b"><i class="fas fa-angle-double-right">Permis voiture</i></a></div>

                        <div id="logomoto"><i style="font-size: 150px" class="fas fa-car"></i></div>

                    </div>
                </div>

                <hr>

                <div class="catA">
                    <div class="catA_descrip">
                        <ul>
                            <li class="A">
                                <div class="puce">1</div>
                                <div class="A_text"><strong>La catégorie C:</strong> La catégorie C du permis de conduite autorise la conduite des véhicules affectés au transport de marchandises ou de matériel dont le PTAC (poids total en charge) est supérieur à 3,5 t
                                    <a class="savoir" href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/les-permis-professionnels-permis-c-transport-de-marchandises-ou-materiel">>>En savoir plus...</a>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div id="photo">
                        <div id="moto"><a href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/les-permis-professionnels-permis-c-transport-de-marchandises-ou-materiel"><i class="fas fa-angle-double-right">Permis camion</i></a><br></div>
                        <div id="logomoto"><i style="font-size: 150px" class="fas fa-truck-moving"></i></div>
                    </div>

                </div>
                <hr>

                <div class="catA">
                    <div class="catA_descrip">
                        <ul>
                            <li class="A">
                                <div class="puce">1</div>
                                <div class="A_text"><strong>La catégorie D:</strong> a catégorie D permet de conduire les véhicules affectés au transport des personnes, comportant plus de huit places assises outre celle du conducteur, ou pouvant transporter plus de huit
                                    personnes, conducteur non compris.<a class="savoir" href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/les-permis-professionnels-permis-d-transport-de-personnes">>>En savoir plus...</a></div>
                            </li>
                        </ul>

                    </div>

                    <div id="photo">
                        <div id="moto"><a href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/les-permis-professionnels-permis-d-transport-de-personnes"><i class="fas fa-angle-double-right">Permis transport en commun</i></a></div>
                        <div id="logomoto"><i style="font-size: 150px" class="fas fa-bus-alt"></i>

                        </div>
                    </div>
                </div>

                <div id="toutsavoir"><i class="fas fa-angle-double-right"><a href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/le-permis-a-1-euro-par-jour/informations"><strong>TOUT SAVOIR</strong></a></i></div>

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