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
                            <a href="#"><i class="fas fa-angle-double-right"></i> Type de permis</a>
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
                TOUT SAVOIR SUR LE PERMIS A POINTS
            </h2>
            <hr>
            <p>Toutes les informations sur le permis à points</p>
        </div>
        <div id="up">
            <a href="#page"><i class="fas fa-chevron-up"></i></a>
        </div>
    </section>

    <!-- SECTION FAMILLE PANNEAUX-->
    <section id="body">
        <div class="container">
            <div class="permis1e_title">

                <h2>
                    Permis à points
                </h2>

            </div>

            <div class="permis1e_content">
                <h3>Qu'est ce que c'est ?</h3>
                <p>Le permis de conduire est doté d’un capital maximal de 12 points, celui-ci étant acquis de manière progressive au cours de la période probatoire, le titulaire dispose initialement de 6 points. Le nombre de points est réduit automatiquement
                    à la suite d’une ou plusieurs infractions pour lesquelles le retrait est prévu par le code de la route. Son objectif est avant tout de responsabiliser les conducteurs sur les voies de circulation et de pénaliser ceux dont les comportements
                    peuvent mettre en danger la sécurité des autres usagers de la route</p>

                <h3>Fonctionnement</h3>
                <p>Le permis de conduire est constitué au plus d’un capital de 12 points. En cas d’infraction au code de la route (contravention ou délit selon la gravité) , un retrait de point(s) est effectué. Plus l’infraction est grave, plus le nombre
                    de points retirés est important. Par exemple, l’usage du téléphone au volant peut vous faire perdre 3 points ; un excès de vitesse entre 30 et 40 km/h : 3 points ; la conduite avec une alcoolémie supérieure ou égale à 0,5 g/l de sang
                    : 6 points. Attention, dans le cadre d’un permis probatoire, certains délits, comme une alcoolémie supérieure ou égale à 0,2 g/l, entraînent un retrait de 6 points et peuvent ainsi invalider le permis de conduire dès la première année
                    d’obtention.S’inscrivant avant tout dans une démarche pédagogique, le système du permis à points a pour objectif d’éviter l’infraction et sa récidive. Une infraction au code de la route étant à l'origine de 9 accidents sur 10 la perte
                    de point(s) est une alerte qui amène le conducteur à prendre conscience de la nécessité d’une conduite raisonnable. Loin d’être une sanction irréversible, un ou plusieurs points perdus peuvent être simplement récupérés par un strict
                    respect des règles du code de la route. En 2016, 3,3 millions de conducteurs ont récupéré leurs 12 points après 2 ou 3 ans sans infraction. Depuis son instauration, le permis à points a contribué à réduire de moitié le nombre de personnes
                    tuées sur la route </p>

                <h3>Retrait de points</h3>
                <p>Lors du constat d’une infraction, les forces de l’ordre vous informent du principe du retrait de point(s). Le retrait de point(s) est effectif dès que survient l'un des éléments suivants : Le paiement de l’amende forfaitaire ; L’émission
                    du titre exécutoire d’une amende forfaitaire majorée ; L'exécution d'une composition pénale ; La condamnation définitive. Une seule infraction peut faire perdre jusqu’à 6 points. Plusieurs infractions constatées simultanément peuvent
                    faire perdre 8 points au maximum</p>

                <h3>Perte de la totalité des points</h3>
                <p>La perte totale des points entraîne l’invalidation du permis de conduire pour une durée de six mois. L’intéressé est informé de la perte de son droit à conduire par courrier recommandé. Il doit rapporter son permis à la préfecture de son
                    département de résidence dans un délai de dix jours. Le fait de perdre deux fois la totalité de ses points sur une période de cinq ans a pour conséquence de porter à un an le délai d’interdiction d’obtenir un nouveau permis de conduire.
                    Lorsque le permis a été invalidé en raison d’une perte totale de points, le nouveau permis obtenu est un permis probatoire doté d’un capital de six points</p>
                <h3>Reconstituer son capital de points</h3>
                <p>es points perdus peuvent être récupérés de deux manières : En adoptant un comportement responsable au volant. en cas de perte d’un seul point, celui-ci est réattribué après 6 mois sans infraction ; en cas de perte de plusieurs points,
                    ceux-ci sont réattribués après deux ou trois ans* sans nouveau retrait de point(s). En suivant un stage de sensibilisation à la sécurité routière. 4 points maximum peuvent être récupérés. Le stage dure deux jours consécutifs et est
                    dispensé par un établissement agréé. Il est payant et coûte environ 250 €. Un stage peut être suivi tous les ans. Le suivi d'un stage permet de récupérer des points uniquement s'il reste au moins 1 point sur le permis de conduire.
                    A zéro point, il est trop tard. Pour s'inscrire au stage, il faut se rendre en préfecture pour connaître les centres agréés ou consulter le site Internet de votre préfecture. * Trois ans si l'une des infractions ayant entraîné un retrait
                    de points est un délit ou une contravention de la quatrième ou de la cinquième classe</p>
                <h3>Prise en charge publique et cautionnement du prêt</h3>
                <p>Certains jeunes ne peuvent pas bénéficier d’un prêt permis à un euro par jour car ils ne sont pas en mesure de fournir une caution parentale ou celle d’un tiers demandée par les établissements de crédit. Aussi, le Comité interministériel
                    de la sécurité routière du 13 janvier 2009 a décidé d’assurer la prise en charge publique du cautionnement du prêt permis à un euro par jour pour les jeunes exclus de ce prêt faute de caution et inscrits dans une démarche de formation
                    ou d’accès à l’emploi. Ces derniers devront se présenter à l’établissement de crédit partenaire du dispositif du permis à un euro par jour munis d’une attestation d’éligibilité à la caution publique établie par un des réseaux accompagnant
                    également partenaire. Toutefois, la décision d’accorder le prêt revient à l’établissement de crédit à l’issue d’une étude des pièces constitutives du dossier de demande de prêt</p>
                <h3>Le permis à 1€ par jour: une formation initiale et une formation complémentaire?</h3>
                <p>Le prêt « permis à un euro par jour » doit être exclusivement destiné au financement d’une formation initiale ou, dans le cas d’un échec à l’épreuve pratique de l’examen du permis de conduire, d’une formation complémentaire. Le prêt «
                    permis à un euro par jour » pour une formation initiale ne peut être attribué qu’une seule fois à un même bénéficiaire. Le prêt « permis à un euro par jour » pour une formation complémentaire ne peut être attribué qu’au bénéficiaire
                    d’un prêt « permis à un euro par jour » délivré dans le cadre d’une formation initiale, après un échec à l'épreuve pratique. Il ne peut être attribué qu’une seule fois à un même bénéficiaire et pour une même catégorie de permis. Ces
                    formations doivent viser l’obtention du permis de conduire soit de la catégorie A1, soit de la catégorie A2, soit de la catégorie B.</p>
                <h3>S'inscrire dans une école partenaire</h3>
                <p>Une convention de partenariat doit être signée avec le représentant de l'État par chaque école de conduite qui souhaite être partenaire de l'opération "permis à un euro par jour". Seules les écoles partenaires offrent la possibilité d’accéder
                    au dispositif "permis un euro par jour". Les écoles de conduite adhérentes souscrivent à une charte de qualité de la formation et à une garantie financière obligatoire. Néanmoins, les autres écoles de conduite sont toutes agréées par
                    l'État, qu'elles soient partenaires ou non de l'opération.</p>

                <div id="toutsavoir"><i class="fas fa-angle-double-right"><a href="https://permisdeconduire.ants.gouv.fr/Vos-demarches/Le-permis-a-points"><strong>TOUT SAVOIR</strong></a></i></div>

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