<?php
	include("connexion.php");
	
	
	$id = $_GET['id'];
	$nomEvenement=$_POST['nom_evenement'];
	$typeEvenement=$_POST['type_evenement'];
	$lieuEvenement=$_POST['lieu_evenement'];
	$dateEvenement=$_POST['date_evenement'];
	$description=$_POST['description'];
	
	$requete="UPDATE `evenement` SET`nom`='$nomEvenement',`type`='$typeEvenement',`lieu`='$lieuEvenement',`date`='$dateEvenement',`description`='$description' WHERE id_evenement='$id'; ";
	
	if (mysql_query($requete)){
		header("location:liste_evenements.php");
	}else{
		echo "Erreur lors de la modification";
	}
?>