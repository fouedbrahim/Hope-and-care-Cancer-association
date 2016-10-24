<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insertportecle</title>
	</head>

	<body>
		<?php
			include("connect.php");
			$porte cle=$_POST['porte cle'];
			

			$req="INSERT INTO `panier`(`id`, `nom_produit`) VALUES (null,'$porte cle');";
			
			if(mysql_query($req))
			{
				echo "<h1>produit ajoute au panier </h1> <br> <a href=afficherpanier.php> Afficher le contenu du panier </a>";

			}
			else 
				echo 'ajout Impossible';
		?>
	</body>
</html>