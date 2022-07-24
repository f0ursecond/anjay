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
			border-color: black;
			color: black;
			margin-right: auto;
			margin-left: auto;
}
button{
			position: absolute;
			left: 47%;
			margin-top: 20px;
			border-radius: 5px;
		}
.test{
	margin-top: -50px;
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
 	<p class="exe">FORM TRANSAKSI</p>
 	
	 
			<td height="200px">
				<form method="post" action="insherex.php">
					<table border="1" >
						<tr>
							<td>ID</td>
							<td>:</td>
							<td><input type="text" name="id" placeholder="ID"></td>
						</tr>
						<tr>
							<td>No Faktur</td>
							<td>:</td>
							<td><input type="text" name="no_faktur"  placeholder="No Faktur"></td>
						</tr>
					
						<tr>
							<td>Nama Konsumen</td>
							<td>:</td>
							<td><input type="text" name="nama_konsumen"  placeholder="Nama Konsumen"></td>
						</tr>
                        <tr>
							<td>kode_barang</td>
							<td>:</td>
							<td><input type="text" name="kode_barang"  placeholder="Kode Barang"></td>
                        <tr>
							<td>Jumlah</td>
							<td>:</td>
							<td><input type="text" name="jumlah"  placeholder="Jumlah"></td>
						</tr>
                        <tr>
							<td>Harga Satuan</td>
							<td>:</td>
							<td><input type="text" name="harga_satuan"  placeholder="Harga Satuan"></td>
						</tr>
                        <tr>
							<td>Harga Total</td>
							<td>:</td>
							<td><input type="text" name="harga_total"  placeholder="Harga Total"></td>
						</tr>
						</tr>
						
					</table>
					<button type="submit" name="submit">DAFTAR</button>
				</form>
			</td>
		
 	
 </body>
 </html>