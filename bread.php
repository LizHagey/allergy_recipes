<!DOCTYPE html>
<!--
Bread main page
-->
<html lang="en-us">
    <head>
        <title>Gluten free Breads</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
    </head>
    <body id="home">
        <?php include_once("analyticstracking.php") ?>
        <div>
            <header id="pageHeader">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/header.php'; ?>
            </header>
            <nav role="navigation">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/navigation.php'; ?>           
            </nav>
               <aside>
                <ul>
                    <li><a href='pepperSteak.php'>Main Dish</a></li>
                    <li><a href='proteinBalls.php'>Snacks</a></li>
                    <li><a href="bread.php">Bread</a></li>
                    <li><a href="noBakeCookies.php">Dessert</a></li>
                    <li><a href="easyMeals.php">Easy</a></li>
                </ul>
            </aside>
            <main>
                <h1>It is hard to find good gluten free recipes, especially for bread products, but these are awesome!</h1>
 
                <figure>
                    <h3>Gluten Free Bread</h3>
                    <a href="glutenFreeBread.php"><img src="/media/BreadSlice.jpg" alt="Gluten Free Bread"></a><figcaption>Who knew you could have delicious bread that is gluten free.  Try this amazing recipe!
                    </figcaption>
                </figure>    
                <figure>
                    <h3>Waffles</h3>
                    <a href="glutenFreeWaffles.php"><img src="/media/waffles.jpg" alt="Waffles"></a>
                    <figcaption>Gluten free waffles</figcaption> 
                </figure>
                
 
            </main>
         
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
