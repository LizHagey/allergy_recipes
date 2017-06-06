<?php include '../../modules/header.php'; ?>
<main>

<!--Add Recipe Section-->
    <h1 class="recipeHead">Add Recipe</h1>
    <form action="index.php" method="post" id="add_recipe_form">
        <input type="hidden" name="action" value="add_recipe">
<div class="add_recipe_main">
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
        <input type="text" name="recipeName"/>
        <br>
        
        <label>Check if applies to recipe:</label><br>
        <input type="checkbox" name="glutenFree">Gluten Free<br>
        
        <input type="checkbox" name="dairyFree">Dairy Free<br>
        
        <input type="checkbox" name="peanutFree">Peanut Free<br>
        
        <input type="checkbox" name="treeNutFree">Tree Nut Free<br>
        
        <input type="checkbox" name="eggFree">Egg Free<br>
        
        <input type="checkbox" name="soyFree">Soy Free<br>
        
        <input type="checkbox" name="fishFree">Fish Free<br>
        
        <input type="checkbox" name="shellFishFree">Shell Fish Free<br>
        <br>
        
        <label>Ingredients:</label>
        <textarea name="ingredients" cols="30" rows="20"></textarea>
        <br><br>
        
        <label>Directions:</label>
        <textarea name="directions" cols='30' rows='20'></textarea>
        <br><br>
        
        <label>Short Image Description: <i>ex. if picture is of 2 tacos on a plate you can just put, "Two Tacos"</i></label>
        <input type="text" name="imageName"/>
        <br>
        
        <label>Image Code: <i>ex. if photo is named pizza.jpg you would put pizza</i></label>
        <input type="text" name="imageCode"/>
        <br><br>
        <p>     
        <label>&nbsp;</label>
        <input type="submit" value="Add Recipe" />
        </p>
    <p class="manageRecipes">
            <a href="/admin/img_upload/">Click here to add image</a>
    </p>
        <p class="manageRecipes">
        <a href="index.php?action=list_recipes">View Recipe List</a>
    </p>
    <br>
    </form>
    
    <br>
    
    <div id="formatting_directions">
        <h2>How to format the Description and Ingredient entry</h2>
        <ul>
            <li>Use two returns to start a new paragraph.</li>
            <li>Use an asterisk to mark items in a bulleted list.</li>
            <li>Use one return between items in a bulleted list.</li>
            <li>Use standard HMTL tags for bold and italics.</li>
        </ul>
    </div>
    </div>
</main>
<?php include '../../modules/footer.php'; ?>

