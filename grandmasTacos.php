<!DOCTYPE html>
<!--
My site home page
-->
<html lang="en-us">
    <head>
        <title>Home | topallergyfreerecipes.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
       <meta name="description" content="The best gluten free tacos">
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
            <main>
                <h1>Grandma's Tacos</h1>
                <img class="mainPict" src="/media/grandmasTacos.jpg" alt="Grandma's Tacos">
                <h3>Ingredients</h3>
                <ul>
                    <li>1 pound ground beef</li>
                    <li>Two medium potatoes - grated with or without skins</li>
                    <li>1/4 tsp. garlic powder or 1 tsp. garlic salt</li>
                    <li>1 tsp. ground thyme</li>
                    <li>1/4 cup apple cider vinegar</li>
                    <li>1/4 cup water</li>
                    <li>1/4 tsp. pepper</li>
                    <li>Olive Oil</li>
                    <li>Corn tortilla's (yellow works best)</li>
                </ul>
                <p>Put all ingredients in a cake pan and mix well (You will probably need to use your hands to blend the ingredients)</p>
                <p>Then spread out the mixture in the pan and cover with tin foil</p>
                <div class="threePicts">
                <img src='/media/mixWithHands.jpg' alt='Mix ingredients with hands'>
                <img src="/media/rawMeatMixture.jpg" alt ="Raw Meat Mixture">
                <img src="/media/coverWithFoil.jpg" alt="Covered with Tin Foil">
                </div>
                <p>Bake at 350 degrees for 1 1/2 to 2 hours</p><br>
                <p>To cook the shells you will need to heat up about 2 inches of olive oil in a pan.</p>
                <p>Place the shells in the pan making sure that they are covered in the oil for about 30 seconds to a minute depending on how hot the oil is.</p>
                <p>Flip them over and cook for another 15 - 30 seconds</p>
                <p>The shells should still be soft</p>
                <p>Use paper towel to soak up the excess oil and fold shell in half</p>
                <div class='twoPicts'>
                    <img src='/media/cookShells.jpg' alt='Frying the shells in the oil'>
                    <img src='/media/shellsOnPaperTowel.jpg' alt='Folded shells on paper towel'>
                </div>
                <p>Put the cooked meat into the shells along with your favorite toppings</p>
                <div class='twoPicts'>
                <img src='/media/cookedMeat.jpg' alt ='Cooked taco meat'>
                <img src='/media/tacosTwo.jpg' alt='Tacos'>
                
                </div>
                
              <br><br><br>
                    <div class="bottomSuggesedRecipes">  
                        <h3>Other suggestions</h3>
                <figure>
                    <h4>Pepper Steak Supreme</h4>
                    <a href="pepperSteak.html"><img src="/media/pepperSteak.jpg" alt="Pepper Steak Supreme"></a>
                    <figcaption>Gluten free main dish.  Best when served over rice.</figcaption> 
                </figure>
                <figure>
                    <h4>Chicken Masala</h4>
                    <a href="chickenMasala.html"><img src="/media/MasalaDinner.jpg" alt="Chicken Masala"></a>
                    <figcaption>Gluten free easy to make main dish.</figcaption>
                </figure>
                    </div>

      
            </main>
            <!--<aside>
                <ul>
                    <li>Main Dish</li>
                    <li>Snacks</li>
                    <li>Bread</li>
                    <li>Dessert</li>
                    <li>Easy</li>
                </ul>
            </aside>-->
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
