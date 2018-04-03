<?php
require 'conn.php';

$sql="select s.*, c.name CourseName, r.name Religion, cy.name Constituency

from students s

left join courses c on c.id = s.courses
left join religion r on r.id = s.religion
left join constituency cy on cy.id = s.constituency
";
// $sql1="select name from courses limit 20";

$res=$conn->query($sql);
// $res1=$conn->query($sql1);

$array1=array();
// $arrayName = array();

while ($row=$res->fetch_assoc()) {
  # code..
  array_push($array1,$row);
}
echo json_encode($array1);

// while ($row=$res1->fetch_assoc()) {
//   # code..
//   array_push($arrayName,$row);
// }
// echo json_encode($arrayName);

 ?>
