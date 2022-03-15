<?php
/**
 * Template Name: PDF MAKER
 */


require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/raprap-theme-lister/templates/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();

?>
