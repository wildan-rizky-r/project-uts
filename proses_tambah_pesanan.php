<?php 
if ($_POST) {
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$waktu_pesanan=$_POST['waktu_pesanan'];
	$barang=$_POST['id_barang'];
	$jumlah=$_POST['jumlah'];
	if (empty($nama)) {
		echo "<script>alert('Nama Pemesan Tidak Boleh Kosong');location.href='tambah_pesanan.php';</script>";
	}elseif (empty($alamat)) {
		echo "<script>alert('Alamat Pemesan Tidak Boleh Kosong');location.href='tambah_pesanan.php';</script>";
	}elseif (empty($waktu_pesanan)) {
		echo "<script>alert('Waktu Pesanan Tidak Boleh Kosong');location.href='tambah_pesanan.php';</script>";
	}elseif (empty($barang)) {
		echo "<script>alert('Barang Pesanan Tidak Boleh Kosong');location.href='tambah_pesanan.php';</script>";
	}elseif (empty($jumlah)) {
		echo "<script>alert('Jumlah Pesanan Tidak Boleh Kosong');location.href='tambah_pesanan.php';</script>";
	}else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into pesanan (nama, alamat, waktu_pesanan, id_barang, jumlah) value ('".$nama."','".$alamat."','".$waktu_pesanan."','".$barang."','".$jumlah."')") or die(mysqli_error($conn));

		if ($insert) {
			echo "<script>alert('Sukses Menambahkan Pesanan');location.href='tampil_pesanan.php';</script>";
		}else{
			echo "<script>alert('Gagal Menambahkan Pesanan');location.href='tambah_pesanan.php';</script>";
		}
	}
}
?>