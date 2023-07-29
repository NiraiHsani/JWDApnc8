  <head><script src="../assets/js/color-modes.js"></script>

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

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<br/>
    <h2>Tabel Tambah Nilai </h2>
	<br/>
   	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<a href="hasil.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
		<br>
		<form method="post" action="tambah_aksi2.php">
			<table>
			<tr>			
				<td>Kode Hasil Studi</td>
				<td><input type="text" name="kode_hs"></td>
			</tr>
			<tr>
				<td>NPM Mahasiswa</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td>Kode Mata Kuliah</td>
				<td><input type="text" name="mata_kuliah_kode_mk"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td><input type="text" name="program_studi"></td>
			</tr>
			<tr>
				<td>Nama Mata Kuliah</td>
				<td><input type="text" name="nama_mk"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="text" name="semester_hs"></td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td><input type="text" name="nilai"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" button type="button" class="btn btn-primary"></td>
			</tr>		
		</table>
	</form>
</main>
  </div>
</div>
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/kode_mk/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
