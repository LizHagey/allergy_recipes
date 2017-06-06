<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: login/signIn.php");
	die(); // we always include a die after redirects.
}

?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Top Allergy Free Recipes</title>
    <link rel="stylesheet" type="text/css" href="main.css" media="screen"/>
    
</head>

<!-- the body section -->
<body>
    <header><img src="/images/logoLight.png" alt="Logo"></header>
    
<main>
    <h1>Menu</h1>
    <ul>
        
        <li>
            <a href="/admin/recipe_manager/">Recipe Manager</a>
        </li>
        <li>
            <a href="/index.php">Website Homepage</a>
        </li>
        
        
    </ul>
    <br><br><br><br>
    
    <a href="login/signOut.php">Sign Out</a>
    
    <br><br><br><br>
    
</main>
<?php include '/modules/footer.php'; ?>