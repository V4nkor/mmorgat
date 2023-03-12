<?php 
include("config.php");
function connect(){
	try{
	//$connect= new PDO('mysql:host='.HOTE.';dbname='.BDD , UTILISATEUR, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
	$connect = new PDO('mysql:host='.dbhost.';dbname='.db.'', dbuser, dbpasswd);
	}
	catch(PDOException $e){
		echo"probleme de connexion a la BDD<br>". $e->getMessage();
	}
	return $connect;
}
function meta(){
	?><!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="stylesheet" href="musique.css">
		<!-- font awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<?php
}
function nav($accueil = 0){
	?>
	<nav class="navbar navbar-light navbar-expand-lg" style="background-image:url('images/nav.jpg');">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/note.png" alt="" width="40" height="40" style="margin-left:5px;" class="d-inline-block align-top">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link <?php if($accueil ==1) {?> active <?php } ?> btn btn-secondary" style="color:white;" <?php if($accueil == 1) {?> aria-current="page"<?php } ?> href="index.php">Accueil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-secondary" style="color:white;" href="noteroeuvre.php">Noter un album</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-secondary" style="color:white;" href="classement.php">Classement</a>
						</li>
					</ul>
					<form class="d-flex" method="POST" action="recherche.php">
						<input name="artiste" type="text" placeholder="Entrez le nom d'un artiste">
						<button class="btn btn-success" type="submit">Recherche</button>
					</form>
				</div>
			</div>
		</nav>
	<?php
}
