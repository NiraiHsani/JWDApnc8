<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MATA KULIAH- WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="matkul.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MATA KULIAH</h3>
	<form method="post" action="matkul.php">
		<table>
			<tr>			
				<td>Kode MK</td>
				<td><input type="text" name="kode_mk"></td>
			</tr>
			<tr>
				<td>Nama MK</td>
				<td><input type="text" name="nama_mk"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="text" name="semester"></td>
			</tr>
			<tr>
				<td>Jumlah SKS</td>
				<td><input type="text" name="jumlah_sks"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>