<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css"type="text/css">

<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form name="f" method="post" action="index.html">
<center>
  <h1>administration &quot;hope and care&quot;</h1></center>
<table width="100%" border="1">
  <tr>
    <td width="47%"><p><a href="affiche.php">afficher la liste des dons </a> <br>
    </p>
      <p><a href="modifier.php">modifier la liste des dons </a></p>
      <br>
      <p><a href="supprimer.php">supprimer un don </a></p>
      <br>
      <p><a href="rechercher.php">rechercher un don </a></p>
    
    </td>
    <td width="53%">
    <center>
      <p>afficher</p>
      <table width="100%" border="1">
        <tr>
          <td>nom</td>
          <td>pays</td>
          <td>remarques</td>
        </tr>
        		<?php
			include('connexion.php');
			$req="SELECT * FROM `personne`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
        <tr>
        				<td><?php echo $ligne[0] ?></td>
					<td><?php echo $ligne[1] ?></td>
					<td><?php echo $ligne[2] ?></td>
          
        </tr>
        <?php
			}
			?>
      </table>
      <p>&nbsp;</p>
    </center>
    <br></td>
  </tr></table>


  </form>
</body>
</html>
