<?php 
if ($_POST) {
	$id_barang=$_POST['id_barang'];
	$kode=$_POST['kode_barang'];
	$nama=$_POST['nama_barang'];
	$stok=$_POST['stok_barang'];
	if (empty($kode)) {
		echo "<script>alert('Kode barang tidak boleh kosong');location.href='ubah_barang.php';</script>";
	}elseif (empty($nama)) {
		echo "<script>alert('Nama barang tidak boleh kosong');location.href='ubah_barang.php';</script>";	
	}elseif (empty($stok)) {
		echo "<script>alert('Stok barang Pesanan tidak boleh kosong');location.href='ubah_barang.php';</script>";
	}else{
		include "koneksi.php";
		if (empty($stok)) {
			$update=mysqli_query($conn, "update barang set kode_barang='".$kode."',nama_barang='".$nama."',stok_barang='".$stok."' where id_barang='".$id_barang."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert ('Sukses Ubah Barang');location.href='tampil_barang.php';</script>";
			} else{
				 echo "<script>alert ('Gagal Ubah Barang');location.href='ubah_barang.php?id_barang=".$id_barang."';</script>";
			}
		} else{
			$update=mysqli_query($conn, "update barang set kode_barang='".$kode."',nama_barang='".$nama."',stok_barang='".$stok."' where id_barang= '".$id_barang."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert('Sukses Ubah Barang');location.href='tampil_barang.php';</script>";	
			} else{
				echo "<script>alert('Gagal Ubah Barang');location.href='ubah_barang.php?id_barang=".$id_barang."';</script>";
			}
		}
	}
}
?>