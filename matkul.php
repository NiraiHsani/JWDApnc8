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
    <h2>Tabel Mata Kuliah </h2>
	<br/>
   		<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<a href="tambah1.php"><button type="button" class="btn btn-secondary">Tambah</button></a>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <table border="1">
    <thead>
		<tr>
		<table class="table table-striped-columns">
			<th>NO</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Semester</th>
			<th>Jumlah SKS</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi1.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mata_kuliah");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_mk']; ?></td>
				<td><?php echo $d['nama_mk']; ?></td>
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['jumlah_sks']; ?></td>
				<td>
					<a href="edit1.php?kode_mk=<?php echo $d['kode_mk']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
					<a href="hapus1.php?kode_mk=<?php echo $d['kode_mk']; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data? ')">Hapus</button></a>
				</td>
			</tr>
			<?php 
		}
		?>
		</table>
      	</table>
      </div>
    </main>
  </div>
</div>

	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/kode_mk/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
