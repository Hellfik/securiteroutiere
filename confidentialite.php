<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Code de la route - Confidentialité</title>
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
                            <a href="panneaux_services.php"><i class="fas fa-angle-double-right"></i> Type D</a>
                        </li>
                        <li>
                            <a href="panneaux_direction.php"><i class="fas fa-angle-double-right"></i> Type Dp</a>
                        </li>
                        <li>
                            <a href="panneaux_jalonnement.php"><i class="fas fa-angle-double-right"></i> Type Dv</a>
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


    <!-- SECTION CONFIDENTIALITE-->
    <section id="body">
        <div class="container">
            <article class="confidentialite">
                <h2>Politique de confidentialité</h2>
                <hr>
                <h2>Qui sommes-nous ?</h2>
                <p>L'adresse de notre site est : http://localhost/securiteroutiere.</p>
                <h2>Utilisation des données personnelles collectées</h2>
                <h3>Commentaires</h3>
                <p>Quand vous laissez un commentaire sur notre site web, les données inscrites dans le formulaire de commentaire, mais aussi votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider à la détection des commentaires
                    indésirables. Une chaîne anonymisée créée à partir de votre adresse de messagerie (également appelée hash) peut être envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar
                    sont disponibles ici : https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil sera visible publiquement à coté de votre commentaire.
                </p>
                <h3>Médias</h3>
                <p>Si vous êtes un utilisateur ou une utilisatrice enregistré·e et que vous téléversez des images sur le site web, nous vous conseillons d’éviter de téléverser des images contenant des données EXIF de coordonnées GPS. Les visiteurs de votre
                    site web peuvent télécharger et extraire des données de localisation depuis ces images.
                </p>
                <h2>Formulaire de contact</h2>
                <h3>Cookies</h3>
                <p>Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse de messagerie et site web dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous
                    déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an <br> Si vous avez un compte et que vous vous connectez sur ce site, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies.
                    Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur. <br> Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations
                    de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez « Se souvenir de moi », votre cookie de connexion sera conservé pendant
                    deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé. <br> En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune
                    donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.
                </p>
                <h3>Contenu embarqué depuis d’autres sites</h3>
                <p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site. <br>Ces
                    sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.
                </p>
                <h2>Statistiques et mesures d’audience</h2>
                <h3>Utilisation et transmission de vos données personnelles</h3>
                <h3>Durées de stockage de vos données</h3>
                <p>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération. <br> Pour
                    les utilisateurs et utilisatrices qui s’enregistrent sur notre site (si cela est possible), nous stockons également les données personnelles indiquées dans leur profil. Tous les utilisateurs et utilisatrices peuvent voir, modifier
                    ou supprimer leurs informations personnelles à tout moment (à l’exception de leur nom d’utilisateur·ice). <br> Les gestionnaires du site peuvent aussi voir et modifier ces informations.
                </p>
                <h3>Les droits que vous avez sur vos données</h3>
                <p>Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies.
                    Vous pouvez également demander la suppression des données personnelles vous concernant. <br> Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.
                </p>
                <h3>Transmission de vos données personnelles</h3>
                <p>Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection des commentaires indésirables.</p>
                <h2>Informations de contact</h2>
                <h2>Informations supplémentaires</h2>
                <h3>Comment nous protégeons vos données</h3>
                <h3>Procédures mises en œuvre en cas de fuite de données</h3>
                <h3>Les services tiers qui nous transmettent des données</h3>
                <h3>Opérations de marketing automatisé et/ou de profilage réalisées à l’aide des données personnelles</h3>
                <h3>Affichage des informations liées aux secteurs soumis à des régulations spécifiques</h3>
                <hr>




            </article>
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
                    <a href="#">Mentions légales</a>
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