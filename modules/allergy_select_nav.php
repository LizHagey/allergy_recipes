 <div id="checklist" class="checklistone">  
    
<!--     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      -->
   <form action="index.php" method="post" id="view_specific_allergyfree_recipe_form">
       <input type="hidden" name="action" value="get_recipes_by_allergy">
       <label id="checklistHead">Choose Category:</label><br>
       <select name="category_id">
           <option selected="selected">Select</option>
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
    
      </div>  
     
<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
  
<button type="button" class="slide-toggle">Allergy Menu</button>
<div id="checklisttwo" class="checklisttwo">  
       
<!--     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      -->
   <form action="index.php" method="post" id="view_specific_allergyfree_recipe_form">
       <input type="hidden" name="action" value="get_recipes_by_allergy">
       <label id="checklistHead">Choose Category:</label><br>
       <select name="category_id">
           <option selected="selected">Select</option>
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
    
      </div>  
     
