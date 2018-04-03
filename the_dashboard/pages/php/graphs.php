<?php
require 'conn.php';

$a = $conn2->query("select *  from courses_table");
$b = $conn2->query("select *  from user_fees_table");
$c = $conn->query("select *  from notices");

$arraya = array();
while ($row1 =  $a->fetch_assoc()) {
  # code...
  array_push($arraya, $row1);
}
// echo json_encode($arraya);

$arrayb = array();
while ($row2 =  $b->fetch_assoc()) {
  # code...
  array_push($arrayb, $row2);
}
// echo json_encode($arrayb);

$arrayc = array();
while ($row2 =  $c->fetch_assoc()) {
  # code...
  $row2['notice'] = htmlspecialchars_decode($row2['notice']);
  array_push($arrayc, $row2);
}

$mainArray = array();
array_push($mainArray, $arraya);
array_push($mainArray, $arrayb);
array_push($mainArray, $arrayc);

echo json_encode($mainArray);


 ?>
