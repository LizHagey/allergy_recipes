<?php include '../view/header.php'; ?>
<main>
    <h1>Recipe List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

    <section>
        <p><a href="?action=show_add_form">Add Recipe</a></p>
        <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>
        <br>
        
        <!-- display recipes -->
        <h2><?php echo $category_name; ?></h2>
        
            <?php foreach ($recipes as $recipe) : ?>
            
        <h1><?php echo $recipe['recipeName']; ?></h1>
                
        <img src="/admin/img_upload/images/<?php echo $recipe['imageCode']; ?>.jpg"
                     alt="<?php echo $recipe['imageName']; ?>">  
             <table>
                 <tr>
                     <th>Gluten Free</th>
                     <th>Dairy Free</th>
                     <th>Peanut Free</th>
                     <th>Tree Nut Free</th>
                     <th>Egg Free</th>
                     <th>Soy Free</th>
                     <th>Fish Free</th>
                     <th>Shellfish Free</th>
                 </tr>
                 <tr>
                    <td><?php echo $recipe['glutenFree']; ?></td>
                    <td><?php echo $recipe['dairyFree']; ?></td>
                    <td><?php echo $recipe['peanutFree']; ?></td>
                    <td><?php echo $recipe['treeNutFree']; ?></td>
                    <td><?php echo $recipe['eggFree']; ?></td>
                    <td><?php echo $recipe['soyFree']; ?></td>
                    <td><?php echo $recipe['fishFree']; ?></td>
                    <td><?php echo $recipe['shellFishFree']; ?></td>
                 </tr>
             </table>
             <h4>Ingredients:</h4><ul><?php echo $recipe['ingredients']; ?></ul>
                
             <h4>Directions:</h4><ul><?php echo $recipe['directions']; ?></div></ul>
             
             <table>
                 <tr>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_recipe">
                    <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $recipe['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="index.php" method="post" id="edit_recipe">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
                    
                    
                    <input type="submit" value="Edit">
                </form></td>
            </tr>
            
        </table>
             <?php endforeach; ?>
                
    </section>
</main>
<?php include '../view/footer.php'; ?>
