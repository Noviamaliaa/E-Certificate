<?php

if ($_GET['tambah'] == "mahasiswa") {
	include 'form/tambahMahasiswa.php';
} else if ($_GET['tambah'] == "dosen") {
	include 'form/tambahDosen.php';
}  else if ($_GET['tambah'] == "jurusan") {
	include 'form/tambahJurusan.php';
} else if ($_GET['tambah'] == "sertifikat") {
	include 'form/tambahSertifikat.php';
}

?>