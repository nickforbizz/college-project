<?php

require "conn.php";
// print_r($_POST);
$the_reg = $_POST['getstudState'];
// echo $the_reg;
$q = $conn->query("select reg_no, name, state from defer_cont where reg_no = '$the_reg'");
$w = $q->fetch_assoc();

$array1=array();
// $arrayName = array();

if($w) {
  # code..
  array_push($array1,$w);
}
echo json_encode($array1);

 ?>
