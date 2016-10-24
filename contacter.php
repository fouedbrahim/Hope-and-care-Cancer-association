<?php
include("connexion.php");
$req='insert into contactes value ("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['email'].'","'.$_POST['sujet'].'","'.$_POST['message'].'");';
mysql_query($req);
echo("message envoyer!! redirection dans 3 secondes ");
header("refresh:3;url=index.php");
?>