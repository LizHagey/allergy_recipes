<!DOCTYPE html>
<!--
My site home page
-->
<html lang="en-us">
  <head>
       <title>Home | topallergyfreerecipes.com</title>
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
            <main>
               <figure>
                     <h3>Grilled Pork and Mushrooms</h3>
                     <a href="grilledPorkMushrooms.html"><img src="/media/grilledPorkMushroom.jpg" alt="Grilled Pork and Mushrooms"></a>
                     <figcaption>Bring out the grill, you will want to make this easy to cook dinner tonight.</figcaption> 
                </figure>
                <figure>
                     <h3>Protein Balls</h3>
                     <a href="proteinballs.html"><img src="/media/ProteinBall.jpg" alt="Protein Balls"></a>
                     <figcaption>Gluten free snack.  These are high in protein and very nutritious.</figcaption>
                </figure>    
                <figure>
                     <h3>Gluten Free Bread</h3>
                     <a href="bread.html"><img src="/media/BreadSlice.jpg" alt="Gluten Free Bread"></a><figcaption>Who knew you could have delicious bread that is gluten free.  Try this amazing recipe!
                    </figcaption>
                </figure>    
                <figure>
                     <h3>Waffles</h3>
                     <a href="waffles.html"><img src="/media/waffles.jpg" alt="Waffles"></a>
                     <figcaption>Gluten free waffles</figcaption> 
                </figure>
                <figure>
                     <h3>Pepper Steak Supreme</h3>
                     <a href="pepperSteak.html"><img src="/media/pepperSteak.jpg" alt="Pepper Steak Supreme"></a>
                     <figcaption>Gluten free main dish.  Best when served over rice.</figcaption> 
                </figure>
                <figure>
                  <h3>Chicken Masala</h3>
                  <a href="chickenMasala.html"><img src="/media/MasalaDinner.jpg" alt="Chicken Masala"></a>
                  <figcaption>Gluten free easy to make main dish.</figcaption>
              </figure>
  
                <figure>
                     <h3>Easy Enchiladas</h3>
                     <a href="enchiladas.html"><img src="/media/easyEnchiladas.jpg" alt="Easy Enchiladas"></a>
                     <figcaption>Fast and easy gluten free enchiladas that everyone will love.</figcaption> 
                </figure>
                <figure>
                     <h3>Broiled Salmon</h3>
                     <a href="salmon.html"><img src="/media/salmon.jpg" alt="Broiled Salmon"></a>
                     <figcaption>Nutrition is packed into this easy gluten free meal.  </figcaption> 
                </figure>
            </main>
            <aside>
                <ul>
                    <li>Main Dish</li>
                    <li>Snacks</li>
                    <li>Bread</li>
                    <li>Dessert</li>
                    <li>Easy</li>
                </ul>
            </aside>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
