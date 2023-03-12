<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="cssbonbon.css">
	</head>
	<body>
	<?php
	extract($_POST);
	//connexion BDD
	require "fonctions.php";
	$bdd=connect();
	//requete
	$sql="select* from produit where nom LIKE '%$nom%'";
	$resultat=$bdd->query($sql);
	?>
	<nav class="navbar navbar-light nav sticky-top " >
			<div class="container-fluid">
				<div class="card pink">
					<a class="navbar-brand" href="#">
					<img src="images/candy.png" alt="" width="40" height="40" style="margin-left:5px;" class="d-inline-block align-top">
					Bonbons & cie
					</a>
				</div>
				<div class="card pink">
				<?php echo"<form id='navsearch' method='POST' action='recherche.php'>Rechercher un bonbon : <input type='text' name='nom'><input type='submit' value='Recherche'></form>"; ?>
				</div>
				<div class="dropdown">
					<button class="btn btn-secondary pink dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					Modifications BDD
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" href="#ajout.php">Ajout bonbons</a></li>
						<li><a class="dropdown-item" href="#supression.php">Supression bonbons</a></li>
						<li><a class="dropdown-item" href="#modification.php">Moification bonbons</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row" style="margin-top:30px;margin-bottom:30px;">
				<div class="col">
					<?php
						while($produit = $resultat ->fetch(PDO::FETCH_OBJ))
						{
							echo "<div class='card cardprod opaque'><img class='img-bonbon'src='".$produit->photo."'> <div class='card-body'><h5 class='card-title'>". $produit->nom."</h5><p style='margin-bottom:no-margin'>".$produit->prix." $</p><br></div></div>";
						}
					?>
				</div>
			</div>
		</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>