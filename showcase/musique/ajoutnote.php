<?php
	session_start();
	require("fonctions.php");
	extract($_POST);
	//connexion BDD
	$bdd=connect();
	//requete
	try{
		$sql='Insert into noter(idOeuvre,note,commentaire) values ($idOeuvre,$note,"$commentaire")';
		$resultat=$bdd->exec($sql);
		$_SESSION['ajout']= "note ajoutee";
	}
	catch(PDOExeption $e){
		$_SESSION['ajout']= "Erreur lors de l'ajout <br>". $e->getMessage();
	}
	header("location:index.php")
	?>