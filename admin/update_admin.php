<?php
include("connexion.php");
if(empty($_POST['image']))
$img= $_POST['img'];
else 
$img=$_POST['image'];
$req='update utilisateur set nom="'.$_POST['nom'].'", prenom="'.$_POST['prenom'].'", sexe="'.$_POST['sexe'].'", daten="'.$_POST['daten'].'", adresse="'.$_POST['adrs'].'", tel="'.$_POST['tel'].'", photo="'.$img.'" where email="'.$_POST['email'].'";';

mysql_query($req);
if(empty($_POST['passadmin']))
{$req='update utilisateur set pass="'.$_POST['passadmin'].'" where email="'.$_POST['email'].'";';
mysql_query($req);
}
header("location:consulter.php");
?>
