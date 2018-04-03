<!-- userData session  -->
<?php
require 'conn.php';
if ( isset($_POST['regNo']) ){
  $regNo = $_POST['regNo'];
  $sql = $conn->query("SELECT * FROM studs") or die($conn->error);
  if (!$sql ) {
    echo "A probrem Occured";
  }else {
    if( $sql1 = $conn->query( "SELECT * FROM studs WHERE reg = '$regNo' " ) ){
      echo "<div class='table-responsive'>";
      echo "<table class='table'>";
        echo "<thead>";
          echo "<tr class='info'>";
          echo "<th>Reg Number</th>";
          echo "<th>First Name</th>";
          echo "<th>Last Name</th>";
          echo "<th>Amount</th>";
          $sql2 = $conn->query( "SELECT * FROM studs WHERE reg = '$regNo' " );
          if ($b = $sql2->fetch_assoc() ) {
            if ($b['credit'] == 0) {
              echo "<th>Debit</th>";
            }else {
              echo "<th>Credit</th>";
            }
          }
          echo "<th>Pay Mode</th>";
          echo "<th>Date paid</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($a = $sql1->fetch_assoc() ) {
            echo "<tr class='success'>";
              echo "<td>".$a['reg']."</td>";
              echo "<td>".$a['firstName']."</td>";
              echo "<td>".$a['lastName']."</td>";
              echo "<td>".$a['amount']."</td>";
              if ($a['credit'] == 0) {
                echo "<td>".$a['debit']."</td>";
              }else {
                echo "<td>".$a['credit']."</td>";
              }
              echo "<td>".$a['paymode']."</td>";
              echo "<td>".$a['update_date']."</td>";
            echo "</tr>";
            // $a['firstName'] = $fname;
            // $a['lastName'] = $lname;
            // $a['amount'] = $amt;
        }
      echo "</tbody>";
      echo "</table>";
      echo "</div>";
      // echo $fname;
    }else {
      echo "prob";
    }
  }
}else {
  return false;
}



?>
