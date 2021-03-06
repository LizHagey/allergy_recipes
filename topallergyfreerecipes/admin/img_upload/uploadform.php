<?php include 'modules/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <h2 class="recipeHead">Upload Image</h2>
    
    <main id="upload_image_main">
        <h2>Images to be uploaded</h2>
       
        <form id="upload_form"
              action="." method="POST"
              enctype="multipart/form-data">
            <input type="hidden" name="action" value="upload">
            <input type="file" name="file1"><br><br>
            
            <input id="upload_button" type="submit" value="Upload">
        </form>
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
                      
            <p class="manageRecipes"><a href="../recipe_manager/index.php">Return to Recipe Manager</a></p>
            <br><br><br>
    </main>
</body>
</html>
<?php include 'modules/footer.php'; ?>