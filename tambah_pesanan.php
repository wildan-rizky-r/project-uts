<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pesanan</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h3>BUAT PESANAN</h3>
	<nav>
		<ul>
			<li><a href="tampil_pesanan.php">Tampil Pesanan</a></li>
		</ul>
	</nav>
	<div class="tambah">
		<form action="proses_tambah_pesanan.php" method="post">
			Nama : <br>
			<input type="text" name="nama" value="" class="it"><br>
			Alamat : <br>
			<textarea name="alamat" class="it" rows="4"></textarea><br>
			Waktu Pesanan : <br>
			<input type="date" name="waktu_pesanan" value="" class="it"><br>
			Barang : <br>
			<select name="id_barang" class="it">
				<option></option>
				<?php 
				include "koneksi.php";
				$qry_barang=mysqli_query($conn,"select * from barang");
				while ($data_barang=mysqli_fetch_array($qry_barang)) {
					echo '<option value="'.$data_barang['id_barang'].'">'.$data_barang['nama_barang'].'</option>';
				}
				?>
			</select><br>
			Jumlah : <br>
			<input type="text" name="jumlah" value="" class="it"><br>
			<input type="submit" name="simpan" value="simpan" class="simpan">
		</form>
	</div>
</body>
</html>