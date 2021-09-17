<?php

$con = mysqli_connect("localhost","root","","course_offering");

if(!$con)
	echo "Could not connect to mysql server";

if(!mysqli_select_db($con,"course_offering"))
{

	echo "Database not connected";
}

$sql = "select * FROM student";

$records = mysqli_query($con,$sql);

require("library/fpdf.php");

$pdf = new FPDf('p','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',10);

$pdf->cell(30,10,"Student ID",1,0,'C');
$pdf->cell(40,10,"Name",1,0,'C');
$pdf->cell(40,10,"Department",1,0,'C');
$pdf->cell(30,10,"Contact",1,1,'C');

$pdf->SetFont('Arial','',10);



while ($row = mysqli_fetch_array($records)) {
	$pdf->cell(30,10,$row['student_id'],1,0,'C');
$pdf->cell(40,10,$row['s_name'],1,0,'C');
$pdf->cell(40,10,$row['program'],1,0,'C');
$pdf->cell(30,10,$row['contact'],1,1,'C');
}


$pdf->OutPut();



?>

