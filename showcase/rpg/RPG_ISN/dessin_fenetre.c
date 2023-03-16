#define esp1 60 //bordure et point gauche de l'image du personnage
#define esp2 200 //point haut droit de l'image du personnage
#define esp3 90 //espacement entre monstre et stat
#define esp4 600 //largeur fenetre monstre
#define esp5 50 //espacement entre monstre et choix
#define esp6 250 - esp1 //taille action
#define HAUTEUR 720
#define LARGEUR 1280

void dessiner_fenetre_char()
{
    POINT pchar1 , pchar2; 
    pchar1.x = esp1; 
    pchar1.y = esp1;
    pchar2.x = esp2 ; 
    pchar2.y = esp2 ;
    dessiner_rectangle_plein(pchar1, pchar2, blanc);
    pchar1.x = esp1 + 3; 
    pchar1.y = esp1 + 3;
    pchar2.x = esp2 - 3; 
    pchar2.y = esp2 - 3;
    dessiner_rectangle_plein(pchar1, pchar2, noir);
}

void dessiner_image_char()
{
    IMAGE image_perso;
    image_perso = charger_image("personnage.png");
    POINT im_char;
    im_char.x = esp1 * 2 + 10;
    im_char.y = esp1 * 2 + 10;
    dessiner_image(image_perso,im_char);
}

void dessiner_fenetre_event()
{
    POINT pevent1 , pevent2 ; 
    pevent1.x = LARGEUR - esp1; 
    pevent1.y = esp1/2 ;
    pevent2.x = esp2 + esp1;
    pevent2.y = esp2 + esp1/2;
    dessiner_rectangle_plein(pevent1, pevent2, blanc);
    pevent1.x = pevent1.x - 3;
    pevent1.y = pevent1.y + 3;
    pevent2.x = pevent2.x + 3;
    pevent2.y = pevent2.y - 3;
    dessiner_rectangle_plein(pevent1, pevent2, noir);
}

void dessiner_fenetre_monstre()
{
    POINT pmonst1 , pmonst2;
    pmonst1.x = esp1/2 + esp2 + esp3;
    pmonst1.y = HAUTEUR - esp1/2;
    pmonst2.x = pmonst1.x + esp4;
    pmonst2.y = esp1 +esp2 ;
    dessiner_rectangle_plein(pmonst1, pmonst2, blanc);
    pmonst1.x = pmonst1.x + 3;
    pmonst1.y = pmonst1.y - 3;
    pmonst2.x = pmonst2.x - 3;
    pmonst2.y = pmonst2.y + 3;
    dessiner_rectangle_plein(pmonst1, pmonst2, noir);
}

void dessiner_fenetre_action()
{
    POINT act1 , act2;
    act1.x = esp1 + esp2 + esp3 + esp4 + esp5;
    act1.y = HAUTEUR - esp1;
    act2.x = act1.x + esp6;
    act2.y = esp1 + esp2;
    dessiner_rectangle_plein(act1, act2, blanc);
    act1.x = act1.x + 3;
    act1.y = act1.y - 3;
    act2.x = act2.x - 3;
    act2.y = act2.y + 3;
    dessiner_rectangle_plein(act1, act2, noir);
}

void dessiner_fenetre_player_stat()
{
    POINT pstat1 , pstat2 ;
    pstat1.x = esp1/2;
    pstat1.y = HAUTEUR - esp1;
    pstat2.x = esp2 + esp1/2;
    pstat2.y = esp2 + esp1;
    dessiner_rectangle_plein(pstat1, pstat2, blanc);
    pstat1.x = pstat1.x + 3;
    pstat1.y = pstat1.y - 3;
    pstat2.x = pstat2.x - 3;
    pstat2.y = pstat2.y + 3;
    dessiner_rectangle_plein(pstat1, pstat2, noir);
}

void dessiner_enemy()
{
    POINT enemy_center, P1, P2;
    enemy_center.x = 620;
    enemy_center.y = 450;
    P1.x = enemy_center.x + 50;
    P1.y = enemy_center.y + 50;
    P2.x = enemy_center.x - 50;
    P2.y = enemy_center.y - 50;
    dessiner_rectangle_plein(P1, P2, vert);
    printf ("Debug");
}

void effacer_description()
{
    POINT pevent1, pevent2;
    pevent1.x = LARGEUR - esp1 - 3; 
    pevent1.y = esp1/2 + 3;
    pevent2.x = esp2 + esp1 + 3;
    pevent2.y = esp2 + esp1/2 - 3;
    dessiner_rectangle_plein(pevent1, pevent2, noir);
}

void texte_finalite(int F)
{
    effacer_description();
    POINT event_ancrage;
    event_ancrage.x = esp2 + esp1 + 3 + 5;
    event_ancrage.y = esp2 + esp1/2 - 3 - 5;
    if (F == 1)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "You both attack");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }    
    if (F == 2)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "You defend and the goblin attacks");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }
    if (F == 3)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "You attack and the goblin defends");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }
    if (F == 4)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "You both defend");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }
    if (F == 5)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "You escaped");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }
    if (F == 6)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "Your attemp to flee failed and the goblin attacked you");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }
    if (F == 7)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "Your attemp to flee failed and the goblin defends");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }
    if (F == 8)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "You healed yourself, but the goblin attacked you");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }
    if (F == 9)
    {
        char afficher_event[100]; 
        sprintf (afficher_event, "You healed yourself and the goblin defends");
        dessiner_texte(afficher_event, 20, event_ancrage, blanc);
    }
}

void game_over()
{
    remplir_ecran(noir);   
    POINT gameover_ancrage;
    gameover_ancrage.x = 360;
    gameover_ancrage.y = 460;
    char gameover[100]; 
    sprintf (gameover, "Game Over");
    dessiner_texte(gameover, 100, gameover_ancrage, blanc);
    gameover_ancrage.x = 530;
    gameover_ancrage.y = 360;
    sprintf (gameover, "You died");
    dessiner_texte(gameover, 50, gameover_ancrage, blanc);
}

void effacer_choix()
{
    POINT act1 , act2;
    act1.x = esp1 + esp2 + esp3 + esp4 + esp5 + 3;
    act1.y = HAUTEUR - esp1 - 3;
    act2.x = LARGEUR - esp1 - 33;
    act2.y = esp1 +esp2 + 3;
    dessiner_rectangle_plein(act1, act2, noir);
}