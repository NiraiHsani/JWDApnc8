<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$npm = $_POST['npm'];
$program_studi = $_POST['program_studi'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi,"update mahasiswa set program_studi='$program_studi', nama='$nama', tempat_lahir='$tempat_lahir', 
tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat' where npm='$npm'");
 
// mengalihkan halaman kembali ke index.php
header("location:mhs.php");
 
?>