<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('../TCPDF/tcpdf.php');

include 'conn.php';

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH);
// $pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

$date = date('d M Y');
$cat = $_SESSION['cat'] == 'Foreign Doctors' ? '$' : 'INR';
$gst_amt = $_SESSION['amtwithoutgst']/100*18;
$csgst_amt = ($_SESSION['amtwithoutgst']/100*18)/2;
// Set some content to print
$html = <<<EOD
<h1 style="text-align: center;">Tax Invoice</h1><br><br>
<h4 style="font-weight: bold; font-size: 10;">SPHERE (Society for Prevention ,Healthcare and <br> Research)</span><br>
<span>GSTIN - 27ABDAS3029A1ZW</span><br><br><br>
<span style="font-weight: bold;">Invoice: </span><span>#$_POST[reg_id]</span><br><br>
<span>$_SESSION[name]</span><br><br><br>
<span style="font-weight: bold;">GSTIN: <br></span><span> $_POST[gstin]</span><br><br>
<span style="font-weight: bold;">Issue Date: <br></span><span>$date</span><br><br>
<span style="font-weight: bold;">Billing Address: <br></span><span>$_SESSION[address]<br>$_SESSION[city]<br>$_SESSION[state]<br>$_SESSION[country]</span><br><br><br>
<table cellspacing="2" cellpadding="5">
    <tr>
        <td style="font-weight: bold; border-bottom: 1px solid black; border-top: 1px solid black;">DESCRIPTION</td>
        <td style="font-weight: bold; border-bottom: 1px solid black; border-top: 1px solid black;">UNIT PRICE</td>
        <td style="font-weight: bold; border-bottom: 1px solid black; border-top: 1px solid black;">QTY</td>
		<td style="font-weight: bold; border-bottom: 1px solid black; border-top: 1px solid black;">AMOUNT</td>
    </tr>
    <tr>
        <td>$_SESSION[type]</td>
        <td>$cat $_SESSION[amtwithoutgst]</td>
		<td>1</td>
		<td>$cat $_SESSION[amtwithoutgst]</td>
    </tr>
	<tr>
        <td></td>
        <td>CGST @ 9%</td>
		<td></td>
		<td>+ $csgst_amt</td>
    </tr>
	<tr>
        <td></td>
        <td>SGST @ 9%</td>
		<td></td>
		<td>+ $csgst_amt</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td style="font-size: 8;">Tax Exclusive, <br>Rounded-off</td>
    </tr>
    <tr>
        <td></td>
        <td>Sub Total</td>
        <td></td>
        <td >$cat $_SESSION[amtwithoutgst]</td>
    </tr>
    <tr>
        <td></td>
        <td>Total Tax</td>
        <td></td>
        <td>$cat $gst_amt</td>
    </tr>
    <tr>
        <td></td>
        <td style="font-weight: bold;">Total</td>
        <td></td>
        <td style="font-weight: bold;">$cat $_SESSION[amt]</td>
    </tr>
</table>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Invoice.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+
?>