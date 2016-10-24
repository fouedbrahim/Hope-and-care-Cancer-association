<?php
include("connexion.php");
$nom=$_GET['nom'];
$req="DELETE from don where nom='$nom';";
if(mysql_query($req))
{

header('Location:supprimer_don1.php');
}
else 
	echo 'not Done';
?>