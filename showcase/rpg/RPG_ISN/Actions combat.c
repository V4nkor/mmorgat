int choix_ennemy()
{
    int result_ennemy;
    result_ennemy = entier_aleatoire(2); //0 = attaque // 1 = défence
    return result_ennemy;
}

int escape_try()
{
    int escape = entier_aleatoire(2);
    return escape;
}

void afficher_enemy_killed(CHARACTER enemy)
{
    effacer_description();
    POINT event_ancrage;
    event_ancrage.x = esp2 + esp1 + 3 + 5;
    event_ancrage.y = esp2 + esp1/2 - 3 - 5;
    char afficher_event[100]; 
    sprintf (afficher_event, "You killed the %s",enemy.name);
    dessiner_texte(afficher_event, 20, event_ancrage, blanc);
}

int confrontation_choix(int C, int D)
{
    int ennemy_choice, finalite = -1, escape;
    ennemy_choice = choix_ennemy();
    if (C == 4)
    {
        escape = escape_try();
        if (escape == 0)
        {
            finalite = 5;
            return finalite;
        }
        if ((escape == 1) && (ennemy_choice == 1)) //fuite ratée et attaque ennemi
        {
            finalite = 6;
        }
        if ((escape == 1) && (ennemy_choice == 0)) //fuite ratée et defence ennemi
        {
            finalite = 7;
        }
    }
    if((ennemy_choice == 0) && (C == 0)) //both attack
    {
        finalite = 1;
    }
    if ((ennemy_choice == 0) && (C == 1)) //player defends and ennemy attacks
    {
        finalite = 2;
    }
    if ((ennemy_choice == 1) && (C == 0)) //ennemy defends and player attacks
    {
        finalite = 3;
    }
    if ((ennemy_choice == 1) && (C == 1)) //both defend
    {
        finalite = 4;
    }
    if ((ennemy_choice == 1) && (D == 1))
    {
        finalite = 8;
    }
    if ((ennemy_choice == 0) && (D == 1))
    {
        finalite = 9;
    }
    return finalite;
}

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