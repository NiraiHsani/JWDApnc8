<?php 
// koneksi database
include 'koneksi1.php';
 
// menangkap data yang di kirim dari form
$kode_hs = $_POST['kode_hs'];
$npm = $_POST['npm'];
$kode_mk= $_POST['kode_mk'];
$nama = $_POST['nama'];
$program_studi= $_POST['program_studi'];
$nama_mk = $_POST['nama_mk'];
$semester = $_POST['semester'];
$nilai = $_POST['nilai']

// update data ke database
mysqli_query($koneksi,"update hasil_studi set npm='$npm', kode_mk='$kode_mk',
 nama='$nama', program_studi='$program_studi', nama_mk='$nama_mk', semester='$semester', nilai='$nilai' where kode_hs='$kode_hs'");
 
// mengalihkan halaman kembali ke index.php
header("location:hasil.php");
 
?>