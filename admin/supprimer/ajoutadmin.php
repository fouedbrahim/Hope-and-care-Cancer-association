<!-- Realisé par Azouzi Yahya -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ajouter un administrateur</title>

<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<!-- Css Files Start -->
<link href="css/style.css" rel="stylesheet" type="text/css" /><!-- All css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /><!-- Bootstrap Css -->

<link href="css/font-awesome.css" rel="stylesheet" type="text/css" /><!-- Font Awesome Css -->
<!-- Css Files End -->
<!-- Social Icons no JS -->
<noscript>
		<link rel="stylesheet" type="text/css" href="css/nj.css" />
</noscript>
<script language="javascript" src="script.js">
</script>
<!-- Social Icons no JS -->

</head>
<body>
<!-- Start Main Wrapper -->
<div class="wrapper">
<!-- Start of Header -->
	<header>
  <!-- Start Main Header -->
  <section class="top_bar">
	<section class="container-fluid container">
		<section class="row-fluid">
			<article class="span6">
				<ul class="details">
					<li><i class="icon-map-marker"> </i> Tunis</li>
					<li><i class="icon-mobile-phone"> </i> +216 98 765 432 </li>
					<li><a href="mailto:hope.care@esprit.tn"><i class="icon-envelope-alt"></i></a>hope.care@esprit.tn</li>
				</ul>
			</article>
			<article class="span4 offset2"> 		
				<ul class="social">
					<li> <a href="#" class="s8"> Pintrest</a> </li>
					<li> <a href="#" class="s7"> Youtube</a> </li>
					<li> <a href="#" class="s6"> Vimeo </a> </li>
					<li> <a href="#" class="s5"> Twitter</a> </li>
					<li> <a href="#" class="s4"> RSS </a> </li>
					<li> <a href="#" class="s3"> Flicker</a> </li>
					<li> <a href="#" class="s2"> Dribble</a> </li>
					<li> <a href="#" class="s1"> Facebook</a> </li>
				</ul>
			</article>
		</section>
	</section>	
  </section>

  <section class="logo_container" >
		  <section class="container-fluid container">
				<section class="row-fluid">
					 
					  <section class="span4">
							<h1 id="logo">
								<a href="index.html">
									<img src="images/logo.png">
								</a>
					
							</h1>
						
							</section>
						
						
						
				</section>
				
			</section>
  </section>
	 
	 </header>
<!-- End of Header -->

<!-- Title & BreadCrumbs -->
<section class="mtop" id="titre">
	<section class="container-fluid container">
		<section class="row-fluid">
			<section id="donation_box">
				<section class="container container-fluid">
					<section class="row-fluid">
					<div class="span8 first" > <h2>Ajouter un administrateur  </h2> </div>
		<div class="span4 title_right">
				<div class="dropdown" id="cart_dropdown">
 				
				
						
					</div>
			</div>
	</section>
				</section>
			</section>		<!-- end of Page Title -->
	</section>
 		<section class="row-fluid">
			<!-- BreadCrumbs -->
				<figure id="breadcrumbs" class="span12">
					
				</figure>
			<!-- End of breadcrumbs -->
		</section>
	</section>
</section>
<!-- End of Tile & Breadcrumbs -->

<!-- Page Content Container -->
<section id="content" class="mbtm blog">
	<section class="container-fluid container">
		<section class="row-fluid">
				
				<section class="span9" id="blog_listing">
				
					<figure class="blog_item">					

				
					<div class="inner_lyr">
				
					
						
						<br><br>
	<form name="form" method="post" action="ajout_admin.php">	
	
	<div id="div_img"><br><h5>Veuiller inserer une image </h5>
	
	<img src=="./photo/<?php echo(document.getElementById(imgsrc).value) ?>" width="60" height="60" border="1"/>
<input type="hidden" value="images/profil.jpg" name="imgsrc" id="imgsrc" >
	<input type="file" name="image" id="image" accept="image/*" >
	</div>
	
	<div id="div_auth">
	<table><tr> <td>Nom</td> <td><input type="text" id="nom" name="nom"></td></tr>
	<tr> <td>Prenom</td> <td><input type="text" id="prenom" name="prenom"></td></tr>
	<tr> <td>sexe</td> <td>
            
                <input type="radio" name="sexe" value="homme" id="sexe_0"checked="checked"/> Homme
             
                    <input type="radio" name="sexe" value="femme" id="sexe_1" />
                    Femme<br>
              </td></tr>
	
	<tr> <td>Date de naissance</td> <td><input type="text" id="daten" name="daten"></td></tr>
	<tr> <td>Adresse</td> <td><input type="text" id="adrs" name="adrs"></td></tr>
	<tr> <td>Téléphon</td> <td><input type="text" id="tel" name="tel"></td></tr>
	<tr> <td>Email</td> <td><input type="text" id="email" name="email"></td></tr>
	<tr><td>mot de passe</td><td><input type="password" id="passadmin" name="passadmin"></td></tr>
	<tr><td></td><td><br><input type="submit" value="Ajouter" id="button2"><input type="reset" value="Annuler" id="button2"></td></tr></table>
	
	</div>
	
	</form>
					</div>
				
				
					</figure>
 					
 					
 
 					
				
	</section>
				
				
		</section>
	</section>

</section>
<!-- Page Content Container -->
	 

</div>
<!-- End Main Wrapper -->
<!-- JS Files Start -->
<script type="text/javascript" src="js/lib-1-9-1.js"></script><!-- lib Js -->
<script type="text/javascript" src="js/lib-1-7-1.js"></script><!-- lib Js -->
<script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizr -->
<script type="text/javascript" src="js/easing.js"></script><!-- Easing js -->
<script type="text/javascript" src="js/bootstrap.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="js/bxslider.js"></script><!-- BX Slider -->
<script type="text/javascript" src="js/clearInput.js"></script><!-- Input Clear -->
<script type="text/javascript" src="js/smooth-scroll.js"></script><!-- smooth Scroll -->
<script type="text/javascript" src="js/prettyPhoto.js"></script><!-- Pretty Photo -->
<script type="text/javascript" src="js/social.js"></script><!-- Social Media Hover Effect -->
<script type="text/javascript" src="js/countdown.js"></script><!-- Event Counter -->
<script type="text/javascript" src="js/custom.js"></script><!-- Custom / Functions -->
<!--[if IE 8]>
     <script src="js/ie8_fix_maxwidth.js" type="text/javascript"></script>
<![endif]--> 
</body>
</html>