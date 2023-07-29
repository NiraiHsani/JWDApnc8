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
    <h2>TAMBAH DATA MAHASISWA</h2>
	<br/>
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<a href="mhs.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
	<br/>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>NPM</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
			<td>Program Studi</td>
				<td>
					<select name="program_studi">
						<option value="D3-TI">D3-TI</option>
						<option value="D3-TL">D3-TL</option>
						<option value="D3-TM">D3-TM</option>
						<option value="D3-TE">D3-TE</option>
						<option value="D4-TPPL">D4-TPPL</option>
						<option value="D4-PPA">D4-PPA</option>
						<option value="D4-ALKS">D4-ALKS</option>
						<option value="D4-RKS">D4-RKS</option>
						<option value="D4-TRM">D4-TRM</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
					<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>
				<select name="agama">
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Hindu">Hindu</option>
					<option value="Katholik">Katholik</option>
				</select>
				</td>
			</tr>
			<tr>
                <td>Alamat</td>
				<td colspan="2">
            		<textarea name="alamat" id="" cols="21" rows="4"></textarea>
          		</td>
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
