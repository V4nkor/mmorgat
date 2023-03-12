<?php
require_once('main/header.php');

if(isset($_GET['page']) == false){
    
}
if($_GET['page'] == 'accueil'){
    require_once('accueil');
}

require_once('main/footer.php');
?>