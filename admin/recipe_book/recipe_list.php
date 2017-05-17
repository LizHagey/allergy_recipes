<?php include '../view/header.php'; ?>
<main>
    <h1>Recipe Book</h1>

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
        <!-- display a table of recipes -->
        <h2><?php echo $category_name; ?></h2>
        <ul class="nav">
            <!-- display links for products in selected category -->
            <?php foreach ($recipes as $recipe) : ?>
            <li>
                <a href="?action=view_recipe&amp;recipe_id=<?php 
                          echo $recipe['recipeID']; ?>">
                    <?php echo $recipe['recipeName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section><br><br>
            
    <form action="index.php" method="post" id="view_specific_allergyfree_recipe_form">
        <input type="hidden" name="action" value="get_recipes_by_allergy">
        
       <label>Check if applies to recipe:</label><br>
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
        <input type="submit" value="View Specific Allergy Free Recipes" />
        <br>
      </form>
            
</main>
<?php include '../view/footer.php'; ?>
