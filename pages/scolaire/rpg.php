    <body data-spy="scroll" data-target="#menu" data-offset="0">

        <header id="presentation" class="navMargin">
            <div class="jumbotron no-margin opaque2">
                <div class="row no-margin">
                    <div class="col-md-2" style="width:fit-content" >
                        <img src="style/image/rpg/personnage.png" width="200" height="200" style="margin-left:50px;margin-top:50px;margin-right:50px;">
                    </div>
                    <div class="col-md-7" style="margin-top:20px;">
                        <h1 class="display-4 bahnschrift_title">RPG :</i></h1>
                        <p class="lead bahnschrift_text">
                            Le projet de fin d’étude en binôme portait sur la création d’un jeu vidéo codé à l’aide d’un IDE créé par mon professeur d’ISN, qui comporte une librairie graphique.<br>
                            Le jeu consistait en un simple RPG en tour par tour. Malheureusement, nous n’avons pas pu achever le projet en fin de terminale.
                        </p>
                        <h5>Bouton de téléchargement du projet. Le fichier zip contient le .exe, les DLL nécessaires pour faire tourner le projet, ainsi que le code source :</h5>
                        <a href="showcase/rpg/RPG_ISN.zip" download class="btn deep-blue btn-lg" style="color:white;margin-left:auto;margin-bottom: 20px;" target="_blank"><i class="fa fa-download"></i>Télécharger le projet</a>
                    </div>
                </div>
            </div>
        </header>

        <div id="site" style="margin-top:30px;">
            <h2 class="bahnschrift_title" style="padding-left:30px;margin-bottom: 0px;color:rgb(219, 219, 219);width: 65%;">Éléments du projet :</h2><br>
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
                                <img src="style/image/rpg/rpg-schema.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Schéma du jeu</h5>
                                    <p>Schéma préparatoire pour la création du UI créé avec Affinity Photo</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/rpg/rpg-chevalier.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Création sprites</h5>
                                    <p>Créations de sprites et d'icônes via le logiciel Aseprite</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/rpg/rpg-fenetre.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Fenêtre RPG</h5>
                                    <p>Au lancement, le RPG initialise un héro et un goblin avec des stats prédéfinies</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/rpg/rpg-game-over.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Game Over</h5>
                                    <p>Lorsque les PV du joueur tombent à zero, la partie se termine. De même pour les PV du goblin</p>
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
                    Codage en C  d'un jeu avec interface graphique.<br>
                    Mise en oeuvre des connaissances acquises en ISN.<br>
                    Gérer des rafraîchissement dynamique de variables.
                </div>
            </div>
            <br>
        </div>

        <div id="code" class="navMargin">
            <br>
            <h2 style="margin-left:30px;margin-right:auto;color:rgb(219, 219, 219);width: 65%;">Snippets de code :</h2><br><br>
            <div class="row no-margin" style="margin-top:-20px;">
                <div class="col-md-2" style="margin-bottom:20px;"></div>
                <div class="col-md-5" style="margin-bottom:20px; color:rgb(219, 219, 219);width: 65%;">
                    <h5>Définition de l'objet <code>CHARACTER</code> et fonctions d'initialisation goblin et personnage jouable dans le fichier <code>generales.c</code> :</h5>
                    <pre>
                        <code class="language-clike">
typedef struct 
{
    int LVL;
    int HP_tot;
    int HP_act;
    int ATK;
    int DEF;
    int MAG_ATK;
    char name[100];
}CHARACTER;

CHARACTER creer_goblin()
{
    CHARACTER goblin1;
    goblin1.LVL = 4 ;
    goblin1.HP_tot = 20 ;
    goblin1.HP_act = goblin1.HP_tot ;
    goblin1.ATK = 4 ;
    goblin1.DEF = 2 ;
    sprintf (goblin1.name, "Goblin");
    return goblin1;
}

CHARACTER creer_personnage_test()
{
    CHARACTER joueur;
    joueur.LVL = 1;
    joueur.HP_tot = 20;
    joueur.HP_act = joueur.HP_tot;
    joueur.ATK = 4;
    joueur.DEF = 2;
    return joueur;
}
                        </code>
                    </pre><br>
                    <p class="bahnschrift_text">Ici les différents <code>CHARACTER</code> correspondent au personnage joueur ainsi qu'aux monstres. <br>
                        Ils sont initialisés au début du jeu ou du combat par des variables prédéfinies selon leur archétype (Goblin, squelette, dragon).<br>
                        Il était prévu d'ajouter des éléments de RNG grâce à des plages de valeurs établies selon le niveau du <code>CHARACTER</code>.
                    </p>
                </div>
                <div class="col-md-2" style="margin-bottom:20px;"></div>
            </div>
            <br>
            <div class="row no-margin" style="margin-top:-20px;">
                <div class="col-md-2" style="margin-bottom:20px;"></div>
                <div class="col-md-5" style="margin-bottom:20px; color:rgb(219, 219, 219);width: 65%;">
                    <h5>Différents scénarios d'actions de combat dans le fichier <code>Actions combat.c</code> qui gèrent les PV des <code>CHARACTER</code> :</h5>
                    <pre>
                        <code class="language-clike">
int attack(CHARACTER attacker, CHARACTER target)
{
    target.HP_act = target.HP_act - attacker.ATK;
    return target.HP_act;
}

int attack_with_defence(CHARACTER attacker, CHARACTER defender)
{
    if (defender.DEF > attacker.ATK)
    {
        defender.DEF = attacker.ATK;
    }
    defender.HP_act = defender.HP_act - attacker.ATK + defender.DEF;
    return defender.HP_act;
}

int heal_with_attack(CHARACTER healer, CHARACTER attacker)
{
    healer.HP_act = healer.HP_act + pot_recover - attacker.ATK;
    return healer.HP_act;
}

int heal(CHARACTER healer)
{
    healer.HP_act = healer.HP_act + pot_recover;
    return healer.HP_act;
}
                        </code>
                    </pre><br>
                    <p class="bahnschrift_text">Voici les différentes interactions de combat que les <code>CHARACTER</code> peuvent avoir entre eux.<br> 
                        Ces fonctions prennent en compte les HP actuels (Health point = Points de Vie) de l'adversaire ainsi que les points de dégâts de l'attaquant. Avec ces valeurs, ils vont pouvoir calculer les PV restants tout en prenant compte les HP soignés et des points de défense.<br>
                        Par exemple : Si le joueur attaque et que le goblin défend, la <code>fonction attack_with_defence()</code> prendra en premier paramètre le joueur ainsi que le goblin en tant que second paramètre.
                    </p>
                </div>
                <div class="col-md-2" style="margin-bottom:20px;"></div>
            </div>
            <br>
            <div class="row no-margin" style="margin-top:-20px;">
                <div class="col-md-2" style="margin-bottom:20px;"></div>
                <div class="col-md-5" style="margin-bottom:20px; color:rgb(219, 219, 219);width: 65%;">
                    <h5>Fonctions dans le fichier <code>generales.c</code> qui affiche les PV et le nom du <code>CHARACTER</code> joueur et du <code>CHARACTER</code> ennemi dans l'interface graphique :</h5>
                    <pre>
                        <code class="language-clike">
void affichage_pv(CHARACTER joueur)
{
    char afficher_pv[100]; 
    sprintf (afficher_pv, "HP: %u / %u", joueur.HP_act , joueur.HP_tot);
    dessiner_texte(afficher_pv, 20, HP_ancrage, blanc);
}

void affichage_pv_ennemi(CHARACTER ennemi)
{
    char afficher_pv[100]; 
    sprintf (afficher_pv, "HP: %u / %u", ennemi.HP_act , ennemi.HP_tot);
    dessiner_texte(afficher_pv, 20, HP_ancrage2, blanc);
}

void affichage_nom_ennemi(CHARACTER ennemi)
{
    POINT ancrage_nom_ennemi;
    ancrage_nom_ennemi.x = esp1/2 + esp2 + esp3 + esp4/2.5 + 25;
    ancrage_nom_ennemi.y = HAUTEUR - esp1 + 20;
    dessiner_texte(ennemi.name, 20, ancrage_nom_ennemi, blanc);
}
                        </code>
                    </pre>
                </div>
                <div class="col-md-2" style="margin-bottom:20px;"></div>
            </div>
        </div>

        <div class="jumbotron no-margin opaque2">
            <div class="row no-margin">
                <div class="col-md-5"></div>
                <div class="col-md"  style="margin-top:20px;margin-bottom: 20px;">
                    <i class="fa-solid fa-person-digging fa-10x"></i><br>
                    En cours de finalisation
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>