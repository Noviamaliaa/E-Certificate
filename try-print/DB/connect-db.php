<?php

$dbhost = 'localhost'; 
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'try-printDB';
// melakukan koneksi ke database
$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('koneksi gagal: '. $connect->connect_error);
}