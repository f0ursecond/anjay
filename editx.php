<?php
include 'koneksi.php'; 

if ($_GET['id']) {
    $id=$_GET['id'];
    $query = "SELECT * FROM tb_penjualan WHERE id=$id";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($sql); 
    if (mysqli_num_rows($sql) < 1) {
      echo "<script>alert('Data tidak ditemukan')</script>";
    }
if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $no_faktur = $_POST['no_faktur'];
  $nama_konsumen = $_POST['nama_konsumen'];
  $kode_barang = $_POST['kode_barang'];
  $jumlah = $_POST['jumlah'];
  $harga_satuan = $_POST['harga_satuan'];
  $harga_total = $_POST['harga_total'];

  $query = mysqli_query($connect, "UPDATE tb_penjualan SET id='$id', no_faktur='$no_faktur', nama_konsumen='$nama_konsumen', kode_barang='$kode_barang', jumlah='$jumlah',harga_satuan='$harga_satuan',harga_total='$harga_total' WHERE id=$id");

  if ($query)  {
    header('Location: viewex.php');
  } else {
    echo "<script>alert('Data gagal diedit')</script>";
  }
}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>

 <style>
 body {
        background-image: url('exe.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
img {
        width:120px;
        height:150px;
}
.exe {
        color: black;
        text-align: center;
        font-weight: bold;
    }
.eve {
    color : black;
    align : center;
}
.ere {
    align: center;
}
table	{
			border-color: black;
			color: black;
			margin-right: auto;
			margin-left: auto;
}
.test{
	margin-top: 10px;
	margin-bottom: 10px;
}
     </style>

 <body>
 <table border="0" align="center" cellspacing="12">
            <tr>
                <td>
                <img src="logo.png">
    
                </td>
            </tr>
        </table>
 
		<tr>
			<td height="110px">
				<form method="post" action="">
				
				<table border="1" class="test">
			 
 			<tr>
 		    	<td>ID</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="id" value="<?php echo $data['id']; ?>" required /></td>
 		    </tr>
 			<tr>
 		    	<td>No Faktur</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="no_faktur" value="<?php echo $data['no_faktur']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Nama Konsumen</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="nama_konsumen" value="<?php echo $data['nama_konsumen']; ?>" required /></td>
 		    </tr>
             <tr>
 		    	<td>Kode Barang</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Jumlah</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>" required /></td>
 		    </tr>
 			<tr>
 		    	<td>Harga Satuan</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>" required /></td>
 		    </tr>
             <tr>
 		    	<td>Harga Total</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="harga_total" value="<?php echo $data['harga_total']; ?>" required /></td>
 		    </tr>
 		</table>
		 <p align="center"><input type="submit" name="simpan" value="Simpan"/></p>
 	</form>
</table>

 </body>
 </html>