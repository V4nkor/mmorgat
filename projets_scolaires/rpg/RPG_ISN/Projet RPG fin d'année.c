#include "toolbox.h"
#include "dessin_fenetre.c"
#include "generales.c"
#include "Actions combat.c"

int main( int argc, char** argv )
{
    CHARACTER test_char;
    test_char = creer_personnage_test();
    CHARACTER goblin1;
    goblin1 = creer_goblin();
    initialiser_partie();
    afficher_auto_off();
    dessiner_image_char();
    affichage_nom_ennemi(goblin1);
    int end = 0;
    while ( end == 0 )
    {
        effacer_choix();
        afficher_choix();
        int combat_result, item_result, finalite_combat;
        combat_result = -1;
        item_result = -1;
        combat_result = choix();
        if (combat_result == 3)
        {
            effacer_choix();
            while (item_result == -1)
            {
                afficher_choix_inventaire();
                item_result = choix_inventaire(); 
            }
        }
        finalite_combat = confrontation_choix(combat_result, item_result);
        texte_finalite(finalite_combat);
        if (finalite_combat == 1)
        {
            test_char.HP_act = attack(goblin1 , test_char);
            goblin1.HP_act = attack(test_char , goblin1);
            jouer_son(flesh_hit);
        }
        if (finalite_combat == 2)
        {
            test_char.HP_act = attack_with_defence(goblin1 , test_char);
            jouer_son(shield_hit);
        }
        if (finalite_combat == 3)
        {
            goblin1.HP_act = attack_with_defence(test_char , goblin1);
            jouer_son(shield_hit);
        }
        if (finalite_combat == 6)
        {
            test_char.HP_act = attack(goblin1 , test_char);
            jouer_son(flesh_hit);
        }
        if ( finalite_combat == 8)
        {
            test_char.HP_act = heal_with_attack(test_char, goblin1);
        }
        if ( finalite_combat == 9)
        {
            test_char.HP_act = heal(test_char);
        }
        if (goblin1.HP_act <= 0) /*win*/
        {
            goblin1.HP_act = 0;
            afficher_enemy_killed(goblin1);
            end = 1;
        }  
        if (test_char.HP_act <= 0) /*lose*/
        {
            test_char.HP_act = 0;
            game_over();
            end = 2;
        }
        if (finalite_combat == 5) /*successfull escape*/
        {
            end = 3;
        }
        if (end != 2)
        {
            rafraichir_stat_perso(test_char);
            rafraichir_stat_ennemi(goblin1);
        }
    }
    attendre_echap();
    quitter(0);    
}