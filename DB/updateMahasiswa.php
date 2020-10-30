<?php
include 'connect-db.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$jurusan = $_POST['jurusan'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];


$query = mysqli_query($connect,"update `mahasiswa` SET `namalengkap`='$nama', `angkatan` = '$angkatan', `jurusan` = '$jurusan', `tempatlahir` = '$tempatlahir', `tanggallahir`='$tanggallahir' WHERE `mahasiswa`.`nim` = $nim");

if ($query) {
	header("location:../Mahasiswa.php?message=success");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);

?>