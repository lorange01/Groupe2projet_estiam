<?php
/**
 * session of logged in User
 *
 * @author Pavithra
 */
session_start();
error_reporting(0);

require'database/connect.php';
require'functions/general.php';
require'functions/user.php';

if(logged_in() === true){
	$session_user_id=$_SESSION['user_id'];
	$user_data=user_data($session_user_id,'user_id','username', 'unom', 'uprenom', 'uemail','password','uadresse','ucode_postal','uville','upays');
	
	}


$errors=array(); 

?>