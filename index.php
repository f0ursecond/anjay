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
	th {
        background-color: #dedede;
        color: #333333;
        font-weight: bold;
    }
    table {
        border-collapse: collapse;
        
    }
	</style>

 <body>
    <table border="1">
        <thead>
            <tr>
                <th >Kode Barang</th>
                <th >Nama Barang</th>
                <th >Harga Jual</th>
                <th >Harga Beli</th>
                <th >Satuan</th>
                <th >Katogeri</th>
            </tr>
        </thead>
        <tbody>
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
            
            </tr>
        <?php
        }
        ?>
        </tbody>
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