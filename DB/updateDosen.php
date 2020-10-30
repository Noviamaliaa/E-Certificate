<?php
include 'connect-db.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$gelar = $_POST['gelar'];
$prodi = $_POST['prodi'];
$status = $_POST['status'];


$query = mysqli_query($connect,"update `dosen` SET `namadosen`='$nama', `gelar` = '$gelar', `prodi` = '$prodi', `status` = '$status' WHERE `dosen`.`nip` = $nip");

if ($query) {
	header("location:../Dosen.php?message=success");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);

?>