<?php
include 'connect-db.php';

$kodejurusan = $_POST['kodejurusan'];
$namajurusan = $_POST['namajurusan'];
$kodeperguruantinggi = $_POST['kodeperguruantinggi'];
$jurusan = $_POST['jurusan'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];


$query = mysqli_query($connect,"update `jurusan` SET `namajurusanlengkap`='$namajurusan', `kodeperguruantinggi` = '$kodeperguruantinggi', `jurusan` = '$jurusan' WHERE `jurusan`.`kodejurusan` = $kodejurusan");

if ($query) {
	header("location:../jurusan.php?message=success");
} else {
	// header("location:../jurusan.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);

?>