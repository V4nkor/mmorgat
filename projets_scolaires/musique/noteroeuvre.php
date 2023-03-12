<html lang="fr">
    <?php 
		include("fonctions.php");
	?>
	<head>
		<?php meta(); ?>
	</head>
	<body>
		<?php nav();
		?>
			<br><div class="card" style="width: 25rem;text-align:center;margin-left:auto;margin-right:auto;">
						<div class="card-body">
							Rechercher un album a noter : 
							<form class="d-flex" method="POST" action="recherche.php">
								<input name="nomAlbum" type="text" style="margin-left:auto;" placeholder="Entrez le nom d'un album">
								<button class="btn btn-success" style="margin-right:auto;" type="submit">Recherche</button>
							</form>
						</div>
					</div>
		<!-- Optional JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	</body>
	<footer class="bg-light text-center">
		<div class="text-center"  style="background-color: rgba(0, 0, 0, 0.2);">
			© 2021 Mathieu Morgat
		</div>
	</footer>
</html>