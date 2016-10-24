<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insertpull</title>
	</head>

	<body>
		<?php
			include("connect.php");
			$pull=$_POST['pull'];
			

			$req="INSERT INTO `panier`(`id`, `nom_produit`) VALUES (null,'$pull');";
			
			if(mysql_query($req))
			{
				echo "<h1>produit ajoute au panier </h1> <br> <a href=afficherpanier.php>Afficher le contenu du panier </a>";

			}
			else 
				echo 'ajout Impossible';
		?>
	</body>
</html>