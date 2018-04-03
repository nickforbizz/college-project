<?php

require 'conn.php';
function validateStudent($name){
  // $name = trim($name);
  // $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
print_r($_POST);
$title =  validateStudent($_POST['title']);
$text =  validateStudent($_POST['text']);

$notice = $conn->query("insert into notices (posted_by, notice, title ) values('ADMIN','$text', '$title')");
if ($notice) {
  # code...
  echo "Succesfully Saved";
}else {
  # code...
  echo "An Error Occured";
}

echo $conn->error;
 ?>
