<!DOCTYPE html>
<!--
Bread: Waffles
-->
<html lang="en-us">
    <head>
        <title>Gluten Free Waffles</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Gluten free waffles">
        <meta name="description" content="Fabulous, 100% gluten free waffles.">
    </head>
    <body>
        <?php include_once("analyticstracking.php") ?>
        <div>
            <header id="pageHeader">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/header.php'; ?>
            </header>
            <nav>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/navigation.php'; ?>           
            </nav>
            <main>
                  
                    <h1>Gluten Free Waffles</h1>
                    <img class="mainPict" src="/media/waffles.jpg" alt="Gluten Free Waffles">
                    <h3>Ingredients</h3>
                    <ol>
                        <li>Gluten Free Flour (2 Cups brown rice flour - 1/2 Cup Potato Starch - 1/3 Cup Tapioca Starch)</li>
                        <li>3 tsp. Xanthum Gum</li>
                        <li>2 Tbsp. plus 2 tsp. Baking Powder</li>
                        <li>1 1/3 tsp. Salt</li>
                        <li>2/3 Cup sugar</li>
                        <li>1/2 Cup Melted "Butter"</li>
                        <li>1/4 Cup Olive Oil</li>
                        <li>1 Cup "Milk"</li>
                        <li>4 Eggs</li>
                     </ol>
                    <h3>Directions</h3>
                    <ul>
                        <li>Mix with hand mixer or whisk until lumps are gone and texture is similar to the image below</li>
                    </ul>
                    <img src="/media/waffleMixture.jpg" alt="Gluten Free Waffle Mixture">
                    <ul>
                       
                        <li>Ladle about 1/2 cup of mixture into pre-heated waffle iron and cook until golden brown</li>
                    </ul>
                      <br><br><br>
                    <div class="bottomSuggesedRecipes">   
                     <h2>Try out these great gluten free recipes!</h2>
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
