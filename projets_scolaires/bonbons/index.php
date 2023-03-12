<?php session_start();
 require "fonctions.php";?>
<html lang="fr">
  <head>
    <?php meta(); ?>
	</head>
	<body>
	<?php
	//connexion BDD
	$bdd=connect();
	//requete
	$sql="select* from produit ";
	$resultat=$bdd->query($sql);
	?>
		<?php nav();?>
		
		<div class="container">
			<div class="row" style="margin-top:30px;">
				<div class="col">
					
					<?php if(!empty($_SESSION['success']))
					{
					?>
					<div class="alert alert-success" role="alert" id="alert">
					<?php echo $_SESSION['success']; ?>
					</div>
					<?php
					}
					if(isset($_SESSION['table'])){?>
					<div class="card pink" style="text-align:center;">
						<?php echo $_SESSION['table'];?>
					</div>
					<?php
						}
						while($produit = $resultat ->fetch(PDO::FETCH_OBJ))
						{
						?>
						<div class='card cardprod opaque'>
							<img class='img-bonbon'src='<?= $produit->photo?>'> 
							<div class='card-body'>
								<h5 class='card-title'><?=$produit->nom?></h5>
								<p style='margin-bottom:no-margin'><?=$produit->prix?><br><br>
								<a class="btn btn-success" href="ajout_panier.php?id=<?= $produit->id ?>"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a><br></p>
							</div>
						</div>
						<?php
							}
						?>
					<!-- Optional JavaScript -->
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
				</div>
			</div>
		</div>
	</body>
</html>