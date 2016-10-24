<?php
include("connect.php");
$id=$_GET['idp'];
$req="DELETE FROM `panier` where id='$id';";
if(mysql_query($req))
{
//echo'Done';
header('Location:afficherpanier.php');
}
else 
	echo 'not Done';
?>