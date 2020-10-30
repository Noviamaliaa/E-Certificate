<?php
include 'connect-db.php';

$id = $_GET['id'];

$query = mysqli_query($connect,"delete FROM `sertifikat` WHERE `sertifikat`.`nomorsertifikat` = $id");

if ($query) {
	header("location:../Sertifikat.php?message=deleted");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);
?>