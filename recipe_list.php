<?php include 'modules/header.php'; ?>
<main>
    <?php include 'modules/allergy_select_nav.php'; ?>
 

        <!-- display recipes -->
        <h2 class="recipeHead"><?php echo "$category_name Recipes"; ?></h2>
        
        <section class="mainSection">
            <!-- display links for recipes in selected category -->
            <?php foreach ($recipes as $recipe) : ?>
            <div class="recipeListAll">
                <a href="?action=view_recipe&amp;recipe_id=<?php 
                          echo $recipe['recipeID']; ?>">
                    <div class="recipeName">
                    <?php echo $recipe['recipeName'];
                    ?></div>
                <br>
                
                <img class="recipeImage" src="/admin/img_upload/images/<?php echo $recipe['imageCode']; ?>.jpg"
                     alt="<?php echo $recipe['imageName']; ?>"> 
                </a> 
               
             <table class="allergyTable">
                 <tr>
                     <td><strong>Gluten Free: </strong></td>
                     <td><?php echo $recipe['glutenFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Dairy Free: </strong></td>
                     <td><?php echo $recipe['dairyFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Peanut Free: </strong></td>
                     <td><?php echo $recipe['peanutFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Tree Nut Free: </strong></td>
                     <td><?php echo $recipe['treeNutFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Egg Free: </strong></td>
                     <td><?php echo $recipe['eggFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Soy Free: </strong></td>
                     <td><?php echo $recipe['soyFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Fish Free: </strong></td>
                     <td><?php echo $recipe['fishFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Shell Fish Free: </strong></td>
                     <td><?php echo $recipe['shellFishFree']; ?></td>
                 </tr>
             </table>
            </div>
            <?php endforeach; ?>
       
    </section><br><br>
      
     
</main>
<?php include 'modules/footer.php'; ?>
