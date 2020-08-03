<?php 
require  '../vendor/autoload.php';
// initiate FPDI-FPDF
use setasign\Fpdi\Fpdi;
$pdf = new Fpdi();
$pdf->AddPage();
$pdf->setSourceFile("decesfrx.pdf");
$tplId = $pdf->importPage(13);
$pdf->useTemplate($tplId, 10, 10, 200);
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(54,41);$pdf->Write(0,'ETABLISSEMENT DE SANTE : ');
$pdf->SetFont('courier','B',12);$pdf->SetTextColor(255,0,0);

$pdf->SetXY(46,65);$pdf->Write(0,$_POST['comb_communed']);

$pdf->SetXY(42,68);$pdf->Write(0,$_POST['comb_wilayad']);

$pdf->SetXY(29,72);$pdf->Write(0,$_POST['fname']);      $pdf->SetXY(76,72);$pdf->Write(0,$_POST['lname']);

$pdf->SetXY(29,79);$pdf->Write(0,$_POST['lsexe']);

$pdf->SetXY(37,82.5);$pdf->Write(0,$_POST['fnamep']);   $pdf->SetXY(89,82.5);$pdf->Write(0,$_POST['lnamem']);

$pdf->SetXY(52,86);$pdf->Write(0,$_POST['ldnaisance']); $pdf->SetXY(90,86);$pdf->Write(0,$_POST['comb_wilaya']."-".$_POST['comb_commune']);

$pdf->SetXY(40,89.5);$pdf->Write(0,$_POST['ldéces']);  $pdf->SetXY(89,90);$pdf->Write(0,"00");

$pdf->SetXY(113,93.5);$pdf->Write(0,"00");$pdf->SetXY(128,93.5);$pdf->Write(0,"00");

$pdf->SetXY(43,161.5);$pdf->Write(0,$_POST['comb_wilayar']."-".$_POST['comb_communer']);

$pdf->Output($_POST['fname'].'_'.$_POST['lname'].".pdf","I");       