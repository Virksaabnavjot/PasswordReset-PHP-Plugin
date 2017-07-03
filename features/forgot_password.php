<?php
echo "Test Hello, forgot Password "
//when the submit button is pressed this code will execute
if(isset($_POST["forgotPassword"])){
  //make connection to the database
  include("db_connection.php");
  //validate the user input and check if its an actual email
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "The Email address is not valid, please check again.";
  }else{
    //logic here
  }
}
?>

<form action="index.php" method="POST">
  To reset your password, please enter your email in the text box below:
  <input type="text" name="email" size="200" placeholder="Email"/>
  <input type="submit" name="forgotPassword" value=" Submit " />
</form>
