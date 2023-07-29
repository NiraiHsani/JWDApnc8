<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data id yang di kirim dari url
$kode_hs = $_GET['kode_hs'];
 
 
// menghapus data dari database lalu dikembalikan ke halamn matakuliah
mysqli_query($koneksi,"delete from hasil_studi where kode_hs='$kode_hs'");
 
// mengalihkan halaman kembali ke index.php
header("location:hasil.php");

?>
<?php 

	# PROSES HAPUS
	# --------------------------------------------
	
	# memasukkan file koneksi
  	include "koneksi2.php";

	# sql & query hapus data dosen
	$sql_hasil_studi_hapus		= "DELETE FROM hasil_studi
								WHERE kode_hs = '$_GET[kode_hs]'
								";
	$query_hasil_studi_hapus		= mysqli_query($koneksi, $sql_hasil_studi_hapus);

	# cek apakah proses hapus berhasil/tidak
	IF($query_hasil_studi_hapus == TRUE) {
		# jika berhasil

		# beri alert & arahkan ke halaman dosen hapus
		echo "<script>
				window.alert('Sukses hapus dosen');
				window.location.href = 'dosen_tampil.php';
			</script>";
	
	} ELSE {
		# jika gagal
		
		# beri alert & arahkan ke halaman dosen hapus
		echo "<script>
				window.alert('Gagal hapus dosen');
				window.location.href = 'dosen_tampil.php';
			</script>";
	}
	
?>