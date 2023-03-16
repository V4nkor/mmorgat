#define pot_recover 10

POINT HP_ancrage;
POINT HP_ancrage2;

IMAGE image_curseur;
SON flesh_hit, shield_hit, player_hit;

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

CHARACTER creer_dragon()
{
    CHARACTER dragon1;
    dragon1.LVL = 10 ;
    dragon1.HP_tot = 100 ;
    dragon1.HP_act = dragon1.HP_tot ;
    dragon1.ATK = 20 ;
    dragon1.DEF = 30 ;
    sprintf (dragon1.name, "Dragon");
    return dragon1;
}

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

void rafraichir_stat_perso(CHARACTER joueur)
{
    POINT pstat1 , pstat2 ;
    pstat1.x = esp1/2;
    pstat1.y = HAUTEUR - esp1;
    pstat2.x = esp2 + esp1/2;
    pstat2.y = esp2 + esp1;
    dessiner_rectangle_plein(pstat1, pstat2, noir);
    dessiner_rectangle_plein(pstat1, pstat2, blanc);
    pstat1.x = pstat1.x + 3;
    pstat1.y = pstat1.y - 3;
    pstat2.x = pstat2.x - 3;
    pstat2.y = pstat2.y + 3;
    dessiner_rectangle_plein(pstat1, pstat2, noir);
    affichage_pv(joueur);
}

void rafraichir_stat_ennemi(CHARACTER ennemi)
{
    POINT p1 , p2;
    p1.x = HP_ancrage2.x - 100;
    p1.y = HP_ancrage2.y + 5;
    p2.x = HP_ancrage2.x + 120;
    p2.y = HP_ancrage2.y - 20;
    dessiner_rectangle_plein(p1, p2, noir);
    affichage_pv_ennemi(ennemi);
}

void afficher_choix()
{
    int ancrage_choix;
    ancrage_choix = esp1 + esp2 + esp3 + esp4 + esp5 + esp6 - 160;
    POINT texte_attaque, texte_defence, texte_magie, texte_objet, texte_fuite; 
    texte_attaque.x = ancrage_choix;
    texte_attaque.y = HAUTEUR- esp1 - 12;
    texte_defence.x = ancrage_choix;
    texte_defence.y = HAUTEUR - esp1 - 42;
    texte_magie.x = ancrage_choix;
    texte_magie.y = HAUTEUR - esp1 - 72;
    texte_objet.x = ancrage_choix;
    texte_objet.y = HAUTEUR - esp1 - 102;
    texte_fuite.x = ancrage_choix;
    texte_fuite.y = HAUTEUR - esp1 - 132;
    
    dessiner_texte("Attack", 20, texte_attaque , blanc);
    dessiner_texte("Defend", 20, texte_defence , blanc);
    dessiner_texte("Magic", 20, texte_magie , blanc);
    dessiner_texte("Item", 20, texte_objet , blanc);
    dessiner_texte("Flee", 20, texte_fuite , blanc);
}

void dessin_curseur_choix(int emplacement)
{
    POINT im_curseur;
    im_curseur.x = esp1 + esp2 + esp3 + esp4 + esp5 + esp6 - 172;
    if (emplacement == 0)
    {
    im_curseur.y = HAUTEUR- esp1 - 24;
    }
    if (emplacement == 1)
    {
    im_curseur.y = HAUTEUR - esp1 - 54;
    }
    if (emplacement == 2)
    {
    im_curseur.y = HAUTEUR - esp1 - 84;
    }
    if (emplacement == 3)
    {
    im_curseur.y = HAUTEUR - esp1 - 114;
    }
    if (emplacement == 4)
    {
    im_curseur.y = HAUTEUR - esp1 - 144;
    }
    dessiner_image(image_curseur,im_curseur);
}

int choix()
{
    int CHOIX, up, down, confirm, C;
    POINT p1, p2;
    p1.x = esp1 + esp2 + esp3 + esp4 + esp5 + esp6 - 180;
    p1.y = HAUTEUR- esp1 - 15;
    p2.x = p1.x + 20;  
    p2.y = HAUTEUR - esp1 - 160;
    afficher_choix();
    C = 0;
    CHOIX = 0;
    dessin_curseur_choix(C);
    while (CHOIX == 0)
    {
        afficher_auto_off();
        dessiner_rectangle_plein(p1,p2,noir);
        up = touche_nb_appuis( KB_HAUT );
        down = touche_nb_appuis( KB_BAS );
        confirm = touche_nb_appuis( KB_ENTREE );
        if (up != 0)
        {
            C = C - 1;
        }
        if (down != 0)
        {
            C = C + 1;
        }
        if (C < 0)
        {
            C = 4;
        }
        if (C > 4)
        {
            C = 0;
        }
        if (confirm != 0)
        {
            CHOIX = 1;
        }
        dessin_curseur_choix(C);
        affiche_tout();
        attendre(20);
    } 
    return C;
}

void afficher_choix_inventaire()
{
    int ancrage_choix;
    ancrage_choix = esp1 + esp2 + esp3 + esp4 + esp5 + esp6 - 160;
    POINT texte_potion; 
    texte_potion.x = ancrage_choix;
    texte_potion.y = HAUTEUR- esp1 - 12;
    /*texte_defence.x = ancrage_choix;
    texte_defence.y = HAUTEUR - esp1 - 42;
    texte_magie.x = ancrage_choix;
    texte_magie.y = HAUTEUR - esp1 - 72;
    texte_objet.x = ancrage_choix;
    texte_objet.y = HAUTEUR - esp1 - 102;
    texte_fuite.x = ancrage_choix;
    texte_fuite.y = HAUTEUR - esp1 - 132;*/
    
    dessiner_texte("Potion", 20, texte_potion , blanc);
    /*dessiner_texte("Defend", 20, texte_defence , blanc);
    dessiner_texte("Magic", 20, texte_magie , blanc);
    dessiner_texte("Item", 20, texte_objet , blanc);
    dessiner_texte("Flee", 20, texte_fuite , blanc);*/
}

int choix_inventaire()
{
    int CHOIX, confirm, C;
    POINT p1, p2;
    p1.x = esp1 + esp2 + esp3 + esp4 + esp5 + esp6 - 180;
    p1.y = HAUTEUR- esp1 - 15;
    p2.x = p1.x + 20;  
    p2.y = HAUTEUR - esp1 - 160;
    afficher_choix_inventaire();
    C = 0;
    CHOIX = 0;
    dessin_curseur_choix(C);
    while (CHOIX == 0)
    {
        afficher_auto_off();
        dessiner_rectangle_plein(p1,p2,noir);
        confirm = touche_nb_appuis( KB_ENTREE );
        if (confirm != 0)
        {
            CHOIX = 1;
        }
        dessin_curseur_choix(C);
        affiche_tout();
        attendre(20);
    }
    C = C + 1;
    return C;
}

void initialiser_partie()
{
    initialiser_fenetre(LARGEUR,HAUTEUR, "RPG" ); 
    image_curseur = charger_image("choice_cursor.png");
    flesh_hit = charger_son("flesh_hit.wav");
    shield_hit = charger_son("shield_hit.wav");
    player_hit = charger_son("player_hit.wav");
    affiche_auto_off();
    dessiner_fenetre_char();
    dessiner_fenetre_event();
    dessiner_fenetre_player_stat();
    dessiner_fenetre_monstre();
    dessiner_fenetre_action();
    HP_ancrage.x = esp1/2 + 6;
    HP_ancrage.y = HAUTEUR - esp1 - 6;
    HP_ancrage2.x = esp1/2 + esp2 + esp3 + esp4/2.5 + 5;
    HP_ancrage2.y = HAUTEUR - esp1 - 6;
    CHARACTER test_char;
    test_char = creer_personnage_test();
    CHARACTER goblin;
    goblin = creer_goblin();
    affichage_pv(test_char);
    affichage_pv_ennemi(goblin);
    dessiner_enemy();
    affiche_tout();
}