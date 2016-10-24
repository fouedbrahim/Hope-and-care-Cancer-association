<?php
	include("connexion.php");
	
	
	$id=$_GET['id'];
	$requete="delete from evenement where id_evenement='$id';";
	if (mysql_query($requete)){
		header("location:liste_evenements.php");
	}else{
		echo "Erreur lors de la suppression";
	}
?>