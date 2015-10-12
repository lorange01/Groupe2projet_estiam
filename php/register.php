<?php
    
    if (isset($_POST['submit'])) {
        $dbh = new PDO('mysql:host=group2.estiam.com;dbname=zeineb', 'zeineb', 'estiam');
        if (isset($_POST['nom'])) {
            $nom = filter_input(INPUT_POST, 'nom');
            $prenom = filter_input(INPUT_POST, 'prenom');
            $phone = filter_input(INPUT_POST, 'phone');
            $adresse = filter_input(INPUT_POST, 'adresse');
            $cp = filter_input(INPUT_POST, 'cp');
            $ville = filter_input(INPUT_POST, 'ville');
            $pays = filter_input(INPUT_POST, 'pays');
            $message = filter_input(INPUT_POST, 'message');
            
            
            $sql = $dbh->prepare("INSERT INTO `Client`(`nom`, `prenom`,`message`) VALUES (NULL,:nom,:prenom,:message);");
            ("INSERT INTO `Adress`(`adresse`,`Telephone`, `code_postal`,'ville','pays') VALUES (NULL,:Telephone,:cp,:ville,:pays,:message,null);");
            $sql->execute(array(
								":adresse" => $adresse,
                                ":nom" => $nom,
                                ":prenom" => $prenom,
                                ":Telephone" => $phone,                 
                                ":code_postal" => $cp,
                                ":ville" => $ville,
                                ":pays" => $pays,
                                ":message" => $message,     
                                ));
            echo "Enregistrement Reussi.";
        }
    }