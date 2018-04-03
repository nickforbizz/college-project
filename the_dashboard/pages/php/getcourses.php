<?php

require 'conn.php';

$query = $conn->query("select * from courses where status = 1 ");

$arrayName = array( );
while ($a = $query->fetch_assoc()) {
  # code...
  array_push($arrayName, $a);

}
echo json_encode($arrayName);
 ?>
