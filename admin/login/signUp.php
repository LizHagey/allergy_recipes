<?php include '../../modules/header.php'; ?>
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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>

<body>
    <div class="sidePageMainSection">

<h1>Sign up for new account</h1>

<form id="mainForm" action="createAccount.php" method="POST">

	<input type="text" id="txtUser" name="txtUser"></input>
	<label for="txtUser">Username</label>
	<br /><br />

	<input type="password" id="txtPassword" name="txtPassword"></input>
	<label for="txtPassword">Password</label>
	<br /><br />

	<input type="submit" value="Create Account" />

</form>
<br><br><br>

</div>

</body>

</html>