<?php
require 'conn.php';

$sql = $conn2->query("select * from courses_table");

// $the_array = array();
if ($a = $sql->num_rows) {
  # code...
  echo $a;
  // array_push($the_array, $a);
}
// echo json_encode($the_array);

 ?>
