<?php
// pendefinisian folder font pada FPDF
define('FPDF_FONTPATH', 'FPDF/font/');
require('FPDF/fpdf.php');

// seperti sebelunya, kita membuat class anakan dari class FPDF
 class PDF extends FPDF{

  function Header(){
   $this->SetFont('Arial','B','12'); // font yang digunakan
   // membuat cell dg panjang 19 dan align center 'C'
  $this->Cell(5,1,'NUMBER : Un.05/',0,0,'L');
  $this->Cell(19,1,'MINISTRY OF RELIGIOUS AFFAIRS
          STATE OF ISLAMIC UNIVERSITY
          SUNAN GUNUNG DJATI BANDUNG',0,0,'C');
   $this->Ln();
   $this->Cell(19,1,'Sekolah Sementara',0,0,'C');
   $this->Ln();
   $this->SetFont('Arial','B','9');
   $this->SetFillColor(192,192,192); // warna isi
   $this->SetTextColor(0,0,0); // warna teks untuk th
   $this->Cell(6);
   $this->Cell(1,1,'No','TB',0,'L',1); // cell dengan panjang 1
   $this->Cell(1,1,'Kode','TB',0,'L',1); // cell dengan panjang 1
   $this->Cell(2,1,'Nama','TB',0,'L',1); // cell dengan panjang 2
   $this->Cell(3,1,'Alamat','TB',0,'L',1); // cell dengan panjang 3
   // panjang cell bisa disesuaikan
   $this->Ln();
  }

  function Footer(){
   $this->SetY(-2,5);
   $this->Cell(0,1,$this->NL(),0,0,'L');

  } 
  $pdf = new PDF('P','cm','A4');
 $pdf->Open();
 $pdf->AliasNbPages();
 $pdf->AddPage();

 }
  $pdf->Output();