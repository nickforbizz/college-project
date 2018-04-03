<?php
require 'conn.php';


$delid = $_POST['iddel'];
$sql = $conn->query("update courses set status = -1 where id='$delid'");

if ($sql) {
  # code...
  echo "Course Deleted Succesfully";
}else {
  # code...
  echo "Something Went Wrong";
}
echo $conn->error;
 ?>
