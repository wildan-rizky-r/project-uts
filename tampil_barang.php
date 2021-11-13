<!DOCTYPE html>
<html>
<head>
	<title>Tampil Barang</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h3>DAFTAR BARANG</h3>
	<nav>
		<ul>
			<li><a href="tambah_barang.php">Tambah Barang</a></li>
			<li><a href="tampil_pesanan.php">Tampil Pesanan</a></li>
			<li><a href="tambah_pesanan.php">Tambah Pesanan</a></li>
		</ul>
	</nav>
	<table>
		<thead>
			<tr>
				<th>NO</th>
				<th>KODE BARANG</th>
				<th>NAMA BARANG</th>
				<th>STOK BARANG</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "koneksi.php";
			$qry_barang = mysqli_query($conn,"select * from barang");
			$no = 0;
			while ($data_barang = mysqli_fetch_array($qry_barang)) {
			$no++;?>
			<tr>
			<td><?=$no?></td><td><?=$data_barang['kode_barang']?></td><td><?=$data_barang['nama_barang']?></td> <td><?=$data_barang['stok_barang']?></td>

			<td><a href="ubah_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="ubah">Ubah</a> | <a href="hapus_barang.php?id_barang=<?=$data_barang['id_barang']?>" onclick="return confirm('Apakah anda yakin ingin menghapus barang ini???')" class="hapus">Hapus</a> | <a href="ubah_stok_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="simpan">Ubah Stok</a></td>
			</tr>
			<?php 
			}
			?>
			</tbody>
	</table>

</body>
</html>