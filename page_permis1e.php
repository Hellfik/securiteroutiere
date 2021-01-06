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
                            <a href="#"><i class="fas fa-angle-double-right"></i> Permis à 1€</a>
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
        <img src="images/imagepermis.jpg" alt="image permis">
        <div class="bloc_title">
            <h2>
                TOUT SAVOIR SUR LE PERMIS A 1€
            </h2>
            <hr>
            <p>Toutes les informations sur le permis à 1 euros</p>
        </div>
        <div id="up">
            <a href="#page"><i class="fas fa-chevron-up"></i></a>
        </div>
    </section>

    <!-- SECTION FAMILLE PANNEAUX-->
    <section id="body">
        <div class="container">
            <div class="permis1e_title">
                <i class="fas fa-coins"></i>
                <h2>
                    PERMIS A 1 EURO
                </h2>
                <i class="fas fa-euro-sign"></i>
            </div>

            <div class="permis1e_content">
                <h3>Qu'est ce que c'est ?</h3>

                <p>C'est un prêt dont les intérêts sont pris en charge par l'État. Le "permis à un euro par jour" a été mis en place par l'État, en partenariat avec les établissements prêteurs et les écoles de conduite pour aider les jeunes de 15 à 25 ans
                    révolus à financer leurs préparations au permis de conduire. Il permet aux jeunes de bénéficier d'une facilité de paiement 1 : le coût total de la formation au permis ne change pas mais l'établissement financier avance l'argent et
                    l'État paie les intérêts. Un crédit vous engage et doit être remboursé. Vérifiez vos capacités de remboursement avant de vous engager.</p>
                <h3>Pourquoi?</h3>
                <p>Le "permis à un euro par jour" permet de répondre à deux objectifs principaux : faciliter l'accès au permis de conduire, dont le coût peut représenter un frein et un obstacle fort à l'obtention d'un emploi ; continuer à améliorer la qualité
                    générale de la formation, grâce à un partenariat avec les écoles de conduite fondé sur leur engagement dans une démarche de qualité.</p>
                <h3>Pour quelles catégories de permis?</h3>
                <p>L'opération "permis à un euro par jour" facilite l'accès à une inscription à une formation à la conduite de véhicules soit de la catégorie B (véhicules légers) soit, depuis le 1er juillet 2016, de la catégorie A1 (motocyclettes dont la
                    cylindrée n’excède pas 125 cm3 et dont la puissance n’excède pas 11 kw ou un 3 roues d’une puissance maximale de 15 kw) ou A2 (motocyclettes dont la puissance n’excède pas 35 kw ou un 3 roues d’une puissance maximale de 15 kw).</p>
                <h3>Pour quel montant de prêt ?</h3>
                <p>Depuis le 1er juillet 2016, l’opération « permis à un euro par jour » prévoit de nouvelles modalités de souscriptions de prêt : - les candidats qui n’ont jamais bénéficié du dispositif peuvent, à l’occasion d’une inscription à une formation
                    au permis de conduire, prétendre à un prêt de 600, 800, 1 000 ou 1 200 €. - les candidats qui ont déjà bénéficié du dispositif pourront, à l’occasion d’un échec à l’épreuve pratique du permis de conduire, prétendre à un prêt de 300
                    € pour financer une formation complémentaire en vue de l’obtention de la même catégorie de permis de conduire.</p>¨
                <h3>Qui peut en bénéficier?</h3>
                <p>Tous les jeunes qui ont entre 15 et 25 ans révolus à la date de signature d'un contrat de formation dans une école de conduite partenaire, quelle que soit leur situation, sous réserve que l’établissement financier accepte le dossier du
                    candidat. Les jeunes bénéficiaires d’une aide publique, qu'elle émane d’une collectivité locale ou de l'État, peuvent également demander à bénéficier du prêt.</p>
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