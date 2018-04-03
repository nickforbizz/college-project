<?php
require 'connectDb.php';
// print_r($_POST);
$regNo1 = " ";
if ( isset($_POST['regNo1']) ) {
  $regNo1 = $_POST['regNo1'];
  $amtPaid = $_POST['amountPaid'];
  $modeOfPay = $_POST['select'];
  $getTotalFees = $connDb->query("SELECT totalfees FROM totalfee");
  $totalFees = $getTotalFees->fetch_assoc();
  $totalFees = $totalFees['totalfees'];
  (int) $totalFees;
  settype($totalFees, 'int');
  // echo gettype($totalFees)."<br>";
  // echo $totalFees;
  $dateOfUpdate = date('d/m/Y');
    function calcBal($value){
      global $totalFees, $connDb, $amtPaid, $modeOfPay, $regNo1, $dateOfUpdate;
      if ($value > $totalFees) {
        $bal = $value - $totalFees;
        $connDb->query("UPDATE studs_update_fee SET amount = $amtPaid, paymode = '$modeOfPay' , update_date = '$dateOfUpdate', credit = $bal WHERE reg ='".$connDb->real_escape_string($regNo1)."'");
        $connDb->query("UPDATE studs_update_fee SET debit = 0  WHERE reg ='".$connDb->real_escape_string($regNo1)."'");
      }elseif ($totalFees > $value) {
        $bal = $totalFees - $value;
        $connDb->query("UPDATE studs_update_fee SET amount = $amtPaid , paymode = '$modeOfPay' , update_date = '$dateOfUpdate',  debit = $bal WHERE reg ='".$connDb->real_escape_string($regNo1)."'");
        $connDb->query("UPDATE studs_update_fee SET credit = 0  WHERE reg ='".$connDb->real_escape_string($regNo1)."'");
      }else {
        $bal = 0;
        $connDb->query("UPDATE studs_update_fee SET amount = $amtPaid, paymode = '$modeOfPay' , update_date = '$dateOfUpdate',  debit = $bal, credit = $bal WHERE reg ='".$connDb->real_escape_string($regNo1)."'");
      }
    }
    $bal = calcBal($amtPaid);
    $sql = $connDb->query("SELECT * FROM studs_update_fee WHERE reg = '$regNo1' ") or die($connDb->error);
    $fname = "";
    $amt = 0;
    $totalAmt = 0;
    // $bal = 0
    while ($a = $sql->fetch_assoc()) {
      $fname = $a['firstName'];
      $amt = $a['amount'];
    // $bal = $a['bal'];
  }
}else {
  return false;
}



 ?>
