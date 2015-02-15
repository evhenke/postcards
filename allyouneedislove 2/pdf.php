<?php
define('FPDF_FONTPATH','fpdf/font/');
require_once('fpdf/fpdf.php');
require_once('fpdi/fpdi.php');

// initiate FPDI
// Create a pdf in portrait mode 
// with millimeters as a unit and 110x160mm size
$pdf = new FPDI('P','mm',array(110,160));

// Sets the margins of the pdf 
$pdf->SetMargins(0,0,0);


// ===========================================
// Sets the colors
$color = $_GET["color"];
switch ($color) {
	case "dark":
		$background_R = 145;
		$background_G = 152;
		$background_B = 167;
		$text_R = 217;
		$text_G = 195;
		$text_B = 122;
		$star_file = "sternchen-gold.pdf";
		break;
		
	case "light":
		$background_R = 227;
		$background_G = 227;
		$background_B = 230;
		$text_R = 114;
		$text_G = 116;
		$text_B = 122;
		$star_file = "sternchen-grau.pdf";
		break;
		
	case "gold":
		$background_R = 217;
		$background_G = 195;
		$background_B = 122;
		$text_R = 88;
		$text_G = 88;
		$text_B = 91;
		$star_file = "sternchen-hellgrau.pdf";
		break;
		
	case "pink":
		$background_R = 218;
		$background_G = 179;
		$background_B = 212;
		$text_R = 242;
		$text_G = 241;
		$text_B = 242;
		$star_file = "sternchen-hellgrau.pdf";
		break;
		
	case "mint":
		$background_R = 216;
		$background_G = 237;
		$background_B = 226;
		$text_R = 114;
		$text_G = 116;
		$text_B = 122;
		$star_file = "sternchen-weiss.pdf";
		break;
}

$pdf->SetFillColor($background_R, $background_G, $background_B);
// Draws a filled rectangle for the background.
$pdf->Cell(110,160,'',0,0,'C',true);

// ===========================================


// ===========================================
// set the source file
$pdf->setSourceFile("kleiner-maulwurf.pdf");
// import the first page of the pdf
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
// $pdf->useTemplate($tplIdx, 0, 0, 110);
$pdf->useTemplate($tplIdx);

// ===========================================


// ===========================================
// Adding the stars (a 2nd pdf on top of the 1st one)
$pdf->setSourceFile($star_file);
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx);

// ===========================================


// ===========================================
// now write some text 
// $pdf->SetFont('Helvetica');
$pdf->SetFont('Courier','',10);
$pdf->SetTextColor($text_R, $text_G, $text_B);


//$text = htmlspecialchars($_GET["line1"]);
$text = htmlspecialchars_decode(utf8_decode($_GET["line1"]));

$textSize = $pdf->GetStringWidth($text);
$x = (110 - $textSize)/2;
$pdf->SetXY($x, 125);
$pdf->Write(0, $text);

$text = htmlspecialchars(utf8_decode($_GET["line2"]));
$textSize = $pdf->GetStringWidth($text);
$x = (110 - $textSize)/2;
$pdf->SetXY($x, 132);
$pdf->Write(0, $text);

// ===========================================

// Finishing the pdf.
$pdf->Output();
?>