<?php
require 'conn.php';

$sql = $conn->query("select * from notices");

// $the_array = array();
if ($a = $sql->num_rows) {
  # code...
  // array_push($the_array, $a);
  echo $a;
}
// echo json_encode($the_array);

 ?>
