<html lang="fr">
    <?php 
		include("fonctions.php");
		extract($_GET);
		//connexion BDD
		$bdd=connect();
		//requete
		$sql="select* from album where id = $id";
		$resultat=$bdd->query($sql);
	?>
	<head>
		<?php meta(); ?>
	</head>
	<body>
		<?php nav();
		$album = $resultat ->fetch(PDO::FETCH_OBJ);
		$sql2="select* from artiste where id = ".$album->idArtiste;
		$resultat2=$bdd->query($sql2);
		$nomArtiste = $resultat2 ->fetch(PDO::FETCH_OBJ)
		?>
			<br>
			<div class="row">
				<div class="col"> 
					<div class="card" style="width: 22rem;text-align:center;margin-left:auto;margin-right:auto;">
						<div class="card-body">
							<img src='images/<?= $album->Pochette?>'><br>
							<h5><?=$album->Titre?></h5>
							Par <?= $nomArtiste->Nom?>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card" style="width: 35rem;">
						<div class="card-body">
							<form method="POST" action="ajoutnote.php">
								Donne ta note (entre 1 et 5) : <input name="note" type="number" placeholder="Note"><br><br>
								Donne un commentaire : <br>
								<textarea rows="5" cols="72" name="commentaire"></textarea>
								<br>
								<input type="hidden" name="idOeuvre" value="<?=$id?>">
								<button class="btn btn-outline-success" style="margin-top:5px;" type="submit">Enregistrer mon avis sur cet album</button>
							</form>
						</div>
					</div>
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