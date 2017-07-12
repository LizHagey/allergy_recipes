<?php include '../../modules/header.php'; ?>
<main>
        <p class="manageRecipes"><a href="?action=show_add_form">Add Recipe</a></p>
        <p class="manageRecipes"><a href="?action=list_categories">List Categories</a></p>
        <p class="manageRecipes">
            <a href="index.php?action=list_recipes">View Recipe List</a>
        </p>
        <p class="manageRecipes">
            <a href="/admin/img_upload/">Click here to add image</a>
        </p>
        <br>
    <h1 class="recipeHead">Category List</h1>
    <div class="edit_category">
         <p class="manageRecipes"><a href="../recipe_manager/index.php">Return to Recipe List</a></p>
         <br><br>
    <table id="categoryTable">
        <tr>
            <th>Category Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
         <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo $category['categoryName']; ?></td>
            <td><form action="index.php" method="post">
                <input type="hidden" name="category_id"
                       value= "<?php echo $category['categoryID'];?>">
                <input type='hidden' name='action' value='delete_category'>
                <input type="submit" value="Delete">
            </form></td>
        </tr>
        <?php endforeach; ?> 
    </table>
    <label>Name</label>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value='add_category'>
        <input type='text' name='name'><br>
        <input type="submit" value="Add Category" /><br>
    </form>
        <br>

    <h2>Add Category</h2>
    <!-- add code for form here -->

    <br><br>
</div>
</main>
<?php include '../../modules/footer.php'; ?>

