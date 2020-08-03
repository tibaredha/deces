<?php 

require  '../vendor/autoload.php';

// initiate FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('courier','B',10);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY(89,83+3);
$pdf->Write(0,'fsfsdfsdfsdf');
$pdf->Output();
