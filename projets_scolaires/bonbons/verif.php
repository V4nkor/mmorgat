<?php session_start(); ?>
<?php 
extract($_POST);
echo"$mdp";
$mdp = md5($mdp);
echo"<br>$mdp";
//connexion BDD
	require "fonctions.php";
	$bdd=connect();
	//requete
	$sql="select* from admin where login = '$login'";
	$resultat=$bdd->query($sql);
	$nb_lignes= $resultat->rowCount();
	if($nb_lignes == 0){
	header("location:connexion.php");
	}
	else{
		while(($identifiants = $resultat ->fetch(PDO::FETCH_OBJ))and ($mdp != $identifiants->mdp)){
			echo"";
		}
		if($mdp == $identifiants->mdp){
			$_SESSION["admin"]=$rep->login;
			$_SESSION["autorisation"]="OK";
			header("location:admin.php");
		}
		else{
			header("location:connexion.php");
		}
	}
?>