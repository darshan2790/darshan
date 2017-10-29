<?php
session_start();

// variable declaration
$artname = "";
$cost = "";
$category = "";
$image = "";
$errors = array(); 
$_SESSION['success'] = "";
$tanmay = 'tanmay sankhe';

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'artdatabase');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$artname = mysqli_real_escape_string($db, $_POST['artname']);
	$cost = mysqli_real_escape_string($db, $_POST['cost']);
	$category = mysqli_real_escape_string($db, $_POST['category']);
	$image = mysqli_real_escape_string($db, $_POST['image']); 

	// form validation: ensure that the form is correctly filled
	if (empty($artname)) { array_push($errors, "artname is required"); }
	if (empty($cost)) { array_push($errors, "cost is required"); }
	if (empty($category)) { array_push($errors, "category is required"); }
	if (empty($image)) { array_push($errors, "image is required"); }
		

	// register user if there are no errors in the form
	if (count($errors) == 0) {
	
		$query = "INSERT INTO user(artname,cost,category,image) 
				  VALUES('$artname','$cost','$category','$image')";
		mysqli_query($db, $query);

		$_SESSION['artname'] = $artname;
		$_SESSION['success'] = "You are now logged in";
		header('location: painting50.php');
		echo "upload success";
		}

}

if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = $password;
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index100.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

?>