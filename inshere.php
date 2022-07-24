<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$harga_jual = $_POST['harga_jual'];
	$harga_beli = $_POST['harga_beli'];
    $satuan = $_POST['satuan'];
	$kategori = $_POST['kategori'];

	$query = mysqli_query($connect, "INSERT INTO tb_master (kode_barang, nama_barang, harga_jual, harga_beli, satuan, kategori) VALUES ('$kode_barang', '$nama_barang', '$harga_jual','$harga_beli','$satuan','$kategori')");
	if ($query) {
		header("Location: view.php");
	}
}
 ?>