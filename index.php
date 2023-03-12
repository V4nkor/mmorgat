<?php
require_once('main/header.php');
require_once('main/navbar.php');

if(isset($_GET['page']) == false){
    require_once('accueil');
}
else if($_GET['page'] == 'accueil'){
    require_once('accueil');
}


require_once('main/footer.php');
?>