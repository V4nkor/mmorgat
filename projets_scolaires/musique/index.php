<?php session_start();?>
<html lang="fr">
    <?php 
		$accueil = 1;
		include("fonctions.php");
		//connexion BDD
		$bdd=connect();
		//requete
		$sql="select* from album";
		$resultat=$bdd->query($sql);
		
	?>
	<head>
		<?php meta();?>
	</head>
	<body>
		<?php nav($accueil);?>
		<h1 style="text-align:center;background-color:lightgrey;">Liste des albums</h1>
		<?php if(isset($_SESSION['ajout'])){?>
			<div class="alert alert-success" role="alert" id="alert">
			<?php echo $_SESSION['ajout']; 
			unset($_SESSION['ajout']);?>
		</div>
		<?php
		}
		?>
		<ul class="list-group list-group-flush list-group-horizontal-xl" style="color:black;text-align:center;">
			<li class="list-group-item flex-fill">Titre</li>
			<li class="list-group-item flex-fill">Artiste</li>
			<li class="list-group-item flex-fill">Pochette</li>
			<li class="list-group-item flex-fill">Noter ?</li>
		</ul>
		<?php
		while($album = $resultat ->fetch(PDO::FETCH_OBJ)){
			$sql2="select* from artiste where id = ".$album->idArtiste;
			$resultat2=$bdd->query($sql2);
			$nomArtiste = $resultat2 ->fetch(PDO::FETCH_OBJ)
			?>
				<ul class="list-group list-group-flush list-group-horizontal-xl" style="color:black;">
					<li class="list-group-item flex-fill"><?=$album->Titre?></li>
					<li class="list-group-item flex-fill"><?= $nomArtiste->Nom?></li>
					<li class="list-group-item flex-fill"><img src='images/<?= $album->Pochette?>'> </li>
					<li class="list-group-item flex-fill"><a type="button" class="btn btn-secondary" href="noter.php?id=<?=$album->id?>">Noter</a></li>
				</ul>
			<?php
		}
		?>
		<script type="text/javascript">
			setTimeout(function(){
				//closing the alert
				$('#alert').alert('close');
			},4000);
		</script>
		<!-- Optional JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	</body>
	<footer class="bg-light text-center">
	<div class="text-center"  style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Mathieu Morgat
	</div>
  <!-- Copyright -->
</footer>
</html>