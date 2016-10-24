<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hope & Care </title>
<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/mq.js"></script>
<![endif]-->
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<!-- Css Files Start -->
<link href="css/style.css" rel="stylesheet" type="text/css" /><!-- All css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /><!-- Bootstrap Css -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" /><!-- Font Awesome Css -->

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
					<li><a href="skype:<?php echo('+21698765432')?> "> <i class="icon-mobile-phone"></a></i> +216 98 765 432</li>
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

  <section class="logo_container">
		  <section class="container-fluid container">
				<section class="row-fluid">
					  
					  <section class="span4">
							<h1 id="logo">
								<a href="index.php">
									<img src="images/logo.png">
								</a>
					
							</h1>
						
							</section>
						<section id="auth_membre">
					 <?php 
					session_start();
						if($_SESSION['prenom']!=""){?>
						<br><br><p align="right"> <font face="Bradley Hand ITC" size="4"><B>Bonjour ,<?php echo($_SESSION['nom']."&nbsp".$_SESSION['prenom'])?></B><a href="logout.php">   Déconnexion</a></font></p>
						<?php } else { ?> 
						
						<form method="POST" action="auth_user.php">
						<table><tr> <td> <label>Email</label></td> <td><input type="text" id="email" name="email"></td></tr><tr><td><label>Mot de passe</label></td><td><input type="password" id="pass" name="pass"></td></tr>
	<tr><td></td><td><input type="submit" value="connexion" id="button2"><input type="reset" value="Annuler" id="button2"></td></tr></table>
</form><?php } ?>
						</section>
						
						
				</section>
				
			</section>
  </section>
	<!-- Main Nav Bar -->
			<nav id="nav">
				<section class="container-fluid container">
					<section class="row-fluid">
			  <div class="navbar navbar-inverse">
				<div class="navbar-inner">
				  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				  <div class="nav-collapse collapse">
					<ul class="nav">
	
					<li class="dropdown active"> <a href="index.php"> Accueil </a> </li>
					 
					  <li class="dropdown"> <a class="dropdown-toggle" href="index.html"> Comprendre le cancer <b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="comprendre.html">Qu'est ce que le cancer?</a></li>
							<li><a href="#">Type de cancer</a></li>
							<li><a href="#">moyens de prévention</a></li>

						</ul>
					  </li>
 
					  <li class="dropdown"> <a class="dropdown-toggle" href="#">Soutenir<b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="petition.html">Signer des pétitions</a></li>
							<li><a href="boutique.html">Acheter en ligne</a></li>
							<li><a href="#">envoyer des couriers</a></li>
							<li><a href="#">soutien morale</a></li>
						</ul>
					  </li>
 
					  <li class="dropdown"> <a class="dropdown-toggle" href="#">S'engager<b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="devenir.html">Devenir un bénèvole</a></li>
							<li><a href="entreprise.html">Entreprise parentaire</a></li>
							<li><a href="formulaire.html">proposer un évènement</a></li>

							</ul>
					  </li>

 					 
 
  					  <li class="dropdown"> <a class="dropdown-toggle" href="#.html" > faire un don <b class="caret"></b> </a>
						<ul class="dropdown-menu">
						<li><a href="Don.html">Faire un don</a></li>
						<li><a href="#">où vont vos dons</a></li>
				
 						</ul>
					  </li>
 
   					 <li class="dropdown "> <a class="dropdown-toggle" href="#.html" > Apropos <b class="caret"></b> </a>
						<ul class="dropdown-menu">
						<li><a href="#">qui sommes nous</a></li>
						<li><a href="#">ce que nous faisons</a></li>
						<li><a href="#">contacter-nous</a></li>
 						</ul>
					  </li>
 <?php
if(empty($_SESSION['prenom'])){ ?>
						<li class="dropdown"> <a href="inscription.php"> inscription </a> </li>
<?php } ?>
					</ul>
				  </div>
				  <!--/.nav-collapse -->
				</div>
				<!-- /.navbar-inner -->
			  </div>
			  
			  <!-- /.navbar -->
					</section>
				</section>
			</nav>
	<!-- End Main Nav Bar -->	 
	 </header>
<!-- End of Header -->

<!-- Start of Header Banner -->
	<section class="banner_slider mbtm">
		 <ul id="banner_slider">
					
					<li> 
						<img src="images/sl1.jpg" alt="Banner Slider" />
							
					</li>
					
					<li> 
						<img src="images/sl2.jpg" alt="Banner Slider" />
							
					</li>
										<li> 
						<img src="images/sl3.jpg" alt="Banner Slider" />
							
					</li>
					
		 
		 </ul>
	 </section>
<!-- End of Header Banner -->

<!-- Start of Features Boxes -->
	<div id="gallery_index">
	<section id="ngo_features" class="mbtm gallery">
		<section class="container-fluid container">
		<section class="row-fluid">
		
 								<ul class="gallery-page">
 										
 										<li class="gal_img Events span3 view_new view-tenth">
										<figure class="gal_img_container">
										<img class="galler-img" src="images/2.jpg" alt="">
									
										</figure>
										</li>
 										<li class="gal_img Social span3 view_new view-tenth">
										<figure class="gal_img_container">
										<img class="galler-img" src="images/3.jpg" alt="">
										
										</figure>
										</li>
 										<li class="gal_img Events span3 view_new view-tenth">
										<figure class="gal_img_container">
										<img class="galler-img" src="images/4.jpg" alt="">
										
										</figure>
										</li>
							</ul>
		</section></section>
	</section>
	</div>
<!-- End of Features Boxes -->

<!-- Start of Donation Box -->
	<section id="donation_box" class="mbtm">
	<section class="container container-fluid">
		<section class="row-fluid">
		<figure class="span10">
			<h2> Soyons solidaires et combattons le cancer, La<strong> Solidarité</strong> commence <strong> ici!</strong> </h2>
		</figure>
		<figure class="span2">
			
				<button  data-placement="top"  title="Support Us"  class=" btn btn-large dropdown-toggle" onclick=window.location.href="don.html">Faites un don</button>
			
		</figure>
		</section>
	</section>
</section>
<!-- End of Donation Box -->

<!-- Start of Charity News & Progress Section -->
	<section id="progress_news" class="mbtm">
		<section class="container-fluid container">
			<section class="row-fluid">
			
				<figure id="shop" class="span6">
				
				<div id="slider_shop">
						<ul id="shop_slider">
							
							<li> 
								<div class="img"> <img src="images/pr0.jpg" alt="Shop Image" /></div>
								<div class="price_cart"> <span class="price">15 Dt </span> <a href="#"  data-placement="top" rel="tooltip" title="Ajouter au panier" > <i class="icon-shopping-cart" > </i> </a> </div>
							</li>

							<li> 
								<div class="img"> <img src="images/pr1.jpg" alt="Shop Image" /></div>
								<div class="price_cart"> <span class="price">15 Dt </span>  <a href="#" data-placement="top" rel="tooltip" title="Ajouter au panier"> <i class="icon-shopping-cart"></i> </a> </div>
							</li>

							<li> 
								<div class="img"> <img src="images/pr2.jpg" alt="Shop Image" /></div>
								<div class="price_cart"> <span class="price">15 Dt</span>  <a href="#" data-placement="top" rel="tooltip" title="Ajouter au panier"> <i class="icon-shopping-cart"></i> </a> </div>
							</li>
							
							<li> 
								<div class="img"> <img src="images/pr3.jpg" alt="Shop Image" /></div>
								<div class="price_cart"> <span class="price">15 Dt</span>  <a href="#" data-placement="top" rel="tooltip" title="Ajouter au panier"> <i class="icon-shopping-cart"></i> </a> </div>
							</li>
							
							<li> 
								<div class="img"> <img src="images/pr4.jpg" alt="Shop Image" /></div>
								<div class="price_cart"> <span class="price">15 Dt</span>  <a href="#" data-placement="top" rel="tooltip" title="Ajouter au panier"> <i class="icon-shopping-cart"></i> </a> </div>
							</li>
						
						</ul>
				</div>
				
			</figure>
				<figure class="span6" id="news">
						
						<ul id="news_slider">
						
						

						
					<li> 
							<div class="span5 first" id="img_holder"> 
								<div class="img">
								<img src="images/article.jpg" alt="" /> 
								</div>
								<div class="img_title"> 
								<a href="#"> <i class="icon-plus"></i> </a>
								<a href="#"> News et actualités </a> 
								<p> Titre de l'article </p>
								</div>
							</div>
							<div class="span7 ns_desc" > 
							<a href="#" class="title"> Titre de l'article  <span class="h-line"></span> </a> 
 							<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
							<a href="#" class="rm"> Tous les articles &nbsp;  <i class="icon-plus"></i></a>
							</div> 
						</li>
						<li> 
							<div class="span5 first" id="img_holder"> 
								<div class="img">
								<img src="images/article.jpg" alt="" /> 
								</div>
								<div class="img_title"> 
								<a href="#"> <i class="icon-plus"></i> </a>
								<a href="#"> News et actualités </a> 
								<p> </p>
								</div>
							</div>
							<div class="span7 ns_desc" > 
							<a href="#" class="title"> Titre de l'article  <span class="h-line"></span> </a> 
 							<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
							<a href="#" class="rm"> Tous les articles &nbsp;  <i class="icon-plus"></i></a>
							</div> 
						</li>
						<li> 
							<div class="span5 first" id="img_holder"> 
								<div class="img">
								<img src="images/article.jpg" alt="" /> 
								</div>
								<div class="img_title"> 
								<a href="#"> <i class="icon-plus"></i> </a>
								<a href="#"> News et actualités </a> 
								<p>  </p>
								</div>
							</div>
							<div class="span7 ns_desc" > 
							<a href="#" class="title"> Aprops de nos produits  <span class="h-line"></span> </a> 
 							<p> Ces produits sont crée par plusieurs donateurs pour le faveurs des malades de cancer </p>
							<a href="#" class="rm"> Tous les articles &nbsp;  <i class="icon-plus"></i></a>
							</div> 
						</li>
 

						</ul>
				
				</figure>
				
			</section>
		</section>
	</section>
<!-- End of Charity News & Progress Section -->

<!-- Start of Event & Videos -->
	<section id="events_videos" class="mbtm">
		<section class="container-fluid container">
			<section class="row-fluid">
			
			<figure class="span6 first" id="video_slider">
			<h2> Hope & Care <span> Evenements & Albums </span> </h2>
				<div class="video_slider_container span8 offset2">
					<ul class="video_slider">
						<li> 
							<div class="video">
							<img src="images/coupcoeur.jpg" alt="" />
							<div class="tag_line"> Coup de coeur : le Trophée Roses </div>
							</div>
						</li>
						<li> 
							<div class="video">
							<img src="images/concert-vs-cancer.jpg" alt="" />
							<div class="tag_line"> concert-vs-cancer : événement musical </div>
							</div>
						</li>
					</ul>
				</div>
			</figure>
			
			<figure class="span5" id="news_accordion">
			    <div class="accordion" id="accordion_news">
						<div class="accordion-group">
							<div class="accordion-heading">
							<a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion_news" href="#co">
								<span class="datem span3 first"> 05/02 </span>
								<span class="title span8">  Marathon  
									<span class="location_date"> 
											<span class="location">	<i class="icon-map-marker"></i> Tunis </span>
											<span class="date"> 	<i class="icon-time"></i>		Mars 25, 2014	 </span>
									</span>
								</span>
								<span class="span1" id="icon_toggle"> <i class="icon-minus"> </i></span>	
							</a>
							</div>
							
							<div id="co" class="accordion-body collapse in">
							<div class="accordion-inner">
								<figure class="span3 img first">
									<img src="images/ev1.jpg" alt="" />
								</figure>
								<figure class="span9">
								<p>organisation de marathon avec des participants portent des maillots avec des slogans pour sensibiliser le public pour participer et aider les malades de cancer avec des dons .</p>
								<a href="#"> Lire la suite</a>
								</figure>
							</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
							<a class="accordion-toggle inactive" data-toggle="collapse" data-parent="#accordion_news" href="#c2">
								<span class="datem span3 first"> 05/27 </span>
								<span class="title span8"> Party 
									<span class="location_date"> 
											<span class="location">	<i class="icon-map-marker"></i> Tabarka </span>
											<span class="date"> 	<i class="icon-time"></i>		Mai 27, 2013	 </span>
									</span>
								</span>
								<span class="span1" id="icon_toggle"> <i class="icon-plus"> </i></span>	
							</a>
							</div>
							
							<div id="c2" class="accordion-body collapse">
							<div class="accordion-inner">
								<figure class="span3 img first">
									<img src="images/ev2.jpg" alt="" />
								</figure>
								<figure class="span9">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
								<a href="#"> Lire la suite</a>
								</figure>
							</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
							<a class="accordion-toggle inactive" data-toggle="collapse" data-parent="#accordion_news" href="#c3">
								<span class="datem span3 first"> 05/29 </span>
								<span class="title span8"> Excursion 
									<span class="location_date"> 
											<span class="location">	<i class="icon-map-marker"></i> London </span>
											<span class="date"> 	<i class="icon-time"></i>		Mai 29, 2013	 </span>
									</span>
								</span>
								<span class="span1" id="icon_toggle"> <i class="icon-plus"> </i></span>	
							</a>
							</div>
							
							<div id="c3" class="accordion-body collapse">
							<div class="accordion-inner">
								<figure class="span3 img first">
									<img src="images/ev3.jpg" alt="" />
								</figure>
								<figure class="span9">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
								<a href="#"> Lire la suite</a>
								</figure>
							</div>
							</div>
						</div>
 
						
				</div>
			</figure>
			
			</section>
		</section>
</section>
<!-- End Of Event & Videos -->



<!-- Start of Footer -->
	<footer id="footer" class="mtp">
	
	<!-- Start of Footer 2 -->
		<section class="footer_2">
		<section class="container-fluid container">
			<section class="row-fluid">
						<figure class="span6" id="footer_left">  <i class="icon-mobile-phone"></i> <span> +00 71 900 34 45 </span> <i class="icon-envelope-alt"></i> <span> contact@companyname.com  </span>  </figure>
						<figure class="span6" id="footer_right">
						<div id="socialicons"> 
 							<a data-placement="top" rel="tooltip" title="Join us on Facebook" id="social_facebook" class="social_active" href="#" >		<span>	</span></a> 
							<a data-placement="top" rel="tooltip" title="Follow us on Twitter" id="social_twitter" class="social_active" href="#"  >	<span>	</span></a> 
							<a data-placement="top" rel="tooltip" title="Visit LinkedIn Page" id="social_linkedin" class="social_active" href="#"  >	<span>	</span></a> 
							<a data-placement="top" rel="tooltip" title="Browse Flicker Gallery" id="social_flickr" class="social_active" href="#" >	<span>	</span></a> 
							<a data-placement="top" rel="tooltip" title="Check us on Forst " id="social_forst" class="social_active" href="#"  >		<span>	</span></a> 
							<a data-placement="top" rel="tooltip" title="View Viemeo Video Collection" id="social_vimeo" class="social_active" >		<span>	</span></a> 
							<a data-placement="top" rel="tooltip" title="Pin Us" id="social_pinterest" class="social_active" href="#" >					<span></span>	</a> 
							<a data-placement="top" rel="tooltip" title="Join our Social Circle" id="social_google_plus" class="social_active"  >		<span>	</span></a> 
							<a data-placement="top" rel="tooltip" title="Watch Our Broadcasting" id="social_youtube" class="social_active" href="#">	<span>	</span></a> 
						</div>
						</figure>
 
			</section>
		</section>
	</section>
	<!-- End of Footer 2 -->
	
	<!-- Start of Footer 3 -->
		<section class="footer_3">
		<section class="container-fluid container">
			<section class="row-fluid">
			
			<figure class="span6" id="footer_left">

				<ul class="footer_nav"> 
				<li> <a href="indep.php">	Home 		</a> </li>
				<li> <a href="shortcodes.html"> 	Features	</a> </li>
				<li> <a href="blog.html"> 	Blog 		</a> </li>
				<li> <a href="shortcodes.html"> 	Portfolio	</a> </li>
				<li> <a href="contacter.html"> 	Contact		</a> </li>
				</ul>
				<p> Copyright © 2014 - Hope&care </p>
				
				</figure>
			
			<figure class="span6" id="footer_right">

					<div >
							<ul id="latest_tweets">
							<?php include("connexion.php"); 
							$req='select * from visiteur where ip="'.$_SERVER['REMOTE_ADDR'].'"';
							mysql_query($req);
							$resultat = mysql_query($req);
							$nb =mysql_num_rows($resultat);
							if ($nb==0)
							{$dt = new DateTime();
							$req='insert into visiteur values("'.$_SERVER['REMOTE_ADDR'].'","'.$dt->format('Y-m-d H:i:s').'")';
							$resultat = mysql_query($req);}
							$req="select * from visiteur";
							$resultat = mysql_query($req);
							$nb =mysql_num_rows($resultat);
							;?>
							<li> Il y'a visiteurs <?php echo $nb?> en ligne  ! </li>
							</ul>
					</div>

			</figure>
			</section>
		</section>
	</section>
	</footer>
	
	
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