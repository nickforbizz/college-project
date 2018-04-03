<?php
require 'conn.php';

// print_r($_POST);
// echo "string";
$sql="insert into finance(amount,user,type,yersem,date_current,stud_crs,the_reg) values('$_POST[amount]','$_POST[user]','$_POST[type]','$_POST[yersem]','$_POST[date_current]','$_POST[stud_crs]', '$_POST[the_reg]')";
$sql2="insert into stud$_POST[user] (amount,type,yersem,date_current,stud_crs,regnumber) values('$_POST[amount]','$_POST[type]','$_POST[yersem]','$_POST[date_current]','$_POST[stud_crs]','$_POST[the_reg]')";

if($res=$conn->query($sql)){

  echo "Data Saved";
}else {
  echo $conn->error;
}



$conn2 = new MySQli($mysql_host, $mysql_user, $mysql_pass, "finance");


  if($res=$conn2->query($sql2) ){

    echo "No Probrem";
  }else {
    echo $conn2->error;
    echo "some probrem";
  }


// echo "data successfully ....";
$arrayCourses  = array();
// $getCourses =

 ?>
