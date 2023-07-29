<?php 
// koneksi database
include 'koneksi1.php';
 
// menangkap data yang di kirim dari form
$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$semester = $_POST['semester'];
$jumlah_sks = $_POST['jumlah_sks'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO mata_kuliah (kode_mk, nama_mk, semester, jumlah_sks) values('$kode_mk', '$nama_mk', '$semester', '$jumlah_sks')");

// mengalihkan halaman kembali ke index.php
header("location:matkul.php");
 
?>