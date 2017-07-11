<?php include 'modules/header.php'; ?>
<main>
    
        <?php include('modules/allergy_select_nav.php'); ?>
  
    
        <h1 id="recipeViewHeading"><?php echo $recipeName; ?></h1>
        <section class="recipeViewMain">
        <div id="left_column">
            <p>
                <img id="mainImg" src="/admin/img_upload/images/<?php echo $recipe['imageCode']; ?>.jpg"
                     alt="<?php echo $recipe['imageName']; ?>">
            </p>
            <p class="submittedBy">
                Submitted By: <?php echo $recipe['submittedBy']; ?>
            </p>
            <p class="submittedBy">
                <?php echo $recipe['source']; ?>
            </p>
        </div>
        <!-- Ingredients and Directions -->
        
        <?php $ingredient_tags = add_tags($ingredients); ?>
        <?php $direction_tags = add_tags($directions); ?>
        

        <div id="right_column">
            <p class="ingredients"><b>Ingredients:</b> <?php echo $ingredient_tags; ?></p>
            <p class="directions"><b>Directions:</b> <?php echo $direction_tags; ?></p>
            
          
        </div>
    </section>
</main>
<?php include 'modules/footer.php'; ?>

