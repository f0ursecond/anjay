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
 	<p class="exe">FORM STOK BARANG</p>
 	
	 
			<td height="200px">
				<form method="post" action="inshere.php">
					<table border="1" >
						<tr>
							<td>Kode Barang</td>
							<td>:</td>
							<td><input type="text" name="kode_barang" placeholder="Kode Barang"></td>
						</tr>
						<tr>
							<td>Nama Barang</td>
							<td>:</td>
							<td><input type="text" name="nama_barang"  placeholder="Nama Barang"></td>
						</tr>
					
						<tr>
							<td>Harga Jual</td>
							<td>:</td>
							<td><input type="text" name="harga_jual"  placeholder="Harga Jual"></td>
						</tr>
                        <tr>
							<td>Harga Beli</td>
							<td>:</td>
							<td><input type="text" name="harga_beli"  placeholder="Harga Beli"></td>
                        <tr>
							<td>Satuan</td>
							<td>:</td>
							<td><input type="text" name="satuan"  placeholder="Satuan"></td>
						</tr>
                        <tr>
							<td>Kategori</td>
							<td>:</td>
							<td><input type="text" name="kategori"  placeholder="Kategori"></td>
						</tr>
						</tr>
						
					</table>
					<button type="submit" name="submit">DAFTAR</button>
				</form>
			</td>
		
 	
 </body>
 </html>