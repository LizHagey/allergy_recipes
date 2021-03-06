<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    try {
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();    
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id'; 
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function add_category($name) {
     global $db;
     $query = 'INSERT INTO categories(categoryName)'
             . 'VALUES (:name)';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();    
    $statement->closeCursor(); 
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function delete_category($category_id) {
     global $db;
      $query = 'DELETE FROM categories '
              . 'WHERE categoryID = :id';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $category_id);
    $statement->execute();    
    $statement->closeCursor(); 
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}
?>

