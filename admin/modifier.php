
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>modifier étudiant</title>

</head>

<body>
<form method="post" action="update.php">
        <fieldset>
          <legend>Ajouter un étudiant</legend>
		  nom <input type="text" name="nom" id="nom" value=<?php echo $_GET['nom']?>>
		  <br><br>prénom<input type="text" name="prenom" id="prenom"value=<?php echo $_GET['prenom']?>>
		  <input type="hidden" name="email" id="email" value=<?php echo $_GET['email']?>>
		  <br><input type="submit" value="modifier etudiant">
		  
		  </fieldset>
		  </form>
		  </body>
		  </html>
		  
