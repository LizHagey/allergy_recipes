<!DOCTYPE html>
<!--
Easy meals: Chicken Masala
-->
<html lang="en-us">
    <head>
        <title>Easy Meal: Chicken Masala</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Easy to make chicken masala recipe">
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
            <main>
 
               
                    <h1>Chicken Masala</h1>
                    <img class="mainPict" src="/media/MasalaDinner.jpg" alt="Chicken Masala">
                    <p>Gluten free easy to make main dish.</p>
                
                <ul>
                    <li>1 yellow onion chopped</li>
                    <li>3 chicken breasts cut into bite size pieces</li>
                    <li>2 Tablespoons olive oil</li>
                    <li>1 15 oz jar of Masala Sauce</li>
                </ul>
                <img src="media/masalaSauce.jpg" alt='Jar of Masala Sauce'>
                <ul>
                    <li>saute onions in the olive oil for 2-3 minutes</li>
                    <li>Add chicken pieces and cook for an additional 2-3 minutes</li>
                    <li>Add Masala sauce and bring to a boil</li>
                    <li>Reduce heat and simmer 12 minutes covered</li>
                    <li>Uncover and simmer 5 more minutes</li>
                </ul>
                <p>Serve over rice</p>
                <br><br><br>
                    <div class="bottomSuggesedRecipes"> 
                <h3>Try one of these gluten free recipes</h3>
                <figure>
                    <h4>Protein Balls</h4>
                    <a href="proteinBalls.php"><img src="/media/ProteinBall.jpg" alt="Protein Balls"></a>
                    <figcaption>Gluten free snack.  These are high in protein and very nutritious.</figcaption>
                </figure>    
                <figure>
                    <h4>Gluten Free Bread</h4>
                    <a href="glutenFreeBread.php"><img src="/media/BreadSlice.jpg" alt="Gluten Free Bread"></a><figcaption>Who knew you could have delicious bread that is gluten free.  Try this amazing recipe!
                    </figcaption>
                </figure>  
                    </div>
 
            </main>
           <!-- <aside>
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
