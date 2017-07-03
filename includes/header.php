<!DOCTYPE html>
<html>
<?php
function setPageTitleAndDescription($title,$description){
  //re-using this function from my other projects
  echo "<head><title>$title</title>";
  echo '<meta name = "description" ';
  echo 'content = "';
  echo "$description >";
  echo '" </head>';
}
?>
<body>
