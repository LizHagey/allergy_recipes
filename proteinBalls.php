<!DOCTYPE html>
<!--
Snack page: Protein Balls
-->
<html lang="en-us">
    <head>
        <title>Gluten Free Protein Balls</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Protein Balls">
        <meta name="description" content="Delicious gluten free treat">
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
                 
                    <h1>Protein Balls</h1>
                    <img class="mainPict" src="/media/ProteinBall.jpg" alt="Protein Balls">
                    <p>This gluten free snack is high in protein and very nutritious.</p>
                    <h3>Recipe</h3>
                    <ul>
                        <li>1 cup peanut butter</li>
                        <li>1 cup honey</li>
                        <li>2 1/2 cup gluten free oatmeal</li>
                        <li>1/2 cup ground flax seed</li>
                        <li>1/2 cup chopped nuts</li>
                        <li>3/4 cup Craisins or raisins</li>
                        <li>1/2 cup chocolate chips (Ghiradelli semi-sweet or Guittard semi-sweet are dairy free)</li>
                    </ul>
                    <p>Mix peanut butter and honey until smooth.</p>
                    <p>Gradually add oats and ground flax seed.</p>
                    <p>Fold in chocolate chips, Craisins and nuts (slivered almonds work well).</p>
                    <p>Roll into balls and place on wax paper.</p>
                    <p>Refrigerate or freeze</p>
                    <img src='media/Sheet.jpg' alt='Cookie Sheet of protien balls'>
                    <img src='media/Ingredients.jpg' alt='Ingredients'>
                    <p><em>Notes:</em> If you can't use oatmeal, use quinoa flakes</p>
                    
                     <br><br><br>
                    <div class="bottomSuggesedRecipes">   
                    <h3>More Recipes</h3>          
                <figure>
                    <h4>Gluten Free Bread</h4>
                    <a href="glutenFreeBread.php"><img src="/media/BreadSlice.jpg" alt="Gluten Free Bread"></a><figcaption>Who knew you could have delicious bread that is gluten free.  Try this amazing recipe!
                    </figcaption>
                </figure>    
                <figure>
                    <h4>Waffles</h4>
                    <a href="glutenFreeWaffles.php"><img src="/media/waffles.jpg" alt="Waffles"></a>
                    <figcaption>Gluten free waffles</figcaption> 
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
