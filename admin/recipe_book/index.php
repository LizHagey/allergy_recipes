<?php
require('../util/main.php');
require('../util/tags.php');
require('../model/database.php');
require('../model/recipe_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_recipes';
    }
}  

switch( $action ) {
    case 'list_recipes' :
        $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE) {
            $category_id = 1;
        }
        $category_name = get_category_name($category_id);
        $categories = get_categories();
        $recipes = get_recipes_by_category($category_id);
        include('../recipe_book/recipe_list.php');
//        include('index.php');
        break;
     case 'get_recipes_by_allergy' :
       $category_id = filter_input(INPUT_POST, 'category_id',
           FILTER_VALIDATE_INT);
       if ($category_id == NULL || $category_id == FALSE) {
           $category_id = 1;
       }
       $allergies = $_POST["allergy"];
       $category_name = get_category_name($category_id);
       $categories = get_categories();
       $recipes = get_recipes_by_allergy($category_id, $allergies);
       include('../recipe_book/recipe_results.php');
       break;
    case 'view_recipe' :
        $recipe_id = filter_input(INPUT_GET, 'recipe_id', 
            FILTER_VALIDATE_INT);   
        if ($recipe_id == NULL || $recipe_id == FALSE) {
            $error = 'Missing or incorrect product id.';
            include('../errors/error.php');
        } else {
            $categories = get_categories();
            $recipe = get_recipe($recipe_id);
        }
        // Get recipe data
        
        $recipeName = $recipe['recipeName'];
        $ingredients = $recipe['ingredients'];
        $directions = $recipe['directions'];
        $imageCode = $recipe['imageCode'];
        $imageName = $recipe['imageName'];
        
        // Get image URL and alternate text
        $image_filename = '../images/' . $imageCode . '.jpg';
        $image_alt = 'Image: ' . $imageName . '.jpg';
        
        include('../recipe_book/recipe_view.php');
        break;
  
}

?>