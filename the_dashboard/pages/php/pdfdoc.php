<?php
require './conn.php';
require 'fpdf.php';
// include 'update_individual_fee.php';
$label='Thanks';
// echo "string";
// print_r($_POST);

if (isset($_POST['regNo1']) ) {
      $regNo1 = $_POST['regNo1'];

      // (int) $amtPaid;
      // settype($amtPaid, 'int');
      //  (int) $debited; settype($debited, 'int');
      //  (int) $credited; settype($credited, 'int');
      // settype($regestration, 'string');
      // $name = $fname." ".$lname;
      // if ($debited == 0) {
      //   $balance = 'Credit Of: '.$credited;
      // }elseif ($credited == 0){
      //   $balance = 'Debit Of: '.$debited;
      // }else {
      //   $balance = 0;
      // }
      // $getTotalFees = $conn2->query("SELECT totalfees FROM totalfee");
      // $totalFees = $getTotalFees->fetch_assoc();
      // $totalFees = $totalFees['totalfees'];
      // (int) $totalFees;
      // settype($totalFees, 'int');

      // printing pdf starts here
      class PDF extends FPDF
      {
          function ChapterTitle($label)
          {
              $this->SetFont('Arial','',14);
              $this->SetFillColor(200,220,255);
              // $this->Cell(30,5,'',0,0);
              $this->Cell(100,15,"$label",0,1,'C',true);
              $this->Ln(0);
          }
          function Footer()
          {
              $this->SetY(155);
              $this->SetFont('Arial','I',8);
              $this->Cell(0,10,'* The education you want. The attention you deserve *',0,0,'C');
          }
      }
      //  cell( width, height, text, border'0/1', line'0-right 1-nxtLine 2-below', allign'L,C,R', fill'true4paint false' )
      $pdf = new PDF('P','mm',array(140,175));
      $pdf->AddPage ();
      $pdf->SetFont('Times','',12);
      $pdf->Line(5,5,135,5);
      $pdf->Cell(0,5,'',0,1);
      $pdf->Cell(80,8,'',0,0);
      $pdf->Cell(40,8,'qwertycollege@gmail.com',0,1,'R');
      $pdf->Cell(80,8,'',0,0);
      $pdf->Cell(40,8,'@qwerty_students',0,1,'R');
      $pdf->Cell(80,8,'',0,0);
      $pdf->Cell(40,8,'$address',0,1,'R');
      $pdf->Cell(80,8,'',0,0);
      $pdf->Cell(40,8,'0722258694',0,1,'R');
      $pdf->Cell(10,5,'',0,1);
      $pdf->Ln(1);

      // $pdf->Cell(40,10,'QWERTY COMPUTER COLLEGE',0,1,'L');
      $pdf->ChapterTitle(' QWERTY COMPUTER COLLEGE');
      $pdf->Cell(0,0,'',0,1);
      $pdf->Cell(30,10,'');
      $pdf->Cell(50,10,'  Student Receipt',1,1);
      $pdf->Ln(1);
      $pdf->Line(5,78,135,78);

      // Name Header
      $getName = $conn->query("SELECT * FROM finance WHERE the_reg ='$regNo1'");
      $stud_full_details = $conn->query("select * from students WHERE regnumber ='$regNo1'");
      // $fname='';$lname='';$amtPaid=0;$modeOfPay='';$regestration='';$credited=0;$debited=0;$theDate='';
      while ($c = $getName->fetch_assoc()) {
        if ($cc = $stud_full_details->fetch_assoc()) {


        $pdf->Cell(40,10,'Name:',0,0,'L');
        // Fetch Name
        $pdf->Cell(40,10,$cc['fname']." ".$cc['lname'],0,1,'L');
        $pdf->Cell(0,0,'',0,1);
        }
        // Reg number
        $pdf->Cell(40,10,'Regestration Number: ',0,0,'L');
        $pdf->Cell(40,10,$c['the_reg'],0,1,'C');
        $pdf->Cell(0,0,'',0,1);

        if ($conn2->query("SELECT totalfees FROM fees_table")) {
          if ($a = $conn2->query("SELECT totalfees FROM fees_table")) {
            if ($v = $a->fetch_assoc()) {
              $pdf->Cell(40,10,'Total Amount: ',0,0,'L');
              $pdf->Cell(40,10,'Ksh '.$v['totalfees'],0,1,'C');
              $pdf->Cell(0,0,'',0,1);
            }
          }
        }

        // amt paid
        $pdf->Cell(40,10,'Amount Paid: ',0,0,'L');
        $pdf->Cell(40,10,'Ksh '.$c['amount'],0,1,'C');
        $pdf->Cell(0,0,'',0,1);
        if ($c['credit'] == 0 && $c['debit'] == 0 ) {
          $pdf->Cell(40,10,'Balance Report: ',0,0,'L');
          $pdf->Cell(40,10,'Ksh 0' ,0,1,'C');
          $pdf->Cell(0,0,'',0,1);
        }elseif ($c['debit'] == 0) {
          $pdf->Cell(40,10,'Balance Report: ',0,0,'L');
          $pdf->Cell(40,10,'Credit: Ksh'.$c['credit'] ,0,1,'C');
          $pdf->Cell(0,0,'',0,1);
        }else {
          $pdf->Cell(40,10,'Balance Report: ',0,0,'L');
          $pdf->Cell(40,10,'Debit: Ksh'.$c['debit'] ,0,1,'C');
          $pdf->Cell(0,0,'',0,1);
        }

        // mode of Payment
        $pdf->Cell(40,10,'paid Through: ',0,0,'L');
        $pdf->Cell(40,10,$c['type'],0,1,'C');
        $pdf->Cell(0,0,'',0,1);
        // date
        $pdf->Cell(40,10,'Date : ',0,0,'L');
        $pdf->Cell(40,10,$c['time'],0,1,'C');
        $pdf->Line(5,154,135,154);

      }
      // $pdf->Cell(40,10,'Name:',0,0,'L');
      // // Fetch Name
      // $pdf->Cell(40,10,$name,0,1,'L');
      // $pdf->Cell(0,0,'',0,1);
      // // Reg number
      // $pdf->Cell(40,10,'Regestration Number: ',0,0,'L');
      // $pdf->Cell(40,10,$regNo1,0,1,'C');
      // $pdf->Cell(0,0,'',0,1);
      // // Fetch Total amount
      // $pdf->Cell(40,10,'Total Amount: ',0,0,'L');
      // $pdf->Cell(40,10,$totalFees,0,1,'C');
      // $pdf->Cell(0,0,'',0,1);
      // // amt paid
      // $pdf->Cell(40,10,'Amount Paid: ',0,0,'L');
      // $pdf->Cell(40,10,$amtPaid,0,1,'C');
      // $pdf->Cell(0,0,'',0,1);
      // // Balance Report
      // $pdf->Cell(40,10,'Balance Report: ',0,0,'L');
      // $pdf->Cell(40,10,$balance,0,1,'C');
      // $pdf->Cell(0,0,'',0,1);
      // // mode of Payment
      // $pdf->Cell(40,10,'paid Through: ',0,0,'L');
      // $pdf->Cell(40,10,$modeOfPay,0,1,'C');
      // $pdf->Cell(0,0,'',0,1);
      // $pdf->Line(5,140,110,140);
      // // date
      // $pdf->Cell(40,10,'Date : ',0,0,'L');
      // $pdf->Cell(40,10,$theDate,0,1,'C');

      $filename = "studentReceipt.pdf";
      $pdf->Output();
}else {
  echo "Regestration not set";
}
?>
