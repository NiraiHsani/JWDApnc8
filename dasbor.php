  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Dashboard Template · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

	<!-- Halaman awal masuk login -->

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<?php include 'header.php';
?>
<?php include 'sidebar.php';
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <br>
      <h2>Tabel Mahasiswa</h2>
      <br/>
	  <div class="container">
		<br>
		<div class="float-right">
			<a href="library.php" target="library.php" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PRINT</a>
			<br>
			<br>
		</div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NPM</th>
              <th scope="col">Program Studi</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Agama</th>
              <th scope="col">Alamat</th>
            </tr>
            <br>
          </thead>
          <tbody>
          <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['npm']; ?></td>
				<td><?php echo $d['program_studi']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tempat_lahir']; ?></td>
				<td><?php echo $d['tanggal_lahir']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['agama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
			</tr>
			<?php 
		}
		?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<br/>
    <h2>Tabel Mata Kuliah </h2>
	<br/>
   		<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <table border="1">
    <thead>
		<div class="table-responsive small">
        <table class="table table-striped table-sm">
		<tr>
			<th>NO</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Semester</th>
			<th>Jumlah SKS</th>
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

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
