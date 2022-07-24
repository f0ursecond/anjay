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
            SEMUA TRANSAKSI "TEN MART"
        </p>
 	<p align="center"><a href="endatax.php">[+]Add Data</a></p>
 	<table border="1" align="center">
		<tr font-weight="bold">
			<!-- <th>ID</th> -->
			<th>No Faktur</th>
			<th>Nama Konsumen</th>
			<th>Kode Barang</th>
            <th>Jumlah</th>
			<th>Harga Satuan</th>
            <th>Harga Total</th>
            <th>Fitur</th>
		</tr>
		<tr>
			<?php

			$query = mysqli_query($connect, "SELECT * FROM tb_penjualan");
				while ($data = mysqli_fetch_array($query)) {
				
			?>
				<tr>
					
					<!-- <td><?php echo $data['id']; ?></td> -->
					<td><?php echo $data['no_faktur']; ?></td>
					<td><?php echo $data['nama_konsumen']; ?></td>
					<td><?php echo $data['kode_barang']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php echo $data['harga_satuan']; ?></td>
                    <td><?php echo $data['harga_total']; ?></td>
                    <td><a href='editx.php?id="<?= $data['id'] ?>"'>Edit</a> | <a href='deletex.php?id="<?= $data['id'] ?>"'>Hapus</a></td>
				</tr>
			<?php
			}
			?>
		</tr>
	</table>
 </body>
 </html>