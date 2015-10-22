<?php
include 'core/init.php';
/**
 * 
 * @author Pavithra
 */
// Conditions defined to say all fields are mandatory
if(empty($_POST) === false){
		$required_fields = array('username','unom','uprenom','uemail','upassword','uadresse','ucode_postal','uville','upays');
		foreach($_POST as $key=>$value){
			if(empty($value) && in_array($key, $required_fields) === true){
				$errors[]= '*Fields are mandatory';
					break 1;
			}
		}
//Condition to check if user already exists
	if(empty($errors)=== true){
		if(user_exists($_POST['username']) === true){
			$errors[]='Sorry, the user \''. $_POST['username']. '\' already exists';
		}
		if(preg_match("/\\s/", $_POST['username'])== true){
			$errors[]= 'Your username must not contain any spaces';
		}
		if(strlen($_POST['upassword']) <= 8){
			$errors[]='Your password must be atleast 8 characters';
		}
		if(filter_var($_POST['uemail'], FILTER_VALIDATE_EMAIL)=== false){
			$errors[]='Enter a valid email adresse';
		}
		if(email_exists($_POST['uemail']) === true){
			$errors[] = 'Sorry, the email \'' .$_POST['uemail']. '\' is already taken';
		}
	}
}
//print_r($errors);	
?>
<?php
if(isset($_GET['success']) && empty($_GET['success'])){
	echo 'You\'ve been registered successfully';
}else{
	if (empty($_POST) === false && empty($errors) === true){
		$register_data=array(
			'username'     => $_POST['username'],
			'upassword'    => $_POST['upassword'],
			'unom'         => $_POST['unom'],
			'uprenom'      => $_POST['uprenom'],
			'uemail'       => $_POST['uemail'],
			'uadresse'     => $_POST['uadresse'],
			'ucode_postal' => $_POST['ucode_postal'],
			'uville'       => $_POST['uville'],
			'upays'        => $_POST['upays']
		);
	register_user($register_data);
	header('Location: register.php?success');
	exit();
		
	}else if(empty($errors) === false){
	echo output_errors($errors);
	}
}

?>