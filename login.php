<?php
require './the_dashboard/pages/php/conn.php';

function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
// echo md5('qwerty1234');
// print_r($_POST);
if (!empty($_POST['user']) && !empty($_POST['password'] )) {

  $username = validateStudent($_POST['user']);
  $password = validateStudent($_POST['password']);

  $password_hash = md5($password);

  $sql = $conn2->query("select id, username, password from admins where username = '$username' and password = '$password_hash'");

 $sql_num_rows = $sql->num_rows;
 if ($sql_num_rows == 0) {
   # code...
   echo "No Such UserName";
 }elseif ($sql_num_rows == 1) {
   # code...
   session_start();
   echo "string";
   $user_name = $sql->fetch_assoc('username');
		$_SESSION['username'] = $user_name;
		echo header('Location: ./the_dashboard/pages/index.html');
 }
  if ($a = $sql->fetch_assoc()) {
    # code...
    echo $a['username'];
  }else {
    echo "Regester";
  }

}else {
  echo "Nothing was set";
}

 ?>
