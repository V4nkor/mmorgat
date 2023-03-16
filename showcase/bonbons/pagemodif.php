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
	nav();
	if((isset($_SESSION['autorisation'])) and ($_SESSION['autorisation']=="OK")){?>
		<div class="container">
			<div class="row" style="margin-top:30px;">
				<div class="col">
					<?php if(isset($_SESSION['table'])){?>
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
									<p style='marginrgin-bottom:no-margin'><?=$produit->prix?><br><br>
									<a class="btn btn-success" href="ajout_panier.php?id=<?= $produit->id ?>"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a><br></p>
									<a href='formodif.php?id=<?= $produit->id?>' class='btn btn-warning btn-sm'><i class="fas fa-edit"></i> Modification</a>
									<a href='supression.php?id=<?= $produit->id?>' class=' btn btn-danger btn-sm' onclick='return confirm("voulez vous definitivement suprimer ce bonbon ?")'><i class="fas fa-trash"></i> Supression</a>
								</div>
							</div>
						<?php
							}
						?>
				</div>
			</div>
		</div>
		<?php }
		else{
			echo"Cette page est destinee aux administrateurs, si vous etes un administrateur, veuillez vous connecter";
		}?>
		<script type="text/javascript">
			setTimeout(function(){
				//closing the alert
				$('#alert').alert('close');
			},2000);
		</script>
		<!-- Optional JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	</body>
</html>
<?php unset($_SESSION['table']); ?>