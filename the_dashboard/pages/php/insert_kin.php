<?php


require "conn.php";
$string="";
$string2="";
$num=0;
print_r($_POST);
    foreach ($_POST as $key => $value) {
    if($num==0){
      $string="$key";
      $string2="'$value'";
    }else {
        $string.=",$key";
        $string2.=",'$value'";
    }
    $num++;
    }
    if ($conn->query("insert into kins ($string) values($string2) ") )
    {
      echo "Saved Kin Succesfully";
    }else {
      # code...
      echo $conn->error;
    }


 ?>
