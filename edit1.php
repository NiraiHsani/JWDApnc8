  <head><script src="../assets/js/color-modes.js"></script>
<!-- mengambil template dashboard -->
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
<!-- mengedit data mata kuliah -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<br/>
    <h2>EDIT DATA MATA KULIAH</h2>
	<br/>
	<a href="matkul.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
	<br/>
 
	<!-- menggunakan primary key kode_mk -->
	<?php
	include 'koneksi1.php';
	$kode_mk = $_GET['kode_mk'];
	$data = mysqli_query($koneksi,"select * from mata_kuliah where kode_mk='$kode_mk'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update1.php">
			<table>
				<tr>			
					<td>Kode MK</td>
					<td>
						<input type="text" name="kode_mk" value="<?php echo $d['kode_mk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama MK</td>
					<td><input type="text" name="nama_mk" value="<?php echo $d['nama_mk']; ?>"></td>
				</tr>
				<tr>
				<td>Semester</td>
				<td><select name="semester" >
					<option value="I">I</option>
					<option value="II">II</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
					<option value="I">I</option>
					<option value="VI">VI</option>
					<option value="VII">VII</option>
					<option value="VIII">VIII</option>
				</td>
				<tr>
					<td>Jumlah SKS</td>
					<td><select name="jumlah_sks">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
				</td>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" button type="button" class="btn btn-primary"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</main>
  </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/kode_mk/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
