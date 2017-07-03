<?php
echo "Test Hello, forgot Password "
//when the submit button is pressed this code will execute
if(isset($_POST["forgotPassword"])){

}
 ?>

 <form action="index.php" method="POST">
 To reset your password, please enter your email in the text box below:
   <input type="text" name="email" size="200" placeholder="Email"/>
   <input type="submit" name="forgotPassword" value=" Submit " />
 </form>
