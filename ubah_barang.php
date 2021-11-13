<!DOCTYPE html>
<html>
<head>
	<title>Ubah Barang</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<?php 
	include "koneksi.php";
	$qry_get_barang=mysqli_query($conn, "select * from barang where 
	id_barang = '".$_GET['id_barang']."'");
	$dt_barang=mysqli_fetch_array($qry_get_barang);
	?>
	<h3>UBAH BARANG</h3>
	<nav>
		<ul>
			<li><a href="tampil_barang.php">Tampil Barang</a></li>
			<li><a href="tambah_barang.php">Tambah Barang</a></li>
			<li><a href="tampil_pesanan.php">Tampil Pesanan</a></li>
		</ul>
	</nav>
	<div class="tambah">
	<form action="proses_ubah_barang.php" method="post">
		<input type="hidden" name="id_barang" value="<?=$dt_barang['id_barang']?>"><br>
		Kode Barang : <br>
		<input type="text" name="kode_barang" value="<?=$dt_barang['kode_barang']?>" class="it"><br>
		Nama Barang : <br>
		<input type="text" name="nama_barang" value="<?=$dt_barang['nama_barang']?>" class="it"><br>
		Stok Barang : <br>
		<input type="text" name="stok_barang" value="<?=$dt_barang['stok_barang']?>" class="it"><br>
		<input type="submit" name="simpan" value="Ubah Barang" class="ubah">
	</form>
	</div>
</body>
</html>