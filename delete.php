<?php 
include 'koneksi.php';
if (isset($_GET['kode_barang'])) {
	$kode_barang = $_GET['kode_barang'];
	$query = mysqli_query($connect, "DELETE FROM tb_master WHERE kode_barang = $kode_barang");
	if ($query) {
		header("Location: view.php?message=delete");
	}
}
 ?>