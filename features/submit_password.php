<?php
if(isset($_POST['submit_password'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];
  include("../db_connection.php");
  $data = $conn->query("UPDATE users SET password='$pass' where email='$email'");
  echo "Password was sucessfully changed.";
}else{
  echo "Sorry, Something went wrong.";
}
//references: http://talkerscode.com/webtricks/password-reset-system-using-php.php
?>
