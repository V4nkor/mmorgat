<?php
session_start();
if(!isset($_SESSION['panier'])){
	$_SESSION['panier']=array();//creation de la variable session
}
if(isset($_SESSION['panier'][$id])){
	$_SESSION['panier'][$id]++;//ajoute 1 a la quantite
}
else
{
	$_SESSION['panier'][$id]=1;//sinon onmet un dans la quantite
}
$_SESSION['success']="le produit a ete ajoute au panier !";
header("location:index.php");
?>