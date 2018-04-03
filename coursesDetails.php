<?php
require './the_dashboard/pages/php/conn.php';

$sql = $conn2->query("select id, name, type, duration from courses_table");
$anarray = array();

while ($a = $sql->fetch_assoc()) {
  # code...
  array_push($anarray, $a);
}
echo json_encode($anarray);

 ?>
