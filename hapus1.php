
<?php 

	# PROSES HAPUS
	# --------------------------------------------
	
	# memasukkan file koneksi
  	include "koneksi1.php";

	# sql & query hapus data dosen
	$sql_hapus1		= "DELETE FROM mata_kuliah
								WHERE kode_mk = '$_GET[kode_mk]'
								";
	$query_hapus1		= mysqli_query($koneksi, $sql_hapus1);

	# cek apakah proses hapus berhasil/tidak
	IF($query_hapus1 == TRUE) {
		# jika berhasil

		# beri alert & arahkan ke halaman hapus mata_kuliah
		echo "<script>
				window.alert('Sukses hapus mata_kuliah');
				window.location.href = 'matkul.php';
			</script>";
	
	} ELSE {
		# jika gagal
		
		# beri alert & arahkan ke halaman hapus mata_kuliah
		echo "<script>
				window.alert('Gagal hapus mata_kuliah');
				window.location.href = 'matkul.php';
			</script>";
	}
	
?>