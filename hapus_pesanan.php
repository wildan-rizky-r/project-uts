<?php 
	if($_GET['id_pesanan']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($conn, "delete from pesanan where id_pesanan='".$_GET['id_pesanan']."'");
		if ($qry_hapus) {
			echo "<script>alert('Sukses Menghapus Pesanan');location.href='tampil_pesanan.php';</script>";
		}else{
			echo "<script>alert('Gagal Menghapus Mahasiswa');location.href='tampil_pesanan.php';</script>";
		}
	}
?>