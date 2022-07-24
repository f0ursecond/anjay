<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$no_faktur = $_POST['no_faktur'];
	$nama_konsumen = $_POST['nama_konsumen'];
	$kode_barang = $_POST['kode_barang'];
    $jumlah = $_POST['jumlah'];
	$harga_satuan = $_POST['harga_satuan'];
    $harga_total = $_POST['harga_total'];

	$query = mysqli_query($connect, "INSERT INTO tb_penjualan (id, no_faktur, nama_konsumen, kode_barang, jumlah, harga_satuan, harga_total) VALUES ('$id', '$no_faktur', '$nama_konsumen','$kode_barang','$jumlah','$harga_satuan','$harga_total')");
	if ($query) {
		header("Location: viewex.php");
	}
}
 ?>