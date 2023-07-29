<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MATA KULIAH - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="matkul.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MATA KULIAH</h3>
 
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
					<td><input type="text" name="semester" value="<?php echo $d['semester']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah SKS</td>
					<td><input type="text" name="jumlah_sks" value="<?php echo $d['jumlah_sks']; ?>"></td>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>