<?php 
		/* join.php */
 
		//include db configuration file
		include_once("includes/connexion.php");
  
				if($_POST)
				{
				/* VALUES */
				
				$prenom=$_POST['prenom'];
				$message=$_POST['message'];
				$nom=$_POST['nom'];
				$adresse=$_POST['adresse'];
				$cp=$_POST['cp'];
				$ville=$_POST['ville'];
				$pays=$_POST['pays'];
				$tel=$_POST['phone'];

				
			
				 $nom = htmlspecialchars($nom);
				 $prenom = htmlspecialchars($prenom);
				 $message = htmlspecialchars($message);
				/* BDD messagerie*/				
				$sql=" INSERT INTO Client ( nom, prenom, message )
				VALUES ( ' ".utf8_decode($nom)." ',' ".utf8_decode($prenom)." ',' ".utf8_decode($message)." ')";
				
				$sql=" INSERT INTO Adress ( Telephone, adresse, code_postal, ville, pays )
				VALUES ( ' ".utf8_decode($tel)." ',' ".utf8_decode($adresse)." ',' ".utf8_decode($cp)." ',' ".utf8_decode($ville)." ',' ".utf8_decode($pays)." ')";
 				$bdd -> exec($sql);
 				echo ( include("confirm_bdd.php") );
				} else { 
 
						header(' Erreur  MSQL survenue insertion échouée! ');
						exit();
				}
								
?>