<!DOCTYPE html>
<!--
Easy Meals main page
-->
<html lang="en-us">
    <head>
        <title>Easy gluten free dinners</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
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
                <h1>Try out the scrumptious easy to make gluten free meals</h1>
                <figure>
                    <h3><a href="porkMushrooms.php">Grilled Pork and Mushrooms</a></h3>
                    <a href="porkMushrooms.php"><img src="/media/grilledPorkMushroom.jpg" alt="Grilled Pork and Mushrooms"></a>
                    <figcaption>Bring out the grill, you will want to make this easy to cook dinner tonight.</figcaption> 
                </figure>

                 <figure>
                     <h3><a href="chickenMasala.php">Chicken Masala</a></h3>
                    <a href="chickenMasala.php"><img src="/media/MasalaDinner.jpg" alt="Chicken Masala"></a>
                    <figcaption>Gluten free easy to make main dish.</figcaption>
                </figure>

                <figure>
                    <h3><a href="easyEnchiladas.php">Easy Enchiladas</a></h3>
                    <a href="easyEnchiladas.php"><img src="/media/easyEnchiladas.jpg" alt="Easy Enchiladas"></a>
                    <figcaption>Fast and easy gluten free enchiladas that everyone will love.</figcaption> 
                </figure>
                <figure>
                    <h3><a href="broiledSalmon.php">Broiled Salmon</a></h3>
                    <a href="broiledSalmon.php"><img src="/media/salmon.jpg" alt="Broiled Salmon"></a>
                    <figcaption>Nutrition is packed into this easy gluten free meal.  </figcaption> 
                </figure>
                <figure>
                    <h3><a href="chickenavocadodelight.php">Chicken Avocado Delight</a></h3>
                    <a href="chickenavocadodelight.php"><img src="/media/chickenavacado.jpg" alt="Chicken Avocado Delight"></a>
                    <figcaption>This would make a great easy meal for one or many.</figcaption> 
                </figure>
            </main>
         
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
