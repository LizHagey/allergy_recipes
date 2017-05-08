<!DOCTYPE html>
<!--
Tips on living gluten free
-->
<html lang="en-us">
    <head>
        <title>Tips on living gluten free</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Tips on living gluten free">
        <meta name="description" content="Gluten free flour tips">
    </head>
    <body>
        <?php include_once("analyticstracking.php") ?>
        <div>
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/header.php'; ?>
            </header>
            <nav>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/navigation.php'; ?>           
            </nav>
            <main>
                <h2>Listen to this great audio clip about the use of flour when eating gluten free:</h2>
                
                    <audio controls preload="none">
                        <source src="/media/GlutenFlour.mp3">
                        <source src="/media/GlutenFlour.ogg">
                        <p>Flour tips</p>
                    </audio>
                
                 <br><br><br>
                    <div class="bottomSuggesedRecipes">   
                     <h3>Try these fabulous gluten free breads</h3>
  
                <figure>
                    <h4>Gluten Free Bread</h4>
                    <a href="glutenFreeBread.php"><img src="/media/BreadSlice.jpg" alt="Gluten Free Bread"></a><figcaption>Who knew you could have delicious bread that is gluten free.  Try this amazing recipe!
                    </figcaption>
                </figure>    
                <figure>
                    <h4>Gluten Free Waffles</h4>
                    <a href="glutenFreeWaffles.php"><img src="/media/waffles.jpg" alt="Waffles"></a>
                    <figcaption>So delicious you would not know they didnt' have gluten in them.</figcaption> 
                </figure>
                    </div>
 
            </main>
            <!--<aside>
                <ul>
                    <li><a href='pepperSteak.php'>Main Dish</a></li>
                    <li><a href='proteinBalls.php'>Snacks</a></li>
                    <li><a href="bread.php">Bread</a></li>
                    <li><a href="noBakeCookies.php">Dessert</a></li>
                    <li><a href="easyMeals.php">Easy</a></li>
                </ul>
            </aside>-->
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
