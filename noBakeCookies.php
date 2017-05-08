<!DOCTYPE html>
<!--
Dessert page: No Bake Cookies
-->
<html lang="en-us">
    <head>
        <title>Dessert: No Bake Cookies</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="No Bake Cookies">
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
                <h1>No Bake Cookies</h1>
                <img class="mainPict" src="/media/noBakeCookies.jpg" alt="No Bake Cookies">
                <p>Did you know that this classic cookie is gluten free?</p>
                <h3>Recipe</h3>
                <ul>
                    <li>2 cups sugar</li>
                    <li>1/2 cup milk</li>
                    <li>3 teaspoons cocoa</li>
                    <li>1 stick butter or margarine</li>
                    <li>A pinch of salt</li>
                </ul>
                <p>Boil together for one minute then remove from the stove.</p>
                <p>Quickly Add</p>
                <ul>
                    <li>3 cups quick oatmeal (although oatmeal is gluten free, make sure the packaging says gluten free, otherwise there may be cross contamination.)</li>
                    <li>1/3 cup peanut butter</li>
                    <li>1 teaspoon vanilla</li>
                </ul>
                <p>Mix well</p>
                <p>Drop on wax paper and chill</p>
                <h3>Here is a video of the process:</h3>
                <video controls preload="metadata" poster="media/noBakeCookies.jpg" width="520" height="400">
                    <source src="/video/noBakeVideo.mp4" type="video/mp4">
                    <source src="/video/noBakeVideo.webmsd.webm" type="video/webm">
                    <source src="/video/noBakeVideo.oggtheora.ogv" type="video/oggtheora.ogv">
                    Your browser does not recognize this video.
                </video>
       
                 <br><br><br>
                    <div class="bottomSuggesedRecipes"> 
                        <h3>You might like these. . .</h3>
                <figure>
                    <h4> <a href="/proteinBalls.php">Protein Balls</a></h4>
                    <a href="/proteinBalls.php"><img src="/media/ProteinBall.jpg" alt="Protein Balls"></a>
                    <figcaption>Gluten free snack.  These are high in protein and very nutritious.</figcaption>
                </figure>    
                <figure>
                    <h4><a href="/glutenFreeBread.php">Gluten Free Bread</a></h4>
                    <a href="/glutenFreeBread.php"><img src="/media/BreadSlice.jpg" alt="Gluten Free Bread"></a><figcaption>Who knew you could have delicious bread that is gluten free.  Try this amazing recipe!
                    </figcaption>
                </figure> 
                    </div>
              
            </main>
            <!--<aside>
                <ul>
                    <li><a href='/pepperSteak.php'>Main Dish</a></li>
                    <li><a href='/proteinBalls.php'>Snacks</a></li>
                    <li><a href="/bread.php">Bread</a></li>
                    <li><a href="/noBakeCookies.php">Dessert</a></li>
                    <li><a href="/easyMeals.php">Easy</a></li>
                </ul>
            </aside>-->
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
