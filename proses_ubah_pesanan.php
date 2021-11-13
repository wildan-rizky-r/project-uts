<?php 
if ($_POST) {
	$id_pesanan=$_POST['id_pesanan'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$waktu_pesanan=$_POST['waktu_pesanan'];
	$barang=$_POST['id_barang'];
	$jumlah=$_POST['jumlah'];
	if (empty($nama)) {
		echo "<script>alert('Nama tidak boleh kosong');location.href='ubah_pesanan.php';</script>";
	}elseif (empty($alamat)) {
		echo "<script>alert('Alamat tidak boleh kosong');location.href='ubah_pesanan.php';</script>";	
	}elseif (empty($waktu_pesanan)) {
		echo "<script>alert('Waktu Pesanan tidak boleh kosong');location.href='ubah_pesanan.php';</script>";	
	}elseif (empty($barang)) {
		echo "<script>alert('Barang tidak boleh kosong');location.href='ubah_pesanan.php';</script>";	
	}else{
		include "koneksi.php";
		if (empty($jumlah)) {
			$update=mysqli_query($conn, "update pesanan set nama='".$nama."',alamat='".$alamat."',waktu_pesanan='".$waktu_pesanan."',id_barang='".$barang."',jumlah='".$jumlah."' where id_pesanan='".$id_pesanan."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert ('Sukses Ubah Pesanan');location.href='tampil_pesanan.php';</script>";
			} else{
				 echo "<script>alert ('Gagal Ubah Pesanan');location.href='ubah_pesanan.php?id_pesanan=".$id_pesanan."';</script>";
			}
		} else{
			$update=mysqli_query($conn, "update pesanan set nama='".$nama."',alamat='".$alamat."',waktu_pesanan='".$waktu_pesanan."',id_barang='".$barang."',jumlah='".$jumlah."' where id_pesanan= '".$id_pesanan."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert('Sukses Ubah Pesanan');location.href='tampil_pesanan.php';</script>";	
			} else{
				echo "<script>alert('Gagal Ubah Pesanan');location.href='ubah_pesanan.php?id_pesanan=".$id_pesanan."';</script>";
			}
		}
	}
}
?>