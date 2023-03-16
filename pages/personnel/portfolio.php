    <body data-spy="scroll" data-target="#menu" data-offset="0">

        <header id="presentation" class="navMargin">
            <div class="jumbotron no-margin opaque2">
                <div class="row no-margin">
                    <div class="col-md-2" style="width:fit-content" >
                        <img src="style/image/raspberrypi/raspberrypi.jpg" width="400" height="180" style="margin:50px">
                    </div>
                    <div class="col-md-7" style="margin-top:20px;">
                        <h1 class="display-4 bahnschrift_title">Serveur Raspberry pi :</i></h1>
                        <p class="lead bahnschrift_text">
                            Pour héberger mon site portfolio, j'ai mis en place un serveur Apache sur une Raspberry pi.
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div id="site" style="margin-top:30px;height: 90vh;">
            <div class="col-md-1" style="margin-bottom:20px;"></div>
            <h2 class="bahnschrift_title" style="padding-left:30px;margin-bottom: 0px;color:rgb(219, 219, 219);width: 65%;">Images du projet :</h2><br>
            <div class="row no-margin">
                <div class="col-md-2" style="margin-bottom:20px;">
                </div>
                <div class="col-md" style="margin-bottom:20px;color:rgb(219, 219, 219);width: 65%;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="max-height:900px;max-width:1000px;margin-left:100px">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="style/image/raspberrypi/piweb-switch-low.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Raspberry pi</h5>
                                    <p>Actuellement dans le boîtier officiel. Elle est branchée via ethernet sur un switch réseau et ne requiert pas d'écran pour fonctionner</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/raspberrypi/piweb-open-low.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Boîtier ouvert</h5>
                                    <p>Voici l'intérieur du boîtier. Un ventilateur, ainsi qu'un radiateur ont été ajoutés</p>
                                </div>
                            </div><div class="carousel-item">
                                <img src="style/image/raspberrypi/piweb-ssh.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Accès SSH</h5>
                                    <p>Accès au terminal de la Raspberry pi via SSH avec PuTTY</p>
                                </div>
                            </div><div class="carousel-item">
                                <img src="style/image/raspberrypi/piweb-scp.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Transfert de fichiers</h5>
                                    <p>Synchronisation des fichiers via SFTP avec WinSCP</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/raspberrypi/grafana.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Tableau de bord Grafana</h5>
                                    <p>Page d'accueil du tableau de bord Grafana, non configuré</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-2" style="margin-bottom:20px;">
                </div>
            </div>
        </div> 

        <div class="opaque2 navMargin" style="margin-top:30px;">
            <h2 class="bahnschrift_title" style="margin-bottom:30px; margin-left:30px;margin-top:-40px">Explication :</h2>
            <div class="row no-margin bahnschrift_text" style="margin-top:-20px;">
                <div class="col-md-1" style="margin-bottom:20px;"></div>
                <div class="col-md" style="margin-bottom:20px;width: 65%;">
                    Pour mettre en place un serveur Apache sur une Raspberry pi, 
                    j'ai installé et paramétré différents logiciels et packets Linux, 
                    tel qu'un pare feu ou bien la gestion automatique des packets / upgrades / DNS.<br>
                    <br>
                    <!-- Lister et présenter les méthodes logicielles, etc, mises en place
                    
                    Évolutions : 
                    -Mettre en place des hot backups de la carte SD.
                    -Migrer de RaspbianOS gnome vers Raspbian Lite afin de n'avoir que les packets nécessaires au bon fonctionnement du serveur web.

                    -->

                    <!-- <br><div style="width:100%; padding-bottom:56.25%; position:relative;">
                        <iframe name="vieux" id="vieux" src="Portfolio vieux/index.html" style="position:absolute; top:0px; left:0px; 
                        width:100%; height:100%; border: none; overflow: hidden;"></iframe>
                    </div><br> -->
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
            <h2 class="bahnschrift_title" style="margin-bottom:30px; margin-left:30px;margin-top:-40px">Liste des packets installés :</h2> 
            <div id="packet" class="row">
                <div class="col-md-1"></div>
                <div class="col-md">
                    <div class="row scrolling" style="border:1.5mm ridge rgb(68, 94, 167);border-radius: 15px;margin-bottom: 30px;">
                        
                        <div class="col-md" style="margin:30px">
                            <ul>
                                <li>
                                    Serveur : 
                                </li><br>
                                <ul>
                                    <li>
                                        Apache : Mise en place du serveur Apache afin d'héberger en ligne mon site portfolio.
                                    </li><br>
                                    <li>
                                        Php : Utilisation de PHP pour les pages web
                                    </li><br>
                                    <li>
                                        Certbot : Créé par Letsencrypt afin de faciliter le processus d'obtention de certificat SSL pour avoir des connexions HTTPS.<br>
                                        La configuration de virtualhost Apache / création de clés et l'obtention de certificats sont automatisés.
                                    </li><br>
                                </ul> 
                                <li>
                                    Utilitaires : 
                                </li><br>
                                <ul>
                                    <li>
                                        Nano : Éditeur de texte, utilisé pour changer les fichiers systèmes et visualiser les logs.
                                    </li><br>
                                    <li>
                                        Unzip : Utilitaire de décompression de fichier zip.
                                    </li><br>
                                    <li>
                                        Wget : Téléchargements de fichiers / packets ou logiciels via HTTP ou HTTPS.
                                    </li><br>
                                    <li>
                                        Curl : Récupération de contenu via une URL
                                    </li><br>
                                    <li>
                                        Git : Récupération de repositories et projets open source.
                                    </li><br>
                                </ul>
                                <li>
                                    Networking et sécurité : 
                                </li><br>
                                <ul>
                                    <li>
                                        Ufw : Pare feu paramétré afin d’autoriser les connexions seulement sur les ports nécessaires.
                                    </li><br>
                                    <li>
                                        OpenVPN : Serveur VPN me permettant de me connecter à distance sur mon réseau local. Il créé une paire de clés pour chaque utilisateur voulu avec mot de passe afin de sécuriser l'accès
                                    </li><br>
                                    <li>
                                        Fail2ban : Protection contre le crack par force brute du mot de passe SSH. Ban au bout de x connexions ratées les adresses IP.
                                    </li><br>
                                    <li>
                                        Unnatended-upgrades : Automatisation via des cronjob des mises a jour système.
                                    </li><br>
                                    <li>
                                        Grafana :  Tableau de bord qui permet de visualiser en temps réel de Data Source. Utilise le port 3000.<br>
                                        Data Sources utilisés par grafana :
                                    </li><br>
                                    <ul>
                                        <li>
                                            Prometheus : Monitoring de l'état du serveur via des graphs. Utilise le port 9090.
                                        </li><br>
                                        <li>
                                            Loki : Gestion et visualisation des logs. Utilise le port 3100.
                                        </li>
                                    </ul>
                                </ul>
                            </ul>
                        </div>

                        <div class="col-md-1"></div>

                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

        <div id="" class="navMargin">
            <br>
            <h2 style="margin-left:30px;margin-right:auto;color:rgb(219, 219, 219);width: 65%;">Logiciels utilisés :</h2><br>
            <div class="row no-margin" style="margin-top:-20px;margin-bottom:20px;">
                <div class="col-md-1" style="margin-bottom:20px;">
                </div>
                <div class="col-md" style="margin-bottom:20px; color:rgb(219, 219, 219);width: 65%;">
                    <ul>
                        <li>
                            Visual studio code : Utilisé sur mes ordinateurs afin de coder en local sur le portfolio.
                        </li>
                        <li>
                            PuTTY : Logiciel utilisé afin d'accéder via SSH au terminal de ma Raspberry pi.
                        </li>
                        <li>
                            WinSCP : 
                        </li>
                        <li>
                            OpenVPN connect : Client de connexion SSH à un serveur OpenVPN. Requiert d'importer un fichier de paramétrage OpenVPN crée côté serveur.
                        </li>
                        <li>
                            VNC Viewer : Accès au bureau GNOME de ma Raspberry pi à distance, sans avoir besoin d'écran (headless access).<br>
                            Je vais bientôt abandonner cette manière d'accéder à ma Raspberry pi, en migrant vers une installation CLI de Raspberry pi OS.
                        </li>
                    </ul>
                </div>
                <div class="col-md-1" style="margin-bottom:20px;">
                </div>
            </div>
        </div>
        <!-- <div id="wip" class="row no-margin">
            <div class="col-md-5"></div>
            <div class="col-md"  style="margin-top:20px;margin-bottom: 20px;">
                <i class="fa-solid fa-person-digging fa-10x"></i><br>
                En cours de réalisation
            </div>
            <div class="col-md-5"></div>
        </div> -->