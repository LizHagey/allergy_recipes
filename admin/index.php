<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: /admin/login/signIn.php");
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
    <header><img src="/admin/images/logoLight.png" alt="Logo"></header>

<main>
    <h1>Menu</h1>
    <ul>
        
        <li>
            <a href="recipe_manager/">Recipe Manager</a>
        </li>
        <li>
            <a href="recipe_book/">Recipe Book</a>
        </li>
        
        
    </ul>
    <br><br><br><br>
    
    <a href="/admin/login/signOut.php">Sign Out</a>
    
    <br><br><br><br>
    
</main>
<?php include 'view/footer.php'; ?>