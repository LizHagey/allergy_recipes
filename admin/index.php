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

<!-- the head section -->
<?php include '../modules/header.php'; ?>
<!-- the body section -->

<main>
    <h1 class="recipeHead">Menu</h1>
    <div class="menuPageBody">
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
    </div>
</main>
<?php include '/modules/footer.php'; ?>