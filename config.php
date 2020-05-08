<?php

session_start();
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";


$db = mysqli_connect('localhost', 'root', '', 'db_covid19_out');
//Register User
mysqli_set_charset($db, "utf8");

if (isset($_POST['reg_user'])){

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password1 = $_POST['password'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];

	if($password1 != $password2){
		array_push($errors,"Mot de passes non identiques");
	}

	if(count($errors) == 0){
		$password = md5($password1);

		$insert_user_query = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";
		$user_account_reg = mysqli_query($db,$insert_user_query);

		$insert_member_query = "INSERT INTO members (first_name, last_name, username, password, email) VALUES('$first_name', '$last_name', '$username', '$password', '$email')";
		$member_account_reg = mysqli_query($db,$insert_member_query);

		if($user_account_reg && $member_account_reg){

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Enregistement avec Success";
			header("location: diagnostic.php");
		}
		else{
			array_push($errors, "Une erreur est survenue ! ");
		}
	}
	
}

if(isset($_POST['login_user'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username)){
		array_push($errors,"Nom d'utilisateur requis !");
	}

	if(empty($password)){
		array_push($errors, "Mot de passe requis !");
	}

	if(count($errors) == 0){
		$password = md5($password);
		$verify_user_query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

		$results = mysqli_query($db, $verify_user_query);

		if(mysqli_num_rows($results) == 1){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Vous êtes connecté !";
			header("location: diagnostic.php");
			
		}
		else{
			array_push($errors, "Mauvais Mot de passe/Nom d'utilisateur");
		}
	}
}

  

?>