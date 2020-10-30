<?php
include 'connect-db.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$gelar = $_POST['gelar'];
$prodi = $_POST['prodi'];
$status = $_POST['status'];
$no = mysqli_query($connect,"select max(no) as nomor FROM dosen")->fetch_object()->nomor+1;


$query = mysqli_query($connect,"insert INTO `mahasiswa` (`no`, `nip`, `namadosen`, `gelar`, `prodi`, `status`) VALUES ('$no', '$nip', '$nama', '$gelar', '$prodi', '$status')");

if ($query) {
	header("location:../Dosen.php?message=success");
} else {
	// header("location:../Mahasiswa.php?message=$connect->error");
	echo $connect->error;
}
mysqli_close($connect);

?>