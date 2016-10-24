<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css"type="text/css">

<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

		
			$civilite=$_GET['civlite'];
			$nom=$_GET['nom'];
			$prenom=$_GET['prenom'];
			$email=$_GET['email'];
			$nature_email=$_GET['nature_adr'];
			$date_naissance=$_GET['date_naiss'];
			$num_tel=$_GET['tel'];
			$adresse=$_GET['adresse'];
			$pays=$_GET['pays'];
			$deja_donateur=$_GET['donn'];
			$r_fiscale=$_GET['fisc'];
			$montant_direct=$_GET['mont_d'];
			$mode_paiment_direct=$_GET['payment_types'];
			$montant_reg=$_GET['prelevement'];
			$mode_paiment_reg=$_GET['payment_types2'];
			$jour_prelevement=$_GET['periodic'];
			$periodicite=$_GET['Periodicite'];

			
	

		?>
<form name="f" method="post" >
<center><h1>administration &quot;hope and care&quot;</h1>
  <table width="100%" border="1">
    <tr>
      <td><a href="ajout_don.php">afficher la liste des dons  </a></td>
      <td><a href="modifier_don.php">modifier la liste des dons</a></td>
      <td>supprimer un don&nbsp;</td>
      <td><a href="rechercher.php">rechercher un don </a>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  </center>
<table width="100%" border="1">
  <tr>
    <td width="98%">
      <center>
        <p>suppression</p>
        <table width="80%" border="1">
          <tr>
            
            <td> id_donateur</td>
            <td>civilite</td>
            <td>nom</td>
            <td>prenom</td>
            <td>email</td>
            <td>nature email</td>
            <td>date_N</td>
            <td>tel</td>
            <td>adresse</td>
            <td>pays</td>
            <td>deja donateur</td>
            <td>r_fiscale</td>
            <td>MONTANT_directe</td>
            <td>mode_pd</td>
            <td>MONTANT_reg</td>
            <td>mode_pr</td>
            <td>jour_prelev</td>
            <td>periodicité</td>
             <td>supprimer</td>
            
            
          </tr>
          <?php
			include('connexion.php');
			$req="SELECT * FROM `don`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
          <tr>
            <td><?php echo $ligne[0] ?></td>
            <td><?php echo $ligne[1] ?></td>
            <td><?php echo $ligne[2] ?></td>
            <td><?php echo $ligne[3] ?></td>
            <td><?php echo $ligne[4] ?></td>
            <td><?php echo $ligne[5] ?></td>
            <td><?php echo $ligne[6] ?></td>
            <td><?php echo $ligne[7] ?></td>
            <td><?php echo $ligne[8] ?></td>
            <td><?php echo $ligne[9] ?></td>
            <td><?php echo $ligne[10] ?></td>
            <td><?php echo $ligne[11] ?></td>
            <td><?php echo $ligne[12] ?></td>
            <td><?php echo $ligne[13] ?></td>
            <td><?php echo $ligne[14] ?></td>
            <td><?php echo $ligne[15] ?></td>
            <td><?php echo $ligne[16] ?></td>
            <td><?php echo $ligne[17] ?></td>
            <td><a href="delete.php?nom=<?php echo $ligne[3]?>">Delete </a></td>
            
        
			
          </tr>
          <?php
			}
			?>
        </table>
        <br>
        <center>
        </center>
        <br>
        <p>&nbsp;</p>
        </center>
      <br></td>
  </tr></table>


  </form>
</body>
</html>
