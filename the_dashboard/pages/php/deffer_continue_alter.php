<?php

require 'conn.php';

$cont_defer = $_POST['deferContinue'];
$sentreg = $_POST['regsend'];

$a = $conn->query("UPDATE defer_cont set state='$cont_defer' WHERE reg_no = '$sentreg'");
if ($a) {
  # code...
  echo "State was changed Succesfully";
}

 ?>
