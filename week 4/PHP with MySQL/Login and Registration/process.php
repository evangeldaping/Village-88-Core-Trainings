<?php
session_start();
require('new_connection.php');

if (isset($_POST['action']) && $_POST['action'] == 'register') {
    register_user($_POST); //use the ACTUAL POST!
}

else if (isset($_POST['action']) && $_POST['action'] == 'login') {
    login_user($_POST);
}
else { //malicious navigation to process.php OR someone is trying to log off!
	session_destroy();
	header('location: index.php');
	die();
}

function register_user($post)  //just a parameter called post
{
	$db = mysqli_connect('localhost', 'root', '', 'login_registration');
	$email = $_POST['email'];
	$sql = "SELECT * FROM users WHERE email='$email'";
	$results = mysqli_query($db, $sql);
	if (mysqli_num_rows($results) > 0) {
		$_SESSION['errors'][] = "Email is already taken.";
		header('location: index.php');
		die();			
	}
	$_SESSION['errors'] = array();
	if (empty($post['first_name'])) {
	$_SESSION['errors'][] = "First name can't be blank!";
	}
	if (empty($post['last_name'])) {
		$_SESSION['errors'][] = "Last name can't be blank!";
	}
	if (empty($post['password'])) {
		$_SESSION['errors'][] = "Password can't be blank!";
	}
	if ($post['password'] != $post['confirm_password']) {
		$_SESSION['errors'][] = "Password and Confirm Password must match!";
	}
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$_SESSION['errors'][] = "Please use a valid email address!";
	}
	
	$salt ='my_string';
	$hash = md5($salt . $post['password']);

	if (count($_SESSION['errors']) > 0 ) 
	{
		header('location: index.php');
		die();
	}else {
		$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at)
					VALUES ('{$post['first_name']}','{$post['last_name']}','$hash','{$post['email']}',
					NOW(), NOW())";			
		run_mysql_query($query);
		$_SESSION['success_message'] = 'User successfully created!';
		header('location: success.php');
		die();
	}
}

function login_user($post)  //just a parameter called post
{	
	$salt ='my_string';
	$email = $_POST['email'];
	$pass = md5($salt . $post['password']);
	$query = "SELECT * FROM users WHERE users.password = '$pass'
				AND users.email = '$email'";
	$user = fetch($query); //go and attempt to grab user with above credentials!
	// echo $query;
	// die();
	if (empty($post['password']) && empty($post['email'])) {
        $_SESSION['errors'][] = "Email and Password can not be blank!";
		header('location: index.php');
		die();
    }
	if (empty($post['email'])) {
        $_SESSION['errors'][] = "Email can not be blank!";
		header('location: index.php');
		die();
    }
	if (empty($post['password'])) {
        $_SESSION['errors'][] = "Password can not be blank!";
		header('location: index.php');
		die();
    }
	if (count($user)> 0 ) 
	{
		$_SESSION['user_id'] = $user[0]['id'];
		$_SESSION['first_name'] = $user[0]['first_name'];
		$_SESSION['logged_in'] = TRUE;
		header('location: home.php');
	}
	else {
		$_SESSION['errors'][] = "Can not find user with those credentials";
		header('location: index.php');
		die();
	}	
}
