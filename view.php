<?php 
include 'koneksi.php'; 
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

	.exe {
		font-size: 20px;
		font-weight: bold;
	}
	img {
        width:120px;
        height:150px;
    }
    .eze {
        font-weight: bold;
        color: black;
        text-align: center;
        font-size: 20px;
        line-height: 0.8;
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
        <p class="eze">
            STOK BARANG "TEN MART"
        </p>
 	<p align="center"><a href="endata.php">[+]Add Data</a></p>
 	<table border="1" align="center">
		<tr font-weight="bold">
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Harga Jual</th>
			<th>Harga Beli</th>
            <th>Satuan</th>
			<th>Kategori</th>
            <th>Fitur</th>
		</tr>
		<tr>
			<?php

			$query = mysqli_query($connect, "SELECT * FROM tb_master");
				while ($data = mysqli_fetch_array($query)) {
				
			?>
				<tr>
					
					<td><?php echo $data['kode_barang']; ?></td>
					<td><?php echo $data['nama_barang']; ?></td>
					<td><?php echo $data['harga_jual']; ?></td>
					<td><?php echo $data['harga_beli']; ?></td>
                    <td><?php echo $data['satuan']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><a href='edit.php?kode_barang="<?= $data['kode_barang'] ?>"'>Edit</a> | <a href='delete.php?kode_barang="<?= $data['kode_barang'] ?>"'>Hapus</a></td>
					
				</tr>
			<?php
			}
			?>
		</tr>
	</table>
	<form style="padding-top: 15px;" action="" method="POST">
			<center>
				<input type="submit" value="Download PDF" name="pdf"> </input>
				
			</center>
	</form>
	<?php
		
		if(isset($_POST['pdf'])){
			header("location:pdf.php");
		}
	?>
 </body>
 </html>