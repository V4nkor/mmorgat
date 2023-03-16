<?php 
	//connexion BDD
	require "fonctions.php";
	$bdd=connect();
	$sql="select* from admin";
	$resultat=$bdd->query($sql);
	$comptes = $resultat ->fetch(PDO::FETCH_OBJ);
?>
<form  method="POST" action="verif.php" enctype='multipart/form-data'>
Identifiant : <input type='text' name='login'><br>
Mot de passe : <input type='text' name='mdp'><br>
<input type='submit' value='Se connecter'>
</form>