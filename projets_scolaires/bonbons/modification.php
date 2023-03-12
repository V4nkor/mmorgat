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
	$sql="update produit set nom = '$nom', prix = $prix, photo = 'images/$image' where id = $id";
	echo $sql;
	$resultat=$bdd->exec($sql);
	$_SESSION['table']= "Modification du bonbon $nom";
	}
	catch(PDOExeption $e){
		$_SESSION['table']= "Erreur lors de la modification <br>". $e->getMessage();
	}
	header("location:pagemodif.php");
	
?>