<?php
include("connexion.php");
$req='select * from utilisateur where email="'.$_POST['email'].'" and pass="'.$_POST['pass'].'";';
mysql_query($req);
$resultat = mysql_query($req);
$nb =mysql_num_rows($resultat);
if ($nb!=0)
{
$ligne=mysql_fetch_row($resultat);
session_start();
$type=$ligne[9];
$_SESSION['type']=$type;
$_SESSION['login']=$_POST['email'];
$_SESSION['nom']=$ligne[0];
$_SESSION['prenom']=$ligne[1];

header("location:index.php");
}
else 

header("location:index.php?err=1");
?>