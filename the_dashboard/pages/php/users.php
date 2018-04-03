<?php

require 'conn.php';

$query = $conn2->query("select id,username,email from admins ");

$arrayName = array( );
while ($a = $query->fetch_assoc()) {
  # code...
  array_push($arrayName, $a);

}
echo json_encode($arrayName);


 ?>
