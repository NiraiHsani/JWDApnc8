<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MATA KULIAH - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="tambah1.php">+ TAMBAH MATA KULIAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Kode MK</th>
			<th>Nama MK</th>
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
					<a href="edit.php?kode_mk=<?php echo $d['kode_mk']; ?>">EDIT</a>
					<a href="hapus.php?kode_mk=<?php echo $d['kode_mk']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>