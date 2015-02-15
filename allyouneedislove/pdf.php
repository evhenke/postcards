<?php
define('FPDF_FONTPATH','fpdf/font/');
require_once('fpdf/fpdf.php');
require_once('fpdi/fpdi.php');

function hslToRgb( $h, $s, $l ){
    $r; 
    $g; 
    $b;

	$c = ( 1 - abs( 2 * $l - 1 ) ) * $s;
	$x = $c * ( 1 - abs( fmod( ( $h / 60 ), 2 ) - 1 ) );
	$m = $l - ( $c / 2 );

	if ( $h < 60 ) {
		$r = $c;
		$g = $x;
		$b = 0;
	} else if ( $h < 120 ) {
		$r = $x;
		$g = $c;
		$b = 0;			
	} else if ( $h < 180 ) {
		$r = 0;
		$g = $c;
		$b = $x;					
	} else if ( $h < 240 ) {
		$r = 0;
		$g = $x;
		$b = $c;
	} else if ( $h < 300 ) {
		$r = $x;
		$g = 0;
		$b = $c;
	} else {
		$r = $c;
		$g = 0;
		$b = $x;
	}

	$r = ( $r + $m ) * 255;
	$g = ( $g + $m ) * 255;
	$b = ( $b + $m  ) * 255;

    return array( floor( $r ), floor( $g ), floor( $b ) );
}

// initiate FPDI
// Create a pdf in portrait mode 
// with millimeters as a unit and 109x152mm size
$cardWidth = 109;
$cardHeight = 152;

$pdf = new FPDI('P','mm',array($cardWidth,$cardHeight));

// Sets the margins of the pdf 
$pdf->SetMargins(0,0,0);


// ===========================================
// Sets the colors
$color = htmlspecialchars_decode(utf8_decode($_GET["color"]));
$hsl = explode(",", $color); 

//echo $hsl[0], " ", $hsl[1], " ", $hsl[2], "</br>\n";

$heart1 = hslToRgb($hsl[0], $hsl[1]/100, $hsl[2]/100);
$heart2 = hslToRgb($hsl[0],58/100, 70/100);
$heart3 = hslToRgb($hsl[0],65/100, 75/100);
$heart4 = hslToRgb($hsl[0],58/100, 75/100);
$heart5 = hslToRgb($hsl[0],65/100, 80/100);
//
//echo $heart1[0], " ", $heart1[1], " ", $heart1[2], "</br>\n";
//echo $heart2[0], " ", $heart2[1], " ", $heart2[2], "</br>\n";
//


$pdf->SetFillColor(255, 255, 255);
// Draws a filled rectangle for the background.
$pdf->Cell($cardWidth,$cardHeight,'',0,0,'C',true);


// Square
$pdf->SetFillColor($heart1[0], $heart1[1], $heart1[2]);
$pdf->Rect(47.369, 57.544, 2.429, 2.429, 'F');
$pdf->Rect(44.411, 63.46, 2.429, 2.429, 'F');
$pdf->Rect(50.327, 63.46, 2.429, 2.429, 'F');
$pdf->Rect(53.285, 63.46, 2.429, 2.429, 'F');
$pdf->Rect(56.244, 66.418, 2.429, 2.429, 'F');
$pdf->Rect(50.327, 72.334, 2.429, 2.429, 'F');
$pdf->Rect(53.285, 72.334, 2.429, 2.429, 'F');


$pdf->SetFillColor($heart2[0], $heart2[1], $heart2[2]);
$pdf->Rect(50.327, 57.544, 2.429, 2.429, 'F');
$pdf->Rect(59.202, 57.544, 2.429, 2.429, 'F');
$pdf->Rect(44.411, 60.502, 2.429, 2.429, 'F');
$pdf->Rect(53.285, 60.502, 2.429, 2.429, 'F');
$pdf->Rect(62.16, 60.502, 2.429, 2.429, 'F');
$pdf->Rect(62.16, 63.46, 2.429, 2.429, 'F');
$pdf->Rect(47.369, 66.418, 2.429, 2.429, 'F');
$pdf->Rect(53.285, 69.376 , 2.429, 2.429, 'F');
$pdf->Rect(59.202, 69.376 , 2.429, 2.429, 'F');
$pdf->Rect(53.285, 75.292 , 2.429, 2.429, 'F');

$pdf->SetFillColor($heart3[0], $heart3[1], $heart3[2]);
$pdf->Rect(56.244 , 57.544, 2.429, 2.429, 'F');
$pdf->Rect(47.369, 63.46, 2.429, 2.429, 'F');
$pdf->Rect(56.244, 63.46, 2.429, 2.429, 'F');
$pdf->Rect(62.16, 66.418, 2.429, 2.429, 'F');

$pdf->SetFillColor($heart4[0], $heart4[1], $heart4[2]);
$pdf->Rect(47.369, 60.502, 2.429, 2.429, 'F');
$pdf->Rect(59.202, 60.502, 2.429, 2.429, 'F');
$pdf->Rect(50.327, 66.418, 2.429, 2.429, 'F');
$pdf->Rect(59.202, 66.418, 2.429, 2.429, 'F');
$pdf->Rect(47.369, 69.376, 2.429, 2.429, 'F');
$pdf->Rect(56.244 , 72.334, 2.429, 2.429, 'F');


$pdf->SetFillColor($heart5[0], $heart5[1], $heart5[2]);
$pdf->Rect(50.327, 60.502, 2.429, 2.429, 'F');
$pdf->Rect(56.244, 60.502, 2.429, 2.429, 'F');
$pdf->Rect(59.202, 63.46, 2.429, 2.429, 'F');
$pdf->Rect(44.411, 66.418, 2.429, 2.429, 'F');
$pdf->Rect(53.285, 66.418, 2.429, 2.429, 'F');
$pdf->Rect(50.327, 69.376, 2.429, 2.429, 'F');
$pdf->Rect(56.244 , 69.376, 2.429, 2.429, 'F');

// ===========================================


// ===========================================
// now write some text 
// $pdf->SetFont('Helvetica');
$pdf->SetFont('Courier','',10);
$pdf->SetTextColor($heart1[0], $heart1[1], $heart1[2]);
$pdf->SetFontSize(10);

$all = "all you need is love";
$textSize = $pdf->GetStringWidth($all);
$x = (109 - $textSize)/2;
$pdf->Text($x, 88.631, $all);



//$text = htmlspecialchars($_GET["line1"]);
$text = htmlspecialchars_decode(utf8_decode($_GET["line1"]));

$textSize = $pdf->GetStringWidth($text);
$x = (109 - $textSize)/2;
$pdf->SetXY($x, 105);
$pdf->SetTextColor(80, 80, 80);
$pdf->Write(0, $text);


// ===========================================

// Finishing the pdf.
$pdf->Output("AllYouNeedIsLove.pdf",'I');
?>