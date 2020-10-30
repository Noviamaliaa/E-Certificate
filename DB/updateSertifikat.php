<?php
include 'connect-db.php';

$nomor = $_POST['nomor'];
$nomorseri = $_POST['nomorseri'];
$nim = $_POST['nim'];
$dosen = $_POST['dosen'];
$tahun = $_POST['tahun'];
// $namagelar=$_POST['namagelar'];
// namagelar' = '$namagelar'

$query = mysqli_query($connect,"update `sertifikat` SET `nomorserisertifikat`='$nomorseri', `mahasiswa` = '$nim', `signed` = '$dosen', `tahun`= '$tahun' WHERE `sertifikat`.`nomorsertifikat` = $nomor");

if ($query) {
	header("location:../Sertifikat.php?message=success");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);

?>