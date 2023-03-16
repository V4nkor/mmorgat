<?php 
	session_start();
	$id = $_GET["id"];
	//connexion BDD
	require "fonctions.php";
	$bdd=connect();
	$sql="select* from produit where id = $id";
	$resultat=$bdd->query($sql);
	$produit = $resultat ->fetch(PDO::FETCH_OBJ);
?>
<?php if((isset($_SESSION['autorisation'])) and ($_SESSION['autorisation']=="OK")){?>
	<form  method="POST" action="modification.php" enctype='multipart/form-data'>
	Nouveau nom du bonbon : <input type='text' name='nom' value='<?= $produit->nom ?>'><br>
	Nouveau prix du bonbon : <input type='text' name='prix' value='<?= $produit->prix ?>'><br>
	Nouvelle image du bonbon : <input type='file' name='image'><br>
	<input name="id" type="hidden" value="<?=$id?>">
	<input type='submit' value='Modification'>
	</form>
	<?php }
		else{
			echo"Cette page est destinee aux administrateurs, si vous etes un administrateur, veuillez vous connecter";
		}?>

