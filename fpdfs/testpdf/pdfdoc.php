<?php
require('fpdf.php');
$label='Thanks';

class PDF extends FPDF
{
    function ChapterTitle($label)
    {
        $this->SetFont('Arial','',14);
        $this->SetFillColor(200,220,255);
        $this->Cell(100,15,"$label",0,1,'L',true);
        $this->Ln(0);
    }
    function Footer()
    {
        $this->SetY(145);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'The education you want. The attention you deserve',0,0,'C');
    }
}
//  cell( width, height, text, border'0/1', line'0-right 1-nxtLine 2-below', allign'L,C,R', fill'true4paint false' )
$pdf = new PDF('P','mm',array(140,160));
$pdf->AddPage ();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,'@qwerty_students',0,1,'R');
$pdf->Cell(0,5,'$address',0,1,'R');
$pdf->Cell(0,5,'$email',0,1,'R');
$pdf->Cell(0,5,'0722258694',0,1,'R');
$pdf->Cell(0,0,'',0,1);
$pdf->Ln(1);

// $pdf->Cell(40,10,'QWERTY COMPUTER COLLEGE',0,1,'L');
$pdf->ChapterTitle('  QWERTY COMPUTER COLLEGE');
$pdf->Cell(0,0,'',0,1);
$pdf->Cell(0,15,'  Student Receipt',0,1,'C');
$pdf->Ln(1);

// Name Header
$pdf->Cell(40,10,'Name:',0,0,'L');
// Fetch Name
$pdf->Cell(40,10,'Edwin Njau',0,1,'L');
$pdf->Cell(0,0,'',0,1);
// Reg number
$pdf->Cell(40,10,'Regestration Number: ',0,0,'L');
$pdf->Cell(40,10,'01',0,1,'C');
$pdf->Cell(0,0,'',0,1);
// Fetch Total amount
$pdf->Cell(40,10,'Total Amount: ',0,0,'L');
$pdf->Cell(40,10,'20000',0,1,'C');
$pdf->Cell(0,0,'',0,1);
// amt paid
$pdf->Cell(40,10,'Amount Paid: ',0,0,'L');
$pdf->Cell(40,10,'500',0,1,'C');
$pdf->Cell(0,0,'',0,1);
// Balance Report
$pdf->Cell(40,10,'Balance Report: ',0,0,'L');
$pdf->Cell(40,10,'credit',0,1,'C');
$pdf->Cell(0,0,'',0,1);
$pdf->Line(5,140,110,140);
// date
$pdf->Cell(40,10,'Date : ',0,0,'L');
$pdf->Cell(40,10,'08/012018',0,1,'C');

// Footer
// $pdf->Footer();
// $pdf->cell(40,10,'The education you want. The attention you deserve',0,1);

$filename = "studentReceipt.pdf";
$pdf->Output($filename,'I');
?>
