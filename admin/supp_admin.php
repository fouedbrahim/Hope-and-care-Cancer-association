<?php
include("connexion.php");

$req='Delete from utilisateur where email="'.$_GET['email'].'";';
mysql_query($req);

header("location:consulter.php");
?>