    <body data-spy="scroll" data-target="#menu" data-offset="0">
        <header id="presentation" class="navMargin">
            <div class="jumbotron no-margin opaque2">
                <div class="row no-margin">
                    <div class="col-md-2" style="width:fit-content" >
                        <img src="style/image/odroid/odroid-hc4.jpg" width="200" height="200" style="margin:50px">
                    </div>
                    <div class="col-md-7" style="margin-top:20px;">
                        <h1 class="display-4 bahnschrift_title">NAS Odroid HC4 :</i></h1>
                        <p class="lead bahnschrift_text">
                            J'ai mis en place un serveur NAS avec Open Media Vault sous Armbian, afin de centraliser le stockage de mes données et de pouvoir y accéder à distance.<br>
                            La plateforme utilisée est un SBC (Single board computer) Odroid HC4, similaire en puissance à une Raspberry pi 4. <br>
                            Son avantage par rapport à une rpi4 est la présence de deux ports full SATA permettant de brancher deux disques HDD ou SSD de format 2,5 ou 3,5 inches.
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div id="site" style="margin-top:30px;height: 87vh;">
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
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="style/image/odroid/odroid-setup-low.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Odroid HC4</h5>
                                    <p>Le SBC (Single Board Computer) utilisé est un Odroid HC4. Ayant deux ports Sata il est propice pour mettre en place un NAS</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/odroid/open-vpn.png" class="d-block w-100" style="max-height: 700px;max-width: 500px;padding-left: 210px;" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Accès OpenVPN</h5>
                                    <p>Accès au réseau local via OpenVPN, cela permet des connexions telles que SSH, FTP pour les transferts et HTTPS pour la dashboard</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/odroid/openmediavault.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Dashboard Open Media Vault</h5>
                                    <p>Dashboard permettant de paramétrer open media vault et monitorer l'appareil</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/odroid/odroid-ssh.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Accès SSH</h5>
                                    <p>Accès au terminal du Odroid via SSH avec PuTTY</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/logos/placeholder-image.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Transfert de données</h5>
                                    <p>Stockage accessible </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/odroid/WIN_20220413_20_17_28_Pro.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Projet finalisé avec disque dur</h5>
                                    <p></p>
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

        <!-- <div class="opaque2 navMargin" style="margin-top:30px;">
            <h2 class="bahnschrift_title" style="margin-bottom:30px; margin-left:30px;margin-top:-40px">Explication :</h2>
            <div class="row no-margin bahnschrift_text" style="margin-top:-20px;">
                <div class="col-md-1" style="margin-bottom:20px;"></div>
                <div class="col-md" style="margin-bottom:20px;width: 65%;">
                    Temp<br>
                    <br>
                    Lister et présenter les méthodes logicielles, etc, mises en place
                    
                    Évolutions : 
                    -Mettre en place des hot backups de la carte SD.
                    -Migrer de RaspbianOS gnome vers Raspbian Lite afin de n'avoir que les packets nécessaires au bon fonctionnement du serveur web.

                   

                    <br><div style="width:100%; padding-bottom:56.25%; position:relative;">
                        <iframe name="vieux" id="vieux" src="Portfolio vieux/index.html" style="position:absolute; top:0px; left:0px; 
                        width:100%; height:100%; border: none; overflow: hidden;"></iframe>
                    </div><br>
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
            <h2 class="bahnschrift_title" style="margin-bottom:30px; margin-left:30px;margin-top:-40px">Temp :</h2> 
            <div id="packet" class="row">
                <div class="col-md-2"></div>
                <div class="col-md">
                    
                </div>
                <div class="col-md-2"></div>
            </div>
        </div> -->
<!-- 
        <div id="" class="navMargin">
            <br>
            <h2 style="margin-left:30px;margin-right:auto;color:rgb(219, 219, 219);width: 65%;">Temp :</h2><br>
            <div class="row no-margin" style="margin-top:-20px;margin-bottom:20px;">
                <div class="col-md-1" style="margin-bottom:20px;">
                </div>
                <div class="col-md-8" style="margin-bottom:20px; color:rgb(219, 219, 219);width: 65%;">
                    
                </div>
            </div>
        </div>
        <div id="wip" class="row no-margin">
            <div class="col-md-5"></div>
            <div class="col-md"  style="margin-top:20px;margin-bottom: 20px;">
                <i class="fa-solid fa-person-digging fa-10x"></i><br>
                En cours de réalisation
            </div>
            <div class="col-md-5"></div>
        </div> -->

        <!-- <div id="" class="opaque2 navMargin" style="margin-top:30px;">
            <h2 class="bahnschrift_title" style="margin-left:30px;margin-top:-40px">Temp :</h2>
            <div class="row bahnschrift_text no-margin">
                <div class="col-md-1"></div>
                <div class="col-md" style="margin-bottom:20px;width: 65%;">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </div>
                <div class="col-md-1">
                </div>
            </div>
            <br>
        </div>

        <div id="" class="navMargin">
            <br>
            <h2 style="margin-left:30px;margin-right:auto;color:rgb(219, 219, 219);width: 65%;">Temp :</h2><br>
            <div class="row no-margin" style="margin-top:-20px;">
                <div class="col-md-1" style="margin-bottom:20px;">
                </div>
                <div class="col-md-8" style="margin-bottom:20px; color:rgb(219, 219, 219);width: 65%;">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </div>
            </div>
        </div> -->