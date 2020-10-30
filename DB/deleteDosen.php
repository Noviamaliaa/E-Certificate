<?php
include 'connect-db.php';

$id = $_GET['id'];

$query = mysqli_query($connect,"delete FROM `dosen` WHERE `sertifikat`.`nip` = $id");

if ($query) {
	header("location:../Dosen.php?message=deleted");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);
?>