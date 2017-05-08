<?php
/**********************************************************
* File: singup.php
* Author: Br. Burton
* 
* Description: Allows a user to enter a new username
*   and password to add to the DB.
*
* It actually posts to a file called "createAccount.php"
*   which does the actual creation.
*
***********************************************************/

// used for password hashing. 
require("../login/password.php");
require("../model/database.php");

// get the data from the POST
$username = $_POST['txtUser'];
$password = $_POST['txtPassword'];

if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: ../login/signUp.php");
	die(); // we always include a die after redirects.
}

// Prevent HTML before submission
$username = htmlspecialchars($username);

// Get the hashed password.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


// It would be better to store these in a different file
//$dbUser = 'topaller';
//$dbPass = '';
//$dbName = 'RecipeLogin';
//$dbHost = '127.0.0.1'; // for my configuration, I need this rather than 'localhost'
//
try
{
//	// Create the PDO connection
//	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
//
//	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
//	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$query = 'INSERT INTO login(username, password) VALUES(:username, :password)';

	$statement = $db->prepare($query);

	$statement->bindParam(':username', $username);

	// **********************************************
	// NOTICE: We are submitting the hashed password!
	// **********************************************
	$statement->bindParam(':password', $hashedPassword);

	$statement->execute();
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}


// finally, redirect them to the sign in page
header("Location: ../login/signIn.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>