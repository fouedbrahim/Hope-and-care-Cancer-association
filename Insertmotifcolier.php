<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insertmotifcolier</title>
	</head>

	<body>
		<?php
			include("connect.php");
			$motif colier=$_POST['motif colier'];
			

			$req="INSERT INTO `panier`(`id`, `nom_produit`) VALUES (null,'$motif colier');";
			
			if(mysql_query($req))
			{
				echo "<h1>produit ajoute au panier </h1> <br> <a href=afficherpanier.php> Afficher le contenu du panier </a>";

			}
			else 
				echo 'ajout Impossible';
		?>
	</body>
</html>