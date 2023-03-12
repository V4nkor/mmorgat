<?php
include("config.php");
function connect(){
	try{
	//$connect= new PDO('mysql:host='.HOTE.';dbname='.BDD , UTILISATEUR, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
	$connect = new PDO('mysql:host='.dbhost.';dbname='.db.'', dbuser, dbpasswd);
	$connect->exec("SET CHARACTER SET utf8");
	}
	catch(PDOException $e){
		echo"probleme de connexion a la BDD<br>". $e->getMessage();
	}
	return $connect;
}
function meta(){
	echo'<!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="cssbonbon.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	 <!-- font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">';
}
function nav(){
	echo'<nav class="navbar navbar-light nav sticky-top " >
			<div class="container-fluid">
				<div class="card pink my-auto">
					<a class="navbar-brand" href="#">
					<img src="images/candy.png" alt="" width="40" height="40" style="margin-left:5px;" class="d-inline-block align-top">
					Bonbons & cie
					</a>
				</div>
				<div class="card pink">
					<form id=navsearch" method="POST" action="recherche.php">Rechercher un bonbon : <input type="text" name="nom"><input type="submit" value="Recherche"></form>
				</div>
				';
				if((isset($_SESSION['autorisation'])) and ($_SESSION['autorisation']=="OK")){
					echo'<div class="card pink">';?>
							<a href="deconnexion.php" class="btn btn-primary pink btn-sm" onclick="return confirm('voulez vous vraiment vous deconnecter ?')">Se deconnecter</a>
						<?php
						echo'</div>
						<div class="dropdown">
							<button class="btn btn-secondary pink dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								Modifications BDD
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="formajout.php">Ajout bonbons</a></li>
								<li><a class="dropdown-item" href="pagemodif.php">Modif/supression</a></li>
							</ul>
						</div>';
				}
				else{
					echo'<div class="card pink">
							<a href="connexion.php">Se connecter</a>
						</div>';
				}
				
				echo'
			</div>
		</nav>';
}
function bonbons(){
		if($_SESSION['autorisation']=="OK"){
			echo'<div class="container">
					<div class="row" style="margin-top:30px;">
						<div class="col">"';
							if(isset($_SESSION['table'])){
							echo'<div class="card pink" style="text-align:center;">';
							echo $_SESSION['table'];
							echo'</div>';
							}
							while($produit = $resultat ->fetch(PDO::FETCH_OBJ))
							{
							echo'
							<div class="card cardprod opaque">
								<img class="img-bonbon"src="'.$produit->photo.'"> 
								<div class="card-body">
									<h5 class="card-title">'.$produit->nom.'</h5>
									<p style="margin-bottom:no-margin">'.$produit->prix.'</p><br>
									<a href="formodif.php?id="'. $produit->id.'" class="btn btn-primary pink btn-sm">Modification</a>
									<a href="supression.php?id="'.$produit->id.'" class=" btn btn-primary pink btn-sm" onclick="return confirm("voulez vous definitivement suprimer ce bonbon ?")">Supression</a>
								</div>
							</div>';
							}
				echo'
				</div>
			</div>
		</div>';
		}
		else{
			echo"Vous n'etes pas connecte";
		}
}
