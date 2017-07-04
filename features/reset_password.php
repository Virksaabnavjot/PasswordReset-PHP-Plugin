<?php
if($_GET['email'] && $_GET['token'])
{
  $email=$_GET['email'];
  $token=$_GET['token'];
  include("../db_connection.php");
  $data = $conn->query("SELECT id FROM users WHERE email='$email' AND token='$token'");
  if($data->num_rows > 0)
  {
    ?>

    <form method="post" action="submit_password.php">
      <input type="hidden" name="email" value="<?php echo $email;?>">
      <p>Enter New password</p>
      <input type="password" name='password'>
      <input type="submit" name="submit_password" value=" Reset Password ">
    </form>

    <?php
  }
}
?>
