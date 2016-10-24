<?php 

include("connexion.php");
$qry1 ='select * from utilisateur where email="'.$_POST['email'].'"';
$resultat = mysql_query($qry1);
$existe =  mysql_num_rows($resultat);

if($existe==0)
{
$req='insert into utilisateur value("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['sexe'].'","'.$_POST['daten'].'","'.$_POST['adrs'].'","'.$_POST['tel'].'","'.$_POST['email'].'","'.$_POST['pass'].'","NULL","'.$_POST['espace'].'");';
mysql_query($req);
include("auth_user.php");
header("location:index.php");
}

else
{$err=0;$email="email__existe!!!" ;
$url = '?nom='.$_POST['nom'].'&prenom='.$_POST['prenom'].'&daten='.$_POST['daten'].'&sexe='.$_POST['sexe'].'&adrs='.$_POST['adrs'].'&tel='.$_POST['tel'].'&err='.$err.'&email='.$email;
header("location:inscription.php$url");}

/*$qry1 ='select * from utilisateur where email="'.$_POST['email'].'"';
$resultat = mysql_query($qry1);
$existe =  mysql_num_rows($resultat);

if($existe==0){*/

/*$url=$_SERVER['HTTP_REFERER'];}

else
{$url = './?err=1';

//$url = '/?err=1&nom='.$_POST['nomt'].'&prenom='.$_POST['prenomt'].'
}


header("location:$url");
if(empty($_POST)
*/

?>
