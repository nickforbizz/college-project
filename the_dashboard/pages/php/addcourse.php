<?php

require 'conn.php';
// print_r($_POST);

function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
$cname = validateStudent($_POST['cname']);
$camount = validateStudent($_POST['course_totalamnt']);
$type = validateStudent($_POST['type']);

$cduration = validateStudent($_POST['cduration']);

  # code...
  $conn2 = new MySQli('localhost', 'root', '', "finance");
  $sql = $conn->query("insert into courses (name,course_totalamnt, duration,type, status) values('$cname','$camount', '$cduration', '$type', '1')");
  $sql2 = $conn2->query("insert into courses_table (name,course_totalamnt, duration,type, status) values('$cname','$camount', '$cduration', '$type', '1')");
  echo $conn->error;

if ($sql && $sql2) {
  # code...
  echo "Course Added Succesfully";
}else {
  # code...
  echo "Something Went Wrong While Inserting Data in The Db";
  echo $conn->error;
}

 ?>
