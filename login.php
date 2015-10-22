<?php
/**
 * 
 * @author Pavithra
 */
include '/core/init.php';
 
//checks all the exceptions of login

if(empty($_POST)=== false){
	$username=$_POST['username'];
	$password=$_POST['upassword'];
	
	if(empty($username)=== true || empty($password)===true){
		$errors[]='Enter username and password';
	}else if (user_exists($username)=== false){
		$errors[]='User doesnt exists. Have you registered';
	}else if(user_active($username)=== false){
		$errors[]='You haven\'t activated your account';
	}else{
		if(strlen($password)>32){
			$errors[]='Password too long';
		}
		
		
		$login= login($username,$password);
		if($login === false){
			$errors[]='Username/password is incorrect';
		}else{
			$_SESSION['user_id'] = $login;
			header('Location: login.php');
			exit();
		}
	}
}
if(empty($errors)==false){
?>
<h2>We tried to log you in,but...</h2>
<?php	
echo output_errors($errors);
}
?>
