<?php 
	session_start();
	if((isset($_SESSION['autorisation'])) and ($_SESSION['autorisation']=="OK")){?>
	<form  method="POST" action="ajout.php" enctype='multipart/form-data'>
	Nom du bonbon : <input type='text' name='nom'><br>
	Prix du bonbon : <input type='text' name='prix'><br>
	Image du bonbon : <input type='file' name='image'><br>
	<input type='submit' value='Ajout'>
	</form>
	<?php }
		else{
			echo"Cette page est destinee aux administrateurs, si vous etes un administrateur, veuillez vous connecter";
		}?>
