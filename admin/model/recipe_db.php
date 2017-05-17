<?php
function get_recipes_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM recipes
              WHERE recipes.categoryID = :category_id
              ORDER BY recipeID DESC';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $recipe = $statement->fetchAll();
    $statement->closeCursor();
    return $recipe;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function get_recipes_by_allergy($category_id) {
    global $db;
    $query = 'SELECT * FROM recipes
              WHERE recipes.glutenFree, recipes.dairyFree, recipes.peanutFree,
              recipes.treeNutFree, recipes.eggFree, recipes.soyFree, recipes.fishFree,
              recipes.shellFishFree
              ORDER BY recipeID DESC
              HAVING "y"';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $recipe = $statement->mysql_fetch_array($recipe);
    $statement->closeCursor();
    return $recipe;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function get_recipes_by_allergy_one($category_id) {
    global $db;
    $a = implode("','",$_POST['allergy']); 

    $query = "SELECT * FROM recipes "
            . "WHERE allergy IN ('$a')"
            . "ORDER BY recipeID DESC' "
            . "HAVING 'y'"; 
    $recipe = mysql_query($query) or die(mysql_error()); 
    while ($row=mysql_fetch_array($recipe)) { 
    echo $row['name'] , " | " , $row['ingredients'] , "<br>"; 
        return $recipe;
    }
} 

function get_recipes_by_allergy_two($category_id) {
    global $db;
    $a = implode("','",$_POST['allergy']);
    $query = 'SELECT * FROM recipes
              WHERE allergy IN ("$a")
              ORDER BY recipeID DESC
              HAVING "y"';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $recipe = $statement->mysql_fetch_array();
    $statement->closeCursor();
    return $recipe;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function get_recipe($recipe_id) {
    global $db;
    $query = 'SELECT * FROM recipes
              WHERE recipeID = :recipe_id';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(":recipe_id", $recipe_id);
    $statement->execute();
    $recipe = $statement->fetch();
    $statement->closeCursor();
    return $recipe;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function delete_recipe($recipe_id) {
    global $db;
    $query = 'DELETE FROM recipes
              WHERE recipeID = :recipe_id';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':recipe_id', $recipe_id);
    $statement->execute();
    $statement->closeCursor();
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function add_recipe($category_id, $recipeName, $glutenFree, $dairyFree, $peanutFree, 
                    $treeNutFree, $eggFree, $soyFree, $fishFree, $shellFishFree, 
                    $ingredients, $directions, $imageCode, $imageName) {
    global $db;
    $query = 'INSERT INTO recipes
                 (categoryID, recipeName, glutenFree, dairyFree, peanutFree, 
                 treeNutFree, eggFree, soyFree, fishFree, shellFishFree, ingredients, 
                 directions, imageCode, imageName)
              VALUES
                 (:category_id, :recipeName, :glutenFree, :dairyFree, :peanutFree, 
                 :treeNutFree, :eggFree, :soyFree, :fishFree, :shellFishFree, 
                 :ingredients, :directions, :imageCode, :imageName)';
    
        $glutenFree = ($glutenFree) ? 'y' : 'n';
        $dairyFree = ($dairyFree) ? 'y' : 'n';
        $peanutFree = ($peanutFree) ? 'y' : 'n';
        $treeNutFree = ($treeNutFree) ? 'y' : 'n';
        $eggFree = ($eggFree) ? 'y' : 'n';
        $soyFree = ($soyFree) ? 'y' : 'n';
        $fishFree = ($fishFree) ? 'y' : 'n';
        $shellFishFree = ($shellFishFree) ? 'y' : 'n';
    
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':recipeName', $recipeName);
    $statement->bindValue(':glutenFree', $glutenFree);
    $statement->bindValue(':dairyFree', $dairyFree);
    $statement->bindValue(':peanutFree', $peanutFree);
    $statement->bindValue(':treeNutFree', $treeNutFree);
    $statement->bindValue(':eggFree', $eggFree);
    $statement->bindValue(':soyFree', $soyFree);
    $statement->bindValue(':fishFree', $fishFree);
    $statement->bindValue(':shellFishFree', $shellFishFree);
    $statement->bindValue(':ingredients', $ingredients);
    $statement->bindValue(':directions', $directions);
    $statement->bindValue(':imageCode', $imageCode);
    $statement->bindValue(':imageName', $imageName);
    $statement->execute();
    $statement->closeCursor();
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function edit_recipe($recipe, $category_id, $recipeName, $glutenFree, $dairyFree, $peanutFree, 
                    $treeNutFree, $eggFree, $soyFree, $fishFree, $shellFishFree, 
                    $ingredients, $directions, $imageCode, $imageName) {
    global $db;
    
     $query = 'UPDATE recipes
        SET 
        categoryID = :category_id, 
        recipeName = :recipeName,
        glutenFree = :glutenFree,
        dairyFree = :dairyFree,
        peanutFree = :peanutFree,
        treeNutFree = :treeNutFree,
        eggFree = :eggFree,
        soyFree = :soyFree,
        fishFree = :fishFree,
        shellFishFree = :shellFishFree,
        ingredients = :ingredients,
        directions = :directions,
        imageCode = :imageCode,
        imageName = :imageName
        WHERE recipeID = :recipe';
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
        $glutenFree = ($glutenFree) ? 'y' : 'n';
        $dairyFree = ($dairyFree) ? 'y' : 'n';
        $peanutFree = ($peanutFree) ? 'y' : 'n';
        $treeNutFree = ($treeNutFree) ? 'y' : 'n';
        $eggFree = ($eggFree) ? 'y' : 'n';
        $soyFree = ($soyFree) ? 'y' : 'n';
        $fishFree = ($fishFree) ? 'y' : 'n';
        $shellFishFree = ($shellFishFree) ? 'y' : 'n';
    
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':recipeName', $recipeName);
    $statement->bindValue(':glutenFree', $glutenFree);
    $statement->bindValue(':dairyFree', $dairyFree);
    $statement->bindValue(':peanutFree', $peanutFree);
    $statement->bindValue(':treeNutFree', $treeNutFree);
    $statement->bindValue(':eggFree', $eggFree);
    $statement->bindValue(':soyFree', $soyFree);
    $statement->bindValue(':fishFree', $fishFree);
    $statement->bindValue(':shellFishFree', $shellFishFree);
    $statement->bindValue(':ingredients', $ingredients);
    $statement->bindValue(':directions', $directions);
    $statement->bindValue(':imageCode', $imageCode);
    $statement->bindValue(':imageName', $imageName);
    $statement->bindValue(':recipe', $recipe);
    $statement->execute();
    $statement->closeCursor();
    echo "Successfully updated the recipe";
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}
?>

