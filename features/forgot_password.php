<?php
//when the submit button is pressed this code will execute
if(isset($_POST["forgotPassword"])){
  //make connection to the database
  include("db_connection.php");
  //validate the user input and check if its an actual email
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "The Email address is not valid, please check again.";
  }else{
    $email = $conn->real_escape_string($_POST["email"]);
    $data = $conn->query("SELECT id FROM users WHERE email = '$email'");

    if($data->num_rows > 0){
      //defining a random string
      $token = "qwertyuiopasdf0123456789";
      $token = str_shuffle($token); //shuffling
      $token = substr($token, 0, 9); //returing part of string
      $url = "http://demo.navsingh.org.uk/rp/features/reset_password.php?token=$token&email=$email";
      echo "Check your email or use this link <a href='$url'> </br> Click me: $url</a>";
      $mailBody = "Please follow this link to reset your password $url";

      //sending the mail to the user
      mail($email, "Password Reset Request", $mailBody, "From: nvirk@gymandnutrition.com\r\n");

      //updating the database with the generated token
      $conn->query("UPDATE users SET token='$token' WHERE email='$email'");
    }else{
      echo "This email does not exist in our database. Please Consider Signingup on the site.</br>";
    }
  }
}
//References: https://www.youtube.com/watch?v=PHf4RzPYiMo
?>

<form action="index.php" method="POST">
  To reset your password, please enter your email in the text box below:
  <input type="text" name="email" size="200" placeholder="Email"/>
  <input type="submit" name="forgotPassword" value=" Submit " />
</form>
