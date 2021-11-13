<!DOCTYPE html>
<html>
<head>
	<title>Ubah Pesanan</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<?php 
	include "koneksi.php";
	$qry_get_pesanan=mysqli_query($conn, "select * from pesanan where 
	id_pesanan = '".$_GET['id_pesanan']."'");
	$dt_pesanan=mysqli_fetch_array($qry_get_pesanan);
	?>
	<h3>UBAH PESANAN</h3>
	<nav>
		<ul>
			<li><a href="tampil_pesanan.php">Tampil Pesanan</a></li>
			<li><a href="tambah_pesanan.php">Tambah Pesanan</a></li>
			<li><a href="tampil_barang.php">Tampil Barang</a></li>
		</ul>
	</nav>
	<div class="tambah">
	<form action="proses_ubah_pesanan.php" method="post">
		<input type="hidden" name="id_pesanan" value="<?=$dt_pesanan['id_pesanan']?>"><br>
		Nama : <br>
		<input type="text" name="nama" value="<?=$dt_pesanan['nama']?>" class="it"><br>
		Alamat : <br>
		<textarea name="alamat" class="it" rows="4"><?=$dt_pesanan['alamat']?></textarea><br>
		Waktu Pesanan : <br>
		<input type="date" name="waktu_pesanan" value="<?=$dt_pesanan['waktu_pesanan']?>" class="it"><br>
		Barang : <br>
		<select name="id_barang" class="it">
			<option></option>
			<?php 
			include "koneksi.php";
			$qry_barang=mysqli_query($conn, "select * from barang");
			while ($data_barang=mysqli_fetch_array($qry_barang)) {
				if ($data_barang['id_barang']==$dt_pesanan['id_barang']) {
					$sel = "selected";
				} else {
					$sel="";
				}
				echo '<option value="'.$data_barang['id_barang'].'" '.$sel.'>'.$data_barang['nama_barang'].'</option>';
				}
			?>
		</select><br>		
		Jumlah : <br>
		<input type="text" name="jumlah" value="<?=$dt_pesanan['jumlah']?>" class="it"><br>
		<input type="submit" name="simpan" value="Ubah Pesanan" class="ubah">
	</form>
	</div>
</body>
</html>