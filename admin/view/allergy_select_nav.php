 <div id="checklist">     
   <form action="index.php" method="post" id="view_specific_allergyfree_recipe_form">
       <input type="hidden" name="action" value="get_recipes_by_allergy">
       <label id="checklistHead">Choose Category:</label><br>
       <select name="category_id">
           <?php foreach ($categories as $category) : ?>
           <option value="<?php echo $category['categoryID']; ?>"><?php echo $category['categoryName']; ?></option>
           <?php endforeach; ?>
       </select><br><br>
       
       <label id="checklistHead">Choose Allergies:</label><br><br>
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
       <input type="submit" value="Select" />
       <br>
     </form>
          
<!--          display a list of categories -->
<!--        <div id="categories">
        <h2>Category Only</h2>
        
            
        <ul>
        <?php //foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php //echo $category['categoryID']; ?>">
                <?php //echo $category['categoryName']; ?>
            </a>
            </li>
        <?php //endforeach; ?>
        </ul>
            </div>-->
        
      </div> 

