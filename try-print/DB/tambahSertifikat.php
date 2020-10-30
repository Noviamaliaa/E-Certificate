<?php
include 'connect-db.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$jurusan = $_POST['jurusan'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$no = mysqli_query($connect,"select max(no) as nomor FROM mahasiswa")->fetch_object()->nomor+1;


$query = mysqli_query($connect,"insert INTO `mahasiswa` (`no`, `nim`, `namalengkap`, `angkatan`, `jurusan`, `tempatlahir`, `tanggallahir`) VALUES ('$no', '$nim', '$nama', '$angkatan', '$jurusan', '$tempatlahir', '$tanggallahir')");

if ($query) {
	header("location:../Mahasiswa.php?message=success");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);

?>