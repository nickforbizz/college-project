<?php
require 'the_dashboard/pages/php/conn.php';
// print_r($_POST);

function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
$name = validateStudent($_POST['name']);
$email = validateStudent($_POST['email']);
$comments = validateStudent($_POST['comments']);

$sql = $conn->query("insert into comments (user, email, comments) values('$name','$email','$comments')");

if ($sql) {
  # code...
  echo "Data Posted";
}else {
  # code...
  echo "Something Went Wrong";
}

 ?>
