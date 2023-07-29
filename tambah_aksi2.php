<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data yang di kirim dari form
$kode_hs = $_POST['kode_hs'];
$npm = $_POST['npm'];
$kode_mk= $_POST['kode_mk'];
$nama = $_POST['nama'];
$program_studi= $_POST['program_studi'];
$nama_mk = $_POST['nama_mk'];
$semester = $_POST['semester'];
$nilai = $_POST['nilai'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO hasil_studi (kode_hs,npm,kode_mk,nama,program_studi,nama_mk,semester,nilai) values('$kode_hs','$npm','$kode_mk','$nama','$program_studi','$nama_mk','$semester','$nilai')");

// mengalihkan halaman kembali ke index.php
header("location:hasil.php");
 
?>