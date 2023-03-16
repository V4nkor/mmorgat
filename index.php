<?php
if(isset($_GET['page']) == false){
    $titre = "Portfolio";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/accueil.php');
}
else if($_GET['page'] == 'accueil'){
    $titre = "Portfolio";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/accueil.php');
}
else if($_GET['page'] == 'terminale'){
    $titre = "Projet RPG";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/scolaire/rpg.php');
}
else if($_GET['page'] == 'fansite'){
    $titre = "Valve Fansite";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/scolaire/bts/fansite.php');
}
else if($_GET['page'] == 'bonbon'){
    $titre = "TP Bonbon";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/scolaire/bts/bonbon.php');
}
else if($_GET['page'] == 'musique'){
    $titre = "Evaluation Musique";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/scolaire/bts.musique.php');
}
else if($_GET['page'] == 'sicily'){
    $titre = "Projet SicilyLines";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/scolaire/bts/sicily.php');
}
else if($_GET['page'] == 'banque'){
    $titre = "Banque";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/scolaire/bts/banque.php');
}
else if($_GET['page'] == 'android'){
    $titre = "Android";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/scolaire/bts/android.php');
}
else if($_GET['page'] == 'veille'){
    $titre = "Veille Informatique";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/scolaire/bts/veille.php');
}
else if($_GET['page'] == 'budokan'){
    $titre = "Stage Budokan Club";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/professionel/budokan.php');
}
else if($_GET['page'] == 'gallimedia'){
    $titre = "Stage Galimedia";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/professionel/gallimedia.php');
}
else if($_GET['page'] == 'deltexplan'){
    $titre = "Alternance Deltexplan";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/professionel/deltexplan.php');
}
else if($_GET['page'] == 'nas'){
    $titre = "NAS Open Media Vault";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/personnel/odroid-nas.php');
}
else if($_GET['page'] == 'portfolio'){
    $titre = "Portfolio Raspberrypi";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/personnel/portfolio.php');
}
else{
    $titre = "Portfolio";
    require_once('components/main/header.php');
    require_once('components/main/navbar.php');
    require_once('pages/accueil.php');
}

require_once('components/main/footer.php');
?>