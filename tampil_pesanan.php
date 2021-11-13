<!DOCTYPE html>
<html>
<head>
	<title>Tampil Pesanan</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h3>DAFTAR PESANAN</h3>
	<nav>
		<ul>
			<li><a href="tambah_pesanan.php">Tambah Pesanan</a></li>
			<li><a href="tampil_barang.php">Tampil Barang</a></li>
			<li><a href="tambah_barang.php">Tambah Barang</a></li>
		</ul>
	</nav>
	<table>
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>WAKTU PESANAN</th>
				<th>BARANG</th>
				<th>JUMLAH</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "koneksi.php";
			$qry_pesanan=mysqli_query($conn,"select * from pesanan join barang on barang.id_barang=pesanan.id_barang");
			$no=0;
			while ($data_pesanan=mysqli_fetch_array($qry_pesanan)) {
				$no++;?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_pesanan['nama']?></td>
					<td><?=$data_pesanan['alamat']?></td>
					<td><?=$data_pesanan['waktu_pesanan']?></td>
					<td><?=$data_pesanan['nama_barang']?></td>
					<td><?=$data_pesanan['jumlah']?></td>
					<td><a href="ubah_pesanan.php?id_pesanan=<?=$data_pesanan['id_pesanan']?>" class="ubah">Ubah</a> | <a href="hapus_pesanan.php?id_pesanan=<?=$data_pesanan['id_pesanan']?>" onclick="return confirm('Apakah anda yakin menghapus pesanan ini')" class="hapus">Hapus</a> </td>
				</tr>
				<?php 
				}
				?>
		</tbody>
	</table>
</body>
</html>