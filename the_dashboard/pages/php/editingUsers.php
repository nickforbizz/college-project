<?php

require 'conn.php';

function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
// print_r($_POST);
$user_name = validateStudent($_POST['user_name']);
$user_email = validateStudent($_POST['user_email']);
$id = validateStudent($_POST['idUser']);

$sql =$conn2->query("update admins set username='$user_name', email='$user_email' where id = $id");
if ($sql) {
  # code...
  echo "User Succesfully Changed";
}else {
  # code...
  echo "Something Went Wrong";
}
echo $conn->error;
 ?>
