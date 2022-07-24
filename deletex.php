<?php 
include 'koneksi.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = mysqli_query($connect, "DELETE FROM tb_penjualan WHERE id = $id");
	if ($query) {
		header("Location: viewex.php?message=delete");
	}
}
 ?>