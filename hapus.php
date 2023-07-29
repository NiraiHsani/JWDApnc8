<?php 

	# PROSES HAPUS
	# --------------------------------------------
	
	# memasukkan file koneksi
  	include "koneksi.php";

	# sql & query hapus data dosen
	$sql_hapus		= "DELETE FROM mahasiswa
								WHERE npm = '$_GET[npm]'
								";
	$query_hapus		= mysqli_query($koneksi, $sql_hapus);

	# cek apakah proses hapus berhasil/tidak
	IF($query_hapus == TRUE) {
		# jika berhasil

		# beri alert & arahkan ke halaman hapus mata_kuliah
		echo "<script>
				window.alert('Sukses hapus mahasiswa');
				window.location.href = 'mhs.php';
			</script>";
	
	} ELSE {
		# jika gagal
		
		# beri alert & arahkan ke halaman hapus mata_kuliah
		echo "<script>
				window.alert('Gagal hapus mahasiswa');
				window.location.href = 'mhs.php';
			</script>";
	}
	
?>