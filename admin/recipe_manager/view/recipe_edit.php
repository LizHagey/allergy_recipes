<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Recipe</h1>
    <div class="edit_recipe_main">
    <form action="index.php" method="post" id="edit_recipe">
        <input type="hidden" name="action" value="edit_recipe">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Name:</label>
        <input type="text" name="recipeName" value='<?php echo htmlspecialchars($recipe['recipeName'])?>'/>
        <br>
        
        <input type="checkbox" id="allergy" name="glutenFree" <?php if ($recipe['glutenFree'] == 'y') echo 'checked'; ?>>Gluten Free<br>
        
        <input type="checkbox" id="allergy" name="dairyFree" <?php if ($recipe['dairyFree'] == 'y') echo 'checked'; ?>>Dairy Free<br>
        
        <input type="checkbox" id="allergy" name="peanutFree" <?php if ($recipe['peanutFree'] == 'y') echo 'checked'?>>peanut Free<br>
        
        <input type="checkbox" id="allergy" name="treeNutFree" <?php if ($recipe['treeNutFree'] == 'y') echo 'checked'?>>Tree Nut Free<br>
        
        <input type="checkbox" id="allergy" name="eggFree" <?php if ($recipe['eggFree'] == 'y') echo 'checked'?>>Egg Free<br>
        
        <input type="checkbox" id="allergy" name="soyFree" <?php if ($recipe['soyFree'] == 'y') echo 'checked'?>>Soy Free<br>
        
        <input type="checkbox" id="allergy" name="fishFree" <?php if ($recipe['fishFree'] == 'y') echo 'checked'?>>Fish Free<br>
        
        <input type="checkbox" id="allergy" name="shellFishFree" <?php if ($recipe['shellFishFree'] == 'y') echo 'checked'?>>Shell Fish Free<br>
        <br>

        <label>Ingredients:</label>
        <textarea name="ingredients" cols="30" rows="20" ><?php echo $recipe['ingredients'] ?></textarea>
        <br><br>
        
        <label>Directions: </label>
        <textarea name="directions" cols="30" rows="20"><?php echo $recipe['directions']?></textarea>
        <br><br>
        
        <label>Image Code:</label>
        <input type="text" name="imageCode" value='<?php echo htmlspecialchars($recipe['imageCode'])?>'/>
        <br>
        
        <label>Image Name:</label>
        <input type="text" name="imageName" value='<?php echo htmlspecialchars($recipe['imageName'])?>'/>
        <br><br><br>

        <input type="hidden" name="recipeID" value='<?php echo $recipe['recipeID']?>'/>
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Edit Recipe" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_recipes">View Recipe List</a>
    </p>
    </div>
</main>
<?php include '../view/footer.php'; ?>

