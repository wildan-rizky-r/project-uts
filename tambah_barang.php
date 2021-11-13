<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h3>TAMBAH BARANG</h3>
	<nav>
		<ul>
			<li><a href="tampil_barang.php">Tampil Barang</a></li>
		</ul>
	</nav>
	<form action="proses_tambah_barang.php" method="post">
		<div class="tambah">Kode Barang : <br>
		<input type="text" name="kode_barang" value="" class="it"><br>
		Nama Barang : <br>
		<input type="text" name="nama_barang" value="" class="it"><br>
		Stok Barang : <br>
		<input type="text" name="stok_barang" value="" class="it"><br>
		<input type="submit" name="simpan" value="simpan" class="simpan"></div>
	</form>
	
</body>
</html>