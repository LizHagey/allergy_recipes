<!DOCTYPE html>
<!--
Easy meal: broiled salmon
-->
<html lang="en-us">
    <head>
        <title>Broiled Salmon</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="description" content="Easy to make broiled salmon">
    </head>
    <body id="home">
        <?php include_once("analyticstracking.php") ?>
        <div>
            <header id="pageHeader">
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
              
                    <h1>Broiled Salmon</h1>
                    <img class="mainPict" src="/media/salmon.jpg" alt="Broiled Salmon">                  <p>Nutrition is packed into this easy gluten free meal.  </p> 
                    <ul>
                        <li>Turn oven to broil high setting and move rack to position closest to the top</li>
                        <li>Place salmon on cookie sheet and spread olive oil on the salmon</li>
                        <li>Generously season with salt, pepper and garlic powder</li>
                    </ul>   
                    <img src="/media/rawSalmon.jpg" alt="Raw Salmon">
                    <ul>
                        <li>Put salmon in the oven on the top rack</li>
                        <li>Cook for 12 - 17 minutes - more or less depending on how big your salmon is [this salmon took 17 minutes]</li>
                        
                    </ul>
                    
                    <p>Serve with your favorite vegetables</p>
                    <br><br><br>
                    <div class="bottomSuggesedRecipes">    
                    <h3>You might like one of these:</h3>
                <figure>
                    <h4><a href="chickenMasala.php">Chicken Masala</a></h4>
                    <a href="chickenMasala.php"><img src="/media/MasalaDinner.jpg" alt="Chicken Masala"></a>
                    <figcaption>Gluten free easy to make main dish.</figcaption>
                </figure>

                <figure>
                    <h4><a href="easyEnchiladas.php">Easy Enchiladas</a></h4>
                    <a href="easyEnchiladas.php"><img src="/media/easyEnchiladas.jpg" alt="Easy Enchiladas"></a>
                    <figcaption>Fast and easy gluten free enchiladas that everyone will love.</figcaption> 
                </figure>
                    </div>
            </main>
           
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
