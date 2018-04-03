<?php
require 'conn.php';

$sql = $conn->query("select * from comments");

// $the_array = array();
if ($a = $sql->num_rows) {
  # code...
  if ($sql->num_rows > 0) {
    # code...
    echo $a;
  }else {
    echo '0';
  }
  // array_push($the_array, $a);
}
// echo json_encode($the_array);

 ?>
