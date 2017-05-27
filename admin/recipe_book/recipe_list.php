<?php include '../view/header.php'; ?>
<main>
 
<!--   <section>
        display a table of recipes 
       <h2><?php //echo $category_name; ?></h2>
       <ul class="nav">
            display links for products in selected category 
           <?php //foreach ($recipes as $recipe) : ?>
           <li>
               <a href="?action=view_recipe&amp;recipe_id=<?php 
                         //echo $recipe['recipeID']; ?>">
                   <?php //echo $recipe['recipeName']; ?>
               </a>
           </li>
           <?php //endforeach; ?>
       </ul>
   </section><br><br>-->
      <div id="checklist">     
   <form action="index.php" method="post" id="view_specific_allergyfree_recipe_form">
       <input type="hidden" name="action" value="get_recipes_by_allergy">
       <label id="checklistHead">Choose Category:</label><br>
       <select name="category_id">
           <?php foreach ($categories as $category) : ?>
           <option value="<?php echo $category['categoryID']; ?>"><?php echo $category['categoryName']; ?></option>
           <?php endforeach; ?>
       </select><br><br>
       
       <label id="checklistHead">Choose Allergies:</label><br><br>
       <input type="checkbox" name="allergy[]" value="1">Gluten Free<br>
       
       <input type="checkbox" name="allergy[]" value="2">Dairy Free<br>
       
       <input type="checkbox" name="allergy[]" value="3">Peanut Free<br>
       
       <input type="checkbox" name="allergy[]" value="4">Tree Nut Free<br>
       
       <input type="checkbox" name="allergy[]" value="5">Egg Free<br>
       
       <input type="checkbox" name="allergy[]" value="6">Soy Free<br>
       
       <input type="checkbox" name="allergy[]" value="7">Fish Free<br>
       
       <input type="checkbox" name="allergy[]" value="8">Shell Fish Free<br>
       <br>
       
       <label>&nbsp;</label>
       <input type="submit" value="Select" />
       <br>
     </form>
          
<!--          display a list of categories -->
<!--        <div id="categories">
        <h2>Category Only</h2>
        
            
        <ul>
        <?php //foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php //echo $category['categoryID']; ?>">
                <?php //echo $category['categoryName']; ?>
            </a>
            </li>
        <?php //endforeach; ?>
        </ul>
            </div>-->
        
      </div>    


         
        <!-- display a table of recipes -->
        <h2 class="recipeHead"><?php echo "$category_name Recipes"; ?></h2>
        
        <section class="mainSection">
            <!-- display links for products in selected category -->
            <?php foreach ($recipes as $recipe) : ?>
            <div class="recipeTwo">
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
                     <td><strong>Gluten Free</strong></td>
                     <td><?php echo $recipe['glutenFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Dairy Free</strong></td>
                     <td><?php echo $recipe['dairyFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Peanut Free</strong></td>
                     <td><?php echo $recipe['peanutFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Tree Nut Free</strong></td>
                     <td><?php echo $recipe['treeNutFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Egg Free</strong></td>
                     <td><?php echo $recipe['eggFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Soy Free</strong></td>
                     <td><?php echo $recipe['soyFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Fish Free</strong></td>
                     <td><?php echo $recipe['fishFree']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Shell Fish Free</strong></td>
                     <td><?php echo $recipe['shellFishFree']; ?></td>
                 </tr>
             </table>
            </div>
            <?php endforeach; ?>
       
    </section><br><br>
      
     
</main>
<?php include '../view/footer.php'; ?>
