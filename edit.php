<?php
include 'koneksi.php'; 

if ($_GET['kode_barang']) {
    $kode_barang=$_GET['kode_barang'];
    $query = "SELECT * FROM tb_master WHERE kode_barang=$kode_barang";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($sql); 
    if (mysqli_num_rows($sql) < 1) {
      echo "<script>alert('Data tidak ditemukan')</script>";
    }
if (isset($_POST['simpan'])) {
  $kode_barang = $_POST['kode_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga_jual = $_POST['harga_jual'];
  $harga_beli = $_POST['harga_beli'];
  $satuan = $_POST['satuan'];
  $kategori = $_POST['kategori'];

  $query = mysqli_query($connect, "UPDATE tb_master SET kode_barang='$kode_barang', nama_barang='$nama_barang', harga_jual='$harga_jual', harga_beli='$harga_beli', satuan='$satuan',kategori='$kategori' WHERE kode_barang=$kode_barang");

  if ($query)  {
    header('Location: view.php');
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
    color : yellow;
    align : center;
}
.ere {
    align: center;
}
table	{
			border-color: black	;
			color: black;
			margin-right: auto;
			margin-left: auto;
			align: center;
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
 
		<h1 class="exe">Edit Stok Barang</h1>
		
		
		<tr>
			<td height="110px">
				<form method="post" action="">
				
				<table border="1" class="test">
			 
 			<tr>
 		    	<td>Kode Barang</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>" required /></td>
 		    </tr>
 			<tr>
 		    	<td>Nama Barang</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Harga Jual</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" required /></td>
 		    </tr>
             <tr>
 		    	<td>Harga Beli</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Satuan</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="satuan" value="<?php echo $data['satuan']; ?>" required /></td>
 		    </tr>
 			<tr>
 		    	<td>Kategori</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" required /></td>
 		    </tr>
 		</table>
		
		
		
		<p align="center"><input type="submit" name="simpan" value="Simpan"/></p>

 	</form>


 </body>
 </html>