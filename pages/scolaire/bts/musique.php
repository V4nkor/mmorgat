    <body data-spy="scroll" data-target="#menu" data-offset="0">

        <header id="presentation" class="navMargin">
            <div class="jumbotron no-margin opaque2">
                <div class="row no-margin">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="margin-top:20px;">
                        <h1 class="display-4 bahnschrift_title">Musique :</i></h1>
                        <p class="lead bahnschrift_text">
                            Ce site a été réalisé en temps limité lors d’une évaluation ayant pour but d’évaluer nos connaissances en PHP.<br>
                            L’objectif était d'implémenter les éléments du site tel que l'affichage des morceaux de musiques stockés dans une base de données.<br>
                            Il fallait aussi ajouter des fonctions permettant de faire une recherche par artiste, de noter les morceaux, faire l’édition du classement 
                            et présenter chaque morceaux avec son titre.
                        </p>
                        <!-- <h5>La prévisualisation du projet n'est actuellement pas fonctionnelle puisque la connexion à la BDD du projet musique n'est pas fonctionnelle :</h5>
                        <a class="btn deep-blue btn-lg disabled" href="musique/index.php" target="blank" style="color:white;margin-bottom: 20px;margin-right:10px">Voir le site</a><i class="fa-solid fa-person-digging fa-2x"></i> En cours de réalisation -->
                    </div>
                </div>
            </div>
        </header>

        <div id="site" style="margin-top:30px;height:70vh">
            <h2 class="bahnschrift_title" style="padding-left:30px;margin-bottom: 0px;color:rgb(219, 219, 219);width: 65%;">Éléments du site :</h2><br>
            <div class="row no-margin">
                <div class="col-md-2" style="margin-bottom:20px;">
                </div>
                <div class="col-md-8" style="margin-bottom:20px;color:rgb(219, 219, 219);width: 65%;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="style/image/musique/musique-home.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Page d'accueil</h5>
                                    <p>La page d'accueil affiche toutes les musiques de la base de données</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/musique/musique-noter.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Noter</h5>
                                    <p>Via le bouton "noter" sur l'accueil, il est possible de donner une note à une musique via un formulaire</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/musique/musique-classement.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Classement</h5>
                                    <p>Les notes sont comptabilisées et un classement des albums est disponible</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/musique/musique-info.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Informations</h5>
                                    <p>La page d'information d'un album est accessible via le classement, en cliquant sur le titre</p>
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
            </div>
        </div> 

        <div id="competences" class="opaque2 navMargin" style="margin-top:30px;">
            <h2 class="bahnschrift_title" style="margin-left:30px;margin-top:-40px">Compétences :</h2>
            <div class="row bahnschrift_text no-margin">
                <div class="col-md-1">
                </div>
                <div class="col-md-8" style="margin-bottom:20px;width: 65%;">
                    Mise en pratique des connaissances en PHP et base de données.
                </div>
            </div>
            <br>
        </div>


        

        



