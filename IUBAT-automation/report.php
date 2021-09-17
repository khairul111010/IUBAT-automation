<?php

$con = mysqli_connect("localhost","root","","course_offering");

if(!$con)
	echo "Could not connect to mysql server";

if(!mysqli_select_db($con,"course_offering"))
{

	echo "Database not connected";
}

$sql = "SELECT f_name,d_name,c_name,section,code,credit FROM ((faculty INNER JOIN department ON faculty_id = d_faculty_id) INNER JOIN course ON f_course_id = course_id)";

$records = mysqli_query($con,$sql);

require("library/fpdf.php");

$pdf = new FPDf('p','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',10);

$pdf->cell(30,10,"Faculty Name",1,0,'C');
$pdf->cell(30,10,"Department",1,0,'C');
$pdf->cell(40,10,"Course Name",1,0,'C');
$pdf->cell(30,10,"Section",1,0,'C');
$pdf->cell(30,10,"Course Code",1,0,'C');
$pdf->cell(15,10,"Credit",1,1,'C');

$pdf->SetFont('Arial','',10);



while ($row = mysqli_fetch_array($records)) {
	$pdf->cell(30,10,$row['f_name'],1,0,'C');
$pdf->cell(30,10,$row['d_name'],1,0,'C');
$pdf->cell(40,10,$row['c_name'],1,0,'C');
$pdf->cell(30,10,$row['section'],1,0,'C');
$pdf->cell(30,10,$row['code'],1,0,'C');
$pdf->cell(15,10,$row['credit'],1,1,'C');
}


$pdf->OutPut();



?>