<?php include '../../modules/header.php'; ?>

<head>
    <title>Upload Image</title>
    
</head>
        <p class="manageRecipes"><a href="../recipe_manager/view/recipe_add.php">Add Recipe</a></p>
        <p class="manageRecipes"><a href="../recipe_manager/view/category_list.php">List Categories</a></p>
        <p class="manageRecipes">
            <a href="../recipe_manager/index.php">View Recipe List</a>
        </p>
        <p class="manageRecipes">
            <a href="/admin/img_upload/">Click here to add image</a>
        </p>
        <br>

    <h2 class="recipeHead">Upload Image</h2>
    
    <main id="upload_image_main">
        <h2>Images to be uploaded</h2>
      <div id="upload_image" class="upload"> 
         
        <form id="upload_form" 
              action="." method="POST"
              enctype="multipart/form-data">
            <input type="hidden" name="action" value="upload">
            <input type="file" name="file1"><br><br>
            
            <input id="upload_button" type="submit" value="Upload">
        </form>
      </div>
        <br><br>
        <h2>Remember the name of your image, as it will be needed when you add the recipe</h2>
        <p class="manageRecipes"><a href="../recipe_manager/view/recipe_add.php">Return to Add Recipe Page</a></p>
         <p class="manageRecipes"><a href="../recipe_manager/index.php">Return to Recipe List</a></p>
            <br><br>
        <br>
        <h2>Images in the directory</h2>
        <?php if (count($files) == 0) : ?>
            <p id="upload_p">No images uploaded.</p>
        <?php else: ?>
            <ul>
            <?php foreach($files as $filename) :
                $file_url = $image_dir . '/' .
                            $filename;
                $delete_url = '.?action=delete&amp;filename=' .
                              urlencode($filename);
            ?>
                <li>
                    <a href="<?php echo $delete_url;?>">
                        <img src="delete.png" alt="Delete"></a>
                    <a href="<?php echo $file_url; ?>">
                        <?php echo $filename; ?></a>
                </li>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>
                      
            <br><br><br>
    </main>


<?php include '../../modules/footer.php'; ?>