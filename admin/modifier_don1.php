<!-- Realisé par ben brahim foued -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Model administration</title>

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
	 <nav id="nav">
				<section class="container-fluid container">
					<section class="row-fluid">
			  <div class="navbar navbar-inverse">
				<div class="navbar-inner">
				  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				  <div class="nav-collapse collapse">
					<ul class="nav">
	
					
 
   					<li class="dropdown"> <a class="dropdown-toggle" > Gestion des Administrateurs <b class="caret"></b> </a>
						<ul class="dropdown-menu">
						<li><a href="ajouteradmin.html">Ajouter un Administrateur</a></li>
						<li><a href="consulter.php">Gérer Les administrateurs</a></li>
					
 						</ul>
					  </li>
 
 
   					 <li class="dropdown"> <a class="dropdown-toggle"  > GESTION DES evenement <b class="caret"></b> </a>
						<ul class="dropdown-menu">
						<li><a href="ajouter_evenement.php">ajouter des evenement</a></li>
						<li><a href="liste_evenements.php">afficher la liste des evenement</a></li>
                        
 						</ul>
					  </li>
 
  <li class="dropdown Active"> <a class="dropdown-toggle" href="#.html" > GESTION DES DONS <b class="caret"></b> </a>
						<ul class="dropdown-menu">
												<li><a href="affiche_don1.php">afficher la liste des dons</a></li>
						<li><a href="modifier_don1.php">modifier la liste des dons</a></li>
                        <li><a href="supprimer_don1.php">supprimer du liste des dons</a></li>
					
 						</ul>
					  </li>
 
					<li class="dropdown"> <a class="dropdown-toggle" href="#.html" > GESTION DES INFORMATIONS <b class="caret"></b> </a> <ul class="dropdown-menu"> <li><a href="affiche_info.php">afficher les infos</a></li> <li><a href="index.html">ajouter des infos</a></li> </ul> </li>	
						
 
						

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
	 
	 </header>
<!-- End of Header -->

<!-- Title & BreadCrumbs -->
<section class="mtop" id="titre">
	<section class="container-fluid container">
		<section class="row-fluid">
			<section id="donation_box">
				<section class="container container-fluid">
					<section class="row-fluid">
					<div class="span8 first" > <h2>modifier la liste des dons  </h2> </div>
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
	
    <table width="100%" border="1">
  <tr>
    <td width="98%">
      <center>
        <p>modification</p>
        <table width="80%" border="1">
          <tr>
            
            <td> id_donateur</td>
            <td>civilite</td>
            <td>nom</td>
            <td>prenom</td>
            <td>email</td>
            
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
             <td>modifier</td>
            
            
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
            <td><a href="modifier_don1.php?id_donateur=<?php echo $ligne[0]?>&civilite=<?php echo $ligne[1]?>&nom=<?php echo $ligne[2] ?>&prenom=<?php echo $ligne[3] ?>&email=<?php echo $ligne[4] ?>&adresse=<?php echo $ligne[8] ?>&pays=<?php echo $ligne[9] ?>&deja_donateur=<?php echo $ligne[10] ?>&r_fiscale=<?php echo $ligne[11] ?>&montant_direct=<?php echo $ligne[12] ?>&mode_paiment_direct=<?php echo $ligne[13] ?>&montant_reg=<?php echo $ligne[14] ?>&jour_prelevement=<?php echo $ligne[15] ?>&periodicite=<?php echo $ligne[16] ?>">modifier</a></td>
            
        
			
          </tr>
          <?php
			}
			?>
        </table>
        <br>
        <center>
          champ a modifier
          </center>
        <form name="f" method="post" method="post" action="modif_don.php" >
        <table width="85%" border="1">
          <tr bgcolor="#d9eaf5">
            <td><fieldset >
              <p>Je fais un don maintenant 
                <input type="radio"  name="mont_d" value="50"     />
                50 dt<br />
                
                <input type="radio"  name="mont_d" value="100" />
                100 dt<br />
                <input type="radio"  name="mont_d" value="150"    />
                150 dt     <br />                             
                
                </p>
              <fieldset>
                <legend>Mode de paiement                                      </legend>
                <p>
                  <input type="radio"  name="payment_types" value="carte une seule fois"  />
                  par carte bancaire, en une seule fois
                  </label>
                  </p>
                <p>
                  <input type="radio" name="payment_types" value="carte 3 fois" />
                  par carte bancaire, en trois fois sur trois mois </p>
                <input type="radio" name="payment_types" value="cheque"  />
                par chèque
                </label>
                </fieldset>
              <center>
                <p>OU </p>
                <hr>
                </center>
              <p>Je donne régulièrement                 </p>
              <p>
                <input type="radio"  name="prelevement" value="8" />
                8 dt
                <input type="radio"  name="prelevement" value="10" />
                10dt
                <input type="radio"  name="prelevement" value="15" />
                15 dt </p>
              <fieldset>
                <legend>Mode de paiement</legend>
                <p>
                  <input type="radio"  name="payment_types2" value="carte"  />
    par carte bancaire (en ligne)
    </label>
  </p>
                <p>
                  <input type="radio"  name="payment_types2" value="prélèvement automatique"  />
                  par prélèvement automatique (par courrier)</p>
                </label>
                </fieldset>
              <fieldset>
                <legend>Jour de prelevement</legend>
                <p>
                  <input type="radio"  name="periodic" value="Le 05 du mois"  />
                  Le 05 du mois
                  <input type="radio"  name="periodic" value="Le 20 du mois"  />
                  Le 20 du mois</p>
                </fieldset>
              <fieldset>
                <legend>Périodicite </legend>
                <p>
                  <input type="radio"  name="Periodicite"  value="Mensuelle" />
                  Mensuelle
                  <input type="radio"  name="Periodicite" value="Trimestrielle" />
                  Trimestrielle</p>
                </label>
                </fieldset>
              </fieldset></td>
            </tr>
          <tr bgcolor="#CBB4CF">
            <td><fieldset >
              <legend>Mes informations personnelles</legend>
              <table width="60%" border="0">
                <tr>
                  <td>civilité :</td>
                  <td><select name="civlite" >
                    <option value="Madame">Madame</option>
                    <option value="Mademoiselle">Mademoiselle</option>
                    <option value="Monsieur">Monsieur</option>
                    </select></td>
                  </tr>
                <tr>
                  <td>Nom *</td>
                  <td><input type="text" maxlength="38" name="nom" value="<?php  echo $nom; ?>"  /></td>
                  </tr>
                <tr>
                  <td><label >prenom *</span></label></td>
                  <td><input type="text" maxlength="38" name="prenom"  value="<?php  echo $prenom; ?>" /></td>
                  </tr>
                <tr>
                  <td>Adresse e-mail</td>
                  <td><input type="text" maxlength="38" name="email"  value="<?php  echo $email; ?>" /></td>
                  </tr>
                <tr>
                  <td>Nature de l'adresse email</td>
                  <td><select name="nature_adr" >
                    <option value="Personnel" selected="selected">Personnel</option>
                    <option value="Professionnel">Professionnel</option>
                    </select></td>
                  </tr>
                <tr>
                  <td><label>Date de naissance </label></td>
                  <td><input type="text" maxlength="15" name="date_naiss" value="<?php  echo $date_naissance; ?>"/></td>
                  </tr>
                <tr>
                  <td>Pays <span class="form-required" title="Ce champ est obligatoire.">*</span>:</td>
                  <td><select name="pays" >
                    <option value="AFGHANISTAN">AFGHANISTAN</option>
                    <option value="AFRIQUE DU SUD">AFRIQUE DU SUD</option>
                    <option value="ALBANIE">ALBANIE</option>
                    <option value="ALGERIE">ALGERIE</option>
                    <option value="ALLEMAGNE">ALLEMAGNE</option>
                    <option value="ANDORRE">ANDORRE</option>
                    <option value="ANGOLA">ANGOLA</option>
                    <option value="ANTIGUA-ET-BARBUDA">ANTIGUA-ET-BARBUDA</option>
                    <option value="ARABIE SAOUDITE">ARABIE SAOUDITE</option>
                    <option value="ARGENTINE">ARGENTINE</option>
                    <option value="ARMENIE">ARMENIE</option>
                    <option value="AUSTRALIE">AUSTRALIE</option>
                    <option value="AUTRICHE">AUTRICHE</option>
                    <option value="AZERBAIDJAN">AZERBAIDJAN</option>
                    <option value="BAHAMAS">BAHAMAS</option>
                    <option value="BAHREIN">BAHREIN</option>
                    <option value="BANGLADESH">BANGLADESH</option>
                    <option value="BARBADE">BARBADE</option>
                    <option value="BELAU">BELAU</option>
                    <option value="BELGIQUE">BELGIQUE</option>
                    <option value="BELIZE">BELIZE</option>
                    <option value="BENIN">BENIN</option>
                    <option value="BHOUTAN">BHOUTAN</option>
                    <option value="BIELORUSSIE">BIELORUSSIE</option>
                    <option value="BIRMANIE">BIRMANIE</option>
                    <option value="BOLIVIE">BOLIVIE</option>
                    <option value="BOSNIE-HERZEGOVINE">BOSNIE-HERZEGOVINE</option>
                    <option value="BOTSWANA">BOTSWANA</option>
                    <option value="BRESIL">BRESIL</option>
                    <option value="BRUNEI">BRUNEI</option>
                    <option value="BULGARIE">BULGARIE</option>
                    <option value="BURKINA FASO">BURKINA FASO</option>
                    <option value="BURUNDI">BURUNDI</option>
                    <option value="CAMBODGE">CAMBODGE</option>
                    <option value="CAMEROUN">CAMEROUN</option>
                    <option value="CANADA">CANADA</option>
                    <option value="CAP-VERT">CAP-VERT</option>
                    <option value="CHILI">CHILI</option>
                    <option value="CHINE">CHINE</option>
                    <option value="CHYPRE">CHYPRE</option>
                    <option value="COLOMBIE">COLOMBIE</option>
                    <option value="COMORES">COMORES</option>
                    <option value="CONGO">CONGO</option>
                    <option value="CONGO REPUBLIQUE DEMOCRATIQUE">CONGO REPUBLIQUE DEMOCRATIQUE</option>
                    <option value="COOK (ILES)">COOK (ILES)</option>
                    <option value="COREE DU NORD">COREE DU NORD</option>
                    <option value="COREE DU SUD">COREE DU SUD</option>
                    <option value="COSTA RICA">COSTA RICA</option>
                    <option value="CROATIE">CROATIE</option>
                    <option value="CUBA">CUBA</option>
                    <option value="CÔTE D'IVOIRE">CÔTE D'IVOIRE</option>
                    <option value="DANEMARK">DANEMARK</option>
                    <option value="DJIBOUTI">DJIBOUTI</option>
                    <option value="DOMINIQUE">DOMINIQUE</option>
                    <option value="EGYPTE">EGYPTE</option>
                    <option value="EMIRATS ARABES UNIS">EMIRATS ARABES UNIS</option>
                    <option value="EQUATEUR">EQUATEUR</option>
                    <option value="ERYTHREE">ERYTHREE</option>
                    <option value="ESPAGNE">ESPAGNE</option>
                    <option value="ESTONIE">ESTONIE</option>
                    <option value="ETATS-UNIS">ETATS-UNIS</option>
                    <option value="ETHIOPIE">ETHIOPIE</option>
                    <option value="FIDJI">FIDJI</option>
                    <option value="FINLANDE">FINLANDE</option>
                    <option value="FRANCE" >FRANCE</option>
                    <option value="GABON">GABON</option>
                    <option value="GAMBIE">GAMBIE</option>
                    <option value="GEORGIE">GEORGIE</option>
                    <option value="GHANA">GHANA</option>
                    <option value="GRECE">GRECE</option>
                    <option value="GRENADE">GRENADE</option>
                    <option value="GUATEMALA">GUATEMALA</option>
                    <option value="GUINEE">GUINEE</option>
                    <option value="GUINEE EQUATORIALE">GUINEE EQUATORIALE</option>
                    <option value="GUINEE-BISSAO">GUINEE-BISSAO</option>
                    <option value="GUYANA">GUYANA</option>
                    <option value="HAITI">HAITI</option>
                    <option value="HONDURAS">HONDURAS</option>
                    <option value="HONGRIE">HONGRIE</option>
                    <option value="INDE">INDE</option>
                    <option value="INDONESIE">INDONESIE</option>
                    <option value="IRAN">IRAN</option>
                    <option value="IRAQ">IRAQ</option>
                    <option value="IRLANDE">IRLANDE</option>
                    <option value="ISLANDE">ISLANDE</option>
                    <option value="ISRAËL">ISRAËL</option>
                    <option value="ITALIE">ITALIE</option>
                    <option value="JAMAIQUE">JAMAIQUE</option>
                    <option value="JAPON">JAPON</option>
                    <option value="JORDANIE">JORDANIE</option>
                    <option value="KAZAKHSTAN">KAZAKHSTAN</option>
                    <option value="KENYA">KENYA</option>
                    <option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
                    <option value="KIRIBATI">KIRIBATI</option>
                    <option value="KOWEIT">KOWEIT</option>
                    <option value="LAOS">LAOS</option>
                    <option value="LESOTHO">LESOTHO</option>
                    <option value="LETTONIE">LETTONIE</option>
                    <option value="LIBAN">LIBAN</option>
                    <option value="LIBERIA">LIBERIA</option>
                    <option value="LIBYE">LIBYE</option>
                    <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                    <option value="LITUANIE">LITUANIE</option>
                    <option value="LUXEMBOURG">LUXEMBOURG</option>
                    <option value="MACEDOINE">MACEDOINE</option>
                    <option value="MADAGASCAR">MADAGASCAR</option>
                    <option value="MALAISIE">MALAISIE</option>
                    <option value="MALAWI">MALAWI</option>
                    <option value="MALDIVES">MALDIVES</option>
                    <option value="MALI">MALI</option>
                    <option value="MALTE">MALTE</option>
                    <option value="MAROC">MAROC</option>
                    <option value="MARSHALL (ILES)">MARSHALL (ILES)</option>
                    <option value="MAURICE">MAURICE</option>
                    <option value="MAURITANIE">MAURITANIE</option>
                    <option value="MEXIQUE">MEXIQUE</option>
                    <option value="MICRONESIE">MICRONESIE</option>
                    <option value="MOLDAVIE">MOLDAVIE</option>
                    <option value="MONACO">MONACO</option>
                    <option value="MONGOLIE">MONGOLIE</option>
                    <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                    <option value="NAMIBIE">NAMIBIE</option>
                    <option value="NAURU">NAURU</option>
                    <option value="NEPAL">NEPAL</option>
                    <option value="NICARAGUA">NICARAGUA</option>
                    <option value="NIGER">NIGER</option>
                    <option value="NIGERIA">NIGERIA</option>
                    <option value="NIUE">NIUE</option>
                    <option value="NORVEGE">NORVEGE</option>
                    <option value="NOUVELLE CALEDONIE">NOUVELLE CALEDONIE</option>
                    <option value="NOUVELLE-ZELANDE">NOUVELLE-ZELANDE</option>
                    <option value="OMAN">OMAN</option>
                    <option value="OUGANDA">OUGANDA</option>
                    <option value="OUZBEKISTAN">OUZBEKISTAN</option>
                    <option value="PAKISTAN">PAKISTAN</option>
                    <option value="PANAMA">PANAMA</option>
                    <option value="PAPOUASIE-NOUVELLE-GUINEE">PAPOUASIE-NOUVELLE-GUINEE</option>
                    <option value="PARAGUAY">PARAGUAY</option>
                    <option value="PAYS-BAS">PAYS-BAS</option>
                    <option value="PEROU">PEROU</option>
                    <option value="PHILIPPINES">PHILIPPINES</option>
                    <option value="POLOGNE">POLOGNE</option>
                    <option value="PORTUGAL">PORTUGAL</option>
                    <option value="QATAR">QATAR</option>
                    <option value="REPUBLIQUE CENTRAFRICAINE">REPUBLIQUE CENTRAFRICAINE</option>
                    <option value="REPUBLIQUE DOMINICAINE">REPUBLIQUE DOMINICAINE</option>
                    <option value="REPUBLIQUE TCHEQUE">REPUBLIQUE TCHEQUE</option>
                    <option value="ROUMANIE">ROUMANIE</option>
                    <option value="ROYAUME-UNI">ROYAUME-UNI</option>
                    <option value="RUSSIE">RUSSIE</option>
                    <option value="RWANDA">RWANDA</option>
                    <option value="SAINT-CHRISTOPHE-ET-NIEVES">SAINT-CHRISTOPHE-ET-NIEVES</option>
                    <option value="SAINT-MARIN">SAINT-MARIN</option>
                    <option value="SAINT-PIERRE-ET-MIQUELON">SAINT-PIERRE-ET-MIQUELON</option>
                    <option value="SAINT-SIEGE (VATICAN)">SAINT-SIEGE (VATICAN)</option>
                    <option value="SAINT-VINCENT-ET-GRENADINES">SAINT-VINCENT-ET-GRENADINES</option>
                    <option value="SAINTE-LUCIE">SAINTE-LUCIE</option>
                    <option value="SALOMON (ILES)">SALOMON (ILES)</option>
                    <option value="SALVADOR">SALVADOR</option>
                    <option value="SAMOA OCCIDENTALES">SAMOA OCCIDENTALES</option>
                    <option value="SAO TOME-ET-PRINCIPE">SAO TOME-ET-PRINCIPE</option>
                    <option value="SENEGAL">SENEGAL</option>
                    <option value="SEYCHELLES">SEYCHELLES</option>
                    <option value="SIERRA LEONE">SIERRA LEONE</option>
                    <option value="SINGAPOUR">SINGAPOUR</option>
                    <option value="SLOVAQUIE">SLOVAQUIE</option>
                    <option value="SLOVENIE">SLOVENIE</option>
                    <option value="SOMALIE">SOMALIE</option>
                    <option value="SOUDAN">SOUDAN</option>
                    <option value="SRI LANKA">SRI LANKA</option>
                    <option value="SUEDE">SUEDE</option>
                    <option value="SUISSE">SUISSE</option>
                    <option value="SURINAME">SURINAME</option>
                    <option value="SWAZILAND">SWAZILAND</option>
                    <option value="SYRIE">SYRIE</option>
                    <option value="TADJIKISTAN">TADJIKISTAN</option>
                    <option value="TAIWAN">TAIWAN</option>
                    <option value="TANZANIE">TANZANIE</option>
                    <option value="TCHAD">TCHAD</option>
                    <option value="THAILANDE">THAILANDE</option>
                    <option value="TIMOR ORIENTAL">TIMOR ORIENTAL</option>
                    <option value="TOGO">TOGO</option>
                    <option value="TONGA">TONGA</option>
                    <option value="TRINITE-ET-TOBAGO">TRINITE-ET-TOBAGO</option>
                    <option value="TUNISIE" selected="selected">TUNISIE</option>
                    <option value="TURKMENISTAN">TURKMENISTAN</option>
                    <option value="TURQUIE">TURQUIE</option>
                    <option value="TUVALU">TUVALU</option>
                    <option value="UKRAINE">UKRAINE</option>
                    <option value="URUGUAY">URUGUAY</option>
                    <option value="VANUATU">VANUATU</option>
                    <option value="VENEZUELA">VENEZUELA</option>
                    <option value="VIET NAM">VIET NAM</option>
                    <option value="YEMEN">YEMEN</option>
                    <option value="YOUGOSLAVIE">YOUGOSLAVIE</option>
                    <option value="ZAMBIE">ZAMBIE</option>
                    <option value="ZIMBABWE">ZIMBABWE</option>
                    </select></td>
                  </tr>
                <tr>
                  <td><label for="tel">Tel:</label></td>
                  <td><input type="tel" name="tel" id="tel" value="<?php  echo $num_tel; ?>"/></td>
                  </tr>
                <tr>
                  <td><p>
                    <label for="textfield">adresse:</label>
                    </p>
                    <p>&nbsp;</p></td>
                  <td><input type="text" name="adresse" value="<?php  echo $adresse; ?>"/></td>
                  </tr>
                <tr>
                  <td><label>Etes-vous déjà donateur ?</label></td>
                  <td><input type="radio"  name="donn" value="non" />
                    Non
                    </label>
                    <input type="radio"  name="donn" value="oui"  />
                    Oui
  </label></td>
                  </tr>
                </table>
              </fieldset></td>
            </tr>
          <tr bgcolor="#CBB4CF">
            <td><p>&nbsp;</p>
              <fieldset >
                <legend>Mes Préférences</legend>
                <label>Je souhaite recevoir mon reçu fiscal </label>
                <select name="fisc">
                  <option value="email">Oui, par email</option>
                  <option value="courrier">Oui, par courrier</option>
                  <option value="non">Non</option>
                  </select>
                </fieldset>
              <input type="submit" />                                  </p></td>
            </tr>
          </table>
        <br>
        <p>&nbsp;</p>
        </center>
      <br></td>
  </tr></table>

	
	
	 
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