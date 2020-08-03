<?php 

require  '../vendor/autoload.php';

// initiate FPDI-TCPDF
use setasign\Fpdi\Tcpdf\Fpdi;
$pdf = new Fpdi();
$pdf->AddPage();
$pdf->setSourceFile("decesfrx.pdf");
$tplId = $pdf->importPage(13);
$pdf->useTemplate($tplId, 10, 10, 200);
$pdf->SetFont('aefurat','B',20);
$pdf->SetXY(10,10);$pdf->Write(0,"طيبة");
$pdf->Output();            
