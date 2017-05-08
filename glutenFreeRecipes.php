<!DOCTYPE html>
<!--
Gluten Free Recipes main page
-->
<html lang="en-us">
    <head>
        <title>Gluten Free Recipes</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
         <meta name="description" content="Gluten free recipes">
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
            
            <!--<aside>
                <ul>
                    <li><a href='pepperSteak.php'>Main Dish</a></li>
                    <li><a href='proteinBalls.php'>Snacks</a></li>
                    <li><a href="bread.php">Bread</a></li>
                    <li><a href="noBakeCookies.php">Dessert</a></li>
                    <li><a href="easyMeals.php">Easy</a></li>
                </ul>
            </aside>-->
            <main>      
                <h1>Categories for Gluten Free Recipes</h1>
                <figure>
                    <h2><a href="proteinBalls.php">Snacks</a></h2>
                    <a href="proteinBalls.php"><img src="/media/ProteinBall.jpg" alt="Protein Balls"></a>
                    <figcaption>Gluten free snack.  These are high in protein and very nutritious.</figcaption>
                </figure>    
                <figure>
                    <h2> <a href='bread.php'>Bread</a></h2>
                    <a href="glutenFreeBread.php"><img src="/media/BreadSlice.jpg" alt="Gluten Free Bread"></a><figcaption>Who knew you could have delicious bread that is gluten free.  Try this amazing recipe!
                    </figcaption>
                </figure>    
                
                <figure>
                    <h2><a href="pepperSteak.php">Main dish</a></h2>
                    <a href="pepperSteak.php"><img src="/media/pepperSteak.jpg" alt="Pepper Steak Supreme"></a>
                    <figcaption>Gluten free main dish.  Best when served over rice.</figcaption> 
                </figure>
                      
                <figure>
                    <h2><a href='easyMeals.php'>Easy Meals</a></h2>
                    <a href="easyEnchiladas.php"><img src="/media/easyEnchiladas.jpg" alt="Easy Enchiladas"></a>
                    <figcaption>Fast and easy gluten free enchiladas that everyone will love.</figcaption> 
                </figure>
                <figure>
                    <h2><a href="noBakeCookies.php">Dessert</a></h2>
                    <a href="noBakeCookies.php"><img src="/media/noBakeCookies.jpg" alt="No Bake Cookies"></a>
                    <figcaption>Yummy and easy to make gluten free dessert  </figcaption> 
                </figure><br>
            </main>
  
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
