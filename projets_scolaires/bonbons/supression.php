<?php
	session_start();
	$id = $_GET["id"];
	//connexion BDD
	require "fonctions.php";
	$bdd=connect();
	//requete
	try{
	$sql="delete from produit where id = $id";
	echo $sql;
	$resultat=$bdd->query($sql);
	$_SESSION['table']= "supression du bonbon $nom";
	}
	catch(PDOExeption $e){
		$_SESSION['table']= "Erreur lors de la supression <br>". $e->getMessage();
	}
	header("location:pagemodif.php");
?>