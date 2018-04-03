<?php

require 'conn.php';
function validatePostData($name){
    $name = trim($name);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    return $name;
  }
if (isset($_POST['amount'])) {
  # code...
  $amount = validatePostData($_POST['amount']);
  $semester = validatePostData($_POST['semester']);
  $course = validatePostData($_POST['courses']);
  $year = $_POST['year'];
  $yr_date = $_POST['yr_date'];
  echo $amount."  ".$semester."  ".$course."  ".$year."  ".$yr_date;

  $sql = $conn->query("INSERT into fees (course, year, semister, yr_date, amount) values($course, $year, $semester,$yr_date, $amount)");
  $sql = $conn2->query("INSERT into fees_table (course, year, semester, yr_date, amount) values($course, $year, $semester,$yr_date, $amount)");

  if ($sql) {
    # code...
    echo "Data Inserted Succesfully";
  }else {
    echo "Query didnt execute";
  }
}else {
  echo "Amount Not Set";
}


 ?>
