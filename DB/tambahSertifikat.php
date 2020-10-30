<?php
include 'connect-db.php';

$nomor = $_POST['nomor'];
$nomorseri = $_POST['nomorseri'];
$nim = $_POST['nim'];
$dosen = $_POST['dosen'];
$tahun = $_POST['tahun'];
// $namagelar = $_POST['namagelar'];
$no = mysqli_query($connect,"select max(id) as nomor FROM sertifikat")->fetch_object()->nomor+1;


$query = mysqli_query($connect,"insert INTO `sertifikat` (`id`, `nomorsertifikat`, `nomorserisertifikat`, `mahasiswa`, `signed`, `tahun`) VALUES ('$no', '$nomor', '$nomorseri', '$nim', '$dosen', '$tahun')");

if ($query) {
	header("location:../Sertifikat.php?message=success");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);

?>