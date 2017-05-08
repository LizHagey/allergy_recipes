<!DOCTYPE html>
<!--
Bread: gluten free bread
-->
<html lang="en-us">
    <head>
        <title>Gluten free dish | Spam Musubi</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Gluten free dish">
        <meta name="description" content="Spam Musubi">
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
  
                    <h1>Spam Musubi</h1>
                    <img class = "mainPict" src="/media/spammusubi.jpg" alt="Spam Musubi">
                                   
                <h4>Ingredients</h4>
                <ul>
                    <li>1 Can Spam</li>
                    <li>Seaweed wrap (Nori)</li>
                    <li>Furikake (sprinkle)</li>
                    <li>2 Tbsp. brown sugar</li>
                    <li>1/4 cup Aloha shoyu (soy sauce)</li>
                    <li>3 cups Calrose rice</li>
                </ul>
                <h4>Directions</h4>
                <p>Cut spam in half, then half again, then half again... until 
                you have 8 pieces.</p>
                <p>Pour 1/4 cup shoyu and 2 Tbsp brown sugar in frying pan and stir.</p>
                <p>Fry spam in the mixture about 3 minutes, turning until coated and brown</p>
                <p>Lay seaweed out on surface; center mold on seaweed; and put rice in mold.</p>
                <p>Put spam slice on the rice</p>
                <p>Sprinkle Furikake on the spam, then add another layer of rice</p>
                <p>Push it down with a wet mold lid and remove mold base while
                holding the lid down</p>
                <p>Remove lid and wrap the seaweed sealing it with water.</p>
                <div class="twoPicts">
                    <img src='media/musubimold.jpg' alt='Musubi Mold'>
                    <img src='/media/spammusubi.jpg' alt='Spam Musubi'> 
                </div>
                
                 
                <h3>More Great Recipes!</h3>
                <figure>
                    <h4>Waffles</h4>
                    <a href="glutenFreeWaffles.php"><img src="/media/waffles.jpg" alt="Waffles"></a>
                    <figcaption>Gluten free waffles</figcaption> 
                </figure>
 
                <figure>
                    <h4>Broiled Salmon</h4>
                    <a href="broiledSalmon.php"><img src="/media/salmon.jpg" alt="Broiled Salmon"></a>
                    <figcaption>Nutrition is packed into this easy gluten free meal.  </figcaption> 
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

