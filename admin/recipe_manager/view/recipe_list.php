<head>
<?php include '../../modules/header.php'; ?>
    <script>
        function confirmDelete()
    {
      var x = confirm("Are you sure you want to delete this recipe?");
      if (x)
          return true;
      else
        return false;
    }
    </script>
</head>
<main>
 
    <aside>
        <?php include '../../modules/categories_nav.php'; ?>
    </aside>

    <section>
        <p class="manageRecipes"><a href="?action=show_add_form">Add Recipe</a></p>
        <p class="manageRecipes"><a href="?action=list_categories">List Categories</a></p>
        <p class="manageRecipes">
            <a href="index.php?action=list_recipes">View Recipe List</a>
        </p>
        <p class="manageRecipes">
            <a href="/admin/img_upload/">Click here to add image</a>
        </p>
        <br>
        
        <!-- display recipes -->
        <h1 class="recipeHead"><?php echo "$category_name Recipe List"; ?></h1>
        
            <?php foreach ($recipes as $recipe) : ?>
        <div class="recipesMng">
            
        <h1 class="recipeMngName"><?php echo $recipe['recipeName']; ?></h1>
                
         
             <img class="recipeMngImage" src="/admin/img_upload/images/<?php echo $recipe['imageCode']; ?>.jpg"
                     alt="<?php echo $recipe['imageName']; ?>"> 
                </a> 
               
             <table class="allergyTableMng">
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
                 <tr>
                     <td><strong>&nbsp;</strong></td>
                     <td>&nbsp;</td>
                 </tr>
                 <tr>
                     <td><strong>Submitted By:</strong></td>
                     <td><?php echo $recipe['submittedBy']; ?></td>
                 </tr>
                 <tr>
                     <td><strong>Source:</strong></td>
                     <td><?php echo $recipe['source']; ?></td>
                 </tr>
             </table>
              
           <div class="ingred">

             <h4>Ingredients:</h4><ul><?php echo $recipe['ingredients'] ; ?></ul>
             
             <h4>Directions:</h4><ul><?php echo $recipe['directions']; ?></ul>
           </div>
                
             <form action="." method="post" class="delete">
                    <input type="hidden" name="action"
                           value="delete_recipe">
                    <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $recipe['categoryID']; ?>">
                    <input type="submit" id="deleteButton" onclick="return confirmDelete();" value="Delete">
                 </form>
                
             <form action="index.php" method="post" id="edit_recipe">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
                    <input type="submit" value="Edit">
                    
                 </form>
        </div>  <br><br> 
             <?php endforeach; ?>
        
    </section>
</main>
<?php include '../../modules/footer.php'; ?>
