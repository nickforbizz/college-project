<?php
require './php/conn.php';

function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}

// print_r($_POST);
if (!empty($_POST['user']) && !empty($_POST['password'] )) {

  $username = validateStudent($_POST['user']);
  $password = validateStudent($_POST['password']);

  $sql = $conn2->query("select username, password from admins where username = '$username' and password = '$password'");

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
