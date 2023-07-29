<head><script src="../assets/js/color-modes.js"></script>
<!-- menambahkan template bootstrap -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Dashboard Template · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
	
<?php include 'header.php';
?>
<?php include 'sidebar.php';
?>

<!-- index data mata kuliah -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<br/>
    <h2>Tabel Hasil Studi Mahasiswa</h2>
	<br/>
   		<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<a href="tambah2.php"><button type="button" class="btn btn-secondary">Tambah</button></a>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <table border="1">
    <thead>
		<tr>
		<table class="table table-striped-columns">
			<th>NO</th>
			<th>Kode Hasil</th>
			<th>NPM</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama</th>
			<th>Program Studi</th>
			<th>Nama Mata Kuliah</th>
			<th>Semester</th>
			<th>Nilai</th>
		</tr>
</main>
		<?php 
		include 'koneksi2.php';
		$no = 1;
		$ambildata = mysqli_query($koneksi, "SELECT * FROM mahasiswa, mata_kuliah, hasil_studi 
		WHERE mahasiswa.npm = mata_kuliah.kode_mk = hasil_studi.kode_hs")  or die (mysqli_error($koneksi));

		while($tampil = mysqli_fetch_array($ambildata)){
			echo "
			<tr>
			<td align='center'>$no</td>
			<td align='center'>$tampil[npm]</td>
			<td >$tampil[nama]</td>
			<td align='center'>$tampil[kode_mk]</td>
			</tr>";
			$no++;
		}
		
?>
	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/kode_mk/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
