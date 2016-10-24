<?php
include("connexion.php");
$civilite=$_POST['civlite'];
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$email=$_POST['email'];
			$nature_email=$_POST['nature_adr'];
			$date_naissance=$_POST['date_naiss'];
			$num_tel=$_POST['tel'];
			$adresse=$_POST['adresse'];
			$pays=$_POST['pays'];
			$deja_donateur=$_POST['donn'];
			$r_fiscale=$_POST['fisc'];
			$montant_direct=$_POST['mont_d'];
			$mode_paiment_direct=$_POST['payment_types'];
			$montant_reg=$_POST['prelevement'];
			$mode_paiment_reg=$_POST['payment_types2'];
			$jour_prelevement=$_POST['periodic'];
			$periodicite=$_POST['Periodicite'];
			

	
$req="UPDATE `don` SET `civilite`='$civilite',`nom`='$nom',`prenom`='$prenom',`email`='$email',`nature_email`='$nature_email',`date_naissance`='$date_naissance',`num_tel`='$num_tel',`adresse`='$adresse',`pays`='$pays',`deja_donateur`='$deja_donateur',`r_fiscale`='$r_fiscale',`montant_direct`='$montant_direct',`mode_paiment_direct`='$mode_paiment_direct',`montant_reg`='$montant_reg',`mode_paiment_reg`='$mode_paiment_reg',`jour_prelevement`='$jour_prelevement',`periodicite`='$periodicite' WHERE nom='$nom';";
if(mysql_query($req))
	header('Location:modifier_don1.php');
	
else
	echo 'error'.mysql_error();
?>