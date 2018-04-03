<?php
require 'conn.php';
// print_r($_POST);
if ( isset($_POST['user_id']) ) {
  $user_id = $_POST['user_id'];
  $regNo1 = $_POST['user_regnumber'];

  $user_course = $_POST['user_course'];

//   $amtPaid = $_POST['amountPaid'];//   $modeOfPay = $_POST['modeOfPay'];//   $semester = $_POST['semester'];//   $course = $_POST['course'];//   $yr_date = $_POST['yr_date'];//   $year = $_POST['year'];//   $fees = $_POST['amount'];
  //

  $getTotalFees = $conn2->query("select course_totalamnt from courses_table where name = '$user_course';");

  $getTotalFees = $conn2->query("select course_totalamnt from courses_table where courses_table.id = '$user_course'");

  if ($getTotalFees->num_rows == 0) {
    # code...
    echo "Amount for this  .....Course, Semester, Year and Yr_Date are not set....";
  }else {
    # code...
    $totalFees = $getTotalFees->fetch_assoc();
    $totalFees = $totalFees['course_totalamnt'];
    (int) $totalFees;
    settype($totalFees, 'int');
    // echo gettype($totalFees)." ";
    // echo "fees: ".$totalFees."  ";

    $dateOfUpdate = date('d/m/Y');

    $get_vars = $conn->query("select * from finance where the_reg='$regNo1'");
    // foreach ( $get_vars->fetch_assoc() as $row_finance) {
    //   # code...
    // // }
    if ($row_finance = $get_vars->fetch_assoc()) {
      # code...
      $amtPaid = $row_finance['amount'];
      (int) $amtPaid;  settype($amtPaid, 'int');

      // echo $amtPaid;
      // echo gettype($amtPaid)."  ";


      $modeOfPay = $row_finance['type'];
      $regNo1 = $row_finance['the_reg'];
      $dateOfUpdate = $row_finance['time'];
      $semester = $row_finance['yersem'];
      $course = $row_finance['stud_crs'];
      $year = $row_finance['date_current'];


    function calcBal($value){
      global $totalFees, $conn2, $amtPaid,$conn, $modeOfPay, $regNo1, $dateOfUpdate,$semester, $course, $yr_date, $year,$fees;
      if ($value > $totalFees) {
        $bal = $value - $totalFees;
        $conn->query("UPDATE finance SET amount = $amtPaid, date_current = '$year', yersem = '$semester', stud_crs = '$course', type = '$modeOfPay' , credit = $bal, remaining = $bal WHERE the_reg ='".$conn2->real_escape_string($regNo1)."' ");
        $conn2->query("UPDATE user_fees_table SET debit = 0  WHERE user_reg ='$regNo1'");
      }elseif ($totalFees > $value) {
        $bal = $totalFees - $value;
        $conn->query("UPDATE finance SET amount = $amtPaid, date_current = '$year', yersem = '$semester', stud_crs = '$course', type = '$modeOfPay' ,  debit = $bal, remaining = $bal WHERE the_reg ='".$conn2->real_escape_string($regNo1)."' ");
        $conn2->query("UPDATE user_fees_table SET credit = 0  WHERE user_reg ='".$conn2->real_escape_string($regNo1)."'");
      }else {
        $bal = 0;
        $conn->query("UPDATE finance SET amount = $amtPaid, date_current = '$year', yersem = '$semester', stud_crs = '$course', type = '$modeOfPay' ,  debit = $bal, credit = $bal, remaining = $bal WHERE the_reg ='".$conn2->real_escape_string($regNo1)."'");
      }
    }
    $bal = calcBal($amtPaid);
    // echo $amtPaid;
    $sql3 = $conn->query("SELECT * FROM finance WHERE the_reg = '$regNo1' AND stud_crs = '$course' AND yersem = '$semester' AND date_current = '$year' ") or die($conn2->error);
    $array_pdf = array();
    if ($sql3) {
      # code...
      while ($a = $sql3->fetch_assoc()) {
        array_push($array_pdf, $a);
        }
      echo json_encode($array_pdf);
    }else {
      $conn->errors;
      echo "something else";
    }
 }
  }


}else {
  echo "ops";
}



 ?>
