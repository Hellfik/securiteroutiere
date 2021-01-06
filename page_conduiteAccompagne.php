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
                            <a href="#"><i class="fas fa-angle-double-right"></i> Conduite Accompagnée</a>
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
                TOUT SAVOIR SUR LA CONDUITE ACCOMPAGNEE
            </h2>
            <hr>
            <p>Toutes les informations sur la conduite accompagnée</p>
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
                    La conduite accompagnée
                </h2>

            </div>
            <div class="conduite_content">
                <img class="displayed" src="./images/avantconduitacc.PNG">
                <div id="avantages"><img class="displayed" src="./images/avant2condacc.PNG">
                    <img class="displayed" src="./images/avant3condacc.PNG">
                    <img class="displayed" src="./images/avant4condacc.PNG">
                    <img class="displayed" src="./images/avant5condacc.PNG">
                    <img class="displayed" src="./images/avant6condacc.PNG"></div>
                <div id="toutsavoir"><i class="fas fa-angle-double-right"><a href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/la-conduite-accompagnee"><strong>TOUT SAVOIR</strong></a></i></div>

                <h1 class="wobble"> LA CONDUITE ANTICIPEE</h1>
                <img class="displayed" src="./images/imgconduiteanticipee.PNG">
                <h2>Quelles sont les conditions d'accès?</h2>
                <p>Pour commencer la conduite accompagnée, il faut : avoir réussi le code de la route ; avoir suivi une formation pratique de 20 heures minimum avec un enseignant de l’école de conduite ; avoir bénéficié d’une évaluation favorable de la part
                    de son enseignant de la conduite et de la sécurité routière qui se matérialise par la remise de l’attestation de fin de formation</p>
                <h2>Quelles sont les avantages de la conduite anticipée?</h2>
                <p> L'apprentissage anticipé de la conduite permet : de réduire la période probatoire du permis à 2 ans au lieu de 3 (les nouveaux titulaires du permis de conduire disposent de 6 points sur leur permis et doivent attendre deux ans sans infraction
                    avant d’en obtenir 12) ; de commencer la formation initiale en école de conduite (code et conduite) dès 15 ans ; d’acquérir de l’expérience de conduite ; de passer l’épreuve du permis de conduire à 17 ans et demi. En revanche, il n’est
                    possible de conduire seul qu’à partir de 18 ans ; d’augmenter sensiblement ses chances de réussite à l’examen du permis de conduire : 74% de chances de l’obtenir dès la première fois contre 55% par la voie de l’apprentissage traditionnel
                    ; souvent d’obtenir un tarif préférentiel sur son assurance « jeune conducteur »</p>
                <h2>Qui peut être accompagnateur?</h2>
                <p>L'accompagnateur doit : être titulaire du permis B (permis automobile) depuis au moins cinq ans sans interruption ; avoir obtenu l'accord de son assureur ; être mentionné dans le contrat signé avec l'école de conduite. Il est possible
                    d'avoir plusieurs accompagnateurs, également hors du cadre familial..</p>
                <h2>Comment se déroule l'apprentissage anticipé de la conduite?</h2>
                <p>La conduite avec l'accompagnateur se déroule sur une durée d'au moins un an et une distance parcourue de 3 000 km minimum. Cette période débute par un rendez-vous préalable et est ponctuée de deux rendez-vous pédagogiques obligatoires.
                    Le rendez-vous préalable a lieu en présence de l'enseignant et du futur accompagnateur, au moment où l'enseignant estime que l'élève est prêt à conduire avec son accompagnateur. L'enseignant dispense alors ses conseils aux deux parties
                    pour bien commencer la période de conduite accompagnée. Le 1er rendez-vous pédagogique a lieu entre quatre et six mois après la date de délivrance de l'attestation de fin de formation initiale. C'est généralement un rendez-vous collectif
                    avec d'autres élèves et leurs accompagnateurs. Le 2e rendez-vous pédagogique a lieu après 3 000 km parcourus. Lors de ces rendez-vous pédagogiques, animés par un enseignant de la conduite, les élèves sont invités à échanger sur leurs
                    premières expériences et sur des thèmes de sécurité routière. Une phase de conduite est également prévue pour mesurer les progrès réalisés par l'élève et apporter les conseils nécessaires pour continuer la conduite accompagnée dans
                    de bonnes conditions.</p>
                <h2>A savoir</h2>
                <p>Pour les jeunes âgés de moins de 16 ans, la copie de l’attestation de recensement ou du certificat individuel de participation à la journée défense et citoyenneté (JDC) ou de l'attestation individuelle d'exemption n’est pas requise pour
                    l'inscription. Toutes les règles du code de la route doivent être respectées par vous comme par votre accompagnateur. Mais en plus : vous ne pouvez pas conduire en dehors des frontières nationales ; vous devez respecter les limitations
                    de vitesse qui s'appliquent aux conducteurs novices. Attention : en conduite accompagnée, ayez toujours avec vous le formulaire de demande de permis de conduire ou sa photocopie, le livret d’apprentissage et le document d’extension
                    de garantie de l’assurance. Seul le formulaire de demande de permis de conduire permet de justifier de la situation d’apprentissage de la conduite, en cas de contrôle par les forces de l’ordre.</p>
                <div id="toutsavoir"><i class="fas fa-angle-double-right"><a href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/la-conduite-accompagnee/l-apprentissage-anticipe-de-la-conduite-aac"><strong>TOUT SAVOIR</strong></a></i></div>
                <br>

                <h1 class="wobble">LA CONDUITE ENCADREE</h1>
                <img class="displayed" src="./images/imageconduiteencadreePNG.PNG">
                <h2> Quels sont les avantages de la conduite encadrée?</h2>
                <p>D’acquérir de l’expérience de conduite ; d’augmenter sensiblement ses chances de réussite à l’examen du permis de conduire ; d’obtenir son permis de conduire dès le jour de ses 18 ans (sous réserve d’avoir obtenu son diplôme professionnel).</p>
                <h2> Quelles sont les conditions d'accès</h2>
                <p>Dès la réussite aux épreuves de la catégorie B du permis de conduire (code et conduite), passées au sein de l’établissement, après accord du chef d’établissement et participation à un rendez-vous préalable, le jeune conducteur peut conduire
                    avec l’accompagnateur de son choix afin de maintenir et améliorer son niveau de compétence et d’expérience.</p>
                <h2>Qui peut être accompagnateur?</h2>
                <p>L'accompagnateur doit: être titulaire du permis B (permis automobile) depuis au moins cinq ans sans interruption ; avoir obtenu l'accord de son assureur. Il est possible d'avoir plusieurs accompagnateurs</p>

                <h2>Comment se déroule la conduite encadrée?</h2>
                <p>La conduite avec un accompagnateur est possible jusqu’à la délivrance du diplôme professionnel, lequel conditionne la délivrance du permis de conduire (sous réserve d'avoir 18 ans, âge légal pour conduire). Un rendez-vous pédagogique doit
                    être organisé au cours de la période de conduite encadrée..</p>

                <h2>A savoir</h2>
                <p>Un livret d'apprentissage est remis au début de la formation. Il permet de mesurer vos progrès et doit toujours être présent dans le véhicule lors de votre formation. Lors de la phase de conduite encadrée, il faut toujours avoir avec vous
                    le document d’extension de garantie délivré par votre assureur et l’attestation délivrée par le chef d’établissement (par laquelle il atteste que les conditions préalables au départ en conduite encadrée sont remplies). Ces documents
                    tiennent lieu de justificatifs en cas de contrôle par les forces de l’ordre!</p>
                <div id="toutsavoir"><i class="fas fa-angle-double-right"><a href="http://www.securite-routiere.gouv.fr/permis-de-conduire/passer-son-permis/la-conduite-accompagnee/la-conduite-encadree"><strong>TOUT SAVOIR</strong></a></i></div>

                <h1 class="wobble"> LA CONDUITE SUPERVISEE</h1>
                <img class="displayed" src="./images/imageconduitesupervisee.PNG">
                <h2> Quelles sont les conditions d'accès</h2>
                <p>On peut choisir la conduite supervisée : soit au moment de l’inscription à l’auto-école ; soit après un échec à l'épreuve pratique. Pour y accéder, il faut : avoir réussi le code de la route ; avoir suivi une formation pratique avec un
                    enseignant de l’école de conduite (20 heures minimum) ; avoir bénéficié d’une évaluation favorable de la part de son enseignant de la conduite et de la sécurité routière. Après la phase de formation initiale, le candidat doit : Avoir
                    obtenu un accord préalable écrit de la société d’assurances sur l’extension de garantie nécessaire pour la conduite du ou des véhicules utilisé(s) au cours de la future phase de conduite supervisée. Cet accord précise le ou les noms
                    des accompagnateurs autorisés par la société d'assurances à avoir cette fonction. Il est joint au contrat de formation de l'élève, qui précise les obligations relatives à la fonction d'accompagnateur et les conditions spécifiques à
                    la conduite supervisée, ou à l'avenant au contrat de formation, si le choix de la conduite supervisée a été décidé après la conclusion du contrat. Avoir obtenu l'attestation de fin de formation initiale (AFFI). Un exemplaire est transmis
                    à la société d'assurances par le souscripteur du contrat de formation. Après un échec à l'épreuve pratique de l'examen du permis de conduire, le candidat doit : Avoir obtenu un accord préalable écrit de la société d'assurances. Avoir
                    obtenu une autorisation de conduire en conduite supervisée. Un exemplaire est transmis, dès sa délivrance, à la société d'assurances par le souscripteur du contrat de formation.</p>
                <h2> Quels sont les avantages de la conduite supervisée?</h2>
                <p>La conduite supervisée permet : d’acquérir de l’expérience de conduite à moindre coût pour compléter sa formation initiale et, en cas d’échec à l’examen pratique, d’améliorer ses acquis en attendant de le repasser ; d’augmenter sensiblement
                    ses chances de réussite à l’examen du permis de conduire : 74% de chances de l’obtenir dès la première fois contre 55% par la voie de l’apprentissage traditionnel.</p>

                <h2>Qui peut être accompagnateur?</h2>
                <p>L'accompagnateur doit: être titulaire du permis B (permis automobile) depuis au moins cinq ans sans interruption ; avoir obtenu l'accord de son assureur ; être mentionné dans le contrat signé avec l'école de conduite. Il est possible d'avoir
                    plusieurs accompagnateurs, également hors du cadre familial.</p>

                <h2>Comment se déroule la conduite encadrée?</h2>
                <p>La conduite supervisée se déroule avec un accompagnateur. Cette période débute par un rendez-vous préalable qui a lieu en présence de l’enseignant et du futur accompagnateur, au moment où l’enseignant estime que l’élève est prêt à conduire
                    avec son accompagnateur. L’enseignant dispense alors ses conseils aux deux parties pour bien commencer la période de conduite accompagnée.</p>
                <h2> A savoir</h2>
                <p>La durée du permis probatoire est de trois ans (comme pour la filière classique) : les nouveaux titulaires du permis de conduire disposent de 6 points sur leur permis et doivent attendre trois ans sans infraction avant d'en obtenir 12.
                    Le candidat ne bénéficie pas nécessairement de tarif préférentiel sur son assurance "jeune conducteur"</p>



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