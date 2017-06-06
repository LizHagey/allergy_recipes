<?php
/**********************************************************
* File: signOut.php
* Author: Br. Burton
* 
* Description: Clears the username from the session if there.
*
***********************************************************/

require("../login/password.php"); // used for password hashing.
session_start();
unset($_SESSION['username']);

header("Location: ../login/signIn.php");
die(); // we always include a die after redirects.
