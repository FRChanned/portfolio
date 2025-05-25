<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Portfolio de Mathis PEROT, étudiant en BTS SIO SLAM au lycée Claude Nougaro à Monteils" name="description">
    <meta content="Portfolio, BTS, BTS SIO, SLAM, Lycée Claude Nougaro, Monteils, Mathis PEROT, PEROT, Mathis, Portfolio BTS SIO, Exemples Portfolio" name="keywords">
    <meta content="Mathis PEROT" name="author">
    <title>Portfolio BTS SIO - Mathis PEROT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> <!-- Font pour les icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Pareil xptdrrr -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" /> <!-- CSS Pour la map -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script> <!-- JS Pour la map -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="img/PogU-1x.ico" rel="icon">
</head>

<body>
    <div class="sidebar" id="sidebar">
        <div>
            <button id="toggle-sidebar" aria-label="Basculer la sidebar"><i class="bi bi-list"></i></button>
            <img src="img/IMG_20250131_101342.jpg" class="img-fluid rounded-circle" alt="Photo de Mathis">
            <hr>
            <h2>Mathis PEROT PEREIRA</h2>
        </div>
        <div class="social-links mt-3 text-center">
            <a href="https://twitter.com/getchanned" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/mathis.perot/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://linkedin.com/in/mathis-perot82" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/FRChanned" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
        <?php include('_header.php'); ?>
    </div>


    <main class="main">
        <section id="accueil" class="d-flex flex-column justify-content-center align-items-center">
            <div class="hero-container aos-init aos-animate" data-aos="fade-in">
                <center>
                    <h1>Mathis PEROT</h1>
                </center>
                <center>
                    <p>Bienvenue sur mon portfolio !</p>
                </center>
            </div>
        </section>
        <section id="about">
            <div class="cardAboutMe">
                <h2>À propos de moi <i class="bi bi-chat-dots"></i></h2>
                <hr>
                <p>Hey, moi c'est Mathis PEROT</p>
                <p>Je suis actuellement en seconde année de BTS SIO (Services Informatiques aux Organisations) option SLAM
                    (Solutions Logicielles et Applications Métier), ou mieux résumé comme une option centrée dans le développement, aux bases de données
                    et les systèmes d'informations, au
                    <a href="https://www.google.com/maps/place/Lyc%C3%A9e+Polyvalent+Claude+Nougaro/@44.1595227,1.550696,17z/data=!3m1!4b1!4m6!3m5!1s0x12ac422a1fd0015b:0x94d0993067638d11!8m2!3d44.1595189!4d1.5532709!16s%2Fg%2F1thv209r?entry=ttu&g_ep=EgoyMDI1MDIwMy4wIKXMDSoASAFQAw%3D%3D" target="_blank">lycée Claude Nougaro à Monteils</a>.
                </p>
                <p>Je suis actuellement toujours en cours d'études, je vous propose ainsi mon portfolio dans lequel on pourra retrouver
                    mon parcours scolaire ainsi que différents projets que j'ai pu entreprendre pendant ma carrière, qu'ils soient personnels ou professionnels.
                </p>
                <p>Vous pourrez retrouver en cliquant sur le bouton ci-dessous mon CV.</p>
                <a class="btn btn-primary downloadButton" href="downloadable/CV Mathis PEROT-PEREIRA.pdf" role="button" download=""><i class="bi bi-download"></i> Télécharger</a>
            </div>
            <br>
            <br>
            <div class="cardAboutBTSSIO">
                <h2>Qu'est-ce que le BTS SIO <i class="bi bi-backpack"></i>?</h2>
                <hr>
                <p>Avant de me présenter et de présenter mon parcours scolaire, je souhaite expliquer ce qu'est le BTS SIO.</p>
                <p>Le Brevet de Technicien Supérieur (BTS) aux Services Informatiques aux Organisations (SIO), est une fillière d'étude POST BAC, après un Bac Professionnel
                    Systèmes Numériques par exemple. Dans ce BTS, on peut s'y former en matière de développement web ou application, en réseau et dans le domaine des bases
                    de données.
                </p>
                <p class="fs-3">Le BTS SIO possède deux options :</p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4 text-center">Option SLAM (celle que j'ai choisie) <i class="bi bi-code-slash"></i></p>
                        <p class="text-center">
                            L'option Solutions Logicielles et Applications Métiers (SLAM) du BTS SIO est un cursus intégral axé sur le développement et la
                            gestion de solutions logicielles, formant les étudiants de manière efficace aux professions du développement informatique et leur
                            permettant de répondre aux exigences spécifiques des entreprises en ce qui concerne les systèmes d'information.
                        </p>

                    </div>
                    <div class="col-md-6">
                        <p class="fs-4 text-center">Option SISR <i class="bi bi-router"></i></p>
                        <p class="text-center">
                            L'option Solutions d'Infrastructure Systèmes et Réseaux (SISR) du BTS SIO forme les étudiants pour devenir des experts qualifiés
                            dans la gestion et la sécurisation des systèmes et réseaux, répondant ainsi aux besoins grandissants de fiabilité et d'efficacité
                            des infrastructures informatiques au sein des organisations.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <p class="fs-3">Mes compétences en développement</p>
            <p>J'ai pu acquérir plusieurs compétences de développement, voici les différentes matières que je maîtrise.</p>

            <div class="container">
                <div class="card">
                    <img src="img/logos/HTML5_logo_and_wordmark.svg.png" alt="HTML">
                    <p>HTML</p>
                </div>
                <div class="card">
                    <img src="img/logos/Unofficial_JavaScript_logo_2.svg.png" alt="JavaScript">
                    <p>JavaScript</p>
                </div>
                <div class="card">
                    <img src="img/logos/Logo_C_sharp.svg.png" alt="C#">
                    <p>C# (ou C-Sharp)</p>
                </div>
                <div class="card">
                    <img src="img/logos/PHP-logo.svg.png" alt="PHP">
                    <p>PHP</p>
                </div>
                <div class="card">
                    <img src="img/logos/Java_Logo.svg.png" alt="Java">
                    <p>Java</p>
                </div>
                <div class="card">
                    <img src="img/logos/codeigniter.svg" alt="CodeIgniter 4">
                    <p>CodeIgniter (Framework Web)</p>
                </div>
            </div>
            <br>
            <p class="fs-3">Outils Utilisés</p>
            <p>Grâce à ces outils, j'ai pu pratiquer et raffiner les connaissances acquises en cours.</p>
            <p class="fs-4">Programmation / Développement</p>
            <div class="container">
                <div class="card">
                    <img src="img/logos/Visual_Studio_Code_1.35_icon.svg.png" alt="VSCode">
                    <p>Visual Studio Code</p>
                </div>
                <div class="card">
                    <img src="img/logos/Apache_NetBeans_Logo.svg.png" alt="NetBeans">
                    <p>Netbeans</p>
                </div>
                <div class="card">
                    <img src="img/logos/WampServer-logo.svg.png" alt="WampServer64">
                    <p>Wampserver64</p>
                </div>
                <div class="card">
                    <img src="img/logos/WordPress-logotype-alternative.png" alt="Wordpress">
                    <p>Wordpress</p>
                </div>
            </div>
            <br>
            <p class="fs-4">Gestion de Données</p>
            <div class="container">
                <div class="card">
                    <img src="img/logos/PhpMyAdmin_logo.svg.png" alt="PHP">
                    <p>phpMyAdmin</p>
                </div>
                <div class="card">
                    <img src="img/logos/cropped-logos_wd-Tr-v1-1.png" alt="Java">
                    <p>WinDesign</p>
                </div>
                <div class="card">
                    <img src="img/logos/pgadmin-icon-2048x2048-rxk8ydpt.png" alt="Java">
                    <p>PgAdmin</p>
                </div>
            </div>
            <br>
            <p class="fs-4">Réseaux et Virtualisation</p>
            <div class="container">
                <div class="card">
                    <img src="img/logos/proxmox.png" alt="Proxmox">
                    <p>Proxmox</p>
                </div>
                <div class="card">
                    <img src="img/logos/MS-Azure_logo_stacked_c-gray_rgb.png" alt="MS Azure">
                    <p>Microsoft Azure</p>
                </div>
                <div class="card">
                    <img src="img/logos/Cisco-Packet-Tracer.png" alt="Cisco Packet Tracer">
                    <p>Cisco Packet Tracer</p>
                </div>
                <div class="card">
                    <img src="img/logos/PuTTY_Icon.svg.png" alt="PuTTY">
                    <p>Putty</p>
                </div>
                <div class="card">
                    <img src="img/logos/FileZilla_logo.svg.png" alt="FileZilla">
                    <p>FileZilla</p>
                </div>
                <div class="card">
                    <img src="img/logos/Virtualbox_logo.png" alt="VirtualBox">
                    <p>VirtualBox</p>
                </div>
            </div>
            <br>
            <p class="fs-4">Systèmes d'exploitations utilisés</p>
            <div class="container">
                <div class="card">
                    <img src="img/logos/Windows_logo_-_2012.svg.png" alt="Windows">
                    <p>Windows 10 et 11</p>
                </div>
                <div class="card">
                    <img src="img/logos/Debian_logo.png" alt="Debian">
                    <p>Debian (Linux)</p>
                </div>
                <div class="card">
                    <img src="img/logos/kali_linux_dragon-logo_brandlogos.net_lygul.png" alt="Kali">
                    <p>Kali (Linux)</p>
                </div>
            </div>
            <br>
            <p class="fs-4">Autre</p>
            <div class="container">
                <div class="card">
                    <img src="img/logos/Octicons-mark-github.svg" alt="Github">
                    <p>Github</p>
                </div>
                <div class="card">
                    <img src="img/logos/git-bash.svg" alt="Github">
                    <p>Gitbash</p>
                </div>
                <div class="card">
                    <img src="img/logos/Microsoft_Word_2013-2019_logo.png" alt="MS Word">
                    <p>Word</p>
                </div>
                <div class="card">
                    <img src="img/logos/Microsoft_Excel_2013-2019_logo.svg" alt="MS Excel">
                    <p>Excel</p>
                </div>
                <div class="card">
                    <img src="img/logos/Microsoft_PowerPoint_2013-2019_logo.svg.png" alt="MS Powerpoint">
                    <p>Powerpoint</p>
                </div>
            </div>
            <br>
        </section>
        <section id="parcours">
            <h2>Mon parcours scolaire <i class="bi bi-mortarboard"></i></h2>
            <hr>
            <div class="container">
                <div class="cardParcours">
                    <p class="fs-4 cardParcoursTitle">BTS SIO Option SLAM</p>
                    <p><i class="bi bi-geo-alt-fill"></i> Lycée Polyvalent Claude Nougaro à Monteils</p>
                    <p><i class="bi bi-calendar-week"></i> 2023 - 2025</p>
                    <p><i class="bi bi-globe"></i> <a href="https://claude-nougaro.mon-ent-occitanie.fr/" target="_blank">Site de l'établissement</a></p>
                    <p class="avisChoix">Après le BAC, j'ai voulu m'orienter vers un BTS SIO dans lequel j'ai pu acquérir beaucoup de compétences en informatique et en programmation.</p>

                    <div class="buttonContainer">
                        <button type="button" onclick="changeMapLocation(44.1606094, 1.5530388); changeMarkerLocation(44.1606094, 1.5530388, '376 Av. des Lumières, 82300 Monteils')" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>&nbsp;Voir sur la carte</span>
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Emplacement de l'établissement</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cliquez sur le marqueur pour avoir l'adresse</p>
                                    <div id="map">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="cardParcours">
                    <p class="fs-4 cardParcoursTitle">BAC Professionnel Systèmes Numériques <br> Option C : RISC (Réseaux Informatiques et Systèmes Communicants)</p>
                    <p><i class="bi bi-geo-alt-fill"></i> Lycée Antoine Bourdelle à Montauban</p>
                    <p><i class="bi bi-calendar-week"></i> 2020 - 2023</p>
                    <p><i class="bi bi-globe"></i> <a href="https://bourdelle.mon-ent-occitanie.fr/" target="_blank">Site de l'établissement</a></p>
                    <p class="avisChoix">Pendant le collège, j'ai développé une passion pour l'informatique. Le choix de ce bac professionnel fut donc un choix évident.</p>

                    <div class="buttonContainer">
                        <button type="button" onclick="changeMapLocation(44.0145933, 1.3687326); changeMarkerLocation(44.0145933, 1.3687326, '3 Bd Edouard Herriot, 82000 Montauban')" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>&nbsp;Voir sur la carte</span>
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Emplacement de l'établissement</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cliquez sur le marqueur pour avoir l'adresse</p>
                                    <div id="map">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <p class="fs-3">Certifications Obtenues</p>
            <p>J'ai pu obtenir ces certifications durant mes études au lycée et en BTS. Ces certifications permettent de certifier mes connaissances acquises lors de mes études.</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cardCertif" id="certif1">
                            <p>Certification SecNum Académie</p>
                            <img src="img/logos/fbe2f42c6266add676c8d76ea12e45251ee01c4f-removebg-preview.png" class="imgCertif-fluid" alt="Certification SecNum">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cardCertif" id="certif2">
                            <p>Certification Pix</p>
                            <img src="img/logos/Pix_logo.svg.png" class="imgCertif-fluid" alt="Certification Pix">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="stages">
            <h2>Mes stages <i class="bi bi-mortarboard"></i></h2>
            <hr>
            <div class="container">
                <div class="cardParcours">
                    <p class="fs-4 cardParcoursTitle">DNM - Digital & Marketing</p>
                    <p><i class="bi bi-geo-alt-fill"></i> Cannes, France</p>
                    <p id="dateStage"><i class="bi bi-calendar-week"></i> 6 Janvier 2025 - 14 Février 2025</p>
                    <p class="avisChoix">Stage en développement Web, j'ai pratiqué ce stage pendant ma seconde année de BTS.</p>

                    <div class="buttonContainer">
                        <button type="button" onclick="changeMapLocation(43.55070877075195, 6.973115921020508); changeMarkerLocation(43.55070877075195, 6.973115921020508, '6 Rue de la Libération, 06150 Cannes, France')" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>&nbsp;Voir sur la carte</span>
                        </button>

                        <a class="buttonLink" href="">
                            <i class="bi bi-linkedin"></i>
                            <span>&nbsp;Voir sur linkedin</span>
                        </a>

                        <a class="buttonLink" href="pdf/DocUtilisateurPrimaSTEM.pdf" target="_blank">
                            <i class="bi bi-file-earmark-text"></i>
                            <span>&nbsp;Rapport de stage</span>
                        </a>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Emplacement de l'établissement</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cliquez sur le marqueur pour avoir l'adresse</p>
                                    <div id="map">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="cardParcours">
                    <p class="fs-4 cardParcoursTitle">IF2M - Informatique</p>
                    <p><i class="bi bi-geo-alt-fill"></i> Montauban, France</p>
                    <p id="dateStage"><i class="bi bi-calendar-week"></i> 16 Janvier 2023 - 24 Mars 2023 en Terminale</p>
                    <p id="dateStage"><i class="bi bi-calendar-week"></i> 27 Mai 2024 - 28 Juin 2024 en première année de BTS</p>
                    <p><i class="bi bi-globe"></i> <a href="https://www.if2m.fr/" target="_blank">Site de l'entreprise</a></p>
                    <p class="avisChoix">Suite à ma passion dans l'informatique, IF2M fut un choix évident à prendre pour y faire une demande de stage.
                        <br>J'ai pu pratiquer ce stage pendant mon année de Terminale en Bac Professionnel et pendant ma première année de BTS.
                    </p>

                    <div class="buttonContainer">
                        <button type="button" onclick="changeMapLocation(44.037559509277344, 1.358489990234375); changeMarkerLocation(44.037559509277344, 1.358489990234375, '53 Rue Voltaire, 82000 Montauban')" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>&nbsp;Voir sur la carte</span>
                        </button>

                        <a class="buttonLink" href="https://www.linkedin.com/company/if2m-informatique/" target="_blank">
                            <i class="bi bi-linkedin"></i>
                            <span>&nbsp;Voir sur linkedin</span>
                        </a>

                        <button type="button" id="rapportTermButton" class="button">
                            <i class="bi bi-file-earmark-text"></i>
                            <span>&nbsp;Rapports de stage</span>
                        </button>
                    </div>


                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Emplacement de l'établissement</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cliquez sur le marqueur pour avoir l'adresse</p>
                                    <div id="map">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projets">
            <h2>Mes projets professionnels et personnels</h2>
            <hr>
            <header>
                <div class="container btnMenuWrapper">
                    <a class="buttonLink" href="pdf/tableauSyntheseFinal.pdf" target="_blank">
                        <i class="bi bi-file-earmark"></i>
                        <span>&nbsp;Voir la grille de compétences</span>
                    </a>
                    <nav class="navProjets">
                        <ul class="listeProjets bg-white border px-4 py-2">
                            <li class="elemProjet"><a class="linkProjet allProjects">Tout mes projets</a></li>
                            <li class="elemProjet"><a class="linkProjet devWeb">Développement Web</a></li>
                            <li class="elemProjet"><a class="linkProjet devApp">Développement Application</a></li>
                            <li class="elemProjet"><a class="linkProjet other">Autre</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <section class="content devWeb">
                <h2>Développement Web</h2>
                <div class="container">
                    <div class="cardProj">
                        <p>AP 3 : Publicom</p>
                        <img src="img/logos/brave_1MXCg2pfsE.png" class="imgCertif-fluid">
                        <div class="buttonCardProj">
                            <a class="buttonLink" href="pdf/Documentation Technique Publicom.pdf" target="_blank">
                                <i class="bi bi-file-earmark"></i>
                                <span>&nbsp;Voir le PDF</span>
                            </a>
                        </div>
                    </div>
                    <div class="cardProj">
                        <p>PrimaSTEM</p>
                        <img src="img/logos/channels4_profile.jpg" class="imgCertif-fluid">
                        <div class="buttonCardProj">
                            <a class="buttonLink" href="pdf/Doc Utilisateur PrimaSTEM Backoffice.pdf" target="_blank">
                                <i class="bi bi-file-earmark"></i>
                                <span>&nbsp;Voir le PDF</span>
                            </a>
                        </div>
                    </div>
                    <div class="cardProj" id="reqajax">
                        <p>Requêtes AJAX</p>
                        <img src="img/AP 4/miniaProj.png" class="imgCertif-fluid">
                    </div>
                </div>
            </section>

            <section class="content devApp">
                <h2>Développement Application</h2>
                <div class="container">
                    <div class="cardProj" id="ap4proj">
                        <p>AP 4 : Client Lourd en Java</p>
                        <img src="img/AP 4/miniaProj.png" class="imgCertif-fluid">
                        <div class="buttonCardProj">
                            <a class="buttonLink" href="pdf/Rapport Amset AP4.pdf" target="_blank">
                                <i class="bi bi-file-earmark"></i>
                                <span>&nbsp;Voir le PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content other">
                <h2>Autre projets</h2>
                <div class="container">
                    <div class="cardProj">
                        <p>GLPI : Gestion d'un parc informatique</p>
                        <img src="img/logos/GLPI_Logo-color.png" class="imgCertif-fluid">
                        <div class="buttonCardProj">
                            <a class="buttonLink" id="openPdf" href="pdf/Mission GLPI 1 - gestion de parc.pdf" target="_blank">
                                <i class="bi bi-file-earmark"></i>
                                <span>&nbsp;Voir le PDF</span>
                            </a>
                        </div>
                    </div>
                    <div class="cardProj">
                        <p>Réplication de Base de Données avec Azure</p>
                        <img src="img/logos/MS-Azure_logo_stacked_c-gray_rgb.png" class="imgCertif-fluid">
                        <div class="buttonCardProj">
                            <a class="buttonLink" href="pdf/Réplication MariaDB sur AZURE.pdf" target="_blank">
                                <i class="bi bi-file-earmark"></i>
                                <span>&nbsp;Voir le PDF</span>
                            </a>
                        </div>
                    </div>
                    <div class="cardProj" id="">
                        <p>AP 4 : Client Lourd en Java</p>
                        <img src="img/AP 4/miniaProj.png" class="imgCertif-fluid">
                    </div>

                </div>
            </section>
        </section>
        <section id="veilleTech">
            <h2>Veille Technologique</h2>
            <hr>
            <p class="fs-3">Qu'est-ce que la veille technologique ?</p>
            <p>La veille technologique consiste à suivre régulièrement l'évolution des technologies.
                Elle vise à permettre de recueillir, d'analyser et de diffuser des informations en provenance de sources multiples et
                diverses (ouvrages, articles de presse, sites web, rapports, catalogues, brevets, etc.) pour permettre de déceler les
                tendances qui se dessinent, de percevoir les possibilités d'innovation, les opportunités offertes mais aussi les menaces.
                Les entreprises et organismes nombreux à recourir à cette activité visent à adapter le cas échéant leurs choix, leurs axes
                et leurs stratégies pour rester compétitifs au sein d'un écosystème en constante mutation.</p>
            <p class="fs-3">Sujet : Cloud Computing</p>
            <p class="fs-4">Thème 1 : C'est quoi le Cloud Computing ?</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="container">
                        <div class="cardParcours">
                            <h3 class="text-center">En quoi consiste le cloud computing ?</h3>
                            <p class="text-center">Le cloud computing est la fourniture de services informatiques
                                (notamment les serveurs, le stockage, les bases de données, la gestion réseau, les logiciels, les outils d'analyse et la veille) via Internet
                                (le cloud) dans le but d'accélérer l'innovation, d'offrir des ressources flexibles et de profiter d'économies d'échelle.
                            </p>
                            <br>
                            <h5 class="text-center">Source : <a href="https://azure.microsoft.com/fr-fr/resources/cloud-computing-dictionary/what-is-cloud-computing" target="_blank">Microsoft Azure</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="cardParcours">
                            <h3 class="text-center">Le fonctionnement du cloud computing.</h3>
                            <p class="text-center">Le cloud computing se base sur l'hypothèse selon laquelle la majeure partie de l'informatique s'effectue sur une
                                machine souvent distante qui diffère de celle en cours d'utilisation. Les données recueillies lors de ce processus
                                sont stockées et traitées par des serveurs distants (aussi connus sous le nom de « serveurs Cloud »), ce qui signifie
                                que l'appareil qui accède au Cloud est moins sollicité.
                            </p>
                            <br>
                            <h5 class="text-center">Source : <a href="https://www.salesforce.com/fr/learning-centre/tech/cloudcomputing/" target="_blank">Salesforce</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="cardParcours">
                            <h3 class="text-center">Différents modèles et services de Cloud Computing.</h3>
                            <p class="text-center">Il y a trois modèles de Cloud computing : le Cloud public, le Cloud privé et le Cloud hybride. <br> Le Cloud public fait
                                référence à des services partagés, accessibles par tous via une connexion Internet et une carte de paiement. Pour sa part, le Cloud privé
                                désigne une infrastructure de services dans laquelle les serveurs Cloud sont gérés et hébergés de façon privée. En revanche, le Cloud hybride
                                combine des ressources informatiques du Cloud privé et du Cloud public, afin d'offrir davantage de flexibilité à ses utilisateurs.
                            </p>
                            <br>
                            <h5 class="text-center">Source : <a href="https://iotjourney.orange.com/fr-FR/connectivite/qu-est-ce-que-le-cloud-computing" target="_blank">Orange IoT Journey</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <p class="fs-4">Thème 2 : 3 Types de services fournis par le Cloud Computing</p>
            <div class="container">
                <div class="cardParcours">
                    <h4 class="text-center"> En général, les founisseurs de services via le cloud divisent leurs offres en quatre groupes principaux : </h4>
                    <br>
                    <ul>
                        <li>
                            <p><strong>Infrastructure as a Service (IaaS)</strong> : Les fournisseurs de services IaaS proposent des ressources informatiques, telles que
                                des serveurs virtuels, des réseaux, du stockage et des systèmes d'exploitation, via des serveurs et des réseaux hautement
                                virtualisés. Les clients paient en fonction de l'utilisation de ces ressources.</p>
                            <p>Exemples d'IaaS : AWS EC2, Microsoft Azure...</p>
                        </li>
                        <br>
                        <li>
                            <p><strong>Platform as a Service (PaaS)</strong> : Les fournisseurs de services PaaS proposent des environnements de développement et de déploiement
                                complets dans le cloud, avec des ressources qui permettent aux développeurs de créer des applications et de les déployer rapidement.</p>
                            <p>Exemples de PaaS : Google App Engine, Microsoft Azure...</p>
                        </li>
                        <br>
                        <li>
                            <p><strong>Software as a Service (SaaS)</strong> : Les fournisseurs de services SaaS proposent des applications logicielles accessibles via Internet,
                                généralement via un navigateur web. Les clients paient un abonnement pour accéder à ces applications, plutôt que d'acheter des
                                licences logicielles traditionnelles.</p>
                            <p>Exemples de SaaS : Zoom, Trello, Dropbox...</p>

                        </li>
                        <br>
                    </ul>
                    </p>
                </div>
            </div>

            <p class="fs-4">Thème 3 : Avantages et inconvénients du Cloud Computing</p>
            <div class="container">
                <div class="cardParcours">
                    <h4 class="text-center">Comme pour chaque objet, qu'il soit physique ou virtuel, le Cloud Computing à ses Avantages mais aussi ses Inconvénients</h4>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-center">Avantages</h5>
                            <ul>
                                <li>
                                    <h4>Réduction des coûts</h4>
                                    <p class="text-center">Le cloud computing peut contribuer à réduire les coûts puisque on n'a pas à investir dans l'achat,
                                        la maintenance et le remplacement de matériel physique.</p>
                                </li>
                                <li>
                                    <h4>Évolutivité et Flexibilité</h4>
                                    <p class="text-center">Le cloud computing peut offrir davatange de flexibité à une entreprise. En effet, celui-ci permet de
                                        faire évoluer rapidement les ressources et les espaces de stockage afin de répondre aux besoins de l'entreprise.</p>
                                </li>
                                <li>
                                    <h4>Sécurité et Conformité</h4>
                                    <p class="text-center">Le cloud computing offre des solutions avancées dans la sécurité et la conformité, permettant d'offrir
                                        aux entreprises la sécurité nécessaire pour protéger leurs données. Pour garantir la conformité aux exigences réglementaires,
                                        les entreprises doivent produire un rapport indépendant à l'attention des régulateurs.</p>
                                </li>
                                <li>
                                    <h4>Collaboration plus simplifiée et plus efficace</h4>
                                    <p class="text-center">Le stockage dans le cloud vous permet de rendre des données disponibles partout et à tout moment.
                                        Au lieu d'être liées à un emplacement ou un appareil spécifiques, les données sont accessibles aux utilisateurs du monde
                                        entier depuis n'importe quel appareil, à condition de disposer d'une connexion Internet.</p>
                                </li>
                                <li>
                                    <h4>Beaucoup d'économies</h4>
                                    <p class="text-center">Quel que soit le modèle de service cloud que l'utilisateur choisis, l'utilisateur payera que pour les ressources qu'il
                                        utilisera réellement.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center">Inconvénients</h5>
                            <ul>
                                <li>
                                    <h4>Pannes imprévisibles</h4>
                                    <p class="text-center">Les services de cloud computing étant basés sur Internet, il existe toujours un risque de temps d'arrêt et de
                                        pannes de service. De telles interruptions des processus critiques, surtout si elles se produisent régulièrement, peuvent vous
                                        faire perdre du temps et des clients.</p>
                                </li>
                                <li>
                                    <h4>Dépendance au(x) fournisseur(s)</h4>
                                    <p class="text-center">La dépendance d'une entreprise à un fournisseur peut poser des problèmes en cas de rupture de contrat ou de
                                        défaillance technique. Pour éviter cela, il est conseillé d'adopter une stratégie multi-cloud, c'est-à-dire de répartir les services
                                        sur plusieurs fournisseurs, afin de minimiser les risques associés à la dépendance à un seul fournisseur.</p>
                                    </p>
                                </li>
                                <li>
                                    <h4>Confidentialité des données</h4>
                                    <p class="text-center">Si l'entreprise décide de choisir un fournisseur basé aux États-Unis, cela peut poser des problèmes au niveau
                                        du RGPD en raison des lois américaines sur la divulgation des données.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <h5 class="text-center">Sources :
                            <a href="https://www.cfi.ch/quels-sont-les-avantages-et-inconvenients-du-cloud-computing/" target="_blank">CFI SA</a>
                            <a href="https://cloud.google.com/learn/advantages-of-cloud-computing?hl=fr" target="_blank">Cloud Google Services</a>
                            <a href="https://www.itta.net/blog/cloud-computing-quels-avantages-et-inconvenients-pour-les-entreprises/" target="_blank">ITTA</a>
                        </h5>
                    </div>
                </div>
            </div>

            <p class="fs-4">Thème 4 : Exemples d'applications et de fournisseurs permettant de faire du cloud computing</p>
            <div class="container">
                <div class="cardApp">
                    <div class="imgApp">
                        <img src="img/logos/Dropbox-Logo-2017-present.png" alt="">
                    </div>
                    <div class="textApp">
                        <h2 class="text-center">Dropbox</h2>
                        <p class="text-center" id="pMoreInfo">Cliquez pour avoir plus d'informations</p>
                        <div class="moreInfo">
                            <p>Dropbox est un site d'hébergement de fichiers en proposant des services comme le stockage de fichiers,
                                le partage de fichiers en ligne et la signature électronique. Dropbox est considéré comme un SaaS, un Software
                                as a Service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="cardApp">
                    <div class="imgApp">
                        <img src="img/logos/426b18214710b96cacea3f66650d9fc7.png" alt="">
                    </div>
                    <div class="textApp">
                        <h2 class="text-center">Geforce Now</h2>
                        <p class="text-center" id="pMoreInfo">Cliquez pour avoir plus d'informations</p>
                        <div class="moreInfo">
                            <p>Geforce Now est une application appartenant à NVIDIA. Geforce Now permet de pouvoir jouer à des jeux sur une machine
                                distante via le cloud permettant à des personnes ayant des machines peu puissantes de pouvoir jouer à des jeux récents et
                                plus gourmants en ressources. Cependant, celle-ci est limitée à 1h par utilisateur, sous contrainte de prendre un abonnement payant.
                                Geforce Now est considéré comme une PaaS, une Platform as a Service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="cardApp">
                    <div class="imgApp">
                        <img src="img/logos/MS-Azure_logo_stacked_c-gray_rgb.png" alt="">
                    </div>
                    <div class="textApp">
                        <h2 class="text-center">Microsoft Azure</h2>
                        <p class="text-center" id="pMoreInfo">Cliquez pour avoir plus d'informations</p>
                        <div class="moreInfo">
                            <p>Microsoft Azure est la plateforme de cloud computing concue par Microsoft. Azure est une offre d'hébergement d'applications et de
                                données, et aussi une offre de services comme le workflow, le stockage et synchronisation de fichiers, la gestion de bases de données,
                                etc... Microsoft Azure est considéré comme une IaaS et comme un SaaS, une Infrastructure as a Service et un Software as a Service
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="cardApp">
                    <div class="imgApp">
                        <img src="img/logos/Parsec_Vertical_Logo_Light_Background.png" alt="">
                    </div>
                    <div class="textApp">
                        <h2 class="text-center">Parsec</h2>
                        <p class="text-center" id="pMoreInfo">Cliquez pour avoir plus d'informations</p>
                        <div class="moreInfo">
                            <p>Parsec est un logiciel permettant d'accéder à un ordinateur à distance via le cloud. Parsec permet de jouer à des jeux sur une machine
                                distante, de pouvoir travailler sur des projets à distance, etc... Parsec est considéré comme une PaaS, une Platform as a Service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2>Contact <i class="bi bi-envelope-at"></i></h2>
            <hr>
            <p>Vous pouvez me contacter via les réseaux sociaux ci-dessous ou par mail ou par téléphone.</p>
            <div class="container-contact">
                <div class="contact-wrapper">
                    <div class="contact-info">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 0a5 5 0 0 0-5 5c0 4.9 5 11 5 11s5-6.1 5-11a5 5 0 0 0-5-5zM5.5 5a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0z" />
                            </svg>Montauban, France</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.89L0 4.697zM6.761 8.83 1.401 12.236c.202.472.68.764 1.179.764h12c.5 0 .978-.292 1.18-.764L9.239 8.83 8 9.586l-1.239-.756zM16 4.697l-5.803 3.514L16 11.801V4.697z" />
                            </svg>mathisperot420@gmail.com</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 1 .87-.193l2.453 1.4c.291.166.44.508.36.823l-.573 2.164a.678.678 0 0 1-.502.503c-.663.17-1.292.426-1.883.746a11.61 11.61 0 0 0 4.546 4.546c.32-.591.576-1.22.746-1.883a.678.678 0 0 1 .503-.502l2.164-.573c.315-.08.657.069.823.36l1.4 2.453a.678.678 0 0 1-.193.87l-2.09 2.09c-.403.403-1.01.545-1.573.375a14.116 14.116 0 0 1-5.17-3.27 14.116 14.116 0 0 1-3.27-5.17c-.17-.563-.028-1.17.375-1.573l2.09-2.09z" />
                            </svg>06 60 96 47 67</p>
                    </div>
                    <div class="contact-form">
                        <h2>Envoyez moi un message</h2>

                        <form action="https://formsubmit.co/mathisperot420@gmail.com" method="post">
                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_next" value="https://mathis-dev.fr">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Votre Nom</label>
                                    <input type="text" id="name" name="nom" placeholder="Entrez votre nom">
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Votre Prénom</label>
                                    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom">
                                </div>
                            </div>
                            <label>Votre email</label>
                            <input type="email" name="email" placeholder="Entrez votre email" required><br>
                            <label for="subject">Sujet*</label>
                            <input type="text" id="subject" placeholder="Sujet de votre message" required>
                            <label for="message">Votre Message*</label>
                            <textarea id="message" rows="5" name="message" placeholder="Votre message ici..." required></textarea><br>
                            <input type="submit" id="submitButton">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>