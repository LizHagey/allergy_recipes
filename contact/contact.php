<?php session_start(); ?>

<!--
Contact Page
-->
<?php include '../modules/header.php'; ?>

        <div>
        
        
            <h1 class="recipeHead">Contact Me</h1> 
            
            <main class="sidePageMainSection">
            <?php
                if(!empty($errors)){
                    echo '<ul class="notify">';
                    foreach($errors as $error) {
                        echo "<li>$error</li>";
                    }
                    echo '</ul>';
                    unset($errors);
                }
                ?>
            <p>Please contact me using the provided form. All fields are required.</p>
            <form method="post" action="." id="contactform">                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" size="50" value="<?php echo $name;  ?>" required> <br><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" size="50" value="<?php echo $email;  ?>" required><br><br>
                <label for="subject">Subject</label><br>
                <input type="text" name="subject" id="subject" size="50" value="<?php echo $subject;  ?>" required><br><br>
                <label for="message">Message</label><br>
                <textarea name="message" id="message" cols="50" rows="10" required><?php echo $message;  ?></textarea><br><br>
               
            <!-- This displays the captcha image -->
<label>&nbsp;</label>
<img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)<br>
<!-- This allows the user to type in what they see -->
<label for="cap_code">Security Code:</label><br>
<input id="cap_code" name="cap_code" type="text" size="6" required> <br>
 <label for="action">&nbsp;</label><br>
                <input type="submit" name="action" id="action" value="Send"><br>
            </form>

        </main>
           
        </div>
       
    </body>
<?php include '../modules/footer.php'; ?>

