

<?php
require 'conn.php';
// print_r($_POST);
function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
if (isset($_POST['regNo'])) {
  # code...
  $regNo = validateStudent($_POST['regNo']);

  $sq = $conn2->query("select * from user_fees_table where user_reg='$regNo'");

  $getfeestuct = array();
  while ($a = $sq->fetch_assoc()) {
    # code...
    array_push($getfeestuct, $a);
  }
  echo json_encode($getfeestuct);
}
echo $conn2->error;
// $sql = $conn->query("
//
//   select s.reg_number, s.fname, s.lname,  c.name coursename, cc.paid paid, cc.remaining Balance, cc.updated_at Updated_Date
//   from students s
//
//   left join user_fees cc on cc.id=s.user_fees
//   left join courses c on c.id=s.courses
//   where s.`status`='1' limit 2;
//   ");
// while ($a = $sql->fetch_assoc()) {
//   echo "<tr>";
//   echo "<td>".$a['reg_number']."</td>";
//   echo "<td>".$a['fname']."</td>";
//   echo "<td>".$a['lname']."</td>";
//   echo "<td>".$a['coursename']."</td>";
//   echo "<td>".$a['paid']."</td>";
//   echo "<td>".$a['Balance']."</td>";
//   echo "<td>".$a['paymode']."</td>";
//   echo "<td>".$a['Updated_Date']."</td>";
//   echo "</tr>";
// }

 ?>
