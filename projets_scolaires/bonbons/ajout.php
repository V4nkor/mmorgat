<?php
	session_start();
	extract($_POST);
	//connexion BDD
	require "fonctions.php";
	$bdd=connect();
	//requete
	$dossier_destination = 'images/';
    $image = $_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], $dossier_destination . $image);
	try{
	$sql="insert into produit(nom,prix,photo) values('$nom',$prix,'images/$image')";
	echo $sql;
	$resultat=$bdd->exec($sql);
	$_SESSION['table']= "Ajout du bonbon $nom";
	}
	catch(PDOExeption $e){
		$_SESSION['table']= "Erreur lors de l'ajout <br>". $e->getMessage();
	}
	header("location:admin.php");

?>