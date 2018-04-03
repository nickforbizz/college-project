<?php
require 'conn.php';

$sql = $conn2->query("select * from user_fees_table order by id");

$examsArray = array ();
while ($a = $sql->fetch_assoc()) {
  # code...
  array_push($examsArray, $a );
}

echo json_encode($examsArray);

 ?>
