<?php
	include("connexion.php");
	
	$nomEvenement=$_POST['nom_evenement'];
	$typeEvenement=$_POST['type_evenement'];
	$lieuEvenement=$_POST['lieu_evenement'];
	$dateEvenement=$_POST['date_evenement'];
	$description=$_POST['description'];
	
	$requete="insert into evenement (id_evenement,nom,type,lieu,date,description) values (NULL,'$nomEvenement', '$typeEvenement', '$lieuEvenement','$dateEvenement', '$description'); ";
	
	if (mysql_query($requete)){
		header("location:liste_evenements.php");
	}else{
		echo "Erreur lors de l'ajout";
	}
?>