<?php
require 'conn.php';
function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
$var = validateStudent($_POST['search_notices_input']);

$note = array();

if($var!="")
$q = $conn->query("select posted_by, title, notice, id from notices where posted_by  like '%$var%' or  title like '%$var%'");
else {
  $q = $conn->query("select posted_by, title, notice from notices where posted_by  ='$var' or  title ='$var'");

}

while ($a = $q->fetch_assoc()) {
  # code...
  // $note = htmlspecialchars_decode( $note );
  // echo $note;
  array_push($note, $a);

}

// if($a = $q->fetch_assoc() ){
//   array_push($note, $a);
// }else {
//   return false;
// }
echo json_encode($note);
echo $conn->error;
 ?>
