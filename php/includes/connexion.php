<?php
try
{
	$bdd = new PDO('mysql:host=sql.group2.estiam.com; dbname=zeineb; charset=utf8', 'zeineb', 'estiam');
	
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>