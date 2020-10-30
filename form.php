<?php

if (isset($_GET['tambah'])) {
	if ($_GET['tambah'] == "mahasiswa") {
		include 'form/tambahMahasiswa.php';
	} else if ($_GET['tambah'] == "dosen") {
		include 'form/tambahDosen.php';
	} else if ($_GET['tambah'] == "sertifikat") {
		include 'form/tambahSertifikat.php';
	} 
} else if (isset($_GET['print'])) {
	include 'form/print-Sertifikat.php';
} else if (isset($_GET['update'])) {
	if ($_GET['update'] == "mahasiswa") {
		include 'form/updateMahasiswa.php';
	} else if ($_GET['update'] == "dosen") {
		include 'form/updateDosen.php';
	} else if ($_GET['update'] == "sertifikat") {
		include 'form/updateSertifikat.php';
	} 
}

?>