<?php 
if ($_POST) {
	$id_barang=$_POST['id_barang'];
	$stok=$_POST['stok_barang'];
	if (empty($stok)) {
		echo "<script>alert('Stok barang tidak boleh kosong');location.href='ubah_barang.php';</script>";	
	}else{
		include "koneksi.php";
		if (empty($stok)) {
			$update=mysqli_query($conn, "update barang set stok_barang='".$stok."' where id_barang='".$id_barang."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert ('Sukses Ubah Stok Barang');location.href='tampil_barang.php';</script>";
			} else{
				 echo "<script>alert ('Gagal Ubah Stok Barang');location.href='ubah_barang.php?id_barang=".$id_barang."';</script>";
			}
		} else{
			$update=mysqli_query($conn, "update barang set stok_barang='".$stok."' where id_barang= '".$id_barang."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert('Sukses Ubah Stok Barang');location.href='tampil_barang.php';</script>";	
			} else{
				echo "<script>alert('Gagal Ubah Stok Barang');location.href='ubah_barang.php?id_barang=".$id_barang."';</script>";
			}
		}
	}
}
?>