<html lang="fr">
	<?php include("fonctions.php");?>
	<head>
		<?php meta();?>
	</head>
	<body>
		<?php
			nav();
			//connexion BDD
			$bdd=connect();
			//requete
			$sql="select idOeuvre, AVG(note) as moyenne from noter GROUP BY idOeuvre";
			$resultat=$bdd->query($sql);
		?>
		<h1>Classement des oeuvres : </h1>
		<ul class="list-group list-group-flush list-group-horizontal-xl" style="color:black;text-align:center;">
			<li class="list-group-item flex-fill">Titre</li>
			<li class="list-group-item flex-fill">Artiste</li>
			<li class="list-group-item flex-fill">Note moyenne</li>
		</ul>
		<?php
		while($notes = $resultat ->fetch(PDO::FETCH_OBJ)){
			$sql2="select* from album where id = ".$notes->idOeuvre;
			$resultat2=$bdd->query($sql2);
			$oeuvre = $resultat2 ->fetch(PDO::FETCH_OBJ);
			$sql3="select* from artiste where id = ".$oeuvre->idArtiste;
			$resultat3=$bdd->query($sql3);
			$nomArtiste = $resultat3 ->fetch(PDO::FETCH_OBJ);
			?>
				<ul class="list-group list-group-flush list-group-horizontal-xl" style="color:black;">
					<li class="list-group-item flex-fill"><a href="description.php?id=<?=$oeuvre->id?>"><?=$oeuvre->Titre?></a></li>
					<li class="list-group-item flex-fill"><?= $nomArtiste->Nom?></li>
					<li class="list-group-item flex-fill"><?= $notes->moyenne?></li>
				</ul>
			<?php
		}
		?>
		<!-- Optional JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	</body>
	<footer class="bg-light text-center">
		<div class="text-center"  style="background-color: rgba(0, 0, 0, 0.2);">
			© 2021 Mathieu Morgat
		</div>
	</footer>
</html>