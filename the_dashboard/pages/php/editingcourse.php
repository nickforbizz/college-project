<?php

require 'conn.php';

function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}

print_r($_POST);
// $name = validateStudent($_POST['course_name']);
$duration = $_POST['course_duration'];
$id = $_POST['idcourse'];
$course_totalamnt = $_POST['course_totalamnt'];


if ($course_totalamnt == '') {
      $sql =$conn->query("update courses set  duration='$duration' where id = $id and status = 1");
      if ($sql) {
        # code...
        echo "Course Succesfully Changed";
      }else {
        # code...
        echo "Something Went Wrong";
      }
}elseif ($duration == '') {
      $sql =$conn->query("update courses set course_totalamnt='$course_totalamnt' where id = $id and status = 1");
      if ($sql) {
        # code...
        echo "Course Succesfully Changed";
      }else {
        # code...
        echo "Something Went Wrong";
      }
}else {
      $sql =$conn->query("update courses set  duration='$duration', course_totalamnt='$course_totalamnt' where id = $id and status = 1");
      if ($sql) {
        # code...
        echo "Course Succesfully Changed";
      }else {
        # code...
        echo "Something Went Wrong";
      }
}
echo $conn->error;
 ?>
