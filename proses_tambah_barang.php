<?php 
if ($_POST) {
	$kode_barang=$_POST['kode_barang'];
	$nama_barang=$_POST['nama_barang'];
	$stok_barang=$_POST['stok_barang'];
	if (empty($kode_barang)) {
		echo "<script>alert('Kode Barang Tidak Boleh Kosong');location.href='tambah_barang.php';</script>";
	}elseif (empty($nama_barang)) {
		echo "<script>alert('Nama Barang Tidak Boleh Kosong');location.href='tambah_barang.php';</script>";
	}elseif (empty($stok_barang)) {
		echo "<script>alert('Stok Barang Tidak Boleh Kosong');location.href='tambah_barang.php';</script>";
	}else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into barang (kode_barang, nama_barang, stok_barang) value ('".$kode_barang."','".$nama_barang."','".$stok_barang."')");
		if ($insert) {
			echo "<script>alert('Sukses Menambahkan Barang');location.href='tambah_barang.php';</script>";
		}else{
			echo "<script>alert('Gagal Menambahkan Barang');location.href='tambah_barang.php';</script>";
		}
	}
}
?>