<?php

require "conn.php";

function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}
$string="";
$string2="";

$num=0;

foreach ($_POST as $key => $value) {
if($num==0){
  $string="$key";
  $string2="'$value'";
}else {
  validateStudent($value);
    $string.=",$key";
    $string2.=",'$value'";
}


$num++;
}


if ($conn->query("insert into students ($string) values($string2) ")){

  $res=$conn->query("select  id, fname, regnumber, lname,courses from students where regnumber ='$_POST[regnumber]'");
if ($res) {
  # code...
  if($row=$res->fetch_assoc()) {
    # code...
    // $forfees = $conn2->query("select * from fees_table")
    $update_date = date('d/m/Y');
    $yr_date = date('Y');
    $conn2 = new MySQli($mysql_host, $mysql_user, $mysql_pass, "finance");

   $conn2->query("CREATE TABLE `stud$row[id]` ( `id` INT NOT NULL AUTO_INCREMENT ,  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,   `amount` FLOAT NOT NULL , `type` TEXT NOT NULL , `yersem` TEXT NOT NULL, `date_current` TEXT NOT NULL, `stud_crs` TEXT NOT NULL, `regnumber` TEXT NOT NULL,  PRIMARY KEY  (`id`)) ENGINE = InnoDB;");

   echo $conn2->error;


          // $conn2->query("insert into stud$row[id] (reg, firstName, lastName, update_date ) values('$row[regnumber]', '$row[fname]', '$row[lname]', '$update_date'  ) ");
  $conn->query("insert into defer_cont (name, reg_no, state) values('$row[lname]', '$row[regnumber]','CONTINUING' )");
  $conn2->query("insert into user_fees_table (user_reg, fname, lname, status,course, yr_date ) values('$row[regnumber]', '$row[fname]', '$row[lname]', '1','$row[courses], '$yr_date' ) ");
          // $conn2->query("insert into stud$row[id] (amount,type,yersem,stud_crs,regnumber) values()")
  } else {
    echo "failed";
  }
}else{
  echo "Somethingnot wright";
}
}


// $a = $conn->query("select id, reg_number from students")
// while ($b->$a->fetch_assoc()) {
//   # code...
//
// }
// $c = $conn->query("SELECT TOP 1 * FROM students ORDER BY ID DESC");
// $c = $c->fetch_assoc();
// $conn->query("insert into studs_update_fee s (s.reg)")

echo $conn->error;



 ?>
