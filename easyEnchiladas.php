<!DOCTYPE html>
<!--
Easy meal: enchiladas
-->
<html lang="en-us">
    <head>
        <title>Easy Enchiladas</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
       <meta name="description" content="Chicken Enchiladas">
        <meta name="description" content="Easy to make 100% gluten free chicken enchiladas">
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
                 
                    <h1>Easy Enchiladas</h1>
                    <img class ="mainPict" src="/media/easyEnchiladas.jpg" alt="Easy Enchiladas">
                    <p>Fast and easy gluten free enchiladas that everyone will love. </p>
                    <h4>Ingredients</h4>
                    <ul>
                        <li>2 cups cooked chicken chopped into 1/2 inch pieces</li>
                        <li>Gluten Free enchilada sauce</li>
                        <li>Cheese</li>
                        <li>Olives (optional</li>
                        <li>Onions (optional)</li>
                        <li>Corn Tortilla's</li>
                    </ul>
                    <h4>Directions</h4> 
                    <ul> 
                        <li>Mix some of the enchilada sauce with the chicken</li>
                        <li>Coat tortilla's in the enchilada sauce</li>
                        <li>Place in the pan and put the chicken mixture in the shell</li>
                        <li>Wrap chicken with the tortilla and rotate so that the fold is on the bottom</li> 
                        <li>Continue process until chicken mixture is gone</li>
                        <li>Pour the rest of the enchilada sauce over the enchiladas</li>
                        <li>Sprinkle grated cheese on top</li>
                        <li>Bake at 350 for 8 - 12 minutes</li>
                        <li>Sprinkle olives and onions on and serve.</li>
                    </ul>
                     <br><br><br>
                    <div class="bottomSuggesedRecipes">   
                    <h3>More Easy Gluten Free Dinners:</h3>
                <figure>
                    <h4>Grilled Pork and Mushrooms</h4>
                    <a href="porkMushrooms.php"><img src="/media/grilledPorkMushroom.jpg" alt="Grilled Pork and Mushrooms"></a>
                    <figcaption>Bring out the grill, you will want to make this easy to cook dinner tonight.</figcaption> 
                </figure>
  
                <figure>
                    <h4>Chicken Masala</h4>
                    <a href="chickenMasala.php"><img src="/media/MasalaDinner.jpg" alt="Chicken Masala"></a>
                    <figcaption>Gluten free easy to make main dish.</figcaption>
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
