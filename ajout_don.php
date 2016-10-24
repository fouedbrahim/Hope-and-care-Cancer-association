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


			$req="INSERT INTO `don`(`id_donateur`, `civilite`, `nom`, `prenom`, `email`, `nature_email`, `date_naissance`, `num_tel`, `adresse`, `pays`, `deja_donateur`, `r_fiscale`, `montant_direct`, `mode_paiment_direct`, `montant_reg`, `mode_paiment_reg`, `jour_prelevement`, `periodicite`)  VALUES (null,'$civilite', '$nom', '$prenom', '$email', '$nature_email', '$date_naissance', '$num_tel', '$adresse', '$pays', '$deja_donateur', '$r_fiscale', '$montant_direct', '$mode_paiment_direct', '$montant_reg', '$mode_paiment_reg', '$jour_prelevement', '$periodicite');";


			if(mysql_query($req))
			{
				echo "<h1>Insertion avec succés</h1> <br> ";}
				else
				echo 'Insertion Impossible'.mysql_error();
		?>
			<!-- Realisé par ben brahim foued 
				<center><h1>administration &quot;hope and care&quot;</h1>
				</center>
                <table width="100%" border="1">
    <tr>
      <td>afficher la liste des dons  </td>
      <td><a href="modifier_don.php">modifier la liste des dons </a></td>
      <td><a href="supprimer.php">supprimer un don</a>&nbsp;</td>
      <td><a href="rechercher.php">rechercher un don </a>&nbsp;</td>
    </tr>
  </table>
<center>
  <h1>&nbsp;</h1></center>
<table width="80%" border="1">
  <tr>
    <td width="53%" height="50%">
      <center>
        <p>afficher la liste des dons </p>
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
            
            
            
          </tr>
          <?php
			}
			?>
        </table>
        <p>&nbsp;</p>
      </center>
    <br></td>
  </tr></table>


 

-->
		
			