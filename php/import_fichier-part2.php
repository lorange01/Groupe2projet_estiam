<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<title>Photo-Expresso</title>
		<meta name="author" content=" AUTHOR'S NAME HERE ">
		<meta http-equiv="reply-to" content=" EMAIL ADDRESS HERE ">
		<meta name="keywords" content=" LIST OF KEYWORDS - KEEP TO UNDER 50 ">
		<meta name="description" content=" FULL WEBSITE DESCRIPTION HERE ">
		<script type="text/javascript">
		<!--
		  var _siteRoot='index.html',_root='index.html';
		//-->
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="../includes/js/bootstrap.min.js"></script>
		<script src="../includes/js/bootstrap-select.min.js"></script>
		<script src="../includes/js/pop-up.js"></script>
		<link href="../includes/css/pop-up.css" rel="stylesheet"  type="text/css">
		<link href="../includes/css/bootstrap.min.css" rel="stylesheet"  type="text/css">
		<link href="../includes/css/bootstrap-select.min.css" rel="stylesheet"  type="text/css">
		<style type="text/css" media="all">
		 @import url("../includes/css/main.css");
		 .toff-thumbails{
			width: 80px; 
			height: 70px;
		}
		</style>
	</head>
	<body>
	<!-- DEBUT HEADER -->
		<div class="container">
		  <div class="center">
			<a href="../index.html"><span>Photo-Expresso</span></a>
			<ul id="main_nav">
				  <li><a href="../index.html" class="active">Acceuil</a></li>
				  <li><a href="../about.html">Concept</a></li>
				  <li id ="importation"><a href="../up/import_fichiers.php">Importez Vos photos</a></li>
				  <li><a href="../contact.html">Contactez nous</a></li>
				  <li><a href="../connexion.html">Connexion</a></li>
			</ul>
		  </div>
		</div>
		<!-- FIN HEADER -->
		<!-- DEBUT MAIN -->
		<div class="container noise">
		  <div class="center content_section">
			  <div class="row" id="manip-1">
				<div class="col-xs-4" id="col-manip1" >
				  <div id="titre-prod">
					  <span  class="titre-prod-text">Photo </span><br>
					  <img class="toff-thumbails" src ="../images/FB_20140901_17.jpg"/>
				  </div>		  
				</div>
				<div class="col-xs-2" id="col-manip1" >
				  <div id="titre-prod">
					  <span  class="titre-prod-text">Format </span><br>
						<select class="selectpicker" multiple>
						  <option>Format 9 x 13</option>
						  <option>Format 10 x 13</option>
						  <option>Format 10 x 21</option>
						  <option>Format 15 x 21</option> 
						</select>
				  </div>		  
				</div>					
				<div class="col-xs-2 col-xs-offset-2" id="col-manip1" >
				<span  class="titre-prod-text">Contact </span><br>
				  <div id="titre-prod">	
					  <ul class="nav navbar-nav">
							<li class="newsl"><a class="view-b">Ajouter un contact<span class="sr-only">(current)</span></a></li>
					  </ul>							 
				  </div>	
				<div class="pop">	
				<span>✖</span>	
				
					<p>Envoyez  et personnalisez votre commande pour une connaissance </p><hr class="liner-pop"/><br/>				
					<form id="myform" autocomplete="off" method="post" action="inscription-client.php">						
						<li class="list-form">
							<label class="formlabel"  >Nom :</label>
							<input class="form-lower-name"  name="nom" type="text" required/>
						</li><br/>	
						<li class="list-form">
							<label class="formlabel"  >Prénom :</label>
							<input class="form-lower-name"  name="prenom" type="text" required/>
						</li><br/>						
						<li class="list-form">
							<label class="formlabel"  >Téléphone :</label>
							<input class="form-lower-name"  name="phone" type="num" required/>
						</li><br/>						
						<li class="list-form">
							<label class="formlabel"  >Adresse :</label>
							<input class="form-lower-name"  name="adresse" type="text" required/>
						</li><br/>
						<li class="list-form">
							<label class="formlabel"  >Code postal :</label>
							<input class="form-lower-name"  name="cp" type="text" required/>
						</li><br/>							
						<li class="list-form">
							<label class="formlabel"  >Ville :</label>
							<input class="form-lower-name"  name="ville" type="text" required/>
						</li><br/>						
						<li class="list-form">
							<label class="formlabel"  >Pays :</label>
							<input class="form-lower"  name="pays" type="text"required/>
						</li><br/>	
						<li class="list-form-mess">
							<label class="formlabel-mess">Message</label><br>
							<textarea id="form-message" name="message"  cols="40" rows="10"></textarea>
						</li><br/>								
						<button type="submit" class="btn btn-success on buttsend">Validez</button><br/>		
					</form><br/>						
				</div>				  
				</div>				
				  
			  </div>					  
		  </div>
		</div>
		<!-- DIV CENTRER DES INFOS SUR LES APPLIS MOBILES -->
		<div class="container noise" >
			  <div  class="center content_section">
				<h2>Retrouvez l' application mobile Android et IOS  sur leur store respectif</h2>				
				<ul class="thumbnails">
					  <li><a href="##" title="IOS" class="thickbox" rel="gallery-silver"><img class="img_border" src="../images/thickbox_test/ios.jpg" width="200" height="200" alt="Plant 1" ></a></li>
					  <li><a href="##" title="Android" class="thickbox" rel="gallery-silver"><img class="img_border" src="../images/thickbox_test/android.png" width="200" height="200" alt="Plant 2" ></a></li>		 
				</ul>
				</div>   
		</div>
		<!--  FIN DIV CENTRER DES INFOS SUR LES APPLIS MOBILES -->
		<div class="container noise"> 
		<!-- FIN MAIN -->
		<!-- DEBUT FOOTER -->
		  <div class="center content_section">
			<ul class="block_list">
			  <li>
				<h2>Qui Sommes nous ?</h2>
				<p>Phasellus neque magna, posuere sed cursus a,
				 mattis eget lectus. Donec quam libero, tempus
				 sit amet sodales nec, dignissim in metus. Nam
				 dapibus turpis elit. <a href="#">Viviamus sollicitudin</a>
				 consequat quam et venenatis. Mauris et pretium
				 orci. Aenean tempor sodales augue, ut
				 elementum nisl iaculis et. Pellentesque sed felis
				 mauris, eget gravida risus.</p>

				<p><a href="##" class="button">En savoir plus</a></p>
			  </li>

			  <li>
				<h2>CGU - CGV</h2>
				<p>Phasellus neque magna, posuere sed cursus a,
				 mattis eget lectus. Donec quam libero, tempus
				 sit amet sodales nec, dignissim in metus. Nam
				 dapibus turpis elit. Viviamus sollicitudin
				 consequat quam et venenatis. <a href="#">Mauris et pretium</a>
				 orci. Aenean tempor sodales augue, ut
				 elementum nisl iaculis et. Pellentesque sed felis
				 mauris, eget gravida risus.</p>

				<p><a href="##" class="button">En savoir plus</a></p>
			  </li>

			  <li>
				<h2>Mentions Légales</h2>
				<p>Phasellus neque magna, posuere sed cursus a,
				 mattis eget lectus. <a href="#">Donec quam libero</a>, tempus
				 sit amet sodales nec, dignissim in metus. Nam
				 dapibus turpis elit. Viviamus sollicitudin
				 consequat quam et venenatis. Mauris et pretium
				 orci. Aenean tempor sodales augue, ut
				 elementum nisl iaculis et. Pellentesque sed felis
				 mauris, eget gravida risus.</p>

				<p><a href="##" class="button">En savoir plus</a></p>
			  </li>
			</ul>
		  </div>
		</div>
		<div class="container noise" id="footer">
		  <div class="center">
			<p>&copy; Estiam 2015 - 2016 &#124; <a href="##">www.photo-expresso.fr</a></p>
		  </div>
		</div>
		<!-- FIN FOOTER -->
	</body>

</html>
