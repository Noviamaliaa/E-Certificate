<?php
include 'connect-db.php';

$id = $_GET['id'];

$query = mysqli_query($connect,"delete FROM `mahasiswa` WHERE `sertifikat`.`nim` = $id");

if ($query) {
	header("location:../Mahasiswa.php?message=deleted");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);
?>