<?php
date_default_timezone_set('Asia/Jakarta');
include('DB/connect-db.php');
require('FPDF/fpdf.php');
// $noseri = $_GET['nomorsertifikat'];
// $noseri= mysqli_query($connect, "select * from sertifikat where nomorsertifikat = $noseri");
// $noseri = mysqli_fetch_row($noseri);
$sertifikat = mysqli_query($connect, "select * from sertifikat where nomorsertifikat = $noseri");
$sertifikat = mysqli_fetch_row($sertifikat);
$mahasiswa = mysqli_query($connect, "select * from mahasiswa where nim = ".$sertifikat[3]);
$mahasiswa = mysqli_fetch_row($mahasiswa);

class PDF extends FPDF
{

function Header()
{
  // setting properti font

  $this->SetFont('Arial','I',10);

  // menulis header

  $this->Cell(30,10,'NUMBER:Un.05/',0,0,'L');

  // membuat jarak terhadap cell sebelumnya

  $this->Cell(132);

  // membuat garis dari koordinat (11 mm, 18 mm) sampai koordinat (198 
  // mm,18 mm)

  $this->Line(11,18,198,18);

  // membuat space kosong antara header dengan teks konten

  $this->Ln(20);
}
}


$pdf=new PDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','B',10);

$pdf->Cell(0,10,'MINISTRY OF RELIGIUS AFFAIRS',0,2,'C');
$pdf->Cell(0,0,'STATE ISLAMIC UNIVERSITY',0,2,'C');
$pdf->Cell(0,10,'SUNAN GUNUNG DJATI BANDUNG',0,2,'C');
$pdf->SetFont('Times','',10);
$pdf->Cell(0,10,'herewith has declared that:.'.$mahasiswa[3],0,2,'C');
$pdf->Cell(0,10,'...........................',0,2,'C');
$pdf->Cell(0,10,'Student ID Number '.$mahasiswa[3],0,2,'C');
$pdf->MultiCell(0, 5, 'born in .............., has finished and fulfilled all the reqiurements at Study Program of ....................., therefore the University has conferred upon his the degree of:',0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'SARJANA ...............',0,2,'C');
$pdf->SetFont('Times','',10);
$pdf->Cell(30);
$pdf->Cell(0,10,'along with rights and obligations attached to the degree.',0,1);
$pdf->Cell(30);
$pdf->Cell(0,0,'Give in Bandunng, ..........',0,1);
$pdf->Cell(225, 10, '',0,0);
$pdf->Cell(0, 10,'RECTOR',0,1);
	$pdf->Ln(23);
	$pdf->SetFont('Times','B',9);
	$pdf->Cell(225, 5, '',0,0);
	$pdf->Cell(0, 5,'Rektor',0,1);
	$pdf->SetFont('Times','',11);
	$pdf->Cell(225, 5, '',0,0);
	$pdf->Cell(0, 5,'NIP.......... ',0,1);
$pdf->SetFont('Times','',10);
$pdf->Cell(0,10,'Date : ...........'.date('d-m-Y'),0,2,'C');
$pdf->Cell(0,10,'This is an authorized English Translation of the original diploma',0,2,'C');
$pdf->Cell(0,0,'issued by Islamic State University Sunan Gunung Djati Bandung',0,2,'C');
$pdf->Cell(0,15,'Faculty of ............',0,2,'C');
$pdf->Cell(0,-5,'Dekan,',0,2,'C');


$pdf->Output();
?>
