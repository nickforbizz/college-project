<?php
require 'conn.php';
// print_r($_POST);
function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
$c_desc_id = validateStudent($_POST['c_desc_id']);
$course_description = validateStudent($_POST['course_description']);
$sql = $conn->query("update courses set c_description= '$course_description' where id = '$c_desc_id'");
if ($sql) {
  # code...
  echo "Saved Succesfully";
}else {
  # code...
  echo "Something Went Wrong";
}
echo $conn->error;
 ?>
